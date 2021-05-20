<?php

final class PhabricatorSubscriptionsFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Mute' => 'Mettre en sourdine',
      'Subscriber' => 'Abonné',
      'Unmute Notifications' => 'Démasquer les notifications',
      'subscribers' => 'abonnés',
      'Remove me as a subscriber' => 'Me retirer en tant qu’abonné',
      'Remove subscribers.' => 'Enlever des abonnés.',
      'Unmute this object? You will receive notifications and email again.' => 'Démasquer cet objet ? Vous recevrez à nouveau les notifications et les courriels.',
      'Set subscribers, overwriting current value.' => 'Déclarer des abonnés, en écrasant la valeur actuelle.',
      'Support for Subscriptions' => 'Assistance pour les abonnements',
      'Automatically Subscribed' => 'Abonné automatiquement',
      '%d other(s)' => '%s autre(s)',
      'You are automatically subscribed to this object.' => 'Vous êtes automatiquement abonné à ce projet.',
      'Add subscribers' => 'Ajouter des abonnés',
      'Remove yourself as a subscriber.' => 'Me retirer en tant qu’abonné.',
      'View All %d Subscriber(s)' => 'Afficher tous les %s abonné(s)',
      'Search for objects with certain subscribers.' => 'Rechercher des objets avec certains abonnés.',
      'Subscribers can take this action.' => 'Les abonnés peuvent effectuer cette action.',
      'Unmute' => 'Démasquer',
      'Remove subscribers' => 'Enlever des abonnés',
      'All %d subscribers removed by %s' => 'Tous les %s abonnés enlevés par %s',
      'Added Subscribers' => 'Abonnés ajoutés',
      'Mute this object? You will no longer receive notifications or email about it.' => 'Mettre en sourdine cet objet ? Vous ne recevrez plus de notifications ni de courriels le concernant.',
      'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => 'Refus de réinscrire %s cible(s) car elles se sont désinscrites précédemment : %s.',
      'Removed %s subscriber(s): %s.' => '%s abonné(s) supprimé(s) : %s.',
      'Bad Object' => 'Objet incorrect',
      'Add users or projects as subscribers.' => 'Ajouter des utilisateurs ou des projets en tant qu’abonnés.',
      'Add subscribers: %s.' => 'Ajouter des abonnés : %s .',
      'Removed Subscribers' => 'Abonnés enlevés',
      'All %d subscribers added by %s' => 'Tous les %s abonnés ajoutés par %s',
      'Add me as a subscriber' => 'Ajoutez moi en tant qu’abonné',
      'Mute Notifications' => 'Mettre en sourdine les notifications',
      '%s automatically subscribed target(s) were not affected: %s.' => '%s cible(s) automatiquement abonnée(s)  n’ont pas été affectées : %s.',
      'Set subscribers to' => 'Définir les abonnés à',
      'Choose subscribers.' => 'Choisir les abonnés.',
      '%s, %s, %s and %s' => '%s, %s, %s et %s',
      'Previously Unsubscribed' => 'Désabonné précédemment',
      'Remove subscribers: %s.' => 'Enlever des abonnés : %s .',
      'Change Subscribers' => 'Changer les abonnés',
      'This object is not subscribable.' => 'Cet objet ne peut avoir aucun abonné.',
      'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.
    Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.
    Users who are CC\'d on the email itself are also automatically subscribed if Phabricator knows which accounts are linked to their email addresses.' => 'Ajouter un ou plusieurs abonnés à l\'objet. Vous pouvez ajouter des comptes en fournissant les noms d’utilisateur, ou bien ajouter des projets en ajoutant leur code-dièse. Par exemple, utilisez `%s` pour ajouter l’utilisateur `alincoln` et le projet de code-dièse `#ios` en tant qu’abonnés.
    Les abonnés incorrects ou non reconnus seront ignorés. Cette commande n’a aucun d’effet si vous ne spécifiez aucun abonné.
    Les utilisateurs qui sont en copie du courriel lui-même, sont aussi automatiquement abonnés si Phabricator connait les comptes liés à leur adresse courriel.',
      'Add rule author as subscriber.' => 'Ajouter l’auteur de la règle en tant qu’abonné.',
      'Added %s subscriber(s): %s.' => '%s abonné(s) ajouté(s) : %s .',
      'Remove rule author as subscriber.' => 'Supprimer l’auteur de la règle en tant qu’abonné.',
      'Add subscribers.' => 'Ajouter des abonnés.',
      'Get information about subscribers.' => 'Obtenir des informations sur les abonnés.',
    );
  }

}
