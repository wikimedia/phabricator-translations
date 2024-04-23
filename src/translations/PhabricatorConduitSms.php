<?php

final class PhabricatorConduitSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'JSON' => 'JSON',
      '<parameters>' => '<paramettar>',
      'Errors' => 'Vââʹjj',
      'Username.' => 'Õõʹnninõmm.',
    );
  }

}
