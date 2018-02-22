<?php

final class PhabricatorRemarkupKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => '유효하지 않은 마크업 엔진입니다.',
    );
  }

}
