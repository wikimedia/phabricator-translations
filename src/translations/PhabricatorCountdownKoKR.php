<?php

final class PhabricatorCountdownKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'COUNTDOWN DETAIL' => '카운트다운 세부사항',
      'Minutes' => '분',
      'Countdowns' => '카운트다운',
      'No countdowns found.' => '카운트다운이 없습니다.',
      'Hours' => '시간',
      'You do not have permission to create a countdown.' => '카운트다운을 만들 권한이 없습니다.',
      'Countdown' => '카운트다운',
      'Can Create Countdowns' => '카운트다운을 만들 수 있음',
      'Days' => '일',
    );
  }

}
