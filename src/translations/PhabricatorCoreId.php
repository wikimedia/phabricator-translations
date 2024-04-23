<?php

final class PhabricatorCoreId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'Question' => 'Pertanyaan',
      'No repository "%s" exists!' => 'Tidak ada repositori "%s"!',
      'Save Related Commits' => 'Simpan Komit Terkait',
      '%s edited %s.' => '%s menyunting %s.',
      'Move Document' => 'Pindahkan Dokumen',
      'DESTROY' => 'HANCURKAN',
      'Acquired' => 'Diperoleh',
      'Commented On' => 'Berkomentar di',
      'Favorites' => 'Favorit',
      'Email Addresses' => 'Alamat-alamat Surel',
      'Email Address' => 'Alamat Surel',
      'Orange' => 'Jingga',
      'Failed' => 'Gagal',
      'Upload Picture' => 'Unggah Gambar',
      'Packages' => 'Paket-paket',
      'Administrators' => 'Pengurus',
      'Example' => 'Contoh',
      'MODIFIED' => 'DIUBAH',
      'Summary' => 'Ringkasan',
      'Image' => 'Gambar',
      'Welcome to %s!' => 'Selamat datang di Phabricator!',
      'Username' => 'Nama pengguna',
      'OK' => 'OK',
      'Settings' => 'Pengaturan',
      'Okay' => 'OK',
      'Details' => 'Rincian',
    );
  }

}
