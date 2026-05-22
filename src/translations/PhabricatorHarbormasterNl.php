<?php

final class PhabricatorHarbormasterNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Build Artifact' => 'Buildartefact',
  'Plan %d %s' => 'Plan %d %s',
  'Waiting for Message' => 'Wachten op bericht',
  'Harbormaster Artifacts' => 'Harbormaster-artefacten',
  'Updating build %d of buildable %s...' => 'Build %d van buildable %s bijwerken...',
  'TEST RESULT' => 'TESTRESULTAAT',
  'Browse Dependencies' => 'Afhankelijkheden doorbladeren',
  'Unable to Pause Build' => 'Kan build niet pauzeren',
  'Search for builds by containing revision or repository.' => 'Zoeken naar builds op basis van versie of repository.',
  'Started at %s' => 'Gestart op %s',
  'Valid Output' => 'Correcte uitvoer',
  'Failed to gzdeflate() log data!' => 'Kan loggegevens niet comprimeren met gzdeflate()!',
  'Deadlocked' => 'Impasse',
  'Buildkite did not return a "%s"!' => 'Buildkite heeft geen "%s" geretourneerd!',
  'For example:' => 'Bijvoorbeeld:',
  'OK: Ignored event.' => 'OK: gebeurtenis genegeerd.',
  'Behavior: %s' => 'Gedrag: %s',
  'Build Passed' => 'Build geslaagd',
  'You can only restart some builds.' => 'U kunt alleen bepaalde builds herstarten.',
  'Resume Build' => 'Build hervatten',
  'Retrieve information about Harbormaster build targets.' => 'Informatie over Harbormaster-builddoelen ophalen.',
  'Unable to identify the protocol for URI "%s". URIs must be fully qualified and have an identifiable protocol.' => 'Kan het protocol voor URI "%s" niet identificeren. URI\'s moeten volledig gekwalificeerd zijn en een identificeerbaar protocol hebben.',
  'Log Not Finalized' => 'Log niet afgerond',
  'PHID of the object this build is building.' => 'PHID van het object dat door deze build wordt gebouwd.',
  'No build plans found.' => 'Geen buildplannen gevonden.',
  'This plan can not be run manually.' => 'Dit plan kan niet handmatig worden uitgevoerd.',
  'Artifact "%s" not found!' => 'Artefact "%s" niet gevonden!',
  'Run a command on Drydock resource.' => 'Een opdracht uitvoeren op een Drydock-resource.',
  '%s Skipped Test(s)' => '%s overgeslagen test(s)',
  'Severity of the message.' => 'Ernst van het bericht.',
  'The build plan for this build is configured to prevent users who can not edit it from issuing commands to the build, and you do not have permission to edit the build plan.' => 'Het buildplan voor deze build is zo geconfigureerd dat gebruikers die het niet kunnen bewerken geen opdrachten aan de build kunnen geven, en u hebt geen toestemming om het buildplan te bewerken.',
  'You can not pause a build that uses an autoplan.' => 'U kunt een build die een autoplan gebruikt niet pauzeren.',
  'Search for targets with given statuses.' => 'Zoeken naar doelen met opgegeven statussen.',
  'Unsound' => 'Ondeugdelijk',
  'Run a build in CircleCI.' => 'Een build uitvoeren in CircleCI.',
  'View External Build Results' => 'Externe buildresultaten bekijken',
  'Build with Buildkite' => 'Bouwen met Buildkite',
  'Attempt to load log bytes (%d - %d) failed: failed to load a single contiguous range. Actual ranges: %s.' => 'Poging om logbytes (%d - %d) te laden is mislukt: kan geen enkel aaneengesloten bereik laden. Werkelijke bereiken: %s.',
  'Not A Haiku' => 'Geen haiku',
  '%s Broken Test(s)' => '%s mislukte test(s)',
  'Resuming' => 'Hervatten',
  'Insufficient Build Plan Permission' => 'Onvoldoende buildplanrechten',
  'Publishing "%s"...' => '"%s" publiceren…',
  'The name of the build target.' => 'De naam van het builddoel.',
  'Edit Plan' => 'Plan bewerken',
  'This test has too much data to display inline.' => 'Deze test heeft te veel gegevens om inline weer te geven.',
  'Run %d' => 'Uitvoering %d',
  'Organization Name' => 'Organisatienaam',
  'True if this artifact has been released.' => 'Waar als dit artefact is vrijgegeven.',
  'Browse Builds' => 'Builds doorbladeren',
  'Expected "%s" property to contain a dictionary.' => 'Verwacht dat eigenschap "%s" een dictionary bevat.',
  'You must have edit permission on this build plan to pause, abort, resume, or restart it.' => 'U moet bewerkingsrechten hebben op dit buildplan om het te pauzeren, af te breken, te hervatten of te herstarten.',
  'Really Delete Step?' => 'Stap echt verwijderen?',
  'or' => 'of',
  'Completed' => 'Voltooid',
  'Revisions are not sent for review until the build completes, but they will be sent for review even if it fails.' => 'Versies worden pas ter beoordeling verzonden als de build is voltooid, maar ze worden ook ter beoordeling verzonden als deze mislukt.',
  'You can not resume this build because it is already restarting.' => 'U kunt deze build niet hervatten omdat deze al opnieuw wordt gestart.',
  'Output Artifacts' => 'Uitvoerartefacten',
  'Manage Build Plans' => 'Buildplannen beheren',
  'Default Build Plan View Policy' => 'Standaard weergavebeleid voor buildplannen',
  'Choose a build target to attach the log to with "--target".' => 'Kies een builddoel om het log aan te koppelen met "--target".',
  'Build Preparing' => 'Build wordt voorbereid',
  'This test result has %s bytes of Remarkup test details. Remarkup blocks longer than %s bytes are not rendered inline when showing test summaries.' => 'Dit testresultaat heeft %s bytes aan Remarkup-testdetails. Remarkup-blokken langer dan %s bytes worden niet inline weergegeven bij het weergeven van testsamenvattingen.',
  'Edit Buildable' => 'Buildable bewerken',
  'Call includes "lint" parameter. This parameter must be omitted when the receiver is not a Build Target.' => 'Aanroep bevat de parameter "lint". Deze parameter moet worden weggelaten als de ontvanger geen builddoel is.',
  'This build can not be restarted because it is an automatic build.' => 'Deze build kan niet opnieuw worden gestart omdat het een automatische build is.',
  'Started After' => 'Gestart na',
  'Specify exactly one buildable, by object name.' => 'Geef precies één buildable op, op objectnaam.',
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
' => 'U kunt deze methode gebruiken om besturingsopdrachten naar Buildables en Builds te sturen.

Deze tabel geeft een overzicht van welke objecttypen besturingsopdrachten kunnen ontvangen:

<table>
  <tr>
    <th>Objecttype</th>
    <th>PHID-voorbeeld</th>
    <th />
    <th>Beschrijving</th>
  </tr>
  <tr>
    <td>Harbormaster Buildable</td>
    <td>`PHID-HMBB-...`</td>
    <td>{icon check color=green}</td>
    <td>Buildables kunnen besturingsopdrachten ontvangen.</td>
  </tr>
  <tr>
    <td>Harbormaster Build</td>
    <td>`PHID-HMBD-...`</td>
    <td>{icon check color=green}</td>
    <td>Builds kunnen besturingsopdrachten ontvangen.</td>
  </tr>
  <tr>
    <td>Harbormaster Build Target</td>
    <td>`PHID-HMBT-...`</td>
    <td>{icon times color=red}</td>
    <td>U mag **GEEN** besturingsopdrachten naar builddoelen sturen.</td>
  </tr>
</table>

U kunt deze opdrachten sturen:

%s

