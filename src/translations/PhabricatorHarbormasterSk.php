<?php

final class PhabricatorHarbormasterSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Build Artifact' => 'Artefakt zostavenia',
  'Plan %d %s' => 'Plán %d %s',
  'Waiting for Message' => 'Čaká sa na správu',
  'Harbormaster Artifacts' => 'Artefakty Harbormaster',
  'Updating build %d of buildable %s...' => 'Aktualizuje sa zostavenie %d zostaviteľného objektu %s…',
  'TEST RESULT' => 'VÝSLEDOK TESTU',
  'Browse Dependencies' => 'Prehľadávať závislosti',
  'Unable to Pause Build' => 'Zostavenie sa nedá pozastaviť',
  'Search for builds by containing revision or repository.' => 'Hľadať zostavenia podľa obsahujúcej revízie alebo repozitára.',
  'Started at %s' => 'Začaté o %s',
  'Valid Output' => 'Platný výstup',
  'Failed to gzdeflate() log data!' => 'Nepodarilo sa vykonať gzdeflate() na údajoch denníka!',
  'Deadlocked' => 'Uviaznuté',
  'Buildkite did not return a "%s"!' => 'Buildkite nevrátil „%s“!',
  'For example:' => 'Napríklad:',
  'OK: Ignored event.' => 'OK: Udalosť ignorovaná.',
  'Behavior: %s' => 'Správanie: %s',
  'Build Passed' => 'Zostavenie prešlo',
  'You can only restart some builds.' => 'Reštartovať môžete len niektoré zostavenia.',
  'Resume Build' => 'Obnoviť zostavenie',
  'Retrieve information about Harbormaster build targets.' => 'Získať informácie o cieľoch zostavenia Harbormaster.',
  'Unable to identify the protocol for URI "%s". URIs must be fully qualified and have an identifiable protocol.' => 'Nepodarilo sa určiť protokol pre URI „%s“. URI musia byť plne kvalifikované a mať identifikovateľný protokol.',
  'Log Not Finalized' => 'Denník nie je finalizovaný',
  'PHID of the object this build is building.' => 'PHID objektu, ktorý toto zostavenie zostavuje.',
  'No build plans found.' => 'Nenašli sa žiadne plány zostavenia.',
  'This plan can not be run manually.' => 'Tento plán sa nedá spustiť ručne.',
  'Artifact "%s" not found!' => 'Artefakt „%s“ sa nenašiel!',
  'Run a command on Drydock resource.' => 'Spustiť príkaz na zdroji Drydock.',
  '%s Skipped Test(s)' => array(
    '%s preskočený',
    '%s preskočené',
    '%s preskočených',
  ),
  'Severity of the message.' => 'Závažnosť správy.',
  'The build plan for this build is configured to prevent users who can not edit it from issuing commands to the build, and you do not have permission to edit the build plan.' => 'Plán zostavenia pre toto zostavenie je nastavený tak, aby zabránil používateľom, ktorí ho nemôžu upravovať, vydávať zostaveniu príkazy, a vy nemáte povolenie upravovať tento plán zostavenia.',
  'You can not pause a build that uses an autoplan.' => 'Zostavenie, ktoré používa automatický plán, nemôžete pozastaviť.',
  'Search for targets with given statuses.' => 'Hľadať ciele s danými stavmi.',
  'Unsound' => 'Nespoľahlivý',
  'Run a build in CircleCI.' => 'Spustiť zostavenie v CircleCI.',
  'View External Build Results' => 'Zobraziť výsledky externého zostavenia',
  'Build with Buildkite' => 'Zostaviť pomocou Buildkite',
  'Attempt to load log bytes (%d - %d) failed: failed to load a single contiguous range. Actual ranges: %s.' => 'Pokus o načítanie bajtov denníka (%d – %d) zlyhal: nepodarilo sa načítať jediný súvislý rozsah. Skutočné rozsahy: %s.',
  'Not A Haiku' => 'Nie je haiku',
  '%s Broken Test(s)' => array(
    '%s pokazený',
    '%s pokazené',
    '%s pokazených',
  ),
  'Resuming' => 'Obnovuje sa',
  'Insufficient Build Plan Permission' => 'Nedostatočné oprávnenie k plánu zostavenia',
  'Publishing "%s"...' => 'Publikuje sa „%s“…',
  'The name of the build target.' => 'Názov cieľa zostavenia.',
  'Edit Plan' => 'Upraviť plán',
  'This test has too much data to display inline.' => 'Tento test má priveľa údajov na zobrazenie priamo v texte.',
  'Run %d' => 'Spustiť %d',
  'Organization Name' => 'Názov organizácie',
  'True if this artifact has been released.' => 'True, ak bol tento artefakt uvoľnený.',
  'Browse Builds' => 'Prehľadávať zostavenia',
  'Expected "%s" property to contain a dictionary.' => 'Očakávalo sa, že vlastnosť „%s“ bude obsahovať slovník.',
  'You must have edit permission on this build plan to pause, abort, resume, or restart it.' => 'Na pozastavenie, prerušenie, obnovenie alebo reštartovanie tohto plánu zostavenia musíte mať povolenie na jeho úpravu.',
  'Really Delete Step?' => 'Naozaj odstrániť krok?',
  'or' => 'alebo',
  'Completed' => 'Dokončené',
  'Revisions are not sent for review until the build completes, but they will be sent for review even if it fails.' => 'Revízie sa neodošlú na posúdenie, kým sa zostavenie nedokončí, ale odošlú sa na posúdenie aj vtedy, ak zlyhá.',
  'You can not resume this build because it is already restarting.' => 'Toto zostavenie nemôžete obnoviť, pretože sa už reštartuje.',
  'Output Artifacts' => 'Výstupné artefakty',
  'Manage Build Plans' => 'Spravovať plány zostavenia',
  'Default Build Plan View Policy' => 'Predvolená zásada zobrazenia plánu zostavenia',
  'Choose a build target to attach the log to with "--target".' => 'Vyberte cieľ zostavenia, ku ktorému sa má denník pripojiť, pomocou „--target“.',
  'Build Preparing' => 'Zostavenie sa pripravuje',
  'This test result has %s bytes of Remarkup test details. Remarkup blocks longer than %s bytes are not rendered inline when showing test summaries.' => array(
    
    array(
      'Tento výsledok testu má %s bajt podrobností testu vo formáte Remarkup. Bloky Remarkup dlhšie ako %s bajt sa pri zobrazovaní súhrnov testov nevykresľujú priamo v texte.',
      'Tento výsledok testu má %s bajt podrobností testu vo formáte Remarkup. Bloky Remarkup dlhšie ako %s bajty sa pri zobrazovaní súhrnov testov nevykresľujú priamo v texte.',
      'Tento výsledok testu má %s bajt podrobností testu vo formáte Remarkup. Bloky Remarkup dlhšie ako %s bajtov sa pri zobrazovaní súhrnov testov nevykresľujú priamo v texte.',
    ),
    
    array(
      'Tento výsledok testu má %s bajty podrobností testu vo formáte Remarkup. Bloky Remarkup dlhšie ako %s bajt sa pri zobrazovaní súhrnov testov nevykresľujú priamo v texte.',
      'Tento výsledok testu má %s bajty podrobností testu vo formáte Remarkup. Bloky Remarkup dlhšie ako %s bajty sa pri zobrazovaní súhrnov testov nevykresľujú priamo v texte.',
      'Tento výsledok testu má %s bajty podrobností testu vo formáte Remarkup. Bloky Remarkup dlhšie ako %s bajtov sa pri zobrazovaní súhrnov testov nevykresľujú priamo v texte.',
    ),
    
    array(
      'Tento výsledok testu má %s bajtov podrobností testu vo formáte Remarkup. Bloky Remarkup dlhšie ako %s bajt sa pri zobrazovaní súhrnov testov nevykresľujú priamo v texte.',
      'Tento výsledok testu má %s bajtov podrobností testu vo formáte Remarkup. Bloky Remarkup dlhšie ako %s bajty sa pri zobrazovaní súhrnov testov nevykresľujú priamo v texte.',
      'Tento výsledok testu má %s bajtov podrobností testu vo formáte Remarkup. Bloky Remarkup dlhšie ako %s bajtov sa pri zobrazovaní súhrnov testov nevykresľujú priamo v texte.',
    ),
  ),
  'Edit Buildable' => 'Upraviť zostaviteľný objekt',
  'Call includes "lint" parameter. This parameter must be omitted when the receiver is not a Build Target.' => 'Volanie obsahuje parameter „lint“. Tento parameter musí byť vynechaný, keď prijímateľ nie je cieľ zostavenia.',
  'This build can not be restarted because it is an automatic build.' => 'Toto zostavenie sa nedá reštartovať, pretože ide o automatické zostavenie.',
  'Started After' => 'Začaté po',
  'Specify exactly one buildable, by object name.' => 'Zadajte presne jeden zostaviteľný objekt, podľa názvu objektu.',
  'You can use this method to send control commands to Buildables and Builds.

This table summarizes which object types may receive control commands:

<table>
  <tr>
    <th>Object Type</th>
    <th>PHID Example</th>
    <th />
    <th>Description</th>
  </tr>
  <tr>
    <td>Harbormaster Buildable</td>
    <td>`PHID-HMBB-...`</td>
    <td>{icon check color=green}</td>
    <td>Buildables may receive control commands.</td>
  </tr>
  <tr>
    <td>Harbormaster Build</td>
    <td>`PHID-HMBD-...`</td>
    <td>{icon check color=green}</td>
    <td>Builds may receive control commands.</td>
  </tr>
  <tr>
    <td>Harbormaster Build Target</td>
    <td>`PHID-HMBT-...`</td>
    <td>{icon times color=red}</td>
    <td>You may **NOT** send control commands to build targets.</td>
  </tr>
</table>

You can send these commands:

%s

To send a command message, specify the PHID of the object you would like to
receive the message using the `receiver` parameter, and specify the message
type using the `type` parameter.
' => 'Túto metódu môžete použiť na odosielanie riadiacich príkazov zostaviteľným objektom a zostaveniam.

Táto tabuľka zhŕňa, ktoré typy objektov môžu prijímať riadiace príkazy:

<table>
  <tr>
    <th>Typ objektu</th>
    <th>Príklad PHID</th>
    <th />
    <th>Opis</th>
  </tr>
  <tr>
    <td>Zostaviteľný objekt Harbormaster</td>
    <td>`PHID-HMBB-...`</td>
    <td>{icon check color=green}</td>
    <td>Zostaviteľné objekty môžu prijímať riadiace príkazy.</td>
  </tr>
  <tr>
    <td>Zostavenie Harbormaster</td>
    <td>`PHID-HMBD-...`</td>
    <td>{icon check color=green}</td>
    <td>Zostavenia môžu prijímať riadiace príkazy.</td>
  </tr>
  <tr>
    <td>Cieľ zostavenia Harbormaster</td>
    <td>`PHID-HMBT-...`</td>
    <td>{icon times color=red}</td>
    <td>Cieľom zostavenia **NESMIETE** posielať riadiace príkazy.</td>
  </tr>
</table>

Môžete odoslať tieto príkazy:

%s

