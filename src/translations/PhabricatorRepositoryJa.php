<?php

final class PhabricatorRepositoryJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'TAGS' => 'タグ',
      '(%s) %s' => '(%s) %s',
      'COMMITS' => 'コミット',
      'tag' => 'タグ',
      'All Repositories' => 'すべてのリポジトリ',
      'DETAILS' => '詳細',
      'Create a new Git repository.' => 'Gitリポジトリの新規作成',
      '%s changed this URI from "%s" to "%s".' => '%s がこの URI を「%s」から「%s」に変更しました。',
      'tag:' => 'タグ:',
    );
  }

}
