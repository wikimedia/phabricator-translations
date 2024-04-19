<?php

final class PhabricatorPhrictionDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Last Edited' => 'Zuletzt bearbeitet',
      'DOCUMENT CONTENT' => 'Dokumenten Inhalt',
      'Edit Notes' => 'Notizen zur Veränderung',
      'To edit a wiki document, you must also be able to view all of its ancestors.' => 'Um ein Wiki-Dokument zu bearbeiten, musst du imstande zu sein, alle seiner Vorfahren zu sehen.',
      'Document Hierarchy' => 'Dokumenten Hirarchie',
      'Current Path' => 'Aktueller Pfad',
      'Content' => 'Inhalt',
      'Last Author' => 'Letzter Autor',
      '%s published a new version of %s.' => '%s veröffentlichte eine neue Version von %s.',
      'Printable Page' => 'Druckbare Seite',
      'Delete Document?' => 'Dokument löschen',
      '%s edited the content of %s.' => '%s bearbeitete den Inhalt von %s.',
      '%s edited the content of this document.' => '%s berarbeitete den Inhalt dieses Dokuments.',
      '%s published a new version of this document.' => '%s veröffentlichte eine neue Version dieses Dokuments.',
      'New Document' => 'Neues Dokument',
      'New Path' => 'Neuer Pfad',
    );
  }

}
