<?php

final class PhabricatorHomeId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Pusat Perintah',
      'More Applications' => 'Aplikasi Lainnya',
      'Built-in Homepage' => 'Halaman Beranda Bawaan',
    );
  }

}
