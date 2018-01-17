<?php

final class PhabricatorAphlictHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'The notification server should not be run as root.' => 'Az értesítő kiszolgáló nem futhat rootként.',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'Két kiszolgáló (az "%s" és a "%s" indexek) mindegyike ugyanarra a portra csatlakozik ("%s"). Minden kiszolgálónak egy egyedi porthoz kell kapcsolódnia.',
      'Failed to %s!' => 'Nem sikerült %s!',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'HIBA: a %s PHP függvény ki van kapcsolva. Engedélyeznie kell az Aphlict futtatását ezen a gépen.',
      'Stop the notification server.' => 'Állítsa le az értesítési kiszolgálót.',
      'Configuration file is not properly formatted JSON. %s' => 'A konfigurációs fájl nem megfelelően formázott JSON. %s',
      'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => 'Nem található `%s` vagy `%s` bináris a %s-ban. Az Aphlict kiszolgáló indításához el kell indítania a Node.js alkalmazást.',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'HIBA: A \'%s\' PHP kiterjesztés nincs telepítve. Telepítenie kell az Aphlict-et az ezen a gépen történő futtatásához.',
      'Configuration file has improper configuration keys at top level. %s' => 'A konfigurációs fájlnak nem megfelelő konfigurációs kulcsok vannak a legmagasabb szinten. %s',
      'Aphlict is not running.' => 'Aphlict nem fut.',
      'You must %s first!' => 'Először %s kell!',
      'Sending %s a SIGKILL.' => 'SIGKILL küldése %s által.',
      'Launching server:' => 'A kiszolgáló indítása:',
      'Starting Aphlict server in foreground...' => 'Az Aphlict kiszolgáló elindítása az előtérben...',
      'Server exited!' => 'A kiszolgáló kilép!',
      'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => 'Indítsa el az értesítőkiszolgálót az előtérben, és kinyomtathatja a nagy mennyiségű diagnosztikai információt a konzolra.',
      'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.' => 'Egy megadott kiszolgáló ("%s" index, "%s" port) érvénytelen típussal rendelkezik ("%s"). Érvényes típusok: admin, ügyfél.',
      'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.' => 'A konfigurációs fájl többször is megadja a "%s" clustert ("%s" és "%s" indexek). Minden peer-nek egyedülálló kiszolgáló és port kombinációval kell rendelkeznie.',
      'Show the status of the notification server.' => 'Az értesítő kiszolgáló állapotának megjelenítése.',
      'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => 'A konfigurációs fájl nem specifikál szervereket. Ez a szolgáltatás nem lesz képes kapcsolatba lépni a külvilággal, ha nem hallgatózik egyetlen porton sem. Meg kell adnia legalább egy "%s" kiszolgálót és legalább egy "%s" kiszolgálót.',
      'Start the notifications server.' => 'Indítsa el az értesítőkiszolgálót.',
      'Stop, then start the notification server.' => 'Állítsd le, majd indítsd el az értesítőkiszolgálót.',
      'Failed to read configuration file. %s' => 'A konfigurációs fájl olvasása sikertelen. %s',
      'Writing logs to: %s' => 'Naplók írása: %s',
      'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => 'A konfigurációs fájl nem tartalmaz ügyfélkiszolgálókat. Ez a szolgáltatás nem képes semmilyen értesítést továbbítani ügyfélkiszolgáló nélkül. Meg kell adnia legalább egy "%s" típusú szervert.',
      'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => 'A konfigurációs fájl nem tartalmaz adminisztratív szervereket. Ez a szolgáltatás nem fog tudni fogadni üzeneteket. Meg kell adnia legalább egy "%s" típusú szervert.',
      'Aphlict Server (%s) exited normally.' => 'Aphlict kiszolgáló (%s) normálisan kilépett.',
      'Reading configuration from: %s' => 'A konfiguráció olvasása: %s',
      'Unable to start notifications server because it is already running. Use `%s` to restart it.' => 'Nem sikerült elindítani az értesítési kiszolgálót, mert már fut. Használja a `%s`-t az újraindításához.',
      'Use a specific configuration file instead of the default configuration.' => 'Használjon speciális konfigurációs fájlt az alapértelmezett konfiguráció helyett.',
      'Aphlict Server started.' => 'Elindult az Aphlict kiszolgáló.',
      'Stopping Aphlict Server (%s)...' => 'Aphlict kiszolgáló leállítása (%s)...',
      'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => 'Nem sikerült létrehozni a "%s" könyvtárat a megadott PID-fájlhoz. Kézzel hozza létre ezt a könyvtárat, vagy válasszon másik PID-fájl helyette. %s',
      'Aphlict (%s) is running.' => 'Aphlict (%s) fut.',
    );
  }

}
