<?php

final class PhabricatorChatlogTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(Kullanımdan kaldırıldı)',
      'Jump' => 'Git',
      'Retrieve chatter.' => 'Sohbeti geri al.',
      'Newer' => 'Daha Yeni',
      'Jump to Bottom' => 'Aşağı Git',
      'Older' => 'Daha Eski',
      'ChatLog' => 'SohbetGünlüğü',
      'Channel List' => 'Kanal Listesi',
      'Hide Dates' => 'Tarihleri Gizle',
      'Channel Log' => 'Kanal Günlüğü',
      'Search Dates' => 'Tarihleri Ara',
      'Newest' => 'En yeni',
      'Record chatter.' => 'Sohbeti kaydet.',
    );
  }

}
