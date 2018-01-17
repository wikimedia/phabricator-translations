<?php

final class PhabricatorHomeNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Kommandosentral',
      'More Applications' => 'Flere applikasjoner',
      'Built-in Homepage' => 'Innebygd hjemmeside',
    );
  }

}
