<?php

final class PhabricatorPassphraseEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Create Credential' => 'Δημιουργία πιστοποιητικού',
      'Credential Already Locked' => 'Το πιστοποιητικό έχει ήδη κλειδωθεί',
      '%s locked this credential.' => 'Ο %s έχει κλειδώσει αυτό το πιστοποιητικό.',
      'The private material for this credential has been destroyed.' => 'Το ιδιωτικό υλικό για αυτό το πιστοποιητικό έχει καταστραφεί.',
      'Generated Key' => 'Δημιουργημένο κλειδί',
      'This credential is permanently locked and can not be edited.' => 'Αυτό το πιστοποιητικό είναι μόνιμα κλειδωμένο και δεν μπορεί να τροποποιηθεί.',
      '(No Credentials)' => '(Χωρίς πιστοποιητικά)',
      'The author of this credential can take this action.' => 'Ο συγγραφές αυτού του πιστοποιητικού μπορεί να πάρει αυτή τη δράση.',
      'Active Credentials' => 'Ενεργά πιστοποιητικά',
      'Show Only Destroyed Credentials' => 'Εμφάνιση κατεστραμμένων πιστοποιητικών μόνο',
      'Credential Type' => 'Τύπος πιστοποιητικού',
      'Credential is locked' => 'Το πιστοποιητικό είναι κλειδωμένο',
      'All Credentials' => 'Όλα τα πιστοποιητικά',
      'Lock Permanently:' => 'Κλείδωμα μόνιμα:',
      '%s created this credential.' => 'Ο %s έχει δημιουργήσει αυτό το πιστοποιητικό.',
      'Edit Credential' => 'Επεξεργασία πιστοποιητικού',
      '%s locked credential %s.' => 'Ο %s κλείδωσε το πιστοποιητικό %s.',
      'Lock Credential' => 'Κλείδωμα πιστοποιητικού',
      'Really destroy credential?' => 'Καταστροφή του πιστοποιητικού πραγματικά;',
      'Created by %s on %s.' => 'Δημιουργήθηκε από τον %s στις %s.',
      'Login/Username' => 'Σύνδεση / όνομα χρήστη',
      'Show Secret' => 'Εμφάνιση μυστικού',
      'Show Public Key' => 'Εμφάνιση δημόσιου κλειδιού',
      'Incorrect' => 'Λάθος',
      'New Credential' => 'Νέο πιστοποιητικό',
      'Create a Credential' => 'Δημιουργία πιστοποιητικού',
      'Credentials must have a name.' => 'Τα πιστοποιητικά πρέπει να έχουν όνομα.',
      'You must choose a credential type.' => 'Πρέπει να επιλέξετε τύπο πιστοποιητικού.',
      'Public Key (%s)' => 'Δημόσιο κλειδί (%s)',
      'Failed to load credential "%s"!' => 'Αποτυχία στην φόρτωση του πιστοποιητικού "%s"!',
      'Credential Author' => 'Συγγραφέας πιστοποιητικού',
      'credential author' => 'Συγγραφέας πιστοποιητικού',
      'Credential "%s" must provide "%s", but provides "%s"!' => 'Το πιστοποιητικό "%s" πρέπει να παρέχει το "%s", αλλά παρέχει το "%s"!',
      'Private Key' => 'Ιδιωτικό Κλειδί',
      'Add New Credential' => 'Προσθήκη νέου πιστοποιητικού',
      'Credential Store' => 'Κατάστημα πιστοποιητικού',
      '%s renamed %s credential %s to %s.' => 'Ο %s μετονόμασε το πιστοποιητικό %3$s σε %4$s.',
      'New Credential: %s' => 'Νέο πιστοποιητικό: %s',
      'Password for Key' => 'Κωδικός για το κλειδί',
      'Credential is required!' => 'Το πιστοποιητικό απαιτείται!',
      'Edit Credential: %s' => 'Επεξεργασία πιστοποιητικού: %s',
      'Destroy Credential' => 'Καταστροφή πιστοποιητικού',
      'SSH Private Key' => 'Ιδιωτικό κλειδί SSH',
      'Invalid Credential ("%s")' => 'Μη έγκυρο πιστοποιητικό ("%s")',
      'No credentials found.' => 'Δνε βρέθηκαν πιστοποιητικά.',
      '%s destroyed the secret for credential %s.' => 'Ο %s κατέστρεψε το μυστικό για το πιστοποιητικό %s.',
      'Lock Permanently' => 'Κλείδωμα μόνιμα',
      '%s updated the description for credential %s.' => 'Ο %s ενημέρωσε την περιγραφή για το πιστοποιητικό %s.',
      'CHANGES TO CREDENTIAL DESCRIPTION' => 'Αλλαγές στην περιγραφή του πιστοποιητικού',
      'Locked Permanently' => 'Κλειδώθηκε μόνιμα',
      'Login: %s' => 'Σύνδεση: %s',
    );
  }

}
