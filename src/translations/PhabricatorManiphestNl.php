<?php

final class PhabricatorManiphestNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Create Task' => 'Taak aanmaken',
  'Burnup Rate' => 'Burnup-snelheid',
  'Triage' => 'Triage',
  'Define task subtypes.' => 'Taaksubtypen definiëren.',
  '%s removed %s as the assignee of this task.' => '%s heeft %s als toegewezene van deze taak verwijderd.',
  'Priority of the task.' => 'Prioriteit van de taak.',
  'Weigh In' => 'Geef uw mening',
  'Task Fields' => 'Taakvelden',
  'Assignee' => 'Toegewezen aan',
  'Open Parents' => 'Open bovenliggende taken',
  'Update an existing Maniphest task.' => 'Een bestaande Maniphest-taak bijwerken.',
  'List of columns to move the task to.' => 'Lijst met kolommen waarnaar de taak verplaatst moet worden.',
  'A task\'s subscribers change.' => 'De abonnees van een taak wijzigen.',
  'Change Points' => 'Punten wijzigen',
  'Returns information about the possible statuses for Maniphest tasks.' => 'Geeft informatie over de mogelijke statussen voor Maniphest-taken.',
  '%s closed %s as %s.' => '%s heeft %s gesloten als %s.',
  'This task has been locked.' => 'Deze taak is vergrendeld.',
  '%s added %s commit(s) to %s: %s.' => '%s heeft %s commit(s) toegevoegd aan %s: %s.',
  'Edits Locked' => 'Bewerkingen vergrendeld',
  '%s claimed %s.' => '%s heeft %s geclaimd.',
  'TASK DETAIL' => 'TAAKDETAILS',
  '%s closed this task as a duplicate by committing %s.' => '%s heeft deze taak als duplicaat gesloten door %s te committen.',
  'Search for tasks closed before a certain date.' => 'Zoeken naar taken die vóór een bepaalde datum zijn gesloten.',
  'Search Subtasks' => 'Subtaken zoeken',
  'Merged' => 'Samengevoegd',
  'Closed after %s' => 'Gesloten na %s',
  'Changed Task Priority' => 'Taakprioriteit gewijzigd',
  'Retrieve Maniphest task transactions.' => 'Maniphest-taaktransacties ophalen.',
  'New task name.' => 'Nieuwe taaknaam.',
  '%s changed the point value for this task from %s to %s.' => '%s heeft de puntwaarde voor deze taak gewijzigd van %s naar %s.',
  'Changed task priority to "%s".' => 'Taakprioriteit gewijzigd naar "%s".',
  'Tasks must have a title.' => 'Taken moeten een titel hebben.',
  'Retrieve information about possible Maniphest task status values.' => 'Informatie ophalen over mogelijke Maniphest-taakstatuswaarden.',
  'Oldest (Pri)' => 'Oudste (pri)',
  'Unblock' => 'Deblokkeren',
  'Select and reorder task fields.' => 'Taakvelden selecteren en herordenen.',
  'Description Preview' => 'Beschrijvingsvoorbeeld',
  '%s changed the subtype of %s from "%s" to "%s".' => '%s heeft het subtype van %s gewijzigd van "%s" naar "%s".',
  'Configuration defines no task status with special attribute "%s", but you must specify a status which fills this special role.' => 'De configuratie definieert geen taakstatus met het speciale kenmerk "%s", maar u moet een status opgeven die deze speciale rol vervult.',
  'Oldest open task.' => 'Oudste open taak.',
  'Duplicates Merged Here' => 'Hier samengevoegde duplicaten',
  'Change the parents of this task.' => 'De bovenliggende taken van deze taak wijzigen.',
  'You can only select a parent task when creating a transaction for the first time.' => 'U kunt alleen een bovenliggende taak selecteren bij het voor de eerste keer aanmaken van een transactie.',
  'Subtasks' => 'Subtaken',
  'Update has no effect.' => 'Bijwerken heeft geen effect.',
  '○ %s' => '○ %s',
  'Maniphest Reports' => 'Maniphest-rapporten',
  'This task is closed as a duplicate. Only comment if you think that this task is not a duplicate.' => 'Deze taak is gesloten als duplicaat. Reageer alleen als u denkt dat deze taak geen duplicaat is.',
  'Search for tasks which have specific subtasks.' => 'Zoeken naar taken met specifieke subtaken.',
  'Update the task description.' => 'De taakbeschrijving bijwerken.',
  'From Email' => 'Van e-mail',
  'List of related commit PHIDs.' => 'Lijst met gerelateerde commit-PHID\'s.',
  'Show Only Tasks With Open Parents' => 'Alleen taken met open bovenliggende taken weergeven',
  'Needs Triage' => 'Triage nodig',
  'Minimal Valid Config' => 'Minimale correcte configuratie',
  'The source task is associated with the destination commit.' => 'De brontaak is gekoppeld aan de doelcommit.',
  'Story Points' => 'Storypunten',
  'Closed, Spite' => 'Gesloten, uit rancune',
  '%s changed file(s), attached %s: %s; detached %s: %s.' => '%s heeft bestand(en) gewijzigd, %s gekoppeld: %s; %s losgekoppeld: %s.',
  '%s closed this task as a duplicate of %s.' => '%s heeft deze taak gesloten als duplicaat van %s.',
  'Task IDs must be integer numbers.' => 'Taak-ID\'s moeten gehele getallen zijn.',
  'Set Sail for Adventure' => 'Op avontuur',
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
' => 'Hiermee kunt u de beschikbare taakstatussen in Maniphest bewerken, toevoegen of verwijderen,
zoals "Open", "Opgelost" en "Onjuist". De configuratie moet een toewijzing bevatten
van statusconstanten naar statusspecificaties (zie de standaardwaarden hieronder voor voorbeelden).

De constante voor elke status moet 1-12 tekens lang zijn en alleen
kleine letters en cijfers bevatten. Mogelijke voorbeelden zijn "open", "closed" en
"invalid". Gebruikers zien deze waarden normaal gesproken niet.

