<?php

final class PhabricatorSlowvoteSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      '%s renamed %s.' => '%s bytte namn till %s.',
      'Create a Poll' => 'Skapa en omröstning',
    );
  }

}
