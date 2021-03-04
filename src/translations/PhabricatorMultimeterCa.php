<?php

final class PhabricatorMultimeterCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Mostrejos',
      'Subprocesses' => 'Subprocessos',
      '(All)' => '(Tot)',
      'Samples (%s - %s)' => 'Mostrejos (%s - %s)',
      'By ID' => 'Per ID',
      'Epoch' => 'Època',
      'Performance Sampler' => 'Mostrejos de rendiment',
      'Rate' => 'Taxa',
      '%s Req' => '%s Req',
      'Multimeter User Guide' => 'Guia d\'Usuari del Multímetre',
      '%s Unit(s)' => '%s Unitat(s)',
      'By Request' => 'Per Petició',
      'By Host' => 'Per Amfitrió',
      'Trying to unpause an active multimeter!' => 'S\'està intentant reprendre un multímetre actiu!',
      'Web Request' => 'Sol·licitud Web',
      'By Context' => 'Per context',
      'Avg' => 'Mitjana',
      'By Label' => 'Per Etiqueta',
      'Multimeter' => 'Multímetre',
      'Viewer' => 'Visualitzador',
      '%s Event(s)' => '%s esdeveniment(s)',
      'Static Resource' => 'Recurs Estàtic',
      'Multimeter Events' => 'Esdeveniments de Multímetre',
      'By Viewer' => 'Per Visualitzador',
    );
  }

}
