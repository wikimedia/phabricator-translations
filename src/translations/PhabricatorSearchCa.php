<?php

final class PhabricatorSearchCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'No results.' => 'No hi ha resultats.',
      'This menu item is very important, and can not be disabled.' => 'Aquest element de carta és molt important, i no pot ser desactivat.',
      'Enable Query?' => 'Habilitar la consulta?',
      'Personal Menu Items' => 'Elements personals del menú',
      'Format' => 'Format',
      'The queries you have saved are private. Only you can view or edit them.' => 'Les consultes que heu desat són privades. Només tu podeu visualitzar-les o editar-les.',
      'cat -A can find mice hiding in files.' => 'gat -Un pot trobar ratolins amagats en arxius.',
      'Export Format Not Available' => 'Format d\'exportació no disponible',
      'Readable' => 'Llegible',
      'Search Engines' => 'Motors de cerca',
      'Form "%s" is not a valid form which you have permission to see.' => 'El formulari "%s" no és un formulari vàlid que pugueu veure.',
      'Reset all common ngram records.' => 'Restableix tots els registres ngram habituals.',
      'N/A' => 'N/A',
      'URI "%s" is not a valid link URI. It should be a full, valid URI beginning with a protocol like "%s".' => 'L\'URI "%s" no és un URI d\'enllaç vàlid. Ha de ser un URI complet i vàlid que comenci amb un protocol com "%s".',
      'Builtin \'%s\' is not supported!' => 'No s\'admet el «%s» incorporat!',
      'You must choose a room.' => 'Heu de triar una sala.',
      'Elasticsearch server returned invalid JSON!' => 'El servidor d\'Elasticsearch ha retornat un JSON no vàlid!',
      'The popular trivia game "World of Warcraft" features a race of cat people called the Khajiit.' => 'El popular joc "World of Warcraft" inclou una raça de persones de gats anomenada Khajiit.',
      'Add to Dashboard' => 'Afegir al quadre de comandament',
      'Failed to load custom PHID "%s"!' => 'No s\'ha pogut carregar el PHID personalitzat "%s"!',
      'Cats use their keen sense of smell to avoid feeling empathy.' => 'Els gats utilitzen el seu sentit de l\'olfacte per evitar sentir empatia.',
      'Find stuff in big piles.' => 'Cerqueu coses en grans piles.',
      'You must choose a dashboard.' => 'Heu de triar un quadre de comandament.',
      'SearchEngines must render a "%s" object, but this engine (of class "%s") rendered something else ("%s").' => 'SearchEngines ha de renderitzar un objecte \'%s\', però aquest motor (de la classe \'%s\') ha representat una altra cosa (\'%s\').',
      'There is no active query yet.' => 'Encara no hi ha cap consulta activa.',
      'Maximum page size for Conduit API method calls is 100, but this call specified %s.' => 'La mida màxima de la pàgina per a les trucades al mètode de l\'API Conduit és de 100, però aquesta trucada especifica %s.',
      'Query: %s' => 'Consulta: %s',
      'Run a search query. Intended for debugging and development.' => 'Executeu una consulta de cerca. Destinat a la depuració i desenvolupament.',
      'Two fields in this SearchEngine use the same key ("%s"), but each field must use a unique key.' => 'Dos camps d’aquest SearchEngine utilitzen la mateixa clau (\'%s\'), però cada camp ha d\'utilitzar una clau única.',
      'Unable to instantiate query class "%s": %s' => 'No es pot iniciar la classe de consulta "%s": %s',
      'Cats have five pointy ends.' => 'Els gats tenen cinc puntes punxegudes.',
      'SearchFields "%s" (of class "%s") and "%s" (of class "%s") both define the same Conduit key ("%s"). Keys must be unique.' => 'Els valors de SearchFields "%s" (de la classe "%s") i "%s" (de la classe "%s") defineixen la mateixa clau de conducte ("%s"). Les claus han de ser úniques.',
      'Recompute common ngrams. This is an advanced workflow that can harm search quality if used improperly.' => 'Torna a calcular ngrams habituals. Es tracta d’un flux de treball avançat que pot danyar la qualitat de la cerca si s’utilitza de manera incorrecta.',
      'Engine: Fulltext' => 'Motor: text complet',
      'No visible menu items can render content.' => 'Cap element de menú visible pot renderitzar contingut.',
      'This query specifies an invalid parameter. Review the query parameters and correct errors.' => 'Aquesta consulta especifica un paràmetre no vàlid. Reviseu els paràmetres de la consulta i corregiu els errors.',
      'You must choose a label name.' => 'Heu de triar un nom d’etiqueta.',
      'Application "%s" is not a valid application which you have permission to see.' => 'L\'aplicació \'%s\' no és una aplicació vàlida que pugueu veure.',
      'Parameter "constraints" must be a map of constraints, got "%s".' => 'El paràmetre \'restriccions\' ha de ser un mapa de restriccions, amb \'%s\'.',
      'The Spanish word for cat is "cato". The biggest cat is called "el cato".' => 'La paraula espanyola per a gat és "gato".  El gat més gran es diu "el gato".',
      'Query key "%s" does not correspond to a valid query.' => 'La clau de consulta \'%s\' no correspon a una consulta vàlida.',
      'The first cats evolved on the savannah about 8,000 years ago.' => 'Els primers gats van evolucionar a la sabana fa uns 8.000 anys.',
      'You must name the query.' => 'Heu de posar un nom a la consulta.',
      'Cats will often bring you their prey because they feel sorry for your inability to hunt.' => 'Els gats sovint et porten les seves preses perquè senten llàstima per la teva incapacitat per caçar.',
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
    This API endpoint supports these constraints:' => 'Podeu aplicar restriccions personalitzades passant un diccionari a
    "restriccions". Això us permetrà cercar conjunts de resultats específics (per
    exemple, és possible que vulgueu mostrar només resultats amb un estat, estat o
    propietari determinats).
    Si especifiqueu tant "queryKey" com "constraints", la consulta integrada o
    desada s\'aplicarà primer com a punt de partida, llavors s\'aplicaran els valors
    addicionals de "constraints", sobreescrivint els valors predeterminats de la
    consulta original.
    Els diferents punts finals admeten restriccions diferents. A continuació es
    detallen les restriccions que admet aquest mètode. Com a exemple, podeu
    especificar restriccions com aquesta:
    ```lang=json, name="Exemple de restriccions personalitzades"
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
    Aquest punt final de l\'API admet aquestes restriccions:',
      'This call does not support any attachments.' => 'Aquesta trucada no admet cap fitxer adjunt.',
      'Really delete the query "%s"? You can not undo this. Remember all the great times you had filtering results together?' => 'Suprimir la consulta "%s"? No es pot desfer. Recordeu tots els moments fantàstics en què heu filtrat els resultats junts?',
      'Not all cats can retract their claws, but most of them can.' => 'No tots els gats poden amagar les seves urpes, però la majoria poden.',
      'Restricted Dashboard' => 'Quadre de comandament restringit',
      'Invalid Dashboard' => 'Quadre de comandament no vàlid',
      'This is a visual divider which you can use to separate sections in the menu. It does not have any configurable options.' => 'Es tracta d’un divisor visual que podeu utilitzar per separar seccions del menú. No té cap opció configurable.',
      'Room "%s" is not a valid room which you have permission to see.' => 'La sala \'%s\' no és una sala vàlida que pugueu veure.',
      'Taco cat spelled backwards is taco cat.' => 'Mulla la llum lletrejat cap enrere és mulla la llum.',
      'Find objects matching a fulltext search query. See "Search User Guide" in the documentation for details.' => 'Cerqueu objectes que coincideixin amb una consulta de cerca de text complet. Consulteu la \'Guia de l\'usuari de cerca\' a la documentació per obtenir més informació.',
      'Engine: Hovercards' => 'Engine: Hovercards',
      'Profile menu items can not be generated without an object context.' => 'Els elements del menú de perfil no es poden generar sense un context d\'objecte.',
      'Cats have a tail, two feet, between one and three ears, and two other feet.' => 'Els gats tenen una cua, dos peus, entre una i tres orelles, i dos peus més.',
      'Bucket' => 'Dipòsit',
      'Query Errors' => 'Errors de la consulta',
      'Not supported.' => 'No compatible.',
      'Query contains a token ("%s") with no search term. Query tokens specify text to search for.' => 'La consulta conté un testimoni ("%s") sense terme de cerca. Les fitxes de consulta especifiquen text a cercar.',
      'Engine class is null.' => 'La classe del motor és nul·la.',
      'Raw query to execute.' => 'Consulta en brut per executar.',
      'Two field specifications share the same key ("%s"). Each specification must have a unique key.' => 'Dues especificacions de camp comparteixen la mateixa clau (\'%s\'). Cada especificació ha de tenir una clau única.',
      'You must choose a URI to link to.' => 'Heu de triar un URI per enllaçar-lo.',
      'Field Present: %s' => 'Camp present: %s',
      'Outside of the CAT scan, cats have made almost no contributions to modern medicine.' => 'Fora de l\'escaneig CAT, els gats no han fet gairebé cap contribució a la medicina moderna.',
      'Query Name' => 'Nom de la consulta',
      'No search engines available.' => 'No hi ha motors de cerca disponibles.',
      'A cat\'s visual, olfactory, and auditory senses, Contribute to their hunting skills and natural defenses.' => 'Els sentits de la vista, olfacte i oïda d\'un gat, contribueixen a les seves habilitats de caça i defenses naturals.',
      'Object Fields' => 'Camps d\'objecte',
      'Engine: Index' => 'Motor: Índex',
      'Constraints' => 'Restriccions de consulta personalitzada',
      'Edit Saved Query' => 'Editar la consulta desada',
      'Object types to reindex, like "task", "commit" or "revision".' => 'Tipus d\'objectes per reindexar, com ara "tasca", "validació" o "revisió".',
      'Hide Query' => 'Amagar la consulta',
      'Set Default Query' => 'Establir la consulta per defecte',
      'Constants supported by the `%s` constraint:' => 'Constants compatibles amb la restricció "%s":',
      'Use "--force" to force the index to update these documents.' => 'Utilitzeu "--force" per forçar l\'índex a actualitzar aquests documents.',
      'Cats must eat a diet rich in fish to replace the tiny bones in their tails.' => 'Els gats han de menjar una dieta rica en peixos per reemplaçar els ossos minúsculs de les seves cues.',
      'Set this item as the default for this menu? Users arriving on this page will be shown the content of this item by default.' => 'Definir aquest element com a valor per defecte per a aquest menú? Els usuaris que arribin en aquesta pàgina mostraran el contingut d\'aquest element de manera predeterminada.',
      'Fulltext Engine' => 'Motor de text complet',
      'Two search engine attachments (of classes "%s" and "%s") specify the same attachment key ("%s"); keys must be unique.' => 'Dos fitxers adjunts del motor de cerca (de les classes \'%s\' i \'%s\') especifiquen la mateixa clau de fitxer adjunt (\'%s\'); les claus han de ser úniques.',
      'In ancient Egypt, the cat-god Horus watched over all cats.' => 'A l\'antic Egipte, el déu dels gats Horus vigilava tots els gats.',
      'Ngrams Engine' => 'Motor Ngrams',
      'Delete Query' => 'Eliminar la consulta',
      '"%s" date can not be parsed.' => 'La data \'%s\' no es pot analitzar sintàcticament.',
      'Search for objects with specific PHIDs.' => 'Cerqueu objectes amb PHID específics.',
      'Type "%s" matches no indexable objects. Supported types are: %s.' => 'El tipus \'%s\' no coincideix amb cap objecte indexable. Els tipus admesos són: %s.',
      'This is a standard **ApplicationSearch** method which will let you list, query, or search for objects. For documentation on these endpoints, see **[[ %s | Conduit API: Using Search Endpoints ]]**.' => 'Aquest és un mètode estàndard d\' **ApplicationSearch** que us permetrà llistar, consultar o cercar objectes. Per obtenir documentació sobre aquests endpoints, consulteu **[[%s|API Conduit: utilització d\'endpoints de cerca]]**.',
      'Many cats appear black in low light, suffering a -2 modifier to luck rolls.' => 'Molts gats semblen negres amb poca llum, i pateixen un modificador de -2 a les tirades de sort.',
      'Attachments' => 'Adjunts',
      'The Japanese word for cat is "kome", which is also the word for rice. Japanese cats love to eat rice, so the two are synonymous.' => 'La paraula japonesa per a gat és "kome", que també és la paraula per a arròs. Als gats japonesos els hi agrada menjar arròs, així que són homógrafes.',
      'Query (with ID "%s") has already been saved. Queries are immutable once saved.' => 'La consulta (amb l\'identificador "%s") ja s\'ha desat. Les consultes són immutables un cop desades.',
      'No Content' => 'Cap Contingut',
      'Prebuilt Queries' => 'Consultes incorporades i desades',
      'Query has an invalid sequence of operators ("%s").' => 'La consulta té una seqüència d\'operadors no vàlida (\'%s\').',
      'Constraint "%s" is not a valid constraint for this query.' => 'La restricció \'%s\' no és una restricció vàlida per a aquesta consulta.',
      'Engine: Search' => 'Motor: Recerca',
      'A cat can run seven times faster than a human, but only for a short distance.' => 'Un gat pot córrer set vegades més ràpid que un ésser humà, però només distància curta.',
      'This engine is used to modify menu items on profiles.' => 'Aquest motor s’utilitza per modificar els elements del menú als perfils.',
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
    queries:' => 'Podeu triar una consulta integrada o desada com a punt de partida per filtrar
    els resultats seleccionant-la amb `queryKey`. Si no especifiqueu un `queryKey`,
    la consulta s\'iniciarà sense restriccions.
    Per exemple, moltes aplicacions tenen consultes integrades com ara `"active"` o
    `"open"` per trobar només resultats actius o activats. Per utilitzar un
    `queryKey`, especifiqueu-ho així:
    ```lang=json, name="Selecció d\'una consulta integrada"
    {
      ...
      "queryKey": "active",
      ...
    }
    ```
    La taula següent mostra les claus que cal utilitzar per seleccionar consultes
    integrades i les vostres consultes desades, però també podeu utilitzar **
    qualsevol ** consulta que executeu a través de la IU web com a punt de partida.
    Podeu trobar la clau per a una consulta examinant l’URI després d’executar una
    cerca normal.
    Podeu utilitzar aquestes tecles per seleccionar consultes integrades i les
    vostres consultes desades configurades:',
      'Query is too long (%s bytes, maximum is %s bytes).' => 'La consulta és massa llarga (%s bytes, el màxim és de %s bytes).',
      'Ferret search engine field key ("%s") is invalid. Field keys must be exactly four characters long and contain only lowercase latin letters.' => 'La clau del camp del motor de cerca Ferret (\'%s\') no és vàlida. Les claus de camp han de tenir exactament quatre caràcters i contenir només lletres llatines minúscules.',
      'Cats spend most of their time plotting to kill their owner.' => 'Els gats passen gran part del seu temps conspirant per matar el seu propietari.',
      'Customize Query: %s' => 'Personalitzar la consulta: %s',
      'Edit Related Objects...' => 'Editar objectes relacionats ...',
      'Supports ID/PHID Queries' => 'Admet consultes d’ID / PHID',
      'The word "catastrophe" has no etymological relationship to the word "cat".' => 'La paraula "catàstrofe" no té cap relació etimològica amb la paraula "cat" (gat).',
      'Edit Builtin Item' => 'Edita l\'element incorporat',
      'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same name ("%s"). Each function must have a unique name.' => 'Dues extensions diferents del motor de text complet (\'%s\' i \'%s\') defineixen una funció de cerca amb el mateix nom (\'%s\'). Cada funció ha de tenir un nom únic.',
      'You must delegate to this controller, not invoke it directly.' => 'Heu de delegar en aquest controlador i no invocar-lo directament.',
      'Cat tails are flexible because they contain thousands of tiny bones.' => 'Les cues de gat són flexibles perquè contenen milers d\'ossos diminuts.',
      'Ferret Engine Ngrams' => 'Ferret Motor Ngrams',
      'Field Absent: %s' => 'Camp absent: %s',
      'Cats are stealthy predators and nearly invisible to radar.' => 'Els gats són predadors sigilosos i gairebé invisibles per al radar.',
      'Search Index Versions' => 'Cercar les versions de l\'índex',
      'Object produced two items with the same builtin key ("%s"). Each item must have a unique builtin key.' => 'L\'objecte va produir dos elements amb la mateixa clau incorporada ("%s").  Cada element ha de tenir una clau incorporada única.',
      'Buckets Overflowing' => 'Dipòsits desbordats',
      'Disable Query' => 'Desactivar la consulta',
      'Archived Dashboard' => 'Quadre de comandament arxivat',
      'This query took too long, so only some results are shown. %s' => 'Aquesta consulta ha trigat massa, de manera que només es mostren alguns resultats. %s',
      'Skipped %s documents(s) which have not updated since they were last indexed.' => 'S\'han omès %s documents que no s\'han actualitzat des de la darrera indexació.',
      'The largest recorded cat was nearly 11 inches long from nose to tail.' => 'El gat més gran registrat feia gairebé 11 centímetres de llargada des del nas fins a la cua.',
      'PHID Type' => 'Tipus de PHID',
      'There is nothing here.' => 'Aquí no hi ha res.',
      'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same key ("%s"). Each function must have a unique key.' => 'Dues extensions diferents del motor de text complet (\'%s\' i \'%s\') defineixen una funció de cerca amb la mateixa clau (\'%s\'). Cada funció ha de tenir una clau única.',
      'Search engine ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'El motor de cerca (\'%s\') defineix un camp d\'exportació amb una clau (\'%s\') que xoca amb un altre camp. Cada camp ha de tenir una clau única.',
      'This query will become your default query in the current application.' => 'Aquesta consulta es convertirà en la vostra consulta predeterminada a l\'aplicació actual.',
      'PHIDs' => 'PHID',
      'Save Query' => 'Desar la consulta',
      'Deprecated alias for "%s".' => 'Àlies obsolet per a \'%s\'.',
      'Date value for "%s" can not be parsed.' => 'El valor de data per a \'%s\' no es pot analitzar sintàcticament.',
      'NOTE' => 'NOTA',
      'Drag items in this list to reorder them.' => 'Arrossegueu els elements d’aquesta llista per reordenar-los.',
      'This query took too long. %s' => 'Aquesta consulta ha trigat massa. %s',
      'The first cats evolved in swamps about 65 years ago.' => 'Els primers gats van evolucionar en pantans fa uns 65 anys.',
      'You can tell how warm a cat is by examining the coloration: cooler areas are darker.' => 'Es pot dir com de calent és un gat examinant la coloració: les zones més fresques són més fosques.',
      'Specify a query with --query.' => 'Especifiqueu una consulta amb --query.',
      'Setting "%s" is misconfigured: %s' => 'El paràmetre "%s" està mal configurat: %s',
      'You can not create a relationship to object "%s" because objects can not be related to themselves.' => 'No podeu crear una relació amb l\'objecte \'%s\' perquè els objectes no es poden relacionar amb ells mateixos.',
      'Expected fulltext engine extension ("%s") to return a list of "FerretSearchFunction" objects from "newFerretSearchFunctions()", but found something else ("%s") at index "%s".' => 'S\'esperava una extensió del motor de text complet (\'%s\') per retornar una llista d\'objectes \'FerretSearchFunction\' de \'newFerretSearchFunctions()\', però s\'ha trobat una altra cosa (\'%s\') a l\'índex \'%s\'.',
      'Project "%s" is not a valid project which you have permission to see.' => 'El projecte \'%s\' no és un projecte vàlid que pugueu veure.',
      'Provided view is not one of the views in the list: you can only select a view which appears in the list.' => 'La vista proporcionada no és una de les vistes de la llista: només podeu seleccionar una vista que aparegui a la llista.',
      'Search engine ("%s") exported the wrong number of objects, expected %s but got %s.' => 'El motor de cerca (\'%s\') ha exportat un nombre incorrecte d\'objectes, s\'esperaven %s, però va obtenir %s.',
      'This built-in query can not be deleted, but you can disable it so it does not appear in your query menu. You can enable it again later. Disable built-in query "%s"?' => 'Aquesta consulta integrada no es pot suprimir, però podeu desactivar-la perquè no aparegui al menú de consulta. Podeu tornar-lo a habilitar més tard. Voleu desactivar la consulta integrada \'%s\'?',
      'Unknown search function "%s". Supported functions are: %s. (To search for a term containing a colon, surround the term in double quotes.)' => 'Funció de cerca desconeguda \'%s\'. Les funcions admeses són: %s. (Per cercar un terme que contingui dos punts, envolteu-lo entre cometes dobles.)',
      'Cats prefer vanilla ice cream.' => 'Els gats prefereixen el gelat de vainilla.',
      'To configure the search engines, edit [[ %s | %s ]] configuration. See **[[ %s | %s ]]** for documentation.' => 'Per configurar els motors de cerca, editeu la configuració [[ %s | `%s` ]]. Vegeu la documentació a **[[ %s | %s ]]**.',
      'Dashboard "%s" is not a valid dashboard which you have permission to see.' => 'El quadre de comandament «%s» no és un quadre de comandament vàlid que pugueu veure.',
      'The query matched more than one page of results. Results are paginated before bucketing, so later pages may contain additional results in any bucket.' => 'La consulta ha coincidit amb més d\'una pàgina de resultats. Els resultats es paginen abans de dipositar-los, de manera que les pàgines posteriors poden contenir resultats addicionals a qualsevol dipòsit.',
      'Ferret Fulltext Engine' => 'Motor de text complet Ferret',
      'Query contains unmatched double quotes.' => 'La consulta conté cometes dobles sense parella.',
      'Enable Query' => 'Activar la consulta',
      'Ignored Short Word' => 'Paraula curta ignorada',
      'Object produced a builtin item with no builtin item key! Builtin items must have a unique key.' => 'L\'objecte ha produït un element incorporat sense clau d\'element incorporat!  Els elements incorporats han de tenir una clau única.',
      'Ferret search engine function name ("%s") is invalid. Function names must be nonempty and may only contain latin letters and hyphens.' => 'El nom de la funció del motor de cerca Ferret (\'%s\') no és vàlid. Els noms de les funcions han de ser no buits i només poden contenir lletres llatines i guions.',
      'Disable Query?' => 'Desactivar la consulta?',
      'No Bucketing' => 'No es pot dipositar',
      'Expected fulltext engine extension ("%s") to return a list of functions from "newFerretSearchFunctions()", got "%s".' => 'S\'esperava una extensió del motor de text complet (\'%s\') per retornar una llista de funcions de \'newFerretSearchFunctions()\', obtingut \'%s\'.',
      'Cats purr when they are happy, upset, or asleep.' => 'Els gats purguen quan són feliços, molestos o adormits.',
      'Save this query as a global query, making it visible to all users.' => 'Deseu aquesta consulta com a consulta global, fent-la visible a tots els usuaris.',
      'Edit Query' => 'Editar la consulta',
      'No results found for this query.' => 'No s\'ha trobat cap resultat en aquesta consulta.',
      'Cats with high self-esteem seek out high perches to launch their attacks. Watch out!' => 'Els gats amb alta autoestima busquen altes perses per llançar els seus atacs. Compte!',
      'This dashboard has been archived.' => 'Aquest quadre de comandament s\'ha arxivat.',
      'Query field must be absent ("%s") and present ("%s"). This is impossible, so the query is not valid.' => 'El camp de consulta ha d\'estar absent ("%s") i presentar-se ("%s"). Això és impossible, de manera que la consulta no és vàlida.',
      'Really Delete Query?' => 'Suprimir la consulta?',
      'Query offset is too large. offset+limit=%s (max=%s)' => 'L\'òfset de la consulta és massa gran. òfset+límit=%s (màxim=%s)',
      'Instead of indexing in this process, queue tasks for the daemons. This can improve performance, but makes it more difficult to debug search indexing.' => 'En lloc d’indexar-los en aquest procés, feu cues per a les tasques dels dimonis. Això pot millorar el rendiment, però fa que sigui més difícil depurar la indexació de cerques.',
      'Builtin item ("%s") specifies a bad item key ("%s"); there is no corresponding item implementation available.' => 'L\'element incorporat («%s») especifica una clau d\'element incorrecta («%s»); no hi ha disponible cap implementació d\'element corresponent.',
      'Export engine extension ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'L\'extensió del motor d\'exportació ("%s") defineix un camp d\'exportació amb una clau ("%s") que xoca amb un altre camp. Cada camp ha de tenir una clau única.',
      'A cattail is a wetland plant with an appearance that resembles the tail of a cat.' => 'Una cua de gat és una planta d\'aiguamolls amb una aparença que s\'assembla a la cua d\'un gat.',
      'Cats use a special type of magnetism to help them land on their feet.' => 'Els gats utilitzen un tipus especial de magnetisme per ajudar-los a caure sobre les potes.',
      'Lisk Builtin Properties' => 'Propietats incorporades a Lisk',
      'Unable to Render Dashboard' => 'No es pot renderitzar el quadre de comandament',
      'Queued %s document(s) for background indexing.' => '%s documents en cua per indexar en segon pla.',
      'This dashboard is invalid and could not be loaded.' => 'Aquest quadre de comandament no és vàlid i no s\'ha pogut carregar.',
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
    if `before` is `null`, there are no previous results available.' => 'Les consultes es limiten a retornar 100 resultats alhora. Si voleu menys resultats, 
    podeu utilitzar `limit` per especificar un límit més petit.
    Si voleu obtenir més resultats, haureu de fer consultes addicionals per recuperar 
    més pàgines de resultats.
    L\'estructura de resultats conté una tecla "cursor" amb la informació que necessiteu 
    per obtenir la següent pàgina de resultats. Després d\'una primera consulta, normalment 
    tindrà un aspecte semblant a aquest:
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
    Els camps `limit` i `order` estan descrivint el límit efectiu i l\'ordre amb què 
    s\'ha executat la consulta, i no solen ser de gran interès. Els camps `after` 
    i `before` us proporcionen cursors que podeu passar quan feu una altra trucada a l\'API 
    per obtenir la pàgina de resultats següent (o anterior).
    Per obtenir la següent pàgina de resultats, repetiu la vostra trucada API amb els 
    mateixos paràmetres que la trucada original, però passeu el cursor `after` que heu 
    rebut de la primera trucada al paràmetre `after` quan feu la segona trucada.
    Si feu les coses correctament, hauríeu d\'obtenir la segona pàgina de resultats i una estructura del cursor com aquesta:
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
    Ara podeu continuar a la tercera pàgina de resultats passant el cursor nou `after`
     al paràmetre `after` de la vostra tercera trucada o tornar a la pàgina anterior 
    de resultats passant el cursor `before` al paràmetre `before`. Això pot ser útil 
    si esteu representant una IU web per a un usuari i voleu proporcionar enllaços 
    "Pàgina següent" i "Pàgina anterior".
    Si `after` és `null`, no hi haurà cap pàgina següent de resultats disponibles. 
    De la mateixa manera, si "abans" és `null`, no hi ha cap resultat anterior disponible.',
      'Engine Name' => 'Nom del motor',
    );
  }

}
