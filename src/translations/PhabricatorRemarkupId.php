<?php

final class PhabricatorRemarkupId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'Content may not be empty.' => 'Konten tidak boleh kosong.',
    );
  }

}