De sleutels die u in een specificatie kunt opgeven zijn:

  - `name` //Vereist string.// Naam van de status, zoals "Onjuist".
  - `name.full` //Optioneel string.// Langere naam, zoals "Gesloten, onjuist". Dit
    verschijnt in de koptekst van de taakdetailweergave.
  - `name.action` //Optioneel string.// Handelingnaam voor e-mailonderwerpen, zoals
    "Gemarkeerd als onjuist".
  - `closed` //Optioneel bool.// Statussen zijn "open" of "gesloten".
    Het opgeven van `true` hier markeert de status als gesloten (zoals "Opgelost" of
    "Onjuist"). Standaard zijn statussen open.
  - `special` //Optioneel string.// Markeer deze status als speciaal. De speciale
    statussen zijn:
    - `default` Dit is de standaardstatus voor nieuw aangemaakte taken. U moet
      één status als standaard aanwijzen, en het moet een open status zijn.
    - `closed` Dit is de standaardstatus voor gesloten taken (bijvoorbeeld taken
      gesloten via de "!close"-handeling in e-mail of via de snelsluitknop in
      Maniphest). U moet één status als standaard gesloten status aanwijzen,
      en het moet een gesloten status zijn.
    - `duplicate` Dit is de status die wordt gebruikt wanneer taken worden samengevoegd
      als duplicaten. U moet één status voor duplicaten aanwijzen,
      en het moet een gesloten status zijn.
  - `transaction.icon` //Optioneel string.// Hiermee kunt u een ander
    pictogram kiezen voor deze status bij het weergeven van statuswijzigingen in het
    transactielogboek. Zie UIExamples, Icons and Images voor een lijst.
  - `transaction.color` //Optioneel string.// Hiermee kunt u een andere
    kleur kiezen voor deze status bij het weergeven van statuswijzigingen in het
    transactielogboek.
  - `silly` //Optioneel bool.// Markeert deze status als onzinnig, en dus geheel
    ongeschikt voor gebruik door serieuze bedrijven.
  - `prefixes` //Optioneel list<string>.// Hiermee kunt u een lijst opgeven van
    tekstprefixen die een taakovergang naar deze status activeren
    wanneer vermeld in een commitbericht. Bijvoorbeeld, het opgeven van "closes" hier
    stelt gebruikers in staat taken naar deze status te verplaatsen door `Closes T123` te schrijven in
    commitberichten.
  - `suffixes` //Optioneel list<string>.// Hiermee kunt u een lijst opgeven van
    tekstsuffixen die een taakovergang naar deze status activeren
    wanneer vermeld in een commitbericht, na een toegelaten prefix. Bijvoorbeeld,
    het opgeven van "as invalid" hier stelt gebruikers in staat taken
    naar deze status te verplaatsen door `Closes T123 as invalid` te schrijven, zelfs als een andere status
    is geselecteerd door het "Closes"-prefix.
  - `keywords` //Optioneel list<string>.// Hiermee kunt u een lijst opgeven
    van sleutelwoorden die gebruikt kunnen worden met `!status`-opdrachten in e-mail om
    deze status te selecteren.
  - `disabled` //Optioneel bool.// Markeert deze status als niet meer in gebruik zodat
    taken niet kunnen worden aangemaakt of bewerkt met deze status. Bestaande taken met
    deze status worden niet beïnvloed, maar u kunt ze bulksgewijs bewerken of ze
    vanzelf laten verdwijnen.
  - `claim` //Optioneel bool.// Standaard claimt het sluiten van een niet-toegewezen taak
    deze. U kunt dit instellen op `false` om dit gedrag uit te schakelen voor een bepaalde
    status.
  - `locked` //Optioneel string.// Vergrendel taken in deze status. Geef "comments" op
    om reacties te vergrendelen (gebruikers die de taak kunnen bewerken mogen deze vergrendeling opheffen).
    Geef "edits" op om te voorkomen dat iemand behalve de taakeigenaar bewerkingen maakt.
  - `mfa` //Optioneel bool.// Vereist dat alle bewerkingen aan deze taak worden ondertekend met
    meerfactorauthenticatie.

Statussen verschijnen in de UI in de opgegeven volgorde. Merk op dat de status gemarkeerd als
`special` met `duplicate` niet direct instelbaar is en niet verschijnt in UI-
elementen, en dat elke status gemarkeerd als `silly` niet verschijnt als de software
is geconfigureerd met `phabricator.serious-business` ingesteld op true.

Het bekijken van de standaardconfiguratie en onderstaande voorbeelden zal waarschijnlijk helpen
bij het begrijpen van deze opties.',
  'Recently Closed' => 'Recent gesloten',
  'One of a task\'s subtasks changes status.' => 'Een van de subtaken van een taak wijzigt van status.',
  'Assigned Task' => 'Taak toegewezen',
  'File ("%s", with MIME type "%s") is not a viewable image file.' => 'Bestand ("%s", met MIME-type "%s") is geen weergeerbaar afbeeldingsbestand.',
  '%s updated the cover image for %s.' => '%s heeft de omslagafbeelding voor %s bijgewerkt.',
  'Transaction specifies both "beforePHID" and "beforePHIDs". Specify only "beforePHIDs".' => 'Transactie bevat zowel "beforePHID" als "beforePHIDs". Geef alleen "beforePHIDs" op.',
  '%s updated the task description for %s.' => '%s heeft de taakbeschrijving voor %s bijgewerkt.',
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

See the example below for a starting point.' => 'Activeert een puntenveld op taken. U kunt punten gebruiken voor schattingen of
planning. Indien geconfigureerd, verschijnen punten op werkbladen.

Om punten te activeren, stel deze waarde in op een toewijzing met deze sleutels:

  - `enabled` //Optioneel bool.// Gebruik `true` om punten in te schakelen, of
    `false` om ze uit te schakelen.
  - `label` //Optioneel string.// Label voor punten, zoals "Storypunten" of
    "Geschatte uren". Indien weggelaten, worden punten "Punten" genoemd.
  - `action` //Optioneel string.// Label voor de handeling die punten wijzigt
    in Maniphest, zoals "Schatting wijzigen". Indien weggelaten, wordt de handeling
    "Punten wijzigen" genoemd.

