<?php

final class PhabricatorRemarkupJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Phabricatorコンテキストでのテキストの処理。',
      'Invalid markup engine.' => 'マークアップエンジンが無効です。',
      'Content may not be empty.' => 'コンテンツは空ではありません。',
    );
  }

}
