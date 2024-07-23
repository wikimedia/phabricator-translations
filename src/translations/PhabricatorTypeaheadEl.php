<?php

final class PhabricatorTypeaheadEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Typeahead Results' => 'Αποτελέσματα Typeahead',
      'Typeahead' => 'Typeahead',
      'Function Help' => 'Βοήθεια λειτουργιών',
      'Source Class' => 'Κλάση Πηγής',
      'Token Results (%s)' => 'Αποτελέσματα δείγματος (%s)',
      'Configured datasource class "%s" must be a valid subclass of "%s".' => ' Η Διαμορφωμένη σειρά πηγής δεδομένων  "%s" πρέπει να είναι έγκυρη κατηγορία του "%s".',
      'Token Name' => 'Όνομα Token',
      'Image URI' => 'Διεύθυνση URI εικόνες',
      'Select' => 'Διαλέξτε',
      'Display Name' => 'Εμφανιζόμενο όνομα',
      'Unable to parse function and arguments for token "%s".' => 'Δεν μπόρεσε να ενεργοποιήσει την λειτουργία και τα επιχειρήματα του σήματος  "%s".',
      'Token Query' => 'Ερώτημα Token',
      'Invalid Function: %s' => 'Μη έγκυρη λειτουργία: %s',
      'More Results' => 'Περισσότερα αποτελέσματα',
      'Browse Objects' => 'Περιήγηση αντικειμένων',
      'Auto' => 'Αυτόματο',
      'Priority Type' => 'Τύπος προτεραιότητας',
      'Using Typeahead Functions' => 'Χρησιμοποιώντας λειτουργίες Typeahead',
    );
  }

}
