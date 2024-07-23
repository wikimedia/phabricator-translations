<?php

final class PhabricatorBaseJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'アプリケーション「%s」はありません！',
      'This application is required, so all users must have access to it.' => 'このアプリケーションは必須です。したがって、すべてのユーザーはPhabricatorにアクセスする必要があります。',
      'Can Configure Application' => 'アプリケーションの構成が可能',
      'Can Use Application' => '使用可能なアプリケーション',
      'Core Applications' => 'コア アプリケーション',
      'No application!' => 'アプリケーションはありません',
      '%s Application' => '%s アプリケーション',
      'Developer Tools' => '開発者用ツール',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'リクエストには制限付きパラメータ "%s" が含まれていますが、このコントローラ ("%s") はそれをホワイトリストに登録していません。リダイレクト攻撃の可能性があるため、このリクエストの処理を拒否します。',
      'Unknown capability \'%s\'!' => '不明な機能 \'%s\'!',
      'Unable to find transaction query for object of class "%s".' => 'クラス "%s" のオブジェクトに対するトランザクション・クエリを見つけることができません。',
    );
  }

}
