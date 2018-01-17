<?php

final class PhabricatorXhprofFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Parent Calls' => 'Appels Relatifs',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'Temps total du mur passé dans cette fonction et dans tous ses enfants (les enfants sont d\'autres fonctions qu\'elle a appelées pendant son exécution).',
      'Unnamed Sample' => 'Echantillon sans nom.',
      'PHP Profiling Tool' => 'Outil de profilage PHP',
      'Metrics for this Call' => 'Métriques pour cet appel',
      'XHProf Profile' => 'Profil XHProf',
      'Drop .xhprof Files to Import' => 'Faire glisser les fichiers .xhprof à importer',
      'Child Calls' => 'Appeler les Enfants',
    );
  }

}
