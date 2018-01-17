<?php

final class PhabricatorXhprofEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'Δείγματα XHProf',
      'Sampled (1/%d)' => 'Δοκιμασμένο (1/%s)',
      'All Samples' => 'Όλα τα δείγματα',
      'Parent Calls' => 'Γονικές κλήσεις',
      'Wall Time (Inclusive)' => 'Χρόνος τοίχου (χωρίς αποκλεισμό)',
      'Symbol' => 'Σύμβολο',
      'Wall Time (Exclusive)' => 'Χρόνος τοίχου (χωρίς αποκλεισμό)',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'Συνολικός βασικός χρόνος που χρειάστηκε σε αυτήν την λειτουργία και όλα τα παιδιά του (τα παιδιά αφορούν άλλη λειτουργία στην όλη διαδικασία).',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Ανώνυμο δείγμα',
      '%s Profile' => '%s Προφίλ',
      'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => 'Χρόνος τοίχου χρησιμοποιημένος σε αυτή τη λειτουργία, εξαιρώντας τον χρόνο που ξοδεύτηκε με παιδιά (τα παιδιά είναι οι άλλες λειτουργίες που καλούνται ενώ εκτελούνται).',
      'Manual Run' => 'Χειροκίνητη εκτέλεση',
      'Drag and drop .xhprof files to import them.' => 'Φέρτε και σύρτε αρχεία .xhprof για την εισαγωγή τους.',
      'PHP Profiling Tool' => 'Εργαλείο προφίλ PHP',
      'Metrics for this Call' => 'Μετρικές για αυτή τη κλήση',
      'Failed to unserialize XHProf profile!' => 'Αποτυχία για την αποεπεξεργασία του προφίλ XHProf!',
      'XHProf Profile' => 'Προφίλ XHProf',
      'Drop .xhprof Files to Import' => 'Σύρτε αρχεία .xhprof για εισαγωγή',
      'Wall Time' => 'Χρόνος τοίχου',
      'Download %s Profile' => 'Λήψη του προφίλ %s',
      'Child Calls' => 'Κλήσεις παιδιών',
    );
  }

}
