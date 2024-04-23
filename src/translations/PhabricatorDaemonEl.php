<?php

final class PhabricatorDaemonEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Temporary Failures' => 'Προσωρινές αποτυχίες',
      'Clock' => 'Ρολόι',
      'Leased' => 'Νοικιασμένο',
      'Starting daemons as %s' => 'Ξεκινώντας τους δαίμονες ως %s',
      'Retries' => 'Ξαναπροσπαθεί',
      'Shutting Down' => 'Απενεργοποιείται',
      'Terminating process %d...' => 'Τερματισμός της διαδικασίας %s...',
      'Running as' => 'Εκτελείται ως',
      'Archived Tasks' => 'Αρχειοθετημένες εργασίες',
      'Reloading process %d...' => 'Επαναφόρτωση της διαδικασίας %s...',
      'Not Leased' => 'Δεν είναι νοικιασμένο',
      'Task Does Not Exist' => 'Η εργασία δεν υπάρχει',
      'Failures' => 'Αποτυχίες',
      'Unknown task status!' => 'Άγνωστη κατάσταση εργασίας!',
      'Not Completed' => 'Μη ολοκληρωμένο',
      'Waiting For Confirmation' => 'Περιμένει για επιβεβαίωση',
      'Lease Expires' => 'Η ενοίκιαση λήγει',
    );
  }

}
