<?php

final class PhabricatorOwnersMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'owner' => 'ပိုင်ရှင်',
      'Weak' => 'အားနည်း',
      'Authority' => 'အခွင့်အာဏာ',
      'Strong' => 'အားကောင်း',
    );
  }

}
