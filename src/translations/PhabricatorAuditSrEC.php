<?php

final class PhabricatorAuditSrEC
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sr_EC';
  }

  protected function getTranslations() {
    return array(
  '%s added subscribers: %s.' => '%s је додао пратиоца: %s.',
  '%s added subscribers...' => '%s је додао пратиоца...',
  'none' => 'ништа',
);
  }

}
