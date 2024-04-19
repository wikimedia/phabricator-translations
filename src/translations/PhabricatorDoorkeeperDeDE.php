<?php

final class PhabricatorDoorkeeperDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'JIRA %s %s' => 'JIRA %s %s',
      'No Asana provider configured.' => 'Kein Asana-Provider konfiguriert.',
      'Asana integration options.' => 'Optionen für die Integration von Asana.',
      'Imported From' => 'Importiert von',
      'No JIRA provider configured.' => 'Kein JIRA-Provider konfiguriert.',
      '%s could not be loaded.' => '%s konnte nicht geladen werden.',
      'External Object' => 'Externes Objekt',
      'JIRA %s' => 'JIRA %s',
      'Integration with Asana' => 'Integration mit Asana',
      'Asana: %s' => 'Asana: %s',
    );
  }

}
