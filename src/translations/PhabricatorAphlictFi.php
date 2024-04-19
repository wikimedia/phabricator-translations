<?php

final class PhabricatorAphlictFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Lähetä ilmoitus käyttäjälle.',
      'The notification server should not be run as root.' => 'Ilmoituspalvelinta ei tule käyttää pääkäyttäjänä.',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'VIRHE: PHP-toiminto %s on poistettu käytöstä. Sinun on otettava se käyttöön, jotta Aphlict voidaan suorittaa tässä laitteessa.',
      'Stop the notification server.' => 'Pysäytä ilmoituspalvelin.',
      'Aphlict is not running.' => 'Aphlict ei ole käynnissä.',
      'You must %s first!' => 'Sinun täytyy ensin %s!',
      'Show the status of the notification server.' => 'Näytä ilmoituspalvelimen tila.',
      'Aphlict (%s) is running.' => 'Aphlict (%s) on käynnissä.',
    );
  }

}
