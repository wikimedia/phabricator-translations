<?php

final class PhabricatorConsoleNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Listener Class' => 'Listener-klasse',
  'Profiling was not enabled for this page. Use the button above to enable it.' => 'Profilering is niet ingeschakeld voor deze pagina. Gebruik de knop hierboven om deze in te schakelen.',
  'Internal ID' => 'Interne ID',
  'Error Log (%d)' => 'Foutlogboek (%d)',
  'Debugging console for real-time notifications.' => 'Foutopsporingsconsole voor realtime meldingen.',
  'Provides detailed PHP profiling information through XHProf.' => 'Biedt gedetailleerde PHP-profileringsinformatie via XHProf.',
  'Analyze Query Plans' => 'Analyseer queryplannen',
  'Realtime' => 'Realtime',
  'Site' => 'Site',
  '+%s ms' => '+%s ms',
  'Calls to External Services' => 'Aanroepen van externe diensten',
  'Machine' => 'Machine',
  'Reconnect' => 'Opnieuw verbinden',
  'No errors.' => 'Geen fouten.',
  'Startup' => 'Opstarten',
  'Information about %s and %s.' => 'Informatie over %s en %s.',
  'Timing information about the startup sequence.' => 'Tijdsinformatie over de opstartvolgorde.',
  'Event Log' => 'Gebeurtenislogboek',
  'Profile Page' => 'Profielpagina',
  'Whole Table' => 'Complete tabel',
  'Repaint' => 'Opnieuw renderen',
  'Small Table Scan' => 'Kleine tabelscan',
  'Installation Guide' => 'Installatiegids',
  'Profile Permalink' => 'Permanente koppeling naar profiel',
  'Error Log' => 'Foutenlogboek',
  'Controller' => 'Controller',
  'TABLE SCAN!' => 'TABELSCAN!',
  'STOPPED' => 'GESTOPT',
  'Information about services.' => 'Informatie over diensten.',
  'Unknown event: %s' => 'Onbekende gebeurtenis: %s',
  'Shows errors and warnings.' => 'Geeft fouten en waarschuwingen weer.',
  'XHProf Profiler' => 'XHProf Profiler',
  'The "xhprof" PHP extension is not available. Install xhprof to enable the XHProf console plugin. You can find instructions in the %s.' => 'De PHP-uitbreiding "xhprof" is niet beschikbaar. Installeer xhprof om de XHProf-consoleplug-in in te schakelen. Instructies hiervoor vindt u in de %s.',
  'Replay' => 'Opnieuw afspelen',
  'Can\'t Analyze' => 'Kan niet analyseren',
  'Events' => 'Gebeurtenissen',
  'Information about events and event listeners.' => 'Informatie over gebeurtenissen en gebeurtenis-listeners.',
  'Page Weight' => 'Paginagewicht',
  'Hostname' => 'Hostnaam',
  'Registered Event Listeners' => 'Geregistreerde gebeurtenis-listeners',
  'No Tables' => 'Geen tabellen',
);
  }

}
