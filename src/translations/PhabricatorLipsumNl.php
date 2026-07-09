<?php

final class PhabricatorLipsumNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Argument "%s" does not match the name of any generators.' => 'Argument "%s" komt niet overeen met de naam van een van de generatoren.',
  'A lipsum generator is registered with key "%s". This key is reserved.' => 'Een lipsumgenerator is geregistreerd met sleutel "%s". Deze sleutel is gereserveerd.',
  'Failed to load a random user. You may need to generate more test users first.' => 'Het laden van een willekeurige gebruiker is mislukt. Mogelijk moet u eerst meer testgebruikers genereren.',
  'Generate objects without prompting for confirmation.' => 'Maak objecten zonder om bevestiging te vragen.',
  'LIPSUM' => 'LIPSUM',
  'Unable to load symbol %s: this class does not exist.' => 'Symbool %s kan niet worden geladen: deze klasse bestaat niet.',
  'Generator ("%s") was unable to generate an object.' => 'De generator ("%s") kon geen object maken.',
  'OOPS' => 'OEPS',
  'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => 'Deze opdracht maakt synthetische testgegevens aan, waaronder gebruikersaccounts. Het is bedoeld voor gebruik in ontwikkelomgevingen, zodat u functies gemakkelijker kunt testen. Er is geen eenvoudige manier om deze gegevens te verwijderen of de effecten van deze opdracht ongedaan te maken. Als u deze opdracht in een productieomgeving uitvoert, raken uw gegevens vervuild met grote hoeveelheden nutteloze rommel die u niet kunt verwijderen.',
  'Generate synthetic test objects.' => 'Synthetische testobjecten aanmaken.',
  'class' => 'klasse',
  'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => 'Maak continu synthetische testobjecten aan. Gebruik ^C om te stoppen wanneer u tevreden bent.',
  'Generated "%s": %s' => 'Aangemaakt: "%s": %s',
  'Choose which type or types of test data you want to generate, or select "%s".' => 'Kies welk(e) type(n) testgegevens u wilt maken, of selecteer "%s".',
  'Generate objects as quickly as possible.' => 'Maak objecten zo snel mogelijk.',
  'Argument "%s" is ambiguous, and matches multiple generators: %s.' => 'Argument "%s" is dubbelzinnig en komt overeen met meerdere generatoren: %s .',
  'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'lipsum is een ontwikkelings- en testhulpmiddel en kan alleen worden uitgevoerd op installaties in ontwikkelaarsmodus. Schakel "%s" in bij uw instellingen om lipsum te activeren.',
  'Selected generators: %s.' => 'Geselecteerde generatoren: %s .',
  'GENERATORS' => 'GENERATOREN',
  'Are you sure you want to generate piles of garbage?' => 'Weet u zeker dat u bergen afval wilt produceren?',
);
  }

}
