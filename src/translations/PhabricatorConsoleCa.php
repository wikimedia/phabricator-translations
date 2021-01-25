<?php

final class PhabricatorConsoleCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Listener Class' => 'Classe d\'Oient',
      'Profiling was not enabled for this page. Use the button above to enable it.' => 'No s\'ha habilitat el perfilat per a aquesta pàgina.  Utilitzeu el botó de dalt per activar-lo.',
      'Internal ID' => 'ID intern',
      'Error Log (%d)' => 'Registre d\'errors (%s)',
      'Debugging console for real-time notifications.' => 'S\'està depurant la consola per a notificacions en temps real.',
      'Provides detailed PHP profiling information through XHProf.' => 'Proporciona informació detallada de perfils de PHP a través de XHProf.',
      'Analyze Query Plans' => 'Analitza els Plans de Consulta',
      'Realtime' => 'Temps real',
      'Site' => 'Lloc',
      '+%s ms' => '+%s ms',
      'Calls to External Services' => 'Trucades a Serveis Externs',
      'Machine' => 'Màquina',
      'Reconnect' => 'Reconnecta',
      'Information about Phabricator events and event listeners.' => 'Informació sobre esdeveniments Phabricator i oients d\'esdeveniments.',
      'No errors.' => 'Cap error.',
      'Startup' => 'Posada en marxa',
      'Information about %s and %s.' => 'Informació sobre %s i %s.',
      'Timing information about the startup sequence.' => 'Informació de temps sobre la seqüència d\'inici.',
      'Event Log' => 'Registre d\'Esdeveniments',
      'Profile Page' => 'Pàgina de Perfil',
      'Whole Table' => 'Taula Sencera',
      'Repaint' => 'Torna a pintar',
      'Small Table Scan' => 'Exploració de Taules Petites',
      'Profile Permalink' => 'Perfil d\'Enllaç Permanent',
      'Error Log' => 'Registre d\'Errors',
      'Controller' => 'Controlador',
      'TABLE SCAN!' => 'ESCÀNER DE TAULA!',
      'STOPPED' => 'PARAT',
      'Information about services.' => 'Informació sobre els serveis.',
      'Unknown event: %s' => 'Esdeveniment desconegut: %s',
      'Shows errors and warnings.' => 'Mostra errors i avisos.',
      'XHProf Profiler' => 'Perfil XHProf',
      'The "xhprof" PHP extension is not available. Install xhprof to enable the XHProf console plugin. You can find instructions in the %s.' => 'L\'extensió PHP «xhprof» no està disponible.  Instal·leu xhprof per activar el connector de consola XHProf.  Podeu trobar instruccions a %s.',
      'Replay' => 'Reproducció',
      'Can\'t Analyze' => 'No es Pot Analitzar',
      'Events' => 'Esdeveniments',
      'Page Weight' => 'Pes de la pàgina',
      'Hostname' => 'Nom de l\'amfitrió',
      'Registered Event Listeners' => 'Oients d\'esdeveniments registrats',
      'No Tables' => 'Cap Taula',
    );
  }

}
