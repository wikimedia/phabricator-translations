<?php

final class PhabricatorDiffusionJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'VCS Password' => 'VCS パスワード',
      'Set VCS Password' => 'VCS パスワードを設定する',
      'Remove VCS Password' => 'VCS パスワードの除去',
      'Type a user, project or package name...' => 'ユーザー名、プロジェクト名、パッケージ名を入力...',
      'Confirm VCS Password' => 'VCS パスワードの確認',
      'New VCS Password' => '新しい VCS パスワード',
      'Text Encoding' => 'テキストのエンコーディング',
      'Email Commands: Commits' => 'メール コマンド: コミット',
      'Locate File' => 'ファイル検索',
      'Type a symbol name...' => 'シンボル名を入力...',
      'Current Password' => '現在のパスワード',
      'Default Branch' => '既定のブランチ',
      'Parameter "%s" is required if "%s" is provided.' => '「%2$s」を入力した場合はパラメーター「%1$s」は必須です。',
      'Type a repository name...' => 'リポジトリ名を入力...',
      'No Password Set' => 'パスワードが設定されていません',
      'Git LFS Token' => 'Git LFS トークン',
      'Import Date (Newest First)' => 'インポート日 (新しい順)',
      'One of "%s" and "%s" is required.' => '「%s」と「%s」のいずれかが必須です。',
      'Manage Repository' => 'リポジトリを管理',
      'Import Date (Oldest First)' => 'インポート日 (古い順)',
      'Other Commits' => 'その他のコミット',
      'Commit Date (Newest First)' => 'コミット日 (新しい順)',
      'Error %d: %s' => 'エラー %s: %s',
      'Pattern Search' => 'パターン検索',
      'SSH Key' => 'SSH 鍵',
      'Commit Date (Oldest First)' => 'コミット日 (古い順)',
      'See More Branches' => 'その他のブランチを表示',
      'Unable to Continue' => '続行できません',
      'Use Default (UTF-8)' => '既定 (UTF-8) を使用',
      'Edit Commit' => 'コミットを編集',
      'Type a branch name...' => 'ブランチ名を入力...',
    );
  }

}
