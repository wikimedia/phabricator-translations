<?php

final class PhabricatorAphlictJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'The notification server should not be run as root.' => '通知サーバーをrootとして実行しないでください。',
      'Failed to %s!' => '%sに失敗しました!',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'エラー:PHP関数%sは無効です。 このマシンでAphlictを実行するには、それを有効にする必要があります。',
      'Stop the notification server.' => '通知サーバーを停止します。',
      'Configuration file is not properly formatted JSON. %s' => '設定ファイルの形式がJSONではありません:%s',
      'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => '`%s`や` %s`バイナリは%sでは見つかりませんでした。 Aphlictサーバーを起動するにはNode.jsをインストールする必要があります。',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'エラー:PHP拡張 \'%s\'はインストールされていません。このマシンでAphlictを実行するには、それをインストールする必要があります。',
      'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s' => '指定されたログファイル(インデックス "%2$s")のディレクトリ "%1$s"の作成に失敗しました。このディレクトリを手動で作成するか、別のログファイルの場所を選択する必要があります。%s',
      'Configuration file has improper configuration keys at top level. %s' => '構成ファイルのトップレベルに不適切な構成キーがあります。%s',
      'Aphlict is not running.' => 'Aphlictは実行されていません。',
      'You must %s first!' => 'あなたはまず%sする必要があります!',
      'A specified server (at index "%s", on port "%s") specifies a value for "%s", but no value for "%s" or "%s". Servers should only provide an SSL chain if they also provide an SSL key and SSL certificate.' => '指定されたサーバ(インデックス "%s"、ポート "%s")は "%s"の値を指定しますが、 "%s"または "%s"の値は指定しません。 サーバーはSSLキーとSSL証明書も提供する場合にのみ、SSLチェーンを提供する必要があります。',
    );
  }

}
