<?php

final class PhabricatorMacroSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Macro Image' => 'Makro slika',
      'Image File' => 'Datoteka slike',
      'Disabled Macros' => 'Onemogočeni makri',
      'Macro was not found.' => 'Makra ni bilo mogoče najti.',
      'Image Macro' => 'Makro slike',
      'Loop' => 'Zanka',
      'Create easy to remember shortcuts to images and memes.' => 'Ustvarjanje preprostih bližnjic do slik in memov.',
    );
  }

}