Ak chcete odoslať príkazovú správu, zadajte PHID objektu, ktorý má správu
prijať, pomocou parametra `receiver` a zadajte typ správy pomocou parametra
`type`.',
  'Enable Plan' => 'Povoliť plán',
  'Unable to Abort Build' => 'Zostavenie sa nedá prerušiť',
  'Unable to Load File' => 'Súbor sa nedá načítať',
  'Edit Build: %s' => 'Upraviť zostavenie: %s',
  'The object PHID of the object (usually a diff or commit) being built.' => 'PHID objektu (zvyčajne diffu alebo commitu), ktorý sa zostavuje.',
  'Build Target' => 'Cieľ zostavenia',
  'Unable to determine how to fetch changes: this buildable does not identify a commit or a staging ref. You may need to configure a repository staging area.' => 'Nepodarilo sa určiť, ako načítať zmeny: tento zostaviteľný objekt neidentifikuje commit ani ref prípravnej oblasti. Možno budete musieť nakonfigurovať prípravnú oblasť repozitára.',
  'Failed to load build plan ("%s").' => 'Nepodarilo sa načítať plán zostavenia („%s“).',
  'Run plan __id__ on __buildable__.' => 'Spustiť plán __id__ na __buildable__.',
  'Step %d' => 'Krok %d',
  'Build Started' => 'Zostavenie začaté',
  'Done. Total byte size of affected logs: %s -> %s.' => 'Hotovo. Celková veľkosť ovplyvnených denníkov v bajtoch: %s -> %s.',
  'Build %d: %s' => 'Zostavenie %d: %s',
  '%s aborted this build.' => '%s prerušil(a) toto zostavenie.',
  'Disable Build Plan' => 'Zakázať plán zostavenia',
  'Search for targets of a given build.' => 'Hľadať ciele daného zostavenia.',
  'Enable Build Plan' => 'Povoliť plán zostavenia',
  'Webhook Token' => 'Token webhooku',
  'When creating an artifact, you will choose an `artifactType` from this table. These types of artifacts are supported:' => 'Pri vytváraní artefaktu vyberiete `artifactType` z tejto tabuľky. Podporované sú tieto typy artefaktov:',
  'Aborting' => 'Prerušuje sa',
  '%s Other Test(s)' => array(
    '%s iný',
    '%s iné',
    '%s iných',
  ),
  'A buildable inherits policies from the underlying object.' => 'Zostaviteľný objekt dedí zásady od podkladového objektu.',
  'Build Steps' => 'Kroky zostavenia',
  'Harbormaster Builds' => 'Zostavenia Harbormaster',
  '%s paused this build.' => '%s pozastavil(a) toto zostavenie.',
  'Sleep for %s seconds.' => 'Spať %s sekúnd.',
  '%s created this build step.' => '%s vytvoril(a) tento krok zostavenia.',
  'Buildable Name' => 'Názov zostaviteľného objektu',
  'If Complete' => 'Ak je dokončené',
  'This object does not support builds with Buildkite.' => 'Tento objekt nepodporuje zostavenia pomocou Buildkite.',
  'Search for targets completed on or before a particular date.' => 'Hľadať ciele dokončené v konkrétny dátum alebo pred ním.',
  'Compress, decompress, store or destroy build logs.' => 'Komprimovať, dekomprimovať, uložiť alebo zničiť denníky zostavenia.',
  'Target %d' => 'Cieľ %d',
  'The build the target is associated with.' => 'Zostavenie, ku ktorému je cieľ priradený.',
  'Received' => 'Prijaté',
  'Use "plain" to remove encoding, or "compress" to compress logs.' => 'Použite „plain“ na odstránenie kódovania alebo „compress“ na kompresiu denníkov.',
  'Default Build Plan Edit Policy' => 'Predvolená zásada úprav plánu zostavenia',
  'Unused Output' => 'Nepoužitý výstup',
  'Abort Older Builds' => 'Prerušiť staršie zostavenia',
  'Pause Build' => 'Pozastaviť zostavenie',
  'Interacting with External Build Systems' => 'Interakcia s externými systémami zostavenia',
  'Progress on this build will be discarded. Really abort build?' => 'Priebeh tohto zostavenia sa zahodí. Naozaj prerušiť zostavenie?',
  'Artifact %d' => 'Artefakt %d',
  'Path to the file containing the lint message, from the project root.' => 'Cesta k súboru obsahujúcemu správu lintu, od koreňa projektu.',
  'No artifacts found.' => 'Nenašli sa žiadne artefakty.',
  'A build step has the same policies as its build plan.' => 'Krok zostavenia má rovnaké zásady ako jeho plán zostavenia.',
  'Rebuilding log "%s"...' => 'Znovu sa zostavuje denník „%s“…',
  '%s Failed Test(s)' => array(
    '%s zlyhaný',
    '%s zlyhané',
    '%s zlyhaných',
  ),
  'Unknown mode "%s". Valid modes are: %s.' => 'Neznámy režim „%s“. Platné režimy sú: %s.',
  'Wait for previous commits to finish building the current plan before continuing.' => 'Pred pokračovaním počkať, kým predchádzajúce commity dokončia zostavovanie podľa aktuálneho plánu.',
  'No handler found for %s' => 'Nenašiel sa žiadny obsluhovač pre %s',
  'Follow Log' => 'Sledovať denník',
  'You can not resume a build that uses an autoplan.' => 'Zostavenie, ktoré používa automatický plán, nemôžete obnoviť.',
  'Explicitly update the builds for __buildable__.' => 'Explicitne aktualizovať zostavenia pre __buildable__.',
  'Path to the file where the test is declared, relative to the project root.' => 'Cesta k súboru, v ktorom je test deklarovaný, relatívna ku koreňu projektu.',
  'Apply transactions to create a new build step or edit an existing one.' => 'Použiť transakcie na vytvorenie nového kroku zostavenia alebo úpravu existujúceho.',
  'Show more details about operations as they are performed. Slow! But also very reassuring!' => 'Zobrazovať viac podrobností o operáciách počas ich vykonávania. Pomalé! Ale aj veľmi upokojujúce!',
  'Lint message code identifying the type of message, like "ERR123".' => 'Kód správy lintu identifikujúci typ správy, napríklad „ERR123“.',
  'Build will pause.' => 'Zostavenie sa pozastaví.',
  'This is an autoplan (a builtin plan provided by an application) so it can not be edited.' => 'Toto je automatický plán (zabudovaný plán poskytovaný aplikáciou), preto sa nedá upravovať.',
  'Make an authenticated HTTP %s request to %s.' => 'Vykonať autentifikovanú požiadavku HTTP %s na %s.',
  'The build target this artifact is attached to.' => 'Cieľ zostavenia, ku ktorému je tento artefakt pripojený.',
  'Sent a restart message to build.' => 'Zostaveniu bola odoslaná správa o reštarte.',
  'Line number in the file where the text which triggered the message first appears. The first line of the file is line 1, not line 0.' => 'Číslo riadka v súbore, na ktorom sa prvýkrát objaví text, ktorý vyvolal správu. Prvý riadok súboru je riadok 1, nie riadok 0.',
  'Buildables' => 'Zostaviteľné objekty',
  'The artifact key.' => 'Kľúč artefaktu.',
  'Build step "%s" has step group key "%s", but no step group with that key exists.' => 'Krok zostavenia „%s“ má kľúč skupiny krokov „%s“, ale žiadna skupina krokov s takým kľúčom neexistuje.',
  'When Complete' => 'Po dokončení',
  'Show all logs.' => 'Zobraziť všetky denníky.',
  'Invalid buildable PHID "%s".' => 'Neplatný PHID zostaviteľného objektu „%s“.',
  'Find out information about buildables.' => 'Zistiť informácie o zostaviteľných objektoch.',
  'ID of build plan to run.' => 'ID plánu zostavenia, ktorý sa má spustiť.',
  'Run Build Plan Manually' => 'Spustiť plán zostavenia ručne',
  'Limit the rate at which the log is written, to test live log streaming.' => 'Obmedziť rýchlosť zápisu denníka na otestovanie živého streamovania denníka.',
  'Running for %s' => 'Beží %s',
  'Show More Above' => 'Zobraziť viac vyššie',
  '**rebuild-log** --id __id__ [__options__]
**rebuild-log** --all' => '**rebuild-log** --id __id__ [__options__]
**rebuild-log** --all',
  '%s created this build plan.' => '%s vytvoril(a) tento plán zostavenia.',
  'Search for builds running a given build plan.' => 'Hľadať zostavenia, ktoré spúšťajú daný plán zostavenia.',
  'You do not have permission to create Harbormaster build plans.' => 'Nemáte povolenie vytvárať plány zostavenia Harbormaster.',
  'Epoch timestamp for target completion, if the target has completed.' => 'Časová pečiatka epochy pre dokončenie cieľa, ak sa cieľ dokončil.',
  'Build plan "%s" does not exist.' => 'Plán zostavenia „%s“ neexistuje.',
  'You can not pause this build because it is already aborting.' => 'Toto zostavenie nemôžete pozastaviť, pretože sa už prerušuje.',
  'Pause the build.' => 'Pozastaviť zostavenie.',
  'Really resume %s build(s)?' => array(
    'Naozaj obnoviť zostavenie?',
    'Naozaj obnoviť %s zostavenia?',
    'Naozaj obnoviť %s zostavení?',
  ),
  'Uploaded File' => 'Nahraný súbor',
  'Force the buildable to update even if no build status changes occur during normal update.' => 'Vynútiť aktualizáciu zostaviteľného objektu, aj keď počas bežnej aktualizácie nenastanú žiadne zmeny stavu zostavenia.',
  'INVALID' => 'NEPLATNÉ',
  'Unable to load object "%s" to receive message.' => 'Nepodarilo sa načítať objekt „%s“ na prijatie správy.',
  'No such variable \'%s\'!' => 'Taká premenná neexistuje: „%s“!',
  'Request OK
' => 'Požiadavka OK',
  'The object PHID of the Harbormaster Build being built.' => 'PHID objektu zostavenia Harbormaster, ktoré sa zostavuje.',
  'Logs must be fully written and processed before they can be downloaded. This log is still being written or processed.' => 'Denníky musia byť úplne zapísané a spracované, kým ich možno stiahnuť. Tento denník sa ešte zapisuje alebo spracúva.',
  '%s restarted this build.' => '%s reštartoval(a) toto zostavenie.',
  'Harbormaster Buildables' => 'Zostaviteľné objekty Harbormaster',
  'Sleep' => 'Spať',
  'Writing log, slowly...' => 'Zapisuje sa denník, pomaly…',
  'Unknown CircleCI build type "%s". Expected "%s" or "%s".' => 'Neznámy typ zostavenia CircleCI „%s“. Očakávalo sa „%s“ alebo „%s“.',
  'You must openBuildLog() before you can append() content to the log.' => 'Pred pridaním obsahu do denníka pomocou append() musíte zavolať openBuildLog().',
  'Plan %d' => 'Plán %d',
  'Drydock: Run Command' => 'Drydock: Spustiť príkaz',
  'Abort the build, discarding progress.' => 'Prerušiť zostavenie a zahodiť priebeh.',
  'Buildables may receive control commands like "abort" and "restart". Sending a control command to a Buildable is the same as sending it to each Build for the Buildable.' => 'Zostaviteľné objekty môžu prijímať riadiace príkazy ako „abort“ a „restart“. Odoslanie riadiaceho príkazu zostaviteľnému objektu je to isté ako jeho odoslanie každému zostaveniu tohto zostaviteľného objektu.',
  'Coverage information for this test.' => 'Informácie o pokrytí pre tento test.',
  'This attachment exists solely to provide compatibility with the message format returned by an outdated API method. It will be taken away at some point and you should not rely on these fields being available.' => 'Táto príloha existuje výhradne na zabezpečenie kompatibility s formátom správy, ktorý vracia zastaraná metóda API. V určitom momente bude odstránená a nemali by ste sa spoliehať na dostupnosť týchto polí.',
  'The build plan name.' => 'Názov plánu zostavenia.',
  'View Current Build' => 'Zobraziť aktuálne zostavenie',
  'Next Steps' => 'Ďalšie kroky',
  'Fragment' => 'Fragment',
  'Build target this log is attached to.' => 'Cieľ zostavenia, ku ktorému je tento denník pripojený.',
  'Work will continue on all builds. Really resume?' => 'Práca bude pokračovať na všetkých zostaveniach. Naozaj obnoviť?',
  'Already Restarting' => 'Už sa reštartuje',
  'Stores a URI.' => 'Ukladá URI.',
  'Edit Build Step: %s' => 'Upraviť krok zostavenia: %s',
  'rXYZ, R123, D456, ...' => 'rXYZ, R123, D456, ...',
  'Rebuild all logs.' => 'Znovu zostaviť všetky denníky.',
  'Attempting to access unknown build status property ("%s").' => 'Pokus o prístup k neznámej vlastnosti stavu zostavenia („%s“).',
  'Rebuild the file and summary for a log. This is primarily intended to make it easier to develop new log summarizers.' => 'Znovu zostaviť súbor a súhrn denníka. Slúži predovšetkým na uľahčenie vývoja nových sumarizátorov denníkov.',
  'Standalone Log Fragment' => 'Samostatný fragment denníka',
  'Harbormaster Build Steps' => 'Kroky zostavenia Harbormaster',
  'You can report test results when updating the state of a build target. The
simplest way to do this is to report all the results alongside a `pass` or
`fail` message, but you can also send a `work` message to report intermediate
results.


To provide unit test results, pass a list of results in the `unit`
parameter. Each result should be a dictionary with these keys:

%s

The `result` parameter recognizes these test results:

%s

This is a simple, valid value for the `unit` parameter. It reports one passing
test and one failing test:

```lang=json
%s
```' => 'Pri aktualizácii stavu cieľa zostavenia môžete nahlásiť výsledky testov.
Najjednoduchšie je nahlásiť všetky výsledky spolu so správou `pass` alebo
`fail`, ale na nahlásenie priebežných výsledkov môžete odoslať aj správu
`work`.


Ak chcete poskytnúť výsledky jednotkových testov, odovzdajte zoznam výsledkov v parametri
`unit`. Každý výsledok by mal byť slovník s týmito kľúčmi:

%s

Parameter `result` rozpoznáva tieto výsledky testov:

%s

Toto je jednoduchá platná hodnota parametra `unit`. Hlási jeden úspešný
test a jeden neúspešný test:

