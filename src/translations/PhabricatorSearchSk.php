<?php

final class PhabricatorSearchSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'No results.' => 'Žiadne výsledky.',
  'This menu item is very important, and can not be disabled.' => 'Táto položka ponuky je veľmi dôležitá a nie je možné ju vypnúť.',
  'Enable Query?' => 'Povoliť dopyt?',
  'Global Search' => 'Globálne vyhľadávanie',
  'Personal Menu Items' => 'Osobné položky ponuky',
  'Parameter "%s" must be a map of constraints.' => 'Parameter „%s“ musí byť mapa obmedzení.',
  'The queries you have saved are private. Only you can view or edit them.' => 'Dopyty, ktoré ste uložili, sú súkromné. Zobraziť alebo upraviť ich môžete len vy.',
  'cat -A can find mice hiding in files.' => 'cat -A dokáže nájsť myši ukrývajúce sa v súboroch.',
  'Export Format Not Available' => 'Formát exportu nie je k dispozícii',
  'Readable' => 'Čitateľné',
  'Search Engines' => 'Vyhľadávacie nástroje',
  'Form "%s" is not a valid form which you have permission to see.' => 'Formulár „%s“ nie je platný formulár, na ktorého zobrazenie máte oprávnenie.',
  'Reset all common ngram records.' => 'Obnoviť všetky záznamy bežných n-gramov.',
  'Type "%s" matches multiple indexable objects. Use a more specific string. Matching objects are: %s.' => 'Typ „%s“ zodpovedá viacerým indexovateľným objektom. Použite konkrétnejší reťazec. Zodpovedajúce objekty sú: %s.',
  'N/A' => 'N/A',
  'URI "%s" is not a valid link URI. It should be a full, valid URI beginning with a protocol like "%s".' => 'URI „%s“ nie je platná URI odkazu. Malo by ísť o úplnú, platnú URI začínajúcu protokolom, ako je „%s“.',
  'Builtin \'%s\' is not supported!' => 'Zabudovaný \'%s\' nie je podporovaný!',
  'You must choose a room.' => 'Musíte vybrať miestnosť.',
  'Elasticsearch server returned invalid JSON!' => 'Server Elasticsearch vrátil neplatný JSON!',
  'Select an item type...' => 'Vyberte typ položky…',
  'The popular trivia game "World of Warcraft" features a race of cat people called the Khajiit.' => 'Populárna vedomostná hra „World of Warcraft“ obsahuje rasu mačacích ľudí nazývanú Khajiiti.',
  'Disable Menu Item' => 'Vypnúť položku ponuky',
  'Add to Dashboard' => 'Pridať na nástenku',
  'Failed to load custom PHID "%s"!' => 'Nepodarilo sa načítať vlastný PHID „%s“!',
  'Cats use their keen sense of smell to avoid feeling empathy.' => 'Mačky používajú svoj vynikajúci čuch na to, aby sa vyhli pocitu empatie.',
  'INDEXING' => 'INDEXOVANIE',
  'Find stuff in big piles.' => 'Nájdite veci vo veľkých kopách.',
  'Unsupported operator prefix "%s".' => 'Nepodporovaná predpona operátora „%s“.',
  'You must choose a dashboard.' => 'Musíte vybrať nástenku.',
  'SearchEngines must render a "%s" object, but this engine (of class "%s") rendered something else ("%s").' => 'SearchEngines musí vykresliť objekt „%s“, ale tento nástroj (triedy „%s“) vykreslil niečo iné („%s“).',
  'There is no active query yet.' => 'Zatiaľ neexistuje žiadny aktívny dopyt.',
  'Maximum page size for Conduit API method calls is 100, but this call specified %s.' => 'Maximálna veľkosť stránky pre volania metód Conduit API je 100, ale toto volanie určilo %s.',
  '%s Search' => 'Vyhľadávanie %s',
  'Service index is out of date, repairing...' => 'Index služby je neaktuálny, prebieha oprava…',
  'Query: %s' => 'Dopyt: %s',
  'Query is too long (%s bytes, maximum is %s bytes). Please use more specific search criteria.' => 'Dopyt je príliš dlhý (%s bajtov, maximum je %s bajtov). Použite konkrétnejšie kritériá vyhľadávania.',
  'Run a search query. Intended for debugging and development.' => 'Spustiť vyhľadávací dopyt. Určené na ladenie a vývoj.',
  'Two fields in this SearchEngine use the same key ("%s"), but each field must use a unique key.' => 'Dve polia v tomto SearchEngine používajú rovnaký kľúč („%s“), ale každé pole musí používať jedinečný kľúč.',
  'Parameter "%s" is invalid.' => 'Parameter „%s“ je neplatný.',
  'Ferret function "%s" is specified with a denormalized name. Instead, specify the function using the normalized function name ("%s").' => 'Funkcia Ferret „%s“ je určená denormalizovaným názvom. Namiesto toho určte funkciu použitím normalizovaného názvu funkcie („%s“).',
  'Unable to instantiate query class "%s": %s' => 'Nie je možné vytvoriť inštanciu triedy dopytu „%s“: %s',
  '—' => '—',
  'Cats have five pointy ends.' => 'Mačky majú päť špicatých koncov.',
  'Personal Saved Queries' => 'Osobné uložené dopyty',
  'SearchFields "%s" (of class "%s") and "%s" (of class "%s") both define the same Conduit key ("%s"). Keys must be unique.' => 'SearchFields „%s“ (triedy „%s“) a „%s“ (triedy „%s“) definujú rovnaký kľúč Conduit („%s“). Kľúče musia byť jedinečné.',
  'You must choose a link name.' => 'Musíte vybrať názov odkazu.',
  'Recompute common ngrams. This is an advanced workflow that can harm search quality if used improperly.' => 'Prepočítať bežné n-gramy. Ide o pokročilý postup, ktorý môže pri nesprávnom použití zhoršiť kvalitu vyhľadávania.',
  'Engine: Fulltext' => 'Nástroj: Fulltext',
  'Invalid query for parameter "%s".' => 'Neplatný dopyt pre parameter „%s“.',
  'Open Items' => 'Otvorené položky',
  'Global Menu Items' => 'Globálne položky ponuky',
  'No visible menu items can render content.' => 'Žiadne viditeľné položky ponuky nedokážu vykresliť obsah.',
  'This query specifies an invalid parameter. Review the query parameters and correct errors.' => 'Tento dopyt určuje neplatný parameter. Skontrolujte parametre dopytu a opravte chyby.',
  'You must choose a label name.' => 'Musíte vybrať názov menovky.',
  'Edit the menu for your personal account.' => 'Upraviť ponuku pre váš osobný účet.',
  'Application "%s" is not a valid application which you have permission to see.' => 'Aplikácia „%s“ nie je platná aplikácia, na ktorej zobrazenie máte oprávnenie.',
  'Specify either --reset or --threshold.' => 'Zadajte buď --reset alebo --threshold.',
  'Queries' => 'Dopyty',
  'Already Default' => 'Už predvolené',
  'No services need initialization.' => 'Žiadne služby nepotrebujú inicializáciu.',
  'The Spanish word for cat is "cato". The biggest cat is called "el cato".' => 'Španielske slovo pre mačku je „cato“. Najväčšia mačka sa volá „el cato“.',
  'Add New Menu Item...' => 'Pridať novú položku ponuky…',
  'Untitled "%s" Item' => 'Nepomenovaná položka „%s“',
  'The first cats evolved on the savannah about 8,000 years ago.' => 'Prvé mačky sa vyvinuli v savane približne pred 8 000 rokmi.',
  'You must name the query.' => 'Musíte pomenovať dopyt.',
  'Choose Item Icon' => 'Vyberte ikonu položky',
  'Cats will often bring you their prey because they feel sorry for your inability to hunt.' => 'Mačky vám často prinesú svoju korisť, pretože im je ľúto vašej neschopnosti loviť.',
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

