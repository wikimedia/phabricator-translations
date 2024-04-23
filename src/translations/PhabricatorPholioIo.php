<?php

final class PhabricatorPholioIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
      'Undo' => 'Desfacar',
      'Image "%s":' => 'Imajo "%s":',
    );
  }

}