```lang=json
%s
```',
  'Origin' => 'Pôvod',
  'Build Status' => 'Stav zostavenia',
  'Run At' => 'Spustené o',
  'No build plan behavior with key "%s" exists.' => 'Neexistuje žiadne správanie plánu zostavenia s kľúčom „%s“.',
  'The build may not be restarted.' => 'Toto zostavenie sa nesmie reštartovať.',
  'Initiators' => 'Iniciátori',
  'Runtime duration of the test, in seconds.' => 'Trvanie behu testu v sekundách.',
  'Lint Messages' => 'Správy lintu',
  'Missing Dependency' => 'Chýbajúca závislosť',
  'Search for targets started on or after a particular date.' => 'Hľadať ciele začaté v konkrétny dátum alebo po ňom.',
  'This target has no associated artifacts.' => 'Tento cieľ nemá žiadne priradené artefakty.',
  'Choose Build Statuses' => 'Vyberte stavy zostavenia',
  'Search for targets started on or before a particular date.' => 'Hľadať ciele začaté v konkrétny dátum alebo pred ním.',
  'The build step the target runs.' => 'Krok zostavenia, ktorý cieľ spúšťa.',
  'New Step: %s' => 'Nový krok: %s',
  'This build plan will deadlock when executed, due to circular dependencies present in the build plan. Examine the step list and resolve the deadlock.' => 'Tento plán zostavenia pri vykonaní uviazne kvôli kruhovým závislostiam prítomným v pláne zostavenia. Preskúmajte zoznam krokov a vyriešte uviaznutie.',
  'This older log is missing required rendering data. To rebuild rendering data, run: %s' => 'Tomuto staršiemu denníku chýbajú potrebné údaje na vykreslenie. Na obnovenie údajov na vykreslenie spustite: %s',
  '%s changed the %s behavior for this plan from %s to %s.' => '%s zmenil(a) správanie %s pre tento plán z %s na %s.',
  'No such buildable "%s"!' => 'Taký zostaviteľný objekt neexistuje: „%s“!',
  'Receiver object (of class "%s") is not a valid receiver.' => 'Objekt prijímateľa (triedy „%s“) nie je platný prijímateľ.',
  'PHID of the object that is built.' => 'PHID objektu, ktorý sa zostavuje.',
  'Harbormaster Build Logs' => 'Denníky zostavenia Harbormaster',
  'QUEUED' => 'V RADE',
  'You can not abort this build because it is already complete.' => 'Toto zostavenie nemôžete prerušiť, pretože je už dokončené.',
  'Retrieve information about Harbormaster build steps.' => 'Získať informácie o krokoch zostavenia Harbormaster.',
  'Edit Harbormaster Build Configurations' => 'Upravovať konfigurácie zostavenia Harbormaster',
  'WARNING: This build step is new and experimental!

To build **revisions** with CircleCI, they must:

  - belong to a tracked repository;
  - the repository must have a Staging Area configured;
  - the Staging Area must be hosted on GitHub; and
  - you must configure the webhook described below.

To build **commits** with CircleCI, they must:

  - belong to a repository that is being imported from GitHub; and
  - you must configure the webhook described below.

Webhook Configuration
=====================

Add this webhook to your `circle.yml` file to make CircleCI report results
to Harbormaster. Until you install this hook, builds will hang waiting for
a response from CircleCI.

```lang=yml
notify:
  webhooks:
    - url: %s
```

Environment
===========

These variables will be available in the build environment:

| Variable | Description |
|----------|-------------|
| `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target.
' => 'WARNING: Tento krok zostavenia je nový a experimentálny!

Aby bolo možné zostavovať **revízie** pomocou CircleCI, musia:

  - patriť do sledovaného repozitára;
  - repozitár musí mať nakonfigurovanú prípravnú oblasť;
  - prípravná oblasť musí byť hostovaná na GitHube; a
  - musíte nakonfigurovať webhook opísaný nižšie.

Aby bolo možné zostavovať **commity** pomocou CircleCI, musia:

  - patriť do repozitára, ktorý sa importuje z GitHubu; a
  - musíte nakonfigurovať webhook opísaný nižšie.

Konfigurácia webhooku
=====================

Pridajte tento webhook do súboru `circle.yml`, aby CircleCI hlásil výsledky
systému Harbormaster. Kým tento hák nenainštalujete, zostavenia budú visieť
a čakať na odpoveď od CircleCI.

```lang=yml
notify:
  webhooks:
    - url: %s
```

Prostredie
==========

V prostredí zostavenia budú dostupné tieto premenné:

| Premenná | Opis |
|----------|-------------|
| `HARBORMASTER_BUILD_TARGET_PHID` | PHID cieľa zostavenia.',
  'Search for builds started by someone or something in particular.' => 'Hľadať zostavenia začaté konkrétnym niekým alebo niečím.',
  'Any user who can view the plan can run it manually.' => 'Ktorýkoľvek používateľ, ktorý môže zobraziť plán, ho môže spustiť ručne.',
  'When a build is restarted, side effects associated with the build may occur again.' => 'Keď sa zostavenie reštartuje, vedľajšie účinky spojené so zostavením môžu nastať znova.',
  'The build may be restarted.' => 'Toto zostavenie sa smie reštartovať.',
  'Resume work on a previously paused build.' => 'Obnoviť prácu na predtým pozastavenom zostavení.',
  'Automatic `arc unit` step.' => 'Automatický krok `arc unit`.',
  'Build Plan' => 'Plán zostavenia',
  'Drydock lease PHID "%s" does not correspond to a valid lease.' => 'PHID prenájmu Drydock „%s“ nezodpovedá platnému prenájmu.',
  'The name of this build.' => 'Názov tohto zostavenia.',
  'File PHID "%s" does not correspond to a valid file.' => 'PHID súboru „%s“ nezodpovedá platnému súboru.',
  'Name one or more buildables to publish, like "B123".' => 'Uveďte jeden alebo viac zostaviteľných objektov na publikovanie, napríklad „B123“.',
  'Pausing' => 'Pozastavuje sa',
  'Manual' => 'Ručné',
  'Harbormaster build objects work somewhat differently from objects in many other
applications. Most application objects can be edited directly using synchronous
APIs (like `maniphest.edit`, `differential.revision.edit`, and so on).

However, builds require long-running background processing and Habormaster
objects have a more complex lifecycle than most other application objects and
may spend significant periods of time locked by daemon processes during build
execution. A synchronous edit might need to wait an arbitrarily long amount of
time for this lock to become available so the edit could be applied.

Additionally, some edits may also require an arbitrarily long amount of time to
//complete//. For example, aborting a build may execute cleanup steps which
take minutes (or even hours) to complete.

Since a synchronous API could not guarantee it could return results to the
caller in a reasonable amount of time, the edit API for Harbormaster build
objects is asynchronous: to update a Harbormaster build or build target, use
this API (`harbormaster.sendmessage`) to send it a message describing an edit
you would like to effect or additional information you want to provide.
The message will be processed by the daemons once the build or target reaches
a suitable state to receive messages.

Select an object to send a message to using the `receiver` parameter. This
API method can send messages to multiple types of objects:

<table>
  <tr>
    <th>Object Type</th>
    <th>PHID Example</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Harbormaster Buildable</td>
    <td>`PHID-HMBB-...`</td>
    <td>%s</td>
  </tr>
  <tr>
    <td>Harbormaster Build</td>
    <td>`PHID-HMBD-...`</td>
    <td>%s</td>
  </tr>
  <tr>
    <td>Harbormaster Build Target</td>
    <td>`PHID-HMBT-...`</td>
    <td>%s</td>
  </tr>
</table>

See below for specifics on sending messages to different object types.' => 'Objekty zostavenia Harbormaster fungujú trochu inak než objekty v mnohých iných
aplikáciách. Väčšinu objektov aplikácií možno upravovať priamo pomocou synchrónnych
API (napríklad `maniphest.edit`, `differential.revision.edit` a podobne).

Zostavenia však vyžadujú dlho bežiace spracovanie na pozadí a objekty Harbormaster
majú zložitejší životný cyklus než väčšina iných objektov aplikácií a
môžu počas vykonávania zostavenia stráviť značný čas uzamknuté procesmi démonov.
Synchrónna úprava by mohla musieť ľubovoľne dlho čakať,
kým bude tento zámok dostupný, aby sa úprava dala použiť.

Niektoré úpravy môžu navyše vyžadovať ľubovoľne dlhý čas na
//dokončenie//. Napríklad prerušenie zostavenia môže vykonať kroky čistenia, ktorých
dokončenie trvá minúty (alebo aj hodiny).

Keďže synchrónne API nedokáže zaručiť, že vráti výsledky volajúcemu
v rozumnom čase, API na úpravu objektov zostavenia Harbormaster
je asynchrónne: na aktualizáciu zostavenia alebo cieľa zostavenia Harbormaster použite
toto API (`harbormaster.sendmessage`) a odošlite mu správu opisujúcu úpravu,
ktorú chcete uskutočniť, alebo ďalšie informácie, ktoré chcete poskytnúť.
Správu spracujú démoni, hneď ako zostavenie alebo cieľ dosiahne
stav vhodný na prijímanie správ.

Objekt, ktorému sa má správa odoslať, vyberte pomocou parametra `receiver`. Táto
metóda API môže odosielať správy viacerým typom objektov:

<table>
  <tr>
    <th>Typ objektu</th>
    <th>Príklad PHID</th>
    <th>Opis</th>
  </tr>
  <tr>
    <td>Zostaviteľný objekt Harbormaster</td>
    <td>`PHID-HMBB-...`</td>
    <td>%s</td>
  </tr>
  <tr>
    <td>Zostavenie Harbormaster</td>
    <td>`PHID-HMBD-...`</td>
    <td>%s</td>
  </tr>
  <tr>
    <td>Cieľ zostavenia Harbormaster</td>
    <td>`PHID-HMBT-...`</td>
    <td>%s</td>
  </tr>
</table>

Podrobnosti o odosielaní správ rôznym typom objektov nájdete nižšie.',
  'The name of the build step.' => 'Názov kroku zostavenia.',
  'All Builds' => 'Všetky zostavenia',
  'No such object "%s" exists.' => 'Taký objekt „%s“ neexistuje.',
  'Object ("%s") claims "%s" is a GitHub repository URI, but the path ("%s") does not have enough components (expected at least two).' => 'Objekt („%s“) tvrdí, že „%s“ je URI repozitára GitHub, ale cesta („%s“) nemá dostatok komponentov (očakávali sa aspoň dva).',
  'Create Buildable' => 'Vytvoriť zostaviteľný objekt',
  'To run a build manually, you normally must have permission to edit the related build plan. If you would prefer that anyone who can see the build plan be able to run and restart the build, you can change the behavior here.

Note that this controls access to all build management actions: "Run Plan Manually", "Restart", "Abort", "Pause", and "Resume".

WARNING: This may be unsafe, particularly if the build has side effects like deployment.

If you weaken this policy, an attacker with control of an account that has "Can View" permission but not "Can Edit" permission can manually run this build against any old version of the code, including versions with known security issues.

If running the build has a side effect like deploying code, they can force deployment of a vulnerable version and then escalate into an attack against the deployed service.' => 'Na ručné spustenie zostavenia musíte za normálnych okolností mať povolenie upravovať súvisiaci plán zostavenia. Ak by ste radšej chceli, aby zostavenie mohol spustiť a reštartovať ktokoľvek, kto vidí plán zostavenia, môžete toto správanie zmeniť tu.

Majte na pamäti, že toto riadi prístup ku všetkým akciám správy zostavenia: „Spustiť plán ručne“, „Reštartovať“, „Prerušiť“, „Pozastaviť“ a „Obnoviť“.

WARNING: Môže to byť nebezpečné, najmä ak má zostavenie vedľajšie účinky, ako je nasadenie.

Ak túto zásadu oslabíte, útočník ovládajúci účet s povolením „Môže zobraziť“, ale nie „Môže upravovať“, môže toto zostavenie ručne spustiť proti ľubovoľnej starej verzii kódu vrátane verzií so známymi bezpečnostnými problémami.

Ak má spustenie zostavenia vedľajší účinok, napríklad nasadenie kódu, môže vynútiť nasadenie zraniteľnej verzie a následne to eskalovať do útoku proti nasadenej službe.',
  'Build Log %d (%s - %s)' => 'Denník zostavenia %d (%s – %s)',
  'Lease Working Copy' => 'Prenajať pracovnú kópiu',
  'No Build Plan Permission' => 'Žiadne oprávnenie k plánu zostavenia',
  'No behavior with key "%s" exists. Valid keys are: %s.' => 'Neexistuje žiadne správanie s kľúčom „%s“. Platné kľúče sú: %s.',
  'Nameless Test (%d)' => 'Bezmenný test (%d)',
  'Really restart build?' => 'Naozaj reštartovať zostavenie?',
  '%s renamed this build plan from "%s" to "%s".' => '%s premenoval(a) tento plán zostavenia z „%s“ na „%s“.',
  'Completed After' => 'Dokončené po',
  '%s resumed this buildable.' => '%s obnovil(a) tento zostaviteľný objekt.',
  'Force logs to rebuild even if they appear to be in good shape already.' => 'Vynútiť opätovné zostavenie denníkov, aj keď sa zdá, že sú už v poriadku.',
  'You can not process build log chunks unless the log lock is held.' => 'Bloky denníka zostavenia nemôžete spracovať, pokiaľ nie je držaný zámok denníka.',
  'Unit Tests' => 'Jednotkové testy',
  'No buildables found.' => 'Nenašli sa žiadne zostaviteľné objekty.',
  'Invalid build log PHID "%s".' => 'Neplatný PHID denníka zostavenia „%s“.',
  'References a host lease from Drydock.' => 'Odkazuje na prenájom hostiteľa z Drydocku.',
  'Type a build status name...' => 'Napíšte názov stavu zostavenia…',
  'Short message name, like "Syntax Error".' => 'Krátky názov správy, napríklad „Syntax Error“.',
  'Stores a reference to file data.' => 'Ukladá odkaz na údaje súboru.',
  'Edit Step: %s' => 'Upraviť krok: %s',
  'Optional namespace for this test. This is organizational and is often a class or module name, like "ExampleTestCase".' => 'Voliteľný menný priestor pre tento test. Je organizačný a často je to názov triedy alebo modulu, napríklad „ExampleTestCase“.',
  'Buildkite' => 'Buildkite',
  'Built for %s' => 'Zostavené pre %s',
  'Create a build artifact.' => 'Vytvoriť artefakt zostavenia.',
  'Pause, abort, restart, and report results for builds.' => 'Pozastavovať, prerušovať, reštartovať zostavenia a hlásiť ich výsledky.',
  'Step Type' => 'Typ kroku',
  'You must openBuildLog() before you can closeBuildLog().' => 'Pred zavolaním closeBuildLog() musíte zavolať openBuildLog().',
  'Unknown Input' => 'Neznámy vstup',
  'HTTP Request' => 'Požiadavka HTTP',
  'Skipped' => 'Preskočené',
  'Optional label for this URI.' => 'Voliteľná menovka pre toto URI.',
  'Harbormaster' => 'Harbormaster',
  'Build Log' => 'Denník zostavenia',
  'Control Commands' => 'Riadiace príkazy',
  'If Viewable' => 'Ak je zobraziteľné',
  'Users must be able to see a build target to view its build log.' => 'Aby používatelia videli denník zostavenia, musia vidieť jeho cieľ zostavenia.',
  'Waiting for %s' => 'Čaká sa na %s',
  'Query Harbormaster buildables.' => 'Dopytovať zostaviteľné objekty Harbormaster.',
  'Create Build Plan' => 'Vytvoriť plán zostavenia',
  'Call omits required "type" parameter. Specify the type of message you want to send.' => 'Volanie vynecháva povinný parameter „type“. Zadajte typ správy, ktorú chcete odoslať.',
  '%s disabled this build plan.' => '%s zakázal(a) tento plán zostavenia.',
  'Create Build' => 'Vytvoriť zostavenie',
  'Reading log content from stdin...' => 'Načítava sa obsah denníka zo stdin…',
  'No messages for this build target.' => 'Žiadne správy pre tento cieľ zostavenia.',
  'View in CircleCI' => 'Zobraziť v CircleCI',
  '%s aborted this buildable.' => '%s prerušil(a) tento zostaviteľný objekt.',
  'Hold Drafts' => 'Pozdržať koncepty',
  'All Plans' => 'Všetky plány',
  'You can not resume this build because it is already aborting.' => 'Toto zostavenie nemôžete obnoviť, pretože sa už prerušuje.',
  'Unable to Resume Build' => 'Zostavenie sa nedá obnoviť',
  'WARNING: This build step is new and experimental!

To build **revisions** with Buildkite, they must:

  - belong to a tracked repository;
  - the repository must have a Staging Area configured;
  - you must configure a Buildkite pipeline for that Staging Area; and
  - you must configure the webhook described below.

To build **commits** with Buildkite, they must:

  - belong to a tracked repository;
  - you must configure a Buildkite pipeline for that repository; and
  - you must configure the webhook described below.

Webhook Configuration
=====================

In {nav Settings} for your Organization in Buildkite, under
{nav Notification Services}, add a new **Webhook Notification**.

Use these settings:

  - **Webhook URL**: %s
  - **Token**: The "Webhook Token" field below and the "Token" field in
    Buildkite should both be set to the same nonempty value (any random
    secret). You can use copy/paste the value Buildkite generates into
    this form.
  - **Events**: Only **build.finish** needs to be active.

Environment
===========

These variables will be available in the build environment:

| Variable | Description |
|----------|-------------|
| `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target. |' => 'WARNING: Tento krok zostavenia je nový a experimentálny!

