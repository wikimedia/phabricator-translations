<?php

final class PhabricatorPhluxKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
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
