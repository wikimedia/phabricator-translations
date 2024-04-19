<?php

final class PhabricatorNotificationFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Non lus',
      'Unable to load server status: this is not an admin server!' => 'Impossible de charger l’état du serveur : ce n\'est pas un serveur d’administration !',
      'All Notifications' => 'Toutes les notifications',
      'Really mark all notifications as read?' => 'Voulez-vous réellement marquer toutes les notifications comme lues ?',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => 'La configuration du serveur de notification est incorrecte : elle ne spécifie aucun serveur actif de type « admin ». Les notifications nécessitent d’avoir au moins un serveur d’administration actif.',
      'Setting Up Client' => 'Configuration du client',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => 'La configuration du serveur de notifications est incorrecte : elle ne spécifie aucun serveur actif de type « client ». Les notifications nécessitent d’avoir au moins un serveur « client » actif.',
      'All unread notifications will be marked as read. You can not undo this action.' => 'Toutes les notifications non lues seront marquées comme lues. Vous ne pouvez pas défaire cette action.',
      'Unread Notifications' => 'Notifications non lues',
      'Unable to post message: this is not an admin server!' => 'Impossible de publier ce message : ce n’est pas un serveur d’administration !',
      'Disconnected' => 'Déconnecté',
      '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => array(
        '%s notification supprimée concernant des objets qui n’existent plus ou que vous ne pouvez plus voir.',
        '%s notifications supprimées concernant des objets qui n’existent plus ou que vous ne pouvez plus voir.',
      ),
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => 'La configuration du serveur de notifications décrit un hôte incorrect (« %s », à l’index « %s ») avec un type non reconnu (« %s »). Les types valides sont « %s » ou « %s ».',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => 'La configuration du serveur de notifications décrit un hôte incorrect (« %s », à l’index « %s ») avec un protocole non reconnu (« %s »). Les protocoles valides sont « %s » ou « %s ».',
      'No notifications to mark as read.' => 'Aucune notification à marquer comme lue.',
      'Notification Server Down' => 'Serveur de notification arrêté',
      'This server is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s' => 'Phabricator est configuré pour utiliser un serveur de notifications, mais est incapable de s’y connecter. Vous devriez résoudre ce problème ou désactiver le serveur de notifications. Il peut être utile de vérifier à nouveau votre configuration ou de redémarrer le serveur en utilisant la commande ci-dessous.
    %s',
      'Unable to test client on an admin server!' => 'Impossible de tester le client sur un serveur d’administration !',
      'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => 'La configuration du serveur de notifications décrit un hôte incorrect (« %s », à l’index « %s »). Ceci est un service « administrateur » mais qui a une propriété « path ». Cette propriété n’est valide que pour les services « client ».',
      'Real-Time Updates and Alerts' => 'Alertes et mises à jour en temps réel',
      'You can\'t ignore your problems forever, you know.' => 'Vous ne pouvez pas ignorer sans cesse vos problèmes, vous savez.',
      'Unable to Connect to Notification Server' => 'Impossible de se connecter au serveur de notifications',
      'Notification server not enabled' => 'Le serveur de notifications n’est pas activé',
      'This is a test notification, sent at %s.' => 'Ceci est une notification de test, envoyée à %s.',
      '(To start the server, run this command.)
    %s' => '(Pour démarrer le serveur, exécutez cette commande.)
    %s',
      'You have no unread notifications.' => 'Vous n’avez aucune notification non lue.',
      'Connecting...' => 'Connexion en cours...',
      'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'Reçu HTTP 200 (OK), mais HTTP 501 (Mise à niveau de WebSocket) était attendu !',
      'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => 'La configuration du serveur de notifications est incorrecte : elle décrit plusieurs fois la même combinaison d’hôte et de port (« %s »). Chaque combinaison d’hôte et de port ne doit apparaître qu’une seule fois dans la liste.',
      'Mark All Read' => 'Tout marquer comme lu',
      'Show only unread notifications.' => 'Montrer seulement les notifications non lues.',
      'This server is configured to use a notification server, but is not able to connect to it.' => 'Phabricator est configuré pour utiliser un serveur de notifications, mais il ne peut pas s’y connecter.',
      'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => 'La configuration du serveur de notifications est incorrecte : chaque entrée de la liste doit être un dictionnaire décrivant un service, mais la valeur à l’index « %s » n’est pas un dictionnaire.',
      'Notification server configuration has an invalid service specification (at index "%s"): %s.' => 'La configuration du serveur de notifications a une spécification de service incorrecte (à l’index « %s ») : %s.',
      'You have no notifications.' => 'Vous n’avez aucune notification.',
    );
  }

}
