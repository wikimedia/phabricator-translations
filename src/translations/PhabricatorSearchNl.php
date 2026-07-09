<?php

final class PhabricatorSearchNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'No results.' => 'Geen resultaten.',
  'This menu item is very important, and can not be disabled.' => 'Dit menu-item is erg belangrijk en kan niet worden uitgeschakeld.',
  'Enable Query?' => 'Zoekopdracht inschakelen?',
  'Global Search' => 'Globaal zoeken',
  'Personal Menu Items' => 'Persoonlijke menu-items',
  'Parameter "%s" must be a map of constraints.' => 'Parameter "%s" moet een map met beperkingen zijn.',
  'The queries you have saved are private. Only you can view or edit them.' => 'De zoekopdrachten die u hebt opgeslagen, zijn privé. Alleen u kunt ze bekijken of bewerken.',
  'cat -A can find mice hiding in files.' => 'kat -A kan muizen vinden die zich in bestanden schuilhouden.',
  'Export Format Not Available' => 'Exportformaat niet beschikbaar',
  'Readable' => 'Leesbaar',
  'Search Engines' => 'Zoekmachines',
  'Form "%s" is not a valid form which you have permission to see.' => 'Formulier "%s" is geen geldig formulier dat u mag inzien.',
  'Reset all common ngram records.' => 'Alle algemene ngram-records opnieuw instellen.',
  'Type "%s" matches multiple indexable objects. Use a more specific string. Matching objects are: %s.' => 'Type "%s" komt overeen met meerdere indexeerbare objecten. Gebruik een specifiekere tekenreeks. Overeenkomende objecten zijn: %s.',
  'N/A' => 'N.v.t.',
  'URI "%s" is not a valid link URI. It should be a full, valid URI beginning with a protocol like "%s".' => 'De URI "%s" is een onjuiste link-URI. Het moet een volledige, geldige URI zijn die begint met een protocol, zoals "%s".',
  'Builtin \'%s\' is not supported!' => 'De ingebouwde functie \'%s\' wordt niet ondersteund!',
  'You must choose a room.' => 'U moet een kamer kiezen.',
  'Elasticsearch server returned invalid JSON!' => 'De Elasticsearch-server heeft onjuiste JSON geretourneerd!',
  'Select an item type...' => 'Selecteer een itemtype...',
  'The popular trivia game "World of Warcraft" features a race of cat people called the Khajiit.' => 'Het populaire quizspel "World of Warcraft" bevat een ras van katachtige wezens genaamd de Khajiit.',
  'Disable Menu Item' => 'Menu-item uitschakelen',
  'Add to Dashboard' => 'Aan dashboard toevoegen',
  'Failed to load custom PHID "%s"!' => 'Het laden van de aangepaste PHID "%s" is mislukt!',
  'Cats use their keen sense of smell to avoid feeling empathy.' => 'Katten gebruiken hun scherpe reukvermogen om empathie te vermijden.',
  'INDEXING' => 'INDEXERING',
  'Find stuff in big piles.' => 'Dingen zoeken in grote stapels.',
  'Unsupported operator prefix "%s".' => 'Niet-ondersteund operatorvoorvoegsel "%s".',
  'You must choose a dashboard.' => 'U moet een dashboard kiezen.',
  'SearchEngines must render a "%s" object, but this engine (of class "%s") rendered something else ("%s").' => 'Zoekmachines moeten een "%s"-object weergeven, maar deze zoekmachine (van klasse "%s") heeft iets anders weergegeven ("%s").',
  'There is no active query yet.' => 'Er is nog geen actieve zoekopdracht.',
  'Maximum page size for Conduit API method calls is 100, but this call specified %s.' => 'De maximale paginagrootte voor API-methodeaanroepen van Conduit is 100, maar bij deze aanroep werd %s gespecificeerd.',
  '%s Search' => '%s doorzoeken',
  'Service index is out of date, repairing...' => 'De dienstindex is verouderd en wordt gerepareerd...',
  'Query: %s' => 'Zoekopdracht: %s',
  'Query is too long (%s bytes, maximum is %s bytes). Please use more specific search criteria.' => array(
    
    array(
      'De zoekopdracht is te lang (%s byte, maximaal %s byte). Gebruik specifiekere zoekcriteria.',
      'De zoekopdracht is te lang (%s byte, maximaal %s bytes). Gebruik specifiekere zoekcriteria.',
    ),
    
    array(
      'De zoekopdracht is te lang (%s bytes, maximaal %s byte). Gebruik specifiekere zoekcriteria.',
      'De zoekopdracht is te lang (%s bytes, maximaal %s bytes). Gebruik specifiekere zoekcriteria.',
    ),
  ),
  'Run a search query. Intended for debugging and development.' => 'Voer een zoekopdracht uit. Bedoeld voor debuggen en ontwikkeling.',
  'Two fields in this SearchEngine use the same key ("%s"), but each field must use a unique key.' => 'Twee velden in deze zoekmachine gebruiken dezelfde sleutel ("%s"), maar elk veld moet een unieke sleutel hebben.',
  'Parameter "%s" is invalid.' => 'Parameter "%s" is onjuist.',
  'Ferret function "%s" is specified with a denormalized name. Instead, specify the function using the normalized function name ("%s").' => 'De Ferret-functie "%s" wordt gespecificeerd met een gedenormaliseerde naam. Specificeer de functie in plaats daarvan met de genormaliseerde functienaam ("%s").',
  'Unable to instantiate query class "%s": %s' => 'Kan queryklasse "%s" niet instantiëren: %s',
  '—' => '—',
  'Cats have five pointy ends.' => 'Katten hebben vijf puntige uiteinden.',
  'Personal Saved Queries' => 'Persoonlijke opgeslagen zoekopdrachten',
  'SearchFields "%s" (of class "%s") and "%s" (of class "%s") both define the same Conduit key ("%s"). Keys must be unique.' => 'De zoekvelden "%s" (van klasse "%s") en "%s" (van klasse "%s") definiëren beide dezelfde Conduit-sleutel ("%s"). Sleutels moeten uniek zijn.',
  'You must choose a link name.' => 'U moet een koppelingsnaam kiezen.',
  'Recompute common ngrams. This is an advanced workflow that can harm search quality if used improperly.' => 'Herbereken de meest voorkomende n-grammen. Dit is een geavanceerde procedure die de zoekkwaliteit kan schaden als deze onjuist wordt gebruikt.',
  'Engine: Fulltext' => 'Engine: Volledige tekst',
  'Invalid query for parameter "%s".' => 'Incorrecte zoekopdracht voor parameter "%s".',
  'Open Items' => 'Items openen',
  'Global Menu Items' => 'Algemene menu-items',
  'No visible menu items can render content.' => 'Geen enkel zichtbaar menu-item kan inhoud weergeven.',
  'This query specifies an invalid parameter. Review the query parameters and correct errors.' => 'Deze zoekopdracht bevat een onjuiste parameter. Controleer de zoekopdrachtparameters en corrigeer de fouten.',
  'You must choose a label name.' => 'U moet een labelnaam kiezen.',
  'Edit the menu for your personal account.' => 'Bewerk het menu voor uw persoonlijke account.',
  'Application "%s" is not a valid application which you have permission to see.' => 'Toepassing "%s" is geen geldige toepassing die u mag bekijken.',
  'Specify either --reset or --threshold.' => 'Geef ofwel --reset ofwel --threshold op.',
  'Queries' => 'Zoekopdrachten',
  'Already Default' => 'Al standaard',
  'No services need initialization.' => 'Er hoeven geen diensten te worden geïnitialiseerd.',
  'The Spanish word for cat is "cato". The biggest cat is called "el cato".' => 'Het Spaanse woord voor kat is "cato". De grootste kat heet "el cato".',
  'Add New Menu Item...' => 'Nieuw menu-item toevoegen...',
  'Untitled "%s" Item' => 'Naamloos "%s"-item',
  'The first cats evolved on the savannah about 8,000 years ago.' => 'De eerste katachtigen ontwikkelden zich zo\'n 8000 jaar geleden op de savanne.',
  'You must name the query.' => 'U moet de zoekopdracht een naam geven.',
  'Choose Item Icon' => 'Selecteer itempictogram',
  'Cats will often bring you their prey because they feel sorry for your inability to hunt.' => 'Katten brengen u vaak hun prooi, omdat ze medelijden hebben met uw onvermogen om te jagen.',
  'You can apply custom constraints by passing a dictionary in `constraints`.
