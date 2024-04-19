<?php

final class PhabricatorPholioId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'Image "%s":' => 'Gambar "%s":',
    );
  }

}
