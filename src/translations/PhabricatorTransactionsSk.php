<?php

final class PhabricatorTransactionsSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Lock / Hide Fields' => 'Uzamknúť/skryť polia',
  'Unmark as "Edit" Form' => 'Zrušiť označenie ako formulár „úprav“',
  'Parameter "%s" is not a list of transactions.' => 'Parameter „%s“ nie je zoznam transakcií.',
  'Transactions have no effect:' => 'Transakcie nemajú žiadny účinok:',
  'This endpoint supports these types of transactions. See below for detailed information about each transaction type.' => 'Tento koncový bod podporuje tieto typy transakcií. Podrobné informácie o každom type transakcie nájdete nižšie.',
  'To silence this edit, run this command:' => 'Ak chcete túto úpravu stlmiť, spustite tento príkaz:',
  'In call to "transaction.search", selected object (of type "%s") does not implement "%s", so transactions can not be loaded for it.' => 'Pri volaní „transaction.search“ vybraný objekt (typu „%s“) neimplementuje „%s“, takže preň nie je možné načítať transakcie.',
  'Builtin Form "%s"' => 'Zabudovaný formulár „%s“',
  '%s added a comment.' => '%s pridal komentár.',
  'Empty Comment' => 'Prázdny komentár',
  'The selected %s policy excludes you. Choose a %s policy which allows you to %s the object.' => 'Vybraná politika %s vás vylučuje. Vyberte politiku %s, ktorá vám umožní %s objekt.',
  'All users are already subscribed to this %s.' => 'Všetci používatelia sú už prihlásení na odber tohto %s.',
  'Edge transaction has no \'%s\'!' => 'Hranová transakcia nemá „%s“!',
  'No object exists with PHID "%s".' => 'Neexistuje žiadny objekt s PHID „%s“.',
  'You can not edit this comment because the conversation is locked.' => 'Tento komentár nemôžete upraviť, pretože konverzácia je uzamknutá.',
  'Reorder Edit Forms' => 'Zmeniť poradie formulárov na úpravu',
  'Reorder Create Forms' => 'Zmeniť poradie formulárov na vytváranie',
  'Edit Form Defaults' => 'Upraviť predvolené hodnoty formulára',
  'The %s action(s) you are taking have no effect:' => array(
    'Akcia, ktorú vykonávate, nemá žiadny účinok:',
    'Akcie, ktoré vykonávate, nemajú žiadny účinok:',
  ),
  '%s removed %s subscriber(s) for %s: %s.' => array(
    
    array(
      '%s odstránil odberateľa pre %3$s: %4$s.',
      '%s odstránil odberateľov pre %3$s: %4$s.',
    ),
  ),
  'New Mode' => 'Nový režim',
  'Engine: Editor' => 'Nástroj: Editor',
  '%s moved %s to %s on the %s board.' => '%s presunul %s do %s na nástenke %s.',
  'To continue, configure multi-factor authentication in Settings.' => 'Ak chcete pokračovať, nakonfigurujte viacfaktorové overenie v Nastaveniach.',
  'SearchEngine class to export data from.' => 'Trieda SearchEngine, z ktorej sa majú exportovať údaje.',
  'In %s, %s wrote:' => 'V %s %s napísal:',
  'Unmark as Create Form' => 'Zrušiť označenie ako formulár na vytváranie',
  'Mark as Edit Form' => 'Označiť ako formulár na úpravu',
  'Edges already exist; transaction has no effect.' => 'Hrany už existujú; transakcia nemá žiadny účinok.',
  '%s updated the preamble for this form.' => '%s aktualizoval preambulu tohto formulára.',
  '%s changed the default value for field %s.' => '%s zmenil predvolenú hodnotu poľa %s.',
  'Comment Action Options' => 'Možnosti akcií komentára',
  '%s marked %s inline comment(s) as done.' => array(
    
    array(
      '%s označil vnútorný komentár ako hotové.',
      '%s označil %s vnútorné komentáre ako hotové.',
      '%s označil %s vnútorných komentárov ako hotové.',
    ),
  ),
  'Email Body Text' => 'Text tela e-mailu',
  'Optional instructions, shown above the form.' => 'Voliteľné pokyny zobrazené nad formulárom.',
  'This transaction group requires MFA to apply, but you can not provide an MFA response via Conduit. Edit this object via the web UI.' => 'Táto skupina transakcií vyžaduje na použitie MFA, ale odpoveď MFA nemôžete poskytnúť cez Conduit. Upravte tento objekt cez webové rozhranie.',
  'Subtype key "%s" does not identify a valid subtype.' => 'Kľúč podtypu „%s“ neidentifikuje platný podtyp.',
  'Name of the form.' => 'Názov formulára.',
  'No search engines match "%s". Available engines which support data export are: %s.' => 'Žiadne vyhľadávacie nástroje nezodpovedajú „%s“. Dostupné nástroje, ktoré podporujú export údajov, sú: %s.',
  'Default Create Form' => 'Predvolený formulár na vytváranie',
  '%s changed the visibility for %s.' => '%s zmenil viditeľnosť pre %s.',
  'Warnings' => 'Varovania',
  'Expected "newTransactionWarning()" to return an object of class "PhabricatorTransactionWarning", got something else ("%s") from transaction of class "%s".' => 'Očakávalo sa, že „newTransactionWarning()“ vráti objekt triedy „PhabricatorTransactionWarning“, ale z transakcie triedy „%2$s“ sa získalo niečo iné („%s“).',
  '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s upravil odberateľov, pridal: %3$s; odstránil: %5$s.',
  'Name for a %s can be no longer than %s characters.' => array(
    
    array(
      'Názov pre %s nemôže byť dlhší ako %s znak.',
      'Názov pre %s nemôže byť dlhší ako %s znaky.',
      'Názov pre %s nemôže byť dlhší ako %s znakov.',
    ),
  ),
  'Take Action' => 'Vykonať akciu',
  'Use "--output <path>" to specify an output file, or "--output -" to print to stdout.' => 'Použite „--output <path>“ na zadanie výstupného súboru alebo „--output -“ na výpis do stdout.',
  'Form Disabled' => 'Formulár zakázaný',
  '%s marked %s inline comment(s) as not done.' => array(
    
    array(
      '%s označil vnútorný komentár ako nehotové.',
      '%s označil %s vnútorné komentáre ako nehotové.',
      '%s označil %s vnútorných komentárov ako nehotové.',
    ),
  ),
  'Must specify either parameter "%s" or parameter "%s".' => 'Musíte zadať buď parameter „%s“, alebo parameter „%s“.',
  'Recipient Removed' => 'Príjemca odstránený',
  'EditField (with key "%s", of class "%s") is generating transactions, but has no EditType.' => 'EditField (s kľúčom „%s“, triedy „%s“) generuje transakcie, ale nemá žiadny EditType.',
  'Bulk Edit Actions' => 'Akcie hromadnej úpravy',
  'Primary Fields' => 'Primárne polia',
  '%s updated %s attached file(s), removed %s: %s; modified %s: %s.' => '%s aktualizoval pripojené súbory, odstránil %4$s; upravil: %6$s.',
  '%s attached %s referenced file(s): %s.' => array(
    
    array(
      '%s pripojil odkazovaný súbor: %3$s.',
      '%s pripojil odkazované súbory: %3$s.',
      '%s pripojil odkazovaných súborov: %3$s.',
    ),
  ),
  'Mentioned In' => 'Spomenuté v',
  '%s moved %s on %s board(s): %s.' => array(
    
    array(
      
      array(
        '%s presunul %s na nástenke: %4$s.',
        '%s presunul %s na %s nástenkách: %s.',
      ),
    ),
  ),
  'Export format.' => 'Formát exportu.',
  'Drag and drop fields to change the order in which they appear in the application "Create" menu.' => 'Presuňte polia myšou na zmenu poradia, v ktorom sa zobrazujú v ponuke aplikácie „Vytvoriť“.',
  'Invalid \'%s\' value for Edge transaction. Value should contain only keys \'%s\' (add edges), \'%s\' (remove edges) and \'%s\' (set edges).' => 'Neplatná hodnota „%s“ pre hranovú transakciu. Hodnota by mala obsahovať iba kľúče „%s“ (pridať hrany), „%s“ (odstrániť hrany) a „%s“ (nastaviť hrany).',
  'Monogram "%s" identifies an object of the wrong type. Loaded object has class "%s", but this editor operates on objects of type "%s".' => 'Monogram „%s“ identifikuje objekt nesprávneho typu. Načítaný objekt má triedu „%s“, ale tento editor pracuje s objektmi typu „%s“.',
  '🔒 Locked' => '🔒 Uzamknuté',
  'New Object' => 'Nový objekt',
  'Type an object type name...' => 'Zadajte názov typu objektu…',
  '%s enabled this form.' => '%s povolil tento formulár.',
  'EditEngine "%s" created or loaded an invalid object: object (of class "%s") must implement "%s", but does not.' => 'EditEngine „%s“ vytvoril alebo načítal neplatný objekt: objekt (triedy „%s“) musí implementovať „%s“, ale neimplementuje.',
  'Edit Configurations' => 'Upraviť konfigurácie',
  'Edit type (with key "%s") is missing a Conduit parameter type.' => 'Typu úpravy (s kľúčom „%s“) chýba typ parametra Conduit.',
  'Validation Errors' => 'Chyby validácie',
  'You are about to apply a bulk edit which will affect %s object(s).' => array(
    'Chystáte sa použiť hromadnú úpravu na jeden objekt.',
    'Chystáte sa použiť hromadnú úpravu ktorá ovplyvní %s objekty.',
    'Chystáte sa použiť hromadnú úpravu ktorá ovplyvní %s objektov.',
  ),
  'You do not have access to any forms which are enabled and marked as edit forms.' => 'Nemáte prístup k žiadnym formulárom, ktoré sú povolené a označené ako formuláre na úpravu.',
  'Edit engine (of class "%s") does not support subtypes, so subtype transactions can not be applied to it.' => 'Editovací nástroj (triedy „%s“) nepodporuje podtypy, takže naň nie je možné použiť transakcie podtypov.',
  'You are editing the default values for this form.' => 'Upravujete predvolené hodnoty pre tento formulár.',
  'This job is already configured to run silently.' => 'Táto úloha je už nakonfigurovaná na tiché spustenie.',
  'This form ("%s") has been disabled, so it can not be used.' => 'Tento formulár („%s“) bol zakázaný, takže ho nie je možné použiť.',
  'Browse Forms' => 'Prehliadať formuláre',
  'Specify an export format with "--format".' => 'Zadajte formát exportu pomocou „--format“.',
  'Using HTTP Parameters' => 'Používanie HTTP parametrov',
  'Subtype "%s" is not valid: subtype keys must have a minimum length of 3 bytes.' => 'Podtyp „%s“ nie je platný: kľúče podtypov musia mať minimálnu dĺžku 3 bajty.',
  'Expected a query key or a set of query constraints.' => 'Očakával sa kľúč dopytu alebo množina obmedzení dopytu.',
  'Enable Form' => 'Povoliť formulár',
  'Specified "%s" does not exist.' => 'Zadané „%s“ neexistuje.',
  '%s edited edge metadata for %s.' => '%s upravil metaúdaje hrany pre %s.',
  '"%s" must be a non-empty list of transaction PHIDs.' => '„%s“ musí byť neprázdny zoznam PHID transakcií.',
  'Create Forms' => 'Formuláre na vytváranie',
  'Post as Comment' => 'Uverejniť ako komentár',
  'Edit Configuration' => 'Upraviť konfiguráciu',
  '%s updated %s attached file(s), added %s: %s; modified %s: %s.' => '%s aktualizoval pripojené súbory, pridal: %4$s; upravil: %6$s.',
  'Query does not match any objects you have permission to edit.' => 'Dopyt nezodpovedá žiadnym objektom, ktoré máte oprávnenie upravovať.',
  'Mark this form as an edit form? Users who can view it will be able to use it to edit objects.' => 'Označiť tento formulár ako formulár na úpravu? Používatelia, ktorí ho môžu zobraziť, ho budú môcť použiť na úpravu objektov.',
  'Query does not match any objects.' => 'Dopyt nezodpovedá žiadnym objektom.',
  'In call to "%s", specified "%s" ("%s") is not supported because it does not implement "%s". Valid object types are: %s.' => 'Pri volaní „%s“ zadané „%s“ („%s“) nie je podporované, pretože neimplementuje „%s“. Platné typy objektov sú: %s.',
  'Read transactions and comments for a particular object or an entire object type.' => 'Čítať transakcie a komentáre pre konkrétny objekt alebo celý typ objektu.',
  '✘ Hidden' => '✘ Skryté',
  '"%s" must be a string.' => '„%s“ musí byť reťazec.',
  'EditEngine BuiltinKey contains an invalid key character "/".' => 'EditEngine BuiltinKey obsahuje neplatný znak kľúča „/“.',
  'Must not specify both parameter "%s" and parameter "%s".' => 'Nesmiete zadať naraz parameter „%s“ aj parameter „%s“.',
  '%s rescinded a token.' => '%s odobral žetón.',
  '%s awarded a token.' => '%s udelil žetón.',
  'New object subtype key.' => 'Kľúč podtypu nového objektu.',
  'This comment was signed with MFA, so edits to it must also be signed with MFA. You do not have any MFA factors attached to your account, so you can not sign this edit. Add MFA to your account in Settings.' => 'Tento komentár bol podpísaný pomocou MFA, takže úpravy k nemu musia byť tiež podpísané pomocou MFA. K vášmu účtu nie sú priradené žiadne faktory MFA, takže túto úpravu nemôžete podpísať. Pridajte MFA k svojmu účtu v Nastaveniach.',
  '%s added a comment to %s.' => '%s pridal komentár k %s.',
  '%s changed locked and hidden fields.' => '%s zmenil uzamknuté a skryté polia.',
  'Edit Form %d: %s' => 'Upraviť formulár %d: %s',
  'Output path already exists. Use "--overwrite" to overwrite it.' => 'Výstupná cesta už existuje. Použite „--overwrite“ na jej prepísanie.',
  'Change Subtype' => 'Zmeniť podtyp',
  'Drag and drop fields to reorder them.' => 'Presuňte polia myšou na zmenu ich poradia.',
  '%s removed %d subscriber(s): %s.' => array(
    
    array(
      '%s odstránil odberateľa: %3$s.',
      '%s odstránil odberateľov: %3$s.',
    ),
  ),
  '%s renamed this %s from %s to %s.' => '%s premenoval tento %s z %s na %s.',
  'Not an Edit Form' => 'Nie je formulár na úpravu',
  'Mark Form' => 'Označiť formulár',
  'EditEngine ("%s") contains an invalid key character "/".' => 'EditEngine („%s“) obsahuje neplatný znak kľúča „/“.',
  'Change Default Values' => 'Zmeniť predvolené hodnoty',
  '%s added %s watcher(s) for %s: %s.' => array(
    
    array(
      '%s pridal sledovateľa pre %3$s: %4$s.',
      '%s pridal sledovateľov pre %3$s: %4$s.',
    ),
  ),
  'No default edit engine configuration for bulk edit.' => 'Žiadna predvolená konfigurácia editovacieho nástroja pre hromadnú úpravu.',
  'After running this command, reload this page to see the new setting.' => 'Po spustení tohto príkazu znovu načítajte túto stránku, aby ste videli nové nastavenie.',
  'Save Defaults' => 'Uložiť predvolené hodnoty',
  'Change how forms in other applications are created and edited. Advanced!' => 'Zmeňte spôsob vytvárania a úpravy formulárov v iných aplikáciách. Pokročilé!',
  'Form Order' => 'Poradie formulárov',
  'Mention In' => 'Spomenúť v',
  'HTTP Parameters' => 'HTTP parametre',
  'Transaction has type "%s", but that transaction type is not supported by this editor (%s).' => 'Transakcia má typ „%s“, ale tento typ transakcie nie je podporovaný týmto editorom (%s).',
  'Edit Engines' => 'Editovacie nástroje',
  'Disable this form? Users will no longer be able to use it.' => 'Zakázať tento formulár? Používatelia ho už nebudú môcť použiť.',
  'Bulk Editor' => 'Hromadný editor',
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
' => 'Aliasy
------

