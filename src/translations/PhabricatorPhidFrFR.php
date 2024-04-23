<?php

final class PhabricatorPhidFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => 'Récupérer les informations concernant un PHID arbitraire.',
      'Requested handle "%s" was not loaded.' => 'La référence demandée « %s » n\'a pas été chargée.',
      'Handles should use viewer handle pool cache.' => 'Les références doivent utiliser l\'afficheur des références du cache.',
      'Restricted %s' => '%s restreint',
      'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => 'Tentative de mutation d’un %s, mais cela n’est pas permis ; les listes de références ne sont pas mutables.',
      'Attempting to test capability "%s" for handle of type "%s", but this capability has not been attached.' => 'Tentative de test de capacité « %s » pour un indicateur de type « %s », mais cette capacité n’y est pas attachée.',
      'Object (of class "%s") has no PHID, so handles can not interact with capabilities for it.' => 'L’objet (de classe « %s ») n’a aucun PHID, de sorte que les indicateurs ne peuvent pas interagir avec ses capacités potentielles.',
      '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.' => 'La classe « %2$s » de %1$s contient une propriété %s incorrecte. Les constantes PHID doivent être des chaînes de caractères composées de 4 majuscules.',
      'Attempting to load PHID "%s", but it was not requested by any handle list.' => 'Tentative de chargement du PHID « %s », mais il n’a été demandé par aucune liste de pointeurs.',
      'The objects you have listed include objects of the wrong type (%s).' => 'Les objets que vous avez listés comportent des objets d\'un mauvais type (%s)',
      'Query Test Package' => 'Paquet de test des requêtes',
      'Application Email' => 'Courriel d\'application',
      'Look up objects by name.' => 'Recherche d\'objets par leur nom.',
      'Trying to render a handle which does not exist!' => 'Tentative de rendu d’un descripteur qui n’existe pas !',
      'Retrieve information about arbitrary PHIDs.' => 'Récupérer les informations concernant des PHID arbitraires.',
      'Unknown Object (%s)' => 'Objet inconnu (%s)',
      'The objects you have listed include objects which do not exist (%s).' => 'Les objets que vous avez listés comportent des objets qui n\'existe pas (%s)',
      'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.' => 'Tentative de création d’une nouvelle sous-liste d’une liste de pointeurs existante, mais le PHID "%s" n’apparaît pas dans la liste parent.',
      'Attempting to attach capability ("%s") for object ("%s") to handle, but this handle (of type "%s") can not have capabilities.' => 'Tentative d’attachement de la capacité (« %s ») à prendre en charge par l’objet (« %s »), mais cet indicateur (de type « %s ») ne peut avoir aucune capacité.',
      'Replaced by \'phid.query\'.' => 'Remplacé par \'phid.query\'.',
      'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => 'Les objets que vous avez listés comportent des objets d\'un mauvais type (%s) et des objets qui n\'existent pas (%s).',
      'No such object exists.' => 'Pas d\'objets de ce type.',
      'Can not generate PHID with no type.' => 'Impossible de générer un PHID sans type.',
    );
  }

}
