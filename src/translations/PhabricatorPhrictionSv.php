<?php

final class PhabricatorPhrictionSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Unknown document status \'%s\'!' => '"%s" är en okänd dokumentstatus!',
      'Welcome to Phriction' => 'Välkommen till Phriction',
      '%s moved %s to %s.' => '%s flyttade %s till %s.',
    );
  }

}
