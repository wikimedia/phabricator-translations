<?php

final class PhabricatorSubscriptionsKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'subscribers' => '구독자',
      'Remove me as a subscriber' => '나를 구독자에서 제거하기',
      'Support for Subscriptions' => '구독 지원',
      'Automatically Subscribed' => '자동으로 구독됨',
      '%d other(s)' => '기타 %s명',
      'Add subscribers' => '구독자 추가',
      'View All %d Subscriber(s)' => '모든 구독자 %s명 보기',
      'Remove subscribers' => '구독자 제거',
      'Removed %s subscriber(s): %s.' => '구독자 %s명을 제거했습니다: %s.',
      'Bad Object' => '잘못된 오브젝트',
      'Add users or projects as subscribers.' => '사용자나 프로젝트를 구독자로 추가합니다.',
      'Add subscribers: %s.' => '구독자 추가: %s.',
      'Add me as a subscriber' => '나를 구독자로 추가하기',
      '%s, %s, %s and %s' => '%s, %s, %s, %s',
      'Change Subscribers' => '구독자 변경',
      'This object is not subscribable.' => '이 오브젝트는 구독할 수 없습니다.',
    );
  }

}
