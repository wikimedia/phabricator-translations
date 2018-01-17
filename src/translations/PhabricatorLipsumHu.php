<?php

final class PhabricatorLipsumHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Failed to load a random user. You may need to generate more test users first.' => 'Nem sikerült betölteni véletlenszerűen egy felhasználót. Először több tesztfelhasználót kell létrehoznia.',
      'Generate objects without prompting for confirmation.' => 'Objektumokat generál anélkül, hogy megerősítést kérne.',
      'LIPSUM' => 'LIPSUM',
      'OOPS' => 'HOPPÁ!',
      'Generate synthetic test objects.' => 'Létrehoz szintetikus teszt objektumokat.',
      'class' => 'osztály',
      'Generate objects as quickly as possible.' => 'Objektumok létrehozása/generálása a lehető leggyorsabban.',
      'Selected generators: %s.' => 'Kiválasztott generátorok: %s.',
      'GENERATORS' => 'GENERÁTOROK',
      'Are you sure you want to generate piles of garbage?' => 'Biztosan szeretne generálni egy halom szemetet?',
    );
  }

}
