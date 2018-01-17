<?php

final class PhabricatorMultimeterMk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'mk';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Примери',
      'Subprocesses' => 'Потпроцеси',
      '(All)' => '(сите)',
      'Samples (%s - %s)' => 'Примери (%s - %s)',
      'By ID' => 'По назнака',
      'Epoch' => 'Епоха',
      '%s Req' => '%s бар.',
      '%s Unit(s)' => '%s единиц.',
      'By Request' => 'По барање',
      'By Host' => 'По домаќин',
      'Web Request' => 'Семрежно барање',
      'By Context' => 'По контекст',
      'By Label' => 'По натпис',
      'Viewer' => 'Гледач',
      '%s Event(s)' => '%s настан(и)',
      'By Viewer' => 'По гледач',
    );
  }

}