Aliasy sú alternatívne rozpoznávané kľúče pre pole. Napríklad pole so
zložitým kľúčom ako `examplePHIDs` môže mať jednoduchú verziu tohto kľúča
ako alias, napríklad `example`.

Aliasy fungujú rovnako ako primárny kľúč pri predvypĺňaní formulárov. Uľahčujú
zapamätanie a používanie HTTP parametrov tým, že poskytujú prirodzenejšie spôsoby
predvypĺňania.

Napríklad, ak má pole `examplePHIDs` ako kľúč, ale má aliasy `example`
a `examples`, tieto tri URI budú robiť to isté:

```
%s?examplePHIDs=...
%s?examples=...
%s?example=...
```

Ak URI určuje viacero predvolených hodnôt pre pole, hodnota používajúca
primárny kľúč má prednosť. Vo všeobecnosti nemôžete miešať rôzne aliasy v
jednom URI.',
  'Transaction edge specification contains unexpected key "%s".' => 'Špecifikácia hrany transakcie obsahuje neočakávaný kľúč „%s“.',
  'Support Applications' => 'Podporujúce aplikácie',
  'File attachment mode "%s" (for file "%s") is invalid. Valid modes are: %s.' => 'Režim pripojenia súboru „%s“ (pre súbor „%s“) je neplatný. Platné režimy sú: %s.',
  'Transaction must have a PHID before calling %s!' => 'Transakcia musí mať PHID pred volaním %s!',
  'EditEngine ("%s") returned no builtin engine configurations, but an edit engine must have at least one configuration.' => 'EditEngine („%s“) nevrátil žiadne zabudované konfigurácie nástroja, ale editovací nástroj musí mať aspoň jednu konfiguráciu.',
  'This transaction group requires MFA to apply, but the Editor was not configured with a Request. This workflow can not perform an MFA check.' => 'Táto skupina transakcií vyžaduje na použitie MFA, ale editor nebol nakonfigurovaný s požiadavkou (Request). Tento pracovný postup nemôže vykonať kontrolu MFA.',
  'Working Set' => 'Pracovná množina',
  'Change the object subtype.' => 'Zmeniť podtyp objektu.',
  'Field Types
