<?php

final class PhabricatorOauthserverSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'OAuth Login Provider' => 'Ponudnik identifikatorja OAuth',
      'Authorization code %s not found.' => 'Pooblastitvena koda %s ni bila najdena.',
      'Required request parameter %s is missing.' => 'Manjka obvezni parameter zahtevka %s.',
      'Required parameter %s missing.' => 'Manjka obvezni parameter %s.',
      'New application name.' => 'Novo ime aplikacije.',
      'Application Disabled' => 'Aplikacija onemogočena',
      'Redirect URI' => 'Preusmeritveni URI',
      'Required parameter code missing.' => 'Manjka obvezna koda parametra.',
    );
  }

}
