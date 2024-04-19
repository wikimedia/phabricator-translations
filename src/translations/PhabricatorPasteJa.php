<?php

final class PhabricatorPasteJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s updated the title for %s from %s to %s.' => '%s が %s のタイトルを %s から %s に更新しました。',
      '%s updated the title for %s from untitled to %s.' => '%s が %s のタイトルを無題から %s に更新しました。',
      '%s created this paste.' => '%s がこのペーストを作成しました。',
      '%s Line(s)' => '%s 行',
      'Browse Languages' => '言語一覧',
      '%s updated the language for %s from %s to %s.' => '%s が %s の言語を %s から %s に更新しました。',
      '%s updated the title for %s from %s to untitled.' => '%s が %s のタイトルを %s から無題に更新しました。',
      'Create Paste' => 'ペーストを作成',
    );
  }

}
