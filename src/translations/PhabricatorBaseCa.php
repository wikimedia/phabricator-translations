<?php

final class PhabricatorBaseCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Cap aplicació \'%s\'!',
      'This application is required, so all users must have access to it.' => 'Aquesta aplicació és requerida per Phabricator per funcionar, així que tots els usuaris han de tenir accés a ella.',
      'Can Configure Application' => 'Pot configurar l\'aplicació',
      'Can Use Application' => 'Pot utilitzar l\'aplicació',
      'Core Applications' => 'Aplicacions del nucli',
      'No application!' => 'Cap aplicació!',
      '%s Application' => 'Aplicació %s',
      'Developer Tools' => 'Eines de Desenvolupador',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'La petició inclou el paràmetre restringit "%s", però aquest controlador ("%s") no és a la llista blanca. Es rebutja servir aquesta petició perquè podria ser part d\'un atac de redirecció.',
      'Unknown capability \'%s\'!' => 'Aptitud desconeguda \'%s\'!',
      'Unable to find transaction query for object of class "%s".' => 'No s\'ha pogut trobar la consulta de transacció per a l\'objecte de la classe "%s".',
    );
  }

}
