<?php

final class PhabricatorSubscriptionsCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Mute' => 'Silenciar',
      'Subscriber' => 'Subscriptor',
      'Unmute Notifications' => 'Activar les notificacions',
      'subscribers' => 'subscriptors',
      'Remove me as a subscriber' => 'Treure\'m com a subscriptor',
      'Remove subscribers.' => 'Elimina subscriptors.',
      'Unmute this object? You will receive notifications and email again.' => 'Reactivar aquest objecte? Rebràs notificacions i correus electrònics de nou.',
      'Set subscribers, overwriting current value.' => 'Indica els subscriptors, sobreescrivint el valor actual.',
      'Support for Subscriptions' => 'Suport per les subscripcions',
      'Automatically Subscribed' => 'Subscrit automàticament',
      '%d other(s)' => '%s altre(s)',
      'You are automatically subscribed to this object.' => 'T\'has subscrit automàticament a aquest objecte.',
      'Add subscribers' => 'Afegir subscriptors',
      'Remove yourself as a subscriber.' => 'Eliminar-me com a subscriptor',
      'View All %d Subscriber(s)' => 'Mostra el(s) %s subscriptor(s)',
      'Search for objects with certain subscribers.' => 'Cerca objectes amb certs subscriptors.',
      'Subscribers can take this action.' => 'Els subscriptors poden prendre aquesta acció.',
      'Unmute' => 'Deixar de silenciar',
      'Remove subscribers' => 'Eliminar subscriptors',
      'All %d subscribers removed by %s' => 'Tots els subscriptors %s s\'han eliminat per %s',
      'Added Subscribers' => 'Subscriptors afegits',
      'Mute this object? You will no longer receive notifications or email about it.' => 'Silenciar aquest objecte? No rebràs més notificacions ni correus electrònics sobre això.',
      'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => 'S\'ha rebutjat tornar a subscriure %s destinacions perquè ells han cancel·lat la subscripció anteriorment: %s.',
      'Removed %s subscriber(s): %s.' => 'S\'han eliminat %s subscriptors: %s.',
      'Bad Object' => 'Objecte erroni',
      'Add users or projects as subscribers.' => 'Afegeix usuaris o projectes com a subscriptors.',
      'Add subscribers: %s.' => 'Afegir subscriptors: %s.',
      'Removed Subscribers' => 'Subscriptors eliminats',
      'All %d subscribers added by %s' => 'Tots els subscriptors %s afegits per %s',
      'Add me as a subscriber' => 'Afegir-me com a subscriptor',
      'Mute Notifications' => 'Silenciar les notificacions',
      '%s automatically subscribed target(s) were not affected: %s.' => '%s ha subscrit automàticament destinacions que no estan afectades: %s.',
      'Set subscribers to' => 'Canviar els subscriptors a',
      'Choose subscribers.' => 'Selecciona els subscriptors.',
      '%s, %s, %s and %s' => '%s, %s, %s i %s',
      'Previously Unsubscribed' => 'Anteriorment donats de baixa',
      'Remove subscribers: %s.' => 'Eliminar els subscriptors: %s.',
      'Change Subscribers' => 'Canviar els subscriptors',
      'This object is not subscribable.' => 'No es pot subscriure a aquest objecte.',
      'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.
    Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.
    Users who are CC\'d on the email itself are also automatically subscribed if Phabricator knows which accounts are linked to their email addresses.' => 'Afegeix un o més subscriptors a l\'objecte. Pots afegir usuaris proporcionant els seus noms d\'usuari, o afegir projectes afegint els seus hashtags. Per exemple, utilitza `%s` per afegir l\'usuari `alincoln` i el projecte amb el hashtag `#ios` com a subscriptors.
    Els subscriptors que estan com a no vàlids o no reconeguts seran ignorats. Aquesta ordre no té cap efecte si no especifiques cap subscriptor.
    Els usuaris que estan A/c en el correu electrònic també es subscriuen automàticament si Phabricator coneix quins comptes estan enllaçats a les seves adreces de correu electrònic.',
      'Add rule author as subscriber.' => 'Afegeix el regla de l\'autor com a subscriptor.',
      'Added %s subscriber(s): %s.' => 'S\'han afegit %s subscriptors: %s.',
      'Remove rule author as subscriber.' => 'Elimina la regla d\'autor com a subscriptor.',
      'Add subscribers.' => 'Afegeix subscriptors.',
      'Get information about subscribers.' => 'Aconsegueix informació sobre els subscriptors.',
    );
  }

}
