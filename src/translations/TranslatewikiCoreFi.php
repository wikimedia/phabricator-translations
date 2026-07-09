<?php

final class TranslatewikiCoreFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'NONE' => 'EI MITÄÄN',
  'Read %s string(s).' => array(
    'Lue %s merkkijono.',
    'Lue %s merkkijonoa.',
  ),
  'Original:' => 'Alkuperäinen:',
  'Done.' => 'Valmis.',
  'PLURAL' => 'MONIKKO',
);
  }

}
