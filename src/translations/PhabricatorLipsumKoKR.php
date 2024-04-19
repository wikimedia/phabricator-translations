<?php

final class PhabricatorLipsumKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Unable to load symbol %s: this class does not exist.' => '%s 심볼을 불러올 수 없습니다: 이 클래스는 존재하지 않습니다.',
    );
  }

}
