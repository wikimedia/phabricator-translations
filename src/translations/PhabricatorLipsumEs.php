<?php

final class PhabricatorLipsumEs
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" does not match the name of any generators.' => 'El argumento «%s» no coincide con el nombre de ningún generador.',
      'Unable to load symbol %s: this class does not exist.' => 'No se pudo cargar el símbolo %s; esta clase no existe.',
      'OOPS' => 'VAYA',
      'Generated "%s": %s' => 'Se generó «%s»: %s',
      'Selected generators: %s.' => 'Generadores seleccionados: %s.',
      'GENERATORS' => 'GENERADORES',
      'Are you sure you want to generate piles of garbage?' => '¿Confirmas que quieres generar montones de chorradas?',
    );
  }

}