This will let you search for specific sets of results (for example, you may
want show only results with a certain state, status, or owner).


If you specify both a `queryKey` and `constraints`, the builtin or saved query
will be applied first as a starting point, then any additional values in
`constraints` will be applied, overwriting the defaults from the original query.

Different endpoints support different constraints. The constraints this method
supports are detailed below. As an example, you might specify constraints like
this:

```lang=json, name="Example Custom Constraints"
{
  ...
  "constraints": {
    "authorPHIDs": ["PHID-USER-1111", "PHID-USER-2222"],
    "flavors": ["cherry", "orange"],
    ...
  },
  ...
}
```

This API endpoint supports these constraints:' => 'U kunt aangepaste beperkingen toepassen door een dictionary door te geven in `constraints`. Hiermee kunt u zoeken naar specifieke sets resultaten (u wilt bijvoorbeeld alleen resultaten weergeven met een bepaalde status, staat of eigenaar).

Als u zowel een `queryKey` als `constraints` opgeeft, wordt eerst de ingebouwde of opgeslagen zoekopdracht toegepast als uitgangspunt. Vervolgens worden alle extra waarden in `constraints` toegepast, waarbij de standaardwaarden van de oorspronkelijke query worden overschreven.

Verschillende eindpunten ondersteunen verschillende beperkingen. De beperkingen die deze methode ondersteunt, worden hieronder beschreven. U kunt bijvoorbeeld beperkingen specificeren zoals:

```lang=json, name="Example Custom Constraints"
{
  ...
  "constraints": {
    "authorPHIDs": ["PHID-USER-1111", "PHID-USER-2222"],
    "flavors": ["cherry", "orange"],
    ...
  },
  ...
}
```

Dit API-eindpunt ondersteunt deze beperkingen:',
  'Substring Search' => 'Zoeken naar subtekenreeksen',
  'Handle: %s' => 'Handle: %s',
  'This call does not support any attachments.' => 'Deze aanroep ondersteunt geen bijlagen.',
  'Really delete the query "%s"? You can not undo this. Remember all the great times you had filtering results together?' => 'Wilt u de zoekopdracht "%s" echt verwijderen? Dat kan niet ongedaan gemaakt worden. Herinnert u zich nog al die leuke momenten die jullie samen beleefden met het filteren van resultaten?',
  'Edit Menu Item: %s' => 'Menu-item bewerken: %s',
  'Not all cats can retract their claws, but most of them can.' => 'Niet alle katten kunnen hun klauwen intrekken, maar de meeste wel.',
  'Restricted Dashboard' => 'Beperkt dashboard',
  'Invalid Dashboard' => 'Onjuist dashboard',
  'Run this workflow with "--background" to queue tasks for the daemon workers.' => 'Voer deze workflow uit met "--background" om taken in de wachtrij te plaatsen voor de daemon-workers.',
  'This is a visual divider which you can use to separate sections in the menu. It does not have any configurable options.' => 'Dit is een visuele scheidingslijn die u kunt gebruiken om secties in het menu van elkaar te scheiden. Er zijn geen instelbare opties.',
  'Room "%s" is not a valid room which you have permission to see.' => 'Ruimte "%s" is geen geldige ruimte die u kunt zien.',
  'Use the application-specific Advanced Search for better results and additional search criteria: %s, %s. (%s)' => 'Gebruik de toepassingsspecifieke geavanceerde zoekfunctie voor betere resultaten en extra zoekcriteria: %s, %s. (%s)',
  'Taco cat spelled backwards is taco cat.' => 'Taco cat achterstevoren gespeld is taco cat.',
  'Find objects matching a fulltext search query. See "Search User Guide" in the documentation for details.' => 'Zoeken naar objecten die overeenkomen met een zoekopdracht in de volledige tekst. Zie de "Gebruikershandleiding voor zoeken" in de documentatie voor meer informatie.',
  'Search Ngram' => 'Ngram zoeken',
  'Objects matching your query are returned as a list of dictionaries in the
`data` property of the results. Each dictionary has some metadata and a
`fields` key, which contains the information about the object that most callers
will be interested in.

For example, the results may look something like this:

```lang=json, name="Example Results"
{
  ...
  "data": [
    {
      "id": 123,
      "phid": "PHID-WXYZ-1111",
      "fields": {
        "name": "First Example Object",
        "authorPHID": "PHID-USER-2222"
      }
    },
    {
      "id": 124,
      "phid": "PHID-WXYZ-3333",
      "fields": {
        "name": "Second Example Object",
        "authorPHID": "PHID-USER-4444"
      }
    },
    ...
  ]
  ...
}
```

This result structure is standardized across all search methods, but the
available fields differ from application to application.

These are the fields available on this object type:' => 'Objecten die overeenkomen met uw zoekopdracht worden geretourneerd als een lijst met dictionaries in de `data`-eigenschap van de resultaten. Elke dictionary bevat metagegevens en een `fields`-sleutel, die de informatie over het object bevat waarin de meeste gebruikers geïnteresseerd zullen zijn.

De resultaten kunnen er bijvoorbeeld als volgt uitzien: 

```lang=json, name="Voorbeeldresultaten"
{
  ...
  "data": [
    {
      "id": 123,
      "phid": "PHID-WXYZ-1111",
      "fields": {
        "name": "Eerste voorbeeldobject",
        "authorPHID": "PHID-USER-2222"
      }
    },
    {
      "id": 124,
      "phid": "PHID-WXYZ-3333",
      "fields": {
        "name": "Tweede voorbeeldobject",
        "authorPHID": "PHID-USER-4444"
      }
    },
    ...
  ]
  ...
}
```

Deze resultaatstructuur is gestandaardiseerd voor alle zoekmethoden, maar de beschikbare velden verschillen per toepassing.

