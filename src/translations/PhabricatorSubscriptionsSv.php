<?php

final class PhabricatorSubscriptionsSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
  'Mute' => 'Tysta',
  'Subscriber' => 'Prenumerant',
  'Unmute Notifications' => 'Återaktivera aviseringar',
  'subscribers' => 'prenumeranter',
  'Remove me as a subscriber' => 'Ta bort mig som en prenumerant',
  'Remove subscribers.' => 'Ta bort prenumeranter.',
  'Unmute this object? You will receive notifications and email again.' => 'Av-tysta här objektet? Du kommer att få aviseringar och e-post igen.',
  'Set subscribers, overwriting current value.' => 'Ändra prenumeranter, skriver över aktuellt värde.',
  'Support for Subscriptions' => 'Stöd för prenumerationer',
  'Automatically Subscribed' => 'Prenumererar automatiskt',
  '%d other(s)' => '%d annan/andra',
  'You are automatically subscribed to this object.' => 'Du prenumererar automatiskt på detta objekt.',
  'Remove yourself as a subscriber.' => 'Ta bort dig själv som en prenumerant.',
  'View All %d Subscriber(s)' => 'Visa alla %d -prenumeranter',
  'Search for objects with certain subscribers.' => 'Sök efter objekt med vissa prenumeranter.',
  'Subscribers can take this action.' => 'Prenumeranter kan utföra denna åtgärd.',
  'Unmute' => 'Återaktivera aviseringar',
  'All %d subscribers removed by %s' => 'Alla %d prenumeranter togs bort av %s',
  'Added Subscribers' => 'Lade till prenumeranter',
  'Mute this object? You will no longer receive notifications or email about it.' => 'Tysta det här objektet? Du kommer inte längre att få aviseringar eller e-post om det.',
  'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => 'Avböjde att återprenumerera på %s mål eftersom de tidigare avslutade prenumerationen: %s.',
  'Removed %s subscriber(s): %s.' => 'Ta bort %s prenumerant(er): %s.',
  'Bad Object' => 'Trasigt objekt',
  'Add users or projects as subscribers.' => 'Lägg till användare eller projekt som prenumeranter.',
  'Removed Subscribers' => 'Tog bort prenumeranter',
  'All %d subscribers added by %s' => 'Alla %d prenumeranter lades till av %s',
  'Add me as a subscriber' => 'Lägg till mig som en prenumerant',
  'Mute Notifications' => 'Tysta aviseringar',
  '%s automatically subscribed target(s) were not affected: %s.' => '%s automatiska prenumerationsmål påverkades inte: %s.',
  'Set subscribers to' => 'Ställ in prenumeranter på',
  'Choose subscribers.' => 'Välj prenumeranter.',
  '%s, %s, %s and %s' => '%s, %s, %s och %s',
  'Previously Unsubscribed' => 'Tidigare avprenumererad',
  'Change Subscribers' => 'Ändra prenumeranter',
  'This object is not subscribable.' => 'Detta objekt går inte att prenumerera på.',
  'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.

Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.

Users who are CC\'d on the email itself are also automatically subscribed if their addresses are associated with a known account.' => 'Lägg till en eller flera prenumeranter till objektet. Du kan lägga till användare genom att ange deras användarnamn, eller lägga till projekt genom att lägga till deras hashtaggar. Använd till exempel `%s` för att lägga till användaren `alincoln` och projektet med hashtaggen `#ios` som prenumeranter.

Prenumeranter som är ogiltiga eller okända kommer att ignoreras. Det här kommandot har ingen effekt om du inte anger några prenumeranter.

Användare som har CC i själva e-postmeddelandet prenumererar också automatiskt om deras adresser är kopplade till ett känt konto.',
  'Add rule author as subscriber.' => 'Lägg till rollförfattare som prenumerant.',
  'Added %s subscriber(s): %s.' => 'Lade till %s prenumerant(er): %s.',
  'Remove rule author as subscriber.' => 'Ta bort rollförfattare som prenumerant.',
  'Add subscribers.' => 'Lägg till prenumeranter.',
  'Get information about subscribers.' => 'Hämta information om prenumeranter.',
);
  }

}
