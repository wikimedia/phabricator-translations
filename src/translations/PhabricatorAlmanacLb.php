<?php

final class PhabricatorAlmanacLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Namespace' => 'Nummraum',
      'Edit Namespace' => 'Nummraum änneren',
      'Namespace Name' => 'Numm vum Nummraum',
      'Reset' => 'Zerécksetzen',
      'Create Namespace' => 'Nummraum uleeën',
      'Namespace %d' => 'Nummraum %s',
      'Namespace %s' => 'Nummraum %s',
      'Invalid Property' => 'Ongülteg Eegenschaft',
      'The name of the namespace.' => 'Den Numm vum Nummraum.',
      'Name of the namespace.' => 'Numm vum Nummraum.',
      'All Namespaces' => 'All Nummraim',
      'Namespaces' => 'Nummraim',
      'Reset Property' => 'Eegenschaft zerécksetzen',
    );
  }

}
