<?php

final class PhabricatorDoorkeeperEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Using publisher \'%s\'.' => 'Χρησιμοποιώντας τον εκδότη \'%s\'.',
      'Connect to Other Software' => 'Σύνδεση προς άλλο λογισμικό',
      'Asana integration options.' => 'Ρυθμίσεις ενσωμάτωσης Asana.',
      'Imported From' => 'Εισήχθη από',
      'External Object' => 'Εξωτερικό αντικείμενο',
      'JIRA %s' => 'JIRA %s',
      'Asana Task %s' => 'Εργασία Asana %s',
      'GitHub Issue %s' => 'Ζήτημα GitHub %s',
      'Integration with Asana' => 'Ενσωμάτωση με το Asana',
      'Asana: %s' => 'Asana: %s',
      'GitHub User %s' => 'Χρήστης του GitHub %s',
      'Workspace Name' => 'Όνομα χώρου εργασίας',
      'Updating main task.' => 'Ενημέρωση κύριας εργασίας.',
    );
  }

}
