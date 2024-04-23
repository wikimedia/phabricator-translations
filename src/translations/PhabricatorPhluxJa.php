<?php

final class PhabricatorPhluxJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s updated this variable.' => '%s がこの変数を更新しました。',
    );
  }

}
