<?php

final class PhabricatorHomeJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'コマンドセンター',
      'More Applications' => 'その他のアプリケーション',
      'Built-in Homepage' => '組み込みのホームページ',
    );
  }

}
