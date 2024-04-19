<?php

final class PhabricatorAuditNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'GEBRUIKERS',
      'none' => 'geen',
    );
  }

}
