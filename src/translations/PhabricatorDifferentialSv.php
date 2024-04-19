<?php

final class PhabricatorDifferentialSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'This revision is already closed.' => 'Denna revision är redan stängd.',
      'Added Reviewers' => 'Lade till granskare',
      'This revision will be closed.' => 'Denna revision kommer att stängas.',
      'A revision is closed.' => 'En revision är stängd.',
      'Added file content' => 'Lade till filinnehåll',
      '%s closed this revision.' => '%s stängde denna revision.',
      'This file was added.' => 'Denna fil lades till.',
      'This revision has already been closed.' => 'Denna revision har redan stängts.',
      'Allows any user to reopen a closed revision.' => 'Tillåter alla användare att återöppna en stängd revision.',
      'Type a revision status name or function...' => 'Skriv ett statusnamn eller funktion för en version...',
      'Edit Related Revisions...' => 'Redigera relaterade revisioner...',
      '%s wrote in %s' => '%s skrev i %s',
      'Diffs' => 'Skillnader',
    );
  }

}
