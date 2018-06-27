<?php

final class PhabricatorRemarkupTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Phabricator bağlamında yorumlama yoluyla metin işleyin.',
      'Invalid markup engine.' => 'Geçersiz biçimlendirme motoru.',
      'Content may not be empty.' => 'İçerik boş bırakılamaz.',
    );
  }

}
