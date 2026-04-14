<?php

final class PhabricatorAlmanacIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
  'Namespace' => 'Nomaro (\'\'namespace\'\')',
  'Namespace %d' => 'Nomaro (\'\'namespace\'\') %d',
  'Namespace %s' => 'Nomaro %s',
  'Namespaces' => 'Nomari (\'\'namespaces\'\')',
);
  }

}
