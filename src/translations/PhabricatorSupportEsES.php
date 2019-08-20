<?php

final class PhabricatorSupportEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Support' => 'Asistencia',
    );
  }

}
