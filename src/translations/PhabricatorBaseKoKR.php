<?php

final class PhabricatorBaseKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => '\'%s\' 애플리케이션이 업습니다!',
      'Can Configure Application' => '애플리케이션 구성 가능',
      'Can Use Application' => '애플리케이션 사용 가능',
      'Public + configured' => '공개 + 구성됨',
      'Public Access' => '공개 접근',
      'Core Applications' => '코어 애플리케이션',
      'No Login Required' => '로그인 불필요',
      'No application!' => '애플리케이션이 없습니다!',
      '%s Application' => '%s 애플리케이션',
      'Email Verification Required' => '이메일 인증 필요',
      'Developer Tools' => '개발자 도구',
      'Expect user \'%s\' to be denied access to \'%s\'.' => '사용자 \'%s\'님은 \'%s\'에 접근할 권한이 없는 것으로 간주됩니다.',
      'Unknown capability \'%s\'!' => '알 수 없는 권한 \'%s\'!',
      'Admin Required' => '관리자 권한 필요',
    );
  }

}
