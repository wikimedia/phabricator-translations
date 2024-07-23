<?php

final class PhabricatorTypeaheadKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Invalid Parameters' => '유효하지 않는 변수',
      'Raw Query' => '순수 쿼리',
      'Token Results (%s)' => '토큰 결과 (%s)',
      'Image URI' => '그림 URI',
      'Select' => '선택',
      'Display Name' => '표시 이름',
      'This source is not usable directly.' => '이 소스를 직접 사용할 수 없습니다.',
      'More Results' => '더 많은 결과',
      'Sprite' => '스프라이트',
      'Auto' => '자동',
    );
  }

}
