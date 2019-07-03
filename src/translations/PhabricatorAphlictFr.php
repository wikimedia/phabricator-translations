<?php

final class PhabricatorAphlictFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Envoyer une notification à un utilisateur.',
      'The notification server should not be run as root.' => 'Le serveur de notification ne doit pas être exécuté sous root.',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'Deux serveurs (aux index « %s » et « %s ») sont liés au même port (« %s »). Chaque serveur doit être lié à un port unique.',
      'Failed to %s!' => 'Échec de %s !',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'ERREUR : La fonction PHP %s est désactivée. Vous devez l’activer pour exécuter Aphlict sur cette machine.',
      'Stop the notification server.' => 'Arrêter le serveur de notification.',
      'Configuration file is not properly formatted JSON. %s' => 'Le fichier de configuration n’est pas un JSON bien formaté. %s',
      'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => 'Aucun binaire `%s` ou `%s` n’a été trouvé dans %s. Vous devez installer Node.js pour démarrer le serveur Aphlict.',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'ERREUR : L’extension PHP \'%s\' n’est pas installée. Vous devez l’installer pour exécuter Aphlict sur cette machine.',
      'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s' => 'Échec à la création du répertoire « %s » pour le fichier de journal spécifié (avec l’index « %s »). Vous devez créer manuellement ce répertoire ou choisir un emplacement de fichier de trace différent. %s',
      'Configuration file has improper configuration keys at top level. %s' => 'Le fichier de configuration a de mauvaises clés de configuration au niveau supérieur. %s',
      'Aphlict is not running.' => 'Aphlict ne tourne pas.',
      'You must %s first!' => 'Vous devez d’abord %s !',
      'A specified server (at index "%s", on port "%s") specifies a value for "%s", but no value for "%s" or "%s". Servers should only provide an SSL chain if they also provide an SSL key and SSL certificate.' => 'Un serveur spécifié (à l’index « %s », sur le port « %s ») spécifie une valeur pour « %s », mais aucune pour « %s » ou « %s ». Les serveurs ne doivent fournir une chaîne SSL que s’ils fournissent aussi une clé et un certificat SSL.',
      'Sending %s a SIGKILL.' => 'Envoi à %s d’un SIGKILL.',
      'Launching server:' => 'Lancement du serveur :',
      'Starting Aphlict server in foreground...' => 'Exécution du serveur Aphlict au premier plan…',
      'Server exited!' => 'Serveur terminé !',
      'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => 'Démarrer le serveur de notifications en premier plan et afficher les gros volumes d’information de diagnostic sur la console.',
      'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.' => 'Un serveur spécifié (à l’index « %s », sur le port « %s ») a un type non valide (« %s »). Les types valides sont : admin, client.',
      'No user with username "%s" exists.' => 'Il n\'existe pas d\'utilisateur ayant pour nom « %s » .',
      'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.' => 'Le fichier de configuration spécifie le pair de grappe « %s » plus d’une fois (aux index « %s » et « %s »). Chaque pair doit avoir une combinaison d’hôte et de port unique.',
      'Show the status of the notification server.' => 'Afficher l’état du serveur de notification.',
      'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => 'Le fichier de configuration ne spécifie aucun serveur. Ce service ne pourra pas interagir avec le monde extérieur s’il n’écoute aucun port. Vous devez spécifier au moins un serveur « %s » et au moins un serveur « %s ».',
      'Start the notifications server.' => 'Démarrer le serveur de notifications.',
      'User to notify.' => 'Utilisateur à notifier.',
      'Stop, then start the notification server.' => 'Arrêter, puis démarrer le serveur de notifications.',
      'Failed to read configuration file. %s' => 'Échec de lecture du fichier de configuration. %s',
      'Writing logs to: %s' => 'Écriture des traces dans : %s',
      'Specify a user to notify with "--user".' => 'Spécifier un utilisateur à notifier avec « --user ».',
      'A specified server (at index "%s", on port "%s") specifies only one of "%s" and "%s". Each server must specify neither (to disable SSL) or specify both (to enable it).' => 'Un serveur spécifié (à l’index « %s », sur le port « %s ») spécifie seulement « %s » ou « %s ». Chaque serveur doit spécifier soit aucun des deux (pour désactiver SSL), soit les deux (pour l’activer).',
      'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => 'Le fichier de configuration ne spécifie aucun serveur client. Ce service ne pourra pas transmettre de notifications sans serveur client. Vous devez spécifier au moins un serveur de type « %s ».',
      'Message to send.' => 'Message à envoyer.',
      'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => 'Le fichier de configuration ne spécifie pas de serveur d’administration. Ce service ne pourra pas recevoir de message. Vous devez spécifier au moins un serveur de type « %s ».',
      'Aphlict Server (%s) exited normally.' => 'Le serveur Aphlict (%s) s’est terminé normalement.',
      'Reading configuration from: %s' => 'Lecture de la configuration depuis : %s',
      'Unable to start notifications server because it is already running. Use `%s` to restart it.' => 'Impossible de démarrer le serveur de notifications parce qu’il tourne déjà. Utiliser `%s` pour le redémarrer.',
      'Specify a message to send with "--message".' => 'Spécifier un message à envoyer avec « --message » .',
      'Sent notification.' => 'Notification envoyée.',
      'Use a specific configuration file instead of the default configuration.' => 'Utiliser un fichier de configuration spécifique au lieu de celui par défaut.',
      'Configuration file specifies cluster peer ("%s", at index "%s") with an invalid protocol, "%s". Valid protocols are "%s" or "%s".' => 'Le fichier de configuration spécifie un pair de grappe (« %s », à l’index « %s ») avec un protocole non valide, « %s ». Les protocoles valides sont « %s » ou « %s ».',
      'Aphlict Server started.' => 'Serveur Aphlict démarré.',
      'Stopping Aphlict Server (%s)...' => 'Arrêt du serveur Aphlict (%s)…',
      'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => 'Échec de création du répertoire « %s » pour le fichier de PID spécifié. Vous devez créer manuellement ce répertoire ou choisir un emplacement de fichier de PID différent. %s',
      'Aphlict (%s) is running.' => 'Aphlict (%s) tourne.',
    );
  }

}