Dit zijn de velden die beschikbaar zijn voor dit objecttype:',
  'Enable Menu Item' => 'Menu-item inschakelen',
  'Engine: Hovercards' => 'Engine: Hovercards',
  'Search for objects with specific IDs.' => 'Zoeken naar objecten met specifieke ID\'s.',
  'Profile menu items can not be generated without an object context.' => 'Menu-items voor profielen kunnen niet worden aangemaakt zonder een objectcontext.',
  'Too many relationships (%s, of type "%s"). Must be less than %s.' => 'Te veel relaties (%s, van type "%s"). Moet minder dan %s zijn.',
  'Profile Menu' => 'Profielmenu',
  'Service initialization complete.' => 'Dienstinitialisatie voltooid.',
  'Configure Menu' => 'Menu configureren',
  'Cats have a tail, two feet, between one and three ears, and two other feet.' => 'Katten hebben een staart, twee poten, tussen één en drie oren en nog twee andere poten.',
  'Bucket' => 'Opslag',
  'Query Errors' => 'Zoekopdrachtfouten',
  'Unsupported item action "%s".' => 'Niet-ondersteunde handeling "%s".',
  'Not supported.' => 'Niet ondersteund.',
  'Query contains a token ("%s") with no search term. Query tokens specify text to search for.' => 'De zoekopdracht bevat een token ("%s") zonder zoekterm. Zoekopdrachttokens specificeren de tekst waarnaar gezocht moet worden.',
  'Unable to load object "%s" to rebuild indexes.' => 'Het lukte niet om object "%s" te laden om de indexen opnieuw op te bouwen.',
  'You must choose a form.' => 'U moet een formulier kiezen.',
  'You can not create that relationship because it would create a circular dependency:' => 'U kunt die relatie niet tot stand brengen, omdat dat een circulaire afhankelijkheid zou creëren:',
  'Reindex objects previously indexed on or before a given date.' => 'Herindexeer objecten die eerder op of vóór een bepaalde datum zijn geïndexeerd.',
  'Engine class is null.' => 'De engineklasse is null.',
  'Mandatory Item' => 'Verplicht item',
  'Provide a list of objects to index (like "D123"), or a set of query constraint flags (like "--type"), or "--all" to index all objects.' => 'Geef een lijst met objecten op die geïndexeerd moeten worden (bijvoorbeeld "D123"), of een set zoekopdrachtbeperkingsvlaggen (bijvoorbeeld "--type"), of "--all" om alle objecten te indexeren.',
  'Home Menu' => 'Startmenu',
  'Raw query to execute.' => 'De onbewerkte zoekopdracht die moet worden uitgevoerd.',
  'Two field specifications share the same key ("%s"). Each specification must have a unique key.' => 'Twee veldspecificaties delen dezelfde sleutel ("%s"). Elke specificatie moet een unieke sleutel hebben.',
  'Profile Menu Items' => 'Profielmenu-items',
  'You must choose a URI to link to.' => 'U moet een URI kiezen waarnaar u wilt verwijzen.',
  'Field Present: %s' => 'Veld aanwezig: %s',
  'Expected "newMenuItemViewList()" to return a list (in class "%s"), but it returned something else ("%s").' => 'Er werd verwacht dat "newMenuItemViewList()" een lijst zou retourneren (in klasse "%s"), maar het retourneerde iets anders ("%s").',
  'Initialize or repair a search service.' => 'Een zoekdienst initialiseren of repareren.',
  'Current Default' => 'Huidige standaardwaarde',
  'Outside of the CAT scan, cats have made almost no contributions to modern medicine.' => 'Afgezien van de CAT-scan hebben katten vrijwel geen bijdrage geleverd aan de moderne geneeskunde.',
  'Query Name' => 'Zoekopdrachtnaam',
  'No search engines available.' => 'Geen zoekmachines beschikbaar.',
  'A cat\'s visual, olfactory, and auditory senses, Contribute to their hunting skills and natural defenses.' => 'De visuele, reuk- en gehoorzintuigen van een kat dragen bij aan haar jachtvaardigheden en natuurlijke verdedigingsmechanismen.',
  'Object Fields' => 'Objectvelden',
  'Engine: Index' => 'Engine: Index',
  'Constraints' => 'Beperkingen',
  'Result Ordering' => 'Resultaatsordening',
  'Edit Saved Query' => 'Opgeslagen zoekopdracht bewerken',
  'You can not use query constraint flags (like "--version", "--type", or a list of specific objects) with "--all".' => 'U kunt geen zoekopdrachtbeperkingsvlaggen (zoals "--version", "--type" of een lijst met specifieke objecten) gebruiken in combinatie met "--all".',
  'You cannot add more than %d objects to the relationship.' => 'U kunt niet meer dan %d objecten aan de relatie toevoegen.',
  'Motivator' => 'Motivator',
  'Menu Items' => 'Menu-items',
  'NO OBJECTS' => 'GEEN OBJECTEN',
  'Object types to reindex, like "task", "commit" or "revision".' => 'Objecttypen die opnieuw geïndexeerd moeten worden, zoals "taak", "commit" of "versie".',
  'Reindex all documents.' => 'Alle documenten herindexeren.',
  'Hide Query' => 'Zoekopdracht verbergen',
  'Set Default Query' => 'Standaardzoekopdracht instellen',
  '(Restricted/Invalid Project)' => '(Beperkt/onjuist project)',
  'Constants supported by the `%s` constraint:' => 'Constanten die worden ondersteund door de beperking `%s`:',
  'Use "--force" to force the index to update these documents.' => 'Gebruik "--force" om de index te dwingen deze documenten bij te werken.',
  'Disable this menu item? It will no longer appear in the menu, but you can re-enable it later.' => 'Dit menu-item uitschakelen? Het verschijnt dan niet meer in het menu, maar u kunt het later weer inschakelen.',
  '(See table below.)' => '(Zie onderstaande tabel.)',
  'Build or rebuild search indexes.' => 'Zoekindexen opbouwen of opnieuw opbouwen.',
  'Cats must eat a diet rich in fish to replace the tiny bones in their tails.' => 'Katten moeten een dieet volgen dat rijk is aan vis om de kleine botjes in hun staart te vervangen.',
  '%s Queries' => 'Zoekopdrachten voor %s',
  'Set this item as the default for this menu? Users arriving on this page will be shown the content of this item by default.' => 'Dit item instellen als standaard voor dit menu? Gebruikers die op deze pagina terechtkomen, krijgen standaard de inhoud van dit item te zien.',
  'Fulltext Engine' => 'Volledige tekst-engine',
  'Two search engine attachments (of classes "%s" and "%s") specify the same attachment key ("%s"); keys must be unique.' => 'Twee zoekmachine-bijlagen (van de klassen "%s" en "%s") specificeren dezelfde bijlagesleutel ("%s"); sleutels moeten uniek zijn.',
  'In ancient Egypt, the cat-god Horus watched over all cats.' => 'In het oude Egypte waakte de kattengod Horus over alle katten.',
  'Ngrams Engine' => 'Ngram-engine',
  'Delete Query' => 'Zoekopdracht verwijderen',
  'Selecting objects to index...' => 'Objecten selecteren om te indexeren...',
  '"%s" date can not be parsed.' => 'De datum "%s" kan niet worden verwerkt.',
  'Current Menu Items' => 'Huidige menu-items',
  'Failed to update search index for document "%s": %s' => 'Het bijwerken van de zoekindex voor document "%s" is mislukt: %s',
  'Search for objects with specific PHIDs.' => 'Zoeken naar objecten met specifieke PHID\'s.',
  'Full Name' => 'Volledige naam',
  'Type "%s" matches no indexable objects. Supported types are: %s.' => 'Type "%s" komt niet overeen met indexeerbare objecten. Ondersteunde typen zijn: %s.',
  'Menu Item' => 'Menu-item',
  'This is a standard **ApplicationSearch** method which will let you list, query, or search for objects. For documentation on these endpoints, see **[[ %s | Conduit API: Using Search Endpoints ]]**.' => 'Dit is een standaard **ApplicationSearch**-methode waarmee u objecten kunt weergeven, opvragen of doorzoeken. Zie **[[ %s | Conduit API: Zoekeindpunten gebruiken ]]** voor documentatie over deze eindpunten.',
  'Many cats appear black in low light, suffering a -2 modifier to luck rolls.' => 'Veel katten lijken zwart bij weinig licht, waardoor ze een straf van -2 krijgen op geluksworpen.',
  'Attachments' => 'Bijlagen',
  'The Japanese word for cat is "kome", which is also the word for rice. Japanese cats love to eat rice, so the two are synonymous.' => 'Het Japanse woord voor kat is "kome", wat ook het woord voor rijst is. Japanse katten zijn dol op rijst, dus de twee woorden zijn synoniem.',
  'In the wild, cats and raccoons sometimes hunt together in packs.' => 'In het wild jagen katten en wasberen soms samen in groepen.',
  'Query (with ID "%s") has already been saved. Queries are immutable once saved.' => 'De zoekopdracht (met ID "%s") is al opgeslagen. Zoekopdrachten zijn na opslaan onveranderbaar.',
  'No Content' => 'Geen inhoud',
  'Prebuilt Queries' => 'Voorgedefinieerde zoekopdrachten',
  'Fulltext Search Results' => 'Zoekresultaten voor de volledige tekst',
  'Query has an invalid sequence of operators ("%s").' => 'De zoekopdracht bevat een ongeldige reeks operatoren ("%s").',
  'Engine: Search' => 'Engine: Zoeken',
  'Profile Menu Item' => 'Profielmenu-items',
  '"2022-12-25" or "7 days ago"...' => '"2022-12-25" of "7 days ago"…',
  'Paging and Limits' => 'Paginering en limieten',
  'No objects selected to index.' => 'Er zijn geen objecten geselecteerd om te indexeren.',
  'A cat can run seven times faster than a human, but only for a short distance.' => 'Een kat kan zeven keer sneller rennen dan een mens, maar slechts over een korte afstand.',
  'This engine is used to modify menu items on profiles.' => 'Deze engine wordt gebruikt om menu-items op profielen aan te passen.',
  'You can choose a builtin or saved query as a starting point for filtering
