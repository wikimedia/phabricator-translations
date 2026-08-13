<?php

final class PhabricatorFactSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Analyze from the beginning, ignoring cursors.' => 'Analyzovať od začiatku a ignorovať kurzory.',
  'Iterator \'%s\' does not exist.' => 'Iterátor „%s“ neexistuje.',
  'View Data' => 'Zobraziť údaje',
  'Manually invoke fact analyzers.' => 'Manuálne spustiť analyzátory faktov.',
  'Argument "%s" (in position "%s") to function "%s" is invalid: %s' => 'Argument „%s“ (na pozícii „%s“) funkcie „%s“ je neplatný: %s',
  'Value for "fact-key" argument must be a string, got %s.' => 'Hodnota argumentu „fact-key“ musí byť reťazec, prijaté: %s.',
  'No fact engines support generating facts for this object.' => 'Žiadny nástroj na fakty nepodporuje generovanie faktov pre tento objekt.',
  'Y' => 'Y',
  'Value for "function" argument must be a list with a function name; got an empty list.' => 'Hodnota argumentu „function“ musí byť zoznam s názvom funkcie; prijatý bol prázdny zoznam.',
  'Chart function argument type "%s" is unknown. Valid types are: %s.' => 'Typ argumentu funkcie grafu „%s“ je neznámy. Platné typy sú: %s.',
  'Executing a fact query requires facts.' => 'Vykonanie dopytu na fakty vyžaduje fakty.',
  'Process only iterator __name__.' => 'Spracovať iba iterátor __name__.',
  'Chart function "%s" emitted multiple argument specifications with the same name ("%s"). Each argument specification must have a unique name.' => 'Funkcia grafu „%s“ vygenerovala viacero špecifikácií argumentov s rovnakým názvom („%s“). Každá špecifikácia argumentu musí mať jedinečný názov.',
  'Cursor %s does not exist or is already reset.' => 'Kurzor %s neexistuje alebo už bol vynulovaný.',
  'No cursors.' => 'Žiadne kurzory.',
  'Function "%s" expects at least %s argument(s), but only %s argument(s) were provided.' => array(
    
    array(
      
      array(
        'Funkcia „%s“ očakáva aspoň %s argumentov, bol však zadaný iba %s argument.',
        'Funkcia „%s“ očakáva aspoň %s argumentov, boli však zadané iba %s argumenty.',
        'Funkcia „%s“ očakáva aspoň %s argumentov, bolo však zadaných iba %s argumentov.',
      ),
    ),
  ),
  'Fact Extraction Report' => 'Správa o extrakcii faktov',
  'Dimension' => 'Rozmer',
  'Processing %s...' => 'Spracúva sa %s...',
  'No Stored Datapoints' => 'Žiadne uložené údajové body',
  'Fact key "%s" is not a known fact key.' => 'Kľúč faktu „%s“ nie je známy kľúč faktu.',
  'Function "%s" expects %s argument(s), but %s argument(s) were provided.' => array(
    
    array(
      
      array(
        'Funkcia „%s“ očakáva %s argument, bol však zadaný %s argument.',
        'Funkcia „%s“ očakáva %s argument, boli však zadané %s argumenty.',
        'Funkcia „%s“ očakáva %s argument, bolo však zadaných %s argumentov.',
      ),
      
      array(
        'Funkcia „%s“ očakáva %s argumenty, bol však zadaný %s argument.',
        'Funkcia „%s“ očakáva %s argumenty, boli však zadané %s argumenty.',
        'Funkcia „%s“ očakáva %s argumenty, bolo však zadaných %s argumentov.',
      ),
      
      array(
        'Funkcia „%s“ očakáva %s argumentov, bol však zadaný %s argument.',
        'Funkcia „%s“ očakáva %s argumentov, boli však zadané %s argumenty.',
        'Funkcia „%s“ očakáva %s argumentov, bolo však zadaných %s argumentov.',
      ),
    ),
  ),
  'cos(x)' => 'cos(x)',
  '%sms' => '%s ms',
  'Processing cursor \'%s\'.' => 'Spracúva sa kurzor „%s“.',
  'Show a list of fact engines.' => 'Zobraziť zoznam nástrojov na fakty.',
  'Chart and Analyze Data' => 'Vytváranie grafov a analýza údajov',
  'Attempting to build function "%s" from dictionary, but that function is unknown. Known functions are: %s.' => 'Pokus o zostavenie funkcie „%s“ zo slovníka, táto funkcia je však neznáma. Známe funkcie sú: %s.',
  'Expected "newArguments()" in class "%s" to return a list of argument specifications, got %s.' => 'Očakávalo sa, že „newArguments()“ v triede „%s“ vráti zoznam špecifikácií argumentov, prijaté: %s.',
  'Function "%s" is unknown. Valid functions are: %s' => 'Funkcia „%s“ je neznáma. Platné funkcie sú: %s',
  'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.' => 'Naozaj chcete zničiť všetky fakty? Bude ich potrebné znova zostaviť analýzou, čo môže chvíľu trvať.',
  'Value for "function" argument must be a function definition, formatted as a list, like: [fn, arg1, arg, ...]. Actual value is %s.' => 'Hodnota argumentu „function“ musí byť definícia funkcie zapísaná ako zoznam, napríklad: [fn, arg1, arg, ...]. Skutočná hodnota je %s.',
  '%s (Transactions)' => '%s (transakcie)',
  'Trying to construct a dataset of type "%s", but this type is unknown. Supported types are: %s.' => 'Pokus o vytvorenie množiny údajov typu „%s“, tento typ je však neznámy. Podporované typy sú: %s.',
  'constant(345)' => 'constant(345)',
  'Chart uses unknown engine key ("%s") and can not be rendered.' => 'Graf používa neznámy kľúč nástroja („%s“) a nie je možné ho vykresliť.',
  'Show a list of fact iterators and cursors.' => 'Zobraziť zoznam iterátorov a kurzorov faktov.',
  'Value for "function" argument must be a natural list beginning with a function name as a string. The first list item has the wrong type, %s.' => 'Hodnota argumentu „function“ musí byť prirodzený zoznam začínajúci názvom funkcie ako reťazcom. Prvá položka zoznamu má nesprávny typ, %s.',
  'Function "%s" expects %s or more argument(s), but only %s argument(s) were provided.' => array(
    
    array(
      
      array(
        'Funkcia „%s“ očakáva %s alebo viac argumentov, bol však zadaný iba %s',
        'Funkcia „%s“ očakáva %s alebo viac argumentov, boli však zadané iba %s',
        'Funkcia „%s“ očakáva %s alebo viac argumentov, bolo však zadaných iba %s',
      ),
    ),
  ),
  'Failed to load or generate dimension ID ("%s") for dimension key "%s".' => 'Nepodarilo sa načítať ani vygenerovať ID rozmeru („%s“) pre kľúč rozmeru „%s“.',
  'Destroy all facts.' => 'Zničiť všetky fakty.',
  'Chart function "%s" emitted a repeatable argument ("%s"), then another argument ("%s"). No arguments are permitted after a repeatable argument.' => 'Funkcia grafu „%s“ vygenerovala opakovateľný argument („%s“) a potom ďalší argument („%s“). Po opakovateľnom argumente nie sú povolené žiadne argumenty.',
  'Facts' => 'Fakty',
  'Resetting cursor %s...' => 'Kurzor %s sa nuluje...',
  'Function "%s" is requesting an argument ("%s") that it did not define.' => 'Funkcia „%s“ požaduje argument („%s“), ktorý nedefinovala.',
  'Value for "number" argument must be an integer or double, got %s.' => 'Hodnota argumentu „number“ musí byť celé číslo alebo číslo s dvojitou presnosťou, prijaté: %s.',
  'Not Stored' => 'Neuložené',
  'Reset cursor __cursor__.' => 'Vynulovať kurzor __cursor__.',
  'Chart function "%s" emitted an argument specification with no argument name. Argument specifications must have unique names.' => 'Funkcia grafu „%s“ vygenerovala špecifikáciu argumentu bez názvu argumentu. Špecifikácie argumentov musia mať jedinečné názvy.',
  'X' => 'X',
  'Skip analysis of aggregate facts.' => 'Preskočiť analýzu agregovaných faktov.',
  'No Engines' => 'Žiadne nástroje',
  'Chart configurations are not mutable. You can not update or overwrite an existing chart configuration.' => 'Konfigurácie grafov nie sú meniteľné. Existujúcu konfiguráciu grafu nie je možné aktualizovať ani prepísať.',
  'Value for "function" argument must be a natural list, not a dictionary. Actual value is "%s".' => 'Hodnota argumentu „function“ musí byť prirodzený zoznam, nie slovník. Skutočná hodnota je „%s“.',
  'Destroying table \'%s\'...' => 'Ničí sa tabuľka „%s“...',
  'Raw' => 'Nespracované',
  'Can not generate zero linear steps between two values!' => 'Medzi dvoma hodnotami nie je možné vygenerovať nula lineárnych krokov!',
  'Fact' => 'Fakt',
  'Unknown fact ("%s") for engine "%s".' => 'Neznámy fakt („%s“) pre nástroj „%s“.',
  'Fact "%s"' => 'Fakt „%s“',
  'Consistent Fact' => 'Konzistentný fakt',
  'Chart function "%s" emitted multiple repeatable argument specifications ("%s" and "%s"). Only one argument may be repeatable and it must be the last argument.' => 'Funkcia grafu „%s“ vygenerovala viacero špecifikácií opakovateľných argumentov („%s“ a „%s“). Opakovateľný môže byť iba jeden argument a musí to byť posledný argument.',
  'Unlabeled Function' => 'Funkcia bez označenia',
  'Failed to load chart with key "%s" after key collision. This should not be possible.' => 'Nepodarilo sa načítať graf s kľúčom „%s“ po kolízii kľúčov. To by nemalo byť možné.',
  'Not Generated' => 'Nevygenerované',
  'Chart function "%s" emitted an argument specification ("%s") with no type. Each argument specification must have a valid type.' => 'Funkcia grafu „%s“ vygenerovala špecifikáciu argumentu („%s“) bez typu. Každá špecifikácia argumentu musí mať platný typ.',
);
  }

}
