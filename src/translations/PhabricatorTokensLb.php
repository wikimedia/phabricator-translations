<?php

final class PhabricatorTokensLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Love' => 'Léift',
      'Barnstar' => 'Medail',
      'Meh!' => 'Mäh!',
      'Yellow Medal' => 'Giel Medail',
      'Cookie' => 'Cookie',
    );
  }

}