results by selecting it with `queryKey`. If you don\'t specify a `queryKey`,
the query will start with no constraints.

For example, many applications have builtin queries like `"active"` or
`"open"` to find only active or enabled results. To use a `queryKey`, specify
it like this:

```lang=json, name="Selecting a Builtin Query"
{
  ...
  "queryKey": "active",
  ...
}
```

The table below shows the keys to use to select builtin queries and your
saved queries, but you can also use **any** query you run via the web UI as a
starting point. You can find the key for a query by examining the URI after
running a normal search.

You can use these keys to select builtin queries and your configured saved
queries:' => 'U kunt een ingebouwde of opgeslagen zoekopdracht als uitgangspunt kiezen voor het filteren van resultaten door deze te selecteren met `queryKey`. Als u geen `queryKey` opgeeft, begint de zoekopdracht zonder beperkingen.

Veel toepassingen hebben bijvoorbeeld ingebouwde zoekopdrachten zoals "actief" of "open" om alleen actieve of open resultaten te vinden. Om een `queryKey` te gebruiken, geeft u deze als volgt op:

```lang=json, name="Selecting a Builtin Query"
{
  ...
  "queryKey": "active",
  ...
}
```

In de onderstaande tabel worden de sleutels weergegeven die u kunt gebruiken om ingebouwde zoekopdrachten en uw opgeslagen zoekopdrachten te selecteren, maar u kunt ook **elke** zoekopdracht die u via de webinterface uitvoert als uitgangspunt gebruiken. U kunt de sleutel voor een zoekopdracht vinden door de URI te onderzoeken nadat u een normale zoekopdracht hebt uitgevoerd. U kunt deze sleutels gebruiken om ingebouwde zoekopdrachten en uw geconfigureerde, opgeslagen zoekopdrachten te selecteren.',
  'No object relationship of type "%s" exists.' => 'Er bestaat geen objectrelatie van het type "%s".',
  'Delete Menu Item' => 'Menu-item verwijderen',
  'Ferret search engine field key ("%s") is invalid. Field keys must be exactly four characters long and contain only lowercase latin letters.' => 'De veldsleutel ("%s") van de Ferret-zoekmachine is onjuist. Veldsleutels moeten precies vier tekens lang zijn en mogen alleen kleine Latijnse letters bevatten.',
  'Service index is already up to date.' => 'De dienstindex is al bijgewerkt.',
  'Cats spend most of their time plotting to kill their owner.' => 'Katten besteden het grootste deel van hun tijd aan het bedenken van plannen om hun baasje te vermoorden.',
  'Storage Used' => 'Gebruikte opslagruimte',
  'Project Menu' => 'Projectmenu',
  'Reindex objects previously indexed on or after a given date.' => 'Objecten herindexeren die eerder op of na een bepaalde datum zijn geïndexeerd.',
  'Customize Query: %s' => 'Zoekopdracht aanpassen: %s',
  'Edit Related Objects...' => 'Gerelateerde objecten bewerken...',
  'Create Menu Item' => 'Menu-item aanmaken',
  'No saved queries.' => 'Geen opgeslagen zoekopdrachten.',
  'Supports ID/PHID Queries' => 'Ondersteunt ID/PHID-zoekopdrachten',
  'By default, only basic information about objects is returned. If you want
more extensive information, you can use available `attachments` to get more
information in the results (like subscribers and projects).

Generally, requesting more information means the query executes more slowly
and returns more data (in some cases, much more data). You should normally
request only the data you need.

To request extra data, specify which attachments you want in the `attachments`
parameter:

```lang=json, name="Example Attachments Request"
{
  ...
  "attachments": {
    "subscribers": true
  },
  ...
}
```

This example specifies that results should include information about
subscribers. In the return value, each object will now have this information
filled out in the corresponding `attachments` value:

```lang=json, name="Example Attachments Result"
{
  ...
  "data": [
    {
      ...
      "attachments": {
        "subscribers": {
          "subscriberPHIDs": [
            "PHID-WXYZ-2222",
          ],
          "subscriberCount": 1,
          "viewerIsSubscribed": false
        }
      },
      ...
    },
    ...
  ],
  ...
}
```

These attachments are available:' => 'Standaard wordt alleen basisinformatie over objecten geretourneerd. Als u uitgebreidere informatie wilt, kunt u de beschikbare `attachments` gebruiken om meer informatie in de resultaten te krijgen (zoals abonnees en projecten).

