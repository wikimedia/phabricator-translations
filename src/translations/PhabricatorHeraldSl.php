<?php

final class PhabricatorHeraldSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'The regular expression pair "%s" is not valid JSON. Enter a valid JSON array with two elements.' => 'Par regularnih izrazov »%s« ni veljaven JSON. Vnesite veljavno JSON-matriko z dvema elementoma.',
      'Expected condition value to be an array.' => 'Pričakovana vrednost pogoja je bila matrika.',
      'Silent Mode' => 'Tihi način',
      'does not exist' => 'ne obstaja',
      'true' => 'resnično',
      'Watch for danger!' => 'Pazite na nevarnost!',
      'false' => 'neresnično',
      'Added Comment' => 'Komentar dodan',
      'Comment content' => 'Vsebina komentarja',
      'Already Applied' => 'Že uporabljeno',
      'Object produced non-array value!' => 'Objekt je ustvaril nematrično vrednost!',
      'Object Link' => 'Povezava objekta',
    );
  }

}
