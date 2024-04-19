<?php

final class PhabricatorMetamtaLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Reserved: %s' => 'Reservéiert: %s',
      'Emails' => 'E-Mailen',
      'View Object' => 'Objet weisen',
      'Reserved' => 'Reservéiert',
      'Status: %s' => 'Status: %s',
      'Delete Address' => 'Adress läschen',
      'Address: %s' => 'Adress: %s',
      'Attached Files' => 'Ugehaangene Fichier',
      'No Address' => 'Keng Adress',
      'E164 of: %s' => 'E164 vun: %s',
      'STAMPS' => 'Timberen',
      '#' => '#',
      'Address %s' => 'Adress %s',
    );
  }

}
