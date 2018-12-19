<?php

final class PhabricatorFactDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Y-Axis' => 'Y-akse',
      'Dimension' => 'Dimension',
      'Processing %s...' => 'Bearbejder %s...',
      'Zzz...' => 'Zzz...',
      '%sms' => '%sms',
      'Chart' => 'Diagram',
      'Destroy all facts.' => 'Destruer alle fakta.',
      'Facts' => 'Fakta',
      'Not Stored' => 'Ikke lagret',
      'Destroying table \'%s\'...' => 'Destruerer tabellen \'%s\'...',
      'Fact' => 'Fakta',
      'Fact "%s"' => 'Fakta "%s"',
      'Not Generated' => 'Ikke genereret',
    );
  }

}
