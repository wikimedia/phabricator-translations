<?php

final class PhabricatorLegalpadKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'All Signatures' => '모든 서명',
      'Only administrators may change whether a document requires a signature.' => '문서의 서명 필수 여부는 오직 관리자만이 변경할 수 있습니다.',
      'The name used by the signer.' => '서명자의 이름입니다.',
      'The email used by the signer.' => '서명자의 이메일 주소입니다.',
      'Signatures' => '서명',
    );
  }

}