This API endpoint supports these constraints:' => 'Vlastné obmedzenia môžete použiť odovzdaním slovníka v `constraints`.
Umožní vám to vyhľadávať konkrétne množiny výsledkov (napríklad môžete chcieť
zobraziť len výsledky s určitým stavom, statusom alebo vlastníkom).


Ak zadáte `queryKey` aj `constraints`, ako východiskový bod sa najprv použije
zabudovaný alebo uložený dopyt a potom sa použijú akékoľvek ďalšie hodnoty v
`constraints`, ktoré prepíšu predvolené hodnoty z pôvodného dopytu.

Rôzne koncové body podporujú rôzne obmedzenia. Obmedzenia, ktoré táto metóda
podporuje, sú podrobne uvedené nižšie. Ako príklad môžete zadať obmedzenia
takto:

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

Tento koncový bod API podporuje tieto obmedzenia:',
  'Substring Search' => 'Vyhľadávanie podreťazca',
  'Handle: %s' => 'Handle: %s',
  'This call does not support any attachments.' => 'Toto volanie nepodporuje žiadne prílohy.',
  'Really delete the query "%s"? You can not undo this. Remember all the great times you had filtering results together?' => 'Naozaj odstrániť dopyt „%s“? Túto akciu nie je možné vrátiť späť. Spomínate si na všetky skvelé chvíle, keď ste spolu filtrovali výsledky?',
  'Edit Menu Item: %s' => 'Upraviť položku ponuky: %s',
  'Not all cats can retract their claws, but most of them can.' => 'Nie všetky mačky dokážu zatiahnuť pazúry, ale väčšina áno.',
  'Restricted Dashboard' => 'Obmedzená nástenka',
  'Invalid Dashboard' => 'Neplatná nástenka',
  'Run this workflow with "--background" to queue tasks for the daemon workers.' => 'Spustite tento postup s „--background“, aby ste zaradili úlohy do frontu pre pracovné procesy démona.',
  'This is a visual divider which you can use to separate sections in the menu. It does not have any configurable options.' => 'Toto je vizuálny oddeľovač, ktorý môžete použiť na oddelenie sekcií v ponuke. Nemá žiadne konfigurovateľné možnosti.',
  'Room "%s" is not a valid room which you have permission to see.' => 'Miestnosť „%s“ nie je platná miestnosť, na ktorej zobrazenie máte oprávnenie.',
  'Use the application-specific Advanced Search for better results and additional search criteria: %s, %s. (%s)' => 'Pre lepšie výsledky a ďalšie kritériá vyhľadávania použite rozšírené vyhľadávanie špecifické pre aplikáciu: %s, %s. (%s)',
  'Taco cat spelled backwards is taco cat.' => 'Taco cat čítané odzadu je taco cat.',
  'Find objects matching a fulltext search query. See "Search User Guide" in the documentation for details.' => 'Nájsť objekty zodpovedajúce fulltextovému vyhľadávaciemu dopytu. Podrobnosti nájdete v „Používateľskej príručke vyhľadávania“ v dokumentácii.',
  'Search Ngram' => 'Vyhľadávací n-gram',
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

These are the fields available on this object type:' => 'Objekty zodpovedajúce vášmu dopytu sa vracajú ako zoznam slovníkov vo
vlastnosti `data` výsledkov. Každý slovník má nejaké metadáta a kľúč
`fields`, ktorý obsahuje informácie o objekte, o ktoré bude mať väčšina
volajúcich záujem.

Výsledky môžu napríklad vyzerať nejako takto:

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

Táto štruktúra výsledkov je štandardizovaná vo všetkých vyhľadávacích metódach,
ale dostupné polia sa líšia od aplikácie k aplikácii.

