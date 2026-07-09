<?php

final class PhabricatorMultimeterNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Samples' => 'Monsters',
  'Subprocesses' => 'Subprocessen',
  '(All)' => '(alle)',
  'Samples (%s - %s)' => 'Monsters (%s - %s)',
  'By ID' => 'Op ID',
  'Epoch' => 'Tijdstip',
  'Performance Sampler' => 'Prestatiemonster',
  'Rate' => 'Snelheid',
  '%s Req' => array(
    '%s verzoek',
    '%s verzoeken',
  ),
  'Multimeter User Guide' => 'Gebruikershandleiding voor de multimeter',
  '%s Unit(s)' => array(
    '%s eenheid',
    '%s eenheden',
  ),
  'By Request' => 'Op verzoek',
  'By Host' => 'Op host',
  'Trying to unpause an active multimeter!' => 'U probeert een actieve multimeter te hervatten!',
  'Web Request' => 'Webverzoek',
  'By Context' => 'Op context',
  'Avg' => 'Gem.',
  'By Label' => 'Op label',
  'Multimeter' => 'Multimeter',
  'Viewer' => 'Kijker',
  '%s Event(s)' => array(
    '%s gebeurtenis',
    '%s gebeurtenissen',
  ),
  'Static Resource' => 'Statische bron',
  'Multimeter Events' => 'Multimeter-gebeurtenissen',
  'By Viewer' => 'Op kijker',
);
  }

}
