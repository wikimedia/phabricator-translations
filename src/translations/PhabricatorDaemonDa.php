<?php

final class PhabricatorDaemonDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Shutting Down' => 'Lukker ned',
      'Running as' => 'Kører som',
      'Not Completed' => 'Ikke afsluttet',
      'Seen' => 'Set',
      'Unknown status "%s"!' => 'Ukendt status "%s"!',
      'Next In Queue' => 'Næste i køen',
      'Lock' => 'Lås',
      'Dead' => 'Død',
      'Last' => 'Sidste',
      'PID' => 'PID',
      'PID \'%s\' is not a valid PID.' => 'PID \'%s\' er ikke et gyldigt PID.',
      'Started' => 'Påbegyndt',
    );
  }

}
