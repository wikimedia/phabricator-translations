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
      'Offset pages through visible objects only.' => 'Zamakni strani samo skozi vidne objekte.',
      'Require Login' => 'Potrebna je prijava',
      'Options relating to object visibility.' => 'Možnosti, povezane z vidnostjo objekta.',
    );
  }

}
