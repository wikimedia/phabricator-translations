<?php

final class PhabricatorAphlictEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'The notification server should not be run as root.' => 'Ο διακομιστής ειδοποιήσεων δεν θα έπρεπε να εκτελεστεί ως ρίζα.',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'Δύο διακομιστές (στα ευρετήρια "%s" και "%s") είναι δεμένοι στην ίδια θύρα ("%s"). Κάθε διακομιστής πρέπει να δένεται σε διαφορετική θύρα.',
      'Failed to %s!' => 'Αποτυχία στο %s!',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'Σφάλμα: Η λειτουργία PHP %s είναι απενεργοποιημένη. Πρέπει να την ενεργοποιήσετε για να τρέξετε το Aphlict σε αυτή την μηχανή.',
      'Stop the notification server.' => 'Σταμάτημα του διακομιστή ειδοποιήσεων.',
      'Configuration file is not properly formatted JSON. %s' => 'Το αρχείο προσδιορισμού δεν είναι σωστά διαμορφωμένο JSON. %s',
    );
  }

}
