<?php

final class PhabricatorBadgesJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s updated the quality from %s to %s.' => '%s が品質を %s から %s に更新しました。',
      '%s renamed %s badge %s to %s.' => '%s が %s バッジの名前を %s から %s に変更しました。',
      'All Badges' => 'すべてのバッジ',
      'Revoke Badge' => 'バッジを失効',
      'Choose Badge Icon' => 'バッジ アイコンの選択',
      '%s renamed this badge from %s to %s.' => '%s がこのバッジの名前を %s から %s に変更しました。',
      '%s created this badge.' => '%s がこのバッジを作成しました。',
      '%s updated the badge description.' => '%s がバッジの説明を更新しました。',
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
