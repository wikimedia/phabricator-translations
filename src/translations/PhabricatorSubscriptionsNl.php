<?php

final class PhabricatorSubscriptionsNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Mute' => 'Negeren',
  'Subscriber' => 'Abonnee',
  'Unmute Notifications' => 'Meldingen weer inschakelen',
  'subscribers' => 'abonnees',
  'Remove me as a subscriber' => 'Mij als abonnee verwijderen',
  'Remove subscribers.' => 'Abonnees verwijderen.',
  'Unmute this object? You will receive notifications and email again.' => 'Dempen van dit object inschakelen? Dan ontvangt u weer meldingen en e-mails.',
  'Set subscribers, overwriting current value.' => 'Abonnees instellen, waarbij de huidige waarde wordt overschreven.',
  'Support for Subscriptions' => 'Ondersteuning voor abonnementen',
  'Automatically Subscribed' => 'Automatisch geabonneerd',
  '%d other(s)' => '%d andere(n)',
  'You are automatically subscribed to this object.' => 'U bent automatisch geabonneerd op dit object.',
  'Remove yourself as a subscriber.' => 'Uzelf als abonnee verwijderen.',
  'View All %d Subscriber(s)' => 'Alle %d abonnee(s) bekijken',
  'Search for objects with certain subscribers.' => 'Zoeken naar objecten met bepaalde abonnees.',
  'Subscribers can take this action.' => 'Abonnees kunnen deze handeling uitvoeren.',
  'Unmute' => 'Dempen opheffen',
  'All %d subscribers removed by %s' => 'Alle %d abonnees verwijderd door %s',
  'Added Subscribers' => 'Abonnees toegevoegd',
  'Mute this object? You will no longer receive notifications or email about it.' => 'Wilt u dit object dempen? Dan ontvangt u geen meldingen of e-mails meer over dit object.',
  'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => '%s doel(en) opnieuw abonneren is mislukt omdat die zich eerder had(den) afgemeld: %s.',
  'Removed %s subscriber(s): %s.' => '%s abonnee(s) verwijderd: %s.',
  'Bad Object' => 'Onjuist object',
  'Add users or projects as subscribers.' => 'Voeg gebruikers of projecten toe als abonnees.',
  'Removed Subscribers' => 'Abonnees verwijderd',
  'All %d subscribers added by %s' => 'Alle %d abonnees toegevoegd door %s',
  'Add me as a subscriber' => 'Mij als abonnee toevoegen',
  'Mute Notifications' => 'Meldingen dempen',
  '%s automatically subscribed target(s) were not affected: %s.' => '%s automatisch geabonneerd(e) doel(en) is/zijn niet beïnvloed: %s.',
  'Set subscribers to' => 'Abonnees instellen op',
  'Choose subscribers.' => 'Kies abonnees.',
  '%s, %s, %s and %s' => '%s, %s, %s en %s',
  'Previously Unsubscribed' => 'Eerder afgemeld',
  'Change Subscribers' => 'Abonnees wijzigen',
  'This object is not subscribable.' => 'Op dit object kan niet worden geabonneerd.',
  'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.

Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.

Users who are CC\'d on the email itself are also automatically subscribed if their addresses are associated with a known account.' => 'Voeg een of meer abonnees toe aan het object. U kunt gebruikers toevoegen door hun gebruikersnamen op te geven, of projecten door hun hashtags toe te voegen. Gebruik bijvoorbeeld `%s` om de gebruiker `alincoln` en het project met hashtag `#ios` als abonnees toe te voegen.

Abonnees die incorrect zijn of niet herkend worden, worden genegeerd. Deze opdracht heeft geen effect als u geen abonnees opgeeft.

Gebruikers die in de CC van de e-mail zelf staan, worden ook automatisch geabonneerd als hun e-mailadressen gekoppeld zijn aan een bekend account.',
  'Add rule author as subscriber.' => 'Auteur van de regel toevoegen als abonnee.',
  'Added %s subscriber(s): %s.' => '%s abonnee(s) toegevoegd: %s.',
  'Remove rule author as subscriber.' => 'Auteur van de regel verwijderen als abonnee.',
  'Add subscribers.' => 'Abonnees toevoegen.',
  'Get information about subscribers.' => 'Informatie ontvangen over abonnees.',
);
  }

}
