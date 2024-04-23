<?php

final class PhabricatorRemarkupTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Geçersiz biçimlendirme motoru.',
      'Process text through remarkup.' => 'Phabricator bağlamında yorumlama yoluyla metin işleyin.',
      'Content may not be empty.' => 'İçerik boş bırakılamaz.',
    );
  }

}
