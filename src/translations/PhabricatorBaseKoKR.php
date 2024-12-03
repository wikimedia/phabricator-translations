<?php

final class PhabricatorBaseKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => '\'%s\' 애플리케이션이 없습니다!',
      'This application is required, so all users must have access to it.' => '이 애플리케이션은 필수이므로 모든 사용자가 접근할 수 있어야 합니다.',
      'Can Configure Application' => '애플리케이션 구성 가능',
      'Can Use Application' => '애플리케이션 사용 가능',
      'Core Applications' => '코어 애플리케이션',
      'No application!' => '애플리케이션이 없습니다!',
      '%s Application' => '%s 애플리케이션',
      'Developer Tools' => '개발자 도구',
      'Unknown capability \'%s\'!' => '알 수 없는 권한 \'%s\'!',
      'Unable to find transaction query for object of class "%s".' => '"%s" 클래스 개체에 대한 트랜잭션 쿼리를 찾을 수 없습니다.',
    );
  }

}
