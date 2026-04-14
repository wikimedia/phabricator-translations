<?php

final class PhabricatorSystemScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
  '%d / hour' => '%d / ura',
  'IMPORTANT' => 'MPURTANTI',
  'No Object URI' => 'Nuddu URI d\'uggettu',
  'System' => 'Sistema',
  '%d / minute' => '%d / minutu',
  '%d / second' => '%d / secunnu',
);
  }

}
