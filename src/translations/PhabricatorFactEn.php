<?php

final class PhabricatorFactEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Analyze from the beginning, ignoring cursors.' => 'Analyze from the beginning, ignoring cursors.',
      'Iterator \'%s\' does not exist.' => 'Iterator \'%s\' does not exist.',
      'Manually invoke fact analyzers.' => 'Manually invoke fact analyzers.',
      'No fact engines support generating facts for this object.' => 'No fact engines support generating facts for this object.',
      'Y-Axis' => 'Y-Axis',
      'Executing a fact query requires facts.' => 'Executing a fact query requires facts.',
      'Process only iterator __name__.' => 'Process only iterator __name__.',
      'Cursor %s does not exist or is already reset.' => 'Cursor %s does not exist or is already reset.',
      'No cursors.' => 'No cursors.',
      'Fact Extraction Report' => 'Fact Extraction Report',
      'Dimension' => 'Dimension',
      'Processing %s...' => 'Processing %s...',
      'Zzz...' => 'Zzz...',
      'No Stored Datapoints' => 'No Stored Datapoints',
      '%sms' => '%sms',
      'Processing cursor \'%s\'.' => 'Processing cursor \'%s\'.',
      'Show a list of fact engines.' => 'Show a list of fact engines.',
      'Chart' => 'Chart',
      'Chart and Analyze Data' => 'Chart and Analyze Data',
      'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.' => 'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.',
      '%s (Transactions)' => '%s (Transactions)',
      'Show a list of fact iterators and cursors.' => 'Show a list of fact iterators and cursors.',
      'Failed to load or generate dimension ID ("%s") for dimension key "%s".' => 'Failed to load or generate dimension ID ("%s") for dimension key "%s".',
      'Destroy all facts.' => 'Destroy all facts.',
      'Facts' => 'Facts',
      'Resetting cursor %s...' => 'Resetting cursor %s...',
      'Not Stored' => 'Not Stored',
      'Reset cursor __cursor__.' => 'Reset cursor __cursor__.',
      'Skip analysis of aggregate facts.' => 'Skip analysis of aggregate facts.',
      'No Engines' => 'No Engines',
      'Destroying table \'%s\'...' => 'Destroying table \'%s\'...',
      'Fact' => 'Fact',
      'Unknown fact ("%s") for engine "%s".' => 'Unknown fact ("%s") for engine "%s".',
      'Fact "%s"' => 'Fact "%s"',
      'Consistent Fact' => 'Consistent Fact',
      'Count of %s' => 'Count of %s',
      'Not Generated' => 'Not Generated',
      'Plot Chart' => 'Plot Chart',
    );
  }

}
