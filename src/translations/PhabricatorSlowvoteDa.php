<?php

final class PhabricatorSlowvoteDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      '%s renamed %s.' => '%s pmdøbte %s.',
      'Reopen' => 'Genåbn',
      'Responses' => 'Svar',
    );
  }

}