Zie het onderstaande voorbeeld als startpunt.',
  'Status set to invalid value.' => 'Status ingesteld op ongeldige waarde.',
  'Status "%s" is marked as default, but it is a closed status. The default status should be an open status.' => 'Status "%s" is gemarkeerd als standaard, maar het is een gesloten status. De standaardstatus moet een open status zijn.',
  '[Maniphest]' => '[Maniphest]',
  '%s lowered the priority of %s from %s to %s.' => '%s heeft de prioriteit van %s verlaagd van %s naar %s.',
  'Parameter "fullText" is no longer supported. Use method "maniphest.search" with the "query" constraint instead.' => 'Parameter "fullText" wordt niet meer ondersteund. Gebruik in plaats daarvan de methode "maniphest.search" met de beperking "query".',
  'Search for tasks with given statuses.' => 'Zoeken naar taken met opgegeven statussen.',
  'Task Has Revision' => 'Taak heeft versie',
  'Unbreak Now!' => 'Nu oplossen!',
  'Change Story Points' => 'Storypunten wijzigen',
  'Configure point values for tasks.' => 'Puntwaarden voor taken configureren.',
  'This task is locked. Edit it anyway?' => 'Deze taak is vergrendeld. Toch bewerken?',
  'Create a task in a workboard column.' => 'Een taak aanmaken in een werkbladkolom.',
  'Search for tasks with given priorities.' => 'Zoeken naar taken met opgegeven prioriteiten.',
  'Configure the cutoff for the "Recently Closed" column.' => 'De grens voor de kolom "Recent gesloten" configureren.',
  'Original task author.' => 'Oorspronkelijke taakauteur.',
  'Information about task priority.' => 'Informatie over taakprioriteit.',
  '%s detached %s file(s): %s.' => '%s heeft %s bestand(en) losgekoppeld: %s.',
  'Valid setting' => 'Correcte instelling',
  'Open Subtasks' => 'Open subtaken',
  'Close a task. This changes the task status to the default closed status. For a more powerful (but less concise) way to change task statuses, see `%s`.' => 'Een taak sluiten. Dit wijzigt de taakstatus naar de standaard gesloten status. Zie `%s` voor een krachtigere (maar minder beknopte) manier om taakstatussen te wijzigen.',
  '%s removed %s parent task(s): %s.' => '%s heeft %s bovenliggende ta(a)k(en) verwijderd: %s.',
  '%s added %s subtask(s): %s.' => '%s heeft %s subta(a)k(en) toegevoegd: %s.',
  'Assign a task to a specific user.' => 'Een taak toewijzen aan een specifieke gebruiker.',
  'Date Closed (Latest First)' => 'Datum gesloten (nieuwste eerst)',
  'Merged In' => 'Samengevoegd in',
  '%s edited %s commit(s), added %s: %s; removed %s: %s.' => '%s heeft %s commit(s) bewerkt, %s toegevoegd: %s; %s verwijderd: %s.',
  'Date Closed' => 'Datum gesloten',
  'Task title cannot exceed %d characters.' => 'Taaktitel mag niet langer zijn dan %d tekens.',
  'Edit Related Tasks...' => 'Gerelateerde taken bewerken...',
  'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here. Use %s to show more of the graph.' => 'Deze taak is verbonden met meer dan %s andere taken. Alleen directe bovenliggende taken en subtaken worden hier weergegeven. Gebruik %s om meer van de grafiek weer te geven.',
  '%s updated the cover image to %s.' => '%s heeft de omslagafbeelding bijgewerkt naar %s.',
  '%s created subtask %s.' => '%s heeft subtaak %s aangemaakt.',
  'Bulk Edit Selected »' => 'Geselecteerde bulksgewijs bewerken »',
  'No tasks found.' => 'Geen taken gevonden.',
  'Acting user\'s projects' => 'Projecten van de handelende gebruiker',
  'Can Bulk Edit Tasks' => 'Kan taken bulksgewijs bewerken',
  'Estimated number of hours this will take.' => 'Geschat aantal uren dat dit kost.',
  '(Up For Grabs)' => '(Beschikbaar)',
  'Related commits.' => 'Gerelateerde commits.',
  'Assign task to: %s.' => 'Taak toewijzen aan: %s.',
  'Status "%s" is marked as the default status for closing tasks, but is not a closed status. It should be a closed status.' => 'Status "%s" is gemarkeerd als de standaardstatus voor het sluiten van taken, maar is geen gesloten status. Het moet een gesloten status zijn.',
  'Value for key "%s" should be a dictionary.' => 'Waarde voor sleutel "%s" moet een dictionary zijn.',
  'You can not lock this task and unassign it at the same time because no one will be able to edit it anymore. Lock the task or remove the assignee, but not both.' => 'U kunt deze taak niet tegelijkertijd vergrendelen en de toewijzing verwijderen, omdat niemand de taak dan meer kan bewerken. Vergrendel de taak of verwijder de toegewezene, maar niet beide.',
  'Assigned task to: %s.' => 'Taak toegewezen aan: %s.',
  'Key "%s" is not a valid status constant. Status constants must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => 'Sleutel "%s" is geen correcte statusconstante. Statusconstanten moeten 1-64 alfanumerieke tekens zijn en mogen niet uitsluitend uit cijfers bestaan. Bijvoorbeeld "%s" of "%s" zijn redelijke keuzes.',
  'Empty withOwners() constraint is not valid.' => 'Lege withOwners()-beperking is niet correct.',
  'List of subtask PHIDs.' => 'Lijst met subtaak-PHID\'s.',
  'Default view policy for newly created tasks.' => 'Standaard weergavebeleid voor nieuw aangemaakte taken.',
  'Show Only Tasks Without Open Parents' => 'Alleen taken zonder open bovenliggende taken weergeven',
  '%s changed the task status from %s to %s by committing %s.' => '%s heeft de taakstatus gewijzigd van %s naar %s door %s te committen.',
  'New task description.' => 'Nieuwe taakbeschrijving.',
  '%s removed the point value for %s.' => '%s heeft de puntwaarde voor %s verwijderd.',
  'Mocks' => 'Mocks',
  '%s removed the point value for this task.' => '%s heeft de puntwaarde voor deze taak verwijderd.',
  'Closer' => 'Gesloten door',
  '%s added %s parent task(s): %s.' => '%s heeft %s bovenliggende ta(a)k(en) toegevoegd: %s.',
  'Change the related commits for this task.' => 'De gerelateerde commits voor deze taak wijzigen.',
  'Subtask' => 'Subtaak',
  'Configuration has two statuses both marked with the special attribute "%s" ("%s" and "%s"). There should be only one.' => 'De configuratie heeft twee statussen die beide zijn gemarkeerd met het speciale kenmerk "%s" ("%s" en "%s"). Er mag er maar één zijn.',
  'Set priority to' => 'Prioriteit instellen op',
  'Configuration is not valid. Maniphest priority configurations must be dictionaries.' => 'Configuratie is niet correct. Maniphest-prioriteitsconfiguraties moeten dictionaries zijn.',
  'Search for tasks which block open parent tasks.' => 'Zoeken naar taken die open bovenliggende taken blokkeren.',
  'The task description.' => 'De taakbeschrijving.',
  'Filter By Project' => 'Filteren op project',
  '%s claimed this task.' => '%s heeft deze taak geclaimd.',
  'Close This Task As a Duplicate Of' => 'Deze taak sluiten als duplicaat van',
  '%s removed %s subtask(s) for %s: %s.' => '%s heeft %s subta(a)k(en) verwijderd voor %s: %s.',
  'Untitled Task' => 'Naamloze taak',
  '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.' => '%s heeft bovenliggende ta(a)k(en) voor %s bewerkt, %s toegevoegd: %s; %s verwijderd: %s.',
  'Read information about task statuses.' => 'Informatie over taakstatussen lezen.',
  'Move a task to one or more workboard columns.' => 'Een taak verplaatsen naar een of meer werkbladkolommen.',
  '%s added a cover image to %s.' => '%s heeft een omslagafbeelding toegevoegd aan %s.',
  'Edit Subtasks' => 'Subtaken bewerken',
  '%s assigned this task to %s.' => '%s heeft deze taak toegewezen aan %s.',
  '%s placed %s up for grabs.' => '%s heeft %s beschikbaar gesteld.',
  'Change status to: %s.' => 'Status wijzigen naar: %s.',
  '%s raised the priority of this task from %s to %s.' => '%s heeft de prioriteit van deze taak verhoogd van %s naar %s.',
  'No Forms' => 'Geen formulieren',
  'Hours Config' => 'Urenconfiguratie',
  'Type a task subtype name...' => 'Typ een taaksubtypenaam...',
  'File ("%s", with MIME type "%s") can not be transformed into a thumbnail. You may be missing support for this file type in the "GD" extension.' => 'Bestand ("%s", met MIME-type "%s") kan niet worden omgezet naar een miniatuur. Mogelijk ontbreekt ondersteuning voor dit bestandstype in de "GD"-uitbreiding.',
  'To change the priority of a task, specify the desired priority, like `%s`. This table shows the configured names for priority levels.

%s

If you specify an invalid priority, the command is ignored. This command has no effect if you do not specify a priority.' => 'Om de prioriteit van een taak te wijzigen, geef de gewenste prioriteit op, zoals `%s`. Deze tabel geeft de geconfigureerde namen weer voor prioriteitsniveaus.

%s

