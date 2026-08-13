<?php

final class PhabricatorProjectSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Browse Not Tagged With Any Projects' => 'Prehľadávať neoznačené žiadnymi projektmi',
  'Timeline' => 'Časová os',
  'Really activate project?' => 'Naozaj aktivovať projekt?',
  '%s changed project member(s), added %d: %s; removed %d: %s.' => '%s zmenil(a) členov projektu, pridaní: %3$s; odstránení: %5$s.',
  '%s set this project\'s color to %s.' => '%s nastavil(a) farbu tohto projektu na %s.',
  '%s created this column.' => '%s vytvoril(a) tento stĺpec.',
  'Play Sound' => 'Prehrať zvuk',
  'Type any(<project>) or not(<project>)...' => 'Napíšte any(<projekt>) alebo not(<projekt>)…',
  '%s added %s member(s) for %s: %s.' => array(
    
    array(
      '%s pridal(a) člena pre %3$s: %4$s.',
      '%s pridal(a) členov pre %3$s: %4$s.',
    ),
  ),
  'Project Column' => 'Stĺpec projektu',
  'Edit Background Color' => 'Upraviť farbu pozadia',
  'New project tag color.' => 'Nová farba značky projektu.',
  'Triggers' => 'Spúšťače',
  'Hide Hidden Columns' => 'Skryť skryté stĺpce',
  'Find results with only the specified tags.' => 'Nájsť výsledky len so zadanými značkami.',
  'Find results in any of a user\'s projects.' => 'Nájsť výsledky v ktoromkoľvek z projektov používateľa.',
  'Trigger ruleset is corrupt: rule (at index "%s") is not a valid rule specification: %s' => 'Sada pravidiel spúšťača je poškodená: pravidlo (na indexe „%s“) nie je platná špecifikácia pravidla: %s',
  'Ruleset specification is not valid. %s' => 'Špecifikácia sady pravidiel nie je platná. %s',
  '%s added %d project hashtag(s): %s.' => array(
    
    array(
      '%s pridal(a) hashtag: %3$s.',
      '%s pridal(a) hashtagy: %3$s.',
    ),
  ),
  'Search for projects with given subtypes.' => 'Hľadať projekty s danými podtypmi.',
  'No Trigger' => 'Žiadny spúšťač',
  '%s named this column %s.' => '%s pomenoval(a) tento stĺpec %s.',
  'Month' => 'Mesiac',
  'True if this column is hidden.' => 'True, ak je tento stĺpec skrytý.',
  'Lock Project' => 'Uzamknúť projekt',
  'Save Default Order' => 'Uložiť predvolené poradie',
  'Project Watchers' => 'Sledovatelia projektu',
  'Intensity' => 'Intenzita',
  'Status rule value should be a string, but is not (value is "%s").' => 'Hodnota pravidla stavu by mala byť reťazec, ale nie je (hodnota je „%s“).',
  'The name of the project.' => 'Názov projektu.',
  '%d month(s)' => array(
    '%d mesiac',
    '%d mesiace',
    '%d mesiacov',
  ),
  'Sort by Created Date' => 'Zoradiť podľa dátumu vytvorenia',
  'Quarter' => 'Štvrťrok',
  'Type a project name or function...' => 'Napíšte názov projektu alebo funkciu…',
  'Are you sure you want to show this column?' => 'Naozaj chcete zobraziť tento stĺpec?',
  'Assign task to user moving the task.' => 'Prideliť úlohu používateľovi, ktorý úlohu presúva.',
  'Add projects' => 'Pridať projekty',
  'Archive Project' => 'Archivovať projekt',
  'Default view policy for newly created projects.' => 'Predvolená zásada zobrazenia pre novo vytvorené projekty.',
  'Pass true to find only milestones, or false to omit milestones.' => 'Zadajte true, ak chcete nájsť len míľniky, alebo false, ak chcete míľniky vynechať.',
  '%s locked %s membership.' => '%s uzamkol(la) členstvo projektu %s.',
  'When mail is sent to members of this project, you will receive a copy.' => 'Keď sa členom tohto projektu odošle e-mail, dostanete kópiu.',
  'Project Card' => 'Karta projektu',
  'This milestone has no tasks.' => 'Tento míľnik nemá žiadne úlohy.',
  'Project Members' => 'Členovia projektu',
  'Other project activity not listed above occurs.' => 'Nastane iná aktivita projektu, ktorá nie je uvedená vyššie.',
  'Cleanup' => 'Vyčistenie',
  '%s of %s %s' => '%s z %s %s',
  '%s removed this project\'s image.' => '%s odstránil(a) obrázok tohto projektu.',
  'Members: %s' => 'Členovia: %s',
  'In Any: ...' => 'V ktoromkoľvek: …',
  'You can not change members of a project with subprojects directly. Members of any subproject are automatically members of the parent project.' => 'Členov projektu s podprojektmi nemôžete meniť priamo. Členovia ktoréhokoľvek podprojektu sú automaticky členmi nadradeného projektu.',
  'Unwatch Project?' => 'Prestať sledovať projekt?',
  'Convert Project' => 'Konvertovať projekt',
  'Set project tags to' => 'Nastaviť značky projektu na',
  'Ripe Orange' => 'Zrelá oranžová',
  'Manage Workboard' => 'Spravovať pracovnú nástenku',
  'Projects, Tags, and Teams' => 'Projekty, značky a tímy',
  '%s updated the image for %s from %s to %s.' => '%s aktualizoval(a) obrázok pre %s z %s na %s.',
  'Type projects(<user>)...' => 'Napíšte projects(<používateľ>)…',
  'Edit Column' => 'Upraviť stĺpec',
  ' %d ' => ' %d',
  'Include results tagged with this project.' => 'Zahrnúť výsledky označené týmto projektom.',
  'You can not move tasks to a hidden column.' => 'Úlohy nemôžete presúvať do skrytého stĺpca.',
  'Period' => 'Obdobie',
  'Column status "%s" is unrecognized, valid statuses are: %s.' => 'Stav stĺpca „%s“ nie je rozpoznaný, platné stavy sú: %s.',
  '%s hid this column.' => '%s skryl(a) tento stĺpec.',
  'The workboard for this project has not been created yet.' => 'Pracovná nástenka pre tento projekt ešte nebola vytvorená.',
  'No Editable Tasks' => 'Žiadne upraviteľné úlohy',
  'Activate Subproject' => 'Aktivovať podprojekt',
  '%s changed %s hashtag(s), added %d: %s; removed %d: %s.' => '%s zmenil(a) hashtagy pre %s, pridané: %4$s; odstránené: %6$s.',
  'Really archive project?' => 'Naozaj archivovať projekt?',
  'Select only results with exactly the other specified tags.' => 'Vybrať len výsledky presne s ostatnými zadanými značkami.',
  '(Hidden)' => '(Skryté)',
  'When a card is dropped into a column which uses this trigger:' => 'Keď sa karta presunie do stĺpca, ktorý používa tento spúšťač:',
  'Expected trigger rule (of class "%s") to return a list of transactions from "newDropTransactions()", but got "%s".' => 'Očakávalo sa, že pravidlo spúšťača (triedy „%s“) vráti z „newDropTransactions()“ zoznam transakcií, ale vrátilo „%s“.',
  'Open Tasks by column' => 'Otvorené úlohy podľa stĺpca',
  'If you lock this project, members will be prevented from leaving it.' => 'Ak tento projekt uzamknete, členom sa zabráni opustiť ho.',
  'Create Project' => 'Vytvoriť projekt',
  'Members' => 'Členovia',
  'Projects are labels are tags. You can use them for a codebase, a team, a sprint, or anything you need to group or categorize.' => 'Projekty sú menovky a značky. Môžete ich použiť pre kódovú základňu, tím, šprint alebo čokoľvek, čo potrebujete zoskupiť alebo kategorizovať.',
  'You can not change members of a milestone. Members of the parent project are automatically members of the milestone.' => 'Členov míľnika nemôžete meniť. Členovia nadradeného projektu sú automaticky členmi míľnika.',
  '%s edited project(s), added %s: %s; removed %s: %s.' => '%s upravil(a) projekty, pridané: %3$s; odstránené: %5$s.',
  'Milestone Of' => 'Míľnik projektu',
  'Column point limit must either be empty or a nonnegative integer.' => 'Limit bodov stĺpca musí byť buď prázdny, alebo nezáporné celé číslo.',
  '%s added %s member(s): %s.' => array(
    
    array(
      '%s pridal(a) člena: %3$s.',
      '%s pridal(a) členov: %3$s.',
    ),
  ),
  'Two different icons ("%s", "%s") are marked as the default icon. Only one icon may be marked as the default.' => 'Dve rôzne ikony („%s“, „%s“) sú označené ako predvolená ikona. Ako predvolená smie byť označená len jedna ikona.',
  'Create Subproject' => 'Vytvoriť podprojekt',
  'Configure Projects.' => 'Konfigurovať projekty.',
  'Backlog' => 'Zásobník',
  'Show All Projects' => 'Zobraziť všetky projekty',
  'Browse User Projects' => 'Prehľadávať projekty používateľa',
  '%s edited associated projects.' => '%s upravil(a) priradené projekty.',
  'This workboard has been disabled, and you do not have permission to enable it. Only users who can edit this project can restore the workboard.' => 'Táto pracovná nástenka bola zakázaná a nemáte povolenie ju povoliť. Pracovnú nástenku môžu obnoviť len používatelia, ktorí môžu upravovať tento projekt.',
  'Enable Project Mail' => 'Povoliť e-maily projektu',
  'Remove members.' => 'Odstrániť členov.',
  'Add Project Tags' => 'Pridať značky projektu',
  'Project Subprojects' => 'Podprojekty projektu',
  'Columns must have a name.' => 'Stĺpce musia mať názov.',
  'Active Triggers' => 'Aktívne spúšťače',
  'Unknown project status \'%s\'!' => 'Neznámy stav projektu „%s“!',
  'Creating a project\'s first subproject **moves all members** to become members of the subproject instead.

