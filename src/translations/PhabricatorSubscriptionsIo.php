<?php

final class PhabricatorSubscriptionsIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
      'subscribers' => 'abonanti',
      '%d other(s)' => '%s altro/altri',
    );
  }

}
