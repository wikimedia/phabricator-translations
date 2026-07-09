<?php

final class PhabricatorMultimeterKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Samples' => '샘플',
  'Subprocesses' => '하위 프로세스',
  '(All)' => '(모두)',
  'Samples (%s - %s)' => '샘플 (%s - %s)',
  'By ID' => 'ID별',
  'Epoch' => '에포크',
  'Performance Sampler' => '성능 샘플러',
  'Rate' => '속도',
  '%s Req' => '%s 요청',
  'Multimeter User Guide' => '멀티미터 사용자 가이드',
  '%s Unit(s)' => '단위 %s개',
  'By Request' => '요청별',
  'By Host' => '호스트별',
  'Trying to unpause an active multimeter!' => '활성된 멀티미터를 일시 정지 해제하려고 했습니다!',
  'Web Request' => '웹 요청',
  'By Context' => '컨텍스트별',
  'Avg' => '평균',
  'By Label' => '레이블별',
  'Multimeter' => '멀티미터',
  'Viewer' => '열람자',
  '%s Event(s)' => '이벤트 %s개',
  'Static Resource' => '정적 리소스',
  'Multimeter Events' => '멀티미터 이벤트',
  'By Viewer' => '열람자별',
);
  }

}
