<?php

final class PhabricatorBaseKn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'kn';
  }

  protected function getTranslations() {
    return array(
      'No Login Required' => 'ಲಾಗಿನ್ ಅಗತ್ಯವಿಲ್ಲ',
      'Email Verification Required' => 'ಇ-ಅಂಚೆ ದೃಢೀಕರಣ ಅಗತ್ಯವಿದೆ',
    );
  }

}
