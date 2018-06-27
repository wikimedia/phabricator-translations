<?php

final class PhabricatorConfigFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Array containing list of uninstalled applications.' => 'Tableau contenant la liste des applications non installées.',
      'Client Server' => 'Client serveur',
      'Listeners receive callbacks when interesting things occur.' => 'Les écouteurs sont réactivés (callback) quand des événements intéressants apparaissent.',
      'Update configuration in the database instead of in local configuration.' => 'Mettre à jour la configuration dans la base de données plutôt que dans la configuration locale.',
      'Column/Key' => 'Colonne/Clé',
      'Customize the logo and wordmark text in the header.' => 'Personnaliser le logo et le texte du sigle dans l’entête.',
      'Configuring File Storage' => 'Configuration de l\'archivage en fichiers',
      '%s / %s' => '%s / %s',
      'Address ranges of cluster hosts.' => 'Intervalles d\'adresses des groupes d\'hôtes.',
      'Suppress mail from maintenance users.' => 'Supprimer les courriels des utilisateurs de maintenance.',
      'Memory Usage' => 'Utilisation de la mémoire',
      'Impersonating users over the API is no longer supported.' => 'Utiliser l\'API en se faisant passer pour un utilisateur, n’est plus supporté.',
      'Table' => 'Tableau',
      'Ignore Setup Issue' => 'Ignorer le problème d’installation',
      'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.
    You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => 'Cette option vous permet d’activer DarkConsole sur chaque page, même pour les utilisateurs non connectés. Ce n’est vraiment utile que si vous devez déboguer quelque chose sur une page hors connexion. Vous ne devriez pas activer cette option en production.
    Vous devez activer DarkConsole en positionnant \'%s\' avant que cette option ait un effet quelconque.',
      'Modules' => 'Modules',
      'Repository %s has unreplicated changes (for %s).' => 'Le dépôt %s a des modifications non répliquées (pour %s).',
      'Phabricator now automatically discovers available storage engines at runtime.' => 'Phabricator découvre maintenant de façon automatique les moteurs de stockage disponibles à l’exécution.',
      'The controller or workflow which handled the request.' => 'Le contrôleur ou le processus de travail qui a géré la requête.',
      'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".' => 'L’option « %s » est de type « %s », mais la valeur à l’index « %s » de la liste n’est pas « true ».',
      'Applications application' => 'Application des applications',
      'The namespace that Phabricator databases should use.' => 'L’espace de noms que les bases de données de Phabricator doivent utiliser.',
      '%s created this configuration entry.' => '%s a créé cette entrée de configuration.',
      'You have enabled pygments and the %s script is available, but does not seem to work.' => 'Vous avez activé pygments et le script %s est disponible, mais cela ne semble pas fonctionner.',
      'This column is missing a type specification.' => 'Cette colonne n’a pas de spécification de type.',
      'Configure the Phabricator UI, including colors.' => 'Configurer l’IHM de Phabricator, y compris les couleurs.',
      'Adapter class to use to transmit SMS to an external provider. A given external provider will most likely need more configuration which will most likely require registration and payment for the service.' => 'Classe d’adapteur à utiliser pour transmettre des SMS à un fournisseur externe. Un fournisseur externe donné aura très vraisemblablement besoin d\'une plus grande configuration, ce qui nécessitera sans doute une inscription et un paiement pour le service.',
      'Column Has No Specification' => 'La colonne n’a pas de spécification',
      'Delete configuration in the database instead of in local configuration.' => 'Supprimer la configuration en base de données plutôt que dans la configuration locale.',
      'No Email Preferences Link' => 'Pas de lien de préférence de courriel',
      'Marked activity "%s" as completed.' => 'Activité « %s » marquée comme terminée.',
      'Default "from" number.' => 'Nombre « depuis » par défaut.',
      'Configure Phabricator to run on a cluster of hosts.' => 'Configurer Phabricator pour exécuter une grappe d’hôtes.',
      'Configure mailer used by PHPMailer.' => 'Configurer le gestionnaire de courrier utilisé par PHPMailer.',
      'Repository %s has unreplicated changes.' => 'Le dépôt %s a des modifications non répliquées.',
      'MySQL %s Mode Set' => 'Mode MySQL %s configuré',
      'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make Phabricator redirect HTTP requests to HTTPS.
    Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.
    IMPORTANT: Phabricator determines if a request is HTTPS or not by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run Phabricator as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.
    If you configure Phabricator in cluster mode, note that this setting is ignored by intracluster requests.' => 'Si le serveur web répond à la fois aux requêtes HTTP et HTTPS mais que vous voulez que les utilisateurs ne se connectent qu’avec HTTPS, vous pouvez mettre cela à  `true` pour que Phabricator redirige les requêtes HTTP vers HTTPS.
    Normalement, vous devriez juste configurer votre serveur pour ne pas accepter de trafic HTTP, mais ce paramètre peut être utile si vous utilisiez HTTP à l’origine et avez maintenant basculé sur HTTPS mais ne voulez pas casser les anciens liens, ou si votre serveur web est derrière un répartiteur de charge qui termine les connexions HTTP, et que vous ne pouvez pas raisonnablement configurer un comportement plus détaillé ici.
    IMPORTANT : Phabricator détermine si une requête est HTTPS ou non en examinant la variable PHP `%s`. Si vous exécutez Apache/mod_php, cela sera sans doute positionné correctement de façon automatique, mais si vous exécutez Phabricator comme CGI/FCGI (par ex., via nginx ou lighttpd), vous devez configurer votre serveur web afin qu’il passe la valeur correctement selon le type de connexion.
    Si vous configurez Phabricator en mode grappe, notez que ce paramètre est ignoré par les requêtes intra-grappe.',
      'This version of Mercurial returns a bad exit code after a successful pull.' => 'Cette version de Mercurial renvoie un mauvais code de sortie après une sortie réussie.',
      'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %d.' => 'Le binaire \'%s\' sur ce système a un comportement inattendu : il devait sortir sans code d\'erreur quand on lui passait des fichiers identiques, mais il est sorti avec un code %s.',
      'No active repositories have outstanding errors.' => 'Aucun dépôt actif n’a d’erreur marquante.',
      'Usage' => 'Utilisation',
      'Move port information from `%s` to `%s` in your config.' => 'Copiez les informations de port de `%s` à `%s` dans votre config.',
      'Deprecated Maniphest Field Policies' => 'Manifeste des politiques de champ obsolète',
      'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.' => 'Cette option ne peut pas être modifiée depuis l’IHM web. Utiliser %s pour ajuster la politique du ramasse-miettes.',
      'Better Table Engine Available' => 'Meilleur moteur de tableau disponible',
      'Set a local configuration value.' => 'Fixer une valeur de configuration locale.',
      'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.' => 'Le stockage de gros fichiers n’a pas été configuré, ce qui limitera la taille maximale des fichiers téléchargés. Voir %s pour les instructions sur la configuration des téléchargements et du stockage.',
      '%s deleted %s (again?).' => '%s a supprimé %s (de nouveau ?).',
      'Access log format.' => 'Format du journal d’accès.',
      'Phabricator sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.
    Phabricator sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.
    Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.
    (This problem can be caused by a missing "B" in your RewriteRule.)' => 'Phabricator s’est envoyé une requête de test avec un chemin inhabituel, pour tester si votre werveur web réécrit bien les chemins. Le chemin n’a pas été bien transmis.
    Phabricator a envoyé une requête au chemin « %s », et s’attendait à ce que le serveur web le décode et réécrive ce chemin pour qu’il reçoive une requête pour « %s ». Toutefois, il a reçu à la place une requête pour « %s ».
    Vérifiez que vos règles de réécriture sont bien configurées, en suivant les instructions de la documentation. Si l’encodage de chemin ne fonctionne pas correctement, vous ne pourrez pas accéder aux fichiers avec des noms inhabituels dans les répertoires, entre autres problèmes.
    (Ce problème peut provenir d’un « B » manquant dans votre RewriteRule.)',
      'Specify a value to set the key \'%s\' to.' => 'Spécifier une valeur à laquelle positionner la clé \'%s\'.',
      'Access log location.' => 'Emplacement du fichier d’accès.',
      'Phabricator occasionally shells out to other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running Phabricator (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.
    Note that you can also put binaries in `%s` (for example, by symlinking them).
    The current value of PATH after configuration is applied is:
      lang=text
      %s' => 'Phabricator lance occasionellement d’autres binaires sur le serveur. Un exemple de cela est la commande `%s`, utilisée pour mettre en évidence le code écrit dans d’autres langages que PHP. Par défaut, il est supposé que ces binaires sont dans le %s de l’utilisateur exécutant Phabricator (normalement \'apache\', \'httpd\', ou \'nobody\'). Vous pouvez ajouter ici des répertoires supplémentaires à la variable d’environnement %s, pour le cas où ces binaires sont dans des emplacements non standards.
    Notez que vous pouvez aussi mettre des binaires dans `%s` (par exemple, en faisant un lien symbolique vers eux).
    La valeur actuelle de PATH après application de la configuration est :
      lang=text
      %s',
      'Your webserver is not handling GET parameters properly.' => 'Votre serveur web ne gère pas bien les paramètres GET.',
      'Repository Errors' => 'Erreurs du dépôt',
      'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas le nom d’une classe connue. Les sélections valides sont : %s.',
      'Phabricator no longer shows reply hints in mail.' => 'Phabricator ne montre plus les conseils de réponse dans le courriel.',
      'Short' => 'Court',
      'Phabricator is not configured in cluster mode.' => 'Phabricator n’est pas configuré en mode grappe.',
      'Large File Storage Not Configured' => 'Le stockage de gros fichiers n’est pas configuré',
      'Migrating file-based config to more modern config...' => 'Migration de la configuration basée sur fichier vers une configuration plus moderne…',
      'Full' => 'Plein',
      'SendGrid API username.' => 'Nom d’utilisateur de l’API SendGrip.',
      'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => 'Lancer le script de mise à jour du stockage pour mettre à jour les bases de données (l’hôte « %s » n’a pas été initialisé).',
      'Unrecognized verb: %s' => 'Verbe non reconnu : %s',
      'No REMOTE_ADDR is available, so Phabricator cannot determine the origin address for requests. This will prevent Phabricator from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'Aucun REMOTE_ADDR n’est disponible, donc Phabricator ne peut pas déterminer l’adresse d’origine pour les requêtes. Cela empêchera Phabricator d’effectuer des vérifications de sécurité importantes. Cela veut dire, le plus souvent, que vous avez une erreur dans votre script de préambule. Consultez la documentation (%s) et revérifiez que le script est bien écrit.',
      'Expected Collation' => 'Collation attendue',
      'Controls whether Phabricator sends one email with multiple recipients in the "To:" line, or multiple emails, each with a single recipient in the "To:" line.' => 'Contrôle si Phabricator envoie un courriel avec plusieurs destinataires dans la ligne « À », ou plusieurs courriels avec chacun un unique destinataire sur la ligne « À ».',
      'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.' => 'L’option « %s » est de type « %s », mais la valeur n’est pas une liste : c’est une correspondance avec des clés non naturelles ou clairsemées.',
      'Use Normal HTTP Redirects' => 'Utiliser les redirections HTTP normales',
      'Show Herald Hints' => 'Afficher les conseils annonciateurs',
      'Configuration key \'%s\' is not set in %s configuration!' => 'La clé de configuration \'%s\' n’est pas définie dans la configuration %s !',
      'Multi-Factor Optional' => 'Plusieurs facteurs facultatif',
      'Mail is configured to send via sendmail, but this system has no sendmail binary. Install sendmail or choose a different mail adapter.' => 'Le courriel est configuré pour être envoyé par sendmail, mais ce système n’a pas de binaire sendmail. Installer sendmail ou choisir un adapteur de courriel différent.',
      'Access Denied' => 'Accès refusé',
      'The configuration option \'%s\' has been removed. You may delete it at your convenience.
    %s' => 'L’option de configuration \'%s\' a été supprimée. Vous pouvez la supprimer à votre guise.
    %s',
      'Disable Pagespeed' => 'Vitesse de page désactivée',
      'Elasticsearch index exists but needs correction.' => 'Une index Elasticsearch existe bien mais doit être corrigé.',
      'Nullable' => 'Null autorisé',
      'The "%s" key is set to some value other than "-1" in your PHP configuration. This can cause PHP to raise deprecation warnings during process startup. Set this option to "-1" to prevent these warnings from appearing.' => 'La clé « %s » est fixée à une valeur autre que « -1 » dans votre configuration PHP. Cela peut faire que PHP génère des avertissements d’obsolescence lors du démarrage du processus. Mettre cette option à « -1 » pour éviter que ces avertissements n’apparaissent.',
      'No "Host" Header' => 'Pas d\'entête « hôte »',
      'Do not install Phabricator on an instance class with burstable CPU.' => 'Ne pas installer Phabricator sur une classe d\'instance avec une CPU extensible.',
      'Activity "%s" did not need to be marked as complete.' => 'L’activité « %s » ne nécessite pas d’être marquée comme terminée.',
      'Configure Mailgun integration.' => 'Configurer l\'intégration de Mailgun.',
      'The translation implementation has changed and providers are no longer used or supported.' => 'L’implémentation de la traduction a été modifiée, et les fournisseurs ne sont plus utilisés ni supportés.',
      'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L’option « %s » est de type « %s », mais la valeur que vous avez fournie n’est pas une liste JSON valide. En définissant une option de liste depuis la liste de commande, spécifier la valeur en JSON. Vous devrez mettre votre valeur entre guillemets pour votre shell (par exemple : \'["a", "b", ...]\').',
      'No SES From Address Configured' => 'Aucun SES pour l’adresse n’est configuré',
      'The minimum supported version of Mercurial is 1.9, which was released in 2011.' => 'La version minimale supportée de Mercurial est 1.9, qui a été livrée en 2011.',
      'Format for the SSH access log. Use %s to set the path. Available variables are:' => 'Format pour le journal d’accès SSH. Utiliser %s pour définir le chemin. Les variables disponibles sont :',
      'This table can use a better table engine.' => 'Ce tableau peut utiliser un moteur de tableau plus performant.',
      'PHP post_max_size Not Configured' => 'post_max_size de PHP n’est pas configuré',
      'Can Not Connect to MySQL' => 'Connexion impossible à MySQL',
      'Option "%s" is of type "%s", but the configured value is not a boolean.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas un booléen.',
      'Disable developer mode' => 'Désactiver le mode développeur',
      'Profile 0.1%% of all requests' => 'Décrire 0,1%% de toutes les requêtes',
      'This option has been replaced with the more granular option `%s`.' => 'Cette option a été remplacée par une option `%s` plus fine.',
      'Require all users to configure multi-factor authentication.' => 'Nécessiter que tous les utilisateurs configurent l’authentification à plusieurs facteurs.',
      'Configuration Guide: Locked and Hidden Configuration' => 'Guide de configuration : Configuration verrouillée et masquée',
      'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.' => 'Cette action permet un rapport verbeux des erreurs (piles d’erreur, rappels d’erreur) et force les lectures sur disque des ressources statiques à chaque rechargement.',
      '(%s%s) %s' => '(%s%s) %s',
      'Nonreplicating Replica' => 'Copie sans réplication',
      'Run these %d command(s):' => 'Exécuter ces %s commande(s) :',
      'Pattern' => 'Modèle',
      'Host for SMTP.' => 'Hôte pour SMTP.',
      'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the Phabricator configuration value \'%s\' to specify one.' => 'Votre configuration échoue à spécifier un fuseau horaire de serveur. Vous pouvez soit définir la valeur de configuration PHP \'%s\' ou la valeur de configuration \'%s\' de Phabricator pour en spécifier une.',
      'Unknown \'%s\' Version' => 'Version \'%s\' inconnue',
      'SES endpoint domain name. You can find a list of available regions and endpoints in the AWS documentation.' => 'Nom de domaine du point de terminaison SES. Vous pouvez trouver une liste des régions disponibles et des points de terminaison dans la documentation de AWS.',
      'You are using an old version of MySQL (on host "%s"), and should upgrade.' => 'Vous utilisez une ancienne version de MySQL (sur l’hôte « %s »), et vous devriez la mettre à jour.',
      'Purge Caches' => 'Vider les caches',
      'WARNING: This is a prototype option and the description below is currently pure fantasy.
    Switch Phabricator to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => 'AVERTISSEMENT : Ceci est une option de prototype et la description ci-dessous est actuellement une pure fantaisie.
    Basculer Phabricator en mode lecture seule. Dans ce mode, les utilisateurs ne pourront pas écrire de nouvelle donnée. Normalement, la grappe passe dans ce mode automatiquement quand il détecte que le maître de la base de données est inatteignable, mais vous pouvez l’activer manuellement afin de faire une configuration de maintenance ou de test.',
      'Adjust %s in your PHP configuration to at least 32MB. When set to smaller value, large file uploads may not work properly.' => 'Régler %s dans votre configuration PHP à au moins 32Mo. S’il est mis à une valeur plus petite, les téléchargements de gros fichiers pourraient ne pas bien fonctionner.',
      'Show Recipient Hints' => 'Afficher les conseils de destinataire',
      'Enable deflate compression' => 'Activer la décompression',
      'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.
    Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies {{auth.require-email-verification}}.
    You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.' => 'Vous pouvez restreindre les adresses de messagerie autorisées à certains domaines (comme `votresociete.com`) en définissant une liste de domaines autorisés ici.
    Les utilisateurs ne seront autorisés à s’inscrire qu’en utilisant des adresses de messagerie d’un de ces domaines, et ne pourront ajouter de nouvelles adresses de messagerie que pour ces domaines. Si vous le configurez, cela implique {{auth.require-email-verification}}.
    Vous devez omettre le `@` des domaines. Notez que le domaine doit correspondre exactement. Si vous autorisez `votresociete.com`, cela autorise `joe@votresociete.com` mais rejette `joe@mail.votresociete.com`.',
      'Recaptcha private key, obtained by signing up for Recaptcha.' => 'Recaptcha de la clé privée, obtenue en s’inscrivant à Recaptcha.',
      'MySQL InnoDB Engine Not Available' => 'Moteur InnoDB de MySQL non disponible',
      'Database host "%s" does not support the %s option. You will not be able to find search results for common words. You can gain access to this option by upgrading MySQL to a more recent version.
    You can ignore this warning if you plan to configure Elasticsearch later, or aren\'t concerned about searching for common words.' => 'L’hôte de base de données « %s » ne supporte pas l’option %s. Vous ne pourrez pas trouver de résultats de recherche pour les mots communs. Vous pouvez obtenir l’accès à cette option en mettant à jour MySQL vers une version plus récente.
    Vous pouvez ignorer cet avertissement si vous prévoyez de configurer Elasticsearch ultérieurement, ou que vous n’êtes pas concerné par la recherche de mots communs.',
      'Proto' => 'Proto',
      'HTTP Strict Transport Security (HSTS) sends a header which instructs browsers that the site should only be accessed over HTTPS, never HTTP. This defuses an attack where an adversary gains access to your network, then proxies requests through an unsecured link.
    Do not enable this option if you serve (or plan to ever serve) unsecured content over plain HTTP. It is very difficult to undo this change once users\' browsers have accepted the setting.' => 'Sécurité de Transport Stricte de HTTP (HSTS) envoie un entête qui indique aux navigateurs que le site ne doit être accédé que via HTTPS, jamais HTTP. Cela désamorce une attaque où un adversaire obtient accès à votre réseau, puis fait des requêtes par procuration via un lien non sécurisé.
    N’activez pas cette option si vous fournissez (ou prévoyez de fournir un  jour) du contenu non sécurisé via du HTTP simple. Il est très difficile d’annuler cette modification une fois que les navigateurs de vos utilisateurs ont accepté ce paramètre.',
      '(No Value Configured)' => '(Aucune valeur configurée)',
      'Config option \'%s\' is invalid. The URI must contain a dot (\'%s\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => 'L’option de configuration \'%s\' n’est pas valide. L’URI doit contenir un point (\'%s\'), comme \'%s\', pas seulement un nom simple comme \'%s\'. Certains navigateurs ne définissent pas de cookies sur des domaines sans TLD.',
      'Allow editing' => 'Permettre la modification',
      'Configure full-text search services.' => 'Configurer les services de recherche en plein texte.',
      'The HTTP method.' => 'La méthode HTTP.',
      'The webserver\'s host name.' => 'Le nom d\'hôte du serveur web.',
      'PHP Timezone Invalid' => 'Fuseau horaire PHP non valide',
      'Minify static resources by removing whitespace and comments. You should enable this in production, but disable it in development.' => 'Réduire les ressources statiques en supprimant les espaces et les commentaires. Vous devez activer cela en production, mais le désactiver en développement.',
      'Phabricator Configuration' => 'Configuration de Phabricator',
      'Integration with Recaptcha' => 'Intégration avec Recaptcha',
      'Phabricator sent itself a test request and expected to get a bare JSON response back, but the response had extra whitespace at the beginning or end.
    This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'Phabricator envoie lui-même une requête de test et s’attend à obtenir une réponse JSON simple en retour, mais la réponse a un espace supplémentaire au début ou à la fin.
    Cela veut dire, en général, que vous avez modifié un fichier et avez laissé des caractères blancs avant la balise entrante %s, ou après une balise fermante %s. Supprimez tout espace au début, et de préférence, ne mettez pas les balises fermantes.',
      'Global cap for size of generated emails (bytes).' => 'Plafond global pour la taille des courriels générés (en octets).',
      'Access Logs' => 'Journaux des accès',
      'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.' => 'Ce serveur a une mauvaise version connue de « %s » installée (« %s »). Cette version n’est pas supportée, ou contient des bogues importants ou des vulnérabilités de sécurité qui sont corrigés dans une version plus récente.',
      'Allow non-members to interact with tasks over email.' => 'Autoriser les non-membres à interagir par courriel sur les tâches.',
      'Character Set' => 'Table des caractères',
      'Phabricator puts databases in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing Phabricator and using namespaces to separate multiple sandbox datasets.' => 'Phabricator met les bases de données dans un espace de noms, qui est par défaut \'phabricator\' — par exemple, la base de données de Differential est appelée \'phabricator_differential\' par défaut. Vous pouvez modifier cet espace de noms si vous le souhaitez. Normalement, vous ne devriez pas faire cela sauf si vous développez Phabricator et utilisez les espaces de nom pour séparer des ensembles de données bac à sable multiples.',
      'Formats' => 'Formats',
      'Ambiguous Leader' => 'Dirigeant ambigu',
      'Amazon SES does not support sending email as users. Disable send as user, or choose a different mail adapter.' => 'Amazon SES ne supporte pas l’envoi de courriel en tant qu’utilisateur. Désactiver l’envoi comme utilisateur, ou choisir un adaptateur de courriel différent.',
      'Config key "%s" is locked and can only be set in local configuration. To learn more, see "%s" in the documentation.' => 'La clé de configuration « %s » est verrouillée et ne peut être positionnée que dans la configuration locale. Pour en savoir plus, voir « %s » dans la documentation.',
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
      'Config option \'%s\' is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like \'%s\'. 
                You can find a list of valid identifiers here: %s' => 'L’option de configuration \'%s\' n’est pas valide. L’identifiant de fuseau horaire doit être valide et reconnu par PHP, comme \'%s\'. 
                Vous pouvez trouver une liste des identifiants valides ici : %s',
      'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.' => 'Cette option a été renommée en `%s` pour mettre en évidence la nature inachevée de nombreuses applications prototype. Votre paramétrage existant a été migré.',
      'Clients' => 'Clients',
      'Expected Columns' => 'Colonnes attendues',
      'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.' => 'Les superviseurs peuvent maintenant utiliser un groupe se redimensionnant automatiquement. Vous pouvez configurer la taille du groupe avec `%s`.',
      'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.' => 'Cette configuration est verrouillée et ne peut pas être modifiée depuis l’interface web. Utiliser %s dans %s pour la modifier.',
      'Multiple %s subclasses contain an option named \'%s\'!' => 'Plusieurs sous-classes de %s contiennent une option nommée \'%s\' !',
      'Pygments should be installed and enabled to provide advanced syntax highlighting.' => 'Pygments doit être installé et activé pour fournir la mise en évidence avancée de la syntaxe.',
      'Installed Versions' => 'Versions installées',
      'Recaptcha public key, obtained by signing up for Recaptcha.' => 'Clé publique de Recaptcha, obtenue en s’inscrivant à Recaptcha.',
      'Database Servers' => 'Serveurs de base de données',
      'Specify a configuration key to delete.' => 'Spécifier une clé de configuration à supprimer.',
      'Search Servers' => 'Rechercher les serveurs',
      'This web host ("%s") is set to a very different time than a database host "%s".' => 'Cet hôte web (« %s ») est aligné sur une heure très différente de celle d’un hôte de base de données « %s ».',
      'Send Mail To Each Recipient' => 'Envoyer un courriel à chaque destinataire',
      'Remove Custom Logo' => 'Supprimer le logo personnalisé',
      'No notification servers are configured.' => 'Aucun serveur de notification n’est configuré.',
      '(Not Supported)' => '(Non supporté)',
      'Nonstandard port' => 'Port non standard',
      'Don\'t embed Commons videos' => 'Ne pas inclure les vidéos Communs',
      'This configuration has been removed. You can safely delete it.
    %s' => 'Cette configuration a été retirée. Vous pouvez la supprimer sans problème.
    %s',
      'Options relating to translations.' => 'Options relatives aux traductions.',
      'You have \'%s\' enabled in your PHP configuration, but Phabricator will not run in safe mode. Safe mode has been deprecated in PHP 5.3 and removed in PHP 5.4.
    Disable safe mode to continue.' => 'Vous avez \'%s\' d’activé dans votre configuration PHP, mais Phabricator ne tournera pas en mode sécurisé. Le mode sécurisé a été rendu obsolète en PHP 5.3 et supprimé en PHP 5.4.
    Désactiver le mode sécurisé pour continuer.',
      'Use Private Replies (More Secure)' => 'Utiliser les réponses privées (plus sécurisé)',
      'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'' => 'Traiter tous les fichiers \'*.x.bak\' comme \'.x\'. REMARQUE : Nous faisons correspondre le groupe 1 capturé en spécifiant la correspondance comme \'1\'',
      'Send as User Taking Action' => 'Envoyer comme l’utilisateur prenant l’action',
      'Security options.' => 'Options de sécurité.',
      'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L’option « %s » est de type « %s », et doit être spécifiée sur la ligne de commande comme une liste de valeurs en JSON. Vous devrez peut-être mettre la valeur entre guillemets dans votre shell (par exemple : \'["a", "b", …]\').',
      'Expected Unique' => 'Attendu comme unique',
      'Old MySQL Version' => 'Ancienne version MySQL',
      'If you have multiple Phabricator environments (like a development/staging environment for working on testing Phabricator, and a production environment for deploying it), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'Si vous avez plusieurs environnements Phabricator (comme un environnement de développement/mise en place pour travailler sur un test de Phabricator, et un environnement de production pour le déployer), mettez ici l’URI de l’environnement de production, afin que les courriels et autres URI durables soient toujours générés avec des liens pointant sur l’environnement de production. S’il est non défini, la valeur par défaut est `%s`. La plupart des installations n’ont pas besoin de définir cette option.',
      'Using PHPMailer with SMTP, you can set this to one of \'%s\' or \'%s\' to use TLS or SSL, respectively. Leave it blank for vanilla SMTP. If you\'re sending via Gmail, set it to \'%s\'.' => 'En utilisant PHPMailer avec SMTP, vous pouvez fixer cela à l\'une des valeurs \'%s\' ou \'%s\' pour utiliser TLS ou SSL respectivement. Le laisser vide pour SMTP simple. Si vous envoyez via Gmail, le mettre à \'%s\'.',
      'Configuring a Preamble Script' => 'Configuration d’un script de prétraitement',
      'Default Partition' => 'Partition par défaut',
      'Domain used for reply email addresses.' => 'Domaine utilisé pour répondre aux adresses de messagerie.',
      'You can find more information about rebuilding the search index here: %s' => 'Vous pouvez trouver plus d’information sur la reconstruction de l’index de recherche ici : %s',
      'Prevent editing' => 'Empêcher la modification',
      'Whitelist 1.2.3.*' => 'Liste blanche 1.2.3.*',
      'This configuration is no longer relevant because daemons restart automatically on configuration changes.' => 'Cette configuration n’est plus significative parce que les démons redémarrent automatiquement lors des modifications de configuration.',
      'The Differential revision list view age UI elements have been removed to simplify the interface.' => 'Les éléments d’IHM de l’âge d’affichage de la liste des révisions différentielles ont été supprimés pour simplifier l’interface.',
      'Separate values with newlines.' => 'Séparer les valeurs avec des nouvelles lignes.',
      'Exception Handlers' => 'Gestionnaires d’exceptions',
      'This schema has the wrong nullable setting.' => 'Ce schéma a le mauvais paramétrage de nul autorisé.',
      'Config option \'%s\' is invalid. The URI must start with \'%s\' or \'%s\'.' => 'L’option de configuration \'%s\' n’est pas valide. L’URI doit commencer par \'%s\' ou \'%s\'.',
      'Unsupported/Insecure "%s" Version' => 'Version « %s » non supportée/non sécurisée',
      'SES Can\'t Send As User' => 'SES ne peut pas envoyer comme utilisateur',
      'Authorization token from Twilio service.' => 'Jeton d’autorisation du service Twilio.',
      'This option does not have a custom type!' => 'Cette option n’a pas un type personnalisé !',
      'Require administrators to approve new accounts.' => 'Nécessite que les administrateurs approuvent les nouveaux comptes.',
      'Health' => 'Santé',
      'Control how mail is sent.' => 'Contrôler comment le courriel est envoyé.',
      'System user to run daemons as.' => 'Utilisateur système avec lequel exécuter les démons.',
      'Unknown schema status "%s"!' => 'État du schéma « %s » inconnu !',
      'MySQL May Run Slowly' => 'MySQL pourrait fonctionner lentement',
      'Phabricator now manages typeahead strategies automatically.' => 'Phabricator gère maintenant automatiquement les stratégies de saisie anticipée.',
      'Too many arguments: expected one key.' => 'Trop d’arguments : une clé attendue.',
      'List of Users Without MFA' => 'Liste des utilisateurs sans MFA',
      'No "Host" header present in request.' => 'Aucun entête « Host » présent dans la requête.',
      'Value for option "%s" of type "%s" must be either "true" or "false".' => 'La valeur pour l’option « %s » de type « %s » doit être soit « true » soit « false ».',
      'Cluster Search' => 'Recherche de grappe',
      'Footer configuration is not valid: value must be a list of items.' => 'La configuration du pied de page n’est pas valide : la valeur doit être une liste d’éléments.',
      'Edit "%s"' => 'Modifier « %s »',
      'Don\'t embed YouTube videos' => 'Ne pas inclure les vidéos YouTube',
      'Disable PHP %s' => 'Désactiver %s de PHP',
      'Configure master encryption keys.' => 'Configurer les clés de chiffrement maître.',
      'Amazon SES Secret Key Not Set' => 'Clé secrète d’Amazon SES non définie',
      'Phabricator now has meaningful global access controls. See `%s`.' => 'Phabricator a maintenant des contrôles d’accès globaux importants. Voir `%s`.',
      'If you\'re using PHPMailer to send email, provide the mailer and options here. PHPMailer is much more enormous than PHPMailerLite, and provides more mailers and greater enormity. You need it when you want to use SMTP instead of sendmail as the mailer.' => 'Si vous utilisez PHPMailer pour envoyer des courriels, fournissez ici l’expéditeur et les options. PHPMailer est bien plus gros que PHPMailerLite, et fournit plus d’expéditeurs et un volume bien plus important. Vous en aurez besoin quand vous voudrez utiliser SMTP au lieu de sendmail comme expéditeur.',
      'Database replica "%s" is listed as a replica, but is not currently replicating. You are vulnerable to data loss if the master fails.' => 'La réplique de base de données « %s » est listée comme réplique, mais elle n’est actuellement pas répliquée. Vous êtes vulnérable à une perte de données, si le maître échoue.',
      'Garbage Collectors' => 'Ramasses-miettes',
      '%s edited this configuration entry.' => '%s a modifié cette entrée de configuration.',
      'Phabricator sent itself a test request with the "X-Phabricator-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:
    %s
    Something is misconfigured or otherwise mangling responses.' => 'Phabricator a envoyé de lui-même une requête de test avec l’entête « X-Phabricator-SelfCheck » et s’attendait à obtenir une réponse JSON valide en retour. À la place, la réponse commence par :
    %s
    Quelque chose est mal configuré ou sinon, déforme les réponses.',
      'Enable Phabricator\'s debugging console.' => 'Activer la console de débogage de Phabricator.',
      'Send Mail To All Recipients' => 'Envoyer un courriel à tous les destinataires',
      'Launch daemons in \'trace\' mode by default.' => 'Lancer les démons en mode \'trace\' par défaut.',
      'Your install has no current setup issues to resolve.' => 'Votre installation n’a actuellement pas de problème de configuration à résoudre.',
      'Allow Insecure Reply-To Auth' => 'Permettre une authentification Reply-To non sécurisée',
      'Subschemata Have Failures' => 'Subschemata a des échecs',
      'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.
    This may mean the base URI is configured incorrectly. You must serve Phabricator from a base URI with a dot (like "https://phabricator.mycompany.com"), not a bare domain (like "https://phabricator/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.
    This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.
    Requests must include a valid "Host" header.' => 'Cette requête inclut un entête « Header » non valide, avec la valeur « %s ». Les entêtes de l’hôte doivent contenir un point (« . »), comme « exemple.com ». C’est obligatoire pour que certains navigateurs puissent définir des cookies.
    Cela peut vouloir dire que l’URI de base est mal configurée. Vous devez fournir Phabricator depuis une URI de base avec un point (comme « https://phabricator.masociete.com »), pas un simple domaine (comme « https://phabricator/ »). Si vous essayez d’utiliser un simple domaine, modifiez votre configuration pour utiliser un domaine complet avec un point dedans à la place.
    Cela peut aussi vouloir dire que votre serveur web (ou tout autre équipement du réseau, comme un répartiteur de charge) déforme l’entête « Host », ou que vous utilisez un outil ou une bibliothèque pour produire une requête manuellement et mettre le mauvais entête « Host ».
    Les requêtes doivent inclure un entête « Host » valide.',
      'Save Config Entry' => 'Enregistrer l’entrée de configuration',
      '%s of %s' => '%s sur %s',
      'Setup MySQL Schema' => 'Installer le schéma MySQL',
      ' (%s)' => ' (%s)',
      'Not Available' => 'Non disponible',
      'Trust "Reply-To" headers for authentication.' => 'Faire confiance aux entêtes « Reply-To » pour l’authentification',
      'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => 'Cette option a été supprimée, vous pouvez utiliser les tableaux de bord pour fournir une personnalisation de la page d’accueil. Voir T11533 pour plus de détails.',
      'Data Cache' => 'Cache de données',
      'Configure the access logs, which log HTTP/SSH requests.' => 'Configurer les journaux d’accès, qui tracent les requêtes HTTP/SSH.',
      '%ss Behind' => '%ss derrière',
      'The PID of the server process.' => 'Le PID du processus du serveur.',
      'Launch daemons in \'verbose\' mode by default. This creates a lot of output, but can help debug issues. Daemons launched in debug mode with \'%s\' are always launched in verbose mode. See also \'%s\'.' => 'Lancer les démons en mode \'bavard\' par défaut. Cela génère beaucoup de sorties, mais peut aider à déboguer les problèmes. Les démons lancés en mode débogage avec \'%s\' sont toujours lancés en mode bavard. Voir aussi \'%s\'.',
      'Blacklist subnets to prevent user-initiated outbound requests.' => 'Mettre les sous-réseaux en liste noire pour éviter des requêtes de sortie initiées par l’utilisateur.',
      'No Outbound Requests' => 'Aucune requête de sortie',
      'No Sendmail Binary Found' => 'Aucun binaire de sendmail trouvé',
      'Primary install URI, for multi-environment installs.' => 'URI d’installation primaire, pour les installations multi-environnements.',
      'Whitelists editor protocols for "Open in Editor".' => 'Protocoles d’éditeur en liste blanche pour « Ouvrir dans l’éditeur ».',
      'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.' => 'Les paramètres « Préfixe Re: » et « Sujets variés » sont maintenant configurés dans les paramètres globaux.',
      'You have no unresolved setup issues.' => 'Vous n’avez aucun problème d’installation non résolu.',
      'This configuration is hidden and can not be edited or viewed from the web interface.' => 'Cette configuration est cachée et ne peut pas être modifiée ou affichée depuis l’interface web.',
      'Local Disk Storage Not Readable/Writable' => 'Stockage disque local impossible à lire/écrire',
      'Override translations.' => 'Forcer les traductions.',
      'Cluster Configuration Out of Sync' => 'Configuration de la grappe non synchronisée',
      'This option has been removed. You may delete it at your convenience.' => 'Cette option a été supprimée. Vous pouvez la supprimer à votre guise.',
      'After rebuilding the index, run this command to clear this setup warning:' => 'Après reconstruction de l’index, lancer cette commande pour nettoyer cet avertissement d’installation :',
      'Footer item with index "%s" is invalid: %s' => 'L’élément du pied de page avec l’index « %s » n’est pas valide : %s',
      'Unknown Configuration Option "%s"' => 'Option de configuration « %s » inconnue',
      'Truncate at 1MB' => 'Tronquer à 1Mo',
      'Access key for Amazon S3.' => 'Clé d’accès pour Amazon S3.',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.' => 'Le composant \'%s\' de PATH (qui se décline en chemin absolu \'%s\') n’est pas utilisable parce que \'%s\' n’est pas lisible.',
      'Maniphest fields are now loaded automatically. You can configure them with `%s`.' => 'Les champs du manifeste sont maintenant chargés automatiquement. Vous pouvez les configurer avec `%s`.',
      'This key is expected to exist, but does not.' => 'Cette clé est censée exister, mais ce n’est pas le cas.',
      'Disable deflate compression' => 'Désactiver la décompression',
      'Normal mode' => 'Mode normal',
      'This version of Phabricator does not support PHP 7.0. You are running PHP %s. Upgrade to PHP 7.1 or newer.' => 'Cette version de Phabricator ne supporte pas PHP 7.0. Vous exécutez PHP %s. Mettez à jour vers PHP 7.1 ou supérieur.',
      'Persistence' => 'Persistance',
      'Amazon SES is selected as the mail adapter, but no SES secret key is configured. Provide an SES secret key, or choose a different mail adapter.' => 'Amazon SES est sélectionné comme adaptateur de messagerie, mais aucune clé secrète SES n’est configurée. Fournir une clé secrète SES, ou choisir un adaptateur de messagerie différent.',
      'This schema is expected to exist, but does not.' => 'Ce schéma est censé exister, mais ce n’est pas le cas.',
      'Do Not Use Pygments' => 'Ne pas utiliser Pygments',
      'Up to Date' => 'À jour',
      'Configure core options, including URIs.' => 'Configurer les options cœur, y compris les URI.',
      '(empty)' => '(vide)',
      'This key has the wrong uniqueness setting.' => 'Cette clé a le mauvais paramètre d’unicité.',
      'When users set or reset a password, it must have at least this many characters.' => 'Quand les utilisateurs définissent ou redéfinissent un mot de passe, il doit avoir au moins ce nombre de caractères.',
      'Additional configuration options to lock.' => 'Options de configuration supplémentaires à verrouiller.',
      'Override what language files (based on filename) highlight as.' => 'Forcer les fichiers de langue (d’après le nom de fichier) à mettre en surbrillance.',
      'Bad "Host" Header' => 'Mauvais entête « Host »',
      'Option "%s" is of type "%s", but the item at index "%s" of the list is not a string.' => 'L’option « %s » est de type « %s », mais l’élément à l’index « %s » de la liste n’est pas une chaîne.',
      'MySQL port to use when connecting to the database.' => 'Port MySQL à utiliser lors de la connexion à la base de données.',
      'URI where Phabricator is installed.' => 'URI où Phabricator est installé.',
      'Trying to add duplicate key "%s"!' => 'Essai d’ajout d’une clé dupliquée « %s » !',
      'Option "%s" is of type "%s", but the configured value is not a string.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas une chaîne.',
      'User Guide: Amazon RDS' => 'Guide utilisateur : Amazon RDS',
      'Repository %s has an ambiguous leader.' => 'Le dépôt %s a un chef ambigu.',
      'Configuration of the notification server has changed substantially. For discussion, see T10794.' => 'La configuration du serveur de notification a grandement changé. Pour la discussion, voir T10794.',
      'Database source is not configured properly' => 'La source de base de données n’est pas configurée correctement',
      'Phabricator sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.
    This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => 'Phabricator s’est envoyé une requête avec « Accept-Encoding: gzip », mais a reçu une réponse non compressée.
    Cela peut indiquer que votre serveur web n’est pas configuré pour compresser les réponses. Si c’est le cas, vous devez activer la compression. La compression peut améliorer significativement les performances, surtout pour des clients ayant une faible bande passante.',
      'Don\'t Require Manual Approval' => 'Ne nécessite pas d’approbation manuelle',
      'Column Type' => 'Type de colonne',
      'Truncate at 512KB' => 'Tronquer à 512ko',
      'Should Phabricator use Pygments to highlight code?' => 'Phabricator doit-il utiliser Pygments pour surligner le code ?',
      'Cache' => 'Cache',
      'Automatically profile some percentage of pages.' => 'Faire automatiquement le profil d’un certain pourcentage de pages.',
      'Admin Server' => 'Administrer le serveur',
      'Wrong Column Type' => 'Mauvais type de colonne',
      'Embed YouTube videos' => 'Vidéos YouTube incluses',
      'Add One Path' => 'Ajouter un chemin',
      'Clear Cache' => 'Vider le cache',
      'Unignore this setup issue?' => 'Ne plus ignorer ce problème d’installation ?',
      'Configure Mail.' => 'Configurer le courriel.',
      'Determines which URI protocols are auto-linked.' => 'Détermine quels protocoles d’URI sont liés automatiquement.',
      'You can update these %d value(s) here:' => 'Vous pouvez mettre à jour ces %s valeurs ici :',
      'Notification Servers' => 'Serveurs de notification',
      'This is hashed with other inputs to generate mail tokens. If you want, you can change it to some other string which is unique to your install. In particular, you will want to do this if you accidentally send a bunch of mail somewhere you shouldn\'t have, to invalidate all old reply-to addresses.' => 'Ceci est haché avec d’autres entrées pour générer des jetons de courriel. Si vous voulez, vous pouvez le modifier par une autre chaîne qui est unique à votre installation. En particulier, vous voudrez faire cela si vous envoyez de façon accidentelle un lot de courriels quelque part où vous n’auriez pas dû, pour invalider toutes les anciens destinataires reply-to.',
      'extname' => 'extname',
      'Enable captchas with Recaptcha.' => 'Activer les captchas avec Recaptcha.',
      'Add Multiple Paths' => 'Ajouter des chemins multiples',
      'Specify an activity to mark as completed.' => 'Spécifier une activité à marquer comme terminée.',
      'The environmental variable %s is empty. Phabricator needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in Phabricator configuration.' => 'La variable d’environnement %s est vide. Phabricator a besoin d’exécuter certaines commandes système, comme `%s`, `%s`, `%s` et `%s`. Pour exécuter ces commandes, les binaires doivent être disponibles sur les serveurs web %s. Vous pouvez définir des chemins supplémentaires dans la configuration de Phabricator.',
      'Set the URI where Phabricator is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => 'Définir l’URI où Phabricator est installé. Le définir améliore la sécurité en évitant que les cookies soient définis sur d’autres domaines, et permet aux démons d’envoyer des courriels avec des liens qui ont le bon domaine.',
      'Define a Phabricator cluster by providing a whitelist of host addresses that are part of the cluster.
    Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.
    Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.
    When cluster addresses are defined, Phabricator hosts will also reject requests to interfaces which are not whitelisted.' => 'Définir une grappe Phabricator en fournissant une liste blanche d’adresses d’hôtes qui font partie de la grappe.
    Les hôtes sur cette liste blanche ont des droits spéciaux. Ces hôtes peuvent tordre les règles de sécurité, et mal configurer cette liste peut réduire la sécurité de cette liste. Pour plus d’information, voir **[[ %s | %s ]]**.
    Définir une liste de blocs CIDR qui met en liste blanche tous les hôtes dans la grappe et aucun autre. Voir les exemples ci-dessous pour plus de détails.
    Quand les adresses de la grappe sont définies, les hôtes de Phabricator rejetteront aussi les requêtes vers les interfaces qui ne sont pas en liste blanche.',
      'This server has a known bad version of "%s".' => 'Ce serveur a une mauvaise version connue de « %s ».',
      'Require DarkConsole Activation' => 'Nécessite l’activation de DarkConsole',
      'Notifications Status' => 'État des notifications',
      'Control how SMS is sent.' => 'Contrôler comment le SMS est envoyé.',
      'Current Configuration' => 'Configuration actuelle',
      'Replicating Master' => 'Réplication du maître',
      'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.' => 'Sans fuseau horaire configuré, PHP émettra des avertissements en travaillant avec des dates, et les dates et les heures pourront ne pas s’afficher correctement.',
      'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.' => 'L’option « %s » est de type « %s » et doit être initialisée avec une liste d’expressions régulières valides, mais « %s » n’est pas une expression régulière valide.',
      'This schema can use a better character set.' => 'Ce schéma peut utiliser un meilleur jeu de caractères.',
      'Determines whether or not YouTube videos get embedded.' => 'Détermine si les vidéos YouTube sont incluses ou non.',
      'Allows you to add a footer with links in it to most pages. You might want to use these links to point at legal information or an about page.
    Specify a list of dictionaries. Each dictionary describes a footer item. These keys are supported:
      - `name` The name of the item.
      - `href` Optionally, the link target of the item. You can     omit this if you just want a piece of text, like a copyright     notice.' => 'Vous permet d’ajouter un pied de page avec des liens vers la plupart des pages. Vous pourrez vouloir utiliser ces liens pour pointer vers des informations légales ou vers une page À propos.
    Spécifier une liste de dictionnaires. Chaque dictionnaire décrit un élément du pied de page. Ces clés sont supportées :
      - `name` Le nom de l’élément.
      - `href` Facultativement, la cible du lien de l’élément. Vous pouvez l’omettre si vous voulez juste du texte, comme une indication de droit d’auteur.',
      'The known issues with this old version are:' => 'Les problèmes connus avec cette ancienne version sont :',
      'Not Enabled' => 'Non activé',
      'If you are using Amazon RDS, some of the instructions above may not apply to you. See %s for discussion of Amazon RDS.' => 'Si vous utilisez Amazon RDS, certaines des instructions ci-dessus peuvent ne pas s’appliquer. Voyez %s pour une discussion sur Amazon RDS.',
      'The notification server no longer requires root permissions. Start the server as the user you want it to run under.' => 'Le serveur de notification ne nécessite plus les droits root. Démarrez le serveur avec l’utilisateur sous lequel vous voulez le voir fonctionner.',
      'This issue will no longer be suppressed, and will return to its rightful place as a global setup warning.' => 'Ce problème ne sera plus supprimé, et retournera à sa place correcte en tant qu’avertissement général d’installation.',
      'Allows you to remove levity and jokes from the UI.' => 'Vous permet de supprimer le manque de sérieux et les blagues de l’IHM.',
      'Sites' => 'Sites',
      'T6185 "Shellshock" Bash Vulnerability' => 'Vulnérabilité de bash T6185 « Shellshock »',
      'Missing \'%s\' Extension' => 'Extension \'%s\' manquante',
      'Retention policies for garbage collection.' => 'Politiques de rétention pour le ramasse-miettes.',
      'MySQL (on host "%s") is configured with a very small innodb_buffer_pool_size, which may impact performance.' => 'MySQL (sur l’hôte « %s ») est configuré avec un très petit innodb_buffer_pool_size, ce qui peut impacter les performances.',
      'You should upgrade this software.' => 'Vous devez mettre à jour ce logiciel.',
      'The following caches will be cleared:' => 'Les caches suivant seront vidés :',
      'Detected %s warning(s) with the schemata.' => '%s avertissement(s) détecté(s) avec ce schemata.',
      'Deprecated mysql.host Format' => 'Format obsolète de mysql.host',
      'This key is on the wrong columns.' => 'Cette clé traite de mauvaises colonnes.',
      'Wrong Nullable Setting' => 'Mauvais paramétrage de nul possible.',
      'Secret key for Amazon S3.' => 'Clé secrète pour Amazon S3.',
      'You are using an old version of MySQL (on host "%s") which has poor unicode support (it does not support the "utf8mb4" collation set). You will encounter limitations when working with some unicode data.
    We strongly recommend you upgrade to MySQL 5.5 or newer.' => 'Vous utilisez une ancienne version de MySQL (sur l’hôte « %s ») qui a un faible support d’unicode (ne prend pas en compte le jeu de caractères « utf8mb4 »). Vous rencontrerez des limites en travaillant avec certaines données en Unicode.
    Nous vous recommandons fortement de mettre à jour vers MySQL 5.5 ou plus récent.',
      'Trying to add duplicate column "%s"!' => 'Tentative pour ajouter la colonne dupliquée « %s » !',
      'The Multimeter application collects performance samples. You can use this data to help you understand what Phabricator is spending time and resources doing, and to identify problematic access patterns.
    This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.
    For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'L’application Multimètre collecte des exemples de performance. Vous pouvez utiliser ces données pour vous aider à comprendre sur quoi Phabricator passe du temps et des ressources, et pour identifier les schémas d’accès problématiques.
    Cette option contrôle à quelle fréquence l’échantillonnage s’active. Le mettre à une entier positif N pour échantillonner toutes les 1 / N pages.
    Pour la plupart des installations, la valeur par défaut (1 échantillon pour 1000 pages) doit collecter suffisamment de données pour être utiles, sans nécessiter beaucoup de stockage ou impacter fortement les performances. Si vous travaillez sur les problèmes de performance, vous pouvez ajuster la fréquence afin de collecter plus de données.',
      'Minimum password length.' => 'Longueur minimale du mot de passe.',
      'Required PHP extensions are not installed.' => 'Les extensions PHP nécessaires ne sont pas installées.',
      'Database' => 'Base de données',
      'UNHEALTHY: This database has failed recent health checks. Traffic will not be sent to it until it recovers.' => 'MALSAIN : Cette base de données a échoué aux dernières vérifications de santé. Le trafic ne lui sera pas envoyé jusqu’à ce qu’elle soit rétablie.',
      'Request input, in bytes.' => 'Nombre demandé, en octets.',
      'You enabled pygments but the %s script is not actually available, your %s is probably broken.' => 'Vous avez activé Pygments mais le script %s n’est actuellement pas disponible ; votre %s est sans doute cassé.',
      'Application Settings' => 'Configuration de l\'application',
      'Show email preferences link in email.' => 'Afficher le lien des préférences de courriel dans le courriel.',
      'Your webserver may have compression disabled.' => 'Votre serveur web peut avoir désactivé la prose en compte de la compression.',
      'Alternative URIs that can access Phabricator.' => 'Uri alternatives qui peuvent accéder à Phabricator.',
      'After editing the PHP configuration, <strong>restart Phabricator for the changes to take effect</strong>. For help with restarting Phabricator, see %s in the documentation.' => 'Après avoir modifié la configuration PHP, <strong>redémarrer Phabricator pour que les modifications prennent effet</strong>. Pour de l’aide au redémarrage de Phabricator, voir %s dans la documentation.',
      'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.' => 'Vous pouvez définir une limite pour la taille maximale en octets du courriel sortant. Un courriel plus gros que cette limite sera tronqué avant d’être envoyé. Cela peut être utile si votre MTA rejette les courriels dépassant une certaine limite (c’est assez courant). Spécifier une valeur en octets.',
      'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => 'Plusieurs sous-classes de %s ont la même clé (\'%s\') : %s, %s.',
      'Your webserver is rewriting paths improperly.' => 'Votre serveur web réécrit mal les chemins.',
      'Trying to add duplicate table "%s"!' => 'Essai d’ajout d’une table dupliquée « %s » !',
      'No Authentication Providers Configured' => 'Aucun fournisseur d’authentification configuré',
      'Run Silently' => 'Exécuter silencieusement',
      'Secret key for Amazon SES.' => 'Clé secrète pour Amazon SES.',
      'You can find more information about PHP configuration values in the %s.' => 'Vous pouvez trouver plus d’information sur les valeurs de la configuration PHP dans le %s.',
      'Skipping option "%s"; already in local config.' => 'Saut de l’option « %s » ; déjà dans la configuration locale.',
      'Cookies set for x.com are also sent for y.x.com. Assuming Phabricator instances are running on both domains, this will create a collision preventing you from logging in.' => 'Les cookies définis pour x.com sont aussi envoyés pour y.x.com. En supposant que des instances de Phabricator s’exécutent sur les deux domaines, cela provoquera une collision vous empêchant de vous connecter.',
      'Setup Issues' => 'Problèmes d’installation',
      'Require email verification' => 'Nécessite une vérification de courriel',
      '%s Not Working' => '%s ne fonctionne pas',
      'You can use \'%s\' if you don\'t want to create a full translation to give users an option for switching to it and you just want to override some strings in the default translation.' => 'Vous pouvez utiliser \'%s\' si vous ne voulez pas créer une traduction complète, pour donner aux utilisateurs une option pour basculer vers elle, et que vous voulez juste écraser certaines chaînes dans la traduction par défaut.',
      'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless {{auth.email-domains}} is nonempty.' => 'Si vrai, les adresses de messagerie doivent être vérifiées (en cliquant sur un lien dans le courriel) avant qu’un utilisateur puisse se connecter. Par défaut, la vérification est facultative, sauf si {{auth.email-domains}} est non vide.',
      'Phabricator appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. Phabricator regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'Phabricator semble être installé sur une très petite instance de EC2 (de la classe « %s ») avec un CPU extensible. Ce n’est pas recommandé. Phabricator a besoin de CPU de façon régulière, et ces instances sont souvent chargées à mort par un ralentissement de CPU. Utiliser plutôt une instance avec un CPU normal.',
      'Phabricator sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".
    Your webserver is configured incorrectly and large parts of Phabricator will not work until this issue is corrected.
    (This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'Phabricator s’est envoyé une requête de test avec un paramètre HTTP GET, mais le paramètre n’a pas été transmis. « %s » envoyé avec la valeur « %s », « %s » avec la valeur « %s » obtenu.
    Votre serveur web est mal configuré et une grande partie de Phabricator ne fonctionnera pas jusqu’à ce que ce problème soit corrigé.
    (Ce problème peut être dû à un « QSA » manquant dans votre RewriteRule.)',
      'Connection' => 'Connexion',
      'SSH keys are now actually useful, so they are always enabled.' => 'Les clés SSH sont maintenant utiles, c\'est pourquoi elles sont toujours activées.',
      'Request output, in bytes.' => 'Sortie de la requête, en octets.',
      'Configure integration with AWS (EC2, SES, S3, etc).' => 'Configurer l’intégration avec AWS (EC2, SES, S3, etc.).',
      'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => 'L’option de configuration \'%s\' n’est pas valide. L’URI doit contenir un point (\'.\'), comme \'%s\', pas simplement un nom comme \'%s\'. Certains navigateurs web ne positionneront pas les cookies sur les domaines sans TLD.',
      'Cache namespace.' => 'Espace de noms du cache.',
      'Custom remarkup rules are now added by subclassing %s or %s.' => 'Les règles de Remarkup personnalisées sont maintenant ajoutées en sous-classant %s ou %s.',
      'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in the Phabricator configuration.' => 'Le binaire \'%s\' n’a pas pu être trouvé. Faire un lien symbolique dessus dans \'%s\', ou initialiser la variable d’environnement %s du serveur web pour inclure le répertoire où il réside, ou ajouter ce répertoire à \'%s\' dans la configuration de Phabricator.',
      'Issue Resolved' => 'Problème résolu',
      'Integration with Mailgun' => 'Intégration avec Mailgun',
      'If you enable this, linked Commons videos will be embedded inline.' => 'Si vous activez cela, les vidéos Communs intégrées seront incluses en ligne.',
      'Allow Phabricator to use a single mailbox for all replies.' => 'Autoriser Phabricator à utiliser une adresse courriel unique pour toutes les réponses.',
      'Garbage collectors are now configured with "%s".' => 'Les ramasse-miettes sont maintenant configurés avec « %s » .',
      'Unknown configuration option type "%s".' => 'Type d\'option de configuration inconnu « %s » .',
      'Trying to add duplicate database "%s"!' => 'Essai d’ajouter une base de données « %s » dupliquée !',
      'This column has the wrong autoincrement setting.' => 'Cette colonne a un mauvais paramétrage d’auto-incrémentation.',
      'Allows you to add footer links on most pages.' => 'Vous permet d’ajouter des liens de bas de page sur la plupart des pages.',
      'USWest Region' => 'Région US Ouest',
      'Maniphest fields are now defined in `%s`. Existing definitions have been migrated.' => 'Les champs du manifeste sont maintenant définis dans `%s`. Les définitions existantes ont été migrées.',
      'Enable Prototypes' => 'Activer les prototypes',
      'Elasticsearch is now configured with "%s".' => 'Elasticsearch est maintenant configuré avec « %s ».',
      'Configuring Outbound Email' => 'Configuration du courriel de sortie',
      'Inbound mail addresses are now configured for each application in the Applications tool.' => 'Les adresses de messagerie de réception sont maintenant configurées pour chaque application dans l’outil Applications.',
      'Partial \'%s\' Support' => 'Support partiel de \'%s\'',
      'Subschemata have setup warnings.' => 'Subschemata a des avertissements d’installation.',
      'Uptime' => 'Durée de fonctionnement',
      'Normally, Phabricator profiles pages only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.
    Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).
    Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.
    NOTE: You must install XHProf for profiling to work.' => 'Normalement, Phabricator fait le profil des pages uniquement quand cela est demandé explicitement via DarkConsole. Toutefois, il peut être utile de faire le profil de certaines pages automatiquement.
    Définir cette option avec un entier positif N pour faire automatiquement le profil de 1 / N pages. Par exemple, le mettre à 1 fera le profil de toutes les pages, alors que le mettre à 1000 fera le profil de 1 page sur 1000 requêtes (c.-à-d. 0,1%% des requêtes).
    Comme faire des profils est lent et génère beaucoup de données, vous devriez le mettre à 0 en production (pour le désactiver) ou à un très grand nombre (pour collecter quelques exemples, si cela vous intéresse d’avoir quelques données auxquelles regarder au besoin). En développement, il peut être utile de le mettre à 1 pour déboguer des problèmes de performance.
    NOTE : Vous devez installer XHProf pour que les profils fonctionnent.',
      'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.' => 'MySQL (sur l’hôte « %s ») utilise un fichier de mots à éviter, ce qui évite de rechercher de nombreux mots communs.',
      'Two setup checks raised an issue with key \'%s\'!' => 'Deux vérifications d’installation ont levé un problème avec la clé \'%s\' !',
      'Mark activities complete even if there is no outstanding need to complete them.' => 'Marquer les activités terminées même s’il n’y a pas de besoin en suspens pour les terminer.',
      'You likely enabled cluster.search without creating the index. Use the following command to create a new index.' => 'Vous avez sans doute activé cluster.search sans créer l’index. Utiliser la commande suivante pour créer un nouvel index.',
      'Username for SMTP.' => 'Nom d\'utilisateur pour SMTP.',
      'Without \'%s\', Phabricator can not test for the availability of other binaries.' => 'Sans \'%s\', Phabricator ne peut pas tester la disponibilité d’autres binaires.',
      'Skipping option "%s"; already in database config.' => 'Sauter l’option « %s » ; déjà dans la configuration en base de données.',
      'This option controls whether users can edit account email addresses and profile real names.
    If you set up Phabricator to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => 'Cette option contrôle si les utilisateurs peuvent modifier les adresses de messagerie de compte et décrire les vrais noms.
    Si vous avez installé votre Phabricator pour qu’il synchronise automatiquement les informations de compte depuis un autre système faisant autorité, vous pouvez empêcher les utilisateurs de faire ces modifications pour être sûr que les informations restent cohérentes entre les deux systèmes.',
      'MySQL is in ONLY_FULL_GROUP_BY mode (on host "%s"), but using this mode is strongly discouraged.' => 'MySQL est en mode ONLY_FULL_GROUP_BY (sur l’hôte « %s »), mais utiliser ce mode est fortement déconseillé.',
      'The directory for local repositories (%s) does not exist, or is not readable by the webserver. Phabricator uses this directory to store information about repositories. If this directory does not exist, create it:
    %s
    If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => 'Le répertoire pour les dépôts locaux (%s) n’existent pas, ou n’est pas lisible par le serveur web. Phabricator utilise ce répertoire pour stocker des informations sur les dépôts. Si ce répertoire n’existe pas, créez-le :
    %s
    Si ce répertoire existe, le rendre lisible par le serveur web. Vous pouvez aussi modifier la configuration ci-dessous pour utiliser un autre répertoire.',
      'Customize the logo image and text which appears in the main site header:
      - **Logo Image**: Upload a new 80 x 80px image to replace the Phabricator logo in the site header.
      - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //Phabricator//.
    ' => 'Personnaliser l’image du logo et le texte qui apparaît dans l’entête du site principal :
      - **Image du logo** : Téléverser une nouvelle image 80 x 80px pour remplacer le logo de Phabricator dans l’entête du site.
      - **Texte de signature** : Choisir un nouveau texte à afficher à côté du logo. Par défaut, l’entête affiche //Phabricator//.',
      'The Phabricator daemons are not running, so Phabricator will not be able to perform background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds).
    Use %s to start daemons. See %s for more information.' => 'Les démons de Phabricator ne fonctionnent pas, donc Phabricator ne pourra pas effectuer de traitement en tâche de fond (comprenant l’envoi de courriel, la reconstruction des index de recherche, l’importation de validations, le nettoyage des anciennes données, et l’exécution de constructions).
    Utilisez %s pour lancer les démons. Voyez %s pour plus d’information.',
      '%s Stats' => 'Statistiques %s',
      'The minimum supported version of Subversion is 1.5, which was released in 2008.' => 'La version minimale supportée de Subversion est 1.5, qui a été livrée en 2008.',
      'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.' => 'Votre limite mémoire PHP est configurée de telle sorte qu’elle peut vous empêcher de télécharger de gros fichiers ou de gérer de grandes requêtes.',
      'The system user.' => 'L\'utilisateur du système.',
      'Reload Page' => 'Recharger la page',
      'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.' => 'Nombre maximal de démons du gestionnaire de tâches à lancer à la fois. L’augmenter peut accroître le débit maximal de la file de tâches. La réserve sera automatiquement réduite si elle n\'est pas utilisée.',
      'Phabricator now automatically selects the best available MySQL implementation.' => 'Phabricator sélectionne dorénavant automatiquement la meilleure implémentation disponible de MySQL.',
      'Force users to connect via HTTPS instead of HTTP.' => 'Forcer les utilisateurs à se connecter via HTTPS au lieu de HTTP.',
      'Large Files' => 'Gros fichiers',
      'Mark a manual upgrade activity as complete.' => 'Marquer une activité de mise à jour manuelle comme terminée.',
      '%s Not Set' => '%s non fixé',
      'This configuration option has been replaced with a modular handler. See T9346.' => 'Cette option de configuration a été remplacée par un gestionnaire modulaire. Voyez T9346.',
      'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)' => 'La valeur pour l’option « %s » (de type « %s ») doit être spécifiée en JSON, mais l’entrée n’a pas pu être décodée (avez-vous oublié de mettre une chaîne entre guillemets?).',
      'Configuration option \'%s\' has invalid value and was restored to the default: %s' => 'L’option de configuration \'%s\' a une valeur non valide et a été restaurée avec la valeur par défaut : %s',
      'Don\'t minify static resources.' => 'Ne réduisez pas les ressources statiques.',
      'To update these %d value(s), edit your PHP configuration file, located here:' => 'Pour mettre à jour ces %s valeurs, modifiez votre fichier de configuration PHP, situé ici :',
      'Password for SMTP.' => 'Mot de passe pour SMTP.',
      'Collation' => 'Collation',
      'Replication' => 'Réplication',
      'The HTTP response code or process exit code.' => 'Le code de réponse HTTP ou le code de sortie du processus.',
      'Obsolete; use standard rendering events instead.' => 'Obsolète ; utiliser plutôt les événements de rendu standard.',
      'Local Disk Storage' => 'Stockage sur disque local',
      'The configuration option \'%s\' is not recognized. It may be misspelled, or it might have existed in an older version of Phabricator. It has no effect, and should be corrected or deleted.' => 'L’option de configuration \'%s\' n’est pas reconnue. Elle est peut-être mal écrite, ou peut avoir existé dans une ancienne version de Phabricator. Elle n’a pas d’effet, et doit être corrigée ou supprimée.',
      'Issue' => 'Problème',
      'Configuration Guide: Configuring a File Domain' => 'Guide de configuration : configurer un domaine de fichiers',
      'Activate DarkConsole on every page.' => 'Activer DarkConsole sur chaque page.',
      'Enable verbose error reporting and disk reads.' => 'Activer le rapport d’erreur verbeux et les lectures disque.',
      'Too many arguments: expected one key and one value.' => 'Trop d\'arguments: attendus une clé et une valeur.',
      'Settings History' => 'Historique des préférences',
      'Use specific domain' => 'Utiliser un domaine spécifique',
      'MySQL is not in strict mode (on host "%s"), but using strict mode is strongly encouraged.' => 'MySQL n’est pas en mode strict (sur l’hôte « %s »), mais utiliser le mode strict est fortement recommandé.',
      'Opcode' => 'Opcode',
      'To update these %d value(s), edit your PHP configuration file.' => 'Pour mettre à jour ces %s valeurs, modifiez votre fichier de configuration PHP.',
      'Enable Recaptcha' => 'Activer Recaptcha',
      'Prefix cookie with "%s"' => 'Préfixer les témoins avec « %s »',
      'Migrated option "%s" from file to database config.' => 'Option « %s » migrée du fichier vers la configuration de la base de données.',
      'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that Phabricator imports or manages. This option is new and experimental.' => 'Spécifier un utilisateur système avec lequel exécuter les démons. Principalement, cet utilisateur sera le propriétaire des copies de travail de tout dépôt que Phabricator importe ou gère. Cette option est nouvelle et expérimentale.',
      'PHP Documentation' => 'Documentation PHP',
      'Your webserver produced an unexpected response.' => 'Votre serveur web a retourné une réponse inattendue.',
      'Phabricator now automatically discovers available search engines at runtime.' => 'Phabricator découvre maintenant automatiquement les moteurs de recherche au moment de l\'exécution.',
      'Unable to determine the version number of "%s".' => 'Impossible de déterminer le numéro de version de « %s ».',
      'Config key "%s" is of type "%s". Specify it in JSON.' => 'La clé de configuration « %s » est de type « %s ». La spécifier en JSON.',
      'Cluster: Databases' => 'Groupement : bases de données',
      'No Messages' => 'Pas de message',
      'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.' => 'L’élément de bas de page avec l’index « %s » n’est pas valide : chaque élément doit être un dictionnaire décrivant un élément de bas de page.',
      'None of the caches on this page can be cleared.' => 'Aucun des caches de cette page ne peut être vidé.',
      'Hashed with other inputs to generate CSRF tokens.' => 'Haché avec d’autres entrées pour générer des jetons CSRF.',
      'Amazon SES Access Key Not Set' => 'Clé d’accès à Amazon SES non définie',
      'Require email verification before a user can log in.' => 'Requiert une vérification de l\'adresse courriel avant qu\'un utilisateur puisse se connecter.',
      'Customized' => 'Personnalisé',
      'Master' => 'Maître',
      'Sets the default color scheme of Phabricator.' => 'Mettre le schéma de couleur par défaut de Phabricator.',
      'A Troublesome Encounter!' => 'Une rencontre problématique !',
      'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => 'L’algorithme d’indexation pour l’index de recherche en plein texte a été mis à jour et l’index doit être reconstruit. Jusqu’à ce que vous ayez reconstruit l’index, la recherche globale (et toute autre recherche en plein texte) ne fonctionneront pas correctement.',
      'Maximum taskmaster daemon pool size.' => 'Taille maximale de la réserve du démon du gestionnaire de tâches.',
      'Replica' => 'Copie',
      'Use Public Replies (Less Secure)' => 'Utiliser les réponses publiques (moins sécurisé)',
      'MySQL password to use when connecting to the database.' => 'Mot de passe MySQL à utiliser lors de la connexion à la base de données.',
      'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'' => 'Si une variable n’est pas disponible (par exemple, %%m apparaît dans le format du fichier mais la requête n’est pas une requête Conduit), elle sera rendue comme \'-\'',
      'Hashed with other inputs to generate mail tokens.' => 'Haché avec d’autres entrées pour générer des jetons de courriel.',
      'You can find more information about configuring OPCache in the %s.' => 'Vous pouvez trouver plus d’information sur la configuration de OPCache dans le %s.',
      'Set a string Phabricator should use to prefix cookie names.' => 'Mettre une chaîne que Phabricator doit utiliser pour préfixer les noms de cookie.',
      'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to Phabricator, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'Si ces commandes ne fonctionnent pas, essayez Google. Le processus d’installer des extensions PHP n’est pas spécifique à Phabricator, et toute instruction que vous pouvez trouver pour les installer sur votre système devrait fonctionner. Sur Mac OS X, vous pouvez essayer Homebrew.',
      'Database Status' => 'État de la base de données',
      'Configure SMS.' => 'Configurer les SMS.',
      'Database host "%s" is using the builtin stopword file for building search indexes. This can make Phabricator\'s search feature less useful.
    Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.
    To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.
    To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:
    %s
    (You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'L’hôte de base de données « %s » utilise le fichier de mots à ignorer intégré pour construire les index de recherche. Cela peut rendre la fonctionnalité de recherche de Phabricator moins utile.
    Les mots à ignorer sont les mots communs qui ne sont pas indexés et ne donc peuvent pas être recherchés. Le fichier de mots à ignorer par défaut a environ cinq cents mots, comprenant divers mots que vous voudrez peut-être rechercher, comme \'various\', \'likely\', \'wish\', et \'zero\'.
    Pour rendre la recherche plus utile, vous pouvez utiliser un autre fichier de mots à ignorer avec moins de mots. À la place, si vous n’êtes pas concerné par la recherche de mots communs, vous pouvez ignorer cet avertissement. Si vous prévoyez plus tard de configurer Elasticsearch, vous pouvez aussi ignorer cet avertissement : ce fichier de mots à ignorer n’affecte que les index de plein texte de MySQL.
    Pour choisir un autre fichier de mots à ignorer, ajoutez cela à votre fichier %s (dans la section %s) et puis redémarrez %s :
    %s
    (Vous pouvez aussi utiliser un fichier différent, si vous préférez. Le fichier suggéré ci-dessus contient environ cinquante des mots anglais les plus courants.)
    Au final, lancez cette commande pour reconstruire les index en utilisant les nouvelles règles :
    %s',
      'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s' => 'La valeur pour l’option « %s » (de type « %s ») doit être spécifiée en JSON, mais l’entrée n’a pas pu être décodée : %s',
      'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.' => 'L’hôte de la base de données « %s » a un état de grappe configuré qui est en conflit avec l’état de cet hôte (« %s »). Lancez `bin/storage partition` pour valider l’état local dans la grappe. Cet hôte peut avoir démarré avec une configuration périmée.',
      'PHP OPCache Documentation' => 'Documentation OPCache de PHP',
      'Largest' => 'Le plus grand',
      'This option allows you to stop Phabricator from sending any data to external services. Among other things, it will disable email, SMS, repository mirroring, and HTTP hooks.
    This option is intended to allow a Phabricator instance to be exported, copied, imported, and run in a test environment without impacting users. For example, if you are migrating to new hardware, you could perform a test migration first, make sure things work, and then do a production cutover later with higher confidence and less disruption. Without this flag, users would receive duplicate email during the time the test instance and old production instance were both in operation.' => 'Cette option vous permet d’arrêter l’envoi par Phabricator de données à des services externes. Entre autres choses, cela désactivera les courriels, les SMS, la réplication de dépôt, et les accroches HTTP.
    Cette option est prévue pour permettre d’exporter, copier, importer et lancer une instance de Phabricator dans un environnement de test sans impacter les utilisateurs. Par exemple, si vous migrez vers un nouveau matériel, vous pouvez effectuer d’abord un test de migration, vous assurer que tout fonctionne, puis faire un transfert de production plus tard avec plus de confiance et moins de perturbation. Sans ce drapeau, les utilisateurs recevraient des courriels en double pendant la durée où l’instance de test et l’ancienne instance de production sont toutes deux opérationnelles.',
      'Set the URI that Phurl will use to share shortened URLs.' => 'Définir l’URI que Phurl utilisera pour partager les URL raccourcies.',
      'Phabricator users can make requests to other services from the Phabricator host in some circumstances (for example, by creating a repository with a remote URL or having Phabricator fetch an image from a remote server).
    This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.
    This option defines a list of netblocks which Phabricator will decline to connect to. Generally, you should list all private IP space here.' => 'Les utilisateurs de Phabricator peuvent faire des requêtes vers d’autres services depuis l’hôte de Phabricator dans certains cas (par exemple, en créant un dépôt avec une URL distante ou en faisant récupérer à Phabricator une image d’un serveur distant).
    Cela peut représenter une faille de sécurité si les services sur le même sous-réseau acceptent des commandes ou dévoilent des informations privées sur un GET HTTP non authentifié, d’après l’adresse IP source. En particulier, tous les hôtes sur EC2 ont accès à un tel service.
    Cette option définit une liste de blocs réseau auxquels Phabricator refusera de se connecter. En général, vous devez lister ici tous les espaces IP privés.',
      'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.' => 'Votre version de MySQL (sur l’hôte de base de données « %s ») ne supporte pas la configuration d’un fichier de mots à éviter. Vous ne pourrez pas trouver des résultats de recherche pour les mots communs.',
      '%s at %s' => '%s à %s',
      'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'La configuration de votre PHP a sélectionné un fuseau horaire invalide. Sélectionnez un fuseau horaire valide.',
      '%s deleted this configuration entry (again?).' => '%s a supprimé cette entrée de configuration (de nouveau ?).',
      'Unresolved Setup Issues' => 'Problèmes d’installation non résolus',
      'PHP 7.0 Not Supported' => 'PHP 7.0 non supporté',
      'Server Timezone Not Configured' => 'Fuseau horaire du serveur not configuré',
      'The following regex is malformed and cannot be used: %s' => 'L\'expression régulière suivante est mal écrite et ne pourra pas être utilisée : %s',
      'Default "From" address.' => 'Adresse « De » par défaut.',
      'Use the %s to manage installed applications.' => 'Utiliser le %s pour gérer des applications installées.',
      'Individual application reply handler domains have been removed. Configure a reply domain with "%s".' => 'Les domaines de gestionnaire de réponse à l’application individuelle ont été supprimés. Configurer un domaine de réponse avec « %s ».',
      'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. Phabricator needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.
    PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.
    (Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)
    The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit Phabricator process memory.
    You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'Quand vous téléchargez un fichier par glisser-déposer ou par l’API, les morceaux doivent être conservés en mémoire avant d’être écrits sur un stockage permanent. Phabricator a besoin de mémoire disponible pour stocker ces morceaux pendant leur téléchargement, mais PHP est actuellement configuré pour limiter drastiquement la mémoire disponible.
    Les processus PHP ont actuellement très peu de mémoire libre disponible (%s). Pour travailler bien, les processus doivent avoir au moins %s.
    (Notez que l’application elle-même doit aussi tenir dans la mémoire disponible, donc toute la mémoire sous la limite n’est pas disponible pour exécuter les charges de travail.)
    La manière la plus facile de résoudre ce problème est de mettre %s à %s dans votre configuration PHP, pour désactiver la limite mémoire. Il y a en général peu ou pas d’intérêt à utiliser cette option pour limiter la mémoire de traitement de Phabricator.
    Vous pouvez aussi augmenter la limite ou ignorer ce problème et accepter de rencontrer des soucis en téléchargeant de gros fichiers et en traitant de grosses requêtes.',
      'Application configuration class.' => 'Classe de configuration de l’application.',
      'Preflight' => 'Avant-vol',
      'Install these %d PHP extension(s):' => 'Installer ces %s extensions PHP :',
      'Missing \'%s\' Binary' => 'Binaire \'%s\' manquant',
      'Charset' => 'Jeu de caractères',
      'The framable public feed is no longer supported.' => 'Le fil public pouvant être encadré n’est plus supporté.',
      'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. Phabricator can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'Point de terminaison S3 explicite. Cela devrait être le point de terminaison qui correspond à la région que vous avez sélectionnée dans `amazon-s3.region`. Phabricator ne peut pas déterminer automatiquement le bon point de terminaison parce que certains emplacements de point de terminaison sont irréguliers.',
      'Phabricator now always sends transaction mail with "Precedence: bulk" to improve deliverability.' => 'Phabricator envoie maintenant toujours un courriel de transaction avec « Precedence:bulk » pour améliorer la capacité de livraison.',
      '%s Day(s)' => '%s jour(s)',
      'No search servers are configured.' => 'Aucun serveur de recherche n’est configuré.',
      'This key is too long for utf8mb4.' => 'Cette clé est trop longue pour utf8mb4.',
      'Expected Character Set' => 'Jeu de caractères attendu',
      'Repository Servers' => 'Serveurs de dépôt',
      'Format for the HTTP access log. Use `%s` to set the path. Available variables are:' => 'Format pour le journal d’accès HTTP. Utiliser `%s` pour définir le chemin. Les variables disponibles sont :',
      'Skipping obsolete option: %s' => 'Saut de l’option obsolète : %s',
      'This schema can use a better collation.' => 'Ce schéma peut utiliser une meilleure collation.',
      'Mailgun domain name. See %s.' => 'Nom de domaine de Mailgun. Voir %s.',
      'Install Pygments to Improve Syntax Highlighting' => 'Installer Pygments pour améliorer la mise en évidence de la syntaxe.',
      'Sessions now expire and are garbage collected rather than having an arbitrary concurrency limit.' => 'Les sessions expirent désormais et sont prises en charge par le ramasse-miettes, plutôt que d’avoir une limite arbitraire en temps.',
      'Logo Image' => 'Image du logo',
      'The environmental variable %s is empty. Phabricator will not be able to execute some commands.' => 'La variable d’environnement %s est vide. Phabricator ne pourra pas exécuter certaines commandes.',
      'Really Clear Cache' => 'Vraiment vider le cache',
      'Stop Phabricator from sending any email, etc.' => 'Empêcher Phabricator d\'envoyer des courriels, etc.',
      'Unexpected \'%s\' Behavior' => 'Comportement \'%s\' inattendu',
      'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.
    For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.
    You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.
    To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:
    %s
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'L’hôte de base de données « %s » est configuré pour utiliser la longueur de mot minimale par défaut en construisant les index de recherche, qui est 4. Cela veut dire que les mots qui ne font que 3 caractères ne seront pas indexés et ne pourront pas être recherchés.
    Par exemple, vous ne pourrez pas trouver de résultats de recherche pour des mots comme \'SMS\', \'web\', ou \'DOS\'.
    Vous pouvez modifier ce paramètre à 3 pour permettre d’indexer ces mots. Sinon, vous pouvez ignorer cet avertissement si rechercher des mots de trois lettres ne vous concerne pas. Si vous prévoyez de configurer ultérieurement Elasticsearch, vous pouvez aussi ignorer cet avertissement : il n’affecte que la recherche en plein texte MySQL.
    Pour réduire la longueur minimale de mot à 3, ajoutez cela à votre fichier %s (dans la section %s) puis redémarrez %s :
    %s
    Enfin, lancez cette commande pour reconstruire les index en utilisant les nouvelles règles :
    %s',
      'Enable HTTP Strict Transport Security (HSTS).' => 'Activer la Sécurité de Transport HTTP Stricte (HSTS).',
      'Users can configure a URI pattern to open files in a text editor. The URI must use a protocol on this whitelist.' => 'Les utilisateurs peuvent configurer un modèle d’URI pour ouvrir les fichiers dans un éditeur de texte. L’URI doit utiliser un protocole dans cette liste blanche.',
      'Config' => 'Configuration',
      'Retention Policy' => 'Politique de rétention',
      'This configuration option is unknown. It may be misspelled, or have existed in a previous version of Phabricator.' => 'Cette option de configuration est inconnue. Elle est peut-être mal écrite, et a existé dans une version précédente de Phabricator.',
      'HTTP Basic Auth Not Configured' => 'Authentification HTTP basique non configurée',
      'Whitelist 1.2.*.*' => 'Liste blanche 1.2.*.*',
      'Highlight httpd.conf as "apacheconf".' => 'Mettre en surbrillance httpd.conf comme « apacheconf ».',
      'Database Value' => 'Valeur de base de données',
      'On database host "%s", the global %s is set to %s. It is strongly encouraged that you disable this mode when running Phabricator.
    With %s enabled, MySQL rejects queries for which the select list or (as of MySQL 5.0.23) %s list refer to nonaggregated columns that are not named in the %s clause. More importantly, Phabricator does not work properly with this mode enabled.
    You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to change the %s in your %s file (in the %s section) and then restart %s:
    %s
    (Note that if you run other applications against the same database, they may not work with %s. Be careful about enabling it in these cases and consider migrating Phabricator to a different database.)' => 'Sur l’hôte de base de données « %s », la variable globale %s est mise à %s. Il est fortement recommandé de désactiver ce mode en lançant Phabricator.
    Avec %s activé, MySQL rejette les requêtes pour lesquelles la liste de sélection ou la liste %s (à partir de MySQL 5.0.23) fait référence à des colonnes non agrégées qui ne sont pas nommées dans la clause %s. Plus important, Phabricator ne fonctionne pas proprement avec ce mode activé.
    Vous pouvez trouver plus d’information sur ce mode (et comment configurer cela) dans le manuel de MySQL. En général, il suffit de modifier le %s dans votre fichier %s (dans la section %s) et puis relancer %s :
    %s
    (Notez que si vous lances d’autres applications sur la même base de données, elles ne fonctionneront pas avec %s. Faites attention en l’activant dans ces cas-là et envisagez de migrer Phabricator vers une autre base de données.)',
      'Configure TLS or SSL for SMTP.' => 'Configurer TLS ou SSL pour SMTP.',
      'US Mountain (MDT)' => 'Montagne des USA (MDT)',
      'This option has been replaced with `ui.logo`, which provides more flexible configuration options.' => 'Cette option a été remplacée par `ui.logo`, qui fournit des options de configuration plus flexibles.',
      'Rebuild Search Index' => 'Reconstruire l’index de recherche',
      'Learn More: Upstream Discussion' => 'En savoir plus : Discussion en amont',
      '%s Configuration' => '%s Configuration',
      'Real' => 'Réel',
      'Launch daemons in \'verbose\' mode by default.' => 'Lancer les démons en mode \'verbose\' par défaut.',
      'Partition: %s' => 'Partition: %s',
      'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => 'C’est une liste forcée d’expressions régulières qui vous permet de choisir quels fichiers de langue sont surlignés. Si vos projets ont certaines règles sur les noms de fichier ou utiliser des extensions de langue inhabituelles ou ambiguës, vous pouvez créer une correspondance ici. C’est un dictionnaire ordonné d’expressions régulières qui seront vérifiées avec le nom du fichier. Elle doivent correspondre soit à une langue explicite sous forme de valeur de chaîne, soit à un index numérique dans les groupes capturés sous forme d’entier.',
      'Options for Phurl.' => 'Options pour Phurl',
      'IMPORTANT: The upstream does not provide support for prototype applications.
    Phabricator includes prototype applications which are in an **early stage of development**. By default, prototype applications are not installed, because they are often not yet developed enough to be generally usable. You can enable this option to install them if you\'re developing Phabricator or are interested in previewing upcoming features.
    To learn more about prototypes, see [[ %s | %s ]].
    After enabling prototypes, you can selectively uninstall them (like normal applications).' => 'IMPORTANT: Le flux amont ne fournit pas de support pour les applications prototype.
    Phabricator inclut des applications prototype qui sont dans un **état précoce de développement**. Par défaut, les applications prototype ne sont pas installées, parce qu’elles ne sont souvent pas encore suffisamment développées pour être utilisables. Vous pouvez activer cette option pour les installer si vous développez Phabricator ou êtes intéressé par un aperçu des fonctionnalités à venir.
    Pour en savoir plus sur les prototypes, voir [[ %s | %s ]].
    Après avoir activé les prototypes, vous pouvez les désinstaller unitairement (comme des applications normales).',
      'For conduit, the Conduit method which was invoked.' => 'Pour un conduit, la méthode Conduit qui a été invoquée.',
      'The configured PATH includes a component which is not usable. Phabricator will be unable to find or execute binaries located here:
    %s
    The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => 'Le PATH configuré inclut un composant qui n’est pas utilisable. Phabricator ne pourra pas trouver ou exécuter les binaires situés ici :
    %s
    Le compte utilisateur sous lequel tourne le serveur web doit pouvoir lire tous les répertoires dans PATH afin de les utiliser.',
      'The configuration option \'%s\' is not set.' => 'L’option de configuration \'%s\' n’est pas positionnée.',
      'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see http://recaptcha.net/' => 'Activer recaptcha pour demander aux utilisateurs de résoudre les captchas après quelques tentatives de connexion en échec. Cela gêne les attaques par force brute sur les mots de passe utilisateur. Pour plus d’information, voir http://recaptcha.net/',
      'Sync' => 'Synchro',
      'Stop Before HTTP Redirect' => 'Arrêter avant la redirection HTTP',
      'Toggle %s-based compression for some caches.' => 'Basculer la compression basée sur %s pour certains caches.',
      'Developer / Debugging' => 'Développeur / Débogage',
      'Remove PHP %s' => 'Supprimer PHP %s',
      'Missing' => 'Manquant',
      'Classes must match to compare schemata!' => 'Les classes doivent correspondre pour comparer les schemata !',
      'Edit These Settings' => 'Modifier ces paramètres',
      'Elasticsearch Index Not Found' => 'Index de Elasticsarch non trouvé',
      'Unit test value.' => 'Valeur de test unitaire.',
      'A daemon is running as user %s, but daemons should be running as %s.
    Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.' => 'Un démon s’exécute avec l’utilisateur %s, mais les démons doivent s’exécuter avec %s.
    Ajuster le paramètre de configuration %s ou redémarrer les démons. Les démons doivent essayer de s’exécuter avec le bon utilisateur en redémarrant.',
      'Missing Key' => 'Clé manquante',
      'Expected Nullable' => 'Possiblement nul attendu',
      'Amazon SES is selected as the mail adapter, but no SES endpoint is configured. Provide an SES endpoint or choose a different mail adapter.' => 'Amazon SES est sélectionné comme adaptateur de courriel, mais aucun point de terminaison SES n’est configuré. Fournir un point de terminaison SES ou choisir un adaptateur de courriel différent.',
      'Disable SSH log.' => 'Désactiver le journal SSH.',
      'Current Settings' => 'Paramètres actuels',
      'No databases have any issues.' => 'Aucune base de données n’a de problème.',
      'Trace mode' => 'Mode de trace',
      'Option "%s" is of type "%s", but the configured value is not an integer.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas un entier.',
      'Notifications no longer have a dedicated debugging mode.' => 'Les notifications n’ont plus de mode de débogage dédié.',
      'Daemon Running as Wrong User' => 'Démon s’exécutant avec le mauvais utilisateur',
      'Extending Phabricator' => 'Extension de Phabricator',
      'You enabled Elasticsearch but the index does not exist.' => 'Vous avez activé Elasticsearch mais l\'index n\'existe pas.',
      '%s Not Found' => '%s non trouvé',
      'Phabricator PHP 7 Compatibility Information' => 'Information de compatibilité PHP 7 de Phabricator',
      'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.' => 'Votre configuration `%s` contient un numéro de port, mais cette utilisation est obsolète. À la place, mettre le numéro de port dans `%s`.',
      'Elasticsearch Index Schema Mismatch' => 'Non correspondance du schéma d’index de Elasticsearch',
      'Maniphest is currently configured with deprecated policy settings which will be removed in a future version of Phabricator.' => 'Maniphest est actuellement configuré avec des paramètres de politique obsolète qui seront supprimés dans une prochaine version de Phabricator.',
      'Column has Wrong Autoincrement' => 'La colonne a un mauvais incrément automatique',
      'Configure PHPMailer.' => 'Configurer PHPMailer.',
      'Memory Limit Restricts File Uploads' => 'La taille mémoire restreint les téléchargements de fichiers',
      'Cache Entries' => 'Entrées du cache',
      'Unknown column type "%s"!' => 'Type de colonne « %s » inconnu !',
      'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.' => 'L’emplacement configuré pour stocker les fichiers téléchargés sur le disque (« %s ») n’existe pas, ou ne peut pas être lu ou écrit. Vérifier que le répertoire existe et peut être lu et écrit par le serveur web.',
      'Notifications User Guide: Setup and Configuration' => 'Guide utilisateur des notifications : Installation et configuration',
      'Config option \'%s\' is invalid. The URI must start with %s\' or \'%s\'.' => 'L’option de configuration \'%s\' n’est pas valide. L’URI doit commencer par \'%s\' ou \'%s\'.',
      'No Herald Hints' => 'Aucun conseil avant-coureur',
      'Key is Too Long' => 'La clé est trop longue',
      '\'%s\' Missing' => '\'%s\' manquant',
      'Configure database read replicas.' => 'Configurer la base de données pour lire les copies répliquées.',
      'Elasticsearch Misconfigured' => 'Elasticsearch mal configuré',
      'Amazon S3 is Only Partially Configured' => 'Amazon S3 n\'est que partiellement configuré',
      'Phabricator no longer supports global customization of monospaced fonts.' => 'Phabricator ne supporte plus la personnalisation globale de polices à espacement fixe.',
      '<none>' => '<none>',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).' => 'Le composant PATH \'%s\' (qui est traduit dans le chemin absolu \'%s\') n’est pas utilisable parce qu’il ne peut pas être traversé (son bit de droit \'%s\' n’est pas mis).',
      'SMS' => 'SMS',
      'No Repositories' => 'Aucun dépôt',
      '%s deleted this configuration entry.' => '%s a supprimé cette entrée de configuration.',
      'Mail is now always delivered by the daemons.' => 'Le courriel est maintenant toujours envoyé par les démons.',
      'Request has bad "Host" header.' => 'Requête avec un mauvais entête « Host ».',
      'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.' => 'Cette version de Subversion a un bogue où `%s` ne fonctionne pas pour les fichiers ajoutés dans rN (Problème Subversion #2873), corrigé en 1.7.2.',
      'Elasticsearch is not reachable as configured.' => 'Elasticsearch n’est pas atteignable tel qu’il est configuré.',
      'Cluster Repository Status' => 'État du dépôt de grappe',
      'Key has Wrong Uniqueness' => 'La clé a une mauvaise unicité',
      'Determines whether or not basic account information is editable.' => 'Détermine si les informations de base du compte sont ou non modifiables.',
      'Get a local configuration value.' => 'Obtenir une valeur de configuration locale.',
      'The base URI for this install is not configured. Many major features will not work properly until you configure it.' => 'L’URI de base pour cette installation n’est pas configurée. Beaucoup de fonctionnalités majeures ne fonctionneront pas correctement jusqu’à ce que vous la configuriez.',
      'Unexpected \'diff\' Behavior' => 'Comportement de \'diff\' inattendu',
      'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.' => 'Le binaire \'%s\' de ce système a un comportement inattendu : il devrait se terminer avec un code d’erreur différent de zéro en recevant des fichiers différents, mais ce n’est pas le cas.',
      'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.' => 'Vous pouvez ignorer un problème si vous ne voulez pas le corriger, ou si vous prévoyez de le faire plus tard. Les problèmes ignorés n’apparaîtront pas sur chaque page, mais seront encore affichés dans la liste des problèmes ouverts.',
      'Enter value in JSON.' => 'Saisir la valeur en JSON.',
      'Migrated option "%s" from file to local config.' => 'Option « %s » migrée du fichier vers la configuration locale.',
      'Shenanigans' => 'Bidouilles',
      'The path for local repositories does not exist, or is not readable by the webserver.' => 'Le chemin pour les dépôts locaux n’existe pas, ou ne peut pas être lu par le serveur web.',
      'Verbose mode' => 'Mode verbeux',
      'Config \'%s\' Invalid' => 'Configuration \'%s\' non valide',
      'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.' => 'Un hôte de base de données (« %s ») et cet hôte web (« %s ») ne concordent pas sur l’heure actuelle avec  plus de soixante secondes (décalage absolu de %s secondes). Vérifier que l’heure actuelle est bien définie partout.',
      '30 characters' => '30 caractères',
      'Never suppress email' => 'Ne jamais supprimer les courriels',
      'No Recipient Hints' => 'Aucun conseil de destinataire',
      'US West (Oregon)' => 'Ouest USA (Oregon)',
      'Sample 0.1%% of requests.' => 'Échantillonner 0,1%% des requêtes.',
      'No Issues' => 'Aucun problème',
      'No Caches to Reset' => 'Aucun cache à réinitialiser',
      'No Base URI' => 'Aucune URI de base',
      'Really Clear Cache?' => 'Vraiment vider le cache ?',
      'Allow Any Host (Insecure!)' => 'Autoriser tout hôte (non sécurisé !)',
      'Host: %s' => 'Hôte: %s',
      'Amazon SES Endpoint Not Set' => 'Le point de terminaison SES de Amazon N\'est PAS défini',
      'Local Version' => 'Version locale',
      'Resolved Issue' => 'Problème résolu',
      'Schema Status' => 'Etat du schema',
      'Cache Storage' => 'Mémoire cache',
      'Data Type' => 'Type de données',
      'Allow suppressing email from certain users' => 'Autoriser la supression des adresses courriels de certains utilisateurs',
      'Better Character Set Available' => 'Un meilleur ensemble de caractères est disponible',
      'Small MySQL "%s"' => 'Petit MySQL "%s"',
      'Value for option "%s" must be an integer.' => 'La valeur de l\'option "%s" doit être entière.',
      'Automatic' => 'Automatique',
      'Connection Error' => 'Erreur de connexion',
      'Options relating to authentication.' => 'Options relatives à l\'identification.',
      'Migrating file source...' => 'Fichier source en cours de migration...',
      'Autoincrement' => 'Auto-incrementation',
      'Dark' => 'Sombre',
      'GZip Compression May Not Be Enabled' => 'La compression GZip n\'est peut-être pas activée',
      'Indefinite' => 'Non défini',
      'Mail is normally encoded in `8bit`, which works correctly with most MTAs. However, some MTAs do not work well with this encoding. If you\'re having trouble with mail being mangled or arriving with too many or too few newlines, you may try adjusting this setting.
    Supported values are `8bit`, `quoted-printable`, `7bit`, `binary` and `base64`.' => 'Le courrier est normalement encodé en `8bit`, ce qui fonctionne correctement avec la plupart des MTAs. Mais certains MTAs on des problèmes avec cet encodage. Si vous observez des perturbations avec des courriels illisibles ou arrivant avec trop ou trop peu de lignes, vous pourriez avoir à ajuster cette valeur.
    Les valeurs supportées sont `8bit`, `quoted-printable`, `7bit`, `binary` et `base64`.',
      'Access key for Amazon SES.' => 'Clé d’accès pour Amazon SES.',
      'You can rebuild the search index while Phabricator is running.' => 'Vous pouvez reconstruire l\'index de recherche pendant l\'exécution de Phabricator.',
      'Auth Application' => 'Application Auth',
      '%s.%s (%s)' => '%s.%s (%s)',
      'Use HSTS' => 'Utilisez HSTS',
      'Missing Sendmail' => 'Sendmail absent',
      'This option is not recognized. It may be misspelled.' => 'Cette option n\'est pas reconnue. Veuillez vérifier l\'orthographe.',
    );
  }

}
