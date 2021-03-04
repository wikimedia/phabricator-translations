<?php

final class PhabricatorConsoleKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Internal ID' => '내부 ID',
      'Error Log (%d)' => '오류 로그 (%s)',
      'Realtime' => '실시간',
      'Site' => '사이트',
      '+%s ms' => '+%s ms',
      'Machine' => '머신',
      'Reconnect' => '다시 연결',
      'No errors.' => '오류가 없습니다.',
      'Event Log' => '이벤트 로그',
      'Installation Guide' => '설치 가이드',
      'Error Log' => '오류 기록',
      'Controller' => '컨트롤러',
      'Information about services.' => '서비스에 관한 정보입니다.',
      'Unknown event: %s' => '알 수 없는 이벤트: %s',
      'Shows errors and warnings.' => '오류와 경고를 표시합니다.',
      'Events' => '이벤트',
      'Hostname' => '호스트 이름',
      'No Tables' => '테이블 없음',
    );
  }

}
