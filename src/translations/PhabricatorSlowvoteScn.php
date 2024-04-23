<?php

final class PhabricatorSlowvoteScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      '%s (%d / %d)' => '%s (%s / %s)',
    );
  }

}
