<?php

final class PhabricatorLegalpadJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'A valid email is required.' => '有効なメール アドレスが必要です。',
      'Email field is required.' => 'メール アドレス欄は必須です。',
      'Name field is required.' => '名前欄は必須です。',
      'Version %d (%s)' => 'バージョン %s (%s)',
      'Contact email is required.' => '連絡先メール アドレスは必須です。',
    );
  }

}
