<?php

final class PhabricatorConfigFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Review and modify configuration settings.' => 'Réviser et modifier les paramètres de configuration.',
      'Improve security by configuring an alternate file domain.' => 'Améliorer la sécurité en configurant un domaine alternatif pour les fichiers.',
      'Array containing list of uninstalled applications.' => 'Tableau contenant la liste des applications non installées.',
      'Client Server' => 'Client serveur',
      'Listeners receive callbacks when interesting things occur.' => 'Les écouteurs reçoivent des rappels lorsque des événements intéressants apparaissent.',
      'Update configuration in the database instead of in local configuration.' => 'Mettre à jour la configuration dans la base de données plutôt que dans la configuration locale.',
      'Column/Key' => 'Colonne/Clé',
      'Customize the logo and wordmark text in the header.' => 'Personnaliser le logo et le texte du sigle dans l’entête.',
      'Configuring File Storage' => 'Configuration du stockage de fichiers',
      '%s / %s' => '%s / %s',
      'Address ranges of cluster hosts.' => 'Intervalles d’adresses des groupes d’hôtes.',
      'Suppress mail from maintenance users.' => 'Supprimer les courriels des utilisateurs de maintenance.',
      'Memory Usage' => 'Utilisation de la mémoire',
      'Impersonating users over the API is no longer supported.' => 'Utiliser l’API en se faisant passer pour un utilisateur n’est plus pris en charge.',
      'Table' => 'Tableau',
      'Ignore Setup Issue' => 'Ignorer le problème d’installation',
      'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.
    You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => 'Cette option vous permet d’activer DarkConsole sur chaque page, même pour les utilisateurs non connectés. Ce n’est vraiment utile que si vous devez déboguer quelque chose sur une page hors connexion. Vous ne devriez pas activer cette option en production.
    Vous devez activer DarkConsole en définissant « %s » avant que cette option ait un quelconque effet.',
      'Repository %s has unreplicated changes (for %s).' => 'Le dépôt %s a des modifications non répliquées (pour %s).',
      'Phabricator now automatically discovers available storage engines at runtime.' => 'Phabricator découvre maintenant de façon automatique les moteurs de stockage disponibles à l’exécution.',
      'The controller or workflow which handled the request.' => 'Le contrôleur ou le processus de travail qui a géré la requête.',
      'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".' => 'L’option « %s » est de type « %s », mais la valeur à l’indice « %s » de la liste n’est pas « true » (vrai).',
      'Applications application' => 'Application des applications',
      'The namespace that Phabricator databases should use.' => 'L’espace de noms que les bases de données de Phabricator doivent utiliser.',
      '%s created this configuration entry.' => '%s a créé cette entrée de configuration.',
      'You have enabled pygments and the %s script is available, but does not seem to work.' => 'Vous avez activé <em>pygments</em> et le script %s est disponible, mais cela ne semble pas fonctionner.',
      'This column is missing a type specification.' => 'Cette colonne n’a pas de spécification de type.',
      'Configure the Phabricator UI, including colors.' => 'Configurer l’IHM de Phabricator, y compris les couleurs.',
      'Column Has No Specification' => 'La colonne n’a pas de spécification',
      'Delete configuration in the database instead of in local configuration.' => 'Supprimer la configuration dans la base de données plutôt que dans la configuration locale.',
      'No Email Preferences Link' => 'Pas de lien de préférence de courriel',
      'Marked activity "%s" as completed.' => 'Activité « %s » marquée comme terminée.',
      'Configure Phabricator to run on a cluster of hosts.' => 'Configurer Phabricator pour s’exécuter sur une grappe d’hôtes.',
      'Repository %s has unreplicated changes.' => 'Le dépôt %s a des modifications non répliquées.',
      'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make Phabricator redirect HTTP requests to HTTPS.
    Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.
    IMPORTANT: Phabricator determines if a request is HTTPS or not by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run Phabricator as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.
    If you configure Phabricator in cluster mode, note that this setting is ignored by intracluster requests.' => 'Si le serveur web répond à la fois aux requêtes HTTP et HTTPS alors que vous voulez que les utilisateurs ne se connectent qu’avec HTTPS, vous pouvez mettre cela à « true » (vrai) pour que Phabricator redirige les requêtes HTTP vers HTTPS.
    Normalement, vous devriez configurer votre serveur pour qu’il n’accepte pas de trafic HTTP, mais ce paramètre peut être utile si vous utilisiez HTTP à l’origine et avez maintenant basculé sur HTTPS mais ne voulez pas casser les anciens liens, ou bien si votre serveur web est derrière un répartiteur de charge qui termine les connexions HTTPS alors que vous ne pouvez pas raisonnablement configurer un comportement plus granulaire au delà.
    IMPORTANT : Phabricator détermine si une requête est HTTPS ou non en examinant la variable PHP « %s ». Si vous exécutez Apache/mod_php, cela sera sans doute positionné correctement de façon automatique, mais si vous exécutez Phabricator comme CGI/FCGI (par ex., via nginx ou lighttpd), vous devez configurer votre serveur web afin qu’il passe la valeur correctement selon le type de connexion.
    Si vous configurez Phabricator en mode grappe, notez que ce paramètre est ignoré par les requêtes internes à la grappe.',
      'This version of Mercurial returns a bad exit code after a successful pull.' => 'Cette version de Mercurial renvoie un mauvais code de sortie après une sortie réussie.',
      'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %d.' => 'Le binaire « %s » sur ce système a un comportement inattendu : il devait se terminer sans code d’erreur quand on lui passe des fichiers identiques, mais il est sorti avec un code %s.',
      'No active repositories have outstanding errors.' => 'Aucun dépôt actif n’a d’erreur marquante.',
      'Usage' => 'Utilisation',
      'Rebuild Repository Identities' => 'Reconstruire les identités des dépôts',
      'Move port information from `%s` to `%s` in your config.' => 'Déplacez les informations de port de « %s » à « %s » dans votre configuration.',
      'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.' => 'Cette option ne peut pas être modifiée depuis l’IHM web. Utiliser %s pour ajuster la politique du ramasse-miettes.',
      'Better Table Engine Available' => 'Meilleur moteur de tables disponible',
      'Set a local configuration value.' => 'Définir une valeur de configuration locale.',
      'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.' => 'Le stockage de gros fichiers n’a pas été configuré, ce qui limitera la taille maximale des fichiers téléversés. Voir %s pour les instructions sur la configuration des téléversements et du stockage.',
      '%s deleted %s (again?).' => '%s a supprimé %s (à nouveau ?).',
      'Access log format.' => 'Format du journal d’accès.',
      'Phabricator sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.
    Phabricator sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.
    Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.
    (This problem can be caused by a missing "B" in your RewriteRule.)' => 'Phabricator s’est envoyé à lui-même une requête de test avec un chemin inhabituel, pour tester si votre serveur web réécrit correctement les chemins. Le chemin n’a pas été correctement transmis.
    Phabricator a envoyé une requête au chemin « %s » et s’attendait à ce que le serveur web le décode et réécrive ce chemin pour qu’il reçoive une requête pour « %s ». Il a cependant reçu à la place une requête pour « %s ».
    Vérifiez que vos règles de réécriture sont bien configurées, en suivant les instructions de la documentation. Si l’encodage de chemin ne fonctionne pas correctement, vous ne pourrez pas accéder aux fichiers avec des noms inhabituels dans les répertoires, entre autres problèmes.
    (Ce problème peut provenir d’un « B » manquant dans votre RewriteRule.)',
      'Access log location.' => 'Emplacement du fichier d’accès.',
      'Phabricator occasionally shells out to other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running Phabricator (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.
    Note that you can also put binaries in `%s` (for example, by symlinking them).
    The current value of PATH after configuration is applied is:
      lang=text
      %s' => 'Phabricator lance occasionnellement d’autres binaires sur le serveur. Un exemple en est la commande « %s », utilisée pour mettre en évidence le code écrit dans d’autres langages que PHP. Par défaut, il est supposé que ces binaires sont dans le %s de l’utilisateur exécutant Phabricator (normalement « apache », « httpd », ou « nobody »). Vous pouvez ajouter ici des répertoires supplémentaires à la variable d’environnement %s, pour le cas où ces binaires sont dans des emplacements non standards.
    Notez que vous pouvez aussi mettre des binaires dans « %s » (par exemple, en faisant un lien symbolique vers eux).
    La valeur actuelle de « PATH » après application de la configuration est :
      lang=text
      %s',
      'Your webserver is not handling GET parameters properly.' => 'Votre serveur web ne gère pas correctement les paramètres GET.',
      'Repository Errors' => 'Erreurs du dépôt',
      'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas le nom d’une classe connue. Les sélections valides sont : %s.',
      'Phabricator no longer shows reply hints in mail.' => 'Phabricator ne montre plus les conseils de réponse dans le courriel.',
      'Short' => 'Court',
      'Phabricator is not configured in cluster mode.' => 'Phabricator n’est pas configuré en mode grappe.',
      'Large File Storage Not Configured' => 'Le stockage de gros fichiers n’est pas configuré',
      'Use "bin/phd debug ..." to get a detailed daemon execution log.' => 'Utiliser « bin/phd debug ... » pour obtenir un journal détaillé d’exécution du service d’arrière-plan.',
      'Migrating file-based config to more modern config...' => 'Migration de la configuration basée sur des fichiers vers une configuration plus moderne...',
      'Phabricator sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.
    This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'Phabricator s’est envoyé à lui-même une requête de test et s’attendait à obtenir une réponse JSON simple en retour, mais la réponse avait des blancs en trop au début ou à la fin.
    Cela signifie en général que vous avez modifié un fichier et laissé des caractères blancs avant la balise d’ouverture %s ou après la balise de fermeture %s. Retirez tout espacement en excès au début et omettez de préférence les balises de fermeture.',
      'Full' => 'Plein',
      'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => 'Lancer le script de mise à jour du stockage pour mettre à jour les bases de données (l’hôte « %s » n’a pas été initialisé).',
      'Unrecognized verb: %s' => 'Verbe non reconnu : %s',
      'No REMOTE_ADDR is available, so Phabricator cannot determine the origin address for requests. This will prevent Phabricator from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'Aucun REMOTE_ADDR n’est disponible, donc Phabricator ne peut pas déterminer l’adresse d’origine pour les requêtes. Cela empêchera Phabricator d’effectuer des vérifications de sécurité importantes. Cela veut dire, le plus souvent, que vous avez une erreur dans votre script de préambule. Consultez la documentation (%s) et revérifiez que le script est bien écrit.',
      'Schemata Issues' => 'Problèmes de schémas',
      'Expected Collation' => 'Collation attendue',
      'Controls whether Phabricator sends one email with multiple recipients in the "To:" line, or multiple emails, each with a single recipient in the "To:" line.' => 'Contrôle si Phabricator envoie un courriel avec plusieurs destinataires dans la ligne « À », ou plusieurs courriels séparés avec pour chacun un unique destinataire sur la ligne « À ».',
      'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.' => 'L’option « %s » est de type « %s », mais la valeur n’est pas une liste : c’est une correspondance avec des clés non naturelles ou clairsemées.',
      'Use Normal HTTP Redirects' => 'Utiliser les redirections HTTP normales',
      'Configuration key \'%s\' is not set in %s configuration!' => 'La clé de configuration « %s » n’est pas définie dans la configuration %s !',
      'Multi-Factor Optional' => 'Multi-facteur facultatif',
      'Access Denied' => 'Accès refusé',
      'The configuration option \'%s\' has been removed. You may delete it at your convenience.
    %s' => 'L’option de configuration « %s » a été supprimée. Vous pouvez la supprimer à votre guise.
    %s',
      'Disable Pagespeed' => 'Vitesse de page désactivée',
      'Elasticsearch index exists but needs correction.' => 'Un index Elasticsearch existe mais doit être corrigé.',
      'Nullable' => 'Nul autorisé',
      'The "%s" key is set to some value other than "-1" in your PHP configuration. This can cause PHP to raise deprecation warnings during process startup. Set this option to "-1" to prevent these warnings from appearing.' => 'La clé « %s » est fixée à une valeur autre que « -1 » dans votre configuration PHP. Cela peut faire que PHP génère des avertissements d’obsolescence lors du démarrage du processus. Mettre cette option à « -1 » pour éviter que ces avertissements n’apparaissent.',
      'No "Host" Header' => 'Aucun entête « Host: »',
      'Do not install Phabricator on an instance class with burstable CPU.' => 'Ne pas installer Phabricator sur une classe d’instance avec un CPU extensible.',
      'Activity "%s" did not need to be marked as complete.' => 'L’activité « %s » ne nécessite pas d’être marquée comme terminée.',
      'The translation implementation has changed and providers are no longer used or supported.' => 'La mise en œuvre de la traduction a été modifiée et les fournisseurs ne sont plus utilisés ni pris en charge.',
      'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L’option « %s » est de type « %s », mais la valeur que vous avez fournie n’est pas une liste JSON valide. Lorsque vous définissez une option de liste depuis la ligne de commande, spécifiez la valeur en JSON. Vous devrez mettre la valeur complète entre guillemets anglais simples pour votre interpréteur de commandes (par exemple, \'["a", "b", ...]\').',
      'The minimum supported version of Mercurial is 1.9, which was released in 2011.' => 'La version minimale supportée de Mercurial est 1.9, qui a été livrée en 2011.',
      'Format for the SSH access log. Use %s to set the path. Available variables are:' => 'Format pour le journal d’accès SSH. Utiliser %s pour définir le chemin. Les variables disponibles sont :',
      'This table can use a better table engine.' => 'Cette table peut utiliser un moteur de tables plus performant.',
      'PHP post_max_size Not Configured' => 'post_max_size n’est pas configuré dans PHP',
      'Can Not Connect to MySQL' => 'Connexion impossible à MySQL',
      'Option "%s" is of type "%s", but the configured value is not a boolean.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas un booléen.',
      'Disable developer mode' => 'Désactiver le mode développeur',
      'Profile 0.1%% of all requests' => 'Profilage de 0,1 %% de toutes les requêtes',
      'This option has been replaced with the more granular option `%s`.' => 'Cette option a été remplacée par une option « %s » plus fine.',
      'Require all users to configure multi-factor authentication.' => 'Requérir que tous les utilisateurs configurent l’authentification à plusieurs facteurs.',
      'Configuration Guide: Locked and Hidden Configuration' => 'Guide de configuration : configuration verrouillée et masquée',
      'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.' => 'Cette action permet un rapport verbeux des erreurs (traces en pile, rappels d’erreur) et force les lectures sur disque des ressources statiques lors de chaque rechargement.',
      'Wrote configuration key "%s" to local storage (in file "%s").' => 'Clé de configuration « %s » écrite sur le stockage local (dans le fichier « %s »).',
      '(%s%s) %s' => '(%s%s) %s',
      'Nonreplicating Replica' => 'Copie sans réplication',
      'Run these %d command(s):' => 'Exécuter ces %s commande(s) :',
      'Pattern' => 'Motif',
      'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the Phabricator configuration value \'%s\' to specify one.' => 'Votre configuration échoue à spécifier un fuseau horaire de serveur. Vous pouvez soit définir la valeur de configuration PHP « %s » ou la valeur de configuration « %s » de Phabricator pour en spécifier une.',
      'Unknown \'%s\' Version' => 'Version « %s » inconnue',
      'Require administrators to unlock the authentication provider configuration from the CLI before it can be edited.' => 'Exiger que les administrateurs déverrouillent la configuration du fournisseur d’authentification depuis l’interface en ligne de commande, avant qu’elle puisse être modifiée.',
      'You are using an old version of MySQL (on host "%s"), and should upgrade.' => 'Vous utilisez une ancienne version de MySQL (sur l’hôte « %s ») et vous devriez la remettre à niveau.',
      'Feed Hooks Deprecated' => 'Accroches de flux obsolètes',
      'Purge Caches' => 'Vider les caches',
      'WARNING: This is a prototype option and the description below is currently pure fantasy.
    Switch Phabricator to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => 'AVERTISSEMENT : ceci est une option de prototype et la description ci-dessous est actuellement une pure fantaisie.
    Basculer Phabricator en mode de lecture seule. Dans ce mode, les utilisateurs ne pourront modifier ou supprimer aucune donnée, ni en ajouter de nouvelles. Normalement, la grappe passe dans ce mode automatiquement quand il détecte que le maître de la base de données est inatteignable, mais vous pouvez l’activer manuellement afin d’effectuer de la maintenance ou tester une configuration.',
      'Adjust %s in your PHP configuration to at least 32MB. When set to smaller value, large file uploads may not work properly.' => 'Régler %s dans votre configuration PHP à au moins 32 Mo. S’il est mis à une valeur plus petite, les téléversements de gros fichiers pourraient ne pas bien fonctionner.',
      'Show Recipient Hints' => 'Afficher les conseils de destinataire',
      'Recaptcha private key, obtained by signing up for Recaptcha.' => 'Recaptcha de la clé privée, obtenue en s’inscrivant à Recaptcha.',
      'MySQL InnoDB Engine Not Available' => 'Moteur InnoDB de MySQL non disponible',
      'Database host "%s" does not support the %s option. You will not be able to find search results for common words. You can gain access to this option by upgrading MySQL to a more recent version.
    You can ignore this warning if you plan to configure Elasticsearch later, or aren\'t concerned about searching for common words.' => 'L’hôte de base de données « %s » ne prend pas en charge l’option %s. Vous ne pourrez pas trouver de résultats de recherche pour les mots communs. Vous pouvez obtenir l’accès à cette option en mettant à niveau MySQL vers une version plus récente.
    Vous pouvez ignorer cet avertissement si vous prévoyez de configurer Elasticsearch ultérieurement, ou que vous n’êtes pas concerné par la recherche des mots communs.',
      'Proto' => 'Proto',
      'HTTP Strict Transport Security (HSTS) sends a header which instructs browsers that the site should only be accessed over HTTPS, never HTTP. This defuses an attack where an adversary gains access to your network, then proxies requests through an unsecured link.
    Do not enable this option if you serve (or plan to ever serve) unsecured content over plain HTTP. It is very difficult to undo this change once users\' browsers have accepted the setting.' => 'Sécurité de Transport Stricte de HTTP (HSTS) envoie un entête qui indique aux navigateurs que le site ne doit être accédé que via HTTPS, jamais HTTP. Cela désamorce une attaque où un adversaire obtient accès à votre réseau, puis fait des requêtes par procuration via un lien non sécurisé.
    N’activez pas cette option si vous fournissez (ou prévoyez de fournir un  jour) du contenu non sécurisé via du HTTP simple. Il est très difficile d’annuler cette modification une fois que les navigateurs de vos utilisateurs ont accepté ce paramètre.',
      '(No Value Configured)' => '(Aucune valeur configurée)',
      'Allow editing' => 'Permettre la modification',
      'Configure full-text search services.' => 'Configurer les services de recherche en plein texte.',
      'The HTTP method.' => 'La méthode HTTP.',
      'The webserver\'s host name.' => 'Le nom d\'hôte du serveur web.',
      'PHP Timezone Invalid' => 'Fuseau horaire PHP non valide',
      'Branchpoint' => 'Point de branchement',
      'Phabricator Configuration' => 'Configuration de Phabricator',
      'Integration with Recaptcha' => 'Intégration avec Recaptcha',
      'Global cap for size of generated emails (bytes).' => 'Plafond global pour la taille des courriels générés (en octets).',
      'Access Logs' => 'Journaux des accès',
      'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.' => 'Ce serveur a une mauvaise version connue de « %s » installée (« %s »). Cette version n’est pas supportée, ou contient des bogues importants ou des vulnérabilités de sécurité qui sont corrigés dans une version plus récente.',
      'Character Set' => 'Table des caractères',
      'Phabricator puts databases in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing Phabricator and using namespaces to separate multiple sandbox datasets.' => 'Phabricator met les bases de données dans un espace de noms, qui est par défaut \'phabricator\' — par exemple, la base de données de Differential est appelée \'phabricator_differential\' par défaut. Vous pouvez modifier cet espace de noms si vous le souhaitez. Normalement, vous ne devriez pas faire cela sauf si vous développez Phabricator et utilisez les espaces de nom pour séparer des ensembles de données bac à sable multiples.',
      'Formats' => 'Formats',
      'Ambiguous Leader' => 'Dirigeant ambigu',
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
      'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.' => 'Cette option a été renommée en `%s` pour mettre en évidence la nature inachevée de nombreuses applications prototype. Votre paramétrage existant a été migré.',
      'Clients' => 'Clients',
      'Expected Columns' => 'Colonnes attendues',
      'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.' => 'Les superviseurs peuvent maintenant utiliser un groupe se redimensionnant automatiquement. Vous pouvez configurer la taille du groupe avec `%s`.',
      'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.' => 'Cette configuration est verrouillée et ne peut pas être modifiée depuis l’interface web. Utiliser %s dans %s pour la modifier.',
      'Multiple %s subclasses contain an option named \'%s\'!' => 'Plusieurs sous-classes de %s contiennent une option nommée \'%s\' !',
      'Pygments should be installed and enabled to provide advanced syntax highlighting.' => 'Pygments doit être installé et activé pour fournir la mise en évidence avancée de la syntaxe.',
      'Recaptcha public key, obtained by signing up for Recaptcha.' => 'Clé publique de Recaptcha, obtenue en s’inscrivant à Recaptcha.',
      'Database Servers' => 'Serveurs de base de données',
      'Specify a configuration key to delete.' => 'Spécifier une clé de configuration à supprimer.',
      'Search Servers' => 'Rechercher les serveurs',
      'This web host ("%s") is set to a very different time than a database host "%s".' => 'Cet hôte web (« %s ») est aligné sur une heure très différente de celle d’un hôte de base de données « %s ».',
      'Send Mail To Each Recipient' => 'Envoyer un courriel à chaque destinataire',
      'The MySQL "local_infile" option is enabled. This option is unsafe.' => 'L’option MySQL « local_infile » est activée. Cette option n’est pas sécurisée.',
      'Remove Custom Logo' => 'Supprimer le logo personnalisé',
      'No notification servers are configured.' => 'Aucun serveur de notification n’est configuré.',
      '(Not Supported)' => '(Non supporté)',
      'Nonstandard port' => 'Port non standard',
      'Don\'t embed Commons videos' => 'Ne pas inclure les vidéos Commons',
      'This configuration has been removed. You can safely delete it.
    %s' => 'Cette configuration a été retirée. Vous pouvez la supprimer sans problème.
    %s',
      'Options relating to translations.' => 'Options relatives aux traductions.',
      'You have \'%s\' enabled in your PHP configuration, but Phabricator will not run in safe mode. Safe mode has been deprecated in PHP 5.3 and removed in PHP 5.4.
    Disable safe mode to continue.' => 'Vous avez \'%s\' d’activé dans votre configuration PHP, mais Phabricator ne tournera pas en mode sécurisé. Le mode sécurisé a été rendu obsolète en PHP 5.3 et supprimé en PHP 5.4.
    Désactiver le mode sécurisé pour continuer.',
      'Use Private Replies (More Secure)' => 'Utiliser les réponses privées (plus sécurisé)',
      'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'' => 'Traiter tous les fichiers \'*.x.bak\' comme \'.x\'. REMARQUE : Nous faisons correspondre le groupe 1 capturé en spécifiant la correspondance comme \'1\'',
      'Other Services' => 'Autres services',
      'Database Schemata' => 'Schémas de la base de donnée',
      'Send as User Taking Action' => 'Envoyer comme l’utilisateur prenant l’action',
      'Security options.' => 'Options de sécurité.',
      'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L’option « %s » est de type « %s », et doit être spécifiée sur la ligne de commande comme une liste de valeurs en JSON. Vous devrez peut-être mettre la valeur entre guillemets anglais dans votre interpréteur (par exemple : \'["a", "b", …]\').',
      'Expected Unique' => 'Attendu comme unique',
      'Old MySQL Version' => 'Ancienne version MySQL',
      'If you have multiple Phabricator environments (like a development/staging environment for working on testing Phabricator, and a production environment for deploying it), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'Si vous avez plusieurs environnements Phabricator (comme un environnement de développement/mise en place pour travailler sur un test de Phabricator, et un environnement de production pour le déployer), mettez ici l’URI de l’environnement de production, afin que les courriels et autres URI durables soient toujours générés avec des liens pointant sur l’environnement de production. S’il est non défini, la valeur par défaut est `%s`. La plupart des installations n’ont pas besoin de définir cette option.',
      'Configuring a Preamble Script' => 'Configuration d’un script de prétraitement',
      'Default Partition' => 'Partition par défaut',
      'Domain used for reply email addresses.' => 'Domaine utilisé pour répondre aux adresses de messagerie.',
      'You can find more information about rebuilding the search index here: %s' => 'Vous pouvez trouver plus d’information sur la reconstruction de l’index de recherche ici : %s',
      'Prevent editing' => 'Empêcher la modification',
      'Whitelist 1.2.3.*' => 'Liste blanche 1.2.3.*',
      'This configuration is no longer relevant because daemons restart automatically on configuration changes.' => 'Cette configuration n’est plus significative parce que les démons redémarrent automatiquement lors des modifications de configuration.',
      'The Differential revision list view age UI elements have been removed to simplify the interface.' => 'Les éléments d’IHM de l’âge d’affichage de la liste des révisions différentielles ont été supprimés pour simplifier l’interface.',
      'Separate values with newlines.' => 'Séparer les valeurs avec des nouvelles lignes.',
      'The request body that the server received had already been decompressed. This strongly suggests your webserver is configured to decompress requests inline, before they reach PHP.' => 'Le corps de requête que le serveur a reçu a déjà été décompressé. Ceci suggère fortement que votre serveur web est configuré pour décompresser le flux des requêtes avant qu’elles atteignent PHP.',
      'Exception Handlers' => 'Gestionnaires d’exceptions',
      'This schema has the wrong nullable setting.' => 'Ce schéma a le mauvais paramétrage de nul autorisé.',
      'Config option \'%s\' is invalid. The URI must start with \'%s\' or \'%s\'.' => 'L’option de configuration \'%s\' n’est pas valide. L’URI doit commencer par \'%s\' ou \'%s\'.',
      'Unsupported/Insecure "%s" Version' => 'Version « %s » non supportée/non sécurisée',
      'This option does not have a custom type!' => 'Cette option n’a pas un type personnalisé !',
      'Require administrators to approve new accounts.' => 'Nécessite que les administrateurs approuvent les nouveaux comptes.',
      'Health' => 'Santé',
      'System user to run daemons as.' => 'Utilisateur système avec lequel exécuter les démons.',
      'When set to `true`, the authentication provider configuration for this instance can not be modified without first running `bin/auth unlock` from the command line. This is to reduce the security impact of a compromised administrator account. 
    After running `bin/auth unlock` and making your changes to the authentication provider config, you should run `bin/auth lock`.' => 'Si défini à `true` (vrai), la configuration du fournisseur d’authentification pour cette instance ne peut pas être modifiée sans d’abord exécuter `bin/auth unlock` depuis la ligne de commande. Ceci permet de réduire l’impact en terme de sécurité d’un compte d’administrateur compromis.
    Après avoir exécuté `bin/auth unlock` et effectué vos changements sur la configuration du fournisseur d’authentification, vous devriez exécuter `bin/auth lock`.',
      'Unknown schema status "%s"!' => 'État du schéma « %s » inconnu !',
      'MySQL May Run Slowly' => 'MySQL pourrait fonctionner lentement',
      'Phabricator now manages typeahead strategies automatically.' => 'Phabricator gère maintenant automatiquement les stratégies de saisie anticipée.',
      'Too many arguments: expected one key.' => 'Trop d’arguments : une clé attendue.',
      'List of Users Without MFA' => 'Liste des utilisateurs sans MFA',
      'No "Host" header present in request.' => 'Aucun entête « Host » présent dans la requête.',
      'Value for option "%s" of type "%s" must be either "true" or "false".' => 'La valeur pour l’option « %s » de type « %s » doit être soit « true » soit « false ».',
      'Footer configuration is not valid: value must be a list of items.' => 'La configuration du pied de page n’est pas valide : la valeur doit être une liste d’éléments.',
      'Edit "%s"' => 'Modifier « %s »',
      'Don\'t embed YouTube videos' => 'Ne pas inclure les vidéos YouTube',
      'Disable PHP %s' => 'Désactiver %s de PHP',
      'Configure master encryption keys.' => 'Configurer les clés de chiffrement maître.',
      'Mailers Not Configured' => 'Boîtes courriel non configurées',
      'Phabricator now has meaningful global access controls. See `%s`.' => 'Phabricator a maintenant des contrôles d’accès globaux importants. Voir `%s`.',
      'Database replica "%s" is listed as a replica, but is not currently replicating. You are vulnerable to data loss if the master fails.' => 'La réplique de base de données « %s » est listée comme réplique, mais elle n’est actuellement pas répliquée. Vous êtes vulnérable à une perte de données, si le maître échoue.',
      'Garbage Collectors' => 'Ramasses-miettes',
      '%s edited this configuration entry.' => '%s a modifié cette entrée de configuration.',
      'Phabricator sent itself a test request with the "X-Phabricator-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:
    %s
    Something is misconfigured or otherwise mangling responses.' => 'Phabricator a envoyé de lui-même une requête de test avec l’entête « X-Phabricator-SelfCheck » et s’attendait à obtenir une réponse JSON valide en retour. À la place, la réponse commence par :
    %s
    Quelque chose est mal configuré ou sinon, déforme les réponses.',
      'Enable Phabricator\'s debugging console.' => 'Activer la console de débogage de Phabricator.',
      'The PHP "zip" extension is not installed. This extension is required by certain data export operations, including exporting data to Excel.
    To clear this setup issue, install the extension and restart your webserver.
    You may safely ignore this issue if you do not plan to export data in Zip archives or Excel spreadsheets, or intend to install the extension later.' => 'L’extension « zip » pour PHP n’est pas installée. Cette extension est nécessaire pour certaines opérations d’exportation de données, y compris l’exportation de données vers Excel.
    Pour régler ce problème de configuration, installez l’extension et redémarrez votre serveur web.
    Vous pouvez ignorer ce problème en toute quiétude si vous ne prévoyez pas d’exporter des données vers des archives Zip ou des feuilles de calcul Excel, ou bien si vous comptez installer l’extension plus tard.',
      'Send Mail To All Recipients' => 'Envoyer un courriel à tous les destinataires',
      'Your install has no current setup issues to resolve.' => 'Votre installation n’a actuellement pas de problème de configuration à résoudre.',
      'Subschemata Have Failures' => 'Subschemata a des échecs',
      'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.
    This may mean the base URI is configured incorrectly. You must serve Phabricator from a base URI with a dot (like "https://phabricator.mycompany.com"), not a bare domain (like "https://phabricator/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.
    This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.
    Requests must include a valid "Host" header.' => 'Cette requête inclut un entête « Header » non valide, avec la valeur « %s ». Les entêtes de l’hôte doivent contenir un point (« . »), comme « exemple.com ». C’est obligatoire pour que certains navigateurs puissent définir des cookies.
    Cela peut vouloir dire que l’URI de base est mal configurée. Vous devez fournir Phabricator depuis une URI de base avec un point (comme « https://phabricator.masociete.com »), pas un simple domaine (comme « https://phabricator/ »). Si vous essayez d’utiliser un simple domaine, modifiez votre configuration pour utiliser un domaine complet avec un point dedans à la place.
    Cela peut aussi vouloir dire que votre serveur web (ou tout autre équipement du réseau, comme un répartiteur de charge) déforme l’entête « Host », ou que vous utilisez un outil ou une bibliothèque pour produire une requête manuellement et mettre le mauvais entête « Host ».
    Les requêtes doivent inclure un entête « Host » valide.',
      'Save Config Entry' => 'Enregistrer l’entrée de configuration',
      '%s of %s' => '%s sur %s',
      'Setup MySQL Schema' => 'Installer le schéma MySQL',
      ' (%s)' => ' (%s)',
      'Not Available' => 'Non disponible',
      'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => 'Cette option a été supprimée, vous pouvez utiliser les tableaux de bord pour fournir une personnalisation de la page d’accueil. Voir T11533 pour plus de détails.',
      'Data Cache' => 'Cache de données',
      'Configure the access logs, which log HTTP/SSH requests.' => 'Configurer les journaux d’accès, qui tracent les requêtes HTTP/SSH.',
      '%ss Behind' => '%ss derrière',
      'The PID of the server process.' => 'Le PID du processus du serveur.',
      'Blacklist subnets to prevent user-initiated outbound requests.' => 'Mettre les sous-réseaux en liste noire pour éviter des requêtes de sortie initiées par l’utilisateur.',
      'No Outbound Requests' => 'Aucune requête de sortie',
      'Primary install URI, for multi-environment installs.' => 'URI d’installation primaire, pour les installations multi-environnements.',
      'Your webserver is not handling compressed request bodies properly.' => 'Votre serveur web ne gère pas correctement les corps de requête compressés.',
      'The mapping from VCS users to Phabricator users has changed and must be rebuilt.' => 'Отображение от пользователей VCS к пользователям Phabricator изменилось и должно быть восстановлено.',
      'Whitelists editor protocols for "Open in Editor".' => 'Protocoles d’éditeur en liste blanche pour « Ouvrir dans l’éditeur ».',
      'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.' => 'Les paramètres « Préfixe Re: » et « Sujets variés » sont maintenant configurés dans les paramètres globaux.',
      'You have no unresolved setup issues.' => 'Vous n’avez aucun problème d’installation non résolu.',
      'This configuration is hidden and can not be edited or viewed from the web interface.' => 'Cette configuration est cachée et ne peut pas être modifiée ou affichée depuis l’interface web.',
      'Local Disk Storage Not Readable/Writable' => 'Stockage disque local impossible à lire/écrire',
      'Override translations.' => 'Forcer les traductions.',
      'Cluster Configuration Out of Sync' => 'Configuration de la grappe non synchronisée',
      'This option has been removed. You may delete it at your convenience.' => 'Cette option a été supprimée. Vous pouvez la supprimer à votre guise.',
      'You can find more information about this new identity mapping here: %s' => 'Вы можете найти больше информации об этом новом отображении идентичности здесь: %s',
      'After rebuilding the index, run this command to clear this setup warning:' => 'Après reconstruction de l’index, lancer cette commande pour nettoyer cet avertissement d’installation :',
      'Footer item with index "%s" is invalid: %s' => 'L’élément du pied de page avec l’index « %s » n’est pas valide : %s',
      'Phabricator Version Information' => 'Informations sur la version de Phabricator',
      'Unknown Configuration Option "%s"' => 'Option de configuration « %s » inconnue',
      'Truncate at 1MB' => 'Tronquer à 1Mo',
      'Access key for Amazon S3.' => 'Clé d’accès pour Amazon S3.',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.' => 'Le composant \'%s\' de PATH (qui se décline en chemin absolu \'%s\') n’est pas utilisable parce que \'%s\' n’est pas lisible.',
      'Maniphest fields are now loaded automatically. You can configure them with `%s`.' => 'Les champs du manifeste sont maintenant chargés automatiquement. Vous pouvez les configurer avec `%s`.',
      'This key is expected to exist, but does not.' => 'Cette clé est censée exister, mais ce n’est pas le cas.',
      'Persistence' => 'Persistance',
      'This schema is expected to exist, but does not.' => 'Ce schéma est censé exister, mais ce n’est pas le cas.',
      'Do Not Use Pygments' => 'Ne pas utiliser Pygments',
      'Up to Date' => 'À jour',
      'Configure core options, including URIs.' => 'Configurer les options cœur, y compris les URI.',
      '(empty)' => '(vide)',
      'This key has the wrong uniqueness setting.' => 'Cette clé a le mauvais paramètre d’unicité.',
      'When users set or reset a password, it must have at least this many characters.' => 'Quand les utilisateurs définissent ou redéfinissent un mot de passe, il doit avoir au moins ce nombre de caractères.',
      'Additional configuration options to lock.' => 'Options de configuration supplémentaires à verrouiller.',
      'Override what language files (based on filename) highlight as.' => 'Forcer les fichiers de langue (d’après le nom de fichier) à mettre en surbrillance.',
      'Bad "Host" Header' => 'Mauvais entête « Host »',
      'Option "%s" is of type "%s", but the item at index "%s" of the list is not a string.' => 'L’option « %s » est de type « %s », mais l’élément à l’index « %s » de la liste n’est pas une chaîne.',
      'MySQL port to use when connecting to the database.' => 'Port MySQL à utiliser lors de la connexion à la base de données.',
      'URI where Phabricator is installed.' => 'URI où Phabricator est installé.',
      'Trying to add duplicate key "%s"!' => 'Essai d’ajout d’une clé dupliquée « %s » !',
      'Option "%s" is of type "%s", but the configured value is not a string.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas une chaîne.',
      'User Guide: Amazon RDS' => 'Guide utilisateur : Amazon RDS',
      'Repository %s has an ambiguous leader.' => 'Le dépôt %s a un chef ambigu.',
      'Your authentication provider configuration is unlocked. Once you finish setting up or modifying authentication, you should lock the configuration to prevent unauthorized changes.
    Leaving your authentication provider configuration unlocked increases the damage that a compromised administrator account can do to your install. For example, an attacker who compromises an administrator account can change authentication providers to point at a server they control and attempt to intercept usernames and passwords.
    To prevent this attack, you should configure authentication, and then lock the configuration by running "bin/auth lock" from the command line. This will prevent changing the authentication config without first running "bin/auth unlock".' => 'Votre configuration des fournisseurs d’authentification est actuellement déverrouillée. Une fois que vous avez terminé de définir ou modifier l’authentification, vous devriez verrouiller la configuration pour prévenir les changements non autorisés.
    Laisser déverrouillée votre configuration des fournisseurs d’authentification accroît les dommages qu’un compte d’administrateur compromis pourrait faire sur votre installation. Par exemple, un attaquant qui compromet un compte d’administrateur peut changer les fournisseurs d’authentification pour pointer vers un serveur qu’il contrôle et tenter alors d’intercepter des noms d’utilisateurs et des mots de passe.
    Pour prévenir cette attaque, vous devriez configurer l’authentification puis verrouiller la configuration en exécutant « bin/auth lock » depuis la ligne de commande. Ceci empêchera de changer la configuration d’authentification sans avoir d’abord exécuté « bin/auth unlock » .',
      'Configuration of the notification server has changed substantially. For discussion, see T10794.' => 'La configuration du serveur de notification a grandement changé. Pour la discussion, voir T10794.',
      'Read option value from stdin.' => 'Lire la valeur de l’option depuis stdin.',
      'Database source is not configured properly' => 'La source de base de données n’est pas configurée correctement',
      'Phabricator sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.
    This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => 'Phabricator s’est envoyé une requête avec « Accept-Encoding: gzip », mais a reçu une réponse non compressée.
    Cela peut indiquer que votre serveur web n’est pas configuré pour compresser les réponses. Si c’est le cas, vous devez activer la compression. La compression peut améliorer significativement les performances, surtout pour des clients ayant une faible bande passante.',
      'Don\'t Require Manual Approval' => 'Ne nécessite pas d’approbation manuelle',
      'Column Type' => 'Type de colonne',
      'Truncate at 512KB' => 'Tronquer à 512ko',
      'Should Phabricator use Pygments to highlight code?' => 'Phabricator doit-il utiliser Pygments pour surligner le code ?',
      'Cache' => 'Cache',
      'Automatically profile some percentage of pages.' => 'Faire automatiquement le profil d’un certain pourcentage de pages.',
      'Admin Server' => 'Administrer le serveur',
      'Wrong Column Type' => 'Mauvais type de colonne',
      'Embed YouTube videos' => 'Vidéos YouTube incluses',
      'Add One Path' => 'Ajouter un chemin',
      'You haven\'t configured mailers yet, so Phabricator won\'t be able to send outbound mail or receive inbound mail. See the configuration setting cluster.mailers for details.' => 'Вы еще не настроили почтовые программы, поэтому вы не сможете отправлять исходящую почту или получать входящую почту.  См. Параметр конфигурации cluster.mailers для подробностей.',
      'Clear Cache' => 'Vider le cache',
      'MySQL Native Driver Not Available' => 'Le pilote natif MySQL n’est pas disponible',
      'Unignore this setup issue?' => 'Ne plus ignorer ce problème d’installation ?',
      'Configure Mail.' => 'Configurer le courriel.',
      'You can update these %d value(s) here:' => 'Vous pouvez mettre à jour ces %s valeurs ici :',
      'Notification Servers' => 'Serveurs de notification',
      'extname' => 'extname',
      'Enable captchas with Recaptcha.' => 'Activer les captchas avec Recaptcha.',
      'This suggests your webserver is configured to decompress or mangle compressed requests.' => 'Ceci suggère que votre serveur web est configuré pour décompresser ou embrouiller les requêtes compressées.',
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
      'This server has a known bad version of "%s".' => 'Ce serveur a une mauvaise version connue de « %s ».',
      'Require DarkConsole Activation' => 'Nécessite l’activation de DarkConsole',
      'Notifications Status' => 'État des notifications',
      'Current Configuration' => 'Configuration actuelle',
      'Replicating Master' => 'Réplication du maître',
      'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.' => 'Sans fuseau horaire configuré, PHP émettra des avertissements en travaillant avec des dates, et les dates et les heures pourront ne pas s’afficher correctement.',
      'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.' => 'L’option « %s » est de type « %s » et doit être initialisée avec une liste d’expressions rationnelles valides, mais « %s » n’est pas une expression rationnelle valide.',
      'This schema can use a better character set.' => 'Ce schéma peut utiliser un meilleur jeu de caractères.',
      'Configuration value "%s" is locked, but has a value in the database.' => 'La valeur de configuration « %s » est verrouillée, mais a une valeur en base de données.',
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
      'T6185 "Shellshock" Bash Vulnerability' => 'Vulnérabilité de bash T6185 « Shellshock »',
      'Missing \'%s\' Extension' => 'Extension \'%s\' manquante',
      'Retention policies for garbage collection.' => 'Politiques de rétention pour le ramasse-miettes.',
      'MySQL (on host "%s") is configured with a very small innodb_buffer_pool_size, which may impact performance.' => 'MySQL (sur l’hôte « %s ») est configuré avec un très petit innodb_buffer_pool_size, ce qui peut impacter les performances.',
      'You should upgrade this software.' => 'Vous devez mettre à jour ce logiciel.',
      'The following caches will be cleared:' => 'Les caches suivant seront vidés :',
      'Detected %s warning(s) with the schemata.' => '%s avertissement(s) détecté(s) avec ce schemata.',
      'Deprecated mysql.host Format' => 'Format obsolète de mysql.host',
      'This key is on the wrong columns.' => 'Cette clé traite de mauvaises colonnes.',
      'Wrong Nullable Setting' => 'Mauvais paramétrage de nul possible.',
      'Secret key for Amazon S3.' => 'Clé secrète pour Amazon S3.',
      'You are using an old version of MySQL (on host "%s") which has poor unicode support (it does not support the "utf8mb4" collation set). You will encounter limitations when working with some unicode data.
    We strongly recommend you upgrade to MySQL 5.5 or newer.' => 'Vous utilisez une ancienne version de MySQL (sur l’hôte « %s ») dont la prise en charge d’Unicode est faible (ne prend pas en charge le jeu de collation « utf8mb4 »). Vous rencontrerez des limites en travaillant avec certaines données en Unicode.
    Nous vous recommandons fortement de vous mettre à jour vers MySQL 5.5 ou plus récent.',
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
      'You enabled pygments but the %s script is not actually available, your %s is probably broken.' => 'Vous avez activé Pygments mais le script %s n’est actuellement pas disponible ; votre %s est sans doute cassé.',
      'Application Settings' => 'Configuration de l\'application',
      'Show email preferences link in email.' => 'Afficher le lien des préférences de courriel dans le courriel.',
      'Your webserver may have compression disabled.' => 'Votre serveur web peut avoir désactivé la prose en compte de la compression.',
      'Alternative URIs that can access Phabricator.' => 'Uri alternatives qui peuvent accéder à Phabricator.',
      'After editing the PHP configuration, <strong>restart Phabricator for the changes to take effect</strong>. For help with restarting Phabricator, see %s in the documentation.' => 'Après avoir modifié la configuration PHP, <strong>redémarrer Phabricator pour que les modifications prennent effet</strong>. Pour de l’aide au redémarrage de Phabricator, voir %s dans la documentation.',
      'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.' => 'Vous pouvez définir une limite pour la taille maximale en octets du courriel sortant. Un courriel plus gros que cette limite sera tronqué avant d’être envoyé. Cela peut être utile si votre MTA rejette les courriels dépassant une certaine limite (c’est assez courant). Spécifier une valeur en octets.',
      'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => 'Plusieurs sous-classes de %s ont la même clé (\'%s\') : %s, %s.',
      'Your webserver is rewriting paths improperly.' => 'Votre serveur web réécrit mal les chemins.',
      'Trying to add duplicate table "%s"!' => 'Essai d’ajout d’une table dupliquée « %s » !',
      'No Authentication Providers Configured' => 'Aucun fournisseur d’authentification configuré',
      'Run Silently' => 'Exécuter silencieusement',
      'You can find more information about PHP configuration values in the %s.' => 'Vous pouvez trouver plus d’information sur les valeurs de la configuration PHP dans le %s.',
      'Skipping option "%s"; already in local config.' => 'Saut de l’option « %s » ; déjà dans la configuration locale.',
      'Cookies set for x.com are also sent for y.x.com. Assuming Phabricator instances are running on both domains, this will create a collision preventing you from logging in.' => 'Les cookies définis pour x.com sont aussi envoyés pour y.x.com. En supposant que des instances de Phabricator s’exécutent sur les deux domaines, cela provoquera une collision vous empêchant de vous connecter.',
      'Public email is now accepted if the associated address has a default author, and rejected otherwise.' => 'Le courriel public est maintenant accepté si l’adresse associée a un auteur par défaut et rejeté sinon.',
      'Setup Issues' => 'Problèmes d’installation',
      'Require email verification' => 'Nécessite une vérification de courriel',
      'Resource minification is now managed automatically.' => 'La minimisation des ressources est maintenant gérée automatiquement.',
      'Whitespace rendering is now handled automatically.' => 'Le rendu des espaces est maintenant géré automatiquement.',
      '%s Not Working' => '%s ne fonctionne pas',
      'You can use \'%s\' if you don\'t want to create a full translation to give users an option for switching to it and you just want to override some strings in the default translation.' => 'Vous pouvez utiliser \'%s\' si vous ne voulez pas créer une traduction complète, pour donner aux utilisateurs une option pour basculer vers elle, et que vous voulez juste écraser certaines chaînes dans la traduction par défaut.',
      'Phabricator appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. Phabricator regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'Phabricator semble être installé sur une très petite instance de EC2 (de la classe « %s ») avec un CPU à traitement par rafales. Ce n’est pas recommandé. Phabricator a besoin du processeur de façon régulière, et ces instances sont souvent chargées à mort par un ralentissement du processeur. Utiliser plutôt une instance avec un processeur normal.',
      'Phabricator sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".
    Your webserver is configured incorrectly and large parts of Phabricator will not work until this issue is corrected.
    (This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'Phabricator s’est envoyé une requête de test avec un paramètre HTTP GET, mais le paramètre n’a pas été transmis. « %s » envoyé avec la valeur « %s », « %s » avec la valeur « %s » obtenu.
    Votre serveur web est mal configuré et une grande partie de Phabricator ne fonctionnera pas jusqu’à ce que ce problème soit corrigé.
    (Ce problème peut être dû à un « QSA » manquant dans votre RewriteRule.)',
      'Connection' => 'Connexion',
      'Placeholder recipients are now generated automatically.' => 'Les paramètres de substitution sont maintenant automatiquement générés.',
      'SSH keys are now actually useful, so they are always enabled.' => 'Les clés SSH sont maintenant utiles, c\'est pourquoi elles sont toujours activées.',
      'Request output, in bytes.' => 'Sortie de la requête, en octets.',
      'Configure integration with AWS (EC2, SES, S3, etc).' => 'Configurer l’intégration avec AWS (EC2, SES, S3, etc.).',
      'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => 'L’option de configuration \'%s\' n’est pas valide. L’URI doit contenir un point (\'.\'), comme \'%s\', pas simplement un nom comme \'%s\'. Certains navigateurs web ne positionneront pas les cookies sur les domaines sans TLD.',
      'Cache namespace.' => 'Espace de noms du cache.',
      '%s = 0' => '%s = 0',
      'Unsafe PHP "Local Infile" Configuration' => 'Configuration "Local Infile" PHP Non Sécurisée',
      'Custom remarkup rules are now added by subclassing %s or %s.' => 'Les règles de Remarkup personnalisées sont maintenant ajoutées en sous-classant %s ou %s.',
      'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in the Phabricator configuration.' => 'Le binaire \'%s\' n’a pas pu être trouvé. Faire un lien symbolique dessus dans \'%s\', ou initialiser la variable d’environnement %s du serveur web pour inclure le répertoire où il réside, ou ajouter ce répertoire à \'%s\' dans la configuration de Phabricator.',
      'Issue Resolved' => 'Problème résolu',
      'If you enable this, linked Commons videos will be embedded inline.' => 'Si vous activez cela, les vidéos Commons intégrées seront incluses en ligne.',
      'Allow Phabricator to use a single mailbox for all replies.' => 'Autoriser Phabricator à utiliser une adresse courriel unique pour toutes les réponses.',
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
      'Partial \'%s\' Support' => 'Prise en charge partielle de « %s »',
      'Subschemata have setup warnings.' => 'Subschemata a des avertissements d’installation.',
      'Uptime' => 'Durée de fonctionnement',
      'Normally, Phabricator profiles pages only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.
    Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).
    Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.
    NOTE: You must install XHProf for profiling to work.' => 'Normalement, Phabricator fait le profil des pages uniquement quand cela est demandé explicitement via DarkConsole. Toutefois, il peut être utile de faire le profil de certaines pages automatiquement.
    Définir cette option avec un entier positif N pour faire automatiquement le profil de 1 / N pages. Par exemple, le mettre à 1 fera le profil de toutes les pages, alors que le mettre à 1000 fera le profil de 1 page sur 1000 requêtes (c.-à-d. 0,1%% des requêtes).
    Comme faire des profils est lent et génère beaucoup de données, vous devriez le mettre à 0 en production (pour le désactiver) ou à un très grand nombre (pour collecter quelques exemples, si cela vous intéresse d’avoir quelques données auxquelles regarder au besoin). En développement, il peut être utile de le mettre à 1 pour déboguer des problèmes de performance.
    NOTE : Vous devez installer XHProf pour que les profils fonctionnent.',
      'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.' => 'MySQL (sur l’hôte « %s ») utilise un fichier de mots à éviter, ce qui évite de rechercher de nombreux mots communs.',
      'Two setup checks raised an issue with key \'%s\'!' => 'Deux vérifications d’installation ont levé un problème avec la clé \'%s\' !',
      'Mark activities complete even if there is no outstanding need to complete them.' => 'Marquer les activités terminées même s’il n’y a pas de besoin en suspens pour les terminer.',
      'You likely enabled cluster.search without creating the index. Use the following command to create a new index.' => 'Vous avez sans doute activé cluster.search sans créer l’index. Utiliser la commande suivante pour créer un nouvel index.',
      'Without \'%s\', Phabricator can not test for the availability of other binaries.' => 'Sans \'%s\', Phabricator ne peut pas tester la disponibilité d’autres binaires.',
      'Skipping option "%s"; already in database config.' => 'Sauter l’option « %s » ; déjà dans la configuration en base de données.',
      'This option controls whether users can edit account email addresses and profile real names.
    If you set up Phabricator to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => 'Cette option contrôle si les utilisateurs peuvent modifier les adresses de messagerie de compte et décrire les vrais noms.
    Si vous avez installé votre Phabricator pour qu’il synchronise automatiquement les informations de compte depuis un autre système faisant autorité, vous pouvez empêcher les utilisateurs de faire ces modifications pour être sûr que les informations restent cohérentes entre les deux systèmes.',
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
      'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.' => 'Votre limite mémoire PHP est configurée de telle sorte qu’elle peut vous empêcher de téléverser de gros fichiers ou de gérer de grandes requêtes.',
      'The system user.' => 'L\'utilisateur du système.',
      'Reload Page' => 'Recharger la page',
      'Phabricator now automatically selects the best available MySQL implementation.' => 'Phabricator sélectionne dorénavant automatiquement la meilleure implémentation disponible de MySQL.',
      'Force users to connect via HTTPS instead of HTTP.' => 'Forcer les utilisateurs à se connecter via HTTPS au lieu de HTTP.',
      'Install the MySQLi extension to improve database behavior.' => 'Installer l’extension MySQLi pour améliorer le comportement de la base de données.',
      'Large Files' => 'Gros fichiers',
      'Compressed Requests Not Received Properly' => 'Requêtes compressées non reçues correctement',
      'Mark a manual upgrade activity as complete.' => 'Marquer une activité de mise à jour manuelle comme terminée.',
      '%s Not Set' => '%s non fixé',
      'This configuration option has been replaced with a modular handler. See T9346.' => 'Cette option de configuration a été remplacée par un gestionnaire modulaire. Voyez T9346.',
      'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)' => 'La valeur pour l’option « %s » (de type « %s ») doit être spécifiée en JSON, mais l’entrée n’a pas pu être décodée (avez-vous oublié de mettre une chaîne entre guillemets anglais ?).',
      'Configuration option \'%s\' has invalid value and was restored to the default: %s' => 'L’option de configuration \'%s\' a une valeur non valide et a été restaurée avec la valeur par défaut : %s',
      'To update these %d value(s), edit your PHP configuration file, located here:' => 'Pour mettre à jour ces %s valeurs, modifiez votre fichier de configuration PHP, situé ici :',
      'Collation' => 'Collation',
      'Replication' => 'Réplication',
      'The HTTP response code or process exit code.' => 'Le code de réponse HTTP ou le code de sortie du processus.',
      'Obsolete; use standard rendering events instead.' => 'Obsolète ; utiliser plutôt les événements de rendu standard.',
      'Local Disk Storage' => 'Stockage sur disque local',
      'The configuration option \'%s\' is not recognized. It may be misspelled, or it might have existed in an older version of Phabricator. It has no effect, and should be corrected or deleted.' => 'L’option de configuration \'%s\' n’est pas reconnue. Elle est peut-être mal écrite, ou peut avoir existé dans une ancienne version de Phabricator. Elle n’a pas d’effet, et doit être corrigée ou supprimée.',
      'Issue' => 'Problème',
      'Determines which URI protocols are valid for links and redirects.' => 'Détermine quels protocoles d’URI sont valides pour les liens et les redirections.',
      'Configuration Guide: Configuring a File Domain' => 'Guide de configuration : configurer un domaine de fichiers',
      'Activate DarkConsole on every page.' => 'Activer DarkConsole sur chaque page.',
      'Enable verbose error reporting and disk reads.' => 'Activer le rapport d’erreur verbeux et les lectures disque.',
      'Mail object address hash keys are now generated automatically.' => 'Les clés de hachage de l’objet adresse du courriel sont maintenant automatiquement générées.',
      'Too many arguments: expected one key and one value.' => 'Trop d\'arguments: attendus une clé et une valeur.',
      'Settings History' => 'Historique des préférences',
      'Opcode' => 'Opcode',
      'To update these %d value(s), edit your PHP configuration file.' => 'Pour mettre à jour ces %s valeurs, modifiez votre fichier de configuration PHP.',
      'Auth provider config must be unlocked before editing' => 'La configuration des fournisseurs d’authentification doit être déverrouillée avant toute modification',
      'Enable Recaptcha' => 'Activer Recaptcha',
      'Prefix cookie with "%s"' => 'Préfixer les témoins avec « %s »',
      'Migrated option "%s" from file to database config.' => 'Option « %s » migrée du fichier vers la configuration de la base de données.',
      'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that Phabricator imports or manages. This option is new and experimental.' => 'Spécifier un utilisateur système avec lequel exécuter les démons. Principalement, cet utilisateur sera le propriétaire des copies de travail de tout dépôt que Phabricator importe ou gère. Cette option est nouvelle et expérimentale.',
      'PHP Documentation' => 'Documentation PHP',
      'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. Phabricator will not work properly until you do.' => 'Identifiez le composant de la configuration du serveur web qui décompresse ou embrouille les requêtes et désactivez-le. Phabricator ne fonctionnera pas correctement tant que vous ne le ferez pas.',
      'Your webserver produced an unexpected response.' => 'Votre serveur web a retourné une réponse inattendue.',
      'Phabricator now automatically discovers available search engines at runtime.' => 'Phabricator découvre maintenant automatiquement les moteurs de recherche au moment de l\'exécution.',
      'Unable to determine the version number of "%s".' => 'Impossible de déterminer le numéro de version de « %s ».',
      'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless @{config:auth.email-domains} is nonempty.' => 'S’il est à <tt>true</tt>, les adresses électroniques doivent être vérifiées (en cliquant sur un lien dans un courriel) avant qu’un utilisateur puisse se connecter. Par défaut, la vérification est optionnelle sauf si @{config:auth.email-domains} est non-vide.',
      'PHP OPcache Documentation' => 'Documentation OPcache de PHP',
      'Cluster: Databases' => 'Groupement : bases de données',
      'No Messages' => 'Pas de message',
      'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.' => 'L’élément de bas de page avec l’index « %s » n’est pas valide : chaque élément doit être un dictionnaire décrivant un élément de bas de page.',
      'None of the caches on this page can be cleared.' => 'Aucun des caches de cette page ne peut être vidé.',
      'Require email verification before a user can log in.' => 'Requiert une vérification de l\'adresse courriel avant qu\'un utilisateur puisse se connecter.',
      'Master' => 'Maître',
      'Sets the default color scheme of Phabricator.' => 'Mettre le schéma de couleur par défaut de Phabricator.',
      'A Troublesome Encounter!' => 'Une rencontre problématique !',
      'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => 'L’algorithme d’indexation pour l’index de recherche en plein texte a été mis à jour et l’index doit être reconstruit. Jusqu’à ce que vous ayez reconstruit l’index, la recherche globale (et toute autre recherche en plein texte) ne fonctionneront pas correctement.',
      'Maximum taskmaster daemon pool size.' => 'Taille maximale de la réserve du démon du gestionnaire de tâches.',
      'Replica' => 'Copie',
      'Use Public Replies (Less Secure)' => 'Utiliser les réponses publiques (moins sécurisé)',
      'MySQL password to use when connecting to the database.' => 'Mot de passe MySQL à utiliser lors de la connexion à la base de données.',
      'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'' => 'Si une variable n’est pas disponible (par exemple, %%m apparaît dans le format du fichier mais la requête n’est pas une requête Conduit), elle sera rendue comme \'-\'',
      'Set a string Phabricator should use to prefix cookie names.' => 'Mettre une chaîne que Phabricator doit utiliser pour préfixer les noms de cookie.',
      'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to Phabricator, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'Si ces commandes ne fonctionnent pas, essayez Google. Le processus d’installer des extensions PHP n’est pas spécifique à Phabricator, et toute instruction que vous pouvez trouver pour les installer sur votre système devrait fonctionner. Sur Mac OS X, vous pouvez essayer Homebrew.',
      'CSRF HMAC keys are now managed automatically.' => 'Les clés CSRF HMAC sont maintenant gérées automatiquement.',
      'Database Status' => 'État de la base de données',
      'Database host "%s" is using the builtin stopword file for building search indexes. This can make Phabricator\'s search feature less useful.
    Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.
    To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.
    To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:
    %s
    (You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'L’hôte de base de données « %s » utilise le fichier de mots à ignorer intégré pour construire les index de recherche. Cela peut rendre la fonctionnalité de recherche de Phabricator moins utile.
    Les mots à ignorer sont les mots communs qui ne sont pas indexés et ne donc peuvent pas être recherchés. Le fichier de mots à ignorer par défaut a environ cinq cents mots, comprenant divers mots que vous voudrez peut-être rechercher, comme \'various\', \'likely\', \'wish\', et \'zero\'.
    Pour rendre la recherche plus utile, vous pouvez utiliser un autre fichier de mots à ignorer avec moins de mots. À la place, si vous n’êtes pas concerné par la recherche de mots communs, vous pouvez ignorer cet avertissement. Si vous prévoyez plus tard de configurer Elasticsearch, vous pouvez aussi ignorer cet avertissement : ce fichier de mots à ignorer n’affecte que les index de plein texte de MySQL.
    Pour choisir un autre fichier de mots à ignorer, ajoutez cela à votre fichier %s (dans la section %s) et puis redémarrez %s :
    %s
    (Vous pouvez aussi utiliser un fichier différent, si vous préférez. Le fichier suggéré ci-dessus contient environ cinquante des mots anglais les plus courants.)
    Au final, lancez cette commande pour reconstruire les index en utilisant les nouvelles règles :
    %s',
      'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s' => 'La valeur pour l’option « %s » (de type « %s ») doit être spécifiée en JSON, mais l’entrée n’a pas pu être décodée : %s',
      'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.' => 'L’hôte de la base de données « %s » a un état de grappe configuré qui est en conflit avec l’état de cet hôte (« %s »). Lancez `bin/storage partition` pour valider l’état local dans la grappe. Cet hôte peut avoir démarré avec une configuration périmée.',
      'PHP is currently using the very old "mysql" extension to interact with the database. You should install the newer "mysqli" extension to improve behaviors (like error handling and query timeouts).
    Phabricator will work with the older extension, but upgrading to the newer extension is recommended.
    You may be able to install the extension with a command like: %s' => 'PHP utilise actuellement la très ancienne extension « mysql » pour interagir avec la base de données. Vous devriez installer l’extension plus récente « mysqli » pour améliorer les comportements (comme la gestion d’erreurs et les délais de requête).
    Phabricator fonctionnera avec l’ancienne extension, mais mettre à jour vers l’extension plus récente est recommandé.
    Vous devriez pouvoir installer l’extension avec une commande comme : %s',
      'Largest' => 'Le plus grand',
      'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.
    If you are running a cluster, this limit applies separately to each instance of `phd`. For example, if this limit is set to `4` and you have three hosts running daemons, the effective global limit will be 12.
    After changing this value, you must restart the daemons. Most configuration changes are picked up by the daemons automatically, but pool sizes can not be changed without a restart.' => 'Nombre maximal de démons « maître de tâches » à exécuter simultanément. Augmenter cette valeur peut augmenter le débit maximal de la file d’attente. Le jeu de ressources inutilisées sera automatiquement réduit.
    Si vous utilisez une grappe de serveurs, cette limite s’applique séparément à chaque instance de « phd ». Par exemple, si cette limite est définie sur « 4 » et que trois hôtes exécutent des démons, la limite globale effective sera de 12.
    Après avoir modifié cette valeur, vous devez redémarrer les démons. La plupart des modifications de configuration sont automatiquement prises en compte par les démons, mais la taille des jeux de ressources ne peut pas être modifiée sans redémarrage de chaque instance.',
      'Set the URI that Phurl will use to share shortened URLs.' => 'Définir l’URI que Phurl utilisera pour partager les URL raccourcies.',
      'Phabricator users can make requests to other services from the Phabricator host in some circumstances (for example, by creating a repository with a remote URL or having Phabricator fetch an image from a remote server).
    This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.
    This option defines a list of netblocks which Phabricator will decline to connect to. Generally, you should list all private IP space here.' => 'Les utilisateurs de Phabricator peuvent faire des requêtes vers d’autres services depuis l’hôte de Phabricator dans certains cas (par exemple, en créant un dépôt avec une URL distante ou en faisant récupérer à Phabricator une image d’un serveur distant).
    Cela peut représenter une faille de sécurité si les services sur le même sous-réseau acceptent des commandes ou dévoilent des informations privées sur un GET HTTP non authentifié, d’après l’adresse IP source. En particulier, tous les hôtes sur EC2 ont accès à un tel service.
    Cette option définit une liste de blocs réseau auxquels Phabricator refusera de se connecter. En général, vous devez lister ici tous les espaces IP privés.',
      'Newly registered Phabricator accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access Phabricator.
    If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured Phabricator to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.
    NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => 'Les comptes Phabricator nouvellement inscrits peuvent soit être mis dans une file d’approbation manuelle pour une relecture administrative, soit être activés automatiquement et immédiatement. La file d’approbation est activée par défaut parce qu’elle vous donne un meilleur contrôle sur qui peut inscrire un compte et accéder à Phabricator.
    Si votre installation est complètement publique ou sur un VPN, ou si les utilisateurs ne peuvent s’enregistrer qu’avec un fournisseur de confiance comme un LDAP, ou si vous avez sinon configuré Phabricator pour éviter une inscription non autorisée, vous pouvez désactiver la file pour réduire la charge d’administration.
    NOTE : avant de désactiver la file, assurez-vous que @{config:auth.email-domains} est bien configuré pour votre installation !',
      'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.' => 'Votre version de MySQL (sur l’hôte de base de données « %s ») ne supporte pas la configuration d’un fichier de mots à éviter. Vous ne pourrez pas trouver des résultats de recherche pour les mots communs.',
      'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'La configuration de votre PHP a sélectionné un fuseau horaire invalide. Sélectionnez un fuseau horaire valide.',
      '%s deleted this configuration entry (again?).' => '%s a supprimé cette entrée de configuration (de nouveau ?).',
      'Unresolved Setup Issues' => 'Problèmes d’installation non résolus',
      'Server Timezone Not Configured' => 'Fuseau horaire du serveur not configuré',
      'The following regex is malformed and cannot be used: %s' => 'L’expression rationnelle suivante est mal écrite et ne pourra pas être utilisée : %s',
      'Use the %s to manage installed applications.' => 'Utiliser le %s pour gérer des applications installées.',
      'Individual application reply handler domains have been removed. Configure a reply domain with "%s".' => 'Les domaines de gestionnaire de réponse à l’application individuelle ont été supprimés. Configurer un domaine de réponse avec « %s ».',
      'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. Phabricator needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.
    PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.
    (Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)
    The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit Phabricator process memory.
    You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'Quand vous téléversez un fichier par glisser-déposer ou par l’API, les morceaux doivent être conservés en mémoire avant d’être écrits sur un stockage permanent. Phabricator a besoin de mémoire disponible pour stocker ces morceaux pendant leur téléversement, mais PHP est actuellement configuré pour limiter drastiquement la mémoire disponible.
    Les processus PHP ont actuellement très peu de mémoire libre disponible (%s). Pour travailler bien, les processus doivent avoir au moins %s.
    (Notez que l’application elle-même doit aussi tenir dans la mémoire disponible, donc toute la mémoire sous la limite n’est pas disponible pour exécuter les charges de travail.)
    La manière la plus facile de résoudre ce problème est de mettre %s à %s dans votre configuration PHP, pour désactiver la limite mémoire. Il y a en général peu ou pas d’intérêt à utiliser cette option pour limiter la mémoire de traitement de Phabricator.
    Vous pouvez aussi augmenter la limite ou ignorer ce problème et accepter de rencontrer des soucis en téléversant de gros fichiers et en traitant de grosses requêtes.',
      'Preflight' => 'Avant-vol',
      'Install these %d PHP extension(s):' => 'Installer ces %s extensions PHP :',
      'Missing \'%s\' Binary' => 'Binaire \'%s\' manquant',
      'Charset' => 'Jeu de caractères',
      'The framable public feed is no longer supported.' => 'Le fil public pouvant être encadré n’est plus supporté.',
      'A random, unique string which identifies the request.' => 'Une chaîne aléatoire unique qui identifie la requête.',
      'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. Phabricator can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'Point de terminaison S3 explicite. Cela devrait être le point de terminaison qui correspond à la région que vous avez sélectionnée dans `amazon-s3.region`. Phabricator ne peut pas déterminer automatiquement le bon point de terminaison parce que certains emplacements de point de terminaison sont irréguliers.',
      'Auth provider config can be edited without unlocking' => 'La configuration des fournisseurs d’authentification ne peut pas être modifiée sans la déverrouiller',
      'Disable unsafe option "%s" in PHP configuration.' => 'Désactiver l’option non sécurisée « %s » dans la configuration PHP.',
      'Phabricator now always sends transaction mail with "Precedence: bulk" to improve deliverability.' => 'Phabricator envoie maintenant toujours un courriel de transaction avec « Precedence:bulk » pour améliorer la capacité de livraison.',
      '%s Day(s)' => '%s jour(s)',
      'No search servers are configured.' => 'Aucun serveur de recherche n’est configuré.',
      'This key is too long for utf8mb4.' => 'Cette clé est trop longue pour utf8mb4.',
      'Expected Character Set' => 'Jeu de caractères attendu',
      'Repository Servers' => 'Serveurs de dépôt',
      'Format for the HTTP access log. Use `%s` to set the path. Available variables are:' => 'Format pour le journal d’accès HTTP. Utiliser `%s` pour définir le chemin. Les variables disponibles sont :',
      'Skipping obsolete option: %s' => 'Saut de l’option obsolète : %s',
      'This schema can use a better collation.' => 'Ce schéma peut utiliser une meilleure collation.',
      'Install Pygments to Improve Syntax Highlighting' => 'Installer Pygments pour améliorer la mise en évidence de la syntaxe.',
      'Sessions now expire and are garbage collected rather than having an arbitrary concurrency limit.' => 'Les sessions expirent désormais et sont prises en charge par le ramasse-miettes, plutôt que d’avoir une limite arbitraire en temps.',
      'Logo Image' => 'Image du logo',
      'The environmental variable %s is empty. Phabricator will not be able to execute some commands.' => 'La variable d’environnement %s est vide. Phabricator ne pourra pas exécuter certaines commandes.',
      'Really Clear Cache' => 'Vraiment vider le cache',
      'Stop Phabricator from sending any email, etc.' => 'Empêcher Phabricator d\'envoyer des courriels, etc.',
      'Unexpected \'%s\' Behavior' => 'Comportement \'%s\' inattendu',
      'Mail thread IDs are now generated automatically.' => 'Les IDs des fils de discussions par courriel sont maintenant générés automatiquement.',
      'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.
    For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.
    You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.
    To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:
    %s
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'L’hôte de base de données « %s » est configuré pour utiliser la longueur de mot minimale par défaut en construisant les index de recherche, qui est 4. Cela veut dire que les mots qui ne font que 3 caractères ne seront pas indexés et ne pourront pas être recherchés.
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
      'You can rebuild repository identities while Phabricator is running.' => 'Vous pouvez reconstruire les identités de dépôt pendant l’exécution de Phabricator.',
      'This configuration option is unknown. It may be misspelled, or have existed in a previous version of Phabricator.' => 'Cette option de configuration est inconnue. Elle est peut-être mal écrite, et a existé dans une version précédente de Phabricator.',
      'HTTP Basic Auth Not Configured' => 'Authentification HTTP basique non configurée',
      'Whitelist 1.2.*.*' => 'Liste blanche 1.2.*.*',
      'Highlight httpd.conf as "apacheconf".' => 'Mettre en surbrillance httpd.conf comme « apacheconf ».',
      'Database Value' => 'Valeur de base de données',
      'US Mountain (MDT)' => 'Montagne des USA (MDT)',
      'This option has been replaced with `ui.logo`, which provides more flexible configuration options.' => 'Cette option a été remplacée par `ui.logo`, qui fournit des options de configuration plus flexibles.',
      'Rebuild Search Index' => 'Reconstruire l’index de recherche',
      'Real' => 'Réel',
      'Partition: %s' => 'Partition: %s',
      'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => 'C’est une liste forcée d’expressions rationnelles qui vous permet de choisir quelles langues sont assignées aux fichiers. Si vos projets ont certaines règles portant sur les noms de fichiers ou utilisent des extensions de langue inhabituelles ou ambiguës, vous pouvez créer une correspondance ici. C’est un dictionnaire ordonné d’expressions rationnelles qui seront appliquées aux noms de fichiers. Elle doivent correspondre soit à une langue explicite sous forme de valeur de chaîne, soit à un entier représentant un index numérique dans les groupes capturés.',
      'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.
    Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies @{config:auth.require-email-verification}.
    You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.' => 'Vous pouvez restreindre les adresses de messagerie autorisées à certains domaines (comme « votresociete.example.com ») en définissant une liste de domaines autorisés ici.
    Les utilisateurs ne seront autorisés à s’inscrire qu’en utilisant des adresses de messagerie d’un de ces domaines, et ne pourront ajouter de nouvelles adresses de messagerie que pour ces domaines. Si vous le configurez, cela implique @{config:auth.require-email-verification}.
    Vous devez omettre le « @ » des domaines. Notez que le domaine doit correspondre exactement. Si vous autorisez « example.com », cela autorise « joe@example.com » mais rejette « joe@mail.example.com ».',
      'Show unresolved issues with setup and configuration.' => 'Afficher les problèmes non résolus dans l’installation et la configuration.',
      'Options for Phurl.' => 'Options pour Phurl.',
      'IMPORTANT: The upstream does not provide support for prototype applications.
    Phabricator includes prototype applications which are in an **early stage of development**. By default, prototype applications are not installed, because they are often not yet developed enough to be generally usable. You can enable this option to install them if you\'re developing Phabricator or are interested in previewing upcoming features.
    To learn more about prototypes, see [[ %s | %s ]].
    After enabling prototypes, you can selectively uninstall them (like normal applications).' => 'IMPORTANT : le flux amont ne prend pas en charge les applications prototype.
    Phabricator inclut des applications prototype qui sont dans un **état précoce de développement**. Par défaut, les applications prototype ne sont pas installées, parce qu’elles ne sont souvent pas encore suffisamment développées pour être utilisables. Vous pouvez activer cette option pour les installer si vous développez Phabricator ou si vous êtes intéressé par un aperçu des fonctionnalités à venir.
    Pour en savoir plus sur les prototypes, voir [[%s|%s]].
    Après avoir activé les prototypes, vous pouvez les désinstaller unitairement (comme des applications normales).',
      'For conduit, the Conduit method which was invoked.' => 'Pour un conduit, la méthode Conduit qui a été invoquée.',
      'The request body Phabricator received began:' => 'Le corps de la requête reçue par Phabricator commençait par :',
      'The configured PATH includes a component which is not usable. Phabricator will be unable to find or execute binaries located here:
    %s
    The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => 'Le PATH configuré inclut un composant qui n’est pas utilisable. Phabricator ne pourra pas trouver ou exécuter les binaires situés ici :
    %s
    Le compte utilisateur sous lequel tourne le serveur web doit pouvoir lire tous les répertoires dans PATH afin de les utiliser.',
      'The configuration option \'%s\' is not set.' => 'L’option de configuration \'%s\' n’est pas positionnée.',
      'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see http://recaptcha.net/' => 'Activer recaptcha pour demander aux utilisateurs de résoudre les captchas après quelques tentatives de connexion en échec. Cela gêne les attaques par force brute sur les mots de passe utilisateur. Pour plus d’information, voir http://recaptcha.net/',
      'Stop Before HTTP Redirect' => 'Arrêter avant la redirection HTTP',
      'Developer / Debugging' => 'Développeur / Débogage',
      'Remove PHP %s' => 'Supprimer PHP %s',
      'Missing' => 'Manquant',
      'Classes must match to compare schemata!' => 'Les classes doivent correspondre pour comparer les schemata !',
      'Elasticsearch Index Not Found' => 'Index de Elasticsarch non trouvé',
      'Unit test value.' => 'Valeur de test unitaire.',
      'A daemon is running as user %s, but daemons should be running as %s.
    Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.' => 'Un démon s’exécute avec l’utilisateur %s, mais les démons doivent s’exécuter avec %s.
    Ajuster le paramètre de configuration %s ou redémarrer les démons. Les démons doivent essayer de s’exécuter avec le bon utilisateur en redémarrant.',
      'Missing Key' => 'Clé manquante',
      'Expected Nullable' => 'Possiblement nul attendu',
      'Disable SSH log.' => 'Désactiver le journal SSH.',
      'No databases have any issues.' => 'Aucune base de données n’a de problème.',
      'Option "%s" is of type "%s", but the configured value is not an integer.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas un entier.',
      'Notifications no longer have a dedicated debugging mode.' => 'Les notifications n’ont plus de mode de débogage dédié.',
      'Daemon Running as Wrong User' => 'Démon s’exécutant avec le mauvais utilisateur',
      'MySQL is not in strict mode (on host "%s"), but using strict mode is recommended.' => 'MySQL n’est pas en mode strict (sur l’hôte « %s »), mais utiliser le mode strict est fortement recommandé.',
      'Extending Phabricator' => 'Extension de Phabricator',
      'This ancient extension point has been replaced with other mechanisms, including "AphrontSite".' => 'Cet ancien point d’extension a été remplacé par d’autres mécanismes, dont « AphrontSite ».',
      'You enabled Elasticsearch but the index does not exist.' => 'Vous avez activé Elasticsearch mais l\'index n\'existe pas.',
      '%s Not Found' => '%s non trouvé',
      'Phabricator PHP 7 Compatibility Information' => 'Information de compatibilité PHP 7 de Phabricator',
      'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.' => 'Votre configuration `%s` contient un numéro de port, mais cette utilisation est obsolète. À la place, mettre le numéro de port dans `%s`.',
      'Elasticsearch Index Schema Mismatch' => 'Non correspondance du schéma d’index de Elasticsearch',
      'Column has Wrong Autoincrement' => 'La colonne a un mauvais incrément automatique',
      'Specify the configuration key you want to set.' => 'Spécifiez la clé de configuration que vous voulez définir.',
      'Memory Limit Restricts File Uploads' => 'La taille mémoire restreint les téléversements de fichiers',
      'Cache Entries' => 'Entrées du cache',
      'Unknown column type "%s"!' => 'Type de colonne « %s » inconnu !',
      'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.' => 'L’emplacement configuré pour stocker les fichiers téléversés sur le disque (« %s ») n’existe pas, ou ne peut pas être lu ou écrit. Vérifier que le répertoire existe et peut être lu et écrit par le serveur web.',
      'Notifications User Guide: Setup and Configuration' => 'Guide utilisateur des notifications : Installation et configuration',
      'Key is Too Long' => 'La clé est trop longue',
      '\'%s\' Missing' => '\'%s\' manquant',
      'Configure database read replicas.' => 'Configurer la base de données pour lire les copies répliquées.',
      'Elasticsearch Misconfigured' => 'Elasticsearch mal configuré',
      'Amazon S3 is Only Partially Configured' => 'Amazon S3 n\'est que partiellement configuré',
      'Phabricator no longer supports global customization of monospaced fonts.' => 'Phabricator ne supporte plus la personnalisation globale de polices à espacement fixe.',
      '<none>' => '<none>',
      'Customize favicons.' => 'Personnaliser les favicons.',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).' => 'Le composant PATH \'%s\' (qui est traduit dans le chemin absolu \'%s\') n’est pas utilisable parce qu’il ne peut pas être traversé (son bit de droit \'%s\' n’est pas mis).',
      'No Repositories' => 'Aucun dépôt',
      '%s deleted this configuration entry.' => '%s a supprimé cette entrée de configuration.',
      'After rebuilding repository identities, run this command to clear this setup warning:' => 'Après reconstruction des identités de dépôt, lancer cette commande pour nettoyer cet avertissement d’installation :',
      'Mail is now always delivered by the daemons.' => 'Le courriel est maintenant toujours envoyé par les démons.',
      'Request has bad "Host" header.' => 'Requête avec un mauvais entête « Host ».',
      'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.' => 'Cette version de Subversion a un bogue où `%s` ne fonctionne pas pour les fichiers ajoutés dans rN (Problème Subversion #2873), corrigé en 1.7.2.',
      'Elasticsearch is not reachable as configured.' => 'Elasticsearch n’est pas atteignable tel qu’il est configuré.',
      'Key has Wrong Uniqueness' => 'La clé a une mauvaise unicité',
      'Determines whether or not basic account information is editable.' => 'Détermine si les informations de base du compte sont ou non modifiables.',
      'Get a local configuration value.' => 'Obtenir une valeur de configuration locale.',
      'Authenticaton Configuration Unlocked' => 'Configuration de l’authentification déverrouillée',
      'The base URI for this install is not configured. Many major features will not work properly until you configure it.' => 'L’URI de base pour cette installation n’est pas configurée. Beaucoup de fonctionnalités majeures ne fonctionneront pas correctement jusqu’à ce que vous la configuriez.',
      'Unexpected \'diff\' Behavior' => 'Comportement de \'diff\' inattendu',
      'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.' => 'Le binaire \'%s\' de ce système a un comportement inattendu : il devrait se terminer avec un code d’erreur différent de zéro en recevant des fichiers différents, mais ce n’est pas le cas.',
      'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.
    This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.
    Although it is normally difficult for an attacker to convince Phabricator to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.
    To disable this option, set: %s' => 'PHP est actuellement configuré pour honorer les requêtes de tout serveur MySQL auquel il se connecte pour les contenus de tout fichier local.
    Cette fonctionnalité autorise la prise en charge des requêtes « LOAD DATA LOCAL INFILE » en MySQL, mais elle permet à un accès malveillant au serveur MySQL pour lire tout fichier sur les disques accessibles localement : le serveur peut demander aux clients d’envoyer le contenu de tout fichier local, et le client s’exécutera.
    Bien qu’il soit normalement difficile à un attaquant de convaincre Phabricator de se connecter à un serveur MySQL malveillant, vous devriez désactiver cette option : cette facilité n’est pas nécessaire et intrinsèquement dangereuse.
    Pour désactiver cette options, définissez : %s',
      'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.' => 'Vous pouvez ignorer un problème si vous ne voulez pas le corriger, ou si vous prévoyez de le faire plus tard. Les problèmes ignorés n’apparaîtront pas sur chaque page, mais seront encore affichés dans la liste des problèmes ouverts.',
      'Enter value in JSON.' => 'Saisir la valeur en JSON.',
      'Migrated option "%s" from file to local config.' => 'Option « %s » migrée du fichier vers la configuration locale.',
      'Shenanigans' => 'Bidouilles',
      'The path for local repositories does not exist, or is not readable by the webserver.' => 'Le chemin pour les dépôts locaux n’existe pas, ou ne peut pas être lu par le serveur web.',
      'Inbound and outbound mail is now configured with "cluster.mailers".' => 'Le trafic de courriels entrants ou sortants est maintenant configuré avec « cluster.mailers ».',
      'Config \'%s\' Invalid' => 'Configuration \'%s\' non valide',
      'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.' => 'Un hôte de base de données (« %s ») et cet hôte web (« %s ») ne concordent pas sur l’heure actuelle avec  plus de soixante secondes (décalage absolu de %s secondes). Vérifier que l’heure actuelle est bien définie partout.',
      'Never suppress email' => 'Ne jamais supprimer les courriels',
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
      'URI that Phurl will use to shorten URLs.' => 'URI que Phurl utilisera pour raccourcir les URL.',
      'Profile every request (slow)' => 'Faire un profil de toutes les requêtes (lent)',
      'Resolved Issue' => 'Problème résolu',
      'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.' => 'Le chemin local « %s » n’est pas accessible en écriture. Ce fichier doit être inscriptible pour que « bin/config » puisse y stocker la configuration.',
      'This option generally did not prove useful. Resource hash keys are now managed automatically.' => 'Cette option ne s’est généralement pas avérée utile. Les clés de hachage de la ressource sont maintenant gérées automatiquement.',
      'To enable the Phabricator access log, specify a path. The Phabricator access than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).
    If not set, no log will be written.' => 'Pour activer le journal des accès de Phabricator, spécifier un chemin. L’accès à Phabricator trace plus que les accès HTTP normaux (par exemple, il peut montrer les utilisateurs connectés, les contrôleurs, et d’autres données d’application).
    Si non défini, aucun journal ne sera écrit.',
      'Schema Status' => 'Etat du schema',
      'To update these %d value(s), run these command(s) from the command line:' => 'Pour mettre à jour ces %s valeurs, exécutez ces commandes depuis la ligne de commande :',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with Phabricator. Remove \'%s\' from your configuration to continue.' => 'Vous avez \'%s\' d’activé dans votre configuration PHP.
    Cette option n’est pas compatible avec Phabricator. Supprimez \'%s\' de votre configuration pour continuer.',
      'Cache Storage' => 'Mémoire cache',
      'At least one daemon is currently running as the wrong user.' => 'Au moins un démon tourne actuellement avec le mauvais utilisateur.',
      'Data Type' => 'Type de données',
      'Allow suppressing email from certain users' => 'Autoriser la suppression des adresses courriels de certains utilisateurs',
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
      'Install applications which are still under development.' => 'Installer les applications qui sont encore en développement.',
      'Dark' => 'Sombre',
      'GZip Compression May Not Be Enabled' => 'La compression GZip n\'est peut-être pas activée',
      'Return to Open Issue List' => 'Retourner à la liste des problèmes ouverts',
      'Either the Phabricator schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => 'Soit le schéma de Phabricator pour Elasticsearch a changé, soit Elasticsearch a créé l’index automatiquement. Utiliser la commande suivante pour reconstruire l’index.',
      'Activate read-only mode for maintenance or disaster recovery.' => 'Activer le mode lecture seule pour la maintenance ou la récupération de crash.',
      'PHP also loaded these %s configuration file(s):' => 'PHP a aussi chargé ces %s fichier(s) de configuration :',
      'Reading value from stdin...' => 'Lecture de la valeur depuis stdin…',
      'Option "%s" is of type "%s", but the value you provided is not a valid JSON list: when providing a set from the command line, specify it as a list of values in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'L’option « %s » est de type « %s », mais la valeur que vous avez fournie n’est pas une liste JSON valide : lorsque vous fournissez un ensemble depuis la ligne de commande, spécifiez-le comme une liste de valeurs en JSON. Vous devez mettre entre guillemets anglais la valeur pour votre interpréteur  (par exemple : \'["a", "b", ...]\').',
      'To rebuild the index, run this command:' => 'Pour reconstruire l’index, exécutez cette commande :',
      'Disable Recaptcha' => 'Désactiver Recaptcha',
      'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to Phabricator, or that you are making a raw request without a "Host" header using a tool or library.
    If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.
    It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.
    Requests must include a valid "Host" header.' => 'Cette requête n’incluait pas d’entête « Host ». Cela peut signifier que votre serveur web (comme nginx ou apache) est mal configuré, de telle façon que l’entête « Host » n’est pas fourni à Phabricator, ou que vous faites une requête brute sans entête « Host » en utilisant un outil ou une bibliothèque.
    Si vous utilisez un navigateur web, vérifiez la configuration de votre serveur web. Si vous utilisez un outil ou une bibliothèque, vérifiez comment la requête est construite.
    Il est aussi possible (mais très peu probable) qu’un autre élément du réseau (comme un répartiteur de charge) tronque l’entête.
    Les requêtes doivent inclure un entête « Host » valide.',
      'Sample every request (slow).' => 'Tester chaque requête (lent).',
      '\'%s\' binary not found or Imagemagick is not installed.' => 'Binaire \'%s\' introuvable, ou Imagemagick n’est pas installé.',
      'Unsafe MySQL "local_infile" Setting Enabled' => 'Paramètre non sûr « local_infile » activé dans MySQL',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' does not exist.' => 'Le composant PATH \'%s\' (qui se résoud dans le chemin absolu \'%s\') n’est pas utilisable parce que \'%s\' n’existe pas.',
      'The search index algorithm has been updated and the index needs be rebuilt.' => 'L’algorithme d’index de la recherche a été mis à jour et l’index doit être reconstruit.',
      'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.
    You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.
    For more information on locked and hidden configuration, including details about this setup issue, see %s.
    This database value is currently respected, but a future version of Phabricator will stop respecting database values for locked configuration options.' => 'La valeur de configuration « %s » est verrouillée (elle ne peut donc pas être modifiée depuis l’interface web), mais a une valeur de base de données. Habituellement, cela signifie qu’elle n’était pas verrouillée auparavant, que vous l’avez défini au moyen de l’interface web et que plus tard elle a été verrouillée.
    Vous devriez copier cette valeur de configuration vers une source de configuration locale (habituellement en utilisant %s), puis la supprimer de la base de données avec la commande ci-dessous.
    Pour plus d’informations sur la configuration cachée et verrouillée, y compris les détails concernant ce problème d’installation, consultez %s.
    Cette valeur en base de données est actuellement respectée, mais une future version de Phabricator cessera de respecter les valeurs en base de données pour les options de configuration verrrouillées.',
      'Phabricator has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => 'Phabricator a %s disponible dans %s, mais le binaire s’est terminé avec un code erreur quand il est exécuté comme %s. Vérifiez qu’il est installé correctement.',
      'The current PHP configuration has these %d value(s):' => 'La configuration PHP actuelle a ces %s valeurs :',
      'This issue is currently ignored, and does not show a global warning.' => 'Ce problème est actuellement ignoré, et n’affiche pas d\'avertissement global.',
      'Cache Status' => 'État du cache',
      'You have at least one repository configured which uses this version control system. It will not work without the VCS binary.' => 'Vous avez au moins un dépôt configuré qui utilise ce gestionnaire de configuration. Il ne fonctionnera pas sans le binaire du VCS.',
      'Done. Migrated %d keys.' => 'Terminé. %s clés migrées.',
      'The remote IP.' => 'L’adresse IP distante.',
      'Disable Prototypes' => 'Désactiver les prototypes',
      'US West (PDT)' => 'États-Unis Ouest (PDT)',
      'Deleted \'%s\' from %s configuration.' => '\'%s\' supprimé de la configuration %s.',
      'Run Normally' => 'Exécuter normalement',
      'Default key for HMAC digests where the key is not important (i.e., the hash itself is secret). You can change this if you want (to any other string), but doing so will break existing sessions and CSRF tokens. This option is deprecated. Newer code automatically manages HMAC keys.' => 'Clé par défaut pour les résumés HMAC où la clé est sans importance (c.-à-d., le hachage lui-même est secret). Vous pouvez modifier cela si vous voulez (en une autre chaîne), mais faire cela cassera les sessions existantes et les jetons CSRF. Cette option est obsolète. Du code plus récent gère automatiquement les clés HMAC.',
      'Highlight %s as PHP.' => 'Surligner %s comme PHP.',
      'MySQL is Using Default Stopword File' => 'MySQL utilise le fichier de mots à ignorer par défaut',
      'Pagespeed is enabled, but should be disabled.' => 'Pagespeed est activé, mais devrait être désactivé.',
      'Paths to additional phutil libraries to load.' => 'Chemins vers les bibliothèques phutil supplémentaires à charger.',
      'User Guide: Prototype Applications' => 'Guide utilisateur : Applications prototype',
      'If you enable this, linked YouTube videos will be embedded inline. This has mild security implications (you\'ll leak referrers to YouTube) and is pretty silly (but sort of awesome).' => 'Si vous activez cela, les vidéos YouTube liées seront intégrées en ligne. Cela a de légères implications de sécurité (vous ferez fuiter les parrains vers YouTube) et est plutôt stupide (mais plutôt impressionnant).',
      'Library' => 'Bibliothèque',
      'The \'%s\' binary could not be located or executed.' => 'Le binaire \'%s\' n’a pas pu être trouvé ou exécuté.',
      'Show Email Preferences Link' => 'Afficher le lien des préférences de courriel',
      'Confirm before redirecting so DarkConsole can be examined.' => 'Confirmer avant de rediriger, afin que DarkConsole puisse être examiné.',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with Phabricator. Disable \'%s\' in your PHP configuration to continue.' => 'Vous avez \'%s\' d’activé dans votre configuration PHP.
    Cette option n’est pas compatible avec Phabricator. Désactivez \'%s\' dans votre configuration PHP pour continuer.',
      'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.
    If you provide an instance identifier here (normally by injecting it with a `%s`), Phabricator will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'AVERTISSEMENT : C’est une option très avancée, et utile seulement pour héberger des fournisseurs exécutant des grappes à plusieurs titulaires.
    Si vous fournissez un identifiant d’instance ici (normalement en l’injectant avec un `%s`), Phabricator le passera aux sous-processus et validera les crochets dans la variable d’environnement `%s`.',
      'Phabricator can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 
    For instructions on installing and enabling Pygments, see the %s configuration option.
    If you do not want to install Pygments, you can ignore this issue.' => 'Phabricator peut mettre en évidence quelques langages par défaut, mais installer et activer Pygments (un outil tiers de mise en évidence) ajoutera la mise en évidence de la syntaxe pour davantage de langages. 
    Pour des instructions sur l’installation et l’activation de Pygments, voyez l’option de configuration %s.
    Si vous ne voulez pas installer Pygments, vous pouvez ignorer ce problème.',
      'On host "%s", MySQL is configured with a small "%s" (%d), which may cause some large writes to fail. The recommended minimum value for this setting is "%d".' => 'Sur l’hôte « %s », MySQL est configuré avec un petit « %s » (%s), ce qui peut provoquer l’échec de longues écritures. La valeur minimale recommandée pour ce paramètre est « %s ».',
      'Config option "%s" is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like "%s".' => 'L’option de configuration « %s » n’est pas valide. L’identifiant de fuseau horaire doit être un identifiant valide de fuseau horaire reconnu par PHP, tel que « %s ».',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not a directory.' => 'Le composant de PATH \'%s\' (qui se résout dans le chemin absolu \'%s\') n’est pas utilisable parce que \'%s\' n’est pas un répertoire.',
      'Unable to connect to MySQL!
    %s
    Make sure Phabricator and MySQL are correctly configured.' => 'Impossible de se connecter à MySQL !
    %s
    Assurez-vous que Phabricator et MySQL sont bien configurés.',
      'Phabricator sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. Phabricator sent username "%s" with password "%s"; received username "%s" and password "%s".
    Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => 'Phabricator s’est envoyé à lui-même une requête de test avec un entête HTTP « Authorization » et s’attendait à ce que ces certificats soient transmis. Toutefois, ils étaient absents ou incorrects quand ils ont été reçus. Phabricator a envoyé un nom d’utilisateur « %s » avec le mot de passe « %s » ; le nom d’utilisateur reçu est « %s » et le mot de passe « %s ».
    Votre serveur web peut ne pas être configuré pour faire suivre l’authentification HTTP basique. Si vous prévoyez d’utiliser l’authentification basique (par exemple, pour accéder aux dépôts), vous devez le reconfigurer.',
      'After installing new PHP extensions, <strong>restart Phabricator for the changes to take effect</strong>. For help with restarting Phabricator, see %s in the documentation.' => 'Après avoir installé de nouvelles extensions PHP, <strong>redémarrer Phabricator pour que les modifications prennent effet</strong>. Pour l’aide concernant le redémarrage de Phabricator, voir %s dans la documentation.',
      'Missing "zip" Extension' => 'Extension « zip » manquante',
      'Set the language list which appears in dropdowns.' => 'Définir la liste de langues qui apparaît dans les listes déroulantes.',
      'Inverse' => 'Inverse',
      'Deprecated Config Source' => 'Source de Configuration Dépréciée',
      'The request body Phabricator sent began:' => 'Le corps de la requête envoyé par Phabricator commençait par :',
      'Indefinite' => 'Non défini',
      'You can rebuild the search index while Phabricator is running.' => 'Vous pouvez reconstruire l\'index de recherche pendant l\'exécution de Phabricator.',
      'Edge Types' => 'Types d’arêtes',
      'Disable access log.' => 'Désactiver le journal d’accès.',
      'Logo configuration is not valid: value must be a dictionary.' => 'La configuration du logo n’est pas valide : la valeur doit être un dictionnaire.',
      'Really ignore this setup issue?' => 'Vraiment ignorer ce problème d’installation ?',
      'Config option "%s" is invalid. The URI must start with "%s" or "%s".' => 'L’option de configuration  « %s » n’est pas valide. L’URI doit commencer par « %s » ou « %s ».',
      'Phabricator supports syntax highlighting a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.
    To install Pygments, visit [[ http://pygments.org | pygments.org ]] and follow the download and install instructions.
    Once Pygments is installed, enable this option (`pygments.enabled`) to make Phabricator use Pygments when highlighting source code.
    After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear Phabricator\'s caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Phabricator supporte la mise en évidence syntaxique de quelques langages par défaut, mais vous pouvez installer Pygments (un outil tiers de mise en évidence syntaxique) pour supporter beaucoup plus de langages.
    Pour installer Pygments, allez sur [[ http://pygments.org | pygments.org ]] et suivez les instructions de téléchargement et d’installation.
    Une fois Pygments installé, activez cette option (`pygments.enabled`) pour faire en sorte que Phabricator utilise Pygments lors de la mise en évidence du code source.
    Une fois que vous avez installé et activé Pygments, le code source nouvellement créé (comme les diffs et les collages) devraient se mettre en évidence correctement. Vous devrez vider les caches de Phabricator pour que le code source déjà existant soit mis en évidence. Pour les instructions concernant la gestion des caches, voyez [[ %s | Gérer les caches ]].',
      'Options relating to syntax highlighting source code.' => 'Options relatives à la mise en évidence de la syntaxe du code source.',
      'Allow HTTP' => 'Permettre HTTP',
      'The current Phabricator configuration has these %d value(s):' => 'La configuration actuelle de Phabricator a ces %s valeurs :',
      'Phabricator sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.' => 'Phabricator s’est envoyé à lui-même une requête de test qui a été compressée avec « Content-Encoding: gzip », mais il a reçu des octets différents de ceux qu’il a envoyés.',
      'Simple Example' => 'Exemple simple',
      'Auth Config Unlocked' => 'Configuration d’authentification déverrouillée',
      'Controls whether Phabricator allows the suppression of email from "maintenance" users.' => 'Contrôler si Phabricator permet la suppression de courriel de la part des utilisateurs de « maintenance ».',
      'Synchronized' => 'Synchronisé',
      'Access key for Amazon EC2.' => 'Clé d’accès pour Amazon EC2.',
      '%s Component Unusable' => '%s composant inutilisable',
      'Unsynchronized' => 'Non synchronisé',
      'Key for HMAC digests.' => 'Clé pour les résumés HMAC.',
      'The request duration, in microseconds.' => 'La durée de la requête, en microsecondes.',
      'Phabricator now supports arbitrarily large files. Consult the documentation for configuration details.' => 'Phabricator supporte maintenant des fichiers arbitrairement gros. Consulter la documentation pour les détails sur la configuration.',
      'Amazon S3 region where your S3 bucket is located. When you specify a region, you should also specify a corresponding endpoint with `amazon-s3.endpoint`. You can find a list of available regions and endpoints in the AWS documentation.' => 'Région d’Amazon S3 où votre compartiment S3 est localisé. Quand vous spécifiez une région, vous devez aussi spécifier un point de terminaison correspondant avec `amazon-s3.endpoint`. Vous pouvez trouver une liste des régions et des points de terminaison disponibles dans la documentation de AWS.',
      'To enable the Phabricator SSH log, specify a path. The access log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).
    If not set, no log will be written.' => 'Pour activer le journal SSH de Phabricator, spécifier un chemin. Le journal des accès peut fournir des informations plus détaillées sur les accès SSH qu’un journal SSH normal (par exemple, il peut montrer les utilisateurs connectés, les commandes, et autres données d’application).
    Si non défini, aucun journal ne sera écrit.',
      'MySQL %s Not Supported' => 'MySQL %s non supporté',
      'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.
    (If you aleady created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => 'Le moteur « InnoDB » n’est pas disponible dans MySQL (sur la machine « %s »). Activez InnoDB dans votre configuration MySQL.
    (Si vous avez déjà créé des tables, MySQL a utilisé à tort un autre moteur pour les créer. Vous devrez les convertir, ou les supprimer et les réinitialiser.)',
      'Option "%s" is of type "%s", but the current value ("%s") is not among the set of valid values: %s.' => 'L’option « %s » est de type « %s », mais la valeur actuelle (« %s ») ne fait pas partie de l’ensemble des valeurs valides : %s.',
      'Controls whether Phabricator sends email "From" users.' => 'Contrôle si Phabricator envoie les courriels « de la part » des utilisateurs.',
      'Auth Application' => 'Application Auth',
      '%s.%s (%s)' => '%s.%s (%s)',
      'All Differential fields are now managed through the configuration option "%s". Use that option to configure which fields are shown.' => 'Tous les champs du différentiel sont désormais gérés via l’option de configuration « %s ». Utiliser cette option pour configurer les champs affichés.',
      'By default, Phabricator includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => 'Par défaut, Phabricator inclut certaines variantes de texte dans l’IHM, comme une invite à « Intervenir » plutôt que « Ajouter un commentaire » dans Maniphest. Si vous préférez des chaînes d’IHM plus traditionnelles comme « Ajouter un commentaire », vous pouvez positionner ce drapeau pour désactiver la plupart des variantes supplémentaires.',
      'Use HSTS' => 'Utilisez HSTS',
      'The current MySQL configuration has these %d value(s):' => 'La configuration actuelle de MySQL a ces %s valeurs :',
      'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.
    There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed Phabricator on, you might set this value to %s.
    You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to Phabricator which make it different from normal workloads with respect to this setting.
    To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:
    %s
    If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => 'L’hôte de base de données « %s » est configuré avec un très petit %s (%s). Cela peut entraîner de mauvaises performances de la base de données et un épuisement des verrous.
    Il n’y a aucune règle absolue pour définir une valeur appropriée, mais un point de départ raisonnable pour une installation standard est quelque chose comme 40%% de la mémoire totale de la machine. Par exemple, si vous avez 4Go de RAM sur la machine sur laquelle vous avez installé Phabricator, vous pouvez mettre cette valeur à %s.
    Vous pouvez lire davantage sur cette option dans la documentation MySQL, pour vous aider à décider comment la configurer pour votre cas d’utilisation. Il n’y a pas de souci particulier à Phabricator qui le rendrait différent des charges de travail normales, en lien avec ce paramètre.
    Pour ajuster ce paramètre, ajoutez quelque chose comme cela à votre fichier %s (dans la section %s), en remplaçant %s par une valeur appropriée à votre hôte et votre cas d’utilisation. Puis redémarrez %s :
    %s
    Si le paramètre actuel vous satisfait, vous pouvez sans souci ignorer cet avertissement d’installation.',
      'Show "To:" and "Cc:" footer hints in email.' => 'Afficher les conseils concernant « À : » et « Copie cachée : » en bas de page dans le courriel.',
      'Write SSH log here.' => 'Écrire le journal SSH ici.',
      'Migrate From "feed.http-hooks" to Webhooks' => 'Migration de "feed.http-hooks" vers Webhooks',
      'You can find more information about configuring OPcache in the %s.' => 'Vous pouvez trouver plus d’information sur la configuration de OPcache dans le %s.',
      'PHP Timezone' => 'Fuseau horaire PHP',
      'This option is not recognized. It may be misspelled.' => 'Cette option n\'est pas reconnue. Veuillez vérifier l\'orthographe.',
      'Customized settings for Phabricator applications.' => 'Paramètres personnalisés pour les applications Phabricator.',
      'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and Phabricator does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.
    Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.
    You may be able to resolve this issue by updating Phabricator, since a newer version of Phabricator is likely to be able to parse the newer version string.
    If updating Phabricator does not fix this, you can report the issue to the upstream so we can adjust the parser.
    If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => 'Impossible de déterminer le numéro de version de « %s ». Habituellement, cela signifie que le programme a modifié sa chaîne de format de version récemment, et que Phabricator ne sait pas encore comment analyser la nouvelle, mais cela peut aussi indiquer que vous avez un très vieux binaire (ou un binaire HS).
    Comme nous ne pouvons pas déterminer le numéro de version, les vérifications des versions minimale et marquées comme mauvaises sont sautés, ce qui fait que nous pourrions ne pas détecter un binaire incompatible.
    Vous pouvez résoudre ce problème en mettant à jour Phabricator, car une version plus récente de Phabricator pourrait peut-être analyser une chaîne de version plus récente.
    Si la mise à jour de Phabricator ne corrige pas cela, vous pouvez signaler et faire remonter le problème, pour que nous ajustions l’analyseur.
    Si vous êtes certain d’avoir une version récente de « %s » installée et fonctionnant correctement, il est en général sans problème d’ignorer cet avertissement.',
      'Internal.' => 'Interne.',
      'Advanced Settings' => 'Paramètres avancés',
      'Phabricator can highlight PHP by default and use Pygments for other languages if enabled. You can provide a custom highlighter engine by extending class %s.' => 'Phabricator peut mettre en évidence le PHP par défaut et utiliser Pygments pour d’autres langages, s’il est activé. Vous pouvez fournir un moteur de mise en évidence personnalisé en étendant la classe %s.',
      'SSH log format.' => 'Format du journal SSH.',
      'The \'%s\' extension is not installed. Without \'%s\', support, Phabricator may not be able to determine the MIME types of uploaded files.' => 'L’extension « %s » n’est pas installée. Sans la prise en charge de « %s », Phabricator pourrait ne pas pouvoir déterminer les types MIME des fichiers téléversés.',
      'Default address used when generating mail.' => 'Adresse pas défaut utilisée lors de la génération d’un courriel.',
      'Learn more about locked and hidden options.' => 'En savoir plus sur les options verrouillées et cachées.',
      'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. Phabricator must be installed on an entire domain; it can not be installed on a path.' => 'L’option de configuration \'%s\' n’est pas valide. L’URI ne doit PAS avoir un chemin, par ex. \'%s\' est OK, mais \'%s\' ne l’est pas. Phabricator doit être installé sur un domaine entier ; il ne peut pas être installé dans un chemin.',
      'Repository Status' => 'Statut du dépôt.',
      'Do Not Use HSTS' => 'Ne pas utiliser HSTS',
      'Phabricator now has application-level management of partitioning and replicas.' => 'Phabricator a maintenant une gestion de niveau application du partitionnement et des réplications.',
      'PHP 7.0-7.1 Not Supported' => 'PHP 7.0-7.1 Non Supporté',
      'List all configuration keys.' => 'Lister toutes les clés de configuration.',
      'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".' => 'La personnalisation par application du préfixe de sujet de courriel n’est plus directement prise en charge. Les préfixes et autres chaînes peuvent être personnalisées avec « translation.override ».',
      'Configuration key "%s" is of type "%s". Specify it in JSON.' => 'La clé de configuration « %s » est de type « %s ». Spécifiez-le en JSON.',
      'This will only affect the current web frontend. Daemons and any other web frontends may continue to use older, cached code from their opcache.' => 'Cela n’affectera que le frontal web actuel. Les démons et tout autre frontal web continueront à utiliser le code en cache plus ancien depuis leur opcache.',
      'Configure real-time notifications.' => 'Configurer les notifications en temps réel.',
      'Surplus Key' => 'Clé excédentaire',
      'Make Phabricator even cooler!' => 'Rendre Phabricator encore plus cool !',
      'Cluster Setup' => 'Installation de la grappe',
      'Obsolete Configuration Option "%s"' => 'Option de configuration « %s » obsolète',
      'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).
    Upgrade %s to a patched version.
    To learn more about how this issue affects Phabricator, see %s.' => 'La version de %s sur ce système est obsolète et contient une vulnérabilité majeure largement connue (la faille « Shellshock »).
    Mettre à jour %s vers une version corrigée.
    Pour en savoir plus sur la manière dont ce problème affecte Phabricator, voyez %s.',
      'Expected Autoincrement' => 'Incrémentation automatique autorisée',
      'This version of Mercurial has a significant memory leak, fixed in 2.2.1. Pushing fails with this version as well; see %s.' => 'Cette version de Mercurial a une fuite mémoire importante, corrigée en 2.2.1. Pousser avec cette version échoue aussi ; voir %s.',
      'MySQL is configured (on host "%s") to only index words with at least %d characters.' => 'MySQL est configuré (sur l’hôte « %s ») pour n’indexer que les mots avec au moins %s caractères.',
      'Too many arguments: expected only a configuration key when using "--stdin".' => 'Trop d’arguments : seule la clé de configuration est attendue en utilisant « --stdin ».',
      'The \'%s\' extension is not installed. Without \'%s\', support, Phabricator will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => 'L’extension « %s » n’est pas installée. Sans prise en charge de « %s », Phabricator ne pourra ni traiter ni redimensionner les images (par exemple, pour générer des vignettes). Installez ou activez « %s ».',
      'Phabricator Setup Error' => 'Erreur d’installation de Phabricator',
      'Major Web/Database Clock Skew' => 'Décalage majeur des horloges entre le web et la base de données',
      'The way Phabricator attributes VCS activity to Phabricator users has changed. There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the Phabricator user that gets associated with VCS commits. This is to support situations where users are incorrectly associated with commits by Phabricator making bad guesses about the identity of the corresponding Phabricator user. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with future Phabricator features which will rely on the existence of these identities.' => 'La façon par laquelle Phabricator attribut l’activité VCS relative aux utilisateurs de Phabricator a changé. Il y a une nouvelle couche d’indirection entre les chaînes qui apparaissent comme auteurs et validateurs VCS (tels que « John Developer <johnd@bigcorp.com> ») et l’utilisateur de Phabricator qui est associé aux validations VCS. Ceci permet de prendre en charge les situations où les utilisateurs sont incorrectement associés avec les validations par Phabricator qui devine mal l’identité de l’utilisateur de Phabricator correspondant. Ceci aide également dans des situations où les dépôts existants sont importés sans avoir créé des comptes pour chacun des contributeurs de ce dépôt. Tant que vous ne reconstruisez pas ces identités de dépôt, vous pourrez rencontrer des problèmes avec des fonctionnalités futures de Phabricator qui supposent l’existence de ces identités.',
      'No repository cluster services are configured.' => 'Aucun service de grappe de dépôt n’est configuré.',
      'Syntax Highlighting' => 'Mise en évidence de la syntaxe',
      'This schema is not expected to exist.' => 'Ce schéma n’est pas censé exister.',
      'View status information for databases, caches, repositories, and other services.' => 'Consulter les informations d’état pour les bases de données, les caches, les dépôts et d’autres services.',
      'This configuration value is defined in these %d configuration source(s): %s.' => 'Cette valeur de configuration est définie dans ces %s source(s) de configuration : %s.',
      'Specify a configuration key to get.' => 'Spécifier une clé de configuration à obtenir.',
      'Can not compare two missing schemata!' => 'Impossible de comparer deux schémas manquants !',
      'Key on Wrong Columns' => 'Clé sur mauvaises colonnes',
      'S3 Partially Configured' => 'S3 partiellement configuré',
      'Migrate file-based configuration to more modern storage.' => 'Migrer la configuration basée sur un fichier vers un stockage plus moderne.',
      'Skipping config of source type %s...' => 'Saut de la configuration du type de source %s…',
      'No profiling' => 'Aucun profil',
      'PHID Types' => 'Types de PHID',
      'Wrote configuration key "%s" to database storage.' => 'Clé de configuration « %s » écrite dans le stockage de la base de données.',
      'The environmental variable %s does not contain %s. You have enabled pygments, which requires %s to be available in your %s variable.' => 'La variable d’environnement %s ne contient pas %s. Vous avez activé pygments, qui demande que %s soit disponible dans votre variable %s.',
      'Use Pygments' => 'Utiliser Pygments',
      'Amazon Web Services' => 'Services web Amazon',
      'US Central (CDT)' => 'États-Unis Central (CDT)',
      'Config option "%s" is invalid. The URI must contain a dot ("%s"), like "%s", not just a bare name like "%s". Some web browsers will not set cookies on domains with no TLD.' => 'L’option de configuration « %s » n’est pas valide. L’URI doit contenir un point (« %s »), comme « %s », pas seulement un nom simple comme « %s ». Certains navigateurs web ne définissent pas de cookies sur des domaines sans TLD.',
      '%s Active' => '%s actif',
      'Subschemata Have Warnings' => 'Le sous-schéma a des avertissements',
      'The base URI for this install is not configured, and major features will not work properly until you configure it.
    You should set the base URI to the URI you will use to access Phabricator, like "http://phabricator.example.com/".
    Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).
    Based on this request, it appears that the correct setting is:
    %s
    To configure the base URI, run the command shown below.' => 'L’URI de base pour cette installation n’est pas configurée, et des fonctionnalités majeures ne fonctionneront pas correctement jusqu’à ce que vous la configuriez.
    Vous devez mettre l’URI de base à l’URI que vous voulez utiliser pour accéder à Phabricator, comme « http://phabricator.example.com/ ».
    Incluez le protocole (http ou https), le nom de domaine et le numéro de port si vous utilisez un port autre que 80 (http) ou 443 (https).
    D’après cette requête, il semble que le bon paramètre soit :
    %s
    Pour configurer l’URI de base, lancez la commande affichée ci-dessous.',
      'Require Administrators to Approve Accounts' => 'Demander que les administrateurs approuvent les comptes',
      'Set %s in your PHP configuration to at least 32MB to support large file uploads.' => 'Mettre %s dans votre configuration PHP à au moins 32Mo pour supporter les téléversements de gros fichiers.',
      'The system sudo user.' => 'L’utilisateur sudo du système.',
      'MySQL %s Mode Not Set' => 'Mode %s de MySQL non activé',
      'If you are using Apache, your server may be configured with "SetInputFilter DEFLATE". This directive destructively mangles requests and emits them with "Content-Length" and "Content-Encoding" headers that no longer match the data in the request body.' => 'Si vous utilisez Apache, il est possible que le serveur soit configuré avec « SetInputFilter DEFLATE ». Cette directive embrouille les requêtes de façon destructive pour les émettre avec des entêtes « Content-Length: » et « Content-Encoding: » qui ne coïncident plus avec les données du corps de la requête.',
      'Phabricator Daemons Are Not Running' => 'Pas de démons Phabricator en cours d\'exécution',
      'A component of the configured PATH can not be used by the webserver: %s' => 'Un composant du PATH configuré ne peut pas être utilisé par le serveur web : %s',
      'Use specific endpoint' => 'Utiliser le point de terminaison spécifique',
      'Configure Recaptcha captchas.' => 'Configurer les captchas de Recaptcha.',
      'Report this Issue to the Upstream' => 'Signaler ce problème en amont',
      'Disable SSH error log.' => 'Désactiver le journal des erreurs SSH.',
      'Options relating to PHD (daemons).' => 'Options relatives à PHD (démons).',
      'Repos' => 'Dépôts',
      'Database configuration.' => 'Configuration de la base de données.',
      'Option "%s" is of type "%s", but the current value ("%s") is not a known, concrete subclass of base class "%s". Valid selections are: %s.' => 'L’option « %s » est de type « %s », mais la valeur actuelle (« %s ») n’est pas une sous-classe connue et concrète de la classe de base « %s ». Les sélections valides sont : %s.',
      'Options for Phabricator developers, including debugging.' => 'Options pour les développeurs de Phabricator, incluant le débogage.',
      'Databases' => 'Bases de données',
      'Basic Example' => 'Exemple de base',
      '%s In / %s Out' => '%s Entrées / %s Sorties',
      'DarkConsole is a development and profiling tool built into Phabricator\'s web interface. You should leave it disabled unless you are developing or debugging Phabricator.
    Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.
    DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole est un outil de développement et de profilage intégré dans l’interface web de Phabricator. Vous devriez le laisser désactivé, à moins que vous ne développiez ou déboguiez Phabricator.
    Une fois DarkConsole activé pour l’installation, **vous devez l’activer pour votre compte avant qu’il n’apparaisse effectivement sur les pages.** Vous pouvez le faire dans Paramètres > Paramètres de développeur.
    DarkConsole expose des données potentiellement sensibles (comme des requêtes, des traces de pile, et paramètres de configuration), donc vous ne devriez en général pas l’activer en production.',
      'The timezone Phabricator should use.' => 'Le fuseau horaire que Phabricator doit utiliser.',
      'Whitelist Specific Addresses' => 'Adresses spécifiques en liste blanche',
      'Other Version Information' => 'Autres informations de versions',
      'Authentication configuration is currently unlocked. Once you finish configuring authentication, you should lock it.' => 'La configuration d’authentification est actuellement déverrouillée. Une fois que vous avez terminé de configurer l’authentification, vous devriez la verrouiller.',
      'Use `%s` instead of this option.' => 'Utiliser `%s` plutôt que cette option.',
      'Control how Phabricator renders user names in mail.' => 'Contrôler comment Phabricator formate les noms d’utilisateur dans les courriels.',
      'You have not configured any authentication providers yet. You should add a provider (like username/password, LDAP, or GitHub OAuth) so users can register and log in. You can add and configure providers using the Auth Application.' => 'Vous n’avez pas encore configuré de fournisseur d’authentification. Vous devez ajouter un fournisseur (comme nom d’utilisateur/mot de passe, LDAP, ou OAuth de GitHub), afin que les utilisateurs puissent s’inscrire et se connecter. Vous pouvez ajouter et configurer des fournisseurs en utilisant l’application Auth.',
      'Run the storage upgrade script to upgrade databases (host "%s" is out of date). Missing patches: %s.' => 'Lancer le script de mise à jour du stockage pour mettre à jour les bases de données (l’hôte « %s » est obsolète). Patchs manquants : %s.',
      'Resource deflation is now managed automatically.' => 'La déflation des ressources est maintenant gérée automatiquement.',
      'MySQL' => 'MySQL',
      'Serious business' => 'Affaire sérieuse',
      'Phabricator received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with Phabricator. You should disable it.' => 'Phabricator a reçu un entête HTTP « X-Mod-Pagespeed » ou « X-Page-Speed » pour cette requête, ce qui indique que vous avez activé « mod_pagespeed » sur ce serveur. Ce module n’est pas compatible avec Phabricator. Vous devriez le désactiver.',
      'External loaders have been replaced. Extend `%s` to implement new PHID and handle types.' => 'Les chargeurs externes ont été remplacés. Étendre `%s` pour implémenter de nouveaux types de PHID et de références.',
      'Authenticating users based on "Reply-To" is no longer supported.' => 'L’identification et authentification des utilisateurs basée sur l’entête « Reply-To: » n’est plus prise en charge.',
      'Option "%s" is of type "%s", but the configured value is not a list.' => 'L’option « %s » est de type « %s », mais la valeur configurée n’est pas une liste.',
      'Cluster instance name, if configured.' => 'Nom de l’instance de la grappe, si elle est configurée.',
      'You likely need to fix your preamble script so REMOTE_ADDR is no longer empty.' => 'Vous devrez sans doute corriger votre script de pré-traitement de sorte que REMOTE_ADDR ne soit plus vide.',
      'You are running PHP version %s. Phabricator does not support PHP versions between 7.0 and 7.1.
    PHP removed signal handling features that Phabricator requires in PHP 7.0, and did not restore them until PHP 7.1.
    Upgrade to PHP 7.1 or newer (recommended) or downgrade to an older version of PHP 5 (discouraged).' => 'Vous exécutez PHP en version %s. Phabricator ne prend pas en charge les versions entre 7.0 et 7.1.
    Les fonctionnalités de gestion de signaux nécessaires pour Phabricator ont été retirées dans PHP 7.0 et pas restaurées avant PHP 7.1.',
      'Unknown Config' => 'Configuration inconnue',
      'Restarting Phabricator' => 'Redémarrage de Phabricator',
      'Detected %s serious issue(s) with the schemata.' => '%s problème(s) sérieux détecté(s) avec le schéma.',
      'Daemons Not Running' => 'Démons non lancés',
      'MySQL username to use when connecting to the database.' => 'Nom d’utilisateur MySQL à utiliser pour se connecter à la base de données.',
      'Secret key for Amazon EC2.' => 'Clé secrète pour Amazon EC2.',
      'Configure the MySQL Native Driver to improve database behavior.' => 'Configurer le pilote natif MySQL pour améliorer le comportement de la base de données.',
      'You must start the Phabricator daemons to send email, rebuild search indexes, and do other background processing.' => 'Vous devez démarrer les démons de Phabricator pour envoyer des courriels, reconstruire les index de recherche, et faire d’autres traitements en tâche de fond.',
      'These %d configuration value(s) are related:' => 'Ces %s valeurs de configuration sont liées :',
      'Names must match to compare schemata!' => 'Les noms doivent correspondre à un schéma de comparaison !',
      'Core Settings' => 'Paramètres centraux',
      'Your MySQL server is configured with the "local_infile" option enabled. This option allows an attacker who finds an SQL injection hole to escalate their attack by copying files from the webserver into the database with "LOAD DATA LOCAL INFILE" queries, then reading the file content with "SELECT" queries.
    You should disable this option in your %s file, in the %s section:
    %s' => 'Votre serveur MySQL est configuré avec l’option « local_infile » activée. Cette option permet à un attaquant qui trouve une faille d’injection de code SQL d’accroître l’impact de son attaque en copiant des fichiers du serveur web vers la base de données avec des requêtes « LOAD DATA LOCAL INFILE », puis lire le contenu de ces fichiers avec des requêtes « SELECT ».
    Vous devriez désactiver cette option dans votre fichier %s, dans la section %s :
    %s',
      'Setup Checks' => 'Vérifications d’installation',
      'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or reconfigure Phabricator.' => 'L’hôte de base de données « %s » est configuré comme maître, mais réplique un autre hôte. C’est dangereux, et peut déformer ou détruire des données. Seuls les répliques devraient être répliquées. Arrêtez la réplication sur l’hôte, ou reconfigurez Phabricator.',
      'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.
    Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).
    Phabricator is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.
    Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.
    You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":
    %s
    Note that if you run other applications against the same database, they may not work in strict mode.
    If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. Phabricator will work correctly with this mode enabled or disabled.' => 'Sur l’hôte de base de données « %s », le paramètre global « sql_mode » n’inclut pas le mode « STRICT_ALL_TABLES ». Activer ce mode est recommandé pour généralement améliorer la façon dont MySQL traite certaines erreurs.
    Sans ce mode activé, MySQL ignorera silencieusement certaines conditions d’erreur, y compris les insertions qui tentent de stocker plus de données que ce qu’une colonne peut contenir. Ce comportement est habituellement indésirable et peut conduire à de la corruption de données (en tronquant des caractères multi-octets au milieu), à de la perte de données (en écartant les données qui ne tiennent pas dans la colonne) ou à des problèmes de sécurité (par exemple, en tronquant des clés ou des certificats et mots de passe).
    Phabricator est développé et testé dans le mode « STRICT_ALL_TABLES », vous devriez donc normalement ne jamais rencontrer ces situations, mais pourriez vous y confronter si vous interagissez directement avec la base de données, exécutez du code d’une tierce partie, développez des extensions or simplement rencontrez une anomalie dans le logiciel.
    Activer « STRICT_ALL_TABLES » fera en sorte que MySQL lève une erreur explicite si une de ces situations inhabituelles se produit. Ceci est un comportement plus sûr et évite que ces situations puissent causer des problèmes secrets, subtiles et potentiellement graves par la suite.
    Vous pouvez trouver plus d’informations concernant ce mode (et la façon de le configurer) dans le manuel de MySQL. Habituellement, il suffit d’ajouter ceci dans votre fichier « my.cnf » (dans la section « [mysqld] ») puis de redémarrer « mysqld » :
    %s
    Notez que si vous exécutez d’autres applications utilisant la même base de données, elles pourraient ne pas fonctionner dans le mode strict.
    Si vous ne pouvez pas ou ne voulez pas activer « STRICT_ALL_TABLES », vous pouvez sereinement ignorer cette avertissement. Phabricator fonctionnera correctement, que ce mode soit activé ou désactivé.',
      'This system has an unpatched version of Bash with a severe, widely disclosed vulnerability.' => 'Ce système a une version non patchée de Bash avec une vulnérabilité grave largement connue.',
      'Keys' => 'Clés',
      'No Auth Providers' => 'Aucun fournisseur d’authentification',
      'Missing Required Extensions' => 'Extensions obligatoires manquantes',
      'The \'%s\' extension has support for only some image types. Phabricator will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => 'L’extension « %s » ne prend en charge que certains types d’images. Phabricator ne pourra pas traiter les images des types manquants tant que vous ne compilez pas « %s » avec la prise en charge de ceux-ci. Types pris en charge : %s. Types manquants : %s.',
      'This option has been migrated to the "Auth" application. Your old configuration is still in effect, but now stored in "Auth" instead of configuration. Going forward, you can manage authentication from the web UI.' => 'Cette option a été migrée depuis l’application « Auth ». Votre ancienne configuration est encore active, mais est maintenant stockée dans « Auth » au lieu de la configuration. En allant plus loin, vous pourrez gérer l’authentification depuis l’IHM web.',
      'Activity "%s" is not currently marked as required, so there is no need to complete it.' => 'L’activité « %s » n’est pas actuellement marquée comme obligatoire, donc il n’est pas nécessaire de la terminer.',
      'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in the Phabricator configuration.' => 'Le binaire \'%s\' est introuvable. Corriger la variable d’environnement %s du serveur web pour inclure le répertoire où il réside, ou ajouter ce répertoire à \'%s\' dans la configuration de Phabricator.',
      'To continue, resolve this problem and reload the page.' => 'Pour continuer, résolvez ce problème et rechargez la page.',
      'Phabricator is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.
    Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => 'Phabricator est actuellement configuré pour servir les téléversements utilisateur depuis le même domaine que le reste du contenu. C’est une risque de sécurité.
    Configurer un CDN (ou un domaine de fichier alternatif) pour éliminer ce risque. Utiliser un CDN améliorera aussi les performances. Voir le guide ci-dessous pour les instructions.',
      'Wordmark' => 'Marque de mot',
      'Severe Security Vulnerability: Unpatched Bash' => 'Faille de sécurité grave : Bash non patché',
      'Force HTTPS' => 'Forcer HTTPS',
      'Without \'%s\', Phabricator will not be able to generate or render diffs in multiple applications.' => 'Sans \'%s\', Phabricator ne pourra pas générer ou rendre les diffs dans plusieurs applications.',
      'Send as Phabricator' => 'Envoyer comme Phabricator',
      'This key is not expected to exist.' => 'Cette clé n’est pas censé exister.',
      '%s.%s' => '%s.%s',
      '%s.%s.%s' => '%s.%s.%s',
      '%d related link(s):' => '%s lien(s) associé(s):',
      'To rebuild identities, run this command:' => 'Pour reconstruire les identités, exécutez cette commande :',
      'Missing Repository Local Path' => 'Manque chemin local du dépôt',
      'An alternate resource map is no longer supported. Instead, use multiple maps. See T4222.' => 'Une correspondance de ressource alternative n’est plus supportée. À la place, utiliser plusieurs cartes. Voir T4222.',
      'Repository Services' => 'Services de dépôt.',
      'Inline comments are now always rendered with a limited amount of context.' => 'Les commentaires dans le code sont maintenant toujours rendus avec une partie limitée du contexte.',
      'Your server is configured with \'%s\', which prevents Phabricator from opening files it requires access to.
    Disable this setting to continue.' => 'Votre serveur est configuré avec \'%s\', ce qui empêche Phabricator d’ouvrir les fichiers auxquels il a besoin d’accéder.
    Désactiver ce paramètre pour continuer.',
      'Locked Configuration Option "%s" Has Database Value' => 'L’option de configuration verrouillée « %s » a la valeur base de données.',
      'Separate values with newlines or commas.' => 'Séparer les valeurs avec de nouvelles lignes ou des virgules.',
      'Don\'t require email verification' => 'Ne nécessite pas de vérification du courriel',
      'Configuration key "%s" is unknown. Use "bin/config list" to list all known keys.' => 'La clé de configuration « %s » est inconnue. Utilisez « bin/config list » pour lister toutes les clés connues.',
      'Alternate File Domain Not Configured' => 'Domaine de fichier alternatif non configuré',
      'MySQLi Extension Not Available' => 'L’extension MySQLi est non disponible',
      'Unknown schema issue "%s"!' => 'Problème inconnu  de schéma « %s » !',
      'Embed Commons videos' => 'Inclure les vidéos de Commons',
      'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.
    This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.
    This set is also used to enforce valid redirect URIs. Phabricator will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.
    Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some Phabricator features which rely on links or redirects may not work.' => 'Quand des utilisateurs écrivent des commentaires comprenant des URI, ils sont automatiquement convertis en liens cliquables si le protocole d’URI apparaît dans cet ensemble.
    Cet ensemble de protocoles est principalement conçu pour prévenir des problèmes de sécurité avec « javascript: » et d’autres gestionnaires d’URI potentiellement dangereux.
    Cet ensemble est également utilisé pour garantir la validité des URI de redirection. Phabricator refusera d’émettre une redirection HTTP avec « Location : » vers une URI ayant un protocole absent de cet ensemble.
    Habituellement, « http » et « https » devraient être présents dans cet ensemble. Si vous retirez un de ces protocoles ou les deux, certaines fonctionnalités de Phabricator qui dépendent de liens ou de redirections pourraient ne pas fonctionner.',
      'Limit page execution time to debug hangs.' => 'Limiter le temps d’exécution de la page pour déboguer les attentes.',
      'Base URI Not Configured' => 'URI de base non configurée',
      'Always Activate DarkConsole' => 'Toujours activer DarkConsole',
      'User Interface' => 'Interface utilisateur',
      'No Schema Issues' => 'Aucun problème de schéma',
      'MySQL database hostname.' => 'Nom d’hôte de la base de données MySQL.',
      'Obsolete Config' => 'Configuration obsolète',
      'Clustering Introduction' => 'Introduction de la mise en grappe',
      'By default, Phabricator serves files from the same domain the application is served from. This is convenient, but presents a security risk.
    You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => 'Par défaut, Phabricator fournit les fichiers depuis le même domaine que l’application. C’est pratique, mais présente un risque de sécurité.
    Vous devriez configurer un CDN ou un domaine de fichier alternatif pour réduire ce risque. Configurer un CDN améliorera aussi les performances. Voyez [[ %s | %s ]] pour des instructions à ce sujet.',
      'MySQL on this machine' => 'MySQL sur cette machine',
      'No such configuration key \'%s\'! Use `%s` to list all keys.' => 'Pas de clé de configuration \'%s\' ! Utiliser `%s` pour lister toutes les clés.',
      'You can respond to various application events by installing listeners, which will receive callbacks when interesting things occur. Specify a list of classes which extend PhabricatorEventListener here.' => 'Vous pouvez répondre à différents événements de l’application en installant des observateurs, qui seront appelés si des choses intéressantes se produisent. Spécifier ici une liste de classes qui étendent PhabricatorEventListener.',
      'This install has a fatal setup error, access the web interface to view details and resolve it.' => 'Cette installation a une erreur de configuration fatale, accédez à l’interface web pour afficher les détails et la résoudre.',
      'Alternate domain to serve files from.' => 'Domaine alternatif depuis lequel livrer les fichiers.',
      'Your webserver is not forwarding credentials.' => 'Votre serveur web ne fait pas suivre les certificats.',
      'Default non-pygments syntax highlighter engine.' => 'Moteur de mise en évidence syntaxique non pygments par défaut.',
      'HTTP Parameter Types' => 'Types de paramètre HTTP',
      'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of Phabricator.
    You can configure Webhooks in Herald.
    To resolve this issue, remove all URIs from "feed.http-hooks".' => 'L\'option « feed.http-hooks » est obsolète en faveur de Webhooks. Elle sera supprimée dans une version future de Phabricator.
    Vous pouvez configurer Webhooks dans Herald.
    Pour résoudre ce problème, suppimez tous les URIs de "feed.http-hooks".',
      'Mangled Webserver Response' => 'Réponse du serveur web perturbée',
      'PHP is currently using the older MySQL external driver instead of the newer MySQL native driver. The older driver lacks options and features (like support for query timeouts) which allow Phabricator to interact better with the database.
    Phabricator will work with the older driver, but upgrading to the native driver is recommended.
    You may be able to install the native driver with a command like: %s' => 'PHP utilise actuellement l’ancien pilote MySQL externe au lieu du nouveau pilote MySQL natif. L’ancien pilote n’a pas les options et fonctionnalités (comme la prise en charge des durées limite de requête) qui permettraient à Phabricator de mieux interagir avec la base de données.
    Phabricator fonctionnera avec l’ancien pilote, mais une mise à jour vers le nouveau pilote est recommandée.
    Vous pouvez installer le pilote natif avec une commande comme : %s',
      'Setup issues to ignore.' => 'Problèmes d’installation à ignorer.',
      'By default, Phabricator links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => 'Par défaut, Phabricator lie les noms d’objet dans les champs de Remarkup à l’objet correspondant. Cette expression rationnelle peut être utilisée pour modifier ce comportement ; les noms d’objet qui lui correspondent ne seront pas liés.',
      'Directory that the daemons should use to store log files.' => 'Répertoire que les démons doivent utiliser pour stocker les fichiers de trace.',
      'Elasticsearch is configured (with the %s setting) but Phabricator encountered an exception when trying to test the index.
    %s' => 'Elasticsearch est configuré (avec le paramètre %s) mais Phabricator a rencontré une exception en essayant de tester l’index.
    %s',
      'Only allow registration from particular domains.' => 'Autoriser seulement l’inscription à partir de domaines particuliers.',
      'Subschemata have setup failures.' => 'Le sous-schéma a des erreurs d’installation.',
      'Normally, Phabricator issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, Phabricator will show a page instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => 'Normalement, les erreurs de Phabricator sont redirigées en HTTP après un POST réussi. Cela peut rendre difficile le débogage de choses qui se passent lors de l’exécution du POST, parce que le service et l’information de profilage sont perdus. En positionnant cette option de configuration, Phabricator affichera une page au lieu de rediriger automatiquement, vous permettant d’examiner le service et l’information de profilage. Cela rend aussi l’expérience utilisateur affreuse, donc vous ne devriez activer cela que pour déboguer.',
      'Phabricator Configuation' => 'Configuration de Phabricator',
      'No performance sampling.' => 'Aucun échantillon de performance.',
      'Show installed extensions and modules.' => 'Afficher les extensions et modules installés.',
      'Opcode Cache' => 'Cache de Opcode',
      'Specify a value to set the configuration key "%s" to, or use "--stdin" to read a value from stdin.' => 'Spécifiez une valeur pour définir la clé de configuration « %s », ou bien utilisez « --stdin » pour lire en valeur depuis le flux d’entrée standard.',
      'ID of the SSH key used to authenticate the request.' => 'ID de la clé SSH utilisée pour authentifier la requête.',
      'US East (EDT)' => 'États-Unis Est (EDT)',
      'The HTTP referrer.' => 'Le référent HTTP.',
      'HTTP Parameters Not Transmitting' => 'Paramètres HTTP non transmis',
      'Determines whether Wikimedia Commons videos get embedded.' => 'Détermine si les vidéos de Wikimédia Commons sont incluses.',
      'Better Collation Available' => 'Meilleure collation disponible',
      'View "%s"' => 'Afficher « %s »',
      'This setup issue has been resolved. ' => 'Ce problème d’installation a été résolu.',
      'Additional configuration options to hide.' => 'Options de configuration supplémentaires à masquer.',
      'The logged-in username, if one is logged in.' => 'Le PHID de l’utilisateur s\'il est connecté.',
      'No REMOTE_ADDR available' => 'Aucun REMOTE_ADDR disponible',
      'File storage in Amazon S3 has been partially configured, but you are missing some required settings. S3 will not be available to store files until you complete the configuration. Either configure S3 fully or remove the partial configuration.' => 'Le stockage de fichiers dans Amazon S3 a été partiellement configuré, mais il vous manque quelques paramètres obligatoires. S3 ne sera pas disponible pour stocker les fichiers tant que vous n’aurez pas terminé la configuration. Configurez S3 complètement, ou bien annulez la configuration partielle.',
      'The logged-in user PHID, if one is logged in.' => 'Le PHID de l’utilisateur s\'il est connecté.',
      'HTTP Path Rewriting Incorrect' => 'Réécriture du chemin HTTP incorrecte',
      'Surplus' => 'Surplus',
      'You have enabled Imagemagick in your config, but the \'%s\' binary is not in the webserver\'s %s. Disable imagemagick or make it available to the webserver.' => 'Vous avez activé Imagemagick dans votre configuration, mais le binaire \'%s\' n’est pas sur le serveur web %s. Désactivez ImageMagick ou rendez-le disponible sur le serveur web.',
      'Instance identifier for multi-tenant clusters.' => 'Identifiant de l’instance pour les grappes à plusieurs titulaires.',
      'Upgrade MySQL Schema' => 'Mettre à jour le schéma MySQL',
      'Unignore Setup Issue' => 'Ne plus ignorer le problème d’installation',
      'Automatically sample some fraction of requests.' => 'Échantillonner automatiquement une fraction des requêtes.',
      'SSH log location.' => 'Emplacement du journal SSH.',
      'Delete a local configuration value.' => 'Supprimer une valeur de configuration locale.',
      'Phabricator can use less-secure but mailing list friendly public reply addresses.' => 'Phabricator peut utiliser des adresses de réponse publiques moins sécurisées, mais plus adaptées aux listes de diffusion.',
      'These paths get appended to your %s environment variable.' => 'Ces chemins seront ajoutés à votre variable d’environnement %s.',
      'These alternative URIs will be able to access \'normal\' pages on your Phabricator install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'Ces URI alternatives pourront accéder aux pages \'normales\' sur votre installation de Phabricator. D’autres fonctionnalités comme OAuth ne fonctionneront pas. Le cas d’utilisation principal pour cela est de déplacer les installations entre les domaines.',
      'Epoch timestamp.' => 'Horodatage Epoch.',
      'Blindigo' => 'Blindigo',
      'Expected Column Type' => 'Type de colonne attendu',
      'Enable developer mode' => 'Activer le mode développeur',
      'Woe! This request had its journey cut short by unexpected circumstances (%s).' => 'Malheur ! Cette requête a eu son cheminement interrompu par des circonstances inattendues (%s).',
      'Customizes retention policies for garbage collectors.' => 'Personnalise la politique de rétention pour les ramasse-miettes.',
      'You can usually install a PHP extension using %s or %s. Common package names are %s or %s. Try commands like these:' => 'Vous pouvez en général installer une extension PHP en utilisant %s ou %s. Les noms de paquet courants sont %s ou %s. Essayez des commandes comme :',
      'This schema can use a better column type.' => 'Ce schéma peut utiliser un meilleur type pour les colonnes.',
      'The request date.' => 'La date de la requête.',
      'Reply handlers can no longer be overridden with configuration.' => 'Les gestionnaires de réponse ne peuvent plus être redéfinis par la configuration.',
      'Note that the default format is subject to change in the future, so if you rely on the log\'s format, specify it explicitly.' => 'Noter que le format par défaut est sujet à modification dans le futur, donc si vous comptez sur le format du journal, spécifiez-le explicitement.',
      'Installed on Burstable CPU Instance' => 'Installé sur une instance de CPU surchargeable',
      'MySQL is Using Default Minimum Word Length' => 'MySQL utilise la longueur de mot minimale par défaut.',
      'Extensions/Modules' => 'Extensions / modules',
      'In places that we display a dropdown to syntax-highlight code, this is where that list is defined.' => 'Dans les endroits où nous affichons une liste déroulante pour mettre en évidence la syntaxe du code, c’est ici que cette liste est définie.',
      'Phabricator daemons no longer use PID files.' => 'Les services d’arrière-plan de Phabricator n’utilisent plus les fichiers PID.',
      'Unignore' => 'Ne plus ignorer',
      'PHP setting "%s" should be set to "-1" to avoid deprecation warnings.' => 'Le paramètre « %s » de PHP doit être mis à « -1 » pour éviter les avertissements d’obsolescence.',
      'Text values that match this regex and are also object names will not be linked.' => 'Les valeurs textuelles qui vérifient cette expression régulière et qui correspondent aussi à des noms d’objets, ne seront pas liées.',
      '%s Held / %sms' => '%s tenus / %sms',
      'Write access log here.' => 'Écrire le journal des accès ici.',
    );
  }

}
