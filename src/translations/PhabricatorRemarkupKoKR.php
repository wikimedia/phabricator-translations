<?php

final class PhabricatorRemarkupKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => '유효하지 않은 마크업 엔진입니다.',
      'Process text through remarkup.' => 'Phabricator 문맥에서 리마크업을 통해 텍스트를 처리합니다.',
      'Content may not be empty.' => '내용은 빈 값일 수 없습니다.',
    );
  }

}
