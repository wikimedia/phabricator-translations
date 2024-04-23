<?php

final class PhabricatorAphlictDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Sende eine Benachrichtigung an einen Nutzer.',
      'The notification server should not be run as root.' => 'Der Benachrichtigungsserver sollte nicht als Root ausgeführt werden.',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'Zwei Server (bei den Indizes „%s“ und „%s“) binden beide an den gleichen Port („%s“). Jeder Server muss sich an einen eindeutigen Port binden.',
      'Failed to %s!' => '%s fehlgeschlagen!',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'ERROR: Die PHP-Funktion %s ist deaktiviert. Du musst sie aktivieren, um Aphlict auf diesem Rechner auszuführen.',
      'Stop the notification server.' => 'Stoppe den Benachrichtigungsserver.',
      'Configuration file is not properly formatted JSON. %s' => 'Konfigurationsdatei ist nicht richtig formatiert JSON.  %s',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'ERROR: Die PHP-Erweiterung \'%s\' ist nicht installiert. Du musst sie installieren, um Aphlict auf diesem Rechner auszuführen.',
      'Configuration file has improper configuration keys at top level. %s' => 'Die Konfigurationsdatei enthält falsche Konfigurationsschlüssel auf oberster Ebene. %s',
      'Aphlict is not running.' => 'Aphlict läuft nicht.',
      'You must %s first!' => 'Du musst zuerst %s!',
      'Launching server:' => 'Server starten:',
      'Starting Aphlict server in foreground...' => 'Aphlict Server wird im Vordergrund gestartet ...',
      'Server exited!' => 'Server beendet!',
      'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => 'Starte den Benachrichtigungsserver im Vordergrund und gib große Mengen an Diagnoseinformationen auf der Konsole aus.',
      'Show the status of the notification server.' => 'Zeigt den Status des Benachrichtigungsservers an.',
      'Specify a user to notify with "--user".' => 'Gib mit "--user" einen Benutzer an, der benachrichtigt werden soll.',
      'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => 'In der Konfigurationsdatei sind keine Client-Server angegeben. Ohne einen Client-Server kann dieser Dienst keine Benachrichtigungen übermitteln. Du musst mindestens einen Server mit dem Typ "%s" angeben.',
      'Message to send.' => 'Zu sendende Nachricht.',
      'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => 'In der Konfigurationsdatei sind keine Verwaltungsserver angegeben. Dieser Dienst kann dann keine Nachrichten empfangen. Du musst mindestens einen Server mit dem Typ "%s" angeben.',
      'Aphlict Server (%s) exited normally.' => 'Aphlict Server (%s) wurde normal beendet.',
      'Reading configuration from: %s' => 'Konfiguration lesen von: %s',
      'Specify a message to send with "--message".' => 'Gib mit "--message" eine Nachricht an, die gesendet werden soll.',
      'Sent notification.' => 'Benachrichtigung gesendet.',
      'Use a specific configuration file instead of the default configuration.' => 'Verwende eine bestimmte Konfigurationsdatei anstelle der Standardkonfiguration.',
      'Aphlict Server started.' => 'Aphlict Server wurde gestartet.',
      'Stopping Aphlict Server (%s)...' => 'Aphlict Server wird gestoppt (%s) ...',
      'Aphlict (%s) is running.' => 'Aphlict (%s) läuft.',
    );
  }

}
