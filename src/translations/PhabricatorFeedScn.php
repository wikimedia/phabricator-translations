<?php

final class PhabricatorFeedScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'All Stories' => 'Tutti li stori',
      'Include Projects' => 'Ncludi li pruggetti',
      'Include Users' => 'Ncludi li utenti',
      'Story' => 'Storia',
      'No Stories.' => 'Nudda storia.',
    );
  }

}
