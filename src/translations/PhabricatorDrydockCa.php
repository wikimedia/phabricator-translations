<?php

final class PhabricatorDrydockCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'All Operations' => 'Totes les Operacions',
      'Repository Operation %d' => 'Operació del repositori %s',
      'Failed to acquire slot locks: %s.' => 'No s\'han pogut adquirir els bloqueigs de ranura: %s.',
      'Authorized Object' => 'Objecte autoritzat',
      'Resource' => 'Recurs',
      'Lease has unknown status "%s".' => 'L\'arrendament té un estat desconegut "%s".',
      'Show Details' => 'Mostra els detalls',
      'This change could not be fetched from the remote.' => 'Aquest canvi no s\'ha pogut recuperar des del remot.',
      'Resource "%s" is not releasable.' => 'El recurs «%s» no es pot alliberar.',
      'Search engine has no blueprint, resource, lease, or operation.' => 'El motor de cerca no té cap blueprint, recurs, arrendament ni operació.',
      'Not Acquired' => 'No adquirit',
      'Lease "%s" is not releasable.' => 'L\'arrendament "%s" no és alliberable.',
      'Scheduled release of resource "%s".' => 'Alliberament planificat de recurs "%s".',
      'This operation has already been dismissed, and can not be dismissed any further.' => 'Aquesta operació ja s\'ha desestimat i no es pot descartar més.',
      'Lease %d' => 'Arrendament %s',
      'Blueprint' => 'Blueprint',
      'Staging Area Skipped' => 'S\'ha omès l\'àrea de preparació',
      'Committing this change failed. It may already have been merged.' => 'No s\'ha pogut validar aquest canvi. És possible que ja s’hagi fusionat.',
      'Drydock Blueprints' => 'Blueprints de Drydock',
      'Release a lease.' => 'Alliberar un arrendament.',
      'Queued lease for activation:' => 'Arrendament a la cua per activar:',
      'The PHID of the object that authorized this lease.' => 'El PHID de l\'objecte que ha autoritzat aquest arrendament.',
      'Set lease expiration time.' => 'Estableix el temps de caducitat de l\'arrendament.',
      'Unable to parse argument to "%s".' => 'No es pot analitzar sintàcticament l\'argument a \'%s\'.',
      'Active Authorizations' => 'Autoritzacions actives',
      'Allows Drydock to lease existing hosts defined in an Almanac service pool.' => 'Permet que Drydock arrendi hosts existents definits en un conjunt de serveis Almanac.',
      'Drydock Console' => 'Consola Drydock',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" without acquiring a lease.' => 'El blueprint "%s" (del tipus "%s") no està implementat correctament: va tornar de "%s" sense adquirir un arrendament.',
      'Type of blueprint.' => 'Tipus de blueprint.',
      '%s enabled this blueprint.' => '%s ha activat aquest blueprint.',
      'Waiting to land revision into %s on %s...' => 'A l\'espera que la revisió aterri a %s sobre %s...',
      'Resource type.' => 'Tipus de recurs.',
      'No blueprints found.' => 'No s\'ha trobat cap blueprint.',
      'Trying to allocate a resource with no generated PHID. Use "%s" to create new resource templates.' => 'S\'està intentant assignar un recurs sense un PHID generat. Utilitzeu "%s" per crear noves plantilles de recursos.',
      'Edit Blueprint' => 'Edita el blueprint',
      'Disable Blueprint' => 'Desactiva el blueprint',
      'Blueprint Type' => 'Tipus de blueprint',
      'Logs' => 'Registres',
      'Specify one or more resource IDs to update with "%s".' => 'Especifiqueu un o més ID de recursos per actualitzar amb \'%s\'.',
      'Specify one or more lease IDs to release with "%s".' => 'Especifiqueu un o més IDs d\'arrendament per alliberar amb "%s".',
      'Show Only Disabled Blueprints' => 'Mostra només els blueprints desactivats',
      'Retrieve information about Drydock resources.' => 'Rescata informació sobre recursos Drydock.',
      'Type a resource name...' => 'Tecleja un nom de recurs...',
      'Hide Details' => 'Amagar els detalls',
      'Drydock Authorization' => 'Autorització de Drydock',
      'Resource %d: %s' => 'Recurs %s: %s',
      'This lease does not list any usable blueprints.' => 'Aquest arrendament no inclou cap blueprint útil.',
      'Lease activation failed: [%s] %s' => 'L\'activació de l\'arrendament ha fallat: [%s] %s',
      'Resource %d' => 'Recurs %s',
      'When this diff was generated, the repository was not configured with a staging area, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'En generar-se aquesta diferència, el repositori no s\'ha configurat amb una àrea de preparació, de manera que el canvi no s\'ha traslladat a la zona de preparació. Els canvis s’han d’incloure a la zona de preparació abans que es puguin aterrar des del web.',
      'This revision has been abandoned. Only accepted revisions may land.' => 'Aquesta revisió ha estat descatalogada. Només es poden aterrar les revisions acceptades.',
      'Retrieve information about Drydock blueprints.' => 'Rescata informació sobre els blueprints del Drydock.',
      'Drydock Resources' => 'Recursos de Drydock',
      'Resource Type' => 'Tipus de recurs',
      'The object which authorized this lease (%s) is not authorized to use any of the blueprints the lease lists. Approve the authorizations before using the lease.' => 'L\'objecte que va autoritzar aquest arrendament (%s) no està autoritzat a utilitzar cap dels blueprints de les llistes d\'arrendaments. Aproveu les autoritzacions abans d’utilitzar l’arrendament.',
      'Diff ("%s") has wrong revision ID ("%s", expected "%s").' => 'La Diff (\'%s\') té un identificador de revisió incorrecte (\'%s\', que s\'esperava \'%s\').',
      'Trying to acquire lease ("%s") on a resource ("%s") in the wrong status ("%s").' => 'S\'està intentant adquirir un arrendament (\'%s\') d\'un recurs (\'%s\') amb un estat incorrecte (\'%s\').',
      'Drydock Authorization %d' => 'Autorització del Drydock %s',
      'This blueprint has no active resources.' => 'Aquest blueprint no té cap recurs actiu.',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" with a lease acquired on the wrong resource.' => 'El blueprint \'%s\' (del tipus \'%s\') no està implementat correctament: va tornar de \'%s\' amb un arrendament adquirit per un recurs incorrecte.',
      'This revision is not associated with a known repository. Only revisions associated with a tracked repository can be landed automatically.' => 'Aquesta revisió no està associada amb un repositori conegut. Només es poden aterrar automàticament les revisions associades amb un repositori de seguiment.',
      'Stdout' => 'Stdout',
      'Failed to acquire lock for resource ("%s") while trying to acquire lease ("%s").' => 'No s\'ha pogut obtenir el bloqueig del recurs (\'%s\') en intentar adquirir un arrendament (\'%s\').',
      'Trying to activate lease with no resource.' => 'Intentant activar l’arrendament sense recursos.',
      'Via:' => 'Via:',
      'Operation Status' => 'Estat de l\'operació',
      'Slot Lock Failure' => 'Error de bloqueig de ranures',
      'Blueprint "%s" (of type "%s") is not properly implemented: %s must return an object of type %s or throw, but returned something else.' => 'El blueprint \'%s\' (de tipus \'%s\') no està implementat correctament: %s ha de retornar un objecte de tipus %s o llançar, però va tornar una altra cosa.',
      'Unknown repository operation target type "%s" (in target "%s").' => 'Tipus de destinació d\'operació de repositori desconeguda "%s" (a l\'objectiu "%s").',
      'Drydock commands have the same policies as their targets.' => 'Les ordres Drydock tenen les mateixes polítiques que els seus objectius.',
      'The diff was generated from a raw input source, so the change could not be pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'La diff es va generar a partir d\'una font de dades a pèl, de manera que no es va poder introduir el canvi a l\'àrea de preparació. Els canvis s’han d’introduir a la zona de preparació abans que puguin aterrar des del web.',
      'Host (%s)' => 'Amfitrió (%s)',
      'Drydock Repository Operations' => 'Operacions del repositori Drydock',
      'Search leases by resource.' => 'Cercar arrendaments per recurs.',
      'Browse Blueprints' => 'Consulteu els blueprint',
      'No objects have active authorizations to use this blueprint.' => 'Cap objecte té autoritzacions actives per utilitzar aquest blueprint.',
      'You do not have permission to create Drydock blueprints.' => 'No teniu permís per crear plans de Drydock.',
      'Name of the blueprint.' => 'Nom del blueprint.',
      'Really release resource?' => 'Voleu alliberar el recurs?',
      'Already Dismissed' => 'Ja rebutjat',
      'Dismiss this operation? It will no longer be shown, but logs can be found in Drydock.' => 'Voleu ignorar aquesta operació? Ja no es mostrarà, però es poden trobar registres a Drydock.',
      'Resource "%s" was reclaimed.' => 'S\'ha recuperar el recurs \'%s\'.',
      'Default Blueprint View Policy' => 'Política de visualització del blueprint predeterminat',
      'Allows Drydock to check out working copies of repositories.' => 'Permet que Drydock comprovi les còpies de treball dels repositoris.',
      'Lease released.' => 'Arrendament alliberat.',
      'Unknown Repository' => 'Repositori desconegut',
      'Lease "%s" does not exist.' => 'L\'arrendament \'%s\' no existeix.',
      'All blueprints failed to allocate a suitable new resource when trying to allocate lease ("%s").' => 'Cap blueprint ha pogut assignar un recurs nou adequat en intentar assignar un arrendament (\'%s\').',
      'Enable Blueprint' => 'Activa el blueprint',
      'When this diff was generated, the server was running an older version of Phabricator which did not support staging areas, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Quan es va generar la diferència, el servidor estava executant una versió anterior de Phabricator que no admetia zones de preparació, de manera que el canvi no es va introduir a la zona de preparació. Els canvis s’han d’introduir a la zona de preparació abans que es puguin aterrar des del web.',
      'Authorization State' => 'Estat d\'autorització',
      'One or more blueprints promised a new resource, but failed when allocating: [%s] %s' => 'Un o diversos blueprints van prometre un recurs nou, però van fallar en assignar: [%s] %s',
      'Revision Closed' => 'Revisió tancada',
      'Update a resource.' => 'Actualitza un recurs.',
      'Search for resources generated by particular blueprints.' => 'Cerqueu recursos generats per blueprints concrets.',
      'Lease has already been released!' => 'L\'arrendament ja ha estat alliberat!',
      'Lease has been broken!' => 'L\'arrendament s\'ha trencat!',
      'This revision is already landing.' => 'Aquesta revisió està aterrant.',
      'Hide Disabled Blueprints' => 'Oculta els blueprints desactivats',
      'Search authorizations from specific objects.' => 'Cerca autoritzacions d\'objectes específics.',
      'Drydock Leases' => 'Arrendament en Drydock',
      'A repository operation inherits the policies of the repository it affects.' => 'Una operació de dipòsit repositori les polítiques del repositori que afecta.',
      'Unable to load lease with ID "%s"!' => 'No es pot carregar l\'arrendament amb ID "%s"!',
      'Working' => 'Treballant',
      'Success! Automation is configured properly and Drydock can operate on %s.' => 'Èxit! L\'automatització està configurada correctament i el Drydock pot funcionar a %s.',
      'Configure blueprints so Drydock can build resources, like hosts and working copies.' => 'Configureu els blueprints perquè Drydock pugui crear recursos, com ara amfitrions i còpies de treball.',
      'Edit Blueprint: %s' => 'Edita el blueprint: %s',
      'All Authorizations' => 'Totes les autoritzacions',
      'Unable to pop working directory, directory stack is empty.' => 'No es pot fer emergir el directori de treball, la pila de directoris està buida.',
      'Unknown blueprint field "%s"!' => 'Camp desconegut de blueprint \'%s\'.',
      'Dismiss Operation' => 'Ignorar la operació',
      'Trying to activate a resource from the wrong status. Status must be "%s", actually "%s".' => 'S\'està intentant activar un recurs amb un estat incorrecte: l\'estat ha de ser \'%s\', és \'%s\'.',
      'Retrieve information about Drydock leases.' => 'Rescata informació sobre els arrendaments de Drydock.',
      'Operation' => 'Operació',
      '"%s" (owned by "%s")' => '"%s" (propietat de "%s")',
      'All Resources' => 'Tots els recursos',
      'The string constant and name of this lease\'s status.' => 'La constant de cadena i el nom de l\'estat d\'aquest arrendament.',
      'Client Support Unavailable' => 'Assistència al client no disponible',
      'Resource reclaimed by %s.' => 'Recurs recuperat per %s.',
      'Leases' => 'Arrendaments',
      'Lease Queued' => 'Arrendament en cua',
      'Commands' => 'Ordres',
      'Drydock Resource' => 'Recurs de Drydock',
      'If you disable this blueprint, Drydock will no longer use it to allocate new resources. Existing resources will not be affected.' => 'Si desactiveu aquest blueprint, Drydock ja no el farà servir per assignar nous recursos. Els recursos existents no es veuran afectats.',
      'The repository this revision is associated with ("%s") is not configured to support automation. Configure automation for the repository to enable revisions to be landed automatically.' => 'El repositori al qual s\'associa aquesta revisió ("%s") no està configurat per admetre l\'automatització. Configureu l\'automatització del repositori per permetre que les revisions hi aterrin automàticament.',
      'Staging Unavailable' => 'Zona de preparació inutilitzable',
      'Blueprint type "%s" is not valid. Valid types are: %s.' => 'El tipus de blueprint "%s" no és vàlid. Els tipus vàlids són: %s.',
      'Review the repository operation queue.' => 'Revisa la cua de l\'operació del repositori.',
      'Unable to Push' => 'No es pot empènyer',
      'Specify a resource type with `%s`.' => 'Especifica un tipus de recurs amb `%s`.',
      'This revision has already been closed. Only open, accepted revisions may land.' => 'Aquesta revisió ja ha estat tancada. Només les revisions obertes i acceptades poden aterrar.',
      'Lease Released' => 'Arrendament alliberat.',
      'No Authorizations' => 'Cap Autorització',
      'PHID of the leased resource, if any.' => 'PHID del recurs arrendat, si n\'hi ha.',
      'Lease a resource.' => 'Arrenda un recurs.',
      'Failed to acquire slot locks.' => 'No s\'han pogut adquirir els bloqueigs de ranures.',
      'Unable to acquire slot locks: %s.' => 'No s\'han pogut adquirir els bloqueigs de ranura: %s.',
      'Activation complete. This lease is permanent until manually released with:' => 'Activació completada. Aquest arrendament és permanent fins que s’alliberi manualment amb:',
      'Authorization state of this request.' => 'Estat d\'autorització d\'aquesta sol·licitud.',
      'No such operation "%s"!' => 'No hi ha cap operació \'%s\'.',
      'No matching operations.' => 'No hi ha operacions coincidents.',
      'Permanent failure while activating lease ("%s"): %s' => 'Error permanent en activar l\'arrendament ("%s"): %s',
      'Run a command on a leased resource.' => 'Executeu una ordre en un recurs arrendat.',
      'When the diff was generated, the client was not able to determine which repository it belonged to, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Quan es va generar la diferència, el client no va poder determinar a quin repositori pertanyia, de manera que el canvi no es va introduir a la zona de preparació. Els canvis s’han d’introduir a la zona de preparació abans que puguin aterrar des del web.',
      'PHID of the object which requested authorization.' => 'PHID de l\'objecte que ha sol·licitat l\'autorització.',
      'Scheduled release of lease "%s".' => 'Alliberament planificat de l\'arrendament \'%s\'.',
      'Blueprint %d: %s' => 'Blueprint %s: %s',
      'Drydock Authorizations' => 'Autoritzacions de Drydock',
      'Search authorizations for specific blueprints.' => 'Cerqueu autoritzacions per obtenir blueprints específics.',
      'Started this operation in a working copy.' => 'S\'ha iniciat aquesta operació en una còpia de treball.',
      'Operation %d' => 'Operació %s',
      'This change could not be fetched from the remote staging area. It may not have been pushed, or may have been removed.' => 'Aquest canvi no s\'ha pogut recuperar des de l\'àrea de preparació remota. Pot ser que no s’hagi empès o que s’hagi eliminat.',
      'Slot Locks' => 'Bloqueigs de ranura',
      'Trying to allocate a resource from the wrong status. Status must be "%s", actually "%s".' => 'S\'està intentant assignar un recurs amb un estat incorrecte: l\'estat ha de ser \'%s\', és \'%s\'.',
      'No slot locks held.' => 'No hi ha bloquejos de ranures retinguts.',
      'Decline this authorization? The object will not be able to lease or allocate resources created by this blueprint.' => 'Voleu rebutjar aquesta autorització? L\'objecte no podrà arrendar ni assignar els recursos creats per aquest blueprint.',
      '<Unknown>' => '<Desconegut>',
      'Can Create Blueprints' => 'Es poden crear blueprints',
      'Lease ("%s") is in bad state ("%s"), expected "%s".' => 'L\'arrendament (\'%s\') està en mal estat (\'%s\'), s\'esperava \'%s\'.',
      'Lock Key' => 'Bloqueja la clau',
      'Leases can not be released after they are destroyed.' => 'Els arrendaments no poden ser alliberats després de ser destruïts.',
      'No Repository' => 'Cap Repositori',
      'Create New Blueprint' => 'Crea un blueprint nou',
      'Allocate Software Resources' => 'Assignar recursos de programari',
      'Lease ID to update.' => 'ID d\'arrendament per actualitzar.',
      'Apply transactions to create or edit a blueprint.' => 'Apliqueu transaccions per crear o editar un blueprint.',
      'Release Resource' => 'Alliberar el recurs',
      'Approve this authorization? The object will be able to lease and allocate resources created by this blueprint.' => 'Voleu aprovar aquesta autorització? L\'objecte podrà arrendar i assignar els recursos creats per aquest blueprint.',
      'An authorization inherits the policies of the blueprint it authorizes access to.' => 'Una autorització hereta les polítiques del blueprint al qual autoritza l\'accés.',
      'Forcefully releasing a lease may interfere with the operation of the lease holder and trigger destruction of the underlying resource. It can not be undone.' => 'Alliberar amb força un arrendament pot interferir en el funcionament de qui reté l’arrendament i provocar la destrucció del recurs subjacent. No es pot desfer.',
      'All Blueprints' => 'Tots els blueprint',
      'Lease destroyed.' => 'Arrendament destruït.',
      'The PHID of the object that owns this lease.' => 'El PHID de l\'objecte propietari d\'aquest arrendament.',
      'Lease activated.' => 'Arrendament activat.',
      'This resource has no active leases.' => 'Aquest recurs no té arrendaments actius.',
      'Lease queued for acquisition.' => 'Un arrendament va fer cua per adquirir-lo.',
      'Resource "%s" could not be reclaimed.' => 'No s\'ha pogut recuperar el recurs "%s".',
      'When this diff was generated, the client did not support staging areas for this version control system, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web. Updating the client may resolve this issue.' => 'Quan es va generar aquesta diferència, el client no era compatible amb les àrees de preparació per a aquest sistema de control de versions, de manera que el canvi no es va enviar a l\'àrea de preparació. Els canvis s’han d’introduir a la zona de preparació abans de poder aterrar des del web. L\'actualització del client pot resoldre aquest problema.',
      'No blueprints exist which can plausibly allocate resources to satisfy the requested lease.' => 'No existeixen blueprints que puguin assignar plausiblement recursos per satisfer l\'arrendament sol·licitat.',
      'The push failed. This usually indicates that the change is breaking some rules or some custom commit hook has failed.' => 'L\'empenta va fallar. Normalment, això indica que el canvi infringeix algunes regles o que ha fallat un hook de validació personalitzat.',
      'Maximum number of resources this blueprint can have active concurrently.' => 'Nombre màxim de recursos que aquest blueprint pot tenir actius simultàniament.',
      'Lease ID to release.' => 'ID d\'arrendament per alliberar.',
      'Authorization state of the requesting object.' => 'Estat d\'autorització de l\'objecte sol·licitant.',
      'Repository Operation' => 'Operació del repositori',
      'Drydock resource ("%s") has no Almanac binding PHID, so its binding can not be loaded.' => 'El recurs Drydock ("%s") no té cap PHID de vinculació d\'Almanac, de manera que no es pot carregar el seu vincle.',
      'Manage leases on resources.' => 'Gestionar els arrendaments de recursos.',
      'The type of a blueprint can not be changed once it has been created.' => 'Nombre màxim de recursos que aquest blueprint pot tenir actius simultàniament.',
      'Trying to acquire an active lease on a pending resource. You can not immediately activate leases on resources which need time to start up.' => 'Intentant adquirir un arrendament actiu d’un recurs pendent. No es poden activar immediatament els arrendaments de recursos que necessiten temps per iniciar-se.',
      'Invalid or unknown object ("%s") for land operation, expected Differential Revision.' => 'Objecte no vàlid o desconegut ("%s") per fer aterrar l\'operació, s\'espera una Revisió Diferencial.',
      'View and manage resources Drydock has built, like hosts.' => 'Veure i gestionar els recursos que Drydock ha creat, com ara amfitrions.',
      'This revision is still under review. Only revisions which have been accepted may land.' => 'Aquesta revisió encara s\'està revisant. Només es poden aterrar les revisions que s’han acceptat.',
      'Lease Activated' => 'Arrendament activat',
      '%s renamed this blueprint from %s to %s.' => '%s ha reanomenat aquest blueprint de %s a %s.',
      'No active Drydock blueprint exists which can ever allocate a resource for lease "%s".' => 'No existeix cap blueprint actiu de Drydock que pugui assignar un recurs per arrendar \'%s\'.',
      'Release Lease?' => 'Alliberar un arrendament?',
      'Default Blueprint Edit Policy' => 'Política d\'edició del blueprint predeterminat',
      'Blueprint "%s" (of type "%s") is not properly implemented: it built a resource of type "%s" to satisfy a lease requesting a resource of type "%s".' => 'El blueprint "%s" (del tipus "%s") no està implementat correctament: va crear un recurs del tipus "%s" per satisfer un arrendament que sol·licita un recurs del tipus "%s".',
      'Testing configuration for %s. This may take a moment if Drydock has to clone the repository for the first time.' => 'Configuració de proves per %s. Això pot trigar un moment si Drydock ha de clonar el repositori per primer cop.',
      'Type a lease ID (exact match)...' => 'Tecleja un identificador d\'arrendament (concordança exacta)...',
      'Resource ID to release.' => 'ID de recurs per alliberar.',
      'Reclaimed Resources' => 'Recursos recuperats',
      'Unable to acquire slot locks.' => 'No es poden adquirir bloqueigs de ranura.',
      'Unable to load lease ("%s").' => 'No es pot carregar l\'arrendament (\'%s\').',
      'Trying to activate a lease which has the wrong status: status must be "%s", actually "%s".' => 'S\'està intentant activar un arrendament amb un estat incorrecte: l\'estat ha de ser \'%s\', en realitat \'%s\'.',
      'You must choose a blueprint type.' => 'Has d\'escollir un tipus de blueprint.',
      'Release a resource.' => 'Allibera un recurs.',
      'Lease acquired.' => 'Arrendament adquirit.',
      'Blueprint "%s" (of type "%s") is not properly implemented: %s must actually allocate the resource it returns.' => 'El blueprint \'%s\' (del tipus \'%s\') no està implementat correctament: %s ha d\'assignar el recurs que retorna.',
      'Revision landed into %s.' => 'La revisió va aterrar a %s.',
      'Waiting %s second(s) for lease to activate.' => 'S\'està esperant 1%s segons per activar l\'arrendament.',
      'Landing revision into %s on %s...' => 'Aterrant la revisió a %s el %s...',
      'All Leases' => 'Tots els arrendaments',
      'Search for blueprints by name substring.' => 'Cerqueu blueprint per subcadena de nom.',
      'Reclaimed resource %s.' => 'Recurs recuperat %s.',
      'Blueprint type.' => 'Tipus de blueprint.',
      'Repository PHID "%s" does not exist.' => 'El PHID del repositori "%s" no existeix.',
      'This change did not merge cleanly. This usually indicates that the change is out of date and needs to be updated.' => 'Aquest canvi no es va fusionar netament. Això sol indicar que el canvi no està actualitzat i cal actualitzar-lo.',
      'Repository ("%s") has unsupported VCS ("%s").' => 'El repositori ("%s") té VCS no suportat ("%s").',
      'Drydock Logs' => 'Registres del Drydock',
      'Repository Unsupported' => 'Repositori no compatible',
      'Type of resource being leased.' => 'Tipus de recurs arrendat.',
      'Resources can not be released after they are destroyed.' => 'Els recursos no es poden alliberar després de ser destruïts.',
      'Specify one or more resource IDs to release with "%s".' => 'Especifiqueu un o més identificadors de recursos per alliberar amb \'%s\'.',
      'Only private key credentials are supported.' => 'Només s\'admeten les credencials de clau privada.',
      'New Blueprint' => 'Blueprint nou',
      'Trying to activate a lease on a pending resource.' => 'Intentant activar un arrendament d’un recurs pendent.',
      'Blueprint names can be no longer than %s characters.' => 'Els noms del blueprint no poden contenir més de %s caràcters.',
      'Lease' => 'Arrendament',
      'Lease Not Releasable' => 'Arrendament no alliberable',
      'Specify one or more lease IDs to update with "%s".' => 'Especifiqueu un o més ID d\'arrendament per actualitzar amb «%s».',
      'The name of this blueprint.' => 'El nom d\'aquest blueprint.',
      'Use %s to specify a lease.' => 'Utilitzeu %s per especificar un arrendament.',
      'Some of the Almanac Services defined by this blueprint could not be loaded. They may be invalid, no longer exist, or be of the wrong type: %s.' => 'No s\'han pogut carregar alguns dels serveis d\'Almanac definits en aquest blueprint. Pot ser que no siguin vàlids, ja no existeixin o siguin del tipus equivocat: %s.',
      '%s created this blueprint.' => '%s ha creat aquest blueprint.',
      'JSON file with lease attributes. Use "-" to read attributes from stdin.' => 'Fitxer JSON amb atributs d’arrendament. Utilitzeu \'-\' per llegir els atributs de stdin.',
      'Unable to load Almanac binding ("%s") for resource ("%s").' => 'No es pot carregar el vincle d\'Almanac (\'%s\') per al recurs (\'%s\').',
      'Blueprint %d' => 'Blueprint %s',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" without activating a lease.' => 'El blueprint "%s" (del tipus "%s") no està implementat correctament: va tornar de "%s" sense activar un arrendament.',
      'Operation encountered an error while performing repository operations.' => 'L\'operació ha detectat un error en realitzar les operacions del repositori.',
      'If you enable this blueprint, Drydock will start using it to allocate new resources.' => 'Si activeu aquest blueprint, Drydock començarà a utilitzar-lo per assignar nous recursos.',
      'Blueprint failed to allocate a resource after claiming it would be able to: [%s] %s' => 'El blueprint no ha pogut assignar un recurs després de reclamar que en seria capaç de: [%s] %s',
      'Releasing a resource releases all leases and destroys the resource. It can not be undone.' => 'L’alliberament d’un recurs allibera tots els arrendaments i destrueix el recurs. No es pot desfer.',
      '%s disabled this blueprint.' => '%s ha desactivat aquest blueprint.',
      'Trying to activate a resource which has not yet been persisted.' => 'Provant d\'activar un recurs que no s\'ha mantingut.',
      'Blueprint type "%s" is unrecognized. Valid types are: %s.' => 'El tipus de blueprint "%s" no es reconeix. Els tipus vàlids són: %s.',
      'Blueprints must have a name.' => 'Els blueprints han de tenir un nom.',
      'Waiting for daemons to activate lease...' => 'S\'està esperant que els dimonis activin l\'arrendament...',
      'Unable to build resource interface of type "%s".' => 'No es pot construir la interfície de recursos del tipus \'%s\'.',
      'Lease Destroyed' => 'Arrendament destruït',
      'Active Leases' => 'Arrendaments actius',
      'Resources inherit the policies of their blueprints.' => 'Els recursos hereten les polítiques dels seus blueprints.',
      'Active Blueprints' => 'Blueprints actius',
      'When creating a blueprint, set the type.' => 'Quan creeu un blueprint, configureu el tipus.',
      'When this diff was generated, the server was running an older version of Phabricator which did not support staging areas for this version control system, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Quan es va generar aquesta diff, el servidor estava executant una versió anterior de Phabricator que no admetia les àrees de preparació per a aquest sistema de control de versions, de manera que el canvi no es va impulsar a la zona de preparació. Els canvis s\'han d\'empènyer a la zona de preparació abans que es puguin aterrar des de la web.',
      'To view log details, you must be able to view all associated blueprints, resources, leases, and repository operations.' => 'Per veure els detalls del registre, heu de poder veure tots els blueprints, recursos, arrendaments i operacions de repositoris associats.',
      'Raw Diff Source' => 'Font de diferències a pèl',
      'Edit Drydock Blueprint Configurations' => 'Editeu les configuracions del blueprint BlueDock',
      'PHID of the blueprint this request was made for.' => 'PHID del blueprint per al qual s\'ha fet aquesta sol·licitud.',
      'Unable to acquire lease "%s" on any resource.' => 'No es pot adquirir l\'arrendament \'%s\' per a cap recurs.',
      'Lease has already been destroyed!' => 'L’arrendament ja ha estat destruït!',
      'The blueprint which generated this resource.' => 'El blueprint que va generar aquest recurs.',
      'Create Blueprint' => 'Crea un blueprint',
      'Retrieve information about Drydock authorizations.' => 'Rescata informació sobre les autoritzacions del Drydock.',
      'Repository Unconfigured' => 'Repositori sense configurar',
      'Only new leases may be queued for activation!' => 'Només es poden posar a la cua nous arrendaments per activar-los!',
      'This blueprint ("%s") does not define any Almanac Service PHIDs.' => 'Aquest blueprint (\'%s\') no defineix cap PHID de serveis d\'Almanac.',
      'The diff author used the %s flag to skip pushing this change to staging. Changes must be pushed to staging before they can be landed from the web.' => 'L\'autor del diff ha utilitzat l\'indicador %s per ometre la pujada d\'aquest canvi a l\'àrea de preparació. Els canvis s\'han d\'empènyer a l\'àrea de preparació abans que es puguin aterrar des de la web.',
      'Trying to queue a lease for activation without any allowed Blueprints. Use "%s" to specify allowed blueprints. The authorizing object must be approved to use the allowed blueprints.' => 'Intentant posar a la cua un arrendament per activar-lo sense cap blueprint permès. Utilitzeu \'%s\' per especificar els blueprints permesos. Cal tenir l\'autorització aprovada per utilitzar els blueprints permesos.',
      'Lease Acquired' => 'Arrendament adquirit',
      'Resource Not Releasable' => 'El recurs no es pot alliberar',
      'You must select a blueprint type when creating a blueprint.' => 'Has de seleccionar un tipus de blueprint quan creeu un blueprint.',
      'The type of resource this blueprint provides.' => 'El tipus de recurs que proporciona aquest blueprint.',
      'This revision has already landed.' => 'Aquesta revisió ja ha aterrat.',
      'When this diff was generated, it was not pushed to staging for an unknown reason (the status code was "%s"). Changes must be pushed to staging before they can be landed from the web. The server may be running an out-of-date version of Phabricator, and updating may provide more information about this error.' => 'Quan es va generar aquesta diferència, no es va empènyer a la zona de preparació per una raó desconeguda (el codi d\'estat era "%s"). Els canvis s\'han d’introduir a la zona de preparació abans de poder aterrar des de la xarxa. El servidor pot estar executant una versió obsoleta de Phabricator, i l\'actualització pot proporcionar més informació sobre aquest error.',
      'Release Lease' => 'Alliberar l\'arrendament',
      'This engine is used to edit Drydock blueprints.' => 'Aquest motor s’utilitza per editar els blueprints de Drydock.',
      'Epoch at which this lease expires, if any.' => 'Època en què caduca aquest arrendament, si escau.',
      'Type a blueprint name...' => 'Tecleja un nom de blueprint...',
      'Trying to activate lease ("%s") on a resource ("%s") in the wrong status ("%s").' => 'S\'està intentant activar l\'arrendament («%s») en un recurs («%s») en l\'estat incorrecte («%s»).',
      'No Repository Automation' => 'Sense automatització de repositoris',
      'Trying to acquire a lease on a resource which is in the wrong state: status must be "%s", actually "%s".' => 'Intentant adquirir un arrendament d\'un recurs que es troba en un estat equivocat: l\'estat ha de ser \'%s\', en realitat \'%s\'.',
      'Lease activated in %sms.' => 'Arrendament activat en %s ms.',
      'Blueprints' => 'Blueprints',
      'Lease acquired a resource but failed to activate; acquisition will be retried: [%s] %s' => 'L\'arrendament ha adquirit un recurs però no ha pogut activar-lo; Es tornarà a intentar l\'adquisició: [%s] %s',
      'Search leases by owner.' => 'Cercar arrendaments per propietari.',
      'Repository Operations' => 'Operacions del repositori',
      'Leases inherit policies from the resources they lease.' => 'Els arrendaments hereten les polítiques dels recursos que arrenden.',
      'Drydock User Guide' => 'Guia de l\'usuari Drydock',
      'When creating a new Drydock blueprint via the Conduit API, you must provide a "type" transaction to select a type.' => 'Quan creeu un nou blueprint de Drydock mitjançant l\'API Conduit, heu de proporcionar una transacció "tipus" per seleccionar-ne un.',
      'Trying to queue a lease for activation without an authorizing object. Use "%s" to specify the PHID of the authorizing object. The authorizing object must be approved to use the allowed blueprints.' => 'Intentant posar a la cua un arrendament per activar-lo sense un objecte d\'autorització. Utilitzeu "%s" per especificar el PHID de l\'objecte d\'autorització. Cal tenir l\'autorització aprovada per utilitzar els blueprints permesos.',
      'Set the blueprint type.' => 'Definiu el tipus de blueprint.',
      'Lease ID.' => 'ID d\'arrendament.',
      'Unexpected failure while destroying lease ("%s").' => 'Error inesperat en destruir l\'arrendament (\'%s\').',
      'No Blueprints' => 'Cap blueprint',
      'You do not have permission to push to the repository this revision is associated with ("%s"), so you can not land it.' => 'No teniu permís per empènyer al repositori aquesta revisió està associada amb ("%s), de manera que no la podeu aterrar.',
      'Unable to allocate any binding as a resource.' => 'No es pot assignar cap vinculació com a recurs.',
    );
  }

}