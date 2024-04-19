<?php

final class PhabricatorextCoreHi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hi';
  }

  protected function getTranslations() {
    return array(
      'Invalid' => 'अमान्य',
      'Unknown' => 'अज्ञात',
      'Comments' => 'टिप्पणियाँ',
    );
  }

}
