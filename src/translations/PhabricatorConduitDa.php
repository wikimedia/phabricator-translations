<?php

final class PhabricatorConduitDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Support for ConduitResultInterface' => 'Understøttelse af ConduitResultInterface',
      'JSON' => 'JSON',
      'Deprecated Method' => 'Forældet metode',
      'All Methods' => 'Alle metoder',
      'API Method: %s' => 'API-metode: %s',
      'Human Readable' => 'Menneskeligt læseligt',
      'Unstable Methods' => 'Ustabile metoder',
      'List of integers.' => 'Liste over heltal.',
      'No such user "%s" exists.' => 'Brugeren "%s" findes ikke.',
      'My Calls' => 'Mine kald',
      'An integer.' => 'Et heltal.',
      'Access token does not exist.' => 'Adgangsnøglen findes ikke.',
      'Method Parameters' => 'Metodeparametre',
      'List of usernames.' => 'Liste over brugernavne.',
      'Caller PHID' => 'Kalder-PHID',
      'List of user PHIDs.' => 'Liste over bruger-PHID\'er.',
      'List of PHIDs.' => 'Liste over PHID\'er.',
      'A PHID.' => 'Et PHID.',
      'List of strings.' => 'Liste over strenge.',
      'Stable Methods' => 'Stabile metoder',
      'Stability' => 'Stabilitet',
      'Errors' => 'Fejl',
      'User PHID.' => 'Bruger-PHID.',
      'Username.' => 'Brugernavn.',
      'Unstable Method' => 'Ustabil metode',
      'A string.' => 'En streng.',
      'Returns' => 'Returnerer',
      'Active API Tokens' => 'Aktive API-nøgler',
      'API token "%s" is not valid.' => 'API-nøglen "%s" er ikke gyldig.',
      'Generate API Token' => 'Generer API-nøgle',
      'View API Token' => 'Vis API-nøgle',
      'No Tokens to Terminate' => 'Ingen nøgler at ophæve',
      'Terminate API Tokens' => 'Ophæv API-nøgler',
      'Modern Methods' => 'Moderne metoder',
      'Stable' => 'Stabil',
      'This method is deprecated.' => 'Denne metode er forældet.',
      'Unstable' => 'Ustabil',
      'Method Status' => 'Status på metode',
      'Client is unknown.' => 'Klient er ukendt.',
    );
  }

}
