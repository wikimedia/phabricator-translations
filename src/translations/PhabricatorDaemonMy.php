<?php

final class PhabricatorDaemonMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Clock' => 'နာရီ',
      'Seen' => 'တွေ့မြင်ပြီး',
    );
  }

}
