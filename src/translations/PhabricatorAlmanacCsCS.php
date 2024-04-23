<?php

final class PhabricatorAlmanacCsCS
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'cs_CS';
  }

  protected function getTranslations() {
    return array(
      'Namespace' => 'Jmenný prostor',
      'Device %d' => 'Zařízení %s',
      'Edit Namespace' => 'Editovat jmenný prostor',
      'Namespace Name' => 'Název jmenného prostoru',
      'Reset' => 'Resetovat',
      'Create Namespace' => 'Vytvořit jmenný prostor',
    );
  }

}
