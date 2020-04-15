<?php

final class PhabricatorCoreCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Question' => 'Pregunta',
      'No repository "%s" exists!' => 'No existeix el dipòsit «%s»',
      'Save Related Commits' => 'Desa comissions relacionades',
      '%s edited %s.' => '%s va editar %s.',
      'Welcome to Phabricator!' => 'Us donem la benvinguda al Phabricator',
      'View \'%s\' does not support children.' => 'La vista «%s» no admet fills.',
      'Move Document' => 'Mou document',
      'Maximum must be larger than minimum.' => 'El màxim ha de ser més gran que el mínim.',
      'User "%s" is not a valid user.' => 'El compte d’usuari «%s» no és vàlid.',
      'Authored' => 'Autor',
      'No config value specified for key \'%s\'.' => 'No s\'ha especificat cap valor de configuració per la clau \'%s\'.',
      'Creators' => 'Creadors',
      'An absolute date, as a string.' => 'Una data absoluta, com a cadena.',
      'Your browser timezone setting differs from the timezone setting in your profile, click to reconcile.' => 'La configuració de la zona horària al vostre navegador és diferent de la configuració de zona horària del vostre perfil, clica per conciliar-les.',
      'Minus' => 'Menys',
      'OPTIMIZE' => 'OPTIMITZA',
      'Capability "%s"' => 'Capacitat "%s"',
      'Show patch application status.' => 'Mostreu l\'estat d\'aplicació dels pedaços.',
      'Acquired' => 'Obtingut',
      'Unsubmitted Comments' => 'Comentaris no enviats',
      'Raised Concern' => 'Preocupació comunicada',
      '%s has an effect' => '%s té un efecte',
      '%s \'%s\' has a patch \'%s\' which duplicates an existing patch key.' => '%s \'%s\' té un pedaç \'%s\' que duplica la clau d\'un pedaç existent.',
      'Create Document' => 'Crea document',
      'Iterated MD5' => 'MD5 iterat',
      'Format' => 'Format',
      'The repository base URI, excluding the "Short Name"' => 'La URI base del repositori, excloent el "Nom Curt"',
      'Commented On' => 'Comentat a',
      '%s added %s task(s): %s.' => '%s ha afegit %s tasca(tasques): %s.',
      '%s should prevent content-sniffing attacks.' => '%s hauria d\'evitar atacs que espien el contingut.',
      'Curtain extension ("%s", of class "%s") did not return an application from method "%s". This method must return an object of class "%s".' => 'L\'extensió cortina("%s", de la classe "%s") no ha retornat un mètode de formulari d\'aplicació "%s". Aquest mètode ha de retornar un objecte de classe "%s".',
      'Search for namespaces by name substring.' => 'Cerca namespaces per una subcadena de nom.',
      'XHProf' => 'XHProf',
      'Unsupported action "%s".' => 'No s’admet l’acció «%s».',
      'Reopened' => 'Reobert',
      '%s Before' => '%s Abans',
      'Untitled Document' => 'Document sense títol',
      'Limit the total number of tasks to act on.' => 'Limita el nombre total de tasques sobre les que actuar.',
      'Worker has invalid actor PHID ("%s").' => 'L\'executor té un PHID d\'actor invàlid ("%s").',
      'MFA Authenticated' => 'Autenticat per MFA',
      'Browse Documents' => 'Navega Documents',
      'Favorites' => 'Preferits',
      'italic text' => 'text en cursiva',
      'Custom' => 'Personalitzat',
      '%s (Preview)' => '%s (Vista prèvia)',
      'Stopped on Redirect' => 'Parat durant la Redirecció',
      'Tasks' => 'Tasques',
      'Repository URI' => 'URI del repositori',
      'Trying to read configuration "%s" before configuration has been initialized.' => 'Provant de llegir la configuració "%s" abans de que la configuració hagi estat inicialitzada.',
      '%s MB' => '%s MB',
      'Inactive' => 'Inactiu',
      'View Email Body' => 'Veure Cos del Email',
      'Email Addresses' => 'Adreces de correu electrònic',
      'Restoring "%s" to the default retention policy.' => 'Restaurant "%s" a la política de retenció per defecte.',
      'Orange' => 'Taronja',
      'Failed' => 'Fallat',
      'Upload Picture' => 'Carrega imatge',
      'Find results with any closed status.' => 'Trobeu els resultats amb qualsevol estat tancat.',
      'Packages' => 'Paquets',
      'This file %s component \'%s\', but it does not exist. You may need to rebuild the Celerity map.' => 'Aquest arxiu %s el component %s, però no existeix. És possible que hagueu de reconstruir el mapa de Celerity.',
      'Deprecated call to setIcon(), use setImageIcon() instead.' => 'Crida a setIcon() deprecada, feu servir setImageIcon().',
      'Save Related Revisions' => 'Guarda Revisions Relacionades',
      'Assigned to Me' => 'Assignat a mi',
      'Bad setter call: %s' => 'Crida errònia al setter: %s',
      'You are taking an action which requires you to enter high security.' => 'Esteu prenent una acció que requereix que entreu en alta seguretat.',
      'Failed to make some schema adjustments, detailed above.' => 'Fallat fent algun ajustament a l\'esquema, detallat a dalt.',
      'Author: %s' => 'Autor/a: %s',
      'Old Value' => 'Valor Antic',
      'Revoke' => 'Revocar',
      'No task exists with id "%s"!' => 'No existeix cap tasca amb id "%s"!',
      'This query ("%s") does not support sorting by order key "%s". Supported orders are: %s.' => 'Aquesta consulta ("%s") no suporta ordenar per la clau d\'ordre "%s". Els ordres suportats són: "%s".',
      'You are trying to save some data to Phabricator, but the request your browser made included an incorrect token. Reload the page and try again. You may need to clear your cookies.' => 'Esteu intentant guardar algunes dades a Phabricator, però la petició feta pel vostre navegador inclou un testimoni incorrecte. Recarregueu la pàgina i torneu-ho a provar. Potser haureu d\'esborrar les vostres galetes.',
      'An epoch timestamp, as an integer.' => 'Una marca horària epoch, com a enter.',
      '%s is already archived, and can not be cancelled.' => '%s ja ha estat arxivat i no es pot cancel·lar.',
      'Exporting Data...' => 'S’estan exportant les dades…',
      'Administrators' => 'Administradors',
      'Search cluster has no hosts for role "%s".' => 'El cluster de cerca no té amfitrions pel rol "%s".',
      'Edge object query must be executed with a nonempty list of source PHIDs.' => 'La consulta d\'objecte d\'aresta s\'ha d\'executar amb una llista de PHIDs d\'origen no buida.',
      'Terminating Tree' => 'Arbre Terminal',
      'Length parameter in %s must be at least %s, but %s was provided.' => 'El paràmetre de longitud a %s ha de ser com a mínim %s, però s\'ha proporcionat %s.',
      'Normalization of \'%s\'' => 'Normalització de \'%s$\'',
      'Give Token' => 'Doneu Testimoni',
      'Merchant' => 'Comerciant',
      '%s removed %s as %s.' => '%s ha eliminat %s com a %s.',
      'Overview' => 'Resum',
      'Example' => 'Exemple',
      '%s added inline comments to %s.' => '%s ha afegit comentaris en línia a %s.',
      'Refusing to redirect to local resource "%s". The URI has a domain, but the redirect is not marked external. Mark redirects as external to allow redirection off the local domain.' => 'Rebutjant redirigir cap al recurs local "%s". La URI té un domini, però la redirecció no està marcada com externa. Marqueu les redireccions com externes per permetre redireccions fora del domini local.',
      '%s confirmed this job.' => '%s ha confirmat aquesta tasca.',
      'NULL value "%s" is invalid. Valid values are "head" and "tail".' => 'El valor NULL "%s" és invàlid. Els valors vàlids són "cap" i "cua".',
      'Previous Day' => 'Dia anterior',
      'MODIFIED' => 'MODIFICAT',
      'Unknown Error' => 'Error desconegut',
      'Daemons' => 'Dimonis',
      '%s added %s task(s) to %s: %s.' => '%s ha afegit %s tasca(ques) a %s: %s.',
      'Current Tasks' => 'Tasques actuals',
      'Summary' => 'Resum',
      'Current Application' => 'Aplicació actual',
      'Duration' => 'Durada',
      'Meme' => 'Meme',
      'OLD MySQL VERSION' => 'VERSIÓ MySQL ANTIGA',
      'Custom Fields' => 'Camps personalitzats',
      'Task %s complete! Moved to archive.' => 'Tasca %s completada! S\'ha mogut a l\'arxiu.',
      'Comment' => 'Comentari',
      'Create a Task' => 'Crea una tasca',
      'Branch' => 'Branca',
      'Malformed header.' => 'Capçalera mal formada',
      'Date formatting' => 'Format de dates',
      'Other Project...' => 'Altres projectes...',
      'Phabricator' => 'Phabricator',
      'Utilities' => 'Utilitats',
      'Tomorrow' => 'Demà',
      'Variable' => 'Variable',
      'Bold' => 'Negreta',
      'Analyzing tables...' => 'Analitzant taules...',
      'Active Repositories' => 'Repositoris actius',
      'Expiration' => 'Venciment',
      'Members' => 'Membres',
      'Grey' => 'Gris',
      'Color' => 'Color',
      'Order' => 'Ordre',
      'Protocol' => 'Protocol',
      'Administrator' => 'Administrador',
      'Complete' => 'Completat',
      'Open Status' => 'Estat obert',
      'Visible' => 'Visible',
      'Enable' => 'Activa',
      'Active Revisions' => 'Revisions actives',
      'Up' => 'Puja',
      'Direct Subtask' => 'Subtasca directa',
      'Excuse:' => 'Excusa:',
      'Almanac Services' => 'Serveis d\'almanac',
      '(Show All)' => '(Mostra-ho tot)',
      'EXTRACT' => 'EXTRACTE',
      'Drafts' => 'Esborranys',
      'Wed' => 'Dc.',
      'Draft' => 'Esborrany',
      'Today' => 'Avui',
      'REPOSITORY' => 'REPOSITORI',
      'username' => 'nom d’usuari',
      'Mon' => 'Dl.',
      'Limit' => 'Límit',
      'Browse Statuses' => 'Explora els estats',
      'Current Viewer' => 'Vista actual',
      'Show Older Changes' => 'Mostra els missatges més antics',
      'Current Algorithm' => 'Algoritme actual',
      'Any Closed Status' => 'Qualsevol estat tancat',
      '%s %s' => '%s %s',
      'Bug' => 'Error',
      'No notifications.' => 'Sense notificacions.',
      'Parents' => 'Pares',
      'Object' => 'Objecte',
      'No issues.' => 'Sense incidències.',
      'Conpherence' => 'Conpherence',
      'null' => 'nul',
      'File' => 'Fitxer',
      'Badges' => 'Distintius',
      'Extracting "%s"...' => 'Extraient "%s"...',
      'Note' => 'Nota',
      'Plus' => 'Més',
      'Version' => 'Versió',
      'Submit' => 'Envia',
      'Revisions' => 'Revisions',
      '%s:' => '%s:',
      'Continue' => 'Continua',
      'All Documents' => 'Tots els documents',
      'Changes discarded. ' => 'Canvis descartats.',
      'List of usernames, as array.' => 'Llista de noms d\'usuaris, com array.',
      'Quote' => 'Cita',
      'Folder' => 'Carpeta',
      'Issues' => 'Incidències',
      'Username is required.' => 'El nom d\'usuari és requerit.',
      'Repository' => 'Repositori',
      'Empty' => 'Buit',
      'Next Day' => 'Pròxim dia',
      '<Unknown: %s>' => '<Desconegut: %s>',
      'Any' => 'Qualsevol',
      'Serious Business' => 'Negoci seriós',
      'Service' => 'Servei',
      'Continue anyway?' => 'Continua de tota manera?',
      'Edit Menu' => 'Edita el menú',
      'Waiting' => 'Esperant',
      '%s' => '%s',
      'In Use' => 'En ús',
      'Yellow' => 'Groc',
      'Thu' => 'Dj.',
      'Welcome to %s' => 'Benvingut a %s',
      'Learn More' => 'Aprèn-ne més',
      '· · ·' => '· · ·',
      'Host' => 'Amfitrió',
      '"%s"' => '"%s"',
      'Allow' => 'Permet',
      'Broken' => 'Trencat',
      'Italics' => 'Cursiva',
      'Preamble' => 'Preàmbul',
      'Revision' => 'Revisió',
      'Needs Attention' => 'Necessita atenció',
      'Invalid Credentials' => 'Credencials invàlides',
      'Authorized By' => 'Autoritzat per',
      'From' => 'De',
      'Edit Package' => 'Edita el paquet',
      'Reset Password' => 'Restableix la contrasenya',
      'Personal' => 'Personal',
      'Class' => 'Classe',
      'Tuesday' => 'Dimarts',
      'SKIP' => 'SALTA',
      '%s, %s' => '%s, %s',
      'Amount' => 'Import',
      'Created By' => 'Creat per',
      'Deleted' => 'Eliminat',
      'Normal' => 'Normal',
      'Repaired Config' => 'Configuració reparada',
      'Sun' => 'Dg.',
      'Change Password' => 'Canvia la contrasenya',
      'No %s' => 'No %s',
      'FREE' => 'LLIURE',
      'Herald' => 'Herald',
      'QUEUED' => 'A LA CUA',
      'Prototypes' => 'Prototipus',
      'The repository name.' => 'El nom del repositori.',
      '%s created this document.' => '%s ha creat aquest document.',
      'Login' => 'Inicia una sessió',
      'Log Out' => 'Finalitza la sessió',
      'Owners' => 'Propietaris',
      'Current' => 'Actual',
      'Closed, Resolved' => 'Tancat, resolt',
      'Image' => 'Imatge',
      'Version %s' => 'Versió %s',
      'Path' => 'Ruta',
      'Stopped' => 'Aturat',
      'Where' => 'On',
      'Tue' => 'Dt.',
      'Edit' => 'Edita',
      'All Jobs' => 'Totes les feines',
      'Create Subtask' => 'Crea subtasca',
      'Invited' => 'Convidat',
      'Next Month' => 'Mes pròxim',
      'Yes' => 'Sí',
      'Projects' => 'Projectes',
      'Pink' => 'Rosa',
      'GitHub' => 'GitHub',
      'Invalid' => 'No és vàlid',
      'CANCELLED' => 'CANCEL·LAT',
      'Description' => 'Descripció',
      'Wednesday' => 'Dimecres',
      'Subscriptions' => 'Subcripcions',
      'Updated %s' => 'Actualitzat %s',
      'Users' => 'Usuaris',
      'Git' => 'Git',
      'Encoding' => 'Codificant',
      'Edit Picture' => 'Edita la imatge',
      'Public Key' => 'Clau pública',
      'Design' => 'Disseny',
      'Edit Document: %s' => 'Edita el document: %s',
      'DOCUMENT DETAIL' => 'DETALL DEL DOCUMENT',
      '?' => '?',
      'TOTAL' => 'TOTAL',
      'Services' => 'Serveis',
      'Flags' => 'Marques',
      'HTTPS Required' => 'Es requereix HTTPS',
      'Global' => 'Global',
      'Example: %s' => 'Exemple: %s',
      'Seconds' => 'Segons',
      'Basics' => 'Basics',
      'Author' => 'Autor',
      'Exact Names' => 'Noms exactes',
      'Accepted' => 'Acceptat',
      'Target' => 'Objectiu',
      'Good' => 'Bo',
      'Analysis' => 'Anàlisi',
      'Custom Policy...' => 'Política personalitzada...',
      'New' => 'Nou',
      'Test' => 'Prova',
      'Change' => 'Canvi',
      'Copied from %s' => 'Copiat des de %s',
      'Column' => 'Columna',
      'Partial' => 'Parcial',
      'Not Applicable' => 'No aplicable',
      'Not Unique' => 'No únic',
      'Count' => 'Recompte',
      'Reverse Tree' => 'Arbre invers',
      'Documents' => 'Documents',
      'Message' => 'Missatge',
      'View' => 'Mostra',
      'All' => 'Tot',
      'Aliases' => 'Àlies',
      'name' => 'nom',
      'Sat' => 'Ds.',
      'Notify' => 'Notifica',
      'Reply' => 'Respon',
      'Time' => 'Hora',
      'No time specified.' => 'Hora no especificada.',
      'Files' => 'Fitxers',
      'Badge' => 'Distintiu',
      'Space' => 'Espai',
      'Source' => 'Origen',
      'Assigned: %s' => 'Assignat: %s',
      'Download File' => 'Descarrega el fitxer',
      'Create' => 'Crea',
      '...' => '...',
      'None' => 'Cap',
      'Subscribers' => 'Subscriptors',
      'Created by %s' => 'Creat per %s',
      'Editable By' => 'Editable per',
      'Delete this inline comment?' => 'Vols eliminar aquest comentari en línia?',
      'Name' => 'Nom',
      'Home' => 'Inici',
      'Icon' => 'Icona',
      'Previous Month' => 'Mes anterior',
      'Objects' => 'Objectes',
      'Not Applied' => 'No aplicat',
      'Constant' => 'Constant',
      'Running' => 'En execució',
      'Package' => 'Paquet',
      'Label' => 'Etiqueta',
      'Notifications' => 'Notificacions',
      'Configuration' => 'Configuració',
      'Datetime formatting' => 'Format de data i hora',
      'Thursday' => 'Dijous',
      'Title' => 'Títol',
      'Permanent Field' => 'Camp permanent',
      'Applications' => 'Aplicacions',
      'Real Name' => 'Nom real',
      'Cancel' => 'Cancel·la',
      'Status Details' => 'Detalls d\'estat',
      'No messages.' => 'No hi ha missatges.',
      'Interface' => 'Interfície',
      'All Tasks' => 'Totes les tasques',
      'Plaintext' => 'Text pla',
      'Installed' => 'Instal·lat',
      'Available' => 'Disponible',
      'Provider' => 'Proveïdor',
      'Blue' => 'Blau',
      'Developer Settings' => 'Paràmetres de desenvolupament',
      'PHP' => 'PHP',
      'Common' => 'Comú',
      'Developer' => 'Desenvolupador',
      'Methods' => 'Mètodes',
      'Error' => 'Error',
      'Form' => 'Formulari',
      'Not Done' => 'No fet',
      'Default' => 'Per defecte',
      'Never' => 'Mai',
      'Retitled' => 'Retitulat',
      'Database / Table' => 'Base de dades / Taula',
      'No' => 'No',
      'New Value' => 'Nou valor',
      'Tags' => 'Etiquetes',
      'Email' => 'Correu electrònic',
      'Username' => 'Nom d\'usuari',
      'Account' => 'Compte',
      '%s accepted %s.' => '%s ha acceptat %s.',
      'Destroyed' => 'Destruït',
      'Unique' => 'Únic',
      'Method' => 'Mètode',
      'Priority' => 'Prioritat',
      'True' => 'Cert',
      'Colors' => 'Colors',
      'Closed' => 'Tancat',
      'Find User:' => 'Troba usuari:',
      'Language' => 'Idioma',
      'ID' => 'ID',
      'Owner' => 'Propietari',
      'Translations' => 'Traduccions',
      'Left' => 'Esquerra',
      'Copied to %s' => 'Copiat a %s',
      'Recent Activity' => 'Activitat recent',
      'Current Revisions' => 'Revisions actuals',
      'Password' => 'Contrasenya',
      '%s unread messages.' => '%s missatges sense llegir.',
      'Policies' => 'Polítiques',
      'Value' => 'Valor',
      'ACCESS DENIED' => 'ACCÉS DENEGAT',
      'Attached' => 'Adjunt',
      'History' => 'Història',
      'First' => 'Primer',
      'Mail' => 'Correu',
      'No data available.' => 'No hi ha cap dada disponible.',
      'Activate' => 'Activa',
      'Monday' => 'Dilluns',
      'Green' => 'Verd',
      'Types' => 'Tipus',
      'No data.' => 'Cap dada.',
      'Start' => 'Inicia',
      'Right' => 'Dreta',
      'Pending' => 'Pendent',
      'Duplicate' => 'Duplica',
      'Table of Contents' => 'Taula de continguts',
      'Edited' => 'Modificat',
      'Action' => 'Acció',
      'False' => 'Fals',
      'Tag' => 'Etiqueta',
      'Expand' => 'Expandeix',
      'project' => 'projecte',
      'Ignore' => 'Ignora',
      'Disable' => 'Deshabilita',
      'Property' => 'Propietat',
      'Configure Phabricator' => 'Configura Phabricator',
      'All Day' => 'Tot el dia',
      'Via %s' => 'Via %s',
      'Documentation' => 'Documentació',
      'Console' => 'Consola',
      'User' => 'Usuari',
      'Create Product' => 'Crea producte',
      'Closed, Invalid' => 'Tancat, invàlid',
      'Operations' => 'Operacions',
      'Versions' => 'Versions',
      'End' => 'Final',
      'Applied' => 'Aplicat',
      'Device' => 'Dispositiu',
      'Query' => 'Consulta',
      'Attributes' => 'Atributs',
      'Actors' => 'Actors',
      'Active' => 'Actiu',
      'Web' => 'Web',
      'Always' => 'Sempre',
      'Expires' => 'Caduca',
      'Show More' => 'Mostra\'n més',
      'ARCHIVED' => 'ARXIVAT',
      'Created' => 'Creat',
      'Audio' => 'Àudio',
      'Event' => 'Esdeveniment',
      'Calendar' => 'Calendari',
      'Code' => 'Codi',
      'Loading...' => 'S\'està carregant...',
      'Total' => 'Total',
      'Application' => 'Aplicació',
      'Show All' => 'Mostra-ho tot',
      'Back' => 'Torna',
      'Fax' => 'Fax',
      'Added' => 'Afegit',
      'Size' => 'Mida',
      'Experimental' => 'Experimental',
      'Importing...' => 'Important...',
      'Library' => 'Biblioteca',
      'Editable' => 'Editable',
      'Status' => 'Estat',
      'Policy' => 'Política',
      'Fri' => 'Dv.',
      'Close' => 'Tanca',
      '%s created %s.' => '%s ha creat %s.',
      'Open Tasks' => 'Tasques obertes',
      'Properties' => 'Propietats',
      'Unknown' => 'Desconegut',
      'Next' => 'Següent',
      'AFFECTED FILES' => 'FITXERS AFECTATS',
      'Send Email' => 'Envia un correu electrònic',
      'Manage' => 'Administra',
      'Disallowed' => 'No permès',
      'Confirm Password' => 'Confirma contrasenya',
      'Index' => 'Índex',
      'Connected' => 'Connectat',
      'Text' => 'Text',
      'UTC+%s' => 'UTC+%s',
      'Actions' => 'Accions',
      'Help' => 'Ajuda',
      'Key' => 'Clau',
      'ACTIVE' => 'ACTIU',
      'Repositories' => 'Repositoris',
      'Affected files' => 'Fitxers afectats',
      'Welcome' => 'Benvingut',
      'ANALYZE' => 'ANALITZA',
      'Server' => 'Servidor',
      'Actor' => 'Actor',
      'Red' => 'Vermell',
      'Columns' => 'Columnes',
      'Open' => 'Obert',
      'Authored By' => 'Autoritzat per',
      'NOT MODIFIED' => 'NO MODIFICAT',
      'Authors' => 'Autors',
      'Subscribe' => 'Subscriure\'s',
      'OPTIMIZED' => 'OPTIMITZAT',
      'Import' => 'Importa',
      'Address' => 'Adreça',
      'Dashboard' => 'Tauler de control',
      'Add Comment' => 'Afegeix un comentari',
      'Resolved' => 'Resolt',
      '%s: %s' => '%s: %s',
      'Yesterday' => 'Ahir',
      'Languages' => 'Idiomes',
      'Name of the package.' => 'Nom del paquet.',
      'Details' => 'Detalls',
      'Public' => 'Públic',
      'Local' => 'Local',
      'Local Config' => 'Configuració local',
      'Writable' => 'Editable',
      'Numbered List' => 'Llista numerada',
      'Violet' => 'Violeta',
      'All Applications' => 'Totes les aplicacions',
      'Enabled' => 'Habilitat',
      'Devices' => 'Dispositius',
      'Edges' => 'Vores',
      'Renamed' => 'Reanomenat',
      'DONE' => 'FET',
      'SSH Public Keys' => 'Claus Públiques SSH',
      'Statuses' => 'Estats',
      'Remove' => 'Elimina',
      'Done' => 'Fet',
      'Examples' => 'Exemples',
      '%s updated %s, added %d: %s.' => '%s ha actualitzat %s, s\'ha afegit %s: %s.',
      'Save' => 'Desa',
      'Create Account' => 'Crea un compte',
      'ANALYZED' => 'ANALITZAT',
      'bold text' => 'text en negreta',
      'Messages' => 'Missatges',
      'Function' => 'Funció',
      'Security' => 'Seguretat',
      'Updated' => 'Actualitzat',
      'Abandoned' => 'Abandonat',
      'Advanced Search' => 'Cerca avançada',
      'All Packages' => 'Tots els paquets',
      'Disabled' => 'Deshabilitat',
      'Branches' => 'Branques',
      'Contents' => 'Continguts',
      'Phase' => 'Fase',
      'Project' => 'Projecte',
      'Session' => 'Sessió',
      'Save Changes' => 'Desa els canvis',
    );
  }

}
