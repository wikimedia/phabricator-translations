<?php

final class TranslatewikiCoreDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Angiv en sti til et bibliotek som oversættelser skal eksporteres fra.',
      'NONE' => 'INGEN',
      'Provide a locale code with "--locale".' => 'Angiv en sprogkode med "--locale".',
      'Ignoring string "%s"; not present in translation source file.' => 'Ignorerer strengen "%s"; ikke til stede i oversættelse kildefilen.',
      'Provide a project name to export strings under with "--as".' => 'Angiv et projektnavn at eksportere strenge under med "--as".',
      'Raw strings' => 'Rå strenge',
      'GENDER' => 'KØN',
      'Locale code for the generated source.' => 'Sprogkode for den genererede kilde.',
      'Provide a classname with "--class".' => 'Angiv et klassenavn med "--class".',
      'Read %s string(s).' => 'Læs %s streng(e).',
      'Class name to generate.' => 'Klassenavn der skal genereres.',
      'Frequency Data' => 'Frekvensdata',
      'Provide a JSON source file with "--source".' => 'Angiv en JSON kildefil med "--source".',
      'JSON source file containing translation strings.' => 'JSON-kilde fil som indeholder oversættelse strenge.',
      'Export translation strings from a libphutil library.' => 'Eksporter oversættelse strenge fra et libphutil-bibliotek.',
      'Writing data (%s, %s) to "%s"...' => 'Skriver data (%s, %s) til "%s"...',
      'Used in:' => 'Anvendes i:',
      'English strings' => 'Engelske strenge',
      'Context strings' => 'Kontekst strenge',
      'Provide a project name with "--project".' => 'Angiv et projektnavn med "--project".',
      'Variable Types: %s.' => 'Variabeltyper: %s.',
      'Provide an output file with "--out".' => 'Angiv en udgangsfil med "--out".',
      'Done.' => 'Fuldført.',
      'Location to write the generated translation file.' => 'Placering som den genererede oversættelsesfil skal skrives til.',
      'PLURAL' => 'FLERTAL',
    );
  }

}
