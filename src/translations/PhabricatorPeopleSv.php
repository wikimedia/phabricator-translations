<?php

final class PhabricatorPeopleSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'User has not been awarded any badges.' => 'Användaren har inte tilldelats några emblem.',
      'User does not belong to any projects.' => 'Användaren tillhör inte några projekt.',
      '[%s] Welcome to %s' => '[Phabricator] Välkommen till Phabricator',
      'Awarded by %s' => 'Tilldelades av %s',
      'User Details' => 'Användardetaljer',
      'Availability' => 'Tillgänglighet',
      'Edit Profile Picture' => 'Redigera profilbild',
      'Projects (%s)' => 'Projekt (%s)',
      'Save Profile' => 'Spara profil',
      'Edit Profile: %s' => 'Redigera profil: %s',
      'Remove Administrator' => 'Ta bort administratör',
      'Type a username...' => 'Skriv ett användarnamn...',
      'Edit Settings' => 'Redigera inställningar',
      'Edit Profile' => 'Redigera profil',
      'User Since' => 'Användare sedan',
    );
  }

}
