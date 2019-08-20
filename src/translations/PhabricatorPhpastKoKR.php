<?php

final class PhabricatorPhpastKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Node %d: %s' => '노드 %s: %s',
      'Token %d: %s' => '토큰 %s: %s',
      'No such AST!' => '해당 AST가 없습니다!',
    );
  }

}
