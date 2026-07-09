<?php

final class PhabricatorRemarkupKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Invalid markup engine.' => '유효하지 않은 마크업 엔진입니다.',
  'Process text through remarkup.' => '리마크업을 통해 텍스트를 처리합니다.',
  'Mentioning and Embedding objects' => '객체를 멘션 및 삽입',
  'Specialized Syntax' => '특수한 구문',
  'Remarkup Reference' => '리마크업 참조',
  'Input' => '입력',
  'Contents must be a list of strings.' => '내용은 문자열 목록이어야 합니다.',
  'Reference' => '각주',
);
  }

}
