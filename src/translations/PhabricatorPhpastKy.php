<?php

final class PhabricatorPhpastKy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ky';
  }

  protected function getTranslations() {
    return array(
      'Token %d: %s' => '%s токени: %s',
    );
  }

}
