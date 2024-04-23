<?php

final class PhabricatorCacheMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      '"%s" Disabled' => '"%s" ပိတ်ထားပြီး',
    );
  }

}
