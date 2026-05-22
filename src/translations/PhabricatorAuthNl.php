<?php

final class PhabricatorAuthNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  '%s renamed this provider from %s to %s.' => '%s heeft deze provider hernoemd van %s naar %s.',
  '%s enabled login.' => '%s heeft aanmelden ingeschakeld.',
  'Disable Contact Number' => 'Contactnummer uitschakelen',
  'This key has been revoked. Choose or generate a new, unique key.' => 'Deze sleutel is ingetrokken. Kies of genereer een nieuwe, unieke sleutel.',
  'SSH Key Actions' => 'SSH-sleutelhandelingen',
  'Adding a PKCS8 keyfile to the cache can be very dangerous. If the PKCS8 file really encodes a different public key than the one specified, an attacker could use it to gain unauthorized access.

Generally, you should use this option only in a development environment where ssh-keygen is broken and it is inconvenient to fix it, and only if you are certain you understand the risks. You should never cache a PKCS8 file you did not generate yourself.' => 'Het toevoegen van een PKCS8-sleutelbestand aan de cache kan zeer gevaarlijk zijn. Als het PKCS8-bestand daadwerkelijk een andere publieke sleutel codeert dan de opgegeven sleutel, kan een aanvaller het gebruiken om ongeautoriseerde toegang te verkrijgen.

Over het algemeen moet u deze optie alleen gebruiken in een ontwikkelomgeving waar ssh-keygen niet werkt en het onhandig is om het te repareren, en alleen als u zeker weet dat u de risico\'s begrijpt. Cache nooit een PKCS8-bestand dat u niet zelf hebt gegenereerd.',
  'This provider ("%s") already exists, and you can not add more than one instance of it. You can edit the existing provider, or you can choose a different provider.' => 'Deze provider ("%s") bestaat al en u kunt er niet meer dan één exemplaar van toevoegen. U kunt de bestaande provider bewerken of een andere provider kiezen.',
  'To add a Duo factor, first download and install the Duo application on your phone. Once you have launched the application and are ready to perform setup, click continue.' => 'Om een Duo-factor toe te voegen, downloadt en installeert u eerst de Duo-applicatie op uw telefoon. Zodra u de applicatie hebt gestart en klaar bent om de configuratie uit te voeren, klikt u op doorgaan.',
  'The verification code you provided is incorrect, or the email address has been removed, or the email address is owned by another user. Make sure you followed the link in the email correctly and are logged in with the user account associated with the email address.' => 'De verificatiecode die u hebt opgegeven is onjuist, of het e-mailadres is verwijderd, of het e-mailadres is eigendom van een andere gebruiker. Zorg ervoor dat u de link in de e-mail correct hebt gevolgd en dat u bent aangemeld met het gebruikersaccount dat aan het e-mailadres is gekoppeld.',
  'Edit Contact Number' => 'Contactnummer bewerken',
  'Passwords' => 'Wachtwoorden',
  'Algorithm' => 'Algoritme',
  'You must specify the username of the account to recover.' => 'U moet de gebruikersnaam opgeven van het account dat hersteld moet worden.',
  'Authentication provider configuration is locked, and can not be changed without being unlocked. See the configuration setting %s for details.' => 'De configuratie van de authenticatieprovider is vergrendeld en kan niet worden gewijzigd zonder ontgrendeling. Zie de configuratie-instelling %s voor details.',
  'Server name must contain only lowercase letters, digits, and periods.' => 'Servernaam mag alleen kleine letters, cijfers en punten bevatten.',
  'Revoke Tokens' => 'Tokens intrekken',
  'There are too many configured default registration providers.' => 'Er zijn te veel geconfigureerde standaardregistratieproviders.',
  'Unlink "%s" Account?' => 'Account "%s" ontkoppelen?',
  'Strip factors from specified users.' => 'Factoren verwijderen van opgegeven gebruikers.',
  'You must confirm the selected password.' => 'U moet het gekozen wachtwoord bevestigen.',
  'Authentication provider (of class "%s") is attempting to load or create an external account, but provided no account identifiers.' => 'Authenticatieprovider (van klasse "%s") probeert een extern account te laden of aan te maken, maar heeft geen accountidentificatoren opgegeven.',
  'Edit Auth Messages' => 'Authenticatieberichten bewerken',
  'Complete enrolling your phone with Duo:' => 'Voltooi de registratie van uw telefoon bij Duo:',
  'Unknown session type "%s".' => 'Onbekend sessietype "%s".',
  'Setup Admin Account' => 'Beheerdersaccount instellen',
  'Enable Contact Number' => 'Contactnummer inschakelen',
  'Create New Duo Account' => 'Nieuw Duo-account aanmaken',
  'To configure Bitbucket OAuth, log in to Bitbucket and go to **Manage Account** > **Access Management** > **OAuth**.

Click **Add Consumer** and create a new application.

After completing configuration, copy the **Key** and **Secret** to the fields above.' => 'Om Bitbucket OAuth te configureren, meldt u zich aan bij Bitbucket en gaat u naar **Account beheren** > **Toegangsbeheer** > **OAuth**.

Klik op **Consument toevoegen** en maak een nieuwe applicatie aan.

Kopieer na het voltooien van de configuratie de **Sleutel** en het **Geheim** naar de bovenstaande velden.',
  'The account you are attempting to register or link is already linked to another user.' => 'Het account dat u probeert te registreren of te koppelen is al gekoppeld aan een andere gebruiker.',
  'Base URI should include protocol (like "%s").' => 'Basis-URI moet het protocol bevatten (zoals "%s").',
  'Verify an unverified email address which is already attached to an account. This will also re-execute event hooks for addresses which are already verified.' => 'Verifieer een niet-geverifieerd e-mailadres dat al aan een account is gekoppeld. Dit zal ook eventhooks opnieuw uitvoeren voor adressen die al geverifieerd zijn.',
  'Must Verify Email' => 'E-mail moet geverifieerd worden',
  'Expected "newResultForPrompt()" to return an object of class "%s", but it returned something else ("%s"; in "%s").' => 'Verwachtte dat "newResultForPrompt()" een object van klasse "%s" zou retourneren, maar het retourneerde iets anders ("%s"; in "%s").',
  'MFA Providers' => 'MFA-providers',
  'Strip factors for a specific provider. Use `bin/auth list-mfa-providers` for a list of providers.' => 'Factoren verwijderen voor een specifieke provider. Gebruik `bin/auth list-mfa-providers` voor een lijst van providers.',
  'Edit MFA Provider' => 'MFA-provider bewerken',
  '%s enabled auto login.' => '%s heeft automatisch aanmelden ingeschakeld.',
  'The account you are attempting to register with has an invalid email address (%s). This server only allows registration with specific email addresses:' => 'Het account waarmee u zich probeert te registreren heeft een onjuist e-mailadres (%s). Deze server staat alleen registratie toe met specifieke e-mailadressen:',
  'Invalid OAuth Access Token' => 'Onjuist OAuth-toegangstoken',
  'Create Auth Message' => 'Authenticatiebericht aanmaken',
  'Attach a mobile authenticator application (like 2FAS, Aegis, FreeOTP, Bitwarden Authenticator, Google Authenticator, or Authy) to your account. When you need to authenticate, you will enter a code shown on your phone.' => 'Koppel een mobiele authenticatieapplicatie (zoals 2FAS, Aegis, FreeOTP, Bitwarden Authenticator, Google Authenticator of Authy) aan uw account. Wanneer u zich moet authenticeren, voert u een code in die op uw telefoon wordt weergegeven.',
  'Verify Email' => 'E-mail verifiëren',
  'Revoke credentials for the specified object. To revoke credentials for a user, use "@username".' => 'Aanmeldgegevens intrekken voor het opgegeven object. Om aanmeldgegevens voor een gebruiker in te trekken, gebruikt u "@gebruikersnaam".',
  'Use "--user <username>" to specify which user to strip factors from, or "--all-users" to strip factors from all users.' => 'Gebruik "--user <gebruikersnaam>" om op te geven van welke gebruiker factoren verwijderd moeten worden, of "--all-users" om factoren van alle gebruikers te verwijderen.',
  'This factor recently issued a challenge which has expired. A new challenge can not be issued yet. Wait %s second(s) for the code to cycle, then try again.' => 'Deze factor heeft onlangs een uitdaging uitgegeven die is verlopen. Er kan nog geen nieuwe uitdaging worden uitgegeven. Wacht %s seconde(n) tot de code wisselt en probeer het opnieuw.',
  'This is a terse test text message (from "%s").' => 'Dit is een kort testtekstbericht (van "%s").',
  'Path to public keyfile.' => 'Pad naar het publieke sleutelbestand.',
  'Strip all factors, regardless of type.' => 'Alle factoren verwijderen, ongeacht het type.',
  'Enable the contact number %s?' => 'Contactnummer %s inschakelen?',
  'Account is already registered or linked.' => 'Account is al geregistreerd of gekoppeld.',
  'Sign this transaction group with MFA.' => 'Onderteken deze transactiegroep met MFA.',
  '(Some types of token can not be revoked, and you can not revoke tokens which have already expired.)' => '(Sommige typen tokens kunnen niet worden ingetrokken en u kunt geen tokens intrekken die al zijn verlopen.)',
  'You have not configured any multi-factor providers yet.' => 'U hebt nog geen multifactorproviders geconfigureerd.',
  'Unable to Log In' => 'Aanmelden niet mogelijk',
  'The external service ("%s") you just used to log in is already associated with another %s user account. Log in to the other %s account and unlink the external account before linking it to a new %s account.' => 'De externe dienst ("%s") die u zojuist hebt gebruikt om aan te melden is al gekoppeld aan een ander %s-gebruikersaccount. Meld u aan bij het andere %s-account en ontkoppel het externe account voordat u het aan een nieuw %s-account koppelt.',
  'Before you can use this software, you need to add multi-factor authentication to your account. Multi-factor authentication helps secure your account by making it more difficult for attackers to gain access or take sensitive actions.' => 'Voordat u deze software kunt gebruiken, moet u multifactorauthenticatie aan uw account toevoegen. Multifactorauthenticatie helpt uw account te beveiligen door het moeilijker te maken voor aanvallers om toegang te krijgen of gevoelige handelingen uit te voeren.',
  'To configure Twitch.tv OAuth, create a new application here:

https://www.twitch.tv/settings/applications

When creating your application, use these settings:

  - **Redirect URI:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Om Twitch.tv OAuth te configureren, maakt u hier een nieuwe applicatie aan:

https://www.twitch.tv/settings/applications

Gebruik bij het aanmaken van uw applicatie deze instellingen:

  - **Redirect-URI:** Stel dit in op: `%s`

