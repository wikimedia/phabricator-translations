<?php

final class PhabricatorNuanceSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'View Form' => 'Ogled obrazca',
      'Web Form' => 'Obrazec Phabricator',
      'User %s' => 'Uporabnik %s',
      'Complaint Form' => 'Pritožbeni obrazec',
      'Content imported via Nuance.' => 'Vsebina, uvožena z Nuance.',
      'Tag %s' => 'Oznaka %s',
      'Source %d' => 'Vir %s',
      'Item %d' => 'Predmet %s',
      'Imported As' => 'Uvoženo kot',
      'Edit Source' => 'Uredi vir',
      'Manage Item' => 'Upravljaj predmet',
      'View Item' => 'Prikaži predmet',
      'Edit Source: %s' => 'Uredi vir: %s',
    );
  }

}
