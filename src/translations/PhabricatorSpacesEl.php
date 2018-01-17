<?php

final class PhabricatorSpacesEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      '%s updated the space description for %s.' => 'Ο %s ενημέρωσε την περιγραφή χώρου για το %s.',
      '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)' => '(Αυτό το σφάλμα γενικά δείχνει ότι το %s είναι ενεργοποιημένο, αλλά δεν υπάρχουν χώροι με πολιτική προβολής "%s". Αυτές οι ρυθμίσεις είναι αναιρετικές και σημαίνουν λανθασμένη διαμόρφωση.)',
      'Spaces User Guide' => 'Οδηγός χρήστη χώρων',
      'Hide Active Spaces' => 'Απόκρυψη ενεργών χώρων',
      '%s updated the space description.' => 'Ο %s ενημέρωσε την περιγραφή χώρου.',
      '%s archived space %s.' => 'Ο %s αρχειοθέτησε τον χώρο %s.',
      'Default edit policy for newly created spaces.' => 'Προεπιλεγμένη πολιτική επεξεργασίας για νεοδημιούργητους χώρους.',
      'Only the first space created can be the default space, and it must remain the default space evermore.' => 'Μόνο ο πρώτος χώρος που δημιουργήθηκε μπορεί να είναι ο προεπιλεγμένος χώρος, και πρέπει να παραμείνει ως ο προεπιλεγμένος χώρος για πάντα.',
      'Search for objects in certain spaces.' => 'Αναζήτηση για αντικείμενα σε συγκεκριμένους χώρους.',
      'Activate Space: %s' => 'Ενεργοποίηση χώρου: %s',
      'Support for Spaces' => 'Υποστήριξη για χώρους',
      '%s renamed space %s from %s to %s.' => 'Ο %s μετονόμασε τον χώρο %s από %s σε %s.',
      'Create a Space' => 'Δημιουργία χώρου',
      'Alternate Space' => 'Εναλλακτικός χώρος',
      '%s activated this space.' => 'Ο %s ενεργοποίησε αυτό τον χώρο.',
      'Archive Space: %s' => 'Αρχειοθέτηση χώρου: %s',
      'Spaces must have a name.' => 'Οι χώροι πρέπει να έχουν ένα όνομα.',
      'Existing objects in this Space will be hidden from query results by default.' => 'Τα υπάρχοντα αντικείμενα σε αυτό τον χώρο θα αποκρυφτούν από αποτελέσματα ερωτήσεων από προεπιλογή.',
      '%s made this the default space.' => 'Ο %s δημιούργησε τον προεπιλεγμένο χώρο.',
      '%s archived this space.' => 'Ο %s αρχειοθέτησε αυτό το χώρο.',
      'Type a space name...' => 'Πληκτρολογήστε όνομα χώρου...',
      'Existing objects will no longer be hidden from query results.' => 'Τα υπάρχοντα αντικείμενα δεν θα αποκρύπτονται πλέον από αποτελέσματα ερωτήσεων.',
      'You do not have permission to create spaces.' => 'Δεν έχετε άδεια να δημιουργήσετε νέους χώρους.',
      'Ask someone to give you access to a space so you can view and create objects.' => 'Ρωτήστε κάποιον να σας δώσει πρόσβαση σε ένα χώρο για να μπορείτε να δείτε και δημιουργήσετε αντικείμενα.',
      'Default Space' => 'Προεπιλεγμένος χώρος',
      'Archive Space' => 'Αρχειοθέτηση χώρου',
      'CHANGES TO SPACE DESCRIPTION' => 'Αλλαγές στην περιγραφή χώρων',
      '%s activated space %s.' => 'Ο %s ενεργοποίησε τον χώρο %s.',
      '%s created this space.' => 'Ο %s δημιούργησε αυτό τον χώρο.',
      'Space %s: %s' => 'Χώρος %s: %s',
    );
  }

}
