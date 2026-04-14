<?php

final class PhabricatorSystemDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
  'Panic!' => 'Panik!',
  '%d / hour' => '%d / time',
  'IMPORTANT' => 'VIGTIGT',
  'Destroying objects...' => 'Destruerer objekter.',
  'Aborted, your objects are safe.' => 'Afbrudt, dine objekter er i sikkerhed.',
  'System' => 'System',
  '%d / minute' => '%d / minut',
  '%d / second' => '%d / sekund',
);
  }

}
