<?php

final class PhabricatorConduitIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'JSON' => 'JSON',
      'Specify a file to read parameters from with "--input".' => 'Specifica un file da cui leggere i parametri con "--input".',
      'Errors' => 'Errori',
      'Username.' => 'Nome utente.',
      'No user or device is associated with the public key "%s".' => 'Nessun utente o dispositivo è associato alla chiave pubblica "%s".',
      'Method to call.' => 'Metodo da chiamare.',
      'Specify a method to call with "--method".' => 'Specifica un metodo da chiamare con "--method".',
    );
  }

}
