<?php

final class PhabricatorFlagEo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'eo';
  }

  protected function getTranslations() {
    return array(
      'Marked with "%s" flag.' => 'Markita per flago "%s".',
      'Personal Bookmarks' => 'Propraj Legosignoj',
      'Query flag markers.' => 'Serĉi flagmarkilojn.',
      'Clear a flag.' => 'Forigi flagon.',
      'Purple' => 'Purpura',
      'Unknown groupBy parameter: %s' => 'Nekonata groupBy-parametro: %s',
      'Mark with %s flag.' => 'Markita per flago %s.',
      'Flags are private. Only you can view or edit your flags.' => 'Flagoj estas privataj. Nur vi povas vidi aŭ redakti viajn flagojn.',
      'Must pass an id or an objectPHID.' => 'Devas doni aŭ id aŭ objectPHID.',
      'Already marked with %s flag.' => 'Jam markita per flago %s.',
      'Flag For Later' => 'Flagi por posto',
      'You are not the creator of this flag.' => 'Vi ne kreis tiun flagon.',
      'Flag %s' => 'Flago %s',
      'Create or modify a flag.' => 'Krei aŭ modifi flagon.',
      'Create Flag' => 'Krei Flagon',
      'You can flag this %s if you want to remember to look at it later.' => 'Vi povas flagi tiun per %s se vi volas rememorigi vin poste.',
      'No flags found.' => 'Neniu flago trovita.',
      'Bad flag ID.' => 'Malbona flago-identigilo.',
      'Remove %s Flag' => 'Forigi flagon %s',
      'All Object Types' => 'Ĉiuj Objektaj Tipoj',
      'Already Marked' => 'Jam Markita',
      'Flag Color' => 'Koloro de Flago',
      'Mark with flag' => 'Flagi',
      'Flagged' => 'Flagita',
    );
  }

}