Aby bolo možné zostavovať **revízie** pomocou Buildkite, musia:

  - patriť do sledovaného repozitára;
  - repozitár musí mať nakonfigurovanú prípravnú oblasť;
  - pre túto prípravnú oblasť musíte nakonfigurovať pipeline Buildkite; a
  - musíte nakonfigurovať webhook opísaný nižšie.

Aby bolo možné zostavovať **commity** pomocou Buildkite, musia:

  - patriť do sledovaného repozitára;
  - pre tento repozitár musíte nakonfigurovať pipeline Buildkite; a
  - musíte nakonfigurovať webhook opísaný nižšie.

Konfigurácia webhooku
=====================

V {nav Settings} pre vašu organizáciu v Buildkite pridajte v časti
{nav Notification Services} nové **Webhook Notification**.

Použite tieto nastavenia:

  - **Webhook URL**: %s
  - **Token**: Pole „Token webhooku“ nižšie a pole „Token“ v
    Buildkite by mali byť nastavené na rovnakú neprázdnu hodnotu (ľubovoľné náhodné
    tajomstvo). Hodnotu, ktorú vygeneruje Buildkite, môžete skopírovať a vložiť do
    tohto formulára.
  - **Events**: Aktívne musí byť len **build.finish**.

Prostredie
==========

V prostredí zostavenia budú dostupné tieto premenné:

| Premenná | Opis |
|----------|-------------|
| `HARBORMASTER_BUILD_TARGET_PHID` | PHID cieľa zostavenia. |',
  'Runnable' => 'Spustiteľné',
  'No active Herald rules trigger this build.' => 'Toto zostavenie nespúšťajú žiadne aktívne pravidlá Herald.',
  'You can not specify both "--id" and "--all". Choose one or the other.' => 'Nemôžete zadať súčasne „--id“ aj „--all“. Vyberte jedno alebo druhé.',
  'Revisions are not sent for review until the build completes, and are returned to the author for updates if the build fails.' => 'Revízie sa neodošlú na posúdenie, kým sa zostavenie nedokončí, a ak zostavenie zlyhá, vrátia sa autorovi na aktualizáciu.',
  'Invalid build ID "%s".' => 'Neplatné ID zostavenia „%s“.',
  'This engine is used to edit Harbormaster builds.' => 'Tento nástroj sa používa na úpravu zostavení Harbormaster.',
  'Started Before' => 'Začaté pred',
  'The URI to store.' => 'URI, ktoré sa má uložiť.',
  'Type a build plan name...' => 'Napíšte názov plánu zostavenia…',
  'Test' => 'Test',
  'Harbormaster Build %s ("%s") for %s' => 'Zostavenie Harbormaster %s („%s“) pre %s',
  'Updating Build Targets' => 'Aktualizácia cieľov zostavenia',
  'Delete Build Step' => 'Odstrániť krok zostavenia',
  'Step %d.%d' => 'Krok %d.%d',
  'Log "%s" is still live. Logs can not be finalized until they have closed.' => 'Denník „%s“ je stále živý. Denníky nemožno finalizovať, kým sa nezatvoria.',
  'Use this method to attach artifacts to build targets while running builds. Artifacts can be used to carry data through a complex build workflow, provide extra information to users, or store build results.' => 'Túto metódu použite na pripájanie artefaktov k cieľom zostavenia počas behu zostavení. Artefakty možno použiť na prenos údajov zložitým pracovným postupom zostavenia, na poskytnutie ďalších informácií používateľom alebo na uloženie výsledkov zostavenia.',
  'This engine is used to edit Harbormaster build steps.' => 'Tento nástroj sa používa na úpravu krokov zostavenia Harbormaster.',
  'Modify running builds, and report build results.' => 'Upravovať bežiace zostavenia a hlásiť výsledky zostavenia.',
  'OK: No Harbormaster target PHID.' => 'OK: Žiadny PHID cieľa Harbormaster.',
  'Each artifact also needs an `artifactKey`, which names the artifact. Finally, you will provide some `artifactData` to fill in the content of the artifact. The data you provide depends on what type of artifact you are creating.' => 'Každý artefakt potrebuje aj `artifactKey`, ktorý artefakt pomenúva. Nakoniec poskytnete nejaké `artifactData` na vyplnenie obsahu artefaktu. Údaje, ktoré poskytnete, závisia od toho, aký typ artefaktu vytvárate.',
  'Local Name' => 'Lokálny názov',
  'Long explanation of the lint message.' => 'Dlhé vysvetlenie správy lintu.',
  'This step has an invalid implementation (%s).' => 'Tento krok má neplatnú implementáciu (%s).',
  'Build Target PHID' => 'PHID cieľa zostavenia',
  'Build/CI' => 'Zostavenie/CI',
  'rXabcdef, PHID-DIFF-1234, ...' => 'rXabcdef, PHID-DIFF-1234, ...',
  'Applying plan %s to new buildable %s...' => 'Aplikuje sa plán %s na nový zostaviteľný objekt %s…',
  'Bad Input Type' => 'Chybný typ vstupu',
  'True if this is a manual buildable.' => 'True, ak ide o ručný zostaviteľný objekt.',
  'Upload %s from %s.' => 'Nahrať %s z %s.',
  'Search for targets completed on or after a particular date.' => 'Hľadať ciele dokončené v konkrétny dátum alebo po ňom.',
  'Publish a buildable. This is primarily useful for developing and debugging applications which have buildable objects.' => 'Publikovať zostaviteľný objekt. Užitočné najmä pri vývoji a ladení aplikácií, ktoré majú zostaviteľné objekty.',
  'Search for builds running against particular buildables.' => 'Hľadať zostavenia bežiace proti konkrétnym zostaviteľným objektom.',
  'Specify exactly one buildable object, by object name.' => 'Zadajte presne jeden zostaviteľný objekt, podľa názvu objektu.',
  'Can Create Build Plans' => 'Môže vytvárať plány zostavenia',
  'You can not abort a build that uses an autoplan.' => 'Zostavenie, ktoré používa automatický plán, nemôžete prerušiť.',
  'You can not pause this build because it is already pausing.' => 'Toto zostavenie nemôžete pozastaviť, pretože sa už pozastavuje.',
  'Add Build Step' => 'Pridať krok zostavenia',
  'No such build target "%s"!' => 'Taký cieľ zostavenia neexistuje: „%s“!',
  'My Builds' => 'Moje zostavenia',
  'Write rate must be more than 0 bytes/sec.' => 'Rýchlosť zápisu musí byť väčšia ako 0 bajtov/s.',
  'Required Input' => 'Povinný vstup',
  'The current UNIX timestamp.' => 'Aktuálna časová pečiatka UNIX.',
  'Object "%s" is not a Harbormaster Buildable!' => 'Objekt „%s“ nie je zostaviteľný objekt Harbormaster!',
  'Length of the log in bytes.' => 'Dĺžka denníka v bajtoch.',
  'Report that work on the target is ongoing. This message can be used to report partial results during a build.' => 'Nahlásiť, že práca na cieli prebieha. Táto správa sa dá použiť na hlásenie čiastočných výsledkov počas zostavenia.',
  'Really pause %s build(s)?' => array(
    'Naozaj pozastaviť zostavenie?',
    'Naozaj pozastaviť %s zostavenia?',
    'Naozaj pozastaviť %s zostavení?',
  ),
  'This group has no available build steps.' => 'Táto skupina nemá žiadne dostupné kroky zostavenia.',
  'Stores a URI.

With `ui.external`, you can use this artifact type to add links to build results in an external build system.' => 'Ukladá URI.

Pomocou `ui.external` môžete tento typ artefaktu použiť na pridanie odkazov na výsledky zostavenia v externom systéme zostavenia.',
  'CircleCI' => 'CircleCI',
  'Trigger a build in Buildkite.' => 'Spustiť zostavenie v Buildkite.',
  'Call omits required "receiver" parameter. Specify the PHID of the object you want to send a message to.' => 'Volanie vynecháva povinný parameter „receiver“. Zadajte PHID objektu, ktorému chcete odoslať správu.',
  'When' => 'Kedy',
  'Search for only manual or automatic buildables.' => 'Hľadať len ručné alebo automatické zostaviteľné objekty.',
  'New plan name.' => 'Nový názov plánu.',
  'You can only abort some builds. Work will halt immediately on builds you can abort. Progress will be discarded, and builds must be completely restarted if you want them to complete.' => 'Prerušiť môžete len niektoré zostavenia. Práca na zostaveniach, ktoré môžete prerušiť, sa okamžite zastaví. Priebeh sa zahodí a zostavenia bude nutné úplne reštartovať, ak chcete, aby sa dokončili.',
  'Harbormaster Build Targets' => 'Ciele zostavenia Harbormaster',
  'Sleep for a specified number of seconds.' => 'Spať zadaný počet sekúnd.',
  'The current status of this build.' => 'Aktuálny stav tohto zostavenia.',
  'Reporting Lint Results' => 'Hlásenie výsledkov lintu',
  'Make an HTTP %s request to %s.' => 'Vykonať požiadavku HTTP %s na %s.',
  'Status "%s" is not a valid build plan status. Valid statuses are: %s.' => 'Stav „%s“ nie je platný stav plánu zostavenia. Platné stavy sú: %s.',
  'A file containing the log data.' => 'Súbor obsahujúci údaje denníka.',
  '<Invalid URI>' => '<Neplatné URI>',
  'You can not issue this command because you do not have permission to access the build plan for this build.' => 'Tento príkaz nemôžete vydať, pretože nemáte povolenie na prístup k plánu zostavenia pre toto zostavenie.',
  'Artifact Name' => 'Názov artefaktu',
  'Build Artifact %d' => 'Artefakt zostavenia %d',
  'Object "%s" is not a buildable!' => 'Objekt „%s“ nie je zostaviteľný objekt!',
  'Use %s to specify a build plan to run.' => 'Pomocou %s zadajte plán zostavenia, ktorý sa má spustiť.',
  'Input Artifacts' => 'Vstupné artefakty',
  'Revisions are sent for review regardless of the status of the build.' => 'Revízie sa odosielajú na posúdenie bez ohľadu na stav zostavenia.',
  'Unknown chunk encoding "%s"!' => 'Neznáme kódovanie bloku „%s“!',
  'Object ("%s") claims "%s" is a GitHub repository URI, but the domain does not appear to be GitHub.' => 'Objekt („%s“) tvrdí, že „%s“ je URI repozitára GitHub, ale doména sa nezdá byť GitHub.',
  'Usually, builds may be restarted by users who have permission to edit the related build plan. (You can change who is allowed to restart a build by adjusting the "Runnable" behavior.)

