<?php

final class PhabricatorHomeEs
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Centro de órdenes',
      'More Applications' => 'Más aplicaciones',
      'Built-in Homepage' => 'Página inicial incorporada',
    );
  }

}