-----------

Fields in this form have the types described in the table below. This table
shows how to format values for each field type.' => 'Typy polí
---------

Polia v tomto formulári majú typy opísané v tabuľke nižšie. Táto tabuľka
ukazuje, ako formátovať hodnoty pre každý typ poľa.',
  'Subtype configuration is invalid: there is no subtype defined with key "%s". This subtype is required and must be defined.' => 'Konfigurácia podtypu je neplatná: nie je definovaný žiadny podtyp s kľúčom „%s“. Tento podtyp je povinný a musí byť definovaný.',
  'Make comments.' => 'Vytvárať komentáre.',
  'No Manage Permission' => 'Žiadne oprávnenie na správu',
  'Via Content Source' => 'Cez zdroj obsahu',
  'The object being edited does not implement any standard interfaces (like PhabricatorSubscribableInterface) which allow CCs to be generated automatically. Override the "getMailCC()" method and generate CCs explicitly.' => 'Upravovaný objekt neimplementuje žiadne štandardné rozhrania (ako PhabricatorSubscribableInterface), ktoré umožňujú automatické generovanie kópií (CC). Prepíšte metódu „getMailCC()“ a generujte kópie (CC) explicitne.',
  'Really remove this comment?' => 'Naozaj odstrániť tento komentár?',
  'No MFA' => 'Bez MFA',
  '%s removed %s contributor(s) for %s: %s.' => array(
    
    array(
      '%s odstránil prispievateľa pre %3$s: %4$s.',
      '%s odstránil prispievateľov pre %3$s: %4$s.',
    ),
  ),
  'Export format ("%s") is not enabled.' => 'Formát exportu („%s“) nie je povolený.',
  'This object has been locked.' => 'Tento objekt bol uzamknutý.',
  'Changed Policy' => 'Zmenená politika',
  'You can not apply transactions which already have IDs/PHIDs!' => 'Nemôžete použiť transakcie, ktoré už majú ID/PHID!',
  'Forms' => 'Formuláre',
  'File attachment mode (for file "%s") is invalid. Expected a string, found "%s".' => 'Režim pripojenia súboru (pre súbor „%s“) je neplatný. Očakával sa reťazec, našlo sa „%s“.',
  'Hide Edit Forms' => 'Skryť formuláre na úpravu',
  'Disable Form' => 'Zakázať formulár',
  'This form ("%s") is not marked as an edit form, so it can not be used to edit objects.' => 'Tento formulár („%s“) nie je označený ako formulár na úpravu, takže ho nie je možné použiť na úpravu objektov.',
  'Export data to a flat file (JSON, CSV, Excel, etc.).' => 'Exportovať údaje do plochého súboru (JSON, CSV, Excel atď.).',
  'You must provide multi-factor credentials to comment or make changes, but you do not have multi-factor authentication configured on your account.' => 'Na komentovanie alebo vykonávanie zmien musíte poskytnúť viacfaktorové poverenia, ale na svojom účte nemáte nakonfigurované viacfaktorové overenie.',
  '%s edited a custom field on %s.' => '%s upravil vlastné pole na %s.',
  'Mention' => 'Zmienka',
  'export' => 'export',
  'Call to setShouldRequireMFA() is too late: this Editor has already checked for MFA requirements.' => 'Volanie setShouldRequireMFA() je príliš neskoro: tento editor už skontroloval požiadavky MFA.',
  'You have not selected any objects to edit.' => 'Nevybrali ste žiadne objekty na úpravu.',
  'Work has already started on job "%s". Jobs can not be reconfigured after they have been started.' => 'Na úlohe „%s“ sa už začalo pracovať. Úlohy nie je možné po ich spustení znovu nakonfigurovať.',
  'Post Comment' => 'Uverejniť komentár',
  '%s moved this task to %s on the %s board.' => '%s presunul túto úlohu do %s na nástenke %s.',
  'Enable this form? Users who can see it will be able to use it to create objects.' => 'Povoliť tento formulár? Používatelia, ktorí ho vidia, ho budú môcť použiť na vytváranie objektov.',
  'Specify one or more queries to export with "--query".' => 'Zadajte jeden alebo viac dopytov na export pomocou „--query“.',
  '%s changed the order in which this form appears in the "Edit" menu.' => '%s zmenil poradie, v ktorom sa tento formulár zobrazuje v ponuke „Upraviť“.',
  'View Herald Transcript' => 'Zobraziť prepis Herald',
  'Unmark this form as a create form? It will still function properly, but no longer be reachable directly from the application "Create" menu.' => 'Zrušiť označenie tohto formulára ako formulára na vytváranie? Bude naďalej fungovať správne, ale už nebude priamo dostupný z ponuky aplikácie „Vytvoriť“.',
  'Removing a comment prevents anyone (including you) from reading it. Removing a comment also hides the comment\'s edit history and prevents it from being edited.' => 'Odstránenie komentára zabráni komukoľvek (vrátane vás) v jeho čítaní. Odstránenie komentára tiež skryje históriu úprav komentára a zabráni jeho úprave.',
  '%s removed %s contributor(s): %s.' => array(
    
    array(
      '%s odstránil prispievateľa: %3$s.',
      '%s odstránil prispievateľov: %3$s.',
    ),
  ),
  'Editor method "queuePublishing()" was called, but no publishable object is present. This Editor is not ready to publish.' => 'Metóda editora „queuePublishing()“ bola zavolaná, ale nie je prítomný žiadny publikovateľný objekt. Tento editor nie je pripravený na publikovanie.',
  '%s created %s in the %s space.' => '%s vytvoril %s v priestore %s.',
  '%s added this form to the "Create" menu.' => '%s pridal tento formulár do ponuky „Vytvoriť“.',
  'This %s already has that interact policy.' => 'Tento %s už má túto politiku interakcie.',
  'You will be required to provide multi-factor credentials to make changes.' => 'Na vykonanie zmien sa od vás bude vyžadovať poskytnutie viacfaktorových poverení.',
  '%s renamed this form from %s to %s.' => '%s premenoval tento formulár z %s na %s.',
  'Transaction edge data must either be the edge PHID or an edge specification dictionary.' => 'Údaje hrany transakcie musia byť buď PHID hrany, alebo slovník špecifikácie hrany.',
  '**Locked** fields are visible in the form, but their values can not be changed
by the user.

**Hidden** fields are not visible in the form.

Any assigned default values are still respected, even if the field is locked
or hidden.' => '**Uzamknuté** polia sú vo formulári viditeľné, ale ich hodnoty nemôže
používateľ zmeniť.

**Skryté** polia nie sú vo formulári viditeľné.

