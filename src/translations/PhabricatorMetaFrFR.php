<?php

final class PhabricatorMetaFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Information',
      'This application cannot be uninstalled, because it is required for Phabricator to work.' => 'Cette application ne peut pas être désinstallée car elle est nécessaire au fonctionnement de Phabricator.',
      'Syntax' => 'Syntaxe',
      'You cannot install an installed application.' => 'Vous ne pouvez pas installer une application déjà installée.',
      'Create Application' => 'Créer une application',
      'Really Uninstall Application?' => 'Voulez-vous réellement désinstaller l\'application?',
      'Prototypes Not Enabled' => 'Prototypes désactivés',
      'Really uninstall the %s application?' => 'Voulez-vous vraiment désinstaller l’application %s ?',
      'Launcher' => 'Lanceur',
      'To manage prototypes, enable them by setting %s in your Phabricator configuration.' => 'Pour gérer les prototypes, activez-les en paramétrant %s dans votre configuration Phabricator.',
      'This application is a prototype. %s' => 'Cette application est un prototype. %s',
      '%s installed this application.' => '%s a installé cette application.',
      'Confirmation' => 'Confirmation',
      'Explore More Applications' => 'Explorer plus d’applications',
      'Uninstalled' => 'Désinstallé',
      'Show Uninstalled Applications' => 'Voir les applications désinstallées',
      'Browse Applications' => 'Parcourir les applications',
      'Prototype' => 'Prototype',
      'Create New Application' => 'Créer une nouvelle application',
      'Extension' => 'Extension',
      'Validation Failed' => 'La validation a échoué',
      'Show Installed Applications' => 'Voir les applications installées',
      '%s uninstalled this application.' => '%s a désinstallé cette application.',
      'Configure' => 'Configurer',
      'Show Released Applications' => 'Voir les applications publiées',
      '%s uninstalled %s.' => '%s a désinstallé %s.',
      '%s installed %s.' => '%s a installé %s.',
      'Uninstall' => 'Désinstaller',
      'Type an application name...' => 'Entrer un nom d’application...',
      'Install %s application?' => 'Installer l’application %s ?',
      'Are you absolutely certain you want to uninstall the Home application?' => 'Êtes-vous absolument certains de vouloir supprimer l\'application Accueil?',
      'Provenance' => 'Provenance',
      'Edit Application: %s' => 'Modifier l\'application %s',
      'Show Third-Party Applications' => 'Voir les applications tierces',
      'Show All Applications' => 'Montrer toutes les applications',
      'Install' => 'Installer',
    );
  }

}
