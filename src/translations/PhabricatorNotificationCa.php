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
      'No notifications to mark as read.' => 'No hi ha notificacions per marcar com a llegides.',
      'Notification Server Down' => 'Servidor de notificació caigut',
      'Unable to test client on an admin server!' => 'No es pot provar el client en un servidor administrador!',
      'Real-Time Updates and Alerts' => 'Actualitzacions i alertes en temps real',
      'You can\'t ignore your problems forever, you know.' => 'Ja saps que no pots ignorar els teus problemes per sempre.',
      'Unable to Connect to Notification Server' => 'No s\'ha pogut connectar al servidor de notificacions',
      'Test Notification' => 'Notificació de prova',
      'Notification server not enabled' => 'Servidor de notificació no habilitat',
      'This is a test notification, sent at %s.' => 'Això és una notificació de prova, s\'ha enviat a %s.',
      '(To start the server, run this command.)
    %s' => '(Per iniciar el servidor, executa aquesta comanda.)
    %s',
      'You have no unread notifications.' => 'No tens notificacions sense llegir.',
      'Connecting...' => 'Connectant...',
      'Mark All Read' => 'Marca tot llegit',
      'Show only unread notifications.' => 'Mostra només les notificacions no llegides.',
      'You have no notifications.' => 'No tens notificacions.',
    );
  }

}
