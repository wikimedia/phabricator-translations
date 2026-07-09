<?php

final class PhabricatorExtensionsNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Would run: 
 $ cd %s
$ %s
' => 'Zou uitvoeren: 
 $ cd %s
$ %s',
  'Extension key: %s
Library: %s
Version: %s
URI: %s
' => 'Uitbreidingssleutel: %s 
Bibliotheek: %s 
Versie: %s 
URI: %s',
  'Wrote configuration key "%s" to local storage (in file "%s").
' => 'Configuratiesleutel "%s" geschreven naar lokale opslag (in bestand "%s").',
  '1. Download the extension archive from %s to %s' => '1. Download het uitbreidingsarchief van %s tot %s',
  '1. `git clone` the extension from url `%s` to location `%s`' => '1. `git clone` de uitbreiding van url `%s` naar locatie `%s`',
  'Can only install one extension at a time.' => 'U kunt slechts één uitbreiding tegelijk installeren.',
  'Install new extensions.' => 'Nieuwe uitbreidingen installeren.',
  'Ignore these issues and continue with installation?' => 'Deze problemen negeren en doorgaan met de installatie?',
  'Would copy `%s` to `%s` and add `%s` to LoadLibraries
' => 'Zou `%s` kopiëren naar `%s` en `%s` toevoegen aan LoadLibraries',
  'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.
' => 'Lokaal pad "%s" is niet schrijfbaar. Dit bestand moet schrijfbaar zijn zodat "bin/config" configuratie kan opslaan.',
  'Extension %s not found.
' => 'Uitbreiding %s niet gevonden.',
  'Downloading %s to %s
' => '%s downloaden naar %s',
  'Allowed Extension Stores to use.' => 'Toegestane uitbreidingswinkels.',
  'Install extension by specifying its git URI.' => 'Installeer de uitbreiding door de bijbehorende Git-URI op te geven.',
  'Had issues verifying this download:' => 'Er waren problemen bij het verifiëren van deze download:',
  'Unknown output format `%s`' => 'Onbekend uitvoerformaat `%s`',
  'Store to search in and download from (Ignoring configuration).' => 'Winkel om in te zoeken en van te downloaden (configuratie wordt genegeerd).',
  'Would download and install \'%s\' as \'%s\'
' => 'Zou \'%s\' downloaden en installeren als \'%s\'',
  'Aborting.
' => 'Afbreken.',
  'Shows information about a prospective Extension.' => 'Geeft informatie weer over een mogelijke uitbreiding.',
  'Treating %s as an extension key
' => '%s wordt behandeld als uitbreidingssleutel',
  'After running, you should run `%s` and restart the server.' => 'Na het uitvoeren, moet u `%s` uitvoeren en de server herstarten.',
  'Store to search in and query (Ignoring configuration).' => 'Winkel om in te zoeken en op te vragen (configuratie wordt genegeerd).',
  'Managing and installing extensions' => 'Uitbreidingen beheren en installeren',
  'Provide a uri or extension id to install' => 'Geef een URI of uitbreidings-ID op om te installeren',
  'Unknown extension format `%s` - maybe upgrade %s first?
' => 'Onbekend uitbreidingformaat `%s` - misschien eerst upgraden naar %s?',
  'Unable to read the %s file of the downloaded package - can\'t decide what the name the library is using.' => 'Het lukt niet om het bestand %s van het gedownloade pakket te lezen - de naam van de bibliotheek kan niet worden vastgesteld.',
  '2. Add the extension to `load-libraries` in %s, so it will be loaded into %s' => '2. Voeg de uitbreiding toe aan `load-libraries` in %s, zodat deze in %s wordt geladen.',
  'PHP versions older then %s have known security vulnerabilities when considering PHAR files; Installing extensions from PHAR files and from the Store is therefore disabled. See %s' => 'PHP-versies ouder dan %s hebben bekende beveiligingslekken met betrekking tot PHAR-bestanden; het installeren van uitbreidingen vanuit PHAR-bestanden en vanuit de Store is daarom uitgeschakeld. Zie %s',
  'Continue installing whatever that is?' => 'Doorgaan met de installatie van wat het ook is?',
  'Manage %s Extensions' => '%s-uitbreidingen beheren',
  'Encountered an error trying to verify the downloaded package: %s' => 'Er is een fout opgetreden tijdens het verifiëren van het gedownloade pakket: %s',
  'Install a phar extension' => 'Installeer een PHAR-uitbreiding',
  'Warning: We don\'t check what you\'re downloading. It can be anything. It has read/write access to anything %s has access to. be sure you trust it.' => 'Waarschuwing: We controleren niet wat u downloadt. Het kan van alles zijn. Het heeft lees- en schrijftoegang tot alles waar %s toegang toe heeft. Zorg ervoor dat u het vertrouwt.',
  'The package is listed in the store as library `%s`, but the actual library downloaded is named `%s`. Depending on context, this may or may not be important.' => 'Het pakket staat in de store vermeld als bibliotheek `%s`, maar de daadwerkelijk gedownloade bibliotheek heet `%s`. Afhankelijk van de context kan dit wel of niet van belang zijn.',
  'Aborting.' => 'Afbreken.',
  'Input `%s` looks like an extension key
' => 'Invoer `%s` lijkt op een uitbreidingssleutel.',
  'Would add `%s` to key `%s` in file %s
' => 'Zou `%s` toevoegen aan sleutel `%s` in bestand %s',
  'Invalid filename \'%s\'
' => 'Incorrecte bestandsnaam \'%s\'',
  'Location to download and install extensions to.' => 'Locatie waar uitbreidingen gedownload en geïnstalleerd kunnen worden.',
  'Extension %s found in store %s.
' => 'Uitbreiding %s gevonden in de winkel %s.',
  'Not an ext key? %s
' => 'Geen uitbreidingssleutel? %s',
  'Lists installed extensions. Experimental.' => 'Lijst van geïnstalleerde uitbreidingen. Experimenteel.',
  'Extension with key %s not found in any store.
' => 'Uitbreiding met sleutel %s niet gevonden in een winkel.',
  'Output format. `json` or `table`.' => 'Uitvoerformaat: `json` of `tabel`.',
  'This command will:' => 'Deze opdracht zal:',
);
  }

}
