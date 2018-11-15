<?php

final class PhabricatorRemarkupKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Phabricator 문맥에서 리마크업을 통해 텍스트를 처리합니다.',
      'Invalid markup engine.' => '유효하지 않은 마크업 엔진입니다.',
      'Content may not be empty.' => '내용은 빈 값일 수 없습니다.',
    );
  }

}
