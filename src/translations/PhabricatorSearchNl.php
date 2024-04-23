<?php

final class PhabricatorSearchNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Profile Menu' => 'Profielmenu',
      'Full Name' => 'Volledige naam',
      '"2022-12-25" or "7 days ago"...' => '"2022-12-25" of "7 days ago"…',
      'There is nothing here.' => 'Hier is niets te vinden.',
      'Export Results' => 'Resultaten exporteren',
      '%s (Not Available)' => '%s (niet beschikbaar)',
      'Export Data' => 'Gegevens exporteren',
    );
  }

}
