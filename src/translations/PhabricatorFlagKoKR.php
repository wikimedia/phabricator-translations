<?php

final class PhabricatorFlagKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Removed "%s" flag.' => '"%s" 플래그를 제거했습니다.',
      'Remove %s flag.' => '%s 플래그를 제거합니다.',
      'Remove flag' => '플래그 제거',
      'Removed Flag' => '플래그 제거됨',
      'Already Marked' => '이미 표시됨',
    );
  }

}
