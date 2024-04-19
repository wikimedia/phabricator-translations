<?php

final class PhabricatorDaemonScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Clock' => 'Rulòggiu',
      'All Daemons' => 'Tutti li dèmuni',
      'Daemon %d %s [%s] %s' => 'Dèmuni %s %s [%s] %s',
      'Active Daemons' => 'Dèmuni attivi',
      'Daemon' => 'Dèmuni',
      'Daemon Logs' => 'Riggistri di dèmuni',
      'Daemon Class' => 'Classi di dèmuni',
      'Unknown status "%s"!' => 'Statu "%s" scanusciutu!',
      'Argv' => 'Argv',
      'Dead' => 'Mortu',
      'PPID' => 'PPID',
      '%s s' => '%s s',
      'Last' => 'Ùrtimu',
      'NO DAEMONS' => 'NUDDU DÈMUNI',
      'PID' => 'PID',
      'Daemon Log' => 'Riggistru di dèmuni',
      '%s ago (%s)' => '%s fa (%s)',
      'Daemon %s' => 'Dèmuni %s',
      'PID \'%s\' is not a valid PID.' => 'Lu PID \'%s\' nun è nu PID vàlidu.',
      'Daemon Details' => 'Dittagghî dû dèmuni',
    );
  }

}
