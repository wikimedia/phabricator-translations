<?php

final class PhabricatorBaseCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Cap aplicació \'%s\'!',
      'Can Configure Application' => 'Pot configurar l\'aplicació',
      'Can Use Application' => 'Pot utilitzar l\'aplicació',
      'Public Access' => 'Accés públic',
      'Core Applications' => 'Aplicacions del nucli',
      'No application!' => 'Cap aplicació!',
      '%s Application' => 'Aplicació %s',
      'Developer Tools' => 'Eines de desenvolupador',
      'Allow Disabled' => 'Permet deshabilitat',
    );
  }

}
