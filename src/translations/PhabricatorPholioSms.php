<?php

final class PhabricatorPholioSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'Undo' => 'Kååʹmet',
      'Image "%s":' => 'Kartt "%s":',
    );
  }

}