Toto sú polia dostupné pri tomto type objektu:',
  'Enable Menu Item' => 'Povoliť položku ponuky',
  'Engine: Hovercards' => 'Nástroj: Hovercards',
  'Search for objects with specific IDs.' => 'Vyhľadať objekty s konkrétnymi ID.',
  'Profile menu items can not be generated without an object context.' => 'Položky ponuky profilu nie je možné vygenerovať bez kontextu objektu.',
  'Too many relationships (%s, of type "%s"). Must be less than %s.' => 'Príliš veľa vzťahov (%s, typu „%s“). Musí byť menej ako %s.',
  'Profile Menu' => 'Ponuka profilu',
  'Service initialization complete.' => 'Inicializácia služby dokončená.',
  'Configure Menu' => 'Konfigurovať ponuku',
  'Cats have a tail, two feet, between one and three ears, and two other feet.' => 'Mačky majú chvost, dve nohy, jedno až tri uši a dve ďalšie nohy.',
  'Bucket' => 'Prihrádka',
  'Query Errors' => 'Chyby dopytu',
  'Unsupported item action "%s".' => 'Nepodporovaná akcia položky „%s“.',
  'Not supported.' => 'Nie je podporované.',
  'Query contains a token ("%s") with no search term. Query tokens specify text to search for.' => 'Dopyt obsahuje token („%s“) bez hľadaného výrazu. Tokeny dopytu určujú text, ktorý sa má vyhľadať.',
  'Unable to load object "%s" to rebuild indexes.' => 'Nie je možné načítať objekt „%s“ na prebudovanie indexov.',
  'You must choose a form.' => 'Musíte vybrať formulár.',
  'You can not create that relationship because it would create a circular dependency:' => 'Tento vzťah nie je možné vytvoriť, pretože by vytvoril cyklickú závislosť:',
  'Reindex objects previously indexed on or before a given date.' => 'Preindexovať objekty predtým indexované v daný dátum alebo pred ním.',
  'Engine class is null.' => 'Trieda nástroja je null.',
  'Mandatory Item' => 'Povinná položka',
  'Provide a list of objects to index (like "D123"), or a set of query constraint flags (like "--type"), or "--all" to index all objects.' => 'Poskytnite zoznam objektov na indexovanie (napríklad „D123“), alebo množinu príznakov obmedzenia dopytu (napríklad „--type“), alebo „--all“ na indexovanie všetkých objektov.',
  'Home Menu' => 'Domovská ponuka',
  'Raw query to execute.' => 'Surový dopyt na vykonanie.',
  'Two field specifications share the same key ("%s"). Each specification must have a unique key.' => 'Dve špecifikácie polí zdieľajú rovnaký kľúč („%s“). Každá špecifikácia musí mať jedinečný kľúč.',
  'Profile Menu Items' => 'Položky ponuky profilu',
  'You must choose a URI to link to.' => 'Musíte vybrať URI, na ktorú sa má odkazovať.',
  'Field Present: %s' => 'Prítomné pole: %s',
  'Expected "newMenuItemViewList()" to return a list (in class "%s"), but it returned something else ("%s").' => 'Očakávalo sa, že „newMenuItemViewList()“ vráti zoznam (v triede „%s“), ale vrátilo niečo iné („%s“).',
  'Initialize or repair a search service.' => 'Inicializovať alebo opraviť vyhľadávaciu službu.',
  'Current Default' => 'Aktuálne predvolené',
  'Outside of the CAT scan, cats have made almost no contributions to modern medicine.' => 'Okrem CAT skenu mačky takmer ničím neprispeli k modernej medicíne.',
  'Query Name' => 'Názov dopytu',
  'No search engines available.' => 'Nie sú k dispozícii žiadne vyhľadávacie nástroje.',
  'A cat\'s visual, olfactory, and auditory senses, Contribute to their hunting skills and natural defenses.' => 'Zrakové, čuchové a sluchové zmysly mačky prispievajú k jej loveckým schopnostiam a prirodzenej obrane.',
  'Object Fields' => 'Polia objektu',
  'Engine: Index' => 'Nástroj: Index',
  'Constraints' => 'Obmedzenia',
  'Result Ordering' => 'Zoradenie výsledkov',
  'Edit Saved Query' => 'Upraviť uložený dopyt',
  'You can not use query constraint flags (like "--version", "--type", or a list of specific objects) with "--all".' => 'Príznaky obmedzenia dopytu (ako „--version“, „--type“ alebo zoznam konkrétnych objektov) nie je možné použiť s „--all“.',
  'You cannot add more than %d objects to the relationship.' => 'Do vzťahu nie je možné pridať viac ako %d objektov.',
  'Motivator' => 'Motivátor',
  'Menu Items' => 'Položky ponuky',
  'NO OBJECTS' => 'ŽIADNE OBJEKTY',
  'Object types to reindex, like "task", "commit" or "revision".' => 'Typy objektov na preindexovanie, ako „task“, „commit“ alebo „revision“.',
  'Reindex all documents.' => 'Preindexovať všetky dokumenty.',
  'Hide Query' => 'Skryť dopyt',
  'Set Default Query' => 'Nastaviť predvolený dopyt',
  '(Restricted/Invalid Project)' => '(Obmedzený/neplatný projekt)',
  'Constants supported by the `%s` constraint:' => 'Konštanty podporované obmedzením `%s`:',
  'Use "--force" to force the index to update these documents.' => 'Použite „--force“ na vynútenie aktualizácie týchto dokumentov v indexe.',
  'Disable this menu item? It will no longer appear in the menu, but you can re-enable it later.' => 'Vypnúť túto položku ponuky? Prestane sa zobrazovať v ponuke, ale môžete ju neskôr znovu zapnúť.',
  '(See table below.)' => '(Pozri tabuľku nižšie.)',
  'Build or rebuild search indexes.' => 'Zostaviť alebo prebudovať vyhľadávacie indexy.',
  'Cats must eat a diet rich in fish to replace the tiny bones in their tails.' => 'Mačky musia jesť stravu bohatú na ryby, aby si nahradili drobné kosti v chvostoch.',
  '%s Queries' => 'Dopyty %s',
  'Set this item as the default for this menu? Users arriving on this page will be shown the content of this item by default.' => 'Nastaviť túto položku ako predvolenú pre túto ponuku? Používateľom, ktorí prídu na túto stránku, sa predvolene zobrazí obsah tejto položky.',
  'Fulltext Engine' => 'Fulltextový nástroj',
  'Two search engine attachments (of classes "%s" and "%s") specify the same attachment key ("%s"); keys must be unique.' => 'Dve prílohy vyhľadávacieho nástroja (tried „%s“ a „%s“) určujú rovnaký kľúč prílohy („%s“); kľúče musia byť jedinečné.',
  'In ancient Egypt, the cat-god Horus watched over all cats.' => 'V starovekom Egypte nad všetkými mačkami bdel mačací boh Horus.',
  'Ngrams Engine' => 'Nástroj n-gramov',
  'Delete Query' => 'Odstrániť dopyt',
  'Selecting objects to index...' => 'Vyberajú sa objekty na indexovanie…',
  '"%s" date can not be parsed.' => 'Dátum „%s“ nie je možné analyzovať.',
  'Current Menu Items' => 'Aktuálne položky ponuky',
  'Failed to update search index for document "%s": %s' => 'Nepodarilo sa aktualizovať vyhľadávací index pre dokument „%s“: %s',
  'Search for objects with specific PHIDs.' => 'Vyhľadať objekty s konkrétnymi PHID.',
  'Full Name' => 'Celé meno',
  'Type "%s" matches no indexable objects. Supported types are: %s.' => 'Typ „%s“ nezodpovedá žiadnym indexovateľným objektom. Podporované typy sú: %s.',
  'Menu Item' => 'Položka ponuky',
  'This is a standard **ApplicationSearch** method which will let you list, query, or search for objects. For documentation on these endpoints, see **[[ %s | Conduit API: Using Search Endpoints ]]**.' => 'Toto je štandardná metóda **ApplicationSearch**, ktorá vám umožní vypísať, dopytovať alebo vyhľadávať objekty. Dokumentáciu k týmto koncovým bodom nájdete v **[[ %s | Conduit API: Using Search Endpoints ]]**.',
  'Many cats appear black in low light, suffering a -2 modifier to luck rolls.' => 'Mnohé mačky sa pri slabom svetle javia ako čierne a majú postih -2 na hody na šťastie.',
  'Attachments' => 'Prílohy',
  'The Japanese word for cat is "kome", which is also the word for rice. Japanese cats love to eat rice, so the two are synonymous.' => 'Japonské slovo pre mačku je „kome“, čo je zároveň slovo pre ryžu. Japonské mačky milujú ryžu, takže tieto dve slová sú synonymá.',
  'In the wild, cats and raccoons sometimes hunt together in packs.' => 'V divočine mačky a medvedíky čistotné niekedy lovia spolu v svorkách.',
  'Query (with ID "%s") has already been saved. Queries are immutable once saved.' => 'Dopyt (s ID „%s“) už bol uložený. Dopyty sú po uložení nemenné.',
  'No Content' => 'Žiadny obsah',
  'Prebuilt Queries' => 'Predpripravené dopyty',
  'Fulltext Search Results' => 'Výsledky fulltextového vyhľadávania',
  'Query has an invalid sequence of operators ("%s").' => 'Dopyt má neplatnú postupnosť operátorov („%s“).',
  'Engine: Search' => 'Nástroj: Vyhľadávanie',
  'Profile Menu Item' => 'Položka ponuky profilu',
  '"2022-12-25" or "7 days ago"...' => '„2022-12-25“ alebo „pred 7 dňami“…',
  'Paging and Limits' => 'Stránkovanie a limity',
  'No objects selected to index.' => 'Na indexovanie neboli vybrané žiadne objekty.',
  'A cat can run seven times faster than a human, but only for a short distance.' => 'Mačka dokáže bežať sedemkrát rýchlejšie ako človek, ale iba na krátku vzdialenosť.',
  'This engine is used to modify menu items on profiles.' => 'Tento nástroj sa používa na úpravu položiek ponuky v profiloch.',
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
queries:' => 'Ako východiskový bod pre filtrovanie výsledkov si môžete vybrať zabudovaný
alebo uložený dopyt tak, že ho vyberiete pomocou `queryKey`. Ak neurčíte
`queryKey`, dopyt začne bez obmedzení.

