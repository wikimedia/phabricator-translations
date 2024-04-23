<?php

final class PhabricatorPeopleNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Confirm' => 'Bevestigen',
      'users' => 'gebruikers',
      'New Username: %s' => 'Nieuwe gebruikersnaam: %s',
      'Approve' => 'Goedkeuren',
      'Action Name' => 'Naam handeling',
      'Not Approved' => 'Niet goedgekeurd',
      'Edit Profile: %s' => 'Profiel bewerken: %s',
      'Old Username' => 'Oude gebruikersnaam',
      'Hi %s' => 'Hi %s',
    );
  }

}