Akékoľvek priradené predvolené hodnoty sa stále rešpektujú, aj keď je pole uzamknuté
alebo skryté.',
  'Unmark as Edit Form' => 'Zrušiť označenie ako formulár na úpravu',
  'Method Details' => 'Podrobnosti metódy',
  'No Default Create Forms' => 'Žiadne predvolené formuláre na vytváranie',
  'Subtype configuration is invalid: subtype with key "%s" specifies both child subtypes and child forms. Specify one or the other, but not both.' => 'Konfigurácia podtypu je neplatná: podtyp s kľúčom „%s“ určuje podradené podtypy aj podradené formuláre. Zadajte jedno alebo druhé, ale nie oboje.',
  'You can not sign a transaction group that has no other effects.' => 'Nemôžete podpísať skupinu transakcií, ktorá nemá žiadne iné účinky.',
  'No Edit Forms' => 'Žiadne formuláre na úpravu',
  'Mark this form as a create form? It will appear in the application "Create" menus by default.' => 'Označiť tento formulár ako formulár na vytváranie? V ponukách aplikácie „Vytvoriť“ sa zobrazí predvolene.',
  '%s added %s unsubscriber(s) for %s: %s.' => array(
    
    array(
      '%s pridal odhláseného odberateľa pre %3$s: %4$s.',
      '%s pridal odhlásených odberateľov pre %3$s: %4$s.',
    ),
  ),
  'Edit Defaults' => 'Upraviť predvolené hodnoty',
  'Encryption Required' => 'Vyžaduje sa šifrovanie',
  'Form name is required.' => 'Vyžaduje sa názov formulára.',
  'No object exists with ID "%s".' => 'Neexistuje žiadny objekt s ID „%s“.',
  'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in %s.' => 'K vášmu účtu nie sú priradené žiadne faktory MFA, takže túto skupinu transakcií nemôžete podpísať pomocou MFA. Pridajte MFA k svojmu účtu v %s.',
  '%s wrote:' => '%s napísal:',
  'Extension "%s" defines a bulk edit group with the same key ("%s") as the main editor or another extension. Each bulk edit group must have a unique key.' => 'Rozšírenie „%s“ definuje skupinu hromadnej úpravy s rovnakým kľúčom („%s“) ako hlavný editor alebo iné rozšírenie. Každá skupina hromadnej úpravy musí mať jedinečný kľúč.',
  'Save Edit Order' => 'Uložiť poradie úprav',
  'File "%s" is invalid: it could not be loaded, or you do not have permission to view it. You must be able to see a file to attach it to an object.' => 'Súbor „%s“ je neplatný: nepodarilo sa ho načítať alebo nemáte oprávnenie ho zobraziť. Musíte byť schopní vidieť súbor, aby ste ho mohli pripojiť k objektu.',
  '%s removed %s unsubscriber(s): %s.' => array(
    
    array(
      '%s odstránil odhláseného odberateľa: %3$s.',
      '%s odstránil odhlásených odberateľov: %3$s.',
    ),
  ),
  'EMAIL PREFERENCES' => 'PREDVOĽBY E-MAILU',
  '%s edited this object (transaction type "%s").' => '%s upravil tento objekt (typ transakcie „%s“).',
  'Mark as "Edit" Form' => 'Označiť ako formulár „úprav“',
  '%s edited watcher(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil sledovateľov pre %s, pridal: %4$s; odstránil: %6$s.',
  'This %s already has that edit policy.' => 'Tento %s už má túto politiku úprav.',
  'Conversation Locked' => 'Konverzácia uzamknutá',
  'You do not have permission to configure forms for this application.' => 'Nemáte oprávnenie konfigurovať formuláre pre túto aplikáciu.',
  'CHANGES TO %s DESCRIPTION' => 'ZMENY V POPISE %s',
  'Transaction ("%s", of type "%s") requires a handle ("%s") that it did not load.' => 'Transakcia („%s“, typu „%s“) vyžaduje ovládač („%s“), ktorý nenačítala.',
  'Choose the object **subtype** that this form should create and edit.' => 'Vyberte **podtyp** objektu, ktorý má tento formulár vytvárať a upravovať.',
  'Unmark this form as an edit form? It will no longer be able to be used to edit objects.' => 'Zrušiť označenie tohto formulára ako formulára na úpravu? Už ho nebude možné použiť na úpravu objektov.',
  'Configure bulk job __id__ to run silently (without sending mail or publishing notifications).' => 'Nakonfigurovať hromadnú úlohu __id__ na tiché spustenie (bez odosielania e-mailov alebo publikovania upozornení).',
  'User Guide: Customizing Forms' => 'Používateľská príručka: Prispôsobenie formulárov',
  'Make Editable' => 'Nastaviť ako upraviteľné',
  '%s disabled this form.' => '%s zakázal tento formulár.',
  '%s created an object: %s.' => '%s vytvoril objekt: %s.',
  'Make this builtin form editable?' => 'Nastaviť tento zabudovaný formulár ako upraviteľný?',
  'Duplicate Form' => 'Duplikovať formulár',
  'Drag and drop fields to change their priority for edits. When a user edits an object, they will be shown the first form in this list that they have permission to see.' => 'Presuňte polia myšou na zmenu ich priority pre úpravy. Keď používateľ upravuje objekt, zobrazí sa mu prvý formulár v tomto zozname, ktorý má oprávnenie vidieť.',
  '%s added %d subscriber(s): %s.' => array(
    
    array(
      '%s pridal odberateľa: %3$s.',
      '%s pridal odberateľov: %3$s.',
    ),
  ),
  'Unmark as "Create" Form' => 'Zrušiť označenie ako formulár „vytvárania“',
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
' => 'Pri vytváraní objektov vo webovom rozhraní môžete použiť HTTP parametre na
predvyplnenie polí vo formulári. To vám umožňuje rýchlo vytvoriť odkaz na
formulár s niektorými poľami už vyplnenými predvolenými hodnotami.

Ak chcete predvyplniť formulár, začnite tým, že nájdete URI formulára, ktorý chcete predvyplniť.
Urobíte to tak, že prejdete do príslušnej aplikácie, kliknete na tlačidlo „Vytvoriť“
pre typ objektu, ktorý chcete vytvoriť, a potom skopírujete URI z
panela s adresou vášho prehliadača. Zvyčajne bude vyzerať asi takto:

```
%s
```

`phorge.example.com` však bude doména, kde je nainštalovaná vaša kópia tohto
softvéru, a `application/` bude URI pre aplikáciu.
Niektoré aplikácie majú viacero formulárov na vytváranie objektov alebo URI, ktoré vyzerajú
trochu inak než tento príklad, takže URI nemusí vyzerať presne takto.

Ak chcete predvyplniť formulár, pridajte správne zakódované HTTP parametre do URI.
Mali by ste skončiť s niečím takýmto:

```
%s?title=Platypus&body=Ornithopter
```

Ak má formulár polia `title` a `body` správnych typov, návšteva tohto
odkazu predvyplní tieto polia hodnotami „Platypus“ a „Ornithopter“.

Zvyšok tohto dokumentu ukazuje, ktoré parametre môžete pridať do tohto formulára a
ako ich formátovať.


Podporované polia
-----------------