See [[ %s | Projects User Guide ]] in the documentation for details. This process can not be undone.' => 'Vytvorenie prvého podprojektu projektu **presunie všetkých členov** tak, že sa namiesto toho stanú členmi podprojektu.

Podrobnosti nájdete v dokumentácii v [[ %s | Používateľskej príručke k projektom ]]. Tento proces sa nedá vrátiť späť.',
  'Parent' => 'Nadradený',
  'You are already watching %s, an ancestor of this project, and are thus watching all of its subprojects.' => 'Už sledujete %s, predka tohto projektu, a tým sledujete všetky jeho podprojekty.',
  'New Empty Board' => 'Nová prázdna nástenka',
  'Choose a project or a milestone to import columns from:' => 'Vyberte projekt alebo míľnik, z ktorého sa majú importovať stĺpce:',
  'Adjust project colors.' => 'Upraviť farby projektov.',
  'Find projects with a given maximum depth. Root projects have depth 0, their immediate children have depth 1, and so on.' => 'Nájsť projekty s danou maximálnou hĺbkou. Koreňové projekty majú hĺbku 0, ich priami potomkovia hĺbku 1 a tak ďalej.',
  '%s removed the point limit for this column.' => '%s odstránil(a) limit bodov pre tento stĺpec.',
  'Project membership changes.' => 'Zmení sa členstvo v projekte.',
  'Value for "%s" rule is invalid: %s' => 'Hodnota pre pravidlo „%s“ je neplatná: %s',
  'Leave Project' => 'Opustiť projekt',
  'Disable Workboard' => 'Zakázať pracovnú nástenku',
  'Members: Invalid Project' => 'Členovia: Neplatný projekt',
  'This project has no subprojects.' => 'Tento projekt nemá žiadne podprojekty.',
  'Not In: %s' => 'Nie v: %s',
  'Watch Project?' => 'Sledovať projekt?',
  'Find all subprojects beneath specified ancestors.' => 'Nájsť všetky podprojekty pod zadanými predkami.',
  'Add project tags' => 'Pridať značky projektu',
  'Trigger: %s' => 'Spúšťač: %s',
  'The sequence in which this column appears on the workboard.' => 'Poradie, v ktorom sa tento stĺpec zobrazuje na pracovnej nástenke.',
  'Task status value ("%s") is not a valid task status. Valid statues are: %s.' => 'Hodnota stavu úlohy („%s“) nie je platný stav úlohy. Platné stavy sú: %s.',
  'Move Tasks to Project...' => 'Presunúť úlohy do projektu…',
  'Set Board Default Order' => 'Nastaviť predvolené poradie nástenky',
  'You will no longer receive email or notifications about every object associated with this project.' => 'Už nebudete dostávať e-maily ani upozornenia o každom objekte priradenom k tomuto projektu.',
  'Removed %s project(s): %s.' => array(
    'Odstránený projekt: %2$s.',
    'Odstránené projekty: %2$s.',
  ),
  'Reorder Columns' => 'Zmeniť poradie stĺpcov',
  'Edit Project: %s' => 'Upraviť projekt: %s',
  'Joinable By' => 'Môže sa pripojiť',
  '%d week(s)' => array(
    '%d týždeň',
    '%d týždne',
    '%d týždňov',
  ),
  'Expected "newHeadersForObjects()" on "%s" to return a list of headers, but got "%s".' => 'Očakávalo sa, že „newHeadersForObjects()“ na „%s“ vráti zoznam hlavičiek, ale vrátilo „%s“.',
  'Removed Project Tags' => 'Odstránené značky projektu',
  'Hide Column' => 'Skryť stĺpec',
  'Membership Immutable' => 'Nemenné členstvo',
  'Initial Members' => 'Počiatoční členovia',
  'Type a user or project name...' => 'Napíšte meno používateľa alebo názov projektu…',
  'Over-due Tasks' => 'Úlohy po termíne',
  'Trigger %d' => 'Spúšťač %d',
  'Project icon.' => 'Ikona projektu.',
  'Hashtags' => 'Hashtagy',
  'Get all hashtags for the project.' => 'Získať všetky hashtagy projektu.',
  'Project Picture' => 'Obrázok projektu',
  'You must select at least one project tag to add.' => 'Musíte vybrať aspoň jednu značku projektu, ktorú chcete pridať.',
  'The workboard for this project has not been created yet, but you do not have permission to create it. Only users who can edit this project can create a workboard for it.' => 'Pracovná nástenka pre tento projekt ešte nebola vytvorená, ale nemáte povolenie ju vytvoriť. Pracovnú nástenku preň môžu vytvoriť len používatelia, ktorí môžu upravovať tento projekt.',
  'Maximum number of tasks allowed in the column.' => 'Maximálny počet úloh povolený v stĺpci.',
  'Custom Projects fields.' => 'Vlastné polia projektov.',
  'Watch Project' => 'Sledovať projekt',
  'Invalid Rule' => 'Neplatné pravidlo',
  'Watching Ancestor' => 'Sledovanie predka',
  'Support for Projects' => 'Podpora pre projekty',
  'See Subprojects' => 'Zobraziť podprojekty',
  'Change task priority to %s.' => 'Zmeniť prioritu úlohy na %s.',
  'Tasks Moved Into Project' => 'Úlohy presunuté do projektu',
  'This One Is Purple' => 'Táto je fialová',
  'Projects being edited' => 'Upravované projekty',
  'Source Workboard Has No Columns' => 'Zdrojová pracovná nástenka nemá žiadne stĺpce',
  '%s left this project.' => '%s opustil(a) tento projekt.',
  '%s Milestones' => 'Míľniky projektu %s',
  'Remove Watcher' => 'Odstrániť sledovateľa',
  'Normal Project' => 'Bežný projekt',
  'Parent Projects' => 'Nadradené projekty',
  'Expected "newColumnTransactions()" on "%s" to return "null" or a list of transactions, but got "%s".' => 'Očakávalo sa, že „newColumnTransactions()“ na „%s“ vráti „null“ alebo zoznam transakcií, ale vrátilo „%s“.',
  'Remove project tags: %s.' => 'Odstrániť značky projektu: %s.',
  'Type a user, project name, or function...' => 'Napíšte meno používateľa, názov projektu alebo funkciu…',
  'Used on %s.' => 'Použité na %s.',
  '%s set the color for %s to %s.' => '%s nastavil(a) farbu pre %s na %s.',
  'Browse Members' => 'Prehľadávať členov',
  'Show Only Archived Projects' => 'Zobraziť len archivované projekty',
  'Unlock Project' => 'Odomknúť projekt',
  'Type only()...' => 'Napíšte only()…',
  'Find results in any of several projects.' => 'Nájsť výsledky v ktoromkoľvek z viacerých projektov.',
  'Show Only Milestones' => 'Zobraziť len míľniky',
  'No triggers found.' => 'Nenašli sa žiadne spúšťače.',
  'The display name of the column.' => 'Zobrazovaný názov stĺpca.',
  'This column is hidden because it represents an archived subproject. Do you want to activate the subproject so the column is visible again?' => 'Tento stĺpec je skrytý, pretože predstavuje archivovaný podprojekt. Chcete podprojekt aktivovať, aby bol stĺpec opäť viditeľný?',
  'When creating a project, specify a maximum of one parent project or milestone project. A project can not be both a subproject and a milestone.' => 'Pri vytváraní projektu zadajte najviac jeden nadradený projekt alebo míľnikový projekt. Projekt nemôže byť súčasne podprojektom aj míľnikom.',
  'Maximum number of points of tasks allowed in the column.' => 'Maximálny počet bodov úloh povolený v stĺpci.',
  '%s updated the ruleset for this trigger.' => '%s aktualizoval(a) sadu pravidiel pre tento spúšťač.',
  'PROJECT DETAIL' => 'PODROBNOSTI PROJEKTU',
  'Point Limit' => 'Limit bodov',
  'Project tag color.' => 'Farba značky projektu.',
  'Joined' => 'Dátum pripojenia',
  'No Milestones' => 'Žiadne míľniky',
  'Project tags added' => 'Pridané značky projektu',
  'Blue Sky' => 'Modrá obloha',
  'Unused trigger.' => 'Nepoužitý spúšťač.',
  'Trigger Usage' => 'Použitie spúšťača',
  'Owner rule value is required. Specify a user to assign tasks to, the token "viewer()" to assign to the user moving tasks, or the token "none()" to unassign tasks.' => 'Hodnota pravidla vlastníka je povinná. Zadajte používateľa, ktorému sa majú úlohy prideliť, token „viewer()“ na pridelenie používateľovi, ktorý úlohy presúva, alebo token „none()“ na zrušenie pridelenia úloh.',
  'Value for index "%s" should be a dictionary.' => 'Hodnota pre index „%s“ by mala byť slovník.',
  'Too many tasks (%s).' => 'Priveľa úloh (%s).',
  'This project does not have any watchers.' => 'Tento projekt nemá žiadnych sledovateľov.',
  'Create a subproject of an existing project.' => 'Vytvoriť podprojekt existujúceho projektu.',
  'You must select at least one user or project tag to remove.' => 'Musíte vybrať aspoň jedného používateľa alebo jednu značku projektu, ktoré chcete odstrániť.',
  'Members of all subprojects are members of this project.' => 'Členovia všetkých podprojektov sú členmi tohto projektu.',
  'You are a member and you will receive mail that is sent to all project members.' => 'Ste členom a budete dostávať e-maily odosielané všetkým členom projektu.',
  'Two different icons ("%s", "%s") are marked with special attribute "%s". Only one icon may be marked with this attribute.' => 'Dve rôzne ikony („%s“, „%s“) sú označené špeciálnym atribútom „%s“. Týmto atribútom smie byť označená len jedna ikona.',
  'Umbrella' => 'Dáždnik',
  'Subprojects' => 'Podprojekty',
  'Owner rule value should be a list, but is not (value is "%s").' => 'Hodnota pravidla vlastníka by mala byť zoznam, ale nie je (hodnota je „%s“).',
  'Information about the project color.' => 'Informácie o farbe projektu.',
  'Remove project rule value should be a list, but is not (value is "%s").' => 'Hodnota pravidla na odstránenie projektu by mala byť zoznam, ale nie je (hodnota je „%s“).',
  '%s added %s project(s) to %s: %s.' => array(
    
    array(
      '%s pridal(a) projekt do %3$s: %4$s.',
      '%s pridal(a) projekty do %3$s: %4$s.',
    ),
  ),
  'This function is used with other tags, and causes the query to match only results with exactly those tags. For example, to find tasks tagged only iOS:

