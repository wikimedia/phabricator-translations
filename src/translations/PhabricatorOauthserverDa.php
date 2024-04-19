<?php

final class PhabricatorOauthserverDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Log In with %s' => 'Log på med Phabricator',
      'Server Error' => 'Serverfejl',
      'No clients found.' => 'Ingen klienter fundet.',
      'Client PHID' => 'Klient-PHID',
      'Rename the application.' => 'Omdøb applikationen.',
      'Continue to Application' => 'Fortsæt til applikationen',
      'OAuth Not Available' => 'OAuth er ikke tilgængelig',
      'OAuth Server' => 'OAuth-server',
      'Edit Application' => 'Rediger applikation',
    );
  }

}