Napríklad mnohé aplikácie majú zabudované dopyty ako `"active"` alebo
`"open"` na nájdenie len aktívnych alebo povolených výsledkov. Ak chcete použiť
`queryKey`, zadajte ho takto:

```lang=json, name="Selecting a Builtin Query"
{
  ...
  "queryKey": "active",
  ...
}
```

Tabuľka nižšie zobrazuje kľúče, ktoré sa používajú na výber zabudovaných dopytov
a vašich uložených dopytov, ale ako východiskový bod môžete použiť aj **akýkoľvek**
dopyt, ktorý spustíte cez webové rozhranie. Kľúč dopytu nájdete preskúmaním URI
po spustení bežného vyhľadávania.

Na výber zabudovaných dopytov a vašich nakonfigurovaných uložených dopytov môžete
použiť tieto kľúče:',
  'No object relationship of type "%s" exists.' => 'Neexistuje žiadny vzťah objektu typu „%s“.',
  'Delete Menu Item' => 'Odstrániť položku ponuky',
  'Ferret search engine field key ("%s") is invalid. Field keys must be exactly four characters long and contain only lowercase latin letters.' => 'Kľúč poľa vyhľadávacieho nástroja Ferret („%s“) je neplatný. Kľúče polí musia mať presne štyri znaky a obsahovať iba malé latinské písmená.',
  'Service index is already up to date.' => 'Index služby je už aktuálny.',
  'Cats spend most of their time plotting to kill their owner.' => 'Mačky trávia väčšinu času plánovaním, ako zabiť svojho majiteľa.',
  'Storage Used' => 'Použité úložisko',
  'Project Menu' => 'Ponuka projektu',
  'Reindex objects previously indexed on or after a given date.' => 'Preindexovať objekty predtým indexované v daný dátum alebo po ňom.',
  'Customize Query: %s' => 'Prispôsobiť dopyt: %s',
  'Edit Related Objects...' => 'Upraviť súvisiace objekty…',
  'Create Menu Item' => 'Vytvoriť položku ponuky',
  'No saved queries.' => 'Žiadne uložené dopyty.',
  'Supports ID/PHID Queries' => 'Podporuje dopyty ID/PHID',
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

These attachments are available:' => 'Predvolene sa vracajú len základné informácie o objektoch. Ak chcete
rozsiahlejšie informácie, môžete použiť dostupné `attachments` na získanie
ďalších informácií vo výsledkoch (napríklad odberateľov a projekty).

Vo všeobecnosti vyžiadanie väčšieho množstva informácií znamená, že dopyt sa
vykonáva pomalšie a vracia viac údajov (v niektorých prípadoch oveľa viac
údajov). Bežne by ste mali vyžiadať len údaje, ktoré potrebujete.

