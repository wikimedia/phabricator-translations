<?php

final class PhabricatorCacheNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  '%s is not available; unable to read deflated data!' => '%s is niet beschikbaar; het is niet mogelijk om de gecomprimieerde gegevens te lezen!',
  'APCu' => 'APCu',
  'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => 'Selecteer de caches die u wilt wissen met "--all" of "--caches". Beschikbare caches zijn: %s.',
  'APCu Disabled' => 'APCu uitgeschakeld',
  'The APCu PHP extension is installed, but not enabled in your PHP configuration. Enabling this extension will improve performance. Edit the "%s" setting to enable this extension.' => 'De APCu PHP-uitbreiding is geïnstalleerd, maar niet ingeschakeld in uw PHP-configuratie. Het inschakelen van deze uitbreiding verbetert de prestaties. Bewerk de instelling "%s" om deze uitbreiding in te schakelen.',
  'OPcache is not configured properly for development.' => 'OPcache is niet correct geconfigureerd voor ontwikkeldoeleinden.',
  'General Cache (TTL)' => 'Algemene cache (TTL)',
  'Zend OPcache Not Installed' => 'Zend OPcache niet geïnstalleerd',
  'Markup Cache' => 'Opmaak-cache',
  'General Cache' => 'Algemene cache',
  'Unknown cache format.' => 'Onbekende cacheopmaak.',
  'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => 'Twee objecten (van de klassen "%s" en "%s") maken dezelfde mapwaarde ("%s"). Elk object moet een unieke mapwaarde maken.',
  'OPcache Not Configured for Production' => 'OPcache is niet geconfigureerd voor productie.',
  'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.' => 'De PHP-uitbreiding "Zend OPcache" is geïnstalleerd, maar niet ingeschakeld in uw PHP-configuratie. Door deze in te schakelen, verbetert de prestatie aanzienlijk. Bewerk de instelling "%s" om de uitbreiding in te schakelen.',
  'Installing the "Zend OPcache" extension will dramatically improve performance.' => 'Het installeren van de "Zend OPcache"-uitbreiding verbetert de prestaties aanzienlijk.',
  'Only strings may be written to the DB cache!' => 'Alleen tekenreeksen mogen naar de databasecache worden geschreven!',
  'Purge all caches.' => 'Alle caches legen.',
  'Specify either "--all" or "--caches", not both.' => 'Geef ofwel "--all" ofwel "--caches" op, niet beide.',
  'PHP Extension "APCu" Not Installed' => 'PHP-uitbreiding "APCu" niet geïnstalleerd',
  'Zend OPcache Not Enabled' => 'Zend OPcache niet ingeschakeld',
  'Drop data from readthrough caches.' => 'Gegevens verwijderen uit de readthrough-caches.',
  'Cache purger "%s" is not recognized. Available caches are: %s.' => 'Cache-opschoner "%s" wordt niet herkend. Beschikbare caches zijn: %s.',
  'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, this software must rely on a very inefficient disk-based cache.' => 'Het installeren van de PHP-uitbreiding "APCu" verbetert de prestaties. Deze uitbreiding wordt sterk aanbevolen. Zonder deze uitbreiding is de software afhankelijk van een zeer inefficiënte, op schijf gebaseerde cache.',
  'OPcache Disabled' => 'OPcache uitgeschakeld',
  'APCu Extension Not Enabled' => 'APCu-uitbreiding niet ingeschakeld',
  'OPcache Config' => 'OPcache-configuratie',
  'OPcache is not configured ideally for production.' => 'OPcache is niet optimaal geconfigureerd voor productie.',
  'OPcache' => 'OPcache',
  'Serializing cache can not write objects (for key "%s")!' => 'De serialiserende cache kan geen objecten schrijven (voor sleutel "%s")!',
  'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => 'Tijdens de ontwikkeling moet OPcache zo geconfigureerd worden dat de code altijd opnieuw wordt geladen, zodat er na elke wijziging niets opnieuw hoeft te worden opgestart. Schakel hiervoor "%s" in en stel "%s" in op 0.',
  'Purging "%s" cache...' => 'Cache "%s" wordt gewist...',
  'Purge a specific set of caches.' => 'Een specifieke set caches wissen.',
  'When using "--caches", you must select at least one valid cache to purge.' => 'Bij gebruik van "--caches" moet u ten minste één cache selecteren om te wissen.',
  'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => 'In een productieomgeving moet OPcache zo geconfigureerd worden dat code nooit opnieuw gevalideerd wordt. Dit verbetert de prestaties enigszins. Om dit te doen, schakelt u "%s" uit in uw PHP-configuratie.',
  'OPcache Not Configured for Development' => 'OPcache is niet geconfigureerd voor ontwikkeling',
  'Failed to inflate data!' => 'Gegevens laden mislukt!',
  'Zend OPcache' => 'Zend OPcache',
  'Enabling OPcache will dramatically improve performance.' => 'Het inschakelen van OPcache verbetert de prestaties aanzienlijk.',
  'Enabling APCu will improve performance.' => 'Het inschakelen van APCu verbetert de prestaties.',
);
  }

}
