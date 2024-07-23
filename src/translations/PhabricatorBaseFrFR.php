<?php

final class PhabricatorBaseFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Aucune application « %s » !',
      'This application is required, so all users must have access to it.' => 'Cette application est nécessaire, donc tous les utilisateurs doivent y avoir accès.',
      'Can Configure Application' => 'Peut configurer l’application',
      'Can Use Application' => 'Peut utiliser l’application',
      'Core Applications' => 'Applications essentielles',
      'No application!' => 'Aucune application !',
      '%s Application' => 'Application %s',
      'Developer Tools' => 'Outils du développeur',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'La requête inclut le paramètre restreint « %s », mais ce contrôleur (« %s ») ne l’a pas en liste blanche. Refus de répondre à cette requête parce qu’elle pourrait faire partie d’une attaque de redirection.',
      'Unknown capability \'%s\'!' => 'Capacité « %s » inconnue !',
      'Unable to find transaction query for object of class "%s".' => 'Impossible de trouver la requête de transaction pour l’objet de classe « %s ».',
    );
  }

}