Tento formulár podporuje tieto polia:',
  'Exception when processing transaction of type "%s": %s' => 'Výnimka pri spracovaní transakcie typu „%s“: %s',
  '%s created this object in space %s.' => '%s vytvoril tento objekt v priestore %s.',
  'Engine: Edit' => 'Nástroj: Úprava',
  '%s changed the interact policy for %s.' => '%s zmenil politiku interakcie pre %s.',
  '%s removed %s watcher(s) for %s: %s.' => array(
    
    array(
      '%s odstránil sledovateľa pre %3$s: %4$s.',
      '%s odstránil sledovateľov pre %3$s: %4$s.',
    ),
  ),
  '%s moved %s from %s to %s on the %s board.' => '%s presunul %s z %s do %s na nástenke %s.',
  'EditEngine "%s" created or loaded an invalid object: object must actually be an object, but is of some other type ("%s").' => 'EditEngine „%s“ vytvoril alebo načítal neplatný objekt: objekt musí byť skutočne objekt, ale je nejakého iného typu („%s“).',
  '%s edited unsubscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil odhlásených odberateľov pre %s, pridal: %4$s; odstránil: %6$s.',
  'Attempting to apply a transaction (of class "%s", with type "%s") which has not been constructed correctly: %s' => 'Pokus o použitie transakcie (triedy „%s“, s typom „%s“), ktorá nebola správne skonštruovaná: %s',
  '%s modified %s attached file(s): %s.' => array(
    
    array(
      '%s upravil pripojený súbor: %3$s.',
      '%s upravil pripojené súbory: %3$s.',
      '%s upravil pripojených súborov: %3$s.',
    ),
  ),
  'Unable to load transactions: %s.' => 'Nedá sa načítať transakcie: %s.',
  'Subtype configuration is invalid: subtype with key "%s" has no name. Subtypes must have a name.' => 'Konfigurácia podtypu je neplatná: podtyp s kľúčom „%s“ nemá názov. Podtypy musia mať názov.',
  'Comment to add, formatted as remarkup.' => 'Komentár na pridanie, formátovaný ako remarkup.',
  'Transaction with key "%s" has invalid type "%s". This type is not recognized. Valid types are: %s.' => 'Transakcia s kľúčom „%s“ má neplatný typ „%s“. Tento typ nie je rozpoznaný. Platné typy sú: %s.',
  'Show Only Create Forms' => 'Zobraziť iba formuláre na vytváranie',
  'You can not interact with this object because it is locked.' => 'S týmto objektom nemôžete interagovať, pretože je uzamknutý.',
  'This object is already in that space.' => 'Tento objekt už je v tomto priestore.',
  'Expected "newTimelineView()" to return an object of class "%s" (in engine "%s").' => 'Očakávalo sa, že „newTimelineView()“ vráti objekt triedy „%s“ (v nástroji „%s“).',
  'This %s already has that join policy.' => 'Tento %s už má túto politiku pripojenia.',
  '%s shifted this object from the %s space to the %s space.' => '%s presunul tento objekt z priestoru %s do priestoru %s.',
  '%s changed the interact policy from "%s" to "%s".' => '%s zmenil politiku interakcie z „%s“ na „%s“.',
  'Create Form' => 'Formulár na vytváranie',
  '%s renamed %s %s from %s to %s.' => '%s premenoval %s %s z %s na %s.',
  '%s moved this task on %s board(s): %s.' => array(
    
    array(
      '%s presunul túto úlohu na nástenke: %3$s.',
      '%s presunul túto úlohu na %s nástenkách: %s.',
    ),
  ),
  'Unable to load query for transaction object "%s"!' => 'Nedá sa načítať dopyt pre transakčný objekt „%s“!',
  'Changed Subscribers' => 'Zmenení odberatelia',
  '%s created %s %s.' => '%s vytvoril %s %s.',
  'Comment for this transaction was not loaded.' => 'Komentár pre túto transakciu nebol načítaný.',
  'Raw Comment' => 'Surový komentár',
  '%s created this object with interact policy "%s".' => '%s vytvoril tento objekt s politikou interakcie „%s“.',
  'Save Create Order' => 'Uložiť poradie vytvárania',
  '%s updated subscribers of %s.' => '%s aktualizoval odberateľov %s.',
  '%s created this object.' => '%s vytvoril tento objekt.',
  'Unknown export format ("%s"). Known formats are: %s.' => 'Neznámy formát exportu („%s“). Známe formáty sú: %s.',
  'You have not chosen any edits to apply.' => 'Nevybrali ste žiadne úpravy na použitie.',
  'No herald adapter specified.' => 'Nebol zadaný žiadny adaptér Herald.',
  'Comment History' => 'História komentára',
  'Unable to load object with PHID "%s"!' => 'Nedá sa načítať objekt s PHID „%s“!',
  'Edit Form' => 'Formulár na úpravu',
  'You can not apply transactions which already have %s!' => 'Nemôžete použiť transakcie, ktoré už majú %s!',
  '%s edited an edge.' => '%s upravil hranu.',
  '%s unsubscribed.' => '%s sa odhlásil z odberu.',
  '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil prispievateľov pre %s, pridal: %4$s; odstránil: %6$s.',
  'Subtype configuration is invalid: two subtypes use the same key ("%s"). Each subtype must have a unique key.' => 'Konfigurácia podtypu je neplatná: dva podtypy používajú rovnaký kľúč („%s“). Každý podtyp musí mať jedinečný kľúč.',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "type" field. Each transaction must have a type field.' => 'Parameter „%s“ musí obsahovať zoznam popisov transakcií, ale položke s kľúčom „%s“ chýba pole „type“. Každá transakcia musí mať pole type.',
  'This transaction is supposed to have an %s set, but it does not!' => 'Táto transakcia by mala mať nastavené %s, ale nemá!',
  'Comment Preview' => 'Náhľad komentára',
  'Untitled Form' => 'Formulár bez názvu',
  '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil odberateľov pre %s, pridal: %4$s; odstránil: %6$s.',
  'Unsupported bulk edit type "%s".' => 'Nepodporovaný typ hromadnej úpravy „%s“.',
  'Validation errors:' => 'Chyby validácie:',
  'This object has no select fields.' => 'Tento objekt nemá žiadne výberové polia.',
  'Mentioned User' => 'Spomenutý používateľ',
  '%s created this form.' => '%s vytvoril tento formulár.',
  'List of PHIDs to set.' => 'Zoznam PHID na nastavenie.',
  'This comment was signed with MFA, so you will be required to provide MFA credentials to make changes.' => 'Tento komentár bol podpísaný pomocou MFA, takže na vykonanie zmien sa od vás bude vyžadovať poskytnutie poverení MFA.',
  'The %s policy of this object would no longer allow you to %s the object.' => 'Politika %s tohto objektu by vám už neumožnila %s objekt.',
  '%s added %s unsubscriber(s): %s.' => array(
    
    array(
      '%s pridal odhláseného odberateľa: %3$s.',
      '%s pridal odhlásených odberateľov: %3$s.',
    ),
  ),
  'EDIT DETAILS' => 'PODROBNOSTI ÚPRAVY',
  '%s edited a custom field (with key "%s").' => '%s upravil vlastné pole (s kľúčom „%s“).',
  'No Create Permission' => 'Žiadne oprávnenie na vytváranie',
  'Edge transactions must have PHIDs or edge specs as values (found value "%s" on transaction of type "%s").' => 'Hranové transakcie musia mať ako hodnoty PHID alebo špecifikácie hrán (nájdená hodnota „%s“ na transakcii typu „%s“).',
  'Remove Action: %s' => 'Odstrániť akciu: %s',
  'Show Only Edit Forms' => 'Zobraziť iba formuláre na úpravu',
  'This is a standard **ApplicationEditor** method which allows you to create and modify objects by applying transactions. For documentation on these endpoints, see **[[ %s | Conduit API: Using Edit Endpoints ]]**.' => 'Toto je štandardná metóda **ApplicationEditor**, ktorá vám umožňuje vytvárať a upravovať objekty použitím transakcií. Dokumentáciu k týmto koncovým bodom nájdete v **[[ %s | Conduit API: Using Edit Endpoints ]]**.',
  'HTTP Parameters: %s' => 'HTTP parametre: %s',
  '"%s" must be a non-empty list of author PHIDs.' => '„%s“ musí byť neprázdny zoznam PHID autorov.',
  'Edit Form: %s' => 'Formulár na úpravu: %s',
  '%s moved this task from %s to %s on the %s board.' => '%s presunul túto úlohu z %s do %s na nástenke %s.',
  'List of PHIDs to remove.' => 'Zoznam PHID na odstránenie.',
  'Create New Form' => 'Vytvoriť nový formulár',
  '%s updated the description for %s %s.' => '%s aktualizoval popis pre %s %s.',
  'This application is not configured with any forms for creating objects that are visible to you and enabled.' => 'Táto aplikácia nemá nakonfigurované žiadne formuláre na vytváranie objektov, ktoré sú pre vás viditeľné a povolené.',
  'Select Fields
-------------

Some fields support selection from a specific set of values. When prefilling
these fields, use the value in the **Value** column to select the appropriate
setting.
' => 'Výberové polia
--------------

