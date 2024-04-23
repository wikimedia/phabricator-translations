<?php

final class PhabricatorPeopleJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Disable User?' => 'ユーザーを無効にしますか?',
      'Delete User' => 'ユーザーを削除',
      'New username is required.' => '新しいユーザー名は必須です。',
      'User Details' => 'ユーザーの詳細',
      'Disable User' => 'ユーザーを無効にする',
      'administrators' => '管理者',
      'Recent Revisions' => '最近のリビジョン',
      'Edit Profile Picture' => 'プロフィール画像を編集',
      'Projects (%s)' => 'プロジェクト (%s)',
      'Save Profile' => 'プロフィールを保存',
      'No recent revisions.' => '最近のリビジョンはありません。',
      'Edit Profile: %s' => 'プロフィールの編集: %s',
      'Make Administrator' => '管理者にする',
      'Make Administrator?' => '管理者にしますか?',
      'Type a username...' => 'ユーザー名を入力...',
      'Send Welcome Email' => 'ようこそメールを送信',
      'Edit Settings' => '設定を編集',
      'Change Username' => 'ユーザー名を変更',
      'Edit Profile' => 'プロフィールを編集',
      'User Since' => 'ユーザー登録日時',
    );
  }

}
