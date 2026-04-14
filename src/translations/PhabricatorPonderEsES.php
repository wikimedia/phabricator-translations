<?php

final class PhabricatorPonderEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
  '%s added an answer to %s.' => '%s añadió una respuesta a %s.',
  '%s closed %s as resolved.' => '%s cerró %s como resuelto.',
);
  }

}
