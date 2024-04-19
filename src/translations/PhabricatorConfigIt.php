<?php

final class PhabricatorConfigIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      '%s / %s' => '%s / %s',
      '(%s%s) %s' => '(%s%s) %s',
      'Proto' => 'Foto',
      'Clients' => 'Clienti',
      'Health' => 'Salute',
      'Edit "%s"' => 'Modifica "%s"',
      '%s of %s' => '%s di %s',
      ' (%s)' => '(%s)',
      'Cache' => 'Cache',
      'Sites' => 'Siti',
      'Connection' => 'Connessione',
      '%s = 0' => '%s = 0',
      'Automatic' => 'Automatico',
      'Configure %s' => 'Configura %s',
      'Indefinite' => 'Infinito',
      '%s.%s (%s)' => '%s.%s (%s)',
      '%s In / %s Out' => '%s Dentro / %s Fuori',
      '%s.%s' => '%s.%s',
      '%s.%s.%s' => '%s.%s.%s',
      'View "%s"' => 'Vedi "%s"',
    );
  }

}
