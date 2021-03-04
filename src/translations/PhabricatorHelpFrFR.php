<?php

final class PhabricatorHelpFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Fermer tous les dialogues, celui-ci inclus.',
      'Page Shortcuts' => 'Raccourcis de page',
      '%s Help' => 'Aide de %s',
      'Hiding Content' => 'Masquage du contenu',
      'Editing Inline Comments' => 'Modification des commentaires en ligne',
      'Global Shortcuts' => 'Raccourcis globaux',
      'Keyboard Shortcuts' => 'Raccourcis clavier',
      'Diff Navigation' => 'Navigation des différences',
    );
  }

}
