<?php

final class PhabricatorHomeEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Centro de órdenes',
      'More Applications' => 'Más aplicaciones',
      'Built-in Homepage' => 'Página inicial incorporada',
    );
  }

}
