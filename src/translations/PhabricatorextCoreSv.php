<?php

final class PhabricatorextCoreSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'MediaWiki' => 'MediaWiki',
      'Use [[%s|this form]] to create one.' => 'Använd [[%s|det här formuläret]] för att skapa ett.',
      'Global Accounts' => 'Globala konton',
    );
  }

}
