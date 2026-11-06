<?php

final class PhabricatorMacroLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Unknown status \'%s\'!' => 'Onbekannte Status „%s“!',
  'IDs must be a list.' => 'IDe mussen eng Lëscht sinn.',
  'Template "%s" is not a valid template.' => 'D\'Schabloun „%s“ ass keng gülteg Schabloun.',
);
  }

}
