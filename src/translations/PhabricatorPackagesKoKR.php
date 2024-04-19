<?php

final class PhabricatorPackagesKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Package Key' => '패키지 키',
      'Read information about versions.' => '버전에 관한 정보를 읽습니다.',
      'All Versions' => '모든 버전',
    );
  }

}
