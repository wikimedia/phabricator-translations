<?php

final class PhabricatorFlagDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Personal Bookmarks' => 'Personlige bogmærker',
      'Clear a flag.' => 'Ryd et flag.',
      'Purple' => 'Lilla',
      'Already marked with %s flag.' => 'Allerede markeret med %s-flaget.',
      'You are not the creator of this flag.' => 'Du er ikke skaberen til dette flag.',
      'Flag %s' => 'Flag %s',
      'Create or modify a flag.' => 'Opret eller ændre et flag.',
      'Create Flag' => 'Opret flag',
      'No flags found.' => 'Intet flag fundet.',
      'Bad flag ID.' => 'Dårligt flag-ID.',
      'Remove %s Flag' => 'Fjern flaget %s',
      'All Object Types' => 'Alle objekttyper',
      'Already Marked' => 'Allerede markeret',
      'Flag Color' => 'Farv på flag',
      'Mark with flag' => 'Marker med flag',
    );
  }

}
