<?php

final class PhabricatorSubscriptionsZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Remove me as a subscriber' => '将我从订阅者中移除',
      'Support for Subscriptions' => '订阅支持',
      'Automatically Subscribed' => '已自动订阅',
      'You are automatically subscribed to this object.' => '您已自动订阅此对象。',
      'Added Subscribers' => '已添加订阅者',
      'Removed %s subscriber(s): %s.' => '已移除%s个订阅者：%s。',
      'Unsubscribe' => '取消订阅',
      'Add me as a subscriber' => '将我添加为订阅者',
      'Choose subscribers.' => '选择订阅者。',
      '%s, %s, %s and %s' => '%s、%s、%s和%s',
      'Change Subscribers' => '更改订阅者',
      'Add rule author as subscriber.' => '添加规则作者为订阅者。',
    );
  }

}
