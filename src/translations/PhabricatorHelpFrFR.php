<?php

final class PhabricatorHelpFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Fermer tous les dialogues, celui-ci inclus.',
      '%s Help' => 'Aide %s',
      'Keyboard Shortcuts' => 'Raccourcis clavier',
    );
  }

}
