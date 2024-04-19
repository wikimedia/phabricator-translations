<?php

final class PhabricatorDivinerEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Found %s file(s) in project.' => 'Se encontró %s archivo(s) en el proyecto.',
    );
  }

}
