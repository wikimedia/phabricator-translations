<?php

final class PhabricatorConsoleFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Internal ID' => 'Sisäinen tunnus',
      'Error Log (%d)' => 'Virheloki (%s)',
      'Realtime' => 'Reaaliaika',
      'Site' => 'Sivusto',
      'Reconnect' => 'Yhdistä uudelleen',
      'No errors.' => 'Ei virheitä.',
      'Installation Guide' => 'Asennusohje',
      'Error Log' => 'Virheloki',
      'Information about services.' => 'Tietoa palveluista.',
      'Shows errors and warnings.' => 'Näyttää virheet ja varoitukset.',
      'Can\'t Analyze' => 'Ei voida analysoida',
      'Events' => 'Tapahtumat',
      'Hostname' => 'Isäntänimi',
    );
  }

}