Om een opdrachtbericht te sturen, geeft u de PHID op van het object dat het bericht moet ontvangen met de parameter `receiver`, en geeft u het berichttype op met de parameter `type`.
\\',
  'Enable Plan' => 'Plan inschakelen',
  'Unable to Abort Build' => 'Kan build niet afbreken',
  'Unable to Load File' => 'Kan bestand niet laden',
  'Edit Build: %s' => 'Build bewerken: %s',
  'The object PHID of the object (usually a diff or commit) being built.' => 'De object-PHID van het object (meestal een diff of commit) dat wordt gebouwd.',
  'Build Target' => 'Builddoel',
  'Unable to determine how to fetch changes: this buildable does not identify a commit or a staging ref. You may need to configure a repository staging area.' => 'Kan niet bepalen hoe wijzigingen opgehaald moeten worden: deze buildable identificeert geen commit of staging ref. Mogelijk moet u een repository-staginggebied configureren.',
  'Failed to load build plan ("%s").' => 'Kan buildplan ("%s") niet laden.',
  'Run plan __id__ on __buildable__.' => 'Plan __id__ uitvoeren op __buildable__.',
  'Step %d' => 'Stap %d',
  'Build Started' => 'Build gestart',
  'Done. Total byte size of affected logs: %s -> %s.' => 'Gereed. Totale bytegrootte van betrokken logs: %s -> %s.',
  'Build %d: %s' => 'Build %d: %s',
  '%s aborted this build.' => '%s heeft deze build afgebroken.',
  'Disable Build Plan' => 'Buildplan uitschakelen',
  'Search for targets of a given build.' => 'Zoeken naar doelen van een bepaalde build.',
  'Enable Build Plan' => 'Buildplan inschakelen',
  'Webhook Token' => 'Webhooktoken',
  'When creating an artifact, you will choose an `artifactType` from this table. These types of artifacts are supported:' => 'Bij het aanmaken van een artefact kiest u een `artifactType` uit deze tabel. Deze typen artefacten worden ondersteund:',
  'Aborting' => 'Afbreken',
  '%s Other Test(s)' => '%s andere test(s)',
  'A buildable inherits policies from the underlying object.' => 'Een buildable neemt beleid over van het onderliggende object.',
  'Build Steps' => 'Buildstappen',
  'Harbormaster Builds' => 'Harbormaster-builds',
  '%s paused this build.' => '%s heeft deze build gepauzeerd.',
  'Sleep for %s seconds.' => '%s seconden wachten.',
  '%s created this build step.' => '%s heeft deze buildstap aangemaakt.',
  'Buildable Name' => 'Buildable-naam',
  'If Complete' => 'Indien voltooid',
  'This object does not support builds with Buildkite.' => 'Dit object ondersteunt geen builds met Buildkite.',
  'Search for targets completed on or before a particular date.' => 'Zoeken naar doelen die op of voor een bepaalde datum zijn voltooid.',
  'Compress, decompress, store or destroy build logs.' => 'Buildlogs comprimeren, decomprimeren, opslaan of vernietigen.',
  'Target %d' => 'Doel %d',
  'The build the target is associated with.' => 'De build waaraan het doel is gekoppeld.',
  'Received' => 'Ontvangen',
  'Use "plain" to remove encoding, or "compress" to compress logs.' => 'Gebruik "plain" om codering te verwijderen, of "compress" om logs te comprimeren.',
  'Default Build Plan Edit Policy' => 'Standaard bewerkingsbeleid voor buildplannen',
  'Unused Output' => 'Ongebruikte uitvoer',
  'Abort Older Builds' => 'Oudere builds afbreken',
  'Pause Build' => 'Build pauzeren',
  'Interacting with External Build Systems' => 'Interactie met externe buildsystemen',
  'Progress on this build will be discarded. Really abort build?' => 'De voortgang van deze build wordt verworpen. Build echt afbreken?',
  'Artifact %d' => 'Artefact %d',
  'Path to the file containing the lint message, from the project root.' => 'Pad naar het bestand met het lintbericht, vanaf de projectroot.',
  'No artifacts found.' => 'Geen artefacten gevonden.',
  'A build step has the same policies as its build plan.' => 'Een buildstap heeft hetzelfde beleid als het bijbehorende buildplan.',
  'Rebuilding log "%s"...' => 'Log "%s" opnieuw opbouwen...',
  '%s Failed Test(s)' => '%s mislukte test(s)',
  'Unknown mode "%s". Valid modes are: %s.' => 'Onbekende modus "%s". Geldige modi zijn: %s.',
  'Wait for previous commits to finish building the current plan before continuing.' => 'Wacht tot eerdere commits het huidige plan hebben gebouwd voordat u verdergaat.',
  'No handler found for %s' => 'Geen handler gevonden voor %s',
  'Follow Log' => 'Logboek volgen',
  'You can not resume a build that uses an autoplan.' => 'U kunt een build die een autoplan gebruikt niet hervatten.',
  'Explicitly update the builds for __buildable__.' => 'De builds voor __buildable__ expliciet bijwerken.',
  'Path to the file where the test is declared, relative to the project root.' => 'Pad naar het bestand waar de test is gedeclareerd, relatief ten opzichte van de projectroot.',
  'Apply transactions to create a new build step or edit an existing one.' => 'Transacties toepassen om een nieuwe buildstap aan te maken of een bestaande te bewerken.',
  'Show more details about operations as they are performed. Slow! But also very reassuring!' => 'Meer details over bewerkingen weergeven terwijl ze worden uitgevoerd. Langzaam! Maar ook zeer geruststellend!',
  'Lint message code identifying the type of message, like "ERR123".' => 'Lintberichtcode die het type bericht identificeert, zoals "ERR123".',
  'Build will pause.' => 'Build wordt gepauzeerd.',
  'This is an autoplan (a builtin plan provided by an application) so it can not be edited.' => 'Dit is een autoplan (een ingebouwd plan dat door een applicatie wordt geleverd) en kan daarom niet worden bewerkt.',
  'Make an authenticated HTTP %s request to %s.' => 'Een geauthenticeerd HTTP %s-verzoek naar %s doen.',
  'The build target this artifact is attached to.' => 'Het builddoel waaraan dit artefact is gekoppeld.',
  'Sent a restart message to build.' => 'Een herstartbericht naar de build gestuurd.',
  'Line number in the file where the text which triggered the message first appears. The first line of the file is line 1, not line 0.' => 'Regelnummer in het bestand waar de tekst die het bericht heeft veroorzaakt voor het eerst voorkomt. De eerste regel van het bestand is regel 1, niet regel 0.',
  'Buildables' => 'Buildables',
  'The artifact key.' => 'De artefactsleutel.',
  'Build step "%s" has step group key "%s", but no step group with that key exists.' => 'Buildstap "%s" heeft stapgroepsleutel "%s", maar er bestaat geen stapgroep met die sleutel.',
  'When Complete' => 'Bij voltooiing',
  'Show all logs.' => 'Alle logs weergeven.',
  'Invalid buildable PHID "%s".' => 'Onjuiste buildable-PHID "%s".',
  'Find out information about buildables.' => 'Informatie over buildables opzoeken.',
  'ID of build plan to run.' => 'ID van het uit te voeren buildplan.',
  'Run Build Plan Manually' => 'Buildplan handmatig uitvoeren',
  'Limit the rate at which the log is written, to test live log streaming.' => 'De snelheid waarmee het log wordt geschreven beperken, om live logstreaming te testen.',
  'Running for %s' => 'Actief sinds %s',
  'Show More Above' => 'Meer hierboven weergeven',
  '**rebuild-log** --id __id__ [__options__]
**rebuild-log** --all' => '**rebuild-log** --id __id__ [__options__]
**rebuild-log** --all',
  '%s created this build plan.' => '%s heeft dit buildplan aangemaakt.',
  'Search for builds running a given build plan.' => 'Zoeken naar builds die een bepaald buildplan uitvoeren.',
  'You do not have permission to create Harbormaster build plans.' => 'U hebt geen toestemming om Harbormaster-buildplannen aan te maken.',
  'Epoch timestamp for target completion, if the target has completed.' => 'Epoch-tijdstempel voor voltooiing van het doel, als het doel is voltooid.',
  'Build plan "%s" does not exist.' => 'Buildplan "%s" bestaat niet.',
  'You can not pause this build because it is already aborting.' => 'U kunt deze build niet pauzeren omdat deze al wordt afgebroken.',
  'Pause the build.' => 'De build pauzeren.',
  'Really resume %s build(s)?' => 'Echt %s build(s) hervatten?',
  'Uploaded File' => 'Geüpload bestand',
  'Force the buildable to update even if no build status changes occur during normal update.' => 'De buildable dwingen bij te werken, zelfs als er geen buildstatuswijzigingen optreden tijdens een normale update.',
  'INVALID' => 'ONJUIST',
  'Unable to load object "%s" to receive message.' => 'Kan object "%s" niet laden om bericht te ontvangen.',
  'No such variable \'%s\'!' => 'Variabele \'%s\' bestaat niet!',
  'Request OK
' => 'Verzoek OK
\\',
  'The object PHID of the Harbormaster Build being built.' => 'De object-PHID van de Harbormaster-build die wordt gebouwd.',
  'Logs must be fully written and processed before they can be downloaded. This log is still being written or processed.' => 'Logs moeten volledig geschreven en verwerkt zijn voordat ze kunnen worden gedownload. Dit log wordt nog geschreven of verwerkt.',
  '%s restarted this build.' => '%s heeft deze build herstart.',
  'Harbormaster Buildables' => 'Harbormaster-buildables',
  'Sleep' => 'Wachten',
  'Writing log, slowly...' => 'Log schrijven, langzaam...',
  'Unknown CircleCI build type "%s". Expected "%s" or "%s".' => 'Onbekend CircleCI-buildtype "%s". Verwacht "%s" of "%s".',
  'You must openBuildLog() before you can append() content to the log.' => 'U moet openBuildLog() aanroepen voordat u inhoud aan het log kunt toevoegen met append().',
  'Plan %d' => 'Plan %d',
  'Drydock: Run Command' => 'Drydock: opdracht uitvoeren',
  'Abort the build, discarding progress.' => 'De build afbreken en voortgang verwerpen.',
  'Buildables may receive control commands like "abort" and "restart". Sending a control command to a Buildable is the same as sending it to each Build for the Buildable.' => 'Buildables kunnen besturingsopdrachten ontvangen zoals "abort" en "restart". Een besturingsopdracht naar een Buildable sturen is hetzelfde als het naar elke Build voor de Buildable sturen.',
  'Coverage information for this test.' => 'Dekkingsinformatie voor deze test.',
  'This attachment exists solely to provide compatibility with the message format returned by an outdated API method. It will be taken away at some point and you should not rely on these fields being available.' => 'Deze bijlage bestaat uitsluitend voor compatibiliteit met het berichtformaat dat door een verouderde API-methode wordt geretourneerd. Het wordt op een gegeven moment verwijderd en u moet niet vertrouwen op de beschikbaarheid van deze velden.',
  'The build plan name.' => 'De naam van het buildplan.',
  'View Current Build' => 'Huidige bouw weergeven',
  'Next Steps' => 'Volgende stappen',
  'Fragment' => 'Fragment',
  'Build target this log is attached to.' => 'Builddoel waaraan dit log is gekoppeld.',
  'Work will continue on all builds. Really resume?' => 'Het werk aan alle builds wordt voortgezet. Echt hervatten?',
  'Already Restarting' => 'Wordt al herstart',
  'Stores a URI.' => 'Slaat een URI op.',
  'Edit Build Step: %s' => 'Buildstap bewerken: %s',
  'rXYZ, R123, D456, ...' => 'rXYZ, R123, D456, ...',
  'Rebuild all logs.' => 'Alle logs opnieuw opbouwen.',
  'Attempting to access unknown build status property ("%s").' => 'Poging om onbekende buildstatuseigenschap ("%s") te benaderen.',
  'Rebuild the file and summary for a log. This is primarily intended to make it easier to develop new log summarizers.' => 'Het bestand en de samenvatting voor een log opnieuw opbouwen. Dit is voornamelijk bedoeld om het gemakkelijker te maken nieuwe logsamenvattingen te ontwikkelen.',
  'Standalone Log Fragment' => 'Zelfstandig logfragment',
  'Harbormaster Build Steps' => 'Harbormaster-buildstappen',
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
```' => 'U kunt testresultaten rapporteren bij het bijwerken van de status van een builddoel. De
eenvoudigste manier om dit te doen is alle resultaten te rapporteren samen met een `pass`- of
`fail`-bericht, maar u kunt ook een `work`-bericht sturen om tussentijdse
resultaten te rapporteren.


Om unittestresultaten te leveren, geeft u een lijst met resultaten door in de `unit`-
parameter. Elk resultaat moet een dictionary zijn met deze sleutels:

%s

De `result`-parameter herkent deze testresultaten:

%s

Dit is een eenvoudige, geldige waarde voor de `unit`-parameter. Het rapporteert één geslaagde
test en één mislukte test:

```lang=json
%s
```',
  'Origin' => 'Oorsprong',
  'Build Status' => 'Buildstatus',
  'Run At' => 'Uitgevoerd op',
  'No build plan behavior with key "%s" exists.' => 'Er bestaat geen buildplangedrag met sleutel "%s".',
  'The build may not be restarted.' => 'De build mag niet opnieuw worden gestart.',
  'Initiators' => 'Initiators',
  'Runtime duration of the test, in seconds.' => 'Uitvoerduur van de test, in seconden.',
  'Lint Messages' => 'Lintberichten',
  'Missing Dependency' => 'Ontbrekende afhankelijkheid',
  'Search for targets started on or after a particular date.' => 'Zoeken naar doelen die op of na een bepaalde datum zijn gestart.',
  'This target has no associated artifacts.' => 'Dit doel heeft geen gekoppelde artefacten.',
  'Choose Build Statuses' => 'Buildstatussen kiezen',
  'Search for targets started on or before a particular date.' => 'Zoeken naar doelen die op of voor een bepaalde datum zijn gestart.',
  'New Step: %s' => 'Nieuwe stap: %s',
  'This build plan will deadlock when executed, due to circular dependencies present in the build plan. Examine the step list and resolve the deadlock.' => 'Dit buildplan zal vastlopen bij uitvoering vanwege circulaire afhankelijkheden in het buildplan. Bekijk de stappenlijst en los de impasse op.',
  'This older log is missing required rendering data. To rebuild rendering data, run: %s' => 'Dit oudere log mist vereiste weergavegegevens. Voer het volgende uit om weergavegegevens opnieuw op te bouwen: %s',
  '%s changed the %s behavior for this plan from %s to %s.' => '%s heeft het %s-gedrag voor dit plan gewijzigd van %s naar %s.',
  'No such buildable "%s"!' => 'Buildable "%s" bestaat niet!',
  'Receiver object (of class "%s") is not a valid receiver.' => 'Ontvangerobject (van klasse "%s") is geen geldige ontvanger.',
  'PHID of the object that is built.' => 'PHID van het object dat wordt gebouwd.',
  'Harbormaster Build Logs' => 'Harbormaster-buildlogs',
  'QUEUED' => 'IN WACHTRIJ',
  'You can not abort this build because it is already complete.' => 'U kunt deze build niet afbreken omdat deze al is voltooid.',
  'Retrieve information about Harbormaster build steps.' => 'Informatie over Harbormaster-buildstappen ophalen.',
  'Edit Harbormaster Build Configurations' => 'Harbormaster-buildconfiguraties bewerken',
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
' => 'WAARSCHUWING: Deze buildstap is nieuw en experimenteel!

Om **versies** te bouwen met CircleCI moeten ze:

  - tot een gevolgde repository behoren;
  - de repository moet een Staging Area geconfigureerd hebben;
  - de Staging Area moet op GitHub gehost zijn; en
  - u moet de hieronder beschreven webhook configureren.

Om **commits** te bouwen met CircleCI moeten ze:

  - tot een repository behoren die vanuit GitHub wordt geïmporteerd; en
  - u moet de hieronder beschreven webhook configureren.

Webhookconfiguratie
=====================

Voeg deze webhook toe aan uw `circle.yml`-bestand om CircleCI resultaten
aan Harbormaster te laten rapporteren. Totdat u deze hook installeert, zullen builds
blijven wachten op een reactie van CircleCI.

```lang=yml
notify:
  webhooks:
    - url: %s
