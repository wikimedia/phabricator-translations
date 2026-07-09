<?php

final class PhabricatorXhprofKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'XHProf Samples' => 'XHProf 샘플',
  'Sampled (1/%d)' => '샘플됨 (1/%d)',
  'All Samples' => '모든 샘플',
  'Parent Calls' => '상위 호출',
  'Wall Time (Inclusive)' => '실제 경과 시간 (Inclusive)',
  'Symbol' => '심볼',
  'Wall Time (Exclusive)' => '실제 경과 시간 (Exclusive)',
  'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => '이 함수와 그 모든 하위들에 걸린 실제 경과 시간입니다 (하위들은 실행 중에 호출된 다른 함수).',
  '%s μs' => '%s μs',
  'Unnamed Sample' => '이름 없는 샘플',
  '%s Profile' => '%s 프로파일',
  'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => '하위들에 걸린 시간을 제외한, 이 함수에 걸린 실제 경과 시간입니다 (하위들은 실행 중에 호출된 다른 함수).',
  'Manual Run' => '수동 실행',
  'Drag and drop .xhprof files to import them.' => '.xhprof 파일을 가져오려면 해당 파일을 끌어 놓으세요.',
  'PHP Profiling Tool' => 'PHP 프로파일링 도구',
  'Metrics for this Call' => '이 호출의 통계',
  'Failed to unserialize XHProf profile!' => 'XHProf 프로필을 역직렬화하는데 실패했습니다!',
  'XHProf Profile' => 'XHProf 프로파일',
  'Drop .xhprof Files to Import' => '가져올 .xhprof 파일을 놓으세요',
  'Wall Time' => '실제 경과 시간',
  'Download %s Profile' => '%s 프로필을 다운로드',
  'Child Calls' => '하위 호출',
);
  }

}
