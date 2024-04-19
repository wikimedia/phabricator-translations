<?php

final class PhabricatorPhrequentDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => 'Newke Guriyeno',
      'Ended on %s' => '%s de baş biyo',
      'Interrupted' => 'Bıriyayo',
      'Ended' => 'Baş biyo',
      'Stop' => 'Vınde',
      'Not Working Now' => 'Enewke Nêgureniyeno',
      'Started At' => 'Dest pêno',
      '%s (%s ago)' => '%s (%s veri)',
      'Phrequent' => 'Phrequent',
    );
  }

}
