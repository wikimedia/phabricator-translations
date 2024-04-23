<?php

final class PhabricatorFundDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Unable to load %s!' => 'Kunne ikke indlæse %s!',
      'Risks/Challenges' => 'Risici/Udfordringer',
      'Donate' => 'Donér',
    );
  }

}
