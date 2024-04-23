<?php

final class PhabricatorPhpastScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Gruppu %s: %s',
      'Token %d: %s' => 'Token %s: %s',
    );
  }

}
