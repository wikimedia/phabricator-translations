<?php

final class PhabricatorTokensFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Grey Medal' => 'Médaille grise',
      '100',
      'Rescind Token' => 'Annuler un jeton',
      'Love' => 'Amour',
      'Query tokens.' => 'Demander des jetons.',
      'Token flavor.' => 'Arôme du jeton.',
      'A token inherits the policies of the object it is awarded to.' => 'Un jeton hérite des politiques de l\'objet qu\'il récompense.',
      '%s awarded %s a %s token.' => '%s a gratifié %s d\'un jeton %s .',
      'Barnstar' => 'Barnstar',
      'Award "%s" Token' => 'Gratifier « %s » d\'un jeton',
      'Give or change a token.' => 'Donner ou changer un jeton',
      'Manufacturing Defect?' => 'Fabriquer un défaut ?',
      'Tokens Given' => 'Jetons donnés',
      'Cookie' => 'Cookie',
      'Pirate Logo' => 'Logo Pirate',
      'Pterodactyl' => 'Ptérodactyle',
    );
  }

}
