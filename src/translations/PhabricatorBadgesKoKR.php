<?php

final class PhabricatorBadgesKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Create Badge' => '배지 만들기',
      'Edit Badge: %s' => '배지 편집: %s',
      'All Badges' => '모든 배지',
      'Revoke Badge' => '배지 철회',
      'Edit Badge' => '배지 편집',
      'Choose Badge Icon' => '배지 아이콘 선택',
      'Create a Badge' => '배지 만들기',
      'BADGE DETAIL' => '배지 세부사항',
      'Badge %d: %s' => '배지 %s: %s',
      'Quality' => '품질',
      'International' => '국제',
      '[Badge]' => '[배지]',
      'No badges found.' => '배지를 찾을 수 없습니다.',
      'Unknown Quality ("%s")' => '품질 알 수 없음 ("%s")',
      'New badge name.' => '새로운 배지 이름입니다.',
      'Can Create Badges' => '배지를 만들 수 있음',
      'Type a badge name...' => '배지 이름을 입력하십시오...',
    );
  }

}
