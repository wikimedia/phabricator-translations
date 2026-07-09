<?php

final class PhabricatorSubscriptionsKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Mute' => '음소거',
  'Subscriber' => '구독자',
  'Unmute Notifications' => '알림 음소거 해제',
  'subscribers' => '구독자',
  'Remove me as a subscriber' => '나를 구독자에서 제거하기',
  'Remove subscribers.' => '구독자를 제거합니다.',
  'Unmute this object? You will receive notifications and email again.' => '이 객체의 음소거를 해제하시겠습니까? 그러면 알림과 이메일을 다시 받게 됩니다.',
  'Set subscribers, overwriting current value.' => '구독자를 설정하고 현재 값을 덮어씁니다.',
  'Support for Subscriptions' => '구독 지원',
  'Automatically Subscribed' => '자동으로 구독됨',
  '%d other(s)' => '기타 %d명',
  'You are automatically subscribed to this object.' => '이 객체를 자동으로 구독했습니다.',
  'Remove yourself as a subscriber.' => '나를 구독자에서 제거합니다.',
  'View All %d Subscriber(s)' => array(
    '구독자 보기',
    '모든 구독자 %d명 보기',
  ),
  'Subscriptions' => '구독',
  'Search for objects with certain subscribers.' => '특정 구독자를 통해 객체를 검색합니다.',
  'Subscribers can take this action.' => '구독자는 이 작업을 할 수 있습니다.',
  'Unmute' => '음소거 해제',
  'All %d subscribers removed by %s' => '%2$s님이 제거한 모든 구독자 %d명',
  'Added Subscribers' => '추가된 구독자',
  'Mute this object? You will no longer receive notifications or email about it.' => '이 객체를 음소거합니까? 더 이상 관련한 알림이나 이메일을 받지 않습니다.',
  'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => '대상이 이전에 구독을 해제했기 때문에 재구독이 거부되었습니다: %2$s.',
  'Removed %s subscriber(s): %s.' => '구독자를 제거했습니다: %2$s.',
  'Unsubscribe' => '구독 해지',
  'Bad Object' => '잘못된 객체',
  'Add users or projects as subscribers.' => '사용자나 프로젝트를 구독자로 추가합니다.',
  'Removed Subscribers' => '제거된 구독자',
  'All %d subscribers added by %s' => '%2$s님이 인해 추가한 모든 구독자 %d명',
  'Add me as a subscriber' => '나를 구독자로 추가하기',
  'Mute Notifications' => '알림 음소거',
  '%s automatically subscribed target(s) were not affected: %s.' => '자동으로 구독된 대상은 영향을 받지 않았습니다: %2$s.',
  'Set subscribers to' => '구독자를 다음으로 설정',
  'Choose subscribers.' => '구독자를 선택합니다.',
  '%s, %s, %s and %s' => '%s, %s, %s, %s',
  'Previously Unsubscribed' => '이전에 구독하지 않았음',
  'Change Subscribers' => '구독자 변경',
  'This object is not subscribable.' => '이 객체는 구독할 수 없습니다.',
  'This object is temporary and cannot be subscribed to.' => '이 객체는 임시 객체이므로 구독할 수 없습니다.',
  'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.

Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.

Users who are CC\'d on the email itself are also automatically subscribed if their addresses are associated with a known account.' => '객체에 하나 이상의 구독자를 추가합니다. 사용자 이름을 입력하여 사용자를 추가하거나 해시태그를 입력하여 프로젝트를 추가할 수 있습니다. 예를 들어, `%s`을(를) 사용하면 사용자 `alincoln`과 해시태그 `#ios`가 있는 프로젝트를 구독자로 추가할 수 있습니다.

유효하지 않거나 인식되지 않는 구독자는 무시됩니다. 구독자를 지정하지 않으면 이 명령은 아무런 효과가 없습니다.

이메일 본문에 참조로 추가된 사용자의 주소가 알려진 계정과 연결되어 있는 경우 자동으로 구독됩니다.',
  'Add rule author as subscriber.' => '구독자로 규칙 작성자를 추가합니다.',
  'Added %s subscriber(s): %s.' => '구독자를 추가했습니다: %2$s.',
  'Remove rule author as subscriber.' => '구독자로 규칙 작성자를 제거합니다.',
  'Add subscribers.' => '구독자를 추가합니다.',
  'Get information about subscribers.' => '구독자에 대한 정보를 가져옵니다.',
);
  }

}