Restarting a build may be useful if you suspect it has failed for environmental or circumstantial reasons unrelated to the actual code, and want to give it another chance at glory.

If you want to prevent a build from being restarted, you can change when it may be restarted by adjusting this behavior. This may be useful to prevent accidents where a build with a dangerous side effect (like deployment) is restarted improperly.' => 'Zostavenia zvyčajne môžu reštartovať používatelia, ktorí majú povolenie upravovať súvisiaci plán zostavenia. (Kto smie reštartovať zostavenie, môžete zmeniť úpravou správania „Spustiteľné“.)

Reštartovanie zostavenia môže byť užitočné, ak máte podozrenie, že zlyhalo z dôvodov prostredia alebo okolností nesúvisiacich so samotným kódom, a chcete mu dať ďalšiu šancu na slávu.

Ak chcete zabrániť reštartovaniu zostavenia, môžete úpravou tohto správania zmeniť, kedy sa smie reštartovať. Môže to byť užitočné na predchádzanie nehodám, keď sa nesprávne reštartuje zostavenie s nebezpečným vedľajším účinkom (ako je nasadenie).',
  'The name of this build plan.' => 'Názov tohto plánu zostavenia.',
  'Opened a new build log:' => 'Otvorený nový denník zostavenia:',
  'Unable to determine how to clone the repository for this buildable: it is not associated with a tracked repository.' => 'Nepodarilo sa určiť, ako klonovať repozitár pre tento zostaviteľný objekt: nie je priradený k sledovanému repozitáru.',
  '"arc land" never warns that the build is still running or has failed.' => '„arc land“ nikdy nevaruje, že zostavenie stále beží alebo zlyhalo.',
  'This build can not be restarted because the build plan is configured to prevent the build from restarting unless it has failed, and it has not failed.' => 'Toto zostavenie sa nedá reštartovať, pretože plán zostavenia je nastavený tak, aby zabránil reštartovaniu zostavenia, pokiaľ nezlyhalo, a toto zostavenie nezlyhalo.',
  '"arc land" warns if the build has failed, but ignores the build if it is still running.' => '„arc land“ varuje, ak zostavenie zlyhalo, ale ignoruje ho, ak stále beží.',
  'View URI for the buildable.' => 'URI zobrazenia zostaviteľného objektu.',
  'This build can not be restarted because the build plan is configured to prevent the build from restarting.' => 'Toto zostavenie sa nedá reštartovať, pretože plán zostavenia je nastavený tak, aby zabránil reštartovaniu zostavenia.',
  'You can use this method (`harbormaster.sendmessage`) to send control commands
to Buildables and Builds.

Specify the Build or Buildable to receive the control command by providing its
PHID in the `receiver` parameter.

Sending a control command to a Buildable has the same effect as sending it to
each Build for the Buildable. For example, sending a "Pause" message to a
Buildable will pause all builds for the Buildable (or at least attempt to).

When sending control commands, the `unit` and `lint` parameters of this API
method must be omitted. You can not report lint or unit results directly to
a Build or Buildable, and can not report them alongside a control command.

More broadly, you can not report build results directly to a Build or
Buildable. Instead, report results to a Build Target.

See below for a list of control commands.
' => 'Túto metódu (`harbormaster.sendmessage`) môžete použiť na odosielanie riadiacich príkazov
zostaviteľným objektom a zostaveniam.

Zostavenie alebo zostaviteľný objekt, ktorý má riadiaci príkaz prijať, určíte zadaním jeho
PHID v parametri `receiver`.

Odoslanie riadiaceho príkazu zostaviteľnému objektu má rovnaký účinok ako jeho odoslanie
každému zostaveniu tohto zostaviteľného objektu. Napríklad odoslanie správy „Pause“
zostaviteľnému objektu pozastaví všetky jeho zostavenia (alebo sa o to aspoň pokúsi).

Pri odosielaní riadiacich príkazov musia byť parametre `unit` a `lint` tejto metódy
API vynechané. Výsledky lintu ani jednotkových testov nemôžete hlásiť priamo
zostaveniu ani zostaviteľnému objektu a nemôžete ich hlásiť spolu s riadiacim príkazom.

Všeobecnejšie, výsledky zostavenia nemôžete hlásiť priamo zostaveniu ani
zostaviteľnému objektu. Namiesto toho hláste výsledky cieľu zostavenia.

Zoznam riadiacich príkazov nájdete nižšie.',
  'You must choose a name for your build plan.' => 'Musíte vybrať názov pre svoj plán zostavenia.',
  'Build Targets may receive build status and result messages, like "pass" or "fail".' => 'Ciele zostavenia môžu prijímať správy o stave a výsledku zostavenia, napríklad „pass“ alebo „fail“.',
  'If you abort all builds, work will halt immediately. Work will be discarded, and builds must be completely restarted.' => 'Ak prerušíte všetky zostavenia, práca sa okamžite zastaví. Práca sa zahodí a zostavenia bude nutné úplne reštartovať.',
  'Reporting Unit Results' => 'Hlásenie výsledkov jednotkových testov',
  'Argument "%s" does not name a buildable. Provide one or more valid buildable monograms or PHIDs.' => 'Argument „%s“ nepomenúva zostaviteľný objekt. Zadajte jeden alebo viac platných monogramov alebo PHID zostaviteľných objektov.',
  'Edit Step' => 'Upraviť krok',
  'The ID of the current build.' => 'ID aktuálneho zostavenia.',
  'Progress on running builds will be discarded.' => 'Priebeh bežiacich zostavení sa zahodí.',
  'Submit builds into the build queue normally instead of running them in the foreground.' => 'Odosielať zostavenia do radu zostavení bežným spôsobom namiesto ich spúšťania v popredí.',
  '%s resumed this build.' => '%s obnovil(a) toto zostavenie.',
  'This input is required, but not configured.' => 'Tento vstup je povinný, ale nie je nakonfigurovaný.',
  'Bad build target ID "%d".' => 'Chybné ID cieľa zostavenia „%d“.',
  'Edit Build' => 'Upraviť zostavenie',
  'Restart %s build(s)?' => array(
    'Reštartovať %s zostavenie?',
    'Reštartovať %s zostavenia?',
    'Reštartovať %s zostavení?',
  ),
  'This build log is already open!' => 'Tento denník zostavenia je už otvorený!',
  'Show Only Automated Builds' => 'Zobraziť len automatické zostavenia',
  'Format for the text provided in "details". Valid values are "text" (default) or "remarkup". This controls how test details are rendered when shown to users.' => 'Formát textu poskytnutého v „details“. Platné hodnoty sú „text“ (predvolené) alebo „remarkup“. Riadi, ako sa podrobnosti testu vykreslia pri zobrazení používateľom.',
  'Build Target ID' => 'ID cieľa zostavenia',
  'Build will restart.' => 'Zostavenie sa reštartuje.',
  'Unable to load the file for this log. The file may have been destroyed.' => 'Nepodarilo sa načítať súbor pre tento denník. Súbor mohol byť zničený.',
  'Short test name, like "ExampleTest".' => 'Krátky názov testu, napríklad „ExampleTest“.',
  'Active Plans' => 'Aktívne plány',
  'Restartable' => 'Reštartovateľné',
  'Unit %d' => 'Jednotkový test %d',
  'Harbormaster build target "%s" is not a Buildkite build step. Only Buildkite steps may be updated via the Buildkite hook.' => 'Cieľ zostavenia Harbormaster „%s“ nie je krokom zostavenia Buildkite. Prostredníctvom háku Buildkite možno aktualizovať len kroky Buildkite.',
  'Choose a build plan behavior for "%s".' => 'Vyberte správanie plánu zostavenia pre „%s“.',
  'New View (Prototype)' => 'Nové zobrazenie (prototyp)',
  'After completing this build step Harbormaster can continue the build normally, or it can pause the build and wait for a message. If you are using this build step to trigger some work in an external system, you may want wait for that system to perform the work and report results back.

If you select **Continue Build Normally**, the build plan will proceed once this step finishes.

If you select **Wait For Message**, the build plan will pause indefinitely once this step finishes. To resume the build, an external system must call `harbormaster.sendmessage` with the build target PHID, and either `"pass"` or `"fail"` to indicate the result for this step. After the result is recorded, the build plan will resume.' => 'Po dokončení tohto kroku zostavenia môže Harbormaster pokračovať v zostavení bežným spôsobom, alebo môže zostavenie pozastaviť a čakať na správu. Ak tento krok zostavenia používate na spustenie nejakej práce v externom systéme, možno budete chcieť počkať, kým tento systém prácu vykoná a nahlási výsledky späť.

Ak vyberiete **Pokračovať v zostavení bežne**, plán zostavenia bude po dokončení tohto kroku pokračovať.

