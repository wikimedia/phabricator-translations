<?php

final class PhabricatorDoorkeeperDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'JIRA %s %s' => 'JIRA %s %s',
      'Imported From' => 'Importeret fra',
      '%s could not be loaded.' => '%s kunne ikke indlæses.',
      'External Object' => 'Eksternt objek',
      'GitHub User %s' => 'GitHub-bruger %s',
      'This software is running in silent mode.' => 'Phabricator kører i stille tilstand.',
    );
  }

}
