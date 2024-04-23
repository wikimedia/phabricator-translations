<?php

final class PhabricatorConsoleSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Site' => 'Mesto',
      'No errors.' => 'Ni napak.',
      'Event Log' => 'Dnevnik dogodkov',
      'Whole Table' => 'Celotna tabela',
      'Error Log' => 'Dnevnik napak',
      'TABLE SCAN!' => 'SKENIRANJE TABELE!',
      'Unknown event: %s' => 'Neznan dogodek: %s',
      'Shows errors and warnings.' => 'Prikaži napake in opozorila.',
      'Events' => 'Dogodki',
    );
  }

}
