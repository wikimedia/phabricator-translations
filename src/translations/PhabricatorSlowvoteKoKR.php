<?php

final class PhabricatorSlowvoteKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      '%s renamed %s.' => '%s님이 %s의 이름을 바꾸었습니다.',
      'Approval (Multiple Choice)' => '승인 (다중 선택)',
      '%s set the description of %s.' => '%s님이 %s의 설명을 설정했습니다.',
      'You must vote to see the results.' => '결과를 보려면 투표해야 합니다.',
      'Responses' => '응답',
      'You must offer at least one response.' => '적어도 하나의 응답을 제공해야 합니다.',
      '%s (%d / %d)' => '%s (%s / %s)',
      'Only you can see the results.' => '당신만이 결과를 볼 수 있습니다.',
      'Response %d' => '응답 %s',
    );
  }

}
