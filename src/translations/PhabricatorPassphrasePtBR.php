<?php

final class PhabricatorPassphrasePtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Active Credentials' => 'Credenciais ativas',
      'Credential Author' => 'Autor da credencial',
      'Credential Store' => 'Loja de credenciais',
      'Passphrase Credential' => 'Credencial de frase secreta',
    );
  }

}
