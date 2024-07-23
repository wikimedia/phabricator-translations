<?php

final class PhabricatorConfigJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Array containing list of uninstalled applications.' => 'アンインストールされたアプリケーションのリストを含む配列。',
      'Client Server' => 'クライアントサーバ',
      'Update configuration in the database instead of in local configuration.' => 'ローカル構成ではなくデータベースで構成を更新します。',
      'Column/Key' => '列/キー',
      'Customize the logo and wordmark text in the header.' => 'ヘッダー内のロゴとワードマークのテキストをカスタマイズします。',
      'Configuring File Storage' => 'ファイルストレージの設定',
      '%s / %s' => '%s / %s',
      'Memory Usage' => 'メモリ使用量',
      'Table' => '表',
      'Ignore Setup Issue' => '設定の問題を無視',
      'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.
    You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => 'このオプションにより、ログインしていない（匿名）利用者でもすべてのページでDarkConsoleを有効に設定できます。ログアウトしたページでバグ修正をする場合に限定してとても便利です。このオプションを製作で有効にしてはいけません。このオプションを有効にするには、「%s」を設定してDarkConsoleを有効にします。',
      'Usage' => '使用法',
      'Access Denied' => 'アクセス拒否',
      'Can Not Connect to MySQL' => 'MySQLに接続できません',
      '(%s%s) %s' => '(%s%s) %s',
      'Pattern' => 'パターン',
      'Clients' => 'クライアント',
      ' (%s)' => ' (%s)',
      'User Guide: Amazon RDS' => 'ユーザー ガイド: Amazon RDS',
      'Database' => 'データベース',
      'Cache namespace.' => 'キャッシュ名前空間。',
      '%s = 0' => '%s = 0',
      'The namespace that databases should use.' => 'データベースが既定にする名前空間。',
      'PHP Documentation' => 'PHP 説明書',
      'PHP OPcache Documentation' => 'PHP OPcache 説明書',
      '<none>' => '<なし>',
      'Host: %s' => 'ホスト: %s',
      'Resolved Issue' => '解決済の問題',
      'User Guide: Prototype Applications' => 'ユーザー ガイド: プロトタイプ アプリケーション',
      '%s.%s (%s)' => '%s.%s (%s)',
      'Syntax Highlighting' => '構文の強調',
      'Databases are created in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing extensions and using namespaces to separate multiple sandbox datasets.' => 'Phabricatorはデータベースを既定で「phabricator」となる名前空間に置き -- 例としてDifferential （差分）データベースの名前空間は既定で「phabricator_differential」となります。名称は好みで変更できます。通常は名前空間名の変更は避けるべきで、Phabricatorの開発者がサンドボックスのデータセットを複数使いわけるため、名前空間を使い分ける場合は例外とします。',
      '%s.%s' => '%s.%s',
    );
  }

}
