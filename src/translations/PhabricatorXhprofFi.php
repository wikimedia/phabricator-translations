<?php

final class PhabricatorXhprofFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'XHProf-näytteet',
      'All Samples' => 'Kaikki näytteet',
      'Wall Time (Inclusive)' => 'Seinäaika (kattava)',
      'Symbol' => 'Symboli',
      'Wall Time (Exclusive)' => 'Seinäaika (valikoiva)',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Nimeätön näyte',
      '%s Profile' => '%s profiili',
      'Manual Run' => 'Manuaalinen ajo',
      'Drag and drop .xhprof files to import them.' => 'Vedä ja pudota .xhprof-tiedostot tuodaksesi ne.',
      'PHP Profiling Tool' => 'PHP-profilointityökalu',
      'Metrics for this Call' => 'Vertailuluvut tälle kutsulle',
      'Failed to unserialize XHProf profile!' => 'XHProf-profiilin unserialisointi epäonnistui!',
      'XHProf Profile' => 'XHProf profiili',
      'Drop .xhprof Files to Import' => 'Pudota .xhprof-tiedostot tuodaksesi',
      'Wall Time' => 'Seinäaika',
      'Download %s Profile' => 'Lataa %s profiili',
      'Child Calls' => 'Lapsiobjektikutsut',
    );
  }

}