Kopieer na het voltooien van de configuratie het **Client-ID** en het **Clientgeheim** naar de bovenstaande velden. (Mogelijk moet u eerst het clientgeheim genereren door op \'Nieuw geheim\' te klikken.)',
  'Session has already signed required legalpad documents!' => 'Sessie heeft de vereiste legalpad-documenten al ondertekend!',
  'On the plus side, that purple notification bubble will disappear.' => 'Aan de positieve kant zal die paarse meldingsballon verdwijnen.',
  'This account ("%s") can not establish web sessions, so it is not possible to generate a functional recovery link. Special accounts like daemons and mailing lists can not log in via the web UI.' => 'Dit account ("%s") kan geen websessies opzetten, dus het is niet mogelijk om een functionele herstelkoppeling te genereren. Speciale accounts zoals daemons en mailinglijsten kunnen niet aanmelden via de webinterface.',
  'Revoke credentials of the given type.' => 'Aanmeldgegevens van het opgegeven type intrekken.',
  'This private key is not formatted correctly. Check that you have provided the complete text of a valid private key.' => 'Deze privésleutel is niet correct opgemaakt. Controleer of u de volledige tekst van een geldige privésleutel hebt opgegeven.',
  'Expected valid JSON response from Disqus account data request.' => 'Geldig JSON-antwoord verwacht van Disqus-accountgegevensverzoek.',
  'LDAP Port' => 'LDAP-poort',
  'Really trust this PKCS8 keyfile?' => 'Dit PKCS8-sleutelbestand echt vertrouwen?',
  '%s updated the OAuth consumer key for this provider from "%s" to "%s".' => '%s heeft de OAuth-consumentsleutel voor deze provider bijgewerkt van "%s" naar "%s".',
  'Contact number is already in use.' => 'Contactnummer is al in gebruik.',
  'No such user "%s" to recover.' => 'Geen gebruiker "%s" gevonden om te herstellen.',
  'Expected \'%s\' to be \'%s\'!' => 'Verwachtte dat \'%s\' gelijk was aan \'%s\'!',
  'No public key was provided.' => 'Er is geen publieke sleutel opgegeven.',
  'Log In with LDAP' => 'Aanmelden met LDAP',
  'Expected verifier to finish OAuth handshake!' => 'Verificatie verwacht om de OAuth-handshake te voltooien!',
  'Specify the credential type to revoke with "--type" or specify "--everything". Use "--list" to list available credential types.' => 'Geef het type aanmeldgegevens op dat ingetrokken moet worden met "--type" of geef "--everything" op. Gebruik "--list" om beschikbare typen aanmeldgegevens weer te geven.',
  'Start TLS after binding to the LDAP server.' => 'TLS starten na het verbinden met de LDAP-server.',
  'Duo providers must have an API hostname.' => 'Duo-providers moeten een API-hostnaam hebben.',
  'TOTP Code' => 'TOTP-code',
  'Invalid response token for this challenge: token digest does not match stored digest.' => 'Onjuist antwoordtoken voor deze uitdaging: de tokendigest komt niet overeen met de opgeslagen digest.',
  'OAuth Consumer Key' => 'OAuth-consumentsleutel',
  'Another user already has that username.' => 'Een andere gebruiker heeft die gebruikersnaam al.',
  'Account Not Refreshable' => 'Account niet vernieuwbaar',
  'You can only recover the username for one account.' => 'U kunt alleen de gebruikersnaam voor één account herstellen.',
  'There are no matching tokens to revoke.' => 'Er zijn geen overeenkomende tokens om in te trekken.',
  '%s disabled email trust.' => '%s heeft e-mailvertrouwen uitgeschakeld.',
  'Too Short' => 'Te kort',
  'You denied this request. Wait %s second(s) to try again.' => 'U hebt dit verzoek geweigerd. Wacht %s seconde(n) om het opnieuw te proberen.',
  'Guidance included in the mail message body when users request an email link to access their account.

For installs with password authentication enabled, users access this workflow by using the "Forgot your password?" link on the login screen.

For installs without password authentication enabled, users access this workflow by using the "Send a login link to your email address." link on the login screen. This workflow allows users to recover access to their account if there is an issue with an external login service.' => 'Begeleiding opgenomen in de berichttekst van de e-mail wanneer gebruikers een e-mailkoppeling aanvragen om toegang te krijgen tot hun account.

Voor installaties met wachtwoordauthenticatie ingeschakeld, gebruiken gebruikers deze workflow via de koppeling "Wachtwoord vergeten?" op het aanmeldscherm.

Voor installaties zonder wachtwoordauthenticatie ingeschakeld, gebruiken gebruikers deze workflow via de koppeling "Stuur een aanmeldkoppeling naar uw e-mailadres." op het aanmeldscherm. Deze workflow stelt gebruikers in staat om toegang tot hun account te herstellen als er een probleem is met een externe aanmelddienst.',
  'The selected password is very weak: it is one of the most common passwords in use. Choose a stronger password.' => 'Het gekozen wachtwoord is erg zwak: het is een van de meest gebruikte wachtwoorden. Kies een sterker wachtwoord.',
  'LDAP Username: ' => 'LDAP-gebruikersnaam:',
  'That email address is not verified, but the account it is connected to has at least one other verified address. When an account has at least one verified address, you can only send password reset links to one of the verified addresses. Try a verified address instead.' => 'Dat e-mailadres is niet geverifieerd, maar het account waaraan het is gekoppeld heeft ten minste één ander geverifieerd adres. Wanneer een account ten minste één geverifieerd adres heeft, kunt u alleen wachtwoordherstelkoppelingen naar een van de geverifieerde adressen sturen. Probeer in plaats daarvan een geverifieerd adres.',
  'Not Distinct' => 'Niet uniek',
  'Allow users to log in using this provider. If you disable login, users can still use account integrations for this provider.' => 'Gebruikers toestaan om aan te melden met deze provider. Als u aanmelden uitschakelt, kunnen gebruikers nog steeds accountintegraties voor deze provider gebruiken.',
  'Allow Login:' => 'Aanmelden toestaan:',
  'Terminate Session?' => 'Sessie beëindigen?',
  '%s (%s) MFA Code: %s' => '%s (%s) MFA-code: %s',
  'Wrong Account' => 'Verkeerd account',
  'Refresh tokens for a given user.' => 'Tokens vernieuwen voor een opgegeven gebruiker.',
  'Status ("%s") is not a valid contact number status. Valid status constants are: %s.' => 'Status ("%s") is geen geldige contactnummerstatus. Geldige statusconstanten zijn: %s.',
  'Already Registered' => 'Al geregistreerd',
  'SECURITY WARNING' => 'BEVEILIGINGSWAARSCHUWING',
  'This public key is already associated with another user or device. Each key must unambiguously identify a single unique owner.' => 'Deze publieke sleutel is al gekoppeld aan een andere gebruiker of apparaat. Elke sleutel moet ondubbelzinnig één unieke eigenaar identificeren.',
  'Allow users to unlink account credentials for this provider from existing accounts. If you disable this, accounts will be permanently bound to provider accounts.' => 'Gebruikers toestaan om accountaanmeldgegevens voor deze provider te ontkoppelen van bestaande accounts. Als u dit uitschakelt, worden accounts permanent gebonden aan provideraccounts.',
  'When you need to authenticate, a request will be pushed to the Duo application on your phone.' => 'Wanneer u zich moet authenticeren, wordt een verzoek naar de Duo-applicatie op uw telefoon gestuurd.',
  'SMS is weak, and relatively easy for attackers to compromise. Strongly consider using a different MFA provider.' => 'SMS is zwak en relatief eenvoudig voor aanvallers om te compromitteren. Overweeg sterk om een andere MFA-provider te gebruiken.',
  'Revoke credentials without prompting.' => 'Aanmeldgegevens intrekken zonder bevestiging.',
  '%s set the OAuth consumer secret for this provider.' => '%s heeft het OAuth-consumentgeheim voor deze provider ingesteld.',
  'You are logged in as %s, but the email address (%s) you just clicked a link from is already associated with another account (%s). You can log out to switch accounts, or verify the address and attach it to your current account. Attach email address %s to user account %s?' => 'U bent aangemeld als %s, maar het e-mailadres (%s) waarvan u zojuist een koppeling hebt aangeklikt is al gekoppeld aan een ander account (%s). U kunt afmelden om van account te wisselen, of het adres verifiëren en aan uw huidige account koppelen. E-mailadres %s koppelen aan gebruikersaccount %s?',
  'NOTE: Any user who can browse to this install\'s login page will be able to register an account. To restrict who can register an account, configure [[ %s | %s ]].' => 'OPMERKING: Elke gebruiker die naar de aanmeldpagina van deze installatie kan navigeren, kan een account registreren. Om te beperken wie een account kan registreren, configureert u [[ %s | %s ]].',
  'Auth Provider %d' => 'Authenticatieprovider %d',
  'Set Test Message' => 'Testbericht instellen',
  'Contact number is invalid: %s' => 'Contactnummer is onjuist: %s',
  'To configure WordPress.com OAuth, create a new WordPress.com Application here:

https://developer.wordpress.com/apps/new/.

You should use these settings in your application:

  - **URL:** Set this to your full domain with protocol. For this     server, the correct value is: `%s`
  - **Redirect URL**: Set this to: `%s`


Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'Om WordPress.com OAuth te configureren, maakt u hier een nieuwe WordPress.com-applicatie aan:

https://developer.wordpress.com/apps/new/.

Gebruik deze instellingen in uw applicatie:

  - **URL:** Stel dit in op uw volledige domein met protocol. Voor deze server is de juiste waarde: `%s`
  - **Redirect-URL**: Stel dit in op: `%s`


Kopieer na het aanmaken van een applicatie het **Client-ID** en het **Clientgeheim** naar de bovenstaande velden.',
  'Username Attribute' => 'Gebruikersnaamattribuut',
  'To configure Disqus OAuth, create a new application here:

https://disqus.com/api/applications/

Create an application, then adjust these settings:

  - **Callback URL:** Set this to `%s`

After creating an application, copy the **Public Key** and **Secret Key** to the fields above (the **Public Key** goes in **OAuth App ID**).' => 'Om Disqus OAuth te configureren, maakt u hier een nieuwe applicatie aan:

https://disqus.com/api/applications/

Maak een applicatie aan en pas vervolgens deze instellingen aan:

  - **Callback-URL:** Stel dit in op `%s`

Kopieer na het aanmaken van een applicatie de **Publieke sleutel** en de **Geheime sleutel** naar de bovenstaande velden (de **Publieke sleutel** gaat in **OAuth-app-ID**).',
  'Unlink Your Only Login Account?' => 'Uw enige aanmeldaccount ontkoppelen?',
  'Specify an OAuth client id with "--id".' => 'Geef een OAuth-client-ID op met "--id".',
  'Your account has no primary contact number.' => 'Uw account heeft geen primair contactnummer.',
  'JIRA base URI is required.' => 'JIRA-basis-URI is vereist.',
  'Config Locked' => 'Configuratie vergrendeld',
  'Attempted to set \'%s\' cookie to \'%s\', but your browser sent back a cookie with the value \'%s\'. Clear your browser\'s cookies and try again.' => 'Er is geprobeerd de cookie \'%s\' in te stellen op \'%s\', maar uw browser stuurde een cookie terug met de waarde \'%s\'. Wis de cookies van uw browser en probeer het opnieuw.',
  'Recover directly into a full session without requiring MFA or other login checks.' => 'Direct herstellen naar een volledige sessie zonder MFA of andere aanmeldcontroles te vereisen.',
  'Always bind and search, even without a username and password.' => 'Altijd binden en zoeken, zelfs zonder gebruikersnaam en wachtwoord.',
  'Skipping, provider is not enabled or does not exist.' => 'Overslaan, provider is niet ingeschakeld of bestaat niet.',
  'Does Not Allow Registration' => 'Staat registratie niet toe',
  '%s

To configure Amazon OAuth, create a new \'API Project\' here:

https://developer.amazon.com/apps-and-games/login-with-amazon

Use these settings:

  - **Allowed Return URLs:** Add this: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => '%s

Om Amazon OAuth te configureren, maakt u hier een nieuw \'API-project\' aan:

https://developer.amazon.com/apps-and-games/login-with-amazon

Gebruik deze instellingen:

  - **Toegestane retour-URL\'s:** Voeg dit toe: `%s`

Kopieer na het voltooien van de configuratie het **Client-ID** en het **Clientgeheim** naar de bovenstaande velden.',
  '/settings/panel/contact/' => '/settings/panel/contact/',
  'Path to corresponding PKCS8 key.' => 'Pad naar het bijbehorende PKCS8-sleutelbestand.',
  'Strength' => 'Sterkte',
  'Enter LDAP Credentials' => 'LDAP-aanmeldgegevens invoeren',
  'LDAP record query returned more than one result. The query must uniquely identify a record.' => 'LDAP-recordquery heeft meer dan één resultaat opgeleverd. De query moet een record uniek identificeren.',
  'Email record ("%s") has bad associated user PHID ("%s").' => 'E-mailrecord ("%s") heeft een foutieve gekoppelde gebruikers-PHID ("%s").',
  'This email address has already been verified.' => 'Dit e-mailadres is al geverifieerd.',
  'The password you entered is the same as another password associated with your account. Each password must be unique.' => 'Het wachtwoord dat u hebt ingevoerd is hetzelfde als een ander wachtwoord dat aan uw account is gekoppeld. Elk wachtwoord moet uniek zijn.',
  'The email address you just clicked a link from is already the primary email address for a registered account (%s). Log in to continue.' => 'Het e-mailadres waarvan u zojuist een koppeling hebt aangeklikt is al het primaire e-mailadres voor een geregistreerd account (%s). Meld u aan om door te gaan.',
  'Guidance shown on the main login screen before users log in or register.' => 'Begeleiding weergegeven op het hoofdaanmeldscherm voordat gebruikers zich aanmelden of registreren.',
  'Cache the PKCS8 format of a public key. When developing on OSX, this can be used to work around issues with ssh-keygen. Use `%s` to generate a PKCS8 key to feed to this command.' => 'De PKCS8-indeling van een publieke sleutel cachen. Bij het ontwikkelen op OSX kan dit worden gebruikt om problemen met ssh-keygen te omzeilen. Gebruik `%s` om een PKCS8-sleutel te genereren om aan dit commando te voeden.',
  'Revoke from all credential owners.' => 'Intrekken van alle eigenaren van aanmeldgegevens.',
  'Invite has invalid author PHID ("%s").' => 'Uitnodiging heeft een onjuiste auteur-PHID ("%s").',
  'Unable to Make Primary' => 'Kan niet als primair instellen',
  'Use lowercase letters, digits, and periods. For example: %s' => 'Gebruik kleine letters, cijfers en punten. Bijvoorbeeld: %s',
  'The response token for this challenge is invalid: response tokens may not include spaces.' => 'Het antwoordtoken voor deze uitdaging is onjuist: antwoordtokens mogen geen spaties bevatten.',
  'Anonymous Password' => 'Anoniem wachtwoord',
  'Use the button below to log in as: %s' => 'Gebruik de onderstaande knop om aan te melden als: %s',
  'Active OAuth Token' => 'Actief OAuth-token',
  'An authorization request will be pushed to the Duo application on your phone.' => 'Een autorisatieverzoek wordt naar de Duo-applicatie op uw telefoon gestuurd.',
  'Administrative approvals are disabled, so users who register will be able to use their accounts immediately. To enable approvals, configure %s.' => 'Beheerdersgoedkeuringen zijn uitgeschakeld, dus gebruikers die zich registreren kunnen hun accounts direct gebruiken. Om goedkeuringen in te schakelen, configureert u %s.',
  'Google' => 'Google',
  'You currently have multi-factor authentication ("%s") which depends on your primary contact number. You must remove this authentication factor before you can designate a new primary contact number.' => 'U hebt momenteel multifactorauthenticatie ("%s") die afhankelijk is van uw primaire contactnummer. U moet deze authenticatiefactor verwijderen voordat u een nieuw primair contactnummer kunt aanwijzen.',
  'Failed to decode OAuth access token response: %s' => 'Kan het OAuth-toegangstokenantwoord niet decoderen: %s',
  'Optionally, specify one or more comma-separated attributes to use to prefill the "Real Name" field when registering a new account. This is purely cosmetic and does not affect the login process, but can make registration a little easier.' => 'Geef optioneel een of meer door komma\'s gescheiden attributen op om het veld "Echte naam" vooraf in te vullen bij het registreren van een nieuw account. Dit is puur cosmetisch en heeft geen invloed op het aanmeldproces, maar kan de registratie iets eenvoudiger maken.',
  'Allow users to attach a mobile authenticator application (like 2FAS, Aegis, FreeOTP, or Bitwarden Authenticator) to their account.' => 'Gebruikers toestaan om een mobiele authenticatieapplicatie (zoals 2FAS, Aegis, FreeOTP of Bitwarden Authenticator) aan hun account te koppelen.',
  'You must enter an LDAP password.' => 'U moet een LDAP-wachtwoord invoeren.',
  'Generate New Keypair' => 'Nieuw sleutelpaar genereren',
  'MFA Provider' => 'MFA-provider',
  'The private key will not be retained.' => 'De privésleutel wordt niet bewaard.',
  'MFA Provider %d' => 'MFA-provider %d',
  'This challenge already has a response token; you can not set a new response token.' => 'Deze uitdaging heeft al een antwoordtoken; u kunt geen nieuw antwoordtoken instellen.',
  'Invite action is not a send action!' => 'Uitnodigingshandeling is geen verzendhandeling!',
  'This key is trusted. Trusted keys can not be edited. Use %s to revoke trust before editing the key.' => 'Deze sleutel is vertrouwd. Vertrouwde sleutels kunnen niet worden bewerkt. Gebruik %s om het vertrouwen in te trekken voordat u de sleutel bewerkt.',
  'Edit Message' => 'Bericht bewerken',
  'Expected valid JSON response from Facebook account data request.' => 'Geldig JSON-antwoord verwacht van Facebook-accountgegevensverzoek.',
  'Add Multi-Factor Auth' => 'Multifactorauthenticatie toevoegen',
  'The contact number.' => 'Het contactnummer.',
  'You must enter an LDAP username.' => 'U moet een LDAP-gebruikersnaam invoeren.',
  'Reached TOTP challenge validation with an unexpected number of unexpired challenges (%d), expected exactly one.' => 'TOTP-uitdagingsvalidatie bereikt met een onverwacht aantal niet-verlopen uitdagingen (%d), precies één verwacht.',
  'Refresh LDAP Account' => 'LDAP-account vernieuwen',
  'The password and confirmation do not match.' => 'Het wachtwoord en de bevestiging komen niet overeen.',
  'Reset action counters so a user can continue taking rate-limited actions.' => 'Handelingstellers resetten zodat een gebruiker door kan gaan met snelheidsbeperkte handelingen.',
  '%s disabled this contact number.' => '%s heeft dit contactnummer uitgeschakeld.',
  'To configure GitHub OAuth, create a new GitHub Application here:

https://github.com/settings/applications/new

You should use these settings in your application:

  - **URL:** Set this to your full domain with protocol. For this     server, the correct value is: `%s`
  - **Callback URL**: Set this to: `%s`


Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'Om GitHub OAuth te configureren, maakt u hier een nieuwe GitHub-applicatie aan:

https://github.com/settings/applications/new

Gebruik deze instellingen in uw applicatie:

  - **URL:** Stel dit in op uw volledige domein met protocol. Voor deze server is de juiste waarde: `%s`
  - **Callback-URL**: Stel dit in op: `%s`


Kopieer na het aanmaken van een applicatie het **Client-ID** en het **Clientgeheim** naar de bovenstaande velden.',
  'No Providers Configured:' => 'Geen providers geconfigureerd:',
  'If you continue, you will create a new account. You will not be able to link this external account to an existing account.' => 'Als u doorgaat, maakt u een nieuw account aan. U kunt dit externe account niet aan een bestaand account koppelen.',
  'A text message with an authorization code will be sent to your primary contact number.' => 'Een tekstbericht met een autorisatiecode wordt naar uw primaire contactnummer gestuurd.',
  'Revokes all stored passwords.

Account passwords and VCS passwords (used to access repositories over HTTP) will both be revoked. Passwords for any third party applications which use shared password infrastructure will also be revoked.

Users will need to reset account passwords, possibly by using the "Forgot Password?" link on the login page. They will also need to reset VCS passwords.

Passwords are revoked, not just removed. Users will be unable to select the passwords they used previously and must choose new, unique passwords.

Revoking passwords will not terminate outstanding login sessions. Use the "session" revoker in conjunction with this revoker to force users to login again.' => 'Trekt alle opgeslagen wachtwoorden in.

Accountwachtwoorden en VCS-wachtwoorden (gebruikt om via HTTP toegang te krijgen tot repository\'s) worden beide ingetrokken. Wachtwoorden voor applicaties van derden die gedeelde wachtwoordinfrastructuur gebruiken worden ook ingetrokken.

Gebruikers moeten accountwachtwoorden resetten, mogelijk door de koppeling "Wachtwoord vergeten?" op de aanmeldpagina te gebruiken. Ze moeten ook VCS-wachtwoorden resetten.

Wachtwoorden worden ingetrokken, niet alleen verwijderd. Gebruikers kunnen de wachtwoorden die ze eerder gebruikten niet opnieuw selecteren en moeten nieuwe, unieke wachtwoorden kiezen.

Het intrekken van wachtwoorden beëindigt geen lopende aanmeldsessies. Gebruik de "sessie"-intrekker in combinatie met deze intrekker om gebruikers te dwingen opnieuw aan te melden.',
  '%s set the OAuth consumer key for this provider to "%s".' => '%s heeft de OAuth-consumentsleutel voor deze provider ingesteld op "%s".',
  'Guidance in the message body when users set a password on an account which did not previously have a password.' => 'Begeleiding in de berichttekst wanneer gebruikers een wachtwoord instellen op een account dat eerder geen wachtwoord had.',
  'Connecting to LDAP...' => 'Verbinden met LDAP...',
  'Wait' => 'Wachten',
  'No matching SSH keys.' => 'Geen overeenkomende SSH-sleutels.',
  'Use %s Username' => '%s-gebruikersnaam gebruiken',
  'Authentication Error' => 'Authenticatiefout',
  'A keypair has been generated, and the public key has been added as a recognized key.' => 'Er is een sleutelpaar gegenereerd en de publieke sleutel is toegevoegd als herkende sleutel.',
  '%s named this provider %s.' => '%s heeft deze provider %s genoemd.',
  'You may optionally customize the enrollment message users are presented with by providing a replacement message below:' => 'U kunt optioneel het registratiebericht dat aan gebruikers wordt weergegeven aanpassen door hieronder een vervangend bericht op te geven:',
  'Mail Body: Email Login' => 'E-mailtekst: e-mailaanmelding',
  'Send a test message to %s?' => 'Een testbericht naar %s sturen?',
  'Auth' => 'Authenticatie',
  'Confirm the link with this %s account. This account will be able to log in to your %s account.' => 'Bevestig de koppeling met dit %s-account. Dit account kan aanmelden bij uw %s-account.',
  '**JIRA Instance Name**

Choose a permanent name for this instance of JIRA. This name is used internally to keep track of this particular instance of JIRA, in case the URL changes later.

Use lowercase letters, digits, and period. For example, `jira`, `jira.mycompany` or `jira.engineering` are reasonable names.' => '**JIRA-instantienaam**

Kies een permanente naam voor deze instantie van JIRA. Deze naam wordt intern gebruikt om deze specifieke instantie van JIRA bij te houden, voor het geval de url later wijzigt.

Gebruik kleine letters, cijfers en punten. Bijvoorbeeld `jira`, `jira.mijnbedrijf` of `jira.engineering` zijn redelijke namen.',
  'Text Message (SMS)' => 'Tekstbericht (SMS)',
  '%s removed the name (%s) of this provider.' => '%s heeft de naam (%s) van deze provider verwijderd.',
  'The PHP \'openssl\' extension is not installed. You must install this extension in order to add a JIRA authentication provider, because JIRA OAuth requests use the RSA-SHA1 signing algorithm. Install the \'openssl\' extension, restart everything, and try again.' => 'De PHP-uitbreiding \'openssl\' is niet geïnstalleerd. U moet deze uitbreiding installeren om een JIRA-authenticatieprovider toe te voegen, omdat JIRA OAuth-verzoeken het RSA-SHA1-ondertekeningsalgoritme gebruiken. Installeer de \'openssl\'-uitbreiding, herstart alles en probeer het opnieuw.',
  'Provided public key is not properly formatted.' => 'De opgegeven publieke sleutel is niet correct opgemaakt.',
  'Multi-Factor Authentication is Misconfigured' => 'Multifactorauthenticatie is verkeerd geconfigureerd',
  '(You can not terminate your current login session. To terminate it, log out.)' => '(U kunt uw huidige aanmeldsessie niet beëindigen. Om deze te beëindigen, meldt u zich af.)',
  'Your account has been created, but needs to be approved by an administrator. You\'ll receive an email once your account is approved.' => 'Uw account is aangemaakt, maar moet worden goedgekeurd door een beheerder. U ontvangt een e-mail zodra uw account is goedgekeurd.',
  'Newly issued MFA challenges must have a future TTL. This factor issued a bad TTL ("%s"). (Did you use a relative time instead of an epoch?)' => 'Nieuw uitgegeven MFA-uitdagingen moeten een toekomstige TTL hebben. Deze factor heeft een foutieve TTL uitgegeven ("%s"). (Hebt u een relatieve tijd gebruikt in plaats van een epoch?)',
  'Yes (Optional)' => 'Ja (optioneel)',
  'Access token error: %s' => 'Toegangstokenfout: %s',
  'The URI where the OAuth server is installed. For example: %s' => 'De URI waar de OAuth-server is geïnstalleerd. Bijvoorbeeld: %s',
  'Cached PKCS8 key for public key.' => 'PKCS8-sleutel voor publieke sleutel gecachet.',
  'Username Change Instructions' => 'Instructies voor het wijzigen van de gebruikersnaam',
  'Custom Enroll Message' => 'Aangepast registratiebericht',
  'You must verify your email address to log in. You should have a new email message with verification instructions in your inbox (%s).' => 'U moet uw e-mailadres verifiëren om aan te melden. U zou een nieuw e-mailbericht met verificatie-instructies in uw postvak (%s) moeten hebben.',
  'Refreshing token, current token expires in %s seconds.' => 'Token wordt vernieuwd, huidig token verloopt over %s seconden.',
  'Allows Registration' => 'Staat registratie toe',
  'Duo' => 'Duo',
  'Application ID is required.' => 'Applicatie-ID is vereist.',
  'You do not have a linked account on this provider, and thus can not refresh it.' => 'U hebt geen gekoppeld account bij deze provider en kunt het daarom niet vernieuwen.',
  'Use the **OAuth App Notes** field to record details about which account the external application is registered under.' => 'Gebruik het veld **OAuth-app-opmerkingen** om details vast te leggen over onder welk account de externe applicatie is geregistreerd.',
  'firstname, lastname' => 'voornaam, achternaam',
  'Minimum length of %d characters.' => 'Minimale lengte is %d tekens.',
  'This provider does not allow refreshing.' => 'Deze provider staat vernieuwen niet toe.',
  'One-Time Login Token' => 'Eenmalig aanmeldtoken',
  '%s revoked this password.' => '%s heeft dit wachtwoord ingetrokken.',
  'The id of the OAuth client.' => 'Het ID van de OAuth-client.',
  'Newly issued MFA challenges must have a valid TTL!' => 'Nieuw uitgegeven MFA-uitdagingen moeten een geldige TTL hebben!',
  'Target "%s" is not a valid target to revoke credentials from. Usually, revoke from "@username".' => 'Doel "%s" is geen geldig doel om aanmeldgegevens van in te trekken. Gewoonlijk trekt u in van "@gebruikersnaam".',
  '%d-Bit Secret' => '%d-bits geheim',
  'Duo is not requiring a challenge, which defeats the purpose of MFA. Duo must be configured to challenge you.' => 'Duo vereist geen uitdaging, wat het doel van MFA tenietdoet. Duo moet geconfigureerd zijn om u uit te dagen.',
  'Remove trust from an OAuth client. Users must manually confirm reauthorization of untrusted OAuth clients.' => 'Vertrouwen van een OAuth-client verwijderen. Gebruikers moeten herautorisatie van niet-vertrouwde OAuth-clients handmatig bevestigen.',
  'The email address you just clicked a link from is already associated with a registered account (%s), but is not verified. Log in to that account to continue. If you can not log in, you can register a new account.' => 'Het e-mailadres waarvan u zojuist een koppeling hebt aangeklikt is al gekoppeld aan een geregistreerd account (%s), maar is niet geverifieerd. Meld u aan bij dat account om door te gaan. Als u niet kunt aanmelden, kunt u een nieuw account registreren.',
  'You are destroying an entire class of credentials. This may be very disruptive to users. You should normally do this only if you suspect there has been a widespread compromise which may have impacted everyone.' => 'U vernietigt een hele klasse aanmeldgegevens. Dit kan zeer verstorend zijn voor gebruikers. U zou dit normaal gesproken alleen moeten doen als u vermoedt dat er een wijdverbreide inbreuk is geweest die iedereen kan hebben getroffen.',
  'If you want to link an existing %s account to this external account, do not continue. Instead: log in to your existing account, then go to "Settings" and link the account in the "External Accounts" panel.' => 'Als u een bestaand %s-account aan dit externe account wilt koppelen, ga dan niet verder. In plaats daarvan: meld u aan bij uw bestaande account, ga naar "Instellingen" en koppel het account in het paneel "Externe accounts".',
  'You responded to this challenge correctly.' => 'U hebt correct op deze uitdaging gereageerd.',
  'Specify either specific factors with "--provider", or all factors with "--all-types", but not both.' => 'Geef specifieke factoren op met "--provider" of alle factoren met "--all-types", maar niet beide.',
  'To add a TOTP factor to your account, you will first need to install a mobile authenticator application on your phone. Some applications which work well are **Aegis**, **2FAS**, **FreeOTP**, **Bitwarden Authenticator**, **Google Authenticator**, and **Authy**, but any other TOTP application should work.

If you haven\'t already, download and install a TOTP application on your phone now. Once you\'ve launched the application and are ready to add a new TOTP code, continue to the next step.' => 'Om een TOTP-factor aan uw account toe te voegen, moet u eerst een mobiele authenticatieapplicatie op uw telefoon installeren. Enkele applicaties die goed werken zijn **Aegis**, **2FAS**, **FreeOTP**, **Bitwarden Authenticator**, **Google Authenticator** en **Authy**, maar elke andere TOTP-applicatie zou moeten werken.

Als u dat nog niet hebt gedaan, download en installeer nu een TOTP-applicatie op uw telefoon. Zodra u de applicatie hebt gestart en klaar bent om een nieuwe TOTP-code toe te voegen, gaat u verder naar de volgende stap.',
  'Special users like daemons and mailing lists are not permitted to log in via the web. Log in as a normal user instead.' => 'Speciale gebruikers zoals daemons en mailinglijsten mogen niet aanmelden via het web. Meld u in plaats daarvan aan als een normale gebruiker.',
  'Login Screen Instructions' => 'Instructies op het aanmeldscherm',
  'Mail Body: Welcome' => 'E-mailtekst: welkom',
  'Revoke Token?' => 'Token intrekken?',
  'Asana' => 'Asana',
  'MFA' => 'MFA',
  'Terminate all login sessions.' => 'Alle aanmeldsessies beëindigen.',
  'Send Another Email' => 'Nog een e-mail versturen',
  'You and other users on this install are collectively sending too many test text messages too quickly. Wait a few minutes to continue texting tests.' => 'U en andere gebruikers op deze installatie sturen gezamenlijk te veel testtekstberichten te snel. Wacht een paar minuten om door te gaan met het versturen van testberichten.',
  'Failed to find an OAuth client with ID %s.' => 'Kan geen OAuth-client vinden met ID %s.',
  'Allow Account Linking' => 'Accountkoppeling toestaan',
  'Provider names can not be longer than %s characters.' => 'Providernamen mogen niet langer zijn dan %s tekens.',
  'No Account Linked' => 'Geen account gekoppeld',
  'Allow users to link account credentials for this provider to existing accounts. There is normally no reason to disable this unless you are trying to move away from a provider and want to stop users from creating new account links.' => 'Gebruikers toestaan om accountaanmeldgegevens voor deze provider aan bestaande accounts te koppelen. Er is normaal gesproken geen reden om dit uit te schakelen, tenzij u van een provider af wilt stappen en wilt voorkomen dat gebruikers nieuwe accountkoppelingen aanmaken.',
  'Slack' => 'Slack',
  'This request improperly specifies an MFA challenge token ("%s") multiple times and can not be processed.' => 'Dit verzoek specificeert een MFA-uitdagingstoken ("%s") onjuist meerdere keren en kan niet worden verwerkt.',
  'You recently provided a response to this factor. Responses may not be reused. Wait %s second(s) for the code to cycle, then try again.' => 'U hebt onlangs een antwoord op deze factor gegeven. Antwoorden mogen niet worden hergebruikt. Wacht %s seconde(n) tot de code wisselt en probeer het opnieuw.',
  'Refresh OAuth access tokens. This is primarily useful for development and debugging.' => 'OAuth-toegangstokens vernieuwen. Dit is voornamelijk nuttig voor ontwikkeling en foutopsporing.',
  'The OAuth provider returned an error: %s' => 'De OAuth-provider heeft een fout geretourneerd: %s',
  'Registration Failed' => 'Registratie mislukt',
  'Unable to Verify Email' => 'Kan e-mail niet verifiëren',
  'Public SSH Key' => 'Publieke SSH-sleutel',
  'Username and password are required!' => 'Gebruikersnaam en wachtwoord zijn vereist!',
  'Disqus' => 'Disqus',
  'Add MFA Provider' => 'MFA-provider toevoegen',
  'Expected \'%s\' in request!' => '\'%s\' verwacht in verzoek!',
  '%s updated the OAuth application notes for this provider.' => '%s heeft de OAuth-applicatieopmerkingen voor deze provider bijgewerkt.',
  '%s updated the "%s" value.' => '%s heeft de waarde "%s" bijgewerkt.',
  'Installation is complete. Register your administrator account below to log in. You will be able to configure options and add authentication mechanisms later on.' => 'De installatie is voltooid. Registreer hieronder uw beheerdersaccount om aan te melden. U kunt later opties configureren en authenticatiemechanismen toevoegen.',
  'This request has timed out because you took too long to respond.' => 'Dit verzoek is verlopen omdat u te lang hebt gewacht met reageren.',
  'All Keys' => 'Alle sleutels',
  'The external account you are registering with has an email address that is already in use ("%s") by an existing %s account. Choose a new, valid email address to register a new account.' => 'Het externe account waarmee u zich registreert heeft een e-mailadres dat al in gebruik is ("%s") door een bestaand %s-account. Kies een nieuw, geldig e-mailadres om een nieuw account te registreren.',
  'Terminate Sessions' => 'Sessies beëindigen',
  'Upload Public Key' => 'Publieke sleutel uploaden',
  'OAuth App Notes' => 'OAuth-app-opmerkingen',
  'You have failed too many attempts to synchronize new multi-factor authentication methods in a short period of time.' => 'U hebt te veel pogingen om nieuwe multifactorauthenticatiemethoden te synchroniseren in een korte periode mislukt.',
  'Expected token to finish OAuth handshake!' => 'Token verwacht om de OAuth-handshake te voltooien!',
  'Unable to start TLS connection when connecting to LDAP.' => 'Kan geen TLS-verbinding starten bij het verbinden met LDAP.',
  'Authentication provider configuration is locked, and can not be changed without being unlocked.' => 'De configuratie van de authenticatieprovider is vergrendeld en kan niet worden gewijzigd zonder ontgrendeling.',
  'Factor type "%s" is unknown. Use `bin/auth list-factors` to get a list of known factor types.' => 'Factortype "%s" is onbekend. Gebruik `bin/auth list-factors` om een lijst van bekende factortypen te krijgen.',
  'Log In (%s)' => 'Aanmelden (%s)',
  'Skip This Step' => 'Deze stap overslaan',
  'Do you want to disable this provider? Users will not be able to register or log in using linked accounts. If there are any users without other linked authentication mechanisms, they will no longer be able to log in. If you disable all providers, no one will be able to log in.' => 'Wilt u deze provider uitschakelen? Gebruikers kunnen zich niet meer registreren of aanmelden met gekoppelde accounts. Als er gebruikers zijn zonder andere gekoppelde authenticatiemechanismen, kunnen zij niet meer aanmelden. Als u alle providers uitschakelt, kan niemand meer aanmelden.',
  'Status of the MFA provider.' => 'Status van de MFA-provider.',
  'Duo API Hostname' => 'Duo API-hostnaam',
  'Login Failure' => 'Aanmelding mislukt',
  'Custom instructions included in "Welcome" mail when an administrator creates a user account.' => 'Aangepaste instructies opgenomen in de "Welkom"-e-mail wanneer een beheerder een gebruikersaccount aanmaakt.',
  'NOTE: Revoking passwords does not terminate existing sessions which were established using the old passwords. To terminate existing sessions, run the "session" revoker now.' => 'OPMERKING: Het intrekken van wachtwoorden beëindigt geen bestaande sessies die zijn opgezet met de oude wachtwoorden. Om bestaande sessies te beëindigen, voert u nu de "sessie"-intrekker uit.',
  '%s enabled account linking.' => '%s heeft accountkoppeling ingeschakeld.',
  'Scan this QR code with the Duo application on your mobile phone:' => 'Scan deze QR-code met de Duo-applicatie op uw mobiele telefoon:',
  'Contact Number %d' => 'Contactnummer %d',
  'Account Already Linked' => 'Account al gekoppeld',
  'Another user already has that email.' => 'Een andere gebruiker heeft dat e-mailadres al.',
  'You already have a provider of this type.' => 'U hebt al een provider van dit type.',
  '%s You have not added authentication providers yet. Use "%s" to add a provider, which will let users register new accounts and log in.' => '%s U hebt nog geen authenticatieproviders toegevoegd. Gebruik "%s" om een provider toe te voegen, waarmee gebruikers nieuwe accounts kunnen registreren en aanmelden.',
  'Type of the MFA provider.' => 'Type van de MFA-provider.',
  'Your account has been disabled.' => 'Uw account is uitgeschakeld.',
  'JIRA base URI should include protocol (like "https://").' => 'JIRA-basis-URI moet het protocol bevatten (zoals "https://").',
  'Authentication provider ("%s") encountered an error while attempting to log in. %s' => 'Authenticatieprovider ("%s") heeft een fout ondervonden bij het aanmelden. %s',
  'There are no matching factors to strip.' => 'Er zijn geen overeenkomende factoren om te verwijderen.',
  'The invite code in the link you clicked is invalid. Check that you followed the link correctly.' => 'De uitnodigingscode in de koppeling die u hebt aangeklikt is onjuist. Controleer of u de koppeling correct hebt gevolgd.',
  'Mark an OAuth client as trusted. Trusted OAuth clients may be reauthorized without requiring users to manually confirm the action.' => 'Een OAuth-client als vertrouwd markeren. Vertrouwde OAuth-clients kunnen opnieuw worden geautoriseerd zonder dat gebruikers de handeling handmatig hoeven te bevestigen.',
  'Twitter' => 'Twitter',
  'Unable to Generate Keys' => 'Kan geen sleutels genereren',
  'Specify the target to revoke credentials from with "--from" or specify "--everywhere".' => 'Geef het doel op waarvan aanmeldgegevens ingetrokken moeten worden met "--from" of geef "--everywhere" op.',
  'Unlocked the authentication provider configuration.' => 'De configuratie van de authenticatieprovider is ontgrendeld.',
  'You can link your %s account to an external account to allow you to log in more easily in the future. To continue, choose an account to link below. If you prefer not to link your account, you can skip this step.' => 'U kunt uw %s-account koppelen aan een extern account zodat u in de toekomst eenvoudiger kunt aanmelden. Om door te gaan, kiest u hieronder een account om te koppelen. Als u uw account liever niet koppelt, kunt u deze stap overslaan.',
  'Log In or Register with LDAP' => 'Aanmelden of registreren met LDAP',
  'Expected JSON response from Duo.' => 'JSON-antwoord verwacht van Duo.',
  'Display name for the MFA provider.' => 'Weergavenaam voor de MFA-provider.',
  'Revoke Public Key' => 'Publieke sleutel intrekken',
  'You (or someone pretending to be you) recently requested an account recovery link be sent to this email address. If you did not make this request, you can ignore this message.' => 'U (of iemand die zich voordoet als u) hebt onlangs gevraagd om een accountherstelkoppeling naar dit e-mailadres te sturen. Als u dit verzoek niet hebt gedaan, kunt u dit bericht negeren.',
  'Use Primary Email Address' => 'Primair e-mailadres gebruiken',
  'Server Name' => 'Servernaam',
  'If you lose access to your account, you can recover access by sending yourself an email login link from the login screen.' => 'Als u de toegang tot uw account verliest, kunt u de toegang herstellen door uzelf een e-mailaanmeldkoppeling te sturen vanaf het aanmeldscherm.',
  'Login validation is missing expected parameter ("%s").' => 'Aanmeldvalidatie mist de verwachte parameter ("%s").',
  'Customize Messages' => 'Berichten aanpassen',
  'Next Step' => 'Volgende stap',
  'You can not unlink this account because the administrator has configured this server to make links to "%s" accounts permanent.' => 'U kunt dit account niet ontkoppelen omdat de beheerder deze server heeft geconfigureerd om koppelingen naar "%s"-accounts permanent te maken.',
  'Designate %s as your primary contact number?' => '%s aanwijzen als uw primaire contactnummer?',
  'Message Preview' => 'Berichtvoorbeeld',
  'This engine is used to edit MFA providers.' => 'Deze engine wordt gebruikt om MFA-providers te bewerken.',
  '%s enabled account unlinking.' => '%s heeft het ontkoppelen van accounts ingeschakeld.',
  'The email address %s is now verified.' => 'Het e-mailadres %s is nu geverifieerd.',
  'This factor recently issued a challenge for a different workflow. Wait %s second(s) for the code to cycle, then try again.' => 'Deze factor heeft onlangs een uitdaging uitgegeven voor een andere workflow. Wacht %s seconde(n) tot de code wisselt en probeer het opnieuw.',
  'Send SMS' => 'SMS versturen',
  '%s disabled this provider.' => '%s heeft deze provider uitgeschakeld.',
  'Not Installed' => 'Niet geïnstalleerd',
  'Your browser did not submit a "%s" cookie with client state information in the request. Check that cookies are enabled. If this problem persists, you may need to clear your cookies.' => 'Uw browser heeft geen "%s"-cookie met clientstatusinformatie in het verzoek meegestuurd. Controleer of cookies zijn ingeschakeld. Als dit probleem aanhoudt, moet u mogelijk uw cookies wissen.',
  'Found %s account(s) to refresh.' => '%s account(s) gevonden om te vernieuwen.',
  'You have not activated this enrollment in the Duo application on your phone yet. Complete activation, then click continue.' => 'U hebt deze registratie in de Duo-applicatie op uw telefoon nog niet geactiveerd. Voltooi de activering en klik vervolgens op doorgaan.',
  'This factor recently issued a challenge to a different login session. Wait %s second(s) for the code to cycle, then try again.' => 'Deze factor heeft onlangs een uitdaging uitgegeven aan een andere aanmeldsessie. Wacht %s seconde(n) tot de code wisselt en probeer het opnieuw.',
  'ERROR: You are making a Conduit API request to "%s", but the correct HTTP request path to use in order to access a Conduit method is "%s" (for example, "%s"). Check your configuration.' => 'FOUT: U doet een Conduit API-verzoek naar "%s", maar het juiste HTTP-verzoekpad om een Conduit-methode te benaderen is "%s" (bijvoorbeeld "%s"). Controleer uw configuratie.',
  '%s updated the enroll message.' => '%s heeft het registratiebericht bijgewerkt.',
  'You currently have multi-factor authentication ("%s") which depends on your primary contact number. You must remove this authentication factor before you can modify or disable your primary contact number.' => 'U hebt momenteel multifactorauthenticatie ("%s") die afhankelijk is van uw primaire contactnummer. U moet deze authenticatiefactor verwijderen voordat u uw primaire contactnummer kunt wijzigen of uitschakelen.',
  'Duo API hostname ("%s") is invalid, hostname must be "*.duosecurity.com".' => 'Duo API-hostnaam ("%s") is onjuist, hostnaam moet "*.duosecurity.com" zijn.',
  'Send a login link to your email address.' => 'Een aanmeldkoppeling naar uw e-mailadres sturen.',
  'Leave high security and return your session to normal security levels?' => 'Hoge beveiliging verlaten en uw sessie terugbrengen naar normale beveiligingsniveaus?',
  'OAuth App Secret' => 'OAuth-app-geheim',
  'Skipping, provider has no stored refresh token.' => 'Overslaan, provider heeft geen opgeslagen vernieuwingstoken.',
  'Really terminate session %s?' => 'Sessie %s echt beëindigen?',
  'Revokes all SSH public keys.

SSH public keys are revoked, not just removed. Users will need to generate and upload new, unique keys before they can access repositories or other services over SSH.' => 'Trekt alle publieke SSH-sleutels in.

Publieke SSH-sleutels worden ingetrokken, niet alleen verwijderd. Gebruikers moeten nieuwe, unieke sleutels genereren en uploaden voordat ze via SSH toegang kunnen krijgen tot repository\'s of andere diensten.',
  'Terminate Sessions?' => 'Sessies beëindigen?',
  '%s enabled email trust.' => '%s heeft e-mailvertrouwen ingeschakeld.',
  'End of dry run.' => 'Einde van de testrun.',
  'Choose Provider Type' => 'Providertype kiezen',
  'Revoke credentials which may have been leaked or disclosed.' => 'Aanmeldgegevens intrekken die mogelijk zijn gelekt of openbaar gemaakt.',
  'Destroyed %s credential(s) of type "%s".' => '%s aanmeldgegeven(s) van type "%s" vernietigd.',
  'Server name is required.' => 'Servernaam is vereist.',
  'List information about available credential revokers.' => 'Informatie weergeven over beschikbare intrekkers van aanmeldgegevens.',
  'No message type exists with key "%s".' => 'Er bestaat geen berichttype met sleutel "%s".',
  'You will be prompted to provide MFA when you submit.' => 'U wordt gevraagd om MFA te verstrekken wanneer u indient.',
  '%s set the OAuth application ID for this provider to "%s".' => '%s heeft het OAuth-applicatie-ID voor deze provider ingesteld op "%s".',
  'To configure Google OAuth, create a new \'API Project\' here:

https://console.developers.google.com/

Adjust these configuration settings for your project:

  - Under **APIs & auth > APIs**, scroll down the list and enable     the **Google+ API**.
     - You will need to consent to the **Google+ API** terms if you  have not before.
  - Under **APIs & auth > Credentials**, click **Create New Client    ID** in the **OAuth** section. Then use these settings:
     - **Application Type**: Web Application
     - **Authorized Javascript origins**: Leave this empty.
     - **Authorized redirect URI**: Set this to `%s`.


After completing configuration, copy the **Client ID** and **Client Secret** from the Google console to the fields above.' => 'Om Google OAuth te configureren, maakt u hier een nieuw \'API-project\' aan:

https://console.developers.google.com/

Pas deze configuratie-instellingen aan voor uw project:

  - Onder **API\'s & auth > API\'s**, scroll naar beneden in de lijst en schakel de **Google+ API** in.
     - U moet akkoord gaan met de **Google+ API**-voorwaarden als u dat nog niet eerder hebt gedaan.
  - Onder **API\'s & auth > Aanmeldgegevens**, klik op **Nieuw client-ID aanmaken** in het **OAuth**-gedeelte. Gebruik vervolgens deze instellingen:
     - **Applicatietype**: Webapplicatie
     - **Geautoriseerde Javascript-origins**: Laat dit leeg.
     - **Geautoriseerde redirect-URI**: Stel dit in op `%s`.


Kopieer na het voltooien van de configuratie het **Client-ID** en het **Clientgeheim** van de Google-console naar de bovenstaande velden.',
  'Skipping, provider does not support token refresh.' => 'Overslaan, provider ondersteunt geen tokenvernieuwing.',
  'This factor has been removed from your device, so this server can not send you a challenge. To continue, an administrator must strip this factor from your account.' => 'Deze factor is van uw apparaat verwijderd, dus deze server kan u geen uitdaging sturen. Om door te gaan moet een beheerder deze factor van uw account verwijderen.',
  'Attempting to upgrade password hasher, but the password for the upgrade is not the stored credential!' => 'Poging om de wachtwoordhasher te upgraden, maar het wachtwoord voor de upgrade is niet de opgeslagen aanmeldgegevens!',
  'Your Duo account ("%s") requires enrollment. Contact your Duo administrator for help. Duo status message: %s' => 'Uw Duo-account ("%s") vereist registratie. Neem contact op met uw Duo-beheerder voor hulp. Duo-statusbericht: %s',
  'The OAuth provider failed to retrieve an account ID.' => 'De OAuth-provider kon geen account-ID ophalen.',
  'Reset action counters for this user.' => 'Handelingstellers voor deze gebruiker resetten.',
  'Edit SSH Key' => 'SSH-sleutel bewerken',
  'Attempting to set an empty password!' => 'Poging om een leeg wachtwoord in te stellen!',
  '%s changed this contact number from %s to %s.' => '%s heeft dit contactnummer gewijzigd van %s naar %s.',
  'Welcome, %s. To complete the process of logging in, provide your multi-factor credentials.' => 'Welkom, %s. Om het aanmeldproces te voltooien, verstrekt u uw multifactoraanmeldgegevens.',
  'Already Accepted Invite' => 'Uitnodiging al geaccepteerd',
  'No user exists with username "%s".' => 'Er bestaat geen gebruiker met de gebruikersnaam "%s".',
  'Unlock the authentication provider config, to make it possible to edit the config using the web UI. Make sure to do **bin/auth lock** when done editing the configuration.' => 'De configuratie van de authenticatieprovider ontgrendelen, zodat het mogelijk is om de configuratie via de webinterface te bewerken. Zorg ervoor dat u **bin/auth lock** uitvoert wanneer u klaar bent met het bewerken van de configuratie.',
  'Account does not match provider!' => 'Account komt niet overeen met provider!',
  'Too many account recovery email links have been sent to this account in a short period of time.' => 'Er zijn te veel accountherstel-e-mailkoppelingen naar dit account gestuurd in een korte periode.',
  'Account Not Linkable' => 'Account niet koppelbaar',
  'ou=People, dc=example, dc=com' => 'ou=People, dc=example, dc=com',
  'Strip a specific factor type. Use `bin/auth list-factors` for a list of factor types.' => 'Een specifiek factortype verwijderen. Gebruik `bin/auth list-factors` voor een lijst van factortypen.',
  'Provide Multi-Factor Credentials' => 'Multifactoraanmeldgegevens verstrekken',
  'Edit Contact Numbers' => 'Contactnummers bewerken',
  'Skip email verification for accounts registered through this provider.' => 'E-mailverificatie overslaan voor accounts die via deze provider zijn geregistreerd.',
  '[%s] New User "%s" Awaiting Approval' => '[%s] Nieuwe gebruiker "%s" wacht op goedkeuring',
  'You have failed to enter the correct account password too often in a short period of time.' => 'U hebt te vaak het verkeerde accountwachtwoord ingevoerd in een korte periode.',
  'Add Multi-Factor Authentication' => 'Multifactorauthenticatie toevoegen',
  'JIRA instance name must contain only lowercase letters, digits, and period.' => 'JIRA-instantienaam mag alleen kleine letters, cijfers en punten bevatten.',
  'The external service ("%s") you just authenticated with is not configured to allow account linking on this server. An administrator may have recently disabled it.' => 'De externe dienst ("%s") waarmee u zich zojuist hebt geauthenticeerd is niet geconfigureerd om accountkoppeling op deze server toe te staan. Een beheerder heeft dit mogelijk onlangs uitgeschakeld.',
  'Terminate Session' => 'Sessie beëindigen',
  'You must choose a password.' => 'U moet een wachtwoord kiezen.',
  'Failed to find an OAuth client with id %s.' => 'Kan geen OAuth-client vinden met ID %s.',
  'This engine is used to edit contact numbers.' => 'Deze engine wordt gebruikt om contactnummers te bewerken.',
  'You can not set the response digest for a challenge directly. Instead, set a response token. A response digest will be computed automatically.' => 'U kunt de antwoorddigest voor een uitdaging niet direct instellen. Stel in plaats daarvan een antwoordtoken in. Een antwoorddigest wordt automatisch berekend.',
  '%s created this contact number.' => '%s heeft dit contactnummer aangemaakt.',
  'Duo providers must have an API credential.' => 'Duo-providers moeten een API-aanmeldgegeven hebben.',
  'You can only verify one address at a time.' => 'U kunt slechts één adres tegelijk verifiëren.',
  'SSH Key %d' => 'SSH-sleutel %d',
  'Public key type should be one of: %s' => 'Het type publieke sleutel moet een van de volgende zijn: %s',
  'CHANGES TO MESSAGE' => 'WIJZIGINGEN AAN BERICHT',
  'App Code' => 'App-code',
  'Duo API Credential' => 'Duo API-aanmeldgegeven',
  '%s edited a property of this provider.' => '%s heeft een eigenschap van deze provider bewerkt.',
  'Auth Email Invites' => 'Authenticatie-e-mailuitnodigingen',
  'Address Verified' => 'Adres geverifieerd',
  'To verify your phone as an authentication factor, a text message with a secret code will be sent to the phone number you have listed as your primary contact number.' => 'Om uw telefoon als authenticatiefactor te verifiëren, wordt een tekstbericht met een geheime code naar het telefoonnummer gestuurd dat u als uw primaire contactnummer hebt opgegeven.',
  'DISABLE APPROVAL QUEUE' => 'GOEDKEURINGSWACHTRIJ UITSCHAKELEN',
  'Specify either specific factors with "--type", or all factors with "--all-types", but not both.' => 'Geef specifieke factoren op met "--type" of alle factoren met "--all-types", maar niet beide.',
  'No OAuth Access Token' => 'Geen OAuth-toegangstoken',
  'Your account is already linked to an external account for this provider.' => 'Uw account is al gekoppeld aan een extern account voor deze provider.',
  'You are already logged in.' => 'U bent al aangemeld.',
  'Wait For Approval Instructions' => 'Instructies voor wachten op goedkeuring',
  'Link LDAP Account' => 'LDAP-account koppelen',
  'ldap.example.com' => 'ldap.example.com',
  'This password is associated with an object PHID ("%s") for a different object than the provided one ("%s").' => 'Dit wachtwoord is gekoppeld aan een object-PHID ("%s") voor een ander object dan het opgegeven object ("%s").',
  'Disable Number' => 'Nummer uitschakelen',
  'Username or Email' => 'Gebruikersnaam of e-mailadres',
  'Your %s account is already connected to an external account on this service ("%s"), but you are currently logged in to the service with a different account. Log out of the external service, then log back in with the correct account before refreshing the account link.' => 'Uw %s-account is al verbonden met een extern account op deze dienst ("%s"), maar u bent momenteel aangemeld bij de dienst met een ander account. Meld u af bij de externe dienst en meld u vervolgens opnieuw aan met het juiste account voordat u de accountkoppeling vernieuwt.',
  'Verify this email address (%s) and attach it to your account (%s)?' => 'Dit e-mailadres (%s) verifiëren en aan uw account (%s) koppelen?',
  'Revoke SSH Public Key' => 'Publieke SSH-sleutel intrekken',
  'Edit MFA Providers' => 'MFA-providers bewerken',
  'Before you can set up or use LDAP, you need to install the PHP LDAP extension. It is not currently installed, so PHP can not talk to LDAP. Usually you can install it with `%s`, `%s`, or a similar package manager command.' => 'Voordat u LDAP kunt instellen of gebruiken, moet u de PHP LDAP-uitbreiding installeren. Deze is momenteel niet geïnstalleerd, dus PHP kan niet communiceren met LDAP. Gewoonlijk kunt u het installeren met `%s`, `%s` of een vergelijkbaar pakketbeheercommando.',
  '%s failed!' => '%s is mislukt!',
  'This server is configured with an email domain whitelist (in %s), so only users with a verified email address at one of these %s allowed domain(s) will be able to register an account: %s' => 'Deze server is geconfigureerd met een witte lijst voor e-maildomeinen (in %s), dus alleen gebruikers met een geverifieerd e-mailadres bij een van deze %s toegestane domein(en) kunnen een account registreren: %s',
  'To configure Slack OAuth, create a new application here:

https://api.slack.com/docs/sign-in-with-slack#create_slack_app

When creating your application, use these settings:

  - **Redirect URI:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Om Slack OAuth te configureren, maakt u hier een nieuwe applicatie aan:

https://api.slack.com/docs/sign-in-with-slack#create_slack_app

Gebruik bij het aanmaken van uw applicatie deze instellingen:

  - **Redirect-URI:** Stel dit in op: `%s`

Kopieer na het voltooien van de configuratie het **Client-ID** en het **Clientgeheim** naar de bovenstaande velden. (Mogelijk moet u eerst het clientgeheim genereren door op \'Nieuw geheim\' te klikken.)',
  'A challenge has been sent to your phone. Open the Duo application and confirm the challenge, then continue.' => 'Er is een uitdaging naar uw telefoon gestuurd. Open de Duo-applicatie en bevestig de uitdaging, en ga vervolgens verder.',
  'Amazon' => 'Amazon',
  'MFA Sync Token' => 'MFA-synchronisatietoken',
  'OAuth client "%s" is now trusted.' => 'OAuth-client "%s" is nu vertrouwd.',
  'Your browser did not submit a registration key with the request. You must use the same browser to begin and complete registration. Check that cookies are enabled and try again.' => 'Uw browser heeft geen registratiesleutel met het verzoek meegestuurd. U moet dezelfde browser gebruiken om de registratie te beginnen en te voltooien. Controleer of cookies zijn ingeschakeld en probeer het opnieuw.',
  'Not Complete' => 'Niet voltooid',
  '**Step 1 of 2 - Name Remote Server**

Choose a permanent name for the remote server you want to connect to. This name is used internally to keep track of the remote server, in case the URL changes later.' => '**Stap 1 van 2 - Externe server benoemen**

Kies een permanente naam voor de externe server waarmee u verbinding wilt maken. Deze naam wordt intern gebruikt om de externe server bij te houden, voor het geval de url later wijzigt.',
  'Unlink Account' => 'Account ontkoppelen',
  'You must specify the path to a public keyfile with %s.' => 'U moet het pad naar een publiek sleutelbestand opgeven met %s.',
  'Remove multi-factor authentication from an account.' => 'Multifactorauthenticatie van een account verwijderen.',
  'Edit Existing Provider' => 'Bestaande provider bewerken',
  '%s changed the credential for this provider from %s to %s.' => '%s heeft het aanmeldgegeven voor deze provider gewijzigd van %s naar %s.',
  'You are creating a new account linked to an existing external account.' => 'U maakt een nieuw account aan dat is gekoppeld aan een bestaand extern account.',
  'Signing session legalpad documents of user with no session!' => 'Legalpad-documenten van sessie ondertekenen voor gebruiker zonder sessie!',
  'This is the only external login account linked to your account. If you remove it, you may no longer be able to log in.' => 'Dit is het enige externe aanmeldaccount dat aan uw account is gekoppeld. Als u het verwijdert, kunt u mogelijk niet meer aanmelden.',
  '%s updated the message text.' => '%s heeft de berichttekst bijgewerkt.',
  'NOTE: Amazon **requires** HTTPS, but this service does not use HTTPS. **You will not be able to add Amazon as an authentication provider until you configure HTTPS on this install**.' => 'OPMERKING: Amazon **vereist** HTTPS, maar deze dienst gebruikt geen HTTPS. **U kunt Amazon niet als authenticatieprovider toevoegen totdat u HTTPS op deze installatie configureert**.',
  'Verify this email address (%s) and attach it to your account?' => 'Dit e-mailadres (%s) verifiëren en aan uw account koppelen?',
  'No Linkable External Providers' => 'Geen koppelbare externe providers',
  'This account is not linkable.' => 'Dit account is niet koppelbaar.',
  'Allow Unlinking Accounts' => 'Ontkoppelen van accounts toestaan',
  'This request included an improperly formatted MFA challenge token and can not be processed.' => 'Dit verzoek bevatte een onjuist opgemaakt MFA-uitdagingstoken en kan niet worden verwerkt.',
  'Contact numbers can not be longer than %s characters.' => 'Contactnummers mogen niet langer zijn dan %s tekens.',
  'OAuth1 Account' => 'OAuth1-account',
  'Customized' => 'Aangepast',
  'When you need to authenticate, a text message with a code will be sent to your phone.' => 'Wanneer u zich moet authenticeren, wordt een tekstbericht met een code naar uw telefoon gestuurd.',
  '"%s" Account' => '"%s"-account',
  'Password Reset' => 'Wachtwoord resetten',
  'Expected valid JSON response from Amazon account data request.' => 'Geldig JSON-antwoord verwacht van Amazon-accountgegevensverzoek.',
  'Revoked SSH keys can not be edited or reinstated.' => 'Ingetrokken SSH-sleutels kunnen niet worden bewerkt of hersteld.',
  'Follow referrals. Disable this for Windows AD 2003.' => 'Verwijzingen volgen. Schakel dit uit voor Windows AD 2003.',
  'WARNING: You have not configured any authentication providers yet, so your account has no login credentials. If you log out now, you will not be able to log back in normally.' => 'WAARSCHUWING: U hebt nog geen authenticatieproviders geconfigureerd, dus uw account heeft geen aanmeldgegevens. Als u zich nu afmeldt, kunt u niet meer normaal aanmelden.',
  'If you do not recognize this change, it may indicate your account has been compromised.' => 'Als u deze wijziging niet herkent, kan dit erop wijzen dat uw account is gecompromitteerd.',
  'Link Accounts' => 'Accounts koppelen',
  'Create Admin Account' => 'Beheerdersaccount aanmaken',
  'Create MFA Provider' => 'MFA-provider aanmaken',
  'Log Out?' => 'Afmelden?',
  'You have not configured a primary contact number. Configure a contact number before adding SMS as an authentication factor.' => 'U hebt geen primair contactnummer geconfigureerd. Configureer een contactnummer voordat u SMS als authenticatiefactor toevoegt.',
  'Unlink External Account' => 'Extern account ontkoppelen',
  '%s made this the primary contact number.' => '%s heeft dit het primaire contactnummer gemaakt.',
  'Automatically log in with this provider if it is the only available provider.' => 'Automatisch aanmelden met deze provider als het de enige beschikbare provider is.',
  '%s changed the enrollment policy for this provider from %s to %s.' => '%s heeft het registratiebeleid voor deze provider gewijzigd van %s naar %s.',
  'Currently, there are no configured external auth providers which you can link your account to.' => 'Momenteel zijn er geen geconfigureerde externe authenticatieproviders waaraan u uw account kunt koppelen.',
  '%s disabled account linking.' => '%s heeft accountkoppeling uitgeschakeld.',
  'Number Already Primary' => 'Nummer is al primair',
  'Strip these authentication factors?' => 'Deze authenticatiefactoren verwijderen?',
  'The OAuth provider did not return a "code" parameter in its response.' => 'De OAuth-provider heeft geen "code"-parameter in het antwoord geretourneerd.',
  'Your Duo account ("%s") has not completed Duo enrollment. Check your email and complete enrollment to continue.' => 'Uw Duo-account ("%s") heeft de Duo-registratie niet voltooid. Controleer uw e-mail en voltooi de registratie om door te gaan.',
  'Locked the authentication provider configuration.' => 'De configuratie van de authenticatieprovider is vergrendeld.',
  'Specify the target to revoke credentials from with "--from" or specify "--everywhere", but not both.' => 'Geef het doel op waarvan aanmeldgegevens ingetrokken moeten worden met "--from" of geef "--everywhere" op, maar niet beide.',
  'Your browser submitted a different registration key than the one associated with this account. You may need to clear your cookies.' => 'Uw browser heeft een andere registratiesleutel ingediend dan de sleutel die aan dit account is gekoppeld. Mogelijk moet u uw cookies wissen.',
  'Log in to %s' => 'Aanmelden bij %s',
  'Make Primary Number' => 'Primair nummer maken',
  'Strip factors from all users.' => 'Factoren van alle gebruikers verwijderen.',
  'Duo username pairing mode ("%s") is not supported.' => 'Duo-gebruikersnaamkoppelingsmodus ("%s") wordt niet ondersteund.',
  'Facebook' => 'Facebook',
  'Really revoke all tokens? Among other temporary authorizations, this will disable any outstanding password reset or account recovery links.' => 'Echt alle tokens intrekken? Naast andere tijdelijke autorisaties worden hiermee alle openstaande wachtwoordherstel- of accountherstelkoppelingen uitgeschakeld.',
  'LDAP Version' => 'LDAP-versie',
  'APPROVAL QUEUE' => 'GOEDKEURINGSWACHTRIJ',
  '%s removed this password from the revocation list.' => '%s heeft dit wachtwoord van de intrekkingslijst verwijderd.',
  'Lock authentication provider config, to prevent changes to the config without doing **bin/auth unlock**.' => 'Configuratie van de authenticatieprovider vergrendelen, om wijzigingen aan de configuratie te voorkomen zonder **bin/auth unlock** uit te voeren.',
  'To configure Asana OAuth, create a new application here:

https://app.asana.com/-/account_api

When creating your application, use these settings:

  - **App URL:** Set this to: `%s`
  - **Redirect URL:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => 'Om Asana OAuth te configureren, maakt u hier een nieuwe applicatie aan:

https://app.asana.com/-/account_api

Gebruik bij het aanmaken van uw applicatie deze instellingen:

  - **App-URL:** Stel dit in op: `%s`
  - **Redirect-URL:** Stel dit in op: `%s`

Kopieer na het voltooien van de configuratie het **Client-ID** en het **Clientgeheim** naar de bovenstaande velden.',
  'After you download the private key, it will be destroyed. You will not be able to retrieve it if you lose your copy.' => 'Nadat u de privésleutel hebt gedownload, wordt deze vernietigd. U kunt deze niet meer ophalen als u uw kopie verliest.',
  'After logging in you should set a password for your account, or link your account to an external account that you can use to authenticate in the future.' => 'Na het aanmelden moet u een wachtwoord voor uw account instellen, of uw account koppelen aan een extern account dat u in de toekomst kunt gebruiken om te authenticeren.',
  'Analyze and diagnose issues with LDAP configuration.' => 'Problemen met LDAP-configuratie analyseren en diagnosticeren.',
  'Your session is no longer in high security.' => 'Uw sessie is niet langer in hoge beveiliging.',
  'Revoked' => 'Ingetrokken',
  'Disable the contact number %s?' => 'Contactnummer %s uitschakelen?',
  'Factor Name: %s' => 'Factornaam: %s',
  'Providers' => 'Providers',
  'Address Duplicated in Input' => 'Adres gedupliceerd in invoer',
  'Scan the QR code or manually enter the key shown below into the application.' => 'Scan de QR-code of voer de hieronder weergegeven sleutel handmatig in de applicatie in.',
  'The account you are attempting to register with uses a disabled authentication provider ("%s"). An administrator may have recently disabled this provider.' => 'Het account waarmee u zich probeert te registreren gebruikt een uitgeschakelde authenticatieprovider ("%s"). Een beheerder heeft deze provider mogelijk onlangs uitgeschakeld.',
  'Register an Account' => 'Een account registreren',
  'Can Not Edit Trusted Key' => 'Kan vertrouwde sleutel niet bewerken',
  'OAuth App ID' => 'OAuth-app-ID',
  'Invites are visible to administrators, the inviting user, users with an invite code, and the user who accepts the invite.' => 'Uitnodigingen zijn zichtbaar voor beheerders, de uitnodigende gebruiker, gebruikers met een uitnodigingscode en de gebruiker die de uitnodiging accepteert.',
  'Specified public keyfile "%s" does not exist!' => 'Opgegeven publiek sleutelbestand "%s" bestaat niet!',
  'You must specify the email to verify.' => 'U moet het te verifiëren e-mailadres opgeven.',
  'The key "%s" will be permanently revoked, and you will no longer be able to use the corresponding private key to authenticate.' => 'De sleutel "%s" wordt permanent ingetrokken en u kunt de bijbehorende privésleutel niet meer gebruiken om te authenticeren.',
  'TOTP' => 'TOTP',
  'Configure %s OAuth.' => '%s OAuth configureren.',
  'Refreshing account #%d.' => 'Account #%d wordt vernieuwd.',
  'You can not make a disabled number your primary contact number.' => 'U kunt een uitgeschakeld nummer niet als uw primaire contactnummer instellen.',
  'Failed to bind to LDAP server (as user "%s").' => 'Kan niet binden aan LDAP-server (als gebruiker "%s").',
  'Configure a connection to an LDAP server so that users can use their LDAP credentials to log in.' => 'Een verbinding met een LDAP-server configureren zodat gebruikers hun LDAP-aanmeldgegevens kunnen gebruiken om aan te melden.',
  'No email exists with address "%s"!' => 'Er bestaat geen e-mail met adres "%s"!',
  'Revoke SSH Key' => 'SSH-sleutel intrekken',
  'The email address associated with this external account ("%s") is not a valid email address and can not be used to register an account. Choose a different, valid address.' => 'Het e-mailadres dat aan dit externe account is gekoppeld ("%s") is geen geldig e-mailadres en kan niet worden gebruikt om een account te registreren. Kies een ander, geldig adres.',
  'OAuth client "%s" is already untrusted.' => 'OAuth-client "%s" is al niet-vertrouwd.',
  'Onboarding' => 'Onboarding',
  'Request did not include account key.' => 'Verzoek bevatte geen accountsleutel.',
  'Account Disabled' => 'Account uitgeschakeld',
  'JIRA instance name is required.' => 'JIRA-instantienaam is vereist.',
  'Mail Body: Set Password' => 'E-mailtekst: wachtwoord instellen',
  'LDAP Password' => 'LDAP-wachtwoord',
  'Edit SSH Public Key' => 'Publieke SSH-sleutel bewerken',
  'Generated' => 'Gegenereerd',
  '%s updated the OAuth application secret for this provider.' => '%s heeft het OAuth-applicatiegeheim voor deze provider bijgewerkt.',
  'Base URI' => 'Basis-URI',
  'Leaving High Security' => 'Hoge beveiliging verlaten',
  'Consumer key is required.' => 'Consumentsleutel is vereist.',
  'Username or password are incorrect.' => 'Gebruikersnaam of wachtwoord is onjuist.',
  'Attempted to set \'%s\' cookie to \'%s\', but your browser did not accept the cookie. Check that cookies are enabled, clear them, and try again.' => 'Er is geprobeerd de cookie \'%s\' in te stellen op \'%s\', maar uw browser heeft de cookie niet geaccepteerd. Controleer of cookies zijn ingeschakeld, wis ze en probeer het opnieuw.',
  'Unable to load Duo API credential ("%s").' => 'Kan Duo API-aanmeldgegeven ("%s") niet laden.',
  'The authentication provider did not return a client state parameter in its response, but one was expected. If this problem persists, you may need to clear your cookies.' => 'De authenticatieprovider heeft geen clientstatusparameter in het antwoord geretourneerd, maar er werd er een verwacht. Als dit probleem aanhoudt, moet u mogelijk uw cookies wissen.',
  'One-Time Login' => 'Eenmalige aanmelding',
  'NOTE: This provider **only supports JIRA 6**. It will not work with JIRA 5 or earlier.' => 'OPMERKING: Deze provider **ondersteunt alleen JIRA 6**. Het werkt niet met JIRA 5 of eerder.',
  'SSH key name is required.' => 'SSH-sleutelnaam is vereist.',
  'Revokes all active login sessions.

Affected users will be logged out and need to log in again.' => 'Trekt alle actieve aanmeldsessies in.

Getroffen gebruikers worden afgemeld en moeten opnieuw aanmelden.',
  'Consumer secret is required.' => 'Consumentgeheim is vereist.',
  'Address Error' => 'Adresfout',
  'Password authentication is not enabled and you are already logged in. There is nothing for you here.' => 'Wachtwoordauthenticatie is niet ingeschakeld en u bent al aangemeld. Er is hier niets voor u.',
  'Strip factors without prompting.' => 'Factoren verwijderen zonder bevestiging.',
  'Auth Message' => 'Authenticatiebericht',
  'Auth Challenge' => 'Authenticatie-uitdaging',
  'No Matching Sessions' => 'Geen overeenkomende sessies',
  'Expected "newResultFromIssuedChallenges()" to return null or an object of class "%s"; got something else (in "%s").' => 'Verwachtte dat "newResultFromIssuedChallenges()" null of een object van klasse "%s" zou retourneren; kreeg iets anders (in "%s").',
  'Auth provider failed to load an account from %s!' => 'Authenticatieprovider kon geen account laden van %s!',
  'Provider Enabled' => 'Provider ingeschakeld',
  'Newly registered user "%s" is awaiting account approval by an administrator.' => 'Nieuw geregistreerde gebruiker "%s" wacht op accountgoedkeuring door een beheerder.',
  'Unable to connect to LDAP server (%s:%d).' => 'Kan geen verbinding maken met LDAP-server (%s:%d).',
  'There are no matching sessions to terminate.' => 'Er zijn geen overeenkomende sessies om te beëindigen.',
  'No accounts match the arguments!' => 'Geen accounts komen overeen met de argumenten!',
  'Register New Account' => 'Nieuw account registreren',
  'SSH KEY DETAIL' => 'SSH-SLEUTELDETAILS',
  'Recover access to an account if you have locked yourself out.' => 'Toegang tot een account herstellen als u uzelf hebt buitengesloten.',
  'Failed to convert public key into PKCS8 format. If you are developing on OSX, you may be able to use `%s` to work around this issue. %s' => 'Kan publieke sleutel niet converteren naar PKCS8-indeling. Als u op OSX ontwikkelt, kunt u mogelijk `%s` gebruiken om dit probleem te omzeilen. %s',
  'Send Test Message' => 'Testbericht versturen',
  'An email has been sent containing a link you can use to set a password for your account.' => 'Er is een e-mail verstuurd met een koppeling die u kunt gebruiken om een wachtwoord voor uw account in te stellen.',
  'Are you sure you want to log out?' => 'Weet u zeker dat u zich wilt afmelden?',
  '(WARNING) Examine the table below for information on how password hashes will be stored in the database.

(NOTE) You can select a minimum password length by setting `%s` in configuration.' => '(WAARSCHUWING) Bekijk de onderstaande tabel voor informatie over hoe wachtwoordhashes in de database worden opgeslagen.

(OPMERKING) U kunt een minimale wachtwoordlengte selecteren door `%s` in de configuratie in te stellen.',
  'Link Account' => 'Account koppelen',
  'Login/Registration' => 'Aanmelden/registreren',
  'List available multi-factor authentication providers.' => 'Beschikbare multifactorauthenticatieproviders weergeven.',
  'List available multi-factor authentication factors.' => 'Beschikbare multifactorauthenticatiefactoren weergeven.',
  'Account Recovery' => 'Accountherstel',
  'Multi-Factor Authentication Setup Complete' => 'Instelling van multifactorauthenticatie voltooid',
  'You changed the email address to a @wikimedia.org address but your External Account is not a WMF SUL account. Please log into mediawiki.org with your WMF SUL account (ending in "(WMF)" or "-WMF") provided to you by WMF ITS. Then register again in Phabricator. See also https://office.wikimedia.org/wiki/User_account_policy' => 'U hebt het e-mailadres gewijzigd naar een @wikimedia.org-adres, maar uw externe account is geen WMF SUL-account. Meld u aan bij mediawiki.org met uw WMF SUL-account (eindigend op "(WMF)" of "-WMF") dat u van WMF ITS hebt ontvangen. Registreer u vervolgens opnieuw in Phabricator. Zie ook https://office.wikimedia.org/wiki/User_account_policy',
  'Trusted' => 'Vertrouwd',
  'Expected "newResultFromChallengeResponse()" to return an object of class "%s"; got something else (in "%s").' => 'Verwachtte dat "newResultFromChallengeResponse()" een object van klasse "%s" zou retourneren; kreeg iets anders (in "%s").',
  'Allow Logins' => 'Aanmeldingen toestaan',
  'Domain' => 'Domein',
  'You must specify the path to a pkcs8 keyfile with %s.' => 'U moet het pad naar een PKCS8-sleutelbestand opgeven met %s.',
  'Email Sent' => 'E-mail verzonden',
  'Twitch.tv' => 'Twitch.tv',
  'This engine is used to edit authentication messages.' => 'Deze engine wordt gebruikt om authenticatieberichten te bewerken.',
  'Show factors, but do not strip them.' => 'Factoren weergeven, maar niet verwijderen.',
  'Pattern "%s" is not valid.' => 'Patroon "%s" is niet geldig.',
  'Add Multi-Factor Authentication To Your Account' => 'Multifactorauthenticatie aan uw account toevoegen',
  'Auth Providers' => 'Authenticatieproviders',
  'View Active Keys' => 'Actieve sleutels bekijken',
  'Auth Messages' => 'Authenticatieberichten',
  'Auth Password' => 'Authenticatiewachtwoord',
  'SSH Key %d: %s' => 'SSH-sleutel %d: %s',
  'The external account you just logged in with is not associated with a valid %s user account.' => 'Het externe account waarmee u zojuist bent aangemeld is niet gekoppeld aan een geldig %s-gebruikersaccount.',
  'Refreshed token, new token expires in %s seconds.' => 'Token vernieuwd, nieuw token verloopt over %s seconden.',
  'SMS' => 'SMS',
  '%s set the OAuth application secret for this provider.' => '%s heeft het OAuth-applicatiegeheim voor deze provider ingesteld.',
  'Reset %s action(s).' => '%s handeling(en) gereset.',
  'Address Already Verified' => 'Adres al geverifieerd',
  'OAuth client "%s" is already trusted.' => 'OAuth-client "%s" is al vertrouwd.',
  'When users click the "Change Username" action on their profile pages but do not have the required permissions, they will be presented with a message explaining that they are not authorized to make the edit.

You can optionally provide additional instructions here to help users request a username change, if there is someone specific they should contact or a particular workflow they should use.' => 'Wanneer gebruikers op de handeling "Gebruikersnaam wijzigen" op hun profielpagina\'s klikken maar niet de vereiste rechten hebben, krijgen ze een bericht te zien dat uitlegt dat ze niet geautoriseerd zijn om de bewerking uit te voeren.

U kunt hier optioneel aanvullende instructies geven om gebruikers te helpen een gebruikersnaamwijziging aan te vragen, als er iemand specifiek is met wie ze contact moeten opnemen of een bepaalde workflow die ze moeten gebruiken.',
  'You are trying to gain access to an account ("%s") that can not establish a web session.' => 'U probeert toegang te krijgen tot een account ("%s") dat geen websessie kan opzetten.',
  'Sent By' => 'Verzonden door',
  'You must approve the challenge which was sent to your phone. Open the Duo application and confirm the challenge, then continue.' => 'U moet de uitdaging goedkeuren die naar uw telefoon is gestuurd. Open de Duo-applicatie en bevestig de uitdaging, en ga vervolgens verder.',
  'Download Private Key (%s)' => 'Privésleutel downloaden (%s)',
  'Make sure you are copy-and-pasting the entire link into your browser. Login links are only valid for 24 hours, and can only be used once.' => 'Zorg ervoor dat u de volledige koppeling in uw browser kopieert en plakt. Aanmeldkoppelingen zijn slechts 24 uur geldig en kunnen maar één keer worden gebruikt.',
  '%s disabled login.' => '%s heeft aanmelden uitgeschakeld.',
  'Primary Number' => 'Primair nummer',
  'Unverified User Email' => 'Niet-geverifieerd e-mailadres van gebruiker',
  'Really revoke this token? Any temporary authorization it enables will be disabled.' => 'Dit token echt intrekken? Elke tijdelijke autorisatie die het mogelijk maakt wordt uitgeschakeld.',
  'The URI where JIRA is installed. For example: %s' => 'De URI waar JIRA is geïnstalleerd. Bijvoorbeeld: %s',
  'Set Account Password' => 'Accountwachtwoord instellen',
  'Forgot your password?' => 'Wachtwoord vergeten?',
  'Raw Address' => 'Onbewerkt adres',
  'Reset all counters.' => 'Alle tellers resetten.',
  'To access your account, provide your email address. An email with a login link will be sent to you.' => 'Om toegang te krijgen tot uw account, geeft u uw e-mailadres op. Er wordt een e-mail met een aanmeldkoppeling naar u gestuurd.',
  'Install Instructions' => 'Installatie-instructies',
  'You have made too many account recovery requests in a short period of time.' => 'U hebt te veel accountherstelverzoeken gedaan in een korte periode.',
  'Download Private Key' => 'Privésleutel downloaden',
  'Query public keys.' => 'Publieke sleutels opvragen.',
  'After logging in, you can use the "Auth" application to add or restore authentication providers and allow normal logins to succeed.' => 'Na het aanmelden kunt u de applicatie "Authenticatie" gebruiken om authenticatieproviders toe te voegen of te herstellen en normale aanmeldingen te laten slagen.',
  'Authentication Canceled' => 'Authenticatie geannuleerd',
  'Will Ignore Address' => 'Adres wordt genegeerd',
  'Custom text for the message.' => 'Aangepaste tekst voor het bericht.',
  'Number Disabled' => 'Nummer uitgeschakeld',
  '**Step 1 of 2**: Provide the name and URI for your JIRA install.

In the next step, you will configure JIRA.' => '**Stap 1 van 2**: Geef de naam en URI op voor uw JIRA-installatie.

In de volgende stap configureert u JIRA.',
  'You already have Duo authentication attached to your account for this provider.' => 'U hebt al Duo-authenticatie aan uw account gekoppeld voor deze provider.',
  'This Duo enrollment attempt is invalid or has expired ("%s"). Cancel the workflow and try again.' => 'Deze Duo-registratiepoging is onjuist of verlopen ("%s"). Annuleer de workflow en probeer het opnieuw.',
  'Login Required' => 'Aanmelden verplicht',
  'Sign With MFA' => 'Ondertekenen met MFA',
  'To choose a different primary contact number, make that number primary (instead of trying to demote this one).' => 'Om een ander primair contactnummer te kiezen, maakt u dat nummer primair (in plaats van te proberen dit nummer te degraderen).',
  '**Post a comment** in the JIRA task.' => '**Een opmerking plaatsen** in de JIRA-taak.',
  'Verified User Email' => 'Geverifieerd e-mailadres van gebruiker',
  'Email Login' => 'E-mailaanmelding',
  'Trust Email Addresses' => 'E-mailadressen vertrouwen',
  'Bitbucket' => 'Bitbucket',
  'Unable to find LDAP account!' => 'Kan het LDAP-account niet vinden!',
  'This workflow will generate a new SSH keypair, add the public key, and let you download the private key.' => 'Deze workflow genereert een nieuw SSH-sleutelpaar, voegt de publieke sleutel toe en laat u de privésleutel downloaden.',
  'To configure Facebook OAuth, create a new Facebook Application here:

https://developers.facebook.com/apps

You should use these settings in your application:

%s


After creating your new application, copy the **App ID** and **App Secret** to the fields above.' => 'Om Facebook OAuth te configureren, maakt u hier een nieuwe Facebook-applicatie aan:

https://developers.facebook.com/apps

Gebruik deze instellingen in uw applicatie:

%s


Kopieer na het aanmaken van uw nieuwe applicatie het **App-ID** en het **App-geheim** naar de bovenstaande velden.',
  'Too many login failures recently. You must submit a CAPTCHA with your login request.' => 'Te veel mislukte aanmeldpogingen onlangs. U moet een CAPTCHA indienen bij uw aanmeldverzoek.',
  'Specified pkcs8 keyfile "%s" does not exist!' => 'Opgegeven PKCS8-sleutelbestand "%s" bestaat niet!',
  'An email has been sent containing a link you can use to log in to your account.' => 'Er is een e-mail verstuurd met een koppeling die u kunt gebruiken om aan te melden bij uw account.',
  'You have already accepted this invitation.' => 'U hebt deze uitnodiging al geaccepteerd.',
  'You must choose a password or skip this step.' => 'U moet een wachtwoord kiezen of deze stap overslaan.',
  'This private key requires a passphrase, but the wrong passphrase was provided. Check that you supplied the correct key and passphrase.' => 'Deze privésleutel vereist een wachtwoordzin, maar de verkeerde wachtwoordzin is opgegeven. Controleer of u de juiste sleutel en wachtwoordzin hebt opgegeven.',
  'When users add a factor for this provider, they are given this enrollment guidance by default:' => 'Wanneer gebruikers een factor voor deze provider toevoegen, krijgen ze standaard deze registratiebegeleiding:',
  'CAPTCHA was not entered correctly.' => 'CAPTCHA is niet correct ingevoerd.',
  'Configure JIRA OAuth. NOTE: Only supports JIRA 6.' => 'JIRA OAuth configureren. OPMERKING: Ondersteunt alleen JIRA 6.',
  'If you did not receive an email, you can click the button below to try sending another one.' => 'Als u geen e-mail hebt ontvangen, kunt u op de onderstaande knop klikken om te proberen er nog een te versturen.',
  'Invite template does not include invite URI!' => 'Uitnodigingssjabloon bevat geen uitnodigings-URI!',
  'Password providers can\'t be linked.' => 'Wachtwoordproviders kunnen niet worden gekoppeld.',
  'Found LDAP Account: %s' => 'LDAP-account gevonden: %s',
  '%s reinstated this key.' => '%s heeft deze sleutel hersteld.',
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
Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.' => '**Stap 2 van 2**: In deze stap configureert u JIRA.

**Een JIRA-applicatie aanmaken**: Meld u aan bij JIRA en ga naar **Beheer**, vervolgens **Add-ons**, vervolgens **Applicatiekoppelingen**. Klik op de knop **Applicatiekoppeling toevoegen** en gebruik deze instellingen om een applicatie aan te maken:

  - **Server-URL**: `%s`
  - Klik vervolgens op **Volgende**. Op de tweede pagina:
  - **Applicatienaam**: `%s`
  - **Applicatietype**: `Generieke applicatie`
  - Klik vervolgens op **Aanmaken**.

**Uw applicatie configureren**: Zoek de applicatie die u zojuist hebt aangemaakt in de tabel en klik op de koppeling **Configureren** onder **Handelingen**. Selecteer **Inkomende authenticatie** en klik op het tabblad **OAuth** (dit is mogelijk standaard geselecteerd). Gebruik vervolgens deze instellingen:

  - **Consumentsleutel**: Stel dit in op de waarde "Consumentsleutel" in het bovenstaande formulier.
  - **Consumentnaam**: `%s`
  - **Publieke sleutel**: Stel dit in op de waarde "Publieke sleutel" in het bovenstaande formulier.
  - **Consument-callback-URL**: `%s`
Klik op **Opslaan** in JIRA. Authenticatie zou nu geconfigureerd moeten zijn en deze provider zou correct moeten werken.',
  'Confirm Account Link' => 'Accountkoppeling bevestigen',
  'Verify Email Address' => 'E-mailadres verifiëren',
  'Duo account ("%s") is fully enrolled.' => 'Duo-account ("%s") is volledig geregistreerd.',
  'You must log in to take this action.' => 'U moet aangemeld zijn om deze handeling uit te voeren.',
  '%s created this password.' => '%s heeft dit wachtwoord aangemaakt.',
  'Stay' => 'Blijven',
  'The account you are attempting to log in with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.' => 'Het account waarmee u probeert aan te melden gebruikt een niet-bestaande of uitgeschakelde authenticatieprovider (met sleutel "%s"). Een beheerder heeft deze provider mogelijk onlangs uitgeschakeld.',
  'Two authentication providers use the same provider key (\'%s\'). Each provider must be identified by a unique key.' => 'Twee authenticatieproviders gebruiken dezelfde providersleutel (\'%s\'). Elke provider moet worden geïdentificeerd door een unieke sleutel.',
  'Duo (%s)' => 'Duo (%s)',
  'Create a New Account' => 'Nieuw account aanmaken',
  'Example: %s%sFor LDAPS, use: %s' => 'Voorbeeld: %s%sVoor LDAPS, gebruik: %s',
  'A completed challenge was provided as an answered challenge. The underlying factor is implemented improperly, challenges may not be reused.' => 'Een voltooide uitdaging is opgegeven als een beantwoorde uitdaging. De onderliggende factor is onjuist geïmplementeerd, uitdagingen mogen niet worden hergebruikt.',
  'There is no account associated with that email address.' => 'Er is geen account gekoppeld aan dat e-mailadres.',
  'Revoke Token' => 'Token intrekken',
  'Refresh Account Link' => 'Accountkoppeling vernieuwen',
  'Enable Referrals' => 'Verwijzingen inschakelen',
  'The LDAP extension is not enabled.' => 'De LDAP-uitbreiding is niet ingeschakeld.',
  'Will Send Invite' => 'Uitnodiging wordt verstuurd',
  'Can Manage Auth Providers' => 'Kan authenticatieproviders beheren',
  'There are no registered session engine extensions.' => 'Er zijn geen geregistreerde sessie-engine-uitbreidingen.',
  'The password you entered is very similar to a nonsecret account identifier (like a username or email address). Choose a more distinct password.' => 'Het wachtwoord dat u hebt ingevoerd lijkt erg op een niet-geheime accountidentificator (zoals een gebruikersnaam of e-mailadres). Kies een meer onderscheidend wachtwoord.',
  'Revokes all Conduit API tokens used to access the API.

Users will need to use `arc install-certificate` to install new API tokens before `arc` commands will work. Bots and scripts which access the API will need to have new tokens generated and installed.' => 'Trekt alle Conduit API-tokens in die worden gebruikt om toegang te krijgen tot de API.

Gebruikers moeten `arc install-certificate` gebruiken om nieuwe API-tokens te installeren voordat `arc`-commando\'s werken. Bots en scripts die toegang hebben tot de API moeten nieuwe tokens laten genereren en installeren.',
  'JIRA' => 'JIRA',
  'Permanent Account Link' => 'Permanente accountkoppeling',
  '%s updated the OAuth consumer secret for this provider.' => '%s heeft het OAuth-consumentgeheim voor deze provider bijgewerkt.',
  'ActiveDirectory Domain' => 'ActiveDirectory-domein',
  'Very Weak' => 'Erg zwak',
  'Wait For Approval' => 'Wachten op goedkeuring',
  'If you want to register a new account, continue with this registration workflow and choose a new, unique email address for the new account.' => 'Als u een nieuw account wilt registreren, gaat u verder met deze registratieworkflow en kiest u een nieuw, uniek e-mailadres voor het nieuwe account.',
  'If you log out now, you can still regain access to your account later by using the account recovery workflow. The login screen will prompt you with recovery instructions.' => 'Als u zich nu afmeldt, kunt u later nog steeds toegang tot uw account terugkrijgen door de accountherstelworkflow te gebruiken. Het aanmeldscherm toont u herstelinstructies.',
  'Your Duo account ("%s") is not permitted to access this system. Contact your Duo administrator for help. The Duo preauth API responded with status message ("%s"): %s' => 'Uw Duo-account ("%s") heeft geen toestemming om toegang te krijgen tot dit systeem. Neem contact op met uw Duo-beheerder voor hulp. De Duo preauth-API antwoordde met statusbericht ("%s"): %s',
  'Customize Enroll Message' => 'Registratiebericht aanpassen',
  'Unable to Establish Web Session' => 'Kan geen websessie opzetten',
  'Mobile Phone App (TOTP)' => 'Mobiele telefoon-app (TOTP)',
  'Support for Duo push authentication.' => 'Ondersteuning voor Duo push-authenticatie.',
  'Normal Security Restored' => 'Normale beveiliging hersteld',
  'Allow users to register new accounts using this provider. If you disable registration, users can still use this provider to log in to existing accounts, but will not be able to create new accounts.' => 'Gebruikers toestaan om nieuwe accounts te registreren met deze provider. Als u registratie uitschakelt, kunnen gebruikers deze provider nog steeds gebruiken om aan te melden bij bestaande accounts, maar kunnen ze geen nieuwe accounts aanmaken.',
  'Verify %s' => '%s verifiëren',
  'No Password Auth' => 'Geen wachtwoordauthenticatie',
  'Create **Issue Link** to the Revision, as an "implemented in" relationship.' => '**Probleemkoppeling** naar de versie aanmaken, als een "geïmplementeerd in"-relatie.',
  'Authentication Challenges' => 'Authenticatie-uitdagingen',
  'Do you want to enable this provider? Users will be able to use their existing external accounts to register new accounts and log in using linked accounts.' => 'Wilt u deze provider inschakelen? Gebruikers kunnen hun bestaande externe accounts gebruiken om nieuwe accounts te registreren en aan te melden met gekoppelde accounts.',
  'Password Reset Token' => 'Wachtwoordhersteltoken',
  'Allow Account Unlinking' => 'Ontkoppelen van accounts toestaan',
  'The selected password is too short. Passwords must be a minimum of %s characters long.' => 'Het gekozen wachtwoord is te kort. Wachtwoorden moeten minimaal %s tekens lang zijn.',
  'Base Distinguished Name' => 'Basis-DN (Distinguished Name)',
  'You do not have permission to manage authentication providers.' => 'U hebt geen toestemming om authenticatieproviders te beheren.',
  'Allow Registration:' => 'Registratie toestaan:',
  'Really terminate all sessions? (Your current login session will not be terminated.)' => 'Echt alle sessies beëindigen? (Uw huidige aanmeldsessie wordt niet beëindigd.)',
  'Provide a public key, not a private key!' => 'Geef een publieke sleutel op, geen privésleutel!',
  'Use "--type <type>" or "--provider <phid>" to specify which factors to strip, or "--all-types" to strip all factors. Use `bin/auth list-factors` to show the available factor types or `bin/auth list-mfa-providers` to show available providers.' => 'Gebruik "--type <type>" of "--provider <phid>" om aan te geven welke factoren verwijderd moeten worden, of "--all-types" om alle factoren te verwijderen. Gebruik `bin/auth list-factors` om de beschikbare factortypen weer te geven of `bin/auth list-mfa-providers` om beschikbare providers weer te geven.',
  'Session is not partial!' => 'Sessie is niet gedeeltelijk!',
  'Create Contact Number' => 'Contactnummer aanmaken',
  'Users will only be able to register with a verified email address at one of the configured [[ %s | %s ]] domains: **%s**' => 'Gebruikers kunnen zich alleen registreren met een geverifieerd e-mailadres bij een van de geconfigureerde [[ %s | %s ]] domeinen: **%s**',
  'You are logged in as %s, but the email address you just clicked a link from is already the primary email address for another account (%s). Switch accounts, then try again.' => 'U bent aangemeld als %s, maar het e-mailadres waarvan u zojuist een koppeling hebt aangeklikt is al het primaire e-mailadres voor een ander account (%s). Wissel van account en probeer het opnieuw.',
  '%s set the "%s" value to "%s".' => '%s heeft de waarde "%s" ingesteld op "%s".',
  'Confirm External Account Link' => 'Externe accountkoppeling bevestigen',
  'Terminate all web login sessions. If called via OAuth, also terminate the current OAuth token.

WARNING: This method does what it claims on the label. If you call this method via the test console in the web UI, it will log you out!' => 'Beëindig alle webaanmeldsessies. Indien aangeroepen via OAuth, wordt ook het huidige OAuth-token beëindigd.

WAARSCHUWING: Deze methode doet wat er op het etiket staat. Als u deze methode aanroept via de testconsole in de webinterface, wordt u afgemeld!',
  'This contact number is already your primary contact number.' => 'Dit contactnummer is al uw primaire contactnummer.',
  'Authentication Tokens' => 'Authenticatietokens',
  '%s upgraded the hash algorithm for this password from "%s" to "%s".' => '%s heeft het hash-algoritme voor dit wachtwoord bijgewerkt van "%s" naar "%s".',
  'Multi-Factor Login' => 'Multifactoraanmelding',
  '%s disabled registration.' => '%s heeft registratie uitgeschakeld.',
  'Edit Auth Provider' => 'Authenticatieprovider bewerken',
  'Verification code can not be regenerated after an invite is created.' => 'Verificatiecode kan niet opnieuw worden gegenereerd nadat een uitnodiging is aangemaakt.',
  'Create Accounts' => 'Accounts aanmaken',
  '[SSH Key]' => '[SSH-sleutel]',
  'Stripping authentication factors...' => 'Authenticatiefactoren worden verwijderd...',
  'To configure Twitter OAuth, create a new application here:

https://dev.twitter.com/apps

When creating your application, use these settings:

  - **Callback URL:** Set this to: `%s`

After completing configuration, copy the **Consumer Key** and **Consumer Secret** to the fields above.' => 'Om Twitter OAuth te configureren, maakt u hier een nieuwe applicatie aan:

https://dev.twitter.com/apps

Gebruik bij het aanmaken van uw applicatie deze instellingen:

  - **Callback-URL:** Stel dit in op: `%s`

Kopieer na het voltooien van de configuratie de **Consumentsleutel** en het **Consumentgeheim** naar de bovenstaande velden.',
  '%s updated the public key material for this SSH key.' => '%s heeft het publieke sleutelmateriaal voor deze SSH-sleutel bijgewerkt.',
  'Unlinked Account Instructions' => 'Instructies voor ontkoppeld account',
  '%s created this key.' => '%s heeft deze sleutel aangemaakt.',
  'This private key could not be opened. This might mean that the key requires a passphrase, or might mean that the key is not formatted correctly. Check that you have supplied the complete text of a valid private key and the correct passphrase.' => 'Deze privésleutel kon niet worden geopend. Dit kan betekenen dat de sleutel een wachtwoordzin vereist, of dat de sleutel niet correct is opgemaakt. Controleer of u de volledige tekst van een geldige privésleutel en de juiste wachtwoordzin hebt opgegeven.',
  'Another verification email was sent to %s.' => 'Er is nog een verificatie-e-mail verstuurd naar %s.',
  'Edit Auth Message' => 'Authenticatiebericht bewerken',
  'Mobile App (TOTP)' => 'Mobiele app (TOTP)',
  'Expected valid JSON response from Google account data request.' => 'Geldig JSON-antwoord verwacht van Google-accountgegevensverzoek.',
  'The invite code in the link you clicked has already been accepted.' => 'De uitnodigingscode in de koppeling waarop u hebt geklikt is al geaccepteerd.',
  'No outbound mailer which can deliver SMS messages is configured.' => 'Er is geen uitgaande mailer geconfigureerd die SMS-berichten kan bezorgen.',
  'True to sign this transaction group with MFA.' => 'Waar om deze transactiegroep te ondertekenen met MFA.',
  'If you leave high security, you will need to authenticate again the next time you try to take a high security action.' => 'Als u de hoge beveiliging verlaat, moet u opnieuw authenticeren de volgende keer dat u een handeling met hoge beveiliging probeert uit te voeren.',
  'Link %s Account' => '%s-account koppelen',
  'The LDAP authentication provider is not enabled.' => 'De LDAP-authenticatieprovider is niet ingeschakeld.',
  'Active Phone Number' => 'Actief telefoonnummer',
  'Enroll in MFA' => 'Registreren voor MFA',
  'Really destroy credentials everywhere?' => 'Echt overal aanmeldgegevens vernietigen?',
  'Contact Number' => 'Contactnummer',
  'Refresh Account' => 'Account vernieuwen',
  'Failed to digest password: object ("%s") did not return an opaque envelope with a password digest.' => 'Wachtwoord-digest mislukt: object ("%s") heeft geen ondoorzichtige envelop met een wachtwoord-digest geretourneerd.',
  '%s changed the username policy for this provider from %s to %s.' => '%s heeft het gebruikersnaambeleid voor deze provider gewijzigd van %s naar %s.',
  'Optionally, specify a username attribute to use to prefill usernames when registering a new account. This is purely cosmetic and does not affect the login process, but you can configure it to make sure users get the same default username as their LDAP username, so usernames remain consistent across systems.' => 'Geef optioneel een gebruikersnaamattribuut op om gebruikersnamen vooraf in te vullen bij het registreren van een nieuw account. Dit is puur cosmetisch en heeft geen invloed op het aanmeldproces, maar u kunt het configureren om ervoor te zorgen dat gebruikers dezelfde standaardgebruikersnaam krijgen als hun LDAP-gebruikersnaam, zodat gebruikersnamen consistent blijven tussen systemen.',
  'SMS Code' => 'SMS-code',
  'ldaps://ldaps.example.com/' => 'ldaps://ldaps.example.com/',
  'sn' => 'sn',
  'A passphrase was provided for this private key, but it does not require a passphrase. Check that you supplied the correct key, or omit the passphrase.' => 'Er is een wachtwoordzin opgegeven voor deze privésleutel, maar deze vereist geen wachtwoordzin. Controleer of u de juiste sleutel hebt opgegeven, of laat de wachtwoordzin weg.',
  'This provider is not configured to allow linking.' => 'Deze provider is niet geconfigureerd om koppeling toe te staan.',
  'Expected valid JSON response from "user.whoami" request.' => 'Geldig JSON-antwoord verwacht van "user.whoami"-verzoek.',
  '%s created this provider.' => '%s heeft deze provider aangemaakt.',
  'Multi-Factor' => 'Multifactor',
  'This contact number is already in use.' => 'Dit contactnummer is al in gebruik.',
  'Revokes temporary authentication tokens.

Temporary tokens are used in password reset mail, welcome mail, and by some other systems like Git LFS. Revoking temporary tokens will invalidate existing links in password reset and invite mail that was sent before the revocation occurred.' => 'Trekt tijdelijke authenticatietokens in.

Tijdelijke tokens worden gebruikt in wachtwoordherstel-e-mails, welkomst-e-mails en door sommige andere systemen zoals Git LFS. Het intrekken van tijdelijke tokens maakt bestaande koppelingen in wachtwoordherstel- en uitnodigings-e-mails die vóór de intrekking zijn verstuurd onjuist.',
  'The account you are attempting to link is already linked to your account.' => 'Het account dat u probeert te koppelen is al gekoppeld aan uw account.',
  'Enter the code from the text message which was sent to your primary contact number.' => 'Voer de code in uit het tekstbericht dat naar uw primaire contactnummer is gestuurd.',
  'Do you want to enable this provider? Users will be able to log in using linked accounts.' => 'Wilt u deze provider inschakelen? Gebruikers kunnen aanmelden met gekoppelde accounts.',
  'JIRA Instance Name' => 'JIRA-instantienaam',
  '%s updated the OAuth application ID for this provider from "%s" to "%s".' => '%s heeft het OAuth-applicatie-ID voor deze provider bijgewerkt van "%s" naar "%s".',
  '%s enabled registration.' => '%s heeft registratie ingeschakeld.',
  'Auth Message %d' => 'Authenticatiebericht %d',
  'Unable to load your OAuth1 token secret from storage. It may have expired. Try authenticating again.' => 'Kan uw OAuth1-tokengeheim niet laden uit de opslag. Het is mogelijk verlopen. Probeer opnieuw te authenticeren.',
  'This private key requires a passphrase, but no passphrase was provided. Check that you supplied the correct key, or provide the passphrase.' => 'Deze privésleutel vereist een wachtwoordzin, maar er is geen wachtwoordzin opgegeven. Controleer of u de juiste sleutel hebt opgegeven, of geef de wachtwoordzin op.',
  'Register Account' => 'Account registreren',
  'Awesome' => 'Geweldig',
  '%s set the OAuth application notes for this provider.' => '%s heeft de OAuth-applicatienotities voor deze provider ingesteld.',
  'Credential type "%s" is not valid. Valid credential types are: %s.' => 'Aanmeldgegevenstype "%s" is onjuist. Geldige aanmeldgegevenstypen zijn: %s.',
  'Generate Keypair' => 'Sleutelpaar genereren',
  'Unable to set LDAP option \'%s\' to value \'%s\'!' => 'Kan LDAP-optie \'%s\' niet instellen op waarde \'%s\'!',
  'LDAP: Failed to retrieve record for user "%s" when searching. Credentialed users may not be able to search your LDAP server. Try configuring anonymous credentials or fully anonymous binds.' => 'LDAP: Kan record voor gebruiker "%s" niet ophalen bij het zoeken. Gebruikers met aanmeldgegevens kunnen mogelijk niet zoeken op uw LDAP-server. Probeer anonieme aanmeldgegevens of volledig anonieme binds te configureren.',
  'Failed to bind to LDAP server (without username).' => 'Kan niet binden aan LDAP-server (zonder gebruikersnaam).',
  '%s changed the "%s" value from "%s" to "%s".' => '%s heeft de waarde "%s" gewijzigd van "%s" naar "%s".',
  'You canceled authentication.' => 'U hebt de authenticatie geannuleerd.',
  'A password reset link will be sent to your primary email address. Follow the link to set an account password.' => 'Er wordt een wachtwoordherstelkoppeling naar uw primaire e-mailadres gestuurd. Volg de koppeling om een accountwachtwoord in te stellen.',
  'Accepted By' => 'Geaccepteerd door',
  'Expected \'%s\' in response!' => '\'%s\' verwacht in antwoord!',
  'Anyone who can browse to this server will be able to register an account. To add email domain restrictions, configure %s.' => 'Iedereen die naar deze server kan bladeren kan een account registreren. Om e-maildomeinbeperkingen toe te voegen, configureert u %s.',
  'Requiring a high-security session from a user with no session!' => 'Een sessie met hoge beveiliging vereisen van een gebruiker zonder sessie!',
  '%s revoked this key.' => '%s heeft deze sleutel ingetrokken.',
  'There are no configured multi-factor providers.' => 'Er zijn geen geconfigureerde multifactorproviders.',
  'OAuth1 Handshake Token' => 'OAuth1-handshaketoken',
  'This server is not configured with any enabled authentication providers which can be used to log in. If you have accidentally locked yourself out by disabling all providers, you can use `%s` to recover access to an account.' => 'Deze server is niet geconfigureerd met ingeschakelde authenticatieproviders die kunnen worden gebruikt om aan te melden. Als u uzelf per ongeluk hebt buitengesloten door alle providers uit te schakelen, kunt u `%s` gebruiken om toegang tot een account te herstellen.',
  'The email address ("%s") associated with the external account is already in use by an existing %s account. Multiple %s accounts may not have the same email address, so you can not use this email address to register a new account.' => 'Het e-mailadres ("%s") dat is gekoppeld aan het externe account is al in gebruik door een bestaand %s-account. Meerdere %s-accounts mogen niet hetzelfde e-mailadres hebben, dus u kunt dit e-mailadres niet gebruiken om een nieuw account te registreren.',
  'Failed to get LDAP entries from search result.' => 'Kan geen LDAP-vermeldingen ophalen uit zoekresultaat.',
  'Captcha response is incorrect, try again.' => 'Captcha-antwoord is incorrect, probeer het opnieuw.',
  'Add Auth Provider' => 'Authenticatieprovider toevoegen',
  'Authentication provider (of class "%s") is attempting to load or create an external account, but provided a list of account identifiers which map to more than one account: %s.' => 'Authenticatieprovider (van klasse "%s") probeert een extern account te laden of aan te maken, maar heeft een lijst met accountidentificatoren opgegeven die naar meer dan één account verwijzen: %s.',
  'Duo API credential ("%s") has no secret key.' => 'Duo API-aanmeldgegevens ("%s") heeft geen geheime sleutel.',
  'Factor Type' => 'Factortype',
  'LDAP: Failed to retrieve record for user "%s" when searching with both user and anonymous credentials.' => 'LDAP: Kan record voor gebruiker "%s" niet ophalen bij het zoeken met zowel gebruikers- als anonieme aanmeldgegevens.',
  'Authentication Config Locked' => 'Authenticatieconfiguratie vergrendeld',
  'Auth Factor' => 'Authenticatiefactor',
  'Confirm Link' => 'Koppeling bevestigen',
  'You can try again, or request a new link via email.' => 'U kunt het opnieuw proberen, of een nieuwe koppeling aanvragen via e-mail.',
  '%s is required!' => '%s is verplicht!',
  'Create New Account' => 'Nieuw account aanmaken',
  'Your account has too many outstanding, incomplete MFA synchronization attempts. Wait an hour and try again.' => 'Uw account heeft te veel openstaande, onvolledige MFA-synchronisatiepogingen. Wacht een uur en probeer het opnieuw.',
  'Log In' => 'Aanmelden',
  'Temporary Token Types' => 'Tijdelijke tokentypen',
  'Guidance shown after a user logs in with an email link and is prompted to link an external account.' => 'Begeleiding die wordt weergegeven nadat een gebruiker aanmeldt met een e-mailkoppeling en wordt gevraagd om een extern account te koppelen.',
  'Register' => 'Registreren',
  'Anonymous Username' => 'Anonieme gebruikersnaam',
  'Allow users to receive a code via SMS.' => 'Gebruikers toestaan om een code via SMS te ontvangen.',
  '%s disabled auto login.' => '%s heeft automatisch aanmelden uitgeschakeld.',
  'You can not "--list" and revoke credentials (with "--from" or "--everywhere") in the same operation.' => 'U kunt niet "--list" en aanmeldgegevens intrekken (met "--from" of "--everywhere") in dezelfde bewerking.',
  'LDAP' => 'LDAP',
  'The account you are attempting to register with uses an authentication provider ("%s") which does not allow registration. An administrator may have recently disabled registration with this provider.' => 'Het account waarmee u probeert te registreren gebruikt een authenticatieprovider ("%s") die geen registratie toestaat. Een beheerder heeft mogelijk onlangs registratie met deze provider uitgeschakeld.',
  'Already Accepted' => 'Al geaccepteerd',
  'Specify an OAuth client ID with %s.' => 'Geef een OAuth-client-ID op met %s.',
  'LDAP Exception: %s
LDAP Error #%d: %s' => 'LDAP-uitzondering: %s
LDAP-fout #%d: %s',
  'Log Out Anyway' => 'Toch afmelden',
  'Set Primary Contact Number' => 'Primair contactnummer instellen',
  'You are logged in as %s, but the email address you just clicked a link from is already verified and associated with another account (%s). Switch accounts, then try again.' => 'U bent aangemeld als %s, maar het e-mailadres waarvan u zojuist een koppeling hebt aangeklikt is al geverifieerd en gekoppeld aan een ander account (%s). Wissel van account en probeer het opnieuw.',
  'The external service ("%s") you just authenticated with is not configured to allow logins on this server. An administrator may have recently disabled it.' => 'De externe dienst ("%s") waarmee u zojuist hebt geauthenticeerd is niet geconfigureerd om aanmeldingen op deze server toe te staan. Een beheerder heeft deze mogelijk onlangs uitgeschakeld.',
  'Stronger algorithms are listed first. The highlighted algorithm will be used when storing new hashes. Older hashes will be upgraded to the best algorithm over time.' => 'Sterkere algoritmen worden eerst weergegeven. Het gemarkeerde algoritme wordt gebruikt bij het opslaan van nieuwe hashes. Oudere hashes worden na verloop van tijd bijgewerkt naar het beste algoritme.',
  'These auth factors will be stripped:' => 'Deze authenticatiefactoren worden verwijderd:',
  'Contact numbers must have a contact number.' => 'Contactnummers moeten een contactnummer hebben.',
  'Engine: Session' => 'Engine: sessie',
  '**Step 2 of 2 - Configure OAuth Server**

To configure OAuth, create a new application here:

%s/oauthserver/client/create/

When creating your application, use these settings:

  - **Redirect URI:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => '**Stap 2 van 2 - OAuth-server configureren**

Om OAuth te configureren, maakt u hier een nieuwe applicatie aan:

%s/oauthserver/client/create/

Gebruik bij het aanmaken van uw applicatie deze instellingen:

  - **Omleidings-URI:** Stel dit in op: `%s`

Kopieer na het voltooien van de configuratie het **Client-ID** en het **Clientgeheim** naar de bovenstaande velden. (Mogelijk moet u eerst het clientgeheim genereren door op \'Nieuw geheim\' te klikken.)',
  'Require Existing Duo Account' => 'Bestaand Duo-account vereisen',
  'Upload SSH Public Key' => 'Publieke SSH-sleutel uploaden',
  'No such user "%s"!' => 'Gebruiker "%s" bestaat niet!',
  '%s changed the hostname for this provider from %s to %s.' => '%s heeft de hostnaam voor deze provider gewijzigd van %s naar %s.',
  'Wait for Approval' => 'Wachten op goedkeuring',
  'SSH key material is required.' => 'SSH-sleutelmateriaal is vereist.',
  'Guidance in the "Change Username" dialog for requesting a username change.' => 'Begeleiding in het dialoogvenster "Gebruikersnaam wijzigen" voor het aanvragen van een gebruikersnaamwijziging.',
  'To reset your password, provide your email address. An email with a login link will be sent to you.' => 'Om uw wachtwoord te resetten, geeft u uw e-mailadres op. Er wordt een e-mail met een aanmeldkoppeling naar u gestuurd.',
  'Once you have completed setup on your phone, click continue.' => 'Zodra u de installatie op uw telefoon hebt voltooid, klikt u op doorgaan.',
  'Application secret is required.' => 'Applicatiegeheim is vereist.',
  'Authentication Failure' => 'Authenticatiefout',
  'Use %s to choose a user to reset actions for.' => 'Gebruik %s om een gebruiker te kiezen waarvoor handelingen gereset moeten worden.',
  'LDAP Username' => 'LDAP-gebruikersnaam',
  'Parsed Address' => 'Verwerkt adres',
  'Login and Registration Providers' => 'Aanmeld- en registratieproviders',
  'Send SMS: %s' => 'SMS versturen: %s',
  'Authentication Sessions' => 'Authenticatiesessies',
  'Duo Security' => 'Duo Security',
  'Auth Provider: %s' => 'Authenticatieprovider: %s',
  'Trouble logging in?' => 'Problemen met aanmelden?',
  'Search Attributes' => 'Zoekattributen',
  'You already have SMS authentication attached to your account.' => 'U hebt al SMS-authenticatie aan uw account gekoppeld.',
  'The login link you clicked is invalid, out of date, or has already been used.' => 'De aanmeldkoppeling waarop u hebt geklikt is onjuist, verlopen of al gebruikt.',
  'Message Text' => 'Berichttekst',
  'Revoke all credentials types.' => 'Alle aanmeldgegevenstypen intrekken.',
  'LDAP Exception: %s' => 'LDAP-uitzondering: %s',
  'Previously Invited' => 'Eerder uitgenodigd',
  'LDAP search failed.' => 'LDAP-zoekopdracht mislukt.',
  'This private key could not be opened with the provided passphrase. This might mean that the passphrase is wrong or that the key is not formatted correctly. Check that you have supplied the complete text of a valid private key and the correct passphrase.' => 'Deze privésleutel kon niet worden geopend met de opgegeven wachtwoordzin. Dit kan betekenen dat de wachtwoordzin onjuist is of dat de sleutel niet correct is opgemaakt. Controleer of u de volledige tekst van een geldige privésleutel en de juiste wachtwoordzin hebt opgegeven.',
  'Allow Auto Login' => 'Automatisch aanmelden toestaan',
  'Note: Unlinking an authentication provider will terminate any other active login sessions.' => 'Opmerking: het ontkoppelen van een authenticatieprovider beëindigt alle andere actieve aanmeldsessies.',
  '%s renamed this key from "%s" to "%s".' => '%s heeft deze sleutel hernoemd van "%s" naar "%s".',
  'Enable Number' => 'Nummer inschakelen',
  'Allow Linking Accounts' => 'Koppelen van accounts toestaan',
  '%s created this MFA provider.' => '%s heeft deze MFA-provider aangemaakt.',
  'To enable the login flow, follow setup guidance and configure at least one authentication provider, then associate credentials with your account. After completing these steps, you will be able to log out and log back in normally.' => 'Om de aanmeldstroom in te schakelen, volgt u de installatiehandleiding en configureert u ten minste één authenticatieprovider, en koppelt u vervolgens aanmeldgegevens aan uw account. Na het voltooien van deze stappen kunt u zich afmelden en weer normaal aanmelden.',
  'You have not completed Duo enrollment yet. Complete enrollment, then click continue.' => 'U hebt de Duo-registratie nog niet voltooid. Voltooi de registratie en klik vervolgens op doorgaan.',
  'Always Search' => 'Altijd zoeken',
  'Allow Registration' => 'Registratie toestaan',
  'Use this link to recover access to the "%s" account from the web interface:' => 'Gebruik deze koppeling om toegang tot het account "%s" te herstellen via de webinterface:',
  'Change Enroll Message' => 'Registratiebericht wijzigen',
  'You can safely ignore these warnings if the install itself has access controls (for example, it is deployed on a VPN) or if all of the configured providers have access controls (for example, they are all private LDAP or OAuth servers).' => 'U kunt deze waarschuwingen veilig negeren als de installatie zelf toegangscontroles heeft (bijvoorbeeld als deze op een VPN is geïmplementeerd) of als alle geconfigureerde providers toegangscontroles hebben (bijvoorbeeld als het allemaal privé-LDAP- of OAuth-servers zijn).',
  'The external service ("%s") you just authenticated with is not configured to allow registration on this server. An administrator may have recently disabled it.' => 'De externe dienst ("%s") waarmee u zojuist hebt geauthenticeerd is niet geconfigureerd om registratie op deze server toe te staan. Een beheerder heeft deze mogelijk onlangs uitgeschakeld.',
  'SSH keys inherit the policies of the user or object they authenticate.' => 'SSH-sleutels nemen het beleid over van de gebruiker of het object waarvoor ze authenticeren.',
  'Duo Username: %s' => 'Duo-gebruikersnaam: %s',
  'Check Your Email' => 'Controleer uw e-mail',
  'Captcha' => 'Captcha',
  'Email record has invalid user PHID!' => 'E-mailrecord heeft een onjuist gebruikers-PHID!',
  'No Matching Tokens' => 'Geen overeenkomende tokens',
  'Auth Provider' => 'Authenticatieprovider',
  'Upgrading partial session of user with no session!' => 'Gedeeltelijke sessie bijwerken van gebruiker zonder sessie!',
  '%s Account' => '%s-account',
  'NOTE: **To complete setup**, copy and paste these keys into JIRA according to the instructions below.' => 'OPMERKING: **Om de installatie te voltooien**, kopieert en plakt u deze sleutels in JIRA volgens de onderstaande instructies.',
  'JIRA Base URI' => 'JIRA-basis-URI',
  'A session is visible only to its owner.' => 'Een sessie is alleen zichtbaar voor de eigenaar.',
  '%s created this message.' => '%s heeft dit bericht aangemaakt.',
  'OAuth2 Account' => 'OAuth2-account',
  'LDAP Hostname' => 'LDAP-hostnaam',
  'The email address you just clicked a link from is already verified and associated with a registered account (%s). Log in to continue.' => 'Het e-mailadres waarvan u zojuist een koppeling hebt aangeklikt is al geverifieerd en gekoppeld aan een geregistreerd account (%s). Meld u aan om door te gaan.',
  '%s enabled this provider.' => '%s heeft deze provider ingeschakeld.',
  'After entering the key, the application should display a numeric code. Enter that code below to confirm that you have configured the authenticator correctly:' => 'Na het invoeren van de sleutel zou de applicatie een numerieke code moeten weergeven. Voer die code hieronder in om te bevestigen dat u de authenticator correct hebt geconfigureerd:',
  'If you are currently using your phone to view this page, click this button to open the Duo application:' => 'Als u momenteel uw telefoon gebruikt om deze pagina te bekijken, klikt u op deze knop om de Duo-applicatie te openen:',
  'External Account is a WMF SUL account but email address is not a @wikimedia.org email address. Use your @wikimedia.org email address to create your Phabricator account.' => 'Extern account is een WMF SUL-account maar het e-mailadres is geen @wikimedia.org-e-mailadres. Gebruik uw @wikimedia.org-e-mailadres om uw Phabricator-account aan te maken.',
  'Specify either specific users with %s, or all users with %s, but not both.' => 'Geef specifieke gebruikers op met %s, of alle gebruikers met %s, maar niet beide.',
  'Unable to refresh token!' => 'Kan token niet vernieuwen!',
  '%s changed the status of this provider from %s to %s.' => '%s heeft de status van deze provider gewijzigd van %s naar %s.',
  'Consumer Key' => 'Consumentsleutel',
  'The email address associated with this account ("%s") is already in use by an application and can not be used to register a new account. Choose a different, valid address.' => 'Het e-mailadres dat is gekoppeld aan dit account ("%s") is al in gebruik door een applicatie en kan niet worden gebruikt om een nieuw account te registreren. Kies een ander, geldig adres.',
  'Logging in will verify %s as an email address you own.' => 'Aanmelden verifieert %s als een e-mailadres dat van u is.',
  'Not a Valid Email Address' => 'Geen geldig e-mailadres',
  'SSH Keys' => 'SSH-sleutels',
  'Active OAuth Token (Expires: %s)' => 'Actief OAuth-token (verloopt: %s)',
  'Specify the credential type to revoke with "--type" or "--everything", but not both.' => 'Geef het aanmeldgegevenstype op om in te trekken met "--type" of "--everything", maar niet beide.',
  '(If given an option, select that this key is "Time Based", not "Counter Based".)' => '(Als u een keuze krijgt, selecteert u dat deze sleutel "Tijdgebaseerd" is, niet "Tellergebaseerd".)',
  'These methods are recently introduced and subject to change.' => 'Deze methoden zijn onlangs geïntroduceerd en kunnen worden gewijzigd.',
  'LDAP Password: ' => 'LDAP-wachtwoord: \\',
  'Bad Invite Code' => 'Onjuiste uitnodigingscode',
  '{icon check, color="green"} **Setup Complete!**

You have successfully configured multi-factor authentication for your account.

You can make adjustments from the [[ /settings/ | Settings ]] panel later.' => '{icon check, color="green"} **Installatie voltooid!**

U hebt multifactorauthenticatie voor uw account succesvol geconfigureerd.

U kunt later aanpassingen maken vanuit het [[ /settings/ | Instellingen ]]-paneel.',
  'Allow users to log in or register using a username and password.' => 'Gebruikers toestaan om aan te melden of te registreren met een gebruikersnaam en wachtwoord.',
  'Your remote address has made too many login attempts in a short period of time.' => 'Uw externe adres heeft te veel aanmeldpogingen gedaan in een korte periode.',
  '%s enabled this contact number.' => '%s heeft dit contactnummer ingeschakeld.',
  'WordPress.com' => 'WordPress.com',
  'Default Message' => 'Standaardbericht',
  'Guidance in the message body when users request an email link to access their account.' => 'Begeleiding in de berichttekst wanneer gebruikers een e-mailkoppeling aanvragen om toegang te krijgen tot hun account.',
  'Refresh %s Account' => '%s-account vernieuwen',
  'Login cookie was set correctly, but your login session is not valid. Try clearing cookies and logging in again.' => 'Aanmeldcookie is correct ingesteld, maar uw aanmeldsessie is onjuist. Probeer cookies te wissen en opnieuw aan te melden.',
  'MFA Sync' => 'MFA-synchronisatie',
  'Password Hash Algorithms' => 'Wachtwoord-hash-algoritmen',
  'OAuth1 Handshake Secret' => 'OAuth1-handshakegeheim',
  'Login Failed' => 'Aanmelding mislukt',
  'You have failed to verify multi-factor authentication too often in a short period of time.' => 'U hebt te vaak multifactorauthenticatie niet kunnen verifiëren in een korte periode.',
  'You can not make a disabled number a primary contact number.' => 'U kunt een uitgeschakeld nummer niet als primair contactnummer instellen.',
  'Use TLS' => 'TLS gebruiken',
  'This install has the configuration option "%s" enabled, but does not have any active multifactor providers configured. This means you are required to add MFA, but are also prevented from doing so. An administrator must disable "%s" or enable an MFA provider to allow you to continue.' => 'Deze installatie heeft de configuratieoptie "%s" ingeschakeld, maar heeft geen actieve multifactorproviders geconfigureerd. Dit betekent dat u MFA moet toevoegen, maar dit ook niet kunt doen. Een beheerder moet "%s" uitschakelen of een MFA-provider inschakelen om u te laten doorgaan.',
  'You will no longer be able to use your %s account to log in.' => 'U kunt uw %s-account niet meer gebruiken om aan te melden.',
  'Auth Invite' => 'Authenticatie-uitnodiging',
  'Instructions on the "Wait For Approval" screen, shown to users who have registered an account that has not yet been approved by an administrator.' => 'Instructies op het scherm "Wachten op goedkeuring", weergegeven aan gebruikers die een account hebben geregistreerd dat nog niet is goedgekeurd door een beheerder.',
  'Username/Password' => 'Gebruikersnaam/wachtwoord',
  'No provider with PHID "%s" exists. Use `bin/auth list-mfa-providers` to list providers.' => 'Er bestaat geen provider met PHID "%s". Gebruik `bin/auth list-mfa-providers` om providers weer te geven.',
  'Customize Message' => 'Bericht aanpassen',
  'CHANGES TO ENROLL MESSAGE' => 'WIJZIGINGEN IN REGISTRATIEBERICHT',
  'Duo enrollment mode ("%s") is not supported.' => 'Duo-registratiemodus ("%s") wordt niet ondersteund.',
  'Duo Username' => 'Duo-gebruikersnaam',
  'Status "%s" is invalid. Valid statuses are: %s.' => 'Status "%s" is onjuist. Geldige statussen zijn: %s.',
  'Email Address Already in Use' => 'E-mailadres al in gebruik',
  'Administrative approvals are enabled (in %s), so all new users must have their accounts approved by an administrator.' => 'Beheerdersgoedkeuringen zijn ingeschakeld (in %s), dus alle nieuwe gebruikers moeten hun accounts laten goedkeuren door een beheerder.',
  'Already Associated' => 'Al gekoppeld',
  'Realname Attributes' => 'Echte-naamattributen',
  'Changing Status Failed' => 'Wijzigen van status mislukt',
  'Specify %s to reset all action counters.' => 'Geef %s op om alle handelingstellers te resetten.',
  '= Integration Options = 
Configure how to record Revisions on JIRA tasks.

Note you\'ll have to restart the daemons for this to take effect.' => '= Integratieopties = 
Configureer hoe versies op JIRA-taken worden vastgelegd.

Let op: u moet de daemons herstarten om dit van kracht te laten worden.',
  'Credential ("%s") is not valid.' => 'Aanmeldgegevens ("%s") zijn onjuist.',
  'Base URI is required.' => 'Basis-URI is vereist.',
  'No valid linkable account.' => 'Geen geldig koppelbaar account.',
  'There are no configured default registration providers.' => 'Er zijn geen standaard registratieproviders geconfigureerd.',
  'The authentication provider did not return the correct client state parameter in its response. If this problem persists, you may need to clear your cookies.' => 'De authenticatieprovider heeft niet de juiste clientstatusparameter in het antwoord geretourneerd. Als dit probleem aanhoudt, moet u mogelijk uw cookies wissen.',
  'SSH keys can not be reactivated.' => 'SSH-sleutels kunnen niet opnieuw worden geactiveerd.',
  'You can not deprecate or disable the last active MFA provider while "%s" is enabled, because new users would be unable to enroll in MFA. Disable the MFA requirement in Config, or create or enable another MFA provider first.' => 'U kunt de laatste actieve MFA-provider niet afkeuren of uitschakelen terwijl "%s" is ingeschakeld, omdat nieuwe gebruikers zich dan niet kunnen registreren voor MFA. Schakel de MFA-vereiste uit in de configuratie, of maak eerst een andere MFA-provider aan of schakel deze in.',
  'Again' => 'Opnieuw',
  'Expected valid JSON response from GitHub account data request.' => 'Geldig JSON-antwoord verwacht van GitHub-accountgegevensverzoek.',
  '%s disabled account unlinking.' => '%s heeft het ontkoppelen van accounts uitgeschakeld.',
  '[%s] %s has invited you to join %s' => '[%s] %s heeft u uitgenodigd om deel te nemen aan %s',
  'Revoke Tokens?' => 'Tokens intrekken?',
  'Confirm %s Account Link' => '%s-accountkoppeling bevestigen',
  'You have not configured an outbound SMS mailer. You must configure one before you can set up SMS. See: %s' => 'U hebt geen uitgaande SMS-mailer geconfigureerd. U moet er een configureren voordat u SMS kunt instellen. Zie: %s',
  'Provider Already Configured' => 'Provider al geconfigureerd',
  'Missing Client ID Cookie' => 'Ontbrekende client-ID-cookie',
  'To search for an LDAP record before authenticating, either check the **Always Search** checkbox or enter an anonymous username and password to use to perform the search.' => 'Om een LDAP-record te zoeken vóór authenticatie, vinkt u het selectievakje **Altijd zoeken** aan of voert u een anonieme gebruikersnaam en wachtwoord in om de zoekopdracht uit te voeren.',
  'Enroll Duo Account: %s' => 'Duo-account registreren: %s',
  'Skipping, provider is not an OAuth2 provider.' => 'Overslaan, provider is geen OAuth2-provider.',
  'Your login session is invalid, and clearing the session cookie was unsuccessful. Try clearing your browser cookies.' => 'Uw aanmeldsessie is onjuist en het wissen van de sessiecookie is mislukt. Probeer uw browsercookies te wissen.',
  'OAuth Consumer Secret' => 'OAuth-consumentgeheim',
  'The password you entered has been revoked. You can not reuse a password which has been revoked. Choose a new password.' => 'Het wachtwoord dat u hebt ingevoerd is ingetrokken. U kunt een ingetrokken wachtwoord niet hergebruiken. Kies een nieuw wachtwoord.',
);
  }

}
