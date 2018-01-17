<?php

final class PhabricatorXhprofEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'XHProf Samples',
      'Sampled (1/%d)' => 'Sampled (1/%s)',
      'All Samples' => 'All Samples',
      'Parent Calls' => 'Parent Calls',
      'Wall Time (Inclusive)' => 'Wall Time (Inclusive)',
      'Symbol' => 'Symbol',
      'Wall Time (Exclusive)' => 'Wall Time (Exclusive)',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'Total wall time spent in this function and all of its children (children are other functions it called while executing).',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Unnamed Sample',
      '%s Profile' => '%s Profile',
      'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => 'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).',
      'Manual Run' => 'Manual Run',
      'Drag and drop .xhprof files to import them.' => 'Drag and drop .xhprof files to import them.',
      'PHP Profiling Tool' => 'PHP Profiling Tool',
      'Metrics for this Call' => 'Metrics for this Call',
      'Failed to unserialize XHProf profile!' => 'Failed to unserialize XHProf profile!',
      'XHProf Profile' => 'XHProf Profile',
      'Drop .xhprof Files to Import' => 'Drop .xhprof Files to Import',
      'Wall Time' => 'Wall Time',
      'Download %s Profile' => 'Download %s Profile',
      'Child Calls' => 'Child Calls',
    );
  }

}
