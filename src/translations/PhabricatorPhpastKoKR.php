<?php

final class PhabricatorPhpastKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'PHPAST' => 'PHPAST',
  'Node %d: %s' => '노드 %d: %s',
  'Generate XHP AST' => 'XHP AST 생성',
  'Token %d: %s' => '토큰 %d: %s',
  'No such AST!' => '해당 AST가 없습니다!',
  'Visual PHP Parser' => '시각적 PHP 파서',
);
  }

}
