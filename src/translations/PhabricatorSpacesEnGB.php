<?php

final class PhabricatorSpacesEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'This install uses spaces to organize objects, but logged out users do not have access to any spaces.' => 'This install uses spaces to organise objects, but logged out users do not have access to any spaces.',
      'This install uses spaces to organize objects, but your account does not have access to any spaces.' => 'This install uses spaces to organise objects, but your account does not have access to any spaces.',
    );
  }

}
