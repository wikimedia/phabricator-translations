<?php

final class PhabricatorextCoreJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Escalate' => 'エスカレート',
      'Next: %s' => '次は: %s',
      'Standard Phabricator.' => '標準的なPhabricatorです。',
      'Auto-generated release schedule details.' => '自動生成されたリリーススケジュールの詳細。',
      'This adds a link to search Maniphest for open tasks which are tagged with this project.\\n\\nNOTE: This feature is provided by a Wikimedia-maintained extension in ProjectOpenTasksProfileMenuItem.php. See https://gitlab.wikimedia.org/repos/phabricator/extensions for the source.' => 'このプロジェクトでタグ付けされたオープンタスクを検索するマニフェストへのリンクが追加されます。
    注：この機能はWikimedia-maintainedが管理する拡張機能、ProjectOpenTasksProfileMenuItemextensionによって提供されます。ソースは {rPHEX} をご覧ください。',
      'Merged' => '統合',
      'Unresolved code review comments: %d' => '未解決のコードレビューコメント: %s',
      'Customize query in gerrit' => 'gerritでのクエリのカスタマイズ',
      'Cannot Lock Task' => 'タスクをロックできません',
      'Deploy `%s` to %s Wikis.' => '`%s`を %s のWikiにデプロイします。',
      'Unknown objectType \'%s\'' => '不明なオブジェクトタイプ \'%s\'',
      'You do not have permission to escalate tasks as security issues. This action can only be taken by authorized users.' => 'タスクをセキュリティ問題としてエスカレーションする権限はありません。この操作は、許可された利用者のみが行うことができます。',
      'Show related patches' => '関連するパッチの表示',
      'Related Links' => '関連サイト',
      'No deployments on fridays' => '金曜日はデプロイメントを行わいません',
      'You must provide either a username or userPHID' => '利用者名またはuserPHIDのいずれかを指定する必要があります。',
      'MediaWiki base URI is required.' => 'MediaWikiのベースURIが必要です。',
      'Unknown policies: %s' => '不明なポリシー：%s',
      'OAuth JWT nonce didn\'t match what we sent.' => 'OAuth JWT nonceが送信したものと一致しませんでした。',
      'Protect as security issue' => 'セキュリティ問題として保護する',
      'OAuth JWT iss didn\'t match expected server name' => 'OAuth JWT iss が予想されるサーバー名と一致しません',
      'Show verbose output.' => '冗長な出力を表示します。',
      'OAuth JWT wasn\'t valid at this time' => 'OAuth JWTはこの時点では有効ではありません',
      'Any serious bugs affecting `%s` should be added as subtasks beneath this one.' => '`%s` に影響を与える重大なバグは、このタスクの下にサブタスクとして追加する必要があります。',
      'The username for whom transactions will be rolled back.' => 'トランザクションが巻き戻される利用者名です。',
      'ChangeId' => 'ChangeId',
      'Only admins can call this API' => '管理者のみがこのAPIを呼び出すことができます',
      'OAuth provider returned an error response.' => 'OAuthプロバイダがエラーを返してきました。',
      'Ensure Security Task Policies are Enforced' => 'セキュリティ・タスク・ポリシーの徹底',
      'Release Details' => 'リリース内容',
      'Allow' => '許可',
      'This MediaWiki Train Deployment is scheduled for the week of' => '今回のMediaWiki Train Deploymentは、以下の週に予定されています。',
      'Query users by ldap username.' => 'ldapの利用者名で利用者を検索します。',
      'LDAP User' => 'LDAP利用者',
      'Invalid action \'%s\'!' => '無効なアクション \'%s\'!',
      'Shows the gerrit Change ID for a commit.' => 'コミットの gerrit Change ID を表示します。',
      'This adds a link to the burnup graph of this project.\\n\\nNOTE: This feature is provided by a Wikimedia-maintained extension in ProjectBurnupGraphProfileMenuItem.php. See https://gitlab.wikimedia.org/repos/phabricator/extensions for the source.' => 'これにより、このプロジェクトでタグ付けされたオープンタスクを maniphest で検索するためのリンクが追加されます。
    注: この機能は、Wikimedia-maintained が管理する拡張機能 ProjectBurnupGraphProfileMenuItem によって提供されています。出典は{rPHEX}を参照してください。',
      'MediaWiki' => 'MediaWiki',
      'MediaWiki Base URI' => 'MediaWikiのベースURI',
      'Burnup Graph' => '燃焼グラフ',
      'Change type to "%s."' => 'タイプを "%s" に変更する。',
      'Execute searches for Policies.' => 'ポリシーの検索を実行します。',
      'Find public transactions by a particular user.' => '特定のユーザーによる公開取引を検索します。',
      'Skip OFFSET rows before processing the remaining transactions.' => '残りのトランザクションを処理する前に、OFFSET行をスキップします。',
      'Execute a rollback.' => 'ロールバックを実行する。',
      '**Step 2 of 2**: Create a MediaWiki OAuth consumer for this Phabricator instance.
    NOTE: Propose an OAuth 1.0a consumer with the form at this URL: %s
    Provide the following settings on the consumer registration:
      - **OAuth "callback" URL:** Set this to: `%s`
      - **Allow consumer to specify a callback in requests and use "callback" URL above as a required prefix:** Enable this setting.
      - **Applicable grants:** `Basic Rights` is all that is needed for authentication.
    After you register the consumer, a **Consumer Token** and consumer **Secret Token** will be provided to you by MediaWiki. To complete configuration of Phabricator, copy the provided keys into the corresponding fields above.
    NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the OAuth consumer registration using the form which can be found at the following url: %s' => '**ステップ2/2**: このPhabricatorインスタンス用のMediaWiki 利用者認証を作成します。
    注：利用者登録時に以下の設定を行います：%s
    利用者登録では、以下の設定を行います。
      - **コールバックURL:** これを設定します：`%s`
      - **Grants:** 認証に必要なのは `Basic Rights` だけです。
    利用者登録をすると、**利用者公開鍵** と **利用者秘密鍵** がMediaWikiから提供されます。Phabricatorの設定を完了するには、提供されたキーを上記の対応するフィールドにコピーします。
    注：PhabricatorがMediaWikiの認証に成功する前に、Wiki管理者が以下のURLにあるフォームを使用してoAuth利用者登録を承認する必要があります：%s',
      'Deny' => '拒否',
      'Invalid' => '無効',
      'Secret Token' => '秘密鍵',
      'Change type to' => '以下のタイプに変更',
      'Required' => '必須',
    );
  }

}
