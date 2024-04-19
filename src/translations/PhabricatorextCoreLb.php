<?php

final class PhabricatorextCoreLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Allow' => 'Erlaben',
      'LDAP User' => 'LDAP Benotzer',
      'MediaWiki' => 'MediaWiki',
      'How this works' => 'Wéi et geet',
      'Unknown' => 'Onbekannt',
      'Global Accounts' => 'Global Benotzerkonten',
      'Previous: %s' => 'Vireg: %s',
      'No Permission' => 'Keng Autorisatioun',
      'Required' => 'Obligatoresch',
    );
  }

}
