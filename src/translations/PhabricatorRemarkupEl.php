<?php

final class PhabricatorRemarkupEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Επεξεργαστείτε κείμενο μέσω σήμανσης στο γενικό πλαίσιο του Phabricator.',
      'Invalid markup engine.' => 'Μη έγκυρη μηχανή σήμανσης.',
      'Content may not be empty.' => 'Το περιεχόμενο δεν μπορεί να είναι άδειο.',
    );
  }

}
