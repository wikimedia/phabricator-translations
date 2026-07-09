<?php

final class PhabricatorMetaFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'Show Enabled Applications' => 'Näytä käyttöönotetut sovellukset',
  'You cannot enable an enabled application.' => 'Käyttöönotettua sovellusta ei voi ottaa käyttöön.',
  'Prototype' => 'Prototyyppi',
  'Really Disable Application?' => 'Haluatko varmasti poistaa sovelluksen käytöstä?',
  'Enable %s application?' => 'Otetaanko sovellus %s käyttöön?',
);
  }

}
