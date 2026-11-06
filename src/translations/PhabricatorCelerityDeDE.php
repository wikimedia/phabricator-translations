<?php

final class PhabricatorCelerityDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
  'Use Standard Colors' => 'Standardfarben verwenden',
  'Celerity' => 'Schweregrad',
  'Use Red/Green (Deuteranopia) Colors' => 'Rot/Grün (Deuteranopia) Farben verwenden',
  'Dark Mode' => 'Dark Mode (Experimentell)',
  'Found %d packages.' => '%d Packages vorhanden.',
);
  }

}
