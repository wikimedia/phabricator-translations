<?php

final class PhabricatorPhortuneFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Choose a Merchant' => 'Valitse kauppies',
      'Add Address' => 'Lisää osoite',
      'Invoices' => 'Laskut',
      'Add Email Address' => 'Lisää sähköpostiosoite',
      'Email Address Details' => 'Sähköpostiosoitteen tiedot',
      'Create Account' => 'Luo tunnus',
      'INVOICE DETAIL' => 'LASKUN TIEDOT',
    );
  }

}
