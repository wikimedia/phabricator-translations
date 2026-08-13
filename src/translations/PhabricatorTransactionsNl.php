<?php

final class PhabricatorTransactionsNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Lock / Hide Fields' => 'Velden vergrendelen / verbergen',
  'Unmark as "Edit" Form' => 'Markering als "Bewerk"-formulier opheffen',
  'Parameter "%s" is not a list of transactions.' => 'Parameter "%s" is geen lijst van transacties.',
  'Transactions have no effect:' => 'Transacties hebben geen effect:',
  'This endpoint supports these types of transactions. See below for detailed information about each transaction type.' => 'Dit eindpunt ondersteunt deze typen transacties. Zie hieronder voor gedetailleerde informatie over elk transactietype.',
  'To silence this edit, run this command:' => 'Voer deze opdracht uit om deze bewerking stil te maken:',
  'In call to "transaction.search", selected object (of type "%s") does not implement "%s", so transactions can not be loaded for it.' => 'Bij de aanroep van "transaction.search" implementeert het geselecteerde object (van type "%s") "%s" niet, dus transacties kunnen er niet voor worden geladen.',
  'Builtin Form "%s"' => 'Ingebouwd formulier "%s"',
  '%s added a comment.' => '%s heeft een opmerking toegevoegd.',
  'Empty Comment' => 'Lege opmerking',
  'The selected %s policy excludes you. Choose a %s policy which allows you to %s the object.' => 'Het geselecteerde %s-beleid sluit u uit. Kies een %s-beleid waarmee u het object kunt %s.',
  'All users are already subscribed to this %s.' => 'Alle gebruikers zijn al geabonneerd op deze %s.',
  'Edge transaction has no \'%s\'!' => 'Verbindingstransactie heeft geen \'%s\'!',
  'No object exists with PHID "%s".' => 'Er bestaat geen object met PHID "%s".',
  'You can not edit this comment because the conversation is locked.' => 'U kunt deze opmerking niet bewerken omdat het gesprek is vergrendeld.',
  'Reorder Edit Forms' => 'Bewerkformulieren herordenen',
  'Reorder Create Forms' => 'Aanmaakformulieren herordenen',
  'Edit Form Defaults' => 'Standaardwaarden van formulier bewerken',
  'The %s action(s) you are taking have no effect:' => array(
    'De handeling die u uitvoert heeft geen effect:',
    'De handelingen die u uitvoert hebben geen effect:',
  ),
  '%s removed %s subscriber(s) for %s: %s.' => array(
    
    array(
      '%s heeft een abonnee voor %3$s verwijderd: %4$s.',
      '%s heeft abonnees voor %3$s verwijderd: %4$s.',
    ),
  ),
  'New Mode' => 'Nieuwe modus',
  'Engine: Editor' => 'Engine: Editor',
  '%s moved %s to %s on the %s board.' => '%s heeft %s naar %s verplaatst op het %s-werkblad.',
  'To continue, configure multi-factor authentication in Settings.' => 'Configureer multi-factorauthenticatie in Instellingen om door te gaan.',
  'SearchEngine class to export data from.' => 'SearchEngine-klasse om gegevens uit te exporteren.',
  'In %s, %s wrote:' => 'In %s schreef %s:',
  'Unmark as Create Form' => 'Markering als aanmaakformulier opheffen',
  'Mark as Edit Form' => 'Markeren als bewerkformulier',
  'Edges already exist; transaction has no effect.' => 'Verbindingen bestaan al; transactie heeft geen effect.',
  '%s updated the preamble for this form.' => '%s heeft de inleiding voor dit formulier bijgewerkt.',
  '%s changed the default value for field %s.' => '%s heeft de standaardwaarde voor veld %s gewijzigd.',
  'Comment Action Options' => 'Opties voor opmerkingshandelingen',
  '%s marked %s inline comment(s) as done.' => array(
    
    array(
      '%s heeft een ingebedde opmerking als afgehandeld gemarkeerd.',
      '%s heeft %s ingebedde opmerkingen als afgehandeld gemarkeerd.',
    ),
  ),
  'Email Body Text' => 'E-mailtekst',
  'Optional instructions, shown above the form.' => 'Optionele instructies, weergegeven boven het formulier.',
  'This transaction group requires MFA to apply, but you can not provide an MFA response via Conduit. Edit this object via the web UI.' => 'Deze transactiegroep vereist MFA om toe te passen, maar u kunt geen MFA-antwoord geven via Conduit. Bewerk dit object via de webinterface.',
  'Subtype key "%s" does not identify a valid subtype.' => 'Subtypesleutel "%s" identificeert geen geldig subtype.',
  'Name of the form.' => 'Naam van het formulier.',
  'No search engines match "%s". Available engines which support data export are: %s.' => 'Geen zoekmachines komen overeen met "%s". Beschikbare engines die gegevensexport ondersteunen zijn: %s.',
  'Default Create Form' => 'Standaard aanmaakformulier',
  '%s changed the visibility for %s.' => '%s heeft de zichtbaarheid van %s gewijzigd.',
  'Warnings' => 'Waarschuwingen',
  'Expected "newTransactionWarning()" to return an object of class "PhabricatorTransactionWarning", got something else ("%s") from transaction of class "%s".' => 'Verwacht werd dat "newTransactionWarning()" een object van klasse "PhabricatorTransactionWarning" zou teruggeven, maar kreeg iets anders ("%s") van transactie van klasse "%s".',
  '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s heeft abonnees bewerkt; toegevoegd: %3$s; verwijderd: %5$s.',
  'Name for a %s can be no longer than %s characters.' => array(
    
    array(
      'De naam voor een %s mag niet langer zijn dan %s teken.',
      'De naam voor een %s mag niet langer zijn dan %s tekens.',
    ),
  ),
  'Take Action' => 'Handeling uitvoeren',
  'Use "--output <path>" to specify an output file, or "--output -" to print to stdout.' => 'Gebruik "--output <pad>" om een uitvoerbestand op te geven, of "--output -" om naar stdout af te drukken.',
  'Form Disabled' => 'Formulier uitgeschakeld',
  '%s marked %s inline comment(s) as not done.' => array(
    
    array(
      '%s heeft een ingebedde opmerking als niet afgehandeld gemarkeerd.',
      '%s heeft %s ingebedde opmerkingen als niet afgehandeld gemarkeerd.',
    ),
  ),
  'Must specify either parameter "%s" or parameter "%s".' => 'De parameter "%s" of "%s" moet worden gespecificeerd.',
  'Recipient Removed' => 'Ontvanger verwijderd',
  'EditField (with key "%s", of class "%s") is generating transactions, but has no EditType.' => 'EditField (met sleutel "%s", van klasse "%s") genereert transacties, maar heeft geen EditType.',
  'Bulk Edit Actions' => 'Bulkbewerkingshandelingen',
  'Primary Fields' => 'Primaire velden',
  '%s updated %s attached file(s), removed %s: %s; modified %s: %s.' => '%s heeft bijgevoegde bestanden bijgewerkt; verwijderd: %4$s; gewijzigd: %6$s.',
  '%s attached %s referenced file(s): %s.' => array(
    
    array(
      '%s heeft een gerefereerd bestand bijgevoegd: %3$s.',
      '%s heeft %s gerefereerde bestanden bijgevoegd: %s.',
    ),
  ),
  'Mentioned In' => 'Genoemd in',
  '%s moved %s on %s board(s): %s.' => array(
    
    array(
      
      array(
        '%s heeft %s verplaatst op een werkblad: %4$s.',
        '%s heeft %s verplaatst op %s werkbladen: %s.',
      ),
    ),
  ),
  'Export format.' => 'Exportformaat.',
  'Drag and drop fields to change the order in which they appear in the application "Create" menu.' => 'Sleep velden om de volgorde te wijzigen waarin ze in het "Aanmaken"-menu van de toepassing verschijnen.',
  'Invalid \'%s\' value for Edge transaction. Value should contain only keys \'%s\' (add edges), \'%s\' (remove edges) and \'%s\' (set edges).' => 'Onjuiste \'%s\'-waarde voor verbindingstransactie. De waarde mag alleen de sleutels \'%s\' (verbindingen toevoegen), \'%s\' (verbindingen verwijderen) en \'%s\' (verbindingen instellen) bevatten.',
  'Monogram "%s" identifies an object of the wrong type. Loaded object has class "%s", but this editor operates on objects of type "%s".' => 'Monogram "%s" identificeert een object van het verkeerde type. Het geladen object heeft klasse "%s", maar deze editor werkt met objecten van type "%s".',
  '🔒 Locked' => '🔒 Vergrendeld',
  'New Object' => 'Nieuw object',
  'Type an object type name...' => 'Voer een objecttypenaam in...',
  '%s enabled this form.' => '%s heeft dit formulier ingeschakeld.',
  'EditEngine "%s" created or loaded an invalid object: object (of class "%s") must implement "%s", but does not.' => 'EditEngine "%s" heeft een foutief object aangemaakt of geladen: object (van klasse "%s") moet "%s" implementeren, maar doet dat niet.',
  'Edit Configurations' => 'Configuraties bewerken',
  'Edit type (with key "%s") is missing a Conduit parameter type.' => 'Bewerktype (met sleutel "%s") mist een Conduit-parametertype.',
  'Validation Errors' => 'Validatiefouten',
  'You are about to apply a bulk edit which will affect %s object(s).' => array(
    'U staat op het punt een bulkbewerking toe te passen die %s object zal beïnvloeden.',
    'U staat op het punt een bulkbewerking toe te passen die %s objecten zal beïnvloeden.',
  ),
  'You do not have access to any forms which are enabled and marked as edit forms.' => 'U hebt geen toegang tot formulieren die zijn ingeschakeld en gemarkeerd als bewerkformulieren.',
  'Edit engine (of class "%s") does not support subtypes, so subtype transactions can not be applied to it.' => 'Edit engine (van klasse "%s") ondersteunt geen subtypes, dus subtypetransacties kunnen er niet op worden toegepast.',
  'You are editing the default values for this form.' => 'U bewerkt de standaardwaarden voor dit formulier.',
  'This job is already configured to run silently.' => 'Deze taak is al ingesteld om stil te kunnen worden uitgevoerd.',
  'This form ("%s") has been disabled, so it can not be used.' => 'Dit formulier ("%s") is uitgeschakeld en kan daarom niet worden gebruikt.',
  'Browse Forms' => 'Formulieren doorbladeren',
  'Specify an export format with "--format".' => 'Geef een exportformaat op met "--format".',
  'Using HTTP Parameters' => 'HTTP-parameters gebruiken',
  'Subtype "%s" is not valid: subtype keys must have a minimum length of 3 bytes.' => 'Subtype "%s" is niet geldig: subtypesleutels moeten een minimale lengte van 3 bytes hebben.',
  'Expected a query key or a set of query constraints.' => 'Er werd een querysleutel of een set querybeperkingen verwacht.',
  'Enable Form' => 'Formulier inschakelen',
  'Specified "%s" does not exist.' => 'De opgegeven "%s" bestaat niet.',
  '%s edited edge metadata for %s.' => '%s heeft verbindingsmetagegevens voor %s bewerkt.',
  '"%s" must be a non-empty list of transaction PHIDs.' => '"%s" moet een niet-lege lijst zijn van transactie-PHID\'s.',
  'Create Forms' => 'Aanmaakformulieren',
  'Post as Comment' => 'Plaatsen als opmerking',
  'Edit Configuration' => 'Configuratie bewerken',
  '%s updated %s attached file(s), added %s: %s; modified %s: %s.' => '%s heeft bijgevoegde bestanden bijgewerkt; toegevoegd: %4$s; gewijzigd: %6$s.',
  'Query does not match any objects you have permission to edit.' => 'De query komt niet overeen met objecten die u mag bewerken.',
  'Mark this form as an edit form? Users who can view it will be able to use it to edit objects.' => 'Dit formulier markeren als bewerkformulier? Gebruikers die het kunnen bekijken, kunnen het gebruiken om objecten te bewerken.',
  'Query does not match any objects.' => 'De query komt niet overeen met objecten.',
  'In call to "%s", specified "%s" ("%s") is not supported because it does not implement "%s". Valid object types are: %s.' => 'Bij de aanroep van "%s" wordt het opgegeven "%s" ("%s") niet ondersteund omdat het "%s" niet implementeert. Geldige objecttypen zijn: %s.',
  'Read transactions and comments for a particular object or an entire object type.' => 'Transacties en opmerkingen lezen voor een bepaald object of een volledig objecttype.',
  '✘ Hidden' => '✘ Verborgen',
  '"%s" must be a string.' => '"%s" moet een tekenreeks zijn.',
  'EditEngine BuiltinKey contains an invalid key character "/".' => 'EditEngine BuiltinKey bevat een foutief sleutelteken "/".',
  'Must not specify both parameter "%s" and parameter "%s".' => 'De parameters "%s" en "%s" mogen niet beide worden gespecificeerd.',
  '%s rescinded a token.' => '%s heeft een token ingetrokken.',
  '%s awarded a token.' => '%s heeft een token toegekend.',
  'New object subtype key.' => 'Nieuwe objectsubtypesleutel.',
  'This comment was signed with MFA, so edits to it must also be signed with MFA. You do not have any MFA factors attached to your account, so you can not sign this edit. Add MFA to your account in Settings.' => 'Deze opmerking is ondertekend met MFA, dus bewerkingen ervan moeten ook met MFA worden ondertekend. U hebt geen MFA-factoren aan uw account gekoppeld, dus u kunt deze bewerking niet ondertekenen. Voeg MFA toe aan uw account in Instellingen.',
  '%s added a comment to %s.' => '%s heeft een opmerking toegevoegd aan %s.',
  '%s changed locked and hidden fields.' => '%s heeft vergrendelde en verborgen velden gewijzigd.',
  'Edit Form %d: %s' => 'Bewerkformulier %d: %s',
  'Output path already exists. Use "--overwrite" to overwrite it.' => 'Uitvoerpad bestaat al. Gebruik "--overwrite" om het te overschrijven.',
  'Change Subtype' => 'Subtype wijzigen',
  'Drag and drop fields to reorder them.' => 'Sleep velden om ze te herordenen.',
  '%s removed %d subscriber(s): %s.' => array(
    
    array(
      '%s heeft een abonnee verwijderd: %3$s.',
      '%s heeft abonnees verwijderd: %3$s.',
    ),
  ),
  '%s renamed this %s from %s to %s.' => '%s heeft deze %s hernoemd van %s naar %s.',
  'Not an Edit Form' => 'Geen bewerkformulier',
  'Mark Form' => 'Formulier markeren',
  'EditEngine ("%s") contains an invalid key character "/".' => 'EditEngine ("%s") bevat een foutief sleutelteken "/".',
  'Change Default Values' => 'Standaardwaarden wijzigen',
  '%s added %s watcher(s) for %s: %s.' => array(
    
    array(
      '%s heeft een volger voor %3$s toegevoegd: %4$s.',
      '%s heeft volgers voor %3$s toegevoegd: %4$s.',
    ),
  ),
  'No default edit engine configuration for bulk edit.' => 'Geen standaard edit engine-configuratie voor bulkbewerking.',
  'After running this command, reload this page to see the new setting.' => 'Herlaad deze pagina na het uitvoeren van deze opdracht om de nieuwe instelling te zien.',
  'Save Defaults' => 'Standaardwaarden opslaan',
  'Change how forms in other applications are created and edited. Advanced!' => 'Wijzig hoe formulieren in andere toepassingen worden aangemaakt en bewerkt. Geavanceerd!',
  'Form Order' => 'Formuliervolgorde',
  'Mention In' => 'Noemen in',
  'HTTP Parameters' => 'HTTP-parameters',
  'Transaction has type "%s", but that transaction type is not supported by this editor (%s).' => 'Transactie heeft type "%s", maar dat transactietype wordt niet ondersteund door deze editor (%s).',
  'Edit Engines' => 'Edit Engines',
  'Disable this form? Users will no longer be able to use it.' => 'Dit formulier uitschakelen? Gebruikers kunnen het dan niet meer gebruiken.',
  'Bulk Editor' => 'Bulkbewerkingsprogramma',
  'Aliases
