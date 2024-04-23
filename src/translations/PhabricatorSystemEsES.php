<?php

final class PhabricatorSystemEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'En este sistema no se ha instalado la extensión «%s», por lo que no se admiten las codificaciones de caracteres. Instala «%s» para activar esta funcionalidad.',
      'No such object "%s" exists!' => 'No existe el objeto «%s».',
      '%d / hour' => '%s/hora',
      'IMPORTANT' => 'IMPORTANTE',
      'Destroying objects...' => 'Destruyendo objetos…',
      'View Affected Path Index' => 'Ver Índice de la Ruta Afectada',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'Esta modalidad está activa porque ninguna base de datos incluye un rol «%s» en la opción «%s» de la configuración.',
      'Select Character Encoding' => 'Seleccionar codificación de caracteres',
      'DATA WILL BE PERMANENTLY DESTROYED' => 'SE DESTRUIRÁN LOS DATOS PERMANENTEMENTE',
      'System' => 'Sistema',
      'DELETING OBJECTS OFTEN BREAKS THINGS' => 'A MENUDO, ELIMINAR OBJETOS ECHA A PERDER COSAS',
      'Destroy objects without prompting.' => 'Destruir objetos sin consultar.',
    );
  }

}
