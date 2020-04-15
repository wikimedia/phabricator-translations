<?php

final class PhabricatorSystemZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'No Writable Database' => '沒有可寫入的資料庫',
      'No Encoding Support' => '沒有支援編碼',
      'Severed From Master' => '從 Master 拆分',
      'Engine: Destruction' => '引擎：銷毀',
      'Choose a syntax highlighting to use.' => '選擇要使用的語法凸顯。',
      '%d / hour' => '%s/時',
      'Choose Encoding' => '選擇編碼',
      'IMPORTANT' => '重要',
      'Select Character Encoding' => '選擇字元編碼',
      'Select Syntax Highlighting' => '選擇語法凸顯',
      'DATA WILL BE PERMANENTLY DESTROYED' => '資料將會永久銷毀',
      'System' => '系統',
      'Choose a text encoding to use.' => '選擇要使用的文字編碼。',
      '%d / minute' => '%s/分',
      'Administrative Read-Only Mode' => '管理唯讀模式',
      '%d / second' => '%s/秒',
    );
  }

}
