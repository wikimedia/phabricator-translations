<?php

final class PhabricatorNotificationCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Sense llegir',
      'Unable to load server status: this is not an admin server!' => 'No es pot carregar l\'estat del servidor: això no és un servidor administrador!',
      'All Notifications' => 'Totes les notificacions',
      'Really mark all notifications as read?' => 'Realment vols marcar totes les notificacions com a llegides?',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => 'La configuració del servidor de notificacions és invàlida: no especifica cap servidor habilitat amb tipus "admin". Les notificacions requereixen com a mínim un servidor "admin" actiu.',
      'Setting Up Client' => 'Instal·lant client',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => 'La configuració del servidor de notificacions és invàlida: no especifica cap servidor habilitat amb tipus "client". Les notificacions requereixen com a mínim un servidor "client" actiu.',
      'All unread notifications will be marked as read. You can not undo this action.' => 'Totes les notificacions no llegides seran marcades com a llegides. No podràs desfer aquesta acció.',
      'Unread Notifications' => 'Notificacions no llegides',
      'Unable to post message: this is not an admin server!' => 'No es pot publicar el missatge: això no és un servidor administrador!',
      'Disconnected' => 'Desconnectat',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => 'La configuració del servidor de notificacions descriu un host no vàlid ("%s", a l\'índex "%s") amb un tipus no reconegut ("%s"). Els tipus vàlids són "%s" o "%s".',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => 'La configuració del servidor de notificacions descriu un host no vàlid ("%s", a l\'índex "%s") amb un protocol no vàlid ("%s"). Els protocols vàlids són "%s" o "%s".',
      'No notifications to mark as read.' => 'No hi ha notificacions per marcar com a llegides.',
      'Notification Server Down' => 'Servidor de notificació caigut',
      'Unable to test client on an admin server!' => 'No es pot provar el client en un servidor administrador!',
      'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => 'La configuració del servidor de notificacions descriu un host no vàlid ("%s", a l\'índex "%s"). Això és un servei "administrador" però té una propietat "ruta". Aquesta propietat només és vàlida per serveis "client".',
      'Real-Time Updates and Alerts' => 'Actualitzacions i alertes en temps real',
      'You can\'t ignore your problems forever, you know.' => 'Ja saps que no pots ignorar els teus problemes per sempre.',
      'Unable to Connect to Notification Server' => 'No s\'ha pogut connectar al servidor de notificacions',
      'Phabricator is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s' => 'Phabricator està configurat per utilitzar un servidor de notificacions, però és incapaç de connectar-se a ell. Hauries de resoldre aquest assumpte o deshabilitar el servidor de notificacions. Pot ser útil tornar a comprovar la vostra configuració o reiniciar el servidor utilitzant l\'ordre següent.
    %s',
      'Test Notification' => 'Notificació de prova',
      'Notification server not enabled' => 'Servidor de notificació no habilitat',
      'This is a test notification, sent at %s.' => 'Això és una notificació de prova, s\'ha enviat a %s.',
      '(To start the server, run this command.)
    %s' => '(Per iniciar el servidor, executa aquesta comanda.)
    %s',
      'You have no unread notifications.' => 'No tens notificacions sense llegir.',
      'Connecting...' => 'Connectant...',
      'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'S\'ha obtingut HTTP 200, però s\'esperava HTTP 501 (Actualització de WebSocket)!',
      'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => 'La configuració del servidor de notificacions no és vàlida: descriu el mateix host i port ("%s") en diferents ocasions. Cada combinació de host i port hauria d\'aparèixer només una vegada en la llista.',
      'Mark All Read' => 'Marca tot llegit',
      'Show only unread notifications.' => 'Mostra només les notificacions no llegides.',
      'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => 'La configuració del servidor de notificacions no és vàlida: cada entrada de la llista ha de ser un diccionari descrivint un servei, però el valor amb índex "%s" no és un diccionari.',
      'Notification server configuration has an invalid service specification (at index "%s"): %s.' => 'La configuració del servidor de notificacions té una especificació de servei no vàlida (en l\'índex "%s"): %s.',
      'You have no notifications.' => 'No tens notificacions.',
    );
  }

}
