<?php

final class PhabricatorSubscriptionsZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Mute' => '關閉',
      'Subscriber' => '訂閱者',
      'Unmute Notifications' => '取消關閉通知',
      'subscribers' => '訂閱者',
      'Remove me as a subscriber' => '將我從訂閱者裡移除。',
      'Remove subscribers.' => '移除訂閱者。',
      'Unmute this object? You will receive notifications and email again.' => '取消不要接收此對象？您會再次收到關於此對象的通知或電子郵件。',
      'Set subscribers, overwriting current value.' => '設定訂閱者，覆寫現有值。',
      'Support for Subscriptions' => '訂閱支持',
      'Automatically Subscribed' => '自動訂閱',
      '%d other(s)' => '其他 %s 個',
      'You are automatically subscribed to this object.' => '您已自動訂閱此對象。',
      'Add subscribers' => '添加訂閱者',
      'Remove yourself as a subscriber.' => '將您自己從訂閱者裡移除。',
      'Search for objects with certain subscribers.' => '以特定訂閱者來搜尋對象。',
      'Subscribers can take this action.' => '訂閱者可進行此操作。',
      'Unmute' => '取消關閉',
      'Remove subscribers' => '移除訂閱者',
      'All %d subscribers removed by %s' => '%2$s 移除了所有 %1$s 位訂閱者',
      'Added Subscribers' => '已添加訂閱者',
      'Mute this object? You will no longer receive notifications or email about it.' => '不要接收此對象？您將不會收到關於此對象的通知或電子郵件。',
      'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => '拒絕重新訂閱 %s 個目標，因為它們先前已取消訂閱：%s。',
      'Removed %s subscriber(s): %s.' => '已移除 %s 位訂閱者：%s。',
      'Unsubscribe' => '取消訂閱',
      'Bad Object' => '錯誤對象',
      'Add users or projects as subscribers.' => '添加使用者或專案為訂閱者。',
      'Add subscribers: %s.' => '添加訂閱者：%s。',
      'Removed Subscribers' => '已移除訂閱者',
      'All %d subscribers added by %s' => '%2$s 添加了 %1$s 位訂閱者',
      'Add me as a subscriber' => '將我添加為訂閱者',
      'Mute Notifications' => '關閉通知',
      '%s automatically subscribed target(s) were not affected: %s.' => '%s 已自動訂閱的目標不會受到影響：%s。',
      'Set subscribers to' => '設定訂閱者成',
      'Choose subscribers.' => '挑選訂閱者。',
      '%s, %s, %s and %s' => '%s、%s、%s與%s',
      'Previously Unsubscribed' => '先前已取消訂閱',
      'Remove subscribers: %s.' => '移除訂閱者：%s。',
      'Change Subscribers' => '更改訂閱者',
      'This object is not subscribable.' => '此對象不可訂閱。',
      'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.
    Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.
    Users who are CC\'d on the email itself are also automatically subscribed if Phabricator knows which accounts are linked to their email addresses.' => '添加一位或多位訂閱者至對象。您可以透過提供他們的使用者名稱來添加使用者，或是透過添加他們的主題標籤來添加專案。例如，使用「%s」來添加使用者「alincoln」帶有「#ios」主題標籤的專案來成為訂閱者。
    無效或是未被認可的訂閱者會被忽略。若您沒有指定任何訂閱者，此命令不會有任何影響。
    若 Phabricator 知道哪位帳號有連結到他們的電子郵件位址，在電子郵件裡接收複本的使用者也會自動訂閱。',
      'Add rule author as subscriber.' => '添加規則作者為訂閱者。',
      'Added %s subscriber(s): %s.' => '已添加 %s 位訂閱者：%s。',
      'Remove rule author as subscriber.' => '將規則作者從訂閱者裡移除。',
      'Add subscribers.' => '添加訂閱者。',
      'Get information about subscribers.' => '取得有關訂閱者的資訊。',
    );
  }

}
