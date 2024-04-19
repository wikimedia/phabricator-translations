<?php

final class PhabricatorOwnersJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Package name is required.' => 'パッケージ名は必須です。',
      '%s updated paths for this package.' => '%s がこのパッケージのパスを更新しました。',
      '%s renamed this package from %s to %s.' => '%s がこのパッケージの名前を %s から %s に変更しました。',
      '%s archived this package.' => '%s がこのパッケージをアーカイブしました。',
      '%s updated the description for this package.' => '%s がこのパッケージの説明を更新しました。',
      'Add New Path' => '新規パスを追加',
    );
  }

}