Als u een ongeldige prioriteit opgeeft, wordt de opdracht genegeerd. Deze opdracht heeft geen effect als u geen prioriteit opgeeft.',
  '%s edited %s revision(s), added %s: %s; removed %s: %s.' => '%s heeft %s versie(s) bewerkt, %s toegevoegd: %s; %s verwijderd: %s.',
  'Search for tasks updated after a certain date.' => 'Zoeken naar taken die na een bepaalde datum zijn bijgewerkt.',
  'Assign task to me' => 'Taak aan mij toewijzen',
  '%s changed the status of %s, a subtask of %s, from %s to %s.' => '%s heeft de status van %s, een subtaak van %s, gewijzigd van %s naar %s.',
  'Search for tasks closed after a certain date.' => 'Zoeken naar taken die na een bepaalde datum zijn gesloten.',
  'Tasks to Close and Merge' => 'Taken om te sluiten en samen te voegen',
  '%s updated the task description.' => '%s heeft de taakbeschrijving bijgewerkt.',
  'Task to make this a subtask of.' => 'Taak om deze een subtaak van te maken.',
  '%s added %s revision(s) to %s: %s.' => '%s heeft %s versie(s) toegevoegd aan %s: %s.',
  'You can not lock this task because it does not have an assignee. No one would be able to edit the task. Assign the task to an assignee before locking it.' => 'U kunt deze taak niet vergrendelen omdat er geen toegewezene is. Niemand zou de taak dan kunnen bewerken. Wijs de taak toe aan iemand voordat u deze vergrendelt.',
  'Owner PHID' => 'Eigenaar-PHID',
  'Closed, Duplicate' => 'Gesloten, duplicaat',
  'Epoch timestamp when the task was closed.' => 'Epoch-tijdstempel wanneer de taak is gesloten.',
  'task author' => 'taakauteur',
  'This method is frozen and will eventually be deprecated. New code should use "transaction.search" instead.' => 'Deze methode is bevroren en wordt uiteindelijk afgeschaft. Nieuwe code moet in plaats daarvan "transaction.search" gebruiken.',
  'Apply transactions to create a new task or edit an existing one.' => 'Transacties toepassen om een nieuwe taak aan te maken of een bestaande te bewerken.',
  'Browse Assignees' => 'Toegewezenen bladeren',
  '%s attached %d file(s) of %s: %s' => '%s heeft %d bestand(en) van %s gekoppeld: %s',
  'Tasks with edits locked may only be edited by their assignee.' => 'Taken met vergrendelde bewerkingen mogen alleen worden bewerkt door hun toegewezene.',
  'Status of the task.' => 'Status van de taak.',
  'Open Tasks by User and Priority (%s)' => 'Open taken per gebruiker en prioriteit (%s)',
  'Information about task status.' => 'Informatie over taakstatus.',
  'List of task monograms, as array.' => 'Lijst met taakmonogrammen, als array.',
  'Set description to' => 'Beschrijving instellen op',
  'Subtasks.' => 'Subtaken.',
  '%s closed this task as %s.' => '%s heeft deze taak gesloten als %s.',
  'Merge Into Selected Task' => 'Samenvoegen in geselecteerde taak',
  'PHID of the parent task.' => 'PHID van de bovenliggende taak.',
  'Configure Maniphest.' => 'Maniphest configureren.',
  '%s edited subtask(s) for %s, added %s: %s; removed %s: %s.' => '%s heeft subta(a)k(en) voor %s bewerkt, %s toegevoegd: %s; %s verwijderd: %s.',
  'A task is moved between columns on a workboard.' => 'Een taak wordt verplaatst tussen kolommen op een werkblad.',
  'Updated Before' => 'Bijgewerkt vóór',
  '%s changed the status of %s from %s to %s by committing %s.' => '%s heeft de status van %s gewijzigd van %s naar %s door %s te committen.',
  'The source task has been closed as a duplicate of the destination task.' => 'De brontaak is gesloten als duplicaat van de doeltaak.',
  'Type a task status name or function...' => 'Typ een taakstatusnaam of functie...',
  '%s changed the point value for %s from %s to %s.' => '%s heeft de puntwaarde voor %s gewijzigd van %s naar %s.',
  '%s removed %s mock(s) for %s: %s.' => '%s heeft %s mock(s) verwijderd voor %s: %s.',
  '%s created this task.' => '%s heeft deze taak aangemaakt.',
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
out of date and some of the nearby tasks have moved elsewhere.' => 'U kunt dit transactietype gebruiken om een taak in een bepaalde werkbladkolom aan te maken, of een bestaande taak tussen kolommen te verplaatsen.

De transactiewaarde kan in verschillende vormen worden opgegeven. Sommige zijn eenvoudiger maar minder krachtig, terwijl andere complexer en krachtiger zijn.

De eenvoudigste correcte waarde is een enkele kolom-PHID:

```lang=json
"PHID-PCOL-1111"
```

Dit verplaatst de taak naar die kolom, of maakt de taak aan in die kolom als u een nieuwe taak aanmaakt. Als de taak momenteel op het blad staat, wordt deze uit exclusieve kolommen verplaatst. Als de taak momenteel niet op het blad staat, wordt deze aan het blad toegevoegd.

U kunt ook meerdere verplaatsingen tegelijk uitvoeren door een lijst van PHID\'s door te geven:

```lang=json
["PHID-PCOL-2222", "PHID-PCOL-3333"]
```

Dit is gelijk aan het individueel uitvoeren van elke verplaatsing.

De meest complexe en krachtigste vorm gebruikt een dictionary om aanvullende informatie over de verplaatsing te bieden, inclusief een optionele specifieke positie binnen de kolom.

De doelkolom moet worden geïdentificeerd als `columnPHID`, en u kunt een positie selecteren door `beforePHIDs` of `afterPHIDs` door te geven, met de PHID\'s van taken die momenteel in de kolom staan waarvoor of waarna u deze taak wilt plaatsen:

```lang=json
[
  {
    "columnPHID": "PHID-PCOL-4444",
    "beforePHIDs": ["PHID-TASK-5555"]
  }
]
```

Wanneer u meerdere PHID\'s opgeeft, wordt de taak naast de eerste
toepasselijke PHID geplaatst die in een van de lijsten wordt gevonden. Hierdoor werken positionele verplaatsingen over het algemeen zoals gebruikers verwachten, zelfs als de clientweergave van het bord verouderd is en sommige nabijgelegen taken elders zijn verplaatst.',
  'The assignee of a task can always view and edit it.' => 'De toegewezene van een taak kan deze altijd bekijken en bewerken.',
  'Search...' => 'Zoeken...',
  'Task Graph' => 'Taakgrafiek',
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
"maniphest.default-priority".' => 'Hiermee kunt u de standaardprioriteiten in Maniphest bewerken of overschrijven,
zoals "Hoog", "Normaal" en "Laag". De configuratie moet een toewijzing bevatten van
numerieke prioriteitswaarden (waarbij hogere getallen overeenkomen met hogere prioriteiten)
naar prioriteitsspecificaties (zie de standaardwaarden hieronder voor voorbeelden).

De sleutels die u voor een prioriteit kunt definiëren zijn:

  - `name` //Vereist string.// Naam van de prioriteit.
  - `keywords` //Vereist list<string>.// Lijst met unieke sleutelwoorden die
    deze prioriteit identificeren, zoals "high" of "low". Elke prioriteit moet ten minste één
    sleutelwoord hebben en twee prioriteiten mogen niet hetzelfde sleutelwoord delen.
  - `short` //Optioneel string.// Alternatieve kortere naam, gebruikt in UI\'s waar
    minder ruimte beschikbaar is.
  - `color` //Optioneel string.// Kleur voor deze prioriteit, zoals "red" of
    "blue".
  - `disabled` //Optioneel bool.// Stel in op true om te voorkomen dat gebruikers
    deze prioriteit kiezen bij het aanmaken of bewerken van taken. Bestaande taken worden niet
    beïnvloed en kunnen bulksgewijs worden bewerkt naar een andere prioriteit of worden gelaten om
    uiteindelijk te verdwijnen.

U kunt de standaardprioriteit voor nieuw aangemaakte taken kiezen met
"maniphest.default-priority".',
  'Parent IDs' => 'Bovenliggende ID\'s',
  'You can not remove the assignee of this task because it is locked and no one would be able to edit the task. Reassign the task or unlock it before removing the assignee.' => 'U kunt de toegewezene van deze taak niet verwijderen omdat deze vergrendeld is en niemand de taak dan zou kunnen bewerken. Wijs de taak opnieuw toe of ontgrendel deze voordat u de toegewezene verwijdert.',
  'Wishlist' => 'Wensenlijst',
  'When moving objects between columns on a board, columns must be identified by PHIDs. This transaction uses "%s" to identify a column, but that is not a valid column PHID.' => 'Bij het verplaatsen van objecten tussen kolommen op een blad moeten kolommen worden geïdentificeerd met PHID\'s. Deze transactie gebruikt "%s" om een kolom te identificeren, maar dat is geen juiste kolom-PHID.',
  'Points value must be numeric or empty.' => 'Puntwaarde moet numeriek of leeg zijn.',
  'This method is frozen and will eventually be deprecated. New code should use "maniphest.search" instead.' => 'Deze methode is bevroren en wordt uiteindelijk afgeschaft. Nieuwe code moet in plaats daarvan "maniphest.search" gebruiken.',
  'Custom Maniphest fields.' => 'Aangepaste Maniphest-velden.',
  'Key "%s" is not a valid priority constant. Priority constants must be nonnegative integers.' => 'Sleutel "%s" is geen correcte prioriteitsconstante. Prioriteitsconstanten moeten niet-negatieve gehele getallen zijn.',
  'Search for tasks created after a certain date.' => 'Zoeken naar taken die na een bepaalde datum zijn aangemaakt.',
  '%s removed %s mock(s): %s.' => '%s heeft %s mock(s) verwijderd: %s.',
  '%s edited mock(s), added %s: %s; removed %s: %s.' => '%s heeft mock(s) bewerkt, %s toegevoegd: %s; %s verwijderd: %s.',
  'Default task priority for create flows.' => 'Standaard taakprioriteit voor aanmaakworkflows.',
  'Show Only Tasks With Open Subtasks' => 'Alleen taken met open subtaken weergeven',
  'Merge Duplicates Into This Task' => 'Duplicaten samenvoegen in deze taak',
  '%s lowered the priority of this task from %s to %s.' => '%s heeft de prioriteit van deze taak verlaagd van %s naar %s.',
  '(Not Assigned)' => '(Niet toegewezen)',
  '(Ungrouped)' => '(Ongegroepeerd)',
  'Task' => 'Taak',
  'Search for tasks created before a certain date.' => 'Zoeken naar taken die vóór een bepaalde datum zijn aangemaakt.',
  'Test rules which run when a task is created or updated.' => 'Regels testen die worden uitgevoerd wanneer een taak wordt aangemaakt of bijgewerkt.',
  'List of custom fields for Maniphest tasks.

