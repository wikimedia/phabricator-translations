<?php

final class PhabricatorPholioJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s added %d image(s): %s.' => '%s が %s 件の画像を追加しました: %s。',
      '%s removed %s task(s) for %s: %s.' => '%s が %s 件のタスクを %s から除去しました: %s。',
      '%s created this mock.' => '%s がこのモックを作成しました。',
      '%s removed %d image(s): %s.' => '%s が %s 件の画像を除去しました: %s。',
      '%s added an inline comment to %s.' => '%s がインライン コメントを %s に追加しました。',
      'Current Revision' => '現在のリビジョン',
      '%s added inline comment(s).' => '%s がインライン コメントを追加しました。',
      '%s updated images of %s.' => '%s が %s の画像を更新しました。',
      'Inline Comment' => 'インライン コメント',
      '%s updated the image names of %s.' => '%s が %s の画像名を更新しました。',
    );
  }

}
