<?php

final class PhabricatorFilesJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'NONE' => 'なし',
      'ERROR' => 'エラー',
      'Preview (220px)' => 'プレビュー (220px)',
      'Choose Icon' => 'アイコンを選択',
      'Choose Icon...' => 'アイコンを選択...',
      'You must choose a file to upload.' => 'アップロードするファイルを選択してください。',
      'View' => '表示',
      '%s updated the name for this file from "%s" to "%s".' => '%s がこのファイルの名前を「%s」から「%s」に更新しました。',
      'Upload' => 'アップロード',
      'Type an icon name...' => 'アイコン名を入力...',
      'Email Commands: Files' => 'メール コマンド: ファイル',
      '%s updated the name of %s from "%s" to "%s".' => '%s が %s の名前を「%s」から「%s」に更新しました。',
      'Create New File' => '新しいファイルを作成',
    );
  }

}
