<?php

final class PhabricatorConpherenceSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Conpherence Threads' => 'Niti Conphrehence',
      '%s left the room.' => '%s je zapustil_a prostor.',
      'Edit Room' => 'Uredi prostor',
      'Search Rooms' => 'Poišči prostore',
      'Room topic.' => 'Tema prostora.',
      'Create Room' => 'Ustvari sobo',
      'Topic' => 'Tema',
      'Search %s...' => 'Poišči %s ...',
      'Create New Room' => 'Ustvari nov prostor',
      'Search by room titles.' => 'Iskanje po naslovih prostorov.',
      'Last updated %s' => 'Zadnja posodobitev: %s',
      'Are you sure you want to leave this room?' => 'Ali res želite zapustiti ta prostor?',
      '%s removed the room topic.' => '%s je odstranil_a temo prostora.',
    );
  }

}