-------

Aliases are alternate recognized keys for a field. For example, a field with
a complex key like `examplePHIDs` might be have a simple version of that key
as an alias, like `example`.

Aliases work just like the primary key when prefilling forms. They make it
easier to remember and use HTTP parameters by providing more natural ways to do
some prefilling.

For example, if a field has `examplePHIDs` as a key but has aliases `example`
and `examples`, these three URIs will all do the same thing:

```
%s?examplePHIDs=...
%s?examples=...
%s?example=...
```

If a URI specifies multiple default values for a field, the value using the
primary key has precedence. Generally, you can not mix different aliases in
a single URI.
' => 'Aliassen
--------

Aliassen zijn alternatieve herkende sleutels voor een veld. Een veld met
een complexe sleutel zoals `examplePHIDs` kan bijvoorbeeld een eenvoudige versie
van die sleutel als alias hebben, zoals `example`.

Aliassen werken net als de primaire sleutel bij het vooraf invullen van formulieren.
Ze maken het gemakkelijker om HTTP-parameters te onthouden en te gebruiken door
natuurlijkere manieren te bieden om vooraf in te vullen.

Als een veld bijvoorbeeld `examplePHIDs` als sleutel heeft maar aliassen `example`
en `examples`, doen deze drie URI\'s allemaal hetzelfde:

```
%s?examplePHIDs=...
%s?examples=...
%s?example=...
```

Als een URI meerdere standaardwaarden voor een veld opgeeft, heeft de waarde
met de primaire sleutel voorrang. Over het algemeen kunt u geen verschillende
aliassen in één URI combineren.
\\',
  'Transaction edge specification contains unexpected key "%s".' => 'Transactieverbindingsspecificatie bevat een onverwachte sleutel "%s".',
  'Support Applications' => 'Ondersteunde toepassingen',
  'File attachment mode "%s" (for file "%s") is invalid. Valid modes are: %s.' => 'Bestandsbijlagemodus "%s" (voor bestand "%s") is onjuist. Geldige modi zijn: %s.',
  'Transaction must have a PHID before calling %s!' => 'Transactie moet een PHID hebben voordat %s wordt aangeroepen!',
  'EditEngine ("%s") returned no builtin engine configurations, but an edit engine must have at least one configuration.' => 'EditEngine ("%s") heeft geen ingebouwde engineconfiguraties teruggegeven, maar een edit engine moet ten minste één configuratie hebben.',
  'This transaction group requires MFA to apply, but the Editor was not configured with a Request. This workflow can not perform an MFA check.' => 'Deze transactiegroep vereist MFA om toe te passen, maar de Editor is niet geconfigureerd met een Request. Deze workflow kan geen MFA-controle uitvoeren.',
  'Working Set' => 'Werkset',
  'Change the object subtype.' => 'Het objectsubtype wijzigen.',
  'Field Types
