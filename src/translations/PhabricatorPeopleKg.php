<?php

final class PhabricatorPeopleKg
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'kg';
  }

  protected function getTranslations() {
    return array(
      'View Activity Log' => 'Lutiti ya Kisalu',
      'Real Name must have no more than %d characters.' => 'Zina ya kieleka fwete vanda ve ti bisono ya kuluta $ 1.',
      'Authored Commits' => 'Balukanu ya kusonika',
      'Received Badges' => 'Ba badge ya bo me baka',
      'User Profile' => 'Bansangu ya muntu yina ke sadila yo',
      'Authored Revisions' => 'Bansangu ya bo me sonika',
      'No authored tasks.' => 'Ata kisalu mosi ve ya kusonika.',
      'Find users whose usernames or real names contain a substring.' => 'Sosa bantu ya ke sadilaka bazina na bo ya bantu to bazina na yo ya kieleka.',
      'People Profile Pictures' => 'Bifwanisu ya Bantu',
      'Authored Tasks' => 'Bisalu ya kusonika',
    );
  }

}
