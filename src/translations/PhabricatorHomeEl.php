<?php

final class PhabricatorHomeEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Κέντρο εντολών',
      'More Applications' => 'Περισσότερες εφαρμογές',
      'Built-in Homepage' => 'Κατασκευασμένη αρχική σελίδα',
    );
  }

}
