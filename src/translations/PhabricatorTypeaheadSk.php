<?php

final class PhabricatorTypeaheadSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Typeahead Results' => 'Výsledky napovedania',
  'Typeahead' => 'Napovedanie',
  'This datasource ("%s") can not evaluate the function "%s(...)".' => 'Tento zdroj údajov („%s“) nedokáže vyhodnotiť funkciu „%s(...)“.',
  'Function Help' => 'Pomocník k funkciám',
  'This control does not support typeahead functions.' => 'Tento ovládací prvok nepodporuje funkcie napovedania.',
  'In addition to typing user and project names to build queries, you can also type the names of special functions which give you more options and the ability to express more complex queries.

Functions have an internal name (like `%s`) and a human-readable name, like `Current Viewer`. In general, you can type either one to select the function. You can also click the {nav icon=search} button on any typeahead control to browse available functions and find this documentation.

This documentation uses the internal names to make it clear where tokens begin and end. Specifically, you will find queries written out like this in the documentation:

%s

When this query is actually shown in the control, it will look more like this:

%s' => 'Okrem písania mien používateľov a názvov projektov môžete pri zostavovaní dopytov písať aj názvy špeciálnych funkcií, ktoré vám dávajú viac možností a schopnosť vyjadriť zložitejšie dopyty.

Funkcie majú interný názov (napríklad `%s`) a názov čitateľný pre človeka, napríklad `Current Viewer`. Vo všeobecnosti môžete na výber funkcie napísať ktorýkoľvek z nich. V ktoromkoľvek ovládacom prvku s napovedaním môžete tiež kliknúť na tlačidlo {nav icon=search}, čím prehliadate dostupné funkcie a nájdete túto dokumentáciu.

Táto dokumentácia používa interné názvy, aby bolo jasné, kde sa tokeny začínajú a končia. Konkrétne nájdete v dokumentácii dopyty zapísané takto:

%s

Keď sa tento dopyt skutočne zobrazí v ovládacom prvku, bude vyzerať skôr takto:

%s',
  'Invalid Parameters' => 'Neplatné parametre',
  'Source Class' => 'Trieda zdroja',
  'Raw Query' => 'Neupravený dopyt',
  'Token Results (%s)' => 'Výsledky tokenov (%s)',
  'Configured datasource class "%s" must be a valid subclass of "%s".' => 'Nakonfigurovaná trieda zdroja údajov „%s“ musí byť platnou podtriedou triedy „%s“.',
  'Parameters (JSON)' => 'Parametre (JSON)',
  'Reference: Advanced Functions' => 'Referencia: pokročilé funkcie',
  'Image URI' => 'URI obrázka',
  'Select' => 'Vybrať',
  'Typeahead functions are an advanced feature which allow you to build more powerful queries. This document explains functions available for the selected control.

For general help with search, see the [[ %s | Search User Guide ]] in the documentation.

Note that different controls support //different// functions (depending on what the control is doing), so these specific functions may not work everywhere. You can always check the help for a control to review which functions are available for that control.' => 'Funkcie napovedania sú pokročilá vlastnosť, ktorá vám umožňuje zostavovať výkonnejšie dopyty. Tento dokument vysvetľuje funkcie dostupné pre vybraný ovládací prvok.

Všeobecného pomocníka k vyhľadávaniu nájdete v dokumentácii v [[ %s | používateľskej príručke vyhľadávania ]].

Majte na pamäti, že rôzne ovládacie prvky podporujú //rôzne// funkcie (podľa toho, čo daný prvok robí), takže tieto konkrétne funkcie nemusia fungovať všade. V pomocníkovi k ovládaciemu prvku si vždy môžete overiť, ktoré funkcie sú preň dostupné.',
  'Display Name' => 'Zobrazované meno',
  'This table briefly describes available functions for this control. For details on a particular function, see the corresponding section below.' => 'Táto tabuľka stručne popisuje funkcie dostupné pre tento ovládací prvok. Podrobnosti o konkrétnej funkcii nájdete v príslušnej časti nižšie.',
  'This source is not usable directly.' => 'Tento zdroj nie je použiteľný priamo.',
  'Unable to parse function and arguments for token "%s".' => 'Nepodarilo sa spracovať funkciu a argumenty tokenu „%s“.',
  'Token Query' => 'Dopyt na tokeny',
  'Invalid Function: %s' => 'Neplatná funkcia: %s',
  'More Results' => 'Ďalšie výsledky',
  'Browse Objects' => 'Prehliadať objekty',
  'Typeahead Function Help' => 'Pomocník k funkciám napovedania',
  'Sprite' => 'Sprite',
  'The HTTP parameter named "parameters" for this request is not a valid JSON parameter. JSON is required. Exception: %s' => 'Parameter HTTP s názvom „parameters“ nie je pre túto požiadavku platným parametrom JSON. Vyžaduje sa JSON. Výnimka: %s',
  'Function Quick Reference' => 'Rýchly prehľad funkcií',
  'Auto' => 'Automaticky',
  'You reach the edge of the abyss.' => 'Dostali ste sa na okraj priepasti.',
  'This datasource ("%s") requires to be logged-in to use the function "%s(...)".' => 'Tento zdroj údajov („%s“) vyžaduje na použitie funkcie „%s(...)“ prihlásenie.',
  'Priority Type' => 'Typ priority',
  'Using Typeahead Functions' => 'Používanie funkcií napovedania',
);
  }

}
