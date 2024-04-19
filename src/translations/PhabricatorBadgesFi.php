<?php

final class PhabricatorBadgesFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Create Badge' => 'Luo merkki',
      'Edit Badge: %s' => 'Muokkaa merkkiä: %s',
      'All Badges' => 'Kaikki merkit',
      'Edit Badge' => 'Muokkaa merkkiä',
      'Create a Badge' => 'Luo merkki',
      'Star Ship' => 'Tähtilaiva',
      'Browse Badges' => 'Selaa merkkejä',
      '%s disabled this badge.' => '%s poisti tämän merkin käytöstä.',
      'Quality' => 'Laatu',
      'Archive Badge' => 'Arkistoi merkki',
      'Legendary' => 'Legendaarinen',
      '%s enabled the badge %s.' => '%s otti käyttöön merkin %s.',
      'International' => 'Kansainvälinen',
      'Ladybug' => 'Leppäkerttu',
      'You do not have permission to create badges.' => 'Sinulla ei ole oikeutta luoda merkkejä.',
      'Rare' => 'Harvinainen',
      'No badges found.' => 'Merkkejä ei löytynyt.',
      'Create New Badge' => 'Luo uusi merkki',
    );
  }

}
