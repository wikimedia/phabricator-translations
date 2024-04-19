<?php

final class PhabricatorTokensEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Piece of Eight' => 'Real de a ocho',
      'Manufacturing Defect?' => '¿Defecto de fabricación?',
      'Doubloon' => 'Doblón',
      'Baby Tequila' => 'Agave bebé',
      'Pirate Logo' => 'Logo pirata',
      'Pterodactyl' => 'Pterodáctilo',
    );
  }

}
