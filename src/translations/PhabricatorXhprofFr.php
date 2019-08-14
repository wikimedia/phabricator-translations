<?php

final class PhabricatorXhprofFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'Échantillons XHProf',
      'Sampled (1/%d)' => 'Testé (1/%s)',
      'All Samples' => 'Tous les échantillons',
      'Parent Calls' => 'Appels Relatifs',
      'Symbol' => 'Symbole',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'Temps total du mur passé dans cette fonction et dans tous ses enfants (les enfants sont d\'autres fonctions qu\'elle a appelées pendant son exécution).',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Echantillon sans nom.',
      '%s Profile' => 'Profil %s',
      'Manual Run' => 'Exécution manuelle',
      'Drag and drop .xhprof files to import them.' => 'Glisser-déposer des fichiers .xhprof pour les importer.',
      'PHP Profiling Tool' => 'Outil de profilage PHP',
      'Metrics for this Call' => 'Métriques pour cet appel',
      'Failed to unserialize XHProf profile!' => 'Échec de la désérialisation du profil XHProf&nbsp;!',
      'XHProf Profile' => 'Profil XHProf',
      'Drop .xhprof Files to Import' => 'Faire glisser les fichiers .xhprof à importer',
      'Download %s Profile' => 'Télécharger le profil %s',
      'Child Calls' => 'Appeler les Enfants',
    );
  }

}
