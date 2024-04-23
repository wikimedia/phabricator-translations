<?php

final class PhabricatorTokensSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'A token inherits the policies of the object it is awarded to.' => 'En pollett ärver policyer för objektet den tilldelas till.',
      '%s awarded %s a %s token.' => '%s tilldelade polletten %3$s till %2$s.',
      'Award "%s" Token' => 'Tilldela priset "%s"',
      'Give or change a token.' => 'Ge eller ändra en nyckel.',
      'Award Token' => 'Prispollett',
      '"%s" token, awarded by %s.' => 'Polletten "%s", tilldelades av %s.',
      'Meh!' => 'Äsch!',
      'Pirate Logo' => 'Piratlogotyp',
      'Award and Acquire Trinkets' => 'Tilldela och få prydnadssaker',
    );
  }

}