For details on adding custom fields to Maniphest, see [[ %s | %s ]] in the
documentation.' => 'Lijst met aangepaste velden voor Maniphest-taken.

Zie [[ %s | %s ]] in de documentatie voor details over het toevoegen van aangepaste velden aan Maniphest.',
  'React to tasks being created or updated.' => 'Reageren op taken die worden aangemaakt of bijgewerkt.',
  '%s removed the point value %s for this task.' => '%s heeft de puntwaarde %s voor deze taak verwijderd.',
  'Blocker' => 'Blokkeerder',
  'Type a task priority name...' => 'Typ een taakprioriteitsnaam...',
  'Configure Maniphest priority names.' => 'Maniphest-prioriteitsnamen configureren.',
  'This method is frozen and will eventually be deprecated. New code should use "maniphest.edit" instead.' => 'Deze methode is bevroren en wordt uiteindelijk afgeschaft. Nieuwe code moet in plaats daarvan "maniphest.edit" gebruiken.',
  'Close As Duplicate' => 'Sluiten als duplicaat',
  'Reassigned' => 'Opnieuw toegewezen',
  'Change the task status.' => 'De taakstatus wijzigen.',
  'Block' => 'Blokkeren',
  'Claimed' => 'Geclaimd',
  'New task point value.' => 'Nieuwe taakpuntwaarde.',
  'Configuration is not valid. Maniphest points configuration must be a dictionary.' => 'Configuratie is niet correct. Maniphest-puntenconfiguratie moet een dictionary zijn.',
  'Returns information about the possible priorities for Maniphest tasks.' => 'Geeft informatie over de mogelijke prioriteiten voor Maniphest-taken.',
  'One or more PHIDs were invalid for %s.' => 'Een of meer PHID\'s waren incorrect voor %s.',
  'Select All' => 'Alles selecteren',
  'This task has no parent tasks and no subtasks, so there is no graph to draw.' => 'Deze taak heeft geen bovenliggende taken en geen subtaken, dus er is geen grafiek om te tekenen.',
  'User who is responsible for the task.' => 'Gebruiker die verantwoordelijk is voor de taak.',
  'Task Author' => 'Taakauteur',
  'Closed Before' => 'Gesloten vóór',
  'Subtask IDs' => 'Subtaak-ID\'s',
  'Configure Maniphest Task Forms' => 'Maniphest-taakformulieren configureren',
  '(No Project)' => '(Geen project)',
  'This task is directly connected to more than %s other tasks, which is too many tasks to display. Use %s to browse parents or subtasks.' => 'Deze taak is direct verbonden met meer dan %s andere taken, wat te veel taken zijn om weer te geven. Gebruik %s om bovenliggende taken of subtaken te bladeren.',
  'Duplicates' => 'Duplicaten',
  'Task Locked' => 'Taak vergrendeld',
  'Edit Task: %s' => 'Taak bewerken: %s',
  '%s merged %s task(s) %s into %s.' => '%s heeft %s ta(a)k(en) %s samengevoegd in %s.',
  'No tasks.' => 'Geen taken.',
  'Feature Request' => 'Functieverzoek',
  'Priorities' => 'Prioriteiten',
  'Priority Name' => 'Prioriteitsnaam',
  'Task description.' => 'Taakbeschrijving.',
  'Current Subtasks' => 'Huidige subtaken',
  'Change the subtasks of this task.' => 'De subtaken van deze taak wijzigen.',
  'Task Has Commit' => 'Taak heeft commit',
  'Type a task status name...' => 'Typ een taakstatusnaam...',
  'Save Subtasks' => 'Subtaken opslaan',
  'Assign yourself as the owner of a task. To assign another user, see `%s`.' => 'Uzelf toewijzen als eigenaar van een taak. Zie `%s` om een andere gebruiker toe te wijzen.',
  'Task Priority' => 'Taakprioriteit',
  '%s added %s subtask(s) for %s: %s.' => '%s heeft %s subta(a)k(en) toegevoegd voor %s: %s.',
  'Parent Task' => 'Bovenliggende taak',
  'Search for tasks updated before a certain date.' => 'Zoeken naar taken die vóór een bepaalde datum zijn bijgewerkt.',
  'Parent tasks.' => 'Bovenliggende taken.',
  'Change subtype to "%s"' => 'Subtype wijzigen naar "%s"',
  'File PHID ("%s") is invalid, or you do not have permission to view it.' => 'Bestands-PHID ("%s") is incorrect, of u hebt geen toestemming om het te bekijken.',
  'Priority set to invalid value.' => 'Prioriteit ingesteld op ongeldige waarde.',
  'Points value must be nonnegative.' => 'Puntwaarde moet niet-negatief zijn.',
  'Type a username or "none"...' => 'Typ een gebruikersnaam of "none"...',
  'Maniphest Project Name Cache' => 'Maniphest-projectnaamcache',
  'Comma-separated list of task IDs.' => 'Kommagescheiden lijst met taak-ID\'s.',
  'To assign a task to another user, provide their username. For example, to assign a task to `%s`, write `%s`.

If you omit the username or the username is not valid, this behaves like `%s` and assigns the task to you instead.' => 'Om een taak aan een andere gebruiker toe te wijzen, geef hun gebruikersnaam op. Om bijvoorbeeld een taak toe te wijzen aan `%s`, schrijf `%s`.

