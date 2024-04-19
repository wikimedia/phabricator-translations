<?php

final class PhabricatorHelpIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      '%s Help' => '%s Aiuto',
      'Keyboard Shortcuts' => 'Scorciatoie da tastiera',
    );
  }

}
