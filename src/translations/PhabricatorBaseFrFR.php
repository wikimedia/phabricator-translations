<?php

final class PhabricatorBaseFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Aucune application « %s » !',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => 'L’utilisateur « %s » est sensé être autorisé à accéder à « %s ».',
      'Can Configure Application' => 'Peut configurer l’application',
      'Can Use Application' => 'Peut utiliser l’application',
      'Application Controller' => 'Contrôleur d’application',
      'Public + configured' => 'Public + configuré',
      'Public Access' => 'Accès public',
      'Core Applications' => 'Applications essentielles',
      'No Login Required' => 'Aucune connexion nécessaire',
      'No application!' => 'Aucune application !',
      '%s Application' => 'Application %s',
      'Email Verification Required' => 'Vérification nécessaire de l’adresse courriel',
      'Application Controller, No Login Required' => 'Contrôleur d’application, aucune connexion requise',
      'Developer Tools' => 'Outils du développeur',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'Cette application est nécessaire pour que Phabricator puisse fonctionner, donc tous les utilisateurs doivent y avoir accès.',
      'Expect user \'%s\' to be denied access to \'%s\'.' => 'L’utilisateur « %s » est sensé ne pas avoir le droit d’accéder à « %s ».',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'La requête inclut le paramètre restreint « %s », mais ce contrôleur (« %s ») ne l’a pas en liste blanche. Refus de répondre à cette requête parce qu’elle pourrait faire partie d’une attaque de redirection.',
      'Unknown capability \'%s\'!' => 'Capacité « %s » inconnue !',
      'Admin Required' => 'Administrateur nécessaire',
      'Email Verification Required, With Exception' => 'Vérification de courriel obligatoire, avec des exceptions',
      'Allow Disabled' => 'Autoriser la désactivation',
      'Unable to find transaction query for object of class "%s".' => 'Impossible de trouver la requête de transaction pour l’objet de classe « %s ».',
    );
  }

}
