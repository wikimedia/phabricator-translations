<?php

final class PhabricatorextCoreIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'The requested project does not exist' => 'Il progetto richiesto non esiste',
      'Change type to "%s."' => 'Cambia tipo in "%s."',
      'Use [[%s|this form]] to create one.' => 'Usa [[%s|questo modulo]] per crearne uno.',
      'Global Accounts' => 'Utenze globali',
      'Download Archive' => 'Scarica archivio',
      'Unknown or missing mediawiki names: %s' => 'Nomi MediaWiki sconosciuti o mancanti: %s',
    );
  }

}
