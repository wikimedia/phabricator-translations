<?php

final class PhabricatorSubscriptionsHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Mute' => 'Némítás',
      'Subscriber' => 'Feliratkozó',
      'Unmute Notifications' => 'Értesítések visszakapcsolása',
      'subscribers' => 'feliratkozók',
      'Remove me as a subscriber' => 'Leiratkozás',
      'Remove subscribers.' => 'Mindenki leiratkozatása.',
      'Unmute this object? You will receive notifications and email again.' => 'Biztos visszakapcsolhatóak az értesítések ezen az objektumon? A továbbiakban újra fog értesítés vagy e-mail érkezni.',
      'Set subscribers, overwriting current value.' => 'Feliratkozók megváltoztatása, a jelenlegi lista felülírásával.',
      'Support for Subscriptions' => 'Feliratkozás támogatása',
      'Automatically Subscribed' => 'Automatikusan feliratkozott',
      '%d other(s)' => '%s többi',
      'You are automatically subscribed to this object.' => 'Automatikusan fel lett iratkozva.',
      'Add subscribers' => 'Feliratkoztatás',
      'Remove yourself as a subscriber.' => 'Leiratkozás',
      'View All %d Subscriber(s)' => 'Összes (%s) feliratkozó megtekintése',
      'Search for objects with certain subscribers.' => 'Objektumok keresése feliratkozó alapján.',
      'Subscribers can take this action.' => 'Feliratkozók végrehajthatják ezt a műveletet.',
      'Unmute' => 'Némítás feloldása',
      'Remove subscribers' => 'Leiratkoztatás',
      'All %d subscribers removed by %s' => 'Összes (%s) feliratkozó eltávolítva %s által',
      'Added Subscribers' => 'Feliratkozók hozzáadva',
      'Mute this object? You will no longer receive notifications or email about it.' => 'Biztos elnémítható ez az objektum? A továbbiakban nem fog értesítés vagy e-mail érkezni erről.',
      'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => 'Feliratkozás meg lett tiltva %s-nek/nak, mivel korábban már leiratkozott: %s.',
      'Removed %s subscriber(s): %s.' => 'Leiratkoztatott %s-t: %s.',
      'Bad Object' => 'Rossz objektum',
      'Add users or projects as subscribers.' => 'Felhasználók vagy projektek feliratkoztatása.',
      'Add subscribers: %s.' => 'Feliratkoztatás: %s.',
      'Removed Subscribers' => 'Leiratkoztatva',
      'All %d subscribers added by %s' => 'Összes (%s) feliratkozó hozzáadva %s által',
      'Add me as a subscriber' => 'Saját magam feliratkoztatása',
      'Mute Notifications' => 'Értesítések elnémítása',
      '%s automatically subscribed target(s) were not affected: %s.' => '%s automatikusan feliratkozottakat nem érintette: %s.',
      'Set subscribers to' => 'Feliratkozók beállítása',
      'Choose subscribers.' => 'Feliratkozók választása.',
      '%s, %s, %s and %s' => '%s, %s, %s és %s',
      'Previously Unsubscribed' => 'Korábban leiratkozott',
      'Remove subscribers: %s.' => 'Leiratkoztatás: %s.',
      'Change Subscribers' => 'Feliratkozók megváltoztatása',
      'This object is not subscribable.' => 'Erre az objektumra nem lehet feliratkozni.',
      'Add rule author as subscriber.' => 'A szabályt létrehozó feliratkoztatása.',
      'Added %s subscriber(s): %s.' => '%s feliratkoztatása: %s.',
      'Remove rule author as subscriber.' => 'A szabályt létrehozó leiratkoztatása.',
      'Add subscribers.' => 'Feliratkoztatás.',
      'Get information about subscribers.' => 'Információ kérése a feliratkozókról.',
    );
  }

}
