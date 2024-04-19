<?php

final class PhabricatorCacheEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'APCu' => 'APCu',
      '"%s" Disabled' => '"%s" απενεργοποιημένο',
      '"%s" Enabled in Production' => '"%s" ενεργοποιημένο στη παραγωγή',
    );
  }

}
