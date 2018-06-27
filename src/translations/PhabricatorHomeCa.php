<?php

final class PhabricatorHomeCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Centre de comandes',
      'More Applications' => 'Més aplicacions',
      'Built-in Homepage' => 'Pàgina d\'inici fabricada',
    );
  }

}
