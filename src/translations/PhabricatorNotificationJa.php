<?php

final class PhabricatorNotificationJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Unread' => '未読',
      'All Notifications' => 'すべての通知',
      'Mark All Read' => 'すべて既読にする',
      'Show only unread notifications.' => '未読の通知のみを表示します。',
      'You have no notifications.' => '通知はありません。',
    );
  }

}
