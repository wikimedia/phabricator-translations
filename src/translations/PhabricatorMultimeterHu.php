<?php

final class PhabricatorMultimeterHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Példák',
      'Subprocesses' => 'Alfolyamatok',
      '(All)' => '(mind)',
      'Samples (%s - %s)' => 'példák (%s - %s)',
      'By ID' => 'ID szerint',
      'Cost' => 'Költség',
      '%s Unit(s)' => '%s egység(ek)',
      'By Request' => 'kérés szerint',
      'By Host' => 'kiszolgáló szerint',
      'Trying to unpause an active multimeter!' => 'Megpróbált újraaktiválni egy aktív multimétert!',
      'Web Request' => 'Webes kérelem',
      'By Context' => 'Kontextus szerint',
      'By Label' => 'címke szerint',
      'Multimeter' => 'Multiméter',
      'Viewer' => 'Nézet',
      'Static Resource' => 'Statikus erőforrás',
      'Multimeter Events' => 'Multiméter események',
      'By Viewer' => 'Nézet szerint',
    );
  }

}
