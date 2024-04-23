<?php

final class PhabricatorPhrictionId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'Version %d' => 'Versi %s',
      'Welcome' => 'Tutup',
    );
  }

}
