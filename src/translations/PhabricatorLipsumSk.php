<?php

final class PhabricatorLipsumSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Argument "%s" does not match the name of any generators.' => 'Argument „%s“ nezodpovedá názvu žiadneho generátora.',
  'A lipsum generator is registered with key "%s". This key is reserved.' => 'Generátor lipsum je zaregistrovaný pod kľúčom „%s“. Tento kľúč je rezervovaný.',
  'Failed to load a random user. You may need to generate more test users first.' => 'Nepodarilo sa načítať náhodného používateľa. Možno je potrebné najprv vygenerovať viac testovacích používateľov.',
  'Generate objects without prompting for confirmation.' => 'Generovať objekty bez žiadosti o potvrdenie.',
  'LIPSUM' => 'LIPSUM',
  'Unable to load symbol %s: this class does not exist.' => 'Nepodarilo sa načítať symbol %s: táto trieda neexistuje.',
  'Generator ("%s") was unable to generate an object.' => 'Generátoru („%s“) sa nepodarilo vygenerovať objekt.',
  'OOPS' => 'OJOJ',
  'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => 'Tento príkaz generuje syntetické testovacie údaje vrátane používateľských účtov. Je určený na použitie vo vývojových prostrediach, aby ste mohli jednoduchšie testovať funkcie. Neexistuje jednoduchý spôsob, ako tieto údaje odstrániť alebo vrátiť účinky tohto príkazu. Ak ho spustíte v produkčnom prostredí, zaplní vaše údaje veľkým množstvom nezmyselného odpadu, ktorého sa nezbavíte.',
  'Generate synthetic test objects.' => 'Generovať syntetické testovacie objekty.',
  'class' => 'trieda',
  'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => 'Syntetické testovacie objekty sa budú generovať donekonečna. Keď budete spokojní, zastavte generovanie pomocou ^C.',
  'Generated "%s": %s' => 'Vygenerované „%s“: %s',
  'Choose which type or types of test data you want to generate, or select "%s".' => 'Vyberte, ktorý typ alebo typy testovacích údajov chcete vygenerovať, alebo zvoľte „%s“.',
  'Generate objects as quickly as possible.' => 'Generovať objekty čo najrýchlejšie.',
  'Argument "%s" is ambiguous, and matches multiple generators: %s.' => 'Argument „%s“ je nejednoznačný a zodpovedá viacerým generátorom: %s.',
  'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'lipsum je vývojový a testovací nástroj a možno ho spustiť iba na inštaláciách vo vývojárskom režime. Ak chcete lipsum povoliť, zapnite vo svojej konfigurácii „%s“.',
  'Selected generators: %s.' => 'Vybrané generátory: %s.',
  'GENERATORS' => 'GENERÁTORY',
  'Are you sure you want to generate piles of garbage?' => 'Naozaj chcete vygenerovať kopy odpadu?',
);
  }

}