```

Omgeving
===========

Deze variabelen zijn beschikbaar in de buildomgeving:

| Variabele | Beschrijving |
|----------|-------------|
| `HARBORMASTER_BUILD_TARGET_PHID` | PHID van het builddoel.
\\',
  'Search for builds started by someone or something in particular.' => 'Zoeken naar builds die door iemand of iets specifieks zijn gestart.',
  'Any user who can view the plan can run it manually.' => 'Elke gebruiker die het plan kan bekijken, kan het handmatig uitvoeren.',
  'When a build is restarted, side effects associated with the build may occur again.' => 'Wanneer een build opnieuw wordt gestart, kunnen bijwerkingen die aan de build zijn gekoppeld opnieuw optreden.',
  'The build may be restarted.' => 'De build mag opnieuw worden gestart.',
  'Resume work on a previously paused build.' => 'Het werk aan een eerder gepauzeerde build hervatten.',
  'Automatic `arc unit` step.' => 'Automatische `arc unit`-stap.',
  'Build Plan' => 'Buildplan',
  'Drydock lease PHID "%s" does not correspond to a valid lease.' => 'Drydock-lease-PHID "%s" komt niet overeen met een geldige lease.',
  'The name of this build.' => 'De naam van deze build.',
  'File PHID "%s" does not correspond to a valid file.' => 'Bestands-PHID "%s" komt niet overeen met een geldig bestand.',
  'Name one or more buildables to publish, like "B123".' => 'Geef een of meer buildables op om te publiceren, zoals "B123".',
  'Pausing' => 'Pauzeren',
  'Manual' => 'Handmatig',
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

See below for specifics on sending messages to different object types.' => 'Harbormaster-buildobjecten werken enigszins anders dan objecten in veel andere
applicaties. De meeste applicatieobjecten kunnen direct worden bewerkt met synchrone
API\'s (zoals `maniphest.edit`, `differential.revision.edit`, enzovoort).

Builds vereisen echter langlopende achtergrondverwerking en Harbormaster-
objecten hebben een complexere levenscyclus dan de meeste andere applicatieobjecten en
kunnen aanzienlijke perioden vergrendeld zijn door daemonprocessen tijdens de
builduitvoering. Een synchrone bewerking moet mogelijk willekeurig lang wachten
tot deze vergrendeling beschikbaar komt zodat de bewerking kan worden toegepast.

Daarnaast kunnen sommige bewerkingen ook willekeurig lang duren om te
//voltooien//. Het afbreken van een build kan bijvoorbeeld opruimstappen uitvoeren die
minuten (of zelfs uren) duren om te voltooien.

Omdat een synchrone API niet kan garanderen dat het resultaten aan de
aanroeper kan retourneren binnen een redelijke tijd, is de bewerkings-API voor Harbormaster-build-
objecten asynchroon: om een Harbormaster-build of builddoel bij te werken, gebruikt u
deze API (`harbormaster.sendmessage`) om een bericht te sturen met een beschrijving van een bewerking
die u wilt doorvoeren of aanvullende informatie die u wilt verstrekken.
Het bericht wordt verwerkt door de daemons zodra de build of het doel
een geschikte status bereikt om berichten te ontvangen.

Selecteer een object om een bericht naar te sturen met de `receiver`-parameter. Deze
API-methode kan berichten naar meerdere typen objecten sturen:

<table>
  <tr>
    <th>Objecttype</th>
    <th>PHID-voorbeeld</th>
    <th>Beschrijving</th>
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

Zie hieronder voor details over het sturen van berichten naar verschillende objecttypen.',
  'The name of the build step.' => 'De naam van de buildstap.',
  'All Builds' => 'Alle builds',
  'No such object "%s" exists.' => 'Object "%s" bestaat niet.',
  'Object ("%s") claims "%s" is a GitHub repository URI, but the path ("%s") does not have enough components (expected at least two).' => 'Object ("%s") beweert dat "%s" een GitHub-repository-URI is, maar het pad ("%s") heeft niet genoeg componenten (minimaal twee verwacht).',
  'Create Buildable' => 'Buildable aanmaken',
  'To run a build manually, you normally must have permission to edit the related build plan. If you would prefer that anyone who can see the build plan be able to run and restart the build, you can change the behavior here.

Note that this controls access to all build management actions: "Run Plan Manually", "Restart", "Abort", "Pause", and "Resume".

WARNING: This may be unsafe, particularly if the build has side effects like deployment.

If you weaken this policy, an attacker with control of an account that has "Can View" permission but not "Can Edit" permission can manually run this build against any old version of the code, including versions with known security issues.

If running the build has a side effect like deploying code, they can force deployment of a vulnerable version and then escalate into an attack against the deployed service.' => 'Om een build handmatig uit te voeren, moet u normaal gesproken toestemming hebben om het gerelateerde buildplan te bewerken. Als u wilt dat iedereen die het buildplan kan zien de build kan uitvoeren en herstarten, kunt u het gedrag hier wijzigen.

Let op: dit regelt de toegang tot alle buildbeheerhandelingen: "Plan handmatig uitvoeren", "Herstarten", "Afbreken", "Pauzeren" en "Hervatten".

WAARSCHUWING: Dit kan onveilig zijn, vooral als de build bijwerkingen heeft zoals deployment.

Als u dit beleid verzwakt, kan een aanvaller met controle over een account dat "Kan bekijken"-rechten heeft maar geen "Kan bewerken"-rechten, deze build handmatig uitvoeren tegen elke oude versie van de code, inclusief versies met bekende beveiligingsproblemen.

Als het uitvoeren van de build een bijwerking heeft zoals het deployen van code, kunnen ze de deployment van een kwetsbare versie forceren en vervolgens escaleren naar een aanval op de gedeployde service.',
  'Build Log %d (%s - %s)' => 'Buildlog %d (%s - %s)',
  'Lease Working Copy' => 'Werkkopie leasen',
  'No Build Plan Permission' => 'Geen buildplanrechten',
  'No behavior with key "%s" exists. Valid keys are: %s.' => 'Er bestaat geen gedrag met sleutel "%s". Geldige sleutels zijn: %s.',
  'Nameless Test (%d)' => 'Naamloze test (%d)',
  'Really restart build?' => 'Build echt herstarten?',
  '%s renamed this build plan from "%s" to "%s".' => '%s heeft dit buildplan hernoemd van "%s" naar "%s".',
  'Completed After' => 'Voltooid na',
  '%s resumed this buildable.' => '%s heeft deze buildable hervat.',
  'Force logs to rebuild even if they appear to be in good shape already.' => 'Logs dwingen opnieuw op te bouwen, zelfs als ze al in goede staat lijken te zijn.',
  'You can not process build log chunks unless the log lock is held.' => 'U kunt buildlogfragmenten niet verwerken tenzij de logvergrendeling actief is.',
  'Unit Tests' => 'Unittests',
  'No buildables found.' => 'Geen buildables gevonden.',
  'Invalid build log PHID "%s".' => 'Onjuiste buildlog-PHID "%s".',
  'References a host lease from Drydock.' => 'Verwijst naar een hostlease van Drydock.',
  'Type a build status name...' => 'Voer een buildstatusnaam in...',
  'Short message name, like "Syntax Error".' => 'Korte berichtnaam, zoals "Syntax Error".',
  'Stores a reference to file data.' => 'Slaat een verwijzing naar bestandsgegevens op.',
  'Edit Step: %s' => 'Stap bewerken: %s',
  'Optional namespace for this test. This is organizational and is often a class or module name, like "ExampleTestCase".' => 'Optionele naamruimte voor deze test. Dit is organisatorisch en is vaak een klasse- of modulenaam, zoals "ExampleTestCase".',
  'Buildkite' => 'Buildkite',
  'Built for %s' => 'Gebouwd voor %s',
  'Create a build artifact.' => 'Een buildartefact aanmaken.',
  'Pause, abort, restart, and report results for builds.' => 'Builds pauzeren, afbreken, herstarten en resultaten rapporteren.',
  'Step Type' => 'Staptype',
  'You must openBuildLog() before you can closeBuildLog().' => 'U moet openBuildLog() aanroepen voordat u closeBuildLog() kunt aanroepen.',
  'Unknown Input' => 'Onbekende invoer',
  'HTTP Request' => 'HTTP-verzoek',
  'Skipped' => 'Overgeslagen',
  'Optional label for this URI.' => 'Optioneel label voor deze URI.',
  'Harbormaster' => 'Harbormaster',
  'Build Log' => 'Buildlog',
  'Control Commands' => 'Besturingsopdrachten',
  'If Viewable' => 'Indien zichtbaar',
  'Users must be able to see a build target to view its build log.' => 'Gebruikers moeten een builddoel kunnen zien om het buildlog te bekijken.',
  'Waiting for %s' => 'Wachten op %s',
  'Query Harbormaster buildables.' => 'Harbormaster-buildables opvragen.',
  'Create Build Plan' => 'Buildplan aanmaken',
  'Call omits required "type" parameter. Specify the type of message you want to send.' => 'Aanroep mist de vereiste parameter "type". Geef het type bericht op dat u wilt sturen.',
  '%s disabled this build plan.' => '%s heeft dit buildplan uitgeschakeld.',
  'Create Build' => 'Build aanmaken',
  'Reading log content from stdin...' => 'Loginhoud lezen van stdin...',
  'No messages for this build target.' => 'Geen berichten voor dit builddoel.',
  'View in CircleCI' => 'Bekijken in CircleCI',
  '%s aborted this buildable.' => '%s heeft deze buildable afgebroken.',
  'Hold Drafts' => 'Concepten vasthouden',
  'All Plans' => 'Alle plannen',
  'You can not resume this build because it is already aborting.' => 'U kunt deze build niet hervatten omdat deze al wordt afgebroken.',
  'Unable to Resume Build' => 'Kan build niet hervatten',
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
| `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target. |' => 'WAARSCHUWING: Deze buildstap is nieuw en experimenteel!

