<?php

final class PhabricatorAuthSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  '%s renamed this provider from %s to %s.' => '%s premenoval(a) tohto poskytovateľa z %s na %s.',
  '%s enabled login.' => '%s povolil(a) prihlásenie.',
  'Disable Contact Number' => 'Zakázať kontaktné číslo',
  'This key has been revoked. Choose or generate a new, unique key.' => 'Tento kľúč bol odvolaný. Zvoľte alebo vygenerujte nový, jedinečný kľúč.',
  'SSH Key Actions' => 'Akcie kľúča SSH',
  'Adding a PKCS8 keyfile to the cache can be very dangerous. If the PKCS8 file really encodes a different public key than the one specified, an attacker could use it to gain unauthorized access.

Generally, you should use this option only in a development environment where ssh-keygen is broken and it is inconvenient to fix it, and only if you are certain you understand the risks. You should never cache a PKCS8 file you did not generate yourself.' => 'Pridanie súboru s kľúčom PKCS8 do vyrovnávacej pamäte môže byť veľmi nebezpečné. Ak súbor PKCS8 v skutočnosti kóduje iný verejný kľúč, než ktorý bol zadaný, útočník by ho mohol použiť na získanie neoprávneného prístupu.

Vo všeobecnosti by ste túto možnosť mali použiť iba vo vývojovom prostredí, kde je ssh-keygen pokazený a jeho oprava je nepohodlná, a len ak ste si istí, že rozumiete rizikám. Nikdy by ste nemali do vyrovnávacej pamäte ukladať súbor PKCS8, ktorý ste sami nevygenerovali.',
  'This provider ("%s") already exists, and you can not add more than one instance of it. You can edit the existing provider, or you can choose a different provider.' => 'Tento poskytovateľ („%s“) už existuje a nemôžete pridať viac ako jednu jeho inštanciu. Môžete upraviť existujúceho poskytovateľa alebo zvoliť iného poskytovateľa.',
  'To add a Duo factor, first download and install the Duo application on your phone. Once you have launched the application and are ready to perform setup, click continue.' => 'Ak chcete pridať faktor Duo, najprv si do telefónu stiahnite a nainštalujte aplikáciu Duo. Keď aplikáciu spustíte a budete pripravení vykonať nastavenie, kliknite na pokračovať.',
  'The verification code you provided is incorrect, or the email address has been removed, or the email address is owned by another user. Make sure you followed the link in the email correctly and are logged in with the user account associated with the email address.' => 'Overovací kód, ktorý ste zadali, je nesprávny, alebo bola e-mailová adresa odstránená, alebo e-mailovú adresu vlastní iný používateľ. Uistite sa, že ste správne klikli na odkaz v e-maile a že ste prihlásení pod používateľským účtom priradeným k tejto e-mailovej adrese.',
  'Edit Contact Number' => 'Upraviť kontaktné číslo',
  'Passwords' => 'Heslá',
  'Algorithm' => 'Algoritmus',
  'You must specify the username of the account to recover.' => 'Musíte zadať používateľské meno účtu, ktorý chcete obnoviť.',
  'Authentication provider configuration is locked, and can not be changed without being unlocked. See the configuration setting %s for details.' => 'Konfigurácia poskytovateľa overenia je uzamknutá a nedá sa zmeniť bez odomknutia. Podrobnosti nájdete v nastavení konfigurácie %s.',
  'Server name must contain only lowercase letters, digits, and periods.' => 'Názov servera môže obsahovať iba malé písmená, číslice a bodky.',
  'Revoke Tokens' => 'Odvolať tokeny',
  'Reached TOTP challenge validation with an unexpected number of unexpired challenges (%s), expected exactly one.' => 'Validácia výzvy TOTP sa dosiahla s neočakávaným počtom nevypršaných výziev (%s), očakávala sa presne jedna.',
  'There are too many configured default registration providers.' => 'Je nakonfigurovaných príliš veľa predvolených registračných poskytovateľov.',
  'Unlink "%s" Account?' => 'Zrušiť prepojenie účtu „%s“?',
  'Strip factors from specified users.' => 'Odstrániť faktory zadaným používateľom.',
  'You must confirm the selected password.' => 'Musíte potvrdiť zvolené heslo.',
  'Authentication provider (of class "%s") is attempting to load or create an external account, but provided no account identifiers.' => 'Poskytovateľ overenia (triedy „%s“) sa pokúša načítať alebo vytvoriť externý účet, ale neposkytol žiadne identifikátory účtu.',
  'Edit Auth Messages' => 'Upraviť správy overenia',
  'Complete enrolling your phone with Duo:' => 'Dokončite registráciu svojho telefónu v Duo:',
  'Unknown session type "%s".' => 'Neznámy typ relácie „%s“.',
  'Setup Admin Account' => 'Nastaviť účet správcu',
  'Enable Contact Number' => 'Povoliť kontaktné číslo',
  'Create New Duo Account' => 'Vytvoriť nový účet Duo',
  'To configure Bitbucket OAuth, log in to Bitbucket and go to **Manage Account** > **Access Management** > **OAuth**.

Click **Add Consumer** and create a new application.

After completing configuration, copy the **Key** and **Secret** to the fields above.' => 'Ak chcete nakonfigurovať OAuth pre Bitbucket, prihláste sa do Bitbucketu a prejdite na **Manage Account** > **Access Management** > **OAuth**.

Kliknite na **Add Consumer** a vytvorte novú aplikáciu.

Po dokončení konfigurácie skopírujte **Key** a **Secret** do polí vyššie.',
  'The account you are attempting to register or link is already linked to another user.' => 'Účet, ktorý sa pokúšate zaregistrovať alebo prepojiť, je už prepojený s iným používateľom.',
  'Base URI should include protocol (like "%s").' => 'Základné URI by malo obsahovať protokol (napríklad „%s“).',
  'Verify an unverified email address which is already attached to an account. This will also re-execute event hooks for addresses which are already verified.' => 'Overiť neoverenú e-mailovú adresu, ktorá je už pripojená k účtu. Týmto sa tiež znova vykonajú háky udalostí pre adresy, ktoré sú už overené.',
  'Must Verify Email' => 'Musí overiť e-mail',
  'Expected "newResultForPrompt()" to return an object of class "%s", but it returned something else ("%s"; in "%s").' => 'Očakávalo sa, že „newResultForPrompt()“ vráti objekt triedy „%s“, ale vrátil niečo iné („%s“; v „%s“).',
  'MFA Providers' => 'Poskytovatelia MFA',
  'Strip factors for a specific provider. Use `bin/auth list-mfa-providers` for a list of providers.' => 'Odstrániť faktory pre konkrétneho poskytovateľa. Zoznam poskytovateľov získate pomocou `bin/auth list-mfa-providers`.',
  'Edit MFA Provider' => 'Upraviť poskytovateľa MFA',
  '%s enabled auto login.' => '%s povolil(a) automatické prihlásenie.',
  'The account you are attempting to register with has an invalid email address (%s). This server only allows registration with specific email addresses:' => 'Účet, ktorým sa pokúšate zaregistrovať, má neplatnú e-mailovú adresu (%s). Tento server povoľuje registráciu iba s konkrétnymi e-mailovými adresami:',
  'Invalid OAuth Access Token' => 'Neplatný prístupový token OAuth',
  'Create Auth Message' => 'Vytvoriť správu overenia',
  'Attach a mobile authenticator application (like 2FAS, Aegis, FreeOTP, Bitwarden Authenticator, Google Authenticator, or Authy) to your account. When you need to authenticate, you will enter a code shown on your phone.' => 'Pripojte k svojmu účtu mobilnú overovaciu aplikáciu (napríklad 2FAS, Aegis, FreeOTP, Bitwarden Authenticator, Google Authenticator alebo Authy). Keď sa budete musieť overiť, zadáte kód zobrazený vo vašom telefóne.',
  'Verify Email' => 'Overiť e-mail',
  'Revoke credentials for the specified object. To revoke credentials for a user, use "@username".' => 'Odvolať poverenia pre zadaný objekt. Ak chcete odvolať poverenia používateľa, použite „@username“.',
  'Use "--user <username>" to specify which user to strip factors from, or "--all-users" to strip factors from all users.' => 'Pomocou „--user <username>“ určte, ktorému používateľovi sa majú odstrániť faktory, alebo použite „--all-users“ na odstránenie faktorov všetkým používateľom.',
  'This factor recently issued a challenge which has expired. A new challenge can not be issued yet. Wait %s second(s) for the code to cycle, then try again.' => array(
    'Tento faktor nedávno vydal výzvu, ktorej platnosť vypršala. Nová výzva sa zatiaľ nedá vydať. Počkajte %s sekundu, kým sa kód obnoví, a potom to skúste znova.',
    'Tento faktor nedávno vydal výzvu, ktorej platnosť vypršala. Nová výzva sa zatiaľ nedá vydať. Počkajte %s sekundy, kým sa kód obnoví, a potom to skúste znova.',
    'Tento faktor nedávno vydal výzvu, ktorej platnosť vypršala. Nová výzva sa zatiaľ nedá vydať. Počkajte %s sekúnd, kým sa kód obnoví, a potom to skúste znova.',
  ),
  'This is a terse test text message (from "%s").' => 'Toto je stručná testovacia textová správa (od „%s“).',
  'Path to public keyfile.' => 'Cesta k súboru s verejným kľúčom.',
  'Strip all factors, regardless of type.' => 'Odstrániť všetky faktory bez ohľadu na typ.',
  'Enable the contact number %s?' => 'Povoliť kontaktné číslo %s?',
  'Account is already registered or linked.' => 'Účet je už zaregistrovaný alebo prepojený.',
  'Sign this transaction group with MFA.' => 'Podpísať túto skupinu transakcií pomocou MFA.',
  '(Some types of token can not be revoked, and you can not revoke tokens which have already expired.)' => '(Niektoré typy tokenov nie je možné odvolať a nemôžete odvolať tokeny, ktorých platnosť už uplynula.)',
  'You have not configured any multi-factor providers yet.' => 'Zatiaľ ste nenakonfigurovali žiadnych poskytovateľov viacfaktorového overenia.',
  'Unable to Log In' => 'Nie je možné sa prihlásiť',
  'The external service ("%s") you just used to log in is already associated with another %s user account. Log in to the other %s account and unlink the external account before linking it to a new %s account.' => 'Externá služba („%s“), ktorú ste práve použili na prihlásenie, je už priradená k inému používateľskému účtu %s. Prihláste sa do druhého účtu %s a zrušte prepojenie externého účtu skôr, než ho prepojíte s novým účtom %s.',
  'To configure Twitch.tv OAuth, create a new application here:

https://www.twitch.tv/settings/applications

When creating your application, use these settings:

  - **Redirect URI:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Ak chcete nakonfigurovať OAuth pre Twitch.tv, vytvorte novú aplikáciu tu:

https://www.twitch.tv/settings/applications

Pri vytváraní aplikácie použite tieto nastavenia:

  - **Redirect URI:** Nastavte na: `%s`

