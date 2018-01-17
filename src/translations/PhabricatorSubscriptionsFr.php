<?php

final class PhabricatorSubscriptionsFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'subscribers' => 'abonnés',
      'Remove me as a subscriber' => 'Me retirer en tant qu\'abonné',
      'Remove subscribers.' => 'Enlever des abonnés.',
      'Set subscribers, overwriting current value.' => 'Déclarer des abonnés, écrase la valeur actuelle.',
      'Support for Subscriptions' => 'Aide pour les abonnements',
      'Automatically Subscribed' => 'Abonné automatiquement',
      'You are automatically subscribed to this object.' => 'Vous êtes automatiquement abonné à ce projet.',
      'Add subscribers' => 'Ajouter des abonnés',
      'Remove yourself as a subscriber.' => 'Me retirer en tant qu\'abonné.',
      'Search for objects with certain subscribers.' => 'Rechercher des objets avec certains abonnés.',
      'Subscribers can take this action.' => 'Les abonnés peuvent faire cette action.',
      'Remove subscribers' => 'Enlever des abonnés',
      'All %d subscribers removed by %s' => 'Tous les %s abonnés enlevés par %s',
      'Added Subscribers' => 'Abonnés ajoutés',
      'Removed %s subscriber(s): %s.' => '%s abonné(s) supprimé(s): %s.',
      'Unsubscribe' => 'Se désabonner',
      'Add users or projects as subscribers.' => 'Ajouter des utilisateurs ou des projets en tant qu\'abonnés.',
      'Add subscribers: %s.' => 'Ajouter des abonnés: %s .',
      'Removed Subscribers' => 'Abonnés enlevés',
      'All %d subscribers added by %s' => 'Tous les %s abonnés ajoutés par %s',
      'Add me as a subscriber' => 'Ajoutez moi en tant qu\'abonné',
      'Choose subscribers.' => 'Choisir les abonnés.',
      '%s, %s, %s and %s' => '%s, %s, %s et %s',
      'Remove subscribers: %s.' => 'Enlever des abonnés: %s .',
      'Change Subscribers' => 'Changer les abonnés',
      'Add rule author as subscriber.' => 'Ajouter l\'auteur de la règle en tant qu\'abonné.',
      'Added %s subscriber(s): %s.' => '%s abonné(s) ajouté(s): %s .',
      'Add subscribers.' => 'Ajouter des abonnés.',
    );
  }

}
