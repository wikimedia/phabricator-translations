<?php

final class PhabricatorDiffusionDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Host and Browse Repositories' => 'Hoste und entdecke Repositories',
      'Repository Active' => 'Repository aktiv',
      'All Identities' => 'Alle Identitäten',
      'This repository does not have any commits yet.' => 'Diese Repository hat noch keine Commits.',
      'Delete Repository' => 'Repository löschen',
      'Editable By' => 'Bearbeitbar für',
      'Blocked: %s' => 'Blockiert: %s',
      'Deactivate Repository' => 'Repository deaktivieren',
      'Update Now' => 'Jetzt aktualisieren',
      'Task Daemon Not Running' => 'Aufgaben-Dienst läuft nicht',
      'Empty Repository' => 'Leeres Repository',
      'Subversion does not support searching for ancestors of a particular ref. This operation is not meaningful in Subversion.' => 'Subversion unterstützt die Suche von Vorfahren einer bestimmte Referenz nicht. Diese Handlung ist nicht Sinnvoll in Subversion.',
      'No Identities found.' => 'Keine Identitäten gefunden.',
      'No Working Copy Yet' => 'Noch keine funktionierende Kopie',
      'Edit Basic Information' => 'Grundlegende Informationen bearbeiten',
      'Clone' => 'Klonen',
      'Update Frequency' => 'Update-Frequenz',
      'Visible To' => 'Sichtbar für',
    );
  }

}
