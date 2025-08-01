<?php

final class PhabricatorHelpNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Sluit alle dialoogvensters, inclusief dit.',
      'Page Shortcuts' => 'Paginasnelkoppelingen',
      '%s Help' => 'Hulp voor %s',
      'Hiding Content' => 'Inhoud verbergen',
      'Editing Inline Comments' => 'Ingevoegde opmerkingen bewerken',
      'Global Shortcuts' => 'Globale snelkoppelingen',
      'Keyboard Shortcuts' => 'Sneltoetsen',
      'Diff Navigation' => 'Diff-navigatie',
    );
  }

}