Om **versies** te bouwen met Buildkite moeten ze:

  - tot een gevolgde repository behoren;
  - de repository moet een Staging Area geconfigureerd hebben;
  - u moet een Buildkite-pipeline configureren voor die Staging Area; en
  - u moet de hieronder beschreven webhook configureren.

Om **commits** te bouwen met Buildkite moeten ze:

  - tot een gevolgde repository behoren;
  - u moet een Buildkite-pipeline configureren voor die repository; en
  - u moet de hieronder beschreven webhook configureren.

Webhookconfiguratie
=====================

Voeg in {nav Instellingen} voor uw organisatie in Buildkite, onder
{nav Notificatieservices}, een nieuwe **Webhooknotificatie** toe.

Gebruik deze instellingen:

  - **Webhook-url**: %s
  - **Token**: Het veld "Webhooktoken" hieronder en het veld "Token" in
    Buildkite moeten beide op dezelfde niet-lege waarde worden ingesteld (een willekeurig
    geheim). U kunt de waarde die Buildkite genereert kopiëren/plakken in
    dit formulier.
  - **Gebeurtenissen**: Alleen **build.finish** hoeft actief te zijn.

Omgeving
===========

Deze variabelen zijn beschikbaar in de buildomgeving:

| Variabele | Beschrijving |
|----------|-------------|
| `HARBORMASTER_BUILD_TARGET_PHID` | PHID van het builddoel. |',
  'Runnable' => 'Uitvoerbaar',
  'No active Herald rules trigger this build.' => 'Geen actieve Herald-regels activeren deze build.',
  'You can not specify both "--id" and "--all". Choose one or the other.' => 'U kunt niet zowel "--id" als "--all" opgeven. Kies een van beide.',
  'Revisions are not sent for review until the build completes, and are returned to the author for updates if the build fails.' => 'Versies worden pas ter beoordeling verzonden als de build is voltooid, en worden teruggestuurd naar de auteur voor updates als de build mislukt.',
  'Invalid build ID "%s".' => 'Onjuist build-ID "%s".',
  'This engine is used to edit Harbormaster builds.' => 'Deze engine wordt gebruikt om Harbormaster-builds te bewerken.',
  'Started Before' => 'Gestart voor',
  'The URI to store.' => 'De op te slaan URI.',
  'Type a build plan name...' => 'Voer een buildplannaam in...',
  'Test' => 'Test',
  'Harbormaster Build %s ("%s") for %s' => 'Harbormaster-build %s ("%s") voor %s',
  'Updating Build Targets' => 'Builddoelen bijwerken',
  'Delete Build Step' => 'Buildstap verwijderen',
  'Step %d.%d' => 'Stap %d.%d',
  'Log "%s" is still live. Logs can not be finalized until they have closed.' => 'Log "%s" is nog actief. Logs kunnen niet worden afgerond totdat ze zijn gesloten.',
  'Use this method to attach artifacts to build targets while running builds. Artifacts can be used to carry data through a complex build workflow, provide extra information to users, or store build results.' => 'Gebruik deze methode om artefacten aan builddoelen te koppelen tijdens het uitvoeren van builds. Artefacten kunnen worden gebruikt om gegevens door een complexe buildworkflow te transporteren, extra informatie aan gebruikers te verstrekken of buildresultaten op te slaan.',
  'This engine is used to edit Harbormaster build steps.' => 'Deze engine wordt gebruikt om Harbormaster-buildstappen te bewerken.',
  'Modify running builds, and report build results.' => 'Actieve builds wijzigen en buildresultaten rapporteren.',
  'OK: No Harbormaster target PHID.' => 'OK: geen Harbormaster-doel-PHID.',
  'Each artifact also needs an `artifactKey`, which names the artifact. Finally, you will provide some `artifactData` to fill in the content of the artifact. The data you provide depends on what type of artifact you are creating.' => 'Elk artefact heeft ook een `artifactKey` nodig, die het artefact benoemt. Ten slotte levert u `artifactData` om de inhoud van het artefact in te vullen. De gegevens die u levert zijn afhankelijk van het type artefact dat u aanmaakt.',
  'Local Name' => 'Lokale naam',
  'Long explanation of the lint message.' => 'Uitgebreide uitleg van het lintbericht.',
  'This step has an invalid implementation (%s).' => 'Deze stap heeft een onjuiste implementatie (%s).',
  'Build Target PHID' => 'Builddoel-PHID',
  'Build/CI' => 'Build/CI',
  'rXabcdef, PHID-DIFF-1234, ...' => 'rXabcdef, PHID-DIFF-1234, ...',
  'Applying plan %s to new buildable %s...' => 'Plan %s toepassen op nieuwe buildable %s...',
  'Bad Input Type' => 'Foutief invoertype',
  'True if this is a manual buildable.' => 'Waar als dit een handmatige buildable is.',
  'Upload %s from %s.' => '%s uploaden van %s.',
  'Search for targets completed on or after a particular date.' => 'Zoeken naar doelen die op of na een bepaalde datum zijn voltooid.',
  'Publish a buildable. This is primarily useful for developing and debugging applications which have buildable objects.' => 'Een buildable publiceren. Dit is voornamelijk nuttig voor het ontwikkelen en debuggen van applicaties die buildable-objecten hebben.',
  'Search for builds running against particular buildables.' => 'Zoeken naar builds die tegen bepaalde buildables worden uitgevoerd.',
  'Specify exactly one buildable object, by object name.' => 'Geef precies één buildable-object op, op objectnaam.',
  'Can Create Build Plans' => 'Kan buildplannen aanmaken',
  'You can not abort a build that uses an autoplan.' => 'U kunt een build die een autoplan gebruikt niet afbreken.',
  'You can not pause this build because it is already pausing.' => 'U kunt deze build niet pauzeren omdat deze al wordt gepauzeerd.',
  'Add Build Step' => 'Buildstap toevoegen',
  'No such build target "%s"!' => 'Builddoel "%s" bestaat niet!',
  'My Builds' => 'Mijn builds',
  'Write rate must be more than 0 bytes/sec.' => 'Schrijfsnelheid moet meer dan 0 bytes/sec zijn.',
  'Required Input' => 'Vereiste invoer',
  'The current UNIX timestamp.' => 'Het huidige UNIX-tijdstempel.',
  'Object "%s" is not a Harbormaster Buildable!' => 'Object "%s" is geen Harbormaster-buildable!',
  'Length of the log in bytes.' => 'Lengte van het log in bytes.',
  'Report that work on the target is ongoing. This message can be used to report partial results during a build.' => 'Rapporteren dat het werk aan het doel gaande is. Dit bericht kan worden gebruikt om tussentijdse resultaten te rapporteren tijdens een build.',
  'Really pause %s build(s)?' => 'Echt %s build(s) pauzeren?',
  'This group has no available build steps.' => 'Deze groep heeft geen beschikbare buildstappen.',
  'Stores a URI.

With `ui.external`, you can use this artifact type to add links to build results in an external build system.' => 'Slaat een URI op.

Met `ui.external` kunt u dit artefacttype gebruiken om koppelingen naar buildresultaten in een extern buildsysteem toe te voegen.',
  'CircleCI' => 'CircleCI',
  'Trigger a build in Buildkite.' => 'Een build in Buildkite activeren.',
  'Call omits required "receiver" parameter. Specify the PHID of the object you want to send a message to.' => 'Aanroep mist de vereiste parameter "receiver". Geef de PHID op van het object waarnaar u een bericht wilt sturen.',
  'When' => 'Wanneer',
  'Search for only manual or automatic buildables.' => 'Alleen zoeken naar handmatige of automatische buildables.',
  'New plan name.' => 'Nieuwe plannaam.',
  'You can only abort some builds. Work will halt immediately on builds you can abort. Progress will be discarded, and builds must be completely restarted if you want them to complete.' => 'U kunt alleen bepaalde builds afbreken. Het werk stopt onmiddellijk bij builds die u kunt afbreken. Voortgang wordt verworpen en builds moeten volledig opnieuw worden gestart als u wilt dat ze worden voltooid.',
  'Harbormaster Build Targets' => 'Harbormaster-builddoelen',
  'Sleep for a specified number of seconds.' => 'Een opgegeven aantal seconden wachten.',
  'The current status of this build.' => 'De huidige status van deze build.',
  'Reporting Lint Results' => 'Lintresultaten rapporteren',
  'Make an HTTP %s request to %s.' => 'Een HTTP %s-verzoek naar %s doen.',
  'Status "%s" is not a valid build plan status. Valid statuses are: %s.' => 'Status "%s" is geen geldige buildplanstatus. Geldige statussen zijn: %s.',
  'A file containing the log data.' => 'Een bestand met de loggegevens.',
  '<Invalid URI>' => '<Onjuiste URI>',
  'You can not issue this command because you do not have permission to access the build plan for this build.' => 'U kunt deze opdracht niet geven omdat u geen toestemming hebt om het buildplan voor deze build te benaderen.',
  'Artifact Name' => 'Artefactnaam',
  'Build Artifact %d' => 'Buildartefact %d',
  'Object "%s" is not a buildable!' => 'Object "%s" is geen buildable!',
  'Use %s to specify a build plan to run.' => 'Gebruik %s om een uit te voeren buildplan op te geven.',
  'Input Artifacts' => 'Invoerartefacten',
  'Revisions are sent for review regardless of the status of the build.' => 'Versies worden ter beoordeling verzonden ongeacht de status van de build.',
  'Unknown chunk encoding "%s"!' => 'Onbekende fragmentcodering "%s"!',
  'Object ("%s") claims "%s" is a GitHub repository URI, but the domain does not appear to be GitHub.' => 'Object ("%s") beweert dat "%s" een GitHub-repository-URI is, maar het domein lijkt niet van GitHub te zijn.',
  'Usually, builds may be restarted by users who have permission to edit the related build plan. (You can change who is allowed to restart a build by adjusting the "Runnable" behavior.)

Restarting a build may be useful if you suspect it has failed for environmental or circumstantial reasons unrelated to the actual code, and want to give it another chance at glory.

If you want to prevent a build from being restarted, you can change when it may be restarted by adjusting this behavior. This may be useful to prevent accidents where a build with a dangerous side effect (like deployment) is restarted improperly.' => 'Normaal gesproken kunnen builds opnieuw worden gestart door gebruikers die toestemming hebben om het gerelateerde buildplan te bewerken. (U kunt wijzigen wie een build mag herstarten door het gedrag "Uitvoerbaar" aan te passen.)

Het herstarten van een build kan nuttig zijn als u vermoedt dat het is mislukt door omgevings- of omstandigheidsredenen die niet gerelateerd zijn aan de daadwerkelijke code, en u het nog een kans wilt geven.

