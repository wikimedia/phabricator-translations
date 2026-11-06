<?php

final class PhabricatorMetaLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Information' => 'Informatiounen',
  'Syntax' => 'Syntax',
  'Show Enabled Applications' => 'Aktivéiert Applikatioune weisen',
  'You cannot enable an enabled application.' => 'Dir kënnt aktivéiert Applikatiounen net aktivéieren.',
  'Really Disable Application?' => 'Applikatioun wierklech desaktivéieren?',
  'Extension' => 'Erweiderung',
  'Really disable the %s application?' => 'D\'Applikatioun %s wierklech desaktivéieren?',
  'Show Disabled Applications' => 'Desaktivéiert Applikatioune weisen',
  'This application is required and cannot be disabled.' => 'Dës Applikatioun ass erfuerderlech a kann net desaktivéiert ginn.',
  'Show All Applications' => 'All Applikatioune weisen',
);
  }

}
