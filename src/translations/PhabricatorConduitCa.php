<?php

final class PhabricatorConduitCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Support for ConduitResultInterface' => 'Suport per ConduitResultInterface',
      'Conduit Logs' => 'Registres de Conduit',
      'Use form-encoded data to submit parameters to Conduit endpoints. Sending a JSON-encoded body and setting \'Content-Type\': \'application/json\' is not currently supported.' => 'Utilitzeu dades codificades per formularis per enviar paràmetres als l\'endpoints de Conduit. Actualment no s’admet l’enviament d’un cos codificat JSON i la configuració de ‘Content-Type’:‘application/json’.',
      'Session key is invalid.' => 'La clau de sessió no és vàlida.',
      'arc call-conduit' => 'trucada d\'arc-conduit',
      'List capabilities, wire formats, and authentication protocols available on this server.' => 'Feu una llista d\'aptituds, formats de cablejat i protocols d’autenticació disponibles en aquest servidor.',
      'Conduit tokens inherit the policies of the user they authenticate.' => 'Els testimonis de Conduit hereten les polítiques de l’usuari que autentifiquen.',
      'JSON' => 'JSON',
      'Deprecated Method' => 'Mètode obsolet',
      'The username you are attempting to authenticate with is not valid.' => 'El nom d\'usuari amb què intenteu autenticar-vos no és vàlid.',
      'This request originates from outside of the Phabricator cluster address range. Requests signed with cluster API tokens must originate from within the cluster.' => 'Aquesta petició s\'origina des de fora del rang d\'adreces del clúster de Phabricator. Les sol·licituds signades amb testimonis API en clúster han d\'originar-se dins del clúster.',
      'All Methods' => 'Tots els  Mètodes',
      'API Method: %s' => 'Mètode d\'API: %s',
      'This token is automatically generated by Phabricator, and used to make requests between nodes in a Phabricator cluster. You can not use this token in external applications.' => 'Aquest testimoni és generat automàticament per Phabricator, i s\'utilitza per fer peticions entre nodes en un clúster de Phabricator. No es pot utilitzar aquest testimoni en aplicacions externes.',
      'cURL' => 'cURL',
      'OAuth clients may never call this method.' => 'És possible que els clients OAuth no cridin mai aquest mètode.',
      'Human Readable' => 'Llegible per humans',
      'Called After' => 'Trucat després',
      'Unstable Methods' => 'Mètodes inestables',
      'Retrieve certificate information for a user.' => 'Rescatar la informació de certificat per un usuari.',
      'Call to method newQueryObject() did not return an object of class "%s".' => 'La trucada al mètode newQueryObject() no va retornar un objecte de classe "%s".',
      'Reading input from stdin...' => 'S\'està llegint l\'entrada de stdin ...',
      'All Call Logs' => 'Tots els registres de trucades',
      'File to read parameters from, or "-" to read from stdin.' => 'El fitxer on llegir els paràmetres, o "-" per llegir des d\'stdin.',
      'List of integers.' => 'Llista d\'enters.',
      'You have made too many invalid token requests recently. Wait before making more.' => 'Recentment has fet massa peticions de testimonis no vàlides.  Espera abans de fer més.',
      'API token "%s" has the wrong format. API tokens should be 32 characters long and begin with one of these prefixes: %s.' => 'El testimoni d\'API «%s» té un format incorrecte.  Els testimonis d\'API han de tenir 32 caràcters i començar amb un d\'aquests prefixos: %s.',
      'No such user "%s" exists.' => 'No existeix cap usuari "%s".',
      'Standard API Token' => 'Testimoni de l\'API estàndard',
      'My Calls' => 'Les meves trucades',
      'Call' => 'Trucada',
      'Point values must be nonnegative.' => 'Els valors dels punts han de ser no negatius.',
      'API token "%s" was previously valid, but has expired.' => 'El testimoni d\'API «%s» era vàlid anteriorment, però ha caducat.',
      'Use the %s panel in Settings to generate or manage API tokens.' => 'Utilitzeu el panell %s a Configuració per generar o gestionar els testimonis d\'API.',
      'Conduit' => 'Conducte',
      'Basic ping for monitoring or a health-check.' => 'Ping bàsic per fer un seguiment o un control de salut.',
      'The value for parameter \'%s\' is not valid JSON. All parameters must be encoded as JSON values, including strings (which means you need to surround them in double quotes). Check your syntax. Value was: %s.' => 'El valor del paràmetre "%s" no és JSON vàlid. Tots els paràmetres s\'han de codificar com a valors JSON, incloses les cadenes (el que significa que cal que les envolteu entre cometes dobles). Comproveu la vostra sintaxi. El valor era de: %s.',
      'An integer.' => 'Un enter.',
      'The key which signed this request is not trusted. Only trusted keys can be used to sign API calls.' => 'La clau que ha signat aquesta sol·licitud no és fiable. Només es poden utilitzar claus de confiança per signar trucades a l\'API.',
      'Access token does not exist.' => 'El testimoni d\'accés no existeix.',
      'Method Parameters' => 'Paràmetres de mètode',
      'Signature verification failure. %s' => 'Error de verificació de signatura. %s',
      'Call Duration (us)' => 'Duració de la trucada (nos)',
      'Conduit Tokens' => 'Testimonis de Conduit',
      'List of usernames.' => 'Llista de noms d’usuari.',
      'Really terminate all active API tokens? Any systems using these tokens will no longer be able to make API requests.' => 'Segur que voleu finalitzar tots els testimonis actius de l\'API?  Qualsevol sistema que utilitzi aquests testimonis ja no podrà fer peticions API.',
      'Show established API methods with stable interfaces.' => 'Mostra mètodes API establerts amb interfícies estables.',
      'Specify a file to read parameters from with "--input".' => 'Especifiqueu un fitxer per llegir els paràmetres amb "--input".',
      'Caller' => 'Persona que truca',
      'Expected integer, got something else.' => 'S\'esperava un enter, hi ha alguna altra cosa.',
      'Certificate Token' => 'Testimoni de certificat',
      'Invalid JSON input.' => 'Entrada de JSON no vàlida.',
      'Certificate Install Token' => 'Testimoni d\'Instal·lació del Certificat',
      '<parameters>' => '<paràmetres>',
      'You can not call newQueryFromRequest() in this method ("%s") because it does not implement newQueryObject().' => 'No es pot trucar a newQueryFromRequest() en aquest mètode ("%s") perquè no implementa newQueryObject().',
      'Caller PHID' => 'PHID de qui truca',
      '<api-token>' => '<testimoni-api>',
      'See error message for details.' => 'Vegeu el missatge d\'error per obtenir més informació.',
      'Literal null.' => 'Literalment nul.',
      'There are no API tokens to terminate.' => 'No hi ha cap testimoni API per finalitzar.',
      'List of user PHIDs.' => 'Llista de PHID d\'usuaris.',
      '%s should require authentication.' => '%s hauria de requerir autenticació.',
      'Expected string, got something else.' => 'S\'esperava una cadena, hi ha alguna altra cosa.',
      'Epoch timestamp, as an integer.' => 'Segell de temps d\'època, com a un enter.',
      'List of PHIDs.' => 'Llista de PHID.',
      'Find calls by specific users.' => 'Trobar trucades per usuaris específics.',
      'Conduit Methods' => 'Mètodes de Conduit',
      'Request is missing required "%s" parameter.' => 'Falta el paràmetre "%s" obligatori.',
      'List with a mixture of PHIDs and tags.' => 'Llista amb una mescla de PHID i etiquetes.',
      'List of project tags.' => 'Llista d’etiquetes de projecte.',
      'A PHID.' => 'Un PHID.',
      'List of strings.' => 'Llista de cadenes.',
      'Client/server version mismatch. Upgrade your client.' => 'La versió del client/servidor no coincideix. Actualitzeu el vostre client.',
      'The key which signed this request is associated with a disabled device ("%s").' => 'La clau que ha signat aquesta sol·licitud està associada amb un dispositiu inhabilitat («%s»).',
      'The challenge token you are authenticating with is outside of the allowed time range. Either your system clock is out of whack or you\'re executing a replay attack.' => 'El testimoni de desafiament amb el qual esteu autenticant està fora de l\'interval de temps permès.  O el rellotge del sistema està fora de combat o esteu executant un atac de repetició.',
      'Really terminate this token? Any system using this token will no longer be able to make API requests.' => 'Vols finalitzar aquest testimoni?  Qualsevol sistema que utilitzi aquest testimoni ja no podrà fer peticions API.',
      'Conduit API method "%s" does not exist.' => 'El mètode de l\'API Conduit "%s" no existeix.',
      'A new version of arc is available! You need to upgrade to connect to this server (you are running version %d, the server is running version %d).' => 'Hi ha disponible una nova versió d\'arc. Heu d’actualitzar per connectar-vos a aquest servidor (esteu executant la versió %s, el servidor està executant la versió %s).',
      'Stable Methods' => 'Mètodes estables',
      'No Conduit method provided.' => 'No s\'ha proporcionat cap mètode de Conduit.',
      'Grant Account Access' => 'Concedeix accés al compte',
      'Stability' => 'Estabilitat',
      'Show old methods which will be deleted in a future version of Phabricator.' => 'Mostra els mètodes antics que se suprimiran en una futura versió de Phabricator.',
      'Find calls to stable, unstable, or deprecated methods.' => 'Cerca trucades a mètodes estables, inestables o obsolets.',
      'Call Logs' => 'Registres de trucades',
      'Copy and paste this token into the prompt given to you by `arc install-certificate`' => 'Copieu i enganxeu aquest testimoni a l\'indicatiu que us ha donat `arc install-certificate`',
      'Client/server version mismatch. Upgrade your server or downgrade your client.' => 'Desajustament de la versió client/servidor. Actualitzeu el vostre servidor o canvieu el vostre client.',
      'A nonnegative number, or null.' => 'Un nombre no negatiu, o nul.',
      'My Deprecated Calls' => 'Les meves trucades obsoletes',
      '(Wildcard)' => '(Comodí)',
      'Errors' => 'Errors',
      'User PHID.' => 'PHID de l\'usuari.',
      'Expected boolean (true or false), got something else.' => 'S\'esperava un booleà (cert o fals), s\'ha obtingut una altra cosa.',
      'Method Call Result' => 'Total de trucades al mètode',
      'OAuth clients may always call this method.' => 'És possible que els clients OAuth no cridin mai aquest mètode.',
      'Username.' => 'Nom d\'usuari.',
      'Deprecated Methods' => 'Mètodes obsolets',
      'Deprecated Call Logs' => 'Registres de trucades obsoletes',
      'No user or device is associated with the public key "%s".' => 'Cap usuari o dispositiu associat amb la clau pública "%s".',
      'Token does not exist or has expired.' => 'El testimoni no existeix o ha caducat.',
      'Command Line API Token' => 'Testimoni d\'API de línia d\'ordres',
      'Terminate Tokens' => 'Finalitzar els Testimonis',
      'Unstable Method' => 'Mètode inestable',
      'Login Required: This method requires authentication. You must log in before you can make calls to it.' => 'Inici de sessió obligatori: aquest mètode requereix autenticació. Heu d’iniciar sessió abans de poder fer-hi trucades.',
      'Enter parameters using **JSON**. For instance, to enter a list, type: `%s`' => 'Introduïu paràmetres mitjançant **JSON**. Per exemple, per introduir una llista, escriviu: "%s"',
      'A string.' => 'Una cadena.',
      'Method \'%s\' belongs to application \'%s\', which is not installed.' => 'El mètode \'%s\' pertany a l\'aplicació \'%s\', que no està instal·lada.',
      'Single column PHID.' => 'Una sola columna de PHID.',
      'Output Format' => 'Format de sortida',
      'Frozen' => 'Congelat',
      'If you submit parameters, these examples will update to show exactly how to encode the parameters you submit.' => 'Si envieu paràmetres, aquests exemples s’actualitzaran per mostrar exactament com codificar els paràmetres que envieu.',
      'Returns' => 'Devolucions',
      'Active API Tokens' => 'Testimonis d\'API actius',
      'Conduit API Overview' => 'Visió general de l\'API Conduit',
      'Session key is not present.' => 'La clau de sessió no està present.',
      'No matching calls in log.' => 'No hi ha trucades coincidents al registre.',
      'Show new methods which are subject to change.' => 'Mostra els mètodes nous que poden canviar.',
      'Invalid parameter information was passed to method \'%s\'.' => 'S\'ha passat informació de paràmetre no vàlid al mètode «%s».',
      'Conduit client "%s" is not known.' => 'El client de Conduit "%s" no és conegut',
      'After you copy and paste this token, `arc` will complete the certificate install process for you.' => 'Després de copiar i enganxar aquest testimoni, `arc` completarà el procés d\'instal·lació del certificat per a tu.',
      'Copy-paste the API Token below to grant access to your account.' => 'Copieu i enganxeu el Testimoni d\'API a continuació per a permetre l\'accés al vostre compte.',
      'Access token is invalid or expired.' => 'El testimoni d\'accés no és vàlid o ha caducat.',
      'API token "%s" is not valid.' => 'El testimoni d\'API «%s» no és vàlid.',
      'Expected numeric points value, got something else.' => 'S\'esperava un valor numèric, s\'ha obtingut una altra cosa.',
      'API token is not associated with a valid user.' => 'El testimoni d\'API no està associat amb un usuari vàlid.',
      'You don\'t have any active API tokens.' => 'No teniu cap testimoni d\'API actiu.',
      'This will authorize the requesting script to act on your behalf permanently, like giving the script your account password.' => 'Això autoritzarà l\'script sol·licitant a actuar en el seu nom de manera permanent, com ara donar-li la contrasenya del compte.',
      'Generate API Token' => 'Generar un testimoni d\'API',
      'Generate a new API token?' => 'Voleu generar un nou testimoni d\'API?',
      'List with a mixture of PHIDs and dictionaries.' => 'Llista amb una mescla de PHID i diccionaris.',
      'Called Before' => 'Trucat abans',
      'OAuth Scope' => 'Abast d\'OAuth',
      'Find calls to specific methods.' => 'Trobar trucades a mètodes específics.',
      'Developer API' => 'API del desenvolupador',
      'Execute the call as the given user. (If omitted, the call will be executed as an omnipotent user.)' => 'Executeu la trucada com a usuari indicat. (Si s\'omet, la trucada s\'executarà com a usuari omnipotent.)',
      'API token "%s" has the wrong length. API tokens should be 32 characters long.' => 'El testimoni d\'API «%s» té una longitud incorrecta.  Els testimonis d\'API han de tenir 32 caràcters de longitud.',
      'List with a mixture of PHIDs and usernames.' => 'Llista amb una mescla de PHID i noms d\'usuari.',
      'Terminate API Token' => 'Finalitzar el testimoni d\'API',
      'Expected a list, but value is an object.' => 'S\'esperava una llista, però el valor és un objecte.',
      'Method to call.' => 'Mètode per trucar.',
      'Force the request to execute in this process, rather than proxying to another host in the cluster.' => 'Força l\'execució de la sol·licitud en aquest procés, en lloc de fer servir el servidor intermediari a un altre amfitrió del clúster.',
      'Callers' => 'Persones que truquen',
      'You do not have authorization to call this method.' => 'No tens autorització per trucar aquest mètode.',
      'Cluster API Token' => 'Testimoni d\'API en clúster',
      'Your \'%s\' client version is \'%d\', which is newer than the server version, \'%d\'. Upgrade your Phabricator install.' => 'La vostra versió de client «%s» és «%s», que és posterior a la versió del servidor, «%s». Actualitza la instal·lació de Phabricator.',
      'View API Token' => 'Visualitza el Testimoni d\'API',
      'Expected PHID or null, got something else.' => 'S\'esperava un PHID o no res, hi ha alguna altra cosa.',
      'List of position dictionaries.' => 'Llista de diccionaris de posició.',
      'Call Method' => 'Mètode de trucada',
      'Call a Conduit method..' => 'Truqueu a un mètode de Conduit...',
      'This method is frozen and will eventually be deprecated.' => 'Aquest mètode és congelat i finalment serà obsolet.',
      'Install Certificate' => 'Instal·la Certificat',
      'Method Result' => 'Resultat del mètode',
      'OAuth clients may call this method after requesting access to the "%s" scope.' => 'Els clients d\'OAuth poden trucar a aquest mètode després de sol·licitar accés a l\'abast "%s".',
      'Unknown Conduit token type "%s"!' => 'Testimoni Conduit desconegut tipus «%s»!',
      'The request you submitted is signed with a timestamp, but that timestamp is not within %s of the current time. The signed timestamp is %s (%s), and the current server time is %s (%s). This is a difference of %s seconds, but the timestamp must differ from the server time by no more than %s seconds. Your client or server clock may not be set correctly.' => 'La sol·licitud que heu enviat està signada amb segell de temps, però aquest segell de temps no està dins de %s de l\'hora actual. El segell de temps signat és %s (%s), i l\'hora actual del servidor és %s (%s). Aquesta és una diferència de %s segons, però el segell de temps ha de ser diferent de l\'hora del servidor en no més de %s segons. És possible que el vostre client o el vostre servidor no estiguin ben configurats.',
      'Error while reading "%s": %s' => 'Error en llegir "%s": %s',
      'No Tokens to Terminate' => 'No hi ha Testimonis per Finalitzar',
      'This method is new and unstable. Its interface is subject to change.' => 'Aquest mètode és nou i inestable. La seva interfície està subjecta a canvis.',
      'Terminate API Tokens' => 'Finalitzar els Testimonis d\'API',
      'Modern Methods' => 'Mètodes moderns',
      'List of column PHIDs.' => 'Llista de columna de PHID.',
      'List of project PHIDs.' => 'Llista de PHID de projectes.',
      'You can not access the user inside the implementation of a Conduit method which does not require authentication (as per %s).' => 'No es pot accedir a l\'usuari dins de la implementació d\'un mètode de Conduit que no requereixi autenticació (segons %s).',
      'Stable' => 'Estable',
      'Returns the parameters of the Conduit methods.' => 'Retorna els paràmetres dels mètodes de Conduit.',
      'Authentication is invalid.' => 'L\'autenticació no és vàlida.',
      'This request originates from outside of the Phabricator cluster address range. Requests signed with trusted device keys must originate from within the cluster.' => 'Aquesta sol·licitud prové de fora de l\'interval d\'adreces del clúster de Phabricator. Les sol·licituds signades amb claus de dispositiu de confiança han de provenir del clúster.',
      'A boolean.' => 'Un booleà.',
      'Provided "%s" ("%s") is not recognized.' => 'No es reconeix el «%s» («%s») proporcionat.',
      'You do not have access to the application which provides this API method.' => 'No teniu accés a l\'aplicació que proporciona aquest mètode API.',
      'Integer overflow.' => 'Desbordament d\'enter.',
      'Specify a method to call with "--method".' => 'Especificar un mètode per trucar amb "--method".',
      'Your authentication certificate for this server is invalid.' => 'El vostre certificat d\'autenticació per a aquest servidor no és vàlid.',
      'User account is not permitted to use the API.' => 'No es permet que el compte d\'usuari utilitzi l\'API.',
      'Connect a session-based client.' => 'Connecta un client basat en la sessió.',
      'Any mixed or complex value. Check the documentation for details.' => 'Qualsevol valor mixt o complex. Consulteu la documentació per obtenir més informació.',
      'Frozen Method' => 'Mètode congelat',
      'Too many Conduit methods provided.' => 'Es proporcionen massa mètodes de Conduit.',
      'Expected a nonempty list, but value is an empty list.' => 'S\'esperava una llista no buida, però és una llista buida.',
      'This method is deprecated.' => 'Aquest mètode és obsolet.',
      'API Method "%s" defines a disallowed parameter, "%s". This parameter name is reserved.' => 'El mètode API "%s" defineix un paràmetre no permès, "%s". Aquest nom de paràmetre està reservat.',
      'Unstable' => 'Inestable',
      'Access token is for invalid user.' => 'El testimoni d\'accés és per a un usuari no vàlid.',
      'Epoch timestamp must be larger than 0, got %d.' => 'El segell de temps d\'època ha de ser més gran que 0, s\'ha obtingut %s.',
      'Method Status' => 'Estat del mètode',
      'API Method "%s" does not define these parameters: %s.' => 'El mètode d\'API "%s" no defineix aquests paràmetres: %s.',
      'Client is unknown.' => 'El client és desconegut.',
      'Certificate token points to an invalid user!' => 'El testimoni de certificat apunta a un usuari no vàlid!',
      'Expected a list, but value is not a list.' => 'S\'esperava una llista, però el valor no és una llista.',
      'Expected PHID, got something else.' => 'S\'esperava un PHID, hi ha alguna altra cosa.',
      'If you change your mind, you can revoke this token later in {nav icon=wrench,name=Settings > Conduit API Tokens}.' => 'Si canvies d\'opinió, pots revocar aquest testimoni més tard a {nav icon=Wrench,name=Configuració > Testimonis d\'API Conduit}.',
      'Generate Token' => 'Generar un testimoni',
      'Terminate Token' => 'Cancel·lar un testimoni',
      'This server requires authentication.' => 'Aquest servidor requereix autenticació.',
    );
  }

}
