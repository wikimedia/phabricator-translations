<?php

final class PhabricatorConduitJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Standard API Token' => '標準 API トークン',
      'Errors' => 'エラー',
      'Command Line API Token' => 'コマンド ライン API トークン',
      'Generate API Token' => 'API トークンの生成',
      'Generate a new API token?' => '新規 API トークンを生成しますか?',
      'View API Token' => 'API トークンの閲覧',
      'Stable' => '安定',
      'Generate Token' => 'トークンを生成',
    );
  }

}
