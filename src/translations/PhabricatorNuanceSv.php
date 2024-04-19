<?php

final class PhabricatorNuanceSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      '%s renamed this queue from %s to %s.' => '%s bytte namn på denna kö från %s till %s.',
      'Added Milestone: %s' => 'Lade till milstolpe: %s',
      'Added Label: %s' => 'Lade till etikett: %s',
    );
  }

}
