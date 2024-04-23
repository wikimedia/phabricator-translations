<?php

final class PhabricatorSystemRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      'Panic!' => 'Paniche!',
      '%d / hour' => '%s / ore',
      'View As' => '\'Ndruche cumme',
      'IMPORTANT' => '\'MBORTANDE',
      'System' => 'Sisteme',
      '%d / minute' => '%s / minute',
      '%d / second' => '%s / seconde',
    );
  }

}
