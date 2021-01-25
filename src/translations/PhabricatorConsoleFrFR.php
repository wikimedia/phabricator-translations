<?php

final class PhabricatorConsoleFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Listener Class' => 'Classe d’écouteur',
      'Profiling was not enabled for this page. Use the button above to enable it.' => 'Le profilage n’a pas été activé pour cette page. Utiliser le bouton ci-dessus pour l’activer.',
      'Internal ID' => 'ID interne',
      'Error Log (%d)' => 'Journal des erreurs (%s)',
      'Debugging console for real-time notifications.' => 'Console de débogage pour les notifications en temps réel.',
      'Provides detailed PHP profiling information through XHProf.' => 'Fournit des informations de profilage PHP détaillées via XHProf.',
      'Analyze Query Plans' => 'Analyser les plans de requêtage',
      'Realtime' => 'Temps réel',
      'Site' => 'Site',
      '+%s ms' => '+%s ms',
      'Calls to External Services' => 'Appels aux services externes',
      'Machine' => 'Machine',
      'Reconnect' => 'Reconnecter',
      'Information about Phabricator events and event listeners.' => 'Information à propos des événements de Phabricator et des écouteurs d’événements.',
      'No errors.' => 'Aucune erreur.',
      'Startup' => 'Démarrage',
      'Information about %s and %s.' => 'Information sur %s et %s.',
      'Timing information about the startup sequence.' => 'Informations temporelles relatives à la séquence de démarrage.',
      'Event Log' => 'Journal d’événements',
      'Profile Page' => 'Page de profilage',
      'Whole Table' => 'Table complète',
      'Repaint' => 'Repeindre',
      'Small Table Scan' => 'Scrutation de petite table',
      'Profile Permalink' => 'Lien permanent de profilage',
      'Error Log' => 'Journal des erreurs',
      'Controller' => 'Contrôleur',
      'TABLE SCAN!' => 'SCRUTATION DE TABLE !',
      'STOPPED' => 'ARRÊTÉ',
      'Information about services.' => 'Information sur les services.',
      'Unknown event: %s' => 'Événement inconnu : %s',
      'Shows errors and warnings.' => 'Affiche les erreurs et les avertissements.',
      'XHProf Profiler' => 'Profileur XHProf',
      'The "xhprof" PHP extension is not available. Install xhprof to enable the XHProf console plugin. You can find instructions in the %s.' => 'L’extension « xhprof » de PHP n’est pas disponible. Installer xhprof pour activer le module de la console XHProf. Vous pouvez trouver des instructions dans le %s.',
      'Replay' => 'Rejouer',
      'Can\'t Analyze' => 'Analyse impossible',
      'Events' => 'Événements',
      'Page Weight' => 'Poids de la page',
      'Hostname' => 'Nom d’hôte',
      'Registered Event Listeners' => 'Écouteur d’événements enregistrés',
      'No Tables' => 'Aucune table',
    );
  }

}
