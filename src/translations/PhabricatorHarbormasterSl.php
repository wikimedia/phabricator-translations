<?php

final class PhabricatorHarbormasterSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Artifact "%s" not found!' => 'Artefakt »%s« ni bil najden!',
      'or' => 'ali',
      'Interacting with External Build Systems' => 'Interakcija z znunanjimi gradilniki',
      'Follow Log' => 'Spremljaj dnevnik',
      '**rebuild-log** --id __id__ [__options__]
    **rebuild-log** --all' => '**rebuild-log** --id __id__ [__options__]
    **rebuild-log** --all',
      'INVALID' => 'NEVELJAVNO',
      'Already Restarting' => 'Že v vnovičnem zagonu',
      'Missing Dependency' => 'Manjkajoča odvisnost',
      'Build Log' => 'Dnevnik gradnje',
      'Invalid build ID "%s".' => 'Neveljaven ID konstrukcije »%s«.',
      'Select all active builds.' => 'Izberi vse aktivne konstrukcije.',
      'Throw Exception' => 'Izvrzi izjemo',
      'Download Log' => 'Prenesi dnevnik',
      'Choose an archival mode with --mode.' => 'Izberite način arhiviranja z --mode.',
      'ERROR:' => 'NAPAKA:',
      'Throw an exception.' => 'Izvrzi izjemo.',
      'External Link' => 'Zunanja povezava',
    );
  }

}
