<?php

final class TranslatewikiCoreEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Παράσχετε τον δρόμο προς μια βιβλιοθήκη για να εξαγάγετε μεταφράσεις από εκεί.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Δεν είναι δυνατή η εξαγωγή της συμβολοσειράς με το μη αναγνωρισμένο "%%" πρότυπο, "%s": %s.',
      'NONE' => 'Τίποτα',
      'Read %s string(s).' => 'Ανάγνωση %s συμβολοσειράς(-ών).',
      'Class name to generate.' => 'Όνομα τάξης για δημιουργία.',
      'Frequency Data' => 'Δεδομένα συχνότητας',
      'Writing data (%s, %s) to "%s"...' => 'Το γράψιμο δεδομένων (%s, %s) προς το "%s" είναι σε εξέλιξη...',
      'Used in:' => 'Χρησιμοποιείται σε:',
      'English strings' => 'Αγγλικές συμβολοσειρές',
      'Variable Types: %s.' => 'Τύποι μεταβλητής: %s.',
      'Done.' => 'Έγινε.',
      'Location to write the generated translation file.' => 'Τοποθεσία για συγγραφή του δημιουργημένου αρχείου μετάφρασης.',
      'PLURAL' => 'Πληθυντικός',
    );
  }

}
