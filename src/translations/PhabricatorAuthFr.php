<?php

final class PhabricatorAuthFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      '%s enabled login.' => '%s a activé l\'identification.',
      'Welcome to Phabricator!' => 'Bienvenue à Phabricator!',
      'SSH Key Actions' => 'Actions clés SSH',
      'Adding a PKCS8 keyfile to the cache can be very dangerous. If the PKCS8 file really encodes a different public key than the one specified, an attacker could use it to gain unauthorized access.
    Generally, you should use this option only in a development environment where ssh-keygen is broken and it is inconvenient to fix it, and only if you are certain you understand the risks. You should never cache a PKCS8 file you did not generate yourself.' => 'L’ajout d’un fichier de clé PKCS8 au cache peut être très dangereux. Si le fichier PKCS8 encore réellement une clé publique différente que celle spécifiée, un attaquant pourrait l’utiliser pour obtenir des accès non autorisés.
    En général, vous ne devez utiliser cette option que dans un environnement de développement où ssh-keygen ne fonctionne pas et où il est difficile de le réparer, et seulement si vous êtes certain de comprendre les risques. Vous ne devez jamais mettre en cache un fichier PKCS8 que vous n’avez pas généré vous-même.',
      'This provider ("%s") already exists, and you can not add more than one instance of it. You can edit the existing provider, or you can choose a different provider.' => 'Ce fournisseur (« %s ») existe déjà, et vous ne pouvez pas en ajouter plus d’une instance. Vous pouvez modifier le fournisseur existant, ou vous pouvez choisir un autre fournisseur.',
      'Specify an OAuth client id with %s.' => 'Specifiez un client OAuth avec %s.',
      'The verification code you provided is incorrect, or the email address has been removed, or the email address is owned by another user. Make sure you followed the link in the email correctly and are logged in with the user account associated with the email address.' => 'Le code de vérification que vous avez fourni n’est pas correct, ou l’adresse de messagerie a été supprimée, ou elle appartient à un autre utilisateur. Assurez-vous d’avoir bien suivi le lien dans le courriel, et que vous êtes connecté avec le compte utilisateur associé avec l’adresse de messagerie.',
      'To continue, add at least one authentication factor to your account.' => 'Pour continuer, ajoutez au moins un facteur d\'authentification à votre compte.',
      'Algorithm' => 'Algorithme',
      'You must specify the username of the account to recover.' => 'Vous devrez specifier le nom d\'utilisateur du compte à récupérer.',
      'Revoke Tokens' => 'Revoquer des jetons',
      'This Phabricator install is not configured with any enabled authentication providers which can be used to log in. If you have accidentally locked yourself out by disabling all providers, you can use `%s` to recover access to an administrative account.' => 'Cette installation de Phabricator n’est pas configurée avec un fournisseur d’authentification activé qui puisse être utilisé pour se connecter. Si vous vous êtes accidentellement verrouillé en désactivant tous les fournisseurs, vous pouvez utiliser `%s` pour rétablir l’accès à un compte d’administration.',
      'An email has been sent with a link you can use to log in.' => 'Un email vous a été envoyé avec le lien que vous pouvez utiliser pour vous identifier.',
      'There are too many configured default registration providers.' => 'Il y a trop de fournisseurs d\'abonnement configurés par défaut.',
      'Unlink "%s" Account?' => 'Détacher le compte "%s" ?',
      'Strip factors from specified users.' => 'Supprimer les facteurs des utilisateurs spécifiés.',
      'Provider Implementation Missing!' => 'Absence d’implémentation du fournisseur !',
      'Unknown session type "%s".' => 'Type de session inconnu "%s".',
      'Setup Admin Account' => 'Configurer un compte administrateur',
      'To configure Bitbucket OAuth, log in to Bitbucket and go to **Manage Account** > **Access Management** > **OAuth**.
    Click **Add Consumer** and create a new application.
    After completing configuration, copy the **Key** and **Secret** to the fields above.' => 'Pour configurer OAuth de Bitbucket, connectez-vous à Bitbucket et allez dans **Gestion de compte** > **Gestion d’accès** > **OAuth**.
    Cliquez sur0 **Ajouter un consommateur** et créez une nouvelle application.
    Après avoir achevé la configuration, copiez la **Clé** et le **Secret** dans les champs ci-dessus.',
      'The account you are attempting to register or link is already linked to another user.' => 'Le compte que vous tentez d’enregistrer ou de lier est déjà lié à un autre utilisateur.',
      'The email address associated with this external account ("%s") is not a valid email address and can not be used to register a Phabricator account. Choose a different, valid address.' => 'L’adresse de messagerie associée avec ce compte externe (« %s ») n’est pas une adresse de messagerie valide et ne peut pas être utilisée pour enregistrer un compte Phabricator. Choisir une autre adresse valide.',
      'Verify an unverified email address which is already attached to an account. This will also re-execute event hooks for addresses which are already verified.' => 'Vérifier et dévérifier l’adresse de messagerie qui est déjà attachée à un compte. Cela réexécutera aussi les modules d’événement pour les adresses qui sont déjà vérifiées.',
      'Email Address' => 'Adresse courriel',
      'Must Verify Email' => 'Adresse courriel à vérifier',
      'SSH Key Type' => 'Type de clé SSH',
      '%s enabled auto login.' => '%s a activé la connexion automatique.',
      'The email address ("%s") associated with the external account is already in use by an existing Phabricator account. Multiple Phabricator accounts may not have the same email address, so you can not use this email address to register a new Phabricator account.' => 'L’adresse de messagerie (« %s ») associée avec le compte externe est déjà utilisée par un compte Phabricator existant. Plusieurs comptes Phabricator ne peuvent pas avoir la même adresse de messagerie, vous en pouvez donc pas utiliser cette adresse pour enregistrer un nouveau compte Phabricator.',
      'Invalid OAuth Access Token' => 'Jeton d’accès OAuth non valide',
      'Verify Email' => 'Vérifier l\'adresse courriel',
      'Phabricator already trusts OAuth client "%s".' => 'Phabricator fait déjà confiance au client OAuth « %s ».',
      'Phabricator will skip email verification for accounts registered through this provider.' => 'Phabricator sautera la vérification par courriel pour les comptes enregistrés via ce fournisseur.',
      'Path to public keyfile.' => 'Chemin vers le fichier de clé publique.',
      'Strip all factors, regardless of type.' => 'Enlever tous les facteurs, quel que soit le type.',
      'Enabled Providers' => 'Activer les fournisseurs',
      'Account is already registered or linked.' => 'Le compte est déja enregistré ou lié.',
      '(Some types of token can not be revoked, and you can not revoke tokens which have already expired.)' => '(Certains types de jeton ne peuvent pas être révoqués, et vous ne pouvez pas révoquer des jetons qui ont déjà expiré.)',
      'The external account ("%s") you just authenticated with is not configured to allow account linking on this Phabricator install. An administrator may have recently disabled it.' => 'Le compte externe (« %s ») que vous venez d’authentifier n’est pas configurer pour autoriser la liaison sur cette installation de Phabricator. Un administrateur l’a peut-être récemment désactivé.',
      'Unable to Log In' => 'Connexion impossible',
      'If you want to link an existing Phabricator account to this external account, do not continue. Instead: log in to your existing account, then go to "Settings" and link the account in the "External Accounts" panel.' => 'Si vous voulez vous lier un compte Phabricator existant à ce compte externe, ne continuez pas. À la place : connectez-vous sur votre compte existant, puis allez dans « Paramètres » et liez le compte dans le panneau « Comptes externes ».',
      'Session has already signed required legalpad documents!' => 'La session a déjà signé les documents legalpad nécessaires !',
      'On the plus side, that purple notification bubble will disappear.' => 'Le côté positif, c’est que cette bulle de notification pourpre disparaîtra.',
      'This account ("%s") can not establish web sessions, so it is not possible to generate a functional recovery link. Special accounts like daemons and mailing lists can not log in via the web UI.' => 'Ce compte (« %s ») ne peut pas établir de sessions web, donc il n’est pas possible de générer un lien de récupération fonctionnel. Les comptes spéciaux comme les démons et les listes de diffusion ne peuvent se connecter via l’IHM web.',
      'Revoke credentials of the given type.' => 'Révoquer les certificats du type fourni.',
      'LDAP Port' => 'Port LDAP',
      'Really trust this PKCS8 keyfile?' => 'Vraiment faire confiance à ce fichier de clé PKCS8 ?',
      '%s updated the OAuth consumer key for this provider from "%s" to "%s".' => '%s a mis à jour la clé du consommateur OAuth pour ce fournisseur de « %s » en « %s ».',
      'No public key was provided.' => 'Pas de clé publique fournie.',
      'Phabricator base URI should include protocol (like "%s").' => 'L’URI de base de Phabricator doit inclure le protocole (comme « %s »).',
      'Log In with LDAP' => 'Connexion avec LDAP',
      'Start TLS after binding to the LDAP server.' => 'Démarrer TLS après liaison avec le serveur LDAP.',
      'Condolences on forgetting your password. You can use this link to reset it:
      %s
    After you set a new password, consider writing it down on a sticky note and attaching it to your monitor so you don\'t forget again! Choosing a very short, easy-to-remember password like "cat" or "1234" might also help.
    Best Wishes,
    Phabricator
    ' => 'Condoléances pour l’oubli de votre mot de passe. Vous pouvez utiliser ce lien pour le réinitialiser :
      %s
    Après avoir défini un nouveau mot de passe, pensez à l’écrire sur un post-it et à l’attacher à votre écran pour ne plus l’oublier ! Choisir un mot de passe très court et facile à se rappeler, comme « chat » ou « 1234 », peut aussi aider.
    Meilleurs vœux,
    Phabricator',
      'TOTP Code' => 'Code TOTP',
      'OAuth Consumer Key' => 'Clé utilisateur OAuth',
      'Account Not Refreshable' => 'Compte impossible à rafraîchir',
      'You can only recover the username for one account.' => 'Vous ne pouvez retrouver le nom d\'utilisateur que pour un compte.',
      'There are no matching tokens to revoke.' => 'Il n\'y a pas de jetons correspondants à révoquer.',
      '%s disabled email trust.' => '%s a désactivé la confiance dans le courriel.',
      'Phabricator Base URI' => 'URI de base de Phabricator',
      'LDAP Username: ' => 'Nom d\'utilisateur LDAP :',
      'That email address is not verified, but the account it is connected to has at least one other verified address. When an account has at least one verified address, you can only send password reset links to one of the verified addresses. Try a verified address instead.' => 'Cette adresse de courriel n\'est pas vérifiée, mais le compte qui lui est rattaché a au moins une autre adresse vérifiée. Quand un compte a au moins une adresse vérifiée, vous ne pouvez envoyer de liens de réinitialisation qu\'à l\'une des adresses vérifiées. Essayez une adresse vérifiée plutôt.',
      'Allow users to log in using this provider. If you disable login, users can still use account integrations for this provider.' => 'Permettre aux utilisateurs d’utiliser ce fournisseur. Si vous désactivez la connexion, les utilisateurs pourront encore utiliser les intégrations de compte depuis ce fournisseur.',
      'Allow Login:' => 'Autoriser la connexion :',
      'Terminate Session?' => 'Fermer la session ?',
      'Wrong Account' => 'Compte erroné',
      'Refresh tokens for a given user.' => 'Rafraîchir les jetons pour un utilisateur donné.',
      'Already Registered' => 'Déjà enregistré',
      'Allow users to register new Phabricator accounts using this provider. If you disable registration, users can still use this provider to log in to existing accounts, but will not be able to create new accounts.' => 'Permettre aux utilisateurs d’enregistrer de nouveaux comptes Phabricator en utilisant ce fournisseur. Si vous désactivez les inscriptions, les utilisateurs pourront toujours utiliser ce fournisseur pour se connecter à des comptes existants, mais ne pourront pas créer de nouveaux comptes.',
      'SECURITY WARNING' => 'AVERTISSEMENT DE SECURITE',
      'This public key is already associated with another user or device. Each key must unambiguously identify a single unique owner.' => 'Cette clé publique est déjà associée avec un autre utilisateur ou un autre appareil. Chaque clé doit identifier sans ambiguïté un seul et unique utilisateur.',
      '%s set the OAuth consumer secret for this provider.' => '%s a défini le secret du consommateur OAuth pour ce fournisseur.',
      'You are logged in as %s, but the email address (%s) you just clicked a link from is already associated with another account (%s). You can log out to switch accounts, or verify the address and attach it to your current account. Attach email address %s to user account %s?' => 'Vous êtes connecté.e en tant que %s, mais l\'adresse de courriel (%s) depuis laquelle vous avez cliqué sur un lien est déjà associé avec un autre compte (%s). Vous pouvez vous déconnecter pour passer d\'un compte à l\'autre, ou vérifier l’adresse et l\'attacher au compte que vous utilisez actuellement. Souhaitez-vous rattacher l\'adresse de courriel %s au compte utilisateur %s ?',
      'Phabricator already does not trust OAuth client "%s".' => 'Phabricator ne fait déjà pas confiance au client OAuth « %s ».',
      'Username Attribute' => 'Attributs du nom d\'utilisateur',
      'Before you can use Phabricator, you need to add multi-factor authentication to your account.' => 'Avant de pouvoir utiliser Phabricator, vous devez ajouter l\'authentification multi-facteur à votre compte.',
      'To learn more about multi-factor authentication, click the %s button below.' => 'Pour en savoir plus quant à l’authentification multi-facteur, cliquez sur le bouton %s ci-dessous.',
      'JIRA base URI is required.' => 'L’URI de base de JIRA est obligatoire.',
      'Attempted to set \'%s\' cookie to \'%s\', but your browser sent back a cookie with the value \'%s\'. Clear your browser\'s cookies and try again.' => 'Il a été essayé de changer la valeur du cookie « %s » à « %s », mais votre navigateur a retourné un cookie avec la valeur « %s ». Nettoyez les cookies dans votre navigateur et essayez à nouveau.',
      'Always bind and search, even without a username and password.' => 'Toujours lier et rechercher, même sans nom d’utilisateur et mot de passe.',
      'Skipping, provider is not enabled or does not exist.' => 'Sauter, le fournisseur n’est pas activé ou n’existe pas.',
      'Allow users to link account credentials for this provider to existing Phabricator accounts. There is normally no reason to disable this unless you are trying to move away from a provider and want to stop users from creating new account links.' => 'Permettre aux utilisateurs de lier des certificats de compte pour ce fournisseur à des comptes Phabricator existants. Il n’y a normalement aucune raison pour désactiver cela, sauf si vous essayez d’écarter un fournisseur et voulez arrêter la création de nouveaux liens de compte par les utilisateurs.',
      'Does Not Allow Registration' => 'Ne permet pas l’inscription',
      'Path to corresponding PKCS8 key.' => 'Chemin vers la clé PKCS8 correspondante.',
      'Strength' => 'Force',
      'Enter LDAP Credentials' => 'Saisir les identifiants LDAP',
      'Email record ("%s") has bad associated user PHID ("%s").' => 'L\'adresse de courriel enregistrée (%s) a un PHID utilisateur mal associé (%s).',
      'This email address has already been verified.' => 'Cette adresse de courriel a déjà été confirmée.',
      'The email address you just clicked a link from is already the primary email address for a registered account (%s). Log in to continue.' => 'L\'adresse de courriel depuis laquelle vous avez cliqué sur un lien est déjà l\'adresse primaire pour un compte enregistré (%s). Connectez-vous pour continuer.',
      'Cache the PKCS8 format of a public key. When developing on OSX, this can be used to work around issues with ssh-keygen. Use `%s` to generate a PKCS8 key to feed to this command.' => 'Mettre en cache le format PKCS8 d’une clé publique. En développant sur OSX, cela peut être utilisé pour contourner les problèmes avec ssh-keygen. Utiliser `%s` pour générer une clé PKCS8 pour alimenter cette commande.',
      'Revoke from all credential owners.' => 'Révoquer tous les possesseurs de certificats.',
      'Invite has invalid author PHID ("%s").' => 'L’invité a un PHID d’auteur non valide (« %s »).',
      'Use lowercase letters, digits, and periods. For example: %s' => 'Utilisez des minuscules, des chiffres et des points. Par exemple : %s',
      'Anonymous Password' => 'Mot de passe anonyme',
      'Use the button below to log in as: %s' => 'Utiliser le bouton ci-dessous pour vous connecter en tant que : %s',
      '**Step 2 of 2**: In this step, you will configure JIRA.
    **Create a JIRA Application**: Log into JIRA and go to **Administration**, then **Add-ons**, then **Application Links**. Click the button labeled **Add Application Link**, and use these settings to create an application:
      - **Server URL**: `%s`
      - Then, click **Next**. On the second page:
      - **Application Name**: `Phabricator`
      - **Application Type**: `Generic Application`
      - Then, click **Create**.
    **Configure Your Application**: Find the application you just created in the table, and click the **Configure** link under **Actions**. Select **Incoming Authentication** and click the **OAuth** tab (it may be selected by default). Then, use these settings:
      - **Consumer Key**: Set this to the "Consumer Key" value in the form above.
      - **Consumer Name**: `Phabricator`
      - **Public Key**: Set this to the "Public Key" value in the form above.
      - **Consumer Callback URL**: `%s`
    Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.' => '**Étape 2 sur 2**: Dans cette étape, vous configurerez JIRA.
    **Créer une application JIRA**: Se connecter à JIRA et aller dans **Administration**, puis **Modules**, puis **Liens d’application**. Cliquer sur le bouton intitulé **Ajouter un lien d’application**, et utiliser ces paramètres pour créer une application :
      - **URL du serveur** : `%s`
      - Puis cliquer sur **Suivant**. Sur la deuxième page :
      - **Nom de l’application** : `Phabricator`
      - **Type de l’application** : `Application générique`
      - Puis cliquer sur **Créer**.
    **Configurer votre application**: Trouver l’application que vous venez de créer dans le tableau, et vliquer sur le lien **Configurer** sous **Actions**. Sélectionner **Authentification entrante** et cliquer sur l’onglet **OAuth** (il devrait être sélectionné par défaut). Puis utiliser ces paramètres :
      - **Clé du consommateur** : Mettre cela à la valeur de « Clé du consommateur » dans le formulaire ci-dessus.
      - **Nom du consommateur** : `Phabricator`
      - **Clé publique** : Mettre cela à la valeur de « Clé publique » du formulaire ci-dessus.
      - **URL de rappel du consommateur** : `%s`
    Cliquer sur **Enregistrer** dans JIRA. L’authentification devrait maintenant être configurée, et ce fournisseur fonctionner correctement.',
      'Active OAuth Token' => 'Activer le jeton OAuth',
      'Administrative approvals are disabled, so users who register will be able to use their accounts immediately. To enable approvals, configure %s.' => 'Les approbations des administrateurs sont désactivées, donc les utilisateurs qui s’inscriront pourront utiliser immédiatement leurs comptes. Pour activer les approbations, configurer %s.',
      'Google' => 'Google',
      'Updated; Phabricator trusts OAuth client %s.' => 'Mis à jour ; Phabricator fait confiance au client OAuth %s.',
      'Optionally, specify one or more comma-separated attributes to use to prefill the "Real Name" field when registering a new account. This is purely cosmetic and does not affect the login process, but can make registration a little easier.' => 'De façon facultative, spécifier un attribut ou plus séparés par des virgules pour utiliser le champ prérempli « Nom réel » lors de l’inscription d’un nouveau compte. C’est purement cosmétique, et n’affecte pas le processus de connexion, mais peut faciliter un peu l’inscription.',
      'You must enter an LDAP password.' => 'Vous devez entrer un mot de passe LDAP.',
      'Generate New Keypair' => 'Générer une nouvelle paire de clés',
      'Strip a specific factor type.' => 'Enlever un type de facteur spécifique.',
      'You have successfully configured multi-factor authentication for your account.' => 'Vous avez bien configuré l’authentification à plusieurs facteurs pour votre compte.',
      'Invite action is not a send action!' => 'L&action de l’invité n’est pas une action envoyée !',
      'This key is trusted. Trusted keys can not be edited. Use %s to revoke trust before editing the key.' => 'Cette clé est fiable. Les clés de confiance ne peuvent pas être modifiées. Utiliser %s pour révoquer la confiance avant de modifier la clé.',
      'Last Valid Account' => 'Dernier compte valide',
      'user=%s, verified=%s, primary=%s, should_verify=%s' => 'utilisateur=%s, vérifié=%s, principal=%s, à_vérifier=%s',
      'NOTE: Any user who can browse to this install\'s login page will be able to register a Phabricator account. To restrict who can register an account, configure [[ %s | %s ]].' => 'NOTE : Tout utilisateur qui peut naviguer jusqu’à cette page de connexion d’installation pourra inscrire un compte Phabricator. Pour restreindre qui peut inscrire un compte, configurer [[ %s | %s ]].',
      'Add Multi-Factor Auth' => 'Ajouter l\'authentification multi-facteur',
      'You must enter an LDAP username.' => 'Vous devez entrer un nom d\'utilisateur LDAP.',
      'Refresh LDAP Account' => 'Rafraîchir le compte LDAP',
      'Reset action counters so a user can continue taking rate-limited actions.' => 'Réinitialiser les compteurs d’action pour qu’un utilisateur puisse continuer à prendre des actions avec un taux limité.',
      'No Providers Configured:' => 'Aucun fournisseur configuré :',
      'If you continue, you will create a new account. You will not be able to link this external account to an existing account.' => 'Si vous continuez, vous créerez un nouveau compte. Vous ne pourrez pas lier ce compte externe à un compte existant.',
      '%s set the OAuth consumer key for this provider to "%s".' => '%s a défini la clé de consommateur OAuth pour ce fournisseur à « %s ».',
      'Launch the application on your phone, and add a new entry for this Phabricator install. When prompted, scan the QR code or manually enter the key shown below into the application.' => 'Lancer l’application sur votre téléphone, et ajouter une nouvelle entrée à cette installation de Phabricator. Quand on vous le demandera, scannez le code QR ou saisissez manuellement la clé affichée ci-dessous dans l’application.',
      'Multi-Factor Authentication Configured' => 'Authentification à plusieurs facteurs configurée',
      'Connecting to LDAP...' => 'Connexion à LDAP...',
      'No matching SSH keys.' => 'Pas de clés SSH correspondantes.',
      'Authentication Error' => 'Erreur d\'authentification',
      'Edit Provider' => 'Modifier le fournisseur',
      'Auth' => 'Auth',
      'Provided public key is not properly formatted.' => 'La clé publique fournie n’est pas au bon format.',
      '(You can not terminate your current login session. To terminate it, log out.)' => '(Vous ne pouvez pas terminer votre session de connexion actuelle. Pour la terminer, déconnectez-vous.)',
      'Your account has been created, but needs to be approved by an administrator. You\'ll receive an email once your account is approved.' => 'Votre compte a été créé, mais doit être approuvé par un administrateur. Vous recevrez un courriel une fois que votre compte est approuvé.',
      'Cached PKCS8 key for public key.' => 'Clé PKCS8 en cache pour la clé publique.',
      'Refreshing token, current token expires in %s seconds.' => 'Rafraîchir le jeton, le jeton courant expire dans %s secondes.',
      'Allows Registration' => 'Permet l’inscription',
      'Application ID is required.' => 'L’ID de l’application est obligatoire.',
      'You do not have a linked account on this provider, and thus can not refresh it.' => 'Vous n’avez pas de compte lié sur ce fournisseur, et donc ne pouvez pas le rafraîchir.',
      'To configure Facebook OAuth, create a new Facebook Application here:
    https://developers.facebook.com/apps
    You should use these settings in your application:
      - **Site URL**: Set this to `%s`
      - **Valid OAuth redirect URIs**: You should also set this to `%s`
      - **Client OAuth Login**: Set this to **OFF**.
      - **Embedded browser OAuth Login**: Set this to **OFF**.
    Some of these settings may be in the **Advanced** tab.
    After creating your new application, copy the **App ID** and **App Secret** to the fields above.' => 'Pour configurer OAuth de Facebook, créer une nouvelle application Facebook ici :
    https://developers.facebook.com/apps
    Vous devez utiliser ces paramètres dans votre appolication :
      - **URL du site**: La mettre à `%s`
      - **URIs de redirection sur OAuth valide**: Vous devez aussi le mettre à  `%s`
      - **Connexion OAuth client**: Le mettre à **OFF**.
      - **Connexion OAuth de navigateur embarqué**: Le mettre à **OFF**.
    Certains de ces paramètres peuvent se trouver dans l’onglet **Avancé**.
    Après avoir créé votre nouvelle application, copier l’**App ID** et **App Secret** dans les champs ci-dessus.',
      'Use the **OAuth App Notes** field to record details about which account the external application is registered under.' => 'Utiliser le champ **OAuth App Notes** pour enregistrer des détails sur le compte sous lequel l’application externe est inscrite.',
      'firstname, lastname' => 'prénom, nom',
      'Minimum length of %d characters.' => 'Longueur minimale de %s caractères.',
      'This provider does not allow refreshing.' => 'Ce fournisseur n’autorise pas le rafraîchissement.',
      'One-Time Login Token' => 'Jeton de connexion unique',
      'The id of the OAuth client.' => 'L’id du client OAuth.',
      'Target "%s" is not a valid target to revoke credentials from. Usually, revoke from "@username".' => 'La cible « %s » n’est pas une cible valide depuis laquelle révoquer les certificats. En général, révoquer depuis « @username ».',
      'Set Phabricator to trust an OAuth client. Phabricator redirects to trusted OAuth clients that users have authorized without user intervention.' => 'Configurer Phabricator pour faire confiance à un client OAuth. Phabricator redirige vers les clients OAuth de confiance que les utilisateurs ont autorisés, sans intervention de leur part.',
      'The email address you just clicked a link from is already associated with a registered account (%s), but is not verified. Log in to that account to continue. If you can not log in, you can register a new account.' => 'L’adresse de messagerie depuis laquelle vous venez de cliquer sur un lien est déjà associée à un compte inscrit (%s), mais n’est pas vérifiée. Connectez-vous  à ce compte pour continuer. Si vous ne pouvez pas vous connecter, vous pouvez enregistrer un nouveau compte.',
      'You are destroying an entire class of credentials. This may be very disruptive to users. You should normally do this only if you suspect there has been a widespread compromise which may have impacted everyone.' => 'Vous êtes en train de détruire toute une classe de certificats. Cela peut être perturbant pour les utilisateurs. Vous devez normalement faire cela uniquement si vous suspectez qu’il y a eu compromis général qui peut avoir impacté tout le monde.',
      'To configure Disqus OAuth, create a new application here:
    http://disqus.com/api/applications/
    Create an application, then adjust these settings:
      - **Callback URL:** Set this to `%s`
    After creating an application, copy the **Public Key** and **Secret Key** to the fields above (the **Public Key** goes in **OAuth App ID**).' => 'Pour configurer OAuth de Disqus, créez une nouvelle application ici :
    http://disqus.com/api/applications/
    Créez une application, puis réglez ces paramètres :
      - **URL de rappel :** La mettre à `%s`
    Après avoir créé une application, copiez la **Clé publique** et la **Clé secrète** dans les champs ci-dessus (la **Clé publique** va dans **OAuth App ID**).',
      'Special users like daemons and mailing lists are not permitted to log in via the web. Log in as a normal user instead.' => 'Les utilisateurs spéciaux comme les démons et les listes de diffusion ne sont pas autorisés à se connecter via le web. Se connecter comme un utilisateur normal à la place.',
      'Use --type to specify which factor to strip, or --all-types to strip all factors. Use `auth list-factors` to show the available factor types.' => 'Utiliser --type pour spécifier quel facteur enlever, ou --all-types pour enlever tous les facteurs. Utiliser `auth list-factors` pour afficher les types de facteur disponibles.',
      'Revoke Token?' => 'Révoquer le jeton ?',
      'To configure WordPress.com OAuth, create a new WordPress.com Application here:
    https://developer.wordpress.com/apps/new/.
    You should use these settings in your application:
      - **URL:** Set this to your full domain with protocol. For this     Phabricator install, the correct value is: `%s`
      - **Redirect URL**: Set this to: `%s`
    Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'Pour configurer OAuth de WordPress.com, créer une nouvelle application WordPress.com ici :
    https://developer.wordpress.com/apps/new/.
    Vous devez utiliser ces paramètres dans votre application :
      - **URL :** La mettre à votre domaine complet avec son protocole. Pour cette installation de Phabricator, la bonne valeur est : `%s`
      - **URL de redirection** : La mettre à : `%s`
    Une fois l’application créée, copier le **Client ID** et le **Client Secret** dans les champs ci-dessus.',
      'Asana' => 'Asana',
      'continue to Phabricator' => 'poursuivre vers Phabricator',
      'Terminate all login sessions.' => 'Terminer toutes les sessions connectées.',
      'Send Another Email' => 'Envoyer un autre courriel',
      'Failed to find an OAuth client with ID %s.' => 'Échec de recherche d’un client OAuth avec l’ID %s.',
      'No Account Linked' => 'Aucun compte lié',
      'Slack' => 'Slack',
      'The external account ("%s") you just used to log in is already associated with another Phabricator user account. Log in to the other Phabricator account and unlink the external account before linking it to a new Phabricator account.' => 'Le compte externe (« %s ») que vous venez d’utiliser pour vous connecter est déjà associé avec un autre compte utilisateur Phabricator. Connectez-vous à l’autre compte Phabricator et supprimez le compte externe avant de le lier avec un nouveau compte Phabricator.',
      'Refresh OAuth access tokens. This is primarily useful for development and debugging.' => 'Rafraîchir les jetons d’accès OAuth. Ceci est surtout utile pour le développement et le débogage.',
      'The OAuth provider returned an error: %s' => 'Le fournisseur OAuth a renvoyé une erreur : %s',
      'Empty account ID!' => 'ID de compte vide !',
      'Registration Failed' => 'Échec de l’inscription',
      'Unable to Verify Email' => 'Impossible de vérifier le courriel',
      'Public SSH Key' => 'Clé SSH publique',
      'Username and password are required!' => 'Le nom d’utilisateur et le mot de passe sont obligatoires !',
      'Disqus' => 'Disqus',
      'You will no longer be able to use this account to log in to Phabricator.' => 'Vous ne pourrez plus utiliser ce compte pour vous connecter à Phabricator.',
      'Expected \'%s\' in request!' => '\'%s\' attendu dans la requête !',
      '%s updated the OAuth application notes for this provider.' => '%s a mis à jour les notes de l’application OAuth pour ce fournisseur.',
      '%s updated the "%s" value.' => '%s a mis à jour la valeur « %s ».',
      'All Keys' => 'Toutes les clés',
      'Terminate Sessions' => 'Terminer les sessions',
      'Upload Public Key' => 'Télécharger la clé publique',
      'OAuth App Notes' => 'Notes de l’application OAuth',
      'Your Phabricator account is already connected to an external account on this provider ("%s"), but you are currently logged in to the provider with a different account. Log out of the external service, then log back in with the correct account before refreshing the account link.' => 'Votre compte Phabricator est déjà connecté à un compte externe sur ce fournisseur (« %s »), mais vous êtes actuellement connecté sur ce fournisseur avec un autre compte. Déconnectez-vous du service externe, puis reconnectez-vous avec le bon compte avant de rafraîchir le lien du compte.',
      'Log In (%s)' => 'Connecter (%s)',
      'Do you want to disable this provider? Users will not be able to register or log in using linked accounts. If there are any users without other linked authentication mechanisms, they will no longer be able to log in. If you disable all providers, no one will be able to log in.' => 'Voulez-vous désactiver ce fournisseur ? Les utilisateurs ne pourront plus s’inscrire ou se connecter en utilisant les comptes liés. S’il y a des utilisateurs sans autres mécanismes d’authentification liée, ils ne pourront plus se connecter. Si vous désactivez tous les fournisseurs, personne ne pourra se connecter.',
      'Login Failure' => 'Échec de connexion',
      '%s enabled account linking.' => '%s a activé la liaison de compte.',
      'Account Already Linked' => 'Compte déjà lié',
      'Another user already has that email.' => 'Un autre utilisateur a déjà ce courriel.',
      '%s Require users to enable \'secure browsing\' on Facebook in order to use Facebook to authenticate with Phabricator. This improves security by preventing an attacker from capturing an insecure Facebook session and escalating it into a Phabricator session. Enabling it is recommended.' => '%s oblige les utilisateurs à activer la \'navigation sécurisée\' sur Facebook, afin de pouvoir utiliser Facebook pour s’authentifier avec Phabricator. Cela améliore la sécurité en empêchant un attaquant de capturer une session Facebook non sécurisée et de la faire escalader en une session Phabricator. Il est recommandé de l’activer.',
      'Your account has been disabled.' => 'Votre compte a été désactivé.',
      'Forgot Password / Email Login' => 'Mot de passe / Courriel de connexion oublié',
      'You can use this link to reset your Phabricator password:
      %s
    ' => 'Vous pouvez utiliser ce lien pour réinitialiser votre mot de passe Phabricator :
      %s',
      'JIRA base URI should include protocol (like "https://").' => 'L’URI de base de JIRA doit inclure le protocole (comme « https:// »).',
      'Authentication provider ("%s") encountered an error while attempting to log in. %s' => 'Le fournisseur d’authentification (« %s ») a rencontré une erreur en tentant de se connecter. %s',
      'There are no matching factors to strip.' => 'Il n’y a pas de facteur correspondant à enlever.',
      'The invite code in the link you clicked is invalid. Check that you followed the link correctly.' => 'Le code d’invitation dans le lien sur lequel vous avez cliqué n’est pas valide. Vérifiez que vous avez suivi le bon lien.',
      'Twitter' => 'Twitter',
      'Unable to Generate Keys' => 'Impossible de générer les clés',
      'Specify the target to revoke credentials from with "--from" or specify "--everywhere".' => 'Spécifier la cible pour laquelle révoquer les certificats avec « --from » ou spécifier « --everywhere ».',
      'Log In or Register with LDAP' => 'Se connecter ou s\'enregistrer avec LDAP',
      'The external account you are registering with has an email address that is already in use ("%s") by an existing Phabricator account. Choose a new, valid email address to register a new Phabricator account.' => 'Le compte externe avec lequel vous vous êtes inscrit a une adresse de messagerie qui est déjà utilisée (« %s ») par un compte Phabricator existant. Choisir une nouvelle adresse de messagerie  valide pour enregistrer un nouveau compte Phabricator.',
      'Login validation is missing expected parameter ("%s").' => 'La validation de la connexion n’a pas le paramètre obligatoire (« %s »).',
      'Next Step' => 'Étape suivante',
      '%s enabled account unlinking.' => '%s a activé la suppression de la liaison du compte.',
      'The email address %s is now verified.' => 'Cette adresse de courriel %s est à présent vérifiée.',
      '%s disabled this provider.' => '%s a désactivé ce fournisseur.',
      'Not Installed' => 'Pas installé',
      'Your browser did not submit a "%s" cookie with client state information in the request. Check that cookies are enabled. If this problem persists, you may need to clear your cookies.' => 'Votre navigateur n’a pas soumis un cookie « %s » avec les informations d’état du client dans la requête. Vérifiez que les cookies sont activés. Si le problème persiste, vous devrez nettoyer vos cookies.',
      'Found %s account(s) to refresh.' => '%s compte(s) trouvé(s) devant être mis à jour.',
      'Leave high security and return your session to normal security levels?' => 'Quitter la haute sécurité et ramener votre session à des niveaux de sécurité normaux ?',
      'OAuth App Secret' => 'Secret de l’application OAuth',
      'Skipping, provider has no stored refresh token.' => 'Sauté, le fournisseur n’a pas enregistré de jeton rafraîchi.',
      'Really terminate session %s?' => 'Vraiment terminer la session %s ?',
      'Terminate Sessions?' => 'Fermer les sessions ?',
      '%s enabled email trust.' => '%s a activé la confiance dans le courriel.',
      'End of dry run.' => 'Fin du galop d’essai.',
      'Revoke credentials which may have been leaked or disclosed.' => 'Révoquer les certificats qui peuvent avoir fuité ou avoir été divulgués.',
      'Destroyed %s credential(s) of type "%s".' => '%s certificat(s) de type « %s » détruit(s).',
      '%s set the OAuth application ID for this provider to "%s".' => '%s a défini l’ID de l’application OAuth pour ce fournisseur à « %s ».',
      'To configure Google OAuth, create a new \'API Project\' here:
    https://console.developers.google.com/
    Adjust these configuration settings for your project:
      - Under **APIs & auth > APIs**, scroll down the list and enable     the **Google+ API**.
         - You will need to consent to the **Google+ API** terms if you  have not before.
      - Under **APIs & auth > Credentials**, click **Create New Client    ID** in the **OAuth** section. Then use these settings:
         - **Application Type**: Web Application
         - **Authorized Javascript origins**: Leave this empty.
         - **Authorized redirect URI**: Set this to `%s`.
    After completing configuration, copy the **Client ID** and **Client Secret** from the Google console to the fields above.' => 'Pour configurer OAuth de Google, créer un nouveau \'Projet API\' ici :
    https://console.developers.google.com/
    Réglez ces paramètres de configuration pour votre projet :
      - Sous **APIs & auth > APIs**, faire défiler la liste et activer l’**API Google+**.
         - Vous devez accepter les conditions de l’**API Google+** si ce n’est pas déjà fait.
      - Sous **APIs & auth > Cerficicats**, cliquer sur **Créer un nouvel ID client** dans la section **OAuth**. Puis utiliser ces paramètres :
         - **Type d’application**: Application Web
         - **Origines JavaScript autorisées**: Laisser vide.
         - **URI de redirection autorisée**: Le mettre à `%s`.
    Après avoir terminé la configuration, copiez le **Client ID** et le **Client Secret** de la console Google dans les champs ci-dessus.',
      'Skipping, provider does not support token refresh.' => 'Sauté, le fournisseur ne supporte pas le rafraîchissement de jeton.',
      'The OAuth provider failed to retrieve an account ID.' => 'Le fournisseur OAuth n’a pas pu retrouver un ID de compte.',
      'Reset action counters for this user.' => 'Réinitialiser les compteurs d’action pour cet utilisateur.',
      'Edit SSH Key' => 'Modifier la clé SSH',
      'Welcome, %s. To complete the process of logging in, provide your multi-factor credentials.' => 'Bienvenue %s. Pour finaliser le processus de connexion, fournissez vos informations d\'authentification multi-facteur.',
      'Already Accepted Invite' => 'Invitation déjà acceptée',
      'This provider is already configured.' => 'Ce fournisseur est déja configuré.',
      '**JIRA Instance Name**
    Choose a permanent name for this instance of JIRA. Phabricator uses this name internally to keep track of this instance of JIRA, in case the URL changes later.
    Use lowercase letters, digits, and period. For example, `jira`, `jira.mycompany` or `jira.engineering` are reasonable names.' => '**Nom d’instance JIRA**
    Choisir un nom permanent pour cette instance de JIRA. Phabricator utilise ce nom en interne pour garder trace de cette instance de JIRA, au cas où l’URL change plus tard.
    Utiliser des lettres minuscules, des chiffres et des points. Par exemple, `jira`, `jira.macompagnie` ou `jira.ingenierie` sont des noms acceptables.',
      'No user exists with username "%s".' => 'Il n’existe pas d\'utilisateur avec le nom « %s ».',
      'Account does not match provider!' => 'Le compte ne correspond pas au fournisseur !',
      'Account Not Linkable' => 'Compte non liable',
      'ou=People, dc=example, dc=com' => 'ou=Personne, dc=exemple, dc=com',
      'Provide Multi-Factor Credentials' => 'Fournir des certificats à plusieurs facteurs',
      'You can make adjustments from the Settings panel later.' => 'Vous pourrez faire des ajustements plus tard depuis le panneau des Paramètres.',
      'Add Multi-Factor Authentication' => 'Ajouter une authentification à plusieurs facteurs',
      'JIRA instance name must contain only lowercase letters, digits, and period.' => 'Le nom de l’instance JIRA ne doit contenir que des lettres minuscules, des chiffres et des points.',
      'Terminate Session' => 'Terminer la session',
      'You must choose a password.' => 'Vous devez choisir un mot de passe.',
      'Failed to find an OAuth client with id %s.' => 'Impossible de trouver un client OAuth avec l’id %s.',
      'Unlink Account?' => 'Ne plus lier le compte ?',
      'You can only verify one address at a time.' => 'Vous ne pouvez vérifier qu’une adresse à la fois.',
      'SSH Key %d' => 'Clé SSH %s',
      'Public key type should be one of: %s' => 'Le type de clé publique doit être une des valeurs : %s',
      'App Code' => 'Code de l’application',
      '%s edited a property of this provider.' => '%s a modifié une propriété de ce fournisseur.',
      'Auth Email Invites' => 'Invitations de courriel d’authentification',
      '**Step 2 of 2 - Configure Phabricator OAuth Instance**
    To configure Phabricator OAuth, create a new application here:
    %s/oauthserver/client/create/
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => '**Étape 2 sur 2 - Configurer l’instance OAuth de Phabricator**
    Pour configurer OAuth de Phabricator, créer une nouvelle application ici :
    %s/oauthserver/client/create/
    En créant votre application, utiliser ces paramètres :
      - **URI de redirection :** La mettre à : `%s`
    Après avoir terminé la configuration, copier le **Client ID** et le **Client Secret** dan sles champs ci-dessus (vous aurez peut-être besoin de générer le secret du client en cliquant d’abord sur \'Nouveau Secret\').',
      'Welcome to Phabricator' => 'Bienvenue à Phabricator',
      'Address Verified' => 'Adresse vérifiée',
      'You will no longer be able to use your %s account to log in to Phabricator.' => 'Vous ne pourrez plus utiliser votre compte %s pour vous connecter à Phabricator.',
      'DISABLE APPROVAL QUEUE' => 'DÉSACTIVER LA FILE D’APPROBATION',
      'No OAuth Access Token' => 'Aucun jeton d’accès OAuth',
      'You are already logged in.' => 'Vous êtes déjà connecté.',
      'The account you are attempting to register with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.' => 'Le compte avec lequel vous tentez de vous inscrire utilise un fournisseur d’authentification inexistant ou désactivé (avec la clé « %s »). Un administrateur a peut-être récemment désactivé ce fournisseur.',
      'Link LDAP Account' => 'Lier le compte LDAP',
      '%s turned "Require Secure Browsing" off.' => '%s a désactivé « Nécessite une navigation sécurisée ».',
      'ldap.example.com' => 'ldap.example.com',
      'TOTP Sync Token' => 'Jeton de synchronisation TOTP',
      'Username or Email' => 'Nom d’utilisateur ou adresse de courriel',
      'Verify this email address (%s) and attach it to your account (%s)?' => 'Vérifier cette adresse de messagerie (%s) et l’attacher à votre compte (%s) ?',
      'Before you can set up or use LDAP, you need to install the PHP LDAP extension. It is not currently installed, so PHP can not talk to LDAP. Usually you can install it with `%s`, `%s`, or a similar package manager command.' => 'Avant de pouvoir définir ou utiliser le LDAP, vous devez installer l’extension LDAP de PHP. Elle n’est pas installée pour l’instant, donc PHP ne peut pas discuter avec un LDAP. En général, vous pouvez l’installer avec `%s`, `%s`, ou la commande similaire d’un gestionnaire de paquet.',
      'Anyone who can browse to this Phabricator install will be able to register an account. To add email domain restrictions, configure %s.' => 'Quiconque peut naviguer vers cette installation de Phabricator pourra enregistrer un compte. Pour ajouter des restrictions de domaine de courriel, configurer %s.',
      'To configure Slack OAuth, create a new application here:
    https://api.slack.com/docs/sign-in-with-slack#create_slack_app
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Pour configurer OAuth de Slack, créer une nouvelle application ici :
    https://api.slack.com/docs/sign-in-with-slack#create_slack_app
    Pour créer votre application, utiliser ces paramètres :
      - **URI de redirection :** La mettre à : `%s`
    Après avoir terminé la configuration, copier le **Client ID** et le **Client Secret** dans les champs ci-dessus (vous devrez peut-être générer le secret client en cliquant d’abord sur \'Nouveau Secret\').',
      'Amazon' => 'Amazon',
      'Your browser did not submit a registration key with the request. You must use the same browser to begin and complete registration. Check that cookies are enabled and try again.' => 'Votre navigateur n’a pas envoyé de clé d’inscription avec la requête. Vous devez utiliser le même navigateur pour commencer et terminer une inscription. Vérifiez que les cookies sont activés et réessayez.',
      'Unlink Account' => 'Dissocier le compte',
      'You must specify the path to a public keyfile with %s.' => 'Vous devez spécifier le chemin vers un fichier de clé publique avec %s.',
      'Remove multi-factor authentication from an account.' => 'Supprimer l’authentification à plusieurs facteurs d’un compte.',
      'Edit Existing Provider' => 'Modifier un fournisseur existant',
      'Add Authentication Provider' => 'Ajouter un fournisseur d\'authentification',
      'Do you want to enable this provider? Users will be able to log in to Phabricator using linked accounts.' => 'Voulez-vous activer ce fournisseur ? Les utilisateurs pourront se connecter à Phabricator en utilisant les comptes liés.',
      'Signing session legalpad documents of user with no session!' => 'Signature des documents legalpad de session de l’utilisateur sans session !',
      'Phabricator base URI is required.' => 'L\'URI de la base Phabricator est nécessaire.',
      'Verify this email address (%s) and attach it to your account?' => 'Vérifier cette adresse de messagerie (%s) et l’attacher à votre compte ?',
      'This account is not linkable.' => 'Ce compte n\'est pas associable.',
      'Allow Unlinking Accounts' => 'Permettre de supprimer la liaison des comptes',
      'OAuth1 Account' => 'Compte OAuth1',
      '"%s" Account' => 'Compte "%s"',
      'Password Reset' => 'Réinitialisation de mot de passe',
      'Follow referrals. Disable this for Windows AD 2003.' => 'Suivez les recommandations. Désactivez cela pour Windows AD 2003.',
      'user=%s, should_verify=%s' => 'user=%s, should_verify=%s',
      'The external account you just logged in with is not associated with a valid Phabricator user.' => 'Le compte externe avec lequel vous venez de vous connecter n’est pas associé avec un utilisateur Phabricator valide.',
      'If you do not recognize this change, it may indicate your account has been compromised.' => 'Si vous ne reconnaissez pas cette modification, cela peut vouloir dire que votre compte a été compromis.',
      'Link Accounts' => 'Associer des comptes',
      'Create Admin Account' => 'Créer un compte administrateur',
      'No Such Account' => 'Compte non trouvé',
      'Log Out?' => 'Se déconnecter ?',
      'To add an authentication factor, click the %s button below.' => 'Pour ajouter un facteur d\'autentification, cliquez sur le bouton %s ci-dessous.',
      'You must verify your email address to log in. You should have a new email message from Phabricator with verification instructions in your inbox (%s).' => 'Vous devez vérifier votre adresse de messagerie pour vous connecter. Vous devez avoir reçu un nouveau message de Phabricator avec des instructions pour la vérification dans votre boîte de réception (%s).',
      'The external account ("%s") you just authenticated with is not configured to allow logins on this Phabricator install. An administrator may have recently disabled it.' => 'Le compte externe (« %s ») avec lequel vous venez de vous authentifier n’est pas configuré pour autoriser les connexions sur cette installation de Phabricator. Un administrateur l’a peut-être désactivé récemment.',
      'To configure GitHub OAuth, create a new GitHub Application here:
    https://github.com/settings/applications/new
    You should use these settings in your application:
      - **URL:** Set this to your full domain with protocol. For this     Phabricator install, the correct value is: `%s`
      - **Callback URL**: Set this to: `%s`
    Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'Pour configurer OAuth de GitHub, créer une nouvelle application GitHub ici :
    https://github.com/settings/applications/new
    Vous devez utiliser ces paramètres dans votre application :
      - **URL :** La définir avec votre domaine complet avec le protocole. Pour cette installation de Phabricator, la bonne valeur est : `%s`
      - **URL de rappel**: La mettre à : `%s`
    Une fois l’application créée, copiez le **Client ID** et le **Client Secret** dans les champs ci-dessus.',
      '%s disabled account linking.' => '%s a inhibé l\'association de compte.',
      'Confirm the link with this %s account. This account will be able to log in to your Phabricator account.' => 'Confirmer le lien avec ce compte %s. Ce compte pourra se connecter à votre compte Phabricator.',
      'Strip these authentication factors?' => 'Enlever ces facteurs d’authentification ?',
      'The OAuth provider did not return a "code" parameter in its response.' => 'Le fournisseur OAuth n’a pas renvoyé de paramètre « code » dans sa réponse.',
      'Specify the target to revoke credentials from with "--from" or specify "--everywhere", but not both.' => 'Spécifier la cible pour laquelle révoquer les certificats avec « --from », ou spécifier « --everywhere », mais pas les deux.',
      'Your browser submitted a different registration key than the one associated with this account. You may need to clear your cookies.' => 'Votre navigateur a soumis une clé d’inscription différente de celle associée avec ce compte. Vous devez peut-être supprimer vos cookies.',
      'Strip factors from all users.' => 'Enlever les facteurs de tous les utilisateurs.',
      'You are creating a new Phabricator account linked to an existing external account from outside Phabricator.' => 'Vous êtes en train de créer un nouveau compte Phabricator lié à un compte externe existant depuis l’extérieur de Phabricator.',
      'Facebook' => 'Facebook',
      'Really revoke all tokens? Among other temporary authorizations, this will disable any outstanding password reset or account recovery links.' => 'Vraiment révoquer tous les jetons ? Parmi d’autres autorisations temporaires, cela désactivera toute réinitialisation de mot de passe en suspens ou tous les liens de récupération de compte.',
      'LDAP Version' => 'Version LDAP',
      'APPROVAL QUEUE' => 'FILE D’APPROBATION',
      'To configure Asana OAuth, create a new application here:
    https://app.asana.com/-/account_api
    When creating your application, use these settings:
      - **App URL:** Set this to: `%s`
      - **Redirect URL:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => 'Pour configurer OAuth de Asana, créer une nouvelle application ici :
    https://app.asana.com/-/account_api
    Lors de sa création, utiliser ces paramètres :
      - **URL de l’application :** La mettre à : `%s`
      - **URL de redirection :** La mettre à : `%s`
    Après avoir achevé la configuration, copier le **Client ID** et le **Client Secret** dans les champs ci-dessus.',
      'After you download the private key, it will be destroyed. You will not be able to retrieve it if you lose your copy.' => 'Après avoir téléchargé la clé privée, elle sera détruite. Vous ne pourrez plus la récupérer si vous perdez votre copie.',
      'After logging in you should set a password for your account, or link your account to an external account that you can use to authenticate in the future.' => 'Après vous être connecté, vous devrez définir un mot de passe pour votre compte, ou lier votre compte à un compte externe que vous pourrez utiliser pour vous authentifier ultérieurement.',
      'Analyze and diagnose issues with LDAP configuration.' => 'Analyser et diagnostiquer les problèmes avec la configuration LDAP.',
      'Your session is no longer in high security.' => 'Votre session n\'est plus en sécurité haute.',
      'The URI where the OAuth server instance of Phabricator is installed. For example: %s' => 'L’URI où l’instance du serveur OAuth de Phabricator est installée. Par exemple : %s',
      'Factor Name: %s' => 'Nom du facteur : %s',
      'Providers' => 'Fournisseurs',
      'Address Duplicated in Input' => 'Adresse dupliquée dans l’entrée',
      'Multi-factor authentication helps secure your account by making it more difficult for attackers to gain access or take sensitive actions.' => 'L’authentification à plusieurs facteurs aide à sécuriser votre compte en rendant plus difficile pour les attaquants d’obtenir l’accès ou d’effectuer des actions sensibles.',
      'Register an Account' => 'Enregistrer un compte',
      'Can Not Edit Trusted Key' => 'Impossible de modifier la clé de confiance',
      'OAuth App ID' => 'ID de l’application OAuth',
      'Invites are visible to administrators, the inviting user, users with an invite code, and the user who accepts the invite.' => 'Les invitations sont visibles des administrateurs, de l’utilisateur invitant, des utilisateurs ayant un code d’invitation, et de l’utilisateur qui accepte l’invitation.',
      'Specified public keyfile "%s" does not exist!' => 'Le fichier de clé publique spécifié, « %s », n’existe pas !',
      'You must specify the email to verify.' => 'Vous devez fournir une adresse courriel à vérifier.',
      'Configure %s OAuth.' => 'Configurer OAuth %s.',
      'The external account ("%s") you just authenticated with is not configured to allow registration on this Phabricator install. An administrator may have recently disabled it.' => 'Le compte externe (« %s ») avec lequel vous venez de vous authentifier n’est pas configuré pour permettre l’inscription sur cette installation de Phabricator. Un administrateur l’a peut-être récemment désactivé.',
      'No email exists with address "%s"!' => 'Aucun courriel n’existe avec l’adresse « %s » !',
      'You can not unlink this account because it is not linked.' => 'Vous ne pouvez pas supprimer la liaison de ce compte, parce qu’il n’est pas lié.',
      'Request did not include account key.' => 'La requête n’inclut pas la clé du compte.',
      'Account Disabled' => 'Compte désactivé',
      'JIRA instance name is required.' => 'Le nom de l’instance JIRA est obligatoire.',
      'LDAP Password' => 'Mot de passe LDAP',
      'Edit SSH Public Key' => 'Éditer la clé publique SSH',
      'Generated' => 'Généré',
      '%s updated the OAuth application secret for this provider.' => '%s a mis à jour le secret de l’application OAuth pour ce fournisseur.',
      'Leaving High Security' => 'Quitter la haute sécurité',
      '**Post a comment** in the JIRA task, similar to the emails Phabricator sends.' => '**Poster un commentaire** dans la tâche JIRA, similaire aux courriels qu’envoie Phabricator.',
      'Consumer key is required.' => 'La clé du consommateur est requise.',
      'Username or password are incorrect.' => 'Le nom d’utilisateur ou le mot de passe n’est pas correct.',
      'Attempted to set \'%s\' cookie to \'%s\', but your browser did not accept the cookie. Check that cookies are enabled, clear them, and try again.' => 'Tentative de mettre le cookie \'%s\' à \'%s\', mais votre navigateur n’a pas accepté le cookie. Vérifiez que les cookies sont activés, nettoyez-les, et réessayez.',
      'The authentication provider did not return a client state parameter in its response, but one was expected. If this problem persists, you may need to clear your cookies.' => 'Le fournisseur d’authentification n’a pas renvoyé de paramètre d’état du client dans sa réponse, et il était attendu. Si ce problème persiste, vous devrez supprimer vos cookies.',
      'TOTP Synchronization' => 'Synchronisation TOTP',
      'One-Time Login' => 'Connexion unique',
      'NOTE: This provider **only supports JIRA 6**. It will not work with JIRA 5 or earlier.' => 'NOTE : Ce fournisseur **supporte uniquement JIRA 6**. Il ne fonctionnera pas avec JIRA 5 ou antérieur.',
      'SSH key name is required.' => 'Le nom de la clé SSH est requis.',
      'Consumer secret is required.' => 'Le secret du consommateur est obligatoire.',
      'Address Error' => 'Erreur d\'adresse',
      'Strip factors without prompting.' => 'Enlever des facteurs sans demander.',
      'No Matching Sessions' => 'Aucune session correspondante',
      'Require Secure Browsing:' => 'Nécessite une navigation sécurisée :',
      'Auth provider failed to load an account from %s!' => 'Le fournisseur d’authentification n’a pas réussi à charger un compte depuis %s !',
      'Newly registered user "%s" is awaiting account approval by an administrator.' => 'L’utilisateur nouvellement inscrit « %s » attend une approbation de compte par un administrateur.',
      'There are no matching sessions to terminate.' => 'Il n’y a pas de session correspondante à terminer.',
      'No accounts match the arguments!' => 'Aucun compte ne correspond aux arguments !',
      'Register New Account' => 'Enregistrer un nouveau compte',
      'SSH KEY DETAIL' => 'DÉTAIL DE LA CLÉ SSH',
      'Failed to convert public key into PKCS8 format. If you are developing on OSX, you may be able to use `%s` to work around this issue. %s' => 'Échec de conversion de la clé publique au format PKCS8. Si vous développez sur OSX, vous devez pouvoir utiliser `%s` pour contourner ce problème. %s',
      'Actual exception: %s' => 'Exception actuelle : %s',
      'Are you sure you want to log out?' => 'Êtes-vous sûr de vouloir vous déconnecter ?',
      '(WARNING) Examine the table below for information on how password hashes will be stored in the database.
    (NOTE) You can select a minimum password length by setting `%s` in configuration.' => '(AVERTISSEMENT) Examiner le tableau ci-dessous pour des informations sur comment les hachages de mot de passe seront stockés dans la base de données.
    (NOTE) Vous pouvez sélectionner une longueur minimale de mot de passe en mettant `%s` dans la configuration.',
      'Link Account' => 'Lier le compte',
      'Login/Registration' => 'Connexion/Inscription',
      'List available multi-factor authentication factors.' => 'Lister les facteurs d’authentification à plusieurs facteurs.',
      'Account Recovery' => 'Récupération de compte',
      'Trusted' => 'Fiable',
      'Use %s to specify which user to strip factors from, or %s to strip factors from all users.' => 'Utiliser %s pour spécifier pour quel utilisateur enlever les facteurs, ou %s pour enlever les facteurs de tous les utilisateurs.',
      'You must specify the path to a pkcs8 keyfile with %s.' => 'Vous devez spécifier le chemin vers un fichier de clé pkcs8 avec %s.',
      'Email Sent' => 'Courriel envoyé',
      'Twitch.tv' => 'Twitch.tv',
      'Show factors, but do not strip them.' => 'Afficher les facteurs, mais ne pas les enlever.',
      'Add Multi-Factor Authentication To Your Account' => 'Ajouter une authentification à plusieurs facteurs à votre compte',
      'Auth Providers' => 'Fournisseurs d\'authentification',
      'View Active Keys' => 'Afficher les clés actives',
      'You must select an authentication provider.' => 'Vous devez choisir un fournisseur d\'authentification.',
      'SSH Key %d: %s' => 'Clé SSH %s : %s',
      'Phabricator will not retain a copy of the private key.' => 'Phabricator ne conservera pas une copie de la clé privée.',
      'Refreshed token, new token expires in %s seconds.' => 'Rafraîchir le jeton, le nouveau jeton expire dans %s secondes.',
      '%s set the OAuth application secret for this provider.' => '%s a défini le secret de l’application OAuth pour ce fournisseur.',
      '%s, exception=%s' => '%s, exception=%s',
      'Reset %s action(s).' => 'Réinitialiser %s action(s).',
      'Address Already Verified' => 'Adresse déjà vérifiée',
      'You are trying to gain access to an account ("%s") that can not establish a web session.' => 'Vous essayez d’obtenir l’accès à un compte (« %s ») qui ne peut pas établir une session web.',
      'Sent By' => 'Envoyé par',
      'The email address associated with this account ("%s") is already in use by an application and can not be used to register a new Phabricator account. Choose a different, valid address.' => 'L’adresse de messagerie associée avec ce compte (« %s ») est déjà utilisée par une application et ne peut pas être utilisée pour enregistrer un nouveau compte Phabricator. Choisir une autre adresse valide.',
      'Make sure you are copy-and-pasting the entire link into your browser. Login links are only valid for 24 hours, and can only be used once.' => 'Assurez-vous de copier-coller tout le lien dans votre navigateur. Les liens de connexion ne sont valides que pendant 24 heures, et ne peuvent être utilisés qu’une fois.',
      '%s disabled login.' => '%s a désactivé la connexion.',
      'Unverified User Email' => 'Adresse de courriel non vérifiée',
      'Really revoke this token? Any temporary authorization it enables will be disabled.' => 'Vraiment révoquer ce jeton ? Toute autorisation temporaire qu’il permet sera désactivée.',
      'The URI where JIRA is installed. For example: %s' => 'L’URI où JIRA est installé. Par exemple : %s',
      'Forgot your password?' => 'Mot de passe oublié ?',
      'Raw Address' => 'Adresse brute',
      'Reset all counters.' => 'Réinitialiser tous les compteurs.',
      'Install Instructions' => 'Instructions d’installation',
      'Download Private Key' => 'Télécharger la clef privée',
      'Query public keys.' => 'Requêter les clés publiques.',
      'After logging in, you can use the "Auth" application to add or restore authentication providers and allow normal logins to succeed.' => 'Après connexion, vous pouvez utiliser l’application « Auth » pour ajouter ou restaurer des fournisseurs d’authentification et permettre aux connexions normales d’aboutir.',
      'Authentication Canceled' => 'Authentification annulée',
      'Phabricator Instance Name' => 'Nom de l\'instance Phabricator',
      'Will Ignore Address' => 'Ignorera l’adresse',
      '**Step 1 of 2**: Provide the name and URI for your JIRA install.
    In the next step, you will configure JIRA.' => '**Étape 1 sur 2** : Fournir le nom et l’URI pour votre installation JIRA.
    Dans l’étape suivante, vous configurerez JIRA.',
      'Login Required' => 'Connexion nécessaire',
      'Verified User Email' => 'Courriel de l’utilisateur vérifié',
      'Trust Email Addresses' => 'Faire confiance aux adresses de messagerie',
      'Bitbucket' => 'Bitbucket',
      'Allow users to unlink account credentials for this provider from existing Phabricator accounts. If you disable this, Phabricator accounts will be permanently bound to provider accounts.' => 'Permettre aux utilisateurs de supprimer le lien des certificats de compte pour ce fournisseur depuis des comptes Phabricator existants. Si vous désactivez cela, les comptes Phabricator seront liés de façon permanente aux comptes du fournisseur.',
      'Unable to find LDAP account!' => 'Impossible de trouver le compte LDAP !',
      'This workflow will generate a new SSH keypair, add the public key, and let you download the private key.' => 'Ce processus de travail générera une nouvelle paire de clés SSH, ajoutera la clé publique, et vous laissera télécharger la clé privée.',
      'Too many login failures recently. You must submit a CAPTCHA with your login request.' => 'Trop d’échecs de connexion récemment. Vous devez soumettre un CAPTCHA avec votre demande de connexion.',
      'Specified pkcs8 keyfile "%s" does not exist!' => 'Le fichier de clé pkcs8 « %s » n’existe pas !',
      'To configure Twitch.tv OAuth, create a new application here:
    http://www.twitch.tv/settings/applications
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Pour configurer OAuth de Twitch.tv, créer une nouvelle application ici :
    http://www.twitch.tv/settings/applications
    Lors de sa création, utiliser ces paramètres :
      - **URI de redirection :** La mettre à : `%s`
    Après avoir terminé al configuration, copier le **Client ID** et le **Client Secret** dans les champs ci-dessus (vous devrez générer le secret du client en cliquant d’abord sur \'Nouveau Secret\').',
      'Do you want to enable this provider? Users will be able to use their existing external accounts to register new Phabricator accounts and log in using linked accounts.' => 'Voulez-vous activer ce fournisseur ? Les utilisateurs pourront utiliser leurs comptes externes existants pour enregistrer de nouveaux comptes Phabricator et se connecter en utilisant les comptes liés.',
      'You have already accepted this invitation.' => 'Vous avez déjà accepté cette invitation.',
      '%s
    To configure Amazon OAuth, create a new \'API Project\' here:
    http://login.amazon.com/manageApps
    Use these settings:
      - **Allowed Return URLs:** Add this: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => '%s
    Pour configurer OAuth de Amazon, créer un nouveau \'Projet API\' ici :
    http://login.amazon.com/manageApps
    Utiliser ces paramètres :
      - **URL de retour permises :** Ajouter cela : `%s`
    Après avoir terminé la configuration, copier le **Client ID** et le **Client Secret** dans les champs ci-dessus.',
      'CAPTCHA was not entered correctly.' => 'Le CAPTCHA n\'a pas été entré correctement.',
      'Configure JIRA OAuth. NOTE: Only supports JIRA 6.' => 'Configurer OAuth de JIRA. NOTE : Supporte seulement JIRA 6.',
      'The account you are attempting to register with has an invalid email address (%s). This Phabricator install only allows registration with specific email addresses:' => 'Le compte avec lequel vous essayez de vous enregistrer a une adresse de messagerie non valide (%s). Cette installation de Phabricator ne permet l’inscription qu’avec des adresses de messagerie spécifiques :',
      'If you did not receive an email, you can click the button below to try sending another one.' => 'Si vous n\'avez pas reçu de courriel, vous pouvez cliquer sur le bouton ci-dessous pour essayer d’en envoyer un autre.',
      'Invite template does not include invite URI!' => 'Le modèle d’invitation n’inclut pas l’URI d’invitation !',
      'Password providers can\'t be linked.' => 'Les fournisseurs de mot de passe ne peuvent être liés.',
      'Found LDAP Account: %s' => 'Compte LDAP trouvé : %s',
      'Confirm Account Link' => 'Lien de confirmation de compte',
      'Verify Email Address' => 'Vérifiez l\'adresse de courriel',
      'You must log in to take this action.' => 'Vous devez vous connecter pour réaliser cette action.',
      'Stay' => 'Rester',
      'The account you are attempting to log in with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.' => 'Le compte avec lequel vous essayez de vous connecter utilise un fournisseur d’authentification inexistant ou désactivé (avec la clé « %s »). Un administrateur peut avoir désactivé ce fournisseur récemment.',
      'Two authentication providers use the same provider key (\'%s\'). Each provider must be identified by a unique key.' => 'Deux fournisseurs d’authentification utilisent la même clé de fournisseur (\'%s\'). Chaque fournisseur doit être identifié par une clé unique.',
      'Create a New Account' => 'Créer un nouveau compte',
      'Example: %s%sFor LDAPS, use: %s' => 'Exemple : %s%sPour LDAPS, utiliser : %s',
      'There is no account associated with that email address.' => 'Il n’y a pas de compte associé avec cette adresse de messagerie.',
      'Revoke Token' => 'Révoquer des jetons',
      'Refresh Account Link' => 'Rafraîchir le lien du compte',
      'Enable Referrals' => 'Activer les référents',
      'The LDAP extension is not enabled.' => 'L’extension LDAP n’est pas activée.',
      'Will Send Invite' => 'Enverra l\'invitation',
      'Can Manage Auth Providers' => 'Peut gérer les fournisseurs d’authentification',
      'There are no registered session engine extensions.' => 'Il n’y a pas d’extensions de moteur de session enregistrés.',
      'JIRA' => 'JIRA',
      'Permanent Account Link' => 'Lien de compte permanent',
      '%s updated the OAuth consumer secret for this provider.' => '%s a mis à jour le secret OAuth du consommateur de ce fournisseur.',
      'ActiveDirectory Domain' => 'Domaine ActiveDirectory',
      'First, download an authenticator application on your phone. Two applications which work well are **Authy** and **Google Authenticator**, but any other TOTP application should also work.' => 'Téléchargez d’abord une application d’authentification sur votre téléphone. Deux applications qui fonctionnent bien sont **Authy** et **Google Authenticator**, mais toute autre application TOTP devrait aussi fonctionner.',
      'Wait For Approval' => 'En attente d\'approbation',
      'Wrong Acount' => 'Compte erroné',
      'If you want to register a new account, continue with this registration workflow and choose a new, unique email address for the new account.' => 'Si vous voulez déclarer un nouveau compte, continuez avec ce processus d’inscription et choisissez une nouvelle adresse de messagerie unique pour le nouveau compte.',
      'Unable to Establish Web Session' => 'Impossible d’établir la session web',
      'Mobile Phone App (TOTP)' => 'Application téléphone mobile (TOTP)',
      'Normal Security Restored' => 'Sécurité normale rétablie',
      'Verify %s' => 'Vérifier %s',
      'Create **Issue Link** to the Revision, as an "implemented in" relationship.' => 'Créer **Lien de problème** vers la révision, comme une relation « implémenté dans ».',
      'Link External Account' => 'Associer un compte externe',
      'Password Reset Token' => 'Jeton de réinitialisation du mot de passe',
      'Base Distinguished Name' => 'Nom de base distingué',
      'You do not have permission to manage authentication providers.' => 'Vous n’avez pas le droit de gérer les fournisseurs d’authentification.',
      'Allow Registration:' => 'Autoriser l’inscription :',
      'Really terminate all sessions? (Your current login session will not be terminated.)' => 'Vraiment terminer toutes les sessions ? (votre session actuelle ne sera pas terminée.)',
      'Provide a public key, not a private key!' => 'Fournir une clé publique, pas une clé privée !',
      'Session is not partial!' => 'La session n’est pas partielle !',
      'Users will only be able to register with a verified email address at one of the configured [[ %s | %s ]] domains: **%s**' => 'Les utilisateurs pourront seulement s’inscrire avec une adresse de messagerie vérifiée sur un des domaines configurés [[ %s | %s ]] : **%s**',
      'You are logged in as %s, but the email address you just clicked a link from is already the primary email address for another account (%s). Switch accounts, then try again.' => 'Vous êtes connecté en tant que %s, mais l’adresse de messagerie depuis laquelle vous venez de cliquer sur un lien est déjà l’adresse de messagerie principale d’un autre compte (%s). Changez de compte, puis réessayez.',
      '%s set the "%s" value to "%s".' => '%s a mis la valeur « %s » à « %s ».',
      'Confirm External Account Link' => 'Confirmer le lien de compte externe',
      'Terminate all web login sessions. If called via OAuth, also terminate the current OAuth token.
    WARNING: This method does what it claims on the label. If you call this method via the test console in the web UI, it will log you out!' => 'Met fin à toutes les sessions web connectées. Si appelé par OAuth, invalide également le jeton OAuth.
    AVERTISSEMENT : Cette méthode fait ce qui est indiqué dans son libellé. Si vous appelez cette méthode via la console de test dans l’IHM web, vous serez déconnecté !',
      'Authentication Tokens' => 'Jetons d’authentification',
      'Multi-Factor Login' => 'Connexion à plusieurs facteurs',
      '%s disabled registration.' => '%s a désactivé les inscriptions.',
      'AuthAdapter (of class \'%s\') has an invalid implementation: no adapter domain.' => 'AuthAdapter (de la classe \'%s\') a une implémentation non valide : pas de domaine d’adapteur.',
      'Edit Auth Provider' => 'Modifier le fournisseur d’authentification',
      'Verification code can not be regenerated after an invite is created.' => 'Le code de vérification ne peut pas être régénéré après la création d’une invitation.',
      '[SSH Key]' => '[Clé SSH]',
      'Stripping authentication factors...' => 'Suppression des facteurs d’authentification…',
      '[Phabricator] Password Reset' => '[Phabricator] Réinitialisation du mot de passe',
      'To configure Twitter OAuth, create a new application here:
    https://dev.twitter.com/apps
    When creating your application, use these settings:
      - **Callback URL:** Set this to: `%s`
    After completing configuration, copy the **Consumer Key** and **Consumer Secret** to the fields above.' => 'Pour configurer OAuth de Twitter, créer une nouvelle application ici :
    https://dev.twitter.com/apps
    En créant votre application, utiliser ces paramètres :
      - **URL de rappel :** La mettre à : `%s`
    Une fois la configuration achevée, copier la **Clé du consommateur** et le **Secret du consommateur** dans les champs ci-dessus.',
      '%s updated the public key material for this SSH key.' => '%s a remis à jour les éléments de la clé publique pour cette clé SSH.',
      '%s created this key.' => '%s a créé cette clé.',
      'Another verification email was sent to %s.' => 'Un autre courriel de vérification a été envoyé à %s.',
      'Mobile App (TOTP)' => 'Application mobile (TOTP)',
      'Set Phabricator to not trust an OAuth client. Phabricator redirects to trusted OAuth clients that users have authorized without user intervention.' => 'Dire à Phabricator de ne pas faire confiance à un client OAuth. Phabricator redirige vers les clients OAuth de confiance que les utilisateurs ont autorisé, sans intervention de l’utilisateur.',
      '%s turned "Require Secure Browsing" on.' => '%s active "Exploration sécurisée nécessaire".',
      'The invite code in the link you clicked has already been accepted.' => 'Le code d\'invitation du lien sur lequel vous avez cliqué a déja été accepté.',
      'If you leave high security, you will need to authenticate again the next time you try to take a high security action.' => 'Si vous quittez la haute sécurité, vous devrez vous authentifier de nouveau la prochaine fois que vous essayerez de faire une action de haute sécurité.',
      'NOTE: Amazon **requires** HTTPS, but your Phabricator install does not use HTTPS. **You will not be able to add Amazon as an authentication provider until you configure HTTPS on this install**.' => 'NOTE: Amazon **nécessite** HTTPS, mais l\'installation de votre Phabricator n\'utilise pas HTTPS. **Vous ne pourrez pas ajouter Amazon comme fournisseur d\'authentication tant que vous n\'aurez pas configuré HTTPS sur cette installation**.',
      'Link %s Account' => 'Associer le compte %s',
      'The LDAP authentication provider is not enabled.' => 'Le fournisseur d’authentification LDAP n’est pas activé.',
      'New User "%s" Awaiting Approval' => 'Nouvel utilisateur "%s" en attente d\'approbation',
      'Really destroy credentials everywhere?' => 'Vraiment détruire les certificats partout ?',
      'Refresh Account' => 'Remettre à jour le compte',
      'Optionally, specify a username attribute to use to prefill usernames when registering a new account. This is purely cosmetic and does not affect the login process, but you can configure it to make sure users get the same default username as their LDAP username, so usernames remain consistent across systems.' => 'De façon facultative, spécifier un attribut nom d’utilisateur à utiliser pour préremplir les noms d’utilisateur lors de l’inscription d’un nouveau compte. C’est purement cosmétique et n’affecte en rien le processus de connexion, mais vous pouvez le configurer pour vous assurer que les utilisateurs ont le même nom par défaut que leur nom d’utilisateur LDAP, de façon à ce que les noms restent cohérents entre les systèmes.',
      'ldaps://ldaps.example.com/' => 'ldaps://ldaps.example.com/',
      'sn' => 'sn',
      'This provider is not configured to allow linking.' => 'Ce fournisseur n\'est pas configuré pour autoriser l\'association.',
      '%s created this provider.' => '%s a créé ce fournisseur.',
      'The account you are attempting to link is already linked to your account.' => 'Le compte que vous essayez d\'associer est déja associé à votre compte.',
      'Refresh tokens for a given domain.' => 'Remettre à jour les jetons pour un domaine donné.',
      'JIRA Instance Name' => 'Nom de l\'instance JIRA',
      '%s updated the OAuth application ID for this provider from "%s" to "%s".' => '%s a mis à jour l\'ID d\'application OAuth pour ce fournisseur, de « %s » à « %s ».',
      '%s enabled registration.' => '%s a activé l\'enregistrement.',
      'The PHP \'openssl\' extension is not installed. You must install this extension in order to add a JIRA authentication provider, because JIRA OAuth requests use the RSA-SHA1 signing algorithm. Install the \'openssl\' extension, restart Phabricator, and try again.' => 'L’extension \'openssl\' de PHP n’est pas installée. Vous devez installer cette extension pour pouvoir ajouter un fournisseur d’authentification JIRA, parce que OAuth de JIRA requiert l’utilisation de l’algorithme de signature RSA-SHA1. Installez l’extension \'openssl\', redémarrez Phabricator, et réessayez.',
      'Unable to load your OAuth1 token secret from storage. It may have expired. Try authenticating again.' => 'Impossible de charger votre secret de jeton OAuth1 depuis le stockage. Il a peut-être expiré. Essayez de vous authentifier de nouveau.',
      'Register Account' => 'Enregistrer le compte',
      'Awesome' => 'Génial',
      '%s set the OAuth application notes for this provider.' => '%s a défini les notes de l’application OAuth pour ce fournisseur.',
      'Credential type "%s" is not valid. Valid credential types are: %s.' => 'Le type de certificat « %s » n’est pas valide. Les types de certificat valides sont : %s.',
      'Generate Keypair' => 'Générer la paire de clés',
      'The account you are attempting to register with already belongs to another user.' => 'Le compte avec lequel vous essayez de vous enregistrer appartient déjà à un autre utilisateur.',
      '%s changed the "%s" value from "%s" to "%s".' => '%s a changé la valeur de "%s" de "%s" en "%s".',
      'You canceled authentication.' => 'Vous avez annulé l\'authentication.',
      'You can not unlink this account because you have no other valid login accounts. If you removed it, you would be unable to log in. Add another authentication method before removing this one.' => 'Vous ne pouvez pas supprimer le lien de ce compte parce que vous n’avez pas d’autre compte de connexion valide. Si vous le supprimez, vous ne pourrez plus vous connecter. Ajoutez une autre méthode d’authentification avant de supprimer celle-ci.',
      'Accepted By' => 'Accepté par',
      'Attempting to operate on multi-factor auth which has no corresponding implementation (factor key is "%s").' => 'Essai d’effectuer une authentification à plusieurs facteurs qui n’a pas d’implémentation correspondante (la clé du facteur est « %s »).',
      'You can not unlink this account because the administrator has configured Phabricator to make links to %s accounts permanent.' => 'Vous ne pouvez pas dissocier ce compte car l\'administrateur a configuré Phabricator de sorte que les liens vers les comptes %s soient permanents.',
      'Requiring a high-security session from a user with no session!' => 'Une session de haute sécurité est nécessaire d\'un utilisateur sans session !',
      'OAuth1 Handshake Token' => 'Jeton de poignée de main OAuth1',
      '**Step 1 of 2 - Name Phabricator OAuth Instance**
    Choose a permanent name for the OAuth server instance of Phabricator. //This// instance of Phabricator uses this name internally to keep track of the OAuth server instance of Phabricator, in case the URL changes later.' => '**Étape 1 sur 2 - Nom de l’instance OAuth de Phabricator**
    Choisir un nom permanent pour l’instance du serveur OAuth de Phabricator. //Cette// instance de Phabricator utilise ce nom en interne pour garder trace de l’instance du serveur OAuth de Phabricator, au cas où l’URL change ultérieurement.',
      'Captcha response is incorrect, try again.' => 'La réponse au Captcha est incorrecte, veuillez réessayer.',
      'Add Auth Provider' => 'Ajouter un fournisseur d\'authentication',
      'Auth Factor' => 'Facteur d’authentification',
      'Confirm Link' => 'Lien de confirmation',
      'You can try again, or request a new link via email.' => 'Vous pouvez réessayer, ou demander un nouveau lien par courriel.',
      'Create New Account' => 'Créer un nouveau compte',
      'Log In' => 'Se connecter',
      'Temporary Token Types' => 'Types de jetons temporaires',
      'ERROR: You are making a Conduit API request to "%s", but the correct HTTP request path to use in order to access a COnduit method is "%s" (for example, "%s"). Check your configuration.' => 'ERREUR : Vous faites une requête d’API Conduit à « %s », mais le chemin de requête HTTP correct pour accéder à une méthode de Conduit est « %s » (par exemple, « %s »). Vérifiez votre configuration.',
      'Register' => 'S’enregistrer',
      'Anonymous Username' => 'Utilisateur anonyme',
      '%s disabled auto login.' => '%s a désactivé la connexion automatique.',
      'LDAP' => 'LDAP',
      'The account you are attempting to register with uses an authentication provider ("%s") which does not allow registration. An administrator may have recently disabled registration with this provider.' => 'Le compte avec lequel vous tentez de vous inscrire utilise un fournisseur d’authentification (« %s ») qui ne permet pas l’inscription. Un administrateur a peut-être récemment désactivé les inscriptions avec ce fournisseur.',
      'Already Accepted' => 'Déjà accepté',
      'Specify an OAuth client ID with %s.' => 'Spécifiez un ID client OAuth avec %s.',
      'You are logged in as %s, but the email address you just clicked a link from is already verified and associated with another account (%s). Switch accounts, then try again.' => 'Vous êtes connecté en tant que %s, mais l’adresse de messagerie depuis laquelle vous venez de cliquer sur un lien est déjà vérifiée et associée avec un autre compte (%s). Changez de compte, puis réessayez.',
      'Stronger algorithms are listed first. The highlighted algorithm will be used when storing new hashes. Older hashes will be upgraded to the best algorithm over time.' => 'Les algorithmes les plus forts sont listés en premier. L’algorithme surligné sera utilisé pour stocker les nouveaux hachages. Les anciens hachages seront mis à jour avec le meilleur algorithme au fur et à mesure.',
      'These auth factors will be stripped:' => 'Ces facteurs d’authentification seront enlevés :',
      'Engine: Session' => 'Moteur: session',
      'Refresh tokens for a given provider type.' => 'Rafraîchir les jetons pour un type de fournisseur donné.',
      'Upload SSH Public Key' => 'Téléverser la clé publique SSH',
      'Phabricator will automatically login with this provider if it is the only available provider.' => 'Phabricator se connectera automatiquement avec ce fournisseur si c’est le seul disponible.',
      'No such user "%s"!' => 'Aucun utilisateur « %s » !',
      'Wait for Approval' => 'Veuillez attendre l\'acceptation',
      'SSH key material is required.' => 'Les informations concernant la clé SSH sont nécessaires.',
      'Application secret is required.' => 'Le secret de l’application est obligatoire.',
      'Authentication Failure' => 'Échec d’authentification',
      'Use %s to choose a user to reset actions for.' => 'Utiliser %s pour choisir l’utilisateur pour lequel réinitialiser les actions.',
      'Continue to Phabricator' => 'Poursuivre vers Phabricator',
      'Log in to Phabricator' => 'Connexion à Phabricator',
      'LDAP Username' => 'Nom d\'utilisateur LDAP',
      'Parsed Address' => 'Adresse analysée',
      'Authentication Sessions' => 'Sessions d\'authentication',
      'Search Attributes' => 'Attributs recherchés',
      'Attach a mobile authenticator application (like Authy or Google Authenticator) to your account. When you need to authenticate, you will enter a code shown on your phone.' => 'Attacher une application d’authentificateur mobile (comme Authy ou Google Authentificator) à votre compte. Quand vous aurez besoin de vous authentifier, vous devrez entrer un code affiché sur votre téléphone.',
      'The login link you clicked is invalid, out of date, or has already been used.' => 'Le lien de connexion sur lequel vous avez cliqué est invalide, obsolète, ou a déja été utilisé.',
      '%s You have not added authentication providers yet. Use "%s" to add a provider, which will let users register new Phabricator accounts and log in.' => '%s Vous n’avez pas encore ajouté de fournisseurs d’authentification. Utilisez « %s » pour ajouter un fournisseur, ce qui permettra aux utilisateurs d’inscrire de nouveaux comptes Phabricator et de se connecter avec.',
      'Revoke all credentials types.' => 'Révoquer tous les types de certificats.',
      'Specify either specific factors with --type, or all factors with --all-types, but not both.' => 'Spécifier soit des facteurs spécifiques avec --type, soit tous les facteurs avec --all-types, mais pas les deux.',
      'Previously Invited' => 'Invité précédemment',
      'Updated; Phabricator does not trust OAuth client %s.' => 'Mis à jour ; Phabricator ne fait pas confiance au client OAuth %s.',
      'Phabricator is configured with an email domain whitelist (in %s), so only users with a verified email address at one of these %s allowed domain(s) will be able to register an account: %s' => 'Phabricator est configuré avec une liste blanche de domaine de courriel (dans %s), donc seuls les utilisateurs avec une adresse de messagerie vérifiée sur un de ces domaines autorisés %s pourront inscrire un compte : %s',
      'Allow Auto Login' => 'Autoriser la connexion automatique',
      'Expected invite accepted (%s).' => 'Invitation attendue acceptée (%s) .',
      'Note: Unlinking an authentication provider will terminate any other active login sessions.' => 'Note: dissocier un fournisseur d\'authentification terminera toutes les autres sessions connectées.',
      '%s renamed this key from "%s" to "%s".' => '%s a renommé cette clé de « %s » en  « %s » .',
      'Allow Linking Accounts' => 'Autoriser l\'association de comptes',
      'Phabricator instance name must contain only lowercase letters, digits, and periods.' => 'Le nom de l’instance Phabricator ne doit contenir que des lettres minuscules, des chiffres et des points.',
      'Always Search' => 'Toujours chercher',
      'Use this link to recover access to the "%s" account from the web interface:' => 'Utiliser ce lien pour récupérer l’accès au compte « %s » depuis l’interface web :',
      'Your Phabricator account is already linked to an external account for this provider.' => 'Votre compte Phabricator est déjà lié à un compte externe pour ce fournisseur.',
      'You can safely ignore these warnings if the install itself has access controls (for example, it is deployed on a VPN) or if all of the configured providers have access controls (for example, they are all private LDAP or OAuth servers).' => 'Vous pouvez ignorer sans souci ces avertissements. Si l’installation elle-même a des contrôles d’accès (par exemple, elle est déployée sur un VPN), ou si tous les fournisseurs configurés ont des contrôles d’accès (par exemple, ce sont tous des serveurs LDAP ou OAuth privés).',
      'SSH keys inherit the policies of the user or object they authenticate.' => 'Les clés SSH héritent des politiques de l’utilisateur ou de l’objet qu’elles authentifient.',
      'Check Your Email' => 'Vérifiez votre courriel',
      'Phabricator instance name is required.' => 'Le nom de l’instance Phabricator est obligatoire.',
      'AuthAdapter (of class \'%s\') has an invalid implementation: no adapter type.' => 'AuthAdapter (de la classe \'%s\') a une implémentation non valide : aucun type d’adapteur.',
      'Captcha' => 'Captcha',
      'Email record has invalid user PHID!' => 'L’enregistrement du courriel a un PHID d’utilisateur non valide !',
      'No Matching Tokens' => 'Aucun jeton correspondant',
      'Auth Provider' => 'Fournisseur d\'autentication',
      'Upgrading partial session of user with no session!' => 'Mise à jour de session partielle utilisateur, sans session !',
      '%s Account' => 'Compte %s',
      'NOTE: **To complete setup**, copy and paste these keys into JIRA according to the instructions below.' => 'NOTE : **Pour terminer le paramétrage**, copier et coller ces clés dans JIRA en suivant les instructions ci-dessous.',
      'JIRA Base URI' => 'URI de base JIRA',
      'A session is visible only to its owner.' => 'Une session n’est visible que pour son propriétaire.',
      'OAuth2 Account' => 'Compte OAuth2',
      'LDAP Hostname' => 'Nom de l\'hôte LDAP',
      'The email address you just clicked a link from is already verified and associated with a registered account (%s). Log in to continue.' => 'L’adresse de messagerie depuis laquelle vous venez de cliquer sur un lien est déjà vérifiée et associée avec un compte inscrit (%s). Connectez-vous pour continuer.',
      '%s enabled this provider.' => '%s a activé ce fournisseur.',
      'After entering the key, the application should display a numeric code. Enter that code below to confirm that you have configured the authenticator correctly:' => 'Après avoir saisi la clé, l’application affichera un code numérique. Saisir ce code ci-dessous pour confirmer que vous avez bien configuré l’authentificateur :',
      'Specify either specific users with %s, or all users with %s, but not both.' => 'Spécifier soit des utilisateurs spécifiques avec %s, ou tous les utilisateurs avec %s, mais pas les deux.',
      'When you are ready, %s.' => 'Quand vous êtes prêts, %s.',
      'Unable to refresh token!' => 'Impossible de remettre à jour le jeton.',
      'Consumer Key' => 'Clé du consommateur',
      'You must select a valid provider.' => 'Vous devez choisir un fournisseur valide.',
      'Logging in will verify %s as an email address you own.' => 'La connexion vérifiera %s comme une adresse de messagerie que vous possédez.',
      'Not a Valid Email Address' => 'Adresse courriel non valide',
      'SSH Keys' => 'Clés SSH',
      'Active OAuth Token (Expires: %s)' => 'Activer le jeton OAuth (expire à : %s)',
      'Specify the credential type to revoke with "--type" or "--everything", but not both.' => 'Spécifier le type de certificat à révoquer avec « --type » ou « --everything », mais pas les deux.',
      '(If given an option, select that this key is "Time Based", not "Counter Based".)' => '(si un choix est donné, sélectionner celui dont la clé est « basée sur le temps », non « basée sur un compteur ».)',
      'Expected email address reassignment (%s).' => 'Mise à jour attendue avec une nouvelle adresse courriel (%s).',
      'These methods are recently introduced and subject to change.' => 'Ces méthodes ont été introduites récemment et sont succeptibles d\'être modifiées.',
      'LDAP Password: ' => 'Mot de passe LDAP :',
      'Bad Invite Code' => 'Code d\'invitation erroné',
      'Refreshing account #%d (%s/%s).' => 'Mise à jour du compte #%s (%s/%s).',
      'Allow users to log in or register using a username and password.' => 'Permettre aux utilisateurs de se connecter ou de s’inscrire en utilisant un nom d’utilisateur et un mot de passe.',
      'WordPress.com' => 'WordPress.com',
      'Refresh %s Account' => 'Mise à jour du compte %s',
      'Login cookie was set correctly, but your login session is not valid. Try clearing cookies and logging in again.' => 'Le cookie de connexion a bien été mis, mais votre session de connexion n’est pas valide. Essayez de nettoyer les cookies et de vous reconnecter.',
      'Password Hash Algorithms' => 'Algorithmes de hachage des mots de passe',
      'OAuth1 Handshake Secret' => 'Secret de la poignée de main OAuth1',
      'Login Failed' => 'Échec de connexion',
      'You have failed to verify multi-factor authentication too often in a short period of time.' => 'Vous avez échoué trop souvent à la vérification de l’authentification à plusieurs facteurs pendant une courte période de temps.',
      'Use TLS' => 'Utiliser TLS',
      'Auth Invite' => 'Invite d\'authentication',
      'Username/Password' => 'Nom d\'utilisateur/Mot de passe',
      'Configure a connection to an LDAP server so that users can use their LDAP credentials to log in to Phabricator.' => 'Configurer une connexion à un serveur LDAP pour que les utilisateurs puissent utiliser leurs certificats LDAP pour se connecter à Phabricator.',
      'Email Address Already in Use' => 'Adresse de courriel déjà utilisée',
      'Administrative approvals are enabled (in %s), so all new users must have their accounts approved by an administrator.' => 'L\'approbation par les administrateurs est activée (dans %s), donc tous les nouveaux comptes doivent être approuvés par un administrateur.',
      'Already Associated' => 'Déjà associé',
      'Forgot Password' => 'Mot de passe oublié',
      'Realname Attributes' => 'Attrubuts du nom réel',
      'Specify %s to reset all action counters.' => 'Spécifier %s pour réinitialiser tous les compteurs d’action.',
      '= Integration Options = 
    Configure how to record Revisions on JIRA tasks.
    Note you\'ll have to restart the daemons for this to take effect.' => '= Options d’intégration = 
    Configurer comment enregistrer les Révisions sur les tâches JIRA.
    Note : Vous aurez à redémarrer les démons pour que cela prenne effet.',
      '[Phabricator] %s has invited you to join Phabricator' => '[Phabricator] %s vous a invité à rejoindre Phabricator',
      'No valid linkable account.' => 'N\'est pas un compte associable valide.',
      'There are no configured default registration providers.' => 'Il y a pas de fournisseurs d\'abonnement configurés par défaut.',
      'The authentication provider did not return the correct client state parameter in its response. If this problem persists, you may need to clear your cookies.' => 'Le fournisseur d’authentification n’a pas renvoyé le bon paramètre d’état client dans sa réponse. Si ce problème persiste, vous devrez nettoyer vos cookies.',
      'SSH keys can not be reactivated.' => 'Les clés SSH ne peuvent pas être réactivées.',
      'Again' => 'Encore',
      '%s disabled account unlinking.' => '%s a inhibé la désassociation de compte.',
      'Revoke Tokens?' => 'Revoquer des jetons ?',
      'Confirm %s Account Link' => 'Confirmer le lien du compte %s',
      'Provider Already Configured' => 'Fournisseur déjà configuré',
      'Missing Client ID Cookie' => 'Le témoin de l\'ID client est absent.',
      'To search for an LDAP record before authenticating, either check the **Always Search** checkbox or enter an anonymous username and password to use to perform the search.' => 'Pour chercher un enregistrement LDAP avant de s’authentifier, cocher soit la case **Toujours rechercher**, ou saisir un nom d’utilisateur anonyme et un mot de passe à utiliser pour effectuer la recherche.',
      'Installation is complete. Register your administrator account below to log in. You will be able to configure options and add other authentication mechanisms (like LDAP or OAuth) later on.' => 'L’installation est terminée. Inscrivez votre compte administrateur ci-dessous pour vous connecter. Vous pourrez configurer les options et ajouter d’autres mécanismes d’authentification (comme LDAP ou OAuth) plus tard.',
      'Skipping, provider is not an OAuth2 provider.' => 'Ignoré, le fournisseur n\'est pas un fournisseur OAuth2.',
      'Your login session is invalid, and clearing the session cookie was unsuccessful. Try clearing your browser cookies.' => 'Votre session de connexion n’est pas valide, et nettoyer le cookie de session n’a pas fonctionné. Essayez de vider les cookies de votre navigateur.',
      'OAuth Consumer Secret' => 'Secret du consommateur OAuth',
      'All Providers' => 'Tous les fournisseurs',
    );
  }

}
