<?php

final class PhabricatorManiphestSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Create Task' => 'Vytvoriť úlohu',
  'Triage' => 'Triage',
  'Define task subtypes.' => 'Definovať podtypy úloh.',
  '%s removed %s as the assignee of this task.' => '%s odstránil %s ako riešiteľa tejto úlohy.',
  'Priority of the task.' => 'Priorita úlohy.',
  'Weigh In' => 'Vyjadriť sa',
  'Task Fields' => 'Polia úlohy',
  'Assignee' => 'Riešiteľ',
  'Open Parents' => 'Otvorené nadradené úlohy',
  'Update an existing Maniphest task.' => 'Aktualizovať existujúcu úlohu Maniphest.',
  'List of columns to move the task to.' => 'Zoznam stĺpcov, do ktorých sa má úloha presunúť.',
  'A task\'s subscribers change.' => 'Zmena odberateľov úlohy.',
  'Change Points' => 'Zmeniť body',
  'Returns information about the possible statuses for Maniphest tasks.' => 'Vráti informácie o možných stavoch úloh Maniphest.',
  '%s closed %s as %s.' => '%s zatvoril %s ako %s.',
  'This task has been locked.' => 'Táto úloha bola uzamknutá.',
  '%s added %s commit(s) to %s: %s.' => array(
    
    array(
      '%s pridal commit do %3$s: %4$s.',
      '%s pridal commity do %3$s: %4$s.',
    ),
  ),
  'Edits Locked' => 'Úpravy uzamknuté',
  '%s claimed %s.' => '%s si privlastnil %s.',
  'TASK DETAIL' => 'PODROBNOSTI ÚLOHY',
  '%s closed this task as a duplicate by committing %s.' => '%s zatvoril túto úlohu ako duplikát commitnutím %s.',
  'Search for tasks closed before a certain date.' => 'Vyhľadať úlohy zatvorené pred určitým dátumom.',
  'Search Subtasks' => 'Vyhľadať podúlohy',
  'Merged' => 'Zlúčené',
  'Closed after %s' => 'Zatvorené po %s',
  'Changed Task Priority' => 'Zmenená priorita úlohy',
  'Retrieve Maniphest task transactions.' => 'Získať transakcie úloh Maniphest.',
  'New task name.' => 'Nový názov úlohy.',
  '%s changed the point value for this task from %s to %s.' => '%s zmenil hodnotu bodov tejto úlohy z %s na %s.',
  'Changed task priority to "%s".' => 'Zmenil prioritu úlohy na „%s“.',
  'Tasks must have a title.' => 'Úlohy musia mať názov.',
  'Retrieve information about possible Maniphest task status values.' => 'Získať informácie o možných hodnotách stavu úloh Maniphest.',
  'Oldest (Pri)' => 'Najstaršie (pri)',
  'Unblock' => 'Odblokovať',
  'Select and reorder task fields.' => 'Vybrať a zmeniť poradie polí úlohy.',
  'Description Preview' => 'Náhľad popisu',
  '%s changed the subtype of %s from "%s" to "%s".' => '%s zmenil podtyp %s z „%s“ na „%s“.',
  'Configuration defines no task status with special attribute "%s", but you must specify a status which fills this special role.' => 'Konfigurácia nedefinuje žiadny stav úlohy so špeciálnym atribútom „%s“, ale musíte zadať stav, ktorý plní túto špeciálnu úlohu.',
  'Oldest open task.' => 'Najstaršia otvorená úloha.',
  'Duplicates Merged Here' => 'Duplikáty zlúčené sem',
  'Change the parents of this task.' => 'Zmeniť nadradené úlohy tejto úlohy.',
  'You can only select a parent task when creating a transaction for the first time.' => 'Nadradenú úlohu môžete vybrať iba pri prvom vytváraní transakcie.',
  'Subtasks' => 'Podúlohy',
  'Update has no effect.' => 'Aktualizácia nemá žiadny účinok.',
  '○ %s' => '○ %s',
  'Maniphest Reports' => 'Správy Maniphest',
  'This task is closed as a duplicate. Only comment if you think that this task is not a duplicate.' => 'Táto úloha je zatvorená ako duplikát. Komentujte iba vtedy, ak si myslíte, že táto úloha nie je duplikát.',
  'Search for tasks which have specific subtasks.' => 'Vyhľadať úlohy, ktoré majú konkrétne podúlohy.',
  'Update the task description.' => 'Aktualizovať popis úlohy.',
  'From Email' => 'Z e-mailu',
  'List of related commit PHIDs.' => 'Zoznam PHID súvisiacich commitov.',
  'Show Only Tasks With Open Parents' => 'Zobraziť iba úlohy s otvorenými nadradenými úlohami',
  'Needs Triage' => 'Potrebuje triage',
  'Minimal Valid Config' => 'Minimálna platná konfigurácia',
  'The source task is associated with the destination commit.' => 'Zdrojová úloha je priradená k cieľovému commitu.',
  'Story Points' => 'Story Points',
  'Closed, Spite' => 'Zatvorené, napriek',
  '%s changed file(s), attached %s: %s; detached %s: %s.' => '%s zmenil súbory, pripojil: %3$s; odpojil: %5$s.',
  '%s closed this task as a duplicate of %s.' => '%s zatvoril túto úlohu ako duplikát %s.',
  'Task IDs must be integer numbers.' => 'ID úloh musia byť celé čísla.',
  'Set Sail for Adventure' => 'Vyplávajte za dobrodružstvom',
  'Allows you to edit, add, or remove the task statuses available in Maniphest,
like "Open", "Resolved" and "Invalid". The configuration should contain a map
of status constants to status specifications (see defaults below for examples).

The constant for each status should be 1-12 characters long and  contain only
lowercase letters and digits. Valid examples are "open", "closed", and
"invalid". Users will not normally see these values.

The keys you can provide in a specification are:

  - `name` //Required string.// Name of the status, like "Invalid".
  - `name.full` //Optional string.// Longer name, like "Closed, Invalid". This
    appears on the task detail view in the header.
  - `name.action` //Optional string.// Action name for email subjects, like
    "Marked Invalid".
  - `closed` //Optional bool.// Statuses are either "open" or "closed".
    Specifying `true` here will mark the status as closed (like "Resolved" or
    "Invalid"). By default, statuses are open.
  - `special` //Optional string.// Mark this status as special. The special
    statuses are:
    - `default` This is the default status for newly created tasks. You must
      designate one status as default, and it must be an open status.
    - `closed` This is the default status for closed tasks (for example, tasks
      closed via the "!close" action in email or via the quick close button in
      Maniphest). You must designate one status as the default closed status,
      and it must be a closed status.
    - `duplicate` This is the status used when tasks are merged into one
      another as duplicates. You must designate one status for duplicates,
      and it must be a closed status.
  - `transaction.icon` //Optional string.// Allows you to choose a different
    icon to use for this status when showing status changes in the transaction
    log. Please see UIExamples, Icons and Images for a list.
  - `transaction.color` //Optional string.// Allows you to choose a different
    color to use for this status when showing status changes in the transaction
    log.
  - `silly` //Optional bool.// Marks this status as silly, and thus wholly
    inappropriate for use by serious businesses.
  - `prefixes` //Optional list<string>.// Allows you to specify a list of
    text prefixes which will trigger a task transition into this status
    when mentioned in a commit message. For example, providing "closes" here
    will allow users to move tasks to this status by writing `Closes T123` in
    commit messages.
  - `suffixes` //Optional list<string>.// Allows you to specify a list of
    text suffixes which will trigger a task transition into this status
    when mentioned in a commit message, after a valid prefix. For example,
    providing "as invalid" here will allow users to move tasks
    to this status by writing `Closes T123 as invalid`, even if another status
    is selected by the "Closes" prefix.
  - `keywords` //Optional list<string>.// Allows you to specify a list
    of keywords which can be used with `!status` commands in email to select
    this status.
  - `disabled` //Optional bool.// Marks this status as no longer in use so
    tasks can not be created or edited to have this status. Existing tasks with
    this status will not be affected, but you can batch edit them or let them
    die out on their own.
  - `claim` //Optional bool.// By default, closing an unassigned task claims
    it. You can set this to `false` to disable this behavior for a particular
    status.
  - `locked` //Optional string.// Lock tasks in this status. Specify "comments"
    to lock comments (users who can edit the task may override this lock).
    Specify "edits" to prevent anyone except the task owner from making edits.
  - `mfa` //Optional bool.// Require all edits to this task to be signed with
    multi-factor authentication.

Statuses will appear in the UI in the order specified. Note the status marked
`special` as `duplicate` is not settable directly and will not appear in UI
elements, and that any status marked `silly` does not appear if the software
is configured with `phabricator.serious-business` set to true.

Examining the default configuration and examples below will probably be helpful
in understanding these options.
' => 'Umožňuje vám upravovať, pridávať alebo odstraňovať stavy úloh dostupné v Maniphest,
ako „Open“, „Resolved“ a „Invalid“. Konfigurácia by mala obsahovať mapu
konštánt stavov na špecifikácie stavov (príklady nájdete v predvolených hodnotách nižšie).

Konštanta pre každý stav by mala byť dlhá 1 – 12 znakov a  obsahovať iba
malé písmená a číslice. Platné príklady sú „open“, „closed“ a
„invalid“. Používatelia tieto hodnoty bežne neuvidia.

