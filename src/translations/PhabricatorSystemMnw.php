<?php

final class PhabricatorSystemMnw
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'mnw';
  }

  protected function getTranslations() {
    return array(
  '%d / hour' => '%d / နာဍဳ',
  '%d / minute' => '%d / မိနေတ်',
  '%d / second' => '%d / သိတ်ကိန်',
);
  }

}
