<?php

final class PhabricatorOwnersKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      '"" (empty string)' => '"" (빈 문자열)',
      'Validating...' => '확인 중...',
      'owner' => '소유자',
      'Review All Changes' => '모든 변경사항 검토',
      'Review All Changes (Blocking)' => '모든 변경사항 검토 (차단)',
      '[Package]' => '[패키지]',
      'Owned' => '소유됨',
      '%s added %s owner(s): %s.' => '%s님이 소유자 %s명을 추가했습니다: %s.',
    );
  }

}
