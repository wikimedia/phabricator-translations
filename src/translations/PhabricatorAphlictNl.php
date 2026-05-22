<?php

final class PhabricatorAphlictNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Send a notification to a user.' => 'Een melding naar een gebruiker verzenden.',
  'The notification server should not be run as root.' => 'De meldingenserver mag niet als root worden uitgevoerd.',
  'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'Twee servers (op indexen "%s" en "%s") zijn beide verbonden met dezelfde poort ("%s"). Elke server moet verbonden zijn met een unieke poort.',
  'Failed to %s!' => '%s is mislukt!',
  'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'FOUT: De PHP-functie %s is uitgeschakeld. U moet deze inschakelen om Aphlict op deze machine te kunnen uitvoeren.',
  'Stop the notification server.' => 'Stop de meldingenserver.',
  'Configuration file is not properly formatted JSON. %s' => 'Het configuratiebestand is niet correct opgemaakt als JSON. %s',
  'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => 'Er is geen `%s` of `%s` uitvoerbaar bestand gevonden in %s. U moet Node.js installeren om de Aphlict-server te starten.',
  'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'FOUT: De PHP-uitbreiding \'%s\' is niet geïnstalleerd. U moet deze installeren om Aphlict op deze machine te kunnen gebruiken.',
  'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s' => 'Het is niet gelukt om de map "%s" aan te maken voor het opgegeven logboekbestand (met index "%s"). U moet deze map handmatig aanmaken of een andere locatie voor het logboekbestand kiezen. %s',
  'Configuration file has improper configuration keys at top level. %s' => 'Het configuratiebestand bevat onjuiste configuratiesleutels op het hoogste niveau. %s',
  'Aphlict is not running.' => 'Aphlict is niet actief.',
  'You must %s first!' => 'U moet eerst %s uitvoeren!',
  'A specified server (at index "%s", on port "%s") specifies a value for "%s", but no value for "%s" or "%s". Servers should only provide an SSL chain if they also provide an SSL key and SSL certificate.' => 'Een specifieke server (op index "%s", op poort "%s") specificeert een waarde voor "%s", maar geen waarde voor "%s" of "%s". Servers mogen alleen een SSL-keten verstrekken als ze ook in een SSL-sleutel en een SSL-certificaat voorzien.',
  'Sending %s a SIGKILL.' => 'SIGKILL wordt verzonden aan %s.',
  'Launching server:' => 'Server wordt opgestart:',
  'Starting Aphlict server in foreground...' => 'Aphlict-server wordt op de voorgrond gestart...',
  'Server exited!' => 'Server is afgesloten!',
  'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => 'Start de meldingenserver op de voorgrond en geef grote hoeveelheden diagnostische informatie weer op de console.',
  'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.' => 'Een opgegeven server (op index "%s", op poort "%s") heeft een onjuist type ("%s"). Correcte typen zijn: admin, client.',
  'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.' => 'Het configuratiebestand specificeert clusterpeer "%s" meer dan eens (op indexen "%s" en "%s"). Elke peer moet een unieke combinatie van host en poort hebben.',
  'Show the status of the notification server.' => 'Status van de meldingenserver weergeven.',
  'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => 'Het configuratiebestand specificeert geen servers. Deze dienst kan niet met de buitenwereld communiceren als er geen poorten zijn ingesteld. U moet minimaal één "%s"-server en minimaal één "%s"-server specificeren.',
  'Start the notifications server.' => 'Start de meldingenserver.',
  'User to notify.' => 'Te informeren gebruiker.',
  'Stop, then start the notification server.' => 'Stop de meldingenserver en start deze vervolgens opnieuw.',
  'Failed to read configuration file. %s' => 'Het lezen van het configuratiebestand is mislukt. %s',
  'Writing logs to: %s' => 'Logboeken schrijven naar: %s',
  'Specify a user to notify with "--user".' => 'Geef een gebruiker op die u wilt informeren met "--user".',
  'A specified server (at index "%s", on port "%s") specifies only one of "%s" and "%s". Each server must specify neither (to disable SSL) or specify both (to enable it).' => 'Een specifieke server (op index "%s", op poort "%s") specificeert slechts één van "%s" en "%s". Elke server moet geen van beide specificeren (om SSL uit te schakelen) of beide specificeren (om het in te schakelen).',
  'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => 'Het configuratiebestand specificeert geen clientservers. Deze dienst kan geen meldingen verzenden zonder een clientserver. U moet ten minste één server van het type "%s" specificeren.',
  'Message to send.' => 'Te verzenden bericht.',
  'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => 'Het configuratiebestand specificeert geen beheerdersservers. Deze dienst kan geen berichten ontvangen. U moet ten minste één server van het type "%s" specificeren.',
  'Aphlict Server (%s) exited normally.' => 'Aphlict Server (%s) is normaal afgesloten.',
  'Reading configuration from: %s' => 'Configuratie wordt ingelezen van: %s',
  'Unable to start notifications server because it is already running. Use `%s` to restart it.' => 'De meldingenserver kan niet worden gestart omdat deze al actief is. Gebruik `%s` om deze opnieuw te starten.',
  'Specify a message to send with "--message".' => 'Geef een bericht op dat u wilt verzenden met "--message".',
  'Sent notification.' => 'Melding verzenden.',
  'Use a specific configuration file instead of the default configuration.' => 'Gebruik een specifiek configuratiebestand in plaats van de standaardconfiguratie.',
  'Configuration file specifies cluster peer ("%s", at index "%s") with an invalid protocol, "%s". Valid protocols are "%s" or "%s".' => 'Het configuratiebestand specificeert een clusterpeer ("%s", op index "%s") met een onjuist protocol, "%s". Correcte protocollen zijn "%s" of "%s".',
  'Aphlict Server started.' => 'Applict Server gestart.',
  'Stopping Aphlict Server (%s)...' => 'Aphlict Server wordt gestopt (%s)...',
  'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => 'Het is niet gelukt om de map "%s" aan te maken voor het opgegeven PID-bestand. U moet deze map handmatig aanmaken of een andere locatie voor het PID-bestand kiezen. %s',
  'Aphlict (%s) is running.' => 'Aphlict (%s) wordt uitgevoerd.',
);
  }

}