Ak chcete vyžiadať ďalšie údaje, určte, ktoré prílohy chcete, v parametri
`attachments`:

```lang=json, name="Example Attachments Request"
{
  ...
  "attachments": {
    "subscribers": true
  },
  ...
}
```

Tento príklad určuje, že výsledky by mali obsahovať informácie o odberateľoch.
V návratovej hodnote bude teraz mať každý objekt tieto informácie vyplnené v
príslušnej hodnote `attachments`:

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

K dispozícii sú tieto prílohy:',
  'Excluding Search' => 'Vylučovacie vyhľadávanie',
  'The word "catastrophe" has no etymological relationship to the word "cat".' => 'Slovo „katastrofa“ nemá žiadnu etymologickú súvislosť so slovom „mačka“.',
  'Skipped %s document(s) which have not updated since they were last indexed.' => array(
    'Preskočených %s dokument, ktorý sa neaktualizoval od svojho posledného indexovania.',
    'Preskočených %s dokumenty, ktoré sa neaktualizovali od svojho posledného indexovania.',
    'Preskočených %s dokumentov, ktoré sa neaktualizovali od svojho posledného indexovania.',
  ),
  'Edit Builtin Item' => 'Upraviť zabudovanú položku',
  'Text value for "%s" can not be parsed.' => 'Textovú hodnotu pre „%s“ nie je možné analyzovať.',
  'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same name ("%s"). Each function must have a unique name.' => 'Dve rôzne rozšírenia fulltextového nástroja („%s“ a „%s“) definujú vyhľadávaciu funkciu s rovnakým názvom („%s“). Každá funkcia musí mať jedinečný názov.',
  '\'%s\' is not the name of a known object.' => '\'%s\' nie je názov známeho objektu.',
  'You must delegate to this controller, not invoke it directly.' => 'Musíte delegovať na tento ovládač, nie ho volať priamo.',
  'Cat tails are flexible because they contain thousands of tiny bones.' => 'Mačacie chvosty sú ohybné, pretože obsahujú tisíce drobných kostí.',
  'Cat Facts' => 'Fakty o mačkách',
  'Ferret Engine Ngrams' => 'N-gramy nástroja Ferret',
  'Forced search index updates for %s document(s).' => array(
    'Vynútené aktualizácie vyhľadávacieho indexu pre %s dokument.',
    'Vynútené aktualizácie vyhľadávacieho indexu pre %s dokumenty.',
    'Vynútené aktualizácie vyhľadávacieho indexu pre %s dokumentov.',
  ),
  'Updated search indexes for %s document(s).' => array(
    'Aktualizované vyhľadávacie indexy pre %s dokument.',
    'Aktualizované vyhľadávacie indexy pre %s dokumenty.',
    'Aktualizované vyhľadávacie indexy pre %s dokumentov.',
  ),
  'Field Absent: %s' => 'Chýbajúce pole: %s',
  'Cats are stealthy predators and nearly invisible to radar.' => 'Mačky sú nenápadní predátori a takmer neviditeľné pre radar.',
  'Search Index Versions' => 'Verzie vyhľadávacieho indexu',
  'You can not create a relationship (of type "%s") to object "%s" because it is not the right type of object for this relationship.' => 'Nie je možné vytvoriť vzťah (typu „%s“) k objektu „%s“, pretože nejde o správny typ objektu pre tento vzťah.',
  'Object produced two items with the same builtin key ("%s"). Each item must have a unique builtin key.' => 'Objekt vytvoril dve položky s rovnakým zabudovaným kľúčom („%s“). Každá položka musí mať jedinečný zabudovaný kľúč.',
  '\'%s\' is not a builtin!' => '\'%s\' nie je zabudovaný!',
  'All Open Objects' => 'Všetky otvorené objekty',
  'Buckets Overflowing' => 'Prihrádky pretekajú',
  'Disable Query' => 'Vypnúť dopyt',
  'Divider' => 'Oddeľovač',
  'Archived Dashboard' => 'Archivovaná nástenka',
  'Manage Menu' => 'Spravovať ponuku',
  'Minimum page size for Conduit API method calls is 1, but this call specified %s.' => 'Minimálna veľkosť stránky pre volania metód Conduit API je 1, ale toto volanie určilo %s.',
  'This query took too long, so only some results are shown. %s' => 'Tento dopyt trval príliš dlho, takže sa zobrazujú len niektoré výsledky. %s',
  'The largest recorded cat was nearly 11 inches long from nose to tail.' => 'Najväčšia zaznamenaná mačka merala od nosa po chvost takmer 11 palcov.',
  'PHID Type' => 'Typ PHID',
  'Invalid Relationship' => 'Neplatný vzťah',
  'There is nothing here.' => 'Nič tu nie je.',
  'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same key ("%s"). Each function must have a unique key.' => 'Dve rôzne rozšírenia fulltextového nástroja („%s“ a „%s“) definujú vyhľadávaciu funkciu s rovnakým kľúčom („%s“). Každá funkcia musí mať jedinečný kľúč.',
  'Search engine ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'Vyhľadávací nástroj („%s“) definuje exportné pole s kľúčom („%s“), ktorý koliduje s iným poľom. Každé pole musí mať jedinečný kľúč.',
  'IDs' => 'ID',
  'This query will become your default query in the current application.' => 'Tento dopyt sa stane vaším predvoleným dopytom v aktuálnej aplikácii.',
  'PHIDs' => 'PHID',
  'Save Query' => 'Uložiť dopyt',
  'Full-Text Search' => 'Fulltextové vyhľadávanie',
  'Too few documents of type "%s" for any ngrams to be common.' => 'Príliš málo dokumentov typu „%s“ na to, aby boli akékoľvek n-gramy bežné.',
  'Deprecated alias for "%s".' => 'Zastaraný alias pre „%s“.',
  'Query has too many search tokens (%s tokens, maximum is %s tokens). Please use more specific search criteria.' => 'Dopyt má príliš veľa vyhľadávacích tokenov (%s tokenov, maximum je %s tokenov). Použite konkrétnejšie kritériá vyhľadávania.',
  'Edit Menu Item' => 'Upraviť položku ponuky',
  'Initializing search service "%s".' => 'Inicializuje sa vyhľadávacia služba „%s“.',
  'SELECT' => 'SELECT',
  'Skipping service "%s" because it is not writable.' => 'Preskakuje sa služba „%s“, pretože do nej nie je možné zapisovať.',
  'Date value for "%s" can not be parsed.' => 'Hodnotu dátumu pre „%s“ nie je možné analyzovať.',
  'Browse Item Types' => 'Prehľadávať typy položiek',
  'NOTE' => 'NOTE',
  'Parameter "%s" includes an invalid key.' => 'Parameter „%s“ obsahuje neplatný kľúč.',
  '"%s" must be a date before "%s".' => '„%s“ musí byť dátum pred „%s“.',
  'Fulltext Search' => 'Fulltextové vyhľadávanie',
  'Parameter "%s" must be a map of attachments.' => 'Parameter „%s“ musí byť mapa príloh.',
  'Drag items in this list to reorder them.' => 'Presuňte položky v tomto zozname, aby ste ich preusporiadali.',
  'Prune ngrams present in more than this fraction of documents. Provide a value between 0.0 and 1.0.' => 'Odstrániť n-gramy prítomné vo viac ako tejto zlomkovej časti dokumentov. Zadajte hodnotu medzi 0.0 a 1.0.',
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

