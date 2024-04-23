<?php

final class PhabricatorMacroFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Create Meme' => 'Luo meemi',
      'Upload New Audio' => 'Tallenna uusi ääni',
      'Create New Macro' => 'Luo uusi makro',
      'Image Macros and Memes' => 'Kuvamakrot ja meemit',
      'Generate a meme.' => 'Tuota meemi.',
    );
  }

}