-----------

Fields in this form have the types described in the table below. This table
shows how to format values for each field type.' => 'Veldtypen
---------

Velden in dit formulier hebben de typen die in de onderstaande tabel worden beschreven. Deze tabel
laat zien hoe waarden voor elk veldtype moeten worden opgemaakt.',
  'Subtype configuration is invalid: there is no subtype defined with key "%s". This subtype is required and must be defined.' => 'Subtypeconfiguratie is onjuist: er is geen subtype gedefinieerd met sleutel "%s". Dit subtype is vereist en moet worden gedefinieerd.',
  'Make comments.' => 'Opmerkingen plaatsen.',
  'No Manage Permission' => 'Geen beheerrechten',
  'Via Content Source' => 'Via inhoudsbron',
  'The object being edited does not implement any standard interfaces (like PhabricatorSubscribableInterface) which allow CCs to be generated automatically. Override the "getMailCC()" method and generate CCs explicitly.' => 'Het object dat wordt bewerkt implementeert geen standaardinterfaces (zoals PhabricatorSubscribableInterface) waarmee CC\'s automatisch kunnen worden gegenereerd. Overschrijf de methode "getMailCC()" en genereer CC\'s expliciet.',
  'Really remove this comment?' => 'Wilt u deze opmerking echt verwijderen?',
  'No MFA' => 'Geen MFA',
  '%s removed %s contributor(s) for %s: %s.' => array(
    
    array(
      '%s heeft een bijdrager voor %3$s verwijderd: %4$s.',
      '%s heeft bijdragers voor %3$s verwijderd: %4$s.',
    ),
  ),
  'Export format ("%s") is not enabled.' => 'Exportformaat ("%s") is niet ingeschakeld.',
  'This object has been locked.' => 'Dit object is vergrendeld.',
  'Changed Policy' => 'Beleid gewijzigd',
  'You can not apply transactions which already have IDs/PHIDs!' => 'U kunt geen transacties toepassen die al ID\'s/PHID\'s hebben!',
  'Forms' => 'Formulieren',
  'File attachment mode (for file "%s") is invalid. Expected a string, found "%s".' => 'Bestandsbijlagemodus (voor bestand "%s") is onjuist. Er werd een tekenreeks verwacht, maar "%s" gevonden.',
  'Hide Edit Forms' => 'Bewerkformulieren verbergen',
  'Disable Form' => 'Formulier uitschakelen',
  'This form ("%s") is not marked as an edit form, so it can not be used to edit objects.' => 'Dit formulier ("%s") is niet gemarkeerd als bewerkformulier en kan daarom niet worden gebruikt om objecten te bewerken.',
  'Export data to a flat file (JSON, CSV, Excel, etc.).' => 'Gegevens exporteren naar een plat bestand (JSON, CSV, Excel, enz.).',
  'You must provide multi-factor credentials to comment or make changes, but you do not have multi-factor authentication configured on your account.' => 'U moet multi-factoraanmeldgegevens opgeven om opmerkingen te plaatsen of wijzigingen aan te brengen, maar u hebt geen multi-factorauthenticatie geconfigureerd op uw account.',
  '%s edited a custom field on %s.' => '%s heeft een aangepast veld op %s bewerkt.',
  'Mention' => 'Vermelding',
  'export' => 'exporteren',
  'Call to setShouldRequireMFA() is too late: this Editor has already checked for MFA requirements.' => 'Aanroep van setShouldRequireMFA() is te laat: deze Editor heeft al gecontroleerd op MFA-vereisten.',
  'You have not selected any objects to edit.' => 'U heeft geen objecten geselecteerd om te bewerken.',
  'Work has already started on job "%s". Jobs can not be reconfigured after they have been started.' => 'Het werk aan taak "%s" is al begonnen. Taken kunnen niet opnieuw worden geconfigureerd nadat ze zijn gestart.',
  'Post Comment' => 'Opmerking plaatsen',
  '%s moved this task to %s on the %s board.' => '%s heeft deze taak naar %s verplaatst op het %s-werkblad.',
  'Enable this form? Users who can see it will be able to use it to create objects.' => 'Dit formulier inschakelen? Gebruikers die het kunnen zien, kunnen het gebruiken om objecten aan te maken.',
  'Specify one or more queries to export with "--query".' => 'Geef een of meer query\'s op om te exporteren met "--query".',
  '%s changed the order in which this form appears in the "Edit" menu.' => '%s heeft de volgorde gewijzigd waarin dit formulier in het "Bewerken"-menu verschijnt.',
  'View Herald Transcript' => 'Herald-transcript bekijken',
  'Unmark this form as a create form? It will still function properly, but no longer be reachable directly from the application "Create" menu.' => 'Markering van dit formulier als aanmaakformulier opheffen? Het zal nog steeds correct functioneren, maar niet meer direct bereikbaar zijn vanuit het "Aanmaken"-menu van de toepassing.',
  'Removing a comment prevents anyone (including you) from reading it. Removing a comment also hides the comment\'s edit history and prevents it from being edited.' => 'Het verwijderen van een opmerking voorkomt dat iemand (inclusief u) deze kan lezen. Het verwijderen van een opmerking verbergt ook de bewerkingsgeschiedenis van de opmerking en voorkomt dat deze wordt bewerkt.',
  '%s removed %s contributor(s): %s.' => array(
    
    array(
      '%s heeft een bijdrager verwijderd: %3$s.',
      '%s heeft bijdragers verwijderd: %3$s.',
    ),
  ),
  'Editor method "queuePublishing()" was called, but no publishable object is present. This Editor is not ready to publish.' => 'Editormethode "queuePublishing()" is aangeroepen, maar er is geen publiceerbaar object aanwezig. Deze Editor is niet klaar om te publiceren.',
  '%s created %s in the %s space.' => '%s heeft %s aangemaakt in de %s-ruimte.',
  '%s added this form to the "Create" menu.' => '%s heeft dit formulier aan het "Aanmaken"-menu toegevoegd.',
  'This %s already has that interact policy.' => 'Dit %s heeft al dat interactiebeleid.',
  'You will be required to provide multi-factor credentials to make changes.' => 'U moet multi-factoraanmeldgegevens opgeven om wijzigingen aan te brengen.',
  '%s renamed this form from %s to %s.' => '%s heeft dit formulier hernoemd van %s naar %s.',
  'Transaction edge data must either be the edge PHID or an edge specification dictionary.' => 'Transactieverbindingsgegevens moeten de verbindings-PHID of een verbindingsspecificatiewoordenboek zijn.',
  '**Locked** fields are visible in the form, but their values can not be changed
by the user.

**Hidden** fields are not visible in the form.

Any assigned default values are still respected, even if the field is locked
or hidden.' => '**Vergrendelde** velden zijn zichtbaar in het formulier, maar hun waarden kunnen niet worden gewijzigd
door de gebruiker.

**Verborgen** velden zijn niet zichtbaar in het formulier.

