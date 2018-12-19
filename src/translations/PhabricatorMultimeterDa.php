<?php

final class PhabricatorMultimeterDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Subprocesses' => 'Underprocesser',
      '(All)' => '(Alle)',
      'By ID' => 'Efter ID',
      '%s Unit(s)' => '%s enhed(er)',
      'By Context' => 'Efter kontekst',
      'By Label' => 'Efter etiket',
      'Multimeter' => 'Multimeter',
      'Static Resource' => 'Statisk ressource',
    );
  }

}
