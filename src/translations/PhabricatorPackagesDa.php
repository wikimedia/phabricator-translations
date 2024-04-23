<?php

final class PhabricatorPackagesDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Publishers' => 'Udgivere',
      'Read information about versions.' => 'Læs informationer om versioner.',
      '%s created this package.' => '%s oprettede denne pakke.',
      'Edit Version' => 'Rediger version',
      'Publish Software' => 'Udgiv software',
      'All Versions' => 'Alle versioner',
      'Create Version' => 'Opret version',
      'No versions found.' => 'Ingen versioner fundet.',
      'Package for this version.' => 'Pakke for denne version.',
      'Name of the version.' => 'Navn på versionen.',
      'The name of the version.' => 'Navnet på versionen.',
      'Package Versions' => 'Pakkeversioner',
      '%s created this version.' => '%s oprettede denne version.',
      'The unique key of the package.' => 'Den unikke nøgle for pakken.',
      'Read information about packages.' => 'Læs informationer om pakker.',
    );
  }

}