Ak vyberiete **Čakať na správu**, plán zostavenia sa po dokončení tohto kroku pozastaví na neurčito. Na obnovenie zostavenia musí externý systém zavolať `harbormaster.sendmessage` s PHID cieľa zostavenia a s `"pass"` alebo `"fail"` na označenie výsledku tohto kroku. Po zaznamenaní výsledku bude plán zostavenia pokračovať.',
  'Disable this build plan? It will no longer be executed automatically.' => 'Zakázať tento plán zostavenia? Už sa nebude vykonávať automaticky.',
  'Ship Some Freight' => 'Prepravte nejaký náklad',
  '"arc land" warns if the build is still running or has failed.' => '„arc land“ varuje, ak zostavenie stále beží alebo zlyhalo.',
  'View Details' => 'Zobraziť podrobnosti',
  'Buildable' => 'Zostaviteľný objekt',
  'Only users who can edit the plan can run it manually.' => 'Plán môžu ručne spustiť len používatelia, ktorí ho môžu upravovať.',
  'Unable to find fetch!' => 'Nepodarilo sa nájsť načítanie!',
  'arc lint + arc unit' => 'arc lint + arc unit',
  '%s restarted this buildable.' => '%s reštartoval(a) tento zostaviteľný objekt.',
  'Really abort build?' => 'Naozaj prerušiť zostavenie?',
  'The build step description.' => 'Opis kroku zostavenia.',
  'Browse Build Plans' => 'Prehľadávať plány zostavenia',
  'The PHID of the user or Object that initiated the build, if applicable.' => 'PHID používateľa alebo objektu, ktorý zostavenie inicioval, ak je to relevantné.',
  'All Buildables' => 'Všetky zostaviteľné objekty',
  'Also Clone' => 'Klonovať aj',
  'Query information about build artifacts.' => 'Dopytovať informácie o artefaktoch zostavenia.',
  'Unable to Send Command' => 'Príkaz sa nedá odoslať',
  'No behavior option is marked as the default option (for behavior "%s"). Exactly one option must be marked as the default option.' => 'Žiadna možnosť správania nie je označená ako predvolená (pre správanie „%s“). Ako predvolená musí byť označená práve jedna možnosť.',
  'Select all active builds.' => 'Vybrať všetky aktívne zostavenia.',
  'Preparing' => 'Pripravuje sa',
  'Build Plans' => 'Plány zostavenia',
  'Edit Buildable: %s' => 'Upraviť zostaviteľný objekt: %s',
  'Unable to load build target "%s".' => 'Nepodarilo sa načítať cieľ zostavenia „%s“.',
  'Retrieve information about Harbormaster build plans.' => 'Získať informácie o plánoch zostavenia Harbormaster.',
  'File to create an artifact from.' => 'Súbor, z ktorého sa má vytvoriť artefakt.',
  'You can only resume some builds. Work will continue on builds you have permission to resume.' => 'Obnoviť môžete len niektoré zostavenia. Práca bude pokračovať na zostaveniach, ktoré máte povolenie obnoviť.',
  'All Artifacts' => 'Všetky artefakty',
  'Attempt to load log bytes (%d - %d) failed: the loaded range (%d - %d) does not span the requested range.' => 'Pokus o načítanie bajtov denníka (%d – %d) zlyhal: načítaný rozsah (%d – %d) nepokrýva požadovaný rozsah.',
  'The current status of this buildable.' => 'Aktuálny stav tohto zostaviteľného objektu.',
  'Standalone Fragment' => 'Samostatný fragment',
  'Wait For Message' => 'Čakať na správu',
  'Builds may receive control commands like "pause", "resume", "abort", and "restart".' => 'Zostavenia môžu prijímať riadiace príkazy ako „pause“, „resume“, „abort“ a „restart“.',
  'Edit Build Plan' => 'Upraviť plán zostavenia',
  'Select one or more builds by ID.' => 'Vyberte jedno alebo viac zostavení podľa ID.',
  'Unable to find lines.' => 'Nepodarilo sa nájsť riadky.',
  '%s empty logs are hidden.' => array(
    '%s prázdny denník je skrytý.',
    '%s prázdne denníky sú skryté.',
    '%s prázdnych denníkov je skrytých.',
  ),
  'Delete Step' => 'Odstrániť krok',
  'No builds found.' => 'Nenašli sa žiadne zostavenia.',
  'OK: Processed event.' => 'OK: Udalosť spracovaná.',
  'Building' => 'Zostavuje sa',
  'Status for the build target.' => 'Stav cieľa zostavenia.',
  'CircleCI did not return a "%s"!' => 'CircleCI nevrátil „%s“!',
  'Message Type' => 'Typ správy',
  'Artifact Type' => 'Typ artefaktu',
  'Object "%s" is not a HarbormasterBuildable (it is a "%s"). Name one or more buildables to publish, like "B123".' => 'Objekt „%s“ nie je HarbormasterBuildable (je to „%s“). Uveďte jeden alebo viac zostaviteľných objektov na publikovanie, napríklad „B123“.',
  'Load or create build autotargets.' => 'Načítať alebo vytvoriť automatické ciele zostavenia.',
  'Apply transactions to create a new build plan or edit an existing one.' => 'Použiť transakcie na vytvorenie nového plánu zostavenia alebo úpravu existujúceho.',
  'Apply transactions to create a new build or edit an existing one.' => 'Použiť transakcie na vytvorenie nového zostavenia alebo úpravu existujúceho.',
  'Warn When Landing' => 'Varovať pri začleňovaní',
  'Attempting to access unknown buildable status property ("%s").' => 'Pokus o prístup k neznámej vlastnosti stavu zostaviteľného objektu („%s“).',
  'The current status of this build plan.' => 'Aktuálny stav tohto plánu zostavenia.',
  'Unknown Status ("%s")' => 'Neznámy stav („%s“)',
  'You can not restart this build because you do not have permission to access the build plan.' => 'Toto zostavenie nemôžete reštartovať, pretože nemáte povolenie na prístup k plánu zostavenia.',
  'Edit Build Plan: %s' => 'Upraviť plán zostavenia: %s',
  'View in Buildkite' => 'Zobraziť v Buildkite',
  'Multiple behavior options (for behavior "%s") have the same key ("%s"). Each option must have a unique key.' => 'Viacero možností správania (pre správanie „%s“) má rovnaký kľúč („%s“). Každá možnosť musí mať jedinečný kľúč.',
  'No implementation is specified!' => 'Nie je zadaná žiadna implementácia!',
  '(This is an explicit exception.)' => '(Toto je explicitná výnimka.)',
  'Abort Build' => 'Prerušiť zostavenie',
  'Artifacts' => 'Artefakty',
  'Invalid Implementation ("%s")!' => 'Neplatná implementácia („%s“)!',
  'Apply transactions to create a new buildable or edit an existing one.' => 'Použiť transakcie na vytvorenie nového zostaviteľného objektu alebo úpravu existujúceho.',
  'View Full Test Results (%s)' => 'Zobraziť úplné výsledky testov (%s)',
  '<Unknown Artifact Type>' => '<Neznámy typ artefaktu>',
  'Multiple behavior options (for behavior "%s") are marked as default options ("%s" and "%s"). Exactly one option must be marked as the default option.' => 'Viacero možností správania (pre správanie „%s“) je označených ako predvolené možnosti („%s“ a „%s“). Ako predvolená musí byť označená práve jedna možnosť.',
  'Behavior configuration for the build plan.' => 'Konfigurácia správania pre plán zostavenia.',
  'You can not pause this build because it is already paused.' => 'Toto zostavenie nemôžete pozastaviť, pretože je už pozastavené.',
  'Byte position on the line where the text which triggered the message starts. The first byte on the line is byte 1, not byte 0. This position is byte-based (not character-based) because not all lintable files have a valid character encoding.' => 'Bajtová pozícia na riadku, kde začína text, ktorý vyvolal správu. Prvý bajt na riadku je bajt 1, nie bajt 0. Táto pozícia je založená na bajtoch (nie na znakoch), pretože nie všetky súbory vhodné na lint majú platné kódovanie znakov.',
  'Unable to inflate log chunk!' => 'Nepodarilo sa dekomprimovať blok denníka!',
  'Search for artifacts attached to particular build targets.' => 'Hľadať artefakty pripojené ku konkrétnym cieľom zostavenia.',
  'Testing Utilities' => 'Testovacie nástroje',
  'Search for builds with given statuses.' => 'Hľadať zostavenia s danými stavmi.',
  'Restart Harbormaster builds.' => 'Reštartovať zostavenia Harbormaster.',
  'Value "%s" is not a valid option for behavior "%s". Valid options are: %s.' => 'Hodnota „%s“ nie je platná možnosť pre správanie „%s“. Platné možnosti sú: %s.',
  'Automatic `arc lint` step.' => 'Automatický krok `arc lint`.',
  'PHID of the object containing this buildable.' => 'PHID objektu obsahujúceho tento zostaviteľný objekt.',
  'Call includes "unit" parameter. This parameter must be omitted when the receiver is not a Build Target.' => 'Volanie obsahuje parameter „unit“. Tento parameter musí byť vynechaný, keď prijímateľ nie je cieľ zostavenia.',
  'Variables' => 'Premenné',
  'The buildable does not wait for the build.' => 'Zostaviteľný objekt na zostavenie nečaká.',
  'Unknown Unit Message ("%s")' => 'Neznáma správa jednotkového testu („%s“)',
  '%s: %s -> %s' => '%s: %s -> %s',
  'Search for builds of particular objects.' => 'Hľadať zostavenia konkrétnych objektov.',
  'Show More Below' => 'Zobraziť viac nižšie',
  'Search for targets created on or after a particular date.' => 'Hľadať ciele vytvorené v konkrétny dátum alebo po ňom.',
  'Build Target ID to attach the log to.' => 'ID cieľa zostavenia, ku ktorému sa má denník pripojiť.',
  'Restart Builds' => 'Reštartovať zostavenia',
  'Additional human-readable information about the failure.' => 'Ďalšie informácie o zlyhaní čitateľné pre človeka.',
  'Trigger a build in CircleCI.' => 'Spustiť zostavenie v CircleCI.',
  'Aborted' => 'Prerušené',
  'Create Build Step' => 'Vytvoriť krok zostavenia',
  'Plan Behaviors' => 'Správania plánu',
  'If true, display this URI in the UI as an link to additional build details in an external build system.' => 'Ak je true, zobraziť toto URI v používateľskom rozhraní ako odkaz na ďalšie podrobnosti zostavenia v externom systéme zostavenia.',
  'Write a new Harbormaster build log. This is primarily intended to make development and testing easier.' => 'Zapísať nový denník zostavenia Harbormaster. Slúži predovšetkým na uľahčenie vývoja a testovania.',
  'Update only this build.' => 'Aktualizovať len toto zostavenie.',
  'Pause Builds' => 'Pozastaviť zostavenia',
  'Search for targets created on or before a particular date.' => 'Hľadať ciele vytvorené v konkrétny dátum alebo pred ním.',
  'Run build plans' => 'Spúšťať plány zostavenia',
  'Use one of "--id" or "--active" to select builds, but not both.' => 'Na výber zostavení použite buď „--id“, alebo „--active“, ale nie oboje.',
  'Resume Builds' => 'Obnoviť zostavenia',
  'RESTARTING' => 'REŠTARTUJE SA',
  'This build step has since been deleted on the build plan.  Some information may be omitted.' => 'Tento krok zostavenia bol odvtedy z plánu zostavenia odstránený. Niektoré informácie môžu chýbať.',
  'There is no implementation available for artifacts of type "%s".' => 'Pre artefakty typu „%s“ nie je dostupná žiadna implementácia.',
  'Build Step' => 'Krok zostavenia',
  '**publish** __buildable__ ...' => '**publish** __buildable__ ...',
  'Syntax Error' => 'Syntaktická chyba',
  'This dependency specifies a build step which doesn\'t exist.' => 'Táto závislosť určuje krok zostavenia, ktorý neexistuje.',
  'All builds will restart.' => 'Všetky zostavenia sa reštartujú.',
  'Valid Input' => 'Platný vstup',
  'This input is bound to an artifact ("%s") which does not exist at this stage in the build process.' => 'Tento vstup je viazaný na artefakt („%s“), ktorý v tejto fáze procesu zostavenia neexistuje.',
  'Unknown log chunk encoding ("%s")!' => 'Neznáme kódovanie bloku denníka („%s“)!',
  'No builds to restart.' => 'Žiadne zostavenia na reštartovanie.',
  'Build target ("%s") has the wrong type of build step. Only CircleCI build steps may be updated via the CircleCI webhook.' => 'Cieľ zostavenia („%s“) má nesprávny typ kroku zostavenia. Prostredníctvom webhooku CircleCI možno aktualizovať len kroky zostavenia CircleCI.',
  'Completed at %s' => 'Dokončené o %s',
  'Build' => 'Zostavenie',
  'Make HTTP Request' => 'Vykonať požiadavku HTTP',
  'Really pause build?' => 'Naozaj pozastaviť zostavenie?',
  'If updating generates tasks, queue them for the daemons instead of executing them in this process.' => 'Ak aktualizácia vygeneruje úlohy, zaradiť ich do radu pre démonov namiesto ich vykonania v tomto procese.',
  'This build plan does not have any build steps yet, so it will not do anything when run.' => 'Tento plán zostavenia zatiaľ nemá žiadne kroky zostavenia, takže pri spustení neurobí nič.',
  'Type another build step name...' => 'Napíšte názov ďalšieho kroku zostavenia…',
  'Buildable %d' => 'Zostaviteľný objekt %d',
  'Really restart %s build(s)?' => array(
    'Naozaj reštartovať zostavenie?',
    'Naozaj reštartovať %s zostavenia?',
    'Naozaj reštartovať %s zostavení?',
  ),
  '"arc land" warns if the build is still running, but ignores the build if it has failed.' => '„arc land“ varuje, ak zostavenie stále beží, ale ignoruje ho, ak zlyhalo.',
  'Recent Builds' => 'Nedávne zostavenia',
  'Rename the plan.' => 'Premenovať plán.',
  'Edit Harbormaster Build Step Configurations' => 'Upravovať konfigurácie krokov zostavenia Harbormaster',
  'Users must be able to see a build target to see its artifacts.' => 'Aby používatelia videli artefakty cieľa zostavenia, musia vidieť samotný cieľ zostavenia.',
  'Build Failed' => 'Zostavenie zlyhalo',
  'The buildable waits for the build, and fails if the build fails.' => 'Zostaviteľný objekt čaká na zostavenie a zlyhá, ak zostavenie zlyhá.',
  'References a working copy lease from Drydock.' => 'Odkazuje na prenájom pracovnej kópie z Drydocku.',
  'PHID of the build plan being run.' => 'PHID plánu zostavenia, ktorý sa spúšťa.',
  'Build Log %d' => 'Denník zostavenia %d',
  'Queued at %s' => 'Zaradené do radu o %s',
  'Pipeline Name' => 'Názov pipeline',
  'You must have edit permission on this build plan to run it manually.' => 'Na ručné spustenie tohto plánu zostavenia musíte mať povolenie na jeho úpravu.',
  'Data Hash' => 'Hash údajov',
  'Automatic Buildable' => 'Automatický zostaviteľný objekt',
  'Lines' => 'Riadky',
  'Updating Builds' => 'Aktualizácia zostavení',
  'The specified buildable does not have a build with ID "%s".' => 'Zadaný zostaviteľný objekt nemá zostavenie s ID „%s“.',
  'If Building' => 'Ak sa zostavuje',
  'Find out information about builds.' => 'Zistiť informácie o zostaveniach.',
  'Edit Build Step' => 'Upraviť krok zostavenia',
  'Edit Harbormaster Build Plan Configurations' => 'Upravovať konfigurácie plánov zostavenia Harbormaster',
  'Buildkite request to target "%s" had the wrong authentication token. The Buildkite pipeline and Harbormaster build step must be configured with the same token.' => 'Požiadavka Buildkite na cieľ „%s“ mala nesprávny autentifikačný token. Pipeline Buildkite a krok zostavenia Harbormaster musia byť nakonfigurované s rovnakým tokenom.',
  'Throw Exception' => 'Vyhodiť výnimku',
  'Harbormaster Query Builds' => 'Harbormaster: Dopytovať zostavenia',
  'If you run external builds, you can use this method to publish build results
back into Harbormaster after the external system finishes work (or as it makes
progress).

To report build status or results, you must send a message to the appropriate
Build Target. This table summarizes which object types may receive build status
and result messages:

<table>
  <tr>
    <th>Object Type</th>
    <th>PHID Example</th>
    <th />
    <th>Description</th>
  </tr>
  <tr>
    <td>Harbormaster Buildable</td>
    <td>`PHID-HMBB-...`</td>
    <td>{icon times color=red}</td>
    <td>Buildables may **NOT** receive status or result messages.</td>
  </tr>
  <tr>
    <td>Harbormaster Build</td>
    <td>`PHID-HMBD-...`</td>
    <td>{icon times color=red}</td>
    <td>Builds may **NOT** receive status or result messages.</td>
  </tr>
  <tr>
    <td>Harbormaster Build Target</td>
    <td>`PHID-HMBT-...`</td>
    <td>{icon check color=green}</td>
    <td>Report build status and results to Build Targets.</td>
  </tr>
</table>

The simplest way to use this method to report build results is to call it once
after the build finishes with a `pass` or `fail` message. This will record the
build result, and continue the next step in the build if the build was waiting
for a result.

When you send a status message about a build target, you can optionally include
detailed `lint` or `unit` results alongside the message. See below for details.

If you want to report intermediate results but a build hasn\'t completed yet,
you can use the `work` message. This message doesn\'t have any direct effects,
but allows you to send additional data to update the progress of the build
target. The target will continue waiting for a completion message, but the UI
will update to show the progress which has been made.

