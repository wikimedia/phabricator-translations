<?php

final class PhabricatorMetaKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Information' => '정보',
      'Create Application' => '애플리케이션 만들기',
      'Really uninstall the %s application?' => '%s 애플리케이션을 정말로 제거하시겠습니까?',
      'Type an application name...' => '애플리케이션 이름을 입력하십시오...',
    );
  }

}
