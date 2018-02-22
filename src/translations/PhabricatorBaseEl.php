<?php

final class PhabricatorBaseEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Όχι εφαρμογή \'%s\'!',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => 'Αναμονή στον χρήστη \'%s\' να επιτρέψει την πρόσβαση στο \'%s\'.',
      'Can Configure Application' => 'Μπορεί να ρυθμίσει την εφαρμογή',
      'Can Use Application' => 'Μπορεί να χρησιμοποιήσει την εφαρμογή',
      'Application Controller' => 'Ελεγκτής εφαρμογών',
      'Public + configured' => 'Δημόσιος + έχει ρυθμιστεί',
      'Public Access' => 'Δημόσια πρόσβαση',
      'Core Applications' => 'Εφαρμογές πυρήνα',
      'No Login Required' => 'Δεν απαιτείται σύνδεση',
      'No application!' => 'Χωρίς εφαρμογή!',
      '%s Application' => '%s εφαρμογή',
      'Email Verification Required' => 'Απαιτείται επιβεβαίωση διεύθυνσης ηλ. ταχυδρομείου',
      'Developer Tools' => 'Εργαλεία προγραμματιστή',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'Αυτή η εφαρμογή απαιτείται για τον Phabricator ώστε να λειτουργήσει, επομένως όλοι οι χρήστες πρέπει να έχουν πρόσβαση σε αυτή.',
      'Unknown capability \'%s\'!' => 'Άγνωστη ικανότητα \'%s\'!',
      'Admin Required' => 'Απαιτείται διαχειριστής',
      'Email Verification Required, With Exception' => 'Απαιτείται επιβεβαίωση διεύθυνσης ηλ. ταχυδρομείου, με εξαίρεση',
      'Allow Disabled' => 'Επιτρέψτε τα απενεργοποιημένα',
    );
  }

}
