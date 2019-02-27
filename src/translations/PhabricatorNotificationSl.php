<?php

final class PhabricatorNotificationSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Neprebrana',
      'Unable to load server status: this is not an admin server!' => 'Ni mogoče naložiti statusa strežnika: to ni administratorski strežnik!',
      'All Notifications' => 'Vsa obvestila',
      'Really mark all notifications as read?' => 'Naj res označim vsa obvestila kot prebrana?',
      'All unread notifications will be marked as read. You can not undo this action.' => 'Vsa neprebrana obvestila bodo označena kot prebrana. Tega dejanja se ne da razveljaviti.',
      'Unread Notifications' => 'Neprebrana obvestila',
      'Unable to post message: this is not an admin server!' => 'Ni mogoče objaviti obvestila: to ni adminitstratorski strežnik!',
      'Disconnected' => 'Nepovezan',
      'No notifications to mark as read.' => 'Nobeno obvestilo ni označeno kot prebrano.',
      'Real-Time Updates and Alerts' => 'Takojšnje posodobitve in opomniki',
      'Notification server not enabled' => 'Strežnik z obvestili ni omogočen',
      'This is a test notification, sent at %s.' => 'To je testno obvestilo, poslano na %s',
      '(To start the server, run this command.)
    %s' => '(Za zagon strežnika poženi naslednji ukaz.)
    %s',
      'You have no unread notifications.' => 'Ni neprebranih obvestil.',
      'Connecting...' => 'Povezovanje ...',
      'Mark All Read' => 'Označi vse kot prebrano',
      'Show only unread notifications.' => 'Prikaži samo neprebrana obvestila.',
      'You have no notifications.' => 'Ni obvestil.',
    );
  }

}
