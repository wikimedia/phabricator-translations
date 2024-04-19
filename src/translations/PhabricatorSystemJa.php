<?php

final class PhabricatorSystemJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'IMPORTANT' => '重要',
      'Destroying objects...' => 'オブジェクトの破棄...',
      'Select Character Encoding' => '文字エンコーディングを選択',
      'System' => 'システム',
      'Choose a text encoding to use.' => '使用するテキスト エンコーディングを選択してください。',
    );
  }

}
