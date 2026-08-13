<?php

final class PhabricatorOauthserverLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Server Error' => 'Server-Feeler',
  'Edit OAuth Server' => 'OAuth-Server änneren',
  'OAuth Server' => 'OAuth-Server',
  'Edit OAuth Server: %s' => 'OAuth-Server änneren: %s',
);
  }

}
