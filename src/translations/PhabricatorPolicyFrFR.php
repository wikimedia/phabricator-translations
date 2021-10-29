<?php

final class PhabricatorPolicyFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Access Denied: %s' => 'Accès refusé: %s',
      'Logged in users can take this action.' => 'Les utilisateurs connectés peuvent effectuer cette action.',
      'Object URI' => 'URI d’objet',
      'Specify the name of an object to unlock.' => 'Spécifiez le nom de l\'object à déverouiller.',
      'Users who can see objects in this space:' => 'Utilisateurs pouvant voir des objets dans cet espace :',
      'After a user passes space policy checks, they must still pass object policy checks.' => 'Après qu\'un utilisateur ait passé les contrôles de confidentialité de l\'espace, il doit aussi passer les contrôles de confidentialité de l\'objet.',
      'You do not have permission to edit this object.' => 'Vous n’avez pas la permission de modifier cet objet.',
      'Can View' => 'Peut voir',
      'Only User: %s' => 'Seulement utilisateur: %s',
      'Admin Policy' => 'Politique administrateur',
      'Members of Project...' => 'Membres du Projet...',
      'Advanced' => 'Avancé',
      'By default, no one can take this action.' => 'Par défaut, personne ne peut prendre cette action.',
      'Deny' => 'Refuser',
      'Controls who can edit the object.' => 'Contrôle qui peut modifier l\'objet.',
      'Other Policies' => 'Autres Politiques',
      'Object Policy' => 'Politique d\'objets',
      'Can Interact' => 'Peut interagir',
      'Members of the project "%s" can take this action.' => 'Les membres du projet "%s" peuvent prendre cette action.',
      'UNLOCKING' => 'DÉVERROUILLAGE EN COURS',
      'Members of a particular project can take this action. (You can not see this object, so the name of this project is restricted.)' => 'Les membres d\'un projet particulier peuvent effectuer cette action. (Vous ne pouvez pas voir cet objet, donc le nom de ce projet est restreint.)',
      'Space:' => 'Espace :',
      'Select Project' => 'Sélectionner un projet',
      '%s can take this action.' => '%s peuvent effectuer cette action.',
      'You do not have permission to view policy details.' => 'Vous n\'avez pas la permission de voir les détails de confidentialité.',
      'Can Edit' => 'Peut modifier',
      'Members of Project: %s' => 'Membres du projet : %s',
      'Custom Policy' => 'Politique personnalisée',
      'Administrators can take this action.' => 'Les administrateurs peuvent effectuer cette action.',
      'Policy Details: %s' => 'Détails de confidentialité : %s',
      'The space this object is in has a more restrictive view policy ("%s") than the object does ("%s"), so the space\'s view policy is shown as a hint instead of the object policy.' => 'L\'espace dans lequel cet objet se trouve a une confidentialité de visualisation plus restrictive ("%s") que celle de l\'objet ("%s"), donc c\'est la confidentialité de visualisation de l\'espace qui est affichée et non celle de l\'objet.',
      'This object is in %s and can only be seen or edited by users with access to view objects in the space.' => 'Cet objet est dans %s et ne peut être vu ou modifié que par les utilisateurs ayant accès à la visualisation des objets dans cet espace.',
      'In detail, this means that these users can take this action, provided they pass all of the checks described above first:' => 'Plus précisément, cela signifie que ces utilisateurs peuvent effectuer cette action, à condition qu\'ils réunissent d\'abord toutes les vérifications décrites ci-dessus :',
      'Select a space for the object.' => 'Choisir un espace pour l\'objet.',
      'This object is in a space you do not have permission to access.' => 'Cet objet se trouve dans un espace auquel vous n\'êtes pas autorisé à accéder.',
      'This object is public and can be viewed by anyone, even if they do not have a Phabricator account.' => 'Cet objet est public et peut être consulté par n\'importe qui, même s\'il n\'a pas de compte Phabricator.',
      'You do not have permission to join this object.' => 'Vous n’avez pas le droit de modifier ce objet.',
      'Can Join' => 'Peut Rejoindre',
      'This object has a custom policy controlling who can take this action.' => 'Cet objet a une stratégie de confidentialité personnalisée contrôlant qui peut effectuer cette action.',
    );
  }

}
