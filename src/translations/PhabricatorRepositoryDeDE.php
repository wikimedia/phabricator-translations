<?php

final class PhabricatorRepositoryDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'No Commits' => 'Keine Commits',
      '%s ♻ %s' => '%s ♻ %s',
      'Query took %s ms.' => 'Query dauerte %s ms.',
      'Short Names' => 'Kurze Namen',
      '%s enabled this URI.' => '%s aktivierte diese URI.',
      'Some of the selected automation blueprints are invalid or restricted: %s.' => 'Einige der ausgewählten Automatisierungspläne sind ungültig oder beschränkt: %s.',
      'Destroyed transaction "%s" on object "%s".' => 'Zerstörte Überweisung "%s" auf Objekt "%s".',
      '(%s) %s' => '(%s) %s',
      'Unknown commit "%s"!' => 'Unbekannter Commit "%s"!',
      '<%s: %s>' => '<%s: %s>',
      'Enormous' => 'Umfangreich',
      'No I/O' => 'Kein I/O',
      'Unknown VCS "%s"!' => 'Unbekanntes VCS "%s"!',
      'Flags "--all-identities" and "--raw" are not compatible.' => 'Die Flags "--all-identities" und "--raw" sind nicht kompatibel.',
      'Create Identity' => 'Erstelle Identität',
      'Edit Identity: %s' => 'Bearbeite Identität: %s',
      'Rewrite' => 'Umschreiben',
      'Append' => 'Anhängen',
      'New Repository' => 'Neues Repository',
      'Flag Names' => 'Flaggennamen',
      'Most Recent Commit' => 'Neuestem Commit',
      'Blocked By' => 'Blockiert von',
      'Rebuild identities in a repository.' => 'Identitäten in einem Repository wiederherstellen.',
      'SSH' => 'SSH',
      '%s enabled protection against enormous changes.' => '%s aktivierter Schutz gegen umfangreiche Veränderung.',
      'All Repositories' => 'Alle Repositories',
      'Rejected: Dangerous' => 'Abgelehnt: Gefährlich',
      'Dangerous' => 'Gefährlich',
      'Do not prompt for confirmation.' => 'Frage nicht nach einer Bestätigung.',
      'HTTP' => 'HTTP',
      'HTTPS' => 'HTTPS',
    );
  }

}
