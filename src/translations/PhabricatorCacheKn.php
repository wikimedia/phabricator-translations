<?php

final class PhabricatorCacheKn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'kn';
  }

  protected function getTranslations() {
    return array(
      '"%s" Disabled' => '"%s" ನಿಷ್ಕ್ರಿಯಗೊಳಿಸಲಾಗಿದೆ',
      '"%s" Enabled' => '"%s" ಸಕ್ರಿಯಗೊಳಿಸಲಾಗಿದೆ',
    );
  }

}
