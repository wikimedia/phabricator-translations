<?php

final class TranslatewikiCoreEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
  'Ignoring string "%s"; not present in translation source file.' => 'Se ignorará la cadena «%s» porque no está presente en el archivo de origen de la traducción.',
  'Extracting library strings...' => 'Extrayendo las cadenas de la biblioteca…',
  'Provide a classname with "--class".' => 'Proporciona un nombre de clase con «--class».',
  'Class name to generate.' => 'Nombre de clase que generar.',
  'Provide a JSON source file with "--source".' => 'Proporciona un archivo de código fuente en JSON con «--source».',
  'Export translation strings from a libphutil library.' => 'Exportar cadenas de traducción desde una biblioteca libphutil.',
  'Writing data (%s, %s) to "%s"...' => 'Escribiendo datos (%s, %s) en «%s»…',
  'Provide an output file with "--out".' => 'Proporciona un archivo de salida mediante «--out».',
  'Done.' => 'Hecho.',
  'Location to write the generated translation file.' => 'Ubicación donde guardar el archivo de traducción generado.',
);
  }

}
