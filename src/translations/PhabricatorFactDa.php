<?php

final class PhabricatorFactDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Dimension' => 'Dimension',
      'Processing %s...' => 'Bearbejder %s...',
      '%sms' => '%sms',
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
