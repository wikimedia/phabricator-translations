<?php

final class PhabricatorTokensKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      '100',
      'Love' => '사랑',
      'Query tokens.' => '쿼리 토큰입니다.',
      'Barnstar' => '반스타',
      '%s Token' => '%s 토큰',
      'No such object "%s"!' => '"%s" 오브젝트가 없습니다!',
      'No such token "%s"!' => '"%s" 토큰이 없습니다!',
      'The name of the token.' => '토큰 이름입니다.',
      'Tokens: %s' => '토큰: %s',
      'Cookie' => '쿠키',
    );
  }

}