Als u de gebruikersnaam weglaat of de gebruikersnaam niet correct is, gedraagt dit zich als `%s` en wordt de taak in plaats daarvan aan u toegewezen.',
  'Edit Parent Tasks' => 'Bovenliggende taken bewerken',
  'Spite' => 'Rancune',
  'Email Commands: Tasks' => 'E-mailopdrachten: Taken',
  'This task is directly connected to more than %s other tasks. Use %s to browse parents or subtasks, or %s to show more of the graph.' => 'Deze taak is direct verbonden met meer dan %s andere taken. Gebruik %s om bovenliggende taken of subtaken te bladeren, of %s om meer van de grafiek weer te geven.',
  'Comma-separated list of task monograms.' => 'Kommagescheiden lijst met taakmonogrammen.',
  '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' => '%s heeft %s commit(s) voor %s bewerkt, %s toegevoegd: %s; %s verwijderd: %s.',
  'Set title to' => 'Titel instellen op',
  'Graph' => 'Grafiek',
  'Retrieve information about a Maniphest task, given its ID.' => 'Informatie ophalen over een Maniphest-taak op basis van het ID.',
  'Search for tasks owned by a user from a list.' => 'Zoeken naar taken die eigendom zijn van een gebruiker uit een lijst.',
  '%s assigned %s to %s.' => '%s heeft %s toegewezen aan %s.',
  'Current task assignee, if task is assigned.' => 'Huidige toegewezene van de taak, als de taak is toegewezen.',
  'Use Maniphest to track bugs, features, todos, or anything else you need to get done. Tasks assigned to you will appear here.' => 'Gebruik Maniphest om bugs, functies, taken of alles wat u moet doen bij te houden. Taken die aan u zijn toegewezen verschijnen hier.',
  'Default edit policy for newly created tasks.' => 'Standaard bewerkingsbeleid voor nieuw aangemaakte taken.',
  'Change the priority of a task.' => 'De prioriteit van een taak wijzigen.',
  '%s closed %s, a subtask of %s, as %s.' => '%s heeft %s, een subtaak van %s, gesloten als %s.',
  'The source task has had the destination task closed as a duplicate and merged into it.' => 'De brontaak heeft de doeltaak als duplicaat gesloten en erin samengevoegd.',
  'Mixture of PHIDs, IDs and monograms.' => 'Mix van PHID\'s, ID\'s en monogrammen.',
  'Send email to these addresses to create tasks. %s' => 'Stuur e-mail naar deze adressen om taken aan te maken. %s',
  'Low' => 'Laag',
  'Search for tasks in specific workboard columns.' => 'Zoeken naar taken in specifieke werkbladolommen.',
  'The author of this task can take this action.' => 'De auteur van deze taak kan deze handeling uitvoeren.',
  'Configure Maniphest task statuses.' => 'Maniphest-taakstatussen configureren.',
  'Save Parent Tasks' => 'Bovenliggende taken opslaan',
  'WORKBOARD' => 'WERKBLAD',
  'Set status to' => 'Status instellen op',
  'Burnup' => 'Burnup',
  'Group results by a certain parameter.' => 'Resultaten groeperen op een bepaalde parameter.',
  'Current Mocks' => 'Huidige mocks',
  '%s added %s mock(s) for %s: %s.' => '%s heeft %s mock(s) toegevoegd voor %s: %s.',
  'Other task activity not listed above occurs.' => 'Andere taakactiviteit die hierboven niet is vermeld vindt plaats.',
  'Override Task Lock' => 'Taakvergrendeling opheffen',
  'Points Config' => 'Puntenconfiguratie',
  'Current Parent Tasks' => 'Huidige bovenliggende taken',
  'Recently Means' => 'Recent betekent',
  'User who closed the task, if the task is closed.' => 'Gebruiker die de taak heeft gesloten, als de taak gesloten is.',
  '%s added %s mock(s): %s.' => '%s heeft %s mock(s) toegevoegd: %s.',
  '%s reassigned %s from %s to %s.' => '%s heeft %s opnieuw toegewezen van %s aan %s.',
  'Related Objects' => 'Gerelateerde objecten',
  'A task\'s priority changes.' => 'De prioriteit van een taak wijzigt.',
  'Merge Duplicates In' => 'Duplicaten samenvoegen in',
  'Raised Priority' => 'Prioriteit verhoogd',
  'Oldest (All)' => 'Oudste (alle)',
  'No such Maniphest task exists.' => 'Deze Maniphest-taak bestaat niet.',
  '%s raised the priority of %s from %s to %s.' => '%s heeft de prioriteit van %s verhoogd van %s naar %s.',
  'Edit Mocks' => 'Mocks bewerken',
  'High' => 'Hoog',
  'Move on Workboard' => 'Verplaatsen op werkblad',
  'Search for tasks with given subtypes.' => 'Zoeken naar taken met opgegeven subtypen.',
  'Closer PHID' => 'Sluiter-PHID',
  'The title of the task.' => 'De titel van de taak.',
  'Oldest open task, excluding those with priority %s' => 'Oudste open taak, exclusief taken met prioriteit %s',
  'Changed Status' => 'Status gewijzigd',
  'Comma-separated list of task PHIDs.' => 'Kommagescheiden lijst met taak-PHID\'s.',
  'Column move transaction specifies column PHID "%s", but there is no corresponding column with this PHID.' => 'Kolomverplaatsingstransactie specificeert kolom-PHID "%s", maar er is geen overeenkomstige kolom met deze PHID.',
  'Save Related Mocks' => 'Gerelateerde mocks opslaan',
  'Wontfix' => 'Wordt niet opgelost',
  'List of task PHIDs, as array.' => 'Lijst met taak-PHID\'s, als array.',
  '%s renamed this task from %s to %s.' => '%s heeft deze taak hernoemd van %s naar %s.',
  'Updated After' => 'Bijgewerkt na',
  'To change the status of a task, specify the desired status, like `%s`. This table shows the configured names for statuses.

%s

If you specify an invalid status, the command is ignored. This command has no effect if you do not specify a status.

To quickly close a task, see `%s`.' => 'Om de status van een taak te wijzigen, geef de gewenste status op, zoals `%s`. Deze tabel geeft de geconfigureerde namen weer voor statussen.

%s

Als u een ongeldige status opgeeft, wordt de opdracht genegeerd. Deze opdracht heeft geen effect als u geen status opgeeft.

