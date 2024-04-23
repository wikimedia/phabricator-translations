<?php

final class PhabricatorAuditDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'BENUTZER',
      'Browse and Audit Commits' => 'Entdecke und prüfe Commits',
    );
  }

}
