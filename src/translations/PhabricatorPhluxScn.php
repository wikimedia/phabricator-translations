<?php

final class PhabricatorPhluxScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Update Variable' => 'Aggiurna variàbbili',
      'Variable value must be valid JSON.' => 'Lu valuri dâ variàbbili havi a èssiri dû JSON vàliddu.',
      'Edit Variable: %s' => 'Cancia la variàbbili: %s',
      'Variable "%s"' => 'Variàbbili "%s"',
      'Phlux Variables' => 'Variàbbili Phlux',
      'Enter value as JSON.' => 'Nzirisci valuri comu JSON.',
      'Phlux' => 'Phlux',
      'Edit Variable' => 'Cancia la variàbbili',
      'Variable List' => 'Elencu dî variàbbili',
    );
  }

}
