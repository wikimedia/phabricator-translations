<?php

final class PhabricatorAphlictCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Enviar una notificació a un usuari.',
      'The notification server should not be run as root.' => 'El servidor de notificacions no s\'ha d\'executar com a arrel.',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'Dos servidors (amb els índex «%s» i «%s») s\'uneixen al mateix port («%s»). Cada servidor s\'ha de vincular a un port únic.',
      'Failed to %s!' => 'Error al %s!',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'ERROR: La funció PHP %s no està habilitada. Heu d\'habilitar-la per executar Aphlict en aquesta màquina.',
      'Stop the notification server.' => 'Aturar el servidor de notificacions.',
      'Configuration file is not properly formatted JSON. %s' => 'El fitxer de configuració no té el format JSON adequat.  %s',
      'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => 'No s\'ha trobat cap binari "%s" o "%s" a %s. Cal instal·lar Node.js per iniciar el servidor Aphlict.',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'ERROR: L\'extensió de PHP \'%s\' no està instal·lada.  Cal instal·lar-la per executar Aphlict en aquesta màquina.',
      'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s' => 'No s\'ha pogut crear el directori «%s» per al fitxer de registre especificat (amb l\'índex «%s»). Hauríeu de crear manualment aquest directori o triar una ubicació diferent del fitxer de registre. %s',
      'Configuration file has improper configuration keys at top level. %s' => 'El fitxer de configuració té claus de configuració incorrectes al nivell superior. %s',
      'Aphlict is not running.' => 'L\'Aphlict no s\'està executant.',
      'You must %s first!' => 'En primer lloc haureu de %s!',
      'A specified server (at index "%s", on port "%s") specifies a value for "%s", but no value for "%s" or "%s". Servers should only provide an SSL chain if they also provide an SSL key and SSL certificate.' => 'Un servidor especificat (a l\'índex "%s", al port "%s") especifica un valor per "%s", però cap valor per "%s" o "%s".  Els servidors només haurien de proporcionar una cadena SSL si també proporcionen una clau SSL i un certificat SSL.',
      'Sending %s a SIGKILL.' => 'Enviant %s d\'un SIGKILL.',
      'Launching server:' => 'Servidor de llançament:',
      'Starting Aphlict server in foreground...' => 'Iniciant el servidor Aphlict en primer pla...',
      'Server exited!' => 'El servidor ha sortit!',
      'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => 'Inicia el servidor de notificacions en primer pla i imprimeix grans volums d\'informació de diagnòstic a la consola.',
      'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.' => 'Un servidor especificat (a l\'índex «%s», al port «%s») té un tipus invàlid («%s»).  Els tipus vàlids són: administrador, client.',
      'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.' => 'El fitxer de configuració especifica el parell de clústers «%s» més d\'una vegada (a índexs «%s» i «%s»).  Cada parell ha de tenir una combinació única d\'amfitrió i port.',
      'Show the status of the notification server.' => 'Mostra l\'estat del servidor de notificacions.',
      'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => 'El fitxer de configuració no especifica cap servidor.  Aquest servei no podrà interactuar amb el món exterior si no escolta cap port.  Heu d\'especificar com a mínim un servidor «%s» i almenys un servidor «%s».',
      'Start the notifications server.' => 'Inicia el servidor de notificacions.',
      'User to notify.' => 'Usuari per notificar.',
      'Stop, then start the notification server.' => 'Atureu-vos i inicieu el servidor de notificacions.',
      'Failed to read configuration file. %s' => 'No s\'ha pogut llegir el fitxer de configuració.  %s',
      'Writing logs to: %s' => 'Escrivint registres a: %s',
      'Specify a user to notify with "--user".' => 'Especifiqueu un usuari per notificar-ho amb "--user".',
      'A specified server (at index "%s", on port "%s") specifies only one of "%s" and "%s". Each server must specify neither (to disable SSL) or specify both (to enable it).' => 'Un servidor especificat (a l\'índex «%s», al port «%s») específica només un de «%s» i «%s». Cada servidor no ha d\'especificar cap (per desactivar SSL) o especificar ambdós (per activar-lo).',
      'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => 'El fitxer de configuració no especifica cap servidor client. Aquest servei no podrà transmetre cap notificació sense un servidor client. Heu d\'especificar com a mínim un servidor amb el tipus «%s».',
      'Message to send.' => 'Missatge a enviar.',
      'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => 'El fitxer de configuració no especifica cap servidor administratiu. Aquest servei no podrà rebre missatges. Heu d\'especificar com a mínim un servidor amb el tipus «%s».',
      'Aphlict Server (%s) exited normally.' => 'Servidor d\'Aphlict (%s) ha sortit normalment.',
      'Reading configuration from: %s' => 'S\'està llegint la configuració des de: %s',
      'Unable to start notifications server because it is already running. Use `%s` to restart it.' => 'No s\'ha pogut iniciar el servidor de notificacions perquè ja s\'està executant.  Utilitzeu `%s` per reiniciar-lo.',
      'Specify a message to send with "--message".' => 'Especifiqueu un missatge per enviar amb «--message».',
      'Sent notification.' => 'Notificació enviada.',
      'Use a specific configuration file instead of the default configuration.' => 'Utilitza un fitxer de configuració específic en lloc de la configuració per defecte.',
      'Configuration file specifies cluster peer ("%s", at index "%s") with an invalid protocol, "%s". Valid protocols are "%s" or "%s".' => 'L\'arxiu de configuració especifica el parell de clústers ("%s", a l\'índex "%s") amb un protocol invàlid, "%s".  Els protocols vàlids són «%s» o «%s».',
      'Aphlict Server started.' => 'S\'ha iniciat el servidor Aphlict.',
      'Stopping Aphlict Server (%s)...' => 'Aturant el servidor Aphlict (%s)...',
      'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => 'No s\'ha pogut crear el directori «%s» per al fitxer PID especificat. Hauríeu de crear manualment aquest directori o triar una ubicació diferent del fitxer PID.  %s',
      'Aphlict (%s) is running.' => 'S\'està executant Aphlict (%s).',
    );
  }

}