Toegewezen standaardwaarden worden nog steeds gerespecteerd, zelfs als het veld vergrendeld
of verborgen is.',
  'Unmark as Edit Form' => 'Markering als bewerkformulier opheffen',
  'Method Details' => 'Methodedetails',
  'No Default Create Forms' => 'Geen standaard aanmaakformulieren',
  'Subtype configuration is invalid: subtype with key "%s" specifies both child subtypes and child forms. Specify one or the other, but not both.' => 'Subtypeconfiguratie is onjuist: subtype met sleutel "%s" specificeert zowel kindsubtypes als kindformulieren. Geef het een of het ander op, maar niet beide.',
  'You can not sign a transaction group that has no other effects.' => 'U kunt een transactiegroep die geen andere effecten heeft niet ondertekenen.',
  'No Edit Forms' => 'Geen bewerkformulieren',
  'Mark this form as a create form? It will appear in the application "Create" menus by default.' => 'Dit formulier markeren als aanmaakformulier? Het verschijnt dan standaard in de "Aanmaken"-menu\'s van de toepassing.',
  '%s added %s unsubscriber(s) for %s: %s.' => array(
    
    array(
      '%s heeft een uitschrijving voor %3$s toegevoegd: %4$s.',
      '%s heeft uitschrijvingen voor %3$s toegevoegd: %4$s.',
    ),
  ),
  'Edit Defaults' => 'Standaardwaarden bewerken',
  'Encryption Required' => 'Versleuteling vereist',
  'Form name is required.' => 'Formuliernaam is vereist.',
  'No object exists with ID "%s".' => 'Er bestaat geen object met ID "%s".',
  'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in %s.' => 'U hebt geen MFA-factoren aan uw account gekoppeld, dus u kunt deze transactiegroep niet met MFA ondertekenen. Voeg MFA toe aan uw account in %s.',
  '%s wrote:' => '%s schreef:',
  'Extension "%s" defines a bulk edit group with the same key ("%s") as the main editor or another extension. Each bulk edit group must have a unique key.' => 'Uitbreiding "%s" definieert een bulkbewerkingsgroep met dezelfde sleutel ("%s") als de hoofdeditor of een andere uitbreiding. Elke bulkbewerkingsgroep moet een unieke sleutel hebben.',
  'Save Edit Order' => 'Bewerkingsvolgorde opslaan',
  'File "%s" is invalid: it could not be loaded, or you do not have permission to view it. You must be able to see a file to attach it to an object.' => 'Bestand "%s" is onjuist: het kon niet worden geladen, of u hebt geen toestemming om het te bekijken. U moet een bestand kunnen zien om het aan een object te koppelen.',
  '%s removed %s unsubscriber(s): %s.' => array(
    
    array(
      '%s heeft een uitschrijving verwijderd: %3$s.',
      '%s heeft uitschrijvingen verwijderd: %3$s.',
    ),
  ),
  'EMAIL PREFERENCES' => 'E-MAILVOORKEUREN',
  '%s edited this object (transaction type "%s").' => '%s heeft dit object bewerkt (transactietype "%s").',
  'Mark as "Edit" Form' => 'Markeren als "Bewerk"-formulier',
  '%s edited watcher(s) for %s, added %s: %s; removed %s: %s.' => '%s heeft volgers voor %s bewerkt; toegevoegd: %4$s; verwijderd: %6$s.',
  'This %s already has that edit policy.' => 'Dit %s heeft al dat bewerkingsbeleid.',
  'Conversation Locked' => 'Gesprek vergrendeld',
  'You do not have permission to configure forms for this application.' => 'U hebt geen toestemming om formulieren voor deze toepassing te configureren.',
  'CHANGES TO %s DESCRIPTION' => 'WIJZIGINGEN AAN DE BESCHRIJVING VAN %s',
  'Transaction ("%s", of type "%s") requires a handle ("%s") that it did not load.' => 'Transactie ("%s", van type "%s") vereist een handle ("%s") die niet is geladen.',
  'Choose the object **subtype** that this form should create and edit.' => 'Kies het object-**subtype** dat dit formulier moet aanmaken en bewerken.',
  'Unmark this form as an edit form? It will no longer be able to be used to edit objects.' => 'Markering van dit formulier als bewerkformulier opheffen? Het kan dan niet meer worden gebruikt om objecten te bewerken.',
  'Configure bulk job __id__ to run silently (without sending mail or publishing notifications).' => 'Configureer bulktaak __id__ om stil uit te voeren (zonder e-mail te verzenden of meldingen te publiceren).',
  'User Guide: Customizing Forms' => 'Gebruikershandleiding: Formulieren aanpassen',
  'Make Editable' => 'Bewerkbaar maken',
  '%s disabled this form.' => '%s heeft dit formulier uitgeschakeld.',
  '%s created an object: %s.' => '%s heeft een object aangemaakt: %s.',
  'Make this builtin form editable?' => 'Dit ingebouwde formulier bewerkbaar maken?',
  'Duplicate Form' => 'Formulier dupliceren',
  'Drag and drop fields to change their priority for edits. When a user edits an object, they will be shown the first form in this list that they have permission to see.' => 'Sleep velden om hun prioriteit voor bewerkingen te wijzigen. Wanneer een gebruiker een object bewerkt, wordt het eerste formulier in deze lijst weergegeven waarvoor de gebruiker toestemming heeft.',
  '%s added %d subscriber(s): %s.' => array(
    
    array(
      '%s heeft een abonnee toegevoegd: %3$s.',
      '%s heeft abonnees toegevoegd: %3$s.',
    ),
  ),
  'Unmark as "Create" Form' => 'Markering als "Aanmaken"-formulier opheffen',
  'When creating objects in the web interface, you can use HTTP parameters to
prefill fields in the form. This allows you to quickly create a link to a
form with some of the fields already filled in with default values.

To prefill a form, start by finding the URI for the form you want to prefill.
Do this by navigating to the relevant application, clicking the "Create" button
for the type of object you want to create, and then copying the URI out of your
browser\'s address bar. It will usually look something like this:

```
%s
```

However, `phorge.example.com` will be the domain where your copy of this
software is installed, and `application/` will be the URI for an application.
Some applications have multiple forms for creating objects or URIs that look a
little different than this example, so the URI may not look exactly like this.

To prefill the form, add properly encoded HTTP parameters to the URI. You
should end up with something like this:

```
%s?title=Platypus&body=Ornithopter
```

If the form has `title` and `body` fields of the correct types, visiting this
link will prefill those fields with the values "Platypus" and "Ornithopter"
respectively.

The rest of this document shows which parameters you can add to this form and
how to format them.


Supported Fields
----------------

This form supports these fields:
' => 'Bij het aanmaken van objecten in de webinterface kunt u HTTP-parameters gebruiken om
velden in het formulier vooraf in te vullen. Hiermee kunt u snel een koppeling maken naar een
formulier waarvan sommige velden al zijn ingevuld met standaardwaarden.

Om een formulier vooraf in te vullen, begint u met het vinden van de URI voor het formulier
dat u wilt vooraf invullen. Doe dit door naar de relevante toepassing te navigeren, op de
knop "Aanmaken" te klikken voor het type object dat u wilt aanmaken, en vervolgens de URI
uit de adresbalk van uw browser te kopiu00ebren. Het ziet er meestal ongeveer zo uit:

```
%s
```

`phorge.example.com` is echter het domein waar uw exemplaar van deze software is geu00efnstalleerd, en `application/` is de URI voor een toepassing. Sommige toepassingen hebben meerdere formulieren voor het aanmaken van objecten of URI\'s die er iets anders uitzien dan dit voorbeeld, dus de URI ziet er mogelijk niet precies zo uit.

Om het formulier vooraf in te vullen, voegt u correct gecodeerde HTTP-parameters toe aan de URI. U zou iets als dit moeten krijgen:

```
%s?title=Platypus&body=Ornithopter
```

Als het formulier `title`- en `body`-velden van de juiste typen heeft, worden bij het bezoeken van deze koppeling die velden vooraf ingevuld met respectievelijk de waarden "Platypus" en "Ornithopter".

De rest van dit document laat zien welke parameters u aan dit formulier kunt toevoegen en hoe u ze moet opmaken.


Ondersteunde velden
-------------------

