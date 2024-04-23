<?php

final class PhabricatorPonderSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Log In to Answer' => 'Logga in för att besvara',
      '%s closed %s as obsolete.' => '%s stängde %s som föråldrad.',
      '%s closed %s as resolved.' => '%s stängde %s som löst.',
      'Closed, Obsolete' => 'Stängd, föråldrad',
      '%s closed %s as invalid.' => '%s stängde %s som ogiltig.',
      '%s closed this question as invalid.' => '%s stängde denna fråga som ogiltig.',
      '%s closed this question as obsolete.' => '%s stängde denna fråga som föråldrad.',
      '%s added %s.' => '%s lade till %s.',
      '%s closed this question as resolved.' => '%s stängde denna fråga som löst.',
    );
  }

}
