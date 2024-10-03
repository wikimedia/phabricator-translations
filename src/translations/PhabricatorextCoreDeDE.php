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
      'Unresolved code review comments: %d' => 'Ungelöste Code-Review-Kommentare: %s',
      'Show related patches' => 'Verwandte Patches anzeigen',
      'You must provide either a username or userPHID' => 'Du musst entweder einen Benutzernamen oder eine userPHID angeben',
      'Unknown policies: %s' => 'Unbekannte Richtlinien: %s',
      'Change type to "%s."' => 'Ändere den Typ auf "%s."',
      'Invalid' => 'Ungültig',
      'Blocked on Code Review - Needs Changes' => 'Bei Code-Review blockiert – Benötigt Änderungen',
      'View Change in Gerrit' => 'Änderung in Gerrit anzeigen',
      'Link to Open Tasks' => 'Link zu offenen Aufgaben',
      'MediaWiki Instance Name' => 'MediaWiki Instance Name',
      'Limit the number of transaction rows to process. Default: 10000' => 'Begrenze die Anzahl der zu verarbeitenden Transaktionszeilen. Standart: 10000',
      'Code Review Started' => 'Code-Review begonnen',
      'How this works' => 'Wie das funktioniert',
      'Use [[%s|this form]] to create one.' => 'Verwende [[%s|dieses Formular]], um einen zu erzeugen.',
      'MediaWiki User' => 'MediaWiki-Benutzer',
      'Open Tasks' => 'Offene Aufgaben',
      'Global Accounts' => 'Globale Benutzerkonten',
      'You cannot roll back the activity of a privileged user.' => 'Du kannst die Aktivität eines privilegierten Benutzers nicht zurücksetzen.',
      'The full URL to your MediaWiki install, up to but not including "index.php"' => 'Die vollständige URL zu deiner MediaWiki-Installation, bis zu aber nicht einschließlich "index.php"',
      'Expert Mode' => 'Expertenmodus',
      'Unknown or missing mediawiki names: %s' => 'MediaWiki-Name fehlt oder unbekannt: %s',
      'Required' => 'Erforderlich',
      'Number of open tasks over time' => 'Anzahl der offenen Aufgaben im Zeitverlauf',
      'Comments' => 'Kommentare',
      'Change type to "%s"' => 'Ändere den Typ auf "%s"',
    );
  }

}
