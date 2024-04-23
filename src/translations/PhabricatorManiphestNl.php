<?php

final class PhabricatorManiphestNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Maak taak aan',
      'Triage' => 'Triage',
      'Priority of the task.' => 'Prioriteit van de taak.',
      'Weigh In' => 'Geef je mening',
      'Task Fields' => 'Taakvelden',
      'Assignee' => 'Toegewezen aan',
      '%s closed %s as %s.' => '%s heeft %s gesloten als %s.',
      'Unblock' => 'Deblokkeren',
      'Mentioned In' => 'Vermeld in',
      'Finished' => 'Voltooid',
      'Closer' => 'Sluiter',
      'Set priority to' => 'Voorrang instellen op',
      'Closed Before' => 'Gesloten vóór',
      'Priority Name' => 'Voorrangsnaam',
      'Set title to' => 'Titel instellen op',
      'Task Owner' => 'Taakeigenaar',
      'Closed By' => 'Gesloten door',
    );
  }

}
