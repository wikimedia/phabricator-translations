<?php

final class PhabricatorAuditScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'UTENTI',
      'Object "%s" is not a valid object.' => 'L\'uggettu "%s" nun è n\'uggettu vàlidu.',
      'none' => 'nuddu',
    );
  }

}
