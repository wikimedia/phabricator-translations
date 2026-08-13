<?php

final class PhabricatorConfigNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
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
    never arrive.' => 'Wanneer een gebruiker een handeling uitvoert die een e-mailmelding genereert (zoals het plaatsen van een opmerking op een Differential-versie), kan het "Van"-adres worden ingesteld
op het e-mailadres van de gebruiker (zoals "alincoln@example.com") of het "metamta.default-address"-adres.

De gebruikerservaring is over het algemeen beter als het echte adres van de gebruiker wordt gebruikt als de "Van"-headerwaarde, omdat de berichten gemakkelijker te organiseren zijn wanneer ze
verschijnen in e-mailclients, maar dit werkt alleen als de server geautoriseerd is om e-mail te verzenden namens het "Van"-domein. In de praktijk betekent dit:

  - Als u een installatie doet voor Voorbeeld BV en alle gebruikers
    zakelijke @corp.example.com-adressen hebben en alle hosts waarop deze software draait
    geautoriseerd zijn om e-mail te verzenden vanaf corp.example.com, kunt u dit inschakelen
    om de gebruikerservaring iets te verbeteren.
  - Als u een installatie doet voor een opensourceproject en uw gebruikers zich
    registreren via diensten van derden en/of persoonlijke e-mailadressen
    gebruiken, moet u dit waarschijnlijk niet inschakelen of al uw uitgaande
    e-mail verdwijnt mogelijk in SPF-zwarte gaten.
  - Als uw installatie iets anders is, is het veiliger om dit uit te laten, in ieder geval
    in het begin, aangezien het risico van het inschakelen is dat uw uitgaande e-mail
    nooit aankomt.',
  'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.

This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.

This set is also used to enforce valid redirect URIs. This service will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.

Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some features which rely on links or redirects may not work.' => 'Wanneer gebruikers opmerkingen schrijven die URI\'s bevatten, worden deze automatisch omgezet in klikbare koppeling als het URI-protocol in deze set voorkomt.

Deze set toegestane protocollen is voornamelijk bedoeld om beveiligingsproblemen met "javascript:" en andere potentieel gevaarlijke URI-handlers te voorkomen.

Deze set wordt ook gebruikt om geldige omleidings-URI\'s af te dwingen. Deze dienst weigert een HTTP "Location"-omleiding uit te geven naar een URI met een protocol dat niet in deze set staat.

Normaal gesproken moeten "http" en "https" in deze set aanwezig zijn. Als u een of beide protocollen verwijdert, werken sommige functies die afhankelijk zijn van koppelingen of omleidingen mogelijk niet.',
  'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.

You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.

For more information on locked and hidden configuration, including details about this setup issue, see %s.

This database value is currently respected, but a future version of the software will stop respecting database values for locked configuration options.' => 'De configuratiewaarde "%s" is vergrendeld (en kan dus niet worden bewerkt via de webinterface), maar heeft een databasewaarde. Meestal betekent dit dat deze eerder niet vergrendeld was, u deze via de webinterface hebt ingesteld, en deze later vergrendeld is geworden.

U moet deze configuratiewaarde kopiëren naar een lokale configuratiebron (meestal met %s) en deze vervolgens uit de database verwijderen met de onderstaande opdracht.

Voor meer informatie over vergrendelde en verborgen configuratie, inclusief details over dit configuratieprobleem, zie %s.

Deze databasewaarde wordt momenteel gerespecteerd, maar een toekomstige versie van de software zal databasewaarden voor vergrendelde configuratieopties niet meer respecteren.',
  'Review and modify configuration settings.' => 'Configuratie-instellingen bekijken en wijzigen.',
  'Improve security by configuring an alternate file domain.' => 'Verbeter de beveiliging door een alternatief bestandsdomein te configureren.',
  'Client Server' => 'Clientserver',
  'Or:' => 'Of:',
  'Listeners receive callbacks when interesting things occur.' => 'Luisteraars ontvangen callbacks wanneer er interessante dingen gebeuren.',
  'Update configuration in the database instead of in local configuration.' => 'Configuratie bijwerken in de database in plaats van in lokale configuratie.',
  'Column/Key' => 'Kolom/Sleutel',
  'Customize the logo and wordmark text in the header.' => 'Het logo en de woordmerktekst in de koptekst aanpassen.',
  'Configuring File Storage' => 'Bestandsopslag configureren',
  '%s / %s' => '%s / %s',
  'Address ranges of cluster hosts.' => 'Adresbereiken van clusterhosts.',
  'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to this software, or that you are making a raw request without a "Host" header using a tool or library.

If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.

It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.

Requests must include a valid "Host" header.' => 'Dit verzoek bevatte geen "Host"-header. Dit kan betekenen dat uw webserver (zoals nginx of apache) verkeerd is geconfigureerd zodat de "Host"-header deze software niet bereikt, of dat u een onbewerkt verzoek doet zonder "Host"-header met een hulpmiddel of bibliotheek.

Als u een webbrowser gebruikt, controleer dan uw webserverconfiguratie. Als u een hulpmiddel of bibliotheek gebruikt, controleer dan hoe het verzoek wordt opgebouwd.

Het is ook mogelijk (maar zeer onwaarschijnlijk) dat een ander netwerkapparaat (zoals een load balancer) de header verwijdert.

Verzoeken moeten een geldige "Host"-header bevatten.',
  'Memory Usage' => 'Geheugengebruik',
  'The request body that was sent began:' => 'De verzonden verzoekinhoud begon met:',
  'Impersonating users over the API is no longer supported.' => 'Het imiteren van gebruikers via de API wordt niet meer ondersteund.',
  'Table' => 'Tabel',
  'The best available MYSQL implementation is now selected automatically.' => 'De best beschikbare MYSQL-implementatie wordt nu automatisch geselecteerd.',
  'Ignore Setup Issue' => 'Configuratieprobleem negeren',
  'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.

You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => 'Met deze optie kunt u DarkConsole op elke pagina inschakelen, zelfs voor afgemelde gebruikers. Dit is alleen echt nuttig als u iets moet debuggen op een pagina voor afgemelde gebruikers. U moet deze optie niet inschakelen in productie.

U moet DarkConsole inschakelen door \'%s\' in te stellen voordat deze optie effect heeft.',
  'Alternative URIs that can access this service.' => 'Alternatieve URI\'s die toegang hebben tot deze dienst.',
  'Repository %s has unreplicated changes (for %s).' => 'Repository %s heeft niet-gerepliceerde wijzigingen (voor %s).',
  'The controller or workflow which handled the request.' => 'De controller of workflow die het verzoek heeft verwerkt.',
  'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".' => 'Optie "%s" is van het type "%s", maar de waarde op index "%s" van de lijst is niet "true".',
  'Applications application' => 'Toepassingen',
  'This server is not configured in cluster mode.' => 'Deze server is niet geconfigureerd in clustermodus.',
  '%s created this configuration entry.' => '%s heeft deze configuratie-invoer aangemaakt.',
  'You have enabled pygments and the %s script is available, but does not seem to work.' => 'U hebt pygments ingeschakeld en het %s-script is beschikbaar, maar lijkt niet te werken.',
  'This column is missing a type specification.' => 'Deze kolom mist een typespecificatie.',
  'The current configuration has these %d value(s):' => array(
    'De huidige configuratie heeft deze waarde:',
    'De huidige configuratie heeft deze waarden:',
  ),
  'Column Has No Specification' => 'Kolom heeft geen specificatie',
  'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.

Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).

This software is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.

Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.

You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":

%s
Note that if you run other applications against the same database, they may not work in strict mode.

If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. This software will work correctly with this mode enabled or disabled.' => 'Op databasehost "%s" bevat de globale "sql_mode"-instelling niet de modus "STRICT_ALL_TABLES". Het inschakelen van deze modus wordt aanbevolen om in het algemeen te verbeteren hoe MySQL bepaalde fouten afhandelt.

Zonder deze modus ingeschakeld zal MySQL sommige foutcondities stilzwijgend negeren, inclusief invoegingen die proberen meer gegevens in een kolom op te slaan dan er daadwerkelijk in past. Dit gedrag is meestal ongewenst en kan leiden tot gegevenscorruptie (door multibyte-tekens in het midden af te kappen), gegevensverlies (door de gegevens die niet in de kolom passen te verwerpen), of beveiligingsproblemen (bijvoorbeeld door sleutels of aanmeldgegevens af te kappen).

Deze software is ontwikkeld en getest in de modus "STRICT_ALL_TABLES", dus u zou normaal gesproken nooit deze situaties moeten tegenkomen, maar u kunt ze tegenkomen als u rechtstreeks met de database werkt, code van derden uitvoert, uitbreidingen ontwikkelt, of gewoon een bug in de software tegenkomt.

Het inschakelen van "STRICT_ALL_TABLES" zorgt ervoor dat MySQL een expliciete fout genereert als een van deze ongebruikelijke situaties zich voordoet. Dit is veiliger gedrag en voorkomt dat deze situaties later geheime, subtiele en mogelijk ernstige problemen veroorzaken.

U kunt meer informatie over deze modus (en hoe u deze configureert) vinden in de MySQL-handleiding. Meestal is het voldoende om dit toe te voegen aan uw "my.cnf"-bestand (in de sectie "[mysqld]") en vervolgens "mysqld" opnieuw te starten:

%s
Merk op dat als u andere toepassingen op dezelfde database draait, deze mogelijk niet werken in strikte modus.

Als u "STRICT_ALL_TABLES" niet kunt of wilt inschakelen, kunt u deze waarschuwing veilig negeren. Deze software werkt correct met deze modus in- of uitgeschakeld.',
  'Delete configuration in the database instead of in local configuration.' => 'Configuratie verwijderen uit de database in plaats van uit lokale configuratie.',
  'No Email Preferences Link' => 'Geen koppeling naar e-mailvoorkeuren',
  'Marked activity "%s" as completed.' => 'Activiteit "%s" als voltooid gemarkeerd.',
  'The way VCS activity is attributed %s user accounts has changed.' => 'De manier waarop VCS-activiteit wordt toegeschreven aan %s gebruikersaccounts is gewijzigd.',
  'Mail.app on OS X Lion won\'t respect threading headers unless the subject is
prefixed with "Re:". If you enable this option, this software will add "Re:" to
the subject line of all mail which is expected to thread. If you\'ve set
\'metamta.one-mail-per-recipient\', users can override this setting in their
preferences.' => 'Mail.app op OS X Lion respecteert geen threading-headers tenzij het onderwerp
wordt voorafgegaan door "Re:". Als u deze optie inschakelt, voegt deze software "Re:" toe aan
de onderwerpregel van alle e-mail die verwacht wordt te threaden. Als u
\'metamta.one-mail-per-recipient\' hebt ingesteld, kunnen gebruikers deze instelling overschrijven in hun
voorkeuren.',
  'Repository %s has unreplicated changes.' => 'Repository %s heeft niet-gerepliceerde wijzigingen.',
  'You have \'%s\' enabled in your PHP configuration.

This option is not compatible with this software. Remove \'%s\' from your configuration to continue.' => 'U hebt \'%s\' ingeschakeld in uw PHP-configuratie.

Deze optie is niet compatibel met deze software. Verwijder \'%s\' uit uw configuratie om door te gaan.',
  'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %d.' => 'Het binaire bestand \'%s\' op dit systeem vertoont onverwacht gedrag: het werd verwacht af te sluiten zonder foutcode bij het doorgeven van identieke bestanden, maar sloot af met code %d.',
  'No active repositories have outstanding errors.' => 'Er zijn geen actieve repository\'s met openstaande fouten.',
  'Array containing list of disabled applications.' => 'Array met lijst van uitgeschakelde toepassingen.',
  'Usage' => 'Gebruik',
  'Rebuild Repository Identities' => 'Repository-identiteiten opnieuw opbouwen',
  'Move port information from `%s` to `%s` in your config.' => 'Verplaats poortinformatie van `%s` naar `%s` in uw configuratie.',
  'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.' => 'Deze optie kan niet worden bewerkt via de webinterface. Gebruik %s om het beleid van de garbage collector aan te passen.',
  'Better Table Engine Available' => 'Betere tabelengine beschikbaar',
  'Set a local configuration value.' => 'Een lokale configuratiewaarde instellen.',
  'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.' => 'Opslag voor grote bestanden is niet geconfigureerd, wat de maximale grootte van bestandsuploads beperkt. Zie %s voor instructies over het configureren van uploads en opslag.',
  'This option controls whether users can edit account email addresses and profile real names.

If you set things up to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => 'Deze optie bepaalt of gebruikers e-mailadressen van accounts en echte namen in profielen kunnen bewerken.

Als u dingen hebt ingesteld om accountinformatie automatisch te synchroniseren vanuit een ander gezaghebbend systeem, kunt u voorkomen dat gebruikers deze bewerkingen uitvoeren om ervoor te zorgen dat informatie consistent blijft in beide systemen.',
  '%s deleted %s (again?).' => '%s heeft %s verwijderd (opnieuw?).',
  'Access log format.' => 'Toegangslogformaat.',
  'Use Pygments to highlight code?' => 'Pygments gebruiken om code te markeren?',
  'Access log location.' => 'Locatie van het toegangslog.',
  'Your webserver is not handling GET parameters properly.' => 'Uw webserver verwerkt GET-parameters niet correct.',
  'Repository Errors' => 'Repositoryfouten',
  'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.' => 'Optie "%s" is van het type "%s", maar de geconfigureerde waarde is niet de naam van een bekende klasse. Geldige selecties zijn: %s.',
  'The keyring stores master encryption keys. For help with configuring a keyring
and encryption, see **[[ %s | Configuring Encryption ]]**.' => 'De sleutelring slaat hoofdversleutelingssleutels op. Voor hulp bij het configureren van een sleutelring
en versleuteling, zie **[[ %s | Versleuteling configureren ]]**.',
  'Short' => 'Kort',
  'Large File Storage Not Configured' => 'Opslag voor grote bestanden niet geconfigureerd',
  'When email is sent, what format should the software use for users\' email
addresses? Valid values are:

 - `short`: \'gwashington <gwashington@example.com>\'
 - `real`:  \'George Washington <gwashington@example.com>\'
 - `full`: \'gwashington (George Washington) <gwashington@example.com>\'

The default is `full`.' => 'Welk formaat moet de software gebruiken voor e-mailadressen van gebruikers
bij het verzenden van e-mail? Geldige waarden zijn:

 - `short`: \'gwashington <gwashington@example.com>\'
 - `real`:  \'George Washington <gwashington@example.com>\'
 - `full`: \'gwashington (George Washington) <gwashington@example.com>\'

De standaard is `full`.',
  'The minimum supported version of Mercurial is 2.4, which was released in 2012.' => 'De minimaal ondersteunde versie van Mercurial is 2.4, die in 2012 is uitgebracht.',
  'Use "bin/phd debug ..." to get a detailed daemon execution log.' => 'Gebruik "bin/phd debug ..." om een gedetailleerd daemon-uitvoeringslog te krijgen.',
  'Migrating file-based config to more modern config...' => 'Bestandsgebaseerde configuratie migreren naar modernere configuratie...',
  'Full' => 'Volledig',
  'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => 'Voer het opslagupgradescript uit om databases in te stellen (host "%s" is niet geïnitialiseerd).',
  'You haven\'t configured mailers yet, so this server won\'t be able to send outbound mail or receive inbound mail. See the configuration setting "cluster.mailers" for details.' => 'U hebt nog geen mailers geconfigureerd, dus deze server kan geen uitgaande e-mail verzenden of inkomende e-mail ontvangen. Zie de configuratie-instelling "cluster.mailers" voor details.',
  'Unrecognized verb: %s' => 'Niet-herkend werkwoord: %s',
  'WARNING: This is a prototype option and the description below is currently pure
fantasy.

This option allows you to make this service aware of database read replicas so
it can monitor database health, spread load, and degrade gracefully to
read-only mode in the event of a failure on the primary host. For help with
configuring cluster databases, see **[[ %s | %s ]]** in the documentation.' => 'WAARSCHUWING: Dit is een prototype-optie en de onderstaande beschrijving is momenteel pure
fantasie.

Met deze optie kunt u deze dienst bewust maken van database-leesreplica\'s zodat
het de databasegezondheid kan bewaken, de belasting kan spreiden en geleidelijk kan degraderen naar
alleen-lezenmodus in het geval van een storing op de primaire host. Voor hulp bij
het configureren van clusterdatabases, zie **[[ %s | %s ]]** in de documentatie.',
  'Schemata Issues' => 'Schemaproblemen',
  'Expected Collation' => 'Verwachte sortering',
  'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.' => 'Optie "%s" is van het type "%s", maar de waarde is geen lijst: het is een map met onnatuurlijke of verspreide sleutels.',
  'Use Normal HTTP Redirects' => 'Normale HTTP-omleidingen gebruiken',
  'Configuration key \'%s\' is not set in %s configuration!' => 'Configuratiesleutel \'%s\' is niet ingesteld in %s-configuratie!',
  'Multi-Factor Optional' => 'Meerfactorauthenticatie optioneel',
  'The \'%s\' extension is not installed. Without \'%s\', this server may not be able to determine the MIME types of uploaded files.' => 'De uitbreiding \'%s\' is niet geïnstalleerd. Zonder \'%s\' kan deze server mogelijk de MIME-typen van geüploade bestanden niet bepalen.',
  'The configuration option \'%s\' has been removed. You may delete it at your convenience.

%s' => 'De configuratieoptie \'%s\' is verwijderd. U kunt deze op elk gewenst moment verwijderen.

