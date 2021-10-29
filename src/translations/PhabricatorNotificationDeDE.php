<?php

final class PhabricatorNotificationDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Ungelesen',
      'All Notifications' => 'Alle Benachrichtigungen',
      'Really mark all notifications as read?' => 'Wirklich alle Benachrichtigungen als gelesen markieren?',
      'Unread Notifications' => 'Ungelesene Benachrichtigungen',
      'Disconnected' => 'Getrennt',
      'You can\'t ignore your problems forever, you know.' => 'Du weißt, du kannst Probleme nicht für immer ignoriren',
      'This is a test notification, sent at %s.' => 'Dies ist eine Test Meldung, gesendet am %s.',
      '(To start the server, run this command.)
    %s' => '(Um den Server zu starten, führe diesen Befehl aus.) %s',
      'You have no unread notifications.' => 'Du hast keine ungelesenen Benachrichtigungen.',
      'Connecting...' => 'Verbinden...',
      'Mark All Read' => 'Alle als gelesen markiere',
      'You have no notifications.' => 'Du hast keine Benachrichtigungen.',
    );
  }

}
