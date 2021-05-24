<?php

final class PhabricatorConfigCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Review and modify configuration settings.' => 'Reviseu i modifiqueu els paràmetres de configuració.',
      'Array containing list of uninstalled applications.' => 'Array que conté la llista d\'aplicacions desinstal·lades.',
      'Client Server' => 'Servidor de Client',
      'Listeners receive callbacks when interesting things occur.' => 'Els oients reben trucades de retorn quan ocorren coses interessants.',
      'Update configuration in the database instead of in local configuration.' => 'Actualitza la configuració a la base de dades en lloc de la configuració local.',
      'Column/Key' => 'Columna/Clau',
      'Customize the logo and wordmark text in the header.' => 'Personalitzeu el logotip i el nom de la marca a la capçalera.',
      'Configuring File Storage' => 'Configurant l\'Emmagatzematge de Fitxers',
      '%s / %s' => '%s / %s',
      'Address ranges of cluster hosts.' => 'Intervals d\'adreces dels amfitrions del clúster.',
      'Suppress mail from maintenance users.' => 'Suprimeix el correu dels usuaris de manteniment.',
      'Memory Usage' => 'Ús de Memòria',
      'Impersonating users over the API is no longer supported.' => 'Ja no és possible fer-se passar per altres usuaris a través de l\'API.',
      'Table' => 'Taula',
      'Ignore Setup Issue' => 'Ignora la Incidència de Configuració',
      'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.
    You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => 'Aquesta opció us permet habilitar DarkConsole en cada pàgina, fins i tot per a usuaris que han tancat la sessió. Això només és realment útil si necessiteu depurar alguna cosa en una pàgina de sortida. No hauríeu d\'activar aquesta opció en la producció.
    Heu d\'activar DarkConsole establint «%s» abans que aquesta opció tingui cap efecte.',
      'Repository %s has unreplicated changes (for %s).' => 'El repositori %s té canvis no repetits (per %s).',
      'Phabricator now automatically discovers available storage engines at runtime.' => 'Phabricator ara descobreix automàticament els motors d\'emmagatzematge disponibles en temps d\'execució.',
      'The controller or workflow which handled the request.' => 'El controlador o el flux de treball que ha manegat la sol·licitud.',
      'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".' => 'L\'opció «%s» és del tipus «%s», però el valor a l\'índex «%s» de la llista no és «cert».',
      'Applications application' => 'Aplicació d\'aplicacions',
      'The namespace that Phabricator databases should use.' => 'L\'espai de noms que haurien d\'utilitzar les bases de dades de Phabricator.',
      '%s created this configuration entry.' => '%s ha creat aquesta entrada de configuració.',
      'You have enabled pygments and the %s script is available, but does not seem to work.' => 'Heu habilitat els pigments i el guió de %s està disponible, però sembla que no funciona.',
      'This column is missing a type specification.' => 'A aquesta columna li manca una especificació de tipus.',
      'Configure the Phabricator UI, including colors.' => 'Configura la interfície d\'usuari de Phabricator, inclosos els colors.',
      'Column Has No Specification' => 'La Columna No Té Especificacions',
      'Delete configuration in the database instead of in local configuration.' => 'Suprimiu la configuració de la base de dades en lloc de la configuració local.',
      'No Email Preferences Link' => 'No Hi Ha Cap Enllaç De Preferències De Correu Electrònic',
      'Marked activity "%s" as completed.' => 'Activitat «%s» marcada com a completada.',
      'Configure Phabricator to run on a cluster of hosts.' => 'Configureu el Phabricator per executar-lo en un clúster d\'amfitrions.',
      'Repository %s has unreplicated changes.' => 'El repositori %s té canvis no repetits.',
      'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make Phabricator redirect HTTP requests to HTTPS.
    Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.
    IMPORTANT: Phabricator determines if a request is HTTPS or not by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run Phabricator as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.
    If you configure Phabricator in cluster mode, note that this setting is ignored by intracluster requests.' => 'Si el servidor web respon tant a les peticions HTTP com HTTPS però voleu que els usuaris es connectin només amb HTTPS, podeu establir-ho a `cert` per a fer que el Phabricator redirigi les peticions HTTP a HTTPS. 
    Normalment només cal configurar el servidor perquè no accepti el trànsit HTTP, però aquesta configuració pot ser útil si originalment heu utilitzat HTTP i ara heu canviat a HTTPS però no voleu trencar els enllaços antics, o si el vostre servidor web s\'asseu darrere d\'un gestor de càrrega que acaba les connexions HTTPS i no podeu configurar raonablement un comportament més granular allà. 
    IMPORTANT: Phabricator determina si una sol·licitud és HTTPS o no examinant la variable PHP `%s`. Si executeu Apache/mod_php això probablement s\'establirà correctament per a vosaltres automàticament, però si executeu Phabricator com a CGI/FCGI (per exemple, a través de nginx o lighttpd), heu de configurar el vostre servidor web perquè passi el valor correctament basat en el tipus de connexió. 
    Si configureu el Phabricator en mode clúster, tingueu en compte que aquest paràmetre és ignorat per sol·licituds intracluster.',
      'This version of Mercurial returns a bad exit code after a successful pull.' => 'Aquesta versió de Mercurial retorna un codi de sortida incorrecte després d\'una tracció exitosa.',
      'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %d.' => 'El binari \'%s\' d\'aquest sistema té un comportament inesperat: s\'esperava que sortís sense un codi d\'error quan es passaven fitxers idèntics, però sortia amb el codi %s.',
      'No active repositories have outstanding errors.' => 'Cap repositori actiu té errors pendents.',
      'Usage' => 'Ús',
      'Rebuild Repository Identities' => 'Reconstrueix les identitats del repositori',
      'Move port information from `%s` to `%s` in your config.' => 'Moveu la informació del port de `%s` a `%s` a la teva configuració.',
      'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.' => 'Aquesta opció no es pot editar des de la interfície web. Utilitzeu %s per ajustar les polítiques de recollida d\'escombraries.',
      'Better Table Engine Available' => 'Millor Motor de Taula Disponible',
      'Set a local configuration value.' => 'Estableix un valor de configuració local.',
      'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.' => 'No s\'ha configurat un gran emmagatzematge de fitxers, que limitarà la mida màxima de les càrregues de fitxers.  Consulteu %s per obtenir instruccions sobre com configurar les càrregues i l\'emmagatzematge.',
      '%s deleted %s (again?).' => '%s ha suprimit %s (un altre cop?).',
      'Access log format.' => 'Format de registre d\'accés.',
      'Phabricator sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.
    Phabricator sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.
    Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.
    (This problem can be caused by a missing "B" in your RewriteRule.)' => 'Phabricator es va enviar una sol·licitud de prova amb una ruta inusual, per provar si el vostre servidor web està reescrivint les rutes correctament. La ruta no s\'ha transmès correctament.
    Phabricator va enviar una sol·licitud a la ruta "%s", i esperava que el servidor web decodifiqués i reescrivís aquesta ruta de manera que rebés una petició de "%s". No obstant això, va rebre una petició de "%s". 
    Verifica que les regles de reescriptura estan correctament configurades, seguint les instruccions de la documentació. Si la codificació de la ruta no funciona correctament no podreu accedir als fitxers amb noms inusuals als repositoris, entre altres qüestions. 
    (Aquest problema pot ser causat per una "B" que manca en el vostre RewriteRule.)',
      'Access log location.' => 'Accedeix a la ubicació del registre.',
      'Phabricator occasionally shells out to other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running Phabricator (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.
    Note that you can also put binaries in `%s` (for example, by symlinking them).
    The current value of PATH after configuration is applied is:
      lang=text
      %s' => 'De vegades, Phabricator llança altres fitxers binaris al servidor. Un exemple és l\'ordre "%s", que s\'utilitza per ressaltar el codi escrit en altres idiomes que no siguin PHP. Per defecte, se suposa que aquests binaris es troben en els %s de l\'usuari que executa Phabricator (normalment "apache", "httpd" o "cap"). Podeu afegir directoris addicionals aquí a la variable d\'entorn %s, en cas que aquests fitxers binaris es trobin a ubicacions no estàndard.
    Tingueu en compte que també podeu posar binaris a "%s" (per exemple, enllaçant-los simbòlicament).
    El valor actual de "PATH" després d\'aplicar la configuració és:
       lang = text
       %s',
      'Your webserver is not handling GET parameters properly.' => 'El vostre servidor web no gestiona correctament els  paràmetres GET.',
      'Repository Errors' => 'Errors del Repositori',
      'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.' => 'L\'opció "%s" és del tipus "%s", però el valor configurat no és el nom d\'una classe coneguda.  Les seleccions vàlides són: %s.',
      'Phabricator no longer shows reply hints in mail.' => 'El Phabricator ja no mostra consells de resposta al correu.',
      'Short' => 'Breu',
      'Phabricator is not configured in cluster mode.' => 'El Phabricator no està configurat en mode clúster.',
      'Large File Storage Not Configured' => 'Emmagatzematge De Fitxers Grans No Configurat',
      'Use "bin/phd debug ..." to get a detailed daemon execution log.' => 'Utilitzeu "bin/phd debug ..." per obtenir un registre  d\'execució del dimoni detallat.',
      'Migrating file-based config to more modern config...' => 'S\'està migrant la configuració basada en fitxers a una configuració més moderna...',
      'Phabricator sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.
    This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'Phabricator es va enviar una sol·licitud de prova i esperava obtenir una resposta JSON nua. Va rebre una resposta JSON, però la resposta tenia un espai en blanc addicional al principi o al final.
    Normalment, això significa que heu editat un fitxer i heu deixat caràcters en blanc abans de l’etiqueta d’obertura de %s o després d’una etiqueta de tancament %s. Elimineu qualsevol espai en blanc principal i preferiu ometre les etiquetes de tancament.',
      'Full' => 'Ple',
      'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => 'Executa l\'script d\'actualització de l\'emmagatzematge per configurar bases de dades (el host «%s» no s\'ha inicialitzat).',
      'Unrecognized verb: %s' => 'Verb no reconegut: %s',
      'No REMOTE_ADDR is available, so Phabricator cannot determine the origin address for requests. This will prevent Phabricator from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'No hi ha disponible cap REMOTE_ADDR, de manera que Phabricator no pot determinar l\'adreça d\'origen per a sol·licituds.  Això evitarà que Phabricator realitzi importants comprovacions de seguretat.  Això vol dir que teniu un error en el vostre guió del preàmbul.  Consulteu la documentació (%s) i feu doble comprovació que l\'script està escrit correctament.',
      'Schemata Issues' => 'Problemes amb els esquemes',
      'Expected Collation' => 'Confrontació esperada',
      'Controls whether Phabricator sends one email with multiple recipients in the "To:" line, or multiple emails, each with a single recipient in the "To:" line.' => 'Controla si Phabricator envia un correu electrònic a múltiples destinataris a la línia "Per a:", o múltiples correus electrònics, cadascun amb un únic destinatari a la línia "Per a:".',
      'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.' => 'L\'opció "%s" és del tipus "%s", però el valor no és una llista: és un mapa amb claus poc naturals o escasses.',
      'Use Normal HTTP Redirects' => 'Utilitza Redireccions HTTP Normals',
      'Configuration key \'%s\' is not set in %s configuration!' => 'La clau de configuració «%s» no està configurada a la configuració de %s!',
      'Multi-Factor Optional' => 'Multi-Factor Opcional',
      'Access Denied' => 'Accés Denegat.',
      'The configuration option \'%s\' has been removed. You may delete it at your convenience.
    %s' => 'S\'ha eliminat l\'opció de configuració «%s».  Podeu suprimir-ho segons convingui. <br><br>%s',
      'Disable Pagespeed' => 'Velocitat de Pàgina Desactivada',
      'Elasticsearch index exists but needs correction.' => 'L\'índex Elasticsearch existeix però necessita correcció.',
      'Nullable' => 'Anul·lable',
      'The "%s" key is set to some value other than "-1" in your PHP configuration. This can cause PHP to raise deprecation warnings during process startup. Set this option to "-1" to prevent these warnings from appearing.' => 'La clau «%s» està establerta a un valor diferent de «-1» en la seva configuració de PHP. Això pot fer que PHP elevi avisos de deprecació durant l\'inici del procés.  Activeu aquesta opció a «-1» per evitar que apareguin aquests avisos.',
      'No "Host" Header' => 'Cap capçalera "Host"',
      'Do not install Phabricator on an instance class with burstable CPU.' => 'No instal·leu Phabricator en una classe d\'instància amb CPU de ràfega.',
      'Activity "%s" did not need to be marked as complete.' => 'L\'activitat «%s» no s\'ha de marcar com a completada.',
      'The translation implementation has changed and providers are no longer used or supported.' => 'L\'aplicació de la traducció ha canviat i els proveïdors ja no s\'utilitzen ni s\'admeten.',
      'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L\'opció «%s» és del tipus «%s», però el valor que heu proporcionat no és una llista JSON vàlida. En establir una opció de llista des de la línia d\'ordres, especifiqueu el valor JSON. És possible que hàgiu de citar el valor per al vostre intèrpret d\'ordres (per exemple: \'["a", "b", ...]\').',
      'The minimum supported version of Mercurial is 1.9, which was released in 2011.' => 'La versió mínima suportada de Mercurial és la 1.9, que va ser alliberada el 2011.',
      'Format for the SSH access log. Use %s to set the path. Available variables are:' => 'Format per al registre d\'accés SSH. Utilitzeu %s per establir la ruta. Les variables disponibles són:',
      'This table can use a better table engine.' => 'Aquesta taula pot utilitzar un motor de taula millor.',
      'PHP post_max_size Not Configured' => 'post_max_size No està Configurat en PHP',
      'Can Not Connect to MySQL' => 'No es Pot Connectar a MySQL',
      'Option "%s" is of type "%s", but the configured value is not a boolean.' => 'L\'opció "%s" és del tipus "%s", però el valor configurat no és un booleà.',
      'Disable developer mode' => 'Desactiva el mode desenvolupador',
      'Profile 0.1%% of all requests' => 'Perfil del 0,1%% de totes les sol·licituds',
      'This option has been replaced with the more granular option `%s`.' => 'Aquesta opció ha estat substituïda per l\'opció més granular `%s`.',
      'Require all users to configure multi-factor authentication.' => 'Requereix que tots els usuaris configurin l\'autenticació multifactorial.',
      'Configuration Guide: Locked and Hidden Configuration' => 'Guia de Configuració: Configuració Bloquejada i Oculta',
      'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.' => 'Aquesta opció habilita informes d\'errors verbosos (traces de piles, fumets d\'errors) i obliga el disc a llegir dels recursos estàtics a cada recàrrega.',
      'Wrote configuration key "%s" to local storage (in file "%s").' => 'S\'ha escrit la clau de configuració «%s» a l\'emmagatzematge local (en el fitxer «%s»).',
      '(%s%s) %s' => '(%s%s) %s',
      'Nonreplicating Replica' => 'Rèplica no Replicant',
      'Run these %d command(s):' => 'Executa aquesta(es) ordre(s) %s',
      'Pattern' => 'Patró',
      'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the Phabricator configuration value \'%s\' to specify one.' => 'La vostra configuració no especifica un fus horari del servidor. Podeu establir el valor de configuració de PHP \'%s\' o el valor de configuració de Phabricator \'%s\' per especificar-ne un.',
      'Unknown \'%s\' Version' => 'Versió \'%s\' desconeguda',
      'You are using an old version of MySQL (on host "%s"), and should upgrade.' => 'Esteu fent servir una versió antiga de MySQL (a l\'amfitrió \'%s\') i hauríeu d\'actualitzar-la.',
      'Feed Hooks Deprecated' => 'Hooks d\'alimentació obsolets',
      'Purge Caches' => 'Purgar les cachés',
      'WARNING: This is a prototype option and the description below is currently pure fantasy.
    Switch Phabricator to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => 'ADVERTÈNCIA: Aquesta és una opció prototip i la descripció següent és actualment pura fantasia.
    Canvieu Phabricator al mode de només lectura. En aquest mode, els usuaris no podran escriure dades noves. Normalment, el clúster es degrada a aquest mode automàticament quan detecta que no es pot accedir al mestre de base de dades, però podeu activar-lo manualment per realitzar el manteniment o la configuració de proves.',
      'Adjust %s in your PHP configuration to at least 32MB. When set to smaller value, large file uploads may not work properly.' => 'Ajusteu %s a la configuració de PHP a 32 MB com a mínim. Quan es defineix com a valor més petit, és possible que les càrregues de fitxers grans no funcionin correctament.',
      'Recaptcha private key, obtained by signing up for Recaptcha.' => 'Clau privada de Recaptcha, obtinguda mitjançant la inscripció a Recaptcha.',
      'MySQL InnoDB Engine Not Available' => 'El motor InnoDB de MySQL no està disponible',
      'Database host "%s" does not support the %s option. You will not be able to find search results for common words. You can gain access to this option by upgrading MySQL to a more recent version.
    You can ignore this warning if you plan to configure Elasticsearch later, or aren\'t concerned about searching for common words.' => 'El servidor de base de dades «%s» no admet l\'opció %s. No podreu trobar resultats de cerca de paraules comunes. Podeu accedir a aquesta opció actualitzant MySQL a una versió més recent. 
    Podeu ignorar aquest avís si voleu configurar l\'Elasticsearch més tard, o no esteu preocupats per cercar paraules comunes.',
      'HTTP Strict Transport Security (HSTS) sends a header which instructs browsers that the site should only be accessed over HTTPS, never HTTP. This defuses an attack where an adversary gains access to your network, then proxies requests through an unsecured link.
    Do not enable this option if you serve (or plan to ever serve) unsecured content over plain HTTP. It is very difficult to undo this change once users\' browsers have accepted the setting.' => 'HTTP Strict Transport Security (HSTS) envia una capçalera que indica als navegadors que només s’ha d’accedir al lloc mitjançant HTTPS, mai HTTP. Això desactiva un atac en què un adversari accedeix a la vostra xarxa i, a continuació, sol·licita un servidor intermediari mitjançant un enllaç no protegit.
    No activeu aquesta opció si publiqueu (o teniu previst publicar alguna vegada) contingut no segur mitjançant HTTP senzill. És molt difícil desfer aquest canvi un cop el navegador dels usuaris ha acceptat el paràmetre.',
      'The HTTP method.' => 'El mètode HTTP.',
      'PHP Timezone Invalid' => 'Fus horari de PHP no vàlid',
      'Branchpoint' => 'Punt d\'accés a la xarxa',
      'Integration with Recaptcha' => 'Integració amb Recaptcha',
      'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.' => 'Aquest servidor té instal·lada una versió incorrecta de \'%s\' (\'%s\'). Aquesta versió no és compatible, o conté errors importants o vulnerabilitats de seguretat que es solucionen en una versió posterior.',
      'Phabricator puts databases in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing Phabricator and using namespaces to separate multiple sandbox datasets.' => 'Phabricator posa bases de dades en un espai de noms, que per defecte és \'phabricator\'; per exemple, la base de dades diferencial es denomina per defecte \'phabricator_differential\'. Podeu canviar aquest espai de noms si voleu. Normalment, no hauríeu de fer-ho tret que estigueu desenvolupant Phabricator i que utilitzeu espais de noms per separar diversos conjunts de dades de sandbox.',
      'Ambiguous Leader' => 'Líder ambigu',
      'Config key "%s" is locked and can only be set in local configuration. To learn more, see "%s" in the documentation.' => 'La clau de configuració "%s" està bloquejada i només es pot configurar a la configuració local. Per obtenir més informació, consulteu "%s" a la documentació.',
      'This option can help debug pages which are taking a very long time (more than 30 seconds) to render.
    If a page is slow to render (but taking less than 30 seconds), the best tools to use to figure out why it is slow are usually the DarkConsole service call profiler and XHProf.
    However, if a request takes a very long time to return, some components (like Apache, nginx, or PHP itself) may abort the request before it finishes. This can prevent you from using profiling tools to understand page performance in detail.
    In these cases, you can use this option to force the page to abort after a smaller number of seconds (for example, 10), and dump a useful stack trace. This can provide useful information about why a page is hanging.
    To use this option, set it to a small number (like 10), and reload a hanging page. The page should exit after 10 seconds and give you a stack trace.
    You should turn this option off (set it to 0) when you are done with it. Leaving it on creates a small amount of overhead for all requests, even if they do not hit the time limit.' => 'Aquesta opció pot ajudar a les pàgines de depuració que estan trigant molt (més de 30 segons) a renderitzar-se. 
    Si una pàgina és lenta a renderitzar (però prenent menys de 30 segons), les millors eines per a entendre per què és lenta són normalment el perfil de trucada de servei DarkConsole i XHProf. 
    No obstant això, si una sol·licitud triga molt de temps a tornar, alguns components (com Apache, nginx o PHP mateix) poden interrompre la sol·licitud abans que acabi. Això pot evitar que utilitzeu eines de perfilat per entendre el rendiment de la pàgina en detall. 
    En aquests casos, podeu utilitzar aquesta opció per forçar que la pàgina interrompi després d\'un nombre més petit de segons (per exemple, 10), i bolcar una traça de pila útil. Això pot proporcionar informació útil sobre per què una pàgina que s\'ha quedat penjada. 
    Per utilitzar aquesta opció, establiu-la a un nombre petit (com 10), i torneu a carregar una pàgina que s\'ha quedat penjada. La pàgina hauria de sortir després de 10 segons i donar-vos una traça de pila. 
    Hauríeu de desactivar aquesta opció (definir-la a 0) quan hàgiu acabat amb ella. Deixar-ho crea una petita quantitat de sobrecàrrega per a totes les sol·licituds, fins i tot si no aconsegueixen el límit de temps.',
      'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.' => 'Aquesta opció s\'ha reanomenat a "%s" per emfatitzar la naturalesa inacabada de moltes aplicacions de prototips. Els vostres paràmetres actuals han migrat.',
      'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.' => 'Ara els mestres de tasques utilitzen una reserva d’escala automàtica. Podeu configurar la mida de la reserva amb `%s`.',
      'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.' => 'Aquesta configuració està bloquejada i no es pot editar des de la interfície web. Feu servir %s en %s per editar-lo.',
      'Recaptcha public key, obtained by signing up for Recaptcha.' => 'Clau pública de Recaptcha, obtinguda en registrar-se a Recaptcha.',
      'Specify a configuration key to delete.' => 'Especifiqueu una clau de configuració per suprimir.',
      'The MySQL "local_infile" option is enabled. This option is unsafe.' => 'L\'opció MySQL \'local_infile\' està habilitada. Aquesta opció no és segura.',
      '(Not Supported)' => '(No admès)',
      'Don\'t embed Commons videos' => 'No incrustis vídeos de Commons',
      'You have \'%s\' enabled in your PHP configuration, but Phabricator will not run in safe mode. Safe mode has been deprecated in PHP 5.3 and removed in PHP 5.4.
    Disable safe mode to continue.' => 'Teniu activat \'%s\' a la configuració de PHP, però Phabricator no s\'executarà en mode segur. El mode segur ha quedat obsolet a PHP 5.3 i s’ha eliminat a PHP 5.4.',
      'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'' => 'Tracteu tots els fitxers \'*.x.bak\' com a \'.x\'. NOTA: Fem el mapa al grup de captura 1 especificant el mapatge com a "1"',
      'Database Schemata' => 'Esquemes de la base de dades',
      'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L\'opció "%s" és del tipus "%s", i s\'ha d\'especificar a la línia d\'ordres com una llista de valors JSON. És possible que hàgiu de citar el valor per al vostre intèrpret d\'ordres (per exemple: \'["a", "b", ...]\').',
      'Old MySQL Version' => 'Versió antiga de MySQL',
      'If you have multiple Phabricator environments (like a development/staging environment for working on testing Phabricator, and a production environment for deploying it), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'Si teniu múltiples entorns Phabricator (com un entorn de desenvolupament/preparació per a treballar en la prova de Phabricator, i un entorn de producció per al seu desplegament), establiu l\'entorn URI de producció aquí perquè els correus electrònics i altres URI duradors sempre es generin amb enllaços que apunten a l\'entorn de producció. Si no està definit, per defecte és `%s`. La majoria de les instal·lacions no necessiten establir aquesta opció.',
      'This configuration is no longer relevant because daemons restart automatically on configuration changes.' => 'Aquesta configuració ja no és rellevant perquè els dimonis es reinicien automàticament en fer canvis de configuració.',
      'The Differential revision list view age UI elements have been removed to simplify the interface.' => 'S\'han eliminat els elements de la interfície d\'usuari de l\'edat de la vista de llista de revisió diferencial per simplificar la interfície.',
      'The request body that the server received had already been decompressed. This strongly suggests your webserver is configured to decompress requests inline, before they reach PHP.' => 'El cos de sol·licitud que va rebre el servidor ja s\'ha descomprimit. Això suggereix que el vostre servidor web està configurat per descomprimir les sol·licituds en línia, abans que arribin a PHP.',
      'This schema has the wrong nullable setting.' => 'Aquest esquema té paràmetres anul·lables incorrectes.',
      'Unsupported/Insecure "%s" Version' => 'Versió "%s" no compatible / insegura',
      'When set to `true`, the authentication provider configuration for this instance can not be modified without first running `bin/auth unlock` from the command line. This is to reduce the security impact of a compromised administrator account. 
    After running `bin/auth unlock` and making your changes to the authentication provider config, you should run `bin/auth lock`.' => 'Quan s\'estableix a "true", la configuració del proveïdor d\'autenticació per a aquesta instància no es pot modificar sense abans executar `bin/auth unlock\' des de la línia d\'ordres. Es tracta de reduir l\'impacte sobre la seguretat d\'un compte d\'administrador compromès.
    Després d\'executar `bin/auth unlock` i fer els canvis a la configuració del proveïdor d\'autenticació, haureu d\'executar `bin/auth lock`.',
      'Unknown schema status "%s"!' => 'Estat de l\'esquema desconegut "%s"!',
      'MySQL May Run Slowly' => 'MySQL pot funcionar lentament',
      'Phabricator now manages typeahead strategies automatically.' => 'Phabricator gestiona ara automàticament les estratègies d\'escriptura anticipada.',
      'Too many arguments: expected one key.' => 'Hi ha massa arguments: s’esperava una clau.',
      'No "Host" header present in request.' => 'No hi ha cap capçalera \'Amfitrió\' present a la sol·licitud.',
      'Footer configuration is not valid: value must be a list of items.' => 'La configuració del peu no és vàlida: el valor ha de ser una llista d\'elements.',
      'Don\'t embed YouTube videos' => 'No incrusteu vídeos de YouTube',
      'Disable PHP %s' => 'Desactiva PHP %s',
      'Configure master encryption keys.' => 'Configura claus d\'encriptació mestra.',
      'Mailers Not Configured' => 'Plataformes de correu no configurades',
      'Garbage Collectors' => 'Col·lectors d\'escombraries',
      '%s edited this configuration entry.' => '%s ha modificat aquesta entrada de configuració.',
      'Phabricator sent itself a test request with the "X-Phabricator-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:
    %s
    Something is misconfigured or otherwise mangling responses.' => 'Phabricator es va enviar una sol·licitud de prova amb la capçalera "X-Phabricator-SelfCheck" i s\'esperava que es retornés una resposta JSON vàlida. En canvi, la resposta comença: 
    %s 
    Alguna cosa està mal configurada o bé responen malament.',
      'Enable Phabricator\'s debugging console.' => 'Activeu la consola de depuració de Phabricator.',
      'The PHP "zip" extension is not installed. This extension is required by certain data export operations, including exporting data to Excel.
    To clear this setup issue, install the extension and restart your webserver.
    You may safely ignore this issue if you do not plan to export data in Zip archives or Excel spreadsheets, or intend to install the extension later.' => 'L\'extensió \'zip\' de PHP no està instal·lada. Aquesta extensió és necessària per a determinades operacions d\'exportació de dades, inclosa l\'exportació de dades a Excel.
    Per salvar aquest problema de configuració, instal·leu l\'extensió i reinicieu el servidor web.
    Podeu ignorar aquest problema amb seguretat si no teniu previst exportar dades a arxius Zip o fulls de càlcul d\'Excel o si voleu instal·lar l\'extensió més endavant.',
      'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.
    This may mean the base URI is configured incorrectly. You must serve Phabricator from a base URI with a dot (like "https://phabricator.mycompany.com"), not a bare domain (like "https://phabricator/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.
    This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.
    Requests must include a valid "Host" header.' => 'Aquesta sol·licitud incloïa una capçalera "Amfitrió" no vàlida, amb el valor "%s". Les capçaleres d\'amfitrió han de contenir un punt (\'.\'), Com ara \'example.com\'. Això és necessari perquè alguns navegadors puguin configurar galetes.
    Això pot significar que l\'URI de base no s\'ha configurat correctament. Cal publicar Phabricator des d\'un URI base amb un punt (com ara "https://phabricator.mycompany.com"), no un domini (com ara "https://phabricator.mycompany.com"). Si intenteu utilitzar un domini senzill, canvieu la configuració per a utilitzar un domini complet amb un punt.
    Això també pot significar que el vostre servidor web (o algun altre dispositiu de xarxa, com un equilibrador de càrrega) està manipulant la capçalera "Amfitrió" o que utilitzeu una eina o una biblioteca per emetre una sol·licitud manualment i establint una capçalera "Amfitrió" incorrecta.
    Les sol·licituds han d\'incloure una capçalera "amfitrió" vàlida.',
      'Setup MySQL Schema' => 'Configureu l’esquema MySQL',
      'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => 'Aquesta opció s\'ha eliminat, podeu utilitzar Quadre de comandament per a personalitzar la pàgina d\'inici. Vegeu T11533 per a més detalls.',
      'Data Cache' => 'Caché de dades',
      'Configure the access logs, which log HTTP/SSH requests.' => 'Configureu els registres d\'accés, que registren les sol·licituds HTTP/SSH.',
      'The PID of the server process.' => 'El PID del procés del servidor.',
      'Blacklist subnets to prevent user-initiated outbound requests.' => 'Llista negra de subxarxes per evitar sol·licituds de sortida iniciades per l\'usuari.',
      'No Outbound Requests' => 'No hi ha sol·licituds de sortida',
      'Primary install URI, for multi-environment installs.' => 'L\'URI d\'instal·lació principal, per a les instal·lacions multientorn.',
      'Your webserver is not handling compressed request bodies properly.' => 'El seu servidor web no està manegant correctament els cossos de sol·licitud comprimits.',
      'Whitelists editor protocols for "Open in Editor".' => 'Protocols d\'editor de la llista blanca per a \'Obrir a l\'editor\'.',
      'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.' => 'Els paràmetres de «Re: Prefix» i «Diversos temes» ara estan configurats a la configuració global.',
      'This configuration is hidden and can not be edited or viewed from the web interface.' => 'Aquesta configuració està oculta i no es pot editar ni visualitzar des de la interfície web.',
      'Cluster Configuration Out of Sync' => 'La configuració del clúster no està sincronitzada',
      'Footer item with index "%s" is invalid: %s' => 'L\'element de peu amb l\'índex "%s" no és vàlid: %s',
      'Phabricator Version Information' => 'Informació de la versió de Phabricator',
      'Access key for Amazon S3.' => 'Clau d\'accés per a Amazon S3.',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.' => 'El component PATH "%s" (que es resol com a camí absolut "%s") no es pot utilitzar perquè "%s" no es pot llegir.',
      'Maniphest fields are now loaded automatically. You can configure them with `%s`.' => 'Els camps Maniphest ara es carreguen automàticament. Podeu configurar-los amb `%s`.',
      'This key is expected to exist, but does not.' => 'S\'espera que existeixi aquesta clau, però no existeix.',
      'This schema is expected to exist, but does not.' => 'S\'espera que aquest esquema existeixi, però no existeix.',
      'Do Not Use Pygments' => 'No utilitzeu Pygments',
      'This key has the wrong uniqueness setting.' => 'Aquesta clau té un paràmetre de singularitat incorrecte.',
      'Additional configuration options to lock.' => 'Opcions de configuració addicionals per bloquejar.',
      'Override what language files (based on filename) highlight as.' => 'Substitueix com es ressalten els fitxers d\'idioma (basats en el nom del fitxer).',
      'MySQL port to use when connecting to the database.' => 'Port MySQL per utilitzar en connectar-se a la base de dades.',
      'Trying to add duplicate key "%s"!' => 'S\'està intentant afegir la clau duplicada \'%s\'.',
      'Repository %s has an ambiguous leader.' => 'El repositori %s té un líder ambigu.',
      'Your authentication provider configuration is unlocked. Once you finish setting up or modifying authentication, you should lock the configuration to prevent unauthorized changes.
    Leaving your authentication provider configuration unlocked increases the damage that a compromised administrator account can do to your install. For example, an attacker who compromises an administrator account can change authentication providers to point at a server they control and attempt to intercept usernames and passwords.
    To prevent this attack, you should configure authentication, and then lock the configuration by running "bin/auth lock" from the command line. This will prevent changing the authentication config without first running "bin/auth unlock".' => 'La configuració del proveïdor d’autenticació està desbloquejada. Un cop hàgiu acabat de configurar o modificar l\'autenticació, heu de bloquejar la configuració per evitar canvis no autoritzats.
    Deixar la configuració del proveïdor d’autenticació desbloquejada augmenta el dany que pot causar a la vostra instal·lació un compte d’administrador compromès. Per exemple, un atacant que compromet un compte d\'administrador pot canviar els proveïdors d\'autenticació per apuntar cap a un servidor que controlen i intentar interceptar noms d\'usuari i contrasenyes.
    Per evitar aquest atac, heu de configurar l\'autenticació i, a continuació, bloquejar la configuració executant "bin/auth lock" des de la línia d\'ordres. Això evitarà canviar la configuració d\'autenticació sense abans executar "bin/auth lock".',
      'Read option value from stdin.' => 'Llegiu el valor de l\'opció de stdin.',
      'Phabricator sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.
    This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => 'Phabricator es va enviar una sol·licitud amb "Accept-Encoding: gzip", però va rebre una resposta sense comprimir.
    Això pot indicar que el vostre servidor web no està configurat per comprimir respostes. Si és així, heu d’habilitar la compressió. La compressió pot millorar dràsticament el rendiment, especialment per a clients amb menys amplada de banda.',
      'Cache' => 'Caché',
      'Embed YouTube videos' => 'Incrusteu vídeos de YouTube',
      'You haven\'t configured mailers yet, so Phabricator won\'t be able to send outbound mail or receive inbound mail. See the configuration setting cluster.mailers for details.' => 'Encara no heu configurat la plataforma de correu, de manera que Phabricator no podrà enviar missatges de sortida ni rebre missatges de correu entrant. Consulteu els paràmetres de configuració de cluster.mailers per obtenir més informació.',
      'Clear Cache' => 'Netejar la caché',
      'MySQL Native Driver Not Available' => 'El controlador natiu MySQL no està disponible',
      'Enable captchas with Recaptcha.' => 'Activeu captchas amb Recaptcha.',
      'This suggests your webserver is configured to decompress or mangle compressed requests.' => 'Això suggereix que el seu servidor web està configurat per descomprimir o destrossar les sol·licituds comprimides.',
      'The environmental variable %s is empty. Phabricator needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in Phabricator configuration.' => 'La variable d\'entorn %s està buida. Phabricator ha d\'executar algunes ordres del sistema, com ara "%s", "%s", "%s" i "%s". Per executar aquestes ordres, els binaris han d\'estar disponibles al %s del servidor web. Podeu establir camins addicionals a la configuració de Phabricator.',
      'Set the URI where Phabricator is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => 'Definiu l\'URI on s\'ha instal·lat Phabricator. Establir-ho millora la seguretat evitant que es configurin galetes en altres dominis i permet als dimonis enviar correus electrònics amb enllaços que tinguin el domini correcte.',
      'Define a Phabricator cluster by providing a whitelist of host addresses that are part of the cluster.
    Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.
    Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.
    When cluster addresses are defined, Phabricator hosts will also reject requests to interfaces which are not whitelisted.' => 'Definiu un clúster de Phabricator proporcionant una llista blanca d’adreces d’amfitrió que formen part del clúster.
    Els amfitrions d’aquesta llista blanca tenen poders especials. Aquests amfitrions tenen permís per doblegar les regles de seguretat i, si no configureu aquesta llista, la vostra instal·lació serà menys segura. Per obtenir més informació, vegeu **[[ %s | %s ]]**.
    Definiu una llista de blocs CIDR que incloguin a la llista blanca tots els amfitrions del clúster i que no tinguin cap amfitrió addicional. Vegeu els exemples següents per obtenir més informació.
    Quan es defineixen les adreces de clúster, els amfitrions de Phabricator també rebutjaran les sol·licituds d’interfícies que no estan incloses a la llista blanca.',
      'This server has a known bad version of "%s".' => 'Aquest servidor té una versió incorrecta coneguda de "%s".',
      'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.' => 'Sense un fus horari configurat, PHP emetrà avisos quan es treballi amb dates i és possible que les dates i les hores no es mostrin correctament.',
      'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.' => 'L\'opció \'%s\' és del tipus \'%s\' i s\'ha d\'establir en una llista d\'expressions regulars vàlides, però \'%s\' no és una expressió regular vàlida.',
      'This schema can use a better character set.' => 'Aquest esquema pot utilitzar un millor conjunt de caràcters.',
      'Configuration value "%s" is locked, but has a value in the database.' => 'El valor de configuració «%s» està bloquejat, però té un valor a la base de dades.',
      'Determines whether or not YouTube videos get embedded.' => 'Determina si els vídeos de YouTube s’incrusten o no.',
      'Allows you to add a footer with links in it to most pages. You might want to use these links to point at legal information or an about page.
    Specify a list of dictionaries. Each dictionary describes a footer item. These keys are supported:
      - `name` The name of the item.
      - `href` Optionally, the link target of the item. You can     omit this if you just want a piece of text, like a copyright     notice.' => 'Permet afegir un peu amb enllaços a la majoria de pàgines. És possible que vulgueu utilitzar aquests enllaços per apuntar a la informació legal o sobre una pàgina. 
    Especifiqueu una llista de diccionaris. Cada diccionari descriu un element de peu. Aquestes claus estan admeses: 
      - `name`  El nom de l\'element. 
      - `href` Opcionalment, l\'objectiu de l\'enllaç de l\'element. Ho podeu ometre si només voleu un tros de text, com una nota de copyright.',
      'The known issues with this old version are:' => 'Les incidències conegudes d\'aquesta versió antiga són:',
      'The notification server no longer requires root permissions. Start the server as the user you want it to run under.' => 'El servidor de notificacions ja no requereix permisos d\'arrel. Inicieu el servidor com l\'usuari al qual voleu que s\'executi.',
      'T6185 "Shellshock" Bash Vulnerability' => 'Vulnerabilitat del bash T6185 "Shellshock"',
      'Retention policies for garbage collection.' => 'Polítiques de retenció per a la recollida d’escombraries.',
      'MySQL (on host "%s") is configured with a very small innodb_buffer_pool_size, which may impact performance.' => 'MySQL (a l\'amfitrió \'%s\') està configurat amb un innodb_buffer_pool_size molt petit, que pot afectar el rendiment.',
      'The following caches will be cleared:' => 'Es netejaran les següents cachés:',
      'Detected %s warning(s) with the schemata.' => 'S\'han detectat %s avisos amb els esquemes.',
      'Deprecated mysql.host Format' => 'Format obsolet de mysql.host',
      'This key is on the wrong columns.' => 'Aquesta clau es troba a les columnes equivocades.',
      'Wrong Nullable Setting' => 'Paràmetres anul·lables erronis',
      'Secret key for Amazon S3.' => 'Clau secreta per a Amazon S3.',
      'You are using an old version of MySQL (on host "%s") which has poor unicode support (it does not support the "utf8mb4" collation set). You will encounter limitations when working with some unicode data.
    We strongly recommend you upgrade to MySQL 5.5 or newer.' => 'Esteu fent servir una versió antiga de MySQL (a l’amfitrió \'%s\') que té poca compatibilitat unicode (no admet el conjunt de confrontació \'utf8mb4\'). Trobareu limitacions quan treballeu amb algunes dades Unicode.
    Us recomanem que actualitzeu a MySQL 5.5 o posterior.',
      'Trying to add duplicate column "%s"!' => 'Intentant afegir una columna duplicada "%s"!',
      'The Multimeter application collects performance samples. You can use this data to help you understand what Phabricator is spending time and resources doing, and to identify problematic access patterns.
    This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.
    For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'L\'aplicació Multimeter recull mostrejos de rendiment. Podeu utilitzar aquestes dades per ajudar-vos a entendre què fa el Phabricator, temps i recursos, i per identificar patrons d\'accés problemàtics. 
    Aquesta opció controla la freqüència amb què s\'activa el mostreig. Establiu-ho a un enter positiu N per a mostrejar cada 1 / N pàgines. 
    Per a la majoria d\'instal·lacions, el valor per defecte (1 mostreig per 1000 pàgines) hauria de recollir prou dades per ser útils sense requerir gaire emmagatzematge o un rendiment d\'impacte significatiu. Si estàs investigant problemes de rendiment, pots ajustar la taxa per tal de recollir més dades.',
      'Required PHP extensions are not installed.' => 'Les extensions PHP necessàries no estan instal·lades.',
      'UNHEALTHY: This database has failed recent health checks. Traffic will not be sent to it until it recovers.' => 'POC SÀ: Aquesta base de dades ha fallat en els controls de salut recents. No s’hi enviarà trànsit fins que es recuperi.',
      'Request input, in bytes.' => 'Entrada sol·licitada, en bytes.',
      'Application Settings' => 'Configuració de l\'aplicació',
      'After editing the PHP configuration, <strong>restart Phabricator for the changes to take effect</strong>. For help with restarting Phabricator, see %s in the documentation.' => 'Després d\'editar la configuració de PHP, reinicieu Phabricator de manera segura perquè els canvis tinguin efecte</strong>. Per obtenir ajuda amb el reinici de Phabricator, consulteu %s a la documentació.',
      'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.' => 'Podeu establir un límit per a la mida màxima de bytes del correu de sortida. Els missatges que superin aquest límit es truncaran abans d’enviar-se. Això pot ser útil si el vostre MTA rebutja el correu que supera algun límit (això és raonablement habitual). Especifiqueu un valor en bytes.',
      'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => 'Diverses subclasses de %s tenen la mateixa clau (\'%s\'): %s, %s.',
      'Trying to add duplicate table "%s"!' => 'Intentant afegir una taula duplicada "%s"!',
      'You can find more information about PHP configuration values in the %s.' => 'Podeu trobar més informació sobre els valors de configuració de PHP a %s.',
      'Cookies set for x.com are also sent for y.x.com. Assuming Phabricator instances are running on both domains, this will create a collision preventing you from logging in.' => 'Les galetes configurades per a x.com també s’envien per a y.x.com. Suposant que les instàncies de Phabricator s’executin a tots dos dominis, això crearà una col·lisió que us impedirà iniciar la sessió.',
      'Public email is now accepted if the associated address has a default author, and rejected otherwise.' => 'Ara s\'accepta el correu electrònic públic si l\'adreça associada té un autor per defecte i es rebutja el contrari.',
      'Whitespace rendering is now handled automatically.' => 'Ara la renderització de l\'espai en blanc es manega automàticament.',
      'Phabricator appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. Phabricator regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'Sembla que el Phabricator està instal·lat en una instància EC2 molt petita (de classe «%s») amb CPU de ràfega. Això és molt desaconsellable. Phabricator necessita regularment CPU, i aquests casos són sovint ofegats fins a la mort per l\'estirament de la CPU. Utilitzeu una instància amb una CPU normal.',
      'Phabricator sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".
    Your webserver is configured incorrectly and large parts of Phabricator will not work until this issue is corrected.
    (This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'Phabricator es va enviar una sol·licitud de prova amb un paràmetre HTTP GET, però el paràmetre no es va transmetre. S\'ha enviat \'%s\' amb el valor \'%s\', s\'ha obtingut \'%s\' amb el valor \'%s\'.
    El vostre servidor web no està configurat correctament i grans parts de Phabricator no funcionaran fins que no es corregeixi aquest problema.
    (Aquest problema pot ser causat per la falta d\'un \'QSA\' a la vostra RewriteRule.)',
      'SSH keys are now actually useful, so they are always enabled.' => 'Les claus SSH ara són realment útils, de manera que sempre estan habilitades.',
      'Request output, in bytes.' => 'Sortida sol·licitada, en bytes.',
      'Configure integration with AWS (EC2, SES, S3, etc).' => 'Configureu la integració amb AWS (EC2, SES, S3, etc.).',
      'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => 'L\'opció de configuració «%s» no és vàlida. L\'URI ha de contenir un punt (\'.\'), com \'%s\', no només un nom nu com \'%s\'. Alguns navegadors web no establiran galetes en dominis sense TLD.',
      'Cache namespace.' => 'Espai de noms de la caché',
      'Unsafe PHP "Local Infile" Configuration' => 'Configuració "Local Infile" PHP no segura',
      'Custom remarkup rules are now added by subclassing %s or %s.' => 'Les regles de ressaltat personalitzades s\'afegeixen ara a la subclasse %s o %s.',
      'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in the Phabricator configuration.' => 'No s\'ha pogut trobar el binari "%s". Enllaceu-lo a "%s" o configureu la variable d\'entorn de %s del servidor web per incloure el directori on resideix o afegiu-lo a "%s" a la configuració de Phabricator.',
      'If you enable this, linked Commons videos will be embedded inline.' => 'Si ho activeu, els vídeos de Commons enllaçats s’incrustaràn en línia.',
      'Allow Phabricator to use a single mailbox for all replies.' => 'Permet que Phabricator utilitzi una sola bústia de correu per a totes les respostes.',
      'Garbage collectors are now configured with "%s".' => 'Els col·lectors d\'escombraries ara estan configurats amb "%s".',
      'Trying to add duplicate database "%s"!' => 'Intentant afegir una base de dades duplicada "%s"!',
      'This column has the wrong autoincrement setting.' => 'Aquesta columna té un paràmetre d’increment automàtic incorrecte.',
      'Allows you to add footer links on most pages.' => 'Permet afegir enllaços de peu a la majoria de pàgines.',
      'Maniphest fields are now defined in `%s`. Existing definitions have been migrated.' => 'Els camps Maniphest ara es defineixen a \'%s\'. S\'han migrat les definicions existents.',
      'Elasticsearch is now configured with "%s".' => 'Elasticsearch ara està configurat amb \'%s\'.',
      'Configuring Outbound Email' => 'Configuració del correu electrònic de sortida',
      'Partial \'%s\' Support' => 'Compatibilitat \'%s\' parcial',
      'Normally, Phabricator profiles pages only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.
    Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).
    Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.
    NOTE: You must install XHProf for profiling to work.' => 'Normalment, les pàgines de perfils de Phabricator només quan se sol·liciten explícitament a través de DarkConsole. No obstant això, pot ser útil perfilar algunes pàgines automàticament. 
    Activeu aquesta opció a un enter positiu N al perfil 1 / N pàgines automàticament. Per exemple, establir-lo a 1 perfilarà cada pàgina, mentre que establir-lo a 1000 perfilarà 1 pàgina per 1000 sol·licituds (és a dir, 0,1%% de sol·licituds). 
    Atès que l\'anàlisi de perfils és lent i genera moltes dades, hauríeu d\'establir-ho a 0 en producció (per desactivar-lo) o a un gran nombre (per recollir algun mostreig, si esteu interessat a tenir algunes dades a mirar al final). En desenvolupament, pot ser útil establir-lo a 1 per tal de depurar problemes de rendiment. 
    NOTA: Heu d\'instal·lar XHProf per a que funcioni l\'anàlisi de perfils.',
      'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.' => 'MySQL (a l\'amfitrió «%s») està utilitzant un fitxer de paraules buides predeterminat, el qual evitarà la cerca de moltes paraules comunes.',
      'Two setup checks raised an issue with key \'%s\'!' => 'Dues comprovacions de configuració han generat un problema amb la clau \'%s\'!',
      'You likely enabled cluster.search without creating the index. Use the following command to create a new index.' => 'És probable que hàgiu activat cluster.search sense crear l’índex. Utilitzeu l\'ordre següent per crear un índex nou.',
      'Without \'%s\', Phabricator can not test for the availability of other binaries.' => 'Sense \'%s\', Phabricator no pot provar la disponibilitat d\'altres binaris.',
      'This option controls whether users can edit account email addresses and profile real names.
    If you set up Phabricator to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => 'Aquesta opció controla si els usuaris poden editar adreces de correu electrònic del compte i perfilar noms reals. 
    Si configureu Phabricator per sincronitzar automàticament la informació del compte d\'un altre sistema autoritzat, podeu evitar que els usuaris facin aquestes edicions per assegurar que la informació continuï sent consistent en tots dos sistemes.',
      'The directory for local repositories (%s) does not exist, or is not readable by the webserver. Phabricator uses this directory to store information about repositories. If this directory does not exist, create it:
    %s
    If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => 'El directori per a repositoris locals (%s) no existeix, o no és llegible pel servidor web.  Phabricator utilitza aquest directori per emmagatzemar informació sobre els repositoris.  Si aquest directori no existeix, crea\'l: <br><br>%s <br>Si aquest directori existeix, feu-lo llegible al servidor web.  També podeu editar la configuració següent per utilitzar un altre directori.',
      'Customize the logo image and text which appears in the main site header:
      - **Logo Image**: Upload a new 80 x 80px image to replace the Phabricator logo in the site header.
      - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //Phabricator//.
    ' => 'Personalitzeu la imatge i el text del logotip que apareixen a la capçalera del lloc principal:
      - **Imatge de Logotip**: Pengeu una nova imatge de 80 x 80 px per substituir el logotip de Phabricator a la capçalera del lloc.
      - ***Wordmark**: Trieu un text nou per mostrar al costat del logotip. Per defecte, la capçalera mostra //Phabricator//.',
      'The Phabricator daemons are not running, so Phabricator will not be able to perform background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds).
    Use %s to start daemons. See %s for more information.' => 'Els dimonis de Phabricator no s’executen, de manera que Phabricator no podrà realitzar processos en segon pla (inclosos l’enviament de correu electrònic, la reconstrucció d’índexs de cerca, la importació de confirmacions, la neteja de dades antigues i l’execució de construccions).
    Utilitzeu %s per iniciar dimonis. Consulteu %s per obtenir més informació.',
      'The minimum supported version of Subversion is 1.5, which was released in 2008.' => 'La versió suportada mínima de Subversió és la 1.5, que va ser alliberada el 2008.',
      'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.' => 'El vostre límit de memòria PHP està configurat de manera que us pugui impedir carregar fitxers grans o gestionar sol·licituds grans.',
      'Phabricator now automatically selects the best available MySQL implementation.' => 'Ara Phabricator selecciona automàticament la millor implementació MySQL disponible.',
      'Force users to connect via HTTPS instead of HTTP.' => 'Força els usuaris a connectar-se mitjançant HTTPS en lloc d’HTTP.',
      'Install the MySQLi extension to improve database behavior.' => 'Instal·leu l\'extensió MySQLi per millorar el comportament de la base de dades.',
      'Large Files' => 'Arxius grans',
      'Compressed Requests Not Received Properly' => 'Les sol·licituds comprimides no s\'han rebut correctament',
      'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)' => 'El valor de l\'opció "%s" (del tipus "%s") s\'ha d\'especificar a JSON, però no s\'ha pogut descodificar l\'entrada. (Has oblidat citar una cadena?)',
      'To update these %d value(s), edit your PHP configuration file, located here:' => 'Per actualitzar aquests valors de %s, editeu el fitxer de configuració de PHP, que es troba aquí:',
      'Collation' => 'Confrontació',
      'The HTTP response code or process exit code.' => 'El codi de resposta HTTP o el codi de sortida del procés.',
      'Obsolete; use standard rendering events instead.' => 'Obsolet; utilitza els esdeveniments de renderització estàndard en el seu lloc.',
      'The configuration option \'%s\' is not recognized. It may be misspelled, or it might have existed in an older version of Phabricator. It has no effect, and should be corrected or deleted.' => 'No es reconeix l\'opció de configuració "%s". Pot estar mal escrita o pot haver existit en una versió anterior de Phabricator. Això no té cap efecte i s’hauria de corregir o suprimir.',
      'Determines which URI protocols are valid for links and redirects.' => 'Determina quins protocols d\'URI són vàlids per enllaços i redirigeix.',
      'Activate DarkConsole on every page.' => 'Activeu DarkConsole a cada pàgina.',
      'Enable verbose error reporting and disk reads.' => 'Habiliteu els informes d\'errors verbosos i les lectures de disc.',
      'Mail object address hash keys are now generated automatically.' => 'Les claus de hash de l\'assumpte de l\'adreça de correu electrònic ara es generen automàticament.',
      'Too many arguments: expected one key and one value.' => 'Hi ha massa arguments: s’esperava una clau i un valor.',
      'Settings History' => 'Historial de paràmetres',
      'To update these %d value(s), edit your PHP configuration file.' => 'Per actualitzar aquests valors de %s, editeu el fitxer de configuració de PHP.',
      'Enable Recaptcha' => 'Habilita Recaptcha',
      'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that Phabricator imports or manages. This option is new and experimental.' => 'Especifiqueu un usuari de sistema per executar els dimonis. Principalment, aquest usuari serà propietari de còpies de treball de qualsevol repositori que Fabricator importi o gestioni. Aquesta opció és nova i experimental.',
      'PHP Documentation' => 'Documentació de PHP',
      'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. Phabricator will not work properly until you do.' => 'Identifiqueu el component de la configuració del servidor web que està descomprimint o manipulant les sol·licituds i desactiveu-lo. Phabricator no funcionarà correctament fins que no ho feu.',
      'Phabricator now automatically discovers available search engines at runtime.' => 'Ara Phabricator descobreix automàticament els motors de cerca disponibles en temps d\'execució.',
      'Unable to determine the version number of "%s".' => 'No es pot determinar el número de versió de "%s".',
      'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless @{config:auth.email-domains} is nonempty.' => 'Si és cert, les adreces de correu electrònic s\'han de verificar (fent clic a un enllaç d\'un correu electrònic) abans que l\'usuari pugui iniciar la sessió. Per defecte, la verificació és opcional tret que @{config:auth.email-domains} estigui no buit.',
      'PHP OPcache Documentation' => 'Documentació de PHP OPcache',
      'Cluster: Databases' => 'Clúster: Bases de dades',
      'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.' => 'L\'element de peu de pàgina amb l\'índex \'%s\' no és vàlid: cada element ha de ser un diccionari que descrigui un element de peu.',
      'None of the caches on this page can be cleared.' => 'No es pot esborrar cap de les memòries cau d’aquesta pàgina.',
      'Sets the default color scheme of Phabricator.' => 'Estableix l\'esquema de colors per defecte de Phabricator.',
      'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => 'L’algorisme d’indexació de l’índex de cerca de text complet s’ha actualitzat i cal reconstruir l’índex. Fins que no torneu a crear l’índex, la cerca global (i altres cerques de text complet) no funcionaran correctament.',
      'Maximum taskmaster daemon pool size.' => 'Mida màxima de la reserva de dimonis de taskmaster.',
      'MySQL password to use when connecting to the database.' => 'Contrasenya MySQL per utilitzar en connectar-se a la base de dades.',
      'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'' => 'Si no hi ha una variable disponible (per exemple,%%m apareix en format de fitxer, però la sol·licitud no és una sol·licitud de Conduit), es renderitzarà com a \'-\'',
      'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to Phabricator, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'Si aquestes ordres no funcionen, proveu Google. El procés d’instal·lació d’extensions PHP no és específic de Phabricator i haurien de funcionar les instruccions que pugueu trobar per instal·lar-les al vostre sistema. A Mac OS X, és possible que vulgueu provar Homebrew.',
      'CSRF HMAC keys are now managed automatically.' => 'Les claus HMAC CSRF ara es gestionen automàticament.',
      'Database host "%s" is using the builtin stopword file for building search indexes. This can make Phabricator\'s search feature less useful.
    Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.
    To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.
    To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:
    %s
    (You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'L\'amfitrió de la base de dades «%s» està utilitzant el fitxer de «paraules buides» incorporat per crear índexs de cerca. Això pot fer que la funcionalitat de cerca del Phabricator sigui menys útil. 
    Les paraules buides són paraules comunes que no estan indexades i, per tant, no es poden cercar. El fitxer de paraules buides per defecte de té al voltant de 500 paraules, incloent-hi diverses paraules que és probable que vulgueu cercar, com ara «diferent», «likely», «wish» i «zero». 
    Per a fer que la cerca sigui més útil, podeu utilitzar un fitxer alternatiu de paraules buides amb menys paraules.  Alternativament, si no us preocupa la cerca de paraules comunes, podeu ignorar aquest avís. Si més tard planegeu configurar Elasticsearch, també podeu ignorar aquest avís: aquest fitxer de paraules buides només afecta els índexs de text complet de MySQL. 
    Per triar un altre fitxer de paraules buides, afegiu-lo al vostre fitxer %s (a la secció %s) i després reinicieu %s: 
    %s 
    (Si ho preferiu, també podeu utilitzar un fitxer diferent. El fitxer suggerit anteriorment té al voltant de 50 de les paraules en anglès més comunes.) 
    Finalment, executeu aquesta ordre per reconstruir els índexs utilitzant les noves regles: 
    %s',
      'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s' => 'El valor de l\'opció \'%s\' (del tipus \'%s\') s\'ha d\'especificar a JSON, però no s\'ha pogut descodificar l\'entrada: %s',
      'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.' => 'L\'amfitrió de la base de dades "%s" té un estat de clúster configurat que no està d\'acord amb l\'estat d\'aquest amfitrió ("%s"). Executeu `bin/partició d\'emmagatzematge` per a validar l\'estat local al clúster. És possible que aquest amfitrió hagi començat amb una configuració obsoleta.',
      'PHP is currently using the very old "mysql" extension to interact with the database. You should install the newer "mysqli" extension to improve behaviors (like error handling and query timeouts).
    Phabricator will work with the older extension, but upgrading to the newer extension is recommended.
    You may be able to install the extension with a command like: %s' => 'PHP utilitza actualment l\'antiga extensió \'mysql\' per interactuar amb la base de dades. Heu d\'instal·lar l\'extensió \'mysqli\' més recent per millorar els comportaments (com ara la gestió d\'errors i els temps d\'espera de consulta).
    Phabricator funcionarà amb l\'extensió anterior, però es recomana actualitzar a l\'extensió posterior.
    És possible que pugueu instal·lar l\'extensió amb una ordre com: %s',
      'Largest' => 'Més gran',
      'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.
    If you are running a cluster, this limit applies separately to each instance of `phd`. For example, if this limit is set to `4` and you have three hosts running daemons, the effective global limit will be 12.
    After changing this value, you must restart the daemons. Most configuration changes are picked up by the daemons automatically, but pool sizes can not be changed without a restart.' => 'Nombre màxim de dimonis "mestre de tasques" per executar-se simultàniament. Elevant d\'aquest valor pot augmentar el rendiment màxim de la cua. La reserva de recursos no utilitzats es reduirà automàticament.
    Si feu servir un clúster de servidors, aquest límit s\'aplica per separat a cada instància de "phd". Per exemple, si aquest límit s\'estableix en "4" i tres amfitrions executen dimonis, el límit global efectiu serà de 12.
    Després de canviar aquest valor, heu de reiniciar els dimonis. La majoria dels canvis de configuració són recollits automàticament per dimonis, però la mida de la reserva de recursos no es pot canviar sense reiniciar cada instància.',
      'Set the URI that Phurl will use to share shortened URLs.' => 'Establiu l\'URI que utilitzarà Phurl per compartir URL reduïts.',
      'Phabricator users can make requests to other services from the Phabricator host in some circumstances (for example, by creating a repository with a remote URL or having Phabricator fetch an image from a remote server).
    This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.
    This option defines a list of netblocks which Phabricator will decline to connect to. Generally, you should list all private IP space here.' => 'Els usuaris de Phabricator poden fer sol·licituds a altres serveis de l\'amfitrió de Phabricator en algunes circumstàncies (per exemple, creant un repositori amb un URL remot o fent que Phabricator recuperi una imatge d\'un servidor remot). 
    Això pot representar una vulnerabilitat de seguretat si els serveis de la mateixa subxarxa accepten ordres o revelen informació privada sobre HTTP GET no autenticat, basada en l\'adreça IP de la font. En particular, tots els amfitrions de la CE2 tenen accés a aquest servei. 
    Aquesta opció defineix una llista de blocs de xarxa als quals el Phabricator declinarà connectar-se. En general, hauríeu de llistar tot l\'espai IP privat aquí.',
      'Newly registered Phabricator accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access Phabricator.
    If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured Phabricator to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.
    NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => 'Els comptes Phabricator recentment registrats es poden col·locar en una cua d\'aprovació manual per a la revisió administrativa, o activar-se automàticament immediatament. La cua d\'aprovació està habilitada per defecte perquè proporciona un major control sobre qui pot registrar un compte i accedir a Phabricator. 
    Si la instal·lació és completament pública, o en una VPN, o els usuaris només poden registrar-se amb un proveïdor de confiança com LDAP, o heu configurat Phabricator per evitar el registre no autoritzat, podeu desactivar la cua per reduir la sobrecàrrega administrativa. 
    NOTA: Abans de desactivar la cua, assegureu-vos que @{config:auth.email-domains} està configurat correctament per a la vostra instal·lació!',
      'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.' => 'La vostra versió de MySQL (a l\'amfitrió de la base de dades \'%s\') no admet la configuració d\'un fitxer de paraules buides. No podreu trobar resultats de cerca de paraules habituals.',
      'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'La configuració de PHP selecciona un fus horari no vàlid. Seleccioneu un fus horari vàlid.',
      '%s deleted this configuration entry (again?).' => '%s ha suprimit aquesta entrada de configuració (de nou?).',
      'Server Timezone Not Configured' => 'Fus horari del servidor no configurat',
      'Individual application reply handler domains have been removed. Configure a reply domain with "%s".' => 'S\'han eliminat els dominis particulars del gestor de resposta de l\'aplicació. Configura un domini de resposta amb «%s».',
      'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. Phabricator needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.
    PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.
    (Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)
    The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit Phabricator process memory.
    You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'Quan carregueu un fitxer mitjançant l\'opció d\'arrossegar i deixar anar o l\'API, els trossos s\'han d\'emmagatzemar a la memòria intermèdia abans de ser escrits a l\'emmagatzematge permanent. Phabricator necessita memòria disponible per emmagatzemar aquests trossos mentre són pujats, però PHP està configurat per limitar severament la memòria disponible. 
    Actualment, els processos PHP tenen molt poca memòria lliure disponible (%s). Per funcionar bé, els processos haurien de tenir almenys %s. 
    (Tingueu en compte que l\'aplicació mateixa també ha d\'ajustar-se a la memòria disponible, de manera que no tota la memòria sota el límit de memòria està disponible per a càrregues de treball en execució.) 
    La forma més fàcil de resoldre aquest problema és establir %s a %s en la configuració de PHP, per desactivar el límit de memòria. Normalment hi ha poc o cap valor per utilitzar aquesta opció per limitar la memòria de procés de Phabricator. 
    També podeu augmentar el límit o ignorar aquest problema i acceptar que podeu trobar problemes per pujar fitxers grans i processar peticions grans.',
      'Install these %d PHP extension(s):' => 'Instal·leu aquestes %s extensions de PHP:',
      'Missing \'%s\' Binary' => 'Falta el binari \'%s\'',
      'The framable public feed is no longer supported.' => 'Ja no s\'admeten continguts públics seqüenciables.',
      'A random, unique string which identifies the request.' => 'Una cadena única i aleatòria que identifica la consulta.',
      'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. Phabricator can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'L\'endpoint S3 explícit a utilitzar.  Aquest hauria de ser l\'endpoint que correspon a la regió que heu seleccionat a `amazon-s3.region`. Phabricator no pot determinar l\'endpoint correcte automàticament perquè algunes ubicacions de l\'endpoint són irregulars.',
      'Disable unsafe option "%s" in PHP configuration.' => 'Desactiveu l\'opció no segura "%s" a la configuració de PHP.',
      'Phabricator now always sends transaction mail with "Precedence: bulk" to improve deliverability.' => 'Ara Phabricator sempre envia correu de transaccions amb \'Precedència: massiva\' per millorar la capacitat de lliurament.',
      'This key is too long for utf8mb4.' => 'Aquesta clau és massa llarga per a utf8mb4.',
      'Repository Servers' => 'Servidors de repositoris',
      'Format for the HTTP access log. Use `%s` to set the path. Available variables are:' => 'Format per al registre d’accés HTTP. Utilitzeu `%s` per establir la ruta. Les variables disponibles són:',
      'This schema can use a better collation.' => 'Aquest esquema pot utilitzar una millor confrontació.',
      'The environmental variable %s is empty. Phabricator will not be able to execute some commands.' => 'La variable d\'entorn %s està buida. Phabricator no podrà executar algunes ordres.',
      'Really Clear Cache' => 'Esborrar la caché',
      'Mail thread IDs are now generated automatically.' => 'Ara els identificadors de fil de correu es generen automàticament.',
      'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.
    For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.
    You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.
    To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:
    %s
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'L\'amfitrió de la base de dades «%s» està configurat per utilitzar la longitud mínima de paraula predeterminada quan es construeixen índexs de cerca, que és 4. Això significa que les paraules que només tenen 3 caràcters no s\'indexen i no es poden cercar. 
    Per exemple, no podreu trobar resultats de cerca per a paraules com «SMS», «web» o «DOS». 
    Podeu canviar aquest paràmetre a 3 per permetre que s\'indexin aquestes paraules. Alternativament, podeu ignorar aquest avís si no esteu preocupat per cercar paraules de tres lletres. Si més tard planegeu configurar l\'Elasticsearch, també podeu ignorar aquest avís: només afecta la cerca de text complet de MySQL. 
    Per reduir la longitud mínima de la paraula a 3, afegiu-ho al vostre fitxer %s (a la secció %s) i després reinicieu %s: 
    %s 
    Finalment, executeu aquesta ordre per reconstruir els índexs utilitzant les noves regles: 
    %s',
      'Enable HTTP Strict Transport Security (HSTS).' => 'Activeu la seguretat de transport estricta HTTP (HSTS).',
      'Users can configure a URI pattern to open files in a text editor. The URI must use a protocol on this whitelist.' => 'Els usuaris poden configurar un patró URI per obrir fitxers en un editor de text. L\'URI ha d\'utilitzar un protocol en aquesta llista blanca.',
      'You can rebuild repository identities while Phabricator is running.' => 'Podeu reconstruir les identitats dels repositoris mentre el Phabricator s\'està executant.',
      'This configuration option is unknown. It may be misspelled, or have existed in a previous version of Phabricator.' => 'Aquesta opció de configuració és desconeguda. Pot estar mal escrita o haver existit en una versió anterior de Phabricator.',
      'HTTP Basic Auth Not Configured' => 'Autenticació bàsica HTTP no configurada',
      'Highlight httpd.conf as "apacheconf".' => 'Ressalteu httpd.conf com a "apacheconf".',
      'This option has been replaced with `ui.logo`, which provides more flexible configuration options.' => 'Aquesta opció s\'ha substituït per `ui.logo`, que proporciona opcions de configuració més flexibles.',
      'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => 'Aquesta és una llista de sobreescriptura d\'expressions regulars que us permet triar com es ressalten els fitxers d\'idioma. Si els vostres projectes tenen certes regles sobre noms de fitxer o utilitzen extensions de llenguatge inusuals o ambigües, podeu crear un mapatge aquí. Aquest és un diccionari ordenat d\'expressions regulars que es provarà amb el nom de fitxer. Haurien de mapejar un llenguatge explícit com a valor de cadena, o un índex numèric en els grups capturats com a enter.',
      'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.
    Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies @{config:auth.require-email-verification}.
    You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.' => 'Podeu restringir les adreces de correu electrònic permeses a certs dominis (com ara `latevaempresa.com`) establint una llista de dominis permesos aquí. 
    Els usuaris només podran registrar-se utilitzant adreces de correu electrònic en un dels dominis, i només podran afegir noves adreces de correu electrònic per a aquests dominis. Si configureu això, implica @{config:auth.require-email-verification}. 
    Hauríeu d\'ometre `@` dels dominis. Tingueu en compte que el domini ha de coincidir exactament.  Si permeteu `latevaempresa.com`, això permet `pere@latevaempresa.com` però rebutja `pere@mail.latevaempresa.com`.',
      'IMPORTANT: The upstream does not provide support for prototype applications.
    Phabricator includes prototype applications which are in an **early stage of development**. By default, prototype applications are not installed, because they are often not yet developed enough to be generally usable. You can enable this option to install them if you\'re developing Phabricator or are interested in previewing upcoming features.
    To learn more about prototypes, see [[ %s | %s ]].
    After enabling prototypes, you can selectively uninstall them (like normal applications).' => 'IMPORTANT: L\'ascendent no proporciona suport per a les aplicacions de prototips. 
    Phabricator inclou les aplicacions de prototips que es troben en una **primera etapa del desenvolupament**.  Per defecte, les aplicacions de prototips no estan instal·lades, perquè sovint no estan prou desenvolupades per ser utilitzables en general.  Podeu activar aquesta opció per instal·lar-los si esteu desenvolupant Phabricator o esteu interessat en la previsualització de les properes funcionalitats. 
    Per aprendre més sobre els prototips, vegeu [[ %s | %s ]]. 
    Després d\'habilitar prototips, podeu desinstal·lar-los selectivament (com les aplicacions normals)',
      'For conduit, the Conduit method which was invoked.' => 'Per a un conducte, el mètode Conduit que s\'ha invocat.',
      'The request body Phabricator received began:' => 'El cos de la petició que Phabricator ha rebut en començar:',
      'The configured PATH includes a component which is not usable. Phabricator will be unable to find or execute binaries located here:
    %s
    The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => 'El PATH configurat inclou un component que no es pot utilitzar. Phabricator no podrà trobar ni executar binaris ubicats aquí:
    %s
    L\'usuari que executa el servidor web ha de poder llegir tots els directoris de PATH per fer-ne ús.',
      'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see http://recaptcha.net/' => 'Activeu la recaptcha per requerir que els usuaris resolguin captchas després d’uns intents d’inici de sessió fallits. Això dificulta els atacs de força bruta contra les contrasenyes dels usuaris. Per obtenir més informació, consulteu http://recaptcha.net/',
      'Developer / Debugging' => 'Desenvolupador / Depuració',
      'Remove PHP %s' => 'Elimineu PHP %s',
      'Classes must match to compare schemata!' => 'Les classes han de coincidir per comparar els esquemes!',
      'Elasticsearch Index Not Found' => 'No s’ha trobat l’índex d’Elasticsearch',
      'A daemon is running as user %s, but daemons should be running as %s.
    Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.' => 'Un dimoni s’executa com a usuari %s, però els dimonis s’han d’executar com a %s.
    Ajusteu els paràmetres de configuració %s o reinicieu els dimonis. Els dimonis haurien d’intentar executar-se com l’usuari adequat quan es reinicien.',
      'Missing Key' => 'Falta la clau',
      'Option "%s" is of type "%s", but the configured value is not an integer.' => 'L\'opció \'%s\' és del tipus \'%s\', però el valor configurat no és un enter.',
      'Notifications no longer have a dedicated debugging mode.' => 'Les notificacions ja no tenen un mode de depuració dedicat.',
      'MySQL is not in strict mode (on host "%s"), but using strict mode is recommended.' => 'MySQL no està en mode estricte (a l\'amfitrió \'%s\'), però es recomana utilitzar el mode estricte.',
      'This ancient extension point has been replaced with other mechanisms, including "AphrontSite".' => 'Aquest antic punt d\'extensió s\'ha substituït per altres mecanismes, inclòs "AphrontSite".',
      'You enabled Elasticsearch but the index does not exist.' => 'Heu activat Elasticsearch però l’índex no existeix.',
      'Phabricator PHP 7 Compatibility Information' => 'Informació de compatibilitat de Phabricator PHP 7',
      'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.' => 'La configuració \'%s\' conté un número de port, però aquest ús està obsolet. En lloc d\'això, posa el número de port en \'%s\'.',
      'Elasticsearch Index Schema Mismatch' => 'L\'esquema d\'índex d\'Elasticsearch no coincideix',
      'Specify the configuration key you want to set.' => 'Especifiqueu la clau de configuració que voleu establir.',
      'Cache Entries' => 'Entrades de la caché',
      'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.' => 'La ubicació configurada per emmagatzemar fitxers carregats al disc (\'%s\') no existeix, o no es pot llegir ni escriure. Verifiqueu que el directori existeix i que el servidor web pugui llegir i escriure.',
      'Key is Too Long' => 'La clau és massa llarga',
      'Elasticsearch Misconfigured' => 'Elasticsearch està mal configurat',
      'Phabricator no longer supports global customization of monospaced fonts.' => 'Phabricator ja no és compatible amb la personalització global de les fonts monoespaiades.',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).' => 'El component PATH \'%s\' (que es resol com a camí absolut \'%s\') no es pot utilitzar perquè no es pot transitar (el seu bit de permís \'%s\' no està definit).',
      'No Repositories' => 'Cap Repositoris',
      '%s deleted this configuration entry.' => '%s ha suprimit aquesta entrada de configuració.',
      'After rebuilding repository identities, run this command to clear this setup warning:' => 'Després de reconstruir les identitats dels repositoris, executeu aquesta ordre per esborrar aquesta configuració advertint:',
      'Request has bad "Host" header.' => 'La sol·licitud té una capçalera \'Amfitrió\' dolenta.',
      'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.' => 'Aquesta versió de Subversió té un error en què "%s" no funciona per als fitxers afegits a rN (Incidència de Subversió # 2873), solucionat a 1.7.2.',
      'Elasticsearch is not reachable as configured.' => 'Elasticsearch no es pot accedir tal com està configurat.',
      'Key has Wrong Uniqueness' => 'La clau té una singularitat incorrecta',
      'Determines whether or not basic account information is editable.' => 'Determina si la informació bàsica del compte és editable o no.',
      'The base URI for this install is not configured. Many major features will not work properly until you configure it.' => 'L\'URI base per a aquesta instal·lació no està configurat. Moltes funcionalitats importants no funcionaran correctament fins que no la configureu.',
      'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.' => 'El binari \'%s\' en aquest sistema té un comportament inesperat: s\'esperava que sortís amb un codi d\'error diferent de zero quan se li passessin arxius diferents, però no ho va fer.',
      'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.
    This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.
    Although it is normally difficult for an attacker to convince Phabricator to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.
    To disable this option, set: %s' => 'PHP està configurat actualment per a peticions d\'honor de qualsevol servidor MySQL al qual es connecta per al contingut de qualsevol fitxer local. 
    Aquesta capacitat és compatible amb les consultes de MySQL "LOAD DATA LOCAL INFILE", però permet que un servidor MySQL maliciós tingui accés de lectura al disc local: el servidor pot demanar al client que enviï el contingut de qualsevol fitxer local, i el client ho complirà. 
    Encara que normalment és difícil per a un atacant convèncer Phabricator de connectar-se a un servidor MySQL maliciós, hauríeu de desactivar aquesta opció: aquesta aptitud és innecessària i inherentment perillosa. 
    Per desactivar aquesta opció, estableix: %s',
      'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.' => 'Podeu ignorar un problema si no voleu solucionar-lo o teniu previst solucionar-lo més endavant. Els problemes ignorats no apareixeran a totes les pàgines, però es mostraran a la llista de problemes oberts.',
      'Enter value in JSON.' => 'Introduïu el valor a JSON.',
      'The path for local repositories does not exist, or is not readable by the webserver.' => 'La ruta als repositoris locals no existeix, o no és llegible pel servidor web.',
      'Inbound and outbound mail is now configured with "cluster.mailers".' => 'La plataforma de correu entrant i sortint ara es configura amb \'cluster.mailers\'.',
      'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.' => 'Un amfitrió de la base de dades (\'%s\') i aquest amfitrió web (\'%s\') discrepen de l\'hora actual en més de 60 segons (la distinció absoluta és de %s segons). Comproveu que l’hora actual estigui configurada correctament a tot arreu.',
      'Sample 0.1%% of requests.' => 'Mostreig del 0,1%% de les sol·licituds.',
      'No Caches to Reset' => 'Cap caché a reinicialitzar',
      'Really Clear Cache?' => 'Esborrar la caché?',
      'Collectors with custom policies are highlighted. Use %s to change retention policies.' => 'Es ressalten els col·lectors amb polítiques personalitzades. Utilitzeu %s per canviar les polítiques de retenció.',
      'URI that Phurl will use to shorten URLs.' => 'URI que Phurl utilitzarà per escurçar URL.',
      'Profile every request (slow)' => 'Perfila cada sol·licitud (lent)',
      'This option generally did not prove useful. Resource hash keys are now managed automatically.' => 'Aquesta opció generalment no era útil. Les claus de resum del recurs ara es gestionen automàticament.',
      'To enable the Phabricator access log, specify a path. The Phabricator access than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).
    If not set, no log will be written.' => 'Per habilitar el registre d\'accés de Phabricator, especifiqueu una ruta d\'accés. L’accés a Phabricator que els registres d’accés HTTP normals (per exemple, pot mostrar usuaris, controladors i altres dades de l’aplicació).
    Si no s’estableix, no s’escriurà cap registre.',
      'Schema Status' => 'Estat de l’esquema',
      'To update these %d value(s), run these command(s) from the command line:' => 'Per actualitzar aquests %s valors, executeu aquestes ordres des de la línia d\'ordres:',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with Phabricator. Remove \'%s\' from your configuration to continue.' => 'Teniu activat \'%s\' a la configuració de PHP.
    Aquesta opció no és compatible amb Phabricator. Traieu "%s" de la configuració per continuar.',
      'Cache Storage' => 'Emmagatzematge de la caché',
      'Small MySQL "%s"' => 'MySQL petit "%s"',
      'Value for option "%s" must be an integer.' => 'El valor de l\'opció \'%s\' ha de ser un nombre enter.',
      'The request path, or request target.' => 'El camí sol·licitat o l\'objectiu de sol·licitat.',
      'Install applications which are still under development.' => 'Instal·leu aplicacions encara en desenvolupament.',
      'Either the Phabricator schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => 'O bé l\'esquema Phabricator per l\'Elasticsearch ha canviat o l\'Elasticsearch ha creat l\'índex automàticament. Utilitzeu la següent ordre per reconstruir l\'índex.',
      'PHP also loaded these %s configuration file(s):' => 'PHP també ha carregat aquests %s fitxers de configuració:',
      'Reading value from stdin...' => 'S\'està llegint el valor des de stdin ...',
      'Option "%s" is of type "%s", but the value you provided is not a valid JSON list: when providing a set from the command line, specify it as a list of values in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L\'opció "%s" és del tipus "%s", però el valor que heu proporcionat no és una llista JSON vàlida: quan proporcioneu un conjunt des de la línia d\'ordres, especifiqueu-lo com una llista de valors JSON. És possible que hàgiu de citar el valor per al vostre intèrpret d\'ordres (per exemple: \'["a", "b", ...]\').',
      'Disable Recaptcha' => 'Desactiva Recaptcha',
      'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to Phabricator, or that you are making a raw request without a "Host" header using a tool or library.
    If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.
    It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.
    Requests must include a valid "Host" header.' => 'Aquesta sol·licitud no inclou cap capçalera "amfitrió". Això pot significar que el vostre servidor web (com ara nginx o apache) està mal configurat, de manera que la capçalera "Host" no es subministra a Phabricator o que feu una sol·licitud a pèl "Host" mitjançant una eina o una biblioteca.
    Si utilitzeu un navegador web, comproveu la configuració del servidor web. Si feu servir una eina o una biblioteca, comproveu com es construeix la consulta.
    També és possible (però molt poc probable) que un altre element de xarxa (com ara un equilibrador de càrrega) estigui despullant la capçalera.
    Les sol·licituds han d\'incloure una capçalera "amfitrió" vàlida.',
      'Sample every request (slow).' => 'Mostrejar cada petició (lent).',
      '\'%s\' binary not found or Imagemagick is not installed.' => 'No s\'ha trobat el binari \'%s\' o Imagemagick no està instal·lat.',
      'Unsafe MySQL "local_infile" Setting Enabled' => 'Paràmetres no segurs de MySQL \'local_infile\' habilitats',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' does not exist.' => 'El component de PATH "%s" (que es resol com a camí absolut "%s") no es pot utilitzar perquè no existeix "%s".',
      'The search index algorithm has been updated and the index needs be rebuilt.' => 'S\'ha actualitzat l\'algorisme d\'índex de cerca i cal reconstruir l\'índex.',
      'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.
    You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.
    For more information on locked and hidden configuration, including details about this setup issue, see %s.
    This database value is currently respected, but a future version of Phabricator will stop respecting database values for locked configuration options.' => 'El valor de configuració «%s» està bloquejat (per tant no es pot editar des de la interfície d\'usuari web), però té un valor de base de dades.  Normalment, això vol dir que abans no estava bloquejat, el vau establir utilitzant la interfície d\'usuari web, i més tard es va bloquejar. 
    Hauríeu de copiar aquest valor de configuració a una font de configuració local (normalment utilitzant %s) i després suprimir-lo de la base de dades amb l\'ordre següent. 
    Per obtenir més informació sobre la configuració bloquejada i oculta, inclosos els detalls sobre aquest problema de configuració, consulteu %s. 
    Actualment es respecta aquest valor de base de dades, però una futura versió de Phabricator deixarà de respectar els valors de la base de dades per a les opcions de configuració bloquejades.',
      'Phabricator has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => 'Phabricator té %s disponible en %s, però el binari ha sortit amb un codi d\'error quan s\'executa com a %s. Comproveu que estigui instal·lat correctament.',
      'The current PHP configuration has these %d value(s):' => 'La configuració actual de PHP té aquests %s valors:',
      'Cache Status' => 'Estat de la caché',
      'You have at least one repository configured which uses this version control system. It will not work without the VCS binary.' => 'Teniu com a mínim un repositori configurat que utilitza aquest sistema de control de versions. No funcionarà sense la binària VCS.',
      'Done. Migrated %d keys.' => 'Fet. %s claus migrades.',
      'The remote IP.' => 'L\'IP remota.',
      'Default key for HMAC digests where the key is not important (i.e., the hash itself is secret). You can change this if you want (to any other string), but doing so will break existing sessions and CSRF tokens. This option is deprecated. Newer code automatically manages HMAC keys.' => 'Clau per defecte per a resums HMAC on la clau no és important (és a dir, el hash mateix és secret).  Podeu canviar això si voleu (a qualsevol altra cadena), però fer-ho trencarà les sessions existents i els testimonis de CSRF.  Aquesta opció està obsoleta.  El codi més nou gestiona automàticament les claus HMAC.',
      'Highlight %s as PHP.' => 'Ressalteu %s com a PHP.',
      'MySQL is Using Default Stopword File' => 'MySQL utilitza un fitxer de paraules buides per defecte',
      'If you enable this, linked YouTube videos will be embedded inline. This has mild security implications (you\'ll leak referrers to YouTube) and is pretty silly (but sort of awesome).' => 'Si ho activeu, els vídeos de YouTube enllaçats s’incrustaran en línia. Això té lleus implicacions de seguretat (filtrareu referents a YouTube) i és bastant ximple (però és increïble).',
      'The \'%s\' binary could not be located or executed.' => 'No s\'ha pogut localitzar ni executar el binari "%s".',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with Phabricator. Disable \'%s\' in your PHP configuration to continue.' => 'Teniu activat \'%s\' a la configuració de PHP.
    Aquesta opció no és compatible amb Phabricator. Desactiveu \'%s\' a la configuració de PHP per continuar.',
      'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.
    If you provide an instance identifier here (normally by injecting it with a `%s`), Phabricator will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'ADVERTÈNCIA: és una opció molt avançada i només útil per a proveïdors d\'allotjament que executen clústers multi-inquilins.
    Si proporcioneu un identificador d\'instància aquí (normalment injectant-lo amb un "%s"), Phabricator el passarà a subprocessos i hooks de validació a la variable d\'entorn "%s".',
      'Phabricator can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 
    For instructions on installing and enabling Pygments, see the %s configuration option.
    If you do not want to install Pygments, you can ignore this issue.' => 'El Phabricator pot ressaltar alguns idiomes per defecte, però instal·lar i habilitar Pygments (una eina de ressaltat de tercers) afegirà el ressaltat de sintaxi per a molts més idiomes.  
    Per a instruccions sobre la instal·lació i activació de Pygments, vegeu l\'opció de configuració %s. 
    Si no voleu instal·lar Pygments, podeu ignorar aquest problema.',
      'On host "%s", MySQL is configured with a small "%s" (%d), which may cause some large writes to fail. The recommended minimum value for this setting is "%d".' => 'A l\'amfitrió \'%s\', MySQL està configurat amb un petit \'%s\' (%s), cosa que pot provocar que fallin algunes escriptures grans. El valor mínim recomanat per a aquest paràmetre és "%s".',
      'Config option "%s" is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like "%s".' => 'L\'opció de configuració "%s" no és vàlida. L\'identificador de fus horari ha de ser un identificador de fus horari vàlid reconegut per PHP, com ara "%s".',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not a directory.' => 'El component PATH \'%s\' (que es resol com a camí absolut \'%s\') no es pot utilitzar perquè \'%s\' no és un directori.',
      'Unable to connect to MySQL!
    %s
    Make sure Phabricator and MySQL are correctly configured.' => 'No s\'ha pogut connectar a MySQL! 
    %s 
    Assegureu-vos que Phabricator i MySQL estan configurats correctament.',
      'Phabricator sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. Phabricator sent username "%s" with password "%s"; received username "%s" and password "%s".
    Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => 'Phabricator es va enviar a si mateix una sol·licitud de prova amb una capçalera HTTP "Authorització", i esperava que aquestes credencials es transmetessin.  No obstant això, estaven absents o eren incorrectes quan eren rebuts.  Phabricator ha enviat el nom d\'usuari «%s» amb la contrasenya «%s»; ha rebut el nom d\'usuari «%s» i la contrasenya «%s». <br><br>És possible que el vostre servidor web no estigui configurat per reenviar l\'autenticació bàsica HTTP.  Si voleu utilitzar l\'autenticació bàsica (per exemple, per accedir als repositoris) heu de reconfigurar-la.',
      'After installing new PHP extensions, <strong>restart Phabricator for the changes to take effect</strong>. For help with restarting Phabricator, see %s in the documentation.' => 'Després d\'instal·lar noves extensions de PHP, <strong>reinicieu Phabricator de manera segura perquè els canvis tinguin efecte<strong>. Per obtenir ajuda amb el reinici de Phabricator, consulteu %s a la documentació.',
      'Set the language list which appears in dropdowns.' => 'Definiu la llista d\'idiomes que apareix als desplegables.',
      'Deprecated Config Source' => 'Font de configuració obsoleta',
      'The request body Phabricator sent began:' => 'El cos de la petició que Phabricator ha enviat en començar:',
      'Edge Types' => 'Tipus de flanc',
      'Logo configuration is not valid: value must be a dictionary.' => 'La configuració del logotip no és vàlida: el valor ha de ser un diccionari.',
      'Phabricator supports syntax highlighting a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.
    To install Pygments, visit [[ http://pygments.org | pygments.org ]] and follow the download and install instructions.
    Once Pygments is installed, enable this option (`pygments.enabled`) to make Phabricator use Pygments when highlighting source code.
    After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear Phabricator\'s caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Phabricator és compatible amb el ressaltat de sintaxi d\'alguns idiomes per defecte, però podeu instal·lar Pygments (una eina de ressaltat de sintaxi de tercers) per proporcionar suport per a molts més idiomes. 
    Per instal·lar Pygments, visiteu [[ http://pygments.org | pygments.org ]] i seguiu les instruccions de descàrrega i instal·lació. 
    Un cop instal·lat Pygments, habiliteu aquesta opció (`pygments.enabled`) per fer que el Phabricator utilitzi Pygments en ressaltar el codi font. 
    Després d\'instal·lar i activar els Pygments, el codi font creat recentment (com ara les diferències i els collages) hauria de ressaltar-se correctament. És possible que hàgiu de netejar la caché de Phabricator per obtenir el codi font existent prèviament per ressaltar. Per a instruccions sobre la gestió de la caché, vegeu [[ %s | Managing Caches ]].',
      'Allow HTTP' => 'Permet HTTP',
      'Phabricator sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.' => 'Phabricator ha enviat una sol·licitud de prova que s\'ha comprimit amb \'Content-Encoding: gzip\', però ha rebut bytes diferents dels que va enviar.',
      'Controls whether Phabricator allows the suppression of email from "maintenance" users.' => 'Controla si el Phabricator permet la supressió del correu electrònic dels usuaris "manteniment".',
      'Access key for Amazon EC2.' => 'Clau d\'accés per a Amazon EC2.',
      'Key for HMAC digests.' => 'Clau per als resums HMAC.',
      'The request duration, in microseconds.' => 'La durada de la sol·licitud, en microsegons.',
      'Phabricator now supports arbitrarily large files. Consult the documentation for configuration details.' => 'Ara Phabricator admet fitxers de mida arbitrària. Consulteu la documentació per obtenir informació detallada sobre la configuració.',
      'Amazon S3 region where your S3 bucket is located. When you specify a region, you should also specify a corresponding endpoint with `amazon-s3.endpoint`. You can find a list of available regions and endpoints in the AWS documentation.' => 'El vostre dipòsit S3 es troba a la regió Amazon S3. Quan especifiqueu una regió, també heu d\'especificar un endpoint corresponent amb `amazon-s3.endpoint`. Podeu trobar una llista de regions i endpoints disponibles a la documentació d’AWS.',
      'MySQL %s Not Supported' => 'MySQL %s no compatible',
      'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.
    (If you aleady created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => 'El motor \'InnoDB\' no està disponible a MySQL (a l\'amfitrió \'%s\'). Activeu InnoDB a la configuració de MySQL.
    (Si ja heu creat taules, MySQL no va utilitzar correctament algun altre motor per crear-les. Cal convertir-les, deixar-les anar i reinicialitzar-les.)',
      'Controls whether Phabricator sends email "From" users.' => 'Controla si el Phabricator envia un correu electrònic d\'usuaris "De".',
      'All Differential fields are now managed through the configuration option "%s". Use that option to configure which fields are shown.' => 'Ara tots els camps diferencials es gestionen mitjançant l\'opció de configuració "%s". Utilitzeu aquesta opció per configurar els camps que es mostren.',
      'By default, Phabricator includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => 'Per defecte, Phabricator inclou algunes variants de text a la interfície gràfica d’usuari, com un indicador de "Fes bon pes" en lloc d\'"Afegir un comentari" a Maniphest... Si preferiu cadenes UI més tradicionals com ara "Afegir un comentari", podeu configurar aquest indicador de seguiment per desactivar la majoria de les variacions addicionals.',
      'Use HSTS' => 'Utilitzeu HSTS',
      'The current MySQL configuration has these %d value(s):' => 'La configuració actual de MySQL té aquests %s valors:',
      'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.
    There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed Phabricator on, you might set this value to %s.
    You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to Phabricator which make it different from normal workloads with respect to this setting.
    To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:
    %s
    If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => 'L\'amfitrió de la base de dades «%s» està configurat amb una mida molt petita de %s (%s). Això pot causar un baix rendiment de la base de dades i un esgotament del bloqueig. 
    No hi ha regles dures i ràpides per establir un valor adequat, però un punt de partida raonable per a una instal·lació estàndard és aproximadament el 40%% de la memòria total de la màquina. Per exemple, si teniu 4 GB de RAM a la màquina on heu instal·lat Phabricator, podeu establir aquest valor a %s. 
    Podeu llegir més sobre aquesta opció a la documentació de MySQL per ajudar-vos a prendre una decisió sobre com configurar-la per al vostre cas d\'ús. No hi ha cap preocupació específica per al Phabricator que el diferenciï de les càrregues de treball normals respecte a aquesta configuració. 
    Per ajustar la configuració, afegiu alguna cosa així al vostre fitxer %s (a la secció %s), substituint %s per un valor adequat per al vostre cas d\'amfitrió i ús. Llavors reinicia %s: 
    %s 
    Si esteu satisfet amb la configuració actual, podeu ignorar aquest avís de configuració.',
      'Show "To:" and "Cc:" footer hints in email.' => 'Mostra els consells de peu "Per a:" i "A/c:" al correu electrònic.',
      'Migrate From "feed.http-hooks" to Webhooks' => 'Migració de \'feed.http-hooks\' a Webhooks',
      'PHP Timezone' => 'Fus horari de PHP',
      'This option is not recognized. It may be misspelled.' => 'Aquesta opció no es reconeix. Pot estar mal escrita.',
      'Customized settings for Phabricator applications.' => 'Paràmetres personalitzats per a aplicacions de Phabricator.',
      'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and Phabricator does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.
    Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.
    You may be able to resolve this issue by updating Phabricator, since a newer version of Phabricator is likely to be able to parse the newer version string.
    If updating Phabricator does not fix this, you can report the issue to the upstream so we can adjust the parser.
    If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => 'No es pot determinar el número de versió de \'%s\'. Normalment, això significa que el programa ha canviat recentment la seva cadena de format de versió i Phabricator encara no sap analitzar sintàcticament la nova, però pot indicar que teniu un binari molt antic (o trencat).
    Com que no podem determinar el número de versió, s\'ometran les comprovacions de versions mínimes i conegudes com a incorrectes, de manera que és possible que no detectem cap binari incompatible.
    És possible que pugueu resoldre aquest problema actualitzant Phabricator, ja que és probable que una versió més recent de Phabricator pugui analitzar sintàcticament la cadena de versió més recent.
    Si l\'actualització de Phabricator no soluciona això, podeu informar del problema a la versió ascendent perquè puguem ajustar l\'analitzador sintàctic.
    Si esteu segur que teniu instal·lada una versió recent de \'%s\' i que funciona correctament, normalment és segur ignorar aquest advertiment.',
      'Advanced Settings' => 'Paràmetres avançats',
      'Phabricator can highlight PHP by default and use Pygments for other languages if enabled. You can provide a custom highlighter engine by extending class %s.' => 'Phabricator pot ressaltar PHP per defecte i utilitzar Pygments per a altres idiomes si està habilitat. Podeu proporcionar un motor de ressaltador personalitzat ampliant la classe %s.',
      'The \'%s\' extension is not installed. Without \'%s\', support, Phabricator may not be able to determine the MIME types of uploaded files.' => 'L\'extensió "%s" no està instal·lada. Sense la compatibilitat amb "%s", és possible que Phabricator no pugui determinar els tipus MIME de fitxers penjats.',
      'Learn more about locked and hidden options.' => 'Més informació sobre les opcions bloquejades i ocultes.',
      'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. Phabricator must be installed on an entire domain; it can not be installed on a path.' => 'L\'opció de configuració «%s» no és vàlida. L\'URI NO ha de tenir una ruta, p. ex. \'%s\' està BÉ, però \'%s\' no. Phabricator ha d\'estar instal·lat en tot un domini; no es pot instal·lar en una ruta.',
      'Repository Status' => 'Estat del Repositori',
      'Do Not Use HSTS' => 'No utilitzeu HSTS',
      'PHP 7.0-7.1 Not Supported' => 'PHP 7.0-7.1 no compatible',
      'List all configuration keys.' => 'Enumereu totes les claus de configuració.',
      'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".' => 'La personalització del prefix d\'assumpte de correu per aplicació ja no s\'admet directament. Els prefixos i altres cadenes es poden personalitzar amb \'translation.override\'.',
      'Configuration key "%s" is of type "%s". Specify it in JSON.' => 'La clau de configuració \'%s\' és del tipus \'%s\'. Especifiqueu-lo a JSON.',
      'This will only affect the current web frontend. Daemons and any other web frontends may continue to use older, cached code from their opcache.' => 'Això només afectarà la interfície web actual. Els dimonis i altres frontends web continuaran fent servir el codi en caché anterior després del seu opcache.',
      'Surplus Key' => 'Clau sobrant',
      'Cluster Setup' => 'Configuració del clúster',
      'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).
    Upgrade %s to a patched version.
    To learn more about how this issue affects Phabricator, see %s.' => 'La versió de %s d’aquest sistema està obsoleta i conté una important vulnerabilitat àmpliament coneguda (l’error "Shellshock").
    Actualitzeu %s a una versió corregida.
    Per obtenir més informació sobre com aquest problema afecta Phabricator, vegeu %s.',
      'MySQL is configured (on host "%s") to only index words with at least %d characters.' => 'MySQL està configurat (a l\'amfitrió \'%s\') per indexar només paraules amb almenys %s caràcters.',
      'Too many arguments: expected only a configuration key when using "--stdin".' => 'Hi ha massa arguments: només s\'esperava una clau de configuració quan s\'utilitza "--stdin".',
      'The \'%s\' extension is not installed. Without \'%s\', support, Phabricator will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => 'L\'extensió \'%s\' no està instal·lada. Sense \'%s\', Phabricator no podrà processar ni canviar la mida de les imatges (per exemple, per generar miniatures). Instal·leu o activeu \'%s\'.',
      'The way Phabricator attributes VCS activity to Phabricator users has changed. There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the Phabricator user that gets associated with VCS commits. This is to support situations where users are incorrectly associated with commits by Phabricator making bad guesses about the identity of the corresponding Phabricator user. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with future Phabricator features which will rely on the existence of these identities.' => 'La manera en què Phabricator atribueix l\'activitat VCS als usuaris de Phabricator ha canviat. Hi ha una nova capa de indirecte entre les cadenes que apareixen com a autors i validadors VCS (com ara "John Developer <johnd@bigcorp.com>") i l\'usuari Phabricator que s\'associa amb les validacions VCS. Això és per donar suport a situacions en què els usuaris no estan correctament associats amb validacions per Phabricator fent males conjectures sobre la identitat de l\'usuari de Phabricator corresponent. Això també ajuda amb situacions on s\'importen repositoris existents sense haver creat comptes per a tots els validadors en aquest repositori.  Fins que reconstrueixes aquestes identitats de repositori, és probable que trobis problemes amb les futures funcionalitats de Phabricator que confiaran en l\'existència d\'aquestes identitats.',
      'No repository cluster services are configured.' => 'No hi ha cap servei en clúster de repositori configurat.',
      'This schema is not expected to exist.' => 'No s’espera que existeixi aquest esquema.',
      'View status information for databases, caches, repositories, and other services.' => 'Consulteu la informació d\'estat de bases de dades, memòries cau, repositoris i altres serveis.',
      'Specify a configuration key to get.' => 'Especifiqueu una clau de configuració per obtenir.',
      'Can not compare two missing schemata!' => 'No es poden comparar dos esquemes que falten!',
      'Key on Wrong Columns' => 'Clau en columnes incorrectes',
      'PHID Types' => 'Tipus de PHID',
      'Wrote configuration key "%s" to database storage.' => 'S\'ha escrit la clau de configuració «%s» a l\'emmagatzematge de la base de dades.',
      'The environmental variable %s does not contain %s. You have enabled pygments, which requires %s to be available in your %s variable.' => 'La variable d\'entorn %s no conté %s. Heu habilitat pygments, que requereix que %s estigui disponible a la vostra variable %s.',
      'Config option "%s" is invalid. The URI must contain a dot ("%s"), like "%s", not just a bare name like "%s". Some web browsers will not set cookies on domains with no TLD.' => 'L\'opció de configuració \'%s\' no és vàlida. L\'URI ha de contenir un punt (\'%s\'), com ara \'%s\', no només un nom simple com \'%s\'. Alguns navegadors web no configuraran galetes en dominis sense TLD.',
      'The base URI for this install is not configured, and major features will not work properly until you configure it.
    You should set the base URI to the URI you will use to access Phabricator, like "http://phabricator.example.com/".
    Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).
    Based on this request, it appears that the correct setting is:
    %s
    To configure the base URI, run the command shown below.' => 'L\'URI base per a aquesta instal·lació no està configurat, i les funcionalitats principals no funcionaran correctament fins que la configureu. 
    Hauríeu d\'establir l\'URI base a l\'URI que utilitzareu per accedir al Phabricator, com "http://phabricator.exemple.com/". 
    Incloure el protocol (http o https), nom de domini i número de port si esteu utilitzant un port diferent de 80 (http) o 443 (https). 
    Basant-se en aquesta sol·licitud, sembla que la configuració correcta és: 
    %s 
    Per configurar l\'URI base, executeu l\'ordre que es mostra a continuació.',
      'Set %s in your PHP configuration to at least 32MB to support large file uploads.' => 'Establiu %s a la configuració de PHP com a mínim a 32 MB per admetre fitxers de grans dimensions.',
      'MySQL %s Mode Not Set' => 'El mode %s de MySQL no està habilitat',
      'If you are using Apache, your server may be configured with "SetInputFilter DEFLATE". This directive destructively mangles requests and emits them with "Content-Length" and "Content-Encoding" headers that no longer match the data in the request body.' => 'Si utilitzeu Apache, és possible que el servidor estigui configurat amb \'SetInputFilter DEFLATE\'. Aquesta directiva mangles destructivament sol·licita i les emet amb capçaleres \'Content-Length\' i \'Content-Encoding\' que ja no coincideixen amb les dades del cos de sol·licitud.',
      'Use specific endpoint' => 'Utilitzar un endpoint específic',
      'Configure Recaptcha captchas.' => 'Configureu captchas de Recaptcha.',
      'Report this Issue to the Upstream' => 'Notificar aquesta incidència a l\'ascendent',
      'Repos' => 'Repositoris',
      'Options for Phabricator developers, including debugging.' => 'Opcions per a desenvolupadors de Phabricator, inclosa la depuració.',
      'DarkConsole is a development and profiling tool built into Phabricator\'s web interface. You should leave it disabled unless you are developing or debugging Phabricator.
    Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.
    DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole és una eina de desenvolupament i perfilat integrada en la interfície web de Phabricator. Hauríeu de deixar-la inhabilitada a menys que desenvolupeu o depureu Phabricator. 
    Una vegada activeu DarkConsole per a la instal·lació, **cal habilitar-la per al vostre compte abans que aparegui a les pàgines.** Ho podeu fer a Paràmetres > Paràmetres del desenvolupador. 
    DarkConsole exposa dades potencialment confidencials (com consultes, traces de piles i configuració) de manera que generalment no l\'heu d\'activar en producció.',
      'The timezone Phabricator should use.' => 'Hauria d’utilitzar-se el fus horari de Phabricator.',
      'Authentication configuration is currently unlocked. Once you finish configuring authentication, you should lock it.' => 'Actualment la configuració d\'autenticació està desbloquejada. Un cop acabeu de configurar l\'autenticació, l\'hauríeu de bloquejar.',
      'Control how Phabricator renders user names in mail.' => 'Controleu com Phabricator renderitza els noms d\'usuari al correu.',
      'MySQL' => 'MySQL',
      'Phabricator received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with Phabricator. You should disable it.' => 'Phabricator ha rebut una capçalera HTTP "X-Mod-Pagespeed" o "X-Page-Speed" en aquesta sol·licitud, que indica que heu activat "mod_pagespeed" en aquest servidor. Aquest mòdul no és compatible amb Phabricator. Haureu de desactivar-lo.',
      'External loaders have been replaced. Extend `%s` to implement new PHID and handle types.' => 'S\'han substituït els carregadors externs. Amplieu "%s" per implementar nous tipus de PHID i manegadors.',
      'Authenticating users based on "Reply-To" is no longer supported.' => 'Ja no s\'admet l\'autenticació dels usuaris basada en «Respondre a».',
      'Cluster instance name, if configured.' => 'Nom de la instància del clúster, si està configurat.',
      'You likely need to fix your preamble script so REMOTE_ADDR is no longer empty.' => 'És probable que hàgiu de corregir l\'script del preàmbul perquè REMOTE_ADDR deixi de ser buit.',
      'You are running PHP version %s. Phabricator does not support PHP versions between 7.0 and 7.1.
    PHP removed signal handling features that Phabricator requires in PHP 7.0, and did not restore them until PHP 7.1.
    Upgrade to PHP 7.1 or newer (recommended) or downgrade to an older version of PHP 5 (discouraged).' => 'Esteu executant la versió de PHP %s. Phabricator no és compatible amb versions PHP entre 7.0 i 7.1. 
    PHP ha eliminat les funcionalitats de manipulació de senyals que Phabricator requereix en PHP 7.0, i no les va restaurar fins a PHP 7.1. 
    Actualitza a PHP 7.1 o posterior (recomanat) o baixa a una versió anterior de PHP 5 (desaconsellat).',
      'Detected %s serious issue(s) with the schemata.' => 'S\'han detectat %s problemes greus amb els esquemes.',
      'MySQL username to use when connecting to the database.' => 'Nom d\'usuari MySQL per utilitzar en connectar-se a la base de dades.',
      'Secret key for Amazon EC2.' => 'Clau secreta per a Amazon EC2.',
      'Configure the MySQL Native Driver to improve database behavior.' => 'Configureu el controlador natiu MySQL per millorar el comportament de la base de dades.',
      'Names must match to compare schemata!' => 'Els noms han de coincidir per comparar els esquemes!',
      'Core Settings' => 'Paràmetres del nucli',
      'Your MySQL server is configured with the "local_infile" option enabled. This option allows an attacker who finds an SQL injection hole to escalate their attack by copying files from the webserver into the database with "LOAD DATA LOCAL INFILE" queries, then reading the file content with "SELECT" queries.
    You should disable this option in your %s file, in the %s section:
    %s' => 'El vostre servidor MySQL està configurat amb l\'opció \'local_infile\' activada. Aquesta opció permet a un atacant que troba un forat d\'injecció SQL augmentar el seu atac copiant fitxers del servidor web a la base de dades amb consultes \'LOAD DATA LOCAL INFILE\', i després llegint el contingut del fitxer amb consultes \'SELECT\'.
    Haureu de desactivar aquesta opció al fitxer %s, a la secció %s:
    %s',
      'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or reconfigure Phabricator.' => 'L\'amfitrió de base de dades «%s» està configurat com a mestre, però un altre amfitrió està replicant. Això és perillós i pot manipular o destruir dades. Només s\'haurien de replicar les rèpliques. Atura la replicació a l\'amfitrió o reconfigura Phabricator.',
      'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.
    Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).
    Phabricator is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.
    Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.
    You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":
    %s
    Note that if you run other applications against the same database, they may not work in strict mode.
    If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. Phabricator will work correctly with this mode enabled or disabled.' => 'A l\'amfitrió de base de dades «%s», la configuració global «sql.mode» no inclou el mode "STRICT_ALL_TABLES". Es recomana activar aquest mode per millorar en general com el MySQL gestiona certs errors. 
    Sense aquest mode habilitat, MySQL ignorarà silenciosament algunes condicions d\'error, incloent les insercions que intenten emmagatzemar més dades en una columna de les que realment s\'ajusten. Aquest comportament és normalment indesitjable i pot conduir a la corrupció de dades (truncant caràcters multibyte al mig), pèrdua de dades (descartant les dades que no encaixen a la columna), o preocupacions de seguretat (per exemple, truncant claus o credencials). 
    Phabricator està desenvolupat i provat en mode "STRICT_ALL_TABLES", de manera que normalment no hauríeu de trobar aquestes situacions, però podeu trobar-les si interactueu directament amb la base de dades, executeu codi de tercers, desenvolupeu extensions o simplement trobeu un error en el programari. 
    L\'activació de "STRICT_ALL_TABLES" fa que MySQL plantegi un error explícit si es produeix una d\'aquestes situacions inusuals. Aquest és un comportament més segur i evita que aquestes situacions causin problemes secrets, subtils i potencialment greus més endavant. 
    Podeu trobar més informació sobre aquest mode (i com configurar-lo) al manual de MySQL. Normalment, és suficient afegir això al vostre fitxer «my.cnf» (a la secció "[mysqld]") i després reiniciar «mysqld»: 
    %s 
    Tingueu en compte que si executeu altres aplicacions contra la mateixa base de dades, pot ser que no funcionin en mode estricte. 
    Si no podeu o no voleu habilitar "STRICT_ALL_TABLES", podeu ignorar aquest avís amb seguretat. El Phabricator funcionarà correctament amb aquest mode habilitat o desactivat.',
      'This system has an unpatched version of Bash with a severe, widely disclosed vulnerability.' => 'Aquest sistema té una versió sense pedaços de Bash amb una vulnerabilitat severa i àmpliament divulgada.',
      'Keys' => 'Claus',
      'The \'%s\' extension has support for only some image types. Phabricator will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => 'L\'extensió "%s" només admet alguns tipus d\'imatges. Phabricator no podrà processar imatges dels tipus que falten fins que no construïu "%s" amb suport per a elles. Tipus compatibles: %s. Tipus que falten: %s.',
      'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in the Phabricator configuration.' => 'No s\'ha pogut trobar el binari \'%s\'. Establiu la variable d\'entorn de %s del servidor web per incloure el directori on resideix o afegiu-lo a \'%s\' a la configuració de Phabricator.',
      'Phabricator is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.
    Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => 'Phabricator està configurat actualment per publicar les càrregues dels usuaris directament des del mateix domini que altres continguts. Això suposa un risc per a la seguretat.
    Configureu un CDN (o un domini de fitxer alternatiu) per eliminar aquest risc. L’ús d’un CDN també millorarà el rendiment. Consulteu la guia següent per obtenir instruccions.',
      'Wordmark' => 'Nom de la marca',
      'Severe Security Vulnerability: Unpatched Bash' => 'Vulnerabilitat de seguretat severa: Bash sense pedaços',
      'Force HTTPS' => 'Forçar HTTPS',
      'Without \'%s\', Phabricator will not be able to generate or render diffs in multiple applications.' => 'Sense \'%s\', Phabricator no podrà generar ni renderitzar diferències en diverses aplicacions.',
      'This key is not expected to exist.' => 'No s’espera que existís aquesta clau.',
      '%d related link(s):' => '%s enllaços relacionats:',
      'Missing Repository Local Path' => 'Falta la ruta local del repositori',
      'An alternate resource map is no longer supported. Instead, use multiple maps. See T4222.' => 'Un mapa de recursos alternatius ja no és compatible. En el seu lloc, utilitzeu diversos mapes. Vegeu T4222.',
      'Repository Services' => 'Serveis de repositoris',
      'Inline comments are now always rendered with a limited amount of context.' => 'Ara els comentaris en línia es mostren sempre amb un context limitat.',
      'Your server is configured with \'%s\', which prevents Phabricator from opening files it requires access to.
    Disable this setting to continue.' => 'El vostre servidor està configurat amb "%s", cosa que impedeix que Phabricator obri fitxers als quals requereix accés. 
    Desactiveu aquest paràmetre per a continuar.',
      'Locked Configuration Option "%s" Has Database Value' => 'L\'opció de configuració bloquejada «%s» té valor de base de dades',
      'Configuration key "%s" is unknown. Use "bin/config list" to list all known keys.' => 'Es desconeix la clau de configuració \'%s\'. Utilitzeu "bin/config list" per llistar totes les claus conegudes.',
      'MySQLi Extension Not Available' => 'L\'extensió MySQLi no està disponible',
      'Unknown schema issue "%s"!' => 'Problema desconegut de l\'esquema "%s"!',
      'Embed Commons videos' => 'Incrustar vídeos de Commons',
      'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.
    This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.
    This set is also used to enforce valid redirect URIs. Phabricator will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.
    Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some Phabricator features which rely on links or redirects may not work.' => 'Quan els usuaris escriuen comentaris que tenen URI, es convertiran automàticament en enllaços que es puguin clicar si el protocol URI apareix en aquest conjunt. 
    Aquest conjunt de protocols permesos està pensat principalment per prevenir problemes de seguretat amb "javascript:" i altres gestors URI potencialment perillosos. 
    Aquest conjunt també s\'utilitza per fer complir els URI de redirecció vàlids.  Phabricator es negarà a emetre una redirecció HTTP "Location" a un URI amb un protocol que no està en aquest conjunt. 
    Normalment, "http" i "https" han d\'estar presents en aquest conjunt. Si elimines un o ambdós protocols, algunes funcionalitats Phabricator que depenen d\'enllaços o redireccions poden no funcionar.',
      'Limit page execution time to debug hangs.' => 'Limita el temps d\'execució per a depurar els penjats.',
      'User Interface' => 'Interfície d\'usuari',
      'No Schema Issues' => 'No hi ha problemes d’esquema',
      'MySQL database hostname.' => 'Nom d\'amfitrió de la base de dades MySQL.',
      'Clustering Introduction' => 'Introducció al clúster',
      'By default, Phabricator serves files from the same domain the application is served from. This is convenient, but presents a security risk.
    You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => 'Per defecte, Phabricator ofereix fitxers del mateix domini des del qual es publica l\'aplicació. Això és convenient, però presenta un risc de seguretat.
    Heu de configurar un domini de fitxers CDN o alternatiu per mitigar aquest risc. La configuració d’un CDN també millorarà el rendiment. Vegeu [[ %s | %s ]] per obtenir instruccions.',
      'MySQL on this machine' => 'MySQL en aquesta màquina',
      'No such configuration key \'%s\'! Use `%s` to list all keys.' => 'No existeix aquesta clau de configuració \'%s\'! Utilitzeu `%s` per llistar totes les claus.',
      'You can respond to various application events by installing listeners, which will receive callbacks when interesting things occur. Specify a list of classes which extend PhabricatorEventListener here.' => 'Podeu respondre a diversos esdeveniments de l\'aplicació instal·lant oients, que rebran devolucions de trucada quan es produeixin coses interessants. Especifiqueu aquí una llista de classes que amplien PhabricatorEventListener.',
      'This install has a fatal setup error, access the web interface to view details and resolve it.' => 'Aquesta instal·lació té un error de configuració greu, accediu a la interfície web per veure\'n detalls i resoldre-la.',
      'Your webserver is not forwarding credentials.' => 'El vostre servidor web no reenvia credencials.',
      'Default non-pygments syntax highlighter engine.' => 'Motor de ressaltador de sintaxi no pygments per defecte.',
      'HTTP Parameter Types' => 'Tipus de paràmetres de l\'HTTP',
      'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of Phabricator.
    You can configure Webhooks in Herald.
    To resolve this issue, remove all URIs from "feed.http-hooks".' => 'L\'opció \'feed.http-hooks\' està obsoleta en favor de Webhooks. Aquesta opció s\'eliminarà en una futura versió de Phabricator.
    Podeu configurar Webhooks a Herald.
    Per resoldre aquest problema, traieu tots els URI de \'feed.http-hooks\'.',
      'PHP is currently using the older MySQL external driver instead of the newer MySQL native driver. The older driver lacks options and features (like support for query timeouts) which allow Phabricator to interact better with the database.
    Phabricator will work with the older driver, but upgrading to the native driver is recommended.
    You may be able to install the native driver with a command like: %s' => 'PHP està utilitzant actualment el controlador extern MySQL anterior en lloc del controlador natiu MySQL posterior. El controlador anterior no té opcions i funcionalitats (com ara el suport per als temps d\'espera de consulta) que permeten a Phabricator interactuar millor amb la base de dades. 
    Phabricator treballarà amb el conductor anterior, però es recomana actualitzar al conductor natiu. 
    Podeu instal·lar el controlador natiu amb una ordre com: %s',
      'By default, Phabricator links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => 'Per defecte, Phabricator enllaça els noms dels objectes dels camps ressaltats amb l\'objecte corresponent. Aquesta expressió regular es pot utilitzar per modificar aquest comportament; els noms d\'objectes que coincideixin amb aquesta expressió regular no es vincularan.',
      'Elasticsearch is configured (with the %s setting) but Phabricator encountered an exception when trying to test the index.
    %s' => 'Elasticsearch està configurat (amb el paràmetre %s) però Phabricator ha trobat una excepció en intentar fer la prova l\'índex. 
    %s',
      'Normally, Phabricator issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, Phabricator will show a page instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => 'Normalment, Phabricator emet redireccions HTTP després d\'una PUBLICACIÓ amb èxit. Això pot dificultar la depuració de les coses que ocorren mentre es processa l\'ENTRADA, perquè es perd informació de servei i perfil. En establir aquesta opció de configuració, Phabricator mostrarà una pàgina en lloc de redirigir automàticament, permetent-vos examinar la informació del servei i l\'anàlisi de perfils. També fa que l\'UX sigui horrible, així que només l\'haureu d\'habilitar quan depureu.',
      'No performance sampling.' => 'Cap mostreig de rendiment.',
      'Opcode Cache' => 'Caché d\'Opcode',
      'Specify a value to set the configuration key "%s" to, or use "--stdin" to read a value from stdin.' => 'Especifiqueu un valor per establir la clau de configuració \'%s\' o utilitzeu "--stdin" per llegir un valor de stdin.',
      'ID of the SSH key used to authenticate the request.' => 'Identificador de la clau SSH utilitzada per autenticar la sol·licitud.',
      'The HTTP referrer.' => 'El referent HTTP.',
      'Determines whether Wikimedia Commons videos get embedded.' => 'Determina si s’incrusten els vídeos de Wikimedia Commons.',
      'Better Collation Available' => 'Millor confrontació disponible',
      'No REMOTE_ADDR available' => 'Cap ADDR_REMOT disponible',
      'File storage in Amazon S3 has been partially configured, but you are missing some required settings. S3 will not be available to store files until you complete the configuration. Either configure S3 fully or remove the partial configuration.' => 'L\'emmagatzematge de fitxers a Amazon S3 s\'ha configurat parcialment, però us falten alguns paràmetres necessaris. S3 no estarà disponible per emmagatzemar fitxers fins que no completeu la configuració. Configureu S3 completament o elimineu la configuració parcial.',
      'The logged-in user PHID, if one is logged in.' => 'El PHID de l\'usuari que ha iniciat sessió, si n\'hi ha una iniciada.',
      'HTTP Path Rewriting Incorrect' => 'La reescriptura de la ruta HTTP és incorrecta',
      'Surplus' => 'Sobrant',
      'You have enabled Imagemagick in your config, but the \'%s\' binary is not in the webserver\'s %s. Disable imagemagick or make it available to the webserver.' => 'Heu activat Imagemagick a la configuració, però el binari \'%s\' no es troba al %s del servidor web. Desactiveu imagemagick o feu-lo disponible per al servidor web.',
      'Instance identifier for multi-tenant clusters.' => 'Identificador d\'instància per a clústers multi-arrendadors.',
      'Upgrade MySQL Schema' => 'Actualitzeu l\'esquema MySQL',
      'Automatically sample some fraction of requests.' => 'Mostreja automàticament fraccions de sol·licituds.',
      'SSH log location.' => 'Ubicació del registre SSH.',
      'These paths get appended to your %s environment variable.' => 'Aquests camins s\'afegeixen a la variable d\'entorn %s.',
      'These alternative URIs will be able to access \'normal\' pages on your Phabricator install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'Aquests URI alternatius podran accedir a pàgines \'normals\' de la vostra instal·lació de Phabricator. Altres funcionalitats com OAuth no funcionaran. El cas d\'ús principal per a això és moure instal·lacions entre dominis.',
      'Epoch timestamp.' => 'Segell de temps d’època.',
      'Woe! This request had its journey cut short by unexpected circumstances (%s).' => 'Ai! Aquesta sol·licitud es va veure interrompuda per circumstàncies inesperades (%s).',
      'Customizes retention policies for garbage collectors.' => 'Personalitza les polítiques de retenció dels col·lectors d’escombraries.',
      'You can usually install a PHP extension using %s or %s. Common package names are %s or %s. Try commands like these:' => 'Normalment podeu instal·lar una extensió PHP amb %s o %s. Els noms habituals dels paquets són de %s o %s. Proveu ordres com aquestes:',
      'This schema can use a better column type.' => 'Aquest esquema pot utilitzar un tipus de columna millor.',
      'The request date.' => 'La data de petició.',
      'Note that the default format is subject to change in the future, so if you rely on the log\'s format, specify it explicitly.' => 'Tingueu en compte que el format per defecte està subjecte a canvis en el futur, de manera que si confieu en el format del registre, especifiqueu-ho explícitament.',
      'Installed on Burstable CPU Instance' => 'S\'ha instal·lat a instàncies d\'una CPU de ràfega',
      'MySQL is Using Default Minimum Word Length' => 'MySQL utilitza la longitud mínima de paraula predeterminada',
      'In places that we display a dropdown to syntax-highlight code, this is where that list is defined.' => 'Als llocs que mostrem un menú desplegable per a ressaltar la sintaxi, aquí es defineix aquesta llista.',
      'Phabricator daemons no longer use PID files.' => 'Els dimonis de Phabricator ja no utilitzen fitxers PID.',
      'PHP setting "%s" should be set to "-1" to avoid deprecation warnings.' => 'El paràmetre de PHP \'%s\' s\'ha d\'establir a \'-1\' per evitar avisos de deprecació.',
      'Text values that match this regex and are also object names will not be linked.' => 'Els valors de text que coincideixin amb aquesta expressió regular i que també siguin noms d\'objectes no es vincularan.',
      '%s Held / %sms' => '%s retingut / %s ms',
    );
  }

}
