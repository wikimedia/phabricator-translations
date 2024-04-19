<?php

final class PhabricatorPassphraseDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Password for Key' => 'Seba kıliti parola',
      'SSH Private Key' => 'Kılitê SSHyiyo Xısusi',
      'Lock Permanently' => 'Daimi kılit kerê',
      'Login: %s' => 'Cıkewtış:%s',
    );
  }

}
