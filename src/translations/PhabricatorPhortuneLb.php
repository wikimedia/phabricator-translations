<?php

final class PhabricatorPhortuneLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Ready' => 'Prett',
      'New email address.' => 'Nei E-Mail-Adress.',
      'Invoices' => 'Rechnungen',
      'Email address.' => 'E-Mail-Adress.',
      'Contact Information' => 'Kontaktinformatioun',
      'New Managers' => 'Nei Manager',
      'Already Disabled' => 'Schonn Desaktivéiert',
      'Error Code' => 'Feeler-Code',
    );
  }

}
