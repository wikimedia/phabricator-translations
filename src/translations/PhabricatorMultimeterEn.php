<?php

final class PhabricatorMultimeterEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Samples',
      'Subprocesses' => 'Subprocesses',
      '(All)' => '(All)',
      'Samples (%s - %s)' => 'Samples (%s - %s)',
      'By ID' => 'By ID',
      'Epoch' => 'Epoch',
      'Performance Sampler' => 'Performance Sampler',
      'Rate' => 'Rate',
      '%s Req' => '%s Req',
      'Cost' => 'Cost',
      'Multimeter User Guide' => 'Multimeter User Guide',
      '%s Unit(s)' => '%s Unit(s)',
      'By Request' => 'By Request',
      'By Host' => 'By Host',
      'Trying to unpause an active multimeter!' => 'Trying to unpause an active multimeter!',
      'Web Request' => 'Web Request',
      'By Context' => 'By Context',
      'Avg' => 'Avg',
      'By Label' => 'By Label',
      'Multimeter' => 'Multimeter',
      'Viewer' => 'Viewer',
      '%s Event(s)' => '%s Event(s)',
      'Static Resource' => 'Static Resource',
      'Multimeter Events' => 'Multimeter Events',
      'By Viewer' => 'By Viewer',
    );
  }

}
