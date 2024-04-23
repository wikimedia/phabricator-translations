<?php

final class PhabricatorHeraldJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'An object name is required.' => 'オブジェクト名が必要です。',
      '%s edited this rule.' => '%s がこのルールを編集しました。',
      'Utility' => 'ユーティリティ',
      'Show Only Enabled Rules' => '有効なルールのみを表示',
      'Personal Rule' => '個人ルール',
      'Show Only Disabled Rules' => '無効なルールのみを表示',
    );
  }

}
