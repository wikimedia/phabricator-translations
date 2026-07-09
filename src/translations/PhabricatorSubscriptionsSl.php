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
  '%d other(s)' => '%d drug(ih)',
  'Unsubscribe' => 'Odjavi me',
  'Add subscribers.' => 'Dodaj naročnike.',
);
  }

}
