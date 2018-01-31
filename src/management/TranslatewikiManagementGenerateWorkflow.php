<?php

final class TranslatewikiManagementGenerateWorkflow
  extends TranslatewikiManagementWorkflow {

  protected function didConstruct() {
    $this
      ->setName('generate')
      ->setExamples('**generate** [options]')
      ->setSynopsis(
        pht('Generate a Phabricator translation classfile.'))
      ->setArguments(
        array(
          array(
            'name' => 'source',
            'param' => 'file',
            'help' => pht(
              'JSON source file containing translation strings.'),
          ),
          array(
            'name' => 'class',
            'param' => 'classname',
            'help' => pht(
              'Class name to generate.'),
          ),
          array(
            'name' => 'locale',
            'param' => 'code',
            'help' => pht(
              'Locale code for the generated source.'),
          ),
          array(
            'name' => 'project',
            'param' => 'name',
            'help' => pht(
              'Name of the project that a translation file is being '.
              'generated for.'),
          ),
          array(
            'name' => 'out',
            'param' => 'file',
            'help' => pht(
              'Location to write the generated translation file.'),
          ),
        ));
  }

  public function execute(PhutilArgumentParser $args) {
    $source = $args->getArg('source');
    if ($source === null) {
      throw new PhutilArgumentUsageException(
        pht(
          'Provide a JSON source file with "--source".'));
    }

    $class = $args->getArg('class');
    if ($class === null) {
      throw new PhutilArgumentUsageException(
        pht(
          'Provide a classname with "--class".'));
    }

    $locale = $args->getArg('locale');
    if ($locale === null) {
      throw new PhutilArgumentUsageException(
        pht(
          'Provide a locale code with "--locale".'));
    }

    $project = $args->getArg('project');
    if ($project === null) {
      throw new PhutilArgumentUsageException(
        pht(
           'Provide a project name with "--project".'));
    }

    $out = $args->getArg('out');
    if ($out === null) {
      throw new PhutilArgumentUsageException(
        pht(
          'Provide an output file with "--out".'));
    }

    $source_data = Filesystem::readFile($source);
    $source_data = phutil_json_decode($source_data);

    $translatewiki_root = phutil_get_library_root('translatewiki');
    $project_root = "{$translatewiki_root}/../projects/{$project}/";

    $project_data = Filesystem::readFile($project_root.'/raw.json');
    $project_data = phutil_json_decode($project_data);

    $result = array();
    foreach ($source_data as $key => $string) {
      if (!isset($project_data[$key])) {
        if (is_array($string)) {
          $string = json_encode($string);
        }
        echo tsprintf(
          "%s\n",
          pht(
            'Ignoring string "%s"; not present in translation source file.',
            $string));
        continue;
      }

      $output = $this->getPhabricatorTranslation($string);
      if ($output === null) {
        continue;
      }

      $result[$project_data[$key]] = $output;
    }

    $export_locale = var_export($locale, true);
    $export_strings = var_export($result, true);

    // Indent the strings in a more standard way.
    $export_strings = str_replace("\n", "\n    ", $export_strings);

    // Remove the explicit array keys.
    $export_strings = preg_replace('/^(\s*)\d+ => /m', '\1', $export_strings);

    // Remove empty lines.
    $export_strings = preg_replace('/\n(\s*\n)+/', "\n", $export_strings);

    // Rewrite "array (" as "array(".
    $export_strings = preg_replace(
      '/^(\s*)array \(/m',
      '\1array(',
      $export_strings);

    // Remove extra newlines after "=>".
    $export_strings = preg_replace(
      '/=>\s*array\(/',
      '=> array(',
      $export_strings);

    $export_strings = rtrim($export_strings);

    $class = <<<EOCLASS
<?php

final class {$class}
  extends PhutilTranslation {

  public function getLocaleCode() {
    return {$export_locale};
  }

  protected function getTranslations() {
    return {$export_strings};
  }

}

EOCLASS;

    Filesystem::writeFile($out, $class);

    echo tsprintf(
      "%s\n",
      pht('Done.'));

    return 0;
  }

  private function getPhabricatorTranslation($string) {

    // First, we need to split all "{{PLURAL:$1|option|option}}" patterns
    // into variants. This is involved because multiple sections may use the
    // same variable, and they may occur out of order.

    $pattern = '/\{\{(PLURAL|GENDER):\$(\d+)\|([^}]*)\}\}/';
    $matches = null;
    $count = preg_match_all(
      $pattern,
      $string,
      $matches,
      PREG_SET_ORDER | PREG_OFFSET_CAPTURE);

    if (!$count) {
      return $this->convertVariants($string);
    }

    $patches = array();
    foreach ($matches as $match) {
      $position = (int)$match[2][0];
      $parts = explode('|', $match[3][0]);
      $patches[$position][] = array(
        'length' => strlen($match[0][0]),
        'offset' => $match[0][1],
        'parts' => $parts,
      );
    }

    if ($patches) {
      $max_position = max(array_keys($patches));
    } else {
      $max_position = array();
    }

    $variants = $this->buildVariants(
      $patches,
      array(),
      1,
      $max_position);

    $variants = $this->applyVariants(
      $string,
      $variants);

    $variants = $this->collapseVariants($variants);
    $variants = $this->convertVariants($variants);

    return $variants;
  }

  private function buildVariants(
    array $patches,
    $stack_apply,
    $pos,
    $max) {

    $variants = array();

    $apply = idx($patches, $pos, array());
    if (!$apply) {
      $variants[] = array(
        'apply' => $stack_apply,
      );
    } else {
      $max_parts = 0;
      foreach ($apply as $patch) {
        $max_parts = max($max_parts, count($patch['parts']));
      }

      for ($ii = 0; $ii < $max_parts; $ii++) {
        $variant_apply = $stack_apply;
        foreach ($apply as $patch) {
          $part = idx($patch['parts'], $ii);
          if ($part === null) {
            continue;
          }

          $variant_apply[] = array(
            'offset' => $patch['offset'],
            'length' => $patch['length'],
            'part' => $part,
          );
        }
        $variants[] = array(
          'apply' => $variant_apply,
        );
      }
    }

    if ($pos == $max) {
      return $variants;
    }

    $result = array();
    foreach ($variants as $variant) {
      $result[] = $this->buildVariants(
        $patches,
        $variant['apply'],
        $pos + 1,
        $max);
    }

    return $result;
  }

  private function applyVariants($string, array $variants) {
    $result = array();
    foreach ($variants as $variant) {
      if (isset($variant['apply'])) {
        $result[] = $this->applyPatches($string, $variant['apply']);
      } else {
        $result[] = $this->applyVariants($string, $variant);
      }
    }
    return $result;
  }

  private function applyPatches($string, array $patches) {
    $patches = isort($patches, 'offset');

    $adjust = 0;
    foreach ($patches as $patch) {
      $string = substr_replace(
        $string,
        $patch['part'],
        $patch['offset'] + $adjust,
        $patch['length']);

      $adjust += (strlen($patch['part']) - $patch['length']);
    }

    return $string;
  }

  /**
   * When all variants along a particular branch are the same, we can collapse
   * them to their common root.
   */
  private function collapseVariants(array $variants) {
    foreach ($variants as $key => $value) {
      if (is_array($value)) {
        $variants[$key] = $this->collapseVariants($value);
      }
    }

    if (count($variants) == 1) {
      $variant = head($variants);
      if (is_string($variant)) {
        return $variant;
      }
    }

    return $variants;
  }

  private function convertVariants($variants) {
    if (is_string($variants)) {
      return $this->convertVariant($variants);
    } else {
      foreach ($variants as $key => $variant) {
        $variants[$key] = $this->convertVariants($variant);
      }
      return $variants;
    }
  }

  private function convertVariant($string) {
    // We're going to convert:
    //   - All "%" to "%%".
    //   - All "$1" to "%s".

    // TODO: We currently lose information about "%d" integers in the
    // conversion process.

    $string = str_replace('%', '%%', $string);

    $matches = null;
    $count = preg_match_all(
      '/\$(\d+)/',
      $string,
      $matches,
      PREG_OFFSET_CAPTURE);

    if ($count) {
      $n = 1;

      // NOTE: This extra "-1" is so we get rid of the "$", too.
      $adjust = -1;
      foreach ($matches[1] as $match) {
        $idx = (int)$match[0];
        if ($idx == $n) {
          $replacement = '%s';
        } else {
          $replacement = '%'.$idx.'$s';
        }
        $string = substr_replace(
          $string,
          $replacement,
          $match[1] + $adjust,
          strlen($match[0]) + 1);

        $adjust += (strlen($replacement) - (strlen($match[0]) + 1));
        $n++;
      }
    }

    return $string;
  }

}
