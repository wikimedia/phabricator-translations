<?php

final class PhabricatorPholioLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  '[Pholio]' => '[Pholio]',
  'Unknown (ID %d)' => 'Onbekannt (ID %d)',
  'Image "%s":' => 'Bild "%s":',
);
  }

}
