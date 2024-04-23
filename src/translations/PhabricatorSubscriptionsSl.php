<?php

final class PhabricatorSubscriptionsSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'subscribers' => 'naročnikov',
      'Automatically Subscribed' => 'Samodejno naročen_a',
      '%d other(s)' => '%s drug(ih)',
      'Add subscribers' => 'Dodaj naročnike',
      'Add subscribers.' => 'Dodaj naročnike.',
    );
  }

}
