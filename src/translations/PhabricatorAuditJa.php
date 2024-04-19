<?php

final class PhabricatorAuditJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'A commit is created.' => 'コミットが作成されました。',
      'USERS' => 'ユーザー',
      '%s added subscribers: %s.' => '%s が購読者を追加しました: %s',
      '%s added subscribers...' => '%s が購読者を追加しました...',
      'All Commits' => 'すべてのコミット',
      'none' => 'なし',
      '%s removed subscribers: %s.' => '%s が購読者を除去しました: %s',
      'A commit is accepted.' => 'コミットが受理されました。',
    );
  }

}
