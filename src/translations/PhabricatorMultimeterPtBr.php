<?php

final class PhabricatorMultimeterPtBr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_Br';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Amostras',
      'Subprocesses' => 'Subprocessos',
      'Samples (%s - %s)' => 'Amostras (%s - %s)',
      'Epoch' => 'Época',
      'Performance Sampler' => 'Amostrador de desempenho',
      'Rate' => 'Taxa',
      'Cost' => 'Custo',
      'By Host' => 'Por host',
      'Web Request' => 'Solicitação da Web',
      'Avg' => 'Média',
      'Viewer' => 'Visualizador',
      'Static Resource' => 'Recurso estático',
    );
  }

}
