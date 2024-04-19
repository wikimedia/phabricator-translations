<?php

final class PhabricatorAuditIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'UTENTI',
      'none' => 'nessuno',
    );
  }

}
