<?php

final class PhabricatorPolicyEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Members of Project...' => 'Miembros del proyecto...',
      'Members of the project "%s" can take this action.' => 'Los miembros del proyecto «%s» pueden tomar esta acción.',
      'Select Project' => 'Seleccionar proyecto',
      'Members of Project: %s' => 'Miembros del proyecto: %s',
    );
  }

}
