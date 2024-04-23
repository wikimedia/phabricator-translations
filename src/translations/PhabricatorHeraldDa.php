<?php

final class PhabricatorHeraldDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'An object name is required.' => 'Et objektnavn er påkrævet.',
      'No object exists by that name.' => 'Der findes intet objekt med det navn.',
      'HMAC Key' => 'HMAC-nøgle',
      'does not contain' => 'indeholder ikke',
      'Invalid Content Type' => 'Ugyldig indholdstype',
      'Do nothing.' => 'Gør intet.',
      'exists' => 'findes',
      'Invalid Action' => 'Ugyldig handling',
      'does not exist' => 'findes ikke',
      'New Action' => 'Ny handling',
      'No Effect' => 'Ingen effekt',
      'View HMAC Key' => 'Vis HMAC-nøgle',
      'Did nothing.' => 'Gør intet.',
      'Content Type' => 'Indholdstype',
      'Added Comment' => 'Tilføj kommentar',
      'Did Nothing' => 'Gør intet',
      'Add comment: %s' => 'Tilføj kommentar: %s',
      'contains' => 'indeholder',
      'Do nothing' => 'Gør intet',
      'Content type' => 'Indholdstype',
      'is not' => 'er ikke',
    );
  }

}
