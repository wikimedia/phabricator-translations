<?php

final class PhabricatorAuditFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'KÄYTTÄJÄT',
      '%s removed subscribers: %s.' => '%s poisti tilaajia: %s',
      'Permanent' => 'Pysyvä',
    );
  }

}
