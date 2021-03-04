<?php

final class PhabricatorAuthCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'This key has been revoked. Choose or generate a new, unique key.' => 'Aquesta clau s\'ha revocat. Trieu o genereu una nova clau única.',
      'SSH Key Actions' => 'Accions clau SSH',
      'Adding a PKCS8 keyfile to the cache can be very dangerous. If the PKCS8 file really encodes a different public key than the one specified, an attacker could use it to gain unauthorized access.
    Generally, you should use this option only in a development environment where ssh-keygen is broken and it is inconvenient to fix it, and only if you are certain you understand the risks. You should never cache a PKCS8 file you did not generate yourself.' => 'Afegir un fitxer de clau PKCS8 a la caché pot ser molt perillós. Si el fitxer PKCS8 encara té una clau pública diferent de l’especificada, un atacant podria utilitzar-lo per obtenir accés no autoritzat.
    En general, només heu d’utilitzar aquesta opció en un entorn de desenvolupament on ssh-keygen no funcioni i sigui difícil de reparar, i només si esteu segur d’entendre els riscos. No hauríeu de guardar mai un fitxer PKCS8 que no hàgiu creat.',
      'To add a Duo factor, first download and install the Duo application on your phone. Once you have launched the application and are ready to perform setup, click continue.' => 'Per afegir un factor Duo, primer descarregueu i instal·leu l\'aplicació Duo al telèfon. Un cop hàgiu iniciat l\'aplicació i estigueu preparat per realitzar la configuració, feu clic a continua.',
      'Algorithm' => 'Algorisme',
      'Authentication provider configuration is locked, and can not be changed without being unlocked. See the configuration setting %s for details.' => 'La configuració del proveïdor d\'autenticació està bloquejada i no es pot canviar sense estar desbloquejada. Vegeu la configuració %s per als detalls.',
      'Revoke Tokens' => 'Revoca Testimonis',
      'To add a TOTP factor to your account, you will first need to install a mobile authenticator application on your phone. Two applications which work well are **Google Authenticator** and **Authy**, but any other TOTP application should also work.
    If you haven\'t already, download and install a TOTP application on your phone now. Once you\'ve launched the application and are ready to add a new TOTP code, continue to the next step.' => 'Per afegir un factor TOTP al vostre compte, primer haureu d’instal·lar una aplicació d’autenticació mòbil al telèfon. Dues aplicacions que funcionen bé són **Google Authenticator** i **Authy**, però qualsevol altra aplicació TOTP també hauria de funcionar.
    Si encara no ho heu fet, descarregueu i instal·leu ara una aplicació TOTP al telèfon. Un cop hàgiu llançat l\'aplicació i estigueu llest per afegir un codi TOTP nou, continueu amb el pas següent.',
      'To configure Bitbucket OAuth, log in to Bitbucket and go to **Manage Account** > **Access Management** > **OAuth**.
    Click **Add Consumer** and create a new application.
    After completing configuration, copy the **Key** and **Secret** to the fields above.' => 'Per configurar l\'OAuth de Bitbucket, inicieu la sessió a Bitbucket i aneu a **Gestió de Compte** > **Gestió d\'accés** > **Autenticació**. 
    Feu clic a **Afegeix un consumidor** i creeu una aplicació nova. 
    Després de completar la configuració, copieu la **clau** i el **Secret** als camps anteriors.',
      'Verify an unverified email address which is already attached to an account. This will also re-execute event hooks for addresses which are already verified.' => 'Verifiqueu una adreça de correu electrònic no verificada que ja estigui connectada a un compte. Això també tornarà a executar hooks d\'esdeveniments per a adreces que ja estiguin verificades.',
      'SSH Key Type' => 'Tipus de clau SSH',
      'Invalid OAuth Access Token' => 'Testimoni d\'Accés OAuth no vàlid',
      'Revoke credentials for the specified object. To revoke credentials for a user, use "@username".' => 'Revoqueu les credencials de l\'objecte especificat. Per revocar les credencials d\'un usuari, utilitzeu "@username".',
      'Use "--user <username>" to specify which user to strip factors from, or "--all-users" to strip factors from all users.' => 'Utilitzeu "--user <nom d\'usuari>" per especificar de quin usuari voleu eliminar els factors o "--all-users" per eliminar els factors de tots els usuaris.',
      'This factor recently issued a challenge which has expired. A new challenge can not be issued yet. Wait %s second(s) for the code to cycle, then try again.' => 'Aquest factor ha llançat recentment un desafiament que ha caducat. Encara no es pot presentar un nou repte. Espereu %s segons fins que el codi es repeteixi i torneu-ho a provar.',
      'Path to public keyfile.' => 'Camí cap al fitxer de claus públic.',
      '(Some types of token can not be revoked, and you can not revoke tokens which have already expired.)' => '(No es poden revocar alguns tipus de testimonis, i no es poden revocar testimonis que ja han caducat).',
      'The external account ("%s") you just authenticated with is not configured to allow account linking on this Phabricator install. An administrator may have recently disabled it.' => 'El compte extern (\'%s\') amb el qual acabeu d\'autenticar-vos no està configurat per permetre l\'enllaç del compte en aquesta instal·lació de Phabricator. És possible que un administrador l’hagi desactivat recentment.',
      'If you want to link an existing Phabricator account to this external account, do not continue. Instead: log in to your existing account, then go to "Settings" and link the account in the "External Accounts" panel.' => 'Si voleu enllaçar un compte de Phabricator existent amb aquest compte extern, no continueu. En lloc d’això, inicieu sessió al vostre compte existent i aneu a “Configuració” i enllaceu el compte al tauler “Comptes externs”.',
      'Revoke credentials of the given type.' => 'Revoqueu les credencials del tipus indicat.',
      'This private key is not formatted correctly. Check that you have provided the complete text of a valid private key.' => 'Aquesta clau privada no té el format correcte. Comproveu que heu proporcionat el text complet d’una clau privada vàlida.',
      'Expected valid JSON response from Disqus account data request.' => 'S\'esperava una resposta JSON vàlida de la sol·licitud de dades del compte de Disqus.',
      'Really trust this PKCS8 keyfile?' => 'Confieu realment en aquest fitxer de clau PKCS8?',
      '%s updated the OAuth consumer key for this provider from "%s" to "%s".' => '%s ha actualitzat la clau de consumidor OAuth per a aquest proveïdor de \'%s\' a \'%s\'.',
      'No public key was provided.' => 'No s\'ha proporcionat cap clau pública.',
      'Specify the credential type to revoke with "--type" or specify "--everything". Use "--list" to list available credential types.' => 'Especifiqueu el tipus de credencial per revocar amb \'--type\' o especifiqueu \'--everything\'. Utilitzeu \'--list\' per llistar els tipus de credencials disponibles.',
      'Start TLS after binding to the LDAP server.' => 'Inicieu TLS després de vincular-lo al servidor LDAP.',
      'Invalid response token for this challenge: token digest does not match stored digest.' => 'Testimoni de resposta no vàlid per a aquest repte: el resum de testimonis no coincideix amb el resum emmagatzemat.',
      'OAuth Consumer Key' => 'Clau de consumidor OAuth',
      'There are no matching tokens to revoke.' => 'No hi ha cap testimoni coincident per revocar.',
      '%s disabled email trust.' => '%s ha desactivat la confiança en el correu electrònic.',
      'Too Short' => 'Massa curt',
      'Guidance included in the mail message body when users request an email link to access their account.
    For installs with password authentication enabled, users access this workflow by using the "Forgot your password?" link on the login screen.
    For installs without password authentication enabled, users access this workflow by using the "Send a login link to your email address." link on the login screen. This workflow allows users to recover access to their account if there is an issue with an external login service.' => 'Guía inclosa en el cos del missatge de correu quan els usuaris sol·liciten un enllaç de correu electrònic per accedir al seu compte. 
    Per a instal·lacions amb autenticació de contrasenya activada, els usuaris accedeixen a aquest flux de treball utilitzant l\'enllaç "Has oblidat la contrasenya?" a la pantalla d\'inici de sessió. 
    Per a instal·lacions sense autenticació de contrasenya habilitada, els usuaris accedeixen a aquest flux de treball utilitzant l\'enllaç "Enviar un enllaç d\'inici de sessió a la meva adreça de correu electrònic." enllaçat a la pantalla d\'inici de sessió. Aquest flux de treball permet als usuaris recuperar l\'accés al seu compte si hi ha un problema amb un servei d\'inici de sessió extern.',
      'Allow users to log in using this provider. If you disable login, users can still use account integrations for this provider.' => 'Permetre als usuaris iniciar sessió mitjançant aquest proveïdor. Si desactiveu l\'inici de sessió, els usuaris encara poden utilitzar integracions de comptes per a aquest proveïdor.',
      'Refresh tokens for a given user.' => 'Actualitza els testimonis per a un usuari donat.',
      'This public key is already associated with another user or device. Each key must unambiguously identify a single unique owner.' => 'Aquesta clau pública ja està associada a un altre usuari o dispositiu. Cada clau ha d’identificar sense ambigüitats un únic propietari únic.',
      'When you need to authenticate, a request will be pushed to the Duo application on your phone.' => 'Quan hàgiu d’autenticar-vos, s’enviarà una sol·licitud a l’aplicació Duo del vostre telèfon.',
      'Revoke credentials without prompting.' => 'Revoca les credencials sense preguntar.',
      'Your account has no primary contact number.' => 'El vostre compte no té cap número de contacte principal.',
      'Config Locked' => 'Configuració bloquejada',
      'Recover directly into a full session without requiring MFA or other login checks.' => 'Recuperar directament en una sessió completa sense necessitat de verificació d\'entrada d\'MF o d\'altres.',
      'Allow users to link account credentials for this provider to existing Phabricator accounts. There is normally no reason to disable this unless you are trying to move away from a provider and want to stop users from creating new account links.' => 'Permetre als usuaris enllaçar les credencials del compte d’aquest proveïdor amb els comptes de Phabricator existents. Normalment no hi ha cap raó per desactivar-ho tret que intenteu allunyar-vos d’un proveïdor i que vulgueu impedir que els usuaris creïn enllaços de compte nous.',
      '/settings/panel/contact/' => '/settings/panel/contact/',
      'Path to corresponding PKCS8 key.' => 'Camí a la clau PKCS8 corresponent.',
      'Enter LDAP Credentials' => 'Introduïu les credencials LDAP',
      'The email address you just clicked a link from is already the primary email address for a registered account (%s). Log in to continue.' => 'L\'adreça electrònica a la qual acabeu de fer clic a un enllaç ja és l\'adreça electrònica principal d\'un compte registrat (%s). Inicieu sessió per continuar.',
      'Guidance shown on the main login screen before users log in or register.' => 'Es mostra una guia a la pantalla d\'inici de sessió principal abans que els usuaris iniciïn la sessió o es registrin.',
      'Cache the PKCS8 format of a public key. When developing on OSX, this can be used to work around issues with ssh-keygen. Use `%s` to generate a PKCS8 key to feed to this command.' => 'Emmagatzema en caché el format PKCS8 d\'una clau pública. Quan es desenvolupa en OSX, es pot utilitzar per treballar al voltant de problemes amb ssh-keygen. Utilitzeu `%s` per generar una clau PKCS8 per alimentar aquesta ordre.',
      'Revoke from all credential owners.' => 'Revoca de tots els propietaris de credencials.',
      'Unable to Make Primary' => 'No es pot fer principal',
      'The response token for this challenge is invalid: response tokens may not include spaces.' => 'El testimoni de resposta per a aquest desafiament no és vàlid: els testimonis de resposta poden no incloure espais.',
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
    Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.' => '**Pas 2 de 2**: en aquest pas, configurareu JIRA.
    **Creeu una aplicació JIRA**: inicieu sessió a JIRA i aneu a **Administració**, després **Complements** i, a continuació, ** Enllaços d\'aplicacions**. Feu clic al botó anomenat **Afegeix un enllaç d\'aplicació** i utilitzeu aquesta configuració per crear una aplicació:
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
    Feu clic a **Des ** a JIRA. Ara s’hauria de configurar l’autenticació i aquest proveïdor hauria de funcionar correctament.',
      'Active OAuth Token' => 'Testimoni OAuth actiu',
      'An authorization request will be pushed to the Duo application on your phone.' => 'S\'enviarà una sol·licitud d\'autorització a l\'aplicació Duo del seu telèfon.',
      'Google' => 'Google',
      'You currently have multi-factor authentication ("%s") which depends on your primary contact number. You must remove this authentication factor before you can designate a new primary contact number.' => 'Actualment teniu autenticació multifactor (\'%s\') que depèn del vostre número de contacte principal. Heu d’eliminar aquest factor d’autenticació abans de poder designar un nou número de contacte principal.',
      'Failed to decode OAuth access token response: %s' => 'No s\'ha pogut descodificar la resposta del testimoni d\'accés OAuth: %s',
      'Generate New Keypair' => 'Genera una clau asimètrica',
      'This challenge already has a response token; you can not set a new response token.' => 'Aquest desafiament ja té un testimoni de resposta; no podeu establir un nou testimoni de resposta.',
      'This key is trusted. Trusted keys can not be edited. Use %s to revoke trust before editing the key.' => 'Aquesta clau és fiable. Les claus fiables no es poden editar. Utilitzeu %s per revocar la confiança abans d\'editar la clau.',
      'user=%s, verified=%s, primary=%s, should_verify=%s' => 'usuari=%s, verificat=%s, principal=%s, cal_verificar=%s',
      'Expected valid JSON response from Facebook account data request.' => 'S\'esperava una resposta JSON vàlida de la sol·licitud de dades del compte de Facebook.',
      '%s disabled this contact number.' => '%s ha desactivat aquest número de contacte.',
      'A text message with an authorization code will be sent to your primary contact number.' => 'S’enviarà un missatge de text amb un codi d’autorització al número de contacte principal.',
      'Revokes all stored passwords.
    Account passwords and VCS passwords (used to access repositories over HTTP) will both be revoked. Passwords for any third party applications which use shared password infrastructure will also be revoked.
    Users will need to reset account passwords, possibly by using the "Forgot Password?" link on the login page. They will also need to reset VCS passwords.
    Passwords are revoked, not just removed. Users will be unable to select the passwords they used previously and must choose new, unique passwords.
    Revoking passwords will not terminate outstanding login sessions. Use the "session" revoker in conjunction with this revoker to force users to login again.' => 'Revoca totes les contrasenyes emmagatzemades. <br><br>Les contrasenyes de compte i les contrasenyes VCS (utilitzades per accedir als repositoris a través d\'HTTP) es revocaran.  També es revocaran contrasenyes per a qualsevol aplicació de tercers que utilitzi la infraestructura de contrasenyes compartides. <br><br>Els usuaris hauran de restablir les contrasenyes del compte, possiblement mitjançant l\'enllaç "Transsenya perduda?" a la pàgina d\'inici de sessió.  També hauran de restablir les contrasenyes VCS. <br><br>Les contrasenyes estan revocades, no simplement eliminades.  Els usuaris no podran seleccionar les contrasenyes que han utilitzat anteriorment i han de triar contrasenyes noves i úniques. <br><br>La revocació de contrasenyes no finalitzarà les sessions d\'inici de sessió pendents.  Utilitzeu el revocador «session» en conjunció amb aquest revocador per obligar els usuaris a tornar a iniciar sessió.',
      '%s set the OAuth consumer key for this provider to "%s".' => '%s estableix la clau de consumidor OAuth per a aquest proveïdor en \'%s\'.',
      'Guidance in the message body when users set a password on an account which did not previously have a password.' => 'Orientació al cos del missatge quan els usuaris estableixen una contrasenya en un compte que anteriorment no en tenia.',
      'No matching SSH keys.' => 'No hi ha cap clau SSH coincident.',
      'A keypair has been generated, and the public key has been added as a recognized key.' => 'S\'ha generat una clau asimètrica i s\'ha afegit la clau pública com a clau reconeguda.',
      '%s removed the name (%s) of this provider.' => '%s ha suprimit el nom (%s) d\'aquest proveïdor.',
      'Provided public key is not properly formatted.' => 'La clau pública proporcionada no té el format adequat.',
      'Newly issued MFA challenges must have a future TTL. This factor issued a bad TTL ("%s"). (Did you use a relative time instead of an epoch?)' => 'Els nous reptes de l\'MF han de tenir un futur TTL.  Aquest factor va emetre un TTL dolent ("%s"). (Has utilitzat un temps relatiu en lloc d\'una època?)',
      'Access token error: %s' => 'Error de testimoni d\'accés: %s',
      'Cached PKCS8 key for public key.' => 'Clau PKCS8 emmagatzemada a la caché per a la clau pública.',
      'Refreshing token, current token expires in %s seconds.' => 'Actualitzant el testimoni, el testimoni actual caduca d\'aquí %s segons.',
      'You do not have a linked account on this provider, and thus can not refresh it.' => 'No teniu cap compte enllaçat en aquest proveïdor i, per tant, no el podeu actualitzar.',
      'To configure Facebook OAuth, create a new Facebook Application here:
    https://developers.facebook.com/apps
    You should use these settings in your application:
      - **Site URL**: Set this to `%s`
      - **Valid OAuth redirect URIs**: You should also set this to `%s`
      - **Client OAuth Login**: Set this to **OFF**.
      - **Embedded browser OAuth Login**: Set this to **OFF**.
    Some of these settings may be in the **Advanced** tab.
    After creating your new application, copy the **App ID** and **App Secret** to the fields above.' => 'Per configurar Facebook OAuth, creeu una nova aplicació de Facebook aquí: 
    https://developers.facebook.com/apps 
    Hauríeu d\'utilitzar aquests paràmetres a l\'aplicació: 
      - **URL del lloc**: Establiu-ho a `%s` 
      - **URIs de redirecció OAuth vàlids**: També hauríeu d\'establir això a `%s` 
      - **Client Inici de sessió OAuth**: Establiu-ho a **DESACTIVA**. 
      - **Navegador incrustat d\'inici de sessió OAuth**: Establiu-ho a **DESACTIVA**. 
    Alguns d\'aquests paràmetres poden estar a la pestanya **Avançat**. 
    Després de crear la vostra nova aplicació, copieu l\'**ID d\'Aplicació** i **Consell d\'App** als camps anteriors.',
      'Use the **OAuth App Notes** field to record details about which account the external application is registered under.' => 'Utilitzeu el camp **Notes de l\'aplicació OAuth** per registrar detalls sobre el compte al qual està registrada l\'aplicació externa.',
      'One-Time Login Token' => 'Testimoni d\'Inici de Sessió d\'Un Sol Ús',
      'Target "%s" is not a valid target to revoke credentials from. Usually, revoke from "@username".' => 'L\'objectiu «%s» no és un objectiu vàlid per revocar credencials. Normalment, es revoca per "@username".',
      'Set Phabricator to trust an OAuth client. Phabricator redirects to trusted OAuth clients that users have authorized without user intervention.' => 'Configureu Phabricator per confiar en un client OAuth. Phabricator redirigeix ​​a clients OAuth de confiança que els usuaris han autoritzat sense la intervenció de l\'usuari.',
      'Duo is not requiring a challenge, which defeats the purpose of MFA. Duo must be configured to challenge you.' => 'Duo no està requerint un desafiament, el que anul·la el propòsit de MFA. Duo ha d\'estar configurat per desafiar-lo.',
      'You are destroying an entire class of credentials. This may be very disruptive to users. You should normally do this only if you suspect there has been a widespread compromise which may have impacted everyone.' => 'Esteu destruint tota una classe de credencials. Això pot ser molt perjudicial per als usuaris. Normalment, hauríeu de fer-ho només si sospiteu que hi ha hagut un compromís generalitzat que pot haver afectat tothom.',
      'To configure Disqus OAuth, create a new application here:
    http://disqus.com/api/applications/
    Create an application, then adjust these settings:
      - **Callback URL:** Set this to `%s`
    After creating an application, copy the **Public Key** and **Secret Key** to the fields above (the **Public Key** goes in **OAuth App ID**).' => 'Per configurar OAuth de Disqus, creeu una nova aplicació aquí:
    http://disqus.com/api/applications/
    Creeu una aplicació i, a continuació, ajusteu aquests paràmetres:
    - **URL de devolució de trucada: ** Establiu-lo a "%s"
    Després de crear una aplicació, copieu la **clau pública** i la **clau secreta** als camps anteriors (la **clau pública** apareix a **identificador d\'aplicació OAuth**).',
      'Revoke Token?' => 'Revocar el Testimoni?',
      'To configure WordPress.com OAuth, create a new WordPress.com Application here:
    https://developer.wordpress.com/apps/new/.
    You should use these settings in your application:
      - **URL:** Set this to your full domain with protocol. For this     Phabricator install, the correct value is: `%s`
      - **Redirect URL**: Set this to: `%s`
    Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'Per configurar WordPress.com OAuth, creeu una nova aplicació de WordPress.com aquí:
    https://developer.wordpress.com/apps/new/.
    Heu d\'utilitzar aquests paràmetres a la vostra aplicació:
    - **URL:** Establiu-lo al vostre domini complet amb protocol. Per a aquesta instal·lació de Phabricator, el valor correcte és: "%s"
    - **URL de redirecció**: establiu-lo a: "%s"
    Un cop hàgiu creat una aplicació, copieu el **Identificador de client** i el **Secret del client** als camps anteriors.',
      'Asana' => 'Asana',
      'You and other users on this install are collectively sending too many test text messages too quickly. Wait a few minutes to continue texting tests.' => 'Tu i altres usuaris d’aquesta instal·lació envieu massa missatges de text de prova de manera col·lectiva massa ràpidament. Espereu uns minuts per continuar amb les proves de missatges de text.',
      'This request improperly specifies an MFA challenge token ("%s") multiple times and can not be processed.' => 'Aquesta sol·licitud especifica de manera inadequada un testimoni ("%s")  de desafiament MFA diverses vegades i no es pot processar.',
      'You recently provided a response to this factor. Responses may not be reused. Wait %s second(s) for the code to cycle, then try again.' => 'Vostè ha respost recentment a aquest factor. Les respostes no es poden reutilitzar.  Espera %s segon(s) perquè el codi es repeteixi, després torna-ho a provar.',
      'Refresh OAuth access tokens. This is primarily useful for development and debugging.' => 'Actualitza els testimonis d\'accés OAuth. Això és útil principalment per al desenvolupament i la depuració.',
      'Public SSH Key' => 'Clau SSH pública',
      'All Keys' => 'Totes les claus',
      'Upload Public Key' => 'Penja la clau pública',
      'You have failed too many attempts to synchronize new multi-factor authentication methods in a short period of time.' => 'Heu fallat massa intents per sincronitzar mètodes d\'autenticació multifactors nous en un curt període de temps.',
      'Your Phabricator account is already connected to an external account on this provider ("%s"), but you are currently logged in to the provider with a different account. Log out of the external service, then log back in with the correct account before refreshing the account link.' => 'El vostre compte de Phabricator ja està connectat a un compte extern d\'aquest proveïdor (\'%s\'), però actualment heu iniciat la sessió al proveïdor amb un compte diferent. Tanqueu la sessió al servei extern i torneu a iniciar la sessió amb el compte correcte abans d’actualitzar l’enllaç del compte.',
      'Expected token to finish OAuth handshake!' => 'S\'esperava un testimoni per acabar la conformitat de connexió OAuth!',
      'Authentication provider configuration is locked, and can not be changed without being unlocked.' => 'La configuració del proveïdor d’autenticació està bloquejada i no es pot canviar sense desbloquejar-la.',
      'Login Failure' => 'Error d\'nici de sessió',
      'NOTE: Revoking passwords does not terminate existing sessions which were established using the old passwords. To terminate existing sessions, run the "session" revoker now.' => 'NOTA: La revocació de contrasenyes no posa fi a les sessions existents establertes mitjançant les contrasenyes antigues. Per finalitzar les sessions existents, executeu el revocador de \'sessió\' ara.',
      'Scan this QR code with the Duo application on your mobile phone:' => 'Escaneja aquest codi QR amb l’aplicació Duo del telèfon mòbil:',
      'This Phabricator install is not configured with any enabled authentication providers which can be used to log in. If you have accidentally locked yourself out by disabling all providers, you can use `%s` to recover access to an account.' => 'Aquesta instal·lació de Phabricator no està configurada amb cap proveïdor d\'autenticació habilitat que es pugui utilitzar per iniciar la sessió. Si us heu bloquejat accidentalment desactivant tots els proveïdors, podeu utilitzar "%s" per recuperar l\'accés a un compte.',
      '%s Require users to enable \'secure browsing\' on Facebook in order to use Facebook to authenticate with Phabricator. This improves security by preventing an attacker from capturing an insecure Facebook session and escalating it into a Phabricator session. Enabling it is recommended.' => '%s requereix els usuaris que activin la "navegació segura" a Facebook per utilitzar Facebook per autenticar-se amb Phabricator. Això millora la seguretat evitant que un atacant capturi una sessió de Facebook insegura i la converteixi en una sessió de Phabricator. Es recomana habilitar-lo.',
      'JIRA base URI should include protocol (like "https://").' => 'L\'URI base JIRA ha d\'incloure un protocol (com ara \'https: //\').',
      'Unable to Generate Keys' => 'No es poden generar claus',
      'Specify the target to revoke credentials from with "--from" or specify "--everywhere".' => 'Especifiqueu l\'objectiu des del qual revocar les credencials amb \'--from\' o especifiqueu \'--everywhere\'.',
      'Expected JSON response from Duo.' => 'S\'esperava una resposta JSON de Duo.',
      'Revoke Public Key' => 'Revoca la clau pública',
      'Use Primary Email Address' => 'Utilitzar l\'adreça de correu electrònic principal',
      'Designate %s as your primary contact number?' => 'Vols designar %s com a número de contacte principal?',
      'This engine is used to edit MFA providers.' => 'Aquest motor s’utilitza per editar proveïdors de MFA.',
      'This factor recently issued a challenge for a different workflow. Wait %s second(s) for the code to cycle, then try again.' => 'Aquest factor ha llançat recentment un repte per a un flux de treball diferent. Espereu %s segons fins que el codi es repeteixi i torneu-ho a provar.',
      '%s disabled this provider.' => '%s ha desactivat aquest proveïdor.',
      'You have not activated this enrollment in the Duo application on your phone yet. Complete activation, then click continue.' => 'Encara no heu activat aquesta inscripció a l\'aplicació Duo al vostre telèfon. Completeu l\'activació i feu clic a continua.',
      'This factor recently issued a challenge to a different login session. Wait %s second(s) for the code to cycle, then try again.' => 'Aquest factor ha emès recentment un repte a una sessió d\'inici de sessió diferent. Espera %s segon(s) perquè el codi es repeteixi, després torna-ho a provar.',
      'You currently have multi-factor authentication ("%s") which depends on your primary contact number. You must remove this authentication factor before you can modify or disable your primary contact number.' => 'Actualment teniu autenticació multifactor (\'%s\') que depèn del vostre número de contacte principal. Heu d’eliminar aquest factor d’autenticació abans de poder modificar o desactivar el vostre número de contacte principal.',
      'Skipping, provider has no stored refresh token.' => 'Ometent, el proveïdor no té cap testimoni de refresc emmagatzemat.',
      'Revokes all SSH public keys.
    SSH public keys are revoked, not just removed. Users will need to generate and upload new, unique keys before they can access repositories or other services over SSH.' => 'Revoca totes les claus públiques SSH. <br><br>Les claus públiques SSH són revocades, no només eliminades.  Els usuaris hauran de generar i pujar noves claus úniques abans de poder accedir als repositoris o altres serveis a través de SSH.',
      'End of dry run.' => 'Final de la prova en blanc.',
      'Revoke credentials which may have been leaked or disclosed.' => 'Revoqueu les credencials que poden haver estat filtrades o divulgades.',
      'Destroyed %s credential(s) of type "%s".' => 'S\'han destruït%s credencials del tipus \'%s\'.',
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
      'Attempting to upgrade password hasher, but the password for the upgrade is not the stored credential!' => 'S\'està intentant actualitzar el hasher de contrasenya, però la contrasenya de l\'actualització no és la credencial emmagatzemada.',
      'Edit SSH Key' => 'Edita la clau SSH',
      '%s changed this contact number from %s to %s.' => '%s ha canviat aquest número de contacte de %s a %s.',
      'Welcome, %s. To complete the process of logging in, provide your multi-factor credentials.' => 'Benvingut, %s. Per completar el procés d\'inici de sessió, proporcioneu les vostres credencials de múltiples factors.',
      '**JIRA Instance Name**
    Choose a permanent name for this instance of JIRA. Phabricator uses this name internally to keep track of this instance of JIRA, in case the URL changes later.
    Use lowercase letters, digits, and period. For example, `jira`, `jira.mycompany` or `jira.engineering` are reasonable names.' => '**Nom de la instància JIRA**
    Trieu un nom permanent per a aquesta instància de JIRA. Phabricator utilitza aquest nom internament per fer un seguiment d\'aquesta instància de JIRA, en cas que l\'URL canviï més endavant.
    Utilitzeu minúscules, dígits i punt. Per exemple, "jira", "jira.mycompany" o "jira.engineering" són noms raonables.',
      'Unlock the authentication provider config, to make it possible to edit the config using the web UI. Make sure to do **bin/auth lock** when done editing the configuration.' => 'Desbloquejar la configuració del proveïdor d’autenticació per fer possible l’edició de la configuració mitjançant la interfície d’usuari web. Assegureu-vos de fer **bin/auth lock** quan hàgiu acabat d\'editar la configuració.',
      'Too many account recovery email links have been sent to this account in a short period of time.' => 'S\'han enviat massa enllaços de correu electrònic de recuperació del compte a aquest compte en un curt període de temps.',
      'Provide Multi-Factor Credentials' => 'Proporcioneu credencials de múltiples factors',
      'You have failed to enter the correct account password too often in a short period of time.' => 'No heu pogut introduir la contrasenya correcta del compte, massa intents en un curt període de temps.',
      'This engine is used to edit contact numbers.' => 'Aquest motor s’utilitza per editar números de contacte.',
      'You can not set the response digest for a challenge directly. Instead, set a response token. A response digest will be computed automatically.' => 'No podeu establir el resum de resposta per a un repte directament.  En comptes d\'això, establiu un testimoni de resposta.  Es calcularà automàticament un resum de resposta.',
      'Expected valid JSON response from Phabricator %s request.' => 'S\'esperava una resposta JSON vàlida de la sol·licitud de %s de Phabricator.',
      '%s created this contact number.' => '%s ha creat aquest número de contacte.',
      'Duo providers must have an API credential.' => 'Els proveïdors de Duo han de tenir una credencial d\'API.',
      'SSH Key %d' => 'Clau SSH %s',
      'Public key type should be one of: %s' => 'El tipus de clau pública ha de ser de: %s',
      'Duo API Credential' => 'Credencial API Duo',
      '%s edited a property of this provider.' => '%s ha modificat una propietat d\'aquest proveïdor.',
      'To verify your phone as an authentication factor, a text message with a secret code will be sent to the phone number you have listed as your primary contact number.' => 'Per verificar el vostre telèfon com a factor d’autenticació, s’enviarà un missatge de text amb un codi secret al número de telèfon que heu indicat com a número de contacte principal.',
      'No OAuth Access Token' => 'Sense testimoni d\'autenticació OAuth',
      'Revoke SSH Public Key' => 'Revoca la clau pública SSH',
      'Before you can set up or use LDAP, you need to install the PHP LDAP extension. It is not currently installed, so PHP can not talk to LDAP. Usually you can install it with `%s`, `%s`, or a similar package manager command.' => 'Abans de configurar o utilitzar LDAP, heu d’instal·lar l’extensió LDAP de PHP. Actualment no està instal·lat, de manera que PHP no pot parlar amb LDAP. Normalment, podeu instal·lar-lo amb `%s`,` %s` o una ordre similar de gestor de paquets.',
      'To configure Slack OAuth, create a new application here:
    https://api.slack.com/docs/sign-in-with-slack#create_slack_app
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Per configurar OAuth de Slack, creeu una nova aplicació aquí:
    https://api.slack.com/docs/sign-in-with-slack#create_slack_app
    Quan creeu l\'aplicació, utilitzeu aquests paràmetres:
    - **URI de redirecció:** Establiu-lo a: `%s`
    Després de completar la configuració, copieu el **ID de client** i el **Secret del client** als camps anteriors. (És possible que hàgiu de generar el secret del client fent clic primer a \'Nou secret\').',
      'MFA Sync Token' => 'Testimoni de sincronització MFA',
      'Your browser did not submit a registration key with the request. You must use the same browser to begin and complete registration. Check that cookies are enabled and try again.' => 'El vostre navegador no va enviar cap clau de registre amb la sol·licitud. Heu d’utilitzar el mateix navegador per començar i completar el registre. Comproveu que les cookies estiguin activades i torneu-ho a provar.',
      'You must specify the path to a public keyfile with %s.' => 'Heu d\'especificar el camí d\'accés a un fitxer de clau pública amb %s.',
      '%s changed the credential for this provider from %s to %s.' => '%s ha canviat la credencial d\'aquest proveïdor de %s a %s.',
      'This request included an improperly formatted MFA challenge token and can not be processed.' => 'Aquesta petició incloïa un testimoni de desafiament MFA amb un format incorrecte i no es pot processar.',
      'Expected valid JSON response from Amazon account data request.' => 'S\'esperava una resposta JSON vàlida de la sol·licitud de dades del compte d\'Amazon.',
      'Revoked SSH keys can not be edited or reinstated.' => 'Les claus SSH revocades no es poden editar ni restablir.',
      'WARNING: You have not configured any authentication providers yet, so your account has no login credentials. If you log out now, you will not be able to log back in normally.' => 'AVÍS: encara no heu configurat cap proveïdor d’autenticació, de manera que el vostre compte no té credencials d’inici de sessió. Si tanqueu la sessió ara, no podreu tornar a iniciar la sessió amb normalitat.',
      'Recover access to an account if you have locked yourself out of Phabricator.' => 'Recupereu l\'accés a un compte si us heu bloquejat a Phabricator.',
      'You have not configured a primary contact number. Configure a contact number before adding SMS as an authentication factor.' => 'No heu configurat cap número de contacte principal. Configureu un número de contacte abans d\'afegir l\'SMS com a factor d\'autenticació.',
      '%s made this the primary contact number.' => '%s ha fet d\'aquest el número de contacte principal.',
      'The external account ("%s") you just authenticated with is not configured to allow logins on this Phabricator install. An administrator may have recently disabled it.' => 'El compte extern (\'%s\') amb el qual acabeu d\'autenticar-vos no està configurat per permetre els inicis de sessió en aquesta instal·lació de Phabricator. És possible que un administrador l’hagi desactivat recentment.',
      '%s changed the enrollment policy for this provider from %s to %s.' => '%s ha canviat la política d\'inscripció d\'aquest proveïdor de %s a %s.',
      'Currently, there are no configured external auth providers which you can link your account to.' => 'No hi ha cap proveïdor d’autorització extern configurat al qual enllaçar el vostre compte.',
      'To configure GitHub OAuth, create a new GitHub Application here:
    https://github.com/settings/applications/new
    You should use these settings in your application:
      - **URL:** Set this to your full domain with protocol. For this     Phabricator install, the correct value is: `%s`
      - **Callback URL**: Set this to: `%s`
    Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'Per configurar OAuth de GitHub, creeu una nova aplicació GitHub aquí:
    https://github.com/settings/applications/new
    Heu d\'utilitzar aquests paràmetres a la vostra aplicació:
    - **URL:** Establiu-lo al vostre domini complet amb protocol. Per a aquesta instal·lació de Phabricator, el valor correcte és: "%s"
    - **URL de devolució de trucada**: configureu-lo a: "%s"
    Un cop hàgiu creat una aplicació, copieu el **Identificador de client** i el **Secret del client** als camps anteriors.',
      '%s disabled account linking.' => '%s ha desactivat la vinculació de comptes.',
      'Number Already Primary' => 'El número ja és principal',
      'Locked the authentication provider configuration.' => 'S\'ha bloquejat la configuració del proveïdor d\'autenticació.',
      'Specify the target to revoke credentials from with "--from" or specify "--everywhere", but not both.' => 'Especifiqueu l\'objectiu des del qual revocar les credencials amb "--from" o especifiqueu "--everywhere", però no tots dos.',
      'Your browser submitted a different registration key than the one associated with this account. You may need to clear your cookies.' => 'El vostre navegador ha enviat una clau de registre diferent de la associada a aquest compte. És possible que hagueu d’esborrar les galetes.',
      'Make Primary Number' => 'Feu el número principal',
      'Facebook' => 'Facebook',
      'Really revoke all tokens? Among other temporary authorizations, this will disable any outstanding password reset or account recovery links.' => 'Segur que voleu revocar tots els testimonis?  Entre altres autoritzacions temporals, això inhabilitarà qualsevol enllaç pendent de restabliment de contrasenya o recuperació de comptes.',
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
      'After you download the private key, it will be destroyed. You will not be able to retrieve it if you lose your copy.' => 'Després de descarregar la clau privada, es destruirà. No el podreu recuperar si perdeu la còpia.',
      'Scan the QR code or manually enter the key shown below into the application.' => 'Escaneja el codi QR o introdueix manualment la clau que es mostra a l\'aplicació.',
      'Can Not Edit Trusted Key' => 'No es pot editar la clau de confiança',
      'Specified public keyfile "%s" does not exist!' => 'El fitxer de clau pública especificat \'%s\' no existeix!',
      'The key "%s" will be permanently revoked, and you will no longer be able to use the corresponding private key to authenticate.' => 'La clau "%s" es revocarà permanentment i ja no podreu utilitzar la clau privada corresponent per autenticar-vos.',
      'You can not make a disabled number your primary contact number.' => 'No podeu convertir un número desactivat en el vostre número de contacte principal.',
      'The external account ("%s") you just authenticated with is not configured to allow registration on this Phabricator install. An administrator may have recently disabled it.' => 'El compte extern (\'%s\') amb el qual acabeu d\'autenticar-vos no està configurat per permetre el registre en aquesta instal·lació de Phabricator. És possible que un administrador l’hagi desactivat recentment.',
      'Revoke SSH Key' => 'Revoca la clau SSH',
      'Request did not include account key.' => 'La sol·licitud no incloïa la clau del compte.',
      'Edit SSH Public Key' => 'Edita la clau pública SSH',
      'Consumer key is required.' => 'Cal una clau de consumidor.',
      'Unable to load Duo API credential ("%s").' => 'No es pot carregar la credencial de l\'API de Duo (\'%s\').',
      'SSH key name is required.' => 'Cal un nom de clau SSH.',
      'Strip factors without prompting.' => 'Elimina els factors sense preguntar.',
      'SSH KEY DETAIL' => 'DETALL DE LA CLAU SSH',
      'Failed to convert public key into PKCS8 format. If you are developing on OSX, you may be able to use `%s` to work around this issue. %s' => 'No s\'ha pogut convertir la clau pública al format PKCS8. Si esteu desenvolupant OSX, és possible que pugueu utilitzar `%s \'per solucionar aquest problema. %s',
      '(WARNING) Examine the table below for information on how password hashes will be stored in the database.
    (NOTE) You can select a minimum password length by setting `%s` in configuration.' => '(AVÍS) Examineu la taula següent per obtenir informació sobre com s’emmagatzemaran els hashes de contrasenya a la base de dades. 
    (NOTA) Podeu seleccionar una longitud mínima de contrasenya configurant `%s` a la configuració.',
      'Trusted' => 'Fiable',
      'You must specify the path to a pkcs8 keyfile with %s.' => 'Heu d\'especificar el camí d\'accés a un fitxer de clau pkcs8 amb %s.',
      'This engine is used to edit authentication messages.' => 'Aquest motor s’utilitza per editar missatges d\'auntenticació.',
      'View Active Keys' => 'Veure claus actives',
      'SSH Key %d: %s' => 'Clau SSH %s: %s',
      'Phabricator will not retain a copy of the private key.' => 'Phabricator no conservarà cap còpia de la clau privada.',
      'Refreshed token, new token expires in %s seconds.' => 'Testimoni actualitzat, el nou testimoni caduca en %s segons.',
      'When users click the "Change Username" action on their profile pages but do not have the required permissions, they will be presented with a message explaining that they are not authorized to make the edit.
    You can optionally provide additional instructions here to help users request a username change, if there is someone specific they should contact or a particular workflow they should use.' => 'Quan els usuaris facin clic a l\'acció "Canvia el nom d\'usuari" a les seves pàgines de perfil, però no tenen els permisos necessaris, se\'ls presentarà un missatge explicant que no estan autoritzats a fer l\'edició. 
    Podeu proporcionar instruccions addicionals aquí per ajudar els usuaris a sol·licitar un canvi d\'usuari, si hi ha algú específic que haurien de contactar o un flux de treball en particular que haurien d\'utilitzar.',
      'You must approve the challenge which was sent to your phone. Open the Duo application and confirm the challenge, then continue.' => 'Heu d\'aprovar el desafiament que s\'ha enviat al vostre telèfon. Obriu l\'aplicació Duo i confirmeu el repte i, a continuació, continueu.',
      'Download Private Key (%s)' => 'Baixa la clau privada (%s)',
      'Make sure you are copy-and-pasting the entire link into your browser. Login links are only valid for 24 hours, and can only be used once.' => 'Assegureu-vos que copieu i enganxeu tot l\'enllaç al navegador. Els enllaços d\'inici de sessió només són vàlids durant 24 hores i només es poden utilitzar una vegada.',
      '%s disabled login.' => '%s ha desactivat l\'inici de sessió.',
      'Primary Number' => 'Número principal',
      'Really revoke this token? Any temporary authorization it enables will be disabled.' => 'Segur que voleu revocar aquest testimoni?  Qualsevol autorització temporal que activi estarà desactivada.',
      'Raw Address' => 'Adreça raw',
      'You have made too many account recovery requests in a short period of time.' => 'Heu fet massa intents de recuperació del compte en un curt període de temps.',
      'Download Private Key' => 'Baixa la clau privada',
      'Query public keys.' => 'Consultar claus públiques.',
      'This Duo enrollment attempt is invalid or has expired ("%s"). Cancel the workflow and try again.' => 'Aquest intent d\'inscripció a Duo no és vàlid o ha caducat ("%s"). Cancel·leu el flux de treball i torneu-ho a provar.',
      'To choose a different primary contact number, make that number primary (instead of trying to demote this one).' => 'Per triar un altre número de contacte principal, feu que el número sigui principal (en lloc de degradar-lo).',
      'Allow users to unlink account credentials for this provider from existing Phabricator accounts. If you disable this, Phabricator accounts will be permanently bound to provider accounts.' => 'Permetre als usuaris desenllaçar les credencials del compte d’aquest proveïdor dels comptes de Phabricator existents. Si desactiveu això, els comptes de Phabricator estaran vinculats permanentment als comptes del proveïdor.',
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
      '%s reinstated this key.' => '%s va restablir aquesta clau.',
      'Before you can use Phabricator, you need to add multi-factor authentication to your account. Multi-factor authentication helps secure your account by making it more difficult for attackers to gain access or take sensitive actions.' => 'Abans d’utilitzar Phabricator, heu d’afegir l’autenticació multifactor al vostre compte. L’autenticació multifactor ajuda a protegir el vostre compte, impedeix que els atacants puguin accedir o dur a terme accions confidencials.',
      '%s created this password.' => '%s ha creat aquesta contrasenya.',
      'Stay' => 'Romandre',
      'The account you are attempting to log in with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.' => 'El compte amb què intenteu iniciar la sessió utilitza un proveïdor d’autenticació inexistent o desactivat (amb la clau \'%s\'). És possible que un administrador hagi desactivat recentment aquest proveïdor.',
      'Two authentication providers use the same provider key (\'%s\'). Each provider must be identified by a unique key.' => 'Dos proveïdors d\'autenticació utilitzen la mateixa clau de proveïdor ("%s"). Cal identificar cada proveïdor mitjançant una clau única.',
      'A completed challenge was provided as an answered challenge. The underlying factor is implemented improperly, challenges may not be reused.' => 'Es va proporcionar un repte completat com a repte contestat. El factor subjacent s’implementa de manera incorrecta; és possible que els reptes no es reutilitzin.',
      'Revoke Token' => 'Revoca el Testimoni',
      'There are no registered session engine extensions.' => 'No hi ha extensions de motor de sessió registrades.',
      'Revokes all Conduit API tokens used to access the API.
    Users will need to use `arc install-certificate` to install new API tokens before `arc` commands will work. Bots and scripts which access the API will need to have new tokens generated and installed.' => 'Revoca tots els testimonis de l\'API Conduit utilitzats per accedir a l\'API.
    Els usuaris hauran d\'utilitzar `arc install-certificate` per instal·lar nous testimonis API abans que funcionin les ordres `arc`. Bots i scripts que accedeixin a l\'API hauran de tenir nous testimonis generats i instal·lats.',
      'If you want to register a new account, continue with this registration workflow and choose a new, unique email address for the new account.' => 'Si voleu registrar un compte nou, continueu amb aquest flux de treball de registre i trieu una nova adreça de correu electrònic única per al compte nou.',
      'If you log out now, you can still regain access to your account later by using the account recovery workflow. The login screen will prompt you with recovery instructions.' => 'Si tanqueu la sessió ara, podeu recuperar l\'accés al vostre compte més endavant mitjançant el flux de treball de recuperació del compte. La pantalla d\'inici de sessió us demanarà instruccions de recuperació.',
      'Password Reset Token' => 'Testimoni de restabliment de la contrasenya',
      'The selected password is too short. Passwords must be a minimum of %s characters long.' => 'La contrasenya seleccionada és massa curta. Les contrasenyes han de tenir un mínim de %s caràcters.',
      'Provide a public key, not a private key!' => 'Proporcioneu una clau pública, no una clau privada!',
      'Use "--type <type>" or "--provider <phid>" to specify which factors to strip, or "--all-types" to strip all factors. Use `bin/auth list-factors` to show the available factor types or `bin/auth list-mfa-providers` to show available providers.' => 'Utilitzeu "--type <tipus>" or "--provider <phid>" per especificar quins factors es poden eliminar o \'--all-types\' per eliminar tots els factors. Utilitzeu \'bin / auth list-factors\' per mostrar els tipus de factors disponibles o `bin/auth list-mfa-providers` per mostrar els proveïdors disponibles.',
      'You are logged in as %s, but the email address you just clicked a link from is already the primary email address for another account (%s). Switch accounts, then try again.' => 'Heu iniciat la sessió com a %s, però l\'adreça de correu electrònic en què acabeu de fer clic a un enllaç ja és l\'adreça de correu electrònic principal d\'un altre compte (%s). Canvieu de compte i torneu-ho a provar.',
      'Terminate all web login sessions. If called via OAuth, also terminate the current OAuth token.
    WARNING: This method does what it claims on the label. If you call this method via the test console in the web UI, it will log you out!' => 'Finalitza totes les sessions d\'inici de sessió web. Si es trucat a través d\'OAuth, també finalitza el testimoni actual d\'OAuth.
    AVÍS: Aquest mètode fa el que diu a l\'etiqueta. Si truqueu aquest mètode a través de la consola de proves de la interfície web, us tancarà la sessió!',
      'This contact number is already your primary contact number.' => 'Aquest número de contacte ja és el vostre número de contacte principal.',
      'Authentication Tokens' => 'Testimonis d\'autenticació',
      '%s upgraded the hash algorithm for this password from "%s" to "%s".' => '%s ha actualitzat l\'algoritme hash d\'aquesta contrasenya de "%s" a "%s".',
      '%s disabled registration.' => '%s ha desactivat el registre.',
      '[SSH Key]' => '[Clau SSH]',
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
      'Set Phabricator to not trust an OAuth client. Phabricator redirects to trusted OAuth clients that users have authorized without user intervention.' => 'Establiu Phabricator perquè no confiï en un client OAuth. Phabricator redirigeix ​​a clients OAuth de confiança que els usuaris han autoritzat sense la intervenció de l\'usuari.',
      'No outbound mailer which can deliver SMS messages is configured.' => 'Cap correu de sortida està configurat per enviar missatges SMS.',
      'NOTE: Amazon **requires** HTTPS, but your Phabricator install does not use HTTPS. **You will not be able to add Amazon as an authentication provider until you configure HTTPS on this install**.' => 'NOTA: Amazon **requereix** HTTPS, però la vostra instal·lació de Phabricator no utilitza HTTPS. **No podreu afegir Amazon com a proveïdor d\'autenticació fins que no configureu HTTPS en aquesta instal·lació**.',
      'Really destroy credentials everywhere?' => 'Voleu destruir les credencials a tot arreu?',
      '%s changed the username policy for this provider from %s to %s.' => '%s ha canviat la política d\'usuari per a aquest proveïdor de %s a %s.',
      'A passphrase was provided for this private key, but it does not require a passphrase. Check that you supplied the correct key, or omit the passphrase.' => 'S\'ha proporcionat una frase de contrasenya per a aquesta clau privada, però no requereix una contrasenya. Comproveu que heu proporcionat la clau correcta o ometeu la contrasenya.',
      '%s created this provider.' => '%s ha creat aquest proveïdor.',
      'Revokes temporary authentication tokens.
    Temporary tokens are used in password reset mail, welcome mail, and by some other systems like Git LFS. Revoking temporary tokens will invalidate existing links in password reset and invite mail that was sent before the revocation occurred.' => 'Revoca els testimonis d\'autenticació temporals. <br><br>Els testimonis temporals s\'utilitzen en el correu de restabliment de contrasenya, el correu de benvinguda i altres sistemes com Git LFS.  La revocació de testimonis temporals invalidarà els enllaços existents en el restabliment de la contrasenya i convidarà el correu que s\'hagi enviat abans de la revocació.',
      'Enter the code from the text message which was sent to your primary contact number.' => 'Introduïu el codi del missatge de text que s\'ha enviat al vostre número de contacte principal.',
      'This Phabricator install requires you to enable Secure Browsing on your Facebook account in order to use it to log in to Phabricator. For more information, see %s' => 'Aquesta instal·lació de Phabricator requereix que activeu la navegació segura al vostre compte de Facebook per utilitzar-la per iniciar la sessió a Phabricator. Per obtenir més informació, vegeu %s',
      'The PHP \'openssl\' extension is not installed. You must install this extension in order to add a JIRA authentication provider, because JIRA OAuth requests use the RSA-SHA1 signing algorithm. Install the \'openssl\' extension, restart Phabricator, and try again.' => 'L\'extensió PHP \'openssl\' no està instal·lada. Heu d\'instal·lar aquesta extensió per afegir un proveïdor d\'autenticació JIRA, ja que les sol·licituds JAI OAuth utilitzen l\'algorisme de signatura RSA-SHA1. Instal·leu l\'extensió \'openssl\', reinicieu Phabricator i torneu-ho a provar.',
      'Unable to load your OAuth1 token secret from storage. It may have expired. Try authenticating again.' => 'No s\'ha pogut carregar el secret de testimonis OAuth1 des de l\'emmagatzematge.  Pot haver caducat.  Torna a provar l\'autenticació.',
      'This private key requires a passphrase, but no passphrase was provided. Check that you supplied the correct key, or provide the passphrase.' => 'Aquesta clau privada requereix una contrasenya, però no s\'ha proporcionat cap contrasenya. Comproveu que heu proporcionat la clau correcta o proporcioneu la contrasenya.',
      'Credential type "%s" is not valid. Valid credential types are: %s.' => 'El tipus de credencial \'%s\' no és vàlid. Els tipus de credencials vàlids són: %s.',
      'Generate Keypair' => 'Genera una clau asimètrica',
      'LDAP: Failed to retrieve record for user "%s" when searching. Credentialed users may not be able to search your LDAP server. Try configuring anonymous credentials or fully anonymous binds.' => 'LDAP: no s\'ha pogut recuperar el registre de l\'usuari \'%s\' en fer cerques. És possible que els usuaris acreditats no puguin cercar al vostre servidor LDAP. Proveu de configurar credencials anònimes o enllaços totalment anònims.',
      '%s changed the "%s" value from "%s" to "%s".' => '%s ha canviat el valor "%s" de "%s" a "%s".',
      'A password reset link will be sent to your primary email address. Follow the link to set an account password.' => 'S’enviarà un enllaç de restabliment de la contrasenya a la vostra adreça electrònica principal. Seguiu l\'enllaç per definir una contrasenya de compte.',
      '%s revoked this key.' => '%s va revocar aquesta clau.',
      'OAuth1 Handshake Token' => 'Testimoni d\'aproximació de mans OAuth1',
      '**Step 1 of 2 - Name Phabricator OAuth Instance**
    Choose a permanent name for the OAuth server instance of Phabricator. //This// instance of Phabricator uses this name internally to keep track of the OAuth server instance of Phabricator, in case the URL changes later.' => '**Pas 1 de 2: nom de la instància OAuth de Phabricator**
    Trieu un nom permanent per a la instància del servidor OAuth de Phabricator. //Aquesta// instància de Phabricator utilitza aquest nom internament per fer un seguiment de la instància del servidor OAuth de Phabricator, en cas que l\'URL canviï més endavant.',
      'Captcha response is incorrect, try again.' => 'La resposta del Captcha és incorrecta. Torneu-ho a provar.',
      'Authentication provider (of class "%s") is attempting to load or create an external account, but provided a list of account identifiers which map to more than one account: %s.' => 'El proveïdor d’autenticació (de la classe \'%s\') intenta carregar o crear un compte extern, però ha proporcionat una llista d\'identificadors de comptes que corresponen a diversos comptes: %s.',
      'Duo API credential ("%s") has no secret key.' => 'La credencial de l\'API Duo (\'%s\') no té cap clau secreta.',
      'LDAP: Failed to retrieve record for user "%s" when searching with both user and anonymous credentials.' => 'LDAP: no s\'ha pogut recuperar el registre de l\'usuari \'%s\' en cercar amb credencials d\'usuari i anònimes.',
      'Authentication Config Locked' => 'S\'ha bloquejat la configuració de l\'autenticació',
      'Temporary Token Types' => 'Tipus de testimoni temporals',
      'Guidance shown after a user logs in with an email link and is prompted to link an external account.' => 'Orientació mostrada després que un usuari iniciï sessió amb un enllaç de correu electrònic i se li demana que enllaci un compte extern.',
      'ERROR: You are making a Conduit API request to "%s", but the correct HTTP request path to use in order to access a COnduit method is "%s" (for example, "%s"). Check your configuration.' => 'ERROR: feu una sol·licitud de l\'API Conduit a "%s", però el camí correcte de sol·licitud HTTP que cal utilitzar per accedir a un mètode COnduit és "%s" (per exemple, "%s"). Comproveu la vostra configuració.',
      '%s disabled auto login.' => '%s ha desactivat l\'inici de sessió automàtic.',
      'You can not "--list" and revoke credentials (with "--from" or "--everywhere") in the same operation.' => 'No podeu \'--list\' ni revocar credencials (amb \'--from\' o \'--everywhere\') en la mateixa operació.',
      'The account you are attempting to register with uses an authentication provider ("%s") which does not allow registration. An administrator may have recently disabled registration with this provider.' => 'El compte amb el què intenteu registrar-vos utilitza un proveïdor d’autenticació ("%s") que no permet el registre. És possible que un administrador hagi desactivat recentment els registres amb aquest proveïdor.',
      'Set Primary Contact Number' => 'Establir el número de contacte principal',
      'Stronger algorithms are listed first. The highlighted algorithm will be used when storing new hashes. Older hashes will be upgraded to the best algorithm over time.' => 'Primer s’enumeren algoritmes més forts. L’algorisme ressaltat s’utilitzarà quan s’emmagatzemin nous hash. Els hash més antics s’actualitzaran al millor algorisme amb el pas del temps.',
      'Engine: Session' => 'Motor: Sessió',
      'Upload SSH Public Key' => 'Pengeu la clau pública SSH',
      '%s changed the hostname for this provider from %s to %s.' => '%s ha reanomenat el host d\'aquest proveïdor de %s a %s.',
      'SSH key material is required.' => 'Es requereix informació sobre la clau SSH.',
      'Once you have completed setup on your phone, click continue.' => 'Un cop hàgiu completat la configuració al telèfon, feu clic a continua.',
      'Parsed Address' => 'Adreça analitzada sintàcticament',
      'Attach a mobile authenticator application (like Authy or Google Authenticator) to your account. When you need to authenticate, you will enter a code shown on your phone.' => 'Adjunteu una aplicació d’autenticació mòbil (com Authy o Google Authenticator) al vostre compte. Quan hàgiu d’autenticar-vos, introduïu el codi que es mostra al telèfon.',
      '%s You have not added authentication providers yet. Use "%s" to add a provider, which will let users register new Phabricator accounts and log in.' => '%s Encara no heu afegit cap proveïdor d\'autenticació. Utilitzeu "%s" per afegir un proveïdor, que permetrà als usuaris registrar nous comptes de Phabricator i iniciar la sessió amb ells.',
      'Revoke all credentials types.' => 'Revoqueu tots els tipus de credencials.',
      'This private key could not be opened with the provided passphrase. This might mean that the passphrase is wrong or that the key is not formatted correctly. Check that you have supplied the complete text of a valid private key and the correct passphrase.' => 'Aquesta clau privada no s\'ha pogut obrir amb la contrasenya proporcionada. Això pot significar que la contrasenya és incorrecta o que la clau no té el format correcte. Comproveu que heu proporcionat el text complet d’una clau privada vàlida i la frase de contrasenya correcta.',
      '%s renamed this key from "%s" to "%s".' => '%s ha reanomenat aquesta clau de "%s" a "%s".',
      '%s created this MFA provider.' => '%s ha creat aquest proveïdor MFA.',
      'To enable the login flow, follow setup guidance and configure at least one authentication provider, then associate credentials with your account. After completing these steps, you will be able to log out and log back in normally.' => 'Per habilitar el flux d’inici de sessió, seguiu les instruccions de configuració i configureu almenys un proveïdor d’autenticació i, a continuació, associeu les credencials al vostre compte. Després de completar aquests passos, podreu tancar la sessió i tornar a iniciar la sessió amb normalitat.',
      'You can safely ignore these warnings if the install itself has access controls (for example, it is deployed on a VPN) or if all of the configured providers have access controls (for example, they are all private LDAP or OAuth servers).' => 'Podeu ignorar aquests advertiments de manera segura si la instal·lació té controls d\'accés (per exemple, es desplega en una VPN) o si tots els proveïdors configurats tenen controls d\'accés (per exemple, tots són servidors privats LDAP o OAuth).',
      'SSH keys inherit the policies of the user or object they authenticate.' => 'Les claus SSH hereten les polítiques de l\'usuari o objecte que autenticen.',
      'Captcha' => 'Captcha',
      'No Matching Tokens' => 'No hi ha testimonis coincidents',
      'NOTE: **To complete setup**, copy and paste these keys into JIRA according to the instructions below.' => 'NOTA: **Per completar la configuració**, copieu i enganxeu aquestes claus a JIRA segons les instruccions següents.',
      '%s created this message.' => '%s ha creat aquest missatge.',
      'After entering the key, the application should display a numeric code. Enter that code below to confirm that you have configured the authenticator correctly:' => 'Després d’introduir la clau, l’aplicació hauria de mostrar un codi numèric. Introduïu aquest codi a continuació per confirmar que heu configurat correctament l\'autenticador:',
      'Unable to refresh token!' => 'No s\'ha pogut actualitzar el testimoni!',
      '%s changed the status of this provider from %s to %s.' => '%s ha canviat l\'estat d\'aquest proveïdor de %s a %s.',
      'Consumer Key' => 'Clau del consumidor',
      'SSH Keys' => 'Claus SSH',
      'Active OAuth Token (Expires: %s)' => 'Testimoni OAuth actiu (Expira: %s)',
      'Specify the credential type to revoke with "--type" or "--everything", but not both.' => 'Especifiqueu el tipus de credencial per revocar amb \'--type\' o \'--everything\', però no amb tots dos.',
      '(If given an option, select that this key is "Time Based", not "Counter Based".)' => '(Si se us dóna una opció, seleccioneu que aquesta clau sigui \'Basada en el temps\' i no \'Basada en el comptador\'.)',
      'Multiple password hashers of different strengths are not available, so hash upgrading can not be tested.' => 'No hi ha diversos hashers de contrasenya de diferents punts forts, de manera que no es pot provar l\'actualització de hash.',
      '{icon check, color="green"} **Setup Complete!**
    You have successfully configured multi-factor authentication for your account.
    You can make adjustments from the [[ /settings/ | Settings ]] panel later.' => '{icona verificada, color ="green"} **S\'ha completat la configuració!** 
    Heu configurat correctament l\'autenticació multifactor per al vostre compte. 
    Podeu fer ajustos des del tauler [[/ settings/| opcions]] més endavant.',
      'Your remote address has made too many login attempts in a short period of time.' => 'La vostra adreça remota ha fet massa intents d\'inici de sessió en un curt període de temps.',
      'Allow users to attach a mobile authenticator application (like Google Authenticator) to their account.' => 'Permetre als usuaris connectar una aplicació d’autenticació mòbil (com Google Authenticator) al seu compte.',
      'Password Hash Algorithms' => 'Algorismes de hash de contrasenya',
      'You have failed to verify multi-factor authentication too often in a short period of time.' => 'No heu pogut verificar l\'autenticació multifactor massa sovint en un curt període de temps.',
      'You can not make a disabled number a primary contact number.' => 'No podeu convertir un número desactivat en un número de contacte principal.',
      'Instructions on the "Wait For Approval" screen, shown to users who have registered an account that has not yet been approved by an administrator.' => 'Les instruccions de la pantalla \'Espereu l\'aprovació\' es mostren als usuaris que han registrat un compte que encara no ha aprovat cap administrador.',
      'Configure a connection to an LDAP server so that users can use their LDAP credentials to log in to Phabricator.' => 'Configureu una connexió a un servidor LDAP perquè els usuaris puguin utilitzar les seves credencials LDAP per iniciar sessió a Phabricator.',
      '= Integration Options = 
    Configure how to record Revisions on JIRA tasks.
    Note you\'ll have to restart the daemons for this to take effect.' => '= Opcions d\'integració = 
    Configureu com enregistrar les revisions de les tasques JIRA.
    Tingueu en compte que haureu de reiniciar els dimonis perquè això tingui efecte.',
      'Credential ("%s") is not valid.' => 'La credencial (\'%s\') no és vàlida.',
      'SSH keys can not be reactivated.' => 'Les claus SSH no es poden reactivar.',
      'Expected valid JSON response from GitHub account data request.' => 'S\'esperava una resposta JSON vàlida de la sol·licitud de dades del compte GitHub.',
      '%s disabled account unlinking.' => '%s ha desactivat la desvinculació del compte.',
      'Revoke Tokens?' => 'Revocar els Testimonis?',
      'The password you entered has been revoked. You can not reuse a password which has been revoked. Choose a new password.' => 'La contrasenya que heu introduït s\'ha revocat. No podeu tornar a utilitzar una contrasenya revocada. Trieu una contrasenya nova.',
    );
  }

}
