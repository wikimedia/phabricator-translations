<?php

final class PhabricatorCelerityEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
  'Use Standard Colors' => 'Χρησιμοποιήστε πρότυπα χρώματα',
  'No resource source exists with name "%s"!' => 'Δεν υπάρχει πηγή πόρων με το όνομα "%s"!',
  'Writing map "%s".' => 'Γράφοντας τον χάρτη "%s".',
  'Use Larger Font Size' => 'Χρήση μεγαλύτερου μεγέθους γραμματοσειράς',
  'Found %d binary resources.' => 'Βρέθηκαν %d δυαδικοί πόροι.',
  'Found %d text resources.' => 'Βρέθηκαν %d πόροι κειμένου.',
  'Dark Mode' => 'Σκοτεινή λειτουργία (Πειραματική)',
  'Found %d packages.' => 'Βρέθηκαν %d συσκευασίες.',
);
  }

}
