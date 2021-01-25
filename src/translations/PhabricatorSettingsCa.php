<?php

final class PhabricatorSettingsCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      '12 Hour, 2:34 PM' => '12 Hores, 2:34 PM',
      'When a revision is updated, Phabricator attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => 'Quan s\'actualitza una revisió, Phabricator mira d\'incorporar a la nova versió, els comentaris ("inline") de la versió antiga. Pots desactivar aquesta funció si prefereixes que els comentaris quedin ancorats només a una de les versions.',
      'Default (%s)' => 'Per defecte (%s)',
      'You haven\'t added any contact numbers to your account.' => 'No heu afegit cap número de contacte al vostre compte.',
      'Conpherence Column Visible' => 'Columna de l\'aplicació Conpherence Visible',
      'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => 'Aquest navegador de web no dóna suport a les notificacions d\'escriptori. Per a aquest navegador només s\'enviaran notificacions de l\'aplicació, independentment d\'aquesta preferència.',
      'Choose Factor Type' => 'Escolliu Tipus de Factor',
      'Page Titles' => 'Títols de pàgina',
      'Personal Account Settings' => 'Configuracions de Compte Personal',
      'ISO 8601: 2000-02-28' => 'ISO 8601: 2000-02-28',
      'Global Default Settings' => 'Configuració Global per Defecte',
      'Self Actions' => 'Accions pròpies',
      'Choose which language you would like the Phabricator UI to use.' => 'Escolliu quina llengua t\'agradaria que utilitzés el Phabricator UI.',
      'Email Notifications' => 'Notificacions per correu electrònic',
      'Show Unified Diffs' => 'Mostra diferències ("Diffs") unificades',
      'Diff Preferences' => 'Preferències de les diferències ("Diff")',
      'Saturday' => 'Dissabte',
      'Change Primary Address' => 'Canvia l\'adreça principal',
      'Send Stamps' => 'Enviar segells ("stamps")',
      'Show Older Inlines' => 'Mostra insercions "inlines" més antigues',
      'Select the format you prefer for editing dates.' => 'Seleccioneu el format que preferiu per editar dates.',
      'On Small Screens' => 'En pantalles petites',
      'A verification email has been sent. Click the link in the email to verify your address.' => 'S\'ha enviat un correu de verificació. Cliqueu l\'enllaç en el correu per verificar la vostra adreça.',
      'Enable Email Notifications' => 'Habilitar notificacions de correu electrònic',
      'Edit global default settings for all users.' => 'Editeu la configuració global per defecte per a tots els usuaris.',
      'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.
    | Setting                | Example Mail Subject
    |------------------------|----------------
    | Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
    | Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`' => 'La configuració **Add "Re:" Prefix**  afegeix "Re:" davant de tots els  missatges, fins i tot si no són respostes. Si utilitzeu *Mail.app** en Mac OS X, us pot ajudar a millorar els fils de correu.
    | Configuració | Exemple d\'Assumpte de correu
    |------------------------|----------------
    | Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
    | Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`',
      'No settings panels are available.' => 'No hi ha cap plafó de configuració disponible.',
      'Empty string is not a valid setting for "%s".' => 'Cadena buida no és una configuració vàlida per "%s".',
      'Adjust Timezone' => 'Ajusta el fus horari',
      '%s updated her profile' => '%s ha actualitzat el seu perfil',
      'Add Contact Number' => 'Afegiu Número de Contacte',
      'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.
    | Setting              | Example Mail Subject
    |----------------------|----------------
    | Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
    | Do Not Vary Subjects | `[Maniphest] T123: Example Task`
    This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.' => 'Si teniu habilitat **Vary Subjects** la majoria dels Assumptes dels correus inclouran una descripció breu del seu contingut, per exemple `[Tancat]` per notificar que algú ha tancat una tasca.
    | Configuració   | Exemple d\'assumpte de correu 
    |----------------------|----------------
    | Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
    | Do Not Vary Subjects | `[Maniphest] T123: Example Task`
    Això pot incrementar la utilitat del correu, però a alguns clients els dificulta fer fils de correus. Desactivar aquesta opció pot facilitar fer fils de correu, encara que disminueixi la utilitat de l\'Assumpte.',
      'Value "%s" is not valid for setting "%s": valid values are %s.' => 'El valor "%s" no és vàlid per la configuració de "%s": els valors vàlids són %s.',
      'You can opt to receive plain text email from Phabricator instead of HTML email. Plain text email works better with some clients.' => 'Podeu optar per rebre correu electrònic de text senzill de Phabricator en comptes de correu electrònic d\'HTML. Els correus de text senzill funciona millor per alguns clients.',
      'Extra Settings' => 'Configuracions extres',
      'Are you sure you want to delete this address? You will no longer be able to use it to login.' => 'Esteu segurs que voleu eliminar aquesta adreça? Ja no podreu utilitzar-la per iniciar sessió.',
      'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => 'Podeu personalitzar la font utilitzada quan mostreu text monoespaiat, incloent codi de font. Hauríeu d\'introduir una declaració de font de CSS vàlida, com per exemple: `13px Consolas`',
      'Enable Self Action Mail' => 'Habilita Correu Self Action',
      'You haven\'t added any SSH Public Keys.' => 'No heu afegit Claus Públiques SSH.',
      'All Messages' => 'Tots els missatges',
      'This browser has been granted permission to send desktop notifications for this Phabricator instance.' => 'Aquest navegador té permís per enviar notificacions d\'escriptori per aquesta instància de Phabricator.',
      'Save Preference' => 'Deseu les preferències',
      'Email Format' => 'Format de correu',
      'Your browser timezone and profile timezone are now in agreement (%s).' => 'La zona horària del vostre navegador i la del vostre perfil ara es corresponen  (%s).',
      'Edit Authentication Factor' => 'Editeu el factor d\'autenticació',
      'Changing your password will terminate any other outstanding login sessions.' => 'Canviar la vostra contrasenya rescindirà qualsevol altra sessió que tingueu oberta.',
      'You have no linked accounts.' => 'No teniu comptes enllaçats.',
      'Active Login Sessions' => 'Sessions iniciades actives',
      'Edit Global Settings' => 'Editeu la configuració global',
      'Ignore Conflict' => 'Ignora el conflicte',
      'Delete Authentication Factor' => 'Esborreu el factor d\'autenticació',
      '%s updated their profile' => '%s ha actualitzat el seu perfil',
      'Current Setting' => 'Paràmetre actual',
      'Provider: %s' => 'Proveïdor: %s',
      'Use Variable-Width Font' => 'Utilitzeu font d\'amplada variable',
      'Use Plain Text: [Differential]' => 'Utilitzeu text senzill: [Diferencial]',
      '⚪ Ignore' => 'Ignoreu',
      'Date Format' => 'Format de data',
      'Your browser timezone (%s) differs from your profile timezone (%s). You can ignore this conflict or adjust your profile setting to match your client.' => 'La zona horària del vostre navegador (%s) difereix de la zona horària del vostre perfil (%s). Podeu ignorar aquest conflicte o ajustar el perfil perquè es correspongui amb el del client.',
      'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => 'Aquesta instal·lació no té proveïdors de MFA actius configurats. Cal que hi hagi, com a mínim, un proveïdor configurat i actiu abans que pogueu afegir factors de MFA nous.',
      'Select the format you prefer for editing and displaying time.' => 'Seleccionar el format que preferiu per editar i mostrar temps.',
      'The conflict between your browser and profile timezone settings will be ignored.' => 'S\'ignorarà el conflicte entre el vostre navegador i la configuració de la zona horària del vostre perfil.',
      'Terminate All Sessions' => 'Tancar totes les sessions',
      'Your account is linked with all available providers.' => 'El vostre compte està enllaçat amb tots els proveïdors  disponibles.',
      'Timezone Ignored Offset' => 'Diferència entre zones horàries ignorada',
      'External Accounts' => 'Comptes externs',
      'If you disable **Self Actions**, Phabricator will not notify you about actions you take.' => 'Si desactives **Self Accions**, Phabricator no et notificarà de les accions de què t\'encarregues.',
      'Verification Email Sent' => 'Correu electrònic de verificació enviat',
      'Add External Account' => 'Afegeix comptes externs',
      'Mail Headers and Body' => 'Encapçalaments i cos de correu',
      'You haven\'t added any authentication factors to your account yet.' => 'Encara no heu afegit cap factor d\'autenticació al vostre compte.',
      'To set a new password, request a password reset link from the login screen and then follow the instructions.' => 'Per posar una contrasenya nova, demaneu un enllaç des de la pantalla d\'Inici de Sessió i seguiu les instruccions.',
      'Multi-Factor Auth' => 'Autenticació multi-factor',
      'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => 'Pots escollir utilitzar una font mono-espaiada o d\'amplada variable  en àrees de text a l\'UI. Les àrees de text serveixen per editar descripcions i escriure comentaris, entre altres coses.',
      'Disable Self Action Mail' => 'Deshabilita correu d\'accions pròpies ("self-action")',
      'Filetree Visible' => 'Arbre d\'arxius visible',
      'Grant Permission' => 'Doneu permís',
      'Edit Settings Configurations' => 'Editeu configuracions',
      'Monospaced Textareas' => 'Àrees de text mono-espaiades',
      'Really remove the authentication factor %s from your account?' => 'Realment voleu treure el factor d\'autenticació %s del vostre compte?',
      'Mail Headers' => 'Capçalera de mail',
      'Old Password' => 'Contrasenya antiga',
      'Conpherence Column Minimize' => 'Minimitzeu la columna Conpherence',
      'Display Preferences' => 'Mostra les preferències',
      'Add Auth Factor' => 'Afegeix factor d\'autenticació',
      'You don\'t have any active sessions.' => 'No tens cap sessió activa.',
      'Changes saved.' => 'Modificacions desades.',
      'Authentication factors must have a name to identify them.' => 'Als factors d\'autenticació els cal un nom per poder identificar-los.',
      'Diffusion Blame' => 'Diffusion Blame',
      'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => 'El diàleg que demana permís per enviar notificacions a l\'escriptori ha estat tancat, anteriorment, sense permís. Només s\'enviaran notificacions d\'aplicació.',
      'Really delete address \'%s\'?' => 'Realment voleu eliminar l\'adreça \'%s\'?',
      'Another user already has this email.' => 'Un altre usuari ja té aquest correu electrònic.',
      'Change primary email address?' => 'Voleu canviar l\'adreça del correu electrònic primari?',
      'Monospaced Font' => 'Lletra monoespaiada',
      'HTML Email' => 'Correu electrònic en HTML',
      'Global Defaults' => 'Valors predefinits globals',
      'Enable "Re:" Prefix' => 'Habilita "Re:" Prefix',
      'Phabricator can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => 'Phabricator pot enviar notificacions en temps real  al vostre navegador de web o al vostre escriptori. Seleccioneu on voleu rebre-les.',
      'Change Timezone' => 'Canvia el fus horari',
      'DarkConsole Visible' => 'DarkConsole Visible',
      'DarkConsole is a debugging console for developing and troubleshooting Phabricator applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => 'DarkConsole és una consola de depurar ("debugging") per aplicacions de Phabricator pel desenvolupament i resolució de problemes ("troubleshooting"). Després d\'habilitar DarkConsole, cliqueu la tecla {nav`} en el vostre teclat per commutar entre on i off.',
      'Europe: 28-02-2000' => 'Europa: 28-02-2000',
      'The old password you entered is incorrect.' => 'La contrasenya antiga que has proporcionat no és correcta.',
      '◐ Notify' => '◐ Notifica',
      '%s updated his profile' => '%s ha actualitzat el seu perfil',
      'Limited Translations' => 'Traduccions limitades',
      'Silly Translations' => 'Traduccions ximples',
      'Email Preferences' => 'Preferències de correu electrònic',
      'You don\'t have any active tokens.' => 'No teniu cap testimoni actiu.',
      '24 Hour, 14:34' => '24 Hores, 14:34',
      'Expired' => 'Caducat',
      'No Notifications' => 'Sense notificacions',
      'Password Algorithms' => 'Algoritmes de contrasenya',
      'Send HTML Email' => 'Envia correu electrònic en HTML',
      'Translation' => 'Traducció',
      'Time Format' => 'Forma d\'hora',
      'Send Notifications' => 'Envia notificacions',
      'Sunday' => 'Diumenge',
      'Web Only' => 'Només web',
      'Developer/Test Translations' => 'Traduccions de prova/desenvolupament',
      'User Preferences' => 'Preferències d\'usuari',
      'No Sounds' => 'Sense so',
      'Friday' => 'Divendres',
      'Verify' => 'Verifica',
      'Date and Time' => 'Dia i hora',
      '⚫ Email' => '⚫ Correu electrònic',
      'Pronoun' => 'Pronom',
      'Conflict Ignored' => 'Conflicte ignorat',
    );
  }

}
