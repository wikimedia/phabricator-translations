<?php

final class PhabricatorSettingsFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      '12 Hour, 2:34 PM' => '12 Heures, 2:34 PM',
      'Default (%s)' => 'Par défaut (%s)',
      'You haven\'t added any contact numbers to your account.' => 'Vous n’avez ajouté aucun numéro de contact à votre compte.',
      'Conpherence Column Visible' => 'Colonne de Conpherence visible',
      'External Editor' => 'Éditeur externe',
      'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => 'Ce navigateur web ne prend pas en charge les notifications de bureau. Seules les notifications d’application seront envoyées pour ce navigateur, indépendamment de cette préférence.',
      'Choose Factor Type' => 'Sélectionner le type de facteur',
      'Page Titles' => 'Titres de page',
      'Personal Account Settings' => 'Paramètres du compte personnel',
      'ISO 8601: 2000-02-28' => 'ISO 8601 : 2000-02-28',
      'Global Default Settings' => 'Paramètres par défaut globaux',
      'Self Actions' => 'Auto-actions',
      'If you have difficulty reading the UI, this setting may help.' => 'Si vous avez des difficultés à lire l’interface utilisateur de Phabricator, ce paramètre peut rendre Phabricator plus accessible.',
      'Email Notifications' => 'Notifications par courriel',
      'Show Unified Diffs' => 'Afficher les diffs unifiés',
      'Diff Preferences' => 'Préférences des diffs',
      'Saturday' => 'Samedi',
      'Change Primary Address' => 'Changer l’adresse principale',
      'Send Stamps' => 'Horodatages d’envoi',
      'Show Older Inlines' => 'Afficher les inclusions plus anciennes',
      'Select the format you prefer for editing dates.' => 'Sélectionnez le format que vous préférez pour modifier les dates.',
      'On Small Screens' => 'Sur les petits écrans',
      'A verification email has been sent. Click the link in the email to verify your address.' => 'Un courriel de vérification a été envoyé. Cliquez sur le lien dans le courriel reçu pour vérifier votre adresse.',
      'Enable Email Notifications' => 'Activer les notifications par courriel',
      'Diffs are normally shown in a side-by-side layout on large screens and automatically switched to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.' => 'Phabricator affiche normalement les diffs dans une disposition côte-à-côte pour les écrans larges et bascule automatiquement sur une vue unifiée pour les écrans étroits (comme les téléphones mobiles). Si vous préférez des diffs unifiés même sur écrans larges, vous pouvez sélectionner qu\'ils soient utilisés sur tous les affichages.',
      'Generic Editor' => 'Éditeur générique',
      'Edit global default settings for all users.' => 'Modifier les paramètres par défaut globaux pour tous les utilisateurs.',
      'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.
    | Setting                | Example Mail Subject
    |------------------------|----------------
    | Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
    | Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`' => 'La paramètre **Ajouter le préfixe « Re: »** ajoute « Re: » en tête de tous les messages, même s’ils ne sont pas des réponses. Si vous utilisez **Mail.app** sur Mac OS X, ceci peut améliorer le suivi en fil des courriels.
      | Paramètre                     | Exemple de sujet de courriel
      |-------------------------------|----------------------------------------------------------
      | Activer le préfixe « Re: »    | `Re: [Différentiel] [Accepté] D123 : exemple de révision`
      | Désactiver le préfixe « Re: » | `[Différentiel] [Accepté] D123 : exemple de révision`',
      'No settings panels are available.' => 'Aucun panneau de paramètres n’est disponible.',
      'Empty string is not a valid setting for "%s".' => 'Une chaîne vide n’est pas un paramètre valide pour « %s ».',
      'Adjust Timezone' => 'Ajuster le fuseau horaire',
      'If you disable **Email Notifications**, this server will never send email to notify you about events. This preference overrides all your other settings.
    //You will still receive some administrative email, like password reset email.//' => 'Si vous désactivez les **notifications par courriel**, Phabricator n’enverra jamais aucun courriel pour vous notifier des événements. Cette préférence remplace tous vos autres paramètres.
    //Vous recevrez encore certains courriels administratifs, tels que les courriels de réinitialisation de mot de passe.//',
      '%s updated her profile' => '%s a mis à jour son profil',
      'Add Contact Number' => 'Ajouter un numéro de contact',
      'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.
    | Setting              | Example Mail Subject
    |----------------------|----------------
    | Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
    | Do Not Vary Subjects | `[Maniphest] T123: Example Task`
    This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.' => 'Avec **Varier les sujets** activé, la plupart des lignes de sujet de courriel incluront une brève description de leur contenu, telle que `[Fermé]` pour une notification quand quelqu’un ferme une tâche.
      | Paramètre                | Exemple de sujet de courriel
      |--------------------------|----------------------------------------------
      | Varier les sujets        | `[Maniphest] [Fermé] T123 : exemple de tâche`
      | Ne pas varier les sujets | `[Maniphest] T123 : exemple de tâche`
    Ceci peut rendre les courriels plus utiles, mais certains clients ont des difficultés à garder le fil de ces messages. La désactivation de cette option peut améliorer le suivi des fils au prix de rendre les lignes de sujet moins utiles.',
      'Value "%s" is not valid for setting "%s": valid values are %s.' => 'La valeur « %s » n’est pas valide pour le réglage « %s » : les valeurs valides sont %s.',
      'Extra Settings' => 'Paramètres supplémentaires',
      'Are you sure you want to delete this address? You will no longer be able to use it to login.' => 'Êtes-vous sûr{{GENDER:||}} de vouloir supprimer cette adresse ? Vous ne pourrez plus l’utiliser pour vous connecter.',
      'If you change your primary address, %s will send all email to %s.' => 'Si vous changez votre adresse principale, Phabricator enverra tous les courriels à %s.',
      'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => 'Vous pouvez personnaliser la police utilisée pour afficher du texte à chasse fixe, dont le code source. Vous devez entrer une déclaration de police CSS valide telle que : `13px Consolas`',
      'Enable Self Action Mail' => 'Activer les courriels pour vos propres actions',
      'You haven\'t added any SSH Public Keys.' => 'Vous n’avez ajouté aucune clé publique SSH.',
      'All Messages' => 'Tous les messages',
      'DarkConsole is a debugging console for developing and troubleshooting applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => 'DarkConsole est une console de débogage pour développer et dépanner des applications Phabricator. Après avoir activité DarkConsole, appuyez sur la touche {nav `} de votre clavier pour l\'afficher ou la cacher.',
      'Save Preference' => 'Enregistrer les préférences',
      'Email Format' => 'Format des courriels',
      'Your browser timezone and profile timezone are now in agreement (%s).' => 'Le fuseau horaire de votre navigateur et celui de votre profil sont désormais compatibles (%s).',
      'Edit Authentication Factor' => 'Modifier le facteur d’authentification',
      'Changing your password will terminate any other outstanding login sessions.' => 'Changer votre mot de passe mettra fin à toutes les autres sessions connectées en cours.',
      'You have no linked accounts.' => 'Vous n’avez aucun compte lié.',
      'Active Login Sessions' => 'Sessions de connexion actives',
      'Edit Global Settings' => 'Modifier les paramètres globaux',
      'Ignore Conflict' => 'Ignorer le conflit',
      'Vary Subjects' => 'Varier les sujets',
      'Delete Authentication Factor' => 'Supprimer le facteur d’authentification',
      '%s updated their profile' => '%s a mis à jour son profil',
      'Current Setting' => 'Paramètres actuels',
      'Visual Studio Code' => 'Visual Studio Code',
      'Provider: %s' => 'Fournisseur : %s',
      'Use Variable-Width Font' => 'Utiliser une police à chasse variable',
      'Use Plain Text: [Differential]' => 'Utiliser le texte simple : [Différentiel]',
      '⚪ Ignore' => '⚪ Ignorer',
      'Date Format' => 'Format de date',
      'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => 'Cette installation n’a aucun fournisseur MFA configuré. Au moins un fournisseur doit être configuré et actif avant que vous puissiez ajouter de nouveaux facteurs MFA.',
      'Select the format you prefer for editing and displaying time.' => 'Sélectionner le format que vous préférez pour modifier et afficher la date.',
      'The conflict between your browser and profile timezone settings will be ignored.' => 'Le conflit entre votre navigateur et le fuseau horaire défini dans le profil sera ignoré.',
      'Terminate All Sessions' => 'Mettre fin à toutes les sessions',
      'Your account is linked with all available providers.' => 'Votre compte est lié à tous les fournisseurs disponibles.',
      'Timezone Ignored Offset' => 'Décalage du fuseau horaire ignoré',
      'External Accounts' => 'Comptes externes',
      'Verification Email Sent' => 'Courriel de vérification envoyé',
      'Add External Account' => 'Ajouter un compte externe',
      'Mail Headers and Body' => 'Entêtes et corps des courriels',
      'You haven\'t added any authentication factors to your account yet.' => 'Vous n’avez ajouté aucun facteur d’authentification à votre compte pour le moment.',
      'To set a new password, request a password reset link from the login screen and then follow the instructions.' => 'Pour modifier votre mot de passe, utilisez le lien de réinitialisation du mot de passe depuis l’écran de connexion et suivez ensuite les instructions.',
      'Multi-Factor Auth' => 'Authentification multifactorielle',
      'No allowed editor protocols are configured.' => 'Phabricator n’est pas configuré pour autoriser les protocoles d’édition.',
      'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => 'Vous pouvez choisir d’utiliser une police à chasse fixe ou à chasse variable dans les champs de texte de l’interface utilisateur. Les champs de texte sont utilisés entre autres pour modifier des descriptions et rédiger des commentaires.',
      'Disable Self Action Mail' => 'Désactiver les courriels pour vos propres actions',
      'Filetree Visible' => 'Arborescence visible',
      'Edit Settings Configurations' => 'Modifier les configurations de paramètres',
      'Monospaced Textareas' => 'Champs de texte à chasse fixe',
      'Really remove the authentication factor %s from your account?' => 'Voulez-vous vraiment retirer le facteur d’authentification %s de votre compte ?',
      'Mail Headers' => 'Entêtes des courriels',
      'Old Password' => 'Ancien mot de passe',
      'Conpherence Column Minimize' => 'Minimiser la colonne Conpherence',
      'Display Preferences' => 'Préférences d’affichage',
      'Add Auth Factor' => 'Ajouter un facteur d’authentification',
      'You don\'t have any active sessions.' => 'Vous n’avez aucune session active.',
      'Changes saved.' => 'Modifications enregistrées.',
      'Authentication factors must have a name to identify them.' => 'Les facteurs d’authentification doivent avoir un nom pour les identifier.',
      'Choose the default behavior of the global search in the main menu.' => 'Choisir le comportement par défaut de la recherche globale dans le menu principal.',
      'Hypertext Transfer Protocol' => 'Protocole HTTP',
      'Diffusion Blame' => 'Responsable de diffusion',
      'Choose which language you would like the UI to use.' => 'Choisir la langue dans laquelle vous voulez utiliser l’interface utilisateur de Phabricator.',
      'Your browser timezone (%s) differs from your profile timezone (%s). You can adjust your profile setting to match your browser, or ignore this conflict to keep your current profile setting.' => 'Le fuseau horaire de votre navigateur (%s) est différent du fuseau horaire de votre profil (%s). Vous pouvez ignorer ce conflit ou mettre à jour le paramètre de votre profil pour correspondre à votre client.',
      'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => 'Le dialogue qui vous demander la permission d’envoyer des notifications de bureau a été fermé sans accorder la permission. Seules les notifications d’applications seront envoyées.',
      'Really delete address \'%s\'?' => 'Supprimer réellement l’adresse « %s » ?',
      'Another user already has this email.' => 'Un autre utilisateur possède déjà cette adresse courriel.',
      'Change primary email address?' => 'Changer l’adresse courriel principale ?',
      'Monospaced Font' => 'Police à chasse fixe',
      'HTML Email' => 'Courriel HTML',
      'Global Defaults' => 'Valeurs globales par défaut',
      'Conpherence Sound' => 'Son de Conpherence',
      'Enable "Re:" Prefix' => 'Activer le préfixe « Re: »',
      'DarkConsole Visible' => 'DarkConsole visible',
      'Supported Protocol' => 'Protocole pris en charge',
      'If you disable **Self Actions**, this server will not notify you about actions you take.' => 'Si vous désactivez **Vos propres actions**, Phabricator ne vous notifiera pas des actions que vous avez effectués.',
      'You are adding too many email addresses to your account too quickly.' => 'Vous ajoutez trop d’adresses de courriel à votre compte et cela trop rapidement.',
      'Your browser has not yet granted this server permission to send desktop notifications.' => 'Ce navigateur n’a pas encore accordé la permission d’envoyer des notifications de bureau pour cette instance de Phabricator.',
      'You can adjust **Application Settings** here to customize when you are emailed and notified.
    | Setting | Effect
    | ------- | -------
    | Email | You will receive an email and a notification, but the notification will be marked "read".
    | Notify | You will receive an unread notification only.
    | Ignore | You will receive nothing.
    If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.
    These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => 'Vous pouvez ajuster ici les **Paramètres d’application** pour régler quand vous serez notifié ou vous recevrez des courriels.
      | Paramètre | Effet
      |-----------|------------------------------------------------------------------------------------------------
      | Courriel  | Vous recevrez un courriel et une notification, mais la notification sera marquée comme « lue ».
      | Notifier  | Vous ne recevrez qu’une notification non lue.
      | Ignorer   | Vous ne recevrez rien.
    Si une mise à jour effectue plusieurs changements  (comme ajouter des destinataires de copie à une tâche, la fermer et ajouter un commentaire), vous recevrez la notification la plus forte parmi tout les changements configurés comme à livrer.
    Ces préférences ne s’appliquent **qu’aux seuls** objets auxquels vous êtes connecté (par exemple, les révisions dont vous étiez un relecteur ou les tâches où vous êtes un destinataire de copie). Pour recevoir des alertes par courriel quand d’autres objets sont créés, configurez les [[/herald/|Règles Herald]].',
      'You must enter your current password.' => 'Vous devez entrer votre mot de passe actuel.',
      'Europe: 28-02-2000' => 'Europe : 28-02-2000',
      'The old password you entered is incorrect.' => 'L’ancien mot de passe que vous avez fourni est incorrect.',
      '◐ Notify' => '◐ Notifier',
      '%s updated his profile' => '%s a mis à jour son profil',
      'You can change your date and time preferences in Settings.' => 'Vous pouvez changer vos préférences de date et d\'heure dans Paramètres.',
      'You can opt to receive plain text email instead of HTML email. Plain text email works better with some clients.' => 'Vous pouvez opter pour recevoir des courriels en texte simple de Phabricator au lieu de courriels formatés en HTML. Les courriels en texte simple fonctionnent mieux avec certains clients.',
      'Timezone Calibrated' => 'Fuseau horaire calibré',
      'Limited Translations' => 'Traductions limitées',
      'Email Delivery' => 'Acheminement de courriel',
      'Send Test Notification' => 'Envoyer une notification de test',
      'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes' => 'La valeur de police à chasse fixe « %s » n’est pas sécurisée. Vous ne pourriez saisir que des lettres, nombres, espaces, points, virgules, tirets, barres obliques et guillemets dactylographiques.',
      'Edit settings for your personal account.' => 'Modifier les paramètres de votre compte personnel.',
      'Create Settings' => 'Créer des paramètres',
      'Use Unicode Glyphs: ⚙' => 'Utiliser des glyphes Unicode : ⚙',
      'Editor Link' => 'Lien vers l’éditeur',
      'Silly Translations' => 'Traductions idiotes',
      'Send Plain Text Email' => 'Envoyer un courriel en texte simple',
      'DarkConsole' => 'DarkConsole',
      'Filetree Width' => 'Profondeur d’arborescence',
      'Hypertext Transfer Protocol over SSL' => 'Protocole de Transfert Hypertexte sur SSL',
      'Search Scope' => 'Portée des recherches',
      'Email Preferences' => 'Préférences de courriel',
      'You don\'t have any active tokens.' => 'Vous n’avez aucun jeton actif.',
      'Send another copy of the verification email to %s?' => 'Renvoyer le courriel de vérification à %s ?',
      '24 Hour, 14:34' => '24 heures, 14:34',
      'Disable "Re:" Prefix' => 'Désactiver le préfixe « Re: »',
      'Sublime Text' => 'Sublimer le texte',
      'Conpherence Widget Pane Visible' => 'Panneau du widget Conpherence visible',
      'Disable Email Notifications' => 'Désactiver les notifications par courriel',
      'Expired' => 'Expiré',
      'No Notifications' => 'Aucune notification',
      'Password Algorithms' => 'Algorithmes de mot de passe',
      'Your password is currently hashed using an algorithm which is no longer available on this install.' => 'Votre mot de passe est actuellement haché en utilisant un algorithme qui n’est plus disponible sur cette installation.',
      'Replaced With' => 'Remplacé par',
      'Send HTML Email' => 'Envoyer des courriels en HTML',
      'Translation' => 'Traduction',
      'Settings %d' => 'Paramètres %s',
      'Time Format' => 'Format de l’heure',
      'Permission for desktop notifications was denied. Only application notifications will be sent.' => 'Les notifications de bureau ont été désactivées. Seules les notifications d’applications seront envoyées.',
      'Send Notifications' => 'Envoyer des notifications',
      'Number' => 'Nombre',
      'Permanently Linked' => 'Lié de manière permanente',
      'Account Setup Issues' => 'Problèmes d’installation de compte',
      'Authentication Factors' => 'Phases d’authentification',
      'Web and Desktop' => 'Web et bureau',
      'Sunday' => 'Dimanche',
      'US: 2/28/2000' => 'États-Unis : 2/28/2000',
      'External Editor URI Variables' => 'Variables de l’URI de l’éditeur externe',
      'User Guide: Configuring an External Editor' => 'Manuel utilisateur : configurer un éditeur externe',
      'You have no account setup issues.' => 'Vous n’avez aucun problème d’installation de compte.',
      'Personal Settings' => 'Paramètres personnels',
      'Some applications use unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => 'Phabricator utilise des glyphes Unicode dans les titres de pages pour fournir une représentation compacte de l’application courante. Vous pouvez les remplacer par du texte simple s’ils ne s’affichent pas sur votre système.',
      'Web Only' => 'Web uniquement',
      'Disable Vary Subjects' => 'Désactiver les sujets variés',
      'Developer/Test Translations' => 'Traductions du développement et de test',
      'User Preferences' => 'Préférences utilisateur',
      'No Sounds' => 'Aucun son',
      'Create Global Defaults' => 'Créer des valeurs globales par défaut',
      'Enable Vary Subjects' => 'Autoriser les sujets Vary',
      'TextMate' => 'TextMate',
      'No MFA Providers' => 'Aucun fournisseur de MFA',
      'There is no known application setting with key "%s".' => 'Il n’existe aucun paramètre d’application avec la clé « %s ».',
      'Choose the default sound behavior for new Conpherence rooms.' => 'Choisissez le comportement par défaut du son dans les nouvelles salles de Conpherence.',
      'Policy Favorites' => 'Politiques favorites',
      'Conpherence Notifications' => 'Notifications de Conpherence',
      'Friday' => 'Vendredi',
      'Timezone "%s" is not a valid timezone identifier.' => 'Le fuseau « %s » n’est pas un identifiant valide de fuseau horaire.',
      'Select your local timezone.' => 'Sélectionnez votre fuseau horaire local.',
      'Note: Removing an email address from your account will invalidate any outstanding password reset links.' => 'Note : le retrait d’une adresse de courriel de votre compte invalidera tous les liens de réinitialisation de mot de passe en attente.',
      'Click "Save Preference" to persist these changes.' => 'Cliquez sur « Enregistrer les préférences » pour conserver ces changements.',
      'Your browser has granted this server permission to send desktop notifications.' => 'Ce navigateur a obtenu la permission d’envoyer des notifications de bureau pour cette instance de Phabricator.',
      'This browser has denied permission to send desktop notifications to this server. Consult your browser settings / documentation to figure out how to clear this setting, do so, and then re-visit this page to grant permission.' => 'Ce navigateur a refusé à cette instance de Phabricator la permission d’envoyer des notifications de bureau. Veuillez vous référer aux paramètres ou à la documentation de votre navigateur pour corriger ce réglage puis visitez à nouveau cette page pour accorder la permission.',
      'Week Starts On' => 'La semaine commence le',
      'When a revision is updated, this software attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => 'Quand une révision est mise à jour, Phabricator tente d’apporter les commentaires en ligne dans la version plus ancienne pour y intégrer les nouveaux changements. Vous pouvez désactiver ce comportement si vous préférez que les commentaires ne restent ancrés qu’à un seul emplacement.',
      'Remove Factor' => 'Retirer le facteur',
      'Your account does not currently have a password set. You can choose a password by performing a password reset.' => 'Votre compte n’a actuellement aucun mot de passe défini. Vous pouvez en choisir un en faisant une réinitialisation du mot de passe.',
      'Disabled (an administrator has disabled login for this account provider).' => 'Désactivé (un administrateur a désactivé la connexion pour ce fournisseur de compte).',
      'Send Another Verification Email?' => 'Envoyer un autre courriel de vérification ?',
      'Because the algorithm implementation is missing, your password can not be used or updated.' => 'Étant donné que la mise en œuvre de l’algorithme est manquante, votre mot de passe ne peut pas être utilisé ou modifié.',
      'Verify' => 'Vérifier',
      'Edit Settings: %s' => 'Modifier les paramètres : %s',
      'Add "Re:" Prefix' => 'Ajouter le préfixe « Re: »',
      'Desktop Only' => 'Bureau uniquement',
      'Account Settings' => 'Paramètres du compte',
      'View Configuration' => 'Voir la configuration',
      'Supported Editor Protocols' => 'Protocoles d’éditeur pris en charge',
      'Add Authentication Factor' => 'Ajouter un facteur d’authentification',
      'Choose which day a calendar week should begin on.' => 'Sélectionnez le premier jour d’une semaine calendaire.',
      'Account Activity Logs' => 'Journaux d’activité du compte',
      'Date and Time' => 'Date et heure',
      'Use Monospaced Font' => 'Utiliser une police à chasse fixe',
      'The strength of your stored password hash can be upgraded. To upgrade, either: log out and log in using your password; or change your password.' => 'La force du hachage stocké pour votre mot de passe peut être améliorée. Pour vous mettre à niveau, vous pouvez soit vous déconnecter et vous reconnecter en utilisant votre mot de passe, soit changer votre mot de passe.',
      'Save Preferences' => 'Enregistrer les préférences',
      'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have installed and configured such an editor, some applications can generate links that you can click to open files locally.
    Provide a URI pattern for building external editor URIs in your environment. For example, if you use TextMate on macOS, the pattern for your machine may look something like this:
    ```name="Example: TextMate on macOS"
    %s
    ```
    For complete instructions on editor configuration, see **[[ %s | %s ]]**.
    See the tables below for a list of supported variables and protocols.' => 'De nombreux éditeurs de texte peuvent être configurés comme gestionnaires d’URI  pour des protocoles spéciaux tels que `editor://`. Si vous avez installé et configuré un tel éditeur, Phabricator peut générer des liens que vous pouvez cliquer pour ouvrir des fichiers localement.
    Founissez un motif d’URI pour construire des URI d’éditeur externe dans votre environnement. Par exemple, si vous utilisez TextMate sur macOS, le motif pour votre machine peut ressembler à ceci :
    ```name="Exemple : TextMate sur macOS"
    %s
    ```
    Pour des instructions complètes sur la configuration d’un éditeur, consultez **[[%s|%s]]**.
    Voyez les tables ci-dessous pour une liste des variables et protocoles pris en charge.',
      '⚫ Email' => '⚫ Courriel',
      'New Setting' => 'Nouveau paramètre',
      'Pronoun' => 'Pronom',
      'Choose the default notification behavior for Conpherence rooms.' => 'Choisissez le comportement par défaut des notifications pour les salles de Conpherence.',
      'DarkConsole Tab' => 'Onglet ConsoleSombre',
      'Note: Changing your primary email address will invalidate any outstanding password reset links.' => 'Note : modifier votre adresse courriel principale invalidera tout lien de réinitialisation de mot de passe en attente.',
      'Sessions and Logs' => 'Sessions et journaux',
      'Your primary email address is unverified. You will not be able to receive email until you verify it.' => 'Votre adresse courriel principale n’est pas vérifiée. Vous ne pourrez pas recevoir de courriels tant que vous ne l’aurez pas vérifiée.',
      'Pinned Applications' => 'Applications épinglées',
      'This server can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => 'Phabricator peut envoyer des notifications en temps réel à votre navigateur web ou sur votre bureau. Choisissez l’endroit où vous voulez recevoir ces mises à jour en temps réel.',
      'Revoke All' => 'Tout révoquer',
      'No settings panel group with key "%s" exists!' => 'Aucun groupe de panneaux de configuration n’existe avec la clé « %s » !',
      'Linked Accounts and Authentication' => 'Comptes liés et authentification',
      'Choose the pronoun you prefer.' => 'Choisissez le pronom que vous préférez.',
      'Conflict Ignored' => 'Conflit ignoré',
      'This engine is used to edit settings.' => 'Ce moteur est utilisé pour modifier les paramètres.',
      'Default (Unknown, "%s")' => 'Par défaut (inconnu, « %s »)',
      'Primary Email Unverified' => 'Adresse courriel principale non vérifiée',
      'HiSec' => 'HiSec',
    );
  }

}