Zie `%s` om snel een taak te sluiten.',
  'There was an unexpected error displaying the task graph. Use %s to browse parents or subtasks, or %s to show the graph.' => 'Er is een onverwachte fout opgetreden bij het weergeven van de taakgrafiek. Gebruik %s om bovenliggende taken of subtaken te bladeren, of %s om de grafiek weer te geven.',
  'TASK DESCRIPTION' => 'TAAKBESCHRIJVING',
  '%s closed %s as %s by committing %s.' => '%s heeft %s gesloten als %s door %s te committen.',
  'Read information about task priorities.' => 'Informatie over taakprioriteiten lezen.',
  'Change the task point value.' => 'De taakpuntwaarde wijzigen.',
  'Create as a subtask of another task.' => 'Aanmaken als subtaak van een andere taak.',
  '● %s' => '● %s',
  'Show Only Tasks Without Open Subtasks' => 'Alleen taken zonder open subtaken weergeven',
  'Task priority "%s" is not a valid task priority. Use a priority keyword to choose a task priority: %s.' => 'Taakprioriteit "%s" is geen correcte taakprioriteit. Gebruik een prioriteitssleutelwoord om een taakprioriteit te kiezen: %s.',
  '%s closed %s as a duplicate by committing %s.' => '%s heeft %s als duplicaat gesloten door %s te committen.',
  'Transaction specifies both "afterPHID" and "afterPHIDs". Specify only "afterPHIDs".' => 'Transactie bevat zowel "afterPHID" als "afterPHIDs". Geef alleen "afterPHIDs" op.',
  'Task Unassigned' => 'Taak niet toegewezen',
  'Reassign the task.' => 'De taak opnieuw toewijzen.',
  '%s changed file(s) for %s, attached %d: %s; detached %d: %s' => '%s heeft bestand(en) voor %s gewijzigd, %d gekoppeld: %s; %d losgekoppeld: %s',
  '%s closed subtask %s as %s.' => '%s heeft subtaak %s gesloten als %s.',
  'Open Tasks by Project and Priority (%s)' => 'Open taken per project en prioriteit (%s)',
  'You do not have access to any forms which can be used to create a subtask.' => 'U hebt geen toegang tot formulieren waarmee een subtaak kan worden aangemaakt.',
  'Configure how users create and edit tasks.' => 'Configureren hoe gebruikers taken aanmaken en bewerken.',
  'Assign task to rule author.' => 'Taak toewijzen aan regelauteur.',
  '%s detached %d file(s) of %s: %s' => '%s heeft %d bestand(en) van %s losgekoppeld: %s',
  'Change subtype to "%s."' => 'Subtype wijzigen naar "%s."',
  '%s closed %s as a duplicate.' => '%s heeft %s gesloten als duplicaat.',
  '%s removed %s parent task(s) for %s: %s.' => '%s heeft %s bovenliggende ta(a)k(en) verwijderd voor %s: %s.',
  'Edit Related Mocks' => 'Gerelateerde mocks bewerken',
  'The source object has the destination object as a parent.' => 'Het bronobject heeft het doelobject als bovenliggend object.',
  'Maniphest Task' => 'Maniphest-taak',
  '%s set the cover image to %s.' => '%s heeft de omslagafbeelding ingesteld op %s.',
  'By User' => 'Per gebruiker',
  'The task already has the selected assignee.' => 'De taak heeft al de geselecteerde toegewezene.',
  'Two different task priorities ("%s" and "%s") have the same keyword ("%s"). Keywords must uniquely identify priorities.' => 'Twee verschillende taakprioriteiten ("%s" en "%s") hebben hetzelfde sleutelwoord ("%s"). Sleutelwoorden moeten prioriteiten uniek identificeren.',
  'List of parent task PHIDs.' => 'Lijst met PHID\'s van bovenliggende taken.',
  'Change the status of a task.' => 'De status van een taak wijzigen.',
  'CHANGES TO TASK DESCRIPTION' => 'WIJZIGINGEN IN TAAKBESCHRIJVING',
  'Close and Merge Selected Tasks' => 'Geselecteerde taken sluiten en samenvoegen',
  'Key "%s" is not a valid priority keyword. Priority keywords must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => 'Sleutel "%s" is geen correct prioriteitssleutelwoord. Prioriteitssleutelwoorden moeten 1-64 alfanumerieke tekens zijn en mogen niet uitsluitend uit cijfers bestaan. Bijvoorbeeld "%s" of "%s" zijn redelijke keuzes.',
  'Browse Priorities' => 'Prioriteiten bladeren',
  'Unbreak!' => 'Unbreak!',
  'The task already has the selected priority.' => 'De taak heeft al de geselecteerde prioriteit.',
  'Assign to' => 'Toewijzen aan',
  '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' => '%s heeft %s versie(s) voor %s bewerkt, %s toegevoegd: %s; %s verwijderd: %s.',
  'A task\'s status changes.' => 'De status van een taak wijzigt.',
  'Rename the task.' => 'De taak hernoemen.',
  'You can not interact with this task because it is locked.' => 'U kunt niet met deze taak werken omdat deze vergrendeld is.',
  'Someone comments on a task.' => 'Iemand reageert op een taak.',
  'New task status constant.' => 'Nieuwe taakstatusconstante.',
  '%s added %s parent task(s) for %s: %s.' => '%s heeft %s bovenliggende ta(a)k(en) toegevoegd voor %s: %s.',
  'Closed After' => 'Gesloten na',
  '%s closed this task as a duplicate.' => '%s heeft deze taak gesloten als duplicaat.',
  'Status "%s" is marked as the status for closing tasks as duplicates, but it is not a closed status. It should be a closed status.' => 'Status "%s" is gemarkeerd als de status voor het sluiten van taken als duplicaten, maar het is geen gesloten status. Het moet een gesloten status zijn.',
  'New task assignee, or `null` to unassign.' => 'Nieuwe toegewezene van de taak, of `null` om de toewijzing te verwijderen.',
  'Wish' => 'Wens',
  '%s set the point value for %s to %s.' => '%s heeft de puntwaarde voor %s ingesteld op %s.',
  'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here.' => 'Deze taak is verbonden met meer dan %s andere taken. Alleen directe bovenliggende taken en subtaken worden hier getoond.',
  'Search for tasks closed by certain users.' => 'Zoeken naar taken die door bepaalde gebruikers zijn gesloten.',
  'Changed Subtype' => 'Subtype gewijzigd',
  '%s edited parent task(s), added %s: %s; removed %s: %s.' => '%s heeft bovenliggende ta(a)k(en) bewerkt, %s toegevoegd: %s; %s verwijderd: %s.',
  '%s removed %s revision(s) from %s: %s.' => '%s heeft %s versie(s) verwijderd van %s: %s.',
  '%s merged %s task(s): %s.' => '%s heeft %s ta(a)k(en) samengevoegd: %s.',
  '%s edited mock(s) for %s, added %s: %s; removed %s: %s.' => '%s heeft mock(s) voor %s bewerkt, %s toegevoegd: %s; %s verwijderd: %s.',
  '%s reassigned this task from %s to %s.' => '%s heeft deze taak opnieuw toegewezen van %s aan %s.',
  'Triaged' => 'Getrieerd',
  'The source object has the destination object as a subtask.' => 'Het bronobject heeft het doelobject als subtaak.',
  '%s removed %s commit(s) from %s: %s.' => '%s heeft %s commit(s) verwijderd van %s: %s.',
  'Task Owner' => 'Taakeigenaar',
  'By Project' => 'Per project',
  '%s triaged %s as %s priority.' => '%s heeft %s getrieerd als prioriteit %s.',
  'Change priority to: %s.' => 'Prioriteit wijzigen naar: %s.',
  'Batch Task Editor' => 'Bulktaakeditor',
  'Search Parent Tasks' => 'Bovenliggende taken zoeken',
  'Subscribed' => 'Geabonneerd',
  'Unknown Status' => 'Onbekende status',
  'A task\'s associated projects change.' => 'De gekoppelde projecten van een taak wijzigen.',
  'Interacting with Maniphest Tasks' => 'Werken met Maniphest-taken',
  '%s changed the task status from %s to %s.' => '%s heeft de taakstatus gewijzigd van %s naar %s.',
  'List of task IDs, as array.' => 'Lijst met taak-ID\'s, als array.',
  'Specify exactly one of \'%s\' and \'%s\'.' => 'Geef precies een van \'%s\' en \'%s\' op.',
  'Edit Locked Task' => 'Vergrendelde taak bewerken',
  'Assigned' => 'Toegewezen',
  'Search for tasks which have specific parent tasks.' => 'Zoeken naar taken met specifieke bovenliggende taken.',
  '%s reopened %s as %s by committing %s.' => '%s heeft %s heropend als %s door %s te committen.',
  'Change Estimate' => 'Schatting wijzigen',
  'Closed as Duplicate' => 'Gesloten als duplicaat',
  '%s merged task %s into %s.' => '%s heeft taak %s samengevoegd in %s.',
  'Estimated Hours' => 'Geschatte uren',
  '%s changed the status of subtask %s from %s to %s.' => '%s heeft de status van subtaak %s gewijzigd van %s naar %s.',
  'Lowered Priority' => 'Prioriteit verlaagd',
  'Execute complex searches for Maniphest tasks.' => 'Complexe zoekopdrachten uitvoeren voor Maniphest-taken.',
  'Closed By' => 'Gesloten door',
  'This page documents the commands you can use to interact with tasks in Maniphest. These commands work when creating new tasks via email and when replying to existing tasks.' => 'Deze pagina documenteert de opdrachten die u kunt gebruiken om met taken in Maniphest te werken. Deze opdrachten werken bij het aanmaken van nieuwe taken via e-mail en bij het reageren op bestaande taken.',
  '%s closed this task as %s by committing %s.' => '%s heeft deze taak gesloten als %s door %s te committen.',
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
' => 'Hiermee kunt u taaksubtypen definiëren. Subtypen stellen u in staat velden te verbergen die u niet nodig hebt om de workflows voor het bewerken van taken te vereenvoudigen.

Om subtypen te definiëren, geef een lijst met subtypen op. Elk subtype moet een dictionary zijn met deze sleutels:

  - `key` //Vereist string.// Interne identificatie voor het subtype, zoals "task", "feature" of "bug".
  - `name` //Vereist string.// Leesbare naam voor dit subtype, zoals "Taak", "Functieverzoek" of "Bugrapport".
  - `tag` //Optioneel string.// Tagtekst voor dit subtype.
  - `color` //Optioneel string.// Weergavekleur voor dit subtype.
  - `icon` //Optioneel string.// Pictogram voor het subtype.
  - `children` //Optioneel map.// Configureer opties die aan de gebruiker worden weergegeven wanneer
     ze "Subtaak aanmaken" gebruiken. Zie hieronder.
  - `fields` //Optioneel map.// Configureer veldgedrag. Zie hieronder.
  - `mutations` //Optioneel list.// Configureer naar welke subtypen dit subtype
    eenvoudig kan worden geconverteerd met de handeling "Subtype wijzigen". Zie hieronder.

Elk subtype moet een unieke sleutel hebben, en u moet een subtype definiëren met
de sleutel "%s", die als standaardsubtype wordt gebruikt.

