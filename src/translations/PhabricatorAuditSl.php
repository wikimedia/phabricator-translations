<?php

final class PhabricatorAuditSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
  'USERS' => 'UPORABNIKI',
  'Update all commits in all repositories.' => 'Posodobi vse izročke v vseh shrambah.',
  'none' => 'noben',
);
  }

}
