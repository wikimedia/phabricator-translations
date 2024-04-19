<?php

final class PhabricatorCelerityJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => '標準の色を使用',
      'Use High Contrast Colors' => 'ハイ コントラストの色を使用',
      'Dark Mode (Experimental)' => 'ダーク モード (実験的)',
      'Use Larger Font Size' => 'より大きいフォント サイズを使用',
      'Use Red/Green (Deuteranopia) Colors' => '赤/緑 (緑色覚異常) の配色を使用',
    );
  }

}
