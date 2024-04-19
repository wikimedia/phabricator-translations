<?php

final class PhabricatorOwnersScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      '"" (empty string)' => '"" (stringa vacanti)',
      'Include' => 'Ncludi',
      'Weak' => 'Dèbbuli',
      'Authority' => 'Auturitati',
    );
  }

}
