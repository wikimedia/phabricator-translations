<?php

final class PhabricatorAuditEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'USUARIOS',
      'Updating "%s" (%s)...' => 'Actualizando «%s» (%s)…',
      'Auditor' => 'Auditor',
      'none' => 'ninguno',
    );
  }

}
