<?php

final class PhabricatorBaseJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'アプリケーション「%s」はありません！',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => 'ユーザー\'%s\'が\'%s\'へのアクセスを許可する事を期待する。',
      'Can Configure Application' => 'アプリケーションの構成が可能',
      'Can Use Application' => '使用可能なアプリケーション',
      'Application Controller' => 'アプリケーション・コントローラー',
      'Public + configured' => '公開＋設定済み',
      'Public Access' => '一般公開',
      'Core Applications' => 'コア アプリケーション',
      'No Login Required' => 'ログイン不要',
      'No application!' => 'アプリケーションはありません',
      '%s Application' => '%s アプリケーション',
      'Email Verification Required' => 'メール認証が必要',
      'Application Controller, No Login Required' => 'アプリケーションコントローラ、ログイン不要',
      'Developer Tools' => '開発者用ツール',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'このアプリケーションはPhabricatorが動作するために必要です。したがって、すべてのユーザーはPhabricatorにアクセスする必要があります。',
      'Expect user \'%s\' to be denied access to \'%s\'.' => 'ユーザー\'%s\'が\'%s\'へのアクセスを拒否する事を期待する。',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'リクエストには制限付きパラメータ "%s" が含まれていますが、このコントローラ ("%s") はそれをホワイトリストに登録していません。リダイレクト攻撃の可能性があるため、このリクエストの処理を拒否します。',
      'Unknown capability \'%s\'!' => '不明な機能 \'%s\'!',
      'Admin Required' => '管理者権限が必須',
      'Email Verification Required, With Exception' => '電子メールによる認証が必要。例外あり',
      'Allow Disabled' => '無効にする',
      'Unable to find transaction query for object of class "%s".' => 'クラス "%s" のオブジェクトに対するトランザクション・クエリを見つけることができません。',
    );
  }

}
