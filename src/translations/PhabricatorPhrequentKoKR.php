<?php

final class PhabricatorPhrequentKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Start Time' => '시작 시간',
      'Ended' => '종료됨',
      'Start Tracking' => '추적 시작',
      'Please choose a valid date.' => '유효한 날짜를 선택해 주십시오.',
    );
  }

}
