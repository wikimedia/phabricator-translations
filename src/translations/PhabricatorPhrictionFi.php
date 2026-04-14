<?php

final class PhabricatorPhrictionFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'Last Edited' => 'Viimeksi muokattu',
  'Moved' => 'Siirretty',
  'Version %d' => 'Versio %d',
  'The document %s already exists. Do you want to edit it instead?' => 'Asiakirja %s on jo olemassa. Haluatko sen sijaan muokata sitä?',
  'Edited by %s' => 'Muokannut %s',
  'Welcome' => 'Tervetuloa',
);
  }

}
