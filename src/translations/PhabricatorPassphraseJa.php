<?php

final class PhabricatorPassphraseJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Public Key (%s)' => '公開鍵 (%s)',
      'SSH Private Key' => 'SSH 秘密鍵',
      'Login: %s' => 'ログイン: %s',
    );
  }

}
