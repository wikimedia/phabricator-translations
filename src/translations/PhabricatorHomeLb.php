<?php

final class PhabricatorHomeLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Kommandozenter',
      'More Applications' => 'Méi Applikatiounen',
      'Built-in Homepage' => 'Integréiert Homepage',
    );
  }

}
