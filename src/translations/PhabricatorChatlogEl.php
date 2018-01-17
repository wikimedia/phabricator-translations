<?php

final class PhabricatorChatlogEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(Αποδοκιμασμένος)',
      'Jump' => 'Μετάβαση',
      'Retrieve chatter.' => 'Ανάκτηση φλυαρίας.',
      'Newer' => 'Νεότερα',
      'Jump to Bottom' => 'Ανατρέξτε προς τα πάνω',
      'Older' => 'Παλαιότερα',
      'ChatLog' => 'ChatLog',
      'Channel List' => 'Κατάλογος καναλιών',
      'Hide Dates' => 'Απόκρυψη ημερομηνιών',
      'Channel Log' => 'Μητρώο καναλιών',
      'Search Dates' => 'Αναζήτηση ημερομηνιών',
      'Newest' => 'Νεότερα',
      'Record chatter.' => 'Καταγραφή φλυαρίας.',
    );
  }

}
