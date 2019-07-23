<?php

final class PhabricatorXhprofRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'Cambiune de XHProf',
      'Sampled (1/%d)' => 'Cambionate (1/%s)',
      'All Samples' => 'Tutte le cambiune',
      'Parent Calls' => 'Chiamate de l\'attane',
      'Wall Time (Inclusive)' => 'Tiembe totale (\'Nglusive)',
      'Symbol' => 'Simbole',
      'Wall Time (Exclusive)' => 'Tiembe totale (Esclusive)',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'Tiembe totale spese jndr\'à sta funzione e tutte le figghie sue (le figghie so otre funziune chiamate in esecuzione).',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Cambione senza nome',
      '%s Profile' => '%s Profile',
      'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => 'Tiembe totale spese jndr\'à sta funzione, \'scludenne \'u tiembe spise jndr\'à le figghie sue (le figghie so otre funziune chiamate in esecuzione).',
      'Manual Run' => 'Esecuzione a màne',
      'Drag and drop .xhprof files to import them.' => 'Carrescie e lasse le file .xhprof da \'mbortà.',
      'PHP Profiling Tool' => 'Strumende de profilazione PHP',
      'Metrics for this Call' => 'Metriche pe sta chiamate',
      'Failed to unserialize XHProf profile!' => 'Deserializzazzione d\'u profile XHProf sciute a male!',
      'XHProf Profile' => 'Profile XHProf',
      'Drop .xhprof Files to Import' => 'Lasse le file .xhprof da \'mbortà',
      'Wall Time' => 'Tiembe totale',
      'Download %s Profile' => 'Scareche \'u profile %s',
      'Child Calls' => 'Chiamate d\'u figghie',
    );
  }

}
