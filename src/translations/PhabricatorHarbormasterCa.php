<?php

final class PhabricatorHarbormasterCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Build Artifact' => 'Artefacte de construcció',
      'Harbormaster Artifacts' => 'Artefactes d\'Harbormaster',
      'Updating build %d of buildable %s...' => 'S\'està actualitzant la construcció %s del %s construïble...',
      'Unable to Pause Build' => 'No es pot posar en pausa la construcció',
      'Search for builds by containing revision or repository.' => 'Cerqueu construccions contenint una revisió o un repositori.',
      'You do not have permission to restart this build.' => 'No teniu permís per reiniciar aquesta construcció.',
      'Buildkite did not return a "%s"!' => 'Buildkite no ha retornat cap \'%s\'!',
      'Behavior: %s' => 'Comportament: %s',
      'Build Passed' => 'Construcció aprovada',
      'Resume Build' => 'Reprèn la construcció',
      'Retrieve information about Harbormaster build targets.' => 'Rescata informació sobre els objectius de construcció de Harbormaster.',
      'Unable to identify the protocol for URI "%s". URIs must be fully qualified and have an identifiable protocol.' => 'No es pot identificar el protocol per a l\'URI "%s". Els URI han d’estar completament qualificats i tenir un protocol identificable.',
      'You only have permission to restart some builds.' => 'Només teniu permís per reiniciar algunes construccions.',
      'PHID of the object this build is building.' => 'PHID de l\'objecte que està construint aquesta construcció.',
      'No build plans found.' => 'No s\'ha trobat cap pla de construcció.',
      'Artifact "%s" not found!' => 'Artefacte "%s" no trobat!',
      'Run a command on Drydock resource.' => 'Executeu una ordre al recurs Drydock.',
      'Severity of the message.' => 'Severitat del missatge.',
      'Really restart builds?' => 'Voleu reiniciar les construccions?',
      'You only have permission to resume some builds. Work will continue on builds you have permission to resume.' => 'Només teniu permís per reprendre algunes construccions. Es continuarà treballant en les construccions que tingueu permís per reprendre.',
      'Unsound' => 'Dubtós',
      'Run a build in CircleCI.' => 'Executeu una construcció a CircleCI.',
      'View External Build Results' => 'Visualitza els resultats de la construcció externa',
      'Build with Buildkite' => 'Construeix amb Buildkite',
      'Attempt to load log bytes (%d - %d) failed: failed to load a single contiguous range. Actual ranges: %s.' => 'S\'ha produït un error en intentar carregar els bytes de registre (%s - %s): no s\'ha pogut carregar un interval contigu únic. Rangs reals: %s.',
      'The name of the build target.' => 'El nom de l\'objectiu de construcció.',
      'True if this artifact has been released.' => 'Cert si s’ha alliberat aquest artefacte.',
      'Browse Builds' => 'Navega per les construccions',
      'Expected "%s" property to contain a dictionary.' => 'S\'esperava que la propietat \'%s\' contingués un diccionari.',
      'You must have edit permission on this build plan to pause, abort, resume, or restart it.' => 'Heu de tenir permís d\'edició en aquest pla de construcció per aturar-lo, avortar-lo, reprendre\'l o reiniciar-lo.',
      'Unable to Restart Builds' => 'No es pot reiniciar les construccions',
      'Revisions are not sent for review until the build completes, but they will be sent for review even if it fails.' => 'Les revisions no s’envien a revisió fins que no s’acaba la construcció, però s’enviaran a revisió fins i tot si falla.',
      'Output Artifacts' => 'Artefactes de sortida',
      'Stores a reference to file data which has been uploaded to Phabricator.' => 'Emmagatzema una referència a les dades de fitxers que s\'han carregat a Phabricator.',
      'Manage Build Plans' => 'Gestioneu els plans de construcció',
      'Default Build Plan View Policy' => 'Política de visualització del pla de construcció predeterminat',
      'No builds can be resumed.' => 'No es pot reprendre cap construcció.',
      'Choose a build target to attach the log to with "--target".' => 'Trieu un objectiu de construcció al qual associar el registre amb "--target".',
      'Build Preparing' => 'Preparació de la construcció',
      'This test result has %s bytes of Remarkup test details. Remarkup blocks longer than %s bytes are not rendered inline when showing test summaries.' => 'Aquest resultat de la prova té %s bytes de detalls de la prova de ressaltat. Els blocs de notes de més de %s bytes no es renderitzen en línia quan es mostren resums de proves.',
      'This build can not be restarted because it is an automatic build.' => 'Aquesta construcció no es pot reiniciar perquè és una construcció automàtica.',
      'Specify exactly one buildable, by object name.' => 'Especifiqueu exactament un de construïble, per nom d\'objecte.',
      'This build is not paused. You can only resume a paused build.' => 'Aquesta construcció no està en pausa. Només podeu reprendre una construcció en pausa.',
      'Unable to Abort Build' => 'No es pot interrompre la construcció',
      'Build Target' => 'Construeix un objectiu',
      'Unable to determine how to fetch changes: this buildable does not identify a commit or a staging ref. You may need to configure a repository staging area.' => 'No es pot determinar com recuperar els canvis: aquest construïble no identifica cap ref. de validació ni de preparació. És possible que hàgiu de configurar una àrea de preparació del repositori.',
      'Failed to load build plan ("%s").' => 'No s\'ha pogut carregar el pla de construcció (\'%s\').',
      'Build Started' => 'S\'ha iniciat la construcció',
      'Build %d: %s' => 'Construcció %s: %s',
      '%s aborted this build.' => '%s ha interromput aquesta construcció.',
      'Disable Build Plan' => 'Desactiva el pla de construcció',
      'Search for targets of a given build.' => 'Cerqueu objectius d\'una construcció determinada.',
      'Enable Build Plan' => 'Activa el pla de construcció',
      'Webhook Token' => 'Testimoni de Webhook',
      'Publish a fragment based on a file artifact.' => 'Publicar un fragment basat en un artefacte de fitxer.',
      'When creating an artifact, you will choose an `artifactType` from this table. These types of artifacts are supported:' => 'Quan creeu un artefacte, escollireu un "artifactType" en aquesta taula. S’admeten aquests tipus d’artefactes:',
      'Aborting' => 'Avortant',
      'A buildable inherits policies from the underlying object.' => 'Un construïble hereta les polítiques de l\'objecte subjacent.',
      'Build Steps' => 'Construir les etapes',
      'Harbormaster Builds' => 'Construccions de Harbormaster',
      '%s paused this build.' => '%s ha posat en pausa aquesta construcció.',
      '%s created this build step.' => '%s ha creat aquest pas de construcció.',
      'Buildable Name' => 'Nom construïble',
      'This object does not support builds with Buildkite.' => 'Aquest objecte no admet construccions amb Buildkite.',
      'Compress, decompress, store or destroy build logs.' => 'Comprimir, descomprimir, emmagatzemar o destruir registres de construcció.',
      'The build the target is associated with.' => 'La construcció a la qual s\'associa l\'objectiu.',
      'Default Build Plan Edit Policy' => 'Política d\'edició del pla de construcció predeterminada',
      'You do not have permission to pause any builds.' => 'No teniu permís per aturar cap construcció.',
      'Abort Older Builds' => 'Avorta les construccions anteriors',
      'Pause Build' => 'Pausa la construcció',
      'Interacting with External Build Systems' => 'Interacció amb sistemes de construcció externs',
      'Progress on this build will be discarded. Really abort build?' => 'Es descartaran els avenços en aquesta construcció. Interrompre la construcció?',
      'Artifact %d' => 'Artefacte %s',
      'Path to the file containing the lint message, from the project root.' => 'Ruta al fitxer que conté el missatge del lint, des de l\'arrel del projecte.',
      'No artifacts found.' => 'No s\'ha trobat cap artefacte.',
      'A build step has the same policies as its build plan.' => 'Una etapa de construcció té les mateixes polítiques que el seu pla de construcció.',
      'Wait for previous commits to finish building the current plan before continuing.' => 'Espereu les validacions anteriors per acabar de construir el pla actual abans de continuar.',
      '%s created this build.' => '%s ha creat aquesta construcció.',
      'Explicitly update the builds for __buildable__.' => 'Actualitzeu explícitament les construccions de __buildable__.',
      'Path to the file where the test is declared, relative to the project root.' => 'Ruta d\'accés al fitxer on es declara la prova, en relació amb l\'arrel del projecte.',
      'Lint message code identifying the type of message, like "ERR123".' => 'Codi de missatge del lint que identifica el tipus de missatge, com ara "ERR123".',
      'This is an autoplan (a builtin plan provided by an application) so it can not be edited.' => 'Aquest és un pla automàtic (un pla incorporat proporcionat per una aplicació) de manera que no es pot editar.',
      'Make an authenticated HTTP %s request to %s.' => 'Feu una sol·licitud HTTP %s autenticada a %s.',
      'The build target this artifact is attached to.' => 'L\'objectiu de construcció al qual s\'adjunta aquest artefacte.',
      'Line number in the file where the text which triggered the message first appears. The first line of the file is line 1, not line 0.' => 'Número de línia al fitxer on apareix per primera vegada el text que ha activat el missatge. La primera línia del fitxer és la línia 1, no la línia 0.',
      'Buildables' => 'Construïbles',
      'The artifact key.' => 'La clau de l\'artefacte.',
      'Build step "%s" has step group key "%s", but no step group with that key exists.' => 'L\'etapa de construcció «%s» té la clau de grup d\'etapes «%s», però no existeix cap grup d\'etapes amb aquesta clau.',
      'No builds can be aborted.' => 'No es pot interrompre cap construcció.',
      'Invalid buildable PHID "%s".' => 'El PHID del construïble \'%s\' no és vàlid.',
      'Find out information about buildables.' => 'Obteniu informació sobre construïbles.',
      'ID of build plan to run.' => 'Identificador del pla de construcció per executar.',
      'This build is already resuming. You can not reissue a resume command to a resuming build.' => 'Aquesta construcció ja s\'està reprenent. No podeu tornar a emetre una ordre de represa a una construcció que ja ho està fent.',
      'Run Build Plan Manually' => 'Executeu el pla de construcció manualment',
      'Limit the rate at which the log is written, to test live log streaming.' => 'Limiteu la velocitat amb què s’escriu el registre per provar la transmissió de registres en directe.',
      '%s created this build plan.' => '%s ha creat aquest pla de construcció.',
      'Search for builds running a given build plan.' => 'Cerqueu construccions que executin un pla de construcció determinat.',
      'You do not have permission to create Harbormaster build plans.' => 'No teniu permís per crear plans de construcció de Harbormaster.',
      'Epoch timestamp for target completion, if the target has completed.' => 'Segell de temps d\'època per a la realització de l\'objectiu, si l\'objectiu s\'ha completat.',
      'Build plan "%s" does not exist.' => 'El pla de construcció \'%s\' no existeix.',
      'Force the buildable to update even if no build status changes occur during normal update.' => 'Força l\'actualització del construïble fins i tot si no hi ha canvis d\'estat de construcció durant l\'actualització normal.',
      'You only have permission to abort some builds. Work will halt immediately on builds you have permission to abort. Progress will be discarded, and builds must be completely restarted if you want them to complete.' => 'Només teniu permís per interrompre algunes construccions. El treball s’aturarà immediatament a les construccions que tingueu permís per avortar. El progrés es descartarà i les construccions s\'han de reiniciar completament si voleu que es completin.',
      'Request OK
    ' => 'OK la sol·licitud',
      '%s restarted this build.' => '%s ha reiniciat aquesta construcció.',
      'Harbormaster Buildables' => 'Construïbles de Harbormaster',
      'Unknown CircleCI build type "%s". Expected "%s" or "%s".' => 'Tipus de construcció de CircleCI «%s» desconegut. S\'esperava «%s» o «%s».',
      'You must openBuildLog() before you can append() content to the log.' => 'Heu d\'obrir openBuildLog() per poder append() contingut al registre.',
      'Drydock: Run Command' => 'Drydock: executa l\'ordre',
      'This attachment exists solely to provide compatibility with the message format returned by an outdated API method. It will be taken away at some point and you should not rely on these fields being available.' => 'Aquest adjunt només existeix per proporcionar compatibilitat amb el format de missatge retornat per un mètode API obsolet. S\'emportarà en algun moment i no ha de confiar que aquests àmbits estiguin disponibles.',
      'The build plan name.' => 'El nom del pla de construcció.',
      'You do not have permission to resume any builds.' => 'No teniu permís per reprendre cap construcció.',
      'View Current Build' => 'Visualitza la construcció actual',
      'Build target this log is attached to.' => 'Objectiu de construcció adjunt a aquest registre.',
      'Work will continue on all builds. Really resume?' => 'El treball continuarà en totes les construccions. Segur que voleu reprendre\'l?',
      'Attempting to access unknown build status property ("%s").' => 'S\'està intentant accedir a una propietat d\'estat de construcció desconeguda (\'%s\').',
      'Rebuild the file and summary for a log. This is primarily intended to make it easier to develop new log summarizers.' => 'Reconstruïu el fitxer i el resum per obtenir un registre. Es tracta principalment de facilitar el desenvolupament de nous generadors de resum per a diaris.',
      'Standalone Log Fragment' => 'Fragment de registre independent',
      'Harbormaster Build Steps' => 'Etapes de construcció de Harbormaster',
      'Build Status' => 'Estat de la construcció',
      'No build plan behavior with key "%s" exists.' => 'No existeix cap comportament de pla de construcció amb la clau «%s».',
      'The build may not be restarted.' => 'No es pot reiniciar la construcció.',
      'Lint Messages' => 'Missatges del lint',
      'This target has no associated artifacts.' => 'Aquest objectiu té cap artefacte associat.',
      'Choose Build Statuses' => 'Trieu els estats de construcció',
      'This build plan will deadlock when executed, due to circular dependencies present in the build plan. Examine the step list and resolve the deadlock.' => 'Aquest pla de construcció es bloquejarà quan s’executi, a causa de les dependències circulars presents al pla de construcció. Examineu la llista d\'etapes i solucioneu el punt mort.',
      'This older log is missing required rendering data. To rebuild rendering data, run: %s' => 'Al registre anterior, li falten dades de renderització obligatòries. Per reconstruir les dades de renderització, executeu: %s',
      '%s changed the %s behavior for this plan from %s to %s.' => '%s ha canviat el comportament de %s per aquest pla de %s a %s.',
      'No such buildable "%s"!' => 'No existeix cap \'%s\' construïble!',
      'PHID of the object that is built.' => 'El PHID de l\'objecte construït.',
      'Harbormaster Build Logs' => 'Registres de construcció de Harbormaster',
      'Search for builds started by someone or something in particular.' => 'Cerca les construccions iniciades per algú o alguna cosa en particular.',
      'When a build is restarted, side effects associated with the build may occur again.' => 'Quan es reinicia una construcció, es poden tornar a produir efectes secundaris associats amb la construcció.',
      'The build may be restarted.' => 'La construcció es pot reiniciar.',
      'Build Plan' => 'Pla de construcció',
      'Drydock lease PHID "%s" does not correspond to a valid lease.' => 'El PHID de l\'arrendament de Drydock "%s" no correspon a un arrendament vàlid.',
      'The name of this build.' => 'El nom d\'aquesta construcció.',
      'File PHID "%s" does not correspond to a valid file.' => 'El PHID de fitxer \'%s\' no correspon a cap fitxer vàlid.',
      'Name one or more buildables to publish, like "B123".' => 'Nom un o més construïbles per publicar, com "B123".',
      'Invalid Harbormaster build command "%s".' => 'Ordre de construcció "%s" de Harbormaster no vàlida.',
      'All Builds' => 'Totes les construccions',
      'Object ("%s") claims "%s" is a GitHub repository URI, but the path ("%s") does not have enough components (expected at least two).' => 'L\'objecte ("%s") afirma que "%s" és un URI del repositori GitHub, però la ruta d\'accés ("%s") no té prou components (s\'espera almenys dos).',
      'To run a build manually, you normally must have permission to edit the related build plan. If you would prefer that anyone who can see the build plan be able to run and restart the build, you can change the behavior here.
    Note that this controls access to all build management actions: "Run Plan Manually", "Restart", "Abort", "Pause", and "Resume".
    WARNING: This may be unsafe, particularly if the build has side effects like deployment.
    If you weaken this policy, an attacker with control of an account that has "Can View" permission but not "Can Edit" permission can manually run this build against any old version of the code, including versions with known security issues.
    If running the build has a side effect like deploying code, they can force deployment of a vulnerable version and then escalate into an attack against the deployed service.' => 'Per executar una construcció manualment, normalment heu de tenir permís per editar el pla de construcció relacionat. Si preferiu que qualsevol que pugui veure el pla de construcció pugui executar i reprendre la construcció, podeu canviar el comportament aquí. 
    Tingueu en compte que això controla l\'accés a totes les accions de gestió de la construcció: «Executa el pla manualment», «Reinicia», «Abort», «Pausa» i «Resume». 
    AVÍS: Això pot ser insegur, especialment si la construcció té efectes secundaris com el desplegament. 
    Si afebliu aquesta política, un atacant amb control d\'un compte que té permís per a "veure", però no d\'"editar" pot executar manualment aquesta construcció contra qualsevol versió antiga del codi, incloent versions amb problemes de seguretat coneguts. 
    Si el funcionament de la construcció té un efecte secundari com el desplegament de codi, poden forçar el desplegament d\'una versió vulnerable i després intensificar-se en un atac contra el servei desplegat.',
      'Build Log %d (%s - %s)' => 'Registre de construcció %s (%s - %s)',
      'Lease Working Copy' => 'Còpia de treball de l’arrendament',
      'No Build Plan Permission' => 'Pla de construcció sense permís',
      'No behavior with key "%s" exists. Valid keys are: %s.' => 'No existeix cap comportament amb la clau «%s». Les claus vàlides són: %s.',
      'Really restart build?' => 'Reiniciar la construcció?',
      '%s renamed this build plan from "%s" to "%s".' => '%s ha reanomenat aquest pla de construcció de \'%s\' a \'%s\'.',
      'Expected to be unable to restart build.' => 'S\'esperava no poder reiniciar la construcció.',
      '%s resumed this buildable.' => '%s ha reprès aquest construïble.',
      'You can not process build log chunks unless the log lock is held.' => 'No podeu processar trossos de registre de construcció tret que el bloqueig del registre estigui retingut.',
      'No buildables found.' => 'No s\'ha trobat cap construïble.',
      'Invalid build log PHID "%s".' => 'El PHID del registre de construcció \'%s\' no és vàlid.',
      'References a host lease from Drydock.' => 'Fa referència a un arrendament d’amfitrió de Drydock.',
      'Type a build status name...' => 'Tecleja un nom d\'estat de construcció...',
      'Short message name, like "Syntax Error".' => 'Nom del missatge curt, com ara "Error de sintaxi".',
      'Buildkite' => 'Buildkite',
      'Really resume builds?' => 'Voleu reprendre les construccions?',
      'Use one of --id or --active to select builds, but not both.' => 'Utilitzeu un de --id o --active per seleccionar construccions, però no totes dues.',
      'Create a build artifact.' => 'Crear un artefacte de construcció.',
      'This build is already pausing. You can not reissue a pause command to a pausing build.' => 'Aquesta construcció ja està en pausa. No podeu tornar a publicar una ordre de pausa a una construcció en pausa.',
      'HTTP Request' => 'Sol·licitud HTTP',
      'Optional label for this URI.' => 'Etiqueta opcional per a aquest URI.',
      'Build Log' => 'Registre de construcció',
      'Users must be able to see a build target to view its build log.' => 'Els usuaris han de poder veure un objectiu de construcció per veure el registre de construcció.',
      'Query Harbormaster buildables.' => 'Consulteu els construïbles de Harbormaster.',
      'Create Build Plan' => 'Crea un pla de construcció',
      '%s disabled this build plan.' => '%s ha desactivat aquest pla de construcció.',
      'Reading log content from stdin...' => 'S\'està llegint el contingut del registre des de stdin...',
      'No messages for this build target.' => 'No hi ha missatges per a aquest objectiu de construcció.',
      'Hold Drafts' => 'Retenir esborranys',
      'Unable to Resume Build' => 'No es pot reprendre la construcció',
      'No active Herald rules trigger this build.' => 'No hi ha regles actives de Herald que activin aquesta construcció.',
      'You can not specify both "--id" and "--all". Choose one or the other.' => 'No podeu especificar "--id" i "--all". Trieu-ne un o l\'altre.',
      'Revisions are not sent for review until the build completes, and are returned to the author for updates if the build fails.' => 'Les revisions no s’envien a revisió fins que la construcció no s’acaba i es retornen a l’autor per obtenir actualitzacions si la construcció falla.',
      'Invalid build ID "%s".' => 'L\'identificador de construcció \'%s\' no és vàlid.',
      'Type a build plan name...' => 'Tecleja un nom de pla de construcció...',
      'Harbormaster Build %s ("%s") for %s' => 'Construcció de Harbormaster %s ("%s") per %s',
      'Delete Build Step' => 'Suprimeix el pas de construcció',
      'Log "%s" is still live. Logs can not be finalized until they have closed.' => 'El registre \'%s\' encara està viu. Els registres no es poden finalitzar fins que no s\'han tancat.',
      'Use this method to attach artifacts to build targets while running builds. Artifacts can be used to carry data through a complex build workflow, provide extra information to users, or store build results.' => 'Utilitzeu aquest mètode per adjuntar artefactes per crear objectius mentre s\'executen construccions. Els artefactes es poden utilitzar per transportar dades a través d’un flux de treball de construcció complex, proporcionar informació addicional als usuaris o emmagatzemar els resultats de la construcció.',
      'OK: No Harbormaster target PHID.' => 'D\'acord: no hi ha cap PHID d\'objectiu de Harbormaster.',
      'Each artifact also needs an `artifactKey`, which names the artifact. Finally, you will provide some `artifactData` to fill in the content of the artifact. The data you provide depends on what type of artifact you are creating.' => 'Cada artefacte també necessita un `artifactKey`, que anomena l\'artefacte. Finalment, proporcionareu algunes `artifactData` per omplir el contingut de l\'artefacte. Les dades que proporcioneu depenen de quin tipus d\'artefacte esteu creant.',
      'Long explanation of the lint message.' => 'Explicació llarga del missatge del lint.',
      'Build Target PHID' => 'El PHID de l\'objectiu de la construcció',
      'Build/CI' => 'Construir/CI',
      'rXabcdef, PHID-DIFF-1234, ...' => 'rXabcdef, PHID-DIFF-1234, ...',
      'Applying plan %s to new buildable %s...' => 'S\'està aplicant el pla %s a un nou %s construïble ...',
      'True if this is a manual buildable.' => 'És cert si es pot construir manualment.',
      'Publish a buildable. This is primarily useful for developing and debugging applications which have buildable objects.' => 'Publica un construïble. Això és útil sobretot per desenvolupar i depurar aplicacions que tinguin objectes construïbles.',
      'Search for builds running against particular buildables.' => 'Cerqueu construccions que s\'executin contra construïbles concrets.',
      'Specify exactly one buildable object, by object name.' => 'Especifiqueu exactament un objecte construïble, per nom d\'objecte.',
      'Can Create Build Plans' => 'Pot crear plans de construcció',
      'Add Build Step' => 'Afegir una etapa de construcció',
      'No such build target "%s"!' => 'No existeix l\'objectiu de construcció «%s»!',
      'My Builds' => 'Les meves construccions',
      'The current UNIX timestamp.' => 'El segell de temps UNIX actual.',
      'Object "%s" is not a Harbormaster Buildable!' => 'L\'objecte \'%s\' no es pot construir amb Harbormaster!',
      'Report that work on the target is ongoing. This message can be used to report partial results during a build.' => 'Informa que el treball sobre l\'objectiu està en curs. Aquest missatge es pot utilitzar per informar de resultats parcials durant una construcció.',
      'This group has no available build steps.' => 'Aquest grup no té cap etapa de construcció disponible.',
      'Stores a URI.
    With `ui.external`, you can use this artifact type to add links to build results in an external build system.' => 'Emmagatzema un URI.
    Amb `ui.external`, podeu utilitzar aquest tipus d’artefacte per afegir enllaços per obtenir resultats en un sistema de construcció extern.',
      'Trigger a build in Buildkite.' => 'Activeu una construcció a Buildkite.',
      'Search for only manual or automatic buildables.' => 'Cerca només els construïbles manuals o automàtics.',
      'Harbormaster Build Targets' => 'Objectius de construcció de Harbormaster',
      '%s created this buildable.' => '%s ha creat aquesta construcció.',
      'The current status of this build.' => 'L\'estat actual d\'aquesta construcció.',
      'Make an HTTP %s request to %s.' => 'Feu una sol·licitud HTTP de %s a %s.',
      'Status "%s" is not a valid build plan status. Valid statuses are: %s.' => 'L\'estat \'%s\' no és un estat de pla de construcció vàlid. Els estats vàlids són: %s.',
      'Artifact Name' => 'Nom de l\'artefacte',
      'Build Artifact %d' => 'Construir l\'artefacte %s',
      'Object "%s" is not a buildable!' => 'L\'objecte \'%s\' no es pot construir!',
      'Use %s to specify a build plan to run.' => 'Utilitzeu %s per especificar un pla de construcció per executar.',
      'Input Artifacts' => 'Artefactes d\'entrada',
      'Revisions are sent for review regardless of the status of the build.' => 'Les revisions s’envien a revisió independentment de l’estat de la construcció.',
      'Unknown chunk encoding "%s"!' => 'Un tros desconegut que codifica "%s"!',
      'Object ("%s") claims "%s" is a GitHub repository URI, but the domain does not appear to be GitHub.' => 'L\'objecte ("%s") afirma que "%s" és un URI del repositori de GitHub, però no sembla que el domini sigui GitHub.',
      'Usually, builds may be restarted by users who have permission to edit the related build plan. (You can change who is allowed to restart a build by adjusting the "Runnable" behavior.)
    Restarting a build may be useful if you suspect it has failed for environmental or circumstantial reasons unrelated to the actual code, and want to give it another chance at glory.
    If you want to prevent a build from being restarted, you can change when it may be restarted by adjusting this behavior. This may be useful to prevent accidents where a build with a dangerous side effect (like deployment) is restarted improperly.' => 'Normalment, les construccions poden ser reiniciades pels usuaris que tenen permís per editar el pla de construcció relacionat. (Podeu canviar qui té permís per reiniciar una construcció ajustant el comportament "Runnable".) 
    Reiniciar una construcció pot ser útil si sospito que ha fracassat per raons ambientals o circumstancials no relacionades amb el codi real, i voleu donar-li una altra oportunitat de glòria. 
    Si voleu evitar que es reiniciï una construcció, podeu canviar quan es pot reiniciar ajustant aquest comportament. Això pot ser útil per prevenir accidents on una construcció amb un efecte lateral perillós (com el desplegament) es reinicia de manera inadequada.',
      'The name of this build plan.' => 'El nom d’aquest pla de construcció.',
      'Opened a new build log:' => 'S\'ha obert un registre de construcció nou:',
      'Unable to determine how to clone the repository for this buildable: it is not associated with a tracked repository.' => 'No es pot determinar com clonar el repositori per a aquest construïble: no està associat amb un repositori seguit.',
      '"arc land" never warns that the build is still running or has failed.' => '\'arc land\' no adverteix mai si la construcció segueix funcionant o ha fallat.',
      'This build can not be restarted because the build plan is configured to prevent the build from restarting unless it has failed, and it has not failed.' => 'Aquesta construcció no es pot reiniciar perquè el pla de construcció està configurat per evitar que la construcció es reiniciï a menys que hagi fallat, i no ha fallat.',
      '"arc land" warns if the build has failed, but ignores the build if it is still running.' => '«arc land» adverteix si la construcció ha fallat, però ignora la construcció si encara s\'està executant.',
      'View URI for the buildable.' => 'Visualitzar l\'URI del construïble.',
      'This build can not be restarted because the build plan is configured to prevent the build from restarting.' => 'Aquesta construcció no es pot reiniciar perquè el pla de construcció està configurat per evitar que la construcció es reiniciï.',
      'You must choose a name for your build plan.' => 'Heu de triar un nom per al vostre pla de construcció.',
      'If you abort all builds, work will halt immediately. Work will be discarded, and builds must be completely restarted.' => 'Si avorteu totes les construccions, el treball s\'aturarà immediatament. Es descartarà el treball i s’hauran de reiniciar completament les construccions.',
      'Argument "%s" does not name a buildable. Provide one or more valid buildable monograms or PHIDs.' => 'L\'argument "%s" no anomena un constructor. Proporcioneu un o més monogrames construïbles i vàlids o PHID.',
      'This build is already paused. You can not pause a build which has already been paused.' => 'Aquesta construcció ja està en pausa. No podeu posar en pausa una construcció que ja s\'ha aturat.',
      'The ID of the current build.' => 'L\'identificador de la construcció actual.',
      'Progress on running builds will be discarded.' => 'Es descartarà el progrés de les construccions en execució.',
      'Submit builds into the build queue normally instead of running them in the foreground.' => 'Envieu les construccions a la cua de construcció normalment en lloc d’executar-les en primer pla.',
      '%s resumed this build.' => '%s ha reprès aquesta construcció.',
      'Really abort builds?' => 'Interrompre les construccions?',
      'Bad build target ID "%d".' => 'ID d\'objectiu de construcció «%s» incorrecte.',
      'Restart %s build(s)?' => 'Reprendre %s construccions?',
      'This build log is already open!' => 'Aquest registre de construcció ja està obert!',
      'Show Only Automated Builds' => 'Mostra només les construccions automàtiques',
      'Format for the text provided in "details". Valid values are "text" (default) or "remarkup". This controls how test details are rendered when shown to users.' => 'Format del text proporcionat a "detalls". Els valors vàlids són "texte" (per defecte) o "ressaltat". Això controla com es renderitzen els detalls de les proves quan es mostren als usuaris.',
      'Build Target ID' => 'Identificador de l\'objectiu de construcció',
      'Short test name, like "ExampleTest".' => 'Nom curt de la prova, com ara "ExampleTest".',
      'Harbormaster build target "%s" is not a Buildkite build step. Only Buildkite steps may be updated via the Buildkite hook.' => 'L\'objectiu de construcció Harbormaster \'%s\' no és un pas de construcció de Buildkite. Només es poden actualitzar els passos de Buildkite mitjançant el hook Buildkite.',
      'Choose a build plan behavior for "%s".' => 'Trieu un comportament del pla de construcció per a \'%s\'.',
      'Disable this build plan? It will no longer be executed automatically.' => 'Voleu desactivar aquest pla de construcció?  Ja no s\'executarà automàticament.',
      '"arc land" warns if the build is still running or has failed.' => '\'arc land\' adverteix si la construcció segueix funcionant o ha fallat.',
      'Buildable' => 'Construïble',
      'Unable to find fetch!' => 'No s\'ha pogut trobar la recuperació!',
      'arc lint + arc unit' => 'arc lint + arc unit',
      '%s restarted this buildable.' => '%s ha reiniciat aquest construïble.',
      'Really abort build?' => 'Interrompre la construcció?',
      'Browse Build Plans' => 'Consulteu els plans de construcció',
      'The PHID of the user or Object that initiated the build, if applicable.' => 'El PHID de l\'usuari o objecte que va iniciar la construcció, si s\'escau.',
      'Query information about build artifacts.' => 'Consulteu informació sobre artefactes de construcció.',
      'No behavior option is marked as the default option (for behavior "%s"). Exactly one option must be marked as the default option.' => 'No s\'ha marcat cap opció de comportament com a opció predeterminada (per al comportament «%s»). Cal marcar exactament una opció com a opció per defecte.',
      'Select all active builds.' => 'Seleccioneu totes les construccions actives.',
      'Use --id or --active to select builds.' => 'Utilitzeu --id o --active per seleccionar construccions.',
      'Build Plans' => 'Plans de construcció',
      'Unable to load build target "%s".' => 'No es pot carregar l\'objectiu de construcció \'%s\'.',
      'Retrieve information about Harbormaster build plans.' => 'Rescata informació sobre els plans de construcció de Harbormaster.',
      'File to create an artifact from.' => 'Fitxer del qual crear un artefacte.',
      'Attempt to load log bytes (%d - %d) failed: the loaded range (%d - %d) does not span the requested range.' => 'S\'ha produït un error en intentar carregar els bytes de registre (%s - %s): l\'interval carregat (%s - %s) no abasta l\'interval sol·licitat.',
      'The current status of this buildable.' => 'L\'estat actual d\'aquest construïble.',
      'Standalone Fragment' => 'Fragment independent',
      'Edit Build Plan' => 'Edita el pla de construcció',
      'Select one or more builds by ID.' => 'Seleccioneu una o més construccions per identificador.',
      'No builds found.' => 'No s\'ha trobat cap construcció.',
      'No builds can be paused.' => 'No es pot posar en pausa cap construcció.',
      'Status for the build target.' => 'Estat de l\'objectiu de construcció.',
      'Artifact Type' => 'Tipus d\'artefacte',
      'Object "%s" is not a HarbormasterBuildable (it is a "%s"). Name one or more buildables to publish, like "B123".' => 'L\'objecte \'%s\' no és un HarbormasterBuildable (és un \'%s\'). Anomeneu un o més elements construïbles per publicar, com ara \'B123\'.',
      'Load or create build autotargets.' => 'Carrega o crea autoobjectius de construcció.',
      'Apply transactions to create a new build plan or edit an existing one.' => 'Apliqueu transaccions per crear un pla de construcció nou o editeu-ne un de ja existent.',
      'Warn When Landing' => 'Avisa en aterrar',
      'Attempting to access unknown buildable status property ("%s").' => 'S\'està intentant accedir a una propietat d\'estat de construcció desconeguda (\'%s\').',
      'The current status of this build plan.' => 'L\'estat actual d\'aquest pla de construcció.',
      'You can not restart this build because you do not have permission to access the build plan.' => 'No podeu reiniciar aquesta construcció perquè no teniu permís per accedir al pla de construcció.',
      'Edit Build Plan: %s' => 'Edita el pla de construcció: %s',
      'View in Buildkite' => 'Veure a Buildkit',
      'Multiple behavior options (for behavior "%s") have the same key ("%s"). Each option must have a unique key.' => 'Les opcions múltiples de comportament (per al comportament «%s») tenen la mateixa clau («%s»). Cada opció ha de tenir una clau única.',
      'You can not abort this build.' => 'No podeu interrompre aquesta construcció.',
      'Abort Build' => 'Interromp la construcció',
      'Artifacts' => 'Artefactes',
      '<Unknown Artifact Type>' => '<Unknown Artifact Type>',
      'Multiple behavior options (for behavior "%s") are marked as default options ("%s" and "%s"). Exactly one option must be marked as the default option.' => 'Les opcions múltiples de comportament (per al comportament «%s») estan marcades com a opcions predeterminades («%s» i «%s»). Cal marcar exactament una opció com a opció per defecte.',
      'Behavior configuration for the build plan.' => 'Configuració del comportament del pla de construcció.',
      'Byte position on the line where the text which triggered the message starts. The first byte on the line is byte 1, not byte 0. This position is byte-based (not character-based) because not all lintable files have a valid character encoding.' => 'Posició del byte en la línia on comença el text que va disparar el missatge. El primer byte de la línia és el byte 1, no el byte 0. Aquesta posició es basa en el byte (no en el caràcter) perquè no tots els arxius lintables tenen una codificació de caràcters vàlida.',
      'Unable to inflate log chunk!' => 'No es pot inflar el tros de registre!',
      'Search for artifacts attached to particular build targets.' => 'Cerqueu artefactes adjunts a objectius de construcció concrets.',
      'Search for builds with given statuses.' => 'Cerqueu construccions amb estats determinats.',
      'Publish file artifact %s as fragment %s.' => 'Publica l\'artefacte de fitxer %s com a fragment %s.',
      'Restart Harbormaster builds.' => 'Reiniciar les construccions de Harbormaster.',
      'Value "%s" is not a valid option for behavior "%s". Valid options are: %s.' => 'El valor "%s" no és una opció vàlida per al comportament "%s".  Les opcions vàlides són: %s.',
      'Automatic `arc lint` step.' => 'Pas automàtic `arc lint`.',
      'PHID of the object containing this buildable.' => 'El PHID de l\'objecte que conté aquest construïble.',
      'You do not have permission to restart any builds.' => 'No teniu permís per reiniciar cap construcció.',
      'The buildable does not wait for the build.' => 'El construïble no espera la construcció.',
      'Publish Fragment' => 'Publica el fragment',
      'Search for builds of particular objects.' => 'Cerqueu construccions d\'objectes concrets.',
      'Unable to Resume Builds' => 'No es poden reprendre les construccions',
      'Build Target ID to attach the log to.' => 'Creeu un identificador de destinació al qual adjuntar el registre.',
      'Restart Builds' => 'Reinicia les construccions',
      'Unable to Abort Builds' => 'No es poden interrompre les construccions',
      'Trigger a build in CircleCI.' => 'Activeu una construcció a CircleCI.',
      'Aborted' => 'Interromput',
      'Create Build Step' => 'Crea una etapa de construcció',
      'Plan Behaviors' => 'Comportaments del pla',
      'If true, display this URI in the UI as an link to additional build details in an external build system.' => 'Si és cert, mostreu aquest URI a la IU com a enllaç a detalls de construcció addicionals en un sistema de construcció extern.',
      'Resume' => 'Reprendre',
      'Write a new Harbormaster build log. This is primarily intended to make development and testing easier.' => 'Escriu un nou registre de construcció de Harbormaster. Es tracta principalment de facilitar el desenvolupament i les proves.',
      'Pause Builds' => 'Posa en pausa les construccions',
      'Resume Builds' => 'Reprèn les construccions',
      'This build step has since been deleted on the build plan.  Some information may be omitted.' => 'Aquest pas de construcció s\'ha suprimit des del pla de construcció. Es pot ometre alguna informació.',
      'There is no implementation available for artifacts of type "%s".' => 'No hi ha cap implementació disponible per a artefactes del tipus \'%s\'.',
      'Build Step' => 'Etapa de construcció',
      'This dependency specifies a build step which doesn\'t exist.' => 'Aquesta dependència especifica un pas de construcció que no existeix.',
      'This input is bound to an artifact ("%s") which does not exist at this stage in the build process.' => 'Aquesta entrada està lligada a un artefacte (\'%s\') que no existeix en aquesta etapa del procés de construcció.',
      'Unknown log chunk encoding ("%s")!' => 'Codificació de trossos de registre desconeguda ("%s")!',
      'Build target ("%s") has the wrong type of build step. Only CircleCI build steps may be updated via the CircleCI webhook.' => 'L\'objectiu de construcció (\'%s\') té un tipus d\'etapa de construcció incorrecte. Només es poden actualitzar les etapes de construcció de CircleCI mitjançant el webhook CircleCI.',
      'Build' => 'Construcció',
      'Make HTTP Request' => 'Feu una sol·licitud HTTP',
      'Really pause build?' => 'Voleu posar en pausa la construcció?',
      'If updating generates tasks, queue them for the daemons instead of executing them in this process.' => 'Si l’actualització genera tasques, poseu-les a la cua dels dimonis en lloc d’executar-les en aquest procés.',
      'This build plan does not have any build steps yet, so it will not do anything when run.' => 'Aquest pla de construcció encara no té cap etapa de construcció, de manera que no farà res quan s’executi.',
      'Type another build step name...' => 'Tecleja un altre nom d\'etapa de construcció...',
      '"arc land" warns if the build is still running, but ignores the build if it has failed.' => '\'arc land\' adverteix si la construcció segueix funcionant, però ignora la construcció si ha fallat.',
      'Users must be able to see a build target to see its artifacts.' => 'Els usuaris han de poder veure un objectiu de construcció per veure els seus artefactes.',
      'File Artifact' => 'Artefacte d\'arxiu',
      'The buildable waits for the build, and fails if the build fails.' => 'El construïble espera la construcció i falla si la construcció falla.',
      'References a working copy lease from Drydock.' => 'Fa referència a un arrendament de còpia de treball de Drydock.',
      'PHID of the build plan being run.' => 'El PHID del pla de construcció que s\'està executant.',
      'Queued at %s' => 'En cua a %s',
      'You must have edit permission on this build plan to run it manually.' => 'Heu de tenir permís d\'edició en aquest pla de construcció per executar-lo manualment.',
      'Data Hash' => 'Valor de hash de dades',
      'The specified buildable does not have a build with ID "%s".' => 'El construïble especificat no té una construcció amb l\'identificador \'%s\'.',
      'Find out information about builds.' => 'Obteniu informació sobre les construccions.',
      'You only have permission to pause some builds. Once the current steps complete, work will halt on builds you have permission to pause. You can resume the builds later.' => 'Només teniu permís per aturar algunes construccions. Un cop finalitzades les etapes actuals, el treball s\'aturarà a les construccions que tingueu permís per aturar. Podeu reprendre les construccions més endavant.',
      'You do not have permission to abort any builds.' => 'No teniu permís per avortar cap construcció.',
      'Buildkite request to target "%s" had the wrong authentication token. The Buildkite pipeline and Harbormaster build step must be configured with the same token.' => 'La sol·licitud de Buildkit per a la destinació «%s» tenia un testimoni d\'autenticació incorrecte. El pas de construcció de Buillkite i Harbormaster ha de configurar-se amb el mateix testimoni.',
      'Harbormaster Query Builds' => 'Construccions de consultes de Harbormaster',
      'HTTP Method' => 'Mètode d\'HTTP',
      'Epoch timestamp for target start, if the target has started.' => 'Segell de temps d\'època per a l\'inici de l\'objectiu, si l\'objectiu s\'ha iniciat.',
      'Affects Buildable' => 'Afecta els construïbles',
      'Build a working copy in Drydock.' => 'Construïu una còpia de treball a Drydock.',
      'Harbormaster Build Plans' => 'Plans de construcció de Harbormaster',
      'If you pause this build, work will halt once the current steps complete. You can resume the build later.' => 'Si atureu aquesta construcció, el treball s\'aturarà un cop finalitzades les etapes actuals. Podeu reprendre la construcció més endavant.',
      'Object ("%s") does not implement interface "%s". Only objects which implement this interface can be built with CircleCI.' => 'L\'objecte (\'%s\') no implementa la interfície \'%s\'. Només es poden construir objectes que implementin aquesta interfície amb CircleCI.',
      'Build Target %d' => 'Objectiu de construcció de %s',
      'Send a message about the status of a build target to Harbormaster, notifying the application of build results in an external system.
    Sending Messages
    ================
    If you run external builds, you can use this method to publish build results back into Harbormaster after the external system finishes work or as it makes progress.
    The simplest way to use this method is to call it once after the build finishes with a `pass` or `fail` message. This will record the build result, and continue the next step in the build if the build was waiting for a result.
    When you send a status message about a build target, you can optionally include detailed `lint` or `unit` results alongside the message. See below for details.
    If you want to report intermediate results but a build hasn\'t completed yet, you can use the `work` message. This message doesn\'t have any direct effects, but allows you to send additional data to update the progress of the build target. The target will continue waiting for a completion message, but the UI will update to show the progress which has been made.
    Message Types
    =============
    When you send Harbormaster a message, you must include a `type`, which describes the overall state of the build. For example, use `pass` to tell Harbormaster that a build completed successfully.
    Supported message types are:
    %s
    Unit Results
    ============
    You can report test results alongside a message. The simplest way to do this is to report all the results alongside a `pass` or `fail` message, but you can also send a `work` message to report intermediate results.
    To provide unit test results, pass a list of results in the `unit` parameter. Each result should be a dictionary with these keys:
    %s
    The `result` parameter recognizes these test results:
    %s
    This is a simple, valid value for the `unit` parameter. It reports one passing test and one failing test:
    ```lang=json
    %s```
    Lint Results
    ============
    Like unit test results, you can report lint results alongside a message. The `lint` parameter should contain results as a list of dictionaries with these keys:
    %s
    The `severity` parameter recognizes these severity levels:
    %s
    This is a simple, valid value for the `lint` parameter. It reports one error and one warning:
    ```lang=json
    %s```
    ' => 'Envia un missatge sobre l\'estat d\'un objectiu de construcció a Harbormaster, notificant l\'aplicació de la construcció resulta en un sistema extern. 
    Enviant missatges
    ================
    Si executeu construccions externes, podeu utilitzar aquest mètode per publicar els resultats de construcció de nou a Harbormaster després que el sistema extern acabi de funcionar o a mesura que avança. 
    La manera més simple d\'utilitzar aquest mètode és trucar-lo una vegada després que la construcció acabi amb un missatge `pass` o `fail`. Això registrarà el resultat de la construcció, i continuarà el següent pas en la construcció si la construcció estava esperant un resultat. 
    Quan envieu un missatge d\'estat sobre un objectiu de construcció podeu incloure de manera opcional els resultats detallats d\' `lint` o `unit` al costat del missatge. Vegeu a continuació per a més detalls. 
    Si voleu informar de resultats intermedis però encara no s\'ha completat una construcció podeu utilitzar el missatge `treball`. Aquest missatge no té cap efecte directe, però permet enviar dades addicionals per actualitzar el progrés de l\'objectiu de construcció. L\'objectiu continuarà esperant un missatge de finalització, però la IU s\'actualitzarà per a mostrar el progrés realitzat. 
    Tipus de missatges
    ==============
    Quan envieu un missatge a Harbormaster, heu d\'incloure un `tipus`, que descriu l\'estat general de construcció. Per exemple, utilitzeu `pass` per dir-li a Harbormaster que una construcció s\'ha completat amb èxit. 
    Els tipus de missatges compatibles són: 
    %s 
    Resultats de la unitat
    ============
    Podeu informar dels resultats de la prova al costat d\'un missatge. La manera més simple de fer-ho és informar de tots els resultats juntament amb un missatge `pass` o `fall`, però també podeu enviar un missatge `work` per informar de resultats intermedis. 
    Per proporcionar resultats de prova unitaris, passa una llista de resultats en el paràmetre `unit`. Cada resultat hauria de ser un diccionari amb aquestes claus: 
    %s 
    El paràmetre `resultat` reconeix aquests resultats de prova: 
    %s 
    Aquest és un valor simple i vàlid per al paràmetre `unit`. Informa d\'una prova de pas i d\'una prova de fracàs:
    ```lang=json
    %s```
     Resultats del lint
    ===================
    Igual que els resultats de les proves unitàries, es poden informar de resultats lint al costat d\'un missatge. El paràmetre `lint` hauria de contenir resultats com una llista de diccionaris amb aquestes claus: 
    %s 
    El paràmetre `severity` reconeix aquests nivells de gravetat: 
    %s
    Aquest és un valor simple i vàlid per al paràmetre `lint`. Informa d\'un error i un avís:
    ```lang=json
    %s```',
      'Make an HTTP request.' => 'Marca una sol·licitud HTTP',
      'Drydock Host' => 'Amfitrió del Drydock',
      'When users create revisions in Differential, the default behavior is to hold them in the "Draft" state until all builds pass. Once builds pass, the revisions promote and are sent for review, which notifies reviewers.
    The general intent of this workflow is to make sure reviewers are only spending time on review once changes survive automated tests. If a change does not pass tests, it usually is not really ready for review.
    If you want to promote revisions out of "Draft" before builds pass, or promote revisions even when builds fail, you can change the promotion behavior. This may be useful if you have very long-running builds, or some builds which are not very important.
    Users may always use "Request Review" to promote a "Draft" revision, even if builds have failed or are still in progress.' => 'Quan els usuaris creen revisions en Differential, el comportament per defecte és mantenir-les en l\'estat "Esborrany" fins que passin totes les construccions. Una vegada que les revisions passen, les revisions es promouen i són enviades per a la revisió, la qual cosa es notifica als revisors. 
    La intenció general d\'aquest flux de treball és assegurar-se que els revisors només estan invertint el temps en la revisió una vegada els canvis sobrevisquin a les proves automatitzades. Si un canvi no passa les proves, normalment no està llest per a ser revisat. 
    Si voleu promoure revisions a partir d\'"Esborrany" abans de construir el pas, o promoure revisions fins i tot quan les construccions fallen, podeu canviar el comportament de la promoció. Això pot ser útil si teniu construccions de llarga durada, o algunes construccions que no són molt importants. 
    Els usuaris sempre poden utilitzar "Request Review" per promoure una revisió "Esborrany", fins i tot si les construccions han fallat o encara estan en curs.',
      'Browse Build Initiators' => 'Consulteu els iniciadors de la construcció',
      'Processing Harbormaster build log #%d...' => 'S\'està processant el registre de construcció Harbormaster #%s...',
      'Build Step %d: %s' => 'Etapa de construcció %s: %s',
      'Started %s build(s): %s.' => 'S\'han iniciat %s construccions: %s.',
      'Create an artifact of this type by passing `%s` as the `artifactType`. When creating an artifact of this type, provide these parameters as a dictionary to `artifactData`:' => 'Creeu un artefacte d\'aquest tipus passant "%s" com a "artifactType". Quan creeu un artefacte d\'aquest tipus, proporcioneu aquests paràmetres com a diccionari a "artifactData":',
      'After completing this build step Harbormaster can continue the build normally, or it can pause the build and wait for a message. If you are using this build step to trigger some work in an external system, you may want to have Phabricator wait for that system to perform the work and report results back.
    If you select **Continue Build Normally**, the build plan will proceed once this step finishes.
    If you select **Wait For Message**, the build plan will pause indefinitely once this step finishes. To resume the build, an external system must call `harbormaster.sendmessage` with the build target PHID, and either `"pass"` or `"fail"` to indicate the result for this step. After the result is recorded, the build plan will resume.' => 'Després de completar aquest pas de construcció, Harbormaster pot continuar la construcció normalment, o pot aturar la construcció i esperar un missatge. Si esteu utilitzant aquest pas de construcció per activar alguna feina en un sistema extern, potser voldreu tenir Phabricator esperant que aquest sistema realitzi la feina i informe els resultats. 
    Si seleccioneu **Continua la construcció normalment**, el pla de construcció procedirà un cop aquest pas acabi. 
    Si seleccioneu **Accepta per al missatge**, el pla de construcció es posarà en pausa indefinidament una vegada que aquest pas acabi.  Per reprendre la construcció, un sistema extern ha de trucar. `harbormaster.sendmessage` amb el PHID de la construcció, i `"pass"` o `"fail"`per indicar el resultat d\'aquest pas. Després de registrar el resultat, el pla de construcció es reprendrà.',
      'Build with CircleCI' => 'Construeix amb CircleCI',
      'Users must be able to see a build to view its build targets.' => 'Els usuaris han de poder veure una construcció per veure els seus objectius de construcció.',
      'The PHID of the current build target.' => 'El PHID de l\'objectiu de construcció actual.',
      'No recent builds.' => 'Cap construcció recent.',
      'You are viewing an older run of this build. %s' => 'Esteu veient una execució anterior d\'aquesta construcció. %s',
      'You must choose a revision or commit to build.' => 'Heu de triar una revisió o validació per construir.',
      'Stored Chunks' => 'Trossos emmagatzemats',
      '%s Unsound Test(s)' => '%s proves dubtoses',
      'Log data hashes differ! Something is tragically wrong!' => 'Els hash de dades de registre difereixen. Alguna cosa està tràgicament malament.',
      'When building a revision, abort copies of this build plan which are currently running against older diffs.' => 'En construir una revisió, avorteu les còpies d\'aquest pla de construcció que actualment s\'estan executant amb diferències anteriors.',
      'Report that the target is complete, and the target has passed.' => 'Informeu que l\'objectiu s\'ha completat i que l\'objectiu ha passat.',
      'This input is bound to the wrong artifact type. It is bound to a "%s" artifact, but should be bound to a "%s" artifact.' => 'Aquesta entrada està vinculada al tipus d’artefacte incorrecte. Està vinculat a un artefacte \'%s\', però hauria d\'estar unit a un artefacte \'%s\'.',
      'Enter the name of a revision or commit.' => 'Introduïu el nom d\'una revisió o validació.',
      'Arcanist Lint Results' => 'Resultats Lint d\'Arcanist',
      'Drydock working copy lease to create an artifact from.' => 'Arrendament de còpia de treball del Drydock per crear un artefacte.',
      'Unable to load repository with PHID "%s".' => 'No s\'ha pogut carregar el repositori amb el PHID «%s».',
      'Test engine running the test, like "JavascriptTestEngine". This primarily prevents collisions between tests with the same name in different test suites (for example, a Javascript test and a Python test).' => 'El motor de prova que executa la prova, com ara "JavascriptTestEngine". Això prevé principalment col·lisions entre proves amb el mateix nom en diferents suites de proves (per exemple, una prova de Javascript i una prova de Python).',
      'Choose a build log to rebuild with "--id", or rebuild all logs with "--all".' => 'Trieu un registre de construcció per reconstruir amb "-- id", o reconstruir tots els registres amb "--all".',
      'Declining to make service call because `phabricator.silent` is enabled in configuration.' => 'Es declina fer una trucada de servei perquè \'phabricator.silent\' està activat a la configuració.',
      'Object "%s" does not implement interface "%s". Autotargets may only be queried for buildable objects.' => 'L\'objecte \'%s\' no implementa la interfície \'%s\'. Els objectius automàtics només es poden consultar per a objectes construïbles.',
      'Work will continue on the build. Really resume?' => 'El treball continuarà en la construcció. Segur que la voleu reprendre?',
      'When a user attempts to `arc land` a revision and that revision has ongoing or failed builds, the default behavior of `arc` is to warn them about those builds and give them a chance to reconsider: they may want to wait for ongoing builds to complete, or fix failed builds before landing the change.
    If you do not want to warn users about this build, you can change the warning behavior. This may be useful if the build takes a long time to run (so you do not expect users to wait for it) or the outcome is not important.
    This warning is only advisory. Users may always elect to ignore this warning and continue, even if builds have failed.
    This setting also affects the warning that is published to revisions when commits land with ongoing or failed builds.' => 'Quan un usuari intenta `arc land` una revisió i aquesta revisió té construccions en curs o fallides, el comportament predeterminat de `arc` és avisar-los sobre aquestes construccions i donar-los l\'oportunitat de reconsiderar-les: poden voler esperar que les construccions en curs es completin, o esmenar les construccions fallides abans d\'aterrar el canvi. 
    Si no voleu avisar els usuaris d\'aquesta construcció, podeu canviar el comportament d\'avís. Això pot ser útil si la construcció triga molt temps a executar-se (així que no espereu que els usuaris l\'esperin) o el resultat no és important. 
    Aquest avís és només consultiu. Els usuaris sempre poden optar per ignorar aquest avís i continuar, fins i tot si les construccions han fallat. 
    Aquesta configuració també afecta l\'avís que es publica a les revisions quan es valida la terra amb construccions en curs o fallides.',
      'Edit Behavior: %s' => 'Edita el comportament: %s',
      'Unable to load API token ("%s")!' => 'No s\'ha pogut carregar el testimoni d\'API («%s»)!',
      '%s Passed Test(s)' => '%s proves aprovades',
      'Builtins' => 'Incorporats',
      'If you pause all builds, work will halt once the current steps complete. You can resume the builds later.' => 'Si pareu totes les construccions, el treball s\'aturarà una vegada s\'hagin completat les etapes actuals. Podeu reprendre les construccions més tard.',
      'Host Artifact' => 'Artefacte amfitrió',
      'Query Harbormaster builds.' => 'Consulta les construccions de Harbormaster.',
      'The artifact type.' => 'El tipus d\'artefacte.',
      'Type the name of a user, application or Herald rule...' => 'Tecleja el nom d\'un usuari, aplicació o regla d\'Herald...',
      'Really resume build?' => 'Vols reprendre la construcció?',
      'Build generation this target belongs to. When builds restart, a new generation with new targets is created.' => 'Construeix la generació a la qual pertany aquest objectiu. Quan les construccions tornen a començar, es crea una nova generació amb nous objectius.',
      'URI "%s" does not have an allowable protocol. Configure protocols in `%s`. Allowed protocols are: %s.' => 'L\'URI \'%s\' no té un protocol permès. Configureu els protocols a `%s`. Els protocols permesos són: %s.',
      'Wait for Previous Commits to Build' => 'Espereu que es generin validacions anteriors',
      'Drydock Working Copy' => 'Còpia de treball del Drydock',
      'The overall state of a buildable (like a commit or revision) is normally the aggregation of the individual states of all builds that have run against it.
    Buildables are "building" until all builds pass (which changes them to "pass"), or any build fails (which changes them to "fail").
    You can change this behavior if you do not want to wait for this build, or do not care if it fails.' => 'L’estat general d’un construïble (com una validació o una revisió) és normalment l’agregació dels estats particulars de totes les construccions que s’han oposat. 
    Els construïbles es "construeixen" fins que aproven totes les construccions (cosa que les converteix en "aprovat") o qualsevol construcció falla (que les canvia a "falla"). Podeu canviar aquest comportament si no voleu esperar a aquesta construcció o no us interessa si falla.',
      'Abort Builds' => 'Interromp les construccions',
    );
  }

}
