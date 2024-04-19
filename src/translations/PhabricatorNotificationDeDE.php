<?php

final class PhabricatorNotificationDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Ungelesen',
      'Unable to load server status: this is not an admin server!' => 'Serverstatus kann nicht geladen werden: Dies ist kein Admin-Server!',
      'All Notifications' => 'Alle Benachrichtigungen',
      'Really mark all notifications as read?' => 'Wirklich alle Benachrichtigungen als gelesen markieren?',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => 'Die Konfiguration des Benachrichtigungsservers ist ungültig: Sie enthält keine aktivierten Server vom Typ "admin". Für Benachrichtigungen ist mindestens ein aktiver "admin"-Server erforderlich.',
      'Setting Up Client' => 'Client einrichten',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => 'Die Konfiguration des Benachrichtigungsservers ist ungültig: Sie enthält keine aktivierten Server vom Typ "Client". Für Benachrichtigungen ist mindestens ein aktiver "Client"-Server erforderlich.',
      'All unread notifications will be marked as read. You can not undo this action.' => 'Alle ungelesenen Benachrichtigungen werden als gelesen markiert. Du kannst diese Aktion nicht rückgängig machen.',
      'Unread Notifications' => 'Ungelesene Benachrichtigungen',
      'Unable to post message: this is not an admin server!' => 'Nachricht kann nicht gepostet werden: Dies ist kein Admin-Server!',
      'Disconnected' => 'Getrennt',
      '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => '%s Benachrichtigung(en) über Objekte, die nicht mehr existieren oder die du nicht mehr sehen kannst, wurden verworfen.',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => 'Die Konfiguration des Benachrichtigungsservers beschreibt einen ungültigen Host ("%s", bei Index "%s") mit einem nicht erkannten Typ ("%s"). Gültige Typen sind "%s" oder "%s".',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => 'Die Konfiguration des Benachrichtigungsservers beschreibt einen ungültigen Host ("%s", bei Index "%s") mit einem ungültigen Protokoll ("%s"). Gültige Protokolle sind "%s" oder "%s".',
      'No notifications to mark as read.' => 'Keine Benachrichtigungen zum Markieren als gelesen.',
      'Notification Server Down' => 'Benachrichtigungsserver ausgefallen',
      'This server is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s' => 'Phabricator ist für die Verwendung eines Benachrichtigungsservers konfiguriert, kann sich aber nicht mit ihm verbinden. Du solltest dieses Problem beheben oder den Benachrichtigungsserver deaktivieren. Es kann hilfreich sein, deine Konfiguration zu überprüfen oder den Server mit dem folgenden Befehl neu zu starten.
    %s',
      'Unable to test client on an admin server!' => 'Der Client kann nicht auf einem Admin-Server getestet werden!',
      'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => 'Die Konfiguration des Benachrichtigungsservers beschreibt einen ungültigen Host ("%s", bei Index "%s"). Dies ist ein "Admin"-Dienst, aber er hat eine "Pfad"-Eigenschaft. Diese Eigenschaft ist nur für "Client"-Dienste gültig.',
      'Real-Time Updates and Alerts' => 'Updates und Warnungen in Echtzeit',
      'You can\'t ignore your problems forever, you know.' => 'Du weißt, du kannst Probleme nicht für immer ignoriren',
      'Unable to Connect to Notification Server' => 'Verbindung zum Benachrichtigungsserver nicht möglich',
      'Notification server not enabled' => 'Benachrichtigungsserver nicht aktiviert',
      'This is a test notification, sent at %s.' => 'Dies ist eine Test Meldung, gesendet am %s.',
      '(To start the server, run this command.)
    %s' => '(Um den Server zu starten, führe diesen Befehl aus.) %s',
      'You have no unread notifications.' => 'Du hast keine ungelesenen Benachrichtigungen.',
      'Connecting...' => 'Verbinden...',
      'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'HTTP 200 erhalten, jedoch HTTP 501 (WebSocket Upgrade) erwartet!',
      'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => 'Die Konfiguration des Benachrichtigungsservers ist ungültig: Sie beschreibt denselben Host und Port ("%s") mehrfach. Jede Host- und Portkombination sollte nur einmal in der Liste erscheinen.',
      'Mark All Read' => 'Alle als gelesen markiere',
      'Show only unread notifications.' => 'Nur ungelesene Benachrichtigungen anzeigen.',
      'This server is configured to use a notification server, but is not able to connect to it.' => 'Phabricator ist für die Verwendung eines Benachrichtigungsservers konfiguriert, kann sich aber nicht mit ihm verbinden.',
      'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => 'Die Konfiguration des Benachrichtigungsservers ist nicht gültig: Jeder Eintrag in der Liste muss ein Wörterbuch sein, das einen Dienst beschreibt, der Wert mit dem Index "%s" ist jedoch kein Wörterbuch.',
      'Notification server configuration has an invalid service specification (at index "%s"): %s.' => 'Die Konfiguration des Benachrichtigungsservers verfügt über eine ungültige Dienstspezifikation (bei Index "%s"): %s.',
      'You have no notifications.' => 'Du hast keine Benachrichtigungen.',
    );
  }

}
