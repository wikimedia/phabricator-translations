<?php

final class PhabricatorPhidEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => 'Ανακτήστε πληροφορίες σχετικά με ένα αυθαίρετο PHID.',
      'Requested handle "%s" was not loaded.' => 'Η απαιτούμενη λαβή "%s" δεν φορτώθηκε.',
      'Restricted %s' => 'Περιορισμένο %s',
      'Application Email' => 'Διεύθυνση ηλεκτρονικού ταχυδρομείου της εφαρμογής',
      'Unknown Object (%s)' => 'Άγνωστο αντικείμενο (%s)',
      'Replaced by \'phid.query\'.' => 'Αντικαταστάθηκε από το \'phid.query\'.',
      'No such object exists.' => 'Δεν υπάρχει τέτοιο αντικείμενο.',
      'Can not generate PHID with no type.' => 'Δεν μπορεί να δημιουργηθεί PHID χωρίς τύπο.',
    );
  }

}
