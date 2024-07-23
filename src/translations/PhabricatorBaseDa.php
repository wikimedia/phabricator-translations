<?php

final class PhabricatorBaseDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Ingen applikation \'%s\'!',
      'Can Configure Application' => 'Kan konfigurere applikation',
      'Can Use Application' => 'Kan bruge applikation',
      'No application!' => 'Ingen applikation!',
      'Developer Tools' => 'Udviklerværktøjer',
    );
  }

}
