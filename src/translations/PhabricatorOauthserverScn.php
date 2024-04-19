<?php

final class PhabricatorOauthserverScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Server Error' => 'Erruri dû server',
      'Invalid Redirect URI' => 'URI di rimannu nun vàlidu',
      'OAuth: %s' => 'OAuth: %s',
      'Alas!' => 'Osara!',
      'Redirect URI' => 'URI di rimannu',
    );
  }

}
