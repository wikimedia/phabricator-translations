<?php

final class PhabricatorConduitEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'This will authorize the requesting script to act on your behalf permanently, like giving the script your account password.' => 'This will authorise the requesting script to act on your behalf permanently, like giving the script your account password.',
      'You do not have authorization to call this method.' => 'You do not have authorisation to call this method.',
      'Provided "%s" ("%s") is not recognized.' => 'Provided "%s" ("%s") is not recognised.',
    );
  }

}
