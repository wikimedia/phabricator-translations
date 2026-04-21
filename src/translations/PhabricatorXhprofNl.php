<?php

final class PhabricatorXhprofNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'XHProf Samples' => 'XHProf-voorbeelden',
  'Sampled (1/%d)' => 'Bemonsterd (!/%d)',
  'All Samples' => 'Alle monsters',
  'Parent Calls' => 'Bovenliggende aanroepen',
  'Wall Time (Inclusive)' => 'Muurtijd (inclusief)',
  'Symbol' => 'Symbool',
  'Wall Time (Exclusive)' => 'Muurtijd (exclusief)',
  'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'De totale muurtijd die is besteed aan deze functie en alle subfuncties (subfuncties zijn andere functies die tijdens de uitvoering zijn aangeroepen).',
  '%s μs' => '%s μs',
  'Unnamed Sample' => 'Niet-vernoemd monster',
  '%s Profile' => 'Profiel van %s',
  'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => 'De totale muurtijd van deze functie, exclusief de tijd die is besteed aan subfuncties (subfuncties zijn andere functies die tijdens de uitvoering zijn aangeroepen).',
  'Manual Run' => 'Handmatige uitvoering',
  'Drag and drop .xhprof files to import them.' => 'Sleep .xhprof-bestanden naar dit venster om ze te importeren.',
  'PHP Profiling Tool' => 'PHP-profileringshulpmiddel',
  'Metrics for this Call' => 'Statistieken voor deze aanroep',
  'Failed to unserialize XHProf profile!' => 'Het deserialiseren van het XHProf-profiel is mislukt!',
  'XHProf Profile' => 'XHProf-profiel',
  'Drop .xhprof Files to Import' => 'Sleep .xhprof-bestanden naar de importlocatie.',
  'Wall Time' => 'Muurtijd',
  'Download %s Profile' => '%s-profiel downloaden',
  'Child Calls' => 'Subfunctieaanroepen',
);
  }

}
