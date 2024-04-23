<?php

final class PhabricatorConfigEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Client Server' => 'Διακομιστής πελάτη',
      'Column/Key' => 'Στήλη/Κλειδί',
      '%s / %s' => '%s / %s',
      'Memory Usage' => 'Χρήση μνήμης',
      'Table' => 'Πίνακας',
      'Usage' => 'Χρήση',
      '%s deleted %s (again?).' => 'Ο %s διέγραψε το %s (ξανά;).',
      'Repository Errors' => 'Σφάλματα αποθηκευτηρίου',
      'Short' => 'Σύντομο',
      'Full' => 'Πλήρες',
      'Unrecognized verb: %s' => 'Μη αναγνωρισμένο ρήμα: %s',
      'Access Denied' => 'Δεν επετράπη η πρόσβαση.',
      '(%s%s) %s' => '(%s%s) %s',
      'Pattern' => 'Μοτίβο',
      'Unknown \'%s\' Version' => 'Άγνωστη έκδοση \'%s\'',
      'Purge Caches' => 'Εκκαθάριση προσωρινών μνημών',
      'Formats' => 'Μορφοποιήσεις',
      'Clients' => 'Πελάτες',
      'Expected Columns' => 'Προσδοκώμενες στήλες',
      '(Not Supported)' => '(Δεν υποστηρίζεται)',
      'Security options.' => 'Επιλογές ασφαλείας.',
      'Old MySQL Version' => 'Παλαιά έκδοση MySQL',
      'Health' => 'Υγεία',
      'Edit "%s"' => 'Επεξεργασία «%s»',
      'Disable PHP %s' => 'Απενεργοποίηση του PHP %s',
      '%s of %s' => '%s από %s',
      ' (%s)' => '(%s)',
      'Not Available' => 'Μη Διαθέσιμο',
    );
  }

}
