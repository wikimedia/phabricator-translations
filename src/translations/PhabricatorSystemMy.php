<?php

final class PhabricatorSystemMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      '%d / hour' => '%s /နာရီ',
      'System' => 'စနစ်',
      '%d / minute' => '%s / မိနစ်',
      '%d / second' => '%s / စက္ကန့်',
    );
  }

}