Als u wilt voorkomen dat een build opnieuw wordt gestart, kunt u wijzigen wanneer het mag worden herstart door dit gedrag aan te passen. Dit kan nuttig zijn om ongelukken te voorkomen waarbij een build met een gevaarlijke bijwerking (zoals deployment) onjuist wordt herstart.',
  'The name of this build plan.' => 'De naam van dit buildplan.',
  'Opened a new build log:' => 'Een nieuw buildlog geopend:',
  'Unable to determine how to clone the repository for this buildable: it is not associated with a tracked repository.' => 'Kan niet bepalen hoe de repository voor deze buildable moet worden gekloond: het is niet gekoppeld aan een gevolgde repository.',
  '"arc land" never warns that the build is still running or has failed.' => '"arc land" waarschuwt nooit dat de build nog actief is of is mislukt.',
  'This build can not be restarted because the build plan is configured to prevent the build from restarting unless it has failed, and it has not failed.' => 'Deze build kan niet opnieuw worden gestart omdat het buildplan is geconfigureerd om herstarten te voorkomen tenzij de build is mislukt, en deze is niet mislukt.',
  '"arc land" warns if the build has failed, but ignores the build if it is still running.' => '"arc land" waarschuwt als de build is mislukt, maar negeert de build als deze nog actief is.',
  'View URI for the buildable.' => 'Weergave-URI voor de buildable.',
  'This build can not be restarted because the build plan is configured to prevent the build from restarting.' => 'Deze build kan niet opnieuw worden gestart omdat het buildplan is geconfigureerd om herstarten te voorkomen.',
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
' => 'U kunt deze methode (`harbormaster.sendmessage`) gebruiken om besturingsopdrachten
naar Buildables en Builds te sturen.

Geef de Build of Buildable op die de besturingsopdracht moet ontvangen door de
PHID op te geven in de `receiver`-parameter.

Een besturingsopdracht naar een Buildable sturen heeft hetzelfde effect als het naar
elke Build voor de Buildable sturen. Bijvoorbeeld, een "Pause"-bericht naar een
Buildable sturen zal alle builds voor de Buildable pauzeren (of dit in ieder geval proberen).

Bij het sturen van besturingsopdrachten moeten de `unit`- en `lint`-parameters van deze API-
methode worden weggelaten. U kunt geen lint- of unitresultaten direct aan
een Build of Buildable rapporteren, en kunt ze niet samen met een besturingsopdracht rapporteren.

Breder gezegd kunt u geen buildresultaten direct aan een Build of
Buildable rapporteren. Rapporteer in plaats daarvan resultaten aan een builddoel.

Zie hieronder voor een lijst met besturingsopdrachten.
\\',
  'You must choose a name for your build plan.' => 'U moet een naam kiezen voor uw buildplan.',
  'Build Targets may receive build status and result messages, like "pass" or "fail".' => 'Builddoelen kunnen buildstatus- en resultaatberichten ontvangen, zoals "pass" of "fail".',
  'If you abort all builds, work will halt immediately. Work will be discarded, and builds must be completely restarted.' => 'Als u alle builds afbreekt, stopt het werk onmiddellijk. Werk wordt verworpen en builds moeten volledig opnieuw worden gestart.',
  'Reporting Unit Results' => 'Unitresultaten rapporteren',
  'Argument "%s" does not name a buildable. Provide one or more valid buildable monograms or PHIDs.' => 'Argument "%s" benoemt geen buildable. Geef een of meer geldige buildable-monogrammen of PHID\'s op.',
  'Edit Step' => 'Stap bewerken',
  'The ID of the current build.' => 'Het ID van de huidige build.',
  'Progress on running builds will be discarded.' => 'Voortgang van actieve builds wordt verworpen.',
  'Submit builds into the build queue normally instead of running them in the foreground.' => 'Builds normaal in de buildwachtrij plaatsen in plaats van ze op de voorgrond uit te voeren.',
  '%s resumed this build.' => '%s heeft deze build hervat.',
  'This input is required, but not configured.' => 'Deze invoer is vereist, maar niet geconfigureerd.',
  'Bad build target ID "%d".' => 'Foutief builddoel-ID "%d".',
  'Edit Build' => 'Build bewerken',
  'Restart %s build(s)?' => '%s build(s) herstarten?',
  'This build log is already open!' => 'Dit buildlog is al geopend!',
  'Show Only Automated Builds' => 'Alleen geautomatiseerde builds weergeven',
  'Format for the text provided in "details". Valid values are "text" (default) or "remarkup". This controls how test details are rendered when shown to users.' => 'Opmaak voor de tekst in "details". Geldige waarden zijn "text" (standaard) of "remarkup". Dit bepaalt hoe testdetails worden weergegeven aan gebruikers.',
  'Build Target ID' => 'Builddoel-ID',
  'Build will restart.' => 'Build wordt herstart.',
  'Unable to load the file for this log. The file may have been destroyed.' => 'Kan het bestand voor dit log niet laden. Het bestand is mogelijk vernietigd.',
  'Short test name, like "ExampleTest".' => 'Korte testnaam, zoals "ExampleTest".',
  'Active Plans' => 'Actieve plannen',
  'Restartable' => 'Herstartbaar',
  'Unit %d' => 'Unit %d',
  'Harbormaster build target "%s" is not a Buildkite build step. Only Buildkite steps may be updated via the Buildkite hook.' => 'Harbormaster-builddoel "%s" is geen Buildkite-buildstap. Alleen Buildkite-stappen kunnen via de Buildkite-hook worden bijgewerkt.',
  'Choose a build plan behavior for "%s".' => 'Kies een buildplangedrag voor "%s".',
  'New View (Prototype)' => 'Nieuwe weergave (prototype)',
  'After completing this build step Harbormaster can continue the build normally, or it can pause the build and wait for a message. If you are using this build step to trigger some work in an external system, you may want wait for that system to perform the work and report results back.

If you select **Continue Build Normally**, the build plan will proceed once this step finishes.

If you select **Wait For Message**, the build plan will pause indefinitely once this step finishes. To resume the build, an external system must call `harbormaster.sendmessage` with the build target PHID, and either `"pass"` or `"fail"` to indicate the result for this step. After the result is recorded, the build plan will resume.' => 'Na het voltooien van deze buildstap kan Harbormaster de build normaal voortzetten, of de build pauzeren en wachten op een bericht. Als u deze buildstap gebruikt om werk in een extern systeem te activeren, wilt u mogelijk wachten tot dat systeem het werk uitvoert en resultaten terugrapporteert.

Als u **Build normaal voortzetten** selecteert, gaat het buildplan verder zodra deze stap is voltooid.