> ios, only()

This will omit results with any other project tag.' => 'Táto funkcia sa používa s inými značkami a spôsobí, že dopyt bude zodpovedať len výsledkom presne s týmito značkami. Napríklad na nájdenie úloh označených len značkou iOS:

> ios, only()

Tým sa vynechajú výsledky s akoukoľvek inou značkou projektu.',
  'Maximum Depth' => 'Maximálna hĺbka',
  '%s changed the trigger for this column from %s to %s.' => '%s zmenil(a) spúšťač pre tento stĺpec z %s na %s.',
  'Archive and Hide Column' => 'Archivovať a skryť stĺpec',
  'Tasks Closed' => 'Uzavreté úlohy',
  'This is a progress bar which shows how many points of work are complete within the milestone. It has no configurable settings.' => 'Toto je ukazovateľ priebehu, ktorý zobrazuje, koľko bodov práce je v rámci míľnika hotových. Nemá žiadne nastaviteľné možnosti.',
  'Group by Owner' => 'Zoskupiť podľa vlastníka',
  'This rule (of type "%s") is invalid.' => 'Toto pravidlo (typu „%s“) je neplatné.',
  'New Trigger' => 'Nový spúšťač',
  'You have disabled mail. When mail is sent to project members, you will not receive a copy.' => 'Zakázali ste si e-maily. Keď sa členom projektu odošle e-mail, kópiu nedostanete.',
  'Select projects current viewer is a member of.' => 'Vybrať projekty, ktorých je aktuálny pozorovateľ členom.',
  'This workboard has been disabled, but can be restored to its former glory.' => 'Táto pracovná nástenka bola zakázaná, ale dá sa obnoviť do jej bývalej slávy.',
  'No Limit' => 'Bez limitu',
  'This column can not have a trigger.' => 'Tento stĺpec nemôže mať spúšťač.',
  '%s added %s project(s): %s.' => array(
    
    array(
      '%s pridal(a) projekt: %3$s.',
      '%s pridal(a) projekty: %3$s.',
    ),
  ),
  'Unknown Rule' => 'Neznáme pravidlo',
  'Milestones can be created for this project.' => 'Pre tento projekt možno vytvárať míľniky.',
  'Set project members.' => 'Nastaviť členov projektu.',
  'Read information about projects.' => 'Čítať informácie o projektoch.',
  'Organization' => 'Organizácia',
  'members of any project' => 'členovia ľubovoľného projektu',
  'If you unlock this project, members will be free to leave.' => 'Ak tento projekt odomknete, členovia ho budú môcť voľne opustiť.',
  'Users who can edit a project can always join it.' => 'Používatelia, ktorí môžu upravovať projekt, sa k nemu môžu vždy pripojiť.',
  'Edit Project Picture' => 'Upraviť obrázok projektu',
  'No tasks have positive points.' => 'Žiadne úlohy nemajú kladné body.',
  'Create Workboard' => 'Vytvoriť pracovnú nástenku',
  'Unripe Plum' => 'Nezrelá slivka',
  'Change the project tag color.' => 'Zmeniť farbu značky projektu.',
  'members of project' => 'členovia projektu',
  'No tasks have points assigned.' => 'Žiadnym úlohám nie sú priradené body.',
  'Parent project to create a milestone for.' => 'Nadradený projekt, pre ktorý sa má vytvoriť míľnik.',
  'The project icon marked as the default icon ("%s") must not be disabled.' => 'Ikona projektu označená ako predvolená ikona („%s“) nesmie byť zakázaná.',
  '%s added %s project(s) for %s: %s.' => array(
    
    array(
      '%s pridal(a) projekt pre %3$s: %4$s.',
      '%s pridal(a) projekty pre %3$s: %4$s.',
    ),
  ),
  'Add subscribers rule value should be a list, but is not (value is "%s").' => 'Hodnota pravidla na pridanie odberateľov by mala byť zoznam, ale nie je (hodnota je „%s“).',
  'Reports / Burnup' => 'Prehľady / Burnup',
  'Add Column' => 'Pridať stĺpec',
  'Remove Project Tags' => 'Odstrániť značky projektu',
  'Reef' => 'Útes',
  'No column ordering exists with key "%s".' => 'Neexistuje žiadne usporiadanie stĺpcov s kľúčom „%s“.',
  'This trigger is not used by any columns.' => 'Tento spúšťač nepoužívajú žiadne stĺpce.',
  'Project Details' => 'Podrobnosti projektu',
  'Choose Project Icon' => 'Vyberte ikonu projektu',
  '%s unlocked %s membership.' => '%s odomkol(la) členstvo projektu %s.',
  'Unnamed Column' => 'Nepomenovaný stĺpec',
  'Choose a parent project to create a subproject beneath.' => 'Vyberte nadradený projekt, pod ktorým sa má vytvoriť podprojekt.',
  'Enable Mail' => 'Povoliť e-maily',
  'The selected column contains no visible tasks which you have permission to move.' => 'Vybraný stĺpec neobsahuje žiadne viditeľné úlohy, ktoré máte povolenie presúvať.',
  'Create Trigger' => 'Vytvoriť spúšťač',
  'Make the workboard the default view for this project.' => 'Nastaviť pracovnú nástenku ako predvolené zobrazenie tohto projektu.',
  'New Trigger...' => 'Nový spúšťač…',
  'This column is visible because it represents an active subproject. Do you want to hide the column by archiving the subproject?' => 'Tento stĺpec je viditeľný, pretože predstavuje aktívny podprojekt. Chcete stĺpec skryť archivovaním podprojektu?',
  'Project Reports' => 'Prehľady projektu',
  'Trigger "%s" is not a valid trigger, or you do not have permission to view it.' => 'Spúšťač „%s“ nie je platný spúšťač alebo nemáte povolenie ho zobraziť.',
  'Added Project Tags' => 'Pridané značky projektu',
  '(Deprecated.) Search for projects with a given name or hashtag using tokenizer/datasource query matching rules. This is deprecated in favor of the more powerful "query" constraint.' => '(Zastarané.) Hľadať projekty s daným názvom alebo hashtagom pomocou pravidiel zhody dopytu tokenizéra/zdroja údajov. Toto je zastarané v prospech mocnejšieho obmedzenia „query“.',
  '%s removed %s member(s) for %s: %s.' => array(
    
    array(
      '%s odstránil(a) člena pre %3$s: %4$s.',
      '%s odstránil(a) členov pre %3$s: %4$s.',
    ),
  ),
  '%s set the image for %s to %s.' => '%s nastavil(a) obrázok pre %s na %s.',
  'Added %s project(s): %s.' => array(
    'Pridaný projekt: %2$s.',
    'Pridané projekty: %2$s.',
  ),
  'Import Columns' => 'Importovať stĺpce',
  '%s edited %s project(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil(a) projekty pre %3$s, pridané: %5$s; odstránené %7$s.',
  'Workboard' => 'Pracovná nástenka',
  'User\'s Projects: Invalid User' => 'Projekty používateľa: Neplatný používateľ',
  'Trigger ruleset is corrupt: rule (at index "%s") should be a rule specification, but is actually "%s".' => 'Sada pravidiel spúšťača je poškodená: pravidlo (na indexe „%s“) by malo byť špecifikáciou pravidla, ale v skutočnosti je „%s“.',
  'Set members, overwriting the current value.' => 'Nastaviť členov a prepísať aktuálnu hodnotu.',
  'Workboard Columns' => 'Stĺpce pracovnej nástenky',
  'Find results not in specific projects.' => 'Nájsť výsledky, ktoré nie sú v konkrétnych projektoch.',
  'Find direct subprojects of specified parents.' => 'Nájsť priame podprojekty zadaných nadradených projektov.',
  'Custom Trigger' => 'Vlastný spúšťač',
  '%s changed the default filter for the project workboard.' => '%s zmenil(a) predvolený filter pre pracovnú nástenku projektu.',
  'Disabling a workboard hides the board. Objects on the board will no longer be annotated with column names in other applications. You can restore the workboard later.' => 'Zakázaním pracovnej nástenky sa nástenka skryje. Objekty na nástenke už nebudú v iných aplikáciách označené názvami stĺpcov. Pracovnú nástenku môžete neskôr obnoviť.',
  'Member' => 'Člen',
  'Create a new board with just a backlog column.' => 'Vytvoriť novú nástenku len so stĺpcom zásobníka.',
  'Remove subscribers rule value should be a list, but is not (value is "%s").' => 'Hodnota pravidla na odstránenie odberateľov by mala byť zoznam, ale nie je (hodnota je „%s“).',
  'Watching a project also watches all subprojects and milestones of that project.' => 'Sledovanie projektu zahŕňa aj sledovanie všetkých jeho podprojektov a míľnikov.',
  'Unsupported Project' => 'Nepodporovaný projekt',
  'Get the full ancestor list for each project.' => 'Získať úplný zoznam predkov pre každý projekt.',
  'Subprojects and Milestones' => 'Podprojekty a míľniky',
  'Membership Locked' => 'Členstvo uzamknuté',
  'Type a project name...' => 'Napíšte názov projektu…',
  'Rename the project' => 'Premenovať projekt',
  'You do not have permission to create new projects.' => 'Nemáte povolenie vytvárať nové projekty.',
  'You can not move tasks from a column to itself.' => 'Úlohy nemôžete presunúť zo stĺpca do toho istého stĺpca.',
  'Ancestor Projects' => 'Projekty predkov',
  'Get information about projects.' => 'Získať informácie o projektoch.',
  'Save Column' => 'Uložiť stĺpec',
  'Project icons must have unique keys, but two icons share the same key ("%s").' => 'Ikony projektov musia mať jedinečné kľúče, ale dve ikony zdieľajú rovnaký kľúč („%s“).',
  '%s created this trigger.' => '%s vytvoril(a) tento spúšťač.',
  'View Tasks as Query' => 'Zobraziť úlohy ako dopyt',
  'Change task status to %s.' => 'Zmeniť stav úlohy na %s.',
  'Closed Tasks' => 'Uzavreté úlohy',
  'Add project tags: %s.' => 'Pridať značky projektu: %s.',
  'Into The Expanse' => 'Do diaľav',
  '%s added %d project member(s): %s.' => array(
    
    array(
      '%s pridal(a) člena: %3$s.',
      '%s pridal(a) členov: %3$s.',
    ),
  ),
  'Column: %s' => 'Stĺpec: %s',
  '%s changed the default sort order for the project workboard.' => '%s zmenil(a) predvolené poradie zoradenia pre pracovnú nástenku projektu.',
  '%s renamed this project from %s to %s.' => '%s premenoval(a) tento projekt z %s na %s.',
  '%s removed %s member(s): %s.' => array(
    
    array(
      '%s odstránil(a) člena: %3$s.',
      '%s odstránil(a) členov: %3$s.',
    ),
  ),
  'Shallows' => 'Plytčiny',
  'Configure forms for creating projects.' => 'Konfigurovať formuláre na vytváranie projektov.',
  'Project tags incl their milestones (only use with Include None Of!)' => 'Značky projektu vrátane ich míľnikov (používajte len s možnosťou Nezahrnúť žiadne z!)',
  'When a card is dropped into a column that uses this trigger, these actions will be taken.' => 'Keď sa karta presunie do stĺpca, ktorý používa tento spúšťač, vykonajú sa tieto akcie.',
  'The selected column contains no visible tasks which you have permission to edit.' => 'Vybraný stĺpec neobsahuje žiadne viditeľné úlohy, ktoré máte povolenie upravovať.',
  '%s activated this project.' => '%s aktivoval(a) tento projekt.',
  'Information about the project icon.' => 'Informácie o ikone projektu.',
  'Change Owner' => 'Zmeniť vlastníka',
  'Parent Project' => 'Nadradený projekt',
  'This is a trigger rule with a valid type ("%s") but an invalid value.' => 'Toto je pravidlo spúšťača s platným typom („%s“), ale s neplatnou hodnotou.',
  'In Any: %s' => 'V ktoromkoľvek: %s',
  'Choose a column to move tasks to.' => 'Vyberte stĺpec, do ktorého sa majú úlohy presunúť.',
  'Glass' => 'Sklo',
  'Can Create Projects' => 'Môže vytvárať projekty',
  'No Movable Tasks' => 'Žiadne presunuteľné úlohy',
  'Workload: All %d open tasks are unassigned.' => 'Pracovné zaťaženie: Všetky otvorené úlohy (%d) sú nepridelené.',
  'Change status to %s.' => 'Zmeniť stav na %s.',
  'Create New Project' => 'Vytvoriť nový projekt',
  'Use Parent Background (Default)' => 'Použiť pozadie nadradeného projektu (predvolené)',
  'You are watching this project and will receive mail about changes made to any related object.' => 'Sledujete tento projekt a budete dostávať e-maily o zmenách vykonaných na akomkoľvek súvisiacom objekte.',
  'Configuration must be a list of project color specifications.' => 'Konfigurácia musí byť zoznam špecifikácií farieb projektu.',
  'React to projects being created or updated.' => 'Reagovať na vytvorenie alebo aktualizáciu projektov.',
  'Initial project members.' => 'Počiatoční členovia projektu.',
  'Fire' => 'Oheň',
  'This board has no columns.' => 'Táto nástenka nemá žiadne stĺpce.',
  '%s removed the image for %s.' => '%s odstránil(a) obrázok pre %s.',
  'No open tasks tagged with this project.' => 'Žiadne otvorené úlohy označené týmto projektom.',
  '[Project]' => '[Projekt]',
  'You can only set a parent or milestone project when creating a project for the first time.' => 'Nadradený alebo míľnikový projekt môžete nastaviť len pri prvom vytváraní projektu.',
  'Find results in any of the current viewer\'s projects.' => 'Nájsť výsledky v ktoromkoľvek z projektov aktuálneho pozorovateľa.',
  'Type viewerprojects()...' => 'Napíšte viewerprojects()…',
  'Your tremendous contributions to this project will be sorely missed. Are you sure you want to leave?' => 'Vaše ohromné príspevky tomuto projektu budú veľmi chýbať. Naozaj chcete odísť?',
  'Unknown User ("%s")' => 'Neznámy používateľ („%s“)',
  'Move to Column' => 'Presunúť do stĺpca',
  'Parent or milestone project PHID ("%s") must not be a milestone. Milestones may not have subprojects or milestones.' => 'PHID nadradeného alebo míľnikového projektu („%s“) nesmie byť míľnik. Míľniky nemôžu mať podprojekty ani míľniky.',
  'Remove projects' => 'Odstrániť projekty',
  'Advanced Filter...' => 'Rozšírený filter…',
  'Hide Root Projects' => 'Skryť koreňové projekty',
  'Current Viewer\'s Projects' => 'Projekty aktuálneho pozorovateľa',
  'Gradients' => 'Prechody',
  'Members of a project can always view it.' => 'Členovia projektu ho môžu vždy zobraziť.',
  'Change the project icon.' => 'Zmeniť ikonu projektu.',
  'You can not add milestones to this project.' => 'K tomuto projektu nemôžete pridávať míľniky.',
  'Project tags' => 'Značky projektu',
  'You are not a project member, so you do not receive mail sent to members of this project.' => 'Nie ste členom projektu, takže nedostávate e-maily odosielané členom tohto projektu.',
  'Tasks Reopened' => 'Znovu otvorené úlohy',
  'Additional project tags.' => 'Ďalšie značky projektu.',
  'Used on %s and %s other column(s).' => array(
    
    array(
      'Použité na %s a ďalšom stĺpci.',
      'Použité na %s a %s ďalších stĺpcoch.',
    ),
  ),
  'This function allows you to find results associated with any of the projects a specified user is a member of. For example, this will find results associated with all of the projects `%s` is a member of:

