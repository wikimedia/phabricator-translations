<?php

final class PhabricatorAuditKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'USERS' => '사용자',
      'Updating "%s" (%s)...' => '"%s" (%s) 업데이트 중...',
      'All Commits' => '모든 커밋',
      'Identifiers' => '식별자',
      'none' => '없음',
      'Synchronizing "%s": "%s" -> "%s".' => '동기화 중 "%s": "%s" -> "%s".',
      'No such user with username "%s"!' => '"%s" 사용자 이름의 사용자가 없습니다!',
      'No such commit "%s"!' => '"%s" 커밋이 없습니다!',
      'View Commit' => '커밋 보기',
    );
  }

}
