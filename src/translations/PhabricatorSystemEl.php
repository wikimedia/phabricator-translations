<?php

final class PhabricatorSystemEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Panic!' => 'Πανικός!',
      'No such object "%s" exists!' => 'Δεν υπάρχει τέτοιο αντικείμενο "%s"!',
      'Engine: Destruction' => 'Μηχανή: Καταστροφή',
      'Permanently destroy objects.' => 'Καταστροφή αντικειμένων μόνιμα.',
      '%d / hour' => '%s ανά ώρα',
      'Permanently destroyed %s object(s).' => '%s αντικείμενο(-α) καταστράφηκαν μόνιμα.',
      'IMPORTANT' => 'Σημαντικό',
      'Destruction Logs' => 'Μητρώα καταστροφής',
      'This likely indicates a severe misconfiguration or major service interruption.' => 'Αυτό μάλλον σημαίνει μια πολύ λανθασμένη διαμόρφωση ή σημαντική διακοπή της υπηρεσίας.',
      'Destroying objects...' => 'Η καταστροφή αντικειμένων είναι σε εξέλιξη...',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'Αυτό το σύστημα είναι ενεργό γιατί δεν υπάρχει σημαντική βάσξ δεδομένων \'\'%s\'\' στην επιλογή διαμόρφωσης \'\'%s\'\'.',
      'Select Character Encoding' => 'Επιλογή κωδικοποίησης χαρακτήρων',
      'DATA WILL BE PERMANENTLY DESTROYED' => 'Τα δεδομένα θα καταστραφούν για πάντα',
      'An administrator has placed Phabricator into read-only mode.' => 'Ένας διαχειριστής έθεσε το Phabricator σε λειτουργία μόνο για ανάγνωση.',
      'System' => 'Σύστημα',
      '%d / minute' => '%s ανά λεπτό',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => 'Η μέγιστη επιτρεπόμενη τιμή για αυτήν την ενέργεια είναι %s. Προωθείτε ενέργειες στην τιμή %s.',
      'Administrative Read-Only Mode' => 'Διαχειριστική λειτουργία μόνο για ανάγνωση',
      '%d / second' => '%s ανά δευτερόλεπτο',
      'As an administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => 'Ως διαχειριστής, μπορείτε να αναθεωρείτε πληροφορίες καταστάσεων από το πίνακα ελέγχου %s. Αυτό ίσως παράσχει περισσότερες πληροφορίες για την τρέχουσα κατάσταση των πραγμάτων.',
      'Specify one or more objects to destroy.' => 'Ορίστε ένα ή περισσότερα αντικείμενα για καταστροφή.',
    );
  }

}
