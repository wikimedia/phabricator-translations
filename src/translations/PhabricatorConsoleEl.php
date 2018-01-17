<?php

final class PhabricatorConsoleEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Error Log (%d)' => 'Μητρώο σφαλμάτων (%s)',
      'Realtime' => 'Πραγματικός χρόνος',
      'Site' => 'Ιστότοπος',
      'Calls to External Services' => 'Κλήσεις σε εξωτερικές υπηρεσίες',
      'Machine' => 'Μηχανή',
      'Reconnect' => 'Επανασύνδεση',
      'Information about Phabricator events and event listeners.' => 'Πληροφορίες για τα γεγονότα του Phabricator και ακροατές γεγονότων.',
      'No errors.' => 'Χωρίς σφάλματα.',
      'Startup' => 'Εκκίνηση',
      'Information about %s and %s.' => 'Πληροφορίες σχετικά με το %s και το %s.',
      'Profile Page' => 'Σελίδα προφίλ',
      'Whole Table' => 'Ολόκληρος ο πίνακας',
      'Error Log' => 'Μητρώο σφαλμάτων',
      'STOPPED' => 'Σταμάτησε',
      'Information about services.' => 'Πληροφορίες σχετικά με τις υπηρεσίες.',
      'Unknown event: %s' => 'Άγνωστο γεγονός: %s',
      'Total Cost' => 'Συνολικό κόστος',
      'Shows errors and warnings.' => 'Εμφάνιση σφαλμάτων και προειδοποιήσεων.',
      'Can\'t Analyze' => 'Δεν μπορεί να αναλυθεί',
      'Events' => 'Συμβάντα',
      'Registered Event Listeners' => 'Εγγεγραμμένοι ακροατές συμβάντος',
      'No Tables' => 'Χωρίς πίνακες',
    );
  }

}
