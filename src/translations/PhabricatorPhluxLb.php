<?php

final class PhabricatorPhluxLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Variable value must be valid JSON.' => 'De Wäert vun der Variabel muss gültegen JSON sinn.',
  'Variable "%s"' => 'Variabel „%s“',
);
  }

}
