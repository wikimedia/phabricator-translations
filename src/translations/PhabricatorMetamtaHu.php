<?php

final class PhabricatorMetamtaHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Cc' => 'Másolat',
      'Related PHID' => 'Kapcsolódó PHID',
      'Related PHID: %s' => 'Kapcsolódó PHID: %s',
      'Related Object' => 'Kapcsolódó objektum',
    );
  }

}
