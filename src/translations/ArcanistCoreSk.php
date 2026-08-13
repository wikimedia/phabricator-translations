<?php

final class ArcanistCoreSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'Prerušené pre zlyhanie nahrávania súboru. Na preskočenie nahrávania binárnych súborov môžete použiť %s.',
  'Ref "%s" does not exist in remote "%s".' => 'Ref „%s“ neexistuje vo vzdialenom úložisku „%s“.',
  'Flexible Heredoc and Nowdoc is not available before PHP 7.3.' => 'Flexibilný heredoc a nowdoc nie je dostupný pred PHP 7.3.',
  'This process has PID %d. Acquiring lock...' => 'Tento proces má PID %d. Získava sa zámok...',
  'This working copy is associated with the %s repository.' => 'Táto pracovná kópia je priradená k repozitáru %s.',
  'Lint Disabler' => 'Vypínač lintera',
  'Call to "posix_getpgid(...)" failed!' => 'Volanie „posix_getpgid(...)“ zlyhalo!',
  'The "squash" strategy collapses multiple local commits into a single commit when publishing. It produces a linear published history (but discards local checkpoint commits). This is the default strategy.' => 'Stratégia „squash“ pri publikovaní zbalí viacero lokálnych commitov do jedného commitu. Vytvára lineárnu publikovanú históriu (ale zahodí lokálne kontrolné commity). Toto je predvolená stratégia.',
  'Call Conduit API methods.' => 'Volanie metód API Conduit.',
  'Symbol "%s" does not identify a valid revision.' => 'Symbol „%s“ neurčuje platnú revíziu.',
  'Do not call %s or %s directly on a %s. Instead, call %s or %s.' => 'Nevolajte %s ani %s priamo na %s. Namiesto toho volajte %s alebo %s.',
  'A linter for Composer related files.' => 'Linter pre súbory súvisiace s Composerom.',
  '"%s" (%s)' => '" %s " ( %s )',
  'Saved "%s" as "%s".' => 'Uložené " %s " ako " %s ".',
  'Night has fallen. The moon overhead is waxing, and provides just enough light that you can make out your surroundings. It is quite cold.' => 'Spadla noc. Mesiac nad vami sa rozvíja a poskytuje tak veľa svetla, že môžete rozpoznať okolie. Je dosť zima.',
  '(This message was raised at line %s, but the file only has %s line(s).)' => array(
    
    array(
      '(Táto správa bola vyvolaná na riadku %s, ale súbor má len %s riadok.)',
      '(Táto správa bola vyvolaná na riadku %s, ale súbor má len %s riadky.)',
      '(Táto správa bola vyvolaná na riadku %s, ale súbor má len %s riadkov.)',
    ),
  ),
  'Not parsing!' => 'Neanalyzuje sa!',
  'Portuguese (Portugal)' => 'portugalčina (Portugalsko)',
  'Create an alias from __command__ to __target__ (optionally, with __options__).

Aliases allow you to create shorthands for commands and sets of flags you
commonly use, like defining "arc draft" as a shorthand for "arc diff --draft".

**Creating Aliases**

You can define "arc draft" as a shorthand for "arc diff --draft" like this:

  $ arc alias draft diff -- --draft

Now, when you run "arc draft", the command will function like
"arc diff --draft".

<bg:yellow> NOTE: </bg> Make sure you use "--" before specifying any flags you
want to pass to the command! Otherwise, the flags will be interpreted as flags
to "arc alias".

**Listing Aliases**

Without any arguments, "arc alias" will list aliases.

**Removing Aliases**

To remove an alias, run:

  $ arc alias <alias-name>

You will be prompted to remove the alias.

**Shell Commands**

If you begin an alias with "!", the remainder of the alias will be invoked as
a shell command. For example, if you want to implement "arc ls", you can do so
like this:

  $ arc alias ls \'!ls\'

When run, "arc ls" will now behave like "ls".

**Multiple Toolsets**

This workflow supports any toolset, even though the examples in this help text
use "arc". If you are working with another toolset, use the binary for that
toolset define aliases for it:

  $ phage alias ...

Aliases are bound to the toolset which was used to define them. If you define
an "arc draft" alias, that does not also define a "phage draft" alias.

**Builtins**

You can not overwrite the behavior of builtin workflows, including "alias"
itself, and if you install a new workflow it will take precedence over any
existing aliases with the same name.' => 'Vytvorí alias z __command__ na __target__ (voliteľne s __options__).

Aliasy umožňujú vytvárať skratky pre príkazy a sady prepínačov, ktoré často
používate, napríklad definovať „arc draft“ ako skratku pre „arc diff --draft“.

**Vytváranie aliasov**

„arc draft“ ako skratku pre „arc diff --draft“ môžete definovať takto:

  $ arc alias draft diff -- --draft

Keď teraz spustíte „arc draft“, príkaz bude fungovať ako
„arc diff --draft“.

<bg:yellow> POZNÁMKA: </bg> Nezabudnite použiť „--“ pred zadaním akýchkoľvek
prepínačov, ktoré chcete odovzdať príkazu! Inak sa prepínače budú interpretovať
ako prepínače príkazu „arc alias“.

**Vypísanie aliasov**

Bez akýchkoľvek argumentov „arc alias“ vypíše zoznam aliasov.

**Odstraňovanie aliasov**

Na odstránenie aliasu spustite:

  $ arc alias <alias-name>

Zobrazí sa výzva na odstránenie aliasu.

**Príkazy shellu**

Ak alias začnete znakom „!“, zvyšok aliasu sa spustí ako príkaz shellu.
Napríklad ak chcete implementovať „arc ls“, môžete to urobiť takto:

  $ arc alias ls \'!ls\'

Po spustení sa „arc ls“ bude správať ako „ls“.

**Viacero sád nástrojov**

Tento pracovný postup podporuje ľubovoľnú sadu nástrojov, aj keď príklady
v tomto texte pomocníka používajú „arc“. Ak pracujete s inou sadou nástrojov,
použite binárny súbor tejto sady nástrojov na definovanie aliasov pre ňu:

  $ phage alias ...

Aliasy sú viazané na sadu nástrojov, ktorá bola použitá na ich definovanie.
Ak definujete alias „arc draft“, nedefinuje to zároveň aj alias „phage draft“.

**Vstavané príkazy**

Správanie vstavaných pracovných postupov vrátane samotného „alias“ nemôžete
prepísať, a ak nainštalujete nový pracovný postup, bude mať prednosť pred
akýmikoľvek existujúcimi aliasmi s rovnakým názvom.',
  'Arrays should use the short array syntax.' => 'Polia by mali používať skrátenú syntax poľa.',
  'File Symbol "%s"' => 'Symbol súboru „%s“',
  'Try running your arc command again.' => 'Skúste znova spustiť svoj príkaz arc.',
  'Local commit "%s" does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => 'Lokálny commit „%s“ sa nedá čisto zlúčiť do „%s“. Vykonajte rebase alebo zlúčenie lokálnych zmien tak, aby sa dali čisto zlúčiť.',
  'CC: %s' => 'CC: %s',
  'Failed to write file data.' => 'Nepodarilo sa zapísať údaje súboru.',
  'Regenerate shell completion rules, without installing any configuration.' => 'Znovu vygenerovať pravidlá dopĺňania v shelli bez inštalácie akejkoľvek konfigurácie.',
  'Execute a Phage subprocess.' => 'Spustiť podproces Phage.',
  'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => 'Ak súbor nie je textový, môžete ho označiť ako \'binary\'. Označiť tento súbor ako \'binary\' a pokračovať?',
  'Rule \'%s\' is invalid, it must have a type and name like \'%s\'.' => 'Pravidlo \'%s\' je neplatné, musí mať typ a názov ako \'%s\'.',
  'Task Symbol "%s"' => 'Symbol úlohy „%s“',
  'Parameter ("%s") passed to "%s" when constructing a unit test message must be a string with a maximum length of %s bytes, but is %s bytes in length.' => array(
    
    array(
      
      array(
        
        array(
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy jednotkového testu musí byť reťazec s maximálnou dĺžkou %s bajt, ale má dĺžku %s bajt.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy jednotkového testu musí byť reťazec s maximálnou dĺžkou %s bajt, ale má dĺžku %s bajty.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy jednotkového testu musí byť reťazec s maximálnou dĺžkou %s bajt, ale má dĺžku %s bajtov.',
        ),
        
        array(
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy jednotkového testu musí byť reťazec s maximálnou dĺžkou %s bajty, ale má dĺžku %s bajt.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy jednotkového testu musí byť reťazec s maximálnou dĺžkou %s bajty, ale má dĺžku %s bajty.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy jednotkového testu musí byť reťazec s maximálnou dĺžkou %s bajty, ale má dĺžku %s bajtov.',
        ),
        
        array(
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy jednotkového testu musí byť reťazec s maximálnou dĺžkou %s bajtov, ale má dĺžku %s bajt.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy jednotkového testu musí byť reťazec s maximálnou dĺžkou %s bajtov, ale má dĺžku %s bajty.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy jednotkového testu musí byť reťazec s maximálnou dĺžkou %s bajtov, ale má dĺžku %s bajtov.',
        ),
      ),
    ),
  ),
  'In multi-line parameter declarations, each parameter should be on a separate line.' => 'Vo viacriadkových deklaráciách parametrov by mal byť každý parameter na samostatnom riadku.',
  'There was an error verifying the SSL Certificate Authority while negotiating the SSL connection. This usually indicates you are using a self-signed certificate.

As of OSX Yosemite, certificates must be added to the OSX keychain. You can do this with `security add-trusted-cert` from the command line, or by visiting the site in Safari and choosing to trust the certificate permanently.

For more information, see instructions in "%s".' => 'Pri vyjednávaní SSL spojenia sa vyskytla chyba pri overovaní certifikačnej autority SSL. Zvyčajne to znamená, že používate certifikát podpísaný sebou samým.

Od systému OSX Yosemite sa certifikáty musia pridať do zväzku kľúčov OSX. Môžete to urobiť príkazom `security add-trusted-cert` z príkazového riadka alebo tak, že navštívite lokalitu v prehliadači Safari a zvolíte trvalé dôverovanie certifikátu.

Ďalšie informácie nájdete v pokynoch v „%s“.',
  'None of the configured interpreters can be located.' => 'Nepodarilo sa nájsť žiadny z nakonfigurovaných interpretov.',
  'This workflow (\'%s\') requires a Repository API, override %s to return true.' => 'Tento pracovný postup (\'%s\') vyžaduje Repository API, prepíšte %s tak, aby vracalo true.',
  'This patch may have failed because it attempts to change the case of a filename (for instance, from \'%s\' to \'%s\'). Mercurial cannot apply patches like this on case-insensitive filesystems. You must apply this patch manually.' => 'Táto záplata mohla zlyhať preto, že sa pokúša zmeniť veľkosť písmen v názve súboru (napríklad z \'%s\' na \'%s\'). Mercurial nedokáže použiť takéto záplaty na súborových systémoch nerozlišujúcich veľkosť písmen. Túto záplatu musíte použiť ručne.',
  'Executable files should either be binary or contain a shebang.' => 'Spustiteľné súbory by mali byť buď binárne, alebo obsahovať shebang.',
  'Numeric literal separators are not available before PHP 7.4.' => 'Oddeľovače číselných literálov nie sú dostupné pred PHP 7.4.',
  'Landing onto target "%s", the default target under Git.' => 'Začleňuje sa do cieľa „%s“, čo je predvolený cieľ v systéme Git.',
  'Unknown argument \'%s\'. Try \'%s\'.' => 'Neznámy argument \'%s\'. Skúste \'%s\'.',
  'Path \'%s\' is not readable.' => 'Cesta \'%s\' sa nedá čítať.',
  'No match found. Try `%s %s` to search for a linter.' => 'Nenašla sa žiadna zhoda. Na vyhľadanie lintera skúste `%s %s`.',
  'English (Pirate)' => 'angličtina (pirátska)',
  'Pick' => 'Vybrať',
  'If the file is not a text file, mark it as binary with:

  $ %s
' => 'Ak súbor nie je textový, označte ho ako binárny pomocou:

  $ %s',
  'Browse URI "%s"' => 'Prehliadať URI „%s“',
  'The working copy includes changes to \'%s\' paths. These changes will not be included in the diff because SVN can not commit \'svn:externals\' changes alongside normal changes.' => 'Pracovná kópia obsahuje zmeny ciest \'%s\'. Tieto zmeny nebudú zahrnuté v diffe, pretože SVN nedokáže commitnúť zmeny \'svn:externals\' spolu s bežnými zmenami.',
  'Base commit ruleset to invoke when determining the start of a commit range. See "Arcanist User Guide: Commit Ranges" for details.' => 'Sada pravidiel základného commitu, ktorá sa má použiť pri určovaní začiatku rozsahu commitov. Podrobnosti nájdete v „Arcanist User Guide: Commit Ranges“.',
  '**bookmarks**' => '**záložky**',
  'Nowhere to load blob \'%s\' from!' => 'Nie je odkiaľ načítať blob \'%s\'!',
  'Runtime Error' => 'Chyba za behu',
  'Argument "%s" does not take a parameter.' => 'Argument „%s“ neprijíma parameter.',
  'LARGE WORKING SET' => 'VEĽKÁ PRACOVNÁ SADA',
  'Output upload information in JSON format.' => 'Vypísať informácie o nahrávaní vo formáte JSON.',
  'LANDING' => 'ZAČLEŇOVANIE',
  'Inline HTML' => 'Vložené HTML',
  'Remote Repository' => 'Vzdialený repozitár',
  'Conduit API login required.' => 'Vyžaduje sa prihlásenie do API Conduit.',
  'Rule \'%s\' matched a zero-length token and causes no state transition.' => 'Pravidlo \'%s\' sa zhodovalo s tokenom nulovej dĺžky a nespôsobuje žiadny prechod stavu.',
  'Empty certificate in credentials.' => 'Prázdny certifikát v povereniach.',
  'Confirms that revisions you did not author should land.' => 'Potvrdzuje, že sa majú začleniť aj revízie, ktorých nie ste autorom.',
  'No tests to run.' => 'Nie sú žiadne testy na spustenie.',
  'Expected JSON response from Slack.' => 'Očakávala sa odpoveď JSON od Slacku.',
  '%s assertion(s) passed.' => array(
    'Prešlo %s tvrdenie.',
    'Prešli %s tvrdenia.',
    'Prešlo %s tvrdení.',
  ),
  'NOTHING TO LAND' => 'NIET ČO ZAČLENIŤ',
  'Expected to find a byte unit for meminfo key "%s" in meminfo source "%s", found no unit.' => 'Očakávala sa bajtová jednotka pre kľúč meminfo „%s“ v zdroji meminfo „%s“, nenašla sa žiadna jednotka.',
  'Do not copy changes to the staging area.' => 'Nekopírovať zmeny do prípravnej oblasti.',
  'There was an error verifying the SSL connection. This usually indicates that the remote host has an SSL certificate for a different domain name than you are connecting with. Make sure the certificate you have installed is signed for the correct domain.' => 'Pri overovaní SSL spojenia sa vyskytla chyba. Zvyčajne to znamená, že vzdialený hostiteľ má certifikát SSL pre iný názov domény, než s akým sa pripájate. Uistite sa, že nainštalovaný certifikát je podpísaný pre správnu doménu.',
  'Expected a list!' => 'Očakával sa zoznam!',
  'Empty key is invalid!' => 'Prázdny kľúč je neplatný!',
  'Library conflict! The library \'%s\' has already been loaded (from \'%s\') but is now being loaded again from a new location (\'%s\'). You can not load multiple copies of the same library into a program.' => 'Konflikt knižníc! Knižnica \'%s\' už bola načítaná (z \'%s\'), ale teraz sa načítava znova z nového umiestnenia (\'%s\'). Do jedného programu nemôžete načítať viacero kópií tej istej knižnice.',
  'Unknown symbol type "%s".' => 'Neznámy typ symbolu „%s“.',
  '%s does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => '%s momentálne nepodporuje vlastné úrovne závažnosti, pretože pravidlá sa nedajú identifikovať zo správ vo výstupe.',
  'Multiple configuration sources define an alias for "%s %s". The last definition in the most specific source ("%s") will be used.' => 'Alias pre „%s %s“ definuje viacero konfiguračných zdrojov. Použije sa posledná definícia z najkonkrétnejšieho zdroja („%s“).',
  'Branch "%s" does not rebase cleanly from "%s" onto "%s", skipping.' => 'Vetva „%s“ sa nedá čisto rebasovať z „%s“ na „%s“, preskakuje sa.',
  'Unknown Symbol' => 'Neznámy symbol',
  'Against which commit?' => 'Voči ktorému commitu?',
  'commit-message' => 'commit-message',
  'It is morning. The sun is high in the sky to the east and you hear birds all around you. A gentle breeze rustles the leaves overhead.' => 'Je ráno. Slnko stojí vysoko na východnej oblohe a všade okolo počuť vtáky. Jemný vánok šuští v lístí nad hlavou.',
  'Local branch "%s" tracks an upstream, but following it leads to a local cycle; ignoring branch upstream.' => 'Lokálna vetva „%s“ sleduje upstream, ale jeho sledovanie vedie k lokálnemu cyklu; upstream vetvy sa ignoruje.',
  'Project Config File' => 'Konfiguračný súbor projektu',
  'Expected to match pattern "%s" against line "%s" in raw commit blob: %s' => 'Očakávala sa zhoda vzoru „%s“ s riadkom „%s“ v surovom blobe commitu: %s',
  'You stand in the middle of a small clearing.' => 'Stojíte uprostred malej čistinky.',
  'Unable to find a browser command to run. Set "browser" in your configuration to specify a command to use.' => 'Nepodarilo sa nájsť príkaz prehliadača na spustenie. Nastavte „browser“ vo svojej konfigurácii, aby ste určili príkaz, ktorý sa má použiť.',
  'Try/catch block catches "Exception", but does not catch "Throwable". In PHP7 and newer, some runtime exceptions will escape this block.' => 'Blok try/catch zachytáva „Exception“, ale nezachytáva „Throwable“. V PHP7 a novšom niektoré výnimky za behu tomuto bloku uniknú.',
  'HLint is a linter for Haskell code.' => 'HLint je linter pre kód v jazyku Haskell.',
  'No Parent Scope' => 'Žiadny nadradený rozsah',
  'Use "*" after a response to save it in user configuration.' => 'Použite „*“ za odpoveďou, aby sa uložila do používateľskej konfigurácie.',
  'Multiple repositories (%s) matched the query. You can use the "%s" configuration to select the one you want.' => 'Dopytu vyhovelo viacero repozitárov (%s). Na výber toho, ktorý chcete, môžete použiť konfiguráciu „%s“.',
  'The author of this revision (%s) is:' => 'Autorom tejto revízie (%s) je:',
  'Update the local working copy before applying the patch.' => 'Pred použitím záplaty aktualizovať lokálnu pracovnú kópiu.',
  'Using `%s` as the `%s` value instead of a variable was not introduced until PHP 5.5, but this codebase targets an earlier version of PHP. Move the statement inside the loop.' => 'Použitie `%s` ako hodnoty `%s` namiesto premennej bolo zavedené až v PHP 5.5, ale táto kódová základňa cieli na skoršiu verziu PHP. Presuňte príkaz dovnútra cyklu.',
  'SHELL' => 'SHELL',
  'Unlocking...' => 'Odomyká sa...',
  '`%s` Statement Must Be The First Statement' => 'Príkaz `%s` musí byť prvým príkazom',
  'Argument "%s" is unrecognized. Use "%s" to indicate the end of flags.' => 'Argument „%s“ nie je rozpoznaný. Na označenie konca prepínačov použite „%s“.',
  'Assertion failed, expected \'%s\' (at %s:%d): %s' => 'Tvrdenie zlyhalo, očakávalo sa \'%s\' (na %s:%d): %s',
  'Test case \'%s\' was expected to raise an exception, but it did not throw anything.' => 'Očakávalo sa, že testovací prípad \'%s\' vyvolá výnimku, ale nevyhodil nič.',
  'Land %s revision(s) in the wrong state?' => array(
    'Začleniť %s revíziu v nesprávnom stave?',
    'Začleniť %s revízie v nesprávnom stave?',
    'Začleniť %s revízií v nesprávnom stave?',
  ),
  'it is the first commit reachable from the working copy state which is not outgoing.' => 'je to prvý commit dosiahnuteľný zo stavu pracovnej kópie, ktorý nie je odchádzajúci.',
  'This `%s` or `%s` has a nonempty block which does not end with `%s`, `%s`, `%s`, `%s` or `%s`. Did you forget to add one of those? If you intend to fall through, add a `%s` comment to silence this warning.' => 'Tento `%s` alebo `%s` má neprázdny blok, ktorý nekončí na `%s`, `%s`, `%s`, `%s` ani `%s`. Nezabudli ste niektorý z nich pridať? Ak chcete zámerne prepadnúť do ďalšej vetvy, pridajte komentár `%s`, aby ste toto upozornenie potlačili.',
  'Provide a map of regular expressions to severity levels. All matching codes have their severity adjusted.' => 'Zadajte mapu regulárnych výrazov na úrovne závažnosti. Všetkým zodpovedajúcim kódom sa upraví závažnosť.',
  'Specify the state to merge into. By default, this is the same as the "onto" ref.' => 'Určte stav, do ktorého sa má zlúčiť. Predvolene je rovnaký ako ref „onto“.',
  'Rule \'%s\' in state \'%s\' in %s defines an invalid regular expression (\'%s\'): %s' => 'Pravidlo \'%s\' v stave \'%s\' v %s definuje neplatný regulárny výraz (\'%s\'): %s',
  'In most cases, arc can be upgraded automatically.' => 'Vo väčšine prípadov sa dá arc aktualizovať automaticky.',
  'Row has no cell "%s".\\n' => 'Riadok nemá bunku „%s“.\\n',
  'Continue without loading library?' => 'Pokračovať bez načítania knižnice?',
  'Throwing Exception in `%s` Method' => 'Vyhodenie výnimky v metóde `%s`',
  'More than one revision exists in the working copy:

%s
Use \'%s\' to select a revision.' => 'V pracovnej kópii existuje viac ako jedna revízia:

%s
Na výber revízie použite \'%s\'.',
  'Unknown VCS!' => 'Neznámy VCS!',
  'Request signature verification failed: signature is not correct.' => 'Overenie podpisu požiadavky zlyhalo: podpis nie je správny.',
  'You can not change the logfile after a write has occurred!' => 'Súbor denníka nemôžete zmeniť po tom, ako sa doň už zapisovalo!',
  'English (Canada)' => 'angličtina (Kanada)',
  '    **extract-symbols-with-php-parser.php** [__options__] __path.php__
        Identify the symbols (classes, interfaces, traits, enums and functions)
        in PHP source files. Symbols are divided into "have" symbols
        (symbols the file declares) and "need" symbols (symbols the file
        depends on). For example, class declarations are "have" symbols,
        while object instantiations with "new X()" are "need" symbols.

        Dependencies on builtins and symbols marked \'@phutil-external-symbol\'
        in docblocks are omitted without __--all__.

        Symbols are reported in JSON on stdout.

        This script is used internally to build maps of library
        symbols.
' => '    **extract-symbols-with-php-parser.php** [__options__] __path.php__
        Identifikuje symboly (triedy, rozhrania, traity, enumerácie a funkcie)
        v zdrojových súboroch PHP. Symboly sa delia na symboly „have“
        (symboly, ktoré súbor deklaruje) a symboly „need“ (symboly, od
        ktorých súbor závisí). Napríklad deklarácie tried sú symboly „have“,
        kým inštanciácie objektov pomocou „new X()“ sú symboly „need“.

        Závislosti od vstavaných symbolov a symbolov označených
        \'@phutil-external-symbol\' v dokumentačných blokoch sa bez __--all__
        vynechávajú.

        Symboly sa vypisujú vo formáte JSON na stdout.

        Tento skript sa interne používa na zostavovanie máp symbolov
        knižnice.',
  'This codebase targets PHP %s on Windows, but `%s()` is not available there.' => 'Táto kódová základňa cieli na PHP %s v systéme Windows, ale `%s()` tam nie je dostupné.',
  'Author: %s' => 'Autor: %s',
  'Confirms that revisions with open parent revisions should land.' => 'Potvrdzuje, že sa majú začleniť aj revízie s otvorenými nadradenými revíziami.',
  'Custom %s file was specified, but it was not found!' => 'Bol zadaný vlastný súbor %s, ale nenašiel sa!',
  'ERROR' => 'CHYBA',
  'Do not upload binaries (like images).' => 'Nenahrávať binárne súbory (napríklad obrázky).',
  'Default value for parameters with `%s` type hint can only be `%s`.' => 'Predvolenou hodnotou parametrov s typovou nápovedou `%s` môže byť len `%s`.',
  'Use of Variable Variable' => 'Použitie premennej premennej',
  'Only one output format allowed' => 'Povolený je len jeden výstupný formát',
  'Arrange tasks based on priority, created, or modified, default is priority.' => 'Zoradiť úlohy podľa priority, vytvorenia alebo úpravy; predvolená je priorita.',
  'Failed to create a temporary directory: the disk is full.' => 'Nepodarilo sa vytvoriť dočasný adresár: disk je plný.',
  'Value provided to "replaceQueryParam()" for key "%s" is NULL. Use "removeQueryParam()" to remove a query parameter.' => 'Hodnota odovzdaná do „replaceQueryParam()“ pre kľúč „%s“ je NULL. Na odstránenie parametra dopytu použite „removeQueryParam()“.',
  'Signal handler with key "%s" is already installed.' => 'Obsluha signálu s kľúčom „%s“ je už nainštalovaná.',
  'Name constructors `%s` explicitly. This method is a constructor because it has the same name as the class it is defined in.' => 'Konštruktory pomenúvajte výslovne `%s`. Táto metóda je konštruktorom, pretože má rovnaký názov ako trieda, v ktorej je definovaná.',
  'Install lessc using `%s`.' => 'Nainštalujte lessc pomocou `%s`.',
  'Too many distinct parent refs!' => 'Príliš veľa rozdielnych nadradených refov!',
  'Unable to find \'%s\' file to configure test engines. Create an \'%s\' file in the root directory of the working copy.' => 'Nepodarilo sa nájsť súbor \'%s\' na konfiguráciu testovacích nástrojov. Vytvorte súbor \'%s\' v koreňovom adresári pracovnej kópie.',
  'Fetch Repository: %s' => 'Načítať repozitár: %s',
  'Call to "posix_setsid()" failed!' => 'Volanie „posix_setsid()“ zlyhalo!',
  'Use the message from a specific revision. If you do not specify a revision, arc will guess which revision is in the working copy.' => 'Použiť správu z konkrétnej revízie. Ak revíziu neurčíte, arc odhadne, ktorá revízia je v pracovnej kópii.',
  'Do you want to create a new commit with these %s change(s)?' => array(
    'Chcete vytvoriť nový commit s touto zmenou?',
    'Chcete vytvoriť nový commit s týmito zmenami?',
  ),
  'Unexpected "%s" section in property addition.' => 'Neočakávaná sekcia „%s“ pri pridávaní vlastnosti.',
  'Failed to load library at location "%s". This library is specified by "%s". Check that the setting is correct and the library is located in the right place.' => 'Nepodarilo sa načítať knižnicu na umiestnení „%s“. Túto knižnicu určuje „%s“. Skontrolujte, či je nastavenie správne a či sa knižnica nachádza na správnom mieste.',
  'Diff Parse Exception: %s' => 'Výnimka pri analýze diffu: %s',
  'Commit this revision anyway?' => 'Napriek tomu commitnúť túto revíziu?',
  'After creating the task, open it in a web browser.' => 'Po vytvorení úlohy ju otvoriť vo webovom prehliadači.',
  'Asymetric property visibility is not available before PHP 8.4.' => 'Asymetrická viditeľnosť vlastností nie je dostupná pred PHP 8.4.',
  'Amend working copy using unrelated revision %s?' => 'Doplniť pracovnú kópiu pomocou nesúvisiacej revízie %s?',
  'DETACHED HEAD' => 'ODPOJENÝ HEAD',
  'Lint does not currently support %s in SVN.' => 'Lint momentálne nepodporuje %s v SVN.',
  'Anonymous classes are not available before PHP 7.0.' => 'Anonymné triedy nie sú dostupné pred PHP 7.0.',
  'Failed to open file \'%s\'.' => 'Nepodarilo sa otvoriť súbor \'%s\'.',
  'Load a library.' => 'Načítať knižnicu.',
  'There are several revisions which match the working copy:

%s
Use \'%s\' to choose one, or \'%s\' to create a new revision.' => 'Pracovnej kópii zodpovedá viacero revízií:

%s
Pomocou \'%s\' vyberte jednu z nich alebo pomocou \'%s\' vytvorte novú revíziu.',
  'Failed to decompose multicopy changeset in order to generate diff.' => 'Nepodarilo sa rozložiť viacnásobne kopírovanú sadu zmien na vygenerovanie diffu.',
  'Saved uncommitted changes from working copy.' => 'Necommitnuté zmeny z pracovnej kópie boli uložené.',
  'Unsound' => 'Nespoľahlivé',
  'Patch %s \'%s\' to \'%s\', but source path does not exist in the working copy. Continue anyway?' => 'Záplata %s \'%s\' na \'%s\', ale zdrojová cesta v pracovnej kópii neexistuje. Pokračovať napriek tomu?',
  'The URI of a server to connect to by default, if %s is run in a project without a configured URI or run outside of a project.' => 'URI servera, ku ktorému sa má predvolene pripojiť, ak sa %s spustí v projekte bez nakonfigurovaného URI alebo mimo projektu.',
  '**lock.php** __file__ [__options__]
    Acquire a lockfile and hold it until told to unlock it.
' => '**lock.php** __file__ [__options__]
    Získa súbor zámku a drží ho, kým nedostane pokyn na odomknutie.',
  'Loading library from "%s"...' => 'Načítava sa knižnica z „%s“...',
  'Remote branch has multiple heads.' => 'Vzdialená vetva má viacero hláv.',
  'Duplicate case in switch statement. PHP will ignore all but the first case.' => 'Duplicitný case v príkaze switch. PHP bude ignorovať všetky okrem prvého case.',
  'Unable to identify the revision in the working copy. Use \'%s\' to select a revision.' => 'Nepodarilo sa identifikovať revíziu v pracovnej kópii. Na výber revízie použite \'%s\'.',
  'IP address "%s" is not properly formatted: an address must contain exactly 8 segments, or omit a subsequence of segments with "::".' => 'Adresa IP „%s“ nie je správne naformátovaná: adresa musí obsahovať presne 8 segmentov alebo vynechať podpostupnosť segmentov pomocou „::“.',
  'Binary integer literals are not available before PHP 5.4.' => 'Binárne celočíselné literály nie sú dostupné pred PHP 5.4.',
  'Failed to match remote pattern against line "%s".' => 'Nepodarilo sa priradiť vzor vzdialeného úložiska k riadku „%s“.',
  '%s is not a valid JSON object.' => '%s nie je platný objekt JSON.',
  'Checking out bookmark "%s".' => 'Prepína sa na záložku „%s“.',
  'Braces for an empty block statement shouldn\'t contain only whitespace.' => 'Zložené zátvorky prázdneho blokového príkazu by nemali obsahovať iba biele znaky.',
  'Changes Planned' => 'Naplánované zmeny',
  'Preparing merge into the empty state.' => 'Pripravuje sa zlúčenie do prázdneho stavu.',
  'Landing the active branch, "%s".' => 'Začleňuje sa aktívna vetva „%s“.',
  'Closure Linter' => 'Linter Closure',
  '(... %s more revisions ...)' => array(
    '(... ešte %s revízia ...)',
    '(... ešte %s revízie ...)',
    '(... ešte %s revízií ...)',
  ),
  'Server URI "%s" must include the "http" or "https" protocol. It should be in the form "%s".' => 'URI servera „%s“ musí obsahovať protokol „http“ alebo „https“. Malo by byť v tvare „%s“.',
  'Definition of symbol "%s" (of type "%s") in file "%s" in library "%s" duplicates prior definition in file "%s" in library "%s".' => 'Definícia symbolu „%s“ (typu „%s“) v súbore „%s“ v knižnici „%s“ duplikuje predchádzajúcu definíciu v súbore „%s“ v knižnici „%s“.',
  'Invalid Executable' => 'Neplatný spustiteľný súbor',
  'Set %s to file mode 600.' => 'Nastavte %s na režim súboru 600.',
  'Use "!" after a response to save it in working copy configuration.' => 'Použite „!“ za odpoveďou, aby sa uložila do konfigurácie pracovnej kópie.',
  'Will merge into remote "%s" by default, because this is the remote the change is landing onto.' => 'Predvolene sa zlúči do vzdialeného úložiska „%s“, pretože je to vzdialené úložisko, do ktorého sa zmena začleňuje.',
  'Option \'%s\' requires a parameter.' => 'Voľba \'%s\' vyžaduje parameter.',
  'Two objects (of classes "%s" and "%s", descendants of ancestor class "%s") returned the same key from "%s" ("%s"), but each object in this class map must be identified by a unique key.' => 'Dva objekty (tried „%s“ a „%s“, potomkov predkovej triedy „%s“) vrátili z „%s“ rovnaký kľúč („%s“), ale každý objekt v tejto mape tried musí byť identifikovaný jedinečným kľúčom.',
  'Asymetric property visibility for static properties is not available before PHP 8.5.' => 'Asymetrická viditeľnosť statických vlastností nie je dostupná pred PHP 8.5.',
  'PHP versions older then %s have known security vulnerabilities when considering PHAR files; Refusing to inspect file %s. See %s' => 'Verzie PHP staršie ako %s majú známe bezpečnostné zraniteľnosti pri práci so súbormi PHAR; kontrola súboru %s sa odmieta. Pozri %s',
  'Unable to determine the remote URI for this repository.' => 'Nepodarilo sa určiť vzdialené URI tohto repozitára.',
  'Set key "%s" = %s in %s config.' => 'Nastavený kľúč „%s“ = %s v konfigurácii %s.',
  'This workflow has not yet been updated to Toolsets and can not retrieve a modern WorkingCopy object. Use "getWorkingCopyIdentity()" to retrieve a previous-generation object.' => 'Tento pracovný postup ešte nebol aktualizovaný na sady nástrojov a nedokáže získať moderný objekt WorkingCopy. Na získanie objektu predchádzajúcej generácie použite „getWorkingCopyIdentity()“.',
  'This codebase targets PHP %s on Windows, but `%s()` is not available there until PHP %s.' => 'Táto kódová základňa cieli na PHP %s v systéme Windows, ale `%s()` tam nie je dostupné až do PHP %s.',
  'Deleted key "%s" from %s config (was %s).' => 'Kľúč „%s“ bol odstránený z konfigurácie %s (bol %s).',
  'Invalid Modifiers' => 'Neplatné modifikátory',
  'The pipe operator is not available before PHP 8.5.' => 'Operátor rúry nie je dostupný pred PHP 8.5.',
  'List of command aliases.' => 'Zoznam aliasov príkazov.',
  'Working Copy State' => 'Stav pracovnej kópie',
  'Space found before semicolon.' => 'Pred bodkočiarkou sa našla medzera.',
  'Use `%s` for checking if the string contains something.' => 'Na kontrolu, či reťazec niečo obsahuje, použite `%s`.',
  'Perforce mode does not support the "merge" land strategy. Use the "squash" land strategy when landing to a Perforce remote (you can use "--squash" to select this strategy).' => 'Režim Perforce nepodporuje stratégiu začleňovania „merge“. Pri začleňovaní do vzdialeného úložiska Perforce použite stratégiu „squash“ (na výber tejto stratégie môžete použiť „--squash“).',
  'Method Spacing' => 'Rozostupy metód',
  'Use "--types" to select between alternatives.' => 'Na výber medzi alternatívami použite „--types“.',
  'Revision "%s" does not exist, or you do not have permission to see it.' => 'Revízia „%s“ neexistuje alebo nemáte oprávnenie ju vidieť.',
  'Build Symbol "%s"' => 'Symbol zostavenia „%s“',
  'Landing the active bookmark, "%s".' => 'Začleňuje sa aktívna záložka „%s“.',
  'Release lock?' => 'Uvoľniť zámok?',
  'Copied Here' => 'Skopírované sem',
  'Array item with key \'%s\' must be an instance of %s, %s given.' => 'Položka poľa s kľúčom \'%s\' musí byť inštanciou %s, bolo zadané %s.',
  'Aborted generation of gigantic diff.' => 'Generovanie obrovského diffu bolo prerušené.',
  'This line will be added:' => 'Tento riadok sa pridá:',
  'Multiple "abstract" modifiers are not allowed.' => 'Viacero modifikátorov „abstract“ nie je povolených.',
  'Expected value to be a list, got "%s".' => 'Očakávalo sa, že hodnota bude zoznam, získalo sa „%s“.',
  'Array style to prefer.' => 'Uprednostňovaný štýl poľa.',
  'No lexer rule matched input at char %d.' => 'Žiadne pravidlo lexera sa nezhodovalo so vstupom na znaku %d.',
  'Unhandled parser rule \'%s\'!' => 'Neošetrené pravidlo analyzátora \'%s\'!',
  'HTTP Status Code: %d' => 'Stavový kód HTTP: %d',
  'You are amending the working copy using information from a revision you are not the author of.' => 'Pracovnú kópiu dopĺňate pomocou informácií z revízie, ktorej nie ste autorom.',
  'Apply patches suggested by lint to the working copy without prompting.' => 'Použiť záplaty navrhnuté lintom na pracovnú kópiu bez pýtania sa.',
  'After merging, push changes onto a specified branch.' => 'Po zlúčení odoslať zmeny do zadanej vetvy.',
  'Commit message for \'%s\' has explicit \'Differential Revision\'.' => 'Správa commitu pre \'%s\' obsahuje výslovné \'Differential Revision\'.',
  'The token "%s" is not formatted correctly. API tokens should be 32 characters long. Make sure you visited the correct URI and copy/pasted the token correctly.' => 'Token „%s“ nie je správne naformátovaný. Tokeny API by mali mať 32 znakov. Uistite sa, že ste navštívili správne URI a token ste správne skopírovali.',
  '`%s` methods cannot contain a body. This construct will cause a fatal error.' => 'Metódy `%s` nemôžu obsahovať telo. Táto konštrukcia spôsobí fatálnu chybu.',
  'Install shell completion so you can use the "tab" key to autocomplete
commands and flags in your shell for toolsets and workflows.

The **bash** shell is supported.

**Installing Completion**

To install shell completion, run the command:

  $ arc shell-complete

This will install shell completion into your current shell. After installing,
you may need to start a new shell (or open a new terminal window) to pick up
the updated configuration.

Once installed, completion should work across all toolsets.

**Using Completion**

After completion is installed, use the "tab" key to automatically complete
workflows and flags. For example, if you type:

  $ arc diff --draf<tab>

...your shell should automatically expand the flag to:

  $ arc diff --draft

**Updating Completion**

To update shell completion, run the same command:

  $ arc shell-complete

You can update shell completion without reinstalling it by running:

  $ arc shell-complete --generate

You may need to update shell completion if:

  - you install new toolsets; or
  - you move this software on disk; or
  - you upgrade this software and the new version fixes shell completion bugs.' => 'Nainštaluje dopĺňanie v shelli, aby ste mohli pomocou klávesu „tab“ automaticky
dopĺňať príkazy a prepínače vo svojom shelli pre sady nástrojov a pracovné postupy.

Podporovaný je shell **bash**.

**Inštalácia dopĺňania**

Dopĺňanie v shelli nainštalujete spustením príkazu:

  $ arc shell-complete

Tým sa dopĺňanie nainštaluje do vášho aktuálneho shellu. Po inštalácii možno
budete musieť spustiť nový shell (alebo otvoriť nové okno terminálu), aby sa
načítala aktualizovaná konfigurácia.

Po nainštalovaní by dopĺňanie malo fungovať vo všetkých sadách nástrojov.

**Používanie dopĺňania**

Po nainštalovaní dopĺňania používajte kláves „tab“ na automatické dopĺňanie
pracovných postupov a prepínačov. Napríklad ak napíšete:

  $ arc diff --draf<tab>

...váš shell by mal prepínač automaticky rozvinúť na:

  $ arc diff --draft

**Aktualizácia dopĺňania**

Dopĺňanie v shelli aktualizujete spustením toho istého príkazu:

  $ arc shell-complete

Dopĺňanie v shelli môžete aktualizovať aj bez preinštalovania spustením:

  $ arc shell-complete --generate

Dopĺňanie v shelli možno budete musieť aktualizovať, ak:

  - nainštalujete nové sady nástrojov; alebo
  - presuniete tento softvér na disku; alebo
  - aktualizujete tento softvér a nová verzia opravuje chyby dopĺňania v shelli.',
  'The version control system ("%s") in the current working copy does not support bookmarks.' => 'Systém správy verzií („%s“) v aktuálnej pracovnej kópii nepodporuje záložky.',
  'Aborted workflow to fix UTF-8.' => 'Pracovný postup na opravu UTF-8 bol prerušený.',
  'Extension ("%s") defines invalid configuration with key "%s". This key is reserved.' => 'Rozšírenie („%s“) definuje neplatnú konfiguráciu s kľúčom „%s“. Tento kľúč je rezervovaný.',
  'Missing required parameters: %s' => 'Chýbajú povinné parametre: %s',
  'Interrupted by SIGINT (^C).' => 'Prerušené signálom SIGINT (^C).',
  'This codebase targets PHP %s, but `%s()` was removed in PHP %s.' => 'Táto kódová základňa cieli na PHP %s, ale `%s()` bolo odstránené v PHP %s.',
  'Command-Line Input' => 'Vstup z príkazového riadka',
  'NOT REVISION AUTHOR' => 'NIE JE AUTOROM REVÍZIE',
  'Normally, you should update these %s revision(s), submit them for review, and wait for reviewers to accept them before you continue. To resubmit a revision for review, either: update the revision with revised changes; or use "Request Review" from the web interface.' => array(
    'Za normálnych okolností by ste mali túto revíziu aktualizovať, odoslať ju na posúdenie a pred pokračovaním počkať, kým ju recenzenti schvália. Ak chcete revíziu znova odoslať na posúdenie, buď revíziu aktualizujte s upravenými zmenami, alebo použite „Požiadať o posúdenie“ vo webovom rozhraní.',
    'Za normálnych okolností by ste mali tieto %s revízie aktualizovať, odoslať ich na posúdenie a pred pokračovaním počkať, kým ich recenzenti schvália. Ak chcete revíziu znova odoslať na posúdenie, buď revíziu aktualizujte s upravenými zmenami, alebo použite „Požiadať o posúdenie“ vo webovom rozhraní.',
    'Za normálnych okolností by ste mali týchto %s revízií aktualizovať, odoslať ich na posúdenie a pred pokračovaním počkať, kým ich recenzenti schvália. Ak chcete revíziu znova odoslať na posúdenie, buď revíziu aktualizujte s upravenými zmenami, alebo použite „Požiadať o posúdenie“ vo webovom rozhraní.',
  ),
  'Encountered two "%s" lines ("%s", "%s") while parsing raw commit blob, expected at most one: %s' => 'Pri analýze surového blobu commitu sa našli dva riadky „%s“ („%s“, „%s“), očakával sa najviac jeden: %s',
  'Two subclasses of "%s" ("%s" and "%s") define locales with the same locale code ("%s"). Each locale must have a unique locale code.' => 'Dve podtriedy triedy „%s“ („%s“ a „%s“) definujú lokalizácie s rovnakým kódom lokalizácie („%s“). Každá lokalizácia musí mať jedinečný kód lokalizácie.',
  'Specify only one paste to retrieve.' => 'Zadajte len jeden vložený text na získanie.',
  'Argument "%s" conflicts with itself!' => 'Argument „%s“ je v konflikte sám so sebou!',
  'Normally, a new branch (git) or bookmark (hg) is created and then the patch is applied and committed in the new branch/bookmark. This flag cherry-picks the resultant commit onto the original branch and deletes the temporary branch.' => 'Za normálnych okolností sa vytvorí nová vetva (git) alebo záložka (hg) a potom sa v novej vetve/záložke použije a commitne záplata. Tento prepínač prenesie výsledný commit metódou cherry-pick na pôvodnú vetvu a dočasnú vetvu odstráni.',
  'Saving local state (at "%s" on branch "%s").' => 'Ukladá sa lokálny stav (na „%s“ vo vetve „%s“).',
  'Stash these changes and continue?' => 'Odložiť tieto zmeny do skrýše a pokračovať?',
  'Push to a remote other than the default.' => 'Odoslať do iného vzdialeného úložiska ako predvoleného.',
  'Shift/reduce conflict: from state \'%s\', when a \'%s\' is encountered, shifting conflicts with reducing \'%s\'.' => 'Konflikt shift/reduce: zo stavu \'%s\', keď sa narazí na \'%s\', posun je v konflikte s redukciou \'%s\'.',
  'Expected hunk header \'%s\'.' => 'Očakávala sa hlavička bloku \'%s\'.',
  'Unexpected node of type \'%s\'!' => 'Neočakávaný uzol typu \'%s\'!',
  '    %s %s
' => '    %s %s',
  'Install flake8 using `%s`.' => 'Nainštalujte flake8 pomocou `%s`.',
  '%s: configuration captured a \'%s\' named capturing group, \'%s\'. Script output:
%s' => '%s: konfigurácia zachytila pomenovanú zachytávaciu skupinu \'%s\', \'%s\'. Výstup skriptu:
%s',
  'Argument short aliases must be exactly one character long. \'%s\' is invalid.' => 'Krátke aliasy argumentov musia mať presne jeden znak. \'%s\' je neplatný.',
  'Block for up to __n__ seconds waiting for the lock.' => 'Blokovať až __n__ sekúnd počas čakania na zámok.',
  'Updating working copy...' => 'Aktualizuje sa pracovná kópia...',
  'The "HOME" environment variable is not defined, so this workflow can not identify where to install shell completion.' => 'Premenná prostredia „HOME“ nie je definovaná, takže tento pracovný postup nedokáže určiť, kam nainštalovať dopĺňanie v shelli.',
  'Language constructs do not require parentheses.' => 'Jazykové konštrukcie nevyžadujú zátvorky.',
  'Failed to read from %s' => 'Nepodarilo sa čítať z %s',
  'Future already has a key ("%s") assigned.' => 'Future už má priradený kľúč („%s“).',
  'Failed to set configured locale %s, using en_US locale' => 'Nepodarilo sa nastaviť nakonfigurovanú lokalizáciu %s, používa sa lokalizácia en_US',
  'URI \'%s\' must be fully qualified with \'%s\' scheme.' => 'URI \'%s\' musí byť plne kvalifikované so schémou \'%s\'.',
  'command' => 'príkaz',
  'Detects common misspellings of English words.' => 'Zisťuje časté preklepy v anglických slovách.',
  'Inspect internal object properties.' => 'Preskúmať interné vlastnosti objektu.',
  'Unknown raw diff source.' => 'Neznámy zdroj surového diffu.',
  'No linters to run.' => 'Nie sú žiadne lintery na spustenie.',
  'Modified' => 'Upravené',
  'TODO Comment' => 'Komentár TODO',
  'Failed to parse %s output!' => 'Nepodarilo sa analyzovať výstup %s!',
  'Some reviewers are currently away:' => 'Niektorí recenzenti sú momentálne neprítomní:',
  'Do you want to edit the message?' => 'Chcete upraviť správu?',
  'Use of Product Name Literal' => 'Použitie literálu s názvom produktu',
  'Merging with "%s" strategy, the default strategy.' => 'Zlučuje sa stratégiou „%s“, ktorá je predvolenou stratégiou.',
  'Override configured lint engine for this project.' => 'Prepísať nakonfigurovaný lintovací nástroj pre tento projekt.',
  '%s can not load additional nodes at runtime. Tried to load: %s' => '%s nedokáže načítať ďalšie uzly za behu. Pokus o načítanie: %s',
  'Updating commit message...' => 'Aktualizuje sa správa commitu...',
  'Failed to open filesystem path "%s" for writing.' => 'Nepodarilo sa otvoriť cestu v systéme súborov „%s“ na zápis.',
  'Config: Reading user configuration file "%s"...' => 'Konfigurácia: Číta sa používateľský konfiguračný súbor „%s“...',
  'This client version does not support staging this repository.' => 'Táto verzia klienta nepodporuje prípravu tohto repozitára.',
  'Run an external script, then parse its output with a regular expression. This is a generic binding that can be used to run custom lint scripts.' => 'Spustí externý skript a potom jeho výstup analyzuje regulárnym výrazom. Ide o všeobecnú väzbu, ktorá sa dá použiť na spúšťanie vlastných lintovacích skriptov.',
  'Unable to detect any supported shell, so autocompletion rules can not be installed. Use "--shell" to select a shell.' => 'Nepodarilo sa zistiť žiadny podporovaný shell, takže pravidlá automatického dopĺňania sa nedajú nainštalovať. Na výber shellu použite „--shell“.',
  'You are updating a revision ("%s") with the "--draft" flag, but this revision has already been published for review. You can not turn a revision back into a draft once it has been published.' => 'Aktualizujete revíziu („%s“) s prepínačom „--draft“, ale táto revízia už bola publikovaná na posúdenie. Po publikovaní už revíziu nemôžete zmeniť späť na koncept.',
  'Future graph is stalled: some futures are held, but no futures are waiting or working. The graph can never resolve.' => 'Graf future je zaseknutý: niektoré future sú pozdržané, ale žiadne nečakajú ani nepracujú. Graf sa nikdy nedokáže vyriešiť.',
  'Workflow ("%s") generates two prompts with the same key ("%s"). Each prompt a workflow generates must have a unique key.' => 'Pracovný postup („%s“) generuje dve výzvy s rovnakým kľúčom („%s“). Každá výzva, ktorú pracovný postup generuje, musí mať jedinečný kľúč.',
  'Constants should be uppercase.' => 'Konštanty by mali byť veľkými písmenami.',
  'Named arguments are not available before PHP 8.0.' => 'Pomenované argumenty nie sú dostupné pred PHP 8.0.',
  'Create a draft revision so you can look over your changes before involving anyone else. Other users will not be notified about the revision until you later use "Request Review" to publish it. You can still share the draft by giving someone the link.' => 'Vytvorte koncept revízie, aby ste si svoje zmeny mohli prezrieť skôr, než do toho zapojíte kohokoľvek iného. Ostatní používatelia nebudú o revízii upovedomení, kým ju neskôr nepublikujete pomocou „Požiadať o posúdenie“. Koncept však stále môžete zdieľať tak, že niekomu dáte odkaz.',
  'Convention: spell keyword `%s` as `%s`.' => 'Konvencia: kľúčové slovo `%s` píšte ako `%s`.',
  '%3dms' => '%3d ms',
  'Octal notation prefixes are not available before PHP 8.1.' => 'Predpony osmičkovej notácie nie sú dostupné pred PHP 8.1.',
  'Expected JSON response from GitHub.' => 'Očakávala sa odpoveď JSON od GitHubu.',
  'Print symbol map to stdout instead of writing it to the map file.' => 'Vypísať mapu symbolov na stdout namiesto jej zapísania do súboru mapy.',
  'No type ID for node type name \'%s\' in \'%s\' AAST.' => 'Žiadne ID typu pre názov typu uzla \'%s\' v AAST \'%s\'.',
  'Update the revision comments, then save and exit.' => 'Aktualizujte komentáre revízie, potom uložte a ukončite.',
  'Function Call Should Be Type Cast' => 'Volanie funkcie by malo byť pretypovanie',
  '`%s` Unreliable' => '`%s` je nespoľahlivé',
  'Workflow has no name!' => 'Pracovný postup nemá názov!',
  'The "arc anoid" workflow requires "python3" to be available in your $PATH.' => 'Pracovný postup „arc anoid“ vyžaduje, aby bol vo vašej premennej $PATH dostupný „python3“.',
  'Confused by empty line' => 'Zmätok spôsobil prázdny riadok',
  'Follow naming conventions: parameters should be named using `%s`' => 'Dodržiavajte konvencie pomenúvania: parametre by sa mali pomenúvať pomocou `%s`',
  'Argument "%s" conflicts with argument "%s"%s' => 'Argument „%s“ je v konflikte s argumentom „%s“%s',
  'FETCHED' => 'NAČÍTANÉ',
  '%s may only write strings!' => '%s môže zapisovať iba reťazce!',
  'Show the command which would be issued, but do not actually commit anything.' => 'Zobraziť príkaz, ktorý by sa vykonal, ale v skutočnosti nič necommitnúť.',
  'Found %d matching paths for linter \'%s\'.' => array(
    'Pre linter \'%2$s\' sa našla %d zodpovedajúca cesta.',
    'Pre linter \'%2$s\' sa našli %d zodpovedajúce cesty.',
    'Pre linter \'%2$s\' sa našlo %d zodpovedajúcich ciest.',
  ),
  'Could not parse URI \'%s\'.' => 'Nepodarilo sa analyzovať URI \'%s\'.',
  'LOAD STATE' => 'NAČÍTANIE STAVU',
  'PHP Source file to analyze.' => 'Zdrojový súbor PHP na analýzu.',
  '(Run `%s` for more details.)' => '(Ďalšie podrobnosti získate spustením `%s`.)',
  'Use "arc alias" to configure aliases, not "arc set-config".' => 'Na konfiguráciu aliasov použite „arc alias“, nie „arc set-config“.',
  'Desired merge strategy is ambiguous, choose an explicit strategy.' => 'Požadovaná stratégia zlučovania je nejednoznačná, zvoľte výslovnú stratégiu.',
  'Expected \'%s\' to start git binary patch.' => 'Očakávalo sa \'%s\' na začiatku binárnej záplaty gitu.',
  'Diff URI:' => 'URI diffu:',
  'MERGE' => 'ZLÚČENIE',
  'Revision %s' => 'Revízia %s',
  'Unknown signature method \'%s\'!' => 'Neznáma metóda podpisu \'%s\'!',
  'Working Copy: Path "%s" is not in any working copy.' => 'Pracovná kópia: Cesta „%s“ nie je v žiadnej pracovnej kópii.',
  'This codebase targets PHP %s, but anonymous functions were not introduced until PHP 5.3.' => 'Táto kódová základňa cieli na PHP %s, ale anonymné funkcie boli zavedené až v PHP 5.3.',
  'rebuild the library map file' => 'znovu zostaviť súbor mapy knižnice',
  'Bookmark "%s"' => 'Záložka „%s“',
  'Use of Removed Function "each()"' => 'Použitie odstránenej funkcie „each()“',
  'Land %s revision(s) anyway, despite ongoing and failed builds?' => array(
    'Začleniť %s revíziu napriek prebiehajúcim a zlyhaným zostaveniam?',
    'Začleniť %s revízie napriek prebiehajúcim a zlyhaným zostaveniam?',
    'Začleniť %s revízií napriek prebiehajúcim a zlyhaným zostaveniam?',
  ),
  'Uploaded binary data for "%s".' => 'Binárne údaje pre „%s“ boli nahraté.',
  'The symbol map for library \'%s\' (at \'%s\') claims this %s is defined in \'%s\', but loading that source file did not cause the %s to become defined.' => 'Mapa symbolov pre knižnicu \'%s\' (na \'%s\') tvrdí, že %s je definované v \'%s\', ale načítanie tohto zdrojového súboru nespôsobilo, že by sa %s stalo definovaným.',
  'Future has already started; futures can not start more than once.' => 'Future už bolo spustené; future sa nedá spustiť viackrát.',
  'Unable to upload file: the server refused to accept file "%s". This usually means it is too large.' => 'Nepodarilo sa nahrať súbor: server odmietol prijať súbor „%s“. Zvyčajne to znamená, že je príliš veľký.',
  '%s requires the %s algorithm but %s disables %s by default. Consider setting %s or export %s.' => '%s vyžaduje algoritmus %s, ale %s predvolene zakazuje %s. Zvážte nastavenie %s alebo export %s.',
  'Configuration option "%s" is not valid. Configuration options passed with command line flags must be in the form "name=value".' => 'Konfiguračná možnosť „%s“ nie je platná. Konfiguračné možnosti odovzdané prepínačmi príkazového riadka musia byť v tvare „name=value“.',
  'Language for the paste.' => 'Jazyk vloženého textu.',
  'Profile script execution and write results to a file.' => 'Profilovať vykonávanie skriptu a zapísať výsledky do súboru.',
  'The name of a default unit test engine to use, if no unit test engine is specified by the current project.' => 'Názov predvoleného nástroja na jednotkové testy, ktorý sa má použiť, ak aktuálny projekt neurčuje žiadny nástroj na jednotkové testy.',
  'You can not use "--current" when installing support.' => 'Pri inštalácii podpory nemôžete použiť „--current“.',
  'You do not see "%s" anywhere.' => 'Nikde nevidíte „%s“.',
  'Marker "%s"' => 'Značka „%s“',
  'NOTE: commit %s could not be completely parsed:' => 'NOTE: commit %s sa nepodarilo úplne analyzovať:',
  'Updating library: %s' => 'Aktualizuje sa knižnica: %s',
  'Importing `%s` with `%s` is unnecessary because the aliased name is identical to the imported symbol name.' => 'Import `%s` pomocou `%s` je zbytočný, pretože názov aliasu je zhodný s názvom importovaného symbolu.',
  'Combining union and intersection types is not supported before PHP 8.2.' => 'Kombinovanie zjednotených a prienikových typov nie je podporované pred PHP 8.2.',
  '%s OPEN PARENT REVISION(S)' => array(
    '%s OTVORENÁ NADRADENÁ REVÍZIA',
    '%s OTVORENÉ NADRADENÉ REVÍZIE',
    '%s OTVORENÝCH NADRADENÝCH REVÍZIÍ',
  ),
  'Since more than one revision in Differential matches this working copy, you will be asked which revision you want to update if you run \'%s\'.' => 'Keďže tejto pracovnej kópii zodpovedá viac ako jedna revízia v Differentiale, po spustení \'%s\' budete vyzvaní, ktorú revíziu chcete aktualizovať.',
  'Argument "--force" for "arc browse" is deprecated. Use "--type %s" instead.' => 'Argument „--force“ pre „arc browse“ je zastaraný. Použite namiesto neho „--type %s“.',
  'CHECKOUT' => 'PREPNUTIE',
  'There should be no whitespace before the object operator.' => 'Pred objektovým operátorom by nemali byť žiadne biele znaky.',
  'Failed to update library: %s' => 'Nepodarilo sa aktualizovať knižnicu: %s',
  'Land %s revision(s) with changes planned?' => array(
    'Začleniť %s revíziu s naplánovanými zmenami?',
    'Začleniť %s revízie s naplánovanými zmenami?',
    'Začleniť %s revízií s naplánovanými zmenami?',
  ),
  'When linting git repositories, amend HEAD with autofix patches suggested by lint without prompting.' => 'Pri lintovaní repozitárov git doplniť HEAD o záplaty automatickej opravy navrhnuté lintom bez pýtania sa.',
  'Base commit is not in local repository; trying to fetch.' => 'Základný commit nie je v lokálnom repozitári; pokúša sa o načítanie.',
  'File Error' => 'Chyba súboru',
  'Specify a runtime configuration value.' => 'Zadajte konfiguračnú hodnotu za behu.',
  'Avoid the use of inner functions.' => 'Vyhýbajte sa používaniu vnorených funkcií.',
  'None of the configured binaries can be located.' => 'Nepodarilo sa nájsť žiadny z nakonfigurovaných binárnych súborov.',
  'Generators are not available before PHP 5.5.' => 'Generátory nie sú dostupné pred PHP 5.5.',
  'Start rule \'%s\' does not appear in the rules for the grammar. Use %s to choose a different start rule, or add a rule named \'%s\'.' => 'Počiatočné pravidlo \'%s\' sa nenachádza medzi pravidlami gramatiky. Pomocou %s zvoľte iné počiatočné pravidlo alebo pridajte pravidlo s názvom \'%s\'.',
  'IP address "%s" is not properly formatted. Expected an IPv4 address like "%s".' => 'Adresa IP „%s“ nie je správne naformátovaná. Očakávala sa adresa IPv4 ako „%s“.',
  'Merge into the empty state instead of an existing state. This mode is primarily useful when creating a new repository, and selected automatically if the "onto" ref does not exist and the "into" state is not specified.' => 'Zlúčiť do prázdneho stavu namiesto existujúceho stavu. Tento režim je užitočný najmä pri vytváraní nového repozitára a vyberá sa automaticky, ak ref „onto“ neexistuje a stav „into“ nie je zadaný.',
  'Install PHPCS with `%s`.' => 'Nainštalujte PHPCS pomocou `%s`.',
  'Value passed to "phutil_string_cast()" is an array; arrays can not be sensibly cast to strings.' => 'Hodnota odovzdaná do „phutil_string_cast()“ je pole; polia sa nedajú rozumne pretypovať na reťazce.',
  'Install Golint using `%s`.' => 'Nainštalujte Golint pomocou `%s`.',
  'Command %s failed: %s' => 'Príkaz %s zlyhal: %s',
  'Holding changes locally, they have not been submitted.' => 'Zmeny sa držia lokálne, neboli odoslané.',
  'These %s path(s) will NOT be committed. Commit this revision anyway?' => array(
    'Táto cesta sa NEcommitne. Napriek tomu commitnúť túto revíziu?',
    'Tieto cesty sa NEcommitnú. Napriek tomu commitnúť túto revíziu?',
  ),
  'Needs Revision' => 'Potrebuje úpravu',
  '<bytes = %s>' => '<bajtov = %s>',
  'Branch "%s"' => 'Vetva „%s“',
  'Alias resolved to "%s", but this is not a valid workflow or alias name. This alias or workflow might have previously existed and been removed.' => 'Alias sa vyhodnotil na „%s“, ale to nie je platný názov pracovného postupu ani aliasu. Tento alias alebo pracovný postup mohol predtým existovať a bol odstránený.',
  'Expected exception (in class(es): %s), got exception of class "%s".' => 'Očakávala sa výnimka (v triede/triedach: %s), získala sa výnimka triedy „%s“.',
  'Argument "%s" requires a parameter.' => 'Argument „%s“ vyžaduje parameter.',
  'Got unrecognized upstream format ("%s") from Git, expected "refs/heads/..." or "refs/remotes/...".' => 'Z Gitu sa získal nerozpoznaný formát upstreamu („%s“), očakávalo sa „refs/heads/...“ alebo „refs/remotes/...“.',
  'LIBRARY ERROR' => 'CHYBA KNIŽNICE',
  'Enter a brief description of the changes included in this update.' => 'Zadajte stručný opis zmien zahrnutých v tejto aktualizácii.',
  'Failed to explode line "%s".' => 'Nepodarilo sa rozdeliť riadok „%s“.',
  'Unknown library version \'%s\'!' => 'Neznáma verzia knižnice \'%s\'!',
  'Set a default URI with `arc set-config phabricator.uri <uri>`.' => 'Predvolené URI nastavte pomocou `arc set-config phabricator.uri <uri>`.',
  'Saving response "%s" to prompt "%s".' => 'Ukladá sa odpoveď „%s“ na výzvu „%s“.',
  'Expected method "%s->%s()" to return a unique key, got "%s" from %s objects at indexes: %s.' => array(
    
    array(
      
      array(
        
        array(
          'Očakávalo sa, že metóda „%s->%s()“ vráti jedinečný kľúč, získalo sa „%s“ z %s objektu na indexoch: %s.',
          'Očakávalo sa, že metóda „%s->%s()“ vráti jedinečný kľúč, získalo sa „%s“ z %s objektov na indexoch: %s.',
        ),
      ),
    ),
  ),
  'Unrecognized property status \'%s\'.' => 'Nerozpoznaný stav vlastnosti \'%s\'.',
  'REPOSITORY' => 'REPOZITÁR',
  'No pushable remote "%s" exists. Use the "--onto-remote" flag to choose a valid, pushable remote to land changes onto.' => 'Neexistuje žiadne odosielateľné vzdialené úložisko „%s“. Pomocou prepínača „--onto-remote“ zvoľte platné odosielateľné vzdialené úložisko, do ktorého sa majú zmeny začleniť.',
  'Workflow "%s" is unknown. Supported workflows are: %s.' => 'Pracovný postup „%s“ je neznámy. Podporované pracovné postupy sú: %s.',
  'Configuration value "%s" is set to "%s".' => 'Konfiguračná hodnota „%s“ je nastavená na „%s“.',
  'Describe the changes in this new revision.' => 'Opíšte zmeny v tejto novej revízii.',
  'NEW BOOKMARK' => 'NOVÁ ZÁLOŽKA',
  'Commit symbol "%s" contains a newline. This is not a valid character in a Mercurial commit symbol.' => 'Symbol commitu „%s“ obsahuje znak nového riadka. To nie je platný znak v symbole commitu Mercurialu.',
  'Install JSCS using `%s`.' => 'Nainštalujte JSCS pomocou `%s`.',
  'Invalid Octal Numeric Scalar' => 'Neplatný osmičkový číselný skalár',
  '%s failed to parse file data %d: %s' => '%s sa nepodarilo analyzovať údaje súboru %d: %s',
  'LOCK ACQUIRED' => 'ZÁMOK ZÍSKANÝ',
  'Configuration value "%s" is empty.' => 'Konfiguračná hodnota „%s“ je prázdna.',
  'Invalid command "%s". Did you mean:' => 'Neplatný príkaz „%s“. Mysleli ste:',
  'Deleted key "%s" from %s config.' => 'Kľúč „%s“ bol odstránený z konfigurácie %s.',
  'Unable to verify request signature, signature format is not known.' => 'Nepodarilo sa overiť podpis požiadavky, formát podpisu nie je známy.',
  'Follow naming conventions: class constants should be named using `%s`' => 'Dodržiavajte konvencie pomenúvania: konštanty tried by sa mali pomenúvať pomocou `%s`',
  'Emit machine-readable JSON. EXPERIMENTAL! Probably does not work!' => 'Vypísať strojovo čitateľný JSON. EXPERIMENTÁLNE! Pravdepodobne nefunguje!',
  'UNIT OKAY' => 'JEDNOTKOVÉ TESTY V PORIADKU',
  'TO INSTALL: %s' => 'NA INŠTALÁCIU: %s',
  'Reuse of Iterator References' => 'Opätovné použitie referencií iterátora',
  'Choose a workflow!' => 'Zvoľte pracovný postup!',
  '`%s` Operator' => 'Operátor `%s`',
  '%s %s' => '%s %s',
  'No working copy to write config into!' => 'Nie je žiadna pracovná kópia, do ktorej by sa dala zapísať konfigurácia!',
  'Specify available reviewers and retry.' => 'Zadajte dostupných recenzentov a skúste to znova.',
  'PHP version to target on Windows.' => 'Verzia PHP, na ktorú sa má cieliť v systéme Windows.',
  'Working Copy: No candidate locations for %s from this working directory.' => 'Pracovná kópia: Žiadne kandidátske umiestnenia pre %s z tohto pracovného adresára.',
  'Option \'%s\' is not supported under %s.' => 'Voľba \'%s\' nie je podporovaná v %s.',
  'The coding standard(s) to apply.' => 'Kódovacie štandardy, ktoré sa majú použiť.',
  'Fail' => 'Zlyhanie',
  'Expected no exception, got exception of class "%s".' => 'Očakávala sa žiadna výnimka, získala sa výnimka triedy „%s“.',
  'Subversion does not use base commits.' => 'Subversion nepoužíva základné commity.',
  'Do not use the PHP closing tag, `%s`.' => 'Nepoužívajte uzatváraciu značku PHP, `%s`.',
  'it is the first ancestor of %s that either has a bookmark, or is already in the remote and it matched the rule %s in your %s \'base\' configuration' => 'je to prvý predok %s, ktorý má buď záložku, alebo sa už nachádza vo vzdialenom úložisku, a zhodoval sa s pravidlom %s vo vašej konfigurácii \'base\' v %s',
  'Found unexpected surplus key "%s" where no such key was expected.' => 'Našiel sa neočakávaný nadbytočný kľúč „%s“ tam, kde sa žiadny taký kľúč neočakával.',
  'You specified %s but %s is not available, so coverage can not be enabled for %s.' => 'Zadali ste %s, ale %s nie je dostupné, takže pokrytie sa nedá povoliť pre %s.',
  'Classes which should not be used because they represent the unsafe usage of dynamic strings.' => 'Triedy, ktoré by sa nemali používať, pretože predstavujú nebezpečné použitie dynamických reťazcov.',
  'No viewer!' => 'Žiadny pozorovateľ!',
  'Failed to match SimpleCommitGraph directive "%s".' => 'Nepodarilo sa priradiť direktívu SimpleCommitGraph „%s“.',
  'No lint messages.' => 'Žiadne správy lintu.',
  'Error in parsing \'%s\' file, for linter \'%s\'.' => 'Chyba pri analýze súboru \'%s\' pre linter \'%s\'.',
  'ONGOING BUILDS' => 'PREBIEHAJÚCE ZOSTAVENIA',
  'UNABLE TO ACQUIRE LOCK:' => 'NEPODARILO SA ZÍSKAŤ ZÁMOK:',
  'REBASE CONFLICT' => 'KONFLIKT PRI REBASE',
  'Follow naming conventions: enums should be named using `%s`.' => 'Dodržiavajte konvencie pomenúvania: enumerácie by sa mali pomenúvať pomocou `%s`.',
  'Raw input file was written to: %s' => 'Surový vstupný súbor bol zapísaný do: %s',
  'Default value for parameters with a false type hint can only be false.' => 'Predvolenou hodnotou parametrov s typovou nápovedou false môže byť len false.',
  'Configuration option ("%s") defined by extension "%s" has an alias ("%s") which conflicts with the alias of another configuration option ("%s"). The key and aliases of each option must be unique.' => 'Konfiguračná možnosť („%s“) definovaná rozšírením „%s“ má alias („%s“), ktorý je v konflikte s aliasom inej konfiguračnej možnosti („%s“). Kľúč a aliasy každej možnosti musia byť jedinečné.',
  'Enter a commit message.' => 'Zadajte správu commitu.',
  'Cover changes since a specific revision.' => 'Pokryť zmeny od konkrétnej revízie.',
  'Implicit Constructor' => 'Implicitný konštruktor',
  'Read diff from stdin, not from the working copy. This disables many features which depend on having access to the working copy.' => 'Načítať diff zo stdin, nie z pracovnej kópie. Tým sa zakáže mnoho funkcií, ktoré závisia od prístupu k pracovnej kópii.',
  'Command to use to invoke a web browser.' => 'Príkaz, ktorý sa má použiť na spustenie webového prehliadača.',
  'Value "%s" is not valid, specify a JSON list: %s' => 'Hodnota „%s“ nie je platná, zadajte zoznam JSON: %s',
  'Specify at most one revision name.' => 'Zadajte najviac jeden názov revízie.',
  'Two argument specifications have the same short alias ("%s").' => 'Dve špecifikácie argumentov majú rovnaký krátky alias („%s“).',
  'In multi-line function or method calls, each argument should be on a separate line.' => 'Vo viacriadkových volaniach funkcií alebo metód by mal byť každý argument na samostatnom riadku.',
  'Open a file or object (like a task or revision) in a local web browser.

  $ arc browse README   # Open a file in Diffusion.
  $ arc browse T123     # View a task.
  $ arc browse HEAD     # View a symbolic commit.

To choose a browser binary to invoke, use:

  $ arc set-config browser __browser-binary__

If no browser is set, the command will try to guess which browser to use.' => 'Otvorí súbor alebo objekt (napríklad úlohu či revíziu) v lokálnom webovom prehliadači.

  $ arc browse README   # Otvorí súbor v Diffusion.
  $ arc browse T123     # Zobrazí úlohu.
  $ arc browse HEAD     # Zobrazí symbolický commit.

Na výber binárneho súboru prehliadača, ktorý sa má spustiť, použite:

  $ arc set-config browser __browser-binary__

Ak nie je nastavený žiadny prehliadač, príkaz sa pokúsi odhadnúť, ktorý prehliadač použiť.',
  'Call to "assertCaught(..., <junk>, ...)" passed bad value for test result. Expected null, Exception, or Throwable; got: %s.' => 'Volanie „assertCaught(..., <junk>, ...)“ odovzdalo nesprávnu hodnotu pre výsledok testu. Očakávalo sa null, Exception alebo Throwable; získalo sa: %s.',
  'You may land one branches and any number of bookmarks in a single operation.' => 'V jednej operácii môžete začleniť jednu vetvu a ľubovoľný počet záložiek.',
  'Unknown lint severity "%s". Valid severities are: %s.' => 'Neznáma závažnosť lintu „%s“. Platné závažnosti sú: %s.',
  'You have untracked files in this working copy.' => 'V tejto pracovnej kópii máte nesledované súbory.',
  'JSON Lint' => 'Lint JSON',
  'Expected alias definition (with key "%s") to be a dictionary.' => 'Očakávalo sa, že definícia aliasu (s kľúčom „%s“) bude slovník.',
  'Arguments with default values must be at the end of the argument list.' => 'Argumenty s predvolenými hodnotami musia byť na konci zoznamu argumentov.',
  'Select an output format.' => 'Zvoľte výstupný formát.',
  'Unable to close file!' => 'Nepodarilo sa zavrieť súbor!',
  'The `%s` and `%s` statements no longer accept variable arguments.' => 'Príkazy `%s` a `%s` už neprijímajú premenlivé argumenty.',
  'No analyzer is available for binary "%s".' => 'Pre binárny súbor „%s“ nie je dostupný žiadny analyzátor.',
  'Objects passed to "%s" must return sort vectors (objects of class "%s") from the specified method ("%s"). One object (with key "%s") did not.' => 'Objekty odovzdané do „%s“ musia zo zadanej metódy („%3$s“) vracať vektory zoradenia (objekty triedy „%s“). Jeden objekt (s kľúčom „%4$s“) tak neurobil.',
  'Alias functions should be avoided.' => 'Funkciám s aliasmi by ste sa mali vyhýbať.',
  'Unit test results included failures, but all failing tests are known to be unsound. Ignore unsound test failures?' => 'Výsledky jednotkových testov obsahovali zlyhania, ale o všetkých zlyhávajúcich testoch je známe, že sú nespoľahlivé. Ignorovať zlyhania nespoľahlivých testov?',
  'Resolve merge conflicts before proceeding.' => 'Pred pokračovaním vyriešte konflikty zlúčenia.',
  'The proxied future has not been provided yet.' => 'Sprostredkované future ešte nebolo poskytnuté.',
  'No ref "%s" exists in remote "%s".' => 'Vo vzdialenom úložisku „%2$s“ neexistuje žiadny ref „%s“.',
  'Expected JSON response from Postmark.' => 'Očakávala sa odpoveď JSON od služby Postmark.',
  'Failed to convert a hunk from \'%s\' to UTF-8. Check that the specified encoding is correct.' => 'Nepodarilo sa previesť blok z \'%s\' na UTF-8. Skontrolujte, či je zadané kódovanie správne.',
  'Bad Charset' => 'Nesprávna znaková sada',
  'Wrote PHP definition.' => 'Definícia PHP bola zapísaná.',
  'Throwing an `%s` from within the `%s` method is not allowed before PHP 7.4.' => 'Vyhodenie `%s` zvnútra metódy `%s` nie je povolené pred PHP 7.4.',
  'Version' => 'Verzia',
  'REVISION' => 'REVÍZIA',
  'Use `%s` to detect issues with Javascript source files.' => 'Na zisťovanie problémov v zdrojových súboroch Javascriptu použite `%s`.',
  'COMMITTED' => 'COMMITNUTÉ',
  'Confirms that revisions that are already published should land.' => 'Potvrdzuje, že sa majú začleniť aj revízie, ktoré sú už publikované.',
  'Executing \'%s\' failed!' => 'Vykonanie \'%s\' zlyhalo!',
  'Which URI do you want to open?' => 'Ktoré URI chcete otvoriť?',
  'Cherry Pick Failed!' => 'Cherry-pick zlyhal!',
  'What default do you want to use? [origin/master]' => 'Aké predvolené nastavenie chcete použiť? [origin/master]',
  'Matching working copy directory path.' => 'Zodpovedajúca cesta k adresáru pracovnej kópie.',
  'Restoring local state (to detached commit "%s").' => 'Obnovuje sa lokálny stav (na odpojený commit „%s“).',
  'Unknown version control system.' => 'Neznámy systém správy verzií.',
  'Mark the file as temporary. Temporary files will be deleted after 24 hours.' => 'Označiť súbor ako dočasný. Dočasné súbory sa po 24 hodinách odstránia.',
  'Hardpoint (at index "%s") has the same key ("%s") as an earlier hardpoint. Each hardpoint must have a key that is unique among hardpoints on the object.' => 'Hardpoint (na indexe „%s“) má rovnaký kľúč („%s“) ako skorší hardpoint. Každý hardpoint musí mať kľúč, ktorý je medzi hardpointmi objektu jedinečný.',
  'Accept/shift conflict!' => 'Konflikt accept/shift!',
  'Dynamic `%s`' => 'Dynamické `%s`',
  'Expected %s rules to define rules for state \'%s\'.' => 'Očakávalo sa, že pravidlá %s budú definovať pravidlá pre stav \'%s\'.',
  'These %s symbol(s) do not exist in the remote. They will be created as new branches:' => array(
    'Tento symbol vo vzdialenom úložisku neexistuje. Vytvorí sa ako nová vetva:',
    'Tieto symboly vo vzdialenom úložisku neexistujú. Vytvoria sa ako nové vetvy:',
  ),
  'Incomplete implementation: %s!' => 'Neúplná implementácia: %s!',
  'Argument names may only contain a-z, 0-9 and -, and must be at least one character long. \'%s\' is invalid.' => 'Názvy argumentov môžu obsahovať iba a-z, 0-9 a -, a musia mať aspoň jeden znak. \'%s\' je neplatný.',
  'Array Separator' => 'Oddeľovač poľa',
  'If true, %s will never change repository history (e.g., through amending or rebasing). Defaults to true in Mercurial and false in Git. This setting has no effect in Subversion.' => 'Ak je true, %s nikdy nezmení históriu repozitára (napr. dopĺňaním alebo rebasovaním). Predvolene je true v Mercuriale a false v Gite. Toto nastavenie nemá v Subversion žiadny účinok.',
  'Binary Integer Casing' => 'Veľkosť písmen binárnych celých čísel',
  'Unrecognized argument "%s".' => 'Nerozpoznaný argument „%s“.',
  'Unable to upload file: path "%s" is not a file.' => 'Nepodarilo sa nahrať súbor: cesta „%s“ nie je súbor.',
  'Space After Control Statement' => 'Medzera po riadiacom príkaze',
  'Patch deletes file \'%s\', but the file does not exist in the working copy. Continue anyway?' => 'Záplata odstraňuje súbor \'%s\', ale ten v pracovnej kópii neexistuje. Pokračovať napriek tomu?',
  'Property hooks are not available before PHP 8.4.' => 'Háky vlastností nie sú dostupné pred PHP 8.4.',
  'Unit testing raised errors, but all failing tests are unsound.' => 'Jednotkové testovanie vyvolalo chyby, ale všetky zlyhávajúce testy sú nespoľahlivé.',
  'Global Variables' => 'Globálne premenné',
  'IMMUTABLE WORKING COPY' => 'NEMENNÁ PRACOVNÁ KÓPIA',
  'Show information about prompts a workflow may execute, and review saved
responses.

**Show Prompts**

To show possible prompts a workflow may execute, run:

  $ arc prompts __workflow__

**Saving Responses**

If you always want to answer a particular prompt in a certain way, you can
save your response to the prompt. When you encounter the prompt again, your
saved response will be used automatically.

To save a response, add "*" or "!" to the end of the response you want to save
when you answer the prompt:

  - Using "*" will save the response in user configuration. In the future,
    the saved answer will be used any time you encounter the prompt (in any
    project).
  - Using "!" will save the response in working copy configuration. In the
    future, the saved answer will be used when you encounter the prompt in
    the current working copy.

For example, if you would like to always answer "y" to a particular prompt,
respond with "y*" or "y!" to save your response.
' => 'Zobrazí informácie o výzvach, ktoré môže pracovný postup vykonať, a umožní
prezrieť si uložené odpovede.

**Zobrazenie výziev**

Možné výzvy, ktoré môže pracovný postup vykonať, zobrazíte spustením:

  $ arc prompts __workflow__

**Ukladanie odpovedí**

Ak chcete na konkrétnu výzvu vždy odpovedať určitým spôsobom, môžete si svoju
odpoveď na výzvu uložiť. Keď na výzvu narazíte znova, automaticky sa použije
vaša uložená odpoveď.

Odpoveď uložíte tak, že pri odpovedaní na výzvu pridáte na koniec odpovede,
ktorú chcete uložiť, znak „*“ alebo „!“:

  - Použitie „*“ uloží odpoveď do používateľskej konfigurácie. Uložená
    odpoveď sa v budúcnosti použije vždy, keď na výzvu narazíte (v ľubovoľnom
    projekte).
  - Použitie „!“ uloží odpoveď do konfigurácie pracovnej kópie. Uložená
    odpoveď sa v budúcnosti použije vtedy, keď na výzvu narazíte v aktuálnej
    pracovnej kópii.

Napríklad ak by ste chceli na konkrétnu výzvu vždy odpovedať „y“, odpovedzte
„y*“ alebo „y!“, čím sa vaša odpoveď uloží.',
  'Files must end in a newline.' => 'Súbory musia končiť znakom nového riadka.',
  'You may need to open a new terminal window or launch a new shell before the changes take effect.' => 'Skôr než sa zmeny prejavia, možno budete musieť otvoriť nové okno terminálu alebo spustiť nový shell.',
  'The regex to process output with.' => 'Regulárny výraz, ktorým sa má spracovať výstup.',
  'Lint changes since a specific revision.' => 'Lintovať zmeny od konkrétnej revízie.',
  'Do you want to use this message?' => 'Chcete použiť túto správu?',
  '(This configuration value is not recognized by arc. It may be misspelled or out of date.)' => '(Túto konfiguračnú hodnotu arc nepozná. Môže byť preklepnutá alebo zastaraná.)',
  'Custom preset.' => 'Vlastné prednastavenie.',
  'The use of `%s` in an anonymous closure is not available before PHP 5.4.' => 'Použitie `%s` v anonymnom uzávere nie je dostupné pred PHP 5.4.',
  'Unit test engine (of class "%s") returned invalid results when run (with method "%s"). Expected a list of "%s" objects as results, but value with key "%s" is not valid.' => 'Nástroj na jednotkové testy (triedy „%s“) vrátil pri spustení (metódou „%s“) neplatné výsledky. Ako výsledky sa očakával zoznam objektov „%s“, ale hodnota s kľúčom „%s“ nie je platná.',
  'Prior to PHP 5.4, `%s` fails when given empty arrays. Prefer to write `%s` as `%s`.' => 'Pred PHP 5.4 `%s` zlyháva pri prázdnych poliach. Radšej píšte `%s` ako `%s`.',
  'Match expressions are not available before PHP 8.0.' => 'Výrazy match nie sú dostupné pred PHP 8.0.',
  'You have uncommitted changes in this working copy. Commit or revert them before proceeding.' => 'V tejto pracovnej kópii máte necommitnuté zmeny. Pred pokračovaním ich commitnite alebo vráťte späť.',
  'In module `%s`, declaration `%s`.' => 'V module `%s`, deklarácia `%s`.',
  'Space After Unary Prefix Operator' => 'Medzera po unárnom prefixovom operátore',
  'Stashing uncommitted changes. (You can restore them with `%s`).' => 'Necommitnuté zmeny sa odkladajú do skrýše. (Obnoviť ich môžete pomocou `%s`.)',
  'Call %s to build the graph out before calling %s.' => 'Pred volaním %2$s zavolajte %s, aby sa graf vybudoval.',
  'These changes will land:' => 'Začlenia sa tieto zmeny:',
  'Unrecognized symbol name.' => 'Nerozpoznaný názov symbolu.',
  'Support for arbitrary expressions in the `%s` construct was not introduced until PHP 5.5, but this codebase targets an earlier version of PHP.' => 'Podpora ľubovoľných výrazov v konštrukcii `%s` bola zavedená až v PHP 5.5, ale táto kódová základňa cieli na skoršiu verziu PHP.',
  'Attempting to convert a string encoding from \'%s\' to \'%s\', but the \'%s\' PHP extension is not available. Install %s to work with encodings other than UTF-8.' => 'Pokus o prevod kódovania reťazca z \'%s\' na \'%s\', ale rozšírenie PHP \'%s\' nie je dostupné. Na prácu s inými kódovaniami než UTF-8 nainštalujte %s.',
  'Expected a regular expression, but value is not valid: %s' => 'Očakával sa regulárny výraz, ale hodnota nie je platná: %s',
  'INSTALLED' => 'NAINŠTALOVANÉ',
  'Restored stashed changes to the working directory.' => 'Zmeny zo skrýše boli obnovené do pracovného adresára.',
  'Default list of "onto" remote for "arc land".' => 'Predvolený zoznam vzdialených úložísk „onto“ pre „arc land“.',
  'Fuse two or more files together, absolutely without any involvement of animals,
unlike the competitor unix tool __cat__.
Please do not expect deterministic results because the printed output
is generated by stick electrodes.
Please still consider the environment before printing the result.' => 'Zlúči dva alebo viac súborov dokopy, absolútne bez akejkoľvek účasti zvierat,
na rozdiel od konkurenčného unixového nástroja __cat__.
Neočakávajte prosím deterministické výsledky, pretože vytlačený výstup
generujú tyčové elektródy.
Pred vytlačením výsledku prosím napriek tomu zvážte životné prostredie.',
  'Land these changes?' => 'Začleniť tieto zmeny?',
  'Future graphs can not be rewound.' => 'Grafy future sa nedajú previnúť späť.',
  'IP address "%s" is not properly formatted. Address segments should be between 0 and 255, inclusive, but segment "%s" has a value outside of this range.' => 'Adresa IP „%s“ nie je správne naformátovaná. Segmenty adresy by mali byť v rozsahu 0 až 255 vrátane, ale segment „%s“ má hodnotu mimo tohto rozsahu.',
  'BOOKMARK' => 'ZÁLOŽKA',
  'Local branch "%s" tracks an upstream but following it leads to a local cycle, ignoring branch.' => 'Lokálna vetva „%s“ sleduje upstream, ale jeho sledovanie vedie k lokálnemu cyklu, vetva sa ignoruje.',
  'Continue Inside Switch' => 'Continue vnútri switch',
  'Expected exactly one argument to "browse(...)" with a token.' => 'Očakával sa presne jeden argument pre „browse(...)“ s tokenom.',
  'CONFIGURED' => 'NAKONFIGUROVANÉ',
  'Unable to run a command in directory "%s".' => 'Nepodarilo sa spustiť príkaz v adresári „%s“.',
  'Return type hints are not available before PHP 7.0.' => 'Typové nápovedy návratových hodnôt nie sú dostupné pred PHP 7.0.',
  'When updating a revision under git, edit revision information before updating.' => 'Pri aktualizácii revízie v gite upraviť informácie o revízii pred aktualizáciou.',
  'LOCAL CHANGES' => 'LOKÁLNE ZMENY',
  'This codebase targets PHP %s, but `%s` was not introduced until PHP 5.3.' => 'Táto kódová základňa cieli na PHP %s, ale `%s` bolo zavedené až v PHP 5.3.',
  'UNIT UNSOUND' => 'JEDNOTKOVÉ TESTY NESPOĽAHLIVÉ',
  'Invalid value for `%s`: %s.' => 'Neplatná hodnota pre `%s`: %s.',
  '    **extract-symbols.php** [__options__] __path.php__
        Identify the symbols (clases, functions and interfaces) in a PHP
        source file. Symbols are divided into "have" symbols (symbols the file
        declares) and "need" symbols (symbols the file depends on). For example,
        class declarations are "have" symbols, while object instantiations
        with "new X()" are "need" symbols.

        Dependencies on builtins and symbols marked \'@phutil-external-symbol\'
        in docblocks are omitted without __--all__.

        Symbols are reported in JSON on stdout.

        This script is used internally to build maps of library
        symbols.

        It would be nice to eventually implement this as a C++ xhpast binary,
        as it\'s relatively stable and performance is currently awful
        (500ms+ for moderately large files).
' => '    **extract-symbols.php** [__options__] __path.php__
        Identifikuje symboly (triedy, funkcie a rozhrania) v zdrojovom súbore
        PHP. Symboly sa delia na symboly „have“ (symboly, ktoré súbor
        deklaruje) a symboly „need“ (symboly, od ktorých súbor závisí).
        Napríklad deklarácie tried sú symboly „have“, kým inštanciácie
        objektov pomocou „new X()“ sú symboly „need“.

        Závislosti od vstavaných symbolov a symbolov označených
        \'@phutil-external-symbol\' v dokumentačných blokoch sa bez __--all__
        vynechávajú.

        Symboly sa vypisujú vo formáte JSON na stdout.

        Tento skript sa interne používa na zostavovanie máp symbolov
        knižnice.

        Bolo by pekné implementovať to napokon ako binárny súbor xhpast v C++,
        keďže je relatívne stabilný a výkon je momentálne hrozný
        (500 ms a viac pri stredne veľkých súboroch).',
  'Make sure all the symbols used in an %s library are defined and known.  This linter is specific to PHP source in %s libraries.' => 'Zabezpečuje, aby boli všetky symboly použité v knižnici %s definované a známe.  Tento linter je špecifický pre zdrojový kód PHP v knižniciach %s.',
  'Argument position specified with "--current" ("%s") is greater than the number of arguments provided ("%s").' => 'Pozícia argumentu zadaná pomocou „--current“ („%s“) je väčšia ako počet poskytnutých argumentov („%s“).',
  'Generator (for query "%s") returned an "ArcanistHardpointTaskResult" object, which is not a valid thing to return from a generator.

This almost always means the generator implementation has a "return $this->yield..." statement which should be a "yield $this->yield..." instead.' => 'Generátor (pre dopyt „%s“) vrátil objekt „ArcanistHardpointTaskResult“, čo nie je platná vec na vrátenie z generátora.

To takmer vždy znamená, že implementácia generátora obsahuje príkaz „return $this->yield...“, ktorý by mal namiesto toho byť „yield $this->yield...“.',
  'COMMIT RANGE' => 'ROZSAH COMMITOV',
  'Specifies the remote to fetch the "into" ref from. By default, this is the same as the "onto" remote.' => 'Určuje vzdialené úložisko, z ktorého sa má načítať ref „into“. Predvolene je to rovnaké ako vzdialené úložisko „onto“.',
  'No tasks found.' => 'Nenašli sa žiadne úlohy.',
  '%s' => '%s',
  'No child with index \'%d\'.' => 'Žiadny potomok s indexom \'%d\'.',
  'Choose an object to inspect:' => 'Zvoľte objekt na preskúmanie:',
  '%s REVISION(S) ARE ALREADY PUBLISHED' => array(
    '%s REVÍZIA UŽ JE PUBLIKOVANÁ',
    '%s REVÍZIE UŽ SÚ PUBLIKOVANÉ',
    '%s REVÍZIÍ UŽ JE PUBLIKOVANÝCH',
  ),
  'Invalid EditorConfig property.' => 'Neplatná vlastnosť EditorConfig.',
  'List of event listener classes to install at startup.' => 'Zoznam tried poslucháčov udalostí, ktoré sa majú nainštalovať pri spustení.',
  'Provide a branch, bookmark, task, or revision name to begin or resume work on.' => 'Zadajte názov vetvy, záložky, úlohy alebo revízie, na ktorej chcete začať alebo pokračovať v práci.',
  'Use **%s** __command__ for a detailed command reference.' => 'Podrobnú referenciu príkazov získate pomocou **%s** __command__.',
  'At the far edge of the grove, you see remotes:' => 'Na vzdialenom okraji hája vidíte vzdialené úložiská:',
  'It is nearly dusk. The wind has picked up and the trees around you sway and rustle.' => 'Blíži sa súmrak. Vietor zosilnel a stromy okolo vás sa hojdajú a šumia.',
  'The test failed.' => 'Test zlyhal.',
  'Install shell completion.' => 'Nainštalovať dopĺňanie v shelli.',
  '%s revision(s) have build failures:' => array(
    '%s revízia má zlyhané zostavenia:',
    '%s revízie majú zlyhané zostavenia:',
    '%s revízií má zlyhané zostavenia:',
  ),
  'Failed to upload binary "%s".' => 'Nepodarilo sa nahrať binárny súbor „%s“.',
  'Commit symbol "%s" contains a newline. This is not a valid character in a Git commit symbol.' => 'Symbol commitu „%s“ obsahuje znak nového riadka. To nie je platný znak v symbole commitu Gitu.',
  'ARGV' => 'ARGV',
  'Both sides of this expression are identical, so it always evaluates to a constant.' => 'Obe strany tohto výrazu sú zhodné, takže sa vždy vyhodnotí na konštantu.',
  'Conflicts in working copy:' => 'Konflikty v pracovnej kópii:',
  'Revision \'%s: %s\' has not been accepted. Commit this revision anyway?' => 'Revízia \'%s: %s\' nebola schválená. Napriek tomu commitnúť túto revíziu?',
  'Commit "%s"' => 'Commit „%s“',
  'Commit a specific revision. If you do not specify a revision, arc will look for committable revisions.' => 'Commitnúť konkrétnu revíziu. Ak revíziu neurčíte, arc vyhľadá commitovateľné revízie.',
  'Lint all tracked files in the working copy. Ignored files and untracked files will not be linted.' => 'Lintovať všetky sledované súbory v pracovnej kópii. Ignorované a nesledované súbory sa lintovať nebudú.',
  'Instead of exporting changes from the working copy, export them from a Differential revision.' => 'Namiesto exportovania zmien z pracovnej kópie ich exportovať z revízie Differential.',
  '%s submodule(s) have uncommitted or untracked changes:' => array(
    'Submodul má necommitnuté alebo nesledované zmeny:',
    'Submoduly majú necommitnuté alebo nesledované zmeny:',
  ),
  'Normally under git/hg, if the patch is successful, the changes are committed to the working copy. This flag prevents the commit.' => 'Za normálnych okolností sa v git/hg pri úspešnej záplate zmeny commitnú do pracovnej kópie. Tento prepínač commitu zabráni.',
  'The null coalescing operator is not available before PHP 7.0.' => 'Operátor null coalescing nie je dostupný pred PHP 7.0.',
  'Updating local branch "%s"...' => 'Aktualizuje sa lokálna vetva „%s“...',
  'Unable to identify the current branch in the working copy.' => 'Nepodarilo sa identifikovať aktuálnu vetvu v pracovnej kópii.',
  'Type of setting \'%s\' must be boolean.' => 'Typ nastavenia \'%s\' musí byť boolean.',
  'No type name for node type ID \'%s\' in \'%s\' AAST.' => 'Žiadny názov typu pre ID typu uzla \'%s\' v AAST \'%s\'.',
  'Search for linters. Search is case-insensitive, and is performed against name and description of each linter.' => 'Vyhľadať lintery. Vyhľadávanie nerozlišuje veľkosť písmen a vykonáva sa v názve a opise každého lintera.',
  'Call-time pass-by-reference calls are prohibited.' => 'Odovzdávanie referencií v čase volania je zakázané.',
  'For consistency, use `%s` (a type cast) instead of `%s` (a function call). Function calls impose additional overhead.' => 'Kvôli konzistentnosti používajte `%s` (pretypovanie) namiesto `%s` (volania funkcie). Volania funkcií prinášajú dodatočnú réžiu.',
  'Expected file \'%s\' to begin `%s`.' => 'Očakávalo sa, že súbor \'%s\' bude začínať `%s`.',
  'Array elements should each occupy a single line.' => 'Každý prvok poľa by mal zaberať jeden riadok.',
  'identify symbols in a PHP source file' => 'identifikovať symboly v zdrojovom súbore PHP',
  'Filesystem path "%s" can not be accessed because a parent directory ("%s") is not executable (the current process does not have "+x" permission).' => 'K ceste v systéme súborov „%s“ sa nedá pristupovať, pretože nadradený adresár („%s“) nie je spustiteľný (aktuálny proces nemá oprávnenie „+x“).',
  'File "%s" does not exist, or you do not have permission to view it.' => 'Súbor „%s“ neexistuje alebo nemáte oprávnenie ho zobraziť.',
  'Included commits in branch %s:' => 'Zahrnuté commity vo vetve %s:',
  '  NOTE: Failed to load the commit message from Differential (for revision "%s".)' => '  NOTE: Nepodarilo sa načítať správu commitu z Differentialu (pre revíziu „%s“.)',
  'Spaces Inside Parentheses' => 'Medzery vnútri zátvoriek',
  'Configuration (%s)' => 'Konfigurácia (%s)',
  'This file contains a syntax error: %s' => 'Tento súbor obsahuje syntaktickú chybu: %s',
  'Create new library?' => 'Vytvoriť novú knižnicu?',
  'Provide a nonempty symbol to begin or resume work on.' => 'Zadajte neprázdny symbol, na ktorom chcete začať alebo pokračovať v práci.',
  'Remote "%s", specified with "--into", is not a valid fetchable remote.' => 'Vzdialené úložisko „%s“ zadané pomocou „--into“ nie je platné načítateľné vzdialené úložisko.',
  'Name of a concrete subclass of `%s` which tunes the analysis of `%s` statements for this linter.' => 'Názov konkrétnej podtriedy triedy `%s`, ktorá ladí analýzu príkazov `%s` pre tento linter.',
  'Single lined arrays should not have a trailing comma.' => 'Jednoriadkové polia by nemali mať čiarku na konci.',
  'Generator has never rewound, but has a value to send. This is invalid.' => 'Generátor sa nikdy nepreviňoval späť, ale má hodnotu na odoslanie. To je neplatné.',
  'Remote "%s" has multiple bookmarks with name "%s". This is unexpected.' => 'Vzdialené úložisko „%s“ má viacero záložiek s názvom „%s“. To je neočakávané.',
  'Base commit rule \'%s\' (from source \'%s\') is not a recognized rule.' => 'Pravidlo základného commitu \'%s\' (zo zdroja \'%s\') nie je rozpoznané pravidlo.',
  'Unsafe Usage of Dynamic String' => 'Nebezpečné použitie dynamického reťazca',
  'it is what you typed when prompted.' => 'je to to, čo ste napísali po výzve.',
  '%s can not be used with %s.' => '%s sa nedá použiť s %s.',
  'Merge conflicts in working copy:' => 'Konflikty zlúčenia v pracovnej kópii:',
  'Expected to find key "%s", but it is not present.' => 'Očakávalo sa nájdenie kľúča „%s“, ale nie je prítomný.',
  'Night has fallen, and the thin sliver of moon overhead offers no comfort. It is almost pitch black. The night is bitter cold. It will be difficult to look around in these conditions.' => 'Padla noc a tenký kosáčik mesiaca nad hlavou neposkytuje žiadnu útechu. Je takmer úplná tma. Noc je mrazivá. Za týchto podmienok bude ťažké sa poobzerať.',
  'Future has already resolved. Futures may not resolve more than once.' => 'Future už bolo vyriešené. Future sa nemôže vyriešiť viackrát.',
  '**version**' => '**verzia**',
  'Broken' => 'Pokazené',
  'Length must be larger than 0!' => 'Dĺžka musí byť väčšia ako 0!',
  'The "SHELL" environment variable does not match any recognized shell.' => 'Premenná prostredia „SHELL“ nezodpovedá žiadnemu rozpoznanému shellu.',
  'All reviewers are away until %s:' => 'Všetci recenzenti sú neprítomní do %s:',
  'Server to connect to.' => 'Server, ku ktorému sa má pripojiť.',
  'Created a new Differential revision:' => 'Bola vytvorená nová revízia Differential:',
  'The name of this file differs from the name of the class, interface, trait or enum it declares. Rename the file to `%s`.' => 'Názov tohto súboru sa líši od názvu triedy, rozhrania, traity alebo enumerácie, ktorú deklaruje. Premenujte súbor na `%s`.',
  'When creating a revision, try to use the working copy commit message verbatim, without prompting to edit it. When updating a revision, update some fields from the local commit message.' => 'Pri vytváraní revízie sa pokúsiť použiť správu commitu z pracovnej kópie doslovne bez výzvy na jej úpravu. Pri aktualizácii revízie aktualizovať niektoré polia z lokálnej správy commitu.',
  'LOAD STASH' => 'NAČÍTANIE SKRÝŠE',
  'Put space after comment start.' => 'Za začiatok komentára vložte medzeru.',
  'class, interface, trait or enum' => 'trieda, rozhranie, traita alebo enumerácia',
  'Failed to write file \'%s\'.' => 'Nepodarilo sa zapísať súbor \'%s\'.',
  'Path \'%s\' does not exist!' => 'Cesta \'%s\' neexistuje!',
  'Config: Reading system configuration file "%s"...' => 'Konfigurácia: Číta sa systémový konfiguračný súbor „%s“...',
  'Continue even though reviewers are unavailable?' => 'Pokračovať, aj keď recenzenti nie sú dostupní?',
  'Config: Reading local configuration file "%s"...' => 'Konfigurácia: Číta sa lokálny konfiguračný súbor „%s“...',
  'Use of `%s`' => 'Použitie `%s`',
  'Unable to parse \'%s\' file \'%s\'.' => 'Nepodarilo sa analyzovať súbor \'%s\' \'%s\'.',
  'Too few arguments to %s.' => 'Príliš málo argumentov pre %s.',
  'Unknown Mercurial feature "%s".' => 'Neznáma funkcia Mercurialu „%s“.',
  'They river bubbles peacefully.' => 'Rieka pokojne bublá.',
  'PHP files must only contain PHP code.' => 'Súbory PHP musia obsahovať iba kód PHP.',
  'Exit after serving __limit__ clients.' => 'Ukončiť po obslúžení __limit__ klientov.',
  '<Process was terminated by signal %s (%d).>

' => '<Proces bol ukončený signálom %s (%d).>',
  'Line Too Long' => 'Príliš dlhý riadok',
  'Skip' => 'Preskočiť',
  'Confirms that the correct changes have been selected to land.' => 'Potvrdzuje, že na začlenenie boli vybrané správne zmeny.',
  'Source code should contain only ASCII bytes with ordinal decimal values between 32 and 126 inclusive, plus linefeed. Do not use UTF-8 or other multibyte charsets.' => 'Zdrojový kód by mal obsahovať iba bajty ASCII s ordinálnymi desiatkovými hodnotami od 32 do 126 vrátane plus znak nového riadka. Nepoužívajte UTF-8 ani iné viacbajtové znakové sady.',
  'There are no changes to generate a diff from!' => 'Nie sú žiadne zmeny, z ktorých by sa dal vygenerovať diff!',
  'Type' => 'Typ',
  'Toolset "%s" is unknown. The binary should be executed so that "argv[0]" identifies a supported toolset. Rename the binary or install the library that provides the desired toolset. Current available toolsets: %s.' => 'Sada nástrojov „%s“ je neznáma. Binárny súbor by sa mal spúšťať tak, aby „argv[0]“ identifikoval podporovanú sadu nástrojov. Premenujte binárny súbor alebo nainštalujte knižnicu, ktorá poskytuje požadovanú sadu nástrojov. Aktuálne dostupné sady nástrojov: %s.',
  'Rule \'%s\' can never be reduced: it recurses indefinitely and reaches no production of terminals.' => 'Pravidlo \'%s\' sa nikdy nedá zredukovať: rekurzívne sa opakuje donekonečna a nedosiahne žiadnu produkciu terminálov.',
  'Specifying keys when destructuring arrays is not available before PHP 7.1.' => 'Zadávanie kľúčov pri deštrukturalizácii polí nie je dostupné pred PHP 7.1.',
  'Translating legacy name \'%s\' to \'%s\'' => 'Prekladá sa zastaraný názov \'%s\' na \'%s\'',
  'Could not encode repository versions!' => 'Nepodarilo sa zakódovať verzie repozitára!',
  'Set minimum message severity. One of: %s. Defaults to \'%s\'.' => 'Nastaviť minimálnu závažnosť správ. Jedna z: %s. Predvolene \'%s\'.',
  'Paamayim Nekudotayim Spacing' => 'Rozostupy Paamayim Nekudotayim',
  'Command-Line Flags' => 'Prepínače príkazového riadka',
  'Expected JSON response from Asana.' => 'Očakávala sa odpoveď JSON od služby Asana.',
  'The name or path of the coding standard to use.' => 'Názov alebo cesta kódovacieho štandardu, ktorý sa má použiť.',
  'Space Around Comma' => 'Medzery okolo čiarky',
  'Unable to parse path as PHAR file. PHAR file paths must be prefixed with `%s` and include a segment with one of these extensions (case-sensitive): %s' => 'Cestu sa nepodarilo analyzovať ako súbor PHAR. Cesty k súborom PHAR musia mať predponu `%s` a obsahovať segment s jednou z týchto prípon (rozlišujú sa veľké a malé písmená): %s',
  'Enabled verbose mode.' => 'Podrobný režim bol povolený.',
  'PHP Syntax Error!' => 'Syntaktická chyba PHP!',
  'INVALID CREDENTIALS' => 'NEPLATNÉ POVERENIA',
  'Attempting to rebase changes.' => 'Pokúša sa o rebase zmien.',
  'Hold indefinitely without prompting.' => 'Držať donekonečna bez pýtania sa.',
  'Cannot access `%s` when current class scope has no parent.' => 'K `%s` sa nedá pristupovať, keď aktuálny rozsah triedy nemá rodiča.',
  '"%s" is being run noninteractively, but the argument list is missing "--" to indicate end of flags.' => '„%s“ sa spúšťa neinteraktívne, ale v zozname argumentov chýba „--“ na označenie konca prepínačov.',
  'Configuration option ("%s") defined by extension "%s" conflicts with an existing option. Each option must have a unique key.' => 'Konfiguračná možnosť („%s“) definovaná rozšírením „%s“ je v konflikte s existujúcou možnosťou. Každá možnosť musí mať jedinečný kľúč.',
  '%s called with no messages!' => '%s bolo zavolané bez správ!',
  'Two files were added with identical explicit keys ("%s"); each explicit key must be unique.' => 'Pridali sa dva súbory so zhodnými výslovnými kľúčmi („%s“); každý výslovný kľúč musí byť jedinečný.',
  'Specify exactly one base commit. The end of the commit range is always the working copy state.' => 'Zadajte presne jeden základný commit. Koncom rozsahu commitov je vždy stav pracovnej kópie.',
  'The remote URI for this working copy is "%s".' => 'Vzdialené URI tejto pracovnej kópie je „%s“.',
  'Unable to launch an interactive text editor. Set the %s environment variable to an appropriate editor.' => 'Nepodarilo sa spustiť interaktívny textový editor. Nastavte premennú prostredia %s na vhodný editor.',
  'URI \'%s\' must be fully qualified and include host name.' => 'URI \'%s\' musí byť plne kvalifikované a obsahovať názov hostiteľa.',
  'Command exited with error code %d.' => 'Príkaz skončil s chybovým kódom %d.',
  'Landing the current HEAD, "%s".' => 'Začleňuje sa aktuálny HEAD „%s“.',
  'CoffeeLint is a style checker that helps keep CoffeeScript code clean and consistent.' => 'CoffeeLint je kontrolór štýlu, ktorý pomáha udržiavať kód CoffeeScript čistý a konzistentný.',
  'Requested path \'%s\' is not a directory.' => 'Požadovaná cesta \'%s\' nie je adresár.',
  'Command failed with error #%d!' => 'Príkaz zlyhal s chybou č. %d!',
  'You can\'t get local commit information for a repository with no commits.' => 'Pre repozitár bez commitov sa nedajú získať informácie o lokálnych commitoch.',
  'Unable to find Mono and you are not on Windows!' => 'Nepodarilo sa nájsť Mono a nie ste v systéme Windows!',
  'You may now push this commit upstream, as appropriate (e.g. with \'%s\' or by printing and faxing it).' => 'Tento commit teraz môžete odoslať do upstreamu podľa potreby (napr. pomocou \'%s\' alebo jeho vytlačením a odfaxovaním).',
  'Trying to pop an empty workflow stack!' => 'Pokus o vybratie z prázdneho zásobníka pracovných postupov!',
  'MULTIPLE BRANCH HEADS' => 'VIACERO HLÁV VETVY',
  'SimpleXML Linter' => 'Linter SimpleXML',
  'Load one or more configuration files. If this flag is provided, the system and user configuration files are ignored.' => 'Načítať jeden alebo viac konfiguračných súborov. Ak je zadaný tento prepínač, systémový a používateľský konfiguračný súbor sa ignorujú.',
  'Can\'t parse an empty diff!' => 'Prázdny diff sa nedá analyzovať!',
  'Unexpected data type in request data: %s.' => 'Neočakávaný typ údajov v údajoch požiadavky: %s.',
  'You are trying to construct an ambiguous URI: query parameter "%s" is present in both the string argument ("%s") and the map argument.' => 'Pokúšate sa zostaviť nejednoznačné URI: parameter dopytu „%s“ je prítomný v reťazcovom argumente („%s“) aj v mapovom argumente.',
  'Convention: no spaces around string concatenation operator.' => 'Konvencia: žiadne medzery okolo operátora zreťazenia reťazcov.',
  'Unnecessary Final Modifier' => 'Zbytočný modifikátor final',
  'INVALID LOCALE' => 'NEPLATNÁ LOKALIZÁCIA',
  'DOS Newlines' => 'Konce riadkov DOS',
  'Support for grouped use statements was not introduced until PHP 7.0 but this codebase targets an earlier version of PHP.' => 'Podpora zoskupených príkazov use bola zavedená až v PHP 7.0, ale táto kódová základňa cieli na skoršiu verziu PHP.',
  'There was an error resolving the server hostname. Check that you are connected to the internet and that DNS is correctly configured. (Did you add the domain to `%s` on some other machine, but not this one?)' => 'Pri prekladaní názvu hostiteľa servera sa vyskytla chyba. Skontrolujte, či ste pripojení na internet a či je DNS správne nakonfigurovaný. (Nepridali ste doménu do `%s` na inom počítači, ale nie na tomto?)',
  'Usage Exception:' => 'Výnimka pri použití:',
  'Pushing changes to "%s".' => 'Zmeny sa odosielajú do „%s“.',
  'Argument was \'%s\', but must be \'%s\'. For example, %s' => 'Argument bol \'%s\', ale musí byť \'%s\'. Napríklad %s',
  'User "%s"' => 'Používateľ „%s“',
  'Installing certificate for \'%s\'...' => 'Inštaluje sa certifikát pre \'%s\'...',
  'You are passing an integer to %s which is so large it can not be represented without loss of precision by Javascript\'s native %s class. Use %%# instead.' => 'Do %s odovzdávate celé číslo, ktoré je také veľké, že ho natívna trieda %s v Javascripte nedokáže reprezentovať bez straty presnosti. Použite namiesto toho %%#.',
  'Config: Did not find local configuration at "%s".' => 'Konfigurácia: Lokálna konfigurácia sa na „%s“ nenašla.',
  'Symbol \'%s\' in production \'%s\' (\'%s\') of rule \'%s\' does not name a rule or terminal. Did you misspell a symbol, fail to specify a terminal, or forget a rule?' => 'Symbol \'%s\' v produkcii \'%s\' (\'%s\') pravidla \'%s\' nepomenúva pravidlo ani terminál. Nepreklepli ste symbol, nezabudli ste určiť terminál alebo pridať pravidlo?',
  'To update shell completion support for "%s", your existing "%s" file will be modified. This line will be removed:' => 'Na aktualizáciu podpory dopĺňania v shelli pre „%s“ sa upraví váš existujúci súbor „%s“. Tento riadok sa odstráni:',
  'Confirms that local commits which are not associated with a revision have been associated correctly and should land.' => 'Potvrdzuje, že lokálne commity, ktoré nie sú priradené k žiadnej revízii, boli priradené správne a majú sa začleniť.',
  'Class' => 'Trieda',
  'Specify either "true" or "false".' => 'Zadajte buď „true“, alebo „false“.',
  'Rules are already up to date for "%s" in: %s' => 'Pravidlá pre „%s“ sú už aktuálne v: %s',
  'Installing shell completion support for "%s" into "%s".' => 'Inštaluje sa podpora dopĺňania v shelli pre „%s“ do „%s“.',
  'Export change as a git patch. This format is more complete than unified, but less complete than arc bundles. These patches can be applied with \'%s\' or \'%s\'.' => 'Exportovať zmenu ako záplatu git. Tento formát je úplnejší ako unified, ale menej úplný ako balíky arc. Tieto záplaty sa dajú použiť pomocou \'%s\' alebo \'%s\'.',
  'Expected to find meminfo key "%s" in meminfo source "%s".' => 'Očakávalo sa nájdenie kľúča meminfo „%s“ v zdroji meminfo „%s“.',
  'Will merge into empty state, selected with the "--into-empty" flag.' => 'Zlúči sa do prázdneho stavu zvoleného prepínačom „--into-empty“.',
  'Use parentheses when invoking a constructor.' => 'Pri volaní konštruktora používajte zátvorky.',
  'Automatically amending HEAD with lint patches.' => 'HEAD sa automaticky dopĺňa o záplaty lintu.',
  'Failed to remove directory \'%s\'!' => 'Nepodarilo sa odstrániť adresár \'%s\'!',
  'Prepare the changes to be pushed, but do not actually push them.' => 'Pripraviť zmeny na odoslanie, ale v skutočnosti ich neodoslať.',
  'This test is expected to fail.' => 'Očakáva sa, že tento test zlyhá.',
  'SKIP' => 'PRESKOČIŤ',
  'Unexpected type %s.' => 'Neočakávaný typ %s.',
  'Execution of "git cat-file --batch-check" emitted an unexpected line ("%s").' => 'Vykonanie „git cat-file --batch-check“ vypísalo neočakávaný riadok („%s“).',
  'Do not print status messages to stdout.' => 'Nevypisovať stavové správy na stdout.',
  'Typed constants are not available before PHP 8.3.' => 'Typované konštanty nie sú dostupné pred PHP 8.3.',
  'AMBIGUOUS MARKER' => 'NEJEDNOZNAČNÁ ZNAČKA',
  'Revision Symbol "%s"' => 'Symbol revízie „%s“',
  'Unable to open stdout temporary file ("%s") for writing.' => 'Nepodarilo sa otvoriť dočasný súbor stdout („%s“) na zápis.',
  'Class member access on instantiation was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => 'Prístup k členom triedy pri inštanciácii bol zavedený až v PHP 5.4, ale táto kódová základňa cieli na skoršiu verziu PHP. Tento výraz môžete prepísať pomocou `%s`.',
  'The name of this file differs from the name of the class or interface it declares. Rename the file to `%s`.' => 'Názov tohto súboru sa líši od názvu triedy alebo rozhrania, ktoré deklaruje. Premenujte súbor na `%s`.',
  'Deleted' => 'Odstránené',
  'Configuration value ("%s") defined in source "%s" is not valid.' => 'Konfiguračná hodnota („%s“) definovaná v zdroji „%s“ nie je platná.',
  'MULTIPLE "ONTO" BRANCHES' => 'VIACERO VETIEV „ONTO“',
  'The HTTP method \'%s\' is not supported. Supported HTTP methods are: %s.' => 'Metóda HTTP \'%s\' nie je podporovaná. Podporované metódy HTTP sú: %s.',
  'Some hunks could not be applied cleanly by the unix \'%s\' utility. Your working copy may be different from the revision\'s base, or you may be in the wrong subdirectory. You can export the raw patch file using \'%s\', and then try to apply it by fiddling with options to \'%s\' (particularly, %s), or manually. The output above, from \'%s\', may be helpful in figuring out what went wrong.' => 'Niektoré bloky sa nepodarilo čisto použiť unixovým nástrojom \'%s\'. Vaša pracovná kópia sa môže líšiť od základu revízie alebo sa možno nachádzate v nesprávnom podadresári. Surový súbor záplaty môžete exportovať pomocou \'%s\' a potom sa ho pokúsiť použiť pohrávaním sa s voľbami nástroja \'%s\' (najmä %s) alebo ručne. Výstup vyššie z \'%s\' môže pomôcť zistiť, čo sa pokazilo.',
  'Show the changes that will land. Does not modify the working copy or the remote.' => 'Zobraziť zmeny, ktoré sa začlenia. Neupravuje pracovnú kópiu ani vzdialené úložisko.',
  'PUSH STAGING' => 'ODOSLANIE DO PRÍPRAVNEJ OBLASTI',
  'SUBMITTING' => 'ODOSIELANIE',
  'Associate the working copy with a specific repository. Normally, %s can figure this association out on its own, but if your setup is unusual you can use this option to tell it what the desired value is.' => 'Priradiť pracovnú kópiu ku konkrétnemu repozitáru. Za normálnych okolností si %s dokáže toto priradenie zistiť sám, ale ak je vaše nastavenie nezvyčajné, môžete pomocou tejto voľby povedať, aká je požadovaná hodnota.',
  'Fetch URI: %s' => 'URI načítania: %s',
  'Default value for parameters with a true type hint can only be true.' => 'Predvolenou hodnotou parametrov s typovou nápovedou true môže byť len true.',
  'Remote "%s" was selected with the "--onto-remote" flag.' => 'Vzdialené úložisko „%s“ bolo zvolené prepínačom „--onto-remote“.',
  'it is the greatest common ancestor of the working directory and the commit you specified explicitly.' => 'je to najväčší spoločný predok pracovného adresára a commitu, ktorý ste výslovne zadali.',
  'IP address "%s" is not properly formatted. Expected an IPv4 address like "%s", or an IPv6 address like "%s".' => 'Adresa IP „%s“ nie je správne naformátovaná. Očakávala sa adresa IPv4 ako „%s“ alebo adresa IPv6 ako „%s“.',
  'Response Body: %s' => 'Telo odpovede: %s',
  'Default branch name to view on server. Defaults to "%s".' => 'Predvolený názov vetvy na zobrazenie na serveri. Predvolene „%s“.',
  'Do not print a success message.' => 'Nevypisovať správu o úspechu.',
  'The shift operators no longer accept negative shifts in PHP 7.0.' => 'Operátory posunu v PHP 7.0 už neprijímajú záporné posuny.',
  'Failed to read socket.' => 'Nepodarilo sa čítať zo soketu.',
  'Start in remote console mode.' => 'Spustiť v režime vzdialenej konzoly.',
  'Landing onto target "%s", selected by following tracking branches upstream to the closest remote branch.' => 'Začleňuje sa do cieľa „%s“ zvoleného sledovaním sledovacích vetiev v upstreame až po najbližšiu vzdialenú vetvu.',
  'In a "switch" statement, "continue;" is equivalent to "break;" but causes compile errors beginning with PHP 7.0.0.' => 'V príkaze „switch“ je „continue;“ ekvivalentné „break;“, ale od PHP 7.0.0 spôsobuje chyby pri kompilácii.',
  'Specifies the default behavior when "arc land" is run with no "--onto-remote" flag.' => 'Určuje predvolené správanie pri spustení „arc land“ bez prepínača „--onto-remote“.',
  'Copied Away' => 'Skopírované inam',
  'Expected to find "%s" in `%s` output, but did not.' => 'Očakávalo sa nájdenie „%s“ vo výstupe `%s`, ale nenašlo sa.',
  'you specified \'%s\' in your %s \'base\' configuration.' => 'zadali ste \'%s\' vo svojej konfigurácii \'base\' v %s.',
  '%s revision(s) have ongoing builds:' => array(
    '%s revízia má prebiehajúce zostavenia:',
    '%s revízie majú prebiehajúce zostavenia:',
    '%s revízií má prebiehajúce zostavenia:',
  ),
  'MERGE CONFLICTS' => 'KONFLIKTY ZLÚČENIA',
  'You must set PayPal API credentials!' => 'Musíte nastaviť poverenia API PayPal!',
  'Failed to create directory \'%s\'.' => 'Nepodarilo sa vytvoriť adresár \'%s\'.',
  'Symbol "%s" is ambiguous: it matches multiple markers (of type "%s"). Use an unambiguous identifier.' => 'Symbol „%s“ je nejednoznačný: zodpovedá viacerým značkám (typu „%s“). Použite jednoznačný identifikátor.',
  'Default Parameters' => 'Predvolené parametre',
  'copies' => 'kópie',
  'File \'%s\' mixes function (%s) and class/interface (%s) definitions in the same file. A file which declares a class or an interface MUST declare nothing else.' => 'Súbor \'%s\' mieša definície funkcií (%s) a tried/rozhraní (%s) v tom istom súbore. Súbor, ktorý deklaruje triedu alebo rozhranie, NESMIE deklarovať nič iné.',
  'Local commit "%s" (reachable from: %s) does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => 'Lokálny commit „%s“ (dosiahnuteľný z: %s) sa nedá čisto zlúčiť do „%s“. Vykonajte rebase alebo zlúčenie lokálnych zmien tak, aby sa dali čisto zlúčiť.',
  'Configuration option ("%s") defined by extension "%s" conflicts with an alias for another option ("%s"). The key and aliases of each option must be unique.' => 'Konfiguračná možnosť („%s“) definovaná rozšírením „%s“ je v konflikte s aliasom inej možnosti („%s“). Kľúč a aliasy každej možnosti musia byť jedinečné.',
  'Unable to determine repository for this change.' => 'Nepodarilo sa určiť repozitár pre túto zmenu.',
  'Provided path \'%s\' is not a %s library.' => 'Zadaná cesta \'%s\' nie je knižnica %s.',
  'Downloading binary data...' => 'Sťahujú sa binárne údaje...',
  'Unable to access %s or `%s` on this system to get system memory information.' => 'Na tomto systéme sa nedá pristupovať k %s ani k `%s` na získanie informácií o systémovej pamäti.',
  'Unable to locate xUnit console runner. Configure it with the `%s\' option in %s.' => 'Nepodarilo sa nájsť konzolový spúšťač xUnit. Nakonfigurujte ho voľbou `%s\' v %s.',
  'This working copy is configured to have an immutable local history, using the "history.immutable" configuration option. Amending the working copy will mutate local history.' => 'Táto pracovná kópia je nakonfigurovaná tak, aby mala nemennú lokálnu históriu, pomocou konfiguračnej možnosti „history.immutable“. Doplnenie pracovnej kópie zmutuje lokálnu históriu.',
  'You have uncommitted changes in the working copy ("%s") for this library ("%s"):' => 'V pracovnej kópii („%s“) tejto knižnice („%s“) máte necommitnuté zmeny:',
  'Set key "%s" = %s in %s config (was %s).' => 'Nastavený kľúč „%s“ = %s v konfigurácii %s (bol %s).',
  'Function %s is not implemented!' => 'Funkcia %s nie je implementovaná!',
  'Revision \'%s: %s\' was generated from \'%s\', but current working copy root is \'%s\'. Commit this revision anyway?' => 'Revízia \'%s: %s\' bola vygenerovaná z \'%s\', ale aktuálny koreň pracovnej kópie je \'%s\'. Napriek tomu commitnúť túto revíziu?',
  'Unable to write configuration: more than one writable source exists in the "%s" scope.' => 'Nepodarilo sa zapísať konfiguráciu: v rozsahu „%s“ existuje viac ako jeden zapisovateľný zdroj.',
  'Emit all symbols, including built-ins and declared externals.' => 'Vypísať všetky symboly vrátane vstavaných a deklarovaných externých.',
  'Convention: space before opening parenthesis in anonymous function declarations.' => 'Konvencia: medzera pred otváracou zátvorkou v deklaráciách anonymných funkcií.',
  'Reference assignments in array destructuring is not available before PHP 7.3.' => 'Priradenia referencií pri deštrukturalizácii polí nie sú dostupné pred PHP 7.3.',
  'The token "%s" is not formatted correctly. Valid API tokens should begin "cli-" and be 32 characters long. Make sure you visited the correct URI and copy/pasted the token correctly.' => 'Token „%s“ nie je správne naformátovaný. Platné tokeny API by mali začínať „cli-“ a mať 32 znakov. Uistite sa, že ste navštívili správne URI a token ste správne skopírovali.',
  'You follow a wide, straight path to the north and arrive in a grove of fruit trees after a few minutes of walking. The grass underfoot is thick and small insects flit through the air.' => 'Sledujete širokú, rovnú cestu na sever a po niekoľkých minútach chôdze prichádzate do hája ovocných stromov. Tráva pod nohami je hustá a vzduchom preletúva drobný hmyz.',
  'Specifies the default behavior when "arc land" is run with no "--onto" flag.' => 'Určuje predvolené správanie pri spustení „arc land“ bez prepínača „--onto“.',
  'Anonymous readonly classes are not available before PHP 8.3.' => 'Anonymné triedy readonly nie sú dostupné pred PHP 8.3.',
  'Functions which should not be used because they represent the unsafe usage of dynamic strings.' => 'Funkcie, ktoré by sa nemali používať, pretože predstavujú nebezpečné použitie dynamických reťazcov.',
  'Failed to load library at location "%s". This library is specified by "%s". Check that the library is up to date.' => 'Nepodarilo sa načítať knižnicu na umiestnení „%s“. Túto knižnicu určuje „%s“. Skontrolujte, či je knižnica aktuálna.',
  'Use of Close Tag `%s`' => 'Použitie uzatváracej značky `%s`',
  'TO UPGRADE: %s' => 'NA AKTUALIZÁCIU: %s',
  'No type ID for token type name \'%s\' in \'%s\' AAST.' => 'Žiadne ID typu pre názov typu tokenu \'%s\' v AAST \'%s\'.',
  'Ruleset for selecting commit ranges.' => 'Sada pravidiel na výber rozsahov commitov.',
  'Alias definitions form an unreasonably deep stack. A chain of aliases may not resolve more than %s times.' => array(
    'Definície aliasov tvoria neprimerane hlboký zásobník. Reťaz aliasov sa nesmie vyhodnocovať viac ako %s raz.',
    'Definície aliasov tvoria neprimerane hlboký zásobník. Reťaz aliasov sa nesmie vyhodnocovať viac ako %s razy.',
    'Definície aliasov tvoria neprimerane hlboký zásobník. Reťaz aliasov sa nesmie vyhodnocovať viac ako %s ráz.',
  ),
  'Default pager command.' => 'Predvolený príkaz stránkovača.',
  'Expected exactly one argument to "remote(...)" with a remote name.' => 'Očakával sa presne jeden argument pre „remote(...)“ s názvom vzdialeného úložiska.',
  'Unable to find \'%s\' file to configure linters. Create an \'%s\' file in the root directory of the working copy.' => 'Nepodarilo sa nájsť súbor \'%s\' na konfiguráciu linterov. Vytvorte súbor \'%s\' v koreňovom adresári pracovnej kópie.',
  'HTTP extension "%s" (of class "%s") returned an invalid result from "%s": expected null, or an object of class "%s".' => 'Rozšírenie HTTP „%s“ (triedy „%s“) vrátilo z „%s“ neplatný výsledok: očakávalo sa null alebo objekt triedy „%s“.',
  'Unable to find any git commit named \'%s\' in this repository.' => 'V tomto repozitári sa nepodarilo nájsť žiadny commit gitu s názvom \'%s\'.',
  'Lists bookmarks in the working copy, annotated with additional information
about review status.' => 'Vypíše záložky v pracovnej kópii doplnené o ďalšie informácie
o stave posudzovania.',
  'Use `%s` to instantiate the current class.' => 'Na inštanciáciu aktuálnej triedy použite `%s`.',
  'Specify a key and a value.' => 'Zadajte kľúč a hodnotu.',
  'Options \'%s\', \'%s\' and \'%s\' are not compatible. Choose exactly one export format.' => 'Voľby \'%s\', \'%s\' a \'%s\' nie sú kompatibilné. Zvoľte presne jeden formát exportu.',
  'Fetching "%s" from remote "%s"...' => 'Načítava sa „%s“ zo vzdialeného úložiska „%s“...',
  'Limit the amount of tasks outputted, default is all.' => 'Obmedziť počet vypísaných úloh, predvolene všetky.',
  'Amend HEAD with lint patches?' => 'Doplniť HEAD o záplaty lintu?',
  'Using `%s` as the only type hint is not allowed before PHP 8.2.' => 'Použitie `%s` ako jedinej typovej nápovedy nie je povolené pred PHP 8.2.',
  'Connecting to "%s"...' => 'Pripája sa k „%s“...',
  'Disable ANSI terminal codes, printing plain text with no color or style.' => 'Zakázať terminálové kódy ANSI a vypisovať obyčajný text bez farieb a štýlov.',
  'Unrecognized argument \'%s\'. Try \'%s\'.' => 'Nerozpoznaný argument \'%s\'. Skúste \'%s\'.',
  'Library name should contain only lowercase letters and hyphens.' => 'Názov knižnice by mal obsahovať iba malé písmená a spojovníky.',
  'Land %s commit(s)?' => array(
    'Začleniť %s commit?',
    'Začleniť %s commity?',
    'Začleniť %s commitov?',
  ),
  '%s does not update any revision.' => '%s neaktualizuje žiadnu revíziu.',
  'Unable to find any libraries under the current working directory. To create a library, provide a path.' => 'Pod aktuálnym pracovným adresárom sa nepodarilo nájsť žiadne knižnice. Ak chcete vytvoriť knižnicu, zadajte cestu.',
  '<default>' => '<predvolené>',
  'Do not run lint.' => 'Nespúšťať lint.',
  'If you intended to update an existing revision, use:' => 'Ak ste chceli aktualizovať existujúcu revíziu, použite:',
  'Override configured unit engine for this project.' => 'Prepísať nakonfigurovaný nástroj na jednotkové testy pre tento projekt.',
  'Expected \'%s\' in unified diff.' => 'Očakávalo sa \'%s\' v unified diffe.',
  'Unable to upload file: failed to determine filesize of path "%s".' => 'Nepodarilo sa nahrať súbor: nepodarilo sa určiť veľkosť súboru na ceste „%s“.',
  'String does not require double quotes. For consistency, prefer single quotes.' => 'Reťazec nevyžaduje dvojité úvodzovky. Kvôli konzistentnosti uprednostnite jednoduché úvodzovky.',
  'Methods should have their visibility declared explicitly.' => 'Metódy by mali mať výslovne deklarovanú viditeľnosť.',
  'Merge strategy "%s" specified in "%s" configuration is unknown. Supported merge strategies are: %s.' => 'Stratégia zlučovania „%s“ zadaná v konfigurácii „%s“ je neznáma. Podporované stratégie zlučovania sú: %s.',
  'Relative commit \'%s\' is not the name of a commit!' => 'Relatívny commit \'%s\' nie je názvom commitu!',
  'Associates this working copy with a specific server.' => 'Priradí túto pracovnú kópiu ku konkrétnemu serveru.',
  'You must configure \'%s\' with the name of a linter in order to use %s.' => 'Aby ste mohli použiť %2$s, musíte nakonfigurovať \'%s\' s názvom lintera.',
  'Projects to assign to the task.' => 'Projekty, ktoré sa majú priradiť k úlohe.',
  'Unknown event %s' => 'Neznáma udalosť %s',
  'Not installing API token.' => 'Token API sa neinštaluje.',
  'Config: Did not find system configuration at "%s".' => 'Konfigurácia: Systémová konfigurácia sa na „%s“ nenašla.',
  'Continue?' => 'Pokračovať?',
  'Failed to push changes to staging area. Correct the issue, or use --skip-staging to skip this step.' => 'Nepodarilo sa odoslať zmeny do prípravnej oblasti. Opravte problém alebo tento krok preskočte pomocou --skip-staging.',
  'Execution of "hg log" emitted an unexpected line ("%s").' => 'Vykonanie „hg log“ vypísalo neočakávaný riadok („%s“).',
  '%dm%02ds' => '%dm%02ds',
  'you explicitly specified the empty tree.' => 'výslovne ste zadali prázdny strom.',
  'Apply this patch to %s?' => 'Použiť túto záplatu na %s?',
  'Commit Message' => 'Správa commitu',
  'Unrecognized lint message code "%s".' => 'Nerozpoznaný kód správy lintu „%s“.',
  'Lists branches in the working copy, annotated with additional information
about review status.' => 'Vypíše vetvy v pracovnej kópii doplnené o ďalšie informácie
o stave posudzovania.',
  'List statements should use the `%s` statement syntax.' => 'Príkazy list by mali používať syntax príkazu `%s`.',
  'Constants on traits are not available before PHP 8.2.' => 'Konštanty v traitách nie sú dostupné pred PHP 8.2.',
  'Updating %s: %s' => 'Aktualizuje sa %s: %s',
  'Current Value' => 'Aktuálna hodnota',
  'Install jsonlint using `%s`.' => 'Nainštalujte jsonlint pomocou `%s`.',
  'Create %s new remote bookmark(s)?' => array(
    'Vytvoriť %s novú vzdialenú záložku?',
    'Vytvoriť %s nové vzdialené záložky?',
    'Vytvoriť %s nových vzdialených záložiek?',
  ),
  'identify symbols in PHP source files' => 'identifikovať symboly v zdrojových súboroch PHP',
  '%s does not support the "%s" modifier.' => '%s nepodporuje modifikátor „%s“.',
  'This `%s` has a nonempty block which does not end with `%s`, `%s`, `%s`, `%s` or `%s`. Did you forget to add one of those? If you intend to fall through, add a `%s` comment to silence this warning.' => 'Tento `%s` má neprázdny blok, ktorý nekončí na `%s`, `%s`, `%s`, `%s` ani `%s`. Nezabudli ste niektorý z nich pridať? Ak chcete zámerne prepadnúť do ďalšej vetvy, pridajte komentár `%s`, aby ste toto upozornenie potlačili.',
  'Push URI: %s' => 'URI odoslania: %s',
  'Found the wrong number of hunk lines.' => 'Našiel sa nesprávny počet riadkov bloku.',
  'Land only the changes directly named by arguments, instead of all reachable ancestors.' => 'Začleniť iba zmeny priamo pomenované argumentmi namiesto všetkých dosiahnuteľných predkov.',
  'A mercurial commit hash in the commit range is already attached to the Differential revision.' => 'Hash commitu mercurial v rozsahu commitov je už pripojený k revízii Differential.',
  'Install this token anyway?' => 'Napriek tomu nainštalovať tento token?',
  'The remote host closed the connection before the request completed.' => 'Vzdialený hostiteľ zavrel spojenie skôr, než sa požiadavka dokončila.',
  '(Assuming \'%s\' is the British spelling of \'%s\'.)' => '(Predpokladá sa, že \'%s\' je britský pravopis slova \'%s\'.)',
  'You stand in the middle of a small clearing in the woods.' => 'Stojíte uprostred malej lesnej čistinky.',
  'Expected JSON response from WordPress.com.' => 'Očakávala sa odpoveď JSON od WordPress.com.',
  'Oct' => 'okt',
  '`%s` expects an object instance, constant given.' => '`%s` očakáva inštanciu objektu, bola zadaná konštanta.',
  'Launching editor "%s"...' => 'Spúšťa sa editor „%s“...',
  'Language Construct Parentheses' => 'Zátvorky jazykových konštrukcií',
  'Force targets to be interpreted as naming particular types of resources.' => 'Vynútiť, aby sa ciele interpretovali ako pomenúvajúce konkrétne typy zdrojov.',
  'Blacklisted functions which should not be used.' => 'Zakázané funkcie, ktoré by sa nemali používať.',
  'Show every option, including standard options like this one.' => 'Zobraziť každú voľbu vrátane štandardných volieb, ako je táto.',
  'Uploading chunks (%s chunks to upload).' => array(
    'Nahrávajú sa bloky (na nahratie %s blok).',
    'Nahrávajú sa bloky (na nahratie %s bloky).',
    'Nahrávajú sa bloky (na nahratie %s blokov).',
  ),
  'Specify at most one URI.' => 'Zadajte najviac jedno URI.',
  'Shows the current version.' => 'Zobrazí aktuálnu verziu.',
  'Enforces basic text rules like line length, character encoding, and trailing whitespace.' => 'Vynucuje základné textové pravidlá ako dĺžka riadka, kódovanie znakov a biele znaky na konci.',
  'Too many arguments: provide exactly one argument.' => 'Príliš veľa argumentov: zadajte presne jeden argument.',
  'Close only if the repository is untracked and the revision is accepted. Continue even if the close can\'t happen. This is a soft version of \'close-revision\' used by other workflows.' => 'Zavrieť iba vtedy, ak repozitár nie je sledovaný a revízia je schválená. Pokračovať aj vtedy, ak sa zavretie nedá vykonať. Toto je mäkká verzia \'close-revision\' používaná inými pracovnými postupmi.',
  'Automatic branch naming from tasks is not supported yet for %s.' => 'Automatické pomenúvanie vetiev podľa úloh zatiaľ nie je pre %s podporované.',
  'Object specification "%s" is unknown, expected a specification like "commit(HEAD)".' => 'Špecifikácia objektu „%s“ je neznáma, očakávala sa špecifikácia ako „commit(HEAD)“.',
  'Successfully committed patch.' => 'Záplata bola úspešne commitnutá.',
  '`%s` class `%s` has an invalid ID constant. ID must be an integer.' => '`%s` trieda `%s` má neplatnú konštantu ID. ID musí byť celé číslo.',
  'Use `%s` to detect issues with CSS source files.' => 'Na zisťovanie problémov v zdrojových súboroch CSS použite `%s`.',
  'UPDATE' => 'AKTUALIZÁCIA',
  'Unable to determine current system locale (call to "setlocale(LC_ALL, 0)" failed).' => 'Nepodarilo sa určiť aktuálnu systémovú lokalizáciu (volanie „setlocale(LC_ALL, 0)“ zlyhalo).',
  'Downloaded hash does not match: expected any of %s, got %s.' => 'Stiahnutý hash sa nezhoduje: očakával sa niektorý z %s, získal sa %s.',
  'You may not set new credentials after authenticating conduit.' => 'Po overení conduit už nemôžete nastaviť nové poverenia.',
  'With %s, use uglier (but more efficient) formatting.' => 'S %s použiť škaredšie (ale efektívnejšie) formátovanie.',
  'OPTION REFERENCE' => 'REFERENCIA VOLIEB',
  'Message begins:' => 'Správa začína:',
  'Use the "alias" workflow to review aliases.' => 'Na prezretie aliasov použite pracovný postup „alias“.',
  'This codebase targets PHP %s, but `%s` was removed in PHP %s.' => 'Táto kódová základňa cieli na PHP %s, ale `%s` bolo odstránené v PHP %s.',
  'Additional rules for determining base revision.' => 'Ďalšie pravidlá na určenie základnej revízie.',
  'Rule \'%s\' discarded empty context!' => 'Pravidlo \'%s\' zahodilo prázdny kontext!',
  'Usage of `%s` is preferred over `%s`.' => 'Použitie `%s` sa uprednostňuje pred `%s`.',
  'PHPUnit configuration file was not found in %s' => 'Konfiguračný súbor PHPUnit sa v %s nenašiel',
  'Not String Concatenation' => 'Nie je zreťazenie reťazcov',
  'STAGING FAILED' => 'PRÍPRAVA ZLYHALA',
  'Name of a concrete subclass of `%s` which enforces more granular naming convention rules for symbols.' => 'Názov konkrétnej podtriedy triedy `%s`, ktorá vynucuje jemnejšie pravidlá konvencií pomenúvania symbolov.',
  'Convention: logical and arithmetic operators should be surrounded by whitespace.' => 'Konvencia: logické a aritmetické operátory by mali byť obklopené bielymi znakmi.',
  'Space Before Unary Postfix Operator' => 'Medzera pred unárnym postfixovým operátorom',
  'Expected any exception, got no exception.' => 'Očakávala sa akákoľvek výnimka, nezískala sa žiadna výnimka.',
  'Discard these changes before running "arc upgrade".' => 'Pred spustením „arc upgrade“ tieto zmeny zahoďte.',
  'Failed to copy file from "%s" to "%s": %s' => 'Nepodarilo sa skopírovať súbor z „%s“ do „%s“: %s',
  'The test failed, but this change is probably not what broke it. For example, it might have already been failing.' => 'Test zlyhal, ale túto zmenu pravdepodobne nespôsobila. Napríklad mohol zlyhávať už predtým.',
  'Invalid Default Parameter' => 'Neplatný predvolený parameter',
  'Class constants cannot be marked as final before PHP 8.1.' => 'Konštanty tried sa nedajú označiť ako final pred PHP 8.1.',
  'String components of a sort vector must not contain NULL bytes.' => 'Reťazcové komponenty vektora zoradenia nesmú obsahovať bajty NULL.',
  'Using saved response to prompt "%s".' => 'Používa sa uložená odpoveď na výzvu „%s“.',
  'The `%s` syntax was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => 'Syntax `%s` bola zavedená až v PHP 5.4, ale táto kódová základňa cieli na skoršiu verziu PHP. Tento výraz môžete prepísať pomocou `%s`.',
  'Prompts the user to stash changes and continue when the working copy has untracked, uncommitted, or unstaged changes.' => 'Vyzve používateľa, aby odložil zmeny do skrýše a pokračoval, keď pracovná kópia obsahuje nesledované, necommitnuté alebo nepripravené zmeny.',
  'This file contains unnecessary trailing whitespace.' => 'Tento súbor obsahuje zbytočné biele znaky na konci.',
  'Not a symlink!' => 'Nie je symbolický odkaz!',
  'Halting all rule processing.' => 'Zastavuje sa všetko spracovanie pravidiel.',
  'Default value for parameters with a float type hint can only be an integer or a floating point number.' => 'Predvolenou hodnotou parametrov s typovou nápovedou float môže byť len celé číslo alebo číslo s pohyblivou desatinnou čiarkou.',
  'Configured lint engine "%s" is not a subclass of "%s", but must be.' => 'Nakonfigurovaný lintovací nástroj „%s“ nie je podtriedou „%s“, ale musí ňou byť.',
  'This repository API (\'%s\') does not support the requested capability.' => 'Toto API repozitára (\'%s\') nepodporuje požadovanú schopnosť.',
  'Land %s revision(s) that are already published?' => array(
    'Začleniť %s revíziu, ktorá je už publikovaná?',
    'Začleniť %s revízie, ktoré sú už publikované?',
    'Začleniť %s revízií, ktoré sú už publikované?',
  ),
  'Expected to find "%s" in "%s" output, but did not.' => 'Očakávalo sa nájdenie „%s“ vo výstupe „%s“, ale nenašlo sa.',
  'Golint is a linter for Go source code.' => 'Golint je linter pre zdrojový kód v jazyku Go.',
  '%s is broken.' => '%s je pokazené.',
  '"%s" class "%s" has an invalid "%s" property. Field constants must be strings and no more than %s bytes in length.' => array(
    
    array(
      
      array(
        
        array(
          '„%s“ trieda „%s“ má neplatnú vlastnosť „%s“. Konštanty polí musia byť reťazce s dĺžkou najviac %s bajt.',
          '„%s“ trieda „%s“ má neplatnú vlastnosť „%s“. Konštanty polí musia byť reťazce s dĺžkou najviac %s bajty.',
          '„%s“ trieda „%s“ má neplatnú vlastnosť „%s“. Konštanty polí musia byť reťazce s dĺžkou najviac %s bajtov.',
        ),
      ),
    ),
  ),
  'GENERATE' => 'GENEROVANIE',
  'Empty Block Statement' => 'Prázdny blokový príkaz',
  'Properties cannot be declared "abstract".' => 'Vlastnosti sa nedajú deklarovať ako „abstract“.',
  'Working copy' => 'Pracovná kópia',
  'Unknown Hardpoint request specification (of type "%s").' => 'Neznáma špecifikácia požiadavky Hardpoint (typu „%s“).',
  'Undefined Lint Message' => 'Nedefinovaná správa lintu',
  'Unknown Command' => 'Neznámy príkaz',
  'Submitting changes to "%s".' => 'Odosielajú sa zmeny do „%s“.',
  'Configure a default merge strategy for "arc land".' => 'Nakonfigurovať predvolenú stratégiu zlučovania pre „arc land“.',
  'Downloading binary data for \'%s\'...' => 'Sťahujú sa binárne údaje pre \'%s\'...',
  '**upload** [__options__] -- __file__ [__file__ ...]' => '**upload** [__options__] -- __file__ [__file__ ...]',
  'Unrecognized key \'%s\' in argument specification. Recognized keys are: %s.' => 'Nerozpoznaný kľúč \'%s\' v špecifikácii argumentu. Rozpoznané kľúče sú: %s.',
  'The SSL CA Bundles that we tried to use could not be read or are not formatted correctly.' => 'Balíky SSL CA, ktoré sme sa pokúsili použiť, sa nepodarilo prečítať alebo nie sú správne naformátované.',
  'DATA' => 'ÚDAJE',
  'Unary prefix operators should not be followed by whitespace.' => 'Za unárnymi prefixovými operátormi by nemali nasledovať biele znaky.',
  'You can not use "--current" when generating rules.' => 'Pri generovaní pravidiel nemôžete použiť „--current“.',
  'Unable to fork!' => 'Nepodarilo sa vykonať fork!',
  'This workflow (\'%s\') requires a working copy, override %s to return true.' => 'Tento pracovný postup (\'%s\') vyžaduje pracovnú kópiu, prepíšte %s tak, aby vracalo true.',
  'No revision specified with "--revision", and no revisions found that match the current working copy state. Use "--revision <id>" to specify which revision you want to amend.' => 'Pomocou „--revision“ nebola zadaná žiadna revízia a nenašli sa žiadne revízie, ktoré by zodpovedali aktuálnemu stavu pracovnej kópie. Pomocou „--revision <id>“ určte, ktorú revíziu chcete doplniť.',
  'Call to "curl_setopt(...) failed for option key "%s".' => 'Volanie „curl_setopt(...) zlyhalo pre kľúč voľby „%s“.',
  'EXCEPTION' => 'VÝNIMKA',
  'Failed to split line "%s" from "git log".' => 'Nepodarilo sa rozdeliť riadok „%s“ z „git log“.',
  '---' => '---',
  'Failed to write %d bytes to \'%s\'.' => 'Nepodarilo sa zapísať %d bajtov do \'%s\'.',
  'The "merge" strategy generates a merge commit when publishing that retains local checkpoint commits (but produces a nonlinear published history). Select this strategy if you do not want "arc land" to discard checkpoint commits.' => 'Stratégia „merge“ pri publikovaní vytvorí zlučovací commit, ktorý zachová lokálne kontrolné commity (ale vytvorí nelineárnu publikovanú históriu). Zvoľte túto stratégiu, ak nechcete, aby „arc land“ zahodil kontrolné commity.',
  'Will merge into remote "%s", selected with the "--into" flag.' => 'Zlúči sa do vzdialeného úložiska „%s“ zvoleného prepínačom „--into“.',
  'When running noninteractively, you MUST provide "--" to all commands (even if they take no arguments).' => 'Pri neinteraktívnom spúšťaní MUSÍTE ku všetkým príkazom pridať „--“ (aj keď neprijímajú žiadne argumenty).',
  'Parse error on line %d at column %d: %s' => 'Chyba analýzy na riadku %d v stĺpci %d: %s',
  'No viable means to download llaville/compatinfo-db is available.' => 'Nie je dostupný žiadny použiteľný spôsob stiahnutia llaville/compatinfo-db.',
  'Contents Modified' => 'Obsah upravený',
  'Output aliases in JSON format.' => 'Vypísať aliasy vo formáte JSON.',
  'Flag --skip-staging was specified.' => 'Bol zadaný prepínač --skip-staging.',
  'Child in position \'%d\' is not of type \'%s\': %s' => 'Potomok na pozícii \'%d\' nie je typu \'%s\': %s',
  'Parameter to %s must be a Differential Revision number.' => 'Parameter pre %s musí byť číslo revízie Differential.',
  '%s currently supports only one file attachment for each parameter name. You are trying to attach two different files with the same parameter, "%s".' => '%s momentálne podporuje iba jednu prílohu súboru pre každý názov parametra. Pokúšate sa priložiť dva rôzne súbory s rovnakým parametrom „%s“.',
  'Arguments "--into-local", "--into-remote", and "--into-empty" are mutually exclusive.' => 'Argumenty „--into-local“, „--into-remote“ a „--into-empty“ sa navzájom vylučujú.',
  'Use `%s` for local static member references.' => 'Na lokálne odkazy na statické členy používajte `%s`.',
  'Wrote updated completion rules for "%s" to: %s.' => 'Aktualizované pravidlá dopĺňania pre „%s“ boli zapísané do: %s.',
  '`%s` Methods Cannot Be Marked `%s`' => 'Metódy `%s` sa nedajú označiť ako `%s`',
  'Leading Whitespace at BOF' => 'Úvodné biele znaky na začiatku súboru',
  'No library currently exists at the path "%s"...' => 'Na ceste „%s“ momentálne neexistuje žiadna knižnica...',
  'Show committed and abandoned revisions.' => 'Zobraziť commitnuté a opustené revízie.',
  'Unable to locate %s.' => 'Nepodarilo sa nájsť %s.',
  'The `%s` operator is not available before PHP 5.6.' => 'Operátor `%s` nie je dostupný pred PHP 5.6.',
  'SAVE STASH' => 'ULOŽENIE DO SKRÝŠE',
  'Wildcard arguments may not specify a parameter.' => 'Zástupné argumenty nesmú určovať parameter.',
  'After creating a paste, open it in a web browser.' => 'Po vytvorení vloženého textu ho otvoriť vo webovom prehliadači.',
  'The node \'%s\' is not known. Call %s to seed the graph with nodes.' => 'Uzol \'%s\' nie je známy. Zavolajte %s, aby sa graf naplnil uzlami.',
  'Do not run any sanity checks.' => 'Nespúšťať žiadne kontroly správnosti.',
  'Execution of "git cat-file --batch-check" emitted an unexpected number of lines, expected %s but got %s.' => 'Vykonanie „git cat-file --batch-check“ vypísalo neočakávaný počet riadkov, očakávalo sa %s, ale získalo sa %s.',
  'Classes should extend from `%s` or from some other class. All classes (except for `%s` itself) should have a base class.' => 'Triedy by mali dediť z `%s` alebo z nejakej inej triedy. Všetky triedy (okrem samotnej `%s`) by mali mať základnú triedu.',
  'Missing VCS support.' => 'Chýbajúca podpora VCS.',
  'Bookmark name %s already exists; trying a new name.' => 'Názov záložky %s už existuje; skúša sa nový názov.',
  'Alias definitions form a cycle which can not be resolved: %s.' => 'Definície aliasov tvoria cyklus, ktorý sa nedá vyriešiť: %s.',
  'Arc unit does not currently support %s in SVN.' => 'Arc unit momentálne nepodporuje %s v SVN.',
  'Argument Error' => 'Chyba argumentu',
  'Multiple "final" modifiers are not allowed.' => 'Viacero modifikátorov „final“ nie je povolených.',
  'Flag "--lang" is not supported when reading pastes.' => 'Prepínač „--lang“ nie je pri čítaní vložených textov podporovaný.',
  'Allows you to make a raw Conduit method call:

  - Run this command from a working directory.
  - Call parameters are required, and read as a JSON blob from stdin.
  - Results are written to stdout as a JSON blob.

This workflow is primarily useful for writing scripts. Examples:

  $ echo \'{}\' | arc call-conduit conduit.ping --
  $ echo \'{"phid":"PHID-FILE-xxxx"}\' | arc call-conduit file.download --' => 'Umožňuje vykonať surové volanie metódy Conduit:

  - Tento príkaz spúšťajte z pracovného adresára.
  - Parametre volania sú povinné a čítajú sa ako blob JSON zo stdin.
  - Výsledky sa zapisujú na stdout ako blob JSON.

Tento pracovný postup je užitočný najmä pri písaní skriptov. Príklady:

  $ echo \'{}\' | arc call-conduit conduit.ping --
  $ echo \'{"phid":"PHID-FILE-xxxx"}\' | arc call-conduit file.download --',
  'Two argument specifications have the same name ("%s").' => 'Dve špecifikácie argumentov majú rovnaký názov („%s“).',
  '(No commits.)' => '(Žiadne commity.)',
  'This working copy has no metadata directory, so you can not resolve metadata paths within it.' => 'Táto pracovná kópia nemá adresár metaúdajov, takže v nej nemôžete vyhodnocovať cesty metaúdajov.',
  'Export change as a unified patch. This format is less complete than git patches or arc bundles. These patches can be applied with \'%s\' or \'%s\'.' => 'Exportovať zmenu ako unified záplatu. Tento formát je menej úplný ako záplaty git alebo balíky arc. Tieto záplaty sa dajú použiť pomocou \'%s\' alebo \'%s\'.',
  'Perforce sync failed! Fix the error and run "arc land" again.' => 'Synchronizácia Perforce zlyhala! Opravte chybu a spustite „arc land“ znova.',
  'Failed to close file handle.' => 'Nepodarilo sa zavrieť rukoväť súboru.',
  'Name files using only letters, numbers, period, hyphen and underscore.' => 'Súbory pomenúvajte iba pomocou písmen, číslic, bodky, spojovníka a podčiarkovníka.',
  'Call to "curl_setopt(...)" returned "false".' => 'Volanie „curl_setopt(...)“ vrátilo „false“.',
  'Unable to set socket nonblocking!' => 'Nepodarilo sa nastaviť soket ako neblokujúci!',
  'Generator delegation (`%s`) is not available before PHP 7.0.' => 'Delegovanie generátorov (`%s`) nie je dostupné pred PHP 7.0.',
  'Unable to upload file chunks: %s' => 'Nepodarilo sa nahrať bloky súboru: %s',
  'it is the first ancestor of %s that has a diff and is the gca or a descendant of the gca with \'%s\', specified by \'%s\' in your %s \'base\' configuration.' => 'je to prvý predok %s, ktorý má diff a je gca alebo potomkom gca s \'%s\', zadaným pomocou \'%s\' vo vašej konfigurácii \'base\' v %s.',
  'Unsupported base85 encoding mode "%s".' => 'Nepodporovaný režim kódovania base85 „%s“.',
  'The configuration key "%s" is not recognized by arc. It may be misspelled or out of date.' => 'Konfiguračný kľúč „%s“ arc nepozná. Môže byť preklepnutý alebo zastaraný.',
  'Failed to read patch from stdin!' => 'Nepodarilo sa načítať záplatu zo stdin!',
  '#%d: %s' => '#%d: %s',
  'Server URI "%s" must include a protocol and domain. It should be in the form "%s".' => 'URI servera „%s“ musí obsahovať protokol a doménu. Malo by byť v tvare „%s“.',
  'PHP Coding Standards for Phutil libraries.' => 'Kódovacie štandardy PHP pre knižnice Phutil.',
  'Specify a string (or list of strings) identifying the interpreter which should be used to invoke the linter binary. If you provide a list of possible interpreters, the first one that exists will be used.' => 'Zadajte reťazec (alebo zoznam reťazcov) určujúci interpret, ktorý sa má použiť na spustenie binárneho súboru lintera. Ak zadáte zoznam možných interpretov, použije sa prvý, ktorý existuje.',
  'Channel closed while flushing output!' => 'Kanál sa zavrel počas vyprázdňovania výstupu!',
  'Install CoffeeLint using `%s`.' => 'Nainštalujte CoffeeLint pomocou `%s`.',
  'Multi-lined arrays should have trailing commas.' => 'Viacriadkové polia by mali mať čiarku na konci.',
  'Configuration source ("%s") defines an invalid alias, which will be ignored: %s' => 'Konfiguračný zdroj („%s“) definuje neplatný alias, ktorý sa bude ignorovať: %s',
  'Your \'%s\' file is not a valid JSON file.' => 'Váš súbor \'%s\' nie je platný súbor JSON.',
  'it is specified by \'%s\' in your %s \'base\' configuration.' => 'je určený pomocou \'%s\' vo vašej konfigurácii \'base\' v %s.',
  'These %s revision(s) have changes planned:' => array(
    'Táto revízia má naplánované zmeny:',
    'Tieto %s revízie majú naplánované zmeny:',
    'Týchto %s revízií má naplánované zmeny:',
  ),
  'Use __%s__ to show additional options.' => 'Ďalšie voľby zobrazíte pomocou __%s__.',
  'No repositories matched the query. Check that your configuration is correct, or use "%s" to select a repository explicitly.' => 'Dopytu nevyhovel žiadny repozitár. Skontrolujte, či je vaša konfigurácia správna, alebo pomocou „%s“ vyberte repozitár výslovne.',
  'Unable to upload file: path "%s" is not readable.' => 'Nepodarilo sa nahrať súbor: cesta „%s“ sa nedá čítať.',
  'Examining paths for linter \'%s\'.' => 'Skúmajú sa cesty pre linter \'%s\'.',
  'Expected to find an integer value for meminfo key "%s" in meminfo source "%s", found "%s".' => 'Očakávalo sa nájdenie celočíselnej hodnoty pre kľúč meminfo „%s“ v zdroji meminfo „%s“, našlo sa „%s“.',
  'Unable to list contents of directory \'%s\'.' => 'Nepodarilo sa vypísať obsah adresára \'%s\'.',
  'You can not read the result buffer while streaming results to disk: there is no in-memory buffer to read.' => 'Vyrovnávaciu pamäť výsledkov nemôžete čítať počas streamovania výsledkov na disk: neexistuje žiadna vyrovnávacia pamäť v pamäti, ktorá by sa dala čítať.',
  'File \'%s\' declares more than one class or interface (%s). A file which declares a class or interface MUST declare nothing else.' => 'Súbor \'%s\' deklaruje viac ako jednu triedu alebo rozhranie (%s). Súbor, ktorý deklaruje triedu alebo rozhranie, NESMIE deklarovať nič iné.',
  'NEW LIBRARY' => 'NOVÁ KNIŽNICA',
  'Show the amended commit message, without modifying the working copy.' => 'Zobraziť doplnenú správu commitu bez úpravy pracovnej kópie.',
  'Downloading "%s" (%s byte(s)) to "%s"...' => array(
    
    array(
      'Sťahuje sa „%s“ (%s bajt) do „%s“...',
      'Sťahuje sa „%s“ (%s bajty) do „%s“...',
      'Sťahuje sa „%s“ (%s bajtov) do „%s“...',
    ),
  ),
  'Type of setting \'%s\' must be list.' => 'Typ nastavenia \'%s\' musí byť zoznam.',
  'When creating a revision, add CCs.' => 'Pri vytváraní revízie pridať kópie.',
  'Specify a string (or list of strings) identifying the binary which should be invoked to execute this linter. This overrides the default binary. If you provide a list of possible binaries, the first one which exists will be used.' => 'Zadajte reťazec (alebo zoznam reťazcov) určujúci binárny súbor, ktorý sa má spustiť na vykonanie tohto lintera. Toto prepíše predvolený binárny súbor. Ak zadáte zoznam možných binárnych súborov, použije sa prvý, ktorý existuje.',
  'Failed to open file!' => 'Nepodarilo sa otvoriť súbor!',
  'Confirms that revisions with ongoing builds should land.' => 'Potvrdzuje, že sa majú začleniť aj revízie s prebiehajúcimi zostaveniami.',
  'Expected JSON response from Twitch.' => 'Očakávala sa odpoveď JSON od služby Twitch.',
  'No specification exists for argument "%s"!' => 'Pre argument „%s“ neexistuje žiadna špecifikácia!',
  'Two workflows with name \'%s!' => 'Dva pracovné postupy s názvom \'%s!',
  'Class symbol "%s" should be written as "%s".' => 'Symbol triedy „%s“ by sa mal písať ako „%s“.',
  'Accepted' => 'Schválené',
  'Append to this file?' => 'Pripojiť k tomuto súboru?',
  'Empty files usually don\'t serve any useful purpose.' => 'Prázdne súbory zvyčajne neslúžia na nič užitočné.',
  'Specify two or more files to weld together.' => 'Zadajte dva alebo viac súborov, ktoré sa majú zvariť dokopy.',
  'Magic constants should be uppercase.' => 'Magické konštanty by mali byť veľkými písmenami.',
  'CASCADE' => 'KASKÁDA',
  '%s REVISION(S) HAVE CHANGES PLANNED' => array(
    '%s REVÍZIA MÁ NAPLÁNOVANÉ ZMENY',
    '%s REVÍZIE MAJÚ NAPLÁNOVANÉ ZMENY',
    '%s REVÍZIÍ MÁ NAPLÁNOVANÉ ZMENY',
  ),
  'You are not the author of \'%s: %s\'. Commit this revision anyway?' => 'Nie ste autorom \'%s: %s\'. Napriek tomu commitnúť túto revíziu?',
  'Lookup of encoding in project failed: %s' => 'Vyhľadanie kódovania v projekte zlyhalo: %s',
  'Concatenation Spacing' => 'Rozostupy pri zreťazení',
  'Array item with key \'%s\' must be of type array, %s given.' => 'Položka poľa s kľúčom \'%s\' musí byť typu pole, bolo zadané %s.',
  'No mode provided for path "%s".' => 'Pre cestu „%s“ nebol zadaný žiadny režim.',
  'PHP-Parser Lint' => 'Lint PHP-Parser',
  'LOG IN' => 'PRIHLÁSENIE',
  'Final property promotion is not available before PHP 8.5.' => 'Povýšenie vlastností final nie je dostupné pred PHP 8.5.',
  'Ignore the changes to these %s submodule(s) and continue?' => array(
    'Ignorovať zmeny v tomto submodule a pokračovať?',
    'Ignorovať zmeny v týchto submoduloch a pokračovať?',
  ),
  'Variable Reused As Iterator' => 'Premenná opätovne použitá ako iterátor',
  '(regenerate projects for %s)' => '(znovu vygenerovať projekty pre %s)',
  'Always update a specific revision.' => 'Vždy aktualizovať konkrétnu revíziu.',
  'In multi-line use declarations, each variable should be on a separate line.' => 'Vo viacriadkových deklaráciách use by mala byť každá premenná na samostatnom riadku.',
  'Partial Catch' => 'Čiastočné zachytenie',
  'Call to "assertCaught(<junk>, ...)" passed bad expected value. expected result. Expected null, Exception, or Throwable; got: %s.' => 'Volanie „assertCaught(<junk>, ...)“ odovzdalo nesprávnu očakávanú hodnotu. očakávaný výsledok. Očakávalo sa null, Exception alebo Throwable; získalo sa: %s.',
  'Example Value' => 'Príklad hodnoty',
  'Dynamic expressions cannot be used as initializers for static variables before PHP 8.3.' => 'Dynamické výrazy sa nedajú použiť ako inicializátory statických premenných pred PHP 8.3.',
  'You have saved the response "%s" to this prompt.' => 'Na túto výzvu máte uloženú odpoveď „%s“.',
  'This workflow (\'%s\') requires a Conduit, override %s to return true.' => 'Tento pracovný postup (\'%s\') vyžaduje Conduit, prepíšte %s tak, aby vracalo true.',
  'BRANCH' => 'VETVA',
  'Moved Here' => 'Presunuté sem',
  'A cast statement must not be followed by a space.' => 'Za príkazom pretypovania nesmie nasledovať medzera.',
  'Run unit tests covering changes since a specific revision.' => 'Spustiť jednotkové testy pokrývajúce zmeny od konkrétnej revízie.',
  'Expected an object, string, or list of objects for "object" context, got "%s".' => 'Pre kontext „object“ sa očakával objekt, reťazec alebo zoznam objektov, získalo sa „%s“.',
  'Run "arc help prompts" for detailed help on configuring responses.' => 'Podrobný pomocník ku konfigurácii odpovedí získate spustením „arc help prompts“.',
  'Unexpected output from %s: no author for commit %s' => 'Neočakávaný výstup z %s: commit %s nemá autora',
  'Confirms that revisions with failed builds should land.' => 'Potvrdzuje, že sa majú začleniť aj revízie so zlyhanými zostaveniami.',
  'Did not reach every wait node??' => 'Nedosiahli sa všetky čakacie uzly??',
  'Unknown escaping mode!' => 'Neznámy režim escapovania!',
  'The river bubbles quietly, but you do not see any published commits anywhere.' => 'Rieka pokojne bublá, ale nikde nevidíte žiadne publikované commity.',
  'Unable to parse SVN info.' => 'Nepodarilo sa analyzovať informácie SVN.',
  'Logical Operators' => 'Logické operátory',
  'Keep local branches around after changes are pushed. By default, local branches are deleted after the changes they contain are published.' => 'Po odoslaní zmien ponechať lokálne vetvy. Predvolene sa lokálne vetvy po publikovaní zmien, ktoré obsahujú, odstránia.',
  'Repository API is not supported.' => 'Repository API nie je podporované.',
  'HTTP parameter pair (with key "%s") is not valid: each pair must be an array with exactly two elements.' => 'Dvojica parametrov HTTP (s kľúčom „%s“) nie je platná: každá dvojica musí byť pole s presne dvoma prvkami.',
  'Working Copy: Project root is at "%s".' => 'Pracovná kópia: Koreň projektu je na „%s“.',
  '(DEPRECATED) Obsolete, use "--types path" instead.' => '(ZASTARANÉ) Zastarané, použite namiesto toho „--types path“.',
  '    %s (%s) %s
' => '    %s (%s) %s',
  'Follow naming conventions: variables should be named using `%s`.' => 'Dodržiavajte konvencie pomenúvania: premenné by sa mali pomenúvať pomocou `%s`.',
  'This is just an example function!' => 'Toto je len ukážková funkcia!',
  'Warning - legacy default value ignored' => 'Upozornenie – zastaraná predvolená hodnota sa ignoruje',
  'Use the local "into" ref state instead of fetching it from a remote.' => 'Použiť lokálny stav refu „into“ namiesto jeho načítania zo vzdialeného úložiska.',
  'Phutil PHPAST' => 'Phutil PHPAST',
  'Specifies the default behavior when "arc land" is run with no "--strategy" flag.' => 'Určuje predvolené správanie pri spustení „arc land“ bez prepínača „--strategy“.',
  'Configuration option ("%s") is unrecognized. You can only read recognized configuration options.' => 'Konfiguračná možnosť („%s“) je nerozpoznaná. Čítať môžete iba rozpoznané konfiguračné možnosti.',
  'IP address "%s" is not properly formated: it has too few parts. Expected a minimum of 2 colons, like "%s".' => 'Adresa IP „%s“ nie je správne naformátovaná: má príliš málo častí. Očakávali sa minimálne 2 dvojbodky, ako „%s“.',
  'You can not specify paths with %s. The %s flag runs every test associated with a tracked file in the working copy.' => 'S %s nemôžete zadať cesty. Prepínač %s spustí každý test priradený k sledovanému súboru v pracovnej kópii.',
  'Enums are not available before PHP 8.1.' => 'Enumerácie nie sú dostupné pred PHP 8.1.',
  'Invalid UTF-8 string passed to %s.' => 'Do %s bol odovzdaný neplatný reťazec UTF-8.',
  'Creating new branch "%s" from "%s".' => 'Vytvára sa nová vetva „%s“ z „%s“.',
  'Use the full form of the PHP open tag, `%s`.' => 'Používajte úplný tvar otváracej značky PHP, `%s`.',
  'Merge succeeded.' => 'Zlúčenie prebehlo úspešne.',
  'Definition of symbol "%s" (of type "%s") in file "%s" in library "%s" duplicates builtin definition of the same symbol.' => 'Definícia symbolu „%s“ (typu „%s“) v súbore „%s“ v knižnici „%s“ duplikuje vstavanú definíciu toho istého symbolu.',
  'Amending commit message to reflect revision:' => 'Správa commitu sa dopĺňa, aby odrážala revíziu:',
  'Unknown URI type "%s"!' => 'Neznámy typ URI „%s“!',
  'it is the merge-base of \'%s\' and HEAD, as specified in \'%s\'.' => 'je to merge-base \'%s\' a HEAD, ako je určené v \'%s\'.',
  'Specify a file to download.' => 'Zadajte súbor na stiahnutie.',
  'Parameter provided to argument "--%s" is too large to parse as an integer.' => 'Parameter zadaný pre argument „--%s“ je príliš veľký na to, aby sa dal analyzovať ako celé číslo.',
  'Expected a list or dictionary!' => 'Očakával sa zoznam alebo slovník!',
  'Invalid Content Encoding (Non-UTF8)' => 'Neplatné kódovanie obsahu (nie UTF-8)',
  'Yielding processing of rules from \'%s\'.' => 'Odovzdáva sa spracovanie pravidiel z \'%s\'.',
  'IP address "%s" is not properly formatted. Address segments should have no leading zeroes, but segment "%s" has a leading zero.' => 'Adresa IP „%s“ nie je správne naformátovaná. Segmenty adresy by nemali mať úvodné nuly, ale segment „%s“ má úvodnú nulu.',
  'For consistency, write hexadecimals integers in uppercase with a leading `%s`.' => 'Kvôli konzistentnosti píšte šestnástkové celé čísla veľkými písmenami s úvodným `%s`.',
  'Use `%s` single-line comments, not `%s`.' => 'Používajte jednoriadkové komentáre `%s`, nie `%s`.',
  'Definition of %s \'%s\' in file \'%s\' duplicates prior definition in file \'%s\'. You can not declare the same symbol twice.' => 'Definícia %s \'%s\' v súbore \'%s\' duplikuje predchádzajúcu definíciu v súbore \'%s\'. Ten istý symbol nemôžete deklarovať dvakrát.',
  '(No revisions match.)' => '(Žiadne revízie nezodpovedajú.)',
  'Unrecognized lint message code: "%s"' => 'Nerozpoznaný kód správy lintu: „%s“',
  'No lint engine configured for this project.' => 'Pre tento projekt nie je nakonfigurovaný žiadny lintovací nástroj.',
  'Lint can not be output into "%s" format because the PHP "%s" extension is not installed. Install the extension or choose a different output format.' => 'Lint sa nedá vypísať vo formáte „%s“, pretože rozšírenie PHP „%s“ nie je nainštalované. Nainštalujte rozšírenie alebo zvoľte iný výstupný formát.',
  'Call to phutil_nonempty_string() expected null or a string, got: %s.' => 'Volanie phutil_nonempty_string() očakávalo null alebo reťazec, získalo: %s.',
  'Your version of \'%s\' is unbuilt or out of date. Run this script to build it.' => 'Vaša verzia \'%s\' nie je zostavená alebo je zastaraná. Zostavíte ju spustením tohto skriptu.',
  'Failed to copy file from "%s" to "%s".' => 'Nepodarilo sa skopírovať súbor z „%s“ do „%s“.',
  'CoffeeLint does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => 'CoffeeLint momentálne nepodporuje vlastné úrovne závažnosti, pretože pravidlá sa nedajú identifikovať zo správ vo výstupe.',
  'Attempt to read from undeclared property %s.' => 'Pokus o čítanie z nedeklarovanej vlastnosti %s.',
  'Select a Default Commit Range' => 'Zvoľte predvolený rozsah commitov',
  'Unable to start socket! Error #%d: %s' => 'Nepodarilo sa spustiť soket! Chyba č. %d: %s',
  'Failed to read modified time for %s.' => 'Nepodarilo sa načítať čas úpravy pre %s.',
  'Hexadecimal Integer Casing' => 'Veľkosť písmen šestnástkových celých čísel',
  'Calls to built-in PHP functions should be lowercase.' => 'Volania vstavaných funkcií PHP by mali byť malými písmenami.',
  'Status: %s' => 'Stav: %s',
  'Follow naming conventions: functions should be named using `%s`.' => 'Dodržiavajte konvencie pomenúvania: funkcie by sa mali pomenúvať pomocou `%s`.',
  'Unexpected value type provided for an HREF field - %s. Please share this stack trace as comment in Task %s' => 'Neočakávaný typ hodnoty zadaný pre pole HREF – %s. Zdieľajte prosím tento zásobník volaní ako komentár v úlohe %s',
  'Argument index is not a scalar.' => 'Index argumentu nie je skalár.',
  'Vigorously fuse files together, without using a cat.' => 'Energicky zlúči súbory dokopy bez použitia mačky.',
  'The test passed.' => 'Test prešiel.',
  'Received error from Twitch: %s' => 'Od služby Twitch prišla chyba: %s',
  'Rewrite this code to use an array. Variable variables are unclear and hinder static analysis.' => 'Prepíšte tento kód tak, aby používal pole. Premenné premenné sú nejasné a bránia statickej analýze.',
  'Missing files in working copy:' => 'Chýbajúce súbory v pracovnej kópii:',
  'Preparing to run a command in directory "%s", but that directory is not readable (the current process does not have "+r" permission).' => 'Pripravuje sa spustenie príkazu v adresári „%s“, ale ten sa nedá čítať (aktuálny proces nemá oprávnenie „+r“).',
  '**anoid**' => '**anoid**',
  'This workflow isn\'t executable!' => 'Tento pracovný postup sa nedá spustiť!',
  'Unknown command \'%s\'. Try \'%s\'.' => 'Neznámy príkaz \'%s\'. Skúste \'%s\'.',
  'This function can not convert into the unit "%s".' => 'Táto funkcia nedokáže previesť na jednotku „%s“.',
  'Turkish (Turkey)' => 'turečtina (Turecko)',
  'Runtime "--config" Flags' => 'Prepínače „--config“ za behu',
  'SUCCESS!' => 'ÚSPECH!',
  'No "%s %s" alias is defined, did you mean "%s %s"?' => 'Nie je definovaný žiadny alias „%s %s“, mysleli ste „%s %s“?',
  'Cannot display current version without "%s" installed.' => 'Aktuálnu verziu sa nedá zobraziť bez nainštalovaného „%s“.',
  'Flag "--title" is not supported when reading pastes.' => 'Prepínač „--title“ nie je pri čítaní vložených textov podporovaný.',
  'Expected exactly one argument to "%s(...)" with a symbol.' => 'Očakával sa presne jeden argument pre „%s(...)“ so symbolom.',
  'In remote "%s", the name "%s" identifies one or more branch heads and one or more bookmarks. Close, rename, or delete all but one of these markers, or pull the state you want to merge into and use "--into-local --into <hash>" to disambiguate the desired merge target.' => 'Vo vzdialenom úložisku „%s“ názov „%s“ identifikuje jednu alebo viac hláv vetiev a jednu alebo viac záložiek. Zavrite, premenujte alebo odstráňte všetky tieto značky okrem jednej, alebo stiahnite stav, do ktorého chcete zlúčiť, a na jednoznačné určenie požadovaného cieľa zlúčenia použite „--into-local --into <hash>“.',
  'System Config File' => 'Systémový konfiguračný súbor',
  'Show an enhanced view of bookmarks in the working copy.' => 'Zobraziť rozšírený pohľad na záložky v pracovnej kópii.',
  'A git commit or tree hash in the commit range is already attached to the Differential revision.' => 'Hash commitu alebo stromu gitu v rozsahu commitov je už pripojený k revízii Differential.',
  'Use braces to surround a statement block.' => 'Blok príkazov obklopte zloženými zátvorkami.',
  '"arc land" must be run in a Git or Mercurial working copy.' => '„arc land“ sa musí spúšťať v pracovnej kópii Git alebo Mercurial.',
  'Begin or resume work.' => 'Začať alebo pokračovať v práci.',
  'Saving local state (at detached commit "%s").' => 'Ukladá sa lokálny stav (na odpojenom commite „%s“).',
  'Properties can not be declared "final".' => 'Vlastnosti sa nedajú deklarovať ako „final“.',
  'Landing onto remote "%s", the default remote under Mercurial.' => 'Začleňuje sa do vzdialeného úložiska „%s“, ktoré je predvoleným vzdialeným úložiskom v Mercuriale.',
  'Create a paste using the content in a file.' => 'Vytvoriť vložený text pomocou obsahu súboru.',
  'Jun' => 'jún',
  '%s failed: %s' => '%s zlyhalo: %s',
  'Unrecognized lint message code "%s". Expected a valid JSHint lint code like "%s" or "%s".' => 'Nerozpoznaný kód správy lintu „%s“. Očakával sa platný kód lintu JSHint ako „%s“ alebo „%s“.',
  'This patch has binary data. The PHP zlib extension is required to apply patches with binary data to git. Install the PHP zlib extension to continue.' => 'Táto záplata obsahuje binárne údaje. Na použitie záplat s binárnymi údajmi v gite sa vyžaduje rozšírenie PHP zlib. Pokračujte nainštalovaním rozšírenia PHP zlib.',
  'Parameter ("%s") passed to "%s" when constructing a lint message must be a string with a maximum length of %s bytes, but is %s bytes in length.' => array(
    
    array(
      
      array(
        
        array(
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť reťazec s maximálnou dĺžkou %s bajt, ale má dĺžku %s bajt.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť reťazec s maximálnou dĺžkou %s bajt, ale má dĺžku %s bajty.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť reťazec s maximálnou dĺžkou %s bajt, ale má dĺžku %s bajtov.',
        ),
        
        array(
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť reťazec s maximálnou dĺžkou %s bajty, ale má dĺžku %s bajt.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť reťazec s maximálnou dĺžkou %s bajty, ale má dĺžku %s bajty.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť reťazec s maximálnou dĺžkou %s bajty, ale má dĺžku %s bajtov.',
        ),
        
        array(
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť reťazec s maximálnou dĺžkou %s bajtov, ale má dĺžku %s bajt.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť reťazec s maximálnou dĺžkou %s bajtov, ale má dĺžku %s bajty.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť reťazec s maximálnou dĺžkou %s bajtov, ale má dĺžku %s bajtov.',
        ),
      ),
    ),
  ),
  'CONNECT' => 'PRIPOJENIE',
  'Unable to parse unit specification (expected a specification in the form "%s"): %s' => 'Nepodarilo sa analyzovať špecifikáciu jednotky (očakávala sa špecifikácia v tvare „%s“): %s',
  'Follow naming conventions: traits should be named using `%s`.' => 'Dodržiavajte konvencie pomenúvania: traity by sa mali pomenúvať pomocou `%s`.',
  'The shell "%s" is not supported. Supported shells are: %s.' => 'Shell „%s“ nie je podporovaný. Podporované shelly sú: %s.',
  'Confirms use of a revision that does not appear to be present in the working copy.' => 'Potvrdzuje použitie revízie, ktorá sa zjavne nenachádza v pracovnej kópii.',
  'INTO COMMIT' => 'DO COMMITU',
  '...' => '...',
  'Dictionary key "%s" is not valid UTF8, and cannot be JSON encoded.' => 'Kľúč slovníka „%s“ nie je platné UTF8 a nedá sa zakódovať do JSON.',
  'Unsupported escape sequence "%s" found in pattern: %s' => 'Vo vzore sa našla nepodporovaná escape sekvencia „%s“: %s',
  'Upgrading "%s" (on branch "%s").' => 'Aktualizuje sa „%s“ (vo vetve „%s“).',
  'The request took too long to complete.' => 'Dokončenie požiadavky trvalo príliš dlho.',
  '"arc amend" must be run from inside a working copy of a repository using a version control system that supports amending commits, like Git or Mercurial.' => '„arc amend“ sa musí spúšťať vnútri pracovnej kópie repozitára používajúceho systém správy verzií, ktorý podporuje dopĺňanie commitov, ako Git alebo Mercurial.',
  'Possible Spelling Mistake' => 'Možný preklep',
  'Moved Away' => 'Presunuté inam',
  'Found no state ref for hash "%s".' => 'Pre hash „%s“ sa nenašiel žiadny ref stavu.',
  'Invalid glob pattern.' => 'Neplatný vzor glob.',
  '%s is not compatible with the installed version of pylint. Minimum version: %s; installed version: %s.' => '%s nie je kompatibilné s nainštalovanou verziou pylint. Minimálna verzia: %s; nainštalovaná verzia: %s.',
  'These Differential revisions match the changes in this working copy:' => 'Zmenám v tejto pracovnej kópii zodpovedajú tieto revízie Differential:',
  'Pass in a custom jshintignore file path.' => 'Odovzdať vlastnú cestu k súboru jshintignore.',
  'Use of Undeclared Variable' => 'Použitie nedeklarovanej premennej',
  'Expected value to be a list of objects to support calling "%s" to generate unique keys, but item with index "%s" is "%s".' => 'Očakávalo sa, že hodnota bude zoznam objektov podporujúcich volanie „%s“ na generovanie jedinečných kľúčov, ale položka s indexom „%s“ je „%s“.',
  'This working copy has no remote named "%s".' => 'Táto pracovná kópia nemá žiadne vzdialené úložisko s názvom „%s“.',
  'Hardpoint data (for hardpoint "%s") is not attached.' => 'Údaje hardpointu (pre hardpoint „%s“) nie sú pripojené.',
  'Type of setting \'%s\' must be string.' => 'Typ nastavenia \'%s\' musí byť reťazec.',
  'Received error from Postmark: (%s) %s' => 'Od služby Postmark prišla chyba: (%s) %s',
  '"arc upgrade" can only upgrade clean working copies.' => '„arc upgrade“ dokáže aktualizovať iba čisté pracovné kópie.',
  'Call to phutil_nonempty_stringlike() expected a string or stringlike object, got: %s.' => 'Volanie phutil_nonempty_stringlike() očakávalo reťazec alebo objekt podobný reťazcu, získalo: %s.',
  'Name' => 'Názov',
  'Promoted properties are not available before PHP 8.0.' => 'Povýšené vlastnosti nie sú dostupné pred PHP 8.0.',
  'Unit testing raised errors!' => 'Jednotkové testovanie vyvolalo chyby!',
  '... (%s more byte(s)) ...' => array(
    '... (ešte %s bajt) ...',
    '... (ešte %s bajty) ...',
    '... (ešte %s bajtov) ...',
  ),
  'Install %s using `%s`.' => 'Nainštalujte %s pomocou `%s`.',
  'Unexpected output to stderr on exec channel: %s' => 'Neočakávaný výstup na stderr v kanáli exec: %s',
  'The name of a default lint engine to use, if no lint engine is specified by the current project.' => 'Názov predvoleného lintovacieho nástroja, ktorý sa má použiť, ak aktuálny projekt neurčuje žiadny lintovací nástroj.',
  'Writing bundle to \'%s\'...' => 'Balík sa zapisuje do \'%s\'...',
  'Configuration option "%s" was provided multiple times with "--config" flags. Specify each option no more than once.' => 'Konfiguračná možnosť „%s“ bola zadaná viackrát prepínačmi „--config“. Každú možnosť zadajte najviac raz.',
  'Cannot find the %s equivalent of %s.' => 'Nedá sa nájsť ekvivalent %2$s v %s.',
  'Saving local state (on ref "%s" at commit "%s").' => 'Ukladá sa lokálny stav (na refe „%s“ pri commite „%s“).',
  'The `%s` type hint is not available before PHP 7.0.' => 'Typová nápoveda `%s` nie je dostupná pred PHP 7.0.',
  'Maximum value must be an integer.' => 'Maximálna hodnota musí byť celé číslo.',
  'Commit message has errors:' => 'Správa commitu obsahuje chyby:',
  'Adjust the maximum line length before a warning is raised. By default, a warning is raised on lines exceeding 80 characters.' => 'Upraviť maximálnu dĺžku riadka, pri ktorej sa vyvolá upozornenie. Predvolene sa upozornenie vyvolá pri riadkoch dlhších ako 80 znakov.',
  'UNKNOWN CONFIGURATION' => 'NEZNÁMA KONFIGURÁCIA',
  'Enter a commit message for this patch. If you just want to apply the patch to the working copy without committing, re-run arc patch with the %s flag.' => 'Zadajte správu commitu pre túto záplatu. Ak chcete záplatu iba použiť na pracovnú kópiu bez commitnutia, spustite arc patch znova s prepínačom %s.',
  'Failed to chmod \'%s\' to \'%s\'.' => 'Nepodarilo sa zmeniť oprávnenia \'%s\' na \'%s\'.',
  'Operating in Git/Perforce mode after selecting a Perforce remote.' => 'Po zvolení vzdialeného úložiska Perforce sa pracuje v režime Git/Perforce.',
  'IP address "%s" is not properly formatted: an address may only contain a maximum of one subsequence omitted with "::".' => 'Adresa IP „%s“ nie je správne naformátovaná: adresa môže obsahovať najviac jednu podpostupnosť vynechanú pomocou „::“.',
  'Report results in JSON format.' => 'Vypísať výsledky vo formáte JSON.',
  'Failed to match "ls-remote" pattern against line "%s".' => 'Nepodarilo sa priradiť vzor „ls-remote“ k riadku „%s“.',
  'Attempt to write to undeclared property %s.' => 'Pokus o zápis do nedeklarovanej vlastnosti %s.',
  'Provide a workflow to list prompts for.' => 'Zadajte pracovný postup, pre ktorý sa majú vypísať výzvy.',
  'Raw changes can not be pushed to a staging area.' => 'Surové zmeny sa nedajú odoslať do prípravnej oblasti.',
  'Operation Error' => 'Chyba operácie',
  'Template not edited.' => 'Šablóna nebola upravená.',
  'runtime --library flag' => 'prepínač --library za behu',
  'Convention: no spaces before opening parenthesis in function and method declarations.' => 'Konvencia: žiadne medzery pred otváracou zátvorkou v deklaráciách funkcií a metód.',
  'Publish reviewed changes.' => 'Publikovať posúdené zmeny.',
  'fread() from stdin failed with an error.' => 'fread() zo stdin zlyhalo s chybou.',
  'You must either provide a signing key with setSigningKey(), or provide a secret key with setSecretKey().' => 'Musíte buď poskytnúť podpisový kľúč pomocou setSigningKey(), alebo tajný kľúč pomocou setSecretKey().',
  'Omitting the variable in a catch clause is not allowed before PHP 8.0.' => 'Vynechanie premennej v klauzule catch nie je povolené pred PHP 8.0.',
  'With \'full\', show full pretty report (Default). With \'json\', report results in JSON format. With \'ugly\', use uglier (but more efficient) JSON formatting. With \'none\', don\'t print results.' => 'S \'full\' zobrazí úplný pekný report (predvolené). S \'json\' vypíše výsledky vo formáte JSON. S \'ugly\' použije škaredšie (ale efektívnejšie) formátovanie JSON. S \'none\' výsledky nevypíše.',
  'SAVE STATE' => 'ULOŽENIE STAVU',
  '<placeholder>' => '<zástupný symbol>',
  '%s failed!' => '%s zlyhalo!',
  'Preparing to run a command in directory "%s", but that path is not a directory.' => 'Pripravuje sa spustenie príkazu v adresári „%s“, ale táto cesta nie je adresár.',
  'Expected %s to return array, got %s.' => 'Očakávalo sa, že %s vráti pole, získalo sa %s.',
  'Assertion of caught exception failed (at %s:%d in test case "%s").' => 'Tvrdenie o zachytenej výnimke zlyhalo (na %s:%d v testovacom prípade „%s“).',
  'The dependencies for this patch have a cycle. Applying them is not guaranteed to work. Continue anyway?' => 'Závislosti tejto záplaty tvoria cyklus. Nie je zaručené, že ich použitie bude fungovať. Pokračovať napriek tomu?',
  'Local commit "%s" (%s) does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => 'Lokálny commit „%s“ (%s) sa nedá čisto zlúčiť do „%s“. Vykonajte rebase alebo zlúčenie lokálnych zmien tak, aby sa dali čisto zlúčiť.',
  '<%s> %s' => '<%s> %s',
  '%s requires exactly one revision.' => '%s vyžaduje presne jednu revíziu.',
  'Unable to read file permissions for "%s"!' => 'Nepodarilo sa načítať oprávnenia súboru pre „%s“!',
  'Override default binary.' => 'Prepísať predvolený binárny súbor.',
  'Parameter %d of `%s` should be a scalar string, otherwise it\'s not safe.' => 'Parameter %d funkcie `%s` by mal byť skalárny reťazec, inak nie je bezpečný.',
  'Just ahead to the north, you can see **remotes**.
' => 'Kúsok vpredu na severe vidíte **vzdialené úložiská**.',
  'Unable to verify request signature, specified "%s" ("%s") is unknown.' => 'Nepodarilo sa overiť podpis požiadavky, zadané „%s“ („%s“) je neznáme.',
  'Commit \'%s\' is not a valid Mercurial commit identifier.' => 'Commit \'%s\' nie je platný identifikátor commitu Mercurial.',
  'Self Class Reference' => 'Odkaz na vlastnú triedu',
  'Host returned HTTP/200, but invalid JSON data in response to a Conduit method call.' => 'Hostiteľ vrátil HTTP/200, ale ako odpoveď na volanie metódy Conduit poslal neplatné údaje JSON.',
  'Czech (Czech Republic)' => 'čeština (Česká republika)',
  'Constructor Parentheses' => 'Zátvorky konštruktora',
  'Paste Symbol "%s"' => 'Symbol vloženého textu „%s“',
  'Reviewers: %s' => 'Recenzenti: %s',
  'Convention: no spaces before closing parenthesis in function and method declarations.' => 'Konvencia: žiadne medzery pred zatváracou zátvorkou v deklaráciách funkcií a metód.',
  'The "SHELL" environment variable has value "%s", so the target shell was detected as "%s".' => 'Premenná prostredia „SHELL“ má hodnotu „%s“, takže cieľový shell bol zistený ako „%s“.',
  'Unable to overwrite path \'%s\', patched version was left at \'%s\'.' => 'Nepodarilo sa prepísať cestu \'%s\', záplatovaná verzia bola ponechaná na \'%s\'.',
  'Aug' => 'aug',
  'Future has already ended; futures can not end more than once.' => 'Future už skončilo; future nemôže skončiť viackrát.',
  'Method %s in class %s is not implemented!' => 'Metóda %s v triede %s nie je implementovaná!',
  'Convention: double arrow should be surrounded by whitespace.' => 'Konvencia: dvojitá šípka by mala byť obklopená bielymi znakmi.',
  'Prefer "__CLASS__" or "__TRAIT__" over hard-coded class or trait names.' => 'Uprednostnite „__CLASS__“ alebo „__TRAIT__“ pred pevne zakódovanými názvami tried alebo trait.',
  '%s disables lint.' => '%s zakazuje lint.',
  'If you provide an alter cost with %s, you must enable type computation with %s.' => 'Ak zadáte cenu zmeny pomocou %s, musíte povoliť výpočet typov pomocou %s.',
  'Test case \'%s\' was expected to succeed, but it raised an exception of class %s with message: %s' => 'Očakávalo sa, že testovací prípad \'%s\' uspeje, ale vyvolal výnimku triedy %s so správou: %s',
  'Title' => 'Názov',
  'Stage 1 bootloader is too large!' => 'Zavádzač 1. stupňa je príliš veľký!',
  'Comment Spaces' => 'Medzery v komentároch',
  'More than one revision was found in the working copy:' => 'V pracovnej kópii sa našla viac ako jedna revízia:',
  'Rule \'%s\' in state \'%s\' in %s has unknown context rule \'%s\', expected \'%s\', \'%s\' or \'%s\'.' => 'Pravidlo \'%s\' v stave \'%s\' v %s má neznáme kontextové pravidlo \'%s\', očakávalo sa \'%s\', \'%s\' alebo \'%s\'.',
  '**work** [--start __start__] __symbol__' => '**work** [--start __start__] __symbol__',
  'No unit test engine is configured for this project. Create an \'%s\' file, or configure an advanced engine with \'%s\' in \'%s\'.' => 'Pre tento projekt nie je nakonfigurovaný žiadny nástroj na jednotkové testy. Vytvorte súbor \'%s\' alebo nakonfigurujte pokročilý nástroj pomocou \'%s\' v \'%s\'.',
  'Enable strict handling of units in expressions.' => 'Povoliť prísne spracovanie jednotiek vo výrazoch.',
  'Unexpected `%s` value in `%s` method.' => 'Neočakávaná hodnota `%s` v metóde `%s`.',
  'Lock file out-of-date' => 'Súbor zámku je zastaraný',
  'Disconnected' => 'Odpojené',
  'Unresolved merge conflict' => 'Nevyriešený konflikt zlúčenia',
  'English (Very Wow)' => 'angličtina (veľmi wow)',
  'Look around, or look at a specific __thing__.' => 'Poobzerajte sa alebo sa pozrite na konkrétnu vec __thing__.',
  'Call Formatting' => 'Formátovanie volaní',
  'Encountered a merge conflict.' => 'Nastal konflikt zlúčenia.',
  'Always enable coverage information.' => 'Vždy povoliť informácie o pokrytí.',
  'PHP Compatibility' => 'Kompatibilita PHP',
  'it is the greatest common ancestor of \'%s\' and %s, as specified by \'%s\' in your %s \'base\' configuration.' => 'je to najväčší spoločný predok \'%s\' a %s, ako je určené pomocou \'%s\' vo vašej konfigurácii \'base\' v %s.',
  'Use `%s` to detect issues with JavaScript source files.' => 'Na zisťovanie problémov v zdrojových súboroch JavaScriptu použite `%s`.',
  'Attempting to convert a string encoding, but no target encoding was provided. Explicitly provide the target encoding.' => 'Pokus o prevod kódovania reťazca, ale nebolo zadané žiadne cieľové kódovanie. Zadajte cieľové kódovanie výslovne.',
  'Landed changes.' => 'Zmeny boli začlenené.',
  'This codebase targets PHP %s, but `%s` was not introduced until PHP %s.' => 'Táto kódová základňa cieli na PHP %s, ale `%s` bolo zavedené až v PHP %s.',
  'Use of `%s` Properties' => 'Použitie vlastností `%s`',
  'INTO TARGET' => 'DO CIEĽA',
  'Chinese (Simplified)' => 'čínština (zjednodušená)',
  'Begin or resume work on a branch, bookmark, task, or revision.

The __symbol__ may be a branch or bookmark name, a revision name (like "D123"),
a task name (like "T123"), or a new symbol.

If you provide a symbol which currently does not identify any ongoing work,
a new branch or bookmark will be created with the name you provide.

If you provide the name of an existing branch or bookmark, the working copy
will be switched to that branch or bookmark.

If you provide the name of a revision or task, the workflow will look for a
related branch or bookmark that already exists in the working copy. If one is
found, it will switch to it. If it does not find one, it will attempt to create
a new branch or bookmark.

When "arc work" creates a branch or bookmark, it will use **--start** as the
branchpoint if it is provided. Otherwise, the current working copy state will
serve as the starting point.' => 'Začne alebo obnoví prácu na vetve, záložke, úlohe alebo revízii.

__symbol__ môže byť názov vetvy alebo záložky, názov revízie (napríklad „D123“),
názov úlohy (napríklad „T123“) alebo nový symbol.

Ak zadáte symbol, ktorý momentálne neidentifikuje žiadnu prebiehajúcu prácu,
vytvorí sa nová vetva alebo záložka so zadaným názvom.

Ak zadáte názov existujúcej vetvy alebo záložky, pracovná kópia sa prepne
na túto vetvu alebo záložku.

Ak zadáte názov revízie alebo úlohy, pracovný postup vyhľadá súvisiacu vetvu
alebo záložku, ktorá už v pracovnej kópii existuje. Ak nejakú nájde, prepne sa
na ňu. Ak žiadnu nenájde, pokúsi sa vytvoriť novú vetvu alebo záložku.

Keď „arc work“ vytvára vetvu alebo záložku, ako bod vetvenia použije **--start**,
ak je zadaný. Inak bude východiskovým bodom aktuálny stav pracovnej kópie.',
  'Unknown patch type \'%s\'!' => 'Neznámy typ záplaty \'%s\'!',
  'Expected list of rules for state \'%s\' in %s, got %s.' => 'Očakával sa zoznam pravidiel pre stav \'%s\' v %s, získalo sa %s.',
  'Rebasing "%s" onto landed state...' => 'Vykonáva sa rebase „%s“ na začlenený stav...',
  'Open a file or object in a local web browser.' => 'Otvoriť súbor alebo objekt v lokálnom webovom prehliadači.',
  'This codebase targets PHP %s, but short ternary was not introduced until PHP 5.3.' => 'Táto kódová základňa cieli na PHP %s, ale krátky ternárny operátor bol zavedený až v PHP 5.3.',
  'Paste "%s" does not exist, or you do not have access to see it.' => 'Vložený text „%s“ neexistuje alebo k nemu nemáte prístup.',
  'Arrays should use the long array syntax.' => 'Polia by mali používať dlhú syntax poľa.',
  'You have no open Differential revisions.' => 'Nemáte žiadne otvorené revízie Differential.',
  'You are landing %s revision(s) which are already in the state "%s", indicating that they have previously landed:' => array(
    'Začleňujete revíziu, ktorá je už v stave „%2$s“, čo naznačuje, že už bola začlenená:',
    'Začleňujete %s revízie, ktoré sú už v stave „%s“, čo naznačuje, že už boli začlenené:',
    'Začleňujete %s revízií, ktoré sú už v stave „%s“, čo naznačuje, že už boli začlenené:',
  ),
  'Local branches and bookmarks have not been changed, and are still in the same state as before.' => 'Lokálne vetvy a záložky sa nezmenili a sú stále v rovnakom stave ako predtým.',
  'Nested `%s` Statements' => 'Vnorené príkazy `%s`',
  'Two workflows ("%s" and "%s") both have the same name ("%s") and both support the current toolset ("%s", "%s"). Each workflow in a given toolset must have a unique name.' => 'Dva pracovné postupy („%s“ a „%s“) majú rovnaký názov („%s“) a oba podporujú aktuálnu sadu nástrojov („%s“, „%s“). Každý pracovný postup v danej sade nástrojov musí mať jedinečný názov.',
  'Linter Rules' => 'Pravidlá lintera',
  'Void casts (`%s`) are not available before PHP 8.4.' => 'Pretypovanie na void (`%s`) nie je dostupné pred PHP 8.4.',
  'Preparing to run a command in directory "%s", but that directory is not executable (the current process does not have "+x" permission).' => 'Pripravuje sa spustenie príkazu v adresári „%s“, ale ten nie je spustiteľný (aktuálny proces nemá oprávnenie „+x“).',
  'It is late in the evening. The air is cool and still, and filled with the sound of crickets.' => 'Je neskorý večer. Vzduch je chladný a nehybný, naplnený cvrlikaním cvrčkov.',
  '(The Empty Tree)' => '(Prázdny strom)',
  'VERY META' => 'VEĽMI META',
  'Shelving uncommitted changes from working copy.' => 'Necommitnuté zmeny z pracovnej kópie sa odkladajú.',
  'OKAY' => 'V PORIADKU',
  '%s locally modified path(s) are not included in this revision:' => array(
    'Lokálne upravená cesta nie je zahrnutá v tejto revízii:',
    'Lokálne upravené cesty nie sú zahrnuté v tejto revízii:',
  ),
  'Implicitly marking parameters as nullable is deprecated beginning with PHP 8.4.0.' => 'Implicitné označovanie parametrov ako nullable je od PHP 8.4.0 zastarané.',
  'Failed to JSON encode value (%s): %s.' => 'Nepodarilo sa zakódovať hodnotu do JSON (%s): %s.',
  'Landing the active commit, "%s".' => 'Začleňuje sa aktívny commit „%s“.',
  'IP address "%s" is not properly formatted: the segments of an address must be hexadecimal values between "0000" and "ffff", inclusive. Segment "%s" is not.' => 'Adresa IP „%s“ nie je správne naformátovaná: segmenty adresy musia byť šestnástkové hodnoty od „0000“ do „ffff“ vrátane. Segment „%s“ taký nie je.',
  '          Supports: cli
          List the available and configured linters, with information about
          what they do and which versions are installed.

          if __name__ is provided, the linter with that name will be displayed.' => '          Supports: cli
          Vypíše dostupné a nakonfigurované lintery spolu s informáciami o tom,
          čo robia a ktoré verzie sú nainštalované.

          ak je zadaný __name__, zobrazí sa linter s daným názvom.',
  'Unable to move %s to %s.' => 'Nepodarilo sa presunúť %s do %s.',
  'Local branch "%s" tracks an upstream, but there is no path to a remote; ignoring branch upstream.' => 'Lokálna vetva „%s“ sleduje upstream, ale k vzdialenému úložisku nevedie žiadna cesta; upstream vetvy sa ignoruje.',
  'Prompt ("%s") is executing, but it is not properly bound to the invoking workflow. You may have called "newPrompt()" to execute a prompt instead of "getPrompt()". Use "newPrompt()" when defining prompts and "getPrompt()" when executing them.' => 'Výzva („%s“) sa vykonáva, ale nie je správne naviazaná na vyvolávajúci pracovný postup. Možno ste na vykonanie výzvy zavolali „newPrompt()“ namiesto „getPrompt()“. Pri definovaní výziev používajte „newPrompt()“ a pri ich vykonávaní „getPrompt()“.',
  'BROKEN' => 'POKAZENÉ',
  'Unparsable Mercurial status line \'%s\'.' => 'Neanalyzovateľný stavový riadok Mercurialu \'%s\'.',
  'Private methods in traits are not available before PHP 8.0.' => 'Súkromné metódy v traitách nie sú dostupné pred PHP 8.0.',
  'You\'re running a command which operates on a range of revisions (usually, from some revision to HEAD) but have not specified the revision that should determine the start of the range.

Previously, arc assumed you meant \'%s\' when you did not specify a start revision, but this behavior does not make much sense in most workflows outside of Facebook\'s historic %s workflow.

arc no longer assumes \'%s\'. You must specify a relative commit explicitly when you invoke a command (e.g., `%s`, not just `%s`) or select a default for this working copy.

In most cases, the best default is \'%s\'. You can also select \'%s\' to preserve the old behavior, or some other remote or branch. But you almost certainly want to select \'origin/master\'.

(Technically: the merge-base of the selected revision and HEAD is used to determine the start of the commit range.)' => 'Spúšťate príkaz, ktorý pracuje s rozsahom revízií (zvyčajne od nejakej revízie po HEAD), ale nezadali ste revíziu, ktorá by mala určiť začiatok rozsahu.

Predtým arc predpokladal, že keď nezadáte počiatočnú revíziu, myslíte \'%s\', ale toto správanie nedáva veľký zmysel vo väčšine pracovných postupov mimo historického pracovného postupu %s vo Facebooku.

arc už \'%s\' nepredpokladá. Pri vyvolaní príkazu musíte relatívny commit zadať výslovne (napr. `%s`, nielen `%s`) alebo zvoliť predvolenú hodnotu pre túto pracovnú kópiu.

Vo väčšine prípadov je najlepšou predvolenou hodnotou \'%s\'. Môžete tiež zvoliť \'%s\', čím zachováte pôvodné správanie, alebo nejaké iné vzdialené úložisko či vetvu. Takmer určite však chcete zvoliť \'origin/master\'.

(Technicky: na určenie začiatku rozsahu commitov sa použije merge-base zvolenej revízie a HEAD.)',
  'Show this help, or workflow help for __command__.' => 'Zobraziť tohto pomocníka alebo pomocníka pracovného postupu pre __command__.',
  'Trailing commas in function or method calls are not available before PHP 7.3.' => 'Čiarky na konci vo volaniach funkcií alebo metód nie sú dostupné pred PHP 7.3.',
  'Configuration option ("%s") specified with "--config" flag is not a recognized option.' => 'Konfiguračná možnosť („%s“) zadaná prepínačom „--config“ nie je rozpoznaná možnosť.',
  'Other locations: %s' => 'Ďalšie umiestnenia: %s',
  'UNIT ERRORS' => 'CHYBY JEDNOTKOVÝCH TESTOV',
  'Associates this working copy with a specific installation of %s (or compatible software).' => 'Priradí túto pracovnú kópiu ku konkrétnej inštalácii %s (alebo kompatibilného softvéru).',
  'Upload complete.' => 'Nahrávanie dokončené.',
  'When using \'%s\' to update a revision, specify an update message with \'%s\'. (Normally, we\'d launch an editor to ask you for a message, but can not do that because stdin is the diff source.)' => 'Pri použití \'%s\' na aktualizáciu revízie zadajte správu aktualizácie pomocou \'%s\'. (Za normálnych okolností by sme spustili editor a požiadali vás o správu, ale nemôžeme to urobiť, pretože zdrojom diffu je stdin.)',
  'Remote "%s" was selected by reading "%s" configuration.' => 'Vzdialené úložisko „%s“ bolo zvolené prečítaním konfigurácie „%s“.',
  'Unable to open stderr temporary file ("%s") for reading.' => 'Nepodarilo sa otvoriť dočasný súbor stderr („%s“) na čítanie.',
  'Unable to locate interpreter "%s" to run linter %s. You may need to install the interpreter, or adjust your linter configuration.' => 'Nepodarilo sa nájsť interpret „%s“ na spustenie lintera %s. Možno budete musieť interpret nainštalovať alebo upraviť konfiguráciu lintera.',
  'Landing onto remote "%s", the default remote under Git.' => 'Začleňuje sa do vzdialeného úložiska „%s“, ktoré je predvoleným vzdialeným úložiskom v Gite.',
  'Hardpoint engine can not resolve: no request made progress during the last update cycle and there are no futures awaiting resolution.' => 'Nástroj Hardpoint sa nedá vyriešiť: počas posledného cyklu aktualizácie nezaznamenala žiadna požiadavka pokrok a žiadne future nečaká na vyriešenie.',
  'Unrecognized item status \'%s\'.' => 'Nerozpoznaný stav položky \'%s\'.',
  'There should be no whitespace after the object operator.' => 'Za objektovým operátorom by nemali byť žiadne biele znaky.',
  'Checks for syntax errors in PHP files.' => 'Kontroluje syntaktické chyby v súboroch PHP.',
  'HTTP Basic Auth is not supported by %s.' => '%s nepodporuje overenie HTTP Basic Auth.',
  'Using short array syntax for `%s` was not introduced until PHP 7.1, but this codebase targets an earlier version of PHP.You can rewrite this expression using the `list(...)` instead.' => 'Použitie skrátenej syntaxe poľa pre `%s` bolo zavedené až v PHP 7.1, ale táto kódová základňa cieli na skoršiu verziu PHP. Tento výraz môžete namiesto toho prepísať pomocou `list(...)`.',
  'Local Config File' => 'Lokálny konfiguračný súbor',
  'Update the details for a revision, then save and exit.' => 'Aktualizujte podrobnosti revízie, potom uložte a ukončite.',
  'Will merge into target "%s", selected with the "--into" flag.' => 'Zlúči sa do cieľa „%s“ zvoleného prepínačom „--into“.',
  'Did you mean:' => 'Mysleli ste:',
  'Flag "--builtins" may not be used with a path.' => 'Prepínač „--builtins“ sa nesmie použiť s cestou.',
  'This software is now up to date.' => 'Tento softvér je teraz aktuálny.',
  'Message has unresolved errors.' => 'Správa obsahuje nevyriešené chyby.',
  'Error' => 'Chyba',
  'Object Operator Spacing' => 'Rozostupy objektového operátora',
  'PayPal API call failed: %s' => 'Volanie API PayPal zlyhalo: %s',
  'Revision includes changes to %s path(s) that do not exist:' => array(
    'Revízia obsahuje zmeny cesty, ktorá neexistuje:',
    'Revízia obsahuje zmeny ciest, ktoré neexistujú:',
  ),
  'Creating new bookmark "%s" from "%s".' => 'Vytvára sa nová záložka „%s“ z „%s“.',
  'TODO: Support merge strategies' => 'TODO: Podporiť stratégie zlučovania',
  'arc could not identify any existing revision in your working copy.' => 'arc sa nepodarilo identifikovať žiadnu existujúcu revíziu vo vašej pracovnej kópii.',
  'Convention: no spaces before opening parenthesis in property hooks.' => 'Konvencia: žiadne medzery pred otváracou zátvorkou v hákoch vlastností.',
  'Learn More:' => 'Ďalšie informácie:',
  'This syntax indicates there is an unresolved merge conflict.' => 'Táto syntax naznačuje, že existuje nevyriešený konflikt zlúčenia.',
  'State has multiple ambiguous revisions refs.' => 'Stav má viacero nejednoznačných refov revízií.',
  'Command (of class "%s") was constructed with a "PhutilCommandString", but also passed arguments. When using a prebuilt command, you must not pass arguments.' => 'Príkaz (triedy „%s“) bol zostavený s „PhutilCommandString“, ale zároveň mu boli odovzdané argumenty. Pri použití vopred zostaveného príkazu nesmiete odovzdávať argumenty.',
  'Upload one or more files from local disk.' => 'Nahrať jeden alebo viac súborov z lokálneho disku.',
  'Newline After PHP Open Tag' => 'Nový riadok po otváracej značke PHP',
  'Hardpoint ("%s") is not registered on this object (of type "%s") so the definition object does not exist. Hardpoints are: %s.' => 'Hardpoint („%s“) nie je na tomto objekte (typu „%s“) zaregistrovaný, takže objekt definície neexistuje. Hardpointy sú: %s.',
  'Use "Commandeer" in the web interface to become the author of a revision.' => 'Ak sa chcete stať autorom revízie, použite vo webovom rozhraní „Prevziať“.',
  'LINT MESSAGES' => 'SPRÁVY LINTU',
  'Use "--revision <id>" to specify which revision you want to amend.' => 'Pomocou „--revision <id>“ určte, ktorú revíziu chcete doplniť.',
  'Exiting (Client Limit)' => 'Ukončuje sa (limit klientov)',
  'File "%s"' => 'Súbor „%s“',
  'Failed to parse URI "%s" as a Git URI.' => 'Nepodarilo sa analyzovať URI „%s“ ako URI Git.',
  'Incomplete directories in working copy:' => 'Neúplné adresáre v pracovnej kópii:',
  'Unable to write to logfile "%s"!' => 'Nepodarilo sa zapísať do súboru denníka „%s“!',
  'Unnecessary Symbol Alias' => 'Zbytočný alias symbolu',
  'Always create a new revision.' => 'Vždy vytvoriť novú revíziu.',
  'User Symbol "%s"' => 'Symbol používateľa „%s“',
  'Class or interface symbol "%s" should be written as "%s".' => 'Symbol triedy alebo rozhrania „%s“ by sa mal písať ako „%s“.',
  'Instead of holding the lock, release it and exit.' => 'Namiesto držania zámku ho uvoľniť a ukončiť.',
  'Press ^C again to exit.' => 'Opätovným stlačením ^C ukončíte.',
  'You have incompletely checked out directories in this working copy. Fix them before proceeding.\'' => 'V tejto pracovnej kópii máte neúplne prepnuté adresáre. Pred pokračovaním ich opravte.',
  'You\'re in a detached HEAD and no start point was given.
Run `%s` or switch to a branch first.' => 'Nachádzate sa v odpojenom HEAD a nebol zadaný žiadny počiatočný bod.
Spustite `%s` alebo sa najprv prepnite na vetvu.',
  'Lint for %s:' => 'Lint pre %s:',
  'Exiting (Idle Limit)' => 'Ukončuje sa (limit nečinnosti)',
  'Call to phutil_nonempty_scalar() expected: a string; or stringlike object; or int; or float. Got: %s.' => 'Volanie phutil_nonempty_scalar() očakávalo: reťazec; alebo objekt podobný reťazcu; alebo int; alebo float. Získalo: %s.',
  'Expected \'Date:\'.' => 'Očakávalo sa \'Date:\'.',
  'JSON protocol message must be an array, got some other type ("%s").' => 'Správa protokolu JSON musí byť pole, získal sa nejaký iný typ („%s“).',
  'Advice' => 'Rada',
  'Unable to resolve argument "%s".' => 'Nepodarilo sa vyhodnotiť argument „%s“.',
  'Unable to resolve startpoint "%s".' => 'Nepodarilo sa vyhodnotiť počiatočný bod „%s“.',
  'The remote host refused the connection. This usually means the host is not running an HTTP server, or the network is blocking connections from this machine. Verify you can connect to the remote host from this host.' => 'Vzdialený hostiteľ odmietol spojenie. Zvyčajne to znamená, že hostiteľ nemá spustený server HTTP alebo sieť blokuje pripojenia z tohto počítača. Overte, či sa z tohto hostiteľa dokážete pripojiť k vzdialenému hostiteľovi.',
  'The server does not support staging areas.' => 'Server nepodporuje prípravné oblasti.',
  'Connect to server specified by __uri__.' => 'Pripojiť sa k serveru určenému pomocou __uri__.',
  'Expected type \'%s\', got type \'%s\'.' => 'Očakával sa typ \'%s\', získal sa typ \'%s\'.',
  'DEPRECATED' => 'ZASTARANÉ',
  'Unable to unlock file!' => 'Nepodarilo sa odomknúť súbor!',
  'String conversion from encoding \'%s\' to encoding \'%s\' failed: %s' => 'Prevod reťazca z kódovania \'%s\' na kódovanie \'%s\' zlyhal: %s',
  'Configured command aliases. Use the "alias" workflow to define aliases.' => 'Nakonfigurované aliasy príkazov. Na definovanie aliasov použite pracovný postup „alias“.',
  'You can not reiterate over a %s object. The entire goal of the construct is to avoid keeping output in memory. What you are attempting to do is silly and doesn\'t make any sense.' => 'Nad objektom %s nemôžete iterovať znova. Celým cieľom tejto konštrukcie je vyhnúť sa udržiavaniu výstupu v pamäti. To, o čo sa pokúšate, je hlúpe a nedáva žiadny zmysel.',
  'Successfully applied patch to the working copy.' => 'Záplata bola úspešne použitá na pracovnú kópiu.',
  'Unstaged changes in working copy:' => 'Nepripravené zmeny v pracovnej kópii:',
  'Failed to unserialize object: %s' => 'Nepodarilo sa deserializovať objekt: %s',
  'Use of Short Tag `%s`' => 'Použitie krátkej značky `%s`',
  'Intersection types are not available before PHP 8.1.' => 'Prienikové typy nie sú dostupné pred PHP 8.1.',
  'It is early morning. Glimses of sunlight peek through the trees and you hear the faint sound of birds overhead.' => 'Je skoré ráno. Cez stromy presvitajú záblesky slnečného svetla a nad hlavou počuť tlmený spev vtákov.',
  'Flag "--input" is not supported when reading pastes.' => 'Prepínač „--input“ nie je pri čítaní vložených textov podporovaný.',
  'Pass in a custom configuration file path.' => 'Odovzdať vlastnú cestu ku konfiguračnému súboru.',
  'Reduce/reduce conflict: from state \'%s\', when a \'%s\' is encountered, it may be reduced in multiple ways: %s' => 'Konflikt reduce/reduce: zo stavu \'%s\', keď sa narazí na \'%s\', dá sa redukovať viacerými spôsobmi: %s',
  'Configured prompt aliases. Use the "prompts" workflow to show prompts and responses.' => 'Nakonfigurované aliasy výziev. Na zobrazenie výziev a odpovedí použite pracovný postup „prompts“.',
  'List Assignment' => 'Priradenie zoznamu',
  '`%s` Should Be `%s`' => '`%s` by malo byť `%s`',
  'ACTUAL VALUE' => 'SKUTOČNÁ HODNOTA',
  'No HTTP engine extension exists with extension key "%s".' => 'Neexistuje žiadne rozšírenie nástroja HTTP s kľúčom rozšírenia „%s“.',
  'Symbol Information file does not exist!' => 'Súbor s informáciami o symboloch neexistuje!',
  'P4 SYNC' => 'SYNCHRONIZÁCIA P4',
  'Apply changes from a git patchfile or unified patchfile.' => 'Použiť zmeny zo súboru so záplatou git alebo unified.',
  'Self Member Reference' => 'Odkaz na vlastný člen',
  'Unable to upload file: path "%s" does not exist.' => 'Nepodarilo sa nahrať súbor: cesta „%s“ neexistuje.',
  'Multiple access type modifiers are not allowed.' => 'Viacero modifikátorov typu prístupu nie je povolených.',
  'Engine \'%s\' does not support %s.' => 'Nástroj \'%s\' nepodporuje %s.',
  'Use PHP-Parser instead of XHPAST.' => 'Použiť PHP-Parser namiesto XHPAST.',
  'Class Not Extending `%s`' => 'Trieda nededí z `%s`',
  'Browse Query "%s"' => 'Dopyt prehliadania „%s“',
  'LOAD ERROR' => 'CHYBA NAČÍTANIA',
  'Do not send "capability" message when clients connect. Clients must be configured not to expect the message. This deviates from the Mercurial protocol, but slightly improves performance.' => 'Pri pripojení klientov neposielať správu „capability“. Klienti musia byť nakonfigurovaní tak, aby túto správu neočakávali. Toto sa odchyľuje od protokolu Mercurial, ale mierne zlepšuje výkon.',
  'Options "D12345", "--revision", "--diff", "--arcbundle" and "--patch" are mutually exclusive. Choose exactly one patch source.' => 'Voľby „D12345“, „--revision“, „--diff“, „--arcbundle“ a „--patch“ sa navzájom vylučujú. Zvoľte presne jeden zdroj záplaty.',
  'Failed to decode JSON object.' => 'Nepodarilo sa dekódovať objekt JSON.',
  'You must provide a nonempty commit message.' => 'Musíte zadať neprázdnu správu commitu.',
  '%s runs all tests.' => '%s spustí všetky testy.',
  'Trying to execute a class map query for descendants of class "%s", but no such class or interface exists.' => 'Pokus o vykonanie dopytu mapy tried na potomkov triedy „%s“, ale žiadna taká trieda ani rozhranie neexistuje.',
  'Argument to "phutil_microseconds_since(...)" should be a value returned from "microtime(true)".' => 'Argument pre „phutil_microseconds_since(...)“ by mal byť hodnota vrátená z „microtime(true)“.',
  'Declaration Formatting' => 'Formátovanie deklarácií',
  'Normally, if a patch has dependencies that are not present in the working copy, arc tries to apply them as well. This flag prevents such work.' => 'Za normálnych okolností sa arc pokúsi použiť aj závislosti záplaty, ktoré nie sú v pracovnej kópii prítomné. Tento prepínač takejto práci zabráni.',
  'Regular expression engine emitted message: %s' => 'Nástroj regulárnych výrazov vypísal správu: %s',
  'Argument "%s" is ambiguous.' => 'Argument „%s“ je nejednoznačný.',
  'Install puppet-lint using `%s`.' => 'Nainštalujte puppet-lint pomocou `%s`.',
  'This repository has no VCS UUID (this is normal for git/hg).' => 'Tento repozitár nemá žiadne UUID VCS (pri git/hg je to normálne).',
  'Call to "proc_open()" to open a subprocess failed: %s' => 'Volanie „proc_open()“ na otvorenie podprocesu zlyhalo: %s',
  'Library "%s" (in "%s") is on branch "%s", but this branch is not supported for automatic upgrades. Supported branches are: %s.' => 'Knižnica „%s“ (v „%s“) je vo vetve „%s“, ale táto vetva nie je podporovaná pre automatické aktualizácie. Podporované vetvy sú: %s.',
  'Successfully %s patch.' => 'Záplata bola úspešne %s.',
  'Unable to find any local branches to update, staying on detached head.' => 'Nepodarilo sa nájsť žiadne lokálne vetvy na aktualizáciu, zostáva sa v odpojenom HEAD.',
  'A copy was saved to %s.' => 'Kópia bola uložená do %s.',
  'Title for the paste.' => 'Názov vloženého textu.',
  'AWS Request ID: %s' => 'ID požiadavky AWS: %s',
  'Priority' => 'Priorita',
  'Unnecessary Semicolon' => 'Zbytočná bodkočiarka',
  'There is nothing left to commit. None of the modified paths exist.' => 'Nezostáva nič na commitnutie. Žiadna z upravených ciest neexistuje.',
  'Unable to resolve default browse target.' => 'Nepodarilo sa vyhodnotiť predvolený cieľ prehliadania.',
  'Argument "%s" conflicts with unspecified argument "%s".' => 'Argument „%s“ je v konflikte s nezadaným argumentom „%s“.',
  'Unable to write configuration: there is no writable configuration source in the "%s" scope.' => 'Nepodarilo sa zapísať konfiguráciu: v rozsahu „%s“ neexistuje žiadny zapisovateľný konfiguračný zdroj.',
  'Closed' => 'Zavreté',
  'To go back to how things were before you ran "arc land", run these %s command(s):' => array(
    'Ak sa chcete vrátiť do stavu pred spustením „arc land“, spustite tento príkaz:',
    'Ak sa chcete vrátiť do stavu pred spustením „arc land“, spustite tieto príkazy:',
  ),
  'Useless Overriding Method' => 'Zbytočná prekrývajúca metóda',
  'Perform a clean rebuild, ignoring caches. Thorough, but slow.' => 'Vykonať čisté opätovné zostavenie s ignorovaním vyrovnávacích pamätí. Dôkladné, ale pomalé.',
  'Multiple exceptions were raised during test execution.' => 'Počas vykonávania testov bolo vyvolaných viacero výnimiek.',
  'Expected exactly one argument to "user(...)" with a user symbol.' => 'Očakával sa presne jeden argument pre „user(...)“ so symbolom používateľa.',
  'Use PHP-Parser to enforce coding conventions on PHP source files.' => 'Použiť PHP-Parser na vynucovanie kódovacích konvencií v zdrojových súboroch PHP.',
  'Semicolon Spacing' => 'Rozostupy bodkočiarky',
  'Trying rule \'%s\'.' => 'Skúša sa pravidlo \'%s\'.',
  'ID' => 'ID',
  'Allows you to disable all lint messages for a file by putting "%s" in the file body.' => 'Umožňuje vypnúť všetky správy lintu pre súbor vložením „%s“ do tela súboru.',
  'AMBIGUOUS SYMBOL' => 'NEJEDNOZNAČNÝ SYMBOL',
  'PyLint is a Python source code analyzer which looks for programming errors, helps enforcing a coding standard and sniffs for some code smells.' => 'PyLint je analyzátor zdrojového kódu Pythonu, ktorý hľadá programátorské chyby, pomáha vynucovať kódovací štandard a vyňuchá niektoré nedostatky v kóde.',
  'This loop reuses iterator variables (%s) from an outer loop. You might be clobbering the outer iterator. Change the inner loop to use a different iterator name.' => 'Tento cyklus opätovne používa premenné iterátora (%s) z vonkajšieho cyklu. Možno prepisujete vonkajší iterátor. Zmeňte vnútorný cyklus tak, aby používal iný názov iterátora.',
  'This codebase targets PHP %s, but nowdoc was not introduced until PHP 5.3.' => 'Táto kódová základňa cieli na PHP %s, ale nowdoc bol zavedený až v PHP 5.3.',
  'Implode With Glue First' => 'Implode s lepidlom ako prvým argumentom',
  'Diff for \'%s\' with context is %s bytes in length. Generally, source changes should not be this large.' => array(
    
    array(
      'Diff pre \'%s\' s kontextom má dĺžku %s bajt. Vo všeobecnosti by zmeny zdrojového kódu nemali byť také veľké.',
      'Diff pre \'%s\' s kontextom má dĺžku %s bajty. Vo všeobecnosti by zmeny zdrojového kódu nemali byť také veľké.',
      'Diff pre \'%s\' s kontextom má dĺžku %s bajtov. Vo všeobecnosti by zmeny zdrojového kódu nemali byť také veľké.',
    ),
  ),
  'Deleted After Multiple Copy' => 'Odstránené po viacnásobnom kopírovaní',
  'Empty `%s` statements are no longer supported in PHP 7.0.' => 'Prázdne príkazy `%s` už v PHP 7.0 nie sú podporované.',
  'Naming Conventions' => 'Konvencie pomenúvania',
  'Failed to remove file \'%s\'!' => 'Nepodarilo sa odstrániť súbor \'%s\'!',
  'Argument specification MUST have a \'name\'.' => 'Špecifikácia argumentu MUSÍ mať \'name\'.',
  'To configure Git to ignore certain files in this working copy, add the file paths to "%s".' => 'Ak chcete nakonfigurovať Git tak, aby v tejto pracovnej kópii ignoroval určité súbory, pridajte cesty k súborom do „%s“.',
  'Unable to determine the installed version of binary "%s". This version is required.' => 'Nepodarilo sa určiť nainštalovanú verziu binárneho súboru „%s“. Táto verzia sa vyžaduje.',
  'Dereferencing array and string literals was not introduced until PHP 5.5, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => 'Dereferencovanie literálov polí a reťazcov bolo zavedené až v PHP 5.5, ale táto kódová základňa cieli na skoršiu verziu PHP. Tento výraz môžete prepísať pomocou `%s`.',
  '%s must return an edge list array for each provided node, or the cycle detection algorithm may not terminate.' => '%s musí pre každý zadaný uzol vrátiť pole zoznamu hrán, inak sa algoritmus na zisťovanie cyklov nemusí ukončiť.',
  'Specify a command to execute using one or more arguments.' => 'Zadajte príkaz na vykonanie pomocou jedného alebo viacerých argumentov.',
  'MERGING' => 'ZLUČOVANIE',
  '`%s` Containing `%s` Methods Must Be Declared `%s`' => '`%s` obsahujúca metódy `%s` musí byť deklarovaná ako `%s`',
  '(Old and new values are identical.)' => '(Stará a nová hodnota sú zhodné.)',
  'Parent of: %s %s' => 'Nadradený prvok: %s %s',
  'Unable to locate script "%s" to run linter %s. You may need to install the script, or adjust your linter configuration.' => 'Nepodarilo sa nájsť skript „%s“ na spustenie lintera %s. Možno budete musieť skript nainštalovať alebo upraviť konfiguráciu lintera.',
  'This workflow (\'%s\') requires authentication, override %s to return true.' => 'Tento pracovný postup (\'%s\') vyžaduje overenie, prepíšte %s tak, aby vracalo true.',
  'Parse Error' => 'Chyba analýzy',
  'You can see the exact changes that will be sent by running this command:' => 'Presné zmeny, ktoré sa odošlú, si môžete pozrieť spustením tohto príkazu:',
  'Upload files.' => 'Nahrať súbory.',
  'Trying to resolve a path that goes higher then root' => 'Pokus o vyhodnotenie cesty, ktorá siaha vyššie ako koreň',
  'You can fix these paths by running \'%s\' on them.' => 'Tieto cesty môžete opraviť spustením \'%s\' na nich.',
  'Call to "assertCaught(..., <junk>, ...)" for test case "%s" passed bad value for test result. Expected null, Exception, or Throwable; got: %s.' => 'Volanie „assertCaught(..., <junk>, ...)“ pre testovací prípad „%s“ odovzdalo nesprávnu hodnotu pre výsledok testu. Očakávalo sa null, Exception alebo Throwable; získalo sa: %s.',
  'Certificate installed.' => 'Certifikát bol nainštalovaný.',
  'Merging with "%s" strategy, configured with "%s".' => 'Zlučuje sa stratégiou „%s“ nakonfigurovanou pomocou „%s“.',
  'SKIP STAGING' => 'PRESKOČIŤ PRÍPRAVU',
  'Error #%d executing svn info against \'%s\'.' => 'Chyba č. %d pri vykonávaní svn info na \'%s\'.',
  'Failed to set system locale (to "%s").' => 'Nepodarilo sa nastaviť systémovú lokalizáciu (na „%s“).',
  'The "onto" refs you have selected are connected to multiple different remotes via Git branch upstreams. Use "--onto-remote" to select a single remote.' => 'Refy „onto“, ktoré ste zvolili, sú prepojené s viacerými rôznymi vzdialenými úložiskami cez upstreamy vetiev Gitu. Pomocou „--onto-remote“ zvoľte jedno vzdialené úložisko.',
  'Class Name Literal' => 'Literál názvu triedy',
  'Name Error' => 'Chyba názvu',
  '**alias**' => '**alias**',
  '...and the current working copy state will be sent to Differential, because %s' => '...a do Differentialu sa odošle aktuálny stav pracovnej kópie, pretože %s',
  'Land revisions you are not the author of?' => 'Začleniť revízie, ktorých nie ste autorom?',
  '**prompts** __workflow__' => '**prompts** __workflow__',
  '(PROTOTYPE) Record a copy of the test results on the specified Harbormaster build target.' => '(PROTOTYP) Zaznamenať kópiu výsledkov testov na zadaný cieľ zostavenia Harbormaster.',
  'Duplicate Symbol' => 'Duplicitný symbol',
  'Implicit Fallthrough' => 'Implicitné prepadnutie',
  'Provide a map from lint codes to adjusted severity levels: error, warning, advice, autofix or disabled.' => 'Zadajte mapu z kódov lintu na upravené úrovne závažnosti: error, warning, advice, autofix alebo disabled.',
  'Unexpected `%s` Value' => 'Neočakávaná hodnota `%s`',
  'Failed to match against branch pattern "%s".' => 'Nepodarilo sa priradiť k vzoru vetvy „%s“.',
  'LOCAL CYCLE' => 'LOKÁLNY CYKLUS',
  'Extension ("%s") defines invalid alias ("%s") for configuration key ("%s"). Configuration keys and aliases: may only contain lowercase letters, numbers, hyphens, underscores, and periods; must start with a letter; and must be at least three characters long.' => 'Rozšírenie („%s“) definuje neplatný alias („%s“) pre konfiguračný kľúč („%s“). Konfiguračné kľúče a aliasy: môžu obsahovať iba malé písmená, číslice, spojovníky, podčiarkovníky a bodky; musia začínať písmenom; a musia mať aspoň tri znaky.',
  'Functions which should be considered deprecated.' => 'Funkcie, ktoré by sa mali považovať za zastarané.',
  'Connection could not be initiated. This usually indicates a DNS problem: verify the domain name is correct, that you can perform a DNS lookup for it from this machine. (Did you add the domain to `%s` on some other machine, but not this one?) This might also indicate that you specified the wrong port.' => 'Spojenie sa nepodarilo nadviazať. Zvyčajne to naznačuje problém s DNS: overte, či je názov domény správny a či pre ňu z tohto počítača dokážete vykonať vyhľadanie v DNS. (Nepridali ste doménu do `%s` na inom počítači, ale nie na tomto?) Môže to tiež naznačovať, že ste zadali nesprávny port.',
  'Resolved commit \'%s\' from rule \'%s\'.' => 'Commit \'%s\' bol vyhodnotený z pravidla \'%s\'.',
  'When landing multiple revisions at once, push and rebase after each merge completes instead of waiting until all merges are completed to push.' => 'Pri začleňovaní viacerých revízií naraz vykonať odoslanie a rebase po dokončení každého zlúčenia namiesto čakania na dokončenie všetkých zlúčení pred odoslaním.',
  'HEAD has been amended with \'Differential Revision:\', as specified by \'%s\' in your %s \'base\' configuration.' => 'HEAD bol doplnený o \'Differential Revision:\', ako je určené pomocou \'%s\' vo vašej konfigurácii \'base\' v %s.',
  'Untracked changes in working copy:' => 'Nesledované zmeny v pracovnej kópii:',
  'Hardpoint generator (for query "%s") yielded an unexpected value (of type "%s").' => 'Generátor hardpointov (pre dopyt „%s“) odovzdal neočakávanú hodnotu (typu „%s“).',
  'The "execute()" method of "PhutilExecPassthru" is deprecated and calls should be replaced with "resolve()". See T13660.' => 'Metóda „execute()“ triedy „PhutilExecPassthru“ je zastaraná a volania by sa mali nahradiť volaním „resolve()“. Pozri T13660.',
  'List of prompt responses.' => 'Zoznam odpovedí na výzvy.',
  'Then paste the API Token on that page below.' => 'Potom nižšie vložte token API z tejto stránky.',
  'Peforce remote "%s" was selected because the existence of this remote implies this working copy was synchronized from a Perforce repository.' => 'Vzdialené úložisko Perforce „%s“ bolo zvolené, pretože existencia tohto vzdialeného úložiska naznačuje, že táto pracovná kópia bola synchronizovaná z repozitára Perforce.',
  'Failed to push lfs changes to staging area. Correct the issue, or use --skip-staging to skip this step.' => 'Nepodarilo sa odoslať zmeny lfs do prípravnej oblasti. Opravte problém alebo tento krok preskočte pomocou --skip-staging.',
  'RULES' => 'PRAVIDLÁ',
  'Installed shell completion support for "%s" to "%s".' => 'Podpora dopĺňania v shelli pre „%s“ bola nainštalovaná do „%s“.',
  'There was an error verifying the SSL Certificate Authority while negotiating the SSL connection. This usually indicates that you are using a self-signed certificate but have not added your CA to the CA bundle. See instructions in "%s".' => 'Pri vyjednávaní SSL spojenia sa vyskytla chyba pri overovaní certifikačnej autority SSL. Zvyčajne to znamená, že používate certifikát podpísaný sebou samým, ale nepridali ste svoju CA do balíka CA. Pozrite si pokyny v „%s“.',
  'LINT ERRORS' => 'CHYBY LINTU',
  'Put closing braces on the same line as control statements and declarations, with a single space after them.' => 'Zatváracie zložené zátvorky umiestňujte na ten istý riadok ako riadiace príkazy a deklarácie, s jednou medzerou za nimi.',
  'Base revisions of changed paths are mismatched. Update all paths to the same base revision before creating a diff: 

%s' => 'Základné revízie zmenených ciest sa nezhodujú. Pred vytvorením diffu aktualizujte všetky cesty na rovnakú základnú revíziu: 

%s',
  'Unexpected `%s` value in property hook setter.' => 'Neočakávaná hodnota `%s` v settri háku vlastnosti.',
  'You can not add new actions to an exiting agent.' => 'Do ukončujúceho sa agenta nemôžete pridávať nové akcie.',
  'To install shell completion support for "%s", a new "%s" file will be created with this content:' => 'Na inštaláciu podpory dopĺňania v shelli pre „%s“ sa vytvorí nový súbor „%s“ s týmto obsahom:',
  'The diff or revision you specified is either invalid or you don\'t have permission to view it.' => 'Diff alebo revízia, ktorú ste zadali, je buď neplatná, alebo nemáte oprávnenie ju zobraziť.',
  'Install `%s` from <%s>.' => 'Nainštalujte `%s` z <%s>.',
  'Configuration source ("%s") has no value for key ("%s").' => 'Konfiguračný zdroj („%s“) nemá žiadnu hodnotu pre kľúč („%s“).',
  'Create %s new branche(s) in the remote?' => array(
    'Vytvoriť vo vzdialenom úložisku novú vetvu?',
    'Vytvoriť vo vzdialenom úložisku %s nové vetvy?',
    'Vytvoriť vo vzdialenom úložisku %s nových vetiev?',
  ),
  'You can not execute an HTTP future with both a raw request body and structured request data.' => 'Nemôžete vykonať HTTP future so surovým telom požiadavky aj štruktúrovanými údajmi požiadavky súčasne.',
  'Writing %s...' => 'Zapisuje sa %s...',
  'Use `%s` instead of `%s` to indicate public visibility.' => 'Na označenie verejnej viditeľnosti používajte `%s` namiesto `%s`.',
  'Returning to original branch "%s" in original state.' => 'Vraciame sa na pôvodnú vetvu „%s“ v pôvodnom stave.',
  'Landing onto target "%s", the default target under Mercurial.' => 'Začleňuje sa do cieľa „%s“, čo je predvolený cieľ v systéme Mercurial.',
  'You are installing a standard API token, but a CLI API token was expected. If you\'re writing a script, consider passing the token at runtime with --conduit-token instead of installing it.' => 'Inštalujete štandardný token API, ale očakával sa token API pre CLI. Ak píšete skript, zvážte odovzdanie tokenu za behu pomocou --conduit-token namiesto jeho inštalácie.',
  'Controls the number of symbol mapper subprocesses run at once. Defaults to 8.' => 'Riadi počet podprocesov mapovača symbolov spustených naraz. Predvolene 8.',
  'Unable to connect socket! Error #%d: %s' => 'Nepodarilo sa pripojiť soket! Chyba č. %d: %s',
  'Failed to set socket nonblocking!' => 'Nepodarilo sa nastaviť soket ako neblokujúci!',
  'Will merge into target "%s" by default, because this is the first "onto" target.' => 'Predvolene sa zlúči do cieľa „%s“, pretože je to prvý cieľ „onto“.',
  'USAGE EXCEPTION' => 'VÝNIMKA POUŽITIA',
  'Unable to locate %s. Configure it with the \'%s\' option in %s.' => 'Nepodarilo sa nájsť %s. Nakonfigurujte ho voľbou \'%s\' v %s.',
  'Always disable coverage information.' => 'Vždy zakázať informácie o pokrytí.',
  'Generated Code' => 'Generovaný kód',
  'Specify exactly one working copy!' => 'Zadajte presne jednu pracovnú kópiu!',
  'Unable to load hardpoint "%s" for object (of type "%s"). All hardpoint query tasks resolved but none attached a value to the hardpoint.' => 'Nepodarilo sa načítať hardpoint „%s“ pre objekt (typu „%s“). Všetky dopytovacie úlohy hardpointu sa vyriešili, ale žiadna k hardpointu nepripojila hodnotu.',
  'Multiple supported shells were detected. Unable to determine which shell to install autocompletion rules for. Use "--shell" to select a shell.' => 'Zistilo sa viacero podporovaných shellov. Nepodarilo sa určiť, pre ktorý shell sa majú nainštalovať pravidlá automatického dopĺňania. Na výber shellu použite „--shell“.',
  '(The Empty Void)' => '(Prázdna prázdnota)',
  'Revision %s, %s' => 'Revízia %s, %s',
  'Assertion failed, expected values to be equal (at %s:%d): %s' => 'Tvrdenie zlyhalo, očakávalo sa, že hodnoty budú rovnaké (na %s:%d): %s',
  'Trailing Whitespace at EOF' => 'Biele znaky na konci súboru',
  'You don\'t own revision %s: "%s". Normally, you should only update revisions you own. You can "Commandeer" this revision from the web interface if you want to become the owner.

Update this revision anyway?' => 'Nevlastníte revíziu %s: „%s“. Za normálnych okolností by ste mali aktualizovať iba revízie, ktoré vlastníte. Ak sa chcete stať vlastníkom, môžete túto revíziu „Prevziať“ vo webovom rozhraní.

Napriek tomu aktualizovať túto revíziu?',
  'Arguments "--into" and "--into-empty" are mutually exclusive.' => 'Argumenty „--into“ a „--into-empty“ sa navzájom vylučujú.',
  'Imported symbols should not be prefixed with `%s`.' => 'Importované symboly by nemali mať predponu `%s`.',
  'When creating a revision, add reviewers.' => 'Pri vytváraní revízie pridať recenzentov.',
  'Trailing Whitespace' => 'Biele znaky na konci',
  'Expected \'\\ No newline at end of file\'.' => 'Očakávalo sa \'\\ No newline at end of file\'.',
  'Interface symbol "%s" should be written as "%s".' => 'Symbol rozhrania „%s“ by sa mal písať ako „%s“.',
  'Preparing merge into local target "%s", at commit "%s".' => 'Pripravuje sa zlúčenie do lokálneho cieľa „%s“ pri commite „%s“.',
  'Call to %s(%s, ...) failed.' => 'Volanie %s(%s, ...) zlyhalo.',
  'Unnecessary Double Quotes' => 'Zbytočné dvojité úvodzovky',
  'Some rules can never be reached from any production: %s' => 'Niektoré pravidlá sa nikdy nedajú dosiahnuť zo žiadnej produkcie: %s',
  'Can not draw a grid with no columns!' => 'Nedá sa nakresliť mriežka bez stĺpcov!',
  '%s suppresses unassigned' => '%s potláča nepriradené',
  'French (France)' => 'francúzština (Francúzsko)',
  'Unable to write log "%s" to path "%s" because the path is not writable.' => 'Nepodarilo sa zapísať denník „%s“ na cestu „%s“, pretože do tejto cesty sa nedá zapisovať.',
  'Included changes:' => 'Zahrnuté zmeny:',
  'Command failed with error #%s!' => 'Príkaz zlyhal s chybou č. %s!',
  'The default response to this prompt is "%s".' => 'Predvolená odpoveď na túto výzvu je „%s“.',
  'Received error from Slack: %s' => 'Od služby Slack prišla chyba: %s',
  'Use faster but less readable serialization for "--show".' => 'Použiť rýchlejšiu, ale menej čitateľnú serializáciu pre „--show“.',
  'Failed to read file!' => 'Nepodarilo sa prečítať súbor!',
  'Branch "%s" does not exist in the local working copy.' => 'Vetva „%s“ v lokálnej pracovnej kópii neexistuje.',
  'Refs were selected with the "--onto" flag: %s.' => 'Refy boli zvolené prepínačom „--onto“: %s.',
  'Use `%s` instead of `%s`.' => 'Používajte `%s` namiesto `%s`.',
  'Unable to locate %s coverage runner (have you built yet?)' => 'Nepodarilo sa nájsť spúšťač pokrytia %s (už ste ho zostavili?)',
  'PROMPT' => 'VÝZVA',
  'This configuration option ("%s") does not support runtime definition with "--config".' => 'Táto konfiguračná možnosť („%s“) nepodporuje definíciu za behu pomocou „--config“.',
  'You have a saved revision message in \'%s\'.
%sYou can use this message, or discard it.' => 'Máte uloženú správu revízie v \'%s\'.
%sTúto správu môžete použiť alebo zahodiť.',
  'Hardpoint ("%s") already has attached data.' => 'Hardpoint („%s“) už má pripojené údaje.',
  'Array Element' => 'Prvok poľa',
  'Selected "onto" ref "%s" is invalid: the empty string is not a valid ref.' => 'Zvolený ref „onto“ „%s“ je neplatný: prázdny reťazec nie je platný ref.',
  'Use of `%s` in Static Context' => 'Použitie `%s` v statickom kontexte',
  'Instead of exporting changes from the working copy, export them from a Differential diff.' => 'Namiesto exportovania zmien z pracovnej kópie ich exportovať z diffu Differential.',
  'Show detailed information about options.' => 'Zobraziť podrobné informácie o voľbách.',
  'Push failed! Fix the error and run "arc land" again.' => 'Odoslanie zlyhalo! Opravte chybu a spustite „arc land“ znova.',
  '%s argument to %s must not be empty' => 'Argument %s pre %s nesmie byť prázdny',
  '%s %s -> %s %s %s' => '%s %s -> %s %s %s',
  'Expected %s for %%P conversion.' => 'Očakávalo sa %s pre konverziu %%P.',
  'Provide the details for a new revision, then save and exit.' => 'Zadajte podrobnosti novej revízie, potom uložte a ukončite.',
  'Common causes are:

  - Your copy of %s is out of date.
    This is the most common cause.
    Update this copy of %s:

      %s

  - Some other library is out of date.
    Update the library this symbol appears in.

  - The symbol is misspelled.
    Spell the symbol name correctly.

  - You added the symbol recently, but have not updated
    the symbol map for the library.
    Run "arc liberate" in the library where the symbol is
    defined.

  - This symbol is defined in an external library.
    Use "@phutil-external-symbol" to annotate it.
    Use "grep" to find examples of usage.' => 'Bežné príčiny sú:

  - Vaša kópia %s je zastaraná.
    Toto je najčastejšia príčina.
    Aktualizujte túto kópiu %s:

      %s

  - Nejaká iná knižnica je zastaraná.
    Aktualizujte knižnicu, v ktorej sa tento symbol nachádza.

  - Symbol je preklepnutý.
    Napíšte názov symbolu správne.

  - Symbol ste pridali nedávno, ale neaktualizovali ste
    mapu symbolov knižnice.
    Spustite „arc liberate“ v knižnici, kde je symbol
    definovaný.

  - Tento symbol je definovaný v externej knižnici.
    Anotujte ho pomocou „@phutil-external-symbol“.
    Príklady použitia nájdete pomocou „grep“.',
  'Possible spelling error. You wrote \'%s\', but did you mean \'%s\'?' => 'Možný preklep. Napísali ste \'%s\', ale mysleli ste \'%s\'?',
  'See <%s>. The default merge strategy under Git with "history.immutable" has changed from "merge" to "squash". Your configuration is ambiguous under this behavioral change. (Use "--strategy" or configure "arc.land.strategy" to bypass this check.)' => 'Pozri <%s>. Predvolená stratégia zlučovania v Gite s „history.immutable“ sa zmenila z „merge“ na „squash“. Vaša konfigurácia je pri tejto zmene správania nejednoznačná. (Túto kontrolu obídete pomocou „--strategy“ alebo nakonfigurovaním „arc.land.strategy“.)',
  'Unknown diff type.' => 'Neznámy typ diffu.',
  '"arc amend" is only supported under Mercurial 2.2 or newer. Older versions of Mercurial do not support the "--amend" flag to "hg commit ...", which this workflow requires.' => '„arc amend“ je podporovaný iba v Mercuriale 2.2 alebo novšom. Staršie verzie Mercurialu nepodporujú prepínač „--amend“ pre „hg commit ...“, ktorý tento pracovný postup vyžaduje.',
  'Since exactly one revision in Differential matches this working copy, it will be **updated** if you run \'%s\'.' => 'Keďže tejto pracovnej kópii zodpovedá presne jedna revízia v Differentiale, po spustení \'%s\' bude **aktualizovaná**.',
  'Assertion failed, expected \'%s\' (at %s:%d).' => 'Tvrdenie zlyhalo, očakávalo sa \'%s\' (na %s:%d).',
  'Merge strategy "%s" specified with "--strategy" is unknown. Supported merge strategies are: %s.' => 'Stratégia zlučovania „%s“ zadaná pomocou „--strategy“ je neznáma. Podporované stratégie zlučovania sú: %s.',
  'Expected exactly one change.' => 'Očakávala sa presne jedna zmena.',
  'Local branch "%s" has unpublished changes, checking it out but leaving them in place.' => 'Lokálna vetva „%s“ má nepublikované zmeny, prepína sa na ňu, ale zmeny sa ponechávajú na mieste.',
  'This version control system does not support commit ranges.' => 'Tento systém správy verzií nepodporuje rozsahy commitov.',
  'Unexpected operator in static expression.' => 'Neočakávaný operátor v statickom výraze.',
  'Class Not `%s` Or `%s`' => 'Trieda nie je `%s` ani `%s`',
  'Confirms history mutation in a working copy marked as immutable.' => 'Potvrdzuje mutáciu histórie v pracovnej kópii označenej ako nemenná.',
  'Second hash argument must be a string.' => 'Druhý argument hashu musí byť reťazec.',
  'it is the merge-base of the upstream of the current branch and HEAD, and matched the rule \'%s\' in your %s \'base\' configuration.' => 'je to merge-base upstreamu aktuálnej vetvy a HEAD a zhodoval sa s pravidlom \'%s\' vo vašej konfigurácii \'base\' v %s.',
  'Unable to get checksum.' => 'Nepodarilo sa získať kontrolný súčet.',
  'LOAD' => 'NAČÍTANIE',
  'Open this page in your browser and log in if necessary:' => 'Otvorte túto stránku vo svojom prehliadači a v prípade potreby sa prihláste:',
  'Can\'t resolve a PHAR path relative to another PHAR path. Trying to resolve path `%s` relative to `%s` .' => 'Cesta PHAR sa nedá vyhodnotiť relatívne k inej ceste PHAR. Pokus o vyhodnotenie cesty `%s` relatívne k `%s` .',
  'Attempting to reduce and rebase changes.' => 'Pokúša sa o zredukovanie a rebase zmien.',
  'A definition of "%s %s" in "%s" will be ignored.' => 'Definícia „%s %s“ v „%s“ sa bude ignorovať.',
  'TODO: You are forcing a revision, but commits are associated with some other revision. Are you REALLY sure you want to land ALL these commits with a different unrelated revision???' => 'TODO: Vynucujete revíziu, ale commity sú priradené k nejakej inej revízii. Ste NAOZAJ si istí, že chcete začleniť VŠETKY tieto commity s inou nesúvisiacou revíziou???',
  'Unexpected return value from call to "%s": %s.' => 'Neočakávaná návratová hodnota z volania „%s“: %s.',
  'Specify one of \'%s\', \'%s\' or \'%s\' to choose an export format.' => 'Na výber formátu exportu zadajte jednu z volieb \'%s\', \'%s\' alebo \'%s\'.',
  'Export change as an arc bundle. This format can represent all changes. These bundles can be applied with \'%s\'.' => 'Exportovať zmenu ako balík arc. Tento formát dokáže reprezentovať všetky zmeny. Tieto balíky sa dajú použiť pomocou \'%s\'.',
  'Unknown object type "%s", supported types are: %s.' => 'Neznámy typ objektu „%s“, podporované typy sú: %s.',
  'When linting git repositories, amend HEAD with all patches suggested by lint without prompting.' => 'Pri lintovaní repozitárov git doplniť HEAD o všetky záplaty navrhnuté lintom bez pýtania sa.',
  'Expected a hunk header, like \'%s\' (svn), \'%s\' (svn properties), \'%s\' (git show), \'%s\' (git diff), \'%s\' (unified diff), or \'%s\' (hg diff or patch).' => 'Očakávala sa hlavička bloku ako \'%s\' (svn), \'%s\' (vlastnosti svn), \'%s\' (git show), \'%s\' (git diff), \'%s\' (unified diff) alebo \'%s\' (hg diff alebo patch).',
  'Run every test associated with a tracked file in the working copy.' => 'Spustiť každý test priradený k sledovanému súboru v pracovnej kópii.',
  'To push changes manually, run these %s command(s):' => array(
    'Ak chcete zmeny odoslať ručne, spustite tento príkaz:',
    'Ak chcete zmeny odoslať ručne, spustite tieto príkazy:',
  ),
  'Preparing merge into the empty state to create target "%s" in remote "%s".' => 'Pripravuje sa zlúčenie do prázdneho stavu na vytvorenie cieľa „%s“ vo vzdialenom úložisku „%s“.',
  'To do this, run: **%s**' => 'Urobíte to spustením: **%s**',
  '`%s` methods cannot be marked as `%s`. This construct will cause a fatal error.' => 'Metódy `%s` sa nedajú označiť ako `%s`. Táto konštrukcia spôsobí fatálnu chybu.',
  'Lint issued unresolved warnings.' => 'Lint vydal nevyriešené upozornenia.',
  'The test failed in an abnormal or severe way. For example, the harness crashed instead of reporting a failure.' => 'Test zlyhal abnormálnym alebo závažným spôsobom. Napríklad spúšťací systém spadol namiesto toho, aby ohlásil zlyhanie.',
  'Dec' => 'dec',
  'Resolve these errors:' => 'Vyriešte tieto chyby:',
  'Channel closed while waiting for message!' => 'Kanál sa zavrel počas čakania na správu!',
  'Nullsafe operators are not available before PHP 8.0.' => 'Operátory nullsafe nie sú dostupné pred PHP 8.0.',
  'Unable to push changes to the staging area.' => 'Nepodarilo sa odoslať zmeny do prípravnej oblasti.',
  'SHELVE' => 'ODLOŽIŤ',
  'Script and Regex' => 'Skript a regulárny výraz',
  'To install shell completion support for "%s", this line will be added to your existing "%s" file:' => 'Na inštaláciu podpory dopĺňania v shelli pre „%s“ sa do vášho existujúceho súboru „%s“ pridá tento riadok:',
  'Instead of creating or updating a revision, only create a diff, which you may later attach to a revision.' => 'Namiesto vytvorenia alebo aktualizácie revízie vytvoriť iba diff, ktorý môžete neskôr pripojiť k revízii.',
  'Follow naming conventions: methods should be named using `%s`.' => 'Dodržiavajte konvencie pomenúvania: metódy by sa mali pomenúvať pomocou `%s`.',
  'These branches were selected:' => 'Boli zvolené tieto vetvy:',
  'You must provide a commit message.' => 'Musíte zadať správu commitu.',
  'What do you want to name this library?' => 'Ako chcete pomenovať túto knižnicu?',
  'Preparing to upgrade "%s"...' => 'Pripravuje sa aktualizácia „%s“...',
  'No changes found. (Did you specify the wrong commit range?)' => 'Nenašli sa žiadne zmeny. (Nezadali ste nesprávny rozsah commitov?)',
  'Request specifies two values for key "%s", but parameter names must be unique if you are posting file data due to limitations with cURL.' => 'Požiadavka určuje dve hodnoty pre kľúč „%s“, ale ak odosielate údaje súboru, názvy parametrov musia byť jedinečné kvôli obmedzeniam cURL.',
  'DETECT' => 'ZISŤOVANIE',
  'rebuild the symbol-information.json file' => 'znovu zostaviť súbor symbol-information.json',
  'Build Plan %d' => 'Plán zostavenia %d',
  'No lint engine is configured for this project. Create an \'%s\' file, or configure an advanced engine with \'%s\' in \'%s\'.' => 'Pre tento projekt nie je nakonfigurovaný žiadny lintovací nástroj. Vytvorte súbor \'%s\' alebo nakonfigurujte pokročilý nástroj pomocou \'%s\' v \'%s\'.',
  'Unexpected output on agent stderr: %s.' => 'Neočakávaný výstup na stderr agenta: %s.',
  'Attempting to make an HTTP request which includes file data, but the value of a query parameter begins with "%s". PHP interprets these values to mean that it should read arbitrary files off disk and transmit them to remote servers. Declining to make this request.' => 'Pokus o odoslanie požiadavky HTTP, ktorá obsahuje údaje súboru, ale hodnota parametra dopytu začína znakom „%s“. PHP tieto hodnoty interpretuje tak, že má načítať ľubovoľné súbory z disku a odoslať ich na vzdialené servery. Táto požiadavka sa odmieta.',
  'CLEANUP' => 'VYČISTENIE',
  'Failed to parse \'%s\' as JSON.' => 'Nepodarilo sa analyzovať \'%s\' ako JSON.',
  'This function is expected to have a format string.' => 'Očakáva sa, že táto funkcia bude mať formátovací reťazec.',
  'First class callables are not available before PHP 8.1.' => 'Prvotriedne volateľné objekty nie sú dostupné pred PHP 8.1.',
  'Revision \'%s\' does not exist!' => 'Revízia \'%s\' neexistuje!',
  'Run with %s for more details.' => 'Ďalšie podrobnosti získate spustením s %s.',
  'UNRELATED REVISION' => 'NESÚVISIACA REVÍZIA',
  'LibXML Error' => 'Chyba LibXML',
  '`%s` Method Cannot Contain Body' => 'Metóda `%s` nemôže obsahovať telo',
  'Unknown type \'%s\' in type matrix.' => 'Neznámy typ \'%s\' v matici typov.',
  'OPEN REVISION' => 'OTVORENÁ REVÍZIA',
  'Remote "%s" was selected by following tracking branches upstream to the closest remote.' => 'Vzdialené úložisko „%s“ bolo zvolené sledovaním sledovacích vetiev v upstreame až po najbližšie vzdialené úložisko.',
  'Prompt ("%s") has no query text!' => 'Výzva („%s“) nemá žiadny text otázky!',
  'Methods should have one preceding blank line.' => 'Pred metódami by mal byť jeden prázdny riadok.',
  'These commits will be included in the diff:' => 'V diffe budú zahrnuté tieto commity:',
  '%s REVISION(S) ARE NOT ACCEPTED' => array(
    '%s REVÍZIA NIE JE SCHVÁLENÁ',
    '%s REVÍZIE NIE SÚ SCHVÁLENÉ',
    '%s REVÍZIÍ NIE JE SCHVÁLENÝCH',
  ),
  'HOLD CHANGES' => 'PODRŽAŤ ZMENY',
  'Expected unit for meminfo key "%s" in meminfo source "%s" to be "kB", found "%s".' => 'Očakávalo sa, že jednotka pre kľúč meminfo „%s“ v zdroji meminfo „%s“ bude „kB“, našlo sa „%s“.',
  'The cURL library raised an error while making a request. You may be able to find more information about this error (error code: %d) on the cURL site: %s' => 'Knižnica cURL vyvolala počas odosielania požiadavky chybu. Ďalšie informácie o tejto chybe (kód chyby: %d) môžete nájsť na stránke cURL: %s',
  'Unable to upload file: failed to read %d bytes after offset %d from file at path "%s".' => 'Nepodarilo sa nahrať súbor: nepodarilo sa prečítať %d bajtov po posune %d zo súboru na ceste „%s“.',
  'Duplicate Case Statements' => 'Duplicitné príkazy case',
  'P4 MODE' => 'REŽIM P4',
  'This variable was used already as a by-reference iterator variable. Such variables survive outside the `%s` loop, do not reuse.' => 'Táto premenná sa už použila ako premenná iterátora odovzdávaná referenciou. Takéto premenné prežívajú aj mimo cyklu `%s`, nepoužívajte ich znova.',
  'Install completion support for a particular shell.' => 'Nainštalovať podporu dopĺňania pre konkrétny shell.',
  'Expected a regular expression, but \'%s\' is not valid: %s' => 'Očakával sa regulárny výraz, ale \'%s\' nie je platný: %s',
  'Expected a natural list!' => 'Očakával sa prirodzený zoznam!',
  'Options \'%s\' and \'%s\' are not compatible. Choose exactly one change source.' => 'Voľby \'%s\' a \'%s\' nie sú kompatibilné. Zvoľte presne jeden zdroj zmien.',
  'German (Germany)' => 'nemčina (Nemecko)',
  'A list of paths to phutil libraries that should be loaded at startup. This can be used to make classes available, like lint or unit test engines.' => 'Zoznam ciest ku knižniciam phutil, ktoré sa majú načítať pri spustení. Dá sa použiť na sprístupnenie tried, napríklad lintovacích nástrojov alebo nástrojov na jednotkové testy.',
  'Revision %s does not exist.' => 'Revízia %s neexistuje.',
  'Unable to write log "%s" to path "%s". The containing directory ("%s") does not exist or is not readable, and could not be created.' => 'Nepodarilo sa zapísať denník „%s“ na cestu „%s“. Nadradený adresár („%s“) neexistuje alebo sa nedá čítať a nepodarilo sa ho vytvoriť.',
  'INFO' => 'INFO',
  'You are using "--hold", so execution will stop before the %s branche(s) are actually created. You will be given instructions to create the branches.' => array(
    'Používate „--hold“, takže vykonávanie sa zastaví predtým, než sa vetva skutočne vytvorí. Dostanete pokyny na vytvorenie vetvy.',
    'Používate „--hold“, takže vykonávanie sa zastaví predtým, než sa vetvy skutočne vytvoria. Dostanete pokyny na vytvorenie vetiev.',
  ),
  'Trying to create a %s without a working copy!' => 'Pokus o vytvorenie %s bez pracovnej kópie!',
  'Defining constant arrays was not introduced until PHP 5.6, but this codebase targets an earlier version of PHP.' => 'Definovanie konštantných polí bolo zavedené až v PHP 5.6, ale táto kódová základňa cieli na skoršiu verziu PHP.',
  'PREPARING' => 'PRIPRAVUJE SA',
  'Korean (Republic of Korea)' => 'kórejčina (Kórejská republika)',
  'Stifles developer creativity by requiring files have uninspired names containing only letters, numbers, period, hyphen and underscore.' => 'Potláča tvorivosť vývojárov tým, že vyžaduje, aby súbory mali neinšpiratívne názvy obsahujúce iba písmená, číslice, bodku, spojovník a podčiarkovník.',
  'Use `%s` instead of `%s`. The former is a language construct whereas the latter is a function call, which has additional overhead.' => 'Používajte `%s` namiesto `%s`. Prvé je jazyková konštrukcia, kým druhé je volanie funkcie, ktoré má dodatočnú réžiu.',
  'Attempt to convert non UTF-8 patch into specified encoding.' => 'Pokus o prevod záplaty, ktorá nie je v UTF-8, na zadané kódovanie.',
  'Mercurial does not support %s yet.' => 'Mercurial zatiaľ nepodporuje %s.',
  'Amend working copy using revision owned by %s?' => 'Doplniť pracovnú kópiu pomocou revízie, ktorú vlastní %s?',
  'Callback must be callable.' => 'Spätné volanie musí byť volateľné.',
  'Trailing commas in group-use statements are not available before PHP 7.2.' => 'Čiarky na konci v skupinových príkazoch use nie sú dostupné pred PHP 7.2.',
  'Converted a \'%s\' hunk from \'%s\' to UTF-8.
' => 'Blok \'%s\' bol prevedený z \'%s\' na UTF-8.',
  'moves' => 'presuny',
  'INTO REMOTE' => 'DO VZDIALENÉHO ÚLOŽISKA',
  'Unknown conversion %s.' => 'Neznáma konverzia %s.',
  'Unable to write to stdin!' => 'Nepodarilo sa zapísať do stdin!',
  'Uncommitted changes in working copy:' => 'Necommitnuté zmeny v pracovnej kópii:',
  'Merge Conflicts' => 'Konflikty zlúčenia',
  'Symbol "%s" does not identify a bookmark, branch, or commit.' => 'Symbol „%s“ neidentifikuje záložku, vetvu ani commit.',
  '<none>' => '<žiadne>',
  'The flags "--generate" and "--shell" are mutually exclusive. The "--shell" flag selects which shell to install support for, but the "--generate" suppresses installation.' => 'Prepínače „--generate“ a „--shell“ sa navzájom vylučujú. Prepínač „--shell“ volí, pre ktorý shell sa má podpora nainštalovať, ale „--generate“ inštaláciu potláča.',
  'Builtin Defaults' => 'Vstavané predvolené hodnoty',
  'Paste API Token from that page:' => 'Vložte token API z tejto stránky:',
  'User Config File' => 'Používateľský konfiguračný súbor',
  'it is the merge-base of \'%s\' (the Git upstream of the current branch) HEAD.' => 'je to merge-base \'%s\' (upstream aktuálnej vetvy v Gite) a HEAD.',
  'Call to "assertCaught(<junk>, ...)" for test case "%s" passed bad expected value. Expected bool, class name as a string, or a list of class names. Got: %s.' => 'Volanie „assertCaught(<junk>, ...)“ pre testovací prípad „%s“ odovzdalo nesprávnu očakávanú hodnotu. Očakával sa bool, názov triedy ako reťazec alebo zoznam názvov tried. Získalo sa: %s.',
  'Do not prettify JSON output.' => 'Neskrášľovať výstup JSON.',
  'Print symbol information to stdout instead of writing it to the symbol-information.json file.' => 'Vypísať informácie o symboloch na stdout namiesto ich zapísania do súboru symbol-information.json.',
  'The format of user symbol "%s" is unrecognized. Expected a username like "alice" or "@alice", or a user PHID, or a user ID, or a special function like "viewer()".' => 'Formát symbolu používateľa „%s“ nie je rozpoznaný. Očakávalo sa používateľské meno ako „alice“ alebo „@alice“, alebo PHID používateľa, alebo ID používateľa, alebo špeciálna funkcia ako „viewer()“.',
  'Checks the permissions on files and ensures that they are not made to be executable unnecessarily. In particular, a file should not be executable unless it is either binary or contain a shebang.' => 'Kontroluje oprávnenia súborov a zabezpečuje, aby neboli zbytočne spustiteľné. Konkrétne, súbor by nemal byť spustiteľný, pokiaľ nie je buď binárny, alebo neobsahuje shebang.',
  'Use XHPAST to enforce coding conventions on PHP source files.' => 'Použiť XHPAST na vynucovanie kódovacích konvencií v zdrojových súboroch PHP.',
  'Set conduit credentials with %s before authenticating conduit!' => 'Pred overením conduit nastavte poverenia conduit pomocou %s!',
  'There are no commits to land.' => 'Nie sú žiadne commity na začlenenie.',
  '`%s` Reassignment' => 'Opätovné priradenie `%s`',
  'Failed to connect to server (%s): %s' => 'Nepodarilo sa pripojiť k serveru (%s): %s',
  'These %s symbol(s) do not exist in the remote. They will be created as new bookmarks:' => array(
    'Tento symbol vo vzdialenom úložisku neexistuje. Vytvorí sa ako nová záložka:',
    'Tieto symboly vo vzdialenom úložisku neexistujú. Vytvoria sa ako nové záložky:',
  ),
  'You must %s!' => 'Musíte %s!',
  'When creating a new branch or bookmark, use this as the branch point.' => 'Pri vytváraní novej vetvy alebo záložky použiť toto ako bod vetvenia.',
  'CHOOSE' => 'VÝBER',
  'Expected: %s
  Actual: %s' => 'Očakávané: %s
 Skutočné: %s',
  'Brace Placement' => 'Umiestnenie zložených zátvoriek',
  'Accept/reduce conflict!' => 'Konflikt accept/reduce!',
  'Specify a URI explicitly with `--config phabricator.uri=<uri>`.' => 'Zadajte URI výslovne pomocou `--config phabricator.uri=<uri>`.',
  'You can not reference `%s` inside a static method.' => 'Vnútri statickej metódy sa nedá odkazovať na `%s`.',
  'Buildable Symbol "%s"' => 'Symbol zostaviteľného objektu „%s“',
  'Passing any other value than `%s` to the third parameter of `%s` is no longer supported in PHP 8.0.' => 'Odovzdávanie inej hodnoty než `%s` do tretieho parametra `%s` už v PHP 8.0 nie je podporované.',
  'Merge target is ambiguous.' => 'Cieľ zlúčenia je nejednoznačný.',
  'Local ref "%s" does not exist.' => 'Lokálny ref „%s“ neexistuje.',
  '%s us' => '%s us',
  'Unary postfix operators should not be prefixed by whitespace.' => 'Pred unárnymi postfixovými operátormi by nemali byť biele znaky.',
  'Night has fallen, but your surroundings are illuminated by the silvery glow of a full moon overhead. The night is cool and the air is crisp. The trees are calm.' => 'Padla noc, ale okolie osvetľuje strieborná žiara splnu nad hlavou. Noc je chladná a vzduch svieži. Stromy sú pokojné.',
  'Enable strict math, which only processes mathematical expressions inside extraneous parentheses.' => 'Povoliť prísnu matematiku, ktorá spracúva iba matematické výrazy vnútri nadbytočných zátvoriek.',
  'UNCOMMITTED CHANGES' => 'NECOMMITNUTÉ ZMENY',
  'Your stored credentials for the server you are trying to connect to ("%s") are not valid.' => 'Vaše uložené poverenia pre server, ku ktorému sa pokúšate pripojiť („%s“), nie sú platné.',
  'Expected a string for "method" context, got "%s".' => 'Pre kontext „method“ sa očakával reťazec, získalo sa „%s“.',
  'Build Plan Symbol "%s"' => 'Symbol plánu zostavenia „%s“',
  'Spellchecker' => 'Kontrola pravopisu',
  'Object (of class "%s") did not return a string from "__toString()".' => 'Objekt (triedy „%s“) nevrátil z „__toString()“ reťazec.',
  'Default list of "onto" refs for "arc land".' => 'Predvolený zoznam refov „onto“ pre „arc land“.',
  'The `%s` function should be avoided. It is potentially unsafe and makes debugging more difficult.' => 'Funkcii `%s` by ste sa mali vyhýbať. Je potenciálne nebezpečná a sťažuje ladenie.',
  'MERGE STRATEGY IS AMBIGUOUS' => 'STRATÉGIA ZLUČOVANIA JE NEJEDNOZNAČNÁ',
  'Invalid severity code \'%s\', should begin with \'%s.\'.' => 'Neplatný kód závažnosti \'%s\', mal by začínať \'%s.\'.',
  'No such project: "%s"' => 'Taký projekt neexistuje: „%s“',
  'English (Great Britain)' => 'angličtina (Veľká Británia)',
  'Custom configuration file.' => 'Vlastný konfiguračný súbor.',
  'Received error from WordPress.com: %s' => 'Od služby WordPress.com prišla chyba: %s',
  'PUSHING' => 'ODOSIELANIE',
  'The format of symbol "%s" is unrecognized. Expected a monogram like "X123", or an ID like "123", or a PHID.' => 'Formát symbolu „%s“ nie je rozpoznaný. Očakával sa monogram ako „X123“, alebo ID ako „123“, alebo PHID.',
  'Readonly properties are not available before PHP 8.1.' => 'Vlastnosti readonly nie sú dostupné pred PHP 8.1.',
  'Linter "%s" generated a lint message that is invalid because it does not have a name. Lint messages must have a name.' => 'Linter „%s“ vygeneroval správu lintu, ktorá je neplatná, pretože nemá názov. Správy lintu musia mať názov.',
  'Pass in a custom %s file path.' => 'Odovzdať vlastnú cestu k súboru %s.',
  'The `%s` type hint is not available before PHP 7.1.' => 'Typová nápoveda `%s` nie je dostupná pred PHP 7.1.',
  'In order to keep StyleCop integration with IDEs and other tools consistent with lint results, you aren\'t permitted to disable StyleCop rules within \'%s\'. Instead configure the severity using the StyleCop settings dialog (usually accessible from within your IDE). StyleCop settings for your project will be used when linting.' => 'Aby integrácia StyleCop s IDE a inými nástrojmi zostala konzistentná s výsledkami lintu, nie je povolené zakazovať pravidlá StyleCop v rámci \'%s\'. Namiesto toho nakonfigurujte závažnosť pomocou dialógu nastavení StyleCop (zvyčajne dostupného z vášho IDE). Pri lintovaní sa použijú nastavenia StyleCop vášho projektu.',
  'Restoring local state (at "%s" on branch "%s").' => 'Obnovuje sa lokálny stav (na „%s“ vo vetve „%s“).',
  'Filename' => 'Názov súboru',
  'Default behavior is ambiguous.' => 'Predvolené správanie je nejednoznačné.',
  'Patch Failed!' => 'Záplata zlyhala!',
  'Confirms that revisions with changes planned should land.' => 'Potvrdzuje, že sa majú začleniť aj revízie s naplánovanými zmenami.',
  'Querying system processes is not currently supported on Windows.' => 'Dopytovanie systémových procesov momentálne nie je v systéme Windows podporované.',
  'Received unknown console message of type \'%s\'.' => 'Prijatá neznáma konzolová správa typu \'%s\'.',
  'Client %s' => 'Klient %s',
  'Across the grove, a stream flows north toward **published** commits.
' => 'Cez háj tečie potok na sever k **publikovaným** commitom.',
  'You can not use "--shell" when completing arguments.' => 'Pri dopĺňaní argumentov nemôžete použiť „--shell“.',
  'Parameter provided to argument "--%s" must be an integer.' => 'Parameter zadaný pre argument „--%s“ musí byť celé číslo.',
  'Passing null to `%s` is no longer allowed in PHP 7.2.' => 'Odovzdávanie null do `%s` už v PHP 7.2 nie je povolené.',
  'Filesystem path "%s" does not exist.' => 'Cesta v systéme súborov „%s“ neexistuje.',
  'Hardpoint (at index "%s") has no hardpoint key. Each hardpoint must have a key that is unique among hardpoints on the object.' => 'Hardpoint (na indexe „%s“) nemá žiadny kľúč hardpointu. Každý hardpoint musí mať kľúč, ktorý je medzi hardpointmi objektu jedinečný.',
  'You are landing %s revision(s) which are currently in the state "%s", indicating that you expect to revise them before moving forward.' => array(
    'Začleňujete revíziu, ktorá je momentálne v stave „%2$s“, čo naznačuje, že ju plánujete pred pokračovaním upraviť.',
    'Začleňujete %s revízie, ktoré sú momentálne v stave „%s“, čo naznačuje, že ich plánujete pred pokračovaním upraviť.',
    'Začleňujete %s revízií, ktoré sú momentálne v stave „%s“, čo naznačuje, že ich plánujete pred pokračovaním upraviť.',
  ),
  'Expected exactly one argument to "commit(...)" with a commit symbol.' => 'Očakával sa presne jeden argument pre „commit(...)“ so symbolom commitu.',
  'Apply changes from a Differential revision, using the most recent diff that has been attached to it. You can run \'%s\' as a shorthand.' => 'Použiť zmeny z revízie Differential pomocou najnovšieho diffu, ktorý je k nej pripojený. Ako skratku môžete spustiť \'%s\'.',
  'The software version on the server is too old to support this workflow. Upgrade the software version on the server to a version released after October 2017.' => 'Verzia softvéru na serveri je príliš stará na to, aby podporovala tento pracovný postup. Aktualizujte verziu softvéru na serveri na verziu vydanú po októbri 2017.',
  'Specify the pager command to use when displaying documentation.' => 'Zadajte príkaz stránkovača, ktorý sa má použiť pri zobrazovaní dokumentácie.',
  'Expected resource "%s" to be an instance of "%s"!' => 'Očakávalo sa, že zdroj „%s“ bude inštanciou „%s“!',
  'Invalid "Differential Revision" field in commit message. This field should have a revision identifier like "%s" or a server URI like "%s", but has "%s".' => 'Neplatné pole „Differential Revision“ v správe commitu. Toto pole by malo obsahovať identifikátor revízie ako „%s“ alebo URI servera ako „%s“, ale obsahuje „%s“.',
  'Merging local "%s" into "%s" produces an empty diff. This usually means these changes have already landed.' => 'Zlúčenie lokálneho „%s“ do „%s“ vytvára prázdny diff. Zvyčajne to znamená, že tieto zmeny už boli začlenené.',
  'Checking out "%s".' => 'Prepína sa na „%s“.',
  'Parameter "timeout" to "Future->resolve()" is no longer supported. Update the caller so it no longer passes a timeout.' => 'Parameter „timeout“ pre „Future->resolve()“ už nie je podporovaný. Aktualizujte volajúci kód tak, aby už timeout neodovzdával.',
  'Unknown Mercurial Extension: "%s".' => 'Neznáme rozšírenie Mercurialu: „%s“.',
  'There is no **%s** workflow.' => 'Neexistuje žiadny pracovný postup **%s**.',
  'AWS Errors:' => 'Chyby AWS:',
  'Failed to fread() from request input stream.' => 'Nepodarilo sa vykonať fread() zo vstupného prúdu požiadavky.',
  'Limit the use of global variables. Global variables are generally a bad idea and should be avoided when possible.' => 'Obmedzte používanie globálnych premenných. Globálne premenné sú vo všeobecnosti zlý nápad a ak je to možné, mali by ste sa im vyhnúť.',
  'Unrecognized lint message code "%s". Expected a valid cpplint lint code like "%s" or "%s".' => 'Nerozpoznaný kód správy lintu „%s“. Očakával sa platný kód lintu cpplint ako „%s“ alebo „%s“.',
  'Protocol channel expected %s-character, zero-padded numeric frame length, got something else ("%s"). Full buffer (of length %s) begins: %s' => 'Kanál protokolu očakával %s-znakovú číselnú dĺžku rámca doplnenú nulami, získal niečo iné („%s“). Celá vyrovnávacia pamäť (s dĺžkou %s) začína: %s',
  'Failed to read file \'%s\'.' => 'Nepodarilo sa prečítať súbor \'%s\'.',
  'FETCH' => 'NAČÍTANIE',
  'Create or update a library.' => 'Vytvoriť alebo aktualizovať knižnicu.',
  'SYNOPSIS' => 'SÚHRN',
  'Arcventure' => 'Arcventúra',
  'Parameter ("%s") passed to "%s" when constructing a lint message must be a scalar with a maximum string length of %s bytes, but is %s bytes in length.' => array(
    
    array(
      
      array(
        
        array(
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť skalár s maximálnou dĺžkou reťazca %s bajt, ale má dĺžku %s bajt.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť skalár s maximálnou dĺžkou reťazca %s bajt, ale má dĺžku %s bajty.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť skalár s maximálnou dĺžkou reťazca %s bajt, ale má dĺžku %s bajtov.',
        ),
        
        array(
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť skalár s maximálnou dĺžkou reťazca %s bajty, ale má dĺžku %s bajt.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť skalár s maximálnou dĺžkou reťazca %s bajty, ale má dĺžku %s bajty.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť skalár s maximálnou dĺžkou reťazca %s bajty, ale má dĺžku %s bajtov.',
        ),
        
        array(
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť skalár s maximálnou dĺžkou reťazca %s bajtov, ale má dĺžku %s bajt.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť skalár s maximálnou dĺžkou reťazca %s bajtov, ale má dĺžku %s bajty.',
          'Parameter („%s“) odovzdaný do „%s“ pri konštruovaní správy lintu musí byť skalár s maximálnou dĺžkou reťazca %s bajtov, ale má dĺžku %s bajtov.',
        ),
      ),
    ),
  ),
  'Revision "%s" is not in the state "Accepted", so it will be left open.' => 'Revízia „%s“ nie je v stave „Schválené“, takže zostane otvorená.',
  'Expected hunk target \'%s\'.' => 'Očakával sa cieľ bloku \'%s\'.',
  'Closing parenthesis should be on a new line.' => 'Zatváracia zátvorka by mala byť na novom riadku.',
  'IP address "%s" is not properly formatted: an address with omitted leading sements must begin with "::".' => 'Adresa IP „%s“ nie je správne naformátovaná: adresa s vynechanými úvodnými segmentmi musí začínať na „::“.',
  'Declaring a function named `%s` causes any call to %s to fail. This is because `%s` eval-declares the function `%s`, then modifies the symbol table so that the function is instead named `%s`, and returns that name.' => 'Deklarovanie funkcie s názvom `%s` spôsobí, že akékoľvek volanie %s zlyhá. Je to preto, že `%s` deklaruje funkciu `%s` pomocou eval, potom upraví tabuľku symbolov tak, aby sa funkcia namiesto toho volala `%s`, a vráti tento názov.',
  'Raises errors on unresolved merge conflicts in source files, to catch mistakes where a conflicted file is accidentally marked as resolved.' => 'Vyvoláva chyby pri nevyriešených konfliktoch zlúčenia v zdrojových súboroch, aby zachytila chyby, keď je konfliktný súbor omylom označený ako vyriešený.',
  '\'%s\' has been amended with \'Differential Revision:\', as specified by \'%s\' in your %s \'base\' configuration.' => '\'%s\' bol doplnený o \'Differential Revision:\', ako je určené pomocou \'%s\' vo vašej konfigurácii \'base\' v %s.',
  'NOTE' => 'POZNÁMKA',
  'You are trying to connect to a server ("%s") that you do not have any stored credentials for, but the command you are running requires authentication.' => 'Pokúšate sa pripojiť k serveru („%s“), pre ktorý nemáte uložené žiadne poverenia, ale príkaz, ktorý spúšťate, vyžaduje overenie.',
  'Expected \'Author:\'.' => 'Očakávalo sa \'Author:\'.',
  'First argument to `%s` must be a string literal.' => 'Prvý argument pre `%s` musí byť reťazcový literál.',
  'Use of Blacklisted Function' => 'Použitie zakázanej funkcie',
  'Restoring local state (at "%s" on branch "%s", bookmarked as "%s").' => 'Obnovuje sa lokálny stav (na „%s“ vo vetve „%s“, so záložkou „%s“).',
  'Useless overriding method.' => 'Zbytočná prekrývajúca metóda.',
  'The name of the default branch to land changes onto when `%s` is run.' => 'Názov predvolenej vetvy, do ktorej sa majú začleniť zmeny pri spustení `%s`.',
  'You must use ONLY Unix linebreaks ("%s") in source code.' => 'V zdrojovom kóde musíte používať IBA unixové konce riadkov („%s“).',
  'NAME' => 'NÁZOV',
  'Unknown attribute label "%s" in line "%s" while parsing raw commit blob: %s' => 'Neznáma menovka atribútu „%s“ v riadku „%s“ pri analýze surového blobu commitu: %s',
  'Unknown Mercurial log field \'%s\'!' => 'Neznáme pole denníka Mercurialu \'%s\'!',
  '%s returned unexpected error code: %d
stdout: %s
stderr: %s' => '%s vrátilo neočakávaný chybový kód: %d
stdout: %s
stderr: %s',
  'Delimiter character must be one byte in length or null.' => 'Znak oddeľovača musí mať dĺžku jeden bajt alebo byť null.',
  'Prefer "__CLASS__" over hard-coded class names.' => 'Uprednostnite „__CLASS__“ pred pevne zakódovanými názvami tried.',
  'API Token installed.' => 'Token API bol nainštalovaný.',
  'The "--json" argument may only be used when listing aliases.' => 'Argument „--json“ sa dá použiť iba pri vypisovaní aliasov.',
  'Wildcard arguments may not be repeatable.' => 'Zástupné argumenty nesmú byť opakovateľné.',
  'AMBIGUOUS' => 'NEJEDNOZNAČNÉ',
  'Use a specific version of llavile/php-compatinfo-db' => 'Použiť konkrétnu verziu llavile/php-compatinfo-db',
  'Unrecognized lint message code "%s". Expected a valid flake8 lint code like "%s", or "%s", or "%s", or "%s".' => 'Nerozpoznaný kód správy lintu „%s“. Očakával sa platný kód lintu flake8 ako „%s“, „%s“, „%s“ alebo „%s“.',
  'You have merge conflicts in this working copy.' => 'V tejto pracovnej kópii máte konflikty zlúčenia.',
  'Ignore these %s untracked file(s) and continue?' => array(
    'Ignorovať tento nesledovaný súbor a pokračovať?',
    'Ignorovať tieto nesledované súbory a pokračovať?',
  ),
  'PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.' => 'PHP_CodeSniffer tokenizuje súbory PHP, JavaScript a CSS a zisťuje porušenia definovanej sady kódovacích štandardov.',
  'To identify the repository associated with this working copy, arc followed this process:' => 'Pri identifikácii repozitára priradeného k tejto pracovnej kópii arc postupoval takto:',
  'Linter %s requires %s version %s. Unable to determine the version that you have installed.' => 'Linter %s vyžaduje %s vo verzii %s. Nepodarilo sa určiť verziu, ktorú máte nainštalovanú.',
  'Writing \'%s\' to \'%s\'...
' => 'Zapisuje sa \'%s\' do \'%s\'...',
  '< %sus' => '< %sus',
  'Download a file to local disk.' => 'Stiahnuť súbor na lokálny disk.',
  'Parameter passed to setDuration() must be an integer or a float.' => 'Parameter odovzdaný do setDuration() musí byť celé číslo alebo číslo s pohyblivou desatinnou čiarkou.',
  'More than one branch matching task ID \'%s\' exists. Use \'git checkout\' instead.' => 'Existuje viac ako jedna vetva zodpovedajúca ID úlohy \'%s\'. Použite namiesto toho \'git checkout\'.',
  'Call %s before calling %s. You can not add more nodes once you have loaded the graph.' => 'Zavolajte %s pred volaním %s. Po načítaní grafu už nemôžete pridávať ďalšie uzly.',
  'Related configuration:' => 'Súvisiaca konfigurácia:',
  'This line is %s characters long, but the convention is %s characters.' => array(
    'Tento riadok má %s znak, ale konvencia je %s znakov.',
    'Tento riadok má %s znaky, ale konvencia je %s znakov.',
    'Tento riadok má %s znakov, ale konvencia je %s znakov.',
  ),
  'Working Copy: Path "%s" is part of `%s` working copy "%s".' => 'Pracovná kópia: Cesta „%s“ je súčasťou pracovnej kópie `%s` „%s“.',
  '"%s" is not an exact quantity.' => '„%s“ nie je presné množstvo.',
  'Linter failed to parse output!' => 'Linteru sa nepodarilo analyzovať výstup!',
  'Failed to load XUnit report; Input starts with:' => 'Nepodarilo sa načítať report XUnit; vstup začína:',
  'Multiple "static" modifiers are not allowed.' => 'Viacero modifikátorov „static“ nie je povolených.',
  'Assertion failed, expected values to be equal (at %s:%d).' => 'Tvrdenie zlyhalo, očakávalo sa, že hodnoty budú rovnaké (na %s:%d).',
  'No query exists which can load hardpoint "%s" for object (with key "%s" of type "%s").' => 'Neexistuje žiadny dopyt, ktorý by dokázal načítať hardpoint „%s“ pre objekt (s kľúčom „%s“ typu „%s“).',
  'Waiting for input on stdin...' => 'Čaká sa na vstup na stdin...',
  'Attempting to wait on a hardpoint request (with index "%s", for hardpoint "%s") that is part of a different engine.' => 'Pokus o čakanie na požiadavku hardpointu (s indexom „%s“, pre hardpoint „%s“), ktorá patrí inému nástroju.',
  'Do not use "each()". This function was deprecated in PHP 7.2 and removed in PHP 8.0' => 'Nepoužívajte „each()“. Táto funkcia bola v PHP 7.2 označená za zastaranú a v PHP 8.0 odstránená',
  'Some linters failed:' => 'Niektoré lintery zlyhali:',
  'There is no revision %s.' => 'Revízia %s neexistuje.',
  'Comment Style' => 'Štýl komentárov',
  'The token "%s" is not a valid API Token. The server returned this response when trying to use it as a token: %s' => 'Token „%s“ nie je platný token API. Server pri pokuse o jeho použitie ako tokenu vrátil túto odpoveď: %s',
  'Unknown merge approach "%s".' => 'Neznámy prístup k zlučovaniu „%s“.',
  'Provide method parameters on stdin as a JSON blob.' => 'Zadajte parametre metódy na stdin ako blob JSON.',
  'CREATE %s BRANCHE(S)' => array(
    'VYTVORIŤ VETVU',
    'VYTVORIŤ %s VETVY',
    'VYTVORIŤ %s VETIEV',
  ),
  'Use of unknown class or interface symbol "%s".' => 'Použitie neznámeho symbolu triedy alebo rozhrania „%s“.',
  'Follow naming conventions: interfaces should be named using `%s`.' => 'Dodržiavajte konvencie pomenúvania: rozhrania by sa mali pomenúvať pomocou `%s`.',
  'Configured unit test engine "%s" is not a subclass of "%s", but must be.' => 'Nakonfigurovaný nástroj na jednotkové testy „%s“ nie je podtriedou „%s“, ale musí ňou byť.',
  'Rule \'%s\' popped empty context!' => 'Pravidlo \'%s\' vybralo prázdny kontext!',
  'Expected rule \'%s\' in state \'%s\' in %s to have 2-4 elements (regex, token, [next state], [options]), got %d.' => 'Očakávalo sa, že pravidlo \'%s\' v stave \'%s\' v %s bude mať 2 – 4 prvky (regex, token, [ďalší stav], [voľby]), získalo sa %d.',
  'Specifying multiple exceptions in a catch clause is not available before PHP 7.1.' => 'Zadávanie viacerých výnimiek v klauzule catch nie je dostupné pred PHP 7.1.',
  'Provide exactly one Conduit method name to call.' => 'Zadajte presne jeden názov metódy Conduit, ktorá sa má zavolať.',
  'Unable to verify request signature, no "%s" present in request protocol information.' => 'Nepodarilo sa overiť podpis požiadavky, v informáciách o protokole požiadavky nie je prítomné žiadne „%s“.',
  'To log in and save valid credentials for this server, run this command:' => 'Ak sa chcete prihlásiť a uložiť platné poverenia pre tento server, spustite tento príkaz:',
  'Tab Literal' => 'Literál tabulátora',
  'Encountered duplicate meminfo key "%s" in meminfo source "%s".' => 'V zdroji meminfo „%2$s“ sa našiel duplicitný kľúč meminfo „%s“.',
  'Failed to JSON encode value: %s.' => 'Nepodarilo sa zakódovať hodnotu do JSON: %s.',
  'Encoding UTF8 codepoint "%s" is not supported.' => 'Kódovanie kódového bodu UTF8 „%s“ nie je podporované.',
  'Provide a directory to create or update a library in.' => 'Zadajte adresár, v ktorom sa má vytvoriť alebo aktualizovať knižnica.',
  'Several small trails and footpaths cross here, twisting away from you among the trees.' => 'Križuje sa tu niekoľko malých chodníkov a cestičiek, ktoré sa kľukatia preč od vás pomedzi stromy.',
  'Amend the working copy, synchronizing the local commit message.' => 'Doplniť pracovnú kópiu a synchronizovať lokálnu správu commitu.',
  'Use `%s` for checking if the string starts with something.' => 'Na kontrolu, či reťazec niečím začína, použite `%s`.',
  'Use of unknown interface symbol "%s".' => 'Použitie neznámeho symbolu rozhrania „%s“.',
  'UNKNOWN REVISION' => 'NEZNÁMA REVÍZIA',
  'Query parameters include a duplicate key ("%s") and can not be nondestructively represented as a map.' => 'Parametre dopytu obsahujú duplicitný kľúč („%s“) a nedajú sa nedeštruktívne reprezentovať ako mapa.',
  'Buildable "%s"' => 'Zostaviteľný objekt „%s“',
  'Lock \'%s\' is already registered!' => 'Zámok \'%s\' je už zaregistrovaný!',
  'Request specifies a file with key "%s", but that key is also defined by normal request data. Due to limitations with cURL, requests that post file data must use unique keys.' => 'Požiadavka určuje súbor s kľúčom „%s“, ale tento kľúč je definovaný aj bežnými údajmi požiadavky. Kvôli obmedzeniam cURL musia požiadavky, ktoré odosielajú údaje súborov, používať jedinečné kľúče.',
  'Failed to set stream nonblocking.' => 'Nepodarilo sa nastaviť prúd ako neblokujúci.',
  'This version of %s is not supported (it is too new). You can try upgrading with `%s`.' => 'Táto verzia %s nie je podporovaná (je príliš nová). Môžete skúsiť aktualizáciu pomocou `%s`.',
  'Expected JSON.' => 'Očakával sa JSON.',
  'TODO: Ambiguous ref.' => 'TODO: Nejednoznačný ref.',
  '<paths = %s>' => '<ciest = %s>',
  '"%s" class "%s" must define a "%s" constant.' => '„%s“ trieda „%s“ musí definovať konštantu „%s“.',
  'You walk along the narrow bank of the stream as it winds lazily downhill and turns east, gradually widening into a river.' => 'Kráčate úzkym brehom potoka, ktorý sa lenivo vinie z kopca, stáča sa na východ a postupne sa rozširuje do rieky.',
  'Unable to Parse' => 'Nedá sa analyzovať',
  'Unknown smoothing type "%s".' => 'Neznámy typ vyhladzovania „%s“.',
  'Received errors from Asana: %s' => 'Od služby Asana prišli chyby: %s',
  'Follow naming conventions: class properties should be named using `%s`.' => 'Dodržiavajte konvencie pomenúvania: vlastnosti tried by sa mali pomenúvať pomocou `%s`.',
  'Flag arguments may not have a default (always false).' => 'Prepínačové argumenty nesmú mať predvolenú hodnotu (vždy false).',
  'Found invalid alias definition (with key "%s").' => 'Našla sa neplatná definícia aliasu (s kľúčom „%s“).',
  'Ruby' => 'Ruby',
  'Convention: comma should be followed by space.' => 'Konvencia: za čiarkou by mala nasledovať medzera.',
  'Checking out branch "%s".' => 'Prepína sa na vetvu „%s“.',
  'None of the rules in your \'base\' configuration matched a valid commit. Adjust rules or specify which commit you want to use explicitly.' => 'Žiadne z pravidiel vo vašej konfigurácii \'base\' sa nezhodovalo s platným commitom. Upravte pravidlá alebo výslovne zadajte, ktorý commit chcete použiť.',
  'ALIAS' => 'ALIAS',
  '**liberate** [__path__]' => '**liberate** [__path__]',
  'Done, closed revision.' => 'Hotovo, revízia bola zavretá.',
  'Properties should have their visibility declared explicitly.' => 'Vlastnosti by mali mať výslovne deklarovanú viditeľnosť.',
  'This codebase targets PHP %s, but namespaces were not introduced until PHP 5.3.' => 'Táto kódová základňa cieli na PHP %s, ale menné priestory boli zavedené až v PHP 5.3.',
  'Writing to a closed pipe!' => 'Zápis do zavretej rúry!',
  'Follow naming conventions: constants should be named using `%s`.' => 'Dodržiavajte konvencie pomenúvania: konštanty by sa mali pomenúvať pomocou `%s`.',
  'Lint renderer "%s" is unknown. Supported renderers are: %s.' => 'Vykresľovač lintu „%s“ je neznámy. Podporované vykresľovače sú: %s.',
  'Spanish (Spain)' => 'španielčina (Španielsko)',
  'Convention: space before `%s` token.' => 'Konvencia: medzera pred tokenom `%s`.',
  'Linter `%s` configured in \'%s\' MUST be a subclass of `%s`.' => 'Linter `%s` nakonfigurovaný v \'%s\' MUSÍ byť podtriedou `%s`.',
  'Unable to find %s or %s in %s!' => 'Nepodarilo sa nájsť %s ani %s v %s!',
  'Use `%s` to detect syntax errors in JSON files.' => 'Na zisťovanie syntaktických chýb v súboroch JSON použite `%s`.',
  'List style to prefer.' => 'Uprednostňovaný štýl zoznamu.',
  'Branch name %s already exists; trying a new name.' => 'Názov vetvy %s už existuje; skúša sa nový názov.',
  'UNSOUND' => 'NESPOĽAHLIVÉ',
  'Found a unique matching repository.' => 'Našiel sa jedinečný zodpovedajúci repozitár.',
  'Confirms that new branches or bookmarks should be created in the remote.' => 'Potvrdzuje, že sa vo vzdialenom úložisku majú vytvoriť nové vetvy alebo záložky.',
  'User aborted the workflow.' => 'Používateľ prerušil pracovný postup.',
  'Auto-Fix' => 'Automatická oprava',
  'Object (with key "%s", of type "%s") has no hardpoint "%s". Hardpoints on this object are: %s.' => 'Objekt (s kľúčom „%s“, typu „%s“) nemá hardpoint „%s“. Hardpointy na tomto objekte sú: %s.',
  'Modified \'%s\' files:' => 'Upravené súbory \'%s\':',
  '%s revision(s) have build failures or ongoing builds:' => array(
    '%s revízia má zlyhané alebo prebiehajúce zostavenia:',
    '%s revízie majú zlyhané alebo prebiehajúce zostavenia:',
    '%s revízií má zlyhané alebo prebiehajúce zostavenia:',
  ),
  'Unrecognized lint message code "%s". Expected a valid Pylint lint code like "%s", or "%s", or "%s".' => 'Nerozpoznaný kód správy lintu „%s“. Očakával sa platný kód lintu Pylint ako „%s“, „%s“ alebo „%s“.',
  'Unable to identify the current commit in the working copy.' => 'Nepodarilo sa identifikovať aktuálny commit v pracovnej kópii.',
  'Revision %s can not be closed. You can only close revisions which have been \'accepted\'.' => 'Revízia %s sa nedá zavrieť. Zavrieť môžete iba revízie, ktoré boli \'schválené\'.',
  'Use of unknown function symbol "%s".' => 'Použitie neznámeho symbolu funkcie „%s“.',
  'Switching to source \'%s\'.' => 'Prepína sa na zdroj \'%s\'.',
  'Unable to parse line in meminfo source "%s": "%s".' => 'Nepodarilo sa analyzovať riadok v zdroji meminfo „%s“: „%s“.',
  'Data has fewer than %d lines.' => 'Údaje majú menej ako %d riadkov.',
  'Expected \'%s\'.' => 'Očakávalo sa \'%s\'.',
  'Rebase onto %s failed!' => 'Rebase na %s zlyhal!',
  'Specify a version requirement for the binary. The version number may be prefixed with <, <=, >, >=, or = to specify the version comparison operator (default: =).' => 'Zadajte požiadavku na verziu binárneho súboru. Číslo verzie môže mať predponu <, <=, >, >= alebo =, ktorá určuje operátor porovnania verzií (predvolene =).',
  'STRATEGY' => 'STRATÉGIA',
  'Convention: put a single space after control statements.' => 'Konvencia: za riadiace príkazy vložte jednu medzeru.',
  'Modifier Ordering' => 'Poradie modifikátorov',
  'Input and expectations must have the same number of values.' => 'Vstup a očakávania musia mať rovnaký počet hodnôt.',
  'Error in parsing \'%s\' file, for test engine \'%s\'.' => 'Chyba pri analýze súboru \'%s\' pre testovací nástroj \'%s\'.',
  'Duplicate key in array initializer. PHP will ignore all but the last entry.' => 'Duplicitný kľúč v inicializátore poľa. PHP bude ignorovať všetky okrem poslednej položky.',
  '(Assuming "%s" is the British spelling of "%s".)' => '(Predpokladá sa, že „%s“ je britský pravopis slova „%s“.)',
  'Avoid `%s`. It is confusing and hinders static analysis.' => 'Vyhýbajte sa `%s`. Je mätúce a bráni statickej analýze.',
  'The first line is used as subject, next lines as comment.' => 'Prvý riadok sa použije ako predmet, ďalšie riadky ako komentár.',
  'In PHP, `%s` is the string concatenation operator, not `%s`. This expression uses `%s` with a string literal as an operand.' => 'V PHP je operátorom zreťazenia reťazcov `%s`, nie `%s`. Tento výraz používa `%s` s reťazcovým literálom ako operandom.',
  'Failed to write to buffer.' => 'Nepodarilo sa zapísať do vyrovnávacej pamäte.',
  'Uses `%s` to run several linters (PyFlakes, pep8, and a McCabe complexity checker) on Python source files.' => 'Používa `%s` na spustenie viacerých linterov (PyFlakes, pep8 a kontrolór McCabeho zložitosti) na zdrojových súboroch Pythonu.',
  'Upgrade this program to the latest version.' => 'Aktualizovať tento program na najnovšiu verziu.',
  'Phutil XHPAST' => 'Phutil XHPAST',
  'You have uncommitted changes in this working copy.' => 'V tejto pracovnej kópii máte necommitnuté zmeny.',
  'You\'ve enabled code coverage but XDebug is not installed.' => 'Povolili ste pokrytie kódu, ale XDebug nie je nainštalovaný.',
  'Configure a locale to print messages in.' => 'Nakonfigurujte lokalizáciu, v ktorej sa majú vypisovať správy.',
  'Arc was unable to automagically make a name for this patch. Please clean up your working copy and try again.' => 'Arc nedokázal automagicky vytvoriť názov pre túto záplatu. Vyčistite prosím svoju pracovnú kópiu a skúste to znova.',
  'JSCS does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => 'JSCS momentálne nepodporuje vlastné úrovne závažnosti, pretože pravidlá sa nedajú identifikovať zo správ vo výstupe.',
  'You can not "--pick" changes under the "merge" strategy.' => 'V rámci stratégie „merge“ nemôžete použiť „--pick“ na zmeny.',
  'Config: Did not find user configuration at "%s".' => 'Konfigurácia: Používateľská konfigurácia sa na „%s“ nenašla.',
  'Added' => 'Pridané',
  '`%s`-style functions which take a format string and list of values as arguments. The value for the mapping is the start index of the function parameters (the index of the format string parameter).' => 'Funkcie štýlu `%s`, ktoré ako argumenty prijímajú formátovací reťazec a zoznam hodnôt. Hodnotou mapovania je počiatočný index parametrov funkcie (index parametra s formátovacím reťazcom).',
  'Jul' => 'júl',
  'Paste "%s"' => 'Vložený text „%s“',
  'Command string argument includes a NULL byte. This byte can not be safely escaped in command line arguments in Windows environments.' => 'Reťazcový argument príkazu obsahuje bajt NULL. Tento bajt sa nedá bezpečne escapovať v argumentoch príkazového riadka v prostrediach Windows.',
  'DISCARDING ANCESTORS' => 'ZAHADZOVANIE PREDKOV',
  'Syntax Error' => 'Syntaktická chyba',
  'Too many arguments to %s.' => 'Príliš veľa argumentov pre %s.',
  'The revision associated with commit "%s" (an ancestor of: %s) is ambiguous. These %s revisions are associated with the commit:' => array(
    
    array(
      
      array(
        'Revízia priradená ku commitu „%s“ (predok: %s) je nejednoznačná. Ku commitu je priradená %s revízia:',
        'Revízia priradená ku commitu „%s“ (predok: %s) je nejednoznačná. Ku commitu sú priradené %s revízie:',
        'Revízia priradená ku commitu „%s“ (predok: %s) je nejednoznačná. Ku commitu je priradených %s revízií:',
      ),
    ),
  ),
  'Resuming upload (%s of %s chunks remain).' => 'Pokračuje sa v nahrávaní (zostáva %s z %s blokov).',
  'Rule \'%s\' contains a production \'%s\' which is nonempty but has a null in it. A rule with other may not contain null.' => 'Pravidlo \'%s\' obsahuje produkciu \'%s\', ktorá je neprázdna, ale obsahuje null. Pravidlo s inými prvkami nesmie obsahovať null.',
  'Hardpoint ("%s", of type "%s") does not support merging values.' => 'Hardpoint („%s“, typu „%s“) nepodporuje zlučovanie hodnôt.',
  'Library "%s" (at "%s") is not a Git working copy, so no version information can be provided.' => 'Knižnica „%s“ (na „%s“) nie je pracovnou kópiou Git, takže sa nedajú poskytnúť žiadne informácie o verzii.',
  'Unknown lint severity \'%s\'!' => 'Neznáma závažnosť lintu \'%s\'!',
  'Configuration Options' => 'Konfiguračné možnosti',
  'No unit test failures.' => 'Žiadne zlyhania jednotkových testov.',
  'Conduit URI \'%s\' must include a valid host.' => 'URI Conduit \'%s\' musí obsahovať platného hostiteľa.',
  'ONTO REMOTE' => 'NA VZDIALENÉ ÚLOŽISKO',
  'This test case made no assertions. Test cases must make at least one assertion.' => 'Tento testovací prípad neurobil žiadne tvrdenia. Testovacie prípady musia urobiť aspoň jedno tvrdenie.',
  '%s AFFECTED FILE(S)' => array(
    'DOTKNUTÝ SÚBOR',
    'DOTKNUTÉ SÚBORY',
  ),
  'Git status has changed!' => 'Stav gitu sa zmenil!',
  'No such linter standard. Available standards are: %s.' => 'Taký štandard lintera neexistuje. Dostupné štandardy sú: %s.',
  '%s Library Linter' => 'Linter knižnice %s',
  'Basic Text Linter' => 'Základný textový linter',
  'Unable to parse Mercurial blame line: %s' => 'Nepodarilo sa analyzovať riadok blame Mercurialu: %s',
  '%s (until %s)' => '%s (do %s)',
  'Cleaning up branch "%s". To recover, run:' => 'Čistí sa vetva „%s“. Na obnovu spustite:',
  'Install hlint with `%s`.' => 'Nainštalujte hlint pomocou `%s`.',
  'Hardpoint future list is marked to send results to the generator, but the list does not have exactly one future (it has %s).' => 'Zoznam future hardpointu je označený na odosielanie výsledkov generátoru, ale zoznam neobsahuje presne jedno future (obsahuje ich %s).',
  'D, M j' => 'D, M j',
  'Fetched ref "%s" from remote "%s".' => 'Ref „%s“ bol načítaný zo vzdialeného úložiska „%s“.',
  'Use `%s` as a statement, not an expression.' => 'Používajte `%s` ako príkaz, nie ako výraz.',
  'Created task %s: \'%s\' at %s
' => 'Bola vytvorená úloha %s: \'%s\' na %s',
  'Expected a revision ID to be returned by "differential.revision.edit".' => 'Očakávalo sa, že „differential.revision.edit“ vráti ID revízie.',
  'cover does not currently support %s in svn.' => 'cover momentálne nepodporuje %s v svn.',
  'Closing revision "%s"...' => 'Zatvára sa revízia „%s“...',
  'Expected option key passed to "addCurlOption(<key>, ...)" to be a scalar, got "%s".' => 'Očakávalo sa, že kľúč voľby odovzdaný do „addCurlOption(<key>, ...)“ bude skalár, získalo sa „%s“.',
  'Status' => 'Stav',
  'Can only add execute actions to an agent.' => 'K agentovi sa dajú pridávať iba vykonávacie akcie.',
  'Formatted String' => 'Formátovaný reťazec',
  'Two different HTTP extensions ("%s" of class "%s" and "%s" of class "%s") both provided a proxy URI for URI "%s". No more than one extension may provide a proxy for any URI.' => 'Dve rôzne rozšírenia HTTP („%s“ triedy „%s“ a „%s“ triedy „%s“) poskytli proxy URI pre URI „%s“. Proxy pre ktorékoľvek URI smie poskytovať najviac jedno rozšírenie.',
  'INPUT' => 'VSTUP',
  'Unnecessary `%s` modifier in `%s` class.' => 'Zbytočný modifikátor `%s` v triede `%s`.',
  'It is afternoon. The air has changed and it feels as though it may rain. You hear a squirrel chittering high overhead.' => 'Je popoludnie. Vzduch sa zmenil a zdá sa, že by mohlo pršať. Vysoko nad hlavou počuť štebotanie veveričky.',
  'Created and checked out branch %s.' => 'Vetva %s bola vytvorená a prepnutá.',
  'Unable to upload file: failed to fseek() to offset %d in file at path "%s".' => 'Nepodarilo sa nahrať súbor: nepodarilo sa vykonať fseek() na posun %d v súbore na ceste „%s“.',
  'Nov' => 'nov',
  'Unnecessary whitespace around paamayim nekudotayim (double colon) operator.' => 'Zbytočné biele znaky okolo operátora paamayim nekudotayim (dvojitá dvojbodka).',
  'You can not change the Conduit URI after a conduit is already open.' => 'URI Conduit sa nedá zmeniť po tom, ako je conduit už otvorený.',
  'Lint raised errors!' => 'Lint vyvolal chyby!',
  '%s: failed to decode tree.' => '%s: nepodarilo sa dekódovať strom.',
  'Commit message was not amended. Amending commit message is only supported in git and hg (version 2.2 or newer)' => 'Správa commitu nebola doplnená. Dopĺňanie správy commitu je podporované iba v git a hg (verzia 2.2 alebo novšia)',
  'ONTO TARGET' => 'NA CIEĽ',
  'Call-Time Pass-By-Reference' => 'Odovzdávanie referencií v čase volania',
  'Unknown' => 'Neznáme',
  'Confirms landing more than %s commit(s) in a single operation.' => array(
    'Potvrdzuje začlenenie viac ako %s commitu v jednej operácii.',
    'Potvrdzuje začlenenie viac ako %s commitov v jednej operácii.',
  ),
  'Executed in %d us.' => 'Vykonané za %d us.',
  'Variable references should not be prefixed with whitespace.' => 'Pred odkazmi na premenné by nemali byť biele znaky.',
  'Install PHP.' => 'Nainštalujte PHP.',
  'The logical value of this expression is static. Did you forget to remove some debugging code?' => 'Logická hodnota tohto výrazu je statická. Nezabudli ste odstrániť nejaký ladiaci kód?',
  'There are no commits reachable from the specified sources (%s) which are not already present in the state you are merging into ("%s"), so nothing can land.' => 'Zo zadaných zdrojov (%s) nie sú dosiahnuteľné žiadne commity, ktoré by už neboli prítomné v stave, do ktorého zlučujete („%s“), takže sa nedá nič začleniť.',
  'Please provide a summary.' => 'Zadajte prosím zhrnutie.',
  'Supply a commit message for this patch, then save and exit.' => 'Zadajte správu commitu pre túto záplatu, potom uložte a ukončite.',
  'Avoid use of product name literals in "pht()": use generic language or an appropriate method from the "PlatformSymbols" class instead so the software can be forked. String uses names: %s.' => 'Vyhýbajte sa používaniu literálov s názvom produktu v „pht()“: namiesto toho použite všeobecný jazyk alebo vhodnú metódu z triedy „PlatformSymbols“, aby sa softvér dal forknúť. Reťazec používa názvy: %s.',
  'Graph already has a node "%s"!' => 'Graf už má uzol „%s“!',
  '`%s` Method Cannot Be Declared `%s`' => 'Metóda `%s` sa nedá deklarovať ako `%s`',
  'Channel closed!' => 'Kanál sa zavrel!',
  'PASS' => 'PREŠLO',
  'Argument "%s" appears after the first non-flag argument. This special argument must appear before other arguments.' => 'Argument „%s“ sa objavuje za prvým argumentom, ktorý nie je prepínačom. Tento špeciálny argument sa musí objaviť pred ostatnými argumentmi.',
  'UPGRADED' => 'AKTUALIZOVANÉ',
  'Switching to local branch "%s".' => 'Prepína sa na lokálnu vetvu „%s“.',
  'Importing functions or constants is not available before PHP 5.6.' => 'Importovanie funkcií alebo konštánt nie je dostupné pred PHP 5.6.',
  'Expected an array for %%L%s conversion.' => 'Očakávalo sa pole pre konverziu %%L%s.',
  'You have selected multiple branches to push changes onto. Pushing to multiple branches is not supported by "arc land" in Mercurial: Mercurial commits may only belong to one branch, so this operation can not be executed atomically.' => 'Zvolili ste viacero vetiev, do ktorých sa majú odoslať zmeny. Odosielanie do viacerých vetiev nie je v „arc land“ v Mercuriale podporované: commity Mercurialu môžu patriť iba do jednej vetvy, takže táto operácia sa nedá vykonať atomicky.',
  'Defining typed for class properties was not introduced until PHP 7.4, but this codebase targets an earlier version of PHP.' => 'Definovanie typov pre vlastnosti tried bolo zavedené až v PHP 7.4, ale táto kódová základňa cieli na skoršiu verziu PHP.',
  'Failed to replace template variables while rendering cow!' => 'Nepodarilo sa nahradiť premenné šablóny pri vykresľovaní kravy!',
  'Buffer discards are not currently supported by the streaming parser.' => 'Zahadzovanie vyrovnávacej pamäte momentálne streamovací analyzátor nepodporuje.',
  '[Invalid Translation!] %s' => '[Neplatný preklad!] %s',
  'Skip checks for untracked files in the working copy.' => 'Preskočiť kontroly nesledovaných súborov v pracovnej kópii.',
  'Confirms use of a revision that you are not the author of.' => 'Potvrdzuje použitie revízie, ktorej nie ste autorom.',
  'Created a new paste.' => 'Bol vytvorený nový vložený text.',
  'Apr' => 'apr',
  'Spacing Before Array Index' => 'Medzery pred indexom poľa',
  'Attempting to merge changes.' => 'Pokúša sa o zlúčenie zmien.',
  'Tautological Expression' => 'Tautologický výraz',
  'Some ancestor commits are associated with revisions that have already been closed. These changes will be skipped:' => 'Niektoré commity predkov sú priradené k revíziám, ktoré už boli zavreté. Tieto zmeny sa preskočia:',
  'Drop the symbol cache and rebuild the entire map from scratch.' => 'Zahodiť vyrovnávaciu pamäť symbolov a zostaviť celú mapu od začiatku.',
  '%4.1fs' => '%4.1fs',
  'Optional parameters specified before a required parameter are always considered required in PHP 8.1.' => 'Voliteľné parametre zadané pred povinným parametrom sa v PHP 8.1 vždy považujú za povinné.',
  'Pushing changes to staging area...' => 'Zmeny sa odosielajú do prípravnej oblasti...',
  'IP address "%s" is not properly formatted: an address with omitted trailing segments must end with "::".' => 'Adresa IP „%s“ nie je správne naformátovaná: adresa s vynechanými koncovými segmentmi musí končiť na „::“.',
  'Lock \'%s\' has already been locked by this process.' => 'Zámok \'%s\' už tento proces uzamkol.',
  'Minimum value must be an integer.' => 'Minimálna hodnota musí byť celé číslo.',
  'SAVE PROMPT' => 'ULOŽIŤ ODPOVEĎ NA VÝZVU',
  'Sort out the lint changes that were applied to the working copy and relint.' => 'Usporiadať zmeny lintu, ktoré boli použité na pracovnú kópiu, a znova spustiť lint.',
  'the repository has only one commit.' => 'repozitár má iba jeden commit.',
  'If you run \'%s\', changes between the commit:' => 'Ak spustíte \'%s\', zmeny medzi commitom:',
  'it is the first commit between \'%s\' (the merge-base of \'%s\' and HEAD) which is also contained by another branch (%s).' => 'je to prvý commit medzi \'%s\' (merge-base \'%s\' a HEAD), ktorý obsahuje aj iná vetva (%s).',
  'Failed to open URI "%s" in browser ("%s"). Check your "browser" config option.' => 'Nepodarilo sa otvoriť URI „%s“ v prehliadači („%s“). Skontrolujte svoju konfiguračnú možnosť „browser“.',
  'applied' => 'použitá',
  'This line contains trailing whitespace. Consider setting up your editor to automatically remove trailing whitespace.' => 'Tento riadok obsahuje biele znaky na konci. Zvážte nastavenie editora tak, aby biele znaky na konci automaticky odstraňoval.',
  'Stream iterators can not be rewound!' => 'Prúdové iterátory sa nedajú previnúť späť!',
  'You must configure discovery rules to map C# files back to test projects (`%s` in %s).' => 'Musíte nakonfigurovať pravidlá zisťovania, ktoré mapujú súbory C# späť na testovacie projekty (`%s` v %s).',
  'Revision "%s" was not found anywhere in this working copy.' => 'Revízia „%s“ sa v tejto pracovnej kópii nikde nenašla.',
  'Apply changes from an arc bundle generated with \'%s\'.' => 'Použiť zmeny z balíka arc vygenerovaného pomocou \'%s\'.',
  'Readonly classes are not available before PHP 8.2.' => 'Triedy readonly nie sú dostupné pred PHP 8.2.',
  'Unable to decode MIME header: install "iconv" or "mbstring" extension.' => 'Nepodarilo sa dekódovať hlavičku MIME: nainštalujte rozšírenie „iconv“ alebo „mbstring“.',
  'Revision URI:' => 'URI revízie:',
  'Lock is already held.' => 'Zámok je už držaný.',
  'Alias Functions' => 'Funkcie s aliasmi',
  'Argument "%s" was provided twice.' => 'Argument „%s“ bol zadaný dvakrát.',
  'Show a detailed coverage report on the CLI. Implies %s.' => 'Zobraziť podrobný report pokrytia v CLI. Implikuje %s.',
  'function' => 'funkcia',
  'Unpacking within arrays is not available before PHP 7.4.' => 'Rozbaľovanie vnútri polí nie je dostupné pred PHP 7.4.',
  'Convention: no spaces before closing parentheses.' => 'Konvencia: žiadne medzery pred zatváracími zátvorkami.',
  'You are landing %s revision(s) which are not in the state "Accepted", indicating that they have not been accepted by reviewers. Normally, you should land changes only once they have been accepted. These revisions are in the wrong state:' => array(
    'Začleňujete revíziu, ktorá nie je v stave „Schválené“, čo naznačuje, že ju recenzenti neschválili. Za normálnych okolností by ste mali začleňovať zmeny až po ich schválení. Táto revízia je v nesprávnom stave:',
    'Začleňujete %s revízie, ktoré nie sú v stave „Schválené“, čo naznačuje, že ich recenzenti neschválili. Za normálnych okolností by ste mali začleňovať zmeny až po ich schválení. Tieto revízie sú v nesprávnom stave:',
    'Začleňujete %s revízií, ktoré nie sú v stave „Schválené“, čo naznačuje, že ich recenzenti neschválili. Za normálnych okolností by ste mali začleňovať zmeny až po ich schválení. Tieto revízie sú v nesprávnom stave:',
  ),
  'Config File' => 'Konfiguračný súbor',
  'Opening %s failed! %s.' => 'Otvorenie %s zlyhalo! %s.',
  'Command to execute.' => 'Príkaz, ktorý sa má vykonať.',
  'Connected' => 'Pripojené',
  '<opaque envelope>' => '<nepriehľadná obálka>',
  'The remote host returned something other than an HTTP response: %s' => 'Vzdialený hostiteľ vrátil niečo iné než odpoveď HTTP: %s',
  'You have merge conflicts in this working copy. Resolve merge conflicts before proceeding.' => 'V tejto pracovnej kópii máte konflikty zlúčenia. Pred pokračovaním ich vyriešte.',
  'INSTALL' => 'INŠTALÁCIA',
  'Never amend commits in the working copy with lint patches.' => 'Nikdy nedopĺňať commity v pracovnej kópii o záplaty lintu.',
  'CIDR block "%s" is not formatted correctly. Expected an IP block in CIDR notation, like "%s" or "%s".' => 'Blok CIDR „%s“ nie je správne naformátovaný. Očakával sa blok IP v notácii CIDR, ako „%s“ alebo „%s“.',
  'Pilot a probe from the vessel "Arcanoid".' => 'Pilotujte sondu z lode „Arcanoid“.',
  'Configuration option ("%s") defined by extension "%s" has an alias ("%s") which conflicts with an existing option. The key and aliases of each option must be unique.' => 'Konfiguračná možnosť („%s“) definovaná rozšírením „%s“ má alias („%s“), ktorý je v konflikte s existujúcou možnosťou. Kľúč a aliasy každej možnosti musia byť jedinečné.',
  'CONDUIT' => 'CONDUIT',
  'Specifying this flag multiple times will push to multiple branches.' => 'Viacnásobné zadanie tohto prepínača spôsobí odoslanie do viacerých vetiev.',
  'it is the merge-base of the explicitly specified base commit \'%s\' and HEAD.' => 'je to merge-base výslovne zadaného základného commitu \'%s\' a HEAD.',
  'Install RuboCop using `%s`.' => 'Nainštalujte RuboCop pomocou `%s`.',
  'This diff is against commit %s, but the commit is nowhere in the working copy. Try to apply it against the current working copy state? (%s)' => 'Tento diff je voči commitu %s, ale ten sa v pracovnej kópii nikde nenachádza. Skúsiť ho použiť na aktuálny stav pracovnej kópie? (%s)',
  'The \'%s\' file seems to be out-of-date. You probably need to run `%s`.' => 'Zdá sa, že súbor \'%s\' je zastaraný. Pravdepodobne musíte spustiť `%s`.',
  'When updating a revision, use the specified message instead of prompting.' => 'Pri aktualizácii revízie použiť zadanú správu namiesto pýtania sa.',
  'No revision "%s" exists, or you do not have permission to view it.' => 'Revízia „%s“ neexistuje alebo nemáte oprávnenie ju zobraziť.',
  'First hash argument must be a string.' => 'Prvý argument hashu musí byť reťazec.',
  'One Class Per File' => 'Jedna trieda na súbor',
  'Unknown line change type \'%s\'.' => 'Neznámy typ zmeny riadka \'%s\'.',
  'Mar' => 'mar',
  'You are not the author of revision "%s", are you sure you want to close it?' => 'Nie ste autorom revízie „%s“, naozaj ju chcete zavrieť?',
  'Failed to extract link target!' => 'Nepodarilo sa získať cieľ odkazu!',
  'No rules left from source \'%s\'.' => 'Zo zdroja \'%s\' nezostali žiadne pravidlá.',
  'Only show tasks assigned to the given username, also accepts %s to show all, default is you.' => 'Zobraziť iba úlohy priradené zadanému používateľskému menu; prijíma aj %s na zobrazenie všetkých, predvolene ste to vy.',
  'New Version Available!' => 'K dispozícii je nová verzia!',
  'BRANCH OPTION NOT AVAILABLE' => 'VOĽBA VETVY NIE JE DOSTUPNÁ',
  'SCAN' => 'SKENOVANIE',
  'Command to use to invoke an interactive editor, like `%s` or `%s`. This setting overrides the %s environmental variable.' => 'Príkaz, ktorý sa má použiť na spustenie interaktívneho editora, napríklad `%s` alebo `%s`. Toto nastavenie prepisuje premennú prostredia %s.',
  'Bad object key ("%s").' => 'Nesprávny kľúč objektu („%s“).',
  'Expected workflow ("%s", of class "%s") to return an "ArcanistWorkflowInformation" object from call to "getWorkflowInformation()", got %s.' => 'Očakávalo sa, že pracovný postup („%s“, triedy „%s“) vráti z volania „getWorkflowInformation()“ objekt „ArcanistWorkflowInformation“, získalo sa %s.',
  'Parameter has invalid type.' => 'Parameter má neplatný typ.',
  'Noncanonical Symbol' => 'Nekanonický symbol',
  'The server does not support staging areas for this repository.' => 'Server nepodporuje prípravné oblasti pre tento repozitár.',
  'Install cpplint.py using `%s`, and place it in your path with the appropriate permissions set.' => 'Nainštalujte cpplint.py pomocou `%s` a umiestnite ho do svojej cesty s príslušne nastavenými oprávneniami.',
  'Specify either setData() or setPath() when building a file data reference, but not both.' => 'Pri vytváraní odkazu na údaje súboru zadajte buď setData(), alebo setPath(), ale nie oboje.',
  'Parameter \'%s\' has invalid type.' => 'Parameter \'%s\' má neplatný typ.',
  'BUILD FAILURES' => 'ZLYHANIA ZOSTAVENÍ',
  'Exit after __seconds__ spent idle.' => 'Ukončiť po __seconds__ strávených nečinnosťou.',
  '`%s` method cannot be declared `%s`. This construct will cause a fatal error.' => 'Metóda `%s` sa nedá deklarovať ako `%s`. Táto konštrukcia spôsobí fatálnu chybu.',
  '\'%s\' files should not be executable.' => 'Súbory \'%s\' by nemali byť spustiteľné.',
  'Path to a custom CA bundle file to be used for cURL calls. This is used primarily when your conduit endpoint is behind HTTPS signed by your organization\'s internal CA.' => 'Cesta k vlastnému súboru s balíkom CA, ktorý sa má použiť pri volaniach cURL. Používa sa hlavne vtedy, keď je váš koncový bod conduit za HTTPS podpísaným internou CA vašej organizácie.',
  'JSHint returned unparseable output.' => 'JSHint vrátil neanalyzovateľný výstup.',
  'Disables lint for files that are marked as "%s", indicating that they contain generated code.' => 'Zakazuje lint pre súbory, ktoré sú označené ako „%s“, čo znamená, že obsahujú generovaný kód.',
  'Revision \'%s\' does not exist.' => 'Revízia \'%s\' neexistuje.',
  ' <%dms' => ' <%dms',
  'Follow naming conventions: classes should be named using `%s`.' => 'Dodržiavajte konvencie pomenúvania: triedy by sa mali pomenúvať pomocou `%s`.',
  'Failed to install signal handler!' => 'Nepodarilo sa nainštalovať obsluhu signálu!',
  'Depends on %s. ' => 'Závisí od %s.',
  '**upgrade**' => '**upgrade**',
  'Nullable type hints are not available before PHP 7.1.' => 'Typové nápovedy nullable nie sú dostupné pred PHP 7.1.',
  'This class is neither `%s` nor `%s`, and does not have a docblock marking it `%s`.' => 'Táto trieda nie je ani `%s`, ani `%s` a nemá dokumentačný blok, ktorý by ju označoval ako `%s`.',
  'Avoid `%s` unless the second parameter is specified. It is confusing and hinders static analysis.' => 'Vyhýbajte sa `%s`, pokiaľ nie je zadaný druhý parameter. Je mätúce a bráni statickej analýze.',
  'Local branch "%s" has unpublished changes, ending updates.' => 'Lokálna vetva „%s“ má nepublikované zmeny, aktualizácie sa ukončujú.',
  'Requested path \'%s\' is not a file.' => 'Požadovaná cesta \'%s\' nie je súbor.',
  'No type name for token type ID \'%s\' in \'%s\' AAST.' => 'Žiadny názov typu pre ID typu tokenu \'%s\' v AAST \'%s\'.',
  'Unable to convert URI "%s" into a standard URI because the path is relative. Standard URIs can not represent relative paths.' => 'Nepodarilo sa previesť URI „%s“ na štandardné URI, pretože cesta je relatívna. Štandardné URI nedokážu reprezentovať relatívne cesty.',
  'it is the merge-base of \'%s\' and HEAD, as you just specified.' => 'je to merge-base \'%s\' a HEAD, ako ste práve zadali.',
  'Aborted update of revision: You are not the owner.' => 'Aktualizácia revízie prerušená: Nie ste vlastníkom.',
  'Empty user in credentials.' => 'Prázdny používateľ v povereniach.',
  'Union types are not available before PHP 8.0.' => 'Zjednotené typy nie sú dostupné pred PHP 8.0.',
  'Convention: put a space after control statements.' => 'Konvencia: za riadiace príkazy vložte medzeru.',
  'Unknown Mercurial capability "%s".' => 'Neznáma schopnosť Mercurialu „%s“.',
  'the repository has no commits.' => 'repozitár nemá žiadne commity.',
  '#%d' => '#%d',
  'Command string argument includes text which is not valid UTF-8. This library can not safely escape this sequence in command line arguments in Windows environments.' => 'Reťazcový argument príkazu obsahuje text, ktorý nie je platné UTF-8. Táto knižnica nedokáže bezpečne escapovať túto sekvenciu v argumentoch príkazového riadka v prostrediach Windows.',
  'Expected \'%s\' divider line.' => 'Očakával sa oddeľovací riadok \'%s\'.',
  '...and "%s" will be sent to Differential, because %s' => '...a do Differentialu sa odošle „%s“, pretože %s',
  'Supports: git, git/p4, git/svn, hg

Publish accepted revisions after review. This command is the last step in the
standard Differential code review workflow.

To publish changes in local branch or bookmark "feature1", you will usually
run this command:

  **$ arc land feature1**

This workflow merges and pushes changes associated with revisions that are
ancestors of __ref__. Without __ref__, the current working copy state will be
used. You can specify multiple __ref__ arguments to publish multiple changes at
once.

A __ref__ can be any symbol which identifies a commit: a branch name, a tag
name, a bookmark name, a topic name, a raw commit hash, a symbolic reference,
etc.

When you provide a __ref__, all unpublished changes which are present in
ancestors of that __ref__ will be selected for publishing. (With the
**--pick** flag, only the unpublished changes you directly reference will be
selected.)

For example, if you provide local branch "feature3" as a __ref__ argument, that
may also select the changes in "feature1" and "feature2" (if they are ancestors
of "feature3"). If you stack changes in a single local branch, all commits in
the stack may be selected.

The workflow merges unpublished changes reachable from __ref__ "into" some
intermediate branch, then pushes the combined state "onto" some destination
branch (or list of branches).

(In Mercurial, the "into" and "onto" branches may be bookmarks instead.)

In the most common case, there is only one "onto" branch (often "master" or
"default" or some similar branch) and the "into" branch is the same branch. For
example, it is common to merge local feature branch "feature1" into
"origin/master", then push it onto "origin/master".

The list of "onto" branches is selected by examining these sources in order:

  - the **--onto** flags;
  - the __arc.land.onto__ configuration setting;
  - (in Git) the upstream of the branch targeted by the land operation,
    recursively;
  - or by falling back to a standard default:
    - (in Git) "master";
    - (in Mercurial) "default".

The remote to push "onto" is selected by examining these sources in order:

  - the **--onto-remote** flag;
  - the __arc.land.onto-remote__ configuration setting;
  - (in Git) the upstream of the current branch, recursively;
  - (in Git) the special "p4" remote which indicates a repository has
    been synchronized with Perforce;
  - or by falling back to a standard default:
    - (in Git) "origin";
    - (in Mercurial) "default".

The branch to merge "into" is selected by examining these sources in order:

  - the **--into** flag;
  - the **--into-empty** flag;
  - or by falling back to the first "onto" branch.

The remote to merge "into" is selected by examining these sources in order:

  - the **--into-remote** flag;
  - the **--into-local** flag (which disables fetching before merging);
  - or by falling back to the "onto" remote.

After selecting remotes and branches, the commits which will land are printed.

With **--preview**, execution stops here, before the change is merged.

The "into" branch is fetched from the "into" remote (unless **--into-local** or
**--into-empty** are specified) and the changes are merged into the state in
the "into" branch according to the selected merge strategy.

The default merge strategy is "squash", which produces a single commit from
all local commits for each change. A different strategy can be selected with
the **--strategy** flag.

The resulting merged change will be given an up-to-date commit message
describing the final state of the revision in Differential.

With **--hold**, execution stops here, before the change is pushed.

The change is pushed onto all of the "onto" branches in the "onto" remote.

If you are landing multiple changes, they are normally all merged locally and
then all pushed in a single operation. Instead, you can merge and push them one
at a time with **--incremental**.

Under merge strategies which mutate history (including the default "squash"
strategy), local refs which descend from commits that were published are
now updated. For example, if you land "feature4", local branches "feature5" and
"feature6" may now be rebased on the published version of the change.

Once everything has been pushed, cleanup occurs. Consulting mystical sources of
power, the workflow makes a guess about what state you wanted to end up in
after the process finishes. The working copy is put into that state.

Any obsolete refs that point at commits which were published are deleted,
unless the **--keep-branches** flag is passed.' => 'Supports: git, git/p4, git/svn, hg

Publikuje schválené revízie po posúdení. Tento príkaz je posledným krokom
štandardného pracovného postupu posudzovania kódu v Differentiale.

Na publikovanie zmien v lokálnej vetve alebo záložke „feature1“ zvyčajne
spustíte tento príkaz:

  **$ arc land feature1**

Tento pracovný postup zlúči a odošle zmeny priradené k revíziám, ktoré sú
predkami __ref__. Bez __ref__ sa použije aktuálny stav pracovnej kópie.
Zadaním viacerých argumentov __ref__ môžete publikovať viacero zmien naraz.

__ref__ môže byť ľubovoľný symbol, ktorý identifikuje commit: názov vetvy,
názov značky, názov záložky, názov témy, surový hash commitu, symbolická
referencia atď.

Keď zadáte __ref__, na publikovanie sa vyberú všetky nepublikované zmeny,
ktoré sa nachádzajú v predkoch tohto __ref__. (S prepínačom **--pick** sa
vyberú iba tie nepublikované zmeny, na ktoré priamo odkazujete.)

Napríklad ak ako argument __ref__ zadáte lokálnu vetvu „feature3“, môže to
vybrať aj zmeny vo „feature1“ a „feature2“ (ak sú predkami „feature3“). Ak
zmeny vrstvíte v jednej lokálnej vetve, môžu sa vybrať všetky commity v tomto
zásobníku.

Pracovný postup zlúči nepublikované zmeny dosiahnuteľné z __ref__ „do“ (into)
nejakej medziľahlej vetvy a potom odošle kombinovaný stav „na“ (onto) nejakú
cieľovú vetvu (alebo zoznam vetiev).

(V Mercuriale môžu byť vetvy „into“ a „onto“ namiesto toho záložkami.)

V najbežnejšom prípade existuje iba jedna vetva „onto“ (často „master“,
„default“ alebo nejaká podobná vetva) a vetva „into“ je tá istá vetva.
Napríklad je bežné zlúčiť lokálnu funkčnú vetvu „feature1“ do „origin/master“
a potom ju odoslať na „origin/master“.

Zoznam vetiev „onto“ sa vyberá skúmaním týchto zdrojov v tomto poradí:

  - prepínače **--onto**;
  - konfiguračné nastavenie __arc.land.onto__;
  - (v Gite) upstream vetvy, na ktorú cieli operácia začlenenia, rekurzívne;
  - alebo návratom k štandardnej predvolenej hodnote:
    - (v Gite) „master“;
    - (v Mercuriale) „default“.

Vzdialené úložisko, na ktoré sa má odoslať („onto“), sa vyberá skúmaním týchto
zdrojov v tomto poradí:

  - prepínač **--onto-remote**;
  - konfiguračné nastavenie __arc.land.onto-remote__;
  - (v Gite) upstream aktuálnej vetvy, rekurzívne;
  - (v Gite) špeciálne vzdialené úložisko „p4“, ktoré naznačuje, že repozitár
    bol synchronizovaný s Perforce;
  - alebo návratom k štandardnej predvolenej hodnote:
    - (v Gite) „origin“;
    - (v Mercuriale) „default“.

Vetva, do ktorej sa má zlúčiť („into“), sa vyberá skúmaním týchto zdrojov
v tomto poradí:

  - prepínač **--into**;
  - prepínač **--into-empty**;
  - alebo návratom k prvej vetve „onto“.

Vzdialené úložisko, do ktorého sa má zlúčiť („into“), sa vyberá skúmaním
týchto zdrojov v tomto poradí:

  - prepínač **--into-remote**;
  - prepínač **--into-local** (ktorý zakáže načítavanie pred zlúčením);
  - alebo návratom k vzdialenému úložisku „onto“.

Po výbere vzdialených úložísk a vetiev sa vypíšu commity, ktoré sa začlenia.

S prepínačom **--preview** sa vykonávanie zastaví tu, pred zlúčením zmeny.

Vetva „into“ sa načíta zo vzdialeného úložiska „into“ (pokiaľ nie sú zadané
**--into-local** alebo **--into-empty**) a zmeny sa zlúčia do stavu vo vetve
„into“ podľa zvolenej stratégie zlučovania.

Predvolenou stratégiou zlučovania je „squash“, ktorá vytvorí pre každú zmenu
jeden commit zo všetkých lokálnych commitov. Inú stratégiu môžete zvoliť
prepínačom **--strategy**.

Výsledná zlúčená zmena dostane aktuálnu správu commitu popisujúcu konečný stav
revízie v Differentiale.

S prepínačom **--hold** sa vykonávanie zastaví tu, pred odoslaním zmeny.

Zmena sa odošle na všetky vetvy „onto“ vo vzdialenom úložisku „onto“.

Ak začleňujete viacero zmien, zvyčajne sa všetky zlúčia lokálne a potom sa
všetky odošlú v jednej operácii. Namiesto toho ich môžete zlučovať a odosielať
po jednej pomocou **--incremental**.

Pri stratégiách zlučovania, ktoré menia históriu (vrátane predvolenej
stratégie „squash“), sa lokálne refy, ktoré pochádzajú z publikovaných
commitov, teraz aktualizujú. Napríklad ak začleníte „feature4“, lokálne vetvy
„feature5“ a „feature6“ sa teraz môžu rebasovať na publikovanú verziu zmeny.

Keď je všetko odoslané, prebehne vyčistenie. Pracovný postup po konzultácii
s mystickými zdrojmi sily odhadne, v akom stave ste chceli po skončení procesu
skončiť. Pracovná kópia sa uvedie do tohto stavu.

Všetky zastarané refy, ktoré ukazujú na publikované commity, sa odstránia,
pokiaľ nie je zadaný prepínač **--keep-branches**.',
  'You can not discard the result buffer while streaming results to disk: there is no in-memory buffer to discard.' => 'Vyrovnávaciu pamäť výsledkov nemôžete zahodiť počas streamovania výsledkov na disk: neexistuje žiadna vyrovnávacia pamäť v pamäti, ktorú by bolo možné zahodiť.',
  'Space Around Binary Operator' => 'Medzery okolo binárneho operátora',
  'The branches you are landing are connected to multiple different remote branches via Git branch upstreams. Use "--onto" to select the refs you want to push to.' => 'Vetvy, ktoré začleňujete, sú prepojené s viacerými rôznymi vzdialenými vetvami cez upstreamy vetiev Gitu. Pomocou „--onto“ zvoľte refy, na ktoré chcete odoslať.',
  'Landing the current branch, "%s".' => 'Začleňuje sa aktuálna vetva „%s“.',
  'You are amending the working copy using information from a revision that does not appear to be associated with the current state of the working copy.' => 'Pracovnú kópiu dopĺňate pomocou informácií z revízie, ktorá sa zjavne nevzťahuje na aktuálny stav pracovnej kópie.',
  'Land changes that depend on %s open revision(s)?' => array(
    'Začleniť zmeny, ktoré závisia od otvorenej revízie?',
    'Začleniť zmeny, ktoré závisia od %s otvorených revízií?',
  ),
  'Confirms creation of a new library.' => 'Potvrdzuje vytvorenie novej knižnice.',
  'it is the merge-base of \'%s\' and HEAD, as specified in \'%s\' in \'%s\'. This setting overrides other settings.' => 'je to merge-base \'%s\' a HEAD, ako je určené v \'%s\' v \'%s\'. Toto nastavenie prepisuje ostatné nastavenia.',
  'Failed to resolve symbol ref "%s".' => 'Nepodarilo sa vyhodnotiť ref symbolu „%s“.',
  'Server' => 'Server',
  '%s Value' => 'Hodnota %s',
  'Unable to sign Conduit request with signing key.' => 'Nepodarilo sa podpísať požiadavku Conduit podpisovým kľúčom.',
  'instance of %s' => 'inštancia %s',
  'URI' => 'URI',
  'Need head hashes or exact hashes!' => 'Sú potrebné hashe hláv alebo presné hashe!',
  '`%s` cannot be re-assigned. This construct will cause a PHP fatal error.' => '`%s` sa nedá znovu priradiť. Táto konštrukcia spôsobí fatálnu chybu PHP.',
  'Land %s revision(s) anyway, despite ongoing builds?' => array(
    'Začleniť %s revíziu napriek prebiehajúcim zostaveniam?',
    'Začleniť %s revízie napriek prebiehajúcim zostaveniam?',
    'Začleniť %s revízií napriek prebiehajúcim zostaveniam?',
  ),
  'Minimum ("%d") must not be greater than maximum ("%d").' => 'Minimum („%d“) nesmie byť väčšie ako maximum („%d“).',
  'You must specify a Conduit URI with %s before you can establish a conduit.' => 'Pred vytvorením conduitu musíte zadať URI Conduit pomocou %s.',
  'Rewrite this file?' => 'Prepísať tento súbor?',
  'To log in and save credentials for this server, run this command:' => 'Ak sa chcete prihlásiť a uložiť poverenia pre tento server, spustite tento príkaz:',
  'Attempting to get subprocess status in "ExecFuture" with no valid subprocess.' => 'Pokus o získanie stavu podprocesu v „ExecFuture“ bez platného podprocesu.',
  'Command string argument includes a NULL byte. This byte can not be safely escaped in command line arguments in Linux environments.' => 'Reťazcový argument príkazu obsahuje bajt NULL. Tento bajt sa nedá bezpečne escapovať v argumentoch príkazového riadka v prostrediach Linuxu.',
  'Array Style' => 'Štýl poľa',
  'There are %s commits reachable from the specified sources (%s) that are not present in the repository state you are merging into ("%s"). All of these commits will land:' => array(
    'Zo zadaných zdrojov (%2$s) je dosiahnuteľný %s commit, ktorý nie je prítomný v stave repozitára, do ktorého zlučujete („%3$s“). Všetky tieto commity sa začlenia:',
    'Zo zadaných zdrojov (%2$s) sú dosiahnuteľné %s commity, ktoré nie sú prítomné v stave repozitára, do ktorého zlučujete („%3$s“). Všetky tieto commity sa začlenia:',
    'Zo zadaných zdrojov (%2$s) je dosiahnuteľných %s commitov, ktoré nie sú prítomné v stave repozitára, do ktorého zlučujete („%3$s“). Všetky tieto commity sa začlenia:',
  ),
  '**liberate**' => '**liberate**',
  'Unknown lint message!' => 'Neznáma správa lintu!',
  'Default value for parameters with a bool type hint can only be true or false.' => 'Predvolenou hodnotou parametrov s typovou nápovedou bool môže byť len true alebo false.',
  'Grid has no column "%s".' => 'Mriežka nemá stĺpec „%s“.',
  'The UUID for this working copy is "%s".' => 'UUID tejto pracovnej kópie je „%s“.',
  'Searching for libraries in the current working directory...' => 'Vyhľadávajú sa knižnice v aktuálnom pracovnom adresári...',
  'MATCHING REVISIONS' => 'ZODPOVEDAJÚCE REVÍZIE',
  'You can learn more about how this software handles character encodings (and how to configure encoding settings and detect and correct encoding problems) by reading \'User Guide: UTF-8 and Character Encoding\' in the documentation.' => 'Viac o tom, ako tento softvér spracúva kódovania znakov (a ako nakonfigurovať nastavenia kódovania a zisťovať a opravovať problémy s kódovaním), sa dozviete prečítaním \'User Guide: UTF-8 and Character Encoding\' v dokumentácii.',
  'Command exited with nonzero error code.' => 'Príkaz skončil s nenulovým chybovým kódom.',
  'No unit test engine is configured for this project.' => 'Pre tento projekt nie je nakonfigurovaný žiadny nástroj na jednotkové testy.',
  'When creating a revision, read revision information from this file.' => 'Pri vytváraní revízie načítať informácie o revízii z tohto súboru.',
  'Invalid octal numeric scalar. `%s` is not a valid octal and will be interpreted as `%d`.' => 'Neplatný osmičkový číselný skalár. `%s` nie je platné osmičkové číslo a bude interpretované ako `%d`.',
  'SHELL ALIAS' => 'ALIAS SHELLU',
  'Questionable Use of `%s`' => 'Otázne použitie `%s`',
  'Data parameter must be an array or string.' => 'Parameter s údajmi musí byť pole alebo reťazec.',
  'Resuming work on revision:' => 'Pokračuje sa v práci na revízii:',
  'Only agent actions may be added to a plan.' => 'Do plánu sa dajú pridávať iba akcie agenta.',
  'Assertion of caught exception failed (at %s:%d).' => 'Tvrdenie o zachytenej výnimke zlyhalo (na %s:%d).',
  'NEW DIFFERENTIAL REVISION' => 'NOVÁ REVÍZIA DIFFERENTIAL',
  'Argument' => 'Argument',
  '%s line(s)' => array(
    'riadok',
    'riadky',
    'riadkov',
  ),
  'Error in parsing \'%s\' file.' => 'Chyba pri analýze súboru \'%s\'.',
  'Trying rules from source \'%s\'.' => 'Skúšajú sa pravidlá zo zdroja \'%s\'.',
  'After creating a diff or revision, open it in a web browser.' => 'Po vytvorení diffu alebo revízie ju otvoriť vo webovom prehliadači.',
  'Missing required "--" in argument list.' => 'V zozname argumentov chýba povinné „--“.',
  'Generate diff by executing a specified command, not from the working copy. This disables many features which depend on having access to the working copy.' => 'Vygenerovať diff vykonaním zadaného príkazu, nie z pracovnej kópie. Tým sa zakáže mnoho funkcií, ktoré závisia od prístupu k pracovnej kópii.',
  'Only show tasks that are not assigned (upforgrabs).' => 'Zobraziť iba úlohy, ktoré nie sú priradené (upforgrabs).',
  'Do you want to amend these %s change(s) to the current commit?' => array(
    'Chcete túto zmenu doplniť do aktuálneho commitu?',
    'Chcete tieto zmeny doplniť do aktuálneho commitu?',
  ),
  'You have missing files in this working copy. Revert or formally remove them (with `%s`) before proceeding.' => 'V tejto pracovnej kópii máte chýbajúce súbory. Pred pokračovaním ich vráťte späť alebo formálne odstráňte (pomocou `%s`).',
  'USAGE' => 'POUŽITIE',
  'LOGIN REQUIRED' => 'VYŽADUJE SA PRIHLÁSENIE',
  'Class contains %s %s method(s) and must therefore be declared `%s`.' => array(
    'Trieda obsahuje %s metódu %s, a preto musí byť deklarovaná ako `%s`.',
    'Trieda obsahuje %s metódy %s, a preto musí byť deklarovaná ako `%s`.',
    'Trieda obsahuje %s metód %s, a preto musí byť deklarovaná ako `%s`.',
  ),
  'Rule \'%s\' popped off the last state.' => 'Pravidlo \'%s\' vybralo posledný stav.',
  'ALREADY A DRAFT' => 'UŽ JE KONCEPTOM',
  'Command killed by timeout after running for more than %s seconds.' => 'Príkaz bol ukončený časovým limitom po tom, ako bežal viac ako %s sekúnd.',
  'Pass in custom dictionaries.' => 'Odovzdať vlastné slovníky.',
  'Linter \'%s\' specifies invalid type \'%s\'. Available linters are: %s.' => 'Linter \'%s\' určuje neplatný typ \'%s\'. Dostupné lintery sú: %s.',
  'Configure your editor to use spaces for indentation.' => 'Nastavte svoj editor tak, aby na odsadzovanie používal medzery.',
  'AMBIGUOUS REVISION' => 'NEJEDNOZNAČNÁ REVÍZIA',
  'Query matched multiple refs, expected zero or one.' => 'Dopytu vyhovelo viacero refov, očakával sa žiadny alebo jeden.',
  'Unexpected return value from calls to "%s(...)". More than one object returned a value with unique key "%s". This key was returned by objects with indexes: %s.' => 'Neočakávaná návratová hodnota z volaní „%s(...)“. Viac ako jeden objekt vrátil hodnotu s jedinečným kľúčom „%s“. Tento kľúč vrátili objekty s indexmi: %s.',
  'Generate a diff (with just local changes) anyway?' => 'Napriek tomu vygenerovať diff (iba s lokálnymi zmenami)?',
  'Editor exited with an error code (#%d).' => 'Editor skončil s chybovým kódom (č. %d).',
  'Use of Deprecated Function' => 'Použitie zastaranej funkcie',
  'Type of setting \'%s\' must be list. You can specify a list in JSON, like: %s' => 'Typ nastavenia \'%s\' musí byť zoznam. Zoznam môžete zadať vo formáte JSON, napríklad: %s',
  'Detect syntax errors in JSON files.' => 'Zisťovať syntaktické chyby v súboroch JSON.',
  'Unexpected "%s" section in property deletion.' => 'Neočakávaná sekcia „%s“ pri odstraňovaní vlastnosti.',
  'You are using "--hold", so execution will stop before the %s bookmark(s) are actually created. You will be given instructions to create the bookmarks.' => array(
    'Používate „--hold“, takže vykonávanie sa zastaví predtým, než sa záložka skutočne vytvorí. Dostanete pokyny na vytvorenie záložky.',
    'Používate „--hold“, takže vykonávanie sa zastaví predtým, než sa záložky skutočne vytvoria. Dostanete pokyny na vytvorenie záložiek.',
  ),
  '`%s` properties should be avoided. Instead of exposing the property value directly, consider using getter and setter methods.' => 'Vlastnostiam `%s` by ste sa mali vyhýbať. Namiesto priameho sprístupňovania hodnoty vlastnosti zvážte použitie metód getter a setter.',
  'In Preparation' => 'V príprave',
  'Unable to parse byte size \'%s\'!' => 'Nepodarilo sa analyzovať veľkosť v bajtoch \'%s\'!',
  'No task "%s" exists, or you do not have permission to view it.' => 'Úloha „%s“ neexistuje alebo nemáte oprávnenie ju zobraziť.',
  'You are updating a revision ("%s") with the "--draft" flag, but this revision is already a draft. You only need to provide the "--draft" flag when creating a revision. Draft revisions are not published until you explicitly request review from the web UI.' => 'Aktualizujete revíziu („%s“) s prepínačom „--draft“, ale táto revízia už je konceptom. Prepínač „--draft“ stačí zadať pri vytváraní revízie. Koncepty revízií sa nepublikujú, kým výslovne nepožiadate o posúdenie vo webovom rozhraní.',
  'Synchronizing "%s" from Perforce...' => 'Synchronizuje sa „%s“ z Perforce...',
  'Failed to write response to disk. (Maybe the disk is full?)' => 'Nepodarilo sa zapísať odpoveď na disk. (Nie je disk plný?)',
  'Expected Open Tag' => 'Očakávaná otváracia značka',
  'Remain in the foreground instead of daemonizing.' => 'Zostať v popredí namiesto démonizácie.',
  'Unable to determine revision for commit "%s".' => 'Nepodarilo sa určiť revíziu pre commit „%s“.',
  'Updating to the revision\'s base commit' => 'Aktualizuje sa na základný commit revízie',
  'You can not specify paths with %s. The %s flag lints every tracked file in the working copy.' => 'S %s nemôžete zadať cesty. Prepínač %s lintuje každý sledovaný súbor v pracovnej kópii.',
  'Expected a non-null return from call to "%s->saveStash()".' => 'Očakávala sa nenulová návratová hodnota z volania „%s->saveStash()“.',
  'Detecting current shell...' => 'Zisťuje sa aktuálny shell...',
  'There was an error negotiating the SSL connection. This usually indicates that the remote host has a bad SSL certificate, or your local host has some sort of SSL misconfiguration which prevents it from accepting the CA. If you are using a self-signed certificate, see instructions in "%s".' => 'Pri vyjednávaní SSL spojenia sa vyskytla chyba. Zvyčajne to znamená, že vzdialený hostiteľ má nesprávny certifikát SSL alebo váš lokálny hostiteľ má nejaké nesprávne nastavenie SSL, ktoré mu bráni prijať CA. Ak používate certifikát podpísaný sebou samým, pozrite si pokyny v „%s“.',
  'OpenSSL encountered an error verifying the request signature: %s' => 'OpenSSL narazil na chybu pri overovaní podpisu požiadavky: %s',
  'Flags "--all" and "--builtins" are not compatible.' => 'Prepínače „--all“ a „--builtins“ nie sú kompatibilné.',
  'Default value for parameters with bool type hint can only be true or false.' => 'Predvolenou hodnotou parametrov s typovou nápovedou bool môže byť len true alebo false.',
  'Unable to parse path as PHAR file. PHAR file paths must include a segment with one of these extensions (case-sensitive): %s' => 'Cestu sa nepodarilo analyzovať ako súbor PHAR. Cesty k súborom PHAR musia obsahovať segment s jednou z týchto prípon (rozlišujú sa veľké a malé písmená): %s',
  'LINT OKAY' => 'LINT V PORIADKU',
  'This file contains leading whitespace at the beginning of the file. This is unnecessary and should be avoided when possible.' => 'Tento súbor obsahuje na začiatku biele znaky. Je to zbytočné a ak je to možné, malo by sa tomu predchádzať.',
  'Severity rule "%s" is not a valid regular expression.' => 'Pravidlo závažnosti „%s“ nie je platný regulárny výraz.',
  'This test is expected to skip.' => 'Očakáva sa, že tento test sa preskočí.',
  'Flag "--browse" is not supported when reading pastes. Use "arc browse" to browse known objects.' => 'Prepínač „--browse“ nie je pri čítaní vložených textov podporovaný. Na prehliadanie známych objektov použite „arc browse“.',
  'After the upload completes, open the files in a web browser.' => 'Po dokončení nahrávania otvoriť súbory vo webovom prehliadači.',
  '`%s` has limited support for features introduced after PHP 5.2.3. This library uses an unsupported feature (%s) on line %d of %s.' => '`%s` má obmedzenú podporu funkcií zavedených po PHP 5.2.3. Táto knižnica používa nepodporovanú funkciu (%s) na riadku %d v %s.',
  'Fetch of "%s" from remote "%s" failed! Fix the error and run "arc land" again.' => 'Načítanie „%s“ zo vzdialeného úložiska „%s“ zlyhalo! Opravte chybu a spustite „arc land“ znova.',
  'Shell completion for "%s" is already installed.' => 'Dopĺňanie v shelli pre „%s“ je už nainštalované.',
  '[%s] Working...' => '[%s] Pracuje sa...',
  'There is no locale with the locale code "%s".' => 'Neexistuje žiadna lokalizácia s kódom lokalizácie „%s“.',
  'Python PyFlakes' => 'Python PyFlakes',
  'namespaces' => 'menné priestory',
  'Default value for parameters with a union type hint can only be a value of one of its types.' => 'Predvolenou hodnotou parametrov s typovou nápovedou zjednoteného typu môže byť len hodnota jedného z jeho typov.',
  'Argument unpacking is not available before PHP 5.6.' => 'Rozbaľovanie argumentov nie je dostupné pred PHP 5.6.',
  'Create and modify command aliases.' => 'Vytvárať a upravovať aliasy príkazov.',
  'Use PHP-parser for parsing instead of XHPAST.' => 'Použiť na analýzu PHP-parser namiesto XHPAST.',
  'Default value for parameters with an iterable type hint can only be an instantation of an iterable type or an array.' => 'Predvolenou hodnotou parametrov s typovou nápovedou iterable môže byť len inštancia iterovateľného typu alebo pole.',
  'Default value for parameters with an object type hint can only be an instantation of an object.' => 'Predvolenou hodnotou parametrov s typovou nápovedou object môže byť len inštancia objektu.',
  'it is the merge-base of \'%s\' and HEAD, as specified by \'%s\' in your %s \'base\' configuration.' => 'je to merge-base \'%s\' a HEAD, ako je určené pomocou \'%s\' vo vašej konfigurácii \'base\' v %s.',
  'The specified commit range is empty, backward or invalid: the base (%s) is not an ancestor of the head (%s). You can not diff an empty or reversed commit range.' => 'Zadaný rozsah commitov je prázdny, obrátený alebo neplatný: základ (%s) nie je predkom hlavy (%s). Prázdny alebo obrátený rozsah commitov sa nedá diffovať.',
  'The directory "%s" does not exist. Do you want to create it?' => 'Adresár „%s“ neexistuje. Chcete ho vytvoriť?',
  'JSON command \'%s\' emitted text to stderr when none was expected: %d' => 'Príkaz JSON \'%s\' vypísal text na stderr, hoci sa žiadny neočakával: %d',
  'You are running an old version of %s. Please upgrade to version %s.' => 'Používate starú verziu %s. Aktualizujte prosím na verziu %s.',
  'Unexpected field count when parsing line "%s", got %s but expected %s.' => 'Neočakávaný počet polí pri analýze riadka „%s“, získalo sa %s, ale očakávalo sa %s.',
  'Failed closing file \'%s\' after write.' => 'Nepodarilo sa zavrieť súbor \'%s\' po zápise.',
  'Unexpected output from "hg log ...": %s' => 'Neočakávaný výstup z „hg log ...“: %s',
  'Specify exactly one path!' => 'Zadajte presne jednu cestu!',
  'The null coalescing assignment operator was not introduced until PHP 7.4, but this codebase targets an earlier version of PHP.' => 'Priraďovací operátor null coalescing bol zavedený až v PHP 7.4, ale táto kódová základňa cieli na skoršiu verziu PHP.',
  'Since there are no revisions in Differential which match this working copy, a new revision will be **created** if you run \'%s\'.

' => 'Keďže v Differentiale nie sú žiadne revízie zodpovedajúce tejto pracovnej kópii, po spustení \'%s\' sa **vytvorí** nová revízia.',
  '<... %s more commits ...>' => '<... ešte %s commitov ...>',
  '%s does affect revisions.' => '%s ovplyvňuje revízie.',
  'Use `%s` to call parent method.' => 'Na volanie rodičovskej metódy použite `%s`.',
  'Empty File' => 'Prázdny súbor',
  'Expected exactly one argument to "working-copy(...)" with a commit hash.' => 'Očakával sa presne jeden argument pre „working-copy(...)“ s hashom commitu.',
  '**download** [__options__] -- __file__' => '**download** [__options__] -- __file__',
  '%s (%s)' => '%s (%s)',
  'Install Cppcheck using `%s` or similar.' => 'Nainštalujte Cppcheck pomocou `%s` alebo podobne.',
  'Server exited unexpectedly!' => 'Server neočakávane skončil!',
  'Unexpected \'%s\' in state %s! Expected: %s' => 'Neočakávané \'%s\' v stave %s! Očakávalo sa: %s',
  'This is not a container action.' => 'Toto nie je kontajnerová akcia.',
  '(Message saved to %s.)' => '(Správa bola uložená do %s.)',
  'INTERRUPT' => 'PRERUŠENIE',
  'You must call %s before you can call %s.' => 'Pred volaním %2$s musíte zavolať %s.',
  'String value is not valid UTF8, and can not be JSON encoded: %s' => 'Reťazcová hodnota nie je platné UTF8 a nedá sa zakódovať do JSON: %s',
  'No workflow selected.' => 'Nie je zvolený žiadny pracovný postup.',
  'Specify the end of the commit range to select.' => 'Zadajte koniec rozsahu commitov, ktorý sa má vybrať.',
  'Class constant visibility is not available before PHP 7.1.' => 'Viditeľnosť konštánt tried nie je dostupná pred PHP 7.1.',
  'Unable to open stdout temporary file ("%s") for reading.' => 'Nepodarilo sa otvoriť dočasný súbor stdout („%s“) na čítanie.',
  'Show internal object information.' => 'Zobraziť interné informácie o objekte.',
  'Configured command aliases. Use "arc alias" to define aliases.' => 'Nakonfigurované aliasy príkazov. Na definovanie aliasov použite „arc alias“.',
  'This function exists only to document the call signature for %s callbacks.' => 'Táto funkcia existuje iba na zdokumentovanie signatúry volania pre spätné volania %s.',
  'Changes:' => 'Zmeny:',
  '(To ignore these %s change(s), add them to "%s".)' => array(
    '(Ak chcete túto zmenu ignorovať, pridajte ju do „%2$s“.)',
    '(Ak chcete tieto zmeny ignorovať, pridajte ich do „%2$s“.)',
  ),
  'Amend the working copy, synchronizing the local commit message from
Differential.

Supported in Mercurial 2.2 and newer.' => 'Doplní pracovnú kópiu a synchronizuje lokálnu správu commitu z
Differentialu.

Podporované v Mercuriale 2.2 a novšom.',
  '<listeners = %s>' => '<poslucháčov = %s>',
  'Pass' => 'Prešlo',
  'Some commits reachable from the specified sources (%s) are not associated with revisions, and may not have been reviewed. These commits will be landed as though they belong to the nearest ancestor revision:' => 'Niektoré commity dosiahnuteľné zo zadaných zdrojov (%s) nie sú priradené k žiadnym revíziám a možno neboli posúdené. Tieto commity sa začlenia, ako keby patrili k najbližšej nadradenej revízii:',
  'Required executable "%s" is not available.' => 'Požadovaný spustiteľný súbor „%s“ nie je dostupný.',
  '**inspect** [__options__] -- __object__' => '**inspect** [__options__] -- __object__',
  'File "%s" already exists.' => 'Súbor „%s“ už existuje.',
  'IMPLICIT COMMITS' => 'IMPLICITNÉ COMMITY',
  'Night has fallen. The moon overhead is waning. You can barely make out your surroundings. It is very cold.' => 'Padla noc. Mesiac nad hlavou ubúda. Okolie rozoznávate len ťažko. Je veľmi chladno.',
  'If you intended to create a new revision, use:' => 'Ak ste chceli vytvoriť novú revíziu, použite:',
  'APPLIED' => 'POUŽITÉ',
  'Repeatable arguments may not have a default (always array() for arguments which accept a parameter, or 0 for arguments which do not).' => 'Opakovateľné argumenty nesmú mať predvolenú hodnotu (vždy array() pre argumenty, ktoré prijímajú parameter, alebo 0 pre argumenty, ktoré ho neprijímajú).',
  'Land a specific revision, rather than determining revisions automatically from the commits that are landing.' => 'Začleniť konkrétnu revíziu namiesto automatického určovania revízií z commitov, ktoré sa začleňujú.',
  'You can not define an alias for "%s" because it is a builtin workflow for the current toolset ("%s"). The "alias" workflow can only define new commands as aliases; it can not redefine existing commands to mean something else.' => 'Alias pre „%s“ nemôžete definovať, pretože je to vstavaný pracovný postup aktuálnej sady nástrojov („%s“). Pracovný postup „alias“ dokáže definovať ako aliasy iba nové príkazy; nedokáže predefinovať existujúce príkazy tak, aby znamenali niečo iné.',
  'Upgrade arc now?' => 'Aktualizovať arc teraz?',
  'Refs were selected by reading "%s" configuration: %s.' => 'Refy boli zvolené prečítaním konfigurácie „%s“: %s.',
  'This working copy is not associated with any repository.' => 'Táto pracovná kópia nie je priradená k žiadnemu repozitáru.',
  'Default value for parameters with `%s` type hint can only be an `%s` or `%s`.' => 'Predvolenou hodnotou parametrov s typovou nápovedou `%s` môže byť len `%s` alebo `%s`.',
  'Show an enhanced view of branches in the working copy.' => 'Zobraziť rozšírený pohľad na vetvy v pracovnej kópii.',
  'Constant expressions were not introduced until PHP 5.6, but this codebase targets an earlier version of PHP.' => 'Konštantné výrazy boli zavedené až v PHP 5.6, ale táto kódová základňa cieli na skoršiu verziu PHP.',
  'Unnecessary comma in list assignment.' => 'Zbytočná čiarka v priradení zoznamu.',
  'Argument should be countable.' => 'Argument by mal byť spočítateľný.',
  'Internal. Current term in the argument list being completed.' => 'Interné. Aktuálny výraz v zozname argumentov, ktorý sa dopĺňa.',
  'Land %s revision(s) anyway, despite failed builds?' => array(
    'Začleniť %s revíziu napriek zlyhaným zostaveniam?',
    'Začleniť %s revízie napriek zlyhaným zostaveniam?',
    'Začleniť %s revízií napriek zlyhaným zostaveniam?',
  ),
  '%s: %s' => '%s: %s',
  'Successfully applied patch.' => 'Záplata bola úspešne použitá.',
  'JSON command \'%s\' did not produce a valid JSON object on stdout: %s' => 'Príkaz JSON \'%s\' nevytvoril na stdout platný objekt JSON: %s',
  'Updated an existing Differential revision:' => 'Existujúca revízia Differential bola aktualizovaná:',
  'Provide exactly one library root!' => 'Zadajte presne jeden koreň knižnice!',
  'Support for the class constant `%s` was not introduced until PHP 5.5 but this codebase targets an earlier version of PHP. You can rewrite this expression using the class name as a string directly.' => 'Podpora konštanty triedy `%s` bola zavedená až v PHP 5.5, ale táto kódová základňa cieli na skoršiu verziu PHP. Tento výraz môžete prepísať tak, že názov triedy použijete priamo ako reťazec.',
  'This command needs to communicate with a server, but no server URI is configured.' => 'Tento príkaz potrebuje komunikovať so serverom, ale nie je nakonfigurované žiadne URI servera.',
  'Use `%s` to perform static analysis on C/C++ code.' => 'Na statickú analýzu kódu C/C++ použite `%s`.',
  '%s requires a revision number.' => '%s vyžaduje číslo revízie.',
  'Parent Member Reference' => 'Odkaz na rodičovský člen',
  'Linter %s requires %s version %s. You have version %s.' => 'Linter %s vyžaduje %s vo verzii %s. Máte verziu %s.',
  'Convention: space after `%s` token.' => 'Konvencia: medzera za tokenom `%s`.',
  'Default value for parameters with an int type hint can only be an integer.' => 'Predvolenou hodnotou parametrov s typovou nápovedou int môže byť len celé číslo.',
  'RETURN' => 'NÁVRAT',
  'The version control system ("%s") in the current working copy does not support branches.' => 'Systém správy verzií („%s“) v aktuálnej pracovnej kópii nepodporuje vetvy.',
  'Working Copy: Unable to find %s in any of these locations: %s.' => 'Pracovná kópia: Nepodarilo sa nájsť %s na žiadnom z týchto umiestnení: %s.',
  'Do not run unit tests.' => 'Nespúšťať jednotkové testy.',
  'Updated %s librarie(s).' => array(
    'Bola aktualizovaná %s knižnica.',
    'Boli aktualizované %s knižnice.',
    'Bolo aktualizovaných %s knižníc.',
  ),
  'Default value for parameters with an array type hint can only be an array.' => 'Predvolenou hodnotou parametrov s typovou nápovedou array môže byť len pole.',
  'Unexpected tokens whilst processing `%s`.' => 'Neočakávané tokeny pri spracúvaní `%s`.',
  'Failed to overwrite file.' => 'Nepodarilo sa prepísať súbor.',
  'Chinese (Traditional)' => 'čínština (tradičná)',
  'Keyword Conventions' => 'Konvencie kľúčových slov',
  'This large diff requires more space than it is allowed to use (limited to %s bytes; needs more than %s bytes).' => array(
    
    array(
      'Tento veľký diff vyžaduje viac miesta, než smie použiť (obmedzené na %s bajt; potrebuje viac ako %s bajt).',
      'Tento veľký diff vyžaduje viac miesta, než smie použiť (obmedzené na %s bajt; potrebuje viac ako %s bajty).',
      'Tento veľký diff vyžaduje viac miesta, než smie použiť (obmedzené na %s bajt; potrebuje viac ako %s bajtov).',
    ),
    
    array(
      'Tento veľký diff vyžaduje viac miesta, než smie použiť (obmedzené na %s bajty; potrebuje viac ako %s bajt).',
      'Tento veľký diff vyžaduje viac miesta, než smie použiť (obmedzené na %s bajty; potrebuje viac ako %s bajty).',
      'Tento veľký diff vyžaduje viac miesta, než smie použiť (obmedzené na %s bajty; potrebuje viac ako %s bajtov).',
    ),
    
    array(
      'Tento veľký diff vyžaduje viac miesta, než smie použiť (obmedzené na %s bajtov; potrebuje viac ako %s bajt).',
      'Tento veľký diff vyžaduje viac miesta, než smie použiť (obmedzené na %s bajtov; potrebuje viac ako %s bajty).',
      'Tento veľký diff vyžaduje viac miesta, než smie použiť (obmedzené na %s bajtov; potrebuje viac ako %s bajtov).',
    ),
  ),
  'Expected vs Actual Output Diff
%s' => 'Diff očakávaného a skutočného výstupu
%s',
  'The locale "%s" has an invalid fallback locale code ("%s"). No locale class exists which defines this locale.' => 'Lokalizácia „%s“ má neplatný kód záložnej lokalizácie („%s“). Neexistuje žiadna trieda lokalizácie, ktorá by túto lokalizáciu definovala.',
  'Only the function "viewer()" is supported.' => 'Podporovaná je iba funkcia „viewer()“.',
  'WORKFLOWS' => 'PRACOVNÉ POSTUPY',
  'CLOSE' => 'ZAVRIEŤ',
  'Use of Echo Tag `%s`' => 'Použitie značky echo `%s`',
  'Create this file?' => 'Vytvoriť tento súbor?',
  'Listening' => 'Počúva sa',
  'Feb' => 'feb',
  'Symbol "%s" is ambiguous.' => 'Symbol „%s“ je nejednoznačný.',
  'Inner Functions' => 'Vnorené funkcie',
  'This is slower than the default behavior and not atomic, but may make it easier to resolve conflicts and land complicated changes by allowing you to make progress one step at a time.' => 'Toto je pomalšie ako predvolené správanie a nie je atomické, ale môže uľahčiť riešenie konfliktov a začleňovanie zložitých zmien tým, že vám umožní postupovať krok za krokom.',
  '`%s` Used as Expression' => '`%s` použité ako výraz',
  'More than one marker in the local working copy is associated with the revision "%s", using the most recent one.' => 'S revíziou „%s“ je v lokálnej pracovnej kópii priradená viac ako jedna značka, používa sa najnovšia.',
  'Arguments \'%s\' and \'%s\' are mutually exclusive' => 'Argumenty \'%s\' a \'%s\' sa navzájom vylučujú',
  'Take control of a probe launched from the science vessel "Arcanoid".' => 'Prevezmite kontrolu nad sondou vypustenou z vedeckej lode „Arcanoid“.',
  'OpenSSL encountered an unknown error verifying the request: %s' => 'OpenSSL narazil na neznámu chybu pri overovaní požiadavky: %s',
  'Install pyflakes with `%s`.' => 'Nainštalujte pyflakes pomocou `%s`.',
  '%s WORKFLOW' => 'PRACOVNÝ POSTUP %s',
  'Trying to get change for unchanged path \'%s\'!' => 'Pokus o získanie zmeny pre nezmenenú cestu \'%s\'!',
  'No staging area is configured for this repository.' => 'Pre tento repozitár nie je nakonfigurovaná žiadna prípravná oblasť.',
  'namespace `%s` statements' => 'príkazy `%s` menného priestoru',
  'Message to Mercurial server should be an array.' => 'Správa pre server Mercurial by mala byť pole.',
  'Merge using a particular strategy. Supported strategies are "squash" and "merge".' => 'Zlúčiť pomocou konkrétnej stratégie. Podporované stratégie sú „squash“ a „merge“.',
  'When calling "implode()", pass the "glue" argument first. (The other parameter order is deprecated in PHP 7.4 and raises a warning.)' => 'Pri volaní „implode()“ odovzdajte argument „glue“ ako prvý. (Opačné poradie parametrov je v PHP 7.4 zastarané a vyvoláva upozornenie.)',
  'CIDR block "%s" is not formatted correctly. The IP block mask ("%s") must not have leading zeroes.' => 'Blok CIDR „%s“ nie je správne naformátovaný. Maska bloku IP („%s“) nesmie mať úvodné nuly.',
  'Parameter passed to "%s" must be an integer.' => 'Parameter odovzdaný do „%s“ musí byť celé číslo.',
  'Repository for the current working copy.' => 'Repozitár pre aktuálnu pracovnú kópiu.',
  'The test was not executed.' => 'Test nebol vykonaný.',
  'Downloading authentication certificate...' => 'Sťahuje sa overovací certifikát...',
  'Submit failed! Fix the error and run "arc land" again.' => 'Odoslanie zlyhalo! Opravte chybu a spustite „arc land“ znova.',
  'Specify setData() or setPath() when building a file data reference.' => 'Pri vytváraní odkazu na údaje súboru zadajte setData() alebo setPath().',
  'Included commits:' => 'Zahrnuté commity:',
  'Unable to upload file data: %s' => 'Nepodarilo sa nahrať údaje súboru: %s',
  'Use `%s` to check that your Puppet manifests conform to the style guide.' => 'Pomocou `%s` skontrolujte, či vaše manifesty Puppet zodpovedajú príručke štýlu.',
  'Restoring local state (to ref "%s" at commit "%s").' => 'Obnovuje sa lokálny stav (na ref „%s“ pri commite „%s“).',
  '**land** [__options__] -- [__ref__ ...]' => '**land** [__options__] -- [__ref__ ...]',
  'Workflow ("%s") is requesting a prompt ("%s") but it did not generate any prompt with that name in "newPrompts()".' => 'Pracovný postup („%s“) požaduje výzvu („%s“), ale v „newPrompts()“ nevygeneroval žiadnu výzvu s takýmto názvom.',
  'Dictionary value at key "%s" is not valid UTF8, and cannot be JSON encoded: %s' => 'Hodnota slovníka pri kľúči „%s“ nie je platné UTF8 a nedá sa zakódovať do JSON: %s',
  'Will merge into target "%s" by default, because this is the "onto" target.' => 'Predvolene sa zlúči do cieľa „%s“, pretože je to cieľ „onto“.',
  'Expected value to be a list of objects which are instances of "%s", but item with index "%s" is "%s".' => 'Očakávalo sa, že hodnota bude zoznam objektov, ktoré sú inštanciami „%s“, ale položka s indexom „%s“ je „%s“.',
  'Show detailed information, including options.' => 'Zobraziť podrobné informácie vrátane volieb.',
  'Save the file to a specific location.' => 'Uložiť súbor na konkrétne miesto.',
  'committed' => 'commitnutá',
  'Lowercase Functions' => 'Funkcie malými písmenami',
  'In order to provide replacements for nodes, the original token stream is required.' => 'Na poskytnutie náhrad za uzly sa vyžaduje pôvodný prúd tokenov.',
  'Some terminals do not appear in any rule: %s' => 'Niektoré terminály sa nevyskytujú v žiadnom pravidle: %s',
  'Convention: no spaces before index access.' => 'Konvencia: žiadne medzery pred prístupom k indexu.',
  'The `%s` type hint is not available before PHP 8.1.' => 'Typová nápoveda `%s` nie je dostupná pred PHP 8.1.',
  '< ... %s more commits ... >' => array(
    '< ... ešte %s commit ... >',
    '< ... ešte %s commity ... >',
    '< ... ešte %s commitov ... >',
  ),
  'M j Y' => 'M j Y',
  'The "upgrade" workflow uses "git pull" to upgrade, but the software directory (in "%s") is not a Git working copy. You must leave this directory as a Git working copy to use "arc upgrade".' => 'Pracovný postup „upgrade“ používa na aktualizáciu „git pull“, ale adresár softvéru (v „%s“) nie je pracovnou kópiou Git. Aby ste mohli používať „arc upgrade“, musíte tento adresár ponechať ako pracovnú kópiu Git.',
  'You\'re covered, you didn\'t change anything.' => 'Ste v pohode, nič ste nezmenili.',
  'Linting...' => 'Lintuje sa...',
  'Duplicate Keys in Array' => 'Duplicitné kľúče v poli',
  'RuboCop is a Ruby static code analyzer, based on the community Ruby style guide.' => 'RuboCop je statický analyzátor kódu Ruby založený na komunitnej príručke štýlu Ruby.',
  'Class member access on instantiation without parentheses was not introduced until PHP 8.4, but this codebase targets an earlier version of PHP.' => 'Prístup k členom triedy pri inštanciácii bez zátvoriek bol zavedený až v PHP 8.4, ale táto kódová základňa cieli na skoršiu verziu PHP.',
  'Created a new Differential diff:' => 'Bol vytvorený nový diff Differential:',
  'You may now push this commit upstream, as appropriate (e.g. with \'%s\', or \'%s\', or by printing and faxing it).' => 'Tento commit teraz môžete odoslať do upstreamu podľa potreby (napr. pomocou \'%s\' alebo \'%s\' alebo jeho vytlačením a odfaxovaním).',
  'Show this help.' => 'Zobraziť tohto pomocníka.',
  'a node of type %s: "%s"' => 'uzol typu %s: „%s“',
  'Commit Symbol "%s"' => 'Symbol commitu „%s“',
  'Failed to unpack data.' => 'Nepodarilo sa rozbaliť údaje.',
  'Future has not yet resolved. Resolve futures before retrieving results.' => 'Future ešte nebolo vyriešené. Pred získaním výsledkov future vyriešte.',
  'This codebase targets PHP %s, but parameter %d of `%s()` was not introduced until PHP %s.' => 'Táto kódová základňa cieli na PHP %s, ale parameter %d funkcie `%s()` bol zavedený až v PHP %s.',
  'List Style' => 'Štýl zoznamu',
  'It is not possible to throw an `%s` from within the `%s` method.' => 'Z metódy `%2$s` nie je možné vyhodiť `%s`.',
  'Show tasks that are open or closed, default is open.' => 'Zobraziť otvorené alebo zavreté úlohy, predvolene otvorené.',
  'For consistency, write binary integers with a leading `%s`.' => 'Kvôli konzistentnosti píšte binárne celé čísla s úvodným `%s`.',
  'Streaming reads are not currently supported by the streaming parser.' => 'Streamovacie čítanie momentálne streamovací analyzátor nepodporuje.',
  'acquire and hold a lockfile' => 'získať a držať súbor zámku',
  'Review' => 'Posúdenie',
  '%s lints all files' => '%s lintuje všetky súbory',
  'No working copy to write config to!' => 'Nie je žiadna pracovná kópia, do ktorej by sa dala zapísať konfigurácia!',
  'Print base commit only and exit.' => 'Vypísať iba základný commit a skončiť.',
  'For details on available commands, run "%s".' => 'Podrobnosti o dostupných príkazoch získate spustením „%s“.',
  'Done.' => 'Hotovo.',
  'Parentheses should hug their contents.' => 'Zátvorky by mali tesne obopínať svoj obsah.',
  'This codebase targets PHP %s, but `%s()` was not introduced until PHP %s.' => 'Táto kódová základňa cieli na PHP %s, ale `%s()` bolo zavedené až v PHP %s.',
  'Remote "%s" has no bookmark or branch named "%s".' => 'Vzdialené úložisko „%s“ nemá žiadnu záložku ani vetvu s názvom „%s“.',
  'Unable to install signal handler, pcntl_signal() unavailable. Continuing without signal handling.' => 'Nepodarilo sa nainštalovať obsluhu signálu, pcntl_signal() nie je dostupné. Pokračuje sa bez spracovania signálov.',
  'Argument "--branch" for "arc browse" is not available in your software version control. For example, in SVN, a branch is just a directory with a special meaning for your team. Please omit the "--branch" argument.' => 'Argument „--branch“ pre „arc browse“ nie je vo vašom systéme správy verzií dostupný. Napríklad v SVN je vetva iba adresár so špeciálnym významom pre váš tím. Vynechajte prosím argument „--branch“.',
  'you have no outgoing commits, so arc assumes you intend to submit uncommitted changes in the working copy.' => 'nemáte žiadne odchádzajúce commity, takže arc predpokladá, že chcete odoslať necommitnuté zmeny v pracovnej kópii.',
  'No viable means to download PHP-parser is available.' => 'Nie je dostupný žiadny použiteľný spôsob stiahnutia PHP-parseru.',
  'UPGRADING' => 'AKTUALIZUJE SA',
  'Generating shell completion rules...' => 'Generujú sa pravidlá dopĺňania v shelli...',
  'Argument must be scalar or object which implements %s!' => 'Argument musí byť skalár alebo objekt, ktorý implementuje %s!',
  'Merging with "%s" strategy, selected with "--strategy".' => 'Zlučuje sa stratégiou „%s“ zvolenou pomocou „--strategy“.',
  'Methods may not be both "abstract" and "final".' => 'Metódy nemôžu byť súčasne „abstract“ aj „final“.',
  'Share and grab text using the Paste application. To create a paste, use the
"--input" flag or provide the text on stdin:

  $ cat list_of_ducks.txt | arc paste --
  $ arc paste --input list_of_ducks.txt

To retrieve a paste, specify the paste ID:

  $ arc paste P123' => 'Zdieľajte a získavajte text pomocou aplikácie Paste. Vložený text vytvoríte
prepínačom „--input“ alebo zadaním textu na stdin:

  $ cat list_of_ducks.txt | arc paste --
  $ arc paste --input list_of_ducks.txt

Vložený text získate zadaním jeho ID:

  $ arc paste P123',
  'Unnecessary semicolons after statement.' => 'Zbytočné bodkočiarky za príkazom.',
  'Failed to passthru %s: %s' => 'Nepodarilo sa vykonať passthru %s: %s',
  'Exiting in %d seconds' => 'Ukončenie o %d sekúnd',
  'Put opening braces on the same line as control statements and declarations, with a single space before them.' => 'Otváracie zložené zátvorky umiestňujte na ten istý riadok ako riadiace príkazy a deklarácie, s jednou medzerou pred nimi.',
  'Cast Spacing' => 'Rozostupy pretypovania',
  'Trying to execute a class map query for descendants of class "%s", but the query specifies an "expand method" ("%s") without specifying a "unique method". Class maps which support expansion must have unique keys.' => 'Pokus o vykonanie dopytu mapy tried na potomkov triedy „%s“, ale dopyt určuje „expand method“ („%s“) bez určenia „unique method“. Mapy tried, ktoré podporujú rozširovanie, musia mať jedinečné kľúče.',
  '`%s` blocks are not available before PHP 5.5.' => 'Bloky `%s` nie sú dostupné pred PHP 5.5.',
  'Unable to determine system temporary directory.' => 'Nepodarilo sa určiť systémový dočasný adresár.',
  'Expected all items passed to "array_mergev()" to be arrays, but argument with key "%s" has type "%s".' => 'Očakávalo sa, že všetky položky odovzdané do „array_mergev()“ budú polia, ale argument s kľúčom „%s“ má typ „%s“.',
  'Confirms writing to to "~/.profile" (or another similar file) to install shell completion.' => 'Potvrdzuje zápis do „~/.profile“ (alebo iného podobného súboru) na inštaláciu dopĺňania v shelli.',
  'Linter \'%s\' configured in \'%s\' does not exist!' => 'Linter \'%s\' nakonfigurovaný v \'%s\' neexistuje!',
  'Unknown output kind "%s".' => 'Neznámy druh výstupu „%s“.',
  'Task "%s"' => 'Úloha „%s“',
  'Avoid the PHP echo short form, `%s`.' => 'Vyhýbajte sa skrátenej forme echo v PHP, `%s`.',
  'UNSHELVE' => 'VRÁTIŤ Z ODLOŽENIA',
  'Build successful!' => 'Zostavenie úspešné!',
  'Revision for commit "%s" is ambiguous. Use "--revision" to force selection of a particular revision.' => 'Revízia pre commit „%s“ je nejednoznačná. Pomocou „--revision“ vynúťte výber konkrétnej revízie.',
  'Provide a discovery map.' => 'Zadajte mapu zisťovania.',
  'Default value for parameters with a class type hint can only be an instantiation of that class or a descendant.' => 'Predvolenou hodnotou parametrov s typovou nápovedou triedy môže byť len inštancia tejto triedy alebo jej potomka.',
  'Set a local config value instead of a user one.' => 'Nastaviť lokálnu konfiguračnú hodnotu namiesto používateľskej.',
  'Continue with this mapping between commits and revisions?' => 'Pokračovať s týmto mapovaním medzi commitmi a revíziami?',
  'it is the first ancestor of the working copy that is not outgoing, and it matched the rule %s in your %s \'base\' configuration.' => 'je to prvý predok pracovnej kópie, ktorý nie je odchádzajúci, a zhodoval sa s pravidlom %s vo vašej konfigurácii \'base\' v %s.',
  'Found more than %s unpublished commits which are ancestors of heads.' => 'Našlo sa viac ako %s nepublikovaných commitov, ktoré sú predkami hláv.',
  'No path provided to %s.' => 'Do %s nebola zadaná žiadna cesta.',
  'Subversion does not support commit ranges.' => 'Subversion nepodporuje rozsahy commitov.',
  'Remote "%s"' => 'Vzdialené úložisko „%s“',
  'Defining closures with arrow functions was not introduced until PHP 7.4, but this codebase targets an earlier version of PHP.' => 'Definovanie uzáverov pomocou šípkových funkcií bolo zavedené až v PHP 7.4, ale táto kódová základňa cieli na skoršiu verziu PHP.',
  'Never apply patches suggested by lint.' => 'Nikdy nepoužívať záplaty navrhnuté lintom.',
  'Current Source' => 'Aktuálny zdroj',
  'There are %s commits reachable from the specified sources (%s). You are landing into the empty state, so all of these commits will land:' => array(
    'Zo zadaných zdrojov (%2$s) je dosiahnuteľný %s commit. Začleňujete do prázdneho stavu, takže sa začlenia všetky tieto commity:',
    'Zo zadaných zdrojov (%2$s) sú dosiahnuteľné %s commity. Začleňujete do prázdneho stavu, takže sa začlenia všetky tieto commity:',
    'Zo zadaných zdrojov (%2$s) je dosiahnuteľných %s commitov. Začleňujete do prázdneho stavu, takže sa začlenia všetky tieto commity:',
  ),
  '`%s` Statement Namespace Prefix' => 'Predpona menného priestoru v príkaze `%s`',
  'Apply changes from a Differential diff. Normally you want to use %s to get the most recent changes, but you can specifically apply an out-of-date diff or a diff which was never attached to a revision by using this flag.' => 'Použiť zmeny z diffu Differential. Zvyčajne chcete použiť %s, aby ste získali najnovšie zmeny, ale pomocou tohto prepínača môžete výslovne použiť zastaraný diff alebo diff, ktorý nikdy nebol pripojený k revízii.',
  'this is a new repository (all changes are outgoing).' => 'toto je nový repozitár (všetky zmeny sú odchádzajúce).',
  'Unable to set stream nonblocking.' => 'Nepodarilo sa nastaviť prúd ako neblokujúci.',
  'This workflow does not have any prompts.' => 'Tento pracovný postup nemá žiadne výzvy.',
  'DONE' => 'HOTOVO',
  'Preparing merge into "%s" from remote "%s", at commit "%s".' => 'Pripravuje sa zlúčenie do „%s“ zo vzdialeného úložiska „%s“ pri commite „%s“.',
  'You\'re covered, your changes didn\'t touch anyone else\'s code.
' => 'Ste v pohode, vaše zmeny sa nedotkli cudzieho kódu.',
  'Edit revisions via the web interface when using SVN.' => 'Pri používaní SVN upravujte revízie cez webové rozhranie.',
  'You can not continue with uncommitted changes. Commit or discard them before proceeding.' => 'S necommitnutými zmenami nemôžete pokračovať. Pred pokračovaním ich commitnite alebo zahoďte.',
  'The server \'%s\' rejected your request:' => 'Server \'%s\' odmietol vašu požiadavku:',
  'The use of variadic arguments is not available before PHP 5.6.' => 'Použitie variadických argumentov nie je dostupné pred PHP 5.6.',
  'Argument method is not a string.' => 'Argument method nie je reťazec.',
  'No paths are lintable.' => 'Žiadne cesty sa nedajú lintovať.',
  'Specify exactly one file to download.' => 'Zadajte presne jeden súbor na stiahnutie.',
  'Bad origin state %s.' => 'Nesprávny počiatočný stav %s.',
  'Extension ("%s") defines invalid configuration with key "%s". Configuration keys: may only contain lowercase letters, numbers, hyphens, underscores, and periods; must start with a letter; and must be at least three characters long.' => 'Rozšírenie („%s“) definuje neplatnú konfiguráciu s kľúčom „%s“. Konfiguračné kľúče: môžu obsahovať iba malé písmená, číslice, spojovníky, podčiarkovníky a bodky; musia začínať písmenom; a musia mať aspoň tri znaky.',
  'Unable to create temporary file in %s.' => 'Nepodarilo sa vytvoriť dočasný súbor v %s.',
  'Expected a string (at index "%s"), found "%s".' => 'Očakával sa reťazec (na indexe „%s“), našlo sa „%s“.',
  'Do not expect "capability" message when connecting. The server must be configured not to send the message. This deviates from the Mercurial protocol, but slightly improves performance.' => 'Pri pripájaní neočakávať správu „capability“. Server musí byť nakonfigurovaný tak, aby túto správu neposielal. Toto sa odchyľuje od protokolu Mercurial, ale mierne zlepšuje výkon.',
  'Install JSHint using `%s`.' => 'Nainštalujte JSHint pomocou `%s`.',
  'SOURCE' => 'ZDROJ',
  'Warning' => 'Upozornenie',
  '%s can not write bytes directly!' => '%s nedokáže zapisovať bajty priamo!',
  'NO PATH TO REMOTE' => 'ŽIADNA CESTA K VZDIALENÉMU ÚLOŽISKU',
  'MULTIPLE REVISIONS IN WORKING COPY' => 'VIACERO REVÍZIÍ V PRACOVNEJ KÓPII',
  'Trailing commas in parameter lists are not available before PHP 8.0.' => 'Čiarky na konci v zoznamoch parametrov nie sú dostupné pred PHP 8.0.',
  'HTTP query parameter value (for key "%s") must be a scalar.' => 'Hodnota parametra dopytu HTTP (pre kľúč „%s“) musí byť skalár.',
  'Test case \'%s\' threw, as expected.' => 'Testovací prípad \'%s\' vyhodil výnimku, ako sa očakávalo.',
  'NEW BRANCH' => 'NOVÁ VETVA',
  'Creating new library in \'%s\'.' => 'Vytvára sa nová knižnica v \'%s\'.',
  'Completed preview of land operation.' => 'Ukážka operácie začlenenia bola dokončená.',
  'Created and checked out bookmark %s.' => 'Záložka %s bola vytvorená a prepnutá.',
  'AWS Request Failed' => 'Požiadavka AWS zlyhala',
  'PREVIEW' => 'UKÁŽKA',
  'Unexpected copy source in %s, \'%s\'.' => 'Neočakávaný zdroj kopírovania v %s, \'%s\'.',
  '`elseif` Usage' => 'Použitie `elseif`',
  'This function can not convert from the unit "%s".' => 'Táto funkcia nedokáže previesť z jednotky „%s“.',
  'This commit includes the directory \'%s\', but it contains a modified path (\'%s\') which is NOT included in the commit. Subversion can not handle this operation and will commit the path anyway. You need to sort out the working copy changes to \'%s\' before you may proceed with the commit.' => 'Tento commit obsahuje adresár \'%s\', ale ten obsahuje upravenú cestu (\'%s\'), ktorá NIE JE zahrnutá v commite. Subversion nedokáže túto operáciu spracovať a cestu commitne aj tak. Skôr než budete môcť pokračovať v commitovaní, musíte vyriešiť zmeny v pracovnej kópii v \'%s\'.',
  'You can not use "--generate" when completing arguments.' => 'Pri dopĺňaní argumentov nemôžete použiť „--generate“.',
  '**alias** __command__ __target__ -- [__arguments__]' => '**alias** __command__ __target__ -- [__arguments__]',
  'Ignoring unrecognized configuration option ("%s") from source: %s.' => 'Ignoruje sa nerozpoznaná konfiguračná možnosť („%s“) zo zdroja: %s.',
  'WORK' => 'PRÁCA',
  '`%s` Function' => 'Funkcia `%s`',
  'Value "%s" is not valid: expected a list, got "%s".' => 'Hodnota „%s“ nie je platná: očakával sa zoznam, získalo sa „%s“.',
  'List should use the array syntax.' => 'Zoznam by mal používať syntax poľa.',
  'Rule \'%s\' in state \'%s\' in %s has unknown option \'%s\'.' => 'Pravidlo \'%s\' v stave \'%s\' v %s má neznámu voľbu \'%s\'.',
  'Argument Alignment' => 'Zarovnanie argumentov',
  'Error in parsing \'%s\' file, in key \'%s\' for linter \'%s\'.' => 'Chyba pri analýze súboru \'%s\', v kľúči \'%s\' pre linter \'%s\'.',
  'You must generate at least 1 byte of entropy.' => 'Musíte vygenerovať aspoň 1 bajt entropie.',
  'You are running one copy of this software (at path "%s") against another copy of this software (at path "%s"). Code in the current working directory will not be loaded or executed.' => 'Spúšťate jednu kópiu tohto softvéru (na ceste „%s“) voči inej kópii tohto softvéru (na ceste „%s“). Kód v aktuálnom pracovnom adresári sa nenačíta ani nevykoná.',
  'Specify the end of the commit range. This disables many features which depend on having access to the working copy.' => 'Zadajte koniec rozsahu commitov. Tým sa zakáže mnoho funkcií, ktoré závisia od prístupu k pracovnej kópii.',
  'PCNTL' => 'PCNTL',
  'Choose a name for the new library.' => 'Zvoľte názov novej knižnice.',
  'To use "--xprofile", you must install XHProf.' => 'Ak chcete použiť „--xprofile“, musíte nainštalovať XHProf.',
  'Do you want to mark these %s file(s) as binary and continue?' => array(
    'Chcete tento súbor označiť ako binárny a pokračovať?',
    'Chcete tieto súbory označiť ako binárne a pokračovať?',
  ),
  'IP address "%s" is not properly formatted: is has too many parts. Expected a maximum of 7 colons, like "%s".' => 'Adresa IP „%s“ nie je správne naformátovaná: má príliš veľa častí. Očakávalo sa maximálne 7 dvojbodiek, ako „%s“.',
  'No lint problems.' => 'Žiadne problémy lintu.',
  'Type of setting \'%s\' must be boolean, like \'true\' or \'false\'.' => 'Typ nastavenia \'%s\' musí byť boolean, napríklad \'true\' alebo \'false\'.',
  'Implicit Method Visibility' => 'Implicitná viditeľnosť metódy',
  'Requested path \'%s\' is not writable.' => 'Do požadovanej cesty \'%s\' sa nedá zapisovať.',
  'English (Raw Strings)' => 'angličtina (surové reťazce)',
  'The short array syntax ("[...]") was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `array(...)` instead.' => 'Skrátená syntax poľa („[...]“) bola zavedená až v PHP 5.4, ale táto kódová základňa cieli na skoršiu verziu PHP. Tento výraz môžete namiesto toho prepísať pomocou `array(...)`.',
  'Suppress warning about uncommitted changes.' => 'Potlačiť upozornenie na necommitnuté zmeny.',
  'CREATE %s BOOKMARK(S)' => array(
    'VYTVORIŤ ZÁLOŽKU',
    'VYTVORIŤ %s ZÁLOŽKY',
    'VYTVORIŤ %s ZÁLOŽIEK',
  ),
  'You must resolve these errors to continue.' => 'Ak chcete pokračovať, musíte tieto chyby vyriešiť.',
  'Default value for parameters with a class type hint can only be `%s`.' => 'Predvolenou hodnotou parametrov s typovou nápovedou triedy môže byť len `%s`.',
  'Unknown column alignment "%s".' => 'Neznáme zarovnanie stĺpca „%s“.',
  'Push Repository: %s' => 'Odoslať do repozitára: %s',
  'Test engine \'%s\' specifies invalid type \'%s\'. Available test engines are: %s.' => 'Testovací nástroj \'%s\' určuje neplatný typ \'%s\'. Dostupné testovacie nástroje sú: %s.',
  'Other users to CC on the new task.' => 'Ďalší používatelia, ktorým sa má poslať kópia novej úlohy.',
  'XHPAST Lint' => 'Lint XHPAST',
  'Specify one or more paths to files you want to upload.' => 'Zadajte jednu alebo viac ciest k súborom, ktoré chcete nahrať.',
  'To push changes manually, run this command:' => 'Ak chcete zmeny odoslať ručne, spustite tento príkaz:',
  'Reading diff from stdin...' => 'Číta sa diff zo stdin...',
  'HTTPS Trusted Domains' => 'Dôveryhodné domény HTTPS',
  'Multi-line parameter declarations should be followed by a blank line.' => 'Za viacriadkovými deklaráciami parametrov by mal nasledovať prázdny riadok.',
  'Working Copy' => 'Pracovná kópia',
  'Provide only one path to "arc liberate". The path should identify a directory where you want to create or update a library.' => 'Príkazu „arc liberate“ zadajte iba jednu cestu. Cesta by mala určovať adresár, v ktorom chcete vytvoriť alebo aktualizovať knižnicu.',
  'Signal router has not been initialized!' => 'Smerovač signálov nebol inicializovaný!',
  'Non-conventional modifier ordering.' => 'Neštandardné poradie modifikátorov.',
  'The program is attempting to read user input, but stdin is being piped from some other source (not a TTY).' => 'Program sa pokúša čítať vstup od používateľa, ale stdin je presmerovaný z iného zdroja (nie z TTY).',
  '    **rebuild-map.php** [__options__] __root__
        Rebuild the library map file for a libphutil library.
' => '    **rebuild-map.php** [__options__] __root__
        Znovu zostaví súbor mapy knižnice pre knižnicu libphutil.',
  'Specify an explicit URI or run this command from within a project which is configured with a %s.' => 'Zadajte výslovné URI alebo spustite tento príkaz vnútri projektu, ktorý má nakonfigurované %s.',
  'Unterminated string in argument list!' => 'Neukončený reťazec v zozname argumentov!',
  'Override the configured locale and use this locale code instead.' => 'Prepísať nakonfigurovanú lokalizáciu a použiť namiesto nej tento kód lokalizácie.',
  'Git ref selector "%s" is not a valid selector and can not be passed to the Git CLI safely in the general case.' => 'Selektor refov Git „%s“ nie je platný selektor a vo všeobecnom prípade sa nedá bezpečne odovzdať do Git CLI.',
  'Unit test engine (of class "%s") returned invalid results when run (with method "%s"). Expected a list of "%s" objects as results.' => 'Nástroj na jednotkové testy (triedy „%s“) vrátil pri spustení (metódou „%s“) neplatné výsledky. Ako výsledky sa očakával zoznam objektov „%s“.',
  'Jan' => 'jan',
  'It is midday. The sun is high overhead and the air is still. It is very warm. You hear the cry of a hawk high overhead and far in the distance.' => 'Je poludnie. Slnko je vysoko nad hlavou a vzduch je nehybný. Je veľmi teplo. Vysoko nad hlavou a ďaleko v diaľke počuť krik jastraba.',
  'MERGE CONFLICT' => 'KONFLIKT ZLÚČENIA',
  'The spaceship operator is not available before PHP 7.0.' => 'Operátor spaceship nie je dostupný pred PHP 7.0.',
  '`%s` class `%s` must define an ID constant.' => '`%s` trieda `%s` musí definovať konštantu ID.',
  'Message type \'%s\' is already enabled!' => 'Typ správy \'%s\' je už povolený!',
  'Confirms that revisions that are not accepted should land.' => 'Potvrdzuje, že sa majú začleniť aj revízie, ktoré nie sú schválené.',
  'Lock \'%s\' is not locked by this process!' => 'Zámok \'%s\' nie je uzamknutý týmto procesom!',
  'The `%s` type hint is not available before PHP 7.2.' => 'Typová nápoveda `%s` nie je dostupná pred PHP 7.2.',
  'Build %d' => 'Zostavenie %d',
  'Unable to upload file: failed to open path "%s" for reading.' => 'Nepodarilo sa nahrať súbor: nepodarilo sa otvoriť cestu „%s“ na čítanie.',
  'Expected an object, string, or list of objects for "object" context. Got a list ("%s"), but the list item at index "%s" (with type "%s") is not an object.' => 'Pre kontext „object“ sa očakával objekt, reťazec alebo zoznam objektov. Získal sa zoznam („%s“), ale položka zoznamu na indexe „%s“ (typu „%s“) nie je objekt.',
  'A custom configuration file.' => 'Vlastný konfiguračný súbor.',
  'Are you sure you want to mutate history?' => 'Naozaj chcete zmeniť históriu?',
  'Reuse of Iterator Variable' => 'Opätovné použitie premennej iterátora',
  'Use the `%s` mode provided by `%s` to detect errors in Less source files.' => 'Na zisťovanie chýb v zdrojových súboroch Less použite režim `%s`, ktorý poskytuje `%s`.',
  'HTTP query parameter key must be a scalar.' => 'Kľúč parametra dopytu HTTP musí byť skalár.',
  'English (US)' => 'angličtina (USA)',
  'Locale "%s" is part of a cycle of locales which fall back on one another in a loop (%s). Locales which fall back on other locales must not loop.' => 'Lokalizácia „%s“ je súčasťou cyklu lokalizácií, ktoré sa navzájom v slučke používajú ako záložné (%s). Lokalizácie, ktoré sa vracajú k iným lokalizáciám, nesmú tvoriť slučku.',
  'Reason' => 'Dôvod',
  'Use a specific authentication token.' => 'Použiť konkrétny overovací token.',
  'Associate the working copy with a specific repository. Normally, this association can be determined automatically, but if your setup is unusual you can use this option to tell it what the desired value is.' => 'Priradiť pracovnú kópiu ku konkrétnemu repozitáru. Za normálnych okolností sa toto priradenie dá určiť automaticky, ale ak je vaše nastavenie nezvyčajné, môžete pomocou tejto voľby povedať, aká je požadovaná hodnota.',
  'Whether %s should permit the automatic stashing of changes in the working directory when requiring a clean working copy. This option should only be used when users understand how to restore their working directory from the local stash if an operation causes an unrecoverable error.' => 'Či má %s povoliť automatické odkladanie zmien v pracovnom adresári do skrýše, keď sa vyžaduje čistá pracovná kópia. Táto voľba by sa mala používať iba vtedy, keď používatelia vedia, ako obnoviť svoj pracovný adresár z lokálnej skrýše, ak operácia spôsobí neopraviteľnú chybu.',
  'Test case \'%s\' did not throw, as expected.' => 'Testovací prípad \'%s\' nevyhodil výnimku, ako sa očakávalo.',
  'Failed to set streams nonblocking.' => 'Nepodarilo sa nastaviť prúdy ako neblokujúce.',
  'Use of unknown class symbol "%s".' => 'Použitie neznámeho symbolu triedy „%s“.',
  'Signal handlers raised exceptions while handling "%s".' => 'Obsluhy signálov vyvolali výnimky pri spracúvaní „%s“.',
  'Emit builtin symbols.' => 'Vypísať vstavané symboly.',
  'Imbalanced calls to shared futures: each call to %s for a path must be paired with a call to %s.' => 'Nevyvážené volania zdieľaných future: každé volanie %s pre cestu musí byť spárované s volaním %s.',
  'This very old library is no longer supported.' => 'Táto veľmi stará knižnica už nie je podporovaná.',
  'The `%s` and `%s` statements no longer accept variable arguments in PHP 5.4.' => 'Príkazy `%s` a `%s` už v PHP 5.4 neprijímajú premenlivé argumenty.',
  'Abandoned' => 'Opustené',
  'Argument short aliases may only be in a-z, A-Z and 0-9. \'%s\' is invalid.' => 'Krátke aliasy argumentov môžu obsahovať iba a-z, A-Z a 0-9. \'%s\' je neplatný.',
  'Expected \'%s\' file to be a valid JSON file, but failed to decode \'%s\'.' => 'Očakávalo sa, že súbor \'%s\' bude platný súbor JSON, ale nepodarilo sa dekódovať \'%s\'.',
  'Invalid %s root directory specified (\'%s\'). Root directory must be a directory, be readable, and be specified with an absolute path.' => 'Zadaný neplatný koreňový adresár %s (\'%s\'). Koreňový adresár musí byť adresár, musí byť čitateľný a musí byť zadaný absolútnou cestou.',
  'Call to "hg arc-ls-markers" failed with error "%s".' => 'Volanie „hg arc-ls-markers“ zlyhalo s chybou „%s“.',
  'Default value for parameters with a string type hint can only be a string.' => 'Predvolenou hodnotou parametrov s typovou nápovedou string môže byť len reťazec.',
  'Uses Google\'s Closure Linter to check JavaScript code.' => 'Používa Google Closure Linter na kontrolu kódu JavaScript.',
  'Partition query requires heads.' => 'Dopyt na partície vyžaduje hlavy.',
  'Local branches have not been changed, and are still in the same state as before.' => 'Lokálne vetvy sa nezmenili a sú stále v rovnakom stave ako predtým.',
  'Failed to parse \'%s\' output: %s' => 'Nepodarilo sa analyzovať výstup \'%s\': %s',
  'Portuguese (Brazil)' => 'portugalčina (Brazília)',
  'Install PyLint using `%s`.' => 'Nainštalujte PyLint pomocou `%s`.',
  'Wrote C++ definition.' => 'Definícia C++ bola zapísaná.',
  'Working Copy: Reading %s from "%s".' => 'Pracovná kópia: Číta sa %s z „%s“.',
  'Channel closed unexpectedly!' => 'Kanál sa neočakávane zavrel!',
  'English (US, ALL CAPS)' => 'angličtina (USA, VEĽKÉ PÍSMENÁ)',
  'Command ("%s") exited nonzero ("%s")!' => 'Príkaz („%s“) skončil s nenulovým kódom („%s“)!',
  'Unexpected output from "git log ...": %s' => 'Neočakávaný výstup z „git log ...“: %s',
  'Methods should be followed by one blank line.' => 'Za metódami by mal nasledovať jeden prázdny riadok.',
  'Will merge into local state, selected with the "--into-local" flag.' => 'Zlúči sa do lokálneho stavu zvoleného prepínačom „--into-local“.',
  'Declare variables prior to use (even if you are passing them as reference parameters). You may have misspelled this variable name.' => 'Premenné deklarujte pred použitím (aj keď ich odovzdávate ako referenčné parametre). Možno ste v názve tejto premennej urobili preklep.',
  'Uses SimpleXML to detect formatting errors in XML files.' => 'Používa SimpleXML na zisťovanie chýb formátovania v súboroch XML.',
  'COVERAGE REPORT' => 'REPORT POKRYTIA',
  'Disabled' => 'Zakázané',
  'File permissions on your %s are too open. Fix them by chmod\'ing to 600?' => 'Oprávnenia súboru vášho %s sú príliš otvorené. Opraviť ich zmenou na 600 pomocou chmod?',
  'Holding changes locally, they have not been pushed.' => 'Zmeny sa držia lokálne, neboli odoslané.',
  'Specify file by ID, e.g. %s.' => 'Zadajte súbor podľa ID, napr. %s.',
  'Function symbol "%s" should be written as "%s".' => 'Symbol funkcie „%s“ by sa mal písať ako „%s“.',
  '"arc work" must be run in a Git or Mercurial working copy.' => '„arc work“ sa musí spúšťať v pracovnej kópii Git alebo Mercurial.',
  '%s suppresses lint.' => '%s potláča lint.',
  'Committing \'%s: %s\'...
' => 'Commituje sa \'%s: %s\'...',
  'Unable to apply patch!' => 'Nepodarilo sa použiť záplatu!',
  'Bad Filename' => 'Nesprávny názov súboru',
  'Specify a file to download, like "F123".' => 'Zadajte súbor na stiahnutie, napríklad „F123“.',
  'Use "--incremental" to merge and push changes one by one.' => 'Pomocou „--incremental“ zlučujte a odosielajte zmeny po jednej.',
  'This future graph already has a future with key "%s". Each future must have a unique key.' => 'Tento graf future už má future s kľúčom „%s“. Každé future musí mať jedinečný kľúč.',
  'Two argument specifications are marked as wildcard arguments. You can have a maximum of one wildcard argument.' => 'Dve špecifikácie argumentov sú označené ako zástupné argumenty. Môžete mať maximálne jeden zástupný argument.',
  '**branches**' => '**branches**',
  'Variable Reference Spacing' => 'Rozostupy odkazov na premenné',
  'Message should be %s.' => 'Správa by mala byť %s.',
  'File Does Not End in Newline' => 'Súbor nekončí znakom nového riadka',
  'Invalid command "%s". Valid commands are: %s.' => 'Neplatný príkaz „%s“. Platné príkazy sú: %s.',
  'Unable to push lfs changes to the staging area.' => 'Nepodarilo sa odoslať zmeny lfs do prípravnej oblasti.',
  'Composer Dependency Manager' => 'Správca závislostí Composer',
  'You must specify changes to apply to the working copy with "D12345", "--revision", "--diff", "--arcbundle", or "--patch".' => 'Zmeny, ktoré sa majú použiť na pracovnú kópiu, musíte zadať pomocou „D12345“, „--revision“, „--diff“, „--arcbundle“ alebo „--patch“.',
  'Use formatting even in environments which probably don\'t support it.' => 'Používať formátovanie aj v prostrediach, ktoré ho pravdepodobne nepodporujú.',
  'PHP files should start with `%s`, which may be preceded by a `%s` line for scripts.' => 'Súbory PHP by mali začínať `%s`, pred čím môže byť pri skriptoch riadok `%s`.',
  'Call to "hg arc-ls-markers" returned marker of unknown type "%s".' => 'Volanie „hg arc-ls-markers“ vrátilo značku neznámeho typu „%s“.',
  'Trace command execution and show service calls.' => 'Trasovať vykonávanie príkazov a zobrazovať volania služieb.',
  'Downloaded file size (%s bytes) does not match expected file size (%s bytes). This download may be incomplete or corrupt.' => array(
    
    array(
      'Veľkosť stiahnutého súboru (%s bajt) nezodpovedá očakávanej veľkosti súboru (%s bajt). Toto stiahnutie môže byť neúplné alebo poškodené.',
      'Veľkosť stiahnutého súboru (%s bajt) nezodpovedá očakávanej veľkosti súboru (%s bajty). Toto stiahnutie môže byť neúplné alebo poškodené.',
      'Veľkosť stiahnutého súboru (%s bajt) nezodpovedá očakávanej veľkosti súboru (%s bajtov). Toto stiahnutie môže byť neúplné alebo poškodené.',
    ),
    
    array(
      'Veľkosť stiahnutého súboru (%s bajty) nezodpovedá očakávanej veľkosti súboru (%s bajt). Toto stiahnutie môže byť neúplné alebo poškodené.',
      'Veľkosť stiahnutého súboru (%s bajty) nezodpovedá očakávanej veľkosti súboru (%s bajty). Toto stiahnutie môže byť neúplné alebo poškodené.',
      'Veľkosť stiahnutého súboru (%s bajty) nezodpovedá očakávanej veľkosti súboru (%s bajtov). Toto stiahnutie môže byť neúplné alebo poškodené.',
    ),
    
    array(
      'Veľkosť stiahnutého súboru (%s bajtov) nezodpovedá očakávanej veľkosti súboru (%s bajt). Toto stiahnutie môže byť neúplné alebo poškodené.',
      'Veľkosť stiahnutého súboru (%s bajtov) nezodpovedá očakávanej veľkosti súboru (%s bajty). Toto stiahnutie môže byť neúplné alebo poškodené.',
      'Veľkosť stiahnutého súboru (%s bajtov) nezodpovedá očakávanej veľkosti súboru (%s bajtov). Toto stiahnutie môže byť neúplné alebo poškodené.',
    ),
  ),
  'TARGET' => 'CIEĽ',
  'The "SHELL" environment variable is not defined, so it can not be used to detect the shell to install rules for.' => 'Premenná prostredia „SHELL“ nie je definovaná, takže sa nedá použiť na zistenie shellu, pre ktorý sa majú pravidlá nainštalovať.',
  'Unable to determine which revision is associated with commit "%s". Use "arc diff" to create or update a revision with this commit, or "--revision" to force selection of a particular revision.' => 'Nepodarilo sa určiť, ktorá revízia je priradená ku commitu „%s“. Pomocou „arc diff“ vytvorte alebo aktualizujte revíziu s týmto commitom, alebo pomocou „--revision“ vynúťte výber konkrétnej revízie.',
  'Run in a working copy with "phabricator.uri" set in ".arcconfig".' => 'Spustite v pracovnej kópii s nastaveným „phabricator.uri“ v „.arcconfig“.',
  'Rule \'%s\' in state \'%s\' in %s transitions to state \'%s\', but there are no rules for that state.' => 'Pravidlo \'%s\' v stave \'%s\' v %s prechádza do stavu \'%s\', ale pre tento stav neexistujú žiadne pravidlá.',
  'Got unexpected parameters: %s' => 'Získali sa neočakávané parametre: %s',
  'Rejecting ambiguous URI "%s". This URI is not formatted or encoded properly.' => 'Odmieta sa nejednoznačné URI „%s“. Toto URI nie je správne naformátované alebo zakódované.',
  'Attempting to iterate an object (of class %s) which is not iterable.' => 'Pokus o iteráciu nad objektom (triedy %s), ktorý nie je iterovateľný.',
  'Show toolset version information.' => 'Zobraziť informácie o verzii sady nástrojov.',
  'PHP version to target.' => 'Verzia PHP, na ktorú sa má cieliť.',
  'Floating on the water, you see published commits:' => 'Na vode plávajú publikované commity:',
  'Bad blame? `%s\'' => 'Nesprávny blame? `%s\'',
  'Needs Review' => 'Potrebuje posúdenie',
  'Supply commit message for uncommitted changes, then save and exit.' => 'Zadajte správu commitu pre necommitnuté zmeny, potom uložte a ukončite.',
  'Attempting to run unit tests on a library which has not been loaded, at:

    %s

Make sure this library is configured to load.

(In rare cases, this may be because you are attempting to run one copy of this software against a different copy of this software. This operation is not supported.)' => 'Pokus o spustenie jednotkových testov na knižnici, ktorá nebola načítaná, na:

    %s

Uistite sa, že je táto knižnica nakonfigurovaná na načítanie.

(V zriedkavých prípadoch to môže byť preto, že sa pokúšate spustiť jednu kópiu tohto softvéru voči inej kópii tohto softvéru. Táto operácia nie je podporovaná.)',
  'Methods may not be both "private" and "final".' => 'Metódy nemôžu byť súčasne „private“ aj „final“.',
  'Restoring uncommitted changes to working copy.' => 'Necommitnuté zmeny sa obnovujú do pracovnej kópie.',
  'Default value for parameters with a callable type hint can only be a string, an array or an instantiation of a type declaring an `%s` method.' => 'Predvolenou hodnotou parametrov s typovou nápovedou callable môže byť len reťazec, pole alebo inštancia typu, ktorý deklaruje metódu `%s`.',
  'The `%s` type hint is not available before PHP 8.0.' => 'Typová nápoveda `%s` nie je dostupná pred PHP 8.0.',
  'This diff includes %s file(s) which are not valid UTF-8 (they contain invalid byte sequences). You can either stop this workflow and fix these files, or continue. If you continue, these files will be marked as binary.' => array(
    'Tento diff obsahuje súbor, ktorý nie je platné UTF-8 (obsahuje neplatné bajtové sekvencie). Môžete buď tento pracovný postup zastaviť a súbor opraviť, alebo pokračovať. Ak budete pokračovať, tento súbor sa označí ako binárny.',
    'Tento diff obsahuje súbory, ktoré nie sú platné UTF-8 (obsahujú neplatné bajtové sekvencie). Môžete buď tento pracovný postup zastaviť a tieto súbory opraviť, alebo pokračovať. Ak budete pokračovať, tieto súbory sa označia ako binárne.',
  ),
  'Failed to rename \'%s\' to \'%s\'!' => 'Nepodarilo sa premenovať \'%s\' na \'%s\'!',
  'Slow Construct' => 'Pomalá konštrukcia',
  'Saving local state (at "%s" on branch "%s", bookmarked as "%s").' => 'Ukladá sa lokálny stav (na „%s“ vo vetve „%s“, so záložkou „%s“).',
  'Failed to open stdin for reading.' => 'Nepodarilo sa otvoriť stdin na čítanie.',
  'Curly Brace Array Index' => 'Index poľa v zložených zátvorkách',
  'Landing onto multiple branches at once is not supported in Mercurial.' => 'Začleňovanie do viacerých vetiev naraz nie je v Mercuriale podporované.',
  'Use `%s` to check for syntax errors in Ruby source files.' => 'Na kontrolu syntaktických chýb v zdrojových súboroch Ruby použite `%s`.',
  'Invalid Conduit API credentials.' => 'Neplatné poverenia API Conduit.',
  'Show all lint warnings, not just those on changed lines. When paths are specified, this is the default behavior.' => 'Zobraziť všetky upozornenia lintu, nielen tie na zmenených riadkoch. Keď sú zadané cesty, toto je predvolené správanie.',
  'Unable to open lock \'%s\' for writing!' => 'Nepodarilo sa otvoriť zámok \'%s\' na zápis!',
  'Class-Filename Mismatch' => 'Nesúlad názvu triedy a súboru',
  '%s and %s both need stdin. Use %s.' => '%s aj %s potrebujú stdin. Použite %s.',
  'You are landing revisions which you ("%s") are not the author of:' => 'Začleňujete revízie, ktorých nie ste autorom („%s“):',
  'This comment has a TODO.' => 'Tento komentár obsahuje TODO.',
  'Provide a list of additional flags to pass to the linter on the command line.' => 'Zadajte zoznam ďalších prepínačov, ktoré sa majú odovzdať linteru na príkazovom riadku.',
  'Deleting bookmark "%s".' => 'Odstraňuje sa záložka „%s“.',
  'Signature method \'%s\' requires %s!' => 'Metóda podpisu \'%s\' vyžaduje %s!',
  'Unable to open stderr temporary file ("%s") for writing.' => 'Nepodarilo sa otvoriť dočasný súbor stderr („%s“) na zápis.',
  'A script which contains a `%s` statement expects the very first statement to be a `%s` statement. Otherwise, a PHP fatal error will occur. %s' => 'Skript, ktorý obsahuje príkaz `%s`, očakáva, že úplne prvým príkazom bude príkaz `%s`. Inak nastane fatálna chyba PHP. %s',
  'PyFlakes is a simple program which checks Python source files for errors.' => 'PyFlakes je jednoduchý program, ktorý kontroluje chyby v zdrojových súboroch Pythonu.',
  'Output the linter results to a file. Defaults to stdout.' => 'Vypísať výsledky lintera do súboru. Predvolene na stdout.',
  'Attempting to convert a string encoding, but no source encoding was provided. Explicitly provide the source encoding.' => 'Pokus o prevod kódovania reťazca, ale nebolo zadané žiadne zdrojové kódovanie. Zadajte zdrojové kódovanie výslovne.',
  'Automatically add all unstaged and uncommitted files to the commit.' => 'Automaticky pridať do commitu všetky nepripravené a necommitnuté súbory.',
  'Remote "%s" has multiple branch heads named "%s". Close all but one, or pull the head you want and use "--into-local --into <hash>" to specify an explicit merge target.' => 'Vzdialené úložisko „%s“ má viacero hláv vetiev s názvom „%s“. Zavrite všetky okrem jednej alebo stiahnite hlavu, ktorú chcete, a pomocou „--into-local --into <hash>“ zadajte výslovný cieľ zlúčenia.',
  'Path \'%s\' already exists!' => 'Cesta \'%s\' už existuje!',
  'Specified download path "%s" already exists, refusing to overwrite.' => 'Zadaná cesta na stiahnutie „%s“ už existuje, prepísanie sa odmieta.',
  'Expected method "%s->%s()" to return a string or integer for use as a unique key, got "%s" from object at index "%s".' => 'Očakávalo sa, že metóda „%s->%s()“ vráti reťazec alebo celé číslo na použitie ako jedinečný kľúč, získalo sa „%s“ z objektu na indexe „%s“.',
  'Parameter Alignment' => 'Zarovnanie parametrov',
  'it is the merge-base of the explicitly specified base commit \'%s\' and the explicitly specified head commit \'%s\'.' => 'je to merge-base výslovne zadaného základného commitu \'%s\' a výslovne zadaného hlavného commitu \'%s\'.',
  'Expected base85 line length character (a-zA-Z).' => 'Očakával sa znak dĺžky riadka base85 (a-zA-Z).',
  'Unexpected node during static evaluation, of type: %s' => 'Neočakávaný uzol počas statického vyhodnocovania, typu: %s',
  'Load all object hardpoints.' => 'Načítať všetky hardpointy objektu.',
  'No local copy of ref "%s" in remote "%s" exists, attempting fetch...' => 'Neexistuje žiadna lokálna kópia refu „%s“ vo vzdialenom úložisku „%s“, pokúša sa o načítanie...',
  '%s %s -> $ %s' => '%s %s -> $ %s',
  'No data provided for path "%s".' => 'Pre cestu „%s“ neboli zadané žiadne údaje.',
  'This software version on the server you are connecting to is out of date and does not have support for identifying repositories by callsign or URI. Update the server software to enable these features.' => 'Verzia softvéru na serveri, ku ktorému sa pripájate, je zastaraná a nemá podporu identifikácie repozitárov podľa volacieho znaku alebo URI. Aktualizujte softvér na serveri, aby ste tieto funkcie povolili.',
  'The changes you are landing depend on %s open parent revision(s). Usually, you should land parent revisions before landing the changes which depend on them. These parent revisions are open:' => array(
    'Zmeny, ktoré začleňujete, závisia od otvorenej nadradenej revízie. Zvyčajne by ste mali nadradené revízie začleniť skôr, než začleníte zmeny, ktoré od nich závisia. Táto nadradená revízia je otvorené:',
    'Zmeny, ktoré začleňujete, závisia od %s otvorených nadradených revízií. Zvyčajne by ste mali nadradené revízie začleniť skôr, než začleníte zmeny, ktoré od nich závisia. Tieto nadradené revízie sú otvorené:',
  ),
  'Convention: no spaces before opening parentheses.' => 'Konvencia: žiadne medzery pred otváracími zátvorkami.',
  'The current working directory is not part of a working copy for a supported version control system (Git, Subversion or Mercurial).' => 'Aktuálny pracovný adresár nie je súčasťou pracovnej kópie žiadneho podporovaného systému správy verzií (Git, Subversion alebo Mercurial).',
  'Use the "prompts" workflow to review prompt responses.' => 'Na prezretie odpovedí na výzvy použite pracovný postup „prompts“.',
  'WARNING' => 'UPOZORNENIE',
  'LINT NOTICE' => 'OZNÁMENIE LINTU',
  'msort() was passed a method ("%s") which returns "PhutilSortVector" objects. Use "msortv()", not "msort()", to sort a list which produces vectors.' => 'Do msort() bola odovzdaná metóda („%s“), ktorá vracia objekty „PhutilSortVector“. Na zoradenie zoznamu, ktorý produkuje vektory, použite „msortv()“, nie „msort()“.',
  'FAIL' => 'ZLYHALO',
  'Hardpoint ("%s") is not registered on this object (of type "%s"). Hardpoints are: %s.' => 'Hardpoint („%s“) nie je na tomto objekte (typu „%s“) zaregistrovaný. Hardpointy sú: %s.',
  'Sep' => 'sep',
  'Failed to create a temporary directory in \'%s\'.' => 'Nepodarilo sa vytvoriť dočasný adresár v \'%s\'.',
  'Call %s before calling %s!' => 'Pred volaním %2$s zavolajte %s!',
  'Unknown Mercurial status \'%s\'.' => 'Neznámy stav Mercurialu \'%s\'.',
  'Expected \'Name\', \'Added\', \'Deleted\', or \'Modified\'.' => 'Očakávalo sa \'Name\', \'Added\', \'Deleted\' alebo \'Modified\'.',
  'Script to execute.' => 'Skript, ktorý sa má vykonať.',
  '`%s` should be separated from code by an empty line.' => '`%s` by malo byť od kódu oddelené prázdnym riadkom.',
  'AVAILABLE' => 'DOSTUPNÉ',
  '`%s` declarations cannot be nested. This construct will cause a PHP fatal error.' => 'Deklarácie `%s` sa nedajú vnárať. Táto konštrukcia spôsobí fatálnu chybu PHP.',
  'To configure Mercurial to ignore certain files in the working copy, add them to ".hgignore".' => 'Ak chcete nakonfigurovať Mercurial tak, aby ignoroval určité súbory v pracovnej kópii, pridajte ich do „.hgignore“.',
  'commit message' => 'správa commitu',
  'Using `%s` as a type hint is not allowed before PHP 8.2.' => 'Použitie `%s` ako typovej nápovedy nie je povolené pred PHP 8.2.',
  'Running unit tests...' => 'Spúšťajú sa jednotkové testy...',
  'Unable to locate binary "%s" to run linter %s. You may need to install the binary, or adjust your linter configuration.' => 'Nepodarilo sa nájsť binárny súbor „%s“ na spustenie lintera %s. Možno budete musieť binárny súbor nainštalovať alebo upraviť konfiguráciu lintera.',
  'This iterator variable is a previously declared local variable. To avoid overwriting locals, do not reuse them as iterator variables.' => 'Táto premenná iterátora je predtým deklarovaná lokálna premenná. Aby ste neprepisovali lokálne premenné, nepoužívajte ich znova ako premenné iterátora.',
  'CIDR block "%s" is not formatted correctly. The IP block mask ("%s") must mask between 0 and %s bits, inclusive.' => array(
    
    array(
      
      array(
        'Blok CIDR „%s“ nie je správne naformátovaný. Maska bloku IP („%s“) musí maskovať 0 až %s bit vrátane.',
        'Blok CIDR „%s“ nie je správne naformátovaný. Maska bloku IP („%s“) musí maskovať 0 až %s bity vrátane.',
        'Blok CIDR „%s“ nie je správne naformátovaný. Maska bloku IP („%s“) musí maskovať 0 až %s bitov vrátane.',
      ),
    ),
  ),
  'Fatal Error' => 'Fatálna chyba',
  'No remote "%s" exists in this repository.' => 'V tomto repozitári neexistuje žiadne vzdialené úložisko „%s“.',
  'String does not parse into exactly one statement!' => 'Reťazec sa neanalyzuje presne na jeden príkaz!',
  'YOU NEED TO __INSTALL A CERTIFICATE__ TO LOG IN' => 'NA PRIHLÁSENIE MUSÍTE __NAINŠTALOVAŤ CERTIFIKÁT__',
);
  }

}
