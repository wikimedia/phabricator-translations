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
      'Add subscribers' => 'Tilføj abonnenter',
      'Remove subscribers' => 'Fjern abonnenter',
      'All %d subscribers removed by %s' => 'Alle %s abonnenter fjernet af %s',
      'Added Subscribers' => 'Tilføjede abonnenter',
      'Unsubscribe' => 'Afmeld abonnement',
      'Removed Subscribers' => 'Fjernede abonnenter',
      'All %d subscribers added by %s' => 'Alle %s abonnenter tilføjet af %s',
      'Add me as a subscriber' => 'Tilføj mig som abonnent',
      'Choose subscribers.' => 'Vælg abonnenter.',
      '%s, %s, %s and %s' => '%s, %s, %s og %s',
      'Remove subscribers: %s.' => 'Fjern abonnenter: %s.',
      'Change Subscribers' => 'Ændre abonnenter',
      'This object is not subscribable.' => 'Der kan ikke abonneres på dette objekt.',
      'Add subscribers.' => 'Tilføj abonnenter.',
      'Get information about subscribers.' => 'Få informationer om abonnenter.',
    );
  }

}
