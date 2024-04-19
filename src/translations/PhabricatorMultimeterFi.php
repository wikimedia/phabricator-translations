<?php

final class PhabricatorMultimeterFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      '(All)' => '(Kaikki)',
      'Performance Sampler' => 'Suorituskykysampleri',
      'Multimeter' => 'Yleismittari',
    );
  }

}
