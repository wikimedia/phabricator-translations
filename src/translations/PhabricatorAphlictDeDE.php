<?php

final class PhabricatorAphlictDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Senden Sie eine Benachrichtigung an einen Benutzer.',
      'The notification server should not be run as root.' => 'Der Benachrichtigungsserver sollte nicht als Root ausgeführt werden.',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'Zwei Server (bei den Indizes „%s“ und „%s“) binden beide an den gleichen Port („%s“). Jeder Server muss sich an einen eindeutigen Port binden.',
      'Failed to %s!' => '%s fehlgeschlagen!',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'FEHLER: Die PHP-Funktion %s ist deaktiviert. Sie müssen es aktivieren, um Aphlict auf diesem Computer auszuführen.',
      'Stop the notification server.' => 'Stoppen Sie den Benachrichtigungsserver.',
      'Configuration file is not properly formatted JSON. %s' => 'Konfigurationsdatei ist nicht richtig formatiert JSON.  %s',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'FEHLER: Die PHP-Erweiterung \'%s\' ist nicht installiert. Sie müssen es installieren, um Aphlict auf diesem Computer auszuführen.',
      'Configuration file has improper configuration keys at top level. %s' => 'Die Konfigurationsdatei enthält falsche Konfigurationsschlüssel auf oberster Ebene. %s',
      'Aphlict is not running.' => 'Aphlict läuft nicht.',
      'You must %s first!' => 'Sie müssen zuerst %s!',
      'Launching server:' => 'Server starten:',
      'Starting Aphlict server in foreground...' => 'Aphlict Server wird im Vordergrund gestartet ...',
      'Server exited!' => 'Server beendet!',
      'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => 'Starten Sie den Benachrichtigungsserver im Vordergrund und drucken Sie große Mengen an Diagnoseinformationen an die Konsole.',
      'Show the status of the notification server.' => 'Zeigt den Status des Benachrichtigungsservers an.',
      'Specify a user to notify with "--user".' => 'Geben Sie einen Benutzer an, der mit „--user“ benachrichtigt werden soll.',
      'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => 'In der Konfigurationsdatei werden keine Client-Server angegeben. Dieser Dienst kann keine Benachrichtigungen ohne Client-Server senden. Sie müssen mindestens einen Server mit dem Typ „%s“ angeben.',
      'Message to send.' => 'Zu sendende Nachricht.',
      'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => 'In der Konfigurationsdatei werden keine Verwaltungsserver angegeben. Dieser Dienst kann keine Nachrichten empfangen. Sie müssen mindestens einen Server mit dem Typ "%s" angeben.',
      'Aphlict Server (%s) exited normally.' => 'Aphlict Server (%s) wurde normal beendet.',
      'Reading configuration from: %s' => 'Konfiguration lesen von: %s',
      'Specify a message to send with "--message".' => 'Geben Sie eine Nachricht an, die mit „--message“ gesendet werden soll.',
      'Sent notification.' => 'Benachrichtigung gesendet.',
      'Use a specific configuration file instead of the default configuration.' => 'Verwenden Sie eine bestimmte Konfigurationsdatei anstelle der Standardkonfiguration.',
      'Aphlict Server started.' => 'Aphlict Server wurde gestartet.',
      'Stopping Aphlict Server (%s)...' => 'Aphlict Server wird gestoppt (%s) ...',
      'Aphlict (%s) is running.' => 'Aphlict (%s) läuft.',
    );
  }

}
