<?php

function init_translatewiki_script(array $options = array()) {
  error_reporting(E_ALL | E_STRICT);
  ini_set('display_errors', 1);

  $include_path = ini_get('include_path');
  ini_set(
    'include_path',
    $include_path.PATH_SEPARATOR.dirname(__FILE__).'/../../../');

  $ok = @include_once 'arcanist/support/init/init-script.php';

  if (!$ok) {
    echo
      'FATAL ERROR: Unable to load the "Arcanist" library. '.
      'Put "arcanist/" next to "phorge/" or "phabricator/" on disk.';
    echo "\n";
    exit(1);
  }

  $root = dirname(__FILE__).'/../../';
  phutil_load_library($root.'/src/');

  $path_arcanist = PlatformSymbols::getPlatformClientPath();
  $path_phorge = PlatformSymbols::getPlatformServerPath();
  phutil_load_library($path_arcanist . 'src');
  phutil_load_library($path_phorge . 'src');
}
