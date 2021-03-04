<?php

final class PhabricatorPhrequentCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => 'Treballant ara',
      'by nearest start date' => 'Per data d\'inici més propera',
      'You can not stop tracking time at a future time. Enter the current time, or a time in the past.' => 'No podeu aturar el seguiment del temps en un futur. Introduïu l\'hora actual, o una hora en el passat.',
      'Stop Time' => 'Parar el temps',
      'Stop Timer' => 'Aturar el cronòmetre',
      'Ended on %s' => 'Acabat el %s',
      'Unknown ended \'%s\'!' => 'Parada desconeguda de "%s".',
      'Tracked %s so far' => 'S\'ha seguit %s fins ara',
      'Tracked: %s' => 'Traçat: %s',
      'Start Time' => 'Hora d\'inici',
      'Returns current objects being tracked in Phrequent.' => 'Retorna els objectes actuals que s\'estan rastrejant a Phrequent.',
      'Interrupted' => 'Interromput',
      'Stop Tracking Time' => 'Atura el temps de seguiment',
      'Start Tracking Time' => 'Inicia el temps de seguiment',
      'Stop Tracking' => 'Atura el seguiment',
      'Time Spent' => 'Temps invertit',
      'Tracked %s' => 'S\'ha seguit %s',
      'Phrequent Time' => 'Temps de Phrequent',
      'Not Tracking Time' => 'Temps de no seguiment',
      'All Tracked' => 'Tots rastrejats',
      'by furthest end date' => 'per data de finalització més allunyada',
      'Unknown order "%s".' => 'Comanda «%s» desconeguda.',
      'by nearest end date' => 'per data de finalització més propera',
      'Ended' => 'Acabat',
      'by furthest start date' => 'per data d\'inici més allunyada',
      'Stop' => 'Atura',
      'Not Working Now' => 'No funciona ara',
      'Started At' => 'Iniciat a',
      'Start Tracking' => 'Comença el seguiment',
      '%s (%s ago)' => '%s (fa %s)',
      'Start Timer' => 'Inicieu el cronòmetre',
      'What time did you start working?' => 'A quina hora va començar a treballar?',
      'Phrequent' => 'Phrequent',
      'What time did you stop working?' => 'A quina hora vas deixar de treballar?',
      'Track Time Spent' => 'Rastreja el temps que s\'ha gastat',
      'Please choose a valid date.' => 'Si us plau escollir una data vàlida.',
      'You are not currently tracking time on this object.' => 'Actualment no esteu fent el seguiment d\'aquest objecte.',
      'Stop tracking time on an object by popping it from the stack.' => 'Atura el temps de seguiment en un objecte fent-lo emergir de la pila.',
      'Start tracking time on an object by pushing it on the tracking stack.' => 'Comença el temps de seguiment d\'un objecte introduint-lo a la pila de seguiment.',
      'Stop time must be after start time.' => 'El temps d\'espera ha de ser posterior a l\'hora d\'inici.',
      'Currently Tracking' => 'Actualment en seguiment',
      'You can not start tracking time at a future time. Enter the current time, or a time in the past.' => 'No podeu començar a fer el seguiment en un moment futur.  Introduïu l\'hora actual o una hora passada.',
    );
  }

}
