<?php

final class PhabricatorLipsumFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" does not match the name of any generators.' => 'L\'argument « %s » ne correspond à aucun nom de générateur.',
      'A lipsum generator is registered with key "%s". This key is reserved.' => 'Un générateur lipsum est enregistré avec la clé « %s ». Cette clé est réservée.',
      'Failed to load a random user. You may need to generate more test users first.' => 'Impossible de charger un utilisateur aléatoire. Vous devrez peut-être d\'abord générer plus d\'utilisateurs de test.',
      'Generate objects without prompting for confirmation.' => 'Générez des objets sans demander de confirmation.',
      'LIPSUM' => 'LIPSUM',
      'Unable to load symbol %s: this class does not exist.' => 'Impossible de charger le symbole %s : cette classe n\'existe pas.',
      'Generator ("%s") was unable to generate an object.' => 'Generator ("%s") n\'a pas pu générer d\'objet.',
      'OOPS' => 'OOPS',
      'Are you sure you want to generate piles of garbage?' => 'Êtes-vous sûr de vouloir générer des piles de déchets ?',
    );
  }

}
