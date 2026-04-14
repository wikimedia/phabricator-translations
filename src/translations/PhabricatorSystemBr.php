<?php

final class PhabricatorSystemBr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'br';
  }

  protected function getTranslations() {
    return array(
  '%d / hour' => '%d / eur',
  'IMPORTANT' => 'POUEZUS',
);
  }

}
