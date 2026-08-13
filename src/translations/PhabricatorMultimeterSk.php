<?php

final class PhabricatorMultimeterSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Samples' => 'Vzorky',
  'Subprocesses' => 'Podprocesy',
  '(All)' => '(Všetko)',
  'Samples (%s - %s)' => 'Vzorky (%s – %s)',
  'By ID' => 'Podľa ID',
  'Epoch' => 'Epocha',
  'Performance Sampler' => 'Vzorkovač výkonu',
  'Rate' => 'Frekvencia',
  '%s Req' => '%s pož.',
  'Multimeter User Guide' => 'Používateľská príručka Multimetra',
  '%s Unit(s)' => array(
    '%s jednotka',
    '%s jednotky',
    '%s jednotiek',
  ),
  'By Request' => 'Podľa požiadavky',
  'By Host' => 'Podľa hostiteľa',
  'Trying to unpause an active multimeter!' => 'Pokus o obnovenie už aktívneho multimetra!',
  'Web Request' => 'Webová požiadavka',
  'By Context' => 'Podľa kontextu',
  'Avg' => 'Priem.',
  'By Label' => 'Podľa označenia',
  'Multimeter' => 'Multimeter',
  'Viewer' => 'Zobrazujúci používateľ',
  '%s Event(s)' => array(
    '%s udalosť',
    '%s udalosti',
    '%s udalostí',
  ),
  'Static Resource' => 'Statický zdroj',
  'Multimeter Events' => 'Udalosti Multimetra',
  'By Viewer' => 'Podľa zobrazujúceho používateľa',
);
  }

}
