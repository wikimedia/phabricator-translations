<?php

final class PhabricatorSearchFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'No results.' => 'Aucun résultat.',
      'This menu item is very important, and can not be disabled.' => 'Cet élément de menu est très important et ne peut pas être désactivé.',
      'Enable Query?' => 'Activer les requêtes ?',
      'Personal Menu Items' => 'Éléments du menu personnel',
      'Format' => 'Format',
      'The queries you have saved are private. Only you can view or edit them.' => 'Les requêtes que vous avez enregistrées sont privées. Vous seul pouvez les voir ou les modifier.',
      'cat -A can find mice hiding in files.' => 'cat -A peut trouver des souris cachées dans les fichiers.',
      'Export Format Not Available' => 'Le format d’exportation n’est pas disponible',
      'Readable' => 'Lisible',
      'Search Engines' => 'Moteurs de recherche',
      'Form "%s" is not a valid form which you have permission to see.' => 'Le formulaire « %s » n’est pas un formulaire valide que vous avez la permission de voir.',
      'Reset all common ngram records.' => 'Réinitialiser tous les enregistrements de n-grammes communs.',
      'Type "%s" matches multiple indexable objects. Use a more specific string. Matching objects are: %s.' => 'Le type « %s » correspond à plusieurs objets indexables. Utilisez une chaîne plus spécifique. Les objets correspondants sont : %s.',
      'N/A' => 'n.d.',
      'URI "%s" is not a valid link URI. It should be a full, valid URI beginning with a protocol like "%s".' => 'L’URI « %s » n’est pas une URI de lien valide. Ce doit être une URI complète et valide commençant par un protocole comme « %s ».',
      'Builtin \'%s\' is not supported!' => 'La recherche intégrée « %s » n’est pas prise en charge !',
      'You must choose a room.' => 'Vous devez choisir une salle.',
      'Elasticsearch server returned invalid JSON!' => 'Le serveur Elasticsearch a renvoyé un JSON non valide !',
      'The popular trivia game "World of Warcraft" features a race of cat people called the Khajiit.' => 'Le jeu de référence populaire « World of Warcraft » présente une race de chats appelés les Khajit.',
      'Disable Menu Item' => 'Désactiver un élément de menu',
      'Add to Dashboard' => 'Ajouter au tableau de bord',
      'Failed to load custom PHID "%s"!' => 'Échec du chargement du PHID personnalisé « %s » !',
      'Cats use their keen sense of smell to avoid feeling empathy.' => 'Les chats utilisent leur odorat très développé pour éviter de ressentir de l’empathie.',
      'INDEXING' => 'INDEXATION',
      'Find stuff in big piles.' => 'Trouver des choses dans de gros tas.',
      'Unsupported operator prefix "%s".' => 'Préfixe d’opérateur « %s » non pris en charge.',
      'You must choose a dashboard.' => 'Vous devez choisir un tableau de bord.',
      'SearchEngines must render a "%s" object, but this engine (of class "%s") rendered something else ("%s").' => 'Les moteurs de recherche doivent rendre un objet « %s », mais ce moteur (de classe « %s ») a rendu autre chose (« %s »).',
      'There is no active query yet.' => 'Il n’y a encore aucune requête active.',
      'Maximum page size for Conduit API method calls is 100, but this call specified %s.' => 'La taille de page maximale pour les appels de méthode de l’API Conduit est de 100, mais cet appel a spécifié %s.',
      'Service index is out of date, repairing...' => 'L’index de service est obsolète, réparation...',
      'Query: %s' => 'Requête : %s',
      'Run a search query. Intended for debugging and development.' => 'Exécuter une requête de recherche. Destiné au débogage et au développement.',
      'Two fields in this SearchEngine use the same key ("%s"), but each field must use a unique key.' => 'Deux champs de ce moteur de recherche utilisent la même clé (« %s »), mais chaque champ doit utiliser une clé unique.',
      'Ferret function "%s" is specified with a denormalized name. Instead, specify the function using the normalized function name ("%s").' => 'La fonction de furetage « %s » est spécifiée avec un nom dénormalisé. Au lieu de cela, spécifiez la fonction en utilisant le nom de fonction normalisé (« %s »).',
      'Unable to instantiate query class "%s": %s' => 'Impossible d’instancier la classe de requête « %s » : %s',
      '—' => '—',
      'Cats have five pointy ends.' => 'Les chats ont cinq extrémités pointues.',
      'Personal Saved Queries' => 'Requêtes personnelles enregistrées',
      'Ignored Common Word' => 'Mots communs ignorés',
      'SearchFields "%s" (of class "%s") and "%s" (of class "%s") both define the same Conduit key ("%s"). Keys must be unique.' => 'Les champs de recherche « %s » (de classe « %s ») et « %s » (de classe « %s ») définissent tous les deux la même clé pour Conduit (« %s »). Les clés doivent être uniques.',
      'You must choose a link name.' => 'Vous devez choisir un nom de lien.',
      'Recompute common ngrams. This is an advanced workflow that can harm search quality if used improperly.' => 'Recalculer les n-grammes communs. Il s’agit d’un flux de travail avancé qui peut nuire à la qualité de la recherche s’il n’est pas correctement utilisé.',
      'Engine: Fulltext' => 'Moteur : texte intégral',
      'Global Menu Items' => 'Éléments du menu global',
      'No visible menu items can render content.' => 'Aucun élément de menu visible ne peut rendre le contenu.',
      'This query specifies an invalid parameter. Review the query parameters and correct errors.' => 'Cette requête spécifie un paramètre non valide. Vérifiez les paramètres de la requête et corrigez les erreurs.',
      'You must choose a label name.' => 'Vous devez choisir un nom de libellé.',
      'Edit the menu for your personal account.' => 'Modifier le menu de votre compte personnel.',
      'Application "%s" is not a valid application which you have permission to see.' => 'L’application « %s » n’est pas une application valide que vous avez la permission de consulter.',
      'Specify either --reset or --threshold.' => 'Spécifier soit « --reset » (réinitialiser tout), soit « --threshold » (au delà d’un seuil).',
      'Queries' => 'Requêtes',
      'Already Default' => 'Déjà par défaut',
      'Parameter "constraints" must be a map of constraints, got "%s".' => 'Le paramètre « constraints » doit être une correspondance de contraintes, mais « %s » a été obtenu.',
      'No services need initialization.' => 'Aucun service n’a besoin d’être initialisé.',
      'The Spanish word for cat is "cato". The biggest cat is called "el cato".' => 'Le mot espagnol pour chat est « cato ». Le plus gros chat s’appelle « el cato ».',
      'Add New Menu Item...' => 'Ajouter un nouvel élément de menu...',
      'Untitled "%s" Item' => 'Élément « %s » sans titre',
      'Query key "%s" does not correspond to a valid query.' => 'La clé de requête « %s » ne correspond pas à une requête valide.',
      'The first cats evolved on the savannah about 8,000 years ago.' => 'Les premiers chats ont évolué dans la savane il y a environ 8 000 ans.',
      'You must name the query.' => 'Vous devez nommer la requête.',
      'Choose Item Icon' => 'Choisir l’icône de l’élément',
      'Cats will often bring you their prey because they feel sorry for your inability to hunt.' => 'Les chats vous amènent souvent leur proie car ils se désolent de votre incapacité à chasser.',
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
    This API endpoint supports these constraints:' => 'Vous pouvez appliquer des contraintes personnalisées en passant un dictionnaire dans `constraints`.
    Cela vous permettra de rechercher des ensembles de résultats spécifiques (par exemple, vous pouvez
    vouloir afficher uniquement les résultats avec un certain état, statut ou propriétaire).
    Si vous spécifiez à la fois une `queryKey` (clé de requête) et des `constraints` (contraintes), la requête
    intégrée ou enregistrée sera appliquée en premier comme point de départ, puis toutes les valeurs supplémentaires dans `constraints` seront appliquées, écrasant les valeurs par défaut de la requête d’origine.
    Différents points de terminaison prennent en charge différentes contraintes. Les contraintes que
    cette méthode prend en charge sont détaillées ci-dessous. Par exemple, vous pouvez spécifier des
    contraintes comme suit :
    ```lang=json, name="Example de contraintes personnalisées"
    {
      ...
      "contraints": {
        "authorPHIDs": ["PHID-USER-1111", "PHID-USER-2222"],
        "flavors": ["cerise", "orange"],
        ...
      },
      ...
    }
    ```
    Ce point de terminaison d’API prend en charge les contraintes suivantes :',
      'Substring Search' => 'Recherche de sous-chaîne',
      'Handle: %s' => 'Descripteur : %s',
      'This call does not support any attachments.' => 'Cet appel ne prend en charge aucune pièce jointe.',
      'Really delete the query "%s"? You can not undo this. Remember all the great times you had filtering results together?' => 'Voulez-vous vraiment supprimer la requête « %s » ? Vous ne pourrez pas annuler cela. Souvenez-vous de tous les bons moments où vous avez eu des résultats de filtrage réunis ?',
      'Edit Menu Item: %s' => 'Modification de l’élément de menu : %s',
      'Not all cats can retract their claws, but most of them can.' => 'Tous les chats ne peuvent pas rétracter leurs griffes, mais la plupart d’entre eux le peuvent.',
      'Restricted Dashboard' => 'Tableau de bord restreint',
      'Invalid Dashboard' => 'Tableau de bord non valide',
      'Run this workflow with "--background" to queue tasks for the daemon workers.' => 'Exécuter ce flux de travail avec « --background » pour mettre les tâches en file d’attente pour les travailleurs du démon en tâche de fond.',
      'This is a visual divider which you can use to separate sections in the menu. It does not have any configurable options.' => 'Il s’agit d’un séparateur visuel que vous pouvez utiliser pour séparer des sections du menu. Il n’a aucune option configurable.',
      'Room "%s" is not a valid room which you have permission to see.' => 'La salle « %s » n\'est pas une salle valide que vous avez la permission de voir.',
      'Open Documents' => 'Documents ouverts',
      'Taco cat spelled backwards is taco cat.' => 'Le chat Otach épelé à l’envers est le chat Otach.',
      'Find objects matching a fulltext search query. See "Search User Guide" in the documentation for details.' => 'Trouver les objets correspondant à une requête de recherche en texte intégral. Consultez le « Manuel utilisateur de la recherche » dans la documentation pour davantage de détails.',
      'Search Ngram' => 'Recherche de n-grammes',
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
    These are the fields available on this object type:' => 'Les objets correspondant à votre requête sont renvoyés sous forme de liste de dictionnaires dans
    la propriété `data` des résultats. Chaque dictionnaire possède des métadonnées et une clé `fields`,
    qui contient des informations sur l’objet qui intéresseront la plupart des appelants.
    Par exemple, les résultats peuvent ressembler à ceci :
    ```lang=json, name="Exemple de résultats"
    {
      ...
      "data": [
        {
          "id": 123,
          "phid": "PHID-WXYZ-1111",
          "fields": {
            "name": "Premier exemple d’objet",
            "authorPHID": "PHID-USER-2222"
          }
        },
        {
          "id": 124,
          "phid": "PHID-WXYZ-3333",
          "fields": {
            "name": "Deuxième exemple d’objet",
            "authorPHID": "PHID-USER-4444"
          }
        },
        ...
      ]
      ...
    }
    ```
    Cette structure de résultats est standardisée pour toutes les méthodes de recherche, mais les
    champs disponibles diffèrent d’une application à l’autre.
    Voici les champs disponibles sur ce type d’objet :',
      'Enable Menu Item' => 'Activer un élément de menu',
      'Engine: Hovercards' => 'Moteur : cartes volantes',
      'Search for objects with specific IDs.' => 'Recherchez des objets avec des identifiants spécifiques.',
      'Global Saved Queries' => 'Requêtes globales enregistrées',
      'Profile menu items can not be generated without an object context.' => 'Les éléments du menu Profil ne peuvent pas être générés sans un contexte d’objet.',
      'Profile Menu' => 'Menu du profil',
      'Service initialization complete.' => 'Initialisation du service terminée.',
      'Configure Menu' => 'Configurer le menu',
      'Cats have a tail, two feet, between one and three ears, and two other feet.' => 'Les chats ont une queue, deux pattes, entre une et trois oreilles et deux autres pattes.',
      'Bucket' => 'Compartiment',
      'Query Errors' => 'Rechercher les erreurs',
      'Unsupported item action "%s".' => 'Action « %s » non prise en charge sur l’élément.',
      'Not supported.' => 'Non pris en charge.',
      'Query contains a token ("%s") with no search term. Query tokens specify text to search for.' => 'La requête contient un jeton (« %s ») sans terme de recherche. Les jetons de requête spécifient le texte à rechercher.',
      'Unable to load object "%s" to rebuild indexes.' => 'Impossible de charger l’objet « %s » pour reconstruire les index.',
      'You must choose a form.' => 'Vous devez choisir un formulaire.',
      'You can not create that relationship because it would create a circular dependency:' => 'Vous ne pouvez pas créer cette relation car elle créerait une dépendance circulaire :',
      'Reindex objects previously indexed on or before a given date.' => 'Réindexer les objets précédemment indexés à une date donnée ou avant.',
      'Engine class is null.' => 'La classe de moteur est nulle.',
      'Mandatory Item' => 'Élément obligatoire',
      'Provide a list of objects to index (like "D123"), or a set of query constraint flags (like "--type"), or "--all" to index all objects.' => 'Fournir une liste d’objets à indexer (comme « D123 »), ou bien un ensemble d’indicateurs de contrainte de requête (comme « --type »), ou encore « --all » pour indexer tous les objets.',
      'Home Menu' => 'Menu d’accueil',
      'Raw query to execute.' => 'Requête brute à exécuter.',
      'Two field specifications share the same key ("%s"). Each specification must have a unique key.' => 'Deux spécifications de champ partagent la même clé (« %s »). Chaque spécification doit avoir une clé unique.',
      'Profile Menu Items' => 'Eléments du menu Profil',
      'You must choose a URI to link to.' => 'Vous devez choisir une URI vers laquelle établir le lien.',
      'Field Present: %s' => 'Champ présent : %s',
      'Expected "newMenuItemViewList()" to return a list (in class "%s"), but it returned something else ("%s").' => 'Attendait que « newMenuItemViewList() » renvoie une liste (dans la classe « %s »), mais il a renvoyé autre chose (« %s »).',
      'Initialize or repair a search service.' => 'Initialiser ou réparer un service de recherche.',
      'Current Default' => 'Valeur par défaut actuelle',
      'Outside of the CAT scan, cats have made almost no contributions to modern medicine.' => 'En dehors du scanner CAT, les chats n’ont apporté presque aucune contribution à la médecine moderne.',
      'Query Name' => 'Nom de la requête',
      'No search engines available.' => 'Aucun moteur de recherche disponible.',
      'A cat\'s visual, olfactory, and auditory senses, Contribute to their hunting skills and natural defenses.' => 'Les sens visuel, olfactif et auditif du chat contribuent à ses capacités de chasse et à ses défenses naturelles.',
      'Object Fields' => 'Champs d’objet',
      'Engine: Index' => 'Moteur : index',
      'Constraints' => 'Contraintes de requête personnalisées',
      'Result Ordering' => 'Classement des résultats',
      'Edit Saved Query' => 'Modifier la requête enregistrée',
      'You can not use query constraint flags (like "--version", "--type", or a list of specific objects) with "--all".' => 'Vous ne pouvez utiliser aucun indicateur de contrainte de requête (comme « --version », « --type » ou une liste d’objets spécifiques) avec « --all » (tout).',
      'Motivator' => 'Motivateur',
      'Menu Items' => 'Éléments du menu',
      'NO OBJECTS' => 'AUCUN OBJET',
      'Object types to reindex, like "task", "commit" or "revision".' => 'Types d’objets à réindexer, comme « task » (tâche), « commit » (validation) ou « revision » (révision).',
      'Reindex all documents.' => 'Réindexer tous les documents.',
      'Hide Query' => 'Masquer la requête',
      'Set Default Query' => 'Définir la requête par défaut',
      'Select a document type...' => 'Sélectionnez un type de document...',
      '(Restricted/Invalid Project)' => '(Projet restreint ou non valide)',
      'Constants supported by the `%s` constraint:' => 'Constantes prises en charge par la contrainte `%s` :',
      'Use "--force" to force the index to update these documents.' => 'Utilisez « --force » pour forcer l’index à mettre à jour ces documents.',
      'Disable this menu item? It will no longer appear in the menu, but you can re-enable it later.' => 'Désactiver cet élément de menu ? Il n’apparaîtra plus dans le menu mais vous pourrez le réactiver plus tard.',
      '(See table below.)' => '(Voir le tableau ci-dessous).',
      'Build or rebuild search indexes.' => 'Construire ou reconstruire des index de recherche.',
      'Cats must eat a diet rich in fish to replace the tiny bones in their tails.' => 'Les chats doivent avoir une alimentation riche en poisson pour remplacer les minuscules os de leur queue.',
      'Set this item as the default for this menu? Users arriving on this page will be shown the content of this item by default.' => 'Définir cet élément comme élément par défaut pour ce menu ? Les utilisateurs qui arrivent sur cette page verront par défaut le contenu de cet élément.',
      'Fulltext Engine' => 'Moteur en texte intégral',
      'Two search engine attachments (of classes "%s" and "%s") specify the same attachment key ("%s"); keys must be unique.' => 'Deux pièces jointes de moteur de recherche (de classes « %s » et « %s ») spécifient la même clé de pièce jointe (« %s ») ; les clés doivent être uniques.',
      'In ancient Egypt, the cat-god Horus watched over all cats.' => 'Dans l\'Égypte ancienne, le dieu-chat Horus veillait sur tous les chats.',
      'Ngrams Engine' => 'Moteur de n-grammes',
      'Delete Query' => 'Supprimer la requête',
      'Selecting objects to index...' => 'Sélection des objets à indexer...',
      '"%s" date can not be parsed.' => 'La date « %s » ne peut pas être analysée.',
      'Current Menu Items' => 'Éléments de menu actuels',
      'Failed to update search index for document "%s": %s' => 'Échec de la mise à jour de l’index de recherche pour le document « %s » : %s',
      'Search for objects with specific PHIDs.' => 'Rechercher des objets avec des PHID spécifiques.',
      'Full Name' => 'Nom complet',
      'Type "%s" matches no indexable objects. Supported types are: %s.' => 'Le type « %s » ne correspond à aucun objet indexable. Les types pris en charge sont : %s .',
      'Menu Item' => 'Élément de menu',
      'This is a standard **ApplicationSearch** method which will let you list, query, or search for objects. For documentation on these endpoints, see **[[ %s | Conduit API: Using Search Endpoints ]]**.' => 'Il s’agit d’une méthode **ApplicationSearch** standard qui vous permet de lister, d’interroger ou de rechercher des objets. Pour la documentation sur ces points de terminaison, consultez **[[ %s | API Conduit : utilisation des points de terminaison de recherche ]]**.',
      'Many cats appear black in low light, suffering a -2 modifier to luck rolls.' => 'De nombreux chats paraissent noirs en basse lumière, subissant un modificateur de -2 aux jets de chance.',
      'Attachments' => 'Pièces jointes',
      'The Japanese word for cat is "kome", which is also the word for rice. Japanese cats love to eat rice, so the two are synonymous.' => 'Le mot japonais pour chat est « kome », qui est aussi le mot pour le riz. Les chats japonais aiment manger du riz, donc les deux sont synonymes.',
      'In the wild, cats and raccoons sometimes hunt together in packs.' => 'Dans la nature, les chats et les ratons laveurs chassent parfois en meute.',
      'Query (with ID "%s") has already been saved. Queries are immutable once saved.' => 'La requête (avec l’identifiant « %s ») a déjà été enregistrée. Les requêtes sont immuables une fois enregistrées.',
      'No Content' => 'Aucun contenu',
      'Prebuilt Queries' => 'Requêtes intégrées et enregistrées',
      'Fulltext Search Results' => 'Résultats de la recherche en texte intégral',
      'Query has an invalid sequence of operators ("%s").' => 'La requête comporte une séquence d’opérateurs non valide (« %s »).',
      'Constraint "%s" is not a valid constraint for this query.' => 'La contrainte « %s » n’est pas une contrainte valide pour cette requête.',
      'Document Status' => 'État du document',
      'Engine: Search' => 'Moteur : recherche',
      'Profile Menu Item' => 'Eléments du menu Profil',
      '"2022-12-25" or "7 days ago"...' => '« 2022-12-25 » (pour le 25 décembre 2022) ou « 7 days ago » (il y a 7 jours)...',
      'Paging and Limits' => 'Pagination et limites',
      'No objects selected to index.' => 'Aucun objet sélectionné à indexer.',
      'A cat can run seven times faster than a human, but only for a short distance.' => 'Un chat peut courir sept fois plus vite qu’un humain, mais seulement sur une courte distance.',
      'This engine is used to modify menu items on profiles.' => 'Ce moteur est utilisé pour modifier les éléments de menu sur les profils.',
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
    queries:' => 'Vous pouvez choisir une requête intégrée ou enregistrée comme point de départ pour filtrer 
    les résultats en la sélectionnant avec `queryKey`. Si vous ne spécifiez pas de `queryKey`,
    la requête démarrera sans contrainte.
    Par exemple, de nombreuses applications ont des requêtes intégrées telles que `"active"` ou
    `"open"` pour rechercher uniquement les résultats actifs ou ouverts. Pour utiliser une `queryKey`,
    spécifiez la comme ceci :
    ```lang=json, name="Sélection d’une requête intégrée"
    {
      ...
      "queryKey": "active",
      ...
    }
    ```
    Le tableau ci-dessous montre les clés à utiliser pour sélectionner les requêtes intégrées et vos
    requêtes enregistrées, mais vous pouvez également utiliser **n\'importe quelle** requête que vous
    exécutez via l’interface utilisateur web comme point de départ. Vous pouvez trouver la clé d’une
    requête en examinant l’URI après une recherche normale.
    Vous pouvez utiliser les clés suivantes pour sélectionner des requêtes intégrées et vos requêtes
    configurées enregistrées :',
      'No object relationship of type "%s" exists.' => 'Aucune relation d’objets de type « %s » n’existe.',
      'Delete Menu Item' => 'Supprimer un élément de menu',
      'Query is too long (%s bytes, maximum is %s bytes).' => array(
        array(
          'La requête est trop longue (%s octet, le maximum est %s octet).',
          'La requête est trop longue (%s octet, le maximum est %s octets).',
        ),
        array(
          'La requête est trop longue (%s octets, le maximum est %s octet).',
          'La requête est trop longue (%s octets, le maximum est %s octets).',
        ),
      ),
      'Ferret search engine field key ("%s") is invalid. Field keys must be exactly four characters long and contain only lowercase latin letters.' => 'La clé de champ du moteur de recherche de furetage (« %s ») n’est pas valide. Les clés de champ doivent comporter exactement quatre caractères et ne contenir que des lettres latines minuscules.',
      'Service index is already up to date.' => 'L’index de service est déjà à jour.',
      'Cats spend most of their time plotting to kill their owner.' => 'Les chats passent la plupart de leur temps à comploter pour tuer leur propriétaire.',
      'Storage Used' => 'Stockage utilisé',
      'Project Menu' => 'Menu Projet',
      'Reindex objects previously indexed on or after a given date.' => 'Réindexer les objets précédemment indexés à une date donnée ou après.',
      'Customize Query: %s' => 'Personnaliser la requête : %s',
      'Edit Related Objects...' => 'Modifier les objets associés...',
      'Create Menu Item' => 'Créer un élément de menu',
      'No saved queries.' => 'Aucune requête sauvegardée.',
      'Supports ID/PHID Queries' => 'Prend en charge les requêtes d’identifiants ou de PHID',
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
    These attachments are available:' => 'Par défaut, seules les informations de base sur les objets sont renvoyées. Si vous voulez
    plus d’informations détaillées, vous pouvez utiliser les « pièces jointes » disponibles pour obtenir plus
    d’informations dans les résultats (comme les abonnés et les projets).
    Généralement, demander plus d’informations signifie que la requête s’exécute plus lentement
    et renvoie plus de données (dans certains cas, beaucoup plus de données). Vous ne devriez normalement
    demander que les données dont vous avez besoin.
    Pour demander des données supplémentaires, spécifiez les pièces jointes souhaitées dans le
    paramètre `attachments` :
    ```lang= json, name="Exemple de demande de pièces jointes" 
    {
      ...
      "attachments": {
        "subscribers": true
      },
      ...
    }
    ```
    Cet exemple spécifie que les résultats doivent inclure des informations sur les
    abonnés. Dans la valeur de retour, chaque objet aura désormais ces informations 
    remplies dans la valeur `attachments` correspondante : 
    ```lang=json, name="Example de pièces jointes dans les résultats"
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
    Les pièces jointes suivantes sont disponibles :',
      'The word "catastrophe" has no etymological relationship to the word "cat".' => 'Le mot « catastrophe » n’a aucun rapport étymologique avec le mot « chat ».',
      'Edit Builtin Item' => 'Modifier l’élément intégré',
      'Text value for "%s" can not be parsed.' => 'La valeur de texte pour « %s » ne peut pas être analysée.',
      'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same name ("%s"). Each function must have a unique name.' => 'Deux extensions de moteur en texte intégral (« %s » et « %s ») définissent toutes deux une fonction de recherche portant le même nom (« %s »). Chaque fonction doit avoir un nom unique.',
      '\'%s\' is not the name of a known object.' => '« %s » n’est pas le nom d’un objet connu.',
      'You must delegate to this controller, not invoke it directly.' => 'Vous devez déléguer à ce contrôleur, pas l’invoquer directement.',
      'Cat tails are flexible because they contain thousands of tiny bones.' => 'Les queues de chat sont flexibles car elles contiennent des milliers de petits os.',
      'Cat Facts' => 'Faits sur les chats',
      'Ferret Engine Ngrams' => 'N-grammes du moteur de furetage',
      'Forced search index updates for %s document(s).' => array(
        'Mises à jour forcées de l’index de recherche pour %s document.',
        'Mises à jour forcées de l’index de recherche pour %s documents.',
      ),
      'Updated search indexes for %s document(s).' => array(
        'Les index de recherche ont été mis à jour pour %s document.',
        'Les index de recherche ont été mis à jour pour %s documents.',
      ),
      'Field Absent: %s' => 'Champ absent : %s',
      'Cats are stealthy predators and nearly invisible to radar.' => 'Les chats sont des prédateurs furtifs et presque invisibles au radar.',
      'Search Index Versions' => 'Versions d’index de recherche',
      'You can not create a relationship (of type "%s") to object "%s" because it is not the right type of object for this relationship.' => 'Vous ne pouvez créer aucune relation (de type « %s ») vers l’objet « %s » car ce n’est pas le bon type d’objet pour cette relation.',
      'Object produced two items with the same builtin key ("%s"). Each item must have a unique builtin key.' => 'L\'objet a produit deux éléments avec la même clé intégrée (« %s »). Chaque élément doit avoir une clé intégrée unique.',
      '\'%s\' is not a builtin!' => '« %s » n’est pas une recherche intégrée !',
      'All Open Objects' => 'Tous les objets ouverts',
      'Buckets Overflowing' => 'Des compartiments débordent',
      'Disable Query' => 'Désactiver la consultation',
      'Divider' => 'Séparateur',
      'Archived Dashboard' => 'Tableau de bord archivé',
      'Manage Menu' => 'Gérer le menu',
      'This query took too long, so only some results are shown. %s' => 'Cette requête a pris trop de temps, donc seuls certains résultats sont affichés. %s',
      'Skipped %s documents(s) which have not updated since they were last indexed.' => array(
        '%s document ignoré qui n’a pas été mis à jour depuis sa dernière indexation.',
        '%s documents ignorés qui n’ont pas été mis à jour depuis leur dernière indexation.',
      ),
      'The largest recorded cat was nearly 11 inches long from nose to tail.' => 'Le plus grand chat enregistré mesurait près de 11 pouces de long, du nez à la queue.',
      'PHID Type' => 'Type de PHID',
      'Invalid Relationship' => 'Relation non valide',
      'There is nothing here.' => 'Il n’y a rien ici.',
      'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same key ("%s"). Each function must have a unique key.' => 'Deux extensions de moteur en texte intégral (« %s » et « %s ») définissent toutes deux une fonction de recherche avec la même clé (« %s »). Chaque fonction doit avoir une clé unique.',
      'Search engine ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'Le moteur de recherche (« %s ») définit un champ d’exportation avec une clé (« %s ») qui entre en collision avec un autre champ. Chaque champ doit avoir une clé unique.',
      'IDs' => 'Identifiants',
      'This query will become your default query in the current application.' => 'Cette requête deviendra votre requête par défaut dans l’application actuelle.',
      'PHIDs' => 'Liste des PHID',
      'Save Query' => 'Enregistrer la requête',
      'Full-Text Search' => 'Recherche en texte intégral',
      'Too few documents of type "%s" for any ngrams to be common.' => 'Trop peu de documents de type « %s » pour que des n-grammes soient communs.',
      'Deprecated alias for "%s".' => 'Alias obsolète pour « %s ».',
      'Edit Menu Item' => 'Modifier un élément de menu',
      'Initializing search service "%s".' => 'Initialisation du service de recherche « %s ».',
      'SELECT' => 'SÉLECTIONNER',
      'Skipping service "%s" because it is not writable.' => 'Ignore le service « %s » car il n’est pas accessible en écriture.',
      'Date value for "%s" can not be parsed.' => 'La valeur de date pour « %s » ne peut pas être analysée.',
      'NOTE' => 'NOTE',
      '"%s" must be a date before "%s".' => '« %s » doit être une date antérieure à « %s ».',
      'Fulltext Search' => 'Recherche en texte intégral',
      'Drag items in this list to reorder them.' => 'Faites glisser les éléments de cette liste pour les réorganiser.',
      'Prune ngrams present in more than this fraction of documents. Provide a value between 0.0 and 1.0.' => 'Élaguer les n-grammes présents dans plus que cette fraction des documents. Indiquer une valeur comprise entre 0,0 et 1,0.',
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
    These builtin orders are available:' => 'Utilisez `order` pour choisir un ordre de tri des résultats.
    Spécifiez soit une seule clé parmi les ordres intégrés (il s’agit d’un ensemble d’ordres
    signifiants, de haut niveau et lisibles par l’homme), soit une liste personnalisée de
    colonnes de bas niveau.
    Pour utiliser un ordre de haut niveau, choisissez un ordre intégré dans le tableau ci-dessous
    et spécifiez-le comme ceci :
    `` `lang=json, name="Choisir un ordre de tri des résultats" 
    {
      ...
      "order": "newest",
      ...
    }
    ```
    Les ordres intégrés suivants sont disponibles :',
      'This query took too long. %s' => 'Cette requête prend trop de temps. %s',
      'The first cats evolved in swamps about 65 years ago.' => 'Les premiers chats ont évolué dans les marécages il y a environ 65 ans.',
      'You can tell how warm a cat is by examining the coloration: cooler areas are darker.' => 'Vous pouvez savoir à quel point un chat est chaud en examinant sa coloration : les zones plus froides sont plus sombres.',
      'Specify a query with --query.' => 'Spécifier une requête avec « --query ».',
      'You must choose an application.' => 'Vous devez choisir une application.',
      'This menu currently has no items.' => 'Ce menu n’a actuellement aucun élément.',
      'Document Types' => 'Types de document',
      'Setting "%s" is misconfigured: %s' => 'Le paramètre « %s » est mal configuré : %s',
      'This item is already set as the default item for this menu.' => 'Cet élément est déjà défini comme élément par défaut pour ce menu.',
      'Edit the global default menu for all users.' => 'Modifier le menu global par défaut pour tous les utilisateurs.',
      'Profile Menu User Guide' => 'Manuel utilisateur du menu Profil',
      'You can not create a relationship to object "%s" because objects can not be related to themselves.' => 'Vous ne pouvez par créer aucune relation vers l’objet « %s » car les objets ne peuvent pas être liés à eux-mêmes.',
      'Expected fulltext engine extension ("%s") to return a list of "FerretSearchFunction" objects from "newFerretSearchFunctions()", but found something else ("%s") at index "%s".' => 'Attendait que l’extension de moteur en texte intégral (« %s ») renvoie une liste d’objets « FerretSearchFunction » depuis « newFerretSearchFunctions() », mais autre chose (« %s ») a été trouvé à l’index « %s ».',
      'Type specification "%s" duplicates type specification "%s". Specify each type only once.' => 'La spécification de type « %s » duplique la spécification de type « %s ». Spécifiez chaque type une seule fois.',
      'Project "%s" is not a valid project which you have permission to see.' => 'Le projet « %s » n’est pas un projet valide que vous avez la permission de consulter.',
      'Provided view is not one of the views in the list: you can only select a view which appears in the list.' => 'La vue fournie ne fait pas partie des vues de la liste : vous ne pouvez sélectionner qu’une vue qui apparaît dans la liste.',
      'No views match identifier "%s"!' => 'Aucune vue ne correspond à l’identifiant « %s » !',
      'Choose a valid export format.' => 'Choisissez un format d’exportation valide.',
      'Tooltip' => 'Infobulle',
      'Search engine ("%s") exported the wrong number of objects, expected %s but got %s.' => array(
        array(
          array(
            'Le moteur de recherche (« %s ») a exporté le mauvais nombre d’objets, %s était attendu mais %s ont été obtenu.',
            'Le moteur de recherche (« %s ») a exporté le mauvais nombre d’objets, %s était attendu mais %s ont été obtenus.',
          ),
          array(
            'Le moteur de recherche (« %s ») a exporté le mauvais nombre d’objets, %s étaient attendus mais %s ont été obtenu.',
            'Le moteur de recherche (« %s ») a exporté le mauvais nombre d’objets, %s étaient attendus mais %s ont été obtenus.',
          ),
        ),
      ),
      'This built-in query can not be deleted, but you can disable it so it does not appear in your query menu. You can enable it again later. Disable built-in query "%s"?' => 'Cette requête intégrée ne peut pas être supprimée, mais vous pouvez la désactiver afin qu’elle n’apparaisse plus dans votre menu de requête. Vous pourrez la réactiver plus tard. Désactiver la requête intégrée « %s » ?',
      'Motivate your team with inspirational quotes from great minds. This menu item shows a new quote every day.' => 'Motivez votre équipe avec des citations inspirantes de grands esprits. Cet élément de menu affiche une nouvelle citation chaque jour.',
      'Saved Queries' => 'Requêtes enregistrées',
      'Unknown search function "%s". Supported functions are: %s. (To search for a term containing a colon, surround the term in double quotes.)' => 'Fonction de recherche inconnue « %s ». Les fonctions prises en charge sont : %s. (Pour rechercher un terme contenant un deux-points, placez le terme entre guillemets droits doubles.)',
      '(Restricted/Invalid Form)' => '(Formulaire restreint ou non valide)',
      'Edit Profile Menu Item Configurations' => 'Modifier les configurations d’éléments du menu Profil',
      'Delete this menu item?' => 'Voulez-vous supprimer cet élément de menu ?',
      'Cats prefer vanilla ice cream.' => 'Les chats préfèrent la glace à la vanille.',
      'Resetting common ngrams for "%s".' => 'Réinitialisation des n-grammes communs pour « %s ».',
      'Minimum page size for API searches is 1, but this call specified %s.' => 'La taille de page minimale pour les recherches d\'API est 1, mais cet appel a spécifié %s.',
      'Export Results' => 'Exporter les résultats',
      'To configure the search engines, edit [[ %s | %s ]] configuration. See **[[ %s | %s ]]** for documentation.' => 'Pour configurer les moteurs de recherche, modifiez la configuration de [[ %s | `%s` ]]. Voir **[[ %s | %s ]]** pour la documentation.',
      'All Fulltext Search hosts failed:' => 'Tous les hôtes de recherche en texte intégral ont échoué :',
      'All Objects' => 'Tous les objets',
      'Dashboard "%s" is not a valid dashboard which you have permission to see.' => 'Le tableau de bord «%s» n’est pas un tableau de bord valide que vous avez la permission de consulter.',
      'Failed to rebuild search index for any documents.' => 'Échec de reconstruction de l’index de recherche pour tous les documents.',
      'Updated common ngrams for "%s".' => 'Mise à jour des n-grammes communs pour « %s ».',
      'The query matched more than one page of results. Results are paginated before bucketing, so later pages may contain additional results in any bucket.' => 'La requête correspondait à plusieurs pages de résultats. Les résultats sont paginés avant le compartimentage, de sorte que les pages ultérieures peuvent contenir des résultats supplémentaires dans n’importe quel compartiment.',
      'Ferret Fulltext Engine' => 'Moteur de furetage en texte intégral',
      'Export engine extension ("%s") exported the wrong number of objects, expected %s but got %s.' => array(
        array(
          array(
            'L’extension du moteur d’exportation (« %s ») a exporté le mauvais nombre d’objets, %s était attendu mais %s ont été obtenu.',
            'L’extension du moteur d’exportation (« %s ») a exporté le mauvais nombre d’objets, %s était attendu mais %s ont été obtenus.',
          ),
          array(
            'L’extension du moteur d’exportation (« %s ») a exporté le mauvais nombre d’objets, %s étaient attendus mais %s ont été obtenu.',
            'L’extension du moteur d’exportation (« %s ») a exporté le mauvais nombre d’objets, %s étaient attendus mais %s ont été obtenus.',
          ),
        ),
      ),
      'Link' => 'Lien',
      'Query contains unmatched double quotes.' => 'La requête contient des guillemets doubles non appairés.',
      'Enable Query' => 'Activer la requête',
      'This item can not be set as the default item. This is usually because the item has no page of its own, or links to an external page.' => 'Cet élément ne peut pas être défini comme élément par défaut. Cela est généralement dû au fait que l’élément n’a aucune page en propre, ou bien que c’est un lien vers une page externe.',
      'Browse Results' => 'Parcourir les résultats',
      'Application "%s" is not installed!' => 'L’application « %s » n’est pas installée !',
      'Ignored Short Word' => 'Mot court ignoré',
      'Exact Search' => 'Recherche exacte',
      'Enable this menu item? It will appear in the menu again.' => 'Voulez-vous activer cet élément de menu ? Il réapparaîtra à nouveau dans le menu.',
      'Created By Me' => 'Créée par moi',
      'Specify either --reset or --threshold, not both.' => 'Spécifiez soit « --reset » (réinitialiser tout), soit --threshold (au delà d’un seuil), pas les deux.',
      'Object produced a builtin item with no builtin item key! Builtin items must have a unique key.' => 'L’objet a produit un élément intégré sans clé d’élément intégré ! Les éléments intégrés doivent avoir une clé unique.',
      'Ferret search engine function name ("%s") is invalid. Function names must be nonempty and may only contain latin letters and hyphens.' => 'Le nom de la fonction du moteur de recherche de furetage (« %s ») n’est pas valide. Les noms de fonction doivent être non vides et ne peuvent contenir que des lettres latines et des traits d’union.',
      'Disable Query?' => 'Désactiver la consultation ?',
      'No Bucketing' => 'Sans compartimentage',
      'Use Results' => 'Utiliser les résultats',
      'Expected fulltext engine extension ("%s") to return a list of functions from "newFerretSearchFunctions()", got "%s".' => 'Attendait que l’extension de moteur en texte intégral (« %s ») renvoie une liste de fonctions depuis « newFerretSearchFunctions() », mais « %s » a été obtenu.',
      'Order By' => 'Trier par',
      'No new common ngrams exist for "%s".' => 'Il n’existe aucun nouveau n-gramme commun pour « %s ».',
      'Cats purr when they are happy, upset, or asleep.' => 'Les chats ronronnent lorsqu’ils sont heureux, contrariés ou endormis.',
      'Save this query as a global query, making it visible to all users.' => 'Enregistrer cette requête en tant que requête globale pour la rendre visible pour tous les utilisateurs.',
      'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.' => 'Vous ne pouvez créer aucune relation vers l’objet « %s », car l’objet n’existe pas ou n’a pas pu être chargé.',
      'Edit Query' => 'Modifier la requête',
      'No results found for this query.' => 'Aucun résultat trouvé pour cette requête.',
      'Searched For:' => 'Recherché :',
      'Force a complete rebuild of the entire index instead of an incremental update.' => 'Force une reconstruction complète de l’index tout entier au lieu d’une mise à jour incrémentielle.',
      'Cats with high self-esteem seek out high perches to launch their attacks. Watch out!' => 'Les chats qui ont une haute estime d’eux-mêmes recherchent des perchoirs élevés pour lancer leurs attaques. Faites attention !',
      'Motivator: %s' => 'Motivateur : %s',
      '%s (Not Available)' => '%s (non disponible)',
      'Indexing %s object(s).' => array(
        'Indexation de %s objet.',
        'Indexation de %s objets.',
      ),
      'This dashboard has been archived.' => 'Ce tableau de bord a été archivé.',
      'Specify a numeric threshold between 0 and 1.' => 'Spécifier un seuil numérique entre 0 et 1.',
      '(Restricted/Invalid Application)' => '(Application restreinte ou non valide)',
      'Expected buildNavigationMenuItems() to return a list of PHUIListItemView objects, but got a surprise.' => 'Attendait que « buildNavigationMenuItems() » renvoie une liste d’objets « PHUIListItemView », mais une surprise est arrivée.',
      'DEV: Overheated State' => 'DEV : état de surchauffe',
      'Query field must be absent ("%s") and present ("%s"). This is impossible, so the query is not valid.' => 'Le champ de requête doit être absent (« %s ») et présent (« %s »). Ceci est impossible, donc la requête n’est pas valide.',
      'Reindex objects previously indexed with a particular version of the indexer.' => 'Réindexer les objets précédemment indexés avec une version particulière de l’indexeur.',
      'Portal Menu' => 'Menu du portail',
      'Not Defaultable' => 'Non définissable par défaut',
      'Really Delete Query?' => 'Voulez-vous vraiment supprimer la requête ?',
      'Query offset is too large. offset+limit=%s (max=%s)' => 'Le décalage de la requête est trop grand : décalage + limite = %s (maximum = %s)',
      'Instead of indexing in this process, queue tasks for the daemons. This can improve performance, but makes it more difficult to debug search indexing.' => 'Au lieu d’indexer dans ce processus, mettez les tâches en file d’attente pour les démons qui s’exécutent en arrière-plan. Cela peut améliorer les performances, mais rend plus difficile le débogage de l’indexation pour la recherche.',
      'Edit Queries...' => 'Modifier les requêtes...',
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
    These low-level columns are available:' => 'Vous pouvez choisir un ordre de tri des colonnes de bas niveau à la place. Pour ce faire, fournissez
    une liste de colonnes au lieu d’une seule clé. Il s’agit d’une fonctionnalité avancée.
    Dans un ordre de colonne personnalisé :
      - chaque colonne ne peut être spécifiée qu’une seule fois ;
      - chaque colonne peut être préfixée par `-` pour en inverser l’ordre ;
      - la dernière colonne doit être une colonne unique, généralement `id` ; et
      - aucune colonne autre que la dernière ne peut être unique.
    Pour utiliser un ordre de tri de bas niveau, choisissez une séquence de colonnes et spécifiez-les
    comme ceci :
    ```lang= json, name="Utilisation d’une commande personnalisée"
    {
      ...
      "order": ["color", "-name", "id"],
      ...
    }
    ```
    Les colonnes de bas niveau suivantes sont disponibles :',
      'Builtin item ("%s") specifies a bad item key ("%s"); there is no corresponding item implementation available.' => 'L’élément intégré (« %s ») spécifie une clé d’élément incorrecte (« »%s ») ; aucune mise en œuvre d’élément correspondante n’est disponible.',
      'DEV: New User State' => 'DEV : nouvel état d’utilisateur',
      'Export engine extension ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'L’extension du moteur d’exportation (« %s ») définit un champ d’exportation avec une clé (« %s ») qui entre en collision avec un autre champ. Chaque champ doit avoir une clé unique.',
      'A cattail is a wetland plant with an appearance that resembles the tail of a cat.' => 'Une quenouille est une plante des zones humides avec une apparence qui ressemble à la queue d’un chat.',
      'Service index does not exist, creating...' => 'L’index de service n’existe pas, création...',
      'Export Data' => 'Exporter les données',
      'Circular Dependency' => 'Dépendance circulaire',
      'Cats use a special type of magnetism to help them land on their feet.' => 'Les chats utilisent un type spécial de magnétisme pour les aider à atterrir sur leurs pattes.',
      'Lisk Builtin Properties' => 'Propriétés intégrées de Lisk',
      'More information' => 'Plus d’information',
      'Unable to Render Dashboard' => 'Impossible de rendre le tableau de bord',
      'Browse Document Types' => 'Parcourir les types de documents',
      'Queued %s document(s) for background indexing.' => array(
        '%s document mis en file d’attente pour l’indexation en arrière-plan.',
        '%s documents mis en file d’attente pour l’indexation en arrière-plan.',
      ),
      '(Restricted/Invalid Conpherence)' => '(Conpherence restreinte ou non valide)',
      'Threshold must be greater than 0.0 and less than 1.0.' => 'Le seuil doit être supérieur à 0,0 et inférieur à 1,0.',
      'This dashboard is invalid and could not be loaded.' => 'Ce tableau de bord n’est pas valide et n’a pas pu être chargé.',
      'Enable the built-in query "%s"? It will appear in your menu again.' => 'Voulez-vous activer la requête intégrée « %s » ? Elle apparaîtra à nouveau dans votre menu.',
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
    if `before` is `null`, there are no previous results available.' => 'Les requêtes sont limitées pour renvoyer 100 résultats à la fois. Si vous voulez moins de
    résultats que cela, vous pouvez utiliser `limit` pour spécifier une limite plus petite.
    Si vous voulez plus de résultats, vous devrez faire des requêtes supplémentaires pour récupérer
    plus de pages de résultats.
    La structure de résultats contient une clé `cursor` (curseur) pour les informations permettant
    de récupérer la page suivante de résultats. Après une requête initiale, elle ressemblera
    généralement à ceci :
    ```lang=json, name="Exemple de résultat avec un curseur"
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
    Les champs `limit` et `order` décrivent la limite effective et l\'ordre dans lequel la requête
    a été exécutée et ne sont généralement pas d’un intérêt très important. Les champs `after` et
    `before` vous donnent des curseurs que vous pouvez passer lors d’un autre appel à l’API
     afin d’obtenir la page suivante (ou précédente) de résultats.
    Pour obtenir la page suivante de résultats, répétez votre appel à l’API avec tous les mêmes
    paramètres que l\'appel d\'origine, mais passez le curseur `after` que vous avez reçu lors du
    premier appel dans le paramètre `after`" lors du deuxième appel. 
    Si vous faites les choses correctement, vous devriez obtenir la deuxième page de résultats, et
    une structure de curseur comme celle-ci :
    ```lang=json, name="Deuxième page de résultats" 
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
    Vous pouvez maintenant passer à la troisième page de résultats en passant le nouveau curseur
    `after` au paramètre `after` dans votre troisième appel , ou retourner à la page de résultats
    précédente en passant le curseur `before` au paramètre `before`. Ceci peut être utile si vous
    affichez une interface utilisateur web pour un utilisateur et que vous souhaitez fournir des liens 
    « Page suivante » et « Page précédente ».
    Si `after` est `null`, il n\'y a aucune page suivante de résultats disponible. De même,
    si `before` est `null`, aucun résultat précédent n’est disponible.',
      'Engine Name' => 'Nom du moteur',
    );
  }

}
