<?php

final class PhabricatorCacheSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  '%s is not available; unable to read deflated data!' => '%s nie je k dispozícii; nemožno prečítať komprimované údaje!',
  'APCu' => 'APCu',
  'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => 'Vyberte vyrovnávacie pamäte na vyprázdnenie pomocou „--all“ alebo „--caches“. Dostupné vyrovnávacie pamäte sú: %s.',
  'APCu Disabled' => 'APCu je vypnuté',
  'The APCu PHP extension is installed, but not enabled in your PHP configuration. Enabling this extension will improve performance. Edit the "%s" setting to enable this extension.' => 'Rozšírenie PHP APCu je nainštalované, ale nie je zapnuté vo vašej konfigurácii PHP. Zapnutie tohto rozšírenia zlepší výkon. Rozšírenie zapnete úpravou nastavenia „%s“.',
  'OPcache is not configured properly for development.' => 'OPcache nie je správne nakonfigurovaný na vývoj.',
  'General Cache (TTL)' => 'Všeobecná vyrovnávacia pamäť (TTL)',
  'Zend OPcache Not Installed' => 'Zend OPcache nie je nainštalovaný',
  'Markup Cache' => 'Vyrovnávacia pamäť značiek',
  'General Cache' => 'Všeobecná vyrovnávacia pamäť',
  'Unknown cache format.' => 'Neznámy formát vyrovnávacej pamäte.',
  'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => 'Dva objekty (tried „%s“ a „%s“) generujú rovnakú hodnotu mapy („%s“). Každý objekt musí generovať jedinečnú hodnotu mapy.',
  'OPcache Not Configured for Production' => 'OPcache nie je nakonfigurovaný na produkciu',
  'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.' => 'Rozšírenie PHP „Zend OPcache“ je nainštalované, ale nie je zapnuté vo vašej konfigurácii PHP. Jeho zapnutie výrazne zlepší výkon. Rozšírenie zapnete úpravou nastavenia „%s“.',
  'Installing the "Zend OPcache" extension will dramatically improve performance.' => 'Inštalácia rozšírenia „Zend OPcache“ výrazne zlepší výkon.',
  'Only strings may be written to the DB cache!' => 'Do vyrovnávacej pamäte v databáze možno zapisovať iba reťazce!',
  'Purge all caches.' => 'Vyprázdniť všetky vyrovnávacie pamäte.',
  'Specify either "--all" or "--caches", not both.' => 'Zadajte buď „--all“, alebo „--caches“, nie oboje.',
  'PHP Extension "APCu" Not Installed' => 'Rozšírenie PHP „APCu“ nie je nainštalované',
  'Zend OPcache Not Enabled' => 'Zend OPcache nie je zapnutý',
  'Drop data from readthrough caches.' => 'Zahodiť údaje z prechodných vyrovnávacích pamätí.',
  'Cache purger "%s" is not recognized. Available caches are: %s.' => 'Vyprázdňovač vyrovnávacej pamäte „%s“ nie je rozpoznaný. Dostupné vyrovnávacie pamäte sú: %s.',
  'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, this software must rely on a very inefficient disk-based cache.' => 'Inštalácia rozšírenia PHP „APCu“ zlepší výkon. Toto rozšírenie sa dôrazne odporúča. Bez neho sa tento softvér musí spoliehať na veľmi neefektívnu vyrovnávaciu pamäť na disku.',
  'OPcache Disabled' => 'OPcache je vypnutý',
  'APCu Extension Not Enabled' => 'Rozšírenie APCu nie je zapnuté',
  'OPcache Config' => 'Konfigurácia OPcache',
  'OPcache is not configured ideally for production.' => 'OPcache nie je nakonfigurovaný ideálne na produkciu.',
  'OPcache' => 'OPcache',
  'Serializing cache can not write objects (for key "%s")!' => 'Serializujúca vyrovnávacia pamäť nemôže zapisovať objekty (pre kľúč „%s“)!',
  'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => 'Pri vývoji by mal byť OPcache nastavený tak, aby vždy znovu načítal kód a po zmenách nebolo treba nič reštartovať. Dosiahnete to zapnutím „%s“ a nastavením „%s“ na 0.',
  'Purging "%s" cache...' => 'Vyprázdňuje sa vyrovnávacia pamäť „%s“...',
  'Purge a specific set of caches.' => 'Vyprázdniť konkrétnu množinu vyrovnávacích pamätí.',
  'When using "--caches", you must select at least one valid cache to purge.' => 'Pri použití „--caches“ musíte na vyprázdnenie vybrať aspoň jednu platnú vyrovnávaciu pamäť.',
  'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => 'V produkcii by mal byť OPcache nastavený tak, aby kód nikdy nepreveroval. Mierne to zlepší výkon. Dosiahnete to vypnutím „%s“ vo vašej konfigurácii PHP.',
  'OPcache Not Configured for Development' => 'OPcache nie je nakonfigurovaný na vývoj',
  'Failed to inflate data!' => 'Nepodarilo sa dekomprimovať údaje!',
  'Zend OPcache' => 'Zend OPcache',
  'Enabling OPcache will dramatically improve performance.' => 'Zapnutie OPcache výrazne zlepší výkon.',
  'Enabling APCu will improve performance.' => 'Zapnutie APCu zlepší výkon.',
);
  }

}
