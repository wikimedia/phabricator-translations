<?php

final class PhabricatorAuditDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'BRUGERE',
      'Updating "%s" (%s)...' => 'Opdaterer "%s" (%s)...',
      'none' => 'ingen',
      'Ancestors Of' => 'Forfædre af',
    );
  }

}
