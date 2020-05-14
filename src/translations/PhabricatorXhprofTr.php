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
      'Parent Calls' => 'Üst Çağrıları',
      'Wall Time (Inclusive)' => 'Duvar Saati (Dahil)',
      'Symbol' => 'Simge',
      'Wall Time (Exclusive)' => 'Duvar Saati (Özel)',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => 'Bu işlevde ve tüm çocuklarında harcanan toplam duvar süresi (alt yürütülürken çağırdıkları diğer işlevlerdir).',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Adsız Örnek',
      '%s Profile' => '%s Profili',
      'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => 'Bu işlev için harcanan duvar süresi, altlarda harcanan zaman hariç (alt yürütülürken adlandırdıkları diğer işlevlerdir).',
      'Manual Run' => 'Manüel Çalıştırma',
      'Drag and drop .xhprof files to import them.' => 'İçe aktarmak için .xhprof dosyalarını sürükleyip bırakın.',
      'PHP Profiling Tool' => 'PHP Profil Oluşturma Aracı',
      'Metrics for this Call' => 'Bu Çağrı Metrikleri',
      'Failed to unserialize XHProf profile!' => 'XHProf profili seri hale getirilemedi!',
      'XHProf Profile' => 'XHProf Profili',
      'Drop .xhprof Files to Import' => '.xhprof Dosyaları İçe Aktarın',
      'Wall Time' => 'Duvar Saati',
      'Download %s Profile' => '%s Profili İndir',
      'Child Calls' => 'Alt Çağrısı',
    );
  }

}
