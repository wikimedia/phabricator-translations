<?php

final class PhabricatorAphlictJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'ユーザーに通知を送信します。',
      'The notification server should not be run as root.' => '通知サーバーをrootとして実行しないでください。',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => '2つのサーバー（インデックス "%s "と "%s"）が同じポート（"%s"）にバインドしている場合。各サーバーは一意のポートにバインドしなければならない。',
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
      'Sending %s a SIGKILL.' => '%sにSIGKILLを送信します。',
      'Launching server:' => 'サーバーを起動します：',
      'Starting Aphlict server in foreground...' => 'Aphlictサーバーをフォアグラウンドで起動…',
      'Server exited!' => 'サーバー停止！',
      'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => '通知サーバをフォアグラウンドで起動し、大量の診断情報をコンソールに出力します。',
      'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.' => '指定されたサーバ（インデックス "%s"、ポート "%s"）が無効なタイプ（"%s"）である。有効なタイプは、admin、clientです。',
      'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.' => '設定ファイルでは、クラスターピア"%s"を複数回（インデックス"%s"および"%s"で）指定しています。各ピアは、一意のホストとポートの組み合わせを持つ必要があります。',
      'Show the status of the notification server.' => '通知サーバーの状態を表示します。',
      'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => '設定ファイルにサーバーが指定されていない。このサービスは、どのポートもリッスンしない場合、外部と対話することができません。少なくとも1つの「%s」サーバーと、少なくとも1つの「%s」サーバーを指定する必要があります。',
      'Start the notifications server.' => '通知サーバーを起動します。',
      'User to notify.' => '通知するユーザー',
      'Stop, then start the notification server.' => '停止し、通知サーバーを起動します。',
      'Failed to read configuration file. %s' => '設定ファイルの読み込みに失敗しました。%s',
      'Writing logs to: %s' => 'ログの記録先: %s',
      'Specify a user to notify with "--user".' => '"--user" で通知するユーザーを指定します。',
      'A specified server (at index "%s", on port "%s") specifies only one of "%s" and "%s". Each server must specify neither (to disable SSL) or specify both (to enable it).' => '指定されたサーバー（インデックス「%s」、ポート「%s」）は、「%s」と「%s」のうち1つだけを指定します。各サーバーは、どちらも指定しないか（SSLを無効にするため）、両方を指定しなければなりません（SSLを有効にするため）。',
      'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => '設定ファイルにクライアントサーバーが指定されていない。このサービスは、クライアントサーバーがないと、通知を送信できません。少なくとも1つのサーバをタイプ "%s "で指定する必要があります。',
      'Message to send.' => '送信するメッセージ',
      'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => '設定ファイルに管理サーバーが指定されていない。このサービスは、メッセージを受信することができません。タイプ"%s"のサーバーを少なくとも1つ指定する必要があります。',
      'Aphlict Server (%s) exited normally.' => 'Aphlict Server (%s) は正常に終了しました。',
      'Reading configuration from: %s' => '読み出し設定元：%s',
      'Unable to start notifications server because it is already running. Use `%s` to restart it.' => '通知サーバーがすでに起動しているため、開始できません。`%s`を使用して再起動してください。',
      'Specify a message to send with "--message".' => '送信するメッセージは"--message"で指定します。',
      'Sent notification.' => '通知を送信しました',
      'Use a specific configuration file instead of the default configuration.' => 'デフォルトの設定ではなく、特定の設定ファイルを使用する。',
      'Configuration file specifies cluster peer ("%s", at index "%s") with an invalid protocol, "%s". Valid protocols are "%s" or "%s".' => '設定ファイルでは、クラスタピア（"%s"、インデックス "%s"）が無効なプロトコル "%s"で指定されています。有効なプロトコルは "%s" または "%s" です。',
      'Aphlict Server started.' => 'Aphlictサーバーを起動しました',
      'Stopping Aphlict Server (%s)...' => 'Aphlictサーバーの停止(%s)…',
      'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => '指定された PID ファイル用のディレクトリ "%s" の作成に失敗しました。このディレクトリを手動で作成するか、別のPIDファイルの場所を選択する必要があります。%s',
      'Aphlict (%s) is running.' => 'Aphlict(%s)が稼働しています',
    );
  }

}
