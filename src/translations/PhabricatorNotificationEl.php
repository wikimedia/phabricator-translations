<?php

final class PhabricatorNotificationEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Μη αναγνωσμένα',
      'All Notifications' => 'Όλες οι ενημερώσεις',
      'Really mark all notifications as read?' => 'Θέλετε να ορίσετε πραγματικά όλες τις ειδοποιήσεις ως αναγνωσμένες;',
      'Setting Up Client' => 'Ρύθμιση πελάτη',
      'Unread Notifications' => 'Μη διαβασμένες ειδοποιήσεις',
      'Disconnected' => 'Αποσυνδεδεμένο',
      'No notifications to mark as read.' => 'Δεν υπάρχουν ειδοποιήσεις για επισήμανση ως διαβασμένες.',
      'Notification Server Down' => 'Ο διακομιστής ειδοποιήσεων έπεσε',
      'Real-Time Updates and Alerts' => 'Ειδοποιήσεις και ενημερώσεις σε πραγματικό χρόνο',
      'Test Notification' => 'Δοκιμαστική ειδοποίηση',
      'Notification server not enabled' => 'Ο διακομιστής ειδοποιήσεων δεν έχει ενεργοποιηθεί',
      'This is a test notification, sent at %s.' => 'Αυτή είναι μια δοκιμαστική ειδοποίηση, που εστάλη στις %s.',
      '(To start the server, run this command.)
    %s' => '(Για να ξεκινήσετε τον διακομιστή, εκτελέστε αυτή την εντολή.)
    %s',
      'You have no unread notifications.' => 'Δεν έχετε αδιάβαστες ενημερώσεις.',
      'Connecting...' => 'Σύνδεση σε εξέλιξη...',
      'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'Πάρθηκε HTTP 200, αλλά αναμενόταν το HTTP 501 (ενημέρωση WebSocket)!',
      'Mark All Read' => 'Επισήμανση όλων ως διαβασμένα',
      'Show only unread notifications.' => 'Εμφάνιση αδιάβαστων ειδοποιήσεων μόνο.',
      'You have no notifications.' => 'Δεν έχετε ενημερώσεις.',
    );
  }

}
