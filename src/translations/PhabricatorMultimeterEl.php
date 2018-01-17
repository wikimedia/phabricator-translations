<?php

final class PhabricatorMultimeterEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Δείγματα',
      'Subprocesses' => 'Υποδιαδικασίες',
      '(All)' => '(Όλα)',
      'Samples (%s - %s)' => 'Δείγματα (%s - %s)',
      'By ID' => 'Ανά ταυτότητα',
      'Epoch' => 'Εποχή',
      'Performance Sampler' => 'Δοκιμαστής απόδοσης',
      'Rate' => 'Βαθμολόγηση',
      '%s Req' => 'Απαιτείται %s',
      'Cost' => 'Κόστος',
      'Multimeter User Guide' => 'Οδηγίες χρήστη πολυμέτρων',
      '%s Unit(s)' => 'Μονάδε(ς) %s',
      'By Request' => 'Ανά αίτημα',
      'By Host' => 'Ανά οικοδεσπότη',
      'Trying to unpause an active multimeter!' => 'Προσπαθήστε να αδρανοποιήσετε ένα ενεργό πολύμετρο!',
      'Web Request' => 'Διαδικτυακό αίτημα',
      'By Context' => 'Ανά συμφραζόμενα',
      'By Label' => 'Ανά ετικέτα',
      'Multimeter' => 'Πολύμετρο',
      'Viewer' => 'Θεατής',
      '%s Event(s)' => '%s Γεγονός(-τα)',
      'Static Resource' => 'Στατική πηγή',
      'Multimeter Events' => 'Γεγονότα πολυμέτρων',
      'By Viewer' => 'Ανά θεατή',
    );
  }

}
