<?php

final class PhabricatorHomeCs
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'cs';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Řídicí středisko',
      'More Applications' => 'Více aplikací',
      'Built-in Homepage' => 'Vestavěná domovská stránka',
    );
  }

}
