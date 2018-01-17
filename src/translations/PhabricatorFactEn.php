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
      'Y-Axis' => 'Y-Axis',
      'Process only iterator __name__.' => 'Process only iterator __name__.',
      'Cursor %s does not exist or is already reset.' => 'Cursor %s does not exist or is already reset.',
      'No cursors.' => 'No cursors.',
      'There are no facts that can be plotted yet.' => 'There are no facts that can be plotted yet.',
      'Processing aggregates.' => 'Processing aggregates.',
      'Processing %s...' => 'Processing %s...',
      'Zzz...' => 'Zzz...',
      'Total Objects' => 'Total Objects',
      'Processing cursor \'%s\'.' => 'Processing cursor \'%s\'.',
      'Fact (%s)' => 'Fact (%s)',
      'Show a list of fact engines.' => 'Show a list of fact engines.',
      'Chart' => 'Chart',
      'Chart and Analyze Data' => 'Chart and Analyze Data',
      'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.' => 'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.',
      'Show a list of fact iterators and cursors.' => 'Show a list of fact iterators and cursors.',
      'There are %d raw fact(s) in storage.' => 'There are %s raw fact(s) in storage.',
      'Total Objects of type %s' => 'Total Objects of type %s',
      'Objects of type %s' => 'Objects of type %s',
      'Destroy all facts.' => 'Destroy all facts.',
      'There are %d aggregate fact(s) in storage.' => 'There are %s aggregate fact(s) in storage.',
      'Facts' => 'Facts',
      'Resetting cursor %s...' => 'Resetting cursor %s...',
      'Reset cursor __cursor__.' => 'Reset cursor __cursor__.',
      'Skip analysis of aggregate facts.' => 'Skip analysis of aggregate facts.',
      'Destroying table \'%s\'...' => 'Destroying table \'%s\'...',
      'Fact' => 'Fact',
      'Show status of fact data.' => 'Show status of fact data.',
      'Count of %s' => 'Count of %s',
      'Facts Last Updated' => 'Facts Last Updated',
      'No Chartable Facts' => 'No Chartable Facts',
      'Plot Chart' => 'Plot Chart',
    );
  }

}
