<?php

final class PhabricatorNotificationHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Olvasatlan',
      'Unable to load server status: this is not an admin server!' => 'A szerverstátusz beolvasása sikertelen: ez nem egy adminszerver!',
      'All Notifications' => 'Összes értesítés',
      'Really mark all notifications as read?' => 'Biztosan minden értesítést olvasottnak jelölsz?',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => 'Az értesítési szerver konfigurációja érvénytelen: nem határoz meg egyetlen engedélyezett szervert sem „admin” típussal. Az értesítésekhez szükség van legalább egy aktív „admin” szerverre.',
      'Setting Up Client' => 'Kliens beállítása',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => 'Az értesítési szerver konfigurációja érvénytelen: nem határoz meg egyetlen engedélyezett szervert sem „kliens” típussal. Az értesítésekhez szükség van legalább egy aktív „kliens” szerverre.',
      'All unread notifications will be marked as read. You can not undo this action.' => 'Az összes olvasatlan értesítés olvasottnak lesz jelölve. Ez a művelet nem vonható vissza.',
      'Unread Notifications' => 'Olvasatlan értesítések',
      'Disconnected' => 'Szétkapcsolva',
      '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => '%s nem létező vagy általad már el nem érhető objektumról szóló értesítés el lett dobva.',
      'No notifications to mark as read.' => 'Nincs olvasottnak jelölhető értesítés.',
      'Real-Time Updates and Alerts' => 'Valós idejű frissítések és figyelmeztetések',
      'You can\'t ignore your problems forever, you know.' => 'Tudod, nem ignorálhatod a problémákat akármeddig.',
      'Unable to Connect to Notification Server' => 'Nem sikerült csatlakozni az értesítési szerverhez',
      'Notification server not enabled' => 'Az értesítési szerver nincs engedélyezve',
      '(To start the server, run this command.)
    %s' => '(A szerver elindításához futtasd ezt a parancsot.)
    %s',
      'You have no unread notifications.' => 'Nincsenek olvasatlan értesítéseid.',
      'Connecting...' => 'Kapcsolódás…',
      'Mark All Read' => 'Összes megjelölése olvasottként',
      'Show only unread notifications.' => 'Csak olvasatlan értesítések megjelenítése.',
      'You have no notifications.' => 'Nincsenek értesítéseid.',
    );
  }

}