%s',
  'Disable Pagespeed' => 'Pagespeed uitschakelen',
  'Elasticsearch index exists but needs correction.' => 'Elasticsearch-index bestaat maar moet worden gecorrigeerd.',
  'Nullable' => 'Nullable',
  'No "Host" Header' => 'Geen "Host"-header',
  'Activity "%s" did not need to be marked as complete.' => 'Activiteit "%s" hoefde niet als voltooid te worden gemarkeerd.',
  'SSH error log location.' => 'Locatie van het SSH-foutenlog.',
  'The translation implementation has changed and providers are no longer used or supported.' => 'De vertaalimplementatie is gewijzigd en providers worden niet meer gebruikt of ondersteund.',
  'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'Optie "%s" is van het type "%s", maar de waarde die u hebt opgegeven is geen geldige JSON-lijst. Wanneer u een lijstoptie instelt vanaf de opdrachtregel, geef de waarde op in JSON. Mogelijk moet u de waarde aanhalingstekens geven voor uw shell (bijvoorbeeld: \'["a", "b", ...]\').',
  'Format for the SSH access log. Use %s to set the path. Available variables are:' => 'Formaat voor het SSH-toegangslog. Gebruik %s om het pad in te stellen. Beschikbare variabelen zijn:',
  'This table can use a better table engine.' => 'Deze tabel kan een betere tabelengine gebruiken.',
  'PHP post_max_size Not Configured' => 'PHP post_max_size niet geconfigureerd',
  'Can Not Connect to MySQL' => 'Kan geen verbinding maken met MySQL',
  'Option "%s" is of type "%s", but the configured value is not a boolean.' => 'Optie "%s" is van het type "%s", maar de geconfigureerde waarde is geen boolean.',
  'Disable developer mode' => 'Ontwikkelaarsmodus uitschakelen',
  'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. This software will not work properly until you do.' => 'Identificeer het onderdeel in uw webserverconfiguratie dat verzoeken decomprimeert of verminkt en schakel het uit. Deze software werkt niet correct totdat u dit doet.',
  'Profile 0.1%% of all requests' => '0,1%% van alle verzoeken profileren',
  'This option has been replaced with the more granular option `%s`.' => 'Deze optie is vervangen door de meer gedetailleerde optie `%s`.',
  'Require all users to configure multi-factor authentication.' => 'Alle gebruikers verplichten om meerfactorauthenticatie te configureren.',
  'Stop this software from sending any email, etc.' => 'Voorkomen dat deze software e-mail verzendt, enz.',
  'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'Het binaire bestand \'%s\' kon niet worden gevonden. Maak een symlink naar \'%s\', of stel de omgevingsvariabele %s van de webserver in om de map op te nemen waar het zich bevindt, of voeg die map toe aan \'%s\' in de configuratie.',
  'Configuration Guide: Locked and Hidden Configuration' => 'Configuratiegids: Vergrendelde en verborgen configuratie',
  'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.' => 'Deze optie schakelt uitgebreide foutrapportage in (stacktraces, foutmeldingen) en dwingt het lezen van statische bestanden van schijf bij elke herlaadbeurt.',
  'Wrote configuration key "%s" to local storage (in file "%s").' => 'Configuratiesleutel "%s" geschreven naar lokale opslag (in bestand "%s").',
  'These alternative URIs will be able to access \'normal\' pages on this install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'Deze alternatieve URI\'s hebben toegang tot \'normale\' pagina\'s op deze installatie. Andere functies zoals OAuth werken niet. Het belangrijkste gebruiksscenario hiervoor is het verplaatsen van installaties tussen domeinen.',
  '(%s%s) %s' => '(%s%s) %s',
  'Nonreplicating Replica' => 'Niet-replicerende replica',
  'Run these %d command(s):' => array(
    'Voer deze opdracht uit:',
    'Voer deze opdrachten uit:',
  ),
  'Pattern' => 'Patroon',
  'Unknown \'%s\' Version' => 'Onbekende \'%s\'-versie',
  'Require administrators to unlock the authentication provider configuration from the CLI before it can be edited.' => 'Beheerders verplichten om de configuratie van de authenticatieprovider te ontgrendelen via de CLI voordat deze kan worden bewerkt.',
  'Define one or more mail transmission services. For help with configuring
mailers, see **[[ %s | %s ]]** in the documentation.' => 'Definieer een of meer e-mailverzenddienst. Voor hulp bij het configureren van
mailers, zie **[[ %s | %s ]]** in de documentatie.',
  'Feed Hooks Deprecated' => 'Feed-hooks verouderd',
  'Purge Caches' => 'Caches wissen',
  'Configure services to run on a cluster of hosts.' => 'Diensten configureren om op een cluster van hosts te draaien.',
  'Adjust %s in your PHP configuration to at least 32MB. When set to smaller value, large file uploads may not work properly.' => 'Pas %s in uw PHP-configuratie aan naar ten minste 32MB. Bij een kleinere waarde werken uploads van grote bestanden mogelijk niet correct.',
  'Show Recipient Hints' => 'Ontvangerhints weergeven',
  'Recaptcha private key, obtained by signing up for Recaptcha.' => 'Recaptcha-privésleutel, verkregen door u aan te melden voor Recaptcha.',
  'MySQL InnoDB Engine Not Available' => 'MySQL InnoDB-engine niet beschikbaar',
  'Database host "%s" does not support the %s option. You will not be able to find search results for common words. You can gain access to this option by upgrading MySQL to a more recent version.

You can ignore this warning if you plan to configure Elasticsearch later, or aren\'t concerned about searching for common words.' => 'Databasehost "%s" ondersteunt de optie %s niet. U kunt geen zoekresultaten vinden voor veelvoorkomende woorden. U kunt toegang krijgen tot deze optie door MySQL te upgraden naar een recentere versie.

U kunt deze waarschuwing negeren als u van plan bent Elasticsearch later te configureren, of als u zich geen zorgen maakt over het zoeken naar veelvoorkomende woorden.',
  'Proto' => 'Proto',
  'HTTP Strict Transport Security (HSTS) sends a header which instructs browsers that the site should only be accessed over HTTPS, never HTTP. This defuses an attack where an adversary gains access to your network, then proxies requests through an unsecured link.

Do not enable this option if you serve (or plan to ever serve) unsecured content over plain HTTP. It is very difficult to undo this change once users\' browsers have accepted the setting.' => 'HTTP Strict Transport Security (HSTS) stuurt een header die browsers instrueert dat de site alleen via HTTPS mag worden benaderd, nooit via HTTP. Dit neutraliseert een aanval waarbij een tegenstander toegang krijgt tot uw netwerk en vervolgens verzoeken doorstuurt via een onbeveiligde verbinding.

Schakel deze optie niet in als u onbeveiligde inhoud aanbiedt (of van plan bent aan te bieden) via gewoon HTTP. Het is zeer moeilijk om deze wijziging ongedaan te maken zodra de browsers van gebruikers de instelling hebben geaccepteerd.',
  '(No Value Configured)' => '(Geen waarde geconfigureerd)',
  'Allow editing' => 'Bewerken toestaan',
  'Configure full-text search services.' => 'Volledige-tekstzoekdiensten configureren.',
  'The HTTP method.' => 'De HTTP-methode.',
  'The webserver\'s host name.' => 'De hostnaam van de webserver.',
  'PHP Timezone Invalid' => 'PHP-tijdzone incorrect',
  'The environmental variable %s is empty. This server needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in configuration.' => 'De omgevingsvariabele %s is leeg. Deze server moet enkele systeemopdrachten uitvoeren, zoals `%s`, `%s`, `%s` en `%s`. Om deze opdrachten uit te voeren, moeten de binaire bestanden beschikbaar zijn in de %s van de webserver. U kunt extra paden instellen in de configuratie.',
  'Branchpoint' => 'Branchpunt',
  'Integration with Recaptcha' => 'Integratie met Recaptcha',
  'Global cap for size of generated emails (bytes).' => 'Globale limiet voor de grootte van gegenereerde e-mails (bytes).',
  'Access Logs' => 'Toegangslogs',
  'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.' => 'Op deze server is een bekende slechte versie van "%s" geïnstalleerd ("%s"). Deze versie wordt niet ondersteund, of bevat belangrijke bugs of beveiligingskwetsbaarheden die in een nieuwere versie zijn opgelost.',
  'URI where this software is installed.' => 'URI waar deze software is geïnstalleerd.',
  'Character Set' => 'Tekenset',
  'Formats' => 'Formaten',
  'Ambiguous Leader' => 'Dubbelzinnige leider',
  'Config key "%s" is locked and can only be set in local configuration. To learn more, see "%s" in the documentation.' => 'Configuratiesleutel "%s" is vergrendeld en kan alleen worden ingesteld in lokale configuratie. Zie "%s" in de documentatie voor meer informatie.',
  'This option can help debug pages which are taking a very long time (more than 30 seconds) to render.

If a page is slow to render (but taking less than 30 seconds), the best tools to use to figure out why it is slow are usually the DarkConsole service call profiler and XHProf.

However, if a request takes a very long time to return, some components (like Apache, nginx, or PHP itself) may abort the request before it finishes. This can prevent you from using profiling tools to understand page performance in detail.

In these cases, you can use this option to force the page to abort after a smaller number of seconds (for example, 10), and dump a useful stack trace. This can provide useful information about why a page is hanging.

To use this option, set it to a small number (like 10), and reload a hanging page. The page should exit after 10 seconds and give you a stack trace.

You should turn this option off (set it to 0) when you are done with it. Leaving it on creates a small amount of overhead for all requests, even if they do not hit the time limit.' => 'Deze optie kan helpen bij het debuggen van pagina\'s die zeer lang duren (meer dan 30 seconden) om te renderen.

Als een pagina langzaam rendert (maar minder dan 30 seconden duurt), zijn de beste hulpmiddelen om uit te zoeken waarom het langzaam is meestal de DarkConsole-dienstaanroepprofiler en XHProf.

Als een verzoek echter zeer lang duurt om terug te keren, kunnen sommige componenten (zoals Apache, nginx of PHP zelf) het verzoek afbreken voordat het is voltooid. Dit kan voorkomen dat u profileringshulpmiddelen gebruikt om paginaprestaties in detail te begrijpen.

In deze gevallen kunt u deze optie gebruiken om de pagina te dwingen af te breken na een kleiner aantal seconden (bijvoorbeeld 10), en een nuttige stacktrace te dumpen. Dit kan nuttige informatie geven over waarom een pagina vastloopt.

Om deze optie te gebruiken, stelt u deze in op een klein getal (zoals 10) en herlaadt u een vastgelopen pagina. De pagina zou na 10 seconden moeten afsluiten en u een stacktrace geven.

U moet deze optie uitschakelen (op 0 zetten) wanneer u er klaar mee bent. Het ingeschakeld laten creëert een kleine hoeveelheid overhead voor alle verzoeken, zelfs als ze de tijdslimiet niet bereiken.',
  'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.' => 'Deze optie is hernoemd naar `%s` om de onvoltooide aard van veel prototype-toepassingen te benadrukken. Uw bestaande instelling is gemigreerd.',
  'Clients' => 'Clients',
  'Expected Columns' => 'Verwachte kolommen',
  'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.' => 'Taskmasters gebruiken nu een automatisch schalende pool. U kunt de poolgrootte configureren met `%s`.',
  'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.' => 'Deze configuratie is vergrendeld en kan niet worden bewerkt via de webinterface. Gebruik %s in %s om deze te bewerken.',
  'Multiple %s subclasses contain an option named \'%s\'!' => 'Meerdere %s-subklassen bevatten een optie met de naam \'%s\'!',
  'Pygments should be installed and enabled to provide advanced syntax highlighting.' => 'Pygments moet worden geïnstalleerd en ingeschakeld om geavanceerde syntaxismarkering te bieden.',
  'If true, allow MetaMTA to change mail subjects to put text like \'[Accepted]\' and
\'[Commented]\' in them. This makes subjects more useful, but might break
threading on some clients. If you\'ve set \'%s\', users can override this setting
in their preferences.' => 'Indien waar, MetaMTA toestaan om e-mailonderwerpen te wijzigen om tekst zoals \'[Accepted]\' en
\'[Commented]\' erin te plaatsen. Dit maakt onderwerpen nuttiger, maar kan
threading op sommige clients verstoren. Als u \'%s\' hebt ingesteld, kunnen gebruikers deze instelling
overschrijven in hun voorkeuren.',
  'Recaptcha public key, obtained by signing up for Recaptcha.' => 'Openbare Recaptcha-sleutel, verkregen door u aan te melden voor Recaptcha.',
  'Database Servers' => 'Databaseservers',
  'Specify a configuration key to delete.' => 'Geef een configuratiesleutel op om te verwijderen.',
  'Search Servers' => 'Zoekservers',
  'This web host ("%s") is set to a very different time than a database host "%s".' => 'Deze webhost ("%s") is ingesteld op een zeer andere tijd dan databasehost "%s".',
  'Send Mail To Each Recipient' => 'E-mail naar elke ontvanger afzonderlijk verzenden',
  'The MySQL "local_infile" option is enabled. This option is unsafe.' => 'De MySQL-optie "local_infile" is ingeschakeld. Deze optie is onveilig.',
  'Either the schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => 'Het schema voor Elasticsearch is gewijzigd of Elasticsearch heeft de index automatisch aangemaakt. Gebruik de volgende opdracht om de index opnieuw op te bouwen.',
  'Remove Custom Logo' => 'Aangepast logo verwijderen',
  'No notification servers are configured.' => 'Er zijn geen meldingsservers geconfigureerd.',
  '(Not Supported)' => '(Niet ondersteund)',
  'Nonstandard port' => 'Niet-standaard poort',
  'Don\'t embed Commons videos' => 'Commons-video\'s niet insluiten',
  'This configuration has been removed. You can safely delete it.

%s' => 'Deze configuratie is verwijderd. U kunt deze veilig verwijderen.

%s',
  'Options relating to translations.' => 'Opties met betrekking tot vertalingen.',
  'Configure the UI, including colors.' => 'De gebruikersinterface configureren, inclusief kleuren.',
  'The \'%s\' extension has support for only some image types. This server will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => 'De uitbreiding \'%s\' ondersteunt slechts enkele afbeeldingstypen. Deze server kan afbeeldingen van de ontbrekende typen niet verwerken totdat u \'%s\' bouwt met ondersteuning daarvoor. Ondersteunde typen: %s. Ontbrekende typen: %s.',
  'Use Private Replies (More Secure)' => 'Privéantwoorden gebruiken (veiliger)',
  'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'' => 'Alle \'*.x.bak\'-bestanden behandelen als \'.x\'. OPMERKING: We verwijzen naar vanggroep 1 door de toewijzing als \'1\' op te geven',
  'Other Services' => 'Overige diensten',
  'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that this software imports or manages. This option is new and experimental.' => 'Geef een systeemgebruiker op om de daemons als uit te voeren. Voornamelijk zal deze gebruiker eigenaar zijn van de werkkopieën van alle repository\'s die deze software importeert of beheert. Deze optie is nieuw en experimenteel.',
  'Send as User Taking Action' => 'Verzenden als gebruiker die de handeling uitvoert',
  'Security options.' => 'Beveiligingsopties.',
  'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'Optie "%s" is van het type "%s" en moet op de opdrachtregel worden opgegeven als een JSON-lijst van waarden. Mogelijk moet u de waarde aanhalingstekens geven voor uw shell (bijvoorbeeld: \'["a", "b", ...]\').',
  'Expected Unique' => 'Verwachte uniciteit',
  'Configuring a Preamble Script' => 'Een preamblescript configureren',
  'Default Partition' => 'Standaardpartitie',
  'Domain used for reply email addresses.' => 'Domein dat wordt gebruikt voor antwoord-e-mailadressen.',
  'You can find more information about rebuilding the search index here: %s' => 'U kunt meer informatie vinden over het opnieuw opbouwen van de zoekindex hier: %s',
  'Prevent editing' => 'Bewerken voorkomen',
  'Whitelist 1.2.3.*' => 'Whitelist 1.2.3.*',
  'Control how user names are rendered in mail.' => 'Bepalen hoe gebruikersnamen worden weergegeven in e-mail.',
  'This configuration is no longer relevant because daemons restart automatically on configuration changes.' => 'Deze configuratie is niet meer relevant omdat daemons automatisch herstarten bij configuratiewijzigingen.',
  'The Differential revision list view age UI elements have been removed to simplify the interface.' => 'De leeftijds-UI-elementen in de Differential-versielijstweergave zijn verwijderd om de interface te vereenvoudigen.',
  'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be installed on an entire domain; it can not be installed on a path.' => 'Configuratieoptie \'%s\' is incorrect. De URI mag GEEN pad hebben, bijv. \'%s\' is OK, maar \'%s\' niet. Deze software moet op een volledig domein worden geïnstalleerd; het kan niet op een pad worden geïnstalleerd.',
  'Separate values with newlines.' => 'Waarden scheiden met nieuwe regels.',
  'The request body that the server received had already been decompressed. This strongly suggests your webserver is configured to decompress requests inline, before they reach PHP.' => 'De verzoekinhoud die de server ontving was al gedecomprimeerd. Dit suggereert sterk dat uw webserver is geconfigureerd om verzoeken ingebed te decomprimeren, voordat ze PHP bereiken.',
  'Define one or more fulltext storage services. Here you can configure which
hosts will handle fulltext search queries and indexing. For help with
configuring fulltext search clusters, see **[[ %s | %s ]]** in the
documentation.' => 'Definieer een of meer volledige-tekstopslagsdiensten. Hier kunt u configureren welke
hosts volledige-tekstzoekquery\'s en indexering afhandelen. Voor hulp bij
het configureren van volledige-tekstzoekclusters, zie **[[ %s | %s ]]** in de
documentatie.',
  'Exception Handlers' => 'Uitzonderingshandlers',
  'This schema has the wrong nullable setting.' => 'Dit schema heeft de verkeerde nullable-instelling.',
  'Config option \'%s\' is invalid. The URI must start with \'%s\' or \'%s\'.' => 'Configuratieoptie \'%s\' is incorrect. De URI moet beginnen met \'%s\' of \'%s\'.',
  'Unsupported/Insecure "%s" Version' => 'Niet-ondersteunde/onveilige "%s"-versie',
  'This option does not have a custom type!' => 'Deze optie heeft geen aangepast type!',
  'Require administrators to approve new accounts.' => 'Beheerders verplichten om nieuwe accounts goed te keuren.',
  'Authentication Configuration Unlocked' => 'Authenticatieconfiguratie ontgrendeld',
  'Health' => 'Gezondheid',
  'System user to run daemons as.' => 'Systeemgebruiker om daemons als uit te voeren.',
  'When set to `true`, the authentication provider configuration for this instance can not be modified without first running `bin/auth unlock` from the command line. This is to reduce the security impact of a compromised administrator account. 

After running `bin/auth unlock` and making your changes to the authentication provider config, you should run `bin/auth lock`.' => 'Wanneer ingesteld op `true`, kan de authenticatieproviderconfiguratie voor deze instantie niet worden gewijzigd zonder eerst `bin/auth unlock` uit te voeren vanaf de opdrachtregel. Dit is om de beveiligingsimpact van een gecompromitteerd beheerdersaccount te verminderen. 

Na het uitvoeren van `bin/auth unlock` en het aanbrengen van uw wijzigingen aan de authenticatieproviderconfiguratie, moet u `bin/auth lock` uitvoeren.',
  'Unknown schema status "%s"!' => 'Onbekende schemastatus "%s"!',
  'MySQL May Run Slowly' => 'MySQL kan langzaam draaien',
  'Manage extensions.' => 'Uitbreidingen beheren.',
  'Too many arguments: expected one key.' => 'Te veel argumenten: één sleutel verwacht.',
  'List of Users Without MFA' => 'Lijst van gebruikers zonder MFA',
  'IMPORTANT: The upstream does not provide support for prototype applications.

This platform includes prototype applications which are in an **early stage of development**. By default, prototype applications are disabled, because they are often not yet developed enough to be generally usable. You can enable this option to enable them if you\'re developing applications or are interested in previewing upcoming features.

To learn more about prototypes, see [[ %s | %s ]].

After enabling prototypes, you can selectively disable them (like normal applications).' => 'BELANGRIJK: De upstream biedt geen ondersteuning voor prototype-toepassingen.

Dit platform bevat prototype-toepassingen die zich in een **vroeg ontwikkelingsstadium** bevinden. Standaard worden prototype-toepassingen uitgeschakeld, omdat ze vaak nog niet voldoende ontwikkeld zijn om algemeen bruikbaar te zijn. U kunt deze optie inschakelen om ze in te schakelen als u toepassingen ontwikkelt of geïnteresseerd bent in het bekijken van aankomende functies.

Voor meer informatie over prototypes, zie [[ %s | %s ]].

Na het inschakelen van prototypes kunt u ze selectief uitschakelen (zoals normale toepassingen).',
  'No "Host" header present in request.' => 'Geen "Host"-header aanwezig in verzoek.',
  'Value for option "%s" of type "%s" must be either "true" or "false".' => 'Waarde voor optie "%s" van type "%s" moet "true" of "false" zijn.',
  'Storage engines are now discovered automatically at runtime.' => 'Opslagengines worden nu automatisch ontdekt tijdens runtime.',
  'This software appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. This software regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'Deze software lijkt te zijn geïnstalleerd op een zeer kleine EC2-instantie (van klasse "%s") met burstbare CPU. Dit wordt sterk afgeraden. Deze software heeft regelmatig CPU nodig, en deze instanties worden vaak verstikt door CPU-throttling. Gebruik in plaats daarvan een instantie met een normale CPU.',
  'Footer configuration is not valid: value must be a list of items.' => 'Voettekstconfiguratie is niet geldig: waarde moet een lijst van items zijn.',
  'Edit "%s"' => '"%s" bewerken',
  'Don\'t embed YouTube videos' => 'YouTube-video\'s niet insluiten',
  'Disable PHP %s' => 'PHP %s uitschakelen',
  'Configure master encryption keys.' => 'Hoofdversleutelingssleutels configureren.',
  'Mailers Not Configured' => 'Mailers niet geconfigureerd',
  'Daemons no longer use PID files.' => 'Daemons gebruiken geen PID-bestanden meer.',
  'Database replica "%s" is listed as a replica, but is not currently replicating. You are vulnerable to data loss if the master fails.' => 'Databasereplica "%s" staat vermeld als replica, maar repliceert momenteel niet. U bent kwetsbaar voor gegevensverlies als de primaire databasehost uitvalt.',
  'Garbage Collectors' => 'Garbage collectors',
  '%s edited this configuration entry.' => '%s heeft deze configuratie-invoer bewerkt.',
  'The PHP "zip" extension is not installed. This extension is required by certain data export operations, including exporting data to Excel.

To clear this setup issue, install the extension and restart your webserver.

You may safely ignore this issue if you do not plan to export data in Zip archives or Excel spreadsheets, or intend to install the extension later.' => 'De PHP-uitbreiding "zip" is niet geïnstalleerd. Deze uitbreiding is vereist voor bepaalde gegevensexportbewerkingen, waaronder het exporteren van gegevens naar Excel.

Om dit configuratieprobleem op te lossen, installeert u de uitbreiding en herstart u uw webserver.

U kunt dit probleem veilig negeren als u niet van plan bent gegevens te exporteren in Zip-archieven of Excel-spreadsheets, of als u van plan bent de uitbreiding later te installeren.',
  'To enable the SSH log, specify a path. This log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).

If not set, no log will be written.' => 'Om het SSH-log in te schakelen, geeft u een pad op. Dit log kan meer gedetailleerde informatie bieden over SSH-toegang dan een normaal SSH-log (het kan bijvoorbeeld ingelogde gebruikers, opdrachten en andere applicatiegegevens weergeven).

Als dit niet is ingesteld, wordt er geen log geschreven.',
  'Send Mail To All Recipients' => 'E-mail naar alle ontvangers verzenden',
  'This software sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.

This software sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.

Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.

(This problem can be caused by a missing "B" in your RewriteRule.)' => 'Deze software heeft zichzelf een testverzoek gestuurd met een ongebruikelijk pad, om te testen of uw webserver paden correct herschrijft. Het pad is niet correct verzonden.

Deze software heeft een verzoek gestuurd naar pad "%s" en verwachtte dat de webserver dat pad zou decoderen en herschrijven zodat het een verzoek ontving voor "%s". Het ontving echter een verzoek voor "%s".

Controleer of uw herschrijfregels correct zijn geconfigureerd, volgens de instructies in de documentatie. Als padcodering niet correct werkt, kunt u onder andere geen bestanden met ongebruikelijke namen in repository\'s benaderen.

(Dit probleem kan worden veroorzaakt door een ontbrekende "B" in uw RewriteRule.)',
  'Recorded items (sample):' => 'Geregistreerde items (voorbeeld):',
  'Your install has no current setup issues to resolve.' => 'Uw installatie heeft geen huidige configuratieproblemen om op te lossen.',
  'Subschemata Have Failures' => 'Subschema\'s hebben fouten',
  'Save Config Entry' => 'Configuratie-invoer opslaan',
  '%s of %s' => '%s van %s',
  'Setup MySQL Schema' => 'MySQL-schema instellen',
  ' (%s)' => ' (%s)',
  'Not Available' => 'Niet beschikbaar',
  'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to this software, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'Als die opdrachten niet werken, probeer Google. Het proces van het installeren van PHP-uitbreidingen is niet specifiek voor deze software, en alle instructies die u kunt vinden voor het installeren ervan op uw systeem zouden moeten werken. Op Mac OS X kunt u Homebrew proberen.',
  'You can disable the hints under "REPLY HANDLER ACTIONS" if users prefer
smaller messages. The actions themselves will still work properly.' => 'U kunt de hints onder "REPLY HANDLER ACTIONS" uitschakelen als gebruikers
kleinere berichten prefereren. De handelingen zelf blijven correct werken.',
  'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => 'Deze optie is verwijderd, u kunt Dashboards gebruiken om de startpagina aan te passen. Zie T11533 voor meer details.',
  'Data Cache' => 'Gegevenscache',
  'Configure the access logs, which log HTTP/SSH requests.' => 'De toegangslogs configureren, die HTTP/SSH-verzoeken loggen.',
  '%ss Behind' => '%ss achter',
  'The PID of the server process.' => 'De PID van het serverproces.',
  'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be \'.
            \'installed on an entire domain; it can not be installed on a path.' => 'Configuratieoptie \'%s\' is incorrect. De URI mag GEEN pad hebben, bijv. \'%s\' is OK, maar \'%s\' niet. Deze software moet op een volledig domein worden geïnstalleerd; het kan niet op een pad worden geïnstalleerd.',
  'Blacklist subnets to prevent user-initiated outbound requests.' => 'Subnetten op de blokkeerlijst zetten om door gebruikers geïnitieerde uitgaande verzoeken te voorkomen.',
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
' => 'Wanneer een bericht naar meerdere ontvangers wordt gestuurd (bijvoorbeeld meerdere beoordelaars bij
een codebeoordeling), kan het worden afgeleverd als één e-mail aan iedereen (bijv. "Aan:
alincoln, usgrant, htaft") of als afzonderlijke e-mails aan elke gebruiker (bijv. "Aan:
alincoln", "Aan: usgrant", "Aan: htaft"). De belangrijkste voor- en nadelen
van elke benadering zijn:

  - Eén e-mail aan iedereen:
    - Dit schendt beleidscontroles. De inhoud van de e-mail wordt gegenereerd zonder
      rekening te houden met objectbeleid.
    - Ontvangers kunnen Aan/Cc in één oogopslag zien.
    - Als u mailinglijsten gebruikt, krijgt u geen dubbele e-mail als u
      een normale ontvanger bent en ook in Cc staat op een mailinglijst.
    - Threading correct laten werken is moeilijker, en vereist waarschijnlijk
      dat e-mail minder nuttig wordt door opties uit te schakelen.
    - Soms zullen mensen "Allen beantwoorden" gebruiken, wat e-mail kan sturen naar te veel
      ontvangers. Deze software probeert geen e-mail te sturen naar gebruikers die al
      een vergelijkbaar bericht hebben ontvangen, maar kan niet alle verdwaalde e-mail voorkomen
      die voortkomt uit "Allen beantwoorden".
    - Niet ondersteund met een privé-antwoordadres.
    - E-mailberichten worden verzonden in de standaardvertaling van de server.
    - E-mail die via beveiligde kanalen moet worden afgeleverd, lekt de ontvangerlijst
      in de "Aan"- en "Cc"-headers.
  - Eén e-mail per gebruiker:
    - Beleidscontroles werken correct en worden per gebruiker afgedwongen.
    - Ontvangers moeten in de e-mailinhoud kijken om Aan/Cc te zien.
    - Als u mailinglijsten gebruikt, kunnen ontvangers soms dubbele
      e-mail ontvangen.
    - Threading correct laten werken is gemakkelijker, en threading-instellingen
      kunnen door elke gebruiker worden aangepast.
    - "Allen beantwoorden" stuurt nooit extra e-mail naar andere gebruikers in de
      thread.
    - Vereist als privé-antwoordadressen zijn geconfigureerd.
    - E-mailberichten worden verzonden in de taal van de gebruikersvoorkeur.',
  'No Outbound Requests' => 'Geen uitgaande verzoeken',
  'Primary install URI, for multi-environment installs.' => 'Primaire installatie-URI, voor installaties met meerdere omgevingen.',
  'Global access controls now exist, see `%s`.' => 'Globale toegangscontroles bestaan nu, zie `%s`.',
  'Your webserver is not handling compressed request bodies properly.' => 'Uw webserver verwerkt gecomprimeerde verzoekinhoud niet correct.',
  'Whitelists editor protocols for "Open in Editor".' => 'Editorprotocollen op de whitelist zetten voor "Openen in editor".',
  'Unable to connect to MySQL!

%s

Make sure databases connection information and MySQL are correctly configured.' => 'Kan geen verbinding maken met MySQL!

%s

Zorg ervoor dat de databaseverbindingsinformatie en MySQL correct zijn geconfigureerd.',
  'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.' => 'De instellingen "Re: Prefix" en "Vary Subjects" worden nu geconfigureerd in globale instellingen.',
  'You have no unresolved setup issues.' => 'U hebt geen onopgeloste configuratieproblemen.',
  'This configuration is hidden and can not be edited or viewed from the web interface.' => 'Deze configuratie is verborgen en kan niet worden bewerkt of bekeken via de webinterface.',
  'Local Disk Storage Not Readable/Writable' => 'Lokale schijfopslag niet leesbaar/schrijfbaar',
  'Override translations.' => 'Vertalingen overschrijven.',
  'Cluster Configuration Out of Sync' => 'Clusterconfiguratie niet gesynchroniseerd',
  'Cookies set for x.com are also sent for y.x.com. Assuming instances are running on both domains, this will create a collision preventing you from logging in.' => 'Cookies die zijn ingesteld voor x.com worden ook verzonden voor y.x.com. Ervan uitgaande dat instanties op beide domeinen draaien, creëert dit een conflict dat u verhindert in te loggen.',
  'This option has been removed. You may delete it at your convenience.' => 'Deze optie is verwijderd. U kunt deze op elk gewenst moment verwijderen.',
  'You can find more information about this new identity mapping here: %s' => 'U kunt meer informatie vinden over deze nieuwe identiteitstoewijzing hier: %s',
  'After rebuilding the index, run this command to clear this setup warning:' => 'Na het opnieuw opbouwen van de index, voer deze opdracht uit om deze configuratiewaarschuwing te wissen:',
  'Footer item with index "%s" is invalid: %s' => 'Voettekstitem met index "%s" is incorrect: %s',
  'Unknown Configuration Option "%s"' => 'Onbekende configuratieoptie "%s"',
  'Truncate at 1MB' => 'Afkappen op 1MB',
  'Access key for Amazon S3.' => 'Toegangssleutel voor Amazon S3.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.' => 'Het PATH-onderdeel \'%s\' (dat wordt omgezet naar het absolute pad \'%s\') is niet bruikbaar omdat \'%s\' niet leesbaar is.',
  'Maniphest fields are now loaded automatically. You can configure them with `%s`.' => 'Maniphest-velden worden nu automatisch geladen. U kunt ze configureren met `%s`.',
  'This key is expected to exist, but does not.' => 'Deze sleutel wordt verwacht te bestaan, maar bestaat niet.',
  'Persistence' => 'Persistentie',
  'This schema is expected to exist, but does not.' => 'Dit schema wordt verwacht te bestaan, maar bestaat niet.',
  'You can provide a custom highlighter engine by extending class %s.' => 'U kunt een aangepaste markeringsengine bieden door klasse %s uit te breiden.',
  'Do Not Use Pygments' => 'Pygments niet gebruiken',
  'Up to Date' => 'Bijgewerkt',
  'Configure core options, including URIs.' => 'Kernopties configureren, inclusief URI\'s.',
  '(empty)' => '(leeg)',
  'This key has the wrong uniqueness setting.' => 'Deze sleutel heeft de verkeerde uniciteitsinstelling.',
  'When users set or reset a password, it must have at least this many characters.' => 'Wanneer gebruikers een wachtwoord instellen of opnieuw instellen, moet het ten minste dit aantal tekens bevatten.',
  'Additional configuration options to lock.' => 'Extra configuratieopties om te vergrendelen.',
  'Override what language files (based on filename) highlight as.' => 'Overschrijven als welke taal bestanden (op basis van bestandsnaam) worden gemarkeerd.',
  'Bad "Host" Header' => 'Foutieve "Host"-header',
  'Controls whether email for multiple recipients is sent by creating one message with everyone in the "To:" line, or multiple messages that each have a single recipient in the "To:" line.' => 'Bepaalt of e-mail voor meerdere ontvangers wordt verzonden door één bericht aan te maken met iedereen in de "Aan:"-regel, of meerdere berichten die elk één ontvanger in de "Aan:"-regel hebben.',
  'Option "%s" is of type "%s", but the item at index "%s" of the list is not a string.' => 'Optie "%s" is van het type "%s", maar het item op index "%s" van de lijst is geen tekenreeks.',
  'MySQL port to use when connecting to the database.' => 'MySQL-poort om te gebruiken bij het verbinden met de database.',
  'Trying to add duplicate key "%s"!' => 'Poging om dubbele sleutel "%s" toe te voegen!',
  'Option "%s" is of type "%s", but the configured value is not a string.' => 'Optie "%s" is van het type "%s", maar de geconfigureerde waarde is geen tekenreeks.',
  'User Guide: Amazon RDS' => 'Gebruikersgids: Amazon RDS',
  'You have \'%s\' enabled in your PHP configuration.

This feature is "highly discouraged" by PHP\'s developers, and has been removed entirely in PHP8.This option is not compatible with this software. Disable \'%s\' in your PHP configuration to continue.' => 'U hebt \'%s\' ingeschakeld in uw PHP-configuratie.

Deze functie wordt "sterk afgeraden" door de ontwikkelaars van PHP en is volledig verwijderd in PHP8. Deze optie is niet compatibel met deze software. Schakel \'%s\' uit in uw PHP-configuratie om door te gaan.',
  'Repository %s has an ambiguous leader.' => 'Repository %s heeft een dubbelzinnige leider.',
  'To enable the SSH error log, specify a path. Errors occurring in contexts where this software is serving SSH requests will be written to this log.

If not set, no log will be written.' => 'Om het SSH-foutenlog in te schakelen, geeft u een pad op. Fouten die optreden in contexten waar deze software SSH-verzoeken afhandelt, worden naar dit log geschreven.

Als dit niet is ingesteld, wordt er geen log geschreven.',
  'The \'%s\' extension is not installed. Without \'%s\' support, this server will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => 'De uitbreiding \'%s\' is niet geïnstalleerd. Zonder \'%s\'-ondersteuning kan deze server geen afbeeldingen verwerken of verkleinen (bijvoorbeeld om miniaturen te genereren). Installeer of schakel \'%s\' in.',
  'Your authentication provider configuration is unlocked. Once you finish setting up or modifying authentication, you should lock the configuration to prevent unauthorized changes.

Leaving your authentication provider configuration unlocked increases the damage that a compromised administrator account can do to your install. For example, an attacker who compromises an administrator account can change authentication providers to point at a server they control and attempt to intercept usernames and passwords.

To prevent this attack, you should configure authentication, and then lock the configuration by running "bin/auth lock" from the command line. This will prevent changing the authentication config without first running "bin/auth unlock".' => 'Uw authenticatieproviderconfiguratie is ontgrendeld. Zodra u klaar bent met het instellen of wijzigen van authenticatie, moet u de configuratie vergrendelen om ongeautoriseerde wijzigingen te voorkomen.

Het ontgrendeld laten van uw authenticatieproviderconfiguratie vergroot de schade die een gecompromitteerd beheerdersaccount kan aanrichten aan uw installatie. Een aanvaller die een beheerdersaccount compromitteert kan bijvoorbeeld authenticatieproviders wijzigen om naar een server te verwijzen die zij beheren en proberen gebruikersnamen en wachtwoorden te onderscheppen.

Om deze aanval te voorkomen, moet u authenticatie configureren en vervolgens de configuratie vergrendelen door "bin/auth lock" uit te voeren vanaf de opdrachtregel. Dit voorkomt het wijzigen van de authenticatieconfiguratie zonder eerst "bin/auth unlock" uit te voeren.',
  'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. This server needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.

PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.

(Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)

The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit process memory.

You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'Wanneer u een bestand uploadt via slepen-en-neerzetten of de API, moeten delen in het geheugen worden gebufferd voordat ze naar permanente opslag worden geschreven. Deze server heeft geheugen nodig om deze delen op te slaan terwijl ze worden geüpload, maar PHP is momenteel geconfigureerd om het beschikbare geheugen ernstig te beperken.

PHP-processen hebben momenteel zeer weinig vrij geheugen beschikbaar (%s). Om goed te werken, moeten processen ten minste %s hebben.

(Merk op dat de toepassing zelf ook in het beschikbare geheugen moet passen, dus niet al het geheugen onder de geheugenlimiet is beschikbaar voor het uitvoeren van werklasten.)

De eenvoudigste manier om dit probleem op te lossen is om %s in te stellen op %s in uw PHP-configuratie, om de geheugenlimiet uit te schakelen. Er is meestal weinig of geen waarde in het gebruik van deze optie om procesgeheugen te beperken.

U kunt ook de limiet verhogen of dit probleem negeren en accepteren dat u problemen kunt ondervinden bij het uploaden van grote bestanden en het verwerken van grote verzoeken.',
  'Configuration of the notification server has changed substantially. For discussion, see T10794.' => 'De configuratie van de meldingsserver is aanzienlijk gewijzigd. Zie T10794 voor discussie.',
  'Read option value from stdin.' => 'Optiewaarde lezen van stdin.',
  'Database source is not configured properly' => 'Databasebron is niet correct geconfigureerd',
  'Don\'t Require Manual Approval' => 'Geen handmatige goedkeuring vereisen',
  'Column Type' => 'Kolomtype',
  'Truncate at 512KB' => 'Afkappen op 512KB',
  'Cache' => 'Cache',
  'Automatically profile some percentage of pages.' => 'Automatisch een percentage van de pagina\'s profileren.',
  'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. This software can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'Expliciet S3-eindpunt om te gebruiken. Dit moet het eindpunt zijn dat overeenkomt met de regio die u hebt geselecteerd in `amazon-s3.region`. Deze software kan het juiste eindpunt niet automatisch bepalen omdat sommige eindpuntlocaties onregelmatig zijn.',
  'Admin Server' => 'Beheerserver',
  'Wrong Column Type' => 'Verkeerd kolomtype',
  'You are running %s version "%s", which is older than the minimum required version, "%s". Update to at least "%s".' => 'U draait %s versie "%s", die ouder is dan de minimaal vereiste versie, "%s". Werk bij naar ten minste "%s".',
  'Embed YouTube videos' => 'YouTube-video\'s insluiten',
  'Add One Path' => 'Eén pad toevoegen',
  'Clear Cache' => 'Cache wissen',
  'Write access log here.' => 'Toegangslogboek hier schrijven.',
  'Unignore this setup issue?' => 'Dit configuratieprobleem niet meer negeren?',
  'Configure Mail.' => 'E-mail configureren.',
  'Default User-Agent for outgoing HTTP requests made by this software.' => 'Standaard User-Agent voor uitgaande HTTP-verzoeken die door deze software worden gedaan.',
  'What locale to use for command-line scripts that don\'t specify a `%s` argument.' => 'Welke landinstellingen moeten er gebruikt worden voor commandoregelscripts die geen `%s`-argument specificeren?',
  'You can update these %d value(s) here:' => array(
    'U kunt deze waarde hier bijwerken:',
    'U kunt deze waarden hier bijwerken:',
  ),
  'Notification Servers' => 'Meldingsservers',
  'To enable the HTTP access log, specify a path. This log is more detailed than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).

If not set, no log will be written.' => 'Om het HTTP-toegangslog in te schakelen, geeft u een pad op. Dit log is gedetailleerder dan normale HTTP-toegangslogs (het kan bijvoorbeeld ingelogde gebruikers, controllers en andere applicatiegegevens weergeven).

Als dit niet is ingesteld, wordt er geen log geschreven.',
  'extname' => 'extname',
  'Enable captchas with Recaptcha.' => 'Captcha\'s inschakelen met Recaptcha.',
  'This suggests your webserver is configured to decompress or mangle compressed requests.' => 'Dit suggereert dat uw webserver is geconfigureerd om gecomprimeerde verzoeken te decomprimeren of te verminken.',
  'Add Multiple Paths' => 'Meerdere paden toevoegen',
  'Specify an activity to mark as completed.' => 'Geef een activiteit op om als voltooid te markeren.',
  'By default, this software links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => 'Standaard koppelt deze software objectnamen in Remarkup-velden aan het overeenkomstige object. Deze regex kan worden gebruikt om dit gedrag te wijzigen; objectnamen die overeenkomen met deze regex worden niet gekoppeld.',
  'This server has a known bad version of "%s".' => 'Op deze server is een bekende slechte versie van "%s" geïnstalleerd.',
  'Require DarkConsole Activation' => 'DarkConsole-activering vereisen',
  'Notifications Status' => 'Meldingsstatus',
  'Use the %s to manage enabled applications.' => 'Gebruik de %s om ingeschakelde toepassingen te beheren.',
  'Current Configuration' => 'Huidige configuratie',
  'Replicating Master' => 'Primair, replicerend',
  'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).

Upgrade %s to a patched version.

To learn more about how this issue affects this software, see %s.' => 'De versie van %s op dit systeem is verouderd en bevat een ernstige, breed bekendgemaakte kwetsbaarheid (de "Shellshock"-kwetsbaarheid).

Werk %s bij naar een gepatchte versie.

Voor meer informatie over hoe dit probleem deze software beïnvloedt, zie %s.',
  'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.' => 'Zonder een geconfigureerde tijdzone geeft PHP waarschuwingen bij het werken met datums, en datums en tijden worden mogelijk niet correct weergegeven.',
  'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.' => 'Optie "%s" is van het type "%s" en moet worden ingesteld op een lijst van geldige reguliere expressies, maar "%s" is geen geldige reguliere expressie.',
  'This schema can use a better character set.' => 'Dit schema kan een betere tekenset gebruiken.',
  'Configuration value "%s" is locked, but has a value in the database.' => 'Configuratiewaarde "%s" is vergrendeld, maar heeft een waarde in de database.',
  'Newly registered accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access the server.

If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured the server to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.

NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => 'Nieuw geregistreerde accounts kunnen in een handmatige goedkeuringswachtrij worden geplaatst voor administratieve beoordeling, of onmiddellijk automatisch worden geactiveerd. De goedkeuringswachtrij is standaard ingeschakeld omdat het u meer controle geeft over wie een account kan registreren en toegang heeft tot de server.

Als uw installatie volledig openbaar is, of op een VPN, of gebruikers zich alleen kunnen registreren bij een vertrouwde provider zoals LDAP, of u de server anderszins hebt geconfigureerd om ongeautoriseerde registratie te voorkomen, kunt u de wachtrij uitschakelen om de administratieve overhead te verminderen.

OPMERKING: Voordat u de wachtrij uitschakelt, zorg ervoor dat @{config:auth.email-domains} correct is geconfigureerd voor uw installatie!',
  'Determines whether or not YouTube videos get embedded.' => 'Bepaalt of YouTube-video\'s worden ingesloten.',
  'Allows you to add a footer with links in it to most pages. You might want to use these links to point at legal information or an about page.

Specify a list of dictionaries. Each dictionary describes a footer item. These keys are supported:

  - `name` The name of the item.
  - `href` Optionally, the link target of the item. You can     omit this if you just want a piece of text, like a copyright     notice.' => 'Hiermee kunt u een voettekst met koppelingen toevoegen aan de meeste pagina\'s. U kunt deze koppelingen gebruiken om te verwijzen naar juridische informatie of een over-pagina.

Geef een lijst van woordenboeken op. Elk woordenboek beschrijft een voettekstitem. Deze sleutels worden ondersteund:

  - `name` De naam van het item.
  - `href` Optioneel, het koppelingsdoel van het item. U kunt     dit weglaten als u alleen een stuk tekst wilt, zoals een     copyrightmelding.',
  'The known issues with this old version are:' => 'De bekende problemen met deze oude versie zijn:',
  'Not Enabled' => 'Niet ingeschakeld',
  'This software sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. This software sent username "%s" with password "%s"; received username "%s" and password "%s".

Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => 'Deze software heeft zichzelf een testverzoek gestuurd met een "Authorization"-HTTP-header en verwachtte dat die aanmeldgegevens werden verzonden. Ze waren echter afwezig of incorrect bij ontvangst. Deze software stuurde gebruikersnaam "%s" met wachtwoord "%s"; ontving gebruikersnaam "%s" en wachtwoord "%s".

Uw webserver is mogelijk niet geconfigureerd om HTTP-basisauthenticatie door te sturen. Als u van plan bent basisauthenticatie te gebruiken (bijvoorbeeld om toegang te krijgen tot repository\'s), moet u deze opnieuw configureren.',
  'If you are using Amazon RDS, some of the instructions above may not apply to you. See %s for discussion of Amazon RDS.' => 'Als u Amazon RDS gebruikt, zijn sommige van de bovenstaande instructies mogelijk niet op u van toepassing. Zie %s voor een bespreking van Amazon RDS.',
  'Controls whether email is sent "From" users.' => 'Bepaalt of e-mail wordt verzonden "Van" gebruikers.',
  'The notification server no longer requires root permissions. Start the server as the user you want it to run under.' => 'De meldingsserver vereist geen rootrechten meer. Start de server als de gebruiker waaronder u deze wilt laten draaien.',
  'This issue will no longer be suppressed, and will return to its rightful place as a global setup warning.' => 'Dit probleem wordt niet langer onderdrukt en keert terug naar zijn rechtmatige plaats als een globale configuratiewaarschuwing.',
  'Allows you to remove levity and jokes from the UI.' => 'Hiermee kunt u humor en grappen uit de gebruikersinterface verwijderen.',
  'Sites' => 'Sites',
  'T6185 "Shellshock" Bash Vulnerability' => 'T6185 "Shellshock" Bash-kwetsbaarheid',
  'Missing \'%s\' Extension' => 'Ontbrekende uitbreiding \'%s\'',
  'Retention policies for garbage collection.' => 'Bewaarbeleid voor garbage collection.',
  'MySQL (on host "%s") is configured with a very small innodb_buffer_pool_size, which may impact performance.' => 'MySQL (op host "%s") is geconfigureerd met een zeer kleine innodb_buffer_pool_size, wat de prestaties kan beïnvloeden.',
  'You should upgrade this software.' => 'U moet deze software upgraden.',
  'The following caches will be cleared:' => 'De volgende caches worden gewist:',
  'Detected %s warning(s) with the schemata.' => array(
    'Een waarschuwing gedetecteerd bij de schema\'s.',
    '%s waarschuwingen gedetecteerd bij de schema\'s.',
  ),
  'Deprecated mysql.host Format' => 'Verouderd mysql.host-formaat',
  'This key is on the wrong columns.' => 'Deze sleutel staat op de verkeerde kolommen.',
  'Wrong Nullable Setting' => 'Verkeerde nullable-instelling',
  'Secret key for Amazon S3.' => 'Geheime sleutel voor Amazon S3.',
  'Trying to add duplicate column "%s"!' => 'Poging om dubbele kolom "%s" toe te voegen!',
  'Minimum password length.' => 'Minimale wachtwoordlengte.',
  'Required PHP extensions are not installed.' => 'Vereiste PHP-uitbreidingen zijn niet geïnstalleerd.',
  'Database' => 'Database',
  'UNHEALTHY: This database has failed recent health checks. Traffic will not be sent to it until it recovers.' => 'ONGEZOND: Deze database is gezakt voor recente gezondheidscontroles. Er wordt geen verkeer naartoe gestuurd totdat deze herstelt.',
  'Request input, in bytes.' => 'Verzoekinvoer, in bytes.',
  'You enabled pygments but the %s script is not actually available, your %s is probably broken.' => 'U hebt pygments ingeschakeld maar het %s-script is niet daadwerkelijk beschikbaar, uw %s is waarschijnlijk defect.',
  'Application Settings' => 'Toepassingsinstellingen',
  'Show email preferences link in email.' => 'Koppeling naar e-mailvoorkeuren weergeven in e-mail.',
  'Your webserver may have compression disabled.' => 'Uw webserver heeft mogelijk compressie uitgeschakeld.',
  'The configured PATH includes a component which is not usable. This server will be unable to find or execute binaries located here:

%s

The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => 'Het geconfigureerde PATH bevat een onderdeel dat niet bruikbaar is. Deze server kan geen binaire bestanden vinden of uitvoeren die hier staan:

%s

De gebruiker waaronder de webserver draait moet alle mappen in PATH kunnen lezen om ze te kunnen gebruiken.',
  'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.' => 'U kunt een limiet instellen voor de maximale bytegrootte van uitgaande e-mail. E-mail die groter is dan deze limiet wordt afgekapt voordat deze wordt verzonden. Dit kan nuttig zijn als uw MTA e-mail afwijst die een bepaalde limiet overschrijdt (dit komt redelijk vaak voor). Geef een waarde op in bytes.',
  'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => 'Meerdere %s-subklassen hebben dezelfde sleutel (\'%s\'): %s, %s.',
  'Your webserver is rewriting paths improperly.' => 'Uw webserver herschrijft paden onjuist.',
  'You can rebuild repository identities while the server is running.' => 'U kunt repository-identiteiten opnieuw opbouwen terwijl de server draait.',
  'Customize the logo image and text which appears in the main site header:

  - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.

  - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.

' => 'Het logobeeld en de tekst aanpassen die in de hoofdkoptekst van de site verschijnen:

  - **Logobeeld**: Upload een nieuw 80 x 80px-beeld om het logo in de sitekoptekst te vervangen.

  - **Woordmerk**: Kies nieuwe tekst om naast het logo weer te geven. Standaard geeft de koptekst //%s// weer.',
  'Trying to add duplicate table "%s"!' => 'Poging om dubbele tabel "%s" toe te voegen!',
  'No Authentication Providers Configured' => 'Geen authenticatieproviders geconfigureerd',
  'Run Silently' => 'Stil uitvoeren',
  'You can find more information about PHP configuration values in the %s.' => 'U kunt meer informatie vinden over PHP-configuratiewaarden in de %s.',
  'Skipping option "%s"; already in local config.' => 'Optie "%s" overslaan; al in lokale configuratie.',
  'Public email is now accepted if the associated address has a default author, and rejected otherwise.' => 'Openbare e-mail wordt nu geaccepteerd als het bijbehorende adres een standaardauteur heeft, en anders afgewezen.',
  'Setup Issues' => 'Configuratieproblemen',
  'Require email verification' => 'E-mailverificatie vereisen',
  'Resource minification is now managed automatically.' => 'Bronminificatie wordt nu automatisch beheerd.',
  'This software sometimes executes other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running this software (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.

Note that you can also put binaries in `%s` (for example, by symlinking them).

The current value of PATH after configuration is applied is:

  lang=text
  %s' => 'Deze software voert soms andere binaire bestanden uit op de server. Een voorbeeld hiervan is het `%s`-commando, dat wordt gebruikt om code geschreven in andere talen dan PHP syntaxismarkering te geven. Standaard wordt aangenomen dat deze binaire bestanden zich in het %s bevinden van de gebruiker die deze software draait (normaal \'apache\', \'httpd\' of \'nobody\'). Hier kunt u extra mappen toevoegen aan de %s-omgevingsvariabele, voor wanneer deze binaire bestanden zich op niet-standaard locaties bevinden.

Merk op dat u ook binaire bestanden in `%s` kunt plaatsen (bijvoorbeeld door ze te symlinken).

De huidige waarde van PATH na toepassing van de configuratie is:

  lang=text
  %s',
  'Whitespace rendering is now handled automatically.' => 'Witruimteweergave wordt nu automatisch afgehandeld.',
  '%s Not Working' => '%s werkt niet',
  'This configuration option is unknown. It may be misspelled, or have existed in a previous version of the software.' => 'Deze configuratieoptie is onbekend. Het kan verkeerd gespeld zijn, of bestaan hebben in een eerdere versie van de software.',
  'You can use \'%s\' if you don\'t want to create a full translation to give users an option for switching to it and you just want to override some strings in the default translation.' => 'U kunt \'%s\' gebruiken als u geen volledige vertaling wilt maken om gebruikers de mogelijkheid te geven ernaar over te schakelen en u alleen enkele tekenreeksen in de standaardvertaling wilt overschrijven.',
  'Connection' => 'Verbinding',
  'Placeholder recipients are now generated automatically.' => 'Plaatsvervangende ontvangers worden nu automatisch gegenereerd.',
  'Elasticsearch is configured (with the %s setting) but an exception was encountered when trying to test the index.

%s' => 'Elasticsearch is geconfigureerd (met de instelling %s) maar er is een uitzondering opgetreden bij het testen van de index.

%s',
  'SSH keys are now actually useful, so they are always enabled.' => 'SSH-sleutels zijn nu daadwerkelijk nuttig, dus ze zijn altijd ingeschakeld.',
  'Request output, in bytes.' => 'Verzoekuitvoer, in bytes.',
  'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => 'Configuratieoptie \'%s\' is onjuist. De URI moet een punt (\'.\') bevatten, zoals \'%s\', niet alleen een kale naam zoals \'%s\'. Sommige webbrowsers stellen geen cookies in op domeinen zonder TLD.',
  'The Multimeter application collects performance samples. You can use this data to help you understand what the software is spending time and resources doing, and to identify problematic access patterns.

This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.

For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'De Multimeter-toepassing verzamelt prestatiesamples. U kunt deze gegevens gebruiken om te begrijpen waar de software tijd en middelen aan besteedt, en om problematische toegangspatronen te identificeren.

Deze optie bepaalt hoe vaak sampling wordt geactiveerd. Stel het in op een positief geheel getal N om elke 1 / N pagina\'s te samplen.

Voor de meeste installaties zou de standaardwaarde (1 sample per 1000 pagina\'s) voldoende gegevens moeten verzamelen om nuttig te zijn zonder veel opslag te vereisen of de prestaties merkbaar te beïnvloeden. Als u prestatieproblemen onderzoekt, kunt u de frequentie aanpassen om meer gegevens te verzamelen.',
  'Cache namespace.' => 'Cache-naamruimte.',
  '%s = 0' => '%s = 0',
  'Unsafe PHP "Local Infile" Configuration' => 'Onveilige PHP "Local Infile"-configuratie',
  'Custom remarkup rules are now added by subclassing %s or %s.' => 'Aangepaste remarkup-regels worden nu toegevoegd door %s of %s te subklassen.',
  'Issue Resolved' => 'Probleem opgelost',
  'If you enable this, linked Commons videos will be embedded inline.' => 'Als u dit inschakelt, worden gekoppelde Commons-video\'s ingebed ingesloten.',
  'Garbage collectors are now configured with "%s".' => 'Garbage collectors worden nu geconfigureerd met "%s".',
  'Unknown configuration option type "%s".' => 'Onbekend configuratieoptie-type "%s".',
  'Trying to add duplicate database "%s"!' => 'Poging om dubbele database "%s" toe te voegen!',
  'This column has the wrong autoincrement setting.' => 'Deze kolom heeft de verkeerde autoincrement-instelling.',
  'Allows you to add footer links on most pages.' => 'Hiermee kunt u voettekstkoppelingen toevoegen aan de meeste pagina\'s.',
  'USWest Region' => 'USWest-regio',
  'Maniphest fields are now defined in `%s`. Existing definitions have been migrated.' => 'Maniphest-velden worden nu gedefinieerd in `%s`. Bestaande definities zijn gemigreerd.',
  'Enable Prototypes' => 'Prototypes inschakelen',
  'Elasticsearch is now configured with "%s".' => 'Elasticsearch wordt nu geconfigureerd met "%s".',
  'Configuring Outbound Email' => 'Uitgaande e-mail configureren',
  'Inbound mail addresses are now configured for each application in the Applications tool.' => 'Inkomende e-mailadressen worden nu per toepassing geconfigureerd in het hulpmiddel Toepassingen.',
  'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see https://www.google.com/recaptcha' => 'Schakel recaptcha in om gebruikers captcha\'s te laten oplossen na een paar mislukte inlogpogingen. Dit belemmert brute-force-aanvallen op gebruikerswachtwoorden. Zie https://www.google.com/recaptcha voor meer informatie.',
  'Partial \'%s\' Support' => 'Gedeeltelijke \'%s\'-ondersteuning',
  'Subschemata have setup warnings.' => 'Subschema\'s hebben configuratiewaarschuwingen.',
  'Uptime' => 'Uptime',
  'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.' => 'MySQL (op host "%s") gebruikt een standaard stopwoordenbestand, waardoor het zoeken naar veel voorkomende woorden wordt verhinderd.',
  'Two setup checks raised an issue with key \'%s\'!' => 'Twee configuratiecontroles hebben een probleem gemeld met sleutel \'%s\'!',
  'Mark activities complete even if there is no outstanding need to complete them.' => 'Handelingen als voltooid markeren, zelfs als er geen openstaande noodzaak is om ze te voltooien.',
  'You likely enabled cluster.search without creating the index. Use the following command to create a new index.' => 'U hebt waarschijnlijk cluster.search ingeschakeld zonder de index aan te maken. Gebruik het volgende commando om een nieuwe index aan te maken.',
  'Skipping option "%s"; already in database config.' => 'Optie "%s" overslaan; al in databaseconfiguratie.',
  'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.

(If you already created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => 'De "InnoDB"-engine is niet beschikbaar in MySQL (op host "%s"). Schakel InnoDB in in uw MySQL-configuratie.

(Als u al tabellen hebt aangemaakt, heeft MySQL ten onrechte een andere engine gebruikt om ze aan te maken. U moet ze converteren of verwijderen en opnieuw initialiseren.)',
  'This software is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.

Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => 'Deze software is momenteel geconfigureerd om gebruikersuploads rechtstreeks vanaf hetzelfde domein als andere inhoud te serveren. Dit is een beveiligingsrisico.

Configureer een CDN (of alternatief bestandsdomein) om dit risico te elimineren. Het gebruik van een CDN verbetert ook de prestaties. Zie de onderstaande handleiding voor instructies.',
  '%s Stats' => '%s-statistieken',
  'The minimum supported version of Subversion is 1.5, which was released in 2008.' => 'De minimaal ondersteunde versie van Subversion is 1.5, die in 2008 is uitgebracht.',
  'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.' => 'Uw PHP-geheugenlimiet is geconfigureerd op een manier die u kan verhinderen grote bestanden te uploaden of grote verzoeken te verwerken.',
  'The system user.' => 'De systeemgebruiker.',
  'Reload Page' => 'Pagina vernieuwen',
  'Force users to connect via HTTPS instead of HTTP.' => 'Gebruikers dwingen verbinding te maken via HTTPS in plaats van HTTP.',
  'Large Files' => 'Grote bestanden',
  'Compressed Requests Not Received Properly' => 'Gecomprimeerde verzoeken niet correct ontvangen',
  'The namespace that databases should use.' => 'De naamruimte die databases moeten gebruiken.',
  'Mark a manual upgrade activity as complete.' => 'Een handmatige upgrade-handeling als voltooid markeren.',
  '%s Not Set' => '%s niet ingesteld',
  'This configuration option has been replaced with a modular handler. See T9346.' => 'Deze configuratieoptie is vervangen door een modulaire handler. Zie T9346.',
  'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)' => 'Waarde voor optie "%s" (van type "%s") moet in JSON worden opgegeven, maar de invoer kon niet worden gedecodeerd. (Bent u vergeten een tekenreeks tussen aanhalingstekens te plaatsen?)',
  'Configuration option \'%s\' has invalid value and was restored to the default: %s' => 'Configuratieoptie \'%s\' heeft een onjuiste waarde en is hersteld naar de standaardwaarde: %s',
  'To update these %d value(s), edit your PHP configuration file, located here:' => array(
    'Om deze waarde bij te werken, bewerk uw PHP-configuratiebestand, dat zich hier bevindt:',
    'Om deze waarden bij te werken, bewerk uw PHP-configuratiebestand, dat zich hier bevindt:',
  ),
  'Collation' => 'Sortering',
  'Replication' => 'Replicatie',
  'The HTTP response code or process exit code.' => 'De HTTP-antwoordcode of proces-exitcode.',
  'Obsolete; use standard rendering events instead.' => 'Verouderd; gebruik in plaats daarvan standaard weergave-events.',
  'Local Disk Storage' => 'Lokale schijfopslag',
  'Constant' => 'Constante',
  'Issue' => 'Probleem',
  'Determines which URI protocols are valid for links and redirects.' => 'Bepaalt welke URI-protocollen geldig zijn voor koppelingen en omleidingen.',
  'Configuration Guide: Configuring a File Domain' => 'Configuratiehandleiding: een bestandsdomein configureren',
  'Activate DarkConsole on every page.' => 'DarkConsole op elke pagina activeren.',
  'Enable verbose error reporting and disk reads.' => 'Uitgebreide foutrapportage en schijfleesbewerkingen inschakelen.',
  'This software sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.' => 'Deze software heeft zichzelf een testverzoek gestuurd dat was gecomprimeerd met "Content-Encoding: gzip", maar ontving andere bytes dan het verzond.',
  'Mail object address hash keys are now generated automatically.' => 'Hash-sleutels voor e-mailobjectadressen worden nu automatisch gegenereerd.',
  'Too many arguments: expected one key and one value.' => 'Te veel argumenten: één sleutel en één waarde verwacht.',
  'Settings History' => 'Instellingengeschiedenis',
  'Opcode' => 'Opcode',
  'To update these %d value(s), edit your PHP configuration file.' => array(
    'Om deze %d-waarde bij te werken, bewerk uw PHP-configuratiebestand.',
    'Om deze %d-waarden bij te werken, bewerk uw PHP-configuratiebestand.',
  ),
  'Auth provider config must be unlocked before editing' => 'Authenticatieproviderconfiguratie moet worden ontgrendeld voordat deze kan worden bewerkt',
  'Enable Recaptcha' => 'Recaptcha inschakelen',
  'Prefix cookie with "%s"' => 'Cookie voorvoegen met "%s"',
  'The configuration option "%s" is not recognized. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.' => 'De configuratieoptie "%s" wordt niet herkend. Het kan verkeerd gespeld zijn, of het kan bestaan hebben in een oudere versie van de software. Het heeft geen effect en moet worden gecorrigeerd of verwijderd.',
  'You can rebuild the search index while the server is running.' => 'U kunt de zoekindex opnieuw opbouwen terwijl de server draait.',
  'Migrated option "%s" from file to database config.' => 'Optie "%s" gemigreerd van bestand naar databaseconfiguratie.',
  'PHP Documentation' => 'PHP-documentatie',
  'Your webserver produced an unexpected response.' => 'Uw webserver heeft een onverwacht antwoord geproduceerd.',
  'Unable to determine the version number of "%s".' => 'Kan het versienummer van "%s" niet bepalen.',
  'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless @{config:auth.email-domains} is nonempty.' => 'Indien waar, moeten e-mailadressen worden geverifieerd (door op een koppeling in een e-mail te klikken) voordat een gebruiker kan aanmelden. Standaard is verificatie optioneel, tenzij @{config:auth.email-domains} niet leeg is.',
  'PHP OPcache Documentation' => 'PHP OPcache-documentatie',
  'Daemons Are Not Running' => 'Daemons draaien niet',
  'Cluster: Databases' => 'Cluster: databases',
  'No Messages' => 'Geen berichten',
  'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.' => 'Voettekstitem met index "%s" is onjuist: elk item moet een woordenboek zijn dat een voettekstitem beschrijft.',
  'None of the caches on this page can be cleared.' => 'Geen van de caches op deze pagina kan worden gewist.',
  'Require email verification before a user can log in.' => 'E-mailverificatie vereisen voordat een gebruiker kan inloggen.',
  'Master' => 'Primair',
  'A Troublesome Encounter!' => 'Een lastige situatie!',
  'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => 'Het indexeringsalgoritme voor de volledige-tekstzoekindex is bijgewerkt en de index moet opnieuw worden opgebouwd. Totdat u de index opnieuw opbouwt, zal globaal zoeken (en andere volledige-tekstzoekopdrachten) niet correct functioneren.',
  'Maximum taskmaster daemon pool size.' => 'Maximale grootte van de taskmaster-daemonpool.',
  'Replica' => 'Replica',
  'Use Public Replies (Less Secure)' => 'Openbare antwoorden gebruiken (minder veilig)',
  'MySQL password to use when connecting to the database.' => 'MySQL-wachtwoord om te gebruiken bij het verbinden met de database.',
  'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'' => 'Als een variabele niet beschikbaar is (bijvoorbeeld %%m verschijnt in het bestandsformaat maar het verzoek is geen Conduit-verzoek), wordt deze weergegeven als \'-\'',
  'CSRF HMAC keys are now managed automatically.' => 'CSRF HMAC-sleutels worden nu automatisch beheerd.',
  'Database Status' => 'Databasestatus',
  'The request body that was received began:' => 'De ontvangen verzoektekst begon met:',
  'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s' => 'Waarde voor optie "%s" (van type "%s") moet in JSON worden opgegeven, maar de invoer kon niet worden gedecodeerd: %s',
  'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.' => 'Databasehost "%s" heeft een geconfigureerde clusterstatus die niet overeenkomt met de status op deze host ("%s"). Voer `bin/storage partition` uit om de lokale status naar het cluster te committen. Deze host is mogelijk gestart met een verouderde configuratie.',
  'Normally, this software issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, an interstitial page will be shown instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => 'Normaal gesproken geeft deze software HTTP-omleidingen na een succesvolle POST. Dit kan het moeilijk maken om zaken te debuggen die plaatsvinden tijdens het verwerken van de POST, omdat dienst- en profileringsinformatie verloren gaat. Door deze configuratieoptie in te stellen, wordt een tussenpagina weergegeven in plaats van automatisch om te leiden, zodat u dienst- en profileringsinformatie kunt bekijken. Het maakt de gebruikerservaring ook verschrikkelijk, dus u moet dit alleen inschakelen bij het debuggen.',
  'Largest' => 'Grootste',
  'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.

If you are running a cluster, this limit applies separately to each instance of `phd`. For example, if this limit is set to `4` and you have three hosts running daemons, the effective global limit will be 12.

After changing this value, you must restart the daemons. Most configuration changes are picked up by the daemons automatically, but pool sizes can not be changed without a restart.' => 'Maximaal aantal taskmaster-daemons dat tegelijk kan draaien. Dit verhogen kan de maximale doorvoer van de taakwachtrij vergroten. De pool schaalt automatisch terug wanneer deze niet wordt gebruikt.

Als u een cluster draait, geldt deze limiet afzonderlijk voor elke instantie van `phd`. Als deze limiet bijvoorbeeld is ingesteld op `4` en u drie hosts hebt die daemons draaien, is de effectieve globale limiet 12.

Na het wijzigen van deze waarde moet u de daemons herstarten. De meeste configuratiewijzigingen worden automatisch opgepikt door de daemons, maar poolgroottes kunnen niet worden gewijzigd zonder herstart.',
  'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.' => 'Uw versie van MySQL (op databasehost "%s") ondersteunt geen configuratie van een stopwoordenbestand. U kunt geen zoekresultaten vinden voor veelvoorkomende woorden.',
  'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'Uw PHP-configuratie selecteert een onjuiste tijdzone. Selecteer een geldige tijdzone.',
  '%s deleted this configuration entry (again?).' => '%s heeft deze configuratie-invoer verwijderd (opnieuw?).',
  'There is some deprecated code found in the code-base.' => 'Er is verouderde code gevonden in de codebase.',
  'Unresolved Setup Issues' => 'Onopgeloste configuratieproblemen',
  'Server Timezone Not Configured' => 'Servertijdzone niet geconfigureerd',
  'The following regex is malformed and cannot be used: %s' => 'De volgende regex is onjuist gevormd en kan niet worden gebruikt: %s',
  'Individual application reply handler domains have been removed. Configure a reply domain with "%s".' => 'Individuele antwoordhandler-domeinen per toepassing zijn verwijderd. Configureer een antwoorddomein met "%s".',
  'Preflight' => 'Preflight',
  'Install these %d PHP extension(s):' => array(
    'Installeer deze PHP-uitbreiding',
    'Installeer deze PHP-uitbreidingen',
  ),
  'Missing \'%s\' Binary' => 'Ontbrekend binair bestand \'%s\'',
  'Charset' => 'Tekenset',
  '\'%s\' or \'%s\' binary not found or Imagemagick is not installed.' => 'Binair bestand \'%s\' of \'%s\' niet gevonden of Imagemagick is niet geïnstalleerd.',
  'By default, this software generates unique reply-to addresses and sends a
separate email to each recipient when you enable reply handling. This is more
secure than using "From" to establish user identity, but can mean users may
receive multiple emails when they are on mailing lists. Instead, you can use a
single, non-unique reply to address and authenticate users based on the "From"
address by setting this to \'true\'. This trades away a little bit of security
for convenience, but it\'s reasonable in many installs. Object interactions are
still protected using hashes in the single public email address, so objects
can not be replied to blindly.' => 'Standaard genereert deze software unieke antwoordadressen en stuurt een
afzonderlijke e-mail naar elke ontvanger wanneer u antwoordverwerking inschakelt. Dit is
veiliger dan het gebruik van "Van" om de gebruikersidentiteit vast te stellen, maar kan betekenen dat gebruikers
meerdere e-mails ontvangen wanneer ze op mailinglijsten staan. In plaats daarvan kunt u een
enkel, niet-uniek antwoordadres gebruiken en gebruikers authenticeren op basis van het "Van"-
adres door dit op \'true\' in te stellen. Dit ruilt een beetje beveiliging in
voor gemak, maar het is redelijk in veel installaties. Objectinteracties worden
nog steeds beschermd met hashes in het enkele openbare e-mailadres, dus objecten
kunnen niet blindelings worden beantwoord.',
  'The framable public feed is no longer supported.' => 'De insluitbare openbare feed wordt niet langer ondersteund.',
  'A random, unique string which identifies the request.' => 'Een willekeurige, unieke tekenreeks die het verzoek identificeert.',
  'Auth provider config can be edited without unlocking' => 'Authenticatieproviderconfiguratie kan worden bewerkt zonder ontgrendeling',
  'Disable unsafe option "%s" in PHP configuration.' => 'Schakel de onveilige optie "%s" uit in de PHP-configuratie.',
  '%s Day(s)' => array(
    '%s dag',
    '%s dagen',
  ),
  'PHP version: %s' => 'PHP-versie: %s',
  'No search servers are configured.' => 'Er zijn geen zoekservers geconfigureerd.',
  'DarkConsole is a development and profiling tool built into the web interface. You should leave it disabled unless you are developing or debugging %s.

Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.

DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole is een ontwikkelings- en profileringshulpmiddel dat is ingebouwd in de webinterface. U moet het uitgeschakeld laten tenzij u %s ontwikkelt of debugt.

Zodra u DarkConsole activeert voor de installatie, **moet u het inschakelen voor uw account voordat het daadwerkelijk op pagina\'s verschijnt.** U kunt dit doen in Instellingen > Ontwikkelaarsinstellingen.

DarkConsole laat mogelijk gevoelige gegevens zien (zoals zoekopdachten, stacktraces en configuratie), dus u moet het over het algemeen niet inschakelen in productie.',
  'This key is too long for utf8mb4.' => 'Deze sleutel is te lang voor utf8mb4.',
  'Expected Character Set' => 'Verwachte tekenset',
  'Repository Servers' => 'Repositoryservers',
  'Format for the HTTP access log. Use `%s` to set the path. Available variables are:' => 'Formaat voor het HTTP-toegangslogboek. Gebruik `%s` om het pad in te stellen. Beschikbare variabelen zijn:',
  'Skipping obsolete option: %s' => 'Verouderde optie overslaan: %s',
  'This schema can use a better collation.' => 'Dit schema kan een betere sortering gebruiken.',
  'Install Pygments to Improve Syntax Highlighting' => 'Installeer Pygments om syntaxismarkering te verbeteren',
  'Sessions now expire and are garbage collected rather than having an arbitrary concurrency limit.' => 'Sessies verlopen nu en worden opgeruimd door garbage collection in plaats van een willekeurige gelijktijdigheidslimiet te hebben.',
  'Logo Image' => 'Logobeeld',
  'Really Clear Cache' => 'Cache echt wissen',
  'Unexpected \'%s\' Behavior' => 'Onverwacht \'%s\'-gedrag',
  'Mail thread IDs are now generated automatically.' => 'E-mailthread-ID\'s worden nu automatisch gegenereerd.',
  'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the %s configuration value \'%s\' to specify one.' => 'Uw configuratie specificeert geen servertijdzone. U kunt de PHP-configuratiewaarde \'%s\' of de %s-configuratiewaarde \'%s\' instellen om er een op te geven.',
  'Enable HTTP Strict Transport Security (HSTS).' => 'HTTP Strict Transport Security (HSTS) inschakelen.',
  'OVERRIDDEN' => 'OVERSCHREVEN',
  'This server has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => 'Deze server heeft %s beschikbaar in %s, maar het binaire bestand is afgesloten met een foutcode bij uitvoering als %s. Controleer of het correct is geïnstalleerd.',
  'Users can configure a URI pattern to open files in a text editor. The URI must use a protocol on this whitelist.' => 'Gebruikers kunnen een URI-patroon configureren om bestanden in een teksteditor te openen. De URI moet een protocol gebruiken dat op deze toelatingslijst staat.',
  'Config' => 'Configuratie',
  'Transaction mail is now always sent with "Precedence: bulk" to improve deliverability.' => 'Transactie-e-mail wordt nu altijd verzonden met "Precedence: bulk" om de afleverbaarheid te verbeteren.',
  'Retention Policy' => 'Bewaarbeleid',
  'Without \'%s\', this software can not test for the availability of other binaries.' => 'Zonder \'%s\' kan deze software niet testen of andere binaire bestanden beschikbaar zijn.',
  'HTTP Basic Auth Not Configured' => 'HTTP-basisauthenticatie niet geconfigureerd',
  'Whitelist 1.2.*.*' => 'Toelatingslijst 1.2.*.*',
  'Highlight httpd.conf as "apacheconf".' => 'httpd.conf markeren als "apacheconf".',
  'Database Value' => 'Databasewaarde',
  'US Mountain (MDT)' => 'US Mountain (MDT)',
  'This option has been replaced with `ui.logo`, which provides more flexible configuration options.' => 'Deze optie is vervangen door `ui.logo`, dat flexibelere configuratieopties biedt.',
  'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.

Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.

To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.

To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:

%s
(You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)' => 'Databasehost "%s" gebruikt het ingebouwde stopwoordbestand voor het bouwen van zoekindexen. Dit kan de zoekfunctie minder bruikbaar maken.

Stopwoorden zijn veelvoorkomende woorden die niet geïndexeerd zijn en dus niet doorzoekbaar zijn. Het standaard stopwoordbestand bevat ongeveer 500 woorden, waaronder diverse woorden waarnaar u waarschijnlijk wilt zoeken, zoals \'various\', \'likely\', \'wish\' en \'zero\'.

Om de zoekfunctie nuttiger te maken, kunt u een alternatief stopwoordbestand met minder woorden gebruiken. Als u zich geen zorgen maakt over het zoeken naar veelvoorkomende woorden, kunt u deze waarschuwing negeren. Als u later Elasticsearch wilt configureren, kunt u deze waarschuwing ook negeren: dit stopwoordbestand is alleen van invloed op MySQL fulltext-indexen.

Om een ander stopwoordbestand te kiezen, voegt u dit toe aan uw %s-bestand (in de sectie %s) en herstart u vervolgens %s:

%s 
(U kunt ook een ander bestand gebruiken als u dat liever hebt. Het hierboven voorgestelde bestand bevat ongeveer 50 van de meest voorkomende Engelse woorden.)',
  'Rebuild Search Index' => 'Zoekindex opnieuw opbouwen',
  'This User-Agent will be used for most outgoing HTTP requests. When unset, the base URI will be used, with a " %s/1.0" suffix.' => 'Deze User-Agent wordt gebruikt voor de meeste uitgaande HTTP-verzoeken. Indien niet ingesteld, wordt de basis-URI gebruikt met het achtervoegsel " %s/1.0".',
  'Do not install this software on an instance class with burstable CPU.' => 'Installeer deze software niet op een instantieklasse met burstable CPU.',
  'Real' => 'Echt',
  'Partition: %s' => 'Partitie: %s',
  'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => 'Dit is een overschrijvingslijst van reguliere expressies waarmee u kunt kiezen als welke taal bestanden worden gemarkeerd. Als uw projecten bepaalde regels hebben over bestandsnamen of ongebruikelijke of dubbelzinnige taalextensies gebruiken, kunt u hier een toewijzing maken. Dit is een geordend woordenboek van reguliere expressies die worden getest tegen de bestandsnaam. Ze moeten verwijzen naar een expliciete taal als tekenreekswaarde, of een numerieke index in de vastgelegde groepen als geheel getal.',
  'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.

Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies @{config:auth.require-email-verification}.

You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.' => 'U kunt toegestane e-mailadressen beperken tot bepaalde domeinen (zoals `uwbedrijf.com`) door hier een lijst van toegestane domeinen in te stellen.

Gebruikers mogen zich alleen registreren met e-mailadressen bij een van de domeinen, en kunnen alleen nieuwe e-mailadressen toevoegen voor deze domeinen. Als u dit configureert, impliceert dit @{config:auth.require-email-verification}.

U moet de `@` weglaten bij domeinen. Merk op dat het domein exact moet overeenkomen. Als u `uwbedrijf.com` toestaat, staat dat `jan@uwbedrijf.com` toe maar wijst `jan@mail.uwbedrijf.com` af.',
  'Show unresolved issues with setup and configuration.' => 'Onopgeloste problemen met installatie en configuratie weergeven.',
  'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and this software does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.

Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.

You may be able to resolve this issue by updating this server, since a newer version of the software is likely to be able to parse the newer version string.

If updating the software does not fix this, you can report the issue to the upstream so we can adjust the parser.

If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => 'Kan het versienummer van "%s" niet bepalen. Meestal betekent dit dat het programma onlangs zijn versieformaattekenreeks heeft gewijzigd en deze software nog niet weet hoe de nieuwe moet worden geparsed, maar het kan ook aangeven dat u een zeer oud (of defect) binair bestand hebt.

Omdat we het versienummer niet kunnen bepalen, worden controles op minimum- en bekende slechte versies overgeslagen, dus we kunnen mogelijk een incompatibel binair bestand niet detecteren.

U kunt dit probleem mogelijk oplossen door deze server bij te werken, aangezien een nieuwere versie van de software waarschijnlijk de nieuwere versietekenreeks kan parsen.

Als het bijwerken van de software dit niet oplost, kunt u het probleem melden aan de upstream zodat we de parser kunnen aanpassen.

Als u er zeker van bent dat u een recente versie van "%s" geïnstalleerd hebt en correct werkt, is het meestal veilig om deze waarschuwing te negeren.',
  'For conduit, the Conduit method which was invoked.' => 'Voor Conduit, de Conduit-methode die is aangeroepen.',
  'The configuration option \'%s\' is not set.' => 'De configuratieoptie \'%s\' is niet ingesteld.',
  'Locale code of command-line locale.' => 'De landcode van de opdrachtregellandcode.',
  'Stop Before HTTP Redirect' => 'Stoppen vóór HTTP-omleiding',
  'Developer / Debugging' => 'Ontwikkelaar / Debugging',
  'You have enabled Imagemagick in your config, but the \'%s\' or \'%s\' binary is not in the webserver\'s %s. Disable imagemagick or make it available to the webserver.' => 'U hebt Imagemagick ingeschakeld in uw configuratie, maar het binaire bestand \'%s\' of \'%s\' staat niet in de %s van de webserver. Schakel Imagemagick uit of maak het beschikbaar voor de webserver.',
  'Remove PHP %s' => 'PHP %s verwijderen',
  'Missing' => 'Ontbreekt',
  'Classes must match to compare schemata!' => 'Klassen moeten overeenkomen om schema\'s te vergelijken!',
  'Set the URI where this software is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => 'Stel de URI in waar deze software is geïnstalleerd. Dit instellen verbetert de beveiliging door te voorkomen dat cookies op andere domeinen worden ingesteld, en stelt daemons in staat e-mails te verzenden met koppelingen die het juiste domein hebben.',
  'Elasticsearch Index Not Found' => 'Elasticsearch-index niet gevonden',
  'Unit test value.' => 'Unittestwaarde.',
  'A daemon is running as user %s, but daemons should be running as %s.

Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.' => 'Een daemon draait als gebruiker %s, maar daemons zouden moeten draaien als %s.

Pas de configuratie-instelling %s aan of herstart de daemons. Daemons zouden moeten proberen als de juiste gebruiker te draaien bij herstart.',
  'Missing Key' => 'Ontbrekende sleutel',
  'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.

There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed this software on, you might set this value to %s.

You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to this software which make it different from normal workloads with respect to this setting.

To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:

%s
If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => 'Databasehost "%s" is geconfigureerd met een zeer kleine %s (%s). Dit kan slechte databaseprestaties en uitputting van vergrendelingen veroorzaken.

Er zijn geen vaste regels voor het instellen van een geschikte waarde, maar een redelijk startpunt voor een standaardinstallatie is zoiets als 40%% van het totale geheugen op de machine. Als u bijvoorbeeld 4GB RAM hebt op de machine waarop u deze software hebt geïnstalleerd, kunt u deze waarde instellen op %s.

U kunt meer lezen over deze optie in de MySQL-documentatie om u te helpen een beslissing te nemen over hoe u deze voor uw gebruikssituatie configureert. Er zijn geen specifieke zorgen voor deze software die het anders maken dan normale werkbelastingen met betrekking tot deze instelling.

Om de instelling aan te passen, voegt u zoiets als dit toe aan uw %s-bestand (in de %s-sectie), waarbij u %s vervangt door een geschikte waarde voor uw host en gebruikssituatie. Herstart vervolgens %s:

%s
Als u tevreden bent met de huidige instelling, kunt u deze configuratiewaarschuwing veilig negeren.',
  'Expected Nullable' => 'Verwachte nullable',
  'Syntax highlighting is supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.

To install Pygments, visit [[ https://pygments.org/ | pygments.org ]] and follow the download and install instructions.

Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.

After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Syntaxismarkering wordt standaard ondersteund voor een paar talen, maar u kunt Pygments (een syntaxismarkeringshulpmiddel van derden) installeren om ondersteuning te bieden voor veel meer talen.

Om Pygments te installeren, bezoek [[ https://pygments.org/ | pygments.org ]] en volg de download- en installatie-instructies.

Zodra Pygments is geïnstalleerd, schakelt u deze optie (`pygments.enabled`) in om Pygments te gebruiken bij het markeren van broncode.

Nadat u Pygments hebt geïnstalleerd en ingeschakeld, zou nieuw aangemaakte broncode (zoals diffs en pastes) correct moeten worden gemarkeerd. Mogelijk moet u caches wissen om eerder bestaande broncode te laten markeren. Zie [[ %s | Caches beheren ]] voor instructies over het beheren van caches.',
  'Disable SSH log.' => 'SSH-logboek uitschakelen.',
  'Set a string this software should use to prefix cookie names.' => 'Stel een tekenreeks in die deze software moet gebruiken als voorvoegsel voor cookienamen.',
  'No databases have any issues.' => 'Geen databases hebben problemen.',
  'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make this service redirect HTTP requests to HTTPS.

Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.

IMPORTANT: A request is identified as HTTP or HTTPS by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.

If you configure clustering, note that this setting is ignored by intracluster requests.' => 'Als de webserver reageert op zowel HTTP- als HTTPS-verzoeken maar u wilt dat gebruikers alleen via HTTPS verbinden, kunt u dit instellen op `true` om deze dienst HTTP-verzoeken naar HTTPS te laten omleiden.

Normaal gesproken moet u uw server gewoon configureren om geen HTTP-verkeer te accepteren, maar deze instelling kan nuttig zijn als u oorspronkelijk HTTP gebruikte en nu bent overgestapt naar HTTPS maar oude koppelingen niet wilt breken, of als uw webserver achter een load balancer zit die HTTPS-verbindingen beëindigt en u daar redelijkerwijs geen gedetailleerder gedrag kunt configureren.

BELANGRIJK: Een verzoek wordt geïdentificeerd als HTTP of HTTPS door de PHP-variabele `%s` te onderzoeken. Als u Apache/mod_php draait, wordt dit waarschijnlijk automatisch correct voor u ingesteld, maar als u als CGI/FCGI draait (bijv. via nginx of lighttpd), moet u uw webserver configureren zodat deze de waarde correct doorgeeft op basis van het verbindingstype.

Als u clustering configureert, merk op dat deze instelling wordt genegeerd door intraclusterverzoeken.',
  'Option "%s" is of type "%s", but the configured value is not an integer.' => 'Optie "%s" is van het type "%s", maar de geconfigureerde waarde is geen geheel getal.',
  'Notifications no longer have a dedicated debugging mode.' => 'Meldingen hebben niet langer een speciale debugmodus.',
  'Daemon Running as Wrong User' => 'Daemon draait als verkeerde gebruiker',
  'This software sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".

Your webserver is configured incorrectly and large parts of this software will not work until this issue is corrected.

(This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'Deze software heeft zichzelf een testverzoek gestuurd met een HTTP GET-parameter, maar de parameter werd niet verzonden. Verzond "%s" met waarde "%s", ontving "%s" met waarde "%s".

Uw webserver is incorrect geconfigureerd en grote delen van deze software zullen niet werken totdat dit probleem is opgelost.

(Dit probleem kan worden veroorzaakt door een ontbrekende "QSA" in uw RewriteRule.)',
  'MySQL is not in strict mode (on host "%s"), but using strict mode is recommended.' => 'MySQL staat niet in strikte modus (op host "%s"), maar het gebruik van strikte modus wordt aanbevolen.',
  'This ancient extension point has been replaced with other mechanisms, including "AphrontSite".' => 'Dit oude uitbreidingspunt is vervangen door andere mechanismen, waaronder "AphrontSite".',
  'You enabled Elasticsearch but the index does not exist.' => 'U hebt Elasticsearch ingeschakeld maar de index bestaat niet.',
  '%s Not Found' => '%s niet gevonden',
  'Write SSH error log here.' => 'SSH-foutenlogboek hier schrijven.',
  'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.' => 'Uw `%s`-configuratie bevat een poortnummer, maar dit gebruik is verouderd. Plaats in plaats daarvan het poortnummer in `%s`.',
  'Elasticsearch Index Schema Mismatch' => 'Elasticsearch-indexschema komt niet overeen',
  'Column has Wrong Autoincrement' => 'Kolom heeft verkeerde autoincrement',
  'Enable the debugging console.' => 'De debugconsole inschakelen.',
  'Specify the configuration key you want to set.' => 'Geef de configuratiesleutel op die u wilt instellen.',
  'Memory Limit Restricts File Uploads' => 'Geheugenlimiet beperkt bestandsuploads',
  'Cache Entries' => 'Cache-items',
  'Unknown column type "%s"!' => 'Onbekend kolomtype "%s"!',
  'The minimum supported version of Git on the server is %s, which was released in %s. In older versions, the Git server may not be able to escape arguments with the "--" operator. Note: your users do not require a particular version of Git.' => 'De minimaal ondersteunde versie van Git op de server is %s, die is uitgebracht in %s. In oudere versies kan de Git-server mogelijk geen argumenten escapen met de "--"-operator. Opmerking: uw gebruikers hebben geen specifieke versie van Git nodig.',
  'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.' => 'De geconfigureerde locatie voor het opslaan van geüploade bestanden op schijf ("%s") bestaat niet, of is niet leesbaar of schrijfbaar. Controleer of de map bestaat en leesbaar en schrijfbaar is door de webserver.',
  'Notifications User Guide: Setup and Configuration' => 'Gebruikershandleiding meldingen: installatie en configuratie',
  'This software sent itself a test request with the "X-Setup-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:

%s

Something is misconfigured or otherwise mangling responses.' => 'Deze software heeft zichzelf een testverzoek gestuurd met de "X-Setup-SelfCheck"-header en verwachtte een geldig JSON-antwoord terug te krijgen. In plaats daarvan begint het antwoord met:

%s

Er is iets verkeerd geconfigureerd of antwoorden worden anderszins verminkt.',
  'Key is Too Long' => 'Sleutel is te lang',
  '\'%s\' Missing' => '\'%s\' ontbreekt',
  'Configure database read replicas.' => 'Database-leesreplica\'s configureren.',
  'Elasticsearch Misconfigured' => 'Elasticsearch verkeerd geconfigureerd',
  'Amazon S3 is Only Partially Configured' => 'Amazon S3 is slechts gedeeltelijk geconfigureerd',
  '<none>' => '<geen>',
  'Customize favicons.' => 'Favicons aanpassen.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).' => 'Het PATH-onderdeel \'%s\' (dat wordt omgezet naar het absolute pad \'%s\') is niet bruikbaar omdat het niet doorzoekbaar is (het \'%s\'-rechtbit is niet ingesteld).',
  'No Repositories' => 'Geen repository\'s',
  'The configuration key "%s" is already defined in the database. The value from the database will override the value in local storage.' => 'De configuratiesleutel "%s" is al gedefinieerd in de database. De waarde uit de database overschrijft de waarde in de lokale opslag.',
  '%s deleted this configuration entry.' => '%s heeft deze configuratie-invoer verwijderd.',
  'After rebuilding repository identities, run this command to clear this setup warning:' => 'Voer na het opnieuw opbouwen van repository-identiteiten dit commando uit om deze configuratiewaarschuwing te wissen:',
  'The timezone this software should use by default.' => 'De tijdzone die deze software standaard moet gebruiken.',
  'Mail is now always delivered by the daemons.' => 'E-mail wordt nu altijd afgeleverd door de daemons.',
  'Request has bad "Host" header.' => 'Verzoek heeft een onjuiste "Host"-header.',
  'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.' => 'Deze versie van Subversion heeft een bug waarbij `%s` niet werkt voor bestanden die zijn toegevoegd in rN (Subversion-probleem #2873), opgelost in 1.7.2.',
  'Elasticsearch is not reachable as configured.' => 'Elasticsearch is niet bereikbaar zoals geconfigureerd.',
  'Key has Wrong Uniqueness' => 'Sleutel heeft verkeerde uniciteit',
  'Determines whether or not basic account information is editable.' => 'Bepaalt of basisaccountinformatie bewerkbaar is.',
  'Get a local configuration value.' => 'Een lokale configuratiewaarde ophalen.',
  'By default, this software allows users to add multi-factor authentication to
their accounts, but does not require it. By enabling this option, you can
force all users to add at least one authentication factor before they can use
their accounts.

Administrators can query a list of users who do not have MFA configured in
{nav People}:

  - **[[ %s | %s ]]**' => 'Standaard staat deze software gebruikers toe om meerfactorauthenticatie toe te voegen aan
hun accounts, maar vereist dit niet. Door deze optie in te schakelen, kunt u
alle gebruikers dwingen ten minste één authenticatiefactor toe te voegen voordat ze
hun accounts kunnen gebruiken.

Beheerders kunnen een lijst opvragen van gebruikers die geen MFA hebben geconfigureerd in
{nav Personen}:

  - **[[ %s | %s ]]**',
  'The base URI for this install is not configured. Many major features will not work properly until you configure it.' => 'De basis-URI voor deze installatie is niet geconfigureerd. Veel belangrijke functies werken niet correct totdat u deze configureert.',
  'Unexpected \'diff\' Behavior' => 'Onverwacht \'diff\'-gedrag',
  'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.' => 'Het binaire bestand \'%s\' op dit systeem vertoont onverwacht gedrag: het werd verwacht af te sluiten met een niet-nul foutcode bij het ontvangen van verschillende bestanden, maar deed dat niet.',
  'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.' => 'U kunt een probleem negeren als u het niet wilt oplossen, of van plan bent het later op te lossen. Genegeerde problemen verschijnen niet op elke pagina maar worden nog steeds weergegeven in de lijst met openstaande problemen.',
  'Enter value in JSON.' => 'Voer waarde in als JSON.',
  'Migrated option "%s" from file to local config.' => 'Optie "%s" gemigreerd van bestand naar lokale configuratie.',
  'Shenanigans' => 'Kattenkwaad',
  'The path for local repositories does not exist, or is not readable by the webserver.' => 'Het pad voor lokale repository\'s bestaat niet, of is niet leesbaar door de webserver.',
  'Option "%s" only supports numbers, letters, underscores and (for some reason) the dollar sign. This is necessary to avoid potential MySQL/MariaDB escape issues. Remove the invalid characters.' => 'Optie "%s" ondersteunt alleen cijfers, letters, underscores en (om de een of andere reden) het dollarteken. Dit is nodig om mogelijke MySQL/MariaDB-escapeproblemen te voorkomen. Verwijder de onjuiste tekens.',
  'Inbound and outbound mail is now configured with "cluster.mailers".' => 'Inkomende en uitgaande e-mail wordt nu geconfigureerd met "cluster.mailers".',
  'Config \'%s\' Invalid' => 'Configuratie \'%s\' onjuist',
  'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.' => array(
    
    array(
      
      array(
        'Een databasehost ("%s") en deze webhost ("%s") verschillen meer dan 60 seconden van mening over de huidige tijd (absolute afwijking is %s seconde). Controleer of de huidige tijd overal correct is ingesteld.',
        'Een databasehost ("%s") en deze webhost ("%s") verschillen meer dan 60 seconden van mening over de huidige tijd (absolute afwijking is %s seconden). Controleer of de huidige tijd overal correct is ingesteld.',
      ),
    ),
  ),
  'No Recipient Hints' => 'Geen ontvangerhints',
  'Sample 0.1%% of requests.' => '0,1%% van de verzoeken samplen.',
  'No Issues' => 'Geen problemen',
  'No Caches to Reset' => 'Geen caches om te wissen',
  'No Base URI' => 'Geen basis-URI',
  'Really Clear Cache?' => 'Cache echt wissen?',
  'Allow Any Host (Insecure!)' => 'Elke host toestaan (onveilig!)',
  'Collectors with custom policies are highlighted. Use %s to change retention policies.' => 'Collectors met aangepast beleid zijn gemarkeerd. Gebruik %s om het bewaarbeleid te wijzigen.',
  'Multi-Factor Required' => 'Meerfactor vereist',
  'Host: %s' => 'Host: %s',
  'Update %s' => '%s bijwerken',
  'Reply hints are no longer shown in mail.' => 'Antwoordhints worden niet langer weergegeven in e-mail.',
  'Profile every request (slow)' => 'Elk verzoek profileren (langzaam)',
  'Resolved Issue' => 'Opgelost probleem',
  'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.' => 'Lokaal pad "%s" is niet schrijfbaar. Dit bestand moet schrijfbaar zijn zodat "bin/config" configuratie kan opslaan.',
  'This option generally did not prove useful. Resource hash keys are now managed automatically.' => 'Deze optie bleek over het algemeen niet nuttig. Bronhash-sleutels worden nu automatisch beheerd.',
  'Schema Status' => 'Schemastatus',
  'To update these %d value(s), run these command(s) from the command line:' => array(
    'Om deze waarde bij te werken, voer deze  opdracht uit vanaf de opdrachtregel:',
    'Om deze waarden bij te werken, voer deze  opdrachten uit vanaf de opdrachtregel:',
  ),
  'If you want to use a single mailbox for reply mail, you can use this
and set a common prefix for generated reply addresses. It will
make use of the fact that a mail-address such as
`devtools+D123+1hjk213h@example.com` will be delivered to the `devtools`
user\'s mailbox. Set this to the left part of the email address and it will be
prepended to all generated reply addresses.

For example, if you want to use `devtools@example.com`, this should be set
to `devtools`.' => 'Als u een enkele mailbox wilt gebruiken voor antwoorde-mail, kunt u dit gebruiken
en een gemeenschappelijk voorvoegsel instellen voor gegenereerde antwoordadressen. Het maakt
gebruik van het feit dat een e-mailadres zoals
`devtools+D123+1hjk213h@example.com` wordt afgeleverd in de mailbox van de `devtools`-
gebruiker. Stel dit in op het linkerdeel van het e-mailadres en het wordt
voor alle gegenereerde antwoordadressen geplaatst.

Als u bijvoorbeeld `devtools@example.com` wilt gebruiken, moet dit worden ingesteld
op `devtools`.',
  'Cache Storage' => 'Cache-opslag',
  'At least one daemon is currently running as the wrong user.' => 'Ten minste één daemon draait momenteel als de verkeerde gebruiker.',
  'Data Type' => 'Gegevenstype',
  'Better Character Set Available' => 'Betere tekenset beschikbaar',
  'Small MySQL "%s"' => 'Kleine MySQL "%s"',
  'Value for option "%s" must be an integer.' => 'Waarde voor optie "%s" moet een geheel getal zijn.',
  'The request path, or request target.' => 'Het verzoekpad, of verzoekdoel.',
  '%s Active / %s Total' => '%s actief / %s totaal',
  'Automatic' => 'Automatisch',
  'Connection Error' => 'Verbindingsfout',
  'Options relating to authentication.' => 'Opties met betrekking tot authenticatie.',
  'Migrating file source...' => 'Bestandsbron migreren...',
  'Autoincrement' => 'Autoincrement',
  'Dark' => 'Donker',
  'GZip Compression May Not Be Enabled' => 'GZip-compressie is mogelijk niet ingeschakeld',
  'Typeahead strategies are now managed automatically.' => 'Typeahead-strategieën worden nu automatisch beheerd.',
  'Return to Open Issue List' => 'Terug naar lijst met openstaande problemen',
  'Activate read-only mode for maintenance or disaster recovery.' => 'Alleen-lezenmodus activeren voor onderhoud of noodherstel.',
  'PHP also loaded these %s configuration file(s):' => array(
    'PHP heeft ook dit configuratiebestand geladen:',
    'PHP heeft ook deze configuratiebestand geladen:',
  ),
  'Reading value from stdin...' => 'Waarde lezen van stdin...',
  'Option "%s" is of type "%s", but the value you provided is not a valid JSON list: when providing a set from the command line, specify it as a list of values in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'Optie "%s" is van het type "%s", maar de waarde die u hebt opgegeven is geen geldige JSON-lijst: wanneer u een set opgeeft vanaf de opdrachtregel, specificeer deze als een lijst van waarden in JSON. Mogelijk moet u de waarde escapen voor uw shell (bijvoorbeeld: \'["a", "b", ...]\').',
  'To rebuild the index, run this command:' => 'Voer dit commando uit om de index opnieuw op te bouwen:',
  'This software can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 

For instructions on installing and enabling Pygments, see the %s configuration option.

If you do not want to install Pygments, you can ignore this issue.' => 'Deze software kan standaard een paar talen markeren, maar het installeren en inschakelen van Pygments (een syntaxismarkeringshulpmiddel van derden) voegt syntaxismarkering toe voor veel meer talen.

Zie de configuratieoptie %s voor instructies over het installeren en inschakelen van Pygments.

Als u Pygments niet wilt installeren, kunt u dit probleem negeren.',
  'Disable Recaptcha' => 'Recaptcha uitschakelen',
  'Sample every request (slow).' => 'Elk verzoek samplen (langzaam).',
  'The daemons are not running, background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds) can not be performed.

Use %s to start daemons. See %s for more information.' => 'De daemons draaien niet, achtergrondverwerking (inclusief het verzenden van e-mail, het opnieuw opbouwen van zoekindexen, het importeren van commits, het opruimen van oude gegevens en het uitvoeren van builds) kan niet worden uitgevoerd.

Gebruik %s om daemons te starten. Zie %s voor meer informatie.',
  'Unsafe MySQL "local_infile" Setting Enabled' => 'Onveilige MySQL "local_infile"-instelling ingeschakeld',
  'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of the software.

You can configure Webhooks in Herald.

To resolve this issue, remove all URIs from "feed.http-hooks".' => 'De optie "feed.http-hooks" is verouderd ten gunste van Webhooks. Deze optie wordt verwijderd in een toekomstige versie van de software.

U kunt Webhooks configureren in Herald.

Om dit probleem op te lossen, verwijder alle URI\'s uit "feed.http-hooks".',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' does not exist.' => 'Het PATH-onderdeel \'%s\' (dat wordt omgezet naar het absolute pad \'%s\') is niet bruikbaar omdat \'%s\' niet bestaat.',
  'The search index algorithm has been updated and the index needs be rebuilt.' => 'Het zoekindex-algoritme is bijgewerkt en de index moet opnieuw worden opgebouwd.',
  'The current PHP configuration has these %d value(s):' => array(
    'De huidige PHP-configuratie heeft deze waarde:',
    'De huidige PHP-configuratie heeft deze waarden:',
  ),
  'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or adjust configuration.' => 'Databasehost "%s" is geconfigureerd als primair, maar repliceert een andere host. Dit is gevaarlijk en kan gegevens verminken of vernietigen. Alleen replica\'s zouden moeten repliceren. Stop replicatie op de host of pas de configuratie aan.',
  'This issue is currently ignored, and does not show a global warning.' => 'Dit probleem wordt momenteel genegeerd en geeft geen globale waarschuwing weer.',
  'Cache Status' => 'Cachestatus',
  'You have at least one repository configured which uses this version control system. It will not work without the VCS binary.' => 'U hebt ten minste één repository geconfigureerd die dit versiebeheersysteem gebruikt. Het werkt niet zonder het VCS-binaire bestand.',
  'Done. Migrated %d keys.' => array(
    'Gereed. %d sleutel gemigreerd.',
    'Gereed. %d sleutels gemigreerd.',
  ),
  'The remote IP.' => 'Het externe IP-adres.',
  'Disable Prototypes' => 'Prototypes uitschakelen',
  'US West (PDT)' => 'US West (PDT)',
  'Deleted \'%s\' from %s configuration.' => '\'%s\' verwijderd uit %s-configuratie.',
  'Run Normally' => 'Normaal uitvoeren',
  'Default key for HMAC digests where the key is not important (i.e., the hash itself is secret). You can change this if you want (to any other string), but doing so will break existing sessions and CSRF tokens. This option is deprecated. Newer code automatically manages HMAC keys.' => 'Standaardsleutel voor HMAC-digests waarbij de sleutel niet belangrijk is (d.w.z. de hash zelf is geheim). U kunt dit wijzigen als u wilt (naar een andere tekenreeks), maar dit zal bestaande sessies en CSRF-tokens breken. Deze optie is verouderd. Nieuwere code beheert HMAC-sleutels automatisch.',
  'Highlight %s as PHP.' => '%s markeren als PHP.',
  'MySQL is Using Default Stopword File' => 'MySQL gebruikt standaard stopwoordenbestand',
  'Pagespeed is enabled, but should be disabled.' => 'Pagespeed is ingeschakeld, maar moet worden uitgeschakeld.',
  'Paths to additional phutil libraries to load.' => 'Paden naar aanvullende phutil-bibliotheken om te laden.',
  'User Guide: Prototype Applications' => 'Gebruikershandleiding: prototype-toepassingen',
  'If you enable this, linked YouTube videos will be embedded inline. This has mild security implications (you\'ll leak referrers to YouTube) and is pretty silly (but sort of awesome).' => 'Als u dit inschakelt, worden gekoppelde YouTube-video\'s ingebed ingesloten. Dit heeft milde beveiligingsimplicaties (u lekt referrers naar YouTube) en is vrij onnozel (maar wel leuk).',
  'Library' => 'Bibliotheek',
  'The \'%s\' binary could not be located or executed.' => 'Het binaire bestand \'%s\' kon niet worden gevonden of uitgevoerd.',
  'Show Email Preferences Link' => 'Koppeling naar e-mailvoorkeuren weergeven',
  'Confirm before redirecting so DarkConsole can be examined.' => 'Bevestigen vóór omleiding zodat DarkConsole kan worden onderzocht.',
  'If you enable `%s`, this software uses "From" to authenticate users. You can
additionally enable this setting to try to authenticate with \'Reply-To\'. Note
that this is completely spoofable and insecure (any user can set any \'Reply-To\'
address) but depending on the nature of your install or other deliverability
conditions this might be okay. Generally, you can\'t do much more by spoofing
Reply-To than be annoying (you can write but not read content). But this is
still **COMPLETELY INSECURE**.' => 'Als u `%s` inschakelt, gebruikt deze software "Van" om gebruikers te authenticeren. U kunt
daarnaast deze instelling inschakelen om te proberen te authenticeren met \'Reply-To\'. Merk op
dat dit volledig te vervalsen en onveilig is (elke gebruiker kan elk \'Reply-To\'-
adres instellen), maar afhankelijk van de aard van uw installatie of andere aflever-
voorwaarden kan dit acceptabel zijn. Over het algemeen kunt u niet veel meer doen door
Reply-To te vervalsen dan vervelend zijn (u kunt schrijven maar geen inhoud lezen). Maar dit is
nog steeds **VOLLEDIG ONVEILIG**.',
  'Define a cluster by providing a whitelist of host addresses that are part of the cluster.

Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.

Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.

When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.' => 'Definieer een cluster door een toelatingslijst van hostadressen op te geven die deel uitmaken van het cluster.

Hosts op deze toelatingslijst hebben speciale bevoegdheden. Deze hosts mogen beveiligingsregels omzeilen, en het verkeerd configureren van deze lijst kan uw installatie minder veilig maken. Zie **[[ %s | %s ]]** voor meer informatie.

Definieer een lijst van CIDR-blokken die alle hosts in het cluster op de toelatingslijst plaatsen en geen extra hosts. Zie de onderstaande voorbeelden voor details.

Wanneer clusteradressen zijn gedefinieerd, wijzen hosts ook verzoeken af naar interfaces die niet op de toelatingslijst staan.',
  'On host "%s", MySQL is configured with a small "%s" (%d), which may cause some large writes to fail. The recommended minimum value for this setting is "%d".' => 'Op host "%s" is MySQL geconfigureerd met een kleine "%s" (%d), waardoor sommige grote schrijfbewerkingen kunnen mislukken. De aanbevolen minimumwaarde voor deze instelling is "%d".',
  'Config option "%s" is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like "%s".' => 'Configuratieoptie "%s" is onjuist. De tijdzone-identificatie moet een geldige tijdzone-identificatie zijn die door PHP wordt herkend, zoals "%s".',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not a directory.' => 'Het PATH-onderdeel \'%s\' (dat wordt omgezet naar het absolute pad \'%s\') is niet bruikbaar omdat \'%s\' geen map is.',
  'Configure %s' => '%s configureren',
  'Normally, pages are profiled only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.

Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).

Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.

NOTE: You must install XHProf for profiling to work.' => 'Normaal gesproken worden pagina\'s alleen geprofileerd wanneer dit expliciet wordt aangevraagd via DarkConsole. Het kan echter nuttig zijn om sommige pagina\'s automatisch te profileren.

Stel deze optie in op een positief geheel getal N om automatisch 1 / N pagina\'s te profileren. Als u het bijvoorbeeld instelt op 1, wordt elke pagina geprofileerd, terwijl het instellen op 1000 1 pagina per 1000 verzoeken profileert (d.w.z. 0,1%% van de verzoeken).

Aangezien profilering langzaam is en veel gegevens genereert, moet u dit in productie instellen op 0 (om het uit te schakelen) of op een groot getal (om een paar samples te verzamelen, als u geïnteresseerd bent in gegevens om uiteindelijk te bekijken). In ontwikkeling kan het nuttig zijn om het in te stellen op 1 om prestatieproblemen te debuggen.

OPMERKING: U moet XHProf installeren om profilering te laten werken.',
  'Missing "zip" Extension' => 'Ontbrekende "zip"-uitbreiding',
  'Set the language list which appears in dropdowns.' => 'De taallijst instellen die in vervolgkeuzemenu\'s verschijnt.',
  'Inverse' => 'Omgekeerd',
  'Deprecated Config Source' => 'Verouderde configuratiebron',
  'Indefinite' => 'Onbeperkt',
  'Edge Types' => 'Verbindingstypen',
  'Disable access log.' => 'Toegangslogboek uitschakelen.',
  'Logo configuration is not valid: value must be a dictionary.' => 'Logoconfiguratie is niet geldig: waarde moet een woordenboek zijn.',
  'Really ignore this setup issue?' => 'Dit configuratieprobleem echt negeren?',
  'Config option "%s" is invalid. The URI must start with "%s" or "%s".' => 'Configuratieoptie "%s" is onjuist. De URI moet beginnen met "%s" of "%s".',
  'Set default user-agent to "%s"' => 'Standaard user-agent instellen op "%s"',
  'Options relating to syntax highlighting source code.' => 'Opties met betrekking tot syntaxismarkering van broncode.',
  'Allow HTTP' => 'HTTP toestaan',
  'Simple Example' => 'Eenvoudig voorbeeld',
  'Auth Config Unlocked' => 'Authenticatieconfiguratie ontgrendeld',
  'Synchronized' => 'Gesynchroniseerd',
  'No REMOTE_ADDR is available, so this server cannot determine the origin address for requests. This will prevent the software from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'Er is geen REMOTE_ADDR beschikbaar, dus deze server kan het bronadres voor verzoeken niet bepalen. Dit voorkomt dat de software belangrijke beveiligingscontroles uitvoert. Dit betekent meestal dat u een fout hebt in uw preamble-script. Raadpleeg de documentatie (%s) en controleer of het script correct is geschreven.',
  'Access key for Amazon EC2.' => 'Toegangssleutel voor Amazon EC2.',
  '%s Component Unusable' => '%s-onderdeel onbruikbaar',
  'Unsynchronized' => 'Niet gesynchroniseerd',
  'Available search engines are now automatically discovered at runtime.' => 'Beschikbare zoekmachines worden nu automatisch ontdekt tijdens runtime.',
  'Key for HMAC digests.' => 'Sleutel voor HMAC-digests.',
  'Enable applications which are still under development.' => 'Toepassingen inschakelen die nog in ontwikkeling zijn.',
  'The request duration, in microseconds.' => 'De verzoekduur, in microseconden.',
  'Amazon S3 region where your S3 bucket is located. When you specify a region, you should also specify a corresponding endpoint with `amazon-s3.endpoint`. You can find a list of available regions and endpoints in the AWS documentation.' => 'Amazon S3-regio waar uw S3-bucket zich bevindt. Wanneer u een regio opgeeft, moet u ook een bijbehorend eindpunt opgeven met `amazon-s3.endpoint`. U kunt een lijst van beschikbare regio\'s en eindpunten vinden in de AWS-documentatie.',
  'Disabled Application' => 'Uitgeschakelde toepassing',
  'MySQL %s Not Supported' => 'MySQL %s niet ondersteund',
  'Option "%s" is of type "%s", but the current value ("%s") is not among the set of valid values: %s.' => 'Optie "%s" is van het type "%s", maar de huidige waarde ("%s") behoort niet tot de set geldige waarden: %s.',
  'Auth Application' => 'Authenticatie-toepassing',
  'The environmental variable %s is empty. This server will not be able to execute some commands.' => 'De omgevingsvariabele %s is leeg. Deze server kan sommige opdrachten niet uitvoeren.',
  '%s.%s (%s)' => '%s.%s (%s)',
  'There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the user account that gets associated with VCS commits.' => 'Er is een nieuwe indirectielaag tussen de tekenreeksen die verschijnen als VCS-auteurs en committers (zoals "Jan Ontwikkelaar <jano@grootbedrijf.com>") en het gebruikersaccount dat wordt gekoppeld aan VCS-commits.',
  'All Differential fields are now managed through the configuration option "%s". Use that option to configure which fields are shown.' => 'Alle Differential-velden worden nu beheerd via de configuratieoptie "%s". Gebruik die optie om te configureren welke velden worden weergegeven.',
  'Use HSTS' => 'HSTS gebruiken',
  'The current MySQL configuration has these %d value(s):' => array(
    'De huidige MySQL-configuratie heeft deze waarde:',
    'De huidige MySQL-configuratie heeft deze waarden:',
  ),
  'Show "To:" and "Cc:" footer hints in email.' => '"Aan:"- en "Cc:"-voetteksthints weergeven in e-mail.',
  'Write SSH log here.' => 'SSH-logboek hier schrijven.',
  'Migrate From "feed.http-hooks" to Webhooks' => 'Migreren van "feed.http-hooks" naar Webhooks',
  'Partitioning and replication are now managed in primary configuration.' => 'Partitionering en replicatie worden nu beheerd in de primaire configuratie.',
  'You can find more information about configuring OPcache in the %s.' => 'U kunt meer informatie vinden over het configureren van OPcache in de %s.',
  'PHP Timezone' => 'PHP-tijdzone',
  'This option is not recognized. It may be misspelled.' => 'Deze optie wordt niet herkend. Het kan verkeerd gespeld zijn.',
  'Internal.' => 'Intern.',
  'Advanced Settings' => 'Geavanceerde instellingen',
  'SSH log format.' => 'SSH-logboekformaat.',
  'After installing new PHP extensions, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'Na het installeren van nieuwe PHP-uitbreidingen, <strong>herstart alles zodat de wijzigingen van kracht worden</strong>. Zie %s in de documentatie voor hulp bij het herstarten van alles.',
  'Default address used when generating mail.' => 'Standaardadres dat wordt gebruikt bij het genereren van e-mail.',
  'By default, this software serves files from the same domain the application is served from. This is convenient, but presents a security risk.

You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => 'Standaard serveert deze software bestanden vanaf hetzelfde domein als de toepassing. Dit is handig, maar vormt een beveiligingsrisico.

U moet een CDN of alternatief bestandsdomein configureren om dit risico te beperken. Het configureren van een CDN verbetert ook de prestaties. Zie [[ %s | %s ]] voor instructies.',
  'Learn more about locked and hidden options.' => 'Meer informatie over vergrendelde en verborgen opties.',
  'Default address used as a "From" or "To" email address when an address is
required but no meaningful address is available.

If you configure inbound mail, you generally do not need to set this:
the software will automatically generate and use a suitable mailbox on the
inbound mail domain.

Otherwise, this option should be configured to point at a valid mailbox which
discards all mail sent to it. If you point it at an invalid mailbox, mail sent
by the software and some mail sent by users will bounce. If you point it at a
real user mailbox, that user will get a lot of mail they don\'t want.

For further guidance, see **[[ %s | %s ]]** in the documentation.' => 'Standaardadres dat wordt gebruikt als "Van"- of "Aan"-e-mailadres wanneer een adres
vereist is maar geen zinvol adres beschikbaar is.

Als u inkomende e-mail configureert, hoeft u dit over het algemeen niet in te stellen:
de software genereert en gebruikt automatisch een geschikt postvak op het
inkomende e-maildomein.

Anders moet deze optie worden geconfigureerd om te verwijzen naar een geldig postvak dat
alle ontvangen e-mail weggooit. Als u het naar een onjuist postvak verwijst, zal e-mail verzonden
door de software en sommige e-mail verzonden door gebruikers terugkaatsen. Als u het naar een
echt gebruikerspostvak verwijst, krijgt die gebruiker veel ongewenste e-mail.

Zie **[[ %s | %s ]]** in de documentatie voor verdere begeleiding.',
  'You must start the daemons to send email, rebuild search indexes, and do other background processing.' => 'U moet de daemons starten om e-mail te verzenden, zoekindexen opnieuw op te bouwen en andere achtergrondverwerking uit te voeren.',
  'After editing the PHP configuration, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'Na het bewerken van de PHP-configuratie, <strong>herstart alles zodat de wijzigingen van kracht worden</strong>. Zie %s in de documentatie voor hulp bij het herstarten van alles.',
  'Repository Status' => 'Repositorystatus',
  'Do Not Use HSTS' => 'HSTS niet gebruiken',
  'List all configuration keys.' => 'Alle configuratiesleutels weergeven.',
  'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".' => 'Aanpassing van e-mailonderwerpvoorvoegsels per toepassing wordt niet langer direct ondersteund. Voorvoegsels en andere tekenreeksen kunnen worden aangepast met "translation.override".',
  'Configuration key "%s" is of type "%s". Specify it in JSON.' => 'Configuratiesleutel "%s" is van het type "%s". Geef het op in JSON.',
  'This will only affect the current web frontend. Daemons and any other web frontends may continue to use older, cached code from their opcache.' => 'Dit heeft alleen invloed op de huidige webfrontend. Daemons en andere webfrontends kunnen oudere, gecachte code uit hun opcache blijven gebruiken.',
  'Configure real-time notifications.' => 'Realtime-meldingen configureren.',
  'Surplus Key' => 'Overtollige sleutel',
  'Cluster Setup' => 'Clusterinstallatie',
  'Obsolete Configuration Option "%s"' => 'Verouderde configuratieoptie "%s"',
  'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'Het binaire bestand \'%s\' kon niet worden gevonden. Stel de %s-omgevingsvariabele van de webserver in om de map op te nemen waar het zich bevindt, of voeg die map toe aan \'%s\' in de configuratie.',
  'You can disable the email preference link in emails if users prefer smaller
emails.' => 'U kunt de koppeling naar e-mailvoorkeuren in e-mails uitschakelen als gebruikers kleinere
e-mails prefereren.',
  'Expected Autoincrement' => 'Verwachte autoincrement',
  'MySQL is configured (on host "%s") to only index words with at least %d characters.' => 'MySQL is geconfigureerd (op host "%s") om alleen woorden met ten minste %d tekens te indexeren.',
  'Too many arguments: expected only a configuration key when using "--stdin".' => 'Te veel argumenten: alleen een configuratiesleutel verwacht bij gebruik van "--stdin".',
  'Global customization of monospaced fonts is no longer supported.' => 'Globale aanpassing van monospace-lettertypen wordt niet langer ondersteund.',
  'Major Web/Database Clock Skew' => 'Grote web-/databaseklokafwijking',
  'No repository cluster services are configured.' => 'Er zijn geen repositoryclusterdiensten geconfigureerd.',
  'Syntax Highlighting' => 'Syntaxismarkering',
  'This schema is not expected to exist.' => 'Dit schema wordt niet verwacht te bestaan.',
  'View status information for databases, caches, repositories, and other services.' => 'Statusinformatie voor databases, caches, repository\'s en andere diensten bekijken.',
  'This configuration value is defined in these %d configuration source(s): %s.' => array(
    'Deze configuratiewaarde is gedefinieerd in deze configuratiebron: %2$s.',
    'Deze configuratiewaarde is gedefinieerd in deze %d configuratiebronnen: %s.',
  ),
  'Specify a configuration key to get.' => 'Geef een configuratiesleutel op om op te halen.',
  'Can not compare two missing schemata!' => 'Kan twee ontbrekende schema\'s niet vergelijken!',
  'Key on Wrong Columns' => 'Sleutel op verkeerde kolommen',
  'S3 Partially Configured' => 'S3 gedeeltelijk geconfigureerd',
  'Migrate file-based configuration to more modern storage.' => 'Bestandsgebaseerde configuratie migreren naar modernere opslag.',
  'Skipping config of source type %s...' => 'Configuratie van brontype %s overslaan...',
  'Reply addresses can either be private (more secure) or public (which works better with mailing lists).' => 'Antwoordadressen kunnen privé (veiliger) of openbaar (werkt beter met mailinglijsten) zijn.',
  'This server received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with this software. You should disable the module.' => 'Deze server heeft een "X-Mod-Pagespeed"- of "X-Page-Speed"-HTTP-header ontvangen bij dit verzoek, wat aangeeft dat u "mod_pagespeed" hebt ingeschakeld op deze server. Deze module is niet compatibel met deze software. U moet de module uitschakelen.',
  'No profiling' => 'Geen profilering',
  'PHID Types' => 'PHID-typen',
  'Wrote configuration key "%s" to database storage.' => 'Configuratiesleutel "%s" geschreven naar databaseopslag.',
  'The environmental variable %s does not contain %s. You have enabled pygments, which requires %s to be available in your %s variable.' => 'De omgevingsvariabele %s bevat geen %s. U hebt pygments ingeschakeld, waarvoor %s beschikbaar moet zijn in uw %s-variabele.',
  'Use Pygments' => 'Pygments gebruiken',
  'Amazon Web Services' => 'Amazon Web Services',
  'Customized settings for applications.' => 'Aangepaste instellingen voor toepassingen.',
  'US Central (CDT)' => 'US Central (CDT)',
  'Config option "%s" is invalid. The URI must contain a dot ("%s"), like "%s", not just a bare name like "%s". Some web browsers will not set cookies on domains with no TLD.' => 'Configuratieoptie "%s" is onjuist. De URI moet een punt ("%s") bevatten, zoals "%s", niet alleen een kale naam zoals "%s". Sommige webbrowsers stellen geen cookies in op domeinen zonder TLD.',
  '%s Active' => '%s actief',
  'Subschemata Have Warnings' => 'Subschema\'s hebben waarschuwingen',
  'Require Administrators to Approve Accounts' => 'Beheerders verplichten accounts goed te keuren',
  'Set %s in your PHP configuration to at least 32MB to support large file uploads.' => 'Stel %s in uw PHP-configuratie in op ten minste 32MB om grote bestandsuploads te ondersteunen.',
  'Configure integration with AWS (EC2, SES, S3, etc.).' => 'Integratie met AWS (EC2, SES, S3, enz.) configureren.',
  'The system sudo user.' => 'De systeem-sudo-gebruiker.',
  'You can disable the "To:" and "Cc:" footers in mail if users prefer smaller
messages.' => 'U kunt de "Aan:"- en "Cc:"-voetteksten in e-mail uitschakelen als gebruikers kleinere
berichten prefereren.',
  'MySQL %s Mode Not Set' => 'MySQL %s-modus niet ingesteld',
  'If you are using Apache, your server may be configured with "SetInputFilter DEFLATE". This directive destructively mangles requests and emits them with "Content-Length" and "Content-Encoding" headers that no longer match the data in the request body.' => 'Als u Apache gebruikt, is uw server mogelijk geconfigureerd met "SetInputFilter DEFLATE". Deze richtlijn verminkt verzoeken destructief en zendt ze uit met "Content-Length"- en "Content-Encoding"-headers die niet langer overeenkomen met de gegevens in de verzoektekst.',
  'Options for platform developers, including debugging.' => 'Opties voor platformontwikkelaars, inclusief debugging.',
  'A component of the configured PATH can not be used by the webserver: %s' => 'Een onderdeel van het geconfigureerde PATH kan niet worden gebruikt door de webserver: %s',
  'Allow a single mailbox to be used for all replies.' => 'Toestaan dat een enkel postvak wordt gebruikt voor alle antwoorden.',
  'Use specific endpoint' => 'Specifiek eindpunt gebruiken',
  'Configure Recaptcha captchas.' => 'Recaptcha-captcha\'s configureren.',
  'Report this Issue to the Upstream' => 'Dit probleem melden aan de upstream',
  'Disable SSH error log.' => 'SSH-foutenlogboek uitschakelen.',
  'Options relating to PHD (daemons).' => 'Opties met betrekking tot PHD (daemons).',
  'Repos' => 'Repo\'s',
  'Database configuration.' => 'Databaseconfiguratie.',
  'Option "%s" is of type "%s", but the current value ("%s") is not a known, concrete subclass of base class "%s". Valid selections are: %s.' => 'Optie "%s" is van het type "%s", maar de huidige waarde ("%s") is geen bekende, concrete subklasse van basisklasse "%s". Geldige selecties zijn: %s.',
  'Databases' => 'Databases',
  'Basic Example' => 'Basisvoorbeeld',
  '%s In / %s Out' => '%s in / %s uit',
  'Adapter class to use to transmit mail to the MTA. The default uses
PHPMailer, which will invoke "mail". This is appropriate if mail actually
works on your host, but if you haven\'t configured mail it may not be so great.
A number of other mailers are available (e.g., SES, SendGrid, SMTP, Sendmail,
custom mailers). This option is deprecated in favor of \'cluster.mailers\'.' => 'Adapterklasse om e-mail naar de MTA te verzenden. De standaard gebruikt PHPMailer, dat "mail" aanroept. Dit is geschikt als mail daadwerkelijk werkt op uw host, maar als u e-mail niet hebt geconfigureerd is het mogelijk niet zo goed. Er zijn een aantal andere mailers beschikbaar (bijv. SES, SendGrid, SMTP, sendmail,
aangepaste mailers). Deze optie is verouderd ten gunste van \'cluster.mailers\'.',
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
production instance were both in operation.' => 'Met deze optie kunt u voorkomen dat deze dienst gegevens naar de meeste externe diensten stuurt: het schakelt e-mail, SMS, repository-mirroring, externe builds, Doorkeeper-schrijfbewerkingen en webhooks uit.

Deze optie is bedoeld om een instantie te exporteren, kopiëren, importeren en uit te voeren in een testomgeving zonder gebruikers te beïnvloeden. Als u bijvoorbeeld migreert naar nieuwe hardware, kunt u eerst een testmigratie uitvoeren met deze vlag ingesteld, controleren of alles werkt, en vervolgens later een productie-omschakeling doen met meer vertrouwen en minder verstoring.

Zonder gebruik te maken van deze vlag om de tijdelijke testomgeving te dempen, zouden gebruikers dubbele e-mail ontvangen gedurende de tijd dat de testinstantie en de oude productie-instantie beide in bedrijf waren.',
  'Whitelist Specific Addresses' => 'Specifieke adressen op toelatingslijst plaatsen',
  'Other Version Information' => 'Overige versie-informatie',
  'The mapping from VCS users to %s users has changed and must be rebuilt.' => 'De toewijzing van VCS-gebruikers naar %s-gebruikers is gewijzigd en moet opnieuw worden opgebouwd.',
  'Authentication configuration is currently unlocked. Once you finish configuring authentication, you should lock it.' => 'Authenticatieconfiguratie is momenteel ontgrendeld. Zodra u klaar bent met het configureren van authenticatie, moet u deze vergrendelen.',
  'Use `%s` instead of this option.' => 'Gebruik `%s` in plaats van deze optie.',
  'You have not configured any authentication providers yet. You should add a provider (like username/password, LDAP, or GitHub OAuth) so users can register and log in. You can add and configure providers using the Auth Application.' => 'U hebt nog geen authenticatieproviders geconfigureerd. U moet een provider toevoegen (zoals gebruikersnaam/wachtwoord, LDAP of GitHub OAuth) zodat gebruikers zich kunnen registreren en inloggen. U kunt providers toevoegen en configureren met de authenticatie-toepassing.',
  'Run the storage upgrade script to upgrade databases (host "%s" is out of date). Missing patches: %s.' => 'Voer het opslagupgradescript uit om databases te upgraden (host "%s" is verouderd). Ontbrekende patches: %s.',
  'Resource deflation is now managed automatically.' => 'Brondeflatie wordt nu automatisch beheerd.',
  'MySQL' => 'MySQL',
  'Databases are created in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing extensions and using namespaces to separate multiple sandbox datasets.' => 'Databases worden aangemaakt in een naamruimte, die standaard \'phabricator\' is -- de Differential-database heet bijvoorbeeld standaard \'phabricator_differential\'. U kunt deze naamruimte wijzigen als u wilt. Normaal gesproken moet u dit niet doen, tenzij u uitbreidingen ontwikkelt en naamruimten gebruikt om meerdere sandbox-datasets te scheiden.',
  'Serious business' => 'Serieuze zaken',
  'External loaders have been replaced. Extend `%s` to implement new PHID and handle types.' => 'Externe laders zijn vervangen. Breid `%s` uit om nieuwe PHID- en handletypen te implementeren.',
  'Authenticating users based on "Reply-To" is no longer supported.' => 'Authenticatie van gebruikers op basis van "Reply-To" wordt niet langer ondersteund.',
  'Option "%s" is of type "%s", but the configured value is not a list.' => 'Optie "%s" is van het type "%s", maar de geconfigureerde waarde is geen lijst.',
  'Cluster instance name, if configured.' => 'Clusterinstantienaam, indien geconfigureerd.',
  'You likely need to fix your preamble script so REMOTE_ADDR is no longer empty.' => 'U moet waarschijnlijk uw preamble-script repareren zodat REMOTE_ADDR niet langer leeg is.',
  'Unknown Config' => 'Onbekende configuratie',
  'Detected %s serious issue(s) with the schemata.' => array(
    '%s ernstig probleem gedetecteerd met de schema\'s.',
    '%s ernstige problemen gedetecteerd met de schema\'s.',
  ),
  'Daemons Not Running' => 'Daemons draaien niet',
  'MySQL username to use when connecting to the database.' => 'MySQL-gebruikersnaam om te gebruiken bij het verbinden met de database.',
  'Secret key for Amazon EC2.' => 'Geheime sleutel voor Amazon EC2.',
  'These %d configuration value(s) are related:' => array(
    'Deze configuratiewaarde is gerelateerd:',
    'Deze configuratiewaarden zijn gerelateerd:',
  ),
  'This software sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.

This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => 'Deze software heeft zichzelf een verzoek gestuurd met "Accept-Encoding: gzip", maar ontving een ongecomprimeerd antwoord.

Dit kan erop wijzen dat uw webserver niet is geconfigureerd om antwoorden te comprimeren. Als dat zo is, moet u compressie inschakelen. Compressie kan de prestaties aanzienlijk verbeteren, vooral voor clients met minder bandbreedte.',
  'If you have multiple %s environments (like a development/staging environment and a production environment), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'Als u meerdere %s-omgevingen hebt (zoals een ontwikkel-/stagingomgeving en een productieomgeving), stel hier de productieomgeving-URI in zodat e-mails en andere duurzame URI\'s altijd worden gegenereerd met koppelingen die naar de productieomgeving verwijzen. Indien niet ingesteld, is de standaardwaarde `%s`. De meeste installaties hoeven deze optie niet in te stellen.',
  'Names must match to compare schemata!' => 'Namen moeten overeenkomen om schema\'s te vergelijken!',
  'Users can make requests to other services from service hosts in some circumstances (for example, by creating a repository with a remote URL).

This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.

This option defines a list of netblocks which requests will never be issued to. Generally, you should list all private IP space here.' => 'Gebruikers kunnen in sommige omstandigheden verzoeken doen aan andere diensten vanaf diensthosts (bijvoorbeeld door een repository aan te maken met een externe url).

Dit kan een beveiligingskwetsbaarheid vormen als diensten op hetzelfde subnet opdrachten accepteren of privé-informatie onthullen via niet-geauthenticeerde HTTP GET, op basis van het bron-IP-adres. Met name alle hosts in EC2 hebben toegang tot zo\'n dienst.

Deze optie definieert een lijst van netblokken waarnaar nooit verzoeken worden verzonden. Over het algemeen moet u hier alle privé-IP-ruimte vermelden.',
  'Core Settings' => 'Kerninstellingen',
  'Your MySQL server is configured with the "local_infile" option enabled. This option allows an attacker who finds an SQL injection hole to escalate their attack by copying files from the webserver into the database with "LOAD DATA LOCAL INFILE" queries, then reading the file content with "SELECT" queries.

You should disable this option in your %s file, in the %s section:

%s' => 'Uw MySQL-server is geconfigureerd met de optie "local_infile" ingeschakeld. Deze optie stelt een aanvaller die een SQL-injectielek vindt in staat hun aanval te escaleren door bestanden van de webserver naar de database te kopiëren met "LOAD DATA LOCAL INFILE"-query\'s, en vervolgens de bestandsinhoud te lezen met "SELECT"-query\'s.

U moet deze optie uitschakelen in uw %s-bestand, in de %s-sectie:

%s',
  'Setup Checks' => 'Configuratiecontroles',
  'This system has an unpatched version of Bash with a severe, widely disclosed vulnerability.' => 'Dit systeem heeft een niet-gepatchte versie van Bash met een ernstige, breed bekendgemaakte kwetsbaarheid.',
  'Keys' => 'Sleutels',
  'No Auth Providers' => 'Geen authenticatieproviders',
  'Missing Required Extensions' => 'Ontbrekende vereiste uitbreidingen',
  'This option has been migrated to the "Auth" application. Your old configuration is still in effect, but now stored in "Auth" instead of configuration. Going forward, you can manage authentication from the web UI.' => 'Deze optie is gemigreerd naar de "Auth"-toepassing. Uw oude configuratie is nog steeds van kracht, maar wordt nu opgeslagen in "Auth" in plaats van in de configuratie. Voortaan kunt u authenticatie beheren vanuit de webinterface.',
  'Provide a list of notification servers to enable real-time notifications.

For help setting up notification servers, see **[[ %s | %s ]]** in the
documentation.' => 'Geef een lijst van meldingsservers op om realtime-meldingen in te schakelen.

Zie **[[ %s | %s ]]** in de
documentatie voor hulp bij het instellen van meldingsservers.',
  'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.

This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.

Although it is normally difficult for an attacker to convince this software to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.

To disable this option, set: %s' => 'PHP is momenteel geconfigureerd om verzoeken te honoreren van elke MySQL-server waarmee het verbindt voor de inhoud van elk lokaal bestand.

Deze mogelijkheid ondersteunt MySQL "LOAD DATA LOCAL INFILE"-query\'s, maar geeft een kwaadaardige MySQL-server leestoegang tot de lokale schijf: de server kan de client vragen de inhoud van elk lokaal bestand te verzenden, en de client zal gehoorzamen.

Hoewel het normaal gesproken moeilijk is voor een aanvaller om deze software te overtuigen verbinding te maken met een kwaadaardige MySQL-server, moet u deze optie uitschakelen: deze mogelijkheid is onnodig en inherent gevaarlijk.

Om deze optie uit te schakelen, stel in: %s',
  'Activity "%s" is not currently marked as required, so there is no need to complete it.' => 'Handeling "%s" is momenteel niet gemarkeerd als vereist, dus het is niet nodig om deze te voltooien.',
  'To continue, resolve this problem and reload the page.' => 'Om door te gaan, los dit probleem op en herlaad de pagina.',
  'Wordmark' => 'Woordmerk',
  'WARNING: This is a prototype option and the description below is currently pure fantasy.

Switch the service to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => 'WAARSCHUWING: Dit is een prototype-optie en de onderstaande beschrijving is momenteel pure fantasie.

Schakel de dienst over naar alleen-lezenmodus. In deze modus kunnen gebruikers geen nieuwe gegevens schrijven. Normaal gesproken degradeert het cluster automatisch naar deze modus wanneer het detecteert dat de primaire database onbereikbaar is, maar u kunt het handmatig activeren om onderhoud uit te voeren of de configuratie te testen.',
  'Severe Security Vulnerability: Unpatched Bash' => 'Ernstige beveiligingskwetsbaarheid: niet-gepatchte Bash',
  'Force HTTPS' => 'HTTPS forceren',
  'This key is not expected to exist.' => 'Deze sleutel wordt niet verwacht te bestaan.',
  '%s.%s' => '%s.%s',
  '%s.%s.%s' => '%s.%s.%s',
  '%d related link(s):' => array(
    '%d gerelateerde koppeling:',
    '%d gerelateerde koppelingen:',
  ),
  'To rebuild identities, run this command:' => 'Voer dit commando uit om identiteiten opnieuw op te bouwen:',
  'Missing Repository Local Path' => 'Ontbrekend lokaal repositorypad',
  'An alternate resource map is no longer supported. Instead, use multiple maps. See T4222.' => 'Een alternatieve bronmap wordt niet langer ondersteund. Gebruik in plaats daarvan meerdere mappen. Zie T4222.',
  'Repository Services' => 'Repositorydiensten',
  'Inline comments are now always rendered with a limited amount of context.' => 'Ingebedde opmerkingen worden nu altijd weergegeven met een beperkte hoeveelheid context.',
  'Locked Configuration Option "%s" Has Database Value' => 'Vergrendelde configuratieoptie "%s" heeft databasewaarde',
  'Separate values with newlines or commas.' => 'Scheid waarden met nieuwe regels of komma\'s.',
  'Don\'t require email verification' => 'Geen e-mailverificatie vereisen',
  'Configuration key "%s" is unknown. Use "bin/config list" to list all known keys.' => 'Configuratiesleutel "%s" is onbekend. Gebruik "bin/config list" om alle bekende sleutels weer te geven.',
  'Alternate File Domain Not Configured' => 'Alternatief bestandsdomein niet geconfigureerd',
  'Unknown schema issue "%s"!' => 'Onbekend schemaprobleem "%s"!',
  'Embed Commons videos' => 'Commons-video\'s insluiten',
  'Your server is configured with \'%s\', which prevents this software from opening files it requires access to.

Disable this setting to continue.' => 'Uw server is geconfigureerd met \'%s\', wat voorkomt dat deze software bestanden opent waartoe het toegang nodig heeft.

Schakel deze instelling uit om door te gaan.',
  'Limit page execution time to debug hangs.' => 'Pagina-uitvoeringstijd beperken om vastlopers te debuggen.',
  'Base URI Not Configured' => 'Basis-URI niet geconfigureerd',
  'Cannot identify the version of the %s repository because the webserver does not trust it (more info on Task %s).
Try this system resolution:
sudo git config --system --add safe.directory %s' => 'Kan de versie van de %s-repository niet identificeren omdat de webserver deze niet vertrouwt (meer informatie in taak %s).
Probeer deze systeemoplossing:
sudo git config --system --add safe.directory %s',
  'Always Activate DarkConsole' => 'DarkConsole altijd activeren',
  'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.

This may mean the base URI is configured incorrectly. You must serve this software from a base URI with a dot (like "https://devtools.example.com"), not a bare domain (like "https://devtools/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.

This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.

Requests must include a valid "Host" header.' => 'Dit verzoek bevatte een onjuiste "Host"-header, met waarde "%s". Host-headers moeten een punt (".") bevatten, zoals "example.com". Dit is vereist zodat sommige browsers cookies kunnen instellen.

Dit kan betekenen dat de basis-URI incorrect is geconfigureerd. U moet deze software serveren vanaf een basis-URI met een punt (zoals "https://devtools.example.com"), niet een kaal domein (zoals "https://devtools/"). Als u een kaal domein probeert te gebruiken, wijzig uw configuratie om in plaats daarvan een volledig domein met een punt erin te gebruiken.

Dit kan ook betekenen dat uw webserver (of een ander netwerkapparaat, zoals een load balancer) de "Host"-header verminkt, of dat u een hulpmiddel of bibliotheek gebruikt om handmatig een verzoek te doen en de verkeerde "Host"-header instelt.

Verzoeken moeten een geldige "Host"-header bevatten.',
  'User Interface' => 'Gebruikersinterface',
  'No Schema Issues' => 'Geen schemaproblemen',
  'MySQL database hostname.' => 'MySQL-databasehostnaam.',
  'Obsolete Config' => 'Verouderde configuratie',
  'Sets the default color scheme.' => 'Stelt het standaard kleurenschema in.',
  'Clustering Introduction' => 'Introductie clustering',
  'By default, this software includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => 'Standaard bevat deze software wat smaaktekst in de gebruikersinterface, zoals een prompt om "Mee te wegen" in plaats van "Opmerking toevoegen" in Maniphest. Als u de voorkeur geeft aan meer traditionele UI-teksten zoals "Opmerking toevoegen", kunt u deze vlag instellen om de meeste extra smaak uit te schakelen.',
  'This software sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.

This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'Deze software heeft zichzelf een testverzoek gestuurd en verwachtte een kaal JSON-antwoord terug te krijgen. Het ontving een JSON-antwoord, maar het antwoord had extra witruimte aan het begin of einde.

Dit betekent meestal dat u een bestand hebt bewerkt en witruimtetekens hebt achtergelaten vóór de openings-%s-tag, of na een sluitende %s-tag. Verwijder eventuele voorafgaande witruimte en laat bij voorkeur sluitende tags weg.',
  'MySQL on this machine' => 'MySQL op deze machine',
  'No such configuration key \'%s\'! Use `%s` to list all keys.' => 'Configuratiesleutel \'%s\' bestaat niet! Gebruik `%s` om alle sleutels weer te geven.',
  'You can respond to various application events by installing listeners, which will receive callbacks when interesting things occur. Specify a list of classes which extend PhabricatorEventListener here.' => 'U kunt reageren op verschillende toepassingsgebeurtenissen door listeners te installeren, die callbacks ontvangen wanneer interessante dingen gebeuren. Geef hier een lijst op van klassen die PhabricatorEventListener uitbreiden.',
  'This install has a fatal setup error, access the web interface to view details and resolve it.' => 'Deze installatie heeft een onherstelbare configuratiefout, open de webinterface om details te bekijken en het op te lossen.',
  'Alternate domain to serve files from.' => 'Alternatief domein om bestanden vanaf te serveren.',
  'Your webserver is not forwarding credentials.' => 'Uw webserver stuurt aanmeldgegevens niet door.',
  'Default non-pygments syntax highlighter engine.' => 'Standaard niet-pygments syntaxismarkeringsengine.',
  'HTTP Parameter Types' => 'HTTP-parametertypen',
  'Mangled Webserver Response' => 'Verminkt webserverantwoord',
  'Setup issues to ignore.' => 'Configuratieproblemen om te negeren.',
  'Directory that the daemons should use to store log files.' => 'Map die de daemons moeten gebruiken om logbestanden op te slaan.',
  'Only allow registration from particular domains.' => 'Alleen registratie toestaan vanaf bepaalde domeinen.',
  'Subschemata have setup failures.' => 'Subschema\'s hebben configuratiefouten.',
  'No performance sampling.' => 'Geen prestatiesampling.',
  'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.

For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.

You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.

To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:

%s
' => 'Databasehost "%s" is geconfigureerd om de standaard minimale woordlengte van 4 te gebruiken bij het bouwen van zoekindexen. Dit betekent dat woorden van slechts 3 tekens niet worden geïndexeerd en niet kunnen worden doorzocht.

U kunt bijvoorbeeld geen zoekresultaten vinden voor woorden als \'SMS\', \'web\' of \'DOS\'.

U kunt deze instelling wijzigen naar 3 om deze woorden wel te laten indexeren. U kunt deze waarschuwing ook negeren als u zich geen zorgen maakt over het zoeken naar woorden van 3 letters. Als u later Elasticsearch wilt configureren, kunt u deze waarschuwing ook negeren: alleen de fulltext-zoekfunctie van MySQL wordt hierdoor beïnvloed.

Om de minimale woordlengte te verlagen naar 3, voegt u dit toe aan uw %s bestand (in de %s sectie) en herstart u vervolgens %s:

%s',
  '%s\'s home page' => 'Startpagina van %s',
  'Show installed extensions and modules.' => 'Geïnstalleerde uitbreidingen en modules weergeven.',
  'Opcode Cache' => 'Opcode-cache',
  'Specify a value to set the configuration key "%s" to, or use "--stdin" to read a value from stdin.' => 'Geef een waarde op om de configuratiesleutel "%s" op in te stellen, of gebruik "--stdin" om een waarde van stdin te lezen.',
  'ID of the SSH key used to authenticate the request.' => 'ID van de SSH-sleutel die is gebruikt om het verzoek te authenticeren.',
  'You can usually install a PHP extension using %s, %s, or %s. A common package name is %s. Try commands like these:' => 'U kunt een PHP-uitbreiding meestal installeren met %s, %s of %s. Een veelvoorkomende pakketnaam is %s. Probeer opdrachten zoals deze:',
  'US East (EDT)' => 'US East (EDT)',
  'The HTTP referrer.' => 'De HTTP-referrer.',
  'HTTP Parameters Not Transmitting' => 'HTTP-parameters worden niet verzonden',
  'Determines whether Wikimedia Commons videos get embedded.' => 'Bepaalt of Wikimedia Commons-video\'s worden ingesloten.',
  'Better Collation Available' => 'Betere sortering beschikbaar',
  'View "%s"' => '"%s" bekijken',
  'This setup issue has been resolved. ' => 'Dit configuratieprobleem is opgelost.',
  'Additional configuration options to hide.' => 'Extra configuratieopties om te verbergen.',
  'The logged-in username, if one is logged in.' => 'De ingelogde gebruikersnaam, als er iemand is ingelogd.',
  'Deprecated Code' => 'Verouderde code',
  'PHP date functions will emit a warning if they are called when no default
server timezone is configured.

Usually, you configure a default timezone in `php.ini` by setting the
configuration value `date.timezone`.

If you prefer, you can configure a default timezone here instead. To configure
a default timezone, select a timezone from the
[[ %s | PHP List of Supported Timezones ]].' => 'PHP-datumfuncties geven een waarschuwing als ze worden aangeroepen wanneer er geen standaard
servertijdzone is geconfigureerd.

Normaal gesproken configureert u een standaardtijdzone in `php.ini` door de
configuratiewaarde `date.timezone` in te stellen.

Als u wilt, kunt u hier in plaats daarvan een standaardtijdzone configureren. Om
een standaardtijdzone te configureren, selecteer een tijdzone uit de
[[ %s | PHP-lijst van ondersteunde tijdzones ]].',
  'No REMOTE_ADDR available' => 'Geen REMOTE_ADDR beschikbaar',
  'File storage in Amazon S3 has been partially configured, but you are missing some required settings. S3 will not be available to store files until you complete the configuration. Either configure S3 fully or remove the partial configuration.' => 'Bestandsopslag in Amazon S3 is gedeeltelijk geconfigureerd, maar u mist enkele vereiste instellingen. S3 is niet beschikbaar om bestanden op te slaan totdat u de configuratie voltooit. Configureer S3 volledig of verwijder de gedeeltelijke configuratie.',
  'The logged-in user PHID, if one is logged in.' => 'De PHID van de ingelogde gebruiker, als er iemand is ingelogd.',
  'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.

If you provide an instance identifier here (normally by injecting it with a `%s`), the server will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'WAARSCHUWING: Dit is een zeer geavanceerde optie, en alleen nuttig voor hostingproviders die multi-tenant clusters draaien.

Als u hier een instantie-identificatie opgeeft (normaal gesproken door deze te injecteren met een `%s`), geeft de server deze door aan subprocessen en commit-hooks in de `%s`-omgevingsvariabele.',
  'Version Information' => 'Versie-informatie',
  'The base URI for this install is not configured, and major features will not work properly until you configure it.

You should set the base URI to the URI you will use to access this server, like "https://devtools.example.com/".

Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).

Based on this request, it appears that the correct setting is:

%s

To configure the base URI, run the command shown below.' => 'De basis-URI voor deze installatie is niet geconfigureerd, en belangrijke functies werken niet correct totdat u deze configureert.

U moet de basis-URI instellen op de URI die u zult gebruiken om toegang te krijgen tot deze server, zoals "https://devtools.example.com/".

Voeg het protocol (http of https), de domeinnaam en het poortnummer toe als u een andere poort gebruikt dan 80 (http) of 443 (https).

Op basis van dit verzoek lijkt de juiste instelling te zijn:

%s

Voer het onderstaande commando uit om de basis-URI te configureren.',
  'HTTP Path Rewriting Incorrect' => 'HTTP-padherschrijving incorrect',
  'Surplus' => 'Overtollig',
  'Instance identifier for multi-tenant clusters.' => 'Instantie-identificatie voor multi-tenant clusters.',
  'Upgrade MySQL Schema' => 'MySQL-schema upgraden',
  'Unignore Setup Issue' => 'Configuratieprobleem niet meer negeren',
  'Automatically sample some fraction of requests.' => 'Automatisch een fractie van de verzoeken samplen.',
  'SSH log location.' => 'SSH-logboeklocatie.',
  'Arbitrarily large files are now supported. Consult the documentation for configuration details.' => 'Willekeurig grote bestanden worden nu ondersteund. Raadpleeg de documentatie voor configuratiedetails.',
  'Delete a local configuration value.' => 'Een lokale configuratiewaarde verwijderen.',
  'These paths get appended to your %s environment variable.' => 'Deze paden worden toegevoegd aan uw %s-omgevingsvariabele.',
  'Epoch timestamp.' => 'Epoch-tijdstempel.',
  'Option "%s" is dangerously long for a database prefix in MySQL/MariaDB. The current value is %d characters long. It should be less than %d to be safe for future changes.' => 'Optie "%s" is gevaarlijk lang voor een databasevoorvoegsel in MySQL/MariaDB. De huidige waarde is %d tekens lang. Het moet minder dan %d zijn om veilig te zijn voor toekomstige wijzigingen.',
  'Blindigo' => 'Blindigo',
  'Expected Column Type' => 'Verwacht kolomtype',
  'Enable developer mode' => 'Ontwikkelaarsmodus inschakelen',
  '%s, occurrences: %s' => '%s, voorkomens: %s',
  'Woe! This request had its journey cut short by unexpected circumstances (%s).' => 'Wee! Dit verzoek werd voortijdig afgebroken door onverwachte omstandigheden (%s).',
  'Customizes retention policies for garbage collectors.' => 'Past het bewaarbeleid voor garbage collectors aan.',
  'This schema can use a better column type.' => 'Dit schema kan een beter kolomtype gebruiken.',
  'Without \'%s\', this software will not be able to generate or render diffs in multiple applications.' => 'Zonder \'%s\' kan deze software geen diffs genereren of weergeven in meerdere toepassingen.',
  'The request date.' => 'De verzoekdatum.',
  'Reply handlers can no longer be overridden with configuration.' => 'Antwoordhandlers kunnen niet langer worden overschreven met configuratie.',
  'There is some deprecated code found in the %s code-base.

This isn\'t a problem yet, but it means that %s might stop working if you upgrade PHP version.

This page records a sample of the cases since last server restart. 

To solve this issue, either:

- Visit %s, file bug report with the information below, or
- Ignore this issue using the `Ignore` button below.

' => 'Er is verouderde code gevonden in de %s-codebase.

Dit is nog geen probleem, maar het betekent dat %s mogelijk stopt met werken als u de PHP-versie upgradet.

Deze pagina registreert een sample van de gevallen sinds de laatste serverherstart.

Om dit probleem op te lossen, kunt u:

- %s bezoeken en een bugrapport indienen met de onderstaande informatie, of
- Dit probleem negeren met de knop `Negeren` hieronder.',
  'Note that the default format is subject to change in the future, so if you rely on the log\'s format, specify it explicitly.' => 'Merk op dat het standaardformaat in de toekomst kan wijzigen, dus als u afhankelijk bent van het logboekformaat, geef het dan expliciet op.',
  'Send as %s' => 'Verzenden als %s',
  'Setup Error' => 'Configuratiefout',
  'Installed on Burstable CPU Instance' => 'Geïnstalleerd op burstable CPU-instantie',
  'MySQL is Using Default Minimum Word Length' => 'MySQL gebruikt standaard minimale woordlengte',
  'Extensions/Modules' => 'Uitbreidingen/modules',
  'The directory for local repositories (%s) does not exist, or is not readable by the webserver. This software uses this directory to store information about repositories. If this directory does not exist, create it:

%s
If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => 'De map voor lokale repository\'s (%s) bestaat niet, of is niet leesbaar door de webserver. Deze software gebruikt deze map om informatie over repository\'s op te slaan. Als deze map niet bestaat, maak deze aan:

%s
Als deze map bestaat, maak deze leesbaar voor de webserver. U kunt ook de onderstaande configuratie bewerken om een andere map te gebruiken.',
  'In places that we display a dropdown to syntax-highlight code, this is where that list is defined.' => 'Op plaatsen waar we een vervolgkeuzemenu weergeven om code syntaxismarkering te geven, is dit waar die lijst wordt gedefinieerd.',
  'This change supports situations where users are incorrectly associated with commits because the software makes a bad guess about how the VCS string maps to a user account. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with features which rely on the existence of these identities.' => 'Deze wijziging ondersteunt situaties waarin gebruikers incorrect worden gekoppeld aan commits omdat de software een verkeerde inschatting maakt over hoe de VCS-tekenreeks wordt toegewezen aan een gebruikersaccount. Dit helpt ook bij situaties waarin bestaande repository\'s worden geïmporteerd zonder accounts te hebben aangemaakt voor alle committers van die repository. Totdat u deze repository-identiteiten opnieuw opbouwt, zult u waarschijnlijk problemen ondervinden met functies die afhankelijk zijn van het bestaan van deze identiteiten.',
  'Unignore' => 'Niet meer negeren',
  'Text values that match this regex and are also object names will not be linked.' => 'Tekstwaarden die overeenkomen met deze regex en ook objectnamen zijn, worden niet gekoppeld.',
  '%s Held / %sms' => '%s vastgehouden / %sms',
);
  }

}
