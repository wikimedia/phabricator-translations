<?php

final class PhabricatorConduitFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'Username.' => 'Käyttäjänimi.',
  'Client is unknown.' => 'Asiakas on tuntematon.',
  'This method requires authentication.' => 'Tämä tapa edellyttää todennusta.',
);
  }

}
