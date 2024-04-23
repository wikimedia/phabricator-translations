<?php

final class PhabricatorConduitSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Access token does not exist.' => 'Žeton za dostop ne obstaja.',
      'Really terminate all active API tokens? Any systems using these tokens will no longer be able to make API requests.' => 'Ali res želite prekineti vse aktivne API-žetone? Zahtevkov API ne bodo mogli več izvajati nobeni sistemi, ki uporabljajo te žetone.',
      'Invalid JSON input.' => 'Neveljaven JSON-vnos.',
      'Request is missing required "%s" parameter.' => 'Zahtevku manjka obvezni parameter »%s«.',
      'Errors' => 'Napake',
      'User PHID.' => 'PHID uporabnika.',
      'Output Format' => 'Izhodni format',
      'Integer overflow.' => 'Presežek celega števila.',
      'Terminate Token' => 'Ukini žeton',
    );
  }

}
