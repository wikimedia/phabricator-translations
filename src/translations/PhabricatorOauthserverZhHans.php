<?php

final class PhabricatorOauthserverZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Enable OAuth Application' => '启用OAuth应用',
      'Server Error' => '服务器错误',
    );
  }

}
