<?php

final class PhabricatorSettingsSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  '12 Hour, 2:34 PM' => '12-hodinový, 2:34 PM',
  'Default (%s)' => 'Predvolené (%s)',
  'You haven\'t added any contact numbers to your account.' => 'Do svojho účtu ste nepridali žiadne kontaktné čísla.',
  'Conpherence Column Visible' => 'Stĺpec Conpherence viditeľný',
  'External Editor' => 'Externý editor',
  'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => 'Tento webový prehliadač nepodporuje upozornenia na ploche. Pre tento prehliadač sa bez ohľadu na túto predvoľbu budú odosielať iba upozornenia v aplikácii.',
  'Choose Factor Type' => 'Zvoliť typ faktora',
  'Page Titles' => 'Nadpisy stránok',
  'Personal Account Settings' => 'Nastavenia osobného účtu',
  'ISO 8601: 2000-02-28' => 'ISO 8601: 2000-02-28',
  'Global Default Settings' => 'Globálne predvolené nastavenia',
  'Self Actions' => 'Vlastné akcie',
  'Unlink' => 'Zrušiť prepojenie',
  'If you have difficulty reading the UI, this setting may help.' => 'Ak máte problém s čítaním používateľského rozhrania, toto nastavenie vám môže pomôcť.',
  'Email Notifications' => 'E-mailové upozornenia',
  'Show Unified Diffs' => 'Zobraziť zjednotené rozdiely',
  'Diff Preferences' => 'Predvoľby rozdielov',
  'Saturday' => 'Sobota',
  'Change Primary Address' => 'Zmeniť primárnu adresu',
  'Send Stamps' => 'Odosielať pečiatky',
  'Disable Developer Tools' => 'Zakázať vývojárske nástroje',
  'Show Older Inlines' => 'Zobraziť staršie vložené komentáre',
  'Select the format you prefer for editing dates.' => 'Vyberte formát, ktorý uprednostňujete na úpravu dátumov.',
  'On Small Screens' => 'Na malých obrazovkách',
  'A verification email has been sent. Click the link in the email to verify your address.' => 'Bol odoslaný overovací e-mail. Adresu overíte kliknutím na odkaz v e-maile.',
  'Enable Email Notifications' => 'Povoliť e-mailové upozornenia',
  'Diffs are normally shown in a side-by-side layout on large screens and automatically switched to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.' => 'Rozdiely sa na veľkých obrazovkách zvyčajne zobrazujú v rozložení vedľa seba a na malých obrazovkách (napríklad na mobilných telefónoch) sa automaticky prepínajú na zjednotené zobrazenie. Ak uprednostňujete zjednotené rozdiely aj na veľkých obrazovkách, môžete si ich vybrať na použitie na všetkých displejoch.',
  'Generic Editor' => 'Všeobecný editor',
  'Edit global default settings for all users.' => 'Upraviť globálne predvolené nastavenia pre všetkých používateľov.',
  'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.

