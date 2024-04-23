<?php

final class PhabricatorPeoplePl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Save Profile' => 'Zapisz profil',
      'User Accounts' => 'Konta użytkowników',
      'Create a standard user account.' => 'Utwórz konto standardowego użytkownika.',
      'Make Administrator' => 'Uczyń administratorem',
      'Make Administrator?' => 'Uczynić administratorem?',
      'Create Standard User' => 'Utwórz standardowego użytkownika',
      'Logout' => 'Wyloguj',
    );
  }

}
