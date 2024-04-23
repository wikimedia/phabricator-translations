<?php

final class PhabricatorPassphraseSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Login/Username' => 'Prijava/uporabniško ime',
      'Show Public Key' => 'Prikaži javni ključ',
      'Public Key (%s)' => 'Javni ključ (%s)',
      'Add New Credential' => 'Dodaj novo poverilnico',
      'Login: %s' => 'Prijava: %s',
    );
  }

}
