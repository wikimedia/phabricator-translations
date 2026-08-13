<?php

final class PhabricatorNotificationLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'All Notifications' => 'All Notifikatiounen',
  'Really mark all notifications as read?' => 'Wierklech all Notifikatiounen als gelies markéieren?',
  'No notifications to mark as read.' => 'Keng Notifikatioune fir als gelies ze markéieren.',
  'You have no notifications.' => 'Dir hutt keng Notifikatiounen.',
);
  }

}
