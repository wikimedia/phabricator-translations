<?php

final class PhabricatorMetamtaLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Emails' => 'E-Mailen',
      'View Object' => 'Objet weisen',
      'Reserved' => 'Reservéiert',
      'Status: %s' => 'Status: %s',
      'Delete Address' => 'Adress läschen',
      'Attached Files' => 'Ugehaangene Fichier',
      'No Address' => 'Keng Adress',
      'STAMPS' => 'Timberen',
      '#' => '#',
    );
  }

}
