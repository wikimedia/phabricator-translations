<?php

final class PhabricatorRepositoryDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'branch' => 'forgrening',
      'bookmark:' => 'bogmærke:',
      'Result Name' => 'Resultatnavn',
      'bookmark' => 'bogmærke',
      'No support yet.' => 'Endnu ikke understøttet.',
      '%s ♻ %s' => '%s ♻ %s',
      'Query took %s ms.' => 'Forespørgsel tog %s ms.',
      'Short Names' => 'Korte navne',
      '%s enabled this URI.' => '%s aktiverede dette URI.',
      'dangerous change' => 'farlig ændring',
      'Enormous' => 'Enorm',
      'Create Identity' => 'Opret identitet',
      'Rewrite' => 'Omskriv',
      'DATA AT RISK' => 'DATA I FARE',
      'Move' => 'Flyt',
      'Blocked By' => 'Blokeret af',
      'SSH' => 'SSH',
      'DETAILS' => 'DETALJER',
      'Mercurial' => 'Mercurial',
      'Rejected: Dangerous' => 'Afvist: Farlig',
      'Expected \'%s\', got %s.' => 'Forventede \'%s\', fik %s.',
      'Rejected: Enormous' => 'Afvist: Enorm',
      'Dangerous' => 'Farlig(t)',
      'Protocol for \'%s\'.' => 'Protokol for \'%s\'.',
      'Observe' => 'Observer',
      'Discovering "%s"...' => 'Opdager "%s"...',
      'REFERENCES' => 'REFERENCER',
      'tag:' => 'tag:',
      'BRANCHES' => 'GRENE',
      'HTTP' => 'HTTP',
      'HTTPS' => 'HTTPS',
    );
  }

}
