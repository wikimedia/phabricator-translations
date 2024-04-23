<?php

final class PhabricatorHeraldMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Forbidden' => 'ခွင့်မပြုပါ',
      'Do nothing.' => 'ဘာတစ်ခုမှ မလုပ်ဆောင်ရန်',
      'Conditions' => 'အခြေနေများ',
      'No Effect' => 'သက်ရောက်မှု မရှိ',
    );
  }

}
