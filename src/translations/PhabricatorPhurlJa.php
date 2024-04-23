<?php

final class PhabricatorPhurlJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s changed the alias from %s to %s.' => '%s が別名を %s から %s に変更しました。',
      'URL path is required' => 'URL パスは必須です',
      '%s changed the name of %s from %s to %s.' => '%s が %s の名前を %s から %s に変更しました。',
      '%s changed the alias of %s from %s to %s.' => '%s が %s の別名を %s から %s に変更しました。',
      '%s created this URL.' => '%s がこの URL を作成しました。',
      '%s changed the name of the URL from %s to %s.' => '%s が URL の名前を %s から %s に変更しました。',
    );
  }

}
