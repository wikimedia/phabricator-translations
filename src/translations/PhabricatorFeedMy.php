<?php

final class PhabricatorFeedMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Include Projects' => 'ပရောဂျက်များ ပါဝင်သည်',
      'Include Users' => 'အသုဲးပြုသူများ ပါဝင်သည်',
    );
  }

}
