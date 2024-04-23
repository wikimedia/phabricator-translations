<?php

final class PhabricatorAuditSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      '%s added subscribers: %s.' => '%s lade till prenumeranter: %s.',
      '%s added subscribers...' => '%s lade till prenumeranter...',
      'Welcome to Audit' => 'Välkommen till Audit',
      '%s edited subscribers; added: %s, removed: %s.' => '%s redigerade prenumeranter; lade till: %s, tog bort: %s.',
      '%s removed subscribers: %s.' => '%s tog bort prenumeranter: %s.',
    );
  }

}
