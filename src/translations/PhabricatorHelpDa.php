<?php

final class PhabricatorHelpDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Luk enhver dialog, inklusiv denne her.',
      'Change Settings' => 'Ændre indstillinger',
      '%s Help' => '%s Hjælp',
      'Keyboard Shortcuts' => 'Tastaturgenveje',
    );
  }

}
