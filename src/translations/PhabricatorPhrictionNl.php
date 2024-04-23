<?php

final class PhabricatorPhrictionNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Last Edited' => 'Laatste bewerking',
      'Document Content' => 'Documentinhoud',
      'Content version.' => 'Versie van de inhoud.',
      'Welcome' => 'Welkom',
      'All Content' => 'Alle inhoud',
    );
  }

}
