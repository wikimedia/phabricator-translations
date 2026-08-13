<?php

final class PhabricatorPolicyLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Invalid action \'%s\'!' => 'Ongülteg Aktioun „%s“!',
  'Invalid value `%s`' => 'Ongültege Wäert „%s“',
  'All Users' => 'All Benotzer',
);
  }

}
