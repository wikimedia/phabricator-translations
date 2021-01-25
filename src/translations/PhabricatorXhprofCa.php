<?php

final class PhabricatorXhprofCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'Mostres de XHProf',
      'Sampled (1/%d)' => 'Mostrejat (1/%s)',
      'All Samples' => 'Totes les mostres',
      'Parent Calls' => 'Trucades de Pare',
      'Wall Time (Inclusive)' => 'Temps Transcorregut (Inclusiu)',
      'Symbol' => 'Símbol',
      'Wall Time (Exclusive)' => 'Temps Transcorregut (Exclusiu)',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'Temps total de temps dedicat en aquesta funció i tots els seus fills (els fills són altres funcions que va cridar mentre executava).',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Exemple Sense Nom',
      '%s Profile' => 'Perfil %s',
      'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => 'El temps dedicat en aquesta funció, excloent el temps dedicat en fills (els fills són altres funcions que es criden mentre s\'executa).',
      'Manual Run' => 'Executar Manualment',
      'Drag and drop .xhprof files to import them.' => 'Arrossega i deixa anar fitxers .xhprof per importar-los.',
      'PHP Profiling Tool' => 'Eina PHP per a Crear Perfils',
      'Metrics for this Call' => 'Mètriques per a aquesta Trucada',
      'Failed to unserialize XHProf profile!' => 'No s\'ha pogut anul·lar la sèrie del perfil XHProf!',
      'XHProf Profile' => 'Perfil XHProf',
      'Drop .xhprof Files to Import' => 'Col·loca arxius .xhprof per importar-los',
      'Wall Time' => 'Temps Transcorregut',
      'Download %s Profile' => 'Descàrrega el Perfil %s',
      'Child Calls' => 'Trucades de Fills',
    );
  }

}