Po dokončení konfigurácie skopírujte **Client ID** a **Client Secret** do polí vyššie. (Možno budete musieť najprv vygenerovať klientske tajomstvo kliknutím na \'New Secret\'.)',
  'Session has already signed required legalpad documents!' => 'Relácia už podpísala požadované dokumenty Legalpad!',
  'On the plus side, that purple notification bubble will disappear.' => 'Na druhej strane, tá fialová bublina s upozornením zmizne.',
  'This account ("%s") can not establish web sessions, so it is not possible to generate a functional recovery link. Special accounts like daemons and mailing lists can not log in via the web UI.' => 'Tento účet („%s“) nemôže vytvárať webové relácie, takže nie je možné vygenerovať funkčný odkaz na obnovenie. Špeciálne účty, ako sú démony a mailingové zoznamy, sa nemôžu prihlásiť cez webové rozhranie.',
  'Revoke credentials of the given type.' => 'Odvolať poverenia daného typu.',
  'This private key is not formatted correctly. Check that you have provided the complete text of a valid private key.' => 'Tento súkromný kľúč nie je správne naformátovaný. Skontrolujte, či ste zadali úplný text platného súkromného kľúča.',
  'Expected valid JSON response from Disqus account data request.' => 'Očakávala sa platná odpoveď JSON na požiadavku o údaje účtu Disqus.',
  'LDAP Port' => 'Port LDAP',
  'Really trust this PKCS8 keyfile?' => 'Naozaj dôverovať tomuto súboru s kľúčom PKCS8?',
  '%s updated the OAuth consumer key for this provider from "%s" to "%s".' => '%s aktualizoval(a) kľúč spotrebiteľa OAuth tohto poskytovateľa z „%s“ na „%s“.',
  'Contact number is already in use.' => 'Kontaktné číslo sa už používa.',
  'No such user "%s" to recover.' => 'Neexistuje používateľ „%s“, ktorého by bolo možné obnoviť.',
  'Expected \'%s\' to be \'%s\'!' => 'Očakávalo sa, že \'%s\' bude \'%s\'!',
  'No public key was provided.' => 'Nebol poskytnutý žiadny verejný kľúč.',
  'Log In with LDAP' => 'Prihlásiť sa cez LDAP',
  'Expected verifier to finish OAuth handshake!' => 'Očakávalo sa, že overovač dokončí handshake OAuth!',
  'Specify the credential type to revoke with "--type" or specify "--everything". Use "--list" to list available credential types.' => 'Zadajte typ poverenia na odvolanie pomocou „--type“ alebo zadajte „--everything“. Zoznam dostupných typov poverení zobrazíte pomocou „--list“.',
  'Start TLS after binding to the LDAP server.' => 'Spustiť TLS po naviazaní na server LDAP.',
  'Duo providers must have an API hostname.' => 'Poskytovatelia Duo musia mať názov hostiteľa API.',
  'TOTP Code' => 'Kód TOTP',
  'Invalid response token for this challenge: token digest does not match stored digest.' => 'Neplatný token odpovede pre túto výzvu: digest tokenu sa nezhoduje s uloženým digestom.',
  'OAuth Consumer Key' => 'Kľúč spotrebiteľa OAuth',
  'Another user already has that username.' => 'Toto používateľské meno už má iný používateľ.',
  'Account Not Refreshable' => 'Účet sa nedá obnoviť',
  'You can only recover the username for one account.' => 'Používateľské meno môžete obnoviť iba pre jeden účet.',
  'There are no matching tokens to revoke.' => 'Nie sú žiadne zodpovedajúce tokeny na odvolanie.',
  '%s disabled email trust.' => '%s zakázal(a) dôveru e-mailu.',
  'Too Short' => 'Príliš krátke',
  'You denied this request. Wait %s second(s) to try again.' => array(
    'Túto požiadavku ste zamietli. Počkajte %s sekundu a skúste to znova.',
    'Túto požiadavku ste zamietli. Počkajte %s sekundy a skúste to znova.',
    'Túto požiadavku ste zamietli. Počkajte %s sekúnd a skúste to znova.',
  ),
  'Guidance included in the mail message body when users request an email link to access their account.

For installs with password authentication enabled, users access this workflow by using the "Forgot your password?" link on the login screen.

For installs without password authentication enabled, users access this workflow by using the "Send a login link to your email address." link on the login screen. This workflow allows users to recover access to their account if there is an issue with an external login service.' => 'Pokyny zahrnuté v tele e-mailovej správy, keď používatelia požiadajú o e-mailový odkaz na prístup k svojmu účtu.

Pri inštaláciách so zapnutým overovaním heslom sa používatelia k tomuto postupu dostanú cez odkaz „Zabudli ste heslo?“ na prihlasovacej obrazovke.

Pri inštaláciách bez zapnutého overovania heslom sa používatelia k tomuto postupu dostanú cez odkaz „Poslať prihlasovací odkaz na vašu e-mailovú adresu.“ na prihlasovacej obrazovke. Tento postup umožňuje používateľom obnoviť prístup k svojmu účtu, ak nastal problém s externou prihlasovacou službou.',
  'The selected password is very weak: it is one of the most common passwords in use. Choose a stronger password.' => 'Zvolené heslo je veľmi slabé: patrí medzi najpoužívanejšie heslá. Zvoľte si silnejšie heslo.',
  'LDAP Username: ' => 'Používateľské meno LDAP:',
  'That email address is not verified, but the account it is connected to has at least one other verified address. When an account has at least one verified address, you can only send password reset links to one of the verified addresses. Try a verified address instead.' => 'Táto e-mailová adresa nie je overená, ale účet, ku ktorému je pripojená, má aspoň jednu inú overenú adresu. Keď má účet aspoň jednu overenú adresu, odkazy na obnovenie hesla môžete posielať iba na jednu z overených adries. Skúste namiesto toho overenú adresu.',
  'Not Distinct' => 'Nie je odlišné',
  'Allow users to log in using this provider. If you disable login, users can still use account integrations for this provider.' => 'Umožniť používateľom prihlásiť sa cez tohto poskytovateľa. Ak prihlásenie zakážete, používatelia budú stále môcť používať integrácie účtu pre tohto poskytovateľa.',
  'Allow Login:' => 'Povoliť prihlásenie:',
  'Terminate Session?' => 'Ukončiť reláciu?',
  '%s (%s) MFA Code: %s' => '%s (%s) Kód MFA: %s',
  'Wrong Account' => 'Nesprávny účet',
  'Refresh tokens for a given user.' => 'Obnoviť tokeny daného používateľa.',
  'Status ("%s") is not a valid contact number status. Valid status constants are: %s.' => 'Stav („%s“) nie je platný stav kontaktného čísla. Platné konštanty stavu sú: %s.',
  'Already Registered' => 'Už zaregistrované',
  'SECURITY WARNING' => 'BEZPEČNOSTNÉ VAROVANIE',
  'This public key is already associated with another user or device. Each key must unambiguously identify a single unique owner.' => 'Tento verejný kľúč je už priradený k inému používateľovi alebo zariadeniu. Každý kľúč musí jednoznačne identifikovať jedného jedinečného vlastníka.',
  'Allow users to unlink account credentials for this provider from existing accounts. If you disable this, accounts will be permanently bound to provider accounts.' => 'Umožniť používateľom zrušiť prepojenie poverení účtu tohto poskytovateľa s existujúcimi účtami. Ak to zakážete, účty budú natrvalo zviazané s účtami poskytovateľa.',
  'When you need to authenticate, a request will be pushed to the Duo application on your phone.' => 'Keď sa budete musieť overiť, do aplikácie Duo vo vašom telefóne bude odoslaná požiadavka.',
  'SMS is weak, and relatively easy for attackers to compromise. Strongly consider using a different MFA provider.' => 'SMS je slabá a pre útočníkov relatívne ľahko napadnuteľná. Dôrazne zvážte použitie iného poskytovateľa MFA.',
  'Revoke credentials without prompting.' => 'Odvolať poverenia bez pýtania sa.',
  '%s set the OAuth consumer secret for this provider.' => '%s nastavil(a) tajomstvo spotrebiteľa OAuth pre tohto poskytovateľa.',
  'You are logged in as %s, but the email address (%s) you just clicked a link from is already associated with another account (%s). You can log out to switch accounts, or verify the address and attach it to your current account. Attach email address %s to user account %s?' => 'Ste prihlásený ako %s, ale e-mailová adresa (%s), z ktorej ste práve klikli na odkaz, je už priradená k inému účtu (%s). Môžete sa odhlásiť a prepnúť účty, alebo adresu overiť a pripojiť ju k svojmu súčasnému účtu. Pripojiť e-mailovú adresu %s k používateľskému účtu %s?',
  'Analyzing or decrypting SSH keys requires the "ssh-keygen" binary, but it is not available in "$PATH". Make it available to work with SSH private keys.' => 'Analýza alebo dešifrovanie kľúčov SSH vyžaduje binárny súbor „ssh-keygen“, ktorý však nie je dostupný v „$PATH“. Sprístupnite ho, aby ste mohli pracovať so súkromnými kľúčmi SSH.',
  'NOTE: Any user who can browse to this install\'s login page will be able to register an account. To restrict who can register an account, configure [[ %s | %s ]].' => 'NOTE: Každý používateľ, ktorý sa dostane na prihlasovaciu stránku tejto inštalácie, si bude môcť zaregistrovať účet. Ak chcete obmedziť, kto si môže zaregistrovať účet, nakonfigurujte [[ %s | %s ]].',
  'Auth Provider %d' => 'Poskytovateľ overenia %d',
  'Set Test Message' => 'Nastaviť testovaciu správu',
  'Contact number is invalid: %s' => 'Kontaktné číslo je neplatné: %s',
  'To configure WordPress.com OAuth, create a new WordPress.com Application here:

https://developer.wordpress.com/apps/new/.

You should use these settings in your application:

  - **URL:** Set this to your full domain with protocol. For this     server, the correct value is: `%s`
  - **Redirect URL**: Set this to: `%s`


Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'Ak chcete nakonfigurovať OAuth pre WordPress.com, vytvorte tu novú aplikáciu WordPress.com:

https://developer.wordpress.com/apps/new/.

Vo svojej aplikácii by ste mali použiť tieto nastavenia:

  - **URL:** Nastavte na vašu úplnú doménu s protokolom. Pre tento     server je správna hodnota: `%s`
  - **Redirect URL**: Nastavte na: `%s`


Keď aplikáciu vytvoríte, skopírujte **Client ID** a **Client Secret** do polí vyššie.',
  'Username Attribute' => 'Atribút používateľského mena',
  'To configure Disqus OAuth, create a new application here:

https://disqus.com/api/applications/

Create an application, then adjust these settings:

  - **Callback URL:** Set this to `%s`

After creating an application, copy the **Public Key** and **Secret Key** to the fields above (the **Public Key** goes in **OAuth App ID**).' => 'Ak chcete nakonfigurovať OAuth pre Disqus, vytvorte tu novú aplikáciu:

https://disqus.com/api/applications/

Vytvorte aplikáciu a potom upravte tieto nastavenia:

  - **Callback URL:** Nastavte na `%s`

Po vytvorení aplikácie skopírujte **Public Key** a **Secret Key** do polí vyššie (**Public Key** patrí do **OAuth App ID**).',
  'Unlink Your Only Login Account?' => 'Zrušiť prepojenie vášho jediného prihlasovacieho účtu?',
  'Specify an OAuth client id with "--id".' => 'Zadajte id klienta OAuth pomocou „--id“.',
  'Your account has no primary contact number.' => 'Váš účet nemá žiadne primárne kontaktné číslo.',
  'JIRA base URI is required.' => 'Základné URI pre JIRA je povinné.',
  'Config Locked' => 'Konfigurácia uzamknutá',
  'Attempted to set \'%s\' cookie to \'%s\', but your browser sent back a cookie with the value \'%s\'. Clear your browser\'s cookies and try again.' => 'Pokus o nastavenie cookie \'%s\' na \'%s\', ale váš prehliadač poslal späť cookie s hodnotou \'%s\'. Vymažte cookies vo svojom prehliadači a skúste to znova.',
  'Recover directly into a full session without requiring MFA or other login checks.' => 'Obnoviť priamo do plnej relácie bez vyžadovania MFA alebo iných prihlasovacích kontrol.',
  'Always bind and search, even without a username and password.' => 'Vždy sa naviazať a vyhľadávať, aj bez používateľského mena a hesla.',
  'Skipping, provider is not enabled or does not exist.' => 'Preskakuje sa, poskytovateľ nie je povolený alebo neexistuje.',
  'Does Not Allow Registration' => 'Neumožňuje registráciu',
  '%s

To configure Amazon OAuth, create a new \'API Project\' here:

https://developer.amazon.com/apps-and-games/login-with-amazon

Use these settings:

  - **Allowed Return URLs:** Add this: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => '%s

Ak chcete nakonfigurovať OAuth pre Amazon, vytvorte tu nový „API Project“:

https://developer.amazon.com/apps-and-games/login-with-amazon

Použite tieto nastavenia:

  - **Allowed Return URLs:** Pridajte toto: `%s`

Po dokončení konfigurácie skopírujte **Client ID** a **Client Secret** do polí vyššie.',
  '/settings/panel/contact/' => '/settings/panel/contact/',
  'Path to corresponding PKCS8 key.' => 'Cesta k zodpovedajúcemu kľúču PKCS8.',
  'Strength' => 'Sila',
  'Enter LDAP Credentials' => 'Zadajte poverenia LDAP',
  'LDAP record query returned more than one result. The query must uniquely identify a record.' => 'Dopyt na záznam LDAP vrátil viac ako jeden výsledok. Dopyt musí jednoznačne identifikovať jeden záznam.',
  'Email record ("%s") has bad associated user PHID ("%s").' => 'E-mailový záznam („%s“) má chybné priradené PHID používateľa („%s“).',
  'This email address has already been verified.' => 'Táto e-mailová adresa už bola overená.',
  'The password you entered is the same as another password associated with your account. Each password must be unique.' => 'Heslo, ktoré ste zadali, je rovnaké ako iné heslo priradené k vášmu účtu. Každé heslo musí byť jedinečné.',
  'The email address you just clicked a link from is already the primary email address for a registered account (%s). Log in to continue.' => 'E-mailová adresa, z ktorej ste práve klikli na odkaz, je už primárnou e-mailovou adresou registrovaného účtu (%s). Pokračujte prihlásením.',
  'Guidance shown on the main login screen before users log in or register.' => 'Pokyny zobrazené na hlavnej prihlasovacej obrazovke predtým, než sa používatelia prihlásia alebo zaregistrujú.',
  'Cache the PKCS8 format of a public key. When developing on OSX, this can be used to work around issues with ssh-keygen. Use `%s` to generate a PKCS8 key to feed to this command.' => 'Uložiť do vyrovnávacej pamäte formát PKCS8 verejného kľúča. Pri vývoji na OSX sa to dá použiť na obídenie problémov so ssh-keygen. Pomocou `%s` vygenerujte kľúč PKCS8, ktorý sa má odovzdať tomuto príkazu.',
  'Revoke from all credential owners.' => 'Odvolať od všetkých vlastníkov poverení.',
  'Invite has invalid author PHID ("%s").' => 'Pozvánka má neplatné PHID autora („%s“).',
  'Unable to Make Primary' => 'Nie je možné nastaviť ako primárne',
  'Use lowercase letters, digits, and periods. For example: %s' => 'Použite malé písmená, číslice a bodky. Napríklad: %s',
  'The response token for this challenge is invalid: response tokens may not include spaces.' => 'Token odpovede pre túto výzvu je neplatný: tokeny odpovede nesmú obsahovať medzery.',
  'Anonymous Password' => 'Anonymné heslo',
  'Use the button below to log in as: %s' => 'Pomocou tlačidla nižšie sa prihláste ako: %s',
  'Active OAuth Token' => 'Aktívny token OAuth',
  'An authorization request will be pushed to the Duo application on your phone.' => 'Do aplikácie Duo vo vašom telefóne bude odoslaná žiadosť o autorizáciu.',
  'Administrative approvals are disabled, so users who register will be able to use their accounts immediately. To enable approvals, configure %s.' => 'Administratívne schvaľovanie je zakázané, takže používatelia, ktorí sa zaregistrujú, budú môcť svoje účty používať okamžite. Ak chcete schvaľovanie povoliť, nakonfigurujte %s.',
  'Google' => 'Google',
  'You currently have multi-factor authentication ("%s") which depends on your primary contact number. You must remove this authentication factor before you can designate a new primary contact number.' => 'Momentálne máte viacfaktorové overenie („%s“), ktoré závisí od vášho primárneho kontaktného čísla. Skôr než budete môcť určiť nové primárne kontaktné číslo, musíte tento overovací faktor odstrániť.',
  'Failed to decode OAuth access token response: %s' => 'Nepodarilo sa dekódovať odpoveď s prístupovým tokenom OAuth: %s',
  'Optionally, specify one or more comma-separated attributes to use to prefill the "Real Name" field when registering a new account. This is purely cosmetic and does not affect the login process, but can make registration a little easier.' => 'Voliteľne zadajte jeden alebo viac atribútov oddelených čiarkami, ktoré sa použijú na predvyplnenie poľa „Skutočné meno“ pri registrácii nového účtu. Je to čisto kozmetické a nemá to vplyv na proces prihlásenia, ale môže to trochu uľahčiť registráciu.',
  'Allow users to attach a mobile authenticator application (like 2FAS, Aegis, FreeOTP, or Bitwarden Authenticator) to their account.' => 'Umožniť používateľom pripojiť k svojmu účtu mobilnú overovaciu aplikáciu (napríklad 2FAS, Aegis, FreeOTP alebo Bitwarden Authenticator).',
  'You must enter an LDAP password.' => 'Musíte zadať heslo LDAP.',
  'Generate New Keypair' => 'Vygenerovať nový pár kľúčov',
  'MFA Provider' => 'Poskytovateľ MFA',
  'The private key will not be retained.' => 'Súkromný kľúč nebude uchovaný.',
  'MFA Provider %d' => 'Poskytovateľ MFA %d',
  'This challenge already has a response token; you can not set a new response token.' => 'Táto výzva už má token odpovede; nemôžete nastaviť nový token odpovede.',
  'Invite action is not a send action!' => 'Akcia pozvánky nie je akciou odoslania!',
  'This key is trusted. Trusted keys can not be edited. Use %s to revoke trust before editing the key.' => 'Tento kľúč je dôveryhodný. Dôveryhodné kľúče sa nedajú upravovať. Pred úpravou kľúča odvolajte dôveru pomocou %s.',
  'Edit Message' => 'Upraviť správu',
  'Expected valid JSON response from Facebook account data request.' => 'Očakávala sa platná odpoveď JSON na požiadavku o údaje účtu Facebook.',
  'Add Multi-Factor Auth' => 'Pridať viacfaktorové overenie',
  'The contact number.' => 'Kontaktné číslo.',
  'You must enter an LDAP username.' => 'Musíte zadať používateľské meno LDAP.',
  'Refresh LDAP Account' => 'Obnoviť účet LDAP',
  'The password and confirmation do not match.' => 'Heslo a potvrdenie sa nezhodujú.',
  'Reset action counters so a user can continue taking rate-limited actions.' => 'Vynulovať počítadlá akcií, aby používateľ mohol pokračovať vo vykonávaní akcií s obmedzenou frekvenciou.',
  '%s disabled this contact number.' => '%s zakázal(a) toto kontaktné číslo.',
  'To configure GitHub OAuth, create a new GitHub Application here:

https://github.com/settings/applications/new

You should use these settings in your application:

  - **URL:** Set this to your full domain with protocol. For this     server, the correct value is: `%s`
  - **Callback URL**: Set this to: `%s`


Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'Ak chcete nakonfigurovať OAuth pre GitHub, vytvorte tu novú aplikáciu GitHub:

https://github.com/settings/applications/new

Vo svojej aplikácii by ste mali použiť tieto nastavenia:

  - **URL:** Nastavte na vašu úplnú doménu s protokolom. Pre tento     server je správna hodnota: `%s`
  - **Callback URL**: Nastavte na: `%s`


Keď aplikáciu vytvoríte, skopírujte **Client ID** a **Client Secret** do polí vyššie.',
  'No Providers Configured:' => 'Nie sú nakonfigurovaní žiadni poskytovatelia:',
  'If you continue, you will create a new account. You will not be able to link this external account to an existing account.' => 'Ak budete pokračovať, vytvoríte nový účet. Tento externý účet nebudete môcť prepojiť s existujúcim účtom.',
  'A text message with an authorization code will be sent to your primary contact number.' => 'Na vaše primárne kontaktné číslo bude odoslaná textová správa s autorizačným kódom.',
  'Revokes all stored passwords.

Account passwords and VCS passwords (used to access repositories over HTTP) will both be revoked. Passwords for any third party applications which use shared password infrastructure will also be revoked.

Users will need to reset account passwords, possibly by using the "Forgot Password?" link on the login page. They will also need to reset VCS passwords.

Passwords are revoked, not just removed. Users will be unable to select the passwords they used previously and must choose new, unique passwords.

Revoking passwords will not terminate outstanding login sessions. Use the "session" revoker in conjunction with this revoker to force users to login again.' => 'Odvolá všetky uložené heslá.

Odvolané budú heslá k účtom aj heslá VCS (používané na prístup k repozitárom cez HTTP). Odvolané budú aj heslá pre všetky aplikácie tretích strán, ktoré používajú spoločnú infraštruktúru hesiel.

Používatelia si budú musieť heslá k účtom resetovať, napríklad pomocou odkazu „Zabudli ste heslo?“ na prihlasovacej stránke. Budú si musieť resetovať aj heslá VCS.

Heslá sú odvolané, nielen odstránené. Používatelia nebudú môcť zvoliť heslá, ktoré používali predtým, a musia si zvoliť nové, jedinečné heslá.

Odvolanie hesiel neukončí prebiehajúce prihlasovacie relácie. Ak chcete používateľov donútiť, aby sa znova prihlásili, použite spolu s týmto odvolávačom aj odvolávač „session“.',
  '%s set the OAuth consumer key for this provider to "%s".' => '%s nastavil(a) kľúč spotrebiteľa OAuth pre tohto poskytovateľa na „%s“.',
  'Guidance in the message body when users set a password on an account which did not previously have a password.' => 'Pokyny v tele správy, keď si používatelia nastavujú heslo k účtu, ktorý predtým heslo nemal.',
  'Disable Provider?' => 'Zakázať poskytovateľa?',
  'Connecting to LDAP...' => 'Pripája sa k LDAP...',
  'Wait' => 'Počkajte',
  'No matching SSH keys.' => 'Žiadne zodpovedajúce kľúče SSH.',
  'Use %s Username' => 'Použiť používateľské meno %s',
  'Authentication Error' => 'Chyba overenia',
  'A keypair has been generated, and the public key has been added as a recognized key.' => 'Bol vygenerovaný pár kľúčov a verejný kľúč bol pridaný ako rozpoznaný kľúč.',
  '%s named this provider %s.' => '%s pomenoval(a) tohto poskytovateľa %s.',
  'You may optionally customize the enrollment message users are presented with by providing a replacement message below:' => 'Voliteľne si môžete prispôsobiť registračnú správu, ktorá sa zobrazuje používateľom, zadaním náhradnej správy nižšie:',
  'Mail Body: Email Login' => 'Telo e-mailu: Prihlásenie e-mailom',
  'Send a test message to %s?' => 'Odoslať testovaciu správu na %s?',
  'Edit Provider' => 'Upraviť poskytovateľa',
  'Auth' => 'Auth',
  'Confirm the link with this %s account. This account will be able to log in to your %s account.' => 'Potvrďte prepojenie s týmto účtom %s. Tento účet sa bude môcť prihlásiť do vášho účtu %s.',
  '**JIRA Instance Name**

Choose a permanent name for this instance of JIRA. This name is used internally to keep track of this particular instance of JIRA, in case the URL changes later.

Use lowercase letters, digits, and period. For example, `jira`, `jira.mycompany` or `jira.engineering` are reasonable names.' => '**Názov inštancie JIRA**

Zvoľte trvalý názov pre túto inštanciu JIRA. Tento názov sa používa interne na sledovanie tejto konkrétnej inštancie JIRA pre prípad, že sa URL neskôr zmení.

Použite malé písmená, číslice a bodku. Rozumné názvy sú napríklad `jira`, `jira.mycompany` alebo `jira.engineering`.',
  'Text Message (SMS)' => 'Textová správa (SMS)',
  '%s removed the name (%s) of this provider.' => '%s odstránil(a) názov (%s) tohto poskytovateľa.',
  'The PHP \'openssl\' extension is not installed. You must install this extension in order to add a JIRA authentication provider, because JIRA OAuth requests use the RSA-SHA1 signing algorithm. Install the \'openssl\' extension, restart everything, and try again.' => 'Rozšírenie PHP \'openssl\' nie je nainštalované. Toto rozšírenie musíte nainštalovať, aby ste mohli pridať poskytovateľa overenia JIRA, pretože požiadavky JIRA OAuth používajú podpisový algoritmus RSA-SHA1. Nainštalujte rozšírenie \'openssl\', reštartujte všetko a skúste to znova.',
  'Provided public key is not properly formatted.' => 'Poskytnutý verejný kľúč nie je správne naformátovaný.',
  'Multi-Factor Authentication is Misconfigured' => 'Viacfaktorové overenie je nesprávne nakonfigurované',
  '(You can not terminate your current login session. To terminate it, log out.)' => '(Svoju aktuálnu prihlasovaciu reláciu nemôžete ukončiť. Ak ju chcete ukončiť, odhláste sa.)',
  'Your account has been created, but needs to be approved by an administrator. You\'ll receive an email once your account is approved.' => 'Váš účet bol vytvorený, ale musí ho schváliť administrátor. Po schválení účtu dostanete e-mail.',
  'Newly issued MFA challenges must have a future TTL. This factor issued a bad TTL ("%s"). (Did you use a relative time instead of an epoch?)' => 'Novo vydané výzvy MFA musia mať TTL v budúcnosti. Tento faktor vydal chybné TTL („%s“). (Nepoužili ste relatívny čas namiesto epochy?)',
  'Yes (Optional)' => 'Áno (voliteľné)',
  'Access token error: %s' => 'Chyba prístupového tokenu: %s',
  'The URI where the OAuth server is installed. For example: %s' => 'URI, kde je nainštalovaný server OAuth. Napríklad: %s',
  'Cached PKCS8 key for public key.' => 'Kľúč PKCS8 uložený vo vyrovnávacej pamäti pre verejný kľúč.',
  'Username Change Instructions' => 'Pokyny na zmenu používateľského mena',
  'Custom Enroll Message' => 'Vlastná registračná správa',
  'You must verify your email address to log in. You should have a new email message with verification instructions in your inbox (%s).' => 'Na prihlásenie musíte overiť svoju e-mailovú adresu. Vo svojej schránke (%s) by ste mali mať novú e-mailovú správu s pokynmi na overenie.',
  'Refreshing token, current token expires in %s seconds.' => array(
    'Obnovuje sa token, platnosť súčasného tokenu vyprší o %s sekundu.',
    'Obnovuje sa token, platnosť súčasného tokenu vyprší o %s sekundy.',
    'Obnovuje sa token, platnosť súčasného tokenu vyprší o %s sekúnd.',
  ),
  'Allows Registration' => 'Umožňuje registráciu',
  'Duo' => 'Duo',
  'Application ID is required.' => 'ID aplikácie je povinné.',
  'You do not have a linked account on this provider, and thus can not refresh it.' => 'Nemáte prepojený účet u tohto poskytovateľa, a preto ho nemôžete obnoviť.',
  'Use the **OAuth App Notes** field to record details about which account the external application is registered under.' => 'Do poľa **OAuth App Notes** si zaznamenajte podrobnosti o tom, pod ktorým účtom je externá aplikácia zaregistrovaná.',
  'firstname, lastname' => 'firstname, lastname',
  'Minimum length of %d characters.' => 'Minimálna dĺžka %d znakov.',
  'This provider does not allow refreshing.' => 'Tento poskytovateľ neumožňuje obnovovanie.',
  'One-Time Login Token' => 'Jednorazový prihlasovací token',
  '%s revoked this password.' => '%s odvolal(a) toto heslo.',
  'The id of the OAuth client.' => 'Id klienta OAuth.',
  'Newly issued MFA challenges must have a valid TTL!' => 'Novo vydané výzvy MFA musia mať platné TTL!',
  'Target "%s" is not a valid target to revoke credentials from. Usually, revoke from "@username".' => 'Cieľ „%s“ nie je platný cieľ, z ktorého je možné odvolať poverenia. Zvyčajne sa odvoláva z „@username“.',
  '%d-Bit Secret' => '%d-bitové tajomstvo',
  'Duo is not requiring a challenge, which defeats the purpose of MFA. Duo must be configured to challenge you.' => 'Duo nevyžaduje výzvu, čo marí celý zmysel MFA. Duo musí byť nakonfigurované tak, aby vás vyzvalo.',
  'Remove trust from an OAuth client. Users must manually confirm reauthorization of untrusted OAuth clients.' => 'Odobrať dôveru klientovi OAuth. Používatelia musia opätovnú autorizáciu nedôveryhodných klientov OAuth potvrdiť ručne.',
  'The email address you just clicked a link from is already associated with a registered account (%s), but is not verified. Log in to that account to continue. If you can not log in, you can register a new account.' => 'E-mailová adresa, z ktorej ste práve klikli na odkaz, je už priradená k registrovanému účtu (%s), ale nie je overená. Ak chcete pokračovať, prihláste sa do tohto účtu. Ak sa nemôžete prihlásiť, môžete si zaregistrovať nový účet.',
  'You are destroying an entire class of credentials. This may be very disruptive to users. You should normally do this only if you suspect there has been a widespread compromise which may have impacted everyone.' => 'Ničíte celú triedu poverení. Môže to byť pre používateľov veľmi rušivé. Bežne by ste to mali urobiť len vtedy, ak máte podozrenie na rozsiahle narušenie bezpečnosti, ktoré mohlo zasiahnuť všetkých.',
  'If you want to link an existing %s account to this external account, do not continue. Instead: log in to your existing account, then go to "Settings" and link the account in the "External Accounts" panel.' => 'Ak chcete s týmto externým účtom prepojiť existujúci účet %s, nepokračujte. Namiesto toho sa prihláste do svojho existujúceho účtu, prejdite na „Nastavenia“ a prepojte účet v paneli „Externé účty“.',
  'You responded to this challenge correctly.' => 'Na túto výzvu ste odpovedali správne.',
  'Specify either specific factors with "--provider", or all factors with "--all-types", but not both.' => 'Zadajte buď konkrétne faktory pomocou „--provider“, alebo všetky faktory pomocou „--all-types“, ale nie oboje.',
  'To add a TOTP factor to your account, you will first need to install a mobile authenticator application on your phone. Some applications which work well are **Aegis**, **2FAS**, **FreeOTP**, **Bitwarden Authenticator**, **Google Authenticator**, and **Authy**, but any other TOTP application should work.

If you haven\'t already, download and install a TOTP application on your phone now. Once you\'ve launched the application and are ready to add a new TOTP code, continue to the next step.' => 'Ak chcete do svojho účtu pridať faktor TOTP, najprv si budete musieť do telefónu nainštalovať mobilnú overovaciu aplikáciu. Dobre fungujú napríklad aplikácie **Aegis**, **2FAS**, **FreeOTP**, **Bitwarden Authenticator**, **Google Authenticator** a **Authy**, ale mala by fungovať aj ktorákoľvek iná aplikácia TOTP.

Ak ste tak ešte neurobili, stiahnite si a nainštalujte do telefónu aplikáciu TOTP teraz. Keď aplikáciu spustíte a budete pripravení pridať nový kód TOTP, pokračujte ďalším krokom.',
  'Special users like daemons and mailing lists are not permitted to log in via the web. Log in as a normal user instead.' => 'Špeciálni používatelia, ako sú démoni a mailingové zoznamy, sa nesmú prihlasovať cez web. Prihláste sa namiesto toho ako bežný používateľ.',
  'Login Screen Instructions' => 'Pokyny na prihlasovacej obrazovke',
  'Mail Body: Welcome' => 'Telo e-mailu: Uvítanie',
  'Revoke Token?' => 'Odvolať token?',
  'Asana' => 'Asana',
  'MFA' => 'MFA',
  'Terminate all login sessions.' => 'Ukončiť všetky prihlasovacie relácie.',
  'Send Another Email' => 'Odoslať ďalší e-mail',
  'You and other users on this install are collectively sending too many test text messages too quickly. Wait a few minutes to continue texting tests.' => 'Vy a ďalší používatelia tejto inštalácie spoločne posielate príliš veľa testovacích textových správ príliš rýchlo. Ak chcete pokračovať v testovaní správ, počkajte niekoľko minút.',
  'Failed to find an OAuth client with ID %s.' => 'Nepodarilo sa nájsť klienta OAuth s ID %s.',
  'Allow Account Linking' => 'Povoliť prepájanie účtov',
  'Provider names can not be longer than %s characters.' => array(
    'Názvy poskytovateľov nemôžu byť dlhšie ako %s znak.',
    'Názvy poskytovateľov nemôžu byť dlhšie ako %s znaky.',
    'Názvy poskytovateľov nemôžu byť dlhšie ako %s znakov.',
  ),
  'No Account Linked' => 'Nie je prepojený žiadny účet',
  'Allow users to link account credentials for this provider to existing accounts. There is normally no reason to disable this unless you are trying to move away from a provider and want to stop users from creating new account links.' => 'Umožniť používateľom prepájať poverenia účtu tohto poskytovateľa s existujúcimi účtami. Bežne nie je dôvod toto zakazovať, pokiaľ sa nesnažíte od poskytovateľa odísť a chcete používateľom zabrániť vo vytváraní nových prepojení účtov.',
  'Slack' => 'Slack',
  'This request improperly specifies an MFA challenge token ("%s") multiple times and can not be processed.' => 'Táto požiadavka nesprávne uvádza token výzvy MFA („%s“) viackrát a nedá sa spracovať.',
  'You recently provided a response to this factor. Responses may not be reused. Wait %s second(s) for the code to cycle, then try again.' => array(
    'Nedávno ste na tento faktor poskytli odpoveď. Odpovede nie je možné použiť opakovane. Počkajte %s sekundu, kým sa kód obnoví, a potom to skúste znova.',
    'Nedávno ste na tento faktor poskytli odpoveď. Odpovede nie je možné použiť opakovane. Počkajte %s sekundy, kým sa kód obnoví, a potom to skúste znova.',
    'Nedávno ste na tento faktor poskytli odpoveď. Odpovede nie je možné použiť opakovane. Počkajte %s sekúnd, kým sa kód obnoví, a potom to skúste znova.',
  ),
  'Refresh OAuth access tokens. This is primarily useful for development and debugging.' => 'Obnoviť prístupové tokeny OAuth. Je to užitočné najmä pri vývoji a ladení.',
  'The OAuth provider returned an error: %s' => 'Poskytovateľ OAuth vrátil chybu: %s',
  'Registration Failed' => 'Registrácia zlyhala',
  'Unable to Verify Email' => 'E-mail sa nedá overiť',
  'Public SSH Key' => 'Verejný kľúč SSH',
  'Disqus' => 'Disqus',
  'Add MFA Provider' => 'Pridať poskytovateľa MFA',
  'Expected \'%s\' in request!' => 'V požiadavke sa očakávalo \'%s\'!',
  '%s updated the OAuth application notes for this provider.' => '%s aktualizoval(a) poznámky k aplikácii OAuth pre tohto poskytovateľa.',
  '%s updated the "%s" value.' => '%s aktualizoval(a) hodnotu „%s“.',
  'Installation is complete. Register your administrator account below to log in. You will be able to configure options and add authentication mechanisms later on.' => 'Inštalácia je dokončená. Zaregistrujte si nižšie účet administrátora, aby ste sa mohli prihlásiť. Možnosti a overovacie mechanizmy budete môcť nakonfigurovať neskôr.',
  'This request has timed out because you took too long to respond.' => 'Časový limit tejto požiadavky vypršal, pretože vám odpoveď trvala príliš dlho.',
  'All Keys' => 'Všetky kľúče',
  'The external account you are registering with has an email address that is already in use ("%s") by an existing %s account. Choose a new, valid email address to register a new account.' => 'Externý účet, ktorým sa registrujete, má e-mailovú adresu, ktorú už používa („%s“) existujúci účet %s. Ak chcete zaregistrovať nový účet, zvoľte novú, platnú e-mailovú adresu.',
  'Terminate Sessions' => 'Ukončiť relácie',
  'Upload Public Key' => 'Nahrať verejný kľúč',
  'OAuth App Notes' => 'Poznámky k aplikácii OAuth',
  'You have failed too many attempts to synchronize new multi-factor authentication methods in a short period of time.' => 'Za krátky čas ste príliš veľakrát neúspešne skúsili synchronizovať nové metódy viacfaktorového overenia.',
  'Expected token to finish OAuth handshake!' => 'Očakával sa token na dokončenie handshake OAuth!',
  'Unable to start TLS connection when connecting to LDAP.' => 'Pri pripájaní k LDAP sa nepodarilo nadviazať spojenie TLS.',
  'Authentication provider configuration is locked, and can not be changed without being unlocked.' => 'Konfigurácia poskytovateľa overenia je uzamknutá a nedá sa zmeniť bez odomknutia.',
  'Factor type "%s" is unknown. Use `bin/auth list-factors` to get a list of known factor types.' => 'Typ faktora „%s“ je neznámy. Zoznam známych typov faktorov získate pomocou `bin/auth list-factors`.',
  'Log In (%s)' => 'Prihlásiť sa (%s)',
  'Skip This Step' => 'Preskočiť tento krok',
  'Do you want to disable this provider? Users will not be able to register or log in using linked accounts. If there are any users without other linked authentication mechanisms, they will no longer be able to log in. If you disable all providers, no one will be able to log in.' => 'Chcete zakázať tohto poskytovateľa? Používatelia sa nebudú môcť registrovať ani prihlasovať pomocou prepojených účtov. Ak sú niektorí používatelia bez iných prepojených overovacích mechanizmov, nebudú sa už môcť prihlásiť. Ak zakážete všetkých poskytovateľov, nebude sa môcť prihlásiť nikto.',
  'Status of the MFA provider.' => 'Stav poskytovateľa MFA.',
  'Duo API Hostname' => 'Názov hostiteľa API Duo',
  'Login Failure' => 'Zlyhanie prihlásenia',
  'Custom instructions included in "Welcome" mail when an administrator creates a user account.' => 'Vlastné pokyny zahrnuté v uvítacom e-maile, keď administrátor vytvorí používateľský účet.',
  'NOTE: Revoking passwords does not terminate existing sessions which were established using the old passwords. To terminate existing sessions, run the "session" revoker now.' => 'NOTE: Odvolanie hesiel neukončí existujúce relácie, ktoré boli vytvorené pomocou starých hesiel. Ak chcete existujúce relácie ukončiť, spustite teraz odvolávač „session“.',
  '%s enabled account linking.' => '%s povolil(a) prepájanie účtov.',
  'Scan this QR code with the Duo application on your mobile phone:' => 'Naskenujte tento QR kód aplikáciou Duo vo svojom mobilnom telefóne:',
  'Contact Number %d' => 'Kontaktné číslo %d',
  'Account Already Linked' => 'Účet je už prepojený',
  'Another user already has that email.' => 'Tento e-mail už má iný používateľ.',
  'You already have a provider of this type.' => 'Poskytovateľa tohto typu už máte.',
  '%s You have not added authentication providers yet. Use "%s" to add a provider, which will let users register new accounts and log in.' => '%s Zatiaľ ste nepridali žiadnych poskytovateľov overenia. Pomocou „%s“ pridajte poskytovateľa, ktorý používateľom umožní registrovať nové účty a prihlasovať sa.',
  'Type of the MFA provider.' => 'Typ poskytovateľa MFA.',
  'Your account has been disabled.' => 'Váš účet bol zakázaný.',
  'JIRA base URI should include protocol (like "https://").' => 'Základné URI pre JIRA by malo obsahovať protokol (napríklad „https://“).',
  'Authentication provider ("%s") encountered an error while attempting to log in. %s' => 'Poskytovateľ overenia („%s“) narazil pri pokuse o prihlásenie na chybu. %s',
  'There are no matching factors to strip.' => 'Nie sú žiadne zodpovedajúce faktory na odstránenie.',
  'The invite code in the link you clicked is invalid. Check that you followed the link correctly.' => 'Kód pozvánky v odkaze, na ktorý ste klikli, je neplatný. Skontrolujte, či ste odkaz použili správne.',
  'Mark an OAuth client as trusted. Trusted OAuth clients may be reauthorized without requiring users to manually confirm the action.' => 'Označiť klienta OAuth ako dôveryhodného. Dôveryhodní klienti OAuth môžu byť opätovne autorizovaní bez toho, aby používatelia museli akciu ručne potvrdzovať.',
  'Twitter' => 'Twitter',
  'Unable to Generate Keys' => 'Nie je možné vygenerovať kľúče',
  'Specify the target to revoke credentials from with "--from" or specify "--everywhere".' => 'Zadajte cieľ, z ktorého sa majú odvolať poverenia, pomocou „--from“, alebo zadajte „--everywhere“.',
  'Unlocked the authentication provider configuration.' => 'Konfigurácia poskytovateľa overenia bola odomknutá.',
  'You can link your %s account to an external account to allow you to log in more easily in the future. To continue, choose an account to link below. If you prefer not to link your account, you can skip this step.' => 'Svoj účet %s môžete prepojiť s externým účtom, aby ste sa v budúcnosti mohli prihlasovať jednoduchšie. Ak chcete pokračovať, zvoľte nižšie účet na prepojenie. Ak svoj účet radšej neprepojíte, môžete tento krok preskočiť.',
  'Log In or Register with LDAP' => 'Prihlásiť sa alebo zaregistrovať cez LDAP',
  'Expected JSON response from Duo.' => 'Očakávala sa odpoveď JSON od Duo.',
  'Display name for the MFA provider.' => 'Zobrazovaný názov poskytovateľa MFA.',
  'Revoke Public Key' => 'Odvolať verejný kľúč',
  'You (or someone pretending to be you) recently requested an account recovery link be sent to this email address. If you did not make this request, you can ignore this message.' => 'Vy (alebo niekto, kto sa za vás vydáva) ste nedávno požiadali o zaslanie odkazu na obnovenie účtu na túto e-mailovú adresu. Ak ste o to nežiadali, môžete túto správu ignorovať.',
  'Use Primary Email Address' => 'Použiť primárnu e-mailovú adresu',
  'Server Name' => 'Názov servera',
  'If you lose access to your account, you can recover access by sending yourself an email login link from the login screen.' => 'Ak stratíte prístup k svojmu účtu, môžete ho obnoviť tak, že si z prihlasovacej obrazovky pošlete e-mailový prihlasovací odkaz.',
  'Login validation is missing expected parameter ("%s").' => 'Vo validácii prihlásenia chýba očakávaný parameter („%s“).',
  'Customize Messages' => 'Prispôsobiť správy',
  'Next Step' => 'Ďalší krok',
  'You can not unlink this account because the administrator has configured this server to make links to "%s" accounts permanent.' => 'Tento účet nemôžete odpojiť, pretože administrátor nakonfiguroval tento server tak, aby boli prepojenia s účtami „%s“ trvalé.',
  'Designate %s as your primary contact number?' => 'Určiť %s ako vaše primárne kontaktné číslo?',
  'Message Preview' => 'Ukážka správy',
  'This engine is used to edit MFA providers.' => 'Tento nástroj sa používa na úpravu poskytovateľov MFA.',
  '%s enabled account unlinking.' => '%s povolil(a) rušenie prepojenia účtov.',
  'The email address %s is now verified.' => 'E-mailová adresa %s je teraz overená.',
  'This factor recently issued a challenge for a different workflow. Wait %s second(s) for the code to cycle, then try again.' => array(
    'Tento faktor nedávno vydal výzvu pre iný postup. Počkajte %s sekundu, kým sa kód obnoví, a potom to skúste znova.',
    'Tento faktor nedávno vydal výzvu pre iný postup. Počkajte %s sekundy, kým sa kód obnoví, a potom to skúste znova.',
    'Tento faktor nedávno vydal výzvu pre iný postup. Počkajte %s sekúnd, kým sa kód obnoví, a potom to skúste znova.',
  ),
  'Send SMS' => 'Odoslať SMS',
  '%s disabled this provider.' => '%s zakázal(a) tohto poskytovateľa.',
  'Not Installed' => 'Nie je nainštalované',
  'Your browser did not submit a "%s" cookie with client state information in the request. Check that cookies are enabled. If this problem persists, you may need to clear your cookies.' => 'Váš prehliadač v požiadavke neodoslal cookie „%s“ s informáciami o stave klienta. Skontrolujte, či máte povolené cookies. Ak tento problém pretrváva, možno budete musieť cookies vymazať.',
  'Found %s account(s) to refresh.' => array(
    'Na obnovenie sa našiel %s účet.',
    'Na obnovenie sa našli %s účty.',
    'Na obnovenie sa našlo %s účtov.',
  ),
  'You have not activated this enrollment in the Duo application on your phone yet. Complete activation, then click continue.' => 'Túto registráciu ste v aplikácii Duo vo svojom telefóne ešte neaktivovali. Dokončite aktiváciu a potom kliknite na pokračovať.',
  'This factor recently issued a challenge to a different login session. Wait %s second(s) for the code to cycle, then try again.' => array(
    'Tento faktor nedávno vydal výzvu pre inú prihlasovaciu reláciu. Počkajte %s sekundu, kým sa kód obnoví, a potom to skúste znova.',
    'Tento faktor nedávno vydal výzvu pre inú prihlasovaciu reláciu. Počkajte %s sekundy, kým sa kód obnoví, a potom to skúste znova.',
    'Tento faktor nedávno vydal výzvu pre inú prihlasovaciu reláciu. Počkajte %s sekúnd, kým sa kód obnoví, a potom to skúste znova.',
  ),
  'ERROR: You are making a Conduit API request to "%s", but the correct HTTP request path to use in order to access a Conduit method is "%s" (for example, "%s"). Check your configuration.' => 'ERROR: Odosielate požiadavku Conduit API na „%s“, ale správna cesta požiadavky HTTP na prístup k metóde Conduit je „%s“ (napríklad „%s“). Skontrolujte svoju konfiguráciu.',
  '%s updated the enroll message.' => '%s aktualizoval(a) registračnú správu.',
  'You currently have multi-factor authentication ("%s") which depends on your primary contact number. You must remove this authentication factor before you can modify or disable your primary contact number.' => 'Momentálne máte viacfaktorové overenie („%s“), ktoré závisí od vášho primárneho kontaktného čísla. Skôr než budete môcť svoje primárne kontaktné číslo upraviť alebo zakázať, musíte tento overovací faktor odstrániť.',
  'Duo API hostname ("%s") is invalid, hostname must be "*.duosecurity.com".' => 'Názov hostiteľa API Duo („%s“) je neplatný, názov hostiteľa musí byť „*.duosecurity.com“.',
  'Send a login link to your email address.' => 'Poslať prihlasovací odkaz na vašu e-mailovú adresu.',
  'Leave high security and return your session to normal security levels?' => 'Opustiť vysokú bezpečnosť a vrátiť vašu reláciu na bežnú úroveň zabezpečenia?',
  'OAuth App Secret' => 'Tajomstvo aplikácie OAuth',
  'Skipping, provider has no stored refresh token.' => 'Preskakuje sa, poskytovateľ nemá uložený obnovovací token.',
  'Really terminate session %s?' => 'Naozaj ukončiť reláciu %s?',
  'Revokes all SSH public keys.

SSH public keys are revoked, not just removed. Users will need to generate and upload new, unique keys before they can access repositories or other services over SSH.' => 'Odvolá všetky verejné kľúče SSH.

Verejné kľúče SSH sú odvolané, nielen odstránené. Používatelia budú musieť vygenerovať a nahrať nové, jedinečné kľúče, kým budú môcť pristupovať k repozitárom alebo iným službám cez SSH.',
  'Terminate Sessions?' => 'Ukončiť relácie?',
  '%s enabled email trust.' => '%s povolil(a) dôveru e-mailu.',
  'End of dry run.' => 'Koniec skúšobného behu.',
  'Choose Provider Type' => 'Zvoliť typ poskytovateľa',
  'Revoke credentials which may have been leaked or disclosed.' => 'Odvolať poverenia, ktoré mohli uniknúť alebo byť vyzradené.',
  'Destroyed %s credential(s) of type "%s".' => array(
    'Zničené bolo jedno poverenie typu „%2$s“.',
    'Zničené boli %s poverenia typu „%s“.',
    'Zničených bolo %s poverení typu „%s“.',
  ),
  'Server name is required.' => 'Názov servera je povinný.',
  'List information about available credential revokers.' => 'Vypísať informácie o dostupných odvolávačoch poverení.',
  'No message type exists with key "%s".' => 'Neexistuje žiadny typ správy s kľúčom „%s“.',
  'You will be prompted to provide MFA when you submit.' => 'Pri odoslaní budete vyzvaní na poskytnutie MFA.',
  '%s set the OAuth application ID for this provider to "%s".' => '%s nastavil(a) ID aplikácie OAuth pre tohto poskytovateľa na „%s“.',
  'To configure Google OAuth, create a new \'API Project\' here:

https://console.developers.google.com/

Adjust these configuration settings for your project:

  - Under **APIs & auth > APIs**, scroll down the list and enable     the **Google+ API**.
     - You will need to consent to the **Google+ API** terms if you  have not before.
  - Under **APIs & auth > Credentials**, click **Create New Client    ID** in the **OAuth** section. Then use these settings:
     - **Application Type**: Web Application
     - **Authorized Javascript origins**: Leave this empty.
     - **Authorized redirect URI**: Set this to `%s`.


After completing configuration, copy the **Client ID** and **Client Secret** from the Google console to the fields above.' => 'Ak chcete nakonfigurovať OAuth pre Google, vytvorte tu nový „API Project“:

https://console.developers.google.com/

Upravte pre svoj projekt tieto nastavenia konfigurácie:

  - V časti **APIs & auth > APIs** zíďte v zozname nižšie a povoľte     **Google+ API**.
     - Ak ste tak ešte neurobili, budete musieť súhlasiť s podmienkami **Google+ API**.
  - V časti **APIs & auth > Credentials** kliknite v sekcii **OAuth** na **Create New Client    ID**. Potom použite tieto nastavenia:
     - **Application Type**: Web Application
     - **Authorized Javascript origins**: Nechajte prázdne.
     - **Authorized redirect URI**: Nastavte na `%s`.


Po dokončení konfigurácie skopírujte **Client ID** a **Client Secret** z konzoly Google do polí vyššie.',
  'Skipping, provider does not support token refresh.' => 'Preskakuje sa, poskytovateľ nepodporuje obnovovanie tokenov.',
  'This factor has been removed from your device, so this server can not send you a challenge. To continue, an administrator must strip this factor from your account.' => 'Tento faktor bol z vášho zariadenia odstránený, takže vám tento server nemôže poslať výzvu. Ak chcete pokračovať, administrátor musí tento faktor odstrániť z vášho účtu.',
  'You need to add multi-factor authentication to your Phabricator account as you have permissions to access some non-public content.' => 'K svojmu účtu Phabricator musíte pridať viacfaktorové overenie, pretože máte oprávnenia na prístup k neverejnému obsahu.',
  'Attempting to upgrade password hasher, but the password for the upgrade is not the stored credential!' => 'Pokus o aktualizáciu hašovača hesiel, ale heslo pre aktualizáciu nie je uloženým poverením!',
  'Your Duo account ("%s") requires enrollment. Contact your Duo administrator for help. Duo status message: %s' => 'Váš účet Duo („%s“) vyžaduje registráciu. O pomoc požiadajte svojho administrátora Duo. Stavová správa Duo: %s',
  'The OAuth provider failed to retrieve an account ID.' => 'Poskytovateľovi OAuth sa nepodarilo získať ID účtu.',
  'Reset action counters for this user.' => 'Vynulovať počítadlá akcií pre tohto používateľa.',
  'Edit SSH Key' => 'Upraviť kľúč SSH',
  'Attempting to set an empty password!' => 'Pokus o nastavenie prázdneho hesla!',
  '%s changed this contact number from %s to %s.' => '%s zmenil(a) toto kontaktné číslo z %s na %s.',
  'Welcome, %s. To complete the process of logging in, provide your multi-factor credentials.' => 'Vitajte, %s. Ak chcete dokončiť proces prihlásenia, poskytnite svoje viacfaktorové poverenia.',
  'Already Accepted Invite' => 'Pozvánka už bola prijatá',
  'No user exists with username "%s".' => 'Neexistuje používateľ s používateľským menom „%s“.',
  'Unlock the authentication provider config, to make it possible to edit the config using the web UI. Make sure to do **bin/auth lock** when done editing the configuration.' => 'Odomknúť konfiguráciu poskytovateľa overenia, aby ju bolo možné upravovať cez webové rozhranie. Po dokončení úprav konfigurácie nezabudnite spustiť **bin/auth lock**.',
  'Account does not match provider!' => 'Účet sa nezhoduje s poskytovateľom!',
  'Too many account recovery email links have been sent to this account in a short period of time.' => 'Na tento účet bolo za krátky čas odoslaných príliš veľa e-mailových odkazov na obnovenie účtu.',
  'Account Not Linkable' => 'Účet sa nedá prepojiť',
  'ou=People, dc=example, dc=com' => 'ou=People, dc=example, dc=com',
  'Enable Provider?' => 'Povoliť poskytovateľa?',
  'Strip a specific factor type. Use `bin/auth list-factors` for a list of factor types.' => 'Odstrániť konkrétny typ faktora. Zoznam typov faktorov získate pomocou `bin/auth list-factors`.',
  'Provide Multi-Factor Credentials' => 'Poskytnite viacfaktorové poverenia',
  'Edit Contact Numbers' => 'Upraviť kontaktné čísla',
  'Skip email verification for accounts registered through this provider.' => 'Preskočiť overenie e-mailu pre účty zaregistrované cez tohto poskytovateľa.',
  '[%s] New User "%s" Awaiting Approval' => '[%s] Nový používateľ „%s“ čaká na schválenie',
  'You have failed to enter the correct account password too often in a short period of time.' => 'Za krátky čas ste príliš veľakrát nezadali správne heslo k účtu.',
  'Add Multi-Factor Authentication' => 'Pridať viacfaktorové overenie',
  'JIRA instance name must contain only lowercase letters, digits, and period.' => 'Názov inštancie JIRA môže obsahovať iba malé písmená, číslice a bodku.',
  'The external service ("%s") you just authenticated with is not configured to allow account linking on this server. An administrator may have recently disabled it.' => 'Externá služba („%s“), ktorou ste sa práve overili, nie je na tomto serveri nakonfigurovaná tak, aby umožňovala prepájanie účtov. Administrátor ju možno nedávno zakázal.',
  'Terminate Session' => 'Ukončiť reláciu',
  'You must choose a password.' => 'Musíte si zvoliť heslo.',
  'Failed to find an OAuth client with id %s.' => 'Nepodarilo sa nájsť klienta OAuth s id %s.',
  'This engine is used to edit contact numbers.' => 'Tento nástroj sa používa na úpravu kontaktných čísel.',
  'You can not set the response digest for a challenge directly. Instead, set a response token. A response digest will be computed automatically.' => 'Digest odpovede pre výzvu nemôžete nastaviť priamo. Namiesto toho nastavte token odpovede. Digest odpovede sa vypočíta automaticky.',
  '%s created this contact number.' => '%s vytvoril(a) toto kontaktné číslo.',
  'Duo providers must have an API credential.' => 'Poskytovatelia Duo musia mať poverenie API.',
  'You can only verify one address at a time.' => 'Naraz môžete overiť iba jednu adresu.',
  'SSH Key %d' => 'Kľúč SSH %d',
  'Public key type should be one of: %s' => 'Typ verejného kľúča by mal byť jeden z: %s',
  'CHANGES TO MESSAGE' => 'ZMENY V SPRÁVE',
  'App Code' => 'Kód aplikácie',
  'Duo API Credential' => 'Poverenie API Duo',
  '%s edited a property of this provider.' => '%s upravil(a) vlastnosť tohto poskytovateľa.',
  'Auth Email Invites' => 'E-mailové pozvánky Auth',
  'Address Verified' => 'Adresa overená',
  'To verify your phone as an authentication factor, a text message with a secret code will be sent to the phone number you have listed as your primary contact number.' => 'Ak chcete svoj telefón overiť ako overovací faktor, na telefónne číslo, ktoré máte uvedené ako primárne kontaktné číslo, bude odoslaná textová správa s tajným kódom.',
  'DISABLE APPROVAL QUEUE' => 'ZAKÁZAŤ FRONT NA SCHVÁLENIE',
  'Specify either specific factors with "--type", or all factors with "--all-types", but not both.' => 'Zadajte buď konkrétne faktory pomocou „--type“, alebo všetky faktory pomocou „--all-types“, ale nie oboje.',
  'No OAuth Access Token' => 'Žiadny prístupový token OAuth',
  'Your account is already linked to an external account for this provider.' => 'Váš účet je už prepojený s externým účtom tohto poskytovateľa.',
  'You are already logged in.' => 'Už ste prihlásený.',
  'Wait For Approval Instructions' => 'Pokyny pri čakaní na schválenie',
  'Link LDAP Account' => 'Prepojiť účet LDAP',
  'Invalid JSON response from "user.whoami" request: %s' => 'Neplatná odpoveď JSON na požiadavku „user.whoami“: %s',
  'ldap.example.com' => 'ldap.example.com',
  'This password is associated with an object PHID ("%s") for a different object than the provided one ("%s").' => 'Toto heslo je priradené k PHID objektu („%s“) pre iný objekt, než bol zadaný („%s“).',
  'Disable Number' => 'Zakázať číslo',
  'Username or Email' => 'Používateľské meno alebo e-mail',
  'Your %s account is already connected to an external account on this service ("%s"), but you are currently logged in to the service with a different account. Log out of the external service, then log back in with the correct account before refreshing the account link.' => 'Váš účet %s je už pripojený k externému účtu v tejto službe („%s“), ale momentálne ste do služby prihlásení s iným účtom. Odhláste sa z externej služby a pred obnovením prepojenia účtu sa znova prihláste so správnym účtom.',
  'Verify this email address (%s) and attach it to your account (%s)?' => 'Overiť túto e-mailovú adresu (%s) a pripojiť ju k vášmu účtu (%s)?',
  'Revoke SSH Public Key' => 'Odvolať verejný kľúč SSH',
  'Edit MFA Providers' => 'Upraviť poskytovateľov MFA',
  'Before you can set up or use LDAP, you need to install the PHP LDAP extension. It is not currently installed, so PHP can not talk to LDAP. Usually you can install it with `%s`, `%s`, or a similar package manager command.' => 'Skôr než budete môcť nastaviť alebo používať LDAP, musíte nainštalovať rozšírenie PHP LDAP. Momentálne nie je nainštalované, takže PHP nemôže komunikovať s LDAP. Zvyčajne ho môžete nainštalovať pomocou `%s`, `%s` alebo podobného príkazu správcu balíkov.',
  '%s failed!' => '%s zlyhalo!',
  'This server is configured with an email domain whitelist (in %s), so only users with a verified email address at one of these %s allowed domain(s) will be able to register an account: %s' => array(
    
    array(
      'Tento server je nakonfigurovaný so zoznamom povolených e-mailových domén (v %s), takže si účet budú môcť zaregistrovať iba používatelia s overenou e-mailovou adresou na doméne %3$s.',
      'Tento server je nakonfigurovaný so zoznamom povolených e-mailových domén (v %s), takže si účet budú môcť zaregistrovať iba používatelia s overenou e-mailovou adresou na jednej z týchto povolených domén: %3$s',
    ),
  ),
  'To configure Slack OAuth, create a new application here:

https://api.slack.com/docs/sign-in-with-slack#create_slack_app

When creating your application, use these settings:

  - **Redirect URI:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Ak chcete nakonfigurovať OAuth pre Slack, vytvorte tu novú aplikáciu:

https://api.slack.com/docs/sign-in-with-slack#create_slack_app

Pri vytváraní aplikácie použite tieto nastavenia:

  - **Redirect URI:** Nastavte na: `%s`

Po dokončení konfigurácie skopírujte **Client ID** a **Client Secret** do polí vyššie. (Možno budete musieť najprv vygenerovať klientske tajomstvo kliknutím na \'New Secret\'.)',
  'A challenge has been sent to your phone. Open the Duo application and confirm the challenge, then continue.' => 'Do vášho telefónu bola odoslaná výzva. Otvorte aplikáciu Duo, potvrďte výzvu a potom pokračujte.',
  'Amazon' => 'Amazon',
  'MFA Sync Token' => 'Synchronizačný token MFA',
  'OAuth client "%s" is now trusted.' => 'Klient OAuth „%s“ je teraz dôveryhodný.',
  'Your browser did not submit a registration key with the request. You must use the same browser to begin and complete registration. Check that cookies are enabled and try again.' => 'Váš prehliadač neodoslal s požiadavkou registračný kľúč. Na začatie a dokončenie registrácie musíte použiť ten istý prehliadač. Skontrolujte, či máte povolené cookies, a skúste to znova.',
  'Not Complete' => 'Nedokončené',
  '**Step 1 of 2 - Name Remote Server**

Choose a permanent name for the remote server you want to connect to. This name is used internally to keep track of the remote server, in case the URL changes later.' => '**Krok 1 z 2 – Pomenovanie vzdialeného servera**

Zvoľte trvalý názov pre vzdialený server, ku ktorému sa chcete pripojiť. Tento názov sa používa interne na sledovanie vzdialeného servera pre prípad, že sa URL neskôr zmení.',
  'Unlink Account' => 'Zrušiť prepojenie účtu',
  'You must specify the path to a public keyfile with %s.' => 'Pomocou %s musíte zadať cestu k súboru s verejným kľúčom.',
  'Remove multi-factor authentication from an account.' => 'Odstrániť z účtu viacfaktorové overenie.',
  'Edit Existing Provider' => 'Upraviť existujúceho poskytovateľa',
  '%s changed the credential for this provider from %s to %s.' => '%s zmenil(a) poverenie tohto poskytovateľa z %s na %s.',
  'You are creating a new account linked to an existing external account.' => 'Vytvárate nový účet prepojený s existujúcim externým účtom.',
  'Signing session legalpad documents of user with no session!' => 'Podpisovanie dokumentov Legalpad relácie používateľa bez relácie!',
  'This is the only external login account linked to your account. If you remove it, you may no longer be able to log in.' => 'Toto je jediný externý prihlasovací účet prepojený s vaším účtom. Ak ho odstránite, možno sa už nebudete môcť prihlásiť.',
  '%s updated the message text.' => '%s aktualizoval(a) text správy.',
  'NOTE: Amazon **requires** HTTPS, but this service does not use HTTPS. **You will not be able to add Amazon as an authentication provider until you configure HTTPS on this install**.' => 'NOTE: Amazon **vyžaduje** HTTPS, ale táto služba HTTPS nepoužíva. **Kým na tejto inštalácii nenakonfigurujete HTTPS, nebudete môcť pridať Amazon ako poskytovateľa overenia**.',
  'Verify this email address (%s) and attach it to your account?' => 'Overiť túto e-mailovú adresu (%s) a pripojiť ju k vášmu účtu?',
  'No Linkable External Providers' => 'Žiadni prepojiteľní externí poskytovatelia',
  'This account is not linkable.' => 'Tento účet sa nedá prepojiť.',
  'Allow Unlinking Accounts' => 'Povoliť rušenie prepojenia účtov',
  'This request included an improperly formatted MFA challenge token and can not be processed.' => 'Táto požiadavka obsahovala nesprávne naformátovaný token výzvy MFA a nedá sa spracovať.',
  'Contact numbers can not be longer than %s characters.' => array(
    'Kontaktné čísla nemôžu byť dlhšie ako %s znak.',
    'Kontaktné čísla nemôžu byť dlhšie ako %s znaky.',
    'Kontaktné čísla nemôžu byť dlhšie ako %s znakov.',
  ),
  'OAuth1 Account' => 'Účet OAuth1',
  'Customized' => 'Prispôsobené',
  'When you need to authenticate, a text message with a code will be sent to your phone.' => 'Keď sa budete musieť overiť, na váš telefón bude odoslaná textová správa s kódom.',
  '"%s" Account' => 'Účet „%s“',
  'Password Reset' => 'Obnovenie hesla',
  'Expected valid JSON response from Amazon account data request.' => 'Očakávala sa platná odpoveď JSON na požiadavku o údaje účtu Amazon.',
  'Revoked SSH keys can not be edited or reinstated.' => 'Odvolané kľúče SSH sa nedajú upravovať ani obnoviť.',
  'Follow referrals. Disable this for Windows AD 2003.' => 'Nasledovať odkazy (referrals). Pre Windows AD 2003 toto zakážte.',
  'WARNING: You have not configured any authentication providers yet, so your account has no login credentials. If you log out now, you will not be able to log back in normally.' => 'WARNING: Zatiaľ ste nenakonfigurovali žiadnych poskytovateľov overenia, takže váš účet nemá žiadne prihlasovacie poverenia. Ak sa teraz odhlásite, nebudete sa môcť normálne znova prihlásiť.',
  'If you do not recognize this change, it may indicate your account has been compromised.' => 'Ak túto zmenu nepoznáte, môže to znamenať, že váš účet bol napadnutý.',
  'Link Accounts' => 'Prepojiť účty',
  'Create Admin Account' => 'Vytvoriť účet administrátora',
  'Create MFA Provider' => 'Vytvoriť poskytovateľa MFA',
  'Log Out?' => 'Odhlásiť sa?',
  'Installed' => 'Nainštalované',
  'You have not configured a primary contact number. Configure a contact number before adding SMS as an authentication factor.' => 'Nenakonfigurovali ste primárne kontaktné číslo. Pred pridaním SMS ako overovacieho faktora nakonfigurujte kontaktné číslo.',
  'Unlink External Account' => 'Zrušiť prepojenie externého účtu',
  '%s made this the primary contact number.' => '%s nastavil(a) toto ako primárne kontaktné číslo.',
  'Automatically log in with this provider if it is the only available provider.' => 'Automaticky prihlásiť cez tohto poskytovateľa, ak je jediným dostupným poskytovateľom.',
  '%s changed the enrollment policy for this provider from %s to %s.' => '%s zmenil(a) politiku registrácie tohto poskytovateľa z %s na %s.',
  'Currently, there are no configured external auth providers which you can link your account to.' => 'Momentálne nie sú nakonfigurovaní žiadni externí poskytovatelia overenia, s ktorými by ste mohli prepojiť svoj účet.',
  '%s disabled account linking.' => '%s zakázal(a) prepájanie účtov.',
  'Number Already Primary' => 'Číslo je už primárne',
  'Strip these authentication factors?' => 'Odstrániť tieto overovacie faktory?',
  'The OAuth provider did not return a "code" parameter in its response.' => 'Poskytovateľ OAuth vo svojej odpovedi nevrátil parameter „code“.',
  'Your Duo account ("%s") has not completed Duo enrollment. Check your email and complete enrollment to continue.' => 'Váš účet Duo („%s“) nedokončil registráciu v Duo. Ak chcete pokračovať, skontrolujte si e-mail a dokončite registráciu.',
  'Locked the authentication provider configuration.' => 'Konfigurácia poskytovateľa overenia bola uzamknutá.',
  'Specify the target to revoke credentials from with "--from" or specify "--everywhere", but not both.' => 'Zadajte cieľ, z ktorého sa majú odvolať poverenia, pomocou „--from“, alebo zadajte „--everywhere“, ale nie oboje.',
  'Your browser submitted a different registration key than the one associated with this account. You may need to clear your cookies.' => 'Váš prehliadač odoslal iný registračný kľúč, než je kľúč priradený k tomuto účtu. Možno budete musieť vymazať cookies.',
  'Enable Provider' => 'Povoliť poskytovateľa',
  'Log in to %s' => 'Prihlásiť sa do %s',
  'The password you entered has been revoked. You can not reuse a password which has been revoked. Choose a new password.' => 'Heslo, ktoré ste zadali, bolo odvolané. Odvolané heslo nemôžete použiť znova. Zvoľte si nové heslo.',
  'Make Primary Number' => 'Nastaviť ako primárne číslo',
  'Strip factors from all users.' => 'Odstrániť faktory všetkým používateľom.',
  'Duo username pairing mode ("%s") is not supported.' => 'Režim párovania používateľských mien Duo („%s“) nie je podporovaný.',
  '**Step 2 of 2 - Configure OAuth Server**

To configure OAuth, create a new application here:

%s

When creating your application, use these settings:

  - **Redirect URI:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => '**Krok 2 z 2 – Konfigurácia servera OAuth**

Ak chcete nakonfigurovať OAuth, vytvorte tu novú aplikáciu:

%s

Pri vytváraní aplikácie použite tieto nastavenia:

  - **Redirect URI:** Nastavte na: `%s`

Po dokončení konfigurácie skopírujte **Client ID** a **Client Secret** do polí vyššie. (Možno budete musieť najprv vygenerovať klientske tajomstvo kliknutím na \'New Secret\'.)',
  'Facebook' => 'Facebook',
  'Really revoke all tokens? Among other temporary authorizations, this will disable any outstanding password reset or account recovery links.' => 'Naozaj odvolať všetky tokeny? Okrem iných dočasných autorizácií tým zneplatníte aj všetky nevyužité odkazy na obnovenie hesla alebo účtu.',
  'LDAP Version' => 'Verzia LDAP',
  'APPROVAL QUEUE' => 'FRONT NA SCHVÁLENIE',
  '%s removed this password from the revocation list.' => '%s odstránil(a) toto heslo zo zoznamu odvolaných.',
  'Lock authentication provider config, to prevent changes to the config without doing **bin/auth unlock**.' => 'Uzamknúť konfiguráciu poskytovateľa overenia, aby sa zabránilo zmenám konfigurácie bez spustenia **bin/auth unlock**.',
  'To configure Asana OAuth, create a new application here:

https://app.asana.com/-/account_api

When creating your application, use these settings:

  - **App URL:** Set this to: `%s`
  - **Redirect URL:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => 'Ak chcete nakonfigurovať OAuth pre Asanu, vytvorte tu novú aplikáciu:

https://app.asana.com/-/account_api

Pri vytváraní aplikácie použite tieto nastavenia:

  - **App URL:** Nastavte na: `%s`
  - **Redirect URL:** Nastavte na: `%s`

Po dokončení konfigurácie skopírujte **Client ID** a **Client Secret** do polí vyššie.',
  'After you download the private key, it will be destroyed. You will not be able to retrieve it if you lose your copy.' => 'Po stiahnutí bude súkromný kľúč zničený. Ak svoju kópiu stratíte, nebudete ho môcť získať znova.',
  'After logging in you should set a password for your account, or link your account to an external account that you can use to authenticate in the future.' => 'Po prihlásení by ste si mali nastaviť heslo k svojmu účtu alebo prepojiť svoj účet s externým účtom, ktorý budete môcť v budúcnosti používať na overenie.',
  'Analyze and diagnose issues with LDAP configuration.' => 'Analyzovať a diagnostikovať problémy s konfiguráciou LDAP.',
  'Your session is no longer in high security.' => 'Vaša relácia už nie je vo vysokej bezpečnosti.',
  'Revoked' => 'Odvolané',
  'Disable the contact number %s?' => 'Zakázať kontaktné číslo %s?',
  'Factor Name: %s' => 'Názov faktora: %s',
  'Providers' => 'Poskytovatelia',
  'Address Duplicated in Input' => 'Adresa je vo vstupe duplikovaná',
  'Scan the QR code or manually enter the key shown below into the application.' => 'Naskenujte QR kód alebo do aplikácie ručne zadajte kľúč zobrazený nižšie.',
  'The account you are attempting to register with uses a disabled authentication provider ("%s"). An administrator may have recently disabled this provider.' => 'Účet, ktorým sa pokúšate zaregistrovať, používa zakázaného poskytovateľa overenia („%s“). Administrátor tohto poskytovateľa možno nedávno zakázal.',
  'Register an Account' => 'Zaregistrovať účet',
  'Can Not Edit Trusted Key' => 'Dôveryhodný kľúč sa nedá upraviť',
  'OAuth App ID' => 'ID aplikácie OAuth',
  'Invites are visible to administrators, the inviting user, users with an invite code, and the user who accepts the invite.' => 'Pozvánky sú viditeľné pre administrátorov, pozývajúceho používateľa, používateľov s kódom pozvánky a používateľa, ktorý pozvánku prijme.',
  'Specified public keyfile "%s" does not exist!' => 'Zadaný súbor s verejným kľúčom „%s“ neexistuje!',
  'You must specify the email to verify.' => 'Musíte zadať e-mail, ktorý sa má overiť.',
  'The key "%s" will be permanently revoked, and you will no longer be able to use the corresponding private key to authenticate.' => 'Kľúč „%s“ bude natrvalo odvolaný a zodpovedajúci súkromný kľúč už nebudete môcť použiť na overenie.',
  'TOTP' => 'TOTP',
  'Configure %s OAuth.' => 'Nakonfigurovať OAuth pre %s.',
  'Refreshing account #%d.' => 'Obnovuje sa účet č. %d.',
  'You can not make a disabled number your primary contact number.' => 'Zakázané číslo nemôžete nastaviť ako svoje primárne kontaktné číslo.',
  'Failed to bind to LDAP server (as user "%s").' => 'Nepodarilo sa naviazať na server LDAP (ako používateľ „%s“).',
  'Configure a connection to an LDAP server so that users can use their LDAP credentials to log in.' => 'Nakonfigurujte pripojenie k serveru LDAP, aby sa používatelia mohli prihlasovať pomocou svojich poverení LDAP.',
  'No email exists with address "%s"!' => 'Neexistuje žiadny e-mail s adresou „%s“!',
  'Revoke SSH Key' => 'Odvolať kľúč SSH',
  'The email address associated with this external account ("%s") is not a valid email address and can not be used to register an account. Choose a different, valid address.' => 'E-mailová adresa priradená k tomuto externému účtu („%s“) nie je platnou e-mailovou adresou a nedá sa použiť na registráciu účtu. Zvoľte inú, platnú adresu.',
  'OAuth client "%s" is already untrusted.' => 'Klient OAuth „%s“ už je nedôveryhodný.',
  'Onboarding' => 'Onboarding',
  'Request did not include account key.' => 'Požiadavka neobsahovala kľúč účtu.',
  'Account Disabled' => 'Účet zakázaný',
  'JIRA instance name is required.' => 'Názov inštancie JIRA je povinný.',
  'Mail Body: Set Password' => 'Telo e-mailu: Nastavenie hesla',
  'LDAP Password' => 'Heslo LDAP',
  'Edit SSH Public Key' => 'Upraviť verejný kľúč SSH',
  'Generated' => 'Vygenerované',
  '%s updated the OAuth application secret for this provider.' => '%s aktualizoval(a) tajomstvo aplikácie OAuth pre tohto poskytovateľa.',
  'Base URI' => 'Základné URI',
  'Leaving High Security' => 'Opúšťanie vysokej bezpečnosti',
  'Consumer key is required.' => 'Kľúč spotrebiteľa je povinný.',
  'Username or password are incorrect.' => 'Používateľské meno alebo heslo sú nesprávne.',
  'Attempted to set \'%s\' cookie to \'%s\', but your browser did not accept the cookie. Check that cookies are enabled, clear them, and try again.' => 'Pokus o nastavenie cookie \'%s\' na \'%s\', ale váš prehliadač cookie neprijal. Skontrolujte, či máte povolené cookies, vymažte ich a skúste to znova.',
  'Unable to load Duo API credential ("%s").' => 'Nepodarilo sa načítať poverenie API Duo („%s“).',
  'The authentication provider did not return a client state parameter in its response, but one was expected. If this problem persists, you may need to clear your cookies.' => 'Poskytovateľ overenia vo svojej odpovedi nevrátil parameter stavu klienta, hoci sa očakával. Ak tento problém pretrváva, možno budete musieť vymazať cookies.',
  'One-Time Login' => 'Jednorazové prihlásenie',
  'NOTE: This provider **only supports JIRA 6**. It will not work with JIRA 5 or earlier.' => 'NOTE: Tento poskytovateľ **podporuje iba JIRA 6**. S JIRA 5 alebo staršou nebude fungovať.',
  'SSH key name is required.' => 'Názov kľúča SSH je povinný.',
  'Revokes all active login sessions.

Affected users will be logged out and need to log in again.' => 'Odvolá všetky aktívne prihlasovacie relácie.

Dotknutí používatelia budú odhlásení a budú sa musieť znova prihlásiť.',
  'Consumer secret is required.' => 'Tajomstvo spotrebiteľa je povinné.',
  'Address Error' => 'Chyba adresy',
  'Password authentication is not enabled and you are already logged in. There is nothing for you here.' => 'Overovanie heslom nie je povolené a vy ste už prihlásení. Nie je tu pre vás nič.',
  'Strip factors without prompting.' => 'Odstrániť faktory bez pýtania sa.',
  'Auth Message' => 'Správa overenia',
  'Auth Challenge' => 'Výzva overenia',
  'No Matching Sessions' => 'Žiadne zodpovedajúce relácie',
  'Expected "newResultFromIssuedChallenges()" to return null or an object of class "%s"; got something else (in "%s").' => 'Očakávalo sa, že „newResultFromIssuedChallenges()“ vráti null alebo objekt triedy „%s“; vrátilo niečo iné (v „%s“).',
  'Auth provider failed to load an account from %s!' => 'Poskytovateľovi overenia sa nepodarilo načítať účet z %s!',
  'Provider Enabled' => 'Poskytovateľ povolený',
  'Newly registered user "%s" is awaiting account approval by an administrator.' => 'Novo zaregistrovaný používateľ „%s“ čaká na schválenie účtu administrátorom.',
  'Unable to connect to LDAP server (%s:%d).' => 'Nepodarilo sa pripojiť k serveru LDAP (%s:%d).',
  'There are no matching sessions to terminate.' => 'Nie sú žiadne zodpovedajúce relácie na ukončenie.',
  'No accounts match the arguments!' => 'Argumentom nezodpovedajú žiadne účty!',
  'Register New Account' => 'Zaregistrovať nový účet',
  'SSH KEY DETAIL' => 'PODROBNOSTI KĽÚČA SSH',
  'Recover access to an account if you have locked yourself out.' => 'Obnoviť prístup k účtu, ak ste sa z neho uzamkli.',
  'Failed to convert public key into PKCS8 format. If you are developing on OSX, you may be able to use `%s` to work around this issue. %s' => 'Nepodarilo sa previesť verejný kľúč do formátu PKCS8. Ak vyvíjate na OSX, tento problém možno obídete pomocou `%s`. %s',
  'Send Test Message' => 'Odoslať testovaciu správu',
  'An email has been sent containing a link you can use to set a password for your account.' => 'Bol odoslaný e-mail s odkazom, pomocou ktorého si môžete nastaviť heslo k svojmu účtu.',
  'Are you sure you want to log out?' => 'Naozaj sa chcete odhlásiť?',
  '(WARNING) Examine the table below for information on how password hashes will be stored in the database.

(NOTE) You can select a minimum password length by setting `%s` in configuration.' => '(WARNING) V tabuľke nižšie nájdete informácie o tom, ako sa budú haše hesiel ukladať do databázy.

(NOTE) Minimálnu dĺžku hesla môžete zvoliť nastavením `%s` v konfigurácii.',
  'Link Account' => 'Prepojiť účet',
  'Login/Registration' => 'Prihlásenie/registrácia',
  'List available multi-factor authentication providers.' => 'Vypísať dostupných poskytovateľov viacfaktorového overenia.',
  'List available multi-factor authentication factors.' => 'Vypísať dostupné faktory viacfaktorového overenia.',
  'Account Recovery' => 'Obnovenie účtu',
  'Multi-Factor Authentication Setup Complete' => 'Nastavenie viacfaktorového overenia je dokončené',
  'You changed the email address to a @wikimedia.org address but your External Account is not a WMF SUL account. Please log into mediawiki.org with your WMF SUL account (ending in "(WMF)" or "-WMF") provided to you by WMF ITS. Then register again in Phabricator. See also https://office.wikimedia.org/wiki/User_account_policy' => 'Zmenili ste e-mailovú adresu na adresu @wikimedia.org, ale váš externý účet nie je účtom WMF SUL. Prihláste sa na mediawiki.org svojím účtom WMF SUL (končiacim na „(WMF)“ alebo „-WMF“), ktorý vám poskytlo WMF ITS. Potom sa znova zaregistrujte v Phabricatore. Pozrite si aj https://office.wikimedia.org/wiki/User_account_policy',
  'Trusted' => 'Dôveryhodné',
  'Expected "newResultFromChallengeResponse()" to return an object of class "%s"; got something else (in "%s").' => 'Očakávalo sa, že „newResultFromChallengeResponse()“ vráti objekt triedy „%s“; vrátilo niečo iné (v „%s“).',
  'Allow Logins' => 'Povoliť prihlásenia',
  'Domain' => 'Doména',
  'You must specify the path to a pkcs8 keyfile with %s.' => 'Pomocou %s musíte zadať cestu k súboru s kľúčom pkcs8.',
  'Email Sent' => 'E-mail odoslaný',
  'Twitch.tv' => 'Twitch.tv',
  'This engine is used to edit authentication messages.' => 'Tento nástroj sa používa na úpravu správ overenia.',
  'Show factors, but do not strip them.' => 'Zobraziť faktory, ale neodstraňovať ich.',
  'Pattern "%s" is not valid.' => 'Vzor „%s“ nie je platný.',
  'Add Multi-Factor Authentication To Your Account' => 'Pridať do svojho účtu viacfaktorové overenie',
  'Auth Providers' => 'Poskytovatelia overenia',
  'View Active Keys' => 'Zobraziť aktívne kľúče',
  'Auth Messages' => 'Správy overenia',
  'Auth Password' => 'Heslo overenia',
  'SSH Key %d: %s' => 'Kľúč SSH %d: %s',
  'The external account you just logged in with is not associated with a valid %s user account.' => 'Externý účet, ktorým ste sa práve prihlásili, nie je priradený k platnému používateľskému účtu %s.',
  'Refreshed token, new token expires in %s seconds.' => array(
    'Token bol obnovený, platnosť nového tokenu vyprší o %s sekundu.',
    'Token bol obnovený, platnosť nového tokenu vyprší o %s sekundy.',
    'Token bol obnovený, platnosť nového tokenu vyprší o %s sekúnd.',
  ),
  'SMS' => 'SMS',
  '%s set the OAuth application secret for this provider.' => '%s nastavil(a) tajomstvo aplikácie OAuth pre tohto poskytovateľa.',
  'Reset %s action(s).' => array(
    'Vynulovaná %s akcia.',
    'Vynulované %s akcie.',
    'Vynulovaných %s akcií.',
  ),
  'Address Already Verified' => 'Adresa je už overená',
  'OAuth client "%s" is already trusted.' => 'Klient OAuth „%s“ už je dôveryhodný.',
  'When users click the "Change Username" action on their profile pages but do not have the required permissions, they will be presented with a message explaining that they are not authorized to make the edit.

You can optionally provide additional instructions here to help users request a username change, if there is someone specific they should contact or a particular workflow they should use.' => 'Keď používatelia kliknú na svojich profilových stránkach na akciu „Zmeniť používateľské meno“, ale nemajú potrebné oprávnenia, zobrazí sa im správa s vysvetlením, že nemajú oprávnenie vykonať túto úpravu.

Voliteľne tu môžete poskytnúť ďalšie pokyny, ktoré používateľom pomôžu požiadať o zmenu používateľského mena, ak majú kontaktovať niekoho konkrétneho alebo použiť určitý postup.',
  'You are trying to gain access to an account ("%s") that can not establish a web session.' => 'Pokúšate sa získať prístup k účtu („%s“), ktorý nemôže vytvoriť webovú reláciu.',
  'Sent By' => 'Odoslal',
  'You must approve the challenge which was sent to your phone. Open the Duo application and confirm the challenge, then continue.' => 'Musíte schváliť výzvu, ktorá bola odoslaná do vášho telefónu. Otvorte aplikáciu Duo, potvrďte výzvu a potom pokračujte.',
  'Download Private Key (%s)' => 'Stiahnuť súkromný kľúč (%s)',
  'Make sure you are copy-and-pasting the entire link into your browser. Login links are only valid for 24 hours, and can only be used once.' => 'Uistite sa, že do prehliadača kopírujete a vkladáte celý odkaz. Prihlasovacie odkazy sú platné iba 24 hodín a dajú sa použiť iba raz.',
  '%s disabled login.' => '%s zakázal(a) prihlásenie.',
  'Primary Number' => 'Primárne číslo',
  'Unverified User Email' => 'Neoverený e-mail používateľa',
  'Really revoke this token? Any temporary authorization it enables will be disabled.' => 'Naozaj odvolať tento token? Každá dočasná autorizácia, ktorú umožňuje, bude zneplatnená.',
  'The URI where JIRA is installed. For example: %s' => 'URI, kde je nainštalovaná JIRA. Napríklad: %s',
  'Set Account Password' => 'Nastaviť heslo účtu',
  'Forgot your password?' => 'Zabudli ste heslo?',
  'Raw Address' => 'Nespracovaná adresa',
  'Reset all counters.' => 'Vynulovať všetky počítadlá.',
  'To access your account, provide your email address. An email with a login link will be sent to you.' => 'Ak chcete získať prístup k svojmu účtu, zadajte svoju e-mailovú adresu. Bude vám odoslaný e-mail s prihlasovacím odkazom.',
  'Install Instructions' => 'Pokyny na inštaláciu',
  'You have made too many account recovery requests in a short period of time.' => 'Za krátky čas ste podali príliš veľa žiadostí o obnovenie účtu.',
  'Download Private Key' => 'Stiahnuť súkromný kľúč',
  'Query public keys.' => 'Dopytovať verejné kľúče.',
  'After logging in, you can use the "Auth" application to add or restore authentication providers and allow normal logins to succeed.' => 'Po prihlásení môžete pomocou aplikácie „Auth“ pridať alebo obnoviť poskytovateľov overenia a umožniť tak bežné prihlasovanie.',
  'Authentication Canceled' => 'Overenie zrušené',
  'Will Ignore Address' => 'Adresa bude ignorovaná',
  'Custom text for the message.' => 'Vlastný text správy.',
  'Number Disabled' => 'Číslo zakázané',
  '**Step 1 of 2**: Provide the name and URI for your JIRA install.

In the next step, you will configure JIRA.' => '**Krok 1 z 2**: Zadajte názov a URI vašej inštalácie JIRA.

V ďalšom kroku nakonfigurujete JIRA.',
  'You already have Duo authentication attached to your account for this provider.' => 'K svojmu účtu už máte pre tohto poskytovateľa pripojené overovanie Duo.',
  'This Duo enrollment attempt is invalid or has expired ("%s"). Cancel the workflow and try again.' => 'Tento pokus o registráciu v Duo je neplatný alebo jeho platnosť vypršala („%s“). Zrušte tento postup a skúste to znova.',
  'Login Required' => 'Vyžaduje sa prihlásenie',
  'Sign With MFA' => 'Podpísať pomocou MFA',
  'To choose a different primary contact number, make that number primary (instead of trying to demote this one).' => 'Ak chcete zvoliť iné primárne kontaktné číslo, nastavte ako primárne priamo toto číslo (namiesto toho, aby ste sa snažili degradovať súčasné).',
  '**Post a comment** in the JIRA task.' => '**Pridať komentár** do úlohy JIRA.',
  'Verified User Email' => 'Overený e-mail používateľa',
  'Email Login' => 'Prihlásenie e-mailom',
  'Trust Email Addresses' => 'Dôverovať e-mailovým adresám',
  'Bitbucket' => 'Bitbucket',
  'Unable to find LDAP account!' => 'Nepodarilo sa nájsť účet LDAP!',
  'This workflow will generate a new SSH keypair, add the public key, and let you download the private key.' => 'Tento postup vygeneruje nový pár kľúčov SSH, pridá verejný kľúč a umožní vám stiahnuť si súkromný kľúč.',
  'To configure Facebook OAuth, create a new Facebook Application here:

https://developers.facebook.com/apps

You should use these settings in your application:

%s


After creating your new application, copy the **App ID** and **App Secret** to the fields above.' => 'Ak chcete nakonfigurovať OAuth pre Facebook, vytvorte tu novú aplikáciu Facebook:

https://developers.facebook.com/apps

Vo svojej aplikácii by ste mali použiť tieto nastavenia:

%s


Po vytvorení novej aplikácie skopírujte **App ID** a **App Secret** do polí vyššie.',
  'Too many login failures recently. You must submit a CAPTCHA with your login request.' => 'V poslednom čase došlo k príliš veľkému počtu neúspešných prihlásení. So svojou požiadavkou na prihlásenie musíte odoslať CAPTCHA.',
  'Specified pkcs8 keyfile "%s" does not exist!' => 'Zadaný súbor s kľúčom pkcs8 „%s“ neexistuje!',
  'An email has been sent containing a link you can use to log in to your account.' => 'Bol odoslaný e-mail s odkazom, pomocou ktorého sa môžete prihlásiť do svojho účtu.',
  'You have already accepted this invitation.' => 'Túto pozvánku ste už prijali.',
  'You must choose a password or skip this step.' => 'Musíte si zvoliť heslo alebo tento krok preskočiť.',
  'This private key requires a passphrase, but the wrong passphrase was provided. Check that you supplied the correct key and passphrase.' => 'Tento súkromný kľúč vyžaduje prístupovú frázu, ale bola zadaná nesprávna prístupová fráza. Skontrolujte, či ste zadali správny kľúč a prístupovú frázu.',
  'When users add a factor for this provider, they are given this enrollment guidance by default:' => 'Keď používatelia pridajú faktor pre tohto poskytovateľa, štandardne sa im zobrazia tieto registračné pokyny:',
  'CAPTCHA was not entered correctly.' => 'CAPTCHA nebola zadaná správne.',
  'Configure JIRA OAuth. NOTE: Only supports JIRA 6.' => 'Nakonfigurovať OAuth pre JIRA. Poznámka: Podporuje iba JIRA 6.',
  'If you did not receive an email, you can click the button below to try sending another one.' => 'Ak vám e-mail neprišiel, môžete kliknúť na tlačidlo nižšie a skúsiť odoslať ďalší.',
  'Invite template does not include invite URI!' => 'Šablóna pozvánky neobsahuje URI pozvánky!',
  'Password providers can\'t be linked.' => 'Poskytovatelia hesiel sa nedajú prepojiť.',
  'Found LDAP Account: %s' => 'Nájdený účet LDAP: %s',
  '%s reinstated this key.' => '%s obnovil(a) tento kľúč.',
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
Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.' => '**Krok 2 z 2**: V tomto kroku nakonfigurujete JIRA.

**Vytvorenie aplikácie v JIRA**: Prihláste sa do JIRA a prejdite na **Administration**, potom **Add-ons** a potom **Application Links**. Kliknite na tlačidlo **Add Application Link** a na vytvorenie aplikácie použite tieto nastavenia:

  - **Server URL**: `%s`
  - Potom kliknite na **Next**. Na druhej stránke:
  - **Application Name**: `%s`
  - **Application Type**: `Generic Application`
  - Potom kliknite na **Create**.

**Konfigurácia vašej aplikácie**: Nájdite v tabuľke aplikáciu, ktorú ste práve vytvorili, a kliknite na odkaz **Configure** v stĺpci **Actions**. Vyberte **Incoming Authentication** a kliknite na kartu **OAuth** (môže byť vybratá predvolene). Potom použite tieto nastavenia:

  - **Consumer Key**: Nastavte na hodnotu „Kľúč spotrebiteľa“ vo formulári vyššie.
  - **Consumer Name**: `%s`
  - **Public Key**: Nastavte na hodnotu „Verejný kľúč“ vo formulári vyššie.
  - **Consumer Callback URL**: `%s`
Kliknite v JIRA na **Save**. Overovanie by teraz malo byť nakonfigurované a tento poskytovateľ by mal fungovať správne.',
  'Confirm Account Link' => 'Potvrdiť prepojenie účtu',
  'Verify Email Address' => 'Overiť e-mailovú adresu',
  'Duo account ("%s") is fully enrolled.' => 'Účet Duo („%s“) je plne zaregistrovaný.',
  'You must log in to take this action.' => 'Na vykonanie tejto akcie sa musíte prihlásiť.',
  '%s created this password.' => '%s vytvoril(a) toto heslo.',
  'Stay' => 'Zostať',
  'The account you are attempting to log in with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.' => 'Účet, ktorým sa pokúšate prihlásiť, používa neexistujúceho alebo zakázaného poskytovateľa overenia (s kľúčom „%s“). Administrátor tohto poskytovateľa možno nedávno zakázal.',
  'Two authentication providers use the same provider key (\'%s\'). Each provider must be identified by a unique key.' => 'Dvaja poskytovatelia overenia používajú rovnaký kľúč poskytovateľa (\'%s\'). Každý poskytovateľ musí byť identifikovaný jedinečným kľúčom.',
  'Duo (%s)' => 'Duo (%s)',
  'Create a New Account' => 'Vytvoriť nový účet',
  'Example: %s%sFor LDAPS, use: %s' => 'Príklad: %s%sPre LDAPS použite: %s',
  'A completed challenge was provided as an answered challenge. The underlying factor is implemented improperly, challenges may not be reused.' => 'Dokončená výzva bola poskytnutá ako zodpovedaná výzva. Príslušný faktor je implementovaný nesprávne, výzvy sa nesmú používať opakovane.',
  'There is no account associated with that email address.' => 'S touto e-mailovou adresou nie je spojený žiadny účet.',
  'Revoke Token' => 'Odvolať token',
  'Refresh Account Link' => 'Obnoviť prepojenie účtu',
  'Enable Referrals' => 'Povoliť odkazy (referrals)',
  'The LDAP extension is not enabled.' => 'Rozšírenie LDAP nie je povolené.',
  'Will Send Invite' => 'Pozvánka bude odoslaná',
  'Can Manage Auth Providers' => 'Môže spravovať poskytovateľov overenia',
  'There are no registered session engine extensions.' => 'Nie sú zaregistrované žiadne rozšírenia nástroja relácií.',
  'The password you entered is very similar to a nonsecret account identifier (like a username or email address). Choose a more distinct password.' => 'Heslo, ktoré ste zadali, je veľmi podobné netajnému identifikátoru účtu (napríklad používateľskému menu alebo e-mailovej adrese). Zvoľte si výraznejšie odlišné heslo.',
  'Revokes all Conduit API tokens used to access the API.

Users will need to use `arc install-certificate` to install new API tokens before `arc` commands will work. Bots and scripts which access the API will need to have new tokens generated and installed.' => 'Odvolá všetky tokeny Conduit API používané na prístup k API.

Používatelia budú musieť pomocou `arc install-certificate` nainštalovať nové tokeny API, kým budú príkazy `arc` fungovať. Botom a skriptom, ktoré pristupujú k API, bude potrebné vygenerovať a nainštalovať nové tokeny.',
  'JIRA' => 'JIRA',
  'Permanent Account Link' => 'Trvalé prepojenie účtu',
  '%s updated the OAuth consumer secret for this provider.' => '%s aktualizoval(a) tajomstvo spotrebiteľa OAuth pre tohto poskytovateľa.',
  'ActiveDirectory Domain' => 'Doména ActiveDirectory',
  'Very Weak' => 'Veľmi slabé',
  'Wait For Approval' => 'Čakanie na schválenie',
  'If you want to register a new account, continue with this registration workflow and choose a new, unique email address for the new account.' => 'Ak si chcete zaregistrovať nový účet, pokračujte v tomto registračnom postupe a zvoľte pre nový účet novú, jedinečnú e-mailovú adresu.',
  'If you log out now, you can still regain access to your account later by using the account recovery workflow. The login screen will prompt you with recovery instructions.' => 'Ak sa teraz odhlásite, prístup k svojmu účtu môžete neskôr získať späť pomocou postupu na obnovenie účtu. Prihlasovacia obrazovka vám zobrazí pokyny na obnovenie.',
  'Your Duo account ("%s") is not permitted to access this system. Contact your Duo administrator for help. The Duo preauth API responded with status message ("%s"): %s' => 'Váš účet Duo („%s“) nemá povolený prístup do tohto systému. O pomoc požiadajte svojho administrátora Duo. Predbežné overovacie API Duo odpovedalo stavovou správou („%s“): %s',
  'Customize Enroll Message' => 'Prispôsobiť registračnú správu',
  'Unable to Establish Web Session' => 'Nie je možné vytvoriť webovú reláciu',
  'Mobile Phone App (TOTP)' => 'Aplikácia v mobilnom telefóne (TOTP)',
  'Support for Duo push authentication.' => 'Podpora overovania pomocou push notifikácií Duo.',
  'Normal Security Restored' => 'Bežné zabezpečenie obnovené',
  'Allow users to register new accounts using this provider. If you disable registration, users can still use this provider to log in to existing accounts, but will not be able to create new accounts.' => 'Umožniť používateľom registrovať nové účty cez tohto poskytovateľa. Ak registráciu zakážete, používatelia budú stále môcť tohto poskytovateľa použiť na prihlásenie do existujúcich účtov, ale nebudú môcť vytvárať nové účty.',
  'Verify %s' => 'Overiť %s',
  'No Password Auth' => 'Bez overovania heslom',
  'Create **Issue Link** to the Revision, as an "implemented in" relationship.' => 'Vytvoriť **Issue Link** na revíziu ako vzťah „implemented in“.',
  'Authentication Challenges' => 'Overovacie výzvy',
  'Do you want to enable this provider? Users will be able to use their existing external accounts to register new accounts and log in using linked accounts.' => 'Chcete povoliť tohto poskytovateľa? Používatelia budú môcť pomocou svojich existujúcich externých účtov registrovať nové účty a prihlasovať sa cez prepojené účty.',
  'Password Reset Token' => 'Token na obnovenie hesla',
  'Allow Account Unlinking' => 'Povoliť rušenie prepojenia účtov',
  'The selected password is too short. Passwords must be a minimum of %s characters long.' => array(
    'Zvolené heslo je príliš krátke. Heslá musia mať aspoň %s znak.',
    'Zvolené heslo je príliš krátke. Heslá musia mať aspoň %s znaky.',
    'Zvolené heslo je príliš krátke. Heslá musia mať aspoň %s znakov.',
  ),
  'Base Distinguished Name' => 'Základné rozlišujúce meno',
  'You do not have permission to manage authentication providers.' => 'Nemáte oprávnenie spravovať poskytovateľov overenia.',
  'Allow Registration:' => 'Povoliť registráciu:',
  'Really terminate all sessions? (Your current login session will not be terminated.)' => 'Naozaj ukončiť všetky relácie? (Vaša aktuálna prihlasovacia relácia nebude ukončená.)',
  'Provide a public key, not a private key!' => 'Zadajte verejný kľúč, nie súkromný kľúč!',
  'Use "--type <type>" or "--provider <phid>" to specify which factors to strip, or "--all-types" to strip all factors. Use `bin/auth list-factors` to show the available factor types or `bin/auth list-mfa-providers` to show available providers.' => 'Pomocou „--type <type>“ alebo „--provider <phid>“ určte, ktoré faktory sa majú odstrániť, alebo použite „--all-types“ na odstránenie všetkých faktorov. Dostupné typy faktorov zobrazíte pomocou `bin/auth list-factors` a dostupných poskytovateľov pomocou `bin/auth list-mfa-providers`.',
  'Session is not partial!' => 'Relácia nie je čiastočná!',
  'Create Contact Number' => 'Vytvoriť kontaktné číslo',
  'Users will only be able to register with a verified email address at one of the configured [[ %s | %s ]] domains: **%s**' => 'Používatelia sa budú môcť zaregistrovať iba s overenou e-mailovou adresou na jednej z nakonfigurovaných domén [[ %s | %s ]]: **%s**',
  'You are logged in as %s, but the email address you just clicked a link from is already the primary email address for another account (%s). Switch accounts, then try again.' => 'Ste prihlásený ako %s, ale e-mailová adresa, z ktorej ste práve klikli na odkaz, je už primárnou e-mailovou adresou iného účtu (%s). Prepnite účty a potom to skúste znova.',
  '%s set the "%s" value to "%s".' => '%s nastavil(a) hodnotu „%s“ na „%s“.',
  'Confirm External Account Link' => 'Potvrdiť prepojenie externého účtu',
  'Terminate all web login sessions. If called via OAuth, also terminate the current OAuth token.

WARNING: This method does what it claims on the label. If you call this method via the test console in the web UI, it will log you out!' => 'Ukončiť všetky webové prihlasovacie relácie. Ak je volané cez OAuth, ukončí aj aktuálny token OAuth.

WARNING: Táto metóda robí presne to, čo hovorí jej názov. Ak túto metódu zavoláte cez testovaciu konzolu vo webovom rozhraní, odhlási vás!',
  'This contact number is already your primary contact number.' => 'Toto kontaktné číslo už je vaším primárnym kontaktným číslom.',
  'Authentication Tokens' => 'Overovacie tokeny',
  '%s upgraded the hash algorithm for this password from "%s" to "%s".' => '%s aktualizoval(a) hašovací algoritmus tohto hesla z „%s“ na „%s“.',
  'Multi-Factor Login' => 'Viacfaktorové prihlásenie',
  '%s disabled registration.' => '%s zakázal(a) registráciu.',
  'Edit Auth Provider' => 'Upraviť poskytovateľa overenia',
  'Verification code can not be regenerated after an invite is created.' => 'Overovací kód nie je možné znova vygenerovať po vytvorení pozvánky.',
  'Create Accounts' => 'Vytvárať účty',
  '[SSH Key]' => '[SSH Key]',
  'Stripping authentication factors...' => 'Odstraňujú sa overovacie faktory...',
  'To configure Twitter OAuth, create a new application here:

https://dev.twitter.com/apps

When creating your application, use these settings:

  - **Callback URL:** Set this to: `%s`

After completing configuration, copy the **Consumer Key** and **Consumer Secret** to the fields above.' => 'Ak chcete nakonfigurovať OAuth pre Twitter, vytvorte tu novú aplikáciu:

https://dev.twitter.com/apps

Pri vytváraní aplikácie použite tieto nastavenia:

  - **Callback URL:** Nastavte na: `%s`

Po dokončení konfigurácie skopírujte **Consumer Key** a **Consumer Secret** do polí vyššie.',
  '%s updated the public key material for this SSH key.' => '%s aktualizoval(a) materiál verejného kľúča pre tento kľúč SSH.',
  'Unlinked Account Instructions' => 'Pokyny pri neprepojenom účte',
  '%s created this key.' => '%s vytvoril(a) tento kľúč.',
  'This private key could not be opened. This might mean that the key requires a passphrase, or might mean that the key is not formatted correctly. Check that you have supplied the complete text of a valid private key and the correct passphrase.' => 'Tento súkromný kľúč sa nepodarilo otvoriť. Môže to znamenať, že kľúč vyžaduje prístupovú frázu, alebo že kľúč nie je správne naformátovaný. Skontrolujte, či ste zadali úplný text platného súkromného kľúča a správnu prístupovú frázu.',
  'Another verification email was sent to %s.' => 'Na adresu %s bol odoslaný ďalší overovací e-mail.',
  'Edit Auth Message' => 'Upraviť správu overenia',
  'When a user provides their LDAP username and password, this software can either bind to LDAP with those credentials directly (which is simpler, but not as powerful) or bind to LDAP with anonymous credentials, then search for record matching the supplied credentials (which is more complicated, but more powerful).

For many installs, direct binding is sufficient. However, you may want to search first if:

  - You want users to be able to log in with either their username     or their email address.
  - The login/username is not part of the distinguished name in     your LDAP records.
  - You want to restrict logins to a subset of users (like only     those in certain departments).
  - Your LDAP server is configured in some other way that prevents     direct binding from working correctly.

**To bind directly**, enter the LDAP attribute corresponding to the login name into the **Search Attributes** box below. Often, this is something like `sn` or `uid`. This is the simplest configuration, but will only work if the username is part of the distinguished name, and won\'t let you apply complex restrictions to logins.

  lang=text,name=Simple Direct Binding
  sn

**To search first**, provide an anonymous username and password below (or check the **Always Search** checkbox), then enter one or more search queries into this field, one per line. After binding, these queries will be used to identify the record associated with the login name the user typed.

Searches will be tried in order until a matching record is found. Each query can be a simple attribute name (like `sn` or `mail`), which will search for a matching record, or it can be a complex query that uses the string `${login}` to represent the login name.

A common simple configuration is just an attribute name, like `sn`, which will work the same way direct binding works:

  lang=text,name=Simple Example
  sn

A slightly more complex configuration might let the user log in with either their login name or email address:

  lang=text,name=Match Several Attributes
  mail
  sn

If your LDAP directory is more complex, or you want to perform sophisticated filtering, you can use more complex queries. Depending on your directory structure, this example might allow users to log in with either their email address or username, but only if they\'re in specific departments:

  lang=text,name=Complex Example
  (&(mail=${login})(|(departmentNumber=1)(departmentNumber=2)))
  (&(sn=${login})(|(departmentNumber=1)(departmentNumber=2)))

All of the attribute names used here are just examples: your LDAP server may use different attribute names.' => 'Keď používateľ zadá svoje používateľské meno a heslo LDAP, tento softvér sa môže buď naviazať na LDAP priamo s týmito povereniami (čo je jednoduchšie, ale nie také mocné), alebo sa naviazať na LDAP s anonymnými povereniami a potom vyhľadať záznam zodpovedajúci zadaným povereniam (čo je zložitejšie, ale mocnejšie).

Pri mnohých inštaláciách postačuje priame naviazanie. Vyhľadávanie ako prvý krok však môžete chcieť použiť, ak:

  - Chcete, aby sa používatelia mohli prihlasovať buď svojím používateľským menom,     alebo e-mailovou adresou.
  - Prihlasovacie/používateľské meno nie je súčasťou rozlišujúceho mena vo     vašich záznamoch LDAP.
  - Chcete obmedziť prihlasovanie na podmnožinu používateľov (napríklad iba     na tých z určitých oddelení).
  - Váš server LDAP je nakonfigurovaný nejakým iným spôsobom, ktorý bráni     správnemu fungovaniu priameho naviazania.

**Na priame naviazanie** zadajte do poľa **Atribúty vyhľadávania** nižšie atribút LDAP zodpovedajúci prihlasovaciemu menu. Často je to niečo ako `sn` alebo `uid`. Toto je najjednoduchšia konfigurácia, ale bude fungovať len vtedy, ak je používateľské meno súčasťou rozlišujúceho mena, a neumožní vám uplatniť na prihlasovanie zložité obmedzenia.

  lang=text,name=Simple Direct Binding
  sn

**Ak chcete najprv vyhľadávať**, zadajte nižšie anonymné používateľské meno a heslo (alebo zaškrtnite políčko **Vždy vyhľadávať**) a potom do tohto poľa zadajte jeden alebo viac vyhľadávacích dopytov, jeden na riadok. Po naviazaní sa tieto dopyty použijú na identifikáciu záznamu priradeného k prihlasovaciemu menu, ktoré používateľ zadal.

Vyhľadávania sa budú skúšať v poradí, kým sa nenájde zodpovedajúci záznam. Každý dopyt môže byť jednoduchý názov atribútu (napríklad `sn` alebo `mail`), ktorým sa vyhľadá zodpovedajúci záznam, alebo môže ísť o zložitý dopyt, ktorý pomocou reťazca `${login}` reprezentuje prihlasovacie meno.

Bežná jednoduchá konfigurácia je len názov atribútu, napríklad `sn`, ktorá funguje rovnako ako priame naviazanie:

  lang=text,name=Simple Example
  sn

Trochu zložitejšia konfigurácia môže používateľovi umožniť prihlásiť sa buď prihlasovacím menom, alebo e-mailovou adresou:

  lang=text,name=Match Several Attributes
  mail
  sn

Ak je váš adresár LDAP zložitejší alebo chcete vykonávať sofistikované filtrovanie, môžete použiť zložitejšie dopyty. V závislosti od štruktúry vášho adresára môže tento príklad umožniť používateľom prihlásiť sa buď e-mailovou adresou, alebo používateľským menom, ale iba ak sú v určitých oddeleniach:

  lang=text,name=Complex Example
  (&(mail=${login})(|(departmentNumber=1)(departmentNumber=2)))
  (&(sn=${login})(|(departmentNumber=1)(departmentNumber=2)))

Všetky názvy atribútov použité tu sú len príklady: váš server LDAP môže používať iné názvy atribútov.',
  'Mobile App (TOTP)' => 'Mobilná aplikácia (TOTP)',
  'Expected valid JSON response from Google account data request.' => 'Očakávala sa platná odpoveď JSON na požiadavku o údaje účtu Google.',
  'The invite code in the link you clicked has already been accepted.' => 'Kód pozvánky v odkaze, na ktorý ste klikli, už bol prijatý.',
  'No outbound mailer which can deliver SMS messages is configured.' => 'Nie je nakonfigurovaný žiadny odchádzajúci mailer, ktorý by dokázal doručovať správy SMS.',
  'True to sign this transaction group with MFA.' => 'True, ak sa má táto skupina transakcií podpísať pomocou MFA.',
  'If you leave high security, you will need to authenticate again the next time you try to take a high security action.' => 'Ak opustíte vysokú bezpečnosť, pri ďalšom pokuse o vykonanie akcie s vysokou bezpečnosťou sa budete musieť znova overiť.',
  'Link %s Account' => 'Prepojiť účet %s',
  'The LDAP authentication provider is not enabled.' => 'Poskytovateľ overenia LDAP nie je povolený.',
  'Active Phone Number' => 'Aktívne telefónne číslo',
  'Enroll in MFA' => 'Zaregistrovať sa do MFA',
  'Really destroy credentials everywhere?' => 'Naozaj zničiť poverenia všade?',
  'Contact Number' => 'Kontaktné číslo',
  'Refresh Account' => 'Obnoviť účet',
  'Failed to digest password: object ("%s") did not return an opaque envelope with a password digest.' => 'Nepodarilo sa vytvoriť digest hesla: objekt („%s“) nevrátil nepriehľadnú obálku s digestom hesla.',
  '%s changed the username policy for this provider from %s to %s.' => '%s zmenil(a) politiku používateľských mien tohto poskytovateľa z %s na %s.',
  'Optionally, specify a username attribute to use to prefill usernames when registering a new account. This is purely cosmetic and does not affect the login process, but you can configure it to make sure users get the same default username as their LDAP username, so usernames remain consistent across systems.' => 'Voliteľne zadajte atribút používateľského mena, ktorý sa použije na predvyplnenie používateľských mien pri registrácii nového účtu. Je to čisto kozmetické a nemá to vplyv na proces prihlásenia, ale môžete to nakonfigurovať tak, aby používatelia dostali rovnaké predvolené používateľské meno, ako je ich používateľské meno v LDAP, takže používateľské mená zostanú v systémoch konzistentné.',
  'SMS Code' => 'Kód SMS',
  'ldaps://ldaps.example.com/' => 'ldaps://ldaps.example.com/',
  'sn' => 'sn',
  'A passphrase was provided for this private key, but it does not require a passphrase. Check that you supplied the correct key, or omit the passphrase.' => 'Pre tento súkromný kľúč bola zadaná prístupová fráza, ale kľúč prístupovú frázu nevyžaduje. Skontrolujte, či ste zadali správny kľúč, alebo prístupovú frázu vynechajte.',
  'This provider is not configured to allow linking.' => 'Tento poskytovateľ nie je nakonfigurovaný tak, aby umožňoval prepájanie.',
  '%s created this provider.' => '%s vytvoril(a) tohto poskytovateľa.',
  'Multi-Factor' => 'Viacfaktorové',
  'This contact number is already in use.' => 'Toto kontaktné číslo sa už používa.',
  'Revokes temporary authentication tokens.

Temporary tokens are used in password reset mail, welcome mail, and by some other systems like Git LFS. Revoking temporary tokens will invalidate existing links in password reset and invite mail that was sent before the revocation occurred.' => 'Odvolá dočasné overovacie tokeny.

Dočasné tokeny sa používajú v e-mailoch na obnovenie hesla, v uvítacích e-mailoch a v niektorých ďalších systémoch, ako je Git LFS. Odvolanie dočasných tokenov zneplatní existujúce odkazy v e-mailoch na obnovenie hesla a v pozvánkach, ktoré boli odoslané pred odvolaním.',
  'The account you are attempting to link is already linked to your account.' => 'Účet, ktorý sa pokúšate prepojiť, je už prepojený s vaším účtom.',
  'Enter the code from the text message which was sent to your primary contact number.' => 'Zadajte kód z textovej správy, ktorá bola odoslaná na vaše primárne kontaktné číslo.',
  'Do you want to enable this provider? Users will be able to log in using linked accounts.' => 'Chcete povoliť tohto poskytovateľa? Používatelia sa budú môcť prihlasovať cez prepojené účty.',
  'JIRA Instance Name' => 'Názov inštancie JIRA',
  '%s updated the OAuth application ID for this provider from "%s" to "%s".' => '%s aktualizoval(a) ID aplikácie OAuth tohto poskytovateľa z „%s“ na „%s“.',
  '%s enabled registration.' => '%s povolil(a) registráciu.',
  'Auth Message %d' => 'Správa overenia %d',
  'Unable to load your OAuth1 token secret from storage. It may have expired. Try authenticating again.' => 'Nepodarilo sa načítať tajomstvo vášho tokenu OAuth1 z úložiska. Jeho platnosť možno vypršala. Skúste sa overiť znova.',
  'This private key requires a passphrase, but no passphrase was provided. Check that you supplied the correct key, or provide the passphrase.' => 'Tento súkromný kľúč vyžaduje prístupovú frázu, ale žiadna nebola zadaná. Skontrolujte, či ste zadali správny kľúč, alebo zadajte prístupovú frázu.',
  'Register Account' => 'Zaregistrovať účet',
  'Awesome' => 'Skvelé',
  '%s set the OAuth application notes for this provider.' => '%s nastavil(a) poznámky k aplikácii OAuth pre tohto poskytovateľa.',
  'Credential type "%s" is not valid. Valid credential types are: %s.' => 'Typ poverenia „%s“ nie je platný. Platné typy poverení sú: %s.',
  'Generate Keypair' => 'Vygenerovať pár kľúčov',
  'Unable to set LDAP option \'%s\' to value \'%s\'!' => 'Nepodarilo sa nastaviť možnosť LDAP \'%s\' na hodnotu \'%s\'!',
  'LDAP: Failed to retrieve record for user "%s" when searching. Credentialed users may not be able to search your LDAP server. Try configuring anonymous credentials or fully anonymous binds.' => 'LDAP: Pri vyhľadávaní sa nepodarilo získať záznam pre používateľa „%s“. Používatelia s povereniami možno nemôžu prehľadávať váš server LDAP. Skúste nakonfigurovať anonymné poverenia alebo plne anonymné naviazania.',
  'Failed to bind to LDAP server (without username).' => 'Nepodarilo sa naviazať na server LDAP (bez používateľského mena).',
  '%s changed the "%s" value from "%s" to "%s".' => '%s zmenil(a) hodnotu „%s“ z „%s“ na „%s“.',
  'You canceled authentication.' => 'Zrušili ste overenie.',
  'A password reset link will be sent to your primary email address. Follow the link to set an account password.' => 'Na vašu primárnu e-mailovú adresu bude odoslaný odkaz na obnovenie hesla. Nasledovaním odkazu si nastavíte heslo k účtu.',
  'Accepted By' => 'Prijal',
  'Expected \'%s\' in response!' => 'V odpovedi sa očakávalo \'%s\'!',
  'Anyone who can browse to this server will be able to register an account. To add email domain restrictions, configure %s.' => 'Účet si bude môcť zaregistrovať ktokoľvek, kto sa dostane na tento server. Ak chcete pridať obmedzenia e-mailových domén, nakonfigurujte %s.',
  'Requiring a high-security session from a user with no session!' => 'Vyžaduje sa relácia s vysokou bezpečnosťou od používateľa bez relácie!',
  '%s revoked this key.' => '%s odvolal(a) tento kľúč.',
  'There are no configured multi-factor providers.' => 'Nie sú nakonfigurovaní žiadni poskytovatelia viacfaktorového overenia.',
  'OAuth1 Handshake Token' => 'Token handshake OAuth1',
  'This server is not configured with any enabled authentication providers which can be used to log in. If you have accidentally locked yourself out by disabling all providers, you can use `%s` to recover access to an account.' => 'Tento server nemá nakonfigurovaných žiadnych povolených poskytovateľov overenia, ktorých by bolo možné použiť na prihlásenie. Ak ste sa omylom uzamkli tým, že ste zakázali všetkých poskytovateľov, prístup k účtu môžete obnoviť pomocou `%s`.',
  'The email address ("%s") associated with the external account is already in use by an existing %s account. Multiple %s accounts may not have the same email address, so you can not use this email address to register a new account.' => 'E-mailovú adresu („%s“) priradenú k externému účtu už používa existujúci účet %s. Viaceré účty %s nemôžu mať rovnakú e-mailovú adresu, takže túto e-mailovú adresu nemôžete použiť na registráciu nového účtu.',
  'Failed to get LDAP entries from search result.' => 'Nepodarilo sa získať položky LDAP z výsledku vyhľadávania.',
  'Captcha response is incorrect, try again.' => 'Odpoveď captcha je nesprávna, skúste to znova.',
  'Add Auth Provider' => 'Pridať poskytovateľa overenia',
  'Authentication provider (of class "%s") is attempting to load or create an external account, but provided a list of account identifiers which map to more than one account: %s.' => 'Poskytovateľ overenia (triedy „%s“) sa pokúša načítať alebo vytvoriť externý účet, ale poskytol zoznam identifikátorov účtu, ktoré zodpovedajú viac ako jednému účtu: %s.',
  'Duo API credential ("%s") has no secret key.' => 'Poverenie API Duo („%s“) nemá žiadny tajný kľúč.',
  'Factor Type' => 'Typ faktora',
  'LDAP: Failed to retrieve record for user "%s" when searching with both user and anonymous credentials.' => 'LDAP: Nepodarilo sa získať záznam pre používateľa „%s“ pri vyhľadávaní s používateľskými ani s anonymnými povereniami.',
  'Authentication Config Locked' => 'Konfigurácia overenia je uzamknutá',
  'Auth Factor' => 'Overovací faktor',
  'Confirm Link' => 'Potvrdiť prepojenie',
  'You can try again, or request a new link via email.' => 'Môžete to skúsiť znova alebo si vyžiadať nový odkaz e-mailom.',
  '%s is required!' => '%s je povinné!',
  'Create New Account' => 'Vytvoriť nový účet',
  'Your account has too many outstanding, incomplete MFA synchronization attempts. Wait an hour and try again.' => 'Váš účet má príliš veľa prebiehajúcich, nedokončených pokusov o synchronizáciu MFA. Počkajte hodinu a skúste to znova.',
  'Log In' => 'Prihlásiť sa',
  'Temporary Token Types' => 'Typy dočasných tokenov',
  'Guidance shown after a user logs in with an email link and is prompted to link an external account.' => 'Pokyny zobrazené po tom, ako sa používateľ prihlási cez e-mailový odkaz a je vyzvaný na prepojenie externého účtu.',
  'Register' => 'Zaregistrovať',
  'Provider Type' => 'Typ poskytovateľa',
  'Anonymous Username' => 'Anonymné používateľské meno',
  'Allow users to receive a code via SMS.' => 'Umožniť používateľom prijímať kód cez SMS.',
  '%s disabled auto login.' => '%s zakázal(a) automatické prihlásenie.',
  'You can not "--list" and revoke credentials (with "--from" or "--everywhere") in the same operation.' => 'V rovnakej operácii nemôžete použiť „--list“ a zároveň odvolávať poverenia (pomocou „--from“ alebo „--everywhere“).',
  'LDAP' => 'LDAP',
  'The account you are attempting to register with uses an authentication provider ("%s") which does not allow registration. An administrator may have recently disabled registration with this provider.' => 'Účet, ktorým sa pokúšate zaregistrovať, používa poskytovateľa overenia („%s“), ktorý neumožňuje registráciu. Administrátor možno nedávno zakázal registráciu cez tohto poskytovateľa.',
  'Already Accepted' => 'Už prijaté',
  'Specify an OAuth client ID with %s.' => 'Zadajte ID klienta OAuth pomocou %s.',
  'LDAP Exception: %s
LDAP Error #%d: %s' => 'Výnimka LDAP: %s
Chyba LDAP č. %d: %s',
  'Log Out Anyway' => 'Aj tak sa odhlásiť',
  'Set Primary Contact Number' => 'Nastaviť primárne kontaktné číslo',
  'You are logged in as %s, but the email address you just clicked a link from is already verified and associated with another account (%s). Switch accounts, then try again.' => 'Ste prihlásený ako %s, ale e-mailová adresa, z ktorej ste práve klikli na odkaz, je už overená a priradená k inému účtu (%s). Prepnite účty a potom to skúste znova.',
  'The external service ("%s") you just authenticated with is not configured to allow logins on this server. An administrator may have recently disabled it.' => 'Externá služba („%s“), ktorou ste sa práve overili, nie je na tomto serveri nakonfigurovaná tak, aby umožňovala prihlasovanie. Administrátor ju možno nedávno zakázal.',
  'Stronger algorithms are listed first. The highlighted algorithm will be used when storing new hashes. Older hashes will be upgraded to the best algorithm over time.' => 'Silnejšie algoritmy sú uvedené ako prvé. Pri ukladaní nových hašov sa použije zvýraznený algoritmus. Staršie haše sa časom aktualizujú na najlepší algoritmus.',
  'These auth factors will be stripped:' => 'Tieto overovacie faktory budú odstránené:',
  'Contact numbers must have a contact number.' => 'Kontaktné čísla musia mať kontaktné číslo.',
  'Engine: Session' => 'Nástroj: Relácia',
  'Require Existing Duo Account' => 'Vyžadovať existujúci účet Duo',
  'Upload SSH Public Key' => 'Nahrať verejný kľúč SSH',
  'No such user "%s"!' => 'Neexistuje používateľ „%s“!',
  '%s changed the hostname for this provider from %s to %s.' => '%s zmenil(a) názov hostiteľa tohto poskytovateľa z %s na %s.',
  'Wait for Approval' => 'Čakanie na schválenie',
  'SSH key material is required.' => 'Materiál kľúča SSH je povinný.',
  'Guidance in the "Change Username" dialog for requesting a username change.' => 'Pokyny v dialógu „Zmeniť používateľské meno“ na požiadanie o zmenu používateľského mena.',
  'To reset your password, provide your email address. An email with a login link will be sent to you.' => 'Ak si chcete obnoviť heslo, zadajte svoju e-mailovú adresu. Bude vám odoslaný e-mail s prihlasovacím odkazom.',
  'Once you have completed setup on your phone, click continue.' => 'Keď dokončíte nastavenie vo svojom telefóne, kliknite na pokračovať.',
  'Application secret is required.' => 'Tajomstvo aplikácie je povinné.',
  'Authentication Failure' => 'Zlyhanie overenia',
  'Use %s to choose a user to reset actions for.' => 'Pomocou %s zvoľte používateľa, ktorému sa majú vynulovať akcie.',
  'LDAP Username' => 'Používateľské meno LDAP',
  'Parsed Address' => 'Spracovaná adresa',
  'Login and Registration Providers' => 'Poskytovatelia prihlásenia a registrácie',
  'Send SMS: %s' => 'Odoslať SMS: %s',
  'Authentication Sessions' => 'Overovacie relácie',
  'Duo Security' => 'Duo Security',
  'Auth Provider: %s' => 'Poskytovateľ overenia: %s',
  'Trouble logging in?' => 'Problémy s prihlásením?',
  'Search Attributes' => 'Atribúty vyhľadávania',
  'You already have SMS authentication attached to your account.' => 'K svojmu účtu už máte pripojené overovanie cez SMS.',
  'The login link you clicked is invalid, out of date, or has already been used.' => 'Prihlasovací odkaz, na ktorý ste klikli, je neplatný, neaktuálny alebo už bol použitý.',
  'Message Text' => 'Text správy',
  'Revoke all credentials types.' => 'Odvolať všetky typy poverení.',
  'LDAP Exception: %s' => 'Výnimka LDAP: %s',
  'Previously Invited' => 'Už predtým pozvaný',
  'LDAP search failed.' => 'Vyhľadávanie v LDAP zlyhalo.',
  'This private key could not be opened with the provided passphrase. This might mean that the passphrase is wrong or that the key is not formatted correctly. Check that you have supplied the complete text of a valid private key and the correct passphrase.' => 'Tento súkromný kľúč sa nepodarilo otvoriť so zadanou prístupovou frázou. Môže to znamenať, že prístupová fráza je nesprávna, alebo že kľúč nie je správne naformátovaný. Skontrolujte, či ste zadali úplný text platného súkromného kľúča a správnu prístupovú frázu.',
  'Allow Auto Login' => 'Povoliť automatické prihlásenie',
  'Note: Unlinking an authentication provider will terminate any other active login sessions.' => 'Poznámka: Zrušenie prepojenia poskytovateľa overenia ukončí všetky ostatné aktívne prihlasovacie relácie.',
  '%s renamed this key from "%s" to "%s".' => '%s premenoval(a) tento kľúč z „%s“ na „%s“.',
  'Enable Number' => 'Povoliť číslo',
  'Allow Linking Accounts' => 'Povoliť prepájanie účtov',
  '%s created this MFA provider.' => '%s vytvoril(a) tohto poskytovateľa MFA.',
  'To enable the login flow, follow setup guidance and configure at least one authentication provider, then associate credentials with your account. After completing these steps, you will be able to log out and log back in normally.' => 'Ak chcete povoliť prihlasovanie, postupujte podľa pokynov na nastavenie, nakonfigurujte aspoň jedného poskytovateľa overenia a potom priraďte k svojmu účtu poverenia. Po dokončení týchto krokov sa budete môcť normálne odhlásiť a znova prihlásiť.',
  'You have not completed Duo enrollment yet. Complete enrollment, then click continue.' => 'Registráciu v Duo ste zatiaľ nedokončili. Dokončite registráciu a potom kliknite na pokračovať.',
  'Always Search' => 'Vždy vyhľadávať',
  'Allow Registration' => 'Povoliť registráciu',
  'Use this link to recover access to the "%s" account from the web interface:' => 'Pomocou tohto odkazu obnovte prístup k účtu „%s“ z webového rozhrania:',
  'Change Enroll Message' => 'Zmeniť registračnú správu',
  'You can safely ignore these warnings if the install itself has access controls (for example, it is deployed on a VPN) or if all of the configured providers have access controls (for example, they are all private LDAP or OAuth servers).' => 'Tieto varovania môžete bezpečne ignorovať, ak má samotná inštalácia riadenie prístupu (napríklad je nasadená na VPN) alebo ak majú riadenie prístupu všetci nakonfigurovaní poskytovatelia (napríklad ide výhradne o súkromné servery LDAP alebo OAuth).',
  'The external service ("%s") you just authenticated with is not configured to allow registration on this server. An administrator may have recently disabled it.' => 'Externá služba („%s“), ktorou ste sa práve overili, nie je na tomto serveri nakonfigurovaná tak, aby umožňovala registráciu. Administrátor ju možno nedávno zakázal.',
  'SSH keys inherit the policies of the user or object they authenticate.' => 'Kľúče SSH dedia zásady používateľa alebo objektu, ktorý overujú.',
  'Duo Username: %s' => 'Používateľské meno Duo: %s',
  'Check Your Email' => 'Skontrolujte si e-mail',
  'Captcha' => 'Captcha',
  'Email record has invalid user PHID!' => 'E-mailový záznam má neplatné PHID používateľa!',
  'No Matching Tokens' => 'Žiadne zodpovedajúce tokeny',
  'Auth Provider' => 'Poskytovateľ overenia',
  'Upgrading partial session of user with no session!' => 'Aktualizácia čiastočnej relácie používateľa bez relácie!',
  'Add Provider' => 'Pridať poskytovateľa',
  '%s Account' => 'Účet %s',
  'NOTE: **To complete setup**, copy and paste these keys into JIRA according to the instructions below.' => 'NOTE: **Ak chcete dokončiť nastavenie**, skopírujte a vložte tieto kľúče do JIRA podľa pokynov nižšie.',
  'JIRA Base URI' => 'Základné URI pre JIRA',
  'A session is visible only to its owner.' => 'Relácia je viditeľná iba pre svojho vlastníka.',
  '%s created this message.' => '%s vytvoril(a) túto správu.',
  'OAuth2 Account' => 'Účet OAuth2',
  'LDAP Hostname' => 'Názov hostiteľa LDAP',
  'The email address you just clicked a link from is already verified and associated with a registered account (%s). Log in to continue.' => 'E-mailová adresa, z ktorej ste práve klikli na odkaz, je už overená a priradená k registrovanému účtu (%s). Pokračujte prihlásením.',
  '%s enabled this provider.' => '%s povolil(a) tohto poskytovateľa.',
  'After entering the key, the application should display a numeric code. Enter that code below to confirm that you have configured the authenticator correctly:' => 'Po zadaní kľúča by aplikácia mala zobraziť číselný kód. Zadaním tohto kódu nižšie potvrdíte, že ste overovaciu aplikáciu nakonfigurovali správne:',
  'If you are currently using your phone to view this page, click this button to open the Duo application:' => 'Ak túto stránku práve prezeráte na svojom telefóne, otvorte aplikáciu Duo kliknutím na toto tlačidlo:',
  'External Account is a WMF SUL account but email address is not a @wikimedia.org email address. Use your @wikimedia.org email address to create your Phabricator account.' => 'Externý účet je účtom WMF SUL, ale e-mailová adresa nie je adresa @wikimedia.org. Na vytvorenie účtu v Phabricatore použite svoju e-mailovú adresu @wikimedia.org.',
  'Specify either specific users with %s, or all users with %s, but not both.' => 'Zadajte buď konkrétnych používateľov pomocou %s, alebo všetkých používateľov pomocou %s, ale nie oboje.',
  'Unable to refresh token!' => 'Nepodarilo sa obnoviť token!',
  '%s changed the status of this provider from %s to %s.' => '%s zmenil(a) stav tohto poskytovateľa z %s na %s.',
  'Consumer Key' => 'Kľúč spotrebiteľa',
  'The email address associated with this account ("%s") is already in use by an application and can not be used to register a new account. Choose a different, valid address.' => 'E-mailovú adresu priradenú k tomuto účtu („%s“) už používa aplikácia a nedá sa použiť na registráciu nového účtu. Zvoľte inú, platnú adresu.',
  'Disable Provider' => 'Zakázať poskytovateľa',
  'Logging in will verify %s as an email address you own.' => 'Prihlásením sa overí, že e-mailová adresa %s patrí vám.',
  'Not a Valid Email Address' => 'Neplatná e-mailová adresa',
  'SSH Keys' => 'Kľúče SSH',
  'Active OAuth Token (Expires: %s)' => 'Aktívny token OAuth (platnosť vyprší: %s)',
  'Specify the credential type to revoke with "--type" or "--everything", but not both.' => 'Zadajte typ poverenia na odvolanie pomocou „--type“ alebo „--everything“, ale nie oboje.',
  '(If given an option, select that this key is "Time Based", not "Counter Based".)' => '(Ak dostanete na výber, zvoľte, že tento kľúč je „Time Based“, nie „Counter Based“.)',
  'LDAP Password: ' => 'Heslo LDAP:',
  'Bad Invite Code' => 'Chybný kód pozvánky',
  '{icon check, color="green"} **Setup Complete!**

You have successfully configured multi-factor authentication for your account.

You can make adjustments from the [[ /settings/ | Settings ]] panel later.' => '{icon check, color="green"} **Nastavenie je dokončené!**

Úspešne ste pre svoj účet nakonfigurovali viacfaktorové overenie.

Úpravy môžete neskôr vykonať v paneli [[ /settings/ | Nastavenia ]].',
  'Allow users to log in or register using a username and password.' => 'Umožniť používateľom prihlásiť sa alebo zaregistrovať pomocou používateľského mena a hesla.',
  'Your remote address has made too many login attempts in a short period of time.' => 'Z vašej vzdialenej adresy bolo za krátky čas vykonaných príliš veľa pokusov o prihlásenie.',
  '%s enabled this contact number.' => '%s povolil(a) toto kontaktné číslo.',
  'WordPress.com' => 'WordPress.com',
  'Default Message' => 'Predvolená správa',
  'Guidance in the message body when users request an email link to access their account.' => 'Pokyny v tele správy, keď používatelia požiadajú o e-mailový odkaz na prístup k svojmu účtu.',
  'Refresh %s Account' => 'Obnoviť účet %s',
  'Login cookie was set correctly, but your login session is not valid. Try clearing cookies and logging in again.' => 'Prihlasovacie cookie bolo nastavené správne, ale vaša prihlasovacia relácia nie je platná. Skúste vymazať cookies a prihlásiť sa znova.',
  'MFA Sync' => 'Synchronizácia MFA',
  'Password Hash Algorithms' => 'Hašovacie algoritmy hesiel',
  'OAuth1 Handshake Secret' => 'Tajomstvo handshake OAuth1',
  'Login Failed' => 'Prihlásenie zlyhalo',
  'You have failed to verify multi-factor authentication too often in a short period of time.' => 'Za krátky čas ste príliš veľakrát neúspešne overili viacfaktorové overenie.',
  'You can not make a disabled number a primary contact number.' => 'Zakázané číslo nemôžete nastaviť ako primárne kontaktné číslo.',
  'Use TLS' => 'Použiť TLS',
  'This install has the configuration option "%s" enabled, but does not have any active multifactor providers configured. This means you are required to add MFA, but are also prevented from doing so. An administrator must disable "%s" or enable an MFA provider to allow you to continue.' => 'Táto inštalácia má povolenú možnosť konfigurácie „%s“, ale nemá nakonfigurovaných žiadnych aktívnych poskytovateľov viacfaktorového overenia. To znamená, že máte povinnosť pridať MFA, ale zároveň vám je to znemožnené. Aby ste mohli pokračovať, administrátor musí zakázať „%s“ alebo povoliť poskytovateľa MFA.',
  'You will no longer be able to use your %s account to log in.' => 'Svoj účet %s už nebudete môcť použiť na prihlásenie.',
  'Auth Invite' => 'Pozvánka overenia',
  'Instructions on the "Wait For Approval" screen, shown to users who have registered an account that has not yet been approved by an administrator.' => 'Pokyny na obrazovke „Čakanie na schválenie“, ktoré sa zobrazujú používateľom, ktorí si zaregistrovali účet, ktorý ešte nebol schválený administrátorom.',
  'Username/Password' => 'Používateľské meno/heslo',
  'No provider with PHID "%s" exists. Use `bin/auth list-mfa-providers` to list providers.' => 'Neexistuje žiadny poskytovateľ s PHID „%s“. Zoznam poskytovateľov zobrazíte pomocou `bin/auth list-mfa-providers`.',
  'Customize Message' => 'Prispôsobiť správu',
  'CHANGES TO ENROLL MESSAGE' => 'ZMENY V REGISTRAČNEJ SPRÁVE',
  'Duo enrollment mode ("%s") is not supported.' => 'Režim registrácie Duo („%s“) nie je podporovaný.',
  'Duo Username' => 'Používateľské meno Duo',
  'Status "%s" is invalid. Valid statuses are: %s.' => 'Stav „%s“ je neplatný. Platné stavy sú: %s.',
  'Email Address Already in Use' => 'E-mailová adresa sa už používa',
  'Administrative approvals are enabled (in %s), so all new users must have their accounts approved by an administrator.' => 'Administratívne schvaľovanie je povolené (v %s), takže účty všetkých nových používateľov musí schváliť administrátor.',
  'Already Associated' => 'Už priradené',
  'Realname Attributes' => 'Atribúty skutočného mena',
  'Changing Status Failed' => 'Zmena stavu zlyhala',
  'Specify %s to reset all action counters.' => 'Zadaním %s vynulujete všetky počítadlá akcií.',
  '= Integration Options = 
Configure how to record Revisions on JIRA tasks.

Note you\'ll have to restart the daemons for this to take effect.' => '= Možnosti integrácie = 
Nakonfigurujte, ako sa majú revízie zaznamenávať do úloh JIRA.

Majte na pamäti, že aby sa to prejavilo, budete musieť reštartovať démonov.',
  'Credential ("%s") is not valid.' => 'Poverenie („%s“) nie je platné.',
  'Base URI is required.' => 'Základné URI je povinné.',
  'No valid linkable account.' => 'Žiadny platný prepojiteľný účet.',
  'There are no configured default registration providers.' => 'Nie sú nakonfigurovaní žiadni predvolení registrační poskytovatelia.',
  'The authentication provider did not return the correct client state parameter in its response. If this problem persists, you may need to clear your cookies.' => 'Poskytovateľ overenia vo svojej odpovedi nevrátil správny parameter stavu klienta. Ak tento problém pretrváva, možno budete musieť vymazať cookies.',
  'SSH keys can not be reactivated.' => 'Kľúče SSH nie je možné znova aktivovať.',
  'You can not deprecate or disable the last active MFA provider while "%s" is enabled, because new users would be unable to enroll in MFA. Disable the MFA requirement in Config, or create or enable another MFA provider first.' => 'Kým je povolené „%s“, nemôžete označiť za zastaraného ani zakázať posledného aktívneho poskytovateľa MFA, pretože noví používatelia by sa nemohli zaregistrovať do MFA. Najprv zakážte požiadavku na MFA v Konfigurácii alebo vytvorte či povoľte iného poskytovateľa MFA.',
  'Again' => 'Znova',
  'Expected valid JSON response from GitHub account data request.' => 'Očakávala sa platná odpoveď JSON na požiadavku o údaje účtu GitHub.',
  '%s disabled account unlinking.' => '%s zakázal(a) rušenie prepojenia účtov.',
  '[%s] %s has invited you to join %s' => '[%s] %s vás pozval(a) do %s',
  'Revoke Tokens?' => 'Odvolať tokeny?',
  'Confirm %s Account Link' => 'Potvrdiť prepojenie účtu %s',
  'You have not configured an outbound SMS mailer. You must configure one before you can set up SMS. See: %s' => 'Nenakonfigurovali ste odchádzajúci mailer pre SMS. Kým budete môcť nastaviť SMS, musíte ho nakonfigurovať. Pozrite si: %s',
  'Provider Already Configured' => 'Poskytovateľ je už nakonfigurovaný',
  'Missing Client ID Cookie' => 'Chýba cookie s ID klienta',
  'To search for an LDAP record before authenticating, either check the **Always Search** checkbox or enter an anonymous username and password to use to perform the search.' => 'Ak chcete pred overením vyhľadať záznam LDAP, buď zaškrtnite políčko **Vždy vyhľadávať**, alebo zadajte anonymné používateľské meno a heslo, ktoré sa na vyhľadávanie použijú.',
  'Enroll Duo Account: %s' => 'Zaregistrovať účet Duo: %s',
  'Skipping, provider is not an OAuth2 provider.' => 'Preskakuje sa, poskytovateľ nie je poskytovateľom OAuth2.',
  'Your login session is invalid, and clearing the session cookie was unsuccessful. Try clearing your browser cookies.' => 'Vaša prihlasovacia relácia je neplatná a vymazanie cookie relácie zlyhalo. Skúste vymazať cookies vo svojom prehliadači.',
  'OAuth Consumer Secret' => 'Tajomstvo spotrebiteľa OAuth',
);
  }

}