Als u **Wachten op bericht** selecteert, pauzeert het buildplan voor onbepaalde tijd zodra deze stap is voltooid. Om de build te hervatten moet een extern systeem `harbormaster.sendmessage` aanroepen met de builddoel-PHID, en `"pass"` of `"fail"` om het resultaat voor deze stap aan te geven. Nadat het resultaat is vastgelegd, wordt het buildplan hervat.',
  'Disable this build plan? It will no longer be executed automatically.' => 'Dit buildplan uitschakelen? Het wordt niet meer automatisch uitgevoerd.',
  'Ship Some Freight' => 'Vracht verschepen',
  '"arc land" warns if the build is still running or has failed.' => '"arc land" waarschuwt als de build nog actief is of is mislukt.',
  'View Details' => 'Details bekijken',
  'Buildable' => 'Buildable',
  'Only users who can edit the plan can run it manually.' => 'Alleen gebruikers die het plan kunnen bewerken, kunnen het handmatig uitvoeren.',
  'Unable to find fetch!' => 'Fetch kan niet gevonden worden!',
  'arc lint + arc unit' => 'arc lint + arc unit',
  '%s restarted this buildable.' => '%s heeft deze buildable herstart.',
  'Really abort build?' => 'Build echt afbreken?',
  'The build step description.' => 'De beschrijving van de buildstap.',
  'Browse Build Plans' => 'Buildplannen bekijken',
  'The PHID of the user or Object that initiated the build, if applicable.' => 'De PHID van de gebruiker of het object dat de build heeft gestart, indien van toepassing.',
  'All Buildables' => 'Alle buildables',
  'Also Clone' => 'Ook klonen',
  'Query information about build artifacts.' => 'Informatie over buildartefacten opvragen.',
  'Unable to Send Command' => 'Kan opdracht niet verzenden',
  'No behavior option is marked as the default option (for behavior "%s"). Exactly one option must be marked as the default option.' => 'Geen gedragsoptie is gemarkeerd als de standaardoptie (voor gedrag "%s"). Precies één optie moet als standaardoptie gemarkeerd zijn.',
  'Select all active builds.' => 'Alle actieve builds selecteren.',
  'Preparing' => 'Voorbereiden',
  'Build Plans' => 'Buildplannen',
  'Edit Buildable: %s' => 'Buildable bewerken: %s',
  'Unable to load build target "%s".' => 'Kan builddoel "%s" niet laden.',
  'Retrieve information about Harbormaster build plans.' => 'Informatie over Harbormaster-buildplannen ophalen.',
  'File to create an artifact from.' => 'Bestand om een artefact van te maken.',
  'You can only resume some builds. Work will continue on builds you have permission to resume.' => 'U kunt slechts enkele builds hervatten. Het werk gaat verder met builds waarvoor u toestemming hebt om te hervatten.',
  'All Artifacts' => 'Alle artefacten',
  'Attempt to load log bytes (%d - %d) failed: the loaded range (%d - %d) does not span the requested range.' => 'Poging om logbytes (%d - %d) te laden is mislukt: het geladen bereik (%d - %d) omvat niet het gevraagde bereik.',
  'The current status of this buildable.' => 'De huidige status van deze buildable.',
  'Standalone Fragment' => 'Zelfstandig fragment',
  'Wait For Message' => 'Wachten op bericht',
  'Builds may receive control commands like "pause", "resume", "abort", and "restart".' => 'Builds kunnen besturingsopdrachten ontvangen zoals "pause", "resume", "abort" en "restart".',
  'Edit Build Plan' => 'Buildplan bewerken',
  'Select one or more builds by ID.' => 'Selecteer een of meer builds op ID.',
  'Unable to find lines.' => 'Kan regels niet vinden.',
  '%s empty logs are hidden.' => '%s lege logs zijn verborgen.',
  'Delete Step' => 'Stap verwijderen',
  'No builds found.' => 'Geen builds gevonden.',
  'OK: Processed event.' => 'OK: gebeurtenis verwerkt.',
  'Status for the build target.' => 'Status voor het builddoel.',
  'CircleCI did not return a "%s"!' => 'CircleCI heeft geen "%s" geretourneerd!',
  'Message Type' => 'Berichttype',
  'Artifact Type' => 'Artefacttype',
  'Object "%s" is not a HarbormasterBuildable (it is a "%s"). Name one or more buildables to publish, like "B123".' => 'Object "%s" is geen HarbormasterBuildable (het is een "%s"). Geef een of meer buildables op om te publiceren, zoals "B123".',
  'Load or create build autotargets.' => 'Bouw-autodoelen laden of aanmaken.',
  'Apply transactions to create a new build plan or edit an existing one.' => 'Transacties toepassen om een nieuw buildplan aan te maken of een bestaand plan te bewerken.',
  'Apply transactions to create a new build or edit an existing one.' => 'Transacties toepassen om een nieuwe build aan te maken of een bestaande te bewerken.',
  'Warn When Landing' => 'Waarschuwen bij landing',
  'Attempting to access unknown buildable status property ("%s").' => 'Poging om onbekende buildable-statuseigenschap ("%s") te benaderen.',
  'The current status of this build plan.' => 'De huidige status van dit buildplan.',
  'Unknown Status ("%s")' => 'Onbekende status ("%s")',
  'You can not restart this build because you do not have permission to access the build plan.' => 'U kunt deze build niet herstarten omdat u geen toestemming hebt om het buildplan te benaderen.',
  'Edit Build Plan: %s' => 'Buildplan bewerken: %s',
  'View in Buildkite' => 'Weergeven in Buildkite',
  'Multiple behavior options (for behavior "%s") have the same key ("%s"). Each option must have a unique key.' => 'Meerdere gedragsopties (voor gedrag "%s") hebben dezelfde sleutel ("%s"). Elke optie moet een unieke sleutel hebben.',
  'No implementation is specified!' => 'Er is geen implementatie opgegeven!',
  '(This is an explicit exception.)' => '(Dit is een expliciete uitzondering.)',
  'Abort Build' => 'Build afbreken',
  'Artifacts' => 'Artefacten',
  'Invalid Implementation ("%s")!' => 'Onjuiste implementatie ("%s")!',
  'Apply transactions to create a new buildable or edit an existing one.' => 'Transacties toepassen om een nieuwe buildable aan te maken of een bestaande te bewerken.',
  'View Full Test Results (%s)' => 'Volledige testresultaten weergeven (%s)',
  '<Unknown Artifact Type>' => '<Onbekend artefacttype>',
  'Multiple behavior options (for behavior "%s") are marked as default options ("%s" and "%s"). Exactly one option must be marked as the default option.' => 'Meerdere gedragsopties (voor gedrag "%s") zijn gemarkeerd als standaardopties ("%s" en "%s"). Precies één optie moet als standaardoptie gemarkeerd zijn.',
  'Behavior configuration for the build plan.' => 'Gedragsconfiguratie voor het buildplan.',
  'You can not pause this build because it is already paused.' => 'U kunt deze build niet pauzeren omdat deze al gepauzeerd is.',
  'Byte position on the line where the text which triggered the message starts. The first byte on the line is byte 1, not byte 0. This position is byte-based (not character-based) because not all lintable files have a valid character encoding.' => 'Bytepositie op de regel waar de tekst begint die het bericht heeft veroorzaakt. De eerste byte op de regel is byte 1, niet byte 0. Deze positie is gebaseerd op bytes (niet op tekens) omdat niet alle lintbare bestanden een geldige tekencodering hebben.',
  'Unable to inflate log chunk!' => 'Kan logfragment niet uitpakken!',
  'Search for artifacts attached to particular build targets.' => 'Zoeken naar artefacten die aan bepaalde builddoelen zijn gekoppeld.',
  'Testing Utilities' => 'Testhulpmiddelen',
  'Search for builds with given statuses.' => 'Zoeken naar builds met opgegeven statussen.',
  'Restart Harbormaster builds.' => 'Harbormaster-builds herstarten.',
  'Value "%s" is not a valid option for behavior "%s". Valid options are: %s.' => 'Waarde "%s" is geen geldige optie voor gedrag "%s". Geldige opties zijn: %s.',
  'Automatic `arc lint` step.' => 'Automatische `arc lint`-stap.',
  'PHID of the object containing this buildable.' => 'PHID van het object dat deze buildable bevat.',
  'Call includes "unit" parameter. This parameter must be omitted when the receiver is not a Build Target.' => 'Aanroep bevat de parameter "unit". Deze parameter moet worden weggelaten als de ontvanger geen builddoel is.',
  'Variables' => 'Variabelen',
  'The buildable does not wait for the build.' => 'De buildable wacht niet op de build.',
  'Unknown Unit Message ("%s")' => 'Onbekend eenheidsbericht ("%s")',
  '%s: %s -> %s' => '%s: %s -> %s',
  'Search for builds of particular objects.' => 'Zoeken naar builds van bepaalde objecten.',
  'Show More Below' => 'Meer hieronder weergeven',
  'Search for targets created on or after a particular date.' => 'Zoeken naar doelen die op of na een bepaalde datum zijn aangemaakt.',
  'Build Target ID to attach the log to.' => 'Builddoel-ID om het log aan te koppelen.',
  'Restart Builds' => 'Builds herstarten',
  'Additional human-readable information about the failure.' => 'Aanvullende leesbare informatie over de fout.',
  'Trigger a build in CircleCI.' => 'Een build starten in CircleCI.',
  'Aborted' => 'Afgebroken',
  'Create Build Step' => 'Buildstap aanmaken',
  'Plan Behaviors' => 'Plangedragingen',
  'If true, display this URI in the UI as an link to additional build details in an external build system.' => 'Indien waar, deze URI in de interface weergeven als een koppeling naar aanvullende builddetails in een extern buildsysteem.',
  'Write a new Harbormaster build log. This is primarily intended to make development and testing easier.' => 'Een nieuw Harbormaster-buildlog schrijven. Dit is voornamelijk bedoeld om ontwikkeling en testen te vergemakkelijken.',
  'Update only this build.' => 'Alleen deze build bijwerken.',
  'Pause Builds' => 'Builds pauzeren',
  'Search for targets created on or before a particular date.' => 'Zoeken naar doelen die op of voor een bepaalde datum zijn aangemaakt.',
  'Run build plans' => 'Buildplannen uitvoeren',
  'Use one of "--id" or "--active" to select builds, but not both.' => 'Gebruik "--id" of "--active" om builds te selecteren, maar niet beide.',
  'Resume Builds' => 'Builds hervatten',
  'RESTARTING' => 'HERSTARTEN',
  'This build step has since been deleted on the build plan.  Some information may be omitted.' => 'Deze buildstap is inmiddels verwijderd uit het buildplan. Sommige informatie kan ontbreken.',
  'There is no implementation available for artifacts of type "%s".' => 'Er is geen implementatie beschikbaar voor artefacten van het type "%s".',
  'Build Step' => 'Buildstap',
  '**publish** __buildable__ ...' => '**publish** __buildable__ ...',
  'Syntax Error' => 'Syntaxisfout',
  'This dependency specifies a build step which doesn\'t exist.' => 'Deze afhankelijkheid verwijst naar een buildstap die niet bestaat.',
  'All builds will restart.' => 'Alle builds worden herstart.',
  'Valid Input' => 'Geldige invoer',
  'This input is bound to an artifact ("%s") which does not exist at this stage in the build process.' => 'Deze invoer is gebonden aan een artefact ("%s") dat in deze fase van het buildproces niet bestaat.',
  'Unknown log chunk encoding ("%s")!' => 'Onbekende logfragmentcodering ("%s")!',
  'No builds to restart.' => 'Geen builds om te herstarten.',
  'Build target ("%s") has the wrong type of build step. Only CircleCI build steps may be updated via the CircleCI webhook.' => 'Builddoel ("%s") heeft het verkeerde type buildstap. Alleen CircleCI-buildstappen kunnen via de CircleCI-webhook worden bijgewerkt.',
  'Completed at %s' => 'Voltooid op %s',
  'Build' => 'Build',
  'Make HTTP Request' => 'HTTP-verzoek doen',
  'Really pause build?' => 'Build echt pauzeren?',
  'If updating generates tasks, queue them for the daemons instead of executing them in this process.' => 'Als bijwerken taken genereert, deze in de wachtrij plaatsen voor de daemons in plaats van ze in dit proces uit te voeren.',
  'This build plan does not have any build steps yet, so it will not do anything when run.' => 'Dit buildplan heeft nog geen buildstappen, dus het doet niets wanneer het wordt uitgevoerd.',
  'Type another build step name...' => 'Voer een andere buildstapnaam in...',
  'Buildable %d' => 'Buildable %d',
  'Really restart %s build(s)?' => 'Echt %s build(s) herstarten?',
  '"arc land" warns if the build is still running, but ignores the build if it has failed.' => '"arc land" waarschuwt als de build nog actief is, maar negeert de build als deze is mislukt.',
  'Recent Builds' => 'Recente builds',
  'Rename the plan.' => 'Het plan hernoemen.',
  'Edit Harbormaster Build Step Configurations' => 'Harbormaster-buildstapconfiguraties bewerken',
  'Users must be able to see a build target to see its artifacts.' => 'Gebruikers moeten een builddoel kunnen zien om de artefacten te bekijken.',
  'Build Failed' => 'Build mislukt',
  'The buildable waits for the build, and fails if the build fails.' => 'De buildable wacht op de build en mislukt als de build mislukt.',
  'References a working copy lease from Drydock.' => 'Verwijst naar een werkkopie-lease van Drydock.',
  'PHID of the build plan being run.' => 'PHID van het buildplan dat wordt uitgevoerd.',
  'Build Log %d' => 'Bouwlogboek %d',
  'Queued at %s' => 'In wachtrij geplaatst op %s',
  'Pipeline Name' => 'Pipelinenaam',
  'You must have edit permission on this build plan to run it manually.' => 'U moet bewerkingsrechten hebben op dit buildplan om het handmatig uit te voeren.',
  'Data Hash' => 'Gegevenshash',
  'Automatic Buildable' => 'Automatische buildable',
  'Lines' => 'Regels',
  'Updating Builds' => 'Builds bijwerken',
  'The specified buildable does not have a build with ID "%s".' => 'De opgegeven buildable heeft geen build met ID "%s".',
  'If Building' => 'Indien aan het bouwen',
  'Find out information about builds.' => 'Informatie over builds opzoeken.',
  'Edit Build Step' => 'Buildstap bewerken',
  'Edit Harbormaster Build Plan Configurations' => 'Harbormaster-buildplanconfiguraties bewerken',
  'Buildkite request to target "%s" had the wrong authentication token. The Buildkite pipeline and Harbormaster build step must be configured with the same token.' => 'Buildkite-verzoek naar doel "%s" had het verkeerde authenticatietoken. De Buildkite-pipeline en Harbormaster-buildstap moeten met hetzelfde token worden geconfigureerd.',
  'Throw Exception' => 'Uitzondering genereren',
  'Harbormaster Query Builds' => 'Harbormaster-builds opvragen',
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
' => 'Als u externe builds uitvoert, kunt u deze methode gebruiken om buildresultaten
terug te publiceren naar Harbormaster nadat het externe systeem het werk heeft voltooid (of terwijl het
voortgang maakt).

Om de buildstatus of resultaten te rapporteren, moet u een bericht sturen naar het juiste
builddoel. Deze tabel geeft een overzicht van welke objecttypen buildstatus-
en resultaatberichten kunnen ontvangen:

<table>
  <tr>
    <th>Objecttype</th>
    <th>PHID-voorbeeld</th>
    <th />
    <th>Beschrijving</th>
  </tr>
  <tr>
    <td>Harbormaster Buildable</td>
    <td>`PHID-HMBB-...`</td>
    <td>{icon times color=red}</td>
    <td>Buildables kunnen **GEEN** status- of resultaatberichten ontvangen.</td>
  </tr>
  <tr>
    <td>Harbormaster Build</td>
    <td>`PHID-HMBD-...`</td>
    <td>{icon times color=red}</td>
    <td>Builds kunnen **GEEN** status- of resultaatberichten ontvangen.</td>
  </tr>
  <tr>
    <td>Harbormaster Build Target</td>
    <td>`PHID-HMBT-...`</td>
    <td>{icon check color=green}</td>
    <td>Rapporteer buildstatus en resultaten aan builddoelen.</td>
  </tr>
