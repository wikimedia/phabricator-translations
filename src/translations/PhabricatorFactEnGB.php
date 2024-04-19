<?php

final class PhabricatorFactEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Analyze from the beginning, ignoring cursors.' => 'Analyse from the beginning, ignoring cursors.',
      'Manually invoke fact analyzers.' => 'Manually invoke fact analysers.',
      'Chart and Analyze Data' => 'Chart and Analyse Data',
    );
  }

}
