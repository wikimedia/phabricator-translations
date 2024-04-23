<?php

final class PhabricatorPonderScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Hide Comments' => 'Ammuccia li cummenti',
      'Answer' => 'Risposta',
      'Add a Comment' => 'Agghiunci nu cummentu',
      'Show %d Comment(s)' => 'Ammustra %s cummentu/i',
    );
  }

}