Niektoré polia podporujú výber zo špecifickej množiny hodnôt. Pri predvypĺňaní
týchto polí použite hodnotu v stĺpci **Hodnota** na výber príslušného
nastavenia.',
  'Transaction requires handles and it did not load them.' => 'Transakcia vyžaduje ovládače a nenačítala ich.',
  '"%s" must be a list of constraints.' => '„%s“ musí byť zoznam obmedzení.',
  '(Show Details)' => '(Zobraziť podrobnosti)',
  '%s edited this %s.' => '%s upravil tento %s.',
  '%s edited a custom field.' => '%s upravil vlastné pole.',
  'Apply remaining actions?' => 'Použiť zostávajúce akcie?',
  'Two bulk edit groups have the same key ("%s"). Each bulk edit group must have a unique key.' => 'Dve skupiny hromadnej úpravy majú rovnaký kľúč („%s“). Každá skupina hromadnej úpravy musí mať jedinečný kľúč.',
  'Supported values:' => 'Podporované hodnoty:',
  'If the output file already exists, overwrite it instead of raising an error.' => 'Ak výstupný súbor už existuje, prepíšte ho namiesto vyvolania chyby.',
  'List of PHIDs to add.' => 'Zoznam PHID na pridanie.',
  'You have not moved this object to any columns it is not already in.' => 'Nepresunuli ste tento objekt do žiadnych stĺpcov, v ktorých ešte nie je.',
  'Failed to reload object identified by monogram "%s" when querying by PHID.' => 'Nepodarilo sa znovu načítať objekt identifikovaný monogramom „%s“ pri dopytovaní podľa PHID.',
  'Configure Form' => 'Konfigurovať formulár',
  'Edit Locked Object' => 'Upraviť uzamknutý objekt',
  '%s of your actions have no effect:' => array(
    'Jedna z vašich akcií nemá žiadny účinok:',
    'Niektoré z vašich akcií nemajú žiadny účinok:',
  ),
  'You can not post an empty comment.' => 'Nemôžete uverejniť prázdny komentár.',
  'Field "%s" has a bulk edit group key ("%s") with no corresponding bulk edit group.' => 'Pole „%s“ má kľúč skupiny hromadnej úpravy („%s“) bez zodpovedajúcej skupiny hromadnej úpravy.',
  'Exported data to "%s".' => 'Údaje exportované do „%s“.',
  '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s upravil odberateľov, pridal: %3$s; odstránil: %5$s.',
  'Mail extension ("%s") defines a stamp template with the same key ("%s") as another template. Each stamp template must have a unique key.' => 'Rozšírenie e-mailu („%s“) definuje šablónu pečiatky s rovnakým kľúčom („%s“) ako iná šablóna. Každá šablóna pečiatky musí mať jedinečný kľúč.',
  'File attachment transaction must have a map of files to attachment modes, found "%s".' => 'Transakcia pripojenia súboru musí mať mapu súborov na režimy pripojenia, našlo sa „%s“.',
  '%s updated %s attached file(s), added %s: %s; removed %s: %s.' => '%s aktualizoval pripojené súbory, pridal: %4$s; odstránil: %6$s.',
  '%s changed the order in which this form appears in the "Create" menu.' => '%s zmenil poradie, v ktorom sa tento formulár zobrazuje v ponuke „Vytvoriť“.',
  '%s named this form %s.' => '%s pomenoval tento formulár %s.',
  '%s added %s subscriber(s) for %s: %s.' => array(
    
    array(
      '%s pridal odberateľa pre %3$s: %4$s.',
      '%s pridal odberateľov pre %3$s: %4$s.',
    ),
  ),
  '%s mentioned this in %s.' => '%s to spomenul v %s.',
  '%s created this object with join policy "%s".' => '%s vytvoril tento objekt s politikou pripojenia „%s“.',
  'Subtype configuration is invalid: it must be a list of subtype specifications.' => 'Konfigurácia podtypu je neplatná: musí to byť zoznam špecifikácií podtypov.',
  'Transaction Summary' => 'Súhrn transakcie',
  'Use Form' => 'Použiť formulár',
  'The command "!%s" is not a supported mail command. Valid commands for this object are: %s.' => 'Príkaz „!%s“ nie je podporovaný e-mailový príkaz. Platné príkazy pre tento objekt sú: %s.',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.' => 'Parameter „%s“ musí obsahovať zoznam popisov transakcií, ale položka s kľúčom „%s“ nie je slovník.',
  'Edit Comment' => 'Upraviť komentár',
  '%s marked this form as an edit form.' => '%s označil tento formulár ako formulár na úpravu.',
  'Edge transactions must have destination PHIDs as in edge lists (found key "%s" on transaction of type "%s").' => 'Hranové transakcie musia mať cieľové PHID ako v zoznamoch hrán (nájdený kľúč „%s“ na transakcii typu „%s“).',
  'This transaction group requires MFA to apply, but the Editor was not configured with a Cancel URI. This workflow can not perform an MFA check.' => 'Táto skupina transakcií vyžaduje na použitie MFA, ale editor nebol nakonfigurovaný so zrušovacím URI (Cancel URI). Tento pracovný postup nemôže vykonať kontrolu MFA.',
  'EditEngine ("%s") returned builtin engine configurations, but one (with key "%s") is missing a builtin key. Provide a builtin key for each configuration (you can omit it from the first configuration in the list to automatically assign the default key).' => 'EditEngine („%s“) vrátil zabudované konfigurácie nástroja, ale jednej (s kľúčom „%s“) chýba zabudovaný kľúč. Poskytnite zabudovaný kľúč pre každú konfiguráciu (môžete ho vynechať pri prvej konfigurácii v zozname na automatické priradenie predvoleného kľúča).',
  'Monogram "%s" does not identify a valid object.' => 'Monogram „%s“ neidentifikuje platný objekt.',
  'Silent Edit' => 'Tichá úprava',
  '"%s" must be a string (PHID or object monogram).' => '„%s“ musí byť reťazec (PHID alebo monogram objektu).',
  'Reorder Fields' => 'Zmeniť poradie polí',
  'Task has invalid task data.' => 'Úloha má neplatné údaje úlohy.',
  'Add Action...' => 'Pridať akciu…',
  'Detached' => 'Odpojené',
  'This transaction should generate its %s automatically, but has already had one set!' => 'Táto transakcia by mala generovať svoje %s automaticky, ale už má nastavené jedno!',
  '%s removed this form from the "Create" menu.' => '%s odstránil tento formulár z ponuky „Vytvoriť“.',
  'Type a form name...' => 'Zadajte názov formulára…',
  'Custom field transaction \'%s\' does not implement integration for %s.' => 'Transakcia vlastného poľa „%s“ neimplementuje integráciu pre %s.',
  'Create %s' => 'Vytvoriť %s',
  'Specified queries use different engines: query "%s" uses engine "%s", not "%s". All queries must run on the same engine.' => 'Zadané dopyty používajú rôzne nástroje: dopyt „%s“ používa nástroj „%s“, nie „%s“. Všetky dopyty musia bežať na rovnakom nástroji.',
  '%s changed the join policy from "%s" to "%s".' => '%s zmenil politiku pripojenia z „%s“ na „%s“.',
  '%s updated subscribers...' => '%s aktualizoval odberateľov…',
  'Remove Comment' => 'Odstrániť komentár',
  'Transaction (of type "%s") has no effect.' => 'Transakcia (typu „%s“) nemá žiadny účinok.',
  'Make Builtin Editable' => 'Nastaviť zabudovaný ako upraviteľný',
  'Editor ("%s") has no mail stamp template with provided key ("%s").' => 'Editor („%s“) nemá žiadnu šablónu e-mailovej pečiatky s poskytnutým kľúčom („%s“).',
  'You can not shift this object in the selected space, because the space does not exist or you do not have access to it.' => 'Nemôžete presunúť tento objekt vo vybranom priestore, pretože priestor neexistuje alebo k nemu nemáte prístup.',
  'You must choose a space for this object.' => 'Musíte vybrať priestor pre tento objekt.',
  'Edit Forms' => 'Formuláre na úpravu',
  'Mark as Create Form' => 'Označiť ako formulár na vytváranie',
  '%s added %s subscriber(s): %s.' => array(
    
    array(
      '%s pridal odberateľa: %3$s.',
      '%s pridal odberateľov: %3$s.',
    ),
  ),
  'Unmark Form' => 'Zrušiť označenie formulára',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "value" field. Each transaction must have a value field.' => 'Parameter „%s“ musí obsahovať zoznam popisov transakcií, ale položke s kľúčom „%s“ chýba pole „value“. Každá transakcia musí mať pole value.',
  'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").' => 'Podtyp „%s“ nie je platný: kľúče podtypov môžu obsahovať iba malé latinské písmená („a“ až „z“).',
  'Capability not supported.' => 'Schopnosť nie je podporovaná.',
  'Use "--id" to choose a bulk job to make silent.' => 'Použite „--id“ na výber hromadnej úlohy, ktorá sa má stlmiť.',
  'Change Form Subtype' => 'Zmeniť podtyp formulára',
  '%s added %s contributor(s): %s.' => array(
    
    array(
      '%s pridal prispievateľa: %3$s.',
      '%s pridal prispievateľov: %3$s.',
    ),
  ),
  '%s removed %s watcher(s): %s.' => array(
    
    array(
      '%s odstránil sledovateľa: %3$s.',
      '%s odstránil sledovateľov: %3$s.',
    ),
  ),
  '%s created this object with edit policy "%s".' => '%s vytvoril tento objekt s politikou úprav „%s“.',
  'Unable to load bulk job with ID "%s".' => 'Nedá sa načítať hromadná úloha s ID „%s“.',
  '%s added %s watcher(s): %s.' => array(
    
    array(
      '%s pridal sledovateľa: %3$s.',
      '%s pridal sledovateľov: %3$s.',
    ),
  ),
  'Task has no object PHID!' => 'Úloha nemá PHID objektu!',
  'Transaction type \'%s\' is missing an internal apply implementation!' => 'Typu transakcie „%s“ chýba interná implementácia použitia!',
  '%s attached files...' => '%s pripojil súbory…',
  'Old Mode' => 'Starý režim',
  'Flag "--overwrite" has no effect when outputting to stdout.' => 'Príznak „--overwrite“ nemá žiadny účinok pri výstupe do stdout.',
  'You do not have permission to create these objects.' => 'Nemáte oprávnenie vytvárať tieto objekty.',
  'Export the data selected by one or more queries.' => 'Exportovať údaje vybrané jedným alebo viacerými dopytmi.',
  'Specified "%s" does not exist. See the endpoint documentation for valid object types.' => 'Zadané „%s“ neexistuje. Platné typy objektov nájdete v dokumentácii koncového bodu.',
  'Bulk Edit' => 'Hromadná úprava',
  'Write output to a file. If omitted, output will be sent to stdout.' => 'Zapísať výstup do súboru. Ak sa vynechá, výstup sa odošle do stdout.',
  'You will be required to provide multi-factor credentials to comment or make changes.' => 'Na komentovanie alebo vykonávanie zmien sa od vás bude vyžadovať poskytnutie viacfaktorových poverení.',
  '%s shifted %s from the %s space to the %s space.' => '%s presunul %s z priestoru %s do priestoru %s.',
  'EditEngine ("%s") returned builtin engine configurations, but at least two specify the same builtin key ("%s"). Engines must have unique builtin keys.' => 'EditEngine („%s“) vrátil zabudované konfigurácie nástroja, ale aspoň dve určujú rovnaký zabudovaný kľúč („%s“). Nástroje musia mať jedinečné zabudované kľúče.',
  'This comment has been deleted.' => 'Tento komentár bol odstránený.',
  'Add Another Action' => 'Pridať ďalšiu akciu',
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

