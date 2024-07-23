<?php

final class PhabricatorBaseEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Όχι εφαρμογή \'%s\'!',
      'This application is required, so all users must have access to it.' => 'Αυτή η εφαρμογή απαιτείται για τον Phabricator ώστε να λειτουργήσει, επομένως όλοι οι χρήστες πρέπει να έχουν πρόσβαση σε αυτή.',
      'Can Configure Application' => 'Μπορεί να ρυθμίσει την εφαρμογή',
      'Can Use Application' => 'Μπορεί να χρησιμοποιήσει την εφαρμογή',
      'Core Applications' => 'Εφαρμογές πυρήνα',
      'No application!' => 'Χωρίς εφαρμογή!',
      '%s Application' => '%s εφαρμογή',
      'Developer Tools' => 'Εργαλεία προγραμματιστή',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'Το αίτημα περιλαμβάνει την περιορισμένη παράμετρο "%s", αλλά αυτός ο ελεγκτής ("%s") δεν το τοποθετεί σε άσπρη λίστα. Η απόρριψη εξυπηρέτησης ίσως είναι μέρος μιας επίθεσης ανακατεύθυνσης.',
      'Unknown capability \'%s\'!' => 'Άγνωστη ικανότητα \'%s\'!',
    );
  }

}
