<?php

final class PhabricatorBaseFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Pas d\'application « %s » !',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => 'L’utilisateur \'%s\' est censé être autorisé à accéder à \'%s\'.',
      'Can Configure Application' => 'Peut configurer l\'application',
      'Can Use Application' => 'Peut utiliser l\'application',
      'Application Controller' => 'Contrôleur d\'application',
      'Public + configured' => 'Public + configuré',
      'Public Access' => 'Accès public',
      'Core Applications' => 'Applications coeur de réseau',
      'No Login Required' => 'Pas de connexion nécessaire',
      'No application!' => 'Pas d\'application !',
      '%s Application' => '%s Application',
      'Email Verification Required' => 'Vérification nécessaire de l\'adresse courriel',
      'Application Controller, No Login Required' => 'Contrôleur d’application, pas de connexion requise',
      'Developer Tools' => 'Outils du développeur',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'Cette application est nécessaire pour que Phabricator puisse fonctionner, donc tous les utilisateurs doivent y avoir accès.',
      'Expect user \'%s\' to be denied access to \'%s\'.' => 'L’utilisateur \'%s\' est censé ne pas avoir le droit d’accéder à \'%s\'.',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'La requête inclut le paramètre restreint « %s », mais ce contrôleur (« %s ») ne l’a pas en liste blanche. Refus de répondre à cette requête parce qu’elle pourrait faire partie d’une attaque de redirection.',
      'Unknown capability \'%s\'!' => 'Potentiel \'%s\' inconnu !',
      'Admin Required' => 'Administrateur requis',
      'Email Verification Required, With Exception' => 'Vérification de courriel obligatoire, avec des exceptions',
      'Allow Disabled' => 'Autoriser la désactivation',
    );
  }

}
