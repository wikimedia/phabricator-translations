<?php

final class PhabricatorDrydockEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'All Operations' => 'Όλες οι λειτουργίες',
      'Resource' => 'Πηγή',
      'Show Details' => 'Εμφάνιση λεπτομερειών',
      'Lease %d' => 'Ενοίκιαση του %s',
      'Set lease expiration time.' => 'Ορισμός ώρας λήξης της ενοίκιασης.',
      'Logs' => 'Καταγραφές γεγονότων',
      'Hide Details' => 'Απόκρυψη λεπτομερειών',
      'Via:' => 'Μέσω:',
      'Operation Status' => 'Κατάσταση Λειτουργίας',
      'Host (%s)' => 'Οικοδεσπότης (%s)',
      'Unknown Repository' => 'Άγνωστο αποθετήριο',
      'Working' => 'Δουλεύει',
      'Commands' => 'Εντολές',
      'Operation %d' => 'Λειτουργία %s',
      '<Unknown>' => '<Άγνωστο>',
      'Lease destroyed.' => 'Η ενοίκιαση καταστράφηκε.',
      'Dismiss' => 'Απόρριψη',
      'Provides: %s' => 'Παρέχει: %s',
    );
  }

}
