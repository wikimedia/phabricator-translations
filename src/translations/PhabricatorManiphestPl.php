<?php

final class PhabricatorManiphestPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Utwórz zadanie',
      '%s removed %s as the assignee of this task.' => '%s usunął %s jako osobę przypisaną do tego zadania.',
      'Priority of the task.' => 'Priorytet zadania.',
      'Assignee' => 'Przypisany',
      'Open Parents' => 'Otwarte nadrzędne',
      'List of columns to move the task to.' => 'Lista kolumn, do których należy przenieść zadanie.',
      'A task\'s subscribers change.' => 'Zmiana subskrybentów zadania.',
      '%s closed %s as %s.' => '%s zamknął %s jako %s.',
      'This task has been locked.' => 'To zadanie zostało zablokowane.',
      '%s claimed %s.' => '%s podjął %s.',
      'TASK DETAIL' => 'SZCZEGÓŁY ZADANIA',
      'The task already has the selected owner.' => 'To zadanie ma już wybranego właściciela.',
      'Changed Task Priority' => 'Zmieniono priorytet zadania',
      'Changed task priority to "%s".' => 'Zmieniono priorytet zadania na „%s”.',
      'Tasks must have a title.' => 'Zadania muszą mieć tytuł.',
      'Needs Triage' => 'Wymaga zakwalifikowania',
      'Mentioned In' => 'Wspomniano w',
      '%s closed this task as a duplicate of %s.' => '%s zamknął to zadanie jako duplikat %s.',
      'Edit Related Tasks...' => 'Zmień powiązane zadania...',
      'Tasks and Bugs' => 'Zadania i błędy',
    );
  }

}
