<?php

final class PhabricatorCelerityEu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'eu';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => 'Kolore estandarrak erabili',
      'No resource source exists with name "%s"!' => 'Ez dago "%s" izena duen baliabide iturririk!',
      'Writing map "%s".' => '"%s" mapa idazten.',
      'Use High Contrast Colors' => 'Erabili Kontraste Altuko Koloreak',
      'Dark Mode (Experimental)' => 'Modu Iluna (Esperimentala)',
      'Use Larger Font Size' => 'Erabili Letra Tipo Handiagoa',
    );
  }

}