%s

' => 'Táto funkcia umožňuje nájsť výsledky priradené ku ktorémukoľvek z projektov, ktorých je zadaný používateľ členom. Napríklad toto nájde výsledky priradené ku všetkým projektom, ktorých je `%s` členom:

%s',
  'Not Assigned' => 'Nepridelené',
  'Choose a parent project to create a new milestone for.' => 'Vyberte nadradený projekt, pre ktorý sa má vytvoriť nový míľnik.',
  'You must choose a file when uploading a new project picture.' => 'Pri nahrávaní nového obrázka projektu musíte vybrať súbor.',
  'You must select at least one project tag to remove.' => 'Musíte vybrať aspoň jednu značku projektu, ktorú chcete odstrániť.',
  'This project is already a milestone, and milestones may not have their own milestones.' => 'Tento projekt už je míľnikom a míľniky nemôžu mať vlastné míľniky.',
  'Sort by Title' => 'Zoradiť podľa názvu',
  'Hide Milestones' => 'Skryť míľniky',
  'You can not import columns into this workboard because it already has columns. You can only import into an empty workboard.' => 'Do tejto pracovnej nástenky nemôžete importovať stĺpce, pretože už stĺpce má. Importovať možno len do prázdnej pracovnej nástenky.',
  'Only' => 'Len',
  'Background Color' => 'Farba pozadia',
  '%s renamed this column from %s to %s.' => '%s premenoval(a) tento stĺpec z %s na %s.',
  'Tasks Created' => 'Vytvorené úlohy',
  'View Trigger' => 'Zobraziť spúšťač',
  'Join this project? You will become a member and enjoy whatever benefits membership may confer.' => 'Pripojiť sa k tomuto projektu? Stanete sa členom a budete požívať všetky výhody, ktoré členstvo prináša.',
  'Group by Priority' => 'Zoskupiť podľa priority',
  'Activate Project' => 'Aktivovať projekt',
  'Find results which are not tagged with any projects.' => 'Nájsť výsledky, ktoré nie sú označené žiadnymi projektmi.',
  '%s archived this project.' => '%s archivoval(a) tento projekt.',
  'Projects must have a name.' => 'Projekty musia mať názov.',
  'Hidden Columns' => 'Skryté stĺpce',
  'Trigger ruleset is corrupt, rule (of type "%s") does not validate: %s' => 'Sada pravidiel spúšťača je poškodená, pravidlo (typu „%s“) neprešlo overením: %s',
  'Search for objects with specific project PHIDs.' => 'Hľadať objekty s konkrétnymi PHID projektov.',
  'Move Tasks to Column...' => 'Presunúť úlohy do stĺpca…',
  'Active Column' => 'Aktívny stĺpec',
  '%s edited member(s), added %s: %s; removed %s: %s.' => '%s upravil(a) členov, pridaní: %3$s; odstránení: %5$s.',
  'Save Default Filter' => 'Uložiť predvolený filter',
  '%s set the point limit for this column to %s.' => '%s nastavil(a) limit bodov pre tento stĺpec na %s.',
  '%s: Activity' => '%s: Aktivita',
  'In Any: Invalid Project' => 'V ktoromkoľvek: Neplatný projekt',
  'Manage Project' => 'Spravovať projekt',
  '%s updated this project\'s image from %s to %s.' => '%s aktualizoval(a) obrázok tohto projektu z %s na %s.',
  'Create a project.' => 'Vytvoriť projekt.',
  'Hidden Column' => 'Skrytý stĺpec',
  'This function allows you to find results in one of several projects. Another way to think of this function is that it allows you to perform an "or" query.

