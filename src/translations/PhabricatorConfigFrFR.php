<?php

final class PhabricatorConfigFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
  'When a user takes an action which generates an email notification (like
commenting on a Differential revision), the "From" address can either be set
to the user\'s email address (like "alincoln@example.com") or the
"metamta.default-address" address.

The user experience is generally better if the user\'s real address is used as
the "From" header value, since the messages are easier to organize when they
appear in mail clients, but this will only work if the server is authorized to
send email on behalf of the "From" domain. Practically, this means:

  - If you are doing an install for Example Corp and all the users will have
    corporate @corp.example.com addresses and any hosts this software is running
    on are authorized to send email from corp.example.com, you can enable this
    to make the user experience a little better.
  - If you are doing an install for an open source project and your users will
    be registering via third-party services and/or using personal email
    addresses, you probably should not enable this or all of your outgoing
    email might vanish into SFP blackholes.
  - If your install is anything else, you\'re safer leaving this off, at least
    initially, since the risk in turning it on is that your outgoing mail will
    never arrive.' => 'Lorsqu\'un utilisateur effectue une action qui génère une notification par courriel (comme commenter une révision différentielle), l\'adresse "De" peut être définie soit sur l\'adresse courriel de l\'utilisateur (comme "alincoln@logcabin.com") soit sur l\'adresse "metamta.default-address".

L\'expérience utilisateur est généralement meilleure si l\'adresse réelle de l\'utilisateur est utilisée car les messages sont plus faciles à organiser lorsqu\'ils apparaissent dans les messageries, mais cela ne fonctionnera que si le serveur est autorisé à envoyer des courriels au nom du domaine "De". Concrètement, cela signifie :

  - si vous effectuez une installation pour Example Corp et que tous les utilisateurs ont des adresses d\'entreprise @corp.example.com et que tous les hôtes sur lesquels ce logiciel s\'exécute sont autorisés à envoyer des courriels depuis corp.example.com, vous pouvez activer cette option pour améliorer un peu l\'expérience utilisateur
  - si vous effectuez une installation pour un projet open source et que vos utilisateurs s\'inscrivent via des services tiers et/ou utilisent des adresses courriels personnelles, vous ne devriez probablement pas activer cette option, sinon tous vos courriels sortants risquent de ne jamais arriver à destination
  - si votre installation est autre, il est plus prudent de laisser cette option désactivée, au moins au début, car le risque en l\'activant est que votre courrier sortant n\'arrive jamais.',
  'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.

This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.

This set is also used to enforce valid redirect URIs. This service will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.

Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some features which rely on links or redirects may not work.' => 'Quand des utilisateurs écrivent des commentaires comprenant des URI, ils sont automatiquement convertis en liens cliquables si le protocole d’URI apparaît dans cet ensemble.

Cet ensemble de protocoles est principalement conçu pour prévenir des problèmes de sécurité avec « javascript: » et d’autres gestionnaires d’URI potentiellement dangereux.

Cet ensemble est également utilisé pour garantir la validité des URI de redirection. Ce service refusera d’émettre une redirection HTTP « Location » pour une URI ayant un protocole absent de cet ensemble.

Habituellement, « http » et « https » devraient être présents dans cet ensemble. Si vous retirez un de ces protocoles ou les deux, certaines fonctionnalités qui dépendent de liens ou de redirections pourraient ne pas fonctionner.',
  'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.

You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.

For more information on locked and hidden configuration, including details about this setup issue, see %s.

This database value is currently respected, but a future version of the software will stop respecting database values for locked configuration options.' => 'La valeur de configuration « %s » est verrouillée (elle ne peut donc pas être modifiée depuis l’interface utilisateur) mais a une valeur de base de données. Habituellement, cela signifie qu’elle n’était pas verrouillée auparavant, que vous l’avez défini au moyen de l’interface utilisateur et qu’elle a été verrouillée plus tard.

Vous devriez copier cette valeur de configuration vers une source de configuration locale (habituellement en utilisant %s), puis la supprimer de la base de données avec la commande ci-dessous.

Pour plus d’informations sur la configuration verrouillée et masquée, y compris les détails concernant ce problème d’installation, consultez %s.

Cette valeur en base de données est actuellement prise en compte mais une future version de ce logiciel cessera cette pratique pour les options de configuration verrouillées.',
  'Review and modify configuration settings.' => 'Réviser et modifier les paramètres de configuration.',
  'Improve security by configuring an alternate file domain.' => 'Améliorer la sécurité en configurant un domaine alternatif pour les fichiers.',
  'Client Server' => 'Client serveur',
  'Or:' => 'Ou:',
  'Listeners receive callbacks when interesting things occur.' => 'Les écouteurs reçoivent des rappels lorsque des événements intéressants apparaissent.',
  'Update configuration in the database instead of in local configuration.' => 'Mettre à jour la configuration dans la base de données plutôt que dans la configuration locale.',
  'Column/Key' => 'Colonne/Clé',
  'Customize the logo and wordmark text in the header.' => 'Personnaliser le logo et le texte du sigle dans l’entête.',
  'Configuring File Storage' => 'Configuration du stockage de fichiers',
  '%s / %s' => '%s / %s',
  'Address ranges of cluster hosts.' => 'Intervalles d’adresses des groupes d’hôtes.',
  'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to this software, or that you are making a raw request without a "Host" header using a tool or library.

If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.

It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.

Requests must include a valid "Host" header.' => 'Cette requête n\'incluait pas d\'entête « Host ». Cela peut signifier que votre serveur web (comme nginx ou apache) est mal configuré de sorte que l\'entête « Host » ne parvient pas à ce logiciel, ou que vous effectuez une requête brute sans entête « Host » à l\'aide d\'un outil ou d\'une bibliothèque.

Si vous utilisez un navigateur Internet, vérifiez la configuration de votre serveur web. Si vous utilisez un outil ou une bibliothèque, vérifiez la manière dont la requête est construite.

Il est également possible (mais très peu probable) qu\'un autre périphérique réseau (comme un équilibreur de charge) supprime l\'entête.

Les requêtes doivent inclure un entête « Host » valide.',
  'Memory Usage' => 'Utilisation de la mémoire',
  'The request body that was sent began:' => 'Le corps de la requête qui a été envoyé commençait par :',
  'Impersonating users over the API is no longer supported.' => 'Utiliser l’API en se faisant passer pour un utilisateur n’est plus pris en charge.',
  'Table' => 'Tableau',
  'The best available MYSQL implementation is now selected automatically.' => 'La meilleure implémentation MYSQL disponible est désormais sélectionnée automatiquement.',
  'Ignore Setup Issue' => 'Ignorer le problème d’installation',
  'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.

You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => 'Cette option vous permet d’activer DarkConsole sur chaque page, même pour les utilisateurs non connectés. Ce n’est vraiment utile que si vous devez déboguer quelque chose sur une page hors connexion. Vous ne devriez pas activer cette option en production.

Vous devez activer DarkConsole en définissant « %s » avant que cette option ait un quelconque effet.',
  'Alternative URIs that can access this service.' => 'URI alternatifs qui peuvent accéder à ce service.',
  'Repository %s has unreplicated changes (for %s).' => 'Le dépôt %s a des modifications non répliquées (pour %s).',
  'The controller or workflow which handled the request.' => 'Le contrôleur ou le processus de travail qui a géré la requête.',
  'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".' => 'L’option « %s » est de type « %s », mais la valeur à l’indice « %s » de la liste n’est pas « true » (vrai).',
  'Applications application' => 'Application des applications',
  'This server is not configured in cluster mode.' => 'Ce serveur n’est pas configuré en mode grappe.',
  '%s created this configuration entry.' => '%s a créé cette entrée de configuration.',
  'You have enabled pygments and the %s script is available, but does not seem to work.' => 'Vous avez activé <em>pygments</em> et le script %s est disponible, mais cela ne semble pas fonctionner.',
  'This column is missing a type specification.' => 'Cette colonne n’a pas de spécification de type.',
  'The current configuration has these %d value(s):' => array(
    'La configuration actuelle a cette valeur :',
    'La configuration actuelle a ces %d valeurs :',
  ),
  'Column Has No Specification' => 'La colonne n’a pas de spécification',
  'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.

Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).

This software is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.

Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.

You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":

%s
Note that if you run other applications against the same database, they may not work in strict mode.

If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. This software will work correctly with this mode enabled or disabled.' => 'Sur l’hôte de base de données « %s », le paramètre global « sql_mode » n’inclut pas le mode « STRICT_ALL_TABLES ». Activer ce mode est recommandé pour généralement améliorer la façon dont MySQL traite certaines erreurs.

