<?php

final class PhabricatorHomeCsCS
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'cs_CS';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Řídicí středisko',
      'More Applications' => 'Více aplikací',
      'Built-in Homepage' => 'Vestavěná domovská stránka',
    );
  }

}
