<?php

final class PhabricatorPhluxEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Update Variable' => 'Ενημέρωση μεταβλητής',
      'Variable value must be valid JSON.' => 'Η τιμή της μεταβλητής πρέπει να είναι έγκυρο JSON.',
      'Lowercase letters, digits, dot and hyphen only.' => 'Μικρά γράμματα, ψηφία, τελεία και υφέν μόνο.',
      'Edit Variable: %s' => 'Επεξεργασία μεταβλητής: %s',
      'Key/Value Configuration Store' => 'Κατάστημη Ρύθμισης Κλειδιού/Τιμής',
      'Variable "%s"' => 'Μεταβλητή "%s"',
      'Phlux Variables' => 'Μεταβλητές Phlux',
      'Enter value as JSON.' => 'Εισαγωγή τιμής ως JSON.',
      'Variable key must be unique.' => 'Το κλειδί της μεταβλητής πρέπει να είναι μοναδικό.',
      'Create Variable' => 'Δημιουργία μεταβλητής',
      'Phlux' => 'Phlux',
      '%s updated this variable.' => 'Ο %s ενημέρωσε αυτή τη μεταβλητή.',
      '%s created this variable.' => 'Ο %s δημιούργησε αυτή τη μεταβλητή.',
      'Edit Variable' => 'Επεξεργασία μεταβλητής',
      'Variable List' => 'Κατάλογος μεταβλητής',
      'Variable key is required.' => 'Το κλειδί μεταβλητής απαιτείται.',
      'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => 'Το κλειδί της μεταβλητής "%s" πρέπει να περιέχει μόνο μικρά γράμματα, ψηφία, περίοδο και υφέν.',
    );
  }

}
