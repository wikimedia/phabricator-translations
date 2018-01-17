<?php

final class TranslatewikiCoreEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Provide the path to a library to export translations from.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Unable to extract string with unrecognized "%%" pattern, "%s": %s.',
      'NONE' => 'NONE',
      'Provide a locale code with "--locale".' => 'Provide a locale code with "--locale".',
      'Ignoring string "%s"; not present in translation source file.' => 'Ignoring string "%s"; not present in translation source file.',
      'Provide the path to exactly one library to export translations from.' => 'Provide the path to exactly one library to export translations from.',
      'Provide a project name to export strings under with "--as".' => 'Provide a project name to export strings under with "--as".',
      'Raw strings' => 'Raw strings',
      'Name of the project that a translation file is being generated for.' => 'Name of the project that a translation file is being generated for.',
      'Extracting library strings...' => 'Extracting library strings...',
      'GENDER' => 'GENDER',
      'Locale code for the generated source.' => 'Locale code for the generated source.',
      'Provide a classname with "--class".' => 'Provide a classname with "--class".',
      'Read %s string(s).' => 'Read %s string(s).',
      'Class name to generate.' => 'Class name to generate.',
      'Frequency Data' => 'Frequency Data',
      'Provide a JSON source file with "--source".' => 'Provide a JSON source file with "--source".',
      'Generate a Phabricator translation classfile.' => 'Generate a Phabricator translation classfile.',
      'JSON source file containing translation strings.' => 'JSON source file containing translation strings.',
      'Export translation strings from a libphutil library.' => 'Export translation strings from a libphutil library.',
      'Writing data (%s, %s) to "%s"...' => 'Writing data (%s, %s) to "%s"...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'Expected library string extraction to genrate file "%s", but no such file exists!',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'Name for the project being exported. Exported files will be written to "projects/" using this name.',
      'Used in:' => 'Used in:',
      'English strings' => 'English strings',
      'Context strings' => 'Context strings',
      'Provide a project name with "--project".' => 'Provide a project name with "--project".',
      'Variable Types: %s.' => 'Variable Types: %s.',
      'Provide an output file with "--out".' => 'Provide an output file with "--out".',
      'Base URI for browsing files in the project being exported.' => 'Base URI for browsing files in the project being exported.',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => 'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!',
      'Done.' => 'Done.',
      'Location to write the generated translation file.' => 'Location to write the generated translation file.',
      'PLURAL' => 'PLURAL',
    );
  }

}
