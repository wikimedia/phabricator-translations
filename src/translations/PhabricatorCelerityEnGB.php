<?php

final class PhabricatorCelerityEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => 'Use Standard Colours',
      'Use High Contrast Colors' => 'Use High Contrast Colours',
      'Use Red/Green (Deuteranopia) Colors' => 'Use Red/Green (Deuteranopia) Colours',
    );
  }

}
