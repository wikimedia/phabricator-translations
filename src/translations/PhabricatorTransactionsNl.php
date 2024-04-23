<?php

final class PhabricatorTransactionsNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Bulk Edit Actions' => 'Bulk-bewerkingsacties',
      'Export format.' => 'Exportformaat.',
      'This job is already configured to run silently.' => 'Deze taak is reeds ingesteld om stil te kunnen worden uitgevoerd.',
      'Bulk Editor' => 'Bulk-bewerkingsprogramma',
      'Support Applications' => 'Ondersteunde toepassingen',
      'Working Set' => 'Werkset',
      'export' => 'exporteren',
      'You have not selected any objects to edit.' => 'U heeft geen objecten geselecteerd om te bewerken.',
      'Unknown export format ("%s"). Known formats are: %s.' => 'Exportformaat "%s" onbekend. Bekende formaten: %s.',
      'Mentioned User' => 'Genoemde gebruiker',
      'Bulk Edit' => 'Bulk-bewerking',
      'Add Another Action' => 'Nog een handeling toevoegen',
    );
  }

}
