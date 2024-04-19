<?php

final class PhabricatorManiphestSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Skapa uppgift',
      'Priority of the task.' => 'Uppgiftens prioritet.',
      '%s closed %s as %s.' => '%s stängde %s som %s.',
      'Closed after %s' => 'Stängd efter %s',
      'Changed Task Priority' => 'Ändra uppgiftens prioritet',
      'Changed task priority to "%s".' => 'Ändrade uppgiftens prioritet till "%s".',
      '%s closed this task as a duplicate of %s.' => '%s stängde denna uppgift som en dubblett för %s.',
      'Recently Closed' => 'Senaste stängda',
      '%s updated the task description for %s.' => '%s uppdaterade uppgiftsbeskrivningen för %s.',
      '%s lowered the priority of %s from %s to %s.' => '%s sänkte prioriteten för %s från %s till %s.',
      'Search for tasks with given priorities.' => 'Sök efter uppgiften med vald prioritet.',
      'Information about task priority.' => 'Information om uppgiftens prioritet.',
      'Edit Related Tasks...' => 'Redigera relaterade uppgifter...',
      '%s raised the priority of this task from %s to %s.' => '%s höjde prioriteten för den uppgift från %s till %s.',
      'Closed, Duplicate' => 'Stängd, dubblett',
      '%s closed this task as %s.' => '%s stängde denna uppgift som %s.',
      '%s created this task.' => '%s skapade denna uppgift.',
      '%s lowered the priority of this task from %s to %s.' => '%s sänkte prioriteten för denna uppgift från %s till %s.',
      'Type a task priority name...' => 'Skriv namnet på en uppgiftsprioritet...',
      'Edit Task: %s' => 'Redigera uppgift: %s',
      'Priorities' => 'Prioriteter',
      'Type a task status name...' => 'Skriv ett statusnamn för uppgift...',
      'Edit Task' => 'Redigera uppgift',
      'Change the priority of a task.' => 'Ändra prioriteten för en uppgift.',
      'A task\'s priority changes.' => 'Ändringar i prioriteten för en uppgift.',
      'Raised Priority' => 'Höjde prioriteten',
      '%s raised the priority of %s from %s to %s.' => '%s höjde prioriteten för %s från %s till %s.',
      '%s renamed this task from %s to %s.' => '%s bytte namn på denna uppgift från %s till %s.',
      'Read information about task priorities.' => 'Läs information om uppgiftsprioriteter.',
      '%s closed %s as a duplicate.' => '%s stängde %s som en dubblett.',
      'Browse Priorities' => 'Bläddra prioriteter',
      'The task already has the selected priority.' => 'Uppgiften har redan vald prioritet.',
      '%s closed this task as a duplicate.' => '%s stängde denna uppgift som en dubblett.',
      '%s triaged %s as %s priority.' => '%s prioriterade %s som prioriteten %s.',
      'Change priority to: %s.' => 'Ändrade prioriteten till: %s.',
      'Closed as Duplicate' => 'Stängd som dubblett',
      'Lowered Priority' => 'Sänkte prioriteten',
      'Closed, Wontfix' => 'Stängd, kommer inte fixas',
      'Change the priority of the task.' => 'Ändrade prioriteten för uppgiften.',
      'Tasks and Bugs' => 'Uppgifter och buggar',
      '%s triaged this task as %s priority.' => '%s prioriterade denna uppgift som prioriteten %s.',
    );
  }

}
