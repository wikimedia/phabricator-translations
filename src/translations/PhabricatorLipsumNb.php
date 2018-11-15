<?php

final class PhabricatorLipsumNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" does not match the name of any generators.' => 'Argumentet «%s» matcher ikke navnet til noen genaratorer.',
      'A lipsum generator is registered with key "%s". This key is reserved.' => 'En lipsum-generator er registrert med nøkkelen «%s». Denne nøkkelen er reservert.',
      'Failed to load a random user. You may need to generate more test users first.' => 'Kunne ikke laste en tilfeldig bruker. Du må kanskje generere flere testbrukere først.',
      'Generate objects without prompting for confirmation.' => 'Generer objekter uten å spørre om bekreftelse.',
      'LIPSUM' => 'LIPSUM',
      'Unable to load symbol %s: this class does not exist.' => 'Kunne ikke laste symbolet %s: denne klassen finnes ikke.',
      'Generator ("%s") was unable to generate an object.' => 'Generatoren («%s») kunne ikke generere et objekt.',
      'OOPS' => 'OOPS',
      'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => 'Denne kommandoen genererer syntetiske testdata, inkluder brukerkontoer. Den er tenkt brukt i utviklingsmiljøer så du enklere kan teste ut funksjonene. Det er ingen enkel måte å slette disse dataene eller fjerne effekten av denne kommandoen. Om du kjører den i et produksjonsmiljø vil den forurense dataene dine med store mengder meningsløst søppel som du ikke kan bli kvitt.',
      'Generate synthetic test objects.' => 'Generer syntetiske testobjekter.',
      'class' => 'klasse',
      'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => 'Generer syntetiske testobjekter for alltid. Bruk ^C for å stoppe når du er fornøyd.',
      'Generated "%s": %s' => 'Genererte «%s»: %s',
      'Choose which type or types of test data you want to generate, or select "%s".' => 'Velg hvilken type eller typer testdata du ønsker å generere, eller velg «%s».',
      'Generate objects as quickly as possible.' => 'Generer objekter så raskt som mulig.',
      'Argument "%s" is ambiguous, and matches multiple generators: %s.' => 'Argumentet «%s» er tvetydig, og matcher flere generatorer: %s.',
      'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'lipsum er et utviklings- og testeverktøy og kan kun kjøres på installasjoner i utviklermodus. Slå på «%s» i konfigurasjonen for å slå på lipsum.',
      'Selected generators: %s.' => 'Valgte generatorer: %s.',
      'GENERATORS' => 'GENERATORER',
      'Are you sure you want to generate piles of garbage?' => 'Er du sikker på at du ønsker å generere hauger med søppel?',
    );
  }

}
