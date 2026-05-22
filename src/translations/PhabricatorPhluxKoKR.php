<?php

final class PhabricatorPhluxKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Update Variable' => '변수 업데이트',
  'Variable value must be valid JSON.' => '변수 값은 유효한 JSON이어야 합니다.',
  'Edit Variable: %s' => '변수 편집: %s',
  'Variable "%s"' => '변수 "%s"',
  'Phlux Variables' => 'Phlux 변수',
  'Create Variable' => '변수 만들기',
  'Phlux' => 'Phlux',
  'Edit Variable' => '변수 편집',
  'Variable List' => '변수 목록',
  'Variable key is required.' => '변수 키는 필수입니다.',
);
  }

}
