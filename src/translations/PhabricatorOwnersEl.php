<?php

final class PhabricatorOwnersEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Package name is required.' => 'Το όνομα συσκευασίας απαιτείται.',
      'Create New Package' => 'Δημιουργία νέας συσκευασίας',
      'Include' => 'Συμπερίληψη',
      'Included Paths' => 'Συμπεριληφθέντες διαδρομές',
      'Owners Packages' => 'Συσκευασίες ιδιοκτητών',
      'Auto Review' => 'Αυτοαναθεώρηση',
      'Packages: %s' => 'Συσκευασίες: %s',
      'owner' => 'ιδιοκτήτης',
      'The package description.' => 'Η περιγραφή του πακέτου.',
      '%s renamed this package from %s to %s.' => 'Ο %s μετονόμασε αυτή τη συσκευασία από %s σε %s.',
      'Type a package name or function...' => 'Πληκτρολογήστε όνομα συσκευασίας ή λειτουργία...',
      'Save Paths' => 'Αποθήκευση διαδρομών',
      'Edit Paths' => 'Επεξεργασία διαδρομών',
      'Owners User Guide' => 'Οδηγός Χρήστη Ιδιοκτητών',
      'Configure Owners.' => 'Ρύθμιση ιδιοκτητών.',
      'Weak' => 'Αδύναμος',
      'Strong (Control All Paths)' => 'Δυνατό (Έλεγχος όλων των διαδρομών)',
      'Custom Owners fields.' => 'Εξατομικευμένα πεδία ιδοκτητών.',
      'Own Source Code' => 'Ιδιόκτηση κώδικα',
      'Authority' => 'Αρχή',
      'Owners of a package may always view it.' => 'Οι ιδιοκτήτες μιας συσκευασίας μπορούν πάντα να τη βλέπουν.',
      'Archive or enable the package.' => 'Αρχειοθέτηση ή ενεργοποίηση της συσκευασίας.',
      'Owners Package' => 'Συσκευασία ιδιοκτητών',
      'Browse Packages by Owner' => 'Περιήγηση συσκευασιών ανά ιδιοκτήτη',
      'No Autoreview' => 'Χωρίς αυτοθεώρηση',
      'Create a Package' => 'Δημιουργία συσκευασίας',
      'Search for packages by included repositories.' => 'Αναζήτηση για συσκευασίες από τα συμπεριλαμβανόμενα αποθετήρια.',
      '%s adjusted autoreview from %s to %s.' => 'Ο %s προσάρμοσε την αυτοαναθεώρηση από το %s στο %s.',
      'Owned' => 'Ιδιόκτητο',
      'No repository PHID for path "%s"!' => 'Δεν υπάρχει PHID αποθηκευτηρίου για τη διαδρομή "%s"!',
      '%s archived this package.' => 'Ο %s αρχειοθέτησε αυτή τη συσκευασία.',
      '%s added %s owner(s): %s.' => 'Ο %s πρόσθεσε %s ιδιοκτήτης(-ες): %s.',
      'Get the paths for each package.' => 'Λάβετε τις διαδρομές για κάθε συσκευασία.',
      'Human-readable description of the package.' => 'Περιγραφή της συσκευασίας αναγνώσιμη από ανθρώπους.',
      'Strong' => 'Δυνατό',
      'Packages: ...' => 'Συσκευασίες: ...',
      'Activate Package' => 'Ενεργοποίηση συσκευασίας',
      'Adopt today!' => 'Υιοθέτηση σήμερα!',
      '%s activated this package.' => 'Ο %s ενεργοποίησε αυτή τη συσκευασία.',
      'List of package owners.' => 'Κατάλογος ιδιοκτητών συσκευασίας.',
      'Active or archived status of the package.' => 'Ενεργό ή αρχειοθετημένο καθεστώς της συσκευασίας.',
      'PACKAGE DETAIL' => 'Λεπτομέρεια συσκευασίας',
      '%s removed %s owner(s): %s.' => 'Ο %s αφαίρεσε %s ιδιοκτήτης(-ες): %s.',
      'CHANGES TO PACKAGE DESCRIPTION' => 'Αλλαγές στην περιγραφή της συσκευασίας',
      'Edit Paths: %s' => 'Επεξεργασία διαδρομών: %s',
      'Package %d' => 'Συσκευασία %s',
      'Add New Path' => 'Προσθήκη νέας διαδρομής',
      'Active Packages' => 'Ενεργά πακέτα',
      'Exclude' => 'Εξαίρεση',
      'Archive Package' => 'Αρχειοθέτηση πακέτου',
      'Weak (Control Unowned Paths)' => 'Αδύναμο (Έλεγχος μη ιδιόκτητων διαδρομών)',
      'This package will be marked as archived.' => 'Αυτή η συσκευασία θα επισημανθεί ως αρχειοθετημένη.',
    );
  }

}
