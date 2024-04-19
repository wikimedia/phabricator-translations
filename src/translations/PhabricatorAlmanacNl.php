<?php

final class PhabricatorAlmanacNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Device %d' => 'Apparaat %s',
      'Set the service type.' => 'Soort dienst instellen.',
      'Network' => 'Netwerk',
      'IMPORTANT!' => 'BELANGRIJK!',
      'Set the device.' => 'Apparaat instellen.',
      'Networks' => 'Netwerken',
      'Service type.' => 'Soort dienst.',
    );
  }

}
