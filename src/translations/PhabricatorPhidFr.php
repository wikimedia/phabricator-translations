<?php

final class PhabricatorPhidFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => 'Récupérer les informations concernant un PHID arbitraire.',
      'Requested handle "%s" was not loaded.' => 'La référence demandée « %s » n\'a pas été chargée.',
      'Handles should use viewer handle pool cache.' => 'Les références doivent utiliser l\'afficheur des références du cache.',
      'Restricted %s' => '%s restreint',
      'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => 'Tentative pour muter un %s, mais cela n\'est pas permis; les listes de références ne sont pas mutables.',
      'The objects you have listed include objects of the wrong type (%s).' => 'Les objets que vous avez listés comportent des objets d\'un mauvais type (%s)',
      'Query Test Package' => 'Paquet de test des requêtes',
      'Application Email' => 'Courriel d\'application',
      'Look up objects by name.' => 'Recherche d\'objets par leur nom.',
      'Trying to render a handle which does not exist!' => 'Tentative de rendu d\'une référence qui n\'existe pas !',
      'Retrieve information about arbitrary PHIDs.' => 'Récupérer les informations concernant des PHID arbitraires.',
      'Unknown Object (%s)' => 'Objet inconnu (%s)',
      'The objects you have listed include objects which do not exist (%s).' => 'Les objets que vous avez listés comportent des objets qui n\'existe pas (%s)',
      'Replaced by \'phid.query\'.' => 'Remplacé par \'phid.query\'.',
      'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => 'Les objets que vous avez listés comportent des objets d\'un mauvais type (%s) et des objets qui n\'existent pas (%s).',
      'No such object exists.' => 'Pas d\'objets de ce type.',
      'Can not generate PHID with no type.' => 'Impossible de générer un PHID sans type.',
    );
  }

}
