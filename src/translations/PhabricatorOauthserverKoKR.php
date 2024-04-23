<?php

final class PhabricatorOauthserverKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Server Error' => '서버 오류',
      'No clients found.' => '클라이언트가 없습니다.',
      'OAuth Login Provider' => 'OAuth 로그인 제공자',
      'This engine manages OAuth client applications.' => '이 엔진은 OAuth 클라이언트 애플리케이션을 관리합니다.',
      'OAuth Application' => 'OAuth 애플리케이션',
      'OAuth applications must have a name.' => 'OAuth 애플리케이션은 이름이 필수입니다.',
      'Client PHID' => '클라이언트 PHID',
      'Unsupported Response Type' => '지원하지 않는 응답 유형',
      'OAuth Authorizations' => 'OAuth 인가',
      'Invalid authorization code %s.' => '유효하지 않은 인가 코드 %s.',
      'Application %d' => '애플리케이션 %s',
      'You do not have permission to create OAuth applications.' => 'OAuth 애플리케이션을 만들 권한이 없습니다.',
      'Required parameter %s missing.' => '필요한 %s 변수가 없습니다.',
      'OAuth: %s' => 'OAuth: %s',
      'OAuth Applications' => 'OAuth 애플리케이션',
      'Generate Test Token' => '테스트 토큰 생성',
      'OAuth Not Available' => 'OAuth 사용 불가',
      'Create OAuth Server' => 'OAuth 서버 만들기',
      'New application name.' => '새로운 애플리케이션 이름입니다.',
      'OAuth Server' => 'OAuth 서버',
    );
  }

}
