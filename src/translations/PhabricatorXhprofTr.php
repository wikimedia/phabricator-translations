<?php

final class PhabricatorXhprofTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'XHProf Örnekleri',
      'Sampled (1/%d)' => 'Örneklenmiş (1/%s)',
      'All Samples' => 'Tüm Örnekler',
      'Parent Calls' => 'Ebeveyn Çağrıları',
      'Wall Time (Inclusive)' => 'Duvar Saati (Dahil)',
      'Symbol' => 'Simge',
      'Wall Time (Exclusive)' => 'Duvar Saati (Özel)',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'Bu işlevde ve tüm çocuklarında harcanan toplam duvar süresi (çocuklar yürütülürken çağırdıkları diğer işlevlerdir).',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Adsız Örnek',
      '%s Profile' => '%s Profili',
      'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => 'Bu fonksiyon için harcanan duvar süresi, çocuklarda harcanan zaman hariç (çocuklar yürütülürken adlandırdıkları diğer fonksiyonlardır).',
      'Manual Run' => 'Manüel Çalıştırma',
      'Drag and drop .xhprof files to import them.' => 'Drag and drop .xhprof files to import them.',
      'PHP Profiling Tool' => 'PHP Profil Oluşturma Aracı',
      'Metrics for this Call' => 'Bu Çağrı için Metrikler',
      'Failed to unserialize XHProf profile!' => 'XHProf profili seri hale getirilemedi!',
      'XHProf Profile' => 'XHProf Profili',
      'Drop .xhprof Files to Import' => '.xhprof Dosyaları İçe Aktarın',
      'Wall Time' => 'Duvar Saati',
      'Download %s Profile' => '%s Profili İndir',
      'Child Calls' => 'Alt Çağrısı',
    );
  }

}
