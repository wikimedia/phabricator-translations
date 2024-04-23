<?php

final class PhabricatorConsoleSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Profile Page' => 'Profilsida',
      'Profile Permalink' => 'Permanent länk till profil',
      'Unknown event: %s' => 'Okänd händelse: %s',
    );
  }

}
