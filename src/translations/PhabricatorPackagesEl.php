<?php

final class PhabricatorPackagesEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Once a publisher is created, its key can not be changed.' => 'Όταν ένας εκδότης δημιουργηθεί, το κλειδί του δεν μπορεί να αλλαχθεί.',
      'No publishers found.' => 'Δεν βρέθηκε εκδότες.',
      'Package name "%s" is not valid: package names must not be more than %s characters long.' => 'Το όνομα πακέτου "%s" δεν είναι έγκυρο: τα ονόματα πακέτων δεν πρέπει να έχουν πάνω από %s χαρακτήρες.',
      'Package Key' => 'Κλειδί πακέτου',
      'Publishers' => 'Εκδότες',
      'Package key "%s" is not valid: package keys may only contain lowercase latin letters.' => 'Το κλειδί πακέτου "%s" δεν είναι έγκυρο: τα κλειδιά πακέτα μπορούν να περιέχουν μόνο μικρούς λατινικούς χαρακτήρες.',
      'Package Packages' => 'Πακετάρισμα πακέτων',
      'Apply transactions to create a new publisher or edit an existing one.' => 'Εφαρμόστε συναλλαγές για την δημιουργία ενός νέου εκδότη ή να επεξεργαστείτε έναν υπάρχοντα.',
      'Package Publisher' => 'Εκδότης πακέτων',
      'Read information about versions.' => 'Ανάγνωση πληροφοριών σχετικά με τις εκδόσεις.',
      '%s changed the name of this version from %s to %s.' => 'Ο %s άλλαξε το όνομα αυτής της έκδοσης από %s σε %s.',
      'Can Create Publishers' => 'Μπορεί να δημιουργήσει εκδότες',
      'Default Publisher Edit Policy' => 'Προεπιλεγμένη πολιτική επεξεργασίας εκδοτών',
      '%s created this package.' => 'Ο %s δημιούργησε αυτό το πακέτο.',
      'Browse Package Publishers' => 'Περιήγηση σε εκδότες πακέτων.',
      'Publisher name "%s" is not valid: publisher names are required.' => 'Το όνομα δημιουργού "%s" δεν είναι έγκυρο: τα ονόματα δημιουργών απαιτούνται.',
      'Version name "%s" is not valid: version names are required.' => 'Το όνομα έκδοσης "%s" δεν είναι έγκυρο: τα ονόματα εκδόσεων απαιτούνται.',
      'Edit Version' => 'Επεξεργασία έκδοσης',
      'Edit Package Publisher Configurations' => 'Επεξεργασία διαμορφώσεων δημιουργών πακέτων',
      'Search for versions by package.' => 'Αναζήτηση για εκδόσεις ανά πακέτο.',
      'Edit Package Version Configurations' => 'Επεξεργασία διαμορφώσεων εκδόσεων πακέτων',
      'The package key "%s" is already in use by another package provided by this publisher.' => 'Το κλειδί πακέτου "%s" είναι ήδη σε χρήση από άλλο πακέτο που παρέχεται από αυτό το δημιουργό.',
      'Unique key to identify the package.' => 'Μοναδικό κλειδί για την αναγνώριση του πακέτου.',
      'Search for publishers by name substring.' => 'Αναζήτηση για εκδότες ανά υποσυμβολοσειρά ονόματος.',
      'Publish Software' => 'Δημοσίευση λογισμικού',
      'Default edit policy for newly created publishers.' => 'Προεπιλεγμένη πολιτική επεξεργασίας για νεοδημιούργητους εκδότες.',
      'All Versions' => 'Όλες οι εκδόσεις',
      'Version name "%s" is not valid: version names may not start or end with a period or hyphen.' => 'Το όνομα έκδοσης "%s" δεν είναι έγκυρο: τα ονόματα έκδοσης δεν πρέπει να ξεκινούν ή να τελειώνουν με μια περίοδο ή υφέν.',
      'Search for packages by name substring.' => 'Αναζήτηση για πακέτα ανά υποσυμβολοσειρά ονόματος.',
      'You do not have permission to create publishers.' => 'Δεν έχετε άδεια να δημιουργήσετε εκδότες.',
      '%s created this publisher.' => 'Ο %s δημιούργησε αυτό τον εκδότη.',
      'This engine is used to edit Packages publishers.' => 'Αυτή η μηχανή χρησιμοποιείται για την επεξεργασία εκδοτών Πακέτων.',
      'Publisher' => 'Εκδότης',
      'Package Publishers' => 'Εκδότης πακέτου',
      'Name of the publisher.' => 'Όνομα του εκδότη.',
      'Applications and Extensions' => 'Εφαρμογές και επεκτάσεις',
      'Packages must have a name.' => 'Τα πακέτα πρέπει να έχουν ένα όνομα.',
      'Edit Version: %s' => 'Επεξεργασία έκδοσης: %s',
      'Publisher for this package.' => 'Εκδότης για αυτό το πακέτο.',
      'Publishers must have a name.' => 'Οι εκδότες πρέπει να έχουν ένα όνομα.',
      'The unique key of the publisher.' => 'Το μοναδικό κλειδί του εκδότη.',
      'Create Version' => 'Δημιουργία έκδοσης',
      '%s updated the name for %s from %s to %s.' => 'Ο %s ενημέρωσε το όνομα για το %s από %s σε %s.',
      'No versions found.' => 'Δεν βρέθηκαν εκδόσεις.',
      'Default Package Edit Policy' => 'Προεπιλεγμένη πολιτική επεξεργασίας πακέτων',
      'Versions must have a name.' => 'Οι εκδόσεις πρέπει να έχουν ένα όνομα.',
      'Publisher Key' => 'Κλειδί εκδότη',
      'Create Publisher' => 'Δημιουργία εκδότη',
      'Package for this version.' => 'Πακέτο για αυτή την έκδοση.',
      'Read information about publishers.' => 'Ανάγνωση πληροφοριών σχετικά με τους εκδότες.',
      'Edit Publisher: %s' => 'Επεξεργασία εκδότη: %s',
      'Name of the version.' => 'Όνομα της έκδοσης.',
      'The name of the version.' => 'Το όνομα της έκδοσης.',
      'Package Versions' => 'Εκδόσεις πακέτου',
      'All Publishers' => 'Όλοι οι εκδότες',
      '%s created this version.' => 'Ο %s δημιούργησε αυτή την έκδοση.',
      'Search for packages by publisher.' => 'Αναζήτηση για πακέτα ανά εκδότη.',
      'Edit Publisher' => 'Επεξεργασία εκδότη',
      'The name of the publisher.' => 'Το όνομα του εκδότη.',
      'Read information about packages.' => 'Ανάγνωση πληροφοριών σχετικά με τα πακέτα.',
      'Type a publisher name...' => 'Πληκτρολογήστε όνομα εκδότη...',
    );
  }

}
