<?php

final class PhabricatorextCoreDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Standard Phabricator.' => 'Standard-Phabricator.',
      'Merged' => 'Zusammengeführt',
      'Gerrit Projects' => 'Gerrit-Projekte',
      'Unresolved code review comments: %d' => 'Ungelöste Code-Review-Kommentare: %s',
      'Show related patches' => 'Verwandte Patches anzeigen',
      'You must provide either a username or userPHID' => 'Du musst entweder einen Benutzernamen oder eine userPHID angeben',
      'Unknown policies: %s' => 'Unbekannte Richtlinien: %s',
      'The requested project does not exist' => 'Das angeforderte Projekt ist nicht vorhanden.',
      'Change type to "%s."' => 'Ändere den Typ auf "%s."',
      'Consumer Key is required' => 'Kundenschlüssel erforderlich',
      'Invalid' => 'Ungültig',
      'Blocked on Code Review - Needs Changes' => 'Bei Code-Review blockiert',
      'View Change in Gerrit' => 'Ansichtenwechsel in Gerrit',
      'Link to Open Tasks' => 'Link zu offenen Aufgaben',
      'MediaWiki Instance Name' => 'MediaWiki Instance Name',
      'Limit the number of transaction rows to process. Default: 10000' => 'Begrenze die Anzahl der zu verarbeitenden Transaktionszeilen. Standart: 10000',
      'Enable this to use the experimental ElasticSearch fulltext backend.' => 'Aktiviere dies, um das experimentelle ElasticSearch-Volltext-Backend zu verwenden.',
      'Code Review Started' => 'Code-Review begonnen',
      'How this works' => 'Wie das funktioniert',
      'Use [[%s|this form]] to create one.' => 'Verwende [[%s|this form]], um eines zu erzeugen.',
      'MediaWiki User' => 'MediaWiki-Benutzer',
      'Open Tasks' => 'Offene Aufgaben',
      'OAuth error: this account has been blocked in MediaWiki.' => 'OAuth-Fehler: Dieses Konto wurde in MediaWiki gesperrt.',
      'Global Accounts' => 'Globales Benutzerkonto:',
      'Patch without arc' => 'Patch ohne arc',
      'You cannot roll back the activity of a privileged user.' => 'Du kannst die Aktivität eines privilegierten Benutzers nicht zurücksetzen.',
      'The full URL to your MediaWiki install, up to but not including "index.php"' => 'Die vollständige URL zu deiner MediaWiki-Installation, bis zu aber nicht einschließlich "index.php"',
      'Download Archive' => 'Download-Archiv',
      'Expert Mode' => 'Expertenmodus',
      'Unknown or missing mediawiki names: %s' => 'MediaWiki-Name fehlt oder unbekannt: %s',
      'Required' => 'Erforderlich',
      'Number of open tasks over time' => 'Anzahl der überfälligen Aufgaben',
      'Comments' => 'Kommentare',
      'Change type to "%s"' => 'Ändere den Typ auf "%s"',
    );
  }

}
