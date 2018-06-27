<?php

final class PhabricatorChatlogKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(사용되지 않음)',
      'ChatLog' => '챗기록',
      'Channel List' => '채널 목록',
      'Hide Dates' => '날짜 숨기기',
      'Channel Log' => '채널 기록',
      'Search Dates' => '날짜 검색',
      'Newest' => '최신',
      'Record chatter.' => '챗 내용을 기록합니다.',
    );
  }

}
