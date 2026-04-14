<?php

final class PhabricatorConduitEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
  'Epoch timestamp, as an integer.' => 'Cronomarcador de época, como entero.',
  'List of project tags.' => 'Lista de etiquetas del proyecto.',
  'Active API Tokens' => 'Tokens de API activos',
  'You don\'t have any active API tokens.' => 'No tienes ningún token activo.',
);
  }

}
