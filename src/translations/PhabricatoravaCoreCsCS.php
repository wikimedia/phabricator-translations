<?php

final class PhabricatoravaCoreCsCS
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'cs_CS';
  }

  protected function getTranslations() {
    return array(
      'Anti-Vandalism' => 'Antivandalismus',
      'compute score for given transactions.' => 'vypočítat skóre pro dané transakce.',
      'Vandalism detected' => 'Zjištěn vandalismus',
      'The username for whom transactions will be rolled back.' => 'Uživatelské jméno, pro které budou transakce vráceny zpět.',
      'No vandalism detected.' => 'Nebyl zjištěn vandalismus.',
      'The time period examined when scoring edits made by a user.' => 'Časové období zkoumané při hodnocení úprav provedených uživatelem.',
      'Adjust the base scores for each transaction type' => 'Upravte základní skóre pro každý typ transakce',
      'Quarantine the vandal account.' => 'Dejte do karantény vandalský účet.',
      'The number of tasks a new user can edit before we react.' => 'Počet úkonů, které může nový uživatel provést, než zareagujeme.',
      'Options for tuning the antivandalism filter.' => 'Možnosti ladění antivandalistického filtru.',
      'Disable the accounts of vandals when these limits are exceeded' => 'Při překročení těchto limitů deaktivujte účty vandalů',
      'The specified username / userPHID was not found' => 'Zadané uživatelské jméno / userPHID nebylo nalezeno',
      'Disable vandal accounts.' => 'Zakázat vandalské účty.',
      'The username for whom transactions will be scored.' => 'Uživatelské jméno, pro které budou transakce hodnoceny.',
      '%s triggered vandalism countermeasures (%s) by editing %s.' => array(
        '%s spustil protiopatření proti vandalismu (%s) editací %s.',
        '%s spustila protiopatření proti vandalismu (%s) editací %s.',
      ),
      'No action' => 'Žádná akce',
      'Scan for vandalism' => 'Zkontrolujte vandalismus',
    );
  }

}
