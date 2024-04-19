<?php

final class PhabricatorOauthserverJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Server Error' => 'サーバー エラー',
      'OAuth Application' => 'OAuth アプリケーション',
      'Revoke Authorization' => '認証を失効',
      'Application %d' => 'アプリケーション %s',
      'OAuth Application: %s' => 'OAuth アプリケーション: %s',
      '%s renamed this application from "%s" to "%s".' => '%s がこのアプリケーションの名前を「%s」から「%s」に変更しました。',
      'Enable Application' => 'アプリケーションを有効にする',
      'Revoke Authorization?' => '認証を失効させますか?',
      '%s changed the application redirect URI from "%s" to "%s".' => '%s がアプリケーション リダイレクト URI を「%s」から「%s」に変更しました。',
      'Disable Application' => 'アプリケーションを無効にする',
      '%s created this OAuth application.' => '%s がこの OAuth アプリケーションを作成しました。',
    );
  }

}
