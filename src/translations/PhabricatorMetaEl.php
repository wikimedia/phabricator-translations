<?php

final class PhabricatorMetaEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Πληροφορία',
      'Syntax' => 'Επισήμανση',
      'You cannot install an installed application.' => 'Δεν μπορείτε να εγκαταστήσετε μια εγκατεστημένη εφαρμογή.',
      'Create Application' => 'Δημιουργία εφαρμογής',
      'Unknown order "%s"!' => 'Άγνωστη σειρά "%s"!',
      'Policy does not exist.' => 'Η πολιτική αυτή δεν υπάρχει.',
      'This application is a prototype. %s' => 'Αυτή η εφαρμογή είναι ένα πρωτότυπο. %s',
      'Confirmation' => 'Επιβεβαίωση',
      'Explore More Applications' => 'Εξερεύνηση περισσοτέρων εφαρμογών',
      'Uninstalled' => 'Απεγκατεστημένα',
      'Launchable' => 'Κυκλοφορήσιμο',
      'Prototype' => 'Πρωτότυπο',
      'Edit Policies: %s' => 'Επεξεργασία πολιτικών: %s',
      'Create New Application' => 'Δημιουργία νέας εφαρμογής',
      'Extension' => 'Επέκταση',
      'Validation Failed' => 'Η Επικύρωση Απέτυχε',
      'Show Installed Applications' => 'Εμφάνιση Εγκατεστημένων Εφαρμογών',
      'Mail Commands Overview' => 'Επισκόπηση Εντολών Ταχυδρομείου',
      'Uninstall' => 'Απεγκατάσταση',
      'This application is required and cannot be uninstalled.' => 'Αυτή η εφαρμογή δεν μπορεί να απεγκατασταθεί, επειδή απαιτείται για να δουλέψει ο Phabricator.',
      'Install %s application?' => 'Εγκατάσταση της εφαρμογής %s;',
      'Quick Reference' => 'Γρήγορη αναφορά',
      'Show Prototype Applications' => 'Εμφάνιση Πρωτότυπων Εφαρμογών',
      'Edit Application: %s' => 'Επεξεργασία εφαρμογής: %s',
      'Show Third-Party Applications' => 'Εμφάνιση εφαρμογών τρίτου μέρους',
      'Show All Applications' => 'Εγκατάσταση όλων των εφαρμογών',
    );
  }

}
