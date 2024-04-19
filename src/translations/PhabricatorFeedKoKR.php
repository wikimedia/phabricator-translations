<?php

final class PhabricatorFeedKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Include Projects' => '프로젝트 포함',
      'All Transactions' => '모든 트랜잭션',
    );
  }

}
