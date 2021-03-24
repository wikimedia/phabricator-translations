<?php

final class PhabricatorManiphestHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Feladat létrehozása',
      'Triage' => 'Vészhelyzet',
      'Define task subtypes.' => 'Feladat altípusainak meghatározása.',
      '%s removed %s as the assignee of this task.' => '%s eltávolította %s-t mint a feladat felelősét.',
      'Priority of the task.' => 'A feladat fontossága.',
      'Weigh In' => 'Lemérés',
      'Task Fields' => 'Feladat mezői',
      'Assignee' => 'Felelős',
      'Open Parents' => 'Nyitott szülők',
      'Update an existing Maniphest task.' => 'Meglévő Maniphest feladatok frissítése.',
      'List of columns to move the task to.' => 'Az olszopok, melyekbe a feladatot mozgatjuk.',
      'A task\'s subscribers change.' => 'A feladat feliratkozói változtak.',
      'Oldest open task, excluding those with Low or Wishlist priority.' => 'A legrégebbi nyitott feladat, nem beleértve az "Alacsony" és a "Kívánságlistás" prioritásúakat.',
      'Change Points' => 'Pontok változtatása',
      'Returns information about the possible statuses for Maniphest tasks.' => 'Visszatér az információkkal a Maniphest feladatok lehetséges státuszairól.',
      '%s closed %s as %s.' => '%s lezárta %s-t, mint %s.',
      'This task has been locked.' => 'Ez a feladat zárolva lett.',
      '%s added %s commit(s) to %s: %s.' => '%s hozzáadott %s commitot ehhez: %s: %s.',
      'Edits Locked' => 'Szerkesztés zárolva',
      '%s claimed %s.' => '%s elvállalta ezt: %s.',
      'TASK DETAIL' => 'FELADAT RÉSZLETEI',
      'The task already has the selected owner.' => 'Ennek a feladatnak már van tulajdonosa.',
      '%s closed this task as a duplicate by committing %s.' => '%s lezárta ezt a feladatot duplikátumként a(z) %s committal.',
      'Search Subtasks' => 'Alfeladatok keresése',
      'Merged' => 'Összevonva',
      'Closed after %s' => 'Lezárva %s után',
      'Changed Task Priority' => 'Feladat prioritása megváltozott',
      'Retrieve Maniphest task transactions.' => 'Maniphest tranzakciók lekérdezése.',
      'New task name.' => 'Új feladat neve.',
      '%s changed the point value for this task from %s to %s.' => '%s megváltoztatta a pont értékét a feladatnak %s-ről/ról %s-re/ra.',
      'Changed task priority to "%s".' => 'Feladat prioritása megváltozott a következőre: "%s".',
      'Tasks must have a title.' => 'A feladatok címének megadása kötelező.',
      'Oldest (Pri)' => 'Legrégebbi (Pri)',
      'Bad Key' => 'Rossz kulcs',
      'Tasks with edits locked may only be edited by their owner.' => 'A zárolt feladatokat csak a tulajdonosok szerkeszthetik.',
      'Unblock' => 'Blokkolás feloldása',
      'Select and reorder task fields.' => 'Feladat mezők kiválasztása és átrendezése.',
      'Description Preview' => 'Leírás előnézet',
      '%s changed the subtype of %s from "%s" to "%s".' => '%s megváltoztatta a %s altípusát „%s” altípusról „%s” altípusra.',
      'Oldest open task.' => 'A legrégebbi nyitott feladat.',
      'Duplicates Merged Here' => 'Ide beolvasztott duplikátumok',
      'Change the parents of this task.' => 'A feladat szüleinek megváltoztatása.',
      'Subtasks' => 'Alfeladatok',
      'Update has no effect.' => 'A frissítésnek nem lett hatása.',
      '○ %s' => '○ %s',
      'Maniphest Reports' => 'Maniphest riportok',
      'Update the task description.' => 'A feladat leírásának frissítése.',
      'From Email' => 'Email feladója',
      'Show Only Tasks With Open Parents' => 'Csak nyitott szülőkkel rendelkező feladatok megjelenítése',
      'Needs Triage' => 'Vészhelyzet szükséges',
      'Mentioned In' => 'Meg lett említve itt:',
      'Minimal Valid Config' => 'Minimális érvényes konfiguráció',
      'Story Points' => 'Sztori pontok',
      'Closed, Spite' => 'Lezárva, rosszindulatú',
      '%s closed this task as a duplicate of %s.' => '%s lezárta ezt a feladatot %s duplikátumaként.',
      'Set Sail for Adventure' => 'Kalandra fel',
      'Recently Closed' => 'Nemrég lezárt',
      'Assigned Task' => 'Feladat felelőssel',
      '%s updated the task description for %s.' => '%s frissítette a(z) %s feladat leírását.',
      'Status set to invalid value.' => 'A státusz értéke érvénytelen.',
      '[Maniphest]' => '[Maniphest]',
      'Search for tasks with given statuses.' => 'Feladatok keresése státusz alapján.',
      'Task Has Revision' => 'A feladatnak változatai vannak',
      'Unbreak Now!' => 'Feloldás most!',
      'Change Story Points' => 'Sztori pontok változtatása',
      'Configure point values for tasks.' => 'A feladatok pont értékeinek beállítása.',
      'Validate "%s"' => '"%s" érvényesítése',
      'This task is locked. Edit it anyway?' => 'Ez a feladat zárolt. Mindenképp szerkeszteni szeretnéd?',
      'Create a task in a workboard column.' => 'Feladat létrehozása a munkatáblán.',
      'Search for tasks with given priorities.' => 'Feladatok keresése státusz alapján.',
      'Original task author.' => 'Eredeti szerzője a feladatnak.',
      'Information about task priority.' => 'Információ a feladat prioritásáról.',
      'Valid setting' => 'Érvényes beállítás',
      'Open Subtasks' => 'Nyitott alfeladatok',
      '%s removed %s parent task(s): %s.' => '%s eltávolított %s szülőfeladatot: %s.',
      'Assign a task to a specific user.' => 'A feladat hozzárendelése egy megadott felhasználóhoz.',
      'Date Closed (Latest First)' => 'Lezárás napja (legújabb először)',
      'Merged In' => 'Merge-elve itt:',
      'Date Closed' => 'Lezárás napja',
      'Edit Related Tasks...' => 'Kapcsolódó feladatok szerkesztése…',
      'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here. Use %s to show more of the graph.' => 'Ez a feladat több mint %s másik feladathoz kapcsolódik. Csak a közvetlen szülő- és alfeladatok jelennek meg itt, a teljes gráfért lásd: %s.',
      'A task\'s owner changes.' => 'A feladat tulajdonosa változik.',
      'No tasks found.' => 'Nem található feladat.',
      'Can Bulk Edit Tasks' => 'Tömegesen szerkesztheti a feladatokat',
      'Finished' => 'Kész',
      'Estimated number of hours this will take.' => 'Ehhez szükséges becsült idő.',
      '(Up For Grabs)' => '(Gazdára vár)',
      'Assign task to: %s.' => 'Feladat hozzárendelése a következőhöz: %s.',
      'Assigned task to: %s.' => 'A feladat felelőse: %s.',
      'Current task owner, if task is assigned.' => 'Feladat tulajdonosa, ha van felelőse.',
      'Show Only Tasks Without Open Parents' => 'Csak nyitott szülők nélküli feladatok megjelenítése',
      'All Time' => 'Mindenkor',
      '%s removed the point value for this task.' => '%s eltávolította a pontértéket a feladatról.',
      '%s added %s parent task(s): %s.' => '%s hozzáadott %s szülőfeladatot: %s.',
      'Subtask' => 'Alfeladat',
      'Points' => 'Pont',
      'The task description.' => 'A feladat leírása.',
      'Filter By Project' => 'Szűrés projektre',
      '%s claimed this task.' => '%s elvállalta ezt a feladatot.',
      'Untitled Task' => 'Cím nélküli feladat',
      '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.' => '%s szerkesztette %s szülőfeladatait, hozzáadva %s: %s, eltávolítva %s: %s.',
      'Edit Subtasks' => 'Alfeladatok szerkesztése',
      '%s assigned this task to %s.' => '%s a feladat felelősévé tette %s-t.',
      'Change status to: %s.' => 'Státuszváltás a következőre: %s.',
      'No Forms' => 'Nincsenek űrlapok',
      'Hours Config' => 'Óra beállítás',
      '%s edited %s revision(s), added %s: %s; removed %s: %s.' => '%s szerkesztette a(z) %s változato(ka)t, hozzáadva %s: %s; eltávolítva %s: %s.',
      '%s updated the task description.' => '%s frissítette a feladat leírását.',
      '%s added %s revision(s) to %s: %s.' => '%s hozzáadott %s változatot ehhez: %s: %s.',
      'Closed, Duplicate' => 'Lezárva, duplikált',
      'task author' => 'feladat létrehozója',
      'Status of the task.' => 'A feladat státusza.',
      'Subtasks.' => 'Alfeladatok.',
      '%s closed this task as %s.' => '%s lezárta ezt a feladatot %s eredménnyel.',
      'PHID of the parent task.' => 'A szülőfeladat PHID-ja.',
      'Configure Maniphest.' => 'Maniphest konfigurálása.',
      'Search...' => 'Keresés…',
      'Task Graph' => 'Feladat diagram',
      'Parent IDs' => 'Szülő ID-k',
      'Invalid Key' => 'Érvénytelen kulcs',
      'Show Only Tasks With Open Subtasks' => 'Csak nyitott alfeladatokkal rendelkező feladatok megjelenítése',
      '(Not Assigned)' => '(Nincs felelőse)',
      '%s added %s revision(s): %s.' => '%s hozzáadott %s változatot: %s.',
      '(Ungrouped)' => '(Nincs csoport)',
      'Task' => 'Feladat',
      'Blocker' => 'Blokkoló',
      'Close As Duplicate' => 'Lezárás mint duplikáció',
      'Reassigned' => 'Újra hozzárendelve',
      'Change the task status.' => 'Feladat státuszának módosítása.',
      'Block' => 'Blokkolás',
      'Claimed' => 'Elvállalva',
      'New task point value.' => 'Új feladat pont érték.',
      'Mentions' => 'Említések',
      'Select All' => 'Összes kijelölése',
      'This task has no parent tasks and no subtasks, so there is no graph to draw.' => 'Ennek a feladatnak nincsenek szülő- vagy alfeladatai, így nincs mit felrajzolni a gráfra.',
      'Task Author' => 'Feladat létrehozója',
      '(No Project)' => '(Nincs projekt)',
      'Duplicates' => 'Duplikációk',
      'Task Locked' => 'Elzárt feladatok',
      'Edit Task: %s' => 'Feladat szerkesztése: %s',
      'Priorities' => 'Priorítások',
      'Priority Name' => 'Prioritás neve',
      'Task description.' => 'Feladat leírása.',
      'Current Subtasks' => 'Aktuális alfeladatok',
      'Change the subtasks of this task.' => 'Alfeladatok módosítása',
      'Task Has Commit' => 'A feladathoz commit tartozik',
      'Save Subtasks' => 'Alfeladatok mentése',
      'Task Priority' => 'Feladat priorítás',
      'Parent Task' => 'Szülő feladat',
      'Parent tasks.' => 'Szülőfeladatok.',
      'Edit Parent Tasks' => 'Szülőfeladatok szerkesztése',
      'Spite' => 'Rosszindulatú',
      'Set title to' => 'Cím beállítása erre',
      '%s assigned %s to %s.' => '%s a(z) %3$s felelősének tette %2$s-t.',
      'Edit Task' => 'Feladat szerkesztése',
      'Low' => 'Alacsony',
      'The author of this task can take this action.' => 'Ezt a műveletet a feladat szerzője végezheti el.',
      'Save Parent Tasks' => 'Szülőfeladatok mentése',
      'Points Config' => 'Pontok beállítása',
      'Current Parent Tasks' => 'Jelenlegi szülőfeladatok',
      'Related Objects' => 'Kapcsolódó objektumok',
      'High' => 'Magas',
      'Search for tasks with given subtypes.' => 'Feladatok keresése altípusok alapján.',
      'Changed Status' => 'Státusz módosítva',
      'Wontfix' => 'Javítás elutasítva',
      '%s removed %s revision(s): %s.' => '%s törölt %s változatot: %s.',
      'Show Only Tasks Without Open Subtasks' => 'Csak nyitott alfeladat nélküli feladatok megjelenítése',
      'Task Unassigned' => 'Feladat nincs hozzárendelve',
      'Reassign the task.' => 'Feladat újra hozzárendelése',
      'Assign task to rule author.' => 'Tegye a feladat felelősévé a szabály szerzőjét.',
      '%s removed %s parent task(s) for %s: %s.' => '%s eltávolította %3$s %2$s szülőfeladatát: %s.',
      'Edit Related Mocks' => 'Kapcsolódó Mock-ok szerkesztése',
      'The source object has the destination object as a parent.' => 'A forrásobjektumnak szülője a célobjektum.',
      'Maniphest Task' => 'Maniphest feladat',
      'List of parent task PHIDs.' => 'A szülőfeladatok PHID-jinak listája.',
      'Assign to' => 'Fefelős',
      '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' => '%s szerkesztette a(z) %s változato(ka)t itt: %s, hozzáadva %s: %s; eltávolítva %s: %s.',
      '%s added %s parent task(s) for %s: %s.' => '%s hozzáadott %s szülőfeladatot a(z) %s feladathoz: %s.',
      '%s closed this task as a duplicate.' => '%s lezárta ezt a feladatot duplikátumként.',
      'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here.' => 'Ez a feladat több mint %s másik feladathoz kapcsolódik. Csak a közvetlen szülő- és alfeladatok jelennek meg itt.',
      '%s removed %s revision(s) from %s: %s.' => '%s törölt %s változatot innen: %s: %s.',
      '%s merged %s task(s): %s.' => '%s beolvasztott %s feladatot: %s.',
      'Search Parent Tasks' => 'Szülőfeladatok keresése',
      'Assigned' => 'Felelős',
      '%s merged task %s into %s.' => '%s beolvasztotta a(z) %s feladatot a(z) %s feladatba.',
      '%s changed the subtype of this task from "%s" to "%s".' => '%s megváltoztatta a feladat altípusát erről: "%s", erre: "%s".',
      'The source task is associated with the destination revision.' => 'A forrás feladat hozzá lett rendelve a cél változathoz.',
      'Subtype of the task.' => 'A feladat altípusa.',
      'Revisions and Commits' => 'Változatok és commitok',
      'Parent task identifier "%s" does not identify a visible task.' => 'A(z) „%s” szülőfeladat-azonosító nem azonosít látható feladatot.',
      'Assign / Claim' => 'Hozzárendelés / Elvállalás',
      'This task has no related commits or revisions.' => 'Ehhez a feladathoz nincs kapcsolódó commit vagy változat.',
      'Choose Subtype' => 'Altípus választása',
    );
  }

}
