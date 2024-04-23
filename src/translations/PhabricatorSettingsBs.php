<?php

final class PhabricatorSettingsBs
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'bs';
  }

  protected function getTranslations() {
    return array(
      'Default (%s)' => 'Predodređeno (%s)',
      'Choose which language you would like the UI to use.' => 'Izaberite jezik korisničkog interfejsa Phabricatora.',
      'Translation' => 'Prevod',
      'Personal Settings' => 'Lične postavke',
      'Select your local timezone.' => 'Izaberite lokalnu vremensku zonu.',
      'Week Starts On' => 'Sedmica počinje danom',
      'Choose which day a calendar week should begin on.' => 'Izaberite dan kojim kalendarska sedmica treba započeti.',
      'Date and Time' => 'Datum i vrijeme',
    );
  }

}
