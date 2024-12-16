<?php

final class PhabricatorDiffusionLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Symbols' => 'Symboler',
      'Identical' => 'Identesch',
      'Wrong Type' => 'Falschen Typ',
      'Identities' => 'Identitéiten',
      'Limits' => 'Limitten',
      'Changes' => 'Ännerungen',
      'External' => 'Extern',
      'Integrations' => 'Integratiounen',
      'Edit Symbols' => 'Symboler änneren',
      '%s Bytes' => '%s Byte',
      'Enormous Changes' => 'Grouss Ännerungen',
      'Edit Limits' => 'Limitten änneren',
      'Not Found' => 'Net fonnt',
      'Invalid mode "%s".' => 'Ongültege Modus „%s“.',
      'Changes (%s)' => 'Ännerungen (%s)',
    );
  }

}
