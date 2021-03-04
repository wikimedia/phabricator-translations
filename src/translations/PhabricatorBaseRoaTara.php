<?php

final class PhabricatorBaseRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Nisciuna applecazione \'%s\'!',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => 'Utende attese \'%s\' da dà l\'accesse a \'%s\'.',
      'Can Configure Application' => 'Pozze Configurà l\'Applicazione',
      'Can Use Application' => 'Pozze Ausà l\'Applicazione',
      'Application Controller' => 'Condroller de l\'Applicazione',
      'Public + configured' => 'Pubbleche + configurate',
      'Public Access' => 'Access pubbleche',
      'Core Applications' => 'Applicaziune prengepàle',
      'No Login Required' => 'Non ge t\'a collegà pe forze',
      'No application!' => 'Nisciuna applecazione!',
      '%s Application' => '%s Applecazione',
      'Email Verification Required' => 'Verifeche email richieste',
      'Application Controller, No Login Required' => 'Condroller de l\'applicazione, no ge t\'a collegà pe forze',
      'Developer Tools' => 'Struminde pu sveluppatore',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'Sta applecazione jè obbligatorie pe ausà Phabricator, accussì tutte le utinde onna trasè.',
      'Expect user \'%s\' to be denied access to \'%s\'.' => 'Utende attese \'%s\' da luà l\'accesse a \'%s\'.',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => '\'A richieste \'nglude \'u parametre de restrizione "%s", ma stu condroller ("%s") non g\'u tène jndr\'à lista vianghe. Non ge vole sta richieste purcé pare ca jè parte de \'n\'attacche de redirezionamende.',
      'Unknown capability \'%s\'!' => 'Capacità scanusciute \'%s\'!',
      'Admin Required' => 'Richieste de l\'amministratore',
      'Email Verification Required, With Exception' => 'Verifeche de l\'email richeiste, cu Eccezzione',
      'Allow Disabled' => 'Permette \'a disabbilitazione',
      'Unable to find transaction query for object of class "%s".' => 'Non ge riesche a acchià \'n\'inderrogazione pa transazione pe l\'oggette d\'a classe "%s".',
    );
  }

}
