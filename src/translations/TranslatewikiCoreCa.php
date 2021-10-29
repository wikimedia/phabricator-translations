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
      'Raw strings' => 'Cadenes en brut',
      'Name of the project that a translation file is being generated for.' => 'Nom del projecte pel qual s\'està generant un fitxer de traducció.',
      'Extracting library strings...' => 'S\'estan extraient les cadenes de la biblioteca...',
      'GENDER' => 'GÈNERE',
      'Locale code for the generated source.' => 'Codi d’internacionalització de la font generada.',
      'Provide a classname with "--class".' => 'Proporciona un nom de classe amb "--class".',
      'Read %s string(s).' => 'Llegeix %s cadenes.',
      'Class name to generate.' => 'Nom de la classe a generar.',
      'Frequency Data' => 'Dades de freqüència',
      'Provide a JSON source file with "--source".' => 'Proporciona un fitxer de codi JSON amb "--source".',
      'Generate a Phabricator translation classfile.' => 'Genera un fitxer de classe de traducció del Phabricator.',
      'JSON source file containing translation strings.' => 'Fitxer font JSON que conté cadenes de traducció.',
      'Export translation strings from a libphutil library.' => 'Exporta les cadenes de traducció des d\'una biblioteca libphutil.',
      'Writing data (%s, %s) to "%s"...' => 'Escrivint dades (%s, %s) a "%s"...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'S\'esperava una extracció de cadenes de la biblioteca per a obtenir una taxació del fitxer «%s», però no existeix aquest fitxer!',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'Nom del projecte que s\'està exportant. Els fitxers exportats s\'escriuran a "projects/"  utilitzant aquest nom.',
      'Used in:' => 'Utilitzat a:',
      'English strings' => 'Cadenes en anglès',
      'Context strings' => 'Context de les cadenes',
      'Provide a project name with "--project".' => 'Proporciona un nom de projecte amb "--project".',
      'Variable Types: %s.' => 'Tipus de variables: %s.',
      'Provide an output file with "--out".' => 'Provide an output file with "--out".',
      'Base URI for browsing files in the project being exported.' => 'Base URI per navegar pels fitxers en el projecte que s\'està exportant.',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => 'Passa --clean a l\'extractor subjacent per deixar anar la caché abans d\'extreure les cadenes i fer una reconstrucció neta completa. A poc a poc!',
      'Done.' => 'Fet.',
      'Location to write the generated translation file.' => 'Ubicació per escriure el fitxer de traducció generat.',
      'PLURAL' => 'PLURAL',
    );
  }

}
