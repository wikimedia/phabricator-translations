<?php

final class PhabricatorCountdownEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'COUNTDOWN DETAIL' => 'Λεπτομέρειες αντίστροφης μέτρησης',
      'Minutes' => 'λεπτά',
      'Date when the countdown ends.' => 'Ημερομηνία τέλους της αντίστροφης μέτρησης.',
      'Change the end date of the countdown.' => 'Αλλαγή της ημερομηνίας τέλους της αντίστροφης μέτρησης.',
      'Edit Countdown: %s' => 'Επεξεργασία αντίστροφης μέτρησης: %s.',
      'Countdowns' => 'Αντίστροφες μετρήσεις',
      'Show only upcoming countdowns.' => 'Εμφάνιση των ανερχόμενων αντιστρόφων μετρήσεων μόνο.',
      'Default view policy for new countdowns.' => 'Προεπιλεγμένη πολιτική προβολής για νέες αντίστροφες μετρήσεις.',
      'Change the countdown description.' => 'Αλλαγή της περιγραφής της αντίστροφης μέτρησης.',
      'Create a Countdown' => 'Δημιουργία αντίστροφης μέτρησης',
      'Launched on %s' => 'Κυκλοφόρησε στο %s',
      'Countdown titles must not be longer than %s character(s).' => 'Οι τίτλοι των αντίστροφων μετρήσεων δεν πρέπει να είναι μεγαλύτεροι από %s χαρακτήρες.',
      'No countdowns found.' => 'Δεν βρέθηκαν αντίστροφες μετρήσεις.',
      'Upcoming' => 'Ανερχόμενες',
      'Someone comments on a countdown.' => 'Κάποιος σχολιάζει σε μια αντίστροφη μέτρηση.',
      'End Date (Future to Past)' => 'Ημερομηνία τέλους (Μέλλον προς Παρελθόν)',
      'Last Words' => 'Τελευταίες λέξεις',
      'New description.' => 'Νέα περιγραφή',
      'Edit Countdown' => 'Επεξεργασία αντίστροφης μέτρησης',
      'End Date' => 'Ημερομηνία τέλους',
      'Hours' => 'Ώρες',
      'Countdown' => 'Αντίστροφη μέτρηση',
      'New countdown end date.' => 'Νέα ημερομηνία τέλους αντίστροφης μέτρησης.',
      'Edit Countdowns' => 'Επεξεργασία αντίστροφων μετρήσεων',
      '%s updated the countdown end from %s to %s.' => 'Ο %s ενημέρωσε το τέλος της αντίστροφης μέτρησης από %s σε %s.',
      'Create Countdown' => 'Δημιουργία αντίστροφης μέτρησης',
      'Days' => 'Ημέρες',
      'The description of the countdown.' => 'Περιγραφή της αντίστροφης μέτρησης',
      'You must give the countdown an end date.' => 'Πρέπει να δώσετε ημερομηνία τέλους στην αντίστροφη μέτρηση.',
    );
  }

}
