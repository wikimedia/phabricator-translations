<?php

final class PhabricatorManiphestEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Δημιουργήστε μια εργασία',
      'Triage' => 'Τριάδα',
      'Define task subtypes.' => 'Ορίστε υποτύπων εργασίας.',
      '%s removed %s as the assignee of this task.' => 'Ο %s αφαίρσε τον %s ως τον ανατεθέντα της εργασίας.',
      'Priority of the task.' => 'Προτεραιτότητα της εργασίας.',
      'Task Fields' => 'Πεδία εργασίας',
      'Assignee' => 'Ανατεθέντας',
      'Open Parents' => 'Ανοιχτοί γονείς',
      'Update an existing Maniphest task.' => 'Ενημέρωση μιας υπάρχουσας εργασίας του Maniphest.',
      'Change Points' => 'Αλλαγή πόντων',
      '%s closed %s as %s.' => 'Ο %s έκλεισε τον %s ως %s.',
      'This task has been locked.' => 'Αυτή η εργασία έχει κλειδωθεί.',
      '%s claimed %s.' => 'Ο %s διεκδίκησε το %s.',
      'TASK DETAIL' => 'Λεπτομέρεια εργασίας',
      'The task already has the selected owner.' => 'Η εργασία έχει ήδη τον επιλεγμένο ιδιοκτήτη της.',
      'Search Subtasks' => 'Αναζήτηση υποεργασιών',
      'Merged' => 'Συγχωνεύτηκε',
      'Closed after %s' => 'Έκλεισε μετά το %s',
      'Changed Task Priority' => 'Η προτεραιότητα εργασίας άλλαξε',
      'New task name.' => 'Νέο όνομα εργασίας',
      'Tasks must have a title.' => 'Οι εργασίας πρέπει να έχουν τίτλο.',
      'Oldest (Pri)' => 'Παλαιότερο',
      'Unblock' => 'Άρση φραγής',
      'Select and reorder task fields.' => 'Επιλογή και επαναδιάταξη πεδίων εργασίας.',
      'Description Preview' => 'Προεπισκόπηση περιγραφής',
      'Oldest open task.' => 'Παλαιότερη ανοιχτή εργασία.',
      'Duplicates Merged Here' => 'Διπλότυπα συγχωνευμένα εδώ',
      'Subtasks' => 'Υποεργασίες',
      '○ %s' => '○ %s',
      'Maniphest Reports' => 'Αναφορές Maniphest',
      'Mentioned In' => 'Αναφέρεται σε',
      'Story Points' => 'Πόντοι Ιστορίας',
      '%s closed this task as a duplicate of %s.' => 'Ο %s έκλεισε την εργασία ως διπλότυπο του %s.',
      'Recently Closed' => 'Έκλεισε πρόσφατα',
      'Merged In' => 'Συγχωνεύτηκε σε',
      '%s created subtask %s.' => 'Ο %s δημιούργησε την υποεργασία %s.',
      'Estimated number of hours this will take.' => 'Εκτιμώμενος αριθμός ωρών που αυτό θα πάρει.',
      'All Time' => 'Όλων των εποχών',
      'Subtask' => 'Υποεργασία',
      'Points' => 'Σημεία',
      'Closed, Duplicate' => 'Κλειστό, Διπλότυπο',
      'Status of the task.' => 'Κατάσταση της εργασίας.',
      'Subtasks.' => 'Υποεργασίες.',
      'Updated Before' => 'Ενημερώθηκε πριν από',
      'Search...' => 'Αναζήτηση...',
      'Task' => 'Εργασία',
    );
  }

}
