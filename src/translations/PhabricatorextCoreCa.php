<?php

final class PhabricatorextCoreCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Escalate' => 'Escalar',
      'Next: %s' => 'Següent: %s',
      'Provides instructions for applying a local patch using just git.' => 'Proporciona instruccions per aplicar un pedaç local amb només git.',
      'Standard Phabricator.' => 'Phabricator estàndard.',
      'Auto-generated release schedule details.' => 'Detalls de la planificació d\'alliberament generats automàticament.',
      'Merged' => 'Fusionat',
      '**Step 2 of 2**: Create a MediaWiki auth consumer for this Phabricator instance.
    NOTE: Propose a consumer with the form at this url: %s
    Provide the following settings on the consumer registration:
      - **Callback URL:** Set this to: `%s`
      - **Grants:** `Basic Rights` is all that is needed for authentication.
    After you register the consumer, a **Consumer Key** and **Consumer Secret** will be provided to you by MediaWiki. To complete configuration of phabricator, copy the provided keys into the corresponding fields above.
    NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the oauth consumer registration using the form which can be found at the following url: %s' => '**Pas 2 de 2**: Crea un consumidor d\'autenticació MediaWiki per a aquesta instància de Phabricator. 
    NOTA: Proposa un consumidor amb el formulari en aquest URL: %s 
    Proporcioneu els següents paràmetres al registre del consumidor: 
      - **URL de reserva:** Establiu-ho a: `%s` 
      - **Grants:** `Drets bàsics` és tot el que es necessita per a l\'autenticació. 
    Després de registrar el consumidor, MediaWiki us proporcionarà una **clau de Consum** i **Consumer Secret**.  Per completar la configuració del Phabricator, copieu les claus proporcionades als camps corresponents de dalt. 
    NOTA: Abans que Phabricator pugui autenticar-se amb èxit amb el vostre MediaWiki, un administrador del wiki ha d\'aprovar el registre del consumidor de l\'oauth utilitzant el formulari que es pot trobar a l\'URL següent: %s',
      'Gerrit Projects' => 'Projectes Gerrit',
      'Unresolved code review comments: %d' => 'Comentaris de resolució de codi sense resoldre: %s',
      'Customize query in gerrit' => 'Personalitzeu la consulta a gerrit',
      'Cannot Lock Task' => 'No es pot bloquejar la tasca',
      'Deploy `%s` to %s Wikis.' => 'Desplegueu \'%s\' a %s Wikis.',
      'Unknown objectType \'%s\'' => 'Tipus d\'objecte desconegut «%s»',
      'You do not have permission to escalate tasks as security issues. This action can only be taken by authorized users.' => 'No teniu permís per escalar tasques com a problemes de seguretat. Aquesta acció només la poden fer usuaris autoritzats.',
      'Show related patches' => 'Mostra els pedaços relacionats',
      'Related Links' => 'Enllaços relacionats',
      'No deployments on fridays' => 'No hi ha desplegaments els divendres',
      'You must provide either a username or userPHID' => 'Heu de proporcionar un nom d’usuari o un PHID d’usuari',
      'MediaWiki base URI is required.' => 'Cal l\'URI base de MediaWiki.',
      'Unknown policies: %s' => 'Polítiques desconegudes: %s',
      'OAuth JWT nonce didn\'t match what we sent.' => 'El Nonce de JWT OAuth no va coincidir amb el que enviem.',
      'Protect as security issue' => 'Protegeix com a problema de seguretat',
      'OAuth JWT iss didn\'t match expected server name' => 'L\'iss d\'OAuth JWT no coincideix amb el nom de servidor esperat',
      'Secret Key' => 'Clau secreta',
      'This adds a link to search maniphest for open tasks which are tagged with this project.
    NOTE: This feature is provided by a Wikimedia-maintained extension, ProjectBurnupGraphProfileMenuItem. See {rPHEX} for the source.' => 'Això afegeix un enllaç a maniphest de cerca de tasques obertes etiquetades amb aquest projecte.
    NOTA: Aquesta funcionalitat la proporciona una extensió mantinguda per Wikimedia, ProjectBurnupGraphProfileMenuItem. Consulteu la font {rPHEX}.',
      'Show verbose output.' => 'Mostrar la sortida verbosa.',
      'OAuth JWT wasn\'t valid at this time' => 'OAuth JWT no era vàlid en aquest moment',
      'Any serious bugs affecting `%s` should be added as subtasks beneath this one.' => 'Qualsevol error greu que afecti \'%s\' s\'ha d\'afegir com a subtasques a sota d\'aquest.',
      'The username for whom transactions will be rolled back.' => 'El nom d\'usuari per al qual es recuperaran les transaccions.',
      'ChangeId' => 'ChangeId',
      'Only admins can call this API' => 'Només els administradors poden trucar a aquest API',
      'OAuth provider returned an error response.' => 'El proveïdor OAuth va retornar una resposta d\'error.',
      'Ensure Security Task Policies are Enforced' => 'Assegureu-vos que es compleixen les polítiques de tasques de seguretat',
      'Release Details' => 'Detalls d\'alliberament',
      'Allow' => 'Permet',
      'This MediaWiki Train Deployment is scheduled for the week of' => 'Aquest desplegament del tren de MediaWiki està planificat per a la setmana del',
      'Query users by ldap username.' => 'Consulteu els usuaris mitjançant el nom d’usuari ldap.',
      'LDAP User' => 'Usuari d\'LDAP',
      'Invalid action \'%s\'!' => 'L\'acció \'%s\' no és vàlida.',
      'Shows the gerrit Change ID for a commit.' => 'Mostra l\'identificador de canvi de gerrit per a una validació.',
      'This adds a link to search maniphest for open tasks which are tagged with this project.
    NOTE: This feature is provided by a Wikimedia-maintained extension, ProjectOpenTasksProfileMenuItemextension. See {rPHEX} for the source.' => 'Això afegeix un enllaç a maniphest de cerca de tasques obertes etiquetades amb aquest projecte.
    NOTA: Aquesta funcionalitat la proporciona una extensió mantinguda per Wikimedia, ProjectOpenTasksProfileMenuItemextension. Consulteu la font {rPHEX}.',
      'MediaWiki' => 'MediaWiki',
      'MediaWiki Base URI' => 'URI base MediaWiki',
      'The requested project does not exist' => 'El projecte sol·licitat no existeix',
      'Burnup Graph' => 'Gràfic de consum',
      'Change type to "%s."' => 'Canvieu el tipus a \'%s\'.',
      'Execute searches for Policies.' => 'Executeu cerques de polítiques.',
      'Find public transactions by a particular user.' => 'Cerqueu transaccions públiques d\'un usuari concret.',
      'Skip OFFSET rows before processing the remaining transactions.' => 'Omet les files OFFSET abans de processar les transaccions restants.',
      'Execute a rollback.' => 'Executeu un retrocés.',
      'Deny' => 'Denega',
      'Consumer Key is required' => 'Cal una clau de consumidor',
      'Invalid' => 'No és vàlid',
      'View Change in Gerrit' => 'Veure el canvi a Gerrit',
      'You must disable the user before rolling back their activity' => 'Heu de desactivar l\'usuari abans de recuperar la seva activitat',
      'Link to Open Tasks' => 'Enllaç a tasques obertes',
      'ElasticSearch' => 'ElasticSearch',
      'Disable ElasticSearch' => 'Desactiva ElasticSearch',
      'MediaWiki Instance Name' => 'Nom de la instància MediaWiki',
      'Limit the number of transaction rows to process. Default: 10000' => 'Limiteu el nombre de files de transaccions a processar. Valor per defecte: 10000',
      'objectType is required.' => 'Cal un ObjectType.',
      'Unknown or missing ldap names: %s' => 'Noms d\'ldap desconeguts o que falten: %s',
      'NOTE: Copy the keys generated by the MediaWiki OAuth consumer registration and paste them here.' => 'NOTA: Copieu les claus generades pel registre del consumidor MediaWiki OAuth i enganxeu-les aquí.',
      'Invalid rule class \'%s\'!' => 'La classe de regla \'%s\' no és vàlida.',
      'Phabricator transaction rollback tool.' => 'Eina de recuperació de transaccions de Phabricator.',
      'Enable this to use the experimental ElasticSearch fulltext backend.' => 'Activeu aquesta opció per utilitzar el dorsal experimental de text complet d\'ElasticSearch.',
      'This task has no related gerrit patches.' => 'Aquesta tasca no té pedaços de gerrit relacionats.',
      'Gerrit Patches' => 'Pedaços de Gerrit',
      'You must provide either --user or --user-phid' => 'Heu de proporcionar --user o --user-phid',
      'For more info about deployment blockers, see [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].' => 'Per obtenir més informació sobre bloquejadors de desplegament, consulteu  [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Agafant el tren ]].',
      'Sort by Last Update' => 'Ordena per darrera actualització',
      '%s Line(s) removed' => '%s línies eliminades',
      'Escalate security issue' => 'Escalar el problema de seguretat',
      'Consumer Secret is required' => 'El secret del consumidor és obligatori',
      'OAuth JWT aud didn\'t match expected consumer key' => 'L\'aud d\'OAuth JWT no coincideix amb la clau de consum esperada',
      'Related Changes in Gerrit:' => 'Canvis relacionats a Gerrit:',
      'Code Review Started' => 'S\'ha iniciat la revisió del codi',
      'Enable expert mode to reveal additional "advanced" options in the Phabricator UI.' => 'Activeu el mode expert per mostrar opcions \'avançades\' addicionals a la interfície d\'usuari de Phabricator.',
      'Changed Type' => 'Tipus canviat',
      'Full-Text Search backend that uses ElasticSearch.' => 'Dorsal de cerca de text complet que utilitza ElasticSearch.',
      'Enforce Task Security Policy' => 'Fer complir la política de seguretat de tasques',
      'Hide Instructions' => 'Oculta les instruccions',
      'Rules do not have any effect.' => 'Les regles no tenen cap efecte.',
      'users subscribed to' => 'usuaris subscrits a',
      'Execute a dry run, changes will not be writen back to the database.' => 'Executeu una prova en blanc, els canvis no es tornaran a escriure a la base de dades.',
      'PHIDs required' => 'Cal el PHID',
      'Branch `%s` and deploy to %s Wikis.' => 'Bifurca `%s` i desplega en Wikis de %s.',
      '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.
    In the next step, you will create an auth consumer in MediaWiki to be used by Phabricator oauth.' => '**Pas 1 de 2**: proporcioneu el nom i l\'URI per a la instal·lació de MediaWiki.
    Al següent pas, crearà un consumidor d’autorització a MediaWiki perquè Phabricator oauth l’utilitzi.',
      'Expert Mode.' => 'Mode expert.',
      'The specified username / userPHID was not found' => 'No s\'ha trobat el nom d\'usuari/PHID de l\'usuari especificat',
      'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.' => 'Consulteu https://wikitech.wikimedia.org/wiki/Deployments per a la planificació completa.',
      'Browse Gerrit Projects' => 'Examineu els projectes de Gerrit',
      'You cannot lock this task because it is already protected by a custom security policy.' => 'No podeu bloquejar aquesta tasca perquè ja està protegida per una política de seguretat personalitzada.',
      'Wikimedia Customizations' => 'Personalitzacions de Wikimedia',
      'Missing or malformed parameter.' => 'El paràmetre falta o està mal formatat.',
      'MediaWiki base URI should include protocol (like "https://").' => 'L\'URI base MediaWiki hauria d\'incloure protocol (com \'https://\').',
      'Blocked on Code Review' => 'Bloquejat en revisió de codi',
      'How this works' => 'Com funciona',
      'Create custom access control policy objects.' => 'Creeu objectes de política de control d\'accés personalitzats.',
      'Use [[%s|this form]] to create one.' => 'Utilitzeu [[%s|aquest formulari]] per crear-ne un.',
      'MediaWiki User' => 'Usuari de MediaWiki',
      'Change type to' => 'Canvia el tipus a',
      'Reset security settings' => 'Restablir els paràmetres de seguretat',
      'Open Tasks' => 'Tasques obertes',
      'Unknown' => 'Desconegut',
      'OAuth error: this account has been blocked in MediaWiki.' => 'Error d\'OAuth: aquest compte s\'ha bloquejat a MediaWiki.',
      '**MediaWiki Instance Name**
    Choose a permanent name for this instance of MediaWiki. Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.
    Use lowercase letters, digits, and period. For example: 
    `mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.' => '**Nom de la instància MediaWiki**
    Trieu un nom permanent per a aquesta instància de MediaWiki.Phabricator utilitza aquest nom internament per fer un seguiment d\'aquesta instància de MediaWiki, en cas que l\'URL canviï més endavant.
    Utilitzeu minúscules, dígits i punt. Per exemple:
    "mediawiki", "mediawiki.mycompany" o "mediawiki.engineering" són noms raonables.',
      'Global Accounts' => 'Comptes globals',
      'Milestone Navigation Links' => 'Enllaços de navegació de fita',
      'Patch without arc' => 'Pedaç sense arc',
      'Previous: %s' => 'Anterior: %s',
      'Query users by MediaWiki username.' => 'Consulteu els usuaris mitjançant el nom d’usuari de MediaWiki.',
      'Expand Instructions' => 'Expandir les instruccions',
      'You cannot roll back the activity of a privileged user.' => 'No podeu desfer l\'activitat d\'un usuari privilegiat.',
      'Any open subtask(s) block the train from moving forward. This means no further deployments until the blockers are resolved.' => 'Alguna subtasca oberta bloqueja el tren per avançar. Això significa que no hi haurà més desplegaments fins que es resolguin els bloquejadors.',
      'Download zip' => 'Descarrega ZIP',
      'The full URL to your MediaWiki install, up to but not including "index.php"' => 'L\'URL complet de la vostra instal·lació de MediaWiki, fins a \'index.php\', però no inclòs',
      'Download Archive' => 'Baixa l\'arxiu',
      'This panel shows navigation links to other milestones in the same series.' => 'Aquest panell mostra enllaços de navegació a altres fites de la mateixa sèrie.',
      'Expert Mode' => 'Mode expert',
      'Unknown or missing mediawiki names: %s' => 'Noms de mediawiki desconeguts o perduts: %s',
      'After reverting transactions, delete the reverted transaction records.' => 'Després de revertir les transaccions, suprimiu els registres de transaccions revertits.',
      'No Permission' => 'Sense Permís',
      'Series Navigation' => 'Navegació de sèries',
      'Enable ElasticSearch' => 'Activa ElasticSearch',
      'Find stuff in elastic piles.' => 'Cerqueu coses en piles elàstiques.',
      'Consumer Key' => 'Clau del consumidor',
      'Required' => 'Requerit',
      'Number of open tasks over time' => 'Nombre de tasques obertes al llarg del temps',
      'Abandoned' => 'Abandonat',
      'Gerrit' => 'Gerrit',
      '%s Line(s) added' => 'S\'han afegit %s línies',
      'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].' => 'Si alguna cosa és prou greu com per justificar una recuperació, hauríeu de posar-la en coneixement dels desenvolupadors a [[ https://www.mediawiki.org/wiki/MediaWiki_on_IRC | #wikimedia-operations IRC channel]].',
      'If you have a risky change in this week\'s train add a comment to this task using the {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]' => 'Si teniu un canvi arriscat al tren d\'aquesta setmana, afegiu un comentari a aquesta tasca mitjançant la icona {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]',
      'Link to Burnup Graph' => 'Enllaç a Burnup Graph',
      'Comments' => 'Comentaris',
      'Download tar.gz' => 'Baixa tar.gz',
      'Change type to "%s"' => 'Canvieu el tipus a "%s".',
    );
  }

}
