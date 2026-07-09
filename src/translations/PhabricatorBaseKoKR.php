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
  'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => '요청에 제한된 "%s" 매개변수가 포함되어 있으나, 이 컨트롤러("%s")는 해당 매개변수를 허용 목록에 포함하지 않았습니다. 이 요청이 리디렉션 공격의 일부일 수 있으므로 처리를 거부합니다.',
  'Unknown capability \'%s\'!' => '알 수 없는 기능 \'%s\'!',
  'Unable to find transaction query for object of class "%s".' => '"%s" 클래스 객체에 대한 트랜잭션 쿼리를 찾을 수 없습니다.',
);
  }

}
