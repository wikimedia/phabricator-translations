<?php

final class PhabricatorMultimeterDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Misali',
      'Subprocesses' => 'Bındemi',
      '(All)' => '(Pêro)',
      'Samples (%s - %s)' => 'Misali (%s - %s)',
      'By ID' => 'Goreyê ID',
      'Epoch' => 'Dewr',
      'Performance Sampler' => 'Misalwanê performansi',
      'Rate' => 'Rey bıde',
      '%s Req' => '%s Waşt',
      'Multimeter User Guide' => 'Multimetre Qlawuze Karberi',
      '%s Unit(s)' => '%s Unite(y)',
      'By Request' => 'Goreyê waştışi',
      'By Host' => 'Goreyê wayirê keyeyi',
      'Trying to unpause an active multimeter!' => 'Yew multimetreyo keno vındarne yo!',
      'Web Request' => 'Waştışê webi',
      'By Context' => 'Hetê Konteksi',
      'Avg' => 'Medya',
      'By Label' => 'Goreyê etiketi',
      'Multimeter' => 'Multimetre',
      'Viewer' => 'Vênayoğ',
      '%s Event(s)' => '%s Seramey(i)',
      'Static Resource' => 'Çımeyo statik',
      'Multimeter Events' => 'Serameyê multimetrey',
      'By Viewer' => 'Goreyê vênayoğan',
    );
  }

}
