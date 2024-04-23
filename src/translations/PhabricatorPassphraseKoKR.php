<?php

final class PhabricatorPassphraseKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Store an API token.' => 'API 토큰을 저장합니다.',
      'SSH Private Key (Generated)' => 'SSH 개인 키 (생성됨)',
      'Login/Username' => '로그인/사용자 이름',
      'Show Public Key' => '공개 키 표시',
      'The username can be no longer than %s characters.' => '이 사용자 이름은 %s자를 초과할 수 없습니다.',
      'SSH Private Key File' => 'SSH 개인 키 파일',
      'Public Key (%s)' => '공개 키 (%s)',
      'Private Key' => '개인 키',
      'Generate an SSH keypair.' => 'SSH 키 쌍을 생성합니다.',
      'SSH Private Key' => 'SSH 개인 키',
      'Lock Permanently' => '영구적으로 잠금',
      'Login: %s' => '로그인: %s',
    );
  }

}
