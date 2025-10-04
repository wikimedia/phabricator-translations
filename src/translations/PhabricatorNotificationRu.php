<?php

final class PhabricatorNotificationRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'All Notifications' => 'Все уведомления',
      'This is a test notification, sent at %s.' => 'Это тестовое уведомление, отправлено в %s.',
      'Connecting...' => 'Подключение…',
      'Mark All Read' => 'Отметить как прочитанное',
      'You have no notifications.' => 'У вас нет уведомлений',
    );
  }

}
