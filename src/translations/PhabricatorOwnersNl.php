<?php

final class PhabricatorOwnersNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Auto review information.' => 'Gegevens automatisch controleren.',
      'Review All Changes' => 'Alle wijzigingen controleren',
      'Review All Changes (Blocking)' => 'Alle wijzigingen controleren (blokkeren)',
    );
  }

}
