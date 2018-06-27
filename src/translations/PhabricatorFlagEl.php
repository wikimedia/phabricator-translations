<?php

final class PhabricatorFlagEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Marked with "%s" flag.' => 'Έχει επισημανθεί με την αναφορά "%s".',
      'Personal Bookmarks' => 'Προσωπικοί σελιδοδείκτες',
      'Query flag markers.' => 'Επισημαντές αναφοράς ερωτήματος.',
      'Clear a flag.' => 'Καθάρισμα μιας σημαίας',
      'Purple' => 'Μωβ',
      'Unknown groupBy parameter: %s' => 'Άγνωστη παράμετρος groupBy: %s',
      'Flag %s' => 'Αναφορά %s',
      'Bad flag ID.' => 'Κακό αναγνωριστικό σημαίας.',
      'All Object Types' => 'Όλοι οι τύποι αντικειμένου',
      'Already Marked' => 'Ήδη επισημανσμένο',
    );
  }

}