| Setting                | Example Mail Subject
|------------------------|----------------
| Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
| Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`' => 'Nastavenie **Pridať predponu „Re:“** pridá „Re:“ pred všetky správy, aj keď nejde o odpovede. Ak používate **Mail.app** v Mac OS X, môže to zlepšiť zoskupovanie e-mailov do vlákien.

| Nastavenie | Príklad predmetu e-mailu
|------------------------|----------------
| Povoliť predponu „Re:“ | `Re: [Differential] [Accepted] D123: Example Revision`
| Zakázať predponu „Re:“ | `[Differential] [Accepted] D123: Example Revision`',
  'No settings panels are available.' => 'Nie sú dostupné žiadne panely nastavení.',
  'Empty string is not a valid setting for "%s".' => 'Prázdny reťazec nie je platné nastavenie pre „%s“.',
  'Adjust Timezone' => 'Upraviť časové pásmo',
  'If you disable **Email Notifications**, this server will never send email to notify you about events. This preference overrides all your other settings.

//You will still receive some administrative email, like password reset email.//' => 'Ak zakážete **E-mailové upozornenia**, tento server vám nikdy nepošle e-mail s upozornením na udalosti. Táto predvoľba má prednosť pred všetkými ostatnými nastaveniami.

//Stále budete dostávať niektoré administratívne e-maily, napríklad e-mail na obnovenie hesla.//',
  '%s updated her profile' => '%s aktualizovala svoj profil',
  'Add Contact Number' => 'Pridať kontaktné číslo',
  'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.

| Setting              | Example Mail Subject
|----------------------|----------------
| Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
| Do Not Vary Subjects | `[Maniphest] T123: Example Task`

This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.' => 'Keď je povolené **Meniť predmety**, väčšina riadkov predmetu e-mailu bude obsahovať stručný opis obsahu, napríklad `[Closed]` pri upozornení na to, že niekto zatvoril úlohu.

| Nastavenie | Príklad predmetu e-mailu
|----------------------|----------------
| Meniť predmety | `[Maniphest] [Closed] T123: Example Task`
| Nemeniť predmety | `[Maniphest] T123: Example Task`

Toto môže e-maily zefektívniť, no niektorí klienti majú problém so zoskupovaním týchto správ do vlákien. Zakázanie tejto možnosti môže zlepšiť zoskupovanie do vlákien za cenu menej užitočných riadkov predmetu.',
  'Value "%s" is not valid for setting "%s": valid values are %s.' => 'Hodnota „%s“ nie je platná pre nastavenie „%s“: platné hodnoty sú %s.',
  'Extra Settings' => 'Ďalšie nastavenia',
  'Are you sure you want to delete this address? You will no longer be able to use it to login.' => 'Naozaj chcete odstrániť túto adresu? Už ju nebudete môcť použiť na prihlásenie.',
  'If you change your primary address, %s will send all email to %s.' => 'Ak zmeníte svoju primárnu adresu, %s bude odosielať všetky e-maily na %s.',
  'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => 'Môžete si prispôsobiť písmo použité pri zobrazovaní neproporcionálneho textu vrátane zdrojového kódu. Mali by ste zadať platnú deklaráciu písma CSS, napríklad: `13px Consolas`',
  'Enable Self Action Mail' => 'Povoliť e-maily o vlastných akciách',
  'You haven\'t added any SSH Public Keys.' => 'Nepridali ste žiadne verejné SSH kľúče.',
  'MacVim' => 'MacVim',
  'All Messages' => 'Všetky správy',
  'UTC%+d:%02d' => 'UTC%+d:%02d',
  'DarkConsole is a debugging console for developing and troubleshooting applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => 'DarkConsole je ladiaca konzola na vývoj a riešenie problémov aplikácií. Po povolení DarkConsole ju zapnete alebo vypnete stlačením klávesu {nav `} na klávesnici.',
  'Save Preference' => 'Uložiť predvoľbu',
  'Email Format' => 'Formát e-mailu',
  'Your browser timezone and profile timezone are now in agreement (%s).' => 'Časové pásmo vášho prehliadača a profilu sa teraz zhodujú (%s).',
  'Edit Authentication Factor' => 'Upraviť overovací faktor',
  'Changing your password will terminate any other outstanding login sessions.' => 'Zmena hesla ukončí všetky ostatné aktívne prihlasovacie relácie.',
  'You have no linked accounts.' => 'Nemáte žiadne prepojené účty.',
  'Active Login Sessions' => 'Aktívne prihlasovacie relácie',
  'Edit Global Settings' => 'Upraviť globálne nastavenia',
  'Ignore Conflict' => 'Ignorovať konflikt',
  'Vary Subjects' => 'Meniť predmety',
  'Delete Authentication Factor' => 'Odstrániť overovací faktor',
  '%s updated their profile' => '%s aktualizoval(a) svoj profil',
  'Current Setting' => 'Aktuálne nastavenie',
  'Visual Studio Code' => 'Visual Studio Code',
  'Provider: %s' => 'Poskytovateľ: %s',
  'Use Variable-Width Font' => 'Použiť proporcionálne písmo',
  'Use Plain Text: [Differential]' => 'Použiť obyčajný text: [Differential]',
  '⚪ Ignore' => '⚪ Ignorovať',
  'Date Format' => 'Formát dátumu',
  'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => 'Táto inštalácia nemá nakonfigurovaných žiadnych aktívnych poskytovateľov MFA. Skôr než budete môcť pridať nové faktory MFA, musí byť nakonfigurovaný a aktívny aspoň jeden poskytovateľ.',
  'Select the format you prefer for editing and displaying time.' => 'Vyberte formát, ktorý uprednostňujete na úpravu a zobrazovanie času.',
  'The conflict between your browser and profile timezone settings will be ignored.' => 'Konflikt medzi nastavením časového pásma vášho prehliadača a profilu sa bude ignorovať.',
  'Terminate All Sessions' => 'Ukončiť všetky relácie',
  'Your account is linked with all available providers.' => 'Váš účet je prepojený so všetkými dostupnými poskytovateľmi.',
  'Timezone Ignored Offset' => 'Ignorovaný posun časového pásma',
  'External Accounts' => 'Externé účty',
  'Verification Email Sent' => 'Overovací e-mail odoslaný',
  'Add External Account' => 'Pridať externý účet',
  'Mail Headers and Body' => 'Hlavičky a telo e-mailu',
  'You haven\'t added any authentication factors to your account yet.' => 'Do svojho účtu ste zatiaľ nepridali žiadne overovacie faktory.',
  'To set a new password, request a password reset link from the login screen and then follow the instructions.' => 'Nové heslo nastavíte tak, že si na prihlasovacej obrazovke vyžiadate odkaz na obnovenie hesla a potom budete postupovať podľa pokynov.',
  'Multi-Factor Auth' => 'Viacfaktorové overenie',
  'Refresh' => 'Obnoviť',
  'No allowed editor protocols are configured.' => 'Nie sú nakonfigurované žiadne povolené protokoly editora.',
  'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => 'V textových poliach v používateľskom rozhraní môžete použiť buď neproporcionálne, alebo proporcionálne písmo. Textové polia sa okrem iného používajú na úpravu opisov a písanie komentárov.',
  'Disable Self Action Mail' => 'Zakázať e-maily o vlastných akciách',
  'Filetree Visible' => 'Strom súborov viditeľný',
  'Edit Settings Configurations' => 'Upraviť konfigurácie nastavení',
  'Monospaced Textareas' => 'Neproporcionálne textové polia',
  'Really remove the authentication factor %s from your account?' => 'Naozaj odstrániť overovací faktor %s z vášho účtu?',
  'Zed' => 'Zed',
  'Mail Headers' => 'Hlavičky e-mailu',
  'Old Password' => 'Staré heslo',
  'Conpherence Column Minimize' => 'Minimalizovať stĺpec Conpherence',
  'Display Preferences' => 'Predvoľby zobrazenia',
  'Add Auth Factor' => 'Pridať overovací faktor',
  'You don\'t have any active sessions.' => 'Nemáte žiadne aktívne relácie.',
  'Changes saved.' => 'Zmeny uložené.',
  'Authentication factors must have a name to identify them.' => 'Overovacie faktory musia mať názov, ktorý ich identifikuje.',
  'Choose the default behavior of the global search in the main menu.' => 'Zvoľte predvolené správanie globálneho vyhľadávania v hlavnej ponuke.',
  'Hypertext Transfer Protocol' => 'Hypertext Transfer Protocol',
  'Diffusion Blame' => 'Diffusion Blame',
  'Choose which language you would like the UI to use.' => 'Vyberte, ktorý jazyk má používateľské rozhranie používať.',
  'Outgoing mail is stamped with labels like `actor(alice)` which can be used to
