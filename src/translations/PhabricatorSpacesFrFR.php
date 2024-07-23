<?php

final class PhabricatorSpacesFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      '%s updated the space description for %s.' => '%s a mis à jour la description de l’espace pour %s.',
      '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)' => '(Cette erreur indique généralement que %s est activé alors qu’il n’y a aucun espace ayant une politique de visualisation « %s ». Ces paramètres sont contradictoires et impliquent une configuration incorrecte.)',
      'Spaces User Guide' => 'Manuel utilisateur des espaces',
      'Hide Active Spaces' => 'Masquer les espaces actifs',
      '%s updated the space description.' => '%s a mis à jour la description de l’espace.',
      '%s archived space %s.' => '%s a archivé l’espace %s.',
      'PHID of the policy space this object is part of.' => 'PHID de l’espace de politique dont fait partie l’objet.',
      'Default edit policy for newly created spaces.' => 'Politique de modification par défaut pour les espaces récemment créés.',
      'Only the first space created can be the default space, and it must remain the default space evermore.' => 'Seul le premier espace créé peut être l’espace par défaut et il doit toujours le rester.',
      'Search for objects in certain spaces.' => 'Rechercher des objets dans certains espaces.',
      'Activate Space: %s' => 'Activer l’espace : %s',
      'Support for Spaces' => 'Prise en charge des espaces',
      '%s renamed space %s from %s to %s.' => '%s a renommé l’espace %s de « %s » en « %s ».',
      'Create a Space' => 'Créer un espace',
      '%s activated this space.' => '%s a activé cet espace.',
      'Archive Space: %s' => 'Archiver l’espace : %s',
      'Spaces must have a name.' => 'Les espaces doivent avoir un nom.',
      'Existing objects in this Space will be hidden from query results by default.' => 'Les objets existant dans cet espace seront masqués par défaut dans les résultats de requêtes.',
      '%s made this the default space.' => '%s a fait de ceci l’espace par défaut.',
      '%s archived this space.' => '%s a archivé cet espace.',
      'Type a space name...' => 'Saisissez un nom d’espace...',
      'Existing objects will no longer be hidden from query results.' => 'Les objets existants ne seront plus masqués dans les résultats de requêtes.',
      'You do not have permission to create spaces.' => 'Vous n’avez pas la permission de créer des espaces.',
      'Ask someone to give you access to a space so you can view and create objects.' => 'Demandez à quelqu’un de vous donner l’accès à un espace afin que vous puissiez y voir et y créer des objets.',
      'Default Space' => 'Espace par défaut',
      'Archive Space' => 'Archiver l’espace',
      'CHANGES TO SPACE DESCRIPTION' => 'MODIFICATIONS DE LA DESCRIPTION DE L’ESPACE',
      'Default view policy for newly created spaces.' => 'Politique d’affichage par défaut pour les espaces récemment créés.',
      'Spaces' => 'Espaces',
      'Drift Aimlessly' => 'Dérive sans but',
      'Browse Spaces' => 'Parcourir les espaces',
      'Can Create Spaces' => 'Peut créer des espaces',
      'All Spaces' => 'Tous les espaces',
      'Control access to groups of objects.' => 'Contrôle l’accès aux groupes d’objets.',
      'If you activate this space, you will be able to create objects inside it again.' => 'Si vous activez cet espace, vous pourrez à nouveau y créer des objets.',
      'Create Space' => 'Créer un espace',
      'Log in, or ask someone to create a public space which logged out users are permitted to access.' => 'Connectez-vous ou demandez à quelqu’un de créer un espace public auquel les utilisateurs non connectés sont autorisés à accéder.',
      'Policy Namespaces' => 'Espaces de noms des politiques',
      '%s activated space %s.' => '%s a activé l’espace %s.',
      '%s created this space.' => '%s a créé cet espace.',
      'Space %s: %s' => 'Espace %s : %s',
      'No Access to Spaces' => 'Aucun accès aux espaces',
      '%s renamed this space from %s to %s.' => '%s a renommé cet espace de « %s » en « %s ».',
      'No spaces found.' => 'Aucun espace trouvé.',
      'This install uses spaces to organize objects, but logged out users do not have access to any spaces.' => 'Ceci installe des espaces d’utilisation pour organiser les objets, mais les utilisateurs non connectés n’ont accès à aucun espace.',
      'Edit Space' => 'Modifier l’espace',
      '%s made space %s the default space.' => '%s a déclaré l’espace %s comme espace par défaut.',
      'NOTE: You are creating the **default space**. All existing objects will be put into this space. You must create a default space before you can create other spaces.' => 'NOTE : vous créez **l’espace par défaut**. Tous les objets existants seront placés dans cet espace. Vous devez créer un espace par défaut avant de pouvoir créer d’autres espaces.',
      'Activate Space' => 'Activer un espace',
      'Show Only Active Spaces' => 'Afficher uniquement les espaces actifs',
      'Policy namespaces to segment object visibility throughout your instance.' => 'Définir une politique d’espaces de noms pour segmenter la visibilité des objets partout sur votre instance.',
      'If you archive this Space, you will no longer be able to create new objects inside it.' => 'Si vous archivez cet espace, vous ne pourrez plus y créer de nouveaux objets.',
      '%s created space %s.' => '%s a créé l’espace %s.',
      'Active Spaces' => 'Espaces actifs',
      'This install uses spaces to organize objects, but your account does not have access to any spaces.' => 'Ceci installe des espaces d’utilisation pour organiser les objets, mais votre compte n’a accès à aucun espace.',
    );
  }

}
