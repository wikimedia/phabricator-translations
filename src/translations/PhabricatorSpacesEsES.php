<?php

final class PhabricatorSpacesEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      '%s updated the space description.' => '%s actualizó la descripción del espacio.',
      'Support for Spaces' => 'Compatibilidad con espacios',
      'Spaces must have a name.' => 'Los espacios deben tener un nombre.',
      'CHANGES TO SPACE DESCRIPTION' => 'CAMBIOS A LA DESCRIPCIÓN DEL ESPACIO',
      'Spaces' => 'Espacios',
      'Space %s: %s' => 'Espacio %s: %s',
      'No spaces found.' => 'No se encontró ningún espacio.',
      '%s made space %s the default space.' => '%s marcó como predeterminado el espacio %s.',
      'Activate Space' => 'Activar espacio',
      'Show Only Active Spaces' => 'Mostrar solo los espacios activos',
      'Active Spaces' => 'Espacios activos',
    );
  }

}
