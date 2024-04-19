<?php

final class PhabricatorMetaJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'You cannot install an installed application.' => 'インストール済みのアプリケーションはインストールできません。',
      'Launcher' => 'ランチャー',
      'Show Uninstalled Applications' => 'アンインストール済みアプリケーションを表示',
      'Show Installed Applications' => 'インストール済みアプリケーションを表示',
      'Show Released Applications' => 'リリース済みアプリケーションを表示',
      'Type an application name...' => 'アプリケーション名を入力...',
      'Show Prototype Applications' => 'プロトタイプ アプリケーションを表示',
      'Show All Applications' => 'すべてのアプリケーションを表示',
    );
  }

}
