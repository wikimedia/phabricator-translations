<?php

final class TranslatewikiCoreCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Proporciona la ruta a una llibreria per exportar traduccions.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'No s\'ha pogut extreure la cadena amb el patró no reconegut "%%", "%s": %s',
      'NONE' => 'CAP',
      'Provide a locale code with "--locale".' => 'Proporciona un codi local amb "--locale".',
      'Ignoring string "%s"; not present in translation source file.' => 'Ignorant la cadena "%s"; no present en el fitxer origen de traducció.',
      'Provide the path to exactly one library to export translations from.' => 'Proporciona la ruta a una llibreria exacta per exportar traduccions.',
      'Provide a project name to export strings under with "--as".' => 'Proporciona un nom de projecte per exportar cadenes amb "--as".',
      'GENDER' => 'GÈNERE',
      'Read %s string(s).' => 'Llegeix %s cadena(es).',
      'Frequency Data' => 'Dada de freqüència',
      'Writing data (%s, %s) to "%s"...' => 'Escrivint dades (%s, %s) a "%s"...',
      'Used in:' => 'Utilitzat a:',
      'English strings' => 'Cadenes en anglès',
      'Context strings' => 'Contexte de les cadenes',
      'Variable Types: %s.' => 'Tipus de variables: %s.',
      'Done.' => 'Fet.',
      'PLURAL' => 'PLURAL',
    );
  }

}
