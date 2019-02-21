<?php

final class PhabricatorConsoleDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Internal ID' => 'Internt ID',
      'Realtime' => 'Realtid',
      '+%s ms' => '+%s ms',
      'Machine' => 'Maskine',
      'Reconnect' => 'Forbind igen',
      'No errors.' => 'Ingen fejl.',
      'Startup' => 'Opstart',
      'Information about %s and %s.' => 'Oplysninger om %s og %s.',
      'Profile Page' => 'Profilside',
      'Whole Table' => 'Hel tabel',
      'Unknown event: %s' => 'Ukendt begivenhed: %s',
      'Shows errors and warnings.' => 'Viser fejl og advarsler.',
      'Can\'t Analyze' => 'Kan ikke analysere',
      'Events' => 'Begivenheder',
      'No Tables' => 'Ingen tabeller',
    );
  }

}
