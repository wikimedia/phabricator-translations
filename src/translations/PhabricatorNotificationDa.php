<?php

final class PhabricatorNotificationDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Ulæste',
      'All Notifications' => 'Alle meddelelser',
      'Setting Up Client' => 'Opsætter klient',
      'Unread Notifications' => 'Ulæste beskeder',
      'No notifications to mark as read.' => 'Ingen beskeder der kan markeres som læst.',
      'You have no unread notifications.' => 'Du har ingen ulæste meddelelser.',
      'Connecting...' => 'Forbinder...',
      'Mark All Read' => 'Marker alle som læst',
      'Show only unread notifications.' => 'Vis kun ulæste beskeder.',
      'You have no notifications.' => 'Du har ingen beskeder.',
    );
  }

}
