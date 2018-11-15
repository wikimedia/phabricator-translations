<?php

final class PhabricatorCountdownFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Minutes' => 'Minutes',
      'Date when the countdown ends.' => 'Date à laquelle le compte à rebours se termine.',
      'Change the end date of the countdown.' => 'Modifier la date de fin du compte à rebours.',
      'Edit Countdown: %s' => 'Modifier le compte à rebours : %s',
      'Countdowns' => 'Comptes à rebours',
      'Create a Countdown' => 'Créer un compte à rebours',
      'Countdown titles must not be longer than %s character(s).' => 'Les titres de comptes à rebours ne doivent pas dépasser %s caractère(s).',
      'No countdowns found.' => 'Pas de compte à rebours trouvé.',
      'Upcoming' => 'Prochain',
      'Last Words' => 'Derniers mots',
      'New description.' => 'Nouvelle description.',
      'End Date' => 'Date de fin',
      'Hours' => 'Heures',
      'New countdown end date.' => 'Nouvelle date de fin du compte à rebours.',
      'The countdown name.' => 'Le nom du compte à rebours.',
      'Create Countdown' => 'Créer un compte à rebours',
      'Days' => 'Jours',
    );
  }

}
