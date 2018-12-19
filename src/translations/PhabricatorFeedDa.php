<?php

final class PhabricatorFeedDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'All Stories' => 'Alle historier',
      'Creation (Newest First)' => 'Oprettelse (nyeste først)',
      'Story has no primary object!' => 'Historien har intet primære objekt!',
      'Republishing story...' => 'Genudgiver historie...',
      'Include Projects' => 'Inkluder projekter',
      'Publish a story to the feed.' => 'Udgiv en historie til feedet.',
      'Include Users' => 'Inkluder brugere',
      'Story' => 'Historie',
      'Creation (Oldest First)' => 'Oprettelse (ældste først)',
      'No Stories.' => 'Ingen historier.',
      'Include stories about projects I am a member of.' => 'Inkluder historier om projekter jeg er medlem af.',
    );
  }

}
