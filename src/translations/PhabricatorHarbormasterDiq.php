<?php

final class PhabricatorHarbormasterDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Plan %d %s' => 'Plan %s %s',
      'For example:' => 'Mesela :',
      'Unsound' => 'Bêveng',
      'Not A Haiku' => 'Haiku niyo',
      'Edit Plan' => 'Plani Bıvurne',
      'Run %d' => '%s bıgurenê',
      'Organization Name' => 'Namey Organizasyoni',
      'Browse Builds' => 'Çımberze Bınan',
      'or' => 'yana',
      'Completed' => 'Biyo temam',
      'Step %d' => 'Gam %s',
      'Aborting' => 'Nêvınderiyeno',
      'Target %d' => 'Hedef %s',
      'Origin' => 'Oricin',
    );
  }

}
