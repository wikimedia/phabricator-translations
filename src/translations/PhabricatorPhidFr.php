<?php

final class PhabricatorPhidFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'The objects you have listed include objects of the wrong type (%s).' => 'Les objets que vous avez listés comportent des objets d\'un mauvais type (%s)',
      'Unknown Object (%s)' => 'Objet inconnu (%s)',
      'The objects you have listed include objects which do not exist (%s).' => 'Les objets que vous avez listés comportent des objets qui n\'existe pas (%s)',
      'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => 'Les objets que vous avez listés comportent des objets d\'un mauvais type (%s) et des objets qui n\'existent pas (%s).',
      'No such object exists.' => 'Pas d\'objets de ce type.',
      'Can not generate PHID with no type.' => 'Impossible de générer un PHID sans type.',
    );
  }

}
