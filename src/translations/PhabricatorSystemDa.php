<?php

final class PhabricatorSystemDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Panic!' => 'Panik!',
      '%d / hour' => '%s / time',
      'IMPORTANT' => 'VIGTIGT',
      'Destroying objects...' => 'Destruerer objekter.',
      'Aborted, your objects are safe.' => 'Afbrudt, dine objekter er i sikkerhed.',
      'System' => 'System',
      '%d / minute' => '%s / minut',
      '%d / second' => '%s / sekund',
    );
  }

}