Kľúče, ktoré môžete poskytnúť v špecifikácii, sú:

  - `name` //Povinné string.// Názov stavu, ako „Invalid“.
  - `name.full` //Voliteľné string.// Dlhší názov, ako „Closed, Invalid“. Tento
    sa zobrazuje v hlavičke zobrazenia podrobností úlohy.
  - `name.action` //Voliteľné string.// Názov akcie pre predmety e-mailov, ako
    „Marked Invalid“.
  - `closed` //Voliteľné bool.// Stavy sú buď „open“, alebo „closed“.
    Zadanie `true` tu označí stav ako zatvorený (ako „Resolved“ alebo
    „Invalid“). Predvolene sú stavy otvorené.
  - `special` //Voliteľné string.// Označte tento stav ako špeciálny. Špeciálne
    stavy sú:
    - `default` Toto je predvolený stav pre novovytvorené úlohy. Musíte
      určiť jeden stav ako predvolený a musí to byť otvorený stav.
    - `closed` Toto je predvolený stav pre zatvorené úlohy (napríklad úlohy
      zatvorené cez akciu „!close“ v e-maile alebo cez tlačidlo rýchleho zatvorenia v
      Maniphest). Musíte určiť jeden stav ako predvolený zatvorený stav
      a musí to byť zatvorený stav.
    - `duplicate` Toto je stav používaný, keď sa úlohy zlúčia jedna do
      druhej ako duplikáty. Musíte určiť jeden stav pre duplikáty
      a musí to byť zatvorený stav.
  - `transaction.icon` //Voliteľné string.// Umožňuje vám vybrať inú
    ikonu na použitie pre tento stav pri zobrazovaní zmien stavu v zázname
    transakcií. Zoznam nájdete v UIExamples, Icons and Images.
  - `transaction.color` //Voliteľné string.// Umožňuje vám vybrať inú
    farbu na použitie pre tento stav pri zobrazovaní zmien stavu v zázname
    transakcií.
  - `silly` //Voliteľné bool.// Označí tento stav ako hravý, a teda úplne
    nevhodný na použitie serióznymi podnikmi.
  - `prefixes` //Voliteľné list<string>.// Umožňuje vám zadať zoznam
    textových predpôn, ktoré spustia prechod úlohy do tohto stavu,
    keď sú spomenuté v správe commitu. Napríklad zadaním „closes“ tu
    umožníte používateľom presúvať úlohy do tohto stavu napísaním `Closes T123` v
    správach commitov.
  - `suffixes` //Voliteľné list<string>.// Umožňuje vám zadať zoznam
    textových prípon, ktoré spustia prechod úlohy do tohto stavu,
    keď sú spomenuté v správe commitu, po platnej predpone. Napríklad
    zadaním „as invalid“ tu umožníte používateľom presúvať úlohy
    do tohto stavu napísaním `Closes T123 as invalid`, aj keď je predponou „Closes“
    vybraný iný stav.
  - `keywords` //Voliteľné list<string>.// Umožňuje vám zadať zoznam
    kľúčových slov, ktoré je možné použiť s príkazmi `!status` v e-maile na výber
    tohto stavu.
  - `disabled` //Voliteľné bool.// Označí tento stav ako už nepoužívaný, takže
    úlohy nie je možné vytvoriť ani upraviť tak, aby mali tento stav. Existujúce úlohy s
    týmto stavom nebudú ovplyvnené, ale môžete ich hromadne upraviť alebo ich nechať
    prirodzene vymrieť.
  - `claim` //Voliteľné bool.// Predvolene zatvorenie nepriradenej úlohy si ju
    privlastní. Môžete to nastaviť na `false` na zakázanie tohto správania pre konkrétny
    stav.
  - `locked` //Voliteľné string.// Uzamkne úlohy v tomto stave. Zadajte „comments“
    na uzamknutie komentárov (používatelia, ktorí môžu úlohu upravovať, môžu toto uzamknutie prepísať).
    Zadajte „edits“ na zabránenie komukoľvek okrem vlastníka úlohy vo vykonávaní úprav.
  - `mfa` //Voliteľné bool.// Vyžadovať, aby všetky úpravy tejto úlohy boli podpísané
    viacfaktorovým overením.

Stavy sa zobrazia v používateľskom rozhraní v zadanom poradí. Všimnite si, že stav označený
`special` ako `duplicate` nie je možné nastaviť priamo a nezobrazí sa v prvkoch
používateľského rozhrania, a že akýkoľvek stav označený `silly` sa nezobrazí, ak je softvér
nakonfigurovaný s `phabricator.serious-business` nastaveným na true.

Preskúmanie predvolenej konfigurácie a príkladov nižšie vám pravdepodobne pomôže
pochopiť tieto možnosti.',
  'Recently Closed' => 'Nedávno zatvorené',
  'One of a task\'s subtasks changes status.' => 'Jedna z podúloh úlohy zmení stav.',
  'Assigned Task' => 'Priradená úloha',
  'File ("%s", with MIME type "%s") is not a viewable image file.' => 'Súbor („%s“, s typom MIME „%s“) nie je zobraziteľný obrázkový súbor.',
  '%s updated the cover image for %s.' => '%s aktualizoval titulný obrázok pre %s.',
  'Transaction specifies both "beforePHID" and "beforePHIDs". Specify only "beforePHIDs".' => 'Transakcia určuje „beforePHID“ aj „beforePHIDs“. Zadajte iba „beforePHIDs“.',
  '%s updated the task description for %s.' => '%s aktualizoval popis úlohy pre %s.',
  'Activates a points field on tasks. You can use points for estimation or
planning. If configured, points will appear on workboards.

To activate points, set this value to a map with these keys:

  - `enabled` //Optional bool.// Use `true` to enable points, or
    `false` to disable them.
  - `label` //Optional string.// Label for points, like "Story Points" or
    "Estimated Hours". If omitted, points will be called "Points".
  - `action` //Optional string.// Label for the action which changes points
    in Maniphest, like "Change Estimate". If omitted, the action will
    be called "Change Points".

See the example below for a starting point.' => 'Aktivuje pole bodov na úlohách. Body môžete použiť na odhadovanie alebo
plánovanie. Ak je nakonfigurované, body sa zobrazia na pracovných nástenkách.

Na aktiváciu bodov nastavte túto hodnotu na mapu s týmito kľúčmi:

  - `enabled` //Voliteľné bool.// Použite `true` na povolenie bodov alebo
    `false` na ich zakázanie.
  - `label` //Voliteľné string.// Menovka pre body, ako „Story Points“ alebo
    „Estimated Hours“. Ak sa vynechá, body sa budú nazývať „Points“.
  - `action` //Voliteľné string.// Menovka pre akciu, ktorá mení body
    v Maniphest, ako „Change Estimate“. Ak sa vynechá, akcia sa
    bude nazývať „Change Points“.

