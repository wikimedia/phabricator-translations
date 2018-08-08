<?php

final class PhabricatorHelpMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Change Settings' => 'အပြင်အဆင်များ ပြောင်းလဲရန်',
      '%s Help' => '%s အကူအညီ',
    );
  }

}
