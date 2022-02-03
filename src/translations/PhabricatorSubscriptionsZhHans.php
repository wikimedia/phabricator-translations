<?php

final class PhabricatorSubscriptionsZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Mute' => '屏蔽',
      'subscribers' => '订阅者',
      'Remove me as a subscriber' => '将我从订阅者中移除',
      'Remove subscribers.' => '移除订阅者。',
      'Support for Subscriptions' => '订阅支持',
      'Automatically Subscribed' => '已自动订阅',
      '%d other(s)' => '其他%s位',
      'You are automatically subscribed to this object.' => '您已自动订阅此对象。',
      'Add subscribers' => '添加订阅者',
      'Search for objects with certain subscribers.' => '搜索特定订阅者的对象。',
      'Subscribers can take this action.' => '订阅者可进行此操作。',
      'Remove subscribers' => '移除订阅者',
      'Added Subscribers' => '已添加订阅者',
      'Removed %s subscriber(s): %s.' => '已移除%s个订阅者：%s。',
      'Add subscribers: %s.' => '添加订阅者：%s。',
      'Removed Subscribers' => '已移除订阅者',
      'Add me as a subscriber' => '将我添加为订阅者',
      'Mute Notifications' => '关闭通知',
      'Choose subscribers.' => '选择订阅者。',
      '%s, %s, %s and %s' => '%s、%s、%s和%s',
      'Remove subscribers: %s.' => '移除订阅者：%s。',
      'Change Subscribers' => '更改订阅者',
      'This object is not subscribable.' => '此对象不可订阅。',
      'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.
    Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.
    Users who are CC\'d on the email itself are also automatically subscribed if Phabricator knows which accounts are linked to their email addresses.' => '添加一个或多个订阅者至对象。您可以通过提供用户名来添加用户，或添加其主题标签来添加项目。例如使用“%s”添加用户“alincoln”，并添加主题标签为“#ios”的项目为订阅者。
    无效或未受认可的订阅者会被忽略。如果您并未指定任何订阅者，则此命令没有影响。
    在电子邮件本身被CC的用户也会自动订阅，只要Phabricator知道哪个账户链接的是其电子邮件地址的话。',
      'Add rule author as subscriber.' => '添加规则作者为订阅者。',
      'Add subscribers.' => '添加订阅者。',
      'Get information about subscribers.' => '获取有关订阅者的信息。',
    );
  }

}
