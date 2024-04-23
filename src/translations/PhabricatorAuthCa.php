<?php

final class PhabricatorAuthCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      '%s renamed this provider from %s to %s.' => '%s ha reanomenat aquest proveïdor de %s a %s.',
      '%s enabled login.' => '%s ha habilitat l\'inici de sessió.',
      'Disable Contact Number' => 'Desactiva el número de contacte',
      'This key has been revoked. Choose or generate a new, unique key.' => 'Aquesta clau s\'ha revocat. Trieu o genereu una nova clau única.',
      'SSH Key Actions' => 'Accions clau SSH',
      'Adding a PKCS8 keyfile to the cache can be very dangerous. If the PKCS8 file really encodes a different public key than the one specified, an attacker could use it to gain unauthorized access.
    Generally, you should use this option only in a development environment where ssh-keygen is broken and it is inconvenient to fix it, and only if you are certain you understand the risks. You should never cache a PKCS8 file you did not generate yourself.' => 'Afegir un fitxer de clau PKCS8 a la caché pot ser molt perillós. Si el fitxer PKCS8 encara té una clau pública diferent de l’especificada, un atacant podria utilitzar-lo per obtenir accés no autoritzat.
    En general, només heu d’utilitzar aquesta opció en un entorn de desenvolupament on ssh-keygen no funcioni i sigui difícil de reparar, i només si esteu segur d’entendre els riscos. No hauríeu de guardar mai un fitxer PKCS8 que no hàgiu creat.',
      'This provider ("%s") already exists, and you can not add more than one instance of it. You can edit the existing provider, or you can choose a different provider.' => 'Aquest proveïdor ("%s") ja existeix i no en podeu afegir més d\'una instància. Podeu editar el proveïdor existent o triar un proveïdor diferent.',
      'To add a Duo factor, first download and install the Duo application on your phone. Once you have launched the application and are ready to perform setup, click continue.' => 'Per afegir un factor Duo, primer descarregueu i instal·leu l\'aplicació Duo al telèfon. Un cop hàgiu iniciat l\'aplicació i estigueu preparat per realitzar la configuració, feu clic per continuar.',
      'The verification code you provided is incorrect, or the email address has been removed, or the email address is owned by another user. Make sure you followed the link in the email correctly and are logged in with the user account associated with the email address.' => 'El codi de verificació que heu produït és incorrecte, o l\'adreça de correu s\'ha mogut, o l\'adreça de correu electrònic és comprada per un altre usuari.  Assegureu-vos que heu seguit l\'enllaç en el procediment de correu i que heu iniciat sessió amb el compte d\'usuari associat a l\'adreça de correu electrònic.',
      'Edit Contact Number' => 'Edita el número de contacte',
      'Passwords' => 'Contrasenyes',
      'Algorithm' => 'Algorisme',
      'You must specify the username of the account to recover.' => 'Heu d’especificar el nom d’usuari del compte per recuperar-lo.',
      'Authentication provider configuration is locked, and can not be changed without being unlocked. See the configuration setting %s for details.' => 'La configuració del proveïdor d\'autenticació està bloquejada i no es pot canviar sense estar desbloquejada. Consulteu el paràmetre de configuració %s per a més detalls.',
      'Revoke Tokens' => 'Revoca Testimonis',
      'There are too many configured default registration providers.' => 'Hi ha massa proveïdors de registre predeterminats configurats.',
      'Unlink "%s" Account?' => 'Voleu desenllaçar el compte "%s"?',
      'Strip factors from specified users.' => 'Despulla de factors els usuaris especificats.',
      'You must confirm the selected password.' => 'Heu de confirmar la contrasenya seleccionada.',
      'Authentication provider (of class "%s") is attempting to load or create an external account, but provided no account identifiers.' => 'El proveïdor d’autenticació (de la classe "%s") intenta carregar o crear un compte extern, però no ha proporcionat cap identificador de compte.',
      'Edit Auth Messages' => 'Editeu els missatges d\'autenticació',
      'Complete enrolling your phone with Duo:' => 'Completa la inscripció del telèfon amb Duo:',
      'Unknown session type "%s".' => 'Tipus de sessió desconegut "%s".',
      'Setup Admin Account' => 'Configureu el compte d\'administrador',
      'Enable Contact Number' => 'Activa el número de contacte',
      'Create New Duo Account' => 'Crear un compte Duo nou',
      'To add a TOTP factor to your account, you will first need to install a mobile authenticator application on your phone. Two applications which work well are **Google Authenticator** and **Authy**, but any other TOTP application should also work.
    If you haven\'t already, download and install a TOTP application on your phone now. Once you\'ve launched the application and are ready to add a new TOTP code, continue to the next step.' => 'Per afegir un factor TOTP al vostre compte, primer haureu d’instal·lar una aplicació d’autenticació mòbil al telèfon. Dues aplicacions que funcionen bé són **Google Authenticator** i **Authy**, però qualsevol altra aplicació TOTP també hauria de funcionar.
    Si encara no ho heu fet, descarregueu i instal·leu ara una aplicació TOTP al telèfon. Un cop hàgiu llançat l\'aplicació i estigueu llest per afegir un codi TOTP nou, continueu amb el pas següent.',
      'To configure Bitbucket OAuth, log in to Bitbucket and go to **Manage Account** > **Access Management** > **OAuth**.
    Click **Add Consumer** and create a new application.
    After completing configuration, copy the **Key** and **Secret** to the fields above.' => 'Per configurar l\'OAuth de Bitbucket, inicieu la sessió a Bitbucket i aneu a **Gestió de Compte** > **Gestió d\'accés** > **Autenticació**. 
    Feu clic a **Afegeix un consumidor** i creeu una aplicació nova. 
    Després de completar la configuració, copieu la **clau** i el **Secret** als camps anteriors.',
      'The account you are attempting to register or link is already linked to another user.' => 'El compte que intenteu registrar o enllaçar ja està enllaçat amb un altre usuari.',
      'Base URI should include protocol (like "%s").' => 'L\'URI base de Phabricator ha d\'incloure protocol (com ara \'%s\').',
      'Verify an unverified email address which is already attached to an account. This will also re-execute event hooks for addresses which are already verified.' => 'Verifiqueu una adreça de correu electrònic no verificada que ja estigui adjunta a un compte. Això també tornarà a executar hooks d\'esdeveniments per a adreces que ja estiguin verificades.',
      'Must Verify Email' => 'Heu de verificar el correu electrònic',
      'Expected "newResultForPrompt()" to return an object of class "%s", but it returned something else ("%s"; in "%s").' => 'S\'esperava que "newResultForPrompt()" retornés un objecte de la classe "%s", però va tornar una altra cosa ("%s"; a "%s").',
      'MFA Providers' => 'Proveïdors de MFA',
      'Strip factors for a specific provider. Use `bin/auth list-mfa-providers` for a list of providers.' => 'Despulla de factors un proveïdor específic. Utilitzeu `bin/auth list-mfa-providers` per a una llista de proveïdors.',
      'Edit MFA Provider' => 'Editeu el proveïdor MFA',
      'SSH Key Type' => 'Tipus de clau SSH',
      '%s enabled auto login.' => 'S\'ha activat l\'inici de sessió automàtic per %s.',
      'The account you are attempting to register with has an invalid email address (%s). This server only allows registration with specific email addresses:' => 'El compte amb què intenteu registrar-vos té una adreça de correu electrònic no vàlida (%s). Aquesta instal·lació de Phabricator només permet el registre amb adreces de correu electrònic específiques:',
      'Invalid OAuth Access Token' => 'Testimoni d\'Accés OAuth no vàlid',
      'Create Auth Message' => 'Crea un missatge d\'autenticació',
      'Verify Email' => 'Verifica el correu electrònic',
      'Revoke credentials for the specified object. To revoke credentials for a user, use "@username".' => 'Revoqueu les credencials de l\'objecte especificat. Per revocar les credencials d\'un usuari, utilitzeu "@username".',
      'Use "--user <username>" to specify which user to strip factors from, or "--all-users" to strip factors from all users.' => 'Utilitzeu "--user <nom d\'usuari>" per especificar a quin usuari voleu despullar de factors, o «--all-users» per despullar de factors a tots els usuaris.',
      'This factor recently issued a challenge which has expired. A new challenge can not be issued yet. Wait %s second(s) for the code to cycle, then try again.' => 'Aquest factor ha llançat recentment un desafiament que ha caducat. Encara no es pot presentar un nou repte. Espereu %s segons fins que el codi cicli i torneu-ho a provar.',
      'Path to public keyfile.' => 'Ruta cap al fitxer de claus públiques.',
      'Strip all factors, regardless of type.' => 'Despulla de tots els factors, sense importar el tipus.',
      'Enable the contact number %s?' => 'Habilitar el número de contacte %s?',
      'Account is already registered or linked.' => 'El compte ja és registrat o enllaçat.',
      'Sign this transaction group with MFA.' => 'Signeu aquest grup de transaccions amb MFA.',
      '(Some types of token can not be revoked, and you can not revoke tokens which have already expired.)' => '(No es poden revocar alguns tipus de testimonis, i no es poden revocar testimonis que ja han caducat).',
      'You have not configured any multi-factor providers yet.' => 'Encara no heu configurat cap proveïdor multifactor.',
      'Unable to Log In' => 'No es pot iniciar la sessió',
      'The external service ("%s") you just used to log in is already associated with another %s user account. Log in to the other %s account and unlink the external account before linking it to a new %s account.' => 'El compte extern («%s») on acabeu d\'iniciar sessió ja està associat a un altre compte d\'usuari de Phabricator. Inicieu sessió a l\'altre compte Phabricator i desenllaçeu el compte extern abans d\'enllaçar-lo a un nou compte Phabricator.',
      'Before you can use this software, you need to add multi-factor authentication to your account. Multi-factor authentication helps secure your account by making it more difficult for attackers to gain access or take sensitive actions.' => 'Abans d’utilitzar Phabricator, heu d’afegir l’autenticació multifactor al vostre compte. L’autenticació multifactor ajuda a protegir el vostre compte, impedeix que els atacants puguin accedir o dur a terme accions confidencials.',
      'Session has already signed required legalpad documents!' => 'La sessió ja ha signat els documents legals necessaris.',
      'On the plus side, that purple notification bubble will disappear.' => 'Al costat positiu, aquesta bombolla de notificació morada desapareixerà.',
      'This account ("%s") can not establish web sessions, so it is not possible to generate a functional recovery link. Special accounts like daemons and mailing lists can not log in via the web UI.' => 'Aquest compte ("%s") no pot establir sessions web, de manera que no és possible generar un enllaç de recuperació funcional. Els comptes especials, com ara dimonis i llistes de correu, no poden iniciar la sessió a través de la IU web.',
      'Revoke credentials of the given type.' => 'Revoqueu les credencials del tipus indicat.',
      'This private key is not formatted correctly. Check that you have provided the complete text of a valid private key.' => 'Aquesta clau privada no té el format correcte. Comproveu que heu proporcionat el text complet d’una clau privada vàlida.',
      'Expected valid JSON response from Disqus account data request.' => 'S\'esperava una resposta JSON vàlida de la sol·licitud de dades del compte de Disqus.',
      'LDAP Port' => 'Port LDAP',
      'Really trust this PKCS8 keyfile?' => 'Confiar en aquest fitxer de clau PKCS8?',
      '%s updated the OAuth consumer key for this provider from "%s" to "%s".' => '%s ha actualitzat la clau de consumidor OAuth per a aquest proveïdor de \'%s\' a \'%s\'.',
      'Contact number is already in use.' => 'El número de contacte ja està en ús.',
      'No such user "%s" to recover.' => 'No s\'ha recuperat cap usuari "%s".',
      'Expected \'%s\' to be \'%s\'!' => 'S\'esperava que \'%s\' fos \'%s\'.',
      'No public key was provided.' => 'No s\'ha proporcionat cap clau pública.',
      'Log In with LDAP' => 'Inicieu la sessió amb LDAP',
      'Expected verifier to finish OAuth handshake!' => 'S\'esperava un verificador per acabar l\'encaixada OAuth!',
      'Specify the credential type to revoke with "--type" or specify "--everything". Use "--list" to list available credential types.' => 'Especifiqueu el tipus de credencial per revocar amb "--type" o especifiqueu "--everything". Utilitzeu "--list" per llistar els tipus de credencials disponibles.',
      'Start TLS after binding to the LDAP server.' => 'Inicieu TLS després de vincular-lo al servidor LDAP.',
      'Duo providers must have an API hostname.' => 'Els proveïdors de Duo han de tenir un nom de l\'amfitrió d\'API.',
      'TOTP Code' => 'Codi TOTP',
      'Invalid response token for this challenge: token digest does not match stored digest.' => 'Testimoni de resposta no vàlid per a aquest repte: el resum de testimonis no coincideix amb el resum emmagatzemat.',
      'OAuth Consumer Key' => 'Clau de consumidor OAuth',
      'Another user already has that username.' => 'Un altre usuari ja té aquest nom d\'usuari.',
      'Account Not Refreshable' => 'El compte no es pot actualitzar',
      'You can only recover the username for one account.' => 'Només podeu recuperar el nom d\'usuari d\'un compte.',
      'There are no matching tokens to revoke.' => 'No hi ha cap testimoni coincident per revocar.',
      '%s disabled email trust.' => '%s ha desactivat la confiança en el correu electrònic.',
      'Too Short' => 'Massa curt',
      'You denied this request. Wait %s second(s) to try again.' => 'Heu denegat aquesta sol·licitud. Esperi %s segons per provar-ho una altra vegada.',
      'Guidance included in the mail message body when users request an email link to access their account.
    For installs with password authentication enabled, users access this workflow by using the "Forgot your password?" link on the login screen.
    For installs without password authentication enabled, users access this workflow by using the "Send a login link to your email address." link on the login screen. This workflow allows users to recover access to their account if there is an issue with an external login service.' => 'Guía inclosa en el cos del missatge de correu quan els usuaris sol·liciten un enllaç de correu electrònic per accedir al seu compte. 
    Per a instal·lacions amb autenticació de contrasenya activada, els usuaris accedeixen a aquest flux de treball utilitzant l\'enllaç "Has oblidat la contrasenya?" a la pantalla d\'inici de sessió. 
    Per a instal·lacions sense autenticació de contrasenya habilitada, els usuaris accedeixen a aquest flux de treball utilitzant l\'enllaç "Enviar un enllaç d\'inici de sessió a la meva adreça de correu electrònic." enllaçat a la pantalla d\'inici de sessió. Aquest flux de treball permet als usuaris recuperar l\'accés al seu compte si hi ha un problema amb un servei d\'inici de sessió extern.',
      'The selected password is very weak: it is one of the most common passwords in use. Choose a stronger password.' => 'La contrasenya seleccionada és molt feble: és una de les contrasenyes més habituals. Trieu una contrasenya més forta.',
      'LDAP Username: ' => 'Nom d\'usuari LDAP:',
      'That email address is not verified, but the account it is connected to has at least one other verified address. When an account has at least one verified address, you can only send password reset links to one of the verified addresses. Try a verified address instead.' => 'Aquesta adreça electrònica no està verificada, però el compte al qual està connectat té almenys una altra adreça verificada. Quan un compte té almenys una adreça verificada, només es pot enviar enllaços de restabliment de contrasenya a una de les adreces verificades. Intenteu-ho amb adreça verificada.',
      'Not Distinct' => 'No distingit',
      'Allow users to log in using this provider. If you disable login, users can still use account integrations for this provider.' => 'Permetre als usuaris iniciar sessió mitjançant aquest proveïdor. Si desactiveu l\'inici de sessió, els usuaris encara poden utilitzar integracions de comptes per a aquest proveïdor.',
      'Allow Login:' => 'Permet l\'inici de sessió:',
      'Terminate Session?' => 'Voleu finalitzar la sessió?',
      'Wrong Account' => 'Compte incorrecte',
      'Refresh tokens for a given user.' => 'Actualitza els testimonis per a un usuari donat.',
      'Status ("%s") is not a valid contact number status. Valid status constants are: %s.' => 'L\'estat ("%s") no és un estat de número de contacte vàlid.  Les constants d’estat vàlides són: %s.',
      'Already Registered' => 'Ja registrat',
      'SECURITY WARNING' => 'AVÍS DE SEGURETAT',
      'This public key is already associated with another user or device. Each key must unambiguously identify a single unique owner.' => 'Aquesta clau pública ja està associada a un altre usuari o dispositiu. Cada clau ha d’identificar sense ambigüitats un únic propietari únic.',
      'Allow users to unlink account credentials for this provider from existing accounts. If you disable this, accounts will be permanently bound to provider accounts.' => 'Permetre als usuaris desenllaçar les credencials del compte d’aquest proveïdor dels comptes de Phabricator existents. Si desactiveu això, els comptes de Phabricator estaran vinculats permanentment als comptes del proveïdor.',
      'When you need to authenticate, a request will be pushed to the Duo application on your phone.' => 'Quan hàgiu d’autenticar-vos, s’enviarà una sol·licitud a l’aplicació Duo del vostre telèfon.',
      'SMS is weak, and relatively easy for attackers to compromise. Strongly consider using a different MFA provider.' => 'El SMS és feble i relativament fàcil per als atacants de comprometre\'s. Considera fermament l\'ús d\'un proveïdor diferent de MFA.',
      'Revoke credentials without prompting.' => 'Revoca les credencials sense preguntar.',
      '%s set the OAuth consumer secret for this provider.' => '%s estableix el secret del consumidor OAuth per a aquest proveïdor.',
      'You are logged in as %s, but the email address (%s) you just clicked a link from is already associated with another account (%s). You can log out to switch accounts, or verify the address and attach it to your current account. Attach email address %s to user account %s?' => 'Heu iniciat la sessió com a %s, però l\'adreça electrònica (%s) de la qual heu fet clic en un enllaç ja està associada amb un altre compte (%s). Es pot tancar la sessió per canviar de compte o verificar l\'adreça i associar-la al vostre compte actual. Voleu associar l\'adreça electrònica %s al compte d\'usuari %s?',
      'NOTE: Any user who can browse to this install\'s login page will be able to register an account. To restrict who can register an account, configure [[ %s | %s ]].' => 'NOTA: Qualsevol usuari que pugui navegar per la pàgina d\'inici de sessió d\'aquesta instal·lació podrà registrar un compte de Phabricator. Per restringir qui pot registrar un compte, configureu [[ %s | %s ]].',
      'Auth Provider %d' => 'Proveïdor d’autenticació %s',
      'Set Test Message' => 'Estableix el missatge de prova',
      'Contact number is invalid: %s' => 'El número de contacte no és vàlid: %s',
      'To configure WordPress.com OAuth, create a new WordPress.com Application here:
    https://developer.wordpress.com/apps/new/.
    You should use these settings in your application:
      - **URL:** Set this to your full domain with protocol. For this     server, the correct value is: `%s`
      - **Redirect URL**: Set this to: `%s`
    Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'Per configurar WordPress.com OAuth, creeu una nova aplicació de WordPress.com aquí:
    https://developer.wordpress.com/apps/new/.
    Heu d\'utilitzar aquests paràmetres a la vostra aplicació:
    - **URL:** Establiu-lo al vostre domini complet amb protocol. Per a aquesta instal·lació de Phabricator, el valor correcte és: "%s"
    - **URL de redirecció**: establiu-lo a: "%s"
    Un cop hàgiu creat una aplicació, copieu el **Identificador de client** i el **Secret del client** als camps anteriors.',
      'Username Attribute' => 'Atribut del nom d\'usuari',
      'Unlink Your Only Login Account?' => 'Voleu desenllaçar el vostre únic compte d\'inici de sessió?',
      'Specify an OAuth client id with "--id".' => 'Especifiqueu un identificador de client OAuth amb %s.',
      'Your account has no primary contact number.' => 'El vostre compte no té cap número de contacte principal.',
      'JIRA base URI is required.' => 'Cal un URI base JIRA.',
      'Config Locked' => 'Configuració bloquejada',
      'Attempted to set \'%s\' cookie to \'%s\', but your browser sent back a cookie with the value \'%s\'. Clear your browser\'s cookies and try again.' => 'S\'ha intentat configurar la galeta "%s" a "%s", però el navegador ha enviat una galeta amb el valor "%s". Esborreu les cookies del navegador i torneu-ho a provar.',
      'Recover directly into a full session without requiring MFA or other login checks.' => 'Recuperar directament en una sessió completa sense necessitat de verificació d\'entrada d\'MF o d\'altres.',
      'Always bind and search, even without a username and password.' => 'Vinculeu i cerqueu sempre, fins i tot sense un nom d\'usuari i contrasenya.',
      'Skipping, provider is not enabled or does not exist.' => 'Saltant, el proveïdor no està habilitat o no existeix.',
      'Does Not Allow Registration' => 'No permet el registre',
      '/settings/panel/contact/' => '/settings/panel/contact/',
      'Path to corresponding PKCS8 key.' => 'Ruta a la clau PKCS8 corresponent.',
      'Strength' => 'Força',
      'Enter LDAP Credentials' => 'Introduïu les credencials LDAP',
      'LDAP record query returned more than one result. The query must uniquely identify a record.' => 'La consulta de registre LDAP ha retornat més d\'un resultat. La consulta ha d\'identificar de manera única un registre.',
      'Email record ("%s") has bad associated user PHID ("%s").' => 'El registre del correu electrònic ("%s") té un PHID d\'usuari mal associat ("%s").',
      'This email address has already been verified.' => 'Aquesta adreça de correu electrònic ja ha estat verificada.',
      'The password you entered is the same as another password associated with your account. Each password must be unique.' => 'La contrasenya que heu introduït és la mateixa que una altra contrasenya associada al vostre compte. Cada contrasenya ha de ser única.',
      'The email address you just clicked a link from is already the primary email address for a registered account (%s). Log in to continue.' => 'L\'adreça electrònica a la qual acabeu de fer clic a un enllaç ja és l\'adreça electrònica principal d\'un compte registrat (%s). Inicieu sessió per continuar.',
      'Guidance shown on the main login screen before users log in or register.' => 'Es mostra una guia a la pantalla d\'inici de sessió principal abans que els usuaris iniciïn la sessió o es registrin.',
      'Cache the PKCS8 format of a public key. When developing on OSX, this can be used to work around issues with ssh-keygen. Use `%s` to generate a PKCS8 key to feed to this command.' => 'Emmagatzema en caché el format PKCS8 d\'una clau pública. Quan es desenvolupa en OSX, es pot utilitzar per treballar al voltant de problemes amb ssh-keygen. Utilitzeu `%s` per generar una clau PKCS8 per alimentar aquesta ordre.',
      'Revoke from all credential owners.' => 'Revoca de tots els propietaris de credencials.',
      'Invite has invalid author PHID ("%s").' => 'La invitació té un PHID d\'autor no vàlid (\'%s\').',
      'Unable to Make Primary' => 'No es pot fer principal',
      'Use lowercase letters, digits, and periods. For example: %s' => 'Utilitzeu minúscules, dígits i punts. Per exemple: %s',
      'The response token for this challenge is invalid: response tokens may not include spaces.' => 'El testimoni de resposta per a aquest desafiament no és vàlid: els testimonis de resposta poden no incloure espais.',
      'Anonymous Password' => 'Contrasenya anònima',
      'Use the button below to log in as: %s' => 'Utilitzeu el botó següent per iniciar la sessió com a: %s',
      'Active OAuth Token' => 'Testimoni OAuth actiu',
      'An authorization request will be pushed to the Duo application on your phone.' => 'S\'enviarà una sol·licitud d\'autorització a l\'aplicació Duo del seu telèfon.',
      'Administrative approvals are disabled, so users who register will be able to use their accounts immediately. To enable approvals, configure %s.' => 'Les aprovacions administratives estan desactivades, de manera que els usuaris que es registren podran utilitzar els seus comptes immediatament. Per activar les aprovacions, configureu %s.',
      'Google' => 'Google',
      'You currently have multi-factor authentication ("%s") which depends on your primary contact number. You must remove this authentication factor before you can designate a new primary contact number.' => 'Actualment teniu autenticació multifactor (\'%s\') que depèn del vostre número de contacte principal. Heu d’eliminar aquest factor d’autenticació abans de poder designar un nou número de contacte principal.',
      'Failed to decode OAuth access token response: %s' => 'No s\'ha pogut descodificar la resposta del testimoni d\'accés OAuth: %s',
      'Optionally, specify one or more comma-separated attributes to use to prefill the "Real Name" field when registering a new account. This is purely cosmetic and does not affect the login process, but can make registration a little easier.' => 'Opcionalment, especifiqueu un o més atributs separats per comes per utilitzar per omplir el camp \'Nom real\' quan registreu un compte nou. Això és purament cosmètic i no afecta el procés d’inici de sessió, però pot facilitar el registre una mica més.',
      'You must enter an LDAP password.' => 'Heu d\'entrar a una contrasenya de LDAP.',
      'Generate New Keypair' => 'Genera una clau asimètrica',
      'MFA Provider' => 'Proveïdor de MFA',
      'The private key will not be retained.' => 'Phabricator no conservarà cap còpia de la clau privada.',
      'MFA Provider %d' => 'Proveïdor de MFA %s',
      'This challenge already has a response token; you can not set a new response token.' => 'Aquest desafiament ja té un testimoni de resposta; no es pot establir un nou testimoni de resposta.',
      'Invite action is not a send action!' => 'L\'acció de convidar no és una acció d\'enviament.',
      'This key is trusted. Trusted keys can not be edited. Use %s to revoke trust before editing the key.' => 'Aquesta clau és fiable. Les claus fiables no es poden editar. Utilitzeu %s per revocar la confiança abans d\'editar la clau.',
      'Edit Message' => 'Edita el missatge',
      'user=%s, verified=%s, primary=%s, should_verify=%s' => 'usuari=%s, verificat=%s, principal=%s, cal_verificar=%s',
      'Expected valid JSON response from Facebook account data request.' => 'S\'esperava una resposta JSON vàlida de la sol·licitud de dades del compte de Facebook.',
      'Add Multi-Factor Auth' => 'Afegiu una autenticació de múltiples factors',
      'The contact number.' => 'El número de contacte.',
      'You must enter an LDAP username.' => 'Heu d\'introduir un nom d\'usuari LDAP.',
      'Reached TOTP challenge validation with an unexpected number of unexpired challenges (%d), expected exactly one.' => 'S\'ha assolit la validació del repte TOTP amb un nombre inesperat de desafiaments no caducats (%s), s\'esperava exactament un.',
      'Refresh LDAP Account' => 'Actualitza el compte LDAP',
      'The password and confirmation do not match.' => 'La contrasenya i la confirmació no coincideixen.',
      'Reset action counters so a user can continue taking rate-limited actions.' => 'Restableix els comptadors d\'accions perquè un usuari pugui continuar fent accions amb un percentatge limitat.',
      '%s disabled this contact number.' => '%s ha desactivat aquest número de contacte.',
      'To configure GitHub OAuth, create a new GitHub Application here:
    https://github.com/settings/applications/new
    You should use these settings in your application:
      - **URL:** Set this to your full domain with protocol. For this     server, the correct value is: `%s`
      - **Callback URL**: Set this to: `%s`
    Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'Per configurar OAuth de GitHub, creeu una nova aplicació GitHub aquí:
    https://github.com/settings/applications/new
    Heu d\'utilitzar aquests paràmetres a la vostra aplicació:
    - **URL:** Establiu-lo al vostre domini complet amb protocol. Per a aquesta instal·lació de Phabricator, el valor correcte és: "%s"
    - **URL de devolució de trucada**: configureu-lo a: "%s"
    Un cop hàgiu creat una aplicació, copieu el **Identificador de client** i el **Secret del client** als camps anteriors.',
      'No Providers Configured:' => 'Cap proveïdor configurat:',
      'If you continue, you will create a new account. You will not be able to link this external account to an existing account.' => 'Si continueu, creeu un compte nou. No podreu enllaçar aquest compte extern amb un compte existent.',
      'A text message with an authorization code will be sent to your primary contact number.' => 'S’enviarà un missatge de text amb un codi d’autorització al número de contacte principal.',
      'Revokes all stored passwords.
    Account passwords and VCS passwords (used to access repositories over HTTP) will both be revoked. Passwords for any third party applications which use shared password infrastructure will also be revoked.
    Users will need to reset account passwords, possibly by using the "Forgot Password?" link on the login page. They will also need to reset VCS passwords.
    Passwords are revoked, not just removed. Users will be unable to select the passwords they used previously and must choose new, unique passwords.
    Revoking passwords will not terminate outstanding login sessions. Use the "session" revoker in conjunction with this revoker to force users to login again.' => 'Revoca totes les contrasenyes emmagatzemades. <br><br>Les contrasenyes de compte i les contrasenyes VCS (utilitzades per accedir als repositoris a través d\'HTTP) es revocaran.  També es revocaran contrasenyes per a qualsevol aplicació de tercers que utilitzi la infraestructura de contrasenyes compartides. <br><br>Els usuaris hauran de restablir les contrasenyes del compte, possiblement mitjançant l\'enllaç "Transsenya perduda?" a la pàgina d\'inici de sessió.  També hauran de restablir les contrasenyes VCS. <br><br>Les contrasenyes estan revocades, no simplement eliminades.  Els usuaris no podran seleccionar les contrasenyes que han utilitzat anteriorment i han de triar contrasenyes noves i úniques. <br><br>La revocació de contrasenyes no finalitzarà les sessions d\'inici de sessió pendents.  Utilitzeu el revocador «session» en conjunció amb aquest revocador per obligar els usuaris a tornar a iniciar sessió.',
      '%s set the OAuth consumer key for this provider to "%s".' => '%s estableix la clau de consumidor OAuth per a aquest proveïdor en \'%s\'.',
      'Guidance in the message body when users set a password on an account which did not previously have a password.' => 'Orientació al cos del missatge quan els usuaris estableixen una contrasenya en un compte que anteriorment no en tenia.',
      'Connecting to LDAP...' => 'Connectant a LDAP...',
      'Wait' => 'Espera',
      'No matching SSH keys.' => 'No hi ha cap clau SSH coincident.',
      'Use %s Username' => 'Utilitzeu el nom d’usuari de Phabricator',
      'Authentication Error' => 'Error d\'autenticació',
      'A keypair has been generated, and the public key has been added as a recognized key.' => 'S\'ha generat una clau asimètrica i s\'ha afegit la clau pública com a clau reconeguda.',
      '%s named this provider %s.' => '%s ha anomenat aquest proveïdor %s.',
      'You may optionally customize the enrollment message users are presented with by providing a replacement message below:' => 'Opcionalment, podeu personalitzar el missatge de registre que es presenta als usuaris proporcionant a continuació un missatge de substitució:',
      'Mail Body: Email Login' => 'Cos del correu: inici de sessió per correu electrònic',
      'Send a test message to %s?' => 'Enviar un missatge de prova a %s?',
      'Auth' => 'Autenticador',
      '**JIRA Instance Name**
    Choose a permanent name for this instance of JIRA. This name is used internally to keep track of this particular instance of JIRA, in case the URL changes later.
    Use lowercase letters, digits, and period. For example, `jira`, `jira.mycompany` or `jira.engineering` are reasonable names.' => '**Nom de la instància JIRA**
    Trieu un nom permanent per a aquesta instància de JIRA. Phabricator utilitza aquest nom internament per fer un seguiment d\'aquesta instància de JIRA, en cas que l\'URL canviï més endavant.
    Utilitzeu minúscules, dígits i punt. Per exemple, "jira", "jira.mycompany" o "jira.engineering" són noms raonables.',
      'Text Message (SMS)' => 'Missatge de text (SMS)',
      '%s removed the name (%s) of this provider.' => '%s ha suprimit el nom (%s) d\'aquest proveïdor.',
      'The PHP \'openssl\' extension is not installed. You must install this extension in order to add a JIRA authentication provider, because JIRA OAuth requests use the RSA-SHA1 signing algorithm. Install the \'openssl\' extension, restart everything, and try again.' => 'L\'extensió PHP \'openssl\' no està instal·lada. Heu d\'instal·lar aquesta extensió per afegir un proveïdor d\'autenticació JIRA, ja que les sol·licituds JAI OAuth utilitzen l\'algorisme de signatura RSA-SHA1. Instal·leu l\'extensió \'openssl\', reinicieu Phabricator i torneu-ho a provar.',
      'Provided public key is not properly formatted.' => 'La clau pública proporcionada no té el format adequat.',
      'Multi-Factor Authentication is Misconfigured' => 'L\'autenticació multifactor està mal configurada',
      '(You can not terminate your current login session. To terminate it, log out.)' => '(No podeu finalitzar la sessió d\'inici de sessió actual. Per finalitzar-la, tanqueu la sessió.)',
      'Your account has been created, but needs to be approved by an administrator. You\'ll receive an email once your account is approved.' => 'El vostre compte s\'ha creat, però ha de ser aprovat per un administrador. Rebràs un correu electrònic un cop aprovat el teu compte.',
      'Newly issued MFA challenges must have a future TTL. This factor issued a bad TTL ("%s"). (Did you use a relative time instead of an epoch?)' => 'Els nous reptes de l\'MF han de tenir un futur TTL.  Aquest factor va emetre un TTL dolent ("%s"). (Has utilitzat un temps relatiu en lloc d\'una època?)',
      'Yes (Optional)' => 'Sí (Opcional)',
      'Access token error: %s' => 'Error de testimoni d\'accés: %s',
      'Cached PKCS8 key for public key.' => 'Clau PKCS8 emmagatzemada a la caché per a la clau pública.',
      'Username Change Instructions' => 'Instruccions per canviar el nom d\'usuari',
      'Custom Enroll Message' => 'Missatge d\'inscripció personalitzat',
      'Refreshing token, current token expires in %s seconds.' => 'Actualitzant el testimoni, el testimoni actual caduca d\'aquí %s segons.',
      'Allows Registration' => 'Permet la inscripció',
      'Duo' => 'Duo',
      'Application ID is required.' => 'Cal l\'ID de l\'aplicació',
      'You do not have a linked account on this provider, and thus can not refresh it.' => 'No teniu cap compte enllaçat en aquest proveïdor i, per tant, no el podeu actualitzar.',
      'Use the **OAuth App Notes** field to record details about which account the external application is registered under.' => 'Utilitzeu el camp **Notes de l\'aplicació OAuth** per registrar detalls sobre el compte al qual està registrada l\'aplicació externa.',
      'firstname, lastname' => 'nom, cognom',
      'Minimum length of %d characters.' => 'Longitud mínima de %s caràcters.',
      'This provider does not allow refreshing.' => 'Aquest proveïdor no permet l\'actualització.',
      'One-Time Login Token' => 'Testimoni d\'Inici de Sessió d\'Un Sol Ús',
      '%s revoked this password.' => '%s va revocar aquesta contrasenya.',
      'The id of the OAuth client.' => 'Identificador del client OAuth.',
      'Newly issued MFA challenges must have a valid TTL!' => 'Els desafiaments MFA recentment emesos han de tenir un TTL vàlid.',
      'Target "%s" is not a valid target to revoke credentials from. Usually, revoke from "@username".' => 'L\'objectiu «%s» no és un objectiu vàlid per revocar credencials. Normalment, es revoca per "@username".',
      '%d-Bit Secret' => '%s-Bit secret',
      'Duo is not requiring a challenge, which defeats the purpose of MFA. Duo must be configured to challenge you.' => 'Duo no està requerint un desafiament, el que anul·la el propòsit de MFA. Duo ha d\'estar configurat per desafiar-te.',
      'The email address you just clicked a link from is already associated with a registered account (%s), but is not verified. Log in to that account to continue. If you can not log in, you can register a new account.' => 'L\'adreça de correu electrònic on acabeu de fer clic a un enllaç ja està associada a un compte registrat (%s), però no està verificada. Inicieu la sessió a aquest compte per continuar. Si no podeu iniciar la sessió, podeu registrar un compte nou.',
      'You are destroying an entire class of credentials. This may be very disruptive to users. You should normally do this only if you suspect there has been a widespread compromise which may have impacted everyone.' => 'Esteu destruint tota una classe de credencials. Això pot ser molt perjudicial per als usuaris. Normalment, hauríeu de fer-ho només si sospiteu que hi ha hagut un compromís generalitzat que pot haver afectat tothom.',
      'If you want to link an existing %s account to this external account, do not continue. Instead: log in to your existing account, then go to "Settings" and link the account in the "External Accounts" panel.' => 'Si voleu enllaçar un compte de Phabricator existent amb aquest compte extern, no continueu. En lloc d’això, inicieu sessió al vostre compte existent i aneu a “Configuració” i enllaceu el compte al tauler “Comptes externs”.',
      'You responded to this challenge correctly.' => 'Heu respost correctament a aquest repte.',
      'Specify either specific factors with "--provider", or all factors with "--all-types", but not both.' => 'Especifiqueu factors específics amb "--provider", o tots els factors amb "--all-types", però no els dos.',
      'To configure Disqus OAuth, create a new application here:
    http://disqus.com/api/applications/
    Create an application, then adjust these settings:
      - **Callback URL:** Set this to `%s`
    After creating an application, copy the **Public Key** and **Secret Key** to the fields above (the **Public Key** goes in **OAuth App ID**).' => 'Per configurar OAuth de Disqus, creeu una nova aplicació aquí:
    http://disqus.com/api/applications/
    Creeu una aplicació i, a continuació, ajusteu aquests paràmetres:
    - **URL de devolució de trucada: ** Establiu-lo a "%s"
    Després de crear una aplicació, copieu la **clau pública** i la **clau secreta** als camps anteriors (la **clau pública** apareix a **identificador d\'aplicació OAuth**).',
      'Special users like daemons and mailing lists are not permitted to log in via the web. Log in as a normal user instead.' => 'Els usuaris especials com els dimonis i les llistes de correu no tenen permís per iniciar la sessió a través del web. Inicieu la sessió com a usuari normal.',
      'Login Screen Instructions' => 'Instruccions de la pantalla d\'inici de sessió',
      'Mail Body: Welcome' => 'Cos de correu: Benvingut',
      'Revoke Token?' => 'Revocar el Testimoni?',
      'Asana' => 'Asana',
      'MFA' => 'MFA',
      'Terminate all login sessions.' => 'Finalitzeu totes les sessions d\'inici de sessió.',
      'Send Another Email' => 'Envia un altre correu electrònic',
      'You and other users on this install are collectively sending too many test text messages too quickly. Wait a few minutes to continue texting tests.' => 'Tu i altres usuaris d’aquesta instal·lació envieu massa missatges de text de prova de manera col·lectiva massa ràpidament. Espereu uns minuts per continuar amb les proves de missatges de text.',
      'Failed to find an OAuth client with ID %s.' => 'No s\'ha pogut trobar un client OAuth amb l\'identificador %s.',
      'Allow Account Linking' => 'Permet l\'enllaç de comptes',
      'Provider names can not be longer than %s characters.' => 'Els noms dels proveïdors no poden superar els %s caràcters.',
      'No Account Linked' => 'No hi ha cap compte enllaçat',
      'Allow users to link account credentials for this provider to existing accounts. There is normally no reason to disable this unless you are trying to move away from a provider and want to stop users from creating new account links.' => 'Permetre als usuaris enllaçar les credencials del compte d’aquest proveïdor amb els comptes de Phabricator existents. Normalment no hi ha cap raó per desactivar-ho tret que intenteu allunyar-vos d’un proveïdor i que vulgueu impedir que els usuaris creïn enllaços de compte nous.',
      'Slack' => 'Slack',
      'This request improperly specifies an MFA challenge token ("%s") multiple times and can not be processed.' => 'Aquesta sol·licitud especifica de manera inadequada un testimoni ("%s")  de desafiament MFA diverses vegades i no es pot processar.',
      'You recently provided a response to this factor. Responses may not be reused. Wait %s second(s) for the code to cycle, then try again.' => 'Vostè ha respost recentment a aquest factor. Les respostes no es poden reutilitzar.  Espereu %s segons perquè el codi cicli, després torneu-ho a provar.',
      'Refresh OAuth access tokens. This is primarily useful for development and debugging.' => 'Actualitza els testimonis d\'accés OAuth. Això és útil principalment per al desenvolupament i la depuració.',
      'Public SSH Key' => 'Clau SSH pública',
      'Username and password are required!' => 'Cal un nom d\'usuari i una contrasenya!',
      'Expected \'%s\' in request!' => 'S\'esperava \'%s\' a la petició!',
      '%s updated the OAuth application notes for this provider.' => '%s ha actualitzat les notes de l\'aplicació OAuth per a aquest proveïdor.',
      'Installation is complete. Register your administrator account below to log in. You will be able to configure options and add authentication mechanisms later on.' => 'La instal·lació s\'ha completat. Registreu el vostre compte d\'administrador a continuació per iniciar la sessió. Més endavant podreu configurar opcions i afegir mecanismes d\'autenticació.',
      'This request has timed out because you took too long to respond.' => 'Aquesta sol·licitud s\'ha fet fora de temps perquè heu trigat massa a respondre.',
      'All Keys' => 'Totes les claus',
      'Upload Public Key' => 'Penja la clau pública',
      'OAuth App Notes' => 'Notes de l\'aplicació OAuth',
      'You have failed too many attempts to synchronize new multi-factor authentication methods in a short period of time.' => 'Heu fallat massa intents per sincronitzar mètodes d\'autenticació multifactors nous en un curt període de temps.',
      'Expected token to finish OAuth handshake!' => 'S\'esperava un testimoni per acabar l\'encaixada OAuth!',
      'Authentication provider configuration is locked, and can not be changed without being unlocked.' => 'La configuració del proveïdor d’autenticació està bloquejada i no es pot canviar sense desbloquejar-la.',
      'Do you want to disable this provider? Users will not be able to register or log in using linked accounts. If there are any users without other linked authentication mechanisms, they will no longer be able to log in. If you disable all providers, no one will be able to log in.' => 'Voleu desactivar aquest proveïdor? Els usuaris no podran registrar-se ni iniciar sessió mitjançant comptes enllaçats. Si hi ha usuaris sense altres mecanismes d\'autenticació enllaçats, ja no podran iniciar la sessió. Si desactiveu tots els proveïdors, ningú no podrà iniciar la sessió.',
      'Duo API Hostname' => 'Nom de l\'amfitrió d\'API Duo',
      'Login Failure' => 'Error d\'nici de sessió',
      'NOTE: Revoking passwords does not terminate existing sessions which were established using the old passwords. To terminate existing sessions, run the "session" revoker now.' => 'NOTA: La revocació de contrasenyes no posa fi a les sessions existents establertes mitjançant les contrasenyes antigues. Per finalitzar les sessions existents, executeu el revocador de \'sessió\' ara.',
      'Scan this QR code with the Duo application on your mobile phone:' => 'Escaneja aquest codi QR amb l’aplicació Duo del telèfon mòbil:',
      '%s You have not added authentication providers yet. Use "%s" to add a provider, which will let users register new accounts and log in.' => '%s Encara no heu afegit cap proveïdor d\'autenticació. Utilitzeu "%s" per afegir un proveïdor, que permetrà als usuaris registrar nous comptes de Phabricator i iniciar la sessió amb ells.',
      'JIRA base URI should include protocol (like "https://").' => 'L\'URI base JIRA ha d\'incloure un protocol (com ara \'https: //\').',
      'Authentication provider ("%s") encountered an error while attempting to log in. %s' => 'El proveïdor d\'autenticació ("%s") ha trobat un error en intentar iniciar la sessió. %s',
      'There are no matching factors to strip.' => 'No hi ha cap factor de coincidència per a despullar.',
      'Mark an OAuth client as trusted. Trusted OAuth clients may be reauthorized without requiring users to manually confirm the action.' => 'Establiu Phabricator perquè no confiï en un client OAuth. Phabricator redirigeix ​​a clients OAuth de confiança que els usuaris han autoritzat sense la intervenció de l\'usuari.',
      'Unable to Generate Keys' => 'No es poden generar claus',
      'Specify the target to revoke credentials from with "--from" or specify "--everywhere".' => 'Especifiqueu l\'objectiu des del qual revocar les credencials amb "--from" o especifiqueu "--everywhere".',
      'You can link your %s account to an external account to allow you to log in more easily in the future. To continue, choose an account to link below. If you prefer not to link your account, you can skip this step.' => 'Podeu enllaçar el vostre compte de Phabricator amb un compte extern perquè pugueu iniciar la sessió més fàcilment en el futur. Per continuar, trieu un compte per enllaçar a continuació. Si preferiu no enllaçar el vostre compte, podeu ometre aquest pas.',
      'Expected JSON response from Duo.' => 'S\'esperava una resposta JSON de Duo.',
      'Revoke Public Key' => 'Revoca la clau pública',
      'You (or someone pretending to be you) recently requested an account recovery link be sent to this email address. If you did not make this request, you can ignore this message.' => 'Vostè (o algú que pretén ser vostè) recentment ha sol·licitat l\'enviament d\'un enllaç de recuperació del compte a aquesta adreça electrònica. Si no heu fet aquesta sol·licitud, podeu ignorar aquest missatge.',
      'Use Primary Email Address' => 'Utilitzar l\'adreça de correu electrònic principal',
      'Designate %s as your primary contact number?' => 'Vols designar %s com a número de contacte principal?',
      'This engine is used to edit MFA providers.' => 'Aquest motor s’utilitza per editar proveïdors de MFA.',
      'This factor recently issued a challenge for a different workflow. Wait %s second(s) for the code to cycle, then try again.' => 'Aquest factor ha llançat recentment un repte per a un flux de treball diferent. Espereu %s segons fins que el codi cicli i torneu-ho a provar.',
      '%s disabled this provider.' => '%s ha desactivat aquest proveïdor.',
      'Your browser did not submit a "%s" cookie with client state information in the request. Check that cookies are enabled. If this problem persists, you may need to clear your cookies.' => 'El seu navegador no ha presentat una galeta \'%s\' amb informació de l\'estat del client a la sol·licitud. Comproveu que les galetes estiguin habilitades. Si aquest problema persisteix, és possible que hàgiu d\'esborrar les galetes.',
      'You have not activated this enrollment in the Duo application on your phone yet. Complete activation, then click continue.' => 'Encara no heu activat aquesta inscripció a l\'aplicació Duo al vostre telèfon. Completeu l\'activació i feu clic per continuar.',
      'This factor recently issued a challenge to a different login session. Wait %s second(s) for the code to cycle, then try again.' => 'Aquest factor ha emès recentment un repte a una sessió d\'inici de sessió diferent. Espera %s segons perquè el codi cicli, després torneu-ho a provar.',
      'ERROR: You are making a Conduit API request to "%s", but the correct HTTP request path to use in order to access a Conduit method is "%s" (for example, "%s"). Check your configuration.' => 'ERROR: feu una sol·licitud de l\'API Conduit a "%s", però la ruta correcta de sol·licitud HTTP que cal utilitzar per accedir a un mètode COnduit és "%s" (per exemple, "%s"). Comproveu la vostra configuració.',
      '%s updated the enroll message.' => '%s ha actualitzat el missatge d\'inscripció.',
      'You currently have multi-factor authentication ("%s") which depends on your primary contact number. You must remove this authentication factor before you can modify or disable your primary contact number.' => 'Actualment teniu autenticació multifactor (\'%s\') que depèn del vostre número de contacte principal. Heu d’eliminar aquest factor d’autenticació abans de poder modificar o desactivar el vostre número de contacte principal.',
      'Duo API hostname ("%s") is invalid, hostname must be "*.duosecurity.com".' => 'El nom de l\'amfitrió d\'API Duo ("%s") no és vàlid, el nom de l\'amfitrió ha de ser "*.duosecurity.com".',
      'OAuth App Secret' => 'Secret de l\'aplicació OAuth',
      'Skipping, provider has no stored refresh token.' => 'Ometent, el proveïdor no té cap testimoni de refresc emmagatzemat.',
      'Revokes all SSH public keys.
    SSH public keys are revoked, not just removed. Users will need to generate and upload new, unique keys before they can access repositories or other services over SSH.' => 'Revoca totes les claus públiques SSH. <br><br>Les claus públiques SSH són revocades, no només eliminades.  Els usuaris hauran de generar i pujar noves claus úniques abans de poder accedir als repositoris o altres serveis a través de SSH.',
      'End of dry run.' => 'Final de la prova en blanc.',
      'Revoke credentials which may have been leaked or disclosed.' => 'Revoqueu les credencials que poden haver estat filtrades o divulgades.',
      'Destroyed %s credential(s) of type "%s".' => 'S\'han destruït%s credencials del tipus \'%s\'.',
      'Server name is required.' => 'Cal el nom de la instància de Phabricator',
      'List information about available credential revokers.' => 'Enumereu informació sobre revocadors de credencials disponibles.',
      'No message type exists with key "%s".' => 'No existeix cap tipus de missatge amb la clau \'%s\'.',
      'You will be prompted to provide MFA when you submit.' => 'Se us demanarà que proporcioneu l\'MFA quan l\'envieu.',
      'To configure Google OAuth, create a new \'API Project\' here:
    https://console.developers.google.com/
    Adjust these configuration settings for your project:
      - Under **APIs & auth > APIs**, scroll down the list and enable     the **Google+ API**.
         - You will need to consent to the **Google+ API** terms if you  have not before.
      - Under **APIs & auth > Credentials**, click **Create New Client    ID** in the **OAuth** section. Then use these settings:
         - **Application Type**: Web Application
         - **Authorized Javascript origins**: Leave this empty.
         - **Authorized redirect URI**: Set this to `%s`.
    After completing configuration, copy the **Client ID** and **Client Secret** from the Google console to the fields above.' => 'Per configurar Google OAuth, creeu un nou «Projecte API» aquí: 
    https://console.developers.google.com/ 
    Ajusteu aquests paràmetres de configuració per al vostre projecte: 
      - Sota **APIs & auth > APIs**, desplaceu-vos cap avall per la llista i activeu **Google+ API**.
         - Si no ho heu fet abans, haureu d\'acceptar els termes **Google+ API**. 
      - Sota **APIs & auth > Credentials**, feu clic a **Crea un nou identificador de client** a la secció ** OAuth**. Després utilitzeu aquests paràmetres: 
         - **Tipus d\'aplicació**: Aplicació web 
         - **Orígens de Javascript autenticat**: Deixeu-ho en blanc. 
         - **URI de redirecció autoritzada**: Establiu-ho a `%s`. 
    Després de completar la configuració, copieu l\'**ID Client** i **client secret** des de la consola de Google als camps anteriors.',
      'Skipping, provider does not support token refresh.' => 'Ometent, el proveïdor no dóna suport a l\'actualització de testimonis.',
      'This factor has been removed from your device, so this server can not send you a challenge. To continue, an administrator must strip this factor from your account.' => 'Aquest factor ha estat eliminat del vostre dispositiu, així que Phabricator no li pot enviar un repte. Per continuar, un administrador s\'ha de despullar el vostre compte d\'aquest factor.',
      'Attempting to upgrade password hasher, but the password for the upgrade is not the stored credential!' => 'S\'està intentant actualitzar el hasher de contrasenya, però la contrasenya de l\'actualització no és la credencial emmagatzemada.',
      'Your Duo account ("%s") requires enrollment. Contact your Duo administrator for help. Duo status message: %s' => 'El seu compte Duo (\'%s\') requereix inscripció. Poseu-vos en contacte amb l\'administrador de Duo per obtenir ajuda. Missatge d\'estat Duo: %s',
      'The OAuth provider failed to retrieve an account ID.' => 'El proveïdor OAuth no ha pogut rescatar un identificador de compte.',
      'Edit SSH Key' => 'Edita la clau SSH',
      'Attempting to set an empty password!' => 'Intentant establir una contrasenya buida!',
      '%s changed this contact number from %s to %s.' => '%s ha canviat aquest número de contacte de %s a %s.',
      'Welcome, %s. To complete the process of logging in, provide your multi-factor credentials.' => 'Benvingut, %s. Per completar el procés d\'inici de sessió, proporcioneu les vostres credencials de múltiples factors.',
      'Unlock the authentication provider config, to make it possible to edit the config using the web UI. Make sure to do **bin/auth lock** when done editing the configuration.' => 'Desbloquejar la configuració del proveïdor d’autenticació per fer possible l’edició de la configuració mitjançant la interfície d’usuari web. Assegureu-vos de fer **bin/auth lock** quan hàgiu acabat d\'editar la configuració.',
      'Too many account recovery email links have been sent to this account in a short period of time.' => 'S\'han enviat massa enllaços de correu electrònic de recuperació del compte a aquest compte en un curt període de temps.',
      'Strip a specific factor type. Use `bin/auth list-factors` for a list of factor types.' => 'Despulla d\'un tipus de factor específic. Utilitza `bin/auth list-factors` per obtenir una llista de tipus de factors.',
      'Provide Multi-Factor Credentials' => 'Proporcioneu credencials de múltiples factors',
      'Skip email verification for accounts registered through this provider.' => 'Phabricator ometrà la verificació de correu electrònic dels comptes registrats a través d\'aquest proveïdor.',
      'You have failed to enter the correct account password too often in a short period of time.' => 'No heu pogut introduir la contrasenya correcta del compte, massa intents en un curt període de temps.',
      'JIRA instance name must contain only lowercase letters, digits, and period.' => 'El nom de la instància JIRA només ha de contenir minúscules, dígits i punt.',
      'The external service ("%s") you just authenticated with is not configured to allow account linking on this server. An administrator may have recently disabled it.' => 'El compte extern (\'%s\') amb el qual acabeu d\'autenticar-vos no està configurat per permetre els inicis de sessió en aquesta instal·lació de Phabricator. És possible que un administrador l’hagi desactivat recentment.',
      'This engine is used to edit contact numbers.' => 'Aquest motor s’utilitza per editar números de contacte.',
      'You can not set the response digest for a challenge directly. Instead, set a response token. A response digest will be computed automatically.' => 'No es pot establir el resum de resposta per a un repte directament. En comptes d\'això, es pot establir un testimoni de resposta. Es calcularà automàticament un resum de resposta.',
      '%s created this contact number.' => '%s ha creat aquest número de contacte.',
      'Duo providers must have an API credential.' => 'Els proveïdors de Duo han de tenir una credencial d\'API.',
      'SSH Key %d' => 'Clau SSH %s',
      'Public key type should be one of: %s' => 'El tipus de clau pública ha de ser de: %s',
      'Duo API Credential' => 'Credencial API Duo',
      '%s edited a property of this provider.' => '%s ha modificat una propietat d\'aquest proveïdor.',
      'To verify your phone as an authentication factor, a text message with a secret code will be sent to the phone number you have listed as your primary contact number.' => 'Per verificar el vostre telèfon com a factor d’autenticació, s’enviarà un missatge de text amb un codi secret al número de telèfon que heu indicat com a número de contacte principal.',
      'DISABLE APPROVAL QUEUE' => 'DESACTIVA LA CUA D\'APROVACIÓ',
      'Specify either specific factors with "--type", or all factors with "--all-types", but not both.' => 'Especifiqueu els factors específics amb "--type", o tots els factors amb "--all-types", però no els dos.',
      'No OAuth Access Token' => 'Sense testimoni d\'autenticació OAuth',
      'This password is associated with an object PHID ("%s") for a different object than the provided one ("%s").' => 'Aquesta contrasenya està associada amb un PHID d\'objecte ("%s") d\'un objecte diferent que el proporcionat un ("%s").',
      'Your %s account is already connected to an external account on this service ("%s"), but you are currently logged in to the service with a different account. Log out of the external service, then log back in with the correct account before refreshing the account link.' => 'El vostre compte de Phabricator ja està connectat a un compte extern d\'aquest proveïdor (\'%s\'), però actualment heu iniciat la sessió al proveïdor amb un compte diferent. Tanqueu la sessió al servei extern i torneu a iniciar la sessió amb el compte correcte abans d’actualitzar l’enllaç del compte.',
      'Verify this email address (%s) and attach it to your account (%s)?' => 'Verificar aquesta adreça electrònica (%s) i adjuntar-la al vostre compte (%s)?',
      'Revoke SSH Public Key' => 'Revoca la clau pública SSH',
      'Before you can set up or use LDAP, you need to install the PHP LDAP extension. It is not currently installed, so PHP can not talk to LDAP. Usually you can install it with `%s`, `%s`, or a similar package manager command.' => 'Abans de configurar o utilitzar LDAP, heu d’instal·lar l’extensió LDAP de PHP. Actualment no està instal·lat, de manera que PHP no pot parlar amb LDAP. Normalment, es pot instal·lar amb `%s`,` %s` o una ordre similar de gestor de paquets.',
      'To configure Slack OAuth, create a new application here:
    https://api.slack.com/docs/sign-in-with-slack#create_slack_app
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Per configurar OAuth de Slack, creeu una nova aplicació aquí:
    https://api.slack.com/docs/sign-in-with-slack#create_slack_app
    Quan creeu l\'aplicació, utilitzeu aquests paràmetres:
    - **URI de redirecció:** Establiu-lo a: `%s`
    Després de completar la configuració, copieu el **ID de client** i el **Secret del client** als camps anteriors. (És possible que hàgiu de generar el secret del client fent clic primer a \'Nou secret\').',
      'A challenge has been sent to your phone. Open the Duo application and confirm the challenge, then continue.' => 'S\'ha enviat un repte al telèfon. Obriu l\'aplicació Duo i confirmeu el repte i, a continuació, continueu.',
      'MFA Sync Token' => 'Testimoni de sincronització MFA',
      'OAuth client "%s" is now trusted.' => 'Actualitzat; Phabricator confia en %s pel client OAuth.',
      'Your browser did not submit a registration key with the request. You must use the same browser to begin and complete registration. Check that cookies are enabled and try again.' => 'El vostre navegador no va enviar cap clau de registre amb la sol·licitud. Heu d’utilitzar el mateix navegador per començar i completar el registre. Comproveu que les cookies estiguin activades i torneu-ho a provar.',
      '**Step 1 of 2 - Name Remote Server**
    Choose a permanent name for the remote server you want to connect to. This name is used internally to keep track of the remote server, in case the URL changes later.' => '**Pas 1 de 2: nom de la instància OAuth de Phabricator**
    Trieu un nom permanent per a la instància del servidor OAuth de Phabricator. //Aquesta// instància de Phabricator utilitza aquest nom internament per fer un seguiment de la instància del servidor OAuth de Phabricator, en cas que l\'URL canviï més endavant.',
      'You must specify the path to a public keyfile with %s.' => 'Heu d\'especificar la ruta d\'accés a un fitxer de clau pública amb %s.',
      '%s changed the credential for this provider from %s to %s.' => '%s ha canviat la credencial d\'aquest proveïdor de %s a %s.',
      'NOTE: Amazon **requires** HTTPS, but this service does not use HTTPS. **You will not be able to add Amazon as an authentication provider until you configure HTTPS on this install**.' => 'NOTA: Amazon **requereix** HTTPS, però la vostra instal·lació de Phabricator no utilitza HTTPS. **No podreu afegir Amazon com a proveïdor d\'autenticació fins que no configureu HTTPS en aquesta instal·lació**.',
      'Verify this email address (%s) and attach it to your account?' => 'Verificar aquesta adreça de correu electrònic (%s) i adjuntar-la al vostre compte?',
      'This request included an improperly formatted MFA challenge token and can not be processed.' => 'Aquesta petició incloïa un testimoni de desafiament MFA amb un format incorrecte i no es pot processar.',
      'Expected valid JSON response from Amazon account data request.' => 'S\'esperava una resposta JSON vàlida de la sol·licitud de dades del compte d\'Amazon.',
      'Revoked SSH keys can not be edited or reinstated.' => 'Les claus SSH revocades no es poden editar ni restablir.',
      'WARNING: You have not configured any authentication providers yet, so your account has no login credentials. If you log out now, you will not be able to log back in normally.' => 'AVÍS: encara no heu configurat cap proveïdor d’autenticació, de manera que el vostre compte no té credencials d’inici de sessió. Si tanqueu la sessió ara, no podreu tornar a iniciar la sessió amb normalitat.',
      'If you do not recognize this change, it may indicate your account has been compromised.' => 'Si no reconeixeu aquest canvi, pot indicar que el vostre compte ha estat compromès.',
      'You have not configured a primary contact number. Configure a contact number before adding SMS as an authentication factor.' => 'No heu configurat cap número de contacte principal. Configureu un número de contacte abans d\'afegir l\'SMS com a factor d\'autenticació.',
      '%s made this the primary contact number.' => '%s ha fet d\'aquest el número de contacte principal.',
      '%s changed the enrollment policy for this provider from %s to %s.' => '%s ha canviat la política d\'inscripció d\'aquest proveïdor de %s a %s.',
      'Currently, there are no configured external auth providers which you can link your account to.' => 'No hi ha cap proveïdor d’autorització extern configurat al qual enllaçar el vostre compte.',
      '%s disabled account linking.' => '%s ha desactivat la vinculació de comptes.',
      'Number Already Primary' => 'El número ja és principal',
      'Strip these authentication factors?' => 'Despullar d\'aquests factors d\'autenticació?',
      'Your Duo account ("%s") has not completed Duo enrollment. Check your email and complete enrollment to continue.' => 'El seu compte duo (\'%s\') no ha completat la inscripció a Duo. Consulteu el correu electrònic i completeu la inscripció per a continuar.',
      'Locked the authentication provider configuration.' => 'S\'ha bloquejat la configuració del proveïdor d\'autenticació.',
      'Specify the target to revoke credentials from with "--from" or specify "--everywhere", but not both.' => 'Especifiqueu l\'objectiu des del qual revocar les credencials amb "--from" o especifiqueu "--everywhere", però no tots dos.',
      'Your browser submitted a different registration key than the one associated with this account. You may need to clear your cookies.' => 'El vostre navegador ha enviat una clau de registre diferent de la associada a aquest compte. És possible que hagueu d’esborrar les galetes.',
      'Make Primary Number' => 'Feu el número principal',
      'Strip factors from all users.' => 'Despulla de factors tots els usuaris.',
      'Duo username pairing mode ("%s") is not supported.' => 'No s\'admet el mode d\'aparellament de noms d\'usuari Duo ("%s").',
      'Facebook' => 'Facebook',
      'Really revoke all tokens? Among other temporary authorizations, this will disable any outstanding password reset or account recovery links.' => 'Segur que voleu revocar tots els testimonis?  Entre altres autoritzacions temporals, això inhabilitarà qualsevol enllaç pendent de restabliment de contrasenya o recuperació de comptes.',
      'LDAP Version' => 'Versió de LDAP',
      'APPROVAL QUEUE' => 'CUA D\'APROVACIÓ',
      '%s removed this password from the revocation list.' => '%s ha suprimit aquesta contrasenya de la llista de revocacions.',
      'Lock authentication provider config, to prevent changes to the config without doing **bin/auth unlock**.' => 'Bloqueja la configuració del proveïdor d’autenticació per evitar canvis a la configuració sense fer *bin/auth unlock**.',
      'To configure Asana OAuth, create a new application here:
    https://app.asana.com/-/account_api
    When creating your application, use these settings:
      - **App URL:** Set this to: `%s`
      - **Redirect URL:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => 'Per configurar OAuth d\'Asana, creeu una nova aplicació aquí:
    https://app.asana.com/-/account_api
    Quan creeu l\'aplicació, utilitzeu aquests paràmetres:
    - **URL de l\'aplicació:** Establiu-lo a: "%s"
    - **URL de redirecció:** Establiu-lo a: "%s"
    Després de completar la configuració, copieu el **Identificador de client** i el **Secret del client** als camps anteriors.',
      'After you download the private key, it will be destroyed. You will not be able to retrieve it if you lose your copy.' => 'Després de descarregar la clau privada, es destruirà. No el podreu rescatar si perdeu la còpia.',
      'Scan the QR code or manually enter the key shown below into the application.' => 'Escaneja el codi QR o introdueix manualment la clau que es mostra a l\'aplicació.',
      'The account you are attempting to register with uses a disabled authentication provider ("%s"). An administrator may have recently disabled this provider.' => 'El compte amb què intenteu registrar-vos fa servir un proveïdor d\'autenticació desactivat ("%s"). És possible que un administrador hagi desactivat recentment aquest proveïdor.',
      'Can Not Edit Trusted Key' => 'No es pot editar la clau de confiança',
      'Specified public keyfile "%s" does not exist!' => 'El fitxer de clau pública especificat \'%s\' no existeix!',
      'The key "%s" will be permanently revoked, and you will no longer be able to use the corresponding private key to authenticate.' => 'La clau "%s" es revocarà permanentment i ja no podreu utilitzar la clau privada corresponent per autenticar-vos.',
      'You can not make a disabled number your primary contact number.' => 'No es pot convertir un número desactivat en el vostre número de contacte principal.',
      'Configure a connection to an LDAP server so that users can use their LDAP credentials to log in.' => 'Configureu una connexió a un servidor LDAP perquè els usuaris puguin utilitzar les seves credencials LDAP per iniciar sessió a Phabricator.',
      'Revoke SSH Key' => 'Revoca la clau SSH',
      'The email address associated with this external account ("%s") is not a valid email address and can not be used to register an account. Choose a different, valid address.' => 'L\'adreça de correu electrònic associada a aquest compte extern ("%s") no és una adreça de correu electrònic vàlida i no es pot utilitzar per registrar un compte de Phabricator. Trieu una adreça diferent i vàlida.',
      'OAuth client "%s" is already untrusted.' => 'Phabricator ja no confia en el client OAuth "%s".',
      'Request did not include account key.' => 'La sol·licitud no incloïa la clau del compte.',
      'JIRA instance name is required.' => 'Cal un nom d’instància JIRA.',
      'Edit SSH Public Key' => 'Edita la clau pública SSH',
      '%s updated the OAuth application secret for this provider.' => '%s ha actualitzat el secret de l\'aplicació OAuth per a aquest proveïdor.',
      'Base URI' => 'URI de Phabricator Base',
      'Consumer key is required.' => 'Cal una clau de consumidor.',
      'Attempted to set \'%s\' cookie to \'%s\', but your browser did not accept the cookie. Check that cookies are enabled, clear them, and try again.' => 'S\'ha intentat configurar la galeta "%s" a "%s", però el vostre navegador no ha acceptat la galeta. Comproveu que les galetes estiguin activades, esborreu-les i torneu-ho a provar.',
      'Unable to load Duo API credential ("%s").' => 'No es pot carregar la credencial de l\'API de Duo (\'%s\').',
      'NOTE: This provider **only supports JIRA 6**. It will not work with JIRA 5 or earlier.' => 'NOTA: Aquest proveïdor **només admet JIRA 6**. No funcionarà amb JIRA 5 o versions anteriors.',
      'SSH key name is required.' => 'Cal un nom de clau SSH.',
      'Consumer secret is required.' => 'Cal un secret per al consumidor.',
      'Strip factors without prompting.' => 'Despulla de factors sense preguntar.',
      'SSH KEY DETAIL' => 'DETALL DE LA CLAU SSH',
      'Recover access to an account if you have locked yourself out.' => 'Recupereu l\'accés a un compte si us heu bloquejat a Phabricator.',
      'Failed to convert public key into PKCS8 format. If you are developing on OSX, you may be able to use `%s` to work around this issue. %s' => 'No s\'ha pogut convertir la clau pública al format PKCS8. Si esteu desenvolupant OSX, és possible que pugueu utilitzar `%s \'per solucionar aquest problema. %s',
      '(WARNING) Examine the table below for information on how password hashes will be stored in the database.
    (NOTE) You can select a minimum password length by setting `%s` in configuration.' => '(AVÍS) Examineu la taula següent per obtenir informació sobre com s’emmagatzemaran els hashes de contrasenya a la base de dades. 
    (NOTA) Es pot seleccionar una longitud mínima de contrasenya posant `%s` a la configuració.',
      'Trusted' => 'Fiable',
      'You must specify the path to a pkcs8 keyfile with %s.' => 'Heu d\'especificar la ruta d\'accés a un fitxer de clau pkcs8 amb %s.',
      'This engine is used to edit authentication messages.' => 'Aquest motor s’utilitza per editar missatges d\'auntenticació.',
      'Show factors, but do not strip them.' => 'Mostra els factors, però no despulla.',
      'Pattern "%s" is not valid.' => 'El patró «%s» no és vàlid.',
      'View Active Keys' => 'Veure claus actives',
      'SSH Key %d: %s' => 'Clau SSH %s: %s',
      'The external account you just logged in with is not associated with a valid %s user account.' => 'El compte extern amb el qual acabeu d\'iniciar la sessió no està associat a un usuari de Phabricator vàlid.',
      'Refreshed token, new token expires in %s seconds.' => 'Testimoni actualitzat, el nou testimoni caduca en %s segons.',
      '%s set the OAuth application secret for this provider.' => '%s estableix el secret de l\'aplicació OAuth per a aquest proveïdor.',
      'OAuth client "%s" is already trusted.' => 'Phabricator ja confia en el client OAuth "%s".',
      'When users click the "Change Username" action on their profile pages but do not have the required permissions, they will be presented with a message explaining that they are not authorized to make the edit.
    You can optionally provide additional instructions here to help users request a username change, if there is someone specific they should contact or a particular workflow they should use.' => 'Quan els usuaris facin clic a l\'acció "Canvia el nom d\'usuari" a les seves pàgines de perfil, però no tenen els permisos necessaris, se\'ls presentarà un missatge explicant que no estan autoritzats a fer l\'edició. 
    Es pot proporcionar instruccions addicionals aquí per ajudar els usuaris a sol·licitar un canvi d\'usuari, si hi ha algú específic que haurien de contactar o un flux de treball en particular que haurien d\'utilitzar.',
      'You are trying to gain access to an account ("%s") that can not establish a web session.' => 'Estàs intentant obtenir accés a un compte (%s) que no pot establir una sessió de web.',
      'You must approve the challenge which was sent to your phone. Open the Duo application and confirm the challenge, then continue.' => 'Heu d\'aprovar el desafiament que s\'ha enviat al vostre telèfon. Obriu l\'aplicació Duo i confirmeu el repte i, després, continueu.',
      'Download Private Key (%s)' => 'Baixa la clau privada (%s)',
      'Make sure you are copy-and-pasting the entire link into your browser. Login links are only valid for 24 hours, and can only be used once.' => 'Assegureu-vos que copieu i enganxeu tot l\'enllaç al navegador. Els enllaços d\'inici de sessió només són vàlids durant 24 hores i només es poden utilitzar una vegada.',
      '%s disabled login.' => '%s ha desactivat l\'inici de sessió.',
      'Primary Number' => 'Número principal',
      'Really revoke this token? Any temporary authorization it enables will be disabled.' => 'Segur que voleu revocar aquest testimoni?  Qualsevol autorització temporal que activi estarà desactivada.',
      'The URI where JIRA is installed. For example: %s' => 'L\'URI on s\'instal·la JIRA. Per exemple: %s',
      'Raw Address' => 'Adreça en brut',
      'You have made too many account recovery requests in a short period of time.' => 'Heu fet massa intents de recuperació del compte en un curt període de temps.',
      'Download Private Key' => 'Baixa la clau privada',
      'Query public keys.' => 'Consultar claus públiques.',
      '**Step 1 of 2**: Provide the name and URI for your JIRA install.
    In the next step, you will configure JIRA.' => '**Pas 1 de 2**: proporcioneu el nom i l\'URI de la instal·lació de JIRA.
    Al següent pas, configurareu JIRA.',
      'You already have Duo authentication attached to your account for this provider.' => 'Ja teniu l\'autenticació Duo adjunta al vostre compte per a aquest proveïdor.',
      'This Duo enrollment attempt is invalid or has expired ("%s"). Cancel the workflow and try again.' => 'Aquest intent d\'inscripció a Duo no és vàlid o ha caducat ("%s"). Cancel·leu el flux de treball i torneu-ho a provar.',
      'To choose a different primary contact number, make that number primary (instead of trying to demote this one).' => 'Per triar un altre número de contacte principal, feu que el número sigui principal (en lloc de degradar-lo).',
      '**Post a comment** in the JIRA task.' => '**Envieu un comentari** a la tasca JIRA, similar als correus electrònics que envia Phabricator.',
      'This workflow will generate a new SSH keypair, add the public key, and let you download the private key.' => 'Aquest flux de treball generarà una clau asimètrica SSH, afegirà la clau pública i us permetrà descarregar la clau privada.',
      'Too many login failures recently. You must submit a CAPTCHA with your login request.' => 'Massa fallades d’inici de sessió recentment. Heu d’enviar un CAPTCHA amb la vostra sol·licitud d’inici de sessió.',
      'Specified pkcs8 keyfile "%s" does not exist!' => 'El fitxer de clau pkcs8 especificat \'%s\' no existeix!',
      'To configure Twitch.tv OAuth, create a new application here:
    http://www.twitch.tv/settings/applications
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Per configurar OAuth de Twitch.tv, creeu una nova aplicació aquí:
    http://www.twitch.tv/settings/applications
    Quan creeu l\'aplicació, utilitzeu aquests paràmetres:
    - **URI de redirecció: * Establiu-lo a: `%s`
    Després de completar la configuració, copieu el **Identificador de client** i el **Secret del client** als camps anteriors. (És possible que hàgiu de generar el secret del client fent clic primer a "Nou secret").',
      'This private key requires a passphrase, but the wrong passphrase was provided. Check that you supplied the correct key and passphrase.' => 'Aquesta clau privada requereix una contrasenya, però s\'ha proporcionat una contrasenya incorrecta. Comproveu que heu proporcionat la clau i la frase de contrasenya correctes.',
      'When users add a factor for this provider, they are given this enrollment guidance by default:' => 'Quan els usuaris afegeixen un factor per a aquest proveïdor, se\'ls proporciona aquesta guia de registre per defecte:',
      '%s
    To configure Amazon OAuth, create a new \'API Project\' here:
    http://login.amazon.com/manageApps
    Use these settings:
      - **Allowed Return URLs:** Add this: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => '%s
    Per configurar OAuth de Amazon, creeu un nou "Projecte API" aquí:
    http://login.amazon.com/manageApps
    Utilitzeu aquests paràmetres:
    - **URL de retorn permesos:** Afegiu-ho: "%s"
    Després de completar la configuració, copieu el **Identificador de client** i el **Secret del client** als camps anteriors.',
      'CAPTCHA was not entered correctly.' => 'CAPTCHA no s\'ha introduït correctament.',
      'Configure JIRA OAuth. NOTE: Only supports JIRA 6.' => 'Configura JIRA OAuth. NOTA: només admet JIRA 6.',
      'If you did not receive an email, you can click the button below to try sending another one.' => 'Si no heu rebut cap correu electrònic, podeu fer clic al botó següent per provar d\'enviar-ne un altre.',
      'Invite template does not include invite URI!' => 'La plantilla d\'invitació no inclou l\'URI d\'invitació!',
      '%s reinstated this key.' => '%s va restablir aquesta clau.',
      '**Step 2 of 2**: In this step, you will configure JIRA.
    **Create a JIRA Application**: Log into JIRA and go to **Administration**, then **Add-ons**, then **Application Links**. Click the button labeled **Add Application Link**, and use these settings to create an application:
      - **Server URL**: `%s`
      - Then, click **Next**. On the second page:
      - **Application Name**: `%s`
      - **Application Type**: `Generic Application`
      - Then, click **Create**.
    **Configure Your Application**: Find the application you just created in the table, and click the **Configure** link under **Actions**. Select **Incoming Authentication** and click the **OAuth** tab (it may be selected by default). Then, use these settings:
      - **Consumer Key**: Set this to the "Consumer Key" value in the form above.
      - **Consumer Name**: `%s`
      - **Public Key**: Set this to the "Public Key" value in the form above.
      - **Consumer Callback URL**: `%s`
    Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.' => '**Pas 2 de 2**: en aquest pas, configurareu JIRA.
    **Creeu una aplicació JIRA**: inicieu sessió a JIRA i aneu a **Administració**, després **Complements** i, a continuació, **Enllaços d\'aplicacions**. Feu clic al botó anomenat **Afegeix un enllaç d\'aplicació** i utilitzeu aquesta configuració per crear una aplicació:
    - **URL del servidor**: \'%s\'
    - A continuació, feu clic a **Següent**. A la segona pàgina:
    - **Nom de l\'aplicació**: \'Phabricator\'
    - **Tipus d\'aplicació**: \'Aplicació genèrica\'
    - A continuació, feu clic a **Crea**.
    **Configureu la vostra aplicació**: cerqueu l\'aplicació que acabeu de crear a la taula i feu clic a l\'enllaç **Configura** a **Accions**. Seleccioneu **Autenticació entrant** i feu clic a la pestanya **OAuth** (es pot seleccionar per defecte). A continuació, utilitzeu aquests paràmetres:
    - **Clau del consumidor**: configureu-lo al valor \'Clau del consumidor\' del formulari anterior.
    - **Nom del consumidor**: \'Phabricator\'
    - **Clau pública**: configureu-lo al valor \'Clau pública\' del formulari anterior.
    - **URL de devolució de trucada del consumidor**: \'%s\'
    Feu clic a **Desar** a JIRA. Ara s’hauria de configurar l’autenticació i aquest proveïdor hauria de funcionar correctament.',
      'Duo account ("%s") is fully enrolled.' => 'El compte de Duo ("%s") està completament inscrit.',
      '%s created this password.' => '%s ha creat aquesta contrasenya.',
      'Stay' => 'Romandre',
      'The account you are attempting to log in with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.' => 'El compte amb què intenteu iniciar la sessió utilitza un proveïdor d’autenticació inexistent o desactivat (amb la clau \'%s\'). És possible que un administrador hagi desactivat recentment aquest proveïdor.',
      'Two authentication providers use the same provider key (\'%s\'). Each provider must be identified by a unique key.' => 'Dos proveïdors d\'autenticació utilitzen la mateixa clau de proveïdor ("%s"). Cal identificar cada proveïdor mitjançant una clau única.',
      'Duo (%s)' => 'Duo (%s)',
      'A completed challenge was provided as an answered challenge. The underlying factor is implemented improperly, challenges may not be reused.' => 'Es va proporcionar un repte completat com a repte contestat. El factor subjacent s’implementa de manera incorrecta; és possible que els reptes no es reutilitzin.',
      'There is no account associated with that email address.' => 'No hi ha cap compte associat amb aquella adreça de correu electrònic.',
      'Revoke Token' => 'Revoca el Testimoni',
      'There are no registered session engine extensions.' => 'No hi ha extensions de motor de sessió registrades.',
      'Revokes all Conduit API tokens used to access the API.
    Users will need to use `arc install-certificate` to install new API tokens before `arc` commands will work. Bots and scripts which access the API will need to have new tokens generated and installed.' => 'Revoca tots els testimonis de l\'API Conduit utilitzats per accedir a l\'API.
    Els usuaris hauran d\'utilitzar `arc install-certificate` per instal·lar nous testimonis API abans que funcionin les ordres `arc`. Bots i scripts que accedeixin a l\'API hauran de tenir nous testimonis generats i instal·lats.',
      'JIRA' => 'JIRA',
      '%s updated the OAuth consumer secret for this provider.' => '%s ha actualitzat el secret del consumidor OAuth per a aquest proveïdor.',
      'If you want to register a new account, continue with this registration workflow and choose a new, unique email address for the new account.' => 'Si voleu registrar un compte nou, continueu amb aquest flux de treball de registre i trieu una nova adreça de correu electrònic única per al compte nou.',
      'If you log out now, you can still regain access to your account later by using the account recovery workflow. The login screen will prompt you with recovery instructions.' => 'Si tanqueu la sessió ara, podeu recuperar l\'accés al vostre compte més endavant mitjançant el flux de treball de recuperació del compte. La pantalla d\'inici de sessió us demanarà instruccions de recuperació.',
      'Your Duo account ("%s") is not permitted to access this system. Contact your Duo administrator for help. The Duo preauth API responded with status message ("%s"): %s' => 'El vostre compte Duo (\'%s\') no pot accedir a aquest sistema. Poseu-vos en contacte amb l\'administrador de Duo per obtenir ajuda. L\'API de preautor Duo ha respost amb un missatge d\'estat (\'%s\'): %s',
      'Customize Enroll Message' => 'Personalitzar el missatge d’inscripció',
      'Support for Duo push authentication.' => 'Compatibilitat amb l’autenticació push de Duo.',
      'Allow users to register new accounts using this provider. If you disable registration, users can still use this provider to log in to existing accounts, but will not be able to create new accounts.' => 'Permetre als usuaris registrar nous comptes de Phabricator mitjançant aquest proveïdor. Si desactiveu el registre, els usuaris encara poden utilitzar aquest proveïdor per iniciar la sessió als comptes existents, però no podran crear comptes nous.',
      'Password Reset Token' => 'Testimoni de restabliment de la contrasenya',
      'The selected password is too short. Passwords must be a minimum of %s characters long.' => 'La contrasenya seleccionada és massa curta. Les contrasenyes han de tenir un mínim de %s caràcters.',
      'Really terminate all sessions? (Your current login session will not be terminated.)' => 'Voleu finalitzar totes les sessions? (La sessió d’inici de sessió actual no s’acabarà.)',
      'Provide a public key, not a private key!' => 'Proporcioneu una clau pública, no una clau privada!',
      'Use "--type <type>" or "--provider <phid>" to specify which factors to strip, or "--all-types" to strip all factors. Use `bin/auth list-factors` to show the available factor types or `bin/auth list-mfa-providers` to show available providers.' => 'Utilitzeu "--type <tipus>" o "--provider <phid>" per especificar de quins factors es poden despullar o "--all-types" per a despullar-se de tots els factors. Utilitzeu `bin/auth list-factors` per mostrar els tipus de factors disponibles o `bin/auth list-mfa-providers` per mostrar els proveïdors disponibles.',
      'You are logged in as %s, but the email address you just clicked a link from is already the primary email address for another account (%s). Switch accounts, then try again.' => 'Heu iniciat la sessió com a %s, però l\'adreça de correu electrònic en què acabeu de fer clic a un enllaç ja és l\'adreça de correu electrònic principal d\'un altre compte (%s). Canvieu de compte i torneu-ho a provar.',
      'Terminate all web login sessions. If called via OAuth, also terminate the current OAuth token.
    WARNING: This method does what it claims on the label. If you call this method via the test console in the web UI, it will log you out!' => 'Finalitza totes les sessions d\'inici de sessió web. Si es trucat a través d\'OAuth, també finalitza el testimoni actual d\'OAuth.
    AVÍS: Aquest mètode fa el que diu a l\'etiqueta. Si truqueu aquest mètode a través de la consola de proves de la interfície web, us tancarà la sessió!',
      'This contact number is already your primary contact number.' => 'Aquest número de contacte ja és el vostre número de contacte principal.',
      'Authentication Tokens' => 'Testimonis d\'autenticació',
      '%s upgraded the hash algorithm for this password from "%s" to "%s".' => '%s ha actualitzat l\'algoritme hash d\'aquesta contrasenya de "%s" a "%s".',
      '%s disabled registration.' => '%s ha desactivat el registre.',
      '[SSH Key]' => '[Clau SSH]',
      'Stripping authentication factors...' => 'Despullant-se de factors d\'autenticació...',
      'To configure Twitter OAuth, create a new application here:
    https://dev.twitter.com/apps
    When creating your application, use these settings:
      - **Callback URL:** Set this to: `%s`
    After completing configuration, copy the **Consumer Key** and **Consumer Secret** to the fields above.' => 'Per configurar OAuth de Twitter, creeu una nova aplicació aquí:
    Https://dev.twitter.com/apps
    Quan creeu l\'aplicació, utilitzeu aquests paràmetres:
    - **URL de devolució de trucada:** Establiu-lo a: \'%s\'
    Després de completar la configuració, copieu la **clau del consumidor** i el **secret del consumidor** als camps anteriors.',
      '%s updated the public key material for this SSH key.' => '%s ha actualitzat el material de la clau pública d\'aquesta clau SSH.',
      '%s created this key.' => '%s ha creat aquesta clau.',
      'This private key could not be opened. This might mean that the key requires a passphrase, or might mean that the key is not formatted correctly. Check that you have supplied the complete text of a valid private key and the correct passphrase.' => 'Aquesta clau privada no s\'ha pogut obrir. Això pot significar que la clau requereix una contrasenya o pot significar que la clau no té un format correcte. Comproveu que heu proporcionat el text complet d’una clau privada vàlida i la frase de contrasenya correcta.',
      'Expected valid JSON response from Google account data request.' => 'S\'esperava una resposta JSON vàlida de la sol·licitud de dades del compte de Google.',
      'No outbound mailer which can deliver SMS messages is configured.' => 'Cap plataforma de correu de sortida està configurada per enviar SMS.',
      'If you leave high security, you will need to authenticate again the next time you try to take a high security action.' => 'Si deixeu una seguretat elevada, haureu d’autenticar-vos de nou la propera vegada que intenteu de fer una acció d’alta seguretat.',
      'Enroll in MFA' => 'Inscripció a MFA',
      'Really destroy credentials everywhere?' => 'Voleu destruir les credencials a tot arreu?',
      '%s changed the username policy for this provider from %s to %s.' => '%s ha canviat la política d\'usuari per a aquest proveïdor de %s a %s.',
      'A passphrase was provided for this private key, but it does not require a passphrase. Check that you supplied the correct key, or omit the passphrase.' => 'S\'ha proporcionat una frase de contrasenya per a aquesta clau privada, però no requereix una contrasenya. Comproveu que heu proporcionat la clau correcta o ometeu la contrasenya.',
      '%s created this provider.' => '%s ha creat aquest proveïdor.',
      'Revokes temporary authentication tokens.
    Temporary tokens are used in password reset mail, welcome mail, and by some other systems like Git LFS. Revoking temporary tokens will invalidate existing links in password reset and invite mail that was sent before the revocation occurred.' => 'Revoca els testimonis d\'autenticació temporals. <br><br>Els testimonis temporals s\'utilitzen en el correu de restabliment de contrasenya, el correu de benvinguda i altres sistemes com Git LFS.  La revocació de testimonis temporals invalidarà els enllaços existents en el restabliment de la contrasenya i convidarà el correu que s\'hagi enviat abans de la revocació.',
      'The account you are attempting to link is already linked to your account.' => 'El compte que intenteu enllaçar ja està enllaçat amb el vostre compte.',
      'Enter the code from the text message which was sent to your primary contact number.' => 'Introduïu el codi del missatge de text que s\'ha enviat al vostre número de contacte principal.',
      'JIRA Instance Name' => 'Nom de la instància JIRA',
      'Unable to load your OAuth1 token secret from storage. It may have expired. Try authenticating again.' => 'No s\'ha pogut carregar el secret de testimonis OAuth1 des de l\'emmagatzematge.  Pot haver caducat. Torna a provar l\'autenticació.',
      'This private key requires a passphrase, but no passphrase was provided. Check that you supplied the correct key, or provide the passphrase.' => 'Aquesta clau privada requereix una contrasenya, però no s\'ha proporcionat cap contrasenya. Comproveu que heu proporcionat la clau correcta o proporcioneu la contrasenya.',
      '%s set the OAuth application notes for this provider.' => '%s estableix les notes de l\'aplicació OAuth per a aquest proveïdor.',
      'Credential type "%s" is not valid. Valid credential types are: %s.' => 'El tipus de credencial \'%s\' no és vàlid. Els tipus de credencials vàlids són: %s.',
      'Generate Keypair' => 'Genera una clau asimètrica',
      'LDAP: Failed to retrieve record for user "%s" when searching. Credentialed users may not be able to search your LDAP server. Try configuring anonymous credentials or fully anonymous binds.' => 'LDAP: no s\'ha pogut rescatar el registre de l\'usuari \'%s\' en fer cerques. És possible que els usuaris acreditats no puguin cercar al vostre servidor LDAP. Proveu de configurar credencials anònimes o enllaços totalment anònims.',
      '%s changed the "%s" value from "%s" to "%s".' => '%s ha canviat el valor "%s" de "%s" a "%s".',
      'A password reset link will be sent to your primary email address. Follow the link to set an account password.' => 'S’enviarà un enllaç de restabliment de la contrasenya a la vostra adreça electrònica principal. Seguiu l\'enllaç per definir una contrasenya de compte.',
      '%s revoked this key.' => '%s va revocar aquesta clau.',
      'OAuth1 Handshake Token' => 'Testimoni d\'encaixada OAuth1',
      'This server is not configured with any enabled authentication providers which can be used to log in. If you have accidentally locked yourself out by disabling all providers, you can use `%s` to recover access to an account.' => 'Aquesta instal·lació de Phabricator no està configurada amb cap proveïdor d\'autenticació habilitat que es pugui utilitzar per iniciar la sessió. Si us heu bloquejat accidentalment desactivant tots els proveïdors, podeu utilitzar "%s" per recuperar l\'accés a un compte.',
      'The email address ("%s") associated with the external account is already in use by an existing %s account. Multiple %s accounts may not have the same email address, so you can not use this email address to register a new account.' => 'L\'adreça de correu electrònic ("%s") associada amb el compte extern ja està en ús per un compte Phabricator existent. És possible que diversos comptes Phabricator no tinguin la mateixa adreça de correu electrònic, de manera que no es pot utilitzar aquesta adreça de correu per registrar un nou compte Phabricator.',
      'Captcha response is incorrect, try again.' => 'La resposta del Captcha és incorrecta. Torneu-ho a provar.',
      'Authentication provider (of class "%s") is attempting to load or create an external account, but provided a list of account identifiers which map to more than one account: %s.' => 'El proveïdor d’autenticació (de la classe \'%s\') intenta carregar o crear un compte extern, però ha proporcionat una llista d\'identificadors de comptes que corresponen a diversos comptes: %s.',
      'Duo API credential ("%s") has no secret key.' => 'La credencial de l\'API Duo (\'%s\') no té cap clau secreta.',
      'LDAP: Failed to retrieve record for user "%s" when searching with both user and anonymous credentials.' => 'LDAP: no s\'ha pogut rescatar el registre de l\'usuari \'%s\' en cercar amb credencials d\'usuari i anònimes.',
      'Authentication Config Locked' => 'S\'ha bloquejat la configuració de l\'autenticació',
      'You can try again, or request a new link via email.' => 'Es pot tornar a provar o sol·licitar un enllaç nou per correu electrònic.',
      'Your account has too many outstanding, incomplete MFA synchronization attempts. Wait an hour and try again.' => 'El vostre compte té massa intents de sincronització MFA pendents i incomplets. Espereu una hora i torneu-ho a provar.',
      'Temporary Token Types' => 'Tipus de testimoni temporals',
      'Guidance shown after a user logs in with an email link and is prompted to link an external account.' => 'Orientació mostrada després que un usuari iniciï sessió amb un enllaç de correu electrònic i se li demana que enllaci un compte extern.',
      '%s disabled auto login.' => '%s ha desactivat l\'inici de sessió automàtic.',
      'You can not "--list" and revoke credentials (with "--from" or "--everywhere") in the same operation.' => 'No es pot "--list" ni revocar credencials (amb "--from" o "--everywhere") en la mateixa operació.',
      'The account you are attempting to register with uses an authentication provider ("%s") which does not allow registration. An administrator may have recently disabled registration with this provider.' => 'El compte amb el què intenteu registrar-vos utilitza un proveïdor d’autenticació ("%s") que no permet el registre. És possible que un administrador hagi desactivat recentment els registres amb aquest proveïdor.',
      'Set Primary Contact Number' => 'Establir el número de contacte principal',
      'You are logged in as %s, but the email address you just clicked a link from is already verified and associated with another account (%s). Switch accounts, then try again.' => 'Heu iniciat la sessió com a %s, però l\'adreça electrònica de la qual heu fet clic en un enllaç ja està verificada i està associada a un altre compte (%s). Canvieu de compte i torneu-ho a provar.',
      'The external service ("%s") you just authenticated with is not configured to allow logins on this server. An administrator may have recently disabled it.' => 'El compte extern (\'%s\') amb el qual acabeu d\'autenticar-vos no està configurat per permetre l\'enllaç del compte en aquesta instal·lació de Phabricator. És possible que un administrador l’hagi desactivat recentment.',
      'Stronger algorithms are listed first. The highlighted algorithm will be used when storing new hashes. Older hashes will be upgraded to the best algorithm over time.' => 'Primer s’enumeren algoritmes més forts. L’algorisme ressaltat s’utilitzarà quan s’emmagatzemin nous hash. Els hash anteriors s’actualitzaran al millor algorisme amb el pas del temps.',
      'These auth factors will be stripped:' => 'Aquests factors auth seran despullats:',
      'Engine: Session' => 'Motor: Sessió',
      '**Step 2 of 2 - Configure OAuth Server**
    To configure OAuth, create a new application here:
    %s/oauthserver/client/create/
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => '**Pas 2 de 2 - Configurar la instància OAuth de Phabricator** 
    Per configurar OAuth Phabricator, creeu una aplicació nova aquí: 
    %s/oauthserver/client/crear/ 
    En crear l\'aplicació, utilitzeu aquests paràmetres: 
      - **URI de redirecció:** Establiu-ho a: `%s` 
    Després de completar la configuració, copieu l\'ID **Client** i **secret del client** als camps anteriors.  (Podeu haver de generar el secret del client fent clic a \'secret nou\' primer.)',
      'Require Existing Duo Account' => 'Requereix un compte de Duo existent',
      'Upload SSH Public Key' => 'Pengeu la clau pública SSH',
      '%s changed the hostname for this provider from %s to %s.' => '%s ha reanomenat el host d\'aquest proveïdor de %s a %s.',
      'SSH key material is required.' => 'Cal informació sobre la clau SSH.',
      'Guidance in the "Change Username" dialog for requesting a username change.' => 'Guia en el diàleg \'Canviar el nom d\'usuari\' per sol·licitar un canvi de nom d\'usuari.',
      'Once you have completed setup on your phone, click continue.' => 'Un cop hàgiu completat la configuració al telèfon, feu clic a continua.',
      'Application secret is required.' => 'Cal un secret de l’aplicació.',
      'Parsed Address' => 'Adreça analitzada sintàcticament',
      'Duo Security' => 'Seguretat de Duo',
      'You already have SMS authentication attached to your account.' => 'Ja teniu autenticació per SMS associada al vostre compte.',
      'Attach a mobile authenticator application (like Authy or Google Authenticator) to your account. When you need to authenticate, you will enter a code shown on your phone.' => 'Adjunteu una aplicació d’autenticació mòbil (com Authy o Google Authenticator) al vostre compte. Quan hàgiu d’autenticar-vos, introduïu el codi que es mostra al telèfon.',
      'Revoke all credentials types.' => 'Revoqueu tots els tipus de credencials.',
      'This private key could not be opened with the provided passphrase. This might mean that the passphrase is wrong or that the key is not formatted correctly. Check that you have supplied the complete text of a valid private key and the correct passphrase.' => 'Aquesta clau privada no s\'ha pogut obrir amb la contrasenya proporcionada. Això pot significar que la contrasenya és incorrecta o que la clau no té el format correcte. Comproveu que heu proporcionat el text complet d’una clau privada vàlida i la frase de contrasenya correcta.',
      'Note: Unlinking an authentication provider will terminate any other active login sessions.' => 'Nota: si desenllaceu un proveïdor d’autenticació, finalitzareu qualsevol altra sessió d’inici de sessió activa.',
      '%s renamed this key from "%s" to "%s".' => '%s ha reanomenat aquesta clau de "%s" a "%s".',
      '%s created this MFA provider.' => '%s ha creat aquest proveïdor MFA.',
      'To enable the login flow, follow setup guidance and configure at least one authentication provider, then associate credentials with your account. After completing these steps, you will be able to log out and log back in normally.' => 'Per habilitar el flux d’inici de sessió, seguiu les instruccions de configuració i configureu almenys un proveïdor d’autenticació i, a continuació, associeu les credencials al vostre compte. Després de completar aquests passos, podreu tancar la sessió i tornar a iniciar la sessió amb normalitat.',
      'You have not completed Duo enrollment yet. Complete enrollment, then click continue.' => 'Encara no has completat la inscripció de Duo. Completa la inscripció i, després, feu clic per continuar.',
      'Use this link to recover access to the "%s" account from the web interface:' => 'Utilitzeu aquest enllaç per recuperar l\'accés al compte "%s" des de la interfície web:',
      'Change Enroll Message' => 'Canviar el missatge d’inscripció',
      'You can safely ignore these warnings if the install itself has access controls (for example, it is deployed on a VPN) or if all of the configured providers have access controls (for example, they are all private LDAP or OAuth servers).' => 'Es pot ignorar aquests advertiments de manera segura si la instal·lació té controls d\'accés (per exemple, es desplega en una VPN) o si tots els proveïdors configurats tenen controls d\'accés (per exemple, tots són servidors privats LDAP o OAuth).',
      'The external service ("%s") you just authenticated with is not configured to allow registration on this server. An administrator may have recently disabled it.' => 'El compte extern (\'%s\') amb el qual acabeu d\'autenticar-vos no està configurat per permetre el registre en aquesta instal·lació de Phabricator. És possible que un administrador l’hagi desactivat recentment.',
      'SSH keys inherit the policies of the user or object they authenticate.' => 'Les claus SSH hereten les polítiques de l\'usuari o objecte que autenticen.',
      'Duo Username: %s' => 'Nom d\'usuari de Duo: %s',
      'Captcha' => 'Captcha',
      'Email record has invalid user PHID!' => 'El registre de correu té un PHID d\'usuari no vàlid!',
      'No Matching Tokens' => 'No hi ha testimonis coincidents',
      'NOTE: **To complete setup**, copy and paste these keys into JIRA according to the instructions below.' => 'NOTA: **Per completar la configuració**, copieu i enganxeu aquestes claus a JIRA segons les instruccions següents.',
      'JIRA Base URI' => 'URI base JIRA',
      'A session is visible only to its owner.' => 'Una sessió només és visible per al seu propietari.',
      '%s created this message.' => '%s ha creat aquest missatge.',
      'The email address you just clicked a link from is already verified and associated with a registered account (%s). Log in to continue.' => 'L\'adreça electrònica on heu fet clic a un enllaç ja està verificada i està associada a un compte registrat (%s). Inicieu la sessió per continuar.',
      'After entering the key, the application should display a numeric code. Enter that code below to confirm that you have configured the authenticator correctly:' => 'Després d’introduir la clau, l’aplicació hauria de mostrar un codi numèric. Introduïu aquest codi a continuació per confirmar que heu configurat correctament l\'autenticador:',
      'If you are currently using your phone to view this page, click this button to open the Duo application:' => 'Si esteu utilitzant el telèfon per veure aquesta pàgina, feu clic en aquest botó per obrir l\'aplicació Duo:',
      'Unable to refresh token!' => 'No s\'ha pogut actualitzar el testimoni!',
      '%s changed the status of this provider from %s to %s.' => '%s ha canviat l\'estat d\'aquest proveïdor de %s a %s.',
      'Consumer Key' => 'Clau del consumidor',
      'The email address associated with this account ("%s") is already in use by an application and can not be used to register a new account. Choose a different, valid address.' => 'L\'adreça electrònica associada a aquest compte ("%s") ja està en ús per una aplicació i no es pot utilitzar per registrar un compte nou de Phabricator. Trieu una adreça diferent i vàlida.',
      'SSH Keys' => 'Claus SSH',
      'Active OAuth Token (Expires: %s)' => 'Testimoni OAuth actiu (Expira: %s)',
      'Specify the credential type to revoke with "--type" or "--everything", but not both.' => 'Especifiqueu el tipus de credencial per revocar amb "--type" o "--everything", però no amb tots dos.',
      '(If given an option, select that this key is "Time Based", not "Counter Based".)' => '(Si se us dóna una opció, seleccioneu que aquesta clau sigui \'Basada en el temps\' i no \'Basada en el comptador\'.)',
      'Multiple password hashers of different strengths are not available, so hash upgrading can not be tested.' => 'No hi ha diversos hashers de contrasenya de diferents punts forts, de manera que no es pot provar l\'actualització de hash.',
      '{icon check, color="green"} **Setup Complete!**
    You have successfully configured multi-factor authentication for your account.
    You can make adjustments from the [[ /settings/ | Settings ]] panel later.' => '{icona verificada, color ="green"} **S\'ha completat la configuració!** 
    Heu configurat correctament l\'autenticació multifactor per al vostre compte. 
    Podeu fer ajustos des del tauler [[/ settings/| Configuració ]] més endavant.',
      'Your remote address has made too many login attempts in a short period of time.' => 'La vostra adreça remota ha fet massa intents d\'inici de sessió en un curt període de temps.',
      'Guidance in the message body when users request an email link to access their account.' => 'Orientació al cos del missatge quan els usuaris sol·licitin un enllaç de correu electrònic per accedir al seu compte.',
      'Login cookie was set correctly, but your login session is not valid. Try clearing cookies and logging in again.' => 'La galeta d’inici de sessió s’ha configurat correctament, però la sessió d’inici de sessió no és vàlida. Proveu d\'esborrar les galetes i torneu a iniciar la sessió.',
      'Allow users to attach a mobile authenticator application (like Google Authenticator) to their account.' => 'Permet als usuaris adjuntar una aplicació d’autenticació mòbil (com Google Authenticator) al seu compte.',
      'Password Hash Algorithms' => 'Algorismes de hash de contrasenya',
      'OAuth1 Handshake Secret' => 'OAuth1 secret d\'encaixada',
      'You have failed to verify multi-factor authentication too often in a short period of time.' => 'No heu pogut verificar l\'autenticació multifactor massa sovint en un curt període de temps.',
      'You can not make a disabled number a primary contact number.' => 'No es pot convertir un número desactivat en un número de contacte principal.',
      'This install has the configuration option "%s" enabled, but does not have any active multifactor providers configured. This means you are required to add MFA, but are also prevented from doing so. An administrator must disable "%s" or enable an MFA provider to allow you to continue.' => 'Aquesta instal·lació té l\'opció de configuració «%s» activada, però no té cap proveïdor multifactor actiu configurat. Això vol dir que se li demana que afegeixi l\'MF, però també se li impedeix fer-ho. Un administrador ha de desactivar «%s» o habilitar un proveïdor d\'MFA per permetre-us continuar.',
      'Instructions on the "Wait For Approval" screen, shown to users who have registered an account that has not yet been approved by an administrator.' => 'Les instruccions de la pantalla \'Espereu l\'aprovació\' es mostren als usuaris que han registrat un compte que encara no ha aprovat cap administrador.',
      'No provider with PHID "%s" exists. Use `bin/auth list-mfa-providers` to list providers.' => 'No existeix cap proveïdor amb el PHID \'%s\'. Utilitzeu `bin/auth list-mfa-providers` per llistar els proveïdors.',
      'CHANGES TO ENROLL MESSAGE' => 'CANVIS AL MISSATGE D\'INSCRIPCIÓ',
      'Duo enrollment mode ("%s") is not supported.' => 'No s\'admet el mode d\'inscripció a Duo (\'%s\').',
      'Already Associated' => 'Ja associat',
      '= Integration Options = 
    Configure how to record Revisions on JIRA tasks.
    Note you\'ll have to restart the daemons for this to take effect.' => '= Opcions d\'integració = 
    Configureu com enregistrar les revisions de les tasques JIRA.
    Tingueu en compte que haureu de reiniciar els dimonis perquè això tingui efecte.',
      'Credential ("%s") is not valid.' => 'La credencial (\'%s\') no és vàlida.',
      'Base URI is required.' => 'Cal l\'URI base de Phabricator',
      'SSH keys can not be reactivated.' => 'Les claus SSH no es poden reactivar.',
      'You can not deprecate or disable the last active MFA provider while "%s" is enabled, because new users would be unable to enroll in MFA. Disable the MFA requirement in Config, or create or enable another MFA provider first.' => 'No es pot desaprovar o desactivar l\'últim proveïdor d\'MFA actiu mentre «%s» estigui activat, perquè els nous usuaris no podrien inscriure\'s a l\'MFA.  Desactiva el requisit d\'MFA a Config, o crea o habilita primer un altre proveïdor d\'MFA.',
      'Expected valid JSON response from GitHub account data request.' => 'S\'esperava una resposta JSON vàlida de la sol·licitud de dades del compte GitHub.',
      '%s disabled account unlinking.' => '%s ha desactivat la desvinculació del compte.',
      'Revoke Tokens?' => 'Revocar els Testimonis?',
      'You have not configured an outbound SMS mailer. You must configure one before you can set up SMS. See: %s' => 'No s\'ha configurat cap plataforma de correu de sortida SMS. Cal configurar-ne una abans de poder configurar l\'SMS. Veure: %s',
      'Enroll Duo Account: %s' => 'Inscripció al compte de Duo: %s',
      'Your login session is invalid, and clearing the session cookie was unsuccessful. Try clearing your browser cookies.' => 'La sessió d\'inici de sessió no és vàlida i no s\'ha pogut esborrar la galeta de sessió. Proveu d\'esborrar les galetes del navegador.',
      'OAuth Consumer Secret' => 'OAuth Secret del consumidor',
      'The password you entered has been revoked. You can not reuse a password which has been revoked. Choose a new password.' => 'La contrasenya que heu introduït s\'ha revocat. No podeu tornar a utilitzar una contrasenya revocada. Trieu una contrasenya nova.',
    );
  }

}