Východiskový bod nájdete v príklade nižšie.',
  'Status set to invalid value.' => 'Stav nastavený na neplatnú hodnotu.',
  'Status "%s" is marked as default, but it is a closed status. The default status should be an open status.' => 'Stav „%s“ je označený ako predvolený, ale je to zatvorený stav. Predvolený stav by mal byť otvorený stav.',
  '[Maniphest]' => '[Maniphest]',
  '%s lowered the priority of %s from %s to %s.' => '%s znížil prioritu %s z %s na %s.',
  'Search for tasks with given statuses.' => 'Vyhľadať úlohy so zadanými stavmi.',
  'Task Has Revision' => 'Úloha má revíziu',
  'Unbreak Now!' => 'Ihneď opraviť!',
  'Change Story Points' => 'Zmeniť story points',
  'Configure point values for tasks.' => 'Nakonfigurovať hodnoty bodov pre úlohy.',
  'This task is locked. Edit it anyway?' => 'Táto úloha je uzamknutá. Upraviť ju aj tak?',
  'Create a task in a workboard column.' => 'Vytvoriť úlohu v stĺpci pracovnej nástenky.',
  'Search for tasks with given priorities.' => 'Vyhľadať úlohy so zadanými prioritami.',
  'Configure the cutoff for the "Recently Closed" column.' => 'Nakonfigurovať hranicu pre stĺpec „Nedávno zatvorené“.',
  'Original task author.' => 'Pôvodný autor úlohy.',
  'Information about task priority.' => 'Informácie o priorite úlohy.',
  '%s detached %s file(s): %s.' => array(
    
    array(
      '%s odpojil súbor: %3$s.',
      '%s odpojil súbory: %3$s.',
      '%s odpojil súborov: %3$s.',
    ),
  ),
  'Valid setting' => 'Platné nastavenie',
  'Open Subtasks' => 'Otvorené podúlohy',
  'Close a task. This changes the task status to the default closed status. For a more powerful (but less concise) way to change task statuses, see `%s`.' => 'Zatvoriť úlohu. Toto zmení stav úlohy na predvolený zatvorený stav. Výkonnejší (ale menej stručný) spôsob zmeny stavov úloh nájdete v `%s`.',
  '%s removed %s parent task(s): %s.' => array(
    
    array(
      '%s odstránil nadradenú úlohu: %3$s.',
      '%s odstránil nadradené úlohy: %3$s.',
      '%s odstránil nadradených úloh: %3$s.',
    ),
  ),
  '%s added %s subtask(s): %s.' => array(
    
    array(
      '%s pridal podúlohu: %3$s.',
      '%s pridal podúlohy: %3$s.',
      '%s pridal podúloh: %3$s.',
    ),
  ),
  'Assign a task to a specific user.' => 'Prideliť úlohu konkrétnemu používateľovi.',
  'Date Closed (Latest First)' => 'Dátum zatvorenia (najnovšie prvé)',
  'Merged In' => 'Zlúčené do',
  '%s edited %s commit(s), added %s: %s; removed %s: %s.' => '%s upravil commity, pridal: %4$s; odstránil: %6$s.',
  'Date Closed' => 'Dátum zatvorenia',
  'Task title cannot exceed %d characters.' => 'Názov úlohy nemôže presiahnuť %d znakov.',
  'Edit Related Tasks...' => 'Upraviť súvisiace úlohy…',
  'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here. Use %s to show more of the graph.' => 'Táto úloha je prepojená s viac ako %s ďalšími úlohami. Tu sa zobrazujú iba priame nadradené úlohy a podúlohy. Použite %s na zobrazenie väčšej časti grafu.',
  '%s updated the cover image to %s.' => '%s aktualizoval titulný obrázok na %s.',
  '%s created subtask %s.' => '%s vytvoril podúlohu %s.',
  'Bulk Edit Selected »' => 'Hromadne upraviť vybrané »',
  'No tasks found.' => 'Nenašli sa žiadne úlohy.',
  'Acting user\'s projects' => 'Projekty konajúceho používateľa',
  'Can Bulk Edit Tasks' => 'Môže hromadne upravovať úlohy',
  'Estimated number of hours this will take.' => 'Odhadovaný počet hodín, ktoré to zaberie.',
  '(Up For Grabs)' => '(Voľná na prevzatie)',
  'Related commits.' => 'Súvisiace commity.',
  'Assign task to: %s.' => 'Prideliť úlohu používateľovi: %s.',
  'Status "%s" is marked as the default status for closing tasks, but is not a closed status. It should be a closed status.' => 'Stav „%s“ je označený ako predvolený stav na zatváranie úloh, ale nie je to zatvorený stav. Mal by to byť zatvorený stav.',
  'Value for key "%s" should be a dictionary.' => 'Hodnota pre kľúč „%s“ by mala byť slovník.',
  'You can not lock this task and unassign it at the same time because no one will be able to edit it anymore. Lock the task or remove the assignee, but not both.' => 'Nemôžete túto úlohu uzamknúť a zároveň jej zrušiť priradenie, pretože ju už nikto nebude môcť upravovať. Uzamknite úlohu alebo odstráňte riešiteľa, ale nie oboje.',
  'Assigned task to: %s.' => 'Úloha pridelená používateľovi: %s.',
  'Key "%s" is not a valid status constant. Status constants must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => 'Kľúč „%s“ nie je platná konštanta stavu. Konštanty stavu musia mať 1 – 64 alfanumerických znakov a nemôžu byť výhradne číslice. Napríklad „%s“ alebo „%s“ sú rozumné voľby.',
  'Empty withOwners() constraint is not valid.' => 'Prázdne obmedzenie withOwners() nie je platné.',
  'List of subtask PHIDs.' => 'Zoznam PHID podúloh.',
  'Default view policy for newly created tasks.' => 'Predvolená politika zobrazenia pre novovytvorené úlohy.',
  'Show Only Tasks Without Open Parents' => 'Zobraziť iba úlohy bez otvorených nadradených úloh',
  '%s changed the task status from %s to %s by committing %s.' => '%s zmenil stav úlohy z %s na %s commitnutím %s.',
  'New task description.' => 'Nový popis úlohy.',
  '%s removed the point value for %s.' => '%s odstránil hodnotu bodov pre %s.',
  'Mocks' => 'Makety',
  '%s removed the point value for this task.' => '%s odstránil hodnotu bodov tejto úlohy.',
  'Closer' => 'Zatvárateľ',
  '%s added %s parent task(s): %s.' => array(
    
    array(
      '%s pridal nadradenú úlohu: %3$s.',
      '%s pridal nadradené úlohy: %3$s.',
      '%s pridal nadradených úloh: %3$s.',
    ),
  ),
  'Change the related commits for this task.' => 'Zmeniť súvisiace commity tejto úlohy.',
  'Subtask' => 'Podúloha',
  'Configuration has two statuses both marked with the special attribute "%s" ("%s" and "%s"). There should be only one.' => 'Konfigurácia má dva stavy oba označené špeciálnym atribútom „%s“ („%s“ a „%s“). Mal by byť iba jeden.',
  'Set priority to' => 'Nastaviť prioritu na',
  'Configuration is not valid. Maniphest priority configurations must be dictionaries.' => 'Konfigurácia nie je platná. Konfigurácie priority Maniphest musia byť slovníky.',
  'Search for tasks which block open parent tasks.' => 'Vyhľadať úlohy, ktoré blokujú otvorené nadradené úlohy.',
  'The task description.' => 'Popis úlohy.',
  'Filter By Project' => 'Filtrovať podľa projektu',
  '%s claimed this task.' => '%s si privlastnil túto úlohu.',
  'Close This Task As a Duplicate Of' => 'Zatvoriť túto úlohu ako duplikát',
  '%s removed %s subtask(s) for %s: %s.' => array(
    
    array(
      '%s odstránil podúlohu pre %3$s: %4$s.',
      '%s odstránil podúlohy pre %3$s: %4$s.',
    ),
  ),
  'Untitled Task' => 'Úloha bez názvu',
  '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil nadradené úlohy pre %s, pridal: %4$s; odstránil: %6$s.',
  'Read information about task statuses.' => 'Čítať informácie o stavoch úloh.',
  'Move a task to one or more workboard columns.' => 'Presunúť úlohu do jedného alebo viacerých stĺpcov pracovnej nástenky.',
  '%s added a cover image to %s.' => '%s pridal titulný obrázok do %s.',
  'Edit Subtasks' => 'Upraviť podúlohy',
  'Burnup / Burndown' => 'Burnup / Burndown',
  '%s assigned this task to %s.' => '%s pridelil túto úlohu používateľovi %s.',
  '%s placed %s up for grabs.' => '%s uvoľnil %s na prevzatie.',
  'Change status to: %s.' => 'Zmeniť stav na: %s.',
  '%s raised the priority of this task from %s to %s.' => '%s zvýšil prioritu tejto úlohy z %s na %s.',
  'Get tasks which depend on a task.' => 'Získať úlohy, ktoré závisia od úlohy.',
  'No Forms' => 'Žiadne formuláre',
  'Hours Config' => 'Konfigurácia hodín',
  'Type a task subtype name...' => 'Zadajte názov podtypu úlohy…',
  'File ("%s", with MIME type "%s") can not be transformed into a thumbnail. You may be missing support for this file type in the "GD" extension.' => 'Súbor („%s“, s typom MIME „%s“) nie je možné transformovať na miniatúru. Možno vám chýba podpora pre tento typ súboru v rozšírení „GD“.',
  'To change the priority of a task, specify the desired priority, like `%s`. This table shows the configured names for priority levels.

%s

If you specify an invalid priority, the command is ignored. This command has no effect if you do not specify a priority.' => 'Ak chcete zmeniť prioritu úlohy, zadajte požadovanú prioritu, ako `%s`. Táto tabuľka zobrazuje nakonfigurované názvy úrovní priority.

%s