Dit formulier ondersteunt deze velden:',
  'Exception when processing transaction of type "%s": %s' => 'Uitzondering bij het verwerken van transactie van type "%s": %s',
  '%s created this object in space %s.' => '%s heeft dit object aangemaakt in ruimte %s.',
  'Engine: Edit' => 'Engine: Bewerken',
  '%s changed the interact policy for %s.' => '%s heeft het interactiebeleid voor %s gewijzigd.',
  '%s removed %s watcher(s) for %s: %s.' => array(
    
    array(
      '%s heeft  een volger voor %3$s verwijderd: %4$s.',
      '%s heeft  volgers voor %3$s verwijderd: %4$s.',
    ),
  ),
  '%s moved %s from %s to %s on the %s board.' => '%s heeft %s van %s naar %s verplaatst op het %s-werkblad.',
  'EditEngine "%s" created or loaded an invalid object: object must actually be an object, but is of some other type ("%s").' => 'EditEngine "%s" heeft een foutief object aangemaakt of geladen: het object moet daadwerkelijk een object zijn, maar is van een ander type ("%s").',
  '%s edited unsubscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s heeft uitschrijvingen voor %s bewerkt; toegevoegd: %4$s; verwijderd: %6$s.',
  'Attempting to apply a transaction (of class "%s", with type "%s") which has not been constructed correctly: %s' => 'Poging om een transactie toe te passen (van klasse "%s", met type "%s") die niet correct is opgebouwd: %s',
  '%s modified %s attached file(s): %s.' => array(
    
    array(
      '%s heeft een bijgevoegd bestand gewijzigd: %3$s.',
      '%s heeft bijgevoegde bestanden gewijzigd: %3$s.',
    ),
  ),
  'Unable to load transactions: %s.' => 'Kan transacties niet laden: %s.',
  'Subtype configuration is invalid: subtype with key "%s" has no name. Subtypes must have a name.' => 'Subtypeconfiguratie is onjuist: subtype met sleutel "%s" heeft geen naam. Subtypes moeten een naam hebben.',
  'Comment to add, formatted as remarkup.' => 'Toe te voegen opmerking, opgemaakt als remarkup.',
  'Transaction with key "%s" has invalid type "%s". This type is not recognized. Valid types are: %s.' => 'Transactie met sleutel "%s" heeft een onjuist type "%s". Dit type wordt niet herkend. Geldige typen zijn: %s.',
  'Show Only Create Forms' => 'Alleen aanmaakformulieren weergeven',
  'You can not interact with this object because it is locked.' => 'U kunt niet met dit object interacteren omdat het is vergrendeld.',
  'This object is already in that space.' => 'Dit object bevindt zich al in die ruimte.',
  'Expected "newTimelineView()" to return an object of class "%s" (in engine "%s").' => 'Verwacht werd dat "newTimelineView()" een object van klasse "%s" zou teruggeven (in engine "%s").',
  'This %s already has that join policy.' => 'Dit %s heeft al dat deelnamebeleid.',
  '%s shifted this object from the %s space to the %s space.' => '%s heeft dit object van de %s-ruimte naar de %s-ruimte verplaatst.',
  '%s changed the interact policy from "%s" to "%s".' => '%s heeft het interactiebeleid gewijzigd van "%s" naar "%s".',
  'Create Form' => 'Aanmaakformulier',
  '%s renamed %s %s from %s to %s.' => '%s heeft %s %s hernoemd van %s naar %s.',
  '%s moved this task on %s board(s): %s.' => array(
    
    array(
      '%s heeft deze taak verplaatst op een werkblad: %3$s.',
      '%s heeft deze taak verplaatst op werkbladen: %3$s.',
    ),
  ),
  'Unable to load query for transaction object "%s"!' => 'Kan query voor transactieobject "%s" niet laden!',
  'Changed Subscribers' => 'Abonnees gewijzigd',
  '%s created %s %s.' => '%s heeft %s %s aangemaakt',
  'Comment for this transaction was not loaded.' => 'Opmerking voor deze transactie is niet geladen.',
  'Raw Comment' => 'Onbewerkte opmerking',
  '%s created this object with interact policy "%s".' => '%s heeft dit object aangemaakt met interactiebeleid "%s".',
  'Save Create Order' => 'Aanmaakvolgorde opslaan',
  '%s updated subscribers of %s.' => '%s heeft abonnees van %s bijgewerkt.',
  '%s created this object.' => '%s heeft dit object aangemaakt.',
  'Unknown export format ("%s"). Known formats are: %s.' => 'Exportformaat "%s" onbekend. Bekende formaten: %s.',
  'You have not chosen any edits to apply.' => 'U hebt geen bewerkingen gekozen om toe te passen.',
  'No herald adapter specified.' => 'Geen Herald-adapter opgegeven.',
  'Comment History' => 'Opmerkingsgeschiedenis',
  'Unable to load object with PHID "%s"!' => 'Kan object met PHID "%s" niet laden!',
  'Edit Form' => 'Bewerkformulier',
  'You can not apply transactions which already have %s!' => 'U kunt geen transacties toepassen die al %s hebben!',
  '%s edited an edge.' => '%s heeft een verbinding bewerkt.',
  '%s unsubscribed.' => '%s heeft zich uitgeschreven.',
  '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.' => '%s heeft bijdragers voor %s bewerkt; toegevoegd: %4$s; verwijderd: %6$s.',
  'Subtype configuration is invalid: two subtypes use the same key ("%s"). Each subtype must have a unique key.' => 'Subtypeconfiguratie is onjuist: twee subtypes gebruiken dezelfde sleutel ("%s"). Elk subtype moet een unieke sleutel hebben.',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "type" field. Each transaction must have a type field.' => 'Parameter "%s" moet een lijst van transactiebeschrijvingen bevatten, maar het item met sleutel "%s" mist een "type"-veld. Elke transactie moet een type-veld hebben.',
  'This transaction is supposed to have an %s set, but it does not!' => 'Deze transactie zou een %s moeten hebben, maar dat is niet het geval!',
  'Comment Preview' => 'Voorvertoning opmerking',
  'Untitled Form' => 'Naamloos formulier',
  '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s heeft abonnees voor %s bewerkt; toegevoegd: %4$s; verwijderd: %6$s.',
  'Unsupported bulk edit type "%s".' => 'Niet-ondersteund bulkbewerkingstype "%s".',
  'Validation errors:' => 'Validatiefouten:',
  'This object has no select fields.' => 'Dit object heeft geen selectievelden.',
  'Mentioned User' => 'Genoemde gebruiker',
  '%s created this form.' => '%s heeft dit formulier aangemaakt.',
  'List of PHIDs to set.' => 'Lijst van in te stellen PHID\'s.',
  'This comment was signed with MFA, so you will be required to provide MFA credentials to make changes.' => 'Deze opmerking is ondertekend met MFA, dus u moet MFA-aanmeldgegevens opgeven om wijzigingen aan te brengen.',
  'The %s policy of this object would no longer allow you to %s the object.' => 'Het %s-beleid voor dit object zou niet langer toestaan dat u het object %s.',
  '%s added %s unsubscriber(s): %s.' => array(
    
    array(
      '%s heeft een uitschrijving toegevoegd: %3$s.',
      '%s heeft uitschrijvingen toegevoegd: %3$s.',
    ),
  ),
  'EDIT DETAILS' => 'BEWERKINGSDETAILS',
  '%s edited a custom field (with key "%s").' => '%s heeft een aangepast veld bewerkt (met sleutel "%s").',
  'No Create Permission' => 'Geen aanmaakrechten',
  'Edge transactions must have PHIDs or edge specs as values (found value "%s" on transaction of type "%s").' => 'Verbindingstransacties moeten PHID\'s of verbindingsspecificaties als waarden hebben (waarde "%s" gevonden bij transactie van type "%s").',
  'Remove Action: %s' => 'Handeling verwijderen: %s',
  'Show Only Edit Forms' => 'Alleen bewerkformulieren weergeven',
  'This is a standard **ApplicationEditor** method which allows you to create and modify objects by applying transactions. For documentation on these endpoints, see **[[ %s | Conduit API: Using Edit Endpoints ]]**.' => 'Dit is een standaard **ApplicationEditor**-methode waarmee u objecten kunt aanmaken en wijzigen door transacties toe te passen. Zie **[[ %s | Conduit API: Edit-eindpunten gebruiken ]]** voor documentatie over deze eindpunten.',
  'HTTP Parameters: %s' => 'HTTP-parameters: %s',
  '"%s" must be a non-empty list of author PHIDs.' => '"%s" moet een niet-lege lijst met auteur-PHID\'s zijn.',
  'Edit Form: %s' => 'Bewerkformulier: %s',
  '%s moved this task from %s to %s on the %s board.' => '%s heeft deze taak van %s naar %s verplaatst op het %s-werkblad.',
  'List of PHIDs to remove.' => 'Lijst van te verwijderen PHID\'s.',
  'Create New Form' => 'Nieuw formulier aanmaken',
  '%s updated the description for %s %s.' => '%s heeft de beschrijving bijgewerkt voor %s %s.',
  'This application is not configured with any forms for creating objects that are visible to you and enabled.' => 'Deze toepassing is niet geconfigureerd met formulieren voor het aanmaken van objecten die voor u zichtbaar en ingeschakeld zijn.',
  'Select Fields
-------------

Some fields support selection from a specific set of values. When prefilling
these fields, use the value in the **Value** column to select the appropriate
setting.
' => 'Selectievelden
--------------