write client mail rules to organize mail. By default, these stamps are sent
in an `X-Phabricator-Stamps` header.

If you use a client which can not use headers to route mail (like Gmail),
you can also include the stamps in the message body so mail rules based on
body content can route messages.' => 'Odchádzajúca pošta sa označuje pečiatkami ako `actor(alice)`, ktoré možno použiť na
písanie e-mailových pravidiel klienta na organizovanie pošty. Tieto pečiatky sa
predvolene odosielajú v hlavičke `X-Phabricator-Stamps`.

Ak používate klienta, ktorý nedokáže smerovať poštu podľa hlavičiek (napríklad Gmail),
môžete pečiatky zahrnúť aj do tela správy, aby poštu mohli smerovať pravidlá
založené na obsahu tela.',
  'Your browser timezone (%s) differs from your profile timezone (%s). You can adjust your profile setting to match your browser, or ignore this conflict to keep your current profile setting.' => 'Časové pásmo vášho prehliadača (%s) sa líši od časového pásma vášho profilu (%s). Nastavenie profilu môžete upraviť tak, aby zodpovedalo prehliadaču, alebo tento konflikt ignorovať a ponechať súčasné nastavenie profilu.',
  'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => 'Dialógové okno so žiadosťou o povolenie odosielať upozornenia na ploche bolo zatvorené bez udelenia povolenia. Budú sa odosielať iba upozornenia v aplikácii.',
  'Really delete address \'%s\'?' => 'Naozaj odstrániť adresu „%s“?',
  'Another user already has this email.' => 'Tento e-mail už má iný používateľ.',
  'Change primary email address?' => 'Zmeniť primárnu e-mailovú adresu?',
  'Monospaced Font' => 'Neproporcionálne písmo',
  'HTML Email' => 'E-mail vo formáte HTML',
  'Global Defaults' => 'Globálne predvolené hodnoty',
  'Conpherence Sound' => 'Zvuk Conpherence',
  'Enable "Re:" Prefix' => 'Povoliť predponu „Re:“',
  'DarkConsole Visible' => 'DarkConsole viditeľná',
  'Supported Protocol' => 'Podporovaný protokol',
  'Ignore new setting and keep %s' => 'Ignorovať nové nastavenie a ponechať %s',
  'If you disable **Self Actions**, this server will not notify you about actions you take.' => 'Ak zakážete **Vlastné akcie**, tento server vás nebude upozorňovať na akcie, ktoré vykonáte.',
  'You are adding too many email addresses to your account too quickly.' => 'Do svojho účtu pridávate priveľa e-mailových adries priveľmi rýchlo.',
  'Your browser has not yet granted this server permission to send desktop notifications.' => 'Váš prehliadač tomuto serveru zatiaľ neudelil povolenie odosielať upozornenia na ploche.',
  'You can adjust **Application Settings** here to customize when you are emailed and notified.

