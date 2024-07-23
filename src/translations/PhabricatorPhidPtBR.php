<?php

final class PhabricatorPhidPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => 'Recuperar informações sobre um PHID arbitrário.',
      'Restricted %s' => 'Restrito %s',
    );
  }

}
