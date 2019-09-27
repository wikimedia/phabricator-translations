<?php

final class PhabricatorMetaFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Information',
      'Syntax' => 'Syntaxe',
      'You cannot install an installed application.' => 'Vous ne pouvez pas installer une application déjà installée.',
      'Create Application' => 'Créer une application',
      'Really Uninstall Application?' => 'Voulez-vous réellement désinstaller l\'application?',
      'Launcher' => 'Lanceur',
      '%s installed this application.' => '%s a installé cette application.',
      'Confirmation' => 'Confirmation',
      'Explore More Applications' => 'Explorer plus d’applications',
      'Uninstalled' => 'Désinstallé',
      'Show Uninstalled Applications' => 'Voir les applications désinstallées',
      '%s uninstalled this application.' => '%s a désinstallé cette application.',
      '%s uninstalled %s.' => '%s a désinstallé %s.',
      '%s installed %s.' => '%s a installé %s.',
      'Uninstall' => 'Désinstaller',
      'Are you absolutely certain you want to uninstall the Home application?' => 'Êtes-vous absolument certains de vouloir supprimer l\'application Accueil?',
      'Edit Application: %s' => 'Modifier l\'application %s',
      'Show All Applications' => 'Montrer toutes les applications',
      'Install' => 'Installer',
    );
  }

}
