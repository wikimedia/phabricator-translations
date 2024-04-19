<?php

final class PhabricatorPholioSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Review Mocks and Design' => 'Pregled maket in osnutkov',
      'Close Mock' => 'Zapri simulacijo',
      'Undo' => 'Razveljavi',
      'Uploading Image...' => 'Nalaganje slike ...',
      'Click here, or drag and drop images to add them to the mock.' => 'Kliknite tukaj ali povlecite in spustite slike, da jih dodate v model.',
      'Mock Description' => 'Vzorčni opis',
      'Image "%s":' => 'Slika »%s«:',
      'Close Pholio Mock' => 'Zapri simulacijo Pholio',
      'Inline Comment' => 'Znotrajvrstični komentar',
    );
  }

}