Ak zadáte neplatnú prioritu, príkaz sa ignoruje. Tento príkaz nemá žiadny účinok, ak nezadáte prioritu.',
  '%s edited %s revision(s), added %s: %s; removed %s: %s.' => '%s upravil revízie, pridal: %4$s; odstránil: %6$s.',
  'Search for tasks updated after a certain date.' => 'Vyhľadať úlohy aktualizované po určitom dátume.',
  'Assign task to me' => 'Prideliť úlohu mne',
  '%s changed the status of %s, a subtask of %s, from %s to %s.' => '%s zmenil stav %s, podúlohy %s, z %s na %s.',
  'Search for tasks closed after a certain date.' => 'Vyhľadať úlohy zatvorené po určitom dátume.',
  'Tasks to Close and Merge' => 'Úlohy na zatvorenie a zlúčenie',
  '%s updated the task description.' => '%s aktualizoval popis úlohy.',
  'Task to make this a subtask of.' => 'Úloha, ktorej podúlohou sa toto má stať.',
  'Burnup / Burndown Rate' => 'Miera Burnup / Burndown',
  '%s added %s revision(s) to %s: %s.' => array(
    
    array(
      '%s pridal revíziu do %3$s: %4$s.',
      '%s pridal revízie do %3$s: %4$s.',
    ),
  ),
  'You can not lock this task because it does not have an assignee. No one would be able to edit the task. Assign the task to an assignee before locking it.' => 'Túto úlohu nemôžete uzamknúť, pretože nemá riešiteľa. Nikto by nemohol úlohu upravovať. Pred uzamknutím úlohu priraďte riešiteľovi.',
  'Owner PHID' => 'PHID vlastníka',
  'Closed, Duplicate' => 'Zatvorené, duplikát',
  'Epoch timestamp when the task was closed.' => 'Časová pečiatka epochy, keď bola úloha zatvorená.',
  'task author' => 'autor úlohy',
  'This method is frozen and will eventually be deprecated. New code should use "transaction.search" instead.' => 'Táto metóda je zmrazená a nakoniec bude zastaraná. Nový kód by mal namiesto toho používať „transaction.search“.',
  'Apply transactions to create a new task or edit an existing one.' => 'Použiť transakcie na vytvorenie novej úlohy alebo úpravu existujúcej.',
  'Browse Assignees' => 'Prehliadať riešiteľov',
  '%s attached %d file(s) of %s: %s' => array(
    
    array(
      '%s pripojil súbor z %3$s: %4$s',
      '%s pripojil súbory z %3$s: %4$s',
    ),
  ),
  'Tasks with edits locked may only be edited by their assignee.' => 'Úlohy s uzamknutými úpravami môže upravovať iba ich riešiteľ.',
  'Status of the task.' => 'Stav úlohy.',
  'Open Tasks by User and Priority (%s)' => 'Otvorené úlohy podľa používateľa a priority (%s)',
  'Information about task status.' => 'Informácie o stave úlohy.',
  'List of task monograms, as array.' => 'Zoznam monogramov úloh, ako pole.',
  'Set description to' => 'Nastaviť popis na',
  'Subtasks.' => 'Podúlohy.',
  '%s closed this task as %s.' => '%s zatvoril túto úlohu ako %s.',
  'Merge Into Selected Task' => 'Zlúčiť do vybranej úlohy',
  'PHID of the parent task.' => 'PHID nadradenej úlohy.',
  'Configure Maniphest.' => 'Nakonfigurovať Maniphest.',
  '%s edited subtask(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil podúlohy pre %s, pridal: %4$s; odstránil: %6$s.',
  'A task is moved between columns on a workboard.' => 'Úloha je presunutá medzi stĺpcami na pracovnej nástenke.',
  'Updated Before' => 'Aktualizované pred',
  '%s changed the status of %s from %s to %s by committing %s.' => '%s zmenil stav %s z %s na %s commitnutím %s.',
  'The source task has been closed as a duplicate of the destination task.' => 'Zdrojová úloha bola zatvorená ako duplikát cieľovej úlohy.',
  'Type a task status name or function...' => 'Zadajte názov stavu úlohy alebo funkciu…',
  '%s changed the point value for %s from %s to %s.' => '%s zmenil hodnotu bodov pre %s z %s na %s.',
  '%s removed %s mock(s) for %s: %s.' => array(
    
    array(
      '%s odstránil maketu pre %3$s: %4$s.',
      '%s odstránil makety pre %3$s: %4$s.',
    ),
  ),
  '%s created this task.' => '%s vytvoril túto úlohu.',
  'You can use this transaction type to create a task into a particular workboard
column, or move an existing task between columns.

The transaction value can be specified in several forms. Some are simpler but
less powerful, while others are more complex and more powerful.

The simplest valid value is a single column PHID:

```lang=json
"PHID-PCOL-1111"
```

This will move the task into that column, or create the task into that column
if you are creating a new task. If the task is currently on the board, it will
be moved out of any exclusive columns. If the task is not currently on the
board, it will be added to the board.

You can also perform multiple moves at the same time by passing a list of
PHIDs:

```lang=json
["PHID-PCOL-2222", "PHID-PCOL-3333"]
```

This is equivalent to performing each move individually.

The most complex and most powerful form uses a dictionary to provide additional
information about the move, including an optional specific position within the
column.

The target column should be identified as `columnPHID`, and you may select a
position by passing either `beforePHIDs` or `afterPHIDs`, specifying the PHIDs
of tasks currently in the column that you want to move this task before or
after:

```lang=json
[
  {
    "columnPHID": "PHID-PCOL-4444",
    "beforePHIDs": ["PHID-TASK-5555"]
  }
]
```

When you specify multiple PHIDs, the task will be moved adjacent to the first
valid PHID found in either of the lists. This allows positional moves to
generally work as users expect even if the client view of the board has fallen
out of date and some of the nearby tasks have moved elsewhere.' => 'Tento typ transakcie môžete použiť na vytvorenie úlohy do konkrétneho stĺpca
pracovnej nástenky alebo na presun existujúcej úlohy medzi stĺpcami.

Hodnotu transakcie je možné zadať v niekoľkých formách. Niektoré sú jednoduchšie, ale
menej výkonné, zatiaľ čo iné sú zložitejšie a výkonnejšie.

Najjednoduchšia platná hodnota je jediný PHID stĺpca:

```lang=json
"PHID-PCOL-1111"
```

Toto presunie úlohu do daného stĺpca alebo vytvorí úlohu do daného stĺpca,
ak vytvárate novú úlohu. Ak je úloha momentálne na nástenke, bude
presunutá zo všetkých exkluzívnych stĺpcov. Ak úloha momentálne nie je na
nástenke, bude pridaná na nástenku.

Môžete tiež vykonať viacero presunov naraz odovzdaním zoznamu
PHID:

```lang=json
["PHID-PCOL-2222", "PHID-PCOL-3333"]
```

Toto je ekvivalentné vykonaniu každého presunu jednotlivo.

Najzložitejšia a najvýkonnejšia forma používa slovník na poskytnutie ďalších
informácií o presune, vrátane voliteľnej konkrétnej pozície v rámci
stĺpca.

Cieľový stĺpec by mal byť identifikovaný ako `columnPHID` a pozíciu môžete vybrať
odovzdaním buď `beforePHIDs`, alebo `afterPHIDs`, ktoré určujú PHID
úloh momentálne v stĺpci, pred ktoré alebo za ktoré chcete túto úlohu presunúť:

```lang=json
[
  {
    "columnPHID": "PHID-PCOL-4444",
    "beforePHIDs": ["PHID-TASK-5555"]
  }
]
```

Keď zadáte viacero PHID, úloha bude presunutá vedľa prvého
platného PHID nájdeného v ktoromkoľvek zo zoznamov. To umožňuje, aby pozičné presuny
vo všeobecnosti fungovali tak, ako používatelia očakávajú, aj keď klientske zobrazenie nástenky zastaralo
a niektoré z blízkych úloh sa presunuli inam.',
  'The assignee of a task can always view and edit it.' => 'Riešiteľ úlohy ju môže vždy zobraziť a upravovať.',
  'Search...' => 'Hľadať…',
  'Task Graph' => 'Graf úlohy',
  'Allows you to edit or override the default priorities available in Maniphest,
like "High", "Normal" and "Low". The configuration should contain a map of
numeric priority values (where larger numbers correspond to higher priorities)
to priority specifications (see defaults below for examples).

The keys you can define for a priority are:

  - `name` //Required string.// Name of the priority.
  - `keywords` //Required list<string>.// List of unique keywords which identify
    this priority, like "high" or "low". Each priority must have at least one
    keyword and two priorities may not share the same keyword.
  - `short` //Optional string.// Alternate shorter name, used in UIs where
    there is less space available.
  - `color` //Optional string.// Color for this priority, like "red" or
    "blue".
  - `disabled` //Optional bool.// Set to true to prevent users from choosing
    this priority when creating or editing tasks. Existing tasks will not be
    affected, and can be batch edited to a different priority or left to
    eventually die out.

You can choose the default priority for newly created tasks with
"maniphest.default-priority".' => 'Umožňuje vám upravovať alebo prepísať predvolené priority dostupné v Maniphest,
ako „High“, „Normal“ a „Low“. Konfigurácia by mala obsahovať mapu
číselných hodnôt priority (kde väčšie čísla zodpovedajú vyšším prioritám)
na špecifikácie priority (príklady nájdete v predvolených hodnotách nižšie).

Kľúče, ktoré môžete definovať pre prioritu, sú:

  - `name` //Povinné string.// Názov priority.
  - `keywords` //Povinné list<string>.// Zoznam jedinečných kľúčových slov, ktoré identifikujú
    túto prioritu, ako „high“ alebo „low“. Každá priorita musí mať aspoň jedno
    kľúčové slovo a dve priority nesmú zdieľať to isté kľúčové slovo.
  - `short` //Voliteľné string.// Alternatívny kratší názov, používaný v používateľských rozhraniach, kde
    je k dispozícii menej miesta.
  - `color` //Voliteľné string.// Farba pre túto prioritu, ako „red“ alebo
    „blue“.
  - `disabled` //Voliteľné bool.// Nastavte na true, aby ste používateľom zabránili vybrať
    túto prioritu pri vytváraní alebo úprave úloh. Existujúce úlohy nebudú
    ovplyvnené a je možné ich hromadne upraviť na inú prioritu alebo ich nechať
    nakoniec vymrieť.

