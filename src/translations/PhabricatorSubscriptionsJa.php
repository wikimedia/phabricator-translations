<?php

final class PhabricatorSubscriptionsJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
  'Mute' => 'ミュート',
  'Subscriber' => '購読者',
  'Unmute Notifications' => '通知のミュートを解除',
  'subscribers' => '購読者',
  'Remove subscribers.' => '購読者を除去。',
  'Automatically Subscribed' => '自動購読',
  'View All %d Subscriber(s)' => array(
    '購読者を表示',
    '全%d人の購読者を表示',
  ),
  'Subscriptions' => '購読',
  'Unmute' => 'ミュートを解除',
  'Added Subscribers' => '追加された購読者',
  'Removed Subscribers' => '除去された購読者',
  'Mute Notifications' => '通知をミュート',
);
  }

}
