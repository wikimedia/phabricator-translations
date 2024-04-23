<?php

final class PhabricatorAphlictLt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lt';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Nusiųsti pranešimą naudotojui.',
      'Failed to %s!' => 'Nepavyko %s!',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'KLAIDA: PHP funkcija %s išjungta. Turite ją įjungti, kad galėtumėte paleisti Aphlict šiame įrenginyje.',
      'Stop the notification server.' => 'Sustabdyti pranešimų serverį.',
      'Configuration file is not properly formatted JSON. %s' => 'Konfigūracijos failas nėra tinkamai suformatuotas JSON. %s',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'KLAIDA: PHP plėtinys „%s“ neįdiegtas. Norėdami paleisti Aphlict šiame įrenginyje, turite jį įdiegti.',
      'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s' => 'Nepavyko sukurti katalogo „%s“ nurodytam žurnalo failui (su indeksu „%s“). Turėtumėte rankiniu būdu sukurti šį katalogą arba pasirinkti kitą žurnalo failo vietą. %s',
      'Aphlict is not running.' => 'Aphlict šiuo metu neveikia.',
      'You must %s first!' => 'Pirmiausia turite %s!',
      'Launching server:' => 'Paleidžiamas serveris:',
      'Server exited!' => 'Serveris išjungtas!',
      'Show the status of the notification server.' => 'Rodyti pranešimų serverio būseną.',
      'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => 'Konfigūracijos failas nenurodo jokių serverių. Ši paslauga negalės sąveikauti su išoriniu pasauliu, jei neklausys jokiuose prievaduose. Turite nurodyti bent vieną „%s“ serverį ir bent vieną „%s“ serverį.',
      'Start the notifications server.' => 'Paleisti pranešimų serverį.',
      'User to notify.' => 'Naudotojas, kuriam pranešti.',
      'Stop, then start the notification server.' => 'Sustabdyti, tada paleisti pranešimų serverį.',
      'Failed to read configuration file. %s' => 'Nepavyko nuskaityti konfigūracijos failo. %s',
      'Writing logs to: %s' => 'Įrašomi žurnalai į: %s',
      'Specify a user to notify with "--user".' => 'Nurodykite naudotoją, kuriam pranešti naudodami „--user“.',
      'Message to send.' => 'Pranešimas siuntimui.',
      'Aphlict Server (%s) exited normally.' => 'Aphlict serveris (%s) išsijungė normaliai.',
      'Reading configuration from: %s' => 'Skaitoma konfigūracija iš: %s',
      'Unable to start notifications server because it is already running. Use `%s` to restart it.' => 'Nepavyko paleisti pranešimų serverio, nes jis jau veikia. Norėdami jį iš naujo paleisti, naudokite `%s`.',
      'Specify a message to send with "--message".' => 'Nurodykite pranešimą, kurį norite siųsti su „--message“.',
      'Sent notification.' => 'Išsiųstas pranešimas.',
      'Aphlict Server started.' => 'Aphlict serveris paleistas.',
      'Stopping Aphlict Server (%s)...' => 'Stabdomas Aphlict serveris (%s)...',
      'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => 'Nepavyko sukurti katalogo „%s“ nurodytam PID failui. Turėtumėte rankiniu būdu sukurti šį katalogą arba pasirinkti kitą PID failo vietą. %s',
      'Aphlict (%s) is running.' => 'Aphlict (%s) veikia.',
    );
  }

}