Predvolenú prioritu pre novovytvorené úlohy môžete vybrať pomocou
„maniphest.default-priority“.',
  'Parent IDs' => 'ID nadradených úloh',
  'You can not remove the assignee of this task because it is locked and no one would be able to edit the task. Reassign the task or unlock it before removing the assignee.' => 'Riešiteľa tejto úlohy nemôžete odstrániť, pretože je uzamknutá a nikto by nemohol úlohu upravovať. Pred odstránením riešiteľa úlohu znovu priraďte alebo ju odomknite.',
  'Wishlist' => 'Zoznam želaní',
  'When moving objects between columns on a board, columns must be identified by PHIDs. This transaction uses "%s" to identify a column, but that is not a valid column PHID.' => 'Pri presúvaní objektov medzi stĺpcami na nástenke musia byť stĺpce identifikované pomocou PHID. Táto transakcia používa „%s“ na identifikáciu stĺpca, ale to nie je platný PHID stĺpca.',
  'Points value must be numeric or empty.' => 'Hodnota bodov musí byť číselná alebo prázdna.',
  'Custom Maniphest fields.' => 'Vlastné polia Maniphest.',
  'Key "%s" is not a valid priority constant. Priority constants must be nonnegative integers.' => 'Kľúč „%s“ nie je platná konštanta priority. Konštanty priority musia byť nezáporné celé čísla.',
  'Search for tasks created after a certain date.' => 'Vyhľadať úlohy vytvorené po určitom dátume.',
  '%s removed %s mock(s): %s.' => array(
    
    array(
      '%s odstránil maketu: %3$s.',
      '%s odstránil makety: %3$s.',
      '%s odstránil makiet: %3$s.',
    ),
  ),
  '%s edited mock(s), added %s: %s; removed %s: %s.' => '%s upravil makety, pridal: %3$s; odstránil: %5$s.',
  'Default task priority for create flows.' => 'Predvolená priorita úlohy pre postupy vytvárania.',
  'Show Only Tasks With Open Subtasks' => 'Zobraziť iba úlohy s otvorenými podúlohami',
  'Merge Duplicates Into This Task' => 'Zlúčiť duplikáty do tejto úlohy',
  '%s lowered the priority of this task from %s to %s.' => '%s znížil prioritu tejto úlohy z %s na %s.',
  '(Not Assigned)' => '(Nepriradené)',
  '(Ungrouped)' => '(Nezoskupené)',
  'Task' => 'Úloha',
  'Search for tasks created before a certain date.' => 'Vyhľadať úlohy vytvorené pred určitým dátumom.',
  'Test rules which run when a task is created or updated.' => 'Otestovať pravidlá, ktoré sa spúšťajú, keď je úloha vytvorená alebo aktualizovaná.',
  'List of custom fields for Maniphest tasks.

For details on adding custom fields to Maniphest, see [[ %s | %s ]] in the
documentation.' => 'Zoznam vlastných polí pre úlohy Maniphest.

Podrobnosti o pridávaní vlastných polí do Maniphest nájdete v [[ %s | %s ]] v
dokumentácii.',
  'React to tasks being created or updated.' => 'Reagovať na vytvorenie alebo aktualizáciu úloh.',
  '%s removed the point value %s for this task.' => '%s odstránil hodnotu bodov %s tejto úlohy.',
  'Blocker' => 'Blokovač',
  'Type a task priority name...' => 'Zadajte názov priority úlohy…',
  'Configure Maniphest priority names.' => 'Nakonfigurovať názvy priorít Maniphest.',
  'This method is frozen and will eventually be deprecated. New code should use "maniphest.edit" instead.' => 'Táto metóda je zmrazená a nakoniec bude zastaraná. Nový kód by mal namiesto toho používať „maniphest.edit“.',
  'Close As Duplicate' => 'Zatvoriť ako duplikát',
  'Reassigned' => 'Znovu priradené',
  'Change the task status.' => 'Zmeniť stav úlohy.',
  'Block' => 'Blokovať',
  'Claimed' => 'Privlastnené',
  'New task point value.' => 'Nová hodnota bodov úlohy.',
  'Configuration is not valid. Maniphest points configuration must be a dictionary.' => 'Konfigurácia nie je platná. Konfigurácia bodov Maniphest musí byť slovník.',
  'Returns information about the possible priorities for Maniphest tasks.' => 'Vráti informácie o možných prioritách úloh Maniphest.',
  'One or more PHIDs were invalid for %s.' => 'Jeden alebo viac PHID boli neplatné pre %s.',
  'Parameter "%s" is no longer supported. Use method "%s" with the "%s" constraint instead.' => 'Parameter „%s“ už nie je podporovaný. Namiesto toho použite metódu „%s“ s obmedzením „%s“.',
  'Select All' => 'Vybrať všetko',
  'This task has no parent tasks and no subtasks, so there is no graph to draw.' => 'Táto úloha nemá žiadne nadradené úlohy ani podúlohy, takže nie je čo vykresliť ako graf.',
  'User who is responsible for the task.' => 'Používateľ, ktorý je zodpovedný za úlohu.',
  'Task Author' => 'Autor úlohy',
  'Closed Before' => 'Zatvorené pred',
  'Subtask IDs' => 'ID podúloh',
  'Configure Maniphest Task Forms' => 'Nakonfigurovať formuláre úloh Maniphest',
  '(No Project)' => '(Žiadny projekt)',
  'This task is directly connected to more than %s other tasks, which is too many tasks to display. Use %s to browse parents or subtasks.' => 'Táto úloha je priamo prepojená s viac ako %s ďalšími úlohami, čo je príliš veľa úloh na zobrazenie. Použite %s na prehliadanie nadradených úloh alebo podúloh.',
  'Duplicates' => 'Duplikáty',
  'Task Locked' => 'Úloha uzamknutá',
  'Edit Task: %s' => 'Upraviť úlohu: %s',
  '%s merged %s task(s) %s into %s.' => array(
    
    array(
      '%s zlúčil %3$s do %4$s.',
      '%s zlúčil úlohy %3$s do %4$s.',
    ),
  ),
  'No tasks.' => 'Žiadne úlohy.',
  'Feature Request' => 'Požiadavka na funkciu',
  'Priorities' => 'Priority',
  'Priority Name' => 'Názov priority',
  'Task description.' => 'Popis úlohy.',
  'Current Subtasks' => 'Aktuálne podúlohy',
  'Change the subtasks of this task.' => 'Zmeniť podúlohy tejto úlohy.',
  'Get tasks on which a task depends.' => 'Získať úlohy, od ktorých úloha závisí.',
  'Task Has Commit' => 'Úloha má commit',
  'Type a task status name...' => 'Zadajte názov stavu úlohy…',
  'Save Subtasks' => 'Uložiť podúlohy',
  'Assign yourself as the owner of a task. To assign another user, see `%s`.' => 'Priraďte seba ako vlastníka úlohy. Na priradenie iného používateľa pozrite `%s`.',
  'Task Priority' => 'Priorita úlohy',
  '%s added %s subtask(s) for %s: %s.' => array(
    
    array(
      '%s pridal podúlohu pre %3$s: %4$s.',
      '%s pridal podúlohy pre %3$s: %4$s.',
    ),
  ),
  'Parent Task' => 'Nadradená úloha',
  'Search for tasks updated before a certain date.' => 'Vyhľadať úlohy aktualizované pred určitým dátumom.',
  'Parent tasks.' => 'Nadradené úlohy.',
  'Change subtype to "%s"' => 'Zmeniť podtyp na „%s“',
  'File PHID ("%s") is invalid, or you do not have permission to view it.' => 'PHID súboru („%s“) je neplatný alebo nemáte oprávnenie ho zobraziť.',
  'Priority set to invalid value.' => 'Priorita nastavená na neplatnú hodnotu.',
  'Points value must be nonnegative.' => 'Hodnota bodov musí byť nezáporná.',
  'Type a username or "none"...' => 'Zadajte používateľské meno alebo „none“…',
  'Maniphest Project Name Cache' => 'Vyrovnávacia pamäť názvov projektov Maniphest',
  'Comma-separated list of task IDs.' => 'Zoznam ID úloh oddelených čiarkami.',
  'To assign a task to another user, provide their username. For example, to assign a task to `%s`, write `%s`.

If you omit the username or the username is not valid, this behaves like `%s` and assigns the task to you instead.' => 'Ak chcete priradiť úlohu inému používateľovi, uveďte jeho používateľské meno. Napríklad na priradenie úlohy používateľovi `%s` napíšte `%s`.

