<?php

final class PhabricatorPackagesJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s changed the name of this version from %s to %s.' => '%s がこのバージョンの名前を「%s」から「%s」に変更しました。',
      '%s created this package.' => '%s がこのパッケージを作成しました。',
      '%s updated the name for %s from %s to %s.' => '%s が %s の名前を %s から %s に更新しました。',
      '%s changed the name of this package from %s to %s.' => '%s がこのパッケージの名前を %s から %s に変更しました。',
      '%s created this version.' => '%s がこのバージョンを作成しました。',
    );
  }

}
