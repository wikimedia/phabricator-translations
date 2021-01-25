<?php

final class PhabricatorMultimeterPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Amostras',
      'Subprocesses' => 'Subprocessos',
      'Samples (%s - %s)' => 'Amostras (%s - %s)',
      'Epoch' => 'Época',
      'Performance Sampler' => 'Amostrador de desempenho',
      'Rate' => 'Taxa',
      'By Host' => 'Por host',
      'Web Request' => 'Solicitação da Web',
      'Avg' => 'Média',
      'Viewer' => 'Visualizador',
      'Static Resource' => 'Recurso estático',
    );
  }

}
