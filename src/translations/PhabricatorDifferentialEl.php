<?php

final class PhabricatorDifferentialEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'New repository.' => 'Νέο αποθηκευτήριο.',
      'Show File Contents' => 'Εμφάνιση περιεχομένων αρχείου',
      '%s summarized this revision.' => 'Ο %s συνόψισε αυτή την αναθεώρηση.',
      'This revision is already closed.' => 'Αυτή η αναθεώρηση είναι ήδη κλειστή.',
      'Base' => 'Βάση',
      'Browse Reviewers' => 'Περιήγηση αναθεωρητών',
      '%s (Diff %d)' => '%s (διαφορά %s)',
      'Edit Child Revisions' => 'Επεξεργασία παιδικών αναθεωρήσεων',
      '(%d more files...)' => '(%s περισσότερα αρχεία...)',
      '%s retitled %s from %s to %s.' => 'Ο %s μετονόμασε το %s από %s σε %s.',
      '%s (bookmark)' => '%s (σελιδοδείκτης)',
      'Lint Warnings' => 'Προειδοποιήσεις σύνταξης',
      'Current Child Revisions' => 'Τρέχοντες αναθεωρήσεις παιδιού',
      'This submodule was moved from %s.' => 'Αυτό το υποδομοστοιχείο μετακινήθηκε από το %s.',
      'reviewer' => 'επιθεωρητής',
      'Require "Test Plan" field?' => 'Να απαιτείται το πεδίο "Δοκιμαστικό Σχέδιο";',
      'Required Signatures' => 'Απαιτούμενες υπογραφές',
      'Abandon a revision.' => 'Εγκατάλειψη μιας αναθεώρησης.',
      'File Size' => 'Μέγεθος αρχείου',
      'Changes Planned' => 'Σχεδιάζονται αλλαγές',
      'Added Reviewers' => 'Προστέθηκαν θεωρητές',
      'Accepted Earlier' => 'Δέχτηκε νωρίτερα',
      'Differential Diff' => 'Διαφορετική διαφορά',
      'Allow self-accept' => 'Να επιτρέπεται η αυτο-αποδοχή',
      'Jump to next file.' => 'Πήδηση στο επόμενο αρχείο.',
      'Load File' => 'Φόρτωση αρχείου',
      'This is a directory.' => 'Αυτό είναι ένα αποθηκευτήριο.',
      'Copied Here' => 'Αντιγράφτηκε εδώ.',
      'New Diff' => 'Νέα διαφορά',
      'Display project reviewers.' => 'Εμφάνιση θεωρητών εγχειρήματος',
      'Asana Task Deleted' => 'Η εργασία Ασάνα διεγράφη',
      'Change associated tasks.' => 'Αλλαγή συνδεδεμένων εργασιών',
      'This file was moved from %s.' => 'Αυτό το αρχείο μετακινήθηκε από το %s.',
      'This image was deleted.' => 'Η εικόνα διεγράφη.',
      'Update Existing Revision' => 'Ενημέρωση υπάρχουσας αναθεώρησης',
      'Change Reviewers' => 'Αλλαγή εξεταστών',
      'Modified' => 'Τροποποιημένο',
      '%s requested review of this revision.' => 'Ο %s ζήτησε θεώρηση αυτής της αναθεώρησης.',
      'Revision Has Child' => 'Η αναθεώρηση έχει παιδί',
      'Planned Changes To' => 'Σχεδιασμένες αλλαγές προς',
      'This is an image.' => 'Αυτή είναι μια εικόνα.',
      'Conflicts' => 'Συγκρούσεις',
      'CHANGE DETAILS' => 'Αλλαγή λεπτομερειών',
      'This directory was added.' => 'Αυτό το αποθετήριο προστέθηκε.',
      'Revision Author' => 'Δημιουργός αναθεώρησης',
      'No such revision exists.' => 'Δεν υπάρχει τέτοια αναθεώρηση.',
      'Retitle the revision.' => 'Αλλαγή τίτλου στην αναθεώρηση.',
      'Needs Revision' => 'Χρειάζεται αναθεώρηση',
      'Planned Changes' => 'Σχεδιασμένες αλλαγές',
      'List of related VCS references.' => 'Κατάλογος σχετιζόμενων παραπομπών VCS.',
      'Not Linked' => 'Μη συνδεδεμένο',
      'This binary file was added.' => 'Αυτό το δυαδικό αρχείο προστέθηκε.',
      'These changes will be approved.' => 'Αυτές οι αλλαγές θα εγκριθούν.',
      'Other Revisions' => 'Άλλες εκδόσεις',
      'No such repository "%s"!' => 'Δεν υπάρχει τέτοιο αποθηκευτήριο "%s"!',
      'Unsaved' => 'Μη αποθηκευμένα',
      'Create Revision' => 'Δημιουργία αναθεώρησης',
      '(On Diff #%d)' => '(Στην διαφορά #%s)',
      'Diff %s' => 'Διαφορά %s',
      'Create New Revision' => 'Δημιουργία νέας θεώρησης',
      '▲ Show %s Line(s)' => '▲ Εμφάνιση %s γραμμή(-ών)',
      'Show First %s Line(s)' => 'Εμφάνιση πρώτων %s Γραμμή(-ών)',
    );
  }

}
