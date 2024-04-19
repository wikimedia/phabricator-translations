<?php

final class PhabricatorDaemonFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Archived Tasks' => 'Arkistoidut tehtävät',
      'All Daemons' => 'Kaikki taustaohjelmat',
      'Active Daemons' => 'Aktiiviset taustaohjelmat',
      'Manage Daemons' => 'Hallitse Phabricator-taustaohjelmia',
      'Daemons are already running:' => 'Taustaohjelmat ovat jo käynnissä:',
      'NO DAEMONS' => 'EI TAUSTAOHJELMIA',
    );
  }

}
