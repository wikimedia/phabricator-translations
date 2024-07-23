<?php

final class PhabricatorPolicySl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Other: %s' => 'Drugo: %s',
      'Allow Public Visibility' => 'Dovoli javno vidnost',
      'Note:' => 'Opomba:',
      'Require Login' => 'Potrebna je prijava',
      'Options relating to object visibility.' => 'Možnosti, povezane z vidnostjo objekta.',
    );
  }

}
