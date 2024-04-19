<?php

final class PhabricatorConsoleMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Site' => 'ဆိုဒ်',
      'Reconnect' => 'ပြန်လည်ချိတ်ဆက်ရန်',
      'Replay' => 'ပြန်လည်ပြသရန်',
    );
  }

}
