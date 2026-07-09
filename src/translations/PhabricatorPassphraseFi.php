<?php

final class PhabricatorPassphraseFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'The username can be no longer than %s characters.' => 'Käyttäjätunnuksessa ei saa olla yli %s merkkiä.',
  'Public Key (%s)' => 'Julkinen avain (%s)',
);
  }

}
