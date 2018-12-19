<?php

final class PhabricatorFactFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Y-Axis' => 'Axe Y',
      'Dimension' => 'Dimension',
      'Zzz...' => 'Zzz...',
      '%sms' => '%sms',
      '%s (Transactions)' => '%s (transactions)',
      'Destroy all facts.' => 'Supprimer tous les faits.',
      'Facts' => 'Faits',
      'Not Stored' => 'Non enregistré',
      'No Engines' => 'Aucun moteur',
      'Fact' => 'Fait',
      'Unknown fact ("%s") for engine "%s".' => 'Evénement inconnu (« %s ») pour le moteur « %s ».',
      'Not Generated' => 'Non généré',
    );
  }

}
