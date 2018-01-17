<?php

final class PhabricatorBaseHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Nem alkalmazás \'%s\'!',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => '\'%s\' felhasználó várja a hozzáférést \'%s\'-hoz/hez/höz.',
      'Can Configure Application' => 'Konfigurálhatja az alkalmazást',
      'Can Use Application' => 'Használhatja az alkalmazást',
      'Public Access' => 'Nyilvános hozzáférés',
      'Core Applications' => 'Core alkalmazások',
      'No Login Required' => 'Nincs szükség bejelentkezésre',
      'No application!' => 'Nem alkalmazás!',
      '%s Application' => '%s alkalmazás',
      'Email Verification Required' => 'E-mail ellenőrzés szükséges',
      'Developer Tools' => 'Fejlesztői eszközök',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'Ez az alkalmazás szükséges a Phabricator működéséhez, ezért minden felhasználónak hozzá kell férnie.',
      'Unknown capability \'%s\'!' => 'Ismeretlen képesség \'%s\'!',
      'Admin Required' => 'Admin szükséges',
      'Email Verification Required, With Exception' => 'E-mail ellenőrzése szükséges, kivéve',
      'Allow Disabled' => 'Letiltás engedélyezve',
    );
  }

}
