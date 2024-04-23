<?php

final class PhabricatorPasteDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      '%s updated the title for %s from %s to %s.' => '%s opdaterede titlen for %s fra %s til %s.',
      '%s Line(s)' => '%s linje(r)',
    );
  }

}
