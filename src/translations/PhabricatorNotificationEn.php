<?php

final class PhabricatorNotificationEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Unread',
      'Unable to load server status: this is not an admin server!' => 'Unable to load server status: this is not an admin server!',
      'All Notifications' => 'All Notifications',
      'Really mark all notifications as read?' => 'Really mark all notifications as read?',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => 'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.',
      'Setting Up Client' => 'Setting Up Client',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => 'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.',
      'All unread notifications will be marked as read. You can not undo this action.' => 'All unread notifications will be marked as read. You can not undo this action.',
      'Unread Notifications' => 'Unread Notifications',
      'Unable to post message: this is not an admin server!' => 'Unable to post message: this is not an admin server!',
      'Disconnected' => 'Disconnected',
      '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => 'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => 'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".',
      'No notifications to mark as read.' => 'No notifications to mark as read.',
      'Notification Server Down' => 'Notification Server Down',
      'Unable to test client on an admin server!' => 'Unable to test client on an admin server!',
      'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => 'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.',
      'Real-Time Updates and Alerts' => 'Real-Time Updates and Alerts',
      'You can\'t ignore your problems forever, you know.' => 'You can\'t ignore your problems forever, you know.',
      'Unable to Connect to Notification Server' => 'Unable to Connect to Notification Server',
      'Phabricator is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s' => 'Phabricator is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s',
      'Test Notification' => 'Test Notification',
      'Notification server not enabled' => 'Notification server not enabled',
      'This is a test notification, sent at %s.' => 'This is a test notification, sent at %s.',
      '(To start the server, run this command.)
    %s' => '(To start the server, run this command.)
    %s',
      'You have no unread notifications.' => 'You have no unread notifications.',
      'Connecting...' => 'Connecting...',
      'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!',
      'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => 'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.',
      'Mark All Read' => 'Mark All Read',
      'Show only unread notifications.' => 'Show only unread notifications.',
      'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => 'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.',
      'Notification server configuration has an invalid service specification (at index "%s"): %s.' => 'Notification server configuration has an invalid service specification (at index "%s"): %s.',
      'You have no notifications.' => 'You have no notifications.',
    );
  }

}
