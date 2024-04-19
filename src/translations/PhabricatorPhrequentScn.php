<?php

final class PhabricatorPhrequentScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => 'Travagghiannu ora',
      'Interrupted' => 'Interrumputu',
      '%s (%s ago)' => '%s (%s fa)',
    );
  }

}
