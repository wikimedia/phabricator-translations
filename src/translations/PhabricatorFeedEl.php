<?php

final class PhabricatorFeedEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Call %s before publishing!' => 'Καλέστε το %s πριν τη δημοσίευση!',
      'All Stories' => 'Όλες οι ιστορίες',
      'Full HTML presentation of story' => 'Πλήρης παρουσίαση HTML της ιστορίας',
      'Republishing story...' => 'Αναδημοσίευση ιστορίας...',
      'Include Projects' => 'Συμπερίληψη εγχειρημάτων',
      'Specify a story key to republish.' => 'Προσδιορίστε ένα κλειδί ιστορίας για αναδημοσίευση.',
      'Include Users' => 'Συμπερίληψη χρηστών',
      'Story' => 'Ιστορία',
      'Feed options.' => 'Επιλογές ροής.',
      'No Stories.' => 'Χωρίς ιστορίες.',
      'Unsupported view type, possibles are: %s' => 'Μη υποστηριζόμενος τύπος προβολής, οι πιθανοί είναι οι: %s',
      'Feed Stories' => 'Ιστορίες ροής',
    );
  }

}
