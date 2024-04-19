<?php

final class PhabricatorConpherenceKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'New Message' => '새 메시지',
      'Log In to Participate' => '참여를 위해 로그인',
      'Send a message...' => '메시지 보내기...',
      'Messages: %d' => '메시지: %s',
      'Topic' => '주제',
      'Search %s...' => '%s 검색...',
      'Theme' => '테마',
      'No Sound' => '소리 없음',
      'Last updated %s' => '%s 마지막 업데이트',
      'You must specify a title.' => '제목을 지정해야 합니다.',
    );
  }

}
