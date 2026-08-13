<?php

final class PhabricatorExtensionsSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Would run: 
 $ cd %s
$ %s
' => 'Spustilo by sa: 
 $ cd %s
$ %s',
  'Extension key: %s
Library: %s
Version: %s
URI: %s
' => 'Kľúč rozšírenia: %s
Knižnica: %s
Verzia: %s
URI: %s',
  'Wrote configuration key "%s" to local storage (in file "%s").
' => 'Konfiguračný kľúč „%s“ bol zapísaný do lokálneho úložiska (v súbore „%s“).',
  '1. Download the extension archive from %s to %s' => '1. Stiahnite archív rozšírenia z %s do %s',
  '1. `git clone` the extension from url `%s` to location `%s`' => '1. Naklonujte rozšírenie príkazom `git clone` z adresy `%s` do umiestnenia `%s`',
  'Can only install one extension at a time.' => 'Naraz je možné nainštalovať iba jedno rozšírenie.',
  'Install new extensions.' => 'Nainštalovať nové rozšírenia.',
  'Ignore these issues and continue with installation?' => 'Ignorovať tieto problémy a pokračovať v inštalácii?',
  'Would copy `%s` to `%s` and add `%s` to LoadLibraries
' => 'Skopírovalo by sa `%s` do `%s` a `%s` by sa pridalo do LoadLibraries',
  'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.
' => 'Lokálna cesta „%s“ nie je zapisovateľná. Tento súbor musí byť zapisovateľný, aby „bin/config“ mohol ukladať konfiguráciu.',
  'Extension %s not found.
' => 'Rozšírenie %s sa nenašlo.',
  'Downloading %s to %s
' => 'Sťahuje sa %s do %s',
  'Allowed Extension Stores to use.' => 'Povolené obchody s rozšíreniami, ktoré sa majú použiť.',
  'Install extension by specifying its git URI.' => 'Nainštalovať rozšírenie zadaním jeho URI adresy git.',
  'Had issues verifying this download:' => 'Pri overovaní tohto stiahnutého súboru sa vyskytli problémy:',
  'Unknown output format `%s`' => 'Neznámy formát výstupu `%s`',
  'Store to search in and download from (Ignoring configuration).' => 'Obchod, v ktorom sa má vyhľadávať a z ktorého sa má sťahovať (ignoruje konfiguráciu).',
  'Would download and install \'%s\' as \'%s\'
' => 'Stiahlo a nainštalovalo by sa „%s“ ako „%s“',
  'Aborting.
' => 'Prerušuje sa.',
  'Shows information about a prospective Extension.' => 'Zobrazí informácie o zamýšľanom rozšírení.',
  'Treating %s as an extension key
' => '%s sa považuje za kľúč rozšírenia',
  'After running, you should run `%s` and restart the server.' => 'Po dokončení by ste mali spustiť `%s` a reštartovať server.',
  'Store to search in and query (Ignoring configuration).' => 'Obchod, v ktorom sa má vyhľadávať a na ktorý sa má dopytovať (ignoruje konfiguráciu).',
  'Managing and installing extensions' => 'Správa a inštalácia rozšírení',
  'Provide a uri or extension id to install' => 'Na inštaláciu zadajte URI alebo ID rozšírenia',
  'Unknown extension format `%s` - maybe upgrade %s first?
' => 'Neznámy formát rozšírenia `%s` – možno najprv aktualizovať %s?',
  'Unable to read the %s file of the downloaded package - can\'t decide what the name the library is using.' => 'Nepodarilo sa načítať súbor %s stiahnutého balíka – nie je možné určiť, aký názov knižnica používa.',
  '2. Add the extension to `load-libraries` in %s, so it will be loaded into %s' => '2. Pridajte rozšírenie do `load-libraries` v %s, aby sa načítalo do %s',
  'PHP versions older then %s have known security vulnerabilities when considering PHAR files; Installing extensions from PHAR files and from the Store is therefore disabled. See %s' => 'Verzie PHP staršie ako %s majú známe bezpečnostné zraniteľnosti pri práci so súbormi PHAR; inštalácia rozšírení zo súborov PHAR a z obchodu je preto zakázaná. Pozrite si %s',
  'Continue installing whatever that is?' => 'Pokračovať v inštalácii, nech je to čokoľvek?',
  'Manage %s Extensions' => 'Spravovať rozšírenia %s',
  'Encountered an error trying to verify the downloaded package: %s' => 'Pri pokuse o overenie stiahnutého balíka sa vyskytla chyba: %s',
  'Install a phar extension' => 'Nainštalovať rozšírenie phar',
  'Warning: We don\'t check what you\'re downloading. It can be anything. It has read/write access to anything %s has access to. be sure you trust it.' => 'Upozornenie: Nekontrolujeme, čo sťahujete. Môže to byť čokoľvek. Má prístup na čítanie aj zápis ku všetkému, ku čomu má prístup %s. Uistite sa, že mu dôverujete.',
  'The package is listed in the store as library `%s`, but the actual library downloaded is named `%s`. Depending on context, this may or may not be important.' => 'Balík je v obchode uvedený ako knižnica `%s`, ale skutočne stiahnutá knižnica sa volá `%s`. V závislosti od kontextu to môže, ale nemusí byť dôležité.',
  'Aborting.' => 'Prerušuje sa.',
  'Input `%s` looks like an extension key
' => 'Vstup `%s` vyzerá ako kľúč rozšírenia',
  'Would add `%s` to key `%s` in file %s
' => 'Do kľúča `%2$s` v súbore %3$s by sa pridalo `%s`',
  'Invalid filename \'%s\'
' => 'Neplatný názov súboru „%s“',
  'Location to download and install extensions to.' => 'Umiestnenie, do ktorého sa majú rozšírenia sťahovať a inštalovať.',
  'Extension %s found in store %s.
' => 'Rozšírenie %s sa našlo v obchode %s.',
  'Not an ext key? %s
' => 'Nie je to kľúč rozšírenia? %s',
  'Lists installed extensions. Experimental.' => 'Vypíše nainštalované rozšírenia. Experimentálne.',
  'Extension with key %s not found in any store.
' => 'Rozšírenie s kľúčom %s sa nenašlo v žiadnom obchode.',
  'Output format. `json` or `table`.' => 'Formát výstupu. `json` alebo `table`.',
  'This command will:' => 'Tento príkaz vykoná:',
);
  }

}
