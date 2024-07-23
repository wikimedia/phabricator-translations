<?php

final class PhabricatorBaseKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => '\'%s\' 애플리케이션이 없습니다!',
      'Can Configure Application' => '애플리케이션 구성 가능',
      'Can Use Application' => '애플리케이션 사용 가능',
      'Core Applications' => '코어 애플리케이션',
      'No application!' => '애플리케이션이 없습니다!',
      '%s Application' => '%s 애플리케이션',
      'Developer Tools' => '개발자 도구',
      'Unknown capability \'%s\'!' => '알 수 없는 권한 \'%s\'!',
    );
  }

}
