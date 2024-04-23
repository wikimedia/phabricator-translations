<?php

final class PhabricatorPeopleIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
      'User account "%s" is already approved. You can only approve accounts that are not yet approved.' => 'La konto dil uzero "%s" ja aprobesis. Vu nur povas aprobar konti qui ankore ne aprobesis.',
      'Approves a user.' => 'Aprobar uzero.',
      'Usernames' => 'Nomi dil uzeri',
      'Approved user account "%s".' => 'Uzero-konto aprobita "%s".',
      'emails' => 'e-posti',
      'None of the provided addresses are valid invite recipients. Review the table below for details. Revise the address list to continue.' => 'Nula ek la e-postal adresi informita esas valida. Revizez la tabelo por plusa detali. Revizez la listo di e-postal adresi por durigar.',
    );
  }

}
