<?php

final class PhabricatorMacroDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Create Meme' => 'Opret en meme',
      'Image File' => 'Billedfiler',
      'Type an emoji name...' => 'Indtast et emojinavn...',
      'Do not play audio.' => 'Afspil ikke lyd.',
      'Created on %s' => 'Oprettet den %s',
      'Do Not Play' => 'Afspil ikke',
      'Below' => 'Forneden',
      'Above' => 'Foroven',
      'Edit Audio' => 'Rediger lyd',
      'Audio File' => 'Lydfil',
      'Play Once' => 'Afspil en gang',
    );
  }

}
