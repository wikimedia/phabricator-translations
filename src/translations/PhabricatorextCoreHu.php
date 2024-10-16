<?php

final class PhabricatorextCoreHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Next: %s' => 'Következő: %s',
      'Consumer Token' => 'Fogyasztói token',
      'Merged' => 'Összevonva',
      'Related Links' => 'Kapcsolódó hivatkozások',
      'Allow' => 'Engedélyezés',
      'MediaWiki' => 'MediaWiki',
      'Deny' => 'Megtagad',
      'Invalid' => 'Érvénytelen',
      'Secret Token' => 'Titkos token',
      'MediaWiki User' => 'MediaWiki felhasználó',
      'Unknown' => 'Ismeretlen',
      'No Permission' => 'Nincs engedély',
      'Required' => 'Szükséges',
      'Comments' => 'Hozzászólások',
    );
  }

}
