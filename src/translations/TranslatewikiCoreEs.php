<?php

final class TranslatewikiCoreEs
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es';
  }

  protected function getTranslations() {
    return array(
      'NONE' => 'NINGUNO',
      'Ignoring string "%s"; not present in translation source file.' => 'Se ignorará la cadena «%s» porque no está presente en el archivo de origen de la traducción.',
      'Extracting library strings...' => 'Extrayendo las cadenas de la biblioteca…',
      'Class name to generate.' => 'Nombre de clase que generar.',
      'Frequency Data' => 'Datos de frecuencia',
      'Provide a JSON source file with "--source".' => 'Proporciona un archivo de código fuente en JSON con «--source».',
      'Export translation strings from a libphutil library.' => 'Exportar cadenas de traducción desde una biblioteca libphutil.',
      'Writing data (%s, %s) to "%s"...' => 'Escribiendo datos (%s, %s) en «%s»…',
      'Variable Types: %s.' => 'Tipos de variables: %s.',
      'Provide an output file with "--out".' => 'Proporciona un archivo de salida mediante «--out».',
      'Done.' => 'Hecho.',
      'Location to write the generated translation file.' => 'Ubicación donde guardar el archivo de traducción generado.',
      'PLURAL' => 'PLURAL',
    );
  }

}
