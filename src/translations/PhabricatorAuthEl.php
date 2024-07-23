<?php

final class PhabricatorAuthEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      '%s enabled login.' => 'Ο %s ενεργοποίησε την σύνδεση.',
      'SSH Key Actions' => 'Δράσεις κλειδιού SSH',
      'Algorithm' => 'Αλγόριθμος',
      'You must specify the username of the account to recover.' => 'Πρέπει να προσδιορίσετε το όνομα χρήστη του λογαριασμού για ανάκτηση.',
      'Must Verify Email' => 'Η διεύθυνση ηλ. ταχυδρομείου πρέπει να επαληθευτεί',
      '%s enabled auto login.' => 'Ο %s ενεργοποίησε την αυτόματη σύνδεση.',
      'Verify Email' => 'Επιβεβαίωση διεύθυνσης ηλ. ταχυδρομείου',
      'Account is already registered or linked.' => 'Ο λογαριασμός είναι ήδη εγγεγραμμένος ή συνδεδεμένος.',
      'Specify an OAuth client id with "--id".' => 'Προσδιορίστε ένα αναγνωριστικό πελάτη OAuth με %s.',
      'Google' => 'Google',
      'No Providers Configured:' => 'Δεν ρυθμίστηκαν πάροχοι:',
      'Auth' => 'Auth',
      'Asana' => 'Asana',
      'Disqus' => 'Disqus',
      'OAuth client "%s" is already trusted.' => 'Ο Phabricator ήδη εμπιστεύεται τον πελάτη του OAuth "%s".',
      '%s is required!' => 'το %s απαιτείται!',
    );
  }

}
