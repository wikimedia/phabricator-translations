<?php

final class PhabricatorPassphraseScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Show Secret' => 'Ammustra sigretu',
      'Login: %s' => 'Trasi: %s',
    );
  }

}