By default, if you enter several projects, results are returned only if they belong to all of the projects you enter. That is, this query will only return results in //both// projects:

> ios, android

If you want to find results in any of several projects, you can use the `any()` function. For example, you can use this query  to find results which are in //either// project:

> any(ios), any(android)

You can combine the `any()` function with normal project tokens to refine results. For example, use this query to find bugs in //either// iOS or Android:

> bug, any(ios), any(android)' => 'Táto funkcia umožňuje nájsť výsledky v jednom z viacerých projektov. Inak povedané, umožňuje vykonať dopyt typu „alebo“.

Predvolene sa pri zadaní viacerých projektov vrátia výsledky, len ak patria do všetkých zadaných projektov. Tento dopyt teda vráti len výsledky v //oboch// projektoch:

> ios, android

Ak chcete nájsť výsledky v ktoromkoľvek z viacerých projektov, môžete použiť funkciu `any()`. Napríklad týmto dopytom nájdete výsledky, ktoré sú v //ktoromkoľvek// z projektov:

> any(ios), any(android)

Funkciu `any()` môžete kombinovať s bežnými žetónmi projektov na spresnenie výsledkov. Napríklad týmto dopytom nájdete chyby //buď// v iOS, alebo v Androide:

> bug, any(ios), any(android)',
  'You can not create a subproject or milestone under this parent because it would nest projects too deeply. The maximum nesting depth of projects is %s.' => 'Pod týmto nadradeným projektom nemôžete vytvoriť podprojekt ani míľnik, pretože by sa projekty vnorili príliš hlboko. Maximálna hĺbka vnorenia projektov je %s.',
  '%s removed %s project(s) from %s: %s.' => array(
    
    array(
      '%s odstránil(a) projekt z %3$s: %4$s.',
      '%s odstránil(a) projekty z %3$s: %4$s.',
    ),
  ),
  'No Subprojects' => 'Žiadne podprojekty',
  'Edit Details' => 'Upraviť podrobnosti',
  'Icon key "%s" is not a valid icon key. Icon keys must be 1-32 characters long and contain only lowercase letters. For example, "%s" and "%s" are reasonable keys.' => 'Kľúč ikony „%s“ nie je platný kľúč ikony. Kľúče ikon musia mať 1 – 32 znakov a obsahovať len malé písmená. Napríklad „%s“ a „%s“ sú rozumné kľúče.',
  'Exclude results tagged with this project.' => 'Vylúčiť výsledky označené týmto projektom.',
  'Advanced Filter' => 'Rozšírený filter',
  'Solid Colors' => 'Plné farby',
  'Infrastructure' => 'Infraštruktúra',
  'Edit Trigger' => 'Upraviť spúšťač',
  'Assign task to %s.' => 'Prideliť úlohu používateľovi %s.',
  'Move to Project' => 'Presunúť do projektu',
  'Watching' => 'Sledované',
  '%s locked this project\'s membership.' => '%s uzamkol(la) členstvo v tomto projekte.',
  'Project Fields' => 'Polia projektu',
  'Used on %s and %s other active column(s).' => array(
    
    array(
      'Použité na %s a ďalšom aktívnom stĺpci.',
      'Použité na %s a %s ďalších aktívnych stĺpcoch.',
    ),
  ),
  'The project image ("%s") specified for ("%s") was not found in the folder "resources/builtin/projects/".' => 'Obrázok projektu („%s“) zadaný pre („%s“) sa nenašiel v priečinku „resources/builtin/projects/“.',
  'Allows you to relabel project colors.

The list of available colors can not be expanded, but the existing colors may
be given labels.

Configure a list of color specifications. Each color specification should be a
dictionary, which may contain these keys:

  - `key` //Required string.// The internal key identifying the color.
  - `name` //Required string.// Human-readable label for the color.
  - `default` //Optional bool.// Selects the default color used when creating
    new projects. Exactly one color must be selected as the default.

You can look at the default configuration below for an example of a valid
configuration.' => 'Umožňuje premenovať farby projektov.

Zoznam dostupných farieb sa nedá rozšíriť, ale existujúcim farbám možno
priradiť menovky.

Nakonfigurujte zoznam špecifikácií farieb. Každá špecifikácia farby by mala byť
slovník, ktorý môže obsahovať tieto kľúče:

  - `key` //Povinný reťazec.// Interný kľúč identifikujúci farbu.
  - `name` //Povinný reťazec.// Menovka farby čitateľná pre človeka.
  - `default` //Voliteľný boolovský údaj.// Vyberá predvolenú farbu použitú pri vytváraní
    nových projektov. Ako predvolená musí byť vybraná práve jedna farba.

Príklad platnej konfigurácie nájdete v predvolenej konfigurácii
nižšie.',
  'Search for projects with particular hashtags.' => 'Hľadať projekty s konkrétnymi hashtagmi.',
  'This project has no milestones.' => 'Tento projekt nemá žiadne míľniky.',
  'Project watcher list changes.' => 'Zmení sa zoznam sledovateľov projektu.',
  'Users with access may join this project, but may not leave.' => 'Používatelia s prístupom sa môžu k tomuto projektu pripojiť, ale nemôžu ho opustiť.',
  'Associate one or more projects to the object by listing their hashtags. Separate project tags with spaces. For example, use `!projects #ios #feature` to add both related projects.

Projects which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any project tags.' => 'Priraďte k objektu jeden alebo viac projektov uvedením ich hashtagov. Značky projektov oddeľte medzerami. Napríklad použite `!projects #ios #feature` na pridanie oboch súvisiacich projektov.

