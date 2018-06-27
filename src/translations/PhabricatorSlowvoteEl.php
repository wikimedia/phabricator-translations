<?php

final class PhabricatorSlowvoteEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Enter Deliberations' => 'Εισαγάγετε διαβουλεύσεις',
      'Close Poll' => 'Κλείσιο ψηφοφορίας',
      '%s renamed %s.' => 'Ο %s μετονόμασε τον %s.',
      'Create a Poll' => 'Δημιουργήστε ψηφοφορία',
      '%s made %s responses appear in a random order.' => 'Ο %s έκανε %s απαντήσεις που εμφανίζονται με τυχαία σειρά.',
      'Create Slowvote' => 'Δημιουργία αργής ψηφοφορίας.',
      'No such poll exists.' => 'Δεν υπάρχει τέτοια ψηφοφορία.',
      'Edit Poll' => 'Επεξεργασία ψηφοφορίας',
      'The author of a poll can always view and edit it.' => 'Ο συγγραφέας μιας ψηφοφορίας μπορεί πάντα να την δει και να την επεξεργαστεί.',
      'Polls must have a question.' => 'Οι ψηφοφορίες πρέπει να έχουν ένα ερώτημα.',
      'Reopen Poll' => 'Ξανανοίξτε την ψηφοφορία.',
      '%s made poll responses appear in a fixed order.' => 'Ο %s έκανε απαντήσεις ψηφοφορίας που εμφανίζονται με επιλεγμένη σειρά.',
      '%s Approval (%d / %d)' => '%s έγκριση (%s / %s)',
      'Approval (Multiple Choice)' => 'Έγκριση (πολλαπλής επιλογής)',
      'CHANGES TO POLL DESCRIPTION' => 'Αλλαγές στην περιγραφή της δημοσκόπησης',
      'Show choices in random order.' => 'Εμφάνιση επιλογών σε τυχαία σειρά.',
      '%s set the description of %s.' => 'Ο %s όρισε την περιγραφή του %s.',
      '%s updated the description for this poll.' => 'Ο %s ενημέρωσε την περιγραφή για αυτή τη ψηφοφορία.',
      'You must vote to see the results.' => 'Πρέπει να ψηφίσετε για να δείτε τα αποτελέσματα.',
      'Edit Poll: %s' => 'Επεξεργασία δημοσκόπησης: %s',
      'Reopen' => 'Ξανάνοιγμα',
      'Responses' => 'Απαντήσεις',
      '%s changed who can see the responses of %s.' => '%s άλλαξε αυτόν που μπορεί να δει τις απαντήσεις του %s.',
      '%s (%d / %d)' => '%s (%s / %s)',
      'Only you can see the results.' => 'Μόνο εσείς μπορείτε να δείτε τα αποτελέσματα.',
      'Response %d' => 'Απάντηση %s',
    );
  }

}