These builtin orders are available:' => 'Na výber zoradenia výsledkov použite `order`.

Buď zadajte jeden kľúč zo zabudovaných zoradení (ide o množinu zmysluplných,
vysokoúrovňových, ľudsky čitateľných zoradení), alebo zadajte vlastný zoznam
nízkoúrovňových stĺpcov.

Ak chcete použiť vysokoúrovňové zoradenie, vyberte zabudované zoradenie z tabuľky
nižšie a zadajte ho takto:

```lang=json, name="Choosing a Result Order"
{
  ...
  "order": "newest",
  ...
}
```

K dispozícii sú tieto zabudované zoradenia:',
  'Profile picture' => 'Profilová fotka',
  'This query took too long. %s' => 'Tento dopyt trval príliš dlho. %s',
  'The first cats evolved in swamps about 65 years ago.' => 'Prvé mačky sa vyvinuli v močiaroch približne pred 65 rokmi.',
  'You can tell how warm a cat is by examining the coloration: cooler areas are darker.' => 'Podľa sfarbenia mačky viete zistiť, aká je teplá: chladnejšie oblasti sú tmavšie.',
  'Specify a query with --query.' => 'Zadajte dopyt pomocou --query.',
  'You must choose an application.' => 'Musíte vybrať aplikáciu.',
  'This menu currently has no items.' => 'Táto ponuka momentálne nemá žiadne položky.',
  'Setting "%s" is misconfigured: %s' => 'Nastavenie „%s“ je nesprávne nakonfigurované: %s',
  'This item is already set as the default item for this menu.' => 'Táto položka je už nastavená ako predvolená položka pre túto ponuku.',
  'Edit the global default menu for all users.' => 'Upraviť globálnu predvolenú ponuku pre všetkých používateľov.',
  'Profile Menu User Guide' => 'Používateľská príručka ponuky profilu',
  'You can not create a relationship to object "%s" because objects can not be related to themselves.' => 'Nie je možné vytvoriť vzťah k objektu „%s“, pretože objekty nemôžu byť vo vzťahu samy so sebou.',
  'Expected fulltext engine extension ("%s") to return a list of "FerretSearchFunction" objects from "newFerretSearchFunctions()", but found something else ("%s") at index "%s".' => 'Očakávalo sa, že rozšírenie fulltextového nástroja („%s“) vráti zoznam objektov „FerretSearchFunction“ z „newFerretSearchFunctions()“, ale na indexe „%3$s“ sa našlo niečo iné („%s“).',
  'Type specification "%s" duplicates type specification "%s". Specify each type only once.' => 'Špecifikácia typu „%s“ duplikuje špecifikáciu typu „%s“. Každý typ určte iba raz.',
  'Item Status' => 'Stav položky',
  'Project "%s" is not a valid project which you have permission to see.' => 'Projekt „%s“ nie je platný projekt, na ktorého zobrazenie máte oprávnenie.',
  'Provided view is not one of the views in the list: you can only select a view which appears in the list.' => 'Poskytnuté zobrazenie nie je jedným zo zobrazení v zozname: môžete vybrať iba zobrazenie, ktoré sa nachádza v zozname.',
  'No views match identifier "%s"!' => 'Žiadne zobrazenia nezodpovedajú identifikátoru „%s“!',
  'Choose a valid export format.' => 'Vyberte platný formát exportu.',
  'Tooltip' => 'Popis',
  'Search engine ("%s") exported the wrong number of objects, expected %s but got %s.' => 'Vyhľadávací nástroj („%s“) exportoval nesprávny počet objektov, očakávalo sa %s, ale získalo sa %s.',
  'This built-in query can not be deleted, but you can disable it so it does not appear in your query menu. You can enable it again later. Disable built-in query "%s"?' => 'Tento zabudovaný dopyt nie je možné odstrániť, ale môžete ho vypnúť, aby sa nezobrazoval vo vašej ponuke dopytov. Neskôr ho môžete znovu zapnúť. Vypnúť zabudovaný dopyt „%s“?',
  'Motivate your team with inspirational quotes from great minds. This menu item shows a new quote every day.' => 'Motivujte svoj tím inšpiratívnymi citátmi od veľkých mysliteľov. Táto položka ponuky zobrazuje každý deň nový citát.',
  'Saved Queries' => 'Uložené dopyty',
  'Unknown search function "%s". Supported functions are: %s. (To search for a term containing a colon, surround the term in double quotes.)' => 'Neznáma vyhľadávacia funkcia „%s“. Podporované funkcie sú: %s. (Ak chcete vyhľadať výraz obsahujúci dvojbodku, uzavrite výraz do dvojitých úvodzoviek.)',
  '(Restricted/Invalid Form)' => '(Obmedzený/neplatný formulár)',
  'Edit Profile Menu Item Configurations' => 'Upraviť konfigurácie položiek ponuky profilu',
  'Delete this menu item?' => 'Odstrániť túto položku ponuky?',
  'Cats prefer vanilla ice cream.' => 'Mačky uprednostňujú vanilkovú zmrzlinu.',
  'Resetting common ngrams for "%s".' => 'Obnovujú sa bežné n-gramy pre „%s“.',
  'Export Results' => 'Exportovať výsledky',
  'To configure the search engines, edit [[ %s | %s ]] configuration. See **[[ %s | %s ]]** for documentation.' => 'Ak chcete nakonfigurovať vyhľadávacie nástroje, upravte konfiguráciu [[ %s | %s ]]. Dokumentáciu nájdete v **[[ %s | %s ]]**.',
  'All Fulltext Search hosts failed:' => 'Všetci hostitelia fulltextového vyhľadávania zlyhali:',
  'All Objects' => 'Všetky objekty',
  'Dashboard "%s" is not a valid dashboard which you have permission to see.' => 'Nástenka „%s“ nie je platná nástenka, na ktorej zobrazenie máte oprávnenie.',
  'Failed to rebuild search index for any documents.' => 'Nepodarilo sa prebudovať vyhľadávací index pre žiadne dokumenty.',
  'Updated common ngrams for "%s".' => 'Aktualizované bežné n-gramy pre „%s“.',
  'The query matched more than one page of results. Results are paginated before bucketing, so later pages may contain additional results in any bucket.' => 'Dopyt zodpovedal viac ako jednej stránke výsledkov. Výsledky sa stránkujú pred rozdelením do prihrádok, takže neskoršie stránky môžu obsahovať ďalšie výsledky v ktorejkoľvek prihrádke.',
  'Ferret Fulltext Engine' => 'Fulltextový nástroj Ferret',
  'Export engine extension ("%s") exported the wrong number of objects, expected %s but got %s.' => 'Rozšírenie exportného nástroja („%s“) exportovalo nesprávny počet objektov, očakávalo sa %s, ale získalo sa %s.',
  'Global Queries' => 'Globálne dopyty',
  'Link' => 'Odkaz',
  'Query contains unmatched double quotes.' => 'Dopyt obsahuje nespárované dvojité úvodzovky.',
  'Enable Query' => 'Povoliť dopyt',
  'This item can not be set as the default item. This is usually because the item has no page of its own, or links to an external page.' => 'Túto položku nie je možné nastaviť ako predvolenú položku. Zvyčajne je to preto, že položka nemá vlastnú stránku alebo odkazuje na externú stránku.',
  'Browse Results' => 'Prehľadávať výsledky',
  'Exact Search' => 'Presné vyhľadávanie',
  'Enable this menu item? It will appear in the menu again.' => 'Zapnúť túto položku ponuky? Znovu sa zobrazí v ponuke.',
  'Created By Me' => 'Vytvorené mnou',
  'Specify either --reset or --threshold, not both.' => 'Zadajte buď --reset alebo --threshold, nie oboje.',
  'Object produced a builtin item with no builtin item key! Builtin items must have a unique key.' => 'Objekt vytvoril zabudovanú položku bez kľúča zabudovanej položky! Zabudované položky musia mať jedinečný kľúč.',
  'Ferret search engine function name ("%s") is invalid. Function names must be nonempty and may only contain latin letters and hyphens.' => 'Názov funkcie vyhľadávacieho nástroja Ferret („%s“) je neplatný. Názvy funkcií nesmú byť prázdne a môžu obsahovať iba latinské písmená a spojovníky.',
  'Disable Query?' => 'Vypnúť dopyt?',
  'No Bucketing' => 'Bez rozdelenia do prihrádok',
  'Use Results' => 'Použiť výsledky',
  'Expected fulltext engine extension ("%s") to return a list of functions from "newFerretSearchFunctions()", got "%s".' => 'Očakávalo sa, že rozšírenie fulltextového nástroja („%s“) vráti zoznam funkcií z „newFerretSearchFunctions()“, získalo sa „%s“.',
  'Order By' => 'Zoradiť podľa',
  'No new common ngrams exist for "%s".' => 'Pre „%s“ neexistujú žiadne nové bežné n-gramy.',
  'Cats purr when they are happy, upset, or asleep.' => 'Mačky priadu, keď sú šťastné, rozrušené alebo spia.',
  'Save this query as a global query, making it visible to all users.' => 'Uložiť tento dopyt ako globálny dopyt, čím sa sprístupní všetkým používateľom.',
  'Item Types' => 'Typy položiek',
  'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.' => 'Nie je možné vytvoriť vzťah k objektu „%s“, pretože objekt neexistuje alebo sa nepodarilo načítať.',
  'Edit Query' => 'Upraviť dopyt',
  'No results found for this query.' => 'Pre tento dopyt sa nenašli žiadne výsledky.',
  'Searched For:' => 'Hľadalo sa:',
  'Force a complete rebuild of the entire index instead of an incremental update.' => 'Vynútiť úplné prebudovanie celého indexu namiesto prírastkovej aktualizácie.',
  'Cats with high self-esteem seek out high perches to launch their attacks. Watch out!' => 'Mačky s vysokým sebavedomím vyhľadávajú vysoké bidielka, z ktorých spúšťajú svoje útoky. Dávajte si pozor!',
  'Motivator: %s' => 'Motivátor: %s',
  '%s (Not Available)' => '%s (nie je k dispozícii)',
  'Indexing %s object(s).' => array(
    'Indexuje sa %s objekt.',
    'Indexuje sa %s objekty.',
    'Indexuje sa %s objektov.',
  ),
  'This dashboard has been archived.' => 'Táto nástenka bola archivovaná.',
  'Specify a numeric threshold between 0 and 1.' => 'Zadajte číselný prah medzi 0 a 1.',
  '(Restricted/Invalid Application)' => '(Obmedzená/neplatná aplikácia)',
  'DEV: Overheated State' => 'DEV: Prehriaty stav',
  'Query field must be absent ("%s") and present ("%s"). This is impossible, so the query is not valid.' => 'Pole dopytu musí byť neprítomné („%s“) aj prítomné („%s“). To je nemožné, takže dopyt nie je platný.',
  'Reindex objects previously indexed with a particular version of the indexer.' => 'Preindexovať objekty predtým indexované konkrétnou verziou indexera.',
  'Portal Menu' => 'Ponuka portálu',
  'Not Defaultable' => 'Nie je možné nastaviť ako predvolené',
  'Really Delete Query?' => 'Naozaj odstrániť dopyt?',
  'Query offset is too large. offset+limit=%s (max=%s)' => 'Odsadenie dopytu je príliš veľké. offset+limit=%s (max=%s)',
  'Instead of indexing in this process, queue tasks for the daemons. This can improve performance, but makes it more difficult to debug search indexing.' => 'Namiesto indexovania v tomto procese zaraďte úlohy do frontu pre démonov. Môže to zlepšiť výkon, ale sťažuje to ladenie indexovania vyhľadávania.',
  'Edit Queries...' => 'Upraviť dopyty…',
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

