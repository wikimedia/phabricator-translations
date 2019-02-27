<?php

final class PhabricatorPhragmentKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
      'Unable to open ZIP.' => 'ZIP을 열 수 없습니다.',
      'Download Snapshot as ZIP' => '스냅샷을 ZIP으로 다운로드',
      'Download Contents as ZIP' => '콘텐츠를 ZIP으로 다운로드',
      'Delete Snapshot' => '스냅샷 삭제',
      'Deleting this snapshot is a permanent operation. You can not recover the state of the snapshot.' => '이 스냅샷을 지우는 것은 영구적인 작업입니다. 스냅샷의 상태를 복구할 수 없습니다.',
      'Latest Version' => '최신 버전',
      'ZIP Extension Not Installed' => 'ZIP 확장 기능이 설치되어 있지 않음',
      'Really delete this snapshot?' => '이 스냅샷을 정말로 삭제하시겠습니까?',
      'The specified file doesn\'t exist.' => '지정된 파일이 존재하지 않습니다.',
      'Directory' => '디렉터리',
      'Snapshots' => '스냅샷',
      'Snapshot Name' => '스냅샷 이름',
      'File ID' => '파일 ID',
      'Parent Path' => '부모 경로',
      'The file associated with this version was not found.' => '이 버전에 연결된 파일을 찾을 수 없습니다.',
      'Snapshot: %s' => '스냅샷: %s',
      '%s must be configured!' => '%s의 구성은 필수입니다!',
      'File (Deleted)' => '파일 (삭제됨)',
      'Last Updated %s' => '마지막 업데이트: %s',
      'View Snapshot' => '스냅샷 보기',
      '"%s" Snapshot' => '"%s" 스냅샷',
      'Download' => '다운로드',
      'You must specify a name.' => '이름을 지정해야 합니다.',
      'This system does not have the ZIP PHP extension installed. This is required to download ZIPs from Phragment.' => '이 시스템은 ZIP PHP 확장 기능이 설치되어 있지 않습니다. Phragment로부터 ZIP을 다운로드하려면 필요합니다.',
      'Snapshot' => '스냅샷',
      'Prior to Version 0' => '버전 0 이전',
      'Convert to File' => '파일로 변환',
      'Create Snapshot of %s' => '%s의 스냅샷 만들기',
      'Unable to create ZIP archive!' => 'ZIP 아카이브를 만들 수 없습니다!',
    );
  }

}
