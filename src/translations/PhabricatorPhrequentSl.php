<?php

final class PhabricatorPhrequentSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Stop Time' => 'Čas ustavitve',
      'Start Time' => 'Čas začetka',
      'Time Spent' => 'Porabljeni čas',
      'Phrequent Time' => 'Čas Phrequenta',
      'Stop' => 'Ustavi',
      '%s (%s ago)' => '%s (pred %s)',
      'Stop time must be after start time.' => 'Čas zaustavitve mora biti po času začetka.',
    );
  }

}
