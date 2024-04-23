<?php

final class PhabricatorDiffusionSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Type a user, project or package name...' => 'Skriv namnet på en användare, projekt eller paket...',
      'Type a symbol name...' => 'Skriv ett symbolnamn...',
      'Parameter "%s" is required if "%s" is provided.' => 'Parametern "%s" är nödvändig om "%s" anges.',
      'Branch Closed' => 'Förgrening stängd',
      'Find Symbol' => 'Hitta symbol',
      'Client closed connection before receiving response.' => 'Klienten stängde anslutningen innan ett svar hämtades.',
      'Change symbol languages for this repository.' => 'Ändra symbolspråk för detta kodförvar.',
      'New symbol languages.' => 'Nya symbolspråk.',
      'File Renamed' => 'Fil bytte namn',
      'More Tags…' => 'Fler taggar…',
      'Assigned To: %s' => 'Tilldelad till: %s',
      'Tags for %s' => 'Taggar för %s',
    );
  }

}