Sommige velden ondersteunen selectie uit een specifieke set waarden. Gebruik bij het
vooraf invullen van deze velden de waarde in de kolom **Waarde** om de juiste
instelling te selecteren.
\\',
  'Transaction requires handles and it did not load them.' => 'Transactie vereist handles en heeft ze niet geladen.',
  '"%s" must be a list of constraints.' => '"%s" moet een lijst met beperkingen zijn.',
  '(Show Details)' => '(Details weergeven)',
  '%s edited this %s.' => '%s heeft deze %s bewerkt.',
  '%s edited a custom field.' => '%s heeft een aangepast veld bewerkt.',
  'Apply remaining actions?' => 'Resterende handelingen toepassen?',
  'Two bulk edit groups have the same key ("%s"). Each bulk edit group must have a unique key.' => 'Twee bulkbewerkingsgroepen hebben dezelfde sleutel ("%s"). Elke bulkbewerkingsgroep moet een unieke sleutel hebben.',
  'Supported values:' => 'Ondersteunde waarden:',
  'If the output file already exists, overwrite it instead of raising an error.' => 'Als het uitvoerbestand al bestaat, overschrijf het dan in plaats van een fout te geven.',
  'List of PHIDs to add.' => 'Lijst van toe te voegen PHID\'s.',
  'You have not moved this object to any columns it is not already in.' => 'U hebt dit object niet naar kolommen verplaatst waar het nog niet in staat.',
  'Failed to reload object identified by monogram "%s" when querying by PHID.' => 'Kan object geïdentificeerd door monogram "%s" niet opnieuw laden bij het opvragen via PHID.',
  'Configure Form' => 'Formulier configureren',
  'Edit Locked Object' => 'Vergrendeld object bewerken',
  '%s of your actions have no effect:' => array(
    'Één handeling van u heeft geen effect:',
    'Sommige van uw handelingen hebben geen effect:',
  ),
  'You can not post an empty comment.' => 'U kunt geen lege opmerking plaatsen.',
  'Field "%s" has a bulk edit group key ("%s") with no corresponding bulk edit group.' => 'Veld "%s" heeft een bulkbewerkingsgroepsleutel ("%s") zonder bijbehorende bulkbewerkingsgroep.',
  'Exported data to "%s".' => 'Gegevens geëxporteerd naar "%s".',
  '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s heeft abonnees bewerkt; toegevoegd: %3$s; verwijderd: %5$s.',
  'Mail extension ("%s") defines a stamp template with the same key ("%s") as another template. Each stamp template must have a unique key.' => 'E-mailuitbreiding ("%s") definieert een stempelsjabloon met dezelfde sleutel ("%s") als een ander sjabloon. Elk stempelsjabloon moet een unieke sleutel hebben.',
  'File attachment transaction must have a map of files to attachment modes, found "%s".' => 'Bestandsbijlagetransactie moet een toewijzing van bestanden naar bijlagemodi hebben, "%s" gevonden.',
  '%s updated %s attached file(s), added %s: %s; removed %s: %s.' => '%s heeft bijgevoegde bestanden bijgewerkt; toegevoegd: %4$s; verwijderd: %6$s.',
  '%s changed the order in which this form appears in the "Create" menu.' => '%s heeft de volgorde gewijzigd waarin dit formulier in het "Aanmaken"-menu verschijnt.',
  '%s named this form %s.' => '%s heeft dit formulier %s genoemd.',
  '%s added %s subscriber(s) for %s: %s.' => array(
    
    array(
      '%s heeft een abonnee toegevoegd voor %3$s: %4$s.',
      '%s heeft abonnees toegevoegd voor %3$s: %4$s.',
    ),
  ),
  '%s mentioned this in %s.' => '%s heeft dit genoemd in %s.',
  '%s created this object with join policy "%s".' => '%s heeft dit object aangemaakt met deelnamebeleid "%s".',
  'Subtype configuration is invalid: it must be a list of subtype specifications.' => 'Subtypeconfiguratie is onjuist: het moet een lijst van subtypespecificaties zijn.',
  'Transaction Summary' => 'Transactieoverzicht',
  'Use Form' => 'Formulier gebruiken',
  'The command "!%s" is not a supported mail command. Valid commands for this object are: %s.' => 'De opdracht "!%s" is geen ondersteunde e-mailopdracht. Geldige opdrachten voor dit object zijn: %s.',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.' => 'Parameter "%s" moet een lijst van transactiebeschrijvingen bevatten, maar het item met sleutel "%s" is geen woordenboek.',
  'Edit Comment' => 'Opmerking bewerken',
  '%s marked this form as an edit form.' => '%s heeft dit formulier als bewerkformulier gemarkeerd.',
  'Edge transactions must have destination PHIDs as in edge lists (found key "%s" on transaction of type "%s").' => 'Verbindingstransacties moeten doel-PHID\'s hebben zoals in verbindingslijsten (sleutel "%s" gevonden bij transactie van type "%s").',
  'This transaction group requires MFA to apply, but the Editor was not configured with a Cancel URI. This workflow can not perform an MFA check.' => 'Deze transactiegroep vereist MFA om toe te passen, maar de Editor is niet geconfigureerd met een Annuleer-URI. Deze workflow kan geen MFA-controle uitvoeren.',
  'EditEngine ("%s") returned builtin engine configurations, but one (with key "%s") is missing a builtin key. Provide a builtin key for each configuration (you can omit it from the first configuration in the list to automatically assign the default key).' => 'EditEngine ("%s") heeft ingebouwde engineconfiguraties teruggegeven, maar één (met sleutel "%s") mist een ingebouwde sleutel. Geef een ingebouwde sleutel op voor elke configuratie (u kunt deze weglaten bij de eerste configuratie in de lijst om automatisch de standaardsleutel toe te wijzen).',
  'Monogram "%s" does not identify a valid object.' => 'Monogram "%s" identificeert geen geldig object.',
  'Silent Edit' => 'Stille bewerking',
  '"%s" must be a string (PHID or object monogram).' => '"%s" moet een tekenreeks zijn (PHID of objectmonogram).',
  'Reorder Fields' => 'Velden herordenen',
  'Task has invalid task data.' => 'Taak heeft onjuiste taakgegevens.',
  'Add Action...' => 'Handeling toevoegen...',
  'Detached' => 'Losgekoppeld',
  'This transaction should generate its %s automatically, but has already had one set!' => 'Deze transactie zou automatisch zijn %s moeten genereren, maar er is al een ingesteld!',
  '%s removed this form from the "Create" menu.' => '%s heeft dit formulier uit het "Aanmaken"-menu verwijderd.',
  'Type a form name...' => 'Voer een formuliernaam in...',
  'Custom field transaction \'%s\' does not implement integration for %s.' => 'Aangepaste veldtransactie \'%s\' implementeert geen integratie voor %s.',
  'Create %s' => '%s aanmaken',
  'Specified queries use different engines: query "%s" uses engine "%s", not "%s". All queries must run on the same engine.' => 'Opgegeven query\'s gebruiken verschillende engines: query "%s" gebruikt engine "%s", niet "%s". Alle query\'s moeten op dezelfde engine draaien.',
  '%s changed the join policy from "%s" to "%s".' => '%s heeft het deelnamebeleid gewijzigd van "%s" naar "%s".',
  '%s updated subscribers...' => '%s heeft abonnees bijgewerkt...',
  'Remove Comment' => 'Opmerking verwijderen',
  'Transaction (of type "%s") has no effect.' => 'Transactie (van type "%s") heeft geen effect.',
  'Make Builtin Editable' => 'Ingebouwd formulier bewerkbaar maken',
  'Editor ("%s") has no mail stamp template with provided key ("%s").' => 'Editor ("%s") heeft geen e-mailstempelsjabloon met de opgegeven sleutel ("%s").',
  'You can not shift this object in the selected space, because the space does not exist or you do not have access to it.' => 'U kunt dit object niet naar de geselecteerde ruimte verplaatsen, omdat de ruimte niet bestaat of u er geen toegang toe hebt.',
  'You must choose a space for this object.' => 'U moet een ruimte kiezen voor dit object.',
  'Edit Forms' => 'Bewerkformulieren',
  'Mark as Create Form' => 'Markeren als aanmaakformulier',
  '%s added %s subscriber(s): %s.' => array(
    
    array(
      '%s heeft een abonnee toegevoegd: %3$s.',
      '%s heeft abonnees toegevoegd: %3$s.',
    ),
  ),
  'Unmark Form' => 'Formuliermarkering opheffen',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "value" field. Each transaction must have a value field.' => 'Parameter "%s" moet een lijst van transactiebeschrijvingen bevatten, maar het item met sleutel "%s" mist een "value"-veld. Elke transactie moet een waarde-veld hebben.',
  'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").' => 'Subtype "%s" is niet geldig: subtypesleutels mogen alleen kleine Latijnse letters bevatten ("a" tot en met "z").',
  'Capability not supported.' => 'Mogelijkheid niet ondersteund.',
  'Use "--id" to choose a bulk job to make silent.' => 'Gebruik "--id" om een bulktaak te kiezen om stil te maken.',
  'Change Form Subtype' => 'Formuliersubtype wijzigen',
  '%s added %s contributor(s): %s.' => array(
    
    array(
      '%s heeft een abonnee toegevoegd: %3$s.',
      '%s heeft abonnees toegevoegd: %3$s.',
    ),
  ),
  '%s removed %s watcher(s): %s.' => array(
    
    array(
      '%s heeft een volger verwijderd: %3$s.',
      '%s heeft volgers verwijderd: %3$s.',
    ),
  ),
  '%s created this object with edit policy "%s".' => '%s heeft dit object aangemaakt met bewerkingsbeleid "%s".',
  'Unable to load bulk job with ID "%s".' => 'Kan bulktaak met ID "%s" niet laden.',
  '%s added %s watcher(s): %s.' => array(
    
    array(
      '%s heeft een volger toegevoegd: %3$s.',
      '%s heeft volgers toegevoegd: %3$s.',
    ),
  ),
  'Task has no object PHID!' => 'Taak heeft geen object-PHID!',
  'Transaction type \'%s\' is missing an internal apply implementation!' => 'Transactietype \'%s\' mist een interne toepassingsimplementatie!',
  '%s attached files...' => '%s heeft bestanden bijgevoegd...',
  'Old Mode' => 'Oude modus',
  'Flag "--overwrite" has no effect when outputting to stdout.' => 'Vlag "--overwrite" heeft geen effect bij uitvoer naar stdout.',
  'You do not have permission to create these objects.' => 'U hebt geen toestemming om deze objecten aan te maken.',
  'Export the data selected by one or more queries.' => 'De door een of meer query\'s geselecteerde gegevens exporteren.',
  'Specified "%s" does not exist. See the endpoint documentation for valid object types.' => 'Het opgegeven "%s" bestaat niet. Raadpleeg de eindpuntdocumentatie voor geldige objecttypen.',
  'Bulk Edit' => 'Bulkbewerking',
  'Write output to a file. If omitted, output will be sent to stdout.' => 'Uitvoer naar een bestand schrijven. Indien weggelaten, wordt de uitvoer naar stdout gestuurd.',
  'You will be required to provide multi-factor credentials to comment or make changes.' => 'U moet multi-factoraanmeldgegevens opgeven om opmerkingen te plaatsen of wijzigingen aan te brengen.',
  '%s shifted %s from the %s space to the %s space.' => '%s heeft %s van de %s-ruimte naar de %s-ruimte verplaatst.',
  'EditEngine ("%s") returned builtin engine configurations, but at least two specify the same builtin key ("%s"). Engines must have unique builtin keys.' => 'EditEngine ("%s") heeft ingebouwde engineconfiguraties teruggegeven, maar ten minste twee specificeren dezelfde ingebouwde sleutel ("%s"). Engines moeten unieke ingebouwde sleutels hebben.',
  'This comment has been deleted.' => 'Deze opmerking is verwijderd.',
  'Add Another Action' => 'Nog een handeling toevoegen',
  'Template Objects
