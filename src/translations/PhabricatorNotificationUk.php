<?php

final class PhabricatorNotificationUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'All Notifications' => 'Усі сповіщення',
      'This is a test notification, sent at %s.' => 'Це тестове сповіщення, надіслане %s.',
      'Mark All Read' => 'Позначити як прочитане',
    );
  }

}