Over het algemeen betekent het opvragen van meer informatie dat de zoekopdracht langzamer wordt uitgevoerd en meer gegevens retourneert (in sommige gevallen veel meer gegevens). U moet normaal gesproken alleen de gegevens opvragen die u nodig hebt.

Om extra gegevens op te vragen, geeft u aan welke bijlagen u wilt in de parameter `attachments`:

```lang=json, name="Example Attachments Request"
{
  ...
  "attachments": {
    "subscribers": true
  },
  ...
}
```

Dit voorbeeld geeft aan dat de resultaten informatie over abonnees moeten bevatten. In de retourwaarde zal elk object nu deze informatie bevatten ingevuld in de overeenkomstige `attachments`-waarde:

```lang=json, name="Example Attachments Result"
{
  ...
  "data": [
    {
      ...
      "attachments": {
        "subscribers": {
          "subscriberPHIDs": [
            "PHID-WXYZ-2222",
          ],
          "subscriberCount": 1,
          "viewerIsSubscribed": false
        }
      },
      ...
    },
    ...
  ],
  ...
}
```

Deze bijlagen zijn beschikbaar:',
  'Excluding Search' => 'Zoeken uitsluiten',
  'The word "catastrophe" has no etymological relationship to the word "cat".' => 'Het woord "catastrofe" heeft geen etymologische relatie met het woord "kat".',
  'Skipped %s document(s) which have not updated since they were last indexed.' => array(
    '%s document overgeslagen dat niet is bijgewerkt sinds de laatste indexering.',
    '%s documenten overgeslagen die niet zijn bijgewerkt sinds de laatste indexering.',
  ),
  'Edit Builtin Item' => 'Ingebouwd item bewerken',
  'Text value for "%s" can not be parsed.' => 'De tekstwaarde voor "%s" kan niet worden verwerkt.',
  'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same name ("%s"). Each function must have a unique name.' => 'Twee verschillende fulltext-zoekmachine-uitbreidingen ("%s" en "%s") definiëren beide een zoekfunctie met dezelfde naam ("%s"). Elke functie moet een unieke naam hebben.',
  '\'%s\' is not the name of a known object.' => '\'%s\' is niet de naam van een bekend object.',
  'You must delegate to this controller, not invoke it directly.' => 'U moet de taken delegeren aan deze controller, u kunt hem niet rechtstreeks aanroepen.',
  'Cat tails are flexible because they contain thousands of tiny bones.' => 'Kattenstaarten zijn flexibel omdat ze duizenden kleine botjes bevatten.',
  'Cat Facts' => 'Kattenweetjes',
  'Ferret Engine Ngrams' => 'Ferret-engine ngrams',
  'Forced search index updates for %s document(s).' => array(
    'Geforceerd de zoekindex bijwerken voor %s document.',
    'Geforceerd de zoekindex bijwerken voor %s documenten.',
  ),
  'Updated search indexes for %s document(s).' => array(
    'Zoekindexen bijgewerkt voor %s document.',
    'Zoekindexen bijgewerkt voor %s documenten.',
  ),
  'Field Absent: %s' => 'Veld ontbreekt: %s',
  'Cats are stealthy predators and nearly invisible to radar.' => 'Katten zijn sluipende roofdieren en vrijwel onzichtbaar voor radar.',
  'Search Index Versions' => 'Zoekindexversies',
  'You can not create a relationship (of type "%s") to object "%s" because it is not the right type of object for this relationship.' => 'U kunt geen relatie (van het type "%s") maken met object "%s", omdat dit niet het juiste objecttype is voor deze relatie.',
  'Object produced two items with the same builtin key ("%s"). Each item must have a unique builtin key.' => 'Het object produceerde twee items met dezelfde ingebouwde sleutel ("%s"). Elk item moet een unieke ingebouwde sleutel hebben.',
  '\'%s\' is not a builtin!' => '\'%s\' is niet ingebouwd!',
  'All Open Objects' => 'Alle open objecten',
  'Buckets Overflowing' => 'Emmers lopen over',
  'Disable Query' => 'Zoekopdracht uitschakelen',
  'Divider' => 'Scheiding',
  'Archived Dashboard' => 'Dashboard archiveren',
  'Manage Menu' => 'Menu beheren',
  'Minimum page size for Conduit API method calls is 1, but this call specified %s.' => 'De minimale paginagrootte voor API-zoekopdrachten is 1, maar bij deze aanroep werd %s gespecificeerd.',
  'This query took too long, so only some results are shown. %s' => 'Deze zoekopdracht duurde te lang, daarom worden slechts enkele resultaten weergegeven. %s',
  'The largest recorded cat was nearly 11 inches long from nose to tail.' => 'De grootste kat die ooit is geregistreerd, was bijna 28 centimeter lang van neus tot staart.',
  'PHID Type' => 'PHID-type',
  'Invalid Relationship' => 'Onjuiste relatie',
  'There is nothing here.' => 'Hier is niets te vinden.',
  'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same key ("%s"). Each function must have a unique key.' => 'Twee verschillende fulltext-zoekmachine-uitbreidingen ("%s" en "%s") definiëren beide een zoekfunctie met dezelfde sleutel ("%s"). Elke functie moet een unieke sleutel hebben.',
  'Search engine ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'De zoekmachine ("%s") definieert een exportveld met een sleutel ("%s") die conflicteert met een ander veld. Elk veld moet een unieke sleutel hebben.',
  'IDs' => 'ID\'s',
  'This query will become your default query in the current application.' => 'Deze zoekopdracht wordt uw standaardzoekopdracht in de huidige toepassing.',
  'PHIDs' => 'PHID\'s',
  'Save Query' => 'Zoekopdracht opslaan',
  'Full-Text Search' => 'Zoeken in de volledige tekst',
  'Too few documents of type "%s" for any ngrams to be common.' => 'Er zijn te weinig documenten van het type "%s" om n-grammen algemeen te laten voorkomen.',
  'Deprecated alias for "%s".' => 'Verouderde alias voor "%s".',
  'Query has too many search tokens (%s tokens, maximum is %s tokens). Please use more specific search criteria.' => array(
    
    array(
      'De zoekopdracht bevat te veel zoektermen (%s token, maximaal %s token). Gebruik specifiekere zoekcriteria.',
      'De zoekopdracht bevat te veel zoektermen (%s token, maximaal %s tokens). Gebruik specifiekere zoekcriteria.',
    ),
    
    array(
      'De zoekopdracht bevat te veel zoektermen (%s tokens, maximaal %s token). Gebruik specifiekere zoekcriteria.',
      'De zoekopdracht bevat te veel zoektermen (%s tokens, maximaal %s tokens). Gebruik specifiekere zoekcriteria.',
    ),
  ),
  'Edit Menu Item' => 'Menu-item bewerken',
  'Initializing search service "%s".' => 'De zoekservice "%s" wordt geïnitialiseerd.',
  'SELECT' => 'SELECTEREN',
  'Skipping service "%s" because it is not writable.' => 'Dienst "%s" wordt overgeslagen omdat deze niet beschrijfbaar is.',
  'Date value for "%s" can not be parsed.' => 'De datumwaarde voor "%s" kan niet worden verwerkt.',
  'Browse Item Types' => 'Itemtypen bekijken',
  'NOTE' => 'OPMERKING',
  'Parameter "%s" includes an invalid key.' => 'Parameter "%s" bevat een onjuiste sleutel.',
  '"%s" must be a date before "%s".' => '" %s " moet een datum zijn die vóór "%s" ligt.',
  'Fulltext Search' => 'Volledige tekst zoeken',
  'Parameter "%s" must be a map of attachments.' => 'Parameter "%s" moet een map van bijlagen zijn.',
  'Drag items in this list to reorder them.' => 'Sleep de items in deze lijst om de volgorde te wijzigen.',
  'Prune ngrams present in more than this fraction of documents. Provide a value between 0.0 and 1.0.' => 'Verwijder n-grammen die in meer dan dit percentage documenten voorkomen. Geef een waarde op tussen 0.0 en 1.0.',
  'Use `order` to choose an ordering for the results.

