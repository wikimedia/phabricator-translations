<?php

final class PhabricatorConpherenceSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      '%s renamed this room from %s to %s.' => '%s bytte namn på detta rum från %s till %s.',
      'Log In to Participate' => 'Logga in för att delta',
      'Type a room title...' => 'Skriv en rumstitel...',
      '%s created this room.' => '%s skapade detta rum.',
      'Log in to join this room and participate.' => 'Logga in för att ansluta till detta rum och delta.',
      '%s added %d participant(s): %s.' => '%s lade till %s deltagare: %s.',
      'Welcome to Conpherence' => 'Välkommen till Conpherence',
    );
  }

}
