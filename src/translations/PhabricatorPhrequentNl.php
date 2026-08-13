<?php

final class PhabricatorPhrequentNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Working Now' => 'Nu aan het werk',
  'by nearest start date' => 'op basis van de dichtstbijzijnde startdatum',
  'You can not stop tracking time at a future time. Enter the current time, or a time in the past.' => 'U kunt de tijdregistratie niet op een later tijdstip stoppen. Voer de huidige tijd in, of een tijdstip in het verleden.',
  'Stop Time' => 'Stop de tijd',
  'Stop Timer' => 'Timer stoppen',
  'Ended on %s' => 'Geëindigd op %s',
  'Unknown ended \'%s\'!' => 'Onbekend einde \'%s\'!',
  'Tracked %s so far' => 'Tot nu toe geregistreerd: %s',
  'Tracked: %s' => 'Geregistreerd: %s',
  'Start Time' => 'Begintijd',
  'Returns current objects being tracked in Phrequent.' => 'Geeft de huidige objecten weer die in Phrequent worden bijgehouden.',
  'Interrupted' => 'Onderbroken',
  'Stop Tracking Time' => 'Stop met het bijhouden van tijd',
  'Start Tracking Time' => 'Begin met het bijhouden van tijd',
  'Stop Tracking' => 'Stoppen met registreren',
  'Time Spent' => 'Bestede tijd',
  'Tracked %s' => 'Geregistreerd: %s',
  'Phrequent Time' => 'Phrequent-tijd',
  'Not Tracking Time' => 'Tijd wordt niet bijgehouden',
  'All Tracked' => 'Alles geregistreerd',
  'by furthest end date' => 'uiterlijke einddatum',
  'Unknown order "%s".' => 'Onbekende volgorde "%s".',
  'by nearest end date' => 'op de dichtstbijzijnde einddatum',
  'Ended' => 'Beëindigd',
  'by furthest start date' => 'op basis van de verste startdatum',
  'Stop' => 'Stoppen',
  'Not Working Now' => 'Niet aan het werk',
  'Started At' => 'Gestart om',
  'Start Tracking' => 'Beginnen met volgen',
  '%s (%s ago)' => '%s (%s geleden)',
  'Start Timer' => 'Timer starten',
  'What time did you start working?' => 'Hoe laat bent u begonnen met werken?',
  'Phrequent' => 'Phrequent',
  'What time did you stop working?' => 'Hoe laat bent u gestopt met werken?',
  'Track Time Spent' => 'Tijd bijhouden',
  'Please choose a valid date.' => 'Kies een geldige datum.',
  'You are not currently tracking time on this object.' => 'U houdt momenteel geen tijd bij voor dit object.',
  'Stop tracking time on an object by popping it from the stack.' => 'Stop met het bijhouden van de tijd op een object door het van de stapel te verwijderen.',
  'Start tracking time on an object by pushing it on the tracking stack.' => 'Begin met het bijhouden van de tijd op een object door het op de volgstapel te plaatsen.',
  'Stop time must be after start time.' => 'De eindtijd moet na de starttijd liggen.',
  'Currently Tracking' => 'Momenteel bezig met volgen',
  'You can not start tracking time at a future time. Enter the current time, or a time in the past.' => 'U kunt de tijdregistratie niet starten op een tijdstip in de toekomst. Voer de huidige tijd in, of een tijdstip in het verleden.',
);
  }

}
