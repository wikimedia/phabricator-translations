<?php

final class PhabricatorDrydockJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
  'Type a resource name...' => 'リソース名を入力...',
  'Host (%s)' => 'ホスト (%s)',
  '<Unknown>' => '<不明>',
);
  }

}
