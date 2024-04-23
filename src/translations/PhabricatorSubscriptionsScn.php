<?php

final class PhabricatorSubscriptionsScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      '%d other(s)' => '%s àutru/i',
      '%s, %s, %s and %s' => '%s, %s, %s e %s',
    );
  }

}
