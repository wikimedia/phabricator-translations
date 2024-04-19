<?php

final class PhabricatorRemarkupEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Μη έγκυρη μηχανή σήμανσης.',
      'Process text through remarkup.' => 'Επεξεργαστείτε κείμενο μέσω σήμανσης στο γενικό πλαίσιο του Phabricator.',
      'Content may not be empty.' => 'Το περιεχόμενο δεν μπορεί να είναι άδειο.',
    );
  }

}