Either specify a single key from the builtin orders (these are a set of
meaningful, high-level, human-readable orders) or specify a custom list of
low-level columns.

To use a high-level order, choose a builtin order from the table below
and specify it like this:

```lang=json, name="Choosing a Result Order"
{
  ...
  "order": "newest",
  ...
}
```

These builtin orders are available:' => 'Gebruik `order` om een sorteervolgorde voor de resultaten te kiezen.

U kunt een enkele sleutel uit de ingebouwde sorteervolgordes opgeven (dit is een set van betekenisvolle, algemene en leesbare sorteervolgordes) of een aangepaste lijst met kolommen op een lager niveau opgeven.

Om een algemene sorteervolgorde te gebruiken, kiest u een ingebouwde sorteervolgorde uit de onderstaande tabel en geeft u deze als volgt op:

```lang=json, name="Choosing a Result Order"
{
  ...
  "order": "newest",
  ...
}
```

Deze ingebouwde volgordes zijn beschikbaar:',
  'Profile picture' => 'Profielafbeelding',
  'This query took too long. %s' => 'Deze zoekopdracht duurde te lang. %s',
  'The first cats evolved in swamps about 65 years ago.' => 'De eerste kattensoorten ontwikkelden zich zo\'n 65 jaar geleden in moerassen.',
  'You can tell how warm a cat is by examining the coloration: cooler areas are darker.' => 'U kunt aan de kleur van een kat zien hoe warm ze het heeft: in koelere gebieden is de kleur donkerder.',
  'Specify a query with --query.' => 'Geef een zoekopdracht op met --query.',
  'You must choose an application.' => 'U moet een toepassing kiezen.',
  'This menu currently has no items.' => 'Dit menu bevat momenteel geen items.',
  'Setting "%s" is misconfigured: %s' => 'Instelling "%s" is verkeerd geconfigureerd: %s',
  'This item is already set as the default item for this menu.' => 'Dit item is al ingesteld als het standaarditem voor dit menu.',
  'Edit the global default menu for all users.' => 'Bewerk het algemene standaardmenu voor alle gebruikers.',
  'Profile Menu User Guide' => 'Gebruikershandleiding voor het profielmenu',
  'You can not create a relationship to object "%s" because objects can not be related to themselves.' => 'U kunt geen relatie leggen met object "%s", omdat objecten niet aan zichzelf gerelateerd kunnen worden.',
  'Expected fulltext engine extension ("%s") to return a list of "FerretSearchFunction" objects from "newFerretSearchFunctions()", but found something else ("%s") at index "%s".' => 'De uitbreiding voor de fulltext-zoekmachine ("%s") zou een lijst met "FerretSearchFunction"-objecten moeten retourneren vanuit "newFerretSearchFunctions()", maar er werd iets anders gevonden ("%s") op index "%s".',
  'Type specification "%s" duplicates type specification "%s". Specify each type only once.' => 'Typespecificatie "%s" is een duplicaat van typespecificatie "%s". Specificeer elk type slechts één keer.',
  'Item Status' => 'Itemstatus',
  'Project "%s" is not a valid project which you have permission to see.' => 'Project "%s" is geen project dat u mag bekijken.',
  'Provided view is not one of the views in the list: you can only select a view which appears in the list.' => 'De opgegeven weergave staat niet in de lijst: u kunt alleen een weergave selecteren die in de lijst voorkomt.',
  'No views match identifier "%s"!' => 'Geen enkele weergave komt overeen met de identificatiecode "%s"!',
  'Choose a valid export format.' => 'Kies een geldige exportopmaak.',
  'Tooltip' => 'Tooltip',
  'Search engine ("%s") exported the wrong number of objects, expected %s but got %s.' => array(
    
    array(
      
      array(
        'De zoekmachine ("%s") heeft het verkeerde aantal objecten geëxporteerd; er werd er één verwacht, maar er werd er één ontvangen.',
        'De zoekmachine ("%s") heeft het verkeerde aantal objecten geëxporteerd; er werd er één verwacht, maar er werden er %3$s ontvangen.',
      ),
      
      array(
        'De zoekmachine ("%s") heeft het verkeerde aantal objecten geëxporteerd; er werden er %s verwacht, maar er werd er één ontvangen.',
        'De zoekmachine ("%s") heeft het verkeerde aantal objecten geëxporteerd; er werden er %s verwacht, maar er werden er %s ontvangen.',
      ),
    ),
  ),
  'This built-in query can not be deleted, but you can disable it so it does not appear in your query menu. You can enable it again later. Disable built-in query "%s"?' => 'Deze ingebouwde zoekopdracht kan niet worden verwijderd, maar u kunt hem uitschakelen zodat hij niet in uw zoekopdrachtenmenu verschijnt. U kunt hem later weer inschakelen. Ingebouwde zoekopdracht "%s" uitschakelen?',
  'Motivate your team with inspirational quotes from great minds. This menu item shows a new quote every day.' => 'Motiveer uw team met inspirerende citaten van grote denkers. Dit menu-item geef elke dag een nieuw citaat weer.',
  'Saved Queries' => 'Opgeslagen zoekopdrachten',
  'Unknown search function "%s". Supported functions are: %s. (To search for a term containing a colon, surround the term in double quotes.)' => 'Onbekende zoekfunctie "%s". Ondersteunde functies zijn: %s. (Om te zoeken naar een term die een dubbele punt bevat, plaatst u de term tussen dubbele aanhalingstekens.)',
  '(Restricted/Invalid Form)' => '(Beperkt/onjuist formulier)',
  'Edit Profile Menu Item Configurations' => 'Configuraties van profielmenu-items bewerken',
  'Delete this menu item?' => 'Dit menu-item verwijderen?',
  'Cats prefer vanilla ice cream.' => 'Katten geven de voorkeur aan vanille-ijs.',
  'Resetting common ngrams for "%s".' => 'Het opnieuw instellen van veelvoorkomende n-grammen voor "%s".',
  'Export Results' => 'Resultaten exporteren',
  'To configure the search engines, edit [[ %s | %s ]] configuration. See **[[ %s | %s ]]** for documentation.' => 'Om de zoekmachines te configureren, bewerkt u de configuratie [[ %s | %s ]]. Zie **[[ %s | %s ]]** voor de documentatie.',
  'All Fulltext Search hosts failed:' => 'Alle hosts voor Fulltext Search zijn mislukt:',
  'All Objects' => 'Alle objecten',
  'Dashboard "%s" is not a valid dashboard which you have permission to see.' => 'Dashboard "%s" is geen bestaand dashboard dat u mag bekijken.',
  'Failed to rebuild search index for any documents.' => 'Het is niet gelukt om de zoekindex voor documenten opnieuw op te bouwen.',
  'Updated common ngrams for "%s".' => 'Bijgewerkte veelvoorkomende n-grammen voor "%s".',
  'The query matched more than one page of results. Results are paginated before bucketing, so later pages may contain additional results in any bucket.' => 'De zoekopdracht leverde resultaten op voor meerdere pagina\'s. De resultaten worden gepagineerd voordat ze in categorieën worden ingedeeld, dus latere pagina\'s kunnen in elke categorie nog meer resultaten bevatten.',
  'Ferret Fulltext Engine' => 'Ferret Fulltext Engine',
  'Export engine extension ("%s") exported the wrong number of objects, expected %s but got %s.' => array(
    
    array(
      
      array(
        'De exportengine-uitbreiding ("%s") heeft het verkeerde aantal objecten geëxporteerd; er werd er één verwacht, maar er werd er één geëxporteerd.',
        'De exportengine-uitbreiding ("%s") heeft het verkeerde aantal objecten geëxporteerd; er werd er één verwacht, maar er werden er %3$s geëxporteerd.',
      ),
      
      array(
        'De exportengine-uitbreiding ("%s") heeft het verkeerde aantal objecten geëxporteerd; er werden er %s verwacht, maar er werd er één geëxporteerd.',
        'De exportengine-uitbreiding ("%s") heeft het verkeerde aantal objecten geëxporteerd; er werden er %s verwacht, maar er werden er %s geëxporteerd.',
      ),
    ),
  ),
  'Global Queries' => 'Globale zoekopdrachten',
  'Link' => 'Koppeling',
  'Query contains unmatched double quotes.' => 'De zoekopdracht bevat niet-overeenkomende dubbele aanhalingstekens.',
  'Enable Query' => 'Zoekopdracht inschakelen',
  'This item can not be set as the default item. This is usually because the item has no page of its own, or links to an external page.' => 'Dit item kan niet als standaarditem worden ingesteld. Dit komt meestal doordat het item geen eigen pagina heeft of naar een externe pagina verwijst.',
  'Browse Results' => 'Resultaten bekijken',
  'Exact Search' => 'Exacte zoekopdracht',
  'Enable this menu item? It will appear in the menu again.' => 'Dit menu-item inschakelen? Het verschijnt dan weer in het menu.',
  'Created By Me' => 'Gemaakt door mij',
  'Specify either --reset or --threshold, not both.' => 'Geef ofwel --reset ofwel --threshold op, niet beide.',
  'Object produced a builtin item with no builtin item key! Builtin items must have a unique key.' => 'Het object produceerde een ingebouwd item zonder ingebouwde itemsleutel! Ingebouwde items moeten een unieke sleutel hebben.',
  'Ferret search engine function name ("%s") is invalid. Function names must be nonempty and may only contain latin letters and hyphens.' => 'De functienaam van de Ferret-zoekmachine ("%s") is onjuist. Functienamen moeten niet leeg zijn en mogen alleen Latijnse letters en koppeltekens bevatten.',
  'Disable Query?' => 'Zoekopdracht uitschakelen?',
  'No Bucketing' => 'Geen gebruik van buckets',
  'Use Results' => 'Resultaten gebruiken',
  'Expected fulltext engine extension ("%s") to return a list of functions from "newFerretSearchFunctions()", got "%s".' => 'De uitbreiding voor de fulltext-zoekmachine ("%s") zou een lijst met functies van "newFerretSearchFunctions()" moeten retourneren, maar kreeg "%s".',
  'Order By' => 'Sorteren op',
  'No new common ngrams exist for "%s".' => 'Er bestaan geen nieuwe gemeenschappelijke n-grammen voor "%s".',
  'Cats purr when they are happy, upset, or asleep.' => 'Katten spinnen als ze blij of verdrietig zijn of slapen.',
  'Save this query as a global query, making it visible to all users.' => 'Deze zoekopdracht opslaan als een algemene zoekopdracht, zodat deze voor alle gebruikers zichtbaar is.',
  'Item Types' => 'Itemtypen',
  'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.' => 'U kunt geen relatie met object "%s" tot stand brengen, omdat het object niet bestaat of niet geladen kon worden.',
  'Edit Query' => 'Zoekopdracht bewerken',
  'No results found for this query.' => 'Er zijn geen resultaten gevonden voor deze zoekopdracht.',
  'Searched For:' => 'Zoeken naar:',
  'Force a complete rebuild of the entire index instead of an incremental update.' => 'Een volledige heropbouw forceren van de hele index in plaats van incrementeel bijwerken.',
  'Cats with high self-esteem seek out high perches to launch their attacks. Watch out!' => 'Katten met een groot zelfvertrouwen zoeken hoge plekken op om hun aanvallen te lanceren. Pas op!',
  'Motivator: %s' => 'Motivator: %s',
  '%s (Not Available)' => '%s (niet beschikbaar)',
  'Indexing %s object(s).' => array(
    '%s object aan het indexeren.',
    '%s objecten aan het indexeren.',
  ),
  'This dashboard has been archived.' => 'Dit dashboard is gearchiveerd.',
  'Specify a numeric threshold between 0 and 1.' => 'Geef een numerieke drempelwaarde op tussen 0 en 1.',
  '(Restricted/Invalid Application)' => '(Beperkte/onjuiste aanvraag)',
  'DEV: Overheated State' => 'ONTWIKKELAAR: Oververhitte toestand',
  'Query field must be absent ("%s") and present ("%s"). This is impossible, so the query is not valid.' => 'Het zoekopdrachtveld moet afwezig zijn ("%s") en aanwezig zijn ("%s"). Dit is onmogelijk, dus de zoekopdracht is niet geldig.',
  'Reindex objects previously indexed with a particular version of the indexer.' => 'Objecten herindexeren die eerder zijn geïndexeerd met een specifieke versie van de indexeerder.',
  'Portal Menu' => 'Portaalmenu',
  'Not Defaultable' => 'Niet als standaard instelbaar',
  'Really Delete Query?' => 'Wilt u de zoekopdracht echt verwijderen?',
  'Query offset is too large. offset+limit=%s (max=%s)' => 'De zoekopdracht-offset is te groot. offset + limiet = %s (max = %s)',
  'Instead of indexing in this process, queue tasks for the daemons. This can improve performance, but makes it more difficult to debug search indexing.' => 'In plaats van in dit proces te indexeren, kunt u taken in een wachtrij plaatsen voor de daemons. Dit kan de prestaties verbeteren, maar maakt het lastiger om zoekindexering te debuggen.',
  'Edit Queries...' => 'Zoekopdrachten bewerken...',
  'You can choose a low-level column order instead. To do this, provide a list
