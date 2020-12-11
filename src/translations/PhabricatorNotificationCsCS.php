<?php

final class PhabricatorNotificationCsCS
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'cs_CS';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Nepřečteno',
      'All Notifications' => 'Všechna upozornění',
      'Really mark all notifications as read?' => 'Opravdu označit všechna upozornění jako přečtená?',
      'All unread notifications will be marked as read. You can not undo this action.' => 'Všechna nepřečtená upozornění budou označena jako přečtená. Tuto akci nelze vrátit zpět.',
      'Unread Notifications' => 'Nepřečtená upozornění',
      'Disconnected' => 'Odpojeno',
      'No notifications to mark as read.' => 'Žádná upozornění nejsou označena jako přečtená.',
      'Real-Time Updates and Alerts' => 'Aktualizace a oznámení v reálném čase',
      'You can\'t ignore your problems forever, you know.' => 'Víte, nemůžete své problémy ignorovat napořád.',
      'Unable to Connect to Notification Server' => 'Nelze se připojit k notifikačnímu serveru.',
      'This is a test notification, sent at %s.' => 'Toto je testovací upozornění, odesláno %s.',
      'You have no unread notifications.' => 'Nemáte žádná nepřečtená upozornění.',
      'Connecting...' => 'Připojování…',
      'Mark All Read' => 'Označit vše jako přečtené',
      'Show only unread notifications.' => 'Ukázat pouze nepřečtená upozornění',
      'You have no notifications.' => 'Nemáte žádná upozornění.',
    );
  }

}
