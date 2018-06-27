<?php

final class PhabricatorHomeFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Centre de Commande',
      'More Applications' => 'Plus d\'applications',
      'Built-in Homepage' => 'Page d\'acceuil intégrée',
    );
  }

}