Projekty, ktoré sú neplatné alebo nerozpoznané, sa budú ignorovať. Ak nezadáte žiadne značky projektov, tento príkaz nemá žiadny účinok.',
  'Save as Default' => 'Uložiť ako predvolené',
  'Update Throughput' => 'Priepustnosť aktualizácií',
  'Search for projects with particular colors.' => 'Hľadať projekty s konkrétnymi farbami.',
  'Group stuff into big piles.' => 'Zoskupujte veci do veľkých kôp.',
  'Browse Users and Projects' => 'Prehľadávať používateľov a projekty',
  'Add members.' => 'Pridať členov.',
  'New list of members.' => 'Nový zoznam členov.',
  'This project will be moved to the archive.' => 'Tento projekt sa presunie do archívu.',
  'All Triggers' => 'Všetky spúšťače',
  'Create Next Milestone' => 'Vytvoriť ďalší míľnik',
  'Not Tagged With Any Projects' => 'Neoznačené žiadnymi projektmi',
  'This project has milestones.' => 'Tento projekt má míľniky.',
  'Only Match Other Constraints' => 'Zodpovedať len ostatným obmedzeniam',
  'Can Lock Project Membership' => 'Môže uzamknúť členstvo v projekte',
  'This is an unknown rule of type "%s". An administrator may have edited or removed an extension which implements this rule type.' => 'Toto je neznáme pravidlo typu „%s“. Administrátor mohol upraviť alebo odstrániť rozšírenie, ktoré implementuje tento typ pravidla.',
  'Users with access may join and leave this project.' => 'Používatelia s prístupom sa môžu k tomuto projektu pripojiť aj ho opustiť.',
  'Hashtags must contain at least one letter or number. %s project hashtag(s) are invalid: %s.' => array(
    'Hashtagy musia obsahovať aspoň jedno písmeno alebo číslicu. Hashtag „%2$s“ nie je platný.',
    'Hashtagy musia obsahovať aspoň jedno písmeno alebo číslicu. Tieto hashtagy sú neplatné: %2$s.',
  ),
  'Convert to Parent Project' => 'Konvertovať na nadradený projekt',
  'Subprojects can be created for this project.' => 'Pre tento projekt možno vytvárať podprojekty.',
  'Choose a project to move tasks to.' => 'Vyberte projekt, do ktorého sa majú úlohy presunúť.',
  '%s removed %s project(s): %s.' => array(
    
    array(
      '%s odstránil(a) projekt: %3$s.',
      '%s odstránil(a) projekty: %3$s.',
    ),
  ),
  'Trigger names must not be longer than %s characters.' => array(
    'Názvy spúšťačov nesmú byť dlhšie ako %s znak.',
    'Názvy spúšťačov nesmú byť dlhšie ako %s znaky.',
    'Názvy spúšťačov nesmú byť dlhšie ako %s znakov.',
  ),
  'Members: ...' => 'Členovia: …',
  'Create Milestone' => 'Vytvoriť míľnik',
  'Project %s' => 'Projekt %s',
  'Browse Projects' => 'Prehľadávať projekty',
  '%s created this project.' => '%s vytvoril(a) tento projekt.',
  'Expected "newHeaderKeysForObject()" on "%s" to return a map of header keys, but got "%s".' => 'Očakávalo sa, že „newHeaderKeysForObject()“ na „%s“ vráti mapu kľúčov hlavičiek, ale vrátilo „%s“.',
  'Set project tags, overwriting current value.' => 'Nastaviť značky projektu a prepísať aktuálnu hodnotu.',
  'New project name.' => 'Nový názov projektu.',
  'Depths' => 'Hĺbky',
  'Default Join Policy' => 'Predvolená zásada pripojenia',
  'For subprojects and milestones, depth of this project in the tree. Root projects have depth 0.' => 'Pre podprojekty a míľniky hĺbka tohto projektu v strome. Koreňové projekty majú hĺbku 0.',
  'Coin' => 'Minca',
  'This project will become active again.' => 'Tento projekt sa opäť stane aktívnym.',
  'Two different colors ("%s", "%s") are marked as the default color. Only one color may be marked as the default.' => 'Dve rôzne farby („%s“, „%s“) sú označené ako predvolená farba. Ako predvolená smie byť označená len jedna farba.',
  'Project members can take this action.' => 'Túto akciu môžu vykonať členovia projektu.',
  'Apply Filter' => 'Použiť filter',
  'Select project tags for the object.' => 'Vyberte značky projektu pre objekt.',
  'Membership for this project is locked. You can not leave.' => 'Členstvo v tomto projekte je uzamknuté. Nemôžete ho opustiť.',
  '%s removed %d project hashtag(s): %s.' => array(
    
    array(
      '%s odstránil(a) hashtag: %3$s.',
      '%s odstránil(a) hashtagy: %3$s.',
    ),
  ),
  '(Invalid Rule)' => '(Neplatné pravidlo)',
  'Sound ("%s") is not a valid sound.' => 'Zvuk („%s“) nie je platný zvuk.',
  'Custom Filter' => 'Vlastný filter',
  'Subtype of the project.' => 'Podtyp projektu.',
  'Used by Columns' => 'Používajú stĺpce',
  'Additional Hashtags' => 'Ďalšie hashtagy',
  'For milestones, milestone sequence number.' => 'Pre míľniky poradové číslo míľnika.',
  'Priority rule value should be a string, but is not (value is "%s").' => 'Hodnota pravidla priority by mala byť reťazec, ale nie je (hodnota je „%s“).',
  'Get the member list for the project.' => 'Získať zoznam členov projektu.',
  'Get the workboard columns where an object appears.' => 'Získať stĺpce pracovnej nástenky, v ktorých sa objekt nachádza.',
  'Projects User Guide' => 'Používateľská príručka k projektom',
  'Projects: ...' => 'Projekty: …',
  'Search for projects with particular members.' => 'Hľadať projekty s konkrétnymi členmi.',
  'Find projects with a given minimum depth. Root projects have depth 0, their immediate children have depth 1, and so on.' => 'Nájsť projekty s danou minimálnou hĺbkou. Koreňové projekty majú hĺbku 0, ich priami potomkovia hĺbku 1 a tak ďalej.',
  'Group by Status' => 'Zoskupiť podľa stavu',
  'Join Project' => 'Pripojiť sa k projektu',
  'This project has subprojects.' => 'Tento projekt má podprojekty.',
  'Remove projects: %s.' => 'Odstrániť projekty: %s.',
  'Root Projects' => 'Koreňové projekty',
  'Restricted Column' => 'Obmedzený stĺpec',
  'Ripe Peach' => 'Zrelá broskyňa',
  'Remove Trigger' => 'Odstrániť spúšťač',
  'Project Ancestors' => 'Predkovia projektu',
  'Unwatch Project' => 'Prestať sledovať projekt',
  'Show Only Active Triggers' => 'Zobraziť len aktívne spúšťače',
  'Not In: Invalid Project' => 'Nie v: Neplatný projekt',
  'You can not import columns from that workboard because it has no importable columns.' => 'Z tejto pracovnej nástenky nemôžete importovať stĺpce, pretože nemá žiadne importovateľné stĺpce.',
  'Minimum Depth' => 'Minimálna hĺbka',
  'This project is a milestone, and milestones may not have subprojects.' => 'Tento projekt je míľnik a míľniky nemôžu mať podprojekty.',
  '%s removed %s project(s) for %s: %s.' => array(
    
    array(
      '%s odstránil(a) projekt pre %3$s: %4$s.',
      '%s odstránil(a) projekty pre %3$s: %4$s.',
    ),
  ),
  'Default edit policy for newly created projects.' => 'Predvolená zásada úprav pre novo vytvorené projekty.',
  'Trigger ruleset is corrupt: expected a list of rule specifications, found "%s".' => 'Sada pravidiel spúšťača je poškodená: očakával sa zoznam špecifikácií pravidiel, našlo sa „%s“.',
  'User\'s Projects: %s' => 'Projekty používateľa: %s',
  'Show Only Inactive Triggers' => 'Zobraziť len neaktívne spúšťače',
  'Users must be able to see a project to see its board.' => 'Aby používatelia videli nástenku projektu, musia vidieť samotný projekt.',
  'Can Not Hide Default Column' => 'Predvolený stĺpec sa nedá skryť',
  'This function allows you to find results for any of the members of a project:

> members(frontend)' => 'Táto funkcia umožňuje nájsť výsledky pre ktoréhokoľvek člena projektu:

> members(frontend)',
  'Workboard Already Has Columns' => 'Pracovná nástenka už má stĺpce',
  'Project History' => 'História projektu',
  'Move Tasks to Project' => 'Presunúť úlohy do projektu',
  'Browse Viewer Projects' => 'Prehľadávať projekty pozorovateľa',
  'Allows you to define project subtypes. For a more detailed description of
subtype configuration, see @{config:maniphest.subtypes}.' => 'Umožňuje definovať podtypy projektov. Podrobnejší opis
konfigurácie podtypov nájdete v @{config:maniphest.subtypes}.',
  'See full report.' => 'Zobraziť celý prehľad.',
  'Locked Project' => 'Uzamknutý projekt',
  'Not In: ...' => 'Nie v: …',
  '%s changed the point limit for this column from %s to %s.' => '%s zmenil(a) limit bodov pre tento stĺpec z %s na %s.',
  'Fullscreen' => 'Na celú obrazovku',
  'Project colors must include one color marked as the "%s" color, but no such color exists.' => 'Farby projektov musia obsahovať jednu farbu označenú ako farba „%s“, ale žiadna taká farba neexistuje.',
  'Change Background Color' => 'Zmeniť farbu pozadia',
  '%s joined this project.' => '%s sa pripojil(a) k tomuto projektu.',
  'This function matches results which are not tagged with any projects. It is usually most often used to find objects which might have slipped through the cracks and not been organized properly.

%s' => 'Táto funkcia zodpovedá výsledkom, ktoré nie sú označené žiadnymi projektmi. Najčastejšie sa používa na nájdenie objektov, ktoré mohli prepadnúť sitom a neboli riadne usporiadané.

