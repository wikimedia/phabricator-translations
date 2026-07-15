<?php

final class ArcanistCoreNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'Afgebroken vanwege een fout bij het uploaden van bestanden. U kunt %s gebruiken om binaire uploads over te slaan.',
  'Ref "%s" does not exist in remote "%s".' => 'Ref “%s” bestaat niet in externe “%s”.',
  'Flexible Heredoc and Nowdoc is not available before PHP 7.3.' => 'Flexibele Heredoc en Nowdoc zijn vóór PHP 7.3 niet beschikbaar.',
  'This process has PID %d. Acquiring lock...' => 'Dit proces heeft PID %d. Vergrendeling wordt verkregen…',
  'This working copy is associated with the %s repository.' => 'Deze werkkopie is gekoppeld aan de repository %s.',
  'Lint Disabler' => 'Lint-uitschakelaar',
  'Call to "posix_getpgid(...)" failed!' => 'Aanroep van "posix_getpgid(...)" mislukt!',
  'The "squash" strategy collapses multiple local commits into a single commit when publishing. It produces a linear published history (but discards local checkpoint commits). This is the default strategy.' => 'Bij de “squash”-strategie worden meerdere lokale commits samengevouwen tot één commit bij het publiceren. Daardoor wordt de openbare commitgeschiedenis lineair (maar worden lokale checkpoint-commits verwijderd). Dit is de standaardstrategie.',
  'Call Conduit API methods.' => 'Conduit API-methoden aanroepen.',
  'Symbol "%s" does not identify a valid revision.' => 'Het symbool “%s” geeft geen geldige versie aan.',
  'Do not call %s or %s directly on a %s. Instead, call %s or %s.' => 'Roep %s of %s niet direct aan op een %s. Roep in plaats daarvan %s of %s aan.',
  'A linter for Composer related files.' => 'Een linter voor Composer-gerelateerde bestanden.',
  '"%s" (%s)' => '“%s” (%s)',
  'Saved "%s" as "%s".' => '"%s" opgeslagen als "%s".',
  'Night has fallen. The moon overhead is waxing, and provides just enough light that you can make out your surroundings. It is quite cold.' => 'De nacht is gevallen. De maan aan de hemel is aan het opkomen en geeft net genoeg licht om de omgeving te kunnen zien. Het is behoorlijk koud.',
  '(This message was raised at line %s, but the file only has %s line(s).)' => array(
    
    array(
      '(Deze melding is op regel %s opgetreden, maar het bestand bevat slechts %s regel.)',
      '(Deze melding is op regel %s opgetreden, maar het bestand bevat slechts %s regels.)',
    ),
  ),
  'Not parsing!' => 'Wordt niet verwerkt!',
  'Portuguese (Portugal)' => 'Portugees (Portugal)',
  'Create an alias from __command__ to __target__ (optionally, with __options__).

Aliases allow you to create shorthands for commands and sets of flags you
commonly use, like defining "arc draft" as a shorthand for "arc diff --draft".

**Creating Aliases**

You can define "arc draft" as a shorthand for "arc diff --draft" like this:

  $ arc alias draft diff -- --draft

Now, when you run "arc draft", the command will function like
"arc diff --draft".

<bg:yellow> NOTE: </bg> Make sure you use "--" before specifying any flags you
want to pass to the command! Otherwise, the flags will be interpreted as flags
to "arc alias".

**Listing Aliases**

Without any arguments, "arc alias" will list aliases.

**Removing Aliases**

To remove an alias, run:

  $ arc alias <alias-name>

You will be prompted to remove the alias.

**Shell Commands**

If you begin an alias with "!", the remainder of the alias will be invoked as
a shell command. For example, if you want to implement "arc ls", you can do so
like this:

  $ arc alias ls \'!ls\'

When run, "arc ls" will now behave like "ls".

**Multiple Toolsets**

This workflow supports any toolset, even though the examples in this help text
use "arc". If you are working with another toolset, use the binary for that
toolset define aliases for it:

  $ phage alias ...

Aliases are bound to the toolset which was used to define them. If you define
an "arc draft" alias, that does not also define a "phage draft" alias.

**Builtins**

You can not overwrite the behavior of builtin workflows, including "alias"
itself, and if you install a new workflow it will take precedence over any
existing aliases with the same name.' => 'Maakt een alias van __command__ naar __target__ (eventueel met __options__).

Met aliassen kunt u snelkoppelingen maken voor commando’s en bepaalde opties die u vaak gebruikt. Zo kunt u bijvoorbeeld “arc draft” als snelkoppeling voor “arc diff --draft” instellen.

**Aliassen aanmaken**

Zo definieert u “arc draft” als afkorting voor “arc diff --draft”:

  $ arc alias draft diff -- --draft

Als u nu “arc draft” uitvoert, werkt het commando hetzelfde als “arc diff --draft”.

<bg:yellow> LET OP: </bg> Zet altijd “--” vóór de opties die u aan het commando wilt doorgeven! Anders worden die opties geïnterpreteerd als opties voor “arc alias”.

**Aliassen weergeven**

Zonder opgave van argumenten geeft “arc alias” een overzicht van de aliassen.

**Aliassen verwijderen**

Zo verwijdert u een alias:

  $ arc alias <alias-naam>

U wordt dan gevraagd of u de alias wilt verwijderen.

**Shell-opdrachten**

Als u een alias begint met “!”, wordt de rest ervan uitgevoerd als shell-commando. Als u bijvoorbeeld “arc ls” wilt toevoegen, kunt u dat als volgt doen:

  $ arc alias ls ‘!ls’

Het commando “arc ls” gedraagt zich nu als “ls”.

**Meerdere toolsets**

Deze werkwijze ondersteunt elke toolset, ook al wordt in de voorbeelden in deze hulptekst “arc” gebruikt. Als je met een andere toolset werkt, gebruik dan het programma voor die toolset om aliassen ervoor te definiëren:

  $ phage alias ...

Aliassen zijn gekoppeld aan de toolset waarmee ze ingesteld zijn. Als u een alias “arc draft” instelt, wordt daarmee dus niet automatisch ook een alias “phage draft” gedefinieerd.

**Ingebouwde commando’s**

Het gedrag van ingebouwde workflows, waaronder “alias” zelf, kunt u niet overschrijven. Als u een nieuwe workflow installeert, krijgt deze voorrang boven eventuele bestaande aliassen met dezelfde naam.',
  'Arrays should use the short array syntax.' => 'Arrays moeten de korte array-syntaxis gebruiken.',
  'File Symbol "%s"' => 'Bestandssymbool “%s”',
  'Try running your arc command again.' => 'Probeer uw arc-opdracht opnieuw uit te voeren.',
  'Local commit "%s" does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => 'De lokale commit “%s” kan niet eenduidig samengevoegd worden in “%s”. Doe een “rebase” of integreer de lokale wijzigingen zodat ze eenduidig kunnen worden samengevoegd.',
  'CC: %s' => 'CC: %s',
  'Failed to write file data.' => 'Het is niet gelukt om de bestandsgegevens weg te schrijven.',
  'Regenerate shell completion rules, without installing any configuration.' => 'Genereer shell-aanvullingsregels opnieuw, zonder enige configuratie te installeren.',
  'Execute a Phage subprocess.' => 'Voer een Phage-subproces uit.',
  'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => 'Wanneer het bestand geen tekstbestand is, kunt u het als \'binair\' markeren. Dit bestand als \'binair\' markeren en doorgaan?',
  'Rule \'%s\' is invalid, it must have a type and name like \'%s\'.' => 'Regel ‘%s’ is onjuist. Deze moet een type en naam hebben zoals ‘%s’.',
  'Task Symbol "%s"' => 'Taaksymbool “%s”',
  'Parameter ("%s") passed to "%s" when constructing a unit test message must be a string with a maximum length of %s bytes, but is %s bytes in length.' => array(
    
    array(
      
      array(
        
        array(
          'De parameter (“%s”) die aan “%s” is doorgegeven bij het samenstellen van een unit-testbericht, moet een tekenreeks zijn met een maximale lengte van %s  byte, maar is %s byte lang.',
          'De parameter (“%s”) die aan “%s” is doorgegeven bij het samenstellen van een unit-testbericht, moet een tekenreeks zijn met een maximale lengte van %s  byte, maar is %s bytes lang.',
        ),
        
        array(
          'De parameter (“%s”) die aan “%s” is doorgegeven bij het samenstellen van een unit-testbericht, moet een tekenreeks zijn met een maximale lengte van %s  bytes, maar is %s byte lang.',
          'De parameter (“%s”) die aan “%s” is doorgegeven bij het samenstellen van een unit-testbericht, moet een tekenreeks zijn met een maximale lengte van %s  bytes, maar is %s bytes lang.',
        ),
      ),
    ),
  ),
  'In multi-line parameter declarations, each parameter should be on a separate line.' => 'Bij parameterdeclaraties over meerdere regels moet elke parameter op een aparte regel staan.',
  'There was an error verifying the SSL Certificate Authority while negotiating the SSL connection. This usually indicates you are using a self-signed certificate.

As of OSX Yosemite, certificates must be added to the OSX keychain. You can do this with `security add-trusted-cert` from the command line, or by visiting the site in Safari and choosing to trust the certificate permanently.

For more information, see instructions in "%s".' => 'Er is een fout opgetreden bij het verifiëren van de SSL-certificeringsinstantie tijdens het onderhandelen over de SSL-verbinding. Dit geeft meestal aan dat u een zelfondertekend certificaat gebruikt.

Vanaf macOS Yosemite moeten certificaten worden toegevoegd aan de macOS-sleutelhanger. U kunt dit doen met het commando `security add-trusted-cert` vanaf de opdrachtregel, of door de website in Safari te bezoeken en het certificaat permanent te vertrouwen.

Zie de instructies in “%s” voor meer informatie.',
  'None of the configured interpreters can be located.' => 'Geen van de ingestelde interpreters kan worden gevonden.',
  'This workflow (\'%s\') requires a Repository API, override %s to return true.' => 'Voor deze werkstroom (‘%s’) is een Repository API vereist. Overschrijf %s zodat deze ‘true’ retourneert.',
  'This patch may have failed because it attempts to change the case of a filename (for instance, from \'%s\' to \'%s\'). Mercurial cannot apply patches like this on case-insensitive filesystems. You must apply this patch manually.' => 'Deze patch is mogelijk mislukt omdat deze probeert de hoofd- of kleine letters van een bestandsnaam te wijzigen (bijvoorbeeld van ‘%s’ naar ‘%s’). Mercurial kan dergelijke patches niet toepassen op hoofdletter-ongevoelige bestandssystemen. U moet deze patch handmatig toepassen.',
  'Executable files should either be binary or contain a shebang.' => 'Uitvoerbare bestanden moeten binair zijn of een ‘shebang’ (#!) bevatten.',
  'Numeric literal separators are not available before PHP 7.4.' => 'Numerieke letterlijke scheidingstekens zijn vóór PHP 7.4 niet beschikbaar.',
  'Landing onto target "%s", the default target under Git.' => 'Landen op doel “%s”, het standaarddoel onder Git.',
  'Unknown argument \'%s\'. Try \'%s\'.' => 'Onbekend argument \'%s\'. Probeer \'%s\'.',
  'Path \'%s\' is not readable.' => 'Pad \'%s\' is niet leesbaar.',
  'No match found. Try `%s %s` to search for a linter.' => 'Er is niets gevonden. Probeer `%s %s` om naar een linter te zoeken.',
  'English (Pirate)' => 'Engels (Piraat)',
  'Pick' => 'Kiezen',
  'If the file is not a text file, mark it as binary with:

  $ %s
' => 'Als het bestand geen tekstbestand is, markeer het dan als binair met: 

  $ %s',
  'Browse URI "%s"' => 'URI “%s” bekijken',
  'The working copy includes changes to \'%s\' paths. These changes will not be included in the diff because SVN can not commit \'svn:externals\' changes alongside normal changes.' => 'De werkkopie bevat wijzigingen in ‘%s’-paden. Deze wijzigingen worden niet opgenomen in de verschillen omdat SVN geen ‘svn:externals’-wijzigingen naast normale wijzigingen kan vastleggen.',
  'Base commit ruleset to invoke when determining the start of a commit range. See "Arcanist User Guide: Commit Ranges" for details.' => 'Basisregelset voor commits die moet worden aangeroepen bij het bepalen van het begin van een commitbereik. Zie “Arcanist User Guide: Commit Ranges” voor details.',
  '**bookmarks**' => '**bladwijzers**',
  'Nowhere to load blob \'%s\' from!' => 'Het binaire object ‘%s’ kan nergens van worden geladen!',
  'Runtime Error' => 'Runtime-fout',
  'Argument "%s" does not take a parameter.' => 'Het argument “%s” neemt geen parameter aan.',
  'LARGE WORKING SET' => 'GROTE WERKSET',
  'Output upload information in JSON format.' => 'Uploadinformatie uitvoeren in JSON-formaat.',
  'LANDING' => 'LANDEN',
  'Inline HTML' => 'HTML in lopende tekst',
  'Remote Repository' => 'Externe repository',
  'Conduit API login required.' => 'Aanmelden via de Conduit API is vereist.',
  'Rule \'%s\' matched a zero-length token and causes no state transition.' => 'Regel \'%s\' komt overeen met een token met een lengte van nul en veroorzaakt geen statuswijziging.',
  'Empty certificate in credentials.' => 'Leeg certificaat in de aanmeldgegevens.',
  'Confirms that revisions you did not author should land.' => 'Bevestigt dat versies die u niet zelf hebt geschreven, moeten worden doorgevoerd.',
  'No tests to run.' => 'Geen tests om uit te voeren.',
  'Expected JSON response from Slack.' => 'Verwachte JSON-respons van Slack.',
  '%s assertion(s) passed.' => array(
    'Er is %s bewering geslaagd.',
    'Er zijn %s beweringen geslaagd.',
  ),
  'NOTHING TO LAND' => 'NIET OM TE WIJZIGEN',
  'Expected to find a byte unit for meminfo key "%s" in meminfo source "%s", found no unit.' => 'Er werd verwacht dat er een byte-eenheid gevonden zou worden voor meminfo-sleutel "%s" in meminfo-bron "%s", maar er is geen eenheid gevonden.',
  'Do not copy changes to the staging area.' => 'Geen wijzigingen kopiëren naar de staging-omgeving.',
  'There was an error verifying the SSL connection. This usually indicates that the remote host has an SSL certificate for a different domain name than you are connecting with. Make sure the certificate you have installed is signed for the correct domain.' => 'Er is een fout opgetreden tijdens het controleren van de SSL-verbinding. Dit duidt er meestal op dat de externe host een SSL-certificaat heeft voor een andere domeinnaam dan degene waarmee u verbinding probeert te maken. Zorg ervoor dat het certificaat dat u hebt geïnstalleerd, is ondertekend voor het juiste domein.',
  'Expected a list!' => 'Er werd een lijst verwacht!',
  'Empty key is invalid!' => 'Een lege sleutel is onjuist!',
  'Library conflict! The library \'%s\' has already been loaded (from \'%s\') but is now being loaded again from a new location (\'%s\'). You can not load multiple copies of the same library into a program.' => 'Bibliotheekconflict! De bibliotheek \'%s\' is al geladen (vanuit \'%s\'), maar wordt nu opnieuw geladen vanuit een nieuwe locatie (\'%s\'). U kunt niet meerdere exemplaren van dezelfde bibliotheek in een programma laden.',
  'Unknown symbol type "%s".' => 'Onbekend symbooltype "%s".',
  '%s does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => '%s biedt momenteel geen ondersteuning voor aangepaste ernstniveaus, omdat regels niet kunnen worden geïdentificeerd aan de hand van berichten in de uitvoer.',
  'Multiple configuration sources define an alias for "%s %s". The last definition in the most specific source ("%s") will be used.' => 'Meerdere configuratiebronnen definiëren een alias voor "%s %s". De laatste definitie in de meest specifieke bron ("%s") wordt gebruikt.',
  'Branch "%s" does not rebase cleanly from "%s" onto "%s", skipping.' => 'Op branch "%s" kan niet correct en rebase worden uitgevoerd van "%s" naar "%s". Wordt overgeslagen.',
  'Unknown Symbol' => 'Onbekend symbool',
  'Against which commit?' => 'Tegen welke commit?',
  'commit-message' => 'commit-bericht',
  'It is morning. The sun is high in the sky to the east and you hear birds all around you. A gentle breeze rustles the leaves overhead.' => 'Het is ochtend. De zon staat hoog aan de oostelijke hemel en u hoort overal vogels om u heen. Een zacht briesje laat de bladeren boven uw hoofd ruisen.',
  'Local branch "%s" tracks an upstream, but following it leads to a local cycle; ignoring branch upstream.' => 'De lokale branch "%s" volgt een bovenliggende branch, maar het volgen ervan leidt tot een lokale cyclus; de bovenliggende branch wordt genegeerd.',
  'Project Config File' => 'Projectconfiguratiebestand',
  'Expected to match pattern "%s" against line "%s" in raw commit blob: %s' => 'Verwacht wordt dat patroon "%s" overeenkomt met regel "%s" in onbewerkte commit-blob: %s',
  'You stand in the middle of a small clearing.' => 'U staat midden in een kleine open plek.',
  'Unable to find a browser command to run. Set "browser" in your configuration to specify a command to use.' => 'Er is geen browseropdracht gevonden om uit te voeren. Stel "browser" in uw configuratie in om een specifieke opdracht op te geven.',
  'Try/catch block catches "Exception", but does not catch "Throwable". In PHP7 and newer, some runtime exceptions will escape this block.' => 'Het try/catch-blok vangt "Exception" op, maar niet "Throwable". In PHP7 en nieuwer ontwijken sommige runtime-uitzonderingen dit blok.',
  'HLint is a linter for Haskell code.' => 'HLint is een linter voor Haskell-code.',
  'No Parent Scope' => 'Geen bovenliggend bereik',
  'Use "*" after a response to save it in user configuration.' => 'Gebruik "*" na een antwoord om het op te slaan in de gebruikersconfiguratie.',
  'Multiple repositories (%s) matched the query. You can use the "%s" configuration to select the one you want.' => 'Meerdere repository\'s (%s) kwamen overeen met de zoekopdracht. U kunt de "%s"-configuratie gebruiken om de gewenste te selecteren.',
  'The author of this revision (%s) is:' => 'De auteur van deze versie (%s) is:',
  'Update the local working copy before applying the patch.' => 'Werk de lokale werkmap bij voordat u de patch toepast.',
  'Using `%s` as the `%s` value instead of a variable was not introduced until PHP 5.5, but this codebase targets an earlier version of PHP. Move the statement inside the loop.' => 'Het gebruik van `%s` als waarde voor `%s` in plaats van een variabele is pas in PHP 5.5 ingevoerd, maar deze broncode is bedoeld voor een eerdere versie van PHP. Verplaats de instructie naar binnen de lus.',
  'SHELL' => 'SHELL',
  'Unlocking...' => 'Wordt ontgrendeld…',
  '`%s` Statement Must Be The First Statement' => '`%s`-verklaring moet de eerste verklaring zijn',
  'Argument "%s" is unrecognized. Use "%s" to indicate the end of flags.' => 'Argument "%s" wordt niet herkend. Gebruik "%s" om het einde van de vlaggen aan te geven.',
  'Assertion failed, expected \'%s\' (at %s:%d): %s' => 'Stelling mislukt, verwacht \'%s\' (op %s:%d ): %s',
  'Test case \'%s\' was expected to raise an exception, but it did not throw anything.' => 'Er werd verwacht dat testgeval \'%s\' een uitzondering zou genereren, maar dat gebeurde niet.',
  'Land %s revision(s) in the wrong state?' => array(
    '%s versie in de verkeerde status terecht laten komen?',
    '%s versies in de verkeerde status terecht laten komen?',
  ),
  'it is the first commit reachable from the working copy state which is not outgoing.' => 'Het is de eerste commit die bereikbaar is vanuit de werkkopiestatus die niet uitgaand is.',
  'This `%s` or `%s` has a nonempty block which does not end with `%s`, `%s`, `%s`, `%s` or `%s`. Did you forget to add one of those? If you intend to fall through, add a `%s` comment to silence this warning.' => 'Deze `%s` of `%s` heeft een niet-leeg blok dat niet eindigt met `%s`, `%s`, `%s`, `%s` of `%s`. Bent u vergeten er een van deze toe te voegen? Als het wel degelijk de bedoeling is om naar het volgende commando door te gaan, voeg dan een commentaar `%s` toe om deze waarschuwing niet meer te tonen.',
  'Provide a map of regular expressions to severity levels. All matching codes have their severity adjusted.' => 'Geef een overzicht van reguliere expressies en bijbehorende ernstniveaus. Alle overeenkomende codes krijgen een aangepaste ernstgraad.',
  'Specify the state to merge into. By default, this is the same as the "onto" ref.' => 'Geef de staat op waarnaar moet worden samengevoegd. Standaard is dit hetzelfde als de "onto"-referentie.',
  'Rule \'%s\' in state \'%s\' in %s defines an invalid regular expression (\'%s\'): %s' => 'Regel \'%s\' in staat \'%s\' in %s definieert een incorrecte reguliere expressie (\'%s\'): %s',
  'In most cases, arc can be upgraded automatically.' => 'In de meeste gevallen kan arc automatisch worden geüpgraded.',
  'Row has no cell "%s".\\n' => 'Er is geen cel “%s” in de rij.\\n',
  'Continue without loading library?' => 'Doorgaan zonder bibliotheek te laden?',
  'Throwing Exception in `%s` Method' => 'Er wordt een uitzondering gegenereerd in de methode `%s`.',
  'More than one revision exists in the working copy:

%s
Use \'%s\' to select a revision.' => 'Er zijn meerdere versies in de werkkopie:

%s 

Gebruik \'%s\' om een versie te selecteren.',
  'Unknown VCS!' => 'Onbekende VCS!',
  'Request signature verification failed: signature is not correct.' => 'De verificatie van de handtekening is mislukt: de handtekening is niet correct.',
  'You can not change the logfile after a write has occurred!' => 'U kunt het logbestand niet meer wijzigen nadat er een schrijfbewerking heeft plaatsgevonden!',
  'English (Canada)' => 'Engels (Canada)',
  '    **extract-symbols-with-php-parser.php** [__options__] __path.php__
        Identify the symbols (classes, interfaces, traits, enums and functions)
        in PHP source files. Symbols are divided into "have" symbols
        (symbols the file declares) and "need" symbols (symbols the file
        depends on). For example, class declarations are "have" symbols,
        while object instantiations with "new X()" are "need" symbols.

        Dependencies on builtins and symbols marked \'@phutil-external-symbol\'
        in docblocks are omitted without __--all__.

        Symbols are reported in JSON on stdout.

        This script is used internally to build maps of library
        symbols.
' => '    **extract-symbols-with-php-parser.php** [__options__] __path.php__
        Identificeert de symbolen (klassen, interfaces, kenmerken, enums en
        functies) in PHP-bronbestanden. Symbolen worden onderverdeeld in
        “have”-symbolen (symbolen die het bestand declareert) en
        “need”-symbolen (symbolen waarvan het bestand afhankelijk is).
        Klassedeclaraties zijn bijvoorbeeld “have”-symbolen, terwijl
        objectinstantiaties met “new X()” “need”-symbolen zijn.

        Afhankelijkheden van ingebouwde functies en symbolen die in
        docblocks zijn gemarkeerd met ‘@phutil-external-symbol’ worden
        weggelaten indien de optie __--all__ niet is opgegeven.

        De symbolen worden in JSON-formaat naar de standard uitvoer
        geschreven.

        Dit script wordt intern gebruikt om kaarten van bibliotheek-
        symbolen samen te stellen.',
  'This codebase targets PHP %s on Windows, but `%s()` is not available there.' => 'Deze codebase is gericht op PHP %s op Windows, maar `%s()` is daar niet beschikbaar.',
  'Author: %s' => 'Auteur: %s',
  'Confirms that revisions with open parent revisions should land.' => 'Bevestigt dat versies met openstaande bovenliggende versies moeten worden doorgevoerd.',
  'Custom %s file was specified, but it was not found!' => 'Er werd een aangepast bestand %s opgegeven, maar dat is niet gevonden!',
  'ERROR' => 'FOUT',
  'Do not upload binaries (like images).' => 'Upload geen binaire bestanden (zoals afbeeldingen).',
  'Default value for parameters with `%s` type hint can only be `%s`.' => 'De standaardwaarde voor parameters met de typehint `%s` kan alleen `%s` zijn.',
  'Use of Variable Variable' => 'Gebruik van een variabele variabele',
  'Only one output format allowed' => 'Slechts één uitvoerformaat toegestaan',
  'Arrange tasks based on priority, created, or modified, default is priority.' => 'Taken rangschikken op prioriteit, aangemaakt of gewijzigd, standaard is prioriteit.',
  'Failed to create a temporary directory: the disk is full.' => 'Aanmaken van een tijdelijke map is mislukt: de schijf is vol.',
  'Value provided to "replaceQueryParam()" for key "%s" is NULL. Use "removeQueryParam()" to remove a query parameter.' => 'De waarde die is opgegeven voor "replaceQueryParam()" voor sleutel "%s" is NULL. Gebruik "removeQueryParam()" om een queryparameter te verwijderen.',
  'Signal handler with key "%s" is already installed.' => 'Signaalhandler met sleutel "%s" is al geïnstalleerd.',
  'Name constructors `%s` explicitly. This method is a constructor because it has the same name as the class it is defined in.' => 'Geef constructors expliciet de naam `%s`. Deze methode is een constructor omdat deze dezelfde naam heeft als de klasse waarin deze is gedefinieerd.',
  'Install lessc using `%s`.' => 'Installeer lessc met `%s`.',
  'Too many distinct parent refs!' => 'Te veel verschillende bovenliggende refs!',
  'Unable to find \'%s\' file to configure test engines. Create an \'%s\' file in the root directory of the working copy.' => 'Kan bestand \'%s\' niet vinden om testengines te configureren. Maak een bestand \'%s\' aan in de hoofdmap van de werkkopie.',
  'Fetch Repository: %s' => 'Repository ophalen: %s',
  'Call to "posix_setsid()" failed!' => 'Aanroep naar "posix_setsid()" mislukt!',
  'Use the message from a specific revision. If you do not specify a revision, arc will guess which revision is in the working copy.' => 'Gebruik het bericht van een specifieke versie. Als u geen versie opgeeft, raadt arc welke versie in de werkkopie staat.',
  'Do you want to create a new commit with these %s change(s)?' => array(
    'Wilt u een nieuwe commit aanmaken met deze  %s wijziging?',
    'Wilt u een nieuwe commit aanmaken met deze  %s wijzigingen?',
  ),
  'Unexpected "%s" section in property addition.' => 'Onverwachte sectie "%s" in eigenschapstoevoeging.',
  'Failed to load library at location "%s". This library is specified by "%s". Check that the setting is correct and the library is located in the right place.' => 'Kan bibliotheek op locatie "%s" niet laden. Deze bibliotheek is opgegeven door "%s". Controleer of de instelling correct is en de bibliotheek op de juiste plaats staat.',
  'Diff Parse Exception: %s' => 'Diff-verwerkingsuitzondering: %s',
  'Commit this revision anyway?' => 'Deze versie toch committen?',
  'After creating the task, open it in a web browser.' => 'Open de taak na het aanmaken in een webbrowser.',
  'Asymetric property visibility is not available before PHP 8.4.' => 'De zichtbaarheid van asymmetrische eigenschappen is vóór PHP 8.4 niet beschikbaar.',
  'Amend working copy using unrelated revision %s?' => 'Werkkopie wijzigen met niet-gerelateerde versie %s?',
  'DETACHED HEAD' => 'LOSSTAANDE HEAD',
  'Lint does not currently support %s in SVN.' => 'Lint ondersteunt momenteel geen %s in SVN.',
  'Anonymous classes are not available before PHP 7.0.' => 'Anonieme klassen zijn vóór PHP 7.0 niet beschikbaar.',
  'Failed to open file \'%s\'.' => 'Het openen van bestand ‘%s’ is mislukt.',
  'Load a library.' => 'Laad een bibliotheek.',
  'There are several revisions which match the working copy:

%s
Use \'%s\' to choose one, or \'%s\' to create a new revision.' => 'Er zijn meerdere versies die overeenkomen met de werkkopie:

%s
Gebruik \'%s\' om er een te kiezen, of \'%s\' om een nieuwe versie aan te maken.',
  'Failed to decompose multicopy changeset in order to generate diff.' => 'Kan de multicopy-changeset niet ontleden om een diff te genereren.',
  'Saved uncommitted changes from working copy.' => 'Niet-gecommitte wijzigingen van de werkkopie opgeslagen.',
  'Unsound' => 'Onbetrouwbaar',
  'Patch %s \'%s\' to \'%s\', but source path does not exist in the working copy. Continue anyway?' => 'Patch %s \'%s\' naar \'%s\', maar het bronpad bestaat niet in de werkkopie. Toch doorgaan?',
  'The URI of a server to connect to by default, if %s is run in a project without a configured URI or run outside of a project.' => 'De URI van een server om standaard mee te verbinden, als %s wordt uitgevoerd in een project zonder geconfigureerde URI of buiten een project.',
  '**lock.php** __file__ [__options__]
    Acquire a lockfile and hold it until told to unlock it.
' => '**lock.php** __file__ [__options__]
    Verkrijgt een vergrendelingsbestand en houdt het vast totdat er opdracht
    wordt gegeven om het te ontgrendelen.',
  'Loading library from "%s"...' => 'Bibliotheek laden vanuit "%s"...',
  'Remote branch has multiple heads.' => 'Remote branch heeft meerdere heads.',
  'Duplicate case in switch statement. PHP will ignore all but the first case.' => 'Dubbele case in switch-instructie. PHP negeert alle behalve de eerste case.',
  'Unable to identify the revision in the working copy. Use \'%s\' to select a revision.' => 'Kan de versie in de werkkopie niet identificeren. Gebruik \'%s\' om een versie te selecteren.',
  'IP address "%s" is not properly formatted: an address must contain exactly 8 segments, or omit a subsequence of segments with "::".' => 'IP-adres "%s" is niet correct opgemaakt: een adres moet precies 8 segmenten bevatten, of een reeks segmenten weglaten met "::".',
  'Binary integer literals are not available before PHP 5.4.' => 'Binaire gehele getallen zijn niet beschikbaar vóór PHP 5.4.',
  'Failed to match remote pattern against line "%s".' => 'Kan het remote-patroon niet matchen met regel "%s".',
  '%s is not a valid JSON object.' => '%s is geen geldig JSON-object.',
  'Checking out bookmark "%s".' => 'Bladwijzer "%s" wordt uitgecheckt.',
  'Braces for an empty block statement shouldn\'t contain only whitespace.' => 'Accolades voor een lege blokinstructie mogen niet alleen witruimte bevatten.',
  'Changes Planned' => 'Geplande wijzigingen',
  'Preparing merge into the empty state.' => 'Merge naar de lege status wordt voorbereid.',
  'Landing the active branch, "%s".' => 'De actieve branch "%s" wordt geland.',
  'Closure Linter' => 'Closure Linter',
  '(... %s more revisions ...)' => array(
    '(... nog %s versie ...)',
    '(... nog %s versies ...)',
  ),
  'Server URI "%s" must include the "http" or "https" protocol. It should be in the form "%s".' => 'Server-URI "%s" moet het protocol "http" of "https" bevatten. Het moet de vorm "%s" hebben.',
  'Definition of symbol "%s" (of type "%s") in file "%s" in library "%s" duplicates prior definition in file "%s" in library "%s".' => 'Definitie van symbool "%s" (van type "%s") in bestand "%s" in bibliotheek "%s" dupliceert eerdere definitie in bestand "%s" in bibliotheek "%s".',
  'Invalid Executable' => 'Foutief uitvoerbaar bestand',
  'Set %s to file mode 600.' => 'Stel %s in op bestandsmodus 600.',
  'Use "!" after a response to save it in working copy configuration.' => 'Gebruik "!" na een antwoord om het op te slaan in de werkkopieconfiguratie.',
  'Will merge into remote "%s" by default, because this is the remote the change is landing onto.' => 'Wordt standaard gemerged naar remote "%s", omdat dit de remote is waarop de wijziging wordt geland.',
  'Option \'%s\' requires a parameter.' => 'Optie \'%s\' vereist een parameter.',
  'Two objects (of classes "%s" and "%s", descendants of ancestor class "%s") returned the same key from "%s" ("%s"), but each object in this class map must be identified by a unique key.' => 'Twee objecten (van klassen "%s" en "%s", afstammelingen van voorouderklasse "%s") gaven dezelfde sleutel terug van "%s" ("%s"), maar elk object in deze klassemap moet worden geïdentificeerd door een unieke sleutel.',
  'Asymetric property visibility for static properties is not available before PHP 8.5.' => 'De zichtbaarheid van asymmetrische eigenschappen voor statische eigenschappen is vóór PHP 8.5 niet beschikbaar.',
  'PHP versions older then %s have known security vulnerabilities when considering PHAR files; Refusing to inspect file %s. See %s' => 'PHP-versies ouder dan %s vertonen bekende veiligheidslekken met betrekking tot PHAR-bestanden; het inspecteren van het bestand %s wordt geweigerd. Zie %s',
  'Unable to determine the remote URI for this repository.' => 'Kan de externe URI voor deze repository niet bepalen.',
  'Set key "%s" = %s in %s config.' => 'Sleutel "%s" = %s ingesteld in %s-configuratie.',
  'This workflow has not yet been updated to Toolsets and can not retrieve a modern WorkingCopy object. Use "getWorkingCopyIdentity()" to retrieve a previous-generation object.' => 'Deze workflow is nog niet bijgewerkt naar Toolsets en kan geen modern WorkingCopy-object ophalen. Gebruik "getWorkingCopyIdentity()" om een object van de vorige generatie op te halen.',
  'This codebase targets PHP %s on Windows, but `%s()` is not available there until PHP %s.' => 'Deze codebase richt zich op PHP %s op Windows, maar `%s()` is daar pas beschikbaar vanaf PHP %s.',
  'Deleted key "%s" from %s config (was %s).' => 'Sleutel "%s" verwijderd uit %s-configuratie (was %s).',
  'Invalid Modifiers' => 'Incorrecte modifiers',
  'The pipe operator is not available before PHP 8.5.' => 'De pijplijn-operator is vóór PHP 8.5 niet beschikbaar.',
  'List of command aliases.' => 'Lijst van opdrachtaliassen.',
  'Working Copy State' => 'Status van de werkkopie',
  'Space found before semicolon.' => 'Spatie gevonden vóór puntkomma.',
  'Use `%s` for checking if the string contains something.' => 'Gebruik `%s` om te controleren of de tekenreeks iets bevat.',
  'Perforce mode does not support the "merge" land strategy. Use the "squash" land strategy when landing to a Perforce remote (you can use "--squash" to select this strategy).' => 'Perforce-modus ondersteunt de "merge"-landstrategie niet. Gebruik de "squash"-landstrategie bij het landen naar een Perforce-remote (u kunt "--squash" gebruiken om deze strategie te selecteren).',
  'Method Spacing' => 'Afstand tussen methoden',
  'Use "--types" to select between alternatives.' => 'Gebruik "--types" om te kiezen tussen alternatieven.',
  'Revision "%s" does not exist, or you do not have permission to see it.' => 'Versie "%s" bestaat niet, of u hebt geen toestemming om deze te bekijken.',
  'Build Symbol "%s"' => 'Buildsymbool "%s"',
  'Landing the active bookmark, "%s".' => 'De actieve bladwijzer "%s" gaat landen.',
  'Release lock?' => 'Vergrendeling opheffen?',
  'Copied Here' => 'Hier gekopieerd',
  'Array item with key \'%s\' must be an instance of %s, %s given.' => 'Array-item met sleutel \'%s\' moet een instantie zijn van %s, %s opgegeven.',
  'Aborted generation of gigantic diff.' => 'Genereren van gigantische diff afgebroken.',
  'This line will be added:' => 'Deze regel wordt toegevoegd:',
  'Multiple "abstract" modifiers are not allowed.' => 'Meerdere "abstract"-modifiers zijn niet toegestaan.',
  'Expected value to be a list, got "%s".' => 'Verwachtte dat de waarde een lijst is, maar kreeg "%s".',
  'Array style to prefer.' => 'Voorkeur voor array-stijl.',
  'No lexer rule matched input at char %d.' => 'Geen lexerregel kwam overeen met invoer op teken %d.',
  'Unhandled parser rule \'%s\'!' => 'Niet-afgehandelde regel \'%s\'!',
  'HTTP Status Code: %d' => 'HTTP-statuscode: %d',
  'You are amending the working copy using information from a revision you are not the author of.' => 'U wijzigt de werkkopie met informatie van een versie waarvan u niet de auteur bent.',
  'Apply patches suggested by lint to the working copy without prompting.' => 'Patches die door lint worden voorgesteld zonder bevestiging toepassen op de werkkopie.',
  'After merging, push changes onto a specified branch.' => 'Na het mergen, wijzigingen pushen naar een opgegeven branch.',
  'Commit message for \'%s\' has explicit \'Differential Revision\'.' => 'Commitbericht voor \'%s\' heeft een expliciete \'Differential Revision\'.',
  'The token "%s" is not formatted correctly. API tokens should be 32 characters long. Make sure you visited the correct URI and copy/pasted the token correctly.' => 'Het token "%s" is niet correct opgemaakt. API-tokens moeten 32 tekens lang zijn. Controleer of u de juiste URI hebt bezocht en het token correct hebt gekopieerd en geplakt.',
  '`%s` methods cannot contain a body. This construct will cause a fatal error.' => '`%s`-methoden mogen geen body bevatten. Deze constructie veroorzaakt een onherstelbare fout.',
  'Install shell completion so you can use the "tab" key to autocomplete
commands and flags in your shell for toolsets and workflows.

The **bash** shell is supported.

**Installing Completion**

To install shell completion, run the command:

  $ arc shell-complete

This will install shell completion into your current shell. After installing,
you may need to start a new shell (or open a new terminal window) to pick up
the updated configuration.

Once installed, completion should work across all toolsets.

**Using Completion**

After completion is installed, use the "tab" key to automatically complete
workflows and flags. For example, if you type:

  $ arc diff --draf<tab>

...your shell should automatically expand the flag to:

  $ arc diff --draft

**Updating Completion**

To update shell completion, run the same command:

  $ arc shell-complete

You can update shell completion without reinstalling it by running:

  $ arc shell-complete --generate

You may need to update shell completion if:

  - you install new toolsets; or
  - you move this software on disk; or
  - you upgrade this software and the new version fixes shell completion bugs.' => 'Installeer shell-aanvulling, zodat u met de “tab“-toets commando’s en vlaggen in uw shell automatisch aan kunt vullen voor toolsets en workflows.

De **bash**-shell wordt ondersteund.

**Aanvulling installeren**

Met deze opdracht installeert u de shell-aanvulling:

  $ arc shell-complete

Hiermee wordt shell-aanvulling in uw huidige shell geïnstalleerd. Na de installatie moet u mogelijk een nieuwe shell starten (of een nieuw terminalvenster openen) om de bijgewerkte configuratie te activeren.

Na installatie zou de aanvulling in alle toolsets moeten werken.

**Aanvulling gebruiken**

Nadat de aanvulling is geïnstalleerd, kunt u met u de “tab“-toets workflows en vlaggen automatisch aanvullen. Als u bijvoorbeeld typt:

  $ arc diff --draf<tab>

...zou uw shell de vlag automatisch moeten aanvullen tot:

  $ arc diff --draft

**Aanvulling bijwerken**

Met dezelfde opdracht kunt u de shell-aanvulling bijwerken:

  $ arc shell-complete

En zo kunt u de shell-aanvulling bijwerken zonder deze opnieuw te installeren:

  $ arc shell-complete --generate

Het kan nodig zijn om de shell-aanvulling bij te werken als:

  - u nieuwe toolsets installeert; of
  - u deze software op de schijf verplaatst; of
  - u deze software bijwerkt en de nieuwe versie fouten in de shell-aanvulling verhelpt.',
  'The version control system ("%s") in the current working copy does not support bookmarks.' => 'Het versiebeheersysteem ("%s") in de huidige werkkopie ondersteunt geen bookmarks.',
  'Aborted workflow to fix UTF-8.' => 'Workflow afgebroken om UTF-8 te herstellen.',
  'Extension ("%s") defines invalid configuration with key "%s". This key is reserved.' => 'Uitbreiding ("%s") definieert incorrecte configuratie met sleutel "%s". Deze sleutel is gereserveerd.',
  'Missing required parameters: %s' => 'Ontbrekende vereiste parameters: %s',
  'Interrupted by SIGINT (^C).' => 'Onderbroken door SIGINT (^C)',
  'This codebase targets PHP %s, but `%s()` was removed in PHP %s.' => 'Deze codebase richt zich op PHP %s, maar `%s()` is verwijderd in PHP %s.',
  'Command-Line Input' => 'Opdrachtregelinvoer',
  'NOT REVISION AUTHOR' => 'NIET DE AUTEUR VAN DE VERSIE',
  'Normally, you should update these %s revision(s), submit them for review, and wait for reviewers to accept them before you continue. To resubmit a revision for review, either: update the revision with revised changes; or use "Request Review" from the web interface.' => array(
    'Normaal gesproken moet u deze versie bijwerken, ter beoordeling indienen en wachten tot beoordelaars die accepteren voordat u doorgaat. Om een versie opnieuw ter beoordeling in te dienen: werk de versie bij met herziene wijzigingen, of gebruik "Request Review" vanuit de webinterface.',
    'Normaal gesproken moet u deze %s versies bijwerken, ter beoordeling indienen en wachten tot beoordelaars die accepteren voordat u doorgaat. Om een versie opnieuw ter beoordeling in te dienen: werk de versie bij met herziene wijzigingen, of gebruik "Request Review" vanuit de webinterface.',
  ),
  'Encountered two "%s" lines ("%s", "%s") while parsing raw commit blob, expected at most one: %s' => 'Twee "%s"-regels ("%s", "%s") aangetroffen bij het verwerken van de ruwe commitblob, verwachtte er maximaal één: %s',
  'Two subclasses of "%s" ("%s" and "%s") define locales with the same locale code ("%s"). Each locale must have a unique locale code.' => 'Twee subklassen van "%s" ("%s" en "%s") definiëren taalregio\'s met dezelfde taalregiocode ("%s"). Elke taalregio moet een unieke taalregiocode hebben.',
  'Specify only one paste to retrieve.' => 'Geef slechts één paste op om op te halen.',
  'Argument "%s" conflicts with itself!' => 'Argument "%s" conflicteert met zichzelf!',
  'Normally, a new branch (git) or bookmark (hg) is created and then the patch is applied and committed in the new branch/bookmark. This flag cherry-picks the resultant commit onto the original branch and deletes the temporary branch.' => 'Normaal gesproken wordt een nieuwe branch (git) of bladwijzer (hg) aangemaakt en vervolgens wordt de patch toegepast en gecommit in de nieuwe branch/bladwijzer. Deze vlag cherry-pickt de resulterende commit naar de oorspronkelijke branch en verwijdert de tijdelijke branch.',
  'Saving local state (at "%s" on branch "%s").' => 'Lokale status opslaan (op "%s" op branch "%s").',
  'Stash these changes and continue?' => 'Deze wijzigingen stashen en doorgaan?',
  'Push to a remote other than the default.' => 'Pushen naar een andere remote dan de standaard.',
  'Shift/reduce conflict: from state \'%s\', when a \'%s\' is encountered, shifting conflicts with reducing \'%s\'.' => 'Shift/reduce-conflict: vanuit status \'%s\', wanneer een \'%s\' wordt aangetroffen, conflicteert shiften met het reduceren van \'%s\'.',
  'Expected hunk header \'%s\'.' => 'Verwachtte hunk-header \'%s\'.',
  'Unexpected node of type \'%s\'!' => 'Onverwacht knooppunt van type \'%s\'!',
  '    %s %s
' => '    %s %s',
  'Install flake8 using `%s`.' => 'Installeer flake8 met `%s`.',
  '%s: configuration captured a \'%s\' named capturing group, \'%s\'. Script output:
%s' => '%s: configuratie heeft een \'%s\' benoemde vanggroep \'%s\' vastgelegd. Scriptuitvoer:
%s',
  'Argument short aliases must be exactly one character long. \'%s\' is invalid.' => 'Korte aliassen voor argumenten moeten precies één teken lang zijn. \'%s\' is incorrect.',
  'Block for up to __n__ seconds waiting for the lock.' => 'Blokkeer gedurende maximaal __n__ seconden in afwachting van de vergendeling.',
  'Updating working copy...' => 'Werkkopie bijwerken...',
  'The "HOME" environment variable is not defined, so this workflow can not identify where to install shell completion.' => 'De omgevingsvariabele "HOME" is niet gedefinieerd, dus deze workflow kan niet bepalen waar shell-aanvulling geïnstalleerd moet worden.',
  'Language constructs do not require parentheses.' => 'Taalconstructies vereisen geen haakjes.',
  'Failed to read from %s' => 'Lezen van %s is mislukt',
  'Future already has a key ("%s") assigned.' => 'Future heeft al een sleutel ("%s") toegewezen.',
  'Failed to set configured locale %s, using en_US locale' => 'Het instellen van de geconfigureerde landinstelling %s is mislukt; de landinstelling en_US wordt gebruikt',
  'URI \'%s\' must be fully qualified with \'%s\' scheme.' => 'URI \'%s\' moet volledig gekwalificeerd zijn met \'%s\'-schema.',
  'command' => 'opdracht',
  'Detects common misspellings of English words.' => 'Detecteert veelvoorkomende spelfouten in Engelse woorden.',
  'Inspect internal object properties.' => 'Interne objecteigenschappen inspecteren.',
  'Unknown raw diff source.' => 'Onbekende ruwe diff-bron.',
  'No linters to run.' => 'Geen linters om uit te voeren.',
  'Modified' => 'Gewijzigd',
  'TODO Comment' => 'TODO-opmerking',
  'Failed to parse %s output!' => 'Verwerken van %s-uitvoer is mislukt!',
  'Some reviewers are currently away:' => 'Sommige beoordelaars zijn momenteel afwezig:',
  'Do you want to edit the message?' => 'Wilt u het bericht bewerken?',
  'Use of Product Name Literal' => 'Gebruik van productnaamliteraal',
  'Merging with "%s" strategy, the default strategy.' => 'Mergen met "%s"-strategie, de standaardstrategie.',
  'Override configured lint engine for this project.' => 'Geconfigureerde lintengine voor dit project overschrijven.',
  '%s can not load additional nodes at runtime. Tried to load: %s' => '%s kan geen extra knooppunten laden tijdens runtime. Geprobeerd te laden: %s',
  'Updating commit message...' => 'Commitbericht bijwerken...',
  'Failed to open filesystem path "%s" for writing.' => 'Kan bestandssysteempad "%s" niet openen om te schrijven.',
  'Config: Reading user configuration file "%s"...' => 'Configuratie: gebruikersconfiguratiebestand "%s" lezen...',
  'This client version does not support staging this repository.' => 'Deze clientversie ondersteunt het stagen van deze repository niet.',
  'Run an external script, then parse its output with a regular expression. This is a generic binding that can be used to run custom lint scripts.' => 'Een extern script uitvoeren en vervolgens de uitvoer verwerken met een reguliere expressie. Dit is een generieke binding die kan worden gebruikt om aangepaste lintscripts uit te voeren.',
  'Unable to detect any supported shell, so autocompletion rules can not be installed. Use "--shell" to select a shell.' => 'Kan geen ondersteunde shell detecteren, dus autoaanvullingsregels kunnen niet worden geïnstalleerd. Gebruik "--shell" om een shell te selecteren.',
  'You are updating a revision ("%s") with the "--draft" flag, but this revision has already been published for review. You can not turn a revision back into a draft once it has been published.' => 'U werkt een versie ("%s") bij met de vlag "--draft", maar deze versie is al gepubliceerd ter beoordeling. U kunt een versie niet meer terugzetten naar een concept nadat deze is gepubliceerd.',
  'Future graph is stalled: some futures are held, but no futures are waiting or working. The graph can never resolve.' => 'Future-graaf is vastgelopen: sommige futures worden vastgehouden, maar geen futures wachten of werken. De graaf kan nooit worden opgelost.',
  'Workflow ("%s") generates two prompts with the same key ("%s"). Each prompt a workflow generates must have a unique key.' => 'Workflow ("%s") genereert twee prompts met dezelfde sleutel ("%s"). Elke prompt die een workflow genereert moet een unieke sleutel hebben.',
  'Constants should be uppercase.' => 'Constanten moeten in hoofdletters zijn.',
  'Named arguments are not available before PHP 8.0.' => 'Benoemde argumenten zijn vóór PHP 8.0 niet beschikbaar.',
  'Create a draft revision so you can look over your changes before involving anyone else. Other users will not be notified about the revision until you later use "Request Review" to publish it. You can still share the draft by giving someone the link.' => 'Maak een conceptversie aan zodat u uw wijzigingen kunt bekijken voordat u anderen erbij betrekt. Andere gebruikers worden pas op de hoogte gesteld van de versie wanneer u later "Request Review" gebruikt om deze te publiceren. U kunt het concept nog steeds delen door iemand de link te geven.',
  'Convention: spell keyword `%s` as `%s`.' => 'Conventie: schrijf sleutelwoord `%s` als `%s`.',
  '%3dms' => '%3d ms',
  'Octal notation prefixes are not available before PHP 8.1.' => 'De voorvoegsels voor octale notatie zijn vóór PHP 8.1 niet beschikbaar.',
  'Expected JSON response from GitHub.' => 'JSON-antwoord van GitHub verwacht.',
  'Print symbol map to stdout instead of writing it to the map file.' => 'Symboolkaart naar standaarduitvoer in plaats van het kaartbestand schrijven.',
  'No type ID for node type name \'%s\' in \'%s\' AAST.' => 'Geen type-ID voor knooppunttypenaam \'%s\' in \'%s\' AAST.',
  'Update the revision comments, then save and exit.' => 'Werk de versieopmerkingen bij, sla op en sluit af.',
  'Function Call Should Be Type Cast' => 'Functieaanroep moet een typecast zijn',
  '`%s` Unreliable' => '`%s` onbetrouwbaar',
  'Workflow has no name!' => 'Workflow heeft geen naam!',
  'The "arc anoid" workflow requires "python3" to be available in your $PATH.' => 'Voor de werkstroom “arc anoid” moet “python3” in uw $PATH staan.',
  'Confused by empty line' => 'In de war door lege regel',
  'Follow naming conventions: parameters should be named using `%s`' => 'Volg de naamgevingsrichtlijnen: parameters moeten met `%s` worden benoemd.',
  'Argument "%s" conflicts with argument "%s"%s' => 'Argument "%s" conflicteert met argument "%s"%s',
  'FETCHED' => 'OPGEHAALD',
  '%s may only write strings!' => '%s mag alleen tekenreeksen schrijven!',
  'Show the command which would be issued, but do not actually commit anything.' => 'De opdracht weergeven die zou worden uitgevoerd, maar niets daadwerkelijk committen.',
  'Found %d matching paths for linter \'%s\'.' => array(
    '%d overeenkomend pad gevonden voor linter \'%s\'.',
    '%d overeenkomende paden gevonden voor linter \'%s\'.',
  ),
  'Could not parse URI \'%s\'.' => 'Kan URI \'%s\' niet verwerken.',
  'LOAD STATE' => 'STATUS LADEN',
  'PHP Source file to analyze.' => 'Het te analyseren PHP-bronbestand.',
  '(Run `%s` for more details.)' => '(Voer `%s` uit voor meer details.)',
  'Use "arc alias" to configure aliases, not "arc set-config".' => 'Gebruik "arc alias" om aliassen in te stellen, in plaats van "arc set-config".',
  'Desired merge strategy is ambiguous, choose an explicit strategy.' => 'Gewenste mergestrategie is dubbelzinnig, kies een expliciete strategie.',
  'Expected \'%s\' to start git binary patch.' => 'Verwachtte \'%s\' om git binaire patch te starten.',
  'Diff URI:' => 'Diff-URI:',
  'MERGE' => 'SAMENVOEGEN',
  'Revision %s' => 'Versie %s',
  'Unknown signature method \'%s\'!' => 'Onbekende handtekeningmethode \'%s\'!',
  'Working Copy: Path "%s" is not in any working copy.' => 'Werkkopie: pad "%s" bevindt zich niet in een werkkopie.',
  'This codebase targets PHP %s, but anonymous functions were not introduced until PHP 5.3.' => 'Deze codebase richt zich op PHP %s, maar anonieme functies zijn pas geïntroduceerd in PHP 5.3.',
  'rebuild the library map file' => 'het bibliotheekkaartbestand opnieuw opbouwen',
  'Bookmark "%s"' => 'Bladwijzer "%s"',
  'Use of Removed Function "each()"' => 'Gebruik van verwijderde functie "each()"',
  'Land %s revision(s) anyway, despite ongoing and failed builds?' => array(
    '%s versie toch laten landen, ondanks lopende en mislukte builds?',
    '%s versies toch laten landen, ondanks lopende en mislukte builds?',
  ),
  'Uploaded binary data for "%s".' => 'Binaire gegevens geüpload voor "%s".',
  'The symbol map for library \'%s\' (at \'%s\') claims this %s is defined in \'%s\', but loading that source file did not cause the %s to become defined.' => 'De symboolmap voor bibliotheek \'%s\' (op \'%s\') beweert dat deze %s is gedefinieerd in \'%s\', maar het laden van dat bronbestand heeft er niet voor gezorgd dat de %s werd gedefinieerd.',
  'Future has already started; futures can not start more than once.' => 'Future is al gestart; futures kunnen niet meer dan één keer starten.',
  'Unable to upload file: the server refused to accept file "%s". This usually means it is too large.' => 'Kan bestand niet uploaden: de server weigerde bestand "%s" te accepteren. Dit betekent meestal dat het te groot is.',
  '%s requires the %s algorithm but %s disables %s by default. Consider setting %s or export %s.' => '%s vereist het algoritme %s, maar %s schakelt %s standaard uit. Overweeg om %s in te stellen of %s te exporteren.',
  'Configuration option "%s" is not valid. Configuration options passed with command line flags must be in the form "name=value".' => 'Configuratieoptie "%s" is niet geldig. Configuratieopties die worden doorgegeven met opdrachtregelvlaggen moeten de vorm "naam=waarde" hebben.',
  'Language for the paste.' => 'Taal voor de paste.',
  'Profile script execution and write results to a file.' => 'Scriptuitvoering profileren en resultaten naar een bestand schrijven.',
  'The name of a default unit test engine to use, if no unit test engine is specified by the current project.' => 'De naam van een standaard unittestengine om te gebruiken als er geen unittestengine is opgegeven door het huidige project.',
  'You can not use "--current" when installing support.' => 'U kunt "--current" niet gebruiken bij het installeren van ondersteuning.',
  'You do not see "%s" anywhere.' => 'U ziet "%s" nergens.',
  'Marker "%s"' => 'Markering "%s"',
  'NOTE: commit %s could not be completely parsed:' => 'OPMERKING: commit %s kon niet volledig worden verwerkt:',
  'Updating library: %s' => 'Bibliotheek bijwerken: %s',
  'Importing `%s` with `%s` is unnecessary because the aliased name is identical to the imported symbol name.' => 'Het importeren van `%s` met `%s` is onnodig omdat de aliasnaam identiek is aan de geïmporteerde symboolnaam.',
  'Combining union and intersection types is not supported before PHP 8.2.' => 'Het combineren van verenigings- en doorsnedetypen wordt vóór PHP 8.2 niet ondersteund.',
  '%s OPEN PARENT REVISION(S)' => array(
    '%s OPEN BOVENLIGGENDE VERSIE',
    '%s OPEN BOVENLIGGENDE VERSIES',
  ),
  'Since more than one revision in Differential matches this working copy, you will be asked which revision you want to update if you run \'%s\'.' => 'Omdat meer dan één versie in Differential overeenkomt met deze werkkopie, wordt u gevraagd welke versie u wilt bijwerken als u \'%s\' uitvoert.',
  'Argument "--force" for "arc browse" is deprecated. Use "--type %s" instead.' => 'Argument "--force" voor "arc browse" is verouderd. Gebruik in plaats daarvan "--type %s".',
  'CHECKOUT' => 'CHECKOUT',
  'There should be no whitespace before the object operator.' => 'Er mag geen witruimte staan vóór de objectoperator.',
  'Failed to update library: %s' => 'Bijwerken van bibliotheek mislukt: %s',
  'Land %s revision(s) with changes planned?' => array(
    '%s versie laten landen met geplande wijzigingen?',
    '%s versies laten landen met geplande wijzigingen?',
  ),
  'When linting git repositories, amend HEAD with autofix patches suggested by lint without prompting.' => 'Bij het linten van git-repository\'s, HEAD wijzigen met autofix-patches die door lint worden voorgesteld zonder bevestiging.',
  'Base commit is not in local repository; trying to fetch.' => 'Basiscommit bevindt zich niet in de lokale repository; ophalen wordt geprobeerd.',
  'File Error' => 'Bestandsfout',
  'Specify a runtime configuration value.' => 'Geef een runtimeconfiguratiewaarde op.',
  'Avoid the use of inner functions.' => 'Vermijd het gebruik van interne functies.',
  'None of the configured binaries can be located.' => 'Geen van de geconfigureerde binaire bestanden kan worden gevonden.',
  'Generators are not available before PHP 5.5.' => 'Generatoren zijn vóór PHP 5.5 niet beschikbaar.',
  'Start rule \'%s\' does not appear in the rules for the grammar. Use %s to choose a different start rule, or add a rule named \'%s\'.' => 'Startregel \'%s\' komt niet voor in de regels voor de grammatica. Gebruik %s om een andere startregel te kiezen, of voeg een regel toe met de naam \'%s\'.',
  'IP address "%s" is not properly formatted. Expected an IPv4 address like "%s".' => 'IP-adres "%s" is niet correct opgemaakt. Verwachtte een IPv4-adres zoals "%s".',
  'Merge into the empty state instead of an existing state. This mode is primarily useful when creating a new repository, and selected automatically if the "onto" ref does not exist and the "into" state is not specified.' => 'Mergen naar de lege status in plaats van een bestaande status. Deze modus is voornamelijk nuttig bij het aanmaken van een nieuwe repository en wordt automatisch geselecteerd als de "onto"-ref niet bestaat en de "into"-status niet is opgegeven.',
  'Install PHPCS with `%s`.' => 'Installeer PHPCS met `%s`.',
  'Value passed to "phutil_string_cast()" is an array; arrays can not be sensibly cast to strings.' => 'Waarde doorgegeven aan "phutil_string_cast()" is een array; arrays kunnen niet zinvol naar tekenreeksen worden gecast.',
  'Install Golint using `%s`.' => 'Installeer Golint met `%s`.',
  'Command %s failed: %s' => 'Opdracht %s is mislukt: %s',
  'Holding changes locally, they have not been submitted.' => 'Wijzigingen worden lokaal vastgehouden, ze zijn niet ingediend.',
  'These %s path(s) will NOT be committed. Commit this revision anyway?' => array(
    'Dit pad wordt NIET gecommit. Deze versie toch committen?',
    'Deze paden worden NIET gecommit. Deze versie toch committen?',
  ),
  'Needs Revision' => 'Heeft versie nodig',
  '<bytes = %s>' => '<bytes = %s>',
  'Branch "%s"' => 'Branch "%s"',
  'Alias resolved to "%s", but this is not a valid workflow or alias name. This alias or workflow might have previously existed and been removed.' => 'Alias is omgezet naar "%s", maar dit is geen geldige workflow- of aliasnaam. Deze alias of workflow heeft mogelijk eerder bestaan en is verwijderd.',
  'Expected exception (in class(es): %s), got exception of class "%s".' => 'Verwachtte uitzondering (in klasse(n): %s), maar kreeg uitzondering van klasse "%s".',
  'Argument "%s" requires a parameter.' => 'Argument "%s" vereist een parameter.',
  'Got unrecognized upstream format ("%s") from Git, expected "refs/heads/..." or "refs/remotes/...".' => 'Onbekend upstream-formaat ("%s") ontvangen van Git, verwachtte "refs/heads/..." of "refs/remotes/...".',
  'LIBRARY ERROR' => 'BIBLIOTHEEKFOUT',
  'Enter a brief description of the changes included in this update.' => 'Voer een korte beschrijving in van de wijzigingen in deze update.',
  'Failed to explode line "%s".' => 'Kan regel "%s" niet opsplitsen.',
  'Unknown library version \'%s\'!' => 'Onbekende bibliotheekversie \'%s\'!',
  'Set a default URI with `arc set-config phabricator.uri <uri>`.' => 'Stel een standaard-URI in met `arc set-config phabricator.uri <uri>`.',
  'Saving response "%s" to prompt "%s".' => 'Antwoord "%s" opslaan voor prompt "%s".',
  'Expected method "%s->%s()" to return a unique key, got "%s" from %s objects at indexes: %s.' => array(
    
    array(
      
      array(
        
        array(
          'Verwachtte dat methode "%s->%s()" een unieke sleutel teruggeeft, maar kreeg "%s" van %s object op indexen: %s.',
          'Verwachtte dat methode "%s->%s()" een unieke sleutel teruggeeft, maar kreeg "%s" van %s objecten op indexen: %s.',
        ),
      ),
    ),
  ),
  'Unrecognized property status \'%s\'.' => 'Niet-herkende eigenschapsstatus \'%s\'.',
  'REPOSITORY' => 'REPOSITORY',
  'No pushable remote "%s" exists. Use the "--onto-remote" flag to choose a valid, pushable remote to land changes onto.' => 'Er bestaat geen pushbare remote "%s". Gebruik de vlag "--onto-remote" om een geldige, pushbare remote te kiezen om wijzigingen op te landen.',
  'Workflow "%s" is unknown. Supported workflows are: %s.' => 'Workflow "%s" is onbekend. Ondersteunde workflows zijn: %s.',
  'Configuration value "%s" is set to "%s".' => 'Configuratiewaarde "%s" is ingesteld op "%s".',
  'Describe the changes in this new revision.' => 'Beschrijf de wijzigingen in deze nieuwe versie.',
  'NEW BOOKMARK' => 'NIEUWE BLADWIJZER',
  'Commit symbol "%s" contains a newline. This is not a valid character in a Mercurial commit symbol.' => 'Commitsymbool "%s" bevat een nieuwe regel. Dit is geen geldig teken in een Mercurial-commitsymbool.',
  'Install JSCS using `%s`.' => 'Installeer JSCS met `%s`.',
  'Invalid Octal Numeric Scalar' => 'Incorrecte octale numerieke scalar',
  '%s failed to parse file data %d: %s' => '%s kon bestandsgegevens voor %d niet verwerken: %s',
  'LOCK ACQUIRED' => 'VERGRENDELING VERWORVEN',
  'Configuration value "%s" is empty.' => 'Configuratiewaarde "%s" is leeg.',
  'Invalid command "%s". Did you mean:' => 'Incorrecte opdracht "%s". Bedoelde u:',
  'Deleted key "%s" from %s config.' => 'Sleutel "%s" verwijderd uit %s-configuratie.',
  'Unable to verify request signature, signature format is not known.' => 'Kan de verzoekhandtekening niet verifiëren, het handtekeningformaat is niet bekend.',
  'Follow naming conventions: class constants should be named using `%s`' => 'Volg de naamgevingsrichtlijnen: klasseconstanten moeten met `%s` worden benoemd.',
  'Emit machine-readable JSON. EXPERIMENTAL! Probably does not work!' => 'Machineleesbare JSON uitvoeren. EXPERIMENTEEL! Werkt waarschijnlijk niet!',
  'UNIT OKAY' => 'UNIT OK',
  'TO INSTALL: %s' => 'TE INSTALLEREN: %s',
  'Reuse of Iterator References' => 'Hergebruik van iteratorreferenties',
  'Choose a workflow!' => 'Kies een workflow!',
  '`%s` Operator' => '`%s`-operator',
  '%s %s' => '%s %s',
  'No working copy to write config into!' => 'Geen werkkopie om configuratie naar te schrijven!',
  'Specify available reviewers and retry.' => 'Geef beschikbare beoordelaars op en probeer opnieuw.',
  'PHP version to target on Windows.' => 'PHP-versie om te targeten op Windows.',
  'Working Copy: No candidate locations for %s from this working directory.' => 'Werkkopie: geen kandidaatlocaties voor %s vanuit deze werkmap.',
  'Option \'%s\' is not supported under %s.' => 'Optie \'%s\' wordt niet ondersteund onder %s.',
  'The coding standard(s) to apply.' => 'De toe te passen codestandaard(en).',
  'Fail' => 'Mislukt',
  'Expected no exception, got exception of class "%s".' => 'Verwachtte geen uitzondering, maar kreeg uitzondering van klasse "%s".',
  'Subversion does not use base commits.' => 'Subversion gebruikt geen basiscommits.',
  'Do not use the PHP closing tag, `%s`.' => 'PHP-sluittag `%s` niet gebruiken.',
  'it is the first ancestor of %s that either has a bookmark, or is already in the remote and it matched the rule %s in your %s \'base\' configuration' => 'het is de eerste voorouder van %s die een bladwijzer heeft, of al in de remote staat en overeenkomt met de regel %s in uw %s \'base\'-configuratie',
  'Found unexpected surplus key "%s" where no such key was expected.' => 'Onverwachte overtollige sleutel "%s" gevonden waar geen dergelijke sleutel werd verwacht.',
  'You specified %s but %s is not available, so coverage can not be enabled for %s.' => 'U hebt %s opgegeven, maar %s is niet beschikbaar, dus dekking kan niet worden ingeschakeld voor %s.',
  'Classes which should not be used because they represent the unsafe usage of dynamic strings.' => 'Klassen die niet mogen worden gebruikt omdat ze het onveilige gebruik van dynamische tekenreeksen vertegenwoordigen.',
  'No viewer!' => 'Geen viewer!',
  'Failed to match SimpleCommitGraph directive "%s".' => 'Kan SimpleCommitGraph-richtlijn "%s" niet matchen.',
  'No lint messages.' => 'Geen lintberichten.',
  'Error in parsing \'%s\' file, for linter \'%s\'.' => 'Fout bij het verwerken van bestand \'%s\', voor linter \'%s\'.',
  'ONGOING BUILDS' => 'LOPENDE BUILDS',
  'UNABLE TO ACQUIRE LOCK:' => 'NIET IN STAAT VERGRENDELING TE VERWERVEN:',
  'REBASE CONFLICT' => 'REBASE-CONFLICT',
  'Follow naming conventions: enums should be named using `%s`.' => 'Volg de naamgevingsrichtlijnen: enumeraties moeten met `%s` worden benoemd.',
  'Raw input file was written to: %s' => 'Ruw invoerbestand is geschreven naar: %s',
  'Default value for parameters with a false type hint can only be false.' => 'De standaardwaarde voor parameters met een typehint `false` kan alleen `false` zijn.',
  'Configuration option ("%s") defined by extension "%s" has an alias ("%s") which conflicts with the alias of another configuration option ("%s"). The key and aliases of each option must be unique.' => 'Configuratieoptie ("%s") gedefinieerd door uitbreiding "%s" heeft een alias ("%s") die conflicteert met de alias van een andere configuratieoptie ("%s"). De sleutel en aliassen van elke optie moeten uniek zijn.',
  'Enter a commit message.' => 'Voer een commitbericht in.',
  'Cover changes since a specific revision.' => 'Wijzigingen dekken sinds een specifieke versie.',
  'Implicit Constructor' => 'Impliciete constructor',
  'Read diff from stdin, not from the working copy. This disables many features which depend on having access to the working copy.' => 'Diff lezen van stdin, niet van de werkkopie. Dit schakelt veel functies uit die afhankelijk zijn van toegang tot de werkkopie.',
  'Command to use to invoke a web browser.' => 'Opdracht om een webbrowser te openen.',
  'Value "%s" is not valid, specify a JSON list: %s' => 'Waarde "%s" is niet geldig, geef een JSON-lijst op: %s',
  'Specify at most one revision name.' => 'Geef maximaal één versienaam op.',
  'Two argument specifications have the same short alias ("%s").' => 'Twee argumentspecificaties hebben dezelfde korte alias ("%s").',
  'In multi-line function or method calls, each argument should be on a separate line.' => 'Bij meerregelige functie- of methodeaanroepen moet elk argument op een aparte regel staan.',
  'Open a file or object (like a task or revision) in a local web browser.

  $ arc browse README   # Open a file in Diffusion.
  $ arc browse T123     # View a task.
  $ arc browse HEAD     # View a symbolic commit.

To choose a browser binary to invoke, use:

  $ arc set-config browser __browser-binary__

If no browser is set, the command will try to guess which browser to use.' => 'Opent een bestand of object (zoals een taak of versie) in een lokale webbrowser.

  $ arc browse README   # Open een bestand in Diffusion.
  $ arc browse T123     # Bekijk een taak.
  $ arc browse HEAD     # Bekijk een symbolische commit.

Om een browserbinary te kiezen:

  $ arc set-config browser __browser-binary__

Als er geen browser is ingesteld, probeert de opdracht te raden welke browser moet worden gebruikt.',
  'Call to "assertCaught(..., <junk>, ...)" passed bad value for test result. Expected null, Exception, or Throwable; got: %s.' => 'Aanroep van "assertCaught(..., <junk>, ...)" heeft een incorrecte waarde doorgegeven voor het testresultaat. Verwachtte null, Exception of Throwable; kreeg: %s.',
  'You may land one branches and any number of bookmarks in a single operation.' => 'U kunt één branch en een willekeurig aantal bookmarks in één bewerking landen.',
  'Unknown lint severity "%s". Valid severities are: %s.' => 'Onbekende linternst "%s". Geldige ernstniveaus zijn: %s.',
  'You have untracked files in this working copy.' => 'U hebt niet-gevolgde bestanden in deze werkkopie.',
  'JSON Lint' => 'JSON Lint',
  'Expected alias definition (with key "%s") to be a dictionary.' => 'Verwachtte dat de aliasdefinitie (met sleutel "%s") een dictionary is.',
  'Arguments with default values must be at the end of the argument list.' => 'Argumenten met standaardwaarden moeten aan het einde van de argumentenlijst staan.',
  'Select an output format.' => 'Selecteer een uitvoerformaat.',
  'Unable to close file!' => 'Kan bestand niet sluiten!',
  'The `%s` and `%s` statements no longer accept variable arguments.' => 'De `%s`- en `%s`-instructies accepteren geen variabele argumenten meer.',
  'No analyzer is available for binary "%s".' => 'Er is geen analyzer beschikbaar voor binair bestand "%s".',
  'Objects passed to "%s" must return sort vectors (objects of class "%s") from the specified method ("%s"). One object (with key "%s") did not.' => 'Objecten doorgegeven aan "%s" moeten sorteervectoren (objecten van klasse "%s") teruggeven vanuit de opgegeven methode ("%s"). Eén object (met sleutel "%s") deed dat niet.',
  'Alias functions should be avoided.' => 'Aliasfuncties moeten worden vermeden.',
  'Unit test results included failures, but all failing tests are known to be unsound. Ignore unsound test failures?' => 'Unittestresultaten bevatten mislukkingen, maar alle mislukte tests zijn bekend als onbetrouwbaar. Onbetrouwbare testmislukkingen negeren?',
  'Resolve merge conflicts before proceeding.' => 'Los mergeconflicten op voordat u doorgaat.',
  'The proxied future has not been provided yet.' => 'De geproxyde future is nog niet opgegeven.',
  'No ref "%s" exists in remote "%s".' => 'Er bestaat geen ref "%s" in remote "%s".',
  'Expected JSON response from Postmark.' => 'JSON-antwoord van Postmark verwacht.',
  'Failed to convert a hunk from \'%s\' to UTF-8. Check that the specified encoding is correct.' => 'Kan een hunk niet converteren van \'%s\' naar UTF-8. Controleer of de opgegeven codering correct is.',
  'Bad Charset' => 'Foutieve tekenset',
  'Wrote PHP definition.' => 'PHP-definitie geschreven.',
  'Throwing an `%s` from within the `%s` method is not allowed before PHP 7.4.' => 'Het melden van `%s` vanuit de methode `%s` is vóór PHP 7.4 niet toegestaan.',
  'Version' => 'Versie',
  'REVISION' => 'VERSIE',
  'Use `%s` to detect issues with Javascript source files.' => 'Gebruik `%s` om problemen met Javascript-bronbestanden te detecteren.',
  'COMMITTED' => 'GECOMMIT',
  'Confirms that revisions that are already published should land.' => 'Bevestigt dat versies die al gepubliceerd zijn, geland moeten worden.',
  'Executing \'%s\' failed!' => 'Uitvoeren van \'%s\' is mislukt!',
  'Which URI do you want to open?' => 'Welke URI wilt u openen?',
  'Cherry Pick Failed!' => 'Cherry-pick mislukt!',
  'What default do you want to use? [origin/master]' => 'Welke standaard wilt u gebruiken? [origin/main]',
  'Matching working copy directory path.' => 'Overeenkomend werkkopie-mappad.',
  'Restoring local state (to detached commit "%s").' => 'Lokale status herstellen (naar losstaande commit "%s").',
  'Unknown version control system.' => 'Onbekend versiebeheersysteem.',
  'Mark the file as temporary. Temporary files will be deleted after 24 hours.' => 'Markeer het bestand als tijdelijk. Tijdelijke bestanden worden na 24 uur verwijderd.',
  'Hardpoint (at index "%s") has the same key ("%s") as an earlier hardpoint. Each hardpoint must have a key that is unique among hardpoints on the object.' => 'Hardpoint (op index "%s") heeft dezelfde sleutel ("%s") als een eerder hardpoint. Elk hardpoint moet een sleutel hebben die uniek is onder hardpoints op het object.',
  'Accept/shift conflict!' => 'Accept/shift-conflict!',
  'Dynamic `%s`' => 'Dynamische `%s`',
  'Expected %s rules to define rules for state \'%s\'.' => 'Verwachtte dat %s-regels regels definiëren voor status \'%s\'.',
  'These %s symbol(s) do not exist in the remote. They will be created as new branches:' => array(
    'Dit symbool bestaat niet in de remote. Het wordt aangemaakt als nieuwe branch:',
    'Deze %s symbolen bestaan niet in de remote. Ze worden aangemaakt als nieuwe branches:',
  ),
  'Incomplete implementation: %s!' => 'Onvolledige implementatie: %s!',
  'Argument names may only contain a-z, 0-9 and -, and must be at least one character long. \'%s\' is invalid.' => 'Argumentnamen mogen alleen a-z, 0-9 en - bevatten en moeten minstens één teken lang zijn. \'%s\' is incorrect.',
  'Array Separator' => 'Arrayscheidingsteken',
  'If true, %s will never change repository history (e.g., through amending or rebasing). Defaults to true in Mercurial and false in Git. This setting has no effect in Subversion.' => 'Indien waar, zal %s nooit de repositorygeschiedenis wijzigen (bijv. door amenden of rebasen). Standaard waar in Mercurial en onwaar in Git. Deze instelling heeft geen effect in Subversion.',
  'Binary Integer Casing' => 'Hoofdlettergebruik van binaire gehele getallen',
  'Unrecognized argument "%s".' => 'Niet-herkend argument "%s".',
  'Unable to upload file: path "%s" is not a file.' => 'Kan bestand niet uploaden: pad "%s" is geen bestand.',
  'Space After Control Statement' => 'Spatie na besturingsinstructie',
  'Patch deletes file \'%s\', but the file does not exist in the working copy. Continue anyway?' => 'Patch verwijdert bestand \'%s\', maar het bestand bestaat niet in de werkkopie. Toch doorgaan?',
  'Property hooks are not available before PHP 8.4.' => 'Property hooks zijn vóór PHP 8.4 niet beschikbaar.',
  'Unit testing raised errors, but all failing tests are unsound.' => 'Unittests hebben fouten opgeleverd, maar alle mislukte tests zijn onbetrouwbaar.',
  'Global Variables' => 'Globale variabelen',
  'IMMUTABLE WORKING COPY' => 'ONVERANDERLIJKE WERKKOPIE',
  'Show information about prompts a workflow may execute, and review saved
responses.

**Show Prompts**

To show possible prompts a workflow may execute, run:

  $ arc prompts __workflow__

**Saving Responses**

If you always want to answer a particular prompt in a certain way, you can
save your response to the prompt. When you encounter the prompt again, your
saved response will be used automatically.

To save a response, add "*" or "!" to the end of the response you want to save
when you answer the prompt:

  - Using "*" will save the response in user configuration. In the future,
    the saved answer will be used any time you encounter the prompt (in any
    project).
  - Using "!" will save the response in working copy configuration. In the
    future, the saved answer will be used when you encounter the prompt in
    the current working copy.

For example, if you would like to always answer "y" to a particular prompt,
respond with "y*" or "y!" to save your response.
' => 'Toont informatie over prompts die een workflow kan uitvoeren en geeft een
overzicht van opgeslagen antwoorden.

**Prompts weergeven**

Voer het volgende uit om mogelijke prompts weer te geven die een workflow kan
uitvoeren:

  $ arc prompts __workflow__

**Antwoorden opslaan**

Als u een bepaalde prompt altijd op een bepaalde manier wilt beantwoorden, kunt
u uw antwoord op de prompt opslaan. Wanneer u de prompt opnieuw tegenkomt,
wordt uw opgeslagen antwoord automatisch gebruikt.

Om een antwoord op te slaan voegt u “*” of “!” toe aan het einde van het
antwoord dat u wilt opslaan wanneer u de prompt beantwoordt:

  - Als u “*” gebruikt, wordt het antwoord opgeslagen in de
    gebruikersconfiguratie. In de toekomst wordt het opgeslagen antwoord
    steeds gebruikt wanneer u de prompt tegenkomt (in elk project).
  - Als u “!” gebruikt, wordt het antwoord opgeslagen in de
    werkkopie-instellingen. In de toekomst wordt het opgeslagen antwoord
    gebruikt wanneer u in de huidige werkkopie de prompt tegenkomt.

Als u bijvoorbeeld altijd met “j” wilt antwoorden op een bepaalde prompt,
antwoord dan met “j*” of “j!” om uw antwoord op te slaan.',
  'Files must end in a newline.' => 'Bestanden moeten eindigen met een lege regel.',
  'You may need to open a new terminal window or launch a new shell before the changes take effect.' => 'Mogelijk moet u een nieuw terminalvenster openen of een nieuwe shell starten voordat de wijzigingen van kracht worden.',
  'The regex to process output with.' => 'De regex om de uitvoer mee te verwerken.',
  'Lint changes since a specific revision.' => 'Wijzigingen linten sinds een specifieke versie.',
  'Do you want to use this message?' => 'Wilt u dit bericht gebruiken?',
  '(This configuration value is not recognized by arc. It may be misspelled or out of date.)' => '(Deze configuratiewaarde wordt niet herkend door arc. Het kan verkeerd gespeld of verouderd zijn.)',
  'Custom preset.' => 'Aangepaste preset.',
  'The use of `%s` in an anonymous closure is not available before PHP 5.4.' => 'Het gebruik van `%s` in een anonieme closure is niet beschikbaar vóór PHP 5.4.',
  'Unit test engine (of class "%s") returned invalid results when run (with method "%s"). Expected a list of "%s" objects as results, but value with key "%s" is not valid.' => 'Unittestengine (van klasse "%s") gaf incorrecte resultaten terug bij uitvoering (met methode "%s"). Verwachtte een lijst van "%s"-objecten als resultaten, maar waarde met sleutel "%s" is niet geldig.',
  'Prior to PHP 5.4, `%s` fails when given empty arrays. Prefer to write `%s` as `%s`.' => 'Vóór PHP 5.4 mislukt `%s` bij lege arrays. Schrijf bij voorkeur `%s` als `%s`.',
  'Match expressions are not available before PHP 8.0.' => 'Overeenkomst-uitdrukkingen (match expressions) zijn vóór PHP 8.0 niet beschikbaar.',
  'You have uncommitted changes in this working copy. Commit or revert them before proceeding.' => 'U hebt niet-gecommitte wijzigingen in deze werkkopie. Commit of herstel ze voordat u doorgaat.',
  'In module `%s`, declaration `%s`.' => 'In module `%s`, declaratie `%s`.',
  'Space After Unary Prefix Operator' => 'Spatie na unaire prefixoperator',
  'Stashing uncommitted changes. (You can restore them with `%s`).' => 'Niet-gecommitte wijzigingen worden gestasht. (U kunt ze herstellen met `%s`).',
  'Call %s to build the graph out before calling %s.' => 'Roep %s aan om de graaf op te bouwen voordat u %s aanroept.',
  'These changes will land:' => 'Deze wijzigingen worden geland:',
  'Unrecognized symbol name.' => 'Niet-herkende symboolnaam.',
  'Support for arbitrary expressions in the `%s` construct was not introduced until PHP 5.5, but this codebase targets an earlier version of PHP.' => 'Het gebruik van willekeurige uitdrukkingen in de constructie `%s` is pas sinds PHP 5.5 mogelijk, maar deze code is gericht op een eerdere versie van PHP.',
  'Attempting to convert a string encoding from \'%s\' to \'%s\', but the \'%s\' PHP extension is not available. Install %s to work with encodings other than UTF-8.' => 'Poging om een tekenreekscodering te converteren van \'%s\' naar \'%s\', maar de PHP-uitbreiding \'%s\' is niet beschikbaar. Installeer %s om met andere coderingen dan UTF-8 te werken.',
  'Expected a regular expression, but value is not valid: %s' => 'Verwachtte een reguliere expressie, maar de waarde is niet geldig: %s',
  'INSTALLED' => 'GEÏNSTALLEERD',
  'Restored stashed changes to the working directory.' => 'Gestashte wijzigingen hersteld naar de werkmap.',
  'Default list of "onto" remote for "arc land".' => 'Standaardlijst van "onto"-remote voor "arc land".',
  'Fuse two or more files together, absolutely without any involvement of animals,
unlike the competitor unix tool __cat__.
Please do not expect deterministic results because the printed output
is generated by stick electrodes.
Please still consider the environment before printing the result.' => 'Twee of meer bestanden samenvoegen, absoluut zonder enige betrokkenheid van dieren,
in tegenstelling tot het concurrerende unix-hulpmiddel __cat__.
Verwacht geen deterministische resultaten omdat de afgedrukte uitvoer
wordt gegenereerd door staafelektroden.
Denk alstublieft nog steeds aan het milieu voordat u het resultaat afdrukt.',
  'Land these changes?' => 'Deze wijzigingen landen?',
  'Future graphs can not be rewound.' => 'Future-graafen kunnen niet worden teruggespoeld.',
  'IP address "%s" is not properly formatted. Address segments should be between 0 and 255, inclusive, but segment "%s" has a value outside of this range.' => 'IP-adres "%s" is niet correct opgemaakt. Adressegmenten moeten tussen 0 en 255 liggen (inclusief), maar segment "%s" heeft een waarde buiten dit bereik.',
  'BOOKMARK' => 'BLADWIJZER',
  'Local branch "%s" tracks an upstream but following it leads to a local cycle, ignoring branch.' => 'Lokale branch "%s" volgt een upstream, maar het volgen ervan leidt tot een lokale cyclus; branch wordt genegeerd.',
  'Continue Inside Switch' => 'Continue binnen switch',
  'Expected exactly one argument to "browse(...)" with a token.' => 'Verwachtte precies één argument voor "browse(...)" met een token.',
  'CONFIGURED' => 'GECONFIGUREERD',
  'Unable to run a command in directory "%s".' => 'Kan geen opdracht uitvoeren in map "%s".',
  'Return type hints are not available before PHP 7.0.' => 'Typehints voor retourwaarden zijn vóór PHP 7.0 niet beschikbaar.',
  'When updating a revision under git, edit revision information before updating.' => 'Bij het bijwerken van een versie onder git, versieinformatie bewerken vóór het bijwerken.',
  'LOCAL CHANGES' => 'LOKALE WIJZIGINGEN',
  'This codebase targets PHP %s, but `%s` was not introduced until PHP 5.3.' => 'Deze codebase richt zich op PHP %s, maar `%s` is pas geïntroduceerd in PHP 5.3.',
  'UNIT UNSOUND' => 'UNIT ONBETROUWBAAR',
  'Invalid value for `%s`: %s.' => 'Foutieve waarde voor `%s`: %s.',
  '    **extract-symbols.php** [__options__] __path.php__
        Identify the symbols (clases, functions and interfaces) in a PHP
        source file. Symbols are divided into "have" symbols (symbols the file
        declares) and "need" symbols (symbols the file depends on). For example,
        class declarations are "have" symbols, while object instantiations
        with "new X()" are "need" symbols.

        Dependencies on builtins and symbols marked \'@phutil-external-symbol\'
        in docblocks are omitted without __--all__.

        Symbols are reported in JSON on stdout.

        This script is used internally to build maps of library
        symbols.

        It would be nice to eventually implement this as a C++ xhpast binary,
        as it\'s relatively stable and performance is currently awful
        (500ms+ for moderately large files).
' => '    **extract-symbols.php** [__opties__] __pad.php__
        Identificeert de symbolen (klassen, functies en interfaces) in een
        PHP-bronbestand. Symbolen worden onderverdeeld in “have”-symbolen
        (symbolen die het bestand declareert) en “need”-symbolen (symbolen
        waarvan het bestand afhankelijk is). Klassedeclaraties zijn
        bijvoorbeeld “have”-symbolen, terwijl objectinstantiaties met “new X()”
        “need”-symbolen zijn.

        Afhankelijkheden van ingebouwde functies en symbolen die in docblocks
        zijn gemarkeerd met ‘@phutil-external-symbol’ worden weggelaten, tenzij
        __--all__ is opgegeven.

        Symbolen worden in JSON-formaat naar de standaard uitvoer geschreven.

        Dit script wordt intern gebruikt om kaarten van bibliotheeksymbolen
        samen te stellen.

        Het zou mooi zijn om dit uiteindelijk te implementeren als een C++
        xhpast-binair bestand, aangezien het relatief stabiel is en de
        prestaties momenteel slecht zijn (meer dan 500 ms voor redelijk grote
        bestanden).',
  'Make sure all the symbols used in an %s library are defined and known.  This linter is specific to PHP source in %s libraries.' => 'Zorg ervoor dat alle symbolen die in een %s-bibliotheek worden gebruikt, gedefinieerd en bekend zijn. Deze linter is specifiek voor PHP-broncode in %s-bibliotheken.',
  'Argument position specified with "--current" ("%s") is greater than the number of arguments provided ("%s").' => 'Argumentpositie opgegeven met "--current" ("%s") is groter dan het aantal opgegeven argumenten ("%s").',
  'Generator (for query "%s") returned an "ArcanistHardpointTaskResult" object, which is not a valid thing to return from a generator.

This almost always means the generator implementation has a "return $this->yield..." statement which should be a "yield $this->yield..." instead.' => 'De generator (voor query “%s”) retourneerde een "ArcanistHardpointTaskResult"-object. Zo’n object moet een generator nooit retourneren.

Dit betekent bijna altijd dat de implementatie van de generator een instructie “return $this->yield...” bevat, terwijl dit “yield $this->yield...” moet zijn.',
  'COMMIT RANGE' => 'COMMITBEREIK',
  'Specifies the remote to fetch the "into" ref from. By default, this is the same as the "onto" remote.' => 'Geeft de remote op waarvan de "into"-ref wordt opgehaald. Standaard is dit dezelfde als de "onto"-remote.',
  'No tasks found.' => 'Geen taken gevonden.',
  '%s' => '%s',
  'No child with index \'%d\'.' => 'Geen kind met index \'%d\'.',
  'Choose an object to inspect:' => 'Kies een object om te inspecteren:',
  '%s REVISION(S) ARE ALREADY PUBLISHED' => array(
    '%s VERSIE IS AL GEPUBLICEERD',
    '%s VERSIES ZIJN AL GEPUBLICEERD',
  ),
  'Invalid EditorConfig property.' => 'Incorrecte EditorConfig-eigenschap.',
  'List of event listener classes to install at startup.' => 'Lijst van gebeurtenislistenerklassen om bij het opstarten te installeren.',
  'Provide a branch, bookmark, task, or revision name to begin or resume work on.' => 'Geef een branch-, bladwijzer-, taak- of versienaam op om aan te beginnen of te hervatten.',
  'Use **%s** __command__ for a detailed command reference.' => 'Gebruik **%s** __opdracht__ voor een gedetailleerde opdrachtreferentie.',
  'At the far edge of the grove, you see remotes:' => 'Aan de verre rand van het bos ziet u remotes:',
  'It is nearly dusk. The wind has picked up and the trees around you sway and rustle.' => 'Het is bijna schemering. De wind is aangewakkerd en de bomen om u heen zwaaien en ruisen.',
  'The test failed.' => 'De test is mislukt.',
  'Install shell completion.' => 'Shell-aanvulling installeren.',
  '%s revision(s) have build failures:' => array(
    '%s versie heeft buildfouten:',
    '%s versies hebben buildfouten:',
  ),
  'Failed to upload binary "%s".' => 'Uploaden van binair bestand "%s" is mislukt.',
  'Commit symbol "%s" contains a newline. This is not a valid character in a Git commit symbol.' => 'Commitsymbool "%s" bevat een nieuwe regel. Dit is geen geldig teken in een Git-commitsymbool.',
  'ARGV' => 'ARGV',
  'Both sides of this expression are identical, so it always evaluates to a constant.' => 'Beide zijden van deze expressie zijn identiek, dus het evalueert altijd tot een constante.',
  'Conflicts in working copy:' => 'Conflicten in werkkopie:',
  'Revision \'%s: %s\' has not been accepted. Commit this revision anyway?' => 'Versie \'%s: %s\' is niet geaccepteerd. Deze versie toch committen?',
  'Commit "%s"' => 'Commit "%s"',
  'Commit a specific revision. If you do not specify a revision, arc will look for committable revisions.' => 'Een specifieke versie committen. Als u geen versie opgeeft, zoekt arc naar commitbare versies.',
  'Lint all tracked files in the working copy. Ignored files and untracked files will not be linted.' => 'Alle gevolgde bestanden in de werkkopie linten. Genegeerde bestanden en niet-gevolgde bestanden worden niet gelint.',
  'Instead of exporting changes from the working copy, export them from a Differential revision.' => 'In plaats van wijzigingen uit de werkkopie te exporteren, exporteer ze vanuit een Differential-versie.',
  '%s submodule(s) have uncommitted or untracked changes:' => array(
    'Een submodule heeft niet-gecommitte of niet-gevolgde wijzigingen:',
    '%s submodules hebben niet-gecommitte of niet-gevolgde wijzigingen:',
  ),
  'Normally under git/hg, if the patch is successful, the changes are committed to the working copy. This flag prevents the commit.' => 'Normaal gesproken worden onder git/hg de wijzigingen gecommit naar de werkkopie als de patch geslaagd is. Deze vlag voorkomt de commit.',
  'The null coalescing operator is not available before PHP 7.0.' => 'De null-coalescingoperator is vóór PHP 7.0 niet beschikbaar.',
  'Updating local branch "%s"...' => 'Lokale branch "%s" bijwerken...',
  'Unable to identify the current branch in the working copy.' => 'Kan de huidige branch in de werkkopie niet identificeren.',
  'Type of setting \'%s\' must be boolean.' => 'Type van instelling \'%s\' moet booleaans zijn.',
  'No type name for node type ID \'%s\' in \'%s\' AAST.' => 'Geen typenaam voor knooppunttype-ID \'%s\' in \'%s\' AAST.',
  'Search for linters. Search is case-insensitive, and is performed against name and description of each linter.' => 'Zoeken naar linters. Zoeken is niet hoofdlettergevoelig en wordt uitgevoerd op naam en beschrijving van elke linter.',
  'Call-time pass-by-reference calls are prohibited.' => 'Call-time pass-by-reference-aanroepen zijn verboden.',
  'For consistency, use `%s` (a type cast) instead of `%s` (a function call). Function calls impose additional overhead.' => 'Gebruik voor consistentie `%s` (een typecast) in plaats van `%s` (een functieaanroep). Functieaanroepen brengen extra overhead met zich mee.',
  'Expected file \'%s\' to begin `%s`.' => 'Verwachtte dat bestand \'%s\' begint met `%s`.',
  'Array elements should each occupy a single line.' => 'Arrayelementen moeten elk een enkele regel innemen.',
  'identify symbols in a PHP source file' => 'symbolen identificeren in een PHP-bronbestand',
  'Filesystem path "%s" can not be accessed because a parent directory ("%s") is not executable (the current process does not have "+x" permission).' => 'Bestandssysteempad "%s" kan niet worden benaderd omdat een bovenliggende map ("%s") niet uitvoerbaar is (het huidige proces heeft geen "+x"-toestemming).',
  'File "%s" does not exist, or you do not have permission to view it.' => 'Bestand "%s" bestaat niet, of u hebt geen toestemming om het te bekijken.',
  'Included commits in branch %s:' => 'Opgenomen commits in branch %s:',
  '  NOTE: Failed to load the commit message from Differential (for revision "%s".)' => '  OPMERKING: het commitbericht kon niet worden geladen vanuit Differential (voor versie "%s".)',
  'Spaces Inside Parentheses' => 'Spaties binnen haakjes',
  'Configuration (%s)' => 'Configuratie (%s)',
  'This file contains a syntax error: %s' => 'Dit bestand bevat een syntaxisfout: %s',
  'Create new library?' => 'Nieuwe bibliotheek aanmaken?',
  'Provide a nonempty symbol to begin or resume work on.' => 'Geef een niet-leeg symbool op om aan te beginnen of te hervatten.',
  'Remote "%s", specified with "--into", is not a valid fetchable remote.' => 'Remote "%s", opgegeven met "--into", is geen geldige ophaalbare remote.',
  'Name of a concrete subclass of `%s` which tunes the analysis of `%s` statements for this linter.' => 'Naam van een concrete subklasse van `%s` die de analyse van `%s`-instructies voor deze linter afstemt.',
  'Single lined arrays should not have a trailing comma.' => 'Arrays op één regel mogen geen afsluitende komma hebben.',
  'Generator has never rewound, but has a value to send. This is invalid.' => 'Generator is nooit teruggespoeld, maar heeft een waarde om te verzenden. Dit is incorrect.',
  'Remote "%s" has multiple bookmarks with name "%s". This is unexpected.' => 'Remote "%s" heeft meerdere bookmarks met de naam "%s". Dit is onverwacht.',
  'Base commit rule \'%s\' (from source \'%s\') is not a recognized rule.' => 'Basiscommitregel \'%s\' (van bron \'%s\') is geen herkende regel.',
  'Unsafe Usage of Dynamic String' => 'Onveilig gebruik van dynamische tekenreeks',
  'it is what you typed when prompted.' => 'het is wat u hebt getypt toen daarom werd gevraagd.',
  '%s can not be used with %s.' => '%s kan niet worden gebruikt met %s.',
  'Merge conflicts in working copy:' => 'Mergeconflicten in werkkopie:',
  'Expected to find key "%s", but it is not present.' => 'Verwachtte sleutel "%s" te vinden, maar deze is niet aanwezig.',
  'Night has fallen, and the thin sliver of moon overhead offers no comfort. It is almost pitch black. The night is bitter cold. It will be difficult to look around in these conditions.' => 'De nacht is gevallen en het dunne schijfje maan boven u biedt geen troost. Het is bijna pikdonker. De nacht is bitter koud. Het zal moeilijk zijn om rond te kijken onder deze omstandigheden.',
  'Future has already resolved. Futures may not resolve more than once.' => 'Future is al opgelost. Futures mogen niet meer dan één keer worden opgelost.',
  '**version**' => '**versie**',
  'Broken' => 'Kapot',
  'Length must be larger than 0!' => 'Lengte moet groter zijn dan 0!',
  'The "SHELL" environment variable does not match any recognized shell.' => 'De omgevingsvariabele "SHELL" komt niet overeen met een herkende shell.',
  'All reviewers are away until %s:' => 'Alle beoordelaars zijn afwezig tot %s:',
  'Server to connect to.' => 'Server om mee te verbinden.',
  'Created a new Differential revision:' => 'Een nieuwe Differential-versie aangemaakt:',
  'The name of this file differs from the name of the class, interface, trait or enum it declares. Rename the file to `%s`.' => 'De naam van dit bestand verschilt van de naam van de klasse, de interface, het kenmerk of de enumeratie die erin wordt gedeclareerd. Hernoem het bestand tot `%s`.',
  'When creating a revision, try to use the working copy commit message verbatim, without prompting to edit it. When updating a revision, update some fields from the local commit message.' => 'Bij het aanmaken van een versie, probeer het commitbericht van de werkkopie letterlijk te gebruiken, zonder te vragen om het te bewerken. Bij het bijwerken van een versie, werk sommige velden bij vanuit het lokale commitbericht.',
  'LOAD STASH' => 'STASH LADEN',
  'Put space after comment start.' => 'Zet een spatie na het begin van de opmerking.',
  'class, interface, trait or enum' => 'klasse, interface, kenmerk of enum',
  'Failed to write file \'%s\'.' => 'Schrijven van bestand \'%s\' is mislukt.',
  'Path \'%s\' does not exist!' => 'Pad ‘%s’ bestaat niet!',
  'Config: Reading system configuration file "%s"...' => 'Configuratie: systeemconfiguratiebestand "%s" lezen...',
  'Continue even though reviewers are unavailable?' => 'Doorgaan ook al zijn beoordelaars niet beschikbaar?',
  'Config: Reading local configuration file "%s"...' => 'Configuratie: lokaal configuratiebestand "%s" lezen...',
  'Use of `%s`' => 'Gebruik van `%s`',
  'Unable to parse \'%s\' file \'%s\'.' => 'Kan \'%s\'-bestand van \'%s\' niet verwerken.',
  'Too few arguments to %s.' => 'Te weinig argumenten voor %s.',
  'Unknown Mercurial feature "%s".' => 'Onbekende Mercurial-functie "%s".',
  'They river bubbles peacefully.' => 'De rivier borrelt vredig.',
  'PHP files must only contain PHP code.' => 'PHP-bestanden mogen alleen PHP-code bevatten.',
  'Exit after serving __limit__ clients.' => 'Stop na het bedienen van __limit__ cliënten.',
  '<Process was terminated by signal %s (%d).>

' => '<Proces is beëindigd door signaal %s (%d).>

\\',
  'Line Too Long' => 'Regel te lang',
  'Skip' => 'Overslaan',
  'Confirms that the correct changes have been selected to land.' => 'Bevestigt dat de juiste wijzigingen zijn geselecteerd om te landen.',
  'Source code should contain only ASCII bytes with ordinal decimal values between 32 and 126 inclusive, plus linefeed. Do not use UTF-8 or other multibyte charsets.' => 'Broncode mag alleen ASCII-bytes bevatten met ordinale decimale waarden tussen 32 en 126 (inclusief), plus regelterugloop. Gebruik geen UTF-8 of andere multibyte-tekensets.',
  'There are no changes to generate a diff from!' => 'Er zijn geen wijzigingen om een diff van te genereren!',
  'Type' => 'Type',
  'Toolset "%s" is unknown. The binary should be executed so that "argv[0]" identifies a supported toolset. Rename the binary or install the library that provides the desired toolset. Current available toolsets: %s.' => 'Toolset "%s" is onbekend. Het binaire bestand moet zo worden uitgevoerd dat "argv[0]" een ondersteunde toolset identificeert. Hernoem het binaire bestand of installeer de bibliotheek die de gewenste toolset biedt. Huidige beschikbare toolsets: %s.',
  'Rule \'%s\' can never be reduced: it recurses indefinitely and reaches no production of terminals.' => 'Regel \'%s\' kan nooit worden gereduceerd: deze recurseert oneindig en bereikt geen productie van terminals.',
  'Specifying keys when destructuring arrays is not available before PHP 7.1.' => 'Het opgeven van sleutels bij het de-structureren van arrays is vóór PHP 7.1 niet mogelijk.',
  'Translating legacy name \'%s\' to \'%s\'' => 'Verouderde naam \'%s\' vertalen naar \'%s\'',
  'Could not encode repository versions!' => 'Kan repositoryversies niet coderen!',
  'Set minimum message severity. One of: %s. Defaults to \'%s\'.' => 'Stel minimale berichternst in. Een van: %s. Standaard is \'%s\'.',
  'Paamayim Nekudotayim Spacing' => 'Paamayim Nekudotayim-spatiëring',
  'Command-Line Flags' => 'Opdrachtregelvlaggen',
  'Expected JSON response from Asana.' => 'JSON-antwoord van Asana verwacht.',
  'The name or path of the coding standard to use.' => 'De naam of het pad van de te gebruiken codestandaard.',
  'Space Around Comma' => 'Spatie rond komma',
  'Unable to parse path as PHAR file. PHAR file paths must be prefixed with `%s` and include a segment with one of these extensions (case-sensitive): %s' => 'Kan het pad niet als PHAR-bestand verwerken. Paden naar PHAR-bestanden moeten beginnen met `%s` en een segment bevatten met een van de volgende extensies (hoofdlettergevoelig): %s',
  'Enabled verbose mode.' => 'Uitgebreide modus ingeschakeld.',
  'PHP Syntax Error!' => 'PHP-syntaxisfout!',
  'INVALID CREDENTIALS' => 'INCORRECTE AANMELDGEGEVENS',
  'Attempting to rebase changes.' => 'Poging om wijzigingen te rebasen.',
  'Hold indefinitely without prompting.' => 'Voor onbepaalde tijd vasthouden zonder te vragen.',
  'Cannot access `%s` when current class scope has no parent.' => 'Kan `%s` niet benaderen wanneer het huidige klassebereik geen ouder heeft.',
  '"%s" is being run noninteractively, but the argument list is missing "--" to indicate end of flags.' => '"%s" wordt niet-interactief uitgevoerd, maar de argumentenlijst mist "--" om het einde van de vlaggen aan te geven.',
  'Configuration option ("%s") defined by extension "%s" conflicts with an existing option. Each option must have a unique key.' => 'Configuratieoptie ("%s") gedefinieerd door uitbreiding "%s" conflicteert met een bestaande optie. Elke optie moet een unieke sleutel hebben.',
  '%s called with no messages!' => '%s aangeroepen zonder berichten!',
  'Two files were added with identical explicit keys ("%s"); each explicit key must be unique.' => 'Twee bestanden zijn toegevoegd met identieke expliciete sleutels ("%s"); elke expliciete sleutel moet uniek zijn.',
  'Specify exactly one base commit. The end of the commit range is always the working copy state.' => 'Geef precies één basiscommit op. Het einde van het commitbereik is altijd de status van de werkkopie.',
  'The remote URI for this working copy is "%s".' => 'De externe URI voor deze werkkopie is "%s".',
  'Unable to launch an interactive text editor. Set the %s environment variable to an appropriate editor.' => 'Kan geen interactieve teksteditor starten. Stel de omgevingsvariabele %s in op een geschikte editor.',
  'URI \'%s\' must be fully qualified and include host name.' => 'URI \'%s\' moet volledig gekwalificeerd zijn en een hostnaam bevatten.',
  'Command exited with error code %d.' => 'Opdracht beëindigd met foutcode %d.',
  'Landing the current HEAD, "%s".' => 'De huidige HEAD "%s" wordt geland.',
  'CoffeeLint is a style checker that helps keep CoffeeScript code clean and consistent.' => 'CoffeeLint is een stijlcontrole die helpt CoffeeScript-code schoon en consistent te houden.',
  'Requested path \'%s\' is not a directory.' => 'Opgevraagd pad \'%s\' is geen map.',
  'Command failed with error #%d!' => 'Opdracht mislukt met fout #%d!',
  'You can\'t get local commit information for a repository with no commits.' => 'U kunt geen lokale commitinformatie ophalen voor een repository zonder commits.',
  'Unable to find Mono and you are not on Windows!' => 'Kan Mono niet vinden en u bent niet op Windows!',
  'You may now push this commit upstream, as appropriate (e.g. with \'%s\' or by printing and faxing it).' => 'U kunt deze commit nu upstream pushen, naar gelang van toepassing (bijv. met \'%s\' of door het af te drukken en te faxen).',
  'Trying to pop an empty workflow stack!' => 'Poging om een lege workflowstapel te poppen!',
  'MULTIPLE BRANCH HEADS' => 'MEERDERE BRANCH-HEADS',
  'SimpleXML Linter' => 'SimpleXML Linter',
  'Load one or more configuration files. If this flag is provided, the system and user configuration files are ignored.' => 'Een of meer configuratiebestanden laden. Als deze vlag wordt opgegeven, worden de systeem- en gebruikerconfiguratiebestanden genegeerd.',
  'Can\'t parse an empty diff!' => 'Kan een lege diff niet verwerken!',
  'Unexpected data type in request data: %s.' => 'Onverwacht gegevenstype in verzoekgegevens: %s.',
  'You are trying to construct an ambiguous URI: query parameter "%s" is present in both the string argument ("%s") and the map argument.' => 'U probeert een dubbelzinnige URI te construeren: queryparameter "%s" is aanwezig in zowel het tekenreeksargument ("%s") als het mapargument.',
  'Convention: no spaces around string concatenation operator.' => 'Conventie: geen spaties rond de tekenreeksconcatenatie-operator.',
  'Unnecessary Final Modifier' => 'Onnodige final-modifier',
  'INVALID LOCALE' => 'ONJUISTE LOCALE',
  'DOS Newlines' => 'DOS-regeleinden',
  'Support for grouped use statements was not introduced until PHP 7.0 but this codebase targets an earlier version of PHP.' => 'Ondersteuning voor gegroepeerde use-statements is pas in PHP 7.0 ingevoerd, maar deze code is gericht op een eerdere versie van PHP.',
  'There was an error resolving the server hostname. Check that you are connected to the internet and that DNS is correctly configured. (Did you add the domain to `%s` on some other machine, but not this one?)' => 'Er is een fout opgetreden bij het oplossen van de serverhostnaam. Controleer of u verbonden bent met internet en of DNS correct is geconfigureerd. (Hebt u het domein toegevoegd aan `%s` op een andere machine, maar niet op deze?)',
  'Usage Exception:' => 'Gebruiksuitzondering:',
  'Pushing changes to "%s".' => 'Wijzigingen pushen naar "%s".',
  'Argument was \'%s\', but must be \'%s\'. For example, %s' => 'Argument was \'%s\', maar moet \'%s\' zijn. Bijvoorbeeld: %s',
  'User "%s"' => 'Gebruiker "%s"',
  'Installing certificate for \'%s\'...' => 'Certificaat installeren voor \'%s\'...',
  'You are passing an integer to %s which is so large it can not be represented without loss of precision by Javascript\'s native %s class. Use %%# instead.' => 'U geeft een geheel getal door aan %s dat zo groot is dat het niet zonder precisieverlies kan worden weergegeven door de native %s-klasse van Javascript. Gebruik in plaats daarvan %%#.',
  'Config: Did not find local configuration at "%s".' => 'Configuratie: lokale configuratie niet gevonden op "%s".',
  'Symbol \'%s\' in production \'%s\' (\'%s\') of rule \'%s\' does not name a rule or terminal. Did you misspell a symbol, fail to specify a terminal, or forget a rule?' => 'Symbool \'%s\' in productie \'%s\' (\'%s\') van regel \'%s\' benoemt geen regel of terminal. Hebt u een symbool verkeerd gespeld, een terminal niet opgegeven, of een regel vergeten?',
  'To update shell completion support for "%s", your existing "%s" file will be modified. This line will be removed:' => 'Om shell-aanvullingsondersteuning voor "%s" bij te werken, wordt uw bestaande bestand "%s" gewijzigd. Deze regel wordt verwijderd:',
  'Confirms that local commits which are not associated with a revision have been associated correctly and should land.' => 'Bevestigt dat lokale commits die niet aan een versie zijn gekoppeld, correct zijn gekoppeld en geland moeten worden.',
  'Class' => 'Klasse',
  'Specify either "true" or "false".' => 'Geef "true" of "false" op.',
  'Rules are already up to date for "%s" in: %s' => 'Regels zijn al bijgewerkt voor "%s" in: %s',
  'Installing shell completion support for "%s" into "%s".' => 'Shell-aanvullingsondersteuning voor "%s" installeren in "%s".',
  'Export change as a git patch. This format is more complete than unified, but less complete than arc bundles. These patches can be applied with \'%s\' or \'%s\'.' => 'Wijziging exporteren als een git-patch. Dit formaat is vollediger dan unified, maar minder volledig dan arc-bundels. Deze patches kunnen worden toegepast met \'%s\' of \'%s\'.',
  'Expected to find meminfo key "%s" in meminfo source "%s".' => 'Verwachtte meminfo-sleutel "%s" te vinden in meminfo-bron "%s".',
  'Will merge into empty state, selected with the "--into-empty" flag.' => 'Wordt gemerged naar de lege status, geselecteerd met de vlag "--into-empty".',
  'Use parentheses when invoking a constructor.' => 'Gebruik haakjes bij het aanroepen van een constructor.',
  'Automatically amending HEAD with lint patches.' => 'HEAD automatisch wijzigen met lintpatches.',
  'Failed to remove directory \'%s\'!' => 'Verwijderen van map \'%s\' is mislukt!',
  'Prepare the changes to be pushed, but do not actually push them.' => 'De wijzigingen voorbereiden om te pushen, maar ze niet daadwerkelijk pushen.',
  'This test is expected to fail.' => 'Deze test wordt verwacht te mislukken.',
  'SKIP' => 'OVERSLAAN',
  'Unexpected type %s.' => 'Onverwacht type %s.',
  'Execution of "git cat-file --batch-check" emitted an unexpected line ("%s").' => 'Uitvoering van "git cat-file --batch-check" produceerde een onverwachte regel ("%s").',
  'Do not print status messages to stdout.' => 'Geen statusberichten naar de standaarduitvoer schrijven.',
  'Typed constants are not available before PHP 8.3.' => 'Constanten met types zijn vóór PHP 8.0 niet beschikbaar.',
  'AMBIGUOUS MARKER' => 'DUBBELZINNIGE MARKERING',
  'Revision Symbol "%s"' => 'Versiesymbool "%s"',
  'Unable to open stdout temporary file ("%s") for writing.' => 'Kan tijdelijk stdout-bestand ("%s") niet openen om te schrijven.',
  'Class member access on instantiation was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => 'Toegang tot klasseleden bij het aanmaken van een instantie is pas in PHP 5.4 ingevoerd, maar deze code is gericht op een eerdere versie van PHP. U kunt deze expressie herschrijven met `%s`.',
  'The name of this file differs from the name of the class or interface it declares. Rename the file to `%s`.' => 'De naam van dit bestand verschilt van de naam van de klasse of interface die het declareert. Hernoem het bestand naar `%s`.',
  'Deleted' => 'Verwijderd',
  'Configuration value ("%s") defined in source "%s" is not valid.' => 'Configuratiewaarde ("%s") gedefinieerd in bron "%s" is niet geldig.',
  'MULTIPLE "ONTO" BRANCHES' => 'MEERDERE "ONTO"-BRANCHES',
  'The HTTP method \'%s\' is not supported. Supported HTTP methods are: %s.' => 'De HTTP-methode \'%s\' wordt niet ondersteund. Ondersteunde HTTP-methoden zijn: %s.',
  'Some hunks could not be applied cleanly by the unix \'%s\' utility. Your working copy may be different from the revision\'s base, or you may be in the wrong subdirectory. You can export the raw patch file using \'%s\', and then try to apply it by fiddling with options to \'%s\' (particularly, %s), or manually. The output above, from \'%s\', may be helpful in figuring out what went wrong.' => 'Sommige hunks konden niet schoon worden toegepast door het unix-hulpprogramma \'%s\'. Uw werkkopie kan verschillen van de basis van de versie, of u bevindt zich in de verkeerde submap. U kunt het ruwe patchbestand exporteren met \'%s\' en vervolgens proberen het toe te passen door te spelen met opties voor \'%s\' (met name %s), of handmatig. De bovenstaande uitvoer van \'%s\' kan helpen bij het achterhalen van wat er mis is gegaan.',
  'Show the changes that will land. Does not modify the working copy or the remote.' => 'De wijzigingen weergeven die worden geland. Wijzigt de werkkopie of de remote niet.',
  'PUSH STAGING' => 'PUSH STAGING',
  'SUBMITTING' => 'INDIENEN',
  'Associate the working copy with a specific repository. Normally, %s can figure this association out on its own, but if your setup is unusual you can use this option to tell it what the desired value is.' => 'De werkkopie koppelen aan een specifieke repository. Normaal gesproken kan %s deze koppeling zelf uitzoeken, maar als uw configuratie ongebruikelijk is, kunt u deze optie gebruiken om de gewenste waarde op te geven.',
  'Fetch URI: %s' => 'Fetch-URI: %s',
  'Default value for parameters with a true type hint can only be true.' => 'De standaardwaarde voor parameters met een type-hint ‘true’ kan alleen ‘true’ zijn.',
  'Remote "%s" was selected with the "--onto-remote" flag.' => 'Remote "%s" is geselecteerd met de vlag "--onto-remote".',
  'it is the greatest common ancestor of the working directory and the commit you specified explicitly.' => 'het is de grootste gemeenschappelijke voorouder van de werkmap en de commit die u expliciet hebt opgegeven.',
  'IP address "%s" is not properly formatted. Expected an IPv4 address like "%s", or an IPv6 address like "%s".' => 'IP-adres "%s" is niet correct opgemaakt. Verwachtte een IPv4-adres zoals "%s", of een IPv6-adres zoals "%s".',
  'Response Body: %s' => 'Antwoordinhoud: %s',
  'Default branch name to view on server. Defaults to "%s".' => 'Standaard branchnaam om op de server te bekijken. Standaard is "%s".',
  'Do not print a success message.' => 'Geen succesbericht weergeven.',
  'The shift operators no longer accept negative shifts in PHP 7.0.' => 'In PHP 7.0 accepteren de shiftoperators geen negatieve shifts meer.',
  'Failed to read socket.' => 'Lezen van socket is mislukt.',
  'Start in remote console mode.' => 'Starten in externe consolemodus.',
  'Landing onto target "%s", selected by following tracking branches upstream to the closest remote branch.' => 'Landen op doel "%s", geselecteerd door tracking-branches upstream te volgen naar de dichtstbijzijnde remote branch.',
  'In a "switch" statement, "continue;" is equivalent to "break;" but causes compile errors beginning with PHP 7.0.0.' => 'In een "switch"-instructie is "continue;" gelijk aan "break;", maar veroorzaakt compileerfouten vanaf PHP 7.0.0.',
  'Specifies the default behavior when "arc land" is run with no "--onto-remote" flag.' => 'Geeft het standaardgedrag aan wanneer "arc land" wordt uitgevoerd zonder de vlag "--onto-remote".',
  'Copied Away' => 'Weggekopieerd',
  'Expected to find "%s" in `%s` output, but did not.' => 'Verwachtte "%s" te vinden in `%s`-uitvoer, maar dat was niet het geval.',
  'you specified \'%s\' in your %s \'base\' configuration.' => 'u hebt \'%s\' opgegeven in uw %s \'base\'-configuratie.',
  '%s revision(s) have ongoing builds:' => array(
    '%s versie heeft lopende builds:',
    '%s versies hebben lopende builds:',
  ),
  'MERGE CONFLICTS' => 'MERGECONFLICTEN',
  'You must set PayPal API credentials!' => 'U moet PayPal API-aanmeldgegevens instellen!',
  'Failed to create directory \'%s\'.' => 'Aanmaken van map \'%s\' is mislukt.',
  'Symbol "%s" is ambiguous: it matches multiple markers (of type "%s"). Use an unambiguous identifier.' => 'Symbool "%s" is dubbelzinnig: het komt overeen met meerdere markeringen (van type "%s"). Gebruik een ondubbelzinnige identificatie.',
  'Default Parameters' => 'Standaardparameters',
  'copies' => 'kopieën',
  'File \'%s\' mixes function (%s) and class/interface (%s) definitions in the same file. A file which declares a class or an interface MUST declare nothing else.' => 'Bestand \'%s\' mengt functie- (%s) en klasse-/interfacedefinities (%s) in hetzelfde bestand. Een bestand dat een klasse of interface declareert MAG niets anders declareren.',
  'Local commit "%s" (reachable from: %s) does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => 'Lokale commit "%s" (bereikbaar vanuit: %s) merget niet schoon in "%s". Rebase of merge lokale wijzigingen zodat ze schoon kunnen mergen.',
  'Configuration option ("%s") defined by extension "%s" conflicts with an alias for another option ("%s"). The key and aliases of each option must be unique.' => 'Configuratieoptie ("%s") gedefinieerd door uitbreiding "%s" conflicteert met een alias voor een andere optie ("%s"). De sleutel en aliassen van elke optie moeten uniek zijn.',
  'Unable to determine repository for this change.' => 'Kan de repository voor deze wijziging niet bepalen.',
  'Provided path \'%s\' is not a %s library.' => 'Opgegeven pad \'%s\' is geen %s-bibliotheek.',
  'Downloading binary data...' => 'Binaire gegevens downloaden...',
  'Unable to access %s or `%s` on this system to get system memory information.' => 'Kan %s of `%s` op dit systeem niet benaderen om systeemgeheugeninformatie op te halen.',
  'Unable to locate xUnit console runner. Configure it with the `%s\' option in %s.' => 'Kan de xUnit-consolerunner niet vinden. Configureer deze met de optie `%s\' in %s.',
  'This working copy is configured to have an immutable local history, using the "history.immutable" configuration option. Amending the working copy will mutate local history.' => 'Deze werkkopie is geconfigureerd om een onveranderlijke lokale geschiedenis te hebben, met de configuratieoptie "history.immutable". Het wijzigen van de werkkopie zal de lokale geschiedenis muteren.',
  'You have uncommitted changes in the working copy ("%s") for this library ("%s"):' => 'U hebt niet-gecommitte wijzigingen in de werkkopie ("%s") voor deze bibliotheek ("%s"):',
  'Set key "%s" = %s in %s config (was %s).' => 'Sleutel "%s" = %s ingesteld in %s-configuratie (was %s).',
  'Function %s is not implemented!' => 'Functie %s is niet geïmplementeerd!',
  'Revision \'%s: %s\' was generated from \'%s\', but current working copy root is \'%s\'. Commit this revision anyway?' => 'Versie \'%s: %s\' is gegenereerd vanuit \'%s\', maar de huidige werkkopie-root is \'%s\'. Deze versie toch committen?',
  'Unable to write configuration: more than one writable source exists in the "%s" scope.' => 'Kan configuratie niet schrijven: er bestaat meer dan één schrijfbare bron in het bereik "%s".',
  'Emit all symbols, including built-ins and declared externals.' => 'Alle symbolen weergeven, ook ingebouwde en gedeclareerde externe symbolen.',
  'Convention: space before opening parenthesis in anonymous function declarations.' => 'Conventie: spatie vóór het openingshaakje in anonieme functiedeclaraties.',
  'Reference assignments in array destructuring is not available before PHP 7.3.' => 'Referentietoewijzingen bij het de-structureren van arrays zijn vóór PHP 7.3 niet beschikbaar.',
  'The token "%s" is not formatted correctly. Valid API tokens should begin "cli-" and be 32 characters long. Make sure you visited the correct URI and copy/pasted the token correctly.' => 'Het token "%s" is niet correct opgemaakt. Geldige API-tokens moeten beginnen met "cli-" en 32 tekens lang zijn. Controleer of u de juiste URI hebt bezocht en het token correct hebt gekopieerd en geplakt.',
  'You follow a wide, straight path to the north and arrive in a grove of fruit trees after a few minutes of walking. The grass underfoot is thick and small insects flit through the air.' => 'U volgt een breed, recht pad naar het noorden en komt na een paar minuten lopen aan in een boomgaard met fruitbomen. Het gras onder uw voeten is dik en kleine insecten fladderen door de lucht.',
  'Specifies the default behavior when "arc land" is run with no "--onto" flag.' => 'Geeft het standaardgedrag aan wanneer "arc land" wordt uitgevoerd zonder de vlag "--onto".',
  'Anonymous readonly classes are not available before PHP 8.3.' => 'Anonieme en alleen uitleesbare klassen zijn vóór PHP 8.3 niet beschikbaar.',
  'Functions which should not be used because they represent the unsafe usage of dynamic strings.' => 'Functies die niet mogen worden gebruikt omdat ze het onveilige gebruik van dynamische tekenreeksen vertegenwoordigen.',
  'Failed to load library at location "%s". This library is specified by "%s". Check that the library is up to date.' => 'Kan bibliotheek op locatie "%s" niet laden. Deze bibliotheek is opgegeven door "%s". Controleer of de bibliotheek up-to-date is.',
  'Use of Close Tag `%s`' => 'Gebruik van sluitingstag `%s`',
  'TO UPGRADE: %s' => 'TE UPGRADEN: %s',
  'No type ID for token type name \'%s\' in \'%s\' AAST.' => 'Geen type-ID voor tokentypenaam \'%s\' in \'%s\' AAST.',
  'Ruleset for selecting commit ranges.' => 'Regelset voor het selecteren van commitbereiken.',
  'Alias definitions form an unreasonably deep stack. A chain of aliases may not resolve more than %s times.' => 'Aliasdefinities vormen een onredelijk diepe stapel. Een keten van aliassen mag niet meer dan %s keer worden opgelost.',
  'Default pager command.' => 'Standaard pageropdracht.',
  'Expected exactly one argument to "remote(...)" with a remote name.' => 'Verwachtte precies één argument voor "remote(...)" met een remotenaam.',
  'Unable to find \'%s\' file to configure linters. Create an \'%s\' file in the root directory of the working copy.' => 'Kan bestand \'%s\' niet vinden om linters te configureren. Maak een bestand \'%s\' aan in de hoofdmap van de werkkopie.',
  'HTTP extension "%s" (of class "%s") returned an invalid result from "%s": expected null, or an object of class "%s".' => 'HTTP-uitbreiding "%s" (van klasse "%s") gaf een incorrect resultaat terug van "%s": verwachtte null, of een object van klasse "%s".',
  'Unable to find any git commit named \'%s\' in this repository.' => 'Kan geen git-commit met de naam \'%s\' vinden in deze repository.',
  'Lists bookmarks in the working copy, annotated with additional information
about review status.' => 'Geeft bookmarks in de werkkopie weer, voorzien van aanvullende informatie
over de beoordelingsstatus.',
  'Use `%s` to instantiate the current class.' => 'Gebruik `%s` om de huidige klasse te instantiëren.',
  'Specify a key and a value.' => 'Geef een sleutel en een waarde op.',
  'Options \'%s\', \'%s\' and \'%s\' are not compatible. Choose exactly one export format.' => 'Opties \'%s\', \'%s\' en \'%s\' zijn niet compatibel. Kies precies één exportformaat.',
  'Fetching "%s" from remote "%s"...' => '"%s" ophalen van remote "%s"...',
  'Limit the amount of tasks outputted, default is all.' => 'Beperk het aantal uitvoertaken, standaard is alles.',
  'Amend HEAD with lint patches?' => 'HEAD wijzigen met lintpatches?',
  'Using `%s` as the only type hint is not allowed before PHP 8.2.' => 'Het gebruik van `%s` als enige type-hint is vóór PHP 8.2 niet toegestaan.',
  'Connecting to "%s"...' => 'Verbinden met "%s"...',
  'Disable ANSI terminal codes, printing plain text with no color or style.' => 'ANSI-terminalcodes uitschakelen, platte tekst zonder kleur of stijl weergeven.',
  'Unrecognized argument \'%s\'. Try \'%s\'.' => 'Niet-herkend argument \'%s\'. Probeer \'%s\'.',
  'Library name should contain only lowercase letters and hyphens.' => 'Bibliotheeknaam mag alleen kleine letters en koppeltekens bevatten.',
  'Land %s commit(s)?' => array(
    '%s commit laten landen?',
    '%s commits laten landen?',
  ),
  '%s does not update any revision.' => '%s werkt geen versie bij.',
  'Unable to find any libraries under the current working directory. To create a library, provide a path.' => 'Kan geen bibliotheken vinden onder de huidige werkmap. Geef een pad op om een bibliotheek aan te maken.',
  '<default>' => '<standaard>',
  'Do not run lint.' => 'Lint niet uitvoeren.',
  'If you intended to update an existing revision, use:' => 'Als u een bestaande versie wilde bijwerken, gebruik:',
  'Override configured unit engine for this project.' => 'Geconfigureerde unitengine voor dit project overschrijven.',
  'Expected \'%s\' in unified diff.' => 'Verwachtte \'%s\' in unified diff.',
  'Unable to upload file: failed to determine filesize of path "%s".' => 'Kan bestand niet uploaden: kan de bestandsgrootte van pad "%s" niet bepalen.',
  'String does not require double quotes. For consistency, prefer single quotes.' => 'Tekenreeks vereist geen dubbele aanhalingstekens. Gebruik voor consistentie enkele aanhalingstekens.',
  'Methods should have their visibility declared explicitly.' => 'Methoden moeten hun zichtbaarheid expliciet gedeclareerd hebben.',
  'Merge strategy "%s" specified in "%s" configuration is unknown. Supported merge strategies are: %s.' => 'Mergestrategie "%s" opgegeven in "%s"-configuratie is onbekend. Ondersteunde mergestrategieën zijn: %s.',
  'Relative commit \'%s\' is not the name of a commit!' => 'Relatieve commit \'%s\' is niet de naam van een commit!',
  'Associates this working copy with a specific server.' => 'Koppelt deze werkkopie aan een specifieke server.',
  'You must configure \'%s\' with the name of a linter in order to use %s.' => 'U moet \'%s\' configureren met de naam van een linter om %s te gebruiken.',
  'Projects to assign to the task.' => 'Projecten om aan de taak toe te wijzen.',
  'Unknown event %s' => 'Onbekende gebeurtenis %s',
  'Not installing API token.' => 'API-token wordt niet geïnstalleerd.',
  'Config: Did not find system configuration at "%s".' => 'Configuratie: systeemconfiguratie niet gevonden op "%s".',
  'Continue?' => 'Doorgaan?',
  'Failed to push changes to staging area. Correct the issue, or use --skip-staging to skip this step.' => 'Pushen van wijzigingen naar het staginggebied is mislukt. Los het probleem op, of gebruik --skip-staging om deze stap over te slaan.',
  'Execution of "hg log" emitted an unexpected line ("%s").' => 'Uitvoering van "hg log" produceerde een onverwachte regel ("%s").',
  '%dm%02ds' => '%dm%02ds',
  'you explicitly specified the empty tree.' => 'u hebt expliciet de lege boom opgegeven.',
  'Apply this patch to %s?' => 'Deze patch toepassen op %s?',
  'Commit Message' => 'Commitbericht',
  'Unrecognized lint message code "%s".' => 'Niet-herkende lintberichtcode "%s".',
  'Lists branches in the working copy, annotated with additional information
about review status.' => 'Geeft branches in de werkkopie weer, voorzien van aanvullende informatie
over de beoordelingsstatus.',
  'List statements should use the `%s` statement syntax.' => 'Voor lijstopdrachten moet de opdrachtsyntaxis `%s` worden gebruikt.',
  'Constants on traits are not available before PHP 8.2.' => 'Constanten op kenmerken zijn vóór PHP 8.2 niet beschikbaar.',
  'Updating %s: %s' => '%s bijwerken: %s',
  'Current Value' => 'Huidige waarde',
  'Install jsonlint using `%s`.' => 'Installeer jsonlint met `%s`.',
  'Create %s new remote bookmark(s)?' => array(
    '%s nieuwe externe bladwijzer aanmaken?',
    '%s nieuwe externe bladwijzers aanmaken?',
  ),
  'identify symbols in PHP source files' => 'symbolen in PHP-bronbestanden identificeren',
  '%s does not support the "%s" modifier.' => '%s ondersteunt de "%s"-modifier niet.',
  'This `%s` has a nonempty block which does not end with `%s`, `%s`, `%s`, `%s` or `%s`. Did you forget to add one of those? If you intend to fall through, add a `%s` comment to silence this warning.' => 'Deze `%s` heeft een niet-leeg blok dat niet eindigt met `%s`, `%s`, `%s`, `%s` of `%s`. Bent u vergeten er een van deze toe te voegen? Als het wel degelijk de bedoeling is om naar het volgende commando door te gaan, voeg dan een commentaar `%s` toe om deze waarschuwing niet meer te tonen.',
  'Push URI: %s' => 'Push-URI: %s',
  'Found the wrong number of hunk lines.' => 'Verkeerd aantal hunkregels gevonden.',
  'Land only the changes directly named by arguments, instead of all reachable ancestors.' => 'Alleen de wijzigingen landen die direct door argumenten worden benoemd, in plaats van alle bereikbare voorouders.',
  'A mercurial commit hash in the commit range is already attached to the Differential revision.' => 'Een Mercurial-commithash in het commitbereik is al gekoppeld aan de Differential-versie.',
  'Install this token anyway?' => 'Dit token toch installeren?',
  'The remote host closed the connection before the request completed.' => 'De externe host heeft de verbinding gesloten voordat het verzoek was voltooid.',
  '(Assuming \'%s\' is the British spelling of \'%s\'.)' => '(Ervan uitgaande dat \'%s\' de Britse spelling is van \'%s\'.)',
  'You stand in the middle of a small clearing in the woods.' => 'U staat midden op een kleine open plek in het bos.',
  'Expected JSON response from WordPress.com.' => 'JSON-antwoord van WordPress.com verwacht.',
  'Oct' => 'okt',
  '`%s` expects an object instance, constant given.' => '`%s` verwacht een objectinstantie, constante opgegeven.',
  'Launching editor "%s"...' => 'Editor "%s" starten...',
  'Language Construct Parentheses' => 'Haakjes bij taalconstructies',
  'Force targets to be interpreted as naming particular types of resources.' => 'Doelen forceren om geïnterpreteerd te worden als namen van bepaalde typen bronnen.',
  'Blacklisted functions which should not be used.' => 'Functies op de blokkeerlijst die niet mogen worden gebruikt.',
  'Show every option, including standard options like this one.' => 'Elke optie weergeven, inclusief standaardopties zoals deze.',
  'Uploading chunks (%s chunks to upload).' => array(
    'Chunks uploaden (%s chunk te uploaden).',
    'Chunks uploaden (%s chucks te uploaden).',
  ),
  'Specify at most one URI.' => 'Geef maximaal één URI op.',
  'Shows the current version.' => 'De huidige versie weergeven.',
  'Enforces basic text rules like line length, character encoding, and trailing whitespace.' => 'Dwingt basistekstregels af zoals regellengte, tekencodering en afsluitende witruimte.',
  'Too many arguments: provide exactly one argument.' => 'Te veel argumenten: geef precies één argument op.',
  'Close only if the repository is untracked and the revision is accepted. Continue even if the close can\'t happen. This is a soft version of \'close-revision\' used by other workflows.' => 'Alleen sluiten als de repository niet wordt gevolgd en de versie is geaccepteerd. Doorgaan zelfs als het sluiten niet kan plaatsvinden. Dit is een zachte versie van \'close-revision\' die door andere workflows wordt gebruikt.',
  'Automatic branch naming from tasks is not supported yet for %s.' => 'Automatische naamgeving van branches vanuit taken wordt nog niet ondersteund voor %s.',
  'Object specification "%s" is unknown, expected a specification like "commit(HEAD)".' => 'Objectspecificatie "%s" is onbekend, verwachtte een specificatie zoals "commit(HEAD)".',
  'Successfully committed patch.' => 'Patch gecommit.',
  '`%s` class `%s` has an invalid ID constant. ID must be an integer.' => '`%s`-klasse `%s` heeft een onjuiste ID-constante. ID moet een geheel getal zijn.',
  'Use `%s` to detect issues with CSS source files.' => 'Gebruik `%s` om problemen met CSS-bronbestanden te detecteren.',
  'UPDATE' => 'BIJWERKEN',
  'Unable to determine current system locale (call to "setlocale(LC_ALL, 0)" failed).' => 'Kan de huidige systeemtaalregio niet bepalen (aanroep van "setlocale(LC_ALL, 0)" is mislukt).',
  'Downloaded hash does not match: expected any of %s, got %s.' => 'De gedownloade hash klopt niet: verwachtte een van de waarden %s, kreeg %s.',
  'You may not set new credentials after authenticating conduit.' => 'U mag geen nieuwe aanmeldgegevens instellen na het authenticeren van conduit.',
  'With %s, use uglier (but more efficient) formatting.' => 'Met %s, lelijkere (maar efficiëntere) opmaak gebruiken.',
  'OPTION REFERENCE' => 'OPTIEREFERENTIE',
  'Message begins:' => 'Bericht begint:',
  'Use the "alias" workflow to review aliases.' => 'Gebruik de "alias"-workflow om aliassen te bekijken.',
  'This codebase targets PHP %s, but `%s` was removed in PHP %s.' => 'Deze codebase richt zich op PHP %s, maar `%s` is verwijderd in PHP %s.',
  'Additional rules for determining base revision.' => 'Aanvullende regels voor het bepalen van de basisversie.',
  'Rule \'%s\' discarded empty context!' => 'Regel \'%s\' heeft lege context weggegooid!',
  'Usage of `%s` is preferred over `%s`.' => 'Gebruik van `%s` heeft de voorkeur boven `%s`.',
  'PHPUnit configuration file was not found in %s' => 'PHPUnit-configuratiebestand is niet gevonden in %s',
  'Not String Concatenation' => 'Geen tekenreeksconcatenatie',
  'STAGING FAILED' => 'STAGING MISLUKT',
  'Name of a concrete subclass of `%s` which enforces more granular naming convention rules for symbols.' => 'Naam van een concrete subklasse van `%s` die meer gedetailleerde naamgevingsconventieregels voor symbolen afdwingt.',
  'Convention: logical and arithmetic operators should be surrounded by whitespace.' => 'Conventie: logische en rekenkundige operatoren moeten omgeven zijn door witruimte.',
  'Space Before Unary Postfix Operator' => 'Spatie vóór unaire postfixoperator',
  'Expected any exception, got no exception.' => 'Verwachtte een uitzondering, maar kreeg geen uitzondering.',
  'Discard these changes before running "arc upgrade".' => 'Verwerp deze wijzigingen voordat u "arc upgrade" uitvoert.',
  'Failed to copy file from "%s" to "%s": %s' => 'Kopiëren van bestand van "%s" naar "%s" is mislukt: %s',
  'The test failed, but this change is probably not what broke it. For example, it might have already been failing.' => 'De test is mislukt, maar deze wijziging is waarschijnlijk niet de oorzaak. Het kan bijvoorbeeld al eerder zijn mislukt.',
  'Invalid Default Parameter' => 'Incorrecte standaardparameter',
  'Class constants cannot be marked as final before PHP 8.1.' => 'Klasseconstanten kunnen vóór PHP 8.1 niet als finaal worden gemarkeerd.',
  'String components of a sort vector must not contain NULL bytes.' => 'Tekenreekscomponenten van een sorteervector mogen geen NULL-bytes bevatten.',
  'Using saved response to prompt "%s".' => 'Opgeslagen antwoord gebruiken voor prompt "%s".',
  'The `%s` syntax was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => 'De `%s`-syntaxis is pas geïntroduceerd in PHP 5.4, maar deze codebase richt zich op een eerdere versie van PHP. U kunt deze expressie herschrijven met `%s`.',
  'Prompts the user to stash changes and continue when the working copy has untracked, uncommitted, or unstaged changes.' => 'Vraagt de gebruiker om wijzigingen te stashen en door te gaan wanneer de werkkopie niet-gevolgde, niet-gecommitte of niet-gestage wijzigingen heeft.',
  'This file contains unnecessary trailing whitespace.' => 'Dit bestand bevat onnodige afsluitende witruimte.',
  'Not a symlink!' => 'Geen symbolische koppeling!',
  'Halting all rule processing.' => 'Alle regelverwerking stoppen.',
  'Default value for parameters with a float type hint can only be an integer or a floating point number.' => 'De standaardwaarde voor parameters met een float-typehint kan alleen een geheel getal of een drijvende-kommagetal zijn.',
  'Configured lint engine "%s" is not a subclass of "%s", but must be.' => 'Geconfigureerde lintengine "%s" is geen subklasse van "%s", maar moet dat wel zijn.',
  'This repository API (\'%s\') does not support the requested capability.' => 'Deze repository-API (\'%s\') ondersteunt de gevraagde mogelijkheid niet.',
  'Land %s revision(s) that are already published?' => array(
    '%s versie laten landen die al gepubliceerd is?',
    '%s versies laten landen die al gepubliceerd zijn?',
  ),
  'Expected to find "%s" in "%s" output, but did not.' => 'Verwachtte "%s" te vinden in "%s"-uitvoer, maar dat was niet het geval.',
  'Golint is a linter for Go source code.' => 'Golint is een linter voor Go-broncode.',
  '%s is broken.' => '%s is defect.',
  '"%s" class "%s" has an invalid "%s" property. Field constants must be strings and no more than %s bytes in length.' => array(
    
    array(
      
      array(
        
        array(
          '"%s"-klasse "%s" heeft een incorrecte "%s"-eigenschap. Veldconstanten moeten tekenreeksen zijn en niet meer dan %s byte lang.',
          '"%s"-klasse "%s" heeft een incorrecte "%s"-eigenschap. Veldconstanten moeten tekenreeksen zijn en niet meer dan %s bytes lang.',
        ),
      ),
    ),
  ),
  'GENERATE' => 'GENEREREN',
  'Empty Block Statement' => 'Lege blokinstructie',
  'Properties cannot be declared "abstract".' => 'Eigenschappen kunnen niet als "abstract" worden gedeclareerd.',
  'Working copy' => 'Werkkopie',
  'Unknown Hardpoint request specification (of type "%s").' => 'Onbekende Hardpoint-verzoekspecificatie (van type "%s").',
  'Undefined Lint Message' => 'Ongedefinieerd lintbericht',
  'Unknown Command' => 'Onbekende opdracht',
  'Submitting changes to "%s".' => 'Wijzigingen indienen bij "%s".',
  'Configure a default merge strategy for "arc land".' => 'Een standaard mergestrategie configureren voor "arc land".',
  'Downloading binary data for \'%s\'...' => 'Binaire gegevens downloaden voor \'%s\'...',
  '**upload** [__options__] -- __file__ [__file__ ...]' => '**upload** [__opties__] -- __bestand__ [__bestand__ ...]',
  'Unrecognized key \'%s\' in argument specification. Recognized keys are: %s.' => 'Niet-herkende sleutel \'%s\' in argumentspecificatie. Herkende sleutels zijn: %s.',
  'The SSL CA Bundles that we tried to use could not be read or are not formatted correctly.' => 'De SSL CA-bundels die we probeerden te gebruiken konden niet worden gelezen of zijn niet correct opgemaakt.',
  'DATA' => 'GEGEVENS',
  'Unary prefix operators should not be followed by whitespace.' => 'Unaire prefixoperatoren mogen niet worden gevolgd door witruimte.',
  'You can not use "--current" when generating rules.' => 'U kunt "--current" niet gebruiken bij het genereren van regels.',
  'Unable to fork!' => 'Kan niet forken!',
  'This workflow (\'%s\') requires a working copy, override %s to return true.' => 'Deze workflow (\'%s\') vereist een werkkopie, overschrijf %s om true terug te geven.',
  'No revision specified with "--revision", and no revisions found that match the current working copy state. Use "--revision <id>" to specify which revision you want to amend.' => 'Geen versie opgegeven met "--revision", en geen versies gevonden die overeenkomen met de huidige werkkopie-status. Gebruik "--revision <id>" om op te geven welke versie u wilt wijzigen.',
  'Call to "curl_setopt(...) failed for option key "%s".' => 'Aanroep van "curl_setopt(...)" is mislukt voor optiesleutel "%s".',
  'EXCEPTION' => 'UITZONDERING',
  'Failed to split line "%s" from "git log".' => 'Kan regel "%s" van "git log" niet splitsen.',
  '---' => '---',
  'Failed to write %d bytes to \'%s\'.' => 'Schrijven van %d bytes naar \'%s\' is mislukt.',
  'The "merge" strategy generates a merge commit when publishing that retains local checkpoint commits (but produces a nonlinear published history). Select this strategy if you do not want "arc land" to discard checkpoint commits.' => 'De "merge"-strategie genereert een mergecommit bij het publiceren die lokale checkpointcommits behoudt (maar een niet-lineaire gepubliceerde geschiedenis produceert). Selecteer deze strategie als u niet wilt dat "arc land" checkpointcommits verwijdert.',
  'Will merge into remote "%s", selected with the "--into" flag.' => 'Wordt gemerged naar remote "%s", geselecteerd met de vlag "--into".',
  'When running noninteractively, you MUST provide "--" to all commands (even if they take no arguments).' => 'Bij niet-interactieve uitvoering MOET u "--" opgeven bij alle opdrachten (zelfs als ze geen argumenten accepteren).',
  'Parse error on line %d at column %d: %s' => 'Verwerkingsfout op regel %d bij kolom %d: %s',
  'No viable means to download llaville/compatinfo-db is available.' => 'Er is geen haalbare manier beschikbaar om llaville/compatinfo-db te downloaden.',
  'Contents Modified' => 'Inhoud gewijzigd',
  'Output aliases in JSON format.' => 'Aliassen uitvoeren in JSON-formaat.',
  'Flag --skip-staging was specified.' => 'Vlag --skip-staging is opgegeven.',
  'Child in position \'%d\' is not of type \'%s\': %s' => 'Kind op positie \'%d\' is niet van type \'%s\': %s',
  'Parameter to %s must be a Differential Revision number.' => 'Parameter voor %s moet een Differential-versienummer zijn.',
  '%s currently supports only one file attachment for each parameter name. You are trying to attach two different files with the same parameter, "%s".' => '%s ondersteunt momenteel slechts één bestandsbijlage per parameternaam. U probeert twee verschillende bestanden bij te voegen met dezelfde parameter, "%s".',
  'Arguments "--into-local", "--into-remote", and "--into-empty" are mutually exclusive.' => 'Argumenten "--into-local", "--into-remote" en "--into-empty" sluiten elkaar uit.',
  'Use `%s` for local static member references.' => 'Gebruik `%s` voor lokale statische lidverwijzingen.',
  'Wrote updated completion rules for "%s" to: %s.' => 'Bijgewerkte aanvullingsregels voor "%s" geschreven naar: %s.',
  '`%s` Methods Cannot Be Marked `%s`' => '`%s`-methoden kunnen niet worden gemarkeerd als `%s`',
  'Leading Whitespace at BOF' => 'Voorafgaande witruimte aan begin van bestand',
  'No library currently exists at the path "%s"...' => 'Er bestaat momenteel geen bibliotheek op het pad "%s"...',
  'Show committed and abandoned revisions.' => 'Gecommitte en verlaten versies weergeven.',
  'Unable to locate %s.' => 'Kan %s niet vinden.',
  'The `%s` operator is not available before PHP 5.6.' => 'De operator `%s` is vóór PHP 5.6 niet beschikbaar.',
  'SAVE STASH' => 'STASH OPSLAAN',
  'Wildcard arguments may not specify a parameter.' => 'Jokerargumenten mogen geen parameter opgeven.',
  'After creating a paste, open it in a web browser.' => 'Open de paste na het aanmaken in een webbrowser.',
  'The node \'%s\' is not known. Call %s to seed the graph with nodes.' => 'Het knooppunt \'%s\' is niet bekend. Roep %s aan om de graaf te vullen met knooppunten.',
  'Do not run any sanity checks.' => 'Geen controles uitvoeren.',
  'Execution of "git cat-file --batch-check" emitted an unexpected number of lines, expected %s but got %s.' => 'Uitvoering van "git cat-file --batch-check" produceerde een onverwacht aantal regels, verwachtte %s maar kreeg er %s.',
  'Classes should extend from `%s` or from some other class. All classes (except for `%s` itself) should have a base class.' => 'Klassen moeten uitbreiden van `%s` of van een andere klasse. Alle klassen (behalve `%s` zelf) moeten een basisklasse hebben.',
  'Missing VCS support.' => 'Ontbrekende VCS-ondersteuning.',
  'Bookmark name %s already exists; trying a new name.' => 'Bookmarknaam %s bestaat al; een nieuwe naam wordt geprobeerd.',
  'Alias definitions form a cycle which can not be resolved: %s.' => 'Aliasdefinities vormen een cyclus die niet kan worden opgelost: %s.',
  'Arc unit does not currently support %s in SVN.' => 'Arc unit ondersteunt momenteel geen %s in SVN.',
  'Argument Error' => 'Argumentfout',
  'Multiple "final" modifiers are not allowed.' => 'Meerdere "final"-modifiers zijn niet toegestaan.',
  'Flag "--lang" is not supported when reading pastes.' => 'Vlag "--lang" wordt niet ondersteund bij het lezen van pastes.',
  'Allows you to make a raw Conduit method call:

  - Run this command from a working directory.
  - Call parameters are required, and read as a JSON blob from stdin.
  - Results are written to stdout as a JSON blob.

This workflow is primarily useful for writing scripts. Examples:

  $ echo \'{}\' | arc call-conduit conduit.ping --
  $ echo \'{"phid":"PHID-FILE-xxxx"}\' | arc call-conduit file.download --' => 'Hiermee kunt u een directe Conduit-methodeaanroep uitvoeren:

  - Voer deze opdracht uit vanuit een werkdirectory.
  - De aanroepparameters zijn vereist en worden als JSON-blob uit de standaardinvoer gelezen.
  - De resultaten worden als JSON-blob naar de standaarduitvoer geschreven.

Deze werkstroom is vooral handig voor het schrijven van scripts. Voorbeelden:

  $ echo \'{}\' | arc call-conduit conduit.ping --
  $ echo \'{"phid":"PHID-FILE-xxxx"}\' | arc call-conduit file.download --',
  'Two argument specifications have the same name ("%s").' => 'Twee argumentspecificaties hebben dezelfde naam ("%s").',
  '(No commits.)' => '(Geen commits.)',
  'This working copy has no metadata directory, so you can not resolve metadata paths within it.' => 'Deze werkkopie heeft geen metadatamap, dus u kunt geen metadatapaden erin oplossen.',
  'Export change as a unified patch. This format is less complete than git patches or arc bundles. These patches can be applied with \'%s\' or \'%s\'.' => 'Wijziging exporteren als een unified patch. Dit formaat is minder volledig dan git-patches of arc-bundels. Deze patches kunnen worden toegepast met \'%s\' of \'%s\'.',
  'Perforce sync failed! Fix the error and run "arc land" again.' => 'Perforce-synchronisatie mislukt! Los de fout op en voer "arc land" opnieuw uit.',
  'Failed to close file handle.' => 'Sluiten van bestandshandle is mislukt.',
  'Name files using only letters, numbers, period, hyphen and underscore.' => 'Geef bestanden namen met alleen letters, cijfers, punt, koppelteken en onderstrepingsteken.',
  'Call to "curl_setopt(...)" returned "false".' => 'Aanroep van "curl_setopt(...)" gaf "false" terug.',
  'Unable to set socket nonblocking!' => 'Kan socket niet instellen als niet-blokkerend!',
  'Generator delegation (`%s`) is not available before PHP 7.0.' => 'Generatordelegatie (`%s`) is vóór PHP 7.0 niet beschikbaar.',
  'Unable to upload file chunks: %s' => 'Kan bestandschunks niet uploaden: %s',
  'it is the first ancestor of %s that has a diff and is the gca or a descendant of the gca with \'%s\', specified by \'%s\' in your %s \'base\' configuration.' => 'het is de eerste voorouder van %s die een diff heeft en de gca is of een afstammeling van de gca met \'%s\', opgegeven door \'%s\' in uw %s \'base\'-configuratie.',
  'Unsupported base85 encoding mode "%s".' => 'Niet-ondersteunde base85-coderingsmodus "%s".',
  'The configuration key "%s" is not recognized by arc. It may be misspelled or out of date.' => 'De configuratiesleutel "%s" wordt niet herkend door arc. Het kan verkeerd gespeld of verouderd zijn.',
  'Failed to read patch from stdin!' => 'Lezen van patch van stdin is mislukt!',
  '#%d: %s' => '#%d: %s',
  'Server URI "%s" must include a protocol and domain. It should be in the form "%s".' => 'Server-URI "%s" moet een protocol en domein bevatten. Het moet de vorm "%s" hebben.',
  'PHP Coding Standards for Phutil libraries.' => 'PHP-codestandaarden voor Phutil-bibliotheken.',
  'Specify a string (or list of strings) identifying the interpreter which should be used to invoke the linter binary. If you provide a list of possible interpreters, the first one that exists will be used.' => 'Geef een tekenreeks (of lijst van tekenreeksen) op die de interpreter identificeert die moet worden gebruikt om het linterbinaire bestand aan te roepen. Als u een lijst van mogelijke interpreters opgeeft, wordt de eerste die bestaat gebruikt.',
  'Channel closed while flushing output!' => 'Kanaal gesloten tijdens het flushen van uitvoer!',
  'Install CoffeeLint using `%s`.' => 'Installeer CoffeeLint met `%s`.',
  'Multi-lined arrays should have trailing commas.' => 'Arrays op meerdere regels moeten een afsluitende komma hebben.',
  'Configuration source ("%s") defines an invalid alias, which will be ignored: %s' => 'Configuratiebron ("%s") definieert een incorrecte alias, die wordt genegeerd: %s',
  'Your \'%s\' file is not a valid JSON file.' => 'Uw \'%s\'-bestand is geen geldig JSON-bestand.',
  'it is specified by \'%s\' in your %s \'base\' configuration.' => 'het is opgegeven door \'%s\' in uw %s \'base\'-configuratie.',
  'These %s revision(s) have changes planned:' => array(
    'Deze versie heeft geplande wijzigingen:',
    'Deze %s versies hebben geplande wijzigingen:',
  ),
  'Use __%s__ to show additional options.' => 'Gebruik __%s__ om extra opties weer te geven.',
  'No repositories matched the query. Check that your configuration is correct, or use "%s" to select a repository explicitly.' => 'Geen repository\'s kwamen overeen met de zoekopdracht. Controleer of uw configuratie correct is, of gebruik "%s" om expliciet een repository te selecteren.',
  'Unable to upload file: path "%s" is not readable.' => 'Kan bestand niet uploaden: pad "%s" is niet leesbaar.',
  'Examining paths for linter \'%s\'.' => 'Paden onderzoeken voor linter \'%s\'.',
  'Expected to find an integer value for meminfo key "%s" in meminfo source "%s", found "%s".' => 'Verwachtte een geheel getal te vinden voor meminfo-sleutel "%s" in meminfo-bron "%s", maar vond "%s".',
  'Unable to list contents of directory \'%s\'.' => 'Kan de inhoud van map \'%s\' niet weergeven.',
  'You can not read the result buffer while streaming results to disk: there is no in-memory buffer to read.' => 'U kunt de resultaatbuffer niet lezen terwijl resultaten naar schijf worden gestreamd: er is geen buffer in het geheugen om te lezen.',
  'File \'%s\' declares more than one class or interface (%s). A file which declares a class or interface MUST declare nothing else.' => 'Bestand \'%s\' declareert meer dan één klasse of interface (%s). Een bestand dat een klasse of interface declareert MAG niets anders declareren.',
  'NEW LIBRARY' => 'NIEUWE BIBLIOTHEEK',
  'Show the amended commit message, without modifying the working copy.' => 'Het gewijzigde commitbericht weergeven, zonder de werkkopie te wijzigen.',
  'Downloading "%s" (%s byte(s)) to "%s"...' => array(
    
    array(
      '"%s" (%s byte) downloaden naar "%s"...',
      '"%s" (%s bytes) downloaden naar "%s"...',
    ),
  ),
  'Type of setting \'%s\' must be list.' => 'Type van instelling \'%s\' moet lijst zijn.',
  'When creating a revision, add CCs.' => 'Bij het aanmaken van een versie, CC\'s toevoegen.',
  'Specify a string (or list of strings) identifying the binary which should be invoked to execute this linter. This overrides the default binary. If you provide a list of possible binaries, the first one which exists will be used.' => 'Geef een tekenreeks (of lijst van tekenreeksen) op die het binaire bestand identificeert dat moet worden aangeroepen om deze linter uit te voeren. Dit overschrijft het standaard binaire bestand. Als u een lijst van mogelijke binaire bestanden opgeeft, wordt het eerste dat bestaat gebruikt.',
  'Failed to open file!' => 'Openen van bestand is mislukt!',
  'Confirms that revisions with ongoing builds should land.' => 'Bevestigt dat versies met lopende builds geland moeten worden.',
  'Expected JSON response from Twitch.' => 'JSON-antwoord van Twitch verwacht.',
  'No specification exists for argument "%s"!' => 'Er bestaat geen specificatie voor argument "%s"!',
  'Two workflows with name \'%s!' => 'Twee workflows met de naam \'%s\'!',
  'Class symbol "%s" should be written as "%s".' => 'Klassesymbool "%s" moet worden geschreven als "%s".',
  'Accepted' => 'Geaccepteerd',
  'Append to this file?' => 'Toevoegen aan dit bestand?',
  'Empty files usually don\'t serve any useful purpose.' => 'Lege bestanden dienen meestal geen nuttig doel.',
  'Specify two or more files to weld together.' => 'Geef twee of meer bestanden op om samen te voegen.',
  'Magic constants should be uppercase.' => 'Magische constanten moeten in hoofdletters zijn.',
  'CASCADE' => 'CASCADE',
  '%s REVISION(S) HAVE CHANGES PLANNED' => array(
    '%s VERSIE HEEFT GEPLANDE WIJZIGINGEN',
    '%s VERSIES HEBBEN GEPLANDE WIJZIGINGEN',
  ),
  'You are not the author of \'%s: %s\'. Commit this revision anyway?' => 'U bent niet de auteur van \'%s: %s\'. Deze versie toch committen?',
  'Lookup of encoding in project failed: %s' => 'Opzoeken van codering in project is mislukt: %s',
  'Concatenation Spacing' => 'Concatenatiespatiëring',
  'Array item with key \'%s\' must be of type array, %s given.' => 'Array-item met sleutel \'%s\' moet van het type array zijn, %s opgegeven.',
  'No mode provided for path "%s".' => 'Geen modus opgegeven voor pad "%s".',
  'PHP-Parser Lint' => 'PHP-Parser Lint',
  'LOG IN' => 'AANMELDEN',
  'Final property promotion is not available before PHP 8.5.' => 'De promotie van finale eigenschappen is vóór PHP 8.5 niet beschikbaar.',
  'Ignore the changes to these %s submodule(s) and continue?' => array(
    'De wijzigingen aan deze submodule negeren en doorgaan?',
    'De wijzigingen aan deze submodules negeren en doorgaan?',
  ),
  'Variable Reused As Iterator' => 'Variabele hergebruikt als iterator',
  '(regenerate projects for %s)' => '(projecten opnieuw genereren voor %s)',
  'Always update a specific revision.' => 'Altijd een specifieke versie bijwerken.',
  'In multi-line use declarations, each variable should be on a separate line.' => 'Bij meerregelige gebruiksdeclaraties moet elke variabele op een aparte regel staan.',
  'Partial Catch' => 'Gedeeltelijke catch',
  'Call to "assertCaught(<junk>, ...)" passed bad expected value. expected result. Expected null, Exception, or Throwable; got: %s.' => 'Aanroep van "assertCaught(<junk>, ...)" heeft een incorrecte verwachte waarde doorgegeven. Verwachtte null, Exception of Throwable; kreeg: %s.',
  'Example Value' => 'Voorbeeldwaarde',
  'Dynamic expressions cannot be used as initializers for static variables before PHP 8.3.' => 'Dynamische uitdrukkingen kunnen vóór PHP 8.3 niet als initialiseringswaarden voor statische variabelen worden gebruikt.',
  'You have saved the response "%s" to this prompt.' => 'U hebt het antwoord "%s" opgeslagen voor deze prompt.',
  'This workflow (\'%s\') requires a Conduit, override %s to return true.' => 'Deze workflow (\'%s\') vereist een Conduit, overschrijf %s om true terug te geven.',
  'BRANCH' => 'BRANCH',
  'Moved Here' => 'Hierheen verplaatst',
  'A cast statement must not be followed by a space.' => 'Een cast-instructie mag niet worden gevolgd door een spatie.',
  'Run unit tests covering changes since a specific revision.' => 'Unittests uitvoeren die wijzigingen dekken sinds een specifieke versie.',
  'Expected an object, string, or list of objects for "object" context, got "%s".' => 'Verwachtte een object, tekenreeks of lijst van objecten voor "object"-context, maar kreeg "%s".',
  'Run "arc help prompts" for detailed help on configuring responses.' => 'Voer "arc help prompts" uit voor gedetailleerde hulp bij het configureren van antwoorden.',
  'Unexpected output from %s: no author for commit %s' => 'Onverwachte uitvoer van %s: geen auteur voor commit %s',
  'Confirms that revisions with failed builds should land.' => 'Bevestigt dat versies met mislukte builds geland moeten worden.',
  'Did not reach every wait node??' => 'Niet elk wachtknooppunt bereikt??',
  'Unknown escaping mode!' => 'Onbekende escapemodus!',
  'The river bubbles quietly, but you do not see any published commits anywhere.' => 'De rivier borrelt rustig, maar u ziet nergens gepubliceerde commits.',
  'Unable to parse SVN info.' => 'Kan SVN-info niet verwerken.',
  'Logical Operators' => 'Logische operatoren',
  'Keep local branches around after changes are pushed. By default, local branches are deleted after the changes they contain are published.' => 'Lokale branches behouden nadat wijzigingen zijn gepusht. Standaard worden lokale branches verwijderd nadat de wijzigingen die ze bevatten zijn gepubliceerd.',
  'Repository API is not supported.' => 'Repository-API wordt niet ondersteund.',
  'HTTP parameter pair (with key "%s") is not valid: each pair must be an array with exactly two elements.' => 'HTTP-parameterpaar (met sleutel "%s") is niet geldig: elk paar moet een array zijn met precies twee elementen.',
  'Working Copy: Project root is at "%s".' => 'Werkkopie: projectroot bevindt zich op "%s".',
  '(DEPRECATED) Obsolete, use "--types path" instead.' => '(VEROUDERD) Achterhaald, gebruik in plaats daarvan "--types path".',
  '    %s (%s) %s
' => '    %s (%s) %s',
  'Follow naming conventions: variables should be named using `%s`.' => 'Volg de naamgevingsrichtlijnen: variabelen moeten met `%s` worden benoemd.',
  'This is just an example function!' => 'Dit is slechts een voorbeeldfunctie!',
  'Warning - legacy default value ignored' => 'Waarschuwing - oude standaardwaarde genegeerd',
  'Use the local "into" ref state instead of fetching it from a remote.' => 'De lokale "into"-refstatus gebruiken in plaats van deze op te halen van een remote.',
  'Phutil PHPAST' => 'Phutil PHPAST',
  'Specifies the default behavior when "arc land" is run with no "--strategy" flag.' => 'Geeft het standaardgedrag aan wanneer "arc land" wordt uitgevoerd zonder de vlag "--strategy".',
  'Configuration option ("%s") is unrecognized. You can only read recognized configuration options.' => 'Configuratieoptie ("%s") wordt niet herkend. U kunt alleen herkende configuratieopties lezen.',
  'IP address "%s" is not properly formated: it has too few parts. Expected a minimum of 2 colons, like "%s".' => 'IP-adres "%s" is niet correct opgemaakt: het heeft te weinig delen. Verwachtte minimaal 2 dubbele punten, zoals "%s".',
  'You can not specify paths with %s. The %s flag runs every test associated with a tracked file in the working copy.' => 'U kunt geen paden opgeven met %s. De vlag %s voert elke test uit die is gekoppeld aan een gevolgd bestand in de werkkopie.',
  'Enums are not available before PHP 8.1.' => 'Enumeraties zijn vóór PHP 8.1 niet beschikbaar.',
  'Invalid UTF-8 string passed to %s.' => 'Incorrecte UTF-8-tekenreeks doorgegeven aan %s.',
  'Creating new branch "%s" from "%s".' => 'Nieuwe branch "%s" aanmaken vanuit "%s".',
  'Use the full form of the PHP open tag, `%s`.' => 'Gebruik de volledige vorm van de PHP-opentag, `%s`.',
  'Merge succeeded.' => 'Merge geslaagd.',
  'Definition of symbol "%s" (of type "%s") in file "%s" in library "%s" duplicates builtin definition of the same symbol.' => 'Definitie van symbool "%s" (van type "%s") in bestand "%s" in bibliotheek "%s" dupliceert de ingebouwde definitie van hetzelfde symbool.',
  'Amending commit message to reflect revision:' => 'Commitbericht wijzigen om versie weer te geven:',
  'Unknown URI type "%s"!' => 'Onbekend URI-type "%s"!',
  'it is the merge-base of \'%s\' and HEAD, as specified in \'%s\'.' => 'het is de merge-base van \'%s\' en HEAD, zoals opgegeven in \'%s\'.',
  'Specify a file to download.' => 'Geef een bestand op om te downloaden.',
  'Parameter provided to argument "--%s" is too large to parse as an integer.' => 'Parameter opgegeven voor argument "--%s" is te groot om als geheel getal te verwerken.',
  'Expected a list or dictionary!' => 'Verwachtte een lijst of dictionary!',
  'Invalid Content Encoding (Non-UTF8)' => 'Incorrecte inhoudscodering (niet-UTF8)',
  'Yielding processing of rules from \'%s\'.' => 'Verwerking van regels van \'%s\' wordt overgedragen.',
  'IP address "%s" is not properly formatted. Address segments should have no leading zeroes, but segment "%s" has a leading zero.' => 'IP-adres "%s" is niet correct opgemaakt. Adressegmenten mogen geen voorloopnullen hebben, maar segment "%s" heeft een voorloopnul.',
  'For consistency, write hexadecimals integers in uppercase with a leading `%s`.' => 'Schrijf voor consistentie hexadecimale gehele getallen in hoofdletters met een voorafgaande `%s`.',
  'Use `%s` single-line comments, not `%s`.' => 'Gebruik `%s` enkelregelige opmerkingen, niet `%s`.',
  'Definition of %s \'%s\' in file \'%s\' duplicates prior definition in file \'%s\'. You can not declare the same symbol twice.' => 'Definitie van %s \'%s\' in bestand \'%s\' dupliceert eerdere definitie in bestand \'%s\'. U kunt hetzelfde symbool niet twee keer declareren.',
  '(No revisions match.)' => '(Geen versies komen overeen.)',
  'Unrecognized lint message code: "%s"' => 'Niet-herkende lintberichtcode: "%s"',
  'No lint engine configured for this project.' => 'Geen lintengine geconfigureerd voor dit project.',
  'Lint can not be output into "%s" format because the PHP "%s" extension is not installed. Install the extension or choose a different output format.' => 'Lint kan niet worden uitgevoerd in "%s"-formaat omdat de PHP-uitbreiding "%s" niet is geïnstalleerd. Installeer de uitbreiding of kies een ander uitvoerformaat.',
  'Call to phutil_nonempty_string() expected null or a string, got: %s.' => 'Aanroep van phutil_nonempty_string() verwachtte null of een tekenreeks, maar kreeg: %s.',
  'Your version of \'%s\' is unbuilt or out of date. Run this script to build it.' => 'Uw versie van \'%s\' is niet gebouwd of verouderd. Voer dit script uit om het te bouwen.',
  'Failed to copy file from "%s" to "%s".' => 'Kopiëren van bestand van "%s" naar "%s" is mislukt.',
  'CoffeeLint does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => 'CoffeeLint ondersteunt momenteel geen aangepaste ernstniveaus, omdat regels niet kunnen worden geïdentificeerd uit berichten in de uitvoer.',
  'Attempt to read from undeclared property %s.' => 'Poging om te lezen van niet-gedeclareerde eigenschap %s.',
  'Select a Default Commit Range' => 'Selecteer een standaard commitbereik',
  'Unable to start socket! Error #%d: %s' => 'Kan socket niet starten! Fout #%d: %s',
  'Failed to read modified time for %s.' => 'Lezen van wijzigingstijd voor %s is mislukt.',
  'Hexadecimal Integer Casing' => 'Hoofdlettergebruik van hexadecimale gehele getallen',
  'Calls to built-in PHP functions should be lowercase.' => 'Aanroepen van ingebouwde PHP-functies moeten in kleine letters zijn.',
  'Status: %s' => 'Status: %s',
  'Follow naming conventions: functions should be named using `%s`.' => 'Volg de naamgevingsrichtlijnen: functies moeten met `%s` worden benoemd.',
  'Unexpected value type provided for an HREF field - %s. Please share this stack trace as comment in Task %s' => 'Onverwacht waardetype opgegeven voor een HREF-veld - %s. Deel deze stacktrace als opmerking in taak %s',
  'Argument index is not a scalar.' => 'Argumentindex is geen scalar.',
  'Vigorously fuse files together, without using a cat.' => 'Bestanden krachtig samenvoegen, zonder een cat te gebruiken.',
  'The test passed.' => 'De test is geslaagd.',
  'Received error from Twitch: %s' => 'Fout ontvangen van Twitch: %s',
  'Rewrite this code to use an array. Variable variables are unclear and hinder static analysis.' => 'Herschrijf deze code om een array te gebruiken. Variabele variabelen zijn onduidelijk en belemmeren statische analyse.',
  'Missing files in working copy:' => 'Ontbrekende bestanden in werkkopie:',
  'Preparing to run a command in directory "%s", but that directory is not readable (the current process does not have "+r" permission).' => 'Voorbereiden om een opdracht uit te voeren in map "%s", maar die map is niet leesbaar (het huidige proces heeft geen "+r"-toestemming).',
  '**anoid**' => '**anoid**',
  'This workflow isn\'t executable!' => 'Deze workflow is niet uitvoerbaar!',
  'Unknown command \'%s\'. Try \'%s\'.' => 'Onbekende opdracht \'%s\'. Probeer \'%s\'.',
  'This function can not convert into the unit "%s".' => 'Deze functie kan niet converteren naar de eenheid "%s".',
  'Turkish (Turkey)' => 'Turks (Turkije)',
  'Runtime "--config" Flags' => 'Runtime "--config"-vlaggen',
  'SUCCESS!' => 'GELUKT!',
  'No "%s %s" alias is defined, did you mean "%s %s"?' => 'Er is geen "%s %s"-alias gedefinieerd, bedoelde u "%s %s"?',
  'Cannot display current version without "%s" installed.' => 'Kan de huidige versie niet weergeven zonder dat "%s" is geïnstalleerd.',
  'Flag "--title" is not supported when reading pastes.' => 'Vlag "--title" wordt niet ondersteund bij het lezen van pastes.',
  'Expected exactly one argument to "%s(...)" with a symbol.' => 'Verwachtte precies één argument voor "%s(...)" met een symbool.',
  'In remote "%s", the name "%s" identifies one or more branch heads and one or more bookmarks. Close, rename, or delete all but one of these markers, or pull the state you want to merge into and use "--into-local --into <hash>" to disambiguate the desired merge target.' => 'In remote "%s" identificeert de naam "%s" een of meer branch-heads en een of meer bookmarks. Sluit, hernoem of verwijder alle markeringen behalve één, of haal de status op waarnaar u wilt mergen en gebruik "--into-local --into <hash>" om het gewenste mergedoel te verduidelijken.',
  'System Config File' => 'Systeemconfiguratiebestand',
  'Show an enhanced view of bookmarks in the working copy.' => 'Een uitgebreide weergave van bookmarks in de werkkopie weergeven.',
  'A git commit or tree hash in the commit range is already attached to the Differential revision.' => 'Een git-commit- of boomhash in het commitbereik is al gekoppeld aan de Differential-versie.',
  'Use braces to surround a statement block.' => 'Gebruik accolades om een instructieblok te omsluiten.',
  '"arc land" must be run in a Git or Mercurial working copy.' => '"arc land" moet worden uitgevoerd in een Git- of Mercurial-werkkopie.',
  'Begin or resume work.' => 'Werk beginnen of hervatten.',
  'Saving local state (at detached commit "%s").' => 'Lokale status opslaan (op losstaande commit "%s").',
  'Properties can not be declared "final".' => 'Eigenschappen kunnen niet als "final" worden gedeclareerd.',
  'Landing onto remote "%s", the default remote under Mercurial.' => 'Landen op remote "%s", de standaard remote onder Mercurial.',
  'Create a paste using the content in a file.' => 'Een paste aanmaken met de inhoud van een bestand.',
  'Jun' => 'jun',
  '%s failed: %s' => '%s mislukt: %s',
  'Unrecognized lint message code "%s". Expected a valid JSHint lint code like "%s" or "%s".' => 'Niet-herkende lintberichtcode "%s". Verwachtte een geldige JSHint-lintcode zoals "%s" of "%s".',
  'This patch has binary data. The PHP zlib extension is required to apply patches with binary data to git. Install the PHP zlib extension to continue.' => 'Deze patch bevat binaire gegevens. De PHP zlib-uitbreiding is vereist om patches met binaire gegevens toe te passen op git. Installeer de PHP zlib-uitbreiding om door te gaan.',
  'Parameter ("%s") passed to "%s" when constructing a lint message must be a string with a maximum length of %s bytes, but is %s bytes in length.' => array(
    
    array(
      
      array(
        
        array(
          'Parameter ("%s") doorgegeven aan "%s" bij het construeren van een lintbericht moet een tekenreeks zijn met een maximale lengte van %s byte, maar is %s byte lang.',
          'Parameter ("%s") doorgegeven aan "%s" bij het construeren van een lintbericht moet een tekenreeks zijn met een maximale lengte van %s byte, maar is %s bytes lang.',
        ),
        
        array(
          'Parameter ("%s") doorgegeven aan "%s" bij het construeren van een lintbericht moet een tekenreeks zijn met een maximale lengte van %s bytes, maar is %s byte lang.',
          'Parameter ("%s") doorgegeven aan "%s" bij het construeren van een lintbericht moet een tekenreeks zijn met een maximale lengte van %s bytes, maar is %s bytes lang.',
        ),
      ),
    ),
  ),
  'CONNECT' => 'VERBINDEN',
  'Unable to parse unit specification (expected a specification in the form "%s"): %s' => 'Kan eenheidsspecificatie niet verwerken (verwachtte een specificatie in de vorm "%s"): %s',
  'Follow naming conventions: traits should be named using `%s`.' => 'Volg de naamgevingsrichtlijnen: kenmerken moeten met `%s` worden benoemd.',
  'The shell "%s" is not supported. Supported shells are: %s.' => 'De shell "%s" wordt niet ondersteund. Ondersteunde shells zijn: %s.',
  'Confirms use of a revision that does not appear to be present in the working copy.' => 'Bevestigt het gebruik van een versie die niet aanwezig lijkt te zijn in de werkkopie.',
  'INTO COMMIT' => 'NAAR COMMIT',
  '...' => '...',
  'Dictionary key "%s" is not valid UTF8, and cannot be JSON encoded.' => 'Dictionarysleutel "%s" is geen geldige UTF8 en kan niet als JSON worden gecodeerd.',
  'Unsupported escape sequence "%s" found in pattern: %s' => 'Niet-ondersteunde escape-reeks "%s" gevonden in patroon: %s',
  'Upgrading "%s" (on branch "%s").' => '"%s" upgraden (op branch "%s").',
  'The request took too long to complete.' => 'Het verzoek duurde te lang om te voltooien.',
  '"arc amend" must be run from inside a working copy of a repository using a version control system that supports amending commits, like Git or Mercurial.' => '"arc amend" moet worden uitgevoerd vanuit een werkkopie van een repository die een versiebeheersysteem gebruikt dat het wijzigen van commits ondersteunt, zoals Git of Mercurial.',
  'Possible Spelling Mistake' => 'Mogelijke spelfout',
  'Moved Away' => 'Wegverplaatst',
  'Found no state ref for hash "%s".' => 'Geen statusref gevonden voor hash "%s".',
  'Invalid glob pattern.' => 'Incorrect glob-patroon.',
  '%s is not compatible with the installed version of pylint. Minimum version: %s; installed version: %s.' => '%s is niet compatibel met de geïnstalleerde versie van pylint. Minimumversie: %s; geïnstalleerde versie: %s.',
  'These Differential revisions match the changes in this working copy:' => 'Deze Differential-versies komen overeen met de wijzigingen in deze werkkopie:',
  'Pass in a custom jshintignore file path.' => 'Geef een aangepast jshintignore-bestandspad op.',
  'Use of Undeclared Variable' => 'Gebruik van niet-gedeclareerde variabele',
  'Expected value to be a list of objects to support calling "%s" to generate unique keys, but item with index "%s" is "%s".' => 'Verwachtte dat de waarde een lijst van objecten is om het aanroepen van "%s" te ondersteunen voor het genereren van unieke sleutels, maar item met index "%s" is "%s".',
  'This working copy has no remote named "%s".' => 'Deze werkkopie heeft geen remote met de naam "%s".',
  'Hardpoint data (for hardpoint "%s") is not attached.' => 'Hardpointgegevens (voor hardpoint "%s") zijn niet gekoppeld.',
  'Type of setting \'%s\' must be string.' => 'Type van instelling \'%s\' moet tekenreeks zijn.',
  'Received error from Postmark: (%s) %s' => 'Fout ontvangen van Postmark: (%s) %s',
  '"arc upgrade" can only upgrade clean working copies.' => '"arc upgrade" kan alleen schone werkkopieën upgraden.',
  'Call to phutil_nonempty_stringlike() expected a string or stringlike object, got: %s.' => 'Aanroep van phutil_nonempty_stringlike() verwachtte een tekenreeks of tekenreeksachtig object, maar kreeg: %s.',
  'Name' => 'Naam',
  'Promoted properties are not available before PHP 8.0.' => 'Gepromoveerde eigenschappen zijn vóór PHP 8.0 niet beschikbaar.',
  'Unit testing raised errors!' => 'Unittests hebben fouten opgeleverd!',
  '... (%s more byte(s)) ...' => array(
    '... (nog %s byte) ...',
    '... (nog %s bytes) ...',
  ),
  'Install %s using `%s`.' => 'Installeer %s met `%s`.',
  'Unexpected output to stderr on exec channel: %s' => 'Onverwachte uitvoer naar stderr op exec-kanaal: %s',
  'The name of a default lint engine to use, if no lint engine is specified by the current project.' => 'De naam van een standaard lintengine om te gebruiken als er geen lintengine is opgegeven door het huidige project.',
  'Writing bundle to \'%s\'...' => 'Bundel schrijven naar \'%s\'...',
  'Configuration option "%s" was provided multiple times with "--config" flags. Specify each option no more than once.' => 'Configuratieoptie "%s" is meerdere keren opgegeven met "--config"-vlaggen. Geef elke optie maximaal één keer op.',
  'Cannot find the %s equivalent of %s.' => 'Kan het %s-equivalent van %s niet vinden.',
  'Saving local state (on ref "%s" at commit "%s").' => 'Lokale status opslaan (op ref "%s" bij commit "%s").',
  'The `%s` type hint is not available before PHP 7.0.' => 'De typehint `%s` is vóór PHP 7.0 niet beschikbaar.',
  'Maximum value must be an integer.' => 'Maximumwaarde moet een geheel getal zijn.',
  'Commit message has errors:' => 'Commitbericht bevat fouten:',
  'Adjust the maximum line length before a warning is raised. By default, a warning is raised on lines exceeding 80 characters.' => 'De maximale regellengte aanpassen voordat een waarschuwing wordt gegeven. Standaard wordt een waarschuwing gegeven bij regels die langer zijn dan 80 tekens.',
  'UNKNOWN CONFIGURATION' => 'ONBEKENDE CONFIGURATIE',
  'Enter a commit message for this patch. If you just want to apply the patch to the working copy without committing, re-run arc patch with the %s flag.' => 'Voer een commitbericht in voor deze patch. Als u de patch alleen wilt toepassen op de werkkopie zonder te committen, voer arc patch opnieuw uit met de vlag %s.',
  'Failed to chmod \'%s\' to \'%s\'.' => 'Chmod van \'%s\' naar \'%s\' is mislukt.',
  'Operating in Git/Perforce mode after selecting a Perforce remote.' => 'Werken in Git/Perforce-modus na het selecteren van een Perforce-remote.',
  'IP address "%s" is not properly formatted: an address may only contain a maximum of one subsequence omitted with "::".' => 'IP-adres "%s" is niet correct opgemaakt: een adres mag maximaal één weggelaten deelreeks met ":::" bevatten.',
  'Report results in JSON format.' => 'Resultaten melden in JSON-formaat.',
  'Failed to match "ls-remote" pattern against line "%s".' => 'Kan het "ls-remote"-patroon niet matchen met regel "%s".',
  'Attempt to write to undeclared property %s.' => 'Poging om te schrijven naar niet-gedeclareerde eigenschap %s.',
  'Provide a workflow to list prompts for.' => 'Geef een workflow op om prompts voor weer te geven.',
  'Raw changes can not be pushed to a staging area.' => 'Ruwe wijzigingen kunnen niet naar een staginggebied worden gepusht.',
  'Operation Error' => 'Bewerkingsfout',
  'Template not edited.' => 'Sjabloon niet bewerkt.',
  'runtime --library flag' => 'runtime --library-vlag',
  'Convention: no spaces before opening parenthesis in function and method declarations.' => 'Conventie: geen spaties vóór het openingshaakje in functie- en methodedeclaraties.',
  'Publish reviewed changes.' => 'Beoordeelde wijzigingen publiceren.',
  'fread() from stdin failed with an error.' => 'fread() van stdin is mislukt met een fout.',
  'You must either provide a signing key with setSigningKey(), or provide a secret key with setSecretKey().' => 'U moet een ondertekeningssleutel opgeven met setSigningKey(), of een geheime sleutel opgeven met setSecretKey().',
  'Omitting the variable in a catch clause is not allowed before PHP 8.0.' => 'Het weglaten van een variabele in een catch-clausule is vóór PHP 8.0 niet toegestaan.',
  'With \'full\', show full pretty report (Default). With \'json\', report results in JSON format. With \'ugly\', use uglier (but more efficient) JSON formatting. With \'none\', don\'t print results.' => 'Met \'full\', volledig opgemaakte melding weergeven (standaard). Met \'json\', resultaten melden in JSON-formaat. Met \'ugly\', lelijkere (maar efficiëntere) JSON-opmaak gebruiken. Met \'none\', geen resultaten weergeven.',
  'SAVE STATE' => 'STATUS OPSLAAN',
  '<placeholder>' => '<plaatshouder>',
  '%s failed!' => '%s is mislukt!',
  'Preparing to run a command in directory "%s", but that path is not a directory.' => 'Voorbereiden om een opdracht uit te voeren in map "%s", maar dat pad is geen map.',
  'Expected %s to return array, got %s.' => 'Verwachtte dat %s een array teruggeeft, maar kreeg %s.',
  'Assertion of caught exception failed (at %s:%d in test case "%s").' => 'Assertie van gevangen uitzondering is mislukt (op %s:%d in testcase "%s").',
  'The dependencies for this patch have a cycle. Applying them is not guaranteed to work. Continue anyway?' => 'De afhankelijkheden voor deze patch hebben een cyclus. Het toepassen ervan werkt mogelijk niet. Toch doorgaan?',
  'Local commit "%s" (%s) does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => 'Lokale commit "%s" (%s) merget niet schoon in "%s". Rebase of merge lokale wijzigingen zodat ze schoon kunnen mergen.',
  '<%s> %s' => '<%s> %s',
  '%s requires exactly one revision.' => '%s vereist precies één versie.',
  'Unable to read file permissions for "%s"!' => 'Kan bestandsrechten voor "%s" niet lezen!',
  'Override default binary.' => 'Standaard binair bestand overschrijven.',
  'Parameter %d of `%s` should be a scalar string, otherwise it\'s not safe.' => 'Parameter %d van `%s` moet een scalaire tekenreeks zijn, anders is het niet veilig.',
  'Just ahead to the north, you can see **remotes**.
' => 'Net ten noorden kunt u **remotes** zien.
\\',
  'Unable to verify request signature, specified "%s" ("%s") is unknown.' => 'Kan de verzoekhandtekening niet verifiëren, opgegeven "%s" ("%s") is onbekend.',
  'Commit \'%s\' is not a valid Mercurial commit identifier.' => 'Commit \'%s\' is geen geldige Mercurial-commitidentificatie.',
  'Self Class Reference' => 'Zelfklasseverwijzing',
  'Host returned HTTP/200, but invalid JSON data in response to a Conduit method call.' => 'Host gaf HTTP/200 terug, maar incorrecte JSON-gegevens als antwoord op een Conduit-methodeaanroep.',
  'Czech (Czech Republic)' => 'Tsjechisch (Tsjechië)',
  'Constructor Parentheses' => 'Constructorhaakjes',
  'Paste Symbol "%s"' => 'Pastesymbool "%s"',
  'Reviewers: %s' => 'Beoordelaars: %s',
  'Convention: no spaces before closing parenthesis in function and method declarations.' => 'Conventie: geen spaties vóór het sluitingshaakje in functie- en methodedeclaraties.',
  'The "SHELL" environment variable has value "%s", so the target shell was detected as "%s".' => 'De omgevingsvariabele "SHELL" heeft de waarde "%s", dus de doelshell is gedetecteerd als "%s".',
  'Unable to overwrite path \'%s\', patched version was left at \'%s\'.' => 'Kan pad \'%s\' niet overschrijven, gepatchte versie is achtergelaten op \'%s\'.',
  'Aug' => 'aug',
  'Future has already ended; futures can not end more than once.' => 'Future is al beëindigd; futures kunnen niet meer dan één keer eindigen.',
  'Method %s in class %s is not implemented!' => 'Methode %s in klasse %s is niet geïmplementeerd!',
  'Convention: double arrow should be surrounded by whitespace.' => 'Conventie: dubbele pijl moet omgeven zijn door witruimte.',
  'Prefer "__CLASS__" or "__TRAIT__" over hard-coded class or trait names.' => 'Gebruik liever “__CLASS__” of “__TRAIT__” dan constante klasse- of kenmerknamen.',
  '%s disables lint.' => '%s schakelt lint uit.',
  'If you provide an alter cost with %s, you must enable type computation with %s.' => 'Als u een wijzigingskost opgeeft met %s, moet u typeberekening inschakelen met %s.',
  'Test case \'%s\' was expected to succeed, but it raised an exception of class %s with message: %s' => 'Testcase \'%s\' werd verwacht te slagen, maar gaf een uitzondering van klasse %s met bericht: %s',
  'Title' => 'Titel',
  'Stage 1 bootloader is too large!' => 'Fase 1-bootloader is te groot!',
  'Comment Spaces' => 'Opmerkingspaties',
  'More than one revision was found in the working copy:' => 'Er is meer dan één versie gevonden in de werkkopie:',
  'Rule \'%s\' in state \'%s\' in %s has unknown context rule \'%s\', expected \'%s\', \'%s\' or \'%s\'.' => 'Regel \'%s\' in status \'%s\' in %s heeft onbekende contextregel \'%s\', verwachtte \'%s\', \'%s\' of \'%s\'.',
  '**work** [--start __start__] __symbol__' => '**work** [--start __start__] __symbool__',
  'No unit test engine is configured for this project. Create an \'%s\' file, or configure an advanced engine with \'%s\' in \'%s\'.' => 'Er is geen unittestengine geconfigureerd voor dit project. Maak een \'%s\'-bestand aan, of configureer een geavanceerde engine met \'%s\' in \'%s\'.',
  'Enable strict handling of units in expressions.' => 'Strikte afhandeling van eenheden in expressies inschakelen.',
  'Unexpected `%s` value in `%s` method.' => 'Onverwachte `%s`-waarde in `%s`-methode.',
  'Lock file out-of-date' => 'Vergrendelingsbestand verouderd',
  'Disconnected' => 'Verbinding verbroken',
  'Unresolved merge conflict' => 'Onopgelost mergeconflict',
  'English (Very Wow)' => 'Engels (Very Wow)',
  'Look around, or look at a specific __thing__.' => 'Rondkijken, of naar een specifiek __ding__ kijken.',
  'Call Formatting' => 'Aanroepopmaak',
  'Encountered a merge conflict.' => 'Een mergeconflict aangetroffen.',
  'Always enable coverage information.' => 'Dekkingsinformatie altijd inschakelen.',
  'PHP Compatibility' => 'PHP-compatibiliteit',
  'it is the greatest common ancestor of \'%s\' and %s, as specified by \'%s\' in your %s \'base\' configuration.' => 'het is de grootste gemeenschappelijke voorouder van \'%s\' en %s, zoals opgegeven door \'%s\' in uw %s \'base\'-configuratie.',
  'Use `%s` to detect issues with JavaScript source files.' => 'Gebruik `%s` om problemen met JavaScript-bronbestanden te detecteren.',
  'Attempting to convert a string encoding, but no target encoding was provided. Explicitly provide the target encoding.' => 'Poging om een tekenreekscodering te converteren, maar er is geen doelcodering opgegeven. Geef de doelcodering expliciet op.',
  'Landed changes.' => 'Wijzigingen geland.',
  'This codebase targets PHP %s, but `%s` was not introduced until PHP %s.' => 'Deze codebase richt zich op PHP %s, maar `%s` is pas geïntroduceerd in PHP %s.',
  'Use of `%s` Properties' => 'Gebruik van `%s`-eigenschappen',
  'INTO TARGET' => 'NAAR DOEL',
  'Chinese (Simplified)' => 'Chinees (Vereenvoudigd)',
  'Begin or resume work on a branch, bookmark, task, or revision.

The __symbol__ may be a branch or bookmark name, a revision name (like "D123"),
a task name (like "T123"), or a new symbol.

If you provide a symbol which currently does not identify any ongoing work,
a new branch or bookmark will be created with the name you provide.

If you provide the name of an existing branch or bookmark, the working copy
will be switched to that branch or bookmark.

If you provide the name of a revision or task, the workflow will look for a
related branch or bookmark that already exists in the working copy. If one is
found, it will switch to it. If it does not find one, it will attempt to create
a new branch or bookmark.

When "arc work" creates a branch or bookmark, it will use **--start** as the
branchpoint if it is provided. Otherwise, the current working copy state will
serve as the starting point.' => 'Werk beginnen of hervatten op een branch, bladwijzer, taak of versie.

Het __symbool__ kan een branch- of bladwijzernaam zijn, een versienaam (zoals "D123"),
een taaknaam (zoals "T123"), of een nieuw symbool.

Als u een symbool opgeeft dat momenteel geen lopend werk identificeert,
wordt een nieuwe branch of bladwijzer aangemaakt met de naam die u opgeeft.

Als u de naam opgeeft van een bestaande branch of bladwijzer, wordt de werkkopie
overgeschakeld naar die branch of bladwijzer.

Als u de naam opgeeft van een versie of taak, zoekt de workflow naar een
gerelateerde branch of bladwijzer die al bestaat in de werkkopie. Als er een wordt
gevonden, wordt ernaar overgeschakeld. Als er geen wordt gevonden, wordt geprobeerd
een nieuwe branch of bladwijzer aan te maken.

Wanneer "arc work" een branch of bladwijzer aanmaakt, wordt **--start** als
branchpunt gebruikt als dat is opgegeven. Anders dient de huidige werkkopie-status
als startpunt.',
  'Unknown patch type \'%s\'!' => 'Onbekend patchtype \'%s\'!',
  'Expected list of rules for state \'%s\' in %s, got %s.' => 'Verwachtte lijst van regels voor status \'%s\' in %s, maar kreeg %s.',
  'Rebasing "%s" onto landed state...' => '"%s" rebasen op gelande status...',
  'Open a file or object in a local web browser.' => 'Een bestand of object openen in een lokale webbrowser.',
  'This codebase targets PHP %s, but short ternary was not introduced until PHP 5.3.' => 'Deze codebase richt zich op PHP %s, maar de korte ternaire operator is pas geïntroduceerd in PHP 5.3.',
  'Paste "%s" does not exist, or you do not have access to see it.' => 'Paste "%s" bestaat niet, of u hebt geen toegang om deze te bekijken.',
  'Arrays should use the long array syntax.' => 'Arrays moeten de lange array-syntaxis gebruiken.',
  'You have no open Differential revisions.' => 'U hebt geen open Differential-versies.',
  'You are landing %s revision(s) which are already in the state "%s", indicating that they have previously landed:' => array(
    'U laat %s versie landen die al in de status "%s" staat, wat aangeeft dat die eerder is is geland:',
    'U laat %s versies landen die al in de status "%s" staan, wat aangeeft dat die eerder zijn is geland:',
  ),
  'Local branches and bookmarks have not been changed, and are still in the same state as before.' => 'Lokale branches en bookmarks zijn niet gewijzigd en staan nog in dezelfde status als voorheen.',
  'Nested `%s` Statements' => 'Geneste `%s`-instructies',
  'Two workflows ("%s" and "%s") both have the same name ("%s") and both support the current toolset ("%s", "%s"). Each workflow in a given toolset must have a unique name.' => 'Twee workflows ("%s" en "%s") hebben beide dezelfde naam ("%s") en ondersteunen beide de huidige toolset ("%s", "%s"). Elke workflow in een bepaalde toolset moet een unieke naam hebben.',
  'Linter Rules' => 'Linterregels',
  'Void casts (`%s`) are not available before PHP 8.4.' => 'Void casts (`%s`) zijn vóór PHP 8.4 niet beschikbaar.',
  'Preparing to run a command in directory "%s", but that directory is not executable (the current process does not have "+x" permission).' => 'Voorbereiden om een opdracht uit te voeren in map "%s", maar die map is niet uitvoerbaar (het huidige proces heeft geen "+x"-toestemming).',
  'It is late in the evening. The air is cool and still, and filled with the sound of crickets.' => 'Het is laat in de avond. De lucht is koel en stil, en gevuld met het geluid van krekels.',
  '(The Empty Tree)' => '(De lege boom)',
  'VERY META' => 'HEEL META',
  'Shelving uncommitted changes from working copy.' => 'Niet-gecommitte wijzigingen van de werkkopie opbergen.',
  'OKAY' => 'OK',
  '%s locally modified path(s) are not included in this revision:' => array(
    'Een lokaal gewijzigd pad is niet opgenomen in deze versie:',
    'Lokaal gewijzigde paden zijn niet opgenomen in deze versie:',
  ),
  'Failed to JSON encode value (%s): %s.' => 'JSON-codering van waarde (%s) is mislukt: %s.',
  'Landing the active commit, "%s".' => 'De actieve commit "%s" wordt geland.',
  'IP address "%s" is not properly formatted: the segments of an address must be hexadecimal values between "0000" and "ffff", inclusive. Segment "%s" is not.' => 'IP-adres "%s" is niet correct opgemaakt: de segmenten van een adres moeten hexadecimale waarden zijn tussen "0000" en "ffff" (inclusief). Segment "%s" is dat niet.',
  '          Supports: cli
          List the available and configured linters, with information about
          what they do and which versions are installed.

          if __name__ is provided, the linter with that name will be displayed.' => '          Ondersteunt: cli
          De beschikbare en geconfigureerde linters weergeven, met informatie over
          wat ze doen en welke versies zijn geïnstalleerd.

          Als __naam__ is opgegeven, wordt de linter met die naam weergegeven.',
  'Unable to move %s to %s.' => 'Kan %s niet verplaatsen naar %s.',
  'Local branch "%s" tracks an upstream, but there is no path to a remote; ignoring branch upstream.' => 'Lokale branch "%s" volgt een upstream, maar er is geen pad naar een remote; branch-upstream wordt genegeerd.',
  'Prompt ("%s") is executing, but it is not properly bound to the invoking workflow. You may have called "newPrompt()" to execute a prompt instead of "getPrompt()". Use "newPrompt()" when defining prompts and "getPrompt()" when executing them.' => 'Prompt ("%s") wordt uitgevoerd, maar is niet correct gebonden aan de aanroepende workflow. Mogelijk hebt u "newPrompt()" aangeroepen om een prompt uit te voeren in plaats van "getPrompt()". Gebruik "newPrompt()" bij het definiëren van prompts en "getPrompt()" bij het uitvoeren ervan.',
  'BROKEN' => 'DEFECT',
  'Unparsable Mercurial status line \'%s\'.' => 'Niet te verwerken Mercurial-statusregel \'%s\'.',
  'Private methods in traits are not available before PHP 8.0.' => 'Privémethoden in kenmerken zijn vóór PHP 8.0 niet beschikbaar.',
  'You\'re running a command which operates on a range of revisions (usually, from some revision to HEAD) but have not specified the revision that should determine the start of the range.

Previously, arc assumed you meant \'%s\' when you did not specify a start revision, but this behavior does not make much sense in most workflows outside of Facebook\'s historic %s workflow.

arc no longer assumes \'%s\'. You must specify a relative commit explicitly when you invoke a command (e.g., `%s`, not just `%s`) or select a default for this working copy.

In most cases, the best default is \'%s\'. You can also select \'%s\' to preserve the old behavior, or some other remote or branch. But you almost certainly want to select \'origin/master\'.

(Technically: the merge-base of the selected revision and HEAD is used to determine the start of the commit range.)' => 'U voert een opdracht uit die werkt op een bereik van versies (meestal van een bepaalde versie tot HEAD), maar u hebt niet opgegeven welke versie het begin van het bereik moet bepalen.

Voorheen nam arc aan dat u \'%s\' bedoelde wanneer u geen startversie opgaf, maar dit gedrag is niet logisch in de meeste workflows buiten de historische %s-workflow van Facebook.

arc neemt niet langer \'%s\' aan. U moet expliciet een relatieve commit opgeven wanneer u een opdracht aanroept (bijv. `%s`, niet alleen `%s`) of een standaard selecteren voor deze werkkopie.

In de meeste gevallen is de beste standaard \'%s\'. U kunt ook \'%s\' selecteren om het oude gedrag te behouden, of een andere remote of branch. Maar u wilt vrijwel zeker \'origin/main\' selecteren.

(Technisch: de merge-base van de geselecteerde versie en HEAD wordt gebruikt om het begin van het commitbereik te bepalen.)',
  'Configuration option ("%s") specified with "--config" flag is not a recognized option.' => 'Configuratieoptie ("%s") opgegeven met de vlag "--config" is geen herkende optie.',
  'Other locations: %s' => 'Andere locaties: %s',
  'UNIT ERRORS' => 'UNITFOUTEN',
  'Associates this working copy with a specific installation of %s (or compatible software).' => 'Koppelt deze werkkopie aan een specifieke installatie van %s (of compatibele software).',
  'Upload complete.' => 'Upload voltooid.',
  'When using \'%s\' to update a revision, specify an update message with \'%s\'. (Normally, we\'d launch an editor to ask you for a message, but can not do that because stdin is the diff source.)' => 'Wanneer u \'%s\' gebruikt om een versie bij te werken, geef een updatebericht op met \'%s\'. (Normaal gesproken zouden we een editor openen om u om een bericht te vragen, maar dat kan niet omdat stdin de diff-bron is.)',
  'Remote "%s" was selected by reading "%s" configuration.' => 'Remote "%s" is geselecteerd door de "%s"-configuratie te lezen.',
  'Unable to open stderr temporary file ("%s") for reading.' => 'Kan tijdelijk stderr-bestand ("%s") niet openen om te lezen.',
  'Unable to locate interpreter "%s" to run linter %s. You may need to install the interpreter, or adjust your linter configuration.' => 'Kan interpreter "%s" niet vinden om linter %s uit te voeren. Mogelijk moet u de interpreter installeren of uw linterconfiguratie aanpassen.',
  'Landing onto remote "%s", the default remote under Git.' => 'Landen op remote "%s", de standaard remote onder Git.',
  'Hardpoint engine can not resolve: no request made progress during the last update cycle and there are no futures awaiting resolution.' => 'Hardpoint-engine kan niet oplossen: geen verzoek heeft voortgang gemaakt tijdens de laatste updatecyclus en er zijn geen futures die wachten op oplossing.',
  'Unrecognized item status \'%s\'.' => 'Niet-herkende itemstatus \'%s\'.',
  'There should be no whitespace after the object operator.' => 'Er mag geen witruimte staan na de objectoperator.',
  'Checks for syntax errors in PHP files.' => 'Controleert op syntaxisfouten in PHP-bestanden.',
  'HTTP Basic Auth is not supported by %s.' => 'HTTP Basic Auth wordt niet ondersteund door %s.',
  'Local Config File' => 'Lokaal configuratiebestand',
  'Update the details for a revision, then save and exit.' => 'De details voor een versie bijwerken, opslaan en afsluiten.',
  'Will merge into target "%s", selected with the "--into" flag.' => 'Wordt gemerged naar doel "%s", geselecteerd met de vlag "--into".',
  'Did you mean:' => 'Bedoelde u:',
  'This software is now up to date.' => 'Deze software is nu up-to-date.',
  'Message has unresolved errors.' => 'Bericht heeft onopgeloste fouten.',
  'Error' => 'Fout',
  'Object Operator Spacing' => 'Objectoperatorspatiëring',
  'PayPal API call failed: %s' => 'PayPal API-aanroep mislukt: %s',
  'Revision includes changes to %s path(s) that do not exist:' => array(
    'Versie omvat wijzigingen aan een pad dat niet bestaat:',
    'Versie omvat wijzigingen aan paden die niet bestaan:',
  ),
  'Creating new bookmark "%s" from "%s".' => 'Nieuwe bladwijzer "%s" aanmaken vanuit "%s".',
  'TODO: Support merge strategies' => 'TODO: Mergestrategieën ondersteunen',
  'arc could not identify any existing revision in your working copy.' => 'arc kon geen bestaande versie identificeren in uw werkkopie.',
  'Learn More:' => 'Meer informatie:',
  'This syntax indicates there is an unresolved merge conflict.' => 'Deze syntaxis geeft aan dat er een onopgelost mergeconflict is.',
  'State has multiple ambiguous revisions refs.' => 'Status heeft meerdere dubbelzinnige versierefs.',
  'Command (of class "%s") was constructed with a "PhutilCommandString", but also passed arguments. When using a prebuilt command, you must not pass arguments.' => 'Opdracht (van klasse "%s") is geconstrueerd met een "PhutilCommandString", maar er zijn ook argumenten doorgegeven. Bij het gebruik van een voorgebouwde opdracht mag u geen argumenten doorgeven.',
  'Upload one or more files from local disk.' => 'Een of meer bestanden uploaden vanaf de lokale schijf.',
  'Newline After PHP Open Tag' => 'Nieuwe regel na PHP-opentag',
  'Hardpoint ("%s") is not registered on this object (of type "%s") so the definition object does not exist. Hardpoints are: %s.' => 'Hardpoint ("%s") is niet geregistreerd op dit object (van type "%s") dus het definitieobject bestaat niet. Hardpoints zijn: %s.',
  'Use "Commandeer" in the web interface to become the author of a revision.' => 'Gebruik "Commandeer" in de webinterface om de auteur van een versie te worden.',
  'LINT MESSAGES' => 'LINTBERICHTEN',
  'Use "--revision <id>" to specify which revision you want to amend.' => 'Gebruik "--revision <id>" om op te geven welke versie u wilt wijzigen.',
  'Exiting (Client Limit)' => 'Afsluiten (clientlimiet)',
  'File "%s"' => 'Bestand "%s"',
  'Failed to parse URI "%s" as a Git URI.' => 'Kan URI "%s" niet verwerken als een Git-URI.',
  'Incomplete directories in working copy:' => 'Onvolledige mappen in werkkopie:',
  'Unable to write to logfile "%s"!' => 'Kan niet schrijven naar logbestand "%s"!',
  'Unnecessary Symbol Alias' => 'Onnodige symboolalias',
  'Always create a new revision.' => 'Altijd een nieuwe versie aanmaken.',
  'User Symbol "%s"' => 'Gebruikerssymbool "%s"',
  'Class or interface symbol "%s" should be written as "%s".' => 'Klasse- of interfacesymbool "%s" moet worden geschreven als "%s".',
  'Press ^C again to exit.' => 'Druk nogmaals op ^C om af te sluiten.',
  'You have incompletely checked out directories in this working copy. Fix them before proceeding.\'' => 'U hebt onvolledig uitgecheckte mappen in deze werkkopie. Herstel ze voordat u doorgaat.',
  'Lint for %s:' => 'Lint voor %s:',
  'Exiting (Idle Limit)' => 'Afsluiten (inactiviteitslimiet)',
  'Call to phutil_nonempty_scalar() expected: a string; or stringlike object; or int; or float. Got: %s.' => 'Aanroep van phutil_nonempty_scalar() verwachtte: een tekenreeks; of tekenreeksachtig object; of int; of float. Kreeg: %s.',
  'Expected \'Date:\'.' => 'Verwachtte \'Date:\'.',
  'JSON protocol message must be an array, got some other type ("%s").' => 'JSON-protocolbericht moet een array zijn, maar kreeg een ander type ("%s").',
  'Advice' => 'Advies',
  'Unable to resolve argument "%s".' => 'Kan argument "%s" niet oplossen.',
  'Unable to resolve startpoint "%s".' => 'Kan startpunt "%s" niet oplossen.',
  'The remote host refused the connection. This usually means the host is not running an HTTP server, or the network is blocking connections from this machine. Verify you can connect to the remote host from this host.' => 'De externe host heeft de verbinding geweigerd. Dit betekent meestal dat de host geen HTTP-server draait, of dat het netwerk verbindingen van deze machine blokkeert. Controleer of u verbinding kunt maken met de externe host vanaf deze machine.',
  'The server does not support staging areas.' => 'De server ondersteunt geen staginggebieden.',
  'Connect to server specified by __uri__.' => 'Verbinden met server opgegeven door __url__.',
  'Expected type \'%s\', got type \'%s\'.' => 'Verwachtte type \'%s\', maar kreeg type \'%s\'.',
  'DEPRECATED' => 'VEROUDERD',
  'Unable to unlock file!' => 'Kan bestand niet ontgrendelen!',
  'String conversion from encoding \'%s\' to encoding \'%s\' failed: %s' => 'Tekenreeksconversie van codering \'%s\' naar codering \'%s\' is mislukt: %s',
  'Configured command aliases. Use the "alias" workflow to define aliases.' => 'Geconfigureerde opdrachtaliassen. Gebruik de "alias"-workflow om aliassen te definiëren.',
  'You can not reiterate over a %s object. The entire goal of the construct is to avoid keeping output in memory. What you are attempting to do is silly and doesn\'t make any sense.' => 'U kunt niet opnieuw itereren over een %s-object. Het hele doel van de constructie is om uitvoer niet in het geheugen te houden. Wat u probeert te doen is onzinnig en slaat nergens op.',
  'Successfully applied patch to the working copy.' => 'Patch toegepast op de werkkopie.',
  'Unstaged changes in working copy:' => 'Niet-gestage wijzigingen in werkkopie:',
  'Failed to unserialize object: %s' => 'Deserialiseren van object is mislukt: %s',
  'Use of Short Tag `%s`' => 'Gebruik van korte tag `%s`',
  'It is early morning. Glimses of sunlight peek through the trees and you hear the faint sound of birds overhead.' => 'Het is vroeg in de ochtend. Glimpen zonlicht piepen door de bomen en u hoort het zwakke geluid van vogels boven u.',
  'Flag "--input" is not supported when reading pastes.' => 'Vlag "--input" wordt niet ondersteund bij het lezen van pastes.',
  'Pass in a custom configuration file path.' => 'Geef een aangepast configuratiebestandspad op.',
  'Reduce/reduce conflict: from state \'%s\', when a \'%s\' is encountered, it may be reduced in multiple ways: %s' => 'Reduce/reduce-conflict: vanuit status \'%s\', wanneer een \'%s\' wordt aangetroffen, kan het op meerdere manieren worden gereduceerd: %s',
  'Configured prompt aliases. Use the "prompts" workflow to show prompts and responses.' => 'Geconfigureerde promptaliassen. Gebruik de "prompts"-workflow om prompts en antwoorden weer te geven.',
  'List Assignment' => 'Lijsttoewijzing',
  '`%s` Should Be `%s`' => '`%s` moet `%s` zijn',
  'ACTUAL VALUE' => 'WERKELIJKE WAARDE',
  'No HTTP engine extension exists with extension key "%s".' => 'Er bestaat geen HTTP-engine-uitbreiding met uitbreidingssleutel "%s".',
  'P4 SYNC' => 'P4 SYNC',
  'Apply changes from a git patchfile or unified patchfile.' => 'Wijzigingen toepassen vanuit een git-patchbestand of unified patchbestand.',
  'Self Member Reference' => 'Zelflidverwijzing',
  'Unable to upload file: path "%s" does not exist.' => 'Kan bestand niet uploaden: pad "%s" bestaat niet.',
  'Multiple access type modifiers are not allowed.' => 'Meerdere toegangstypemodifiers zijn niet toegestaan.',
  'Engine \'%s\' does not support %s.' => 'Engine \'%s\' ondersteunt %s niet.',
  'Use PHP-Parser instead of XHPAST.' => 'PHP-Parser gebruiken in plaats van XHPAST.',
  'Class Not Extending `%s`' => 'Klasse breidt `%s` niet uit',
  'Browse Query "%s"' => 'Bladerzoekopdracht "%s"',
  'LOAD ERROR' => 'LAADFOUT',
  'Options "D12345", "--revision", "--diff", "--arcbundle" and "--patch" are mutually exclusive. Choose exactly one patch source.' => 'Opties "D12345", "--revision", "--diff", "--arcbundle" en "--patch" sluiten elkaar uit. Kies precies één patchbron.',
  'Failed to decode JSON object.' => 'Decoderen van JSON-object is mislukt.',
  'You must provide a nonempty commit message.' => 'U moet een niet-leeg commitbericht opgeven.',
  '%s runs all tests.' => '%s voert alle tests uit.',
  'Trying to execute a class map query for descendants of class "%s", but no such class or interface exists.' => 'Poging om een klassemapzoekopdracht uit te voeren voor afstammelingen van klasse "%s", maar een dergelijke klasse of interface bestaat niet.',
  'Argument to "phutil_microseconds_since(...)" should be a value returned from "microtime(true)".' => 'Argument voor "phutil_microseconds_since(...)" moet een waarde zijn die is teruggegeven door "microtime(true)".',
  'Declaration Formatting' => 'Declaratieopmaak',
  'Normally, if a patch has dependencies that are not present in the working copy, arc tries to apply them as well. This flag prevents such work.' => 'Normaal gesproken probeert arc, als een patch afhankelijkheden heeft die niet aanwezig zijn in de werkkopie, deze ook toe te passen. Deze vlag voorkomt dergelijk werk.',
  'Regular expression engine emitted message: %s' => 'Reguliere-expressie-engine heeft bericht uitgegeven: %s',
  'Argument "%s" is ambiguous.' => 'Argument "%s" is dubbelzinnig.',
  'Install puppet-lint using `%s`.' => 'Installeer puppet-lint met `%s`.',
  'This repository has no VCS UUID (this is normal for git/hg).' => 'Deze repository heeft geen VCS-UUID (dit is normaal voor git/hg).',
  'Call to "proc_open()" to open a subprocess failed: %s' => 'Aanroep van "proc_open()" om een subproces te openen is mislukt: %s',
  'Library "%s" (in "%s") is on branch "%s", but this branch is not supported for automatic upgrades. Supported branches are: %s.' => 'Bibliotheek "%s" (in "%s") staat op branch "%s", maar deze branch wordt niet ondersteund voor automatische upgrades. Ondersteunde branches zijn: %s.',
  'Successfully %s patch.' => 'Patch is %s.',
  'Unable to find any local branches to update, staying on detached head.' => 'Kan geen lokale branches vinden om bij te werken, blijft op losstaande head.',
  'A copy was saved to %s.' => 'Een kopie is opgeslagen in %s.',
  'Title for the paste.' => 'Titel voor de paste.',
  'AWS Request ID: %s' => 'AWS-verzoek-ID: %s',
  'Priority' => 'Prioriteit',
  'Unnecessary Semicolon' => 'Overbodige puntkomma',
  'There is nothing left to commit. None of the modified paths exist.' => 'Er is niets meer om te committen. Geen van de gewijzigde paden bestaat.',
  'Unable to resolve default browse target.' => 'Kan het standaard bladerdoel niet oplossen.',
  'Argument "%s" conflicts with unspecified argument "%s".' => 'Argument "%s" conflicteert met niet-opgegeven argument "%s".',
  'Unable to write configuration: there is no writable configuration source in the "%s" scope.' => 'Kan configuratie niet schrijven: er is geen schrijfbare configuratiebron in het bereik "%s".',
  'Closed' => 'Gesloten',
  'To go back to how things were before you ran "arc land", run these %s command(s):' => array(
    'Om terug te gaan naar hoe het was voordat u "arc land" uitvoerde, voer deze opdracht uit:',
    'Om terug te gaan naar hoe het was voordat u "arc land" uitvoerde, voer deze opdrachten uit:',
  ),
  'Useless Overriding Method' => 'Nutteloze overschrijvende methode',
  'Perform a clean rebuild, ignoring caches. Thorough, but slow.' => 'Een schone herbouw uitvoeren, caches negerend. Grondig, maar langzaam.',
  'Multiple exceptions were raised during test execution.' => 'Er zijn meerdere uitzonderingen opgetreden tijdens de testuitvoering.',
  'Expected exactly one argument to "user(...)" with a user symbol.' => 'Verwachtte precies één argument voor "user(...)" met een gebruikerssymbool.',
  'Semicolon Spacing' => 'Puntkommaspatiëring',
  'Trying rule \'%s\'.' => 'Regel \'%s\' proberen.',
  'ID' => 'ID',
  'Allows you to disable all lint messages for a file by putting "%s" in the file body.' => 'Hiermee kunt u alle lintberichten voor een bestand uitschakelen door "%s" in de bestandsinhoud te plaatsen.',
  'AMBIGUOUS SYMBOL' => 'DUBBELZINNIG SYMBOOL',
  'PyLint is a Python source code analyzer which looks for programming errors, helps enforcing a coding standard and sniffs for some code smells.' => 'PyLint is een Python-broncodeanalyzer die zoekt naar programmeerfouten, helpt bij het afdwingen van een codestandaard en ruikt aan codegeur.',
  'This loop reuses iterator variables (%s) from an outer loop. You might be clobbering the outer iterator. Change the inner loop to use a different iterator name.' => 'Deze lus hergebruikt iteratorvariabelen (%s) van een buitenste lus. U overschrijft mogelijk de buitenste iterator. Wijzig de binnenste lus om een andere iteratornaam te gebruiken.',
  'This codebase targets PHP %s, but nowdoc was not introduced until PHP 5.3.' => 'Deze codebase richt zich op PHP %s, maar nowdoc is pas geïntroduceerd in PHP 5.3.',
  'Implode With Glue First' => 'Implode met lijm eerst',
  'Diff for \'%s\' with context is %s bytes in length. Generally, source changes should not be this large.' => array(
    
    array(
      'Diff voor \'%s\' met context is %s byte lang. Over het algemeen mogen bronwijzigingen niet zo groot zijn.',
      'Diff voor \'%s\' met context is %s bytes lang. Over het algemeen mogen bronwijzigingen niet zo groot zijn.',
    ),
  ),
  'Deleted After Multiple Copy' => 'Verwijderd na meervoudige kopie',
  'Naming Conventions' => 'Naamgevingsrichtlijnen',
  'Failed to remove file \'%s\'!' => 'Verwijderen van bestand \'%s\' is mislukt!',
  'Argument specification MUST have a \'name\'.' => 'Argumentspecificatie MOET een \'name\' hebben.',
  'To configure Git to ignore certain files in this working copy, add the file paths to "%s".' => 'Om Git te configureren om bepaalde bestanden in deze werkkopie te negeren, voeg de bestandspaden toe aan "%s".',
  'Unable to determine the installed version of binary "%s". This version is required.' => 'Kan de geïnstalleerde versie van binair bestand "%s" niet bepalen. Deze versie is vereist.',
  '%s must return an edge list array for each provided node, or the cycle detection algorithm may not terminate.' => '%s moet een verbindingslijstarray teruggeven voor elk opgegeven knooppunt, anders wordt het cyclusdetectie-algoritme mogelijk niet beëindigd.',
  'Specify a command to execute using one or more arguments.' => 'Geef een opdracht op om uit te voeren met een of meer argumenten.',
  'MERGING' => 'MERGEN',
  '`%s` Containing `%s` Methods Must Be Declared `%s`' => '`%s` met `%s`-methoden moet worden gedeclareerd als `%s`',
  '(Old and new values are identical.)' => '(Oude en nieuwe waarden zijn identiek.)',
  'Parent of: %s %s' => 'Ouder van: %s %s',
  'Unable to locate script "%s" to run linter %s. You may need to install the script, or adjust your linter configuration.' => 'Kan script "%s" niet vinden om linter %s uit te voeren. Mogelijk moet u het script installeren of uw linterconfiguratie aanpassen.',
  'This workflow (\'%s\') requires authentication, override %s to return true.' => 'Deze workflow (\'%s\') vereist authenticatie, overschrijf %s om true terug te geven.',
  'Parse Error' => 'Verwerkingsfout',
  'You can see the exact changes that will be sent by running this command:' => 'U kunt de exacte wijzigingen die worden verzonden bekijken door deze opdracht uit te voeren:',
  'Upload files.' => 'Bestanden uploaden.',
  'You can fix these paths by running \'%s\' on them.' => 'U kunt deze paden herstellen door \'%s\' erop uit te voeren.',
  'Call to "assertCaught(..., <junk>, ...)" for test case "%s" passed bad value for test result. Expected null, Exception, or Throwable; got: %s.' => 'Aanroep van "assertCaught(..., <junk>, ...)" voor testcase "%s" heeft een incorrecte waarde doorgegeven voor het testresultaat. Verwachtte null, Exception of Throwable; kreeg: %s.',
  'Certificate installed.' => 'Certificaat geïnstalleerd.',
  'Merging with "%s" strategy, configured with "%s".' => 'Mergen met "%s"-strategie, geconfigureerd met "%s".',
  'SKIP STAGING' => 'STAGING OVERSLAAN',
  'Error #%d executing svn info against \'%s\'.' => 'Fout #%d bij het uitvoeren van svn info tegen \'%s\'.',
  'Failed to set system locale (to "%s").' => 'Instellen van systeemtaalregio (op "%s") is mislukt.',
  'The "onto" refs you have selected are connected to multiple different remotes via Git branch upstreams. Use "--onto-remote" to select a single remote.' => 'De "onto"-refs die u hebt geselecteerd zijn verbonden met meerdere verschillende remotes via Git branch-upstreams. Gebruik "--onto-remote" om een enkele remote te selecteren.',
  'Class Name Literal' => 'Klassenaamliteraal',
  'Name Error' => 'Naamfout',
  '**alias**' => '**alias**',
  '...and the current working copy state will be sent to Differential, because %s' => '...en de huidige werkkopie-status wordt naar Differential gestuurd, omdat %s',
  'Land revisions you are not the author of?' => 'Versies landen waarvan u niet de auteur bent?',
  '**prompts** __workflow__' => '**prompts** __workflow__',
  '(PROTOTYPE) Record a copy of the test results on the specified Harbormaster build target.' => '(PROTOTYPE) Een kopie van de testresultaten opnemen op het opgegeven Harbormaster-builddoel.',
  'Duplicate Symbol' => 'Dubbel symbool',
  'Implicit Fallthrough' => 'Impliciete doorval',
  'Provide a map from lint codes to adjusted severity levels: error, warning, advice, autofix or disabled.' => 'Geef een toewijzing op van lintcodes naar aangepaste ernstniveaus: error, warning, advice, autofix of disabled.',
  'Unexpected `%s` Value' => 'Onverwachte `%s`-waarde',
  'Failed to match against branch pattern "%s".' => 'Kan niet matchen met branchpatroon "%s".',
  'LOCAL CYCLE' => 'LOKALE CYCLUS',
  'Extension ("%s") defines invalid alias ("%s") for configuration key ("%s"). Configuration keys and aliases: may only contain lowercase letters, numbers, hyphens, underscores, and periods; must start with a letter; and must be at least three characters long.' => 'Uitbreiding ("%s") definieert incorrecte alias ("%s") voor configuratiesleutel ("%s"). Configuratiesleutels en aliassen: mogen alleen kleine letters, cijfers, koppeltekens, onderstrepingstekens en punten bevatten; moeten beginnen met een letter; en moeten minstens drie tekens lang zijn.',
  'Functions which should be considered deprecated.' => 'Functies die als verouderd moeten worden beschouwd.',
  'Connection could not be initiated. This usually indicates a DNS problem: verify the domain name is correct, that you can perform a DNS lookup for it from this machine. (Did you add the domain to `%s` on some other machine, but not this one?) This might also indicate that you specified the wrong port.' => 'Verbinding kon niet worden gestart. Dit duidt meestal op een DNS-probleem: controleer of de domeinnaam correct is en of u een DNS-lookup kunt uitvoeren vanaf deze machine. (Hebt u het domein toegevoegd aan `%s` op een andere machine, maar niet op deze?) Dit kan ook aangeven dat u de verkeerde poort hebt opgegeven.',
  'Resolved commit \'%s\' from rule \'%s\'.' => 'Commit \'%s\' opgelost vanuit regel \'%s\'.',
  'When landing multiple revisions at once, push and rebase after each merge completes instead of waiting until all merges are completed to push.' => 'Bij het landen van meerdere versies tegelijk, pushen en rebasen na elke voltooide merge in plaats van te wachten tot alle merges zijn voltooid om te pushen.',
  'HEAD has been amended with \'Differential Revision:\', as specified by \'%s\' in your %s \'base\' configuration.' => 'HEAD is gewijzigd met \'Differential Revision:\', zoals opgegeven door \'%s\' in uw %s \'base\'-configuratie.',
  'Untracked changes in working copy:' => 'Niet-gevolgde wijzigingen in werkkopie:',
  'Hardpoint generator (for query "%s") yielded an unexpected value (of type "%s").' => 'Hardpoint-generator (voor zoekopdracht "%s") leverde een onverwachte waarde op (van type "%s").',
  'The "execute()" method of "PhutilExecPassthru" is deprecated and calls should be replaced with "resolve()". See T13660.' => 'De methode "execute()" van "PhutilExecPassthru" is verouderd en aanroepen moeten worden vervangen door "resolve()". Zie T13660.',
  'List of prompt responses.' => 'Lijst van promptantwoorden.',
  'Then paste the API Token on that page below.' => 'Plak vervolgens het API-token van die pagina hieronder.',
  'Peforce remote "%s" was selected because the existence of this remote implies this working copy was synchronized from a Perforce repository.' => 'Perforce-remote "%s" is geselecteerd omdat het bestaan van deze remote impliceert dat deze werkkopie is gesynchroniseerd vanuit een Perforce-repository.',
  'Failed to push lfs changes to staging area. Correct the issue, or use --skip-staging to skip this step.' => 'Pushen van lfs-wijzigingen naar het staginggebied is mislukt. Los het probleem op, of gebruik --skip-staging om deze stap over te slaan.',
  'RULES' => 'REGELS',
  'Installed shell completion support for "%s" to "%s".' => 'Shell-aanvullingsondersteuning voor "%s" geïnstalleerd in "%s".',
  'There was an error verifying the SSL Certificate Authority while negotiating the SSL connection. This usually indicates that you are using a self-signed certificate but have not added your CA to the CA bundle. See instructions in "%s".' => 'Er is een fout opgetreden bij het verifiëren van de SSL-certificaatautoriteit tijdens het onderhandelen van de SSL-verbinding. Dit duidt er meestal op dat u een zelfondertekend certificaat gebruikt maar uw CA niet hebt toegevoegd aan de CA-bundel. Zie instructies in "%s".',
  'LINT ERRORS' => 'LINTFOUTEN',
  'Base revisions of changed paths are mismatched. Update all paths to the same base revision before creating a diff: 

%s' => 'Basisversies van gewijzigde paden komen niet overeen. Werk alle paden bij naar dezelfde basisversie voordat u een diff aanmaakt: 

%s',
  'You can not add new actions to an exiting agent.' => 'U kunt geen nieuwe handelingen toevoegen aan een afsluitende agent.',
  'To install shell completion support for "%s", a new "%s" file will be created with this content:' => 'Om shell-aanvullingsondersteuning voor "%s" te installeren, wordt een nieuw bestand "%s" aangemaakt met deze inhoud:',
  'The diff or revision you specified is either invalid or you don\'t have permission to view it.' => 'De diff of versie die u hebt opgegeven is incorrect of u hebt geen toestemming om deze te bekijken.',
  'Install `%s` from <%s>.' => 'Installeer `%s` van <%s>.',
  'Configuration source ("%s") has no value for key ("%s").' => 'Configuratiebron ("%s") heeft geen waarde voor sleutel ("%s").',
  'Create %s new branche(s) in the remote?' => array(
    'Nieuwe branch aanmaken in de remote?',
    'Nieuwe branches aanmaken in de remote?',
  ),
  'You can not execute an HTTP future with both a raw request body and structured request data.' => 'U kunt geen HTTP-future uitvoeren met zowel een ruwe verzoekinhoud als gestructureerde verzoekgegevens.',
  'Writing %s...' => '%s schrijven...',
  'Use `%s` instead of `%s` to indicate public visibility.' => 'Gebruik `%s` in plaats van `%s` om publieke zichtbaarheid aan te geven.',
  'Returning to original branch "%s" in original state.' => 'Terugkeren naar oorspronkelijke branch "%s" in oorspronkelijke status.',
  'Landing onto target "%s", the default target under Mercurial.' => 'Landen op doel "%s", het standaarddoel onder Mercurial.',
  'You are installing a standard API token, but a CLI API token was expected. If you\'re writing a script, consider passing the token at runtime with --conduit-token instead of installing it.' => 'U installeert een standaard API-token, maar een CLI API-token werd verwacht. Als u een script schrijft, overweeg dan het token tijdens runtime door te geven met --conduit-token in plaats van het te installeren.',
  'Unable to connect socket! Error #%d: %s' => 'Kan geen verbinding maken met socket! Fout #%d: %s',
  'Failed to set socket nonblocking!' => 'Instellen van socket als niet-blokkerend is mislukt!',
  'Will merge into target "%s" by default, because this is the first "onto" target.' => 'Wordt standaard gemerged naar doel "%s", omdat dit het eerste "onto"-doel is.',
  'USAGE EXCEPTION' => 'GEBRUIKSUITZONDERING',
  'Unable to locate %s. Configure it with the \'%s\' option in %s.' => 'Kan %s niet vinden. Configureer het met de optie \'%s\' in %s.',
  'Always disable coverage information.' => 'Dekkingsinformatie altijd uitschakelen.',
  'Generated Code' => 'Gegenereerde code',
  'Unable to load hardpoint "%s" for object (of type "%s"). All hardpoint query tasks resolved but none attached a value to the hardpoint.' => 'Kan hardpoint "%s" niet laden voor object (van type "%s"). Alle hardpoint-querytaken zijn opgelost maar geen enkele heeft een waarde aan het hardpoint gekoppeld.',
  'Multiple supported shells were detected. Unable to determine which shell to install autocompletion rules for. Use "--shell" to select a shell.' => 'Er zijn meerdere ondersteunde shells gedetecteerd. Kan niet bepalen voor welke shell autoaanvullingsregels geïnstalleerd moeten worden. Gebruik "--shell" om een shell te selecteren.',
  '(The Empty Void)' => '(De lege leegte)',
  'Revision %s, %s' => 'Versie %s, %s',
  'Assertion failed, expected values to be equal (at %s:%d): %s' => 'Assertie mislukt, verwachtte dat waarden gelijk zijn (op %s:%d): %s',
  'Trailing Whitespace at EOF' => 'Afsluitende witruimte aan einde van bestand',
  'You don\'t own revision %s: "%s". Normally, you should only update revisions you own. You can "Commandeer" this revision from the web interface if you want to become the owner.

Update this revision anyway?' => 'U bent niet de eigenaar van versie %s: "%s". Normaal gesproken mag u alleen versies bijwerken waarvan u de eigenaar bent. U kunt deze versie "Commandeeren" vanuit de webinterface als u de eigenaar wilt worden.

Deze versie toch bijwerken?',
  'Arguments "--into" and "--into-empty" are mutually exclusive.' => 'Argumenten "--into" en "--into-empty" sluiten elkaar uit.',
  'Imported symbols should not be prefixed with `%s`.' => 'Geïmporteerde symbolen mogen niet worden voorafgegaan door `%s`.',
  'When creating a revision, add reviewers.' => 'Bij het aanmaken van een versie, beoordelaars toevoegen.',
  'Trailing Whitespace' => 'Afsluitende witruimte',
  'Expected \'\\ No newline at end of file\'.' => 'Verwachtte \'\\ No newline at end of file\'.',
  'Interface symbol "%s" should be written as "%s".' => 'Interfacesymbool "%s" moet worden geschreven als "%s".',
  'Preparing merge into local target "%s", at commit "%s".' => 'Merge naar lokaal doel "%s" voorbereiden, bij commit "%s".',
  'Call to %s(%s, ...) failed.' => 'Aanroep van %s(%s, ...) is mislukt.',
  'Unnecessary Double Quotes' => 'Onnodige dubbele aanhalingstekens',
  'Some rules can never be reached from any production: %s' => 'Sommige regels kunnen nooit worden bereikt vanuit een productie: %s',
  'Can not draw a grid with no columns!' => 'Kan geen raster tekenen zonder kolommen!',
  '%s suppresses unassigned' => '%s onderdrukt niet-toegewezen',
  'French (France)' => 'Frans (Frankrijk)',
  'Unable to write log "%s" to path "%s" because the path is not writable.' => 'Kan log "%s" niet schrijven naar pad "%s" omdat het pad niet schrijfbaar is.',
  'Included changes:' => 'Opgenomen wijzigingen:',
  'Command failed with error #%s!' => 'Opdracht mislukt met fout #%s!',
  'The default response to this prompt is "%s".' => 'Het standaardantwoord op deze prompt is "%s".',
  'Received error from Slack: %s' => 'Fout ontvangen van Slack: %s',
  'Failed to read file!' => 'Lezen van bestand is mislukt!',
  'Branch "%s" does not exist in the local working copy.' => 'Branch "%s" bestaat niet in de lokale werkkopie.',
  'Refs were selected with the "--onto" flag: %s.' => 'Refs zijn geselecteerd met de vlag "--onto": %s.',
  'Use `%s` instead of `%s`.' => 'Gebruik `%s` in plaats van `%s`.',
  'Unable to locate %s coverage runner (have you built yet?)' => 'Kan %s-dekkingsrunner niet vinden (hebt u al gebouwd?)',
  'PROMPT' => 'PROMPT',
  'This configuration option ("%s") does not support runtime definition with "--config".' => 'Deze configuratieoptie ("%s") ondersteunt geen runtimedefinitie met "--config".',
  'You have a saved revision message in \'%s\'.
%sYou can use this message, or discard it.' => 'U hebt een opgeslagen versiebericht in \'%s\'.
%sU kunt dit bericht gebruiken of verwerpen.',
  'Hardpoint ("%s") already has attached data.' => 'Hardpoint ("%s") heeft al gekoppelde gegevens.',
  'Array Element' => 'Arrayelement',
  'Selected "onto" ref "%s" is invalid: the empty string is not a valid ref.' => 'Geselecteerde "onto"-ref "%s" is incorrect: de lege tekenreeks is geen juiste ref.',
  'Use of `%s` in Static Context' => 'Gebruik van `%s` in statische context',
  'Instead of exporting changes from the working copy, export them from a Differential diff.' => 'In plaats van wijzigingen uit de werkkopie te exporteren, exporteer ze vanuit een Differential-diff.',
  'Show detailed information about options.' => 'Gedetailleerde informatie over opties weergeven.',
  'Push failed! Fix the error and run "arc land" again.' => 'Push mislukt! Los de fout op en voer "arc land" opnieuw uit.',
  '%s argument to %s must not be empty' => '%s-argument voor %s mag niet leeg zijn',
  '%s %s -> %s %s %s' => '%s %s -> %s %s %s',
  'Expected %s for %%P conversion.' => 'Verwachtte %s voor %%P-conversie.',
  'Provide the details for a new revision, then save and exit.' => 'Geef de details op voor een nieuwe versie, sla op en sluit af.',
  'Common causes are:

  - Your copy of %s is out of date.
    This is the most common cause.
    Update this copy of %s:

      %s

  - Some other library is out of date.
    Update the library this symbol appears in.

  - The symbol is misspelled.
    Spell the symbol name correctly.

  - You added the symbol recently, but have not updated
    the symbol map for the library.
    Run "arc liberate" in the library where the symbol is
    defined.

  - This symbol is defined in an external library.
    Use "@phutil-external-symbol" to annotate it.
    Use "grep" to find examples of usage.' => 'Veelvoorkomende oorzaken zijn:

  - Uw kopie van %s is verouderd.
    Dit is de meest voorkomende oorzaak.
    Werk deze kopie van %s bij:

      %s

  - Een andere bibliotheek is verouderd.
    Werk de bibliotheek bij waarin dit symbool voorkomt.

  - Het symbool is verkeerd gespeld.
    Spel de symboolnaam correct.

  - U hebt het symbool onlangs toegevoegd, maar de
    symboolmap voor de bibliotheek niet bijgewerkt.
    Voer "arc liberate" uit in de bibliotheek waar het symbool
    is gedefinieerd.

  - Dit symbool is gedefinieerd in een externe bibliotheek.
    Gebruik "@phutil-external-symbol" om het te annoteren.
    Gebruik "grep" om gebruiksvoorbeelden te vinden.',
  'Possible spelling error. You wrote \'%s\', but did you mean \'%s\'?' => 'Mogelijke spelfout. U schreef \'%s\', maar bedoelde u \'%s\'?',
  'See <%s>. The default merge strategy under Git with "history.immutable" has changed from "merge" to "squash". Your configuration is ambiguous under this behavioral change. (Use "--strategy" or configure "arc.land.strategy" to bypass this check.)' => 'Zie <%s>. De standaard mergestrategie onder Git met "history.immutable" is gewijzigd van "merge" naar "squash". Uw configuratie is dubbelzinnig onder deze gedragswijziging. (Gebruik "--strategy" of configureer "arc.land.strategy" om deze controle te omzeilen.)',
  'Unknown diff type.' => 'Onbekend diff-type.',
  '"arc amend" is only supported under Mercurial 2.2 or newer. Older versions of Mercurial do not support the "--amend" flag to "hg commit ...", which this workflow requires.' => '"arc amend" wordt alleen ondersteund onder Mercurial 2.2 of nieuwer. Oudere versies van Mercurial ondersteunen de vlag "--amend" voor "hg commit ..." niet, die deze workflow vereist.',
  'Since exactly one revision in Differential matches this working copy, it will be **updated** if you run \'%s\'.' => 'Omdat precies één versie in Differential overeenkomt met deze werkkopie, wordt deze **bijgewerkt** als u \'%s\' uitvoert.',
  'Assertion failed, expected \'%s\' (at %s:%d).' => 'Assertie mislukt, verwachtte \'%s\' (op %s:%d).',
  'Merge strategy "%s" specified with "--strategy" is unknown. Supported merge strategies are: %s.' => 'Mergestrategie "%s" opgegeven met "--strategy" is onbekend. Ondersteunde mergestrategieën zijn: %s.',
  'Expected exactly one change.' => 'Verwachtte precies één wijziging.',
  'Local branch "%s" has unpublished changes, checking it out but leaving them in place.' => 'Lokale branch "%s" heeft ongepubliceerde wijzigingen, wordt uitgecheckt maar wijzigingen blijven op hun plaats.',
  'This version control system does not support commit ranges.' => 'Dit versiebeheersysteem ondersteunt geen commitbereiken.',
  'Unexpected operator in static expression.' => 'Onverwachte operator in statische expressie.',
  'Class Not `%s` Or `%s`' => 'Klasse niet `%s` of `%s`',
  'Confirms history mutation in a working copy marked as immutable.' => 'Bevestigt geschiedenismutatie in een werkkopie die als onveranderlijk is gemarkeerd.',
  'Second hash argument must be a string.' => 'Tweede hashargument moet een tekenreeks zijn.',
  'it is the merge-base of the upstream of the current branch and HEAD, and matched the rule \'%s\' in your %s \'base\' configuration.' => 'het is de merge-base van de upstream van de huidige branch en HEAD, en kwam overeen met de regel \'%s\' in uw %s \'base\'-configuratie.',
  'Unable to get checksum.' => 'Kan controlesom niet ophalen.',
  'LOAD' => 'LADEN',
  'Open this page in your browser and log in if necessary:' => 'Open deze pagina in uw browser en meld u indien nodig aan:',
  'Attempting to reduce and rebase changes.' => 'Poging om wijzigingen te reduceren en te rebasen.',
  'A definition of "%s %s" in "%s" will be ignored.' => 'Een definitie van "%s %s" in "%s" wordt genegeerd.',
  'TODO: You are forcing a revision, but commits are associated with some other revision. Are you REALLY sure you want to land ALL these commits with a different unrelated revision???' => 'TODO: U forceert een versie, maar commits zijn gekoppeld aan een andere versie. Weet u ECHT zeker dat u AL deze commits wilt landen met een andere niet-gerelateerde versie???',
  'Unexpected return value from call to "%s": %s.' => 'Onverwachte retourwaarde van aanroep van "%s": %s.',
  'Specify one of \'%s\', \'%s\' or \'%s\' to choose an export format.' => 'Geef een van \'%s\', \'%s\' of \'%s\' op om een exportformaat te kiezen.',
  'Export change as an arc bundle. This format can represent all changes. These bundles can be applied with \'%s\'.' => 'Wijziging exporteren als een arc-bundel. Dit formaat kan alle wijzigingen vertegenwoordigen. Deze bundels kunnen worden toegepast met \'%s\'.',
  'Unknown object type "%s", supported types are: %s.' => 'Onbekend objecttype "%s", ondersteunde typen zijn: %s.',
  'When linting git repositories, amend HEAD with all patches suggested by lint without prompting.' => 'Bij het linten van git-repository\'s, HEAD wijzigen met alle patches die door lint worden voorgesteld zonder bevestiging.',
  'Expected a hunk header, like \'%s\' (svn), \'%s\' (svn properties), \'%s\' (git show), \'%s\' (git diff), \'%s\' (unified diff), or \'%s\' (hg diff or patch).' => 'Verwachtte een hunk-header, zoals \'%s\' (svn), \'%s\' (svn-eigenschappen), \'%s\' (git show), \'%s\' (git diff), \'%s\' (unified diff), of \'%s\' (hg diff of patch).',
  'Run every test associated with a tracked file in the working copy.' => 'Elke test uitvoeren die is gekoppeld aan een gevolgd bestand in de werkkopie.',
  'To push changes manually, run these %s command(s):' => array(
    'Om wijzigingen handmatig te pushen, voer deze opdracht uit:',
    'Om wijzigingen handmatig te pushen, voer deze opdrachten uit:',
  ),
  'Preparing merge into the empty state to create target "%s" in remote "%s".' => 'Merge naar de lege status voorbereiden om doel "%s" aan te maken in remote "%s".',
  'To do this, run: **%s**' => 'Voer hiervoor uit: **%s**',
  '`%s` methods cannot be marked as `%s`. This construct will cause a fatal error.' => '`%s`-methoden kunnen niet worden gemarkeerd als `%s`. Deze constructie veroorzaakt een onherstelbare fout.',
  'Lint issued unresolved warnings.' => 'Lint heeft onopgeloste waarschuwingen uitgegeven.',
  'The test failed in an abnormal or severe way. For example, the harness crashed instead of reporting a failure.' => 'De test is op een abnormale of ernstige manier mislukt. Bijvoorbeeld, het testharnas is gecrasht in plaats van een mislukking te melden.',
  'Dec' => 'dec',
  'Resolve these errors:' => 'Los deze fouten op:',
  'Channel closed while waiting for message!' => 'Kanaal gesloten tijdens het wachten op een bericht!',
  'Unable to push changes to the staging area.' => 'Kan wijzigingen niet pushen naar het staginggebied.',
  'SHELVE' => 'OPBERGEN',
  'Script and Regex' => 'Script en regex',
  'To install shell completion support for "%s", this line will be added to your existing "%s" file:' => 'Om shell-aanvullingsondersteuning voor "%s" te installeren, wordt deze regel toegevoegd aan uw bestaande bestand "%s":',
  'Instead of creating or updating a revision, only create a diff, which you may later attach to a revision.' => 'In plaats van een versie aan te maken of bij te werken, alleen een diff aanmaken die u later aan een versie kunt koppelen.',
  'Follow naming conventions: methods should be named using `%s`.' => 'Volg de naamgevingsrichtlijnen: methoden moeten met `%s` worden benoemd.',
  'These branches were selected:' => 'Deze branches zijn geselecteerd:',
  'You must provide a commit message.' => 'U moet een commitbericht opgeven.',
  'What do you want to name this library?' => 'Hoe wilt u deze bibliotheek noemen?',
  'Preparing to upgrade "%s"...' => 'Voorbereiden om "%s" te upgraden...',
  'No changes found. (Did you specify the wrong commit range?)' => 'Geen wijzigingen gevonden. (Hebt u het verkeerde commitbereik opgegeven?)',
  'Request specifies two values for key "%s", but parameter names must be unique if you are posting file data due to limitations with cURL.' => 'Verzoek specificeert twee waarden voor sleutel "%s", maar parameternamen moeten uniek zijn als u bestandsgegevens post vanwege beperkingen met cURL.',
  'DETECT' => 'DETECTEREN',
  'Build Plan %d' => 'Buildplan %d',
  'No lint engine is configured for this project. Create an \'%s\' file, or configure an advanced engine with \'%s\' in \'%s\'.' => 'Er is geen lintengine geconfigureerd voor dit project. Maak een \'%s\'-bestand aan, of configureer een geavanceerde engine met \'%s\' in \'%s\'.',
  'Unexpected output on agent stderr: %s.' => 'Onverwachte uitvoer op agent-stderr: %s.',
  'Attempting to make an HTTP request which includes file data, but the value of a query parameter begins with "%s". PHP interprets these values to mean that it should read arbitrary files off disk and transmit them to remote servers. Declining to make this request.' => 'Poging om een HTTP-verzoek te doen dat bestandsgegevens bevat, maar de waarde van een queryparameter begint met "%s". PHP interpreteert deze waarden als dat het willekeurige bestanden van schijf moet lezen en naar externe servers moet verzenden. Dit verzoek wordt geweigerd.',
  'CLEANUP' => 'OPRUIMEN',
  'Failed to parse \'%s\' as JSON.' => 'Verwerken van \'%s\' als JSON is mislukt.',
  'This function is expected to have a format string.' => 'Van deze functie wordt verwacht dat deze een formaattekenreeks heeft.',
  'Revision \'%s\' does not exist!' => 'Versie \'%s\' bestaat niet!',
  'Run with %s for more details.' => 'Voer uit met %s voor meer details.',
  'UNRELATED REVISION' => 'NIET-GERELATEERDE VERSIE',
  'LibXML Error' => 'LibXML-fout',
  '`%s` Method Cannot Contain Body' => '`%s`-methode mag geen body bevatten',
  'Unknown type \'%s\' in type matrix.' => 'Onbekend type \'%s\' in typematrix.',
  'OPEN REVISION' => 'OPEN VERSIE',
  'Remote "%s" was selected by following tracking branches upstream to the closest remote.' => 'Remote "%s" is geselecteerd door tracking-branches upstream te volgen naar de dichtstbijzijnde remote.',
  'Prompt ("%s") has no query text!' => 'Prompt ("%s") heeft geen vraagtekst!',
  'These commits will be included in the diff:' => 'Deze commits worden opgenomen in de diff:',
  '%s REVISION(S) ARE NOT ACCEPTED' => array(
    '%s VERSIE IS ZIJN NIET GEACCEPTEERD',
    '%s VERSIES ZIJN ZIJN NIET GEACCEPTEERD',
  ),
  'HOLD CHANGES' => 'WIJZIGINGEN VASTHOUDEN',
  'Expected unit for meminfo key "%s" in meminfo source "%s" to be "kB", found "%s".' => 'Verwachtte eenheid voor meminfo-sleutel "%s" in meminfo-bron "%s" als "kB", maar vond "%s".',
  'The cURL library raised an error while making a request. You may be able to find more information about this error (error code: %d) on the cURL site: %s' => 'De cURL-bibliotheek heeft een fout gegeven bij het doen van een verzoek. U kunt mogelijk meer informatie over deze fout (foutcode: %d) vinden op de cURL-site: %s',
  'Unable to upload file: failed to read %d bytes after offset %d from file at path "%s".' => 'Kan bestand niet uploaden: lezen van %d bytes na offset %d van bestand op pad "%s" is mislukt.',
  'Duplicate Case Statements' => 'Dubbele case-instructies',
  'P4 MODE' => 'P4-MODUS',
  'This variable was used already as a by-reference iterator variable. Such variables survive outside the `%s` loop, do not reuse.' => 'Deze variabele is al gebruikt als een by-reference iteratorvariabele. Dergelijke variabelen overleven buiten de `%s`-lus, hergebruik ze niet.',
  'Install completion support for a particular shell.' => 'Aanvullingsondersteuning installeren voor een specifieke shell.',
  'Expected a regular expression, but \'%s\' is not valid: %s' => 'Verwachtte een reguliere expressie, maar \'%s\' is niet geldig: %s',
  'Expected a natural list!' => 'Verwachtte een natuurlijke lijst!',
  'Options \'%s\' and \'%s\' are not compatible. Choose exactly one change source.' => 'Opties \'%s\' en \'%s\' zijn niet compatibel. Kies precies één wijzigingsbron.',
  'German (Germany)' => 'Duits (Duitsland)',
  'A list of paths to phutil libraries that should be loaded at startup. This can be used to make classes available, like lint or unit test engines.' => 'Een lijst van paden naar phutil-bibliotheken die bij het opstarten moeten worden geladen. Dit kan worden gebruikt om klassen beschikbaar te maken, zoals lint- of unittestengines.',
  'Revision %s does not exist.' => 'Versie %s bestaat niet.',
  'Unable to write log "%s" to path "%s". The containing directory ("%s") does not exist or is not readable, and could not be created.' => 'Kan log "%s" niet schrijven naar pad "%s". De bevattende map ("%s") bestaat niet of is niet leesbaar, en kon niet worden aangemaakt.',
  'INFO' => 'INFO',
  'You are using "--hold", so execution will stop before the %s branche(s) are actually created. You will be given instructions to create the branches.' => array(
    'U gebruikt "--hold", dus de uitvoering stopt voordat de branch daadwerkelijk wordt aangemaakt. U krijgt instructies om de branch aan te maken.',
    'U gebruikt "--hold", dus de uitvoering stopt voordat de branches daadwerkelijk worden aangemaakt. U krijgt instructies om de branches aan te maken.',
  ),
  'Trying to create a %s without a working copy!' => 'Poging om een %s aan te maken zonder een werkkopie!',
  'PREPARING' => 'VOORBEREIDEN',
  'Korean (Republic of Korea)' => 'Koreaans (Republiek Korea)',
  'Stifles developer creativity by requiring files have uninspired names containing only letters, numbers, period, hyphen and underscore.' => 'Onderdrukt de creativiteit van ontwikkelaars door te vereisen dat bestanden ongeïnspireerde namen hebben die alleen letters, cijfers, punt, koppelteken en onderstrepingsteken bevatten.',
  'Use `%s` instead of `%s`. The former is a language construct whereas the latter is a function call, which has additional overhead.' => 'Gebruik `%s` in plaats van `%s`. De eerste is een taalconstructie terwijl de laatste een functieaanroep is, die extra overhead heeft.',
  'Attempt to convert non UTF-8 patch into specified encoding.' => 'Poging om niet-UTF-8-patch te converteren naar opgegeven codering.',
  'Mercurial does not support %s yet.' => 'Mercurial ondersteunt %s nog niet.',
  'Amend working copy using revision owned by %s?' => 'Werkkopie wijzigen met versie van %s?',
  'Callback must be callable.' => 'Callback moet aanroepbaar zijn.',
  'Converted a \'%s\' hunk from \'%s\' to UTF-8.
' => 'Een \'%s\'-hunk geconverteerd van \'%s\' naar UTF-8.
\\',
  'moves' => 'verplaatst',
  'INTO REMOTE' => 'NAAR REMOTE',
  'Unknown conversion %s.' => 'Onbekende conversie %s.',
  'Unable to write to stdin!' => 'Kan niet schrijven naar stdin!',
  'Uncommitted changes in working copy:' => 'Niet-gecommitte wijzigingen in werkkopie:',
  'Merge Conflicts' => 'Mergeconflicten',
  'Symbol "%s" does not identify a bookmark, branch, or commit.' => 'Symbool "%s" identificeert geen bladwijzer, branch of commit.',
  '<none>' => '<geen>',
  'The flags "--generate" and "--shell" are mutually exclusive. The "--shell" flag selects which shell to install support for, but the "--generate" suppresses installation.' => 'De vlaggen "--generate" en "--shell" sluiten elkaar uit. De vlag "--shell" selecteert voor welke shell ondersteuning geïnstalleerd moet worden, maar "--generate" onderdrukt de installatie.',
  'Builtin Defaults' => 'Ingebouwde standaardwaarden',
  'Paste API Token from that page:' => 'Plak het API-token van die pagina:',
  'User Config File' => 'Gebruikersconfiguratiebestand',
  'it is the merge-base of \'%s\' (the Git upstream of the current branch) HEAD.' => 'het is de merge-base van \'%s\' (de Git-upstream van de huidige branch) HEAD.',
  'Call to "assertCaught(<junk>, ...)" for test case "%s" passed bad expected value. Expected bool, class name as a string, or a list of class names. Got: %s.' => 'Aanroep van "assertCaught(<junk>, ...)" voor testcase "%s" heeft een incorrecte verwachte waarde doorgegeven. Verwachtte bool, klassenaam als tekenreeks, of een lijst van klassenamen. Kreeg: %s.',
  'The format of user symbol "%s" is unrecognized. Expected a username like "alice" or "@alice", or a user PHID, or a user ID, or a special function like "viewer()".' => 'Het formaat van gebruikerssymbool "%s" wordt niet herkend. Verwachtte een gebruikersnaam zoals "alice" of "@alice", of een gebruikers-PHID, of een gebruikers-ID, of een speciale functie zoals "viewer()".',
  'Checks the permissions on files and ensures that they are not made to be executable unnecessarily. In particular, a file should not be executable unless it is either binary or contain a shebang.' => 'Controleert de rechten op bestanden en zorgt ervoor dat ze niet onnodig uitvoerbaar worden gemaakt. Een bestand mag met name niet uitvoerbaar zijn tenzij het binair is of een shebang bevat.',
  'Use XHPAST to enforce coding conventions on PHP source files.' => 'XHPAST gebruiken om codestandaarden af te dwingen op PHP-bronbestanden.',
  'Set conduit credentials with %s before authenticating conduit!' => 'Stel conduit-aanmeldgegevens in met %s voordat u conduit authenticeert!',
  'There are no commits to land.' => 'Er zijn geen commits om te landen.',
  '`%s` Reassignment' => '`%s`-hertoewijzing',
  'Failed to connect to server (%s): %s' => 'Verbinden met server (%s) is mislukt: %s',
  'These %s symbol(s) do not exist in the remote. They will be created as new bookmarks:' => array(
    'Dit symbool bestaat niet in de remote. Het wordt aangemaakt als nieuwe bladwijzer:',
    'Deze %s symbolen bestaan niet in de remote. Ze worden aangemaakt als nieuwe bladwijzers:',
  ),
  'You must %s!' => 'U moet %s!',
  'When creating a new branch or bookmark, use this as the branch point.' => 'Bij het aanmaken van een nieuwe branch of bladwijzer, dit als branchpunt gebruiken.',
  'CHOOSE' => 'KIEZEN',
  'Expected: %s
  Actual: %s' => 'Verwacht: %s
  Werkelijk: %s',
  'Brace Placement' => 'Accoladeplaatsing',
  'Accept/reduce conflict!' => 'Accept/reduce-conflict!',
  'Specify a URI explicitly with `--config phabricator.uri=<uri>`.' => 'Geef een URI expliciet op met `--config phabricator.uri=<uri>`.',
  'You can not reference `%s` inside a static method.' => 'U kunt niet verwijzen naar `%s` binnen een statische methode.',
  'Buildable Symbol "%s"' => 'Buildbaar symbool "%s"',
  'Merge target is ambiguous.' => 'Mergedoel is dubbelzinnig.',
  'Local ref "%s" does not exist.' => 'Lokale ref "%s" bestaat niet.',
  '%s us' => '%s us',
  'Unary postfix operators should not be prefixed by whitespace.' => 'Unaire postfixoperatoren mogen niet worden voorafgegaan door witruimte.',
  'Night has fallen, but your surroundings are illuminated by the silvery glow of a full moon overhead. The night is cool and the air is crisp. The trees are calm.' => 'De nacht is gevallen, maar uw omgeving wordt verlicht door de zilveren gloed van een volle maan boven u. De nacht is koel en de lucht is fris. De bomen zijn rustig.',
  'Enable strict math, which only processes mathematical expressions inside extraneous parentheses.' => 'Strikte wiskunde inschakelen, die alleen wiskundige expressies binnen extra haakjes verwerkt.',
  'UNCOMMITTED CHANGES' => 'NIET-GECOMMITTE WIJZIGINGEN',
  'Your stored credentials for the server you are trying to connect to ("%s") are not valid.' => 'Uw opgeslagen aanmeldgegevens voor de server waarmee u verbinding probeert te maken ("%s") zijn niet geldig.',
  'Expected a string for "method" context, got "%s".' => 'Verwachtte een tekenreeks voor "method"-context, maar kreeg "%s".',
  'Build Plan Symbol "%s"' => 'Buildplansymbool "%s"',
  'Spellchecker' => 'Spellingcontrole',
  'Object (of class "%s") did not return a string from "__toString()".' => 'Object (van klasse "%s") gaf geen tekenreeks terug van "__toString()".',
  'Default list of "onto" refs for "arc land".' => 'Standaardlijst van "onto"-refs voor "arc land".',
  'The `%s` function should be avoided. It is potentially unsafe and makes debugging more difficult.' => 'De functie `%s` moet worden vermeden. Het is potentieel onveilig en maakt debuggen moeilijker.',
  'MERGE STRATEGY IS AMBIGUOUS' => 'MERGESTRATEGIE IS DUBBELZINNIG',
  'Invalid severity code \'%s\', should begin with \'%s.\'.' => 'Incorrecte ernstcode \'%s\', moet beginnen met \'%s.\'.',
  'No such project: "%s"' => 'Geen dergelijk project: "%s"',
  'English (Great Britain)' => 'Engels (Groot Britannië)',
  'Custom configuration file.' => 'Aangepast configuratiebestand.',
  'Received error from WordPress.com: %s' => 'Fout ontvangen van WordPress.com: %s',
  'PUSHING' => 'PUSHEN',
  'The format of symbol "%s" is unrecognized. Expected a monogram like "X123", or an ID like "123", or a PHID.' => 'Het formaat van symbool "%s" wordt niet herkend. Verwachtte een monogram zoals "X123", of een ID zoals "123", of een PHID.',
  'Linter "%s" generated a lint message that is invalid because it does not have a name. Lint messages must have a name.' => 'Linter "%s" heeft een lintbericht gegenereerd dat incorrect is omdat het geen naam heeft. Lintberichten moeten een naam hebben.',
  'Pass in a custom %s file path.' => 'Geef een aangepast %s-bestandspad op.',
  'In order to keep StyleCop integration with IDEs and other tools consistent with lint results, you aren\'t permitted to disable StyleCop rules within \'%s\'. Instead configure the severity using the StyleCop settings dialog (usually accessible from within your IDE). StyleCop settings for your project will be used when linting.' => 'Om de StyleCop-integratie met IDE\'s en andere hulpmiddelen consistent te houden met lintresultaten, mag u StyleCop-regels niet uitschakelen binnen \'%s\'. Configureer in plaats daarvan de ernst via het StyleCop-instellingendialoogvenster (meestal toegankelijk vanuit uw IDE). StyleCop-instellingen voor uw project worden gebruikt bij het linten.',
  'Restoring local state (at "%s" on branch "%s").' => 'Lokale status herstellen (op "%s" op branch "%s").',
  'Filename' => 'Bestandsnaam',
  'Default behavior is ambiguous.' => 'Standaardgedrag is dubbelzinnig.',
  'Patch Failed!' => 'Patch mislukt!',
  'Confirms that revisions with changes planned should land.' => 'Bevestigt dat versies met geplande wijzigingen geland moeten worden.',
  'Querying system processes is not currently supported on Windows.' => 'Het opvragen van systeemprocessen wordt momenteel niet ondersteund op Windows.',
  'Received unknown console message of type \'%s\'.' => 'Onbekend consolebericht van type \'%s\' ontvangen.',
  'Client %s' => 'Client %s',
  'Across the grove, a stream flows north toward **published** commits.
' => 'Aan de overkant van het bos stroomt een beek naar het noorden richting **gepubliceerde** commits.
\\',
  'You can not use "--shell" when completing arguments.' => 'U kunt "--shell" niet gebruiken bij het aanvullen van argumenten.',
  'Parameter provided to argument "--%s" must be an integer.' => 'Parameter opgegeven voor argument "--%s" moet een geheel getal zijn.',
  'Filesystem path "%s" does not exist.' => 'Bestandssysteempad "%s" bestaat niet.',
  'Hardpoint (at index "%s") has no hardpoint key. Each hardpoint must have a key that is unique among hardpoints on the object.' => 'Hardpoint (op index "%s") heeft geen hardpointsleutel. Elk hardpoint moet een sleutel hebben die uniek is onder hardpoints op het object.',
  'You are landing %s revision(s) which are currently in the state "%s", indicating that you expect to revise them before moving forward.' => array(
    'U landt %s versie die momenteel in de status "%s"  staat, wat aangeeft dat u verwacht die te herzien voordat u verder gaat.',
    'U landt %s versies die momenteel in de status "%s"  staan, wat aangeeft dat u verwacht die te herzien voordat u verder gaat.',
  ),
  'Expected exactly one argument to "commit(...)" with a commit symbol.' => 'Verwachtte precies één argument voor "commit(...)" met een commitsymbool.',
  'Apply changes from a Differential revision, using the most recent diff that has been attached to it. You can run \'%s\' as a shorthand.' => 'Wijzigingen toepassen vanuit een Differential-versie, met de meest recente diff die eraan is gekoppeld. U kunt \'%s\' als afkorting uitvoeren.',
  'The software version on the server is too old to support this workflow. Upgrade the software version on the server to a version released after October 2017.' => 'De softwareversie op de server is te oud om deze workflow te ondersteunen. Werk de softwareversie op de server bij naar een versie die is uitgebracht na oktober 2017.',
  'Specify the pager command to use when displaying documentation.' => 'Geef de pageropdracht op die moet worden gebruikt bij het weergeven van documentatie.',
  'Expected resource "%s" to be an instance of "%s"!' => 'Verwachtte dat bron "%s" een instantie is van "%s"!',
  'Invalid "Differential Revision" field in commit message. This field should have a revision identifier like "%s" or a server URI like "%s", but has "%s".' => 'Incorrect veld "Differential Revision" in commitbericht. Dit veld moet een versie-identificatie hebben zoals "%s" of een server-URI zoals "%s", maar heeft "%s".',
  'Merging local "%s" into "%s" produces an empty diff. This usually means these changes have already landed.' => 'Het mergen van lokale "%s" in "%s" produceert een lege diff. Dit betekent meestal dat deze wijzigingen al zijn geland.',
  'Checking out "%s".' => '"%s" uitchecken.',
  'Parameter "timeout" to "Future->resolve()" is no longer supported. Update the caller so it no longer passes a timeout.' => 'Parameter "timeout" voor "Future->resolve()" wordt niet meer ondersteund. Werk de aanroeper bij zodat deze geen timeout meer doorgeeft.',
  'Unknown Mercurial Extension: "%s".' => 'Onbekende Mercurial-uitbreiding: "%s".',
  'There is no **%s** workflow.' => 'Er is geen **%s**-workflow.',
  'AWS Errors:' => 'AWS-fouten:',
  'Failed to fread() from request input stream.' => 'fread() van verzoek-invoerstroom is mislukt.',
  'Limit the use of global variables. Global variables are generally a bad idea and should be avoided when possible.' => 'Beperk het gebruik van globale variabelen. Globale variabelen zijn over het algemeen een slecht idee en moeten waar mogelijk worden vermeden.',
  'Unrecognized lint message code "%s". Expected a valid cpplint lint code like "%s" or "%s".' => 'Niet-herkende lintberichtcode "%s". Verwachtte een geldige cpplint-lintcode zoals "%s" of "%s".',
  'Protocol channel expected %s-character, zero-padded numeric frame length, got something else ("%s"). Full buffer (of length %s) begins: %s' => array(
    'Protocolkanaal verwachtte %s teken, met nullen opgevulde numerieke framelengte, maar kreeg iets anders ("%s"). Volledige buffer (van lengte %s) begint: %s',
    'Protocolkanaal verwachtte %s tekens, met nullen opgevulde numerieke framelengte, maar kreeg iets anders ("%s"). Volledige buffer (van lengte %s) begint: %s',
  ),
  'Failed to read file \'%s\'.' => 'Lezen van bestand \'%s\' is mislukt.',
  'FETCH' => 'OPHALEN',
  'Create or update a library.' => 'Een bibliotheek aanmaken of bijwerken.',
  'SYNOPSIS' => 'SAMENVATTING',
  'Arcventure' => 'Arcventure',
  'Parameter ("%s") passed to "%s" when constructing a lint message must be a scalar with a maximum string length of %s bytes, but is %s bytes in length.' => array(
    
    array(
      
      array(
        
        array(
          'Parameter ("%s") doorgegeven aan "%s" bij het samenstellen van een lintbericht moet een scalaire waarde zijn met een maximale tekenreekslengte van %s byte, maar is %s byte lang.',
          'Parameter ("%s") doorgegeven aan "%s" bij het samenstellen van een lintbericht moet een scalaire waarde zijn met een maximale tekenreekslengte van %s byte, maar is %s bytes lang.',
        ),
        
        array(
          'Parameter ("%s") doorgegeven aan "%s" bij het samenstellen van een lintbericht moet een scalaire waarde zijn met een maximale tekenreekslengte van %s bytes, maar is %s byte lang.',
          'Parameter ("%s") doorgegeven aan "%s" bij het samenstellen van een lintbericht moet een scalaire waarde zijn met een maximale tekenreekslengte van %s bytes, maar is %s bytes lang.',
        ),
      ),
    ),
  ),
  'Revision "%s" is not in the state "Accepted", so it will be left open.' => 'Versie "%s" is niet in de status "Geaccepteerd", dus deze blijft open.',
  'Expected hunk target \'%s\'.' => 'Verwachtte hunkdoel \'%s\'.',
  'Closing parenthesis should be on a new line.' => 'Sluithaakje moet op een nieuwe regel staan.',
  'IP address "%s" is not properly formatted: an address with omitted leading sements must begin with "::".' => 'IP-adres "%s" is niet correct opgemaakt: een adres met weggelaten voorloopsegmenten moet beginnen met "::".',
  'Declaring a function named `%s` causes any call to %s to fail. This is because `%s` eval-declares the function `%s`, then modifies the symbol table so that the function is instead named `%s`, and returns that name.' => 'Het declareren van een functie met de naam `%s` zorgt ervoor dat elke aanroep van %s mislukt. Dit komt doordat `%s` de functie `%s` via eval declareert, vervolgens de symbooltabel wijzigt zodat de functie in plaats daarvan `%s` heet, en die naam teruggeeft.',
  'Raises errors on unresolved merge conflicts in source files, to catch mistakes where a conflicted file is accidentally marked as resolved.' => 'Geeft fouten bij onopgeloste mergeconflicten in bronbestanden, om fouten op te vangen waarbij een conflicterend bestand per ongeluk als opgelost is gemarkeerd.',
  '\'%s\' has been amended with \'Differential Revision:\', as specified by \'%s\' in your %s \'base\' configuration.' => '\'%s\' is aangevuld met \'Differential Revision:\', zoals opgegeven door \'%s\' in uw %s \'base\'-configuratie.',
  'NOTE' => 'OPMERKING',
  'You are trying to connect to a server ("%s") that you do not have any stored credentials for, but the command you are running requires authentication.' => 'U probeert verbinding te maken met een server ("%s") waarvoor u geen opgeslagen aanmeldgegevens hebt, maar de opdracht die u uitvoert vereist authenticatie.',
  'Expected \'Author:\'.' => 'Verwachtte \'Author:\'.',
  'First argument to `%s` must be a string literal.' => 'Eerste argument voor `%s` moet een letterlijke tekenreeks zijn.',
  'Use of Blacklisted Function' => 'Gebruik van functie op de blokkeerlijst',
  'Restoring local state (at "%s" on branch "%s", bookmarked as "%s").' => 'Lokale status herstellen (op "%s" op branch "%s", gebookmarkt als "%s").',
  'Useless overriding method.' => 'Nutteloze overschrijvende methode.',
  'The name of the default branch to land changes onto when `%s` is run.' => 'De naam van de standaard-branch waarop wijzigingen worden geland wanneer `%s` wordt uitgevoerd.',
  'You must use ONLY Unix linebreaks ("%s") in source code.' => 'U moet ALLEEN Unix-regelafbrekingen ("%s") gebruiken in broncode.',
  'NAME' => 'NAAM',
  'Unknown attribute label "%s" in line "%s" while parsing raw commit blob: %s' => 'Onbekend attribuutlabel "%s" op regel "%s" bij het verwerken van ruwe commitblob: %s',
  'Unknown Mercurial log field \'%s\'!' => 'Onbekend Mercurial-logveld \'%s\'!',
  '%s returned unexpected error code: %d
stdout: %s
stderr: %s' => '%s gaf onverwachte foutcode terug: %d
stdout: %s
stderr: %s',
  'Delimiter character must be one byte in length or null.' => 'Scheidingsteken moet één byte lang zijn of null.',
  'Prefer "__CLASS__" over hard-coded class names.' => 'Geef de voorkeur aan "__CLASS__" boven hardgecodeerde klassenamen.',
  'API Token installed.' => 'API-token geïnstalleerd.',
  'The "--json" argument may only be used when listing aliases.' => 'Het argument "--json" mag alleen worden gebruikt bij het weergeven van aliassen.',
  'Wildcard arguments may not be repeatable.' => 'Jokertekenargumenten mogen niet herhaalbaar zijn.',
  'AMBIGUOUS' => 'DUBBELZINNIG',
  'Unrecognized lint message code "%s". Expected a valid flake8 lint code like "%s", or "%s", or "%s", or "%s".' => 'Niet-herkende lintberichtcode "%s". Verwachtte een geldige flake8-lintcode zoals "%s", of "%s", of "%s", of "%s".',
  'You have merge conflicts in this working copy.' => 'U hebt mergeconflicten in deze werkkopie.',
  'Ignore these %s untracked file(s) and continue?' => array(
    'Dit niet-gevolgde bestand negeren en doorgaan?',
    'Deze %s niet-gevolgde bestanden negeren en doorgaan?',
  ),
  'PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.' => 'PHP_CodeSniffer tokeniseert PHP-, JavaScript- en CSS-bestanden en detecteert schendingen van een gedefinieerde set codestandaarden.',
  'To identify the repository associated with this working copy, arc followed this process:' => 'Om de repository te identificeren die bij deze werkkopie hoort, volgde arc dit proces:',
  'Linter %s requires %s version %s. Unable to determine the version that you have installed.' => 'Linter %s vereist %s versie %s. Kan de versie die u hebt geïnstalleerd niet bepalen.',
  'Writing \'%s\' to \'%s\'...
' => '\'%s\' schrijven naar \'%s\'...
\\',
  '< %sus' => '< %sus',
  'Download a file to local disk.' => 'Een bestand downloaden naar de lokale schijf.',
  'Parameter passed to setDuration() must be an integer or a float.' => 'Parameter doorgegeven aan setDuration() moet een geheel getal of een decimaal getal zijn.',
  'Call %s before calling %s. You can not add more nodes once you have loaded the graph.' => 'Roep %s aan voordat u %s aanroept. U kunt geen knooppunten meer toevoegen nadat u de graaf hebt geladen.',
  'Related configuration:' => 'Gerelateerde configuratie:',
  'This line is %s characters long, but the convention is %s characters.' => array(
    'Deze regel is %s teken lang, maar de conventie is %s tekens.',
    'Deze regel is %s tekens lang, maar de conventie is %s tekens.',
  ),
  'Working Copy: Path "%s" is part of `%s` working copy "%s".' => 'Werkkopie: Pad "%s" is onderdeel van `%s`-werkkopie "%s".',
  '"%s" is not an exact quantity.' => '"%s" is geen exacte hoeveelheid.',
  'Linter failed to parse output!' => 'Linter kon de uitvoer niet verwerken!',
  'Failed to load XUnit report; Input starts with:' => 'Laden van XUnit-rapport is mislukt; invoer begint met:',
  'Multiple "static" modifiers are not allowed.' => 'Meerdere "static"-modifiers zijn niet toegestaan.',
  'Assertion failed, expected values to be equal (at %s:%d).' => 'Assertie mislukt, verwachtte gelijke waarden (op %s:%d).',
  'No query exists which can load hardpoint "%s" for object (with key "%s" of type "%s").' => 'Er bestaat geen query die hardpoint "%s" kan laden voor object (met sleutel "%s" van type "%s").',
  'Waiting for input on stdin...' => 'Wachten op invoer op stdin...',
  'Attempting to wait on a hardpoint request (with index "%s", for hardpoint "%s") that is part of a different engine.' => 'Poging om te wachten op een hardpointverzoek (met index "%s", voor hardpoint "%s") dat deel uitmaakt van een andere engine.',
  'Do not use "each()". This function was deprecated in PHP 7.2 and removed in PHP 8.0' => 'Gebruik "each()" niet. Deze functie is verouderd in PHP 7.2 en verwijderd in PHP 8.0',
  'Some linters failed:' => 'Sommige linters zijn mislukt:',
  'There is no revision %s.' => 'Er is geen versie %s.',
  'Comment Style' => 'Commentaarstijl',
  'The token "%s" is not a valid API Token. The server returned this response when trying to use it as a token: %s' => 'Het token "%s" is geen geldig API-token. De server gaf dit antwoord bij het proberen te gebruiken als token: %s',
  'Unknown merge approach "%s".' => 'Onbekende mergebenadering "%s".',
  'Provide method parameters on stdin as a JSON blob.' => 'Geef methodeparameters op stdin op als een JSON-blob.',
  'CREATE %s BRANCHE(S)' => array(
    'BRANCH AANMAKEN',
    '%s BRANCHES AANMAKEN',
  ),
  'Use of unknown class or interface symbol "%s".' => 'Gebruik van onbekend klasse- of interfacesymbool "%s".',
  'Follow naming conventions: interfaces should be named using `%s`.' => 'Volg de naamgevingsrichtlijnen: interfaces moeten met `%s` worden benoemd.',
  'Configured unit test engine "%s" is not a subclass of "%s", but must be.' => 'Geconfigureerde unittestengine "%s" is geen subklasse van "%s", maar moet dat wel zijn.',
  'Rule \'%s\' popped empty context!' => 'Regel \'%s\' heeft een lege context verwijderd!',
  'Expected rule \'%s\' in state \'%s\' in %s to have 2-4 elements (regex, token, [next state], [options]), got %d.' => 'Verwachtte dat regel \'%s\' in status \'%s\' in %s 2-4 elementen heeft (regex, token, [volgende status], [opties]), maar kreeg %d.',
  'Provide exactly one Conduit method name to call.' => 'Geef precies één Conduit-methodenaam op om aan te roepen.',
  'Unable to verify request signature, no "%s" present in request protocol information.' => 'Kan verzoekhandtekening niet verifiëren, geen "%s" aanwezig in verzoekprotocolinformatie.',
  'To log in and save valid credentials for this server, run this command:' => 'Om in te loggen en geldige aanmeldgegevens voor deze server op te slaan, voert u deze opdracht uit:',
  'Tab Literal' => 'Letterlijke tab',
  'Encountered duplicate meminfo key "%s" in meminfo source "%s".' => 'Dubbele meminfo-sleutel "%s" aangetroffen in meminfo-bron "%s".',
  'Failed to JSON encode value: %s.' => 'JSON-codering van waarde is mislukt: %s.',
  'Encoding UTF8 codepoint "%s" is not supported.' => 'Codering van UTF8-codepunt "%s" wordt niet ondersteund.',
  'Provide a directory to create or update a library in.' => 'Geef een map op om een bibliotheek in aan te maken of bij te werken.',
  'Several small trails and footpaths cross here, twisting away from you among the trees.' => 'Verschillende kleine paden en voetpaden kruisen hier, zich van u af slingerend tussen de bomen.',
  'Amend the working copy, synchronizing the local commit message.' => 'De werkkopie aanpassen, het lokale commitbericht synchroniseren.',
  'Use `%s` for checking if the string starts with something.' => 'Gebruik `%s` om te controleren of de tekenreeks met iets begint.',
  'Use of unknown interface symbol "%s".' => 'Gebruik van onbekend interfacesymbool "%s".',
  'UNKNOWN REVISION' => 'ONBEKENDE VERSIE',
  'Query parameters include a duplicate key ("%s") and can not be nondestructively represented as a map.' => 'Queryparameters bevatten een dubbele sleutel ("%s") en kunnen niet niet-destructief worden weergegeven als een map.',
  'Buildable "%s"' => 'Buildbaar "%s"',
  'Lock \'%s\' is already registered!' => 'Vergrendeling \'%s\' is al geregistreerd!',
  'Request specifies a file with key "%s", but that key is also defined by normal request data. Due to limitations with cURL, requests that post file data must use unique keys.' => 'Verzoek specificeert een bestand met sleutel "%s", maar die sleutel is ook gedefinieerd door normale verzoekgegevens. Vanwege beperkingen van cURL moeten verzoeken die bestandsgegevens posten unieke sleutels gebruiken.',
  'Failed to set stream nonblocking.' => 'Instellen van stream als niet-blokkerend is mislukt.',
  'This version of %s is not supported (it is too new). You can try upgrading with `%s`.' => 'Deze versie van %s wordt niet ondersteund (het is te nieuw). U kunt proberen te upgraden met `%s`.',
  'Expected JSON.' => 'JSON verwacht.',
  'TODO: Ambiguous ref.' => 'TODO: Dubbelzinnige ref.',
  '<paths = %s>' => '<paden = %s>',
  '"%s" class "%s" must define a "%s" constant.' => '"%s"-klasse "%s" moet een "%s"-constante definiëren.',
  'You walk along the narrow bank of the stream as it winds lazily downhill and turns east, gradually widening into a river.' => 'U loopt langs de smalle oever van de beek terwijl deze lui heuvelafwaarts kronkelt en naar het oosten draait, geleidelijk verbredend tot een rivier.',
  'Unable to Parse' => 'Kan niet verwerken',
  'Unknown smoothing type "%s".' => 'Onbekend afvlakkingstype "%s".',
  'Received errors from Asana: %s' => 'Fouten ontvangen van Asana: %s',
  'Follow naming conventions: class properties should be named using `%s`.' => 'Volg de naamgevingsrichtlijnen: klasse-eigenschappen moeten met `%s` worden benoemd.',
  'Flag arguments may not have a default (always false).' => 'Vlagargumenten mogen geen standaardwaarde hebben (altijd false).',
  'Found invalid alias definition (with key "%s").' => 'Incorrecte aliasdefinitie gevonden (met sleutel "%s").',
  'Ruby' => 'Ruby',
  'Convention: comma should be followed by space.' => 'Conventie: komma moet worden gevolgd door een spatie.',
  'Checking out branch "%s".' => 'Branch "%s" uitchecken.',
  'None of the rules in your \'base\' configuration matched a valid commit. Adjust rules or specify which commit you want to use explicitly.' => 'Geen van de regels in uw \'base\'-configuratie kwam overeen met een geldige commit. Pas de regels aan of geef expliciet op welke commit u wilt gebruiken.',
  'ALIAS' => 'ALIAS',
  '**liberate** [__path__]' => '**liberate** [__pad__]',
  'Done, closed revision.' => 'Klaar, versie gesloten.',
  'Properties should have their visibility declared explicitly.' => 'Eigenschappen moeten hun zichtbaarheid expliciet gedeclareerd hebben.',
  'This codebase targets PHP %s, but namespaces were not introduced until PHP 5.3.' => 'Deze codebase richt zich op PHP %s, maar namespaces zijn pas geïntroduceerd in PHP 5.3.',
  'Writing to a closed pipe!' => 'Schrijven naar een gesloten pipe!',
  'Follow naming conventions: constants should be named using `%s`.' => 'Volg de naamgevingsrichtlijnen: constanten moeten met `%s` worden benoemd.',
  'Lint renderer "%s" is unknown. Supported renderers are: %s.' => 'Lintrenderer "%s" is onbekend. Ondersteunde renderers zijn: %s.',
  'Spanish (Spain)' => 'Spaans (Spanje)',
  'Convention: space before `%s` token.' => 'Conventie: spatie voor `%s`-token.',
  'Linter `%s` configured in \'%s\' MUST be a subclass of `%s`.' => 'Linter `%s` geconfigureerd in \'%s\' MOET een subklasse zijn van `%s`.',
  'Unable to find %s or %s in %s!' => 'Kan %s of %s niet vinden in %s!',
  'Use `%s` to detect syntax errors in JSON files.' => 'Gebruik `%s` om syntaxisfouten in JSON-bestanden te detecteren.',
  'Branch name %s already exists; trying a new name.' => 'Branchnaam %s bestaat al; een nieuwe naam proberen.',
  'UNSOUND' => 'ONDEUGDELIJK',
  'Found a unique matching repository.' => 'Een unieke overeenkomende repository gevonden.',
  'Confirms that new branches or bookmarks should be created in the remote.' => 'Bevestigt dat nieuwe branches of bookmarks moeten worden aangemaakt in de remote.',
  'User aborted the workflow.' => 'Gebruiker heeft de workflow afgebroken.',
  'Auto-Fix' => 'Automatisch herstellen',
  'Object (with key "%s", of type "%s") has no hardpoint "%s". Hardpoints on this object are: %s.' => 'Object (met sleutel "%s", van type "%s") heeft geen hardpoint "%s". Hardpoints op dit object zijn: %s.',
  'Modified \'%s\' files:' => 'Gewijzigde \'%s\'-bestanden:',
  '%s revision(s) have build failures or ongoing builds:' => array(
    '%s versie heeft buildfouten of lopende builds:',
    '%s versies hebben buildfouten of lopende builds:',
  ),
  'Unrecognized lint message code "%s". Expected a valid Pylint lint code like "%s", or "%s", or "%s".' => 'Niet-herkende lintberichtcode "%s". Verwachtte een geldige Pylint-lintcode zoals "%s", of "%s", of "%s".',
  'Unable to identify the current commit in the working copy.' => 'Kan de huidige commit in de werkkopie niet identificeren.',
  'Revision %s can not be closed. You can only close revisions which have been \'accepted\'.' => 'Versie %s kan niet worden gesloten. U kunt alleen versies sluiten die zijn \'geaccepteerd\'.',
  'Use of unknown function symbol "%s".' => 'Gebruik van onbekend functiesymbool "%s".',
  'Switching to source \'%s\'.' => 'Overschakelen naar bron \'%s\'.',
  'Unable to parse line in meminfo source "%s": "%s".' => 'Kan regel in meminfo-bron "%s" niet verwerken: "%s".',
  'Data has fewer than %d lines.' => 'Gegevens hebben minder dan %d regels.',
  'Expected \'%s\'.' => 'Verwachtte \'%s\'.',
  'Rebase onto %s failed!' => 'Rebase op %s is mislukt!',
  'Specify a version requirement for the binary. The version number may be prefixed with <, <=, >, >=, or = to specify the version comparison operator (default: =).' => 'Geef een versievereiste op voor het binaire bestand. Het versienummer kan worden voorafgegaan door <, <=, >, >=, of = om de versievergelijkingsoperator op te geven (standaard: =).',
  'STRATEGY' => 'STRATEGIE',
  'Convention: put a single space after control statements.' => 'Conventie: zet een enkele spatie na besturingsstructuren.',
  'Modifier Ordering' => 'Modifiervolgorde',
  'Input and expectations must have the same number of values.' => 'Invoer en verwachtingen moeten hetzelfde aantal waarden hebben.',
  'Error in parsing \'%s\' file, for test engine \'%s\'.' => 'Fout bij het verwerken van bestand \'%s\', voor testengine \'%s\'.',
  'Duplicate key in array initializer. PHP will ignore all but the last entry.' => 'Dubbele sleutel in array-initialisatie. PHP negeert alles behalve de laatste vermelding.',
  '(Assuming "%s" is the British spelling of "%s".)' => '(Aangenomen dat "%s" de Britse spelling is van "%s".)',
  'Avoid `%s`. It is confusing and hinders static analysis.' => 'Vermijd `%s`. Het is verwarrend en belemmert statische analyse.',
  'The first line is used as subject, next lines as comment.' => 'De eerste regel wordt gebruikt als onderwerp, volgende regels als commentaar.',
  'In PHP, `%s` is the string concatenation operator, not `%s`. This expression uses `%s` with a string literal as an operand.' => 'In PHP is `%s` de tekenreeksaaneenschakelingsoperator, niet `%s`. Deze expressie gebruikt `%s` met een letterlijke tekenreeks als operand.',
  'Failed to write to buffer.' => 'Schrijven naar buffer is mislukt.',
  'Uses `%s` to run several linters (PyFlakes, pep8, and a McCabe complexity checker) on Python source files.' => 'Gebruikt `%s` om verschillende linters (PyFlakes, pep8 en een McCabe-complexiteitscontrole) uit te voeren op Python-bronbestanden.',
  'Upgrade this program to the latest version.' => 'Dit programma upgraden naar de nieuwste versie.',
  'Phutil XHPAST' => 'Phutil XHPAST',
  'You have uncommitted changes in this working copy.' => 'U hebt niet-gecommitte wijzigingen in deze werkkopie.',
  'You\'ve enabled code coverage but XDebug is not installed.' => 'U hebt codedekking ingeschakeld, maar XDebug is niet geïnstalleerd.',
  'Arc was unable to automagically make a name for this patch. Please clean up your working copy and try again.' => 'Arc kon niet automatisch een naam voor deze patch maken. Ruim uw werkkopie op en probeer het opnieuw.',
  'JSCS does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => 'JSCS ondersteunt momenteel geen aangepaste ernstniveaus, omdat regels niet kunnen worden geïdentificeerd uit berichten in de uitvoer.',
  'You can not "--pick" changes under the "merge" strategy.' => 'U kunt geen wijzigingen "--pick"en onder de "merge"-strategie.',
  'Config: Did not find user configuration at "%s".' => 'Configuratie: Gebruikersconfiguratie niet gevonden op "%s".',
  'Added' => 'Toegevoegd',
  '`%s`-style functions which take a format string and list of values as arguments. The value for the mapping is the start index of the function parameters (the index of the format string parameter).' => '`%s`-stijl functies die een opmaaktekenreeks en lijst van waarden als argumenten nemen. De waarde voor de toewijzing is de startindex van de functieparameters (de index van de opmaaktekenreeksparameter).',
  'Jul' => 'jul',
  'Paste "%s"' => 'Plaksel "%s"',
  'Command string argument includes a NULL byte. This byte can not be safely escaped in command line arguments in Windows environments.' => 'Opdrachttekenreeksargument bevat een NULL-byte. Deze byte kan niet veilig worden ge-escaped in opdrachtregelargumenten in Windows-omgevingen.',
  'DISCARDING ANCESTORS' => 'VOOROUDERS VERWERPEN',
  'Syntax Error' => 'Syntaxisfout',
  'Too many arguments to %s.' => 'Te veel argumenten voor %s.',
  'The revision associated with commit "%s" (an ancestor of: %s) is ambiguous. These %s revisions are associated with the commit:' => array(
    
    array(
      
      array(
        'De versie die is gekoppeld aan commit "%s" (een voorouder van: %s) is dubbelzinnig. Deze versie is gekoppeld aan de commit:',
        'De versie die is gekoppeld aan commit "%s" (een voorouder van: %s) is dubbelzinnig. Deze %s versies zijn gekoppeld aan de commit:',
      ),
    ),
  ),
  'Resuming upload (%s of %s chunks remain).' => array(
    
    array(
      'Upload hervatten (%s van %s deel resterend).',
      'Upload hervatten (%s van %s delen resterend).',
    ),
  ),
  'Rule \'%s\' contains a production \'%s\' which is nonempty but has a null in it. A rule with other may not contain null.' => 'Regel \'%s\' bevat een productie \'%s\' die niet leeg is maar een null bevat. Een regel met andere mag geen null bevatten.',
  'Hardpoint ("%s", of type "%s") does not support merging values.' => 'Hardpoint ("%s", van type "%s") ondersteunt het samenvoegen van waarden niet.',
  'Library "%s" (at "%s") is not a Git working copy, so no version information can be provided.' => 'Bibliotheek "%s" (op "%s") is geen Git-werkkopie, dus er kan geen versie-informatie worden verstrekt.',
  'Unknown lint severity \'%s\'!' => 'Onbekende linternst \'%s\'!',
  'Configuration Options' => 'Configuratieopties',
  'No unit test failures.' => 'Geen unittestfouten.',
  'Conduit URI \'%s\' must include a valid host.' => 'Conduit-URI \'%s\' moet een geldige host bevatten.',
  'ONTO REMOTE' => 'NAAR REMOTE',
  'This test case made no assertions. Test cases must make at least one assertion.' => 'Deze testcase heeft geen asserties gemaakt. Testcases moeten ten minste één assertie maken.',
  '%s AFFECTED FILE(S)' => array(
    '%s GETROFFEN BESTAND',
    '%s GETROFFEN BESTANDEN',
  ),
  'Git status has changed!' => 'Git-status is gewijzigd!',
  'No such linter standard. Available standards are: %s.' => 'Geen dergelijke linterstandaard. Beschikbare standaarden zijn: %s.',
  '%s Library Linter' => '%s-bibliotheklinter',
  'Basic Text Linter' => 'Basistekstlinter',
  'Unable to parse Mercurial blame line: %s' => 'Kan Mercurial-blameregel niet verwerken: %s',
  '%s (until %s)' => '%s (tot %s)',
  'Cleaning up branch "%s". To recover, run:' => 'Branch "%s" opruimen. Om te herstellen, voer uit:',
  'Install hlint with `%s`.' => 'Installeer hlint met `%s`.',
  'Hardpoint future list is marked to send results to the generator, but the list does not have exactly one future (it has %s).' => 'Hardpoint-futurelijst is gemarkeerd om resultaten naar de generator te sturen, maar de lijst heeft niet precies één future (de lijst heeft er %s).',
  'D, M j' => 'D j M',
  'Fetched ref "%s" from remote "%s".' => 'Ref "%s" opgehaald van remote "%s".',
  'Use `%s` as a statement, not an expression.' => 'Gebruik `%s` als een instructie, niet als een expressie.',
  'Created task %s: \'%s\' at %s
' => 'Taak %s aangemaakt: \'%s\' op %s
\\',
  'Expected a revision ID to be returned by "differential.revision.edit".' => 'Verwachtte dat een versie-ID werd teruggegeven door "differential.revision.edit".',
  'cover does not currently support %s in svn.' => 'cover ondersteunt momenteel geen %s in svn.',
  'Closing revision "%s"...' => 'Versie "%s" sluiten...',
  'Expected option key passed to "addCurlOption(<key>, ...)" to be a scalar, got "%s".' => 'Verwachtte dat de optiesleutel doorgegeven aan "addCurlOption(<key>, ...)" een scalaire waarde is, maar kreeg "%s".',
  'Status' => 'Status',
  'Can only add execute actions to an agent.' => 'Kan alleen uitvoerhandelingen aan een agent toevoegen.',
  'Formatted String' => 'Opgemaakte tekenreeks',
  'Two different HTTP extensions ("%s" of class "%s" and "%s" of class "%s") both provided a proxy URI for URI "%s". No more than one extension may provide a proxy for any URI.' => 'Twee verschillende HTTP-uitbreidingen ("%s" van klasse "%s" en "%s" van klasse "%s") hebben beide een proxy-URI opgegeven voor URI "%s". Niet meer dan één uitbreiding mag een proxy opgeven voor een URI.',
  'INPUT' => 'INVOER',
  'Unnecessary `%s` modifier in `%s` class.' => 'Onnodige `%s`-modifier in `%s`-klasse.',
  'It is afternoon. The air has changed and it feels as though it may rain. You hear a squirrel chittering high overhead.' => 'Het is middag. De lucht is veranderd en het voelt alsof het kan gaan regenen. U hoort een eekhoorn hoog boven u kwetteren.',
  'Created and checked out branch %s.' => 'Branch %s aangemaakt en uitgecheckt.',
  'Unable to upload file: failed to fseek() to offset %d in file at path "%s".' => 'Kan bestand niet uploaden: fseek() naar offset %d in bestand op pad "%s" is mislukt.',
  'Nov' => 'nov',
  'Unnecessary whitespace around paamayim nekudotayim (double colon) operator.' => 'Onnodige witruimte rond paamayim nekudotayim (dubbele dubbele punt)-operator.',
  'You can not change the Conduit URI after a conduit is already open.' => 'U kunt de Conduit-URI niet wijzigen nadat een conduit al is geopend.',
  'Lint raised errors!' => 'Lint heeft fouten opgeleverd!',
  '%s: failed to decode tree.' => '%s: decoderen van boom is mislukt.',
  'Commit message was not amended. Amending commit message is only supported in git and hg (version 2.2 or newer)' => 'Commitbericht is niet aangepast. Het aanpassen van commitberichten wordt alleen ondersteund in git en hg (versie 2.2 of nieuwer)',
  'ONTO TARGET' => 'NAAR DOEL',
  'Call-Time Pass-By-Reference' => 'Aanroeptijd-doorverwijzing',
  'Unknown' => 'Onbekend',
  'Confirms landing more than %s commit(s) in a single operation.' => array(
    'Bevestigt het landen van meer dan %s commit in één handeling.',
    'Bevestigt het landen van meer dan %s commits in één handeling.',
  ),
  'Variable references should not be prefixed with whitespace.' => 'Variabeleverwijzingen mogen niet worden voorafgegaan door witruimte.',
  'Install PHP.' => 'Installeer PHP.',
  'The logical value of this expression is static. Did you forget to remove some debugging code?' => 'De logische waarde van deze expressie is statisch. Bent u vergeten wat debugcode te verwijderen?',
  'There are no commits reachable from the specified sources (%s) which are not already present in the state you are merging into ("%s"), so nothing can land.' => 'Er zijn geen commits bereikbaar vanuit de opgegeven bronnen (%s) die niet al aanwezig zijn in de status waarin u merget ("%s"), dus er kan niets worden geland.',
  'Please provide a summary.' => 'Geef een samenvatting op.',
  'Supply a commit message for this patch, then save and exit.' => 'Geef een commitbericht op voor deze patch, sla op en sluit af.',
  'Avoid use of product name literals in "pht()": use generic language or an appropriate method from the "PlatformSymbols" class instead so the software can be forked. String uses names: %s.' => 'Vermijd het gebruik van letterlijke productnamen in "pht()": gebruik in plaats daarvan generieke taal of een geschikte methode uit de klasse "PlatformSymbols" zodat de software kan worden geforkt. Tekenreeks gebruikt namen: %s.',
  'Graph already has a node "%s"!' => 'Graaf heeft al een knooppunt "%s"!',
  '`%s` Method Cannot Be Declared `%s`' => '`%s`-methode kan niet worden gedeclareerd als `%s`',
  'Channel closed!' => 'Kanaal gesloten!',
  'PASS' => 'GESLAAGD',
  'Argument "%s" appears after the first non-flag argument. This special argument must appear before other arguments.' => 'Argument "%s" verschijnt na het eerste niet-vlagargument. Dit speciale argument moet vóór andere argumenten verschijnen.',
  'UPGRADED' => 'BIJGEWERKT',
  'Switching to local branch "%s".' => 'Overschakelen naar lokale branch "%s".',
  'Expected an array for %%L%s conversion.' => 'Verwachtte een array voor %%L%s-conversie.',
  'You have selected multiple branches to push changes onto. Pushing to multiple branches is not supported by "arc land" in Mercurial: Mercurial commits may only belong to one branch, so this operation can not be executed atomically.' => 'U hebt meerdere branches geselecteerd om wijzigingen naartoe te pushen. Pushen naar meerdere branches wordt niet ondersteund door "arc land" in Mercurial: Mercurial-commits mogen slechts tot één branch behoren, dus deze handeling kan niet atomair worden uitgevoerd.',
  'Failed to replace template variables while rendering cow!' => 'Vervangen van sjabloonvariabelen bij het renderen van koe is mislukt!',
  'Buffer discards are not currently supported by the streaming parser.' => 'Bufferverwijderingen worden momenteel niet ondersteund door de streamingverwerker.',
  '[Invalid Translation!] %s' => '[Incorrecte vertaling!] %s',
  'Skip checks for untracked files in the working copy.' => 'Controles voor niet-gevolgde bestanden in de werkkopie overslaan.',
  'Confirms use of a revision that you are not the author of.' => 'Bevestigt het gebruik van een versie waarvan u niet de auteur bent.',
  'Created a new paste.' => 'Een nieuw plaksel aangemaakt.',
  'Apr' => 'apr',
  'Spacing Before Array Index' => 'Spatiëring voor array-index',
  'Attempting to merge changes.' => 'Poging om wijzigingen te mergen.',
  'Tautological Expression' => 'Tautologische expressie',
  'Some ancestor commits are associated with revisions that have already been closed. These changes will be skipped:' => 'Sommige vooroudercommits zijn gekoppeld aan versies die al zijn gesloten. Deze wijzigingen worden overgeslagen:',
  'Pushing changes to staging area...' => 'Wijzigingen pushen naar staging-omgeving...',
  'IP address "%s" is not properly formatted: an address with omitted trailing segments must end with "::".' => 'IP-adres "%s" is niet correct opgemaakt: een adres met weggelaten achterloopsegmenten moet eindigen met "::".',
  'Lock \'%s\' has already been locked by this process.' => 'Vergrendeling \'%s\' is al vergrendeld door dit proces.',
  'Minimum value must be an integer.' => 'Minimumwaarde moet een geheel getal zijn.',
  'SAVE PROMPT' => 'PROMPT OPSLAAN',
  'Sort out the lint changes that were applied to the working copy and relint.' => 'De lintwijzigingen die op de werkkopie zijn toegepast uitzoeken en opnieuw linten.',
  'the repository has only one commit.' => 'de repository heeft slechts één commit.',
  'If you run \'%s\', changes between the commit:' => 'Als u \'%s\' uitvoert, worden wijzigingen tussen de commit:',
  'it is the first commit between \'%s\' (the merge-base of \'%s\' and HEAD) which is also contained by another branch (%s).' => 'het is de eerste commit tussen \'%s\' (de merge-base van \'%s\' en HEAD) die ook in een andere branch (%s) zit.',
  'Failed to open URI "%s" in browser ("%s"). Check your "browser" config option.' => 'Openen van URI "%s" in browser ("%s") is mislukt. Controleer uw "browser"-configuratieoptie.',
  'applied' => 'toegepast',
  'This line contains trailing whitespace. Consider setting up your editor to automatically remove trailing whitespace.' => 'Deze regel bevat witruimte aan het einde. Overweeg uw editor in te stellen om automatisch witruimte aan het einde te verwijderen.',
  'Stream iterators can not be rewound!' => 'Stream-iterators kunnen niet worden teruggespoeld!',
  'You must configure discovery rules to map C# files back to test projects (`%s` in %s).' => 'U moet ontdekkingsregels configureren om C#-bestanden terug te koppelen aan testprojecten (`%s` in %s).',
  'Revision "%s" was not found anywhere in this working copy.' => 'Versie "%s" is nergens in deze werkkopie gevonden.',
  'Apply changes from an arc bundle generated with \'%s\'.' => 'Wijzigingen toepassen vanuit een arc-bundel gegenereerd met \'%s\'.',
  'Unable to decode MIME header: install "iconv" or "mbstring" extension.' => 'Kan MIME-header niet decoderen: installeer de uitbreiding "iconv" of "mbstring".',
  'Revision URI:' => 'Versie-URI:',
  'Alias Functions' => 'Aliasfuncties',
  'Argument "%s" was provided twice.' => 'Argument "%s" is twee keer opgegeven.',
  'Show a detailed coverage report on the CLI. Implies %s.' => 'Een gedetailleerd dekkingsrapport weergeven op de CLI. Impliceert %s.',
  'function' => 'functie',
  'Convention: no spaces before closing parentheses.' => 'Conventie: geen spaties voor sluithaakjes.',
  'You are landing %s revision(s) which are not in the state "Accepted", indicating that they have not been accepted by reviewers. Normally, you should land changes only once they have been accepted. These revisions are in the wrong state:' => array(
    'U laat %s versie landen die niet in de status "Geaccepteerd" staat, wat aangeeft dat die niet is geaccepteerd door beoordelaars. Normaal gesproken moet u wijzigingen pas laten landen nadat die zijn geaccepteerd. Deze versie staat in de verkeerde status:',
    'U laat %s versies landen die niet in de status "Geaccepteerd" staan, wat aangeeft dat die niet zijn geaccepteerd door beoordelaars. Normaal gesproken moet u wijzigingen pas laten landen nadat die zijn geaccepteerd. Deze versies staan in de verkeerde status:',
  ),
  'Config File' => 'Configuratiebestand',
  'Opening %s failed! %s.' => 'Openen van %s is mislukt! %s.',
  'Command to execute.' => 'Uit te voeren opdracht.',
  'Connected' => 'Verbonden',
  '<opaque envelope>' => '<ondoorzichtige envelop>',
  'The remote host returned something other than an HTTP response: %s' => 'De externe host gaf iets anders terug dan een HTTP-antwoord: %s',
  'You have merge conflicts in this working copy. Resolve merge conflicts before proceeding.' => 'U hebt mergeconflicten in deze werkkopie. Los mergeconflicten op voordat u verdergaat.',
  'INSTALL' => 'INSTALLEREN',
  'Never amend commits in the working copy with lint patches.' => 'Commits in de werkkopie nooit aanpassen met lintpatches.',
  'CIDR block "%s" is not formatted correctly. Expected an IP block in CIDR notation, like "%s" or "%s".' => 'CIDR-blok "%s" is niet correct opgemaakt. Verwachtte een IP-blok in CIDR-notatie, zoals "%s" of "%s".',
  'Pilot a probe from the vessel "Arcanoid".' => 'Een sonde besturen vanuit het vaartuig "Arcanoid".',
  'Configuration option ("%s") defined by extension "%s" has an alias ("%s") which conflicts with an existing option. The key and aliases of each option must be unique.' => 'Configuratieoptie ("%s") gedefinieerd door uitbreiding "%s" heeft een alias ("%s") die conflicteert met een bestaande optie. De sleutel en aliassen van elke optie moeten uniek zijn.',
  'CONDUIT' => 'CONDUIT',
  'Specifying this flag multiple times will push to multiple branches.' => 'Deze vlag meerdere keren opgeven zal naar meerdere branches pushen.',
  'it is the merge-base of the explicitly specified base commit \'%s\' and HEAD.' => 'het is de merge-base van de expliciet opgegeven basiscommit \'%s\' en HEAD.',
  'Install RuboCop using `%s`.' => 'Installeer RuboCop met `%s`.',
  'This diff is against commit %s, but the commit is nowhere in the working copy. Try to apply it against the current working copy state? (%s)' => 'Deze diff is tegen commit %s, maar de commit is nergens in de werkkopie. Proberen toe te passen tegen de huidige werkkopie-status? (%s)',
  'The \'%s\' file seems to be out-of-date. You probably need to run `%s`.' => 'Het bestand \'%s\' lijkt verouderd te zijn. U moet waarschijnlijk `%s` uitvoeren.',
  'When updating a revision, use the specified message instead of prompting.' => 'Bij het bijwerken van een versie, het opgegeven bericht gebruiken in plaats van te vragen.',
  'No revision "%s" exists, or you do not have permission to view it.' => 'Er bestaat geen versie "%s", of u hebt geen toestemming om deze te bekijken.',
  'First hash argument must be a string.' => 'Eerste hash-argument moet een tekenreeks zijn.',
  'One Class Per File' => 'Eén klasse per bestand',
  'Unknown line change type \'%s\'.' => 'Onbekend regelwijzigingstype \'%s\'.',
  'Mar' => 'mrt',
  'You are not the author of revision "%s", are you sure you want to close it?' => 'U bent niet de auteur van versie "%s", weet u zeker dat u deze wilt sluiten?',
  'Failed to extract link target!' => 'Extraheren van linkdoel is mislukt!',
  'No rules left from source \'%s\'.' => 'Geen regels meer over van bron \'%s\'.',
  'Only show tasks assigned to the given username, also accepts %s to show all, default is you.' => 'Alleen taken weergeven die zijn toegewezen aan de opgegeven gebruikersnaam, accepteert ook %s om alles weer te geven, standaard bent u het.',
  'New Version Available!' => 'Nieuwe versie beschikbaar!',
  'BRANCH OPTION NOT AVAILABLE' => 'BRANCHOPTIE NIET BESCHIKBAAR',
  'SCAN' => 'SCANNEN',
  'Command to use to invoke an interactive editor, like `%s` or `%s`. This setting overrides the %s environmental variable.' => 'Opdracht om een interactieve editor aan te roepen, zoals `%s` of `%s`. Deze instelling overschrijft de omgevingsvariabele %s.',
  'Bad object key ("%s").' => 'Incorrecte objectsleutel ("%s").',
  'Expected workflow ("%s", of class "%s") to return an "ArcanistWorkflowInformation" object from call to "getWorkflowInformation()", got %s.' => 'Verwachtte dat workflow ("%s", van klasse "%s") een "ArcanistWorkflowInformation"-object teruggeeft bij aanroep van "getWorkflowInformation()", maar kreeg %s.',
  'Parameter has invalid type.' => 'Parameter heeft een incorrect type.',
  'Noncanonical Symbol' => 'Niet-canoniek symbool',
  'The server does not support staging areas for this repository.' => 'De server ondersteunt geen staging-omgevingen voor deze repository.',
  'Install cpplint.py using `%s`, and place it in your path with the appropriate permissions set.' => 'Installeer cpplint.py met `%s` en plaats het in uw pad met de juiste rechten ingesteld.',
  'Specify either setData() or setPath() when building a file data reference, but not both.' => 'Geef setData() of setPath() op bij het bouwen van een bestandsgegevensreferentie, maar niet beide.',
  'Parameter \'%s\' has invalid type.' => 'Parameter \'%s\' heeft een incorrect type.',
  'BUILD FAILURES' => 'BUILDFOUTEN',
  '`%s` method cannot be declared `%s`. This construct will cause a fatal error.' => '`%s`-methode kan niet worden gedeclareerd als `%s`. Deze constructie veroorzaakt een onherstelbare fout.',
  '\'%s\' files should not be executable.' => '\'%s\'-bestanden mogen niet uitvoerbaar zijn.',
  'Path to a custom CA bundle file to be used for cURL calls. This is used primarily when your conduit endpoint is behind HTTPS signed by your organization\'s internal CA.' => 'Pad naar een aangepast CA-bundelbestand voor cURL-aanroepen. Dit wordt voornamelijk gebruikt wanneer uw conduit-eindpunt achter HTTPS zit dat is ondertekend door de interne CA van uw organisatie.',
  'JSHint returned unparseable output.' => 'JSHint gaf niet-verwerkbare uitvoer terug.',
  'Disables lint for files that are marked as "%s", indicating that they contain generated code.' => 'Schakelt lint uit voor bestanden die zijn gemarkeerd als "%s", wat aangeeft dat ze gegenereerde code bevatten.',
  'Revision \'%s\' does not exist.' => 'Versie \'%s\' bestaat niet.',
  ' <%dms' => ' <%dms',
  'Follow naming conventions: classes should be named using `%s`.' => 'Volg de naamgevingsrichtlijnen: klassen moeten met `%s` worden benoemd.',
  'Failed to install signal handler!' => 'Installeren van signaalhandler is mislukt!',
  'Depends on %s. ' => 'Hangt af van %s. \\',
  '**upgrade**' => '**upgrade**',
  'This class is neither `%s` nor `%s`, and does not have a docblock marking it `%s`.' => 'Deze klasse is noch `%s` noch `%s`, en heeft geen docblock die het markeert als `%s`.',
  'Avoid `%s` unless the second parameter is specified. It is confusing and hinders static analysis.' => 'Vermijd `%s` tenzij de tweede parameter is opgegeven. Het is verwarrend en belemmert statische analyse.',
  'Local branch "%s" has unpublished changes, ending updates.' => 'Lokale branch "%s" heeft ongepubliceerde wijzigingen, updates beëindigen.',
  'Requested path \'%s\' is not a file.' => 'Opgevraagd pad \'%s\' is geen bestand.',
  'No type name for token type ID \'%s\' in \'%s\' AAST.' => 'Geen typenaam voor tokentype-ID \'%s\' in \'%s\' AAST.',
  'Unable to convert URI "%s" into a standard URI because the path is relative. Standard URIs can not represent relative paths.' => 'Kan URI "%s" niet converteren naar een standaard-URI omdat het pad relatief is. Standaard-URI\'s kunnen geen relatieve paden weergeven.',
  'it is the merge-base of \'%s\' and HEAD, as you just specified.' => 'het is de merge-base van \'%s\' en HEAD, zoals u zojuist hebt opgegeven.',
  'Aborted update of revision: You are not the owner.' => 'Bijwerken van versie afgebroken: u bent niet de eigenaar.',
  'Empty user in credentials.' => 'Lege gebruiker in aanmeldgegevens.',
  'Convention: put a space after control statements.' => 'Conventie: zet een spatie na besturingsstructuren.',
  'Unknown Mercurial capability "%s".' => 'Onbekende Mercurial-mogelijkheid "%s".',
  'the repository has no commits.' => 'de repository heeft geen commits.',
  '#%d' => '#%d',
  'Command string argument includes text which is not valid UTF-8. This library can not safely escape this sequence in command line arguments in Windows environments.' => 'Opdrachttekenreeksargument bevat tekst die geen geldige UTF-8 is. Deze bibliotheek kan deze reeks niet veilig escapen in opdrachtregelargumenten in Windows-omgevingen.',
  'Expected \'%s\' divider line.' => 'Verwachtte \'%s\'-scheidingsregel.',
  '...and "%s" will be sent to Differential, because %s' => '...en "%s" wordt naar Differential gestuurd, omdat %s',
  'You can not discard the result buffer while streaming results to disk: there is no in-memory buffer to discard.' => 'U kunt de resultaatbuffer niet verwerpen terwijl resultaten naar schijf worden gestreamd: er is geen buffer in het geheugen om te verwerpen.',
  'Space Around Binary Operator' => 'Spatie rond binaire operator',
  'The branches you are landing are connected to multiple different remote branches via Git branch upstreams. Use "--onto" to select the refs you want to push to.' => 'De branches die u landt zijn verbonden met meerdere verschillende remote branches via Git branch-upstreams. Gebruik "--onto" om de refs te selecteren waarnaar u wilt pushen.',
  'Landing the current branch, "%s".' => 'De huidige branch landen, "%s".',
  'You are amending the working copy using information from a revision that does not appear to be associated with the current state of the working copy.' => 'U past de werkkopie aan met informatie van een versie die niet gekoppeld lijkt te zijn aan de huidige status van de werkkopie.',
  'Land changes that depend on %s open revision(s)?' => array(
    'Wijzigingen laten landen die afhankelijk zijn van %s open versie?',
    'Wijzigingen laten landen die afhankelijk zijn van %s open versies?',
  ),
  'Confirms creation of a new library.' => 'Bevestigt het aanmaken van een nieuwe bibliotheek.',
  'it is the merge-base of \'%s\' and HEAD, as specified in \'%s\' in \'%s\'. This setting overrides other settings.' => 'het is de merge-base van \'%s\' en HEAD, zoals opgegeven in \'%s\' in \'%s\'. Deze instelling overschrijft andere instellingen.',
  'Failed to resolve symbol ref "%s".' => 'Oplossen van symboolref "%s" is mislukt.',
  'Server' => 'Server',
  '%s Value' => '%s-waarde',
  'Unable to sign Conduit request with signing key.' => 'Kan Conduit-verzoek niet ondertekenen met ondertekeningssleutel.',
  'instance of %s' => 'instantie van %s',
  'URI' => 'URI',
  'Need head hashes or exact hashes!' => 'Head-hashes of exacte hashes nodig!',
  '`%s` cannot be re-assigned. This construct will cause a PHP fatal error.' => '`%s` kan niet opnieuw worden toegewezen. Deze constructie veroorzaakt een onherstelbare PHP-fout.',
  'Land %s revision(s) anyway, despite ongoing builds?' => array(
    'Toch %s versie laten landen, ondanks lopende builds?',
    'Toch %s versies laten landen, ondanks lopende builds?',
  ),
  'Minimum ("%d") must not be greater than maximum ("%d").' => 'Minimum ("%d") mag niet groter zijn dan maximum ("%d").',
  'You must specify a Conduit URI with %s before you can establish a conduit.' => 'U moet een Conduit-URI opgeven met %s voordat u een conduit kunt opzetten.',
  'Rewrite this file?' => 'Dit bestand herschrijven?',
  'To log in and save credentials for this server, run this command:' => 'Om in te loggen en aanmeldgegevens voor deze server op te slaan, voert u deze opdracht uit:',
  'Attempting to get subprocess status in "ExecFuture" with no valid subprocess.' => 'Poging om subprocesstatus op te halen in "ExecFuture" zonder geldig subproces.',
  'Command string argument includes a NULL byte. This byte can not be safely escaped in command line arguments in Linux environments.' => 'Opdrachttekenreeksargument bevat een NULL-byte. Deze byte kan niet veilig worden ge-escaped in opdrachtregelargumenten in Linux-omgevingen.',
  'There are %s commits reachable from the specified sources (%s) that are not present in the repository state you are merging into ("%s"). All of these commits will land:' => array(
    'Er is één commit bereikbaar vanuit de opgegeven bronnen (%2$s) die niet aanwezig zijn in de repositorystatus waarin u samenvoegt ("%3$s"). Al deze commits gaan landen:',
    'Er zijn %s commits bereikbaar vanuit de opgegeven bronnen (%s) die niet aanwezig zijn in de repositorystatus waarin u samenvoegt ("%s"). Al deze commits gaan landen:',
  ),
  '**liberate**' => '**liberate**',
  'Unknown lint message!' => 'Onbekend lintbericht!',
  'Grid has no column "%s".' => 'Raster heeft geen kolom "%s".',
  'The UUID for this working copy is "%s".' => 'De UUID voor deze werkkopie is "%s".',
  'Searching for libraries in the current working directory...' => 'Zoeken naar bibliotheken in de huidige werkmap...',
  'MATCHING REVISIONS' => 'OVEREENKOMENDE VERSIES',
  'You can learn more about how this software handles character encodings (and how to configure encoding settings and detect and correct encoding problems) by reading \'User Guide: UTF-8 and Character Encoding\' in the documentation.' => 'U kunt meer leren over hoe deze software tekencodering verwerkt (en hoe u coderingsinstellingen configureert en coderingsproblemen detecteert en corrigeert) door \'User Guide: UTF-8 and Character Encoding\' in de documentatie te lezen.',
  'Command exited with nonzero error code.' => 'Opdracht is afgesloten met een foutcode die niet nul is.',
  'No unit test engine is configured for this project.' => 'Er is geen unittestengine geconfigureerd voor dit project.',
  'When creating a revision, read revision information from this file.' => 'Bij het aanmaken van een versie, versie-informatie uit dit bestand lezen.',
  'Invalid octal numeric scalar. `%s` is not a valid octal and will be interpreted as `%d`.' => 'Incorrecte octale numerieke scalaire waarde. `%s` is geen juist octaal getal en wordt geïnterpreteerd als `%d`.',
  'SHELL ALIAS' => 'SHELL-ALIAS',
  'Questionable Use of `%s`' => 'Twijfelachtig gebruik van `%s`',
  'Data parameter must be an array or string.' => 'Gegevensparameter moet een array of tekenreeks zijn.',
  'Resuming work on revision:' => 'Werk aan versie hervatten:',
  'Only agent actions may be added to a plan.' => 'Alleen agenthandelingen mogen aan een plan worden toegevoegd.',
  'Assertion of caught exception failed (at %s:%d).' => 'Assertie van gevangen uitzondering is mislukt (op %s:%d).',
  'NEW DIFFERENTIAL REVISION' => 'NIEUWE DIFFERENTIAL-VERSIE',
  'Argument' => 'Argument',
  '%s line(s)' => array(
    'regel',
    'regels',
  ),
  'Error in parsing \'%s\' file.' => 'Fout bij het verwerken van bestand \'%s\'.',
  'Trying rules from source \'%s\'.' => 'Regels van bron \'%s\' proberen.',
  'After creating a diff or revision, open it in a web browser.' => 'Na het aanmaken van een diff of versie, deze openen in een webbrowser.',
  'Missing required "--" in argument list.' => 'Vereiste "--" ontbreekt in argumentenlijst.',
  'Generate diff by executing a specified command, not from the working copy. This disables many features which depend on having access to the working copy.' => 'Diff genereren door een opgegeven opdracht uit te voeren, niet vanuit de werkkopie. Dit schakelt veel functies uit die afhankelijk zijn van toegang tot de werkkopie.',
  'Only show tasks that are not assigned (upforgrabs).' => 'Alleen taken weergeven die niet zijn toegewezen (beschikbaar).',
  'Do you want to amend these %s change(s) to the current commit?' => array(
    'Wilt u deze %s wijziging toevoegen aan de huidige commit?',
    'Wilt u deze %s wijzigingen toevoegen aan de huidige commit?',
  ),
  'You have missing files in this working copy. Revert or formally remove them (with `%s`) before proceeding.' => 'U hebt ontbrekende bestanden in deze werkkopie. Herstel ze of verwijder ze formeel (met `%s`) voordat u verdergaat.',
  'USAGE' => 'GEBRUIK',
  'LOGIN REQUIRED' => 'INLOGGEN VEREIST',
  'Class contains %s %s method(s) and must therefore be declared `%s`.' => array(
    'Klasse bevat %s %s-methode en moet daarom worden gedeclareerd als `%s`.',
    'Klasse bevat %s %s-methoden en moet daarom worden gedeclareerd als `%s`.',
  ),
  'Rule \'%s\' popped off the last state.' => 'Regel \'%s\' heeft de laatste status verwijderd.',
  'ALREADY A DRAFT' => 'AL EEN CONCEPT',
  'Command killed by timeout after running for more than %s seconds.' => 'Opdracht afgebroken door timeout na meer dan %s seconden uitvoering.',
  'Pass in custom dictionaries.' => 'Aangepaste woordenboeken opgeven.',
  'Linter \'%s\' specifies invalid type \'%s\'. Available linters are: %s.' => 'Linter \'%s\' specificeert incorrect type \'%s\'. Beschikbare linters zijn: %s.',
  'Configure your editor to use spaces for indentation.' => 'Configureer uw editor om spaties te gebruiken voor inspringing.',
  'AMBIGUOUS REVISION' => 'DUBBELZINNIGE VERSIE',
  'Query matched multiple refs, expected zero or one.' => 'Query kwam overeen met meerdere refs, verwachtte nul of één.',
  'Unexpected return value from calls to "%s(...)". More than one object returned a value with unique key "%s". This key was returned by objects with indexes: %s.' => 'Onverwachte retourwaarde van aanroepen van "%s(...)". Meer dan één object gaf een waarde terug met unieke sleutel "%s". Deze sleutel werd teruggegeven door objecten met indexen: %s.',
  'Generate a diff (with just local changes) anyway?' => 'Toch een diff genereren (met alleen lokale wijzigingen)?',
  'Editor exited with an error code (#%d).' => 'Editor is afgesloten met een foutcode (#%d).',
  'Use of Deprecated Function' => 'Gebruik van verouderde functie',
  'Type of setting \'%s\' must be list. You can specify a list in JSON, like: %s' => 'Type van instelling \'%s\' moet een lijst zijn. U kunt een lijst opgeven in JSON, zoals: %s',
  'Detect syntax errors in JSON files.' => 'Syntaxisfouten in JSON-bestanden detecteren.',
  'Unexpected "%s" section in property deletion.' => 'Onverwachte "%s"-sectie bij het verwijderen van eigenschap.',
  'You are using "--hold", so execution will stop before the %s bookmark(s) are actually created. You will be given instructions to create the bookmarks.' => array(
    'U gebruikt "--hold", dus de uitvoering stopt voordat de %s bladwijzer daadwerkelijk worden aangemaakt. U krijgt instructies om de bladwijzer aan te maken.',
    'U gebruikt "--hold", dus de uitvoering stopt voordat de %s bladwijzer daadwerkelijk worden aangemaakt. U krijgt instructies om de bladwijzers aan te maken.',
  ),
  '`%s` properties should be avoided. Instead of exposing the property value directly, consider using getter and setter methods.' => '`%s`-eigenschappen moeten worden vermeden. In plaats van de eigenschapswaarde direct bloot te stellen, overweeg getter- en settermethoden te gebruiken.',
  'In Preparation' => 'In voorbereiding',
  'Unable to parse byte size \'%s\'!' => 'Kan bytegrootte \'%s\' niet verwerken!',
  'No task "%s" exists, or you do not have permission to view it.' => 'Er bestaat geen taak "%s", of u hebt geen toestemming om deze te bekijken.',
  'You are updating a revision ("%s") with the "--draft" flag, but this revision is already a draft. You only need to provide the "--draft" flag when creating a revision. Draft revisions are not published until you explicitly request review from the web UI.' => 'U werkt een versie ("%s") bij met de vlag "--draft", maar deze versie is al een concept. U hoeft de vlag "--draft" alleen op te geven bij het aanmaken van een versie. Conceptversies worden niet gepubliceerd totdat u expliciet een beoordeling aanvraagt via de webinterface.',
  'Synchronizing "%s" from Perforce...' => '"%s" synchroniseren vanuit Perforce...',
  'Failed to write response to disk. (Maybe the disk is full?)' => 'Schrijven van antwoord naar schijf is mislukt. (Misschien is de schijf vol?)',
  'Expected Open Tag' => 'Verwachtte opentag',
  'Unable to determine revision for commit "%s".' => 'Kan versie voor commit "%s" niet bepalen.',
  'Updating to the revision\'s base commit' => 'Bijwerken naar de basiscommit van de versie',
  'You can not specify paths with %s. The %s flag lints every tracked file in the working copy.' => 'U kunt geen paden opgeven met %s. De vlag %s lint elk gevolgd bestand in de werkkopie.',
  'Expected a non-null return from call to "%s->saveStash()".' => 'Verwachtte een niet-null retourwaarde van aanroep van "%s->saveStash()".',
  'Detecting current shell...' => 'Huidige shell detecteren...',
  'There was an error negotiating the SSL connection. This usually indicates that the remote host has a bad SSL certificate, or your local host has some sort of SSL misconfiguration which prevents it from accepting the CA. If you are using a self-signed certificate, see instructions in "%s".' => 'Er was een fout bij het onderhandelen van de SSL-verbinding. Dit geeft meestal aan dat de externe host een incorrect SSL-certificaat heeft, of dat uw lokale host een soort SSL-misconfiguratie heeft die het accepteren van de CA verhindert. Als u een zelfondertekend certificaat gebruikt, zie de instructies in "%s".',
  'OpenSSL encountered an error verifying the request signature: %s' => 'OpenSSL heeft een fout aangetroffen bij het verifiëren van de verzoekhandtekening: %s',
  'Default value for parameters with bool type hint can only be true or false.' => 'Standaardwaarde voor parameters met bool-typehint kan alleen true of false zijn.',
  'LINT OKAY' => 'LINT OK',
  'This file contains leading whitespace at the beginning of the file. This is unnecessary and should be avoided when possible.' => 'Dit bestand bevat witruimte aan het begin van het bestand. Dit is onnodig en moet waar mogelijk worden vermeden.',
  'Severity rule "%s" is not a valid regular expression.' => 'Ernstregel "%s" is geen geldige reguliere expressie.',
  'This test is expected to skip.' => 'Deze test wordt verwacht over te slaan.',
  'Flag "--browse" is not supported when reading pastes. Use "arc browse" to browse known objects.' => 'Vlag "--browse" wordt niet ondersteund bij het lezen van plaksels. Gebruik "arc browse" om bekende objecten te bekijken.',
  'After the upload completes, open the files in a web browser.' => 'Na het voltooien van de upload, de bestanden openen in een webbrowser.',
  'Fetch of "%s" from remote "%s" failed! Fix the error and run "arc land" again.' => 'Ophalen van "%s" van remote "%s" is mislukt! Los de fout op en voer "arc land" opnieuw uit.',
  'Shell completion for "%s" is already installed.' => 'Shell-aanvulling voor "%s" is al geïnstalleerd.',
  '[%s] Working...' => '[%s] Bezig...',
  'There is no locale with the locale code "%s".' => 'Er is geen taalinstelling met de taalcode "%s".',
  'Python PyFlakes' => 'Python PyFlakes',
  'Create and modify command aliases.' => 'Opdrachtaliassen aanmaken en wijzigen.',
  'it is the merge-base of \'%s\' and HEAD, as specified by \'%s\' in your %s \'base\' configuration.' => 'het is de merge-base van \'%s\' en HEAD, zoals opgegeven door \'%s\' in uw %s \'base\'-configuratie.',
  'The specified commit range is empty, backward or invalid: the base (%s) is not an ancestor of the head (%s). You can not diff an empty or reversed commit range.' => 'Het opgegeven commitbereik is leeg, achterwaarts of incorrect: de basis (%s) is geen voorouder van de head (%s). U kunt geen diff maken van een leeg of omgekeerd commitbereik.',
  'The directory "%s" does not exist. Do you want to create it?' => 'De map "%s" bestaat niet. Wilt u deze aanmaken?',
  'JSON command \'%s\' emitted text to stderr when none was expected: %d' => 'JSON-opdracht \'%s\' heeft tekst naar stderr gestuurd terwijl dat niet werd verwacht: %d',
  'You are running an old version of %s. Please upgrade to version %s.' => 'U gebruikt een oude versie van %s. Werk bij naar versie %s.',
  'Unexpected field count when parsing line "%s", got %s but expected %s.' => 'Onverwacht aantal velden bij het verwerken van regel "%s", kreeg %s maar verwachtte %s.',
  'Failed closing file \'%s\' after write.' => 'Sluiten van bestand \'%s\' na schrijven is mislukt.',
  'Unexpected output from "hg log ...": %s' => 'Onverwachte uitvoer van "hg log ...": %s',
  'Since there are no revisions in Differential which match this working copy, a new revision will be **created** if you run \'%s\'.

' => 'Aangezien er geen versies in Differential zijn die overeenkomen met deze werkkopie, wordt een nieuwe versie **aangemaakt** als u \'%s\' uitvoert.

\\',
  '<... %s more commits ...>' => array(
    '<... nog %s commit ...>',
    '<... nog %s commits ...>',
  ),
  '%s does affect revisions.' => '%s beïnvloedt versies.',
  'Use `%s` to call parent method.' => 'Gebruik `%s` om de bovenliggende methode aan te roepen.',
  'Empty File' => 'Leeg bestand',
  'Expected exactly one argument to "working-copy(...)" with a commit hash.' => 'Verwachtte precies één argument voor "working-copy(...)" met een commithash.',
  '**download** [__options__] -- __file__' => '**download** [__opties__] -- __bestand__',
  '%s (%s)' => '%s (%s)',
  'Install Cppcheck using `%s` or similar.' => 'Installeer Cppcheck met `%s` of vergelijkbaar.',
  'Server exited unexpectedly!' => 'Server is onverwacht afgesloten!',
  'Unexpected \'%s\' in state %s! Expected: %s' => 'Onverwachte \'%s\' in status %s! Verwacht: %s',
  'This is not a container action.' => 'Dit is geen containerhandeling.',
  '(Message saved to %s.)' => '(Bericht opgeslagen in %s.)',
  'INTERRUPT' => 'ONDERBREKING',
  'You must call %s before you can call %s.' => 'U moet %s aanroepen voordat u %s kunt aanroepen.',
  'String value is not valid UTF8, and can not be JSON encoded: %s' => 'Tekenreekswaarde is geen geldige UTF8 en kan niet als JSON worden gecodeerd: %s',
  'No workflow selected.' => 'Geen workflow geselecteerd.',
  'Specify the end of the commit range to select.' => 'Geef het einde van het commitbereik op om te selecteren.',
  'Unable to open stdout temporary file ("%s") for reading.' => 'Kan tijdelijk stdout-bestand ("%s") niet openen voor lezen.',
  'Show internal object information.' => 'Interne objectinformatie weergeven.',
  'Configured command aliases. Use "arc alias" to define aliases.' => 'Geconfigureerde opdrachtaliassen. Gebruik "arc alias" om aliassen te definiëren.',
  'This function exists only to document the call signature for %s callbacks.' => 'Deze functie bestaat alleen om de aanroephandtekening voor %s-callbacks te documenteren.',
  'Changes:' => 'Wijzigingen:',
  '(To ignore these %s change(s), add them to "%s".)' => array(
    '(Om deze wijziging te negeren, voeg die toe aan "%2$s".)',
    '(Om deze wijzigingen te negeren, voeg die toe aan "%2$s".)',
  ),
  'Amend the working copy, synchronizing the local commit message from
Differential.

Supported in Mercurial 2.2 and newer.' => 'De werkkopie aanpassen, het lokale commitbericht synchroniseren vanuit
Differential.

Ondersteund in Mercurial 2.2 en nieuwer.',
  '<listeners = %s>' => '<luisteraars = %s>',
  'Pass' => 'Geslaagd',
  'Some commits reachable from the specified sources (%s) are not associated with revisions, and may not have been reviewed. These commits will be landed as though they belong to the nearest ancestor revision:' => 'Sommige commits bereikbaar vanuit de opgegeven bronnen (%s) zijn niet gekoppeld aan versies en zijn mogelijk niet beoordeeld. Deze commits worden geland alsof ze bij de dichtstbijzijnde voorouderversie horen:',
  'Required executable "%s" is not available.' => 'Vereist uitvoerbaar bestand "%s" is niet beschikbaar.',
  '**inspect** [__options__] -- __object__' => '**inspect** [__opties__] -- __object__',
  'File "%s" already exists.' => 'Bestand "%s" bestaat al.',
  'IMPLICIT COMMITS' => 'IMPLICIETE COMMITS',
  'Night has fallen. The moon overhead is waning. You can barely make out your surroundings. It is very cold.' => 'De nacht is gevallen. De maan boven u is afnemend. U kunt uw omgeving nauwelijks onderscheiden. Het is erg koud.',
  'If you intended to create a new revision, use:' => 'Als u een nieuwe versie wilde aanmaken, gebruik:',
  'APPLIED' => 'TOEGEPAST',
  'Repeatable arguments may not have a default (always array() for arguments which accept a parameter, or 0 for arguments which do not).' => 'Herhaalbare argumenten mogen geen standaardwaarde hebben (altijd array() voor argumenten die een parameter accepteren, of 0 voor argumenten die dat niet doen).',
  'Land a specific revision, rather than determining revisions automatically from the commits that are landing.' => 'Een specifieke versie landen, in plaats van versies automatisch te bepalen uit de commits die worden geland.',
  'You can not define an alias for "%s" because it is a builtin workflow for the current toolset ("%s"). The "alias" workflow can only define new commands as aliases; it can not redefine existing commands to mean something else.' => 'U kunt geen alias definiëren voor "%s" omdat het een ingebouwde workflow is voor de huidige toolset ("%s"). De "alias"-workflow kan alleen nieuwe opdrachten als aliassen definiëren; het kan bestaande opdrachten niet herdefiniëren om iets anders te betekenen.',
  'Upgrade arc now?' => 'Arc nu upgraden?',
  'Refs were selected by reading "%s" configuration: %s.' => 'Refs zijn geselecteerd door "%s"-configuratie te lezen: %s.',
  'This working copy is not associated with any repository.' => 'Deze werkkopie is niet gekoppeld aan een repository.',
  'Default value for parameters with `%s` type hint can only be an `%s` or `%s`.' => 'Standaardwaarde voor parameters met `%s`-typehint kan alleen een `%s` of `%s` zijn.',
  'Show an enhanced view of branches in the working copy.' => 'Een uitgebreide weergave van branches in de werkkopie weergeven.',
  'Unnecessary comma in list assignment.' => 'Onnodige komma in lijsttoewijzing.',
  'Argument should be countable.' => 'Argument moet telbaar zijn.',
  'Internal. Current term in the argument list being completed.' => 'Intern. Huidige term in de argumentenlijst die wordt aangevuld.',
  'Land %s revision(s) anyway, despite failed builds?' => array(
    'Toch %s versie laten landen, ondanks mislukte builds?',
    'Toch %s versies laten landen, ondanks mislukte builds?',
  ),
  '%s: %s' => '%s: %s',
  'Successfully applied patch.' => 'Patch toegepast.',
  'JSON command \'%s\' did not produce a valid JSON object on stdout: %s' => 'JSON-opdracht \'%s\' heeft geen geldig JSON-object op stdout geproduceerd: %s',
  'Updated an existing Differential revision:' => 'Een bestaande Differential-versie bijgewerkt:',
  'This command needs to communicate with a server, but no server URI is configured.' => 'Deze opdracht moet communiceren met een server, maar er is geen server-URI geconfigureerd.',
  'Use `%s` to perform static analysis on C/C++ code.' => 'Gebruik `%s` om statische analyse uit te voeren op C/C++-code.',
  '%s requires a revision number.' => '%s vereist een versienummer.',
  'Parent Member Reference' => 'Bovenliggend-lidverwijzing',
  'Linter %s requires %s version %s. You have version %s.' => 'Linter %s vereist %s versie %s. U hebt versie %s.',
  'Convention: space after `%s` token.' => 'Conventie: spatie na `%s`-token.',
  'RETURN' => 'TERUGKEREN',
  'The version control system ("%s") in the current working copy does not support branches.' => 'Het versiebeheersysteem ("%s") in de huidige werkkopie ondersteunt geen branches.',
  'Working Copy: Unable to find %s in any of these locations: %s.' => 'Werkkopie: Kan %s niet vinden op een van deze locaties: %s.',
  'Do not run unit tests.' => 'Geen unittests uitvoeren.',
  'Updated %s librarie(s).' => array(
    '%s bibliotheek bijgewerkt.',
    '%s bibliotheken bijgewerkt.',
  ),
  'Unexpected tokens whilst processing `%s`.' => 'Onverwachte tokens bij het verwerken van `%s`.',
  'Failed to overwrite file.' => 'Overschrijven van bestand is mislukt.',
  'Chinese (Traditional)' => 'Chinees (Traditioneel)',
  'Keyword Conventions' => 'Sleutelwoordconventies',
  'This large diff requires more space than it is allowed to use (limited to %s bytes; needs more than %s bytes).' => array(
    
    array(
      'Deze grote diff vereist meer ruimte dan is toegestaan (beperkt tot %s bytes; heeft meer dan %s byte nodig).',
      'Deze grote diff vereist meer ruimte dan is toegestaan (beperkt tot %s bytes; heeft meer dan %s bytes nodig).',
    ),
  ),
  'Expected vs Actual Output Diff
%s' => 'Verwacht vs werkelijke uitvoer-diff
%s',
  'The locale "%s" has an invalid fallback locale code ("%s"). No locale class exists which defines this locale.' => 'De taalinstelling "%s" heeft een incorrecte terugval-taalcode ("%s"). Er bestaat geen taalklasse die deze taalinstelling definieert.',
  'Only the function "viewer()" is supported.' => 'Alleen de functie "viewer()" wordt ondersteund.',
  'WORKFLOWS' => 'WORKFLOWS',
  'CLOSE' => 'SLUITEN',
  'Use of Echo Tag `%s`' => 'Gebruik van echotag `%s`',
  'Create this file?' => 'Dit bestand aanmaken?',
  'Listening' => 'Luisteren',
  'Feb' => 'feb',
  'Symbol "%s" is ambiguous.' => 'Symbool "%s" is dubbelzinnig.',
  'Inner Functions' => 'Interne functies',
  'This is slower than the default behavior and not atomic, but may make it easier to resolve conflicts and land complicated changes by allowing you to make progress one step at a time.' => 'Dit is langzamer dan het standaardgedrag en niet atomair, maar kan het gemakkelijker maken om conflicten op te lossen en ingewikkelde wijzigingen te landen door u stap voor stap vooruitgang te laten boeken.',
  '`%s` Used as Expression' => '`%s` gebruikt als uitdrukking',
  'More than one marker in the local working copy is associated with the revision "%s", using the most recent one.' => 'Meer dan één markering in de lokale werkkopie is gekoppeld aan de versie "%s", de meest recente wordt gebruikt.',
  'Arguments \'%s\' and \'%s\' are mutually exclusive' => 'Argumenten \'%s\' en \'%s\' sluiten elkaar uit',
  'Take control of a probe launched from the science vessel "Arcanoid".' => 'Neem de controle over een sonde gelanceerd vanuit het wetenschapsschip "Arcanoid".',
  'OpenSSL encountered an unknown error verifying the request: %s' => 'OpenSSL heeft een onbekende fout aangetroffen bij het verifiëren van het verzoek: %s',
  'Install pyflakes with `%s`.' => 'Installeer pyflakes met `%s`.',
  '%s WORKFLOW' => '%s-WORKFLOW',
  'Trying to get change for unchanged path \'%s\'!' => 'Poging om wijziging op te halen voor ongewijzigd pad \'%s\'!',
  'No staging area is configured for this repository.' => 'Er is geen staging-omgeving geconfigureerd voor deze repository.',
  'Message to Mercurial server should be an array.' => 'Bericht naar Mercurial-server moet een array zijn.',
  'Merge using a particular strategy. Supported strategies are "squash" and "merge".' => 'Mergen met een bepaalde strategie. Ondersteunde strategieën zijn "squash" en "merge".',
  'When calling "implode()", pass the "glue" argument first. (The other parameter order is deprecated in PHP 7.4 and raises a warning.)' => 'Bij het aanroepen van "implode()", geef het "lijm"-argument eerst door. (De andere parametervolgorde is verouderd in PHP 7.4 en geeft een waarschuwing.)',
  'CIDR block "%s" is not formatted correctly. The IP block mask ("%s") must not have leading zeroes.' => 'CIDR-blok "%s" is niet correct opgemaakt. Het IP-blokmasker ("%s") mag geen voorloopnullen hebben.',
  'Parameter passed to "%s" must be an integer.' => 'Parameter doorgegeven aan "%s" moet een geheel getal zijn.',
  'Repository for the current working copy.' => 'Repository voor de huidige werkkopie.',
  'The test was not executed.' => 'De test is niet uitgevoerd.',
  'Downloading authentication certificate...' => 'Authenticatiecertificaat downloaden...',
  'Submit failed! Fix the error and run "arc land" again.' => 'Indienen mislukt! Los de fout op en voer "arc land" opnieuw uit.',
  'Specify setData() or setPath() when building a file data reference.' => 'Geef setData() of setPath() op bij het bouwen van een bestandsgegevensreferentie.',
  'Included commits:' => 'Opgenomen commits:',
  'Unable to upload file data: %s' => 'Kan bestandsgegevens niet uploaden: %s',
  'Use `%s` to check that your Puppet manifests conform to the style guide.' => 'Gebruik `%s` om te controleren of uw Puppet-manifesten voldoen aan de stijlgids.',
  'Restoring local state (to ref "%s" at commit "%s").' => 'Lokale status herstellen (naar ref "%s" op commit "%s").',
  '**land** [__options__] -- [__ref__ ...]' => '**land** [__opties__] -- [__ref__ ...]',
  'Workflow ("%s") is requesting a prompt ("%s") but it did not generate any prompt with that name in "newPrompts()".' => 'Workflow ("%s") vraagt een prompt ("%s") aan maar heeft geen prompt met die naam gegenereerd in "newPrompts()".',
  'Dictionary value at key "%s" is not valid UTF8, and cannot be JSON encoded: %s' => 'Woordenboekwaarde op sleutel "%s" is geen geldige UTF8 en kan niet als JSON worden gecodeerd: %s',
  'Will merge into target "%s" by default, because this is the "onto" target.' => 'Wordt standaard gemerged in doel "%s", omdat dit het "onto"-doel is.',
  'Expected value to be a list of objects which are instances of "%s", but item with index "%s" is "%s".' => 'Verwachtte dat de waarde een lijst van objecten is die instanties zijn van "%s", maar item met index "%s" is "%s".',
  'Show detailed information, including options.' => 'Gedetailleerde informatie weergeven, inclusief opties.',
  'Save the file to a specific location.' => 'Het bestand opslaan op een specifieke locatie.',
  'committed' => 'gecommit',
  'Lowercase Functions' => 'Kleine-letterfuncties',
  'Some terminals do not appear in any rule: %s' => 'Sommige terminals verschijnen in geen enkele regel: %s',
  'Convention: no spaces before index access.' => 'Conventie: geen spaties voor indextoegang.',
  '< ... %s more commits ... >' => array(
    '< ... nog %s commit ... >',
    '< ... nog %s commits ... >',
  ),
  'M j Y' => 'j M Y',
  'The "upgrade" workflow uses "git pull" to upgrade, but the software directory (in "%s") is not a Git working copy. You must leave this directory as a Git working copy to use "arc upgrade".' => 'De "upgrade"-workflow gebruikt "git pull" om te upgraden, maar de softwaremap (in "%s") is geen Git-werkkopie. U moet deze map als Git-werkkopie laten om "arc upgrade" te gebruiken.',
  'You\'re covered, you didn\'t change anything.' => 'U bent gedekt, u hebt niets gewijzigd.',
  'Linting...' => 'Linten...',
  'Duplicate Keys in Array' => 'Dubbele sleutels in array',
  'RuboCop is a Ruby static code analyzer, based on the community Ruby style guide.' => 'RuboCop is een statische Ruby-code-analysator, gebaseerd op de Ruby-stijlgids van de gemeenschap.',
  'Created a new Differential diff:' => 'Een nieuwe Differential-diff aangemaakt:',
  'You may now push this commit upstream, as appropriate (e.g. with \'%s\', or \'%s\', or by printing and faxing it).' => 'U kunt deze commit nu upstream pushen, naar gelang van toepassing (bijv. met \'%s\', of \'%s\', of door het af te drukken en te faxen).',
  'Show this help.' => 'Deze hulp weergeven.',
  'a node of type %s: "%s"' => 'een knooppunt van type %s: "%s"',
  'Commit Symbol "%s"' => 'Commitsymbool "%s"',
  'Failed to unpack data.' => 'Uitpakken van gegevens is mislukt.',
  'Future has not yet resolved. Resolve futures before retrieving results.' => 'Future is nog niet opgelost. Los futures op voordat u resultaten ophaalt.',
  'This codebase targets PHP %s, but parameter %d of `%s()` was not introduced until PHP %s.' => 'Deze codebase richt zich op PHP %s, maar parameter %d van `%s()` is pas geïntroduceerd in PHP %s.',
  'It is not possible to throw an `%s` from within the `%s` method.' => 'Het is niet mogelijk om een `%s` te gooien vanuit de `%s`-methode.',
  'Show tasks that are open or closed, default is open.' => 'Taken weergeven die open of gesloten zijn, standaard is open.',
  'For consistency, write binary integers with a leading `%s`.' => 'Schrijf voor consistentie binaire gehele getallen met een voorloopteken `%s`.',
  'Streaming reads are not currently supported by the streaming parser.' => 'Streaming-leesbewerkingen worden momenteel niet ondersteund door de streamingverwerker.',
  'Review' => 'Beoordeling',
  '%s lints all files' => '%s lint alle bestanden',
  'No working copy to write config to!' => 'Geen werkkopie om configuratie naar te schrijven!',
  'Print base commit only and exit.' => 'Alleen basiscommit afdrukken en afsluiten.',
  'For details on available commands, run "%s".' => 'Voor details over beschikbare opdrachten, voer "%s" uit.',
  'Done.' => 'Klaar.',
  'Parentheses should hug their contents.' => 'Haakjes moeten hun inhoud omsluiten.',
  'This codebase targets PHP %s, but `%s()` was not introduced until PHP %s.' => 'Deze codebase richt zich op PHP %s, maar `%s()` is pas geïntroduceerd in PHP %s.',
  'Remote "%s" has no bookmark or branch named "%s".' => 'Remote "%s" heeft geen bladwijzer of branch met de naam "%s".',
  'Unable to install signal handler, pcntl_signal() unavailable. Continuing without signal handling.' => 'Kan signaalhandler niet installeren, pcntl_signal() niet beschikbaar. Doorgaan zonder signaalverwerking.',
  'Argument "--branch" for "arc browse" is not available in your software version control. For example, in SVN, a branch is just a directory with a special meaning for your team. Please omit the "--branch" argument.' => 'Argument "--branch" voor "arc browse" is niet beschikbaar in uw versiebeheersoftware. In SVN is een branch bijvoorbeeld gewoon een map met een speciale betekenis voor uw team. Laat het argument "--branch" weg.',
  'you have no outgoing commits, so arc assumes you intend to submit uncommitted changes in the working copy.' => 'u hebt geen uitgaande commits, dus arc neemt aan dat u niet-gecommitte wijzigingen in de werkkopie wilt indienen.',
  'No viable means to download PHP-parser is available.' => 'Er is geen bruikbare manier beschikbaar om PHP-parser te downloaden.',
  'UPGRADING' => 'BIJWERKEN',
  'Generating shell completion rules...' => 'Shell-aanvullingsregels genereren...',
  'Argument must be scalar or object which implements %s!' => 'Argument moet een scalaire waarde of object zijn dat %s implementeert!',
  'Merging with "%s" strategy, selected with "--strategy".' => 'Mergen met "%s"-strategie, geselecteerd met "--strategy".',
  'Methods may not be both "abstract" and "final".' => 'Methoden mogen niet zowel "abstract" als "final" zijn.',
  'Unnecessary semicolons after statement.' => 'Onnodige puntkomma\'s na instructie.',
  'Failed to passthru %s: %s' => 'Passthru van %s is mislukt: %s',
  'Exiting in %d seconds' => 'Afsluiten over %d seconden',
  'Put opening braces on the same line as control statements and declarations, with a single space before them.' => 'Zet openingsaccolades op dezelfde regel als besturingsstructuren en declaraties, met een enkele spatie ervoor.',
  'Cast Spacing' => 'Castspatiëring',
  'Trying to execute a class map query for descendants of class "%s", but the query specifies an "expand method" ("%s") without specifying a "unique method". Class maps which support expansion must have unique keys.' => 'Poging om een klassemapquery uit te voeren voor afstammelingen van klasse "%s", maar de query specificeert een "expand method" ("%s") zonder een "unique method" op te geven. Klassemappen die uitbreiding ondersteunen moeten unieke sleutels hebben.',
  'Unable to determine system temporary directory.' => 'Kan de tijdelijke systeemmap niet bepalen.',
  'Expected all items passed to "array_mergev()" to be arrays, but argument with key "%s" has type "%s".' => 'Verwachtte dat alle items doorgegeven aan "array_mergev()" arrays zijn, maar argument met sleutel "%s" heeft type "%s".',
  'Confirms writing to to "~/.profile" (or another similar file) to install shell completion.' => 'Bevestigt het schrijven naar "~/.profile" (of een ander vergelijkbaar bestand) om shell-aanvulling te installeren.',
  'Linter \'%s\' configured in \'%s\' does not exist!' => 'Linter \'%s\' geconfigureerd in \'%s\' bestaat niet!',
  'Unknown output kind "%s".' => 'Onbekend uitvoertype "%s".',
  'Task "%s"' => 'Taak "%s"',
  'Avoid the PHP echo short form, `%s`.' => 'Korte vorm van PHP echo `%s` vermijden.',
  'UNSHELVE' => 'HERSTELLEN',
  'Revision for commit "%s" is ambiguous. Use "--revision" to force selection of a particular revision.' => 'Versie voor commit "%s" is dubbelzinnig. Gebruik "--revision" om de selectie van een bepaalde versie af te dwingen.',
  'Provide a discovery map.' => 'Geef een ontdekkingsmap op.',
  'Set a local config value instead of a user one.' => 'Een lokale configuratiewaarde instellen in plaats van een gebruikerswaarde.',
  'Continue with this mapping between commits and revisions?' => 'Doorgaan met deze toewijzing tussen commits en versies?',
  'it is the first ancestor of the working copy that is not outgoing, and it matched the rule %s in your %s \'base\' configuration.' => 'het is de eerste voorouder van de werkkopie die niet uitgaand is, en het kwam overeen met de regel %s in uw %s \'base\'-configuratie.',
  'Found more than %s unpublished commits which are ancestors of heads.' => array(
    'Meer dan %s ongepubliceerde commit gevonden die voorouders zijn van heads.',
    'Meer dan %s ongepubliceerde commits gevonden die voorouders zijn van heads.',
  ),
  'No path provided to %s.' => 'Geen pad opgegeven voor %s.',
  'Subversion does not support commit ranges.' => 'Subversion ondersteunt geen commitbereiken.',
  'Remote "%s"' => 'Remote "%s"',
  'Never apply patches suggested by lint.' => 'Nooit door lint voorgestelde patches toepassen.',
  'Current Source' => 'Huidige bron',
  'There are %s commits reachable from the specified sources (%s). You are landing into the empty state, so all of these commits will land:' => array(
    'Er zijn %s commit bereikbaar vanuit de opgegeven bronnen (%s). U landt in de lege status, dus al deze commits worden geland:',
    'Er zijn %s commits bereikbaar vanuit de opgegeven bronnen (%s). U landt in de lege status, dus al deze commits worden geland:',
  ),
  '`%s` Statement Namespace Prefix' => '`%s`-instructie namespaceprefix',
  'Apply changes from a Differential diff. Normally you want to use %s to get the most recent changes, but you can specifically apply an out-of-date diff or a diff which was never attached to a revision by using this flag.' => 'Wijzigingen toepassen vanuit een Differential-diff. Normaal wilt u %s gebruiken om de meest recente wijzigingen te krijgen, maar u kunt specifiek een verouderde diff of een diff die nooit aan een versie is gekoppeld toepassen door deze vlag te gebruiken.',
  'this is a new repository (all changes are outgoing).' => 'dit is een nieuwe repository (alle wijzigingen zijn uitgaand).',
  'Unable to set stream nonblocking.' => 'Kan stream niet instellen als niet-blokkerend.',
  'This workflow does not have any prompts.' => 'Deze workflow heeft geen prompts.',
  'DONE' => 'KLAAR',
  'Preparing merge into "%s" from remote "%s", at commit "%s".' => 'Merge voorbereiden in "%s" vanuit remote "%s", op commit "%s".',
  'You\'re covered, your changes didn\'t touch anyone else\'s code.
' => 'U bent gedekt, uw wijzigingen hebben de code van niemand anders geraakt.
\\',
  'Edit revisions via the web interface when using SVN.' => 'Versies bewerken via de webinterface bij gebruik van SVN.',
  'You can not continue with uncommitted changes. Commit or discard them before proceeding.' => 'U kunt niet doorgaan met niet-gecommitte wijzigingen. Commit of verwerp ze voordat u verdergaat.',
  'The server \'%s\' rejected your request:' => 'De server \'%s\' heeft uw verzoek afgewezen:',
  'Argument method is not a string.' => 'Argumentmethode is geen tekenreeks.',
  'No paths are lintable.' => 'Geen paden zijn lintbaar.',
  'Specify exactly one file to download.' => 'Geef precies één bestand op om te downloaden.',
  'Bad origin state %s.' => 'Incorrecte oorsprongstatus %s.',
  'Extension ("%s") defines invalid configuration with key "%s". Configuration keys: may only contain lowercase letters, numbers, hyphens, underscores, and periods; must start with a letter; and must be at least three characters long.' => 'Uitbreiding ("%s") definieert een incorrecte configuratie met sleutel "%s". Configuratiesleutels: mogen alleen kleine letters, cijfers, koppeltekens, underscores en punten bevatten; moeten beginnen met een letter; en moeten ten minste drie tekens lang zijn.',
  'Unable to create temporary file in %s.' => 'Kan geen tijdelijk bestand aanmaken in %s.',
  'Expected a string (at index "%s"), found "%s".' => 'Verwachtte een tekenreeks (op index "%s"), maar vond "%s".',
  'Install JSHint using `%s`.' => 'Installeer JSHint met `%s`.',
  'SOURCE' => 'BRON',
  'Warning' => 'Waarschuwing',
  '%s can not write bytes directly!' => '%s kan niet direct bytes schrijven!',
  'NO PATH TO REMOTE' => 'GEEN PAD NAAR REMOTE',
  'MULTIPLE REVISIONS IN WORKING COPY' => 'MEERDERE VERSIES IN WERKKOPIE',
  'HTTP query parameter value (for key "%s") must be a scalar.' => 'HTTP-queryparameterwaarde (voor sleutel "%s") moet een scalaire waarde zijn.',
  'Test case \'%s\' threw, as expected.' => 'Testcase \'%s\' gooide een uitzondering, zoals verwacht.',
  'NEW BRANCH' => 'NIEUWE BRANCH',
  'Creating new library in \'%s\'.' => 'Nieuwe bibliotheek aanmaken in \'%s\'.',
  'Completed preview of land operation.' => 'Voorbeeld van landhandeling voltooid.',
  'Created and checked out bookmark %s.' => 'Bladwijzer %s aangemaakt en uitgecheckt.',
  'AWS Request Failed' => 'AWS-verzoek mislukt',
  'PREVIEW' => 'VOORVERTONING',
  'Unexpected copy source in %s, \'%s\'.' => 'Onverwachte kopieerbron in %s, \'%s\'.',
  '`elseif` Usage' => '`elseif`-gebruik',
  'This function can not convert from the unit "%s".' => 'Deze functie kan niet converteren vanuit de eenheid "%s".',
  'This commit includes the directory \'%s\', but it contains a modified path (\'%s\') which is NOT included in the commit. Subversion can not handle this operation and will commit the path anyway. You need to sort out the working copy changes to \'%s\' before you may proceed with the commit.' => 'Deze commit bevat de map \'%s\', maar het bevat een gewijzigd pad (\'%s\') dat NIET is opgenomen in de commit. Subversion kan deze handeling niet verwerken en zal het pad toch committen. U moet de werkkopiewijzigingen aan \'%s\' uitzoeken voordat u kunt doorgaan met de commit.',
  'You can not use "--generate" when completing arguments.' => 'U kunt "--generate" niet gebruiken bij het aanvullen van argumenten.',
  '**alias** __command__ __target__ -- [__arguments__]' => '**alias** __opdracht__ __doel__ -- [__argumenten__]',
  'Ignoring unrecognized configuration option ("%s") from source: %s.' => 'Niet-herkende configuratieoptie ("%s") van bron wordt genegeerd: %s.',
  'WORK' => 'WERK',
  '`%s` Function' => '`%s`-functie',
  'Value "%s" is not valid: expected a list, got "%s".' => 'Waarde "%s" is niet geldig: verwachtte een lijst, maar kreeg "%s".',
  'Rule \'%s\' in state \'%s\' in %s has unknown option \'%s\'.' => 'Regel \'%s\' in status \'%s\' in %s heeft onbekende optie \'%s\'.',
  'Error in parsing \'%s\' file, in key \'%s\' for linter \'%s\'.' => 'Fout bij het verwerken van bestand \'%s\', in sleutel \'%s\' voor linter \'%s\'.',
  'You must generate at least 1 byte of entropy.' => 'U moet ten minste 1 byte entropie genereren.',
  'You are running one copy of this software (at path "%s") against another copy of this software (at path "%s"). Code in the current working directory will not be loaded or executed.' => 'U voert één kopie van deze software (op pad "%s") uit tegen een andere kopie van deze software (op pad "%s"). Code in de huidige werkmap wordt niet geladen of uitgevoerd.',
  'Specify the end of the commit range. This disables many features which depend on having access to the working copy.' => 'Geef het einde van het commitbereik op. Dit schakelt veel functies uit die afhankelijk zijn van toegang tot de werkkopie.',
  'PCNTL' => 'PCNTL',
  'Choose a name for the new library.' => 'Kies een naam voor de nieuwe bibliotheek.',
  'To use "--xprofile", you must install XHProf.' => 'Om "--xprofile" te gebruiken, moet u XHProf installeren.',
  'Do you want to mark these %s file(s) as binary and continue?' => array(
    'Wilt u dit bestand als binair markeren en doorgaan?',
    'Wilt u deze bestanden als binair markeren en doorgaan?',
  ),
  'IP address "%s" is not properly formatted: is has too many parts. Expected a maximum of 7 colons, like "%s".' => 'IP-adres "%s" is niet correct opgemaakt: het heeft te veel delen. Verwachtte maximaal 7 dubbele punten, zoals "%s".',
  'No lint problems.' => 'Geen lintproblemen.',
  'Type of setting \'%s\' must be boolean, like \'true\' or \'false\'.' => 'Type van instelling \'%s\' moet boolean zijn, zoals \'true\' of \'false\'.',
  'Implicit Method Visibility' => 'Impliciete methodezichtbaarheid',
  'Requested path \'%s\' is not writable.' => 'Opgevraagd pad \'%s\' is niet schrijfbaar.',
  'English (Raw Strings)' => 'Engels (ruwe tekenreeksen)',
  'The short array syntax ("[...]") was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `array(...)` instead.' => 'De korte arraysyntaxis ("[...]") is pas geïntroduceerd in PHP 5.4, maar deze codebase richt zich op een eerdere versie van PHP. U kunt deze expressie herschrijven met `array(...)`.',
  'Suppress warning about uncommitted changes.' => 'Waarschuwing over niet-gecommitte wijzigingen onderdrukken.',
  'CREATE %s BOOKMARK(S)' => array(
    'BLADWIJZER AANMAKEN',
    '%s BLADWIJZERS AANMAKEN',
  ),
  'You must resolve these errors to continue.' => 'U moet deze fouten oplossen om door te gaan.',
  'Default value for parameters with a class type hint can only be `%s`.' => 'Standaardwaarde voor parameters met een klasse-typehint kan alleen `%s` zijn.',
  'Unknown column alignment "%s".' => 'Onbekende kolomuitlijning "%s".',
  'Push Repository: %s' => 'Push-repository: %s',
  'Test engine \'%s\' specifies invalid type \'%s\'. Available test engines are: %s.' => 'Testengine \'%s\' specificeert incorrect type \'%s\'. Beschikbare testengines zijn: %s.',
  'Other users to CC on the new task.' => 'Andere gebruikers om in CC te zetten op de nieuwe taak.',
  'XHPAST Lint' => 'XHPAST-lint',
  'Specify one or more paths to files you want to upload.' => 'Geef een of meer paden op naar bestanden die u wilt uploaden.',
  'To push changes manually, run this command:' => 'Om wijzigingen handmatig te pushen, voer deze opdracht uit:',
  'Reading diff from stdin...' => 'Diff lezen van stdin...',
  'HTTPS Trusted Domains' => 'HTTPS-vertrouwde domeinen',
  'Working Copy' => 'Werkkopie',
  'Provide only one path to "arc liberate". The path should identify a directory where you want to create or update a library.' => 'Geef slechts één pad op voor "arc liberate". Het pad moet een map identificeren waar u een bibliotheek wilt aanmaken of bijwerken.',
  'Signal router has not been initialized!' => 'Signaalrouter is niet geïnitialiseerd!',
  'Non-conventional modifier ordering.' => 'Niet-conventionele modifiervolgorde.',
  'The program is attempting to read user input, but stdin is being piped from some other source (not a TTY).' => 'Het programma probeert gebruikersinvoer te lezen, maar stdin wordt doorgesluisd vanuit een andere bron (geen TTY).',
  'Specify an explicit URI or run this command from within a project which is configured with a %s.' => 'Geef een expliciete URI op of voer deze opdracht uit vanuit een project dat is geconfigureerd met een %s.',
  'Unterminated string in argument list!' => 'Niet-afgesloten tekenreeks in argumentenlijst!',
  'Git ref selector "%s" is not a valid selector and can not be passed to the Git CLI safely in the general case.' => 'Git ref-selector "%s" is geen geldige selector en kan in het algemeen niet veilig worden doorgegeven aan de Git CLI.',
  'Unit test engine (of class "%s") returned invalid results when run (with method "%s"). Expected a list of "%s" objects as results.' => 'Unittestengine (van klasse "%s") gaf incorrecte resultaten terug bij uitvoering (met methode "%s"). Verwachtte een lijst van "%s"-objecten als resultaten.',
  'Jan' => 'jan',
  'It is midday. The sun is high overhead and the air is still. It is very warm. You hear the cry of a hawk high overhead and far in the distance.' => 'Het is middag. De zon staat hoog aan de hemel en de lucht is stil. Het is erg warm. U hoort de roep van een havik hoog boven u en ver in de verte.',
  'MERGE CONFLICT' => 'MERGECONFLICT',
  '`%s` class `%s` must define an ID constant.' => '`%s`-klasse `%s` moet een ID-constante definiëren.',
  'Message type \'%s\' is already enabled!' => 'Berichttype \'%s\' is al ingeschakeld!',
  'Confirms that revisions that are not accepted should land.' => 'Bevestigt dat versies die niet zijn geaccepteerd geland moeten worden.',
  'Lock \'%s\' is not locked by this process!' => 'Vergrendeling \'%s\' is niet vergrendeld door dit proces!',
  'Build %d' => 'Build %d',
  'Unable to upload file: failed to open path "%s" for reading.' => 'Kan bestand niet uploaden: openen van pad "%s" voor lezen is mislukt.',
  'Expected an object, string, or list of objects for "object" context. Got a list ("%s"), but the list item at index "%s" (with type "%s") is not an object.' => 'Verwachtte een object, tekenreeks of lijst van objecten voor "object"-context. Kreeg een lijst ("%s"), maar het lijstitem op index "%s" (met type "%s") is geen object.',
  'A custom configuration file.' => 'Een aangepast configuratiebestand.',
  'Are you sure you want to mutate history?' => 'Weet u zeker dat u de geschiedenis wilt wijzigen?',
  'Reuse of Iterator Variable' => 'Hergebruik van iteratorvariabele',
  'Use the `%s` mode provided by `%s` to detect errors in Less source files.' => 'Gebruik de `%s`-modus van `%s` om fouten in Less-bronbestanden te detecteren.',
  'HTTP query parameter key must be a scalar.' => 'HTTP-queryparametersleutel moet een scalaire waarde zijn.',
  'English (US)' => 'Engels (VS)',
  'Locale "%s" is part of a cycle of locales which fall back on one another in a loop (%s). Locales which fall back on other locales must not loop.' => 'Taalinstelling "%s" maakt deel uit van een cyclus van taalinstellingen die in een lus op elkaar terugvallen (%s). Taalinstellingen die terugvallen op andere taalinstellingen mogen geen lus vormen.',
  'Reason' => 'Reden',
  'Use a specific authentication token.' => 'Een specifiek authenticatietoken gebruiken.',
  'Associate the working copy with a specific repository. Normally, this association can be determined automatically, but if your setup is unusual you can use this option to tell it what the desired value is.' => 'De werkkopie koppelen aan een specifieke repository. Normaal kan deze koppeling automatisch worden bepaald, maar als uw configuratie ongebruikelijk is kunt u deze optie gebruiken om de gewenste waarde op te geven.',
  'Whether %s should permit the automatic stashing of changes in the working directory when requiring a clean working copy. This option should only be used when users understand how to restore their working directory from the local stash if an operation causes an unrecoverable error.' => 'Of %s het automatisch stashen van wijzigingen in de werkmap moet toestaan wanneer een schone werkkopie vereist is. Deze optie mag alleen worden gebruikt wanneer gebruikers begrijpen hoe ze hun werkmap kunnen herstellen vanuit de lokale stash als een handeling een onherstelbare fout veroorzaakt.',
  'Test case \'%s\' did not throw, as expected.' => 'Testcase \'%s\' gooide geen uitzondering, zoals verwacht.',
  'Failed to set streams nonblocking.' => 'Instellen van streams als niet-blokkerend is mislukt.',
  'Use of unknown class symbol "%s".' => 'Gebruik van onbekend klassesymbool "%s".',
  'Signal handlers raised exceptions while handling "%s".' => 'Signaalhandlers hebben uitzonderingen gegenereerd bij het verwerken van "%s".',
  'Imbalanced calls to shared futures: each call to %s for a path must be paired with a call to %s.' => 'Ongebalanceerde aanroepen van gedeelde futures: elke aanroep van %s voor een pad moet worden gekoppeld aan een aanroep van %s.',
  'This very old library is no longer supported.' => 'Deze zeer oude bibliotheek wordt niet meer ondersteund.',
  'Abandoned' => 'Verlaten',
  'Argument short aliases may only be in a-z, A-Z and 0-9. \'%s\' is invalid.' => 'Korte argumentaliassen mogen alleen a-z, A-Z en 0-9 zijn. \'%s\' is onjuist.',
  'Expected \'%s\' file to be a valid JSON file, but failed to decode \'%s\'.' => 'Verwachtte dat \'%s\'-bestand een geldig JSON-bestand is, maar decoderen van \'%s\' is mislukt.',
  'Invalid %s root directory specified (\'%s\'). Root directory must be a directory, be readable, and be specified with an absolute path.' => 'Incorrecte %s-hoofdmap opgegeven (\'%s\'). De hoofdmap moet een map zijn, leesbaar zijn en met een absoluut pad worden opgegeven.',
  'Call to "hg arc-ls-markers" failed with error "%s".' => 'Aanroep van "hg arc-ls-markers" is mislukt met fout "%s".',
  'Uses Google\'s Closure Linter to check JavaScript code.' => 'Gebruikt Google\'s Closure Linter om JavaScript-code te controleren.',
  'Partition query requires heads.' => 'Partitiequery vereist heads.',
  'Local branches have not been changed, and are still in the same state as before.' => 'Lokale branches zijn niet gewijzigd en staan nog in dezelfde status als voorheen.',
  'Failed to parse \'%s\' output: %s' => 'Verwerken van \'%s\'-uitvoer is mislukt: %s',
  'Portuguese (Brazil)' => 'Portugees (Brazilië)',
  'Install PyLint using `%s`.' => 'Installeer PyLint met `%s`.',
  'Working Copy: Reading %s from "%s".' => 'Werkkopie: %s lezen van "%s".',
  'Channel closed unexpectedly!' => 'Kanaal onverwacht gesloten!',
  'English (US, ALL CAPS)' => 'Engels (VS, HOOFDLETTERS)',
  'Command ("%s") exited nonzero ("%s")!' => 'Opdracht ("%s") is afgesloten met niet-nul ("%s")!',
  'Unexpected output from "git log ...": %s' => 'Onverwachte uitvoer van "git log ...": %s',
  'Will merge into local state, selected with the "--into-local" flag.' => 'Wordt gemerged in lokale status, geselecteerd met de vlag "--into-local".',
  'Declare variables prior to use (even if you are passing them as reference parameters). You may have misspelled this variable name.' => 'Declareer variabelen vóór gebruik (zelfs als u ze als referentieparameters doorgeeft). Mogelijk hebt u deze variabelenaam verkeerd gespeld.',
  'Uses SimpleXML to detect formatting errors in XML files.' => 'Gebruikt SimpleXML om opmaakfouten in XML-bestanden te detecteren.',
  'COVERAGE REPORT' => 'DEKKINGSRAPPORT',
  'Disabled' => 'Uitgeschakeld',
  'File permissions on your %s are too open. Fix them by chmod\'ing to 600?' => 'Bestandsrechten op uw %s zijn te open. Herstellen door te chmod\'en naar 600?',
  'Holding changes locally, they have not been pushed.' => 'Wijzigingen lokaal vasthouden, ze zijn niet gepusht.',
  'Specify file by ID, e.g. %s.' => 'Geef bestand op via ID, bijv. %s.',
  'Function symbol "%s" should be written as "%s".' => 'Functiesymbool "%s" moet worden geschreven als "%s".',
  '"arc work" must be run in a Git or Mercurial working copy.' => '"arc work" moet worden uitgevoerd in een Git- of Mercurial-werkkopie.',
  '%s suppresses lint.' => '%s onderdrukt lint.',
  'Committing \'%s: %s\'...
' => '\'%s: %s\' committen...
\\',
  'Unable to apply patch!' => 'Kan patch niet toepassen!',
  'Bad Filename' => 'Incorrecte bestandsnaam',
  'Specify a file to download, like "F123".' => 'Geef een bestand op om te downloaden, zoals "F123".',
  'Use "--incremental" to merge and push changes one by one.' => 'Gebruik "--incremental" om wijzigingen één voor één te mergen en pushen.',
  'This future graph already has a future with key "%s". Each future must have a unique key.' => 'Deze futuregraaf heeft al een future met sleutel "%s". Elke future moet een unieke sleutel hebben.',
  'Two argument specifications are marked as wildcard arguments. You can have a maximum of one wildcard argument.' => 'Twee argumentspecificaties zijn gemarkeerd als jokertekenargumenten. U kunt maximaal één jokertekenargument hebben.',
  '**branches**' => '**branches**',
  'Variable Reference Spacing' => 'Variabeleverwijzingsspatiëring',
  'Message should be %s.' => 'Bericht moet %s zijn.',
  'File Does Not End in Newline' => 'Bestand eindigt niet met een nieuwe regel',
  'Invalid command "%s". Valid commands are: %s.' => 'Incorrecte opdracht "%s". Geldige opdrachten zijn: %s.',
  'Unable to push lfs changes to the staging area.' => 'Kan lfs-wijzigingen niet pushen naar de staging-omgeving.',
  'Composer Dependency Manager' => 'Composer-afhankelijkheidsbeheerder',
  'You must specify changes to apply to the working copy with "D12345", "--revision", "--diff", "--arcbundle", or "--patch".' => 'U moet wijzigingen opgeven om toe te passen op de werkkopie met "D12345", "--revision", "--diff", "--arcbundle", of "--patch".',
  'Use formatting even in environments which probably don\'t support it.' => 'Opmaak gebruiken zelfs in omgevingen die het waarschijnlijk niet ondersteunen.',
  'PHP files should start with `%s`, which may be preceded by a `%s` line for scripts.' => 'PHP-bestanden moeten beginnen met `%s`, dat kan worden voorafgegaan door een `%s`-regel voor scripts.',
  'Call to "hg arc-ls-markers" returned marker of unknown type "%s".' => 'Aanroep van "hg arc-ls-markers" gaf een markering van onbekend type "%s" terug.',
  'Trace command execution and show service calls.' => 'Opdrachtuitvoering traceren en serviceaanroepen weergeven.',
  'Downloaded file size (%s bytes) does not match expected file size (%s bytes). This download may be incomplete or corrupt.' => array(
    
    array(
      'Gedownloade bestandsgrootte (%s byte) komt niet overeen met verwachte bestandsgrootte (%s byte). Deze download is mogelijk onvolledig of beschadigd.',
      'Gedownloade bestandsgrootte (%s byte) komt niet overeen met verwachte bestandsgrootte (%s bytes). Deze download is mogelijk onvolledig of beschadigd.',
    ),
    
    array(
      'Gedownloade bestandsgrootte (%s bytes) komt niet overeen met verwachte bestandsgrootte (%s byte). Deze download is mogelijk onvolledig of beschadigd.',
      'Gedownloade bestandsgrootte (%s bytes) komt niet overeen met verwachte bestandsgrootte (%s bytes). Deze download is mogelijk onvolledig of beschadigd.',
    ),
  ),
  'TARGET' => 'DOEL',
  'The "SHELL" environment variable is not defined, so it can not be used to detect the shell to install rules for.' => 'De omgevingsvariabele "SHELL" is niet gedefinieerd, dus deze kan niet worden gebruikt om de shell te detecteren waarvoor regels geïnstalleerd moeten worden.',
  'Unable to determine which revision is associated with commit "%s". Use "arc diff" to create or update a revision with this commit, or "--revision" to force selection of a particular revision.' => 'Kan niet bepalen welke versie is gekoppeld aan commit "%s". Gebruik "arc diff" om een versie aan te maken of bij te werken met deze commit, of "--revision" om de selectie van een bepaalde versie af te dwingen.',
  'Run in a working copy with "phabricator.uri" set in ".arcconfig".' => 'Uitvoeren in een werkkopie met "phabricator.uri" ingesteld in ".arcconfig".',
  'Rule \'%s\' in state \'%s\' in %s transitions to state \'%s\', but there are no rules for that state.' => 'Regel \'%s\' in status \'%s\' in %s gaat over naar status \'%s\', maar er zijn geen regels voor die status.',
  'Got unexpected parameters: %s' => 'Onverwachte parameters ontvangen: %s',
  'Rejecting ambiguous URI "%s". This URI is not formatted or encoded properly.' => 'Dubbelzinnige URI "%s" afgewezen. Deze URI is niet correct opgemaakt of gecodeerd.',
  'Attempting to iterate an object (of class %s) which is not iterable.' => 'Poging om een object (van klasse %s) te itereren dat niet itereerbaar is.',
  'Show toolset version information.' => 'Toolsetversie-informatie weergeven.',
  'PHP version to target.' => 'PHP-versie om op te richten.',
  'Floating on the water, you see published commits:' => 'Drijvend op het water ziet u gepubliceerde commits:',
  'Bad blame? `%s\'' => 'Incorrecte blame? `%s\'',
  'Needs Review' => 'Beoordeling nodig',
  'Supply commit message for uncommitted changes, then save and exit.' => 'Geef een commitbericht op voor niet-gecommitte wijzigingen, sla op en sluit af.',
  'Attempting to run unit tests on a library which has not been loaded, at:

    %s

Make sure this library is configured to load.

(In rare cases, this may be because you are attempting to run one copy of this software against a different copy of this software. This operation is not supported.)' => 'Poging om unittests uit te voeren op een bibliotheek die niet is geladen, op:

    %s

Zorg ervoor dat deze bibliotheek is geconfigureerd om te laden.

(In zeldzame gevallen kan dit komen doordat u probeert één kopie van deze software uit te voeren tegen een andere kopie van deze software. Deze handeling wordt niet ondersteund.)',
  'Methods may not be both "private" and "final".' => 'Methoden mogen niet zowel "private" als "final" zijn.',
  'Restoring uncommitted changes to working copy.' => 'Niet-gecommitte wijzigingen herstellen naar werkkopie.',
  'This diff includes %s file(s) which are not valid UTF-8 (they contain invalid byte sequences). You can either stop this workflow and fix these files, or continue. If you continue, these files will be marked as binary.' => array(
    'Deze diff bevat een bestand dat geen geldige UTF-8 is"zijn (incorrecte bytereeksen). U kunt deze workflow stoppen en dit bestand herstellen, of doorgaan. Als u doorgaat, wordt dit bestand als binair gemarkeerd.',
    'Deze diff bevat bestanden die geen geldige UTF-8 {{PLURAL:%s|is"zijn}} (incorrecte bytereeksen). U kunt deze workflow stoppen en deze bestanden herstellen, of doorgaan. Als u doorgaat, worden deze bestanden als binair gemarkeerd.',
  ),
  'Failed to rename \'%s\' to \'%s\'!' => 'Hernoemen van \'%s\' naar \'%s\' is mislukt!',
  'Slow Construct' => 'Trage constructie',
  'Saving local state (at "%s" on branch "%s", bookmarked as "%s").' => 'Lokale status opslaan (op "%s" op branch "%s", gebookmarkt als "%s").',
  'Failed to open stdin for reading.' => 'Openen van stdin voor lezen is mislukt.',
  'Curly Brace Array Index' => 'Accolade-array-index',
  'Landing onto multiple branches at once is not supported in Mercurial.' => 'Landen op meerdere branches tegelijk wordt niet ondersteund in Mercurial.',
  'Use `%s` to check for syntax errors in Ruby source files.' => 'Gebruik `%s` om te controleren op syntaxisfouten in Ruby-bronbestanden.',
  'Invalid Conduit API credentials.' => 'Incorrecte Conduit API-aanmeldgegevens.',
  'Show all lint warnings, not just those on changed lines. When paths are specified, this is the default behavior.' => 'Alle lintwaarschuwingen weergeven, niet alleen die op gewijzigde regels. Wanneer paden zijn opgegeven, is dit het standaardgedrag.',
  'Unable to open lock \'%s\' for writing!' => 'Kan vergrendeling \'%s\' niet openen voor schrijven!',
  'Class-Filename Mismatch' => 'Klasse-bestandsnaam komt niet overeen',
  '%s and %s both need stdin. Use %s.' => '%s en %s hebben beide stdin nodig. Gebruik %s.',
  'You are landing revisions which you ("%s") are not the author of:' => 'U landt versies waarvan u ("%s") niet de auteur bent:',
  'This comment has a TODO.' => 'Dit commentaar heeft een TODO.',
  'Provide a list of additional flags to pass to the linter on the command line.' => 'Geef een lijst van extra vlaggen op om door te geven aan de linter op de opdrachtregel.',
  'Deleting bookmark "%s".' => 'Bladwijzer "%s" verwijderen.',
  'Signature method \'%s\' requires %s!' => 'Handtekeningmethode \'%s\' vereist %s!',
  'Unable to open stderr temporary file ("%s") for writing.' => 'Kan tijdelijk stderr-bestand ("%s") niet openen voor schrijven.',
  'A script which contains a `%s` statement expects the very first statement to be a `%s` statement. Otherwise, a PHP fatal error will occur. %s' => 'Een script dat een `%s`-instructie bevat verwacht dat de allereerste instructie een `%s`-instructie is. Anders treedt een onherstelbare PHP-fout op. %s',
  'PyFlakes is a simple program which checks Python source files for errors.' => 'PyFlakes is een eenvoudig programma dat Python-bronbestanden controleert op fouten.',
  'Output the linter results to a file. Defaults to stdout.' => 'De linterresultaten uitvoeren naar een bestand. Standaard naar stdout.',
  'Attempting to convert a string encoding, but no source encoding was provided. Explicitly provide the source encoding.' => 'Poging om een tekenreekscodering te converteren, maar er is geen broncodering opgegeven. Geef de broncodering expliciet op.',
  'Automatically add all unstaged and uncommitted files to the commit.' => 'Automatisch alle niet-gestage en niet-gecommitte bestanden aan de commit toevoegen.',
  'Remote "%s" has multiple branch heads named "%s". Close all but one, or pull the head you want and use "--into-local --into <hash>" to specify an explicit merge target.' => 'Remote "%s" heeft meerdere branch-heads met de naam "%s". Sluit alle behalve één, of pull de head die u wilt en gebruik "--into-local --into <hash>" om een expliciet mergedoel op te geven.',
  'Path \'%s\' already exists!' => 'Pad \'%s\' bestaat al!',
  'Specified download path "%s" already exists, refusing to overwrite.' => 'Opgegeven downloadpad "%s" bestaat al, weigert te overschrijven.',
  'Expected method "%s->%s()" to return a string or integer for use as a unique key, got "%s" from object at index "%s".' => 'Verwachtte dat methode "%s->%s()" een tekenreeks of geheel getal teruggeeft voor gebruik als unieke sleutel, maar kreeg "%s" van object op index "%s".',
  'it is the merge-base of the explicitly specified base commit \'%s\' and the explicitly specified head commit \'%s\'.' => 'het is de merge-base van de expliciet opgegeven basiscommit \'%s\' en de expliciet opgegeven head-commit \'%s\'.',
  'Expected base85 line length character (a-zA-Z).' => 'Verwachtte base85-regellengteteken (a-zA-Z).',
  'Unexpected node during static evaluation, of type: %s' => 'Onverwacht knooppunt tijdens statische evaluatie, van type: %s',
  'Load all object hardpoints.' => 'Alle objecthardpoints laden.',
  'No local copy of ref "%s" in remote "%s" exists, attempting fetch...' => 'Er bestaat geen lokale kopie van ref "%s" in remote "%s", ophalen proberen...',
  'No data provided for path "%s".' => 'Geen gegevens opgegeven voor pad "%s".',
  'This software version on the server you are connecting to is out of date and does not have support for identifying repositories by callsign or URI. Update the server software to enable these features.' => 'Deze softwareversie op de server waarmee u verbinding maakt is verouderd en ondersteunt het identificeren van repository\'s op basis van roepnaam of URI niet. Werk de serversoftware bij om deze functies in te schakelen.',
  'The changes you are landing depend on %s open parent revision(s). Usually, you should land parent revisions before landing the changes which depend on them. These parent revisions are open:' => array(
    'De wijzigingen die u laat landen zijn afhankelijk van %s open bovenliggende versie. Normaal gesproken moet u bovenliggende versies laten landen voordat u de wijzigingen laat landen die ervan afhankelijk zijn. Deze bovenliggende versie is open:',
    'De wijzigingen die u laat landen zijn afhankelijk van %s open bovenliggende versies. Normaal gesproken moet u bovenliggende versies laten landen voordat u de wijzigingen laat landen die ervan afhankelijk zijn. Deze bovenliggende versies zijn open:',
  ),
  'Convention: no spaces before opening parentheses.' => 'Conventie: geen spaties voor openingshaakjes.',
  'The current working directory is not part of a working copy for a supported version control system (Git, Subversion or Mercurial).' => 'De huidige werkmap maakt geen deel uit van een werkkopie voor een ondersteund versiebeheersysteem (Git, Subversion of Mercurial).',
  'Use the "prompts" workflow to review prompt responses.' => 'Gebruik de "prompts"-workflow om promptantwoorden te bekijken.',
  'WARNING' => 'WAARSCHUWING',
  'LINT NOTICE' => 'LINTMELDING',
  'msort() was passed a method ("%s") which returns "PhutilSortVector" objects. Use "msortv()", not "msort()", to sort a list which produces vectors.' => 'msort() kreeg een methode ("%s") doorgegeven die "PhutilSortVector"-objecten teruggeeft. Gebruik "msortv()", niet "msort()", om een lijst te sorteren die vectoren produceert.',
  'FAIL' => 'MISLUKT',
  'Hardpoint ("%s") is not registered on this object (of type "%s"). Hardpoints are: %s.' => 'Hardpoint ("%s") is niet geregistreerd op dit object (van type "%s"). Hardpoints zijn: %s.',
  'Sep' => 'sep',
  'Failed to create a temporary directory in \'%s\'.' => 'Aanmaken van een tijdelijke map in \'%s\' is mislukt.',
  'Call %s before calling %s!' => 'Roep %s aan voordat u %s aanroept!',
  'Unknown Mercurial status \'%s\'.' => 'Onbekende Mercurial-status \'%s\'.',
  'Expected \'Name\', \'Added\', \'Deleted\', or \'Modified\'.' => 'Verwachtte \'Name\', \'Added\', \'Deleted\' of \'Modified\'.',
  'Script to execute.' => 'Uit te voeren script.',
  '`%s` should be separated from code by an empty line.' => '`%s` moet worden gescheiden van code door een lege regel.',
  'AVAILABLE' => 'BESCHIKBAAR',
  '`%s` declarations cannot be nested. This construct will cause a PHP fatal error.' => '`%s`-declaraties kunnen niet worden genest. Deze constructie veroorzaakt een onherstelbare PHP-fout.',
  'To configure Mercurial to ignore certain files in the working copy, add them to ".hgignore".' => 'Om Mercurial te configureren om bepaalde bestanden in de werkkopie te negeren, voeg ze toe aan ".hgignore".',
  'commit message' => 'commitbericht',
  'Running unit tests...' => 'Unittests uitvoeren...',
  'Unable to locate binary "%s" to run linter %s. You may need to install the binary, or adjust your linter configuration.' => 'Kan binair bestand "%s" niet vinden om linter %s uit te voeren. Mogelijk moet u het binaire bestand installeren of uw linterconfiguratie aanpassen.',
  'This iterator variable is a previously declared local variable. To avoid overwriting locals, do not reuse them as iterator variables.' => 'Deze iteratorvariabele is een eerder gedeclareerde lokale variabele. Om het overschrijven van lokale variabelen te voorkomen, hergebruik ze niet als iteratorvariabelen.',
  'CIDR block "%s" is not formatted correctly. The IP block mask ("%s") must mask between 0 and %s bits, inclusive.' => array(
    
    array(
      
      array(
        'CIDR-blok "%s" is niet correct opgemaakt. Het IP-blokmasker ("%s") moet tussen 0 en %s bit maskeren, inclusief.',
        'CIDR-blok "%s" is niet correct opgemaakt. Het IP-blokmasker ("%s") moet tussen 0 en %s bits maskeren, inclusief.',
      ),
    ),
  ),
  'Fatal Error' => 'Onherstelbare fout',
  'No remote "%s" exists in this repository.' => 'Er bestaat geen remote "%s" in deze repository.',
  'String does not parse into exactly one statement!' => 'Tekenreeks wordt niet verwerkt tot precies één instructie!',
  'YOU NEED TO __INSTALL A CERTIFICATE__ TO LOG IN' => 'U MOET EEN __CERTIFICAAT INSTALLEREN__ OM IN TE LOGGEN',
);
  }

}
