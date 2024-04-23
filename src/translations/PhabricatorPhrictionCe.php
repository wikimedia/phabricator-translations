<?php

final class PhabricatorPhrictionCe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ce';
  }

  protected function getTranslations() {
    return array(
      'Last Edited' => 'Хийцам бина',
      '« Previous Change' => '« Хьалхара нисдар',
      'Edited by %s' => 'Хийцам бина %s',
    );
  }

}
