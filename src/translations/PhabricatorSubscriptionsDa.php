<?php

final class PhabricatorSubscriptionsDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
  'Subscriber' => 'Abonnent',
  'subscribers' => 'abonnenter',
  'Remove me as a subscriber' => 'Fjern mig som en abonnent',
  'Remove subscribers.' => 'Fjern abonnenter.',
  'Automatically Subscribed' => 'Abonnerede automatisk',
  'All %d subscribers removed by %s' => 'Alle %d abonnenter fjernet af %s',
  'Added Subscribers' => 'Tilføjede abonnenter',
  'Removed Subscribers' => 'Fjernede abonnenter',
  'All %d subscribers added by %s' => 'Alle %d abonnenter tilføjet af %s',
  'Add me as a subscriber' => 'Tilføj mig som abonnent',
  'Choose subscribers.' => 'Vælg abonnenter.',
  '%s, %s, %s and %s' => '%s, %s, %s og %s',
  'Change Subscribers' => 'Ændre abonnenter',
  'This object is not subscribable.' => 'Der kan ikke abonneres på dette objekt.',
  'Add subscribers.' => 'Tilføj abonnenter.',
  'Get information about subscribers.' => 'Få informationer om abonnenter.',
);
  }

}
