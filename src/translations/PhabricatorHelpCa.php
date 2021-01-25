<?php

final class PhabricatorHelpCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Tanca qualsevol diàleg, incloent aquest.',
      '%s Help' => 'Ajuda: %s',
      'Keyboard Shortcuts' => 'Dreceres de teclat',
    );
  }

}
