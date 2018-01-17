<?php

final class PhabricatorSubscriptionsEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'subscribers' => 'subscribers',
      'Remove me as a subscriber' => 'Remove me as a subscriber',
      'Remove subscribers.' => 'Remove subscribers.',
      'Set subscribers, overwriting current value.' => 'Set subscribers, overwriting current value.',
      'Support for Subscriptions' => 'Support for Subscriptions',
      'Automatically Subscribed' => 'Automatically Subscribed',
      '%d other(s)' => '%s other(s)',
      'You are automatically subscribed to this object.' => 'You are automatically subscribed to this object.',
      'Add subscribers' => 'Add subscribers',
      'Remove yourself as a subscriber.' => 'Remove yourself as a subscriber.',
      'Search for objects with certain subscribers.' => 'Search for objects with certain subscribers.',
      'Subscribers can take this action.' => 'Subscribers can take this action.',
      'Remove subscribers' => 'Remove subscribers',
      'All %d subscribers removed by %s' => 'All %s subscribers removed by %s',
      'Added Subscribers' => 'Added Subscribers',
      'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => 'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.',
      'Removed %s subscriber(s): %s.' => 'Removed %s subscriber(s): %s.',
      'Unsubscribe' => 'Unsubscribe',
      'Bad Object' => 'Bad Object',
      'Add users or projects as subscribers.' => 'Add users or projects as subscribers.',
      'Add subscribers: %s.' => 'Add subscribers: %s.',
      'Removed Subscribers' => 'Removed Subscribers',
      'All %d subscribers added by %s' => 'All %s subscribers added by %s',
      'Add me as a subscriber' => 'Add me as a subscriber',
      '%s automatically subscribed target(s) were not affected: %s.' => '%s automatically subscribed target(s) were not affected: %s.',
      'Choose subscribers.' => 'Choose subscribers.',
      '%s, %s, %s and %s' => '%s, %s, %s and %s',
      'Previously Unsubscribed' => 'Previously Unsubscribed',
      'Remove subscribers: %s.' => 'Remove subscribers: %s.',
      'Change Subscribers' => 'Change Subscribers',
      'This object is not subscribable.' => 'This object is not subscribable.',
      'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.
    Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.
    Users who are CC\'d on the email itself are also automatically subscribed if Phabricator knows which accounts are linked to their email addresses.' => 'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.
    Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.
    Users who are CC\'d on the email itself are also automatically subscribed if Phabricator knows which accounts are linked to their email addresses.',
      'Add rule author as subscriber.' => 'Add rule author as subscriber.',
      'Added %s subscriber(s): %s.' => 'Added %s subscriber(s): %s.',
      'Remove rule author as subscriber.' => 'Remove rule author as subscriber.',
      'Add subscribers.' => 'Add subscribers.',
      'Get information about subscribers.' => 'Get information about subscribers.',
    );
  }

}
