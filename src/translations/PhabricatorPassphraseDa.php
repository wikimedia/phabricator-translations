<?php

final class PhabricatorPassphraseDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Lock Permanently:' => 'Lås permanent:',
      'Login/Username' => 'Login/brugernavn',
      'Lock Permanently' => 'Lås permanent',
      'Locked Permanently' => 'Lås permanent',
    );
  }

}
