<?php

final class PhabricatorextCoreIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'Use [[%s|this form]] to create one.' => 'Usa [[%s|questo modulo]] per crearne uno.',
      'Global Accounts' => 'Utenze globali',
      'Unknown or missing mediawiki names: %s' => 'Nomi MediaWiki sconosciuti o mancanti: %s',
    );
  }

}