</table>

De eenvoudigste manier om deze methode te gebruiken om buildresultaten te rapporteren is om het eenmaal
aan te roepen nadat de build is voltooid met een `pass`- of `fail`-bericht. Dit registreert het
buildresultaat en gaat verder met de volgende stap in de build als de build wachtte
op een resultaat.

Wanneer u een statusbericht over een builddoel stuurt, kunt u optioneel
gedetailleerde `lint`- of `unit`-resultaten meesturen. Zie hieronder voor details.

Als u tussentijdse resultaten wilt rapporteren maar een build nog niet is voltooid,
kunt u het `work`-bericht gebruiken. Dit bericht heeft geen directe effecten,
maar stelt u in staat aanvullende gegevens te sturen om de voortgang van het build-
doel bij te werken. Het doel blijft wachten op een voltooiingsbericht, maar de interface
wordt bijgewerkt om de gemaakte voortgang weer te geven.

Wanneer u een bericht naar een builddoel stuurt om de status of resultaten van
een build te rapporteren, moet uw bericht een `type` bevatten dat de algehele status
van de build beschrijft. Gebruik bijvoorbeeld `pass` om Harbormaster te vertellen dat een builddoel
met succes is voltooid.

Ondersteunde berichttypen zijn:

%s
\\',
  'Can Not Restart Autobuild' => 'Kan autobuild niet herstarten',
  'The object PHID of the Harbormaster Buildable being built.' => 'De object-PHID van de Harbormaster-buildable die wordt gebouwd.',
  'HTTP Method' => 'HTTP-methode',
  'Restart the build, discarding all progress.' => 'De build herstarten en alle voortgang verwerpen.',
  'Epoch timestamp for target start, if the target has started.' => 'Epoch-tijdstempel voor start van het doel, als het doel is gestart.',
  'Affects Buildable' => 'Beïnvloedt buildable',
  'Build a working copy in Drydock.' => 'Een werkkopie bouwen in Drydock.',
  'Harbormaster Build Plans' => 'Harbormaster-buildplannen',
  'If you pause this build, work will halt once the current steps complete. You can resume the build later.' => 'Als u deze build pauzeert, stopt het werk zodra de huidige stappen zijn voltooid. U kunt de build later hervatten.',
  'Harbormaster User Guide' => 'Harbormaster-gebruikershandleiding',
  'Object ("%s") does not implement interface "%s". Only objects which implement this interface can be built with CircleCI.' => 'Object ("%s") implementeert interface "%s" niet. Alleen objecten die deze interface implementeren kunnen met CircleCI worden gebouwd.',
  'If Editable' => 'Indien bewerkbaar',
  'Build Target %d' => 'Builddoel %d',
  'Completed Before' => 'Voltooid voor',
  'Download Log' => 'Logboek downloaden',
  'Make an HTTP request.' => 'Een HTTP-verzoek doen.',
  'Drydock Host' => 'Drydock-host',
  'Consumed' => 'Verbruikt',
  'When users create revisions in Differential, the default behavior is to hold them in the "Draft" state until all builds pass. Once builds pass, the revisions promote and are sent for review, which notifies reviewers.

The general intent of this workflow is to make sure reviewers are only spending time on review once changes survive automated tests. If a change does not pass tests, it usually is not really ready for review.

If you want to promote revisions out of "Draft" before builds pass, or promote revisions even when builds fail, you can change the promotion behavior. This may be useful if you have very long-running builds, or some builds which are not very important.

Users may always use "Request Review" to promote a "Draft" revision, even if builds have failed or are still in progress.' => 'Wanneer gebruikers versies aanmaken in Differential, is het standaardgedrag om ze in de status "Concept" te houden totdat alle builds slagen. Zodra builds slagen, worden de versies gepromoveerd en ter beoordeling verzonden, wat reviewers op de hoogte stelt.

De algemene bedoeling van deze workflow is ervoor te zorgen dat reviewers alleen tijd besteden aan beoordeling zodra wijzigingen de geautomatiseerde tests overleven. Als een wijziging de tests niet doorstaat, is deze meestal niet echt klaar voor beoordeling.

Als u versies uit "Concept" wilt promoveren voordat builds slagen, of versies wilt promoveren zelfs wanneer builds mislukken, kunt u het promotiegedrag wijzigen. Dit kan nuttig zijn als u zeer langlopende builds hebt, of sommige builds die niet erg belangrijk zijn.

Gebruikers kunnen altijd "Beoordeling aanvragen" gebruiken om een "Concept"-versie te promoveren, zelfs als builds zijn mislukt of nog bezig zijn.',
  'Browse Build Initiators' => 'Buildinitiators doorbladeren',
  'Run Plan Manually' => 'Plan handmatig uitvoeren',
  'The PHID of the build plan this build step belongs to.' => 'De PHID van het buildplan waartoe deze buildstap behoort.',
  'Unexpected Error' => 'Onverwachte fout',
  'Add Step' => 'Stap toevoegen',
  'When run against a revision, this build step will abort any older copies of
the same build plan which are currently running against older diffs.

There are some nuances to the behavior:

  - if this build step is triggered manually, it won\'t abort anything;
  - this build step won\'t abort manual builds;
  - this build step won\'t abort anything if the diff it is building isn\'t
    the active diff when it runs.

Build results on outdated diffs often aren\'t very important, so this may
reduce build queue load without any substantial cost.' => 'Wanneer deze buildstap wordt uitgevoerd tegen een versie, breekt het alle oudere kopieën
van hetzelfde buildplan af die momenteel worden uitgevoerd tegen oudere diffs.

Er zijn enkele nuances in het gedrag:

  - als deze buildstap handmatig wordt geactiveerd, breekt het niets af;
  - deze buildstap breekt geen handmatige builds af;
  - deze buildstap breekt niets af als de diff die het bouwt niet
    de actieve diff is wanneer het wordt uitgevoerd.

Buildresultaten op verouderde diffs zijn vaak niet erg belangrijk, dus dit kan
de belasting van de buildwachtrij verminderen zonder noemenswaardige kosten.',
  'The object PHID of the container (usually a revision or repository) for the object being built.' => 'De object-PHID van de container (meestal een versie of repository) voor het object dat wordt gebouwd.',
  'Only Restartable if Failed' => 'Alleen herstartbaar bij mislukking',
  'Processing Harbormaster build log #%d...' => 'Harbormaster-buildlog #%d verwerken...',
  'Targets' => 'Doelen',
  'No such implementation "%s" exists!' => 'Implementatie "%s" bestaat niet!',
  'You can not send this command to any of the current builds for this buildable.' => 'U kunt deze opdracht niet naar een van de huidige builds voor deze buildable sturen.',
  'Build Step %d: %s' => 'Buildstap %d: %s',
  'Started %s build(s): %s.' => '%s build(s) gestart: %s.',
  'Message type "%s" is not supported.' => 'Berichttype "%s" wordt niet ondersteund.',
  '%s paused this buildable.' => '%s heeft deze buildable gepauzeerd.',
  'Create an artifact of this type by passing `%s` as the `artifactType`. When creating an artifact of this type, provide these parameters as a dictionary to `artifactData`:' => 'Maak een artefact van dit type aan door `%s` als `artifactType` door te geven. Geef bij het aanmaken van een artefact van dit type deze parameters als dictionary door aan `artifactData`:',
  'Choose an archival mode with --mode.' => 'Kies een archiveringsmodus met --mode.',
  'Build with CircleCI' => 'Bouwen met CircleCI',
  'You can only pause some builds. Once the current steps complete, work will halt on builds you can pause. You can resume the builds later.' => 'U kunt alleen bepaalde builds pauzeren. Zodra de huidige stappen zijn voltooid, stopt het werk bij builds die u kunt pauzeren. U kunt de builds later hervatten.',
  'Can Not Run Plan' => 'Kan plan niet uitvoeren',
  'Users must be able to see a build to view its build targets.' => 'Gebruikers moeten een build kunnen zien om de builddoelen te bekijken.',
  'Build Variables' => 'Buildvariabelen',
  'The PHID of the current build target.' => 'De PHID van het huidige builddoel.',
  'Write completed. Closing log...' => 'Schrijven voltooid. Log sluiten...',
  'No recent builds.' => 'Geen recente builds.',
  'This engine is used to edit Harbormaster buildables.' => 'Deze engine wordt gebruikt om Harbormaster-buildables te bewerken.',
  'You are viewing an older run of this build. %s' => 'U bekijkt een oudere uitvoering van deze build. %s',
  'You must choose a revision or commit to build.' => 'U moet een versie of commit kiezen om te bouwen.',
  'No build step provides autotarget "%s"!' => 'Geen buildstap levert autodoelen "%s"!',
  'Stored Chunks' => 'Opgeslagen fragmenten',
  'Restart Build' => 'Build herstarten',
  'No details provided.' => 'Geen details opgegeven.',
  'Other Build Steps' => 'Overige buildstappen',
  '%s Unsound Test(s)' => '%s ondeugdelijke test(s)',
  'You can not resume this build because it is not paused. You can only resume a paused build.' => 'U kunt deze build niet hervatten omdat deze niet is gepauzeerd. U kunt alleen een gepauzeerde build hervatten.',
  'Log data hashes differ! Something is tragically wrong!' => 'Loggegevenshashes verschillen! Er is iets ernstig mis!',
  'Build will abort.' => 'Build wordt afgebroken.',
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
' => 'Net als unittestresultaten kunt u lintresultaten rapporteren bij het bijwerken van de status
van een builddoel. De `lint`-parameter moet resultaten bevatten als een lijst van
dictionaries met deze sleutels:

%s

De `severity`-parameter herkent deze ernstniveaus:

%s

Dit is een eenvoudige, geldige waarde voor de `lint`-parameter. Het rapporteert één fout
en één waarschuwing:

