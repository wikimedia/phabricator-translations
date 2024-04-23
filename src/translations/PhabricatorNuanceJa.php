<?php

final class PhabricatorNuanceJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s set a property on this item.' => '%s がこの項目にプロパティを設定しました。',
      '%s changed the status of this item from %s to %s.' => '%s がこの項目の状態を「%s」から「%s」に変更しました。',
      'GitHub %s %s (%s)' => 'GitHub %s %s (%s)',
    );
  }

}
