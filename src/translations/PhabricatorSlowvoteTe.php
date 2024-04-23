<?php

final class PhabricatorSlowvoteTe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'te';
  }

  protected function getTranslations() {
    return array(
      '%s (%d / %d)' => '%s (%s / %s)',
    );
  }

}
