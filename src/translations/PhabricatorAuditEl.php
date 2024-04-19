<?php

final class PhabricatorAuditEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'Χρήστες',
      '%s added subscribers: %s.' => 'Ο %s πρόσθεσε συνδρομητές: %s',
      '%s added subscribers...' => 'Ο %s πρόσθεσε συνδρομητές...',
      'Updating "%s" (%s)...' => 'Ενημέρωση του "%s" (%s)...',
      'Audits' => 'Έλεγχοι',
      'Unreachable' => 'Άφταστο',
      'Active Audits' => 'Ενεργοί έλεγχοι',
      'No such user with username "%s"!' => 'Δεν υπάρχει τέτοιος χρήστης με όνομα χρήστη "%s"!',
      'Deleting audit %d...' => 'Διαγραφή ελέγχου %s...',
      'Audit Requested' => 'Ζητείται έλεγχος',
      'Audit' => 'Έλεγχος',
    );
  }

}
