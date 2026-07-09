<?php

final class PhabricatorSettingsNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  '12 Hour, 2:34 PM' => '12 uur, 2:34 PM',
  'Default (%s)' => 'Standaard (%s)',
  'You haven\'t added any contact numbers to your account.' => 'U hebt nog geen contactgegevens aan uw account toegevoegd.',
  'Conpherence Column Visible' => 'Kolom Conpherence zichtbaar',
  'External Editor' => 'Externe tekstverwerker',
  'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => 'Deze webbrowser ondersteunt geen bureaubladmeldingen. Alleen toepassingenmeldingen worden in deze browser verzonden, ongeacht deze voorkeur.',
  'Choose Factor Type' => 'Kies het factortype',
  'Page Titles' => 'Paginatitels',
  'Personal Account Settings' => 'Persoonlijke accountinstellingen',
  'ISO 8601: 2000-02-28' => 'ISO 8601: 2000-02-28',
  'Global Default Settings' => 'Algemene standaardinstellingen',
  'Self Actions' => 'Eigen handelingen',
  'Unlink' => 'Ontkoppelen',
  'If you have difficulty reading the UI, this setting may help.' => 'Als u moeite heeft met het lezen van de gebruikersinterface, kan deze instelling wellicht helpen.',
  'Email Notifications' => 'E-mailmeldingen',
  'Show Unified Diffs' => 'Gecombineerde verschillen weergeven',
  'Diff Preferences' => 'Diff-voorkeuren',
  'Saturday' => 'Zaterdag',
  'Change Primary Address' => 'Primair adres wijzigen',
  'Send Stamps' => 'Stempels verzenden',
  'Disable Developer Tools' => 'Ontwikkelaarshulpmiddelen uitschakelen',
  'Show Older Inlines' => 'Oudere in de regels weergeven',
  'Select the format you prefer for editing dates.' => 'Selecteer de gewenste indeling voor het bewerken van datums.',
  'On Small Screens' => 'Op kleine schermen',
  'A verification email has been sent. Click the link in the email to verify your address.' => 'Er is een verificatiemail verzonden. Klik op de koppeling in de e-mail om uw adres te verifiëren.',
  'Enable Email Notifications' => 'E-mailmeldingen inschakelen',
  'Diffs are normally shown in a side-by-side layout on large screens and automatically switched to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.' => 'Normaal gesproken worden verschillen op grote schermen naast elkaar weergegeven en wordt automatisch overgeschakeld naar een gecombineerde weergave op kleine schermen (zoals mobiele telefoons). Als u de gecombineerde weergave van verschillen ook op grote schermen wilt, kunt u deze optie selecteren voor gebruik op alle schermen.',
  'Generic Editor' => 'Algemene tekstverwerker',
  'Edit global default settings for all users.' => 'Algemene standaardinstellingen voor alle gebruikers bewerken.',
  'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.

| Setting                | Example Mail Subject
|------------------------|----------------
| Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
| Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`' => 'De instelling **Voeg "Re:"-voorvoegsel toe** voegt "Re:" toe aan alle berichten, zelfs als het geen antwoorden zijn. Als u **Mail.app** op macOS gebruikt, kan dit de e-mailconversatie verbeteren.

| Instelling                | Voorbeeld e-mailonderwerp
|---------------------------|----------------
| Inschakelen "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
| Uitschakelen "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`',
  'No settings panels are available.' => 'Er zijn geen instellingenpanelen beschikbaar.',
  'Empty string is not a valid setting for "%s".' => 'Een lege tekenreeks is geen geldige instelling voor "%s".',
  'Adjust Timezone' => 'Tijdzone aanpassen',
  'If you disable **Email Notifications**, this server will never send email to notify you about events. This preference overrides all your other settings.

//You will still receive some administrative email, like password reset email.//' => 'Als u **E-mailmeldingen** uitschakelt, stuurt deze server u nooit meer e-mails om u op de hoogte te stellen van gebeurtenissen. Deze voorkeur heeft voorrang op al uw andere instellingen. U ontvangt nog wel enkele administratieve e-mails, zoals e-mails voor het opnieuw instellen van uw wachtwoord.',
  '%s updated her profile' => '%s heeft haar profiel bijgewerkt',
  'Add Contact Number' => 'Contactgegevens toevoegen',
  'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.

