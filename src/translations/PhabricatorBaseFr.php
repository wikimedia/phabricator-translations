<?php

final class PhabricatorBaseFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Pas d\'application « %s » !',
      'Can Configure Application' => 'Peut configurer l\'application',
      'Can Use Application' => 'Peut utiliser l\'application',
      'Application Controller' => 'Contrôleur d\'application',
      'Public + configured' => 'Public + configuré',
      'Public Access' => 'Accès public',
      'No Login Required' => 'Pas de connexion nécessaire',
      'No application!' => 'Pas d\'application !',
      '%s Application' => '%s Application',
      'Developer Tools' => 'Outils du développeur',
      'Admin Required' => 'Administrateur requis',
    );
  }

}
