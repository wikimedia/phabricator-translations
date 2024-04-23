<?php

final class PhabricatorConsoleJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Site' => 'サイト',
      '+%s ms' => '+%s ミリ秒',
      'Reconnect' => '再接続',
      'Profile Page' => 'プロフィールページ',
      'Information about services.' => 'サービスについての情報。',
      'Unknown event: %s' => '不明なイベント: %s',
      'Events' => 'イベント',
    );
  }

}
