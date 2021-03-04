<?php

final class PhabricatorSettingsCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      '12 Hour, 2:34 PM' => '12 hores, 2:34 PM',
      'When a revision is updated, Phabricator attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => 'Quan s\'actualitza una revisió, Phabricator mira d\'incorporar a la nova versió, els comentaris ("inline") de la versió antiga. Pots desactivar aquesta funció si prefereixes que els comentaris quedin ancorats només a una de les versions.',
      'Default (%s)' => 'Per defecte (%s)',
      'You haven\'t added any contact numbers to your account.' => 'No heu afegit cap número de contacte al vostre compte.',
      'Conpherence Column Visible' => 'Columna visible de Conpherence',
      'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => 'Aquest navegador de web no dóna suport a les notificacions d\'escriptori. Per a aquest navegador només s\'enviaran notificacions de l\'aplicació, independentment d\'aquesta preferència.',
      'Choose Factor Type' => 'Escollir el tipus de factor',
      'Page Titles' => 'Títols de pàgina',
      'Personal Account Settings' => 'Configuracions del compte personal',
      'ISO 8601: 2000-02-28' => 'ISO 8601: 2000-02-28',
      'Global Default Settings' => 'Configuració global per defecte',
      'Self Actions' => 'Accions pròpies',
      'Choose which language you would like the Phabricator UI to use.' => 'Escolliu quina llengua t\'agradaria que utilitzés el Phabricator UI.',
      'Email Notifications' => 'Notificacions per correu electrònic',
      'Show Unified Diffs' => 'Mostrar les diferències ("Diffs") unificades',
      'Diff Preferences' => 'Preferències de les diferències ("Diff")',
      'Saturday' => 'Dissabte',
      'Change Primary Address' => 'Canviar l\'adreça principal',
      'Send Stamps' => 'Enviar segells',
      'Show Older Inlines' => 'Mostrar les insercions "inline" més antigues',
      'Select the format you prefer for editing dates.' => 'Seleccioneu el format que preferiu per editar dates.',
      'On Small Screens' => 'En pantalles petites',
      'A verification email has been sent. Click the link in the email to verify your address.' => 'S\'ha enviat un correu de verificació. Cliqueu l\'enllaç en el correu per verificar la vostra adreça.',
      'Enable Email Notifications' => 'Habilitar notificacions de correu electrònic',
      'Edit global default settings for all users.' => 'Editeu la configuració global per defecte per a tots els usuaris.',
      'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.
    | Setting                | Example Mail Subject
    |------------------------|----------------
    | Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
    | Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`' => 'La configuració **afegir el prefix** "Re:"  afegeix "Re:" davant de tots els  missatges, fins i tot si no són respostes. Si utilitzeu *Mail.app** en Mac OS X, us pot ajudar a millorar els fils de correu.
    | Configuració            | Exemple d\'assumpte de correu
    |-------------------------|-----------------------------
    | Activar prefix "Re:"    | `Re: [Differential] [Acceptat] D123: Exemple de revisió`
    | Desactivar prefix "Re:" | `[Differential] [Acceptat] D123: Exemple de revisió`',
      'No settings panels are available.' => 'No hi ha cap panell de configuració disponible.',
      'Empty string is not a valid setting for "%s".' => 'Una cadena buida no és una configuració vàlida per "%s".',
      'Adjust Timezone' => 'Ajustar el fus horari',
      '%s updated her profile' => '%s ha actualitzat el seu perfil',
      'Add Contact Number' => 'Afegir un número de contacte',
      'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.
    | Setting              | Example Mail Subject
    |----------------------|----------------
    | Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
    | Do Not Vary Subjects | `[Maniphest] T123: Example Task`
    This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.' => 'Si teniu habilitat **Vary Subjects** la majoria dels Assumptes dels correus inclouran una descripció breu del seu contingut, per exemple `[Tancat]` per notificar que algú ha tancat una tasca.
    | Configuració           |  Exemple d\'assumpte de correu 
    |------------------------|------------------------------------------
    | Diversos assumptes     | `[Maniphest] [Tancat] T123: Exemple tasca`
    | No diversos assumptes  | `[Maniphest] T123: Exemple tasca`
    Això pot incrementar la utilitat del correu, però a alguns clients els dificulta fer fils de correus. Desactivar aquesta opció pot facilitar fer fils de correu, encara que disminueixi la utilitat de l\'Assumpte.',
      'Value "%s" is not valid for setting "%s": valid values are %s.' => 'El valor "%s" no és vàlid per la configuració de "%s": els valors vàlids són %s.',
      'You can opt to receive plain text email from Phabricator instead of HTML email. Plain text email works better with some clients.' => 'Podeu optar per rebre correu electrònic de text senzill de Phabricator en comptes de correu electrònic d\'HTML. El correu de text senzill funciona millor per alguns clients.',
      'Extra Settings' => 'Configuracions extres',
      'Are you sure you want to delete this address? You will no longer be able to use it to login.' => 'Esteu segurs que voleu eliminar aquesta adreça? Ja no podreu utilitzar-la per iniciar sessió.',
      'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => 'Podeu personalitzar la font utilitzada quan mostreu text monoespaiat, incloent codi de font. Hauríeu d\'introduir una declaració de font de CSS vàlida, com per exemple: `13px Consolas`',
      'Enable Self Action Mail' => 'Habilitar el correu electrònic d\'acció personal',
      'You haven\'t added any SSH Public Keys.' => 'No heu afegit claus públiques SSH.',
      'All Messages' => 'Tots els missatges',
      'This browser has been granted permission to send desktop notifications for this Phabricator instance.' => 'Aquest navegador té permís per enviar notificacions d\'escriptori per aquesta instància de Phabricator.',
      'Save Preference' => 'Desar les preferències',
      'Email Format' => 'Format de correu',
      'Your browser timezone and profile timezone are now in agreement (%s).' => 'Ara el fus horari del vostre navegador i el del vostre perfil es corresponen (%s).',
      'Edit Authentication Factor' => 'Editar el factor d\'autenticació',
      'Changing your password will terminate any other outstanding login sessions.' => 'Canviar la vostra contrasenya rescindirà qualsevol altra sessió que tingueu oberta.',
      'You have no linked accounts.' => 'No teniu comptes enllaçats.',
      'Active Login Sessions' => 'Sessions iniciades actives',
      'Edit Global Settings' => 'Editar la configuració global',
      'Ignore Conflict' => 'Ignorar el conflicte',
      'Delete Authentication Factor' => 'Esborrar el factor d\'autenticació',
      '%s updated their profile' => '%s ha actualitzat el seu perfil',
      'Current Setting' => 'Paràmetres actuals',
      'Visual Studio Code' => 'Visual Studio Code',
      'Provider: %s' => 'Proveïdor: %s',
      'Use Variable-Width Font' => 'Utilitzar una font d\'amplada variable',
      'Use Plain Text: [Differential]' => 'Utilitzeu text senzill: [Diferencial]',
      '⚪ Ignore' => '⚪ Ignorar',
      'Date Format' => 'Format de data',
      'Your browser timezone (%s) differs from your profile timezone (%s). You can ignore this conflict or adjust your profile setting to match your client.' => 'El fus horari del vostre navegador (%s) difereix del fus horari del vostre perfil (%s). Podeu ignorar aquest conflicte o ajustar el perfil perquè es correspongui amb el del client.',
      'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => 'Aquesta instal·lació no té proveïdors de MFA actius configurats. Cal que hi hagi, com a mínim, un proveïdor configurat i actiu abans que pugueu afegir factors de MFA nous.',
      'Select the format you prefer for editing and displaying time.' => 'Seleccioneu el format que preferiu per editar i mostrar l\'hora.',
      'The conflict between your browser and profile timezone settings will be ignored.' => 'S\'ignorarà el conflicte entre el vostre navegador i la configuració del fus horari del vostre perfil.',
      'Terminate All Sessions' => 'Tancar totes les sessions',
      'Your account is linked with all available providers.' => 'El vostre compte està enllaçat amb tots els proveïdors disponibles.',
      'Timezone Ignored Offset' => 'S\'ha ignorat el canvi de fus horari',
      'External Accounts' => 'Comptes externs',
      'If you disable **Self Actions**, Phabricator will not notify you about actions you take.' => 'Si desactives **Self Accions**, Phabricator no et notificarà de les accions de què t\'encarregues.',
      'Verification Email Sent' => 'Correu electrònic de verificació enviat',
      'Add External Account' => 'Afegir comptes externs',
      'Mail Headers and Body' => 'Encapçalaments i cos de correu',
      'You haven\'t added any authentication factors to your account yet.' => 'Encara no heu afegit cap factor d\'autenticació al vostre compte.',
      'To set a new password, request a password reset link from the login screen and then follow the instructions.' => 'Per posar una contrasenya nova, demaneu un enllaç de restabliment de la contrasenya des de la pantalla d\'inici de sessió i seguiu les instruccions.',
      'Multi-Factor Auth' => 'Autenticació multi-factor',
      'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => 'Pots escollir utilitzar una font monoespaiada o d\'amplada variable en àrees de text a l\'UI. Les àrees de text serveixen per editar descripcions i escriure comentaris, entre altres coses.',
      'Disable Self Action Mail' => 'Deshabilita el correu d\'accions pròpies',
      'Filetree Visible' => 'Arbre d\'arxius visible',
      'Grant Permission' => 'Donar permís',
      'Edit Settings Configurations' => 'Editar els paràmetres de configuració',
      'Monospaced Textareas' => 'Àrees de text monoespaiades',
      'Really remove the authentication factor %s from your account?' => 'Realment voleu treure el factor d\'autenticació %s del vostre compte?',
      'Mail Headers' => 'Capçaleres de correu',
      'Old Password' => 'Contrasenya antiga',
      'Conpherence Column Minimize' => 'Minimitzar la columna Conpherence',
      'Display Preferences' => 'Mostrar les preferències',
      'Add Auth Factor' => 'Afegir un factor d\'autenticació',
      'You don\'t have any active sessions.' => 'No tens cap sessió activa.',
      'Changes saved.' => 'Modificacions desades.',
      'Authentication factors must have a name to identify them.' => 'Als factors d\'autenticació els cal un nom per poder identificar-los.',
      'Diffusion Blame' => 'Responsable de Diffusion',
      'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => 'El diàleg que demana permís per enviar notificacions a l\'escriptori ha estat tancat, anteriorment, sense permís. Només s\'enviaran notificacions de l\'aplicació.',
      'Really delete address \'%s\'?' => 'Realment voleu eliminar l\'adreça \'%s\'?',
      'Another user already has this email.' => 'Un altre usuari ja té aquest correu electrònic.',
      'Change primary email address?' => 'Voleu canviar l\'adreça de correu electrònic primari?',
      'Monospaced Font' => 'Font monoespaiada',
      'HTML Email' => 'Correu electrònic en HTML',
      'Global Defaults' => 'Valors predefinits globals',
      'Enable "Re:" Prefix' => 'Habilita "Re:" Prefix',
      'Phabricator can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => 'Phabricator pot enviar notificacions en temps real al vostre navegador de web o al vostre escriptori. Seleccioneu on voleu rebre-les.',
      'Change Timezone' => 'Canviar el fus horari',
      'DarkConsole Visible' => 'DarkConsole Visible',
      'DarkConsole is a debugging console for developing and troubleshooting Phabricator applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => 'DarkConsole és una consola de depuració ("debugging") per aplicacions de Phabricator pel desenvolupament i resolució de problemes ("troubleshooting"). Després d\'habilitar DarkConsole, cliqueu la tecla {nav`} en el vostre teclat per commutar entre on i off.',
      'You can adjust **Application Settings** here to customize when you are emailed and notified.
    | Setting | Effect
    | ------- | -------
    | Email | You will receive an email and a notification, but the notification will be marked "read".
    | Notify | You will receive an unread notification only.
    | Ignore | You will receive nothing.
    If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.
    These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => 'Podeu ajustar la **Configuració de les aplicacions** aquí per personalitzar-vos quan esteu enviat per correu electrònic i notificat. 
    | Configuració | Efecte 
    | -------- | ---------- 
    | Correu electrònic | Rebràs un correu electrònic i una notificació, però la notificació es marcarà com a "llegida". 
    | Notifica | Només rebreu una notificació sense llegir. 
    | Ignorar | No rebràs res. 
    Si una actualització fa diversos canvis (com afegir CCs a una tasca, tancar-la i afegir un comentari) rebreu la notificació més forta que qualsevol dels canvis està configurat per lliurar. 
    Aquestes preferències **només** s\'apliquen als objectes als quals esteu connectat (per exemple, les revisions on sou un revisor o les tasques en les quals esteu connectat).  Per rebre alertes de correu electrònic quan es creen altres objectes, configureu [[ /herald/ | Regles de l\'Herald ]].',
      'Europe: 28-02-2000' => 'Europa: 28-02-2000',
      'The old password you entered is incorrect.' => 'La contrasenya antiga que has proporcionat no és correcta.',
      '◐ Notify' => '◐ Notificar',
      '%s updated his profile' => '%s ha actualitzat el seu perfil',
      'Timezone Calibrated' => 'Fus horari calibrat',
      'Limited Translations' => 'Traduccions limitades',
      'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes' => 'El valor de font monoespaiada "%s" no és segur. Només podeu introduir lletres, números, espais, comes, punts, guions, barres inclinades i cometes dobles',
      'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have installed and configured such an editor, Phabricator can generate links that you can click to open files locally.
    Provide a URI pattern for building external editor URIs in your environment. For example, if you use TextMate on macOS, the pattern for your machine may look something like this:
    ```name="Example: TextMate on macOS"
    %s
    ```
    For complete instructions on editor configuration, see **[[ %s | %s ]]**.
    See the tables below for a list of supported variables and protocols.' => 'Molts editors de text es poden configurar com a gestors URI per a protocols especials com `editor://`. Si heu instal·lat i configurat un editor d\'aquest tipus, Phabricator pot generar enllaços que podeu clicar per obrir fitxers localment. 
    Proporcioneu un patró URI per a la construcció d\'URIs de l\'editor extern al vostre entorn. Per exemple, si fas servir TextMate al macOS, el patró de la teva màquina pot semblar una cosa així: 
    ```name="Exemple: TextMate al macOS"
    %s
    ```
    Per a instruccions completes sobre la configuració de l\'editor, vegeu **[[ %s | %s ]]**. 
    Vegeu les taules següents per a una llista de variables i protocols compatibles.',
      'Silly Translations' => 'Traduccions ximples',
      'Phabricator normally shows diffs in a side-by-side layout on large screens and automatically switches to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.' => 'Normalment, Phabricator mostra diferències en un disseny conjunt a pantalles grans i canvia automàticament a una vista unificada en pantalles petites (com ara els telèfons mòbils). Si preferiu diferències unificades fins i tot en pantalles grans, podeu seleccionar-les per utilitzar-les a totes les pantalles.',
      'Search Scope' => 'Abast de cerca',
      'Email Preferences' => 'Preferències de correu electrònic',
      'You don\'t have any active tokens.' => 'No teniu cap testimoni actiu.',
      '24 Hour, 14:34' => '24 Hores, 14:34',
      'Expired' => 'Caducat',
      'No Notifications' => 'Sense notificacions',
      'Password Algorithms' => 'Algorismes de contrasenya',
      'Your password is currently hashed using an algorithm which is no longer available on this install.' => 'Actualment, la vostra contrasenya es compta amb un algorisme que ja no està disponible en aquesta instal·lació.',
      'Send HTML Email' => 'Enviar un correu electrònic en HTML',
      'Translation' => 'Traducció',
      'Time Format' => 'Forma d\'hora',
      'Send Notifications' => 'Enviar notificacions',
      'Sunday' => 'Diumenge',
      'Web Only' => 'Només web',
      'Developer/Test Translations' => 'Traduccions de prova/desenvolupament',
      'User Preferences' => 'Preferències d\'usuari',
      'No Sounds' => 'Sense so',
      'Choose the default sound behavior for new Conpherence rooms.' => 'Trieu el comportament de so predeterminat per a les noves sales de Conpherence.',
      'Friday' => 'Divendres',
      'Timezone "%s" is not a valid timezone identifier.' => 'El fus horari \'%s\' no és un identificador de fus horari vàlid.',
      'Select your local timezone.' => 'Seleccioneu el vostre fus horari local.',
      'If you change your primary address, Phabricator will send all email to %s.' => 'Si canvieu l\'adreça principal, Phabricator us enviarà tots els correus electrònics a %s.',
      'Because the algorithm implementation is missing, your password can not be used or updated.' => 'No podeu utilitzar ni actualitzar la vostra contrasenya perquè falta la implementació de l\'algorisme',
      'Verify' => 'Verificar',
      'Choose which day a calendar week should begin on.' => 'Trieu el dia que ha de començar una setmana natural.',
      'Date and Time' => 'Dia i hora',
      'Use Monospaced Font' => 'Utilitzar una font monoespaiada',
      '⚫ Email' => '⚫ Correu electrònic',
      'Pronoun' => 'Pronom',
      'Choose the default notification behavior for Conpherence rooms.' => 'Trieu el comportament de notificació per defecte per a les sales de Conpherence.',
      'Note: Changing your primary email address will invalidate any outstanding password reset links.' => 'Nota: si canvieu la vostra adreça electrònica principal, els enllaços de restabliment de contrasenya pendents quedaran invalidats.',
      'Your primary email address is unverified. You will not be able to receive email until you verify it.' => 'La vostra adreça electrònica principal no està verificada. No podreu rebre correus electrònics fins que no la verifiqueu.',
      'No settings panel group with key "%s" exists!' => 'No existeix cap grup de panells de paràmetres amb la clau «%s»!',
      'Conflict Ignored' => 'Conflicte ignorat',
      'This engine is used to edit settings.' => 'Aquest motor s’utilitza per editar la configuració.',
      'Primary Email Unverified' => 'Correu electrònic principal no verificat',
    );
  }

}
