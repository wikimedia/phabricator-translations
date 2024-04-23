<?php

final class PhabricatorRepositorySv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'TAGS' => 'TAGGAR',
      'Result Name' => 'Resultatnamn',
      'Short Names' => 'Korta namn',
      'Enormous' => 'Enorm',
      'EMAIL' => 'E-POST',
      'Create Identity' => 'Skapa identitet',
      'Rewrite' => 'Skriv om',
      'USER' => 'ANVÄNDARE',
      'SSH' => 'SSH',
      'Ref Name' => 'Referensnamn',
      'Resolving update for "%s".' => 'Löser uppdatering för "%s".',
      'Ref Type' => 'Referenstyp',
      'Dangerous' => 'Farlig',
      '%s changed symbol sources from %s to %s.' => '%s ändrade symbolkällor från %s till %s.',
      'HTTP' => 'HTTP',
      'HTTPS' => 'HTTPS',
    );
  }

}