When using `template`, these fields will be copied:' => 'Šablónové objekty
-----------------

Namiesto zadávania hodnoty každého poľa jednotlivo môžete zadať iný
objekt, ktorý sa použije ako šablóna. Niektoré z počiatočných polí sa skopírujú zo
šablónového objektu.

Zadajte šablónový objekt pomocou parametra `template`. Môžete použiť ID,
PHID alebo monogram (pre objekty, ktoré majú monogramy). Napríklad môžete
použiť URI ako tieto:

```
%s?template=123
%s?template=PHID-WXYZ-abcdef...
%s?template=T123
```

Parameter `template` môžete kombinovať s HTTP parametrami: šablónový
objekt sa skopíruje najprv, potom sa načítajú akékoľvek HTTP parametre.

Pri použití `template` sa skopírujú tieto polia:',
  'Name is required.' => 'Vyžaduje sa názov.',
  'Hide Create Forms' => 'Skryť formuláre na vytváranie',
  'Configure a bulk job to execute silently.' => 'Nakonfigurovať hromadnú úlohu na tiché vykonanie.',
  'Custom field transaction has no \'%s\'!' => 'Transakcia vlastného poľa nemá „%s“!',
  '%s signed these changes with MFA.' => '%s podpísal tieto zmeny pomocou MFA.',
  'SearchEngine class ("%s") does not support data export.' => 'Trieda SearchEngine („%s“) nepodporuje export údajov.',
  '%s unmarked this form as an edit form.' => '%s zrušil označenie tohto formulára ako formulára na úpravu.',
  'Multiple search engines match "%s": %s.' => 'Viacero vyhľadávacích nástrojov zodpovedá „%s“: %s.',
  'Mark as "Create" Form' => 'Označiť ako formulár „vytvárania“',
  'Failed to base64_decode() value for key "%s".' => 'Nepodarilo sa base64_decode() hodnotu pre kľúč „%s“.',
  'Create another form with the same settings as this one?' => 'Vytvoriť ďalší formulár s rovnakými nastaveniami ako tento?',
  'Change Field Order' => 'Zmeniť poradie polí',
  'Forms must have a name.' => 'Formuláre musia mať názov.',
  '%s changed the default values for field %s.' => '%s zmenil predvolené hodnoty poľa %s.',
  'This EditField does not provide a Bulk EditType with key "%s".' => 'Tento EditField neposkytuje hromadný EditType s kľúčom „%s“.',
  'EditEngine ("%s") returned builtin engine configurations, but none are marked as default and the first configuration has a different builtin key already. Mark a builtin as default or omit the key from the first configuration' => 'EditEngine („%s“) vrátil zabudované konfigurácie nástroja, ale žiadna nie je označená ako predvolená a prvá konfigurácia už má iný zabudovaný kľúč. Označte zabudovaný ako predvolený alebo vynechajte kľúč z prvej konfigurácie',
  '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.' => array(
    
    array(
      
      array(
        '%s označil vnútorný komentár ako hotové a vnútorný komentár ako nehotové.',
        '%s označil vnútorný komentár ako hotové a %3$s vnútorné komentáre ako nehotové.',
        '%s označil vnútorný komentár ako hotové a %3$s vnútorných komentárov ako nehotové.',
      ),
      
      array(
        '%s označil %s vnútorné komentáre ako hotové a vnútorný komentár ako nehotové.',
        '%s označil %s vnútorné komentáre ako hotové a %s vnútorné komentáre ako nehotové.',
        '%s označil %s vnútorné komentáre ako hotové a %s vnútorných komentárov ako nehotové.',
      ),
      
      array(
        '%s označil %s vnútorných komentárov ako hotové a vnútorný komentár ako nehotové.',
        '%s označil %s vnútorných komentárov ako hotové a %s vnútorné komentáre ako nehotové.',
        '%s označil %s vnútorných komentárov ako hotové a %s vnútorných komentárov ako nehotové.',
      ),
    ),
  ),
  '!%s (or %s)' => '!%s (alebo %s)',
  '%s reordered the fields in this form.' => '%s zmenil poradie polí v tomto formulári.',
  'This is a preview of the current form configuration.' => 'Toto je náhľad aktuálnej konfigurácie formulára.',
  '%s changed the edit policy for %s.' => '%s zmenil politiku úprav pre %s.',
  'All Forms' => 'Všetky formuláre',
  'This %s already has that view policy.' => 'Tento %s už má túto politiku zobrazenia.',
  '%s subscribed.' => '%s sa prihlásil na odber.',
  'Transactions are visible to users that can see the object which was acted upon. Some transactions - in particular, comments - are editable by the transaction author.' => 'Transakcie sú viditeľné pre používateľov, ktorí vidia objekt, na ktorom sa konalo. Niektoré transakcie – najmä komentáre – môže upravovať autor transakcie.',
  'Subtype configuration is invalid: subtype with key "%s" specifies that it can mutate into subtype "%s", but that is not a valid subtype.' => 'Konfigurácia podtypu je neplatná: podtyp s kľúčom „%s“ určuje, že sa môže zmeniť na podtyp „%s“, ale to nie je platný podtyp.',
  'Subtype "%s" is not a valid subtype.' => 'Podtyp „%s“ nie je platný podtyp.',
  'Query "%s" is unknown. To run a builtin query like "all" or "active", also specify the search engine with "--class".' => 'Dopyt „%s“ je neznámy. Ak chcete spustiť zabudovaný dopyt ako „all“ alebo „active“, zadajte aj vyhľadávací nástroj pomocou „--class“.',
  'The source object has a comment which mentions the destination object.' => 'Zdrojový objekt má komentár, ktorý spomína cieľový objekt.',
  '%s removed %s unsubscriber(s) for %s: %s.' => array(
    
    array(
      '%s odstránil odhláseného odberateľa pre %3$s: %4$s.',
      '%s odstránil odhlásených odberateľov pre %3$s: %4$s.',
    ),
  ),
  'For full details, run `/bin/mail show-inbound --id %d`' => 'Úplné podrobnosti získate spustením `/bin/mail show-inbound --id %d`',
  'This object is locked. Edit it anyway?' => 'Tento objekt je uzamknutý. Upraviť ho aj tak?',
  '%s Action(s) With No Effect' => array(
    'Akcia bez účinku',
    'Akcie bez účinku',
  ),
  'Configured job "%s" to run silently.' => 'Úloha „%s“ nakonfigurovaná na tiché spustenie.',
  'View Form Configurations' => 'Zobraziť konfigurácie formulárov',
  '%s removed %s attached file(s): %s.' => array(
    
    array(
      '%s odstránil pripojený súbor: %3$s.',
      '%s odstránil pripojené súbory: %3$s.',
      '%s odstránil pripojených súborov: %3$s.',
    ),
  ),
  '%s ("%s")' => '%s („%s“)',
  'Comments are visible to users who can see the object which was commented on. Comments can be edited by their authors.' => 'Komentáre sú viditeľné pre používateľov, ktorí vidia objekt, ku ktorému bol pridaný komentár. Komentáre môžu upravovať ich autori.',
  'Custom field transaction has invalid \'%s\'; field \'%s\' is disabled or does not exist.' => 'Transakcia vlastného poľa má neplatné „%s“; pole „%s“ je zakázané alebo neexistuje.',
  'This object has no fields with aliases.' => 'Tento objekt nemá žiadne polia s aliasmi.',
  'Do you want to post your comment anyway?' => 'Chcete svoj komentár uverejniť aj tak?',
  'All Edit Engines' => 'Všetky editovacie nástroje',
  '%s Action(s) Have No Effect' => array(
    'Akcia nemá žiadny účinok',
    'Akcie nemajú žiadny účinok',
  ),
  'This EditField does not provide a Conduit EditType with key "%s".' => 'Tento EditField neposkytuje Conduit EditType s kľúčom „%s“.',
  'None of the fields on this object support templating.' => 'Žiadne z polí na tomto objekte nepodporujú šablónovanie.',
  'Mentioned Here' => 'Spomenuté tu',
  'Edge transaction includes edge of type \'%s\', but transaction is of type \'%s\'. Each edge transaction must alter edges of only one type.' => 'Hranová transakcia zahŕňa hranu typu „%s“, ale transakcia je typu „%s“. Každá hranová transakcia musí meniť hrany iba jedného typu.',
  'This comment was removed by %s.' => 'Tento komentár odstránil %s.',
  'Apply Remaining Actions' => 'Použiť zostávajúce akcie',
  '%s edited watcher(s), added %s: %s; removed %s: %s.' => '%s upravil sledovateľov, pridal: %3$s; odstránil: %5$s.',
  '%s edited unsubscriber(s), added %s: %s; removed %s: %s.' => '%s upravil odhlásených odberateľov, pridal: %3$s; odstránil: %5$s.',
  '%s changed the join policy for %s.' => '%s zmenil politiku pripojenia pre %s.',
  'Object Locked' => 'Objekt uzamknutý',
  'Edit Form Configuration' => 'Konfigurácia formulára na úpravu',
  'Query "%s" is not a recognized query for class "%s".' => 'Dopyt „%s“ nie je rozpoznaný dopyt pre triedu „%s“.',
  'You can not remove this comment because the conversation is locked.' => 'Tento komentár nemôžete odstrániť, pretože konverzácia je uzamknutá.',
  '%s updated a token.' => '%s aktualizoval žetón.',
  'Form Preview' => 'Náhľad formulára',
  '%s changed the subtype of this form from %s to %s.' => '%s zmenil podtyp tohto formulára z %s na %s.',
  'If you start work now, this edit will send mail and publish notifications normally.' => 'Ak teraz začnete pracovať, táto úprava odošle e-mail a bude publikovať upozornenia normálne.',
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
' => 'Keď je objekt (napríklad úloha) upravený, príslušná aplikácia vytvorí
„transakciu“ a použije ju. Tento zoznam transakcií na každom objekte je
základom v podstate všetkých úprav a komentárov. Prezretie záznamu transakcií
vám umožňuje vidieť, kto upravil objekt, kedy a ako jeho úprava zmenila
veci.

