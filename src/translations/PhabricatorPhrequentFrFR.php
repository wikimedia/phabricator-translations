<?php

final class PhabricatorPhrequentFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => 'Travail en cours',
      'by nearest start date' => 'par date de départ la plus proche',
      'You can not stop tracking time at a future time. Enter the current time, or a time in the past.' => 'Vous ne pouvez pas arrêter le chronométrage dans le futur. Entrez l’heure actuelle ou une date dans le passé.',
      'Stop Time' => 'Heure d’arrêt',
      'Stop Timer' => 'Arrêter le chronomètre',
      'Ended on %s' => 'Heure de fin : %s',
      'Unknown ended \'%s\'!' => 'Arrêt de « %s » inconnu !',
      'Tracked %s so far' => '%s tracés jusqu’à présent',
      'Tracked: %s' => 'Tracé : %s',
      'Start Time' => 'Heure de départ',
      'Returns current objects being tracked in Phrequent.' => 'Retourne les objects actuellement tracés dans Phrequent.',
      'Interrupted' => 'Interrompu',
      'Stop Tracking Time' => 'Heure d’arrêt du traçage',
      'Start Tracking Time' => 'Heure de départ du traçage',
      'Stop Tracking' => 'Arrêter le traçage',
      'Time Spent' => 'Durée écoulée',
      'Tracked %s' => 'Tracé : %s',
      'Phrequent Time' => 'Temps de Phrequent',
      'Not Tracking Time' => 'Heure sans traçage',
      'All Tracked' => 'Traçage de tout',
      'by furthest end date' => 'par date de fin la plus éloignée',
      'Unknown order "%s".' => 'Ordre « %s » inconnu.',
      'by nearest end date' => 'par date de départ la plus proche',
      'Ended' => 'Terminé',
      'by furthest start date' => 'Par date de départ la plus éloignée',
      'Stop' => 'Arrêter',
      'Not Working Now' => 'Aucun travail en cours',
      'Started At' => 'Démarré à',
      'Start Tracking' => 'Démarrer le traçage',
      '%s (%s ago)' => '%s (il y a %s)',
      'Start Timer' => 'Démarrer le chronomètre',
      'What time did you start working?' => 'À quelle heure avez-vous commencé à travailler ?',
      'Phrequent' => 'Phrequent',
      'What time did you stop working?' => 'À quelle heure avez-vous arrêté de travailler ?',
      'Track Time Spent' => 'Tracer le temps écoulé',
      'Please choose a valid date.' => 'Veuillez choisir une date valide.',
      'You are not currently tracking time on this object.' => 'Vous ne tracez pas actuellement le temps passé sur cet objet.',
      'Stop tracking time on an object by popping it from the stack.' => 'Arrête de tracer le temps sur un objet en le retirant de la pile.',
      'Start tracking time on an object by pushing it on the tracking stack.' => 'Commence à tracer le temps sur un objet en l’ajoutant en haut de la pile.',
      'Stop time must be after start time.' => 'L’heure d’arrêt doit être après l’heure de départ.',
      'Currently Tracking' => 'Traçage en cours',
      'You can not start tracking time at a future time. Enter the current time, or a time in the past.' => 'Vous ne pouvez pas tracer le temps écoulé dans le futur. Entrez l’heure actuelle ou une heure dans le passé.',
    );
  }

}
