<?php

final class PhabricatorConduitEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'JSON' => 'JSON',
      'All Methods' => 'Όλοι οι μέθοδοι',
      'API Method: %s' => 'Μέθοδος API: %s',
      'Human Readable' => 'Αναγνώσιμο από ανθρώπους',
      'Unstable Methods' => 'Άστατες μέθοδοι',
      'All Call Logs' => 'Όλα τα μητρώα κλήσης.',
      'My Calls' => 'Οι κλήσεις μου',
      'Call' => 'Κλήση',
      'Method Parameters' => 'Παράμετροι μεθόδου',
      'Caller' => 'Κλητής',
      'Invalid JSON input.' => 'Μη έγκυρη εισαγωγή JSON.',
      '<parameters>' => '<παράμετροι>',
      'List of PHIDs.' => 'Κατάλογος των PHID.',
      'A PHID.' => 'Ένα PHID.',
      'Stability' => 'Σταθερότητα',
      'Errors' => 'Σφάλματα',
      'User PHID.' => 'PHID Χρήστη.',
      'Frozen' => 'Παγωμένο',
      'Callers' => 'Κλητές',
      'Stable' => 'Σταθερή',
      'Unstable' => 'Ασταθές',
      'Method Status' => 'Κατάσταση μεθόδου',
      'Client is unknown.' => 'Ο πελάτης είναι άγνωστος.',
    );
  }

}