When sending a message to a build target to report the status or results of
a build, your message must include a `type` which describes the overall state
of the build. For example, use `pass` to tell Harbormaster that a build target
completed successfully.

Supported message types are:

%s
' => 'Ak spúšťate externé zostavenia, môžete túto metódu použiť na publikovanie výsledkov zostavenia
späť do Harbormastera po tom, čo externý systém dokončí prácu (alebo priebežne,
ako postupuje).

Na nahlásenie stavu alebo výsledkov zostavenia musíte odoslať správu príslušnému
cieľu zostavenia. Táto tabuľka zhŕňa, ktoré typy objektov môžu prijímať správy o stave
a výsledku zostavenia:

<table>
  <tr>
    <th>Typ objektu</th>
    <th>Príklad PHID</th>
    <th />
    <th>Opis</th>
  </tr>
  <tr>
    <td>Zostaviteľný objekt Harbormaster</td>
    <td>`PHID-HMBB-...`</td>
    <td>{icon times color=red}</td>
    <td>Zostaviteľné objekty **NEMÔŽU** prijímať správy o stave ani výsledku.</td>
  </tr>
  <tr>
    <td>Zostavenie Harbormaster</td>
    <td>`PHID-HMBD-...`</td>
    <td>{icon times color=red}</td>
    <td>Zostavenia **NEMÔŽU** prijímať správy o stave ani výsledku.</td>
  </tr>
  <tr>
    <td>Cieľ zostavenia Harbormaster</td>
    <td>`PHID-HMBT-...`</td>
    <td>{icon check color=green}</td>
    <td>Stav a výsledky zostavenia hláste cieľom zostavenia.</td>
  </tr>
</table>

Najjednoduchší spôsob, ako touto metódou hlásiť výsledky zostavenia, je zavolať ju raz
po dokončení zostavenia so správou `pass` alebo `fail`. Tým sa zaznamená
výsledok zostavenia a bude pokračovať ďalší krok zostavenia, ak zostavenie čakalo
na výsledok.

Keď odosielate správu o stave cieľa zostavenia, môžete k nej voliteľne priložiť
podrobné výsledky `lint` alebo `unit`. Podrobnosti nájdete nižšie.

Ak chcete nahlásiť priebežné výsledky, ale zostavenie ešte nie je dokončené,
môžete použiť správu `work`. Táto správa nemá žiadne priame účinky,
ale umožňuje vám odoslať ďalšie údaje na aktualizáciu priebehu cieľa
zostavenia. Cieľ bude naďalej čakať na správu o dokončení, ale používateľské rozhranie
sa aktualizuje a zobrazí dosiahnutý priebeh.

Keď odosielate cieľu zostavenia správu s hlásením stavu alebo výsledkov
zostavenia, vaša správa musí obsahovať `type`, ktorý opisuje celkový stav
zostavenia. Napríklad použite `pass`, aby ste Harbormasteru oznámili, že cieľ zostavenia
sa úspešne dokončil.

Podporované typy správ sú:

%s',
  'Can Not Restart Autobuild' => 'Automatické zostavenie sa nedá reštartovať',
  'The object PHID of the Harbormaster Buildable being built.' => 'PHID objektu zostaviteľného objektu Harbormaster, ktorý sa zostavuje.',
  'HTTP Method' => 'Metóda HTTP',
  'Restart the build, discarding all progress.' => 'Reštartovať zostavenie a zahodiť všetok priebeh.',
  'Epoch timestamp for target start, if the target has started.' => 'Časová pečiatka epochy pre začiatok cieľa, ak sa cieľ začal.',
  'Affects Buildable' => 'Ovplyvňuje zostaviteľný objekt',
  'Build a working copy in Drydock.' => 'Zostaviť pracovnú kópiu v Drydocku.',
  'Harbormaster Build Plans' => 'Plány zostavenia Harbormaster',
  'If you pause this build, work will halt once the current steps complete. You can resume the build later.' => 'Ak toto zostavenie pozastavíte, práca sa zastaví po dokončení aktuálnych krokov. Zostavenie môžete neskôr obnoviť.',
  'Harbormaster User Guide' => 'Používateľská príručka k Harbormasteru',
  'Object ("%s") does not implement interface "%s". Only objects which implement this interface can be built with CircleCI.' => 'Objekt („%s“) neimplementuje rozhranie „%s“. Pomocou CircleCI možno zostavovať len objekty, ktoré implementujú toto rozhranie.',
  'If Editable' => 'Ak je upraviteľné',
  'Build Target %d' => 'Cieľ zostavenia %d',
  'Completed Before' => 'Dokončené pred',
  'Download Log' => 'Stiahnuť denník',
  'Make an HTTP request.' => 'Vykonať požiadavku HTTP.',
  'Drydock Host' => 'Hostiteľ Drydock',
  'Consumed' => 'Spotrebované',
  'When users create revisions in Differential, the default behavior is to hold them in the "Draft" state until all builds pass. Once builds pass, the revisions promote and are sent for review, which notifies reviewers.

The general intent of this workflow is to make sure reviewers are only spending time on review once changes survive automated tests. If a change does not pass tests, it usually is not really ready for review.

If you want to promote revisions out of "Draft" before builds pass, or promote revisions even when builds fail, you can change the promotion behavior. This may be useful if you have very long-running builds, or some builds which are not very important.

Users may always use "Request Review" to promote a "Draft" revision, even if builds have failed or are still in progress.' => 'Keď používatelia vytvárajú revízie v Differentiale, predvolené správanie je podržať ich v stave „Koncept“, kým neprejdú všetky zostavenia. Po úspešnom zostavení sa revízie povýšia a odošlú na posúdenie, čím sa upozornia posudzovatelia.

Zámerom tohto pracovného postupu je zaistiť, aby posudzovatelia venovali čas posudzovaniu až vtedy, keď zmeny prežijú automatické testy. Ak zmena neprejde testami, zvyčajne ešte nie je naozaj pripravená na posúdenie.

Ak chcete revízie povýšiť zo stavu „Koncept“ ešte pred úspešným zostavením alebo ich povýšiť aj vtedy, keď zostavenia zlyhajú, môžete správanie povýšenia zmeniť. Môže to byť užitočné, ak máte veľmi dlho bežiace zostavenia alebo niektoré zostavenia, ktoré nie sú veľmi dôležité.

Používatelia môžu vždy použiť „Požiadať o posúdenie“ na povýšenie revízie v stave „Koncept“, aj keď zostavenia zlyhali alebo stále prebiehajú.',
  'Browse Build Initiators' => 'Prehľadávať iniciátorov zostavení',
  'Run Plan Manually' => 'Spustiť plán ručne',
  'The PHID of the build plan this build step belongs to.' => 'PHID plánu zostavenia, do ktorého tento krok zostavenia patrí.',
  'Unexpected Error' => 'Neočakávaná chyba',
  'Add Step' => 'Pridať krok',
  'When run against a revision, this build step will abort any older copies of
the same build plan which are currently running against older diffs.

There are some nuances to the behavior:

  - if this build step is triggered manually, it won\'t abort anything;
  - this build step won\'t abort manual builds;
  - this build step won\'t abort anything if the diff it is building isn\'t
    the active diff when it runs.

Build results on outdated diffs often aren\'t very important, so this may
reduce build queue load without any substantial cost.' => 'Pri spustení nad revíziou tento krok zostavenia preruší všetky staršie kópie
toho istého plánu zostavenia, ktoré momentálne bežia nad staršími diffmi.

Toto správanie má niekoľko nuáns:

  - ak sa tento krok zostavenia spustí ručne, nepreruší nič;
  - tento krok zostavenia nepreruší ručné zostavenia;
  - tento krok zostavenia nepreruší nič, ak diff, ktorý zostavuje, nie je
    v čase jeho spustenia aktívnym diffom.

Výsledky zostavenia nad zastaranými diffmi často nie sú veľmi dôležité, takže to môže
znížiť zaťaženie radu zostavení bez podstatných nákladov.',
  'The object PHID of the container (usually a revision or repository) for the object being built.' => 'PHID objektu kontajnera (zvyčajne revízie alebo repozitára) pre zostavovaný objekt.',
  'Only Restartable if Failed' => 'Reštartovateľné len po zlyhaní',
  'Processing Harbormaster build log #%d...' => 'Spracúva sa denník zostavenia Harbormaster č. %d…',
  'Targets' => 'Ciele',
  'No such implementation "%s" exists!' => 'Taká implementácia „%s“ neexistuje!',
  'You can not send this command to any of the current builds for this buildable.' => 'Tento príkaz nemôžete odoslať žiadnemu z aktuálnych zostavení tohto zostaviteľného objektu.',
  'Build Step %d: %s' => 'Krok zostavenia %d: %s',
  'Started %s build(s): %s.' => array(
    'Začaté zostavenie: %2$s.',
    'Začaté zostavenia: %2$s.',
  ),
  'Message type "%s" is not supported.' => 'Typ správy „%s“ nie je podporovaný.',
  '%s paused this buildable.' => '%s pozastavil(a) tento zostaviteľný objekt.',
  'Create an artifact of this type by passing `%s` as the `artifactType`. When creating an artifact of this type, provide these parameters as a dictionary to `artifactData`:' => 'Artefakt tohto typu vytvorte odovzdaním `%s` ako `artifactType`. Pri vytváraní artefaktu tohto typu poskytnite tieto parametre ako slovník v `artifactData`:',
  'Choose an archival mode with --mode.' => 'Vyberte archivačný režim pomocou --mode.',
  'Enter the name of a commit or revision to run this plan on (for example, `rX123456` or `D123`).

For more detailed output, you can also run manual builds from the command line:

  $ ./bin/harbormaster build <object> --plan %s' => 'Zadajte názov commitu alebo revízie, nad ktorou sa má tento plán spustiť (napríklad `rX123456` alebo `D123`).

Pre podrobnejší výstup môžete ručné zostavenia spustiť aj z príkazového riadka:

  $ ./bin/harbormaster build <object> --plan %s',
  'Build with CircleCI' => 'Zostaviť pomocou CircleCI',
  'You can only pause some builds. Once the current steps complete, work will halt on builds you can pause. You can resume the builds later.' => 'Pozastaviť môžete len niektoré zostavenia. Po dokončení aktuálnych krokov sa práca na zostaveniach, ktoré môžete pozastaviť, zastaví. Zostavenia môžete neskôr obnoviť.',
  'Can Not Run Plan' => 'Plán sa nedá spustiť',
  'Users must be able to see a build to view its build targets.' => 'Aby používatelia videli ciele zostavenia, musia vidieť samotné zostavenie.',
  'Build Variables' => 'Premenné zostavenia',
  'The PHID of the current build target.' => 'PHID aktuálneho cieľa zostavenia.',
  'Write completed. Closing log...' => 'Zápis dokončený. Zatvára sa denník…',
  'No recent builds.' => 'Žiadne nedávne zostavenia.',
  'This engine is used to edit Harbormaster buildables.' => 'Tento nástroj sa používa na úpravu zostaviteľných objektov Harbormaster.',
  'You are viewing an older run of this build. %s' => 'Prezeráte si starší beh tohto zostavenia. %s',
  'You must choose a revision or commit to build.' => 'Musíte vybrať revíziu alebo commit na zostavenie.',
  'No build step provides autotarget "%s"!' => 'Žiadny krok zostavenia neposkytuje automatický cieľ „%s“!',
  'Stored Chunks' => 'Uložené bloky',
  'Restart Build' => 'Reštartovať zostavenie',
  'No details provided.' => 'Neboli poskytnuté žiadne podrobnosti.',
  'Other Build Steps' => 'Ostatné kroky zostavenia',
  '%s Unsound Test(s)' => array(
    '%s nespoľahlivý',
    '%s nespoľahlivé',
    '%s nespoľahlivých',
  ),
  'You can not resume this build because it is not paused. You can only resume a paused build.' => 'Toto zostavenie nemôžete obnoviť, pretože nie je pozastavené. Obnoviť môžete len pozastavené zostavenie.',
  'Log data hashes differ! Something is tragically wrong!' => 'Hashe údajov denníka sa líšia! Niečo je tragicky zle!',
  'Build will abort.' => 'Zostavenie sa preruší.',
  'Like unit test results, you can report lint results when updating the state
of a build target. The `lint` parameter should contain results as a list of
dictionaries with these keys:

%s

The `severity` parameter recognizes these severity levels:

%s

This is a simple, valid value for the `lint` parameter. It reports one error
and one warning:

```lang=json
%s
```
' => 'Podobne ako výsledky jednotkových testov môžete pri aktualizácii stavu
cieľa zostavenia nahlásiť aj výsledky lintu. Parameter `lint` by mal obsahovať výsledky ako zoznam
slovníkov s týmito kľúčmi:

%s

Parameter `severity` rozpoznáva tieto úrovne závažnosti:

%s

Toto je jednoduchá platná hodnota parametra `lint`. Hlási jednu chybu
a jedno varovanie:

