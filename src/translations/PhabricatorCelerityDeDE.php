<?php

final class PhabricatorCelerityDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => 'Standardfarben verwenden',
      'Dark Mode (Experimental)' => 'Dark Mode (Experimentell)',
      'Use Larger Font Size' => 'Größere Schriftgröße verwenden',
      'Celerity' => 'Schweregrad',
      'Use Red/Green (Deuteranopia) Colors' => 'Rot/Grün (Deuteranopia) Farben verwenden',
      'Found %d packages.' => '%s Packages vorhanden.',
    );
  }

}
