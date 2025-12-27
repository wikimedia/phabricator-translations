<?php

final class TranslatewikiManagementRoundtripWorkflow
  extends TranslatewikiManagementWorkflow {

  protected function didConstruct() {
    $this
      ->setName('roundtrip')
      ->setExamples('**roundtrip** [options] __library__')
      ->setSynopsis(
        pht(
          'Validate extracted translation strings from a library match its builtin translation.'))
      ->setArguments(
        array(
          array(
            'name' => 'project',
            'param' => 'name',
            'help' => pht(
              'Name which the library was written to under projects/'.
              'written to using this name.'),
          ),
          array(
            'name' => 'library',
            'wildcard' => true,
          ),
        ));
  }

  public function execute(PhutilArgumentParser $args) {
    $libpath = $args->getArg('library');
    if (!$libpath) {
      throw new PhutilArgumentUsageException(
        pht(
          'Provide the path to a library to test against!.'));
    }
    if (count($libpath) > 1) {
      throw new PhutilArgumentUsageException(
        pht('Provide the path to exactly one library to test against!'));
    }
    $project = $args->getArg('project');
    if (!phutil_nonempty_string($project)) {
      throw new PhutilArgumentUsageException(
        pht(
          'Provide a project name with "--project".'));
    }
    $libpath = $libpath[0];
    $libname = basename($libpath);
    if (!isset(PhutilBootloader::getInstance()->getAllLibraries()[$libname])) {
      // Assume the library is alongside this repo
      if ($libname == 'misc') {
        // This repo deviates from standard conventions
        $libname = 'wmf-ext-misc';
        phutil_load_library("../$libpath");
      } else {
        phutil_load_library("../$libpath/src");
     }
    }
    $translations = id(new PhutilSymbolLoader())
      ->setLibrary($libname)
      ->setAncestorClass('PhutilTranslation')
      ->loadObjects();
    $original = array();
    foreach ($translations as $transl) {
      if ($transl->getLocaleCode() === 'en_US') {
        $original += $transl->getFilteredTranslations();
      }
    }
    $script = phutil_get_library_root('translations').'/../bin/translatewiki';
    $json_files = id(new FileFinder('projects/'.$project))
      ->withName('en.json')
      ->find();
    $transformed = array();
    foreach ($json_files as $json) {
      $json = 'projects/'.$project.'/'.$json;
      $transformed += id(new TranslatewikiManagementGenerateWorkflow())
        ->getStrings($json,
        str_replace('en.json', 'en-x-raw.json', $json));
    }
    foreach ($transformed as $k => $v) {
      if ($k == $v) {
        unset($transformed[$k]);
        continue;
      }
      if (isset($original[$k]) && $original[$k] === $v) {
        unset($transformed[$k]);
        unset($original[$k]);
      }
    }
    if (empty($transformed) && empty($original)) {
      echo pht('No roundtripping errors found!').PHP_EOL;
    } else {
      echo pht('Found the following roundtripping errors!').PHP_EOL;
      echo pht('Original:').PHP_EOL;
      // var_export doesn't add a trailing newline so needs one at both ends
      var_export($original);
      echo PHP_EOL.pht('After Export/Generate:').PHP_EOL;
      var_export($transformed);
      echo PHP_EOL;
    }
  }

}
