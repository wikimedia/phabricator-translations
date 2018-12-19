<?php

final class PhabricatorNotificationPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Nieprzeczytane',
      'All Notifications' => 'Wszystkie powiadomienia',
      'Really mark all notifications as read?' => 'Czy naprawdę oznaczyć wszystkie powiadomienia jako przeczytane?',
      'Unread Notifications' => 'Nieprzeczytane powiadomienia',
      'Disconnected' => 'Rozłączono',
      'No notifications to mark as read.' => 'Brak powiadomień do oznaczenia jako przeczytane.',
      'Notification Server Down' => 'Serwer powiadomień nie działa',
      'Unable to Connect to Notification Server' => 'Nie można połączyć się z serwerem powiadomień',
      'Notification server not enabled' => 'Serwer powiadomień nie jest włączony',
      'This is a test notification, sent at %s.' => 'To jest powiadomienie testowe, wysłane %s.',
      'You have no unread notifications.' => 'Nie masz nieprzeczytanych powiadomień.',
      'Connecting...' => 'Łączenie...',
      'Mark All Read' => 'Oznacz wszystko jako przeczytane',
      'Show only unread notifications.' => 'Pokaż tylko nieprzeczytane powiadomienia.',
      'You have no notifications.' => 'Nie masz żadnych powiadomień.',
    );
  }

}
