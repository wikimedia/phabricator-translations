<?php

final class PhabricatorXhprofKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
      '%s μs' => '%s μs',
      '%s Profile' => '%s 프로파일',
      'Drag and drop .xhprof files to import them.' => '.xhprof 파일을 가져오려면 해당 파일을 끌어 놓으십시오.',
      'PHP Profiling Tool' => 'PHP 프로파일링 도구',
      'XHProf Profile' => 'XHProf 프로파일',
      'Drop .xhprof Files to Import' => '가져올 .xhprof 파일을 놓으십시오',
    );
  }

}
