<?php

final class PhabricatorNuanceMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Work' => 'လုပ်ငန်း',
      'Sources' => 'ရင်းမြစ်များ',
      'User %s' => 'အသုံးပြုသူ %s',
      'All Sources' => 'ရင်းမြစ်များ အားလုံး',
    );
  }

}