| Setting              | Example Mail Subject
|----------------------|----------------
| Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
| Do Not Vary Subjects | `[Maniphest] T123: Example Task`

This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.' => 'Met **Onderwerpen variëren** ingeschakeld, bevatten de meeste onderwerpregels van e-mails een korte beschrijving van de inhoud, zoals `[Gesloten]` voor een melding dat iemand een taak heeft afgesloten. 

| Instelling                | Voorbeeld onderwerp e-mail
|---------------------------|----------------
| Onderwerpen variëren      | `[Maniphest] [Gesloten] T123: Voorbeeldtaak`
| Onderwerpen niet variëren | `[Maniphest] T123: Voorbeeldtaak`

Dit kan e-mail nuttiger maken, maar sommige e-mailclients hebben moeite met het ordenen van deze berichten. Het uitschakelen van deze optie kan het ordenen verbeteren, maar dit gaat ten koste van de bruikbaarheid van de onderwerpregels.',
  'Value "%s" is not valid for setting "%s": valid values are %s.' => 'De waarde "%s" is niet geldig voor instelling "%s": geldige waarden zijn %s.',
  'Extra Settings' => 'Extra instellingen',
  'Are you sure you want to delete this address? You will no longer be able to use it to login.' => 'Weet u zeker dat u dit adres wilt verwijderen? U kunt het dan niet meer gebruiken om aan te melden.',
  'If you change your primary address, %s will send all email to %s.' => 'Als u uw primaire adres wijzigt, stuurt %s alle e-mails naar %s.',
  'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => 'U kunt het lettertype aanpassen dat wordt gebruikt bij het weergeven van tekst met vaste breedte, inclusief broncode. U moet een geldige CSS-lettertypedeclaratie invoeren, bijvoorbeeld: `13px Consolas`',
  'Enable Self Action Mail' => 'E-mail voor eigen handelingen inschakelen',
  'You haven\'t added any SSH Public Keys.' => 'U hebt geen openbare SSH-sleutels toegevoegd.',
  'MacVim' => 'MacVim',
  'All Messages' => 'Alle berichten',
  'UTC%+d:%02d' => 'UTC%+d:%02d',
  'DarkConsole is a debugging console for developing and troubleshooting applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => 'DarkConsole is een debugconsole voor het ontwikkelen en oplossen van problemen met toepassingen. Nadat u DarkConsole hebt ingeschakeld, drukt u op de {nav `}-toets op uw toetsenbord om deze in of uit te schakelen.',
  'Save Preference' => 'Voorkeuren opslaan',
  'Email Format' => 'E-mailopmaak',
  'Your browser timezone and profile timezone are now in agreement (%s).' => 'De tijdzone van u browser en de tijdzone van u profiel komen nu overeen (%s).',
  'Edit Authentication Factor' => 'Authenticatietrappen bewerken',
  'Changing your password will terminate any other outstanding login sessions.' => 'Als u uw wachtwoord wijzigt, worden alle andere actieve aanmeldsessies beëindigd.',
  'You have no linked accounts.' => 'U hebt geen gekoppelde accounts.',
  'Active Login Sessions' => 'Actieve aanmeldsessies',
  'Edit Global Settings' => 'Algemene instellingen bewerken',
  'Ignore Conflict' => 'Conflicten negeren',
  'Vary Subjects' => 'Onderwerpen variëren',
  'Delete Authentication Factor' => 'Authenticatietrap verwijderen',
  '%s updated their profile' => '%s heeft het eigen profiel bijgewerkt',
  'Current Setting' => 'Huidige instelling',
  'Visual Studio Code' => 'Visual Studio Code',
  'Provider: %s' => 'Aanbieder: %s',
  'Use Variable-Width Font' => 'Lettertype met variabele breedte gebruiken',
  'Use Plain Text: [Differential]' => 'Platte tekst gebruiken: [Differentieel]',
  '⚪ Ignore' => '⚪ Negeren',
  'Date Format' => 'Datumopmaak',
  'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => 'Deze installatie heeft geen actieve MFA-providers ingesteld. Er moet ten minste één provider insteld en actief zijn voordat u nieuwe MFA-trappen kunt toevoegen.',
  'Select the format you prefer for editing and displaying time.' => 'Selecteer de gewenste opmaak voor het bewerken en weergeven van tijd.',
  'The conflict between your browser and profile timezone settings will be ignored.' => 'Het conflict tussen de tijdzone-instellingen van uw browser en uw profiel wordt genegeerd.',
  'Terminate All Sessions' => 'Alle sessies beëindigen',
  'Your account is linked with all available providers.' => 'Uw account is gekoppeld aan alle beschikbare aanbieders.',
  'Timezone Ignored Offset' => 'Genegeerd tijdzoneverschil',
  'External Accounts' => 'Externe accounts',
  'Verification Email Sent' => 'Verificatie-e-mail verzonden',
  'Add External Account' => 'Externe account toevoegen',
  'Mail Headers and Body' => 'E-mailheaders en -tekst',
  'You haven\'t added any authentication factors to your account yet.' => 'U hebt nog geen authenticatietrappen aan uw account toegevoegd.',
  'To set a new password, request a password reset link from the login screen and then follow the instructions.' => 'Om een nieuw wachtwoord in te stellen, vraagt u een koppeling voor het opnieuw instellen van uw wachtwoord aan via het aanmeld en volgt u vervolgens de instructies.',
  'Multi-Factor Auth' => 'Meertrapsauthenticatie',
  'Refresh' => 'Vernieuwen',
  'No allowed editor protocols are configured.' => 'Er zijn geen toegestane tekstverwerkerprotocollen ingesteld.',
  'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => 'In de tekstvelden van de gebruikersinterface kunt u kiezen tussen een lettertype met vaste breedte (monospace) of een lettertype met variabele breedte. Tekstvelden worden onder andere gebruikt voor het bewerken van beschrijvingen en het schrijven van opmerkingen.',
  'Disable Self Action Mail' => 'E-mail voor eigen handelingen uitschakelen',
  'Filetree Visible' => 'Bestandstructuur zichtbaar',
  'Edit Settings Configurations' => 'Instellingen bewerken',
  'Monospaced Textareas' => 'Tekstgebieden met vaste breedte',
  'Really remove the authentication factor %s from your account?' => 'Wilt u de authenticatietrap %s echt uit uw account verwijderen?',
  'Zed' => 'Zed',
  'Mail Headers' => 'E-mailheaders',
  'Old Password' => 'Oud wachtwoord',
  'Conpherence Column Minimize' => 'Kolom Conpherence minimaliseren',
  'Display Preferences' => 'Weergavevoorkeuren',
  'Add Auth Factor' => 'Authenticatietrap toevoegen',
  'You don\'t have any active sessions.' => 'U hebt geen actieve sessies.',
  'Changes saved.' => 'De wijzigingen zijn opgeslagen.',
  'Authentication factors must have a name to identify them.' => 'Authenticatietrappen moeten een naam hebben om ze te kunnen identificeren.',
  'Choose the default behavior of the global search in the main menu.' => 'Selecteer het standaardgedrag van de algemene zoekfunctie in het hoofdmenu.',
  'Hypertext Transfer Protocol' => 'Hypertext Transfer Protocol',
  'Diffusion Blame' => 'Diffusion Blame',
  'Choose which language you would like the UI to use.' => 'Kies de gewenste taal voor de gebruikersinterface.',
  'Outgoing mail is stamped with labels like `actor(alice)` which can be used to
write client mail rules to organize mail. By default, these stamps are sent
in an `X-Phabricator-Stamps` header.

If you use a client which can not use headers to route mail (like Gmail),
you can also include the stamps in the message body so mail rules based on
body content can route messages.' => 'Uitgaande e-mails worden voorzien van labels zoals `actor(alice)`, die gebruikt kunnen worden om
e-mailregels voor de client te schrijven en zo e-mail te ordenen. Standaard worden deze labels verzonden in een `X-Phabricator-Stamps`-header.

Als u een client gebruikt die geen headers kan gebruiken om e-mail te routeren (zoals Gmail), kunt u de labels ook in de berichttekst opnemen, zodat e-mailregels op basis van de inhoud van de berichttekst berichten kunnen routeren.',
  'Your browser timezone (%s) differs from your profile timezone (%s). You can adjust your profile setting to match your browser, or ignore this conflict to keep your current profile setting.' => 'De tijdzone van uw browser (%s) verschilt van de tijdzone van uw profiel (%s). U kunt uw profielinstellingen aanpassen aan die van uw browser, of dit conflict negeren en uw huidige profielinstellingen behouden.',
  'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => 'Het dialoogvenster waarin om toestemming voor het verzenden van bureaubladmeldingen werd gevraagd, is gesloten zonder toestemming te verlenen. Alleen toepassingsmeldingen worden verzonden.',
  'Really delete address \'%s\'?' => 'Adres \'%s\' echt verwijderen?',
  'Another user already has this email.' => 'Een andere gebruiker heeft dit e-mailadres al.',
  'Change primary email address?' => 'Primair e-mailadres wijzigen',
  'Monospaced Font' => 'Monospaced lettertype',
  'HTML Email' => 'HTML-e-mail',
  'Global Defaults' => 'Algemene standaardinstellingen',
  'Conpherence Sound' => 'Conpherence geluid',
  'Enable "Re:" Prefix' => 'Voorvoegsel "Re:" inschakelen',
  'DarkConsole Visible' => 'DarkConsole zichtbaar',
  'Supported Protocol' => 'Ondersteund protocol',
  'Ignore new setting and keep %s' => 'Nieuwe instelling negeren en %s behouden',
  'If you disable **Self Actions**, this server will not notify you about actions you take.' => 'Als u **Eigen handelingen** uitschakelt, stelt deze server u niet op de hoogte van handelingen die u uitvoert.',
  'You are adding too many email addresses to your account too quickly.' => 'U voegt te snel te veel e-mailadressen toe aan uw account.',
  'Your browser has not yet granted this server permission to send desktop notifications.' => 'Uw browser heeft deze server nog geen toestemming gegeven om bureaubladmeldingen te verzenden.',
  'You can adjust **Application Settings** here to customize when you are emailed and notified.

| Setting | Effect
| ------- | -------
| Email | You will receive an email and a notification, but the notification will be marked "read".
| Notify | You will receive an unread notification only.
| Ignore | You will receive nothing.


If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.

These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => 'Hier kunt u de **Toepassingsinstellingen** aanpassen om te bepalen wanneer u e-mails en meldingen ontvangt.

| Instelling | Effect
| ------- | -------
| E-mail  | U ontvangt een e-mail en een melding, maar de melding wordt gemarkeerd als \'gelezen\'.
| Melden  | U ontvangt alleen een melding als de melding niet gelezen is.
| Negeren | U ontvangt niets.

Als een update meerdere wijzigingen met zich meebrengt (zoals het toevoegen van CC\'s aan een taak, het sluiten ervan en het toevoegen van een opmerking), ontvangt u de meest relevante melding die voor elke wijziging is ingesteld.

Deze voorkeuren zijn **alleen** van toepassing op objecten waarmee u verbonden bent (bijvoorbeeld versies waar u een reviewer bent of taken waar u een CC van hebt). Om e-mailmeldingen te ontvangen wanneer andere objecten worden gemaakt, configureert u [[ /herald/ | Herald-regels ]].',
  'You must enter your current password.' => 'Je moet je huidige wachtwoord invoeren.',
  'Europe: 28-02-2000' => 'Europa: 28-02-2000',
  'The old password you entered is incorrect.' => 'Het oude wachtwoord dat u hebt ingevoerd, is onjuist.',
  '◐ Notify' => '◐ Melden',
  '%s updated his profile' => '%s heeft zijn profiel bijgewerkt',
  'You can change your date and time preferences in Settings.' => 'U kunt uw datum- en tijdvoorkeuren wijzigen in de instellingen.',
  'Developer Tools show more tools that are mostly useful for %s developers and advanced administrators.' => 'In ontwikkelaarshulpmiddellen worden meer hulpmiddelen weergegeven  die meestal nuttig zijn voor ontwikkelaars en gevorderde beheerders van %s.',
  'You can opt to receive plain text email instead of HTML email. Plain text email works better with some clients.' => 'U kunt ervoor kiezen om e-mails in platte tekst te ontvangen in plaats van in HTML. E-mails in platte tekst werken beter met sommige e-mailclients.',
  'Timezone Calibrated' => 'Tijdzone gekalibreerd',
  'Limited Translations' => 'Beperkte vertalingen',
  'Email Delivery' => 'E-mailbezorging',
  'Send Test Notification' => 'Testmelding verzenden',
  'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes' => 'De waarde "%s" voor het lettertype met vaste breedte  is onveilig. U mag alleen letters, cijfers, spaties, komma\'s, punten, koppeltekens, schuine strepen en dubbele aanhalingstekens invoeren.',
  'Edit settings for your personal account.' => 'Instellingen voor uw persoonlijke account bewerken.',
  'Create Settings' => 'Instellingen maken',
  'Use Unicode Glyphs: ⚙' => 'Unicode-symbolen gebruiken: ⚙',
  'Editor Link' => 'Tekstverwerkerkoppeling',
  'Silly Translations' => 'Domme vertalingen',
  'Send Plain Text Email' => 'E-mail in platte tekst verzenden',
  'DarkConsole' => 'DarkConsole',
  'Filetree Width' => 'Bestandsboombreedte',
  'Hypertext Transfer Protocol over SSL' => 'Hypertext Transfer Protocol over SSL',
  'Search Scope' => 'Zoekbereik',
  'Email Preferences' => 'E-mailvoorkeuren',
  'You don\'t have any active tokens.' => 'U hebt geen actieve tokens.',
  'Send another copy of the verification email to %s?' => 'Nog een kopie van de verificatiemail naar %s verzenden?',
  '24 Hour, 14:34' => '24 uur, 14:34',
  'UTC%+d' => 'UTC%+d',
  'Disable "Re:" Prefix' => 'Voorvoegsel "Re:" uitschakelen',
  'Sublime Text' => 'Sublime Text',
  'Conpherence Widget Pane Visible' => 'Conpherence-widgetpaneel zichtbaar',
  'Disable Email Notifications' => 'E-mailmeldingen uitschakelen',
  'Expired' => 'Verlopen',
  'No Notifications' => 'Geen meldingen',
  'Vim' => 'Vim',
  'Password Algorithms' => 'Wachtwoordalgoritmen',
  'Your password is currently hashed using an algorithm which is no longer available on this install.' => 'Uw wachtwoord wordt momenteel versleuteld met een algoritme dat niet langer beschikbaar is op deze installatie.',
  'Replaced With' => 'Vervangen door',
  'Send HTML Email' => 'HTML-e-mail verzenden',
  'Translation' => 'Vertaling',
  'Settings %d' => '%d-instellingen',
  'Time Format' => 'Tijdopmaak',
  'Permission for desktop notifications was denied. Only application notifications will be sent.' => 'De toestemming voor bureaubladmeldingen is geweigerd. Alleen toepassingsmeldingen worden verzonden.',
  'Send Notifications' => 'Meldingen verzenden',
  'Number' => 'Getal',
  'Permanently Linked' => 'Permanent gekoppeld',
  'Account Setup Issues' => 'Problemen met het instellen van een account',
  'Authentication Factors' => 'Authenticatietrappen',
  'Web and Desktop' => 'Web en desktop',
  'Sunday' => 'Zondag',
  'US: 2/28/2000' => 'VS: 2/28/2000',
  'External Editor URI Variables' => 'URI-variabelen voor externe tekstverwerker',
  'User Guide: Configuring an External Editor' => 'Gebruikershandleiding: Een externe tekstverwerker instellen',
  'You have no account setup issues.' => 'Er zijn geen problemen met het instellen van uw account.',
  'Might not exist' => 'Bestaat wellicht niet',
  'NOTE: You already have an Auth Factor configured. Adding another factor will require you to always provide all Auth Factors instead of selecting one of your Auth Factors.' => 'LET OP: U hebt al een authenticatietrap ingesteld. Als u een andere trap toevoegt, moet u altijd alle authenticatietrappen opgeven in plaats van er één te selecteren.',
  'Personal Settings' => 'Persoonlijke instellingen',
  'Some applications use unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => 'Sommige toepassingen gebruiken Unicode-tekens in paginatitels om een compacte weergave van de huidige toepassing te bieden. U kunt in plaats daarvan platte tekst gebruiken als deze tekens niet op uw systeem worden weergegeven.',
  'Web Only' => 'Alleen web',
  'Disable Vary Subjects' => 'Onderwerpen variëren uitschakelen',
  'Enable Developer Tools' => 'Ontwikkelaarshulpmiddelen inschakelen',
  'Developer/Test Translations' => 'Ontwikkelaars-/testvertalingen',
  'User Preferences' => 'Gebruikersvoorkeuren',
  'No Sounds' => 'Geen geluiden',
  'Create Global Defaults' => 'Algeneme standaardinstellingen maken',
  'Enable Vary Subjects' => 'Onderwerpen variëren inschakelen',
  'TextMate' => 'TextMate',
  'No MFA Providers' => 'Geen MFA-aanbieders',
  'There is no known application setting with key "%s".' => 'Er is geen bekende toepassingsinstelling met de sleutel "%s".',
  'Choose the default sound behavior for new Conpherence rooms.' => 'Kies het standaard geluidsgedrag voor nieuwe Conpherence-ruimtes.',
  'Policy Favorites' => 'Beleidsfavorieten',
  'Conpherence Notifications' => 'Conpherence-meldingen',
  'Friday' => 'Vrijdag',
  'Timezone "%s" is not a valid timezone identifier.' => 'Tijdzone "%s" is geen geldige tijdzone-identificatie.',
  'Select your local timezone.' => 'Selecteer uw lokale tijdzone.',
  'Note: Removing an email address from your account will invalidate any outstanding password reset links.' => 'Let op: het verwijderen van een e-mailadres uit uw account maakt alle openstaande wachtwoordherstelkoppelingen ongeldig.',
  'Click "Save Preference" to persist these changes.' => 'Klik op "Voorkeuren opslaan" om deze wijzigingen te bewaren.',
  'Your browser has granted this server permission to send desktop notifications.' => 'Uw browser heeft deze server nog toestemming gegeven om bureaubladmeldingen te verzenden.',
  'This browser has denied permission to send desktop notifications to this server. Consult your browser settings / documentation to figure out how to clear this setting, do so, and then re-visit this page to grant permission.' => 'Deze browser heeft geen toestemming gegeven om bureaubladmeldingen naar deze server te verzenden. Raadpleeg de instellingen/documentatie van uw browser om te achterhalen hoe u deze instelling kunt wijzigen, doe dit en ga vervolgens terug naar deze pagina om toestemming te verlenen.',
  'Week Starts On' => 'De week begint op',
  'Emacs' => 'Emacs',
  'When a revision is updated, this software attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => 'Wanneer een versie wordt bijgewerkt, probeert deze software in de tekst opgenomen opmerkingen in de oudere versie over te zetten naar de nieuwe wijzigingen. U kunt dit uitschakelen als u liever wilt dat opmerkingen op één vaste plek blijven staan.',
  'Remove Factor' => 'Trap verwijderen',
  'Your account does not currently have a password set. You can choose a password by performing a password reset.' => 'Er is momenteel geen wachtwoord ingesteld voor uw account. U kunt een wachtwoord kiezen door uw wachtwoord opnieuw in te stellen.',
  'Disabled (an administrator has disabled login for this account provider).' => 'Uitgeschakeld (een beheerder heeft de aanmelding voor deze accountaanbieder uitgeschakeld).',
  'IntelliJ IDEA' => 'IntelliJ IDEA',
  'Send Another Verification Email?' => 'Nog een verificatiemail verzenden?',
  'Because the algorithm implementation is missing, your password can not be used or updated.' => 'Omdat de implementatie van het algoritme ontbreekt, kan uw wachtwoord niet worden gebruikt of gewijzigd.',
  'Verify' => 'Verifiëren',
  'Edit Settings: %s' => 'Instellingen bewerken: %s',
  'Add "Re:" Prefix' => 'Voorvoegsel "Re:" toevoegen',
  'Desktop Only' => 'Alleen op desktop',
  'Account Settings' => 'Accountinstellingen',
  'View Configuration' => 'Instellingen bekijken',
  'Supported Editor Protocols' => 'Ondersteunde tekstverwerkerprotocollen',
  'Add Authentication Factor' => 'Authenticatietrap toevoegen',
  'Choose which day a calendar week should begin on.' => 'Kies op welke dag een kalenderweek moet beginnen.',
  'Account Activity Logs' => 'Accountactiviteitenlogboeken',
  'Date and Time' => 'Datum en tijd',
  'Use Monospaced Font' => 'Monospace-lettertype gebruiken',
  'The strength of your stored password hash can be upgraded. To upgrade, either: log out and log in using your password; or change your password.' => 'De sterkte van uw opgeslagen versleutelde wachtwoord kan worden verbeterd. Om dit te doen, kunt u: afmelden en opnieuw aanmeldeing met uw wachtwoord; of uw wachtwoord wijzigen.',
  'Save Preferences' => 'Voorkeuren opslaan',
  'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have installed and configured such an editor, some applications can generate links that you can click to open files locally.

Provide a URI pattern for building external editor URIs in your environment. For example, if you use TextMate on macOS, the pattern for your machine may look something like this:

```name="Example: TextMate on macOS"
%s
```


For complete instructions on editor configuration, see **[[ %s | %s ]]**.

See the tables below for a list of supported variables and protocols.' => 'Veel tekstverwerkers kunnen worden ingesteld als URI-afhandelaar voor speciale protocollen zoals `editor://`. Als u een dergelijke tekstverwerker hebt geïnstalleerd en ingesteld, kunnen sommige toepassingen koppelingen maken waarop u kunt klikken om bestanden lokaal te openen.

Geef een URI-patroon op voor het bouwen van externe tekstverwerker-URI\'s in uw omgeving. Als u bijvoorbeeld TextMate op macOS gebruikt, kan het patroon voor uw machine er ongeveer zo uitzien:

```name="Voorbeeld: TextMate op macOS"
%s
```

Voor volledige instructies over het instellen van de tekstverwerker, zie **[[ %s | %s ]]**.

Zie de onderstaande tabellen voor een lijst met ondersteunde variabelen en protocollen.',
  '⚫ Email' => '⚫ E-mail',
  'New Setting' => 'Nieuwe instelling',
  'Pronoun' => 'Voornaamwoord',
  'Choose the default notification behavior for Conpherence rooms.' => 'Kies het standaard meldingsgedrag voor Conpherence-ruimtes.',
  'DarkConsole Tab' => 'Tabblad DarkConsole',
  'Note: Changing your primary email address will invalidate any outstanding password reset links.' => 'Let op: het wijzigen van uw primaire e-mailadres maakt alle openstaande wachtwoordherstelkoppelingen ongeldig.',
  'Sessions and Logs' => 'Sessies en logboeken',
  'Your primary email address is unverified. You will not be able to receive email until you verify it.' => 'Uw primaire e-mailadres is niet geverifieerd. Uw kunt geen e-mails ontvangen totdat u het hebt geverifieerd.',
  'Pinned Applications' => 'Vastgemaakte toepassingen',
  'This server can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => 'Deze server kan realtime meldingen naar uw webbrowser of computer sturen. Selecteer waar u deze realtime updates wilt ontvangen.',
  'Revoke All' => 'Alles intrekken',
  'No settings panel group with key "%s" exists!' => 'Er bestaat geen instellingenpaneelgroep met de sleutel "%s"!',
  'Linked Accounts and Authentication' => 'Gekoppelde accounts en authenticatie',
  'Choose the pronoun you prefer.' => 'Kies het voornaamwoord van uw voorkeur.',
  'Conflict Ignored' => 'Conflict genegeerd',
  'This engine is used to edit settings.' => 'Deze engine wordt gebruikt om instellingen te bewerken.',
  'Default (Unknown, "%s")' => 'Standaard (Onbekend, "%s")',
  'Primary Email Unverified' => 'Primair e-mailadres niet geverifieerd',
  'HiSec' => 'HiSec',
);
  }

}
