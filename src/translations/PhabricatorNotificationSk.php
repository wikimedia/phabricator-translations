<?php

final class PhabricatorNotificationSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Unread' => 'Neprečítané',
  'Unable to load server status: this is not an admin server!' => 'Nepodarilo sa načítať stav servera: toto nie je server typu „admin“!',
  'All Notifications' => 'Všetky upozornenia',
  'Really mark all notifications as read?' => 'Naozaj chcete označiť všetky upozornenia ako prečítané?',
  'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => 'Konfigurácia servera upozornení je neplatná: neuvádza žiadny zapnutý server typu „admin“. Upozornenia vyžadujú aspoň jeden aktívny server typu „admin“.',
  'Setting Up Client' => 'Nastavuje sa klient',
  'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => 'Konfigurácia servera upozornení je neplatná: neuvádza žiadny zapnutý server typu „client“. Upozornenia vyžadujú aspoň jeden aktívny server typu „client“.',
  'All unread notifications will be marked as read. You can not undo this action.' => 'Všetky neprečítané upozornenia budú označené ako prečítané. Túto akciu nemožno vrátiť späť.',
  'Unread Notifications' => 'Neprečítané upozornenia',
  'Unable to post message: this is not an admin server!' => 'Nepodarilo sa odoslať správu: toto nie je server typu „admin“!',
  'Disconnected' => 'Odpojené',
  '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => array(
    'Jedno upozornenie na objekt, ktorý už neexistuje alebo ho už nemôžete vidieť, bolo zahodené.',
    '%s upozornenia na objekty, ktoré už neexistujú alebo ich už nemôžete vidieť, boli zahodené.',
    '%s upozornení na objekty, ktoré už neexistujú alebo ich už nemôžete vidieť, bolo zahodených.',
  ),
  'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => 'Konfigurácia servera upozornení popisuje neplatného hostiteľa („%s“ na indexe „%s“) s nerozpoznaným typom („%s“). Platné typy sú „%s“ alebo „%s“.',
  'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => 'Konfigurácia servera upozornení popisuje neplatného hostiteľa („%s“ na indexe „%s“) s neplatným protokolom („%s“). Platné protokoly sú „%s“ alebo „%s“.',
  'No notifications to mark as read.' => 'Žiadne upozornenia na označenie ako prečítané.',
  'Notification Server Down' => 'Server upozornení je nedostupný',
  'This server is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.

%s' => 'Tento server je nastavený na používanie servera upozornení, ale nedokáže sa k nemu pripojiť. Mali by ste tento problém vyriešiť alebo server upozornení vypnúť. Môže pomôcť skontrolovať konfiguráciu alebo reštartovať server pomocou príkazu nižšie.

%s',
  'Unable to test client on an admin server!' => 'Na serveri typu „admin“ nemožno otestovať klienta!',
  'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => 'Konfigurácia servera upozornení popisuje neplatného hostiteľa („%s“ na indexe „%s“). Ide o službu typu „admin“, ale má vlastnosť „path“. Táto vlastnosť je platná iba pre služby typu „client“.',
  'Real-Time Updates and Alerts' => 'Aktualizácie a upozornenia v reálnom čase',
  'You can\'t ignore your problems forever, you know.' => 'Svoje problémy predsa nemôžete ignorovať donekonečna.',
  'Unable to Connect to Notification Server' => 'Nepodarilo sa pripojiť k serveru upozornení',
  'Notification server not enabled' => 'Server upozornení nie je zapnutý',
  'This is a test notification, sent at %s.' => 'Toto je testovacie upozornenie odoslané o %s.',
  '(To start the server, run this command.)
%s' => '(Server spustíte týmto príkazom.)
%s',
  'You have no unread notifications.' => 'Nemáte žiadne neprečítané upozornenia.',
  'Connecting...' => 'Pripája sa...',
  'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'Prišlo HTTP 200, očakávalo sa však HTTP 501 (WebSocket Upgrade)!',
  'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => 'Konfigurácia servera upozornení je neplatná: rovnakého hostiteľa a port („%s“) popisuje viackrát. Každá kombinácia hostiteľa a portu by sa mala v zozname vyskytovať iba raz.',
  'Mark All Read' => 'Označiť všetky ako prečítané',
  'Show only unread notifications.' => 'Zobraziť iba neprečítané upozornenia.',
  'This server is configured to use a notification server, but is not able to connect to it.' => 'Tento server je nastavený na používanie servera upozornení, ale nedokáže sa k nemu pripojiť.',
  'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => 'Konfigurácia servera upozornení nie je platná: každá položka v zozname musí byť slovník popisujúci službu, ale hodnota s indexom „%s“ slovník nie je.',
  'Notification server configuration has an invalid service specification (at index "%s"): %s.' => 'Konfigurácia servera upozornení obsahuje neplatnú špecifikáciu služby (na indexe „%s“): %s.',
  'You have no notifications.' => 'Nemáte žiadne upozornenia.',
);
  }

}
