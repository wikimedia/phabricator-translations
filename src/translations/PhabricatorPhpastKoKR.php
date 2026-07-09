<?php

final class PhabricatorPhpastKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Generate PHP AST' => 'PHP AST 생성',
  'PHPAST' => 'PHPAST',
  'Node %d: %s' => '노드 %d: %s',
  'Generate XHP AST' => 'XHP AST 생성',
  'Use PHPAST' => 'PHPAST 사용',
  'Token %d: %s' => '토큰 %d: %s',
  'Use XHPAST' => 'XHPAST 사용',
  'XHPAST View' => 'XHPAST 보기',
  'PHPAST View' => 'PHPAST 보기',
  'Parse' => '구문 분석',
  'No such AST!' => '해당 AST가 없습니다!',
  'Visual PHP Parser' => '시각적 PHP 파서',
);
  }

}
