<?php

final class PhabricatorConfigSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'When a user takes an action which generates an email notification (like
commenting on a Differential revision), the "From" address can either be set
to the user\'s email address (like "alincoln@example.com") or the
"metamta.default-address" address.

The user experience is generally better if the user\'s real address is used as
the "From" header value, since the messages are easier to organize when they
appear in mail clients, but this will only work if the server is authorized to
send email on behalf of the "From" domain. Practically, this means:

  - If you are doing an install for Example Corp and all the users will have
    corporate @corp.example.com addresses and any hosts this software is running
    on are authorized to send email from corp.example.com, you can enable this
    to make the user experience a little better.
  - If you are doing an install for an open source project and your users will
    be registering via third-party services and/or using personal email
    addresses, you probably should not enable this or all of your outgoing
    email might vanish into SFP blackholes.
  - If your install is anything else, you\'re safer leaving this off, at least
    initially, since the risk in turning it on is that your outgoing mail will
    never arrive.' => 'Keď používateľ vykoná akciu, ktorá vygeneruje e-mailové upozornenie (napríklad
komentár k revízii v Differentiale), hlavička „From“ môže byť nastavená buď na
e-mailovú adresu používateľa (napríklad „alincoln@example.com“), alebo na adresu
„metamta.default-address“.

Používateľský zážitok je vo všeobecnosti lepší, ak sa ako hodnota hlavičky „From“
použije skutočná adresa používateľa, pretože správy sa dajú v poštových klientoch
ľahšie organizovať, no funguje to len vtedy, ak má server oprávnenie odosielať
e-maily v mene domény z hlavičky „From“. Prakticky to znamená:

  - Ak robíte inštaláciu pre firmu Example Corp a všetci používatelia budú mať
    firemné adresy @corp.example.com a všetci hostitelia, na ktorých tento softvér
    beží, majú oprávnenie odosielať e-maily z corp.example.com, môžete to zapnúť
    a používateľský zážitok bude o niečo lepší.
  - Ak robíte inštaláciu pre open source projekt a vaši používatelia sa budú
    registrovať cez služby tretích strán alebo budú používať osobné e-mailové
    adresy, pravdepodobne by ste to zapínať nemali, inak môže všetka vaša
    odchádzajúca pošta zmiznúť v SFP čiernych dierach.
  - Ak je vaša inštalácia čokoľvek iné, bezpečnejšie je nechať to vypnuté, aspoň
    spočiatku, keďže riziko pri zapnutí je, že vaša odchádzajúca pošta nikdy
    nedorazí.',
  'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.

This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.

This set is also used to enforce valid redirect URIs. This service will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.

Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some features which rely on links or redirects may not work.' => 'Keď používatelia píšu komentáre obsahujúce URI, automaticky sa premenia na klikateľné odkazy, ak sa protokol URI nachádza v tejto množine.

Táto množina povolených protokolov je primárne určená na to, aby predchádzala bezpečnostným problémom s „javascript:“ a inými potenciálne nebezpečnými obsluhami URI.

Táto množina sa používa aj na vynútenie platných URI presmerovania. Táto služba odmietne vydať presmerovanie HTTP „Location“ na URI s protokolom, ktorý sa v tejto množine nenachádza.

Zvyčajne by v tejto množine mali byť prítomné „http“ a „https“. Ak jeden alebo oba protokoly odstránite, niektoré funkcie, ktoré sa spoliehajú na odkazy alebo presmerovania, nemusia fungovať.',
  'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.

You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.

For more information on locked and hidden configuration, including details about this setup issue, see %s.

This database value is currently respected, but a future version of the software will stop respecting database values for locked configuration options.' => 'Konfiguračná hodnota „%s“ je uzamknutá (takže sa nedá upraviť z webového rozhrania), ale má hodnotu v databáze. Zvyčajne to znamená, že predtým uzamknutá nebola, nastavili ste ju cez webové rozhranie a neskôr sa uzamkla.

Túto konfiguračnú hodnotu by ste mali skopírovať do lokálneho konfiguračného zdroja (zvyčajne pomocou %s) a potom ju odstrániť z databázy príkazom uvedeným nižšie.

Ďalšie informácie o uzamknutej a skrytej konfigurácii vrátane podrobností o tomto probléme s nastavením nájdete v %s.

Táto databázová hodnota sa momentálne rešpektuje, ale budúca verzia softvéru prestane rešpektovať databázové hodnoty pre uzamknuté konfiguračné možnosti.',
  'Review and modify configuration settings.' => 'Prezrite si a upravte konfiguračné nastavenia.',
  'Improve security by configuring an alternate file domain.' => 'Zlepšite bezpečnosť nastavením alternatívnej domény pre súbory.',
  'Client Server' => 'Klientský server',
  'Or:' => 'Alebo:',
  'Listeners receive callbacks when interesting things occur.' => 'Poslucháči dostávajú spätné volania, keď nastanú zaujímavé udalosti.',
  'Update configuration in the database instead of in local configuration.' => 'Aktualizovať konfiguráciu v databáze namiesto v lokálnej konfigurácii.',
  'Column/Key' => 'Stĺpec/Kľúč',
  'Customize the logo and wordmark text in the header.' => 'Prispôsobte logo a text slovnej značky v hlavičke.',
  'Configuring File Storage' => 'Nastavenie úložiska súborov',
  '%s / %s' => '%s / %s',
  'Address ranges of cluster hosts.' => 'Rozsahy adries hostiteľov klastra.',
  'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to this software, or that you are making a raw request without a "Host" header using a tool or library.

If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.

It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.

Requests must include a valid "Host" header.' => 'Táto požiadavka neobsahovala hlavičku „Host“. Môže to znamenať, že váš webový server (napríklad nginx alebo apache) je nesprávne nastavený a hlavička „Host“ sa k tomuto softvéru nedostane, alebo že vytvárate surovú požiadavku bez hlavičky „Host“ pomocou nejakého nástroja či knižnice.

Ak používate webový prehliadač, skontrolujte konfiguráciu webového servera. Ak používate nástroj alebo knižnicu, skontrolujte, ako sa požiadavka vytvára.

Je tiež možné (ale veľmi nepravdepodobné), že hlavičku odstraňuje nejaké iné sieťové zariadenie (napríklad vyrovnávač záťaže).

Požiadavky musia obsahovať platnú hlavičku „Host“.',
  'Memory Usage' => 'Využitie pamäte',
  'The request body that was sent began:' => 'Telo odoslanej požiadavky začínalo:',
  'Impersonating users over the API is no longer supported.' => 'Zosobňovanie používateľov cez API sa už nepodporuje.',
  'Table' => 'Tabuľka',
  'The best available MYSQL implementation is now selected automatically.' => 'Najlepšia dostupná implementácia MYSQL sa teraz vyberá automaticky.',
  'Ignore Setup Issue' => 'Ignorovať problém s nastavením',
  'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.

You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => 'Táto možnosť umožňuje zapnúť DarkConsole na každej stránke, dokonca aj pre odhlásených používateľov. Naozaj užitočné je to len vtedy, ak potrebujete ladiť niečo na stránke pre odhlásených používateľov. V produkčnom prostredí by ste túto možnosť zapínať nemali.

Aby mala táto možnosť akýkoľvek účinok, musíte najprv zapnúť DarkConsole nastavením „%s“.',
  'Alternative URIs that can access this service.' => 'Alternatívne URI, cez ktoré je táto služba dostupná.',
  'Repository %s has unreplicated changes (for %s).' => 'Repozitár %s má nereplikované zmeny (už %s).',
  'The controller or workflow which handled the request.' => 'Kontrolér alebo pracovný postup, ktorý spracoval požiadavku.',
  'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".' => 'Možnosť „%s“ je typu „%s“, ale hodnota na indexe „%s“ v zozname nie je „true“.',
  'Applications application' => 'Aplikácia Aplikácie',
  'This server is not configured in cluster mode.' => 'Tento server nie je nastavený v režime klastra.',
  '%s created this configuration entry.' => '%s vytvoril(a) túto konfiguračnú položku.',
  'You have enabled pygments and the %s script is available, but does not seem to work.' => 'Máte zapnutý pygments a skript %s je dostupný, ale zdá sa, že nefunguje.',
  'This column is missing a type specification.' => 'Tomuto stĺpcu chýba špecifikácia typu.',
  'The current configuration has these %d value(s):' => array(
    'Aktuálna konfigurácia má túto hodnotu:',
    'Aktuálna konfigurácia má tieto hodnoty:',
  ),
  'Column Has No Specification' => 'Stĺpec nemá špecifikáciu',
  'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.

Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).

This software is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.

Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.

You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":

%s
Note that if you run other applications against the same database, they may not work in strict mode.

If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. This software will work correctly with this mode enabled or disabled.' => 'Na databázovom hostiteľovi „%s“ globálne nastavenie „sql_mode“ neobsahuje režim „STRICT_ALL_TABLES“. Zapnutie tohto režimu sa odporúča, pretože celkovo zlepšuje spôsob, akým MySQL spracúva niektoré chyby.

Bez zapnutého tohto režimu MySQL potichu ignoruje niektoré chybové stavy vrátane vkladaní, ktoré sa pokúšajú uložiť do stĺpca viac údajov, než sa doň zmestí. Takéto správanie je zvyčajne nežiaduce a môže viesť k poškodeniu údajov (orezaním viacbajtových znakov uprostred), k strate údajov (zahodením údajov, ktoré sa do stĺpca nezmestia) alebo k bezpečnostným problémom (napríklad orezaním kľúčov či poverení).

Tento softvér sa vyvíja a testuje v režime „STRICT_ALL_TABLES“, takže by ste na tieto situácie za normálnych okolností nikdy nemali naraziť, no môžu nastať, ak pracujete s databázou priamo, spúšťate kód tretích strán, vyvíjate rozšírenia alebo jednoducho narazíte na chybu v softvéri.

Zapnutie režimu „STRICT_ALL_TABLES“ spôsobí, že MySQL pri výskyte niektorej z týchto neobvyklých situácií vyvolá výslovnú chybu. Je to bezpečnejšie správanie a bráni tomu, aby tieto situácie neskôr spôsobili skryté, nenápadné a potenciálne vážne problémy.

Ďalšie informácie o tomto režime (a o tom, ako ho nastaviť) nájdete v príručke k MySQL. Zvyčajne stačí pridať toto do súboru „my.cnf“ (do sekcie „[mysqld]“) a potom reštartovať „mysqld“:

%s
Majte na pamäti, že ak nad tou istou databázou spúšťate aj iné aplikácie, nemusia v striktnom režime fungovať.

Ak režim „STRICT_ALL_TABLES“ nemôžete alebo nechcete zapnúť, môžete toto varovanie pokojne ignorovať. Tento softvér bude správne fungovať so zapnutým aj vypnutým režimom.',
  'Delete configuration in the database instead of in local configuration.' => 'Odstrániť konfiguráciu v databáze namiesto v lokálnej konfigurácii.',
  'No Email Preferences Link' => 'Bez odkazu na nastavenia e-mailu',
  'Marked activity "%s" as completed.' => 'Aktivita „%s“ bola označená ako dokončená.',
  'The way VCS activity is attributed %s user accounts has changed.' => 'Spôsob, akým sa aktivita VCS priraďuje %s používateľským účtom, sa zmenil.',
  'Mail.app on OS X Lion won\'t respect threading headers unless the subject is
prefixed with "Re:". If you enable this option, this software will add "Re:" to
the subject line of all mail which is expected to thread. If you\'ve set
\'metamta.one-mail-per-recipient\', users can override this setting in their
preferences.' => 'Mail.app na OS X Lion nebude rešpektovať hlavičky vlákien, pokiaľ predmet
nezačína „Re:“. Ak túto možnosť zapnete, tento softvér pridá „Re:“ do riadka
predmetu všetkej pošty, ktorá sa má zoskupovať do vlákien. Ak ste nastavili
„metamta.one-mail-per-recipient“, používatelia môžu toto nastavenie prepísať
vo svojich predvoľbách.',
  'Repository %s has unreplicated changes.' => 'Repozitár %s má nereplikované zmeny.',
  'You have \'%s\' enabled in your PHP configuration.

This option is not compatible with this software. Remove \'%s\' from your configuration to continue.' => 'Vo svojej konfigurácii PHP máte zapnuté „%s“.

Táto možnosť nie je kompatibilná s týmto softvérom. Ak chcete pokračovať, odstráňte „%s“ zo svojej konfigurácie.',
  'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %d.' => 'Binárny súbor „%s“ sa v tomto systéme správa neočakávane: očakávalo sa, že pri zadaní identických súborov skončí bez chybového kódu, ale skončil s kódom %d.',
  'No active repositories have outstanding errors.' => 'Žiadne aktívne repozitáre nemajú nevyriešené chyby.',
  'Array containing list of disabled applications.' => 'Pole obsahujúce zoznam zakázaných aplikácií.',
  'Usage' => 'Použitie',
  'Rebuild Repository Identities' => 'Znovu zostaviť identity repozitárov',
  'Move port information from `%s` to `%s` in your config.' => 'Vo svojej konfigurácii presuňte informácie o porte z `%s` do `%s`.',
  'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.' => 'Táto možnosť sa nedá upraviť z webového rozhrania. Na úpravu zásad zberača odpadu použite %s.',
  'Better Table Engine Available' => 'K dispozícii je lepší tabuľkový nástroj',
  'Set a local configuration value.' => 'Nastaviť lokálnu konfiguračnú hodnotu.',
  'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.' => 'Úložisko pre veľké súbory nebolo nastavené, čo obmedzí maximálnu veľkosť nahrávaných súborov. Pokyny na nastavenie nahrávania a úložiska nájdete v %s.',
  'This option controls whether users can edit account email addresses and profile real names.

If you set things up to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => 'Táto možnosť určuje, či môžu používatelia upravovať e-mailové adresy účtu a skutočné mená v profile.

Ak máte nastavenú automatickú synchronizáciu informácií o účte z iného autoritatívneho systému, môžete používateľom tieto úpravy zakázať, aby informácie zostali v oboch systémoch konzistentné.',
  '%s deleted %s (again?).' => '%s odstránil(a) %s (znova?).',
  'Access log format.' => 'Formát prístupového denníka.',
  'Use Pygments to highlight code?' => 'Použiť Pygments na zvýrazňovanie kódu?',
  'Access log location.' => 'Umiestnenie prístupového denníka.',
  'Your webserver is not handling GET parameters properly.' => 'Váš webový server nespracúva parametre GET správne.',
  'Repository Errors' => 'Chyby repozitárov',
  'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.' => 'Možnosť „%s“ je typu „%s“, ale nastavená hodnota nie je názvom známej triedy. Platné voľby sú: %s.',
  'The keyring stores master encryption keys. For help with configuring a keyring
and encryption, see **[[ %s | Configuring Encryption ]]**.' => 'Zväzok kľúčov uchováva hlavné šifrovacie kľúče. Pomoc s nastavením zväzku
kľúčov a šifrovania nájdete v **[[ %s | Nastavenie šifrovania ]]**.',
  'Short' => 'Krátky',
  'Large File Storage Not Configured' => 'Úložisko pre veľké súbory nie je nastavené',
  'When email is sent, what format should the software use for users\' email
addresses? Valid values are:

 - `short`: \'gwashington <gwashington@example.com>\'
 - `real`:  \'George Washington <gwashington@example.com>\'
 - `full`: \'gwashington (George Washington) <gwashington@example.com>\'

The default is `full`.' => 'Aký formát má softvér použiť pre e-mailové adresy používateľov pri odosielaní
e-mailov? Platné hodnoty sú:

 - `short`: \'gwashington <gwashington@example.com>\'
 - `real`:  \'George Washington <gwashington@example.com>\'
 - `full`: \'gwashington (George Washington) <gwashington@example.com>\'

Predvolená hodnota je `full`.',
  'The minimum supported version of Mercurial is 2.4, which was released in 2012.' => 'Minimálna podporovaná verzia Mercurialu je 2.4, ktorá vyšla v roku 2012.',
  'Use "bin/phd debug ..." to get a detailed daemon execution log.' => 'Podrobný denník behu démona získate príkazom "bin/phd debug ...".',
  'Migrating file-based config to more modern config...' => 'Migruje sa konfigurácia založená na súboroch na modernejšiu konfiguráciu...',
  'Full' => 'Úplný',
  'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => 'Na nastavenie databáz spustite skript na aktualizáciu úložiska (hostiteľ „%s“ nebol inicializovaný).',
  'You haven\'t configured mailers yet, so this server won\'t be able to send outbound mail or receive inbound mail. See the configuration setting "cluster.mailers" for details.' => 'Zatiaľ ste nenastavili doručovateľov pošty, takže tento server nebude môcť odosielať odchádzajúcu ani prijímať prichádzajúcu poštu. Podrobnosti nájdete v konfiguračnom nastavení „cluster.mailers“.',
  'Unrecognized verb: %s' => 'Nerozpoznané sloveso: %s',
  'WARNING: This is a prototype option and the description below is currently pure
fantasy.

This option allows you to make this service aware of database read replicas so
it can monitor database health, spread load, and degrade gracefully to
read-only mode in the event of a failure on the primary host. For help with
configuring cluster databases, see **[[ %s | %s ]]** in the documentation.' => 'WARNING: Toto je prototypová možnosť a nasledujúci popis je momentálne čistá
fantázia.

Táto možnosť umožňuje, aby táto služba vedela o replikách databázy na čítanie,
vďaka čomu môže sledovať zdravie databázy, rozkladať záťaž a v prípade zlyhania
primárneho hostiteľa elegantne prejsť do režimu len na čítanie. Pomoc s
nastavením databáz v klastri nájdete v **[[ %s | %s ]]** v dokumentácii.',
  'Schemata Issues' => 'Problémy so schémami',
  'Expected Collation' => 'Očakávané porovnávanie',
  'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.' => 'Možnosť „%s“ je typu „%s“, ale hodnota nie je zoznam: je to mapa s neprirodzenými alebo riedkymi kľúčmi.',
  'Use Normal HTTP Redirects' => 'Používať normálne presmerovania HTTP',
  'Configuration key \'%s\' is not set in %s configuration!' => 'Konfiguračný kľúč „%s“ nie je nastavený v konfigurácii %s!',
  'Multi-Factor Optional' => 'Viacfaktorové overenie voliteľné',
  'The \'%s\' extension is not installed. Without \'%s\', this server may not be able to determine the MIME types of uploaded files.' => 'Rozšírenie „%s“ nie je nainštalované. Bez „%s“ nemusí byť tento server schopný určiť typy MIME nahraných súborov.',
  'The configuration option \'%s\' has been removed. You may delete it at your convenience.

%s' => 'Konfiguračná možnosť „%s“ bola odstránená. Môžete ju odstrániť, keď sa vám to bude hodiť.

