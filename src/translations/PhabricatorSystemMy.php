<?php

final class PhabricatorSystemMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
  '%d / hour' => '%d /နာရီ',
  'System' => 'စနစ်',
  '%d / minute' => '%d / မိနစ်',
  '%d / second' => '%d / စက္ကန့်',
);
  }

}
