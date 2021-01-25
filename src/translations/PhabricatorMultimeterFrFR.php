<?php

final class PhabricatorMultimeterFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Échantillons',
      'Subprocesses' => 'Sous-processus',
      '(All)' => '(Tout)',
      'Samples (%s - %s)' => 'Échantillons (%s – %s)',
      'By ID' => 'Par ID',
      'Epoch' => 'Époque',
      'Performance Sampler' => 'Échantillonneur des performances',
      'Rate' => 'Taux',
      '%s Req' => '%s req',
      'Multimeter User Guide' => 'Manuel d’utilisation de Multimètre',
      '%s Unit(s)' => '%s unité(s)',
      'By Request' => 'Par requête',
      'By Host' => 'Par hôte',
      'Trying to unpause an active multimeter!' => 'Tentative de reprise d’un multimètre déjà actif !',
      'Web Request' => 'Requête web',
      'By Context' => 'Par contexte',
      'Avg' => 'Moy',
      'By Label' => 'Par label',
      'Multimeter' => 'Multimètre',
      'Viewer' => 'Visualiseur',
      '%s Event(s)' => '%s événement(s)',
      'Static Resource' => 'Ressource statique',
      'Multimeter Events' => 'Événements du Multimètre',
      'By Viewer' => 'Par visualiseur',
    );
  }

}
