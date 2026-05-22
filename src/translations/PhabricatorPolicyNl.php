<?php

final class PhabricatorPolicyNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Access Denied: %s' => 'Toegang geweigerd: %s',
  'is waning' => 'in het laatste kwartier is',
  'Object URI' => 'Object-URI',
  'when the moon' => 'als de maan',
  'is waxing' => 'wassende is',
  'is new' => 'nieuw is',
  'is full' => 'vol is',
);
  }

}
