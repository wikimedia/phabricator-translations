<?php

final class PhabricatorextCoreVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
  'LDAP User' => 'Người dùng LDAP',
  'MediaWiki User' => 'Người dùng MediaWiki',
  'Global Accounts' => 'Tài khoản toàn cục',
);
  }

}