| Setting | Effect
| ------- | -------
| Email | You will receive an email and a notification, but the notification will be marked "read".
| Notify | You will receive an unread notification only.
| Ignore | You will receive nothing.


If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.

These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => 'Tu môžete upraviť **Nastavenia aplikácií** a prispôsobiť si, kedy dostávate e-maily a upozornenia.

| Nastavenie | Účinok
| ------- | -------
| E-mail | Dostanete e-mail aj upozornenie, ale upozornenie bude označené ako „prečítané“.
| Upozorniť | Dostanete iba neprečítané upozornenie.
| Ignorovať | Nedostanete nič.


Ak aktualizácia vykoná viacero zmien (napríklad pridanie kópií k úlohe, jej zatvorenie a pridanie komentára), dostanete najsilnejšie upozornenie spomedzi tých, ktoré sú pre niektorú zo zmien nakonfigurované na doručenie.

Tieto predvoľby platia **iba** pre objekty, s ktorými ste prepojení (napríklad revízie, kde ste recenzentom, alebo úlohy, kde ste v kópii). Ak chcete dostávať e-mailové upozornenia pri vytvorení iných objektov, nakonfigurujte [[ /herald/ | pravidlá Herald ]].',
  'You must enter your current password.' => 'Musíte zadať svoje súčasné heslo.',
  'Europe: 28-02-2000' => 'Európa: 28-02-2000',
  'The old password you entered is incorrect.' => 'Staré heslo, ktoré ste zadali, je nesprávne.',
  '◐ Notify' => '◐ Upozorniť',
  '%s updated his profile' => '%s aktualizoval svoj profil',
  'You can change your date and time preferences in Settings.' => 'Predvoľby dátumu a času môžete zmeniť v Nastaveniach.',
  'Developer Tools show more tools that are mostly useful for %s developers and advanced administrators.' => 'Vývojárske nástroje zobrazujú ďalšie nástroje, ktoré sú užitočné najmä pre vývojárov %s a pokročilých správcov.',
  'You can opt to receive plain text email instead of HTML email. Plain text email works better with some clients.' => 'Namiesto e-mailu vo formáte HTML sa môžete rozhodnúť pre e-mail v obyčajnom texte. Obyčajný text funguje s niektorými klientmi lepšie.',
  'Timezone Calibrated' => 'Časové pásmo kalibrované',
  'Limited Translations' => 'Obmedzené preklady',
  'Email Delivery' => 'Doručovanie e-mailov',
  'Send Test Notification' => 'Odoslať testovacie upozornenie',
  'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes' => 'Hodnota neproporcionálneho písma „%s“ je nebezpečná. Môžete zadať iba písmená, číslice, medzery, čiarky, bodky, spojovníky, lomky a úvodzovky',
  'Edit settings for your personal account.' => 'Upraviť nastavenia vášho osobného účtu.',
  'Create Settings' => 'Vytvoriť nastavenia',
  'Use Unicode Glyphs: ⚙' => 'Použiť glyfy Unicode: ⚙',
  'Editor Link' => 'Odkaz na editor',
  'Silly Translations' => 'Hravé preklady',
  'Send Plain Text Email' => 'Odosielať e-mail v obyčajnom texte',
  'DarkConsole' => 'DarkConsole',
  'Filetree Width' => 'Šírka stromu súborov',
  'Hypertext Transfer Protocol over SSL' => 'Hypertext Transfer Protocol over SSL',
  'Search Scope' => 'Rozsah vyhľadávania',
  'Email Preferences' => 'Predvoľby e-mailu',
  'You don\'t have any active tokens.' => 'Nemáte žiadne aktívne tokeny.',
  'Send another copy of the verification email to %s?' => 'Odoslať ďalšiu kópiu overovacieho e-mailu na %s?',
  '24 Hour, 14:34' => '24-hodinový, 14:34',
  'UTC%+d' => 'UTC%+d',
  'Disable "Re:" Prefix' => 'Zakázať predponu „Re:“',
  'Sublime Text' => 'Sublime Text',
  'Conpherence Widget Pane Visible' => 'Panel widgetov Conpherence viditeľný',
  'Disable Email Notifications' => 'Zakázať e-mailové upozornenia',
  'Expired' => 'Vypršané',
  'No Notifications' => 'Žiadne upozornenia',
  'Vim' => 'Vim',
  'Password Algorithms' => 'Algoritmy hesiel',
  'Your password is currently hashed using an algorithm which is no longer available on this install.' => 'Vaše heslo je momentálne zahašované pomocou algoritmu, ktorý už na tejto inštalácii nie je dostupný.',
  'Replaced With' => 'Nahradené čím',
  'Send HTML Email' => 'Odosielať e-mail vo formáte HTML',
  'Translation' => 'Preklad',
  'Settings %d' => 'Nastavenia %d',
  'Time Format' => 'Formát času',
  'Permission for desktop notifications was denied. Only application notifications will be sent.' => 'Povolenie na upozornenia na ploche bolo zamietnuté. Budú sa odosielať iba upozornenia v aplikácii.',
  'Send Notifications' => 'Odosielať upozornenia',
  'Number' => 'Číslo',
  'Permanently Linked' => 'Trvalo prepojené',
  'Account Setup Issues' => 'Problémy s nastavením účtu',
  'Authentication Factors' => 'Overovacie faktory',
  'Web and Desktop' => 'Web a plocha',
  'Sunday' => 'Nedeľa',
  'US: 2/28/2000' => 'USA: 2/28/2000',
  'External Editor URI Variables' => 'Premenné URI externého editora',
  'User Guide: Configuring an External Editor' => 'Používateľská príručka: Konfigurácia externého editora',
  'You have no account setup issues.' => 'Nemáte žiadne problémy s nastavením účtu.',
  'Might not exist' => 'Nemusí existovať',
  'NOTE: You already have an Auth Factor configured. Adding another factor will require you to always provide all Auth Factors instead of selecting one of your Auth Factors.' => 'POZNÁMKA: Už máte nakonfigurovaný overovací faktor. Pridaním ďalšieho faktora budete musieť vždy zadať všetky overovacie faktory namiesto výberu jedného z nich.',
  'Personal Settings' => 'Osobné nastavenia',
  'Some applications use unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => 'Niektoré aplikácie používajú v nadpisoch stránok glyfy Unicode, aby poskytli kompaktné znázornenie aktuálnej aplikácie. Ak sa tieto glyfy vo vašom systéme nezobrazujú, môžete namiesto nich použiť obyčajný text.',
  'Web Only' => 'Iba web',
  'Disable Vary Subjects' => 'Zakázať meniť predmety',
  'Enable Developer Tools' => 'Povoliť vývojárske nástroje',
  'Developer/Test Translations' => 'Vývojárske/testovacie preklady',
  'User Preferences' => 'Predvoľby používateľa',
  'No Sounds' => 'Žiadne zvuky',
  'Create Global Defaults' => 'Vytvoriť globálne predvolené hodnoty',
  'Enable Vary Subjects' => 'Povoliť meniť predmety',
  'TextMate' => 'TextMate',
  'No MFA Providers' => 'Žiadni poskytovatelia MFA',
  'There is no known application setting with key "%s".' => 'Neexistuje žiadne známe nastavenie aplikácie s kľúčom „%s“.',
  'Choose the default sound behavior for new Conpherence rooms.' => 'Zvoľte predvolené správanie zvuku pre nové miestnosti Conpherence.',
  'Policy Favorites' => 'Obľúbené zásady',
  'Conpherence Notifications' => 'Upozornenia Conpherence',
  'Friday' => 'Piatok',
  'Timezone "%s" is not a valid timezone identifier.' => 'Časové pásmo „%s“ nie je platný identifikátor časového pásma.',
  'Select your local timezone.' => 'Vyberte svoje miestne časové pásmo.',
  'Note: Removing an email address from your account will invalidate any outstanding password reset links.' => 'Poznámka: Odstránením e-mailovej adresy z vášho účtu sa zneplatnia všetky aktívne odkazy na obnovenie hesla.',
  'Click "Save Preference" to persist these changes.' => 'Tieto zmeny natrvalo uložíte kliknutím na „Uložiť predvoľbu“.',
  'Your browser has granted this server permission to send desktop notifications.' => 'Váš prehliadač udelil tomuto serveru povolenie odosielať upozornenia na ploche.',
  'This browser has denied permission to send desktop notifications to this server. Consult your browser settings / documentation to figure out how to clear this setting, do so, and then re-visit this page to grant permission.' => 'Tento prehliadač zamietol povolenie odosielať upozornenia na ploche tomuto serveru. Pozrite si nastavenia/dokumentáciu prehliadača, zistite, ako toto nastavenie vymazať, urobte tak a potom túto stránku znova navštívte, aby ste udelili povolenie.',
  'Week Starts On' => 'Týždeň sa začína',
  'Emacs' => 'Emacs',
  'When a revision is updated, this software attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => 'Keď sa revízia aktualizuje, tento softvér sa pokúsi preniesť vložené komentáre zo staršej verzie do nových zmien. Ak uprednostňujete, aby komentáre zostali ukotvené na jednom mieste, môžete toto správanie zakázať.',
  'Remove Factor' => 'Odstrániť faktor',
  'Your account does not currently have a password set. You can choose a password by performing a password reset.' => 'Váš účet momentálne nemá nastavené heslo. Heslo si môžete zvoliť vykonaním obnovenia hesla.',
  'Disabled (an administrator has disabled login for this account provider).' => 'Zakázané (správca zakázal prihlásenie pre tohto poskytovateľa účtu).',
  'IntelliJ IDEA' => 'IntelliJ IDEA',
  'Send Another Verification Email?' => 'Odoslať ďalší overovací e-mail?',
  'Because the algorithm implementation is missing, your password can not be used or updated.' => 'Keďže implementácia algoritmu chýba, vaše heslo nie je možné použiť ani aktualizovať.',
  'Verify' => 'Overiť',
  'Edit Settings: %s' => 'Upraviť nastavenia: %s',
  'Add "Re:" Prefix' => 'Pridať predponu „Re:“',
  'Desktop Only' => 'Iba plocha',
  'Account Settings' => 'Nastavenia účtu',
  'View Configuration' => 'Zobraziť konfiguráciu',
  'Supported Editor Protocols' => 'Podporované protokoly editora',
  'Add Authentication Factor' => 'Pridať overovací faktor',
  'Choose which day a calendar week should begin on.' => 'Vyberte, ktorým dňom sa má kalendárny týždeň začínať.',
  'Account Activity Logs' => 'Záznamy aktivity účtu',
  'Date and Time' => 'Dátum a čas',
  'Use Monospaced Font' => 'Použiť neproporcionálne písmo',
  'The strength of your stored password hash can be upgraded. To upgrade, either: log out and log in using your password; or change your password.' => 'Silu uloženého hašu vášho hesla možno vylepšiť. Ak ho chcete vylepšiť, buď: sa odhláste a znova prihláste pomocou hesla, alebo si zmeňte heslo.',
  'Save Preferences' => 'Uložiť predvoľby',
  'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have installed and configured such an editor, some applications can generate links that you can click to open files locally.

