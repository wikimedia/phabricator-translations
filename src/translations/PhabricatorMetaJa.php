<?php

final class PhabricatorMetaJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
  'Launcher' => 'ランチャー',
  'Show Enabled Applications' => '有効のアプリケーションを表示',
  'You cannot enable an enabled application.' => '有効のアプリケーションは有効にできません。',
  'Show Released Applications' => 'リリース済みアプリケーションを表示',
  'Show Disabled Applications' => '無効のアプリケーションを表示',
  'Type an application name...' => 'アプリケーション名を入力...',
  'Show Prototype Applications' => 'プロトタイプ アプリケーションを表示',
  'Show All Applications' => 'すべてのアプリケーションを表示',
);
  }

}
