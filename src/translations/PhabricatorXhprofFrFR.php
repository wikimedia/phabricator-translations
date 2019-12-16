<?php

final class PhabricatorXhprofFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'Échantillons XHProf',
      'Sampled (1/%d)' => 'Échantillonné (1/%s)',
      'All Samples' => 'Tous les échantillons',
      'Parent Calls' => 'Appels parents',
      'Wall Time (Inclusive)' => 'Temps écoulé (inclusif)',
      'Symbol' => 'Symbole',
      'Wall Time (Exclusive)' => 'Temps écoulé (exclusif)',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'Temps réel écoulé et passé dans cette fonction et dans tous ses enfants (les enfants sont d’autres fonctions qu’elle a appelées durant son exécution).',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Échantillon sans nom',
      '%s Profile' => 'Profil %s',
      'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => 'Temps réel écoulé et passé dans cette fonction, en excluant le temps passé dans les enfants (les enfants sont d’autres fonctions qu’elle a appelées durant son exécution)',
      'Manual Run' => 'Exécution manuelle',
      'Drag and drop .xhprof files to import them.' => 'Glisser-déposer des fichiers .xhprof pour les importer.',
      'PHP Profiling Tool' => 'Outil de profilage PHP',
      'Metrics for this Call' => 'Mesures pour cet appel',
      'Failed to unserialize XHProf profile!' => 'Échec de la désérialisation du profil XHProf !',
      'XHProf Profile' => 'Profil XHProf',
      'Drop .xhprof Files to Import' => 'Déposez les fichiers .xhprof à importer',
      'Wall Time' => 'Temps écoulé',
      'Download %s Profile' => 'Télécharger le profil %s',
      'Child Calls' => 'Appels enfants',
    );
  }

}
