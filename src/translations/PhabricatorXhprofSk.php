<?php

final class PhabricatorXhprofSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'XHProf Samples' => 'Vzorky XHProf',
  'Sampled (1/%d)' => 'Vzorkované (1/%d)',
  'All Samples' => 'Všetky vzorky',
  'Parent Calls' => 'Nadradené volania',
  'Wall Time (Inclusive)' => 'Reálny čas (vrátane podfunkcií)',
  'Symbol' => 'Symbol',
  'Wall Time (Exclusive)' => 'Reálny čas (bez podfunkcií)',
  'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'Celkový reálny čas strávený v tejto funkcii a vo všetkých jej podfunkciách (podfunkcie sú ďalšie funkcie, ktoré počas vykonávania zavolala).',
  '%s μs' => '%s μs',
  'Unnamed Sample' => 'Nepomenovaná vzorka',
  '%s Profile' => 'Profil %s',
  'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => 'Reálny čas strávený v tejto funkcii bez času stráveného v podfunkciách (podfunkcie sú ďalšie funkcie, ktoré počas vykonávania zavolala).',
  'Manual Run' => 'Manuálne spustenie',
  'Drag and drop .xhprof files to import them.' => 'Súbory .xhprof importujete presunutím myšou.',
  'PHP Profiling Tool' => 'Nástroj na profilovanie PHP',
  'Metrics for this Call' => 'Metriky pre toto volanie',
  'Failed to unserialize XHProf profile!' => 'Nepodarilo sa deserializovať profil XHProf!',
  'XHProf Profile' => 'Profil XHProf',
  'Drop .xhprof Files to Import' => 'Súbory .xhprof importujete ich presunutím sem',
  'Wall Time' => 'Reálny čas',
  'Download %s Profile' => 'Stiahnuť profil %s',
  'Child Calls' => 'Podradené volania',
);
  }

}
