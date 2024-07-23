<?php

final class PhabricatoravaCoreFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Anti-Vandalism' => 'Anti-Vandalisme',
      'Vandalism detected' => 'Vandalisme détecté',
      'No vandalism detected.' => 'Aucun vandalisme détecté.',
      'Disable vandal accounts.' => 'Désactivez les comptes vandales.',
      'No action' => 'Aucune action',
      'Scan for vandalism' => 'Scan pour le vandalisme',
    );
  }

}
