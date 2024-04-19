<?php

final class PhabricatorextCoreMs
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ms';
  }

  protected function getTranslations() {
    return array(
      'Gerrit Projects' => 'Projek Gerrit',
      'MediaWiki' => 'MediaWiki',
      'Global Accounts' => 'Akaun Sejagat',
      'Download Archive' => 'Muat Turun Arkib',
    );
  }

}
