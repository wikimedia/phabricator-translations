<?php

final class PhabricatorSearchEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'No results.' => 'No results.',
      'This menu item is very important, and can not be disabled.' => 'This menu item is very important, and can not be disabled.',
      'Enable Query?' => 'Enable Query?',
      'Personal Menu Items' => 'Personal Menu Items',
      'Format' => 'Format',
      'The queries you have saved are private. Only you can view or edit them.' => 'The queries you have saved are private. Only you can view or edit them.',
      'cat -A can find mice hiding in files.' => 'cat -A can find mice hiding in files.',
      'Export Format Not Available' => 'Export Format Not Available',
      'Readable' => 'Readable',
      'Search Engines' => 'Search Engines',
      'Form "%s" is not a valid form which you have permission to see.' => 'Form "%s" is not a valid form which you have permission to see.',
      'Reset all common ngram records.' => 'Reset all common ngram records.',
      'Type "%s" matches multiple indexable objects. Use a more specific string. Matching objects are: %s.' => 'Type "%s" matches multiple indexable objects. Use a more specific string. Matching objects are: %s.',
      'N/A' => 'N/A',
      'URI "%s" is not a valid link URI. It should be a full, valid URI beginning with a protocol like "%s".' => 'URI "%s" is not a valid link URI. It should be a full, valid URI beginning with a protocol like "%s".',
      'Builtin \'%s\' is not supported!' => 'Builtin \'%s\' is not supported!',
      'You must choose a room.' => 'You must choose a room.',
      'Elasticsearch server returned invalid JSON!' => 'Elasticsearch server returned invalid JSON!',
      'The popular trivia game "World of Warcraft" features a race of cat people called the Khajiit.' => 'The popular trivia game "World of Warcraft" features a race of cat people called the Khajiit.',
      'Disable Menu Item' => 'Disable Menu Item',
      'Add to Dashboard' => 'Add to Dashboard',
      'Failed to load custom PHID "%s"!' => 'Failed to load custom PHID "%s"!',
      'Cats use their keen sense of smell to avoid feeling empathy.' => 'Cats use their keen sense of smell to avoid feeling empathy.',
      'INDEXING' => 'INDEXING',
      'Find stuff in big piles.' => 'Find stuff in big piles.',
      'Unsupported operator prefix "%s".' => 'Unsupported operator prefix "%s".',
      'You must choose a dashboard.' => 'You must choose a dashboard.',
      'SearchEngines must render a "%s" object, but this engine (of class "%s") rendered something else ("%s").' => 'SearchEngines must render a "%s" object, but this engine (of class "%s") rendered something else ("%s").',
      'There is no active query yet.' => 'There is no active query yet.',
      'Maximum page size for Conduit API method calls is 100, but this call specified %s.' => 'Maximum page size for Conduit API method calls is 100, but this call specified %s.',
      'Service index is out of date, repairing...' => 'Service index is out of date, repairing...',
      'Query: %s' => 'Query: %s',
      'Run a search query. Intended for debugging and development.' => 'Run a search query. Intended for debugging and development.',
      'Two fields in this SearchEngine use the same key ("%s"), but each field must use a unique key.' => 'Two fields in this SearchEngine use the same key ("%s"), but each field must use a unique key.',
      'Ferret function "%s" is specified with a denormalized name. Instead, specify the function using the normalized function name ("%s").' => 'Ferret function "%s" is specified with a denormalized name. Instead, specify the function using the normalized function name ("%s").',
      'Unable to instantiate query class "%s": %s' => 'Unable to instantiate query class "%s": %s',
      '—' => '—',
      'Cats have five pointy ends.' => 'Cats have five pointy ends.',
      'Personal Saved Queries' => 'Personal Saved Queries',
      'Ignored Common Word' => 'Ignored Common Word',
      'SearchFields "%s" (of class "%s") and "%s" (of class "%s") both define the same Conduit key ("%s"). Keys must be unique.' => 'SearchFields "%s" (of class "%s") and "%s" (of class "%s") both define the same Conduit key ("%s"). Keys must be unique.',
      'You must choose a link name.' => 'You must choose a link name.',
      'Recompute common ngrams. This is an advanced workflow that can harm search quality if used improperly.' => 'Recompute common ngrams. This is an advanced workflow that can harm search quality if used improperly.',
      'Engine: Fulltext' => 'Engine: Fulltext',
      'Global Menu Items' => 'Global Menu Items',
      'No visible menu items can render content.' => 'No visible menu items can render content.',
      'This query specifies an invalid parameter. Review the query parameters and correct errors.' => 'This query specifies an invalid parameter. Review the query parameters and correct errors.',
      'You must choose a label name.' => 'You must choose a label name.',
      'Edit the menu for your personal account.' => 'Edit the menu for your personal account.',
      'Application "%s" is not a valid application which you have permission to see.' => 'Application "%s" is not a valid application which you have permission to see.',
      'Specify either --reset or --threshold.' => 'Specify either --reset or --threshold.',
      'Queries' => 'Queries',
      'Already Default' => 'Already Default',
      'Parameter "constraints" must be a map of constraints, got "%s".' => 'Parameter "constraints" must be a map of constraints, got "%s".',
      'No services need initialization.' => 'No services need initialization.',
      'The Spanish word for cat is "cato". The biggest cat is called "el cato".' => 'The Spanish word for cat is "cato". The biggest cat is called "el cato".',
      'Add New Menu Item...' => 'Add New Menu Item...',
      'Untitled "%s" Item' => 'Untitled "%s" Item',
      'Query key "%s" does not correspond to a valid query.' => 'Query key "%s" does not correspond to a valid query.',
      'The first cats evolved on the savannah about 8,000 years ago.' => 'The first cats evolved on the savannah about 8,000 years ago.',
      'You must name the query.' => 'You must name the query.',
      'Choose Item Icon' => 'Choose Item Icon',
      'Cats will often bring you their prey because they feel sorry for your inability to hunt.' => 'Cats will often bring you their prey because they feel sorry for your inability to hunt.',
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
    This API endpoint supports these constraints:' => 'You can apply custom constraints by passing a dictionary in `constraints`.
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
    This API endpoint supports these constraints:',
      'Substring Search' => 'Substring Search',
      'WMF T346876 Debug: User: %s' => 'WMF T346876 Debug: User: %s',
      'Handle: %s' => 'Handle: %s',
      'This call does not support any attachments.' => 'This call does not support any attachments.',
      'Really delete the query "%s"? You can not undo this. Remember all the great times you had filtering results together?' => 'Really delete the query "%s"? You can not undo this. Remember all the great times you had filtering results together?',
      'Edit Menu Item: %s' => 'Edit Menu Item: %s',
      'Not all cats can retract their claws, but most of them can.' => 'Not all cats can retract their claws, but most of them can.',
      'Restricted Dashboard' => 'Restricted Dashboard',
      'Invalid Dashboard' => 'Invalid Dashboard',
      'Run this workflow with "--background" to queue tasks for the daemon workers.' => 'Run this workflow with "--background" to queue tasks for the daemon workers.',
      'This is a visual divider which you can use to separate sections in the menu. It does not have any configurable options.' => 'This is a visual divider which you can use to separate sections in the menu. It does not have any configurable options.',
      'Room "%s" is not a valid room which you have permission to see.' => 'Room "%s" is not a valid room which you have permission to see.',
      'Open Documents' => 'Open Documents',
      'Taco cat spelled backwards is taco cat.' => 'Taco cat spelled backwards is taco cat.',
      'Find objects matching a fulltext search query. See "Search User Guide" in the documentation for details.' => 'Find objects matching a fulltext search query. See "Search User Guide" in the documentation for details.',
      'Search Ngram' => 'Search Ngram',
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
    These are the fields available on this object type:' => 'Objects matching your query are returned as a list of dictionaries in the
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
    These are the fields available on this object type:',
      'Enable Menu Item' => 'Enable Menu Item',
      'Engine: Hovercards' => 'Engine: Hovercards',
      'Search for objects with specific IDs.' => 'Search for objects with specific IDs.',
      'Global Saved Queries' => 'Global Saved Queries',
      'Profile menu items can not be generated without an object context.' => 'Profile menu items can not be generated without an object context.',
      'Too many relationships (%s, of type "%s"). Must be less than %s.' => 'Too many relationships (%s, of type "%s"). Must be less than %s.',
      'Profile Menu' => 'Profile Menu',
      'Service initialization complete.' => 'Service initialization complete.',
      'Configure Menu' => 'Configure Menu',
      'Cats have a tail, two feet, between one and three ears, and two other feet.' => 'Cats have a tail, two feet, between one and three ears, and two other feet.',
      'Bucket' => 'Bucket',
      'Query Errors' => 'Query Errors',
      'Unsupported item action "%s".' => 'Unsupported item action "%s".',
      'Not supported.' => 'Not supported.',
      'Query contains a token ("%s") with no search term. Query tokens specify text to search for.' => 'Query contains a token ("%s") with no search term. Query tokens specify text to search for.',
      'Unable to load object "%s" to rebuild indexes.' => 'Unable to load object "%s" to rebuild indexes.',
      'You must choose a form.' => 'You must choose a form.',
      'You can not create that relationship because it would create a circular dependency:' => 'You can not create that relationship because it would create a circular dependency:',
      'Reindex objects previously indexed on or before a given date.' => 'Reindex objects previously indexed on or before a given date.',
      'Engine class is null.' => 'Engine class is null.',
      'Mandatory Item' => 'Mandatory Item',
      'Provide a list of objects to index (like "D123"), or a set of query constraint flags (like "--type"), or "--all" to index all objects.' => 'Provide a list of objects to index (like "D123"), or a set of query constraint flags (like "--type"), or "--all" to index all objects.',
      'Home Menu' => 'Home Menu',
      'Raw query to execute.' => 'Raw query to execute.',
      'Two field specifications share the same key ("%s"). Each specification must have a unique key.' => 'Two field specifications share the same key ("%s"). Each specification must have a unique key.',
      'Profile Menu Items' => 'Profile Menu Items',
      'You must choose a URI to link to.' => 'You must choose a URI to link to.',
      'Field Present: %s' => 'Field Present: %s',
      'Expected "newMenuItemViewList()" to return a list (in class "%s"), but it returned something else ("%s").' => 'Expected "newMenuItemViewList()" to return a list (in class "%s"), but it returned something else ("%s").',
      'Initialize or repair a search service.' => 'Initialize or repair a search service.',
      'Current Default' => 'Current Default',
      'Outside of the CAT scan, cats have made almost no contributions to modern medicine.' => 'Outside of the CAT scan, cats have made almost no contributions to modern medicine.',
      'Query Name' => 'Query Name',
      'No search engines available.' => 'No search engines available.',
      'A cat\'s visual, olfactory, and auditory senses, Contribute to their hunting skills and natural defenses.' => 'A cat\'s visual, olfactory, and auditory senses, Contribute to their hunting skills and natural defenses.',
      'Object Fields' => 'Object Fields',
      'Engine: Index' => 'Engine: Index',
      'Constraints' => 'Constraints',
      'Result Ordering' => 'Result Ordering',
      'Edit Saved Query' => 'Edit Saved Query',
      'You can not use query constraint flags (like "--version", "--type", or a list of specific objects) with "--all".' => 'You can not use query constraint flags (like "--version", "--type", or a list of specific objects) with "--all".',
      'You cannot add more than %d objects to the relationship.' => 'You cannot add more than %s objects to the relationship.',
      'Motivator' => 'Motivator',
      'Menu Items' => 'Menu Items',
      'NO OBJECTS' => 'NO OBJECTS',
      'Object types to reindex, like "task", "commit" or "revision".' => 'Object types to reindex, like "task", "commit" or "revision".',
      'Reindex all documents.' => 'Reindex all documents.',
      'WMF T346876 Debug: Viewer: %s' => 'WMF T346876 Debug: Viewer: %s',
      'Hide Query' => 'Hide Query',
      'Set Default Query' => 'Set Default Query',
      'Select a document type...' => 'Select a document type...',
      '(Restricted/Invalid Project)' => '(Restricted/Invalid Project)',
      'Constants supported by the `%s` constraint:' => 'Constants supported by the `%s` constraint:',
      'Use "--force" to force the index to update these documents.' => 'Use "--force" to force the index to update these documents.',
      'Disable this menu item? It will no longer appear in the menu, but you can re-enable it later.' => 'Disable this menu item? It will no longer appear in the menu, but you can re-enable it later.',
      '(See table below.)' => '(See table below.)',
      'Build or rebuild search indexes.' => 'Build or rebuild search indexes.',
      'Cats must eat a diet rich in fish to replace the tiny bones in their tails.' => 'Cats must eat a diet rich in fish to replace the tiny bones in their tails.',
      'Set this item as the default for this menu? Users arriving on this page will be shown the content of this item by default.' => 'Set this item as the default for this menu? Users arriving on this page will be shown the content of this item by default.',
      'Fulltext Engine' => 'Fulltext Engine',
      'Two search engine attachments (of classes "%s" and "%s") specify the same attachment key ("%s"); keys must be unique.' => 'Two search engine attachments (of classes "%s" and "%s") specify the same attachment key ("%s"); keys must be unique.',
      'In ancient Egypt, the cat-god Horus watched over all cats.' => 'In ancient Egypt, the cat-god Horus watched over all cats.',
      'Ngrams Engine' => 'Ngrams Engine',
      'Delete Query' => 'Delete Query',
      'Selecting objects to index...' => 'Selecting objects to index...',
      '"%s" date can not be parsed.' => '"%s" date can not be parsed.',
      'Current Menu Items' => 'Current Menu Items',
      'Failed to update search index for document "%s": %s' => 'Failed to update search index for document "%s": %s',
      'Search for objects with specific PHIDs.' => 'Search for objects with specific PHIDs.',
      'Full Name' => 'Full Name',
      'Type "%s" matches no indexable objects. Supported types are: %s.' => 'Type "%s" matches no indexable objects. Supported types are: %s.',
      'Menu Item' => 'Menu Item',
      'This is a standard **ApplicationSearch** method which will let you list, query, or search for objects. For documentation on these endpoints, see **[[ %s | Conduit API: Using Search Endpoints ]]**.' => 'This is a standard **ApplicationSearch** method which will let you list, query, or search for objects. For documentation on these endpoints, see **[[ %s | Conduit API: Using Search Endpoints ]]**.',
      'Many cats appear black in low light, suffering a -2 modifier to luck rolls.' => 'Many cats appear black in low light, suffering a -2 modifier to luck rolls.',
      'Attachments' => 'Attachments',
      'The Japanese word for cat is "kome", which is also the word for rice. Japanese cats love to eat rice, so the two are synonymous.' => 'The Japanese word for cat is "kome", which is also the word for rice. Japanese cats love to eat rice, so the two are synonymous.',
      'In the wild, cats and raccoons sometimes hunt together in packs.' => 'In the wild, cats and raccoons sometimes hunt together in packs.',
      'Query (with ID "%s") has already been saved. Queries are immutable once saved.' => 'Query (with ID "%s") has already been saved. Queries are immutable once saved.',
      'No Content' => 'No Content',
      'Prebuilt Queries' => 'Prebuilt Queries',
      'Fulltext Search Results' => 'Fulltext Search Results',
      'Query has an invalid sequence of operators ("%s").' => 'Query has an invalid sequence of operators ("%s").',
      'Constraint "%s" is not a valid constraint for this query.' => 'Constraint "%s" is not a valid constraint for this query.',
      'Document Status' => 'Document Status',
      'Engine: Search' => 'Engine: Search',
      'Profile Menu Item' => 'Profile Menu Item',
      '"2022-12-25" or "7 days ago"...' => '"2022-12-25" or "7 days ago"...',
      'Paging and Limits' => 'Paging and Limits',
      'No objects selected to index.' => 'No objects selected to index.',
      'A cat can run seven times faster than a human, but only for a short distance.' => 'A cat can run seven times faster than a human, but only for a short distance.',
      'This engine is used to modify menu items on profiles.' => 'This engine is used to modify menu items on profiles.',
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
    queries:' => 'You can choose a builtin or saved query as a starting point for filtering
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
    queries:',
      'No object relationship of type "%s" exists.' => 'No object relationship of type "%s" exists.',
      'Delete Menu Item' => 'Delete Menu Item',
      'Query is too long (%s bytes, maximum is %s bytes).' => 'Query is too long (%s bytes, maximum is %s bytes).',
      'Ferret search engine field key ("%s") is invalid. Field keys must be exactly four characters long and contain only lowercase latin letters.' => 'Ferret search engine field key ("%s") is invalid. Field keys must be exactly four characters long and contain only lowercase latin letters.',
      'Service index is already up to date.' => 'Service index is already up to date.',
      'Cats spend most of their time plotting to kill their owner.' => 'Cats spend most of their time plotting to kill their owner.',
      'Storage Used' => 'Storage Used',
      'Project Menu' => 'Project Menu',
      'Reindex objects previously indexed on or after a given date.' => 'Reindex objects previously indexed on or after a given date.',
      'Customize Query: %s' => 'Customize Query: %s',
      'Edit Related Objects...' => 'Edit Related Objects...',
      'Create Menu Item' => 'Create Menu Item',
      'No saved queries.' => 'No saved queries.',
      'Supports ID/PHID Queries' => 'Supports ID/PHID Queries',
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
    These attachments are available:' => 'By default, only basic information about objects is returned. If you want
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
    These attachments are available:',
      'The word "catastrophe" has no etymological relationship to the word "cat".' => 'The word "catastrophe" has no etymological relationship to the word "cat".',
      'Edit Builtin Item' => 'Edit Builtin Item',
      'Text value for "%s" can not be parsed.' => 'Text value for "%s" can not be parsed.',
      'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same name ("%s"). Each function must have a unique name.' => 'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same name ("%s"). Each function must have a unique name.',
      '\'%s\' is not the name of a known object.' => '\'%s\' is not the name of a known object.',
      'You must delegate to this controller, not invoke it directly.' => 'You must delegate to this controller, not invoke it directly.',
      'Cat tails are flexible because they contain thousands of tiny bones.' => 'Cat tails are flexible because they contain thousands of tiny bones.',
      'Cat Facts' => 'Cat Facts',
      'Ferret Engine Ngrams' => 'Ferret Engine Ngrams',
      'Forced search index updates for %s document(s).' => 'Forced search index updates for %s document(s).',
      'Updated search indexes for %s document(s).' => 'Updated search indexes for %s document(s).',
      'Field Absent: %s' => 'Field Absent: %s',
      'Cats are stealthy predators and nearly invisible to radar.' => 'Cats are stealthy predators and nearly invisible to radar.',
      'Search Index Versions' => 'Search Index Versions',
      'You can not create a relationship (of type "%s") to object "%s" because it is not the right type of object for this relationship.' => 'You can not create a relationship (of type "%s") to object "%s" because it is not the right type of object for this relationship.',
      'Object produced two items with the same builtin key ("%s"). Each item must have a unique builtin key.' => 'Object produced two items with the same builtin key ("%s"). Each item must have a unique builtin key.',
      '\'%s\' is not a builtin!' => '\'%s\' is not a builtin!',
      'All Open Objects' => 'All Open Objects',
      'Buckets Overflowing' => 'Buckets Overflowing',
      'Disable Query' => 'Disable Query',
      'Divider' => 'Divider',
      'Archived Dashboard' => 'Archived Dashboard',
      'Manage Menu' => 'Manage Menu',
      'This query took too long, so only some results are shown. %s' => 'This query took too long, so only some results are shown. %s',
      'Skipped %s documents(s) which have not updated since they were last indexed.' => 'Skipped %s documents(s) which have not updated since they were last indexed.',
      'The largest recorded cat was nearly 11 inches long from nose to tail.' => 'The largest recorded cat was nearly 11 inches long from nose to tail.',
      'PHID Type' => 'PHID Type',
      'Invalid Relationship' => 'Invalid Relationship',
      'There is nothing here.' => 'There is nothing here.',
      'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same key ("%s"). Each function must have a unique key.' => 'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same key ("%s"). Each function must have a unique key.',
      'Search engine ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'Search engine ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.',
      'IDs' => 'IDs',
      'This query will become your default query in the current application.' => 'This query will become your default query in the current application.',
      'PHIDs' => 'PHIDs',
      'Save Query' => 'Save Query',
      'Full-Text Search' => 'Full-Text Search',
      'WMF T346876 Debug: RequestURI: %s' => 'WMF T346876 Debug: RequestURI: %s',
      'Too few documents of type "%s" for any ngrams to be common.' => 'Too few documents of type "%s" for any ngrams to be common.',
      'Deprecated alias for "%s".' => 'Deprecated alias for "%s".',
      'Edit Menu Item' => 'Edit Menu Item',
      'Initializing search service "%s".' => 'Initializing search service "%s".',
      'SELECT' => 'SELECT',
      'Skipping service "%s" because it is not writable.' => 'Skipping service "%s" because it is not writable.',
      'Date value for "%s" can not be parsed.' => 'Date value for "%s" can not be parsed.',
      'NOTE' => 'NOTE',
      '"%s" must be a date before "%s".' => '"%s" must be a date before "%s".',
      'Fulltext Search' => 'Fulltext Search',
      'Drag items in this list to reorder them.' => 'Drag items in this list to reorder them.',
      'Prune ngrams present in more than this fraction of documents. Provide a value between 0.0 and 1.0.' => 'Prune ngrams present in more than this fraction of documents. Provide a value between 0.0 and 1.0.',
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
    These builtin orders are available:' => 'Use `order` to choose an ordering for the results.
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
    These builtin orders are available:',
      'This query took too long. %s' => 'This query took too long. %s',
      'The first cats evolved in swamps about 65 years ago.' => 'The first cats evolved in swamps about 65 years ago.',
      'You can tell how warm a cat is by examining the coloration: cooler areas are darker.' => 'You can tell how warm a cat is by examining the coloration: cooler areas are darker.',
      'Specify a query with --query.' => 'Specify a query with --query.',
      'You must choose an application.' => 'You must choose an application.',
      'This menu currently has no items.' => 'This menu currently has no items.',
      'Document Types' => 'Document Types',
      'Setting "%s" is misconfigured: %s' => 'Setting "%s" is misconfigured: %s',
      'This item is already set as the default item for this menu.' => 'This item is already set as the default item for this menu.',
      'Edit the global default menu for all users.' => 'Edit the global default menu for all users.',
      'Profile Menu User Guide' => 'Profile Menu User Guide',
      'You can not create a relationship to object "%s" because objects can not be related to themselves.' => 'You can not create a relationship to object "%s" because objects can not be related to themselves.',
      'Expected fulltext engine extension ("%s") to return a list of "FerretSearchFunction" objects from "newFerretSearchFunctions()", but found something else ("%s") at index "%s".' => 'Expected fulltext engine extension ("%s") to return a list of "FerretSearchFunction" objects from "newFerretSearchFunctions()", but found something else ("%s") at index "%s".',
      'Type specification "%s" duplicates type specification "%s". Specify each type only once.' => 'Type specification "%s" duplicates type specification "%s". Specify each type only once.',
      'Project "%s" is not a valid project which you have permission to see.' => 'Project "%s" is not a valid project which you have permission to see.',
      'Provided view is not one of the views in the list: you can only select a view which appears in the list.' => 'Provided view is not one of the views in the list: you can only select a view which appears in the list.',
      'No views match identifier "%s"!' => 'No views match identifier "%s"!',
      'Choose a valid export format.' => 'Choose a valid export format.',
      'Tooltip' => 'Tooltip',
      'Search engine ("%s") exported the wrong number of objects, expected %s but got %s.' => 'Search engine ("%s") exported the wrong number of objects, expected %s but got %s.',
      'This built-in query can not be deleted, but you can disable it so it does not appear in your query menu. You can enable it again later. Disable built-in query "%s"?' => 'This built-in query can not be deleted, but you can disable it so it does not appear in your query menu. You can enable it again later. Disable built-in query "%s"?',
      'Motivate your team with inspirational quotes from great minds. This menu item shows a new quote every day.' => 'Motivate your team with inspirational quotes from great minds. This menu item shows a new quote every day.',
      'Saved Queries' => 'Saved Queries',
      'Unknown search function "%s". Supported functions are: %s. (To search for a term containing a colon, surround the term in double quotes.)' => 'Unknown search function "%s". Supported functions are: %s. (To search for a term containing a colon, surround the term in double quotes.)',
      '(Restricted/Invalid Form)' => '(Restricted/Invalid Form)',
      'Edit Profile Menu Item Configurations' => 'Edit Profile Menu Item Configurations',
      'Delete this menu item?' => 'Delete this menu item?',
      'Cats prefer vanilla ice cream.' => 'Cats prefer vanilla ice cream.',
      'Resetting common ngrams for "%s".' => 'Resetting common ngrams for "%s".',
      'Minimum page size for API searches is 1, but this call specified %s.' => 'Minimum page size for API searches is 1, but this call specified %s.',
      'Export Results' => 'Export Results',
      'To configure the search engines, edit [[ %s | %s ]] configuration. See **[[ %s | %s ]]** for documentation.' => 'To configure the search engines, edit [[ %s | %s ]] configuration. See **[[ %s | %s ]]** for documentation.',
      'All Fulltext Search hosts failed:' => 'All Fulltext Search hosts failed:',
      'All Objects' => 'All Objects',
      'Dashboard "%s" is not a valid dashboard which you have permission to see.' => 'Dashboard "%s" is not a valid dashboard which you have permission to see.',
      'Failed to rebuild search index for any documents.' => 'Failed to rebuild search index for any documents.',
      'Updated common ngrams for "%s".' => 'Updated common ngrams for "%s".',
      'The query matched more than one page of results. Results are paginated before bucketing, so later pages may contain additional results in any bucket.' => 'The query matched more than one page of results. Results are paginated before bucketing, so later pages may contain additional results in any bucket.',
      'Ferret Fulltext Engine' => 'Ferret Fulltext Engine',
      'Export engine extension ("%s") exported the wrong number of objects, expected %s but got %s.' => 'Export engine extension ("%s") exported the wrong number of objects, expected %s but got %s.',
      'Link' => 'Link',
      'Query contains unmatched double quotes.' => 'Query contains unmatched double quotes.',
      'WMF T346876 Debug: Path: %s' => 'WMF T346876 Debug: Path: %s',
      'Enable Query' => 'Enable Query',
      'This item can not be set as the default item. This is usually because the item has no page of its own, or links to an external page.' => 'This item can not be set as the default item. This is usually because the item has no page of its own, or links to an external page.',
      'Use the application-specific Advanced Search to set additional search criteria: %s, %s. (%s)' => 'Use the application-specific Advanced Search to set additional search criteria: %s, %s. (%s)',
      'Browse Results' => 'Browse Results',
      'Application "%s" is not installed!' => 'Application "%s" is not installed!',
      'Ignored Short Word' => 'Ignored Short Word',
      'Exact Search' => 'Exact Search',
      'Enable this menu item? It will appear in the menu again.' => 'Enable this menu item? It will appear in the menu again.',
      'Created By Me' => 'Created By Me',
      'Specify either --reset or --threshold, not both.' => 'Specify either --reset or --threshold, not both.',
      'Object produced a builtin item with no builtin item key! Builtin items must have a unique key.' => 'Object produced a builtin item with no builtin item key! Builtin items must have a unique key.',
      'Ferret search engine function name ("%s") is invalid. Function names must be nonempty and may only contain latin letters and hyphens.' => 'Ferret search engine function name ("%s") is invalid. Function names must be nonempty and may only contain latin letters and hyphens.',
      'Disable Query?' => 'Disable Query?',
      'No Bucketing' => 'No Bucketing',
      'Use Results' => 'Use Results',
      'Expected fulltext engine extension ("%s") to return a list of functions from "newFerretSearchFunctions()", got "%s".' => 'Expected fulltext engine extension ("%s") to return a list of functions from "newFerretSearchFunctions()", got "%s".',
      'Order By' => 'Order By',
      'No new common ngrams exist for "%s".' => 'No new common ngrams exist for "%s".',
      'Cats purr when they are happy, upset, or asleep.' => 'Cats purr when they are happy, upset, or asleep.',
      'Save this query as a global query, making it visible to all users.' => 'Save this query as a global query, making it visible to all users.',
      'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.' => 'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.',
      'Edit Query' => 'Edit Query',
      'No results found for this query.' => 'No results found for this query.',
      'Searched For:' => 'Searched For:',
      'Force a complete rebuild of the entire index instead of an incremental update.' => 'Force a complete rebuild of the entire index instead of an incremental update.',
      'Cats with high self-esteem seek out high perches to launch their attacks. Watch out!' => 'Cats with high self-esteem seek out high perches to launch their attacks. Watch out!',
      'Motivator: %s' => 'Motivator: %s',
      '%s (Not Available)' => '%s (Not Available)',
      'Indexing %s object(s).' => 'Indexing %s object(s).',
      'This dashboard has been archived.' => 'This dashboard has been archived.',
      'Specify a numeric threshold between 0 and 1.' => 'Specify a numeric threshold between 0 and 1.',
      '(Restricted/Invalid Application)' => '(Restricted/Invalid Application)',
      'Expected buildNavigationMenuItems() to return a list of PHUIListItemView objects, but got a surprise.' => 'Expected buildNavigationMenuItems() to return a list of PHUIListItemView objects, but got a surprise.',
      'DEV: Overheated State' => 'DEV: Overheated State',
      'Query field must be absent ("%s") and present ("%s"). This is impossible, so the query is not valid.' => 'Query field must be absent ("%s") and present ("%s"). This is impossible, so the query is not valid.',
      'Reindex objects previously indexed with a particular version of the indexer.' => 'Reindex objects previously indexed with a particular version of the indexer.',
      'Portal Menu' => 'Portal Menu',
      'Not Defaultable' => 'Not Defaultable',
      'Really Delete Query?' => 'Really Delete Query?',
      'Query offset is too large. offset+limit=%s (max=%s)' => 'Query offset is too large. offset+limit=%s (max=%s)',
      'Instead of indexing in this process, queue tasks for the daemons. This can improve performance, but makes it more difficult to debug search indexing.' => 'Instead of indexing in this process, queue tasks for the daemons. This can improve performance, but makes it more difficult to debug search indexing.',
      'Edit Queries...' => 'Edit Queries...',
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
    These low-level columns are available:' => 'You can choose a low-level column order instead. To do this, provide a list
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
    These low-level columns are available:',
      'Builtin item ("%s") specifies a bad item key ("%s"); there is no corresponding item implementation available.' => 'Builtin item ("%s") specifies a bad item key ("%s"); there is no corresponding item implementation available.',
      'DEV: New User State' => 'DEV: New User State',
      'Export engine extension ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'Export engine extension ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.',
      'A cattail is a wetland plant with an appearance that resembles the tail of a cat.' => 'A cattail is a wetland plant with an appearance that resembles the tail of a cat.',
      'Service index does not exist, creating...' => 'Service index does not exist, creating...',
      'Export Data' => 'Export Data',
      'Circular Dependency' => 'Circular Dependency',
      'Cats use a special type of magnetism to help them land on their feet.' => 'Cats use a special type of magnetism to help them land on their feet.',
      'Lisk Builtin Properties' => 'Lisk Builtin Properties',
      'More information' => 'More information',
      'Unable to Render Dashboard' => 'Unable to Render Dashboard',
      'Browse Document Types' => 'Browse Document Types',
      'Queued %s document(s) for background indexing.' => 'Queued %s document(s) for background indexing.',
      '(Restricted/Invalid Conpherence)' => '(Restricted/Invalid Conpherence)',
      'Threshold must be greater than 0.0 and less than 1.0.' => 'Threshold must be greater than 0.0 and less than 1.0.',
      'This dashboard is invalid and could not be loaded.' => 'This dashboard is invalid and could not be loaded.',
      'Enable the built-in query "%s"? It will appear in your menu again.' => 'Enable the built-in query "%s"? It will appear in your menu again.',
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
    if `before` is `null`, there are no previous results available.' => 'Queries are limited to returning 100 results at a time. If you want fewer
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
    if `before` is `null`, there are no previous results available.',
      'Engine Name' => 'Engine Name',
    );
  }

}