----------------

Instead of specifying each field value individually, you can specify another
object to use as a template. Some of the initial fields will be copied from the
template object.

Specify a template object with the `template` parameter. You can use an ID,
PHID, or monogram (for objects which have monograms). For example, you might
use URIs like these:

```
%s?template=123
%s?template=PHID-WXYZ-abcdef...
%s?template=T123
```

You can combine the `template` parameter with HTTP parameters: the template
object will be copied first, then any HTTP parameters will be read.

When using `template`, these fields will be copied:' => 'Sjabloonobjecten
----------------

In plaats van elke veldwaarde afzonderlijk op te geven, kunt u een ander
object opgeven om als sjabloon te gebruiken. Sommige van de initiële velden worden
gekopieerd van het sjabloonobject.

Geef een sjabloonobject op met de parameter `template`. U kunt een ID,
PHID of monogram gebruiken (voor objecten die monogrammen hebben). U kunt
bijvoorbeeld URI\'s als deze gebruiken:

```
%s?template=123
%s?template=PHID-WXYZ-abcdef...
%s?template=T123
```

U kunt de parameter `template` combineren met HTTP-parameters: het sjabloonobject
wordt eerst gekopieerd, daarna worden eventuele HTTP-parameters gelezen.

Bij gebruik van `template` worden deze velden gekopieerd:',
  'Name is required.' => 'Naam is verplicht.',
  'Hide Create Forms' => 'Aanmaakformulieren verbergen',
  'Configure a bulk job to execute silently.' => 'Een bulktaak configureren om stil uit te voeren.',
  'Custom field transaction has no \'%s\'!' => 'Aangepaste veldtransactie heeft geen \'%s\'!',
  '%s signed these changes with MFA.' => '%s heeft deze wijzigingen ondertekend met MFA.',
  'SearchEngine class ("%s") does not support data export.' => 'SearchEngine-klasse ("%s") ondersteunt geen gegevensexport.',
  '%s unmarked this form as an edit form.' => '%s heeft de markering van dit formulier als bewerkformulier opgeheven.',
  'Multiple search engines match "%s": %s.' => 'Meerdere zoekmachines komen overeen met "%s": %s.',
  'Mark as "Create" Form' => 'Markeren als "Aanmaken"-formulier',
  'Failed to base64_decode() value for key "%s".' => 'Kan de waarde voor sleutel "%s" niet decoderen met base64_decode().',
  'Create another form with the same settings as this one?' => 'Nog een formulier aanmaken met dezelfde instellingen als dit formulier?',
  'Change Field Order' => 'Veldvolgorde wijzigen',
  'Forms must have a name.' => 'Formulieren moeten een naam hebben.',
  '%s changed the default values for field %s.' => '%s heeft de standaardwaarden voor veld %s gewijzigd.',
  'This EditField does not provide a Bulk EditType with key "%s".' => 'Dit EditField biedt geen Bulk EditType met sleutel "%s".',
  'EditEngine ("%s") returned builtin engine configurations, but none are marked as default and the first configuration has a different builtin key already. Mark a builtin as default or omit the key from the first configuration' => 'EditEngine ("%s") heeft ingebouwde engineconfiguraties teruggegeven, maar geen is als standaard gemarkeerd en de eerste configuratie heeft al een andere ingebouwde sleutel. Markeer een ingebouwde als standaard of laat de sleutel weg bij de eerste configuratie',
  '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.' => array(
    
    array(
      
      array(
        '%s markeerde een ingebedde opmerking als voltooid en een ingebedde opmerking als niet voltooid.',
        '%s markeerde een ingebedde opmerking als voltooid en  %3$s ingebedde opmerkingen als niet voltooid.',
      ),
      
      array(
        '%s markeerde %s ingebedde opmerkingen als voltooid en een ingebedde opmerking als niet voltooid.',
        '%s markeerde %s ingebedde opmerkingen als voltooid en  %s ingebedde opmerkingen als niet voltooid.',
      ),
    ),
  ),
  '!%s (or %s)' => '!%s (of %s)',
  '%s reordered the fields in this form.' => '%s heeft de velden in dit formulier herordend.',
  'This is a preview of the current form configuration.' => 'Dit is een voorvertoning van de huidige formulierconfiguratie.',
  '%s changed the edit policy for %s.' => '%s heeft het bewerkingsbeleid voor %s gewijzigd.',
  'All Forms' => 'Alle formulieren',
  'This %s already has that view policy.' => 'Dit %s heeft al dat weergavebeleid.',
  '%s subscribed.' => '%s heeft zich geabonneerd.',
  'Transactions are visible to users that can see the object which was acted upon. Some transactions - in particular, comments - are editable by the transaction author.' => 'Transacties zijn zichtbaar voor gebruikers die het object kunnen zien waarop de handeling is uitgevoerd. Sommige transacties - met name opmerkingen - zijn bewerkbaar door de auteur van de transactie.',
  'Subtype configuration is invalid: subtype with key "%s" specifies that it can mutate into subtype "%s", but that is not a valid subtype.' => 'Subtypeconfiguratie is onjuist: subtype met sleutel "%s" specificeert dat het kan muteren naar subtype "%s", maar dat is geen geldig subtype.',
  'Subtype "%s" is not a valid subtype.' => 'Subtype "%s" is geen geldig subtype.',
  'Query "%s" is unknown. To run a builtin query like "all" or "active", also specify the search engine with "--class".' => 'Query "%s" is onbekend. Om een ingebouwde query zoals "all" of "active" uit te voeren, geef ook de zoekmachine op met "--class".',
  'The source object has a comment which mentions the destination object.' => 'Het bronobject heeft een opmerking die het doelobject noemt.',
  '%s removed %s unsubscriber(s) for %s: %s.' => array(
    
    array(
      '%s heeft een uitschrijving voor %3$s verwerkt: %4$s.',
      '%s heeft uitschrijvingen voor %3$s verwerkt: %4$s.',
    ),
  ),
  'For full details, run `/bin/mail show-inbound --id %d`' => 'Voer `/bin/mail show-inbound --id %d` uit voor volledige details',
  'This object is locked. Edit it anyway?' => 'Dit object is vergrendeld. Toch bewerken?',
  '%s Action(s) With No Effect' => array(
    '%s handeling zonder effect',
    '%s handelingen zonder effect',
  ),
  'Configured job "%s" to run silently.' => 'Taak "%s" geconfigureerd om stil uit te voeren.',
  'View Form Configurations' => 'Formulierconfiguraties bekijken',
  '%s removed %s attached file(s): %s.' => array(
    
    array(
      '%s heeft bijgevoegd bestand verwijderd: %3$s.',
      '%s heeft bijgevoegde bestanden verwijderd: %3$s.',
    ),
  ),
  '%s ("%s")' => '%s ("%s")',
  'Comments are visible to users who can see the object which was commented on. Comments can be edited by their authors.' => 'Opmerkingen zijn zichtbaar voor gebruikers die het object kunnen zien waarop is gereageerd. Opmerkingen kunnen worden bewerkt door hun auteurs.',
  'Custom field transaction has invalid \'%s\'; field \'%s\' is disabled or does not exist.' => 'Aangepaste veldtransactie heeft een onjuiste \'%s\'; veld \'%s\' is uitgeschakeld of bestaat niet.',
  'This object has no fields with aliases.' => 'Dit object heeft geen velden met aliassen.',
  'Do you want to post your comment anyway?' => 'Wilt u uw opmerking toch plaatsen?',
  'All Edit Engines' => 'Alle Edit Engines',
  '%s Action(s) Have No Effect' => array(
    'Een handeling heeft geen effect',
    'Handelingen hebben geen effect',
  ),
  'This EditField does not provide a Conduit EditType with key "%s".' => 'Dit EditField biedt geen Conduit EditType met sleutel "%s".',
  'None of the fields on this object support templating.' => 'Geen van de velden op dit object ondersteunt sjablonen.',
  'Mentioned Here' => 'Hier genoemd',
  'Edge transaction includes edge of type \'%s\', but transaction is of type \'%s\'. Each edge transaction must alter edges of only one type.' => 'Verbindingstransactie bevat een verbinding van type \'%s\', maar de transactie is van type \'%s\'. Elke verbindingstransactie mag alleen verbindingen van één type wijzigen.',
  'This comment was removed by %s.' => 'Deze opmerking is verwijderd door %s.',
  'Apply Remaining Actions' => 'Resterende handelingen toepassen',
  '%s edited watcher(s), added %s: %s; removed %s: %s.' => '%s heeft volgers bewerkt; toegevoegd: %3$s verwijderd: %5$s.',
  '%s edited unsubscriber(s), added %s: %s; removed %s: %s.' => '%s heeft uitschrijvingen bewerkt; toegevoegd: %3$s; verwijderd: %5$s.',
  '%s changed the join policy for %s.' => '%s heeft het deelnamebeleid voor %s gewijzigd.',
  'Object Locked' => 'Object vergrendeld',
  'Edit Form Configuration' => 'Formulierconfiguratie bewerken',
  'Query "%s" is not a recognized query for class "%s".' => 'Query "%s" is geen herkende query voor klasse "%s".',
  'You can not remove this comment because the conversation is locked.' => 'U kunt deze opmerking niet verwijderen omdat het gesprek is vergrendeld.',
  '%s updated a token.' => '%s heeft een token bijgewerkt.',
  'Form Preview' => 'Formuliervoorvertoning',
  '%s changed the subtype of this form from %s to %s.' => '%s heeft het subtype van dit formulier gewijzigd van %s naar %s.',
  'If you start work now, this edit will send mail and publish notifications normally.' => 'Als u nu begint, zal deze bewerking normaal e-mail verzenden en meldingen publiceren.',
  'When an object (like a task) is edited, the relevant application creates a