Sans ce mode activé, MySQL ignorera silencieusement certaines conditions d’erreur, y compris les insertions qui tentent de stocker plus de données que ce qu’une colonne peut contenir. Ce comportement est habituellement indésirable et peut conduire à de la corruption de données (en tronquant des caractères multi-octets au milieu), à de la perte de données (en écartant les données qui ne tiennent pas dans la colonne) ou à des problèmes de sécurité (par exemple en tronquant des clés ou des informations d\'identification).

Ce logiciel est développé et testé dans le mode « STRICT_ALL_TABLES », vous devriez donc normalement ne jamais rencontrer ces situations. Mais vous pourriez y être confronté si vous interagissez directement avec la base de données, exécutez du code d’une tierce partie, développez des extensions or simplement rencontrez une anomalie dans le logiciel.

Activer « STRICT_ALL_TABLES » fera que MySQL génèrera une erreur explicite si une de ces situations inhabituelles se produit. Ceci est un comportement plus sûr et évite que ces situations puissent causer des problèmes imperceptibles et potentiellement graves par la suite.

Vous pouvez trouver plus d’informations concernant ce mode (et la façon de le configurer) dans le manuel de MySQL. Habituellement, il suffit d’ajouter ceci dans votre fichier « my.cnf » (dans la section « [mysqld] ») puis de redémarrer « mysqld » :

%s

Notez que si vous exécutez d’autres applications utilisant la même base de données, elles pourraient ne pas fonctionner dans le mode strict.

Si vous ne pouvez pas ou ne voulez pas activer « STRICT_ALL_TABLES », vous pouvez sereinement ignorer cet avertissement. Ce logiciel fonctionnera correctement, que ce mode soit activé ou non.',
  'Delete configuration in the database instead of in local configuration.' => 'Supprimer la configuration dans la base de données plutôt que dans la configuration locale.',
  'No Email Preferences Link' => 'Pas de lien de préférence de courriel',
  'Marked activity "%s" as completed.' => 'Activité « %s » marquée comme terminée.',
  'The way VCS activity is attributed %s user accounts has changed.' => 'La façon dont l\'activité VCS est attribuée aux comptes d\'utilisateurs %s a changé.',
  'Mail.app on OS X Lion won\'t respect threading headers unless the subject is
prefixed with "Re:". If you enable this option, this software will add "Re:" to
the subject line of all mail which is expected to thread. If you\'ve set
\'metamta.one-mail-per-recipient\', users can override this setting in their
preferences.' => 'Mail.app sur OS X Lion ne respectera pas les entêtes des fils de discussion à moins que le sujet ne soit préfixé par « Re: ». Si vous activez cette option, ce logiciel ajoutera « Re: » aux lignes des sujets de tous les messages qui doivent être traités dans le fil de discussion. Si vous avez défini « metamta.one-mail-per-recipient », les utilisateurs peuvent remplacer ce paramètre dans leurs préférences.',
  'Repository %s has unreplicated changes.' => 'Le dépôt %s a des modifications non répliquées.',
  'You have \'%s\' enabled in your PHP configuration.

This option is not compatible with this software. Remove \'%s\' from your configuration to continue.' => 'Vous avez « %s » d’activé dans votre configuration PHP.

Cette option n’est pas compatible avec ce logiciel. Supprimez « %s » de votre configuration pour continuer.',
  'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %d.' => 'Le binaire « %s » sur ce système a un comportement inattendu : il devait se terminer sans code d’erreur quand on lui passe des fichiers identiques, mais il est sorti avec un code %d.',
  'No active repositories have outstanding errors.' => 'Aucun dépôt actif n’a d’erreur marquante.',
  'Array containing list of disabled applications.' => 'Tableau contenant la liste des applications non installées.',
  'Usage' => 'Utilisation',
  'Rebuild Repository Identities' => 'Reconstruire les identités des dépôts',
  'Move port information from `%s` to `%s` in your config.' => 'Déplacez les informations de port de « %s » à « %s » dans votre configuration.',
  'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.' => 'Cette option ne peut pas être modifiée depuis l’IHM web. Utiliser %s pour ajuster la politique du ramasse-miettes.',
  'Better Table Engine Available' => 'Meilleur moteur de tables disponible',
  'Set a local configuration value.' => 'Définir une valeur de configuration locale.',
  'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.' => 'Le stockage de gros fichiers n’a pas été configuré, ce qui limitera la taille maximale des fichiers téléversés. Voir %s pour les instructions sur la configuration des téléversements et du stockage.',
  'This option controls whether users can edit account email addresses and profile real names.

If you set things up to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => 'Cette option contrôle si les utilisateurs peuvent modifier les adresses de messagerie de compte et décrire les vrais noms.

Si vous avez configuré la synchronisation automatiquement des informations de compte depuis un autre système faisant autorité, vous pouvez empêcher les utilisateurs de faire ces modifications pour être sûr que les informations restent cohérentes entre les deux systèmes.',
  '%s deleted %s (again?).' => '%s a supprimé %s (à nouveau ?).',
  'Access log format.' => 'Format du journal d’accès.',
  'Use Pygments to highlight code?' => 'Utiliser Pygments pour surligner le code ?',
  'Access log location.' => 'Emplacement du fichier d’accès.',
  'Your webserver is not handling GET parameters properly.' => 'Votre serveur web ne gère pas correctement les paramètres GET.',
  'Repository Errors' => 'Erreurs du dépôt',
  'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas le nom d’une classe connue. Les sélections valides sont : %s.',
  'The keyring stores master encryption keys. For help with configuring a keyring
and encryption, see **[[ %s | Configuring Encryption ]]**.' => 'Le trousseau de clés stocke les clés de chiffrement principales. Pour obtenir de l\'aide sur la configuration d\'un trousseau de clés et du chiffrement, consultez **[[%s|Configuration du chiffrement]]**.',
  'Short' => 'Court',
  'Large File Storage Not Configured' => 'Le stockage de gros fichiers n’est pas configuré',
  'When email is sent, what format should the software use for users\' email
addresses? Valid values are:

 - `short`: \'gwashington <gwashington@example.com>\'
 - `real`:  \'George Washington <gwashington@example.com>\'
 - `full`: \'gwashington (George Washington) <gwashington@example.com>\'

The default is `full`.' => 'Lors de l\'envoi d\'un courriel, quel format le logiciel doit-il utiliser pour les adresses de courriel des utilisateurs ? Les valeurs valides sont :

 - `short` : \'gwashington <gwashington@example.com>\'
 - `real` : \'George Washington <gwashington@example.com>\'
 - `full` : \'gwashington (George Washington) <gwashington@example.com>\'

La valeur par défaut est `full`.',
  'The minimum supported version of Mercurial is 2.4, which was released in 2012.' => 'La version minimale prise en charge de Mercurial est la version 2.4, sortie en 2012.',
  'Use "bin/phd debug ..." to get a detailed daemon execution log.' => 'Utilise « bin/phd debug ... » pour obtenir un journal détaillé d’exécution des services en arrière-plan.',
  'Migrating file-based config to more modern config...' => 'Migration de la configuration basée sur des fichiers vers une configuration plus moderne...',
  'Full' => 'Plein',
  'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => 'Lancer le script de mise à jour du stockage pour mettre à jour les bases de données (l’hôte « %s » n’a pas été initialisé).',
  'You haven\'t configured mailers yet, so this server won\'t be able to send outbound mail or receive inbound mail. See the configuration setting "cluster.mailers" for details.' => 'Vous n\'avez pas encore configuré de logiciel de messagerie, ce serveur ne pourra donc pas envoyer ni recevoir de courriel. Consultez le paramétrage de configuration « cluster.mailers » pour plus de détails.',
  'Unrecognized verb: %s' => 'Verbe non reconnu : %s',
  'WARNING: This is a prototype option and the description below is currently pure
fantasy.

This option allows you to make this service aware of database read replicas so
it can monitor database health, spread load, and degrade gracefully to
read-only mode in the event of a failure on the primary host. For help with
configuring cluster databases, see **[[ %s | %s ]]** in the documentation.' => 'AVERTISSEMENT : il s\'agit d\'une option prototype et la description ci-dessous est actuellement de la pure fantaisie.

Cette option vous permet de rendre ce service conscient des répliques de lecture de base de données afin qu\'il puisse surveiller l\'état de la base de données, répartir la charge et passer en mode lecture seule en cas de panne sur l\'hôte principal. Pour obtenir de l\'aide sur la configuration des bases de données en grappe, consultez **[[%s|%s]]** dans la documentation.',
  'Schemata Issues' => 'Problèmes de schémas',
  'Expected Collation' => 'Collation attendue',
  'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.' => 'L’option « %s » est de type « %s », mais la valeur n’est pas une liste : c’est une correspondance avec des clés non naturelles ou clairsemées.',
  'Use Normal HTTP Redirects' => 'Utiliser les redirections HTTP normales',
  'Configuration key \'%s\' is not set in %s configuration!' => 'La clé de configuration « %s » n’est pas définie dans la configuration %s !',
  'Multi-Factor Optional' => 'Multi-facteur facultatif',
  'The \'%s\' extension is not installed. Without \'%s\', this server may not be able to determine the MIME types of uploaded files.' => 'L’extension « %s » n’est pas installée. Sans la prise en charge de « %s », ce logiciel pourrait ne pas pouvoir déterminer les types MIME des fichiers téléversés.',
  'The configuration option \'%s\' has been removed. You may delete it at your convenience.

%s' => 'L’option de configuration « %s » a été supprimée. Vous pouvez la supprimer à votre guise.

%s',
  'Disable Pagespeed' => 'Vitesse de page désactivée',
  'Elasticsearch index exists but needs correction.' => 'Un index Elasticsearch existe mais doit être corrigé.',
  'Nullable' => 'Nul autorisé',
  'No "Host" Header' => 'Aucun entête « Host: »',
  'Activity "%s" did not need to be marked as complete.' => 'L’activité « %s » ne nécessite pas d’être marquée comme terminée.',
  'SSH error log location.' => 'Emplacement du journal des erreurs SSH.',
  'The translation implementation has changed and providers are no longer used or supported.' => 'La mise en œuvre de la traduction a été modifiée et les fournisseurs ne sont plus utilisés ni pris en charge.',
  'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L’option « %s » est de type « %s », mais la valeur que vous avez fournie n’est pas une liste JSON valide. Lorsque vous définissez une option de liste depuis la ligne de commande, spécifiez la valeur en JSON. Vous devrez mettre la valeur complète entre guillemets anglais simples pour votre interpréteur de commandes (par exemple, \'["a", "b", ...]\').',
  'Format for the SSH access log. Use %s to set the path. Available variables are:' => 'Format pour le journal d’accès SSH. Utiliser %s pour définir le chemin. Les variables disponibles sont :',
  'This table can use a better table engine.' => 'Cette table peut utiliser un moteur de tables plus performant.',
  'PHP post_max_size Not Configured' => 'post_max_size n’est pas configuré dans PHP',
  'Can Not Connect to MySQL' => 'Connexion impossible à MySQL',
  'Option "%s" is of type "%s", but the configured value is not a boolean.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas un booléen.',
  'Disable developer mode' => 'Désactiver le mode développeur',
  'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. This software will not work properly until you do.' => 'Identifiez le composant de la configuration du serveur web qui décompresse ou abîme les requêtes et désactivez-le. Ce logiciel ne fonctionnera pas correctement tant que vous ne l\'aurez pas fait.',
  'Profile 0.1%% of all requests' => 'Profilage de 0,1 %% de toutes les requêtes',
  'This option has been replaced with the more granular option `%s`.' => 'Cette option a été remplacée par une option `%s` plus fine.',
  'Require all users to configure multi-factor authentication.' => 'Requérir que tous les utilisateurs configurent l’authentification à plusieurs facteurs.',
  'Stop this software from sending any email, etc.' => 'Empêche ce logiciel d\'envoyer des courriels, etc.',
  'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'Le binaire \'%s\' n’a pas pu être trouvé. Faites un lien symbolique dessus dans \'%s\', ou initialisez la variable d’environnement %s du serveur web pour inclure le répertoire où il réside, ou ajouter ce répertoire à \'%s\' dans la configuration.',
  'Configuration Guide: Locked and Hidden Configuration' => 'Guide de configuration : configuration verrouillée et masquée',
  'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.' => 'Cette action permet un rapport verbeux des erreurs (traces en pile, rappels d’erreur) et force les lectures sur disque des ressources statiques lors de chaque rechargement.',
  'Wrote configuration key "%s" to local storage (in file "%s").' => 'Clé de configuration « %s » écrite sur le stockage local (dans le fichier « %s »).',
  'These alternative URIs will be able to access \'normal\' pages on this install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'Ces URI alternatifs pourront accéder aux pages \'normales\' sur votre installation. D’autres fonctionnalités comme OAuth ne fonctionneront pas. Le principal cas d\'utilisation de cette fonctionnalité est le déplacement d\'installations entre domaines.',
  '(%s%s) %s' => '(%s%s) %s',
  'Nonreplicating Replica' => 'Copie sans réplication',
  'Run these %d command(s):' => 'Exécuter ces %d commande(s) :',
  'Pattern' => 'Motif',
  'Unknown \'%s\' Version' => 'Version « %s » inconnue',
  'Require administrators to unlock the authentication provider configuration from the CLI before it can be edited.' => 'Exiger que les administrateurs déverrouillent la configuration du fournisseur d’authentification depuis l’interface en ligne de commande, avant qu’elle puisse être modifiée.',
  'Define one or more mail transmission services. For help with configuring
mailers, see **[[ %s | %s ]]** in the documentation.' => 'Définit un ou plusieurs services de transmission de courriel. Pour obtenir de l\'aide sur la configuration des logiciels de messagerie, consultez **[[%s|%s]]** dans la documentation.',
  'Feed Hooks Deprecated' => 'Accroches de flux obsolètes',
  'Purge Caches' => 'Vider les caches',
  'Configure services to run on a cluster of hosts.' => 'Configure des services pour s’exécuter sur une grappe d’hôtes.',
  'Adjust %s in your PHP configuration to at least 32MB. When set to smaller value, large file uploads may not work properly.' => 'Régler %s dans votre configuration PHP à au moins 32 Mo. S’il est mis à une valeur plus petite, les téléversements de gros fichiers pourraient ne pas bien fonctionner.',
  'Show Recipient Hints' => 'Afficher les conseils de destinataire',
  'Recaptcha private key, obtained by signing up for Recaptcha.' => 'Recaptcha de la clé privée, obtenue en s’inscrivant à Recaptcha.',
  'MySQL InnoDB Engine Not Available' => 'Moteur InnoDB de MySQL non disponible',
  'Database host "%s" does not support the %s option. You will not be able to find search results for common words. You can gain access to this option by upgrading MySQL to a more recent version.

You can ignore this warning if you plan to configure Elasticsearch later, or aren\'t concerned about searching for common words.' => 'L’hôte de base de données « %s » ne prend pas en charge l’option %s. Vous ne pourrez pas trouver de résultats de recherche pour les mots courants. Vous pouvez accéder à cette option en mettant à niveau MySQL vers une version plus récente.

Vous pouvez ignorer cet avertissement si vous prévoyez de configurer Elasticsearch ultérieurement ou si la recherche de mots courants ne vous concerne pas.',
  'Proto' => 'Proto',
  'HTTP Strict Transport Security (HSTS) sends a header which instructs browsers that the site should only be accessed over HTTPS, never HTTP. This defuses an attack where an adversary gains access to your network, then proxies requests through an unsecured link.

Do not enable this option if you serve (or plan to ever serve) unsecured content over plain HTTP. It is very difficult to undo this change once users\' browsers have accepted the setting.' => 'Sécurité de Transport Stricte de HTTP (HSTS) envoie un entête qui indique aux navigateurs que le site ne doit être accédé que via HTTPS, jamais HTTP. Cela désamorce une attaque où un adversaire obtient accès à votre réseau, puis fait des requêtes par procuration via un lien non sécurisé.

N’activez pas cette option si vous fournissez (ou prévoyez de fournir un  jour) du contenu non sécurisé via du HTTP simple. Il est très difficile d’annuler cette modification une fois que les navigateurs de vos utilisateurs ont accepté ce paramètre.',
  '(No Value Configured)' => '(Aucune valeur configurée)',
  'Allow editing' => 'Autoriser la modification',
  'Configure full-text search services.' => 'Configurer les services de recherche en texte intégral.',
  'The HTTP method.' => 'La méthode HTTP.',
  'The webserver\'s host name.' => 'Le nom d’hôte du serveur web.',
  'PHP Timezone Invalid' => 'Fuseau horaire PHP non valide',
  'The environmental variable %s is empty. This server needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in configuration.' => 'La variable d’environnement %s est vide. Ce serveur a besoin d’exécuter certaines commandes système, comme `%s`, `%s`, `%s` et `%s`. Pour exécuter ces commandes, les binaires doivent être disponibles sur le %s du serveur web. Vous pouvez définir des chemins supplémentaires dans la configuration.',
  'Branchpoint' => 'Point de branchement',
  'Integration with Recaptcha' => 'Intégration avec Recaptcha',
  'Global cap for size of generated emails (bytes).' => 'Plafond global pour la taille des courriels générés (en octets).',
  'Access Logs' => 'Journaux des accès',
  'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.' => 'Ce serveur a une mauvaise version connue de « %s » installée (« %s »). Cette version n’est pas prise en charge ou contient des bogues importants ou des vulnérabilités de sécurité qui ont été corrigés dans une version plus récente.',
  'URI where this software is installed.' => 'URI où ce logiciel est installé.',
  'Character Set' => 'Jeu de caractères',
  'Formats' => 'Formats',
  'Ambiguous Leader' => 'Dépôt maître ambigu',
  'Config key "%s" is locked and can only be set in local configuration. To learn more, see "%s" in the documentation.' => 'La clé de configuration « %s » est verrouillée et ne peut être positionnée que dans la configuration locale. Pour en savoir plus, voir « %s » dans la documentation.',
  'This option can help debug pages which are taking a very long time (more than 30 seconds) to render.

If a page is slow to render (but taking less than 30 seconds), the best tools to use to figure out why it is slow are usually the DarkConsole service call profiler and XHProf.

However, if a request takes a very long time to return, some components (like Apache, nginx, or PHP itself) may abort the request before it finishes. This can prevent you from using profiling tools to understand page performance in detail.

In these cases, you can use this option to force the page to abort after a smaller number of seconds (for example, 10), and dump a useful stack trace. This can provide useful information about why a page is hanging.

To use this option, set it to a small number (like 10), and reload a hanging page. The page should exit after 10 seconds and give you a stack trace.

You should turn this option off (set it to 0) when you are done with it. Leaving it on creates a small amount of overhead for all requests, even if they do not hit the time limit.' => 'Cette option peut aider à déboguer les pages qui prennent beaucoup de temps (plus de 30 secondes) à être rendues.

Si une page est longue à afficher (mais prend moins de 30 secondes), les meilleurs outils à utiliser pour déterminer pourquoi cela est long sont en général le profileur d’appels du service DarkConsole et XHProf.

Cependant, si une requête prend très longtemps à répondre, certains composants (comme Apache, nginx, ou PHP lui-même) peuvent annuler la requête avant qu’elle se termine. Cela peut vous empêcher d’utiliser des outils de profilage pour comprendre la performance de la page en détail.

Dans ces cas, vous pouvez utiliser cette option pour forcer la page à s’annuler après un nombre de secondes plus petit (par exemple, 10), et récupérer une trace de pile utile. Cela peut fournir des informations utiles sur la raison pour laquelle une page est en attente.

Pour utiliser cette option, la fixer à un petit nombre (comme 10), et recharger une page qui bloque. La page doit sortir après 10 secondes et vous afficher une trace de pile.

Vous devez désactiver cette option (la mettre à 0) quand vous avez fini de l’utiliser. La laisser activée crée une petite surcharge pour toutes les requêtes, même si elles n’atteignent pas la limite de temps.',
  'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.' => 'Cette option a été renommée en `%s` pour mettre en évidence la nature inachevée de nombreuses applications prototypes. Votre paramétrage existant a été migré.',
  'Clients' => 'Clients',
  'Expected Columns' => 'Colonnes attendues',
  'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.' => 'Les superviseurs de tâches peuvent maintenant utiliser un groupe à dimensionnement automatique. Vous pouvez configurer la taille du groupe avec `%s`.',
  'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.' => 'Cette configuration est verrouillée et ne peut pas être modifiée depuis l’interface web. Utilisez « %s » dans « %s » pour la modifier.',
  'Multiple %s subclasses contain an option named \'%s\'!' => 'Plusieurs sous-classes de %s contiennent une option nommée \'%s\' !',
  'Pygments should be installed and enabled to provide advanced syntax highlighting.' => 'Pygments doit être installé et activé pour fournir la mise en évidence avancée de la syntaxe.',
  'If true, allow MetaMTA to change mail subjects to put text like \'[Accepted]\' and
\'[Commented]\' in them. This makes subjects more useful, but might break
threading on some clients. If you\'ve set \'%s\', users can override this setting
in their preferences.' => 'Si cette option est vraie, autorise MetaMTA à modifier les sujets des courriels pour y insérer du texte comme « [Accepted] » (accepté) et « [Commented] » (commenté). Cela rend les sujets plus pratiques mais peut interrompre les fils de discussion pour certains clients. Si vous avez défini « %s », les utilisateurs peuvent remplacer ce paramètre dans leurs préférences.',
  'Recaptcha public key, obtained by signing up for Recaptcha.' => 'Clé publique de Recaptcha, obtenue en s’inscrivant à Recaptcha.',
  'Database Servers' => 'Serveurs de base de données',
  'Specify a configuration key to delete.' => 'Spécifier une clé de configuration à supprimer.',
  'Search Servers' => 'Serveurs de recherche',
  'This web host ("%s") is set to a very different time than a database host "%s".' => 'Cet hôte web (« %s ») est aligné sur une heure très différente de celle d’un hôte de base de données « %s ».',
  'Send Mail To Each Recipient' => 'Envoyer un courriel à chaque destinataire',
  'The MySQL "local_infile" option is enabled. This option is unsafe.' => 'L’option MySQL « local_infile » est activée. Cette option n’est pas sécurisée.',
  'Either the schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => 'Soit le schéma pour Elasticsearch a changé, soit Elasticsearch a créé les index automatiquement. Utilisez la commande suivante pour reconstruire les index.',
  'Remove Custom Logo' => 'Supprimer le logo personnalisé',
  'No notification servers are configured.' => 'Aucun serveur de notification n’est configuré.',
  '(Not Supported)' => '(Non pris en charge)',
  'Nonstandard port' => 'Port non standard',
  'Don\'t embed Commons videos' => 'Ne pas intégrer les vidéos Commons',
  'This configuration has been removed. You can safely delete it.

%s' => 'Cette configuration a été retirée. Vous pouvez la supprimer sans problème.

%s',
  'Options relating to translations.' => 'Options relatives aux traductions.',
  'Configure the UI, including colors.' => 'Configure l’interface utilisateur, y compris les couleurs.',
  'The \'%s\' extension has support for only some image types. This server will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => 'L’extension « %s » ne prend en charge que certains types d’images. Ce serveur ne pourra pas traiter les images des types manquants tant que vous n\'aurez pas modifié « %s » pour qu\'elle les prenne en charge. Types pris en charge : %s. Types manquants : %s.',
  'Use Private Replies (More Secure)' => 'Utiliser les réponses privées (plus sécurisé)',
  'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'' => 'Traiter tous les fichiers \'*.x.bak\' comme \'.x\'. REMARQUE : Nous faisons correspondre le groupe 1 capturé en spécifiant la correspondance comme \'1\'',
  'Other Services' => 'Autres services',
  'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that this software imports or manages. This option is new and experimental.' => 'Spécifie un utilisateur système avec lequel exécuter les services en arrière-plan. Principalement, cet utilisateur sera le propriétaire des copies de travail de tout dépôt que ce logiciel importe ou gère. Cette option est nouvelle et expérimentale.',
  'Send as User Taking Action' => 'Envoyer comme l’utilisateur prenant l’action',
  'Security options.' => 'Options de sécurité.',
  'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L’option « %s » est de type « %s », et doit être spécifiée sur la ligne de commande comme une liste de valeurs en JSON. Vous devrez peut-être mettre la valeur entre guillemets anglais dans votre interpréteur (par exemple : \'["a", "b", …]\').',
  'Expected Unique' => 'Attendu comme unique',
  'Configuring a Preamble Script' => 'Configuration d’un script de prétraitement',
  'Default Partition' => 'Partition par défaut',
  'Domain used for reply email addresses.' => 'Domaine utilisé pour les adresses de courriels de réponse.',
  'You can find more information about rebuilding the search index here: %s' => 'Vous pouvez trouver plus d’informations sur la reconstruction de l’index de recherche ici : %s',
  'Prevent editing' => 'Empêcher la modification',
  'Whitelist 1.2.3.*' => 'Liste blanche 1.2.3.*',
  'Control how user names are rendered in mail.' => 'Contrôle comment les noms d’utilisateur sont rendus dans les courriels.',
  'This configuration is no longer relevant because daemons restart automatically on configuration changes.' => 'Cette configuration n’est plus pertinente parce que les services en arrière-plan redémarrent automatiquement lors des modifications de configuration.',
  'The Differential revision list view age UI elements have been removed to simplify the interface.' => 'Les éléments d’IHM de l’âge d’affichage de la liste des révisions différentielles ont été supprimés pour simplifier l’interface.',
  'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be installed on an entire domain; it can not be installed on a path.' => 'L’option de configuration \'%s\' n’est pas valide : l’URI ne doit PAS contenir de chemin. Par exemple \'%s\' est OK mais \'%s\' ne l’est pas. Autrement dit, ce logiciel doit être installé à la racine d\'un domaine et non dans un sous-répertoire.',
  'Separate values with newlines.' => 'Séparer les valeurs avec des nouvelles lignes.',
  'The request body that the server received had already been decompressed. This strongly suggests your webserver is configured to decompress requests inline, before they reach PHP.' => 'Le corps de requête que le serveur a reçu a déjà été décompressé. Ceci suggère fortement que votre serveur web est configuré pour décompresser le flux des requêtes avant qu’elles atteignent PHP.',
  'Define one or more fulltext storage services. Here you can configure which
hosts will handle fulltext search queries and indexing. For help with
configuring fulltext search clusters, see **[[ %s | %s ]]** in the
documentation.' => 'Définit un ou plusieurs services de stockage de texte intégral. Ici, vous pouvez configurer les hôtes qui géreront les requêtes de recherche de texte intégral et l\'indexation. Pour obtenir de l\'aide sur la configuration des modules de recherche de texte intégral, consultez **[[%s|%s]]** dans la documentation.',
  'Exception Handlers' => 'Gestionnaires d’exceptions',
  'This schema has the wrong nullable setting.' => 'Ce schéma a le mauvais paramétrage de nul autorisé.',
  'Config option \'%s\' is invalid. The URI must start with \'%s\' or \'%s\'.' => 'L’option de configuration \'%s\' n’est pas valide. L’URI doit commencer par \'%s\' ou \'%s\'.',
  'Unsupported/Insecure "%s" Version' => 'Version « %s » non prise en charge / non sécurisée',
  'This option does not have a custom type!' => 'Cette option n’a pas un type personnalisé !',
  'Require administrators to approve new accounts.' => 'Nécessite que les administrateurs approuvent les nouveaux comptes.',
  'Authentication Configuration Unlocked' => 'Configuration de l’authentification déverrouillée',
  'Health' => 'Santé',
  'System user to run daemons as.' => 'Utilisateur système avec lequel exécuter les services en arrière-plan.',
  'When set to `true`, the authentication provider configuration for this instance can not be modified without first running `bin/auth unlock` from the command line. This is to reduce the security impact of a compromised administrator account. 

After running `bin/auth unlock` and making your changes to the authentication provider config, you should run `bin/auth lock`.' => 'Si défini à `true` (vrai), la configuration du fournisseur d’authentification pour cette instance ne peut pas être modifiée sans d’abord exécuter `bin/auth unlock` depuis la ligne de commande. Ceci permet de réduire l’impact en terme de sécurité d’un compte d’administrateur compromis.

Après avoir exécuté `bin/auth unlock` et effectué vos changements sur la configuration du fournisseur d’authentification, vous devriez exécuter `bin/auth lock`.',
  'Unknown schema status "%s"!' => 'État du schéma « %s » inconnu !',
  'MySQL May Run Slowly' => 'MySQL pourrait fonctionner lentement',
  'Manage extensions.' => 'Gérer les extensions.',
  'Too many arguments: expected one key.' => 'Trop d’arguments : une clé attendue.',
  'List of Users Without MFA' => 'Liste des utilisateurs sans MFA',
  'IMPORTANT: The upstream does not provide support for prototype applications.

This platform includes prototype applications which are in an **early stage of development**. By default, prototype applications are disabled, because they are often not yet developed enough to be generally usable. You can enable this option to enable them if you\'re developing applications or are interested in previewing upcoming features.

To learn more about prototypes, see [[ %s | %s ]].

After enabling prototypes, you can selectively disable them (like normal applications).' => 'IMPORTANT : le flux amont ne prend pas en charge les applications prototypes.

Cette plateforme inclut des applications prototypes qui sont dans un **état précoce de développement**. Par défaut, les applications prototypes ne sont pas installées parce qu’elles ne sont souvent pas encore suffisamment développées pour être utilisables. Vous pouvez activer cette option pour les installer si vous développez des applications ou si vous êtes intéressé par un aperçu des fonctionnalités à venir.

Pour en savoir plus sur les prototypes, voir [[ %s | %s ]].

Après avoir activé les prototypes, vous pouvez les désinstaller unitairement (comme des applications normales).',
  'No "Host" header present in request.' => 'Aucun entête « Host » présent dans la requête.',
  'Value for option "%s" of type "%s" must be either "true" or "false".' => 'La valeur pour l’option « %s » de type « %s » doit être soit « true » soit « false ».',
  'Storage engines are now discovered automatically at runtime.' => 'Les moteurs de stockage sont désormais découverts automatiquement au moment de l\'exécution.',
  'This software appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. This software regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'Ce logiciel semble être installé sur une très petite instance EC2 (de classe « %s ») avec un processeur extensible. Ceci est fortement déconseillé. Ce logiciel a régulièrement besoin du processeur, et ces instances sont souvent étouffées par la limitation du processeur. Utilisez plutôt une instance avec un processeur normal.',
  'Footer configuration is not valid: value must be a list of items.' => 'La configuration du pied de page n’est pas valide : la valeur doit être une liste d’éléments.',
  'Edit "%s"' => 'Modifier « %s »',
  'Don\'t embed YouTube videos' => 'Ne pas inclure les vidéos YouTube',
  'Disable PHP %s' => 'Désactiver %s de PHP',
  'Configure master encryption keys.' => 'Configurer les clés de chiffrement maître.',
  'Mailers Not Configured' => 'Boîtes courriel non configurées',
  'Daemons no longer use PID files.' => 'Les services en arrière-plan n’utilisent plus les fichiers PID.',
  'Database replica "%s" is listed as a replica, but is not currently replicating. You are vulnerable to data loss if the master fails.' => 'La réplique de base de données « %s » est listée comme réplique, mais elle n’est actuellement pas répliquée. Vous êtes vulnérable à une perte de données, si le maître échoue.',
  'Garbage Collectors' => 'Ramasses-miettes',
  '%s edited this configuration entry.' => '%s a modifié cette entrée de configuration.',
  'The PHP "zip" extension is not installed. This extension is required by certain data export operations, including exporting data to Excel.

To clear this setup issue, install the extension and restart your webserver.

You may safely ignore this issue if you do not plan to export data in Zip archives or Excel spreadsheets, or intend to install the extension later.' => 'L’extension « zip » pour PHP n’est pas installée. Cette extension est nécessaire pour certaines opérations d’exportation de données, y compris l’exportation de données vers Excel.

Pour régler ce problème de configuration, installez l’extension et redémarrez votre serveur web.

Vous pouvez ignorer ce problème en toute quiétude si vous ne prévoyez pas d’exporter des données vers des archives Zip ou des feuilles de calcul Excel, ou bien si vous comptez installer l’extension plus tard.',
  'To enable the SSH log, specify a path. This log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).

If not set, no log will be written.' => 'Pour activer le journal SSH, spécifiez un chemin. Ce journal peut fournir des informations plus détaillées sur les accès SSH qu’un journal SSH normal (par exemple, il peut montrer les utilisateurs connectés, les commandes, et autres données d’application).

Si non défini, aucun journal ne sera écrit.',
  'Send Mail To All Recipients' => 'Envoyer un courriel à tous les destinataires',
  'This software sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.

This software sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.

Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.

(This problem can be caused by a missing "B" in your RewriteRule.)' => 'Pour tester si votre serveur web réécrit correctement les chemins, ce logiciel s’est envoyé à lui-même une requête de test avec un chemin particulier. Le chemin n’a pas été correctement transmis.

Ce logiciel a envoyé une requête au chemin « %s » et s’attendait à ce que le serveur web le décode et réécrive ce chemin pour qu’il reçoive une requête pour « %s ». Il a cependant reçu à la place une requête pour « %s ».

Vérifiez que vos règles de réécriture sont bien configurées en suivant les instructions de la documentation. Si l’encodage de chemin ne fonctionne pas correctement, vous ne pourrez pas accéder aux fichiers avec des noms inhabituels dans les répertoires, entre autres problèmes.

(Ce problème peut provenir d’un « B » manquant dans votre RewriteRule).',
  'Recorded items (sample):' => 'Éléments enregistrés (échantillon) :',
  'Your install has no current setup issues to resolve.' => 'Votre installation n’a actuellement pas de problème de configuration à résoudre.',
  'Subschemata Have Failures' => 'Subschemata a des échecs',
  'Save Config Entry' => 'Enregistrer l’entrée de configuration',
  '%s of %s' => '%s sur %s',
  'Setup MySQL Schema' => 'Installer le schéma MySQL',
  ' (%s)' => ' (%s)',
  'Not Available' => 'Non disponible',
  'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to this software, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'Si ces commandes ne fonctionnent pas, essayez Google. Le processus d’installation des extensions PHP n’est pas spécifique à ce logiciel et toute instruction que vous pouvez trouver pour les installer sur votre système devrait fonctionner. Sur Mac OS X, vous pouvez essayer Homebrew.',
  'You can disable the hints under "REPLY HANDLER ACTIONS" if users prefer
smaller messages. The actions themselves will still work properly.' => 'Vous pouvez désactiver les astuces sous « REPLY HANDLER ACTIONS » (actions du gestionnaire de réponses) si les utilisateurs préfèrent des messages plus courts. Les actions elles-mêmes fonctionneront toujours correctement.',
  'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => 'Cette option a été supprimée, vous pouvez utiliser les tableaux de bord pour fournir une personnalisation de la page d’accueil. Voir T11533 pour plus de détails.',
  'Data Cache' => 'Cache de données',
  'Configure the access logs, which log HTTP/SSH requests.' => 'Configurer les journaux d’accès, qui tracent les requêtes HTTP/SSH.',
  '%ss Behind' => '%ss derrière',
  'The PID of the server process.' => 'Le PID du processus du serveur.',
  'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be \'.
            \'installed on an entire domain; it can not be installed on a path.' => 'L’option de configuration \'%s\' n’est pas valide : l’URI ne doit PAS contenir de chemin. Par exemple \'%s\' est OK mais \'%s\' ne l’est pas. Autrement dit, ce logiciel doit être installé à la racine d\'un domaine et non dans un sous-répertoire.',
  'Blacklist subnets to prevent user-initiated outbound requests.' => 'Mettre les sous-réseaux en liste noire pour éviter des requêtes de sortie initiées par l’utilisateur.',
  'When a message is sent to multiple recipients (for example, several reviewers on
a code review), it can either be delieverd as one email to everyone (e.g., "To:
alincoln, usgrant, htaft") or separate emails to each user (e.g., "To:
alincoln", "To: usgrant", "To: htaft"). The major advantages and disadvantages
of each approach are:

  - One mail to everyone:
    - This violates policy controls. The body of the mail is generated without
      respect for object policies.
    - Recipients can see To/Cc at a glance.
    - If you use mailing lists, you won\'t get duplicate mail if you\'re
      a normal recipient and also Cc\'d on a mailing list.
    - Getting threading to work properly is harder, and probably requires
      making mail less useful by turning off options.
    - Sometimes people will "Reply All", which can send mail to too many
      recipients. This software will try not to send mail to users who already
      received a similar message, but can not prevent all stray email arising
      from "Reply All".
    - Not supported with a private reply-to address.
    - Mail messages are sent in the server default translation.
    - Mail that must be delivered over secure channels will leak the recipient
      list in the "To" and "Cc" headers.
  - One mail to each user:
    - Policy controls work correctly and are enforced per-user.
    - Recipients need to look in the mail body to see To/Cc.
    - If you use mailing lists, recipients may sometimes get duplicate
      mail.
    - Getting threading to work properly is easier, and threading settings
      can be customized by each user.
    - "Reply All" will never send extra mail to other users involved in the
      thread.
    - Required if private reply-to addresses are configured.
    - Mail messages are sent in the language of user preference.
' => 'Lorsqu\'un message est envoyé à plusieurs destinataires (par exemple, plusieurs relecteurs de code), il peut être envoyé sous forme d\'un seul courriel à tout le monde (par exemple, "À: alincoln, usgrant, htaft") ou sous forme de courriels séparés à chaque utilisateur (par exemple, "À: alincoln", "À: usgrant", "À: htaft"). Les principaux avantages et inconvénients de chaque approche sont :

  - un seul courriel à tout le monde :
    - cela enfreint les contrôles du règlement. Le corps du courrier est généré sans respecter les règles sur les objets,
    - chaque destinataire peut voir les autres destinateurs,
    - si vous utilisez des listes de diffusion, vous ne recevrez pas de courrier en double en tant que destinataire direct et en tant que destinataire en copie d\'une liste de diffusion,
    - faire fonctionner correctement les fils de discussion est plus difficile et nécessite probablement de rendre les échanges moins pratiques en désactivant les options,
    - parfois les gens répondront à tous, ce qui peut envoyer du courrier à trop de destinataires. Ce logiciel essaiera de ne pas envoyer de courrier aux utilisateurs qui ont déjà reçu un message similaire, mais il ne pourra pas empêcher tous les courriers indésirables,
    - ne fonctionne pas avec les adresses de réponse non publiques,
    - les courriels sont envoyés dans la langue par défaut du serveur,
    - les destinataires de messages envoyés via des canaux sécurisés seront divulgués aux autres destinataires avec les entêtes "À" et "Cc",
  - un courriel à chaque utilisateur :
    - les contrôles du règlement fonctionnent correctement et sont appliqués par utilisateur,
    - les destinataires doivent regarder dans le corps du courrier pour voir À/Cc,
    - si vous utilisez des listes de diffusion, les destinataires peuvent parfois recevoir des courriers en double,
    - le bon fonctionnement des fils de discussion est plus facile et leur paramétrage peut être personnalisé par chaque utilisateur,
    - "Répondre à tous" n\'enverra jamais de courrier aux autres utilisateurs concernés par le sujet,
    - obligatoire si des adresses de réponse non publiques sont configurées,
    - les messages sont envoyés dans la langue choisie par l\'utilisateur.',
  'No Outbound Requests' => 'Aucune requête de sortie',
  'Primary install URI, for multi-environment installs.' => 'URI d’installation primaire, pour les installations multi-environnements.',
  'Global access controls now exist, see `%s`.' => 'Des contrôles d’accès globaux existent dorénavant, voir `%s`.',
  'Your webserver is not handling compressed request bodies properly.' => 'Votre serveur web ne gère pas correctement les corps de requête compressés.',
  'Whitelists editor protocols for "Open in Editor".' => 'Protocoles d’éditeur en liste blanche pour « Ouvrir dans l’éditeur ».',
  'Unable to connect to MySQL!

%s

Make sure databases connection information and MySQL are correctly configured.' => 'Impossible de se connecter à MySQL !

%s

Assurez-vous que les informations de connexion aux bases de données et que MySQL sont bien configurés.',
  'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.' => 'Les paramètres « Préfixe Re: » et « Sujets variés » sont maintenant configurés dans les paramètres globaux.',
  'You have no unresolved setup issues.' => 'Vous n’avez aucun problème d’installation non résolu.',
  'This configuration is hidden and can not be edited or viewed from the web interface.' => 'Cette configuration est cachée et ne peut pas être modifiée ou affichée depuis l’interface web.',
  'Local Disk Storage Not Readable/Writable' => 'Stockage disque local impossible à lire/écrire',
  'Override translations.' => 'Forcer les traductions.',
  'Cluster Configuration Out of Sync' => 'Configuration de la grappe non synchronisée',
  'Cookies set for x.com are also sent for y.x.com. Assuming instances are running on both domains, this will create a collision preventing you from logging in.' => 'Les témoins (\'\'cookies\'\') définis pour x.com sont aussi envoyés pour y.x.com. En supposant que des instances s’exécutent sur les deux domaines, cela provoquera une collision vous empêchant de vous connecter.',
  'This option has been removed. You may delete it at your convenience.' => 'Cette option a été supprimée. Vous pouvez la supprimer à votre guise.',
  'You can find more information about this new identity mapping here: %s' => 'Vous pouvez trouver plus d\'informations sur cette nouvelle cartographie des identités ici : %s',
  'After rebuilding the index, run this command to clear this setup warning:' => 'Après reconstruction de l’index, lancer cette commande pour nettoyer cet avertissement d’installation :',
  'Footer item with index "%s" is invalid: %s' => 'L’élément du pied de page avec l’index « %s » n’est pas valide : %s',
  'Unknown Configuration Option "%s"' => 'Option de configuration « %s » inconnue',
  'Truncate at 1MB' => 'Tronquer à 1Mo',
  'Access key for Amazon S3.' => 'Clé d’accès pour Amazon S3.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.' => 'Le composant \'%s\' de PATH (qui se décline en chemin absolu \'%s\') n’est pas utilisable parce que \'%s\' n’est pas lisible.',
  'Maniphest fields are now loaded automatically. You can configure them with `%s`.' => 'Les champs du manifeste sont maintenant chargés automatiquement. Vous pouvez les configurer avec `%s`.',
  'This key is expected to exist, but does not.' => 'Cette clé est censée exister, mais ce n’est pas le cas.',
  'Persistence' => 'Persistance',
  'This schema is expected to exist, but does not.' => 'Ce schéma est censé exister, mais ce n’est pas le cas.',
  'You can provide a custom highlighter engine by extending class %s.' => 'Vous pouvez fournir un moteur de surlignage personnalisé en étendant la classe %s.',
  'Do Not Use Pygments' => 'Ne pas utiliser Pygments',
  'Up to Date' => 'À jour',
  'Configure core options, including URIs.' => 'Configurer les options cœur, y compris les URI.',
  '(empty)' => '(vide)',
  'This key has the wrong uniqueness setting.' => 'Cette clé a le mauvais paramètre d’unicité.',
  'When users set or reset a password, it must have at least this many characters.' => 'Quand les utilisateurs définissent ou redéfinissent un mot de passe, il doit avoir au moins ce nombre de caractères.',
  'Additional configuration options to lock.' => 'Options de configuration supplémentaires à verrouiller.',
  'Override what language files (based on filename) highlight as.' => 'Forcer les fichiers de langue (d’après le nom de fichier) à mettre en surbrillance.',
  'Bad "Host" Header' => 'Mauvais entête « Host »',
  'Controls whether email for multiple recipients is sent by creating one message with everyone in the "To:" line, or multiple messages that each have a single recipient in the "To:" line.' => 'Contrôle si les courriels destinés à plusieurs destinataires sont envoyés en créant un message avec tout le monde dans la ligne « À: » ou en créant plusieurs messages ayant chacun un seul destinataire.',
  'Option "%s" is of type "%s", but the item at index "%s" of the list is not a string.' => 'L’option « %s » est de type « %s », mais l’élément à l’index « %s » de la liste n’est pas une chaîne.',
  'MySQL port to use when connecting to the database.' => 'Port MySQL à utiliser lors de la connexion à la base de données.',
  'Trying to add duplicate key "%s"!' => 'Essai d’ajout d’une clé dupliquée « %s » !',
  'Option "%s" is of type "%s", but the configured value is not a string.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas une chaîne.',
  'User Guide: Amazon RDS' => 'Guide utilisateur : Amazon RDS',
  'Repository %s has an ambiguous leader.' => 'Le dépôt %s a un chef ambigu.',
  'To enable the SSH error log, specify a path. Errors occurring in contexts where this software is serving SSH requests will be written to this log.

If not set, no log will be written.' => 'Pour activer le journal des erreurs SSH, spécifiez un chemin. Les erreurs qui se produisent lorsque ce logiciel traite des requêtes SSH seront inscrites dans ce journal.

Si aucun chemin n’est défini, aucun journal ne sera écrit.',
  'The \'%s\' extension is not installed. Without \'%s\' support, this server will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => 'L’extension « %s » n’est pas installée. Sans prise en charge de « %s », Phabricator ne pourra ni traiter ni redimensionner les images (par exemple, pour générer des vignettes). Installez ou activez « %s ».',
  'Your authentication provider configuration is unlocked. Once you finish setting up or modifying authentication, you should lock the configuration to prevent unauthorized changes.

Leaving your authentication provider configuration unlocked increases the damage that a compromised administrator account can do to your install. For example, an attacker who compromises an administrator account can change authentication providers to point at a server they control and attempt to intercept usernames and passwords.

To prevent this attack, you should configure authentication, and then lock the configuration by running "bin/auth lock" from the command line. This will prevent changing the authentication config without first running "bin/auth unlock".' => 'Votre configuration des fournisseurs d’authentification est actuellement déverrouillée. Une fois que vous avez terminé de définir ou modifier l’authentification, vous devriez verrouiller la configuration pour prévenir les changements non autorisés.

Laisser déverrouillée votre configuration des fournisseurs d’authentification accroît les dommages qu’un compte d’administrateur compromis pourrait faire sur votre installation. Par exemple, un attaquant qui compromet un compte d’administrateur peut changer les fournisseurs d’authentification pour pointer vers un serveur qu’il contrôle et tenter alors d’intercepter des noms d’utilisateurs et des mots de passe.

Pour prévenir cette attaque, vous devriez configurer l’authentification puis verrouiller la configuration en exécutant « bin/auth lock » depuis la ligne de commande. Ceci empêchera de changer la configuration d’authentification sans avoir d’abord exécuté « bin/auth unlock » .',
  'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. This server needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.

PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.

(Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)

The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit process memory.

You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'Quand vous téléversez un fichier par glisser-déposer ou par l’API, les tronçons doivent être conservés en mémoire avant d’être écrits sur un stockage permanent. Ce serveur a besoin de mémoire disponible pour stocker ces morceaux pendant leur téléversement, mais PHP est actuellement configuré pour limiter drastiquement la mémoire disponible.

Les processus PHP ont actuellement très peu de mémoire libre disponible (%s). Pour travailler correctement, les processus doivent avoir au moins %s.

Notez que l’application elle-même doit aussi tenir dans la mémoire disponible, donc toute la mémoire sous la limite n’est pas disponible pour exécuter les charges de travail.

La manière la plus simple de résoudre ce problème est de mettre %s à %s dans votre configuration PHP, pour désactiver la limite mémoire. Il y a en général peu ou pas d’intérêt à utiliser cette option de limitation de la mémoire de traitement.

Vous pouvez aussi augmenter la limite ou ignorer ce problème et accepter de rencontrer des soucis lors du téléversement de gros fichiers et du traitement de grosses requêtes.',
  'Configuration of the notification server has changed substantially. For discussion, see T10794.' => 'La configuration du serveur de notification a grandement changé. Pour la discussion, voir T10794.',
  'Read option value from stdin.' => 'Lire la valeur de l’option depuis le flux d’entrée standard.',
  'Database source is not configured properly' => 'La source de base de données n’est pas configurée correctement',
  'Don\'t Require Manual Approval' => 'Ne nécessite pas d’approbation manuelle',
  'Column Type' => 'Type de colonne',
  'Truncate at 512KB' => 'Tronquer à 512ko',
  'Cache' => 'Cache',
  'Automatically profile some percentage of pages.' => 'Faire automatiquement le profil d’un certain pourcentage de pages.',
  'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. This software can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'Point de terminaison S3 explicite à utiliser. Cela devrait être le point de terminaison qui correspond à la région que vous avez sélectionnée dans `amazon-s3.region`. Ce logiciel ne peut pas déterminer automatiquement le bon point de terminaison parce que certains emplacements de point de terminaison sont irréguliers.',
  'Admin Server' => 'Administrer le serveur',
  'Wrong Column Type' => 'Mauvais type de colonne',
  'Embed YouTube videos' => 'Vidéos YouTube incluses',
  'Add One Path' => 'Ajouter un chemin',
  'Clear Cache' => 'Vider le cache',
  'Write access log here.' => 'Écrire le journal des accès ici.',
  'Unignore this setup issue?' => 'Ne plus ignorer ce problème d’installation ?',
  'Configure Mail.' => 'Configurer le courriel.',
  'You can update these %d value(s) here:' => 'Vous pouvez mettre à jour ces %d valeurs ici :',
  'Notification Servers' => 'Serveurs de notification',
  'To enable the HTTP access log, specify a path. This log is more detailed than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).

If not set, no log will be written.' => 'Pour activer le journal des accès HTTP, spécifier un chemin. Ce journal est plus détaillé que celui des accès HTTP normaux (par exemple, il peut montrer les utilisateurs connectés, les contrôleurs et d’autres données d’application).

Si non défini, aucun journal ne sera écrit.',
  'extname' => 'extname',
  'Enable captchas with Recaptcha.' => 'Activer les captchas avec Recaptcha.',
  'This suggests your webserver is configured to decompress or mangle compressed requests.' => 'Ceci suggère que votre serveur web est configuré pour décompresser ou embrouiller les requêtes compressées.',
  'Add Multiple Paths' => 'Ajouter des chemins multiples',
  'Specify an activity to mark as completed.' => 'Spécifier une activité à marquer comme terminée.',
  'By default, this software links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => 'Par défaut, ce logiciel lie les noms d’objet dans les champs Remarkup aux objets correspondants. Cette expression rationnelle peut être utilisée pour modifier ce comportement ; les noms d’objet qui lui correspondent ne seront pas liés.',
  'This server has a known bad version of "%s".' => 'Ce serveur a une mauvaise version connue de « %s ».',
  'Require DarkConsole Activation' => 'Nécessite l’activation de DarkConsole',
  'Notifications Status' => 'État des notifications',
  'Use the %s to manage enabled applications.' => 'Utiliser le %s pour gérer des applications installées.',
  'Current Configuration' => 'Configuration actuelle',
  'Replicating Master' => 'Réplication du maître',
  'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).

Upgrade %s to a patched version.

To learn more about how this issue affects this software, see %s.' => 'La version de %s sur ce système est obsolète et contient une vulnérabilité majeure largement diffusée (la faille « Shellshock »).

Mettre à jour %s vers une version corrigée.

Pour en savoir plus sur la manière dont ce problème affecte ce logiciel, voir %s.',
  'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.' => 'Sans fuseau horaire configuré, PHP émettra des avertissements en travaillant avec des dates, et les dates et les heures pourront ne pas s’afficher correctement.',
  'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.' => 'L’option « %s » est de type « %s » et doit être initialisée avec une liste d’expressions rationnelles valides, mais « %s » n’est pas une expression rationnelle valide.',
  'This schema can use a better character set.' => 'Ce schéma peut utiliser un meilleur jeu de caractères.',
  'Configuration value "%s" is locked, but has a value in the database.' => 'La valeur de configuration « %s » est verrouillée, mais a une valeur en base de données.',
  'Newly registered accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access the server.

If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured the server to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.

NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => 'Les comptes nouvellement enregistrés peuvent soit être mis dans une file d’attente d\'approbation manuelle pour une vérification par des administrateurs, soit être activés automatiquement et immédiatement. La file d\'attente est activée par défaut parce qu’elle vous donne un meilleur contrôle sur qui peut ouvrir un compte et accéder à ce serveur.

Si votre installation est complètement publique ou sur un VPN, ou si les utilisateurs ne peuvent s’enregistrer qu’avec un fournisseur de confiance comme un LDAP, ou si vous avez configuré le serveur pour éviter une inscription non autorisée, vous pouvez désactiver la file d\'attente pour réduire la charge d’administration.

NOTE : avant de désactiver la file d\'attente, assurez-vous que @{config:auth.email-domains} est configuré correctement pour votre installation !',
  'Determines whether or not YouTube videos get embedded.' => 'Détermine si les vidéos YouTube sont incluses ou non.',
  'Allows you to add a footer with links in it to most pages. You might want to use these links to point at legal information or an about page.

Specify a list of dictionaries. Each dictionary describes a footer item. These keys are supported:

  - `name` The name of the item.
  - `href` Optionally, the link target of the item. You can     omit this if you just want a piece of text, like a copyright     notice.' => 'Ceci vous permet d’ajouter un pied de page avec des liens vers la plupart des pages. Vous pourriez vouloir utiliser ces liens pour pointer vers des informations légales ou vers une page « À propos ».

Spécifiez une liste de dictionnaires. Chaque dictionnaire décrit un élément du pied de page, au moyen des clés prises en charge suivantes :

  - `name`, le nom de l’élément.
  - `href`, facultativement, la cible du lien de l’élément. Vous pouvez l’omettre si vous voulez juste du texte, comme une indication de droit d’auteur.',
  'The known issues with this old version are:' => 'Les problèmes connus avec cette ancienne version sont :',
  'Not Enabled' => 'Non activé',
  'This software sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. This software sent username "%s" with password "%s"; received username "%s" and password "%s".

Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => 'Ce logiciel s’est envoyé à lui-même une requête de test avec un entête HTTP « Authorization » et s’attendait à ce que ces informations d’identification soient transmis. Toutefois, ils étaient absents ou incorrects quand ils ont été reçus. Ce logiciel a envoyé un nom d’utilisateur « %s » avec le mot de passe « %s » ; le nom d’utilisateur reçu est « %s » et le mot de passe « %s ».

Votre serveur web n\'est peut-être pas configuré pour transmettre l’authentification HTTP basique. Si vous prévoyez d’utiliser l’authentification basique (par exemple, pour accéder aux dépôts), vous devez le reconfigurer.',
  'If you are using Amazon RDS, some of the instructions above may not apply to you. See %s for discussion of Amazon RDS.' => 'Si vous utilisez Amazon RDS, certaines des instructions ci-dessus peuvent ne pas s’appliquer. Voyez %s pour une discussion sur Amazon RDS.',
  'Controls whether email is sent "From" users.' => 'Contrôle si le courriel est envoyé « de la part » des utilisateurs.',
  'The notification server no longer requires root permissions. Start the server as the user you want it to run under.' => 'Le serveur de notification ne nécessite plus les droits root. Démarrez le serveur avec l’utilisateur sous lequel vous voulez le voir fonctionner.',
  'This issue will no longer be suppressed, and will return to its rightful place as a global setup warning.' => 'Ce problème ne sera plus supprimé, et retournera à sa place correcte en tant qu’avertissement général d’installation.',
  'Allows you to remove levity and jokes from the UI.' => 'Vous permet de supprimer le manque de sérieux et les blagues de l’IHM.',
  'Sites' => 'Sites',
  'T6185 "Shellshock" Bash Vulnerability' => 'Vulnérabilité de bash T6185 « Shellshock »',
  'Missing \'%s\' Extension' => 'Extension \'%s\' manquante',
  'Retention policies for garbage collection.' => 'Politiques de rétention pour le ramasse-miettes.',
  'MySQL (on host "%s") is configured with a very small innodb_buffer_pool_size, which may impact performance.' => 'MySQL (sur l’hôte « %s ») est configuré avec un très petit innodb_buffer_pool_size, ce qui peut impacter les performances.',
  'You should upgrade this software.' => 'Vous devez mettre à jour ce logiciel.',
  'The following caches will be cleared:' => 'Les caches suivant seront vidés :',
  'Detected %s warning(s) with the schemata.' => array(
    '%s avertissement détecté avec les schémas.',
    '%s avertissements détectés avec les schémas.',
  ),
  'Deprecated mysql.host Format' => 'Format obsolète de mysql.host',
  'This key is on the wrong columns.' => 'Cette clé traite de mauvaises colonnes.',
  'Wrong Nullable Setting' => 'Mauvais paramétrage de nul possible.',
  'Secret key for Amazon S3.' => 'Clé secrète pour Amazon S3.',
  'Trying to add duplicate column "%s"!' => 'Tentative pour ajouter la colonne dupliquée « %s » !',
  'Minimum password length.' => 'Longueur minimale du mot de passe.',
  'Required PHP extensions are not installed.' => 'Les extensions PHP nécessaires ne sont pas installées.',
  'Database' => 'Base de données',
  'UNHEALTHY: This database has failed recent health checks. Traffic will not be sent to it until it recovers.' => 'MALSAIN : Cette base de données a échoué aux dernières vérifications de santé. Le trafic ne lui sera pas envoyé jusqu’à ce qu’elle soit rétablie.',
  'Request input, in bytes.' => 'Nombre demandé, en octets.',
  'You enabled pygments but the %s script is not actually available, your %s is probably broken.' => 'Vous avez activé Pygments mais le script %s n’est actuellement pas disponible ; votre %s est sans doute cassé.',
  'Application Settings' => 'Configuration de l\'application',
  'Show email preferences link in email.' => 'Afficher le lien des préférences de courriel dans le courriel.',
  'Your webserver may have compression disabled.' => 'Votre serveur web peut avoir désactivé la prose en compte de la compression.',
  'The configured PATH includes a component which is not usable. This server will be unable to find or execute binaries located here:

%s

The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => 'Le PATH configuré inclut un composant qui n’est pas utilisable. Ce serveur ne pourra pas trouver ou exécuter les binaires situés ici :

%s

Le compte utilisateur sous lequel tourne le serveur web doit pouvoir lire tous les répertoires dans PATH afin de pouvoir les utiliser.',
  'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.' => 'Vous pouvez définir une limite pour la taille maximale en octets du courriel sortant. Un courriel plus gros que cette limite sera tronqué avant d’être envoyé. Cela peut être utile si votre MTA rejette les courriels dépassant une certaine limite (c’est assez courant). Spécifier une valeur en octets.',
  'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => 'Plusieurs sous-classes de %s ont la même clé (\'%s\') : %s, %s.',
  'Your webserver is rewriting paths improperly.' => 'Votre serveur web réécrit mal les chemins.',
  'You can rebuild repository identities while the server is running.' => 'Vous pouvez reconstruire les identités des dépôts pendant que le serveur est en cours d\'exécution.',
  'Customize the logo image and text which appears in the main site header:

  - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.

  - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.

' => 'Personnalise l’image du logo et le texte qui apparaît dans l’entête du site principal :

  - **Logo Image** (image du logo) : téléversez une nouvelle image 80 x 80px pour remplacer le logo dans l’entête du site.

  - **Wordmark** (logo typographique) : choisissez un nouveau texte à afficher à côté du logo. Par défaut, l’entête affiche //%s//.',
  'Trying to add duplicate table "%s"!' => 'Essai d’ajout d’une table dupliquée « %s » !',
  'No Authentication Providers Configured' => 'Aucun fournisseur d’authentification configuré',
  'Run Silently' => 'Exécuter silencieusement',
  'You can find more information about PHP configuration values in the %s.' => 'Vous pouvez trouver plus d’information sur les valeurs de la configuration PHP dans le %s.',
  'Skipping option "%s"; already in local config.' => 'Saut de l’option « %s » ; déjà dans la configuration locale.',
  'Public email is now accepted if the associated address has a default author, and rejected otherwise.' => 'Le courriel public est maintenant accepté si l’adresse associée a un auteur par défaut et rejeté sinon.',
  'Setup Issues' => 'Problèmes d’installation',
  'Require email verification' => 'Nécessite une vérification de courriel',
  'Resource minification is now managed automatically.' => 'La minimisation des ressources est maintenant gérée automatiquement.',
  'This software sometimes executes other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running this software (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.

Note that you can also put binaries in `%s` (for example, by symlinking them).

The current value of PATH after configuration is applied is:

  lang=text
  %s' => 'Phabricator lance occasionnellement d’autres binaires sur le serveur. Un exemple en est la commande « %s », utilisée pour mettre en évidence le code écrit dans d’autres langages que PHP. Par défaut, il est supposé que ces binaires sont dans le %s de l’utilisateur exécutant Phabricator (normalement « apache », « httpd », ou « nobody »). Vous pouvez ajouter ici des répertoires supplémentaires à la variable d’environnement %s, pour le cas où ces binaires sont dans des emplacements non standards.

Notez que vous pouvez aussi mettre des binaires dans « %s » (par exemple, en faisant un lien symbolique vers eux).

La valeur actuelle de « PATH » après application de la configuration est :

  lang=text
  %s',
  'Whitespace rendering is now handled automatically.' => 'Le rendu des espaces est maintenant géré automatiquement.',
  '%s Not Working' => '%s ne fonctionne pas',
  'This configuration option is unknown. It may be misspelled, or have existed in a previous version of the software.' => 'Cette option de configuration est inconnue. Elle est peut-être mal orthographiée ou a existé dans une version précédente de ce logiciel.',
  'You can use \'%s\' if you don\'t want to create a full translation to give users an option for switching to it and you just want to override some strings in the default translation.' => 'Vous pouvez utiliser \'%s\' si vous ne voulez pas créer une traduction complète, pour donner aux utilisateurs une option pour basculer vers elle, et que vous voulez juste écraser certaines chaînes dans la traduction par défaut.',
  'Connection' => 'Connexion',
  'Placeholder recipients are now generated automatically.' => 'Les paramètres de substitution sont maintenant automatiquement générés.',
  'Elasticsearch is configured (with the %s setting) but an exception was encountered when trying to test the index.

%s' => 'Elasticsearch est configuré (avec le paramètre %s) mais mais une exception a été rencontrée en essayant de tester l’index.

%s',
  'SSH keys are now actually useful, so they are always enabled.' => 'Les clés SSH sont maintenant utiles, c\'est pourquoi elles sont toujours activées.',
  'Request output, in bytes.' => 'Sortie de la requête, en octets.',
  'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => 'L’option de configuration « %s » n’est pas valide. L’URI doit contenir un point (\'.\'), comme dans « %s », pas simplement un nom comme « %s ». Certains navigateurs Internet n’acceptent pas de témoins (\'\'cookies\'\') pour les domaines sans TLD.',
  'The Multimeter application collects performance samples. You can use this data to help you understand what the software is spending time and resources doing, and to identify problematic access patterns.

This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.

For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'L’application Multimètre collecte des exemples de performance. Vous pouvez utiliser ces données pour vous aider à comprendre sur quoi le logiciel passe du temps et avec quelles ressources, et pour identifier les schémas d’accès problématiques.

Cette option contrôle à quelle fréquence l’échantillonnage s’active. La mettre à un entier positif N pour échantillonner toutes les 1 pages sur N.

Pour la plupart des installations, la valeur par défaut (1 échantillon pour 1000 pages) doit collecter suffisamment de données pour être utiles sans nécessiter beaucoup de stockage ou impacter fortement les performances. Si vous travaillez sur les problèmes de performance, vous pouvez ajuster la fréquence afin de collecter plus ou moins de données.',
  'Cache namespace.' => 'Espace de noms du cache.',
  '%s = 0' => '%s = 0',
  'Unsafe PHP "Local Infile" Configuration' => 'Configuration "Local Infile" PHP Non Sécurisée',
  'Custom remarkup rules are now added by subclassing %s or %s.' => 'Les règles de Remarkup personnalisées sont maintenant ajoutées en sous-classant %s ou %s.',
  'Issue Resolved' => 'Problème résolu',
  'If you enable this, linked Commons videos will be embedded inline.' => 'Si vous activez cela, les vidéos Commons intégrées seront incluses en ligne.',
  'Garbage collectors are now configured with "%s".' => 'Les ramasse-miettes sont maintenant configurés avec « %s » .',
  'Unknown configuration option type "%s".' => 'Type d\'option de configuration inconnu « %s » .',
  'Trying to add duplicate database "%s"!' => 'Essai d’ajouter une base de données « %s » dupliquée !',
  'This column has the wrong autoincrement setting.' => 'Cette colonne a un mauvais paramétrage d’auto-incrémentation.',
  'Allows you to add footer links on most pages.' => 'Vous permet d’ajouter des liens de bas de page sur la plupart des pages.',
  'USWest Region' => 'Région US Ouest',
  'Maniphest fields are now defined in `%s`. Existing definitions have been migrated.' => 'Les champs du manifeste sont maintenant définis dans `%s`. Les définitions existantes ont été migrées.',
  'Enable Prototypes' => 'Activer les prototypes',
  'Elasticsearch is now configured with "%s".' => 'Elasticsearch est maintenant configuré avec « %s ».',
  'Configuring Outbound Email' => 'Configuration du courriel de sortie',
  'Inbound mail addresses are now configured for each application in the Applications tool.' => 'Les adresses de messagerie de réception sont maintenant configurées pour chaque application dans l’outil Applications.',
  'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see https://www.google.com/recaptcha' => 'Activer recaptcha pour demander aux utilisateurs de résoudre les captchas après quelques tentatives de connexion en échec. Cela gêne les attaques par force brute sur les mots de passe utilisateur. Pour plus d’information, voir https://www.google.com/recaptcha',
  'Partial \'%s\' Support' => 'Prise en charge partielle de « %s »',
  'Subschemata have setup warnings.' => 'Subschemata a des avertissements d’installation.',
  'Uptime' => 'Durée de fonctionnement',
  'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.' => 'MySQL (sur l’hôte « %s ») utilise un fichier des mots à ignorer, ce qui évite de rechercher de nombreux mots courants.',
  'Two setup checks raised an issue with key \'%s\'!' => 'Deux vérifications d’installation ont levé un problème avec la clé \'%s\' !',
  'Mark activities complete even if there is no outstanding need to complete them.' => 'Marquer les activités terminées même s’il n’y a pas de besoin en suspens pour les terminer.',
  'You likely enabled cluster.search without creating the index. Use the following command to create a new index.' => 'Vous avez sans doute activé cluster.search sans créer l’index. Utiliser la commande suivante pour créer un nouvel index.',
  'Skipping option "%s"; already in database config.' => 'Sauter l’option « %s » ; déjà dans la configuration en base de données.',
  'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.

(If you already created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => 'Le moteur « InnoDB » n’est pas disponible dans MySQL (sur l\'hôte « %s »). Activez InnoDB dans votre configuration MySQL.

(Si vous avez déjà créé des tables, MySQL a utilisé à tort un autre moteur pour les créer. Vous devrez les convertir, ou les abandonner et les réinitialiser).',
  'This software is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.

Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => 'Ce logiciel est actuellement configuré pour diffuser les téléversements des utilisateurs depuis le même domaine que le reste du contenu. C’est un risque de sécurité.

Configurez un CDN (ou un domaine de fichier alternatif) pour éliminer ce risque. Utiliser un CDN améliorera aussi les performances. Voir le guide ci-dessous pour les instructions.',
  '%s Stats' => 'Statistiques %s',
  'The minimum supported version of Subversion is 1.5, which was released in 2008.' => 'La version minimale prise en charge de Subversion est la version 1.5, livrée en 2008.',
  'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.' => 'Votre limite mémoire PHP est configurée de telle sorte qu’elle peut vous empêcher de téléverser de gros fichiers ou de gérer de grandes requêtes.',
  'The system user.' => 'L\'utilisateur du système.',
  'Reload Page' => 'Recharger la page',
  'Force users to connect via HTTPS instead of HTTP.' => 'Forcer les utilisateurs à se connecter via HTTPS au lieu de HTTP.',
  'Large Files' => 'Gros fichiers',
  'Compressed Requests Not Received Properly' => 'Requêtes compressées non reçues correctement',
  'The namespace that databases should use.' => 'L’espace de noms que les bases de données doivent utiliser.',
  'Mark a manual upgrade activity as complete.' => 'Marquer une activité de mise à jour manuelle comme terminée.',
  '%s Not Set' => '%s non fixé',
  'This configuration option has been replaced with a modular handler. See T9346.' => 'Cette option de configuration a été remplacée par un gestionnaire modulaire. Voyez T9346.',
  'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)' => 'La valeur pour l’option « %s » (de type « %s ») doit être spécifiée en JSON, mais l’entrée n’a pas pu être décodée (avez-vous oublié de mettre une chaîne entre guillemets anglais ?).',
  'Configuration option \'%s\' has invalid value and was restored to the default: %s' => 'L’option de configuration \'%s\' a une valeur non valide et a été restaurée avec la valeur par défaut : %s',
  'To update these %d value(s), edit your PHP configuration file, located here:' => 'Pour mettre à jour ces %d valeurs, modifiez votre fichier de configuration PHP, situé ici :',
  'Collation' => 'Collation',
  'Replication' => 'Réplication',
  'The HTTP response code or process exit code.' => 'Le code de réponse HTTP ou le code de sortie du processus.',
  'Obsolete; use standard rendering events instead.' => 'Obsolète ; utiliser plutôt les événements de rendu standard.',
  'Local Disk Storage' => 'Stockage sur disque local',
  'Constant' => 'Constante',
  'Issue' => 'Problème',
  'Determines which URI protocols are valid for links and redirects.' => 'Détermine quels protocoles d’URI sont valides pour les liens et les redirections.',
  'Configuration Guide: Configuring a File Domain' => 'Guide de configuration : configurer un domaine de fichiers',
  'Activate DarkConsole on every page.' => 'Activer DarkConsole sur chaque page.',
  'Enable verbose error reporting and disk reads.' => 'Activer le rapport d’erreur verbeux et les lectures disque.',
  'This software sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.' => 'Ce logiciel s\'est envoyé une requête de test qui a été compressée avec « Content-Encoding: gzip », mais a reçu des octets différents de ceux envoyés.',
  'Mail object address hash keys are now generated automatically.' => 'Les clés de hachage de l’objet adresse du courriel sont maintenant automatiquement générées.',
  'Too many arguments: expected one key and one value.' => 'Trop d\'arguments: attendus une clé et une valeur.',
  'Settings History' => 'Historique des préférences',
  'Opcode' => 'Opcode',
  'To update these %d value(s), edit your PHP configuration file.' => 'Pour mettre à jour ces %d valeurs, modifiez votre fichier de configuration PHP.',
  'Auth provider config must be unlocked before editing' => 'La configuration des fournisseurs d’authentification doit être déverrouillée avant toute modification',
  'Enable Recaptcha' => 'Activer Recaptcha',
  'Prefix cookie with "%s"' => 'Préfixez le témoin (\'\'cookie\'\') avec « %s »',
  'The configuration option "%s" is not recognized. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.' => 'L\'option de configuration « %s » n\'est pas reconnue. Elle est peut-être mal orthographiée ou elle existe peut-être dans une ancienne version du logiciel. Elle n\'a aucun effet et doit être corrigée ou supprimée.',
  'You can rebuild the search index while the server is running.' => 'Vous pouvez reconstruire l\'index de recherche pendant que le serveur est en cours d\'exécution.',
  'Migrated option "%s" from file to database config.' => 'Option « %s » migrée du fichier vers la configuration de la base de données.',
  'PHP Documentation' => 'Documentation PHP',
  'Your webserver produced an unexpected response.' => 'Votre serveur web a retourné une réponse inattendue.',
  'Unable to determine the version number of "%s".' => 'Impossible de déterminer le numéro de version de « %s ».',
  'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless @{config:auth.email-domains} is nonempty.' => 'S’il est à <tt>true</tt>, les adresses électroniques doivent être vérifiées (en cliquant sur un lien dans un courriel) avant qu’un utilisateur puisse se connecter. Par défaut, la vérification est optionnelle sauf si @{config:auth.email-domains} est non-vide.',
  'PHP OPcache Documentation' => 'Documentation OPcache de PHP',
  'Daemons Are Not Running' => 'Les services en arrière-plan n\'ont pas été lancés',
  'Cluster: Databases' => 'Groupement : bases de données',
  'No Messages' => 'Pas de message',
  'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.' => 'L’élément de bas de page avec l’index « %s » n’est pas valide : chaque élément doit être un dictionnaire décrivant un élément de bas de page.',
  'None of the caches on this page can be cleared.' => 'Aucun des caches de cette page ne peut être vidé.',
  'Require email verification before a user can log in.' => 'Requiert une vérification de l\'adresse courriel avant qu\'un utilisateur puisse se connecter.',
  'Master' => 'Maître',
  'A Troublesome Encounter!' => 'Une rencontre problématique !',
  'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => 'L’algorithme d’indexation pour l’index de recherche en plein texte a été mis à jour et l’index doit être reconstruit. Jusqu’à ce que vous ayez reconstruit l’index, la recherche globale (et toute autre recherche en plein texte) ne fonctionneront pas correctement.',
  'Maximum taskmaster daemon pool size.' => 'Taille maximale de la réserve des services en arrière-plan du gestionnaire de tâches.',
  'Replica' => 'Copie',
  'Use Public Replies (Less Secure)' => 'Utiliser les réponses publiques (moins sécurisé)',
  'MySQL password to use when connecting to the database.' => 'Mot de passe MySQL à utiliser lors de la connexion à la base de données.',
  'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'' => 'Si une variable n’est pas disponible (par exemple, %%m apparaît dans le format du fichier mais la requête n’est pas une requête Conduit), elle sera rendue comme \'-\'',
  'CSRF HMAC keys are now managed automatically.' => 'Les clés CSRF HMAC sont maintenant gérées automatiquement.',
  'Database Status' => 'État de la base de données',
  'The request body that was received began:' => 'Le corps de la requête reçu commençait par :',
  'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s' => 'La valeur pour l’option « %s » (de type « %s ») doit être spécifiée en JSON, mais l’entrée n’a pas pu être décodée : %s',
  'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.' => 'L’hôte de la base de données « %s » a un état de grappe configuré qui est en conflit avec l’état de cet hôte (« %s »). Lancez `bin/storage partition` pour valider l’état local dans la grappe. Cet hôte peut avoir démarré avec une configuration périmée.',
  'Normally, this software issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, an interstitial page will be shown instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => 'Normalement, ce logiciel génère des redirections HTTP après un POST réussi. Cela peut rendre difficile le débogage de évènements qui se produisent lors de l’exécution du POST, parce que les informations de service et de profilage sont perdues. En définissant cette option de configuration, une page interstitielle sera affichée au lieu de rediriger automatiquement, vous permettant d’examiner les informations de service et de profilage. Cela rend aussi l’expérience utilisateur affreuse, donc vous ne devriez activer cela que pour déboguer.',
  'Largest' => 'Le plus grand',
  'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.

If you are running a cluster, this limit applies separately to each instance of `phd`. For example, if this limit is set to `4` and you have three hosts running daemons, the effective global limit will be 12.

After changing this value, you must restart the daemons. Most configuration changes are picked up by the daemons automatically, but pool sizes can not be changed without a restart.' => 'Nombre maximal de services en arrière-plan « maîtres de tâches » à exécuter simultanément. Augmenter cette valeur peut augmenter le débit maximal de la file d’attente. Le jeu de ressources inutilisées sera automatiquement réduit.

Si vous utilisez une grappe de serveurs, cette limite s’applique séparément à chaque instance de « phd ». Par exemple, si cette limite est définie sur « 4 » et que trois hôtes exécutent des services en arrière-plan, la limite globale effective sera de 12.

Après avoir modifié cette valeur, vous devez redémarrer les services en arrière-plan. La plupart des modifications de configuration sont automatiquement prises en compte par les services en arrière-plan mais la taille des jeux de ressources ne peut pas être modifiée sans redémarrage de chaque instance.',
  'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.' => 'Votre version de MySQL (sur l’hôte de base de données « %s ») ne prend pas en charge la configuration d’un fichier des mots à ignorer. Vous ne pourrez pas trouver de résultats de recherche pour certains mots courants.',
  'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'La configuration de votre PHP a sélectionné un fuseau horaire invalide. Sélectionnez un fuseau horaire valide.',
  '%s deleted this configuration entry (again?).' => '%s a supprimé cette entrée de configuration (de nouveau ?).',
  'There is some deprecated code found in the code-base.' => 'Il existe du code obsolète dans la base de code.',
  'Unresolved Setup Issues' => 'Problèmes d’installation non résolus',
  'Server Timezone Not Configured' => 'Fuseau horaire du serveur non configuré',
  'The following regex is malformed and cannot be used: %s' => 'L’expression rationnelle suivante est mal écrite et ne pourra pas être utilisée : %s',
  'Individual application reply handler domains have been removed. Configure a reply domain with "%s".' => 'Les domaines de gestionnaire de réponse à l’application individuelle ont été supprimés. Configurer un domaine de réponse avec « %s ».',
  'Preflight' => 'Avant-vol',
  'Install these %d PHP extension(s):' => 'Installer ces %d extensions PHP :',
  'Missing \'%s\' Binary' => 'Binaire \'%s\' manquant',
  'Charset' => 'Jeu de caractères',
  '\'%s\' or \'%s\' binary not found or Imagemagick is not installed.' => 'Binaire \'%s\' introuvable, ou Imagemagick n’est pas installé.',
  'By default, this software generates unique reply-to addresses and sends a
separate email to each recipient when you enable reply handling. This is more
secure than using "From" to establish user identity, but can mean users may
receive multiple emails when they are on mailing lists. Instead, you can use a
single, non-unique reply to address and authenticate users based on the "From"
address by setting this to \'true\'. This trades away a little bit of security
for convenience, but it\'s reasonable in many installs. Object interactions are
still protected using hashes in the single public email address, so objects
can not be replied to blindly.' => 'Par défaut, ce logiciel génère des adresses de réponse uniques et envoie un courriel distinct à chaque destinataire lorsque vous activez la gestion des réponses. C\'est plus sûr que d\'utiliser « De » pour établir l\'identité de l\'utilisateur, mais cela peut signifier que les utilisateurs peuvent recevoir plusieurs courriels lorsqu\'ils sont sur des listes de diffusion. Au lieu de cela, vous pouvez utiliser une seule réponse avec de multiples adresses pour vous adresser ou authentifier les utilisateurs à partir du champs « De » en définissant cette valeur sur « true ». Cela sacrifie un peu de sécurité au profit de la commodité, mais c\'est raisonnable pour de nombreuses installations. Les interactions avec les objets sont toujours protégées par des hachages dans l\'adresse courriel publique unique, de sorte qu\'on ne peut pas répondre aveuglément aux objets.',
  'The framable public feed is no longer supported.' => 'Le fil public pouvant être encadré n’est plus pris en charge.',
  'A random, unique string which identifies the request.' => 'Une chaîne aléatoire unique qui identifie la requête.',
  'Auth provider config can be edited without unlocking' => 'La configuration des fournisseurs d’authentification ne peut pas être modifiée sans la déverrouiller',
  'Disable unsafe option "%s" in PHP configuration.' => 'Désactiver l’option non sécurisée « %s » dans la configuration PHP.',
  '%s Day(s)' => '%s jour(s)',
  'PHP version: %s' => 'Version PHP : %s',
  'No search servers are configured.' => 'Aucun serveur de recherche n’est configuré.',
  'DarkConsole is a development and profiling tool built into the web interface. You should leave it disabled unless you are developing or debugging %s.

Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.

DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole est un outil de développement et de profilage intégré dans l’interface web. Vous devriez le laisser désactivé à moins que vous ne développiez ou déboguiez %s.

Une fois DarkConsole activé pour l’installation, **vous devez l’activer pour votre compte avant qu’il n\'apparaisse effectivement sur les pages**. Vous pouvez le faire dans Paramètres > Paramètres de développeur.

DarkConsole expose des données potentiellement sensibles (comme des requêtes, des traces de pile et la configuration), donc vous ne devriez en général pas l’activer en production.',
  'This key is too long for utf8mb4.' => 'Cette clé est trop longue pour utf8mb4.',
  'Expected Character Set' => 'Jeu de caractères attendu',
  'Repository Servers' => 'Serveurs de dépôt',
  'Format for the HTTP access log. Use `%s` to set the path. Available variables are:' => 'Format pour le journal d’accès HTTP. Utiliser `%s` pour définir le chemin. Les variables disponibles sont :',
  'Skipping obsolete option: %s' => 'Saut de l’option obsolète : %s',
  'This schema can use a better collation.' => 'Ce schéma peut utiliser une meilleure collation.',
  'Install Pygments to Improve Syntax Highlighting' => 'Installer Pygments pour améliorer la mise en évidence de la syntaxe.',
  'Sessions now expire and are garbage collected rather than having an arbitrary concurrency limit.' => 'Les sessions expirent désormais et sont prises en charge par le ramasse-miettes, plutôt que d’avoir une limite arbitraire en temps.',
  'Logo Image' => 'Image du logo',
  'Really Clear Cache' => 'Vraiment vider le cache',
  'Unexpected \'%s\' Behavior' => 'Comportement \'%s\' inattendu',
  'Mail thread IDs are now generated automatically.' => 'Les IDs des fils de discussions par courriel sont maintenant générés automatiquement.',
  'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the %s configuration value \'%s\' to specify one.' => 'Votre configuration ne permet pas de spécifier un fuseau horaire de serveur. Vous pouvez soit définir la valeur de configuration PHP « %s » soit la valeur de configuration de %s « %s » pour en indiquer un.',
  'Enable HTTP Strict Transport Security (HSTS).' => 'Activer la Sécurité de Transport HTTP Stricte (HSTS).',
  'This server has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => 'Ce serveur a %s disponible dans %s, mais le binaire s’est terminé avec un code erreur quand il est exécuté comme %s. Vérifiez qu’il est installé correctement.',
  'Users can configure a URI pattern to open files in a text editor. The URI must use a protocol on this whitelist.' => 'Les utilisateurs peuvent configurer un modèle d’URI pour ouvrir les fichiers dans un éditeur de texte. L’URI doit utiliser un protocole dans cette liste blanche.',
  'Config' => 'Configuration',
  'Transaction mail is now always sent with "Precedence: bulk" to improve deliverability.' => 'Le courrier de transaction est désormais toujours envoyé avec « Precedence: bulk » pour améliorer la livraison.',
  'Retention Policy' => 'Politique de rétention',
  'Without \'%s\', this software can not test for the availability of other binaries.' => 'Sans \'%s\', ce logiciel ne peut pas tester la disponibilité d’autres binaires.',
  'HTTP Basic Auth Not Configured' => 'Authentification HTTP basique non configurée',
  'Whitelist 1.2.*.*' => 'Liste blanche 1.2.*.*',
  'Highlight httpd.conf as "apacheconf".' => 'Mettre en surbrillance httpd.conf comme « apacheconf ».',
  'Database Value' => 'Valeur de base de données',
  'US Mountain (MDT)' => 'Montagne des USA (MDT)',
  'This option has been replaced with `ui.logo`, which provides more flexible configuration options.' => 'Cette option a été remplacée par `ui.logo`, qui fournit des options de configuration plus flexibles.',
  'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.

Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.

To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.

To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:

%s
(You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)' => 'L’hôte de base de données « %s » utilise le fichier des mots à ignorer intégré pour construire les index de recherche. Cela peut rendre la fonctionnalité de recherche moins efficace.

Les mots à ignorer sont des mots courants qui ne sont pas indexés et ne donc peuvent pas être recherchés. Le fichier par défaut des mots à ignorer a environ cinq cents mots, comprenant divers mots que vous voudrez peut-être rechercher comme \'various\', \'likely\', \'wish\', et \'zero\'.

Pour rendre la recherche plus efficace, vous pouvez utiliser un autre fichier des mots à ignorer avec moins de mots. Alternativement, si vous n’êtes pas concerné par la recherche de mots courants, vous pouvez ignorer cet avertissement. Si vous prévoyez plus tard de configurer Elasticsearch, vous pouvez aussi ignorer cet avertissement : ce fichier des mots à ignorer n’affecte que les index de plein texte de MySQL.

Pour choisir un autre fichier des mots à ignorer, ajoutez cela à votre fichier %s (dans la section %s) puis redémarrez %s :

%s

Le fichier suggéré ci-dessus contient environ cinquante des mots anglais les plus courants. Vous pouvez aussi utiliser un fichier différent si vous préférez.

Au final, lancez cette commande pour reconstruire les index en utilisant les nouvelles règles :

%s',
  'Rebuild Search Index' => 'Reconstruire l’index de recherche',
  'Do not install this software on an instance class with burstable CPU.' => 'N\'installez pas ce logiciel sur une classe d’instance avec un CPU extensible.',
  'Real' => 'Réel',
  'Partition: %s' => 'Partition: %s',
  'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => 'C’est une liste forcée d’expressions rationnelles qui vous permet de choisir quelles langues sont affectées aux fichiers. Si vos projets ont certaines règles portant sur les noms de fichiers ou utilisent des extensions de langue inhabituelles ou ambiguës, vous pouvez créer une correspondance ici. C’est un dictionnaire ordonné d’expressions rationnelles qui seront appliquées aux noms de fichiers. Elle doivent correspondre soit à une langue explicite sous forme de valeur de chaîne, soit à un entier représentant un index numérique dans les groupes capturés.',
  'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.

Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies @{config:auth.require-email-verification}.

You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.' => 'Vous pouvez restreindre les adresses de messagerie autorisées à certains domaines (comme « votresociete.example.com ») en définissant une liste de domaines autorisés ici.

Les utilisateurs ne seront autorisés à s’inscrire qu’en utilisant des adresses de messagerie d’un de ces domaines, et ne pourront ajouter de nouvelles adresses de messagerie que pour ces domaines. Si vous le configurez, cela implique @{config:auth.require-email-verification}.

Vous devez omettre le « @ » des domaines. Notez que le domaine doit correspondre exactement. Si vous autorisez « example.com », cela autorise « joe@example.com » mais rejette « joe@mail.example.com ».',
  'Show unresolved issues with setup and configuration.' => 'Afficher les problèmes non résolus dans l’installation et la configuration.',
  'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and this software does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.

Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.

You may be able to resolve this issue by updating this server, since a newer version of the software is likely to be able to parse the newer version string.

If updating the software does not fix this, you can report the issue to the upstream so we can adjust the parser.

If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => 'Impossible de déterminer le numéro de version de « %s ». Habituellement, cela signifie que le programme a modifié sa chaîne de format de version récemment et que ce logiciel ne sait pas encore comment analyser la nouvelle, mais cela peut aussi indiquer que vous avez un très vieux binaire (ou un binaire HS).

Comme nous ne pouvons pas déterminer le numéro de version, les vérifications des versions minimales et de celles connues comme mauvaises sont ignorées, ce qui fait que nous pourrions ne pas détecter un binaire incompatible.

Vous pouvez résoudre ce problème en mettant à jour ce serveur, car une version plus récente de ce logiciel devrait pouvoir analyser une chaîne de version plus récente.

Si la mise à jour du logiciel ne résout pas ce problème, vous pouvez signaler et faire remonter le problème pour que nous ajustions l’analyseur.

Si vous êtes certain d’avoir une version récente de « %s » fonctionnant correctement, cet avertissement peut généralement sans souci être ignoré.',
  'For conduit, the Conduit method which was invoked.' => 'Pour un conduit, la méthode Conduit qui a été invoquée.',
  'The configuration option \'%s\' is not set.' => 'L’option de configuration \'%s\' n’est pas positionnée.',
  'Stop Before HTTP Redirect' => 'Arrêter avant la redirection HTTP',
  'Developer / Debugging' => 'Développeur / Débogage',
  'You have enabled Imagemagick in your config, but the \'%s\' or \'%s\' binary is not in the webserver\'s %s. Disable imagemagick or make it available to the webserver.' => 'Vous avez activé Imagemagick dans votre configuration, mais le binaire \'%s\' n’est pas sur le serveur web %s. Désactivez ImageMagick ou rendez-le disponible sur le serveur web.',
  'Remove PHP %s' => 'Supprimer PHP %s',
  'Missing' => 'Manquant',
  'Classes must match to compare schemata!' => 'Les classes doivent correspondre pour comparer les schemata !',
  'Set the URI where this software is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => 'Définit l’URI où ce logiciel est installé. Le définir améliore la sécurité en évitant que les témoins (\'\'cookies\'\') soient définis pour d’autres domaines et permet aux services en arrière-plan d’envoyer des courriels avec des liens qui ont le bon domaine.',
  'Elasticsearch Index Not Found' => 'Index de Elasticsarch non trouvé',
  'Unit test value.' => 'Valeur du test des unités.',
  'A daemon is running as user %s, but daemons should be running as %s.

Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.' => 'Un service en arrière-plan s’exécute avec l’utilisateur %s, mais les services en arrière-plan doivent s’exécuter avec %s.

Ajuster le paramètre de configuration %s ou redémarrer les services en arrière-plan. Les services en arrière-plan devraient tenter de s’exécuter avec le bon utilisateur en redémarrant.',
  'Missing Key' => 'Clé manquante',
  'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.

There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed this software on, you might set this value to %s.

You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to this software which make it different from normal workloads with respect to this setting.

To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:

%s
If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => 'L’hôte de base de données « %s » est configuré avec une valeur de %s très petite (%s). Cela peut entraîner de mauvaises performances de la base de données et un épuisement des verrous.

Il n’y a aucune règle absolue pour définir la valeur appropriée mais un point de départ raisonnable pour une installation standard est quelque chose comme 40%% de la mémoire totale de la machine. Par exemple, si vous avez 4 Go de RAM sur la machine sur laquelle vous avez installé ce logiciel, vous pouvez mettre cette valeur à %s.

Vous pouvez en lire davantage dans la documentation MySQL pour vous aider à décider comment la configurer pour votre cas particulier. Il n\'y a aucun problème spécifique à ce logiciel qui le rend différent des charges de travail normales par rapport à ce paramètre.

Pour ajuster ce paramètre, ajoutez quelque chose comme cela à votre fichier %s (dans la section %s), en remplaçant %s par une valeur appropriée à votre hôte et votre cas d’utilisation. Puis redémarrez %s :

%s

Si le paramétrage actuel vous satisfait, vous pouvez sans souci ignorer cet avertissement d’installation.',
  'Expected Nullable' => 'Possiblement nul attendu',
  'Syntax highlighting is supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.

To install Pygments, visit [[ https://pygments.org/ | pygments.org ]] and follow the download and install instructions.

Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.

After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Le surlignage syntaxique est pris en charge par défaut pour quelques langages, mais vous pouvez installer Pygments (un outil tiers de surlignage syntaxique) pour prendre en charge beaucoup plus de langages.

Pour installer Pygments, allez sur [[ https://pygments.org/ | pygments.org ]] et suivez les instructions de téléchargement et d’installation.

Une fois Pygments installé, activez l’option `pygments.enabled` pour utiliser Pygments pour le surlignage du code source.

Une fois que vous avez installé et activé Pygments, le code source nouvellement créé (comme les diffs et les collages) devrait être surligné correctement. Vous devrez peut-être vider les caches pour que le code source déjà existant soit pris en compte. Pour les instructions concernant la gestion des caches, voyez [[ %s | Gérer les caches ]].',
  'Disable SSH log.' => 'Désactiver le journal SSH.',
  'Set a string this software should use to prefix cookie names.' => 'Définit une chaîne que ce logiciel doit utiliser pour préfixer les noms de témoins (\'\'cookies\'\').',
  'No databases have any issues.' => 'Aucune base de données n’a de problème.',
  'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make this service redirect HTTP requests to HTTPS.

Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.

IMPORTANT: A request is identified as HTTP or HTTPS by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.

If you configure clustering, note that this setting is ignored by intracluster requests.' => 'Si le serveur web répond à la fois aux requêtes HTTP et HTTPS alors que vous voulez que les utilisateurs ne se connectent qu’avec HTTPS, vous pouvez mettre cela à « true » (vrai) pour que ce service redirige les requêtes HTTP vers HTTPS.

Normalement, vous devriez configurer votre serveur pour qu’il n’accepte pas de trafic HTTP, mais ce paramètre peut être utile si vous utilisiez HTTP à l’origine et avez maintenant basculé sur HTTPS mais ne voulez pas casser les anciens liens, ou bien si votre serveur web est derrière un répartiteur de charge qui termine les connexions HTTPS alors que vous ne pouvez pas raisonnablement configurer un comportement plus précis à cet endroit.

IMPORTANT : une requête est identifiée HTTP ou HTTPS en examinant la variable PHP « %s ». Si vous exécutez Apache/mod_php, cela sera sans doute défini correctement de façon automatique, mais si vous exécutez en tant que CGI/FCGI (par ex., via nginx ou lighttpd), vous devez configurer votre serveur web afin qu’il passe la valeur correctement selon le type de connexion.

Si vous configurez en mode grappe, notez que ce paramètre est ignoré par les requêtes internes à la grappe.',
  'Option "%s" is of type "%s", but the configured value is not an integer.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas un entier.',
  'Notifications no longer have a dedicated debugging mode.' => 'Les notifications n’ont plus de mode de débogage dédié.',
  'Daemon Running as Wrong User' => 'Service en arrière-plan s’exécutant avec le mauvais utilisateur',
  'This software sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".

Your webserver is configured incorrectly and large parts of this software will not work until this issue is corrected.

(This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'Ce logiciel s’est envoyé une requête de test à lui-même avec un paramètre HTTP GET, mais le paramètre n’a pas été transmis. A envoyé « %s » avec la valeur « %s », a reçu « %s » avec la valeur « %s ».

Votre serveur web est mal configuré et une grande partie de ce logiciel ne fonctionnera pas jusqu’à ce que ce problème soit corrigé.

(Ce problème peut être dû à un « QSA » manquant dans votre RewriteRule).',
  'MySQL is not in strict mode (on host "%s"), but using strict mode is recommended.' => 'MySQL n’est pas en mode strict (sur l’hôte « %s »), mais utiliser le mode strict est fortement recommandé.',
  'This ancient extension point has been replaced with other mechanisms, including "AphrontSite".' => 'Cet ancien point d’extension a été remplacé par d’autres mécanismes, dont « AphrontSite ».',
  'You enabled Elasticsearch but the index does not exist.' => 'Vous avez activé Elasticsearch mais l\'index n\'existe pas.',
  '%s Not Found' => '%s non trouvé',
  'Write SSH error log here.' => 'Écrire le journal des erreurs SSH ici.',
  'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.' => 'Votre configuration `%s` contient un numéro de port, mais cette utilisation est obsolète. À la place, mettre le numéro de port dans `%s`.',
  'Elasticsearch Index Schema Mismatch' => 'Non correspondance du schéma d’index de Elasticsearch',
  'Column has Wrong Autoincrement' => 'La colonne a un mauvais incrément automatique',
  'Enable the debugging console.' => 'Activer la console de déboggage.',
  'Specify the configuration key you want to set.' => 'Spécifiez la clé de configuration que vous voulez définir.',
  'Memory Limit Restricts File Uploads' => 'La taille mémoire restreint les téléversements de fichiers',
  'Cache Entries' => 'Entrées du cache',
  'Unknown column type "%s"!' => 'Type de colonne « %s » inconnu !',
  'The minimum supported version of Git on the server is %s, which was released in %s. In older versions, the Git server may not be able to escape arguments with the "--" operator. Note: your users do not require a particular version of Git.' => 'La version minimale de Git prise en charge sur le serveur est %s, qui a été publiée en %s. Dans les versions plus anciennes, le serveur Git peut ne pas être en mesure d\'échapper les arguments avec l\'opérateur « -- ». Remarque : vos utilisateurs n\'ont pas besoin d\'une version particulière de Git.',
  'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.' => 'L’emplacement configuré pour stocker les fichiers téléversés sur le disque (« %s ») n’existe pas, ou ne peut pas être lu ou écrit. Vérifier que le répertoire existe et peut être lu et écrit par le serveur web.',
  'Notifications User Guide: Setup and Configuration' => 'Guide utilisateur des notifications : Installation et configuration',
  'This software sent itself a test request with the "X-Setup-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:

%s

Something is misconfigured or otherwise mangling responses.' => 'Ce logiciel s\'est envoyé à lui-même une requête de test avec l’entête « X-Setup-SelfCheck » et s’attendait à obtenir une réponse JSON valide en retour. À la place, la réponse commence par :

%s

Quelque chose est mal configuré ou déforme les réponses.',
  'Key is Too Long' => 'La clé est trop longue',
  '\'%s\' Missing' => '\'%s\' manquant',
  'Configure database read replicas.' => 'Configurer la base de données pour lire les copies répliquées.',
  'Elasticsearch Misconfigured' => 'Elasticsearch mal configuré',
  'Amazon S3 is Only Partially Configured' => 'Amazon S3 n\'est que partiellement configuré',
  '<none>' => '<aucun>',
  'Customize favicons.' => 'Personnaliser les favicons.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).' => 'Le composant PATH \'%s\' (qui est traduit dans le chemin absolu \'%s\') n’est pas utilisable parce qu’il ne peut pas être traversé (son bit de droit \'%s\' n’est pas mis).',
  'No Repositories' => 'Aucun dépôt',
  '%s deleted this configuration entry.' => '%s a supprimé cette entrée de configuration.',
  'After rebuilding repository identities, run this command to clear this setup warning:' => 'Après reconstruction des identités de dépôt, lancer cette commande pour nettoyer cet avertissement d’installation :',
  'The timezone this software should use by default.' => 'Le fuseau horaire que ce logiciel doit utiliser par défaut.',
  'Mail is now always delivered by the daemons.' => 'Le courriel est maintenant toujours envoyé par les services en arrière-plan.',
  'Request has bad "Host" header.' => 'Requête avec un mauvais entête « Host ».',
  'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.' => 'Cette version de Subversion a un bogue où `%s` ne fonctionne pas pour les fichiers ajoutés dans rN (Problème Subversion #2873), corrigé en 1.7.2.',
  'Elasticsearch is not reachable as configured.' => 'Elasticsearch n’est pas atteignable tel qu’il est configuré.',
  'Key has Wrong Uniqueness' => 'La clé a une mauvaise unicité',
  'Determines whether or not basic account information is editable.' => 'Détermine si les informations de base du compte sont ou non modifiables.',
  'Get a local configuration value.' => 'Obtenir une valeur de configuration locale.',
  'By default, this software allows users to add multi-factor authentication to
their accounts, but does not require it. By enabling this option, you can
force all users to add at least one authentication factor before they can use
their accounts.

Administrators can query a list of users who do not have MFA configured in
{nav People}:

  - **[[ %s | %s ]]**' => 'Par défaut, ce logiciel permet aux utilisateurs d\'ajouter une authentification multi-facteurs à leurs comptes mais ne l\'exige pas. En activant cette option, vous pouvez obliger tous les utilisateurs à ajouter au moins un facteur d\'authentification avant de pouvoir utiliser leurs comptes.

Les administrateurs peuvent interroger une liste d\'utilisateurs qui n\'ont pas configuré l\'authentification multi-facteurs dans {nav People} :

  - **[[ %s | %s ]]**',
  'The base URI for this install is not configured. Many major features will not work properly until you configure it.' => 'L’URI de base pour cette installation n’est pas configurée. Beaucoup de fonctionnalités majeures ne fonctionneront pas correctement jusqu’à ce que vous la configuriez.',
  'Unexpected \'diff\' Behavior' => 'Comportement de \'diff\' inattendu',
  'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.' => 'Le binaire \'%s\' de ce système a un comportement inattendu : il devrait se terminer avec un code d’erreur différent de zéro en recevant des fichiers différents, mais ce n’est pas le cas.',
  'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.' => 'Vous pouvez ignorer un problème si vous ne voulez pas le corriger, ou si vous prévoyez de le faire plus tard. Les problèmes ignorés n’apparaîtront pas sur chaque page, mais seront encore affichés dans la liste des problèmes ouverts.',
  'Enter value in JSON.' => 'Saisir la valeur en JSON.',
  'Migrated option "%s" from file to local config.' => 'Option « %s » migrée du fichier vers la configuration locale.',
  'Shenanigans' => 'Bidouilles',
  'The path for local repositories does not exist, or is not readable by the webserver.' => 'Le chemin pour les dépôts locaux n’existe pas ou ne peut pas être lu par le serveur web.',
  'Inbound and outbound mail is now configured with "cluster.mailers".' => 'Le trafic de courriels entrants ou sortants est maintenant configuré avec « cluster.mailers ».',
  'Config \'%s\' Invalid' => 'Configuration \'%s\' non valide',
  'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.' => 'Un hôte de base de données (« %s ») et cet hôte web (« %s ») ne concordent pas sur l’heure actuelle avec  plus de soixante secondes (décalage absolu de %s secondes). Vérifier que l’heure actuelle est bien définie partout.',
  'No Recipient Hints' => 'Aucun conseil de destinataire',
  'Sample 0.1%% of requests.' => 'Échantillonner 0,1%% des requêtes.',
  'No Issues' => 'Aucun problème',
  'No Caches to Reset' => 'Aucun cache à réinitialiser',
  'No Base URI' => 'Aucune URI de base',
  'Really Clear Cache?' => 'Vraiment vider le cache ?',
  'Allow Any Host (Insecure!)' => 'Autoriser tout hôte (non sécurisé !)',
  'Collectors with custom policies are highlighted. Use %s to change retention policies.' => 'Les collecteurs avec des politiques personnalisées sont surlignés. Utiliser %s pour modifier les politiques de rétention.',
  'Multi-Factor Required' => 'Multi-facteurs obligatoire',
  'Host: %s' => 'Hôte: %s',
  'Reply hints are no longer shown in mail.' => 'Les astuces pour réponse ne sont plus affichées dans les courriels.',
  'Profile every request (slow)' => 'Faire un profil de toutes les requêtes (lent)',
  'Resolved Issue' => 'Problème résolu',
  'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.' => 'Le chemin local « %s » n’est pas accessible en écriture. Ce fichier doit être inscriptible pour que « bin/config » puisse y stocker la configuration.',
  'This option generally did not prove useful. Resource hash keys are now managed automatically.' => 'Cette option ne s’est généralement pas avérée utile. Les clés de hachage de la ressource sont maintenant gérées automatiquement.',
  'Schema Status' => 'Etat du schema',
  'To update these %d value(s), run these command(s) from the command line:' => 'Pour mettre à jour ces %d valeurs, exécutez ces commandes depuis la ligne de commande :',
  'If you want to use a single mailbox for reply mail, you can use this
and set a common prefix for generated reply addresses. It will
make use of the fact that a mail-address such as
`devtools+D123+1hjk213h@example.com` will be delivered to the `devtools`
user\'s mailbox. Set this to the left part of the email address and it will be
prepended to all generated reply addresses.

For example, if you want to use `devtools@example.com`, this should be set
to `devtools`.' => 'Si vous souhaitez utiliser une seule boîte aux lettres pour le courrier de réponse, vous pouvez utiliser ceci et définir un préfixe commun pour les adresses de réponse générées. Cela exploitera le fait qu\'une adresse électronique telle que `devtools+D123+1hjk213h@example.com` sera délivrée à la boîte aux lettres de l\'utilisateur `devtools`. Définissez ceci sur la partie gauche de l\'adresse courriel et elle sera préfixée à toutes les adresses de réponse générées.

Par exemple, si vous souhaitez utiliser `devtools@example.com`, cela doit être défini sur `devtools`.',
  'Cache Storage' => 'Mémoire cache',
  'At least one daemon is currently running as the wrong user.' => 'Au moins un service en arrière-plan tourne actuellement avec le mauvais utilisateur.',
  'Data Type' => 'Type de données',
  'Better Character Set Available' => 'Un meilleur ensemble de caractères est disponible',
  'Small MySQL "%s"' => 'Petit MySQL "%s"',
  'Value for option "%s" must be an integer.' => 'La valeur de l\'option "%s" doit être entière.',
  'The request path, or request target.' => 'Le chemin de la requête, ou sa cible.',
  '%s Active / %s Total' => '%s Actif / %s Total',
  'Automatic' => 'Automatique',
  'Connection Error' => 'Erreur de connexion',
  'Options relating to authentication.' => 'Options relatives à l\'identification.',
  'Migrating file source...' => 'Fichier source en cours de migration...',
  'Autoincrement' => 'Auto-incrementation',
  'Dark' => 'Sombre',
  'GZip Compression May Not Be Enabled' => 'La compression GZip n\'est peut-être pas activée',
  'Typeahead strategies are now managed automatically.' => 'Les stratégies de saisie semi-automatique sont désormais gérées automatiquement.',
  'Return to Open Issue List' => 'Retourner à la liste des problèmes ouverts',
  'Activate read-only mode for maintenance or disaster recovery.' => 'Activer le mode lecture seule pour la maintenance ou la récupération de crash.',
  'PHP also loaded these %s configuration file(s):' => 'PHP a aussi chargé ces %s fichier(s) de configuration :',
  'Reading value from stdin...' => 'Lecture de la valeur depuis le flux d’entrée standard…',
  'Option "%s" is of type "%s", but the value you provided is not a valid JSON list: when providing a set from the command line, specify it as a list of values in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L’option « %s » est de type « %s », mais la valeur que vous avez fournie n’est pas une liste JSON valide : lorsque vous fournissez un ensemble depuis la ligne de commande, spécifiez-le comme une liste de valeurs en JSON. Vous devez mettre entre guillemets anglais la valeur pour votre interpréteur  (par exemple : \'["a", "b", ...]\').',
  'To rebuild the index, run this command:' => 'Pour reconstruire l’index, exécutez cette commande :',
  'This software can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 

For instructions on installing and enabling Pygments, see the %s configuration option.

If you do not want to install Pygments, you can ignore this issue.' => 'Ce logiciel peut surligner par défaut les soucis de syntaxe de quelques langages, mais installer et activer Pygments (un outil tiers de surlignage) ajoutera le surlignage de la syntaxe pour davantage de langages. 

Pour des instructions sur l’installation et l’activation de Pygments, voyez l’option de configuration %s.

Si vous ne voulez pas installer Pygments, vous pouvez ignorer ce problème.',
  'Disable Recaptcha' => 'Désactiver Recaptcha',
  'Sample every request (slow).' => 'Tester chaque requête (lent).',
  'The daemons are not running, background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds) can not be performed.

Use %s to start daemons. See %s for more information.' => 'Les services en arrière-plan ne sont pas en cours d\'exécution, donc les tâches de fond (par exemple l’envoi de courriel, la reconstruction des index de recherche, l’importation de validations, le nettoyage des anciennes données et l’exécution de constructions) ne peuvent pas être effectuées.

Utilisez %s pour lancer les services en arrière-plan. Voir %s pour plus d’information.',
  'Unsafe MySQL "local_infile" Setting Enabled' => 'Paramètre non sûr « local_infile » activé dans MySQL',
  'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of the software.

You can configure Webhooks in Herald.

To resolve this issue, remove all URIs from "feed.http-hooks".' => 'L\'option « feed.http-hooks » a été rendue obsolète au profit des accroches Internet. Elle sera supprimée dans une version future de ce logiciel.

Vous pouvez configurer les accroches Internet dans Herald.

Pour résoudre ce problème, supprimez toutes les URI de « feed.http-hooks ».',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' does not exist.' => 'Le composant PATH \'%s\' (qui se résoud dans le chemin absolu \'%s\') n’est pas utilisable parce que \'%s\' n’existe pas.',
  'The search index algorithm has been updated and the index needs be rebuilt.' => 'L’algorithme d’index de la recherche a été mis à jour et l’index doit être reconstruit.',
  'The current PHP configuration has these %d value(s):' => 'La configuration PHP actuelle a ces %d valeurs :',
  'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or adjust configuration.' => 'L’hôte de base de données « %s » est configuré comme maître, mais réplique un autre hôte. C’est dangereux et peut endommager voire détruire des données. Seuls les répliques doivent répliquer. Arrêtez la réplication sur l’hôte ou ajustez la configuration.',
  'This issue is currently ignored, and does not show a global warning.' => 'Ce problème est actuellement ignoré, et n’affiche pas d\'avertissement global.',
  'Cache Status' => 'État du cache',
  'You have at least one repository configured which uses this version control system. It will not work without the VCS binary.' => 'Vous avez au moins un dépôt configuré qui utilise ce gestionnaire de configuration. Il ne fonctionnera pas sans le binaire du VCS.',
  'Done. Migrated %d keys.' => 'Terminé. %d clés migrées.',
  'The remote IP.' => 'L’adresse IP distante.',
  'Disable Prototypes' => 'Désactiver les prototypes',
  'US West (PDT)' => 'États-Unis Ouest (PDT)',
  'Deleted \'%s\' from %s configuration.' => '\'%s\' supprimé de la configuration %s.',
  'Run Normally' => 'Exécuter normalement',
  'Default key for HMAC digests where the key is not important (i.e., the hash itself is secret). You can change this if you want (to any other string), but doing so will break existing sessions and CSRF tokens. This option is deprecated. Newer code automatically manages HMAC keys.' => 'Clé par défaut pour les résumés HMAC où la clé est sans importance (c.-à-d., le hachage lui-même est secret). Vous pouvez modifier cela si vous voulez (en une autre chaîne), mais faire cela cassera les sessions existantes et les jetons CSRF. Cette option est obsolète. Du code plus récent gère automatiquement les clés HMAC.',
  'Highlight %s as PHP.' => 'Surligner %s comme PHP.',
  'MySQL is Using Default Stopword File' => 'MySQL utilise le fichier par défaut des mots à ignorer',
  'Pagespeed is enabled, but should be disabled.' => 'Pagespeed est activé, mais devrait être désactivé.',
  'Paths to additional phutil libraries to load.' => 'Chemins vers les bibliothèques phutil supplémentaires à charger.',
  'User Guide: Prototype Applications' => 'Guide utilisateur : Applications prototype',
  'If you enable this, linked YouTube videos will be embedded inline. This has mild security implications (you\'ll leak referrers to YouTube) and is pretty silly (but sort of awesome).' => 'Si vous activez cela, les vidéos YouTube liées seront intégrées en ligne. Cela a de légères implications de sécurité (vous ferez fuiter les parrains vers YouTube) et est plutôt stupide (mais plutôt impressionnant).',
  'Library' => 'Bibliothèque',
  'The \'%s\' binary could not be located or executed.' => 'Le binaire \'%s\' n’a pas pu être trouvé ou exécuté.',
  'Show Email Preferences Link' => 'Afficher le lien des préférences de courriel',
  'Confirm before redirecting so DarkConsole can be examined.' => 'Confirmer avant de rediriger, afin que DarkConsole puisse être examiné.',
  'If you enable `%s`, this software uses "From" to authenticate users. You can
additionally enable this setting to try to authenticate with \'Reply-To\'. Note
that this is completely spoofable and insecure (any user can set any \'Reply-To\'
address) but depending on the nature of your install or other deliverability
conditions this might be okay. Generally, you can\'t do much more by spoofing
Reply-To than be annoying (you can write but not read content). But this is
still **COMPLETELY INSECURE**.' => 'Si vous activez « %s », ce logiciel utilise « From » pour authentifier les utilisateurs. Vous pouvez également activer ce paramètre pour essayer de vous authentifier avec « Reply-To ». Notez que cela est complètement falsifiable et non sécurisé (n\'importe quel utilisateur peut définir n\'importe quelle adresse « Reply-To ») mais selon la nature de votre installation ou d\'autres conditions de délivrabilité cela peut être acceptable. En général, on ne peut pas faire grand-chose de plus en falsifiant « Reply-To » que d\'être ennuyeux (vous pouvez écrire mais pas lire du contenu). Mais cela reste **COMPLETEMENT INSÉCURISÉ**.',
  'Define a cluster by providing a whitelist of host addresses that are part of the cluster.

Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.

Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.

When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.' => 'Définit une grappe en fournissant une liste blanche d’adresses d’hôtes qui font partie de la grappe.

Les hôtes sur cette liste blanche ont des droits spéciaux. Ces hôtes peuvent contourner les règles de sécurité donc mal configurer cette liste peut réduire la sécurité de votre installation. Pour plus d’information, voir **[[ %s | %s ]]**.

Définit une liste de blocs CIDR qui met en liste blanche tous les hôtes dans la grappe et aucun autre. Voir les exemples ci-dessous pour plus de détails.

Quand les adresses de la grappe sont définies, les hôtes rejetteront aussi les requêtes vers les interfaces qui ne sont pas en liste blanche.',
  'On host "%s", MySQL is configured with a small "%s" (%d), which may cause some large writes to fail. The recommended minimum value for this setting is "%d".' => 'Sur l’hôte « %s », MySQL est configuré avec un petit « %s » (%d), ce qui peut provoquer l’échec de longues écritures. La valeur minimale recommandée pour ce paramètre est « %d ».',
  'Config option "%s" is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like "%s".' => 'L’option de configuration « %s » n’est pas valide. L’identifiant de fuseau horaire doit être un identifiant valide de fuseau horaire reconnu par PHP, tel que « %s ».',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not a directory.' => 'Le composant de PATH \'%s\' (qui se résout dans le chemin absolu \'%s\') n’est pas utilisable parce que \'%s\' n’est pas un répertoire.',
  'Configure %s' => 'Configurer %s',
  'Normally, pages are profiled only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.

Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).

Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.

NOTE: You must install XHProf for profiling to work.' => 'Normalement, les pages sont profilées uniquement quand cela est demandé explicitement via DarkConsole. Toutefois, il peut être utile de profiler certaines pages automatiquement.

Définissez cette option avec un entier positif N pour faire automatiquement le profil de 1 page sur N. Par exemple, la mettre à 1 fera le profil de toutes les pages, alors que la mettre à 1000 fera le profil de 1 page toutes les 1000 requêtes (c\'est-à-dire 0,1%% des requêtes).

Comme le profilage est lent et génère beaucoup de données, vous devriez mettre cette valeur à 0 en production (pour le désactiver) ou à un très grand nombre (pour collecter quelques exemples, si cela vous intéresse d’avoir quelques données à regarder au besoin). En développement, il peut être utile de la mettre à 1 pour déboguer des problèmes de performance.

NOTE : vous devez installer XHProf pour que les profils fonctionnent.',
  'Missing "zip" Extension' => 'Extension « zip » manquante',
  'Set the language list which appears in dropdowns.' => 'Définir la liste de langues qui apparaît dans les listes déroulantes.',
  'Inverse' => 'Inverse',
  'Deprecated Config Source' => 'Source de Configuration Dépréciée',
  'Indefinite' => 'Non défini',
  'Edge Types' => 'Types d’arêtes',
  'Disable access log.' => 'Désactiver le journal d’accès.',
  'Logo configuration is not valid: value must be a dictionary.' => 'La configuration du logo n’est pas valide : la valeur doit être un dictionnaire.',
  'Really ignore this setup issue?' => 'Vraiment ignorer ce problème d’installation ?',
  'Config option "%s" is invalid. The URI must start with "%s" or "%s".' => 'L’option de configuration  « %s » n’est pas valide. L’URI doit commencer par « %s » ou « %s ».',
  'Options relating to syntax highlighting source code.' => 'Options relatives à la mise en évidence de la syntaxe du code source.',
  'Allow HTTP' => 'Permettre HTTP',
  'Simple Example' => 'Exemple simple',
  'Auth Config Unlocked' => 'Configuration d’authentification déverrouillée',
  'Synchronized' => 'Synchronisé',
  'No REMOTE_ADDR is available, so this server cannot determine the origin address for requests. This will prevent the software from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'Aucun REMOTE_ADDR n’est disponible donc ce serveur ne peut pas déterminer l’adresse d’origine des requêtes. Cela empêchera le logiciel d’effectuer des vérifications de sécurité importantes. Cela veut le plus souvent dire que vous avez une erreur dans votre script de préambule. Consultez la documentation (%s) et vérifiez que le script est écrit correctement.',
  'Access key for Amazon EC2.' => 'Clé d’accès pour Amazon EC2.',
  '%s Component Unusable' => '%s composant inutilisable',
  'Unsynchronized' => 'Non synchronisé',
  'Available search engines are now automatically discovered at runtime.' => 'Les moteurs de recherche disponibles sont désormais automatiquement découverts lors de l\'exécution.',
  'Key for HMAC digests.' => 'Clé pour les résumés HMAC.',
  'Enable applications which are still under development.' => 'Installer les applications qui sont encore en développement.',
  'The request duration, in microseconds.' => 'La durée de la requête, en microsecondes.',
  'Amazon S3 region where your S3 bucket is located. When you specify a region, you should also specify a corresponding endpoint with `amazon-s3.endpoint`. You can find a list of available regions and endpoints in the AWS documentation.' => 'Région d’Amazon S3 où votre compartiment S3 est localisé. Quand vous spécifiez une région, vous devez aussi spécifier un point de terminaison correspondant avec `amazon-s3.endpoint`. Vous pouvez trouver une liste des régions et des points de terminaison disponibles dans la documentation de AWS.',
  'MySQL %s Not Supported' => 'MySQL %s non pris en charge',
  'Option "%s" is of type "%s", but the current value ("%s") is not among the set of valid values: %s.' => 'L’option « %s » est de type « %s », mais la valeur actuelle (« %s ») ne fait pas partie de l’ensemble des valeurs valides : %s.',
  'Auth Application' => 'Application Auth',
  'The environmental variable %s is empty. This server will not be able to execute some commands.' => 'La variable d’environnement %s est vide. Ce serveur ne pourra pas exécuter certaines commandes.',
  '%s.%s (%s)' => '%s.%s (%s)',
  'There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the user account that gets associated with VCS commits.' => 'Il existe une nouvelle couche d\'indirection entre les chaînes qui apparaissent comme auteurs et validateurs VCS (comme « John Developer <johnd@bigcorp.com> ») et le compte utilisateur associé aux validations VCS.',
  'All Differential fields are now managed through the configuration option "%s". Use that option to configure which fields are shown.' => 'Tous les champs du différentiel sont désormais gérés via l’option de configuration « %s ». Utiliser cette option pour configurer les champs affichés.',
  'Use HSTS' => 'Utilisez HSTS',
  'The current MySQL configuration has these %d value(s):' => 'La configuration actuelle de MySQL a ces %d valeurs :',
  'Show "To:" and "Cc:" footer hints in email.' => 'Afficher les conseils concernant « À : » et « Copie cachée : » en bas de page dans le courriel.',
  'Write SSH log here.' => 'Écrire le journal SSH ici.',
  'Migrate From "feed.http-hooks" to Webhooks' => 'Migration de "feed.http-hooks" vers Webhooks',
  'Partitioning and replication are now managed in primary configuration.' => 'Le partitionnement et la réplication sont désormais gérés en configuration principale.',
  'You can find more information about configuring OPcache in the %s.' => 'Vous pouvez trouver plus d’information sur la configuration de OPcache dans le %s.',
  'PHP Timezone' => 'Fuseau horaire PHP',
  'This option is not recognized. It may be misspelled.' => 'Cette option n\'est pas reconnue. Veuillez vérifier l\'orthographe.',
  'Internal.' => 'Interne.',
  'Advanced Settings' => 'Paramètres avancés',
  'SSH log format.' => 'Format du journal SSH.',
  'After installing new PHP extensions, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'Après avoir installé de nouvelles extensions PHP, <strong>redémarrer tout pour que les modifications prennent effet</strong>. Pour avoir de l’aide concernant un redémarrage total, voir %s dans la documentation.',
  'Default address used when generating mail.' => 'Adresse pas défaut utilisée lors de la génération d’un courriel.',
  'By default, this software serves files from the same domain the application is served from. This is convenient, but presents a security risk.

You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => 'Par défaut, ce logiciel fournit les fichiers depuis le même domaine que l’application. C’est pratique mais présente un risque de sécurité.

Vous devriez configurer un CDN ou un domaine alternatif pour les fichiers pour réduire ce risque. Configurer un CDN améliorera aussi les performances. Voir [[ %s | %s ]] pour des instructions à ce sujet.',
  'Learn more about locked and hidden options.' => 'En savoir plus sur les options verrouillées et cachées.',
  'Default address used as a "From" or "To" email address when an address is
required but no meaningful address is available.

If you configure inbound mail, you generally do not need to set this:
the software will automatically generate and use a suitable mailbox on the
inbound mail domain.

Otherwise, this option should be configured to point at a valid mailbox which
discards all mail sent to it. If you point it at an invalid mailbox, mail sent
by the software and some mail sent by users will bounce. If you point it at a
real user mailbox, that user will get a lot of mail they don\'t want.

For further guidance, see **[[ %s | %s ]]** in the documentation.' => 'Adresse par défaut utilisée comme adresse courriel « De » ou « À » lorsqu\'une adresse est requise mais qu\'aucune adresse significative n\'est disponible.

Si vous configurez le courrier entrant, vous n\'avez généralement pas besoin de définir cette option : le logiciel génère et utilise automatiquement une boîte aux lettres appropriée sur le domaine de courrier entrant.

Sinon, cette option doit être configurée pour pointer vers une boîte aux lettres valide qui rejettera tous les messages qui lui seront envoyés. Si vous la pointez vers une boîte aux lettres non valide, les messages envoyés par le logiciel et certains messages envoyés par les utilisateurs seront rejetés. Si vous la pointez vers une boîte aux lettres d\'un utilisateur réel, cet utilisateur recevra beaucoup de messages indésirables.

Pour plus d\'informations, consultez **[[ %s | %s ]]** dans la documentation.',
  'You must start the daemons to send email, rebuild search indexes, and do other background processing.' => 'Vous devez démarrer les services en arrière-plan pour envoyer des courriels, reconstruire les index de recherche et faire d’autres traitements en tâche de fond.',
  'After editing the PHP configuration, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'Après avoir modifié la configuration PHP, <strong>redémarrer tout pour que les modifications prennent effet</strong>. Pour avoir de l’aide concernant un redémarrage total, voir %s dans la documentation.',
  'Repository Status' => 'Statut du dépôt.',
  'Do Not Use HSTS' => 'Ne pas utiliser HSTS',
  'List all configuration keys.' => 'Lister toutes les clés de configuration.',
  'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".' => 'La personnalisation par application du préfixe de sujet de courriel n’est plus directement prise en charge. Les préfixes et autres chaînes peuvent être personnalisées avec « translation.override ».',
  'Configuration key "%s" is of type "%s". Specify it in JSON.' => 'La clé de configuration « %s » est de type « %s ». Spécifiez-le en JSON.',
  'This will only affect the current web frontend. Daemons and any other web frontends may continue to use older, cached code from their opcache.' => 'Cela n’affectera que le frontal web actuel. Les services en arrière-plan et tout autre frontal web continueront à utiliser le code en cache plus ancien depuis leur opcache.',
  'Configure real-time notifications.' => 'Configurer les notifications en temps réel.',
  'Surplus Key' => 'Clé excédentaire',
  'Cluster Setup' => 'Installation de la grappe',
  'Obsolete Configuration Option "%s"' => 'Option de configuration « %s » obsolète',
  'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'Le binaire « %s » est introuvable. Corriger la variable d’environnement %s du serveur web pour inclure le répertoire où il réside, ou ajouter ce répertoire à « %s » dans la configuration.',
  'You can disable the email preference link in emails if users prefer smaller
emails.' => 'Vous pouvez désactiver le lien des préférences de courriel dans les courriels si les utilisateurs préfèrent des courriels plus petits.',
  'Expected Autoincrement' => 'Incrémentation automatique autorisée',
  'MySQL is configured (on host "%s") to only index words with at least %d characters.' => 'MySQL est configuré (sur l’hôte « %s ») pour n’indexer que les mots avec au moins %d caractères.',
  'Too many arguments: expected only a configuration key when using "--stdin".' => 'Trop d’arguments : seule la clé de configuration est attendue en utilisant « --stdin ».',
  'Global customization of monospaced fonts is no longer supported.' => 'La personnalisation globale des polices à chasse fixe n’est plus prise en charge.',
  'Major Web/Database Clock Skew' => 'Décalage majeur des horloges entre le web et la base de données',
  'No repository cluster services are configured.' => 'Aucun service de grappe de dépôt n’est configuré.',
  'Syntax Highlighting' => 'Mise en évidence de la syntaxe',
  'This schema is not expected to exist.' => 'Ce schéma n’est pas censé exister.',
  'View status information for databases, caches, repositories, and other services.' => 'Consulter les informations d’état pour les bases de données, les caches, les dépôts et d’autres services.',
  'This configuration value is defined in these %d configuration source(s): %s.' => 'Cette valeur de configuration est définie dans ces %d source(s) de configuration : %s.',
  'Specify a configuration key to get.' => 'Spécifier une clé de configuration à obtenir.',
  'Can not compare two missing schemata!' => 'Impossible de comparer deux schémas manquants !',
  'Key on Wrong Columns' => 'Clé sur mauvaises colonnes',
  'S3 Partially Configured' => 'S3 partiellement configuré',
  'Migrate file-based configuration to more modern storage.' => 'Migrer la configuration basée sur un fichier vers un stockage plus moderne.',
  'Skipping config of source type %s...' => 'Saut de la configuration du type de source %s…',
  'Reply addresses can either be private (more secure) or public (which works better with mailing lists).' => 'Les adresses de réponse peuvent être soit privées (plus sécurisées) soit publiques (ce qui fonctionne mieux avec les listes de diffusion).',
  'This server received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with this software. You should disable the module.' => 'Ce serveur a reçu un entête HTTP « X-Mod-Pagespeed » ou « X-Page-Speed » pour cette requête, ce qui indique que vous avez activé « mod_pagespeed » sur ce serveur. Ce module n’est pas compatible avec ce logiciel. Vous devriez désactiver le module.',
  'No profiling' => 'Aucun profil',
  'PHID Types' => 'Types de PHID',
  'Wrote configuration key "%s" to database storage.' => 'Clé de configuration « %s » écrite dans le stockage de la base de données.',
  'The environmental variable %s does not contain %s. You have enabled pygments, which requires %s to be available in your %s variable.' => 'La variable d’environnement %s ne contient pas %s. Vous avez activé pygments, qui demande que %s soit disponible dans votre variable %s.',
  'Use Pygments' => 'Utiliser Pygments',
  'Amazon Web Services' => 'Services web Amazon',
  'Customized settings for applications.' => 'Paramètres personnalisés pour les applications.',
  'US Central (CDT)' => 'États-Unis Central (CDT)',
  'Config option "%s" is invalid. The URI must contain a dot ("%s"), like "%s", not just a bare name like "%s". Some web browsers will not set cookies on domains with no TLD.' => 'L’option de configuration « %s » n’est pas valide. L’URI doit contenir un point (« %s ») comme dans « %s », pas simplement un nom comme « %s ». Certains navigateurs Internet n’acceptent pas de témoins (\'\'cookies\'\') pour les domaines sans TLD.',
  '%s Active' => '%s actif',
  'Subschemata Have Warnings' => 'Le sous-schéma a des avertissements',
  'Require Administrators to Approve Accounts' => 'Demander que les administrateurs approuvent les comptes',
  'Set %s in your PHP configuration to at least 32MB to support large file uploads.' => 'Mettre %s dans votre configuration PHP à au moins 32Mo pour supporter les téléversements de gros fichiers.',
  'Configure integration with AWS (EC2, SES, S3, etc.).' => 'Configurer l’intégration avec AWS (EC2, SES, S3, etc.).',
  'The system sudo user.' => 'L’utilisateur sudo du système.',
  'You can disable the "To:" and "Cc:" footers in mail if users prefer smaller
messages.' => 'Vous pouvez désactiver les pieds de page « À: » et « Cc: » des courriels si les utilisateurs préfèrent des messages plus petits.',
  'MySQL %s Mode Not Set' => 'Mode %s de MySQL non activé',
  'If you are using Apache, your server may be configured with "SetInputFilter DEFLATE". This directive destructively mangles requests and emits them with "Content-Length" and "Content-Encoding" headers that no longer match the data in the request body.' => 'Si vous utilisez Apache, il est possible que le serveur soit configuré avec « SetInputFilter DEFLATE ». Cette directive embrouille les requêtes de façon destructive pour les émettre avec des entêtes « Content-Length: » et « Content-Encoding: » qui ne coïncident plus avec les données du corps de la requête.',
  'Options for platform developers, including debugging.' => 'Options pour les développeurs de plate-forme, incluant le déboggage.',
  'A component of the configured PATH can not be used by the webserver: %s' => 'Un composant du PATH configuré ne peut pas être utilisé par le serveur web : %s',
  'Allow a single mailbox to be used for all replies.' => 'Autoriser l\'utilisation d\'une seule boîte aux lettres pour toutes les réponses.',
  'Use specific endpoint' => 'Utiliser le point de terminaison spécifique',
  'Configure Recaptcha captchas.' => 'Configurer les captchas de Recaptcha.',
  'Report this Issue to the Upstream' => 'Signaler ce problème en amont',
  'Disable SSH error log.' => 'Désactiver le journal des erreurs SSH.',
  'Options relating to PHD (daemons).' => 'Options relatives à PHD (services en arrière-plan).',
  'Repos' => 'Dépôts',
  'Database configuration.' => 'Configuration de la base de données.',
  'Option "%s" is of type "%s", but the current value ("%s") is not a known, concrete subclass of base class "%s". Valid selections are: %s.' => 'L’option « %s » est de type « %s », mais la valeur actuelle (« %s ») n’est pas une sous-classe connue et concrète de la classe de base « %s ». Les sélections valides sont : %s.',
  'Databases' => 'Bases de données',
  'Basic Example' => 'Exemple de base',
  '%s In / %s Out' => '%s Entrées / %s Sorties',
  'Adapter class to use to transmit mail to the MTA. The default uses
PHPMailer, which will invoke "mail". This is appropriate if mail actually
works on your host, but if you haven\'t configured mail it may not be so great.
A number of other mailers are available (e.g., SES, SendGrid, SMTP, Sendmail,
custom mailers). This option is deprecated in favor of \'cluster.mailers\'.' => 'Classe d\'adaptateur à utiliser pour transmettre le courrier au MTA. La valeur par défaut utilise PHPMailerLite qui invoquera « sendmail ». Ceci est approprié si sendmail fonctionne réellement sur votre hôte, mais si vous n\'avez pas configuré le courrier, cela peut ne pas être aussi idéal. Un certain nombre d\'autres logiciels de messagerie sont disponibles (par exemple, SES, SendGrid, SMTP ou des messageries personnalisées). Cette option est obsolète, utilisez plutôt « cluster.mailers ».',
  'This option allows you to stop this service from sending data to most external
services: it will disable email, SMS, repository mirroring, remote builds,
Doorkeeper writes, and webhooks.

This option is intended to allow an instance to be exported, copied, imported,
and run in a test environment without impacting users. For example, if you are
migrating to new hardware, you could perform a test migration first with this
flag set, make sure things work, and then do a production cutover later with
higher confidence and less disruption.

Without making use of this flag to silence the temporary test environment,
users would receive duplicate email during the time the test instance and old
production instance were both in operation.' => 'Cette option vous permet d’empêcher ce service d\'envoyer des données à la plupart des services externes : ceci désactivera les courriels, les SMS, la mise en miroir de dépôts, les constructions distantes, les écritures Doorkeeper et les accroches Internet.

Cette option vise à permettre à une instance d’être exportée, copiée, importée ou de s’exécuter dans un environnement de test sans impacter les utilisateurs. Par exemple, si vous faites une migration vers un nouveau matériel, vous pouvez effectuer un test de migration avec d’abord ce drapeau mis, vous assurer que les choses fonctionnent, puis faire plus tard le basculement vers la production avec plus de confiance et moins de perturbation.

Sans l’utilisation de ce drapeau rendant silencieux l’environnement temporaire de test, les utilisateurs recevraient des courriels en doublon pendant la période où les deux instances de test et de production sont conjointement en fonctionnement.',
  'Whitelist Specific Addresses' => 'Adresses spécifiques en liste blanche',
  'Other Version Information' => 'Autres informations de versions',
  'The mapping from VCS users to %s users has changed and must be rebuilt.' => 'Le mappage des utilisateurs VCS vers les utilisateurs %s a changé et doit être reconstruit.',
  'Authentication configuration is currently unlocked. Once you finish configuring authentication, you should lock it.' => 'La configuration d’authentification est actuellement déverrouillée. Une fois que vous avez terminé de configurer l’authentification, vous devriez la verrouiller.',
  'Use `%s` instead of this option.' => 'Utiliser `%s` plutôt que cette option.',
  'You have not configured any authentication providers yet. You should add a provider (like username/password, LDAP, or GitHub OAuth) so users can register and log in. You can add and configure providers using the Auth Application.' => 'Vous n’avez pas encore configuré de fournisseur d’authentification. Vous devez ajouter un fournisseur (comme nom d’utilisateur/mot de passe, LDAP, ou OAuth de GitHub), afin que les utilisateurs puissent s’inscrire et se connecter. Vous pouvez ajouter et configurer des fournisseurs en utilisant l’application Auth.',
  'Run the storage upgrade script to upgrade databases (host "%s" is out of date). Missing patches: %s.' => 'Lancer le script de mise à jour du stockage pour mettre à jour les bases de données (l’hôte « %s » est obsolète). Patchs manquants : %s.',
  'Resource deflation is now managed automatically.' => 'La déflation des ressources est maintenant gérée automatiquement.',
  'MySQL' => 'MySQL',
  'Databases are created in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing extensions and using namespaces to separate multiple sandbox datasets.' => 'Les bases de données sont créées dans un espace de noms qui est par défaut \'phabricator\' — par exemple, la base de données Differential porte le nom par défaut de \'phabricator_differential\'. Vous pouvez modifier cet espace de noms si vous le souhaitez. Normalement, vous ne devriez pas faire cela sauf si vous développez des extensions et utilisez des espaces de nom distincts pour séparer plusieurs jeux de données sandbox.',
  'Serious business' => 'Affaire sérieuse',
  'External loaders have been replaced. Extend `%s` to implement new PHID and handle types.' => 'Les chargeurs externes ont été remplacés. Étendre `%s` pour mettre en œuvre de nouveaux types de PHID et de références.',
  'Authenticating users based on "Reply-To" is no longer supported.' => 'L’identification et authentification des utilisateurs basée sur l’entête « Reply-To: » n’est plus prise en charge.',
  'Option "%s" is of type "%s", but the configured value is not a list.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas une liste.',
  'Cluster instance name, if configured.' => 'Nom de l’instance de la grappe, si elle est configurée.',
  'You likely need to fix your preamble script so REMOTE_ADDR is no longer empty.' => 'Vous devrez sans doute corriger votre script de pré-traitement de sorte que REMOTE_ADDR ne soit plus vide.',
  'Unknown Config' => 'Configuration inconnue',
  'Detected %s serious issue(s) with the schemata.' => '%s problème(s) sérieux détecté(s) avec le schéma.',
  'Daemons Not Running' => 'Services en arrière-plan non lancés',
  'MySQL username to use when connecting to the database.' => 'Nom d’utilisateur MySQL à utiliser pour se connecter à la base de données.',
  'Secret key for Amazon EC2.' => 'Clé secrète pour Amazon EC2.',
  'These %d configuration value(s) are related:' => 'Ces %d valeurs de configuration sont liées :',
  'This software sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.

This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => 'Ce logiciel s’est envoyé à lui-même une requête avec « Accept-Encoding: gzip » mais a reçu une réponse non compressée.

Cela peut indiquer que votre serveur web n’est pas configuré pour compresser les réponses. Si c’est le cas, vous devriez activer la compression. La compression peut améliorer considérablement les performances, surtout pour des clients ayant une faible bande passante.',
  'If you have multiple %s environments (like a development/staging environment and a production environment), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'Si vous avez plusieurs environnements %s (comme un environnement de développement/préparation et un environnement de production), mettez ici l’URI de l’environnement de production afin que les courriels et autres URI durables soient toujours générés avec des liens pointant vers l’environnement de production. Si cette option n\'est pas définie, la valeur par défaut est « %s ». La plupart des installations n’ont pas besoin de définir cette option.',
  'Names must match to compare schemata!' => 'Les noms doivent correspondre à un schéma de comparaison !',
  'Users can make requests to other services from service hosts in some circumstances (for example, by creating a repository with a remote URL).

This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.

This option defines a list of netblocks which requests will never be issued to. Generally, you should list all private IP space here.' => 'Les utilisateurs peuvent effectuer des requêtes vers d’autres services depuis des hôtes de service dans certains cas (par exemple, en créant un dépôt avec une URL distante).

Cela peut représenter une faille de sécurité si les services sur le même sous-réseau acceptent des commandes ou dévoilent des informations privées via un GET HTTP non authentifié, en fonction de l’adresse IP source. En particulier, tous les hôtes sur EC2 ont accès à un tel service.

Cette option définit une liste de blocs réseau auxquels les requêtes ne seront jamais envoyées. Normalement vous devriez lister ici tous les espaces IP privés.',
  'Core Settings' => 'Paramètres centraux',
  'Your MySQL server is configured with the "local_infile" option enabled. This option allows an attacker who finds an SQL injection hole to escalate their attack by copying files from the webserver into the database with "LOAD DATA LOCAL INFILE" queries, then reading the file content with "SELECT" queries.

You should disable this option in your %s file, in the %s section:

%s' => 'Votre serveur MySQL est configuré avec l’option « local_infile » activée. Cette option permet à un attaquant qui trouve une faille d’injection de code SQL d’accroître l’impact de son attaque en copiant des fichiers du serveur web vers la base de données avec des requêtes « LOAD DATA LOCAL INFILE », puis lire le contenu de ces fichiers avec des requêtes « SELECT ».

Vous devriez désactiver cette option dans votre fichier %s, dans la section %s :

%s',
  'Setup Checks' => 'Vérifications d’installation',
  'This system has an unpatched version of Bash with a severe, widely disclosed vulnerability.' => 'Ce système a une version non patchée de Bash avec une vulnérabilité grave largement connue.',
  'Keys' => 'Clés',
  'No Auth Providers' => 'Aucun fournisseur d’authentification',
  'Missing Required Extensions' => 'Extensions obligatoires manquantes',
  'This option has been migrated to the "Auth" application. Your old configuration is still in effect, but now stored in "Auth" instead of configuration. Going forward, you can manage authentication from the web UI.' => 'Cette option a été migrée depuis l’application « Auth ». Votre ancienne configuration est encore active, mais est maintenant stockée dans « Auth » au lieu de la configuration. En allant plus loin, vous pourrez gérer l’authentification depuis l’IHM web.',
  'Provide a list of notification servers to enable real-time notifications.

For help setting up notification servers, see **[[ %s | %s ]]** in the
documentation.' => 'Fournit une liste de serveurs de notification pour activer les notifications en temps réel.

Pour obtenir de l\'aide sur la configuration des serveurs de notification, consultez **[[ %s | %s ]]** dans la documentation.',
  'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.

This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.

Although it is normally difficult for an attacker to convince this software to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.

To disable this option, set: %s' => 'PHP est actuellement configuré pour honorer les requêtes de tout serveur MySQL auquel il se connecte pour les contenus de tout fichier local.

Cette fonctionnalité autorise la prise en charge des requêtes MySQL « LOAD DATA LOCAL INFILE » mais elle permet à un serveur MySQL malveillant d\'accéder en lecture au disque local : le serveur peut demander aux clients d’envoyer le contenu de tout fichier local, et le client s’exécutera.

Bien qu’il soit normalement difficile à un attaquant de convaincre ce logiciel de se connecter à un serveur MySQL malveillant, vous devriez désactiver cette option : cette facilité n’est pas nécessaire et intrinsèquement dangereuse.

Pour désactiver cette options, définissez : %s',
  'Activity "%s" is not currently marked as required, so there is no need to complete it.' => 'L’activité « %s » n’est pas actuellement marquée comme obligatoire, donc il n’est pas nécessaire de la terminer.',
  'To continue, resolve this problem and reload the page.' => 'Pour continuer, résolvez ce problème et rechargez la page.',
  'Wordmark' => 'Marque de mot',
  'WARNING: This is a prototype option and the description below is currently pure fantasy.

Switch the service to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => 'AVERTISSEMENT : ceci est une option prototype et la description ci-dessous relève actuellement de la pure fantaisie.

Bascule le service en mode de lecture seule. Dans ce mode, les utilisateurs ne pourront pas écrire de nouvelles données. Normalement, la grappe passe dans ce mode automatiquement quand elle détecte que le maître de la base de données est inaccessible, mais vous pouvez l’activer manuellement afin d’effectuer de la maintenance ou tester une configuration.',
  'Severe Security Vulnerability: Unpatched Bash' => 'Faille de sécurité grave : Bash non patché',
  'Force HTTPS' => 'Forcer HTTPS',
  'This key is not expected to exist.' => 'Cette clé n’est pas censé exister.',
  '%s.%s' => '%s.%s',
  '%s.%s.%s' => '%s.%s.%s',
  '%d related link(s):' => '%d lien(s) associé(s):',
  'To rebuild identities, run this command:' => 'Pour reconstruire les identités, exécutez cette commande :',
  'Missing Repository Local Path' => 'Manque chemin local du dépôt',
  'An alternate resource map is no longer supported. Instead, use multiple maps. See T4222.' => 'Une correspondance de ressource alternative n’est plus prise en charge. À la place, utilisez plusieurs cartes. Voir T4222.',
  'Repository Services' => 'Services de dépôt.',
  'Inline comments are now always rendered with a limited amount of context.' => 'Les commentaires dans le code sont maintenant toujours rendus avec une partie limitée du contexte.',
  'Locked Configuration Option "%s" Has Database Value' => 'L’option de configuration verrouillée « %s » a la valeur base de données.',
  'Separate values with newlines or commas.' => 'Séparer les valeurs avec de nouvelles lignes ou des virgules.',
  'Don\'t require email verification' => 'Ne nécessite pas de vérification du courriel',
  'Configuration key "%s" is unknown. Use "bin/config list" to list all known keys.' => 'La clé de configuration « %s » est inconnue. Utilisez « bin/config list » pour lister toutes les clés connues.',
  'Alternate File Domain Not Configured' => 'Domaine de fichier alternatif non configuré',
  'Unknown schema issue "%s"!' => 'Problème inconnu  de schéma « %s » !',
  'Embed Commons videos' => 'Inclure les vidéos de Commons',
  'Your server is configured with \'%s\', which prevents this software from opening files it requires access to.

Disable this setting to continue.' => 'Votre serveur est configuré avec \'%s\', ce qui empêche ce logiciel d’ouvrir les fichiers auxquels il a besoin d’accéder.

Désactiver ce paramètre pour continuer.',
  'Limit page execution time to debug hangs.' => 'Limiter le temps d’exécution de la page pour déboguer les attentes.',
  'Base URI Not Configured' => 'URI de base non configurée',
  'Cannot identify the version of the %s repository because the webserver does not trust it (more info on Task %s).
Try this system resolution:
sudo git config --system --add safe.directory %s' => 'Impossible d\'identifier la version du dépôt %s car le serveur web ne lui fait pas confiance (plus d\'informations avec la tâche %s).
Essayez cette résolution système :
sudo git config --system --add safe.directory %s',
  'Always Activate DarkConsole' => 'Toujours activer DarkConsole',
  'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.

This may mean the base URI is configured incorrectly. You must serve this software from a base URI with a dot (like "https://devtools.example.com"), not a bare domain (like "https://devtools/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.

This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.

Requests must include a valid "Host" header.' => 'Cette requête incluait un entête « Host » avec la valeur « %s » invalide. Les entêtes d’hôte doivent contenir un point (".") comme dans « example.com ». Cela est nécessaire pour que certains navigateurs puissent définir des témoins (\'\'cookies\'\').

Cela peut signifier que l\'URI de base est configuré de manière incorrecte. Vous devez servir ce logiciel à partir d\'un URI de base ayant un point (comme dans « https://devtools.example.com »), et non d\'un domaine nu (comme dans « https://devtools/ »). Si vous essayez d\'utiliser un domaine nu, modifiez votre configuration pour utiliser à la place un domaine complet avec un point dedans.

Cela peut également signifier que votre serveur web (ou un autre périphérique réseau comme un répartiteur de charge) déforme l\'entête « Host », ou que vous utilisez un outil ou une bibliothèque pour émettre une requête manuellement définissant un mauvais entête « Host ».

Les requêtes doivent inclure un entête « Host » valide.',
  'User Interface' => 'Interface utilisateur',
  'No Schema Issues' => 'Aucun problème de schéma',
  'MySQL database hostname.' => 'Nom d’hôte de la base de données MySQL.',
  'Obsolete Config' => 'Configuration obsolète',
  'Sets the default color scheme.' => 'Définit le schéma de couleurs par défaut.',
  'Clustering Introduction' => 'Introduction de la mise en grappe',
  'By default, this software includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => 'Par défaut, ce logiciel inclut certaines variantes de texte dans l\'interface utilisateur (IU), comme une invite à « Intervenir » plutôt que d\'« Ajouter un commentaire » dans Maniphest. Si vous préférez des chaînes d’IU plus traditionnelles comme « Ajouter un commentaire », vous pouvez définir cet indicateur pour désactiver la plupart de ces variantes.',
  'This software sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.

This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'Ce logiciel s’est envoyé à lui-même une requête de test et s’attendait à obtenir une réponse JSON simple en retour, mais la réponse avait des espaces en trop au début ou à la fin.

Cela signifie en général que vous avez modifié un fichier et laissé des caractères d\'espace avant la balise d’ouverture %s ou après la balise de fermeture %s. Retirez tout espacement en excès au début et omettez de préférence les balises de fermeture.',
  'MySQL on this machine' => 'MySQL sur cette machine',
  'No such configuration key \'%s\'! Use `%s` to list all keys.' => 'Pas de clé de configuration \'%s\' ! Utiliser `%s` pour lister toutes les clés.',
  'You can respond to various application events by installing listeners, which will receive callbacks when interesting things occur. Specify a list of classes which extend PhabricatorEventListener here.' => 'Vous pouvez répondre à différents événements de l’application en installant des observateurs, qui seront appelés si des choses intéressantes se produisent. Spécifier ici une liste de classes qui étendent PhabricatorEventListener.',
  'This install has a fatal setup error, access the web interface to view details and resolve it.' => 'Cette installation a une erreur de configuration fatale, accédez à l’interface web pour afficher les détails et la résoudre.',
  'Alternate domain to serve files from.' => 'Domaine alternatif depuis lequel livrer les fichiers.',
  'Your webserver is not forwarding credentials.' => 'Votre serveur web ne fait pas suivre les certificats.',
  'Default non-pygments syntax highlighter engine.' => 'Moteur de mise en évidence syntaxique non pygments par défaut.',
  'HTTP Parameter Types' => 'Types de paramètre HTTP',
  'Mangled Webserver Response' => 'Réponse du serveur web perturbée',
  'Setup issues to ignore.' => 'Problèmes d’installation à ignorer.',
  'Directory that the daemons should use to store log files.' => 'Répertoire que les services en arrière-plan doivent utiliser pour stocker les fichiers de trace.',
  'Only allow registration from particular domains.' => 'Autoriser seulement l’inscription à partir de domaines particuliers.',
  'Subschemata have setup failures.' => 'Le sous-schéma a des erreurs d’installation.',
  'No performance sampling.' => 'Aucun échantillon de performance.',
  'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.

For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.

You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.

To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:

%s
' => 'L’hôte de base de données « %s » est configuré pour utiliser la longueur de mot minimale par défaut en construisant les index de recherche, qui est 4. Cela veut dire que les mots qui ne font que 3 caractères ne seront pas indexés et ne pourront pas être recherchés.

Par exemple, vous ne pourrez pas trouver de résultats de recherche pour des mots comme « SMS », « web », ou « DOS ».

Vous pouvez modifier ce paramètre à 3 pour permettre d’indexer ces mots. Sinon, vous pouvez ignorer cet avertissement si rechercher des mots de trois lettres ne vous concerne pas. Si vous prévoyez de configurer ultérieurement Elasticsearch, vous pouvez aussi ignorer cet avertissement : seule la recherche en texte intégral de MySQL est affectée.

Pour réduire la longueur minimale de mot à 3, ajoutez ce qui suit à votre fichier %s (dans la section %s) puis redémarrez %s :

%s
Enfin, exécutez la commande suivante pour reconstruire les index en utilisant les nouvelles règles :

%s',
  '%s\'s home page' => 'Page d\'accueil de %s',
  'Show installed extensions and modules.' => 'Afficher les extensions et modules installés.',
  'Opcode Cache' => 'Cache de Opcode',
  'Specify a value to set the configuration key "%s" to, or use "--stdin" to read a value from stdin.' => 'Spécifiez une valeur pour définir la clé de configuration « %s », ou bien utilisez « --stdin » pour lire en valeur depuis le flux d’entrée standard.',
  'ID of the SSH key used to authenticate the request.' => 'Identifiant de la clé SSH utilisée pour authentifier la requête.',
  'You can usually install a PHP extension using %s, %s, or %s. A common package name is %s. Try commands like these:' => 'Vous pouvez en général installer une extension PHP en utilisant %s, %s ou %s. Un nom de paquet courant est %s. Essayez des commandes comme :',
  'US East (EDT)' => 'États-Unis Est (EDT)',
  'The HTTP referrer.' => 'Le référent HTTP.',
  'HTTP Parameters Not Transmitting' => 'Paramètres HTTP non transmis',
  'Determines whether Wikimedia Commons videos get embedded.' => 'Détermine si les vidéos de Wikimédia Commons sont incluses.',
  'Better Collation Available' => 'Meilleure collation disponible',
  'View "%s"' => 'Afficher « %s »',
  'This setup issue has been resolved. ' => 'Ce problème d’installation a été résolu.',
  'Additional configuration options to hide.' => 'Options de configuration supplémentaires à masquer.',
  'The logged-in username, if one is logged in.' => 'Le PHID de l’utilisateur s\'il est connecté.',
  'Deprecated Code' => 'Code obsolète',
  'PHP date functions will emit a warning if they are called when no default
server timezone is configured.

Usually, you configure a default timezone in `php.ini` by setting the
configuration value `date.timezone`.

If you prefer, you can configure a default timezone here instead. To configure
a default timezone, select a timezone from the
[[ %s | PHP List of Supported Timezones ]].' => 'Les fonctions de date de PHP émettront un avertissement si elles sont appelées quand aucun fuseau horaire de serveur par défaut n’est configuré.

Habituellement, vous configurez un fuseau horaire par défaut dans `php.ini` en définissant la valeur de configuration `date.timezone`.

Si vous préférez, vous pouvez configurer un fuseau horaire par défaut ici. Pour cela, sélectionnez-en un dans la [[ %s | liste des fuseaux horaires pris en charge par PHP ]].',
  'No REMOTE_ADDR available' => 'Aucun REMOTE_ADDR disponible',
  'File storage in Amazon S3 has been partially configured, but you are missing some required settings. S3 will not be available to store files until you complete the configuration. Either configure S3 fully or remove the partial configuration.' => 'Le stockage de fichiers dans Amazon S3 a été partiellement configuré, mais il vous manque quelques paramètres obligatoires. S3 ne sera pas disponible pour stocker les fichiers tant que vous n’aurez pas terminé la configuration. Configurez S3 complètement, ou bien annulez la configuration partielle.',
  'The logged-in user PHID, if one is logged in.' => 'Le PHID de l’utilisateur s\'il est connecté.',
  'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.

If you provide an instance identifier here (normally by injecting it with a `%s`), the server will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'AVERTISSEMENT : ceci est une option très avancée, utile seulement aux fournisseurs d’hébergement exécutant des grappes multi-locataires.

Si vous fournissez un identifiant d’instance ici (normalement en l’injectant avec « %s »), le serveur le passera aux sous-processus et validera les accroches dans la variable d’environnement « %s ».',
  'Version Information' => 'Information sur la version',
  'The base URI for this install is not configured, and major features will not work properly until you configure it.

You should set the base URI to the URI you will use to access this server, like "https://devtools.example.com/".

Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).

Based on this request, it appears that the correct setting is:

%s

To configure the base URI, run the command shown below.' => 'L’URI de base pour cette installation n’est pas configuré et des fonctionnalités majeures ne fonctionneront pas correctement tant que vous ne l\'aurez pas fait.

Vous devez le mettre à l’URI que vous utiliserez pour accéder à ce serveur, comme « http://devtools.example.com/ ».

Incluez le protocole (http ou https), le nom de domaine et le numéro de port si vous utilisez un port autre que 80 (http) ou 443 (https).

D’après cette requête, il semble que le bon paramétrage soit :

%s

Pour configurer l’URI de base, lancez la commande affichée ci-dessous.',
  'HTTP Path Rewriting Incorrect' => 'Réécriture du chemin HTTP incorrecte',
  'Surplus' => 'Surplus',
  'Instance identifier for multi-tenant clusters.' => 'Identifiant de l’instance pour les grappes à plusieurs titulaires.',
  'Upgrade MySQL Schema' => 'Mettre à jour le schéma MySQL',
  'Unignore Setup Issue' => 'Ne plus ignorer le problème d’installation',
  'Automatically sample some fraction of requests.' => 'Échantillonner automatiquement une fraction des requêtes.',
  'SSH log location.' => 'Emplacement du journal SSH.',
  'Arbitrarily large files are now supported. Consult the documentation for configuration details.' => 'Les fichiers de taille arbitraire sont désormais pris en charge. Consultez la documentation pour plus de détails sur la configuration.',
  'Delete a local configuration value.' => 'Supprimer une valeur de configuration locale.',
  'These paths get appended to your %s environment variable.' => 'Ces chemins seront ajoutés à votre variable d’environnement %s.',
  'Epoch timestamp.' => 'Horodatage Epoch.',
  'Blindigo' => 'Blindigo',
  'Expected Column Type' => 'Type de colonne attendu',
  'Enable developer mode' => 'Activer le mode développeur',
  '%s, occurrences: %s' => '%s, occurrences: %s',
  'Woe! This request had its journey cut short by unexpected circumstances (%s).' => 'Malheur ! Cette requête a eu son cheminement interrompu par des circonstances inattendues (%s).',
  'Customizes retention policies for garbage collectors.' => 'Personnalise la politique de rétention pour les ramasse-miettes.',
  'This schema can use a better column type.' => 'Ce schéma peut utiliser un meilleur type pour les colonnes.',
  'Without \'%s\', this software will not be able to generate or render diffs in multiple applications.' => 'Sans « %s », ce logiciel ne pourra pas générer ou rendre les diffs dans plusieurs applications.',
  'The request date.' => 'La date de la requête.',
  'Reply handlers can no longer be overridden with configuration.' => 'Les gestionnaires de réponse ne peuvent plus être redéfinis par la configuration.',
  'There is some deprecated code found in the %s code-base.

This isn\'t a problem yet, but it means that %s might stop working if you upgrade PHP version.

This page records a sample of the cases since last server restart. 

To solve this issue, either:

- Visit %s, file bug report with the information below, or
- Ignore this issue using the `Ignore` button below.

' => 'Il y a du code obsolète trouvé dans la base de code %s.

Ce n\'est pas encore un problème, mais cela signifie que %s pourrait cesser de fonctionner si vous mettez à niveau la version PHP.

Cette page enregistre un échantillon des cas depuis le dernier redémarrage du serveur.

Pour résoudre ce problème, soit :

- visitez %s et remplissez un rapport de bogue avec les informations ci-dessous, soit
- ignorez ce problème en utilisant le bouton « Ignorer » ci-dessous.',
  'Note that the default format is subject to change in the future, so if you rely on the log\'s format, specify it explicitly.' => 'Noter que le format par défaut est susceptible de changer à l’avenir, donc si vous vous fiez à un format spécifique du journal, spécifiez-le explicitement.',
  'Send as %s' => 'Envoyer comme %s',
  'Setup Error' => 'Erreur d’installation',
  'Installed on Burstable CPU Instance' => 'Installé sur une instance de CPU surchargeable',
  'MySQL is Using Default Minimum Word Length' => 'MySQL utilise la longueur de mot minimale par défaut.',
  'Extensions/Modules' => 'Extensions / modules',
  'The directory for local repositories (%s) does not exist, or is not readable by the webserver. This software uses this directory to store information about repositories. If this directory does not exist, create it:

%s
If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => 'Le répertoire pour les dépôts locaux (%s) n’existent pas ou n’est pas lisible par le serveur web. Ce logiciel utilise ce répertoire pour stocker des informations sur les dépôts. Si ce répertoire n’existe pas, créez-le :

%s

Si ce répertoire existe, le rendre lisible par le serveur web. Vous pouvez aussi modifier la configuration ci-dessous pour utiliser un autre répertoire.',
  'In places that we display a dropdown to syntax-highlight code, this is where that list is defined.' => 'Dans les endroits où nous affichons une liste déroulante pour mettre en évidence la syntaxe du code, c’est ici que cette liste est définie.',
  'This change supports situations where users are incorrectly associated with commits because the software makes a bad guess about how the VCS string maps to a user account. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with features which rely on the existence of these identities.' => 'Cette modification prend en charge les situations dans lesquelles les utilisateurs sont associés de manière incorrecte à des validations car le logiciel fait une mauvaise estimation de la manière dont la chaîne VCS est mise en correspondance avec un compte utilisateur. Cela aide également dans les situations où des dépôts existants sont importés sans avoir créé de comptes pour tous les validateurs de ce dépôt. Tant que vous n\'aurez pas reconstruit ces identités de dépôt, vous risquez de rencontrer des problèmes avec les fonctionnalités qui dépendent de l\'existence de ces identités.',
  'Unignore' => 'Ne plus ignorer',
  'Text values that match this regex and are also object names will not be linked.' => 'Les valeurs textuelles qui correspondent à cette expression rationnelle et qui sont également des noms d’objets ne seront pas liées.',
  '%s Held / %sms' => '%s tenus / %sms',
);
  }

}
