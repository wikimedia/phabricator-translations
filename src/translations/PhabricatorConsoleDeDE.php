<?php

final class PhabricatorConsoleDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Event Type' => 'Eventtyp',
      'Internal ID' => 'Interne ID',
      'Site' => 'Seite',
      '+%s ms' => '+%s ms',
      'Reconnect' => 'Erneut verbinden',
      'No errors.' => 'Keine Fehler.',
      'Profile Page' => 'Profilseite',
      'STOPPED' => 'GESTOPPT',
      'Unknown event: %s' => 'Unbekanntes Ereignis: %s',
      'Can\'t Analyze' => 'Nicht analysierbar',
      'Events' => 'Ereignisse',
      'Hostname' => 'Hostname',
    );
  }

}
