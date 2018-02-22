<?php

final class PhabricatorFlagEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Personal Bookmarks' => 'Προσωπικοί σελιδοδείκτες',
      'Clear a flag.' => 'Καθάρισμα μιας σημαίας',
      'Purple' => 'Μωβ',
      'Unknown groupBy parameter: %s' => 'Άγνωστη παράμετρος groupBy: %s',
      'Bad flag ID.' => 'Κακό αναγνωριστικό σημαίας.',
      'All Object Types' => 'Όλοι οι τύποι αντικειμένου',
      'Already Marked' => 'Ήδη επισημανσμένο',
    );
  }

}
