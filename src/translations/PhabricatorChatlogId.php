<?php

final class PhabricatorChatlogId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(Usang)',
      'Jump' => 'Lompat',
      'Retrieve chatter.' => 'Ambil obrolan.',
      'Newer' => 'Jangan pernah',
      'Jump to Bottom' => 'Lompat ke Bawah',
      'Older' => 'Lawas',
      'ChatLog' => 'Log Obrolan',
      'Channel List' => 'Daftar Kanal',
      'Hide Dates' => 'Sembunyikan Tanggal',
      'Channel Log' => 'Log Kanal',
      'Search Dates' => 'Cari Tanggal',
      'Newest' => 'Teranyar',
      'Record chatter.' => 'Rekam obrolan.',
    );
  }

}
