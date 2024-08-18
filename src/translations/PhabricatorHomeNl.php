<?php

final class PhabricatorHomeNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Commandocentrum',
      'More Applications' => 'Meer toepassingen',
      'Built-in Homepage' => 'Ingebouwde startpagina',
    );
  }

}
