<?php

final class PhabricatorConfigFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Column/Key' => 'Sarake/avain',
      'Customize the logo and wordmark text in the header.' => 'Mukauta logoa ja sanamerkkitekstiä otsikossa.',
      '%s / %s' => '%s / %s',
      'Memory Usage' => 'Muistin käyttö',
      'Table' => 'Taulukko',
      'The best available MYSQL implementation is now selected automatically.' => 'Phabricator valitsee nyt automaattisesti parhaimman saatavilla olevan MySQL-toteutuksen.',
      'Ignore Setup Issue' => 'Ohita asennusongelma',
      'Column Has No Specification' => 'Sarakkeessa ei ole eritelmiä',
      'No Email Preferences Link' => 'Älä näytä linkkiä sähköpostiasetuksiin',
      'Usage' => 'Käyttö',
      '%s deleted %s (again?).' => '%s poisti %s (taas?).',
      'Repository Errors' => 'Tietovarannon virheet',
      'Use Normal HTTP Redirects' => 'Käytä normaaleja HTTP-uudelleenohjauksia',
      'Configuration key \'%s\' is not set in %s configuration!' => 'Asetusavainta \'%s\' ei ole asetettu %s kokoonpanossa!',
      'Access Denied' => 'Pääsy estetty',
      'Nullable' => 'Nollattavissa',
      'Run these %d command(s):' => 'Suorita %s komento(a):',
      'Pattern' => 'Kuvio',
      'Unknown \'%s\' Version' => 'Tuntematon \'%s\' versio',
      'Allow editing' => 'Salli muokkaus',
      'URI where this software is installed.' => 'URI, johon Phabricator on asennettu.',
      'Database Servers' => 'Tietokantapalvelimet',
      'Search Servers' => 'Hae palvelimia',
      'Remove Custom Logo' => 'Poista mukautettu logo',
      '(Not Supported)' => '(Ei tuettu)',
      'Nonstandard port' => 'Epästandardi portti',
      'Don\'t embed Commons videos' => 'Älä upota Commons-videoita',
      'This configuration has been removed. You can safely delete it.
    %s' => 'Tämä kokoonpano on poistettu. Voit turvallisesti poistaa sen.
     %s',
      'Use Private Replies (More Secure)' => 'Käytä yksityisiä vastauksia (turvallisempi)',
      'Other Services' => 'Muut palvelut',
      'Database Schemata' => 'Tietokantakaavio',
      'Security options.' => 'Turvallisuusasetukset.',
      'Old MySQL Version' => 'Vanha MySQL-versio',
      'Default Partition' => 'Oletusosio',
      'Prevent editing' => 'Estä muokkaaminen',
      'MySQL May Run Slowly' => 'MySQL voi toimia hitaasti',
      'List of Users Without MFA' => 'Luettelo käyttäjistä ilman MFA:ta',
      'Edit "%s"' => 'Muokkaa "%s"',
      'Don\'t embed YouTube videos' => 'Älä upota YouTube-videoita',
      'Disable PHP %s' => 'Poista käytöstä PHP %s',
      'Daemons no longer use PID files.' => 'Phabricator-taustaohjelmat eivät enää käytä PID-tiedostoja.',
      'Send Mail To All Recipients' => 'Lähetä sähköposti kaikille vastaanottajille',
      'Not Available' => 'Ei käytettävissä',
      'Unknown Configuration Option "%s"' => 'Tuntematon määritysvaihtoehto "%s"',
      'Do Not Use Pygments' => 'Älä käytä pygmenttejä',
      'Up to Date' => 'Ajantasalla',
      '(empty)' => '(tyhjä)',
      'This key has the wrong uniqueness setting.' => 'Tällä avaimella on väärä yksilöllisyysasetus.',
      'When users set or reset a password, it must have at least this many characters.' => 'Kun käyttäjät asettavat tai nollaavat salasanan, siinä täytyy olla vähintään näin monta merkkiä.',
      'User Guide: Amazon RDS' => 'Käyttöopas: Amazon RDS',
      'Column Type' => 'Saraketyyppi',
      'Cache' => 'Välimuisti',
      'Wrong Column Type' => 'Väärä saraketyyppi',
      'Embed YouTube videos' => 'Upota YouTube-videoita',
      'Clear Cache' => 'Tyhjennä välimuisti',
      'Configure Mail.' => 'Määritä sähköposti.',
      'Notification Servers' => 'Tiedonantopalvelimet',
      'Notifications Status' => 'Ilmoitusten tila',
      'Sites' => 'Sivustot',
      'You should upgrade this software.' => 'Sinun tulee päivittää tämä ohjelmisto.',
      'This key is on the wrong columns.' => 'Tämä avain on väärissä sarakkeissa.',
      'Minimum password length.' => 'Salasanan vähimmäispituus.',
      'Database' => 'Tietokanta',
      'Application Settings' => 'Sovellusasetukset',
      'Show email preferences link in email.' => 'Näytä sähköpostiasetusten linkki sähköpostissa.',
      '%s Not Working' => '%s ei toimi',
      'Connection' => 'Yhteys',
      'Enable Prototypes' => 'Ota prototyypit käyttöön',
      'Partial \'%s\' Support' => 'Osittainen "%s" tuki',
      'Reload Page' => 'Päivitä sivu',
      'Large Files' => 'Suuret tiedostot',
      'The namespace that databases should use.' => 'Nimiavaruus, jota Phabricator-tietokantojen tulee käyttää.',
      '%s Not Set' => '%s Ei asetettu',
      'Issue' => 'Ongelma',
      'Settings History' => 'Asetushistoria',
      'No Messages' => 'Ei viestejä',
      'Replica' => 'Kopio',
      'Database Status' => 'Tietokannan tila',
      'Largest' => 'Suurin',
      '%s Day(s)' => '%s päivä(ä)',
      'This key is too long for utf8mb4.' => 'Tämä avain on liian pitkä utf8mb4:lle.',
      'Logo Image' => 'Logokuva',
      'Remove PHP %s' => 'Poista PHP %s',
      '%s Not Found' => '%s ei löydy',
      'Key is Too Long' => 'Avain on liian pitkä',
      'Customize favicons.' => 'Mukauta faviconeja',
      'No Repositories' => 'Ei tietovarantoja',
      'The timezone this software should use by default.' => 'Aikavyöhyke, jota Phabricatorin tulee käyttää.',
      'Automatic' => 'Automaattinen',
      'Connection Error' => 'Yhteysvirhe',
      'Dark' => 'Tumma',
      'Cache Status' => 'Välimuistin tila',
      'US West (PDT)' => 'US West (PDT)',
      'Run Normally' => 'Suorita normaalisti',
      'Library' => 'Kirjasto',
      'Show Email Preferences Link' => 'Näytä linkki sähköpostiasetuksiin',
      'Allow HTTP' => 'Salli HTTP',
      'Synchronized' => 'Synkronoitu',
      'MySQL %s Not Supported' => 'MySQL %s ei tuettu',
      'Use HSTS' => 'Käytä HSTS:ää',
      'PHP Timezone' => 'PHP-aikavyöhyke',
      'Internal.' => 'Sisäinen.',
      'Advanced Settings' => 'Lisäasetukset',
      'Do Not Use HSTS' => 'Älä käytä HSTS:ää',
      'PHP 7.0-7.1 Not Supported' => 'PHP 7.0-7.1 ei tueta',
      'List all configuration keys.' => 'Luettele kaikki konfigurointiavaimet.',
      'Key on Wrong Columns' => 'Avain väärissä sarakkeissa',
      'Databases' => 'Tietokannat',
      'Unknown Config' => 'Tuntematon kokoonpano',
      'Daemons Not Running' => 'Taustaohjelmia ei käynnissä',
      'Core Settings' => 'Ydinasetukset',
      'Setup Checks' => 'Asennuksen tarkistukset',
      'Keys' => 'Avaimet',
      'Force HTTPS' => 'Pakota HTTPS',
      'User Interface' => 'Käyttöliittymä',
      'US East (EDT)' => 'US East (EDT)',
      'The HTTP referrer.' => 'HTTP-viittaus.',
      'HTTP Parameters Not Transmitting' => 'HTTP-parametreja ei lähetetä',
      'View "%s"' => 'Näytä "%s"',
      'Blindigo' => 'Blindigo',
      'Enable developer mode' => 'Ota kehittäjätila käyttöön',
      'Setup Error' => 'Phabricator-asennusvirhe',
    );
  }

}
