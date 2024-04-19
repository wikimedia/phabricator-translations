<?php

final class PhabricatorPholioKy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ky';
  }

  protected function getTranslations() {
    return array(
      'Undo' => 'Жокко чыгаруу',
      'Image "%s":' => 'Сүрөт «‎%s»‎:',
    );
  }

}
