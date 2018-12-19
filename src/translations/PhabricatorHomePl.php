<?php

final class PhabricatorHomePl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Centrum dowodzenia',
      'More Applications' => 'Więcej aplikacji',
      'Built-in Homepage' => 'Wbudowana strona główna',
    );
  }

}