%s',
  'Type a project subtype name...' => 'Napíšte názov podtypu projektu…',
  'Group by Author' => 'Zoskupiť podľa autora',
  'Show Hidden Columns' => 'Zobraziť skryté stĺpce',
  'Search constraint "minDepth" must be no larger than search constraint "maxDepth".' => 'Obmedzenie hľadania „minDepth“ nesmie byť väčšie ako obmedzenie hľadania „maxDepth“.',
  'Show Column' => 'Zobraziť stĺpec',
  'Set Board Default Filter' => 'Nastaviť predvolený filter nástenky',
  'Change project tags.' => 'Zmeniť značky projektu.',
  'Execute searches for Projects.' => 'Vykonávať vyhľadávania projektov.',
  'You must choose a project with a workboard.' => 'Musíte vybrať projekt s pracovnou nástenkou.',
  '(Unknown Rule)' => '(Neznáme pravidlo)',
  '(Default)' => '(Predvolené)',
  'For columns that proxy another object (like a subproject or milestone), the PHID of the object they proxy.' => 'Pre stĺpce, ktoré zastupujú iný objekt (napríklad podprojekt alebo míľnik), PHID objektu, ktorý zastupujú.',
  'Members of the parent project are members of this project.' => 'Členovia nadradeného projektu sú členmi tohto projektu.',
  'Activate and Show Column' => 'Aktivovať a zobraziť stĺpec',
  'Ripe Mango' => 'Zrelé mango',
  'Milestone projects do not support subprojects or milestones.' => 'Míľnikové projekty nepodporujú podprojekty ani míľniky.',
  'Remove project tags.' => 'Odstrániť značky projektu.',
  'Tagged with Project' => 'Označené projektom',
  'The project the column belongs to.' => 'Projekt, do ktorého stĺpec patrí.',
  'Trigger Rules' => 'Pravidlá spúšťača',
  'Owner rule value must have only one elmement (value is "%s").' => 'Hodnota pravidla vlastníka musí mať len jeden prvok (hodnota je „%s“).',
  'Looks Like' => 'Vyzerá ako',
  'Project icons must include one icon marked with special attribute "%s", but no such icon exists.' => 'Ikony projektov musia obsahovať jednu ikonu označenú špeciálnym atribútom „%s“, ale žiadna taká ikona neexistuje.',
  '%s added %d %s hashtag(s): %s.' => array(
    
    array(
      '%s pridal(a) hashtag do %3$s: %4$s.',
      '%s pridal(a) hashtagy do %3$s: %4$s.',
    ),
  ),
  'Adjust project icons.' => 'Upraviť ikony projektov.',
  '%s set the column trigger to %s.' => '%s nastavil(a) spúšťač stĺpca na %s.',
  '%s edited member(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil(a) členov pre %s, pridaní: %4$s; odstránení: %6$s.',
  'Bugs' => 'Chyby',
  'Add Members' => 'Pridať členov',
  'Choose Icon and Color...' => 'Vyberte ikonu a farbu…',
  'No projects found.' => 'Nenašli sa žiadne projekty.',
  '%s disabled the workboard for this project.' => '%s zakázal(a) pracovnú nástenku pre tento projekt.',
  'Count Limit' => 'Limit počtu',
  'Select and reorder project fields.' => 'Vyberte polia projektu a zmeňte ich poradie.',
  'Watchers' => 'Sledovatelia',
  'Trigger ruleset is corrupt: rule type "%s" is unknown.' => 'Sada pravidiel spúšťača je poškodená: typ pravidla „%s“ je neznámy.',
  'Workload: %d of %d open tasks are assigned to %d people.' => 'Pracovné zaťaženie: %d z %d otvorených úloh je pridelených %d ľuďom.',
  'This is a trigger rule with a unknown type ("%s").' => 'Toto je pravidlo spúšťača s neznámym typom („%s“).',
  'Parent or milestone project PHID ("%s") must be the PHID of a valid, visible project which you have permission to edit.' => 'PHID nadradeného alebo míľnikového projektu („%s“) musí byť PHID platného, viditeľného projektu, ktorý máte povolenie upravovať.',
  'Move to milestone %s.' => 'Presunúť do míľnika %s.',
  'Remove project tags' => 'Odstrániť značky projektu',
  'Project icons must include one icon marked as the "%s" icon, but no such icon exists.' => 'Ikony projektov musia obsahovať jednu ikonu označenú ako ikona „%s“, ale žiadna taká ikona neexistuje.',
  'Make the current sort order the new default order for this board? All users will see the new order as the default when they view the board.' => 'Nastaviť aktuálne poradie zoradenia ako nové predvolené poradie tejto nástenky? Všetci používatelia uvidia nové poradie ako predvolené, keď si nástenku zobrazia.',
  'New list of hashtags.' => 'Nový zoznam hashtagov.',
  'Search for projects with particular watchers.' => 'Hľadať projekty s konkrétnymi sledovateľmi.',
  '%s unlocked this project\'s membership.' => '%s odomkol(la) členstvo v tomto projekte.',
  'Workboard Disabled' => 'Pracovná nástenka zakázaná',
  'Add project tags.' => 'Pridať značky projektu.',
  '%s project hashtag(s) are already used by other projects: %s.' => array(
    'Hashtag projektu „%2$s“ už používa iný projekt.',
    'Niektoré hashtagy projektu už používajú iné projekty: %2$s.',
  ),
  'Workload: All %d open tasks are assigned to %d people.' => 'Pracovné zaťaženie: Všetkých %d otvorených úloh je pridelených %d ľuďom.',
  'The project icon ("%s") with special attribute "%s" must not be disabled' => 'Ikona projektu („%s“) so špeciálnym atribútom „%s“ nesmie byť zakázaná',
  'Sort by Points' => 'Zoradiť podľa bodov',
  '%s enabled the workboard for this project.' => '%s povolil(a) pracovnú nástenku pre tento projekt.',
  'Disable Project Mail' => 'Zakázať e-maily projektu',
  'Remove task assignee.' => 'Odstrániť riešiteľa úlohy.',
  'User PHID ("%s") is not a valid user.' => 'PHID používateľa („%s“) nie je platný používateľ.',
  'Primary hashtag.' => 'Primárny hashtag.',
  'Trigger' => 'Spúšťač',
  'Show Only Active Projects' => 'Zobraziť len aktívne projekty',
  'Archive Subproject' => 'Archivovať podprojekt',
  'Move to column %s.' => 'Presunúť do stĺpca %s.',
  'PHID of the parent project.' => 'PHID nadradeného projektu.',
  'Allows you to change and customize the available project icons.

You can find a list of available icons in {nav UIExamples > Icons and Images}.

Configure a list of icon specifications. Each icon specification should be
a dictionary, which may contain these keys:

  - `key` //Required string.// Internal key identifying the icon.
  - `name` //Required string.// Human-readable icon name.
  - `icon` //Required string.// Specifies which actual icon image to use.
  - `image` //Optional string.// Selects a default image. Select an image from
    `resources/builtins/projects/`.
  - `default` //Optional bool.// Selects a default icon. Exactly one icon must
    be selected as the default.
  - `disabled` //Optional bool.// If true, this icon will no longer be
    available for selection when creating or editing projects.
  - `special` //Optional string.// Marks an icon as a special icon:
    - `milestone` This is the icon for milestones. Exactly one icon must be
      selected as the milestone icon.

You can look at the default configuration below for an example of a valid
configuration.' => 'Umožňuje meniť a prispôsobovať dostupné ikony projektov.

Zoznam dostupných ikon nájdete v {nav UIExamples > Icons and Images}.

Nakonfigurujte zoznam špecifikácií ikon. Každá špecifikácia ikony by mala byť
slovník, ktorý môže obsahovať tieto kľúče:

  - `key` //Povinný reťazec.// Interný kľúč identifikujúci ikonu.
  - `name` //Povinný reťazec.// Názov ikony čitateľný pre človeka.
  - `icon` //Povinný reťazec.// Určuje, ktorý skutočný obrázok ikony sa má použiť.
  - `image` //Voliteľný reťazec.// Vyberá predvolený obrázok. Vyberte obrázok z
    `resources/builtins/projects/`.
  - `default` //Voliteľný boolovský údaj.// Vyberá predvolenú ikonu. Ako predvolená
    musí byť vybraná práve jedna ikona.
  - `disabled` //Voliteľný boolovský údaj.// Ak je true, táto ikona už nebude
    dostupná na výber pri vytváraní alebo úprave projektov.
  - `special` //Voliteľný reťazec.// Označuje ikonu ako špeciálnu ikonu:
    - `milestone` Toto je ikona pre míľniky. Ako ikona míľnika musí byť
      vybraná práve jedna ikona.

Príklad platnej konfigurácie nájdete v predvolenej konfigurácii
nižšie.',
  'Project name generates the same hashtag ("%s") as another existing project. Choose a unique name.' => 'Názov projektu generuje rovnaký hashtag („%s“) ako iný existujúci projekt. Vyberte jedinečný názov.',
  'Project names must contain at least one letter or number.' => 'Názvy projektov musia obsahovať aspoň jedno písmeno alebo číslicu.',
  'This function matches results in any of the current viewing user\'s projects:

> viewerprojects()

This normally means //your// projects, but if you save a query using this function and send it to someone else, it will mean //their// projects when they run it (they become the current viewer). This can be useful for building dashboard panels.' => 'Táto funkcia zodpovedá výsledkom v ktoromkoľvek z projektov aktuálne prezerajúceho používateľa:

> viewerprojects()

To zvyčajne znamená //vaše// projekty, ale ak dopyt s touto funkciou uložíte a pošlete niekomu inému, pri jeho spustení to bude znamenať //jeho// projekty (stane sa aktuálnym pozorovateľom). Môže to byť užitočné pri zostavovaní panelov nástenky.',
  'Apply transactions to create a new project or edit an existing one.' => 'Použiť transakcie na vytvorenie nového projektu alebo úpravu existujúceho.',
  'Short project description.' => 'Krátky opis projektu.',
  '%s changed project hashtag(s), added %d: %s; removed %d: %s.' => '%s zmenil(a) hashtagy projektu, pridané: %3$s; odstránené: %5$s.',
  'Icon special attribute "%s" is not valid. Recognized special attributes are: %s.' => 'Špeciálny atribút ikony „%s“ nie je platný. Rozpoznané špeciálne atribúty sú: %s.',
  'Bulk Edit Tasks...' => 'Hromadne upraviť úlohy…',
  'This trigger has no rules.' => 'Tento spúšťač nemá žiadne pravidlá.',
  '%s removed the trigger for this column (was %s).' => '%s odstránil(a) spúšťač pre tento stĺpec (bol %s).',
  '%d day(s)' => array(
    '%d deň',
    '%d dni',
    '%d dní',
  ),
  'Import board columns from another project.' => 'Importovať stĺpce nástenky z iného projektu.',
  'Select project members.' => 'Vyberte členov projektu.',
  'Remove %s as a watcher of %s?' => 'Odstrániť používateľa %s ako sledovateľa projektu %s?',
  '%s changed the background color of the project workboard.' => '%s zmenil(a) farbu pozadia pracovnej nástenky projektu.',
  'Expected "newSortVectorsForObjects()" on "%s" to return a map of vectors, but got "%s".' => 'Očakávalo sa, že „newSortVectorsForObjects()“ na „%s“ vráti mapu vektorov, ale vrátilo „%s“.',
  'List of custom fields for project tags.

For details on adding new fields, see [[ %s | %s ]] in the
documentation.' => 'Zoznam vlastných polí pre značky projektov.

Podrobnosti o pridávaní nových polí nájdete v dokumentácii
v [[ %s | %s ]].',
  'Workboard: %s' => 'Pracovná nástenka: %s',
  'This project does not have any members.' => 'Tento projekt nemá žiadnych členov.',
  'Define project subtypes.' => 'Definovať podtypy projektov.',
  'Move Tasks to Column' => 'Presunúť úlohy do stĺpca',
  'You can not hide the default/backlog column on a board.' => 'Predvolený stĺpec/stĺpec zásobníka na nástenke nemôžete skryť.',
  'Read information about workboard columns.' => 'Čítať informácie o stĺpcoch pracovnej nástenky.',
  'This function allows you to find results which are not tagged with one or more projects. For example, use this query to find results which are not associated with a specific project:

> not(vanilla)

You can exclude multiple projects. This will cause the query to return only results which are not in any of the excluded projects:

> not(vanilla), not(chocolate)

You can combine this function with other functions to refine results. For example, use this query to find iOS results which are not bugs:

> ios, not(bug)' => 'Táto funkcia umožňuje nájsť výsledky, ktoré nie sú označené jedným alebo viacerými projektmi. Napríklad týmto dopytom nájdete výsledky, ktoré nie sú priradené ku konkrétnemu projektu:

