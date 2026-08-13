<?php

final class PhabricatorRemarkupSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Invalid markup engine.' => 'Neplatný nástroj na spracovanie značiek.',
  'Process text through remarkup.' => 'Spracovať text pomocou Remarkupu.',
  'Mentioning and Embedding objects' => 'Spomínanie a vkladanie objektov',
  'Specialized Syntax' => 'Špecializovaná syntax',
  'Remarkup Reference' => 'Referenčná príručka Remarkupu',
  'Input' => 'Vstup',
  'Contents must be a list of strings.' => 'Obsah musí byť zoznam reťazcov.',
  'Reference' => 'Referencia',
);
  }

}
