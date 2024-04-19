<?php

final class PhabricatorPhrequentDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Interrupted' => 'Afbrudt',
      'Time Spent' => 'Tidsforbrug',
      'Please choose a valid date.' => 'Venligst vælg en gyldig dato.',
    );
  }

}
