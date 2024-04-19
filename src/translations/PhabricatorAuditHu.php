<?php

final class PhabricatorAuditHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      '%s added subscribers: %s.' => '%s hozzáadott feliratkozókat: %s.',
      '%s added subscribers...' => '%s hozzáadott feliratkozókat…',
      '%s edited subscribers; added: %s, removed: %s.' => '%s szerkesztette a feliratkozókat; hozzáadva: %s, eltávolítva: %s.',
      '%s removed subscribers: %s.' => '%s eltávolított feliratkozókat: %s.',
    );
  }

}
