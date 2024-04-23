<?php

final class PhabricatorLegalpadScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Contact Email' => 'Email di cuntattu',
      'Document Body' => 'Corpu dû ducumentu',
      'The body of text of the document.' => 'Lu corpu di testu dû ducumentu.',
      'Email Contains' => 'L\'email cunteni',
      'Notes' => 'Noti',
      'Contributors' => 'Cuntribbutura',
      'New document body.' => 'Novu corpu dû ducumentu.',
      'Version %d (%s)' => 'Virsioni %s (%s)',
    );
  }

}
