<?php

final class PhabricatorConsoleKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Listener Class' => '리스너 클래스',
  'Profiling was not enabled for this page. Use the button above to enable it.' => '이 페이지에는 프로파일링이 활성화되어 있지 않습니다. 위의 버튼을 사용하여 프로파일링을 활성화하세요.',
  'Internal ID' => '내부 ID',
  'Error Log (%d)' => '오류 로그 (%d)',
  'Debugging console for real-time notifications.' => '실시간 알림을 위한 디버그 콘솔입니다.',
  'Provides detailed PHP profiling information through XHProf.' => 'XHProf를 통해 자세한 PHP 프로파일링 정보를 제공합니다.',
  'Analyze Query Plans' => '쿼리 계획 분석',
  'Realtime' => '실시간',
  'Site' => '사이트',
  '+%s ms' => '+%s ms',
  'Calls to External Services' => '외부 서비스 호출',
  'Machine' => '머신',
  'Reconnect' => '다시 연결',
  'No errors.' => '오류가 없습니다.',
  'Startup' => '시작',
  'Information about %s and %s.' => '%s 및 %s에 대한 정보입니다.',
  'Timing information about the startup sequence.' => '시작 시퀀스에 대한 타이밍 정보입니다.',
  'Event Log' => '이벤트 로그',
  'Profile Page' => '프로필 문서',
  'Whole Table' => '전체 테이블',
  'Repaint' => '리페인트',
  'Small Table Scan' => '작은 테이블 스캔',
  'Installation Guide' => '설치 가이드',
  'Profile Permalink' => '프로필 영구 링크',
  'Error Log' => '오류 로그',
  'Controller' => '컨트롤러',
  'TABLE SCAN!' => '테이블 스캔!',
  'STOPPED' => '중지됨',
  'Information about services.' => '서비스에 관한 정보입니다.',
  'Unknown event: %s' => '알 수 없는 이벤트: %s',
  'Shows errors and warnings.' => '오류와 경고를 표시합니다.',
  'XHProf Profiler' => 'XHProf 프로파일러',
  'The "xhprof" PHP extension is not available. Install xhprof to enable the XHProf console plugin. You can find instructions in the %s.' => '"xhprof" PHP 확장 기능을 사용할 수 없습니다. XHProf 콘솔 플러그인을 활성화하려면 xhprof를 설치하세요. 설치 방법은 %s에서 확인할 수 있습니다.',
  'Replay' => '리플레이',
  'Can\'t Analyze' => '분석할 수 없음',
  'Events' => '이벤트',
  'Information about events and event listeners.' => '이벤트 및 이벤트 리스너에 대한 정보입니다.',
  'Page Weight' => '문서 가중치',
  'Hostname' => '호스트 이름',
  'Registered Event Listeners' => '등록된 이벤트 리스너',
  'No Tables' => '테이블 없음',
);
  }

}
