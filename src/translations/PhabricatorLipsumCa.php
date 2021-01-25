<?php

final class PhabricatorLipsumCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" does not match the name of any generators.' => 'L\'argument «%s» no coincideix amb el nom de cap generador.',
      'A lipsum generator is registered with key "%s". This key is reserved.' => 'Un generador de lipsum està registrat amb la clau «%s».  Aquesta clau està reservada.',
      'Failed to load a random user. You may need to generate more test users first.' => 'No s\'ha pogut carregar un usuari aleatori. És possible que primer hàgiu de generar més usuaris de proves.',
      'Generate objects without prompting for confirmation.' => 'Genera objectes sense demanar confirmació.',
      'LIPSUM' => 'LIPSUM',
      'Unable to load symbol %s: this class does not exist.' => 'No s\'ha pogut carregar el símbol %s: aquesta classe no existeix.',
      'Generator ("%s") was unable to generate an object.' => 'El generador («%s») no ha pogut generar un objecte.',
      'OOPS' => 'OOPS',
      'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => 'Aquesta ordre genera dades de prova sintètiques, inclosos els comptes d\'usuari.  Està pensat per al seu ús en entorns de desenvolupament de manera que es puguin provar les funcions amb més facilitat.  No hi ha una manera fàcil d\'esborrar aquestes dades o desfer els efectes d\'aquesta ordre.  Si l\'executeu en un entorn de producció, contaminarà les vostres dades amb grans quantitats d\'escombraries sense sentit que no podreu desfer.',
      'Generate synthetic test objects.' => 'Genera objectes de prova sintètics.',
      'class' => 'classe',
      'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => 'Generant objectes de prova sintètics per sempre.  Utilitzeu ^C per aturar-ho quan estigueu satisfet.',
      'Generated "%s": %s' => 'Generat «%s»: «%s»',
      'Choose which type or types of test data you want to generate, or select "%s".' => 'Trieu quin tipus o tipus de dades de prova voleu generar, o seleccioneu "%s".',
      'Generate objects as quickly as possible.' => 'Genera objectes tan ràpid com sigui possible.',
      'Argument "%s" is ambiguous, and matches multiple generators: %s.' => 'L\'argument «%s» és ambigu, i coincideix amb múltiples generadors: %s.',
      'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'lipsum és una eina de desenvolupament i prova i només es pot executar en instal·lacions en mode desenvolupador.  Activeu «%s» a la vostra configuració per a habilitar lipsum.',
      'Selected generators: %s.' => 'Generadors seleccionats: %s.',
      'GENERATORS' => 'GENERADORS',
      'Are you sure you want to generate piles of garbage?' => 'Confirmes que vols generar munts d\'escombraries?',
    );
  }

}
