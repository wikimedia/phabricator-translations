<?php

final class PhabricatorRepositorySl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Mark __repository__ as imported.' => 'Označi __shrambo__ kot uvoženo.',
      'Unexpected end of file.' => 'Nepričakovan konec datoteke.',
      'TAGS' => 'OZNAKE',
      '%s changed the filesize limit for this repository from %s bytes to %s bytes.' => '%s je {{GRAMMAR:|spremenil|spremenila|spremenil_a}} omejitev velikosti datotek v tej shrambi z %s zlogov na %s zlogov.',
      'Unexpected infinite loop in %s!' => 'Nepričakovana neskončna zanka v %s!',
      'Repository "%s" is already imported.' => 'Shramba »%s« je že uvožena.',
      'Show changes, but do not make any changes.' => 'Prikaži spremembe, vendar ne opravi nobene spremembe.',
      'Applied changes.' => 'Uporabljene spremembe.',
      'tag' => 'oznaka',
      'Push Log' => 'Potisni dnevnik',
      'Create Identity' => 'Ustvari identiteto',
      'USER' => 'UPORABNIK',
      'There are no repositories.' => 'Ni repozitorijev.',
      'DETAILS' => 'PODROBNOSTI',
      'tag:' => 'oznaka:',
    );
  }

}
