<?php

final class PhabricatorMetaMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'သတင်းအချက်အလက်',
      'Confirmation' => 'အတည်ပြုခြင်း',
    );
  }

}
