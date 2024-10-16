<?php

final class PhabricatorextCoreScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Merged' => 'Junciutu',
      'Unknown objectType \'%s\'' => 'Tipu d\'uggettu scanusciutu \'%s\'',
      'Unknown policies: %s' => 'Pulìtichi scanusciuti: %s',
      'LDAP User' => 'Utenti LDAP',
      'Invalid action \'%s\'!' => 'Azzioni \'%s\' nun vàlida!',
      'MediaWiki' => 'MediaWiki',
      'Invalid' => 'Nun vàlidu',
      'View Change in Gerrit' => 'Talìa lu canciamentu supra Gerrit',
      '%s Line(s) removed' => '%s Linìa/i livatu/i',
      'Unknown' => 'Scanusciutu',
      'Global Accounts' => 'Cunti glubbali',
      'Comments' => 'Cummenti',
    );
  }

}
