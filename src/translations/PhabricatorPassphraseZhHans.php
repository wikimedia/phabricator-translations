<?php

final class PhabricatorPassphraseZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Create Credential' => '创建凭据',
      '%s attached a new secret to %s.' => '%s为%s附加了新的密钥。',
    );
  }

}
