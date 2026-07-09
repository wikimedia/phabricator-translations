<?php

final class PhabricatorBadgesJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
  '%s updated the quality from %s to %s.' => '%s が品質を %s から %s に更新しました。',
  'All Badges' => 'すべてのバッジ',
  'Revoke Badge' => 'バッジを失効',
  'Choose Badge Icon' => 'バッジ アイコンの選択',
  '%s created this badge.' => '%s がこのバッジを作成しました。',
  'Browse Badges' => 'バッジ一覧',
  'Quality' => '品質',
  'You do not have permission to create badges.' => 'バッジを作成する権限がありません。',
  '%s changed the badge icon from %s to %s.' => '%s がバッジ アイコンを「%s」から「%s」に変更しました。',
  'Create New Badge' => '新しいバッジを作成',
  '%s changed the badge icon for %s from %s to %s.' => '%s が %s のバッジ アイコンを %s から %s に変更しました。',
  'Type a badge name...' => 'バッジ名を入力...',
);
  }

}
