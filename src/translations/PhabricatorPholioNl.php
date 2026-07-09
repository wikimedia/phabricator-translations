<?php

final class PhabricatorPholioNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'This mock will be closed.' => 'Deze mock wordt gesloten.',
  'This image will be removed from the mock.' => 'Deze afbeelding wordt uit de mock verwijderd.',
  '%s replaced %s with %s.' => '%s heeft %s vervangen door %s.',
  'Edit Mock: %s' => 'Mock bewerken: %s',
  'Mock images must have a title.' => 'Mock-afbeeldingen moeten een titel hebben.',
  'View Mock' => 'Mock weergeven',
  'Review Mocks and Design' => 'Mocks en ontwerp beoordelen',
  '%s added %d image(s): %s.' => array(
    
    array(
      '%s heeft een afbeelding toegevoegd: %3$s.',
      '%s heeft afbeeldingen toegevoegd: %3$s.',
    ),
  ),
  'Close Mock' => 'Mock sluiten',
  '%s closed mock %s.' => '%s heeft mock %s gesloten.',
  'A mock\'s status changes.' => 'De status van een mock wijzigt.',
  'Open Mocks' => 'Open mocks',
  'No image attached!' => 'Geen afbeelding bijgevoegd!',
  '%s closed this mock.' => '%s heeft deze mock gesloten.',
  '%s removed %s task(s) for %s: %s.' => array(
    
    array(
      '%s heeft een taak verwijderd voor %3$s: %4$s.',
      '%s heeft taken verwijderd voor %3$s: %4$s.',
    ),
  ),
  '%s created this mock.' => '%s heeft deze mock aangemaakt.',
  'Pholio Mocks' => 'Pholio-mocks',
  '%s removed %d image(s): %s.' => array(
    
    array(
      '%s heeft een afbeelding verwijderd: %3$s.',
      '%s heeft afbeeldingen verwijderd: %3$s.',
    ),
  ),
  'Mock image titles must not be longer than %s character(s).' => array(
    'Namen van mockafbeeldingen mogen niet langer zijn dan %s teken.',
    'Namen van mockafbeeldingen mogen niet langer zijn dan %s tekens.',
  ),
  '%s edited task(s) for %s, added %s: %s; removed %s: %s.' => array(
    
    array(
      '%s heeft een taak bewerkt voor %s; toegevoegd: %4$s; verwijderd: %6$s.',
      '%s heeft taken bewerkt voor %s; toegevoegd: %4$s; verwijderd: %6$s.',
    ),
  ),
  'Undo' => 'Ongedaan maken',
  'React to mocks being created or updated.' => 'Reageren op mocks die worden aangemaakt of bijgewerkt.',
  'The author of a mock can always view and edit it.' => 'De auteur van een mock kan deze altijd weergeven en bewerken.',
  'Image ("%s") does not specify which image it replaces.' => 'Afbeelding ("%s") geeft niet aan welke afbeelding deze vervangt.',
  'Upload sets of images for review with revision history and inline comments.' => 'Sets afbeeldingen uploaden voor beoordeling met versiegeschiedenis en ingebedde opmerkingen.',
  'Pholio' => 'Pholio',
  'Image ("%s") belongs to the wrong object ("%s", expected "%s").' => 'Afbeelding ("%s") hoort bij het verkeerde object ("%s", verwacht "%s").',
  '%s updated the mock\'s description.' => '%s heeft de beschrijving van de mock bijgewerkt.',
  '%s updated image descriptions of %s.' => '%s heeft afbeeldingsbeschrijvingen van %s bijgewerkt.',
  'File is not viewable.' => 'Bestand kan niet worden weergegeven.',
  'Edit Inline Comment' => 'Ingebedde opmerking bewerken',
  '%s added an inline comment to %s.' => '%s heeft een ingebedde opmerking toegevoegd aan %s.',
  'You can not query for inline comments without also querying for images.' => 'U kunt niet zoeken naar ingebedde opmerkingen zonder ook naar afbeeldingen te zoeken.',
  'Someone comments on a mock.' => 'Iemand plaatst een opmerking op een mock.',
  'Uploading Image...' => 'Afbeelding uploaden...',
  'History Beckons' => 'Geschiedenis wenkt',
  'Mock Fields' => 'Mockvelden',
  'Pholio Mock' => 'Pholio-mock',
  'Open Pholio Mock' => 'Pholio-mock openen',
  'Create Mock' => 'Mock aanmaken',
  'All Mocks' => 'Alle mocks',
  'Click here, or drag and drop images to add them to the mock.' => 'Klik hier of sleep afbeeldingen om ze aan de mock toe te voegen.',
  'Interacting with Pholio Mocks' => 'Werken met Pholio-mocks',
  'Upload Complete...' => 'Upload voltooid...',
  'Things before they were cool.' => 'Dingen voordat ze cool waren.',
  'Current Revision' => 'Huidige versie',
  '[Pholio]' => '[Pholio]',
  '%s opened mock %s.' => '%s heeft mock %s geopend.',
  'Mock Description' => 'Mockbeschrijving',
  '%s edited task(s), added %s: %s; removed %s: %s.' => '%s heeft taken bewerkt; toegevoegd: %3$s; verwijderd: %5$s.',
  '%s updated an image\'s (%s) description.' => '%s heeft de beschrijving van een afbeelding (%s) bijgewerkt.',
  'Open Mock' => 'Mock openen',
  'Replaced image ("%s") belongs to the wrong mock ("%s", expected "%s").' => 'Vervangen afbeelding ("%s") hoort bij de verkeerde mock ("%s", verwacht "%s").',
  'Other mock activity not listed above occurs.' => 'Er vinden ook andere mockactiviteiten plaats die hierboven niet vermeld staan.',
  'MOCK DETAIL' => 'MOCKDETAIL',
  '%s opened this mock.' => '%s heeft deze mock geopend.',
  'Mock History' => 'Mockgeschiedenis',
  'Email Commands: Mocks' => 'E-mailopdrachten: mocks',
  'No image exists with PHID "%s".' => 'Er bestaat geen afbeelding met PHID "%s".',
  '%s renamed an image (%s) from %s to %s.' => '%s heeft een afbeelding (%s) hernoemd van %s naar %s.',
  '%s updated an image\'s (%s) sequence.' => '%s heeft de volgorde van een afbeelding (%s) bijgewerkt.',
  '%s updated image sequence of %s.' => '%s heeft de afbeeldingsvolgorde van %s bijgewerkt.',
  '%s added inline comment(s).' => '%s heeft ingebedde opmerkingen toegevoegd.',
  'Unknown (ID %d)' => 'Onbekend (ID %d)',
  'Edit Mock' => 'Mock bewerken',
  'By %s on %s' => 'Door %s op %s',
  'Mocks must have a name.' => 'Mocks moeten een naam hebben.',
  'Image "%s":' => 'Afbeelding "%s":',
  'Close Pholio Mock' => 'Pholio-mock sluiten',
  '%s updated images of %s.' => '%s heeft afbeeldingen van %s bijgewerkt.',
  '%s added %s task(s) for %s: %s.' => array(
    
    array(
      '%s heeft een taak toegevoegd voor %3$s: %4$s.',
      '%s heeft taken toegevoegd voor %3$s: %4$s.',
    ),
  ),
  'You must add at least one image to the mock.' => 'U moet ten minste één afbeelding aan de mock toevoegen.',
  'This page documents the commands you can use to interact with mocks in Pholio.' => 'Deze pagina documenteert de opdrachten die u kunt gebruiken om met mocks in Pholio te werken.',
  'Unable to load replacement image ("%s"): %s' => 'Kan vervangende afbeelding ("%s") niet laden: %s',
  '%s renamed this mock from %s to %s.' => '%s heeft deze mock hernoemd van %s naar %s.',
  'Comment cannot be empty.' => 'Opmerking mag niet leeg zijn.',
  'Test rules which run when a mock is created or updated.' => 'Regels testen die worden uitgevoerd wanneer een mock wordt aangemaakt of bijgewerkt.',
  'Inline Comment' => 'Ingebedde opmerking',
  'Mock names must not be longer than %s character(s).' => array(
    'Mocknamen mogen niet langer zijn dan %s teken.',
    'Mocknamen mogen niet langer zijn dan %s tekens.',
  ),
  '%s updated the image names of %s.' => '%s heeft de afbeeldingsnamen van %s bijgewerkt.',
  'Unable to load replaced image ("%s"): %s' => 'Kan vervangen afbeelding ("%s") niet laden: %s',
  'This mock will become open again.' => 'Deze mock wordt weer geopend.',
  'Create a Mock' => 'Een mock aanmaken',
  '%s edited image(s), added %d: %s; removed %d: %s.' => '%s heeft afbeeldingen bewerkt; toegevoegd: %3$s; verwijderd: %5$s.',
  'Mock images or descriptions change.' => 'Mockafbeeldingen of -beschrijvingen wijzigen.',
);
  }

}
