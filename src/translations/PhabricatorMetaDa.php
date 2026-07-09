<?php

final class PhabricatorMetaDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
  'Completely Break Everything' => 'Ødelæg Phabricator fuldstændigt',
  'Information' => 'Information',
  'Syntax' => 'Syntaks',
  'Create Application' => 'Opret applikation',
  'Policy does not exist.' => 'Politikken findes ikke.',
  'Confirmation' => 'Bekræftelse',
  'Explore More Applications' => 'Udforsk flere applikationer',
  'Show Enabled Applications' => 'Vis installerede applikationer',
  'You cannot enable an enabled application.' => 'Du kan ikke installere en installeret applikation.',
  'Save Policies' => 'Gem politikker',
  'Browse Applications' => 'Gennemse applikationer',
  'Prototype' => 'Prototype',
  'Edit Policies: %s' => 'Rediger politikker: %s',
  'Really Disable Application?' => 'Vil du virkelig afinstallere applikationen?',
  'Create New Application' => 'Opret ny applikation',
  'Extension' => 'Udvidelse',
  'Validation Failed' => 'Validering mislykkedes',
  'Really disable the %s application?' => 'Vil du virkelig afinstallere applikationen %s?',
  'Show Disabled Applications' => 'Vis afinstallerede applikationer',
  'Type an application name...' => 'Indtast et applikationsnavn...',
  'This application is required and cannot be disabled.' => 'Denne applikation kan ikke afinstalleres, fordi den er krævet for at Phabricator kan fungere.',
  'Edit Application: %s' => 'Rediger applikation: %s',
  'Show All Applications' => 'Vis alle applikationer',
);
  }

}
