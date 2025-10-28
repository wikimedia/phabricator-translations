<?php

final class PhabricatorHeraldLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Disabled Rules' => 'Desaktivéiert Reegelen',
      'Enable Rule' => 'Reegel aktivéieren',
      'Invalid Condition' => 'Ongülteg Bedingung',
      'true' => 'wouer',
      'Save Rule' => 'Reegel späicheren',
      'No Effect' => 'Keen Effekt',
      'Invalid Object' => 'Ongültegen Objet',
      'false' => 'falsch',
      '%s (Disabled)' => '%s (Desaktivéiert)',
      'Field: %s' => 'Feld: %s',
      'Recent Requests' => 'Rezent Ufroen',
      'Active Rules' => 'Aktiv Reegelen',
    );
  }

}
