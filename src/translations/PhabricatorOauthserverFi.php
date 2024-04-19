<?php

final class PhabricatorOauthserverFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Log In with %s' => 'Kirjaudu sisään Phabricatorilla',
      'Server Error' => 'Palvelinvirhe',
      'Create OAuth Server' => 'Luo OAuth-palvelin',
    );
  }

}