De tagtekst (`tag`) wordt gebruikt om de tekst in te stellen die wordt weergegeven in de subtypetag op lijst-
weergaven en werkbladen. Als u dit niet configureert, heeft het standaardsubtype
geen subtypetag en gebruiken andere subtypen hun naam als tagtekst.

De `children`-sleutel stelt u in staat te configureren welke opties aan de
gebruiker worden gepresenteerd wanneer ze "Subtaak aanmaken" gebruiken vanuit een taak van dit subtype. U kunt
deze sleutels opgeven:

  - `subtypes`: //Optioneel list<string>.// Gebruikers aanmaakformulieren weergeven voor deze
    taaksubtypen.
  - `forms`: //Optioneel list<string|int>.// Gebruikers deze specifieke formuliere weergeven, in volgorde.

Als u geen van beide beperkingen opgeeft, worden gebruikers aanmaakformulieren weergegeven voor hetzelfde subtype.

Bijvoorbeeld, als u een "quest"-subtype hebt en `children` niet configureert, krijgen gebruikers die op "Subtaak aanmaken" klikken alle aanmaakformulieren voor "quest"-taken te zien.

Als u ze in plaats daarvan formulieren voor een ander taaksubtype of set van subtypen wilt presenteren, gebruik `subtypes`:

```
  {
    ...
    "children": {
      "subtypes": ["objective", "boss", "reward"]
    }
    ...
  }
```

Als u ze specifieke formulieren wilt presenteren, gebruik `forms` en geef formulier-ID\'s op:

```
  {
    ...
    "children": {
      "forms": [12, 16]
    }
    ...
  }
```

Wanneer u formulieren expliciet op ID opgeeft, wordt de volgorde waarin u de formulieren opgeeft gebruikt bij het presenteren van opties aan de gebruiker.

Als er slechts één optie zou worden gepresenteerd, wordt de gebruiker direct naar het juiste formulier geleid in plaats van gevraagd te worden een formulier te kiezen.

De `fields`-sleutel kan het gedrag van aangepaste velden op specifieke taaksubtypen configureren. Bijvoorbeeld:

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

Elk veld ondersteunt deze opties:

  - `disabled` //Optioneel bool.// Hiermee kunt u velden uitschakelen op bepaalde     subtypen.
  - `name` //Optioneel string.// Aangepaste naam van dit veld voor het subtype.


De `mutations`-sleutel stelt u in staat het gedrag van de handeling "Subtype wijzigen" boven het reactiegebied te beheren. Standaard stelt deze handeling gebruikers in staat het taaksubtype te wijzigen naar elk ander subtype.

Als u het liever moeilijker maakt om subtypen te wijzigen of slechts een
subset van subtypen wilt aanbieden, kunt u de lijst met subtypen opgeven die "Subtype wijzigen"
aanbiedt. Bijvoorbeeld, als u meerdere vergelijkbare subtypen hebt en taken
tussen hen wilt laten converteren maar niet eenvoudig naar andere typen,
kunt u het besturingselement "Subtype wijzigen" alleen deze opties laten weergeven:

```
  {
    ...
    "mutations": ["bug", "issue", "defect"]
    ...
  }
```

Als u een lege lijst opgeeft, wordt de handeling "Subtype wijzigen" volledig
verborgen.

Deze mutatielijst is adviserend en configureert alleen de UI. Taken kunnen nog steeds
vrij tussen subtypen worden geconverteerd met de Bulkeditor of API.',
  '%s changed the subtype of this task from "%s" to "%s".' => '%s heeft het subtype van deze taak gewijzigd van "%s" naar "%s".',
  'Create a new Maniphest task.' => 'Een nieuwe Maniphest-taak aanmaken.',
  'Create New Task' => 'Nieuwe taak aanmaken',
  'Read information about tasks.' => 'Informatie over taken lezen.',
  'New task priority constant.' => 'Nieuwe taakprioriteitsconstante.',
  '%s reopened this task as %s by committing %s.' => '%s heeft deze taak heropend als %s door %s te committen.',
  'Choose a default priority for newly created tasks. You can review and adjust available priorities by using the %s configuration option. The default value (`90`) corresponds to the default "Needs Triage" priority.' => 'Kies een standaardprioriteit voor nieuw aangemaakte taken. U kunt beschikbare prioriteiten bekijken en aanpassen met de configuratieoptie %s. De standaardwaarde (`90`) komt overeen met de standaardprioriteit "Triage nodig".',
  'The source task is associated with the destination revision.' => 'De brontaak is gekoppeld aan de doelrevisie.',
  'Changed Task Status' => 'Taakstatus gewijzigd',
  'Search for tasks blocked by open subtasks.' => 'Zoeken naar taken die geblokkeerd worden door open subtaken.',
  'Changed Project Column' => 'Projectkolom gewijzigd',
  'Subtype of the task.' => 'Subtype van de taak.',
  'Unassigned task.' => 'Taaktoewijzing verwijderd.',
  '%s edited subtask(s), added %s: %s; removed %s: %s.' => '%s heeft subta(a)k(en) bewerkt, %s toegevoegd: %s; %s verwijderd: %s.',
  'Task status ("%s") has unrecognized value for "locked" configuration ("%s"). Supported values are: "%s", "%s".' => 'Taakstatus ("%s") heeft een niet-herkende waarde voor de "locked"-configuratie ("%s"). Ondersteunde waarden zijn: "%s", "%s".',
  '%s removed %s subtask(s): %s.' => '%s heeft %s subta(a)k(en) verwijderd: %s.',
  'Closed, Wontfix' => 'Gesloten, wordt niet opgelost',
  'This method is frozen and will eventually be deprecated. New code should use "maniphest.status.search" instead.' => 'Deze methode is bevroren en wordt uiteindelijk afgeschaft. Nieuwe code moet in plaats daarvan "maniphest.status.search" gebruiken.',
  'Unknown status query \'%s\'!' => 'Onbekende statusquery \'%s\'!',
  'Group PHID ("%s") component of cursor ("%s") is not valid.' => 'Groeps-PHID ("%s") component van cursor ("%s") is niet correct.',
  '%s set the point value for this task to %s.' => '%s heeft de puntwaarde voor deze taak ingesteld op %s.',
  'Change the priority of the task.' => 'De prioriteit van de taak wijzigen.',
  'Page Size' => 'Paginagrootte',
  '%s reopened this task as %s.' => '%s heeft deze taak heropend als %s.',
  '%s reopened %s, a subtask of %s, as %s.' => '%s heeft %s, een subtaak van %s, heropend als %s.',
  'Name of the task.' => 'Naam van de taak.',
  'Spited' => 'Uit rancune gesloten',
  'Lock Error' => 'Vergrendelingsfout',
  'Tasks and Bugs' => 'Taken en bugs',
  'A task\'s assignee changes.' => 'De toegewezene van een taak wijzigt.',
  'Revisions and Commits' => 'Versies en commits',
  'Parent task identifier "%s" does not identify a visible task.' => 'Bovenliggende taakidentificatie "%s" identificeert geen zichtbare taak.',
  'Assign / Claim' => 'Toewijzen / Claimen',
  '%s reopened subtask %s as %s.' => '%s heeft subtaak %s heropend als %s.',
  'Point value of the task.' => 'Puntwaarde van de taak.',
  'Search for tasks with given authors.' => 'Zoeken naar taken met opgegeven auteurs.',
  'The task already has the selected status.' => 'De taak heeft al de geselecteerde status.',
  'Clear Selection' => 'Selectie wissen',
  '%s reopened %s as "%s".' => '%s heeft %s heropend als "%s".',
  '%s triaged this task as %s priority.' => '%s heeft deze taak getrieerd als prioriteit %s.',
  'This task has no related commits or revisions.' => 'Deze taak heeft geen gerelateerde commits of versies.',
  'Changed task status to "%s".' => 'Taakstatus gewijzigd naar "%s".',
  'View Standalone Graph' => 'Zelfstandige grafiek weergeven',
  'Choose Subtype' => 'Subtype kiezen',
);
  }

}
