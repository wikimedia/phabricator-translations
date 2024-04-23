<?php

final class PhabricatorMultimeterSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      '(All)' => '(Vsi)',
      'Performance Sampler' => 'Vzorčevalnik zmogljivosti',
    );
  }

}
