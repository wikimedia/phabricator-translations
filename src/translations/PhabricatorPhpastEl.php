<?php

final class PhabricatorPhpastEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Κόμβος %s: %s',
      'Generate XHP AST' => 'Δημιουργήστε XHP AST',
      'Token %d: %s' => 'Τεκμήριο %s: %s',
      'XHPAST View' => 'Προβολή XHPAST',
      'Parse' => 'Λεξιαναλυτής',
      'No such AST!' => 'Δεν υπάρχει τέτοιο AST!',
      'Visual PHP Parser' => 'Οπτικός λεξιαναλυτής PHP',
    );
  }

}
