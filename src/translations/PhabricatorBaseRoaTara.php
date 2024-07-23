<?php

final class PhabricatorBaseRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Nisciuna applecazione \'%s\'!',
      'This application is required, so all users must have access to it.' => 'Sta applecazione jè obbligatorie, accussì tutte le utinde onna trasè.',
      'Can Configure Application' => 'Pozze Configurà l\'Applicazione',
      'Can Use Application' => 'Pozze Ausà l\'Applicazione',
      'Core Applications' => 'Applicaziune prengepàle',
      'No application!' => 'Nisciuna applecazione!',
      '%s Application' => '%s Applecazione',
      'Developer Tools' => 'Struminde pu sveluppatore',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => '\'A richieste \'nglude \'u parametre de restrizione "%s", ma stu condroller ("%s") non g\'u tène jndr\'à lista vianghe. Non ge vole sta richieste purcé pare ca jè parte de \'n\'attacche de redirezionamende.',
      'Unknown capability \'%s\'!' => 'Capacità scanusciute \'%s\'!',
      'Unable to find transaction query for object of class "%s".' => 'Non ge riesche a acchià \'n\'inderrogazione pa transazione pe l\'oggette d\'a classe "%s".',
    );
  }

}
