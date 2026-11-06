<?php

final class PhabricatorBadgesId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
  'Create Badge' => 'Buat Lencana',
  'Active Badges' => 'Lencana Aktif',
  'New badge description.' => 'Deskripsi lencana baru.',
  'Badge name is required.' => 'Nama lencana wajib diisi.',
  'Edit Badge: %s' => 'Sunting Lencana: %s',
  'Other badge activity not listed above occurs.' => 'Aktivitas lencana lainnya yang tidak tercantum di atas juga terjadi.',
  'Activate Badge' => 'Nyalakan Lencana',
  'Escape Route' => 'Rute Pelarian',
  'Configure Badges Forms' => 'Konfigurasi Formulir Lencana',
  'New badge award recipients.' => 'Penerima penghargaan lencana baru.',
  '%s disabled the badge %s.' => '%s mematikan lencana %s .',
  'All Badges' => 'Semua Lencana',
);
  }

}
