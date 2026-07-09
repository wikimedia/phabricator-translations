<?php

final class PhabricatorPhrequentKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Working Now' => '현재 작업 중',
  'by nearest start date' => '시작 날짜가 가장 가까운 순',
  'You can not stop tracking time at a future time. Enter the current time, or a time in the past.' => '미래의 특정 시점에 시간 추적을 중지할 수는 없습니다. 현재 시간 또는 과거 시간을 입력하세요.',
  'Stop Time' => '중지 시간',
  'Stop Timer' => '타이머 중지',
  'Ended on %s' => '%s에 종료됨',
  'Unknown ended \'%s\'!' => '알 수 없는 종료됨 \'%s\'!',
  'Tracked %s so far' => '지금까지 %s 추적됨',
  'Tracked: %s' => '추적됨: %s',
  'Start Time' => '시작 시간',
  'Returns current objects being tracked in Phrequent.' => 'Phrequent에서 현재 추적 중인 객체를 반환합니다.',
  'Interrupted' => '중단됨',
  'Stop Tracking Time' => '시간 추적 중지',
  'Start Tracking Time' => '시간 추적 시작',
  'Stop Tracking' => '추적 중지',
  'Time Spent' => '소요된 시간',
  'Tracked %s' => '%s 추적함',
  'Phrequent Time' => 'Phrequent 시간',
  'Not Tracking Time' => '추적하지 않은 시간',
  'All Tracked' => '모든 추적됨',
  'by furthest end date' => '종료 날짜가 가장 먼 순',
  'Unknown order "%s".' => '알 수 없는 주문 "%s".',
  'by nearest end date' => '종료 날짜가 가장 가까운 순',
  'Ended' => '종료됨',
  'by furthest start date' => '시작 날짜가 가장 먼 순',
  'Stop' => '중지',
  'Not Working Now' => '현재 작동하지 않음',
  'Started At' => '시작됨:',
  'Start Tracking' => '추적 시작',
  '%s (%s ago)' => '%s (%s 전)',
  'Start Timer' => '타이머 시작',
  'What time did you start working?' => '작업을 시작한 시간은 언제인지?',
  'Phrequent' => 'Phrequent',
  'What time did you stop working?' => '작업을 중지한 시간은 언제인지?',
  'Track Time Spent' => '소요된 시간 추적',
  'Please choose a valid date.' => '유효한 날짜를 선택해 주세요.',
  'You are not currently tracking time on this object.' => '현재 이 객체의 시간 추적을 하고 있지 않습니다.',
  'Stop tracking time on an object by popping it from the stack.' => '스택에서 객체를 pop해서 객체의 시간 추적을 중지합니다.',
  'Start tracking time on an object by pushing it on the tracking stack.' => '추적 스택에 객체를 푸시해서 객체의 시간 추적을 시작합니다.',
  'Stop time must be after start time.' => '종료 시간은 시작 시간 이후여야 합니다.',
  'Currently Tracking' => '현재 추적 중',
  'You can not start tracking time at a future time. Enter the current time, or a time in the past.' => '미래의 특정 시점부터 시간 추적을 시작할 수는 없습니다. 현재 시간 또는 과거의 특정 시점을 입력하세요.',
);
  }

}
