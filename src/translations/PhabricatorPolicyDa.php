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
      'No Extended Policy' => 'Ingen udvidet politik',
      'Can View' => 'Kan se',
      'Admin Policy' => 'Administratorpolitik',
      'Allow Public Visibility' => 'Tillad offentlig synlighed',
      'Object Policies' => 'Objektpolitikker',
      'Members of Project...' => 'Medlemmer af projekt...',
      'Advanced' => 'Avanceret',
      '%s (Project)' => '%s (Projekt)',
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
      'Invisible objects are ignored.' => 'Usynlige objekter ignoreres.',
      'is new' => 'er ny',
      'Invalid Policy' => 'Ugyldig politik',
      'Members of Project: %s' => 'Medlemmer af projekt: %s',
      'Basic Policies' => 'Grundlæggende politikker',
      'All Users' => 'Alle brugere',
      'Rules' => 'Regler',
      'Administrators can take this action.' => 'Administratorer kan udføre denne handling.',
      'You do not have permission to view this object.' => 'Du har ikke tilladelse til at se dette objekt.',
      'With Extended Policy' => 'Med udvidet politik',
      'Save Policy' => 'Gem politik',
      'Unknown Policy' => 'Ukendt politik',
      'is full' => 'er fuld',
      'View Policy' => 'Vis politik',
      'User Policy' => 'Brugerpolitik',
      'New Rule' => 'Ny regel',
    );
  }

}
