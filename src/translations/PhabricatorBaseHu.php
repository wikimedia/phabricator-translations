<?php

final class PhabricatorBaseHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Nem alkalmazás \'%s\'!',
      'This application is required, so all users must have access to it.' => 'Ez az alkalmazás szükséges a Phabricator működéséhez, ezért minden felhasználónak hozzá kell férnie.',
      'Can Configure Application' => 'Konfigurálhatja az alkalmazást',
      'Can Use Application' => 'Használhatja az alkalmazást',
      'Core Applications' => 'Core alkalmazások',
      'No application!' => 'Nem alkalmazás!',
      '%s Application' => '%s alkalmazás',
      'Developer Tools' => 'Fejlesztői eszközök',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'A kérelem korlátozott "%s" paramétert tartalmaz, de ez a vezérlő ("%s") nem engedélyezi. A kérés kiszolgálás meg lett tagadva, mivel ez átirányítás-támadás része lehet.',
      'Unknown capability \'%s\'!' => 'Ismeretlen képesség \'%s\'!',
    );
  }

}