Ak vynecháte používateľské meno alebo používateľské meno nie je platné, správa sa to ako `%s` a priradí úlohu namiesto toho vám.',
  'Edit Parent Tasks' => 'Upraviť nadradené úlohy',
  'Spite' => 'Napriek',
  'Email Commands: Tasks' => 'E-mailové príkazy: úlohy',
  'This task is directly connected to more than %s other tasks. Use %s to browse parents or subtasks, or %s to show more of the graph.' => 'Táto úloha je priamo prepojená s viac ako %s ďalšími úlohami. Použite %s na prehliadanie nadradených úloh alebo podúloh, alebo %s na zobrazenie väčšej časti grafu.',
  'Comma-separated list of task monograms.' => 'Zoznam monogramov úloh oddelených čiarkami.',
  '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil commity pre %3$s, pridal: %5$s; odstránil %7$s.',
  'Set title to' => 'Nastaviť názov na',
  'Graph' => 'Graf',
  'Retrieve information about a Maniphest task, given its ID.' => 'Získať informácie o úlohe Maniphest podľa jej ID.',
  'Search for tasks owned by a user from a list.' => 'Vyhľadať úlohy vlastnené používateľom zo zoznamu.',
  '%s assigned %s to %s.' => '%s pridelil %s používateľovi %s.',
  'Current task assignee, if task is assigned.' => 'Aktuálny riešiteľ úlohy, ak je úloha priradená.',
  'Use Maniphest to track bugs, features, todos, or anything else you need to get done. Tasks assigned to you will appear here.' => 'Použite Maniphest na sledovanie chýb, funkcií, úloh na urobenie alebo čohokoľvek iného, čo potrebujete dokončiť. Úlohy priradené vám sa zobrazia tu.',
  'Default edit policy for newly created tasks.' => 'Predvolená politika úprav pre novovytvorené úlohy.',
  'Change the priority of a task.' => 'Zmeniť prioritu úlohy.',
  '%s closed %s, a subtask of %s, as %s.' => '%s zatvoril %s, podúlohu %s, ako %s.',
  'The source task has had the destination task closed as a duplicate and merged into it.' => 'Zdrojová úloha mala cieľovú úlohu zatvorenú ako duplikát a zlúčenú do nej.',
  'Mixture of PHIDs, IDs and monograms.' => 'Zmes PHID, ID a monogramov.',
  'Send email to these addresses to create tasks. %s' => 'Odošlite e-mail na tieto adresy na vytvorenie úloh. %s',
  'Low' => 'Nízka',
  'Search for tasks in specific workboard columns.' => 'Vyhľadať úlohy v konkrétnych stĺpcoch pracovnej nástenky.',
  'The author of this task can take this action.' => 'Autor tejto úlohy môže vykonať túto akciu.',
  'Configure Maniphest task statuses.' => 'Nakonfigurovať stavy úloh Maniphest.',
  'Save Parent Tasks' => 'Uložiť nadradené úlohy',
  'WORKBOARD' => 'PRACOVNÁ NÁSTENKA',
  'Set status to' => 'Nastaviť stav na',
  'Group results by a certain parameter.' => 'Zoskupiť výsledky podľa určitého parametra.',
  'Current Mocks' => 'Aktuálne makety',
  '%s added %s mock(s) for %s: %s.' => array(
    
    array(
      '%s pridal maketu pre %3$s: %4$s.',
      '%s pridal makety pre %3$s: %4$s.',
    ),
  ),
  'Other task activity not listed above occurs.' => 'Vyskytne sa iná aktivita úlohy neuvedená vyššie.',
  'Override Task Lock' => 'Prepísať uzamknutie úlohy',
  'Points Config' => 'Konfigurácia bodov',
  'Current Parent Tasks' => 'Aktuálne nadradené úlohy',
  'Recently Means' => 'Nedávno znamená',
  'User who closed the task, if the task is closed.' => 'Používateľ, ktorý zatvoril úlohu, ak je úloha zatvorená.',
  '%s added %s mock(s): %s.' => array(
    
    array(
      '%s pridal maketu: %3$s.',
      '%s pridal makety: %3$s.',
      '%s pridal makiet: %3$s.',
    ),
  ),
  '%s reassigned %s from %s to %s.' => '%s znovu pridelil %s z %s na %s.',
  'Related Objects' => 'Súvisiace objekty',
  'A task\'s priority changes.' => 'Zmena priority úlohy.',
  'Merge Duplicates In' => 'Zlúčiť duplikáty do',
  'Raised Priority' => 'Zvýšená priorita',
  'Oldest (All)' => 'Najstaršie (všetky)',
  'No such Maniphest task exists.' => 'Žiadna taká úloha Maniphest neexistuje.',
  '%s raised the priority of %s from %s to %s.' => '%s zvýšil prioritu %s z %s na %s.',
  'Edit Mocks' => 'Upraviť makety',
  'High' => 'Vysoká',
  'Move on Workboard' => 'Presunúť na pracovnej nástenke',
  'Search for tasks with given subtypes.' => 'Vyhľadať úlohy so zadanými podtypmi.',
  'Closer PHID' => 'PHID zatvárateľa',
  'The title of the task.' => 'Názov úlohy.',
  'Oldest open task, excluding those with priority %s' => 'Najstaršia otvorená úloha, okrem tých s prioritou %s',
  'Changed Status' => 'Zmenený stav',
  'Comma-separated list of task PHIDs.' => 'Zoznam PHID úloh oddelených čiarkami.',
  'Column move transaction specifies column PHID "%s", but there is no corresponding column with this PHID.' => 'Transakcia presunu stĺpca určuje PHID stĺpca „%s“, ale neexistuje žiadny zodpovedajúci stĺpec s týmto PHID.',
  'Save Related Mocks' => 'Uložiť súvisiace makety',
  'Wontfix' => 'Neopraví sa',
  'List of task PHIDs, as array.' => 'Zoznam PHID úloh, ako pole.',
  '%s renamed this task from %s to %s.' => '%s premenoval túto úlohu z %s na %s.',
  'Updated After' => 'Aktualizované po',
  'To change the status of a task, specify the desired status, like `%s`. This table shows the configured names for statuses.

%s

If you specify an invalid status, the command is ignored. This command has no effect if you do not specify a status.

To quickly close a task, see `%s`.' => 'Ak chcete zmeniť stav úlohy, zadajte požadovaný stav, ako `%s`. Táto tabuľka zobrazuje nakonfigurované názvy stavov.

%s

Ak zadáte neplatný stav, príkaz sa ignoruje. Tento príkaz nemá žiadny účinok, ak nezadáte stav.

