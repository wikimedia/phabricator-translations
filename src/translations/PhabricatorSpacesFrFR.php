<?php

final class PhabricatorSpacesFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Only the first space created can be the default space, and it must remain the default space evermore.' => 'Seul le premier espace créé peut être l\'espace par défaut, et il doit toujours le rester.',
      'Support for Spaces' => 'Suppport des espaces',
      'Spaces must have a name.' => 'Les espaces doivent avoir un nom.',
      '%s archived this space.' => '%s a archivé cet espace.',
      'Existing objects will no longer be hidden from query results.' => 'Les objets existants ne seront plus masqués dans les résultats de requêtes.',
      'You do not have permission to create spaces.' => 'Vous n\'avez pas la permission de créer des espaces.',
      'Ask someone to give you access to a space so you can view and create objects.' => 'Demandez à quelqu\'un de vous donner l\'accès à un espace afin que vous puissiez voir et créer des objets.',
      'Archive Space' => 'Espace d\'archive',
      'CHANGES TO SPACE DESCRIPTION' => 'MODIFICATIONS DE LA DESCRIPTION D\'ESPACE',
      'Spaces' => 'Espaces',
      'Policy Namespaces' => 'Espaces de noms des politiques',
      '%s created this space.' => '%s a créé cet espace.',
      'Space %s: %s' => 'Espace %s: %s',
      'No spaces found.' => 'Aucun espace trouvé.',
      'Edit Space' => 'Modifier l\'espace',
      'Test Space' => 'Tester l\'espace',
      '%s made space %s the default space.' => '%s a déclaré l\'espace %s comme espace par défaut.',
      'Activate Space' => 'Activer un espace',
      'PhabricatorSpacesApplication' => 'PhabricatorSpacesApplication',
      'Show Only Active Spaces' => 'Afficher uniquement les espaces actifs',
      'Active Spaces' => 'Espaces actifs',
    );
  }

}
