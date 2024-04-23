<?php

final class PhabricatorPhpastId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Token %d: %s' => 'Token %s: %s',
    );
  }

}
