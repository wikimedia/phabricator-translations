<?php

final class PhabricatorDaemonSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'This daemon has been lost or exited uncleanly, and is presumed dead.' => 'Ta demon je bil izgubljen ali nečisto zapuščen in se domneva, da je mrtev.',
      'Archived Tasks' => 'Arhivirana opravila',
      'There are no upcoming event triggers.' => 'Ni sprožilcev prihajajočih dogodkov.',
      'Task Does Not Exist' => 'Opravilo ne obstaja',
      'There are no running daemons.' => 'Ni delujočih demonov.',
      'There are no running daemon processes.' => 'Ni delujočih demonskih procesov.',
      'Manage Bulk Jobs' => 'Upravljanje množičnih opravil',
      'Dead' => 'Mrtev',
      'Last' => 'Zadnji',
      'Bulk Jobs' => 'Množična opravila',
      'Confirm Bulk Job' => 'Potrdite množično opravilo',
      'Daemon Log' => 'Dnevnik demona',
      'Task %d Missing' => 'Manjka opravilo %s',
    );
  }

}
