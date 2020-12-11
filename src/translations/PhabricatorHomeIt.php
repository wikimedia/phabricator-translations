<?php

final class PhabricatorHomeIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Centro di comando',
      'More Applications' => 'Altre applicazioni',
      'Built-in Homepage' => 'Pagina iniziale incorporata',
    );
  }

}
