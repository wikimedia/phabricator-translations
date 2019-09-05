<?php

final class PhabricatorCountdownDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'COUNTDOWN DETAIL' => 'DETALJER OM NEDTÆLLING',
      'Minutes' => 'Minutter',
      'Date when the countdown ends.' => 'Dato for hvornår nedtællingen slutter.',
      'Change the end date of the countdown.' => 'Ændre slutdatoen for nedtællingen.',
      'Edit Countdown: %s' => 'Rediger nedtælling: %s',
      'Countdowns' => 'Nedtællinger',
      'Show only upcoming countdowns.' => 'Vis kun kommende nedtællinger',
      'Change the countdown description.' => 'Ændre beskrivelsen på nedkølingen.',
      'Create a Countdown' => 'Opret en nedtælling',
      'No countdowns found.' => 'Ingen nedtællinger fundet.',
      'Upcoming' => 'Kommende',
      'The title of the countdown.' => 'Titlen på nedtællingen.',
      'Last Words' => 'Sidste ord',
      'New description.' => 'Ny beskrivelse.',
      'Edit Countdown' => 'Rediger nedtælling',
      'End Date' => 'Slutdato',
      'Description of the countdown.' => 'Beskrivelse for nedtællingen',
      'Hours' => 'Timer',
      'Countdowns must have a title.' => 'Nedtællinger skal have en titel.',
      'Rename the countdown.' => 'Omdøb nedtællingen.',
      'Countdown' => 'Nedtælling',
      'COUNTDOWN DESCRIPTION' => 'BESKRIVELSE FOR NEDTÆLLING',
      'Creates and edits countdowns.' => 'Opretter og redigerer nedtællinger.',
      'Edit Countdowns' => 'Rediger nedtællinger',
      'Create Countdown' => 'Opret nedtælling',
      'Days' => 'Dage',
      'The description of the countdown.' => 'Beskrivelsen for nedtællingen.',
      'You must give the countdown an end date.' => 'Du skal give nedtællingen en slutdato.',
    );
  }

}
