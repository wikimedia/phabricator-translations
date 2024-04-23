<?php

final class PhabricatorAuditBan
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ban';
  }

  protected function getTranslations() {
    return array(
      'Welcome to Audit' => 'Rahajeng rauh ring Audit',
    );
  }

}