"transaction" and applies it. This list of transactions on each object is the
basis for essentially all edits and comments. Reviewing the transaction
record allows you to see who edited an object, when, and how their edit changed
things.

One common reason to call this method is that you\'re implementing a webhook and
just received a notification that an object has changed. See the Webhooks
documentation for more detailed discussion of this use case.

One Object Type at a Time
=========================

This API method can query transactions for any type of object which supports
transactions, but only one type of object can be queried per call. For example:
you can retrieve transactions affecting Tasks, or you can retrieve transactions
affecting Revisions, but a single call can not retrieve both.

This is a technical limitation arising because (among other reasons) there is
no global ordering on transactions.

To find transactions for a specific object (like a particular task), pass the
object PHID or an appropriate object identifier (like `T123`) as an
`objectIdentifier`.

To find all transactions for an object type, pass the object type constant as
an `objectType`. For example, the correct identifier for tasks is `TASK`. (You
can quickly find an unknown type constant by looking at the PHID of an object
of that type.)

All supported values for `objectType`:

%s

Constraints
===========

These constraints are supported:

  - `phids` //Optional list<phid>.// Find specific transactions by PHID. This
    is most likely to be useful if you\'re responding to a webhook notification
    and want to inspect only the related events.
  - `authorPHIDs` //Optional list<phid>.// Find transactions with particular
    authors.

Transaction Format
==================

Each transaction has custom data describing what the transaction did. The
format varies from transaction to transaction. The easiest way to figure out
exactly what a particular transaction looks like is to make the associated kind
of edit to a test object, then query that object.

Not all transactions have data: by default, transactions have a `null` "type"
and no additional data. This API does not expose raw transaction data because
some of it is internal, oddly named, misspelled, confusing, not useful, or
could create security or policy problems to expose directly.

New transactions are exposed (with correctly spelled, comprehensible types and
useful, reasonable fields) as we become aware of use cases for them.
' => 'Wanneer een object (zoals een taak) wordt bewerkt, maakt de relevante toepassing een "transactie" aan en past deze toe. Deze lijst van transacties op elk object is de basis voor in wezen alle bewerkingen en opmerkingen. Door het transactieoverzicht te bekijken kunt u zien wie een object heeft bewerkt, wanneer, en hoe hun bewerking dingen heeft gewijzigd.

Een veelvoorkomende reden om deze methode aan te roepen is dat u een webhook implementeert en zojuist een melding hebt ontvangen dat een object is gewijzigd. Zie de Webhooks-documentatie voor een meer gedetailleerde bespreking van dit gebruiksscenario.

Eén objecttype tegelijk
=======================

Deze API-methode kan transacties opvragen voor elk type object dat transacties ondersteunt, maar er kan slechts één type object per aanroep worden opgevraagd. Bijvoorbeeld: u kunt transacties ophalen die taken beïnvloeden, of u kunt transacties ophalen die versies beïnvloeden, maar één enkele aanroep kan niet beide ophalen.

Dit is een technische beperking die ontstaat omdat (onder andere) er geen globale ordening op transacties is.

Om transacties voor een specifiek object (zoals een bepaalde taak) te vinden, geef de object-PHID of een geschikte objectidentificatie (zoals `T123`) door als `objectIdentifier`.

Om alle transacties voor een objecttype te vinden, geef de objecttypeconstante door als `objectType`. De juiste identificatie voor taken is bijvoorbeeld `TASK`. (U kunt snel een onbekende typeconstante vinden door naar de PHID van een object van dat type te kijken.)

Alle ondersteunde waarden voor `objectType`:

%s

Beperkingen
===========

Deze beperkingen worden ondersteund:

  - `phids` //Optionele lijst<phid>.// Vind specifieke transacties op PHID. Dit     is waarschijnlijk het nuttigst als u reageert op een webhookmelding en alleen     de gerelateerde gebeurtenissen wilt inspecteren.
  - `authorPHIDs` //Optionele lijst<phid>.// Vind transacties met bepaalde
    auteurs.

Transactieformaat
=================

Elke transactie heeft aangepaste gegevens die beschrijven wat de transactie deed. Het formaat varieert van transactie tot transactie. De eenvoudigste manier om precies te achterhalen hoe een bepaalde transactie eruitziet, is de bijbehorende soort bewerking op een testobject uit te voeren en dat object vervolgens op te vragen.

Niet alle transacties hebben gegevens: standaard hebben transacties een `null` "type" en geen aanvullende gegevens. Deze API stelt geen ruwe transactiegegevens bloot omdat sommige ervan intern, vreemd benoemd, verkeerd gespeld, verwarrend, niet nuttig zijn, of beveiligings- of beleidsproblemen zouden kunnen veroorzaken bij directe blootstelling.

Nieuwe transacties worden blootgesteld (met correct gespelde, begrijpelijke typen en nuttige, redelijke velden) zodra we op de hoogte raken van gebruiksscenario\'s ervoor.',
  'If you start work now, this edit will be applied silently: it will not send mail or publish notifications.' => 'Als u nu begint, wordt deze bewerking stil toegepast: er wordt geen e-mail verzonden en er worden geen meldingen gepubliceerd.',
  '%s edited contributor(s), added %s: %s; removed %s: %s.' => '%s heeft bijdragers bewerkt; toegevoegd: %3$s; verwijderd: %5$s.',
  'Transaction type \'%s\' is missing an external apply implementation!' => 'Transactietype \'%s\' mist een externe toepassingsimplementatie!',
  'The subtype "%s" is not a valid subtype.' => 'Het subtype "%s" is geen geldig subtype.',
  '%s updated %s attached file(s), added %s: %s; removed %s: %s; modified %s: %s.' => '%s heeft bijgevoegde bestanden bijgewerkt; toegevoegd: %4$s; verwijderd: %6$s; gewijzigd: %8$s.',
  'Form %d' => 'Formulier %d',
  'Configure Forms for Configuring Forms' => 'Formulieren configureren voor het configureren van formulieren',
  '%s added %s contributor(s) for %s: %s.' => array(
    
    array(
      '%s heeft een bijdragers toegevoegd voor %3$s: %4$s.',
      '%s heeft bijdragers toegevoegd voor %3$s: %4$s.',
    ),
  ),
  '%s changed the edit policy from "%s" to "%s".' => '%s heeft het bewerkingsbeleid gewijzigd van "%s" naar "%s".',
  'The source object is mentioned in a comment on the destination object.' => 'Het bronobject wordt genoemd in een opmerking op het doelobject.',
  'You can not shift this object into the selected space, because the space is archived. Objects can not be created inside (or moved into) archived spaces.' => 'U kunt dit object niet naar de geselecteerde ruimte verplaatsen, omdat de ruimte is gearchiveerd. Objecten kunnen niet worden aangemaakt in (of verplaatst naar) gearchiveerde ruimtes.',
  'Capability not supported!' => 'Mogelijkheid niet ondersteund!',
  '%s created this object with visibility "%s".' => '%s heeft dit object aangemaakt met zichtbaarheid "%s".',
  'Override Lock' => 'Vergrendeling opheffen',
  'You can not apply transactions which already have commentVersions!' => 'U kunt geen transacties toepassen die al commentVersions hebben!',
  'Object Monogram' => 'Objectmonogram',
  'Subtype "%s" is not valid: subtype keys must be no longer than 64 bytes.' => 'Subtype "%s" is niet geldig: subtypesleutels mogen niet langer zijn dan 64 bytes.',
  'Will Copy' => 'Wordt gekopieerd',
  '%s removed %s subscriber(s): %s.' => array(
    
    array(
      '%s heeft een abonnee verwijderd: %3$s.',
      '%s heeft abonnees verwijderd: %3$s.',
    ),
  ),
  'Transaction comment must not yet have a PHID!' => 'Transactieopmerking mag nog geen PHID hebben!',
  '%s changed the visibility from "%s" to "%s".' => '%s heeft de zichtbaarheid gewijzigd van "%s" naar "%s".',
  'Unable to load configuration for this EditEngine ("%s").' => 'Kan de configuratie voor deze EditEngine ("%s") niet laden.',
  'Invalid \'%s\' value for PHID transaction. Value should contain only keys \'%s\' (add PHIDs), \'%s\' (remove PHIDs) and \'%s\' (set PHIDS).' => 'Onjuiste \'%s\'-waarde voor PHID-transactie. De waarde mag alleen de sleutels \'%s\' (PHID\'s toevoegen), \'%s\' (PHID\'s verwijderen) en \'%s\' (PHID\'s instellen) bevatten.',
);
  }

}
