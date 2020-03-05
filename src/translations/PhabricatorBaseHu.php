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
      'Application Controller' => 'Alkalmazás vezérlő',
      'Public + configured' => 'Publikus + konfigurált',
      'Public Access' => 'Nyilvános hozzáférés',
      'Core Applications' => 'Core alkalmazások',
      'No Login Required' => 'Nincs szükség bejelentkezésre',
      'No application!' => 'Nem alkalmazás!',
      '%s Application' => '%s alkalmazás',
      'Email Verification Required' => 'E-mail ellenőrzés szükséges',
      'Application Controller, No Login Required' => 'Alkalmazás vezérlő, bejelentkezés nem szükséges',
      'Developer Tools' => 'Fejlesztői eszközök',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'Ez az alkalmazás szükséges a Phabricator működéséhez, ezért minden felhasználónak hozzá kell férnie.',
      'Expect user \'%s\' to be denied access to \'%s\'.' => '\'%s\' felhasználó várja a hozzáférést \'%s\'-hoz/hez/höz.',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'A kérelem korlátozott "%s" paramétert tartalmaz, de ez a vezérlő ("%s") nem engedélyezi. A kérés kiszolgálás meg lett tagadva, mivel ez átirányítás-támadás része lehet.',
      'Unknown capability \'%s\'!' => 'Ismeretlen képesség \'%s\'!',
      'Admin Required' => 'Admin szükséges',
      'Email Verification Required, With Exception' => 'E-mail ellenőrzése szükséges, kivéve',
      'Allow Disabled' => 'Letiltás engedélyezve',
    );
  }

}
