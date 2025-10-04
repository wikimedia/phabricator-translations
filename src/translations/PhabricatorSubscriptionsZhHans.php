<?php

final class PhabricatorSubscriptionsZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Mute' => '屏蔽',
      'Subscriber' => '订阅者',
      'Unmute Notifications' => '取消屏蔽通知',
      'subscribers' => '订阅者',
      'Remove me as a subscriber' => '将我从订阅者中移除',
      'Remove subscribers.' => '移除订阅者。',
      'Unmute this object? You will receive notifications and email again.' => '取消屏蔽此对象？您会再次收到关于此对象的通知和电子邮件。',
      'Set subscribers, overwriting current value.' => '设置订阅者，覆盖当前值。',
      'Support for Subscriptions' => '订阅支持',
      'Automatically Subscribed' => '已自动订阅',
      '%d other(s)' => '其他%s位',
      'You are automatically subscribed to this object.' => '您已自动订阅此对象。',
      'Remove yourself as a subscriber.' => '将您自己从订阅者里移除。',
      'View All %d Subscriber(s)' => '查看所有%s个订阅者',
      'Search for objects with certain subscribers.' => '搜索特定订阅者的对象。',
      'Subscribers can take this action.' => '订阅者可进行此操作。',
      'Unmute' => '取消屏蔽',
      'All %d subscribers removed by %s' => '%2$s移除了所有%1$s个订阅者',
      'Added Subscribers' => '已添加订阅者',
      'Mute this object? You will no longer receive notifications or email about it.' => '屏蔽此对象？您将不会再收到关于此对象的通知或电子邮件。',
      'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => '已拒绝重新订阅%s个目标，因为它们先前已被取消订阅：%s。',
      'Removed %s subscriber(s): %s.' => '已移除%s个订阅者：%s。',
      'Bad Object' => '错误对象',
      'Add users or projects as subscribers.' => '添加用户或项目为订阅者。',
      'Removed Subscribers' => '已移除订阅者',
      'All %d subscribers added by %s' => '%2$s添加了%1$s个订阅者',
      'Add me as a subscriber' => '将我添加为订阅者',
      'Mute Notifications' => '屏蔽通知',
      '%s automatically subscribed target(s) were not affected: %s.' => '%s个已自动订阅的目标不会受到影响：%s。',
      'Set subscribers to' => '将订阅者设置为',
      'Choose subscribers.' => '选择订阅者。',
      '%s, %s, %s and %s' => '%s、%s、%s和%s',
      'Previously Unsubscribed' => '先前已取消订阅',
      'Change Subscribers' => '更改订阅者',
      'This object is not subscribable.' => '此对象不可订阅。',
      'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.
    Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.
    Users who are CC\'d on the email itself are also automatically subscribed if their addresses are associated with a known account.' => '添加一个或多个订阅者至对象。您可以通过提供用户名来添加用户，或添加其主题标签来添加项目。例如使用“%s”添加用户“alincoln”，并添加主题标签为“#ios”的项目为订阅者。
    无效或未受认可的订阅者会被忽略。如果您并未指定任何订阅者，则此命令没有影响。
    在电子邮件本身被CC的用户也会自动订阅，只要其地址与已知账户关联。',
      'Add rule author as subscriber.' => '添加规则作者为订阅者。',
      'Added %s subscriber(s): %s.' => '已添加%s个订阅者：%s。',
      'Remove rule author as subscriber.' => '将规则作者从订阅者里移除。',
      'Add subscribers.' => '添加订阅者。',
      'Get information about subscribers.' => '获取有关订阅者的信息。',
    );
  }

}
