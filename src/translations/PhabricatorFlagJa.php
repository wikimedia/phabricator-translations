<?php

final class PhabricatorFlagJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Removed "%s" flag.' => '%sフラグを除去しました。',
      'Marked with "%s" flag.' => '"%s"フラグでマークされています。',
      'Personal Bookmarks' => '個人ブックマーク',
      'Clear a flag.' => 'フラグをクリアします。',
      'Purple' => '紫',
      'Mark with %s flag.' => '%sフラグでマークします。',
      'Flags are private. Only you can view or edit your flags.' => 'フラグはプライベートです。自分だけがフラグを表示または編集できます。',
      'Flag For Later' => '今後のためフラグを設定',
      'You are not the creator of this flag.' => 'あなたはこのフラグの作成者ではありません。',
      'Flag %s' => 'フラグ%s',
      'Create or modify a flag.' => 'フラグを作成または修正します。',
      'Create Flag' => 'フラグを作成',
      'Remove %s Flag' => '%sフラグを削除',
      'All Object Types' => 'すべてのオブジェクト種類',
      'Already Marked' => 'すでにマーク済み',
      'Flag Color' => 'フラグの色',
      'Mark with flag' => 'フラグでマーク',
      'Flagged' => 'フラグ付き',
    );
  }

}