> not(vanilla)

Môžete vylúčiť viacero projektov. Dopyt potom vráti len výsledky, ktoré nie sú v žiadnom z vylúčených projektov:

> not(vanilla), not(chocolate)

Túto funkciu môžete kombinovať s inými funkciami na spresnenie výsledkov. Napríklad týmto dopytom nájdete výsledky pre iOS, ktoré nie sú chybami:

> ios, not(bug)',
  'When mail is sent to members of this project, you will no longer receive a copy.' => 'Keď sa členom tohto projektu odošle e-mail, kópiu už nedostanete.',
  'Make the current filter the new default filter for this board? All users will see the new filter as the default when they view the board.' => 'Nastaviť aktuálny filter ako nový predvolený filter tejto nástenky? Všetci používatelia uvidia nový filter ako predvolený, keď si nástenku zobrazia.',
  '%s renamed this trigger from %s to %s.' => '%s premenoval(a) tento spúšťač z %s na %s.',
  'Get the watcher list for the project.' => 'Získať zoznam sledovateľov projektu.',
  'Tasks Moved Out of Project' => 'Úlohy presunuté mimo projektu',
  'Project names must not be longer than %s character(s).' => array(
    'Názvy projektov nesmú byť dlhšie ako %s znak.',
    'Názvy projektov nesmú byť dlhšie ako %s znaky.',
    'Názvy projektov nesmú byť dlhšie ako %s znakov.',
  ),
  'Default join policy for newly created projects.' => 'Predvolená zásada pripojenia pre novo vytvorené projekty.',
  '%s stripped the name %s from this trigger.' => '%s odstránil(a) názov %s z tohto spúšťača.',
  'Project tags removed' => 'Odstránené značky projektu',
  'Play sound %s.' => 'Prehrať zvuk %s.',
  'Search for objects tagged with given projects.' => 'Hľadať objekty označené danými projektmi.',
  'Create Column' => 'Vytvoriť stĺpec',
  'Choose a valid project to move tasks to.' => 'Vyberte platný projekt, do ktorého sa majú úlohy presunúť.',
  'Change Project Tags' => 'Zmeniť značky projektu',
  '%s edited project(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil(a) projekty pre %s, pridané: %4$s; odstránené: %6$s.',
  'Project colors must have unique keys, but two icons share the same key ("%s").' => 'Farby projektov musia mať jedinečné kľúče, ale dve ikony zdieľajú rovnaký kľúč („%s“).',
  'Type members(<project>)...' => 'Napíšte members(<projekt>)…',
  'Project name.' => 'Názov projektu.',
  'Select results with no tags.' => 'Vybrať výsledky bez značiek.',
  'No Background' => 'Bez pozadia',
  'Project Workboard' => 'Pracovná nástenka projektu',
  'Color key "%s" is not a valid color key. The supported color keys are: %s.' => 'Kľúč farby „%s“ nie je platný kľúč farby. Podporované kľúče farieb sú: %s.',
  'Age Distribution:' => 'Rozdelenie podľa veku:',
  'Type "not tagged with any projects"...' => 'Napíšte „neoznačené žiadnymi projektmi“…',
  'Add project rule value should be a list, but is not (value is "%s").' => 'Hodnota pravidla na pridanie projektu by mala byť zoznam, ale nie je (hodnota je „%s“).',
  'Project name, hashtags, icon, image, or color changes.' => 'Zmení sa názov, hashtagy, ikona, obrázok alebo farba projektu.',
  'Used on %s active column(s).' => array(
    'Použité na %s aktívnom stĺpci.',
    'Použité na %s aktívnych stĺpcoch.',
  ),
  'True if this is the default column.' => 'True, ak je toto predvolený stĺpec.',
  'Milestones' => 'Míľniky',
  'Configure Project Forms' => 'Konfigurovať formuláre projektov',
  '%s removed %d project member(s): %s.' => array(
    
    array(
      '%s odstránil(a) člena: %3$s.',
      '%s odstránil(a) členov: %3$s.',
    ),
  ),
  'Points Bar' => 'Ukazovateľ bodov',
  'members of all projects' => 'členovia všetkých projektov',
  'Find results for members of a project.' => 'Nájsť výsledky pre členov projektu.',
  '%s set this project\'s image to %s.' => '%s nastavil(a) obrázok tohto projektu na %s.',
  'Natural' => 'Prirodzené',
  'For subprojects and milestones, a brief description of the parent project.' => 'Pre podprojekty a míľniky krátky opis nadradeného projektu.',
  'Parent projects and milestones do not support adding members. You can add members directly to any non-parent subproject.' => 'Nadradené projekty a míľniky nepodporujú pridávanie členov. Členov môžete pridať priamo do ktoréhokoľvek podprojektu, ktorý nie je nadradeným projektom.',
  'Pass true to find only root projects, or false to omit root projects.' => 'Zadajte true, ak chcete nájsť len koreňové projekty, alebo false, ak chcete koreňové projekty vynechať.',
  '%s set this project\'s icon to %s.' => '%s nastavil(a) ikonu tohto projektu na %s.',
  'Add projects: %s.' => 'Pridať projekty: %s.',
  'Project Points' => 'Body projektu',
  'Use Icon and Color' => 'Použiť ikonu a farbu',
  'Not a Member' => 'Nie je členom',
  'New project icon.' => 'Nová ikona projektu.',
  'This project does not support editing membership.' => 'Tento projekt nepodporuje úpravu členstva.',
  'Milestone' => 'Míľnik',
  'Are you sure you want to hide this column? It will no longer appear on the workboard.' => 'Naozaj chcete skryť tento stĺpec? Už sa nebude zobrazovať na pracovnej nástenke.',
  'Project depth is too great.' => 'Hĺbka projektu je príliš veľká.',
  '%s removed the custom name of this column.' => '%s odstránil(a) vlastný názov tohto stĺpca.',
  'Remove %s as a project member of %s?' => 'Odstrániť používateľa %s ako člena projektu %s?',
  'This column does not have a trigger.' => 'Tento stĺpec nemá spúšťač.',
  'Show Only Root Projects' => 'Zobraziť len koreňové projekty',
  'Search for projects with particular icons.' => 'Hľadať projekty s konkrétnymi ikonami.',
  'You do not have permission to lock project membership.' => 'Nemáte povolenie uzamknúť členstvo v projekte.',
  'Edit Trigger: %s' => 'Upraviť spúšťač: %s',
  '%s named this trigger %s.' => '%s pomenoval(a) tento spúšťač %s.',
  'Column names must not be longer than %s characters.' => array(
    'Názvy stĺpcov nesmú byť dlhšie ako %s znak.',
    'Názvy stĺpcov nesmú byť dlhšie ako %s znaky.',
    'Názvy stĺpcov nesmú byť dlhšie ako %s znakov.',
  ),
  'Members and Watchers' => 'Členovia a sledovatelia',
  'You can not add subprojects to this project.' => 'K tomuto projektu nemôžete pridávať podprojekty.',
  '%s: Burnup / Burndown Rate' => '%s: Miera burnup/burndown',
  'Remove Member' => 'Odstrániť člena',
  'Unable to Create Workboard' => 'Pracovnú nástenku sa nepodarilo vytvoriť',
  '%s Subprojects' => 'Podprojekty projektu %s',
  'Disable Mail' => 'Zakázať e-maily',
  'Week' => 'Týždeň',
  'Tasks resolved this %s: %d' => 'Úlohy vyriešené v období %s: %d',
  'Milestone Name' => 'Názov míľnika',
  'Move Tasks' => 'Presunúť úlohy',
  '%s set the icon for %s to %s.' => '%s nastavil(a) ikonu pre %s na %s.',
  'You must select at least one user or project tag to add.' => 'Musíte vybrať aspoň jedného používateľa alebo jednu značku projektu, ktoré chcete pridať.',
  'Watching a project will let you monitor it closely. You will receive email and notifications about changes to every object tagged with projects you watch.' => 'Sledovanie projektu vám umožní pozorne ho sledovať. Budete dostávať e-maily a upozornenia o zmenách každého objektu označeného projektmi, ktoré sledujete.',
  '%s unhid this column.' => '%s zobrazil(a) tento skrytý stĺpec.',
  'Visible Columns' => 'Viditeľné stĺpce',
  'Task priority value ("%s") is not a valid task priority. Valid priorities are: %s.' => 'Hodnota priority úlohy („%s“) nie je platná priorita úlohy. Platné priority sú: %s.',
  'Play sound' => 'Prehrať zvuk',
  'Browse Only' => 'Len prehľadávať',
  'This rule (of type "%s") is invalid: %s' => 'Toto pravidlo (typu „%s“) je neplatné: %s',
  '%s removed %d %s hashtag(s): %s.' => array(
    
    array(
      '%s odstránil(a) hashtag z %3$s: %4$s.',
      '%s odstránil(a) hashtagy z %3$s: %4$s.',
    ),
  ),
  'Change priority to %s.' => 'Zmeniť prioritu na %s.',
  'Throughput' => 'Priepustnosť',
  'Used on %s column(s).' => array(
    'Použité na %s stĺpci.',
    'Použité na %s stĺpcoch.',
  ),
  'Really remove the trigger from this column?' => 'Naozaj odstrániť spúšťač z tohto stĺpca?',
  '%s edited %s project(s), added %s: %s; removed %s: %s.' => '%s upravil(a) projekty, pridané: %4$s; odstránené: %6$s.',
  'Save Trigger' => 'Uložiť spúšťač',
  'Configuration must be a list of project icon specifications.' => 'Konfigurácia musí byť zoznam špecifikácií ikon projektov.',
  'Enable Workboard' => 'Povoliť pracovnú nástenku',
  'Previous Milestone' => 'Predchádzajúci míľnik',
);
  }

}
