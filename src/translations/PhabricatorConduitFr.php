<?php

final class PhabricatorConduitFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Support for ConduitResultInterface' => 'Supporter pour ConduitResultInterface',
      'Conduit Logs' => 'Journaux de Conduit',
      'Session key is invalid.' => 'La clé de session n’est pas valide.',
      'arc call-conduit' => 'appel de conduit de arc',
      'List capabilities, wire formats, and authentication protocols available on this server.' => 'Lister les capacités, les formats de raccord et les protocoles d’authentification disponibles sur ce serveur.',
      'Conduit tokens inherit the policies of the user they authenticate.' => 'Les jetons de conduit héritent des politiques de l’utilisateur qu’ils authentifient.',
      'JSON' => 'JSON',
      'Deprecated Method' => 'Méthode obsolète',
      'The username you are attempting to authenticate with is not valid.' => 'Le nom d’utilisateur avec lequel vous essayez de vous authentifier n’est pas valide.',
      'This request originates from outside of the Phabricator cluster address range. Requests signed with cluster API tokens must originate from within the cluster.' => 'Cette requête provient d’en dehors de la plage d’adresses de la grappe Phabricator. Les requêtes signées avec les jetons de l’API de a grappe doivent provenir de l’intérieur de la grappe.',
      'All Methods' => 'Toutes les méthodes',
      'API Method: %s' => 'Méthode de l’API : %s',
      'This token is automatically generated by Phabricator, and used to make requests between nodes in a Phabricator cluster. You can not use this token in external applications.' => 'Ce jeton est généré automatiquement par Phabricator, et est utilisé pour faire des requêtes entre les nœuds dans une grappe Phabricator. Vous ne pouvez pas utiliser ce jeton dans des applications externes.',
      'cURL' => 'cURL',
      'OAuth clients may never call this method.' => 'Les clients OAuth ne doivent jamais appeler cette méthode.',
      'Human Readable' => 'Lisible par un humain',
      'Unstable Methods' => 'Méthodes non stables',
      'Retrieve certificate information for a user.' => 'Récupérer les informations de certificat pour un utilisateur.',
      'Call to method newQueryObject() did not return an object of class "%s".' => 'L’appel à la méthode newQueryObject() n’a pas renvoyé d’objet de la classe « %s ».',
      'Reading input from stdin...' => 'Lecture des données insérées à partir de stdin...',
      'All Call Logs' => 'Tous les journaux d’appels',
      'File to read parameters from, or "-" to read from stdin.' => 'Fichier depuis lequel lire les paramètres, ou « - » pour lire depuis stdin.',
      'List of integers.' => 'Liste d’entiers.',
      'You have made too many invalid token requests recently. Wait before making more.' => 'Vous avez fait trop de requêtes de jeton non valide récemment. Attendez avant d’en faire plus.',
      'API token "%s" has the wrong format. API tokens should be 32 characters long and begin with one of these prefixes: %s.' => 'Le jeton d’API « %s » a le mauvais format. Les jetons d’API doivent faire 32 caractères de long et commencer par un de ces préfixes : %s.',
      'Standard API Token' => 'Jeton d’API standard',
      'My Calls' => 'Mes appels',
      'Call' => 'Appeler',
      'Point values must be nonnegative.' => 'Les valeurs de point ne doivent pas être négatives.',
      'API token "%s" was previously valid, but has expired.' => 'Le jeton d’API « %s » a été valide, mais il a expiré.',
      'Use the %s panel in Settings to generate or manage API tokens.' => 'Utiliser le panneau %s dans les Paramètres pour générer ou gérer les jetons d’API.',
      'Conduit' => 'Conduit',
      'Basic ping for monitoring or a health-check.' => 'Ping élémentaire de gestion ou bien contrôle de bon fonctionnement.',
      'The value for parameter \'%s\' is not valid JSON. All parameters must be encoded as JSON values, including strings (which means you need to surround them in double quotes). Check your syntax. Value was: %s.' => 'La valeur pour le paramètre \'%s\' n’est pas du JSON valide. Tous les paramètres doivent être encodés comme des valeurs JSON, y compris les chaînes (ce qui veut dire que vous devez les entourer de guillemets).
    Vérifiez votre syntaxe. La valeur était : %s.',
      'An integer.' => 'Un entier.',
      'The key which signed this request is not trusted. Only trusted keys can be used to sign API calls.' => 'La clé qui a signé cette requête n’est pas fiable. Seules les clés de confiance peuvent être utilisées pour signer les appels à l’API.',
      'Access token does not exist.' => 'Le jeton d’accès n’existe pas.',
      'Method Parameters' => 'Paramètres de la méthode',
      'Signature verification failure. %s' => 'Échec de vérification de la signature. %s',
      'Conduit Tokens' => 'Jetons de Conduit',
      'List of usernames.' => 'Liste des noms d’utilisateur.',
      'Really terminate all active API tokens? Any systems using these tokens will no longer be able to make API requests.' => 'Vraiment résilier tous les jetons d’API actifs ? Tout système utilisant ces jetons ne pourra plus faire de requête à l’API.',
      'Show established API methods with stable interfaces.' => 'Afficher les méthodes d’API définies avec des interfaces stables.',
      'Specify a file to read parameters from with "--input".' => 'Spécifier un fichier depuis lequel lire les paramètres avec « --input ».',
      'Caller' => 'Appelant',
      'Expected integer, got something else.' => 'Entier attendu, quelque chose d’autre obtenu.',
      'Certificate Token' => 'Jeton de certificat',
      'Invalid JSON input.' => 'Entrée JSON non valide.',
      'Certificate Install Token' => 'Jeton d’installation de certificat',
      '<parameters>' => '<paramètres>',
      'You can not call newQueryFromRequest() in this method ("%s") because it does not implement newQueryObject().' => 'Vous ne pouvez pas appeler newQueryFromRequest() dans cette méthode (« %s ») parce qu’elle n’implémente pas newQueryObject().',
      '<api-token>' => '<jeton-API>',
      'See error message for details.' => 'Voir le message d’erreur pour plus de détails.',
      'Literal null.' => 'Null littéral.',
      'There are no API tokens to terminate.' => 'Il n’y a pas de jeton d’API à résilier.',
      'List of user PHIDs.' => 'Liste des PHID des utilisateurs.',
      '%s should require authentication.' => '%s doit demander une authentification.',
      'Expected string, got something else.' => 'Chaîne attendue, quelque chose d’autre obtenu.',
      'Epoch timestamp, as an integer.' => 'Horodatage Epoch, sous forme d’entier.',
      'List of PHIDs.' => 'Liste de PHID.',
      'Find calls by specific users.' => 'Trouver les appels par des utilisateurs spécifiques.',
      'Conduit Methods' => 'Méthodes de Conduit',
      'Request is missing required "%s" parameter.' => 'Il manque à la requête le paramètre obligatoire « %s ».',
      'List with a mixture of PHIDs and tags.' => 'Liste avec un mélange de PHID et de balises.',
      'List of project tags.' => 'Liste des balises du projet.',
      'A PHID.' => 'Un PHID.',
      'List of strings.' => 'Liste de chaînes.',
      'Client/server version mismatch. Upgrade your client.' => 'Les versions du client et du serveur ne correspondent pas. Mettez à jour votre client.',
      'The challenge token you are authenticating with is outside of the allowed time range. Either your system clock is out of whack or you\'re executing a replay attack.' => 'Le jeton de défi avec lequel vous vous authentifiez est en dehors de la plage de durée permise. Soit votre horloge système est déréglée, soit vous exécutez une attaque de rejeu.',
      'Really terminate this token? Any system using this token will no longer be able to make API requests.' => 'Vraiment résilier ce jeton ? Tout système utilisant ce jeton ne pourra plus faire de requêtes à l’API.',
      'Conduit API method "%s" does not exist.' => 'La méthode de l’API Conduit « %s » n’existe pas.',
      'A new version of arc is available! You need to upgrade to connect to this server (you are running version %d, the server is running version %d).' => 'Une nouvelle version d’arc est disponible ! Vous devez vous mettre à jour pour vous connecter à ce serveur (vous exécutez la version %s, le serveur la version %s).',
      'Stable Methods' => 'Méthodes stables',
      'No Conduit method provided.' => 'Aucune méthode de Conduit fournie.',
      'Grant Account Access' => 'Accorder l’accès au compte',
      'Stability' => 'Stabilité',
      'Show old methods which will be deleted in a future version of Phabricator.' => 'Afficher les anciennes méthodes qui seront supprimées dans une prochaine version de Phabricator.',
      'Find calls to stable, unstable, or deprecated methods.' => 'Trouver les appels aux méthodes stables, instables ou obsolètes.',
      'Call Logs' => 'Journaux d’appels',
      'Copy and paste this token into the prompt given to you by `arc install-certificate`' => 'Copier et coller ce jeton dans la zone de saisie qui vous est présentée par `arc install-certificate`',
      'Client/server version mismatch. Upgrade your server or downgrade your client.' => 'Les versions du client et du serveur ne correspondent pas. Mettez à jour votre serveur ou faites rétrograder votre client.',
      'A nonnegative number, or null.' => 'Un nombre non négatif, ou null.',
      'My Deprecated Calls' => 'Mes appels obsolètes',
      '(Wildcard)' => '(Joker)',
      'Errors' => 'Erreurs',
      'User PHID.' => 'PHID de l’utilisateur.',
      'Expected boolean (true or false), got something else.' => 'Booléen (vrai ou faux) attendu, quelque chose d’autre obtenu.',
      'Method Call Result' => 'Résultat d’appel de la méthode',
      'OAuth clients may always call this method.' => 'Les clients OAuth peuvent toujours appeler cette méthode.',
      'Username.' => 'Nom d’utilisateur.',
      'Deprecated Methods' => 'Méthodes obsolètes',
      'Deprecated Call Logs' => 'Journaux des appels obsolètes',
      'No user or device is associated with the public key "%s".' => 'Aucun utilisateur ou appareil n’est associé avec la clé publique « %s ».',
      'Token does not exist or has expired.' => 'Le jeton n’existe pas ou a expiré.',
      'Command Line API Token' => 'Jeton d’API en ligne de commande',
      'Terminate Tokens' => 'Résilier les jetons',
      'Unstable Method' => 'Méthode instable',
      'Login Required: This method requires authentication. You must log in before you can make calls to it.' => 'Connexion obligatoire : Cette méthode nécessite une authentification. Vous devez vous connecter avant de pouvoir faire des appels à celle-ci.',
      'Enter parameters using **JSON**. For instance, to enter a list, type: `%s`' => 'Saisir les paramètres en utilisant **JSON**. Par exemple, pour entrer une liste, taper: `%s`',
      'A string.' => 'Une chaîne.',
      'Method \'%s\' belongs to application \'%s\', which is not installed.' => 'La méthode \'%s\' appartient à l’application \'%s\', qui n’est pas installée.',
      'Single column PHID.' => 'Unique colonne PHID.',
      'Output Format' => 'Format de sortie',
      'Frozen' => 'Gelé',
      'If you submit parameters, these examples will update to show exactly how to encode the parameters you submit.' => 'Si vous soumettez des paramètres, ces exemples seront mis à jour pour afficher exactement la manière d\'encoder les paramètres que vous soumettez.',
      'Returns' => 'Retours',
      'Active API Tokens' => 'Jetons d’API actifs',
      'Conduit API Overview' => 'Vue d’ensemble de l’API de Conduit',
      'Session key is not present.' => 'La clé de session n’est pas présente.',
      'No matching calls in log.' => 'Aucun appel correspondant dans le journal.',
      'Show new methods which are subject to change.' => 'Afficher les nouvelles méthodes qui sont sujettes à changement.',
      'Invalid parameter information was passed to method \'%s\'.' => 'L’information de paramètre non valide a été passée à la méthode \'%s\'.',
      'Conduit client "%s" is not known.' => 'Le client « %s » de Conduit est inconnu.',
      'After you copy and paste this token, `arc` will complete the certificate install process for you.' => 'Après avoir copié et collé ce jeton, `arc` achèvera le processus d’installation du certificat pour vous.',
      'Copy-paste the API Token below to grant access to your account.' => 'Copier-coller le jeton d’API ci-dessous pour accorder l’accès à votre compte.',
      'Access token is invalid or expired.' => 'Le jeton d’accès n’est pas valide ou a expiré.',
      'API token "%s" is not valid.' => 'Le jeton d’API « %s » n’est pas valide.',
      'Expected numeric points value, got something else.' => 'Valeur de points numérique attendue, quelque chose d’autre obtenu.',
      'API token is not associated with a valid user.' => 'Le jeton d’API n’est pas associé à un utilisateur valide.',
      'You don\'t have any active API tokens.' => 'Vous n’avez pas de jetons d’API actifs.',
      'This will authorize the requesting script to act on your behalf permanently, like giving the script your account password.' => 'Cela autorisera le script de requête à agir en votre nom de façon permanente, comme si vous aviez donné au script le mot de passe de votre compte.',
      'Generate API Token' => 'Générer un jeton d’API',
      'Generate a new API token?' => 'Générer un nouveau jeton d’API ?',
      'List with a mixture of PHIDs and dictionaries.' => 'Liste avec un mélange de PHID et de dictionnaires.',
      'OAuth Scope' => 'Portée de OAuth',
      'Find calls to specific methods.' => 'Trouver les appels aux méthodes spécifiques.',
      'Developer API' => 'API du développeur',
      'API token "%s" has the wrong length. API tokens should be 32 characters long.' => 'Le jeton de l’API « %s » a une mauvaise longueur. Les jetons de l’API doivent faire 32 caractères de long.',
      'List with a mixture of PHIDs and usernames.' => 'Liste avec un mélange de PHID et de noms d’utilisateur.',
      'Terminate API Token' => 'Jeton d’API résilié',
      'Expected a list, but value is an object.' => 'Une liste est attendue, mais la valeur est un objet.',
      'Method to call.' => 'Méthode à appeler.',
      'Callers' => 'Appelants',
      'You do not have authorization to call this method.' => 'Vous n’avez pas l’autorisation d’appeler cette méthode.',
      'Cluster API Token' => 'Jeton de l’API de grappe',
      'Your \'%s\' client version is \'%d\', which is newer than the server version, \'%d\'. Upgrade your Phabricator install.' => 'Votre version de client \'%s\' est \'%s\', qui est plus récente que la version du serveur, \'%s\'. Mettez à jour votre installation de Phabricator.',
      'View API Token' => 'Afficher le jeton de l’API',
      'Expected PHID or null, got something else.' => 'PHID ou null attendu, obtenu quelque chose d\'autre.',
      'List of position dictionaries.' => 'Liste des dictionnaires de position.',
      'Call Method' => 'Appeler la méthode',
      'Call a Conduit method..' => 'Appeler une méthode de Conduit.',
      'This method is frozen and will eventually be deprecated.' => 'Cette méthode est gelée et sera rendue obsolète un jour.',
      'Install Certificate' => 'Installer un certificat',
      'Method Result' => 'Résultat de la méthode',
      'OAuth clients may call this method after requesting access to the "%s" scope.' => 'Les clients OAuth peuvent appeler cette méthode après avoir demandé l’accès à la portée « %s ».',
      'Unknown Conduit token type "%s"!' => 'Type de jeton Conduit « %s » inconnu !',
      'The request you submitted is signed with a timestamp, but that timestamp is not within %s of the current time. The signed timestamp is %s (%s), and the current server time is %s (%s). This is a difference of %s seconds, but the timestamp must differ from the server time by no more than %s seconds. Your client or server clock may not be set correctly.' => 'La requête que vous avez soumise est signée avec un horodatage, mais cet horodatage n’est pas dans %s de l’heure actuelle. L’horodatage signé est %s (%s), et l’heure actuelle du serveur est %s (%s). Il y a une différence de %s secondes, mais l’horodatage ne doit pas différer de l’heure du serveur de plus de %s secondes. L’horloge de votre client ou du serveur n\'est peut être pas bien réglée.',
      'Error while reading "%s": %s' => 'Erreur en lisant « %s » : %s',
      'No Tokens to Terminate' => 'Aucun jeton à résilier',
      'This method is new and unstable. Its interface is subject to change.' => 'Cette méthode est nouvelle et instable. Son interface est susceptible d’être modifiée.',
      'Terminate API Tokens' => 'Résilier les jetons d’API',
      'Modern Methods' => 'Méthodes modernes',
      'List of column PHIDs.' => 'Liste des PHID de colonne.',
      'List of project PHIDs.' => 'List des PHID de projet.',
      'You can not access the user inside the implementation of a Conduit method which does not require authentication (as per %s).' => 'Vous ne pouvez pas accéder à l’utilisateur dans l’implémentation d’une méthode Conduit qui ne nécessite pas d’authentification (suivant %s).',
      'Stable' => 'Stable',
      'Returns the parameters of the Conduit methods.' => 'Renvoie les paramètres des méthodes Conduit.',
      'Authentication is invalid.' => 'L’authentification n’est pas valide.',
      'This request originates from outside of the Phabricator cluster address range. Requests signed with trusted device keys must originate from within the cluster.' => 'Cette requête provient d’une adresse en dehors de la plage d’adresses de la grappe de Phabricator. Les requêtes signées avec des clés de confiance d’appareil  doivent provenir de l’intérieur de la grappe.',
      'A boolean.' => 'Un booléen.',
      'Provided "%s" ("%s") is not recognized.' => '« %s » (« %s ») fourni n’est pas reconnu.',
      'You do not have access to the application which provides this API method.' => 'Vous n’avez pas accès à l’application qui fournit cette méthode de l’API.',
      'Integer overflow.' => 'Dépassement d’entier.',
      'Specify a method to call with "--method".' => 'Spécifier une méthode à appeler avec « --method ».',
      'Your authentication certificate for this server is invalid.' => 'Votre certificat d’authentification pour ce serveur n’est pas valide.',
      'User account is not permitted to use the API.' => 'Le compte utilisateur n’a pas le droit d’utiliser l’API.',
      'Connect a session-based client.' => 'Connecter un client en se basant sur la session.',
      'Any mixed or complex value. Check the documentation for details.' => 'Une valeur mélangée ou complexe. Vérifier la documentation pour les détails.',
      'Frozen Method' => 'Méthode gelée',
      'Too many Conduit methods provided.' => 'Trop de méthodes Conduit fournies.',
      'Expected a nonempty list, but value is an empty list.' => 'Une liste non vide est attendue, mais la valeur est une liste vide.',
      'This method is deprecated.' => 'Cette méthode est obsolète.',
      'API Method "%s" defines a disallowed parameter, "%s". This parameter name is reserved.' => 'La méthode d’API « %s » définit un paramètre refusé, « %s ». Ce nom de paramètre est réservé.',
      'Unstable' => 'Instable',
      'Access token is for invalid user.' => 'Le jeton d’accès est pour un utilisateur non valide.',
      'Epoch timestamp must be larger than 0, got %d.' => 'L’horodatage Epoch doit être plus grand que 0, %s obtenu.',
      'Method Status' => 'État de la méthode',
      'API Method "%s" does not define these parameters: %s.' => 'La méthode d’API « %s » ne définit pas ces paramètres : %s.',
      'Client is unknown.' => 'Le client est inconnu.',
      'Certificate token points to an invalid user!' => 'Le jeton du certificat pointe vers un utilisateur non valide !',
      'Expected a list, but value is not a list.' => 'Une liste était attendue, mais la valeur n’est pas une liste.',
      'Expected PHID, got something else.' => 'PHID attendu, quelque chose d’autre obtenu.',
      'If you change your mind, you can revoke this token later in {nav icon=wrench,name=Settings > Conduit API Tokens}.' => 'Si vous changez d’avis, vous pourrez révoquer ce jeton plus tard dans {nav icon=wrench,name=Paramètres > Jetons d’API de Conduit}.',
      'Generate Token' => 'Générer un jeton',
      'Terminate Token' => 'Résilier un jeton',
      'This server requires authentication.' => 'Ce serveur nécessite une authentification.',
    );
  }

}
