<?php

final class PhabricatorMultimeterKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      '(All)' => '(모두)',
      'Web Request' => '웹 요청',
      'Avg' => '평균',
      'Viewer' => '뷰어',
      '%s Event(s)' => '이벤트 %s개',
    );
  }

}
