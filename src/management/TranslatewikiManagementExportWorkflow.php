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

    $translatewiki_root = phutil_get_library_root('translations');
    $projects_root = "{$translatewiki_root}/../projects/{$as}/";
    $read_qqq = array();
    $builtin_array = PhutilTranslation::getTranslationMapForLocale('en_US');
    foreach ($strings_data as $string => $spec) {
      $string_key = $this->getStringKey($string);

      $translatewiki_string = $this->getTranslatewikiString(
        $string,
        $spec,
        $builtin_array[$string] ?? null);

      if ($translatewiki_string === null) {
        continue;
      }

      $group = $this->getTranslatewikiGroup($spec);
      if (!isset($read_qqq[$group])) {
        $group_path = $group.'/';
        $qqq_path = $projects_root.$group_path.'qqq.json';
        if (Filesystem::pathExists($qqq_path)) {
          $read_qqq[$group] = phutil_json_decode(Filesystem::readFile($qqq_path));
        } else {
          $read_qqq[$group] = array();
        }
        if (isset($read_qqq[$group]['@metadata'])) {
          $result_qqq[$group]['@metadata'] = $read_qqq[$group]['@metadata'];
        }
      }

      $result_raw[$group][$string_key] = $string;
      $result_en[$group][$string_key] = $translatewiki_string;
      $result_qqq[$group][$string_key] = $this->getTranslatewikiContext(
        $string,
        $spec,
        $read_qqq[$group][$string_key] ?? '');
    }
    if ($as === 'arcanist') {
      // Add extra date elements not found by the translation extractor
      // Not May because the full month extracted from Phabricator is reused
      $extra = array(
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec',
      );
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
        'name' => 'en-x-raw.json',
        'data' => $result_raw,
        'help' => pht('Raw strings'),
      ),
    );


    foreach ($writes as $write) {
      foreach ($write['data'] as $group_key => $data) {
        $group_path = $group_key.'/';

        $path = $projects_root.$group_path.$write['name'];
        Filesystem::createDirectory(dirname($path), 0755, true);

        echo tsprintf(
          "%s\n",
          pht(
            'Writing data (%s, %s) to "%s"...',
            $write['help'],
            $group_key,
            Filesystem::readablePath($path)));

        ksort($data);
        // Put metadata first
        if (isset($data['@metadata'])) {
          $data = array('@metadata' => $data['@metadata']) + $data;
        }
        $data = id(new PhutilJSON())->encodeFormatted($data);

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

  /** This is the top level of the string processing system.
    * It performs all required processing to turn a Phabricator proto-English
    * and/or US English string into something translatable on translatewiki.net
    */
  private function getTranslateWikiString($string, $spec, $useng) {
    if ($useng === null) {
      // No US English translation, so no PLURAL to vary on
      // just add implicit PLURALs and carry on
      return $this->addExtraFuncs(
        $this->convertForTranslateWiki($string),
        $spec);
    }

    // Dive into however many one element arrays there are
    // to find the true variable to branch a PLURAL off of.
    $plural_var = 1;
    while (is_array($useng) && count($useng) == 1) {
      $useng = $useng[0];
      $plural_var++;
    }
    if (is_string($useng)) {
      return $this->addExtraFuncs($this->convertForTranslateWiki($useng), $spec);
    }
    list($singular, $plural) = $useng;
    if (is_array($singular) || is_array($plural)) {
      // The number of these is small enough that it's easier to hardcode
      // them than write a general parser, which is fairly non-trivial
      $hardcoded = array(
        'This key has %s remaining API request(s), limit resets in %s second(s).' =>
          'This key has $1 remaining API {{PLURAL:$1|request|requests}}, '.
          'limit resets in $2 {{PLURAL:$2|second|seconds}}.',
        'Set API poll TTL to +%s second(s) (%s second(s) from now).' =>
          'Set API poll TTL to +$1 {{PLURAL:$1|second|seconds}} ($2 {{PLURAL:$2|second|seconds}} from now).',
        'Scheduling repository "%s" with an update window of %s second(s). Last update was %s second(s) ago.' =>
           'Scheduling repository "$1" with an update window of $2 '.
           '{{PLURAL:$2|second|seconds}}. Last update was $3 {{PLURAL:$3|second|seconds}} ago.',
        'Adjusted **%s** create statements and **%s** use statements.' =>
          'Adjusted **$1** create {{PLURAL:$1|statement|statements}} and '.
          '**$2** use {{PLURAL:$2|statement|statements}}.',
        '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.' =>
          '$1 marked {{PLURAL:$2|an inline comment|$2 inline comments}} as done and '.
          '{{PLURAL:$3|an inline comment|$3 inline comments}} as not done.',
        'Function "%s" expects %s argument(s), but %s argument(s) were provided.' =>
          'Function "$1" expects $2 {{PLURAL:$2|argument|arguments}}, but $3 '.
          '{{PLURAL:$3|argument was|arguments were}} provided.',
        'Processed %s file(s), encountered %s error(s).' =>
          'Processed $1 {{PLURAL:$1|file|files}}, encountered $2 {{PLURAL:$2|error|errors}}.',
        'The locale `%s` defines a translation for the key `%s`, which has at least %s level(s) of arrays, '.
        'however the source message has only %s parameter(s).' =>
          'The locale `$1` defines a translation for the key `$2`, which has at least $3 {{PLURAL:$3|level|levels}} '.
          'of arrays, however the source message has only $4 {{PLURAL:$4|parameter|parameters}}.',
        'This call takes %s parameter(s), but only %s are documented.' =>
          'This call takes $1 {{PLURAL:$1|parameter|parameters}}, but only {{PLURAL:$2|$2 is|$2 are}} documented.',
      );
      if (!isset($hardcoded[$string])) {
        echo tsprintf(
          "%s\n",
          pht(
            'Unable to extract string with multiple PLURAL branches in '.
            'US English: "%s"',
            $string));
          return null;
      }
      return $hardcoded[$string];
    }
    $singular = $this->convertForTranslateWiki($singular);
    $plural = $this->convertForTranslateWiki($plural);
    if (!$singular || !$plural) {
      // convertForTranslateWiki already printed a warning
      return null;
   }

    // The idea of this is that the message will be something like
    // array(
    //   'John added a bar happily', (or maybe 'John added $1 bar happily')
    //   'John added $1 bars happily'
    // )
    // The desired outcome string is `John added {{PLURAL:$1|a bar|$1 bars}} happily`
    // that is, PLURAL wraps the minimum number of words necessary
    // This works well enough for the style of strings typically written in
    // Phorge/Phabricator, but may not be sufficient for the general case
    $words1 = explode(' ', $singular);
    $words2 = explode(' ', $plural);
    $marker = '$'.$plural_var;

    $diff_start = null;
    $diff_max = null;
    $offset = 0;
    foreach ($words1 as $index => $word) {
      // Handle `$1 added a foo: blah` versus `$1 added foos: blah`
      if ($offset == 0 && $index > 0 && $words2[$index - 1] == $word) {
        $offset = -1;
      }
      if (!isset($words2[$index + $offset])) {
        // Fall through to the if statement after the loop
        // which will fail to find a resync point
        break;
      }
      if ($words2[$index + $offset] != $word) {
        $diff_start = $diff_start ?? $index;
        $diff_max = $index;
      }
    }
    if (count($words1) + $offset != count($words2)) {
      // We can't find a resync point, treat the entire rest of string as differing
      $diff_max = max($diff_max, count($words1), count($words2));
    }
    $before = $this->addExtraFuncs(array_slice($words1, 0, $diff_start), $spec, (string)$plural_var);
    $branch1 = implode(' ', array_slice($words1, $diff_start, $diff_max - $diff_start + 1));
    $branch2 = implode(' ', array_slice($words2, $diff_start, $diff_max - $diff_start + $offset + 1));
    $after = $this->addExtraFuncs(array_slice($words1, $diff_max + 1), $spec, (string)$plural_var);

    $bspace = '';
    $aspace = '';
    if (strlen($before)) {
      $bspace = ' ';
    }
    if (strlen($after)) {
      $aspace = ' ';
    }
    return "$before$bspace{{PLURAL:$marker|$branch1|$branch2}}$aspace$after";
  }

  /**
   * Add `idempotent plural` syntax to the given string, based on the type spec
   * That is: convert `There are $1 things' to `There are $1 {{PLURAL:$1|things}}`
   * If Phabricator knows there's always going to be more than one thing, it
   * sometimes doesn't bother to vary on number in the US English locale, however
   * other languages may need to do so.
   *
   * See https://www.mediawiki.org/wiki/Manual:Messages_API#Be_aware_of_PLURAL_use_on_all_numbers
   * (I know Phabricator isn't MediaWiki, but it's pretending to be like MediaWiki
   * and using similar PLURAL syntax)
   */
  private function addExtraFuncs($string, array $spec, $ignore_var = null) {
    if ($string === null) {
      // An error occurred earlier in the process; return null to percolate that
      // error through
      return null;
    }
    $types = idx($spec, 'types');
    if (!$types) {
      return $string;
    }
    $words = $string;
    if (is_string($words)) {
      $words = explode(' ', $words);
    }
    $active_var = null;

    $translatewiki_types = array('number' => 'PLURAL', 'phutilnumber' => 'PLURAL', 'person' => 'GENDER');
    foreach ($words as $index => $word) {
      $vars = null;
      if (preg_match('/\$([0-9])/', $word, $vars)) {
        list($varmark, $var) = $vars;
        $type = idx($types, (int)$var - 1);
        if (!$type || $var === $ignore_var) {
          continue;
        }
        $type = $translatewiki_types[$type];
        // If the next word doesn't contain a variable
        // and ends in 's', then be nice and put the plural on it
        // otherwise put the plural on the word containing the variable
        if (isset($words[$index + 1])) {
          $next = $words[$index + 1];
          $matches = array();
          if (preg_match('/^([^$]+[Ss])([^a-zA-Z]*)$/', $next, $matches)) {
            list($_, $word, $sym) = $matches;
            $words[$index + 1] =  '{{'.$type.':'.$varmark.'|'.$word.'}}'.$sym;
            continue;
          }
        }
        $head = '';
        // Move any punctuation marks out of the PLURAL
        while(ctype_punct($word[0]) && $word[0] !== '$') {
          $head .= $word[0];
          $word = substr($word, 1);
        }
        $trailing_punct = -1;
        while(ctype_punct(substr($word, $trailing_punct))) {
          $trailing_punct -= 1;
        }
        $trailing_punct += 1;
        if ($trailing_punct) {
          $words[$index] = $head.'{{'.$type.':'.$varmark.'|'.substr($word, 0, $trailing_punct).'}}'.
            substr($word, $trailing_punct);
        } else {
          $words[$index] = $head.'{{'.$type.':'.$varmark.'|'.$word.'}}';
        }
      }
    }
    return implode(' ', $words);
  }

  /**
   * This function is the lowest-level string mangling function
   * it handles converting variables from Phabricator's %s syntax
   * to translatewiki's $1 syntax.
   */
  private function convertForTranslateWiki($string) {
    $string = (string)$string;

    // We're going to convert all "%%" (literal percent symbol) to "%".
    // We're going to convert all "%s", "%d", etc., to "$1", "$2", etc.
    // Convert all `$` to `$$` too.

    $pattern = '/(\\%\\+?(?:[0-9]\\$)?(?:[0-9]+(?:\\.[0-9]+)?)?[sdf\\%]|\\$)/';
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
          case '$':
            $replacement = '$$';
            break;
          default:
            $submatches = null;
            if (preg_match('/%([0-9])\$/', $text, $submatches)) {
              $replacement = '$'.$submatches[1];
            } else {
              // It's not a backref, it's some crazy format specifier
              // but generate should still be able to backread it
              $replacement = '$'.$n;
              $n++;
           }
           break;
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
        // Fix for scripts/ and support/ which have a ".." in the path but the browse URI has an extra slash
        $uri = str_replace('//..','/..', $uri);
      } else {
        $uri = null;
      }

      if ($uri) {
        $usage[] = "[{$uri} {$name}:{$line}]";
      } else {
        $usage[] = $name.':'.$line;
      }
    }

    asort($usage);

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
