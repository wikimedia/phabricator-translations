<?php

final class PhabricatorMultimeterTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Örnekler',
      'Subprocesses' => 'Alt süreçler',
      '(All)' => '(Hepsi)',
      'Samples (%s - %s)' => 'Örnekler (%s - %s)',
      'By ID' => 'ID\'ye göre',
      'Epoch' => 'Çağ',
      'Performance Sampler' => 'Performans Örnekleyici',
      'Rate' => 'Oyla',
      '%s Req' => '%s İst',
      'Multimeter User Guide' => 'Multimetre Kullanıcı Kılavuzu',
      '%s Unit(s)' => '%s Birim',
      'By Request' => 'İsteğe göre',
      'By Host' => 'Sunucuya göre',
      'Trying to unpause an active multimeter!' => 'Aktif bir multimetre duraklatılmaya çalışılıyor!',
      'Web Request' => 'Web İsteği',
      'By Context' => 'Bağlama göre',
      'Avg' => 'Ort',
      'By Label' => 'Etikete göre',
      'Multimeter' => 'Multimetre',
      'Viewer' => 'İzleyici',
      '%s Event(s)' => '%s Olay',
      'Static Resource' => 'Statik Kaynak',
      'Multimeter Events' => 'Multimetre Olayları',
      'By Viewer' => 'Görüntülenmeye Göre',
    );
  }

}
