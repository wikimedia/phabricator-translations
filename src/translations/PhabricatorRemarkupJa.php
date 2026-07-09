<?php

final class PhabricatorRemarkupJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
  'Invalid markup engine.' => 'マークアップエンジンが無効です。',
  'Process text through remarkup.' => 'リマークアップを使ってのテキストの処理。',
);
  }

}
