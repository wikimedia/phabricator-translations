<?php

final class PhabricatorextCoreHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Next: %s' => 'Következő: %s',
      'Merged' => 'Összevonva',
      'Related Links' => 'Kapcsolódó hivatkozások',
      'Secret Key' => 'Titkos kulcs',
      'Allow' => 'Engedélyezés',
      'MediaWiki' => 'MediaWiki',
      'Deny' => 'Megtagad',
      'Invalid' => 'Érvénytelen',
      'MediaWiki User' => 'MediaWiki felhasználó',
      'Unknown' => 'Ismeretlen',
      'Download zip' => 'zip letöltése',
      'No Permission' => 'Nincs engedély',
      'Consumer Key' => 'Fogyasztói kulcs',
      'Required' => 'Szükséges',
      'Comments' => 'Hozzászólások',
    );
  }

}
