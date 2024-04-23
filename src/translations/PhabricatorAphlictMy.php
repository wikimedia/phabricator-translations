<?php

final class PhabricatorAphlictMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Stop the notification server.' => 'အသိပေးဆာဗာအား ရပ်တန့်ပါ',
      'Server exited!' => 'ဆာဗာ တည်ရှိပြီ',
    );
  }

}