of columns instead of a single key. This is an advanced feature.

In a custom column order:

  - each column may only be specified once;
  - each column may be prefixed with `-` to invert the order;
  - the last column must be a unique column, usually `id`; and
  - no column other than the last may be unique.

To use a low-level order, choose a sequence of columns and specify them like
this:

```lang=json, name="Using a Custom Order"
{
  ...
  "order": ["color", "-name", "id"],
  ...
}
```

These low-level columns are available:' => 'U kunt in plaats daarvan een kolomvolgorde op laag niveau kiezen. Geef hiervoor een lijst met kolommen op in plaats van een enkele sleutel. Dit is een gevorderde functie.

Bij een aangepaste kolomvolgorde geldt het volgende:

  - elke kolom mag slechts één keer worden opgegeven;
  - elke kolom mag worden voorafgegaan door een `-` om de volgorde om te keren;
  - de laatste kolom moet een unieke kolom zijn, meestal `id`; en
  - geen enkele andere kolom dan de laatste mag uniek zijn.

Om een volgorde op laag niveau te gebruiken, kiest u een reeks kolommen en geeft u deze als volgt op:

```lang=json, name="Using a Custom Order"
{
  ...
  "order": ["color", "-name", "id"],
  ...
}
```

Deze kolommen op laag niveau zijn beschikbaar:',
  'Builtin item ("%s") specifies a bad item key ("%s"); there is no corresponding item implementation available.' => 'Ingebouwd item ("%s") specificeert een ongeldige itemsleutel ("%s"); er is geen overeenkomstige itemimplementatie beschikbaar.',
  'DEV: New User State' => 'ONTWIKKELEN: Nieuwe gebruikersstatus',
  'Export engine extension ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'De exportengine-uitbreiding (" %s ") definieert een exportveld met een sleutel ("%s") die conflicteert met een ander veld. Elk veld moet een unieke sleutel hebben.',
  'A cattail is a wetland plant with an appearance that resembles the tail of a cat.' => 'Een kattenstaart is een moerasplant die qua uiterlijk lijkt op de staart van een kat.',
  'Service index does not exist, creating...' => 'Dienstindex bestaat niet, er wordt een nieuwe aangemaakt...',
  'Export Data' => 'Gegevens exporteren',
  'Circular Dependency' => 'Circulaire afhankelijkheid',
  'Cats use a special type of magnetism to help them land on their feet.' => 'Katten gebruiken een speciaal soort magnetisme om op hun pootjes te landen.',
  'Lisk Builtin Properties' => 'Lisk ingebouwde eigenschappen',
  'More information' => 'Meer informatie',
  'Application "%s" is not enabled!' => 'De toepassing "%s" is niet ingeschakeld!',
  'Unable to Render Dashboard' => 'Kan dashboard niet weergeven',
  'Queued %s document(s) for background indexing.' => array(
    'Er is één document in de wachtrij geplaatst voor achtergrondindexering.',
    'Er zijn %s documenten in de wachtrij geplaatst voor achtergrondindexering.',
  ),
  '(Restricted/Invalid Conpherence)' => '(Beperkte/onjuiste Conpherence)',
  'System Saved Queries' => 'Opgeslagen systeemzoekopdrachten',
  'Threshold must be greater than 0.0 and less than 1.0.' => 'De drempelwaarde moet groter zijn dan 0,0 en kleiner dan 1,0.',
  'This dashboard is invalid and could not be loaded.' => 'Dit dashboard is onjuist en kon niet worden geladen.',
  'Enable the built-in query "%s"? It will appear in your menu again.' => 'Schakel de ingebouwde zoekopdracht "%s" in. Deze verschijnt dan weer in uw menu.',
  'Queries are limited to returning 100 results at a time. If you want fewer