These low-level columns are available:' => 'Namiesto toho si môžete vybrať nízkoúrovňové zoradenie stĺpcov. Ak to chcete
urobiť, poskytnite namiesto jedného kľúča zoznam stĺpcov. Ide o pokročilú funkciu.

Vo vlastnom zoradení stĺpcov:

  - každý stĺpec sa smie zadať iba raz;
  - každý stĺpec môže mať predponu `-` na obrátenie poradia;
  - posledný stĺpec musí byť jedinečný stĺpec, zvyčajne `id`; a
  - žiadny iný stĺpec okrem posledného nesmie byť jedinečný.

Ak chcete použiť nízkoúrovňové zoradenie, vyberte postupnosť stĺpcov a zadajte
ich takto:

```lang=json, name="Using a Custom Order"
{
  ...
  "order": ["color", "-name", "id"],
  ...
}
```

K dispozícii sú tieto nízkoúrovňové stĺpce:',
  'Builtin item ("%s") specifies a bad item key ("%s"); there is no corresponding item implementation available.' => 'Zabudovaná položka („%s“) určuje nesprávny kľúč položky („%s“); nie je k dispozícii žiadna zodpovedajúca implementácia položky.',
  'DEV: New User State' => 'DEV: Stav nového používateľa',
  'Export engine extension ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'Rozšírenie exportného nástroja („%s“) definuje exportné pole s kľúčom („%s“), ktorý koliduje s iným poľom. Každé pole musí mať jedinečný kľúč.',
  'A cattail is a wetland plant with an appearance that resembles the tail of a cat.' => 'Pálka (cattail) je mokraďová rastlina, ktorej vzhľad pripomína mačací chvost.',
  'Service index does not exist, creating...' => 'Index služby neexistuje, vytvára sa…',
  'Export Data' => 'Exportovať údaje',
  'Circular Dependency' => 'Cyklická závislosť',
  'Cats use a special type of magnetism to help them land on their feet.' => 'Mačky používajú špeciálny druh magnetizmu, ktorý im pomáha dopadnúť na nohy.',
  'Lisk Builtin Properties' => 'Zabudované vlastnosti Lisk',
  'More information' => 'Viac informácií',
  'Application "%s" is not enabled!' => 'Aplikácia „%s“ nie je povolená!',
  'Unable to Render Dashboard' => 'Nie je možné vykresliť nástenku',
  'Queued %s document(s) for background indexing.' => array(
    'Zaradených %s dokument do frontu na indexovanie na pozadí.',
    'Zaradených %s dokumenty do frontu na indexovanie na pozadí.',
    'Zaradených %s dokumentov do frontu na indexovanie na pozadí.',
  ),
  '(Restricted/Invalid Conpherence)' => '(Obmedzená/neplatná Conpherence)',
  'System Saved Queries' => 'Systémové uložené dopyty',
  'Threshold must be greater than 0.0 and less than 1.0.' => 'Prah musí byť väčší ako 0.0 a menší ako 1.0.',
  'This dashboard is invalid and could not be loaded.' => 'Táto nástenka je neplatná a nepodarilo sa ju načítať.',
  'Enable the built-in query "%s"? It will appear in your menu again.' => 'Zapnúť zabudovaný dopyt „%s“? Znovu sa zobrazí vo vašej ponuke.',
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
if `before` is `null`, there are no previous results available.' => 'Dopyty sú obmedzené na vrátenie 100 výsledkov naraz. Ak chcete menej
výsledkov ako toto, môžete pomocou `limit` určiť menší limit.

