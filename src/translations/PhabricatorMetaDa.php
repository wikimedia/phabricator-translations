<?php

final class PhabricatorMetaDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Information',
      'This application cannot be uninstalled, because it is required for Phabricator to work.' => 'Denne applikation kan ikke afinstalleres, fordi den er krævet for at Phabricator kan fungere.',
      'Syntax' => 'Syntaks',
      'You cannot install an installed application.' => 'Du kan ikke installere en installeret applikation.',
      'Create Application' => 'Opret applikation',
      'Really Uninstall Application?' => 'Vil du virkelig afinstallere applikationen?',
      'Really uninstall the %s application?' => 'Vil du virkelig afinstallere applikationen %s?',
      'Policy does not exist.' => 'Politikken findes ikke.',
      'Completely Break Phabricator' => 'Ødelæg Phabricator fuldstændigt',
      '%s installed this application.' => '%s installerede denne applikation.',
      'Confirmation' => 'Bekræftelse',
      'Explore More Applications' => 'Udforsk flere applikationer',
      'Uninstalled' => 'Afinstalleret',
      'Show Uninstalled Applications' => 'Vis afinstallerede applikationer',
      'Save Policies' => 'Gem politikker',
      'Browse Applications' => 'Gennemse applikationer',
      'Prototype' => 'Prototype',
      'Edit Policies: %s' => 'Rediger politikker: %s',
      'Create New Application' => 'Opret ny applikation',
      'Extension' => 'Udvidelse',
      'Validation Failed' => 'Validering mislykkedes',
      'Show Installed Applications' => 'Vis installerede applikationer',
      '%s uninstalled this application.' => '%s afinstallerede denne applikation.',
      'Configure' => 'Konfigurér',
      '%s uninstalled %s.' => '%s afinstallerede %s.',
      '%s installed %s.' => '%s installerede %s.',
      'Uninstall' => 'Afinstaller',
      'Type an application name...' => 'Indtast et applikationsnavn...',
      'Install %s application?' => 'Installer applikationen %s?',
      'Edit Application: %s' => 'Rediger applikation: %s',
      'Show All Applications' => 'Vis alle applikationer',
      'Install' => 'Installer',
    );
  }

}
