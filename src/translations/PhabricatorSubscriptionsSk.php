<?php

final class PhabricatorSubscriptionsSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Mute' => 'Stlmiť',
  'Subscriber' => 'Odberateľ',
  'Unmute Notifications' => 'Zrušiť stlmenie upozornení',
  'subscribers' => 'odberatelia',
  'Remove me as a subscriber' => 'Odstrániť ma z odberateľov',
  'Remove subscribers.' => 'Odstrániť odberateľov.',
  'Unmute this object? You will receive notifications and email again.' => 'Zrušiť stlmenie tohto objektu? Znova budete dostávať upozornenia a e-maily.',
  'Set subscribers, overwriting current value.' => 'Nastaviť odberateľov a prepísať súčasnú hodnotu.',
  'Support for Subscriptions' => 'Podpora odberov',
  'Automatically Subscribed' => 'Automaticky prihlásení na odber',
  '%d other(s)' => array(
    '%d ďalší',
    '%d ďalší',
    '%d ďalších',
  ),
  'You are automatically subscribed to this object.' => 'Tento objekt automaticky odoberáte.',
  'Remove yourself as a subscriber.' => 'Odstrániť seba z odberateľov.',
  'View All %d Subscriber(s)' => array(
    'Zobraziť odberateľa',
    'Zobraziť všetkých %d odberateľov',
  ),
  'Subscriptions' => 'Odbery',
  'Search for objects with certain subscribers.' => 'Vyhľadať objekty s určitými odberateľmi.',
  'Subscribers can take this action.' => 'Túto akciu môžu vykonať odberatelia.',
  'Unmute' => 'Zrušiť stlmenie',
  'All %d subscribers removed by %s' => 'Všetkých %d odberateľov odstránil používateľ %s',
  'Added Subscribers' => 'Pridaní odberatelia',
  'Mute this object? You will no longer receive notifications or email about it.' => 'Stlmiť tento objekt? Už o ňom nebudete dostávať upozornenia ani e-maily.',
  'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => array(
    'Cieľ nebol znova prihlásený na odber, pretože predtým odber zrušili: %2$s.',
    'Ciele neboli znova prihlásené na odber, pretože predtým odber zrušili: %2$s.',
  ),
  'Removed %s subscriber(s): %s.' => array(
    'Bol odstránený odberateľ: %2$s.',
    'Boli odstránení odberatelia: %2$s.',
  ),
  'Unsubscribe' => 'Zrušiť odber',
  'Bad Object' => 'Chybný objekt',
  'Add users or projects as subscribers.' => 'Pridať používateľov alebo projekty ako odberateľov.',
  'Removed Subscribers' => 'Odstránení odberatelia',
  'All %d subscribers added by %s' => 'Všetkých %d odberateľov pridal používateľ %s',
  'Add me as a subscriber' => 'Pridať ma medzi odberateľov',
  'Mute Notifications' => 'Stlmiť upozornenia',
  '%s automatically subscribed target(s) were not affected: %s.' => array(
    'Automaticky prihlásený cieľ nebol ovplyvnený: %2$s.',
    'Automaticky prihlásené ciele neboli ovplyvnené: %2$s.',
  ),
  'Set subscribers to' => 'Nastaviť odberateľov na',
  'Choose subscribers.' => 'Vyberte odberateľov.',
  '%s, %s, %s and %s' => '%s, %s, %s a %s',
  'Previously Unsubscribed' => 'Predtým zrušený odber',
  'Change Subscribers' => 'Zmeniť odberateľov',
  'This object is not subscribable.' => 'Tento objekt nie je možné odoberať.',
  'This object is temporary and cannot be subscribed to.' => 'Tento objekt je dočasný a nie je možné ho odoberať.',
  'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.

Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.

Users who are CC\'d on the email itself are also automatically subscribed if their addresses are associated with a known account.' => 'Pridajte k objektu jedného alebo viacerých odberateľov. Používateľov môžete pridať zadaním ich používateľských mien alebo môžete pridať projekty zadaním ich hashtagov. Napríklad pomocou `%s` pridáte ako odberateľov používateľa `alincoln` a projekt s hashtagom `#ios`.

Odberatelia, ktorí sú neplatní alebo nerozpoznaní, budú ignorovaní. Ak nezadáte žiadnych odberateľov, tento príkaz nemá žiadny účinok.

Používatelia uvedení v kópii samotného e-mailu sú tiež automaticky prihlásení na odber, ak sú ich adresy priradené k známemu účtu.',
  'Add rule author as subscriber.' => 'Pridať autora pravidla ako odberateľa.',
  'Added %s subscriber(s): %s.' => array(
    'Bol pridaný odberateľ: %2$s.',
    'Boli pridaní odberatelia: %2$s.',
  ),
  'Remove rule author as subscriber.' => 'Odstrániť autora pravidla z odberateľov.',
  'Add subscribers.' => 'Pridať odberateľov.',
  'Get information about subscribers.' => 'Získať informácie o odberateľoch.',
);
  }

}