%s',
  'Disable Pagespeed' => 'Zakázať Pagespeed',
  'Elasticsearch index exists but needs correction.' => 'Index Elasticsearchu existuje, ale potrebuje opravu.',
  'Nullable' => 'Povoľuje NULL',
  'No "Host" Header' => 'Žiadna hlavička „Host“',
  'Activity "%s" did not need to be marked as complete.' => 'Aktivitu „%s“ nebolo potrebné označiť ako dokončenú.',
  'SSH error log location.' => 'Umiestnenie chybového denníka SSH.',
  'The translation implementation has changed and providers are no longer used or supported.' => 'Implementácia prekladu sa zmenila a poskytovatelia sa už nepoužívajú ani nepodporujú.',
  'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'Možnosť „%s“ je typu „%s“, ale hodnota, ktorú ste zadali, nie je platný zoznam vo formáte JSON. Pri nastavovaní zoznamovej možnosti z príkazového riadka zadajte hodnotu vo formáte JSON. Možno budete musieť hodnotu pre svoj shell uviesť v úvodzovkách (napríklad: \'["a", "b", ...]\').',
  'Format for the SSH access log. Use %s to set the path. Available variables are:' => 'Formát prístupového denníka SSH. Na nastavenie cesty použite %s. Dostupné premenné sú:',
  'This table can use a better table engine.' => 'Táto tabuľka môže používať lepší tabuľkový nástroj.',
  'PHP post_max_size Not Configured' => 'PHP post_max_size nie je nastavené',
  'Can Not Connect to MySQL' => 'Nedá sa pripojiť k MySQL',
  'Option "%s" is of type "%s", but the configured value is not a boolean.' => 'Možnosť „%s“ je typu „%s“, ale nastavená hodnota nie je logická hodnota.',
  'Disable developer mode' => 'Vypnúť vývojársky režim',
  'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. This software will not work properly until you do.' => 'Zistite, ktorý komponent vo vašej konfigurácii webového servera rozbaľuje alebo komolí požiadavky, a vypnite ho. Kým to neurobíte, tento softvér nebude fungovať správne.',
  'Profile 0.1%% of all requests' => 'Profilovať 0,1 %% všetkých požiadaviek',
  'This option has been replaced with the more granular option `%s`.' => 'Táto možnosť bola nahradená podrobnejšou možnosťou `%s`.',
  'Require all users to configure multi-factor authentication.' => 'Vyžadovať od všetkých používateľov nastavenie viacfaktorového overenia.',
  'Stop this software from sending any email, etc.' => 'Zabrániť tomuto softvéru odosielať akékoľvek e-maily a podobne.',
  'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'Binárny súbor „%s“ sa nepodarilo nájsť. Vytvorte naň symbolický odkaz v „%s“, nastavte premennú prostredia %s webového servera tak, aby zahŕňala adresár, v ktorom sa nachádza, alebo tento adresár pridajte do „%s“ v konfigurácii.',
  'Configuration Guide: Locked and Hidden Configuration' => 'Príručka konfigurácie: Uzamknutá a skrytá konfigurácia',
  'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.' => 'Táto možnosť zapína podrobné hlásenie chýb (výpisy zásobníka, chybové výzvy) a vynucuje čítanie statických zdrojov z disku pri každom načítaní.',
  'Wrote configuration key "%s" to local storage (in file "%s").' => 'Konfiguračný kľúč „%s“ bol zapísaný do lokálneho úložiska (do súboru „%s“).',
  'These alternative URIs will be able to access \'normal\' pages on this install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'Tieto alternatívne URI budú mať prístup k „bežným“ stránkam tejto inštalácie. Iné funkcie, napríklad OAuth, fungovať nebudú. Hlavným prípadom použitia je presun inštalácie medzi doménami.',
  '(%s%s) %s' => '(%s%s) %s',
  'Nonreplicating Replica' => 'Nereplikujúca replika',
  'Run these %d command(s):' => array(
    'Spustite tento príkaz:',
    'Spustite tieto príkazy:',
  ),
  'Pattern' => 'Vzor',
  'Unknown \'%s\' Version' => 'Neznáma verzia „%s“',
  'Require administrators to unlock the authentication provider configuration from the CLI before it can be edited.' => 'Vyžadovať, aby administrátori pred úpravou odomkli konfiguráciu poskytovateľa overenia z príkazového riadka.',
  'Define one or more mail transmission services. For help with configuring
mailers, see **[[ %s | %s ]]** in the documentation.' => 'Definujte jednu alebo viac služieb na prenos pošty. Pomoc s nastavením
doručovateľov pošty nájdete v **[[ %s | %s ]]** v dokumentácii.',
  'Feed Hooks Deprecated' => 'Háky kanála sú zastarané',
  'Purge Caches' => 'Vyprázdniť vyrovnávacie pamäte',
  'Configure services to run on a cluster of hosts.' => 'Nastavte služby tak, aby bežali na klastri hostiteľov.',
  'Adjust %s in your PHP configuration to at least 32MB. When set to smaller value, large file uploads may not work properly.' => 'Upravte %s vo svojej konfigurácii PHP na aspoň 32 MB. Pri nižšej hodnote nemusí nahrávanie veľkých súborov fungovať správne.',
  'Show Recipient Hints' => 'Zobrazovať nápovedy o príjemcoch',
  'Recaptcha private key, obtained by signing up for Recaptcha.' => 'Súkromný kľúč Recaptcha, ktorý získate registráciou do služby Recaptcha.',
  'MySQL InnoDB Engine Not Available' => 'Nástroj MySQL InnoDB nie je k dispozícii',
  'Database host "%s" does not support the %s option. You will not be able to find search results for common words. You can gain access to this option by upgrading MySQL to a more recent version.

You can ignore this warning if you plan to configure Elasticsearch later, or aren\'t concerned about searching for common words.' => 'Databázový hostiteľ „%s“ nepodporuje možnosť %s. Nebudete môcť vyhľadávať výsledky pre bežné slová. Prístup k tejto možnosti získate aktualizáciou MySQL na novšiu verziu.

Toto varovanie môžete ignorovať, ak plánujete neskôr nastaviť Elasticsearch alebo ak vám na vyhľadávaní bežných slov nezáleží.',
  'Proto' => 'Proto',
  'HTTP Strict Transport Security (HSTS) sends a header which instructs browsers that the site should only be accessed over HTTPS, never HTTP. This defuses an attack where an adversary gains access to your network, then proxies requests through an unsecured link.

Do not enable this option if you serve (or plan to ever serve) unsecured content over plain HTTP. It is very difficult to undo this change once users\' browsers have accepted the setting.' => 'HTTP Strict Transport Security (HSTS) odosiela hlavičku, ktorá prehliadačom oznamuje, že k lokalite sa má pristupovať iba cez HTTPS, nikdy nie cez HTTP. Tým sa zneškodní útok, pri ktorom útočník získa prístup do vašej siete a potom presmeruje požiadavky cez nezabezpečené spojenie.

Túto možnosť nezapínajte, ak poskytujete (alebo niekedy plánujete poskytovať) nezabezpečený obsah cez obyčajné HTTP. Keď už prehliadače používateľov toto nastavenie prijmú, je veľmi ťažké túto zmenu vrátiť späť.',
  '(No Value Configured)' => '(Nie je nastavená žiadna hodnota)',
  'Allow editing' => 'Povoliť úpravy',
  'Configure full-text search services.' => 'Nastavte služby fulltextového vyhľadávania.',
  'The HTTP method.' => 'Metóda HTTP.',
  'The webserver\'s host name.' => 'Názov hostiteľa webového servera.',
  'PHP Timezone Invalid' => 'Neplatné časové pásmo PHP',
  'The environmental variable %s is empty. This server needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in configuration.' => 'Premenná prostredia %s je prázdna. Tento server potrebuje spúšťať niektoré systémové príkazy, napríklad `%s`, `%s`, `%s` a `%s`. Aby sa tieto príkazy dali spustiť, binárne súbory musia byť dostupné v %s webového servera. Ďalšie cesty môžete nastaviť v konfigurácii.',
  'Branchpoint' => 'Bod vetvenia',
  'Integration with Recaptcha' => 'Integrácia so službou Recaptcha',
  'Global cap for size of generated emails (bytes).' => 'Globálny strop veľkosti generovaných e-mailov (v bajtoch).',
  'Access Logs' => 'Prístupové denníky',
  'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.' => 'Na tomto serveri je nainštalovaná známa chybná verzia „%s“ („%s“). Táto verzia nie je podporovaná alebo obsahuje závažné chyby či bezpečnostné zraniteľnosti, ktoré sú opravené v novšej verzii.',
  'URI where this software is installed.' => 'URI, na ktorom je tento softvér nainštalovaný.',
  'Character Set' => 'Znaková sada',
  'Formats' => 'Formáty',
  'Ambiguous Leader' => 'Nejednoznačný líder',
  'Config key "%s" is locked and can only be set in local configuration. To learn more, see "%s" in the documentation.' => 'Konfiguračný kľúč „%s“ je uzamknutý a dá sa nastaviť iba v lokálnej konfigurácii. Ďalšie informácie nájdete v „%s“ v dokumentácii.',
  'This option can help debug pages which are taking a very long time (more than 30 seconds) to render.

If a page is slow to render (but taking less than 30 seconds), the best tools to use to figure out why it is slow are usually the DarkConsole service call profiler and XHProf.

However, if a request takes a very long time to return, some components (like Apache, nginx, or PHP itself) may abort the request before it finishes. This can prevent you from using profiling tools to understand page performance in detail.

In these cases, you can use this option to force the page to abort after a smaller number of seconds (for example, 10), and dump a useful stack trace. This can provide useful information about why a page is hanging.

To use this option, set it to a small number (like 10), and reload a hanging page. The page should exit after 10 seconds and give you a stack trace.

You should turn this option off (set it to 0) when you are done with it. Leaving it on creates a small amount of overhead for all requests, even if they do not hit the time limit.' => 'Táto možnosť môže pomôcť pri ladení stránok, ktorých vykreslenie trvá veľmi dlho (viac ako 30 sekúnd).

Ak sa stránka vykresľuje pomaly (ale trvá to menej ako 30 sekúnd), na zistenie príčiny sú zvyčajne najlepšími nástrojmi profilovač volaní služieb v DarkConsole a XHProf.

Ak však návrat požiadavky trvá veľmi dlho, niektoré komponenty (napríklad Apache, nginx alebo samotné PHP) môžu požiadavku ukončiť ešte pred jej dokončením. To vám môže brániť v tom, aby ste pomocou profilovacích nástrojov podrobne pochopili výkon stránky.

V takýchto prípadoch môžete pomocou tejto možnosti vynútiť ukončenie stránky po menšom počte sekúnd (napríklad 10) a vypísať užitočný výpis zásobníka. Môže to poskytnúť užitočné informácie o tom, prečo stránka zamŕza.

Ak chcete túto možnosť použiť, nastavte ju na malé číslo (napríklad 10) a znovu načítajte zamŕzajúcu stránku. Stránka by sa mala po 10 sekundách ukončiť a poskytnúť vám výpis zásobníka.

Keď ju už nebudete potrebovať, mali by ste túto možnosť vypnúť (nastaviť ju na 0). Ak ju necháte zapnutú, vytvára to malú réžiu pre všetky požiadavky, aj keď časový limit nedosiahnu.',
  'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.' => 'Táto možnosť bola premenovaná na `%s`, aby sa zdôraznila nedokončená povaha mnohých prototypových aplikácií. Vaše existujúce nastavenie bolo migrované.',
  'Clients' => 'Klienti',
  'Expected Columns' => 'Očakávané stĺpce',
  'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.' => 'Taskmasteri teraz používajú automaticky sa škálujúci fond. Veľkosť fondu môžete nastaviť pomocou `%s`.',
  'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.' => 'Táto konfigurácia je uzamknutá a nedá sa upraviť z webového rozhrania. Na jej úpravu použite %s v %s.',
  'Multiple %s subclasses contain an option named \'%s\'!' => 'Viaceré podtriedy %s obsahujú možnosť s názvom „%s“!',
  'Pygments should be installed and enabled to provide advanced syntax highlighting.' => 'Na poskytovanie pokročilého zvýrazňovania syntaxe by mal byť nainštalovaný a zapnutý Pygments.',
  'If true, allow MetaMTA to change mail subjects to put text like \'[Accepted]\' and
\'[Commented]\' in them. This makes subjects more useful, but might break
threading on some clients. If you\'ve set \'%s\', users can override this setting
in their preferences.' => 'Ak je nastavené na true, umožní MetaMTA meniť predmety e-mailov tak, aby v nich
bol text ako „[Accepted]“ a „[Commented]“. Predmety sú vďaka tomu užitočnejšie,
no v niektorých klientoch to môže narušiť zoskupovanie do vlákien. Ak ste
nastavili „%s“, používatelia môžu toto nastavenie prepísať vo svojich
predvoľbách.',
  'Recaptcha public key, obtained by signing up for Recaptcha.' => 'Verejný kľúč Recaptcha, ktorý získate registráciou do služby Recaptcha.',
  'Database Servers' => 'Databázové servery',
  'Specify a configuration key to delete.' => 'Zadajte konfiguračný kľúč, ktorý sa má odstrániť.',
  'Search Servers' => 'Vyhľadávacie servery',
  'This web host ("%s") is set to a very different time than a database host "%s".' => 'Tento webový hostiteľ („%s“) má nastavený veľmi odlišný čas než databázový hostiteľ „%s“.',
  'Send Mail To Each Recipient' => 'Odosielať poštu každému príjemcovi zvlášť',
  'The MySQL "local_infile" option is enabled. This option is unsafe.' => 'Možnosť MySQL „local_infile“ je zapnutá. Táto možnosť je nebezpečná.',
  'Either the schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => 'Buď sa zmenila schéma pre Elasticsearch, alebo Elasticsearch vytvoril index automaticky. Na opätovné zostavenie indexu použite nasledujúci príkaz.',
  'Remove Custom Logo' => 'Odstrániť vlastné logo',
  'No notification servers are configured.' => 'Nie sú nastavené žiadne servery upozornení.',
  '(Not Supported)' => '(Nepodporované)',
  'Nonstandard port' => 'Neštandardný port',
  'Don\'t embed Commons videos' => 'Nevkladať videá z Commons',
  'This configuration has been removed. You can safely delete it.

%s' => 'Táto konfigurácia bola odstránená. Môžete ju bezpečne odstrániť.

%s',
  'Options relating to translations.' => 'Možnosti týkajúce sa prekladov.',
  'Configure the UI, including colors.' => 'Nastavte používateľské rozhranie vrátane farieb.',
  'The \'%s\' extension has support for only some image types. This server will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => 'Rozšírenie „%s“ podporuje len niektoré typy obrázkov. Tento server nebude môcť spracovať obrázky chýbajúcich typov, kým „%s“ nezostavíte s ich podporou. Podporované typy: %s. Chýbajúce typy: %s.',
  'Use Private Replies (More Secure)' => 'Používať súkromné odpovede (bezpečnejšie)',
  'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'' => 'Považovať všetky súbory „*.x.bak“ za „.x“. POZNÁMKA: Na zachytávajúcu skupinu 1 sa mapujeme tak, že mapovanie zadáme ako „1“',
  'Other Services' => 'Ostatné služby',
  'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that this software imports or manages. This option is new and experimental.' => 'Zadajte systémového používateľa, pod ktorým sa majú spúšťať démoni. Tento používateľ bude predovšetkým vlastniť pracovné kópie všetkých repozitárov, ktoré tento softvér importuje alebo spravuje. Táto možnosť je nová a experimentálna.',
  'Send as User Taking Action' => 'Odosielať ako používateľ, ktorý vykonal akciu',
  'Security options.' => 'Možnosti zabezpečenia.',
  'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'Možnosť „%s“ je typu „%s“ a v príkazovom riadku sa má zadať ako zoznam hodnôt vo formáte JSON. Možno budete musieť hodnotu pre svoj shell uviesť v úvodzovkách (napríklad: \'["a", "b", ...]\').',
  'Expected Unique' => 'Očakávaná jedinečnosť',
  'Configuring a Preamble Script' => 'Nastavenie skriptu preambuly',
  'Default Partition' => 'Predvolený oddiel',
  'Domain used for reply email addresses.' => 'Doména používaná pre e-mailové adresy na odpovede.',
  'You can find more information about rebuilding the search index here: %s' => 'Ďalšie informácie o opätovnom zostavení vyhľadávacieho indexu nájdete tu: %s',
  'Prevent editing' => 'Zabrániť úpravám',
  'Whitelist 1.2.3.*' => 'Povoliť 1.2.3.*',
  'Control how user names are rendered in mail.' => 'Určite, ako sa v pošte vykresľujú používateľské mená.',
  'This configuration is no longer relevant because daemons restart automatically on configuration changes.' => 'Táto konfigurácia už nie je relevantná, pretože démoni sa pri zmenách konfigurácie reštartujú automaticky.',
  'The Differential revision list view age UI elements have been removed to simplify the interface.' => 'Prvky rozhrania zobrazujúce vek v zozname revízií v Differentiale boli odstránené, aby sa rozhranie zjednodušilo.',
  'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be installed on an entire domain; it can not be installed on a path.' => 'Konfiguračná možnosť „%s“ je neplatná. URI NESMIE obsahovať cestu, napr. „%s“ je v poriadku, ale „%s“ nie je. Tento softvér musí byť nainštalovaný na celej doméne; nedá sa nainštalovať na cestu.',
  'Separate values with newlines.' => 'Hodnoty oddeľte novými riadkami.',
  'The request body that the server received had already been decompressed. This strongly suggests your webserver is configured to decompress requests inline, before they reach PHP.' => 'Telo požiadavky, ktoré server prijal, už bolo rozbalené. To silno naznačuje, že váš webový server je nastavený tak, aby požiadavky rozbaľoval priebežne ešte predtým, než sa dostanú k PHP.',
  'Define one or more fulltext storage services. Here you can configure which
hosts will handle fulltext search queries and indexing. For help with
configuring fulltext search clusters, see **[[ %s | %s ]]** in the
documentation.' => 'Definujte jednu alebo viac služieb fulltextového úložiska. Tu môžete nastaviť,
ktorí hostitelia budú spracúvať fulltextové vyhľadávacie dopyty a indexovanie.
Pomoc s nastavením klastrov fulltextového vyhľadávania nájdete v
**[[ %s | %s ]]** v dokumentácii.',
  'Exception Handlers' => 'Obsluhy výnimiek',
  'This schema has the wrong nullable setting.' => 'Táto schéma má nesprávne nastavenie povolenia hodnoty NULL.',
  'Config option \'%s\' is invalid. The URI must start with \'%s\' or \'%s\'.' => 'Konfiguračná možnosť „%s“ je neplatná. URI musí začínať na „%s“ alebo „%s“.',
  'Unsupported/Insecure "%s" Version' => 'Nepodporovaná/nebezpečná verzia „%s“',
  'This option does not have a custom type!' => 'Táto možnosť nemá vlastný typ!',
  'Require administrators to approve new accounts.' => 'Vyžadovať schválenie nových účtov administrátormi.',
  'Authentication Configuration Unlocked' => 'Konfigurácia overenia je odomknutá',
  'Health' => 'Zdravie',
  'System user to run daemons as.' => 'Systémový používateľ, pod ktorým sa majú spúšťať démoni.',
  'When set to `true`, the authentication provider configuration for this instance can not be modified without first running `bin/auth unlock` from the command line. This is to reduce the security impact of a compromised administrator account. 

After running `bin/auth unlock` and making your changes to the authentication provider config, you should run `bin/auth lock`.' => 'Keď je nastavené na `true`, konfiguráciu poskytovateľa overenia pre túto inštanciu nemožno zmeniť bez toho, aby ste najprv z príkazového riadka spustili `bin/auth unlock`. Je to preto, aby sa znížil bezpečnostný dopad kompromitovaného administrátorského účtu. 

Po spustení `bin/auth unlock` a vykonaní zmien v konfigurácii poskytovateľa overenia by ste mali spustiť `bin/auth lock`.',
  'Unknown schema status "%s"!' => 'Neznámy stav schémy „%s“!',
  'MySQL May Run Slowly' => 'MySQL môže bežať pomaly',
  'Manage extensions.' => 'Spravujte rozšírenia.',
  'Too many arguments: expected one key.' => 'Príliš veľa argumentov: očakával sa jeden kľúč.',
  'List of Users Without MFA' => 'Zoznam používateľov bez MFA',
  'IMPORTANT: The upstream does not provide support for prototype applications.

This platform includes prototype applications which are in an **early stage of development**. By default, prototype applications are disabled, because they are often not yet developed enough to be generally usable. You can enable this option to enable them if you\'re developing applications or are interested in previewing upcoming features.

To learn more about prototypes, see [[ %s | %s ]].

After enabling prototypes, you can selectively disable them (like normal applications).' => 'IMPORTANT: Upstream neposkytuje podporu pre prototypové aplikácie.

Táto platforma obsahuje prototypové aplikácie, ktoré sú v **ranom štádiu vývoja**. Prototypové aplikácie sú predvolene vypnuté, pretože často ešte nie sú dostatočne vyvinuté na bežné používanie. Túto možnosť môžete zapnúť a povoliť ich tak, ak vyvíjate aplikácie alebo si chcete pozrieť pripravované funkcie.

Ďalšie informácie o prototypoch nájdete v [[ %s | %s ]].

Po zapnutí prototypov ich môžete jednotlivo vypínať (ako bežné aplikácie).',
  'No "Host" header present in request.' => 'V požiadavke nie je prítomná hlavička „Host“.',
  'Value for option "%s" of type "%s" must be either "true" or "false".' => 'Hodnota možnosti „%s“ typu „%s“ musí byť buď „true“, alebo „false“.',
  'Storage engines are now discovered automatically at runtime.' => 'Úložné nástroje sa teraz zisťujú automaticky za behu.',
  'This software appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. This software regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'Zdá sa, že tento softvér je nainštalovaný na veľmi malej inštancii EC2 (triedy „%s“) s nárazovým výkonom CPU. Dôrazne to neodporúčame. Tento softvér pravidelne potrebuje CPU a takéto inštancie často udusí obmedzovanie CPU. Použite radšej inštanciu s bežným CPU.',
  'Footer configuration is not valid: value must be a list of items.' => 'Konfigurácia päty nie je platná: hodnota musí byť zoznam položiek.',
  'Edit "%s"' => 'Upraviť „%s“',
  'Don\'t embed YouTube videos' => 'Nevkladať videá z YouTube',
  'Disable PHP %s' => 'Vypnúť PHP %s',
  'Configure master encryption keys.' => 'Nastavte hlavné šifrovacie kľúče.',
  'Mailers Not Configured' => 'Doručovatelia pošty nie sú nastavení',
  'Daemons no longer use PID files.' => 'Démoni už nepoužívajú súbory PID.',
  'Database replica "%s" is listed as a replica, but is not currently replicating. You are vulnerable to data loss if the master fails.' => 'Databázová replika „%s“ je uvedená ako replika, ale momentálne nereplikuje. Ak zlyhá hlavný server, hrozí vám strata údajov.',
  'Garbage Collectors' => 'Zberače odpadu',
  '%s edited this configuration entry.' => '%s upravil(a) túto konfiguračnú položku.',
  'The PHP "zip" extension is not installed. This extension is required by certain data export operations, including exporting data to Excel.

To clear this setup issue, install the extension and restart your webserver.

You may safely ignore this issue if you do not plan to export data in Zip archives or Excel spreadsheets, or intend to install the extension later.' => 'Rozšírenie PHP „zip“ nie je nainštalované. Toto rozšírenie vyžadujú niektoré operácie exportu údajov vrátane exportu do Excelu.

Tento problém s nastavením vyriešite tak, že rozšírenie nainštalujete a reštartujete webový server.

Ak neplánujete exportovať údaje do archívov Zip ani do tabuliek Excelu alebo ak chcete rozšírenie nainštalovať neskôr, môžete tento problém pokojne ignorovať.',
  'To enable the SSH log, specify a path. This log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).

If not set, no log will be written.' => 'Ak chcete zapnúť denník SSH, zadajte cestu. Tento denník môže poskytnúť podrobnejšie informácie o prístupe cez SSH než bežný denník SSH (napríklad môže zobraziť prihlásených používateľov, príkazy a ďalšie údaje aplikácie).

Ak nie je nastavená, nebude sa zapisovať žiadny denník.',
  'Send Mail To All Recipients' => 'Odosielať poštu všetkým príjemcom naraz',
  'This software sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.

This software sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.

Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.

(This problem can be caused by a missing "B" in your RewriteRule.)' => 'Tento softvér si poslal testovaciu požiadavku s neobvyklou cestou, aby otestoval, či váš webový server prepisuje cesty správne. Cesta nebola prenesená správne.

Tento softvér odoslal požiadavku na cestu „%s“ a očakával, že webový server túto cestu dekóduje a prepíše tak, aby prijal požiadavku na „%s“. Namiesto toho však prijal požiadavku na „%s“.

Overte, či sú vaše pravidlá prepisovania nastavené správne podľa pokynov v dokumentácii. Ak kódovanie ciest nefunguje správne, okrem iných problémov nebudete môcť pristupovať k súborom s neobvyklými názvami v repozitároch.

(Tento problém môže spôsobiť chýbajúce „B“ vo vašom pravidle RewriteRule.)',
  'Recorded items (sample):' => 'Zaznamenané položky (vzorka):',
  'Your install has no current setup issues to resolve.' => 'Vaša inštalácia nemá žiadne aktuálne problémy s nastavením, ktoré by bolo treba riešiť.',
  'Subschemata Have Failures' => 'Podschémy majú chyby',
  'Save Config Entry' => 'Uložiť konfiguračnú položku',
  '%s of %s' => '%s z %s',
  'Setup MySQL Schema' => 'Nastaviť schému MySQL',
  ' (%s)' => ' (%s)',
  'Not Available' => 'Nie je k dispozícii',
  'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to this software, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'Ak tieto príkazy nefungujú, skúste Google. Postup inštalácie rozšírení PHP nie je špecifický pre tento softvér a mali by fungovať akékoľvek pokyny na ich inštaláciu vo vašom systéme, ktoré nájdete. Na Mac OS X možno budete chcieť vyskúšať Homebrew.',
  'You can disable the hints under "REPLY HANDLER ACTIONS" if users prefer
smaller messages. The actions themselves will still work properly.' => 'Ak používatelia uprednostňujú kratšie správy, môžete vypnúť nápovedy pod
„REPLY HANDLER ACTIONS“. Samotné akcie budú naďalej fungovať správne.',
  'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => 'Táto možnosť bola odstránená, na prispôsobenie domovskej stránky môžete použiť nástenky. Ďalšie podrobnosti nájdete v T11533.',
  'Data Cache' => 'Vyrovnávacia pamäť údajov',
  'Configure the access logs, which log HTTP/SSH requests.' => 'Nastavte prístupové denníky, ktoré zaznamenávajú požiadavky HTTP/SSH.',
  '%ss Behind' => '%s s pozadu',
  'The PID of the server process.' => 'PID procesu servera.',
  'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be \'.
            \'installed on an entire domain; it can not be installed on a path.' => 'Konfiguračná možnosť „%s“ je neplatná. URI NESMIE obsahovať cestu, napr. „%s“ je v poriadku, ale „%s“ nie je. Tento softvér musí byť \'.
            \'nainštalovaný na celej doméne; nedá sa nainštalovať na cestu.',
  'Blacklist subnets to prevent user-initiated outbound requests.' => 'Zablokujte podsiete, aby ste zabránili odchádzajúcim požiadavkám iniciovaným používateľmi.',
  'When a message is sent to multiple recipients (for example, several reviewers on
a code review), it can either be delieverd as one email to everyone (e.g., "To:
alincoln, usgrant, htaft") or separate emails to each user (e.g., "To:
alincoln", "To: usgrant", "To: htaft"). The major advantages and disadvantages
of each approach are:

  - One mail to everyone:
    - This violates policy controls. The body of the mail is generated without
      respect for object policies.
    - Recipients can see To/Cc at a glance.
    - If you use mailing lists, you won\'t get duplicate mail if you\'re
      a normal recipient and also Cc\'d on a mailing list.
    - Getting threading to work properly is harder, and probably requires
      making mail less useful by turning off options.
    - Sometimes people will "Reply All", which can send mail to too many
      recipients. This software will try not to send mail to users who already
      received a similar message, but can not prevent all stray email arising
      from "Reply All".
    - Not supported with a private reply-to address.
    - Mail messages are sent in the server default translation.
    - Mail that must be delivered over secure channels will leak the recipient
      list in the "To" and "Cc" headers.
  - One mail to each user:
    - Policy controls work correctly and are enforced per-user.
    - Recipients need to look in the mail body to see To/Cc.
    - If you use mailing lists, recipients may sometimes get duplicate
      mail.
    - Getting threading to work properly is easier, and threading settings
      can be customized by each user.
    - "Reply All" will never send extra mail to other users involved in the
      thread.
    - Required if private reply-to addresses are configured.
    - Mail messages are sent in the language of user preference.
' => 'Keď sa správa odosiela viacerým príjemcom (napríklad viacerým recenzentom pri
posudzovaní kódu), môže byť doručená buď ako jeden e-mail všetkým (napr. „To:
alincoln, usgrant, htaft“), alebo ako samostatné e-maily každému používateľovi
(napr. „To: alincoln“, „To: usgrant“, „To: htaft“). Hlavné výhody a nevýhody
oboch prístupov sú:

  - Jeden e-mail všetkým:
    - Porušuje to riadenie zásad. Telo e-mailu sa generuje bez ohľadu na
      zásady objektov.
    - Príjemcovia vidia To/Cc na prvý pohľad.
    - Ak používate mailingové zoznamy, nedostanete duplicitnú poštu, keď ste
      bežným príjemcom a zároveň ste v kópii cez mailingový zoznam.
    - Ťažšie sa dosiahne správne zoskupovanie do vlákien a pravdepodobne si
      to vyžiada vypnutie niektorých možností, čím sa pošta stane menej
      užitočnou.
    - Ľudia niekedy použijú „Odpovedať všetkým“, čím môžu poslať poštu
      príliš mnohým príjemcom. Tento softvér sa bude snažiť neposielať poštu
      používateľom, ktorí už podobnú správu dostali, no nedokáže zabrániť
      všetkej zatúlanej pošte vzniknutej z „Odpovedať všetkým“.
    - Nie je podporované so súkromnou adresou na odpovede.
    - Poštové správy sa odosielajú v predvolenom preklade servera.
    - Pošta, ktorá sa musí doručovať cez zabezpečené kanály, prezradí zoznam
      príjemcov v hlavičkách „To“ a „Cc“.
  - Jeden e-mail každému používateľovi:
    - Riadenie zásad funguje správne a vynucuje sa pre každého používateľa
      zvlášť.
    - Príjemcovia sa musia pozrieť do tela e-mailu, aby videli To/Cc.
    - Ak používate mailingové zoznamy, príjemcovia môžu občas dostať
      duplicitnú poštu.
    - Ľahšie sa dosiahne správne zoskupovanie do vlákien a nastavenia vlákien
      si môže prispôsobiť každý používateľ.
    - „Odpovedať všetkým“ nikdy nepošle poštu navyše ostatným používateľom
      zapojeným do vlákna.
    - Vyžaduje sa, ak sú nastavené súkromné adresy na odpovede.
    - Poštové správy sa odosielajú v jazyku, ktorý používateľ uprednostňuje.',
  'No Outbound Requests' => 'Žiadne odchádzajúce požiadavky',
  'Primary install URI, for multi-environment installs.' => 'Primárne URI inštalácie pre inštalácie s viacerými prostrediami.',
  'Global access controls now exist, see `%s`.' => 'Globálne riadenie prístupu teraz existuje, pozri `%s`.',
  'Your webserver is not handling compressed request bodies properly.' => 'Váš webový server nespracúva komprimované telá požiadaviek správne.',
  'Whitelists editor protocols for "Open in Editor".' => 'Povolí protokoly editora pre „Otvoriť v editore“.',
  'Unable to connect to MySQL!

%s

Make sure databases connection information and MySQL are correctly configured.' => 'Nedá sa pripojiť k MySQL!

%s

Uistite sa, že informácie o pripojení k databázam a samotné MySQL sú nastavené správne.',
  'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.' => 'Nastavenia „Re: Prefix“ a „Vary Subjects“ sa teraz nastavujú v globálnych nastaveniach.',
  'You have no unresolved setup issues.' => 'Nemáte žiadne nevyriešené problémy s nastavením.',
  'This configuration is hidden and can not be edited or viewed from the web interface.' => 'Táto konfigurácia je skrytá a nedá sa upraviť ani zobraziť z webového rozhrania.',
  'Local Disk Storage Not Readable/Writable' => 'Lokálne diskové úložisko nie je čitateľné/zapisovateľné',
  'Override translations.' => 'Prepísať preklady.',
  'Cluster Configuration Out of Sync' => 'Konfigurácia klastra nie je synchronizovaná',
  'Cookies set for x.com are also sent for y.x.com. Assuming instances are running on both domains, this will create a collision preventing you from logging in.' => 'Súbory cookie nastavené pre x.com sa odosielajú aj pre y.x.com. Ak na oboch doménach bežia inštancie, vznikne kolízia, ktorá vám zabráni prihlásiť sa.',
  'This option has been removed. You may delete it at your convenience.' => 'Táto možnosť bola odstránená. Môžete ju odstrániť, keď sa vám to bude hodiť.',
  'You can find more information about this new identity mapping here: %s' => 'Ďalšie informácie o tomto novom mapovaní identít nájdete tu: %s',
  'After rebuilding the index, run this command to clear this setup warning:' => 'Po opätovnom zostavení indexu spustite tento príkaz, aby ste odstránili toto varovanie o nastavení:',
  'Footer item with index "%s" is invalid: %s' => 'Položka päty s indexom „%s“ je neplatná: %s',
  'Unknown Configuration Option "%s"' => 'Neznáma konfiguračná možnosť „%s“',
  'Truncate at 1MB' => 'Skrátiť na 1 MB',
  'Access key for Amazon S3.' => 'Prístupový kľúč pre Amazon S3.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.' => 'Komponent PATH „%s“ (ktorý sa vyhodnotí ako absolútna cesta „%s“) sa nedá použiť, pretože „%s“ nie je čitateľné.',
  'Maniphest fields are now loaded automatically. You can configure them with `%s`.' => 'Polia Maniphestu sa teraz načítavajú automaticky. Môžete ich nastaviť pomocou `%s`.',
  'This key is expected to exist, but does not.' => 'Očakáva sa, že tento kľúč bude existovať, ale neexistuje.',
  'Persistence' => 'Trvalosť',
  'This schema is expected to exist, but does not.' => 'Očakáva sa, že táto schéma bude existovať, ale neexistuje.',
  'You can provide a custom highlighter engine by extending class %s.' => 'Vlastný nástroj na zvýrazňovanie môžete poskytnúť rozšírením triedy %s.',
  'Do Not Use Pygments' => 'Nepoužívať Pygments',
  'Up to Date' => 'Aktuálne',
  'Configure core options, including URIs.' => 'Nastavte základné možnosti vrátane URI.',
  '(empty)' => '(prázdne)',
  'This key has the wrong uniqueness setting.' => 'Tento kľúč má nesprávne nastavenie jedinečnosti.',
  'When users set or reset a password, it must have at least this many characters.' => 'Keď si používatelia nastavujú alebo obnovujú heslo, musí mať aspoň toľkoto znakov.',
  'Additional configuration options to lock.' => 'Ďalšie konfiguračné možnosti, ktoré sa majú uzamknúť.',
  'Override what language files (based on filename) highlight as.' => 'Prepísať, ako jazykovo sa majú súbory zvýrazňovať (na základe názvu súboru).',
  'Bad "Host" Header' => 'Chybná hlavička „Host“',
  'Controls whether email for multiple recipients is sent by creating one message with everyone in the "To:" line, or multiple messages that each have a single recipient in the "To:" line.' => 'Určuje, či sa e-mail pre viacerých príjemcov odosiela ako jedna správa so všetkými v riadku „To:“, alebo ako viacero správ, z ktorých každá má v riadku „To:“ jediného príjemcu.',
  'Option "%s" is of type "%s", but the item at index "%s" of the list is not a string.' => 'Možnosť „%s“ je typu „%s“, ale položka na indexe „%s“ v zozname nie je reťazec.',
  'MySQL port to use when connecting to the database.' => 'Port MySQL, ktorý sa má použiť pri pripájaní k databáze.',
  'Trying to add duplicate key "%s"!' => 'Pokus o pridanie duplicitného kľúča „%s“!',
  'Option "%s" is of type "%s", but the configured value is not a string.' => 'Možnosť „%s“ je typu „%s“, ale nastavená hodnota nie je reťazec.',
  'User Guide: Amazon RDS' => 'Používateľská príručka: Amazon RDS',
  'You have \'%s\' enabled in your PHP configuration.

This feature is "highly discouraged" by PHP\'s developers, and has been removed entirely in PHP8.This option is not compatible with this software. Disable \'%s\' in your PHP configuration to continue.' => 'Vo svojej konfigurácii PHP máte zapnuté „%s“.

Vývojári PHP túto funkciu „dôrazne neodporúčajú“ a v PHP8 bola úplne odstránená. Táto možnosť nie je kompatibilná s týmto softvérom. Ak chcete pokračovať, vypnite „%s“ vo svojej konfigurácii PHP.',
  'Repository %s has an ambiguous leader.' => 'Repozitár %s má nejednoznačného lídra.',
  'To enable the SSH error log, specify a path. Errors occurring in contexts where this software is serving SSH requests will be written to this log.

If not set, no log will be written.' => 'Ak chcete zapnúť chybový denník SSH, zadajte cestu. Chyby, ktoré nastanú v kontextoch, kde tento softvér obsluhuje požiadavky SSH, sa budú zapisovať do tohto denníka.

Ak nie je nastavená, nebude sa zapisovať žiadny denník.',
  'The \'%s\' extension is not installed. Without \'%s\' support, this server will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => 'Rozšírenie „%s“ nie je nainštalované. Bez podpory „%s“ nebude tento server schopný spracúvať ani meniť veľkosť obrázkov (napríklad generovať miniatúry). Nainštalujte alebo zapnite „%s“.',
  'Your authentication provider configuration is unlocked. Once you finish setting up or modifying authentication, you should lock the configuration to prevent unauthorized changes.

Leaving your authentication provider configuration unlocked increases the damage that a compromised administrator account can do to your install. For example, an attacker who compromises an administrator account can change authentication providers to point at a server they control and attempt to intercept usernames and passwords.

To prevent this attack, you should configure authentication, and then lock the configuration by running "bin/auth lock" from the command line. This will prevent changing the authentication config without first running "bin/auth unlock".' => 'Konfigurácia vášho poskytovateľa overenia je odomknutá. Keď dokončíte nastavovanie alebo zmenu overovania, mali by ste konfiguráciu uzamknúť, aby ste zabránili neoprávneným zmenám.

Ponechanie konfigurácie poskytovateľa overenia odomknutej zvyšuje škody, ktoré môže kompromitovaný administrátorský účet vašej inštalácii spôsobiť. Napríklad útočník, ktorý kompromituje administrátorský účet, môže zmeniť poskytovateľov overenia tak, aby smerovali na server, ktorý ovláda, a pokúsiť sa zachytiť používateľské mená a heslá.

Tomuto útoku zabránite tak, že nastavíte overovanie a potom konfiguráciu uzamknete spustením príkazu „bin/auth lock“ z príkazového riadka. Tým sa zabráni zmene konfigurácie overovania bez toho, aby ste najprv spustili „bin/auth unlock“.',
  'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. This server needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.

PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.

(Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)

The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit process memory.

You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'Keď nahrávate súbor pretiahnutím myšou alebo cez API, bloky sa musia pred zápisom do trvalého úložiska ukladať do pamäte. Tento server potrebuje počas nahrávania dostupnú pamäť na uloženie týchto blokov, no PHP je momentálne nastavené tak, že dostupnú pamäť výrazne obmedzuje.

Procesy PHP majú momentálne k dispozícii veľmi málo voľnej pamäte (%s). Aby fungovali dobre, procesy by mali mať aspoň %s.

(Majte na pamäti, že do dostupnej pamäte sa musí zmestiť aj samotná aplikácia, takže na spracovanie záťaže nie je k dispozícii celá pamäť pod limitom.)

Najjednoduchší spôsob, ako tento problém vyriešiť, je nastaviť %s na %s vo vašej konfigurácii PHP, čím sa limit pamäte vypne. Použitie tejto možnosti na obmedzenie pamäte procesov má zvyčajne malú alebo žiadnu hodnotu.

Môžete tiež limit zvýšiť alebo tento problém ignorovať a zmieriť sa s tým, že môžete naraziť na problémy pri nahrávaní veľkých súborov a spracúvaní veľkých požiadaviek.',
  'Configuration of the notification server has changed substantially. For discussion, see T10794.' => 'Konfigurácia servera upozornení sa podstatne zmenila. Diskusiu nájdete v T10794.',
  'Read option value from stdin.' => 'Načítať hodnotu možnosti zo štandardného vstupu.',
  'Database source is not configured properly' => 'Databázový zdroj nie je nastavený správne',
  'Don\'t Require Manual Approval' => 'Nevyžadovať manuálne schválenie',
  'Column Type' => 'Typ stĺpca',
  'Truncate at 512KB' => 'Skrátiť na 512 KB',
  'Cache' => 'Vyrovnávacia pamäť',
  'Automatically profile some percentage of pages.' => 'Automaticky profilovať určité percento stránok.',
  'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. This software can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'Výslovný koncový bod S3, ktorý sa má použiť. Mal by to byť koncový bod zodpovedajúci regiónu, ktorý ste vybrali v `amazon-s3.region`. Tento softvér nedokáže určiť správny koncový bod automaticky, pretože umiestnenia niektorých koncových bodov sú neštandardné.',
  'Admin Server' => 'Administrátorský server',
  'Wrong Column Type' => 'Nesprávny typ stĺpca',
  'You are running %s version "%s", which is older than the minimum required version, "%s". Update to at least "%s".' => 'Používate %s vo verzii „%s“, ktorá je staršia než minimálna požadovaná verzia „%s“. Aktualizujte aspoň na „%s“.',
  'Embed YouTube videos' => 'Vkladať videá z YouTube',
  'Add One Path' => 'Pridať jednu cestu',
  'Clear Cache' => 'Vymazať vyrovnávaciu pamäť',
  'Write access log here.' => 'Prístupový denník zapisovať sem.',
  'Unignore this setup issue?' => 'Zrušiť ignorovanie tohto problému s nastavením?',
  'Configure Mail.' => 'Nastavte poštu.',
  'Default User-Agent for outgoing HTTP requests made by this software.' => 'Predvolený User-Agent pre odchádzajúce požiadavky HTTP, ktoré vytvára tento softvér.',
  'What locale to use for command-line scripts that don\'t specify a `%s` argument.' => 'Aké národné prostredie sa má použiť pre skripty príkazového riadka, ktoré nešpecifikujú argument `%s`.',
  'You can update these %d value(s) here:' => array(
    'Túto hodnotu môžete aktualizovať tu:',
    'Tieto hodnoty môžete aktualizovať tu:',
  ),
  'Notification Servers' => 'Servery upozornení',
  'To enable the HTTP access log, specify a path. This log is more detailed than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).

If not set, no log will be written.' => 'Ak chcete zapnúť prístupový denník HTTP, zadajte cestu. Tento denník je podrobnejší než bežné prístupové denníky HTTP (napríklad môže zobraziť prihlásených používateľov, kontroléry a ďalšie údaje aplikácie).

Ak nie je nastavená, nebude sa zapisovať žiadny denník.',
  'extname' => 'extname',
  'Enable captchas with Recaptcha.' => 'Zapnúť captchy pomocou služby Recaptcha.',
  'This suggests your webserver is configured to decompress or mangle compressed requests.' => 'To naznačuje, že váš webový server je nastavený tak, aby komprimované požiadavky rozbaľoval alebo komolil.',
  'Add Multiple Paths' => 'Pridať viacero ciest',
  'Specify an activity to mark as completed.' => 'Zadajte aktivitu, ktorá sa má označiť ako dokončená.',
  'By default, this software links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => 'Tento softvér predvolene prepája názvy objektov v poliach Remarkup na zodpovedajúci objekt. Týmto regulárnym výrazom sa dá toto správanie zmeniť; názvy objektov, ktoré tomuto regulárnemu výrazu vyhovujú, sa nebudú prepájať.',
  'This server has a known bad version of "%s".' => 'Na tomto serveri je známa chybná verzia „%s“.',
  'Require DarkConsole Activation' => 'Vyžadovať aktiváciu DarkConsole',
  'Notifications Status' => 'Stav upozornení',
  'Use the %s to manage enabled applications.' => 'Na správu zapnutých aplikácií použite %s.',
  'Current Configuration' => 'Aktuálna konfigurácia',
  'Replicating Master' => 'Replikujúci hlavný server',
  'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).

Upgrade %s to a patched version.

To learn more about how this issue affects this software, see %s.' => 'Verzia %s v tomto systéme je zastaraná a obsahuje závažnú, široko zverejnenú zraniteľnosť (zraniteľnosť „Shellshock“).

Aktualizujte %s na opravenú verziu.

Ďalšie informácie o tom, ako tento problém ovplyvňuje tento softvér, nájdete v %s.',
  'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.' => 'Bez nastaveného časového pásma bude PHP pri práci s dátumami vypisovať varovania a dátumy a časy sa nemusia zobrazovať správne.',
  'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.' => 'Možnosť „%s“ je typu „%s“ a musí byť nastavená na zoznam platných regulárnych výrazov, ale „%s“ nie je platný regulárny výraz.',
  'This schema can use a better character set.' => 'Táto schéma môže používať lepšiu znakovú sadu.',
  'Configuration value "%s" is locked, but has a value in the database.' => 'Konfiguračná hodnota „%s“ je uzamknutá, ale má hodnotu v databáze.',
  'Newly registered accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access the server.

If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured the server to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.

NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => 'Novo zaregistrované účty možno buď zaradiť do frontu na manuálne schválenie administrátorom, alebo ich okamžite automaticky aktivovať. Front na schválenie je predvolene zapnutý, pretože vám dáva väčšiu kontrolu nad tým, kto si môže zaregistrovať účet a pristupovať k serveru.

Ak je vaša inštalácia úplne verejná alebo je vo VPN, alebo sa používatelia môžu registrovať len cez dôveryhodného poskytovateľa, ako je LDAP, prípadne ste server inak nastavili tak, aby zabránil neoprávnenej registrácii, môžete front vypnúť a znížiť tak administratívnu záťaž.

NOTE: Skôr než front vypnete, uistite sa, že @{config:auth.email-domains} je pre vašu inštaláciu nastavené správne!',
  'Determines whether or not YouTube videos get embedded.' => 'Určuje, či sa videá z YouTube vkladajú priamo do stránky.',
  'Allows you to add a footer with links in it to most pages. You might want to use these links to point at legal information or an about page.

Specify a list of dictionaries. Each dictionary describes a footer item. These keys are supported:

  - `name` The name of the item.
  - `href` Optionally, the link target of the item. You can     omit this if you just want a piece of text, like a copyright     notice.' => 'Umožňuje pridať na väčšinu stránok pätu s odkazmi. Tieto odkazy môžete použiť napríklad na to, aby smerovali na právne informácie alebo na stránku o projekte.

Zadajte zoznam slovníkov. Každý slovník popisuje jednu položku päty. Podporované sú tieto kľúče:

  - `name` Názov položky.
  - `href` Voliteľne cieľ odkazu položky. Tento kľúč môžete     vynechať, ak chcete len kus textu, napríklad oznam     o autorských právach.',
  'The known issues with this old version are:' => 'Známe problémy s touto starou verziou sú:',
  'Not Enabled' => 'Nie je zapnuté',
  'This software sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. This software sent username "%s" with password "%s"; received username "%s" and password "%s".

Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => 'Tento softvér si poslal testovaciu požiadavku s hlavičkou HTTP „Authorization“ a očakával, že sa tieto poverenia prenesú. Pri prijatí však chýbali alebo boli nesprávne. Tento softvér odoslal používateľské meno „%s“ s heslom „%s“; prijaté bolo používateľské meno „%s“ a heslo „%s“.

Váš webový server možno nie je nastavený tak, aby preposielal základné overovanie HTTP. Ak plánujete používať základné overovanie (napríklad na prístup k repozitárom), mali by ste ho prenastaviť.',
  'If you are using Amazon RDS, some of the instructions above may not apply to you. See %s for discussion of Amazon RDS.' => 'Ak používate Amazon RDS, niektoré z vyššie uvedených pokynov sa na vás nemusia vzťahovať. Diskusiu o Amazon RDS nájdete v %s.',
  'Controls whether email is sent "From" users.' => 'Určuje, či sa e-maily odosielajú s hlavičkou „From“ nastavenou na používateľov.',
  'The notification server no longer requires root permissions. Start the server as the user you want it to run under.' => 'Server upozornení už nevyžaduje oprávnenia roota. Spustite server pod používateľom, pod ktorým má bežať.',
  'This issue will no longer be suppressed, and will return to its rightful place as a global setup warning.' => 'Tento problém sa už nebude potláčať a vráti sa na svoje právoplatné miesto medzi globálnymi varovaniami o nastavení.',
  'Allows you to remove levity and jokes from the UI.' => 'Umožňuje odstrániť z rozhrania odľahčené prvky a vtipy.',
  'Sites' => 'Lokality',
  'T6185 "Shellshock" Bash Vulnerability' => 'T6185 – zraniteľnosť Bashu „Shellshock“',
  'Missing \'%s\' Extension' => 'Chýbajúce rozšírenie „%s“',
  'Retention policies for garbage collection.' => 'Zásady uchovávania pre zber odpadu.',
  'MySQL (on host "%s") is configured with a very small innodb_buffer_pool_size, which may impact performance.' => 'MySQL (na hostiteľovi „%s“) má nastavenú veľmi malú hodnotu innodb_buffer_pool_size, čo môže ovplyvniť výkon.',
  'You should upgrade this software.' => 'Mali by ste tento softvér aktualizovať.',
  'The following caches will be cleared:' => 'Vymažú sa tieto vyrovnávacie pamäte:',
  'Detected %s warning(s) with the schemata.' => array(
    'Zistilo sa varovanie v schémach.',
    'Zistili sa %s varovania v schémach.',
    'Zistilo sa %s varovaní v schémach.',
  ),
  'Deprecated mysql.host Format' => 'Zastaraný formát mysql.host',
  'This key is on the wrong columns.' => 'Tento kľúč je na nesprávnych stĺpcoch.',
  'Wrong Nullable Setting' => 'Nesprávne nastavenie povolenia hodnoty NULL',
  'Secret key for Amazon S3.' => 'Tajný kľúč pre Amazon S3.',
  'Trying to add duplicate column "%s"!' => 'Pokus o pridanie duplicitného stĺpca „%s“!',
  'Minimum password length.' => 'Minimálna dĺžka hesla.',
  'Required PHP extensions are not installed.' => 'Požadované rozšírenia PHP nie sú nainštalované.',
  'Database' => 'Databáza',
  'UNHEALTHY: This database has failed recent health checks. Traffic will not be sent to it until it recovers.' => 'UNHEALTHY: Táto databáza neprešla nedávnymi kontrolami zdravia. Kým sa neobnoví, nebude sa na ňu posielať prevádzka.',
  'Request input, in bytes.' => 'Vstup požiadavky v bajtoch.',
  'You enabled pygments but the %s script is not actually available, your %s is probably broken.' => 'Zapli ste pygments, ale skript %s v skutočnosti nie je dostupný, vaše %s je pravdepodobne chybné.',
  'Application Settings' => 'Nastavenia aplikácie',
  'Show email preferences link in email.' => 'Zobrazovať v e-maile odkaz na nastavenia e-mailu.',
  'Your webserver may have compression disabled.' => 'Váš webový server môže mať vypnutú kompresiu.',
  'The configured PATH includes a component which is not usable. This server will be unable to find or execute binaries located here:

%s

The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => 'Nastavená premenná PATH obsahuje komponent, ktorý sa nedá použiť. Tento server nebude môcť nájsť ani spustiť binárne súbory umiestnené tu:

%s

Používateľ, pod ktorým beží webový server, musí mať možnosť čítať všetky adresáre v premennej PATH, aby ich mohol využiť.',
  'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.' => 'Môžete nastaviť limit maximálnej veľkosti odchádzajúcej pošty v bajtoch. Pošta väčšia než tento limit sa pred odoslaním skráti. To sa môže hodiť, ak váš MTA odmieta poštu presahujúcu určitý limit (čo je pomerne bežné). Zadajte hodnotu v bajtoch.',
  'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => 'Viaceré podtriedy %s majú rovnaký kľúč („%s“): %s, %s.',
  'Your webserver is rewriting paths improperly.' => 'Váš webový server prepisuje cesty nesprávne.',
  'You can rebuild repository identities while the server is running.' => 'Identity repozitárov môžete znovu zostaviť aj počas behu servera.',
  'Customize the logo image and text which appears in the main site header:

  - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.

  - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.

' => 'Prispôsobte obrázok loga a text, ktoré sa zobrazujú v hlavnej hlavičke lokality:

  - **Obrázok loga**: Nahrajte nový obrázok s rozmermi 80 × 80 px, ktorý nahradí logo v hlavičke lokality.

  - **Slovná značka**: Vyberte nový text, ktorý sa zobrazí vedľa loga. Predvolene hlavička zobrazuje //%s//.',
  'Trying to add duplicate table "%s"!' => 'Pokus o pridanie duplicitnej tabuľky „%s“!',
  'No Authentication Providers Configured' => 'Nie sú nastavení žiadni poskytovatelia overenia',
  'Run Silently' => 'Spustiť potichu',
  'You can find more information about PHP configuration values in the %s.' => 'Ďalšie informácie o konfiguračných hodnotách PHP nájdete v %s.',
  'Skipping option "%s"; already in local config.' => 'Preskakuje sa možnosť „%s“; už je v lokálnej konfigurácii.',
  'Public email is now accepted if the associated address has a default author, and rejected otherwise.' => 'Verejná pošta sa teraz prijíma, ak má priradená adresa predvoleného autora, inak sa odmieta.',
  'Setup Issues' => 'Problémy s nastavením',
  'Require email verification' => 'Vyžadovať overenie e-mailu',
  'Resource minification is now managed automatically.' => 'Minifikácia zdrojov sa teraz spravuje automaticky.',
  'This software sometimes executes other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running this software (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.

Note that you can also put binaries in `%s` (for example, by symlinking them).

The current value of PATH after configuration is applied is:

  lang=text
  %s' => 'Tento softvér niekedy spúšťa na serveri iné binárne súbory. Príkladom je príkaz `%s`, ktorý sa používa na zvýrazňovanie syntaxe kódu napísaného v iných jazykoch než PHP. Predvolene sa predpokladá, že tieto binárne súbory sú v %s používateľa, pod ktorým tento softvér beží (zvyčajne „apache“, „httpd“ alebo „nobody“). Tu môžete pridať ďalšie adresáre do premennej prostredia %s pre prípad, že sa tieto binárne súbory nachádzajú na neštandardných miestach.

Majte na pamäti, že binárne súbory môžete umiestniť aj do `%s` (napríklad vytvorením symbolických odkazov).

Aktuálna hodnota premennej PATH po použití konfigurácie je:

  lang=text
  %s',
  'Whitespace rendering is now handled automatically.' => 'Vykresľovanie bielych znakov sa teraz spracúva automaticky.',
  '%s Not Working' => '%s nefunguje',
  'This configuration option is unknown. It may be misspelled, or have existed in a previous version of the software.' => 'Táto konfiguračná možnosť je neznáma. Môže byť preklepnutá alebo existovala v predchádzajúcej verzii softvéru.',
  'You can use \'%s\' if you don\'t want to create a full translation to give users an option for switching to it and you just want to override some strings in the default translation.' => 'Ak nechcete vytvárať úplný preklad, aby ste používateľom dali možnosť prepnúť sa naň, a chcete len prepísať niektoré reťazce v predvolenom preklade, môžete použiť „%s“.',
  'Connection' => 'Pripojenie',
  'Placeholder recipients are now generated automatically.' => 'Zástupní príjemcovia sa teraz generujú automaticky.',
  'Elasticsearch is configured (with the %s setting) but an exception was encountered when trying to test the index.

%s' => 'Elasticsearch je nastavený (nastavením %s), ale pri pokuse o otestovanie indexu nastala výnimka.

%s',
  'SSH keys are now actually useful, so they are always enabled.' => 'Kľúče SSH sú teraz naozaj užitočné, takže sú vždy zapnuté.',
  'Request output, in bytes.' => 'Výstup požiadavky v bajtoch.',
  'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => 'Konfiguračná možnosť „%s“ je neplatná. URI musí obsahovať bodku („.“), napríklad „%s“, nie len holý názov ako „%s“. Niektoré webové prehliadače nenastavia súbory cookie na doménach bez TLD.',
  'The Multimeter application collects performance samples. You can use this data to help you understand what the software is spending time and resources doing, and to identify problematic access patterns.

This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.

For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'Aplikácia Multimeter zbiera vzorky výkonu. Tieto údaje vám môžu pomôcť pochopiť, čím softvér trávi čas a zdroje, a odhaliť problematické vzory prístupu.

Táto možnosť určuje, ako často sa vzorkovanie aktivuje. Nastavte ju na kladné celé číslo N, aby sa vzorkovala každá 1 / N stránka.

Pre väčšinu inštalácií by predvolená hodnota (1 vzorka na 1000 stránok) mala zozbierať dosť údajov na to, aby boli užitočné, bez toho, aby si vyžadovala veľa úložiska alebo výrazne ovplyvnila výkon. Ak skúmate problémy s výkonom, môžete frekvenciu upraviť tak, aby sa zozbieralo viac údajov.',
  'Cache namespace.' => 'Menný priestor vyrovnávacej pamäte.',
  '%s = 0' => '%s = 0',
  'Unsafe PHP "Local Infile" Configuration' => 'Nebezpečná konfigurácia PHP „Local Infile“',
  'Custom remarkup rules are now added by subclassing %s or %s.' => 'Vlastné pravidlá remarkupu sa teraz pridávajú vytvorením podtriedy %s alebo %s.',
  'Issue Resolved' => 'Problém vyriešený',
  'If you enable this, linked Commons videos will be embedded inline.' => 'Ak toto zapnete, odkazované videá z Commons sa vložia priamo do stránky.',
  'Garbage collectors are now configured with "%s".' => 'Zberače odpadu sa teraz nastavujú pomocou „%s“.',
  'Unknown configuration option type "%s".' => 'Neznámy typ konfiguračnej možnosti „%s“.',
  'Trying to add duplicate database "%s"!' => 'Pokus o pridanie duplicitnej databázy „%s“!',
  'This column has the wrong autoincrement setting.' => 'Tento stĺpec má nesprávne nastavenie automatického zvyšovania.',
  'Allows you to add footer links on most pages.' => 'Umožňuje pridať na väčšinu stránok odkazy v päte.',
  'USWest Region' => 'Región USWest',
  'Maniphest fields are now defined in `%s`. Existing definitions have been migrated.' => 'Polia Maniphestu sa teraz definujú v `%s`. Existujúce definície boli migrované.',
  'Enable Prototypes' => 'Zapnúť prototypy',
  'Elasticsearch is now configured with "%s".' => 'Elasticsearch sa teraz nastavuje pomocou „%s“.',
  'Configuring Outbound Email' => 'Nastavenie odchádzajúcej pošty',
  'Inbound mail addresses are now configured for each application in the Applications tool.' => 'Adresy prichádzajúcej pošty sa teraz nastavujú pre každú aplikáciu v nástroji Aplikácie.',
  'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see https://www.google.com/recaptcha' => 'Zapnite recaptchu, aby museli používatelia po niekoľkých neúspešných pokusoch o prihlásenie riešiť captchy. Sťažuje to útoky hrubou silou na heslá používateľov. Ďalšie informácie nájdete na https://www.google.com/recaptcha',
  'Partial \'%s\' Support' => 'Čiastočná podpora „%s“',
  'Subschemata have setup warnings.' => 'Podschémy majú varovania o nastavení.',
  'Uptime' => 'Doba prevádzky',
  'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.' => 'MySQL (na hostiteľovi „%s“) používa predvolený súbor so zastavovacími slovami, čo znemožní vyhľadávanie mnohých bežných slov.',
  'Two setup checks raised an issue with key \'%s\'!' => 'Dve kontroly nastavenia nahlásili problém s kľúčom „%s“!',
  'Mark activities complete even if there is no outstanding need to complete them.' => 'Označiť aktivity ako dokončené, aj keď ich nie je potrebné dokončiť.',
  'You likely enabled cluster.search without creating the index. Use the following command to create a new index.' => 'Pravdepodobne ste zapli cluster.search bez vytvorenia indexu. Nový index vytvoríte nasledujúcim príkazom.',
  'Skipping option "%s"; already in database config.' => 'Preskakuje sa možnosť „%s“; už je v konfigurácii v databáze.',
  'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.

(If you already created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => 'Nástroj „InnoDB“ nie je v MySQL (na hostiteľovi „%s“) k dispozícii. Zapnite InnoDB vo svojej konfigurácii MySQL.

(Ak ste už tabuľky vytvorili, MySQL na ich vytvorenie nesprávne použilo nejaký iný nástroj. Musíte ich skonvertovať alebo zahodiť a znovu inicializovať.)',
  'This software is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.

Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => 'Tento softvér je momentálne nastavený tak, aby poskytoval súbory nahraté používateľmi priamo z rovnakej domény ako ostatný obsah. Je to bezpečnostné riziko.

Toto riziko odstránite nastavením CDN (alebo alternatívnej domény pre súbory). Použitie CDN zároveň zlepší výkon. Pokyny nájdete v príručke nižšie.',
  '%s Stats' => 'Štatistiky %s',
  'The minimum supported version of Subversion is 1.5, which was released in 2008.' => 'Minimálna podporovaná verzia Subversionu je 1.5, ktorá vyšla v roku 2008.',
  'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.' => 'Váš limit pamäte PHP je nastavený tak, že vám môže brániť nahrávať veľké súbory alebo spracúvať veľké požiadavky.',
  'The system user.' => 'Systémový používateľ.',
  'Reload Page' => 'Znovu načítať stránku',
  'Force users to connect via HTTPS instead of HTTP.' => 'Prinútiť používateľov pripájať sa cez HTTPS namiesto HTTP.',
  'Large Files' => 'Veľké súbory',
  'Compressed Requests Not Received Properly' => 'Komprimované požiadavky sa neprijímajú správne',
  'The namespace that databases should use.' => 'Menný priestor, ktorý majú databázy používať.',
  'Mark a manual upgrade activity as complete.' => 'Označiť manuálnu aktualizačnú aktivitu ako dokončenú.',
  '%s Not Set' => '%s nie je nastavené',
  'This configuration option has been replaced with a modular handler. See T9346.' => 'Táto konfiguračná možnosť bola nahradená modulárnou obsluhou. Pozri T9346.',
  'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)' => 'Hodnota možnosti „%s“ (typu „%s“) sa musí zadať vo formáte JSON, ale vstup sa nepodarilo dekódovať. (Nezabudli ste dať reťazec do úvodzoviek?)',
  'Configuration option \'%s\' has invalid value and was restored to the default: %s' => 'Konfiguračná možnosť „%s“ má neplatnú hodnotu a bola obnovená na predvolenú: %s',
  'To update these %d value(s), edit your PHP configuration file, located here:' => array(
    'Ak chcete aktualizovať túto hodnotu, upravte svoj konfiguračný súbor PHP, ktorý sa nachádza tu:',
    'Ak chcete aktualizovať tieto hodnoty, upravte svoj konfiguračný súbor PHP, ktorý sa nachádza tu:',
  ),
  'Collation' => 'Porovnávanie',
  'Replication' => 'Replikácia',
  'The HTTP response code or process exit code.' => 'Kód odpovede HTTP alebo návratový kód procesu.',
  'Obsolete; use standard rendering events instead.' => 'Zastarané; namiesto toho použite štandardné udalosti vykresľovania.',
  'Local Disk Storage' => 'Lokálne diskové úložisko',
  'Constant' => 'Konštanta',
  'Issue' => 'Problém',
  'Determines which URI protocols are valid for links and redirects.' => 'Určuje, ktoré protokoly URI sú platné pre odkazy a presmerovania.',
  'Configuration Guide: Configuring a File Domain' => 'Príručka konfigurácie: Nastavenie domény pre súbory',
  'Activate DarkConsole on every page.' => 'Aktivovať DarkConsole na každej stránke.',
  'Enable verbose error reporting and disk reads.' => 'Zapnúť podrobné hlásenie chýb a čítanie z disku.',
  'This software sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.' => 'Tento softvér si poslal testovaciu požiadavku komprimovanú pomocou „Content-Encoding: gzip“, ale prijal iné bajty, než odoslal.',
  'Mail object address hash keys are now generated automatically.' => 'Kľúče hashu adries poštových objektov sa teraz generujú automaticky.',
  'Too many arguments: expected one key and one value.' => 'Príliš veľa argumentov: očakával sa jeden kľúč a jedna hodnota.',
  'Settings History' => 'História nastavení',
  'Opcode' => 'Opcode',
  'To update these %d value(s), edit your PHP configuration file.' => array(
    'Ak chcete aktualizovať túto %d hodnotu, upravte svoj konfiguračný súbor PHP.',
    'Ak chcete aktualizovať tieto %d hodnoty, upravte svoj konfiguračný súbor PHP.',
    'Ak chcete aktualizovať týchto %d hodnôt, upravte svoj konfiguračný súbor PHP.',
  ),
  'Auth provider config must be unlocked before editing' => 'Konfigurácia poskytovateľa overenia sa musí pred úpravou odomknúť',
  'Enable Recaptcha' => 'Zapnúť Recaptchu',
  'Prefix cookie with "%s"' => 'Pridať k súboru cookie predponu „%s“',
  'The configuration option "%s" is not recognized. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.' => 'Konfiguračná možnosť „%s“ nie je rozpoznaná. Môže byť preklepnutá alebo mohla existovať v staršej verzii softvéru. Nemá žiadny účinok a mala by sa opraviť alebo odstrániť.',
  'You can rebuild the search index while the server is running.' => 'Vyhľadávací index môžete znovu zostaviť aj počas behu servera.',
  'Migrated option "%s" from file to database config.' => 'Možnosť „%s“ bola migrovaná zo súborovej konfigurácie do databázovej.',
  'PHP Documentation' => 'Dokumentácia PHP',
  'Your webserver produced an unexpected response.' => 'Váš webový server vrátil neočakávanú odpoveď.',
  'Unable to determine the version number of "%s".' => 'Nedá sa určiť číslo verzie „%s“.',
  'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless @{config:auth.email-domains} is nonempty.' => 'Ak je nastavené na true, e-mailové adresy musia byť pred prihlásením používateľa overené (kliknutím na odkaz v e-maile). Predvolene je overenie voliteľné, pokiaľ nie je @{config:auth.email-domains} neprázdne.',
  'PHP OPcache Documentation' => 'Dokumentácia PHP OPcache',
  'Daemons Are Not Running' => 'Démoni nebežia',
  'Cluster: Databases' => 'Klaster: Databázy',
  'No Messages' => 'Žiadne správy',
  'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.' => 'Položka päty s indexom „%s“ je neplatná: každá položka musí byť slovník popisujúci položku päty.',
  'None of the caches on this page can be cleared.' => 'Žiadnu z vyrovnávacích pamätí na tejto stránke nemožno vymazať.',
  'Require email verification before a user can log in.' => 'Vyžadovať overenie e-mailu pred prihlásením používateľa.',
  'Master' => 'Hlavný server',
  'A Troublesome Encounter!' => 'Nepríjemné stretnutie!',
  'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => 'Indexovací algoritmus pre fulltextový vyhľadávací index bol aktualizovaný a index je potrebné znovu zostaviť. Kým index znovu nezostavíte, globálne vyhľadávanie (a ďalšie fulltextové vyhľadávanie) nebude fungovať správne.',
  'Maximum taskmaster daemon pool size.' => 'Maximálna veľkosť fondu démonov taskmaster.',
  'Replica' => 'Replika',
  'Use Public Replies (Less Secure)' => 'Používať verejné odpovede (menej bezpečné)',
  'MySQL password to use when connecting to the database.' => 'Heslo MySQL, ktoré sa má použiť pri pripájaní k databáze.',
  'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'' => 'Ak premenná nie je k dispozícii (napríklad %%m sa vyskytuje vo formáte súboru, ale požiadavka nie je požiadavkou Conduit), vykreslí sa ako „-“',
  'CSRF HMAC keys are now managed automatically.' => 'Kľúče HMAC pre CSRF sa teraz spravujú automaticky.',
  'Database Status' => 'Stav databázy',
  'The request body that was received began:' => 'Prijaté telo požiadavky začínalo:',
  'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s' => 'Hodnota možnosti „%s“ (typu „%s“) sa musí zadať vo formáte JSON, ale vstup sa nepodarilo dekódovať: %s',
  'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.' => 'Databázový hostiteľ „%s“ má nastavený stav klastra, ktorý nesúhlasí so stavom na tomto hostiteľovi („%s“). Spustením `bin/storage partition` potvrdíte lokálny stav do klastra. Tento hostiteľ mohol byť spustený so zastaranou konfiguráciou.',
  'Normally, this software issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, an interstitial page will be shown instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => 'Tento softvér zvyčajne po úspešnom POST vydá presmerovanie HTTP. To môže sťažiť ladenie vecí, ktoré sa dejú počas spracúvania POST, pretože informácie o službách a profilovaní sa stratia. Nastavením tejto konfiguračnej možnosti sa namiesto automatického presmerovania zobrazí medzistránka, ktorá vám umožní preskúmať informácie o službách a profilovaní. Zároveň to výrazne zhoršuje používateľský zážitok, takže by ste to mali zapínať len pri ladení.',
  'Largest' => 'Najväčšie',
  'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.

If you are running a cluster, this limit applies separately to each instance of `phd`. For example, if this limit is set to `4` and you have three hosts running daemons, the effective global limit will be 12.

After changing this value, you must restart the daemons. Most configuration changes are picked up by the daemons automatically, but pool sizes can not be changed without a restart.' => 'Maximálny počet démonov taskmaster, ktoré môžu bežať naraz. Zvýšením tejto hodnoty môžete zvýšiť maximálnu priepustnosť frontu úloh. Fond sa pri nevyužívaní automaticky zmenší.

Ak prevádzkujete klaster, tento limit sa uplatňuje samostatne na každú inštanciu `phd`. Napríklad ak je tento limit nastavený na `4` a démonov prevádzkujete na troch hostiteľoch, efektívny globálny limit bude 12.

Po zmene tejto hodnoty musíte démonov reštartovať. Väčšinu zmien konfigurácie démoni zachytia automaticky, ale veľkosti fondov sa bez reštartu zmeniť nedajú.',
  'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.' => 'Vaša verzia MySQL (na databázovom hostiteľovi „%s“) nepodporuje nastavenie súboru so zastavovacími slovami. Nebudete môcť vyhľadávať výsledky pre bežné slová.',
  'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'Vaša konfigurácia PHP vyberá neplatné časové pásmo. Vyberte platné časové pásmo.',
  '%s deleted this configuration entry (again?).' => '%s odstránil(a) túto konfiguračnú položku (znova?).',
  'There is some deprecated code found in the code-base.' => 'V kódovej základni sa našiel zastaraný kód.',
  'Unresolved Setup Issues' => 'Nevyriešené problémy s nastavením',
  'Server Timezone Not Configured' => 'Časové pásmo servera nie je nastavené',
  'The following regex is malformed and cannot be used: %s' => 'Nasledujúci regulárny výraz je poškodený a nedá sa použiť: %s',
  'Individual application reply handler domains have been removed. Configure a reply domain with "%s".' => 'Domény obsluhy odpovedí pre jednotlivé aplikácie boli odstránené. Doménu na odpovede nastavte pomocou „%s“.',
  'Preflight' => 'Preflight',
  'Install these %d PHP extension(s):' => array(
    'Nainštalujte toto rozšírenie PHP:',
    'Nainštalujte tieto rozšírenia PHP:',
  ),
  'Missing \'%s\' Binary' => 'Chýbajúci binárny súbor „%s“',
  'Charset' => 'Znaková sada',
  '\'%s\' or \'%s\' binary not found or Imagemagick is not installed.' => 'Binárny súbor „%s“ ani „%s“ sa nenašiel alebo Imagemagick nie je nainštalovaný.',
  'By default, this software generates unique reply-to addresses and sends a
separate email to each recipient when you enable reply handling. This is more
secure than using "From" to establish user identity, but can mean users may
receive multiple emails when they are on mailing lists. Instead, you can use a
single, non-unique reply to address and authenticate users based on the "From"
address by setting this to \'true\'. This trades away a little bit of security
for convenience, but it\'s reasonable in many installs. Object interactions are
still protected using hashes in the single public email address, so objects
can not be replied to blindly.' => 'Tento softvér predvolene generuje jedinečné adresy na odpovede a pri zapnutom
spracúvaní odpovedí odosiela každému príjemcovi samostatný e-mail. Je to
bezpečnejšie než určovať identitu používateľa podľa hlavičky „From“, no môže to
znamenať, že používatelia dostanú viacero e-mailov, keď sú v mailingových
zoznamoch. Namiesto toho môžete použiť jedinú, nejedinečnú adresu na odpovede
a overovať používateľov podľa adresy „From“ tak, že toto nastavíte na „true“.
Vymieňate tým trochu bezpečnosti za pohodlie, no v mnohých inštaláciách je to
rozumné. Interakcie s objektmi sú aj naďalej chránené hashmi v jedinej verejnej
e-mailovej adrese, takže na objekty sa nedá odpovedať naslepo.',
  'The framable public feed is no longer supported.' => 'Verejný kanál, ktorý sa dá vložiť do rámca, sa už nepodporuje.',
  'A random, unique string which identifies the request.' => 'Náhodný, jedinečný reťazec, ktorý identifikuje požiadavku.',
  'Auth provider config can be edited without unlocking' => 'Konfiguráciu poskytovateľa overenia možno upravovať bez odomknutia',
  'Disable unsafe option "%s" in PHP configuration.' => 'Vypnite nebezpečnú možnosť „%s“ v konfigurácii PHP.',
  '%s Day(s)' => array(
    '%s deň',
    '%s dni',
    '%s dní',
  ),
  'PHP version: %s' => 'Verzia PHP: %s',
  'No search servers are configured.' => 'Nie sú nastavené žiadne vyhľadávacie servery.',
  'DarkConsole is a development and profiling tool built into the web interface. You should leave it disabled unless you are developing or debugging %s.

Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.

DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole je vývojársky a profilovací nástroj zabudovaný do webového rozhrania. Mali by ste ho nechať vypnutý, pokiaľ nevyvíjate alebo neladíte %s.

Keď DarkConsole pre inštaláciu aktivujete, **musíte ho ešte zapnúť pre svoj účet, kým sa na stránkach skutočne objaví.** Urobíte to v časti Nastavenia > Vývojárske nastavenia.

DarkConsole odhaľuje potenciálne citlivé údaje (napríklad dopyty, výpisy zásobníka a konfiguráciu), takže by ste ho vo všeobecnosti nemali zapínať v produkčnom prostredí.',
  'This key is too long for utf8mb4.' => 'Tento kľúč je pre utf8mb4 príliš dlhý.',
  'Expected Character Set' => 'Očakávaná znaková sada',
  'Repository Servers' => 'Servery repozitárov',
  'Format for the HTTP access log. Use `%s` to set the path. Available variables are:' => 'Formát prístupového denníka HTTP. Na nastavenie cesty použite `%s`. Dostupné premenné sú:',
  'Skipping obsolete option: %s' => 'Preskakuje sa zastaraná možnosť: %s',
  'This schema can use a better collation.' => 'Táto schéma môže používať lepšie porovnávanie.',
  'Install Pygments to Improve Syntax Highlighting' => 'Nainštalujte Pygments a zlepšite zvýrazňovanie syntaxe',
  'Sessions now expire and are garbage collected rather than having an arbitrary concurrency limit.' => 'Relácie teraz vypršia a odstránia sa zberom odpadu namiesto toho, aby mali ľubovoľný limit súbežnosti.',
  'Logo Image' => 'Obrázok loga',
  'Really Clear Cache' => 'Naozaj vymazať vyrovnávaciu pamäť',
  'Unexpected \'%s\' Behavior' => 'Neočakávané správanie „%s“',
  'Mail thread IDs are now generated automatically.' => 'Identifikátory poštových vlákien sa teraz generujú automaticky.',
  'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the %s configuration value \'%s\' to specify one.' => 'Vaša konfigurácia neurčuje časové pásmo servera. Môžete ho určiť buď nastavením konfiguračnej hodnoty PHP „%s“, alebo konfiguračnej hodnoty %s „%s“.',
  'Enable HTTP Strict Transport Security (HSTS).' => 'Zapnúť HTTP Strict Transport Security (HSTS).',
  'OVERRIDDEN' => 'PREPÍSANÉ',
  'This server has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => 'Tento server má %s dostupné v %s, ale binárny súbor pri spustení ako %s skončil s chybovým kódom. Skontrolujte, či je nainštalovaný správne.',
  'Users can configure a URI pattern to open files in a text editor. The URI must use a protocol on this whitelist.' => 'Používatelia si môžu nastaviť vzor URI na otváranie súborov v textovom editore. URI musí používať protokol z tohto zoznamu povolených.',
  'Config' => 'Konfigurácia',
  'Transaction mail is now always sent with "Precedence: bulk" to improve deliverability.' => 'Transakčná pošta sa teraz vždy odosiela s hlavičkou „Precedence: bulk“, aby sa zlepšila doručiteľnosť.',
  'Retention Policy' => 'Zásada uchovávania',
  'Without \'%s\', this software can not test for the availability of other binaries.' => 'Bez „%s“ nemôže tento softvér testovať dostupnosť ďalších binárnych súborov.',
  'HTTP Basic Auth Not Configured' => 'Základné overovanie HTTP nie je nastavené',
  'Whitelist 1.2.*.*' => 'Povoliť 1.2.*.*',
  'Highlight httpd.conf as "apacheconf".' => 'Zvýrazňovať httpd.conf ako „apacheconf“.',
  'Database Value' => 'Hodnota v databáze',
  'US Mountain (MDT)' => 'US Mountain (MDT)',
  'This option has been replaced with `ui.logo`, which provides more flexible configuration options.' => 'Táto možnosť bola nahradená možnosťou `ui.logo`, ktorá poskytuje flexibilnejšie možnosti nastavenia.',
  'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.

Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.

To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.

To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:

%s
(You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)' => 'Databázový hostiteľ „%s“ používa na zostavovanie vyhľadávacích indexov vstavaný súbor so zastavovacími slovami. To môže znížiť užitočnosť vyhľadávania.

Zastavovacie slová sú bežné slová, ktoré sa neindexujú, a preto sa nedajú vyhľadať. Predvolený súbor so zastavovacími slovami obsahuje asi 500 slov vrátane rôznych slov, ktoré pravdepodobne budete chcieť vyhľadávať, napríklad „various“, „likely“, „wish“ a „zero“.

Aby bolo vyhľadávanie užitočnejšie, môžete použiť alternatívny súbor so zastavovacími slovami s menším počtom slov. Ak vám na vyhľadávaní bežných slov nezáleží, môžete toto varovanie aj ignorovať. Ignorovať ho môžete aj vtedy, ak neskôr plánujete nastaviť Elasticsearch: tento súbor so zastavovacími slovami ovplyvňuje iba fulltextové indexy MySQL.

Ak chcete vybrať iný súbor so zastavovacími slovami, pridajte toto do svojho súboru %s (do sekcie %s) a potom reštartujte %s:

%s
(Ak chcete, môžete použiť aj iný súbor. Súbor navrhnutý vyššie obsahuje asi 50 najbežnejších anglických slov.)',
  'Rebuild Search Index' => 'Znovu zostaviť vyhľadávací index',
  'This User-Agent will be used for most outgoing HTTP requests. When unset, the base URI will be used, with a " %s/1.0" suffix.' => 'Tento User-Agent sa použije pre väčšinu odchádzajúcich požiadaviek HTTP. Ak nie je nastavený, použije sa základné URI s príponou „ %s/1.0“.',
  'Do not install this software on an instance class with burstable CPU.' => 'Neinštalujte tento softvér na inštanciu triedy s nárazovým výkonom CPU.',
  'Real' => 'Skutočný',
  'Partition: %s' => 'Oddiel: %s',
  'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => 'Toto je zoznam regulárnych výrazov na prepísanie, ktorý vám umožňuje vybrať, ako jazykovo sa majú súbory zvýrazňovať. Ak majú vaše projekty určité pravidlá pre názvy súborov alebo používajú neobvyklé či nejednoznačné jazykové prípony, môžete tu vytvoriť mapovanie. Ide o usporiadaný slovník regulárnych výrazov, ktoré sa budú testovať oproti názvu súboru. Mali by sa mapovať buď na výslovný jazyk ako reťazcovú hodnotu, alebo na číselný index zachytenej skupiny ako celé číslo.',
  'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.

Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies @{config:auth.require-email-verification}.

You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.' => 'Povolené e-mailové adresy môžete obmedziť na určité domény (napríklad `yourcompany.com`) tak, že tu nastavíte zoznam povolených domén.

Používatelia sa budú môcť registrovať len pomocou e-mailových adries v niektorej z týchto domén a budú si môcť pridávať nové e-mailové adresy len pre tieto domény. Ak toto nastavíte, znamená to zároveň @{config:auth.require-email-verification}.

Z domén vynechajte `@`. Majte na pamäti, že doména sa musí zhodovať presne. Ak povolíte `yourcompany.com`, povolí to `joe@yourcompany.com`, ale odmietne `joe@mail.yourcompany.com`.',
  'Show unresolved issues with setup and configuration.' => 'Zobrazte nevyriešené problémy s nastavením a konfiguráciou.',
  'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and this software does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.

Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.

You may be able to resolve this issue by updating this server, since a newer version of the software is likely to be able to parse the newer version string.

If updating the software does not fix this, you can report the issue to the upstream so we can adjust the parser.

If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => 'Nedá sa určiť číslo verzie „%s“. Zvyčajne to znamená, že program nedávno zmenil formát reťazca s verziou a tento softvér zatiaľ nevie, ako ho analyzovať, no môže to naznačovať aj to, že máte veľmi starý (alebo poškodený) binárny súbor.

Keďže sa číslo verzie nedá určiť, kontroly voči minimálnym a známym chybným verziám sa preskočia, takže sa nám nemusí podariť odhaliť nekompatibilný binárny súbor.

Tento problém možno vyriešite aktualizáciou tohto servera, pretože novšia verzia softvéru bude pravdepodobne vedieť novší reťazec s verziou analyzovať.

Ak to aktualizácia softvéru nevyrieši, môžete problém nahlásiť upstreamu, aby sme analyzátor upravili.

Ak ste si istí, že máte nainštalovanú nedávnu verziu „%s“ a funguje správne, toto varovanie je zvyčajne bezpečné ignorovať.',
  'For conduit, the Conduit method which was invoked.' => 'Pri conduite metóda Conduit, ktorá bola vyvolaná.',
  'The configuration option \'%s\' is not set.' => 'Konfiguračná možnosť „%s“ nie je nastavená.',
  'Locale code of command-line locale.' => 'Kód národného prostredia pre príkazový riadok.',
  'Stop Before HTTP Redirect' => 'Zastaviť pred presmerovaním HTTP',
  'Developer / Debugging' => 'Vývoj / ladenie',
  'You have enabled Imagemagick in your config, but the \'%s\' or \'%s\' binary is not in the webserver\'s %s. Disable imagemagick or make it available to the webserver.' => 'Vo svojej konfigurácii ste zapli Imagemagick, ale binárny súbor „%s“ ani „%s“ nie je v %s webového servera. Vypnite imagemagick alebo ho sprístupnite webovému serveru.',
  'Remove PHP %s' => 'Odstrániť PHP %s',
  'Missing' => 'Chýba',
  'Classes must match to compare schemata!' => 'Na porovnanie schém sa musia zhodovať triedy!',
  'Set the URI where this software is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => 'Nastavte URI, na ktorom je tento softvér nainštalovaný. Toto nastavenie zvyšuje bezpečnosť tým, že bráni nastavovaniu súborov cookie na iných doménach, a umožňuje démonom odosielať e-maily s odkazmi so správnou doménou.',
  'Elasticsearch Index Not Found' => 'Index Elasticsearchu sa nenašiel',
  'Unit test value.' => 'Hodnota pre jednotkový test.',
  'A daemon is running as user %s, but daemons should be running as %s.

Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.' => 'Démon beží pod používateľom %s, ale démoni by mali bežať pod %s.

Alebo upravte konfiguračné nastavenie %s, alebo démonov reštartujte. Démoni by sa po reštarte mali pokúsiť bežať pod správnym používateľom.',
  'Missing Key' => 'Chýbajúci kľúč',
  'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.

There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed this software on, you might set this value to %s.

You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to this software which make it different from normal workloads with respect to this setting.

To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:

%s
If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => 'Databázový hostiteľ „%s“ má nastavenú veľmi malú hodnotu %s (%s). Môže to spôsobiť slabý výkon databázy a vyčerpanie zámkov.

Na nastavenie vhodnej hodnoty neexistujú žiadne pevné pravidlá, ale rozumným východiskovým bodom pre bežnú inštaláciu je približne 40 %% celkovej pamäte stroja. Napríklad ak má stroj, na ktorý ste tento softvér nainštalovali, 4 GB RAM, mohli by ste túto hodnotu nastaviť na %s.

Viac o tejto možnosti sa dočítate v dokumentácii MySQL, ktorá vám pomôže rozhodnúť sa, ako ju nastaviť pre váš prípad použitia. Neexistujú žiadne špecifiká tohto softvéru, ktoré by ho vzhľadom na toto nastavenie odlišovali od bežných záťaží.

Ak chcete nastavenie upraviť, pridajte niečo takéto do svojho súboru %s (do sekcie %s) a nahraďte %s hodnotou vhodnou pre vášho hostiteľa a váš prípad použitia. Potom reštartujte %s:

%s
Ak ste s aktuálnym nastavením spokojní, môžete toto varovanie o nastavení pokojne ignorovať.',
  'Expected Nullable' => 'Očakávané povolenie hodnoty NULL',
  'Syntax highlighting is supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.

To install Pygments, visit [[ https://pygments.org/ | pygments.org ]] and follow the download and install instructions.

Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.

After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Zvýrazňovanie syntaxe je predvolene podporované pre niekoľko jazykov, no môžete nainštalovať Pygments (nástroj tretej strany na zvýrazňovanie syntaxe) a získať tak podporu mnohých ďalších jazykov.

Ak chcete Pygments nainštalovať, navštívte [[ https://pygments.org/ | pygments.org ]] a postupujte podľa pokynov na stiahnutie a inštaláciu.

Keď je Pygments nainštalovaný, zapnite túto možnosť (`pygments.enabled`), aby sa Pygments pri zvýrazňovaní zdrojového kódu využíval.

Po inštalácii a zapnutí Pygments by sa mal novo vytvorený zdrojový kód (napríklad diffy a vložené texty) zvýrazňovať správne. Aby sa správne zvýrazňoval aj skôr existujúci zdrojový kód, možno budete musieť vymazať vyrovnávacie pamäte. Pokyny na správu vyrovnávacích pamätí nájdete v [[ %s | Správa vyrovnávacích pamätí ]].',
  'Disable SSH log.' => 'Vypnúť denník SSH.',
  'Set a string this software should use to prefix cookie names.' => 'Nastavte reťazec, ktorý má tento softvér použiť ako predponu názvov súborov cookie.',
  'No databases have any issues.' => 'Žiadne databázy nemajú problémy.',
  'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make this service redirect HTTP requests to HTTPS.

Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.

IMPORTANT: A request is identified as HTTP or HTTPS by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.

If you configure clustering, note that this setting is ignored by intracluster requests.' => 'Ak webový server odpovedá na požiadavky HTTP aj HTTPS, no chcete, aby sa používatelia pripájali len cez HTTPS, môžete toto nastaviť na `true` a táto služba bude požiadavky HTTP presmerúvať na HTTPS.

Za normálnych okolností by ste mali server jednoducho nastaviť tak, aby prevádzku HTTP neprijímal, no toto nastavenie sa môže hodiť, ak ste pôvodne používali HTTP a teraz ste prešli na HTTPS, ale nechcete pokaziť staré odkazy, prípadne ak váš webový server stojí za vyrovnávačom záťaže, ktorý ukončuje pripojenia HTTPS, a nedá sa tam rozumne nastaviť jemnejšie správanie.

IMPORTANT: Požiadavka sa identifikuje ako HTTP alebo HTTPS preskúmaním premennej PHP `%s`. Ak prevádzkujete Apache/mod_php, pravdepodobne bude nastavená správne automaticky, no ak beží ako CGI/FCGI (napríklad cez nginx alebo lighttpd), musíte svoj webový server nastaviť tak, aby hodnotu odovzdával správne podľa typu pripojenia.

Ak nastavujete klaster, majte na pamäti, že vnútroklastrové požiadavky toto nastavenie ignorujú.',
  'Option "%s" is of type "%s", but the configured value is not an integer.' => 'Možnosť „%s“ je typu „%s“, ale nastavená hodnota nie je celé číslo.',
  'Notifications no longer have a dedicated debugging mode.' => 'Upozornenia už nemajú vyhradený režim ladenia.',
  'Daemon Running as Wrong User' => 'Démon beží pod nesprávnym používateľom',
  'This software sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".

Your webserver is configured incorrectly and large parts of this software will not work until this issue is corrected.

(This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'Tento softvér si poslal testovaciu požiadavku s parametrom HTTP GET, ale parameter sa nepreniesol. Odoslané bolo „%s“ s hodnotou „%s“, prijaté „%s“ s hodnotou „%s“.

Váš webový server je nastavený nesprávne a veľké časti tohto softvéru nebudú fungovať, kým sa tento problém neopraví.

(Tento problém môže spôsobiť chýbajúce „QSA“ vo vašom pravidle RewriteRule.)',
  'MySQL is not in strict mode (on host "%s"), but using strict mode is recommended.' => 'MySQL nie je v striktnom režime (na hostiteľovi „%s“), no používanie striktného režimu sa odporúča.',
  'This ancient extension point has been replaced with other mechanisms, including "AphrontSite".' => 'Tento prastarý bod rozšírenia bol nahradený inými mechanizmami vrátane „AphrontSite“.',
  'You enabled Elasticsearch but the index does not exist.' => 'Zapli ste Elasticsearch, ale index neexistuje.',
  '%s Not Found' => '%s sa nenašlo',
  'Write SSH error log here.' => 'Chybový denník SSH zapisovať sem.',
  'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.' => 'Vaša konfigurácia `%s` obsahuje číslo portu, no toto použitie je zastarané. Číslo portu namiesto toho uveďte v `%s`.',
  'Elasticsearch Index Schema Mismatch' => 'Nezhoda schémy indexu Elasticsearchu',
  'Column has Wrong Autoincrement' => 'Stĺpec má nesprávne automatické zvyšovanie',
  'Enable the debugging console.' => 'Zapnúť ladiacu konzolu.',
  'Specify the configuration key you want to set.' => 'Zadajte konfiguračný kľúč, ktorý chcete nastaviť.',
  'Memory Limit Restricts File Uploads' => 'Limit pamäte obmedzuje nahrávanie súborov',
  'Cache Entries' => 'Položky vyrovnávacej pamäte',
  'Unknown column type "%s"!' => 'Neznámy typ stĺpca „%s“!',
  'The minimum supported version of Git on the server is %s, which was released in %s. In older versions, the Git server may not be able to escape arguments with the "--" operator. Note: your users do not require a particular version of Git.' => 'Minimálna podporovaná verzia Gitu na serveri je %s, ktorá vyšla v %s. V starších verziách nemusí server Git vedieť escapovať argumenty operátorom „--“. Poznámka: vaši používatelia nepotrebujú konkrétnu verziu Gitu.',
  'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.' => 'Nastavené umiestnenie na ukladanie nahratých súborov na disk („%s“) neexistuje alebo nie je čitateľné či zapisovateľné. Overte, že adresár existuje a že je preň webový server čitateľný a zapisovateľný.',
  'Notifications User Guide: Setup and Configuration' => 'Používateľská príručka k upozorneniam: Nastavenie a konfigurácia',
  'This software sent itself a test request with the "X-Setup-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:

%s

Something is misconfigured or otherwise mangling responses.' => 'Tento softvér si poslal testovaciu požiadavku s hlavičkou „X-Setup-SelfCheck“ a očakával, že dostane späť platnú odpoveď vo formáte JSON. Odpoveď však začína takto:

%s

Niečo je nesprávne nastavené alebo inak komolí odpovede.',
  'Key is Too Long' => 'Kľúč je príliš dlhý',
  '\'%s\' Missing' => 'Chýba „%s“',
  'Configure database read replicas.' => 'Nastavte repliky databázy na čítanie.',
  'Elasticsearch Misconfigured' => 'Elasticsearch je nastavený nesprávne',
  'Amazon S3 is Only Partially Configured' => 'Amazon S3 je nastavený len čiastočne',
  '<none>' => '<žiadne>',
  'Customize favicons.' => 'Prispôsobte favikony.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).' => 'Komponent PATH „%s“ (ktorý sa vyhodnotí ako absolútna cesta „%s“) sa nedá použiť, pretože sa nedá prechádzať (jeho bit oprávnenia „%s“ nie je nastavený).',
  'No Repositories' => 'Žiadne repozitáre',
  'The configuration key "%s" is already defined in the database. The value from the database will override the value in local storage.' => 'Konfiguračný kľúč „%s“ je už definovaný v databáze. Hodnota z databázy prepíše hodnotu v lokálnom úložisku.',
  '%s deleted this configuration entry.' => '%s odstránil(a) túto konfiguračnú položku.',
  'After rebuilding repository identities, run this command to clear this setup warning:' => 'Po opätovnom zostavení identít repozitárov spustite tento príkaz, aby ste odstránili toto varovanie o nastavení:',
  'The timezone this software should use by default.' => 'Časové pásmo, ktoré má tento softvér predvolene používať.',
  'Mail is now always delivered by the daemons.' => 'Poštu teraz vždy doručujú démoni.',
  'Request has bad "Host" header.' => 'Požiadavka má chybnú hlavičku „Host“.',
  'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.' => 'Táto verzia Subversionu má chybu, pri ktorej `%s` nefunguje pre súbory pridané v rN (chyba Subversionu č. 2873); opravená bola v 1.7.2.',
  'Elasticsearch is not reachable as configured.' => 'Elasticsearch nie je podľa nastavenia dosiahnuteľný.',
  'Key has Wrong Uniqueness' => 'Kľúč má nesprávnu jedinečnosť',
  'Determines whether or not basic account information is editable.' => 'Určuje, či sa dajú upravovať základné informácie o účte.',
  'Get a local configuration value.' => 'Získať lokálnu konfiguračnú hodnotu.',
  'By default, this software allows users to add multi-factor authentication to
their accounts, but does not require it. By enabling this option, you can
force all users to add at least one authentication factor before they can use
their accounts.

Administrators can query a list of users who do not have MFA configured in
{nav People}:

  - **[[ %s | %s ]]**' => 'Tento softvér predvolene umožňuje používateľom pridať si k účtu viacfaktorové
overenie, no nevyžaduje ho. Zapnutím tejto možnosti môžete všetkých
používateľov prinútiť, aby si pred používaním svojich účtov pridali aspoň
jeden overovací faktor.

Administrátori si môžu zoznam používateľov, ktorí nemajú nastavené MFA,
zobraziť v {nav People}:

  - **[[ %s | %s ]]**',
  'The base URI for this install is not configured. Many major features will not work properly until you configure it.' => 'Základné URI tejto inštalácie nie je nastavené. Mnohé dôležité funkcie nebudú fungovať správne, kým ho nenastavíte.',
  'Unexpected \'diff\' Behavior' => 'Neočakávané správanie „diff“',
  'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.' => 'Binárny súbor „%s“ sa v tomto systéme správa neočakávane: očakávalo sa, že pri zadaní odlišných súborov skončí s nenulovým chybovým kódom, ale neskončil.',
  'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.' => 'Problém môžete ignorovať, ak ho nechcete opraviť alebo ho plánujete opraviť neskôr. Ignorované problémy sa nebudú zobrazovať na každej stránke, ale naďalej sa budú zobrazovať v zozname otvorených problémov.',
  'Enter value in JSON.' => 'Zadajte hodnotu vo formáte JSON.',
  'Migrated option "%s" from file to local config.' => 'Možnosť „%s“ bola migrovaná zo súborovej konfigurácie do lokálnej.',
  'Shenanigans' => 'Šibalstvá',
  'The path for local repositories does not exist, or is not readable by the webserver.' => 'Cesta pre lokálne repozitáre neexistuje alebo pre ňu webový server nemá právo čítania.',
  'Option "%s" only supports numbers, letters, underscores and (for some reason) the dollar sign. This is necessary to avoid potential MySQL/MariaDB escape issues. Remove the invalid characters.' => 'Možnosť „%s“ podporuje iba čísla, písmená, podčiarkovníky a (z akéhosi dôvodu) znak dolára. Je to nutné, aby sa predišlo možným problémom s escapovaním v MySQL/MariaDB. Odstráňte neplatné znaky.',
  'Inbound and outbound mail is now configured with "cluster.mailers".' => 'Prichádzajúca aj odchádzajúca pošta sa teraz nastavuje pomocou „cluster.mailers“.',
  'Config \'%s\' Invalid' => 'Konfigurácia „%s“ je neplatná',
  'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.' => array(
    
    array(
      
      array(
        'Databázový hostiteľ („%s“) a tento webový hostiteľ („%s“) sa nezhodujú v aktuálnom čase o viac než 60 sekúnd (absolútna odchýlka je %s sekunda). Skontrolujte, či je aktuálny čas všade nastavený správne.',
        'Databázový hostiteľ („%s“) a tento webový hostiteľ („%s“) sa nezhodujú v aktuálnom čase o viac než 60 sekúnd (absolútna odchýlka je %s sekundy). Skontrolujte, či je aktuálny čas všade nastavený správne.',
        'Databázový hostiteľ („%s“) a tento webový hostiteľ („%s“) sa nezhodujú v aktuálnom čase o viac než 60 sekúnd (absolútna odchýlka je %s sekúnd). Skontrolujte, či je aktuálny čas všade nastavený správne.',
      ),
    ),
  ),
  'No Recipient Hints' => 'Žiadne nápovedy o príjemcoch',
  'Sample 0.1%% of requests.' => 'Vzorkovať 0,1 %% požiadaviek.',
  'No Issues' => 'Žiadne problémy',
  'No Caches to Reset' => 'Žiadne vyrovnávacie pamäte na obnovenie',
  'No Base URI' => 'Žiadne základné URI',
  'Really Clear Cache?' => 'Naozaj vymazať vyrovnávaciu pamäť?',
  'Allow Any Host (Insecure!)' => 'Povoliť ľubovoľného hostiteľa (nebezpečné!)',
  'Collectors with custom policies are highlighted. Use %s to change retention policies.' => 'Zberače s vlastnými zásadami sú zvýraznené. Na zmenu zásad uchovávania použite %s.',
  'Multi-Factor Required' => 'Viacfaktorové overenie povinné',
  'Host: %s' => 'Hostiteľ: %s',
  'Update %s' => 'Aktualizovať %s',
  'Reply hints are no longer shown in mail.' => 'Nápovedy na odpovedanie sa už v pošte nezobrazujú.',
  'Profile every request (slow)' => 'Profilovať každú požiadavku (pomalé)',
  'Resolved Issue' => 'Vyriešený problém',
  'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.' => 'Lokálna cesta „%s“ nie je zapisovateľná. Tento súbor musí byť zapisovateľný, aby „bin/config“ mohlo ukladať konfiguráciu.',
  'This option generally did not prove useful. Resource hash keys are now managed automatically.' => 'Táto možnosť sa vo všeobecnosti neukázala ako užitočná. Kľúče hashu zdrojov sa teraz spravujú automaticky.',
  'Schema Status' => 'Stav schémy',
  'To update these %d value(s), run these command(s) from the command line:' => array(
    'Ak chcete aktualizovať túto hodnotu, spustite tento príkaz z príkazového riadka:',
    'Ak chcete aktualizovať tieto hodnoty, spustite tieto príkazy z príkazového riadka:',
  ),
  'If you want to use a single mailbox for reply mail, you can use this
and set a common prefix for generated reply addresses. It will
make use of the fact that a mail-address such as
`devtools+D123+1hjk213h@example.com` will be delivered to the `devtools`
user\'s mailbox. Set this to the left part of the email address and it will be
prepended to all generated reply addresses.

For example, if you want to use `devtools@example.com`, this should be set
to `devtools`.' => 'Ak chcete na poštu s odpoveďami používať jedinú schránku, môžete použiť toto
a nastaviť spoločnú predponu pre generované adresy na odpovede. Využíva sa
pritom skutočnosť, že e-mailová adresa ako
`devtools+D123+1hjk213h@example.com` sa doručí do schránky používateľa
`devtools`. Nastavte toto na ľavú časť e-mailovej adresy a pridá sa ako
predpona ku všetkým generovaným adresám na odpovede.

Ak napríklad chcete používať `devtools@example.com`, malo by to byť nastavené
na `devtools`.',
  'Cache Storage' => 'Úložisko vyrovnávacej pamäte',
  'At least one daemon is currently running as the wrong user.' => 'Aspoň jeden démon momentálne beží pod nesprávnym používateľom.',
  'Data Type' => 'Typ údajov',
  'Better Character Set Available' => 'K dispozícii je lepšia znaková sada',
  'Small MySQL "%s"' => 'Malé MySQL „%s“',
  'Value for option "%s" must be an integer.' => 'Hodnota možnosti „%s“ musí byť celé číslo.',
  'The request path, or request target.' => 'Cesta požiadavky alebo cieľ požiadavky.',
  '%s Active / %s Total' => '%s aktívnych / %s celkovo',
  'Automatic' => 'Automaticky',
  'Connection Error' => 'Chyba pripojenia',
  'Options relating to authentication.' => 'Možnosti týkajúce sa overovania.',
  'Migrating file source...' => 'Migruje sa súborový zdroj...',
  'Autoincrement' => 'Automatické zvyšovanie',
  'Dark' => 'Tmavá',
  'GZip Compression May Not Be Enabled' => 'Kompresia GZip možno nie je zapnutá',
  'Typeahead strategies are now managed automatically.' => 'Stratégie napovedania sa teraz spravujú automaticky.',
  'Return to Open Issue List' => 'Späť na zoznam otvorených problémov',
  'Activate read-only mode for maintenance or disaster recovery.' => 'Aktivujte režim len na čítanie na účely údržby alebo obnovy po havárii.',
  'PHP also loaded these %s configuration file(s):' => array(
    'PHP načítalo aj tento konfiguračný súbor:',
    'PHP načítalo aj tieto konfiguračné súbory:',
  ),
  'Reading value from stdin...' => 'Načítava sa hodnota zo štandardného vstupu...',
  'Option "%s" is of type "%s", but the value you provided is not a valid JSON list: when providing a set from the command line, specify it as a list of values in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'Možnosť „%s“ je typu „%s“, ale hodnota, ktorú ste zadali, nie je platný zoznam vo formáte JSON: keď zadávate množinu z príkazového riadka, uveďte ju ako zoznam hodnôt vo formáte JSON. Možno budete musieť hodnotu pre svoj shell uviesť v úvodzovkách (napríklad: \'["a", "b", ...]\').',
  'To rebuild the index, run this command:' => 'Index znovu zostavíte spustením tohto príkazu:',
  'This software can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 

For instructions on installing and enabling Pygments, see the %s configuration option.

If you do not want to install Pygments, you can ignore this issue.' => 'Tento softvér dokáže predvolene zvýrazňovať niekoľko jazykov, no inštaláciou a zapnutím Pygments (nástroja tretej strany na zvýrazňovanie) pribudne zvýrazňovanie syntaxe pre mnoho ďalších jazykov. 

Pokyny na inštaláciu a zapnutie Pygments nájdete pri konfiguračnej možnosti %s.

Ak Pygments inštalovať nechcete, môžete tento problém ignorovať.',
  'Disable Recaptcha' => 'Vypnúť Recaptchu',
  'Sample every request (slow).' => 'Vzorkovať každú požiadavku (pomalé).',
  'The daemons are not running, background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds) can not be performed.

Use %s to start daemons. See %s for more information.' => 'Démoni nebežia, takže sa nedá vykonávať spracovanie na pozadí (vrátane odosielania e-mailov, opätovného zostavovania vyhľadávacích indexov, importovania commitov, čistenia starých údajov a spúšťania zostavení).

Na spustenie démonov použite %s. Ďalšie informácie nájdete v %s.',
  'Unsafe MySQL "local_infile" Setting Enabled' => 'Je zapnuté nebezpečné nastavenie MySQL „local_infile“',
  'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of the software.

You can configure Webhooks in Herald.

To resolve this issue, remove all URIs from "feed.http-hooks".' => 'Možnosť „feed.http-hooks“ je zastaraná a nahrádzajú ju webhooky. Táto možnosť sa v budúcej verzii softvéru odstráni.

Webhooky môžete nastaviť v Heralde.

Tento problém vyriešite odstránením všetkých URI z „feed.http-hooks“.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' does not exist.' => 'Komponent PATH „%s“ (ktorý sa vyhodnotí ako absolútna cesta „%s“) sa nedá použiť, pretože „%s“ neexistuje.',
  'The search index algorithm has been updated and the index needs be rebuilt.' => 'Algoritmus vyhľadávacieho indexu bol aktualizovaný a index je potrebné znovu zostaviť.',
  'The current PHP configuration has these %d value(s):' => array(
    'Aktuálna konfigurácia PHP má túto hodnotu:',
    'Aktuálna konfigurácia PHP má tieto hodnoty:',
  ),
  'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or adjust configuration.' => 'Databázový hostiteľ „%s“ je nastavený ako hlavný server, ale replikuje iného hostiteľa. Je to nebezpečné a môže to skomoliť alebo zničiť údaje. Replikovať by mali iba repliky. Zastavte replikáciu na tomto hostiteľovi alebo upravte konfiguráciu.',
  'This issue is currently ignored, and does not show a global warning.' => 'Tento problém sa momentálne ignoruje a nezobrazuje sa ako globálne varovanie.',
  'Cache Status' => 'Stav vyrovnávacej pamäte',
  'You have at least one repository configured which uses this version control system. It will not work without the VCS binary.' => 'Máte nastavený aspoň jeden repozitár, ktorý používa tento systém správy verzií. Bez binárneho súboru VCS nebude fungovať.',
  'Done. Migrated %d keys.' => array(
    'Hotovo. Migrovaných %d kľúč.',
    'Hotovo. Migrovaných %d kľúče.',
    'Hotovo. Migrovaných %d kľúčov.',
  ),
  'The remote IP.' => 'Vzdialená IP adresa.',
  'Disable Prototypes' => 'Vypnúť prototypy',
  'US West (PDT)' => 'US West (PDT)',
  'Deleted \'%s\' from %s configuration.' => '„%s“ bolo odstránené z konfigurácie %s.',
  'Run Normally' => 'Spustiť normálne',
  'Default key for HMAC digests where the key is not important (i.e., the hash itself is secret). You can change this if you want (to any other string), but doing so will break existing sessions and CSRF tokens. This option is deprecated. Newer code automatically manages HMAC keys.' => 'Predvolený kľúč pre HMAC digesty, pri ktorých kľúč nie je dôležitý (t. j. tajný je samotný hash). Ak chcete, môžete ho zmeniť (na ľubovoľný iný reťazec), no tým sa pokazia existujúce relácie a tokeny CSRF. Táto možnosť je zastaraná. Novší kód spravuje kľúče HMAC automaticky.',
  'Highlight %s as PHP.' => 'Zvýrazňovať %s ako PHP.',
  'MySQL is Using Default Stopword File' => 'MySQL používa predvolený súbor so zastavovacími slovami',
  'Pagespeed is enabled, but should be disabled.' => 'Pagespeed je zapnutý, ale mal by byť vypnutý.',
  'Paths to additional phutil libraries to load.' => 'Cesty k ďalším knižniciam phutil, ktoré sa majú načítať.',
  'User Guide: Prototype Applications' => 'Používateľská príručka: Prototypové aplikácie',
  'If you enable this, linked YouTube videos will be embedded inline. This has mild security implications (you\'ll leak referrers to YouTube) and is pretty silly (but sort of awesome).' => 'Ak toto zapnete, odkazované videá z YouTube sa vložia priamo do stránky. Má to mierne bezpečnostné dôsledky (budete prezrádzať referrery YouTube) a je to dosť hlúpe (ale svojím spôsobom úžasné).',
  'Library' => 'Knižnica',
  'The \'%s\' binary could not be located or executed.' => 'Binárny súbor „%s“ sa nepodarilo nájsť ani spustiť.',
  'Show Email Preferences Link' => 'Zobrazovať odkaz na nastavenia e-mailu',
  'Confirm before redirecting so DarkConsole can be examined.' => 'Pred presmerovaním požiadať o potvrdenie, aby sa dala preskúmať DarkConsole.',
  'If you enable `%s`, this software uses "From" to authenticate users. You can
additionally enable this setting to try to authenticate with \'Reply-To\'. Note
that this is completely spoofable and insecure (any user can set any \'Reply-To\'
address) but depending on the nature of your install or other deliverability
conditions this might be okay. Generally, you can\'t do much more by spoofing
Reply-To than be annoying (you can write but not read content). But this is
still **COMPLETELY INSECURE**.' => 'Ak zapnete `%s`, tento softvér používa na overovanie používateľov hlavičku „From“.
Navyše môžete zapnúť toto nastavenie a skúsiť overovať pomocou „Reply-To“.
Majte na pamäti, že sa to dá úplne sfalšovať a je to nebezpečné (ktokoľvek si
môže nastaviť ľubovoľnú adresu „Reply-To“), no v závislosti od povahy vašej
inštalácie alebo iných podmienok doručovania to môže byť v poriadku. Sfalšovaním
hlavičky Reply-To sa vo všeobecnosti nedá dosiahnuť veľa okrem otravovania
(dá sa písať obsah, no nie čítať). Aj tak je to však **ÚPLNE NEBEZPEČNÉ**.',
  'Define a cluster by providing a whitelist of host addresses that are part of the cluster.

Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.

Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.

When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.' => 'Klaster definujete tak, že poskytnete zoznam povolených adries hostiteľov, ktorí sú súčasťou klastra.

Hostitelia na tomto zozname majú osobitné právomoci. Títo hostitelia môžu ohýbať bezpečnostné pravidlá a nesprávne nastavenie tohto zoznamu môže znížiť bezpečnosť vašej inštalácie. Ďalšie informácie nájdete v **[[ %s | %s ]]**.

Definujte zoznam blokov CIDR, ktorý povolí všetkých hostiteľov v klastri a žiadnych ďalších. Podrobnosti nájdete v príkladoch nižšie.

Keď sú adresy klastra definované, hostitelia budú zároveň odmietať požiadavky na rozhrania, ktoré nie sú v zozname povolených.',
  'On host "%s", MySQL is configured with a small "%s" (%d), which may cause some large writes to fail. The recommended minimum value for this setting is "%d".' => 'Na hostiteľovi „%s“ má MySQL nastavenú malú hodnotu „%s“ (%d), čo môže spôsobiť zlyhanie niektorých veľkých zápisov. Odporúčaná minimálna hodnota tohto nastavenia je „%d“.',
  'Config option "%s" is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like "%s".' => 'Konfiguračná možnosť „%s“ je neplatná. Identifikátor časového pásma musí byť platný identifikátor časového pásma rozpoznávaný PHP, napríklad „%s“.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not a directory.' => 'Komponent PATH „%s“ (ktorý sa vyhodnotí ako absolútna cesta „%s“) sa nedá použiť, pretože „%s“ nie je adresár.',
  'Configure %s' => 'Nastaviť %s',
  'Normally, pages are profiled only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.

Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).

Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.

NOTE: You must install XHProf for profiling to work.' => 'Stránky sa zvyčajne profilujú len vtedy, keď sa o to výslovne požiada cez DarkConsole. Môže však byť užitočné profilovať niektoré stránky automaticky.

Nastavte túto možnosť na kladné celé číslo N, aby sa automaticky profilovala 1 / N stránka. Napríklad nastavenie na 1 bude profilovať každú stránku, zatiaľ čo nastavenie na 1000 bude profilovať 1 stránku na 1000 požiadaviek (t. j. 0,1 %% požiadaviek).

Keďže profilovanie je pomalé a generuje veľa údajov, v produkčnom prostredí by ste to mali nastaviť na 0 (čím sa vypne) alebo na veľké číslo (aby sa zozbieralo pár vzoriek, ak chcete mať časom nejaké údaje na preskúmanie). Pri vývoji môže byť užitočné nastaviť to na 1, aby sa dali ladiť problémy s výkonom.

NOTE: Aby profilovanie fungovalo, musíte nainštalovať XHProf.',
  'Missing "zip" Extension' => 'Chýbajúce rozšírenie „zip“',
  'Set the language list which appears in dropdowns.' => 'Nastavte zoznam jazykov, ktorý sa objaví v rozbaľovacích ponukách.',
  'Inverse' => 'Inverzná',
  'Deprecated Config Source' => 'Zastaraný zdroj konfigurácie',
  'Indefinite' => 'Neobmedzene',
  'Edge Types' => 'Typy hrán',
  'Disable access log.' => 'Vypnúť prístupový denník.',
  'Logo configuration is not valid: value must be a dictionary.' => 'Konfigurácia loga nie je platná: hodnota musí byť slovník.',
  'Really ignore this setup issue?' => 'Naozaj ignorovať tento problém s nastavením?',
  'Config option "%s" is invalid. The URI must start with "%s" or "%s".' => 'Konfiguračná možnosť „%s“ je neplatná. URI musí začínať na „%s“ alebo „%s“.',
  'Set default user-agent to "%s"' => 'Nastaviť predvolený user-agent na „%s“',
  'Options relating to syntax highlighting source code.' => 'Možnosti týkajúce sa zvýrazňovania syntaxe zdrojového kódu.',
  'Allow HTTP' => 'Povoliť HTTP',
  'Simple Example' => 'Jednoduchý príklad',
  'Auth Config Unlocked' => 'Konfigurácia overovania je odomknutá',
  'Synchronized' => 'Synchronizované',
  'No REMOTE_ADDR is available, so this server cannot determine the origin address for requests. This will prevent the software from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'Nie je k dispozícii žiadna hodnota REMOTE_ADDR, takže tento server nedokáže určiť zdrojovú adresu požiadaviek. To softvéru zabráni vykonávať dôležité bezpečnostné kontroly. Najčastejšie to znamená, že máte chybu vo svojom skripte preambuly. Pozrite si dokumentáciu (%s) a dôkladne skontrolujte, či je skript napísaný správne.',
  'Access key for Amazon EC2.' => 'Prístupový kľúč pre Amazon EC2.',
  '%s Component Unusable' => 'Komponent %s sa nedá použiť',
  'Unsynchronized' => 'Nesynchronizované',
  'Available search engines are now automatically discovered at runtime.' => 'Dostupné vyhľadávacie nástroje sa teraz zisťujú automaticky za behu.',
  'Key for HMAC digests.' => 'Kľúč pre HMAC digesty.',
  'Enable applications which are still under development.' => 'Zapnite aplikácie, ktoré sú ešte vo vývoji.',
  'The request duration, in microseconds.' => 'Trvanie požiadavky v mikrosekundách.',
  'Amazon S3 region where your S3 bucket is located. When you specify a region, you should also specify a corresponding endpoint with `amazon-s3.endpoint`. You can find a list of available regions and endpoints in the AWS documentation.' => 'Región Amazon S3, v ktorom sa nachádza váš bucket S3. Keď zadáte región, mali by ste zadať aj zodpovedajúci koncový bod pomocou `amazon-s3.endpoint`. Zoznam dostupných regiónov a koncových bodov nájdete v dokumentácii AWS.',
  'Disabled Application' => 'Zakázaná aplikácia',
  'MySQL %s Not Supported' => 'MySQL %s nie je podporované',
  'Option "%s" is of type "%s", but the current value ("%s") is not among the set of valid values: %s.' => 'Možnosť „%s“ je typu „%s“, ale aktuálna hodnota („%s“) nepatrí do množiny platných hodnôt: %s.',
  'Auth Application' => 'Aplikácia Overovanie',
  'The environmental variable %s is empty. This server will not be able to execute some commands.' => 'Premenná prostredia %s je prázdna. Tento server nebude môcť spustiť niektoré príkazy.',
  '%s.%s (%s)' => '%s.%s (%s)',
  'There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the user account that gets associated with VCS commits.' => 'Medzi reťazcami, ktoré sa objavujú ako autori a commiteri vo VCS (napríklad „John Developer <johnd@bigcorp.com>“), a používateľským účtom, ktorý sa priradí k commitom vo VCS, je nová vrstva nepriamosti.',
  'All Differential fields are now managed through the configuration option "%s". Use that option to configure which fields are shown.' => 'Všetky polia Differentialu sa teraz spravujú cez konfiguračnú možnosť „%s“. Pomocou tejto možnosti nastavte, ktoré polia sa zobrazujú.',
  'Use HSTS' => 'Používať HSTS',
  'The current MySQL configuration has these %d value(s):' => array(
    'Aktuálna konfigurácia MySQL má túto hodnotu:',
    'Aktuálna konfigurácia MySQL má tieto hodnoty:',
  ),
  'Show "To:" and "Cc:" footer hints in email.' => 'Zobrazovať v e-maile nápovedy „To:“ a „Cc:“ v päte.',
  'Write SSH log here.' => 'Denník SSH zapisovať sem.',
  'Migrate From "feed.http-hooks" to Webhooks' => 'Prejsť z „feed.http-hooks“ na webhooky',
  'Partitioning and replication are now managed in primary configuration.' => 'Rozdelenie na oddiely a replikácia sa teraz spravujú v primárnej konfigurácii.',
  'You can find more information about configuring OPcache in the %s.' => 'Ďalšie informácie o nastavení OPcache nájdete v %s.',
  'PHP Timezone' => 'Časové pásmo PHP',
  'This option is not recognized. It may be misspelled.' => 'Táto možnosť nie je rozpoznaná. Môže byť preklepnutá.',
  'Internal.' => 'Interné.',
  'Advanced Settings' => 'Rozšírené nastavenia',
  'SSH log format.' => 'Formát denníka SSH.',
  'After installing new PHP extensions, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'Po inštalácii nových rozšírení PHP <strong>všetko reštartujte, aby sa zmeny prejavili</strong>. Pomoc s reštartovaním všetkého nájdete v %s v dokumentácii.',
  'Default address used when generating mail.' => 'Predvolená adresa používaná pri generovaní pošty.',
  'By default, this software serves files from the same domain the application is served from. This is convenient, but presents a security risk.

You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => 'Tento softvér predvolene poskytuje súbory z tej istej domény, z ktorej sa poskytuje aplikácia. Je to pohodlné, ale predstavuje to bezpečnostné riziko.

Toto riziko by ste mali zmierniť nastavením CDN alebo alternatívnej domény pre súbory. Nastavenie CDN zároveň zlepší výkon. Pokyny nájdete v [[ %s | %s ]].',
  'Learn more about locked and hidden options.' => 'Zistite viac o uzamknutých a skrytých možnostiach.',
  'Default address used as a "From" or "To" email address when an address is
required but no meaningful address is available.

If you configure inbound mail, you generally do not need to set this:
the software will automatically generate and use a suitable mailbox on the
inbound mail domain.

Otherwise, this option should be configured to point at a valid mailbox which
discards all mail sent to it. If you point it at an invalid mailbox, mail sent
by the software and some mail sent by users will bounce. If you point it at a
real user mailbox, that user will get a lot of mail they don\'t want.

For further guidance, see **[[ %s | %s ]]** in the documentation.' => 'Predvolená adresa používaná ako e-mailová adresa „From“ alebo „To“, keď sa
adresa vyžaduje, ale nie je k dispozícii žiadna zmysluplná adresa.

Ak nastavíte prichádzajúcu poštu, toto zvyčajne nastavovať nemusíte: softvér
automaticky vygeneruje a použije vhodnú schránku v doméne prichádzajúcej pošty.

Inak by táto možnosť mala smerovať na platnú schránku, ktorá všetku poštu
odoslanú na ňu zahodí. Ak ju nasmerujete na neplatnú schránku, pošta odosielaná
softvérom a časť pošty odosielanej používateľmi sa bude vracať. Ak ju
nasmerujete na skutočnú schránku používateľa, tento používateľ bude dostávať
veľa pošty, ktorú nechce.

Ďalšie usmernenia nájdete v **[[ %s | %s ]]** v dokumentácii.',
  'You must start the daemons to send email, rebuild search indexes, and do other background processing.' => 'Aby sa dali odosielať e-maily, opätovne zostavovať vyhľadávacie indexy a vykonávať iné spracovanie na pozadí, musíte spustiť démonov.',
  'After editing the PHP configuration, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'Po úprave konfigurácie PHP <strong>všetko reštartujte, aby sa zmeny prejavili</strong>. Pomoc s reštartovaním všetkého nájdete v %s v dokumentácii.',
  'Repository Status' => 'Stav repozitára',
  'Do Not Use HSTS' => 'Nepoužívať HSTS',
  'List all configuration keys.' => 'Vypísať všetky konfiguračné kľúče.',
  'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".' => 'Prispôsobenie predpony predmetu pošty pre jednotlivé aplikácie sa už priamo nepodporuje. Predpony a ďalšie reťazce sa dajú prispôsobiť pomocou „translation.override“.',
  'Configuration key "%s" is of type "%s". Specify it in JSON.' => 'Konfiguračný kľúč „%s“ je typu „%s“. Zadajte ho vo formáte JSON.',
  'This will only affect the current web frontend. Daemons and any other web frontends may continue to use older, cached code from their opcache.' => 'Ovplyvní to len aktuálne webové rozhranie. Démoni a všetky ostatné webové rozhrania môžu naďalej používať starší kód z vyrovnávacej pamäte svojho opcache.',
  'Configure real-time notifications.' => 'Nastavte upozornenia v reálnom čase.',
  'Surplus Key' => 'Nadbytočný kľúč',
  'Cluster Setup' => 'Nastavenie klastra',
  'Obsolete Configuration Option "%s"' => 'Zastaraná konfiguračná možnosť „%s“',
  'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'Binárny súbor „%s“ sa nepodarilo nájsť. Nastavte premennú prostredia %s webového servera tak, aby zahŕňala adresár, v ktorom sa nachádza, alebo tento adresár pridajte do „%s“ v konfigurácii.',
  'You can disable the email preference link in emails if users prefer smaller
emails.' => 'Ak používatelia uprednostňujú kratšie e-maily, môžete odkaz na nastavenia
e-mailu v e-mailoch vypnúť.',
  'Expected Autoincrement' => 'Očakávané automatické zvyšovanie',
  'MySQL is configured (on host "%s") to only index words with at least %d characters.' => 'MySQL je nastavené (na hostiteľovi „%s“) tak, aby indexovalo iba slová s aspoň %d znakmi.',
  'Too many arguments: expected only a configuration key when using "--stdin".' => 'Príliš veľa argumentov: pri použití „--stdin“ sa očakával iba konfiguračný kľúč.',
  'Global customization of monospaced fonts is no longer supported.' => 'Globálne prispôsobenie neproporcionálnych písiem sa už nepodporuje.',
  'Major Web/Database Clock Skew' => 'Veľká odchýlka hodín medzi webom a databázou',
  'No repository cluster services are configured.' => 'Nie sú nastavené žiadne klastrové služby repozitárov.',
  'Syntax Highlighting' => 'Zvýrazňovanie syntaxe',
  'This schema is not expected to exist.' => 'Neočakáva sa, že táto schéma bude existovať.',
  'View status information for databases, caches, repositories, and other services.' => 'Zobrazte informácie o stave databáz, vyrovnávacích pamätí, repozitárov a ďalších služieb.',
  'This configuration value is defined in these %d configuration source(s): %s.' => array(
    'Táto konfiguračná hodnota je definovaná v tomto konfiguračnom zdroji: %2$s.',
    'Táto konfiguračná hodnota je definovaná v týchto %d konfiguračných zdrojoch: %s.',
  ),
  'Specify a configuration key to get.' => 'Zadajte konfiguračný kľúč, ktorý sa má získať.',
  'Can not compare two missing schemata!' => 'Nedajú sa porovnať dve chýbajúce schémy!',
  'Key on Wrong Columns' => 'Kľúč na nesprávnych stĺpcoch',
  'S3 Partially Configured' => 'S3 je nastavené len čiastočne',
  'Migrate file-based configuration to more modern storage.' => 'Migrujte konfiguráciu založenú na súboroch do modernejšieho úložiska.',
  'Skipping config of source type %s...' => 'Preskakuje sa konfigurácia zdroja typu %s...',
  'Reply addresses can either be private (more secure) or public (which works better with mailing lists).' => 'Adresy na odpovede môžu byť buď súkromné (bezpečnejšie), alebo verejné (čo lepšie funguje s mailingovými zoznamami).',
  'This server received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with this software. You should disable the module.' => 'Tento server prijal pri tejto požiadavke hlavičku HTTP „X-Mod-Pagespeed“ alebo „X-Page-Speed“, čo naznačuje, že máte na tomto serveri zapnutý „mod_pagespeed“. Tento modul nie je kompatibilný s týmto softvérom. Mali by ste ho vypnúť.',
  'No profiling' => 'Bez profilovania',
  'PHID Types' => 'Typy PHID',
  'Wrote configuration key "%s" to database storage.' => 'Konfiguračný kľúč „%s“ bol zapísaný do databázového úložiska.',
  'The environmental variable %s does not contain %s. You have enabled pygments, which requires %s to be available in your %s variable.' => 'Premenná prostredia %s neobsahuje %s. Zapli ste pygments, ktoré vyžadujú, aby bolo %s dostupné vo vašej premennej %s.',
  'Use Pygments' => 'Používať Pygments',
  'Amazon Web Services' => 'Amazon Web Services',
  'Customized settings for applications.' => 'Prispôsobené nastavenia pre aplikácie.',
  'US Central (CDT)' => 'US Central (CDT)',
  'Config option "%s" is invalid. The URI must contain a dot ("%s"), like "%s", not just a bare name like "%s". Some web browsers will not set cookies on domains with no TLD.' => 'Konfiguračná možnosť „%s“ je neplatná. URI musí obsahovať bodku („%s“), napríklad „%s“, nie len holý názov ako „%s“. Niektoré webové prehliadače nenastavia súbory cookie na doménach bez TLD.',
  '%s Active' => '%s aktívnych',
  'Subschemata Have Warnings' => 'Podschémy majú varovania',
  'Require Administrators to Approve Accounts' => 'Vyžadovať schválenie účtov administrátormi',
  'Set %s in your PHP configuration to at least 32MB to support large file uploads.' => 'Nastavte %s vo svojej konfigurácii PHP na aspoň 32 MB, aby sa dali nahrávať veľké súbory.',
  'Configure integration with AWS (EC2, SES, S3, etc.).' => 'Nastavte integráciu s AWS (EC2, SES, S3 atď.).',
  'The system sudo user.' => 'Systémový používateľ sudo.',
  'You can disable the "To:" and "Cc:" footers in mail if users prefer smaller
messages.' => 'Ak používatelia uprednostňujú kratšie správy, môžete päty „To:“ a „Cc:“
v pošte vypnúť.',
  'MySQL %s Mode Not Set' => 'Režim MySQL %s nie je nastavený',
  'If you are using Apache, your server may be configured with "SetInputFilter DEFLATE". This directive destructively mangles requests and emits them with "Content-Length" and "Content-Encoding" headers that no longer match the data in the request body.' => 'Ak používate Apache, váš server môže mať nastavené „SetInputFilter DEFLATE“. Táto direktíva deštruktívne komolí požiadavky a vydáva ich s hlavičkami „Content-Length“ a „Content-Encoding“, ktoré už nezodpovedajú údajom v tele požiadavky.',
  'Options for platform developers, including debugging.' => 'Možnosti pre vývojárov platformy vrátane ladenia.',
  'A component of the configured PATH can not be used by the webserver: %s' => 'Webový server nemôže použiť komponent nastavenej premennej PATH: %s',
  'Allow a single mailbox to be used for all replies.' => 'Umožniť použitie jedinej schránky pre všetky odpovede.',
  'Use specific endpoint' => 'Použiť konkrétny koncový bod',
  'Configure Recaptcha captchas.' => 'Nastavte captchy Recaptcha.',
  'Report this Issue to the Upstream' => 'Nahlásiť tento problém upstreamu',
  'Disable SSH error log.' => 'Vypnúť chybový denník SSH.',
  'Options relating to PHD (daemons).' => 'Možnosti týkajúce sa PHD (démonov).',
  'Repos' => 'Repozitáre',
  'Database configuration.' => 'Konfigurácia databázy.',
  'Option "%s" is of type "%s", but the current value ("%s") is not a known, concrete subclass of base class "%s". Valid selections are: %s.' => 'Možnosť „%s“ je typu „%s“, ale aktuálna hodnota („%s“) nie je známa konkrétna podtrieda základnej triedy „%s“. Platné voľby sú: %s.',
  'Databases' => 'Databázy',
  'Basic Example' => 'Základný príklad',
  '%s In / %s Out' => '%s vstup / %s výstup',
  'Adapter class to use to transmit mail to the MTA. The default uses
PHPMailer, which will invoke "mail". This is appropriate if mail actually
works on your host, but if you haven\'t configured mail it may not be so great.
A number of other mailers are available (e.g., SES, SendGrid, SMTP, Sendmail,
custom mailers). This option is deprecated in favor of \'cluster.mailers\'.' => 'Trieda adaptéra, ktorá sa má použiť na prenos pošty do MTA. Predvolene sa
používa PHPMailer, ktorý volá „mail“. To je vhodné, ak pošta na vašom
hostiteľovi naozaj funguje, no ak ste poštu nenastavili, nemusí to byť ktovieaké.
K dispozícii je množstvo ďalších doručovateľov pošty (napr. SES, SendGrid, SMTP,
Sendmail, vlastní doručovatelia). Táto možnosť je zastaraná a nahrádza ju
„cluster.mailers“.',
  'This option allows you to stop this service from sending data to most external
services: it will disable email, SMS, repository mirroring, remote builds,
Doorkeeper writes, and webhooks.

This option is intended to allow an instance to be exported, copied, imported,
and run in a test environment without impacting users. For example, if you are
migrating to new hardware, you could perform a test migration first with this
flag set, make sure things work, and then do a production cutover later with
higher confidence and less disruption.

Without making use of this flag to silence the temporary test environment,
users would receive duplicate email during the time the test instance and old
production instance were both in operation.' => 'Táto možnosť umožňuje zabrániť tejto službe odosielať údaje do väčšiny externých
služieb: vypne e-maily, SMS, zrkadlenie repozitárov, vzdialené zostavenia,
zápisy cez Doorkeeper a webhooky.

Cieľom tejto možnosti je umožniť exportovať, skopírovať, importovať a spustiť
inštanciu v testovacom prostredí bez toho, aby to ovplyvnilo používateľov.
Napríklad ak migrujete na nový hardvér, mohli by ste najprv vykonať testovaciu
migráciu s nastaveným týmto príznakom, presvedčiť sa, že všetko funguje,
a neskôr urobiť produkčný prechod s väčšou istotou a menším narušením.

Bez použitia tohto príznaku na umlčanie dočasného testovacieho prostredia by
používatelia počas obdobia, keď sú v prevádzke testovacia aj stará produkčná
inštancia, dostávali duplicitné e-maily.',
  'Whitelist Specific Addresses' => 'Povoliť konkrétne adresy',
  'Other Version Information' => 'Ďalšie informácie o verzii',
  'The mapping from VCS users to %s users has changed and must be rebuilt.' => 'Mapovanie z používateľov VCS na používateľov %s sa zmenilo a musí sa znovu zostaviť.',
  'Authentication configuration is currently unlocked. Once you finish configuring authentication, you should lock it.' => 'Konfigurácia overovania je momentálne odomknutá. Keď dokončíte nastavovanie overovania, mali by ste ju uzamknúť.',
  'Use `%s` instead of this option.' => 'Namiesto tejto možnosti použite `%s`.',
  'You have not configured any authentication providers yet. You should add a provider (like username/password, LDAP, or GitHub OAuth) so users can register and log in. You can add and configure providers using the Auth Application.' => 'Zatiaľ ste nenastavili žiadnych poskytovateľov overenia. Mali by ste pridať poskytovateľa (napríklad používateľské meno/heslo, LDAP alebo GitHub OAuth), aby sa používatelia mohli registrovať a prihlasovať. Poskytovateľov môžete pridávať a nastavovať v aplikácii Overovanie.',
  'Run the storage upgrade script to upgrade databases (host "%s" is out of date). Missing patches: %s.' => 'Na aktualizáciu databáz spustite skript na aktualizáciu úložiska (hostiteľ „%s“ je zastaraný). Chýbajúce záplaty: %s.',
  'Resource deflation is now managed automatically.' => 'Deflácia zdrojov sa teraz spravuje automaticky.',
  'MySQL' => 'MySQL',
  'Databases are created in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing extensions and using namespaces to separate multiple sandbox datasets.' => 'Databázy sa vytvárajú v mennom priestore, ktorý je predvolene „phabricator“ – napríklad databáza Differentialu sa predvolene volá „phabricator_differential“. Ak chcete, môžete tento menný priestor zmeniť. Za normálnych okolností by ste to robiť nemali, pokiaľ nevyvíjate rozšírenia a nepoužívate menné priestory na oddelenie viacerých testovacích množín údajov.',
  'Serious business' => 'Vážne podnikanie',
  'External loaders have been replaced. Extend `%s` to implement new PHID and handle types.' => 'Externé zavádzače boli nahradené. Nové typy PHID a ovládačov implementujete rozšírením `%s`.',
  'Authenticating users based on "Reply-To" is no longer supported.' => 'Overovanie používateľov podľa hlavičky „Reply-To“ sa už nepodporuje.',
  'Option "%s" is of type "%s", but the configured value is not a list.' => 'Možnosť „%s“ je typu „%s“, ale nastavená hodnota nie je zoznam.',
  'Cluster instance name, if configured.' => 'Názov inštancie klastra, ak je nastavený.',
  'You likely need to fix your preamble script so REMOTE_ADDR is no longer empty.' => 'Pravdepodobne budete musieť opraviť svoj skript preambuly, aby REMOTE_ADDR už nebolo prázdne.',
  'Unknown Config' => 'Neznáma konfigurácia',
  'Detected %s serious issue(s) with the schemata.' => array(
    'Zistil sa závažný problém v schémach.',
    'Zistili sa %s závažné problémy v schémach.',
    'Zistilo sa %s závažných problémov v schémach.',
  ),
  'Daemons Not Running' => 'Démoni nebežia',
  'MySQL username to use when connecting to the database.' => 'Používateľské meno MySQL, ktoré sa má použiť pri pripájaní k databáze.',
  'Secret key for Amazon EC2.' => 'Tajný kľúč pre Amazon EC2.',
  'These %d configuration value(s) are related:' => array(
    'Táto konfiguračná hodnota súvisí:',
    'Tieto konfiguračné hodnoty súvisia:',
  ),
  'This software sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.

This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => 'Tento softvér si poslal požiadavku s hlavičkou „Accept-Encoding: gzip“, ale prijal nekomprimovanú odpoveď.

Môže to naznačovať, že váš webový server nie je nastavený na kompresiu odpovedí. Ak je to tak, mali by ste kompresiu zapnúť. Kompresia dokáže výrazne zlepšiť výkon, najmä pre klientov s nižšou šírkou pásma.',
  'If you have multiple %s environments (like a development/staging environment and a production environment), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'Ak máte viacero prostredí %s (napríklad vývojové/prípravné prostredie a produkčné prostredie), nastavte tu URI produkčného prostredia, aby sa e-maily a ďalšie trvalé URI vždy generovali s odkazmi smerujúcimi na produkčné prostredie. Ak nie je nastavené, predvolene sa použije `%s`. Väčšina inštalácií túto možnosť nastavovať nepotrebuje.',
  'Names must match to compare schemata!' => 'Na porovnanie schém sa musia zhodovať názvy!',
  'Users can make requests to other services from service hosts in some circumstances (for example, by creating a repository with a remote URL).

This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.

This option defines a list of netblocks which requests will never be issued to. Generally, you should list all private IP space here.' => 'Používatelia môžu za istých okolností vytvárať požiadavky na iné služby zo serverových hostiteľov (napríklad vytvorením repozitára so vzdialeným URI).

Môže to predstavovať bezpečnostnú zraniteľnosť, ak služby v tej istej podsieti prijímajú príkazy alebo prezrádzajú súkromné informácie cez neoverené HTTP GET na základe zdrojovej IP adresy. Takúto službu majú k dispozícii najmä všetci hostitelia v EC2.

Táto možnosť definuje zoznam sieťových blokov, na ktoré sa požiadavky nikdy nebudú vydávať. Vo všeobecnosti by ste tu mali uviesť celý súkromný adresný priestor IP.',
  'Core Settings' => 'Základné nastavenia',
  'Your MySQL server is configured with the "local_infile" option enabled. This option allows an attacker who finds an SQL injection hole to escalate their attack by copying files from the webserver into the database with "LOAD DATA LOCAL INFILE" queries, then reading the file content with "SELECT" queries.

You should disable this option in your %s file, in the %s section:

%s' => 'Váš server MySQL má zapnutú možnosť „local_infile“. Táto možnosť umožňuje útočníkovi, ktorý nájde dieru na SQL injekciu, vystupňovať útok kopírovaním súborov z webového servera do databázy pomocou dopytov „LOAD DATA LOCAL INFILE“ a následným čítaním obsahu súboru dopytmi „SELECT“.

Túto možnosť by ste mali vypnúť vo svojom súbore %s, v sekcii %s:

%s',
  'Setup Checks' => 'Kontroly nastavenia',
  'This system has an unpatched version of Bash with a severe, widely disclosed vulnerability.' => 'Tento systém má neopravenú verziu Bashu so závažnou, široko zverejnenou zraniteľnosťou.',
  'Keys' => 'Kľúče',
  'No Auth Providers' => 'Žiadni poskytovatelia overenia',
  'Missing Required Extensions' => 'Chýbajúce požadované rozšírenia',
  'This option has been migrated to the "Auth" application. Your old configuration is still in effect, but now stored in "Auth" instead of configuration. Going forward, you can manage authentication from the web UI.' => 'Táto možnosť bola presunutá do aplikácie „Overovanie“. Vaša stará konfigurácia je stále v platnosti, ale teraz je uložená v „Overovaní“ namiesto v konfigurácii. Odteraz môžete overovanie spravovať z webového rozhrania.',
  'Provide a list of notification servers to enable real-time notifications.

For help setting up notification servers, see **[[ %s | %s ]]** in the
documentation.' => 'Zadajte zoznam serverov upozornení, aby sa zapli upozornenia v reálnom čase.

Pomoc s nastavením serverov upozornení nájdete v **[[ %s | %s ]]**
v dokumentácii.',
  'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.

This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.

Although it is normally difficult for an attacker to convince this software to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.

To disable this option, set: %s' => 'PHP je momentálne nastavené tak, aby vyhovelo požiadavkám ľubovoľného servera MySQL, ku ktorému sa pripojí, o obsah ľubovoľného lokálneho súboru.

Táto schopnosť podporuje dopyty MySQL „LOAD DATA LOCAL INFILE“, no zároveň umožňuje škodlivému serveru MySQL čítať lokálny disk: server môže požiadať klienta o odoslanie obsahu ľubovoľného lokálneho súboru a klient vyhovie.

Hoci je pre útočníka zvyčajne ťažké prinútiť tento softvér pripojiť sa k škodlivému serveru MySQL, túto možnosť by ste mali vypnúť: táto schopnosť je zbytočná a zo svojej podstaty nebezpečná.

Túto možnosť vypnete nastavením: %s',
  'Activity "%s" is not currently marked as required, so there is no need to complete it.' => 'Aktivita „%s“ momentálne nie je označená ako povinná, takže ju netreba dokončiť.',
  'To continue, resolve this problem and reload the page.' => 'Ak chcete pokračovať, vyriešte tento problém a znovu načítajte stránku.',
  'Wordmark' => 'Slovná značka',
  'WARNING: This is a prototype option and the description below is currently pure fantasy.

Switch the service to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => 'WARNING: Toto je prototypová možnosť a nasledujúci popis je momentálne čistá fantázia.

Prepne službu do režimu len na čítanie. V tomto režime nebudú môcť používatelia zapisovať nové údaje. Za normálnych okolností klaster prejde do tohto režimu automaticky, keď zistí, že hlavný databázový server je nedostupný, no môžete ho aktivovať aj manuálne, aby ste vykonali údržbu alebo otestovali konfiguráciu.',
  'Severe Security Vulnerability: Unpatched Bash' => 'Závažná bezpečnostná zraniteľnosť: neopravený Bash',
  'Force HTTPS' => 'Vynútiť HTTPS',
  'This key is not expected to exist.' => 'Neočakáva sa, že tento kľúč bude existovať.',
  '%s.%s' => '%s.%s',
  '%s.%s.%s' => '%s.%s.%s',
  '%d related link(s):' => array(
    'Súvisiaci odkaz:',
    'Súvisiace odkazy:',
  ),
  'To rebuild identities, run this command:' => 'Identity znovu zostavíte spustením tohto príkazu:',
  'Missing Repository Local Path' => 'Chýbajúca lokálna cesta repozitára',
  'An alternate resource map is no longer supported. Instead, use multiple maps. See T4222.' => 'Alternatívna mapa zdrojov sa už nepodporuje. Namiesto toho použite viacero máp. Pozri T4222.',
  'Repository Services' => 'Služby repozitárov',
  'Inline comments are now always rendered with a limited amount of context.' => 'Vložené komentáre sa teraz vždy vykresľujú s obmedzeným množstvom kontextu.',
  'Locked Configuration Option "%s" Has Database Value' => 'Uzamknutá konfiguračná možnosť „%s“ má hodnotu v databáze',
  'Separate values with newlines or commas.' => 'Hodnoty oddeľte novými riadkami alebo čiarkami.',
  'Don\'t require email verification' => 'Nevyžadovať overenie e-mailu',
  'Configuration key "%s" is unknown. Use "bin/config list" to list all known keys.' => 'Konfiguračný kľúč „%s“ je neznámy. Zoznam všetkých známych kľúčov získate príkazom „bin/config list“.',
  'Alternate File Domain Not Configured' => 'Alternatívna doména pre súbory nie je nastavená',
  'Unknown schema issue "%s"!' => 'Neznámy problém so schémou „%s“!',
  'Embed Commons videos' => 'Vkladať videá z Commons',
  'Your server is configured with \'%s\', which prevents this software from opening files it requires access to.

Disable this setting to continue.' => 'Váš server má nastavené „%s“, čo tomuto softvéru bráni otvárať súbory, ku ktorým potrebuje prístup.

Ak chcete pokračovať, toto nastavenie vypnite.',
  'Limit page execution time to debug hangs.' => 'Obmedziť čas vykonávania stránky na ladenie zamŕzania.',
  'Base URI Not Configured' => 'Základné URI nie je nastavené',
  'Cannot identify the version of the %s repository because the webserver does not trust it (more info on Task %s).
Try this system resolution:
sudo git config --system --add safe.directory %s' => 'Nedá sa určiť verzia repozitára %s, pretože mu webový server nedôveruje (viac informácií v úlohe %s).
Skúste toto systémové riešenie:
sudo git config --system --add safe.directory %s',
  'Always Activate DarkConsole' => 'Vždy aktivovať DarkConsole',
  'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.

This may mean the base URI is configured incorrectly. You must serve this software from a base URI with a dot (like "https://devtools.example.com"), not a bare domain (like "https://devtools/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.

This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.

Requests must include a valid "Host" header.' => 'Táto požiadavka obsahovala neplatnú hlavičku „Host“ s hodnotou „%s“. Hlavičky Host musia obsahovať bodku („.“), napríklad „example.com“. Vyžaduje sa to preto, aby niektoré prehliadače mohli nastaviť súbory cookie.

Môže to znamenať, že základné URI je nastavené nesprávne. Tento softvér musíte poskytovať zo základného URI s bodkou (napríklad „https://devtools.example.com“), nie z holej domény (napríklad „https://devtools/“). Ak sa pokúšate použiť holú doménu, zmeňte svoju konfiguráciu tak, aby namiesto toho používala úplnú doménu s bodkou.

Môže to tiež znamenať, že váš webový server (alebo nejaké iné sieťové zariadenie, napríklad vyrovnávač záťaže) komolí hlavičku „Host“, prípadne že požiadavku vytvárate ručne pomocou nástroja či knižnice a nastavujete nesprávnu hlavičku „Host“.

Požiadavky musia obsahovať platnú hlavičku „Host“.',
  'User Interface' => 'Používateľské rozhranie',
  'No Schema Issues' => 'Žiadne problémy so schémou',
  'MySQL database hostname.' => 'Názov hostiteľa databázy MySQL.',
  'Obsolete Config' => 'Zastaraná konfigurácia',
  'Sets the default color scheme.' => 'Nastavuje predvolenú farebnú schému.',
  'Clustering Introduction' => 'Úvod do klastrovania',
  'By default, this software includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => 'Tento softvér predvolene obsahuje v rozhraní doplnkový text, napríklad výzvu „Weigh In“ namiesto „Add Comment“ v Maniphest. Ak uprednostňujete tradičnejšie reťazce rozhrania ako „Add Comment“, môžete nastaviť tento príznak a väčšinu tohto doplnkového textu vypnúť.',
  'This software sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.

This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'Tento softvér si poslal testovaciu požiadavku a očakával, že dostane späť holú odpoveď vo formáte JSON. Prijal odpoveď JSON, no odpoveď mala na začiatku alebo na konci biele znaky navyše.

Zvyčajne to znamená, že ste upravili nejaký súbor a nechali v ňom biele znaky pred otváracou značkou %s alebo za zatváracou značkou %s. Odstráňte všetky úvodné biele znaky a zatváracie značky radšej vynechávajte.',
  'MySQL on this machine' => 'MySQL na tomto stroji',
  'No such configuration key \'%s\'! Use `%s` to list all keys.' => 'Konfiguračný kľúč „%s“ neexistuje! Zoznam všetkých kľúčov získate príkazom `%s`.',
  'You can respond to various application events by installing listeners, which will receive callbacks when interesting things occur. Specify a list of classes which extend PhabricatorEventListener here.' => 'Na rôzne udalosti aplikácií môžete reagovať nainštalovaním poslucháčov, ktorí dostanú spätné volanie, keď nastanú zaujímavé udalosti. Zadajte tu zoznam tried, ktoré rozširujú PhabricatorEventListener.',
  'This install has a fatal setup error, access the web interface to view details and resolve it.' => 'Táto inštalácia má fatálnu chybu nastavenia; podrobnosti zobrazíte a vyriešite vo webovom rozhraní.',
  'Alternate domain to serve files from.' => 'Alternatívna doména, z ktorej sa majú poskytovať súbory.',
  'Your webserver is not forwarding credentials.' => 'Váš webový server neposiela poverenia ďalej.',
  'Default non-pygments syntax highlighter engine.' => 'Predvolený nástroj na zvýrazňovanie syntaxe bez Pygments.',
  'HTTP Parameter Types' => 'Typy parametrov HTTP',
  'Mangled Webserver Response' => 'Skomolená odpoveď webového servera',
  'Setup issues to ignore.' => 'Problémy s nastavením, ktoré sa majú ignorovať.',
  'Directory that the daemons should use to store log files.' => 'Adresár, ktorý majú démoni používať na ukladanie súborov denníkov.',
  'Only allow registration from particular domains.' => 'Povoliť registráciu iba z určitých domén.',
  'Subschemata have setup failures.' => 'Podschémy majú chyby nastavenia.',
  'No performance sampling.' => 'Bez vzorkovania výkonu.',
  'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.

For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.

You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.

To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:

%s
' => 'Databázový hostiteľ „%s“ je nastavený tak, aby pri zostavovaní vyhľadávacích indexov používal predvolenú minimálnu dĺžku slova, ktorá je 4. To znamená, že slová dlhé len 3 znaky sa nebudú indexovať a nedajú sa vyhľadať.

Napríklad nebudete môcť nájsť výsledky vyhľadávania pre slová ako „SMS“, „web“ alebo „DOS“.

Toto nastavenie môžete zmeniť na 3, aby sa tieto slová indexovali. Prípadne môžete toto varovanie ignorovať, ak vám na vyhľadávaní trojpísmenových slov nezáleží. Ignorovať ho môžete aj vtedy, ak neskôr plánujete nastaviť Elasticsearch: ovplyvnené je len fulltextové vyhľadávanie v MySQL.

Ak chcete znížiť minimálnu dĺžku slova na 3, pridajte toto do svojho súboru %s (do sekcie %s) a potom reštartujte %s:

%s',
  '%s\'s home page' => 'Domovská stránka %s',
  'Show installed extensions and modules.' => 'Zobrazte nainštalované rozšírenia a moduly.',
  'Opcode Cache' => 'Vyrovnávacia pamäť opcode',
  'Specify a value to set the configuration key "%s" to, or use "--stdin" to read a value from stdin.' => 'Zadajte hodnotu, na ktorú sa má konfiguračný kľúč „%s“ nastaviť, alebo použite „--stdin“ na načítanie hodnoty zo štandardného vstupu.',
  'ID of the SSH key used to authenticate the request.' => 'ID kľúča SSH použitého na overenie požiadavky.',
  'You can usually install a PHP extension using %s, %s, or %s. A common package name is %s. Try commands like these:' => 'Rozšírenie PHP zvyčajne nainštalujete pomocou %s, %s alebo %s. Bežný názov balíka je %s. Skúste príkazy ako tieto:',
  'US East (EDT)' => 'US East (EDT)',
  'The HTTP referrer.' => 'Referrer HTTP.',
  'HTTP Parameters Not Transmitting' => 'Parametre HTTP sa neprenášajú',
  'Determines whether Wikimedia Commons videos get embedded.' => 'Určuje, či sa videá z Wikimedia Commons vkladajú priamo do stránky.',
  'Better Collation Available' => 'K dispozícii je lepšie porovnávanie',
  'View "%s"' => 'Zobraziť „%s“',
  'This setup issue has been resolved. ' => 'Tento problém s nastavením bol vyriešený.',
  'Additional configuration options to hide.' => 'Ďalšie konfiguračné možnosti, ktoré sa majú skryť.',
  'The logged-in username, if one is logged in.' => 'Prihlásené používateľské meno, ak je niekto prihlásený.',
  'Deprecated Code' => 'Zastaraný kód',
  'PHP date functions will emit a warning if they are called when no default
server timezone is configured.

Usually, you configure a default timezone in `php.ini` by setting the
configuration value `date.timezone`.

If you prefer, you can configure a default timezone here instead. To configure
a default timezone, select a timezone from the
[[ %s | PHP List of Supported Timezones ]].' => 'Funkcie PHP na prácu s dátumami vypíšu varovanie, ak sa zavolajú v čase, keď
nie je nastavené predvolené časové pásmo servera.

Predvolené časové pásmo si zvyčajne nastavíte v `php.ini` nastavením
konfiguračnej hodnoty `date.timezone`.

Ak chcete, môžete predvolené časové pásmo namiesto toho nastaviť tu. Predvolené
časové pásmo nastavíte tak, že vyberiete časové pásmo zo
[[ %s | zoznamu podporovaných časových pásiem v PHP ]].',
  'No REMOTE_ADDR available' => 'Nie je k dispozícii žiadne REMOTE_ADDR',
  'File storage in Amazon S3 has been partially configured, but you are missing some required settings. S3 will not be available to store files until you complete the configuration. Either configure S3 fully or remove the partial configuration.' => 'Ukladanie súborov v Amazon S3 bolo nastavené len čiastočne, chýbajú vám niektoré požadované nastavenia. Kým konfiguráciu nedokončíte, S3 nebude na ukladanie súborov k dispozícii. Buď nastavte S3 úplne, alebo čiastočnú konfiguráciu odstráňte.',
  'The logged-in user PHID, if one is logged in.' => 'PHID prihláseného používateľa, ak je niekto prihlásený.',
  'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.

If you provide an instance identifier here (normally by injecting it with a `%s`), the server will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'WARNING: Toto je veľmi pokročilá možnosť a je užitočná len pre poskytovateľov hostingu prevádzkujúcich viacnájomné klastre.

Ak tu uvediete identifikátor inštancie (zvyčajne jeho vložením pomocou `%s`), server ho odovzdá podprocesom a commit hookom v premennej prostredia `%s`.',
  'Version Information' => 'Informácie o verzii',
  'The base URI for this install is not configured, and major features will not work properly until you configure it.

You should set the base URI to the URI you will use to access this server, like "https://devtools.example.com/".

Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).

Based on this request, it appears that the correct setting is:

%s

To configure the base URI, run the command shown below.' => 'Základné URI tejto inštalácie nie je nastavené a dôležité funkcie nebudú fungovať správne, kým ho nenastavíte.

Základné URI by ste mali nastaviť na URI, cez ktoré budete k tomuto serveru pristupovať, napríklad „https://devtools.example.com/“.

Uveďte protokol (http alebo https), názov domény a číslo portu, ak používate iný port než 80 (http) alebo 443 (https).

Na základe tejto požiadavky sa zdá, že správne nastavenie je:

%s

Základné URI nastavíte spustením príkazu uvedeného nižšie.',
  'HTTP Path Rewriting Incorrect' => 'Nesprávne prepisovanie ciest HTTP',
  'Surplus' => 'Nadbytočné',
  'Instance identifier for multi-tenant clusters.' => 'Identifikátor inštancie pre viacnájomné klastre.',
  'Upgrade MySQL Schema' => 'Aktualizovať schému MySQL',
  'Unignore Setup Issue' => 'Zrušiť ignorovanie problému s nastavením',
  'Automatically sample some fraction of requests.' => 'Automaticky vzorkovať určitú časť požiadaviek.',
  'SSH log location.' => 'Umiestnenie denníka SSH.',
  'Arbitrarily large files are now supported. Consult the documentation for configuration details.' => 'Ľubovoľne veľké súbory sú teraz podporované. Podrobnosti o nastavení nájdete v dokumentácii.',
  'Delete a local configuration value.' => 'Odstrániť lokálnu konfiguračnú hodnotu.',
  'These paths get appended to your %s environment variable.' => 'Tieto cesty sa pripoja k vašej premennej prostredia %s.',
  'Epoch timestamp.' => 'Časová pečiatka epochy.',
  'Option "%s" is dangerously long for a database prefix in MySQL/MariaDB. The current value is %d characters long. It should be less than %d to be safe for future changes.' => 'Možnosť „%s“ je nebezpečne dlhá na predponu databázy v MySQL/MariaDB. Aktuálna hodnota má %d znakov. Aby bola bezpečná pre budúce zmeny, mala by mať menej než %d.',
  'Blindigo' => 'Blindigo',
  'Expected Column Type' => 'Očakávaný typ stĺpca',
  'Enable developer mode' => 'Zapnúť vývojársky režim',
  '%s, occurrences: %s' => '%s, výskyty: %s',
  'Woe! This request had its journey cut short by unexpected circumstances (%s).' => 'Beda! Cestu tejto požiadavky skrátili nečakané okolnosti (%s).',
  'Customizes retention policies for garbage collectors.' => 'Prispôsobuje zásady uchovávania pre zberače odpadu.',
  'This schema can use a better column type.' => 'Táto schéma môže používať lepší typ stĺpca.',
  'Without \'%s\', this software will not be able to generate or render diffs in multiple applications.' => 'Bez „%s“ nebude tento softvér schopný generovať ani vykresľovať diffy vo viacerých aplikáciách.',
  'The request date.' => 'Dátum požiadavky.',
  'Reply handlers can no longer be overridden with configuration.' => 'Obsluhy odpovedí sa už nedajú prepísať konfiguráciou.',
  'There is some deprecated code found in the %s code-base.

This isn\'t a problem yet, but it means that %s might stop working if you upgrade PHP version.

This page records a sample of the cases since last server restart. 

To solve this issue, either:

- Visit %s, file bug report with the information below, or
- Ignore this issue using the `Ignore` button below.

' => 'V kódovej základni %s sa našiel zastaraný kód.

Zatiaľ to nie je problém, ale znamená to, že %s môže prestať fungovať, ak aktualizujete verziu PHP.

Na tejto stránke sa zaznamenáva vzorka prípadov od posledného reštartu servera. 

Tento problém vyriešite jedným z týchto spôsobov:

- navštívte %s a nahláste chybu s informáciami uvedenými nižšie, alebo
- ignorujte tento problém pomocou tlačidla `Ignore` nižšie.',
  'Note that the default format is subject to change in the future, so if you rely on the log\'s format, specify it explicitly.' => 'Majte na pamäti, že predvolený formát sa môže v budúcnosti zmeniť, takže ak sa na formát denníka spoliehate, zadajte ho výslovne.',
  'Send as %s' => 'Odoslať ako %s',
  'Setup Error' => 'Chyba nastavenia',
  'Installed on Burstable CPU Instance' => 'Nainštalované na inštancii s nárazovým výkonom CPU',
  'MySQL is Using Default Minimum Word Length' => 'MySQL používa predvolenú minimálnu dĺžku slova',
  'Extensions/Modules' => 'Rozšírenia/moduly',
  'The directory for local repositories (%s) does not exist, or is not readable by the webserver. This software uses this directory to store information about repositories. If this directory does not exist, create it:

%s
If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => 'Adresár pre lokálne repozitáre (%s) neexistuje alebo pre ne webový server nemá právo čítania. Tento softvér používa tento adresár na ukladanie informácií o repozitároch. Ak tento adresár neexistuje, vytvorte ho:

%s
Ak tento adresár existuje, sprístupnite ho webovému serveru na čítanie. Môžete tiež upraviť konfiguráciu nižšie a použiť nejaký iný adresár.',
  'In places that we display a dropdown to syntax-highlight code, this is where that list is defined.' => 'Toto je miesto, kde sa definuje zoznam, ktorý sa objaví v rozbaľovacej ponuke na zvýrazňovanie syntaxe kódu.',
  'This change supports situations where users are incorrectly associated with commits because the software makes a bad guess about how the VCS string maps to a user account. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with features which rely on the existence of these identities.' => 'Táto zmena rieši situácie, keď sa používatelia nesprávne priraďujú ku commitom, pretože softvér zle odhadne, ako sa reťazec VCS mapuje na používateľský účet. Pomáha aj v situáciách, keď sa importujú existujúce repozitáre bez toho, aby boli vytvorené účty pre všetkých commiterov daného repozitára. Kým tieto identity repozitárov znovu nezostavíte, pravdepodobne budete narážať na problémy s funkciami, ktoré závisia od existencie týchto identít.',
  'Unignore' => 'Zrušiť ignorovanie',
  'Text values that match this regex and are also object names will not be linked.' => 'Textové hodnoty, ktoré vyhovujú tomuto regulárnemu výrazu a sú zároveň názvami objektov, sa nebudú prepájať.',
  '%s Held / %sms' => '%s zadržaných / %s ms',
);
  }

}
