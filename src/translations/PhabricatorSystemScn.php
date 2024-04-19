<?php

final class PhabricatorSystemScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      '%d / hour' => '%s / ura',
      'IMPORTANT' => 'MPURTANTI',
      'No Object URI' => 'Nuddu URI d\'uggettu',
      'System' => 'Sistema',
      '%d / minute' => '%s / minutu',
      '%d / second' => '%s / secunnu',
    );
  }

}