```lang=json
%s
```
\\',
  'Step' => 'Stap',
  'All Steps' => 'Alle stappen',
  'Run command %s on %s.' => 'Opdracht %s uitvoeren op %s.',
  'Show Only Manual Builds' => 'Alleen handmatige builds weergeven',
  'No line map.' => 'Geen regeloverzicht.',
  'Report that the target is complete, and the target has failed.' => 'Rapporteren dat het doel is voltooid en het doel is mislukt.',
  'When building a revision, abort copies of this build plan which are currently running against older diffs.' => 'Bij het bouwen van een versie, oudere kopieën van dit buildplan afbreken die momenteel worden uitgevoerd tegen oudere diffs.',
  'Are you sure you want to delete this step? This can\'t be undone!' => 'Weet u zeker dat u deze stap wilt verwijderen? Dit kan niet ongedaan worden gemaakt!',
  'Build messages have the same policies as their receivers.' => 'Buildberichten hebben hetzelfde beleid als hun ontvangers.',
  'This build plan can not be run manually.' => 'Dit buildplan kan niet handmatig worden uitgevoerd.',
  'Report that the target is complete, and the target has passed.' => 'Rapporteren dat het doel is voltooid en het doel is geslaagd.',
  'This build plan has conflicts in one or more build steps. Examine the step list and resolve the listed errors.' => 'Dit buildplan heeft conflicten in een of meer buildstappen. Bekijk de stappenlijst en los de vermelde fouten op.',
  'Containers' => 'Containers',
  'The number of seconds to sleep for.' => 'Het aantal seconden om te wachten.',
  'This input is bound to the wrong artifact type. It is bound to a "%s" artifact, but should be bound to a "%s" artifact.' => 'Deze invoer is gebonden aan het verkeerde artefacttype. Het is gebonden aan een "%s"-artefact, maar zou gebonden moeten zijn aan een "%s"-artefact.',
  'Stop Following Log' => 'Logboek niet meer volgen',
  'Flow Control' => 'Stroombesturing',
  'Manual Buildable' => 'Handmatige buildable',
  'Run a build in Buildkite.' => 'Een build uitvoeren in Buildkite.',
  'Built instantly' => 'Direct gebouwd',
  'Save Build Step' => 'Buildstap opslaan',
  'Enter the name of a revision or commit.' => 'Voer de naam van een versie of commit in.',
  'Option' => 'Optie',
  'Arcanist Lint Results' => 'Arcanist-lintresultaten',
  'Edit Harbormaster Buildable Configurations' => 'Harbormaster-buildableconfiguraties bewerken',
  'You can not pause this build because it is already restarting.' => 'U kunt deze build niet pauzeren omdat deze al opnieuw wordt gestart.',
  'Continue Build Normally' => 'Build normaal voortzetten',
  'Drydock working copy lease to create an artifact from.' => 'Drydock-werkkopie-lease om een artefact van te maken.',
  'Autoplan' => 'Autoplan',
  'Unable to load repository with PHID "%s".' => 'Kan repository met PHID "%s" niet laden.',
  'Test engine running the test, like "JavascriptTestEngine". This primarily prevents collisions between tests with the same name in different test suites (for example, a Javascript test and a Python test).' => 'Testengine die de test uitvoert, zoals "JavascriptTestEngine". Dit voorkomt voornamelijk botsingen tussen tests met dezelfde naam in verschillende testengines.',
  'Container' => 'Container',
  'Choose a build log to rebuild with "--id", or rebuild all logs with "--all".' => 'Kies een buildlog om opnieuw op te bouwen met "--id", of bouw alle logs opnieuw op met "--all".',
  'Depends On' => 'Afhankelijk van',
  'Build will resume.' => 'Build wordt hervat.',
  'Run build plans: %s.' => 'Buildplannen uitvoeren: %s.',
  'Declining to make service call because `phabricator.silent` is enabled in configuration.' => 'Serviceaanroep wordt niet gedaan omdat `phabricator.silent` is ingeschakeld in de configuratie.',
  'Build Logs' => 'Buildlogs',
  'The buildable waits for the build, but does not fail if the build fails.' => 'De buildable wacht op de build, maar mislukt niet als de build mislukt.',
  'The person (or thing) that started this build.' => 'De persoon (of het ding) dat deze build heeft gestart.',
  'View Build' => 'Build bekijken',
  'Really abort %s build(s)?' => 'Echt %s build(s) afbreken?',
  '(%d - %d)' => '(%d - %d)',
  'Object "%s" does not implement interface "%s". Autotargets may only be queried for buildable objects.' => 'Object "%s" implementeert interface "%s" niet. Autodoelen kunnen alleen worden opgevraagd voor buildbare objecten.',
  '%s enabled this build plan.' => '%s heeft dit buildplan ingeschakeld.',
  'Stored Bytes' => 'Opgeslagen bytes',
  'Work will continue on the build. Really resume?' => 'Het werk aan de build wordt voortgezet. Echt hervatten?',
  'Log to rebuild.' => 'Log om opnieuw op te bouwen.',
  'Run By Herald Rules' => 'Uitgevoerd door Herald-regels',
  'When a user attempts to `arc land` a revision and that revision has ongoing or failed builds, the default behavior of `arc` is to warn them about those builds and give them a chance to reconsider: they may want to wait for ongoing builds to complete, or fix failed builds before landing the change.

If you do not want to warn users about this build, you can change the warning behavior. This may be useful if the build takes a long time to run (so you do not expect users to wait for it) or the outcome is not important.

This warning is only advisory. Users may always elect to ignore this warning and continue, even if builds have failed.

This setting also affects the warning that is published to revisions when commits land with ongoing or failed builds.' => 'Wanneer een gebruiker probeert een versie te landen met `arc land` en die versie lopende of mislukte builds heeft, is het standaardgedrag van `arc` om te waarschuwen over die builds en de gebruiker de kans te geven om te heroverwegen: ze willen mogelijk wachten tot lopende builds zijn voltooid, of mislukte builds repareren voordat ze de wijziging landen.

Als u gebruikers niet wilt waarschuwen over deze build, kunt u het waarschuwingsgedrag wijzigen. Dit kan nuttig zijn als de build lang duurt (zodat u niet verwacht dat gebruikers erop wachten) of het resultaat niet belangrijk is.

Deze waarschuwing is slechts informatief. Gebruikers kunnen altijd kiezen om deze waarschuwing te negeren en door te gaan, zelfs als builds zijn mislukt.

Deze instelling beïnvloedt ook de waarschuwing die wordt gepubliceerd bij versies wanneer commits landen met lopende of mislukte builds.',
  'Edit Behavior: %s' => 'Gedrag bewerken: %s',
  'Result of the test.' => 'Resultaat van de test.',
  'Use "--id" or "--active" to select builds.' => 'Gebruik "--id" of "--active" om builds te selecteren.',
  'Unable to load build log "%s".' => 'Kan buildlog "%s" niet laden.',
  'Upload a file.' => 'Een bestand uploaden.',
  'Build Plan Prevents Restart' => 'Buildplan voorkomt herstarten',
  'Unable to load API token ("%s")!' => 'Kan API-token ("%s") niet laden!',
  'Find out information about build logs.' => 'Informatie over buildlogs opzoeken.',
  '%s Passed Test(s)' => '%s geslaagde test(s)',
  'Sending Messages' => 'Berichten sturen',
  'ERROR:' => 'FOUT:',
  'Builtins' => 'Ingebouwde functies',
  'Build %d' => 'Build %d',
  'Harbormaster build target "%s" does not exist.' => 'Harbormaster-builddoel "%s" bestaat niet.',
  'If you pause all builds, work will halt once the current steps complete. You can resume the builds later.' => 'Als u alle builds pauzeert, stopt het werk zodra de huidige stappen zijn voltooid. U kunt de builds later hervatten.',
  'Call specifies both "receiver" and "buildTargetPHID". When using the modern "receiver" parameter, omit the deprecated "buildTargetPHID" parameter.' => 'Aanroep specificeert zowel "receiver" als "buildTargetPHID". Laat bij gebruik van de moderne "receiver"-parameter de verouderde "buildTargetPHID"-parameter weg.',
  'Host Artifact' => 'Hostartefact',
  'No Unit Tests' => 'Geen unittests',
  'All Targets' => 'Alle doelen',
  'Throw an exception.' => 'Een uitzondering genereren.',
  'Query Harbormaster builds.' => 'Harbormaster-builds opvragen.',
  'View All Builds' => 'Alle builds bekijken',
  'If Failed' => 'Indien mislukt',
  'Builds for this buildable:' => 'Builds voor deze buildable:',
  'The artifact type.' => 'Het artefacttype.',
  'Search for logs that belong to a particular build target.' => 'Zoeken naar logs die bij een bepaald builddoel horen.',
  'Type the name of a user, application or Herald rule...' => 'Voer de naam in van een gebruiker, applicatie of Herald-regel...',
  'This build plan does not have any build steps yet.' => 'Dit buildplan heeft nog geen buildstappen.',
  'Build Targets' => 'Builddoelen',
  'Really resume build?' => 'Build echt hervatten?',
  'Build generation this target belongs to. When builds restart, a new generation with new targets is created.' => 'Buildgeneratie waartoe dit doel behoort. Wanneer builds opnieuw worden gestart, wordt een nieuwe generatie met nieuwe doelen aangemaakt.',
  'External Link' => 'Externe koppeling',
  'You can not pause this build because it has already completed.' => 'U kunt deze build niet pauzeren omdat deze al is voltooid.',
  'Unknown build step field "%s"!' => 'Onbekend buildstapveld "%s"!',
  'URI "%s" does not have an allowable protocol. Configure protocols in `%s`. Allowed protocols are: %s.' => 'URI "%s" heeft geen toegestaan protocol. Configureer protocollen in `%s`. Toegestane protocollen zijn: %s.',
  'Wait for Previous Commits to Build' => 'Wachten tot eerdere commits zijn gebouwd',
  'Disable Plan' => 'Plan uitschakelen',
  'Enable this build plan?' => 'Dit buildplan inschakelen?',
  'Drydock Working Copy' => 'Drydock-werkkopie',
  'This buildable has no builds, so you can not issue any commands.' => 'Deze buildable heeft geen builds, dus u kunt geen opdrachten geven.',
  'Show More (%s Bytes)' => 'Meer weergeven (%s bytes)',
  'The overall state of a buildable (like a commit or revision) is normally the aggregation of the individual states of all builds that have run against it.

Buildables are "building" until all builds pass (which changes them to "pass"), or any build fails (which changes them to "fail").

You can change this behavior if you do not want to wait for this build, or do not care if it fails.' => 'De algehele status van een buildable (zoals een commit of versie) is normaal gesproken de aggregatie van de individuele statussen van alle builds.',
  'The build may be restarted if it has failed.' => 'De build mag opnieuw worden gestart als deze is mislukt.',
  'A build inherits policies from its buildable.' => 'Een build neemt beleid over van de bijbehorende buildable.',
  'You can not abort this build because it is already aborting.' => 'U kunt deze build niet afbreken omdat deze al wordt afgebroken.',
  'Arcanist Unit Results' => 'Arcanist-unitresultaten',
  'This build is already restarting. You can not reissue a restart command to a restarting build.' => 'Deze build wordt al herstart. U kunt geen herstartopdracht geven aan een build die al wordt herstart.',
  'The following variables can be used in most fields. To reference a variable, use `%s` in a field.' => 'De volgende variabelen kunnen in de meeste velden worden gebruikt. Gebruik `%s` in een veld om naar een variabele te verwijzen.',
  'This engine is used to edit Harbormaster build plans.' => 'Deze engine wordt gebruikt om Harbormaster-buildplannen te bewerken.',
  'This function definition is not a haiku.' => 'Deze functiedefinitie is geen haiku.',
  'You can not resume this build because it is already resuming.' => 'U kunt deze build niet hervatten omdat deze al wordt hervat.',
  '(null)' => '(null)',
  'Progress on this build will be discarded and the build will restart. Side effects of the build will occur again. Really restart build?' => 'De voortgang van deze build wordt verworpen en de build wordt herstart. Bijwerkingen van de build treden opnieuw op. Build echt herstarten?',
  'Search for builds by buildable status.' => 'Zoeken naar builds op buildable-status.',
  'Abort Builds' => 'Builds afbreken',
  'Upload From Host' => 'Uploaden van host',
  'The build step the target runs.' => 'De buildstap die het doel uitvoert.',
);
  }

}
