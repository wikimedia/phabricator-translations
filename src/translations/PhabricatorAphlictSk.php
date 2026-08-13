<?php

final class PhabricatorAphlictSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Send a notification to a user.' => 'Odoslať upozornenie používateľovi.',
  'The notification server should not be run as root.' => 'Server upozornení by sa nemal spúšťať ako root.',
  'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'Dva servery (na indexoch „%s“ a „%s“) sa viažu na rovnaký port („%s“). Každý server sa musí viazať na jedinečný port.',
  'Failed to %s!' => 'Nepodarilo sa %s!',
  'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'CHYBA: Funkcia PHP %s je zakázaná. Na spustenie Aphlictu na tomto stroji ju musíte povoliť.',
  'Stop the notification server.' => 'Zastaviť server upozornení.',
  'Configuration file is not properly formatted JSON. %s' => 'Konfiguračný súbor nie je správne naformátovaný JSON. %s',
  'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => 'V %3$s sa nenašiel žiadny binárny súbor `%s` ani `%s`. Na spustenie servera Aphlict musíte nainštalovať Node.js.',
  'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'CHYBA: Rozšírenie PHP „%s“ nie je nainštalované. Na spustenie Aphlictu na tomto stroji ho musíte nainštalovať.',
  'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s' => 'Nepodarilo sa vytvoriť adresár „%s“ pre zadaný súbor so záznamom (s indexom „%s“). Tento adresár by ste mali vytvoriť ručne alebo zvoliť iné umiestnenie súboru so záznamom. %s',
  'Configuration file has improper configuration keys at top level. %s' => 'Konfiguračný súbor má na najvyššej úrovni nesprávne konfiguračné kľúče. %s',
  'Aphlict is not running.' => 'Aphlict nie je spustený.',
  'You must %s first!' => 'Najprv musíte %s!',
  'A specified server (at index "%s", on port "%s") specifies a value for "%s", but no value for "%s" or "%s". Servers should only provide an SSL chain if they also provide an SSL key and SSL certificate.' => 'Zadaný server (na indexe „%s“, na porte „%s“) uvádza hodnotu pre „%s“, ale žiadnu hodnotu pre „%s“ ani „%s“. Servery by mali poskytovať reťazec certifikátov SSL iba vtedy, ak poskytujú aj kľúč SSL a certifikát SSL.',
  'Sending %s a SIGKILL.' => 'Procesu %s sa posiela SIGKILL.',
  'Launching server:' => 'Spúšťa sa server:',
  'Starting Aphlict server in foreground...' => 'Server Aphlict sa spúšťa v popredí...',
  'Server exited!' => 'Server sa ukončil!',
  'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => 'Spustiť server upozornení v popredí a vypisovať do konzoly veľké množstvo diagnostických informácií.',
  'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.' => 'Zadaný server (na indexe „%s“, na porte „%s“) má neplatný typ („%s“). Platné typy sú: admin, client.',
  'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.' => 'Konfiguračný súbor uvádza partnera klastra „%s“ viackrát (na indexoch „%s“ a „%s“). Každý partner musí mať jedinečnú kombináciu hostiteľa a portu.',
  'Show the status of the notification server.' => 'Zobraziť stav servera upozornení.',
  'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => 'Konfiguračný súbor neuvádza žiadne servery. Táto služba nebude môcť komunikovať s okolitým svetom, ak nebude počúvať na žiadnych portoch. Musíte zadať aspoň jeden server „%s“ a aspoň jeden server „%s“.',
  'Start the notifications server.' => 'Spustiť server upozornení.',
  'Aphlict (%s) is running.' => 'Aphlict (%s) je spustený.',
  'User to notify.' => 'Používateľ, ktorému sa má odoslať upozornenie.',
  'Stop, then start the notification server.' => 'Zastaviť a potom spustiť server upozornení.',
  'Failed to read configuration file. %s' => 'Nepodarilo sa načítať konfiguračný súbor. %s',
  'Writing logs to: %s' => 'Záznamy sa zapisujú do: %s',
  'Specify a user to notify with "--user".' => 'Pomocou „--user“ zadajte používateľa, ktorému sa má odoslať upozornenie.',
  'A specified server (at index "%s", on port "%s") specifies only one of "%s" and "%s". Each server must specify neither (to disable SSL) or specify both (to enable it).' => 'Zadaný server (na indexe „%s“, na porte „%s“) uvádza iba jednu z hodnôt „%s“ a „%s“. Každý server musí zadať buď žiadnu z nich (na vypnutie SSL), alebo obe (na jeho zapnutie).',
  'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => 'Konfiguračný súbor neuvádza žiadne klientske servery. Táto služba nebude môcť prenášať žiadne upozornenia bez klientskeho servera. Musíte zadať aspoň jeden server s typom „%s“.',
  'Message to send.' => 'Správa na odoslanie.',
  'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => 'Konfiguračný súbor neuvádza žiadne administratívne servery. Táto služba nebude môcť prijímať správy. Musíte zadať aspoň jeden server s typom „%s“.',
  'Aphlict Server (%s) exited normally.' => 'Server Aphlict (%s) sa ukončil normálne.',
  'Reading configuration from: %s' => 'Konfigurácia sa načítava z: %s',
  'Unable to start notifications server because it is already running. Use `%s` to restart it.' => 'Server upozornení sa nepodarilo spustiť, pretože už beží. Na jeho reštartovanie použite `%s`.',
  'Specify a message to send with "--message".' => 'Pomocou „--message“ zadajte správu na odoslanie.',
  'Sent notification.' => 'Upozornenie bolo odoslané.',
  'Use a specific configuration file instead of the default configuration.' => 'Použiť konkrétny konfiguračný súbor namiesto predvolenej konfigurácie.',
  'Configuration file specifies cluster peer ("%s", at index "%s") with an invalid protocol, "%s". Valid protocols are "%s" or "%s".' => 'Konfiguračný súbor uvádza partnera klastra („%s“, na indexe „%s“) s neplatným protokolom „%s“. Platné protokoly sú „%s“ alebo „%s“.',
  'Aphlict Server started.' => 'Server Aphlict bol spustený.',
  'Stopping Aphlict Server (%s)...' => 'Server Aphlict (%s) sa zastavuje...',
  'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => 'Nepodarilo sa vytvoriť adresár „%s“ pre zadaný súbor PID. Tento adresár by ste mali vytvoriť ručne alebo zvoliť iné umiestnenie súboru PID. %s',
);
  }

}
