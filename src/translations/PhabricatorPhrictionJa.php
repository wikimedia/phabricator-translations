<?php

final class PhabricatorPhrictionJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Current Path' => '現在のパス',
      '%s edited the content of %s.' => '%s が %s の内容を編集しました。',
      '%s changed the title from %s to %s.' => '%s がタイトルを %s から %s に変更しました。',
    );
  }

}
