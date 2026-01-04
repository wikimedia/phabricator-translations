<?php

final class PhabricatorLegalpadKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'All Signatures' => '모든 서명',
      'Unverified Email' => '확인되지 않은 이메일',
      'Only administrators may change whether a document requires a signature.' => '문서의 서명 필수 여부는 오직 관리자만이 변경할 수 있습니다.',
      'Contact Email' => '연락처 이메일',
      'The name used by the signer.' => '서명자가 사용한 이름입니다.',
      'The email used by the signer.' => '서명자가 사용한 이메일입니다.',
      'Signatures' => '서명',
    );
  }

}
