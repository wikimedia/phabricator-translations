<?php

final class PhabricatorAlmanacPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Service PHID.' => 'PHID usługi.',
      'Name of the service.' => 'Nazwa usługi.',
      'Installing device %s...' => 'Instalowanie urządzenia %s...',
      'Namespace' => 'Przestrzeń nazw',
      'Add Property' => 'Dodaj właściwość',
      'Builtin Property' => 'Wbudowana właściwość',
      'Name of the network.' => 'Nazwa sieci.',
      'Device %d' => 'Urządzenie %s',
      'Add Interface' => 'Dodaj interfejs',
      'Almanac Namespace' => 'Przestrzeń nazw Almanac',
      'Network %d' => 'Sieć %s',
      'The address of the interface.' => 'Adres interfejsu.',
    );
  }

}