Ak chcete viac výsledkov, budete musieť vykonať ďalšie dopyty na získanie
ďalších stránok výsledkov.

Štruktúra výsledkov obsahuje kľúč `cursor` s informáciami, ktoré budete
potrebovať na načítanie ďalšej stránky výsledkov. Po počiatočnom dopyte to
zvyčajne vyzerá nejako takto:

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

Polia `limit` a `order` opisujú efektívny limit a zoradenie, s ktorými bol
dopyt vykonaný, a zvyčajne nie sú príliš zaujímavé. Polia `after` a `before`
vám poskytujú kurzory, ktoré môžete odovzdať pri ďalšom volaní API na získanie
ďalšej (alebo predchádzajúcej) stránky výsledkov.

Ak chcete získať ďalšiu stránku výsledkov, zopakujte volanie API so všetkými
rovnakými parametrami ako pôvodné volanie, ale pri druhom volaní odovzdajte v
parametri `after` kurzor `after`, ktorý ste dostali z prvého volania.

Ak spravíte veci správne, mali by ste získať druhú stránku výsledkov a
štruktúru kurzora takto:

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

Teraz môžete pokračovať na tretiu stránku výsledkov odovzdaním nového kurzora
`after` do parametra `after` vo vašom treťom volaní, alebo sa vrátiť na
predchádzajúcu stránku výsledkov odovzdaním kurzora `before` do parametra
`before`. Môže to byť užitočné, ak vykresľujete webové rozhranie pre používateľa
a chcete poskytnúť odkazy „Ďalšia stránka“ a „Predchádzajúca stránka“.

Ak je `after` `null`, nie je k dispozícii žiadna ďalšia stránka výsledkov.
Rovnako, ak je `before` `null`, nie sú k dispozícii žiadne predchádzajúce výsledky.',
  'Engine Name' => 'Názov nástroja',
);
  }

}
