<?php

final class PhabricatorHelpId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Tutup semua dialog, termasuk yang ini.',
      '%s Help' => 'Bantuan %s',
      'Hiding Content' => 'Menyembunyikan Konten',
      'Global Shortcuts' => 'Pintasan Global',
      'Keyboard Shortcuts' => 'Pintasan Papan Ketik',
    );
  }

}
