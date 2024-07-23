<?php

final class PhabricatorPolicyDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Access Denied: %s' => 'Adgang nægtet: %s',
      'User Policies' => 'Brugerpolitikker',
      'You do not have permission to edit this object.' => 'Du har ikke tilladelse til at se redigere objekt.',
      'Can View' => 'Kan se',
      'Allow Public Visibility' => 'Tillad offentlig synlighed',
      'Object Policies' => 'Objektpolitikker',
      'Members of Project...' => 'Medlemmer af projekt...',
      'Advanced' => 'Avanceret',
      'By default, no one can take this action.' => 'Som standard kan ingen udføre denne handling.',
      'Deny' => 'Nægt',
      'Special Rules' => 'Specielle regler',
      'Other Policies' => 'Andre politikker',
      'Can Interact' => 'Kan interagere',
      'Members of the project "%s" can take this action.' => 'Medlemmer af projektet "%s" kan udføre denne handling.',
      'Members Of' => 'medlemmer af',
      'Select Project' => 'Vælg projekt',
      '%s can take this action.' => '%s kan udføre denne handling.',
      'OBJECT' => 'OBJEKT',
      'Can Edit' => 'Kan redigere',
      'Edit Policy' => 'Rediger politik',
      'is new' => 'er ny',
      'Members of Project: %s' => 'Medlemmer af projekt: %s',
      'Basic Policies' => 'Grundlæggende politikker',
      'All Users' => 'Alle brugere',
      'Administrators can take this action.' => 'Administratorer kan udføre denne handling.',
      'You do not have permission to view this object.' => 'Du har ikke tilladelse til at se dette objekt.',
      'Save Policy' => 'Gem politik',
      'Unknown Policy' => 'Ukendt politik',
      'is full' => 'er fuld',
    );
  }

}
