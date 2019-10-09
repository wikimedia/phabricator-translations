<?php

final class PhabricatorSystemFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'L\'extension « %s » n\'est pas installée sur ce système, le codage des caractères n\'est donc pas pris en compte. Installez « %s » pour activer cette fonctionnalité.',
      'This mode is active because it is enabled in the configuration option "%s".' => 'Ce mode est actif car il est autorisé par l\'option de configuration « %s ».',
      'No Encoding Support' => 'Pas de prise en charge de l’encodage',
      'No such object "%s" exists!' => 'il n\'existe pas l\'objet « %s » .',
      '%d / hour' => '%s / heure',
      'Permanently destroyed %s object(s).' => 'Objet(s) détruit(s) de manière permanente: %s .',
      'IMPORTANT' => 'IMPORTANT',
      'Quite Unsettling' => 'Presque ininstallable',
      'This likely indicates a severe misconfiguration or major service interruption.' => 'Cela indique probablement une mauvaise configuration ou une interruption majeure du service.',
      'Destroying objects...' => 'Objets en cours de suppression...',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'Ce mode est actif car aucune base de données n\'a de rôle « %s » dans l\'option de configuration « %s ».',
      'Aborted, your objects are safe.' => 'Annulé, vos objets sont en sécurité.',
      'No Object URI' => 'Pas d\'URI d\'objet',
      'Destroy objects without prompting.' => 'Détruire un objet sans demander l\'autorisation.',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => 'Le taux maximum autorisé pour cette action est de %s. Vous prenez des actions à un taux de %s.',
      'Object "%s" exists, but does not have a URI to redirect to.' => 'L\'objet « %s » existe, mais ne possède pas d\'URI de redirection.',
    );
  }

}
