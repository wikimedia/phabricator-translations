<?php

final class PhabricatorSubscriptionsSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'subscribers' => 'prenumeranter',
      'Remove me as a subscriber' => 'Ta bort mig som en prenumerant',
      'Remove subscribers.' => 'Ta bort prenumeranter.',
      'Set subscribers, overwriting current value.' => 'Ändra prenumeranter, skriver över aktuellt värde.',
      'Support for Subscriptions' => 'Stöd för prenumerationer',
      'Automatically Subscribed' => 'Prenumererar automatiskt',
      '%d other(s)' => '%s annan/andra',
      'You are automatically subscribed to this object.' => 'Du prenumererar automatiskt på detta objekt.',
      'Add subscribers' => 'Lägg till prenumeranter',
      'Remove yourself as a subscriber.' => 'Ta bort dig själv som en prenumerant.',
      'Search for objects with certain subscribers.' => 'Sök efter objekt med vissa prenumeranter.',
      'Subscribers can take this action.' => 'Prenumeranter kan utföra denna åtgärd.',
      'Remove subscribers' => 'Ta bort prenumeranter',
      'All %d subscribers removed by %s' => 'Alla %s prenumeranter togs bort av %s',
      'Added Subscribers' => 'Lade till prenumeranter',
      'Removed %s subscriber(s): %s.' => 'Ta bort %s prenumerant(er): %s.',
      'Unsubscribe' => 'Avsluta prenumeration',
      'Bad Object' => 'Trasigt objekt',
      'Add users or projects as subscribers.' => 'Lägg till användare eller projekt som prenumeranter.',
      'Add subscribers: %s.' => 'Lägg till prenumeranter: %s.',
      'Removed Subscribers' => 'Tog bort prenumeranter',
      'All %d subscribers added by %s' => 'Alla %s prenumeranter lades till av %s',
      'Add me as a subscriber' => 'Lägg till mig som en prenumerant',
      '%s automatically subscribed target(s) were not affected: %s.' => '%s automatiska prenumerationsmål påverkades inte: %s.',
      'Choose subscribers.' => 'Välj prenumeranter.',
      '%s, %s, %s and %s' => '%s, %s, %s och %s',
      'Remove subscribers: %s.' => 'Ta bort prenumeranter: %s.',
      'Change Subscribers' => 'Ändra prenumeranter',
      'This object is not subscribable.' => 'Detta objekt går inte att prenumerera på.',
      'Add rule author as subscriber.' => 'Lägg till rollförfattare som prenumerant.',
      'Added %s subscriber(s): %s.' => 'Lade till %s prenumerant(er): %s.',
      'Remove rule author as subscriber.' => 'Ta bort rollförfattare som prenumerant.',
      'Add subscribers.' => 'Lägg till prenumeranter.',
      'Get information about subscribers.' => 'Hämta information om prenumeranter.',
    );
  }

}