results than this, you can use `limit` to specify a smaller limit.

If you want more results, you\'ll need to make additional queries to retrieve
more pages of results.

The result structure contains a `cursor` key with information you\'ll need in
order to fetch the next page of results. After an initial query, it will
usually look something like this:

```lang=json, name="Example Cursor Result"
{
  ...
  "cursor": {
    "limit": 100,
    "after": "1234",
    "before": null,
    "order": null
  }
  ...
}
```

The `limit` and `order` fields are describing the effective limit and order the
query was executed with, and are usually not of much interest. The `after` and
`before` fields give you cursors which you can pass when making another API
call in order to get the next (or previous) page of results.

To get the next page of results, repeat your API call with all the same
parameters as the original call, but pass the `after` cursor you received from
the first call in the `after` parameter when making the second call.

If you do things correctly, you should get the second page of results, and
a cursor structure like this:

```lang=json, name="Second Result Page"
{
  ...
  "cursor": {
    "limit": 5,
    "after": "4567",
    "before": "7890",
    "order": null
  }
  ...
}
```

You can now continue to the third page of results by passing the new `after`
cursor to the `after` parameter in your third call, or return to the previous
page of results by passing the `before` cursor to the `before` parameter. This
might be useful if you are rendering a web UI for a user and want to provide
"Next Page" and "Previous Page" links.

If `after` is `null`, there is no next page of results available. Likewise,
if `before` is `null`, there are no previous results available.' => 'Zoekopdrachten zijn beperkt tot het retourneren van 100 resultaten per keer. Als u minder resultaten wilt, kunt u `limit` gebruiken om een kleinere limiet op te geven.

Als u meer resultaten wilt, moet u extra zoekopdrachten uitvoeren om meer pagina\'s met resultaten op te halen.

De resultaatstructuur bevat een `cursor`-sleutel met informatie die u nodig hebt om de volgende pagina met resultaten op te halen. Na een eerste zoekopdracht ziet het er meestal ongeveer zo uit: 

```lang=json, name="Voorbeeld cursorresultaat"
{
  ...
  "cursor": {
    "limit": 100,
    "after": "1234",
    "before": null,
    "order": null
  }
  ...
}

De velden `limit` en `order` beschrijven de effectieve limiet en volgorde waarmee de zoekopdracht is uitgevoerd en zijn meestal niet erg interessant. De velden `after` en `before` geven u cursors die u kunt doorgeven bij een volgende API-aanroep om de volgende (of vorige) pagina met resultaten te krijgen.

Om de volgende pagina met resultaten te krijgen, herhaalt u de API-aanroep met dezelfde parameters als de oorspronkelijke aanroep, maar geeft u de `after`-cursor die u van de eerste aanroep hebt ontvangen door in de parameter `after` bij de tweede aanroep.

Als u het goed doet, krijt u de tweede pagina met resultaten en een cursorstructuur zoals deze: 

```lang=json, name="Tweede resultatenpagina"
{
  ...
  "cursor": {
    "limit": 5,
    "after": "4567",
    "before": "7890",
    "order": null
  }
  ...
}
```

U kunt nu doorgaan naar de derde pagina met resultaten door de nieuwe `after` cursor door te geven aan de parameter `after` in uw derde aanroep, of terugkeren naar de vorige pagina met resultaten door de `before`-cursor door te geven aan de parameter `before`. Dit kan handig zijn als u een webinterface voor een gebruiker weergeeft en koppelingen naar "Volgende pagina" en "Vorige pagina" wilt aanbieden.

Als `after` null is, is er geen volgende pagina met resultaten beschikbaar. Evenzo, als `before` null is, zijn er geen vorige resultaten beschikbaar.',
  'Engine Name' => 'Engine-naam',
);
  }

}