Provide a URI pattern for building external editor URIs in your environment. For example, if you use TextMate on macOS, the pattern for your machine may look something like this:

```name="Example: TextMate on macOS"
%s
```


For complete instructions on editor configuration, see **[[ %s | %s ]]**.

See the tables below for a list of supported variables and protocols.' => 'Mnohé textové editory možno nakonfigurovať ako obslužné programy URI pre špeciálne protokoly ako `editor://`. Ak máte takýto editor nainštalovaný a nakonfigurovaný, niektoré aplikácie dokážu generovať odkazy, na ktoré môžete kliknúť a otvoriť súbory lokálne.

Zadajte vzor URI na zostavovanie URI externého editora vo vašom prostredí. Ak napríklad používate TextMate v systéme macOS, vzor pre váš stroj môže vyzerať približne takto:

```name="Example: TextMate on macOS"
%s
```


Úplné pokyny na konfiguráciu editora nájdete v **[[ %s | %s ]]**.

Zoznam podporovaných premenných a protokolov nájdete v tabuľkách nižšie.',
  '⚫ Email' => '⚫ E-mail',
  'New Setting' => 'Nové nastavenie',
  'Pronoun' => 'Zámeno',
  'Choose the default notification behavior for Conpherence rooms.' => 'Zvoľte predvolené správanie upozornení pre miestnosti Conpherence.',
  'DarkConsole Tab' => 'Karta DarkConsole',
  'Note: Changing your primary email address will invalidate any outstanding password reset links.' => 'Poznámka: Zmenou primárnej e-mailovej adresy sa zneplatnia všetky aktívne odkazy na obnovenie hesla.',
  'Sessions and Logs' => 'Relácie a záznamy',
  'Your primary email address is unverified. You will not be able to receive email until you verify it.' => 'Vaša primárna e-mailová adresa nie je overená. Kým ju neoveríte, nebudete môcť dostávať e-maily.',
  'Pinned Applications' => 'Pripnuté aplikácie',
  'This server can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => 'Tento server dokáže odosielať upozornenia v reálnom čase do vášho webového prehliadača alebo na plochu. Vyberte, kde chcete tieto aktualizácie v reálnom čase dostávať.',
  'Revoke All' => 'Odvolať všetko',
  'No settings panel group with key "%s" exists!' => 'Neexistuje žiadna skupina panelov nastavení s kľúčom „%s“!',
  'Linked Accounts and Authentication' => 'Prepojené účty a overovanie',
  'Choose the pronoun you prefer.' => 'Vyberte zámeno, ktoré uprednostňujete.',
  'Conflict Ignored' => 'Konflikt ignorovaný',
  'This engine is used to edit settings.' => 'Tento nástroj sa používa na úpravu nastavení.',
  'Default (Unknown, "%s")' => 'Predvolené (neznáme, „%s“)',
  'Primary Email Unverified' => 'Primárny e-mail neoverený',
  'HiSec' => 'HiSec',
);
  }

}
