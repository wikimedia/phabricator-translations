<?php

final class PhabricatorNotificationNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Unread' => 'Ongelezen',
  'Unable to load server status: this is not an admin server!' => 'Kan de serverstatus niet laden: dit is geen beheerserver!',
  'All Notifications' => 'Alle meldingen',
  'Really mark all notifications as read?' => 'Echt alle meldingen als gelezen markeren?',
  'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => 'De instelling van de meldingenserver is ongeldig: er zijn geen ingeschakelde servers van het type "admin" opgegeven. Meldingen vereisen ten minste één actieve "admin"-server.',
  'Setting Up Client' => 'Client instellen',
  'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => 'De instelling van de meldingenserver is ongeldig: er zijn geen ingeschakelde servers van het type "client" gespecificeerd. Meldingen vereisen ten minste één actieve "client"-server.',
  'All unread notifications will be marked as read. You can not undo this action.' => 'Alle ongelezen meldingen worden als gelezen gemarkeerd. Deze handeling kan niet ongedaan worden gemaakt.',
  'Unread Notifications' => 'Ongelezen meldingen',
  'Unable to post message: this is not an admin server!' => 'Bericht verzenden mislukt: dit is geen beheerdersserver!',
  'Disconnected' => 'Losgekoppeld',
  '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => '%s melding(en) over objecten die niet meer bestaan of die u niet meer kunt zien, zijn verwijderd.',
  'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => 'De instelling van de meldingenserver beschrijft een ongeldige host ("%s", op index "%s") met een onbekend type ("%s"). Geldige typen zijn "%s" of "%s".',
  'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => 'De instelling van de meldingenserver beschrijft een ongeldige host ("%s", op index "%s") met een ongeldig protocol ("%s"). Geldige protocollen zijn "%s" of "%s".',
  'No notifications to mark as read.' => 'Geen meldingen om als gelezen te markeren.',
  'Notification Server Down' => 'Meldingenserver is offline',
  'This server is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.

%s' => 'Deze server is insteld om een meldingenserver te gebruiken, maar kan er geen verbinding mee maken. Los dit probleem op of schakel de meldingenserver uit. Het kan nuttig zijn om uw instellingen te controleren of de server opnieuw op te starten met behulp van de onderstaande opdracht.

%s',
  'Unable to test client on an admin server!' => 'Het lukt niet om de client te testen op een beheerserver!',
  'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => 'De instelling van de meldingenserver beschrijft een ongeldige host ("%s", op index "%s"). Dit is een "admin"-service, maar deze heeft een "path"-eigenschap. Deze eigenschap is alleen geldig voor "client"-services.',
  'Real-Time Updates and Alerts' => 'Realtime updates en waarschuwingen',
  'You can\'t ignore your problems forever, you know.' => 'U kunt uw problemen niet eeuwig negeren, weet u wel.',
  'Unable to Connect to Notification Server' => 'Kan geen verbinding maken met de meldingenserver.',
  'Notification server not enabled' => 'Meldingenserver niet ingeschakeld',
  'This is a test notification, sent at %s.' => 'Dit is een testmelding, verzonden voor %s.',
  '(To start the server, run this command.)
%s' => 'Voer dit commando uit om de server te starten:
%s',
  'You have no unread notifications.' => 'U heeft geen ongelezen meldingen.',
  'Connecting...' => 'Verbinden...',
  'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'HTTP 200 ontvangen, maar HTTP 501 verwacht (WebSocket-upgrade)!',
  'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => 'De instelling van de meldingenserver is ongeldig: dezelfde host en poort ("%s") worden meerdere keren beschreven. Elke combinatie van host en poort mag slechts één keer in de lijst voorkomen.',
  'Mark All Read' => 'Alles als gelezen markeren',
  'Show only unread notifications.' => 'Alleen ongelezen meldingen weergeven.',
  'This server is configured to use a notification server, but is not able to connect to it.' => 'Deze server is ingesteld om een meldingenserver te gebruiken, maar kan er geen verbinding mee maken.',
  'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => 'De instelling van de meldingenserver is ongeldig: elke vermelding in de lijst moet een "dictionary" zijn die een service beschrijft, maar de waarde met index "%s" is geen dictionary.',
  'Notification server configuration has an invalid service specification (at index "%s"): %s.' => 'De instelling van de meldingenserver bevat een ongeldige servicespecificatie (op index " %s "): %s .',
  'You have no notifications.' => 'U hebt geen meldingen.',
);
  }

}
