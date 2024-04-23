<?php

final class PhabricatorHarbormasterKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'TEST RESULT' => '테스트 결과',
      'For example:' => '예:',
      'You can only restart some builds.' => '일부 빌드만 다시 시작할 권한이 있습니다.',
      'Publishing "%s"...' => '"%s" 게시 중...',
      'This test has too much data to display inline.' => '이 테스트는 인라인으로 표시하기에 데이터가 너무 많습니다.',
      'Run %d' => '%s 실행',
      'You must have edit permission on this build plan to pause, abort, resume, or restart it.' => '빌드를 일시 중지, 중지, 재개, 다시 시작하려면 이 빌드 계획의 편집 권한이 필요합니다.',
      'Unable to Load File' => '파일을 불러올 수 없습니다',
      'If Complete' => '완료한 경우',
      'INVALID' => '유효하지 않음',
      'Already Restarting' => '이미 재시작 중',
      'Build Status' => '빌드 상태',
      'HTTP Request' => 'HTTP 요청',
      'If Viewable' => '보기가 가능한 경우',
      'Runnable' => '실행 가능',
      'Status "%s" is not a valid build plan status. Valid statuses are: %s.' => '"%s" 상태는 유효한 빌드 계획 상태가 아닙니다. 유효한 상태는 다음과 같습니다: %s.',
      'This build can not be restarted because the build plan is configured to prevent the build from restarting.' => '빌드 계획이 빌드 재시작을 하지 않도록 구성되어 있기 때문에 이 빌드를 재시작할 수 없습니다.',
      'Restartable' => '재시작 가능',
      'View Details' => '자세한 내용 보기',
      'Preparing' => '준비 중',
      'Unable to find lines.' => '줄을 찾을 수 없습니다.',
      'You can not restart this build because you do not have permission to access the build plan.' => '빌드 계획에 접근할 권한이 없기 때문에 이 빌드를 다시 시작할 수 없습니다.',
      '%s: %s -> %s' => '%s: %s -> %s',
      'Syntax Error' => '구문 오류',
      'Recent Builds' => '최근 빌드',
      'Build Failed' => '빌드 실패',
      'If Building' => '빌드 중인 경우',
      'HTTP Method' => 'HTTP 메서드',
      'If Editable' => '편집이 가능한 경우',
      'Targets' => '대상',
      'No recent builds.' => '최근 빌드가 없습니다.',
      'Option' => '옵션',
      '(%d - %d)' => '(%s - %s)',
      'View All Builds' => '모든 빌드 보기',
      'If Failed' => '실패한 경우',
    );
  }

}
