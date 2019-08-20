<?php

final class PhabricatorHelpKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => '이 대화상자를 포함한 모든 대화상자를 닫습니다.',
      'Change Settings' => '설정 변경',
      '%s Help' => '%s 도움말',
      'Keyboard Shortcuts' => '단축 키',
    );
  }

}
