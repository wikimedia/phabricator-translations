<?php

final class PhabricatorMultimeterFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'By ID' => 'Par ID',
      'Cost' => 'Coût',
      '%s Unit(s)' => '%s Unité(s)',
      'By Request' => 'Par requête',
      'By Host' => 'Par hôte',
      'Web Request' => 'Requête Web',
      'By Context' => 'Par contexte',
      'By Label' => 'Par label',
      '%s Event(s)' => '%s Événement(s)',
      'Static Resource' => 'Ressource statique',
    );
  }

}