Na rýchle zatvorenie úlohy pozrite `%s`.',
  'There was an unexpected error displaying the task graph. Use %s to browse parents or subtasks, or %s to show the graph.' => 'Pri zobrazovaní grafu úlohy nastala neočakávaná chyba. Použite %s na prehliadanie nadradených úloh alebo podúloh, alebo %s na zobrazenie grafu.',
  'TASK DESCRIPTION' => 'POPIS ÚLOHY',
  '%s closed %s as %s by committing %s.' => '%s zatvoril %s ako %s commitnutím %s.',
  'Read information about task priorities.' => 'Čítať informácie o prioritách úloh.',
  'Change the task point value.' => 'Zmeniť hodnotu bodov úlohy.',
  'Create as a subtask of another task.' => 'Vytvoriť ako podúlohu inej úlohy.',
  '● %s' => '● %s',
  'Show Only Tasks Without Open Subtasks' => 'Zobraziť iba úlohy bez otvorených podúloh',
  'Task priority "%s" is not a valid task priority. Use a priority keyword to choose a task priority: %s.' => 'Priorita úlohy „%s“ nie je platná priorita úlohy. Na výber priority úlohy použite kľúčové slovo priority: %s.',
  '%s closed %s as a duplicate by committing %s.' => '%s zatvoril %s ako duplikát commitnutím %s.',
  'Transaction specifies both "afterPHID" and "afterPHIDs". Specify only "afterPHIDs".' => 'Transakcia určuje „afterPHID“ aj „afterPHIDs“. Zadajte iba „afterPHIDs“.',
  'Must pass an array of integer task IDs for parameter "%s".' => 'Pre parameter „%s“ musíte odovzdať pole celočíselných ID úloh.',
  'Task Unassigned' => 'Úloha nepriradená',
  'Reassign the task.' => 'Znovu prideliť úlohu.',
  '%s changed file(s) for %s, attached %d: %s; detached %d: %s' => '%s zmenil súbory pre %s: pripojil: %4$s; odpojil %6$s',
  '%s closed subtask %s as %s.' => '%s zatvoril podúlohu %s ako %s.',
  'Open Tasks by Project and Priority (%s)' => 'Otvorené úlohy podľa projektu a priority (%s)',
  'You do not have access to any forms which can be used to create a subtask.' => 'Nemáte prístup k žiadnym formulárom, ktoré je možné použiť na vytvorenie podúlohy.',
  'Configure how users create and edit tasks.' => 'Nakonfigurovať, ako používatelia vytvárajú a upravujú úlohy.',
  'Assign task to rule author.' => 'Prideliť úlohu autorovi pravidla.',
  '%s detached %d file(s) of %s: %s' => array(
    
    array(
      '%s odpojil súbor z %3$s: %4$s',
      '%s odpojil súbory z %3$s: %4$s',
    ),
  ),
  'Change subtype to "%s."' => 'Zmeniť podtyp na „%s“.',
  '%s closed %s as a duplicate.' => '%s zatvoril %s ako duplikát.',
  '%s removed %s parent task(s) for %s: %s.' => array(
    
    array(
      '%s odstránil nadradenú úlohu pre %3$s: %4$s.',
      '%s odstránil nadradené úlohy pre %3$s: %4$s.',
    ),
  ),
  'Edit Related Mocks' => 'Upraviť súvisiace makety',
  'The source object has the destination object as a parent.' => 'Zdrojový objekt má cieľový objekt ako nadradený.',
  'Maniphest Task' => 'Úloha Maniphest',
  '%s set the cover image to %s.' => '%s nastavil titulný obrázok na %s.',
  'By User' => 'Podľa používateľa',
  'The task already has the selected assignee.' => 'Úloha už má vybraného riešiteľa.',
  'Two different task priorities ("%s" and "%s") have the same keyword ("%s"). Keywords must uniquely identify priorities.' => 'Dve rôzne priority úloh („%s“ a „%s“) majú rovnaké kľúčové slovo („%s“). Kľúčové slová musia jednoznačne identifikovať priority.',
  'List of parent task PHIDs.' => 'Zoznam PHID nadradených úloh.',
  'Change the status of a task.' => 'Zmeniť stav úlohy.',
  'CHANGES TO TASK DESCRIPTION' => 'ZMENY V POPISE ÚLOHY',
  'Close and Merge Selected Tasks' => 'Zatvoriť a zlúčiť vybrané úlohy',
  'Key "%s" is not a valid priority keyword. Priority keywords must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => 'Kľúč „%s“ nie je platné kľúčové slovo priority. Kľúčové slová priority musia mať 1 – 64 alfanumerických znakov a nemôžu byť výhradne číslice. Napríklad „%s“ alebo „%s“ sú rozumné voľby.',
  'Browse Priorities' => 'Prehliadať priority',
  'Unbreak!' => 'Opraviť!',
  'The task already has the selected priority.' => 'Úloha už má vybranú prioritu.',
  'Assign to' => 'Prideliť používateľovi',
  '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil revízie pre %3$s, pridal: %5$s; odstránil %7$s.',
  'A task\'s status changes.' => 'Zmena stavu úlohy.',
  'Rename the task.' => 'Premenovať úlohu.',
  'You can not interact with this task because it is locked.' => 'S touto úlohou nemôžete interagovať, pretože je uzamknutá.',
  'Someone comments on a task.' => 'Niekto komentuje úlohu.',
  'New task status constant.' => 'Nová konštanta stavu úlohy.',
  '%s added %s parent task(s) for %s: %s.' => array(
    
    array(
      '%s pridal nadradenú úlohu pre %3$s: %4$s.',
      '%s pridal nadradené úlohy pre %3$s: %4$s.',
    ),
  ),
  'Closed After' => 'Zatvorené po',
  '%s closed this task as a duplicate.' => '%s zatvoril túto úlohu ako duplikát.',
  'Status "%s" is marked as the status for closing tasks as duplicates, but it is not a closed status. It should be a closed status.' => 'Stav „%s“ je označený ako stav na zatváranie úloh ako duplikátov, ale nie je to zatvorený stav. Mal by to byť zatvorený stav.',
  'New task assignee, or `null` to unassign.' => 'Nový riešiteľ úlohy alebo `null` na zrušenie priradenia.',
  'Wish' => 'Želanie',
  '%s set the point value for %s to %s.' => '%s nastavil hodnotu bodov pre %s na %s.',
  'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here.' => 'Táto úloha je prepojená s viac ako %s ďalšími úlohami. Tu sa zobrazujú iba priame nadradené úlohy a podúlohy.',
  'Search for tasks closed by certain users.' => 'Vyhľadať úlohy zatvorené určitými používateľmi.',
  'Changed Subtype' => 'Zmenený podtyp',
  '%s edited parent task(s), added %s: %s; removed %s: %s.' => '%s upravil nadradené úlohy, pridal: %3$s; odstránil: %5$s.',
  '%s removed %s revision(s) from %s: %s.' => array(
    
    array(
      '%s odstránil revíziu z %3$s: %4$s.',
      '%s odstránil revízie z %3$s: %4$s.',
    ),
  ),
  '%s merged %s task(s): %s.' => array(
    
    array(
      '%s zlúčil úlohu: %3$s.',
      '%s zlúčil úlohy: %3$s.',
      '%s zlúčil úloh: %3$s.',
    ),
  ),
  '%s edited mock(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil makety pre %s, pridal: %4$s; odstránil: %6$s.',
  '%s reassigned this task from %s to %s.' => '%s znovu pridelil túto úlohu z %s na %s.',
  'Triaged' => 'Zatriedené',
  'The source object has the destination object as a subtask.' => 'Zdrojový objekt má cieľový objekt ako podúlohu.',
  '%s removed %s commit(s) from %s: %s.' => array(
    
    array(
      '%s odstránil commit z %3$s: %4$s.',
      '%s odstránil commity z %3$s: %4$s.',
    ),
  ),
  'Task Owner' => 'Vlastník úlohy',
  'By Project' => 'Podľa projektu',
  '%s triaged %s as %s priority.' => '%s zatriedil %s s prioritou %s.',
  'Change priority to: %s.' => 'Zmeniť prioritu na: %s.',
  'Batch Task Editor' => 'Dávkový editor úloh',
  'Search Parent Tasks' => 'Vyhľadať nadradené úlohy',
  'Subscribed' => 'Prihlásené na odber',
  'Unknown Status' => 'Neznámy stav',
  'A task\'s associated projects change.' => 'Zmena priradených projektov úlohy.',
  'Interacting with Maniphest Tasks' => 'Interakcia s úlohami Maniphest',
  '%s changed the task status from %s to %s.' => '%s zmenil stav úlohy z %s na %s.',
  'List of task IDs, as array.' => 'Zoznam ID úloh, ako pole.',
  'Specify exactly one of \'%s\' and \'%s\'.' => 'Zadajte presne jedno z „%s“ a „%s“.',
  'Edit Locked Task' => 'Upraviť uzamknutú úlohu',
  'Assigned' => 'Priradené',
  'Search for tasks which have specific parent tasks.' => 'Vyhľadať úlohy, ktoré majú konkrétne nadradené úlohy.',
  '%s reopened %s as %s by committing %s.' => '%s znovu otvoril %s ako %s commitnutím %s.',
  'Change Estimate' => 'Zmeniť odhad',
  'Closed as Duplicate' => 'Zatvorené ako duplikát',
  '%s merged task %s into %s.' => '%s zlúčil úlohu %s do %s.',
  'Estimated Hours' => 'Odhadované hodiny',
  '%s changed the status of subtask %s from %s to %s.' => '%s zmenil stav podúlohy %s z %s na %s.',
  'Lowered Priority' => 'Znížená priorita',
  'Execute complex searches for Maniphest tasks.' => 'Vykonávať zložité vyhľadávania úloh Maniphest.',
  'Closed By' => 'Zatvoril',
  'This page documents the commands you can use to interact with tasks in Maniphest. These commands work when creating new tasks via email and when replying to existing tasks.' => 'Táto stránka dokumentuje príkazy, ktoré môžete použiť na interakciu s úlohami v Maniphest. Tieto príkazy fungujú pri vytváraní nových úloh cez e-mail a pri odpovedaní na existujúce úlohy.',
  '%s closed this task as %s by committing %s.' => '%s zatvoril túto úlohu ako %s commitnutím %s.',
  'Allows you to define task subtypes. Subtypes let you hide fields you don\'t
need to simplify the workflows for editing tasks.

To define subtypes, provide a list of subtypes. Each subtype should be a
dictionary with these keys:

  - `key` //Required string.// Internal identifier for the subtype, like
    "task", "feature", or "bug".
  - `name` //Required string.// Human-readable name for this subtype, like
    "Task", "Feature Request" or "Bug Report".
  - `tag` //Optional string.// Tag text for this subtype.
  - `color` //Optional string.// Display color for this subtype.
  - `icon` //Optional string.// Icon for the subtype.
  - `children` //Optional map.// Configure options shown to the user when
     they "Create Subtask". See below.
  - `fields` //Optional map.// Configure field behaviors. See below.
  - `mutations` //Optional list.// Configure which subtypes this subtype
    can easily be converted to by using the "Change Subtype" action. See below.

Each subtype must have a unique key, and you must define a subtype with
the key "%s", which is used as a default subtype.

The tag text (`tag`) is used to set the text shown in the subtype tag on list
views and workboards. If you do not configure it, the default subtype will have
no subtype tag and other subtypes will use their name as tag text.

The `children` key allows you to configure which options are presented to the
user when they "Create Subtask" from a task of this subtype. You can specify
these keys:

  - `subtypes`: //Optional list<string>.// Show users creation forms for these
    task subtypes.
  - `forms`: //Optional list<string|int>.// Show users these specific forms,
    in order.

If you don\'t specify either constraint, users will be shown creation forms
for the same subtype.

For example, if you have a "quest" subtype and do not configure `children`,
users who click "Create Subtask" will be presented with all create forms for
"quest" tasks.

If you want to present them with forms for a different task subtype or set of
subtypes instead, use `subtypes`:

```
  {
    ...
    "children": {
      "subtypes": ["objective", "boss", "reward"]
    }
    ...
  }
```

If you want to present them with specific forms, use `forms` and specify form
IDs:

```
  {
    ...
    "children": {
      "forms": [12, 16]
    }
    ...
  }
```

When specifying forms by ID explicitly, the order you specify the forms in will
be used when presenting options to the user.

If only one option would be presented, the user will be taken directly to the
appropriate form instead of being prompted to choose a form.

The `fields` key can configure the behavior of custom fields on specific
task subtypes. For example:

```
  {
    ...
    "fields": {
      "custom.some-field": {
        "disabled": true
      }
    }
    ...
  }
```

Each field supports these options:

  - `disabled` //Optional bool.// Allows you to disable fields on certain
    subtypes.
  - `name` //Optional string.// Custom name of this field for the subtype.


The `mutations` key allows you to control the behavior of the "Change Subtype"
action above the comment area. By default, this action allows users to change
the task subtype into any other subtype.

If you\'d prefer to make it more difficult to change subtypes or offer only a
subset of subtypes, you can specify the list of subtypes that "Change Subtypes"
offers. For example, if you have several similar subtypes and want to allow
tasks to be converted between them but not easily converted to other types,
you can make the "Change Subtypes" control show only these options like this:

```
  {
    ...
    "mutations": ["bug", "issue", "defect"]
    ...
  }
```

If you specify an empty list, the "Change Subtypes" action will be completely
hidden.

This mutation list is advisory and only configures the UI. Tasks may still be
converted across subtypes freely by using the Bulk Editor or API.
' => 'Umožňuje vám definovať podtypy úloh. Podtypy vám umožňujú skryť polia, ktoré ne-
potrebujete, na zjednodušenie pracovných postupov na úpravu úloh.

