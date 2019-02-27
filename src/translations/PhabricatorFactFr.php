<?php

final class PhabricatorFactFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Analyze from the beginning, ignoring cursors.' => 'Analyser depuis le début, en ignorant les curseurs.',
      'Iterator \'%s\' does not exist.' => 'L\'itérateur \'%s\' n\'existe pas.',
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
      'Fact "%s"' => 'Fait "%s"',
      'Not Generated' => 'Non généré',
    );
  }

}
