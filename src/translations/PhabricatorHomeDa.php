<?php

final class PhabricatorHomeDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Kommandocentral',
      'More Applications' => 'Flere applikationer',
      'Built-in Homepage' => 'Indbygget hjemmeside',
    );
  }

}
