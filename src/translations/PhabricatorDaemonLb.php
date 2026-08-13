<?php

final class PhabricatorDaemonLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Unknown status "%s"!' => 'Onbekannte Status „%s“!',
  'Lock' => 'Spären',
  '%s s' => '%s s',
);
  }

}