Na definovanie podtypov poskytnite zoznam podtypov. Každý podtyp by mal byť
slovník s týmito kľúčmi:

  - `key` //Povinné string.// Interný identifikátor pre podtyp, ako
    „task“, „feature“ alebo „bug“.
  - `name` //Povinné string.// Ľudsky čitateľný názov pre tento podtyp, ako
    „Task“, „Feature Request“ alebo „Bug Report“.
  - `tag` //Voliteľné string.// Text menovky pre tento podtyp.
  - `color` //Voliteľné string.// Zobrazovacia farba pre tento podtyp.
  - `icon` //Voliteľné string.// Ikona pre podtyp.
  - `children` //Voliteľné map.// Konfigurácia možností zobrazených používateľovi, keď
     „Vytvorí podúlohu“. Pozrite nižšie.
  - `fields` //Voliteľné map.// Konfigurácia správania polí. Pozrite nižšie.
  - `mutations` //Voliteľné list.// Konfigurácia, na ktoré podtypy je možné tento podtyp
    ľahko previesť pomocou akcie „Change Subtype“. Pozrite nižšie.

Každý podtyp musí mať jedinečný kľúč a musíte definovať podtyp s
kľúčom „%s“, ktorý sa používa ako predvolený podtyp.

Text menovky (`tag`) sa používa na nastavenie textu zobrazeného v menovke podtypu na zobrazeniach
zoznamov a pracovných nástenkách. Ak ho nenakonfigurujete, predvolený podtyp nebude mať
žiadnu menovku podtypu a ostatné podtypy použijú svoj názov ako text menovky.

Kľúč `children` vám umožňuje nakonfigurovať, ktoré možnosti sa zobrazia
používateľovi, keď „Vytvorí podúlohu“ z úlohy tohto podtypu. Môžete zadať
tieto kľúče:

  - `subtypes`: //Voliteľné list<string>.// Zobraziť používateľom formuláre vytvárania pre tieto
    podtypy úloh.
  - `forms`: //Voliteľné list<string|int>.// Zobraziť používateľom tieto konkrétne formuláre,
    v poradí.

Ak nezadáte žiadne z týchto obmedzení, používateľom sa zobrazia formuláre vytvárania
pre rovnaký podtyp.

Napríklad, ak máte podtyp „quest“ a nenakonfigurujete `children`,
používateľom, ktorí kliknú na „Vytvoriť podúlohu“, sa zobrazia všetky formuláre vytvárania pre
úlohy „quest“.

Ak im chcete namiesto toho zobraziť formuláre pre iný podtyp úlohy alebo množinu
podtypov, použite `subtypes`:

```
  {
    ...
    "children": {
      "subtypes": ["objective", "boss", "reward"]
    }
    ...
  }
```

Ak im chcete zobraziť konkrétne formuláre, použite `forms` a zadajte ID
formulárov:

```
  {
    ...
    "children": {
      "forms": [12, 16]
    }
    ...
  }
```

Pri zadávaní formulárov podľa ID explicitne sa poradie, v ktorom formuláre zadáte,
použije pri prezentovaní možností používateľovi.

Ak by sa zobrazila iba jedna možnosť, používateľ bude presmerovaný priamo na
príslušný formulár namiesto výzvy na výber formulára.

Kľúč `fields` môže nakonfigurovať správanie vlastných polí na konkrétnych
podtypoch úloh. Napríklad:

```
  {
    ...
    "fields": {
      "custom.some-field": {
        "disabled": true
      }
    }
    ...
  }
```

Každé pole podporuje tieto možnosti:

  - `disabled` //Voliteľné bool.// Umožňuje vám zakázať polia na určitých
    podtypoch.
  - `name` //Voliteľné string.// Vlastný názov tohto poľa pre podtyp.


Kľúč `mutations` vám umožňuje ovládať správanie akcie „Change Subtype“
nad oblasťou komentárov. Predvolene táto akcia umožňuje používateľom zmeniť
podtyp úlohy na akýkoľvek iný podtyp.

Ak by ste radšej sťažili zmenu podtypov alebo ponúkli iba
podmnožinu podtypov, môžete zadať zoznam podtypov, ktoré „Change Subtypes“
ponúka. Napríklad, ak máte niekoľko podobných podtypov a chcete umožniť
prevod úloh medzi nimi, ale nie ich ľahký prevod na iné typy,
môžete nastaviť ovládací prvok „Change Subtypes“ tak, aby zobrazoval iba tieto možnosti takto:

```
  {
    ...
    "mutations": ["bug", "issue", "defect"]
    ...
  }
```

Ak zadáte prázdny zoznam, akcia „Change Subtypes“ bude úplne
skrytá.

Tento zoznam mutácií je poradný a konfiguruje iba používateľské rozhranie. Úlohy je možné stále
prevádzať medzi podtypmi voľne pomocou hromadného editora alebo API.',
  '%s changed the subtype of this task from "%s" to "%s".' => '%s zmenil podtyp tejto úlohy z „%s“ na „%s“.',
  'Create a new Maniphest task.' => 'Vytvoriť novú úlohu Maniphest.',
  'Create New Task' => 'Vytvoriť novú úlohu',
  'Read information about tasks.' => 'Čítať informácie o úlohách.',
  'New task priority constant.' => 'Nová konštanta priority úlohy.',
  '%s reopened this task as %s by committing %s.' => '%s znovu otvoril túto úlohu ako %s commitnutím %s.',
  'Choose a default priority for newly created tasks. You can review and adjust available priorities by using the %s configuration option. The default value (`90`) corresponds to the default "Needs Triage" priority.' => 'Vyberte predvolenú prioritu pre novovytvorené úlohy. Dostupné priority môžete skontrolovať a upraviť pomocou konfiguračnej možnosti %s. Predvolená hodnota (`90`) zodpovedá predvolenej priorite „Needs Triage“.',
  'The source task is associated with the destination revision.' => 'Zdrojová úloha je priradená k cieľovej revízii.',
  'Changed Task Status' => 'Zmenený stav úlohy',
  'Search for tasks blocked by open subtasks.' => 'Vyhľadať úlohy blokované otvorenými podúlohami.',
  'Changed Project Column' => 'Zmenený stĺpec projektu',
  'Subtype of the task.' => 'Podtyp úlohy.',
  'Unassigned task.' => 'Nepriradená úloha.',
  '%s edited subtask(s), added %s: %s; removed %s: %s.' => '%s upravil podúlohy, pridal: %3$s; odstránil: %5$s.',
  'Task status ("%s") has unrecognized value for "locked" configuration ("%s"). Supported values are: "%s", "%s".' => 'Stav úlohy („%s“) má nerozpoznanú hodnotu pre konfiguráciu „locked“ („%s“). Podporované hodnoty sú: „%s“, „%s“.',
  '%s removed %s subtask(s): %s.' => array(
    
    array(
      '%s odstránil podúlohu: %3$s.',
      '%s odstránil podúlohy: %3$s.',
      '%s odstránil podúloh: %3$s.',
    ),
  ),
  'Closed, Wontfix' => 'Zatvorené, neopraví sa',
  'Parent tasks' => 'Nadradené úlohy',
  'Unknown status query \'%s\'!' => 'Neznámy dopyt stavu „%s“!',
  'Group PHID ("%s") component of cursor ("%s") is not valid.' => 'Komponent PHID skupiny („%s“) kurzora („%s“) nie je platný.',
  '%s set the point value for this task to %s.' => '%s nastavil hodnotu bodov tejto úlohy na %s.',
  'Change the priority of the task.' => 'Zmeniť prioritu úlohy.',
  'Page Size' => 'Veľkosť stránky',
  '%s reopened this task as %s.' => '%s znovu otvoril túto úlohu ako %s.',
  '%s reopened %s, a subtask of %s, as %s.' => '%s znovu otvoril %s, podúlohu %s, ako %s.',
  'Name of the task.' => 'Názov úlohy.',
  'Spited' => 'Zatvorené napriek',
  'Lock Error' => 'Chyba uzamknutia',
  'Tasks and Bugs' => 'Úlohy a chyby',
  'A task\'s assignee changes.' => 'Zmena riešiteľa úlohy.',
  'Revisions and Commits' => 'Revízie a commity',
  'Parent task identifier "%s" does not identify a visible task.' => 'Identifikátor nadradenej úlohy „%s“ neidentifikuje viditeľnú úlohu.',
  'Assign / Claim' => 'Prideliť/privlastniť',
  '%s reopened subtask %s as %s.' => '%s znovu otvoril podúlohu %s ako %s.',
  'Point value of the task.' => 'Hodnota bodov úlohy.',
  'Search for tasks with given authors.' => 'Vyhľadať úlohy so zadanými autormi.',
  'The task already has the selected status.' => 'Úloha už má vybraný stav.',
  'Clear Selection' => 'Vymazať výber',
  '%s reopened %s as "%s".' => '%s znovu otvoril %s ako „%s“.',
  '%s triaged this task as %s priority.' => '%s zatriedil túto úlohu s prioritou %s.',
  'This task has no related commits or revisions.' => 'Táto úloha nemá žiadne súvisiace commity ani revízie.',
  'Changed task status to "%s".' => 'Zmenil stav úlohy na „%s“.',
  'View Standalone Graph' => 'Zobraziť samostatný graf',
  'Choose Subtype' => 'Vybrať podtyp',
);
  }

}
