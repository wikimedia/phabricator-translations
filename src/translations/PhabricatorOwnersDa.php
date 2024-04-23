<?php

final class PhabricatorOwnersDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Package name is required.' => 'Pakkenavn er påkrævet.',
      'Create New Package' => 'Opret ny pakke',
      'Search for active or archived packages.' => 'Søg efter aktive eller arkiverede pakker.',
      'Include' => 'Inkluder',
      'Included Paths' => 'Inkluderede stier',
      'Validating...' => 'Validerer...',
      '%s updated paths for this package.' => '%s opdaterede stierne for denne pakke.',
      'Packages: Invalid Owner' => 'Pakker: Ugyldig ejer',
      'Packages: %s' => 'Pakker: %s',
      'owner' => 'ejer',
      'The package description.' => 'Pakkebeskrivelsen.',
      'Type a package name or function...' => 'Indtast et pakkenavn eller en funktion...',
      'Save Paths' => 'Gem stier',
      'Edit Paths' => 'Rediger stier',
      'Weak' => 'Svag',
      'Create a Package' => 'Opret en pakke',
      '%s archived this package.' => '%s arkiverede denne pakke.',
      'Subscribe to All Changes' => 'Abonner på alle ændringer',
      'Strong' => 'Stærk',
      'Packages: ...' => 'Pakker: ...',
      'Activate Package' => 'Aktiver pakke',
      'This package will become active again.' => 'Denne pakke vil blive aktiv igen.',
      '%s updated the description for this package.' => '%s opdaterede beskrivelsen for denne pakke.',
      '%s activated this package.' => '%s aktiverede denne pakke.',
      'List of package owners.' => 'Liste over pakkeejere.',
      'Active or archived status of the package.' => 'Aktiv eller arkiveret status for denne pakke.',
      '%s removed %s owner(s): %s.' => '%s fjernede %s ejer(e): %s.',
      'Edit Paths: %s' => 'Rediger stier: %s',
      'Package %d' => 'Palle %s',
      'Add New Path' => 'Tilføj ny sti',
      'Active Packages' => 'Aktive pakker',
      'Exclude' => 'Ekskluder',
      'Archive Package' => 'Arkiver pakke',
    );
  }

}