Jedným bežným dôvodom na volanie tejto metódy je, že implementujete webhook a
práve ste dostali upozornenie, že sa objekt zmenil. Podrobnejšiu diskusiu o tomto
prípade použitia nájdete v dokumentácii Webhooks.

Jeden typ objektu naraz
=======================

Táto metóda API dokáže dopytovať transakcie pre akýkoľvek typ objektu, ktorý podporuje
transakcie, ale na jedno volanie je možné dopytovať iba jeden typ objektu. Napríklad:
môžete získať transakcie ovplyvňujúce úlohy alebo môžete získať transakcie
ovplyvňujúce revízie, ale jedno volanie nemôže získať oboje.

Toto je technické obmedzenie vyplývajúce z toho, že (okrem iných dôvodov) neexistuje
žiadne globálne usporiadanie transakcií.

Ak chcete nájsť transakcie pre konkrétny objekt (napríklad konkrétnu úlohu), odovzdajte
PHID objektu alebo vhodný identifikátor objektu (napríklad `T123`) ako
`objectIdentifier`.

Ak chcete nájsť všetky transakcie pre typ objektu, odovzdajte konštantu typu objektu ako
`objectType`. Napríklad správny identifikátor pre úlohy je `TASK`. (Neznámu
konštantu typu môžete rýchlo nájsť pohľadom na PHID objektu
daného typu.)

Všetky podporované hodnoty pre `objectType`:

%s

Obmedzenia
==========

Podporované sú tieto obmedzenia:

  - `phids` //Voliteľné list<phid>.// Nájde konkrétne transakcie podľa PHID. Toto
    je najužitočnejšie, ak reagujete na upozornenie webhooku
    a chcete preskúmať iba súvisiace udalosti.
  - `authorPHIDs` //Voliteľné list<phid>.// Nájde transakcie s konkrétnymi
    autormi.

Formát transakcie
=================

Každá transakcia má vlastné údaje opisujúce, čo transakcia urobila.
Formát sa líši od transakcie k transakcii. Najjednoduchší spôsob, ako presne zistiť,
ako konkrétna transakcia vyzerá, je vykonať súvisiaci druh
úpravy na testovacom objekte a potom tento objekt dopytovať.

Nie všetky transakcie majú údaje: predvolene majú transakcie „type“ `null`
a žiadne ďalšie údaje. Toto API neodhaľuje surové údaje transakcií, pretože
niektoré z nich sú interné, zvláštne pomenované, s preklepmi, mätúce, neužitočné alebo
by mohli spôsobiť bezpečnostné alebo politické problémy pri priamom odhalení.

Nové transakcie sú odhalené (so správne napísanými, zrozumiteľnými typmi a
užitočnými, rozumnými poľami), keď sa dozvieme o prípadoch ich použitia.',
  'If you start work now, this edit will be applied silently: it will not send mail or publish notifications.' => 'Ak teraz začnete pracovať, táto úprava sa použije potichu: neodošle e-mail ani nebude publikovať upozornenia.',
  '%s edited contributor(s), added %s: %s; removed %s: %s.' => '%s upravil prispievateľov, pridal: %3$s; odstránil: %5$s.',
  'Transaction type \'%s\' is missing an external apply implementation!' => 'Typu transakcie „%s“ chýba externá implementácia použitia!',
  'The subtype "%s" is not a valid subtype.' => 'Podtyp „%s“ nie je platný podtyp.',
  '%s updated %s attached file(s), added %s: %s; removed %s: %s; modified %s: %s.' => '%s aktualizoval pripojené súbory, pridal: %4$s; odstránil: %6$s; upravil: %8$s.',
  'Form %d' => 'Formulár %d',
  'Configure Forms for Configuring Forms' => 'Konfigurovať formuláre na konfiguráciu formulárov',
  '%s added %s contributor(s) for %s: %s.' => array(
    
    array(
      '%s pridal prispievateľa pre %3$s: %4$s.',
      '%s pridal prispievateľov pre %3$s: %4$s.',
    ),
  ),
  '%s changed the edit policy from "%s" to "%s".' => '%s zmenil politiku úprav z „%s“ na „%s“.',
  'The source object is mentioned in a comment on the destination object.' => 'Zdrojový objekt je spomenutý v komentári na cieľovom objekte.',
  'You can not shift this object into the selected space, because the space is archived. Objects can not be created inside (or moved into) archived spaces.' => 'Nemôžete presunúť tento objekt do vybraného priestoru, pretože priestor je archivovaný. Objekty nie je možné vytvárať vnútri archivovaných priestorov (ani do nich presúvať).',
  'Capability not supported!' => 'Schopnosť nie je podporovaná!',
  '%s created this object with visibility "%s".' => '%s vytvoril tento objekt s viditeľnosťou „%s“.',
  'Override Lock' => 'Prepísať uzamknutie',
  'You can not apply transactions which already have commentVersions!' => 'Nemôžete použiť transakcie, ktoré už majú commentVersions!',
  'Object Monogram' => 'Monogram objektu',
  'Subtype "%s" is not valid: subtype keys must be no longer than 64 bytes.' => 'Podtyp „%s“ nie je platný: kľúče podtypov nesmú byť dlhšie ako 64 bajtov.',
  'Will Copy' => 'Skopíruje sa',
  '%s removed %s subscriber(s): %s.' => array(
    
    array(
      '%s odstránil odberateľa: %3$s.',
      '%s odstránil odberateľov: %3$s.',
    ),
  ),
  'Transaction comment must not yet have a PHID!' => 'Komentár transakcie ešte nesmie mať PHID!',
  '%s changed the visibility from "%s" to "%s".' => '%s zmenil viditeľnosť z „%s“ na „%s“.',
  'Unable to load configuration for this EditEngine ("%s").' => 'Nedá sa načítať konfigurácia pre tento EditEngine („%s“).',
  'Invalid \'%s\' value for PHID transaction. Value should contain only keys \'%s\' (add PHIDs), \'%s\' (remove PHIDs) and \'%s\' (set PHIDS).' => 'Neplatná hodnota „%s“ pre transakciu PHID. Hodnota by mala obsahovať iba kľúče „%s“ (pridať PHID), „%s“ (odstrániť PHID) a „%s“ (nastaviť PHID).',
);
  }

}
