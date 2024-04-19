<?php

final class PhabricatorFeedDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'All Stories' => 'Alle historier',
      'Story has no primary object!' => 'Historien har intet primære objekt!',
      'Republishing story...' => 'Genudgiver historie...',
      'Include Projects' => 'Inkluder projekter',
      'Include Users' => 'Inkluder brugere',
      'Story' => 'Historie',
      'No Stories.' => 'Ingen historier.',
      'Include stories about projects I am a member of.' => 'Inkluder historier om projekter jeg er medlem af.',
    );
  }

}
