<?php

final class TranslatewikiManagementExportWorkflow
  extends TranslatewikiManagementWorkflow {

  private $browseURI;

  protected function didConstruct() {
    $this
      ->setName('export')
      ->setExamples('**export** [options] __library__')
      ->setSynopsis(
        pht(
          'Export translation strings from a libphutil library.'))
      ->setArguments(
        array(
          array(
            'name' => 'as',
            'param' => 'name',
            'help' => pht(
              'Name for the project being exported. Exported files will be '.
              'written to "projects/" using this name.'),
          ),
          array(
            'name' => 'browse-uri',
            'param' => 'uri',
            'help' => pht(
              'Base URI for browsing files in the project being exported.'),
          ),
          array(
            'name' => 'clean',
            'help' => pht(
              'Pass --clean to the underlying extractor to drop caches '.
              'before extracting strings and do a full clean rebuild. Slow!'),
          ),
          array(
            'name' => 'library',
            'wildcard' => true,
          ),
        ));
  }

  public function execute(PhutilArgumentParser $args) {
    $library = $args->getArg('library');
    if (!$library) {
      throw new PhutilArgumentUsageException(
        pht(
          'Provide the path to a library to export translations from.'));
    }

    if (count($library) > 1) {
      throw new PhutilArgumentUsageException(
        pht(
          'Provide the path to exactly one library to export translations '.
          'from.'));
    }

    $as = $args->getArg('as');
    if (!phutil_nonempty_string($as)) {
      throw new PhutilArgumentUsageException(
        pht(
          'Provide a project name to export strings under with "--as".'));
    }

    $this->browseURI = $args->getArg('browse-uri');

    $phabricator_root = phutil_get_library_root('phabricator');
    $i18n_bin = $phabricator_root.'/../bin/i18n';

    $export_root = head($library);

    echo tsprintf(
      "%s\n",
      pht('Extracting library strings...'));

    $extract_args = array();
    if ($args->getArg('clean')) {
      $extract_args[] = '--clean';
    }

    $err = phutil_passthru(
      '%R extract %Ls %R',
      $i18n_bin,
      $extract_args,
      $export_root);

    if ($err) {
      return $err;
    }

    $strings_path = $export_root.'/.cache/i18n_strings.json';
    if (!Filesystem::pathExists($strings_path)) {
      throw new Exception(
        pht(
          'Expected library string extraction to genrate file "%s", but '.
          'no such file exists!',
          $strings_path));
    }

    $strings_data = Filesystem::readFile($strings_path);
    $strings_data = phutil_json_decode($strings_data);

    echo tsprintf(
      "%s\n",
      pht(
        'Read %s string(s).',
        count($strings_data)));

    $result_en = array();
    $result_qqq = array();
    $result_raw = array();
    $frequency = array();

    $translatewiki_root = phutil_get_library_root('translations');
    $projects_root = "{$translatewiki_root}/../projects/{$as}/";
    $read_qqq = array();
    foreach ($strings_data as $string => $spec) {
      $string_key = $this->getStringKey($string);

      $translatewiki_string = $this->getTranslatewikiString(
        $string,
        $spec);

      if ($translatewiki_string === null) {
        continue;
      }

      $group = $this->getTranslatewikiGroup($spec);
      if (!isset($read_qqq[$group])) {
        if ($group == '<global>') {
          $group_path = null;
        } else {
          $group_path = $group.'/';
        }
        $qqq_path = $projects_root.$group_path.'qqq.json';
        if (Filesystem::pathExists($qqq_path)) {
          $read_qqq[$group] = phutil_json_decode(Filesystem::readFile($qqq_path));
        } else {
          $read_qqq[$group] = array();
        }
      }
      
      $result_raw[$group][$string_key] = $string;
      $result_en[$group][$string_key] = $translatewiki_string;
      $result_qqq[$group][$string_key] = $this->getTranslatewikiContext(
        $string,
        $spec,
        $read_qqq[$group][$string_key] ?? '');

      $frequency['<global>'][$string_key] = 0;
    }
    if ( $as === 'arcanist' ) {
      # Add extra date elements not found by the translation extractor
      # Not May because the full month extracted from Phabricator is reused
      $extra = [
        "Jan", "Feb", "Mar", "Apr", "Jun", "Jul", "Aug", "Sep",
        "Oct", "Nov", "Dec",
        # Uncomment once https://we.phorge.it/T15811 is fixed and Wikimedia
        # pulls in the release with the fix
        # "AM", "PM", "am", "pm"
      ];
      foreach ($extra as $string) {
        $string_key = $this->getStringKey($string);
        $result_raw['core'][$string_key] = $string;
        $result_en['core'][$string_key] = $string;
        if (isset($read_qqq['core'][$string_key])) {
          $result_qqq['core'][$string_key] = $read_qqq['core'][$string_key];
        }
      }
    }

    $writes = array(
      array(
        'name' => 'en.json',
        'data' => $result_en,
        'help' => pht('English strings'),
      ),
      array(
        'name' => 'qqq.json',
        'data' => $result_qqq,
        'help' => pht('Context strings'),
      ),
      array(
        'name' => 'raw.json',
        'data' => $result_raw,
        'help' => pht('Raw strings'),
      ),
      array(
        'name' => 'frequency.json',
        'data' => $frequency,
        'help' => pht('Frequency Data'),
        'type' => 'frequency',
      ),
    );


    foreach ($writes as $write) {
      foreach ($write['data'] as $group_key => $data) {
        if ($group_key == '<global>') {
          $group_path = null;
        } else {
          $group_path = $group_key.'/';
        }

        $path = $projects_root.$group_path.$write['name'];
        Filesystem::createDirectory(dirname($path), 0755, true);

        echo tsprintf(
          "%s\n",
          pht(
            'Writing data (%s, %s) to "%s"...',
            $write['help'],
            $group_key,
            Filesystem::readablePath($path)));

        $as_list = false;
        switch (idx($write, 'type')) {
          case 'frequency':
            arsort($data);
            $data = array_keys($data);
            $as_list = true;
            break;
          default:
            ksort($data);
            break;
        }

        if ($as_list) {
          $data = id(new PhutilJSON())
            ->encodeAsList($data);
        } else {
          $data = id(new PhutilJSON())
            ->encodeFormatted($data);
        }

        Filesystem::writeFile($path, $data);
      }
    }

    echo tsprintf(
      "%s\n",
      pht('Done.'));

    return 0;
  }

  private function getStringKey($string) {
    return substr(sha1($string), 0, 16);
  }

  private function getTranslatewikiString($string, array $spec) {
    $string = (string)$string;

    // We're going to convert all "%%" (literal percent symbol) to "%".
    // We're going to convert all "%s", "%d", etc., to "$1", "$2", etc.

    $pattern = '/(\%.)|(\\$)/';
    $matches = null;
    $count = preg_match_all(
      $pattern,
      $string,
      $matches,
      PREG_PATTERN_ORDER | PREG_OFFSET_CAPTURE);

    $n = 1;
    $adjust = 0;

    if ($count) {
      foreach ($matches[1] as $pattern_hit) {
        if (!$pattern_hit) {
          continue;
        }

        $text = $pattern_hit[0];
        $offset = $pattern_hit[1];

        if ($offset == -1) {
          continue;
        }

        $replacement = null;
        switch ($text) {
          case '%%':
            $replacement = '%';
            break;
          case '%d':
          case '%s':
            $replacement = '$'.$n;
            $n++;
            break;
          default:
            echo tsprintf(
              "%s\n",
              pht(
                'Unable to extract string with unrecognized "%%" pattern, '.
                '"%s": %s.',
                $text,
                $string));
            return null;
        }

        if ($replacement !== null) {
          $string = substr_replace(
            $string,
            $replacement,
            $offset + $adjust,
            strlen($text));
          $adjust += strlen($replacement) - strlen($text);
        }
      }

      foreach ($matches[2] as $dollar_hit) {
        if (!$dollar_hit) {
          continue;
        }

        $text = $dollar_hit[0];
        $offset = $dollar_hit[1];

        if ($offset == -1) {
          continue;
        }

        echo tsprintf(
          "%s\n",
          pht(
            'Unable to extract string containing "$" symbol: %s',
            $string));
        return null;
      }
    }

    return (string)$string;
  }

  private function getTranslatewikiContext($string, array $spec, $old) {
    $help = array();
    $regex = '/\n*(Variable Types: .*\n+)?Used in:\n\n?(.*\.php\]?:[0-9]+\]?\n?)+/';
    $count = 0;
    $replaced = preg_replace($regex, '', $old, -1, $count);
    if ($old !== '' && $count === 0) {
      return $old;
    }
    if ($replaced) {
      $help[] = $replaced;
      $help[] = "\n\n";
    }
    $usage = array();
    foreach ($spec['uses'] as $use) {
      $name = basename($use['file']);
      $line = $use['line'];

      if ($this->browseURI) {
        $uri = $this->browseURI.$use['file'].'$'.$line;
      } else {
        $uri = null;
      }

      if ($uri) {
        $usage[] = "[{$uri} {$name}:{$line}]";
      } else {
        $usage[] = $name.':'.$line;
      }
    }

    $types = idx($spec, 'types');
    if ($types) {
      // Relabel types to be more familiar to Translatewiki users.
      $type_map = array(
        '' => pht('NONE'),
        'person' => pht('GENDER'),
        'number' => pht('PLURAL'),
      );

      $type_list = array();
      foreach ($types as $type) {
        $type_list[] = idx($type_map, $type, $type);
      }
      $type_list = implode(', ', $type_list);

      $help[] = pht('Variable Types: %s.', $type_list);
      $help[] = "\n";
    }

    if ($usage) {
      $help[] = pht('Used in:');
      $help[] = "\n\n";
      $help[] = implode("\n", $usage)."\n";
    }
    return trim(implode('', $help));
  }

  private function getTranslatewikiGroup(array $spec) {
    $applications = array();
    foreach ($spec['uses'] as $use) {
      $matches = null;
      $ok = preg_match(
        '(/applications/(?P<application>[^/]+)/)',
        $use['file'],
        $matches);
      if ($ok) {
        $applications[$matches['application']] = true;
      }
    }

    if (count($applications) == 1) {
      return head_key($applications);
    }

    return 'core';
  }

}