```lang=json
%s
```',
  'Step' => 'Krok',
  'All Steps' => 'Všetky kroky',
  'Run command %s on %s.' => 'Spustiť príkaz %s na %s.',
  'Show Only Manual Builds' => 'Zobraziť len ručné zostavenia',
  'No line map.' => 'Žiadna mapa riadkov.',
  'Report that the target is complete, and the target has failed.' => 'Nahlásiť, že cieľ je dokončený a že zlyhal.',
  'When building a revision, abort copies of this build plan which are currently running against older diffs.' => 'Pri zostavovaní revízie prerušiť kópie tohto plánu zostavenia, ktoré momentálne bežia nad staršími diffmi.',
  'Are you sure you want to delete this step? This can\'t be undone!' => 'Naozaj chcete odstrániť tento krok? Nedá sa to vrátiť späť!',
  'Build messages have the same policies as their receivers.' => 'Správy zostavenia majú rovnaké zásady ako ich prijímatelia.',
  'This build plan can not be run manually.' => 'Tento plán zostavenia sa nedá spustiť ručne.',
  'Report that the target is complete, and the target has passed.' => 'Nahlásiť, že cieľ je dokončený a že prešiel.',
  'This build plan has conflicts in one or more build steps. Examine the step list and resolve the listed errors.' => 'Tento plán zostavenia má konflikty v jednom alebo viacerých krokoch zostavenia. Preskúmajte zoznam krokov a vyriešte uvedené chyby.',
  'Containers' => 'Kontajnery',
  'The number of seconds to sleep for.' => 'Počet sekúnd, počas ktorých sa má spať.',
  'This input is bound to the wrong artifact type. It is bound to a "%s" artifact, but should be bound to a "%s" artifact.' => 'Tento vstup je viazaný na nesprávny typ artefaktu. Je viazaný na artefakt „%s“, ale mal by byť viazaný na artefakt „%s“.',
  'Stop Following Log' => 'Prestať sledovať denník',
  'Flow Control' => 'Riadenie toku',
  'Manual Buildable' => 'Ručný zostaviteľný objekt',
  'Run a build in Buildkite.' => 'Spustiť zostavenie v Buildkite.',
  'Built instantly' => 'Zostavené okamžite',
  'Save Build Step' => 'Uložiť krok zostavenia',
  'Enter the name of a revision or commit.' => 'Zadajte názov revízie alebo commitu.',
  'Option' => 'Možnosť',
  'Arcanist Lint Results' => 'Výsledky lintu Arcanist',
  'Edit Harbormaster Buildable Configurations' => 'Upravovať konfigurácie zostaviteľných objektov Harbormaster',
  'You can not pause this build because it is already restarting.' => 'Toto zostavenie nemôžete pozastaviť, pretože sa už reštartuje.',
  'Continue Build Normally' => 'Pokračovať v zostavení bežne',
  'Drydock working copy lease to create an artifact from.' => 'Prenájom pracovnej kópie Drydock, z ktorého sa má vytvoriť artefakt.',
  'Autoplan' => 'Automatický plán',
  'Unable to load repository with PHID "%s".' => 'Nepodarilo sa načítať repozitár s PHID „%s“.',
  'Test engine running the test, like "JavascriptTestEngine". This primarily prevents collisions between tests with the same name in different test suites (for example, a Javascript test and a Python test).' => 'Testovací nástroj, ktorý test spúšťa, napríklad „JavascriptTestEngine“. Predchádza najmä kolíziám medzi testami s rovnakým názvom v rôznych testovacích sadách (napríklad medzi testom v JavaScripte a testom v Pythone).',
  'Container' => 'Kontajner',
  'Choose a build log to rebuild with "--id", or rebuild all logs with "--all".' => 'Vyberte denník zostavenia na opätovné zostavenie pomocou „--id“ alebo znovu zostavte všetky denníky pomocou „--all“.',
  'Depends On' => 'Závisí od',
  'Build will resume.' => 'Zostavenie sa obnoví.',
  'Run build plans: %s.' => 'Spustiť plány zostavenia: %s.',
  'Declining to make service call because `phabricator.silent` is enabled in configuration.' => 'Volanie služby sa odmieta, pretože v konfigurácii je zapnuté `phabricator.silent`.',
  'Build Logs' => 'Denníky zostavenia',
  'The buildable waits for the build, but does not fail if the build fails.' => 'Zostaviteľný objekt čaká na zostavenie, ale nezlyhá, ak zostavenie zlyhá.',
  'The person (or thing) that started this build.' => 'Osoba (alebo vec), ktorá spustila toto zostavenie.',
  'View Build' => 'Zobraziť zostavenie',
  'Really abort %s build(s)?' => array(
    'Naozaj prerušiť zostavenie?',
    'Naozaj prerušiť %s zostavenia?',
    'Naozaj prerušiť %s zostavení?',
  ),
  '(%d - %d)' => '(%d – %d)',
  'Object "%s" does not implement interface "%s". Autotargets may only be queried for buildable objects.' => 'Objekt „%s“ neimplementuje rozhranie „%s“. Automatické ciele možno dopytovať len pre zostaviteľné objekty.',
  '%s enabled this build plan.' => '%s povolil(a) tento plán zostavenia.',
  'Stored Bytes' => 'Uložené bajty',
  'Work will continue on the build. Really resume?' => 'Práca na zostavení bude pokračovať. Naozaj obnoviť?',
  'Log to rebuild.' => 'Denník, ktorý sa má znovu zostaviť.',
  'Run By Herald Rules' => 'Spustené pravidlami Herald',
  'When a user attempts to `arc land` a revision and that revision has ongoing or failed builds, the default behavior of `arc` is to warn them about those builds and give them a chance to reconsider: they may want to wait for ongoing builds to complete, or fix failed builds before landing the change.

If you do not want to warn users about this build, you can change the warning behavior. This may be useful if the build takes a long time to run (so you do not expect users to wait for it) or the outcome is not important.

This warning is only advisory. Users may always elect to ignore this warning and continue, even if builds have failed.

This setting also affects the warning that is published to revisions when commits land with ongoing or failed builds.' => 'Keď sa používateľ pokúsi revíziu začleniť pomocou `arc land` a tá revízia má prebiehajúce alebo zlyhané zostavenia, predvolené správanie `arc` je upozorniť ho na tieto zostavenia a dať mu šancu si to rozmyslieť: možno bude chcieť počkať na dokončenie prebiehajúcich zostavení alebo pred začlenením zmeny opraviť zlyhané zostavenia.

Ak nechcete používateľov na toto zostavenie upozorňovať, môžete správanie varovania zmeniť. Môže to byť užitočné, ak zostavenie beží dlho (takže neočakávate, že naň budú používatelia čakať) alebo ak jeho výsledok nie je dôležitý.

Toto varovanie je len odporúčacie. Používatelia sa vždy môžu rozhodnúť varovanie ignorovať a pokračovať, aj keď zostavenia zlyhali.

Toto nastavenie ovplyvňuje aj varovanie, ktoré sa publikuje k revíziám, keď sa commity začlenia s prebiehajúcimi alebo zlyhanými zostaveniami.',
  'Edit Behavior: %s' => 'Upraviť správanie: %s',
  'Result of the test.' => 'Výsledok testu.',
  'Use "--id" or "--active" to select builds.' => 'Na výber zostavení použite „--id“ alebo „--active“.',
  'Unable to load build log "%s".' => 'Nepodarilo sa načítať denník zostavenia „%s“.',
  'Upload a file.' => 'Nahrať súbor.',
  'Build Plan Prevents Restart' => 'Plán zostavenia bráni reštartovaniu',
  'Unable to load API token ("%s")!' => 'Nepodarilo sa načítať token API („%s“)!',
  'Find out information about build logs.' => 'Zistiť informácie o denníkoch zostavenia.',
  '%s Passed Test(s)' => array(
    '%s úspešný',
    '%s úspešné',
    '%s úspešných',
  ),
  'Sending Messages' => 'Odosielanie správ',
  'ERROR:' => 'CHYBA:',
  'Builtins' => 'Zabudované',
  'Build %d' => 'Zostavenie %d',
  'Harbormaster build target "%s" does not exist.' => 'Cieľ zostavenia Harbormaster „%s“ neexistuje.',
  'If you pause all builds, work will halt once the current steps complete. You can resume the builds later.' => 'Ak pozastavíte všetky zostavenia, práca sa zastaví po dokončení aktuálnych krokov. Zostavenia môžete neskôr obnoviť.',
  'Call specifies both "receiver" and "buildTargetPHID". When using the modern "receiver" parameter, omit the deprecated "buildTargetPHID" parameter.' => 'Volanie zadáva „receiver“ aj „buildTargetPHID“. Pri použití moderného parametra „receiver“ vynechajte zastaraný parameter „buildTargetPHID“.',
  'Host Artifact' => 'Artefakt hostiteľa',
  'No Unit Tests' => 'Žiadne jednotkové testy',
  'All Targets' => 'Všetky ciele',
  'Throw an exception.' => 'Vyhodiť výnimku.',
  'Query Harbormaster builds.' => 'Dopytovať zostavenia Harbormaster.',
  'View All Builds' => 'Zobraziť všetky zostavenia',
  'If Failed' => 'Ak zlyhalo',
  'Builds for this buildable:' => 'Zostavenia pre tento zostaviteľný objekt:',
  'The artifact type.' => 'Typ artefaktu.',
  'Search for logs that belong to a particular build target.' => 'Hľadať denníky, ktoré patria konkrétnemu cieľu zostavenia.',
  'Type the name of a user, application or Herald rule...' => 'Napíšte meno používateľa, názov aplikácie alebo pravidla Herald…',
  'This build plan does not have any build steps yet.' => 'Tento plán zostavenia zatiaľ nemá žiadne kroky zostavenia.',
  'Build Targets' => 'Ciele zostavenia',
  'Really resume build?' => 'Naozaj obnoviť zostavenie?',
  'Build generation this target belongs to. When builds restart, a new generation with new targets is created.' => 'Generácia zostavenia, do ktorej tento cieľ patrí. Pri reštarte zostavenia sa vytvorí nová generácia s novými cieľmi.',
  'External Link' => 'Externý odkaz',
  'You can not pause this build because it has already completed.' => 'Toto zostavenie nemôžete pozastaviť, pretože je už dokončené.',
  'Unknown build step field "%s"!' => 'Neznáme pole kroku zostavenia „%s“!',
  'URI "%s" does not have an allowable protocol. Configure protocols in `%s`. Allowed protocols are: %s.' => 'URI „%s“ nemá povolený protokol. Protokoly nakonfigurujte v `%s`. Povolené protokoly sú: %s.',
  'Wait for Previous Commits to Build' => 'Počkať na zostavenie predchádzajúcich commitov',
  'Disable Plan' => 'Zakázať plán',
  'Enable this build plan?' => 'Povoliť tento plán zostavenia?',
  'Drydock Working Copy' => 'Pracovná kópia Drydock',
  'This buildable has no builds, so you can not issue any commands.' => 'Tento zostaviteľný objekt nemá žiadne zostavenia, takže nemôžete vydávať žiadne príkazy.',
  'Show More (%s Bytes)' => array(
    'Zobraziť viac (%s bajt)',
    'Zobraziť viac (%s bajty)',
    'Zobraziť viac (%s bajtov)',
  ),
  'The overall state of a buildable (like a commit or revision) is normally the aggregation of the individual states of all builds that have run against it.

Buildables are "building" until all builds pass (which changes them to "pass"), or any build fails (which changes them to "fail").

You can change this behavior if you do not want to wait for this build, or do not care if it fails.' => 'Celkový stav zostaviteľného objektu (napríklad commitu alebo revízie) je zvyčajne agregáciou jednotlivých stavov všetkých zostavení, ktoré nad ním bežali.

Zostaviteľné objekty sú v stave „zostavuje sa“, kým neprejdú všetky zostavenia (čím sa zmenia na „prešlo“) alebo kým niektoré zostavenie nezlyhá (čím sa zmenia na „zlyhalo“).

Toto správanie môžete zmeniť, ak nechcete na toto zostavenie čakať alebo ak vám nezáleží na tom, či zlyhá.',
  'The build may be restarted if it has failed.' => 'Zostavenie sa smie reštartovať, ak zlyhalo.',
  'A build inherits policies from its buildable.' => 'Zostavenie dedí zásady od svojho zostaviteľného objektu.',
  'You can not abort this build because it is already aborting.' => 'Toto zostavenie nemôžete prerušiť, pretože sa už prerušuje.',
  'Arcanist Unit Results' => 'Výsledky jednotkových testov Arcanist',
  'This build is already restarting. You can not reissue a restart command to a restarting build.' => 'Toto zostavenie sa už reštartuje. Reštartujúcemu sa zostaveniu nemôžete znovu vydať príkaz na reštart.',
  'The following variables can be used in most fields. To reference a variable, use `%s` in a field.' => 'Nasledujúce premenné možno použiť vo väčšine polí. Na odkázanie na premennú použite v poli `%s`.',
  'This engine is used to edit Harbormaster build plans.' => 'Tento nástroj sa používa na úpravu plánov zostavenia Harbormaster.',
  'This function definition is not a haiku.' => 'Táto definícia funkcie nie je haiku.',
  'You can not resume this build because it is already resuming.' => 'Toto zostavenie nemôžete obnoviť, pretože sa už obnovuje.',
  '(null)' => '(null)',
  'Progress on this build will be discarded and the build will restart. Side effects of the build will occur again. Really restart build?' => 'Priebeh tohto zostavenia sa zahodí a zostavenie sa reštartuje. Vedľajšie účinky zostavenia nastanú znova. Naozaj reštartovať zostavenie?',
  'Search for builds by buildable status.' => 'Hľadať zostavenia podľa stavu zostaviteľného objektu.',
  'Abort Builds' => 'Prerušiť zostavenia',
  'Upload From Host' => 'Nahrať z hostiteľa',
);
  }

}
