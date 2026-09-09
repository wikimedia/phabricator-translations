<?php

final class PhabricatorMetamtaLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'ID: %d' => 'ID: %d',
  'Default Author' => 'Standardauteur',
  'Emails' => 'E-Mailen',
  'View Object' => 'Objet weisen',
  'Reserved' => 'Reservéiert',
  'Status: %s' => 'Status: %s',
  'Delete Address' => 'Adress läschen',
  'Attached Files' => 'Ugehaangene Fichier',
  'Are you sure you want to delete this email address?' => 'Sidd Dir sécher, datt Dir dës E-Mail-Adress läsche wëllt?',
  'No Address' => 'Keng Adress',
  'STAMPS' => 'Timberen',
  '#' => '#',
  'Address "%s" is unknown.' => 'D\'Adress „%s“ ass onbekannt.',
);
  }

}
