<?php

final class PhabricatorPackagesFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Once a publisher is created, its key can not be changed.' => 'Kun julkaisija on luotu, sen avainta ei voi muuttaa.',
      'No publishers found.' => 'Julkaisijoita ei löytynyt.',
      'Publishers' => 'Julkaisijat',
      'Can Create Publishers' => 'Voi luoda julkaisijoita',
      '%s created this package.' => '%s loi tämän paketin.',
      'Publish Software' => 'Julkaise ohjelmisto',
      'All Versions' => 'Kaikki versiot',
      '%s created this publisher.' => '%s loi tämän julkaisijan.',
      'Publisher' => 'Julkaisija',
      'Packages must have a name.' => 'Paketeilla tulee olla nimi.',
      'Edit Version: %s' => 'Muokkaa versiota: %s',
      'Publishers must have a name.' => 'Julkaisijoilla on oltava nimi.',
      'Create Version' => 'Luo versio',
      'No versions found.' => 'Versioita ei löytynyt.',
      'Versions must have a name.' => 'Versioilla on oltava nimi.',
      'Create Publisher' => 'Luo julkaisija',
      'Package for this version.' => 'Paketti tälle versiolle.',
      'Name of the version.' => 'Version nimi.',
      'The name of the version.' => 'Version nimi.',
      '%s created this version.' => '%s loi tämän version.',
      'Edit Publisher' => 'Muokkaa julkaisijaa',
      'The name of the publisher.' => 'Julkaisijan nimi.',
      'Once a version is created, its package can not be changed.' => 'Kun versio on luotu, sen pakettia ei voi muuttaa.',
      'Type a publisher name...' => 'Kirjoita julkaisijan nimi...',
    );
  }

}
