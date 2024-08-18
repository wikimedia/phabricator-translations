<?php

final class PhabricatorPhortuneJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Use Logo' => 'ロゴを使用する',
      'PayPal API Password is required.' => 'PayPal API パスワードは必須です。',
      '%s created this account.' => '%s がこのアカウントを作成しました。',
      'PayPal API Username is required.' => 'PayPal API ユーザー名は必須です。',
      'PayPal API Signature is required.' => 'PayPal API 署名は必須です。',
      'Mode is required.' => 'モードは必須です。',
      'Switch Accounts' => 'アカウントを切り替える',
      'Current Logo' => '現在のロゴ',
      'UNSUBSCRIBE' => '購読解除',
    );
  }

}
