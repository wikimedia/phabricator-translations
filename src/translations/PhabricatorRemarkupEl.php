<?php

final class PhabricatorRemarkupEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
  'Invalid markup engine.' => 'Μη έγκυρη μηχανή σήμανσης.',
  'Process text through remarkup.' => 'Επεξεργαστείτε κείμενο μέσω σήμανσης.',
);
  }

}
