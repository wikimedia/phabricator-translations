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
  'Lowercase letters, digits, dot and hyphen only.' => '소문자, 숫자, 마침표, 하이픈만 허용됩니다.',
  'Edit Variable: %s' => '변수 편집: %s',
  'Key/Value Configuration Store' => '키/값 구성 저장소',
  'Variable "%s"' => '변수 "%s"',
  'Phlux Variables' => 'Phlux 변수',
  'Enter value as JSON.' => '값을 JSON으로 입력하세요.',
  'Variable key must be unique.' => '변수 키는 유일해야 합니다.',
  'Create Variable' => '변수 만들기',
  'Phlux' => 'Phlux',
  '%s updated this variable.' => '%s이(가) 이 변수를 업데이트했습니다.',
  '%s created this variable.' => '%s님이 이 변수를 만들었습니다.',
  'Edit Variable' => '변수 편집',
  'Variable List' => '변수 목록',
  'Variable key is required.' => '변수 키는 필수입니다.',
  'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => '변수 키 "%s"는 소문자, 숫자, 마침표, 하이픈만 포함되어야 합니다.',
);
  }

}
